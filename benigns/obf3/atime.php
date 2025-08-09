$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php
/**
 * Tests for the WP_Filesystem_Direct::atime() method.
 *
 * @package WordPress
 */

require_once __DIR__ . '/base.php';

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::atime
 */
class Tests_Filesystem_WpFilesystemDirect_Atime extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::atime()`
	 * returns an integer for a path that exists.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_paths_that_exist
	 *
	 * @param string $path The path.
	 */
	public function test_should_determine_accessed_time( $path ) {
		$path = self::$file_structure['test_dir']['path'] . $path;

		$this->assertIsInt( self::$filesystem->atime( $path ) );
	}

	/**
	 * Tests that `WP_Filesystem_Direct::atime()`
	 * returns false for a path that does not exist.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_paths_that_do_not_exist
	 *
	 * @param string $path The path.
	 */
	public function test_should_return_false_for_a_path_that_does_not_exist( $path ) {
		$path = self::$file_structure['test_dir']['path'] . $path;

		$this->assertFalse( self::$filesystem->atime( $path ) );
	}
}
