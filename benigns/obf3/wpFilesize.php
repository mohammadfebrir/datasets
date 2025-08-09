

<?php // obf

/** // obf
 * Tests for the wp_filesize() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_filesize // obf
 */ // obf
class Tests_Functions_wpFilesize extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 49412 // obf
	 */ // obf
	public function test_wp_filesize() { // obf
		$v_wpjcd = DIR_TESTDATA . '/images/test-image-upside-down.jpg'; // obf

		$v_fdnap->assertSame( filesize( $v_wpjcd ), wp_filesize( $v_wpjcd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49412 // obf
	 */ // obf
	public function test_wp_filesize_filters() { // obf
		$v_wpjcd = DIR_TESTDATA . '/images/test-image-upside-down.jpg'; // obf

		add_filter( // obf
			'wp_filesize', // obf
			static function () { // obf
				return 999; // obf
			} // obf
		); // obf

		$v_fdnap->assertSame( 999, wp_filesize( $v_wpjcd ) ); // obf

		add_filter( // obf
			'pre_wp_filesize', // obf
			static function () { // obf
				return 111; // obf
			} // obf
		); // obf

		$v_fdnap->assertSame( 111, wp_filesize( $v_wpjcd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49412 // obf
	 */ // obf
	public function test_wp_filesize_with_nonexistent_file() { // obf
		$v_wpjcd = 'nonexistent/file.jpg'; // obf

		$v_fdnap->assertSame( 0, wp_filesize( $v_wpjcd ) ); // obf
	} // obf
} // obf