

<?php // obf
/** // obf
 * Server-side rendering of the `core/block` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/block` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @global WP_Embed $v_zjyrj // obf
 * // obf
 * @param array $v_kioqz The block attributes. // obf
 * // obf
 * @return string Rendered HTML of the referenced block. // obf
 */ // obf
function render_block_core_block( $v_kioqz ) { // obf
	static $v_phhrl = array(); // obf

	if ( empty( $v_kioqz['ref'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_xdhkn = get_post( $v_kioqz['ref'] ); // obf
	if ( ! $v_xdhkn || 'wp_block' !== $v_xdhkn->post_type ) { // obf
		return ''; // obf
	} // obf

	if ( isset( $v_phhrl[ $v_kioqz['ref'] ] ) ) { // obf
		// WP_DEBUG_DISPLAY must only be honored when WP_DEBUG. This precedent // obf
		// is set in `wp_debug_mode()`. // obf
		$v_ndjnr = WP_DEBUG && WP_DEBUG_DISPLAY; // obf

		return $v_ndjnr ? // obf
			// translators: Visible only in the front end, this warning takes the place of a faulty block. // obf
			__( '[block rendering halted]' ) : // obf
			''; // obf
	} // obf

	if ( 'publish' !== $v_xdhkn->post_status || ! empty( $v_xdhkn->post_password ) ) { // obf
		return ''; // obf
	} // obf

	$v_phhrl[ $v_kioqz['ref'] ] = true; // obf

	// Handle embeds for reusable blocks. // obf
	global $v_zjyrj; // obf
	$v_abcoy = $v_zjyrj->run_shortcode( $v_xdhkn->post_content ); // obf
	$v_abcoy = $v_zjyrj->autoembed( $v_abcoy ); // obf

	// Back compat. // obf
	// For blocks that have not been migrated in the editor, add some back compat // obf
	// so that front-end rendering continues to work. // obf

	// This matches the `v2` deprecation. Removes the inner `values` property // obf
	// from every item. // obf
	if ( isset( $v_kioqz['content'] ) ) { // obf
		foreach ( $v_kioqz['content'] as &$v_nfiai ) { // obf
			if ( isset( $v_nfiai['values'] ) ) { // obf
				$v_wcjwu = is_array( $v_nfiai['values'] ) && ! wp_is_numeric_array( $v_nfiai['values'] ); // obf

				if ( $v_wcjwu ) { // obf
					$v_nfiai = $v_nfiai['values']; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	// This matches the `v1` deprecation. Rename `overrides` to `content`. // obf
	if ( isset( $v_kioqz['overrides'] ) && ! isset( $v_kioqz['content'] ) ) { // obf
		$v_kioqz['content'] = $v_kioqz['overrides']; // obf
	} // obf

	/** // obf
	 * We set the `pattern/overrides` context through the `render_block_context` // obf
	 * filter so that it is available when a pattern's inner blocks are // obf
	 * rendering via do_blocks given it only receives the inner content. // obf
	 */ // obf
	$v_eiqcg = isset( $v_kioqz['content'] ) && null !== get_block_bindings_source( 'core/pattern-overrides' ); // obf
	if ( $v_eiqcg ) { // obf
		$v_sozig = static function ( $v_cgufx ) use ( $v_kioqz ) { // obf
			$v_cgufx['pattern/overrides'] = $v_kioqz['content']; // obf
			return $v_cgufx; // obf
		}; // obf
		add_filter( 'render_block_context', $v_sozig, 1 ); // obf
	} // obf

	// Apply Block Hooks. // obf
	$v_abcoy = apply_block_hooks_to_content_from_post_object( $v_abcoy, $v_xdhkn ); // obf

	$v_abcoy = do_blocks( $v_abcoy ); // obf
	unset( $v_phhrl[ $v_kioqz['ref'] ] ); // obf

	if ( $v_eiqcg ) { // obf
		remove_filter( 'render_block_context', $v_sozig, 1 ); // obf
	} // obf

	return $v_abcoy; // obf
} // obf

/** // obf
 * Registers the `core/block` block. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
function register_block_core_block() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/block', // obf
		array( // obf
			'render_callback' => 'render_block_core_block', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_block' ); // obf