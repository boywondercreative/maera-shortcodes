<?php

/**
 * Render the button twig.
 * @todo TODO
 * @since 1.0.0
 */
function maera_buttons( $button, $content = null ) {

	ob_start();  // Capture the output buffer.



	extract( shortcode_atts( array(
		'size'  => 'default',
		'type'  => 'default',
		'value' => 'button',
		'href'  => '#',
	), $button ) );


	$content = preg_replace( '/<br class="nc".\/>/', '', $content );
	$context = Timber::get_context();
	$context['button']  = $button;  // Button size.
	// $context['type']  = $type;  // Button type.
	// $context['value'] = $value; // Button value.
	// $context['href']  = $href;  // Button link.

	$context['content'] = do_shortcode( $content );

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
