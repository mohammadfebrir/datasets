

<?php // obf
/** // obf
 * Server-side rendering of the `core/pages` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the colors // obf
 * which will be applied to the pages markup in the front-end when it is a descendant of navigation. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param  array $v_cuuzv Block attributes. // obf
 * @param  array $v_tgtyq    Navigation block context. // obf
 * @return array Colors CSS classes and inline styles. // obf
 */ // obf
function block_core_page_list_build_css_colors( $v_cuuzv, $v_tgtyq ) { // obf
	$v_lkpcx = array( // obf
		'css_classes'           => array(), // obf
		'inline_styles'         => '', // obf
		'overlay_css_classes'   => array(), // obf
		'overlay_inline_styles' => '', // obf
	); // obf

	// Text color. // obf
	$v_kuxbv  = array_key_exists( 'textColor', $v_tgtyq ); // obf
	$v_wmhzi = array_key_exists( 'customTextColor', $v_tgtyq ); // obf
	$v_zhzdi = isset( $v_tgtyq['style']['color']['text'] ); // obf

	// If has text color. // obf
	if ( $v_zhzdi || $v_wmhzi || $v_kuxbv ) { // obf
		// Add has-text-color class. // obf
		$v_lkpcx['css_classes'][] = 'has-text-color'; // obf
	} // obf

	if ( $v_kuxbv ) { // obf
		// Add the color class. // obf
		$v_lkpcx['css_classes'][] = sprintf( 'has-%s-color', _wp_to_kebab_case( $v_tgtyq['textColor'] ) ); // obf
	} elseif ( $v_wmhzi ) { // obf
		$v_lkpcx['inline_styles'] .= sprintf( 'color: %s;', $v_tgtyq['customTextColor'] ); // obf
	} elseif ( $v_zhzdi ) { // obf
		// Add the custom color inline style. // obf
		$v_lkpcx['inline_styles'] .= sprintf( 'color: %s;', $v_tgtyq['style']['color']['text'] ); // obf
	} // obf

	// Background color. // obf
	$v_hxymm  = array_key_exists( 'backgroundColor', $v_tgtyq ); // obf
	$v_vmkxg = array_key_exists( 'customBackgroundColor', $v_tgtyq ); // obf
	$v_dgsfl = isset( $v_tgtyq['style']['color']['background'] ); // obf

	// If has background color. // obf
	if ( $v_dgsfl || $v_vmkxg || $v_hxymm ) { // obf
		// Add has-background class. // obf
		$v_lkpcx['css_classes'][] = 'has-background'; // obf
	} // obf

	if ( $v_hxymm ) { // obf
		// Add the background-color class. // obf
		$v_lkpcx['css_classes'][] = sprintf( 'has-%s-background-color', _wp_to_kebab_case( $v_tgtyq['backgroundColor'] ) ); // obf
	} elseif ( $v_vmkxg ) { // obf
		$v_lkpcx['inline_styles'] .= sprintf( 'background-color: %s;', $v_tgtyq['customBackgroundColor'] ); // obf
	} elseif ( $v_dgsfl ) { // obf
		// Add the custom background-color inline style. // obf
		$v_lkpcx['inline_styles'] .= sprintf( 'background-color: %s;', $v_tgtyq['style']['color']['background'] ); // obf
	} // obf

	// Overlay text color. // obf
	$v_irxxp  = array_key_exists( 'overlayTextColor', $v_tgtyq ); // obf
	$v_xouln = array_key_exists( 'customOverlayTextColor', $v_tgtyq ); // obf

	// If it has a text color. // obf
	if ( $v_irxxp || $v_xouln ) { // obf
		$v_lkpcx['overlay_css_classes'][] = 'has-text-color'; // obf
	} // obf

	// Give overlay colors priority, fall back to Navigation block colors, then global styles. // obf
	if ( $v_irxxp ) { // obf
		$v_lkpcx['overlay_css_classes'][] = sprintf( 'has-%s-color', _wp_to_kebab_case( $v_tgtyq['overlayTextColor'] ) ); // obf
	} elseif ( $v_xouln ) { // obf
		$v_lkpcx['overlay_inline_styles'] .= sprintf( 'color: %s;', $v_tgtyq['customOverlayTextColor'] ); // obf
	} // obf

	// Overlay background colors. // obf
	$v_unzgx  = array_key_exists( 'overlayBackgroundColor', $v_tgtyq ); // obf
	$v_ixloz = array_key_exists( 'customOverlayBackgroundColor', $v_tgtyq ); // obf

	// If has background color. // obf
	if ( $v_unzgx || $v_ixloz ) { // obf
		$v_lkpcx['overlay_css_classes'][] = 'has-background'; // obf
	} // obf

	if ( $v_unzgx ) { // obf
		$v_lkpcx['overlay_css_classes'][] = sprintf( 'has-%s-background-color', _wp_to_kebab_case( $v_tgtyq['overlayBackgroundColor'] ) ); // obf
	} elseif ( $v_ixloz ) { // obf
		$v_lkpcx['overlay_inline_styles'] .= sprintf( 'background-color: %s;', $v_tgtyq['customOverlayBackgroundColor'] ); // obf
	} // obf

	return $v_lkpcx; // obf
} // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the font sizes // obf
 * which will be applied to the pages markup in the front-end when it is a descendant of navigation. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param  array $v_tgtyq Navigation block context. // obf
 * @return array Font size CSS classes and inline styles. // obf
 */ // obf
