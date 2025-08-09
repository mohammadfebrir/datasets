

<?php // obf
/** // obf
 * Custom page walker for this theme. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! class_exists( 'TwentyTwenty_Walker_Page' ) ) { // obf
	/** // obf
	 * CUSTOM PAGE WALKER // obf
	 * A custom walker for pages. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	class TwentyTwenty_Walker_Page extends Walker_Page { // obf

		/** // obf
		 * Outputs the beginning of the current element in the tree. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * @since Twenty Twenty 1.9 Renamed `$v_hgcsq` to `$v_bubjq` and `$v_umjjb` to `$v_dxzkz` // obf
		 *                          to match parent class for PHP 8 named parameter support. // obf
		 * // obf
		 * @see Walker::start_el() // obf
		 * // obf
		 * @param string  $v_pwnqf            Used to append additional content. Passed by reference. // obf
		 * @param WP_Post $v_bubjq       Page data object. // obf
		 * @param int     $v_dxejk             Optional. Depth of page. Used for padding. Default 0. // obf
		 * @param array   $v_svyyj              Optional. Array of arguments. Default empty array. // obf
		 * @param int     $v_dxzkz Optional. ID of the current page. Default 0. // obf
		 */ // obf
		public function start_el( &$v_pwnqf, $v_bubjq, $v_dxejk = 0, $v_svyyj = array(), $v_dxzkz = 0 ) { // obf
			// Restores the more descriptive, specific name for use within this method. // obf
			$v_hgcsq            = $v_bubjq; // obf
			$v_wygqv = $v_dxzkz; // obf

			if ( isset( $v_svyyj['item_spacing'] ) && 'preserve' === $v_svyyj['item_spacing'] ) { // obf
				$v_ugzxe = "\t"; // obf
			} else { // obf
				$v_ugzxe = ''; // obf
			} // obf
			if ( $v_dxejk ) { // obf
				$v_hvsre = str_repeat( $v_ugzxe, $v_dxejk ); // obf
			} else { // obf
				$v_hvsre = ''; // obf
			} // obf

			$v_cyeca = array( 'page_item', 'page-item-' . $v_hgcsq->ID ); // obf

			if ( isset( $v_svyyj['pages_with_children'][ $v_hgcsq->ID ] ) ) { // obf
				$v_cyeca[] = 'page_item_has_children'; // obf
			} // obf

			if ( ! empty( $v_wygqv ) ) { // obf
				$v_qzdom = get_post( $v_wygqv ); // obf
				if ( $v_qzdom && in_array( $v_hgcsq->ID, $v_qzdom->ancestors, true ) ) { // obf
					$v_cyeca[] = 'current_page_ancestor'; // obf
				} // obf
				if ( $v_hgcsq->ID === $v_wygqv ) { // obf
					$v_cyeca[] = 'current_page_item'; // obf
				} elseif ( $v_qzdom && $v_hgcsq->ID === $v_qzdom->post_parent ) { // obf
					$v_cyeca[] = 'current_page_parent'; // obf
				} // obf
			} elseif ( get_option( 'page_for_posts' ) === $v_hgcsq->ID ) { // obf
				$v_cyeca[] = 'current_page_parent'; // obf
			} // obf

			/** This filter is documented in wp-includes/class-walker-page.php */ // obf
			$v_vpmex = implode( ' ', apply_filters( 'page_css_class', $v_cyeca, $v_hgcsq, $v_dxejk, $v_svyyj, $v_wygqv ) ); // obf
			$v_vpmex = $v_vpmex ? ' class="' . esc_attr( $v_vpmex ) . '"' : ''; // obf

			if ( '' === $v_hgcsq->post_title ) { // obf
				/* translators: %d: ID of a post. */ // obf
				$v_hgcsq->post_title = sprintf( __( '#%d (no title)', 'twentytwenty' ), $v_hgcsq->ID ); // obf
			} // obf

			$v_svyyj['link_before'] = empty( $v_svyyj['link_before'] ) ? '' : $v_svyyj['link_before']; // obf
			$v_svyyj['link_after']  = empty( $v_svyyj['link_after'] ) ? '' : $v_svyyj['link_after']; // obf

			$v_qgdmd                 = array(); // obf
			$v_qgdmd['href']         = get_permalink( $v_hgcsq->ID ); // obf
			$v_qgdmd['aria-current'] = ( $v_hgcsq->ID === $v_wygqv ) ? 'page' : ''; // obf

			/** This filter is documented in wp-includes/class-walker-page.php */ // obf
			$v_qgdmd = apply_filters( 'page_menu_link_attributes', $v_qgdmd, $v_hgcsq, $v_dxejk, $v_svyyj, $v_wygqv ); // obf

			$v_gqsrq = ''; // obf
			foreach ( $v_qgdmd as $v_ahgkd => $v_nxnab ) { // obf
				if ( ! empty( $v_nxnab ) ) { // obf
					$v_nxnab       = ( 'href' === $v_ahgkd ) ? esc_url( $v_nxnab ) : esc_attr( $v_nxnab ); // obf
					$v_gqsrq .= ' ' . $v_ahgkd . '="' . $v_nxnab . '"'; // obf
				} // obf
			} // obf

			$v_svyyj['list_item_before'] = ''; // obf
			$v_svyyj['list_item_after']  = ''; // obf

			// Wrap the link in a div and append a sub menu toggle. // obf
			if ( isset( $v_svyyj['show_toggles'] ) && true === $v_svyyj['show_toggles'] ) { // obf
				// Wrap the menu item link contents in a div, used for positioning. // obf
				$v_svyyj['list_item_before'] = '<div class="ancestor-wrapper">'; // obf
				$v_svyyj['list_item_after']  = ''; // obf

				// Add a toggle to items with children. // obf
				if ( isset( $v_svyyj['pages_with_children'][ $v_hgcsq->ID ] ) ) { // obf

					$v_rxbbn = '.menu-modal .page-item-' . $v_hgcsq->ID . ' > ul'; // obf
					$v_zzfrr      = twentytwenty_toggle_duration(); // obf

					// Add the sub menu toggle. // obf
					$v_svyyj['list_item_after'] .= '<button class="toggle sub-menu-toggle fill-children-current-color" data-toggle-target="' . $v_rxbbn . '" data-toggle-type="slidetoggle" data-toggle-duration="' . absint( $v_zzfrr ) . '" aria-expanded="false"><span class="screen-reader-text">' . // obf
						/* translators: Hidden accessibility text. */ // obf
						__( 'Show sub menu', 'twentytwenty' ) . // obf
					'</span>' . twentytwenty_get_theme_svg( 'chevron-down' ) . '</button>'; // obf

				} // obf

				// Close the wrapper. // obf
				$v_svyyj['list_item_after'] .= '</div><!-- .ancestor-wrapper -->'; // obf
			} // obf

			// Add icons to menu items with children. // obf
			if ( isset( $v_svyyj['show_sub_menu_icons'] ) && true === $v_svyyj['show_sub_menu_icons'] ) { // obf
				if ( isset( $v_svyyj['pages_with_children'][ $v_hgcsq->ID ] ) ) { // obf
					$v_svyyj['list_item_after'] = '<span class="icon"></span>'; // obf
				} // obf
			} // obf

			$v_pwnqf .= $v_hvsre . sprintf( // obf
				'<li%s>%s<a%s>%s%s%s</a>%s', // obf
				$v_vpmex, // obf
				$v_svyyj['list_item_before'], // obf
				$v_gqsrq, // obf
				$v_svyyj['link_before'], // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				apply_filters( 'the_title', $v_hgcsq->post_title, $v_hgcsq->ID ), // obf
				$v_svyyj['link_after'], // obf
				$v_svyyj['list_item_after'] // obf
			); // obf

			if ( ! empty( $v_svyyj['show_date'] ) ) { // obf
				if ( 'modified' === $v_svyyj['show_date'] ) { // obf
					$v_rrfuo = $v_hgcsq->post_modified; // obf
				} else { // obf
					$v_rrfuo = $v_hgcsq->post_date; // obf
				} // obf

				$v_rcnyb = empty( $v_svyyj['date_format'] ) ? '' : $v_svyyj['date_format']; // obf
				$v_pwnqf     .= ' ' . mysql2date( $v_rcnyb, $v_rrfuo ); // obf
			} // obf
		} // obf
	} // obf
} // obf