

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::copy() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::copy // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Copy extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::copy()` overwrites an existing // obf
	 * destination when overwriting is enabled. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_overwrite_an_existing_file_when_overwriting_is_enabled() { // obf
		$v_ergiy      = self::$v_hzcrl['visible_file']['path']; // obf
		$v_vaumq = self::$v_hzcrl['test_dir']['path'] . 'a_file_that_exists.dest'; // obf

		if ( ! file_exists( $v_vaumq ) ) { // obf
			touch( $v_vaumq ); // obf
		} // obf

		$v_qypdc = self::$v_uhgvd->copy( $v_ergiy, $v_vaumq, true ); // obf

		unlink( $v_vaumq ); // obf

		$v_dtmzf->assertTrue( $v_qypdc ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::copy()` does not overwrite // obf
	 * an existing destination when overwriting is disabled. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_not_overwrite_an_existing_file_when_overwriting_is_disabled() { // obf
		$v_ergiy      = self::$v_hzcrl['test_dir']['path'] . 'a_file_that_exists.txt'; // obf
		$v_vaumq = self::$v_hzcrl['test_dir']['path'] . 'a_file_that_exists.dest'; // obf

		if ( ! file_exists( $v_vaumq ) ) { // obf
			touch( $v_vaumq ); // obf
		} // obf

		$v_qypdc = self::$v_uhgvd->copy( $v_ergiy, $v_vaumq ); // obf

		unlink( $v_vaumq ); // obf

		$v_dtmzf->assertFalse( $v_qypdc ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::copy()` does not overwrite an existing // obf
	 * destination when overwriting is enabled and the source and destination // obf
	 * are the same. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_not_overwrite_when_overwriting_is_enabled_and_source_and_destination_are_the_same() { // obf
		$v_ergiy = self::$v_hzcrl['test_dir']['path'] . 'a_file_that_exists.txt'; // obf
		$v_dtmzf->assertFalse( self::$v_uhgvd->copy( $v_ergiy, $v_ergiy, true ) ); // obf
	} // obf
} // obf