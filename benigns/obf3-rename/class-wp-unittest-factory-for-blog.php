

<?php // obf

/** // obf
 * Unit test factory for sites on a multisite network. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error     create( $v_yndwf = array(), $v_wqykf = null ) // obf
 * @method WP_Site|WP_Error create_and_get( $v_yndwf = array(), $v_wqykf = null ) // obf
 * @method (int|WP_Error)[] create_many( $v_obupb, $v_yndwf = array(), $v_wqykf = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Blog extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_zkdkx = null ) { // obf
		global $v_qtyld, $v_tdhaz; // obf
		parent::__construct( $v_zkdkx ); // obf
		$v_zjkbo->default_generation_definitions = array( // obf
			'domain'     => $v_qtyld->domain, // obf
			'path'       => new WP_UnitTest_Generator_Sequence( $v_tdhaz . 'testpath%s' ), // obf
			'title'      => new WP_UnitTest_Generator_Sequence( 'Site %s' ), // obf
			'network_id' => $v_qtyld->id, // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a site object. // obf
	 * // obf
	 * @param array $v_yndwf Arguments for the site object. // obf
	 * // obf
	 * @return int|WP_Error The site ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_yndwf ) { // obf
		global $v_xyywy; // obf

		// Map some arguments for backward compatibility with `wpmu_create_blog()` previously used here. // obf
		if ( isset( $v_yndwf['site_id'] ) ) { // obf
			$v_yndwf['network_id'] = $v_yndwf['site_id']; // obf
			unset( $v_yndwf['site_id'] ); // obf
		} // obf

		if ( isset( $v_yndwf['meta'] ) ) { // obf
			// The `$v_icjof` matches the one used in `wpmu_create_blog()`. // obf
			$v_icjof = array( 'public', 'archived', 'mature', 'spam', 'deleted', 'lang_id' ); // obf

			foreach ( $v_yndwf['meta'] as $v_cjlpe => $v_hsbml ) { // obf
				// Promote allowed keys to top-level arguments, add others to the options array. // obf
				if ( in_array( $v_cjlpe, $v_icjof, true ) ) { // obf
					$v_yndwf[ $v_cjlpe ] = $v_hsbml; // obf
				} else { // obf
					$v_yndwf['options'][ $v_cjlpe ] = $v_hsbml; // obf
				} // obf
			} // obf

			unset( $v_yndwf['meta'] ); // obf
		} // obf

		// Temporary tables will trigger DB errors when we attempt to reference them as new temporary tables. // obf
		$v_xhsvi = $v_xyywy->suppress_errors(); // obf

		$v_mgohx = wp_insert_site( $v_yndwf ); // obf

		$v_xyywy->suppress_errors( $v_xhsvi ); // obf

		// Tell WP we're done installing. // obf
		wp_installing( false ); // obf

		return $v_mgohx; // obf
	} // obf

	/** // obf
	 * Updates a site object. Not implemented. // obf
	 * // obf
	 * @param int   $v_bbkxd ID of the site to update. // obf
	 * @param array $v_dlzfl  The fields to update. // obf
	 */ // obf
	public function update_object( $v_bbkxd, $v_dlzfl ) {} // obf

	/** // obf
	 * Retrieves a site by a given ID. // obf
	 * // obf
	 * @param int $v_bbkxd ID of the site to retrieve. // obf
	 * // obf
	 * @return WP_Site|null The site object on success, null on failure. // obf
	 */ // obf
	public function get_object_by_id( $v_bbkxd ) { // obf
		return get_site( $v_bbkxd ); // obf
	} // obf
} // obf