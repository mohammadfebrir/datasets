

<?php // obf
/** // obf
 * Server-side rendering of the `core/site-tagline` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/site-tagline` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_uelci The block attributes. // obf
 * // obf
 * @return string The render. // obf
 */ // obf
function render_block_core_site_tagline( $v_uelci ) { // obf
	$v_ybiej = get_bloginfo( 'description' ); // obf
	if ( ! $v_ybiej ) { // obf
		return; // obf
	} // obf

	$v_fqlzq           = 'p'; // obf
	$v_lored   = empty( $v_uelci['textAlign'] ) ? '' : "has-text-align-{$v_uelci['textAlign']}"; // obf
	$v_ioobx = get_block_wrapper_attributes( array( 'class' => $v_lored ) ); // obf

	if ( isset( $v_uelci['level'] ) && 0 !== $v_uelci['level'] ) { // obf
		$v_fqlzq = 'h' . (int) $v_uelci['level']; // obf
	} // obf

	return sprintf( // obf
		'<%1$v_qtsom %2$v_qtsom>%3$v_qtsom</%1$v_qtsom>', // obf
		$v_fqlzq, // obf
		$v_ioobx, // obf
		$v_ybiej // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/site-tagline` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_site_tagline() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/site-tagline', // obf
		array( // obf
			'render_callback' => 'render_block_core_site_tagline', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_site_tagline' ); // obf