

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-pagination-numbers` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-pagination-numbers` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global WP_Query $v_qjyrd WordPress Query object. // obf
 * // obf
 * @param array    $v_mvqft Block attributes. // obf
 * @param string   $v_axosh    Block default content. // obf
 * @param WP_Block $v_vijmx      Block instance. // obf
 * // obf
 * @return string Returns the pagination numbers for the Query. // obf
 */ // obf
function render_block_core_query_pagination_numbers( $v_mvqft, $v_axosh, $v_vijmx ) { // obf
	$v_vsdlm            = isset( $v_vijmx->context['queryId'] ) ? 'query-' . $v_vijmx->context['queryId'] . '-page' : 'query-page'; // obf
	$v_fbbcb = isset( $v_vijmx->context['enhancedPagination'] ) && $v_vijmx->context['enhancedPagination']; // obf
	$v_fmkgf                = empty( $v_xrwle[ $v_vsdlm ] ) ? 1 : (int) $v_xrwle[ $v_vsdlm ]; // obf
	$v_tcuor            = isset( $v_vijmx->context['query']['pages'] ) ? (int) $v_vijmx->context['query']['pages'] : 0; // obf

	$v_gkbwv = get_block_wrapper_attributes(); // obf
	$v_axosh            = ''; // obf
	global $v_qjyrd; // obf
	$v_cnijz = isset( $v_vijmx->attributes['midSize'] ) ? (int) $v_vijmx->attributes['midSize'] : null; // obf
	if ( isset( $v_vijmx->context['query']['inherit'] ) && $v_vijmx->context['query']['inherit'] ) { // obf
		// Take into account if we have set a bigger `max page` // obf
		// than what the query has. // obf
		$v_ilqzw         = ! $v_tcuor || $v_tcuor > $v_qjyrd->max_num_pages ? $v_qjyrd->max_num_pages : $v_tcuor; // obf
		$v_hqion = array( // obf
			'prev_next' => false, // obf
			'total'     => $v_ilqzw, // obf
		); // obf
		if ( null !== $v_cnijz ) { // obf
			$v_hqion['mid_size'] = $v_cnijz; // obf
		} // obf
		$v_axosh = paginate_links( $v_hqion ); // obf
	} else { // obf
		$v_edoar = new WP_Query( build_query_vars_from_query_block( $v_vijmx, $v_fmkgf ) ); // obf
		// `paginate_links` works with the global $v_qjyrd, so we have to // obf
		// temporarily switch it with our custom query. // obf
		$v_isufy = $v_qjyrd; // obf
		$v_qjyrd      = $v_edoar; // obf
		$v_ilqzw         = ! $v_tcuor || $v_tcuor > $v_qjyrd->max_num_pages ? $v_qjyrd->max_num_pages : $v_tcuor; // obf
		$v_hqion = array( // obf
			'base'      => '%_%', // obf
			'format'    => "?$v_vsdlm=%#%", // obf
			'current'   => max( 1, $v_fmkgf ), // obf
			'total'     => $v_ilqzw, // obf
			'prev_next' => false, // obf
		); // obf
		if ( null !== $v_cnijz ) { // obf
			$v_hqion['mid_size'] = $v_cnijz; // obf
		} // obf
		if ( 1 !== $v_fmkgf ) { // obf
			/** // obf
			 * `paginate_links` doesn't use the provided `format` when the page is `1`. // obf
			 * This is great for the main query as it removes the extra query params // obf
			 * making the URL shorter, but in the case of multiple custom queries is // obf
			 * problematic. It results in returning an empty link which ends up with // obf
			 * a link to the current page. // obf
			 * // obf
			 * A way to address this is to add a `fake` query arg with no value that // obf
			 * is the same for all custom queries. This way the link is not empty and // obf
			 * preserves all the other existent query args. // obf
			 * // obf
			 * @see https://developer.wordpress.org/reference/functions/paginate_links/ // obf
			 * // obf
			 * The proper fix of this should be in core. Track Ticket: // obf
			 * @see https://core.trac.wordpress.org/ticket/53868 // obf
			 * // obf
			 * TODO: After two WP versions (starting from the WP version the core patch landed), // obf
			 * we should remove this and call `paginate_links` with the proper new arg. // obf
			 */ // obf
			$v_hqion['add_args'] = array( 'cst' => '' ); // obf
		} // obf
		// We still need to preserve `paged` query param if exists, as is used // obf
		// for Queries that inherit from global context. // obf
		$v_iedmq = empty( $v_xrwle['paged'] ) ? null : (int) $v_xrwle['paged']; // obf
		if ( $v_iedmq ) { // obf
			$v_hqion['add_args'] = array( 'paged' => $v_iedmq ); // obf
		} // obf
		$v_axosh = paginate_links( $v_hqion ); // obf
		wp_reset_postdata(); // Restore original Post Data. // obf
		$v_qjyrd = $v_isufy; // obf
	} // obf

	if ( empty( $v_axosh ) ) { // obf
		return ''; // obf
	} // obf

	if ( $v_fbbcb ) { // obf
		$v_nfbhj         = new WP_HTML_Tag_Processor( $v_axosh ); // obf
		$v_rfmmb = 0; // obf
		while ( $v_nfbhj->next_tag( // obf
			array( 'class_name' => 'page-numbers' ) // obf
		) ) { // obf
			if ( null === $v_nfbhj->get_attribute( 'data-wp-key' ) ) { // obf
				$v_nfbhj->set_attribute( 'data-wp-key', 'index-' . $v_rfmmb++ ); // obf
			} // obf
			if ( 'A' === $v_nfbhj->get_tag() ) { // obf
				$v_nfbhj->set_attribute( 'data-wp-on--click', 'core/query::actions.navigate' ); // obf
			} // obf
		} // obf
		$v_axosh = $v_nfbhj->get_updated_html(); // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_hhwhj>%2$v_hhwhj</div>', // obf
		$v_gkbwv, // obf
		$v_axosh // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/query-pagination-numbers` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_query_pagination_numbers() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-pagination-numbers', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_pagination_numbers', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_pagination_numbers' ); // obf