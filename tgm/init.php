<?php
// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'codeblowing_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function codeblowing_register_required_plugins() {
	$plugins = array(
		array(
			'name'              => 'Elementor Page Builder',
			'slug'              => 'elementor',
            'force_activation'  => false,
			'required'          => true,
		),
		array(
			'name'              => 'WooCommerce',
			'slug'              => 'woocommerce',
            'force_activation'  => false,
			'required'          => true,
		),
		array(
			'name'              => 'Contact Form 7',
			'slug'              => 'contact-form-7',
            'force_activation'  => false,
			'required'          => false,
		),
		array(
			'name'              => 'Mailchimp for WordPress',
			'slug'              => 'mailchimp-for-wp',
            'force_activation'  => false,
			'required'          => false,
		),
		array(
			'name'              => 'Redux Framework',
			'slug'              => 'redux-framework',
            'force_activation'  => true,
			'required'          => true,
		),
	);

	/*
	 * Array of configuration settings.
	 */
	$config = array(
		'id'           => 'saimon',
		'default_path' => '',
		'menu'         => 'saimon-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
	);

	tgmpa( $plugins, $config );
}
