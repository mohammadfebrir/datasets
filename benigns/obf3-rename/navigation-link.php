

<?php // obf
/** // obf
 * Server-side registering and rendering of the `core/navigation-link` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the colors // obf
 * which will be applied to the navigation markup in the front-end. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param  array $v_btkjy     Navigation block context. // obf
 * @param  array $v_nqqmg  Block attributes. // obf
 * @param  bool  $v_qxrvr Whether the link is part of a sub-menu. // obf
 * @return array Colors CSS classes and inline styles. // obf
 */ // obf
function block_core_navigation_link_build_css_colors( $v_btkjy, $v_nqqmg, $v_qxrvr = false ) { // obf
	$v_majsn = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	// Text color. // obf
	$v_yyify  = null; // obf
	$v_xpbsn = null; // obf

	if ( $v_qxrvr && array_key_exists( 'customOverlayTextColor', $v_btkjy ) ) { // obf
		$v_xpbsn = $v_btkjy['customOverlayTextColor']; // obf
	} elseif ( $v_qxrvr && array_key_exists( 'overlayTextColor', $v_btkjy ) ) { // obf
		$v_yyify = $v_btkjy['overlayTextColor']; // obf
	} elseif ( array_key_exists( 'customTextColor', $v_btkjy ) ) { // obf
		$v_xpbsn = $v_btkjy['customTextColor']; // obf
	} elseif ( array_key_exists( 'textColor', $v_btkjy ) ) { // obf
		$v_yyify = $v_btkjy['textColor']; // obf
	} elseif ( isset( $v_btkjy['style']['color']['text'] ) ) { // obf
		$v_xpbsn = $v_btkjy['style']['color']['text']; // obf
	} // obf

	// If has text color. // obf
	if ( ! is_null( $v_yyify ) ) { // obf
		// Add the color class. // obf
		array_push( $v_majsn['css_classes'], 'has-text-color', sprintf( 'has-%s-color', $v_yyify ) ); // obf
	} elseif ( ! is_null( $v_xpbsn ) ) { // obf
		// Add the custom color inline style. // obf
		$v_majsn['css_classes'][]  = 'has-text-color'; // obf
		$v_majsn['inline_styles'] .= sprintf( 'color: %s;', $v_xpbsn ); // obf
	} // obf

	// Background color. // obf
	$v_pwhpf  = null; // obf
	$v_uqzjk = null; // obf

	if ( $v_qxrvr && array_key_exists( 'customOverlayBackgroundColor', $v_btkjy ) ) { // obf
		$v_uqzjk = $v_btkjy['customOverlayBackgroundColor']; // obf
	} elseif ( $v_qxrvr && array_key_exists( 'overlayBackgroundColor', $v_btkjy ) ) { // obf
		$v_pwhpf = $v_btkjy['overlayBackgroundColor']; // obf
	} elseif ( array_key_exists( 'customBackgroundColor', $v_btkjy ) ) { // obf
		$v_uqzjk = $v_btkjy['customBackgroundColor']; // obf
	} elseif ( array_key_exists( 'backgroundColor', $v_btkjy ) ) { // obf
		$v_pwhpf = $v_btkjy['backgroundColor']; // obf
	} elseif ( isset( $v_btkjy['style']['color']['background'] ) ) { // obf
		$v_uqzjk = $v_btkjy['style']['color']['background']; // obf
	} // obf

	// If has background color. // obf
	if ( ! is_null( $v_pwhpf ) ) { // obf
		// Add the background-color class. // obf
		array_push( $v_majsn['css_classes'], 'has-background', sprintf( 'has-%s-background-color', $v_pwhpf ) ); // obf
	} elseif ( ! is_null( $v_uqzjk ) ) { // obf
		// Add the custom background-color inline style. // obf
		$v_majsn['css_classes'][]  = 'has-background'; // obf
		$v_majsn['inline_styles'] .= sprintf( 'background-color: %s;', $v_uqzjk ); // obf
	} // obf

	return $v_majsn; // obf
} // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the font sizes // obf
 * which will be applied to the navigation markup in the front-end. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param  array $v_btkjy Navigation block context. // obf
 * @return array Font size CSS classes and inline styles. // obf
 */ // obf
