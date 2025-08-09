

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-no-results` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-no-results` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @global WP_Query $v_dpgwk WordPress Query object. // obf
 * // obf
 * @param array    $v_adylc Block attributes. // obf
 * @param string   $v_fduvq    Block default content. // obf
 * @param WP_Block $v_iexpd      Block instance. // obf
 * // obf
 * @return string Returns the wrapper for the no results block. // obf
 */ // obf
function render_block_core_query_no_results( $v_adylc, $v_fduvq, $v_iexpd ) { // obf
	if ( empty( trim( $v_fduvq ) ) ) { // obf
		return ''; // obf
	} // obf

	$v_wmthi = isset( $v_iexpd->context['queryId'] ) ? 'query-' . $v_iexpd->context['queryId'] . '-page' : 'query-page'; // obf
	$v_dkfkh     = empty( $v_aacko[ $v_wmthi ] ) ? 1 : (int) $v_aacko[ $v_wmthi ]; // obf

	// Override the custom query with the global query if needed. // obf
	$v_udagp = ( isset( $v_iexpd->context['query']['inherit'] ) && $v_iexpd->context['query']['inherit'] ); // obf
	if ( $v_udagp ) { // obf
		global $v_dpgwk; // obf
		$v_tcajt = $v_dpgwk; // obf
	} else { // obf
		$v_yninb = build_query_vars_from_query_block( $v_iexpd, $v_dkfkh ); // obf
		$v_tcajt      = new WP_Query( $v_yninb ); // obf
	} // obf

	if ( $v_tcajt->post_count > 0 ) { // obf
		return ''; // obf
	} // obf

	$v_mnggp            = ( isset( $v_adylc['style']['elements']['link']['color']['text'] ) ) ? 'has-link-color' : ''; // obf
	$v_tkdio = get_block_wrapper_attributes( array( 'class' => $v_mnggp ) ); // obf
	return sprintf( // obf
		'<div %1$v_dlkrz>%2$v_dlkrz</div>', // obf
		$v_tkdio, // obf
		$v_fduvq // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/query-no-results` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_query_no_results() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-no-results', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_no_results', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_no_results' ); // obf