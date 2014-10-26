<?php

/*
Plugin Name: Maera Shortcodes
Plugin URI: http://press.codes
Description: A simple shortcode generator. Adds buttons, alerts and columns to Maera.
Version: 1.0.0
Author: Press Codes
Author URI: http://press.codes
*/

// Load the main class.
require_once( 'class-Maera_Shortcodes.php' );


// Load individiual shortcodes.
require_once( '/inc/alert.php' );
require_once( '/inc/buttons.php' );
require_once( '/inc/grid.php' );

/**
 * Add the twig "/views" folder.
 * @todo TODO
 * @since 1.0.0
 */
function maera_shortcodes_twigs_location( $locations ) {

	$locations[] = dirname( __FILE__ ) . '/views';
	return $locations;

}
add_filter( 'maera/timber/locations', 'maera_shortcodes_twigs_location', 1 );
