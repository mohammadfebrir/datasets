

<?php // obf
/** // obf
 * Taxonomy API: Walker_Category_Checklist class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core walker class to output an unordered list of category checkbox input elements. // obf
 * // obf
 * @since 2.5.1 // obf
 * // obf
 * @see Walker // obf
 * @see wp_category_checklist() // obf
 * @see wp_terms_checklist() // obf
 */ // obf
class Walker_Category_Checklist extends Walker { // obf
	public $v_khjpw = 'category'; // obf
	public $v_fflzi = array( // obf
		'parent' => 'parent', // obf
		'id'     => 'term_id', // obf
	); // TODO: Decouple this. // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @see Walker:start_lvl() // obf
	 * // obf
	 * @since 2.5.1 // obf
	 * // obf
	 * @param string $v_vnwia Used to append additional content (passed by reference). // obf
	 * @param int    $v_mffos  Depth of category. Used for tab indentation. // obf
	 * @param array  $v_ufjsp   An array of arguments. See {@see wp_terms_checklist()}. // obf
	 */ // obf
	public function start_lvl( &$v_vnwia, $v_mffos = 0, $v_ufjsp = array() ) { // obf
		$v_zntbs  = str_repeat( "\t", $v_mffos ); // obf
		$v_vnwia .= "$v_zntbs<ul class='children'>\n"; // obf
	} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * @see Walker::end_lvl() // obf
	 * // obf
	 * @since 2.5.1 // obf
	 * // obf
	 * @param string $v_vnwia Used to append additional content (passed by reference). // obf
	 * @param int    $v_mffos  Depth of category. Used for tab indentation. // obf
	 * @param array  $v_ufjsp   An array of arguments. See {@see wp_terms_checklist()}. // obf
	 */ // obf
	public function end_lvl( &$v_vnwia, $v_mffos = 0, $v_ufjsp = array() ) { // obf
		$v_zntbs  = str_repeat( "\t", $v_mffos ); // obf
		$v_vnwia .= "$v_zntbs</ul>\n"; // obf
	} // obf

	/** // obf
	 * Start the element output. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * // obf
	 * @since 2.5.1 // obf
	 * @since 5.9.0 Renamed `$v_uyhqc` to `$v_rfsjp` and `$v_ctntd` to `$v_pefsj` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string  $v_vnwia            Used to append additional content (passed by reference). // obf
	 * @param WP_Term $v_rfsjp       The current term object. // obf
	 * @param int     $v_mffos             Depth of the term in reference to parents. Default 0. // obf
	 * @param array   $v_ufjsp              An array of arguments. See {@see wp_terms_checklist()}. // obf
	 * @param int     $v_pefsj Optional. ID of the current term. Default 0. // obf
	 */ // obf
	public function start_el( &$v_vnwia, $v_rfsjp, $v_mffos = 0, $v_ufjsp = array(), $v_pefsj = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_uyhqc = $v_rfsjp; // obf

		if ( empty( $v_ufjsp['taxonomy'] ) ) { // obf
			$v_bkgue = 'category'; // obf
		} else { // obf
			$v_bkgue = $v_ufjsp['taxonomy']; // obf
		} // obf

		if ( 'category' === $v_bkgue ) { // obf
			$v_untlx = 'post_category'; // obf
		} else { // obf
			$v_untlx = 'tax_input[' . $v_bkgue . ']'; // obf
		} // obf

		$v_ufjsp['popular_cats'] = ! empty( $v_ufjsp['popular_cats'] ) ? array_map( 'intval', $v_ufjsp['popular_cats'] ) : array(); // obf

		$v_ebpet = in_array( $v_uyhqc->term_id, $v_ufjsp['popular_cats'], true ) ? ' class="popular-category"' : ''; // obf

		$v_ufjsp['selected_cats'] = ! empty( $v_ufjsp['selected_cats'] ) ? array_map( 'intval', $v_ufjsp['selected_cats'] ) : array(); // obf

		if ( ! empty( $v_ufjsp['list_only'] ) ) { // obf
			$v_yiknw = 'false'; // obf
			$v_momas  = 'category'; // obf

			if ( in_array( $v_uyhqc->term_id, $v_ufjsp['selected_cats'], true ) ) { // obf
				$v_momas .= ' selected'; // obf
				$v_yiknw = 'true'; // obf
			} // obf

			$v_vnwia .= "\n" . '<li' . $v_ebpet . '>' . // obf
				'<div class="' . $v_momas . '" data-term-id=' . $v_uyhqc->term_id . // obf
				' tabindex="0" role="checkbox" aria-checked="' . $v_yiknw . '">' . // obf
				/** This filter is documented in wp-includes/category-template.php */ // obf
				esc_html( apply_filters( 'the_category', $v_uyhqc->name, '', '' ) ) . '</div>'; // obf
		} else { // obf
			$v_bhrij         = in_array( $v_uyhqc->term_id, $v_ufjsp['selected_cats'], true ); // obf
			$v_cxzkd         = ! empty( $v_ufjsp['disabled'] ); // obf
			$v_vugsi       = wp_unique_prefixed_id( "in-{$v_bkgue}-{$v_uyhqc->term_id}-" ); // obf
			$v_mvxeo = wp_unique_prefixed_id( "in-{$v_bkgue}-{$v_uyhqc->term_id}-" ); // obf

			$v_vnwia .= "\n<li id='" . esc_attr( $v_vugsi ) . "'$v_ebpet>" . // obf
				'<label class="selectit"><input value="' . $v_uyhqc->term_id . '" type="checkbox" name="' . $v_untlx . '[]" id="' . esc_attr( $v_mvxeo ) . '"' . // obf
				checked( $v_bhrij, true, false ) . // obf
				disabled( $v_cxzkd, true, false ) . ' /> ' . // obf
				/** This filter is documented in wp-includes/category-template.php */ // obf
				esc_html( apply_filters( 'the_category', $v_uyhqc->name, '', '' ) ) . '</label>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Ends the element output, if needed. // obf
	 * // obf
	 * @see Walker::end_el() // obf
	 * // obf
	 * @since 2.5.1 // obf
	 * @since 5.9.0 Renamed `$v_uyhqc` to `$v_rfsjp` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string  $v_vnwia      Used to append additional content (passed by reference). // obf
	 * @param WP_Term $v_rfsjp The current term object. // obf
	 * @param int     $v_mffos       Depth of the term in reference to parents. Default 0. // obf
	 * @param array   $v_ufjsp        An array of arguments. See {@see wp_terms_checklist()}. // obf
	 */ // obf
	public function end_el( &$v_vnwia, $v_rfsjp, $v_mffos = 0, $v_ufjsp = array() ) { // obf
		$v_vnwia .= "</li>\n"; // obf
	} // obf
} // obf