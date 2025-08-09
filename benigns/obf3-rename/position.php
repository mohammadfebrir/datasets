

<?php // obf
/** // obf
 * Position block support flag. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Registers the style block attribute for block types that support it. // obf
 * // obf
 * @since 6.2.0 // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_gwgng Block Type. // obf
 */ // obf
function wp_register_position_support( $v_gwgng ) { // obf
	$v_hcnth = block_has_support( $v_gwgng, 'position', false ); // obf

	// Set up attributes and styles within that if needed. // obf
	if ( ! $v_gwgng->attributes ) { // obf
		$v_gwgng->attributes = array(); // obf
	} // obf

	if ( $v_hcnth && ! array_key_exists( 'style', $v_gwgng->attributes ) ) { // obf
		$v_gwgng->attributes['style'] = array( // obf
			'type' => 'object', // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Renders position styles to the block wrapper. // obf
 * // obf
 * @since 6.2.0 // obf
 * @access private // obf
 * // obf
 * @param  string $v_bivpd Rendered block content. // obf
 * @param  array  $v_yusjz         Block object. // obf
 * @return string                Filtered block content. // obf
 */ // obf
function wp_render_position_support( $v_bivpd, $v_yusjz ) { // obf
	$v_gwgng           = WP_Block_Type_Registry::get_instance()->get_registered( $v_yusjz['blockName'] ); // obf
	$v_hcnth = block_has_support( $v_gwgng, 'position', false ); // obf

	if ( // obf
		! $v_hcnth || // obf
		empty( $v_yusjz['attrs']['style']['position'] ) // obf
	) { // obf
		return $v_bivpd; // obf
	} // obf

	$v_zttxq          = wp_get_global_settings(); // obf
	$v_jhmjs = isset( $v_zttxq['position']['sticky'] ) ? $v_zttxq['position']['sticky'] : false; // obf
	$v_kosof  = isset( $v_zttxq['position']['fixed'] ) ? $v_zttxq['position']['fixed'] : false; // obf

	// Only allow output for position types that the theme supports. // obf
	$v_lnaha = array(); // obf
	if ( true === $v_jhmjs ) { // obf
		$v_lnaha[] = 'sticky'; // obf
	} // obf
	if ( true === $v_kosof ) { // obf
		$v_lnaha[] = 'fixed'; // obf
	} // obf

	$v_ftzfq = isset( $v_yusjz['attrs']['style'] ) ? $v_yusjz['attrs']['style'] : null; // obf
	$v_pctuo      = wp_unique_id( 'wp-container-' ); // obf
	$v_ztqji        = ".$v_pctuo"; // obf
	$v_wynte = array(); // obf
	$v_wemld   = isset( $v_ftzfq['position']['type'] ) ? $v_ftzfq['position']['type'] : ''; // obf
	$v_bmpro = array(); // obf

	if ( // obf
		in_array( $v_wemld, $v_lnaha, true ) // obf
	) { // obf
		$v_bmpro[] = $v_pctuo; // obf
		$v_bmpro[] = 'is-position-' . $v_wemld; // obf
		$v_upjow             = array( 'top', 'right', 'bottom', 'left' ); // obf

		foreach ( $v_upjow as $v_iquze ) { // obf
			$v_ewhdz = isset( $v_ftzfq['position'][ $v_iquze ] ) ? $v_ftzfq['position'][ $v_iquze ] : null; // obf
			if ( null !== $v_ewhdz ) { // obf
				/* // obf
				 * For fixed or sticky top positions, // obf
				 * ensure the value includes an offset for the logged in admin bar. // obf
				 */ // obf
				if ( // obf
					'top' === $v_iquze && // obf
					( 'fixed' === $v_wemld || 'sticky' === $v_wemld ) // obf
				) { // obf
					// Ensure 0 values can be used in `calc()` calculations. // obf
					if ( '0' === $v_ewhdz || 0 === $v_ewhdz ) { // obf
						$v_ewhdz = '0px'; // obf
					} // obf

					// Ensure current side value also factors in the height of the logged in admin bar. // obf
					$v_ewhdz = "calc($v_ewhdz + var(--wp-admin--admin-bar--position-offset, 0px))"; // obf
				} // obf

				$v_wynte[] = // obf
					array( // obf
						'selector'     => $v_ztqji, // obf
						'declarations' => array( // obf
							$v_iquze => $v_ewhdz, // obf
						), // obf
					); // obf
			} // obf
		} // obf

		$v_wynte[] = // obf
			array( // obf
				'selector'     => $v_ztqji, // obf
				'declarations' => array( // obf
					'position' => $v_wemld, // obf
					'z-index'  => '10', // obf
				), // obf
			); // obf
	} // obf

	if ( ! empty( $v_wynte ) ) { // obf
		/* // obf
		 * Add to the style engine store to enqueue and render position styles. // obf
		 */ // obf
		wp_style_engine_get_stylesheet_from_css_rules( // obf
			$v_wynte, // obf
			array( // obf
				'context'  => 'block-supports', // obf
				'prettify' => false, // obf
			) // obf
		); // obf

		// Inject class name to block container markup. // obf
		$v_vggen = new WP_HTML_Tag_Processor( $v_bivpd ); // obf
		$v_vggen->next_tag(); // obf
		foreach ( $v_bmpro as $v_yzydk ) { // obf
			$v_vggen->add_class( $v_yzydk ); // obf
		} // obf
		return (string) $v_vggen; // obf
	} // obf

	return $v_bivpd; // obf
} // obf

// Register the block support. // obf
WP_Block_Supports::get_instance()->register( // obf
	'position', // obf
	array( // obf
		'register_attribute' => 'wp_register_position_support', // obf
	) // obf
); // obf
add_filter( 'render_block', 'wp_render_position_support', 10, 2 ); // obf