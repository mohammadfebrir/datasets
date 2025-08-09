

<?php // obf
/** // obf
 * REST API: WP_REST_Search_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core base class representing a search handler for an object type in the REST API. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_REST_Search_Handler { // obf

	/** // obf
	 * Field containing the IDs in the search result. // obf
	 */ // obf
	const RESULT_IDS = 'ids'; // obf

	/** // obf
	 * Field containing the total count in the search result. // obf
	 */ // obf
	const RESULT_TOTAL = 'total'; // obf

	/** // obf
	 * Object type managed by this search handler. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_eweww = ''; // obf

	/** // obf
	 * Object subtypes managed by this search handler. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_jxdrg = array(); // obf

	/** // obf
	 * Gets the object type managed by this search handler. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return string Object type identifier. // obf
	 */ // obf
	public function get_type() { // obf
		return $v_ymnwz->type; // obf
	} // obf

	/** // obf
	 * Gets the object subtypes managed by this search handler. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return string[] Array of object subtype identifiers. // obf
	 */ // obf
	public function get_subtypes() { // obf
		return $v_ymnwz->subtypes; // obf
	} // obf

	/** // obf
	 * Searches the object type content for a given search request. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dkmyl Full REST request. // obf
	 * @return array Associative array containing an `WP_REST_Search_Handler::RESULT_IDS` containing // obf
	 *               an array of found IDs and `WP_REST_Search_Handler::RESULT_TOTAL` containing the // obf
	 *               total count for the matching search results. // obf
	 */ // obf
	abstract public function search_items( WP_REST_Request $v_dkmyl ); // obf

	/** // obf
	 * Prepares the search result for a given ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.6.0 The `$v_sxemm` parameter can accept a string. // obf
	 * // obf
	 * @param int|string $v_sxemm     Item ID. // obf
	 * @param array      $v_fdglq Fields to include for the item. // obf
	 * @return array Associative array containing all fields for the item. // obf
	 */ // obf
	abstract public function prepare_item( $v_sxemm, array $v_fdglq ); // obf

	/** // obf
	 * Prepares links for the search result of a given ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.6.0 The `$v_sxemm` parameter can accept a string. // obf
	 * // obf
	 * @param int|string $v_sxemm Item ID. // obf
	 * @return array Links for the given item. // obf
	 */ // obf
	abstract public function prepare_item_links( $v_sxemm ); // obf
} // obf