<?php

/**
 * Render the button twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_buttons( $params, $content = null ) {

	ob_start();  // Capture the output buffer.

	extract( shortcode_atts( array(
		'color' => 'default',
		'size'  => 'medium',
		'type'  => 'button-type',
		'extra' => 'button-class',
		'href'  => '#',
	), $params ) ); // Set some defaults in case the user forgets a parameter.

	$context            = Timber::get_context();
	$context['color']   = $color;                   // Button color.
	$context['size']    = $size;                    // Button size.
	$context['type']    = $type;                    // Button type.
	$context['extra']   = $extra;                   // Button extra classes.
	$context['href']    = $href;                    // Button link.
	$context['content'] = do_shortcode( $content ); // Button content.

	Timber::render(
		array(
			'buttons.twig',
		),
		$context,
		apply_filters( 'maera/timber/cache', false )
	);

	return ob_get_clean();  // Return the output buffer and clear.

}
add_shortcode( 'maera_button', 'maera_buttons' );
