

<?php // obf
/** // obf
 * Unit tests covering schema validation and sanitization functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Schema_Sanitization extends WP_UnitTestCase { // obf

	public function test_type_number() { // obf
		$v_agfud = array( // obf
			'type' => 'number', // obf
		); // obf
		$v_tafwc->assertSame( 1.0, rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1.10, rest_sanitize_value_from_schema( '1.10', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1.0, rest_sanitize_value_from_schema( '1abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 0.0, rest_sanitize_value_from_schema( 'abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 0.0, rest_sanitize_value_from_schema( array(), $v_agfud ) ); // obf
	} // obf

	public function test_type_integer() { // obf
		$v_agfud = array( // obf
			'type' => 'integer', // obf
		); // obf
		$v_tafwc->assertSame( 1, rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1, rest_sanitize_value_from_schema( '1.10', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1, rest_sanitize_value_from_schema( '1abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 0, rest_sanitize_value_from_schema( 'abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 0, rest_sanitize_value_from_schema( array(), $v_agfud ) ); // obf
	} // obf

	public function test_type_string() { // obf
		$v_agfud = array( // obf
			'type' => 'string', // obf
		); // obf
		$v_tafwc->assertSame( 'Hello', rest_sanitize_value_from_schema( 'Hello', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '1.10', rest_sanitize_value_from_schema( '1.10', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '1.1', rest_sanitize_value_from_schema( 1.1, $v_agfud ) ); // obf
		$v_tafwc->assertSame( '1', rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
	} // obf

	public function test_type_boolean() { // obf
		$v_agfud = array( // obf
			'type' => 'boolean', // obf
		); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( '1', $v_agfud ) ); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( 'true', $v_agfud ) ); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( '100', $v_agfud ) ); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( '0', $v_agfud ) ); // obf
		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( 'false', $v_agfud ) ); // obf
		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( 0, $v_agfud ) ); // obf
	} // obf

	public function test_format_email() { // obf
		$v_agfud = array( // obf
			'type'   => 'string', // obf
			'format' => 'email', // obf
		); // obf
		$v_tafwc->assertSame( 'email@example.com', rest_sanitize_value_from_schema( 'email@example.com', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 'a@b.c', rest_sanitize_value_from_schema( 'a@b.c', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 'invalid', rest_sanitize_value_from_schema( 'invalid', $v_agfud ) ); // obf
	} // obf

	public function test_format_ip() { // obf
		$v_agfud = array( // obf
			'type'   => 'string', // obf
			'format' => 'ip', // obf
		); // obf

		$v_tafwc->assertSame( '127.0.0.1', rest_sanitize_value_from_schema( '127.0.0.1', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 'hello', rest_sanitize_value_from_schema( 'hello', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '2001:DB8:0:0:8:800:200C:417A', rest_sanitize_value_from_schema( '2001:DB8:0:0:8:800:200C:417A', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49270 // obf
	 */ // obf
	public function test_format_hex_color() { // obf
		$v_agfud = array( // obf
			'type'   => 'string', // obf
			'format' => 'hex-color', // obf
		); // obf
		$v_tafwc->assertSame( '#000000', rest_sanitize_value_from_schema( '#000000', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '#FFF', rest_sanitize_value_from_schema( '#FFF', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '', rest_sanitize_value_from_schema( 'WordPress', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50053 // obf
	 */ // obf
	public function test_format_uuid() { // obf
		$v_agfud = array( // obf
			'type'   => 'string', // obf
			'format' => 'uuid', // obf
		); // obf
		$v_tafwc->assertSame( '44', rest_sanitize_value_from_schema( 44, $v_agfud ) ); // obf
		$v_tafwc->assertSame( 'hello', rest_sanitize_value_from_schema( 'hello', $v_agfud ) ); // obf
		$v_tafwc->assertSame( // obf
			'123e4567-e89b-12d3-a456-426655440000', // obf
			rest_sanitize_value_from_schema( '123e4567-e89b-12d3-a456-426655440000', $v_agfud ) // obf
		); // obf
	} // obf

	public function test_type_array() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf
		$v_tafwc->assertEquals( array( 1 ), rest_sanitize_value_from_schema( array( 1 ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( 1 ), rest_sanitize_value_from_schema( array( '1' ), $v_agfud ) ); // obf
	} // obf

	public function test_type_array_nested() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type'  => 'array', // obf
				'items' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_tafwc->assertEquals( array( array( 1 ), array( 2 ) ), rest_sanitize_value_from_schema( array( array( 1 ), array( 2 ) ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( array( 1 ), array( 2 ) ), rest_sanitize_value_from_schema( array( array( '1' ), array( '2' ) ), $v_agfud ) ); // obf
	} // obf

	public function test_type_array_as_csv() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'number', // obf
			), // obf
		); // obf
		$v_tafwc->assertEquals( array( 1, 2 ), rest_sanitize_value_from_schema( '1,2', $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( 1, 2, 0 ), rest_sanitize_value_from_schema( '1,2,a', $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( 1, 2 ), rest_sanitize_value_from_schema( '1,2,', $v_agfud ) ); // obf
	} // obf

	public function test_type_array_with_enum() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'enum' => array( 'chicken', 'ribs', 'brisket' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_tafwc->assertSame( array( 'ribs', 'brisket' ), rest_sanitize_value_from_schema( array( 'ribs', 'brisket' ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'coleslaw' ), rest_sanitize_value_from_schema( array( 'coleslaw' ), $v_agfud ) ); // obf
	} // obf

	public function test_type_array_with_enum_as_csv() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'enum' => array( 'chicken', 'ribs', 'brisket' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_tafwc->assertSame( array( 'ribs', 'chicken' ), rest_sanitize_value_from_schema( 'ribs,chicken', $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'chicken', 'coleslaw' ), rest_sanitize_value_from_schema( 'chicken,coleslaw', $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'chicken', 'coleslaw' ), rest_sanitize_value_from_schema( 'chicken,coleslaw,', $v_agfud ) ); // obf
	} // obf

	public function test_type_array_is_associative() { // obf
		$v_agfud = array( // obf
			'type'  => 'array', // obf
			'items' => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf
		$v_tafwc->assertSame( // obf
			array( '1', '2' ), // obf
			rest_sanitize_value_from_schema( // obf
				array( // obf
					'first'  => '1', // obf
					'second' => '2', // obf
				), // obf
				$v_agfud // obf
			) // obf
		); // obf
	} // obf

	public function test_type_object() { // obf
		$v_agfud = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_tafwc->assertEquals( array( 'a' => 1 ), rest_sanitize_value_from_schema( array( 'a' => 1 ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( 'a' => 1 ), rest_sanitize_value_from_schema( array( 'a' => '1' ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( // obf
			array( // obf
				'a' => 1, // obf
				'b' => 1, // obf
			), // obf
			rest_sanitize_value_from_schema( // obf
				array( // obf
					'a' => '1', // obf
					'b' => 1, // obf
				), // obf
				$v_agfud // obf
			) // obf
		); // obf
	} // obf

	public function test_type_object_strips_additional_properties() { // obf
		$v_agfud = array( // obf
			'type'                 => 'object', // obf
			'properties'           => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
			'additionalProperties' => false, // obf
		); // obf
		$v_tafwc->assertEquals( array( 'a' => 1 ), rest_sanitize_value_from_schema( array( 'a' => 1 ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( array( 'a' => 1 ), rest_sanitize_value_from_schema( array( 'a' => '1' ), $v_agfud ) ); // obf
		$v_tafwc->assertEquals( // obf
			array( 'a' => 1 ), // obf
			rest_sanitize_value_from_schema( // obf
				array( // obf
					'a' => '1', // obf
					'b' => 1, // obf
				), // obf
				$v_agfud // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51024 // obf
	 * // obf
	 * @dataProvider data_type_object_pattern_properties // obf
	 * // obf
	 * @param array $v_ntdtz // obf
	 * @param array $v_hwrmt // obf
	 * @param array $v_tyvmg // obf
	 */ // obf
	public function test_type_object_pattern_properties( $v_ntdtz, $v_hwrmt, $v_tyvmg ) { // obf
		$v_agfud = array( // obf
			'type'                 => 'object', // obf
			'properties'           => array( // obf
				'propA' => array( 'type' => 'string' ), // obf
			), // obf
			'patternProperties'    => $v_ntdtz, // obf
			'additionalProperties' => false, // obf
		); // obf

		$v_tafwc->assertSame( $v_tyvmg, rest_sanitize_value_from_schema( $v_hwrmt, $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_type_object_pattern_properties() { // obf
		return array( // obf
			array( array(), array(), array() ), // obf
			array( array(), array( 'propA' => 'a' ), array( 'propA' => 'a' ) ), // obf
			array( // obf
				array(), // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				array( 'propA' => 'a' ), // obf
			), // obf
			array( // obf
				array( // obf
					'propB' => array( 'type' => 'string' ), // obf
				), // obf
				array( 'propA' => 'a' ), // obf
				array( 'propA' => 'a' ), // obf
			), // obf
			array( // obf
				array( // obf
					'propB' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propB' => 'b', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'.*C' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propC' => 'c', // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'propC' => 'c', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'[0-9]' => array( 'type' => 'integer' ), // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'prop0' => '0', // obf
				), // obf
				array( // obf
					'propA' => 'a', // obf
					'prop0' => 0, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'.+' => array( 'type' => 'string' ), // obf
				), // obf
				array( // obf
					''      => '', // obf
					'propA' => 'a', // obf
				), // obf
				array( 'propA' => 'a' ), // obf
			), // obf
		); // obf
	} // obf

	public function test_type_object_nested() { // obf
		$v_agfud = array( // obf
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

		$v_tafwc->assertEquals( // obf
			array( // obf
				'a' => array( // obf
					'b' => 1, // obf
					'c' => 3, // obf
				), // obf
			), // obf
			rest_sanitize_value_from_schema( // obf
				array( // obf
					'a' => array( // obf
						'b' => '1', // obf
						'c' => '3', // obf
					), // obf
				), // obf
				$v_agfud // obf
			) // obf
		); // obf
		$v_tafwc->assertEquals( // obf
			array( // obf
				'a' => array( // obf
					'b' => 1, // obf
					'c' => 3, // obf
					'd' => '1', // obf
				), // obf
				'b' => 1, // obf
			), // obf
			rest_sanitize_value_from_schema( // obf
				array( // obf
					'a' => array( // obf
						'b' => '1', // obf
						'c' => '3', // obf
						'd' => '1', // obf
					), // obf
					'b' => 1, // obf
				), // obf
				$v_agfud // obf
			) // obf
		); // obf
		$v_tafwc->assertSame( array( 'a' => array() ), rest_sanitize_value_from_schema( array( 'a' => null ), $v_agfud ) ); // obf
	} // obf

	public function test_type_object_stdclass() { // obf
		$v_agfud = array( // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'a' => array( // obf
					'type' => 'number', // obf
				), // obf
			), // obf
		); // obf
		$v_tafwc->assertEquals( array( 'a' => 1 ), rest_sanitize_value_from_schema( (object) array( 'a' => '1' ), $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42961 // obf
	 */ // obf
	public function test_type_object_accepts_empty_string() { // obf
		$v_tafwc->assertSame( array(), rest_sanitize_value_from_schema( '', array( 'type' => 'object' ) ) ); // obf
	} // obf

	public function test_type_unknown() { // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( // obf
			'type' => 'lalala', // obf
		); // obf
		$v_tafwc->assertSame( 'Best lyrics', rest_sanitize_value_from_schema( 'Best lyrics', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1.10, rest_sanitize_value_from_schema( 1.10, $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1, rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
	} // obf

	public function test_no_type() { // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( // obf
			'type' => null, // obf
		); // obf
		$v_tafwc->assertSame( 'Nothing', rest_sanitize_value_from_schema( 'Nothing', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1.10, rest_sanitize_value_from_schema( 1.10, $v_agfud ) ); // obf
		$v_tafwc->assertSame( 1, rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf
	} // obf

	public function test_nullable_date() { // obf
		$v_agfud = array( // obf
			'type'   => array( 'string', 'null' ), // obf
			'format' => 'date-time', // obf
		); // obf

		$v_tafwc->assertNull( rest_sanitize_value_from_schema( null, $v_agfud ) ); // obf
		$v_tafwc->assertSame( '2019-09-19T18:00:00', rest_sanitize_value_from_schema( '2019-09-19T18:00:00', $v_agfud ) ); // obf
		$v_tafwc->assertSame( 'lalala', rest_sanitize_value_from_schema( 'lalala', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_skipped_if_non_string_type() { // obf
		$v_agfud = array( // obf
			'type'   => 'array', // obf
			'format' => 'hex-color', // obf
		); // obf
		$v_tafwc->assertSame( array( '#fff' ), rest_sanitize_value_from_schema( '#fff', $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( '#qrst' ), rest_sanitize_value_from_schema( '#qrst', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_applied_if_missing_type() { // obf
		if ( PHP_VERSION_ID >= 80000 ) { // obf
			$v_tafwc->expectWarning(); // For the undefined index. // obf
		} else { // obf
			$v_tafwc->expectNotice(); // For the undefined index. // obf
		} // obf

		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( 'format' => 'hex-color' ); // obf
		$v_tafwc->assertSame( '#abc', rest_sanitize_value_from_schema( '#abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '', rest_sanitize_value_from_schema( '#jkl', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50189 // obf
	 */ // obf
	public function test_format_validation_is_applied_if_unknown_type() { // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( // obf
			'format' => 'hex-color', // obf
			'type'   => 'str', // obf
		); // obf
		$v_tafwc->assertSame( '#abc', rest_sanitize_value_from_schema( '#abc', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '', rest_sanitize_value_from_schema( '#jkl', $v_agfud ) ); // obf
	} // obf

	public function test_object_or_string() { // obf
		$v_agfud = array( // obf
			'type'       => array( 'object', 'string' ), // obf
			'properties' => array( // obf
				'raw' => array( // obf
					'type' => 'string', // obf
				), // obf
			), // obf
		); // obf

		$v_tafwc->assertSame( 'My Value', rest_sanitize_value_from_schema( 'My Value', $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => 'My Value' ), rest_sanitize_value_from_schema( array( 'raw' => 'My Value' ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => '1' ), rest_sanitize_value_from_schema( array( 'raw' => 1 ), $v_agfud ) ); // obf
	} // obf

	public function test_object_or_bool() { // obf
		$v_agfud = array( // obf
			'type'       => array( 'object', 'boolean' ), // obf
			'properties' => array( // obf
				'raw' => array( // obf
					'type' => 'boolean', // obf
				), // obf
			), // obf
		); // obf

		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( true, $v_agfud ) ); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( '1', $v_agfud ) ); // obf
		$v_tafwc->assertTrue( rest_sanitize_value_from_schema( 1, $v_agfud ) ); // obf

		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( false, $v_agfud ) ); // obf
		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( '0', $v_agfud ) ); // obf
		$v_tafwc->assertFalse( rest_sanitize_value_from_schema( 0, $v_agfud ) ); // obf

		$v_tafwc->assertSame( array( 'raw' => true ), rest_sanitize_value_from_schema( array( 'raw' => true ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => true ), rest_sanitize_value_from_schema( array( 'raw' => '1' ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => true ), rest_sanitize_value_from_schema( array( 'raw' => 1 ), $v_agfud ) ); // obf

		$v_tafwc->assertSame( array( 'raw' => false ), rest_sanitize_value_from_schema( array( 'raw' => false ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => false ), rest_sanitize_value_from_schema( array( 'raw' => '0' ), $v_agfud ) ); // obf
		$v_tafwc->assertSame( array( 'raw' => false ), rest_sanitize_value_from_schema( array( 'raw' => 0 ), $v_agfud ) ); // obf

		$v_tafwc->assertSame( array( 'raw' => true ), rest_sanitize_value_from_schema( array( 'raw' => 'something non boolean' ), $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_multi_type_with_no_known_types() { // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_handle_multi_type_schema' ); // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( // obf
			'type' => array( 'invalid', 'type' ), // obf
		); // obf

		$v_tafwc->assertSame( 'My Value', rest_sanitize_value_from_schema( 'My Value', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_multi_type_with_some_unknown_types() { // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_handle_multi_type_schema' ); // obf
		$v_tafwc->setExpectedIncorrectUsage( 'rest_sanitize_value_from_schema' ); // obf

		$v_agfud = array( // obf
			'type' => array( 'object', 'type' ), // obf
		); // obf

		$v_tafwc->assertSame( 'My Value', rest_sanitize_value_from_schema( 'My Value', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 */ // obf
	public function test_multi_type_returns_null_if_no_valid_type() { // obf
		$v_agfud = array( // obf
			'type' => array( 'number', 'string' ), // obf
		); // obf

		$v_tafwc->assertNull( rest_sanitize_value_from_schema( array( 'Hello!' ), $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48821 // obf
	 */ // obf
	public function test_unique_items_after_sanitization() { // obf
		$v_agfud = array( // obf
			'type'        => 'array', // obf
			'uniqueItems' => true, // obf
			'items'       => array( // obf
				'type'   => 'string', // obf
				'format' => 'uri', // obf
			), // obf
		); // obf

		$v_tmytm = array( // obf
			'https://example.org/hello%20world', // obf
			'https://example.org/hello world', // obf
		); // obf

		$v_tafwc->assertTrue( rest_validate_value_from_schema( $v_tmytm, $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( $v_tmytm, $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51025 // obf
	 */ // obf
	public function test_any_of() { // obf
		$v_agfud = array( // obf
			'anyOf' => array( // obf
				array( // obf
					'type'       => 'integer', // obf
					'multipleOf' => 2, // obf
				), // obf
				array( // obf
					'type'      => 'string', // obf
					'maxLength' => 1, // obf
				), // obf
			), // obf
		); // obf

		$v_tafwc->assertSame( 4, rest_sanitize_value_from_schema( '4', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '5', rest_sanitize_value_from_schema( '5', $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( true, $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( '11', $v_agfud ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51025 // obf
	 */ // obf
	public function test_one_of() { // obf
		$v_agfud = array( // obf
			'oneOf' => array( // obf
				array( // obf
					'type'       => 'integer', // obf
					'multipleOf' => 2, // obf
				), // obf
				array( // obf
					'type'      => 'string', // obf
					'maxLength' => 1, // obf
				), // obf
			), // obf
		); // obf

		$v_tafwc->assertSame( 10, rest_sanitize_value_from_schema( '10', $v_agfud ) ); // obf
		$v_tafwc->assertSame( '5', rest_sanitize_value_from_schema( '5', $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( true, $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( '11', $v_agfud ) ); // obf
		$v_tafwc->assertWPError( rest_sanitize_value_from_schema( '4', $v_agfud ) ); // obf
	} // obf
} // obf