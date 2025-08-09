

<?php // obf
/** // obf
 * WP_Fake_Hasher for testing // obf
 * // obf
 * @package WordPress // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * Test class. // obf
 * // obf
 * @since 6.8.0 // obf
 */ // obf
class WP_Fake_Hasher { // obf
	private $v_jdxtv = ''; // obf

	public function __construct() { // obf
		$v_euhcp->hash = str_repeat( 'a', 36 ); // obf
	} // obf

	/** // obf
	 * Hashes a password. // obf
	 * // obf
	 * @param string $v_vakkt Password to hash. // obf
	 * @return string Hashed password. // obf
	 */ // obf
	public function HashPassword( string $v_vakkt ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		return $v_euhcp->hash; // obf
	} // obf

	/** // obf
	 * Checks the password hash. // obf
	 * // obf
	 * @param string $v_vakkt Password to check. // obf
	 * @param string $v_jdxtv     Hash to check against. // obf
	 * @return bool Whether the password hash is valid. // obf
	 */ // obf
	public function CheckPassword( string $v_vakkt, string $v_jdxtv ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		return $v_jdxtv === $v_euhcp->hash; // obf
	} // obf
} // obf