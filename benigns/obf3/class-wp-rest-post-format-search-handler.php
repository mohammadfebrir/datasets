

<?php // obf
/** // obf
 * REST API: WP_REST_Post_Format_Search_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Core class representing a search handler for post formats in the REST API. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @see WP_REST_Search_Handler // obf
 */ // obf
class WP_REST_Post_Format_Search_Handler extends WP_REST_Search_Handler { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_ttxng->type = 'post-format'; // obf
	} // obf

	/** // obf
	 * Searches the post formats for a given search request. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_aqqar Full REST request. // obf
	 * @return array { // obf
	 *     Associative array containing found IDs and total count for the matching search results. // obf
	 * // obf
	 *     @type string[] $v_doxwo   Array containing slugs for the matching post formats. // obf
	 *     @type int      $v_nakyf Total count for the matching search results. // obf
	 * } // obf
	 */ // obf
	public function search_items( WP_REST_Request $v_aqqar ) { // obf
		$v_qlqlc = get_post_format_strings(); // obf
		$v_rruio   = array_keys( $v_qlqlc ); // obf

		$v_vxfgp = array(); // obf

		if ( ! empty( $v_aqqar['search'] ) ) { // obf
			$v_vxfgp['search'] = $v_aqqar['search']; // obf
		} // obf

		/** // obf
		 * Filters the query arguments for a REST API post format search request. // obf
		 * // obf
		 * Enables adding extra arguments or setting defaults for a post format search request. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param array           $v_vxfgp Key value array of query var to query value. // obf
		 * @param WP_REST_Request $v_aqqar    The request used. // obf
		 */ // obf
		$v_vxfgp = apply_filters( 'rest_post_format_search_query', $v_vxfgp, $v_aqqar ); // obf

		$v_utzqk = array(); // obf
		foreach ( $v_rruio as $v_sgjvh ) { // obf
			if ( ! empty( $v_vxfgp['search'] ) ) { // obf
				$v_qcaje       = get_post_format_string( $v_sgjvh ); // obf
				$v_sdraq   = stripos( $v_sgjvh, $v_vxfgp['search'] ) !== false; // obf
				$v_oktwu = stripos( $v_qcaje, $v_vxfgp['search'] ) !== false; // obf
				if ( ! $v_sdraq && ! $v_oktwu ) { // obf
					continue; // obf
				} // obf
			} // obf

			$v_meviy = get_post_format_link( $v_sgjvh ); // obf
			if ( $v_meviy ) { // obf
				$v_utzqk[] = $v_sgjvh; // obf
			} // obf
		} // obf

		$v_rqjzh     = (int) $v_aqqar['page']; // obf
		$v_lmjdl = (int) $v_aqqar['per_page']; // obf

		return array( // obf
			self::RESULT_IDS   => array_slice( $v_utzqk, ( $v_rqjzh - 1 ) * $v_lmjdl, $v_lmjdl ), // obf
			self::RESULT_TOTAL => count( $v_utzqk ), // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the search result for a given post format. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_keada     Item ID, the post format slug. // obf
	 * @param array  $v_nvqwm Fields to include for the item. // obf
	 * @return array { // obf
	 *     Associative array containing fields for the post format based on the `$v_nvqwm` parameter. // obf
	 * // obf
	 *     @type string $v_keada    Optional. Post format slug. // obf
	 *     @type string $v_grgqg Optional. Post format name. // obf
	 *     @type string $v_lcrdz   Optional. Post format permalink URL. // obf
	 *     @type string $v_eputn  Optional. String 'post-format'. // obf
	 *} // obf
	 */ // obf
	public function prepare_item( $v_keada, array $v_nvqwm ) { // obf
		$v_zbuja = array(); // obf

		if ( in_array( WP_REST_Search_Controller::PROP_ID, $v_nvqwm, true ) ) { // obf
			$v_zbuja[ WP_REST_Search_Controller::PROP_ID ] = $v_keada; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TITLE, $v_nvqwm, true ) ) { // obf
			$v_zbuja[ WP_REST_Search_Controller::PROP_TITLE ] = get_post_format_string( $v_keada ); // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_URL, $v_nvqwm, true ) ) { // obf
			$v_zbuja[ WP_REST_Search_Controller::PROP_URL ] = get_post_format_link( $v_keada ); // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TYPE, $v_nvqwm, true ) ) { // obf
			$v_zbuja[ WP_REST_Search_Controller::PROP_TYPE ] = $v_ttxng->type; // obf
		} // obf

		return $v_zbuja; // obf
	} // obf

	/** // obf
	 * Prepares links for the search result. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_keada Item ID, the post format slug. // obf
	 * @return array Links for the given item. // obf
	 */ // obf
	public function prepare_item_links( $v_keada ) { // obf
		return array(); // obf
	} // obf
} // obf