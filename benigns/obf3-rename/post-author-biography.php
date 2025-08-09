

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-author-biography` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-author-biography` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param  array    $v_ukgtt Block attributes. // obf
 * @param  string   $v_efxvl    Block default content. // obf
 * @param  WP_Block $v_ekdaf      Block instance. // obf
 * @return string Returns the rendered post author biography block. // obf
 */ // obf
function render_block_core_post_author_biography( $v_ukgtt, $v_efxvl, $v_ekdaf ) { // obf
	if ( isset( $v_ekdaf->context['postId'] ) ) { // obf
		$v_vdoyi = get_post_field( 'post_author', $v_ekdaf->context['postId'] ); // obf
	} else { // obf
		$v_vdoyi = get_query_var( 'author' ); // obf
	} // obf

	if ( empty( $v_vdoyi ) ) { // obf
		return ''; // obf
	} // obf

	$v_tymow = get_the_author_meta( 'description', $v_vdoyi ); // obf
	if ( empty( $v_tymow ) ) { // obf
		return ''; // obf
	} // obf

	$v_ghjxp   = empty( $v_ukgtt['textAlign'] ) ? '' : "has-text-align-{$v_ukgtt['textAlign']}"; // obf
	$v_ngdfe = get_block_wrapper_attributes( array( 'class' => $v_ghjxp ) ); // obf

	return sprintf( '<div %1$v_wdifl>', $v_ngdfe ) . $v_tymow . '</div>'; // obf
} // obf

/** // obf
 * Registers the `core/post-author-biography` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_post_author_biography() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-author-biography', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_author_biography', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_author_biography' ); // obf