<?php

// create namespace
namespace SpaceCow;

// define global variables
define( 'SPACECOW_URL', get_stylesheet_directory_uri() );
define( 'SPACECOW_TEMPLATE_URL', get_template_directory_uri() );
define( 'SPACECOW_PATH', get_template_directory() . '/' );
define( 'SPACECOW_INC', SPACECOW_PATH . 'includes/' );

require_once SPACECOW_INC . 'setup.php';

// Run the setup functions
$setup = new Setup();
$setup->init();

