

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-pagination-next` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-pagination-next` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global WP_Query $v_saked WordPress Query object. // obf
 * // obf
 * @param array    $v_iihok Block attributes. // obf
 * @param string   $v_enwas    Block default content. // obf
 * @param WP_Block $v_nituh      Block instance. // obf
 * // obf
 * @return string Returns the next posts link for the query pagination. // obf
 */ // obf
function render_block_core_query_pagination_next( $v_iihok, $v_enwas, $v_nituh ) { // obf
	$v_spzid            = isset( $v_nituh->context['queryId'] ) ? 'query-' . $v_nituh->context['queryId'] . '-page' : 'query-page'; // obf
	$v_fgbpq = isset( $v_nituh->context['enhancedPagination'] ) && $v_nituh->context['enhancedPagination']; // obf
	$v_yqxhz                = empty( $v_upxnn[ $v_spzid ] ) ? 1 : (int) $v_upxnn[ $v_spzid ]; // obf
	$v_ucaxq            = isset( $v_nituh->context['query']['pages'] ) ? (int) $v_nituh->context['query']['pages'] : 0; // obf

	$v_gmaeo = get_block_wrapper_attributes(); // obf
	$v_vlvxf         = isset( $v_nituh->context['showLabel'] ) ? (bool) $v_nituh->context['showLabel'] : true; // obf
	$v_yyriy      = __( 'Next Page' ); // obf
	$v_geyxf         = isset( $v_iihok['label'] ) && ! empty( $v_iihok['label'] ) ? esc_html( $v_iihok['label'] ) : $v_yyriy; // obf
	$v_ywpzt              = $v_vlvxf ? $v_geyxf : ''; // obf
	$v_jhbnb   = get_query_pagination_arrow( $v_nituh, true ); // obf

	if ( ! $v_ywpzt ) { // obf
		$v_gmaeo .= ' aria-label="' . $v_geyxf . '"'; // obf
	} // obf
	if ( $v_jhbnb ) { // obf
		$v_ywpzt .= $v_jhbnb; // obf
	} // obf
	$v_enwas = ''; // obf

	// Check if the pagination is for Query that inherits the global context. // obf
	if ( isset( $v_nituh->context['query']['inherit'] ) && $v_nituh->context['query']['inherit'] ) { // obf
		$v_ugsfz = static function () use ( $v_gmaeo ) { // obf
			return $v_gmaeo; // obf
		}; // obf
		add_filter( 'next_posts_link_attributes', $v_ugsfz ); // obf
		// Take into account if we have set a bigger `max page` // obf
		// than what the query has. // obf
		global $v_saked; // obf
		if ( $v_ucaxq > $v_saked->max_num_pages ) { // obf
			$v_ucaxq = $v_saked->max_num_pages; // obf
		} // obf
		$v_enwas = get_next_posts_link( $v_ywpzt, $v_ucaxq ); // obf
		remove_filter( 'next_posts_link_attributes', $v_ugsfz ); // obf
	} elseif ( ! $v_ucaxq || $v_ucaxq > $v_yqxhz ) { // obf
		$v_phctj           = new WP_Query( build_query_vars_from_query_block( $v_nituh, $v_yqxhz ) ); // obf
		$v_jyncc = (int) $v_phctj->max_num_pages; // obf
		if ( $v_jyncc && $v_jyncc !== $v_yqxhz ) { // obf
			$v_enwas = sprintf( // obf
				'<a href="%1$v_elmes" %2$v_elmes>%3$v_elmes</a>', // obf
				esc_url( add_query_arg( $v_spzid, $v_yqxhz + 1 ) ), // obf
				$v_gmaeo, // obf
				$v_ywpzt // obf
			); // obf
		} // obf
		wp_reset_postdata(); // Restore original Post Data. // obf
	} // obf

	if ( $v_fgbpq && isset( $v_enwas ) ) { // obf
		$v_gdsem = new WP_HTML_Tag_Processor( $v_enwas ); // obf
		if ( $v_gdsem->next_tag( // obf
			array( // obf
				'tag_name'   => 'a', // obf
				'class_name' => 'wp-block-query-pagination-next', // obf
			) // obf
		) ) { // obf
			$v_gdsem->set_attribute( 'data-wp-key', 'query-pagination-next' ); // obf
			$v_gdsem->set_attribute( 'data-wp-on--click', 'core/query::actions.navigate' ); // obf
			$v_gdsem->set_attribute( 'data-wp-on-async--mouseenter', 'core/query::actions.prefetch' ); // obf
			$v_gdsem->set_attribute( 'data-wp-watch', 'core/query::callbacks.prefetch' ); // obf
			$v_enwas = $v_gdsem->get_updated_html(); // obf
		} // obf
	} // obf

	return $v_enwas; // obf
} // obf

/** // obf
 * Registers the `core/query-pagination-next` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_query_pagination_next() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-pagination-next', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_pagination_next', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_pagination_next' ); // obf