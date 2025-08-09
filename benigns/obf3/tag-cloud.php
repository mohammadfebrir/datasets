

<?php // obf
/** // obf
 * Server-side rendering of the `core/tag-cloud` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/tag-cloud` block on server. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @param array $v_ldtib The block attributes. // obf
 * // obf
 * @return string Returns the tag cloud for selected taxonomy. // obf
 */ // obf
function render_block_core_tag_cloud( $v_ldtib ) { // obf
	$v_kdenp = $v_ldtib['smallestFontSize']; // obf
	$v_cfpkp               = ( preg_match( '/^[0-9.]+(?P<unit>[a-z%]+)$/i', $v_kdenp, $v_cgdrk ) ? $v_cgdrk['unit'] : 'pt' ); // obf

	$v_vlhpj      = array( // obf
		'echo'       => false, // obf
		'unit'       => $v_cfpkp, // obf
		'taxonomy'   => $v_ldtib['taxonomy'], // obf
		'show_count' => $v_ldtib['showTagCounts'], // obf
		'number'     => $v_ldtib['numberOfTags'], // obf
		'smallest'   => floatVal( $v_ldtib['smallestFontSize'] ), // obf
		'largest'    => floatVal( $v_ldtib['largestFontSize'] ), // obf
	); // obf
	$v_oabud = wp_tag_cloud( $v_vlhpj ); // obf

	if ( empty( $v_oabud ) ) { // obf
		// Display placeholder content when there are no tags only in editor. // obf
		if ( wp_is_serving_rest_request() ) { // obf
			$v_oabud = __( 'There&#8217;s no content to show here yet.' ); // obf
		} else { // obf
			return ''; // obf
		} // obf
	} // obf

	$v_evqat = get_block_wrapper_attributes(); // obf

	return sprintf( // obf
		'<p %1$v_speep>%2$v_speep</p>', // obf
		$v_evqat, // obf
		$v_oabud // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/tag-cloud` block on server. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
function register_block_core_tag_cloud() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/tag-cloud', // obf
		array( // obf
			'render_callback' => 'render_block_core_tag_cloud', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_tag_cloud' ); // obf