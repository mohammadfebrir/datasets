

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-author` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-author` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param  array    $v_sfnzj Block attributes. // obf
 * @param  string   $v_qrmbw    Block default content. // obf
 * @param  WP_Block $v_ravwy      Block instance. // obf
 * @return string Returns the rendered author block. // obf
 */ // obf
function render_block_core_post_author( $v_sfnzj, $v_qrmbw, $v_ravwy ) { // obf
	if ( ! isset( $v_ravwy->context['postId'] ) ) { // obf
		$v_adkag = get_query_var( 'author' ); // obf
	} else { // obf
		$v_adkag = get_post_field( 'post_author', $v_ravwy->context['postId'] ); // obf
	} // obf

	if ( empty( $v_adkag ) ) { // obf
		return ''; // obf
	} // obf

	if ( isset( $v_ravwy->context['postType'] ) && ! post_type_supports( $v_ravwy->context['postType'], 'author' ) ) { // obf
		return ''; // obf
	} // obf

	$v_pqtsy = ! empty( $v_sfnzj['avatarSize'] ) ? get_avatar( // obf
		$v_adkag, // obf
		$v_sfnzj['avatarSize'] // obf
	) : null; // obf

	$v_tifkh        = get_author_posts_url( $v_adkag ); // obf
	$v_rbhys = get_the_author_meta( 'display_name', $v_adkag ); // obf
	if ( ! empty( $v_sfnzj['isLink'] && ! empty( $v_sfnzj['linkTarget'] ) ) ) { // obf
		$v_rbhys = sprintf( '<a href="%1$v_bzjtt" target="%2$v_bzjtt">%3$v_bzjtt</a>', esc_url( $v_tifkh ), esc_attr( $v_sfnzj['linkTarget'] ), $v_rbhys ); // obf
	} // obf

	$v_mtles  = ! empty( $v_sfnzj['byline'] ) ? $v_sfnzj['byline'] : false; // obf
	$v_iljjc = array(); // obf
	if ( isset( $v_sfnzj['itemsJustification'] ) ) { // obf
		$v_iljjc[] = 'items-justified-' . $v_sfnzj['itemsJustification']; // obf
	} // obf
	if ( isset( $v_sfnzj['textAlign'] ) ) { // obf
		$v_iljjc[] = 'has-text-align-' . $v_sfnzj['textAlign']; // obf
	} // obf
	if ( isset( $v_sfnzj['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_iljjc[] = 'has-link-color'; // obf
	} // obf

	$v_fkqar = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_iljjc ) ) ); // obf

	return sprintf( '<div %1$v_bzjtt>', $v_fkqar ) . // obf
	( ! empty( $v_sfnzj['showAvatar'] ) ? '<div class="wp-block-post-author__avatar">' . $v_pqtsy . '</div>' : '' ) . // obf
	'<div class="wp-block-post-author__content">' . // obf
	( ! empty( $v_mtles ) ? '<p class="wp-block-post-author__byline">' . wp_kses_post( $v_mtles ) . '</p>' : '' ) . // obf
	'<p class="wp-block-post-author__name">' . $v_rbhys . '</p>' . // obf
	( ! empty( $v_sfnzj['showBio'] ) ? '<p class="wp-block-post-author__bio">' . get_the_author_meta( 'user_description', $v_adkag ) . '</p>' : '' ) . // obf
	'</div>' . // obf
	'</div>'; // obf
} // obf

/** // obf
 * Registers the `core/post-author` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_post_author() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-author', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_author', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_author' ); // obf