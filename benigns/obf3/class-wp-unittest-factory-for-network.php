

<?php // obf

/** // obf
 * Unit test factory for networks. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error        create( $v_gokmz = array(), $v_ozxql = null ) // obf
 * @method WP_Network|WP_Error create_and_get( $v_gokmz = array(), $v_ozxql = null ) // obf
 * @method (int|WP_Error)[]    create_many( $v_vmjal, $v_gokmz = array(), $v_ozxql = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Network extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_goywz = null ) { // obf
		parent::__construct( $v_goywz ); // obf
		$v_ezhtv->default_generation_definitions = array( // obf
			'domain'            => WP_TESTS_DOMAIN, // obf
			'title'             => new WP_UnitTest_Generator_Sequence( 'Network %s' ), // obf
			'path'              => new WP_UnitTest_Generator_Sequence( '/testpath%s/' ), // obf
			'network_id'        => new WP_UnitTest_Generator_Sequence( '%s', 2 ), // obf
			'subdomain_install' => false, // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a network object. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param array $v_gokmz Arguments for the network object. // obf
	 * // obf
	 * @return int|WP_Error The network ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_gokmz ) { // obf
		require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf

		if ( ! isset( $v_gokmz['user'] ) ) { // obf
			$v_jamvg = WP_TESTS_EMAIL; // obf
		} else { // obf
			$v_jamvg = get_userdata( $v_gokmz['user'] )->user_email; // obf
		} // obf

		$v_tmsdl = populate_network( // obf
			$v_gokmz['network_id'], // obf
			$v_gokmz['domain'], // obf
			$v_jamvg, // obf
			$v_gokmz['title'], // obf
			$v_gokmz['path'], // obf
			$v_gokmz['subdomain_install'] // obf
		); // obf

		if ( is_wp_error( $v_tmsdl ) ) { // obf
			return $v_tmsdl; // obf
		} // obf

		return (int) $v_gokmz['network_id']; // obf
	} // obf

	/** // obf
	 * Updates a network object. Not implemented. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param int   $v_yazdg ID of the network to update. // obf
	 * @param array $v_cizwv  The fields to update. // obf
	 */ // obf
	public function update_object( $v_yazdg, $v_cizwv ) {} // obf

	/** // obf
	 * Retrieves a network by a given ID. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param int $v_yazdg ID of the network to retrieve. // obf
	 * // obf
	 * @return WP_Network|null The network object on success, null on failure. // obf
	 */ // obf
	public function get_object_by_id( $v_yazdg ) { // obf
		return get_network( $v_yazdg ); // obf
	} // obf
} // obf