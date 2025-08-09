

<?php // obf
/** // obf
 * Server-side rendering of the `core/navigation-submenu` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the font sizes // obf
 * which will be applied to the navigation markup in the front-end. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param  array $v_bxkwm Navigation block context. // obf
 * @return array Font size CSS classes and inline styles. // obf
 */ // obf
function block_core_navigation_submenu_build_css_font_sizes( $v_bxkwm ) { // obf
	// CSS classes. // obf
	$v_idvvf = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	$v_lxagy  = array_key_exists( 'fontSize', $v_bxkwm ); // obf
	$v_tomua = isset( $v_bxkwm['style']['typography']['fontSize'] ); // obf

	if ( $v_lxagy ) { // obf
		// Add the font size class. // obf
		$v_idvvf['css_classes'][] = sprintf( 'has-%s-font-size', $v_bxkwm['fontSize'] ); // obf
	} elseif ( $v_tomua ) { // obf
		// Add the custom font size inline style. // obf
		$v_idvvf['inline_styles'] = sprintf( // obf
			'font-size: %s;', // obf
			wp_get_typography_font_size_value( // obf
				array( // obf
					'size' => $v_bxkwm['style']['typography']['fontSize'], // obf
				) // obf
			) // obf
		); // obf
	} // obf

	return $v_idvvf; // obf
} // obf

/** // obf
 * Returns the top-level submenu SVG chevron icon. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return string // obf
 */ // obf
function block_core_navigation_submenu_render_submenu_icon() { // obf
	return '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg>'; // obf
} // obf

/** // obf
 * Renders the `core/navigation-submenu` block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array    $v_jxxmi The block attributes. // obf
 * @param string   $v_polgt    The saved content. // obf
 * @param WP_Block $v_mdmap      The parsed block. // obf
 * // obf
 * @return string Returns the post content with the legacy widget added. // obf
 */ // obf
