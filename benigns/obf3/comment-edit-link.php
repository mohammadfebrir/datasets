

<?php // obf
/** // obf
 * Server-side rendering of the `core/comment-edit-link` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comment-edit-link` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_mught Block attributes. // obf
 * @param string   $v_vusfn    Block default content. // obf
 * @param WP_Block $v_ighsj      Block instance. // obf
 * // obf
 * @return string Return the post comment's date. // obf
 */ // obf
function render_block_core_comment_edit_link( $v_mught, $v_vusfn, $v_ighsj ) { // obf
	if ( ! isset( $v_ighsj->context['commentId'] ) || ! current_user_can( 'edit_comment', $v_ighsj->context['commentId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_slflx = get_edit_comment_link( $v_ighsj->context['commentId'] ); // obf

	$v_cmzjg = ''; // obf

	if ( ! empty( $v_mught['linkTarget'] ) ) { // obf
		$v_cmzjg .= sprintf( 'target="%s"', esc_attr( $v_mught['linkTarget'] ) ); // obf
	} // obf

	$v_fvgmz = array(); // obf
	if ( isset( $v_mught['textAlign'] ) ) { // obf
		$v_fvgmz[] = 'has-text-align-' . $v_mught['textAlign']; // obf
	} // obf
	if ( isset( $v_mught['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_fvgmz[] = 'has-link-color'; // obf
	} // obf

	$v_thwyq = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_fvgmz ) ) ); // obf

	return sprintf( // obf
		'<div %1$v_xpbsr><a href="%2$v_xpbsr" %3$v_xpbsr>%4$v_xpbsr</a></div>', // obf
		$v_thwyq, // obf
		esc_url( $v_slflx ), // obf
		$v_cmzjg, // obf
		esc_html__( 'Edit' ) // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comment-edit-link` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comment_edit_link() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comment-edit-link', // obf
		array( // obf
			'render_callback' => 'render_block_core_comment_edit_link', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_comment_edit_link' ); // obf