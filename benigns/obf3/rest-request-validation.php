

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Request validation functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Request_Validation extends WP_Test_REST_TestCase { // obf

	public function test_validate_within_min_max_range_inclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'minmaxrange' => array( // obf
						'type'    => 'integer', // obf
						'minimum' => 2, // obf
						'maximum' => 10, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (inclusive) and 10 (inclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 11, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (inclusive) and 10 (inclusive)', $v_xbbsw->get_error_message() ); // obf
	} // obf

	public function test_validate_within_min_max_range_min_exclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'minmaxrange' => array( // obf
						'type'             => 'integer', // obf
						'minimum'          => 2, // obf
						'maximum'          => 10, // obf
						'exclusiveMinimum' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (inclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (inclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 3, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 9, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 11, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (inclusive)', $v_xbbsw->get_error_message() ); // obf
	} // obf

	public function test_validate_within_min_max_range_max_exclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'minmaxrange' => array( // obf
						'type'             => 'integer', // obf
						'minimum'          => 2, // obf
						'maximum'          => 10, // obf
						'exclusiveMaximum' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (inclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 3, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 9, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (inclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 11, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (inclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
	} // obf

	public function test_validate_within_min_max_range_both_exclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'minmaxrange' => array( // obf
						'type'             => 'integer', // obf
						'minimum'          => 2, // obf
						'maximum'          => 10, // obf
						'exclusiveMinimum' => true, // obf
						'exclusiveMaximum' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 3, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 9, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 11, $v_ezqlr, 'minmaxrange' ); // obf
		$v_hwhyc->assertSame( 'minmaxrange must be between 2 (exclusive) and 10 (exclusive)', $v_xbbsw->get_error_message() ); // obf
	} // obf

	public function test_validate_greater_than_min_inclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'greaterthanmin' => array( // obf
						'type'    => 'integer', // obf
						'minimum' => 2, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'greaterthanmin' ); // obf
		$v_hwhyc->assertSame( 'greaterthanmin must be greater than or equal to 2', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'greaterthanmin' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
	} // obf

	public function test_validate_greater_than_min_exclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'greaterthanmin' => array( // obf
						'type'             => 'integer', // obf
						'minimum'          => 2, // obf
						'exclusiveMinimum' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 1, $v_ezqlr, 'greaterthanmin' ); // obf
		$v_hwhyc->assertSame( 'greaterthanmin must be greater than 2', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 2, $v_ezqlr, 'greaterthanmin' ); // obf
		$v_hwhyc->assertSame( 'greaterthanmin must be greater than 2', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 3, $v_ezqlr, 'greaterthanmin' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
	} // obf

	public function test_validate_less_than_max_inclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'lessthanmax' => array( // obf
						'type'    => 'integer', // obf
						'maximum' => 10, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 11, $v_ezqlr, 'lessthanmax' ); // obf
		$v_hwhyc->assertSame( 'lessthanmax must be less than or equal to 10', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'lessthanmax' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
	} // obf

	public function test_validate_less_than_max_exclusive() { // obf
		$v_ezqlr = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/foo', // obf
			array( // obf
				'args' => array( // obf
					'lessthanmax' => array( // obf
						'type'             => 'integer', // obf
						'maximum'          => 10, // obf
						'exclusiveMaximum' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xbbsw     = rest_validate_request_arg( 11, $v_ezqlr, 'lessthanmax' ); // obf
		$v_hwhyc->assertSame( 'lessthanmax must be less than 10', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 10, $v_ezqlr, 'lessthanmax' ); // obf
		$v_hwhyc->assertSame( 'lessthanmax must be less than 10', $v_xbbsw->get_error_message() ); // obf
		$v_xbbsw = rest_validate_request_arg( 9, $v_ezqlr, 'lessthanmax' ); // obf
		$v_hwhyc->assertTrue( $v_xbbsw ); // obf
	} // obf
} // obf