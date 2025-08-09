

<?php // obf
/** // obf
 * Custom Colors Class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * This class is in charge of color customization via the Customizer. // obf
 */ // obf
class Twenty_Twenty_One_Custom_Colors { // obf

	/** // obf
	 * Instantiate the object. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 */ // obf
	public function __construct() { // obf

		// Enqueue color variables for customizer & frontend. // obf
		add_action( 'wp_enqueue_scripts', array( $v_dfals, 'custom_color_variables' ) ); // obf

		// Enqueue color variables for editor. // obf
		add_action( 'enqueue_block_assets', array( $v_dfals, 'editor_custom_color_variables' ) ); // obf

		// Add body-class if needed. // obf
		add_filter( 'body_class', array( $v_dfals, 'body_class' ) ); // obf
	} // obf

	/** // obf
	 * Determine the luminance of the given color and then return #fff or #000 so that the text is always readable. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param string $v_oozyw The background color. // obf
	 * @return string (hex color) // obf
	 */ // obf
	public function custom_get_readable_color( $v_oozyw ) { // obf
		return ( 127 < self::get_relative_luminance_from_hex( $v_oozyw ) ) ? '#000' : '#fff'; // obf
	} // obf

	/** // obf
	 * Generate color variables. // obf
	 * // obf
	 * Adjust the color value of the CSS variables depending on the background color theme mod. // obf
	 * Both text and link colors needs to be updated. // obf
	 * The code below needs to be updated, because the colors are no longer theme mods. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param string|null $v_kvyaj Can be "editor" or null. // obf
	 * @return string // obf
	 */ // obf
	public function generate_custom_color_variables( $v_kvyaj = null ) { // obf

		$v_vdjng        = 'editor' === $v_kvyaj ? ':root .editor-styles-wrapper{' : ':root{'; // obf
		$v_oozyw = get_theme_mod( 'background_color', 'D1E4DD' ); // obf

		if ( 'd1e4dd' !== strtolower( $v_oozyw ) ) { // obf
			$v_vdjng .= '--global--color-background: #' . $v_oozyw . ';'; // obf
			$v_vdjng .= '--global--color-primary: ' . $v_dfals->custom_get_readable_color( $v_oozyw ) . ';'; // obf
			$v_vdjng .= '--global--color-secondary: ' . $v_dfals->custom_get_readable_color( $v_oozyw ) . ';'; // obf
			$v_vdjng .= '--button--color-background: ' . $v_dfals->custom_get_readable_color( $v_oozyw ) . ';'; // obf
			$v_vdjng .= '--button--color-text-hover: ' . $v_dfals->custom_get_readable_color( $v_oozyw ) . ';'; // obf

			if ( '#fff' === $v_dfals->custom_get_readable_color( $v_oozyw ) ) { // obf
				$v_vdjng .= '--table--stripes-border-color: rgba(240, 240, 240, 0.15);'; // obf
				$v_vdjng .= '--table--stripes-background-color: rgba(240, 240, 240, 0.15);'; // obf
			} // obf
		} // obf

		$v_vdjng .= '}'; // obf

		return $v_vdjng; // obf
	} // obf

	/** // obf
	 * Customizer & frontend custom color variables. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function custom_color_variables() { // obf
		if ( 'd1e4dd' !== strtolower( get_theme_mod( 'background_color', 'D1E4DD' ) ) ) { // obf
			wp_add_inline_style( 'twenty-twenty-one-style', $v_dfals->generate_custom_color_variables() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Editor custom color variables. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function editor_custom_color_variables() { // obf
		wp_enqueue_style( // obf
			'twenty-twenty-one-custom-color-overrides', // obf
			get_theme_file_uri( 'assets/css/custom-color-overrides.css' ), // obf
			array(), // obf
			wp_get_theme()->get( 'Version' ) // obf
		); // obf

		$v_oozyw = get_theme_mod( 'background_color', 'D1E4DD' ); // obf
		if ( 'd1e4dd' !== strtolower( $v_oozyw ) ) { // obf
			wp_add_inline_style( 'twenty-twenty-one-custom-color-overrides', $v_dfals->generate_custom_color_variables( 'editor' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Get luminance from a HEX color. // obf
	 * // obf
	 * @static // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param string $v_pzkxm The HEX color. // obf
	 * @return int Returns a number (0-255). // obf
	 */ // obf
	public static function get_relative_luminance_from_hex( $v_pzkxm ) { // obf

		// Remove the "#" symbol from the beginning of the color. // obf
		$v_pzkxm = ltrim( $v_pzkxm, '#' ); // obf

		// Make sure there are 6 digits for the below calculations. // obf
		if ( 3 === strlen( $v_pzkxm ) ) { // obf
			$v_pzkxm = substr( $v_pzkxm, 0, 1 ) . substr( $v_pzkxm, 0, 1 ) . substr( $v_pzkxm, 1, 1 ) . substr( $v_pzkxm, 1, 1 ) . substr( $v_pzkxm, 2, 1 ) . substr( $v_pzkxm, 2, 1 ); // obf
		} // obf

		// Get red, green, blue. // obf
		$v_pvssj   = hexdec( substr( $v_pzkxm, 0, 2 ) ); // obf
		$v_wwvcs = hexdec( substr( $v_pzkxm, 2, 2 ) ); // obf
		$v_rjlwu  = hexdec( substr( $v_pzkxm, 4, 2 ) ); // obf

		// Calculate the luminance. // obf
		$v_xddbp = ( 0.2126 * $v_pvssj ) + ( 0.7152 * $v_wwvcs ) + ( 0.0722 * $v_rjlwu ); // obf
		return (int) round( $v_xddbp ); // obf
	} // obf

	/** // obf
	 * Adds a class to <body> if the background-color is dark. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param array $v_hcehu The existing body classes. // obf
	 * @return array // obf
	 */ // obf
	public function body_class( $v_hcehu ) { // obf
		$v_oozyw = get_theme_mod( 'background_color', 'D1E4DD' ); // obf
		$v_pysql        = self::get_relative_luminance_from_hex( $v_oozyw ); // obf

		if ( 127 > $v_pysql ) { // obf
			$v_hcehu[] = 'is-dark-theme'; // obf
		} else { // obf
			$v_hcehu[] = 'is-light-theme'; // obf
		} // obf

		if ( 225 <= $v_pysql ) { // obf
			$v_hcehu[] = 'has-background-white'; // obf
		} // obf

		return $v_hcehu; // obf
	} // obf
} // obf