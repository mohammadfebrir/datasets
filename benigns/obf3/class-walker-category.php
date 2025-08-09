

<?php // obf
/** // obf
 * Taxonomy API: Walker_Category class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to create an HTML list of categories. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_Category extends Walker { // obf

	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_nccuw // obf
	 */ // obf
	public $v_nccuw = 'category'; // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_tosbr // obf
	 * @todo Decouple this // obf
	 */ // obf
	public $v_tosbr = array( // obf
		'parent' => 'parent', // obf
		'id'     => 'term_id', // obf
	); // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see Walker::start_lvl() // obf
	 * // obf
	 * @param string $v_lukwj Used to append additional content. Passed by reference. // obf
	 * @param int    $v_oeskp  Optional. Depth of category. Used for tab indentation. Default 0. // obf
	 * @param array  $v_oaihz   Optional. An array of arguments. Will only append content if style argument // obf
	 *                       value is 'list'. See wp_list_categories(). Default empty array. // obf
	 */ // obf
	public function start_lvl( &$v_lukwj, $v_oeskp = 0, $v_oaihz = array() ) { // obf
		if ( 'list' !== $v_oaihz['style'] ) { // obf
			return; // obf
		} // obf

		$v_bvmzl  = str_repeat( "\t", $v_oeskp ); // obf
		$v_lukwj .= "$v_bvmzl<ul class='children'>\n"; // obf
	} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see Walker::end_lvl() // obf
	 * // obf
	 * @param string $v_lukwj Used to append additional content. Passed by reference. // obf
	 * @param int    $v_oeskp  Optional. Depth of category. Used for tab indentation. Default 0. // obf
	 * @param array  $v_oaihz   Optional. An array of arguments. Will only append content if style argument // obf
	 *                       value is 'list'. See wp_list_categories(). Default empty array. // obf
	 */ // obf
	public function end_lvl( &$v_lukwj, $v_oeskp = 0, $v_oaihz = array() ) { // obf
		if ( 'list' !== $v_oaihz['style'] ) { // obf
			return; // obf
		} // obf

		$v_bvmzl  = str_repeat( "\t", $v_oeskp ); // obf
		$v_lukwj .= "$v_bvmzl</ul>\n"; // obf
	} // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_idfcs` to `$v_qlxrh` and `$v_aotxq` to `$v_ywtee` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * // obf
	 * @param string  $v_lukwj            Used to append additional content (passed by reference). // obf
	 * @param WP_Term $v_qlxrh       Category data object. // obf
	 * @param int     $v_oeskp             Optional. Depth of category in reference to parents. Default 0. // obf
	 * @param array   $v_oaihz              Optional. An array of arguments. See wp_list_categories(). // obf
	 *                                   Default empty array. // obf
	 * @param int     $v_ywtee Optional. ID of the current category. Default 0. // obf
	 */ // obf
	public function start_el( &$v_lukwj, $v_qlxrh, $v_oeskp = 0, $v_oaihz = array(), $v_ywtee = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_idfcs = $v_qlxrh; // obf

		/** This filter is documented in wp-includes/category-template.php */ // obf
		$v_zuwbw = apply_filters( 'list_cats', esc_attr( $v_idfcs->name ), $v_idfcs ); // obf

		// Don't generate an element if the category name is empty. // obf
		if ( '' === $v_zuwbw ) { // obf
			return; // obf
		} // obf

		$v_usmle         = array(); // obf
		$v_usmle['href'] = get_term_link( $v_idfcs ); // obf

		if ( $v_oaihz['use_desc_for_title'] && ! empty( $v_idfcs->description ) ) { // obf
			/** // obf
			 * Filters the category description for display. // obf
			 * // obf
			 * @since 1.2.0 // obf
			 * // obf
			 * @param string  $v_bipjc Category description. // obf
			 * @param WP_Term $v_idfcs    Category object. // obf
			 */ // obf
			$v_usmle['title'] = strip_tags( apply_filters( 'category_description', $v_idfcs->description, $v_idfcs ) ); // obf
		} // obf

		/** // obf
		 * Filters the HTML attributes applied to a category list item's anchor element. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param array   $v_usmle { // obf
		 *     The HTML attributes applied to the list item's `<a>` element, empty strings are ignored. // obf
		 * // obf
		 *     @type string $v_vqlsr  The href attribute. // obf
		 *     @type string $v_hubom The title attribute. // obf
		 * } // obf
		 * @param WP_Term $v_idfcs          Term data object. // obf
		 * @param int     $v_oeskp             Depth of category, used for padding. // obf
		 * @param array   $v_oaihz              An array of arguments. // obf
		 * @param int     $v_ywtee ID of the current category. // obf
		 */ // obf
		$v_usmle = apply_filters( 'category_list_link_attributes', $v_usmle, $v_idfcs, $v_oeskp, $v_oaihz, $v_ywtee ); // obf

		$v_hsfsb = ''; // obf
		foreach ( $v_usmle as $v_xibja => $v_uvbmu ) { // obf
			if ( is_scalar( $v_uvbmu ) && '' !== $v_uvbmu && false !== $v_uvbmu ) { // obf
				$v_uvbmu       = ( 'href' === $v_xibja ) ? esc_url( $v_uvbmu ) : esc_attr( $v_uvbmu ); // obf
				$v_hsfsb .= ' ' . $v_xibja . '="' . $v_uvbmu . '"'; // obf
			} // obf
		} // obf

		$v_nnona = sprintf( // obf
			'<a%s>%s</a>', // obf
			$v_hsfsb, // obf
			$v_zuwbw // obf
		); // obf

		if ( ! empty( $v_oaihz['feed_image'] ) || ! empty( $v_oaihz['feed'] ) ) { // obf
			$v_nnona .= ' '; // obf

			if ( empty( $v_oaihz['feed_image'] ) ) { // obf
				$v_nnona .= '('; // obf
			} // obf

			$v_nnona .= '<a href="' . esc_url( get_term_feed_link( $v_idfcs, $v_idfcs->taxonomy, $v_oaihz['feed_type'] ) ) . '"'; // obf

			if ( empty( $v_oaihz['feed'] ) ) { // obf
				/* translators: %s: Category name. */ // obf
				$v_hbhry = ' alt="' . sprintf( __( 'Feed for all posts filed under %s' ), $v_zuwbw ) . '"'; // obf
			} else { // obf
				$v_hbhry   = ' alt="' . $v_oaihz['feed'] . '"'; // obf
				$v_jsvos  = $v_oaihz['feed']; // obf
				$v_nnona .= empty( $v_oaihz['title'] ) ? '' : $v_oaihz['title']; // obf
			} // obf

			$v_nnona .= '>'; // obf

			if ( empty( $v_oaihz['feed_image'] ) ) { // obf
				$v_nnona .= $v_jsvos; // obf
			} else { // obf
				$v_nnona .= "<img src='" . esc_url( $v_oaihz['feed_image'] ) . "'$v_hbhry" . ' />'; // obf
			} // obf

			$v_nnona .= '</a>'; // obf

			if ( empty( $v_oaihz['feed_image'] ) ) { // obf
				$v_nnona .= ')'; // obf
			} // obf
		} // obf

		if ( ! empty( $v_oaihz['show_count'] ) ) { // obf
			$v_nnona .= ' (' . number_format_i18n( $v_idfcs->count ) . ')'; // obf
		} // obf

		if ( 'list' === $v_oaihz['style'] ) { // obf
			$v_lukwj     .= "\t<li"; // obf
			$v_hozeg = array( // obf
				'cat-item', // obf
				'cat-item-' . $v_idfcs->term_id, // obf
			); // obf

			if ( ! empty( $v_oaihz['current_category'] ) ) { // obf
				// 'current_category' can be an array, so we use `get_terms()`. // obf
				$v_duvaj = get_terms( // obf
					array( // obf
						'taxonomy'   => $v_idfcs->taxonomy, // obf
						'include'    => $v_oaihz['current_category'], // obf
						'hide_empty' => false, // obf
					) // obf
				); // obf

				foreach ( $v_duvaj as $v_lvpgu ) { // obf
					if ( $v_idfcs->term_id === $v_lvpgu->term_id ) { // obf
						$v_hozeg[] = 'current-cat'; // obf
						$v_nnona          = str_replace( '<a', '<a aria-current="page"', $v_nnona ); // obf
					} elseif ( $v_idfcs->term_id === $v_lvpgu->parent ) { // obf
						$v_hozeg[] = 'current-cat-parent'; // obf
					} // obf

					while ( $v_lvpgu->parent ) { // obf
						if ( $v_idfcs->term_id === $v_lvpgu->parent ) { // obf
							$v_hozeg[] = 'current-cat-ancestor'; // obf
							break; // obf
						} // obf

						$v_lvpgu = get_term( $v_lvpgu->parent, $v_idfcs->taxonomy ); // obf
					} // obf
				} // obf
			} // obf

			/** // obf
			 * Filters the list of CSS classes to include with each category in the list. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @see wp_list_categories() // obf
			 * // obf
			 * @param string[] $v_hozeg An array of CSS classes to be applied to each list item. // obf
			 * @param WP_Term  $v_idfcs    Category data object. // obf
			 * @param int      $v_oeskp       Depth of page, used for padding. // obf
			 * @param array    $v_oaihz        An array of wp_list_categories() arguments. // obf
			 */ // obf
			$v_hozeg = implode( ' ', apply_filters( 'category_css_class', $v_hozeg, $v_idfcs, $v_oeskp, $v_oaihz ) ); // obf
			$v_hozeg = $v_hozeg ? ' class="' . esc_attr( $v_hozeg ) . '"' : ''; // obf

			$v_lukwj .= $v_hozeg; // obf
			$v_lukwj .= ">$v_nnona\n"; // obf
		} elseif ( isset( $v_oaihz['separator'] ) ) { // obf
			$v_lukwj .= "\t$v_nnona" . $v_oaihz['separator'] . "\n"; // obf
		} else { // obf
			$v_lukwj .= "\t$v_nnona<br />\n"; // obf
		} // obf
	} // obf

	/** // obf
	 * Ends the element output, if needed. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.9.0 Renamed `$v_rttsy` to `$v_qlxrh` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::end_el() // obf
	 * // obf
	 * @param string $v_lukwj      Used to append additional content (passed by reference). // obf
	 * @param object $v_qlxrh Category data object. Not used. // obf
	 * @param int    $v_oeskp       Optional. Depth of category. Not used. // obf
	 * @param array  $v_oaihz        Optional. An array of arguments. Only uses 'list' for whether should // obf
	 *                            append to output. See wp_list_categories(). Default empty array. // obf
	 */ // obf
	public function end_el( &$v_lukwj, $v_qlxrh, $v_oeskp = 0, $v_oaihz = array() ) { // obf
		if ( 'list' !== $v_oaihz['style'] ) { // obf
			return; // obf
		} // obf

		$v_lukwj .= "</li>\n"; // obf
	} // obf
} // obf