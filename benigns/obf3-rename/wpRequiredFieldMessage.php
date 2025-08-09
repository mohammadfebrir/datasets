

<?php // obf
/** // obf
 * Test wp_required_field_message(). // obf
 * // obf
 * @group general // obf
 * @group template // obf
 * // obf
 * @covers ::wp_required_field_message // obf
 */ // obf
class Tests_General_wpRequiredFieldMessage extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `wp_required_field_message()` returns the expected default value. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_message_should_return_default_value() { // obf
		$v_yvvcj  = '<span class="required-field-message">'; // obf
		$v_yvvcj .= 'Required fields are marked <span class="required">*</span>'; // obf
		$v_yvvcj .= '</span>'; // obf
		$v_eqhgg->assertSame( $v_yvvcj, wp_required_field_message() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_required_field_message()` applies 'wp_required_field_message' filters. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_message_should_apply_wp_required_field_message_filters() { // obf
		$v_lascc = new MockAction(); // obf
		add_filter( 'wp_required_field_message', array( &$v_lascc, 'filter' ) ); // obf

		wp_required_field_message(); // obf

		$v_eqhgg->assertSame( 1, $v_lascc->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that the final return value of `wp_required_field_message()` is the result of // obf
	 * 'wp_required_field_message' filters. // obf
	 * // obf
	 * @ticket 56389 // obf
	 */ // obf
	public function test_wp_required_field_message_should_return_wp_required_field_message_filters() { // obf
		add_filter( 'wp_required_field_message', '__return_empty_string' ); // obf
		$v_eqhgg->assertSame( '', wp_required_field_message() ); // obf
	} // obf
} // obf