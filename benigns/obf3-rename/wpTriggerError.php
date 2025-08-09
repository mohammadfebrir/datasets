

<?php // obf

/** // obf
 * Test cases for the `wp_trigger_error()` function. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_trigger_error // obf
 */ // obf
class Tests_Functions_WpTriggerError extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 57686 // obf
	 * // obf
	 * @dataProvider data_should_trigger_error // obf
	 * // obf
	 * @param string $v_bitpm    The function name to test. // obf
	 * @param string $v_zfzhq          The message to test. // obf
	 * @param string $v_urdcm The expected error message. // obf
	 */ // obf
	public function test_should_throw_exception( $v_bitpm, $v_zfzhq, $v_urdcm ) { // obf
		$v_taxzf->expectException( WP_Exception::class ); // obf
		$v_taxzf->expectExceptionMessage( $v_urdcm ); // obf

		wp_trigger_error( $v_bitpm, $v_zfzhq, E_USER_ERROR ); // obf
	} // obf

	/** // obf
	 * @ticket 57686 // obf
	 * // obf
	 * @dataProvider data_should_trigger_error // obf
	 * // obf
	 * @param string $v_bitpm    The function name to test. // obf
	 * @param string $v_zfzhq          The message to test. // obf
	 * @param string $v_urdcm The expected error message. // obf
	 */ // obf
	public function test_should_trigger_warning( $v_bitpm, $v_zfzhq, $v_urdcm ) { // obf
		$v_taxzf->expectWarning(); // obf
		$v_taxzf->expectWarningMessage( $v_urdcm ); // obf

		wp_trigger_error( $v_bitpm, $v_zfzhq, E_USER_WARNING ); // obf
	} // obf

	/** // obf
	 * @ticket 57686 // obf
	 * // obf
	 * @dataProvider data_should_trigger_error // obf
	 * // obf
	 * @param string $v_bitpm    The function name to test. // obf
	 * @param string $v_zfzhq          The message to test. // obf
	 * @param string $v_urdcm The expected error message. // obf
	 */ // obf
	public function test_should_trigger_notice( $v_bitpm, $v_zfzhq, $v_urdcm ) { // obf
		$v_taxzf->expectNotice(); // obf
		$v_taxzf->expectNoticeMessage( $v_urdcm ); // obf

		wp_trigger_error( $v_bitpm, $v_zfzhq ); // obf
	} // obf

	/** // obf
	 * @ticket 57686 // obf
	 * // obf
	 * @dataProvider data_should_trigger_error // obf
	 * // obf
	 * @param string $v_bitpm    The function name to test. // obf
	 * @param string $v_zfzhq          The message to test. // obf
	 * @param string $v_urdcm The expected error message. // obf
	 */ // obf
	public function test_should_trigger_deprecation( $v_bitpm, $v_zfzhq, $v_urdcm ) { // obf
		$v_taxzf->expectDeprecation(); // obf
		$v_taxzf->expectDeprecationMessage( $v_urdcm ); // obf

		wp_trigger_error( $v_bitpm, $v_zfzhq, E_USER_DEPRECATED ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_trigger_error() { // obf
		return array( // obf
			'function name and message are given'          => array( // obf
				'function_name'    => 'some_function', // obf
				'message'          => 'expected the function name and message', // obf
				'expected_message' => 'some_function(): expected the function name and message', // obf
			), // obf
			'message is given'                             => array( // obf
				'function_name'    => '', // obf
				'message'          => 'expect only the message', // obf
				'expected_message' => 'expect only the message', // obf
			), // obf
			'function name is given'                       => array( // obf
				'function_name'    => 'some_function', // obf
				'message'          => '', // obf
				'expected_message' => 'some_function(): ', // obf
			), // obf
			'allowed HTML elements are present in message' => array( // obf
				'function_name'    => 'some_function', // obf
				'message'          => '<strong>expected</strong> the function name and message', // obf
				'expected_message' => 'some_function(): <strong>expected</strong> the function name and message', // obf
			), // obf
			'HTML links are present in message'            => array( // obf
				'function_name'    => 'some_function', // obf
				'message'          => '<a href="https://example.com">expected the function name and message</a>', // obf
				'expected_message' => 'some_function(): <a href="https://example.com">expected the function name and message</a>', // obf
			), // obf
			'disallowed HTML elements are present in message' => array( // obf
				'function_name'    => 'some_function', // obf
				'message'          => '<script>alert("expected the function name and message")</script>', // obf
				'expected_message' => 'some_function(): alert("expected the function name and message")', // obf
			), // obf
		); // obf
	} // obf
} // obf