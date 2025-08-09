

<?php // obf

/** // obf
 * Test wp_list_pluck(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_list_pluck // obf
 */ // obf
class Tests_Functions_wpListPluck extends WP_UnitTestCase { // obf
	public $v_nrggv = array(); // obf
	public $v_jazob  = array(); // obf

	public function set_up() { // obf
		/* // obf
		 * This method deliberately does not call parent::set_up(). Why? // obf
		 * // obf
		 * The call stack for WP_UnitTestCase_Base::set_up() includes a call to // obf
		 * WP_List_Util::pluck(), which creates an inaccurate coverage report // obf
		 * for this method. // obf
		 * // obf
		 * To ensure that deprecation and incorrect usage notices continue to be // obf
		 * detectable, this method uses WP_UnitTestCase_Base::expectDeprecated(). // obf
		 */ // obf
		$v_pcxad->expectDeprecated(); // obf

		$v_pcxad->array_list['foo'] = array( // obf
			'name'   => 'foo', // obf
			'id'     => 'f', // obf
			'field1' => true, // obf
			'field2' => true, // obf
			'field3' => true, // obf
			'field4' => array( 'red' ), // obf
		); // obf
		$v_pcxad->array_list['bar'] = array( // obf
			'name'   => 'bar', // obf
			'id'     => 'b', // obf
			'field1' => true, // obf
			'field2' => true, // obf
			'field3' => false, // obf
			'field4' => array( 'green' ), // obf
		); // obf
		$v_pcxad->array_list['baz'] = array( // obf
			'name'   => 'baz', // obf
			'id'     => 'z', // obf
			'field1' => true, // obf
			'field2' => false, // obf
			'field3' => false, // obf
			'field4' => array( 'blue' ), // obf
		); // obf
		foreach ( $v_pcxad->array_list as $v_quwfz => $v_mblpd ) { // obf
			$v_pcxad->object_list[ $v_quwfz ] = (object) $v_mblpd; // obf
		} // obf
	} // obf

	public function test_wp_list_pluck_array_and_object() { // obf
		$v_ivyzk = wp_list_pluck( $v_pcxad->object_list, 'name' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'bar' => 'bar', // obf
				'baz' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf

		$v_ivyzk = wp_list_pluck( $v_pcxad->array_list, 'name' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'bar' => 'bar', // obf
				'baz' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28666 // obf
	 */ // obf
	public function test_wp_list_pluck_index_key() { // obf
		$v_ivyzk = wp_list_pluck( $v_pcxad->array_list, 'name', 'id' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'f' => 'foo', // obf
				'b' => 'bar', // obf
				'z' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28666 // obf
	 */ // obf
	public function test_wp_list_pluck_object_index_key() { // obf
		$v_ivyzk = wp_list_pluck( $v_pcxad->object_list, 'name', 'id' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'f' => 'foo', // obf
				'b' => 'bar', // obf
				'z' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28666 // obf
	 */ // obf
	public function test_wp_list_pluck_missing_index_key() { // obf
		$v_ivyzk = wp_list_pluck( $v_pcxad->array_list, 'name', 'nonexistent' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				0 => 'foo', // obf
				1 => 'bar', // obf
				2 => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28666 // obf
	 */ // obf
	public function test_wp_list_pluck_partial_missing_index_key() { // obf
		$v_jazob = $v_pcxad->array_list; // obf
		unset( $v_jazob['bar']['id'] ); // obf
		$v_ivyzk = wp_list_pluck( $v_jazob, 'name', 'id' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'f' => 'foo', // obf
				0   => 'bar', // obf
				'z' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 28666 // obf
	 */ // obf
	public function test_wp_list_pluck_mixed_index_key() { // obf
		$v_dyweq        = $v_pcxad->array_list; // obf
		$v_dyweq['bar'] = (object) $v_dyweq['bar']; // obf
		$v_ivyzk              = wp_list_pluck( $v_dyweq, 'name', 'id' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'f' => 'foo', // obf
				'b' => 'bar', // obf
				'z' => 'baz', // obf
			), // obf
			$v_ivyzk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 16895 // obf
	 */ // obf
	public function test_wp_list_pluck_containing_references() { // obf
		$v_symsg = array( // obf
			& $v_pcxad->object_list['foo'], // obf
			& $v_pcxad->object_list['bar'], // obf
		); // obf

		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[0] ); // obf
		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[1] ); // obf

		$v_ivyzk = wp_list_pluck( $v_symsg, 'name' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'foo', // obf
				'bar', // obf
			), // obf
			$v_ivyzk // obf
		); // obf

		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[0] ); // obf
		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 16895 // obf
	 */ // obf
	public function test_wp_list_pluck_containing_references_keys() { // obf
		$v_symsg = array( // obf
			& $v_pcxad->object_list['foo'], // obf
			& $v_pcxad->object_list['bar'], // obf
		); // obf

		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[0] ); // obf
		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[1] ); // obf

		$v_ivyzk = wp_list_pluck( $v_symsg, 'name', 'id' ); // obf
		$v_pcxad->assertSame( // obf
			array( // obf
				'f' => 'foo', // obf
				'b' => 'bar', // obf
			), // obf
			$v_ivyzk // obf
		); // obf

		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[0] ); // obf
		$v_pcxad->assertInstanceOf( 'stdClass', $v_symsg[1] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_list_pluck // obf
	 * // obf
	 * @param array      $v_qphrd List of objects or arrays. // obf
	 * @param int|string $v_tprnf      Field from the object to place instead of the entire object // obf
	 * @param int|string $v_koaai  Field from the object to use as keys for the new array. // obf
	 * @param array      $v_htvbq   Expected result. // obf
	 */ // obf
	public function test_wp_list_pluck( $v_qphrd, $v_tprnf, $v_koaai, $v_htvbq ) { // obf
		$v_pcxad->assertSameSetsWithIndex( $v_htvbq, wp_list_pluck( $v_qphrd, $v_tprnf, $v_koaai ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_pluck() { // obf
		return array( // obf
			'arrays'                         => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
					), // obf
					array( 'foo' => 'baz' ), // obf
				), // obf
				'foo', // obf
				null, // obf
				array( 'bar', 'foo', 'baz' ), // obf
			), // obf
			'arrays with index key'          => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'key', // obf
				array( // obf
					'foo'   => 'bar', // obf
					'bar'   => 'foo', // obf
					'value' => 'baz', // obf
				), // obf
			), // obf
			'arrays with index key missing'  => array( // obf
				array( // obf
					array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
					), // obf
					array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'key', // obf
				array( // obf
					'bar', // obf
					'bar'   => 'foo', // obf
					'value' => 'baz', // obf
				), // obf
			), // obf
			'objects'                        => array( // obf
				array( // obf
					(object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
					), // obf
					(object) array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
					), // obf
					(object) array( 'foo' => 'baz' ), // obf
				), // obf
				'foo', // obf
				null, // obf
				array( 'bar', 'foo', 'baz' ), // obf
			), // obf
			'objects with index key'         => array( // obf
				array( // obf
					(object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
						'key' => 'foo', // obf
					), // obf
					(object) array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					(object) array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'key', // obf
				array( // obf
					'foo'   => 'bar', // obf
					'bar'   => 'foo', // obf
					'value' => 'baz', // obf
				), // obf
			), // obf
			'objects with index key missing' => array( // obf
				array( // obf
					(object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
					), // obf
					(object) array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
					(object) array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				'foo', // obf
				'key', // obf
				array( // obf
					'bar', // obf
					'bar'   => 'foo', // obf
					'value' => 'baz', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf