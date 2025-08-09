

<?php // obf
/** // obf
 * Tests for error handling and the WP_Error class. // obf
 * // obf
 * @group general // obf
 * @group errors // obf
 * // obf
 * @covers WP_Error // obf
 * @coversDefaultClass WP_Error // obf
 */ // obf
class Tests_General_wpError extends WP_UnitTestCase { // obf

	/** // obf
	 * WP_Error fixture. // obf
	 * // obf
	 * @var WP_Error // obf
	 */ // obf
	public $v_lacnv; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ifekl->wp_error = new WP_Error(); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_WP_Error_should_be_of_type_WP_Error() { // obf
		$v_ifekl->assertWPError( $v_ifekl->wp_error ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_WP_Error_with_default_empty_parameters_should_add_no_errors() { // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_WP_Error_with_empty_code_should_add_no_code() { // obf
		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_WP_Error_with_empty_code_should_add_no_message() { // obf
		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_WP_Error_with_empty_code_should_add_no_error_data() { // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_WP_Error_with_code_and_empty_message_should_add_error_with_that_code() { // obf
		$v_lacnv = new WP_Error( 'code' ); // obf

		$v_ifekl->assertSame( 'code', $v_lacnv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_WP_Error_with_code_and_empty_message_should_add_error_with_that_code_and_empty_message() { // obf
		$v_lacnv = new WP_Error( 'code' ); // obf

		$v_ifekl->assertSame( '', $v_lacnv->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_WP_Error_with_code_and_empty_message_and_empty_data_should_add_error_but_not_associated_data() { // obf
		$v_lacnv = new WP_Error( 'code' ); // obf

		$v_ifekl->assertNull( $v_lacnv->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_WP_Error_with_code_and_empty_message_and_non_empty_data_should_add_error_with_empty_message_and_that_stored_data() { // obf
		$v_lacnv = new WP_Error( 'code', '', 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_lacnv->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_WP_Error_with_code_and_message_should_add_error_with_that_code() { // obf
		$v_lacnv = new WP_Error( 'code', 'message' ); // obf

		$v_ifekl->assertSame( 'code', $v_lacnv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_WP_Error_with_code_and_message_should_add_error_with_that_message() { // obf
		$v_lacnv = new WP_Error( 'code', 'message' ); // obf

		$v_ifekl->assertSame( 'message', $v_lacnv->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_WP_Error_with_code_and_message_and_data_should_add_error_with_that_code() { // obf
		$v_lacnv = new WP_Error( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'code', $v_lacnv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_WP_Error_with_code_and_message_and_data_should_add_error_with_that_message() { // obf
		$v_lacnv = new WP_Error( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'message', $v_lacnv->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_WP_Error_with_code_and_message_and_data_should_add_error_with_that_data() { // obf
		$v_lacnv = new WP_Error( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_lacnv->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_codes // obf
	 */ // obf
	public function test_get_error_codes_with_no_errors_should_return_empty_array() { // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_codes // obf
	 */ // obf
	public function test_get_error_codes_with_one_error_should_return_an_array_with_only_that_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSameSets( array( 'code' ), $v_ifekl->wp_error->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_codes // obf
	 */ // obf
	public function test_get_error_codes_with_multiple_errors_should_return_an_array_of_those_codes() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_tggzi = array( 'code', 'code2' ); // obf

		$v_ifekl->assertSameSets( $v_tggzi, $v_ifekl->wp_error->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_get_error_code_with_no_errors_should_return_an_empty_string() { // obf
		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_get_error_code_with_one_error_should_return_that_error_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSame( 'code', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_get_error_code_with_multiple_errors_should_return_only_the_first_error_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->assertSame( 'code', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_empty_code_and_no_errors_should_return_an_empty_array() { // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->get_error_messages() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_empty_code_one_error_should_return_an_array_with_that_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSameSets( array( 'message' ), $v_ifekl->wp_error->get_error_messages() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_empty_code_multiple_errors_should_return_an_array_of_messages() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->assertSameSets( array( 'message', 'message2' ), $v_ifekl->wp_error->get_error_messages() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_an_invalid_code_should_return_an_empty_array() { // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->get_error_messages( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_one_error_should_return_an_array_with_that_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSameSets( array( 'message' ), $v_ifekl->wp_error->get_error_messages( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_get_error_messages_with_multiple_errors_same_code_should_return_an_array_with_all_messages() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2' ); // obf

		$v_ifekl->assertSameSets( array( 'message', 'message2' ), $v_ifekl->wp_error->get_error_messages( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_empty_code_and_no_errors_should_return_an_empty_string() { // obf
		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_empty_code_and_one_error_should_return_that_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSame( 'message', $v_ifekl->wp_error->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_empty_code_and_multiple_errors_should_return_the_first_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->assertSame( 'message', $v_ifekl->wp_error->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_empty_code_and_multiple_errors_multiple_codes_should_return_the_first_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2' ); // obf

		$v_ifekl->assertSame( 'message', $v_ifekl->wp_error->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_invalid_code_and_no_errors_should_return_empty_string() { // obf
		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message( 'invalid' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_invalid_code_and_one_error_should_return_an_empty_string() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message( 'invalid' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_get_error_message_with_invalid_code_and_multiple_errors_should_return_an_empty_string() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message( 'invalid' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_and_no_errors_should_evaluate_as_null() { // obf
		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_one_error_no_data_should_evaluate_as_null() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_multiple_errors_no_data_should_evaluate_as_null() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_and_one_error_with_data_should_return_that_data() { // obf
		$v_tggzi = array( 'data-key' => 'data-value' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', $v_tggzi ); // obf

		$v_ifekl->assertSameSetsWithIndex( $v_tggzi, $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_and_multiple_errors_different_codes_should_return_the_last_data_of_the_first_code() { // obf
		$v_tggzi = array( 'data-key' => 'data-value' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', $v_tggzi ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2', 'data2' ); // obf

		$v_ifekl->assertSameSetsWithIndex( $v_tggzi, $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_empty_code_and_multiple_errors_same_code_should_return_the_last_data_of_the_first_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2', 'data2' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2', 'data3' ); // obf

		$v_ifekl->assertSame( 'data2', $v_ifekl->wp_error->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_code_and_no_errors_should_evaluate_as_null() { // obf
		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_code_and_one_error_with_no_data_should_evaluate_as_null() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_code_and_one_error_with_data_should_return_that_data() { // obf
		$v_tggzi = array( 'data-key' => 'data-value' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', $v_tggzi ); // obf

		$v_ifekl->assertSameSetsWithIndex( $v_tggzi, $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_code_and_multiple_errors_different_codes_should_return_the_last_stored_data_of_the_code() { // obf
		$v_tggzi = array( 'data3' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2', 'data2' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message3', $v_tggzi ); // obf

		$v_ifekl->assertSameSetsWithIndex( $v_tggzi, $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_get_error_data_with_code_and_multiple_errors_same_code_should_return_the_last_stored_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2', 'data2' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message3', 'data3' ); // obf

		$v_ifekl->assertSame( 'data2', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_get_all_error_data_with_code_and_no_errors_should_evaluate_as_empty_array() { // obf
		$v_ifekl->assertSame( array(), $v_ifekl->wp_error->get_all_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_get_all_error_data_with_code_and_one_error_with_no_data_should_evaluate_as_empty_array() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSame( array(), $v_ifekl->wp_error->get_all_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_get_all_error_data_with_code_and_one_error_with_data_should_return_that_data() { // obf
		$v_tggzi = array( 'data-key' => 'data-value' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', $v_tggzi ); // obf

		$v_ixujv = $v_ifekl->wp_error->get_all_error_data( 'code' ); // obf
		$v_ifekl->assertCount( 1, $v_ixujv ); // obf
		$v_ifekl->assertSameSetsWithIndex( $v_tggzi, $v_ixujv[0] ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_get_all_error_data_with_code_and_multiple_errors_same_code_should_return_all_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2', 'data2' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message3', 'data3' ); // obf

		$v_ifekl->assertSame( array( 'data', 'data2' ), $v_ifekl->wp_error->get_all_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_get_all_error_data_should_handle_manipulation_of_error_data_property() { // obf
		$v_ifekl->wp_error->add_data( 'data1', 'code' ); // obf
		$v_ifekl->wp_error->add_data( 'data2', 'code' ); // obf

		$v_ifekl->wp_error->error_data['code'] = 'dataX'; // obf

		$v_ifekl->assertSame( 'dataX', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
		$v_ifekl->assertSame( array( 'data1', 'dataX' ), $v_ifekl->wp_error->get_all_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::has_errors // obf
	 */ // obf
	public function test_has_errors_with_no_errors_returns_false() { // obf
		$v_ifekl->assertFalse( $v_ifekl->wp_error->has_errors() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::has_errors // obf
	 */ // obf
	public function test_has_errors_with_errors_returns_true() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->assertTrue( $v_ifekl->wp_error->has_errors() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 */ // obf
	public function test_add_with_empty_code_empty_message_empty_data_should_add_empty_key_to_errors_array() { // obf
		$v_ifekl->wp_error->add( '', '', 'data' ); // obf

		$v_ifekl->assertArrayHasKey( '', $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 */ // obf
	public function test_add_with_empty_code_empty_message_empty_data_should_add_empty_message_to_errors_array_under_empty_key() { // obf
		$v_ifekl->wp_error->add( '', '', 'data' ); // obf

		$v_ifekl->assertSameSetsWithIndex( array( '' => array( '' ) ), $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 */ // obf
	public function test_add_with_empty_code_empty_message_empty_data_should_not_alter_data() { // obf
		$v_ifekl->wp_error->add( '', '', '' ); // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 */ // obf
	public function test_add_with_empty_code_empty_message_non_empty_data_should_store_data_under_an_empty_code_key() { // obf
		$v_ifekl->wp_error->add( '', '', 'data' ); // obf

		$v_ifekl->assertSameSetsWithIndex( array( '' => 'data' ), $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_add_with_code_empty_message_empty_data_should_add_error_with_code() { // obf
		$v_ifekl->wp_error->add( 'code', '' ); // obf

		$v_ifekl->assertSame( 'code', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_add_with_code_empty_message_empty_data_should_add_error_with_empty_message() { // obf
		$v_ifekl->wp_error->add( 'code', '' ); // obf

		$v_ifekl->assertSame( '', $v_ifekl->wp_error->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_with_code_empty_message_empty_data_should_not_add_error_data() { // obf
		$v_ifekl->wp_error->add( 'code', '' ); // obf

		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_add_with_code_and_message_and_empty_data_should_should_add_error_with_that_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertSame( 'message', $v_ifekl->wp_error->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_with_code_and_message_and_empty_data_should_not_alter_stored_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->assertNull( $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_add_with_code_and_empty_message_and_data_should_add_error_with_that_code() { // obf
		$v_ifekl->wp_error->add( 'code', '', 'data' ); // obf

		$v_ifekl->assertSame( 'code', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_with_code_and_empty_message_and_data_should_store_that_data() { // obf
		$v_ifekl->wp_error->add( 'code', '', 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_code // obf
	 */ // obf
	public function test_add_with_code_and_message_and_data_should_add_an_error_with_that_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'code', $v_ifekl->wp_error->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_add_with_code_and_message_and_data_should_add_an_error_with_that_message() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'message', $v_ifekl->wp_error->get_error_message( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_with_code_and_message_and_data_should_store_that_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_messages // obf
	 */ // obf
	public function test_add_multiple_times_with_the_same_code_should_add_additional_messages_for_that_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2' ); // obf

		$v_tggzi = array( 'message', 'message2' ); // obf

		$v_ifekl->assertSameSets( $v_tggzi, $v_ifekl->wp_error->get_error_messages( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_multiple_times_with_the_same_code_and_different_data_should_store_only_the_last_added_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data-bar' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message2', 'data-baz' ); // obf

		$v_ifekl->assertSame( 'data-baz', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_empty_data_empty_code_should_create_orphaned_data_with_no_error() { // obf
		$v_ifekl->wp_error->add_data( '' ); // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_empty_data_empty_code_no_errors_should_create_data_under_an_empty_code_key() { // obf
		$v_ifekl->wp_error->add_data( '' ); // obf

		$v_ifekl->assertSameSets( array( '' => '' ), $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_data_with_data_empty_code_and_one_error_should_store_the_data_under_that_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add_data( 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_data_with_data_empty_code_and_multiple_errors_with_different_codes_should_store_it_under_the_first_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf

		$v_ifekl->wp_error->add_data( 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_data_with_data_empty_code_and_multiple_errors_with_same_code_should_store_it_under_the_first_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message2' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message3' ); // obf

		$v_ifekl->wp_error->add_data( 'data' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_data_and_code_and_no_errors_should_create_orphaned_data_with_no_error() { // obf
		$v_ifekl->wp_error->add_data( 'data', 'code' ); // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_data_and_code_no_errors_should_create_data_under_that_code_key() { // obf
		$v_ifekl->wp_error->add_data( 'data', 'code' ); // obf

		$v_ifekl->assertSameSets( array( 'code' => 'data' ), $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_data_and_code_one_error_different_code_should_create_orphaned_data_with_no_error() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->wp_error->add_data( 'data', 'code2' ); // obf

		$v_ifekl->assertSameSetsWithIndex( array( 'code' => array( 'message' ) ), $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 */ // obf
	public function test_add_data_with_data_and_code_one_error_different_code_should_create_data_under_that_code_key() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->wp_error->add_data( 'data', 'code2' ); // obf

		$v_ifekl->assertSameSetsWithIndex( array( 'code2' => 'data' ), $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::add_data // obf
	 * @covers ::get_error_data // obf
	 */ // obf
	public function test_add_data_with_data_and_code_should_add_data() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->wp_error->add_data( 'data', 'code' ); // obf

		$v_ifekl->assertSame( 'data', $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 */ // obf
	public function test_remove_with_no_errors_should_affect_nothing() { // obf
		$v_wduzl = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->wp_error->remove( 'code' ); // obf

		$v_dyoxt = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->assertSameSetsWithIndex( $v_wduzl, $v_dyoxt ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 */ // obf
	public function test_remove_empty_code_no_errors_should_affect_nothing() { // obf
		$v_wduzl = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->wp_error->remove( '' ); // obf

		$v_dyoxt = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->assertSameSetsWithIndex( $v_wduzl, $v_dyoxt ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 */ // obf
	public function test_remove_empty_code_and_one_error_with_empty_string_code_should_remove_error() { // obf
		$v_wduzl = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->wp_error->add( '', 'message' ); // obf

		$v_ifekl->wp_error->remove( '' ); // obf

		$v_dyoxt = $v_ifekl->wp_error->errors; // obf

		$v_ifekl->assertSameSetsWithIndex( $v_wduzl, $v_dyoxt ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 */ // obf
	public function test_remove_empty_code_and_one_error_with_empty_string_code_should_remove_error_data() { // obf
		$v_ifekl->wp_error->add( '', 'message', 'data' ); // obf

		$v_ifekl->wp_error->remove( '' ); // obf

		$v_dyoxt = $v_ifekl->wp_error->error_data; // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->error_data ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 */ // obf
	public function test_remove_should_remove_the_error_with_the_given_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message' ); // obf

		$v_ifekl->wp_error->remove( 'code' ); // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->errors ); // obf
	} // obf

	/** // obf
	 * @covers ::remove // obf
	 * @covers ::get_error_data // obf
	 * @covers ::get_all_error_data // obf
	 */ // obf
	public function test_remove_should_remove_the_error_data_associated_with_the_given_code() { // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data' ); // obf
		$v_ifekl->wp_error->add( 'code', 'message', 'data2' ); // obf

		$v_ifekl->wp_error->remove( 'code' ); // obf

		$v_ifekl->assertEmpty( $v_ifekl->wp_error->error_data ); // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->get_error_data( 'code' ) ); // obf
		$v_ifekl->assertEmpty( $v_ifekl->wp_error->get_all_error_data( 'code' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::merge_from // obf
	 * @covers ::get_error_messages // obf
	 * @covers ::get_error_data // obf
	 * @covers ::get_all_error_data // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_merge_from_should_copy_other_error_into_instance() { // obf
		$v_ifekl->wp_error->add( 'code1', 'message1', 'data1' ); // obf

		$v_krgnt = new WP_Error( 'code1', 'message2', 'data2' ); // obf
		$v_krgnt->add( 'code2', 'message3' ); // obf
		$v_ifekl->wp_error->merge_from( $v_krgnt ); // obf

		$v_ifekl->assertSame( array( 'message1', 'message2' ), $v_ifekl->wp_error->get_error_messages( 'code1' ) ); // obf
		$v_ifekl->assertSame( 'data2', $v_ifekl->wp_error->get_error_data( 'code1' ) ); // obf
		$v_ifekl->assertSame( array( 'data1', 'data2' ), $v_ifekl->wp_error->get_all_error_data( 'code1' ) ); // obf
		$v_ifekl->assertSame( 'message3', $v_ifekl->wp_error->get_error_message( 'code2' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::merge_from // obf
	 * @covers ::has_errors // obf
	 */ // obf
	public function test_merge_from_with_no_errors_should_not_add_to_instance() { // obf
		$v_krgnt = new WP_Error(); // obf

		$v_ifekl->wp_error->merge_from( $v_krgnt ); // obf

		$v_ifekl->assertFalse( $v_ifekl->wp_error->has_errors() ); // obf
	} // obf

	/** // obf
	 * @covers ::export_to // obf
	 * @covers ::get_error_messages // obf
	 * @covers ::get_error_data // obf
	 * @covers ::get_all_error_data // obf
	 * @covers ::get_error_message // obf
	 */ // obf
	public function test_export_to_should_copy_instance_into_other_error() { // obf
		$v_krgnt = new WP_Error(); // obf
		$v_krgnt->add( 'code1', 'message1', 'data1' ); // obf

		$v_ifekl->wp_error->add( 'code1', 'message2', 'data2' ); // obf
		$v_ifekl->wp_error->add( 'code2', 'message3' ); // obf

		$v_ifekl->wp_error->export_to( $v_krgnt ); // obf

		$v_ifekl->assertSame( array( 'message1', 'message2' ), $v_krgnt->get_error_messages( 'code1' ) ); // obf
		$v_ifekl->assertSame( 'data2', $v_krgnt->get_error_data( 'code1' ) ); // obf
		$v_ifekl->assertSame( array( 'data1', 'data2' ), $v_krgnt->get_all_error_data( 'code1' ) ); // obf
		$v_ifekl->assertSame( 'message3', $v_krgnt->get_error_message( 'code2' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::export_to // obf
	 * @covers ::has_errors // obf
	 */ // obf
	public function test_export_to_with_no_errors_should_not_add_to_other_error() { // obf
		$v_krgnt = new WP_Error(); // obf

		$v_ifekl->wp_error->export_to( $v_krgnt ); // obf

		$v_ifekl->assertFalse( $v_krgnt->has_errors() ); // obf
	} // obf
} // obf