<?php

/**
 * Render the grid twig.
 * @todo Shortcode logic needs to follow: ( element, sizes, id, extra_classes and properties ).
 * @todo Open the row and render the [maera_col] shortcode within.
 * @since 1.0.0
 */
function maera_columns( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'sizes'         => 'medium', // ?
		'id'            => 'column-id',
		'extra_classes' => 'column-class',
		'properties'    => 'itemscope',
	), $params ) ); // Set some defaults in case the user forgets a parameter.

	$content = preg_replace( '/<br class="nc".\/>/', '', $content );  // Remove the break inserted by the editor.

	$context                  = Timber::get_context();
	$context['sizes']         = $sizes;                   // Column size.
	$context['id']            = $id;                      // Column ID.
	$context['extra_classes'] = $extra_classes;           // Column extra classes.
	$context['properties']    = $properties;              // Column properties.
	$context['content']       = do_shortcode( $content ); // Column content.

	Timber::render(
		array(
			'grid.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_col', 'maera_columns' );
