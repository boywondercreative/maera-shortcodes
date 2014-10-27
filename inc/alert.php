<?php

/**
 * Render the alert twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_alerts( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'type'  => 'unknown',
		'id'    => 'alert-id',
		'class' => 'alert-class',
	), $params ) ); // Set some defaults in case the user forgets a parameter.

	$context            = Timber::get_context();
	$context['type']    = $type;                    // Alert type.
	$context['id']      = $id;                      // Alert id.
	$context['class']   = $class;                   // Alert class.
	$context['content'] = do_shortcode( $content ); // Alert content.

	Timber::render(
		array(
			'alert.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_alert', 'maera_alerts' );
