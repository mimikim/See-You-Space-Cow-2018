<?php

namespace SpaceCow;

// portfolio api
require_once 'SC_Portfolio.php';

class Setup {

    function __construct() {
        $this->post_type = new PostType();
        $this->taxonomy = new Taxonomy();
        $this->helpers = new Helpers();
        $this->api = new \SC_Portfolio();
    }

    function init() {
        $this->post_type->init();
        $this->taxonomy->init();

        $this->theme_supports();

        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );

        add_action('rest_api_init', function () {
            $this->api->register_routes();
        });
    }

    // add styles
    function register_styles() {
        wp_enqueue_style( 'spacecow', SPACECOW_URL . '/assets/css/style.min.css' );
    }

    // add javascript
    function register_scripts() {

        $deps = [ 'jquery' ];

        wp_enqueue_script( 'vendors', SPACECOW_URL . '/assets/js/vendors.min.js', $deps, null, true );

        $deps[] = 'vendors';

        if ( is_front_page() ) {
            wp_enqueue_script( 'frontpage', SPACECOW_URL . '/assets/js/frontpage.min.js', $deps, null, true );

            $deps[] = 'frontpage';
        }

        if ( is_post_type_archive( 'mk_portfolio' ) ) {
            wp_enqueue_script( 'portfolio', SPACECOW_URL . '/assets/js/portfolio.min.js', $deps, null, true );

            // passing "theme_url" to javascript
            wp_localize_script('portfolio', 'wp_portfolio', array(
                'filepath' => get_stylesheet_directory_uri(),
                'url' => site_url(),
                'api_nonce' => wp_create_nonce( 'wp_rest' ),
            ) );

            $deps[] = 'portfolio';
        }

        // main scripts
        wp_enqueue_script( 'spacecow-js', SPACECOW_URL . '/assets/js/general.min.js', $deps, null, true );
    }

    // general theme support
    function theme_supports() {
        add_theme_support('post-thumbnails');
        show_admin_bar( false );
    }
}
