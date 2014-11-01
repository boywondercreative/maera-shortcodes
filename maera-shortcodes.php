<?php

/*
Plugin Name: Maera Shortcodes
Plugin URI: http://press.codes
Description: A simple shortcode generator. Adds buttons, alerts and columns to Maera.
Version: 1.0.0
Author: Press Codes
Author URI: http://press.codes
*/


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'MAERA_SHORTCODES_PATH' ) ) {
	define( 'MAERA_SHORTCODES_PATH', dirname( __FILE__ ) );
}

if ( ! defined( 'MAERA_SHORTCODES_URL' ) ) {
	define( 'MAERA_SHORTCODES_URL', plugin_dir_url( __FILE__ ) );
}

//Load the main class.
require_once( __DIR__ . '/includes/class-Maera_Shortcodes.php');

Maera_Shortcodes::get_instance();
