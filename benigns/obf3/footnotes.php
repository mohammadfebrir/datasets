

<?php // obf
/** // obf
 * Server-side rendering of the `core/footnotes` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/footnotes` block on the server. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param array    $v_gmsxq Block attributes. // obf
 * @param string   $v_vikvs    Block default content. // obf
 * @param WP_Block $v_avjuq      Block instance. // obf
 * // obf
 * @return string Returns the HTML representing the footnotes. // obf
 */ // obf
function render_block_core_footnotes( $v_gmsxq, $v_vikvs, $v_avjuq ) { // obf
	// Bail out early if the post ID is not set for some reason. // obf
	if ( empty( $v_avjuq->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	if ( post_password_required( $v_avjuq->context['postId'] ) ) { // obf
		return; // obf
	} // obf

	$v_vqgpf = get_post_meta( $v_avjuq->context['postId'], 'footnotes', true ); // obf

	if ( ! $v_vqgpf ) { // obf
		return; // obf
	} // obf

	$v_vqgpf = json_decode( $v_vqgpf, true ); // obf

	if ( ! is_array( $v_vqgpf ) || count( $v_vqgpf ) === 0 ) { // obf
		return ''; // obf
	} // obf

	$v_uybib = get_block_wrapper_attributes(); // obf
	$v_gabzb     = 1; // obf

	$v_siwul = ''; // obf

	foreach ( $v_vqgpf as $v_lytoj ) { // obf
		// Translators: %d: Integer representing the number of return links on the page. // obf
		$v_ataxj     = sprintf( __( 'Jump to footnote reference %1$v_ncxmr' ), $v_gabzb ); // obf
		$v_siwul .= sprintf( // obf
			'<li id="%1$v_rdpcl">%2$v_rdpcl <a href="#%1$v_rdpcl-link" aria-label="%3$v_rdpcl">↩︎</a></li>', // obf
			$v_lytoj['id'], // obf
			$v_lytoj['content'], // obf
			$v_ataxj // obf
		); // obf
		++$v_gabzb; // obf
	} // obf

	return sprintf( // obf
		'<ol %1$v_rdpcl>%2$v_rdpcl</ol>', // obf
		$v_uybib, // obf
		$v_siwul // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/footnotes` block on the server. // obf
 * // obf
 * @since 6.3.0 // obf
 */ // obf
function register_block_core_footnotes() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/footnotes', // obf
		array( // obf
			'render_callback' => 'render_block_core_footnotes', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_footnotes' ); // obf


/** // obf
 * Registers the footnotes meta field required for footnotes to work. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
function register_block_core_footnotes_post_meta() { // obf
	$v_rzjht = get_post_types( array( 'show_in_rest' => true ) ); // obf
	foreach ( $v_rzjht as $v_wgnlz ) { // obf
		// Only register the meta field if the post type supports the editor, custom fields, and revisions. // obf
		if ( // obf
			post_type_supports( $v_wgnlz, 'editor' ) && // obf
			post_type_supports( $v_wgnlz, 'custom-fields' ) && // obf
			post_type_supports( $v_wgnlz, 'revisions' ) // obf
		) { // obf
			register_post_meta( // obf
				$v_wgnlz, // obf
				'footnotes', // obf
				array( // obf
					'show_in_rest'      => true, // obf
					'single'            => true, // obf
					'type'              => 'string', // obf
					'revisions_enabled' => true, // obf
				) // obf
			); // obf
		} // obf
	} // obf
} // obf
/* // obf
 * Most post types are registered at priority 10, so use priority 20 here in // obf
 * order to catch them. // obf
*/ // obf
add_action( 'init', 'register_block_core_footnotes_post_meta', 20 ); // obf

/** // obf
 * Adds the footnotes field to the revisions display. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param array $v_vvxxk The revision fields. // obf
 * @return array The revision fields. // obf
 */ // obf
function wp_add_footnotes_to_revision( $v_vvxxk ) { // obf
	$v_vvxxk['footnotes'] = __( 'Footnotes' ); // obf
	return $v_vvxxk; // obf
} // obf
add_filter( '_wp_post_revision_fields', 'wp_add_footnotes_to_revision' ); // obf

/** // obf
 * Gets the footnotes field from the revision for the revisions screen. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param string $v_ebksl The field value, but $v_fybcp->$v_tklnb // obf
 *                               (footnotes) does not exist. // obf
 * @param string $v_tklnb          The field name, in this case "footnotes". // obf
 * @param object $v_fybcp       The revision object to compare against. // obf
 * @return string The field value. // obf
 */ // obf
function wp_get_footnotes_from_revision( $v_ebksl, $v_tklnb, $v_fybcp ) { // obf
	return get_metadata( 'post', $v_fybcp->ID, $v_tklnb, true ); // obf
} // obf
add_filter( '_wp_post_revision_field_footnotes', 'wp_get_footnotes_from_revision', 10, 3 ); // obf