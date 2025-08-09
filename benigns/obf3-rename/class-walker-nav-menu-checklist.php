

<?php // obf
/** // obf
 * Navigation Menu API: Walker_Nav_Menu_Checklist class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Create HTML list of nav menu input items. // obf
 * // obf
 * @since 3.0.0 // obf
 * @uses Walker_Nav_Menu // obf
 */ // obf
class Walker_Nav_Menu_Checklist extends Walker_Nav_Menu { // obf
	/** // obf
	 * @param array|false $v_olcfn Database fields to use. // obf
	 */ // obf
	public function __construct( $v_olcfn = false ) { // obf
		if ( $v_olcfn ) { // obf
			$v_civfd->db_fields = $v_olcfn; // obf
		} // obf
	} // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @see Walker_Nav_Menu::start_lvl() // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string   $v_zvgog Used to append additional content (passed by reference). // obf
	 * @param int      $v_viwau  Depth of page. Used for padding. // obf
	 * @param stdClass $v_orqfx   Not used. // obf
	 */ // obf
	public function start_lvl( &$v_zvgog, $v_viwau = 0, $v_orqfx = null ) { // obf
		$v_jtasn  = str_repeat( "\t", $v_viwau ); // obf
		$v_zvgog .= "\n$v_jtasn<ul class='children'>\n"; // obf
	} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * @see Walker_Nav_Menu::end_lvl() // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string   $v_zvgog Used to append additional content (passed by reference). // obf
	 * @param int      $v_viwau  Depth of page. Used for padding. // obf
	 * @param stdClass $v_orqfx   Not used. // obf
	 */ // obf
	public function end_lvl( &$v_zvgog, $v_viwau = 0, $v_orqfx = null ) { // obf
		$v_jtasn  = str_repeat( "\t", $v_viwau ); // obf
		$v_zvgog .= "\n$v_jtasn</ul>"; // obf
	} // obf

	/** // obf
	 * Start the element output. // obf
	 * // obf
	 * @see Walker_Nav_Menu::start_el() // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.9.0 Renamed `$v_wndmt` to `$v_wmqts` and `$v_qsxbf` to `$v_qjhzw` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global int        $v_zqklb // obf
	 * @global int|string $v_wohvs // obf
	 * // obf
	 * @param string   $v_zvgog            Used to append additional content (passed by reference). // obf
	 * @param WP_Post  $v_wmqts       Menu item data object. // obf
	 * @param int      $v_viwau             Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_orqfx              Not used. // obf
	 * @param int      $v_qjhzw Optional. ID of the current menu item. Default 0. // obf
	 */ // obf
	public function start_el( &$v_zvgog, $v_wmqts, $v_viwau = 0, $v_orqfx = null, $v_qjhzw = 0 ) { // obf
		global $v_zqklb, $v_wohvs; // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_dcywu = $v_wmqts; // obf

		$v_zqklb = ( 0 > $v_zqklb ) ? (int) $v_zqklb - 1 : -1; // obf
		$v_gukyc    = isset( $v_dcywu->post_type ) && 'nav_menu_item' === $v_dcywu->post_type ? $v_dcywu->object_id : $v_zqklb; // obf
		$v_jnvmt        = ( ! empty( $v_dcywu->ID ) ) && ( 0 < $v_gukyc ) ? (int) $v_dcywu->ID : 0; // obf

		$v_jtasn = ( $v_viwau ) ? str_repeat( "\t", $v_viwau ) : ''; // obf

		$v_zvgog .= $v_jtasn . '<li>'; // obf
		$v_zvgog .= '<label class="menu-item-title">'; // obf
		$v_zvgog .= '<input type="checkbox"' . wp_nav_menu_disabled_check( $v_wohvs, false ) . ' class="menu-item-checkbox'; // obf

		if ( ! empty( $v_dcywu->front_or_home ) ) { // obf
			$v_zvgog .= ' add-to-top'; // obf
		} // obf

		$v_zvgog .= '" name="menu-item[' . $v_gukyc . '][menu-item-object-id]" value="' . esc_attr( $v_dcywu->object_id ) . '" /> '; // obf

		if ( ! empty( $v_dcywu->label ) ) { // obf
			$v_decdf = $v_dcywu->label; // obf
		} elseif ( isset( $v_dcywu->post_type ) ) { // obf
			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_decdf = apply_filters( 'the_title', $v_dcywu->post_title, $v_dcywu->ID ); // obf
		} // obf

		$v_zvgog .= isset( $v_decdf ) ? esc_html( $v_decdf ) : esc_html( $v_dcywu->title ); // obf

		if ( empty( $v_dcywu->label ) && isset( $v_dcywu->post_type ) && 'page' === $v_dcywu->post_type ) { // obf
			// Append post states. // obf
			$v_zvgog .= _post_states( $v_dcywu, false ); // obf
		} // obf

		$v_zvgog .= '</label>'; // obf

		// Menu item hidden fields. // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-db-id" name="menu-item[' . $v_gukyc . '][menu-item-db-id]" value="' . $v_jnvmt . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-object" name="menu-item[' . $v_gukyc . '][menu-item-object]" value="' . esc_attr( $v_dcywu->object ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-parent-id" name="menu-item[' . $v_gukyc . '][menu-item-parent-id]" value="' . esc_attr( $v_dcywu->menu_item_parent ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-type" name="menu-item[' . $v_gukyc . '][menu-item-type]" value="' . esc_attr( $v_dcywu->type ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-title" name="menu-item[' . $v_gukyc . '][menu-item-title]" value="' . esc_attr( $v_dcywu->title ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-url" name="menu-item[' . $v_gukyc . '][menu-item-url]" value="' . esc_url( $v_dcywu->url ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-target" name="menu-item[' . $v_gukyc . '][menu-item-target]" value="' . esc_attr( $v_dcywu->target ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-attr-title" name="menu-item[' . $v_gukyc . '][menu-item-attr-title]" value="' . esc_attr( $v_dcywu->attr_title ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-classes" name="menu-item[' . $v_gukyc . '][menu-item-classes]" value="' . esc_attr( implode( ' ', $v_dcywu->classes ) ) . '" />'; // obf
		$v_zvgog .= '<input type="hidden" class="menu-item-xfn" name="menu-item[' . $v_gukyc . '][menu-item-xfn]" value="' . esc_attr( $v_dcywu->xfn ) . '" />'; // obf
	} // obf
} // obf