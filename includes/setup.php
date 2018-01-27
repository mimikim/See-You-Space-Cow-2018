<?php

namespace SpaceCow;

class Setup {

    public function __construct() {
       // constructor
    }

    public function init() {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
    }

    public function register_styles() {

        wp_enqueue_style( 'spacecow-css', SPACECOW_URL . '/assets/css/style.min.css' );

    }

    public function register_scripts() {

    }
}
