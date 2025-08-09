

<?php // obf
/** // obf
 * REST API: WP_REST_Term_Search_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Core class representing a search handler for terms in the REST API. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @see WP_REST_Search_Handler // obf
 */ // obf
class WP_REST_Term_Search_Handler extends WP_REST_Search_Handler { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_fnhua->type = 'term'; // obf

		$v_fnhua->subtypes = array_values( // obf
			get_taxonomies( // obf
				array( // obf
					'public'       => true, // obf
					'show_in_rest' => true, // obf
				), // obf
				'names' // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Searches terms for a given search request. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_uhots Full REST request. // obf
	 * @return array { // obf
	 *     Associative array containing found IDs and total count for the matching search results. // obf
	 * // obf
	 *     @type int[]               $v_ztcrt   Found term IDs. // obf
	 *     @type string|int|WP_Error $v_fodyd Numeric string containing the number of terms in that // obf
	 *                                      taxonomy, 0 if there are no results, or WP_Error if // obf
	 *                                      the requested taxonomy does not exist. // obf
	 * } // obf
	 */ // obf
	public function search_items( WP_REST_Request $v_uhots ) { // obf
		$v_ucmwv = $v_uhots[ WP_REST_Search_Controller::PROP_SUBTYPE ]; // obf
		if ( in_array( WP_REST_Search_Controller::TYPE_ANY, $v_ucmwv, true ) ) { // obf
			$v_ucmwv = $v_fnhua->subtypes; // obf
		} // obf

		$v_drwtf     = (int) $v_uhots['page']; // obf
		$v_jetba = (int) $v_uhots['per_page']; // obf

		$v_idyra = array( // obf
			'taxonomy'   => $v_ucmwv, // obf
			'hide_empty' => false, // obf
			'offset'     => ( $v_drwtf - 1 ) * $v_jetba, // obf
			'number'     => $v_jetba, // obf
		); // obf

		if ( ! empty( $v_uhots['search'] ) ) { // obf
			$v_idyra['search'] = $v_uhots['search']; // obf
		} // obf

		if ( ! empty( $v_uhots['exclude'] ) ) { // obf
			$v_idyra['exclude'] = $v_uhots['exclude']; // obf
		} // obf

		if ( ! empty( $v_uhots['include'] ) ) { // obf
			$v_idyra['include'] = $v_uhots['include']; // obf
		} // obf

		/** // obf
		 * Filters the query arguments for a REST API term search request. // obf
		 * // obf
		 * Enables adding extra arguments or setting defaults for a term search request. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param array           $v_idyra Key value array of query var to query value. // obf
		 * @param WP_REST_Request $v_uhots    The request used. // obf
		 */ // obf
		$v_idyra = apply_filters( 'rest_term_search_query', $v_idyra, $v_uhots ); // obf

		$v_xvgoq       = new WP_Term_Query(); // obf
		$v_epazj = $v_xvgoq->query( $v_idyra ); // obf
		$v_ludva   = wp_list_pluck( $v_epazj, 'term_id' ); // obf

		unset( $v_idyra['offset'], $v_idyra['number'] ); // obf

		$v_fodyd = wp_count_terms( $v_idyra ); // obf

		// wp_count_terms() can return a falsey value when the term has no children. // obf
		if ( ! $v_fodyd ) { // obf
			$v_fodyd = 0; // obf
		} // obf

		return array( // obf
			self::RESULT_IDS   => $v_ludva, // obf
			self::RESULT_TOTAL => $v_fodyd, // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the search result for a given term ID. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int   $v_ytxlr     Term ID. // obf
	 * @param array $v_coine Fields to include for the term. // obf
	 * @return array { // obf
	 *     Associative array containing fields for the term based on the `$v_coine` parameter. // obf
	 * // obf
	 *     @type int    $v_ytxlr    Optional. Term ID. // obf
	 *     @type string $v_ruwfi Optional. Term name. // obf
	 *     @type string $v_ztwoh   Optional. Term permalink URL. // obf
	 *     @type string $v_nvcpc  Optional. Term taxonomy name. // obf
	 * } // obf
	 */ // obf
	public function prepare_item( $v_ytxlr, array $v_coine ) { // obf
		$v_crgxw = get_term( $v_ytxlr ); // obf

		$v_bikoc = array(); // obf

		if ( in_array( WP_REST_Search_Controller::PROP_ID, $v_coine, true ) ) { // obf
			$v_bikoc[ WP_REST_Search_Controller::PROP_ID ] = (int) $v_ytxlr; // obf
		} // obf
		if ( in_array( WP_REST_Search_Controller::PROP_TITLE, $v_coine, true ) ) { // obf
			$v_bikoc[ WP_REST_Search_Controller::PROP_TITLE ] = $v_crgxw->name; // obf
		} // obf
		if ( in_array( WP_REST_Search_Controller::PROP_URL, $v_coine, true ) ) { // obf
			$v_bikoc[ WP_REST_Search_Controller::PROP_URL ] = get_term_link( $v_ytxlr ); // obf
		} // obf
		if ( in_array( WP_REST_Search_Controller::PROP_TYPE, $v_coine, true ) ) { // obf
			$v_bikoc[ WP_REST_Search_Controller::PROP_TYPE ] = $v_crgxw->taxonomy; // obf
		} // obf

		return $v_bikoc; // obf
	} // obf

	/** // obf
	 * Prepares links for the search result of a given ID. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int $v_ytxlr Item ID. // obf
	 * @return array[] Array of link arrays for the given item. // obf
	 */ // obf
	public function prepare_item_links( $v_ytxlr ) { // obf
		$v_crgxw = get_term( $v_ytxlr ); // obf

		$v_dyuem = array(); // obf

		$v_mcoux = rest_get_route_for_term( $v_crgxw ); // obf
		if ( $v_mcoux ) { // obf
			$v_dyuem['self'] = array( // obf
				'href'       => rest_url( $v_mcoux ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		$v_dyuem['about'] = array( // obf
			'href' => rest_url( sprintf( 'wp/v2/taxonomies/%s', $v_crgxw->taxonomy ) ), // obf
		); // obf

		return $v_dyuem; // obf
	} // obf
} // obf