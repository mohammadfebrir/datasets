

<?php // obf
/** // obf
 * Server-side rendering of the `core/pattern` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 *  Registers the `core/pattern` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_pattern() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/pattern', // obf
		array( // obf
			'render_callback' => 'render_block_core_pattern', // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Renders the `core/pattern` block on the server. // obf
 * // obf
 * @since 6.3.0 Backwards compatibility: blocks with no `syncStatus` attribute do not receive block wrapper. // obf
 * // obf
 * @global WP_Embed $v_hbodk Used to process embedded content within patterns // obf
 * // obf
 * @param array $v_hmkox Block attributes. // obf
 * // obf
 * @return string Returns the output of the pattern. // obf
 */ // obf
function render_block_core_pattern( $v_hmkox ) { // obf
	static $v_dktsz = array(); // obf

	if ( empty( $v_hmkox['slug'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_mezjc     = $v_hmkox['slug']; // obf
	$v_vysbl = WP_Block_Patterns_Registry::get_instance(); // obf

	if ( ! $v_vysbl->is_registered( $v_mezjc ) ) { // obf
		return ''; // obf
	} // obf

	if ( isset( $v_dktsz[ $v_hmkox['slug'] ] ) ) { // obf
		// WP_DEBUG_DISPLAY must only be honored when WP_DEBUG. This precedent // obf
		// is set in `wp_debug_mode()`. // obf
		$v_hypnn = WP_DEBUG && WP_DEBUG_DISPLAY; // obf

		return $v_hypnn ? // obf
			// translators: Visible only in the front end, this warning takes the place of a faulty block. %s represents a pattern's slug. // obf
			sprintf( __( '[block rendering halted for pattern "%s"]' ), $v_mezjc ) : // obf
			''; // obf
	} // obf

	$v_bdoor = $v_vysbl->get_registered( $v_mezjc ); // obf
	$v_kdvuv = $v_bdoor['content']; // obf

	$v_dktsz[ $v_hmkox['slug'] ] = true; // obf

	$v_kdvuv = do_blocks( $v_kdvuv ); // obf

	global $v_hbodk; // obf
	$v_kdvuv = $v_hbodk->autoembed( $v_kdvuv ); // obf

	unset( $v_dktsz[ $v_hmkox['slug'] ] ); // obf
	return $v_kdvuv; // obf
} // obf

add_action( 'init', 'register_block_core_pattern' ); // obf