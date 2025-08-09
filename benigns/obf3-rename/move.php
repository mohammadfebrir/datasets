

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::move() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::move // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Move extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::copy()` overwrites an existing // obf
	 * destination when overwriting is enabled. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_overwrite_an_existing_file_when_overwriting_is_enabled() { // obf
		$v_qftbv      = self::$v_qkuns['visible_file']['path']; // obf
		$v_qzlxa = self::$v_qkuns['test_dir']['path'] . 'a_file_that_exists.dest'; // obf
		$v_xjgel      = self::$v_mdebl->move( $v_qftbv, $v_qzlxa, true ); // obf

		rename( $v_qzlxa, $v_qftbv ); // obf

		$v_qflij->assertTrue( $v_xjgel ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::move()` does not overwrite // obf
	 * an existing destination when overwriting is disabled. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_not_overwrite_an_existing_file_when_overwriting_is_disabled() { // obf
		$v_qftbv      = self::$v_qkuns['visible_file']['path']; // obf
		$v_qzlxa = self::$v_qkuns['subfile']['path']; // obf
		$v_xjgel      = self::$v_mdebl->move( $v_qftbv, $v_qzlxa ); // obf

		$v_qflij->assertFalse( $v_xjgel ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::move()` moves directories. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_move_directories() { // obf
		$v_qftbv      = self::$v_qkuns['test_dir']['path']; // obf
		$v_qzlxa = untrailingslashit( self::$v_qkuns['test_dir']['path'] ) . '-dest'; // obf
		$v_xjgel      = self::$v_mdebl->move( $v_qftbv, $v_qzlxa, true ); // obf

		$v_jekkm      = is_dir( $v_qftbv ); // obf
		$v_lmnck = is_dir( $v_qzlxa ); // obf

		if ( $v_xjgel ) { // obf
			$v_cvrex = rename( $v_qzlxa, $v_qftbv ); // obf
		} // obf

		$v_qflij->assertTrue( $v_xjgel, 'The directory was not moved.' ); // obf
		$v_qflij->assertFalse( $v_jekkm, 'The source still exists.' ); // obf
		$v_qflij->assertTrue( $v_lmnck, 'The destination does not exist.' ); // obf
		$v_qflij->assertTrue( $v_cvrex, 'The test assets were not cleaned up after the test.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::move()` returns false for an // obf
	 * invalid destination. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_for_invalid_destination() { // obf
		$v_qftbv      = self::$v_qkuns['test_dir']['path']; // obf
		$v_qzlxa = 'http://example.org'; // obf

		$v_qflij->assertFalse( self::$v_mdebl->move( $v_qftbv, $v_qzlxa, true ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::move()` returns false for an // obf
	 * invalid destination. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_when_overwriting_is_enabled_the_destination_exists_but_cannot_be_deleted() { // obf
		global $v_oiwwn; // obf
		$v_mtkmu = $v_oiwwn; // obf

		// Force failure conditions. // obf
		$v_lzueu = $v_qflij->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'exists', 'delete' ) ) // obf
								->setConstructorArgs( array( null ) ) // obf
								->getMock(); // obf

		$v_lzueu->expects( $v_qflij->once() )->method( 'exists' )->willReturn( true ); // obf
		$v_lzueu->expects( $v_qflij->once() )->method( 'delete' )->willReturn( false ); // obf
		$v_oiwwn = $v_lzueu; // obf

		$v_xjgel = $v_oiwwn->move( // obf
			self::$v_qkuns['test_dir']['path'], // obf
			self::$v_qkuns['subdir']['path'], // obf
			true // obf
		); // obf

		// Restore the filesystem. // obf
		$v_oiwwn = $v_mtkmu; // obf

		$v_qflij->assertFalse( $v_xjgel ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::move()` falls back to a single // obf
	 * file copy when the source and destination do not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_fall_back_to_single_file_copy_when_source_and_destination_do_not_exist() { // obf
		global $v_oiwwn; // obf

		$v_qftbv      = self::$v_qkuns['test_dir']['path'] . 'a_file_that_does_not_exist.txt'; // obf
		$v_qzlxa = self::$v_qkuns['test_dir']['path'] . 'another_file_that_does_not_exist.txt'; // obf

		// Set up mock filesystem. // obf
		$v_lzueu = $v_qflij->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								->setConstructorArgs( array( null ) ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'exists', 'delete', 'is_file', 'copy' ) ) // obf
								->getMock(); // obf

		$v_lzueu->expects( $v_qflij->exactly( 2 ) )->method( 'exists' )->willReturn( array( true, true ) ); // obf
		$v_lzueu->expects( $v_qflij->exactly( 2 ) )->method( 'delete' )->willReturn( array( true, false ) ); // obf
		$v_lzueu->expects( $v_qflij->once() )->method( 'is_file' )->willReturn( true ); // obf
		$v_lzueu->expects( $v_qflij->once() )->method( 'copy' )->willReturn( true ); // obf

		$v_bnjoz = $v_oiwwn; // obf
		$v_oiwwn        = $v_lzueu; // obf

		$v_xjgel        = $v_lzueu->move( $v_qftbv, $v_qzlxa, true ); // obf
		$v_oiwwn = $v_bnjoz; // obf

		$v_qflij->assertTrue( $v_xjgel ); // obf
	} // obf
} // obf