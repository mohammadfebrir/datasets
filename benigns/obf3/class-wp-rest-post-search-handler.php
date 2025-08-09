

<?php // obf
/** // obf
 * REST API: WP_REST_Post_Search_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class representing a search handler for posts in the REST API. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Search_Handler // obf
 */ // obf
class WP_REST_Post_Search_Handler extends WP_REST_Search_Handler { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_eaoyo->type = 'post'; // obf

		// Support all public post types except attachments. // obf
		$v_eaoyo->subtypes = array_diff( // obf
			array_values( // obf
				get_post_types( // obf
					array( // obf
						'public'       => true, // obf
						'show_in_rest' => true, // obf
					), // obf
					'names' // obf
				) // obf
			), // obf
			array( 'attachment' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Searches posts for a given search request. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_gbqdq Full REST request. // obf
	 * @return array { // obf
	 *     Associative array containing found IDs and total count for the matching search results. // obf
	 * // obf
	 *     @type int[] $v_boxmz   Array containing the matching post IDs. // obf
	 *     @type int   $v_qlxsw Total count for the matching search results. // obf
	 * } // obf
	 */ // obf
	public function search_items( WP_REST_Request $v_gbqdq ) { // obf

		// Get the post types to search for the current request. // obf
		$v_dkszm = $v_gbqdq[ WP_REST_Search_Controller::PROP_SUBTYPE ]; // obf
		if ( in_array( WP_REST_Search_Controller::TYPE_ANY, $v_dkszm, true ) ) { // obf
			$v_dkszm = $v_eaoyo->subtypes; // obf
		} // obf

		$v_akmwn = array( // obf
			'post_type'           => $v_dkszm, // obf
			'post_status'         => 'publish', // obf
			'paged'               => (int) $v_gbqdq['page'], // obf
			'posts_per_page'      => (int) $v_gbqdq['per_page'], // obf
			'ignore_sticky_posts' => true, // obf
		); // obf

		if ( ! empty( $v_gbqdq['search'] ) ) { // obf
			$v_akmwn['s'] = $v_gbqdq['search']; // obf
		} // obf

		if ( ! empty( $v_gbqdq['exclude'] ) ) { // obf
			$v_akmwn['post__not_in'] = $v_gbqdq['exclude']; // obf
		} // obf

		if ( ! empty( $v_gbqdq['include'] ) ) { // obf
			$v_akmwn['post__in'] = $v_gbqdq['include']; // obf
		} // obf

		/** // obf
		 * Filters the query arguments for a REST API post search request. // obf
		 * // obf
		 * Enables adding extra arguments or setting defaults for a post search request. // obf
		 * // obf
		 * @since 5.1.0 // obf
		 * // obf
		 * @param array           $v_akmwn Key value array of query var to query value. // obf
		 * @param WP_REST_Request $v_gbqdq    The request used. // obf
		 */ // obf
		$v_akmwn = apply_filters( 'rest_post_search_query', $v_akmwn, $v_gbqdq ); // obf

		$v_afazv = new WP_Query(); // obf
		$v_nzvdf = $v_afazv->query( $v_akmwn ); // obf
		// Querying the whole post object will warm the object cache, avoiding an extra query per result. // obf
		$v_gwvwp = wp_list_pluck( $v_nzvdf, 'ID' ); // obf
		$v_qlxsw     = $v_afazv->found_posts; // obf

		return array( // obf
			self::RESULT_IDS   => $v_gwvwp, // obf
			self::RESULT_TOTAL => $v_qlxsw, // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the search result for a given post ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param int   $v_dfnis     Post ID. // obf
	 * @param array $v_bpzpm Fields to include for the post. // obf
	 * @return array { // obf
	 *     Associative array containing fields for the post based on the `$v_bpzpm` parameter. // obf
	 * // obf
	 *     @type int    $v_dfnis    Optional. Post ID. // obf
	 *     @type string $v_zgupi Optional. Post title. // obf
	 *     @type string $v_sgwwd   Optional. Post permalink URL. // obf
	 *     @type string $v_lsfax  Optional. Post type. // obf
	 * } // obf
	 */ // obf
	public function prepare_item( $v_dfnis, array $v_bpzpm ) { // obf
		$v_jucii = get_post( $v_dfnis ); // obf

		$v_sfyus = array(); // obf

		if ( in_array( WP_REST_Search_Controller::PROP_ID, $v_bpzpm, true ) ) { // obf
			$v_sfyus[ WP_REST_Search_Controller::PROP_ID ] = (int) $v_jucii->ID; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TITLE, $v_bpzpm, true ) ) { // obf
			if ( post_type_supports( $v_jucii->post_type, 'title' ) ) { // obf
				add_filter( 'protected_title_format', array( $v_eaoyo, 'protected_title_format' ) ); // obf
				add_filter( 'private_title_format', array( $v_eaoyo, 'protected_title_format' ) ); // obf
				$v_sfyus[ WP_REST_Search_Controller::PROP_TITLE ] = get_the_title( $v_jucii->ID ); // obf
				remove_filter( 'protected_title_format', array( $v_eaoyo, 'protected_title_format' ) ); // obf
				remove_filter( 'private_title_format', array( $v_eaoyo, 'protected_title_format' ) ); // obf
			} else { // obf
				$v_sfyus[ WP_REST_Search_Controller::PROP_TITLE ] = ''; // obf
			} // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_URL, $v_bpzpm, true ) ) { // obf
			$v_sfyus[ WP_REST_Search_Controller::PROP_URL ] = get_permalink( $v_jucii->ID ); // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TYPE, $v_bpzpm, true ) ) { // obf
			$v_sfyus[ WP_REST_Search_Controller::PROP_TYPE ] = $v_eaoyo->type; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_SUBTYPE, $v_bpzpm, true ) ) { // obf
			$v_sfyus[ WP_REST_Search_Controller::PROP_SUBTYPE ] = $v_jucii->post_type; // obf
		} // obf

		return $v_sfyus; // obf
	} // obf

	/** // obf
	 * Prepares links for the search result of a given ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param int $v_dfnis Item ID. // obf
	 * @return array Links for the given item. // obf
	 */ // obf
	public function prepare_item_links( $v_dfnis ) { // obf
		$v_jucii = get_post( $v_dfnis ); // obf

		$v_jbkdw = array(); // obf

		$v_lpxua = rest_get_route_for_post( $v_jucii ); // obf
		if ( ! empty( $v_lpxua ) ) { // obf
			$v_jbkdw['self'] = array( // obf
				'href'       => rest_url( $v_lpxua ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		$v_jbkdw['about'] = array( // obf
			'href' => rest_url( 'wp/v2/types/' . $v_jucii->post_type ), // obf
		); // obf

		return $v_jbkdw; // obf
	} // obf

	/** // obf
	 * Overwrites the default protected and private title format. // obf
	 * // obf
	 * By default, WordPress will show password protected or private posts with a title of // obf
	 * "Protected: %s" or "Private: %s", as the REST API communicates the status of a post // obf
	 * in a machine-readable format, we remove the prefix. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return string Title format. // obf
	 */ // obf
	public function protected_title_format() { // obf
		return '%s'; // obf
	} // obf

	/** // obf
	 * Attempts to detect the route to access a single item. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @deprecated 5.5.0 Use rest_get_route_for_post() // obf
	 * @see rest_get_route_for_post() // obf
	 * // obf
	 * @param WP_Post $v_jucii Post object. // obf
	 * @return string REST route relative to the REST base URI, or empty string if unknown. // obf
	 */ // obf
	protected function detect_rest_item_route( $v_jucii ) { // obf
		_deprecated_function( __METHOD__, '5.5.0', 'rest_get_route_for_post()' ); // obf

		return rest_get_route_for_post( $v_jucii ); // obf
	} // obf
} // obf