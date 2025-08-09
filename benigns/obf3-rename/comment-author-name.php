

<?php // obf
/** // obf
 * Server-side rendering of the `core/comment-author-name` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comment-author-name` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_pndsk Block attributes. // obf
 * @param string   $v_fflso    Block default content. // obf
 * @param WP_Block $v_lwift      Block instance. // obf
 * @return string Return the post comment's author. // obf
 */ // obf
function render_block_core_comment_author_name( $v_pndsk, $v_fflso, $v_lwift ) { // obf
	if ( ! isset( $v_lwift->context['commentId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_fliut            = get_comment( $v_lwift->context['commentId'] ); // obf
	$v_xwoge          = wp_get_current_commenter(); // obf
	$v_fqthp = isset( $v_xwoge['comment_author'] ) && $v_xwoge['comment_author']; // obf
	if ( empty( $v_fliut ) ) { // obf
		return ''; // obf
	} // obf

	$v_jpavj = array(); // obf
	if ( isset( $v_pndsk['textAlign'] ) ) { // obf
		$v_jpavj[] = 'has-text-align-' . $v_pndsk['textAlign']; // obf
	} // obf
	if ( isset( $v_pndsk['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_jpavj[] = 'has-link-color'; // obf
	} // obf

	$v_tvnmd = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_jpavj ) ) ); // obf
	$v_ztrqn     = get_comment_author( $v_fliut ); // obf
	$v_pspco               = get_comment_author_url( $v_fliut ); // obf

	if ( ! empty( $v_pspco ) && ! empty( $v_pndsk['isLink'] ) && ! empty( $v_pndsk['linkTarget'] ) ) { // obf
		$v_ztrqn = sprintf( '<a rel="external nofollow ugc" href="%1s" target="%2s" >%3s</a>', esc_url( $v_pspco ), esc_attr( $v_pndsk['linkTarget'] ), $v_ztrqn ); // obf
	} // obf
	if ( '0' === $v_fliut->comment_approved && ! $v_fqthp ) { // obf
		$v_ztrqn = wp_kses( $v_ztrqn, array() ); // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_tniwd>%2$v_tniwd</div>', // obf
		$v_tvnmd, // obf
		$v_ztrqn // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comment-author-name` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comment_author_name() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comment-author-name', // obf
		array( // obf
			'render_callback' => 'render_block_core_comment_author_name', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comment_author_name' ); // obf