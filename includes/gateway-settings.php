<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for Tbc Gateway
 */
return array(
	'enabled' => array(
		'title'   => __( 'Enable/Disable', 'woo-tbc' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Tbc', 'woo-tbc' ),
		'default' => 'yes',
	),
	'title' => array(
		'title'       => __( 'Title', 'woo-tbc' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woo-tbc' ),
		'default'     => __( 'Tbc', 'woo-tbc' ),
		'desc_tip'    => true,
	),
	'description' => array(
		'title'       => __( 'Description', 'woo-tbc' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woo-tbc' ),
		'default'     => __( 'Pay with your credit card via Tbc', 'woo-tbc' ),
	),
	'debug' => array(
		'title'       => __( 'Debug Log', 'woo-tbc' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable logging', 'woo-tbc' ),
		'default'     => 'no',
		'description' => sprintf( __( 'Log Tbc events, such as IPN requests, inside <code>%s</code>', 'woo-tbc' ), wc_get_log_file_path( 'tbc' ) ),
	),
	'cert_path' => array(
		'title'       => __( 'Certificate path', 'woo-tbc' ),
		'type'        => 'text',
		'description' => __( 'Absolute path to certificate in .pem format.', 'woo-tbc' ),
		'default'     => __( '/', 'woo-tbc' ),
	),
	'cert_pass' => array(
		'title'       => __( 'Certificate passphrase', 'woo-tbc' ),
		'type'        => 'text',
	),
	'ok_slug' => array(
		'title'       => __( 'Ok slug', 'woo-tbc' ),
		'type'        => 'text',
		'description' => sprintf( __( 'User is redirected here after payment, full url looks like this: <code>%s</code>', 'woo-tbc' ), get_bloginfo( 'url' ) . '/wc-api/ok_slug' ),
		'default'     => __( 'ok', 'woo-tbc' ),
	),
	'fail_slug' => array(
		'title'       => __( 'Fail slug', 'woo-tbc' ),
		'type'        => 'text',
		'description' => sprintf( __( 'User is redirected here if there was a technical error during payment, full url looks like this: <code>%s</code>', 'woo-tbc' ), get_bloginfo( 'url' ) . '/wc-api/fail_slug' ),
		'default'     => __( 'fail', 'woo-tbc' ),
	),
);
