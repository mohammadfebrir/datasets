

<?php // obf
/** // obf
 * Post API: Walker_PageDropdown class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Post // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to create an HTML drop-down list of pages. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_PageDropdown extends Walker { // obf

	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_exurq // obf
	 */ // obf
	public $v_exurq = 'page'; // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_xodne // obf
	 * @todo Decouple this // obf
	 */ // obf
	public $v_xodne = array( // obf
		'parent' => 'post_parent', // obf
		'id'     => 'ID', // obf
	); // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_pypal` to `$v_vytdl` and `$v_qryel` to `$v_qxbnt` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * // obf
	 * @param string  $v_fpghm            Used to append additional content. Passed by reference. // obf
	 * @param WP_Post $v_vytdl       Page data object. // obf
	 * @param int     $v_ncjlp             Optional. Depth of page in reference to parent pages. // obf
	 *                                   Used for padding. Default 0. // obf
	 * @param array   $v_kmazd              Optional. Uses 'selected' argument for selected page to // obf
	 *                                   set selected HTML attribute for option element. Uses // obf
	 *                                   'value_field' argument to fill "value" attribute. // obf
	 *                                   See wp_dropdown_pages(). Default empty array. // obf
	 * @param int     $v_qxbnt Optional. ID of the current page. Default 0. // obf
	 */ // obf
	public function start_el( &$v_fpghm, $v_vytdl, $v_ncjlp = 0, $v_kmazd = array(), $v_qxbnt = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_pypal = $v_vytdl; // obf

		$v_uxkra = str_repeat( '&nbsp;', $v_ncjlp * 3 ); // obf

		if ( ! isset( $v_kmazd['value_field'] ) || ! isset( $v_pypal->{$v_kmazd['value_field']} ) ) { // obf
			$v_kmazd['value_field'] = 'ID'; // obf
		} // obf

		$v_fpghm .= "\t<option class=\"level-$v_ncjlp\" value=\"" . esc_attr( $v_pypal->{$v_kmazd['value_field']} ) . '"'; // obf
		if ( $v_pypal->ID === (int) $v_kmazd['selected'] ) { // obf
			$v_fpghm .= ' selected="selected"'; // obf
		} // obf
		$v_fpghm .= '>'; // obf

		$v_xpqro = $v_pypal->post_title; // obf
		if ( '' === $v_xpqro ) { // obf
			/* translators: %d: ID of a post. */ // obf
			$v_xpqro = sprintf( __( '#%d (no title)' ), $v_pypal->ID ); // obf
		} // obf

		/** // obf
		 * Filters the page title when creating an HTML drop-down list of pages. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string  $v_xpqro Page title. // obf
		 * @param WP_Post $v_pypal  Page data object. // obf
		 */ // obf
		$v_xpqro = apply_filters( 'list_pages', $v_xpqro, $v_pypal ); // obf

		$v_fpghm .= $v_uxkra . esc_html( $v_xpqro ); // obf
		$v_fpghm .= "</option>\n"; // obf
	} // obf
} // obf