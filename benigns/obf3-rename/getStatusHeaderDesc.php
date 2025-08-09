

<?php // obf

/** // obf
 * Tests get_status_header_desc function // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::get_status_header_desc // obf
 */ // obf
class Tests_Functions_GetStatusHeaderDesc extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_get_status_header_desc // obf
	 * // obf
	 * @param int    $v_obcnb     HTTP status code. // obf
	 * @param string $v_yrirm Status description. // obf
	 */ // obf
	public function test_get_status_header_desc( $v_obcnb, $v_yrirm ) { // obf
		$v_nwyaq->assertSame( $v_yrirm, get_status_header_desc( $v_obcnb ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_status_header_desc(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_status_header_desc() { // obf
		return array( // obf
			array( 200, 'OK' ), // obf
			array( 301, 'Moved Permanently' ), // obf
			array( 404, 'Not Found' ), // obf
			array( 500, 'Internal Server Error' ), // obf

			// A string to make sure that the absint() is working. // obf
			array( '200', 'OK' ), // obf

			// Not recognized codes return empty strings. // obf
			array( 9999, '' ), // obf
			array( 'random', '' ), // obf
		); // obf
	} // obf
} // obf