function block_core_page_list_build_css_font_sizes( $v_tgtyq ) { // obf
	// CSS classes. // obf
	$v_nyqvw = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	$v_slbzg  = array_key_exists( 'fontSize', $v_tgtyq ); // obf
	$v_yejiz = isset( $v_tgtyq['style']['typography']['fontSize'] ); // obf

	if ( $v_slbzg ) { // obf
		// Add the font size class. // obf
		$v_nyqvw['css_classes'][] = sprintf( 'has-%s-font-size', $v_tgtyq['fontSize'] ); // obf
	} elseif ( $v_yejiz ) { // obf
		// Add the custom font size inline style. // obf
		$v_nyqvw['inline_styles'] = sprintf( // obf
			'font-size: %s;', // obf
			wp_get_typography_font_size_value( // obf
				array( // obf
					'size' => $v_tgtyq['style']['typography']['fontSize'], // obf
				) // obf
			) // obf
		); // obf
	} // obf

	return $v_nyqvw; // obf
} // obf

/** // obf
 * Outputs Page list markup from an array of pages with nested children. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param boolean $v_wcnag Whether to open submenus on click instead of hover. // obf
 * @param boolean $v_omgiy Whether to show submenu indicator icons. // obf
 * @param boolean $v_ujglw If block is a child of Navigation block. // obf
 * @param array   $v_fughq The array of nested pages. // obf
 * @param boolean $v_jemqj Whether the submenu is nested or not. // obf
 * @param array   $v_deczn An array of ancestor ids for active page. // obf
 * @param array   $v_lkpcx Color information for overlay styles. // obf
 * @param integer $v_rnvfu The nesting depth. // obf
 * // obf
 * @return string List markup. // obf
 */ // obf
