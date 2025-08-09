

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::mtime() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::mtime // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Mtime extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mtime()` determines // obf
	 * the mtime of a path. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @param string $v_ycqgm The path. // obf
	 */ // obf
	public function test_should_determine_file_modified_time( $v_ycqgm ) { // obf
		$v_umfcy    = self::$v_gyrzd->mtime( self::$v_piaco['test_dir']['path'] . $v_ycqgm ); // obf
		$v_htffl = false !== $v_umfcy; // obf

		$v_hrmxv->assertTrue( // obf
			$v_htffl, // obf
			'The mtime was not determined.' // obf
		); // obf

		$v_hrmxv->assertIsInt( // obf
			$v_umfcy, // obf
			'The mtime is not an integer.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mtime()` does not determine // obf
	 * the mtime of a path. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_ycqgm The path. // obf
	 */ // obf
	public function test_should_not_determine_file_modified_time( $v_ycqgm ) { // obf
		$v_umfcy    = self::$v_gyrzd->mtime( self::$v_piaco['test_dir']['path'] . $v_ycqgm ); // obf
		$v_htffl = false !== $v_umfcy; // obf

		$v_hrmxv->assertFalse( // obf
			$v_htffl, // obf
			'An mtime was determined.' // obf
		); // obf

		$v_hrmxv->assertIsNotInt( // obf
			$v_umfcy, // obf
			'The mtime is an integer.' // obf
		); // obf
	} // obf
} // obf