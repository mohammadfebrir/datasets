

<?php // obf
/** // obf
 * Test wp_required_field_indicator(). // obf
 * // obf
 * @group general // obf
 * @group template // obf
 * // obf
 * @covers ::wp_required_field_indicator // obf
 */ // obf
class Tests_General_wpRequiredFieldIndicator extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `wp_required_field_indicator()` returns the expected default value. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_indicator_should_return_default_value() { // obf
		$v_hkeip->assertSame( '<span class="required">*</span>', wp_required_field_indicator() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_required_field_indicator()` applies 'wp_required_field_indicator' filters. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_indicator_should_apply_wp_required_field_indicator_filters() { // obf
		$v_libis = new MockAction(); // obf
		add_filter( 'wp_required_field_indicator', array( &$v_libis, 'filter' ) ); // obf

		wp_required_field_indicator(); // obf

		$v_hkeip->assertSame( 1, $v_libis->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that the final return value of `wp_required_field_indicator()` is the result of // obf
	 * 'wp_required_field_indicator' filters. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_indicator_should_return_wp_required_field_indicator_filters() { // obf
		add_filter( 'wp_required_field_indicator', '__return_empty_string' ); // obf
		$v_hkeip->assertSame( '', wp_required_field_indicator() ); // obf
	} // obf
} // obf