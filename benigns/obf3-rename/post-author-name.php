

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-author-name` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-author-name` block on the server. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param  array    $v_rknxp Block attributes. // obf
 * @param  string   $v_ejocx    Block default content. // obf
 * @param  WP_Block $v_gnakw      Block instance. // obf
 * @return string Returns the rendered post author name block. // obf
 */ // obf
function render_block_core_post_author_name( $v_rknxp, $v_ejocx, $v_gnakw ) { // obf
	if ( isset( $v_gnakw->context['postId'] ) ) { // obf
		$v_zwnju = get_post_field( 'post_author', $v_gnakw->context['postId'] ); // obf
	} else { // obf
		$v_zwnju = get_query_var( 'author' ); // obf
	} // obf

	if ( empty( $v_zwnju ) ) { // obf
		return ''; // obf
	} // obf

	if ( isset( $v_gnakw->context['postType'] ) && ! post_type_supports( $v_gnakw->context['postType'], 'author' ) ) { // obf
		return ''; // obf
	} // obf

	$v_pepzm = get_the_author_meta( 'display_name', $v_zwnju ); // obf
	if ( isset( $v_rknxp['isLink'] ) && $v_rknxp['isLink'] ) { // obf
		$v_pepzm = sprintf( '<a href="%1$v_dhbuy" target="%2$v_dhbuy" class="wp-block-post-author-name__link">%3$v_dhbuy</a>', get_author_posts_url( $v_zwnju ), esc_attr( $v_rknxp['linkTarget'] ), $v_pepzm ); // obf
	} // obf

	$v_lehea = array(); // obf
	if ( isset( $v_rknxp['textAlign'] ) ) { // obf
		$v_lehea[] = 'has-text-align-' . $v_rknxp['textAlign']; // obf
	} // obf
	if ( isset( $v_rknxp['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_lehea[] = 'has-link-color'; // obf
	} // obf
	$v_csfwd = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_lehea ) ) ); // obf

	return sprintf( '<div %1$v_dhbuy>%2$v_dhbuy</div>', $v_csfwd, $v_pepzm ); // obf
} // obf

/** // obf
 * Registers the `core/post-author-name` block on the server. // obf
 * // obf
 * @since 6.2.0 // obf
 */ // obf
function register_block_core_post_author_name() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-author-name', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_author_name', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_author_name' ); // obf