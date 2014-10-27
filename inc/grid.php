<?php

/**
 * Render the row twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_row( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(), $params ) );

	$content = preg_replace( '/<br class="nc".\/>/', '', $content );
	$context = Timber::get_context();

	Timber::render(
		array(
			'grid.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_row', 'maera_row' );


/**
 * Render the column twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_col( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'columns'       => '1',
		'id'            => 'column-id',
		'extra_classes' => 'column-class',
		'properties'    => 'itemscope',
	), $params ) );

	$content = preg_replace( '/<br class="nc".\/>/', '', $content );
	$context = Timber::get_context();
	$context['columns']       = $columns;       // Column Size.
	$context['id']            = $id;            // Column ID.
	$context['extra_classes'] = $extra_classes; // Column Extra Classes.
	$context['properties']    = $properties;    // Column Properties.
	$context['content'] = do_shortcode( $content );

	Timber::render(
		array(
			'column.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.
}
add_shortcode( 'maera_col', 'maera_col' );
