<?php
//
//{
//	// SETTINGS
//	$wp_customize->add_setting( 'cf_facebook_handle', array(
//		'default'					=> ''
//	));
//	$wp_customize->add_setting( 'cf_twitter_handle', array(
//		'default'					=> ''
//	));
//
//	// SECTION
//	$wp_customize->add_section( 'cf_social_section', array(
//		'title'						=> __('FusionMC Social Settings', 'fusionmc' ),
//		'priority'					=> 30
//	));
//
//	// CONTROLS
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'cf_social_facebook_input'.
//			array(
//				'label'				=> __('Facebook Handle', 'fusionmc'),
//				'section'			=> 'cf_social_section',
//				'settings'			=> 'cf_facebook_handle',
//			)
//		)
//	);
//}