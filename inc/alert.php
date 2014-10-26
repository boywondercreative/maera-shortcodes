<?php

/**
 * Render the alert twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_alert( $type, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'type' => 'unknown',
	), $type ) );


	$content = preg_replace( '/<br class="nc".\/>/', '', $content );
	$context = Timber::get_context();
	$context['type'] = $type;  // Alert type.
	$context['content'] = do_shortcode( $content );

	Timber::render(
		array(
			'alert.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_notification', 'maera_alert' );
