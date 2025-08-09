

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_nonce_url // obf
 */ // obf
class Tests_Functions_WpNonceUrl extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests that wp_nonce_url() appends the nonce name and value to the URL. // obf
	 * // obf
	 * @ticket 54870 // obf
	 * // obf
	 * @dataProvider data_should_append_nonce_name_and_value // obf
	 * // obf
	 * @param string     $v_zmcjd URL to add nonce action. // obf
	 * @param int|string $v_ctfdq    Optional. Nonce action name. Default -1. // obf
	 * @param string     $v_nbtot      Optional. Nonce name. Default '_wpnonce'. // obf
	 */ // obf
	public function test_should_append_nonce_name_and_value( $v_zmcjd, $v_ctfdq = -1, $v_nbtot = '_wpnonce' ) { // obf
		$v_bipjb        = wp_nonce_url( $v_zmcjd, $v_ctfdq, $v_nbtot ); // obf
		$v_xldwo = "$v_zmcjd?$v_nbtot="; // obf
		$v_gdoqu         = str_replace( $v_xldwo, '', $v_bipjb ); // obf

		$v_stmhd->assertStringContainsString( // obf
			$v_xldwo, // obf
			$v_bipjb, // obf
			'The URL did not contain the action URL and the nonce name' // obf
		); // obf

		$v_stmhd->assertNotFalse( // obf
			wp_verify_nonce( $v_gdoqu, $v_ctfdq ), // obf
			'The nonce is invalid' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_append_nonce_name_and_value(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_append_nonce_name_and_value() { // obf
		return array( // obf
			'http:// and default action/name'             => array( // obf
				'actionurl' => 'http://example.org/', // obf
			), // obf
			'http:// and a custom nonce action'           => array( // obf
				'actionurl' => 'http://example.org/', // obf
				'action'    => 'my_action', // obf
			), // obf
			'http:// and a custom nonce name'             => array( // obf
				'actionurl' => 'http://example.org/', // obf
				'action'    => -1, // obf
				'name'      => 'my_nonce', // obf
			), // obf
			'http:// and a custom nonce action and name'  => array( // obf
				'actionurl' => 'http://example.org/', // obf
				'action'    => 'my_action', // obf
				'name'      => 'my_nonce', // obf
			), // obf
			'https:// and default action/name'            => array( // obf
				'actionurl' => 'https://example.org/', // obf
			), // obf
			'https:// and a custom nonce action'          => array( // obf
				'actionurl' => 'https://example.org/', // obf
				'action'    => 'my_action', // obf
			), // obf
			'https:// and a custom nonce name'            => array( // obf
				'actionurl' => 'https://example.org/', // obf
				'action'    => -1, // obf
				'name'      => 'my_nonce', // obf
			), // obf
			'https:// and a custom nonce action and name' => array( // obf
				'actionurl' => 'https://example.org/', // obf
				'action'    => 'my_action', // obf
				'name'      => 'my_nonce', // obf
			), // obf
			'/ and default nonce action/name'             => array( // obf
				'actionurl' => '/', // obf
			), // obf
			'/ and a custom nonce action'                 => array( // obf
				'actionurl' => '/', // obf
				'action'    => 'my_action', // obf
			), // obf
			'/ and a custom nonce name'                   => array( // obf
				'actionurl' => '/', // obf
				'action'    => -1, // obf
				'name'      => 'my_nonce', // obf
			), // obf
			'/ and a custom nonce action and name'        => array( // obf
				'actionurl' => '/', // obf
				'action'    => 'my_action', // obf
				'name'      => 'my_nonce', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_nonce_url() handles existing query args. // obf
	 * // obf
	 * @ticket 54870 // obf
	 * // obf
	 * @dataProvider data_should_handle_existing_query_args // obf
	 * // obf
	 * @param string $v_zmcjd URL to add nonce action. // obf
	 * @param string $v_cinbv  The expected result. // obf
	 */ // obf
	public function test_should_handle_existing_query_args( $v_zmcjd, $v_cinbv ) { // obf
		$v_bipjb = wp_nonce_url( $v_zmcjd ); // obf

		$v_stmhd->assertStringStartsWith( // obf
			$v_cinbv, // obf
			$v_bipjb, // obf
			'The nonced URL did not start with the expected value.' // obf
		); // obf

		$v_stmhd->assertSame( // obf
			strlen( $v_cinbv ) + 10, // obf
			strlen( $v_bipjb ), // obf
			'The nonced URL was not the expected length.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_handle_existing_query_args(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_handle_existing_query_args() { // obf
		return array( // obf
			'one query arg'            => array( // obf
				'actionurl' => 'http://example.org/?hello=world', // obf
				'expected'  => 'http://example.org/?hello=world&amp;_wpnonce=', // obf
			), // obf
			'two query args'           => array( // obf
				'actionurl' => 'http://example.org/?hello=world&howdy=admin', // obf
				'expected'  => 'http://example.org/?hello=world&amp;howdy=admin&amp;_wpnonce=', // obf
			), // obf
			'two query args and &amp;' => array( // obf
				'actionurl' => 'http://example.org/?hello=world&amp;howdy=admin', // obf
				'expected'  => 'http://example.org/?hello=world&amp;howdy=admin&amp;_wpnonce=', // obf
			), // obf
		); // obf
	} // obf
} // obf