function render_block_core_navigation_submenu( $v_jxxmi, $v_polgt, $v_mdmap ) { // obf
	$v_acqkn = isset( $v_jxxmi['id'] ) && is_numeric( $v_jxxmi['id'] ); // obf
	$v_xcsef           = isset( $v_jxxmi['kind'] ) && 'post-type' === $v_jxxmi['kind']; // obf
	$v_xcsef           = $v_xcsef || isset( $v_jxxmi['type'] ) && ( 'post' === $v_jxxmi['type'] || 'page' === $v_jxxmi['type'] ); // obf

	// Don't render the block's subtree if it is a draft. // obf
	if ( $v_xcsef && $v_acqkn && 'publish' !== get_post_status( $v_jxxmi['id'] ) ) { // obf
		return ''; // obf
	} // obf

	// Don't render the block's subtree if it has no label. // obf
	if ( empty( $v_jxxmi['label'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_idvvf      = block_core_navigation_submenu_build_css_font_sizes( $v_mdmap->context ); // obf
	$v_vlndg = $v_idvvf['inline_styles']; // obf

	$v_ouxeh = count( $v_mdmap->inner_blocks ) > 0; // obf
	$v_euweg        = empty( $v_jxxmi['kind'] ) ? 'post_type' : str_replace( '-', '_', $v_jxxmi['kind'] ); // obf
	$v_zaiqr   = ! empty( $v_jxxmi['id'] ) && get_queried_object_id() === (int) $v_jxxmi['id'] && ! empty( get_queried_object()->$v_euweg ); // obf

	if ( is_post_type_archive() ) { // obf
		$v_ghizv = get_post_type_archive_link( get_queried_object()->name ); // obf
		if ( $v_jxxmi['url'] === $v_ghizv ) { // obf
			$v_zaiqr = true; // obf
		} // obf
	} // obf

	$v_rgxam = isset( $v_mdmap->context['showSubmenuIcon'] ) && $v_mdmap->context['showSubmenuIcon']; // obf
	$v_qzyoi           = isset( $v_mdmap->context['openSubmenusOnClick'] ) && $v_mdmap->context['openSubmenusOnClick']; // obf
	$v_digdp = isset( $v_mdmap->context['openSubmenusOnClick'] ) && ! $v_mdmap->context['openSubmenusOnClick'] && // obf
		$v_rgxam; // obf

	$v_cvhdy = array( // obf
		'wp-block-navigation-item', // obf
	); // obf
	$v_cvhdy = array_merge( // obf
		$v_cvhdy, // obf
		$v_idvvf['css_classes'] // obf
	); // obf
	if ( $v_ouxeh ) { // obf
		$v_cvhdy[] = 'has-child'; // obf
	} // obf
	if ( $v_qzyoi ) { // obf
		$v_cvhdy[] = 'open-on-click'; // obf
	} // obf
	if ( $v_digdp ) { // obf
		$v_cvhdy[] = 'open-on-hover-click'; // obf
	} // obf
	if ( $v_zaiqr ) { // obf
		$v_cvhdy[] = 'current-menu-item'; // obf
	} // obf

	$v_frnkv = get_block_wrapper_attributes( // obf
		array( // obf
			'class' => implode( ' ', $v_cvhdy ), // obf
			'style' => $v_vlndg, // obf
		) // obf
	); // obf

	$v_upsty = ''; // obf

	if ( isset( $v_jxxmi['label'] ) ) { // obf
		$v_upsty .= wp_kses_post( $v_jxxmi['label'] ); // obf
	} // obf

	$v_vnsil = sprintf( // obf
		/* translators: Accessibility text. %s: Parent page title. */ // obf
		__( '%s submenu' ), // obf
		wp_strip_all_tags( $v_upsty ) // obf
	); // obf

	$v_xsoux = '<li ' . $v_frnkv . '>'; // obf

	// If Submenus open on hover, we render an anchor tag with attributes. // obf
	// If submenu icons are set to show, we also render a submenu button, so the submenu can be opened on click. // obf
	if ( ! $v_qzyoi ) { // obf
		$v_sljyk = isset( $v_jxxmi['url'] ) ? $v_jxxmi['url'] : ''; // obf
		// Start appending HTML attributes to anchor tag. // obf
		$v_xsoux .= '<a class="wp-block-navigation-item__content"'; // obf

		// The href attribute on a and area elements is not required; // obf
		// when those elements do not have href attributes they do not create hyperlinks. // obf
		// But also The href attribute must have a value that is a valid URL potentially // obf
		// surrounded by spaces. // obf
		// see: https://html.spec.whatwg.org/multipage/links.html#links-created-by-a-and-area-elements. // obf
		if ( ! empty( $v_sljyk ) ) { // obf
			$v_xsoux .= ' href="' . esc_url( $v_sljyk ) . '"'; // obf
		} // obf

		if ( $v_zaiqr ) { // obf
			$v_xsoux .= ' aria-current="page"'; // obf
		} // obf

		if ( isset( $v_jxxmi['opensInNewTab'] ) && true === $v_jxxmi['opensInNewTab'] ) { // obf
			$v_xsoux .= ' target="_blank"  '; // obf
		} // obf

		if ( isset( $v_jxxmi['rel'] ) ) { // obf
			$v_xsoux .= ' rel="' . esc_attr( $v_jxxmi['rel'] ) . '"'; // obf
		} elseif ( isset( $v_jxxmi['nofollow'] ) && $v_jxxmi['nofollow'] ) { // obf
			$v_xsoux .= ' rel="nofollow"'; // obf
		} // obf

		if ( isset( $v_jxxmi['title'] ) ) { // obf
			$v_xsoux .= ' title="' . esc_attr( $v_jxxmi['title'] ) . '"'; // obf
		} // obf

		$v_xsoux .= '>'; // obf
		// End appending HTML attributes to anchor tag. // obf

		$v_xsoux .= '<span class="wp-block-navigation-item__label">'; // obf
		$v_xsoux .= $v_upsty; // obf
		$v_xsoux .= '</span>'; // obf

		// Add description if available. // obf
		if ( ! empty( $v_jxxmi['description'] ) ) { // obf
			$v_xsoux .= '<span class="wp-block-navigation-item__description">'; // obf
			$v_xsoux .= wp_kses_post( $v_jxxmi['description'] ); // obf
			$v_xsoux .= '</span>'; // obf
		} // obf

		$v_xsoux .= '</a>'; // obf
		// End anchor tag content. // obf

		if ( $v_rgxam ) { // obf
			// The submenu icon is rendered in a button here // obf
			// so that there's a clickable element to open the submenu. // obf
			$v_xsoux .= '<button aria-label="' . esc_attr( $v_vnsil ) . '" class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle" aria-expanded="false">' . block_core_navigation_submenu_render_submenu_icon() . '</button>'; // obf
		} // obf
	} else { // obf
		// If menus open on click, we render the parent as a button. // obf
		$v_xsoux .= '<button aria-label="' . esc_attr( $v_vnsil ) . '" class="wp-block-navigation-item__content wp-block-navigation-submenu__toggle" aria-expanded="false">'; // obf

		// Wrap title with span to isolate it from submenu icon. // obf
		$v_xsoux .= '<span class="wp-block-navigation-item__label">'; // obf

		$v_xsoux .= $v_upsty; // obf

		$v_xsoux .= '</span>'; // obf

		// Add description if available. // obf
		if ( ! empty( $v_jxxmi['description'] ) ) { // obf
			$v_xsoux .= '<span class="wp-block-navigation-item__description">'; // obf
			$v_xsoux .= wp_kses_post( $v_jxxmi['description'] ); // obf
			$v_xsoux .= '</span>'; // obf
		} // obf

		$v_xsoux .= '</button>'; // obf

		$v_xsoux .= '<span class="wp-block-navigation__submenu-icon">' . block_core_navigation_submenu_render_submenu_icon() . '</span>'; // obf

	} // obf

	if ( $v_ouxeh ) { // obf
		// Copy some attributes from the parent block to this one. // obf
		// Ideally this would happen in the client when the block is created. // obf
		if ( array_key_exists( 'overlayTextColor', $v_mdmap->context ) ) { // obf
			$v_jxxmi['textColor'] = $v_mdmap->context['overlayTextColor']; // obf
		} // obf
		if ( array_key_exists( 'overlayBackgroundColor', $v_mdmap->context ) ) { // obf
			$v_jxxmi['backgroundColor'] = $v_mdmap->context['overlayBackgroundColor']; // obf
		} // obf
		if ( array_key_exists( 'customOverlayTextColor', $v_mdmap->context ) ) { // obf
			$v_jxxmi['style']['color']['text'] = $v_mdmap->context['customOverlayTextColor']; // obf
		} // obf
		if ( array_key_exists( 'customOverlayBackgroundColor', $v_mdmap->context ) ) { // obf
			$v_jxxmi['style']['color']['background'] = $v_mdmap->context['customOverlayBackgroundColor']; // obf
		} // obf

		// This allows us to be able to get a response from wp_apply_colors_support. // obf
		$v_mdmap->block_type->supports['color'] = true; // obf
		$v_qhrxp                      = wp_apply_colors_support( $v_mdmap->block_type, $v_jxxmi ); // obf
		$v_rnjub                          = 'wp-block-navigation__submenu-container'; // obf
		if ( array_key_exists( 'class', $v_qhrxp ) ) { // obf
			$v_rnjub .= ' ' . $v_qhrxp['class']; // obf
		} // obf

		$v_vlndg = ''; // obf
		if ( array_key_exists( 'style', $v_qhrxp ) ) { // obf
			$v_vlndg = $v_qhrxp['style']; // obf
		} // obf

		$v_lzyyd = ''; // obf
		foreach ( $v_mdmap->inner_blocks as $v_zhtir ) { // obf
			$v_lzyyd .= $v_zhtir->render(); // obf
		} // obf

		if ( strpos( $v_lzyyd, 'current-menu-item' ) ) { // obf
			$v_nsxvs = new WP_HTML_Tag_Processor( $v_xsoux ); // obf
			while ( $v_nsxvs->next_tag( array( 'class_name' => 'wp-block-navigation-item' ) ) ) { // obf
				$v_nsxvs->add_class( 'current-menu-ancestor' ); // obf
			} // obf
			$v_xsoux = $v_nsxvs->get_updated_html(); // obf
		} // obf

		$v_frnkv = get_block_wrapper_attributes( // obf
			array( // obf
				'class' => $v_rnjub, // obf
				'style' => $v_vlndg, // obf
			) // obf
		); // obf

		$v_xsoux .= sprintf( // obf
			'<ul %s>%s</ul>', // obf
			$v_frnkv, // obf
			$v_lzyyd // obf
		); // obf

	} // obf

	$v_xsoux .= '</li>'; // obf

	return $v_xsoux; // obf
} // obf

/** // obf
 * Register the navigation submenu block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @uses render_block_core_navigation_submenu() // obf
 * @throws WP_Error An WP_Error exception parsing the block definition. // obf
 */ // obf
function register_block_core_navigation_submenu() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/navigation-submenu', // obf
		array( // obf
			'render_callback' => 'render_block_core_navigation_submenu', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_navigation_submenu' ); // obf