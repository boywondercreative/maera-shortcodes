<?php

/**
 * Render the grid twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_grid( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'columns' => '1',
	), $params ) );

	$context = Timber::get_context();
	$context['columns']  = $columns; // Column count.

	$context['content'] = do_shortcode( $content );

	Timber::render(
		array(
			'grid.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.

}
add_shortcode( 'maera_col', 'maera_grid' );
