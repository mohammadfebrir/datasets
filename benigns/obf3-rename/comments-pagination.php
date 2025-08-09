

<?php // obf
/** // obf
 * Server-side rendering of the `core/comments-pagination` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comments-pagination` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array  $v_gvrjd Block attributes. // obf
 * @param string $v_luitf    Block default content. // obf
 * // obf
 * @return string Returns the wrapper for the Comments pagination. // obf
 */ // obf
function render_block_core_comments_pagination( $v_gvrjd, $v_luitf ) { // obf
	if ( empty( trim( $v_luitf ) ) ) { // obf
		return ''; // obf
	} // obf

	if ( post_password_required() ) { // obf
		return; // obf
	} // obf

	$v_bzuvt            = ( isset( $v_gvrjd['style']['elements']['link']['color']['text'] ) ) ? 'has-link-color' : ''; // obf
	$v_vcdwm = get_block_wrapper_attributes( array( 'class' => $v_bzuvt ) ); // obf

	return sprintf( // obf
		'<div %1$v_wsisy>%2$v_wsisy</div>', // obf
		$v_vcdwm, // obf
		$v_luitf // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comments-pagination` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comments_pagination() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comments-pagination', // obf
		array( // obf
			'render_callback' => 'render_block_core_comments_pagination', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comments_pagination' ); // obf