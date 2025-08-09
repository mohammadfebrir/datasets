

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::chmod() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::chmod // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Chmod extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chmod()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_yxbof The path. // obf
	 */ // obf
	public function test_should_return_false( $v_yxbof ) { // obf
		$v_apwnw->assertFalse( self::$v_senok->chmod( $v_yxbof ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chmod()` should set // obf
	 * $v_isukr when it is not passed. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_set_mode_when_not_passed // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param string $v_yxbof The path. // obf
	 * @param string $v_ntgae The type of path. "FILE" for file, "DIR" for directory. // obf
	 */ // obf
	public function test_should_handle_set_mode_when_not_passed( $v_yxbof, $v_ntgae ) { // obf
		define( 'FS_CHMOD_' . $v_ntgae, ( 'FILE' === $v_ntgae ? 0644 : 0755 ) ); // obf

		$v_apwnw->assertTrue( self::$v_senok->chmod( self::$v_txugx['test_dir']['path'] . $v_yxbof, false ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_set_mode_when_not_passed() { // obf
		return array( // obf
			'a file'      => array( // obf
				'path' => 'a_file_that_exists.txt', // obf
				'type' => 'FILE', // obf
			), // obf
			'a directory' => array( // obf
				'path' => '', // obf
				'type' => 'DIR', // obf
			), // obf
		); // obf
	} // obf
} // obf