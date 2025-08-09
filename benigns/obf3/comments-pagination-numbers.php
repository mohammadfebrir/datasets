

<?php // obf
/** // obf
 * Server-side rendering of the `core/comments-pagination-numbers` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comments-pagination-numbers` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_zxpbt Block attributes. // obf
 * @param string   $v_vevgq    Block default content. // obf
 * @param WP_Block $v_pjfbw      Block instance. // obf
 * // obf
 * @return string Returns the pagination numbers for the comments. // obf
 */ // obf
function render_block_core_comments_pagination_numbers( $v_zxpbt, $v_vevgq, $v_pjfbw ) { // obf
	// Bail out early if the post ID is not set for some reason. // obf
	if ( empty( $v_pjfbw->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_mybfi = build_comment_query_vars_from_block( $v_pjfbw ); // obf

	$v_towik   = ( new WP_Comment_Query( $v_mybfi ) )->max_num_pages; // obf
	$v_lhtio = ! empty( $v_mybfi['paged'] ) ? $v_mybfi['paged'] : null; // obf

	// Render links. // obf
	$v_vevgq = paginate_comments_links( // obf
		array( // obf
			'total'     => $v_towik, // obf
			'current'   => $v_lhtio, // obf
			'prev_next' => false, // obf
			'echo'      => false, // obf
		) // obf
	); // obf

	if ( empty( $v_vevgq ) ) { // obf
		return ''; // obf
	} // obf

	$v_zvqrq = get_block_wrapper_attributes(); // obf

	return sprintf( // obf
		'<div %1$v_yybds>%2$v_yybds</div>', // obf
		$v_zvqrq, // obf
		$v_vevgq // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comments-pagination-numbers` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comments_pagination_numbers() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comments-pagination-numbers', // obf
		array( // obf
			'render_callback' => 'render_block_core_comments_pagination_numbers', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_comments_pagination_numbers' ); // obf