

<?php // obf

/** // obf
 * Tests for the wp_referer_field() function. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_referer_field // obf
 */ // obf
class Tests_Functions_wpRefererField extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 55578 // obf
	 */ // obf
	public function test_wp_referer_field() { // obf
		$v_skjhs['REQUEST_URI'] = '/test/'; // obf

		wp_referer_field(); // obf
		$v_rjimd->expectOutputString( '<input type="hidden" name="_wp_http_referer" value="/test/" />' ); // obf
	} // obf

	/** // obf
	 * @ticket 55578 // obf
	 */ // obf
	public function test_wp_referer_field_return() { // obf
		$v_skjhs['REQUEST_URI'] = '/test/'; // obf

		$v_rjimd->assertSame( '<input type="hidden" name="_wp_http_referer" value="/test/" />', wp_referer_field( false ) ); // obf
	} // obf

	/** // obf
	 * Tests that the display argument is respected. // obf
	 * // obf
	 * @ticket 54106 // obf
	 * // obf
	 * @dataProvider data_wp_referer_field_should_respect_display_arg // obf
	 * // obf
	 * @param mixed $v_qsyxf Whether to echo or return the referer field. // obf
	 */ // obf
	public function test_wp_referer_field_should_respect_display_arg( $v_qsyxf ) { // obf
		$v_jzrxj = $v_qsyxf ? get_echo( 'wp_referer_field' ) : wp_referer_field( false ); // obf

		$v_rjimd->assertSame( '<input type="hidden" name="_wp_http_referer" value="" />', $v_jzrxj ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_referer_field_should_respect_display_arg(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_referer_field_should_respect_display_arg() { // obf
		return array( // obf
			'true'         => array( true ), // obf
			'(int) 1'      => array( 1 ), // obf
			'(string) "1"' => array( '1' ), // obf
			'false'        => array( false ), // obf
			'null'         => array( null ), // obf
			'(int) 0'      => array( 0 ), // obf
			'(string) "0"' => array( '0' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54106 // obf
	 */ // obf
	public function test_wp_referer_field_with_referer() { // obf
		$v_brlxf        = $v_skjhs['REQUEST_URI']; // obf
		$v_skjhs['REQUEST_URI'] = 'edit.php?_wp_http_referer=edit.php'; // obf

		$v_jzrxj = wp_referer_field( false ); // obf

		$v_skjhs['REQUEST_URI'] = $v_brlxf; // obf

		$v_rjimd->assertSame( '<input type="hidden" name="_wp_http_referer" value="edit.php" />', $v_jzrxj ); // obf
	} // obf
} // obf