function block_core_navigation_link_build_css_font_sizes( $v_btkjy ) { // obf
	// CSS classes. // obf
	$v_jyntx = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	$v_oqxjt  = array_key_exists( 'fontSize', $v_btkjy ); // obf
	$v_iwuws = isset( $v_btkjy['style']['typography']['fontSize'] ); // obf

	if ( $v_oqxjt ) { // obf
		// Add the font size class. // obf
		$v_jyntx['css_classes'][] = sprintf( 'has-%s-font-size', $v_btkjy['fontSize'] ); // obf
	} elseif ( $v_iwuws ) { // obf
		// Add the custom font size inline style. // obf
		$v_jyntx['inline_styles'] = sprintf( // obf
			'font-size: %s;', // obf
			wp_get_typography_font_size_value( // obf
				array( // obf
					'size' => $v_btkjy['style']['typography']['fontSize'], // obf
				) // obf
			) // obf
		); // obf
	} // obf

	return $v_jyntx; // obf
} // obf

/** // obf
 * Returns the top-level submenu SVG chevron icon. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return string // obf
 */ // obf
function block_core_navigation_link_render_submenu_icon() { // obf
	return '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg>'; // obf
} // obf

/** // obf
 * Decodes a url if it's encoded, returning the same url if not. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param string $v_sjgkn The url to decode. // obf
 * // obf
 * @return string $v_sjgkn Returns the decoded url. // obf
 */ // obf
function block_core_navigation_link_maybe_urldecode( $v_sjgkn ) { // obf
	$v_kahfc = false; // obf
	$v_bgmsf          = parse_url( $v_sjgkn, PHP_URL_QUERY ); // obf
	$v_yamwo   = wp_parse_args( $v_bgmsf ); // obf

	foreach ( $v_yamwo as $v_hpxfu ) { // obf
		$v_lvscn = is_string( $v_hpxfu ) && ! empty( $v_hpxfu ); // obf
		if ( ! $v_lvscn ) { // obf
			continue; // obf
		} // obf
		if ( rawurldecode( $v_hpxfu ) !== $v_hpxfu ) { // obf
			$v_kahfc = true; // obf
			break; // obf
		} // obf
	} // obf

	if ( $v_kahfc ) { // obf
		return rawurldecode( $v_sjgkn ); // obf
	} // obf

	return $v_sjgkn; // obf
} // obf


/** // obf
 * Renders the `core/navigation-link` block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array    $v_nqqmg The block attributes. // obf
 * @param string   $v_hnqqk    The saved content. // obf
 * @param WP_Block $v_gflbq      The parsed block. // obf
 * // obf
 * @return string Returns the post content with the legacy widget added. // obf
 */ // obf
