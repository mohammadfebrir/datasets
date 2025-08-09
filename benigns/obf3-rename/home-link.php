

<?php // obf
/** // obf
 * Server-side rendering of the `core/home-link` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the colors // obf
 * which will be applied to the home link markup in the front-end. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param  array $v_hrqgm home link block context. // obf
 * @return array Colors CSS classes and inline styles. // obf
 */ // obf
function block_core_home_link_build_css_colors( $v_hrqgm ) { // obf
	$v_aojhs = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	// Text color. // obf
	$v_yvcgr  = array_key_exists( 'textColor', $v_hrqgm ); // obf
	$v_dqcsn = isset( $v_hrqgm['style']['color']['text'] ); // obf

	// If has text color. // obf
	if ( $v_dqcsn || $v_yvcgr ) { // obf
		// Add has-text-color class. // obf
		$v_aojhs['css_classes'][] = 'has-text-color'; // obf
	} // obf

	if ( $v_yvcgr ) { // obf
		// Add the color class. // obf
		$v_aojhs['css_classes'][] = sprintf( 'has-%s-color', $v_hrqgm['textColor'] ); // obf
	} elseif ( $v_dqcsn ) { // obf
		// Add the custom color inline style. // obf
		$v_aojhs['inline_styles'] .= sprintf( 'color: %s;', $v_hrqgm['style']['color']['text'] ); // obf
	} // obf

	// Background color. // obf
	$v_qzgmp  = array_key_exists( 'backgroundColor', $v_hrqgm ); // obf
	$v_trffe = isset( $v_hrqgm['style']['color']['background'] ); // obf

	// If has background color. // obf
	if ( $v_trffe || $v_qzgmp ) { // obf
		// Add has-background class. // obf
		$v_aojhs['css_classes'][] = 'has-background'; // obf
	} // obf

	if ( $v_qzgmp ) { // obf
		// Add the background-color class. // obf
		$v_aojhs['css_classes'][] = sprintf( 'has-%s-background-color', $v_hrqgm['backgroundColor'] ); // obf
	} elseif ( $v_trffe ) { // obf
		// Add the custom background-color inline style. // obf
		$v_aojhs['inline_styles'] .= sprintf( 'background-color: %s;', $v_hrqgm['style']['color']['background'] ); // obf
	} // obf

	return $v_aojhs; // obf
} // obf

/** // obf
 * Build an array with CSS classes and inline styles defining the font sizes // obf
 * which will be applied to the home link markup in the front-end. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param  array $v_hrqgm Home link block context. // obf
 * @return array Font size CSS classes and inline styles. // obf
 */ // obf
function block_core_home_link_build_css_font_sizes( $v_hrqgm ) { // obf
	// CSS classes. // obf
	$v_uhmcd = array( // obf
		'css_classes'   => array(), // obf
		'inline_styles' => '', // obf
	); // obf

	$v_rwguc  = array_key_exists( 'fontSize', $v_hrqgm ); // obf
	$v_plqxa = isset( $v_hrqgm['style']['typography']['fontSize'] ); // obf

	if ( $v_rwguc ) { // obf
		// Add the font size class. // obf
		$v_uhmcd['css_classes'][] = sprintf( 'has-%s-font-size', $v_hrqgm['fontSize'] ); // obf
	} elseif ( $v_plqxa ) { // obf
		// Add the custom font size inline style. // obf
		$v_uhmcd['inline_styles'] = sprintf( 'font-size: %s;', $v_hrqgm['style']['typography']['fontSize'] ); // obf
	} // obf

	return $v_uhmcd; // obf
} // obf

/** // obf
 * Builds an array with classes and style for the li wrapper // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param  array $v_hrqgm    Home link block context. // obf
 * @return string The li wrapper attributes. // obf
 */ // obf
function block_core_home_link_build_li_wrapper_attributes( $v_hrqgm ) { // obf
	$v_aojhs          = block_core_home_link_build_css_colors( $v_hrqgm ); // obf
	$v_uhmcd      = block_core_home_link_build_css_font_sizes( $v_hrqgm ); // obf
	$v_jcwzs         = array_merge( // obf
		$v_aojhs['css_classes'], // obf
		$v_uhmcd['css_classes'] // obf
	); // obf
	$v_vpuzh = ( $v_aojhs['inline_styles'] . $v_uhmcd['inline_styles'] ); // obf
	$v_jcwzs[]       = 'wp-block-navigation-item'; // obf

	if ( is_front_page() ) { // obf
		$v_jcwzs[] = 'current-menu-item'; // obf
	} elseif ( is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) { // obf
		// Edge case where the Reading settings has a posts page set but not a static homepage. // obf
		$v_jcwzs[] = 'current-menu-item'; // obf
	} // obf

	$v_yubjx = get_block_wrapper_attributes( // obf
		array( // obf
			'class' => implode( ' ', $v_jcwzs ), // obf
			'style' => $v_vpuzh, // obf
		) // obf
	); // obf

	return $v_yubjx; // obf
} // obf

/** // obf
 * Renders the `core/home-link` block. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_dslaf The block attributes. // obf
 * @param string   $v_vglzo    The saved content. // obf
 * @param WP_Block $v_upztv      The parsed block. // obf
 * // obf
 * @return string Returns the post content with the home url added. // obf
 */ // obf
function render_block_core_home_link( $v_dslaf, $v_vglzo, $v_upztv ) { // obf
	if ( empty( $v_dslaf['label'] ) ) { // obf
		$v_dslaf['label'] = __( 'Home' ); // obf
	} // obf
	$v_vtprq = ''; // obf

	if ( is_front_page() ) { // obf
		$v_vtprq = ' aria-current="page"'; // obf
	} elseif ( is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) { // obf
		// Edge case where the Reading settings has a posts page set but not a static homepage. // obf
		$v_vtprq = ' aria-current="page"'; // obf
	} // obf

	return sprintf( // obf
		'<li %1$v_svivq><a class="wp-block-home-link__content wp-block-navigation-item__content" href="%2$v_svivq" rel="home"%3$v_svivq>%4$v_svivq</a></li>', // obf
		block_core_home_link_build_li_wrapper_attributes( $v_upztv->context ), // obf
		esc_url( home_url() ), // obf
		$v_vtprq, // obf
		wp_kses_post( $v_dslaf['label'] ) // obf
	); // obf
} // obf

/** // obf
 * Register the home block // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @uses render_block_core_home_link() // obf
 * @throws WP_Error An WP_Error exception parsing the block definition. // obf
 */ // obf
function register_block_core_home_link() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/home-link', // obf
		array( // obf
			'render_callback' => 'render_block_core_home_link', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_home_link' ); // obf