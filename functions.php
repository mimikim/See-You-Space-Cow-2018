<?php

// create namespace
namespace SpaceCow;

// define global variables
define( 'SPACECOW_URL', get_stylesheet_directory_uri() );
define( 'SPACECOW_INC', get_template_directory() . '/includes/' );

// SPACECOW_URL: http://mkwd.test/wp-content/themes/See-You-Space-Cow-2018
// SPACECOW_INC: /srv/www/mkwebdev/htdocs/wp-content/themes/See-You-Space-Cow-2018/includes/

// setup
require_once SPACECOW_INC . 'PostType.php';
require_once SPACECOW_INC . 'Taxonomy.php';
require_once SPACECOW_INC . 'Helpers.php';
require_once SPACECOW_INC . 'Setup.php';

// run
$setup = new Setup();
$setup->init();
