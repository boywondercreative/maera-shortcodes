<?php

/**
* The main Maera_Shortcodes class
*/

class Maera_Shortcodes {

	// Array of available shortcodes
	public $shortcodes = array(
		'grid',
		'alerts',
		'buttons',
	);

	private static $instance;


	/**
	 * Get the class instance
	 * @todo  TODO
	 * @since 1.0.0
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}



	/**
	 * Class Constructor
	 * @todo  TODO
	 * @since 1.0.0
	 */
	public function __construct() {

		$this->requires();
		add_action( 'init', array( $this, 'maera_shortcodes_scripts' ) );  // Load scripts in Admin dashboard only.
		add_filter( 'maera/timber/locations', array( $this, 'maera_shortcodes_twigs_location' ), 1 );

	}


	/**
	 * Requires
	 * @todo  TODO
	 * @since 1.0.0
	 */
	 static function requires() {
	 	require_once( __DIR__ . '/alert.php');
	 }


	/**
	 * Add the twig "/views" folder.
	 * @todo TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_twigs_location( $locations ) {

		$locations[] = MAERA_SHORTCODES_PATH . '/views';
		return $locations;

	}


	/**
	 * Register scripts/styles in the admin panel.
	 * @todo  TODO
	 * @since 1.0.0
	 */
	function maera_shortcodes_scripts() {

		wp_register_style( 'maera-shortcodes', trailingslashit( MAERA_SHORTCODES_URL ) . 'assets/css/admin.css' );
		wp_enqueue_style( 'maera-shortcodes' );

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
			$plugins['maera_' . $shortcode] = trailingslashit( MAERA_SHORTCODES_URL ) .  'assets/js/plugins/' . $shortcode . '.js';
		}

		return $plugins;
	}

	// End Methods
} // End Class
