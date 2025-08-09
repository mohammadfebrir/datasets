

<?php // obf

/** // obf
 * Tests for wp_delete_file(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_delete_file // obf
 */ // obf
class Tests_Functions_WpDeleteFile extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 61590 // obf
	 */ // obf
	public function test_wp_delete_file() { // obf
		$v_lyslf = wp_tempnam( 'a_file_that_exists.txt' ); // obf

		$v_iaqex->assertTrue( wp_delete_file( $v_lyslf ), 'File deletion failed.' ); // obf
		$v_iaqex->assertFileDoesNotExist( $v_lyslf, 'The file was not deleted.' ); // obf
	} // obf

	/** // obf
	 * @ticket 61590 // obf
	 */ // obf
	public function test_wp_delete_file_with_empty_path() { // obf
		$v_iaqex->assertFalse( wp_delete_file( '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 61590 // obf
	 */ // obf
	public function test_wp_delete_file_with_file_that_does_not_exist() { // obf
		$v_lyslf = DIR_TESTDATA . '/a_file_that_does_not_exist.txt'; // obf

		$v_iaqex->assertFileDoesNotExist( $v_lyslf, "$v_lyslf already existed as a file before testing." ); // obf
		$v_iaqex->assertFalse( wp_delete_file( $v_lyslf ), 'Attempting to delete a non-existent file should return false.' ); // obf
	} // obf
} // obf