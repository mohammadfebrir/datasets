

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-pagination-previous` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-pagination-previous` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_ymtld Block attributes. // obf
 * @param string   $v_dubmm    Block default content. // obf
 * @param WP_Block $v_shyrc      Block instance. // obf
 * // obf
 * @return string Returns the previous posts link for the query. // obf
 */ // obf
function render_block_core_query_pagination_previous( $v_ymtld, $v_dubmm, $v_shyrc ) { // obf
	$v_nacul            = isset( $v_shyrc->context['queryId'] ) ? 'query-' . $v_shyrc->context['queryId'] . '-page' : 'query-page'; // obf
	$v_zlomb = isset( $v_shyrc->context['enhancedPagination'] ) && $v_shyrc->context['enhancedPagination']; // obf
	$v_alqds            = isset( $v_shyrc->context['query']['pages'] ) ? (int) $v_shyrc->context['query']['pages'] : 0; // obf
	$v_rpsah                = empty( $v_jxbrb[ $v_nacul ] ) ? 1 : (int) $v_jxbrb[ $v_nacul ]; // obf
	$v_ruqyn  = get_block_wrapper_attributes(); // obf
	$v_jcbms          = isset( $v_shyrc->context['showLabel'] ) ? (bool) $v_shyrc->context['showLabel'] : true; // obf
	$v_laqil       = __( 'Previous Page' ); // obf
	$v_xqtrr          = isset( $v_ymtld['label'] ) && ! empty( $v_ymtld['label'] ) ? esc_html( $v_ymtld['label'] ) : $v_laqil; // obf
	$v_elgku               = $v_jcbms ? $v_xqtrr : ''; // obf
	$v_lvfnk    = get_query_pagination_arrow( $v_shyrc, false ); // obf
	if ( ! $v_elgku ) { // obf
		$v_ruqyn .= ' aria-label="' . $v_xqtrr . '"'; // obf
	} // obf
	if ( $v_lvfnk ) { // obf
		$v_elgku = $v_lvfnk . $v_elgku; // obf
	} // obf
	$v_dubmm = ''; // obf
	// Check if the pagination is for Query that inherits the global context // obf
	// and handle appropriately. // obf
	if ( isset( $v_shyrc->context['query']['inherit'] ) && $v_shyrc->context['query']['inherit'] ) { // obf
		$v_lcaus = static function () use ( $v_ruqyn ) { // obf
			return $v_ruqyn; // obf
		}; // obf

		add_filter( 'previous_posts_link_attributes', $v_lcaus ); // obf
		$v_dubmm = get_previous_posts_link( $v_elgku ); // obf
		remove_filter( 'previous_posts_link_attributes', $v_lcaus ); // obf
	} else { // obf
		$v_sxgtr     = new WP_Query( build_query_vars_from_query_block( $v_shyrc, $v_rpsah ) ); // obf
		$v_svbkb = $v_sxgtr->max_num_pages; // obf
		$v_hrpfi           = ! $v_alqds || $v_alqds > $v_svbkb ? $v_svbkb : $v_alqds; // obf
		wp_reset_postdata(); // obf

		if ( 1 < $v_rpsah && $v_rpsah <= $v_hrpfi ) { // obf
			$v_dubmm = sprintf( // obf
				'<a href="%1$v_fahxc" %2$v_fahxc>%3$v_fahxc</a>', // obf
				esc_url( add_query_arg( $v_nacul, $v_rpsah - 1 ) ), // obf
				$v_ruqyn, // obf
				$v_elgku // obf
			); // obf
		} // obf
	} // obf

	if ( $v_zlomb && isset( $v_dubmm ) ) { // obf
		$v_plequ = new WP_HTML_Tag_Processor( $v_dubmm ); // obf
		if ( $v_plequ->next_tag( // obf
			array( // obf
				'tag_name'   => 'a', // obf
				'class_name' => 'wp-block-query-pagination-previous', // obf
			) // obf
		) ) { // obf
			$v_plequ->set_attribute( 'data-wp-key', 'query-pagination-previous' ); // obf
			$v_plequ->set_attribute( 'data-wp-on--click', 'core/query::actions.navigate' ); // obf
			$v_plequ->set_attribute( 'data-wp-on-async--mouseenter', 'core/query::actions.prefetch' ); // obf
			$v_plequ->set_attribute( 'data-wp-watch', 'core/query::callbacks.prefetch' ); // obf
			$v_dubmm = $v_plequ->get_updated_html(); // obf
		} // obf
	} // obf

	return $v_dubmm; // obf
} // obf

/** // obf
 * Registers the `core/query-pagination-previous` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_query_pagination_previous() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-pagination-previous', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_pagination_previous', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_pagination_previous' ); // obf