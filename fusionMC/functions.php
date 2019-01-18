<?php

// Setup


// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');

// Hooks
add_action( 'wp_enqueue_scripts', 'cf_enqueue');
add_action( 'after_setup_theme', 'cf_setup_theme');

// Custom Shortcodes

//Editor Styles
add_editor_style( 'assets/css/editor/editor-style.css' );