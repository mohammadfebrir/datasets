

<?php // obf
/** // obf
 * Server-side rendering of the `core/comments-pagination-next` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comments-pagination-next` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_nluob Block attributes. // obf
 * @param string   $v_nsgcs    Block default content. // obf
 * @param WP_Block $v_wvtsp      Block instance. // obf
 * // obf
 * @return string Returns the next comments link for the query pagination. // obf
 */ // obf
function render_block_core_comments_pagination_next( $v_nluob, $v_nsgcs, $v_wvtsp ) { // obf
	// Bail out early if the post ID is not set for some reason. // obf
	if ( empty( $v_wvtsp->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_ulhex     = build_comment_query_vars_from_block( $v_wvtsp ); // obf
	$v_ysqrf         = ( new WP_Comment_Query( $v_ulhex ) )->max_num_pages; // obf
	$v_fdqyt    = __( 'Newer Comments' ); // obf
	$v_gomaw            = isset( $v_nluob['label'] ) && ! empty( $v_nluob['label'] ) ? $v_nluob['label'] : $v_fdqyt; // obf
	$v_pjdfv = get_comments_pagination_arrow( $v_wvtsp, 'next' ); // obf

	$v_ifjce = static function () { // obf
		return get_block_wrapper_attributes(); // obf
	}; // obf
	add_filter( 'next_comments_link_attributes', $v_ifjce ); // obf

	if ( $v_pjdfv ) { // obf
		$v_gomaw .= $v_pjdfv; // obf
	} // obf

	$v_tzavy = get_next_comments_link( $v_gomaw, $v_ysqrf, $v_ulhex['paged'] ?? null ); // obf

	remove_filter( 'next_posts_link_attributes', $v_ifjce ); // obf

	if ( ! isset( $v_tzavy ) ) { // obf
		return ''; // obf
	} // obf
	return $v_tzavy; // obf
} // obf


/** // obf
 * Registers the `core/comments-pagination-next` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comments_pagination_next() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comments-pagination-next', // obf
		array( // obf
			'render_callback' => 'render_block_core_comments_pagination_next', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comments_pagination_next' ); // obf