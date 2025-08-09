

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-terms` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-terms` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_hcehi Block attributes. // obf
 * @param string   $v_imoxb    Block default content. // obf
 * @param WP_Block $v_wdrtl      Block instance. // obf
 * @return string Returns the filtered post terms for the current post wrapped inside "a" tags. // obf
 */ // obf
function render_block_core_post_terms( $v_hcehi, $v_imoxb, $v_wdrtl ) { // obf
	if ( ! isset( $v_wdrtl->context['postId'] ) || ! isset( $v_hcehi['term'] ) ) { // obf
		return ''; // obf
	} // obf

	if ( ! is_taxonomy_viewable( $v_hcehi['term'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_vrxha = array( 'taxonomy-' . $v_hcehi['term'] ); // obf
	if ( isset( $v_hcehi['textAlign'] ) ) { // obf
		$v_vrxha[] = 'has-text-align-' . $v_hcehi['textAlign']; // obf
	} // obf
	if ( isset( $v_hcehi['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_vrxha[] = 'has-link-color'; // obf
	} // obf

	$v_fdlmx = empty( $v_hcehi['separator'] ) ? ' ' : $v_hcehi['separator']; // obf

	$v_jqawz = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_vrxha ) ) ); // obf

	$v_cmvpz = "<div $v_jqawz>"; // obf
	if ( isset( $v_hcehi['prefix'] ) && $v_hcehi['prefix'] ) { // obf
		$v_cmvpz .= '<span class="wp-block-post-terms__prefix">' . $v_hcehi['prefix'] . '</span>'; // obf
	} // obf

	$v_vjunu = '</div>'; // obf
	if ( isset( $v_hcehi['suffix'] ) && $v_hcehi['suffix'] ) { // obf
		$v_vjunu = '<span class="wp-block-post-terms__suffix">' . $v_hcehi['suffix'] . '</span>' . $v_vjunu; // obf
	} // obf

	$v_bqywd = get_the_term_list( // obf
		$v_wdrtl->context['postId'], // obf
		$v_hcehi['term'], // obf
		wp_kses_post( $v_cmvpz ), // obf
		'<span class="wp-block-post-terms__separator">' . esc_html( $v_fdlmx ) . '</span>', // obf
		wp_kses_post( $v_vjunu ) // obf
	); // obf

	if ( is_wp_error( $v_bqywd ) || empty( $v_bqywd ) ) { // obf
		return ''; // obf
	} // obf

	return $v_bqywd; // obf
} // obf

/** // obf
 * Returns the available variations for the `core/post-terms` block. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @return array The available variations for the block. // obf
 */ // obf
function block_core_post_terms_build_variations() { // obf
	$v_jhdux = get_taxonomies( // obf
		array( // obf
			'publicly_queryable' => true, // obf
			'show_in_rest'       => true, // obf
		), // obf
		'objects' // obf
	); // obf

	// Split the available taxonomies to `built_in` and custom ones, // obf
	// in order to prioritize the `built_in` taxonomies at the // obf
	// search results. // obf
	$v_vsyml         = array(); // obf
	$v_ojwag = array(); // obf

	// Create and register the eligible taxonomies variations. // obf
	foreach ( $v_jhdux as $v_almyt ) { // obf
		$v_hrmhl = array( // obf
			'name'        => $v_almyt->name, // obf
			'title'       => $v_almyt->label, // obf
			'description' => sprintf( // obf
				/* translators: %s: taxonomy's label */ // obf
				__( 'Display a list of assigned terms from the taxonomy: %s' ), // obf
				$v_almyt->label // obf
			), // obf
			'attributes'  => array( // obf
				'term' => $v_almyt->name, // obf
			), // obf
			'isActive'    => array( 'term' ), // obf
			'scope'       => array( 'inserter', 'transform' ), // obf
		); // obf
		// Set the category variation as the default one. // obf
		if ( 'category' === $v_almyt->name ) { // obf
			$v_hrmhl['isDefault'] = true; // obf
		} // obf
		if ( $v_almyt->_builtin ) { // obf
			$v_vsyml[] = $v_hrmhl; // obf
		} else { // obf
			$v_ojwag[] = $v_hrmhl; // obf
		} // obf
	} // obf

	return array_merge( $v_vsyml, $v_ojwag ); // obf
} // obf

/** // obf
 * Registers the `core/post-terms` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_terms() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-terms', // obf
		array( // obf
			'render_callback'    => 'render_block_core_post_terms', // obf
			'variation_callback' => 'block_core_post_terms_build_variations', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_terms' ); // obf