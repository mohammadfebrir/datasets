

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_wpSetCurrentUser extends WP_UnitTestCase { // obf
	protected static $v_lkkbb; // obf
	protected static $v_kzphn; // obf
	protected static $v_mjpms = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qkwvi ) { // obf
		self::$v_lkkbb    = $v_qkwvi->user->create(); // obf
		self::$v_mjpms[] = self::$v_lkkbb; // obf
		self::$v_kzphn   = $v_qkwvi->user->create( array( 'user_login' => 'foo' ) ); // obf
		self::$v_mjpms[] = self::$v_kzphn; // obf
	} // obf

	public function test_set_by_id() { // obf
		$v_ygvoe = wp_set_current_user( self::$v_lkkbb ); // obf

		$v_qwnds->assertSame( self::$v_lkkbb, $v_ygvoe->ID ); // obf
		$v_qwnds->assertSame( $v_ygvoe, wp_get_current_user() ); // obf
		$v_qwnds->assertSame( self::$v_lkkbb, get_current_user_id() ); // obf
	} // obf

	public function test_name_should_be_ignored_if_id_is_not_null() { // obf
		$v_ygvoe = wp_set_current_user( self::$v_lkkbb, 'foo' ); // obf

		$v_qwnds->assertSame( self::$v_lkkbb, $v_ygvoe->ID ); // obf
		$v_qwnds->assertSame( $v_ygvoe, wp_get_current_user() ); // obf
		$v_qwnds->assertSame( self::$v_lkkbb, get_current_user_id() ); // obf
	} // obf

	public function test_should_set_by_name_if_id_is_null_and_current_user_is_nonempty() { // obf
		wp_set_current_user( self::$v_lkkbb ); // obf
		$v_qwnds->assertSame( self::$v_lkkbb, get_current_user_id() ); // obf

		$v_ygvoe = wp_set_current_user( null, 'foo' ); // obf

		$v_qwnds->assertSame( self::$v_kzphn, $v_ygvoe->ID ); // obf
		$v_qwnds->assertSame( $v_ygvoe, wp_get_current_user() ); // obf
		$v_qwnds->assertSame( self::$v_kzphn, get_current_user_id() ); // obf
	} // obf

	/** // obf
	 * Test that you can set the current user by the name parameter when the current user is 0. // obf
	 * // obf
	 * @ticket 20845 // obf
	 */ // obf
	public function test_should_set_by_name_if_id_is_null() { // obf
		wp_set_current_user( 0 ); // obf
		$v_qwnds->assertSame( 0, get_current_user_id() ); // obf

		$v_ygvoe = wp_set_current_user( null, 'foo' ); // obf

		$v_qwnds->assertSame( self::$v_kzphn, $v_ygvoe->ID ); // obf
		$v_qwnds->assertSame( $v_ygvoe, wp_get_current_user() ); // obf
		$v_qwnds->assertSame( self::$v_kzphn, get_current_user_id() ); // obf
	} // obf
} // obf