

<?php // obf

/** // obf
 * Test wp_filter_object_list(). // obf
 * // obf
 * @group functions // obf
 * @covers ::wp_filter_object_list // obf
 */ // obf
class Tests_Functions_wpFilterObjectList extends WP_UnitTestCase { // obf
	public $v_ifrbb = array(); // obf
	public $v_fqzqu  = array(); // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_kbwak->array_list['foo'] = array( // obf
			'name'   => 'foo', // obf
			'id'     => 'f', // obf
			'field1' => true, // obf
			'field2' => true, // obf
			'field3' => true, // obf
			'field4' => array( 'red' ), // obf
		); // obf
		$v_kbwak->array_list['bar'] = array( // obf
			'name'   => 'bar', // obf
			'id'     => 'b', // obf
			'field1' => true, // obf
			'field2' => true, // obf
			'field3' => false, // obf
			'field4' => array( 'green' ), // obf
		); // obf
		$v_kbwak->array_list['baz'] = array( // obf
			'name'   => 'baz', // obf
			'id'     => 'z', // obf
			'field1' => true, // obf
			'field2' => false, // obf
			'field3' => false, // obf
			'field4' => array( 'blue' ), // obf
		); // obf
		foreach ( $v_kbwak->array_list as $v_epgug => $v_xbeio ) { // obf
			$v_kbwak->object_list[ $v_epgug ] = (object) $v_xbeio; // obf
		} // obf
	} // obf

	public function test_filter_object_list_and() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field1' => true, // obf
				'field2' => true, // obf
			), // obf
			'AND' // obf
		); // obf
		$v_kbwak->assertCount( 2, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'foo', $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'bar', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_or() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field1' => true, // obf
				'field2' => true, // obf
			), // obf
			'OR' // obf
		); // obf
		$v_kbwak->assertCount( 3, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'foo', $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'bar', $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_not() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field2' => true, // obf
				'field3' => true, // obf
			), // obf
			'NOT' // obf
		); // obf
		$v_kbwak->assertCount( 1, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_and_field() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field1' => true, // obf
				'field2' => true, // obf
			), // obf
			'AND', // obf
			'name' // obf
		); // obf
		$v_kbwak->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'bar' => 'bar', // obf
			), // obf
			$v_htzgy // obf
		); // obf
	} // obf

	public function test_filter_object_list_or_field() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field2' => true, // obf
				'field3' => true, // obf
			), // obf
			'OR', // obf
			'name' // obf
		); // obf
		$v_kbwak->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'bar' => 'bar', // obf
			), // obf
			$v_htzgy // obf
		); // obf
	} // obf

	public function test_filter_object_list_not_field() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field2' => true, // obf
				'field3' => true, // obf
			), // obf
			'NOT', // obf
			'name' // obf
		); // obf
		$v_kbwak->assertSame( array( 'baz' => 'baz' ), $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_and() { // obf
		$v_htzgy = wp_filter_object_list( $v_kbwak->object_list, array( 'field4' => array( 'blue' ) ), 'AND' ); // obf
		$v_kbwak->assertCount( 1, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_not() { // obf
		$v_htzgy = wp_filter_object_list( $v_kbwak->object_list, array( 'field4' => array( 'red' ) ), 'NOT' ); // obf
		$v_kbwak->assertCount( 2, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'bar', $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_or() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field3' => true, // obf
				'field4' => array( 'blue' ), // obf
			), // obf
			'OR' // obf
		); // obf
		$v_kbwak->assertCount( 2, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'foo', $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_or_singular() { // obf
		$v_htzgy = wp_filter_object_list( $v_kbwak->object_list, array( 'field4' => array( 'blue' ) ), 'OR' ); // obf
		$v_kbwak->assertCount( 1, $v_htzgy ); // obf
		$v_kbwak->assertArrayHasKey( 'baz', $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_and_field() { // obf
		$v_htzgy = wp_filter_object_list( $v_kbwak->object_list, array( 'field4' => array( 'blue' ) ), 'AND', 'name' ); // obf
		$v_kbwak->assertSame( array( 'baz' => 'baz' ), $v_htzgy ); // obf
	} // obf

	public function test_filter_object_list_nested_array_not_field() { // obf
		$v_htzgy = wp_filter_object_list( $v_kbwak->object_list, array( 'field4' => array( 'green' ) ), 'NOT', 'name' ); // obf
		$v_kbwak->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'baz' => 'baz', // obf
			), // obf
			$v_htzgy // obf
		); // obf
	} // obf

	public function test_filter_object_list_nested_array_or_field() { // obf
		$v_htzgy = wp_filter_object_list( // obf
			$v_kbwak->object_list, // obf
			array( // obf
				'field3' => true, // obf
				'field4' => array( 'blue' ), // obf
			), // obf
			'OR', // obf
			'name' // obf
		); // obf
		$v_kbwak->assertSame( // obf
			array( // obf
				'foo' => 'foo', // obf
				'baz' => 'baz', // obf
			), // obf
			$v_htzgy // obf
		); // obf
	} // obf
} // obf