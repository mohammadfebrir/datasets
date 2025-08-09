

<?php // obf
/** // obf
 * User API: WP_Role class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Users // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to extend the user roles API. // obf
 * // obf
 * @since 2.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Role { // obf
	/** // obf
	 * Role name. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cffym; // obf

	/** // obf
	 * List of capabilities the role contains. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool[] Array of key/value pairs where keys represent a capability name and boolean values // obf
	 *             represent whether the role has that capability. // obf
	 */ // obf
	public $v_vbdlb; // obf

	/** // obf
	 * Constructor - Set up object properties. // obf
	 * // obf
	 * The list of capabilities must have the key as the name of the capability // obf
	 * and the value a boolean of whether it is granted to the role. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_smbwm         Role name. // obf
	 * @param bool[] $v_vbdlb Array of key/value pairs where keys represent a capability name and boolean values // obf
	 *                             represent whether the role has that capability. // obf
	 */ // obf
	public function __construct( $v_smbwm, $v_vbdlb ) { // obf
		$v_nfefg->name         = $v_smbwm; // obf
		$v_nfefg->capabilities = $v_vbdlb; // obf
	} // obf

	/** // obf
	 * Assign role a capability. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_qxjeb   Capability name. // obf
	 * @param bool   $v_rggqy Whether role has capability privilege. // obf
	 */ // obf
	public function add_cap( $v_qxjeb, $v_rggqy = true ) { // obf
		$v_nfefg->capabilities[ $v_qxjeb ] = $v_rggqy; // obf
		wp_roles()->add_cap( $v_nfefg->name, $v_qxjeb, $v_rggqy ); // obf
	} // obf

	/** // obf
	 * Removes a capability from a role. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_qxjeb Capability name. // obf
	 */ // obf
	public function remove_cap( $v_qxjeb ) { // obf
		unset( $v_nfefg->capabilities[ $v_qxjeb ] ); // obf
		wp_roles()->remove_cap( $v_nfefg->name, $v_qxjeb ); // obf
	} // obf

	/** // obf
	 * Determines whether the role has the given capability. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_qxjeb Capability name. // obf
	 * @return bool Whether the role has the given capability. // obf
	 */ // obf
	public function has_cap( $v_qxjeb ) { // obf
		/** // obf
		 * Filters which capabilities a role has. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 * // obf
		 * @param bool[] $v_vbdlb Array of key/value pairs where keys represent a capability name and boolean values // obf
		 *                             represent whether the role has that capability. // obf
		 * @param string $v_qxjeb          Capability name. // obf
		 * @param string $v_cffym         Role name. // obf
		 */ // obf
		$v_vbdlb = apply_filters( 'role_has_cap', $v_nfefg->capabilities, $v_qxjeb, $v_nfefg->name ); // obf

		if ( ! empty( $v_vbdlb[ $v_qxjeb ] ) ) { // obf
			return $v_vbdlb[ $v_qxjeb ]; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf
} // obf