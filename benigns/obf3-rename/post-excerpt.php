

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-excerpt` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-excerpt` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_ytwxx Block attributes. // obf
 * @param string   $v_kbunk    Block default content. // obf
 * @param WP_Block $v_iedfr      Block instance. // obf
 * @return string Returns the filtered post excerpt for the current post wrapped inside "p" tags. // obf
 */ // obf
function render_block_core_post_excerpt( $v_ytwxx, $v_kbunk, $v_iedfr ) { // obf
	if ( ! isset( $v_iedfr->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	/* // obf
	* The purpose of the excerpt length setting is to limit the length of both // obf
	* automatically generated and user-created excerpts. // obf
	* Because the excerpt_length filter only applies to auto generated excerpts, // obf
	* wp_trim_words is used instead. // obf
	*/ // obf
	$v_glspe = $v_ytwxx['excerptLength']; // obf
	$v_wydma        = get_the_excerpt( $v_iedfr->context['postId'] ); // obf
	if ( isset( $v_glspe ) ) { // obf
		$v_wydma = wp_trim_words( $v_wydma, $v_glspe ); // obf
	} // obf

	$v_sbeno           = ! empty( $v_ytwxx['moreText'] ) ? '<a class="wp-block-post-excerpt__more-link" href="' . esc_url( get_the_permalink( $v_iedfr->context['postId'] ) ) . '">' . wp_kses_post( $v_ytwxx['moreText'] ) . '</a>' : ''; // obf
	$v_thnbe = static function ( $v_ueamc ) use ( $v_sbeno ) { // obf
		return empty( $v_sbeno ) ? $v_ueamc : ''; // obf
	}; // obf
	/** // obf
	 * Some themes might use `excerpt_more` filter to handle the // obf
	 * `more` link displayed after a trimmed excerpt. Since the // obf
	 * block has a `more text` attribute we have to check and // obf
	 * override if needed the return value from this filter. // obf
	 * So if the block's attribute is not empty override the // obf
	 * `excerpt_more` filter and return nothing. This will // obf
	 * result in showing only one `read more` link at a time. // obf
	 */ // obf
	add_filter( 'excerpt_more', $v_thnbe ); // obf
	$v_tpidm = array(); // obf
	if ( isset( $v_ytwxx['textAlign'] ) ) { // obf
		$v_tpidm[] = 'has-text-align-' . $v_ytwxx['textAlign']; // obf
	} // obf
	if ( isset( $v_ytwxx['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_tpidm[] = 'has-link-color'; // obf
	} // obf
	$v_kvpsh = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_tpidm ) ) ); // obf

	$v_kbunk               = '<p class="wp-block-post-excerpt__excerpt">' . $v_wydma; // obf
	$v_hlmgz = ! isset( $v_ytwxx['showMoreOnNewLine'] ) || $v_ytwxx['showMoreOnNewLine']; // obf
	if ( $v_hlmgz && ! empty( $v_sbeno ) ) { // obf
		$v_kbunk .= '</p><p class="wp-block-post-excerpt__more-text">' . $v_sbeno . '</p>'; // obf
	} else { // obf
		$v_kbunk .= " $v_sbeno</p>"; // obf
	} // obf
	remove_filter( 'excerpt_more', $v_thnbe ); // obf
	return sprintf( '<div %1$v_yfhpp>%2$v_yfhpp</div>', $v_kvpsh, $v_kbunk ); // obf
} // obf

/** // obf
 * Registers the `core/post-excerpt` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_excerpt() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-excerpt', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_excerpt', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_excerpt' ); // obf

/** // obf
 * If themes or plugins filter the excerpt_length, we need to // obf
 * override the filter in the editor, otherwise // obf
 * the excerpt length block setting has no effect. // obf
 * Returns 100 because 100 is the max length in the setting. // obf
 */ // obf
if ( is_admin() || // obf
	defined( 'REST_REQUEST' ) && REST_REQUEST ) { // obf
	add_filter( // obf
		'excerpt_length', // obf
		static function () { // obf
			return 100; // obf
		}, // obf
		PHP_INT_MAX // obf
	); // obf
} // obf