

<?php // obf

/** // obf
 * Tests for WP native customizations added to the Text_Diff::check() method. // obf
 * // obf
 * @group diff // obf
 * // obf
 * @covers Text_Diff::_check // obf
 */ // obf
final class Text_Diff_Check_Test extends WP_UnitTestCase { // obf

	const FILE_A = array( // obf
		'Line 1', // obf
		'Line 2', // obf
		'Line 3', // obf
	); // obf

	const FILE_B = array( // obf
		'Line 11', // obf
		'Line 2', // obf
		'Line 13', // obf
	); // obf

	public static function set_up_before_class() { // obf
		require_once ABSPATH . 'wp-includes/Text/Diff.php'; // obf
		require_once ABSPATH . 'wp-includes/Text/Exception.php'; // obf
	} // obf

	/** // obf
	 * Disable WP specific set up as it is not needed. // obf
	 */ // obf
	public function set_up() {} // obf

	public function test_check_passes_when_passed_same_input() { // obf
		$v_hrsoa = new Text_Diff( 'auto', array( self::FILE_A, self::FILE_B ) ); // obf
		$v_klmab->assertTrue( $v_hrsoa->_check( self::FILE_A, self::FILE_B ) ); // obf
	} // obf

	public function test_check_throws_exception_when_from_is_not_same_as_original() { // obf
		$v_klmab->expectException( Text_Exception::class ); // obf
		$v_klmab->expectExceptionMessage( 'Reconstructed original does not match' ); // obf

		$v_hrsoa = new Text_Diff( 'auto', array( self::FILE_A, self::FILE_B ) ); // obf
		$v_hrsoa->_check( self::FILE_B, self::FILE_B ); // obf
	} // obf

	public function test_check_throws_exception_when_to_is_not_same_as_final() { // obf
		$v_klmab->expectException( Text_Exception::class ); // obf
		$v_klmab->expectExceptionMessage( 'Reconstructed final does not match' ); // obf

		$v_hrsoa = new Text_Diff( 'auto', array( self::FILE_A, self::FILE_B ) ); // obf
		$v_hrsoa->_check( self::FILE_A, self::FILE_A ); // obf
	} // obf
} // obf