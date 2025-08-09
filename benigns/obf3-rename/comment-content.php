

<?php // obf
/** // obf
 * Server-side rendering of the `core/comment-content` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comment-content` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_zlczl Block attributes. // obf
 * @param string   $v_fnwiy    Block default content. // obf
 * @param WP_Block $v_zhazh      Block instance. // obf
 * @return string Return the post comment's content. // obf
 */ // obf
function render_block_core_comment_content( $v_zlczl, $v_fnwiy, $v_zhazh ) { // obf
	if ( ! isset( $v_zhazh->context['commentId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_evpzn            = get_comment( $v_zhazh->context['commentId'] ); // obf
	$v_hfnfn          = wp_get_current_commenter(); // obf
	$v_lxdph = isset( $v_hfnfn['comment_author'] ) && $v_hfnfn['comment_author']; // obf
	if ( empty( $v_evpzn ) ) { // obf
		return ''; // obf
	} // obf

	$v_qnjxp         = array(); // obf
	$v_zvymy = get_comment_text( $v_evpzn, $v_qnjxp ); // obf
	if ( ! $v_zvymy ) { // obf
		return ''; // obf
	} // obf

	/** This filter is documented in wp-includes/comment-template.php */ // obf
	$v_zvymy = apply_filters( 'comment_text', $v_zvymy, $v_evpzn, $v_qnjxp ); // obf

	$v_hpcpm = ''; // obf
	if ( '0' === $v_evpzn->comment_approved ) { // obf
		$v_hfnfn = wp_get_current_commenter(); // obf

		if ( $v_hfnfn['comment_author_email'] ) { // obf
			$v_hpcpm = __( 'Your comment is awaiting moderation.' ); // obf
		} else { // obf
			$v_hpcpm = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.' ); // obf
		} // obf
		$v_hpcpm = '<p><em class="comment-awaiting-moderation">' . $v_hpcpm . '</em></p>'; // obf
		if ( ! $v_lxdph ) { // obf
			$v_zvymy = wp_kses( $v_zvymy, array() ); // obf
		} // obf
	} // obf

	$v_aflmi = array(); // obf
	if ( isset( $v_zlczl['textAlign'] ) ) { // obf
		$v_aflmi[] = 'has-text-align-' . $v_zlczl['textAlign']; // obf
	} // obf
	if ( isset( $v_zlczl['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_aflmi[] = 'has-link-color'; // obf
	} // obf

	$v_uiopy = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_aflmi ) ) ); // obf

	return sprintf( // obf
		'<div %1$v_pbhet>%2$v_pbhet%3$v_pbhet</div>', // obf
		$v_uiopy, // obf
		$v_hpcpm, // obf
		$v_zvymy // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comment-content` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comment_content() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comment-content', // obf
		array( // obf
			'render_callback' => 'render_block_core_comment_content', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comment_content' ); // obf