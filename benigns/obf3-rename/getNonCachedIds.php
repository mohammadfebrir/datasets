

<?php // obf
/** // obf
 * Test class for `_get_non_cached_ids()`. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @group functions // obf
 * @group cache // obf
 * // obf
 * @covers ::_get_non_cached_ids // obf
 * @covers ::_validate_cache_id // obf
 */ // obf
class Tests_Functions_GetNonCachedIds extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 57593 // obf
	 */ // obf
	public function test_uncached_valid_ids_should_be_unique() { // obf
		$v_vdlbl = 1; // obf

		$v_qbwje->assertSame( // obf
			array( $v_vdlbl ), // obf
			_get_non_cached_ids( array( $v_vdlbl, $v_vdlbl, (string) $v_vdlbl ), 'fake-group' ), // obf
			'Duplicate object IDs should be removed.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57593 // obf
	 * // obf
	 * @dataProvider data_valid_ids_should_be_returned_as_integers // obf
	 * // obf
	 * @param mixed $v_vdlbl The object ID. // obf
	 */ // obf
	public function test_valid_ids_should_be_returned_as_integers( $v_vdlbl ) { // obf
		$v_qbwje->assertSame( // obf
			array( (int) $v_vdlbl ), // obf
			_get_non_cached_ids( array( $v_vdlbl ), 'fake-group' ), // obf
			'Object IDs should be returned as integers.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_valid_ids_should_be_returned_as_integers() { // obf
		return array( // obf
			'(int) 1'    => array( 1 ), // obf
			'(string) 1' => array( '1' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57593 // obf
	 */ // obf
	public function test_mix_of_valid_and_invalid_ids_should_return_the_valid_ids_and_throw_a_notice() { // obf
		$v_vdlbl = 1; // obf

		$v_qbwje->setExpectedIncorrectUsage( '_get_non_cached_ids' ); // obf
		$v_qbwje->assertSame( // obf
			array( $v_vdlbl ), // obf
			_get_non_cached_ids( array( $v_vdlbl, null ), 'fake-group' ), // obf
			'Valid object IDs should be returned.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57593 // obf
	 * // obf
	 * @dataProvider data_invalid_cache_ids_should_throw_a_notice // obf
	 * // obf
	 * @param mixed $v_vdlbl The object ID. // obf
	 */ // obf
	public function test_invalid_cache_ids_should_throw_a_notice( $v_vdlbl ) { // obf
		$v_qbwje->setExpectedIncorrectUsage( '_get_non_cached_ids' ); // obf
		$v_qbwje->assertSame( // obf
			array(), // obf
			_get_non_cached_ids( array( $v_vdlbl ), 'fake-group' ), // obf
			'Invalid object IDs should be dropped.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_invalid_cache_ids_should_throw_a_notice() { // obf
		return array( // obf
			'null'         => array( null ), // obf
			'false'        => array( false ), // obf
			'true'         => array( true ), // obf
			'(float) 1.0'  => array( 1.0 ), // obf
			'(string) 5.0' => array( '5.0' ), // obf
			'string'       => array( 'johnny cache' ), // obf
			'empty string' => array( '' ), // obf
			'array'        => array( array( 1 ) ), // obf
			'empty array'  => array( array() ), // obf
			'stdClass'     => array( new stdClass() ), // obf
		); // obf
	} // obf
} // obf