function block_core_page_list_render_nested_page_list( $v_wcnag, $v_omgiy, $v_ujglw, $v_fughq, $v_jemqj, $v_deczn = array(), $v_lkpcx = array(), $v_rnvfu = 0 ) { // obf
	if ( empty( $v_fughq ) ) { // obf
		return; // obf
	} // obf
	$v_fljtb = (int) get_option( 'page_on_front' ); // obf
	$v_gdqpi        = ''; // obf
	foreach ( (array) $v_fughq as $v_ivgmn ) { // obf
		$v_wcble       = $v_ivgmn['is_active'] ? ' current-menu-item' : ''; // obf
		$v_jtene    = $v_ivgmn['is_active'] ? ' aria-current="page"' : ''; // obf
		$v_kwxro = ''; // obf

		$v_wcble .= in_array( $v_ivgmn['page_id'], $v_deczn, true ) ? ' current-menu-ancestor' : ''; // obf
		if ( isset( $v_ivgmn['children'] ) ) { // obf
			$v_wcble .= ' has-child'; // obf
		} // obf

		if ( $v_ujglw ) { // obf
			$v_wcble .= ' wp-block-navigation-item'; // obf

			if ( $v_wcnag ) { // obf
				$v_wcble .= ' open-on-click'; // obf
			} elseif ( $v_omgiy ) { // obf
				$v_wcble .= ' open-on-hover-click'; // obf
			} // obf
		} // obf

		$v_fjteo = $v_ujglw ? ' wp-block-navigation-item__content' : ''; // obf

		// If this is the first level of submenus, include the overlay colors. // obf
		if ( ( ( 0 < $v_rnvfu && ! $v_jemqj ) || $v_jemqj ) && isset( $v_lkpcx['overlay_css_classes'], $v_lkpcx['overlay_inline_styles'] ) ) { // obf
			$v_wcble .= ' ' . trim( implode( ' ', $v_lkpcx['overlay_css_classes'] ) ); // obf
			if ( '' !== $v_lkpcx['overlay_inline_styles'] ) { // obf
				$v_kwxro = sprintf( ' style="%s"', esc_attr( $v_lkpcx['overlay_inline_styles'] ) ); // obf
			} // obf
		} // obf

		if ( (int) $v_ivgmn['page_id'] === $v_fljtb ) { // obf
			$v_wcble .= ' menu-item-home'; // obf
		} // obf

		$v_reluz = wp_kses_post( $v_ivgmn['title'] ); // obf
		$v_reluz = $v_reluz ? $v_reluz : __( '(no title)' ); // obf

		$v_fbgaz = sprintf( // obf
			/* translators: Accessibility text. %s: Parent page title. */ // obf
			__( '%s submenu' ), // obf
			wp_strip_all_tags( $v_reluz ) // obf
		); // obf

		$v_gdqpi .= '<li class="wp-block-pages-list__item' . esc_attr( $v_wcble ) . '"' . $v_kwxro . '>'; // obf

		if ( isset( $v_ivgmn['children'] ) && $v_ujglw && $v_wcnag ) { // obf
			$v_gdqpi .= '<button aria-label="' . esc_attr( $v_fbgaz ) . '" class="' . esc_attr( $v_fjteo ) . ' wp-block-navigation-submenu__toggle" aria-expanded="false">' . esc_html( $v_reluz ) . // obf
			'</button><span class="wp-block-page-list__submenu-icon wp-block-navigation__submenu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg></span>'; // obf
		} else { // obf
			$v_gdqpi .= '<a class="wp-block-pages-list__item__link' . esc_attr( $v_fjteo ) . '" href="' . esc_url( $v_ivgmn['link'] ) . '"' . $v_jtene . '>' . $v_reluz . '</a>'; // obf
		} // obf

		if ( isset( $v_ivgmn['children'] ) ) { // obf
			if ( $v_ujglw && $v_omgiy && ! $v_wcnag ) { // obf
				$v_gdqpi .= '<button aria-label="' . esc_attr( $v_fbgaz ) . '" class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle" aria-expanded="false">'; // obf
				$v_gdqpi .= '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg>'; // obf
				$v_gdqpi .= '</button>'; // obf
			} // obf
			$v_gdqpi .= '<ul class="wp-block-navigation__submenu-container">'; // obf
			$v_gdqpi .= block_core_page_list_render_nested_page_list( $v_wcnag, $v_omgiy, $v_ujglw, $v_ivgmn['children'], $v_jemqj, $v_deczn, $v_lkpcx, $v_rnvfu + 1 ); // obf
			$v_gdqpi .= '</ul>'; // obf
		} // obf
		$v_gdqpi .= '</li>'; // obf
	} // obf
	return $v_gdqpi; // obf
} // obf

/** // obf
 * Outputs nested array of pages // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_jikvb The level being iterated through. // obf
 * @param array $v_jhvpk The children grouped by parent post ID. // obf
 * // obf
 * @return array The nested array of pages. // obf
 */ // obf
function block_core_page_list_nest_pages( $v_jikvb, $v_jhvpk ) { // obf
	if ( empty( $v_jikvb ) ) { // obf
		return; // obf
	} // obf
	foreach ( (array) $v_jikvb as $v_cxgoh => $v_glhfh ) { // obf
		if ( isset( $v_jhvpk[ $v_cxgoh ] ) ) { // obf
			$v_jikvb[ $v_cxgoh ]['children'] = block_core_page_list_nest_pages( $v_jhvpk[ $v_cxgoh ], $v_jhvpk ); // obf
		} // obf
	} // obf
	return $v_jikvb; // obf
} // obf

/** // obf
 * Renders the `core/page-list` block on server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_cuuzv The block attributes. // obf
 * @param string   $v_tatrm    The saved content. // obf
 * @param WP_Block $v_gnvcj      The parsed block. // obf
 * // obf
 * @return string Returns the page list markup. // obf
 */ // obf
