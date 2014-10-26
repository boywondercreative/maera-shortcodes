<?php

class Maera_Shortcodes {

	// Array of available shortcodes
	public $shortcodes = array(
		'grid',
		'alerts',
		'buttons',
		'progress',
	);


	/**
	 * Class Constructor
	 * @todo TODO
	 * @since 1.0.0
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'maera_shortcodes_admin_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'maera_shortcodes_scripts' ) );
	}


	/**
	 * Register scripts in the admin panel.
	 * @todo TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_admin_scripts() {

		if ( ! is_admin() ) {
			//wp_enqueue_script( 'maera_shortcodes_init', plugins_url( 'assets/js/init.js', __FILE__ ), array( 'jquery' ) );
		} else {
			wp_enqueue_style( 'maera_shortcodes_admin_style', plugins_url( 'assets/css/admin.css', __FILE__ ) );
		}

		if ( get_user_option( 'rich_editing' ) == 'true' ) {
			add_filter( 'mce_external_plugins', array( $this, 'register_tinymce_plugins' ) );
			add_filter( 'mce_buttons_3', array( $this, 'register_tinymce_buttons' ) );
		}
	}


	/**
	 * Register scripts on the front end.
	 * @todo TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_scripts() {

		// Enqueue Bootstrap CSS
		wp_enqueue_style( 'maera_shortcodes_css', plugins_url( 'assets/css/bootstrap.min.css', __FILE__ ), false, null );
		wp_enqueue_style( 'maera_shortcodes_theme', plugins_url( 'assets/css/bootstrap-theme.min.css', __FILE__ ), false, null );

		// Enqueue Bootstrap JS
		wp_register_script( 'maera_shortcodes_js', plugins_url( 'assets/js/bootstrap.min.js', __FILE__ ), array( 'jquery' ), null, false );
		wp_enqueue_script( 'maera_shortcodes_js' );
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

} //End Class

// Instantiate the class.
$maera_shortcodes = new Maera_Shortcodes();
