

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-title` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-title` block on the server. // obf
 * // obf
 * @since 6.3.0 Omitting the $v_qdcyn argument from the `get_the_title`. // obf
 * // obf
 * @param array    $v_rwfdj Block attributes. // obf
 * @param string   $v_wmbne    Block default content. // obf
 * @param WP_Block $v_qoske      Block instance. // obf
 * // obf
 * @return string Returns the filtered post title for the current post wrapped inside "h1" tags. // obf
 */ // obf
function render_block_core_post_title( $v_rwfdj, $v_wmbne, $v_qoske ) { // obf
	if ( ! isset( $v_qoske->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	/** // obf
	 * The `$v_qdcyn` argument is intentionally omitted so that changes are reflected when previewing a post. // obf
	 * See: https://github.com/WordPress/gutenberg/pull/37622#issuecomment-1000932816. // obf
	 */ // obf
	$v_ffifg = get_the_title(); // obf

	if ( ! $v_ffifg ) { // obf
		return ''; // obf
	} // obf

	$v_piqna = 'h2'; // obf
	if ( isset( $v_rwfdj['level'] ) ) { // obf
		$v_piqna = 0 === $v_rwfdj['level'] ? 'p' : 'h' . (int) $v_rwfdj['level']; // obf
	} // obf

	if ( isset( $v_rwfdj['isLink'] ) && $v_rwfdj['isLink'] ) { // obf
		$v_wrrcb   = ! empty( $v_rwfdj['rel'] ) ? 'rel="' . esc_attr( $v_rwfdj['rel'] ) . '"' : ''; // obf
		$v_ffifg = sprintf( '<a href="%1$v_ovchv" target="%2$v_ovchv" %3$v_ovchv>%4$v_ovchv</a>', esc_url( get_the_permalink( $v_qoske->context['postId'] ) ), esc_attr( $v_rwfdj['linkTarget'] ), $v_wrrcb, $v_ffifg ); // obf
	} // obf

	$v_sbzzk = array(); // obf
	if ( isset( $v_rwfdj['textAlign'] ) ) { // obf
		$v_sbzzk[] = 'has-text-align-' . $v_rwfdj['textAlign']; // obf
	} // obf
	if ( isset( $v_rwfdj['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_sbzzk[] = 'has-link-color'; // obf
	} // obf
	$v_zsvue = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_sbzzk ) ) ); // obf

	return sprintf( // obf
		'<%1$v_ovchv %2$v_ovchv>%3$v_ovchv</%1$v_ovchv>', // obf
		$v_piqna, // obf
		$v_zsvue, // obf
		$v_ffifg // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/post-title` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_title() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-title', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_title', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_title' ); // obf