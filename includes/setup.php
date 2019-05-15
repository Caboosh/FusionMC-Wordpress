<?php

function cf_setup_theme() {
    add_theme_support( 'editor-styles' );
    add_theme_support( 'menus' );

    register_nav_menu('modpacks','The Modpacks Dropdown Menu');
// -- Wide Images
    add_theme_support( 'align-wide' );
}