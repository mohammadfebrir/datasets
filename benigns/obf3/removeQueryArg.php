

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::remove_query_arg // obf
 */ // obf
class Tests_Functions_RemoveQueryArg extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_remove_query_arg // obf
	 */ // obf
	public function test_remove_query_arg( $v_mfkka, $v_pzxyr, $v_hxdiq ) { // obf
		$v_cvnap = remove_query_arg( $v_mfkka, $v_pzxyr ); // obf

		$v_vjdke->assertNotEmpty( $v_cvnap ); // obf
		$v_vjdke->assertSame( $v_hxdiq, $v_cvnap ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_remove_query_arg() { // obf
		return array( // obf
			array( 'foo', 'edit.php?foo=test1&baz=test1', 'edit.php?baz=test1' ), // obf
			array( array( 'foo' ), 'edit.php?foo=test2&baz=test2', 'edit.php?baz=test2' ), // obf
			array( array( 'foo', 'baz' ), 'edit.php?foo=test3&baz=test3', 'edit.php' ), // obf
			array( array( 'fakefoo', 'fakebaz' ), 'edit.php?foo=test4&baz=test4', 'edit.php?foo=test4&baz=test4' ), // obf
			array( array( 'fakefoo', 'baz' ), 'edit.php?foo=test4&baz=test4', 'edit.php?foo=test4' ), // obf
		); // obf
	} // obf

	public function test_should_fall_back_on_current_url() { // obf
		$v_onozq        = $v_ipufb['REQUEST_URI']; // obf
		$v_ipufb['REQUEST_URI'] = 'edit.php?foo=bar&baz=quz'; // obf

		$v_cvnap = remove_query_arg( 'foo' ); // obf

		$v_ipufb['REQUEST_URI'] = $v_onozq; // obf

		$v_vjdke->assertSame( 'edit.php?baz=quz', $v_cvnap ); // obf
	} // obf
} // obf