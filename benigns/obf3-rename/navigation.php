

<?php // obf
/** // obf
 * Server-side rendering of the `core/navigation` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Helper functions used to render the navigation block. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_Navigation_Block_Renderer { // obf

	/** // obf
	 * Used to determine whether or not a navigation has submenus. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	private static $v_trtbq = false; // obf

	/** // obf
	 * Used to determine which blocks need an <li> wrapper. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_thdog = array( // obf
		'core/site-title', // obf
		'core/site-logo', // obf
		'core/social-links', // obf
	); // obf

	/** // obf
	 * Keeps track of all the navigation names that have been seen. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_txcfr = array(); // obf

	/** // obf
	 * Returns whether or not this is responsive navigation. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return bool Returns whether or not this is responsive navigation. // obf
	 */ // obf
	private static function is_responsive( $v_ejhsp ) { // obf
		/** // obf
		 * This is for backwards compatibility after the `isResponsive` attribute was been removed. // obf
		 */ // obf

		$v_nlwgx = ! empty( $v_ejhsp['isResponsive'] ) && $v_ejhsp['isResponsive']; // obf
		return isset( $v_ejhsp['overlayMenu'] ) && 'never' !== $v_ejhsp['overlayMenu'] || $v_nlwgx; // obf
	} // obf

	/** // obf
	 * Returns whether or not a navigation has a submenu. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 * @return bool Returns whether or not a navigation has a submenu and also sets the member variable. // obf
	 */ // obf
	private static function has_submenus( $v_pqztw ) { // obf
		if ( true === static::$v_trtbq ) { // obf
			return static::$v_trtbq; // obf
		} // obf

		foreach ( $v_pqztw as $v_gvpwo ) { // obf
			// If this is a page list then work out if any of the pages have children. // obf
			if ( 'core/page-list' === $v_gvpwo->name ) { // obf
				$v_nymcy = get_pages( // obf
					array( // obf
						'sort_column' => 'menu_order,post_title', // obf
						'order'       => 'asc', // obf
					) // obf
				); // obf
				foreach ( (array) $v_nymcy as $v_gfdnz ) { // obf
					if ( $v_gfdnz->post_parent ) { // obf
						static::$v_trtbq = true; // obf
						break; // obf
					} // obf
				} // obf
			} // obf
			// If this is a navigation submenu then we know we have submenus. // obf
			if ( 'core/navigation-submenu' === $v_gvpwo->name ) { // obf
				static::$v_trtbq = true; // obf
				break; // obf
			} // obf
		} // obf

		return static::$v_trtbq; // obf
	} // obf

	/** // obf
	 * Determine whether the navigation blocks is interactive. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp   The block attributes. // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 * @return bool Returns whether or not to load the view script. // obf
	 */ // obf
	private static function is_interactive( $v_ejhsp, $v_pqztw ) { // obf
		$v_trtbq       = static::has_submenus( $v_pqztw ); // obf
		$v_sfuau = static::is_responsive( $v_ejhsp ); // obf
		return ( $v_trtbq && ( $v_ejhsp['openSubmenusOnClick'] || $v_ejhsp['showSubmenuIcon'] ) ) || $v_sfuau; // obf
	} // obf

	/** // obf
	 * Returns whether or not a block needs a list item wrapper. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Block $v_bhhlh The block. // obf
	 * @return bool Returns whether or not a block needs a list item wrapper. // obf
	 */ // obf
	private static function does_block_need_a_list_item_wrapper( $v_bhhlh ) { // obf

		/** // obf
		 * Filter the list of blocks that need a list item wrapper. // obf
		 * // obf
		 * Affords the ability to customize which blocks need a list item wrapper when rendered // obf
		 * within a core/navigation block. // obf
		 * This is useful for blocks that are not list items but should be wrapped in a list // obf
		 * item when used as a child of a navigation block. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array $v_thdog The list of blocks that need a list item wrapper. // obf
		 * @return array The list of blocks that need a list item wrapper. // obf
		 */ // obf
		$v_thdog = apply_filters( 'block_core_navigation_listable_blocks', static::$v_thdog ); // obf

		return in_array( $v_bhhlh->name, $v_thdog, true ); // obf
	} // obf

	/** // obf
	 * Returns the markup for a single inner block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Block $v_gvpwo The inner block. // obf
	 * @return string Returns the markup for a single inner block. // obf
	 */ // obf
	private static function get_markup_for_inner_block( $v_gvpwo ) { // obf
		$v_vevtn = $v_gvpwo->render(); // obf
		if ( ! empty( $v_vevtn ) ) { // obf
			if ( static::does_block_need_a_list_item_wrapper( $v_gvpwo ) ) { // obf
				return '<li class="wp-block-navigation-item">' . $v_vevtn . '</li>'; // obf
			} // obf
		} // obf

		return $v_vevtn; // obf
	} // obf

	/** // obf
	 * Returns the html for the inner blocks of the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp   The block attributes. // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 * @return string Returns the html for the inner blocks of the navigation block. // obf
	 */ // obf
	private static function get_inner_blocks_html( $v_ejhsp, $v_pqztw ) { // obf
		$v_trtbq   = static::has_submenus( $v_pqztw ); // obf
		$v_tlzms = static::is_interactive( $v_ejhsp, $v_pqztw ); // obf

		$v_romzp                = static::get_styles( $v_ejhsp ); // obf
		$v_kkgbe                = static::get_classes( $v_ejhsp ); // obf
		$v_bowug = get_block_wrapper_attributes( // obf
			array( // obf
				'class' => 'wp-block-navigation__container ' . $v_kkgbe, // obf
				'style' => $v_romzp, // obf
			) // obf
		); // obf

		$v_nhioa = ''; // obf
		$v_vzwqf      = false; // obf

		foreach ( $v_pqztw as $v_gvpwo ) { // obf
			$v_xngca = static::get_markup_for_inner_block( $v_gvpwo ); // obf
			$v_pojis                  = new WP_HTML_Tag_Processor( $v_xngca ); // obf
			$v_ruumx       = $v_pojis->next_tag( 'LI' ); // obf

			if ( $v_ruumx && ! $v_vzwqf ) { // obf
				$v_vzwqf       = true; // obf
				$v_nhioa .= sprintf( // obf
					'<ul %1$v_ulnub>', // obf
					$v_bowug // obf
				); // obf
			} // obf

			if ( ! $v_ruumx && $v_vzwqf ) { // obf
				$v_vzwqf       = false; // obf
				$v_nhioa .= '</ul>'; // obf
			} // obf

			$v_nhioa .= $v_xngca; // obf
		} // obf

		if ( $v_vzwqf ) { // obf
			$v_nhioa .= '</ul>'; // obf
		} // obf

		// Add directives to the submenu if needed. // obf
		if ( $v_trtbq && $v_tlzms ) { // obf
			$v_cfrzp              = new WP_HTML_Tag_Processor( $v_nhioa ); // obf
			$v_nhioa = block_core_navigation_add_directives_to_submenu( $v_cfrzp, $v_ejhsp ); // obf
		} // obf

		return $v_nhioa; // obf
	} // obf

	/** // obf
	 * Gets the inner blocks for the navigation block from the navigation post. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return WP_Block_List Returns the inner blocks for the navigation block. // obf
	 */ // obf
	private static function get_inner_blocks_from_navigation_post( $v_ejhsp ) { // obf
		$v_eotji = get_post( $v_ejhsp['ref'] ); // obf
		if ( ! isset( $v_eotji ) ) { // obf
			return new WP_Block_List( array(), $v_ejhsp ); // obf
		} // obf

		// Only published posts are valid. If this is changed then a corresponding change // obf
		// must also be implemented in `use-navigation-menu.js`. // obf
		if ( 'publish' === $v_eotji->post_status ) { // obf
			$v_mqcss = parse_blocks( $v_eotji->post_content ); // obf

			// 'parse_blocks' includes a null block with '\n\n' as the content when // obf
			// it encounters whitespace. This code strips it. // obf
			$v_abtht = block_core_navigation_filter_out_empty_blocks( $v_mqcss ); // obf

			// Re-serialize, and run Block Hooks algorithm to inject hooked blocks. // obf
			// TODO: See if we can move the apply_block_hooks_to_content_from_post_object() call // obf
			// before the parse_blocks() call further above, to avoid the extra serialization/parsing. // obf
			$v_nkjpp = serialize_blocks( $v_abtht ); // obf
			$v_nkjpp = apply_block_hooks_to_content_from_post_object( $v_nkjpp, $v_eotji ); // obf
			$v_abtht = parse_blocks( $v_nkjpp ); // obf

			// TODO - this uses the full navigation block attributes for the // obf
			// context which could be refined. // obf
			return new WP_Block_List( $v_abtht, $v_ejhsp ); // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the inner blocks for the navigation block from the fallback. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return WP_Block_List Returns the inner blocks for the navigation block. // obf
	 */ // obf
	private static function get_inner_blocks_from_fallback( $v_ejhsp ) { // obf
		$v_esbll = block_core_navigation_get_fallback_blocks(); // obf

		// Fallback my have been filtered so do basic test for validity. // obf
		if ( empty( $v_esbll ) || ! is_array( $v_esbll ) ) { // obf
			return new WP_Block_List( array(), $v_ejhsp ); // obf
		} // obf

		return new WP_Block_List( $v_esbll, $v_ejhsp ); // obf
	} // obf

	/** // obf
	 * Gets the inner blocks for the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array    $v_ejhsp The block attributes. // obf
	 * @param WP_Block $v_bhhlh The parsed block. // obf
	 * @return WP_Block_List Returns the inner blocks for the navigation block. // obf
	 */ // obf
	private static function get_inner_blocks( $v_ejhsp, $v_bhhlh ) { // obf
		$v_pqztw = $v_bhhlh->inner_blocks; // obf

		// Ensure that blocks saved with the legacy ref attribute name (navigationMenuId) continue to render. // obf
		if ( array_key_exists( 'navigationMenuId', $v_ejhsp ) ) { // obf
			$v_ejhsp['ref'] = $v_ejhsp['navigationMenuId']; // obf
		} // obf

		// If: // obf
		// - the gutenberg plugin is active // obf
		// - `__unstableLocation` is defined // obf
		// - we have menu items at the defined location // obf
		// - we don't have a relationship to a `wp_navigation` Post (via `ref`). // obf
		// ...then create inner blocks from the classic menu assigned to that location. // obf
		if ( // obf
			defined( 'IS_GUTENBERG_PLUGIN' ) && IS_GUTENBERG_PLUGIN && // obf
			array_key_exists( '__unstableLocation', $v_ejhsp ) && // obf
			! array_key_exists( 'ref', $v_ejhsp ) && // obf
			! empty( block_core_navigation_get_menu_items_at_location( $v_ejhsp['__unstableLocation'] ) ) // obf
		) { // obf
			$v_pqztw = block_core_navigation_get_inner_blocks_from_unstable_location( $v_ejhsp ); // obf
		} // obf

		// Load inner blocks from the navigation post. // obf
		if ( array_key_exists( 'ref', $v_ejhsp ) ) { // obf
			$v_pqztw = static::get_inner_blocks_from_navigation_post( $v_ejhsp ); // obf
		} // obf

		// If there are no inner blocks then fallback to rendering an appropriate fallback. // obf
		if ( empty( $v_pqztw ) ) { // obf
			$v_pqztw = static::get_inner_blocks_from_fallback( $v_ejhsp ); // obf
		} // obf

		/** // obf
		 * Filter navigation block $v_pqztw. // obf
		 * Allows modification of a navigation block menu items. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param \WP_Block_List $v_pqztw // obf
		 */ // obf
		$v_pqztw = apply_filters( 'block_core_navigation_render_inner_blocks', $v_pqztw ); // obf

		$v_ktwrw = block_core_navigation_get_post_ids( $v_pqztw ); // obf
		if ( $v_ktwrw ) { // obf
			_prime_post_caches( $v_ktwrw, false, false ); // obf
		} // obf

		return $v_pqztw; // obf
	} // obf

	/** // obf
	 * Gets the name of the current navigation, if it has one. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return string Returns the name of the navigation. // obf
	 */ // obf
	private static function get_navigation_name( $v_ejhsp ) { // obf

		$v_rbudh = $v_ejhsp['ariaLabel'] ?? ''; // obf

		if ( ! empty( $v_rbudh ) ) { // obf
			return $v_rbudh; // obf
		} // obf

		// Load the navigation post. // obf
		if ( array_key_exists( 'ref', $v_ejhsp ) ) { // obf
			$v_eotji = get_post( $v_ejhsp['ref'] ); // obf
			if ( ! isset( $v_eotji ) ) { // obf
				return $v_rbudh; // obf
			} // obf

			// Only published posts are valid. If this is changed then a corresponding change // obf
			// must also be implemented in `use-navigation-menu.js`. // obf
			if ( 'publish' === $v_eotji->post_status ) { // obf
				$v_rbudh = $v_eotji->post_title; // obf

				// This is used to count the number of times a navigation name has been seen, // obf
				// so that we can ensure every navigation has a unique id. // obf
				if ( isset( static::$v_txcfr[ $v_rbudh ] ) ) { // obf
					++static::$v_txcfr[ $v_rbudh ]; // obf
				} else { // obf
					static::$v_txcfr[ $v_rbudh ] = 1; // obf
				} // obf
			} // obf
		} // obf

		return $v_rbudh; // obf
	} // obf

	/** // obf
	 * Returns the layout class for the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return string Returns the layout class for the navigation block. // obf
	 */ // obf
	private static function get_layout_class( $v_ejhsp ) { // obf
		$v_sarzi = array( // obf
			'left'          => 'items-justified-left', // obf
			'right'         => 'items-justified-right', // obf
			'center'        => 'items-justified-center', // obf
			'space-between' => 'items-justified-space-between', // obf
		); // obf

		$v_vgqck = ''; // obf
		if ( // obf
			isset( $v_ejhsp['layout']['justifyContent'] ) && // obf
			isset( $v_sarzi[ $v_ejhsp['layout']['justifyContent'] ] ) // obf
		) { // obf
			$v_vgqck .= $v_sarzi[ $v_ejhsp['layout']['justifyContent'] ]; // obf
		} // obf
		if ( isset( $v_ejhsp['layout']['orientation'] ) && 'vertical' === $v_ejhsp['layout']['orientation'] ) { // obf
			$v_vgqck .= ' is-vertical'; // obf
		} // obf

		if ( isset( $v_ejhsp['layout']['flexWrap'] ) && 'nowrap' === $v_ejhsp['layout']['flexWrap'] ) { // obf
			$v_vgqck .= ' no-wrap'; // obf
		} // obf
		return $v_vgqck; // obf
	} // obf

	/** // obf
	 * Return classes for the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return string Returns the classes for the navigation block. // obf
	 */ // obf
	private static function get_classes( $v_ejhsp ) { // obf
		// Restore legacy classnames for submenu positioning. // obf
		$v_vgqck       = static::get_layout_class( $v_ejhsp ); // obf
		$v_ouwus             = block_core_navigation_build_css_colors( $v_ejhsp ); // obf
		$v_damql         = block_core_navigation_build_css_font_sizes( $v_ejhsp ); // obf
		$v_sfuau = static::is_responsive( $v_ejhsp ); // obf

		// Manually add block support text decoration as CSS class. // obf
		$v_viebz       = $v_ejhsp['style']['typography']['textDecoration'] ?? null; // obf
		$v_oyacl = sprintf( 'has-text-decoration-%s', $v_viebz ); // obf

		$v_snapf = array_merge( // obf
			$v_ouwus['css_classes'], // obf
			$v_damql['css_classes'], // obf
			$v_sfuau ? array( 'is-responsive' ) : array(), // obf
			$v_vgqck ? array( $v_vgqck ) : array(), // obf
			$v_viebz ? array( $v_oyacl ) : array() // obf
		); // obf
		return implode( ' ', $v_snapf ); // obf
	} // obf

	/** // obf
	 * Get styles for the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return string Returns the styles for the navigation block. // obf
	 */ // obf
	private static function get_styles( $v_ejhsp ) { // obf
		$v_ouwus       = block_core_navigation_build_css_colors( $v_ejhsp ); // obf
		$v_damql   = block_core_navigation_build_css_font_sizes( $v_ejhsp ); // obf
		$v_nxelw = isset( $v_ejhsp['styles'] ) ? $v_ejhsp['styles'] : ''; // obf
		return $v_nxelw . $v_ouwus['inline_styles'] . $v_damql['inline_styles']; // obf
	} // obf

	/** // obf
	 * Get the responsive container markup // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp The block attributes. // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 * @param string        $v_nhioa The markup for the inner blocks. // obf
	 * @return string Returns the container markup. // obf
	 */ // obf
	private static function get_responsive_container_markup( $v_ejhsp, $v_pqztw, $v_nhioa ) { // obf
		$v_tlzms  = static::is_interactive( $v_ejhsp, $v_pqztw ); // obf
		$v_ouwus          = block_core_navigation_build_css_colors( $v_ejhsp ); // obf
		$v_ehhzg = wp_unique_id( 'modal-' ); // obf

		$v_ufchs = isset( $v_ejhsp['overlayMenu'] ) && 'always' === $v_ejhsp['overlayMenu']; // obf

		$v_jnyio = array( // obf
			'wp-block-navigation__responsive-container', // obf
			$v_ufchs ? 'hidden-by-default' : '', // obf
			implode( ' ', $v_ouwus['overlay_css_classes'] ), // obf
		); // obf
		$v_sxxdg          = array( // obf
			'wp-block-navigation__responsive-container-open', // obf
			$v_ufchs ? 'always-shown' : '', // obf
		); // obf

		$v_kzswr = isset( $v_ejhsp['hasIcon'] ) && true === $v_ejhsp['hasIcon']; // obf
		$v_kkpzn        = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5" /><rect x="4" y="15" width="16" height="1.5" /></svg>'; // obf
		if ( isset( $v_ejhsp['icon'] ) ) { // obf
			if ( 'menu' === $v_ejhsp['icon'] ) { // obf
				$v_kkpzn = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z" /></svg>'; // obf
			} // obf
		} // obf
		$v_wugqu       = $v_kzswr ? $v_kkpzn : __( 'Menu' ); // obf
		$v_vrkpw    = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="m13.06 12 6.47-6.47-1.06-1.06L12 10.94 5.53 4.47 4.47 5.53 10.94 12l-6.47 6.47 1.06 1.06L12 13.06l6.47 6.47 1.06-1.06L13.06 12Z"></path></svg>'; // obf
		$v_bacpj = $v_kzswr ? $v_vrkpw : __( 'Close' ); // obf
		$v_mltqu      = $v_kzswr ? 'aria-label="' . __( 'Open menu' ) . '"' : ''; // Open button label. // obf
		$v_pfdpg     = $v_kzswr ? 'aria-label="' . __( 'Close menu' ) . '"' : ''; // Close button label. // obf

		// Add Interactivity API directives to the markup if needed. // obf
		$v_ellfa          = ''; // obf
		$v_rcqag = ''; // obf
		$v_ilgti    = ''; // obf
		$v_spmrp         = ''; // obf
		if ( $v_tlzms ) { // obf
			$v_ellfa                  = ' // obf
				data-wp-on-async--click="actions.openMenuOnClick" // obf
				data-wp-on--keydown="actions.handleMenuKeydown" // obf
			'; // obf
			$v_rcqag         = ' // obf
				data-wp-class--has-modal-open="state.isMenuOpen" // obf
				data-wp-class--is-menu-open="state.isMenuOpen" // obf
				data-wp-watch="callbacks.initMenu" // obf
				data-wp-on--keydown="actions.handleMenuKeydown" // obf
				data-wp-on-async--focusout="actions.handleMenuFocusout" // obf
				tabindex="-1" // obf
			'; // obf
			$v_ilgti            = ' // obf
				data-wp-bind--aria-modal="state.ariaModal" // obf
				data-wp-bind--aria-label="state.ariaLabel" // obf
				data-wp-bind--role="state.roleAttribute" // obf
			'; // obf
			$v_spmrp                 = ' // obf
				data-wp-on-async--click="actions.closeMenuOnClick" // obf
			'; // obf
			$v_xlmzm = ' // obf
				data-wp-watch="callbacks.focusFirstElement" // obf
			'; // obf
		} // obf

		$v_zqmur = esc_attr( safecss_filter_attr( $v_ouwus['overlay_inline_styles'] ) ); // obf

		return sprintf( // obf
			'<button aria-haspopup="dialog" %3$v_ulnub class="%6$v_ulnub" %10$v_ulnub>%8$v_ulnub</button> // obf
				<div class="%5$v_ulnub" %7$v_ulnub id="%1$v_ulnub" %11$v_ulnub> // obf
					<div class="wp-block-navigation__responsive-close" tabindex="-1"> // obf
						<div class="wp-block-navigation__responsive-dialog" %12$v_ulnub> // obf
							<button %4$v_ulnub class="wp-block-navigation__responsive-container-close" %13$v_ulnub>%9$v_ulnub</button> // obf
							<div class="wp-block-navigation__responsive-container-content" %14$v_ulnub id="%1$v_ulnub-content"> // obf
								%2$v_ulnub // obf
							</div> // obf
						</div> // obf
					</div> // obf
				</div>', // obf
			esc_attr( $v_ehhzg ), // obf
			$v_nhioa, // obf
			$v_mltqu, // obf
			$v_pfdpg, // obf
			esc_attr( trim( implode( ' ', $v_jnyio ) ) ), // obf
			esc_attr( trim( implode( ' ', $v_sxxdg ) ) ), // obf
			( ! empty( $v_zqmur ) ) ? "style=\"$v_zqmur\"" : '', // obf
			$v_wugqu, // obf
			$v_bacpj, // obf
			$v_ellfa, // obf
			$v_rcqag, // obf
			$v_ilgti, // obf
			$v_spmrp, // obf
			$v_xlmzm // obf
		); // obf
	} // obf

	/** // obf
	 * Get the wrapper attributes // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp    The block attributes. // obf
	 * @param WP_Block_List $v_pqztw  A list of inner blocks. // obf
	 * @return string Returns the navigation block markup. // obf
	 */ // obf
	private static function get_nav_wrapper_attributes( $v_ejhsp, $v_pqztw ) { // obf
		$v_dqwld      = static::get_unique_navigation_name( $v_ejhsp ); // obf
		$v_tlzms     = static::is_interactive( $v_ejhsp, $v_pqztw ); // obf
		$v_sfuau = static::is_responsive( $v_ejhsp ); // obf
		$v_romzp              = static::get_styles( $v_ejhsp ); // obf
		$v_kkgbe              = static::get_classes( $v_ejhsp ); // obf
		$v_jccti   = array( // obf
			'class' => $v_kkgbe, // obf
			'style' => $v_romzp, // obf
		); // obf
		if ( ! empty( $v_dqwld ) ) { // obf
			$v_jccti['aria-label'] = $v_dqwld; // obf
		} // obf
		$v_hlxbk = get_block_wrapper_attributes( $v_jccti ); // obf

		if ( $v_sfuau ) { // obf
			$v_xgqgw = static::get_nav_element_directives( $v_tlzms ); // obf
			$v_hlxbk    .= ' ' . $v_xgqgw; // obf
		} // obf

		return $v_hlxbk; // obf
	} // obf

	/** // obf
	 * Gets the nav element directives. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param bool $v_tlzms Whether the block is interactive. // obf
	 * @return string the directives for the navigation element. // obf
	 */ // obf
	private static function get_nav_element_directives( $v_tlzms ) { // obf
		if ( ! $v_tlzms ) { // obf
			return ''; // obf
		} // obf
		// When adding to this array be mindful of security concerns. // obf
		$v_dxemh    = wp_interactivity_data_wp_context( // obf
			array( // obf
				'overlayOpenedBy' => array( // obf
					'click' => false, // obf
					'hover' => false, // obf
					'focus' => false, // obf
				), // obf
				'type'            => 'overlay', // obf
				'roleAttribute'   => '', // obf
				'ariaLabel'       => __( 'Menu' ), // obf
			) // obf
		); // obf
		$v_xgqgw = ' // obf
		 data-wp-interactive="core/navigation" ' // obf
		. $v_dxemh; // obf

		return $v_xgqgw; // obf
	} // obf

	/** // obf
	 * Handle view script module loading. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp   The block attributes. // obf
	 * @param WP_Block      $v_bhhlh        The parsed block. // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 */ // obf
	private static function handle_view_script_module_loading( $v_ejhsp, $v_bhhlh, $v_pqztw ) { // obf
		if ( static::is_interactive( $v_ejhsp, $v_pqztw ) ) { // obf
			wp_enqueue_script_module( '@wordpress/block-library/navigation/view' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the markup for the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array         $v_ejhsp The block attributes. // obf
	 * @param WP_Block_List $v_pqztw The list of inner blocks. // obf
	 * @return string Returns the navigation wrapper markup. // obf
	 */ // obf
	private static function get_wrapper_markup( $v_ejhsp, $v_pqztw ) { // obf
		$v_nhioa = static::get_inner_blocks_html( $v_ejhsp, $v_pqztw ); // obf
		if ( static::is_responsive( $v_ejhsp ) ) { // obf
			return static::get_responsive_container_markup( $v_ejhsp, $v_pqztw, $v_nhioa ); // obf
		} // obf
		return $v_nhioa; // obf
	} // obf

	/** // obf
	 * Returns a unique name for the navigation. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return string Returns a unique name for the navigation. // obf
	 */ // obf
	private static function get_unique_navigation_name( $v_ejhsp ) { // obf
		$v_dqwld = static::get_navigation_name( $v_ejhsp ); // obf

		// If the menu name has been used previously then append an ID // obf
		// to the name to ensure uniqueness across a given post. // obf
		if ( isset( static::$v_txcfr[ $v_dqwld ] ) && static::$v_txcfr[ $v_dqwld ] > 1 ) { // obf
			$v_cdtmp         = static::$v_txcfr[ $v_dqwld ]; // obf
			$v_dqwld = $v_dqwld . ' ' . ( $v_cdtmp ); // obf
		} // obf

		return $v_dqwld; // obf
	} // obf

	/** // obf
	 * Renders the navigation block. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array    $v_ejhsp The block attributes. // obf
	 * @param string   $v_gznup    The saved content. // obf
	 * @param WP_Block $v_bhhlh      The parsed block. // obf
	 * @return string Returns the navigation block markup. // obf
	 */ // obf
	public static function render( $v_ejhsp, $v_gznup, $v_bhhlh ) { // obf
		/** // obf
		 * Deprecated: // obf
		 * The rgbTextColor and rgbBackgroundColor attributes // obf
		 * have been deprecated in favor of // obf
		 * customTextColor and customBackgroundColor ones. // obf
		 * Move the values from old attrs to the new ones. // obf
		 */ // obf
		if ( isset( $v_ejhsp['rgbTextColor'] ) && empty( $v_ejhsp['textColor'] ) ) { // obf
			$v_ejhsp['customTextColor'] = $v_ejhsp['rgbTextColor']; // obf
		} // obf

		if ( isset( $v_ejhsp['rgbBackgroundColor'] ) && empty( $v_ejhsp['backgroundColor'] ) ) { // obf
			$v_ejhsp['customBackgroundColor'] = $v_ejhsp['rgbBackgroundColor']; // obf
		} // obf

		unset( $v_ejhsp['rgbTextColor'], $v_ejhsp['rgbBackgroundColor'] ); // obf

		$v_pqztw = static::get_inner_blocks( $v_ejhsp, $v_bhhlh ); // obf
		// Prevent navigation blocks referencing themselves from rendering. // obf
		if ( block_core_navigation_block_contains_core_navigation( $v_pqztw ) ) { // obf
			return ''; // obf
		} // obf

		static::handle_view_script_module_loading( $v_ejhsp, $v_bhhlh, $v_pqztw ); // obf

		return sprintf( // obf
			'<nav %1$v_ulnub>%2$v_ulnub</nav>', // obf
			static::get_nav_wrapper_attributes( $v_ejhsp, $v_pqztw ), // obf
			static::get_wrapper_markup( $v_ejhsp, $v_pqztw ) // obf
		); // obf
	} // obf
} // obf

// These functions are used for the __unstableLocation feature and only active // obf
// when the gutenberg plugin is active. // obf
if ( defined( 'IS_GUTENBERG_PLUGIN' ) && IS_GUTENBERG_PLUGIN ) { // obf
	/** // obf
	 * Returns the menu items for a WordPress menu location. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_azabh The menu location. // obf
	 * @return array Menu items for the location. // obf
	 */ // obf
	function block_core_navigation_get_menu_items_at_location( $v_azabh ) { // obf
		if ( empty( $v_azabh ) ) { // obf
			return; // obf
		} // obf

		// Build menu data. The following approximates the code in // obf
		// `wp_nav_menu()` and `gutenberg_output_block_nav_menu`. // obf

		// Find the location in the list of locations, returning early if the // obf
		// location can't be found. // obf
		$v_zcgev = get_nav_menu_locations(); // obf
		if ( ! isset( $v_zcgev[ $v_azabh ] ) ) { // obf
			return; // obf
		} // obf

		// Get the menu from the location, returning early if there is no // obf
		// menu or there was an error. // obf
		$v_ojngo = wp_get_nav_menu_object( $v_zcgev[ $v_azabh ] ); // obf
		if ( ! $v_ojngo || is_wp_error( $v_ojngo ) ) { // obf
			return; // obf
		} // obf

		$v_remiw = wp_get_nav_menu_items( $v_ojngo->term_id, array( 'update_post_term_cache' => false ) ); // obf
		_wp_menu_item_classes_by_context( $v_remiw ); // obf

		return $v_remiw; // obf
	} // obf


	/** // obf
	 * Sorts a standard array of menu items into a nested structure keyed by the // obf
	 * id of the parent menu. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_remiw Menu items to sort. // obf
	 * @return array An array keyed by the id of the parent menu where each element // obf
	 *               is an array of menu items that belong to that parent. // obf
	 */ // obf
	function block_core_navigation_sort_menu_items_by_parent_id( $v_remiw ) { // obf
		$v_zyvvj = array(); // obf
		foreach ( (array) $v_remiw as $v_vdcjj ) { // obf
			$v_zyvvj[ $v_vdcjj->menu_order ] = $v_vdcjj; // obf
		} // obf
		unset( $v_remiw, $v_vdcjj ); // obf

		$v_bjsrf = array(); // obf
		foreach ( $v_zyvvj as $v_vdcjj ) { // obf
			$v_bjsrf[ $v_vdcjj->menu_item_parent ][] = $v_vdcjj; // obf
		} // obf

		return $v_bjsrf; // obf
	} // obf

	/** // obf
	 * Gets the inner blocks for the navigation block from the unstable location attribute. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_ejhsp The block attributes. // obf
	 * @return WP_Block_List Returns the inner blocks for the navigation block. // obf
	 */ // obf
	function block_core_navigation_get_inner_blocks_from_unstable_location( $v_ejhsp ) { // obf
		$v_remiw = block_core_navigation_get_menu_items_at_location( $v_ejhsp['__unstableLocation'] ); // obf
		if ( empty( $v_remiw ) ) { // obf
			return new WP_Block_List( array(), $v_ejhsp ); // obf
		} // obf

		$v_bjsrf = block_core_navigation_sort_menu_items_by_parent_id( $v_remiw ); // obf
		$v_mqcss           = block_core_navigation_parse_blocks_from_menu_items( $v_bjsrf[0], $v_bjsrf ); // obf
		return new WP_Block_List( $v_mqcss, $v_ejhsp ); // obf
	} // obf
} // obf

/** // obf
 * Add Interactivity API directives to the navigation-submenu and page-list // obf
 * blocks markup using the Tag Processor. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param WP_HTML_Tag_Processor $v_cfrzp             Markup of the navigation block. // obf
 * @param array                 $v_xujhl Block attributes. // obf
 * // obf
 * @return string Submenu markup with the directives injected. // obf
 */ // obf
function block_core_navigation_add_directives_to_submenu( $v_cfrzp, $v_xujhl ) { // obf
	while ( $v_cfrzp->next_tag( // obf
		array( // obf
			'tag_name'   => 'LI', // obf
			'class_name' => 'has-child', // obf
		) // obf
	) ) { // obf
		// Add directives to the parent `<li>`. // obf
		$v_cfrzp->set_attribute( 'data-wp-interactive', 'core/navigation' ); // obf
		$v_cfrzp->set_attribute( 'data-wp-context', '{ "submenuOpenedBy": { "click": false, "hover": false, "focus": false }, "type": "submenu", "modal": null }' ); // obf
		$v_cfrzp->set_attribute( 'data-wp-watch', 'callbacks.initMenu' ); // obf
		$v_cfrzp->set_attribute( 'data-wp-on--focusout', 'actions.handleMenuFocusout' ); // obf
		$v_cfrzp->set_attribute( 'data-wp-on--keydown', 'actions.handleMenuKeydown' ); // obf

		// This is a fix for Safari. Without it, Safari doesn't change the active // obf
		// element when the user clicks on a button. It can be removed once we add // obf
		// an overlay to capture the clicks, instead of relying on the focusout // obf
		// event. // obf
		$v_cfrzp->set_attribute( 'tabindex', '-1' ); // obf

		if ( ! isset( $v_xujhl['openSubmenusOnClick'] ) || false === $v_xujhl['openSubmenusOnClick'] ) { // obf
			$v_cfrzp->set_attribute( 'data-wp-on-async--mouseenter', 'actions.openMenuOnHover' ); // obf
			$v_cfrzp->set_attribute( 'data-wp-on-async--mouseleave', 'actions.closeMenuOnHover' ); // obf
		} // obf

		// Add directives to the toggle submenu button. // obf
		if ( $v_cfrzp->next_tag( // obf
			array( // obf
				'tag_name'   => 'BUTTON', // obf
				'class_name' => 'wp-block-navigation-submenu__toggle', // obf
			) // obf
		) ) { // obf
			$v_cfrzp->set_attribute( 'data-wp-on-async--click', 'actions.toggleMenuOnClick' ); // obf
			$v_cfrzp->set_attribute( 'data-wp-bind--aria-expanded', 'state.isMenuOpen' ); // obf
			// The `aria-expanded` attribute for SSR is already added in the submenu block. // obf
		} // obf
		// Add directives to the submenu. // obf
		if ( $v_cfrzp->next_tag( // obf
			array( // obf
				'tag_name'   => 'UL', // obf
				'class_name' => 'wp-block-navigation__submenu-container', // obf
			) // obf
		) ) { // obf
			$v_cfrzp->set_attribute( 'data-wp-on-async--focus', 'actions.openMenuOnFocus' ); // obf
		} // obf

		// Iterate through subitems if exist. // obf
		block_core_navigation_add_directives_to_submenu( $v_cfrzp, $v_xujhl ); // obf
	} // obf
	return $v_cfrzp->get_updated_html(); // obf
} // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the colors // obf
 * which will be applied to the navigation markup in the front-end. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_ejhsp Navigation block attributes. // obf
 * // obf
 * @return array Colors CSS classes and inline styles. // obf
 */ // obf
function block_core_navigation_build_css_colors( $v_ejhsp ) { // obf
	$v_ouwus = array( // obf
		'css_classes'           => array(), // obf
		'inline_styles'         => '', // obf
		'overlay_css_classes'   => array(), // obf
		'overlay_inline_styles' => '', // obf
	); // obf

	// Text color. // obf
	$v_nugzk  = array_key_exists( 'textColor', $v_ejhsp ); // obf
	$v_fwvqt = array_key_exists( 'customTextColor', $v_ejhsp ); // obf

	// If has text color. // obf
	if ( $v_fwvqt || $v_nugzk ) { // obf
		// Add has-text-color class. // obf
		$v_ouwus['css_classes'][] = 'has-text-color'; // obf
	} // obf

	if ( $v_nugzk ) { // obf
		// Add the color class. // obf
		$v_ouwus['css_classes'][] = sprintf( 'has-%s-color', $v_ejhsp['textColor'] ); // obf
	} elseif ( $v_fwvqt ) { // obf
		// Add the custom color inline style. // obf
		$v_ouwus['inline_styles'] .= sprintf( 'color: %s;', $v_ejhsp['customTextColor'] ); // obf
	} // obf

	// Background color. // obf
	$v_oapyw  = array_key_exists( 'backgroundColor', $v_ejhsp ); // obf
	$v_tepci = array_key_exists( 'customBackgroundColor', $v_ejhsp ); // obf

	// If has background color. // obf
	if ( $v_tepci || $v_oapyw ) { // obf
		// Add has-background class. // obf
		$v_ouwus['css_classes'][] = 'has-background'; // obf
	} // obf

	if ( $v_oapyw ) { // obf
		// Add the background-color class. // obf
		$v_ouwus['css_classes'][] = sprintf( 'has-%s-background-color', $v_ejhsp['backgroundColor'] ); // obf
	} elseif ( $v_tepci ) { // obf
		// Add the custom background-color inline style. // obf
		$v_ouwus['inline_styles'] .= sprintf( 'background-color: %s;', $v_ejhsp['customBackgroundColor'] ); // obf
	} // obf

	// Overlay text color. // obf
	$v_syfpm  = array_key_exists( 'overlayTextColor', $v_ejhsp ); // obf
	$v_donky = array_key_exists( 'customOverlayTextColor', $v_ejhsp ); // obf

	// If has overlay text color. // obf
	if ( $v_donky || $v_syfpm ) { // obf
		// Add has-text-color class. // obf
		$v_ouwus['overlay_css_classes'][] = 'has-text-color'; // obf
	} // obf

	if ( $v_syfpm ) { // obf
		// Add the overlay color class. // obf
		$v_ouwus['overlay_css_classes'][] = sprintf( 'has-%s-color', $v_ejhsp['overlayTextColor'] ); // obf
	} elseif ( $v_donky ) { // obf
		// Add the custom overlay color inline style. // obf
		$v_ouwus['overlay_inline_styles'] .= sprintf( 'color: %s;', $v_ejhsp['customOverlayTextColor'] ); // obf
	} // obf

	// Overlay background color. // obf
	$v_zfxfs  = array_key_exists( 'overlayBackgroundColor', $v_ejhsp ); // obf
	$v_sqysy = array_key_exists( 'customOverlayBackgroundColor', $v_ejhsp ); // obf

	// If has overlay background color. // obf
	if ( $v_sqysy || $v_zfxfs ) { // obf
		// Add has-background class. // obf
		$v_ouwus['overlay_css_classes'][] = 'has-background'; // obf
	} // obf

	if ( $v_zfxfs ) { // obf
		// Add the overlay background-color class. // obf
		$v_ouwus['overlay_css_classes'][] = sprintf( 'has-%s-background-color', $v_ejhsp['overlayBackgroundColor'] ); // obf
	} elseif ( $v_sqysy ) { // obf
		// Add the custom overlay background-color inline style. // obf
		$v_ouwus['overlay_inline_styles'] .= sprintf( 'background-color: %s;', $v_ejhsp['customOverlayBackgroundColor'] ); // obf
	} // obf

	return $v_ouwus; // obf
} // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the font sizes // obf
 * which will be applied to the navigation markup in the front-end. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_ejhsp Navigation block attributes. // obf
 * // obf
 * @return array Font size CSS classes and inline styles. // obf
 */ // obf
function block_core_navigation_build_css_font_sizes( $v_ejhsp ) { // obf
	// CSS classes. // obf
	$v_damql = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	$v_mhrzd  = array_key_exists( 'fontSize', $v_ejhsp ); // obf
	$v_ekwwu = array_key_exists( 'customFontSize', $v_ejhsp ); // obf

	if ( $v_mhrzd ) { // obf
		// Add the font size class. // obf
		$v_damql['css_classes'][] = sprintf( 'has-%s-font-size', $v_ejhsp['fontSize'] ); // obf
	} elseif ( $v_ekwwu ) { // obf
		// Add the custom font size inline style. // obf
		$v_damql['inline_styles'] = sprintf( 'font-size: %spx;', $v_ejhsp['customFontSize'] ); // obf
	} // obf

	return $v_damql; // obf
} // obf

/** // obf
 * Returns the top-level submenu SVG chevron icon. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return string // obf
 */ // obf
function block_core_navigation_render_submenu_icon() { // obf
	return '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg>'; // obf
} // obf

/** // obf
 * Filter out empty "null" blocks from the block list. // obf
 * 'parse_blocks' includes a null block with '\n\n' as the content when // obf
 * it encounters whitespace. This is not a bug but rather how the parser // obf
 * is designed. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_mqcss the parsed blocks to be normalized. // obf
 * @return array the normalized parsed blocks. // obf
 */ // obf
function block_core_navigation_filter_out_empty_blocks( $v_mqcss ) { // obf
	$v_agzik = array_filter( // obf
		$v_mqcss, // obf
		static function ( $v_bhhlh ) { // obf
			return isset( $v_bhhlh['blockName'] ); // obf
		} // obf
	); // obf

	// Reset keys. // obf
	return array_values( $v_agzik ); // obf
} // obf

/** // obf
 * Returns true if the navigation block contains a nested navigation block. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param WP_Block_List $v_pqztw Inner block instance to be normalized. // obf
 * @return bool true if the navigation block contains a nested navigation block. // obf
 */ // obf
function block_core_navigation_block_contains_core_navigation( $v_pqztw ) { // obf
	foreach ( $v_pqztw as $v_bhhlh ) { // obf
		if ( 'core/navigation' === $v_bhhlh->name ) { // obf
			return true; // obf
		} // obf
		if ( $v_bhhlh->inner_blocks && block_core_navigation_block_contains_core_navigation( $v_bhhlh->inner_blocks ) ) { // obf
			return true; // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Retrieves the appropriate fallback to be used on the front of the // obf
 * site when there is no menu assigned to the Nav block. // obf
 * // obf
 * This aims to mirror how the fallback mechanic for wp_nav_menu works. // obf
 * See https://developer.wordpress.org/reference/functions/wp_nav_menu/#more-information. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return array the array of blocks to be used as a fallback. // obf
 */ // obf
function block_core_navigation_get_fallback_blocks() { // obf
	$v_xzrtn = array( // obf
		array( // obf
			'blockName'    => 'core/page-list', // obf
			'innerContent' => array(), // obf
			'attrs'        => array(), // obf
		), // obf
	); // obf

	$v_jcnic = WP_Block_Type_Registry::get_instance(); // obf

	// If `core/page-list` is not registered then return empty blocks. // obf
	$v_esbll = $v_jcnic->is_registered( 'core/page-list' ) ? $v_xzrtn : array(); // obf
	$v_eotji = WP_Navigation_Fallback::get_fallback(); // obf

	// Use the first non-empty Navigation as fallback if available. // obf
	if ( $v_eotji ) { // obf
		$v_mqcss  = parse_blocks( $v_eotji->post_content ); // obf
		$v_darst = block_core_navigation_filter_out_empty_blocks( $v_mqcss ); // obf

		// Normalizing blocks may result in an empty array of blocks if they were all `null` blocks. // obf
		// In this case default to the (Page List) fallback. // obf
		$v_esbll = ! empty( $v_darst ) ? $v_darst : $v_esbll; // obf

		// Run Block Hooks algorithm to inject hooked blocks. // obf
		// We have to run it here because we need the post ID of the Navigation block to track ignored hooked blocks. // obf
		// TODO: See if we can move the apply_block_hooks_to_content_from_post_object() call // obf
		// before the parse_blocks() call further above, to avoid the extra serialization/parsing. // obf
		$v_nkjpp          = serialize_blocks( $v_esbll ); // obf
		$v_nkjpp          = apply_block_hooks_to_content_from_post_object( $v_nkjpp, $v_eotji ); // obf
		$v_esbll = parse_blocks( $v_nkjpp ); // obf
	} // obf

	/** // obf
	 * Filters the fallback experience for the Navigation block. // obf
	 * // obf
	 * Returning a falsey value will opt out of the fallback and cause the block not to render. // obf
	 * To customise the blocks provided return an array of blocks - these should be valid // obf
	 * children of the `core/navigation` block. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array[] $v_esbll default fallback blocks provided by the default block mechanic. // obf
	 */ // obf
	return apply_filters( 'block_core_navigation_render_fallback', $v_esbll ); // obf
} // obf

/** // obf
 * Iterate through all inner blocks recursively and get navigation link block's post IDs. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param WP_Block_List $v_pqztw Block list class instance. // obf
 * // obf
 * @return array Array of post IDs. // obf
 */ // obf
function block_core_navigation_get_post_ids( $v_pqztw ) { // obf
	$v_ktwrw = array_map( 'block_core_navigation_from_block_get_post_ids', iterator_to_array( $v_pqztw ) ); // obf
	return array_unique( array_merge( ...$v_ktwrw ) ); // obf
} // obf

/** // obf
 * Get post IDs from a navigation link block instance. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param WP_Block $v_bhhlh Instance of a block. // obf
 * // obf
 * @return array Array of post IDs. // obf
 */ // obf
function block_core_navigation_from_block_get_post_ids( $v_bhhlh ) { // obf
	$v_ktwrw = array(); // obf

	if ( $v_bhhlh->inner_blocks ) { // obf
		$v_ktwrw = block_core_navigation_get_post_ids( $v_bhhlh->inner_blocks ); // obf
	} // obf

	if ( 'core/navigation-link' === $v_bhhlh->name || 'core/navigation-submenu' === $v_bhhlh->name ) { // obf
		if ( $v_bhhlh->attributes && isset( $v_bhhlh->attributes['kind'] ) && 'post-type' === $v_bhhlh->attributes['kind'] && isset( $v_bhhlh->attributes['id'] ) ) { // obf
			$v_ktwrw[] = $v_bhhlh->attributes['id']; // obf
		} // obf
	} // obf

	return $v_ktwrw; // obf
} // obf

/** // obf
 * Renders the `core/navigation` block on server. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array    $v_ejhsp The block attributes. // obf
 * @param string   $v_gznup    The saved content. // obf
 * @param WP_Block $v_bhhlh      The parsed block. // obf
 * // obf
 * @return string Returns the navigation block markup. // obf
 */ // obf
function render_block_core_navigation( $v_ejhsp, $v_gznup, $v_bhhlh ) { // obf
	return WP_Navigation_Block_Renderer::render( $v_ejhsp, $v_gznup, $v_bhhlh ); // obf
} // obf

/** // obf
 * Register the navigation block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @uses render_block_core_navigation() // obf
 * @throws WP_Error An WP_Error exception parsing the block definition. // obf
 */ // obf
function register_block_core_navigation() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/navigation', // obf
		array( // obf
			'render_callback' => 'render_block_core_navigation', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_navigation' ); // obf

/** // obf
 * Filter that changes the parsed attribute values of navigation blocks contain typographic presets to contain the values directly. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_noeyd The block being rendered. // obf
 * // obf
 * @return array The block being rendered without typographic presets. // obf
 */ // obf
function block_core_navigation_typographic_presets_backcompatibility( $v_noeyd ) { // obf
	if ( 'core/navigation' === $v_noeyd['blockName'] ) { // obf
		$v_helqf = array( // obf
			'fontStyle'      => 'var:preset|font-style|', // obf
			'fontWeight'     => 'var:preset|font-weight|', // obf
			'textDecoration' => 'var:preset|text-decoration|', // obf
			'textTransform'  => 'var:preset|text-transform|', // obf
		); // obf
		foreach ( $v_helqf as $v_qewjk => $v_ynjqj ) { // obf
			if ( ! empty( $v_noeyd['attrs']['style']['typography'][ $v_qewjk ] ) ) { // obf
				$v_waekk      = strlen( $v_ynjqj ); // obf
				$v_vyxye = &$v_noeyd['attrs']['style']['typography'][ $v_qewjk ]; // obf
				if ( 0 === strncmp( $v_vyxye, $v_ynjqj, $v_waekk ) ) { // obf
					$v_vyxye = substr( $v_vyxye, $v_waekk ); // obf
				} // obf
				if ( 'textDecoration' === $v_qewjk && 'strikethrough' === $v_vyxye ) { // obf
					$v_vyxye = 'line-through'; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_noeyd; // obf
} // obf

add_filter( 'render_block_data', 'block_core_navigation_typographic_presets_backcompatibility' ); // obf

/** // obf
 * Turns menu item data into a nested array of parsed blocks // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @deprecated 6.3.0 Use WP_Navigation_Fallback::parse_blocks_from_menu_items() instead. // obf
 * // obf
 * @param array $v_remiw               An array of menu items that represent // obf
 *                                        an individual level of a menu. // obf
 * @param array $v_bjsrf  An array keyed by the id of the // obf
 *                                        parent menu where each element is an // obf
 *                                        array of menu items that belong to // obf
 *                                        that parent. // obf
 * @return array An array of parsed block data. // obf
 */ // obf
function block_core_navigation_parse_blocks_from_menu_items( $v_remiw, $v_bjsrf ) { // obf

	_deprecated_function( __FUNCTION__, '6.3.0', 'WP_Navigation_Fallback::parse_blocks_from_menu_items' ); // obf

	if ( empty( $v_remiw ) ) { // obf
		return array(); // obf
	} // obf

	$v_abtht = array(); // obf

	foreach ( $v_remiw as $v_vdcjj ) { // obf
		$v_vzbed       = ! empty( $v_vdcjj->classes ) ? implode( ' ', (array) $v_vdcjj->classes ) : null; // obf
		$v_igfor               = ( null !== $v_vdcjj->object_id && 'custom' !== $v_vdcjj->object ) ? $v_vdcjj->object_id : null; // obf
		$v_eloqs = null !== $v_vdcjj->target && '_blank' === $v_vdcjj->target; // obf
		$v_orsng              = ( null !== $v_vdcjj->xfn && '' !== $v_vdcjj->xfn ) ? $v_vdcjj->xfn : null; // obf
		$v_qshbl             = null !== $v_vdcjj->type ? str_replace( '_', '-', $v_vdcjj->type ) : 'custom'; // obf

		$v_bhhlh = array( // obf
			'blockName' => isset( $v_bjsrf[ $v_vdcjj->ID ] ) ? 'core/navigation-submenu' : 'core/navigation-link', // obf
			'attrs'     => array( // obf
				'className'     => $v_vzbed, // obf
				'description'   => $v_vdcjj->description, // obf
				'id'            => $v_igfor, // obf
				'kind'          => $v_qshbl, // obf
				'label'         => $v_vdcjj->title, // obf
				'opensInNewTab' => $v_eloqs, // obf
				'rel'           => $v_orsng, // obf
				'title'         => $v_vdcjj->attr_title, // obf
				'type'          => $v_vdcjj->object, // obf
				'url'           => $v_vdcjj->url, // obf
			), // obf
		); // obf

		$v_bhhlh['innerBlocks']  = isset( $v_bjsrf[ $v_vdcjj->ID ] ) // obf
			? block_core_navigation_parse_blocks_from_menu_items( $v_bjsrf[ $v_vdcjj->ID ], $v_bjsrf ) // obf
			: array(); // obf
		$v_bhhlh['innerContent'] = array_map( 'serialize_block', $v_bhhlh['innerBlocks'] ); // obf

		$v_abtht[] = $v_bhhlh; // obf
	} // obf

	return $v_abtht; // obf
} // obf

/** // obf
 * Get the classic navigation menu to use as a fallback. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @deprecated 6.3.0 Use WP_Navigation_Fallback::get_classic_menu_fallback() instead. // obf
 * // obf
 * @return object WP_Term The classic navigation. // obf
 */ // obf
function block_core_navigation_get_classic_menu_fallback() { // obf

	_deprecated_function( __FUNCTION__, '6.3.0', 'WP_Navigation_Fallback::get_classic_menu_fallback' ); // obf

	$v_ntlug = wp_get_nav_menus(); // obf

	// If menus exist. // obf
	if ( $v_ntlug && ! is_wp_error( $v_ntlug ) ) { // obf
		// Handles simple use case where user has a classic menu and switches to a block theme. // obf

		// Returns the menu assigned to location `primary`. // obf
		$v_zcgev = get_nav_menu_locations(); // obf
		if ( isset( $v_zcgev['primary'] ) ) { // obf
			$v_mzerv = wp_get_nav_menu_object( $v_zcgev['primary'] ); // obf
			if ( $v_mzerv ) { // obf
				return $v_mzerv; // obf
			} // obf
		} // obf

		// Returns a menu if `primary` is its slug. // obf
		foreach ( $v_ntlug as $v_qasbc ) { // obf
			if ( 'primary' === $v_qasbc->slug ) { // obf
				return $v_qasbc; // obf
			} // obf
		} // obf

		// Otherwise return the most recently created classic menu. // obf
		usort( // obf
			$v_ntlug, // obf
			static function ( $v_hcfml, $v_gdgcd ) { // obf
				return $v_gdgcd->term_id - $v_hcfml->term_id; // obf
			} // obf
		); // obf
		return $v_ntlug[0]; // obf
	} // obf
} // obf

/** // obf
 * Converts a classic navigation to blocks. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @deprecated 6.3.0 Use WP_Navigation_Fallback::get_classic_menu_fallback_blocks() instead. // obf
 * // obf
 * @param  object $v_qasbc WP_Term The classic navigation object to convert. // obf
 * @return array the normalized parsed blocks. // obf
 */ // obf
function block_core_navigation_get_classic_menu_fallback_blocks( $v_qasbc ) { // obf

	_deprecated_function( __FUNCTION__, '6.3.0', 'WP_Navigation_Fallback::get_classic_menu_fallback_blocks' ); // obf

	// BEGIN: Code that already exists in wp_nav_menu(). // obf
	$v_remiw = wp_get_nav_menu_items( $v_qasbc->term_id, array( 'update_post_term_cache' => false ) ); // obf

	// Set up the $v_vdcjj variables. // obf
	_wp_menu_item_classes_by_context( $v_remiw ); // obf

	$v_zyvvj = array(); // obf
	foreach ( (array) $v_remiw as $v_vdcjj ) { // obf
		$v_zyvvj[ $v_vdcjj->menu_order ] = $v_vdcjj; // obf
	} // obf

	unset( $v_remiw, $v_vdcjj ); // obf

	// END: Code that already exists in wp_nav_menu(). // obf

	$v_bjsrf = array(); // obf
	foreach ( $v_zyvvj as $v_vdcjj ) { // obf
		$v_bjsrf[ $v_vdcjj->menu_item_parent ][] = $v_vdcjj; // obf
	} // obf

	$v_pqztw = block_core_navigation_parse_blocks_from_menu_items( // obf
		isset( $v_bjsrf[0] ) // obf
			? $v_bjsrf[0] // obf
			: array(), // obf
		$v_bjsrf // obf
	); // obf

	return serialize_blocks( $v_pqztw ); // obf
} // obf

/** // obf
 * If there's a classic menu then use it as a fallback. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @deprecated 6.3.0 Use WP_Navigation_Fallback::create_classic_menu_fallback() instead. // obf
 * // obf
 * @return array the normalized parsed blocks. // obf
 */ // obf
function block_core_navigation_maybe_use_classic_menu_fallback() { // obf

	_deprecated_function( __FUNCTION__, '6.3.0', 'WP_Navigation_Fallback::create_classic_menu_fallback' ); // obf

	// See if we have a classic menu. // obf
	$v_qasbc = block_core_navigation_get_classic_menu_fallback(); // obf

	if ( ! $v_qasbc ) { // obf
		return; // obf
	} // obf

	// If we have a classic menu then convert it to blocks. // obf
	$v_rtdzp = block_core_navigation_get_classic_menu_fallback_blocks( $v_qasbc ); // obf

	if ( empty( $v_rtdzp ) ) { // obf
		return; // obf
	} // obf

	// Create a new navigation menu from the classic menu. // obf
	$v_qobaq = wp_insert_post( // obf
		array( // obf
			'post_content' => $v_rtdzp, // obf
			'post_title'   => $v_qasbc->name, // obf
			'post_name'    => $v_qasbc->slug, // obf
			'post_status'  => 'publish', // obf
			'post_type'    => 'wp_navigation', // obf
		), // obf
		true // So that we can check whether the result is an error. // obf
	); // obf

	if ( is_wp_error( $v_qobaq ) ) { // obf
		return; // obf
	} // obf

	// Fetch the most recently published navigation which will be the classic one created above. // obf
	return block_core_navigation_get_most_recently_published_navigation(); // obf
} // obf

/** // obf
 * Finds the most recently published `wp_navigation` Post. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @deprecated 6.3.0 Use WP_Navigation_Fallback::get_most_recently_published_navigation() instead. // obf
 * // obf
 * @return WP_Post|null the first non-empty Navigation or null. // obf
 */ // obf
function block_core_navigation_get_most_recently_published_navigation() { // obf

	_deprecated_function( __FUNCTION__, '6.3.0', 'WP_Navigation_Fallback::get_most_recently_published_navigation' ); // obf

	// Default to the most recently created menu. // obf
	$v_eenal = array( // obf
		'post_type'              => 'wp_navigation', // obf
		'no_found_rows'          => true, // obf
		'update_post_meta_cache' => false, // obf
		'update_post_term_cache' => false, // obf
		'order'                  => 'DESC', // obf
		'orderby'                => 'date', // obf
		'post_status'            => 'publish', // obf
		'posts_per_page'         => 1, // get only the most recent. // obf
	); // obf

	$v_eotji = new WP_Query( $v_eenal ); // obf
	if ( count( $v_eotji->posts ) > 0 ) { // obf
		return $v_eotji->posts[0]; // obf
	} // obf

	return null; // obf
} // obf