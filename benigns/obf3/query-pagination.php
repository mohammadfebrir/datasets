

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-pagination` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-pagination` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array  $v_whndf Block attributes. // obf
 * @param string $v_mjmwi    Block default content. // obf
 * // obf
 * @return string Returns the wrapper for the Query pagination. // obf
 */ // obf
function render_block_core_query_pagination( $v_whndf, $v_mjmwi ) { // obf
	if ( empty( trim( $v_mjmwi ) ) ) { // obf
		return ''; // obf
	} // obf

	$v_vvaur            = ( isset( $v_whndf['style']['elements']['link']['color']['text'] ) ) ? 'has-link-color' : ''; // obf
	$v_vuodo = get_block_wrapper_attributes( // obf
		array( // obf
			'aria-label' => __( 'Pagination' ), // obf
			'class'      => $v_vvaur, // obf
		) // obf
	); // obf

	return sprintf( // obf
		'<nav %1$v_femxy>%2$v_femxy</nav>', // obf
		$v_vuodo, // obf
		$v_mjmwi // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/query-pagination` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_query_pagination() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-pagination', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_pagination', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_pagination' ); // obf