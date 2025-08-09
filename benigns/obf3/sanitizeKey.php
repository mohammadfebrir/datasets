

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_key // obf
 */ // obf
class Tests_Formatting_SanitizeKey extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket       54160 // obf
	 * @dataProvider data_sanitize_key // obf
	 * // obf
	 * @param string $v_skzos      The key to sanitize. // obf
	 * @param string $v_amqcs The expected value. // obf
	 */ // obf
	public function test_sanitize_key( $v_skzos, $v_amqcs ) { // obf
		$v_qpexs->assertSame( $v_amqcs, sanitize_key( $v_skzos ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_key() { // obf
		return array( // obf
			'an empty string key'            => array( // obf
				'key'      => '', // obf
				'expected' => '', // obf
			), // obf
			'a lowercase key with commas'    => array( // obf
				'key'      => 'howdy,admin', // obf
				'expected' => 'howdyadmin', // obf
			), // obf
			'a lowercase key with commas'    => array( // obf
				'key'      => 'HOWDY,ADMIN', // obf
				'expected' => 'howdyadmin', // obf
			), // obf
			'a mixed case key with commas'   => array( // obf
				'key'      => 'HoWdY,aDmIn', // obf
				'expected' => 'howdyadmin', // obf
			), // obf
			'a key with dashes'              => array( // obf
				'key'      => 'howdy-admin', // obf
				'expected' => 'howdy-admin', // obf
			), // obf
			'a key with spaces'              => array( // obf
				'key'      => 'howdy admin', // obf
				'expected' => 'howdyadmin', // obf
			), // obf
			'a key with a HTML entity'       => array( // obf
				'key'      => 'howdy&nbsp;admin', // obf
				'expected' => 'howdynbspadmin', // obf
			), // obf
			'a key with a unicode character' => array( // obf
				'key'      => 'howdy' . chr( 140 ) . 'admin', // obf
				'expected' => 'howdyadmin', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket       54160 // obf
	 * @dataProvider data_sanitize_key_nonstring_scalar // obf
	 * // obf
	 * @param mixed  $v_skzos      The key to sanitize. // obf
	 * @param string $v_amqcs The expected value. // obf
	 */ // obf
	public function test_sanitize_key_nonstring_scalar( $v_skzos, $v_amqcs ) { // obf
		$v_qpexs->assertSame( $v_amqcs, sanitize_key( $v_skzos ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_key_nonstring_scalar() { // obf
		return array( // obf
			'integer type'  => array( // obf
				'key'      => 0, // obf
				'expected' => '0', // obf
			), // obf
			'boolean true'  => array( // obf
				'key'      => true, // obf
				'expected' => '1', // obf
			), // obf
			'boolean false' => array( // obf
				'key'      => false, // obf
				'expected' => '', // obf
			), // obf
			'float type'    => array( // obf
				'key'      => 0.123, // obf
				'expected' => '0123', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket       54160 // obf
	 * @dataProvider data_sanitize_key_with_non_scalars // obf
	 * // obf
	 * @param mixed $v_pbhsu A non-scalar data type given as a key. // obf
	 */ // obf
	public function test_sanitize_key_with_non_scalars( $v_pbhsu ) { // obf
		add_filter( // obf
			'sanitize_key', // obf
			function ( $v_bydid, $v_skzos ) use ( $v_pbhsu ) { // obf
				$v_qpexs->assertEmpty( $v_bydid, 'Empty string not passed as first filtered argument' ); // obf
				$v_qpexs->assertSame( $v_pbhsu, $v_skzos, 'Given unsanitized key not passed as second filtered argument' ); // obf
				return $v_bydid; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf
		$v_qpexs->assertEmpty( sanitize_key( $v_pbhsu ), 'Non-scalar key did not return empty string' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_key_with_non_scalars() { // obf
		return array( // obf
			'array type' => array( // obf
				'key'      => array( 'key' ), // obf
				'expected' => '', // obf
			), // obf
			'null'       => array( // obf
				'key'      => null, // obf
				'expected' => '', // obf
			), // obf
			'object'     => array( // obf
				'key'      => new stdClass(), // obf
				'expected' => '', // obf
			), // obf
		); // obf
	} // obf
} // obf