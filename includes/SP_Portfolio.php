<?php
// custom controller, adds portfolio endpoints
// https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/#examples
// https://developer.wordpress.org/rest-api/extending-the-rest-api/controller-classes/#extending-internal-classes

// for the "get_featured_image" method
require_once 'Helpers.php';

class SP_Portfolio extends WP_REST_Controller {

    // register routes
    public function register_routes() {
        $version = '1';
        $namespace = 'spacecow/v' . $version;
        $base = 'portfolio';

        register_rest_route( $namespace, '/' . $base, array(
            array(
                'methods' => WP_REST_Server::READABLE,
                'callback' => array( $this, 'get_items' ),
                'args' => array(
                    // type argument for category types
                    'type' => array()
                ),
            )
        ) );
    }

    // return all portfolio posts
    public function get_items( $request ) {

        // get type param from request, transform string into array
        $type_ids = json_decode( $request->get_param( 'type' ), true );

        $args = array (
            'fields' => 'ids',
            'posts_per_page' => 100,
            'post_type' => 'mk_portfolio',
        );

        if ( ! empty( $type_ids ) ) {
            $args['tax_query'][] = array(
                'taxonomy' => 'type',
                'field' => 'term_id',
                'terms' => $type_ids
            );
        }

        $query = new\WP_Query( $args );
        $items = $query->posts;
        $data = array();

        foreach( $items as $item ) {
            $itemdata = $this->prepare_item_for_response( $item, $request );
            $data[] = $this->prepare_response_for_collection( $itemdata );
        }

        return new WP_REST_Response( $data, 200 );
    }

    // prepare item for response
    public function prepare_item_for_response( $item, $request ) {
        // return structured data
        return array(
            'id' => $item,
            'title' => get_the_title( $item ),
            'url' => get_permalink( $item ),
            'image' => \SpaceCow\Helpers::get_featured_image( $item ),
            'category_ids' => wp_get_post_terms( $item, 'type' )
        );
    }

}
