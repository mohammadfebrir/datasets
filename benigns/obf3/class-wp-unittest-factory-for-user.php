

<?php // obf

/** // obf
 * Unit test factory for users. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error     create( $v_hbdtb = array(), $v_drbva = null ) // obf
 * @method WP_User|WP_Error create_and_get( $v_hbdtb = array(), $v_drbva = null ) // obf
 * @method (int|WP_Error)[] create_many( $v_luzto, $v_hbdtb = array(), $v_drbva = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_User extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_yjear = null ) { // obf
		parent::__construct( $v_yjear ); // obf
		$v_gdsjc->default_generation_definitions = array( // obf
			'user_login' => new WP_UnitTest_Generator_Sequence( 'User %s' ), // obf
			'user_pass'  => 'password', // obf
			'user_email' => new WP_UnitTest_Generator_Sequence( 'user_%s@example.org' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Inserts an user. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array $v_hbdtb The user data to insert. // obf
	 * // obf
	 * @return int|WP_Error The user ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_hbdtb ) { // obf
		return wp_insert_user( $v_hbdtb ); // obf
	} // obf

	/** // obf
	 * Updates the user data. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int   $v_cjtpa ID of the user to update. // obf
	 * @param array $v_faobi  The user data to update. // obf
	 * // obf
	 * @return int|WP_Error The user ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_object( $v_cjtpa, $v_faobi ) { // obf
		$v_faobi['ID'] = $v_cjtpa; // obf
		return wp_update_user( $v_faobi ); // obf
	} // obf

	/** // obf
	 * Retrieves the user for a given ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_cjtpa ID of the user ID to retrieve. // obf
	 * // obf
	 * @return WP_User The user object. // obf
	 */ // obf
	public function get_object_by_id( $v_cjtpa ) { // obf
		return new WP_User( $v_cjtpa ); // obf
	} // obf
} // obf