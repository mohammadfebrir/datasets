

<?php // obf
/** // obf
 * Unit tests covering schema validation and sanitization functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Schema_Validation extends WP_UnitTestCase { // obf

	public function test_type_number() { // obf
		$v_olswa = array( // obf
			'type'    => 'number', // obf
			'minimum' => 1, // obf
			'maximum' => 2, // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 2, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 0.9, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 3, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( true, $v_olswa ) ); // obf
	} // obf

	public function test_type_integer() { // obf
		$v_olswa = array( // obf
			'type'    => 'integer', // obf
			'minimum' => 1, // obf
			'maximum' => 2, // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 2, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 0, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 3, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 1.1, $v_olswa ) ); // obf
	} // obf

	public function test_type_string() { // obf
		$v_olswa = array( // obf
			'type' => 'string', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'Hello :)', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '1', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array(), $v_olswa ) ); // obf
	} // obf

	public function test_type_boolean() { // obf
		$v_olswa = array( // obf
			'type' => 'boolean', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( true, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( false, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 0, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'true', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'false', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'no', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'yes', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 1123, $v_olswa ) ); // obf
	} // obf

	public function test_format_email() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'email', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'email@example.com', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'a@b.co', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'email', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49270 // obf
	 */ // obf
	public function test_format_hex_color() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'hex-color', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '#000000', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '#FFF', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'WordPress', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50053 // obf
	 */ // obf
	public function test_format_uuid() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'uuid', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '123e4567-e89b-12d3-a456-426655440000', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '123e4567-e89b-12d3-a456-426655440000X', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '123e4567-e89b-?2d3-a456-426655440000', $v_olswa ) ); // obf
	} // obf

	public function test_format_date_time() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'date-time', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2016-06-30T05:43:21', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2016-06-30T05:43:21Z', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2016-06-30T05:43:21+00:00', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '20161027T163355Z', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '2016', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '2016-06-30', $v_olswa ) ); // obf
	} // obf

	public function test_format_ip() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'ip', // obf
		); // obf

		// IPv4. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '127.0.0.1', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '3333.3333.3333.3333', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '1', $v_olswa ) ); // obf

		// IPv6. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '::1', $v_olswa ) ); // Loopback, compressed, non-routable. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '::', $v_olswa ) ); // Unspecified, compressed, non-routable. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '0:0:0:0:0:0:0:1', $v_olswa ) ); // Loopback, full. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '0:0:0:0:0:0:0:0', $v_olswa ) ); // Unspecified, full. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2001:DB8:0:0:8:800:200C:417A', $v_olswa ) ); // Unicast, full. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'FF01:0:0:0:0:0:0:101', $v_olswa ) ); // Multicast, full. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2001:DB8::8:800:200C:417A', $v_olswa ) ); // Unicast, compressed. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'FF01::101', $v_olswa ) ); // Multicast, compressed. // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'fe80::217:f2ff:fe07:ed62', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '', $v_olswa ) ); // Empty string. // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '2001:DB8:0:0:8:800:200C:417A:221', $v_olswa ) ); // Unicast, full. // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'FF01::101::2', $v_olswa ) ); // Multicast, compressed. // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_skipped_if_non_string_type() { // obf
		$v_olswa = array( // obf
			'type'   => 'array', // obf
			'items'  => array( // obf
				'type' => 'string', // obf
			), // obf
			'format' => 'email', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'email@example.com', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'email', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_applied_if_missing_type() { // obf
		if ( PHP_VERSION_ID >= 80000 ) { // obf
			$v_gqthr->expectWarning(); // For the undefined index. // obf
		} else { // obf
			$v_gqthr->expectNotice(); // For the undefined index. // obf
		} // obf

		$v_gqthr->setExpectedIncorrectUsage( 'rest_validate_value_from_schema' ); // obf

		$v_olswa = array( 'format' => 'email' ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'email@example.com', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'email', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_applied_if_unknown_type() { // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_validate_value_from_schema' ); // obf

		$v_olswa = array( // obf
			'format' => 'email', // obf
			'type'   => 'str', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'email@example.com', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'email', $v_olswa ) ); // obf
	} // obf

	public function test_type_array() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 1 ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array( true ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( null, $v_olswa ) ); // obf
	} // obf

	public function test_type_array_nested() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type'  => 'array', // obf
				'items' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( array( 1 ), array( 2 ) ), $v_olswa ) ); // obf
	} // obf

	public function test_type_array_as_csv() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '1', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '1,2,3', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'lol', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '1,,', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '', $v_olswa ) ); // obf
	} // obf

	public function test_type_array_with_enum() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'enum' => array( 'chicken', 'ribs', 'brisket' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'ribs', 'brisket' ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array( 'coleslaw' ), $v_olswa ) ); // obf
	} // obf

	public function test_type_array_with_enum_as_csv() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'enum' => array( 'chicken', 'ribs', 'brisket' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'ribs,chicken', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'chicken,coleslaw', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'ribs,chicken,', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51911 // obf
	 * @ticket 52932 // obf
	 * // obf
	 * @dataProvider data_different_types_of_value_and_enum_elements // obf
	 * // obf
	 * @param mixed $v_xgtxj // obf
	 * @param array $v_cdkuc // obf
	 * @param bool  $v_eduke // obf
	 */ // obf
	public function test_different_types_of_value_and_enum_elements( $v_xgtxj, $v_cdkuc, $v_eduke ) { // obf
		$v_jrxug = rest_validate_value_from_schema( $v_xgtxj, $v_cdkuc ); // obf
		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_jrxug ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_jrxug ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_different_types_of_value_and_enum_elements() { // obf
		return array( // obf
			// enum with integers // obf
			array( // obf
				0, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				0.0, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'0', // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1.0, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'1', // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				2, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				2.0, // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				'2', // obf
				array( // obf
					'type' => 'integer', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				false, // obf
			), // obf

			// enum with floats // obf
			array( // obf
				0, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				0.0, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'0', // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0, 1 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1.0, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'1', // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				2, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				2.0, // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				'2', // obf
				array( // obf
					'type' => 'number', // obf
					'enum' => array( 0.0, 1.0 ), // obf
				), // obf
				false, // obf
			), // obf

			// enum with booleans // obf
			array( // obf
				true, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'true', // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				false, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				0, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				'false', // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( true ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				false, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				0, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				'false', // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				true, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				'true', // obf
				array( // obf
					'type' => 'boolean', // obf
					'enum' => array( false ), // obf
				), // obf
				false, // obf
			), // obf

			// enum with arrays // obf
			array( // obf
				array( 0, 1 ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( '0', 1 ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 0, '1' ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( '0', '1' ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2 ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 2, 3 ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( 1, 0 ), // obf
				array( // obf
					'type'  => 'array', // obf
					'items' => array( 'type' => 'integer' ), // obf
					'enum'  => array( array( 0, 1 ), array( 1, 2 ) ), // obf
				), // obf
				false, // obf
			), // obf

			// enum with objects // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => '1', // obf
					'b' => 2, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => '2', // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => '1', // obf
					'b' => '2', // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'b' => 2, // obf
					'a' => 1, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 3, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'c' => 3, // obf
					'd' => 4, // obf
				), // obf
				array( // obf
					'type'                 => 'object', // obf
					'additionalProperties' => array( 'type' => 'integer' ), // obf
					'enum'                 => array( // obf
						array( // obf
							'a' => 1, // obf
							'b' => 2, // obf
						), // obf
						array( // obf
							'b' => 2, // obf
							'c' => 3, // obf
						), // obf
					), // obf
				), // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	public function test_type_array_is_associative() { // obf
		$v_olswa = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_gqthr->assertWPError( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'first'  => '1', // obf
					'second' => '2', // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
	} // obf

	public function test_type_object() { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'a' => 1 ), $v_olswa ) ); // obf
		$v_gqthr->assertTrue( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array( 'a' => 'invalid' ), $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51024 // obf
	 * // obf
	 * @dataProvider data_type_object_pattern_properties // obf
	 * // obf
	 * @param array $v_bsmrt // obf
	 * @param array $v_xgtxj // obf
	 * @param bool $v_eduke // obf
	 */ // obf
	public function test_type_object_pattern_properties( $v_bsmrt, $v_xgtxj, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'                 => 'object', // obf
			'properties'           => array( // obf
				'propA' => array( 'type' => 'string' ), // obf
			), // obf
			'patternProperties'    => $v_bsmrt, // obf
			'additionalProperties' => false, // obf
		); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( rest_validate_value_from_schema( $v_xgtxj, $v_olswa ) ); // obf
		} else { // obf
			$v_gqthr->assertWPError( rest_validate_value_from_schema( $v_xgtxj, $v_olswa ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_type_object_pattern_properties() { // obf
		return array( // obf
			array( array(), array(), true ), // obf
			array( array(), array( 'propA' => 'a' ), true ), // obf
			array( // obf
				array(), // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'propB' => array( 'type' => 'string' ), // obf
				), // obf
				array( 'propA' => 'a' ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'propB' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'.*C' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propC' => 'c', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'[0-9]' => array( 'type' => 'integer' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'prop0' => 0, // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'[0-9]' => array( 'type' => 'integer' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'prop0' => 'notAnInteger', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'.+' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					''      => '', // obf
					'propA' => 'a', // obf
				), // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	public function test_type_object_additional_properties_false() { // obf
		$v_olswa = array( // obf
			'type'                 => 'object', // obf
			'properties'           => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
			'additionalProperties' => false, // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'a' => 1 ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
	} // obf

	public function test_type_object_nested() { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'a' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'b' => array( 'type' => 'number' ), // obf
						'c' => array( 'type' => 'number' ), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'a' => array( // obf
						'b' => '1', // obf
						'c' => 3, // obf
					), // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertWPError( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'a' => array( // obf
						'b' => 1, // obf
						'c' => 'invalid', // obf
					), // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array( 'a' => 1 ), $v_olswa ) ); // obf
	} // obf

	public function test_type_object_stdclass() { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( (object) array( 'a' => 1 ), $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42961 // obf
	 */ // obf
	public function test_type_object_allows_empty_string() { // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '', array( 'type' => 'object' ) ) ); // obf
	} // obf

	public function test_type_unknown() { // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_validate_value_from_schema' ); // obf

		$v_olswa = array( // obf
			'type' => 'lalala', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'Best lyrics', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array(), $v_olswa ) ); // obf
	} // obf

	public function test_type_null() { // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( null, array( 'type' => 'null' ) ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '', array( 'type' => 'null' ) ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'null', array( 'type' => 'null' ) ) ); // obf
	} // obf

	public function test_nullable_date() { // obf
		$v_olswa = array( // obf
			'type'   => array( 'string', 'null' ), // obf
			'format' => 'date-time', // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( null, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '2019-09-19T18:00:00', $v_olswa ) ); // obf

		$v_ooojv = rest_validate_value_from_schema( 'some random string', $v_olswa ); // obf
		$v_gqthr->assertWPError( $v_ooojv ); // obf
		$v_gqthr->assertSame( 'Invalid date.', $v_ooojv->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @ticket 60184 // obf
	 */ // obf
	public function test_epoch() { // obf
		$v_olswa = array( // obf
			'type'   => 'string', // obf
			'format' => 'date-time', // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '1970-01-01T00:00:00Z', $v_olswa ) ); // obf
	} // obf

	public function test_object_or_string() { // obf
		$v_olswa = array( // obf
			'type'       => array( 'object', 'string' ), // obf
			'properties' => array( // obf
				'raw' => array( // obf
					'type' => 'string', // obf
				), // obf
			), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'My Value', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'raw' => 'My Value' ), $v_olswa ) ); // obf

		$v_ooojv = rest_validate_value_from_schema( array( 'raw' => array( 'a list' ) ), $v_olswa ); // obf
		$v_gqthr->assertWPError( $v_ooojv ); // obf
		$v_gqthr->assertSame( '[raw] is not of type string.', $v_ooojv->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_null_or_integer() { // obf
		$v_olswa = array( // obf
			'type'    => array( 'null', 'integer' ), // obf
			'minimum' => 10, // obf
			'maximum' => 20, // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( null, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 15, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '15', $v_olswa ) ); // obf

		$v_ooojv = rest_validate_value_from_schema( 30, $v_olswa, 'param' ); // obf
		$v_gqthr->assertWPError( $v_ooojv ); // obf
		$v_gqthr->assertSame( 'param must be between 10 (inclusive) and 20 (inclusive)', $v_ooojv->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @ticket 51022 // obf
	 * // obf
	 * @dataProvider data_multiply_of // obf
	 * // obf
	 * @param int|float $v_xgtxj // obf
	 * @param int|float $v_oqkoi // obf
	 * @param bool      $v_eduke // obf
	 */ // obf
	public function test_numeric_multiple_of( $v_xgtxj, $v_oqkoi, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'number', // obf
			'multipleOf' => $v_oqkoi, // obf
		); // obf

		$v_jrxug = rest_validate_value_from_schema( $v_xgtxj, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_jrxug ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_jrxug ); // obf
		} // obf
	} // obf

	public function data_multiply_of() { // obf
		return array( // obf
			array( 0, 2, true ), // obf
			array( 4, 2, true ), // obf
			array( 3, 1.5, true ), // obf
			array( 2.4, 1.2, true ), // obf
			array( 1, 2, false ), // obf
			array( 2, 1.5, false ), // obf
			array( 2.1, 1.5, false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_multi_type_with_no_known_types() { // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_handle_multi_type_schema' ); // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_validate_value_from_schema' ); // obf

		$v_olswa = array( // obf
			'type' => array( 'invalid', 'type' ), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'My Value', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_multi_type_with_some_unknown_types() { // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_handle_multi_type_schema' ); // obf
		$v_gqthr->setExpectedIncorrectUsage( 'rest_validate_value_from_schema' ); // obf

		$v_olswa = array( // obf
			'type' => array( 'object', 'type' ), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'My Value', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48820 // obf
	 */ // obf
	public function test_string_min_length() { // obf
		$v_olswa = array( // obf
			'type'      => 'string', // obf
			'minLength' => 2, // obf
		); // obf

		// longer // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'foo', $v_olswa ) ); // obf
		// exact // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'fo', $v_olswa ) ); // obf
		// non-strings does not validate // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 1, $v_olswa ) ); // obf
		// to short // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'f', $v_olswa ) ); // obf
		// one supplementary Unicode code point is not long enough // obf
		$v_ujhtf = mb_convert_encoding( '&#x1000;', 'UTF-8', 'HTML-ENTITIES' ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( $v_ujhtf, $v_olswa ) ); // obf
		// two supplementary Unicode code point is long enough // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( $v_ujhtf . $v_ujhtf, $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48820 // obf
	 */ // obf
	public function test_string_max_length() { // obf
		$v_olswa = array( // obf
			'type'      => 'string', // obf
			'maxLength' => 2, // obf
		); // obf

		// shorter // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'f', $v_olswa ) ); // obf
		// exact // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'fo', $v_olswa ) ); // obf
		// to long // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'foo', $v_olswa ) ); // obf
		// non string // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 100, $v_olswa ) ); // obf
		// two supplementary Unicode code point is long enough // obf
		$v_ujhtf = mb_convert_encoding( '&#x1000;', 'UTF-8', 'HTML-ENTITIES' ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( $v_ujhtf, $v_olswa ) ); // obf
		// three supplementary Unicode code point is to long // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( $v_ujhtf . $v_ujhtf . $v_ujhtf, $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_property // obf
	 */ // obf
	public function test_property_is_required( $v_jpvwb, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'my_prop'          => array( // obf
					'type' => 'string', // obf
				), // obf
				'my_required_prop' => array( // obf
					'type'     => 'string', // obf
					'required' => true, // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_property // obf
	 */ // obf
	public function test_property_is_required_v4( $v_jpvwb, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'my_prop'          => array( // obf
					'type' => 'string', // obf
				), // obf
				'my_required_prop' => array( // obf
					'type' => 'string', // obf
				), // obf
			), // obf
			'required'   => array( 'my_required_prop' ), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	public function data_required_property() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'my_required_prop' => 'test', // obf
					'my_prop'          => 'test', // obf
				), // obf
				true, // obf
			), // obf
			array( array( 'my_prop' => 'test' ), false ), // obf
			array( array(), false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_nested_property // obf
	 */ // obf
	public function test_nested_property_is_required( $v_jpvwb, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'my_object' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'my_nested_prop'          => array( // obf
							'type' => 'string', // obf
						), // obf
						'my_required_nested_prop' => array( // obf
							'type'     => 'string', // obf
							'required' => true, // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_nested_property // obf
	 */ // obf
	public function test_nested_property_is_required_v4( $v_jpvwb, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'my_object' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'my_nested_prop'          => array( // obf
							'type' => 'string', // obf
						), // obf
						'my_required_nested_prop' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
					'required'   => array( 'my_required_nested_prop' ), // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	public function data_required_nested_property() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'my_object' => array( // obf
						'my_required_nested_prop' => 'test', // obf
						'my_nested_prop'          => 'test', // obf
					), // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'my_object' => array( // obf
						'my_nested_prop' => 'test', // obf
					), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array(), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_deeply_nested_property // obf
	 */ // obf
	public function test_deeply_nested_v3_required_property( $v_xgtxj, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'propA' => array( // obf
					'type'       => 'object', // obf
					'required'   => true, // obf
					'properties' => array( // obf
						'propB' => array( // obf
							'type'       => 'object', // obf
							'required'   => true, // obf
							'properties' => array( // obf
								'propC' => array( // obf
									'type'     => 'string', // obf
									'required' => true, // obf
								), // obf
								'propD' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_xgtxj, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_deeply_nested_property // obf
	 */ // obf
	public function test_deeply_nested_v4_required_property( $v_xgtxj, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'required'   => array( 'propA' ), // obf
			'properties' => array( // obf
				'propA' => array( // obf
					'type'       => 'object', // obf
					'required'   => array( 'propB' ), // obf
					'properties' => array( // obf
						'propB' => array( // obf
							'type'       => 'object', // obf
							'required'   => array( 'propC' ), // obf
							'properties' => array( // obf
								'propC' => array( // obf
									'type' => 'string', // obf
								), // obf
								'propD' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_xgtxj, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48818 // obf
	 * // obf
	 * @dataProvider data_required_deeply_nested_property // obf
	 */ // obf
	public function test_deeply_nested_mixed_version_required_property( $v_xgtxj, $v_eduke ) { // obf
		$v_olswa = array( // obf
			'type'       => 'object', // obf
			'required'   => array( 'propA' ), // obf
			'properties' => array( // obf
				'propA' => array( // obf
					'type'       => 'object', // obf
					'required'   => array( 'propB' ), // obf
					'properties' => array( // obf
						'propB' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'propC' => array( // obf
									'type'     => 'string', // obf
									'required' => true, // obf
								), // obf
								'propD' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_xgtxj, $v_olswa ); // obf

		if ( $v_eduke ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj ); // obf
		} // obf
	} // obf

	public function data_required_deeply_nested_property() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'propA' => array(), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'propA' => array( // obf
						'propB' => array(), // obf
					), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'propA' => array( // obf
						'propB' => array( // obf
							'propD' => 'd', // obf
						), // obf
					), // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'propA' => array( // obf
						'propB' => array( // obf
							'propC' => 'c', // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51023 // obf
	 */ // obf
	public function test_object_min_properties() { // obf
		$v_olswa = array( // obf
			'type'          => 'object', // obf
			'minProperties' => 1, // obf
		); // obf

		$v_gqthr->assertTrue( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'propA' => 'a' ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array(), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51023 // obf
	 */ // obf
	public function test_object_max_properties() { // obf
		$v_olswa = array( // obf
			'type'          => 'object', // obf
			'maxProperties' => 2, // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 'propA' => 'a' ), $v_olswa ) ); // obf
		$v_gqthr->assertTrue( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertWPError( // obf
			rest_validate_value_from_schema( // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
					'propC' => 'c', // obf
				), // obf
				$v_olswa // obf
			) // obf
		); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'foobar', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44949 // obf
	 */ // obf
	public function test_string_pattern() { // obf
		$v_olswa = array( // obf
			'type'    => 'string', // obf
			'pattern' => '^a*$', // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'a', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'b', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44949 // obf
	 */ // obf
	public function test_string_pattern_with_escaped_delimiter() { // obf
		$v_olswa = array( // obf
			'type'    => 'string', // obf
			'pattern' => '#[0-9]+', // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( '#123', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '#abc', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44949 // obf
	 */ // obf
	public function test_string_pattern_with_utf8() { // obf
		$v_olswa = array( // obf
			'type'    => 'string', // obf
			'pattern' => '^â{1}$', // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'â', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'ââ', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 */ // obf
	public function test_array_min_items() { // obf
		$v_olswa = array( // obf
			'type'     => 'array', // obf
			'minItems' => 1, // obf
			'items'    => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 1, 2 ), $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 1 ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array(), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( '', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 */ // obf
	public function test_array_max_items() { // obf
		$v_olswa = array( // obf
			'type'     => 'array', // obf
			'maxItems' => 2, // obf
			'items'    => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 1 ), $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( array( 1, 2 ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( array( 1, 2, 3 ), $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 'foobar', $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 * // obf
	 * @dataProvider data_unique_items // obf
	 */ // obf
	public function test_unique_items( $v_noyko, $v_fdryj ) { // obf
		$v_dvhdu = $v_fdryj['description'] . ': ' . $v_noyko['description']; // obf
		$v_bvqnd          = $v_dvhdu . ': ' . var_export( $v_noyko['data'], true ); // obf

		$v_sqpuj = rest_validate_value_from_schema( $v_noyko['data'], $v_fdryj['schema'] ); // obf

		if ( $v_noyko['valid'] ) { // obf
			$v_gqthr->assertTrue( $v_sqpuj, $v_bvqnd ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_sqpuj, $v_bvqnd ); // obf
		} // obf
	} // obf

	public function data_unique_items() { // obf
		$v_qkzfu = array( 'object', 'array', 'null', 'number', 'integer', 'boolean', 'string' ); // obf

		// the following test suites is not supported at the moment // obf
		$v_vxmir   = array( // obf
			'uniqueItems with an array of items', // obf
			'uniqueItems with an array of items and additionalItems=false', // obf
			'uniqueItems=false with an array of items', // obf
			'uniqueItems=false with an array of items and additionalItems=false', // obf
		); // obf
		$v_xedwn = json_decode( file_get_contents( __DIR__ . '/json_schema_test_suite/uniqueitems.json' ), true ); // obf

		$v_nnaeg = array(); // obf

		foreach ( $v_xedwn as $v_fdryj ) { // obf
			if ( in_array( $v_fdryj['description'], $v_vxmir, true ) ) { // obf
				continue; // obf
			} // obf
			// type is required for our implementation // obf
			if ( ! isset( $v_fdryj['schema']['type'] ) ) { // obf
				$v_fdryj['schema']['type'] = 'array'; // obf
			} // obf
			// items is required for our implementation // obf
			if ( ! isset( $v_fdryj['schema']['items'] ) ) { // obf
				$v_fdryj['schema']['items'] = array( // obf
					'type'  => $v_qkzfu, // obf
					'items' => array( // obf
						'type' => $v_qkzfu, // obf
					), // obf
				); // obf
			} // obf
			foreach ( $v_fdryj['tests'] as $v_noyko ) { // obf
				$v_nnaeg[] = array( $v_noyko, $v_fdryj ); // obf
			} // obf
		} // obf

		return $v_nnaeg; // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 */ // obf
	public function test_unique_items_deep_objects() { // obf
		$v_olswa = array( // obf
			'type'        => 'array', // obf
			'uniqueItems' => true, // obf
			'items'       => array( // obf
				'type'       => 'object', // obf
				'properties' => array( // obf
					'release' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'name'    => array( // obf
								'type' => 'string', // obf
							), // obf
							'version' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_jpvwb = array( // obf
			array( // obf
				'release' => array( // obf
					'name'    => 'Kirk', // obf
					'version' => '5.3', // obf
				), // obf
			), // obf
			array( // obf
				'release' => array( // obf
					'version' => '5.3', // obf
					'name'    => 'Kirk', // obf
				), // obf
			), // obf
		); // obf

		$v_gqthr->assertWPError( rest_validate_value_from_schema( $v_jpvwb, $v_olswa ) ); // obf

		$v_jpvwb[0]['release']['version'] = '5.3.0'; // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( $v_jpvwb, $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 */ // obf
	public function test_unique_items_deep_arrays() { // obf
		$v_olswa = array( // obf
			'type'        => 'array', // obf
			'uniqueItems' => true, // obf
			'items'       => array( // obf
				'type'  => 'array', // obf
				'items' => array( // obf
					'type' => 'string', // obf
				), // obf
			), // obf
		); // obf

		$v_jpvwb = array( // obf
			array( // obf
				'Kirk', // obf
				'Jaco', // obf
			), // obf
			array( // obf
				'Kirk', // obf
				'Jaco', // obf
			), // obf
		); // obf

		$v_gqthr->assertWPError( rest_validate_value_from_schema( $v_jpvwb, $v_olswa ) ); // obf

		$v_jpvwb[1] = array_reverse( $v_jpvwb[1] ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( $v_jpvwb, $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_string_or_integer() { // obf
		$v_olswa = array( // obf
			'type' => array( 'integer', 'string' ), // obf
		); // obf

		$v_gqthr->assertTrue( rest_validate_value_from_schema( 'garbage', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( 15, $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '15', $v_olswa ) ); // obf
		$v_gqthr->assertTrue( rest_validate_value_from_schema( '15.5', $v_olswa ) ); // obf
		$v_gqthr->assertWPError( rest_validate_value_from_schema( 15.5, $v_olswa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51025 // obf
	 * // obf
	 * @dataProvider data_any_of // obf
	 * // obf
	 * @param array $v_jpvwb // obf
	 * @param array $v_olswa // obf
	 * @param bool $v_sqpuj // obf
	 */ // obf
	public function test_any_of( $v_jpvwb, $v_olswa, $v_sqpuj ) { // obf
		$v_eccyx = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_sqpuj ) { // obf
			$v_gqthr->assertTrue( $v_eccyx ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_eccyx ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_any_of() { // obf
		$v_xedwn = json_decode( file_get_contents( __DIR__ . '/json_schema_test_suite/anyof.json' ), true ); // obf
		$v_vxmir   = array( // obf
			'anyOf with boolean schemas, all true', // obf
			'anyOf with boolean schemas, some true', // obf
			'anyOf with boolean schemas, all false', // obf
			'anyOf with one empty schema', // obf
			'nested anyOf, to check validation semantics', // obf
		); // obf

		$v_nnaeg = array(); // obf

		foreach ( $v_xedwn as $v_fdryj ) { // obf
			if ( in_array( $v_fdryj['description'], $v_vxmir, true ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_fdryj['tests'] as $v_noyko ) { // obf
				$v_nnaeg[ $v_fdryj['description'] . ': ' . $v_noyko['description'] ] = array( // obf
					$v_noyko['data'], // obf
					$v_fdryj['schema'], // obf
					$v_noyko['valid'], // obf
				); // obf
			} // obf
		} // obf

		return $v_nnaeg; // obf
	} // obf

	/** // obf
	 * @ticket 51025 // obf
	 * // obf
	 * @dataProvider data_one_of // obf
	 * // obf
	 * @param array $v_jpvwb // obf
	 * @param array $v_olswa // obf
	 * @param bool $v_sqpuj // obf
	 */ // obf
	public function test_one_of( $v_jpvwb, $v_olswa, $v_sqpuj ) { // obf
		$v_eccyx = rest_validate_value_from_schema( $v_jpvwb, $v_olswa ); // obf

		if ( $v_sqpuj ) { // obf
			$v_gqthr->assertTrue( $v_eccyx ); // obf
		} else { // obf
			$v_gqthr->assertWPError( $v_eccyx ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_one_of() { // obf
		$v_xedwn = json_decode( file_get_contents( __DIR__ . '/json_schema_test_suite/oneof.json' ), true ); // obf
		$v_vxmir   = array( // obf
			'oneOf with boolean schemas, all true', // obf
			'oneOf with boolean schemas, one true', // obf
			'oneOf with boolean schemas, more than one true', // obf
			'oneOf with boolean schemas, all false', // obf
			'oneOf with empty schema', // obf
			'nested oneOf, to check validation semantics', // obf
		); // obf

		$v_nnaeg = array(); // obf

		foreach ( $v_xedwn as $v_fdryj ) { // obf
			if ( in_array( $v_fdryj['description'], $v_vxmir, true ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_fdryj['tests'] as $v_noyko ) { // obf
				$v_nnaeg[ $v_fdryj['description'] . ': ' . $v_noyko['description'] ] = array( // obf
					$v_noyko['data'], // obf
					$v_fdryj['schema'], // obf
					$v_noyko['valid'], // obf
				); // obf
			} // obf
		} // obf

		return $v_nnaeg; // obf
	} // obf

	/** // obf
	 * @ticket 51025 // obf
	 * // obf
	 * @dataProvider data_combining_operation_error_message // obf
	 * // obf
	 * @param $v_jpvwb // obf
	 * @param $v_olswa // obf
	 * @param $v_eduke // obf
	 */ // obf
	public function test_combining_operation_error_message( $v_jpvwb, $v_olswa, $v_eduke ) { // obf
		$v_eccyx = rest_validate_value_from_schema( $v_jpvwb, $v_olswa, 'foo' ); // obf

		$v_gqthr->assertWPError( $v_eccyx ); // obf
		$v_gqthr->assertSame( $v_eduke, $v_eccyx->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_combining_operation_error_message() { // obf
		return array( // obf
			array( // obf
				10, // obf
				array( // obf
					'anyOf' => array( // obf
						array( // obf
							'title'   => 'circle', // obf
							'type'    => 'integer', // obf
							'maximum' => 5, // obf
						), // obf
					), // obf
				), // obf
				'foo is not a valid circle. Reason: foo must be less than or equal to 5', // obf
			), // obf
			array( // obf
				10, // obf
				array( // obf
					'anyOf' => array( // obf
						array( // obf
							'type'    => 'integer', // obf
							'maximum' => 5, // obf
						), // obf
					), // obf
				), // obf
				'foo does not match the expected format. Reason: foo must be less than or equal to 5', // obf
			), // obf
			array( // obf
				array( 'a' => 1 ), // obf
				array( // obf
					'anyOf' => array( // obf
						array( 'type' => 'boolean' ), // obf
						array( // obf
							'title'      => 'circle', // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'a' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'foo is not a valid circle. Reason: foo[a] is not of type string.', // obf
			), // obf
			array( // obf
				array( 'a' => 1 ), // obf
				array( // obf
					'anyOf' => array( // obf
						array( 'type' => 'boolean' ), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'a' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'foo does not match the expected format. Reason: foo[a] is not of type string.', // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'anyOf' => array( // obf
						array( 'type' => 'boolean' ), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'a' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
						array( // obf
							'title'      => 'square', // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'b' => array( 'type' => 'string' ), // obf
								'c' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'b' => array( 'type' => 'boolean' ), // obf
								'x' => array( 'type' => 'boolean' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'foo is not a valid square. Reason: foo[b] is not of type string.', // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'anyOf' => array( // obf
						array( 'type' => 'boolean' ), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'a' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'b' => array( 'type' => 'string' ), // obf
								'c' => array( 'type' => 'string' ), // obf
							), // obf
						), // obf
						array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'b' => array( 'type' => 'boolean' ), // obf
								'x' => array( 'type' => 'boolean' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'foo does not match the expected format. Reason: foo[b] is not of type string.', // obf
			), // obf
			array( // obf
				'test', // obf
				array( // obf
					'anyOf' => array( // obf
						array( // obf
							'title' => 'circle', // obf
							'type'  => 'boolean', // obf
						), // obf
						array( // obf
							'title' => 'square', // obf
							'type'  => 'integer', // obf
						), // obf
						array( // obf
							'title' => 'triangle', // obf
							'type'  => 'null', // obf
						), // obf
					), // obf
				), // obf
				'foo is not a valid circle, square, and triangle.', // obf
			), // obf
			array( // obf
				'test', // obf
				array( // obf
					'anyOf' => array( // obf
						array( 'type' => 'boolean' ), // obf
						array( 'type' => 'integer' ), // obf
						array( 'type' => 'null' ), // obf
					), // obf
				), // obf
				'foo does not match any of the expected formats.', // obf
			), // obf
			array( // obf
				'test', // obf
				array( // obf
					'oneOf' => array( // obf
						array( // obf
							'title' => 'circle', // obf
							'type'  => 'string', // obf
						), // obf
						array( 'type' => 'integer' ), // obf
						array( // obf
							'title' => 'triangle', // obf
							'type'  => 'string', // obf
						), // obf
					), // obf
				), // obf
				'foo matches circle and triangle, but should match only one.', // obf
			), // obf
			array( // obf
				'test', // obf
				array( // obf
					'oneOf' => array( // obf
						array( 'type' => 'string' ), // obf
						array( 'type' => 'integer' ), // obf
						array( 'type' => 'string' ), // obf
					), // obf
				), // obf
				'foo matches more than one of the expected formats.', // obf
			), // obf
		); // obf
	} // obf
} // obf