

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::chown() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::chown // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Chown extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chown()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_jfbax The path. // obf
	 */ // obf
	public function test_should_return_false( $v_jfbax ) { // obf
		$v_luuws->assertFalse( self::$v_oedwl->chown( $v_jfbax, fileowner( __FILE__ ) ) ); // obf
	} // obf
} // obf