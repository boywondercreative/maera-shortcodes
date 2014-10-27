<?php

class Maera_Shortcodes {

	// Array of available shortcodes
	public $shortcodes = array(
		'grid',
		'alerts',
		'buttons',
	);


	/**
	 * Class Constructor
	 * @todo TODO
	 * @since 1.0.0
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'maera_shortcodes_scripts' ) );  // Load scripts in Admin dashboard only.
		add_filter( 'maera/timber/locations', array( $this, 'maera_shortcodes_twigs_location' ), 1 );
	}


	/**
	 * Add the twig "/views" folder.
	 * @todo TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_twigs_location( $locations ) {

		$locations[] = dirname( __FILE__ ) . '/views';
		return $locations;

	}


	/**
	 * Register scripts/styles in the admin panel.
	 * @todo TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_scripts() {

		wp_enqueue_style( 'maera_shortcodes_admin_style', plugins_url( 'assets/css/admin.css', __FILE__ ) );

		if ( get_user_option( 'rich_editing' ) == 'true' ) {
			add_filter( 'mce_external_plugins', array( $this, 'register_tinymce_plugins' ) );
			add_filter( 'mce_buttons_3', array( $this, 'register_tinymce_buttons' ) );
		}
	}


	/**
	 * Add the buttons to TinyMCE
	 * @todo TODO
	 * @since 1.0.0
	 */
	function register_tinymce_buttons( $buttons ) {

		foreach ( $this->shortcodes as $shortcode ) {
			array_push( $buttons, 'maera_' . $shortcode );
		}

		return $buttons;
	}


	/**
	 * Add the plugins to TinyMCE
	 * @todo TODO
	 * @since 1.0.0
	 */
	function register_tinymce_plugins( $plugins ) {

		foreach ( $this->shortcodes as $shortcode ) {
			$plugins['maera_' . $shortcode] = plugins_url( 'assets/js/plugins/' . $shortcode . '.js', __FILE__ );
		}

		return $plugins;
	}

	// End Methods
} // End Class
