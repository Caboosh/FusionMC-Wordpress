<?php
function cf_enqueue()
{
    wp_register_style('cf_gfonts_roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900');
    wp_register_style('cf_bulma_css', get_template_directory_uri() . '/css/localbulma.css', '', '1.0.0', 'all');
    wp_register_style('cf_custom_styles', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('cf_custom_styles');
    wp_enqueue_style('cf_bulma_css');
    wp_enqueue_style('cf_gfonts_roboto');

    wp_register_script('cf_jQuery_core', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
    wp_register_script('cf_fontawesome_5', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js', array(), '5.3.1', true);
    wp_enqueue_script('cf_jQuery_core');
    wp_enqueue_script('cf_fontawesome_5');

}