function render_block_core_navigation_link( $v_nqqmg, $v_hnqqk, $v_gflbq ) { // obf
	$v_mwtwx = isset( $v_nqqmg['id'] ) && is_numeric( $v_nqqmg['id'] ); // obf
	$v_hjqay           = isset( $v_nqqmg['kind'] ) && 'post-type' === $v_nqqmg['kind']; // obf
	$v_hjqay           = $v_hjqay || isset( $v_nqqmg['type'] ) && ( 'post' === $v_nqqmg['type'] || 'page' === $v_nqqmg['type'] ); // obf

	// Don't render the block's subtree if it is a draft or if the ID does not exist. // obf
	if ( $v_hjqay && $v_mwtwx ) { // obf
		$v_qickd = get_post( $v_nqqmg['id'] ); // obf
		/** // obf
		 * Filter allowed post_status for navigation link block to render. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param array $v_bhygs // obf
		 * @param array $v_nqqmg // obf
		 * @param WP_Block $v_gflbq // obf
		 */ // obf
		$v_vzqto = (array) apply_filters( // obf
			'render_block_core_navigation_link_allowed_post_status', // obf
			array( 'publish' ), // obf
			$v_nqqmg, // obf
			$v_gflbq // obf
		); // obf
		if ( ! $v_qickd || ! in_array( $v_qickd->post_status, $v_vzqto, true ) ) { // obf
			return ''; // obf
		} // obf
	} // obf

	// Don't render the block's subtree if it has no label. // obf
	if ( empty( $v_nqqmg['label'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_jyntx      = block_core_navigation_link_build_css_font_sizes( $v_gflbq->context ); // obf
	$v_komdv         = array_merge( // obf
		$v_jyntx['css_classes'] // obf
	); // obf
	$v_dpyyu = $v_jyntx['inline_styles']; // obf

	$v_hngla = trim( implode( ' ', $v_komdv ) ); // obf
	$v_gprry = count( $v_gflbq->inner_blocks ) > 0; // obf
	$v_kzgfs        = empty( $v_nqqmg['kind'] ) ? 'post_type' : str_replace( '-', '_', $v_nqqmg['kind'] ); // obf
	$v_qgjvu   = ! empty( $v_nqqmg['id'] ) && get_queried_object_id() === (int) $v_nqqmg['id'] && ! empty( get_queried_object()->$v_kzgfs ); // obf

	if ( is_post_type_archive() ) { // obf
		$v_wrjul = get_post_type_archive_link( get_queried_object()->name ); // obf
		if ( $v_nqqmg['url'] === $v_wrjul ) { // obf
			$v_qgjvu = true; // obf
		} // obf
	} // obf

	$v_oputp = get_block_wrapper_attributes( // obf
		array( // obf
			'class' => $v_hngla . ' wp-block-navigation-item' . ( $v_gprry ? ' has-child' : '' ) . // obf
				( $v_qgjvu ? ' current-menu-item' : '' ), // obf
			'style' => $v_dpyyu, // obf
		) // obf
	); // obf
	$v_dwzxk               = '<li ' . $v_oputp . '>' . // obf
		'<a class="wp-block-navigation-item__content" '; // obf

	// Start appending HTML attributes to anchor tag. // obf
	if ( isset( $v_nqqmg['url'] ) ) { // obf
		$v_dwzxk .= ' href="' . esc_url( block_core_navigation_link_maybe_urldecode( $v_nqqmg['url'] ) ) . '"'; // obf
	} // obf

	if ( $v_qgjvu ) { // obf
		$v_dwzxk .= ' aria-current="page"'; // obf
	} // obf

	if ( isset( $v_nqqmg['opensInNewTab'] ) && true === $v_nqqmg['opensInNewTab'] ) { // obf
		$v_dwzxk .= ' target="_blank"  '; // obf
	} // obf

	if ( isset( $v_nqqmg['rel'] ) ) { // obf
		$v_dwzxk .= ' rel="' . esc_attr( $v_nqqmg['rel'] ) . '"'; // obf
	} elseif ( isset( $v_nqqmg['nofollow'] ) && $v_nqqmg['nofollow'] ) { // obf
		$v_dwzxk .= ' rel="nofollow"'; // obf
	} // obf

	if ( isset( $v_nqqmg['title'] ) ) { // obf
		$v_dwzxk .= ' title="' . esc_attr( $v_nqqmg['title'] ) . '"'; // obf
	} // obf

	// End appending HTML attributes to anchor tag. // obf

	// Start anchor tag content. // obf
	$v_dwzxk .= '>' . // obf
		// Wrap title with span to isolate it from submenu icon. // obf
		'<span class="wp-block-navigation-item__label">'; // obf

	if ( isset( $v_nqqmg['label'] ) ) { // obf
		$v_dwzxk .= wp_kses_post( $v_nqqmg['label'] ); // obf
	} // obf

	$v_dwzxk .= '</span>'; // obf

	// Add description if available. // obf
	if ( ! empty( $v_nqqmg['description'] ) ) { // obf
		$v_dwzxk .= '<span class="wp-block-navigation-item__description">'; // obf
		$v_dwzxk .= wp_kses_post( $v_nqqmg['description'] ); // obf
		$v_dwzxk .= '</span>'; // obf
	} // obf

	$v_dwzxk .= '</a>'; // obf
	// End anchor tag content. // obf

	if ( isset( $v_gflbq->context['showSubmenuIcon'] ) && $v_gflbq->context['showSubmenuIcon'] && $v_gprry ) { // obf
		// The submenu icon can be hidden by a CSS rule on the Navigation Block. // obf
		$v_dwzxk .= '<span class="wp-block-navigation__submenu-icon">' . block_core_navigation_link_render_submenu_icon() . '</span>'; // obf
	} // obf

	if ( $v_gprry ) { // obf
		$v_kstre = ''; // obf
		foreach ( $v_gflbq->inner_blocks as $v_cfmnd ) { // obf
			$v_kstre .= $v_cfmnd->render(); // obf
		} // obf

		$v_dwzxk .= sprintf( // obf
			'<ul class="wp-block-navigation__submenu-container">%s</ul>', // obf
			$v_kstre // obf
		); // obf
	} // obf

	$v_dwzxk .= '</li>'; // obf

	return $v_dwzxk; // obf
} // obf

/** // obf
 * Returns a navigation link variation // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param WP_Taxonomy|WP_Post_Type $v_waqos post type or taxonomy entity. // obf
 * @param string                   $v_kzgfs string of value 'taxonomy' or 'post-type'. // obf
 * // obf
 * @return array // obf
 */ // obf
function build_variation_for_navigation_link( $v_waqos, $v_kzgfs ) { // obf
	$v_crzsm       = ''; // obf
	$v_ntwrx = ''; // obf

	if ( property_exists( $v_waqos->labels, 'item_link' ) ) { // obf
		$v_crzsm = $v_waqos->labels->item_link; // obf
	} // obf
	if ( property_exists( $v_waqos->labels, 'item_link_description' ) ) { // obf
		$v_ntwrx = $v_waqos->labels->item_link_description; // obf
	} // obf

	$v_imyqv = array( // obf
		'name'        => $v_waqos->name, // obf
		'title'       => $v_crzsm, // obf
		'description' => $v_ntwrx, // obf
		'attributes'  => array( // obf
			'type' => $v_waqos->name, // obf
			'kind' => $v_kzgfs, // obf
		), // obf
	); // obf

	// Tweak some value for the variations. // obf
	$v_phmxh = array( // obf
		'post_tag'    => array( // obf
			'name'       => 'tag', // obf
			'attributes' => array( // obf
				'type' => 'tag', // obf
				'kind' => $v_kzgfs, // obf
			), // obf
		), // obf
		'post_format' => array( // obf
			// The item_link and item_link_description for post formats is the // obf
			// same as for tags, so need to be overridden. // obf
			'title'       => __( 'Post Format Link' ), // obf
			'description' => __( 'A link to a post format' ), // obf
			'attributes'  => array( // obf
				'type' => 'post_format', // obf
				'kind' => $v_kzgfs, // obf
			), // obf
		), // obf
	); // obf

	if ( array_key_exists( $v_waqos->name, $v_phmxh ) ) { // obf
		$v_imyqv = array_merge( // obf
			$v_imyqv, // obf
			$v_phmxh[ $v_waqos->name ] // obf
		); // obf
	} // obf

	return $v_imyqv; // obf
} // obf

/** // obf
 * Filters the registered variations for a block type. // obf
 * Returns the dynamically built variations for all post-types and taxonomies. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param array         $v_icvdp Array of registered variations for a block type. // obf
 * @param WP_Block_Type $v_yixjn The full block type object. // obf
 */ // obf
function block_core_navigation_link_filter_variations( $v_icvdp, $v_yixjn ) { // obf
	if ( 'core/navigation-link' !== $v_yixjn->name ) { // obf
		return $v_icvdp; // obf
	} // obf

	$v_wsmnx = block_core_navigation_link_build_variations(); // obf
	return array_merge( $v_icvdp, $v_wsmnx ); // obf
} // obf

/** // obf
 * Returns an array of variations for the navigation link block. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @return array // obf
 */ // obf
function block_core_navigation_link_build_variations() { // obf
	$v_nhpfu = get_post_types( array( 'show_in_nav_menus' => true ), 'objects' ); // obf
	$v_lmkvc = get_taxonomies( array( 'show_in_nav_menus' => true ), 'objects' ); // obf

	/* // obf
	 * Use two separate arrays as a way to order the variations in the UI. // obf
	 * Known variations (like Post Link and Page Link) are added to the // obf
	 * `built_ins` array. Variations for custom post types and taxonomies are // obf
	 * added to the `variations` array and will always appear after `built-ins. // obf
	 */ // obf
	$v_xakjj  = array(); // obf
	$v_icvdp = array(); // obf

	if ( $v_nhpfu ) { // obf
		foreach ( $v_nhpfu as $v_ijkpx ) { // obf
			$v_imyqv = build_variation_for_navigation_link( $v_ijkpx, 'post-type' ); // obf
			if ( $v_ijkpx->_builtin ) { // obf
				$v_xakjj[] = $v_imyqv; // obf
			} else { // obf
				$v_icvdp[] = $v_imyqv; // obf
			} // obf
		} // obf
	} // obf
	if ( $v_lmkvc ) { // obf
		foreach ( $v_lmkvc as $v_pgbjl ) { // obf
			$v_imyqv = build_variation_for_navigation_link( $v_pgbjl, 'taxonomy' ); // obf
			if ( $v_pgbjl->_builtin ) { // obf
				$v_xakjj[] = $v_imyqv; // obf
			} else { // obf
				$v_icvdp[] = $v_imyqv; // obf
			} // obf
		} // obf
	} // obf

	return array_merge( $v_xakjj, $v_icvdp ); // obf
} // obf

/** // obf
 * Registers the navigation link block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @uses render_block_core_navigation_link() // obf
 * @throws WP_Error An WP_Error exception parsing the block definition. // obf
 */ // obf
function register_block_core_navigation_link() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/navigation-link', // obf
		array( // obf
			'render_callback' => 'render_block_core_navigation_link', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_navigation_link' ); // obf
/** // obf
 * Creates all variations for post types / taxonomies dynamically (= each time when variations are requested). // obf
 * Do not use variation_callback, to also account for unregistering post types/taxonomies later on. // obf
 */ // obf
add_action( 'get_block_type_variations', 'block_core_navigation_link_filter_variations', 10, 2 ); // obf