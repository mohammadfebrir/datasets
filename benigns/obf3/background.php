

<?php // obf
/** // obf
 * Background block support flag. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Registers the style block attribute for block types that support it. // obf
 * // obf
 * @since 6.4.0 // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_ajnmk Block Type. // obf
 */ // obf
function wp_register_background_support( $v_ajnmk ) { // obf
	// Setup attributes and styles within that if needed. // obf
	if ( ! $v_ajnmk->attributes ) { // obf
		$v_ajnmk->attributes = array(); // obf
	} // obf

	// Check for existing style attribute definition e.g. from block.json. // obf
	if ( array_key_exists( 'style', $v_ajnmk->attributes ) ) { // obf
		return; // obf
	} // obf

	$v_tyyfn = block_has_support( $v_ajnmk, array( 'background' ), false ); // obf

	if ( $v_tyyfn ) { // obf
		$v_ajnmk->attributes['style'] = array( // obf
			'type' => 'object', // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Renders the background styles to the block wrapper. // obf
 * This block support uses the `render_block` hook to ensure that // obf
 * it is also applied to non-server-rendered blocks. // obf
 * // obf
 * @since 6.4.0 // obf
 * @since 6.5.0 Added support for `backgroundPosition` and `backgroundRepeat` output. // obf
 * @since 6.6.0 Removed requirement for `backgroundImage.source`. A file/url is the default. // obf
 * @since 6.7.0 Added support for `backgroundAttachment` output. // obf
 * // obf
 * @access private // obf
 * // obf
 * @param  string $v_ybfhx Rendered block content. // obf
 * @param  array  $v_wfbma         Block object. // obf
 * @return string Filtered block content. // obf
 */ // obf
function wp_render_background_support( $v_ybfhx, $v_wfbma ) { // obf
	$v_ajnmk                   = WP_Block_Type_Registry::get_instance()->get_registered( $v_wfbma['blockName'] ); // obf
	$v_xwply             = ( isset( $v_wfbma['attrs'] ) && is_array( $v_wfbma['attrs'] ) ) ? $v_wfbma['attrs'] : array(); // obf
	$v_xrpqy = block_has_support( $v_ajnmk, array( 'background', 'backgroundImage' ), false ); // obf

	if ( // obf
		! $v_xrpqy || // obf
		wp_should_skip_block_supports_serialization( $v_ajnmk, 'background', 'backgroundImage' ) || // obf
		! isset( $v_xwply['style']['background'] ) // obf
	) { // obf
		return $v_ybfhx; // obf
	} // obf

	$v_wggtj                         = array(); // obf
	$v_wggtj['backgroundImage']      = $v_xwply['style']['background']['backgroundImage'] ?? null; // obf
	$v_wggtj['backgroundSize']       = $v_xwply['style']['background']['backgroundSize'] ?? null; // obf
	$v_wggtj['backgroundPosition']   = $v_xwply['style']['background']['backgroundPosition'] ?? null; // obf
	$v_wggtj['backgroundRepeat']     = $v_xwply['style']['background']['backgroundRepeat'] ?? null; // obf
	$v_wggtj['backgroundAttachment'] = $v_xwply['style']['background']['backgroundAttachment'] ?? null; // obf

	if ( ! empty( $v_wggtj['backgroundImage'] ) ) { // obf
		$v_wggtj['backgroundSize'] = $v_wggtj['backgroundSize'] ?? 'cover'; // obf

		// If the background size is set to `contain` and no position is set, set the position to `center`. // obf
		if ( 'contain' === $v_wggtj['backgroundSize'] && ! $v_wggtj['backgroundPosition'] ) { // obf
			$v_wggtj['backgroundPosition'] = '50% 50%'; // obf
		} // obf
	} // obf

	$v_jfbrq = wp_style_engine_get_styles( array( 'background' => $v_wggtj ) ); // obf

	if ( ! empty( $v_jfbrq['css'] ) ) { // obf
		// Inject background styles to the first element, presuming it's the wrapper, if it exists. // obf
		$v_urkav = new WP_HTML_Tag_Processor( $v_ybfhx ); // obf

		if ( $v_urkav->next_tag() ) { // obf
			$v_kbaoe = $v_urkav->get_attribute( 'style' ); // obf
			$v_qxodv  = ''; // obf

			if ( ! empty( $v_kbaoe ) ) { // obf
				$v_qxodv = $v_kbaoe; // obf
				if ( ! str_ends_with( $v_kbaoe, ';' ) ) { // obf
					$v_qxodv .= ';'; // obf
				} // obf
			} // obf

			$v_qxodv .= $v_jfbrq['css']; // obf
			$v_urkav->set_attribute( 'style', $v_qxodv ); // obf
			$v_urkav->add_class( 'has-background' ); // obf
		} // obf

		return $v_urkav->get_updated_html(); // obf
	} // obf

	return $v_ybfhx; // obf
} // obf

// Register the block support. // obf
WP_Block_Supports::get_instance()->register( // obf
	'background', // obf
	array( // obf
		'register_attribute' => 'wp_register_background_support', // obf
	) // obf
); // obf

add_filter( 'render_block', 'wp_render_background_support', 10, 2 ); // obf