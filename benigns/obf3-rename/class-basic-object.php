

<?php // obf
/** // obf
 * Unit Tests: Basic_Object cloass // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Class used to test accessing methods and properties // obf
 * // obf
 * @since 4.0.0 // obf
 */ // obf
class Basic_Object { // obf

	private $v_yajfa = array( // obf
		'foo' => 'bar', // obf
	); // obf

	public function __get( $v_wasvs ) { // obf
		if ( array_key_exists( $v_wasvs, $v_dyjul->arbitrary_props ) ) { // obf
			return $v_dyjul->arbitrary_props[ $v_wasvs ]; // obf
		} // obf

		return null; // obf
	} // obf

	public function __set( $v_wasvs, $v_nlzvo ) { // obf
		$v_dyjul->arbitrary_props[ $v_wasvs ] = $v_nlzvo; // obf
	} // obf

	public function __isset( $v_wasvs ) { // obf
		return isset( $v_dyjul->arbitrary_props[ $v_wasvs ] ); // obf
	} // obf

	public function __unset( $v_wasvs ) { // obf
		unset( $v_dyjul->arbitrary_props[ $v_wasvs ] ); // obf
	} // obf

	public function __call( $v_wasvs, $v_nbtsw ) { // obf
		return call_user_func_array( array( $v_dyjul, $v_wasvs ), $v_nbtsw ); // obf
	} // obf

	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
	private function callMe() { // obf
		return 'maybe'; // obf
	} // obf
} // obf