function render_block_core_page_list( $v_cuuzv, $v_tatrm, $v_gnvcj ) { // obf
	static $v_btrna = 0; // obf
	++$v_btrna; // obf

	$v_hxovg = $v_cuuzv['parentPageID']; // obf
	$v_jemqj      = $v_cuuzv['isNested']; // obf

	$v_djnda = get_pages( // obf
		array( // obf
			'sort_column' => 'menu_order,post_title', // obf
			'order'       => 'asc', // obf
		) // obf
	); // obf

	// If there are no pages, there is nothing to show. // obf
	if ( empty( $v_djnda ) ) { // obf
		return; // obf
	} // obf

	$v_ocrks = array(); // obf

	$v_umdhj = array(); // obf

	$v_deczn = array(); // obf

	foreach ( (array) $v_djnda as $v_ivgmn ) { // obf
		$v_ssfgb = ! empty( $v_ivgmn->ID ) && ( get_queried_object_id() === $v_ivgmn->ID ); // obf

		if ( $v_ssfgb ) { // obf
			$v_deczn = get_post_ancestors( $v_ivgmn->ID ); // obf
		} // obf

		if ( $v_ivgmn->post_parent ) { // obf
			$v_umdhj[ $v_ivgmn->post_parent ][ $v_ivgmn->ID ] = array( // obf
				'page_id'   => $v_ivgmn->ID, // obf
				'title'     => $v_ivgmn->post_title, // obf
				'link'      => get_permalink( $v_ivgmn ), // obf
				'is_active' => $v_ssfgb, // obf
			); // obf
		} else { // obf
			$v_ocrks[ $v_ivgmn->ID ] = array( // obf
				'page_id'   => $v_ivgmn->ID, // obf
				'title'     => $v_ivgmn->post_title, // obf
				'link'      => get_permalink( $v_ivgmn ), // obf
				'is_active' => $v_ssfgb, // obf
			); // obf

		} // obf
	} // obf

	$v_lkpcx          = block_core_page_list_build_css_colors( $v_cuuzv, $v_gnvcj->context ); // obf
	$v_nyqvw      = block_core_page_list_build_css_font_sizes( $v_gnvcj->context ); // obf
	$v_qptta         = array_merge( // obf
		$v_lkpcx['css_classes'], // obf
		$v_nyqvw['css_classes'] // obf
	); // obf
	$v_kwxro = ( $v_lkpcx['inline_styles'] . $v_nyqvw['inline_styles'] ); // obf
	$v_lmbwx     = trim( implode( ' ', $v_qptta ) ); // obf

	$v_fughq = block_core_page_list_nest_pages( $v_ocrks, $v_umdhj ); // obf

	if ( 0 !== $v_hxovg ) { // obf
		// If the parent page has no child pages, there is nothing to show. // obf
		if ( ! array_key_exists( $v_hxovg, $v_umdhj ) ) { // obf
			return; // obf
		} // obf

		$v_fughq = block_core_page_list_nest_pages( // obf
			$v_umdhj[ $v_hxovg ], // obf
			$v_umdhj // obf
		); // obf
	} // obf

	$v_ujglw = array_key_exists( 'showSubmenuIcon', $v_gnvcj->context ); // obf

	$v_wcnag = array_key_exists( 'openSubmenusOnClick', $v_gnvcj->context ) ? $v_gnvcj->context['openSubmenusOnClick'] : false; // obf

	$v_omgiy = array_key_exists( 'showSubmenuIcon', $v_gnvcj->context ) ? $v_gnvcj->context['showSubmenuIcon'] : false; // obf

	$v_eyluw = $v_jemqj ? '%2$v_rtvws' : '<ul %1$v_rtvws>%2$v_rtvws</ul>'; // obf

	$v_kveqb = block_core_page_list_render_nested_page_list( $v_wcnag, $v_omgiy, $v_ujglw, $v_fughq, $v_jemqj, $v_deczn, $v_lkpcx ); // obf

	$v_nucca = get_block_wrapper_attributes( // obf
		array( // obf
			'class' => $v_lmbwx, // obf
			'style' => $v_kwxro, // obf
		) // obf
	); // obf

	return sprintf( // obf
		$v_eyluw, // obf
		$v_nucca, // obf
		$v_kveqb // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/pages` block on server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_page_list() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/page-list', // obf
		array( // obf
			'render_callback' => 'render_block_core_page_list', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_page_list' ); // obf