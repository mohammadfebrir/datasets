

<?php // obf
/** // obf
 * Post API: Walker_Page class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core walker class used to create an HTML list of pages. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_Page extends Walker { // obf

	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_bpleu // obf
	 */ // obf
	public $v_bpleu = 'page'; // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_uiibf // obf
	 * @todo Decouple this. // obf
	 */ // obf
	public $v_uiibf = array( // obf
		'parent' => 'post_parent', // obf
		'id'     => 'ID', // obf
	); // obf

	/** // obf
	 * Outputs the beginning of the current level in the tree before elements are output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see Walker::start_lvl() // obf
	 * // obf
	 * @param string $v_telns Used to append additional content (passed by reference). // obf
	 * @param int    $v_zxvlq  Optional. Depth of page. Used for padding. Default 0. // obf
	 * @param array  $v_cebkx   Optional. Arguments for outputting the next level. // obf
	 *                       Default empty array. // obf
	 */ // obf
	public function start_lvl( &$v_telns, $v_zxvlq = 0, $v_cebkx = array() ) { // obf
		if ( isset( $v_cebkx['item_spacing'] ) && 'preserve' === $v_cebkx['item_spacing'] ) { // obf
			$v_jqzaf = "\t"; // obf
			$v_ukvnl = "\n"; // obf
		} else { // obf
			$v_jqzaf = ''; // obf
			$v_ukvnl = ''; // obf
		} // obf
		$v_gjiff  = str_repeat( $v_jqzaf, $v_zxvlq ); // obf
		$v_telns .= "{$v_ukvnl}{$v_gjiff}<ul class='children'>{$v_ukvnl}"; // obf
	} // obf

	/** // obf
	 * Outputs the end of the current level in the tree after elements are output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see Walker::end_lvl() // obf
	 * // obf
	 * @param string $v_telns Used to append additional content (passed by reference). // obf
	 * @param int    $v_zxvlq  Optional. Depth of page. Used for padding. Default 0. // obf
	 * @param array  $v_cebkx   Optional. Arguments for outputting the end of the current level. // obf
	 *                       Default empty array. // obf
	 */ // obf
	public function end_lvl( &$v_telns, $v_zxvlq = 0, $v_cebkx = array() ) { // obf
		if ( isset( $v_cebkx['item_spacing'] ) && 'preserve' === $v_cebkx['item_spacing'] ) { // obf
			$v_jqzaf = "\t"; // obf
			$v_ukvnl = "\n"; // obf
		} else { // obf
			$v_jqzaf = ''; // obf
			$v_ukvnl = ''; // obf
		} // obf
		$v_gjiff  = str_repeat( $v_jqzaf, $v_zxvlq ); // obf
		$v_telns .= "{$v_gjiff}</ul>{$v_ukvnl}"; // obf
	} // obf

	/** // obf
	 * Outputs the beginning of the current element in the tree. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_ryvkt` to `$v_umwvq` and `$v_wxoit` to `$v_wmulx` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string  $v_telns            Used to append additional content. Passed by reference. // obf
	 * @param WP_Post $v_umwvq       Page data object. // obf
	 * @param int     $v_zxvlq             Optional. Depth of page. Used for padding. Default 0. // obf
	 * @param array   $v_cebkx              Optional. Array of arguments. Default empty array. // obf
	 * @param int     $v_wmulx Optional. ID of the current page. Default 0. // obf
	 */ // obf
	public function start_el( &$v_telns, $v_umwvq, $v_zxvlq = 0, $v_cebkx = array(), $v_wmulx = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_ryvkt = $v_umwvq; // obf

		$v_qrwgg = $v_wmulx; // obf

		if ( isset( $v_cebkx['item_spacing'] ) && 'preserve' === $v_cebkx['item_spacing'] ) { // obf
			$v_jqzaf = "\t"; // obf
			$v_ukvnl = "\n"; // obf
		} else { // obf
			$v_jqzaf = ''; // obf
			$v_ukvnl = ''; // obf
		} // obf
		if ( $v_zxvlq ) { // obf
			$v_gjiff = str_repeat( $v_jqzaf, $v_zxvlq ); // obf
		} else { // obf
			$v_gjiff = ''; // obf
		} // obf

		$v_thhtu = array( 'page_item', 'page-item-' . $v_ryvkt->ID ); // obf

		if ( isset( $v_cebkx['pages_with_children'][ $v_ryvkt->ID ] ) ) { // obf
			$v_thhtu[] = 'page_item_has_children'; // obf
		} // obf

		if ( ! empty( $v_qrwgg ) ) { // obf
			$v_ifckd = get_post( $v_qrwgg ); // obf

			if ( $v_ifckd && in_array( $v_ryvkt->ID, $v_ifckd->ancestors, true ) ) { // obf
				$v_thhtu[] = 'current_page_ancestor'; // obf
			} // obf

			if ( $v_ryvkt->ID === (int) $v_qrwgg ) { // obf
				$v_thhtu[] = 'current_page_item'; // obf
			} elseif ( $v_ifckd && $v_ryvkt->ID === $v_ifckd->post_parent ) { // obf
				$v_thhtu[] = 'current_page_parent'; // obf
			} // obf
		} elseif ( (int) get_option( 'page_for_posts' ) === $v_ryvkt->ID ) { // obf
			$v_thhtu[] = 'current_page_parent'; // obf
		} // obf

		/** // obf
		 * Filters the list of CSS classes to include with each page item in the list. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @see wp_list_pages() // obf
		 * // obf
		 * @param string[] $v_thhtu       An array of CSS classes to be applied to each list item. // obf
		 * @param WP_Post  $v_ryvkt            Page data object. // obf
		 * @param int      $v_zxvlq           Depth of page, used for padding. // obf
		 * @param array    $v_cebkx            An array of arguments. // obf
		 * @param int      $v_qrwgg ID of the current page. // obf
		 */ // obf
		$v_vpxsq = implode( ' ', apply_filters( 'page_css_class', $v_thhtu, $v_ryvkt, $v_zxvlq, $v_cebkx, $v_qrwgg ) ); // obf
		$v_vpxsq = $v_vpxsq ? ' class="' . esc_attr( $v_vpxsq ) . '"' : ''; // obf

		if ( '' === $v_ryvkt->post_title ) { // obf
			/* translators: %d: ID of a post. */ // obf
			$v_ryvkt->post_title = sprintf( __( '#%d (no title)' ), $v_ryvkt->ID ); // obf
		} // obf

		$v_cebkx['link_before'] = empty( $v_cebkx['link_before'] ) ? '' : $v_cebkx['link_before']; // obf
		$v_cebkx['link_after']  = empty( $v_cebkx['link_after'] ) ? '' : $v_cebkx['link_after']; // obf

		$v_wxxnr                 = array(); // obf
		$v_wxxnr['href']         = get_permalink( $v_ryvkt->ID ); // obf
		$v_wxxnr['aria-current'] = ( $v_ryvkt->ID === (int) $v_qrwgg ) ? 'page' : ''; // obf

		/** // obf
		 * Filters the HTML attributes applied to a page menu item's anchor element. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param array $v_wxxnr { // obf
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored. // obf
		 * // obf
		 *     @type string $v_ezdns         The href attribute. // obf
		 *     @type string $v_rcyxx-current The aria-current attribute. // obf
		 * } // obf
		 * @param WP_Post $v_ryvkt            Page data object. // obf
		 * @param int     $v_zxvlq           Depth of page, used for padding. // obf
		 * @param array   $v_cebkx            An array of arguments. // obf
		 * @param int     $v_qrwgg ID of the current page. // obf
		 */ // obf
		$v_wxxnr = apply_filters( 'page_menu_link_attributes', $v_wxxnr, $v_ryvkt, $v_zxvlq, $v_cebkx, $v_qrwgg ); // obf

		$v_yhomz = ''; // obf
		foreach ( $v_wxxnr as $v_evcdl => $v_ueuom ) { // obf
			if ( is_scalar( $v_ueuom ) && '' !== $v_ueuom && false !== $v_ueuom ) { // obf
				$v_ueuom       = ( 'href' === $v_evcdl ) ? esc_url( $v_ueuom ) : esc_attr( $v_ueuom ); // obf
				$v_yhomz .= ' ' . $v_evcdl . '="' . $v_ueuom . '"'; // obf
			} // obf
		} // obf

		$v_telns .= $v_gjiff . sprintf( // obf
			'<li%s><a%s>%s%s%s</a>', // obf
			$v_vpxsq, // obf
			$v_yhomz, // obf
			$v_cebkx['link_before'], // obf
			/** This filter is documented in wp-includes/post-template.php */ // obf
			apply_filters( 'the_title', $v_ryvkt->post_title, $v_ryvkt->ID ), // obf
			$v_cebkx['link_after'] // obf
		); // obf

		if ( ! empty( $v_cebkx['show_date'] ) ) { // obf
			if ( 'modified' === $v_cebkx['show_date'] ) { // obf
				$v_aulkt = $v_ryvkt->post_modified; // obf
			} else { // obf
				$v_aulkt = $v_ryvkt->post_date; // obf
			} // obf

			$v_pjxxi = empty( $v_cebkx['date_format'] ) ? '' : $v_cebkx['date_format']; // obf
			$v_telns     .= ' ' . mysql2date( $v_pjxxi, $v_aulkt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Outputs the end of the current element in the tree. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_ryvkt` to `$v_umwvq` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::end_el() // obf
	 * // obf
	 * @param string  $v_telns      Used to append additional content. Passed by reference. // obf
	 * @param WP_Post $v_umwvq Page data object. Not used. // obf
	 * @param int     $v_zxvlq       Optional. Depth of page. Default 0 (unused). // obf
	 * @param array   $v_cebkx        Optional. Array of arguments. Default empty array. // obf
	 */ // obf
	public function end_el( &$v_telns, $v_umwvq, $v_zxvlq = 0, $v_cebkx = array() ) { // obf
		if ( isset( $v_cebkx['item_spacing'] ) && 'preserve' === $v_cebkx['item_spacing'] ) { // obf
			$v_jqzaf = "\t"; // obf
			$v_ukvnl = "\n"; // obf
		} else { // obf
			$v_jqzaf = ''; // obf
			$v_ukvnl = ''; // obf
		} // obf
		$v_telns .= "</li>{$v_ukvnl}"; // obf
	} // obf
} // obf