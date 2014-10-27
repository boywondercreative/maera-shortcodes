<?php

/**
 * Render the grid twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_col( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'sizes'         => '2',
		'id'            => 'column-id',
		'extra_classes' => 'column-class',
		'properties'    => 'itemscope',
	), $params ) );

	$content = preg_replace( '/<br class="nc".\/>/', '', $content );  // Remove the break inserted by the editor.
	$context = Timber::get_context();
	$context['sizes']         = $sizes;             // Column size.
	$context['id']            = $id;                // Column ID.
	$context['extra_classes'] = $extra_classes;     // Column extra classes.
	$context['properties']    = $properties;        // Column properties.
	$context['content'] = do_shortcode( $content ); // Column content.

	Timber::render(
		array(
			'grid.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_col', 'maera_col' );
