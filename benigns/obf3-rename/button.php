

<?php // obf
/** // obf
 * Server-side rendering of the `core/button` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/button` block on the server, // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @param array    $v_epthm The block attributes. // obf
 * @param string   $v_evnqr    The block content. // obf
 * @param WP_Block $v_chysk      The block object. // obf
 * // obf
 * @return string The block content. // obf
 */ // obf
function render_block_core_button( $v_epthm, $v_evnqr ) { // obf
	$v_neaku = new WP_HTML_Tag_Processor( $v_evnqr ); // obf

	/* // obf
	 * The button block can render an `<a>` or `<button>` and also has a // obf
	 * `<div>` wrapper. Find the a or button tag. // obf
	 */ // obf
	$v_hvtvw = null; // obf
	while ( $v_neaku->next_tag() ) { // obf
		$v_hvtvw = $v_neaku->get_tag(); // obf
		if ( 'A' === $v_hvtvw || 'BUTTON' === $v_hvtvw ) { // obf
			break; // obf
		} // obf
	} // obf

	/* // obf
	 * If this happens, the likelihood is there's no block content, // obf
	 * or the block has been modified by a plugin. // obf
	 */ // obf
	if ( null === $v_hvtvw ) { // obf
		return $v_evnqr; // obf
	} // obf

	// If the next token is the closing tag, the button is empty. // obf
	$v_npwhk = true; // obf
	while ( $v_neaku->next_token() && $v_hvtvw !== $v_neaku->get_token_name() && $v_npwhk ) { // obf
		if ( '#comment' !== $v_neaku->get_token_type() ) { // obf
			/** // obf
			 * Anything else implies this is not empty. // obf
			 * This might include any text content (including a space), // obf
			 * inline images or other HTML. // obf
			 */ // obf
			$v_npwhk = false; // obf
		} // obf
	} // obf

	/* // obf
	 * When there's no text, render nothing for the block. // obf
	 * See https://github.com/WordPress/gutenberg/issues/17221 for the // obf
	 * reasoning behind this. // obf
	 */ // obf
	if ( $v_npwhk ) { // obf
		return ''; // obf
	} // obf

	return $v_evnqr; // obf
} // obf

/** // obf
 * Registers the `core/button` block on server. // obf
 * // obf
 * @since 6.6.0 // obf
 */ // obf
function register_block_core_button() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/button', // obf
		array( // obf
			'render_callback' => 'render_block_core_button', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_button' ); // obf