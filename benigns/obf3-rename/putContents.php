

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::put_contents() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::put_contents // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_PutContents extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::put_contents()` // obf
	 * returns false for a directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_for_a_directory() { // obf
		$v_sngfl->assertFalse( self::$v_cthgv->put_contents( self::$v_xkfkr['test_dir']['path'], 'New content.' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::put_contents()` inserts // obf
	 * content into the provided file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_insert_contents_into_file() { // obf
		$v_jsxyf   = self::$v_xkfkr['test_dir']['path'] . 'file-to-create.txt'; // obf
		$v_rxmam = self::$v_cthgv->put_contents( $v_jsxyf, 'New content.', 0644 ); // obf
		unlink( $v_jsxyf ); // obf

		$v_sngfl->assertTrue( $v_rxmam, 'The contents were not inserted.' ); // obf
	} // obf
} // obf