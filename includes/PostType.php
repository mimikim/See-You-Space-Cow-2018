<?php

namespace SpaceCow;

class PostType {

    function init() {
        add_action( 'init', array( $this, 'register_portfolio' ) );
    }

    function register_portfolio() {
        $labels = array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Portfolio Item',
            'edit_item' => 'Edit Portfolio Item',
            'new_item' => 'New Portfolio Item',
            'view_item' => 'View Portfolio Item',
            'search_items' => 'Search Portfolio',
            'not_found' => 'No Portfolio Item Found',
            'not_found_in_trash' => 'No Portfolio Item Found in Trash',
            'menu_name' => 'Portfolio'
        );

        $args = array(
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 10,
            'capability_type' => 'post',
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies' => array( 'type' ),
            'has_archive' => true,
            'show_in_rest' => false,
            'rewrite' => array( 'slug' => 'portfolio' )
        );

        register_post_type( 'mk_portfolio', $args );
    }

}

