

<?php // obf
/** // obf
 * Server-side rendering of the `core/comment-reply-link` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comment-reply-link` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_ycelo Block attributes. // obf
 * @param string   $v_ngsgj    Block default content. // obf
 * @param WP_Block $v_zbgnv      Block instance. // obf
 * @return string Return the post comment's reply link. // obf
 */ // obf
function render_block_core_comment_reply_link( $v_ycelo, $v_ngsgj, $v_zbgnv ) { // obf
	if ( ! isset( $v_zbgnv->context['commentId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_skebc = get_option( 'thread_comments' ); // obf
	if ( ! $v_skebc ) { // obf
		return ''; // obf
	} // obf

	$v_hehxh = get_comment( $v_zbgnv->context['commentId'] ); // obf
	if ( empty( $v_hehxh ) ) { // obf
		return ''; // obf
	} // obf

	$v_akwpp     = 1; // obf
	$v_wjvai = get_option( 'thread_comments_depth' ); // obf
	$v_uddch = $v_hehxh->comment_parent; // obf

	// Compute comment's depth iterating over its ancestors. // obf
	while ( ! empty( $v_uddch ) ) { // obf
		++$v_akwpp; // obf
		$v_uddch = get_comment( $v_uddch )->comment_parent; // obf
	} // obf

	$v_njxos = get_comment_reply_link( // obf
		array( // obf
			'depth'     => $v_akwpp, // obf
			'max_depth' => $v_wjvai, // obf
		), // obf
		$v_hehxh // obf
	); // obf

	// Render nothing if the generated reply link is empty. // obf
	if ( empty( $v_njxos ) ) { // obf
		return; // obf
	} // obf

	$v_irivg = array(); // obf
	if ( isset( $v_ycelo['textAlign'] ) ) { // obf
		$v_irivg[] = 'has-text-align-' . $v_ycelo['textAlign']; // obf
	} // obf
	if ( isset( $v_ycelo['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_irivg[] = 'has-link-color'; // obf
	} // obf

	$v_rrbbd = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_irivg ) ) ); // obf

	return sprintf( // obf
		'<div %1$v_rcgmg>%2$v_rcgmg</div>', // obf
		$v_rrbbd, // obf
		$v_njxos // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comment-reply-link` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comment_reply_link() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comment-reply-link', // obf
		array( // obf
			'render_callback' => 'render_block_core_comment_reply_link', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_comment_reply_link' ); // obf