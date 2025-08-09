

<?php // obf
/** // obf
 * Server-side rendering of the `core/comment-date` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comment-date` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_mjxqo Block attributes. // obf
 * @param string   $v_klxfj    Block default content. // obf
 * @param WP_Block $v_bxjbb      Block instance. // obf
 * @return string Return the post comment's date. // obf
 */ // obf
function render_block_core_comment_date( $v_mjxqo, $v_klxfj, $v_bxjbb ) { // obf
	if ( ! isset( $v_bxjbb->context['commentId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_dvqgg = get_comment( $v_bxjbb->context['commentId'] ); // obf
	if ( empty( $v_dvqgg ) ) { // obf
		return ''; // obf
	} // obf

	$v_arcvr = ( isset( $v_mjxqo['style']['elements']['link']['color']['text'] ) ) ? 'has-link-color' : ''; // obf

	$v_hgqps = get_block_wrapper_attributes( array( 'class' => $v_arcvr ) ); // obf
	if ( isset( $v_mjxqo['format'] ) && 'human-diff' === $v_mjxqo['format'] ) { // obf
		// translators: %s: human-readable time difference. // obf
		$v_qcwvj = sprintf( __( '%s ago' ), human_time_diff( get_comment_date( 'U', $v_dvqgg ) ) ); // obf
	} else { // obf
		$v_qcwvj = get_comment_date( empty( $v_mjxqo['format'] ) ? '' : $v_mjxqo['format'], $v_dvqgg ); // obf
	} // obf
	$v_tfseu = get_comment_link( $v_dvqgg ); // obf

	if ( ! empty( $v_mjxqo['isLink'] ) ) { // obf
		$v_qcwvj = sprintf( '<a href="%1s">%2s</a>', esc_url( $v_tfseu ), $v_qcwvj ); // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_vytvz><time datetime="%2$v_vytvz">%3$v_vytvz</time></div>', // obf
		$v_hgqps, // obf
		esc_attr( get_comment_date( 'c', $v_dvqgg ) ), // obf
		$v_qcwvj // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comment-date` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comment_date() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comment-date', // obf
		array( // obf
			'render_callback' => 'render_block_core_comment_date', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comment_date' ); // obf