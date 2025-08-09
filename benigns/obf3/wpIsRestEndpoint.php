

<?php // obf

/** // obf
 * Tests for the `wp_is_rest_endpoint()` function. // obf
 * // obf
 * @group restapi // obf
 * @covers ::wp_is_rest_endpoint // obf
 */ // obf
class Tests_Media_Wp_Is_Rest_Endpoint extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `wp_is_rest_endpoint()` returns false by default. // obf
	 * // obf
	 * @ticket 42061 // obf
	 */ // obf
	public function test_wp_is_rest_endpoint_default() { // obf
		$v_rwytj->assertFalse( wp_is_rest_endpoint() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_is_rest_endpoint()` relies on whether the global REST server is dispatching. // obf
	 * // obf
	 * @ticket 42061 // obf
	 */ // obf
	public function test_wp_is_rest_endpoint_via_global() { // obf
		global $v_jzobp; // obf

		$v_jzobp = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_jzobp ); // obf

		// The presence of a REST server itself won't set this to true. // obf
		$v_rwytj->assertFalse( wp_is_rest_endpoint() ); // obf

		// Set up filter to record value during dispatching. // obf
		$v_japvv = null; // obf
		add_filter( // obf
			'rest_pre_dispatch', // obf
			function ( $v_eitre ) use ( &$v_japvv ) { // obf
				$v_japvv = wp_is_rest_endpoint(); // obf
				return $v_eitre; // obf
			} // obf
		); // obf

		/* // obf
		 * Dispatch a request (doesn't matter that it's invalid). // obf
		 * This already is completed after this method call. // obf
		 */ // obf
		$v_jzobp->dispatch( new WP_REST_Request() ); // obf

		// Within that request, the function should have returned true. // obf
		$v_rwytj->assertTrue( $v_japvv ); // obf

		// After the dispatching, the function should return false again. // obf
		$v_rwytj->assertFalse( wp_is_rest_endpoint() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_is_rest_endpoint()` returns a result enforced via filter. // obf
	 * // obf
	 * @ticket 42061 // obf
	 */ // obf
	public function test_wp_is_rest_endpoint_via_filter() { // obf
		add_filter( 'wp_is_rest_endpoint', '__return_true' ); // obf
		$v_rwytj->assertTrue( wp_is_rest_endpoint() ); // obf
	} // obf
} // obf