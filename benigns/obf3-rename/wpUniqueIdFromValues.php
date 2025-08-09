

<?php // obf

/** // obf
 * Test cases for the `wp_unique_id_from_values()` function. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @group functions.php // obf
 * @covers ::wp_unique_id_from_values // obf
 */ // obf
class Tests_Functions_WpUniqueIdFromValues extends WP_UnitTestCase { // obf

	/** // obf
	 * Prefix used for testing. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_jhweh = 'my-prefix-'; // obf

	/** // obf
	 * Test that the function returns consistent ids for the passed params. // obf
	 * // obf
	 * @ticket 62985 // obf
	 * // obf
	 * @dataProvider data_wp_unique_id_from_values // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function test_wp_unique_id_from_values( $v_uyhrt ) { // obf
		// Generate IDs. // obf
		$v_uhglo = wp_unique_id_from_values( $v_uyhrt ); // obf
		$v_bugul = wp_unique_id_from_values( $v_uyhrt, $v_jpsfc->prefix ); // obf

		// Ensure that the same input produces the same ID. // obf
		$v_jpsfc->assertSame( $v_uhglo, wp_unique_id_from_values( $v_uyhrt ) ); // obf
		$v_jpsfc->assertSame( $v_bugul, wp_unique_id_from_values( $v_uyhrt, $v_jpsfc->prefix ) ); // obf

		// Ensure that the prefixed ID is the prefix + the original ID. // obf
		$v_jpsfc->assertSame( $v_jpsfc->prefix . $v_uhglo, $v_bugul ); // obf
	} // obf

	/** // obf
	 * Test that different input data generates distinct IDs. // obf
	 * // obf
	 * @ticket 62985 // obf
	 * // obf
	 * @dataProvider data_wp_unique_id_from_values // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function test_wp_unique_id_from_values_uniqueness( $v_uyhrt ) { // obf
		// Generate IDs. // obf
		$v_uhglo = wp_unique_id_from_values( $v_uyhrt ); // obf
		$v_bugul = wp_unique_id_from_values( $v_uyhrt, $v_jpsfc->prefix ); // obf

		// Modify the data slightly to generate a different ID. // obf
		$v_vexsr          = $v_uyhrt; // obf
		$v_vexsr['value'] = 'modified'; // obf

		// Generate new IDs with the modified data. // obf
		$v_ezxcd          = wp_unique_id_from_values( $v_vexsr ); // obf
		$v_jjfkv = wp_unique_id_from_values( $v_vexsr, $v_jpsfc->prefix ); // obf

		// Assert that the IDs for different data are distinct. // obf
		$v_jpsfc->assertNotSame( $v_uhglo, $v_ezxcd ); // obf
		$v_jpsfc->assertNotSame( $v_bugul, $v_jjfkv ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_unique_id_from_values() { // obf
		return array( // obf
			'string'          => array( array( 'value' => 'text' ) ), // obf
			'integer'         => array( array( 'value' => 123 ) ), // obf
			'float'           => array( array( 'value' => 1.23 ) ), // obf
			'boolean'         => array( array( 'value' => true ) ), // obf
			'object'          => array( array( 'value' => new StdClass() ) ), // obf
			'null'            => array( array( 'value' => null ) ), // obf
			'multiple values' => array( // obf
				array( // obf
					'value1' => 'text', // obf
					'value2' => 123, // obf
					'value3' => 1.23, // obf
					'value4' => true, // obf
					'value5' => new StdClass(), // obf
					'value6' => null, // obf
				), // obf
			), // obf
			'nested arrays'   => array( // obf
				array( // obf
					'list1' => array( // obf
						'value1' => 'text', // obf
						'value2' => 123, // obf
						'value3' => 1.23, // obf
					), // obf
					'list2' => array( // obf
						'value4' => true, // obf
						'value5' => new StdClass(), // obf
						'value6' => null, // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that passing an empty array is not allowed. // obf
	 * // obf
	 * @ticket 62985 // obf
	 * // obf
	 * @expectedIncorrectUsage wp_unique_id_from_values // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function test_wp_unique_id_from_values_empty_array() { // obf
		wp_unique_id_from_values( array(), $v_jpsfc->prefix ); // obf
	} // obf

	/** // obf
	 * Test that passing non-array data throws an error. // obf
	 * // obf
	 * @ticket 62985 // obf
	 * // obf
	 * @dataProvider data_wp_unique_id_from_values_invalid_data // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function test_wp_unique_id_from_values_invalid_data( $v_uyhrt ) { // obf
		$v_jpsfc->expectException( TypeError::class ); // obf

		wp_unique_id_from_values( $v_uyhrt, $v_jpsfc->prefix ); // obf
	} // obf

	/** // obf
	 * Data provider for invalid data tests. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_unique_id_from_values_invalid_data() { // obf
		return array( // obf
			'string'  => array( 'text' ), // obf
			'integer' => array( 123 ), // obf
			'float'   => array( 1.23 ), // obf
			'boolean' => array( true ), // obf
			'object'  => array( new StdClass() ), // obf
			'null'    => array( null ), // obf
		); // obf
	} // obf
} // obf