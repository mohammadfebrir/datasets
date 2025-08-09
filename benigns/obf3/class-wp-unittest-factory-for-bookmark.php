

<?php // obf

/** // obf
 * Factory for creating fixtures for the deprecated Links/Bookmarks API. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @method int|WP_Error     create( $v_gwsxm = array(), $v_vqbbw = null ) // obf
 * @method object|WP_Error  create_and_get( $v_gwsxm = array(), $v_vqbbw = null ) // obf
 * @method (int|WP_Error)[] create_many( $v_qkfrz, $v_gwsxm = array(), $v_vqbbw = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Bookmark extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_anykn = null ) { // obf
		parent::__construct( $v_anykn ); // obf
		$v_ogwia->default_generation_definitions = array( // obf
			'link_name' => new WP_UnitTest_Generator_Sequence( 'Bookmark name %s' ), // obf
			'link_url'  => new WP_UnitTest_Generator_Sequence( 'Bookmark URL %s' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a link object. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param array $v_gwsxm Arguments for the link object. // obf
	 * // obf
	 * @return int|WP_Error The link ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_gwsxm ) { // obf
		return wp_insert_link( $v_gwsxm, true ); // obf
	} // obf

	/** // obf
	 * Updates a link object. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param int   $v_pxwnk ID of the link to update. // obf
	 * @param array $v_hxfir  The fields to update. // obf
	 * // obf
	 * @return int|WP_Error The link ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_object( $v_pxwnk, $v_hxfir ) { // obf
		$v_hxfir['link_id'] = $v_pxwnk; // obf

		$v_uqaih = wp_update_link( $v_hxfir ); // obf

		if ( 0 === $v_uqaih ) { // obf
			return new WP_Error( 'link_update_error', __( 'Could not update link.' ) ); // obf
		} // obf

		return $v_uqaih; // obf
	} // obf

	/** // obf
	 * Retrieves a link by a given ID. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param int $v_pxwnk ID of the link to retrieve. // obf
	 * // obf
	 * @return object|null The link object on success, null on failure. // obf
	 */ // obf
	public function get_object_by_id( $v_pxwnk ) { // obf
		return get_bookmark( $v_pxwnk ); // obf
	} // obf
} // obf