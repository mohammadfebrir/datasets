

<?php // obf
/** // obf
 * Server-side rendering of the `core/term-description` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/term-description` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array $v_obqpd Block attributes. // obf
 * // obf
 * @return string Returns the description of the current taxonomy term, if available // obf
 */ // obf
function render_block_core_term_description( $v_obqpd ) { // obf
	$v_wdako = ''; // obf

	if ( is_category() || is_tag() || is_tax() ) { // obf
		$v_wdako = term_description(); // obf
	} // obf

	if ( empty( $v_wdako ) ) { // obf
		return ''; // obf
	} // obf

	$v_mqity = array(); // obf
	if ( isset( $v_obqpd['textAlign'] ) ) { // obf
		$v_mqity[] = 'has-text-align-' . $v_obqpd['textAlign']; // obf
	} // obf
	if ( isset( $v_obqpd['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_mqity[] = 'has-link-color'; // obf
	} // obf
	$v_pjvzi = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_mqity ) ) ); // obf

	return '<div ' . $v_pjvzi . '>' . $v_wdako . '</div>'; // obf
} // obf

/** // obf
 * Registers the `core/term-description` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_term_description() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/term-description', // obf
		array( // obf
			'render_callback' => 'render_block_core_term_description', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_term_description' ); // obf