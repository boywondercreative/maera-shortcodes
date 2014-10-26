<?php

/**
 * Render the progress twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_progress( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'type'  => 'default',
		'value' => 0,
	), $params ) );

	$content = preg_replace( '/<br class="nc".\/>/', '', $content );
	$context = Timber::get_context();
	$context['type']  = $type;  // Progress Bar type.
	$context['value'] = $value; // Progress Bar value.

	$context['content'] = do_shortcode( $content );

	Timber::render(
		array(
			'progress.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.

}
add_shortcode( 'maera_progress_bar', 'maera_progress' );
