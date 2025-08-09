

<?php // obf

/** // obf
 * Tests for `maybe_serialize()` and `maybe_unserialize()`. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::maybe_serialize // obf
 * @covers ::maybe_unserialize // obf
 */ // obf
class Tests_Functions_MaybeSerialize extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_is_not_serialized // obf
	 */ // obf
	public function test_maybe_serialize( $v_jfskk ) { // obf
		if ( is_array( $v_jfskk ) || is_object( $v_jfskk ) ) { // obf
			$v_allnk = serialize( $v_jfskk ); // obf
		} else { // obf
			$v_allnk = $v_jfskk; // obf
		} // obf

		$v_jzkrs->assertSame( $v_allnk, maybe_serialize( $v_jfskk ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_serialized // obf
	 */ // obf
	public function test_maybe_serialize_with_double_serialization( $v_jfskk ) { // obf
		$v_allnk = serialize( $v_jfskk ); // obf

		$v_jzkrs->assertSame( $v_allnk, maybe_serialize( $v_jfskk ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_serialized // obf
	 * @dataProvider data_is_not_serialized // obf
	 */ // obf
	public function test_maybe_unserialize( $v_jfskk, $v_ogmlx ) { // obf
		if ( $v_ogmlx ) { // obf
			$v_allnk = unserialize( trim( $v_jfskk ) ); // obf
		} else { // obf
			$v_allnk = $v_jfskk; // obf
		} // obf

		if ( is_object( $v_allnk ) ) { // obf
			$v_jzkrs->assertEquals( $v_allnk, maybe_unserialize( $v_jfskk ) ); // obf
		} else { // obf
			$v_jzkrs->assertSame( $v_allnk, maybe_unserialize( $v_jfskk ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for `test_maybe_unserialize()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_serialized() { // obf
		return array( // obf
			'serialized empty array'            => array( // obf
				'data'     => serialize( array() ), // obf
				'expected' => true, // obf
			), // obf
			'serialized non-empty array'        => array( // obf
				'data'     => serialize( array( 1, 1, 2, 3, 5, 8, 13 ) ), // obf
				'expected' => true, // obf
			), // obf
			'serialized empty object'           => array( // obf
				'data'     => serialize( new stdClass() ), // obf
				'expected' => true, // obf
			), // obf
			'serialized non-empty object'       => array( // obf
				'data'     => serialize( // obf
					(object) array( // obf
						'test' => true, // obf
						'1', // obf
						2, // obf
					) // obf
				), // obf
				'expected' => true, // obf
			), // obf
			'serialized null'                   => array( // obf
				'data'     => serialize( null ), // obf
				'expected' => true, // obf
			), // obf
			'serialized boolean true'           => array( // obf
				'data'     => serialize( true ), // obf
				'expected' => true, // obf
			), // obf
			'serialized boolean false'          => array( // obf
				'data'     => serialize( false ), // obf
				'expected' => true, // obf
			), // obf
			'serialized integer -1'             => array( // obf
				'data'     => serialize( -1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized integer 1'              => array( // obf
				'data'     => serialize( -1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized float 1.1'              => array( // obf
				'data'     => serialize( 1.1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string'                 => array( // obf
				'data'     => serialize( 'this string will be serialized' ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string with line break' => array( // obf
				'data'     => serialize( "a\nb" ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string with leading and trailing spaces' => array( // obf
				'data'     => '   s:25:"this string is serialized";   ', // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for `test_maybe_serialize()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_not_serialized() { // obf
		return array( // obf
			'an empty array'                             => array( // obf
				'data'     => array(), // obf
				'expected' => false, // obf
			), // obf
			'a non-empty array'                          => array( // obf
				'data'     => array( 1, 1, 2, 3, 5, 8, 13 ), // obf
				'expected' => false, // obf
			), // obf
			'an empty object'                            => array( // obf
				'data'     => new stdClass(), // obf
				'expected' => false, // obf
			), // obf
			'a non-empty object'                         => array( // obf
				'data'     => (object) array( // obf
					'test' => true, // obf
					'1', // obf
					2, // obf
				), // obf
				'expected' => false, // obf
			), // obf
			'null'                                       => array( // obf
				'data'     => null, // obf
				'expected' => false, // obf
			), // obf
			'a boolean true'                             => array( // obf
				'data'     => true, // obf
				'expected' => false, // obf
			), // obf
			'a boolean false'                            => array( // obf
				'data'     => false, // obf
				'expected' => false, // obf
			), // obf
			'an integer -1'                              => array( // obf
				'data'     => -1, // obf
				'expected' => false, // obf
			), // obf
			'an integer 0'                               => array( // obf
				'data'     => 0, // obf
				'expected' => false, // obf
			), // obf
			'an integer 1'                               => array( // obf
				'data'     => 1, // obf
				'expected' => false, // obf
			), // obf
			'a float 0.0'                                => array( // obf
				'data'     => 0.0, // obf
				'expected' => false, // obf
			), // obf
			'a float 1.1'                                => array( // obf
				'data'     => 1.1, // obf
				'expected' => false, // obf
			), // obf
			'a string'                                   => array( // obf
				'data'     => 'a string', // obf
				'expected' => false, // obf
			), // obf
			'a string with line break'                   => array( // obf
				'data'     => "a\nb", // obf
				'expected' => false, // obf
			), // obf
			'a string with leading and trailing garbage' => array( // obf
				'data'     => 'garbage:a:0:garbage;', // obf
				'expected' => false, // obf
			), // obf
			'a string with missing double quotes'        => array( // obf
				'data'     => 's:4:test;', // obf
				'expected' => false, // obf
			), // obf
			'a string that is too short'                 => array( // obf
				'data'     => 's:3', // obf
				'expected' => false, // obf
			), // obf
			'not a colon in second position'             => array( // obf
				'data'     => 's!3:"foo";', // obf
				'expected' => false, // obf
			), // obf
			'no trailing semicolon (strict check)'       => array( // obf
				'data'     => 's:3:"foo"', // obf
				'expected' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_serialize_deserialize_objects // obf
	 */ // obf
	public function test_deserialize_request_utility_filtered_iterator_objects( $v_jfskk ) { // obf
		$v_nvkzn = maybe_serialize( $v_jfskk ); // obf

		if ( get_class( $v_jfskk ) === 'WpOrg\Requests\Utility\FilteredIterator' ) { // obf
			$v_lqqex = unserialize( $v_nvkzn ); // obf
			$v_pwebx  = ( new ReflectionClass( 'WpOrg\Requests\Utility\FilteredIterator' ) )->getProperty( 'callback' ); // obf
			$v_pwebx->setAccessible( true ); // obf
			$v_bxoxh = $v_pwebx->getValue( $v_lqqex ); // obf

			$v_jzkrs->assertSame( null, $v_bxoxh ); // obf
		} else { // obf
			$v_jzkrs->assertSame( $v_jfskk->count(), unserialize( $v_nvkzn )->count() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_deserialize_request_utility_filtered_iterator_objects(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_serialize_deserialize_objects() { // obf
		return array( // obf
			'filtered iterator using md5'  => array( // obf
				new WpOrg\Requests\Utility\FilteredIterator( array( 1 ), 'md5' ), // obf
			), // obf
			'filtered iterator using sha1' => array( // obf
				new WpOrg\Requests\Utility\FilteredIterator( array( 1, 2 ), 'sha1' ), // obf
			), // obf
			'array iterator'               => array( // obf
				new ArrayIterator( array( 1, 2, 3 ) ), // obf
			), // obf
		); // obf
	} // obf
} // obf