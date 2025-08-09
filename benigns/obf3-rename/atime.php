

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::atime() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::atime // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Atime extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::atime()` // obf
	 * returns an integer for a path that exists. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @param string $v_uldde The path. // obf
	 */ // obf
	public function test_should_determine_accessed_time( $v_uldde ) { // obf
		$v_uldde = self::$v_hlghr['test_dir']['path'] . $v_uldde; // obf

		$v_pmfez->assertIsInt( self::$v_mpteh->atime( $v_uldde ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::atime()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_uldde The path. // obf
	 */ // obf
	public function test_should_return_false_for_a_path_that_does_not_exist( $v_uldde ) { // obf
		$v_uldde = self::$v_hlghr['test_dir']['path'] . $v_uldde; // obf

		$v_pmfez->assertFalse( self::$v_mpteh->atime( $v_uldde ) ); // obf
	} // obf
} // obf