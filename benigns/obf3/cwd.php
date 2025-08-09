

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::cwd() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::cwd // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Cwd extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::cwd()` returns the current // obf
	 * working directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_get_current_working_directory() { // obf
		$v_tkzfi->assertSame( wp_normalize_path( dirname( ABSPATH ) ), wp_normalize_path( self::$v_npnmt->cwd() ) ); // obf
	} // obf
} // obf