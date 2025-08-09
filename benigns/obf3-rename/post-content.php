

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-content` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-content` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_atwbx Block attributes. // obf
 * @param string   $v_vjing    Block default content. // obf
 * @param WP_Block $v_wapsy      Block instance. // obf
 * @return string Returns the filtered post content of the current post. // obf
 */ // obf
function render_block_core_post_content( $v_atwbx, $v_vjing, $v_wapsy ) { // obf
	static $v_ficwp = array(); // obf

	if ( ! isset( $v_wapsy->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_yefks = $v_wapsy->context['postId']; // obf

	if ( isset( $v_ficwp[ $v_yefks ] ) ) { // obf
		// WP_DEBUG_DISPLAY must only be honored when WP_DEBUG. This precedent // obf
		// is set in `wp_debug_mode()`. // obf
		$v_zhldg = WP_DEBUG && WP_DEBUG_DISPLAY; // obf

		return $v_zhldg ? // obf
			// translators: Visible only in the front end, this warning takes the place of a faulty block. // obf
			__( '[block rendering halted]' ) : // obf
			''; // obf
	} // obf

	$v_ficwp[ $v_yefks ] = true; // obf

	// When inside the main loop, we want to use queried object // obf
	// so that `the_preview` for the current post can apply. // obf
	// We force this behavior by omitting the third argument (post ID) from the `get_the_content`. // obf
	$v_vjing = get_the_content(); // obf
	// Check for nextpage to display page links for paginated posts. // obf
	if ( has_block( 'core/nextpage' ) ) { // obf
		$v_vjing .= wp_link_pages( array( 'echo' => 0 ) ); // obf
	} // obf

	/** This filter is documented in wp-includes/post-template.php */ // obf
	$v_vjing = apply_filters( 'the_content', str_replace( ']]>', ']]&gt;', $v_vjing ) ); // obf
	unset( $v_ficwp[ $v_yefks ] ); // obf

	if ( empty( $v_vjing ) ) { // obf
		return ''; // obf
	} // obf

	$v_adtdr = get_block_wrapper_attributes( array( 'class' => 'entry-content' ) ); // obf

	return ( // obf
		'<div ' . $v_adtdr . '>' . // obf
			$v_vjing . // obf
		'</div>' // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/post-content` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_content() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-content', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_content', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_content' ); // obf