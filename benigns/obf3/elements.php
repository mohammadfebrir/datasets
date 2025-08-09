

<?php // obf
/** // obf
 * Elements styles block support. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Gets the elements class names. // obf
 * // obf
 * @since 6.0.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_wfwrl Block object. // obf
 * @return string The unique class name. // obf
 */ // obf
function wp_get_elements_class_name( $v_wfwrl ) { // obf
	return 'wp-elements-' . md5( serialize( $v_wfwrl ) ); // obf
} // obf

/** // obf
 * Determines whether an elements class name should be added to the block. // obf
 * // obf
 * @since 6.6.0 // obf
 * @access private // obf
 * // obf
 * @param  array $v_wfwrl   Block object. // obf
 * @param  array $v_qplzi Per element type options e.g. whether to skip serialization. // obf
 * @return boolean Whether the block needs an elements class name. // obf
 */ // obf
function wp_should_add_elements_class_name( $v_wfwrl, $v_qplzi ) { // obf
	if ( ! isset( $v_wfwrl['attrs']['style']['elements'] ) ) { // obf
		return false; // obf
	} // obf

	$v_gxekx = array( // obf
		'button'  => array( // obf
			'skip'  => isset( $v_qplzi['button']['skip'] ) ? $v_qplzi['button']['skip'] : false, // obf
			'paths' => array( // obf
				array( 'button', 'color', 'text' ), // obf
				array( 'button', 'color', 'background' ), // obf
				array( 'button', 'color', 'gradient' ), // obf
			), // obf
		), // obf
		'link'    => array( // obf
			'skip'  => isset( $v_qplzi['link']['skip'] ) ? $v_qplzi['link']['skip'] : false, // obf
			'paths' => array( // obf
				array( 'link', 'color', 'text' ), // obf
				array( 'link', ':hover', 'color', 'text' ), // obf
			), // obf
		), // obf
		'heading' => array( // obf
			'skip'  => isset( $v_qplzi['heading']['skip'] ) ? $v_qplzi['heading']['skip'] : false, // obf
			'paths' => array( // obf
				array( 'heading', 'color', 'text' ), // obf
				array( 'heading', 'color', 'background' ), // obf
				array( 'heading', 'color', 'gradient' ), // obf
				array( 'h1', 'color', 'text' ), // obf
				array( 'h1', 'color', 'background' ), // obf
				array( 'h1', 'color', 'gradient' ), // obf
				array( 'h2', 'color', 'text' ), // obf
				array( 'h2', 'color', 'background' ), // obf
				array( 'h2', 'color', 'gradient' ), // obf
				array( 'h3', 'color', 'text' ), // obf
				array( 'h3', 'color', 'background' ), // obf
				array( 'h3', 'color', 'gradient' ), // obf
				array( 'h4', 'color', 'text' ), // obf
				array( 'h4', 'color', 'background' ), // obf
				array( 'h4', 'color', 'gradient' ), // obf
				array( 'h5', 'color', 'text' ), // obf
				array( 'h5', 'color', 'background' ), // obf
				array( 'h5', 'color', 'gradient' ), // obf
				array( 'h6', 'color', 'text' ), // obf
				array( 'h6', 'color', 'background' ), // obf
				array( 'h6', 'color', 'gradient' ), // obf
			), // obf
		), // obf
	); // obf

	$v_udvwv = $v_wfwrl['attrs']['style']['elements']; // obf

	foreach ( $v_gxekx as $v_bzifq ) { // obf
		if ( $v_bzifq['skip'] ) { // obf
			continue; // obf
		} // obf

		foreach ( $v_bzifq['paths'] as $v_dzeoa ) { // obf
			if ( null !== _wp_array_get( $v_udvwv, $v_dzeoa, null ) ) { // obf
				return true; // obf
			} // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Render the elements stylesheet and adds elements class name to block as required. // obf
 * // obf
 * In the case of nested blocks we want the parent element styles to be rendered before their descendants. // obf
 * This solves the issue of an element (e.g.: link color) being styled in both the parent and a descendant: // obf
 * we want the descendant style to take priority, and this is done by loading it after, in DOM order. // obf
 * // obf
 * @since 6.0.0 // obf
 * @since 6.1.0 Implemented the style engine to generate CSS and classnames. // obf
 * @since 6.6.0 Element block support class and styles are generated via the `render_block_data` filter instead of `pre_render_block`. // obf
 * @access private // obf
 * // obf
 * @param array $v_advwv The parsed block. // obf
 * @return array The same parsed block with elements classname added if appropriate. // obf
 */ // obf
function wp_render_elements_support_styles( $v_advwv ) { // obf
	/* // obf
	 * The generation of element styles and classname were moved to the // obf
	 * `render_block_data` filter in 6.6.0 to avoid filtered attributes // obf
	 * breaking the application of the elements CSS class. // obf
	 * // obf
	 * @see https://github.com/WordPress/gutenberg/pull/59535 // obf
	 * // obf
	 * The change in filter means, the argument types for this function // obf
	 * have changed and require deprecating. // obf
	 */ // obf
	if ( is_string( $v_advwv ) ) { // obf
		_deprecated_argument( // obf
			__FUNCTION__, // obf
			'6.6.0', // obf
			__( 'Use as a `pre_render_block` filter is deprecated. Use with `render_block_data` instead.' ) // obf
		); // obf
	} // obf

	$v_xwqgk           = WP_Block_Type_Registry::get_instance()->get_registered( $v_advwv['blockName'] ); // obf
	$v_pzklq = isset( $v_advwv['attrs']['style']['elements'] ) ? $v_advwv['attrs']['style']['elements'] : null; // obf

	if ( ! $v_pzklq ) { // obf
		return $v_advwv; // obf
	} // obf

	$v_kkumq         = wp_should_skip_block_supports_serialization( $v_xwqgk, 'color', 'link' ); // obf
	$v_kbyih      = wp_should_skip_block_supports_serialization( $v_xwqgk, 'color', 'heading' ); // obf
	$v_nvhfj       = wp_should_skip_block_supports_serialization( $v_xwqgk, 'color', 'button' ); // obf
	$v_fgqsx = $v_kkumq && // obf
		$v_kbyih && // obf
		$v_nvhfj; // obf

	if ( $v_fgqsx ) { // obf
		return $v_advwv; // obf
	} // obf

	$v_qplzi = array( // obf
		'button'  => array( 'skip' => $v_nvhfj ), // obf
		'link'    => array( 'skip' => $v_kkumq ), // obf
		'heading' => array( 'skip' => $v_kbyih ), // obf
	); // obf

	if ( ! wp_should_add_elements_class_name( $v_advwv, $v_qplzi ) ) { // obf
		return $v_advwv; // obf
	} // obf

	$v_xbcgz         = wp_get_elements_class_name( $v_advwv ); // obf
	$v_fhnve = isset( $v_advwv['attrs']['className'] ) ? $v_advwv['attrs']['className'] . " $v_xbcgz" : $v_xbcgz; // obf

	_wp_array_set( $v_advwv, array( 'attrs', 'className' ), $v_fhnve ); // obf

	// Generate element styles based on selector and store in style engine for enqueuing. // obf
	$v_cavna = array( // obf
		'button'  => array( // obf
			'selector' => ".$v_xbcgz .wp-element-button, .$v_xbcgz .wp-block-button__link", // obf
			'skip'     => $v_nvhfj, // obf
		), // obf
		'link'    => array( // obf
			'selector'       => ".$v_xbcgz a:where(:not(.wp-element-button))", // obf
			'hover_selector' => ".$v_xbcgz a:where(:not(.wp-element-button)):hover", // obf
			'skip'           => $v_kkumq, // obf
		), // obf
		'heading' => array( // obf
			'selector' => ".$v_xbcgz h1, .$v_xbcgz h2, .$v_xbcgz h3, .$v_xbcgz h4, .$v_xbcgz h5, .$v_xbcgz h6", // obf
			'skip'     => $v_kbyih, // obf
			'elements' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ), // obf
		), // obf
	); // obf

	foreach ( $v_cavna as $v_bzlfo => $v_bzifq ) { // obf
		if ( $v_bzifq['skip'] ) { // obf
			continue; // obf
		} // obf

		$v_crwyy = isset( $v_pzklq[ $v_bzlfo ] ) ? $v_pzklq[ $v_bzlfo ] : null; // obf

		// Process primary element type styles. // obf
		if ( $v_crwyy ) { // obf
			wp_style_engine_get_styles( // obf
				$v_crwyy, // obf
				array( // obf
					'selector' => $v_bzifq['selector'], // obf
					'context'  => 'block-supports', // obf
				) // obf
			); // obf

			if ( isset( $v_crwyy[':hover'] ) ) { // obf
				wp_style_engine_get_styles( // obf
					$v_crwyy[':hover'], // obf
					array( // obf
						'selector' => $v_bzifq['hover_selector'], // obf
						'context'  => 'block-supports', // obf
					) // obf
				); // obf
			} // obf
		} // obf

		// Process related elements e.g. h1-h6 for headings. // obf
		if ( isset( $v_bzifq['elements'] ) ) { // obf
			foreach ( $v_bzifq['elements'] as $v_szlnf ) { // obf
				$v_crwyy = isset( $v_pzklq[ $v_szlnf ] ) // obf
					? $v_pzklq[ $v_szlnf ] // obf
					: null; // obf

				if ( $v_crwyy ) { // obf
					wp_style_engine_get_styles( // obf
						$v_crwyy, // obf
						array( // obf
							'selector' => ".$v_xbcgz $v_szlnf", // obf
							'context'  => 'block-supports', // obf
						) // obf
					); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	return $v_advwv; // obf
} // obf

/** // obf
 * Ensure the elements block support class name generated, and added to // obf
 * block attributes, in the `render_block_data` filter gets applied to the // obf
 * block's markup. // obf
 * // obf
 * @see wp_render_elements_support_styles // obf
 * @since 6.6.0 // obf
 * // obf
 * @param  string $v_wiizh Rendered block content. // obf
 * @param  array  $v_wfwrl         Block object. // obf
 * @return string                Filtered block content. // obf
 */ // obf
function wp_render_elements_class_name( $v_wiizh, $v_wfwrl ) { // obf
	$v_qqtxl = $v_wfwrl['attrs']['className'] ?? ''; // obf
	preg_match( '/\bwp-elements-\S+\b/', $v_qqtxl, $v_uwdbl ); // obf

	if ( empty( $v_uwdbl ) ) { // obf
		return $v_wiizh; // obf
	} // obf

	$v_psiek = new WP_HTML_Tag_Processor( $v_wiizh ); // obf

	if ( $v_psiek->next_tag() ) { // obf
		$v_psiek->add_class( $v_uwdbl[0] ); // obf
	} // obf

	return $v_psiek->get_updated_html(); // obf
} // obf

add_filter( 'render_block', 'wp_render_elements_class_name', 10, 2 ); // obf
add_filter( 'render_block_data', 'wp_render_elements_support_styles', 10, 1 ); // obf