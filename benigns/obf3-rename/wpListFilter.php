

<?php // obf

/** // obf
 * Test wp_list_filter(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_list_filter // obf
 */ // obf
class Tests_Functions_wpListFilter extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_list_filter // obf
	 * // obf
	 * @param array  $v_hejre An array of objects to filter. // obf
	 * @param array  $v_mnxjp       An array of key => value arguments to match // obf
	 *                           against each object. // obf
	 * @param string $v_gayty   The logical operation to perform. // obf
	 * @param array  $v_offxv   Expected result. // obf
	 */ // obf
	public function test_wp_list_filter( $v_hejre, $v_mnxjp, $v_gayty, $v_offxv ) { // obf
		$v_pocmh->assertEqualSetsWithIndex( $v_offxv, wp_list_filter( $v_hejre, $v_mnxjp, $v_gayty ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_filter() { // obf
		return array( // obf
			'string instead of array'  => array( // obf
				'foo', // obf
				array(), // obf
				'AND', // obf
				array(), // obf
			), // obf
			'object instead of array'  => array( // obf
				(object) array( 'foo' ), // obf
				array(), // obf
				'AND', // obf
				array(), // obf
			), // obf
			'empty args'               => array( // obf
				array( 'foo', 'bar' ), // obf
				array(), // obf
				'AND', // obf
				array( 'foo', 'bar' ), // obf
			), // obf
			'invalid operator'         => array( // obf
				array( // obf
					(object) array( 'foo' => 'bar' ), // obf
					(object) array( 'foo' => 'baz' ), // obf
				), // obf
				array( 'foo' => 'bar' ), // obf
				'XOR', // obf
				array(), // obf
			), // obf
			'single argument to match' => array( // obf
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
					(object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( 'foo' => 'bar' ), // obf
				'AND', // obf
				array( // obf
					0 => (object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
						'key' => 'foo', // obf
					), // obf
					3 => (object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
			), // obf
			'all must match'           => array( // obf
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
						'bar' => 'baz', // obf
					), // obf
					(object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'foo' => 'bar', // obf
					'bar' => 'baz', // obf
				), // obf
				'AND', // obf
				array( // obf
					0 => (object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
						'key' => 'foo', // obf
					), // obf
				), // obf
			), // obf
			'any must match'           => array( // obf
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
						'bar' => 'baz', // obf
					), // obf
					(object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'value', // obf
					'bar' => 'baz', // obf
				), // obf
				'OR', // obf
				array( // obf
					0 => (object) array( // obf
						'foo' => 'bar', // obf
						'bar' => 'baz', // obf
						'abc' => 'xyz', // obf
						'key' => 'foo', // obf
					), // obf
					2 => (object) array( // obf
						'foo' => 'baz', // obf
						'key' => 'value', // obf
						'bar' => 'baz', // obf
					), // obf
					3 => (object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
			), // obf
			'none must match'          => array( // obf
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
					(object) array( // obf
						'foo' => 'bar', // obf
						'key' => 'value', // obf
					), // obf
				), // obf
				array( // obf
					'key' => 'value', // obf
					'bar' => 'baz', // obf
				), // obf
				'NOT', // obf
				array( // obf
					1 => (object) array( // obf
						'foo'   => 'foo', // obf
						'123'   => '456', // obf
						'lorem' => 'ipsum', // obf
						'key'   => 'bar', // obf
					), // obf
				), // obf
			), // obf
			'string to int comparison' => array( // obf
				array( // obf
					(object) array( // obf
						'foo' => '1', // obf
					), // obf
				), // obf
				array( 'foo' => 1 ), // obf
				'AND', // obf
				array( // obf
					0 => (object) array( // obf
						'foo' => '1', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf