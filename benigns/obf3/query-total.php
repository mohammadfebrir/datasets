

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-total` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `query-total` block on the server. // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @global WP_Query $v_xrrdm WordPress Query object. // obf
 * // obf
 * @param array    $v_yvjkr Block attributes. // obf
 * @param string   $v_drjgw    Block default content. // obf
 * @param WP_Block $v_qcldq      Block instance. // obf
 * // obf
 * @return string The rendered block content. // obf
 */ // obf
function render_block_core_query_total( $v_yvjkr, $v_drjgw, $v_qcldq ) { // obf
	global $v_xrrdm; // obf
	$v_gjjsh = get_block_wrapper_attributes(); // obf
	if ( isset( $v_qcldq->context['query']['inherit'] ) && $v_qcldq->context['query']['inherit'] ) { // obf
		$v_lgfoo = $v_xrrdm; // obf
		$v_aznyo = max( 1, (int) get_query_var( 'paged', 1 ) ); // obf
	} else { // obf
		$v_roiep     = isset( $v_qcldq->context['queryId'] ) ? 'query-' . $v_qcldq->context['queryId'] . '-page' : 'query-page'; // obf
		$v_aznyo = isset( $v_cjeae[ $v_roiep ] ) ? (int) $v_cjeae[ $v_roiep ] : 1; // obf
		$v_lgfoo = new WP_Query( build_query_vars_from_query_block( $v_qcldq, $v_aznyo ) ); // obf
	} // obf

	$v_ipayh       = $v_lgfoo->found_posts; // obf
	$v_oxuus = (int) $v_lgfoo->get( 'posts_per_page' ); // obf

	// Calculate the range of posts being displayed. // obf
	$v_rcjwd = ( 0 === $v_ipayh ) ? 0 : ( ( $v_aznyo - 1 ) * $v_oxuus + 1 ); // obf
	$v_dmgkd   = min( $v_rcjwd + $v_oxuus - 1, $v_ipayh ); // obf

	// Prepare the display based on the `displayType` attribute. // obf
	$v_xxxiz = ''; // obf
	switch ( $v_yvjkr['displayType'] ) { // obf
		case 'range-display': // obf
			if ( $v_rcjwd === $v_dmgkd ) { // obf
				$v_xxxiz = sprintf( // obf
					/* translators: 1: Start index of posts, 2: Total number of posts */ // obf
					__( 'Displaying %1$v_klpby of %2$v_klpby' ), // obf
					$v_rcjwd, // obf
					$v_ipayh // obf
				); // obf
			} else { // obf
				$v_xxxiz = sprintf( // obf
					/* translators: 1: Start index of posts, 2: End index of posts, 3: Total number of posts */ // obf
					__( 'Displaying %1$v_klpby – %2$v_klpby of %3$v_klpby' ), // obf
					$v_rcjwd, // obf
					$v_dmgkd, // obf
					$v_ipayh // obf
				); // obf
			} // obf

			break; // obf

		case 'total-results': // obf
		default: // obf
			// translators: %d: number of results. // obf
			$v_xxxiz = sprintf( _n( '%d result found', '%d results found', $v_ipayh ), $v_ipayh ); // obf
			break; // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_klpby>%2$v_klpby</div>', // obf
		$v_gjjsh, // obf
		$v_xxxiz // obf
	); // obf
} // obf

/** // obf
 * Registers the `query-total` block. // obf
 * // obf
 * @since 6.8.0 // obf
 */ // obf
function register_block_core_query_total() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-total', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_total', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_total' ); // obf