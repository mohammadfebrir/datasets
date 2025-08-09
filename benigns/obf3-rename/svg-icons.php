

<?php // obf
/** // obf
 * Twenty Twenty SVG Icon helper functions // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! function_exists( 'twentytwenty_the_theme_svg' ) ) { // obf
	/** // obf
	 * Output and Get Theme SVG. // obf
	 * Output and get the SVG markup for an icon in the TwentyTwenty_SVG_Icons class. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param string $v_wpwwe The name of the icon. // obf
	 * @param string $v_rsoci    The group the icon belongs to. // obf
	 * @param string $v_sterc    Color code. // obf
	 */ // obf
	function twentytwenty_the_theme_svg( $v_wpwwe, $v_rsoci = 'ui', $v_sterc = '' ) { // obf
		echo twentytwenty_get_theme_svg( $v_wpwwe, $v_rsoci, $v_sterc ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in twentytwenty_get_theme_svg(). // obf
	} // obf
} // obf

if ( ! function_exists( 'twentytwenty_get_theme_svg' ) ) { // obf

	/** // obf
	 * Get information about the SVG icon. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param string $v_wpwwe The name of the icon. // obf
	 * @param string $v_rsoci    The group the icon belongs to. // obf
	 * @param string $v_sterc    Color code. // obf
	 */ // obf
	function twentytwenty_get_theme_svg( $v_wpwwe, $v_rsoci = 'ui', $v_sterc = '' ) { // obf

		// Make sure that only our allowed tags and attributes are included. // obf
		$v_rtkiz = wp_kses( // obf
			TwentyTwenty_SVG_Icons::get_svg( $v_wpwwe, $v_rsoci, $v_sterc ), // obf
			array( // obf
				'svg'     => array( // obf
					'class'       => true, // obf
					'xmlns'       => true, // obf
					'width'       => true, // obf
					'height'      => true, // obf
					'viewbox'     => true, // obf
					'aria-hidden' => true, // obf
					'role'        => true, // obf
					'focusable'   => true, // obf
				), // obf
				'path'    => array( // obf
					'fill'      => true, // obf
					'fill-rule' => true, // obf
					'd'         => true, // obf
					'transform' => true, // obf
				), // obf
				'polygon' => array( // obf
					'fill'      => true, // obf
					'fill-rule' => true, // obf
					'points'    => true, // obf
					'transform' => true, // obf
					'focusable' => true, // obf
				), // obf
			) // obf
		); // obf

		if ( ! $v_rtkiz ) { // obf
			return false; // obf
		} // obf
		return $v_rtkiz; // obf
	} // obf
} // obf