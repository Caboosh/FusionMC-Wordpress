<?php

function cf_widgets () {
    register_sidebar(
        array(
            'name'          => __( 'The Default Sidebar', 'sidebar' ),
            'id'            => 'cf_sidebar-default',
            'description'   => __( 'The Default Sidebar for the FusionMC Theme', 'sidebar' ),
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'The Server Status Sidebar', 'server-sidebar' ),
            'id'            => 'cf_sidebar-server',
            'description'   => __( 'The Server Status Sidebar for the FusionMC Theme', 'server-sidebar' ),
        )
    );
}