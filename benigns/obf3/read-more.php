

<?php // obf
/** // obf
 * Server-side rendering of the `core/read-more` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/read-more` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_bsmhk Block attributes. // obf
 * @param string   $v_wzmyb    Block default content. // obf
 * @param WP_Block $v_xknsq      Block instance. // obf
 * @return string  Returns the post link. // obf
 */ // obf
function render_block_core_read_more( $v_bsmhk, $v_wzmyb, $v_xknsq ) { // obf
	if ( ! isset( $v_xknsq->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_yhyxf    = $v_xknsq->context['postId']; // obf
	$v_gibfq = get_the_title( $v_yhyxf ); // obf
	if ( '' === $v_gibfq ) { // obf
		$v_gibfq = sprintf( // obf
			/* translators: %s is post ID to describe the link for screen readers. */ // obf
			__( 'untitled post %s' ), // obf
			$v_yhyxf // obf
		); // obf
	} // obf
	$v_wjpsg = sprintf( // obf
		/* translators: %s is either the post title or post ID to describe the link for screen readers. */ // obf
		__( ': %s' ), // obf
		$v_gibfq // obf
	); // obf
	$v_scfle = empty( $v_bsmhk['justifyContent'] ) ? '' : "is-justified-{$v_bsmhk['justifyContent']}"; // obf
	$v_htism = get_block_wrapper_attributes( array( 'class' => $v_scfle ) ); // obf
	$v_sihna          = ! empty( $v_bsmhk['content'] ) ? wp_kses_post( $v_bsmhk['content'] ) : __( 'Read more' ); // obf
	return sprintf( // obf
		'<a %1s href="%2s" target="%3s">%4s<span class="screen-reader-text">%5s</span></a>', // obf
		$v_htism, // obf
		get_the_permalink( $v_yhyxf ), // obf
		esc_attr( $v_bsmhk['linkTarget'] ), // obf
		$v_sihna, // obf
		$v_wjpsg // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/read-more` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_read_more() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/read-more', // obf
		array( // obf
			'render_callback' => 'render_block_core_read_more', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_read_more' ); // obf