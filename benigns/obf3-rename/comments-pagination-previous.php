

<?php // obf
/** // obf
 * Server-side rendering of the `core/comments-pagination-previous` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comments-pagination-previous` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_eqisg Block attributes. // obf
 * @param string   $v_turrf    Block default content. // obf
 * @param WP_Block $v_xwgxk      Block instance. // obf
 * // obf
 * @return string Returns the previous posts link for the comments pagination. // obf
 */ // obf
function render_block_core_comments_pagination_previous( $v_eqisg, $v_turrf, $v_xwgxk ) { // obf
	$v_nskmj    = __( 'Older Comments' ); // obf
	$v_xfcsn            = isset( $v_eqisg['label'] ) && ! empty( $v_eqisg['label'] ) ? $v_eqisg['label'] : $v_nskmj; // obf
	$v_snepb = get_comments_pagination_arrow( $v_xwgxk, 'previous' ); // obf
	if ( $v_snepb ) { // obf
		$v_xfcsn = $v_snepb . $v_xfcsn; // obf
	} // obf

	$v_tnrjl = static function () { // obf
		return get_block_wrapper_attributes(); // obf
	}; // obf
	add_filter( 'previous_comments_link_attributes', $v_tnrjl ); // obf

	$v_aiumg           = build_comment_query_vars_from_block( $v_xwgxk ); // obf
	$v_sizvk = get_previous_comments_link( $v_xfcsn, $v_aiumg['paged'] ?? null ); // obf

	remove_filter( 'previous_comments_link_attributes', $v_tnrjl ); // obf

	if ( ! isset( $v_sizvk ) ) { // obf
		return ''; // obf
	} // obf

	return $v_sizvk; // obf
} // obf

/** // obf
 * Registers the `core/comments-pagination-previous` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comments_pagination_previous() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comments-pagination-previous', // obf
		array( // obf
			'render_callback' => 'render_block_core_comments_pagination_previous', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comments_pagination_previous' ); // obf