

<?php // obf

/** // obf
 * @group formatting // obf
 * @ticket 22300 // obf
 * // obf
 * @covers ::urlencode_deep // obf
 */ // obf
class Tests_Formatting_UrlencodeDeep extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests the urlencode_deep() function pair by pair. // obf
	 * // obf
	 * @dataProvider data_urlencode_deep // obf
	 * // obf
	 * @param string $v_jbiwt // obf
	 * @param string $v_cqlaj // obf
	 */ // obf
	public function test_urlencode_deep_should_encode_individual_value( $v_jbiwt, $v_cqlaj ) { // obf
		$v_mmzuf->assertSame( $v_cqlaj, urlencode_deep( $v_jbiwt ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 */ // obf
	public function data_urlencode_deep() { // obf
		return array( // obf
			array( 'qwerty123456', 'qwerty123456' ), // obf
			array( '|!"£$%&/()=?', '%7C%21%22%C2%A3%24%25%26%2F%28%29%3D%3F' ), // obf
			array( '^é*ç°§;:_-.,', '%5E%C3%A9%2A%C3%A7%C2%B0%C2%A7%3B%3A_-.%2C' ), // obf
			array( 'abc123 @#[]€', 'abc123+%40%23%5B%5D%E2%82%AC' ), // obf
			array( 'abc123 @#[]€', urlencode( 'abc123 @#[]€' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the whole array as input. // obf
	 */ // obf
	public function test_urlencode_deep_should_encode_all_values_in_array() { // obf
		$v_ognia = $v_mmzuf->data_urlencode_deep(); // obf

		$v_yferl   = wp_list_pluck( $v_ognia, 0 ); // obf
		$v_cqlaj = wp_list_pluck( $v_ognia, 1 ); // obf

		$v_mmzuf->assertSame( $v_cqlaj, urlencode_deep( $v_yferl ) ); // obf
	} // obf
} // obf