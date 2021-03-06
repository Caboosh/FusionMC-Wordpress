<?php

// Setup


// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/customiser/social.php');
include(get_template_directory() . '/includes/theme-customiser.php');

// Hooks
add_action( 'wp_enqueue_scripts', 'cf_enqueue' );
add_action( 'after_setup_theme', 'cf_setup_theme' );
add_action( 'widgets_init', 'cf_widgets' );
add_action( 'customize_register', 'cf_customize_register' );

// Custom Shortcodes

//Editor Styles
add_editor_style( 'assets/css/editor/editor-style.css' );