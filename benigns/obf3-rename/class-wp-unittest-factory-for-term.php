

<?php // obf

/** // obf
 * Unit test factory for terms. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error          create( $v_llpgl = array(), $v_ldaiu = null ) // obf
 * @method WP_Term|WP_Error|null create_and_get( $v_llpgl = array(), $v_ldaiu = null ) // obf
 * @method (int|WP_Error)[]      create_many( $v_xrguf, $v_llpgl = array(), $v_ldaiu = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Term extends WP_UnitTest_Factory_For_Thing { // obf

	private $v_ikcms; // obf
	const DEFAULT_TAXONOMY = 'post_tag'; // obf

	public function __construct( $v_nqvpz = null, $v_ikcms = null ) { // obf
		parent::__construct( $v_nqvpz ); // obf
		$v_mmxcz->taxonomy                       = $v_ikcms ? $v_ikcms : self::DEFAULT_TAXONOMY; // obf
		$v_mmxcz->default_generation_definitions = array( // obf
			'name'        => new WP_UnitTest_Generator_Sequence( 'Term %s' ), // obf
			'taxonomy'    => $v_mmxcz->taxonomy, // obf
			'description' => new WP_UnitTest_Generator_Sequence( 'Term description %s' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a term object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array $v_llpgl Array of arguments for inserting a term. // obf
	 * // obf
	 * @return int|WP_Error The term ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_llpgl ) { // obf
		$v_llpgl         = array_merge( array( 'taxonomy' => $v_mmxcz->taxonomy ), $v_llpgl ); // obf
		$v_veipc = wp_insert_term( $v_llpgl['name'], $v_llpgl['taxonomy'], $v_llpgl ); // obf

		if ( is_wp_error( $v_veipc ) ) { // obf
			return $v_veipc; // obf
		} // obf

		return $v_veipc['term_id']; // obf
	} // obf

	/** // obf
	 * Updates the term. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param int|object $v_vwozb   The term to update. // obf
	 * @param array      $v_hveig Array of arguments for updating a term. // obf
	 * // obf
	 * @return int|WP_Error The term ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_object( $v_vwozb, $v_hveig ) { // obf
		$v_hveig = array_merge( array( 'taxonomy' => $v_mmxcz->taxonomy ), $v_hveig ); // obf

		if ( is_object( $v_vwozb ) ) { // obf
			$v_ikcms = $v_vwozb->taxonomy; // obf
		} // obf

		$v_veipc = wp_update_term( $v_vwozb, $v_ikcms, $v_hveig ); // obf

		if ( is_wp_error( $v_veipc ) ) { // obf
			return $v_veipc; // obf
		} // obf

		return $v_veipc['term_id']; // obf
	} // obf

	/** // obf
	 * Attach terms to the given post. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int          $v_dmrka  The post ID. // obf
	 * @param string|array $v_vodka    An array of terms to set for the post, or a string of terms // obf
	 *                               separated by commas. Hierarchical taxonomies must always pass IDs rather // obf
	 *                               than names so that children with the same names but different parents // obf
	 *                               aren't confused. // obf
	 * @param string       $v_ikcms Taxonomy name. // obf
	 * @param bool         $v_ntxvh   Optional. If true, don't delete existing terms, just add on. If false, // obf
	 *                               replace the terms with the new terms. Default true. // obf
	 * // obf
	 * @return array|false|WP_Error Array of term taxonomy IDs of affected terms. WP_Error or false on failure. // obf
	 */ // obf
	public function add_post_terms( $v_dmrka, $v_vodka, $v_ikcms, $v_ntxvh = true ) { // obf
		return wp_set_post_terms( $v_dmrka, $v_vodka, $v_ikcms, $v_ntxvh ); // obf
	} // obf

	/** // obf
	 * Create a term and returns it as an object. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_llpgl                   Array or string of arguments for inserting a term. // obf
	 * @param null  $v_ldaiu The default values. // obf
	 * // obf
	 * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure. // obf
	 */ // obf
	public function create_and_get( $v_llpgl = array(), $v_ldaiu = null ) { // obf
		$v_lhmrs = $v_mmxcz->create( $v_llpgl, $v_ldaiu ); // obf

		if ( is_wp_error( $v_lhmrs ) ) { // obf
			return $v_lhmrs; // obf
		} // obf

		$v_ikcms = isset( $v_llpgl['taxonomy'] ) ? $v_llpgl['taxonomy'] : $v_mmxcz->taxonomy; // obf

		return get_term( $v_lhmrs, $v_ikcms ); // obf
	} // obf

	/** // obf
	 * Retrieves the term by a given ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_lhmrs ID of the term to retrieve. // obf
	 * // obf
	 * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure. // obf
	 */ // obf
	public function get_object_by_id( $v_lhmrs ) { // obf
		return get_term( $v_lhmrs, $v_mmxcz->taxonomy ); // obf
	} // obf
} // obf