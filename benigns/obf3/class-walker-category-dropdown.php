

<?php // obf
/** // obf
 * Taxonomy API: Walker_CategoryDropdown class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to create an HTML dropdown list of Categories. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_CategoryDropdown extends Walker { // obf

	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_oojwk // obf
	 */ // obf
	public $v_oojwk = 'category'; // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @todo Decouple this // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_hlnie // obf
	 */ // obf
	public $v_hlnie = array( // obf
		'parent' => 'parent', // obf
		'id'     => 'term_id', // obf
	); // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_vqphw` to `$v_pywip` and `$v_lkrgw` to `$v_bwkxx` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * // obf
	 * @param string  $v_ppfdp            Used to append additional content (passed by reference). // obf
	 * @param WP_Term $v_pywip       Category data object. // obf
	 * @param int     $v_xhlan             Depth of category. Used for padding. // obf
	 * @param array   $v_wcqko              Uses 'selected', 'show_count', and 'value_field' keys, if they exist. // obf
	 *                                   See wp_dropdown_categories(). // obf
	 * @param int     $v_bwkxx Optional. ID of the current category. Default 0. // obf
	 */ // obf
	public function start_el( &$v_ppfdp, $v_pywip, $v_xhlan = 0, $v_wcqko = array(), $v_bwkxx = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_vqphw = $v_pywip; // obf

		$v_gfoak = str_repeat( '&nbsp;', $v_xhlan * 3 ); // obf

		/** This filter is documented in wp-includes/category-template.php */ // obf
		$v_ihdjo = apply_filters( 'list_cats', $v_vqphw->name, $v_vqphw ); // obf

		if ( isset( $v_wcqko['value_field'] ) && isset( $v_vqphw->{$v_wcqko['value_field']} ) ) { // obf
			$v_wewcy = $v_wcqko['value_field']; // obf
		} else { // obf
			$v_wewcy = 'term_id'; // obf
		} // obf

		$v_ppfdp .= "\t<option class=\"level-$v_xhlan\" value=\"" . esc_attr( $v_vqphw->{$v_wewcy} ) . '"'; // obf

		// Type-juggling causes false matches, so we force everything to a string. // obf
		if ( (string) $v_vqphw->{$v_wewcy} === (string) $v_wcqko['selected'] ) { // obf
			$v_ppfdp .= ' selected="selected"'; // obf
		} // obf
		$v_ppfdp .= '>'; // obf
		$v_ppfdp .= $v_gfoak . $v_ihdjo; // obf
		if ( $v_wcqko['show_count'] ) { // obf
			$v_ppfdp .= '&nbsp;&nbsp;(' . number_format_i18n( $v_vqphw->count ) . ')'; // obf
		} // obf
		$v_ppfdp .= "</option>\n"; // obf
	} // obf
} // obf