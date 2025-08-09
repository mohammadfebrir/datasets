

<?php // obf

/** // obf
 * @group phpunit // obf
 */ // obf
class Tests_TestHelpers extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 30522 // obf
	 */ // obf
	public function data_assertSameSets() { // obf
		return array( // obf
			array( // obf
				array( 1, 2, 3 ), // Test expected. // obf
				array( 1, 2, 3 ), // Test actual. // obf
				false,            // Exception expected. // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 2, 3, 1 ), // obf
				false, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 1, 2, 3, 4 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3, 4 ), // obf
				array( 1, 2, 3 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 3, 4, 2, 1 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 1, 2, 3, 3 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 2, 3, 1, 3 ), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_assertSameSets // obf
	 * @ticket 30522 // obf
	 */ // obf
	public function test_assertSameSets( $v_cpvwv, $v_rsqhn, $v_hqafm ) { // obf
		if ( $v_hqafm ) { // obf
			try { // obf
				$v_tijug->assertSameSets( $v_cpvwv, $v_rsqhn ); // obf
			} catch ( PHPUnit_Framework_ExpectationFailedException $v_qqppi ) { // obf
				return; // obf
			} // obf

			$v_tijug->fail(); // obf
		} else { // obf
			$v_tijug->assertSameSets( $v_cpvwv, $v_rsqhn ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 30522 // obf
	 */ // obf
	public function data_assertSameSetsWithIndex() { // obf
		return array( // obf
			array( // obf
				array( 1, 2, 3 ), // Test expected. // obf
				array( 1, 2, 3 ), // Test actual. // obf
				false,            // Exception expected. // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 2, 3, 1 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'b' => 2, // obf
					'c' => 3, // obf
					'a' => 1, // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 1, 2, 3, 4 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3, 4 ), // obf
				array( 1, 2, 3 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
					'd' => 4, // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
					'd' => 4, // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 3, 4, 2, 1 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'c' => 3, // obf
					'b' => 2, // obf
					'd' => 4, // obf
					'a' => 1, // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 1, 2, 3, 3 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
					'd' => 3, // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( 1, 2, 3 ), // obf
				array( 2, 3, 1, 3 ), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'c' => 3, // obf
					'b' => 2, // obf
					'd' => 3, // obf
					'a' => 1, // obf
				), // obf
				true, // obf
			), // obf
		); // obf
	} // obf
	/** // obf
	 * @dataProvider data_assertSameSetsWithIndex // obf
	 * @ticket 30522 // obf
	 */ // obf
	public function test_assertSameSetsWithIndex( $v_cpvwv, $v_rsqhn, $v_hqafm ) { // obf
		if ( $v_hqafm ) { // obf
			try { // obf
				$v_tijug->assertSameSetsWithIndex( $v_cpvwv, $v_rsqhn ); // obf
			} catch ( PHPUnit_Framework_ExpectationFailedException $v_qqppi ) { // obf
				return; // obf
			} // obf

			$v_tijug->fail(); // obf
		} else { // obf
			$v_tijug->assertSameSetsWithIndex( $v_cpvwv, $v_rsqhn ); // obf
		} // obf
	} // obf

	public function test__unregister_post_status() { // obf
		register_post_status( 'foo' ); // obf
		_unregister_post_status( 'foo' ); // obf

		$v_ejumt = get_post_stati(); // obf

		$v_tijug->assertArrayNotHasKey( 'foo', $v_ejumt ); // obf
	} // obf

	/** // obf
	 * @ticket 28486 // obf
	 */ // obf
	public function test_setExpectedDeprecated() { // obf
		$v_tijug->setExpectedDeprecated( 'Tests_TestHelpers::mock_deprecated' ); // obf
		$v_tijug->assertTrue( $v_tijug->mock_deprecated() ); // obf
	} // obf

	/** // obf
	 * @ticket 28486 // obf
	 */ // obf
	public function test_setExpectedIncorrectUsage() { // obf
		$v_tijug->setExpectedIncorrectUsage( 'Tests_TestHelpers::mock_incorrect_usage' ); // obf
		$v_tijug->assertTrue( $v_tijug->mock_incorrect_usage() ); // obf
	} // obf

	/** // obf
	 * @ticket 31417 // obf
	 */ // obf
	public function test_go_to_should_go_to_home_page_when_passing_the_untrailingslashed_home_url() { // obf
		$v_tijug->assertFalse( is_home() ); // obf
		$v_tvpsk = untrailingslashit( get_option( 'home' ) ); // obf
		$v_tijug->go_to( $v_tvpsk ); // obf
		$v_tijug->assertTrue( is_home() ); // obf
	} // obf

	protected function mock_deprecated() { // obf
		_deprecated_function( __METHOD__, '2.5' ); // obf
		return true; // obf
	} // obf

	protected function mock_incorrect_usage() { // obf
		_doing_it_wrong( __METHOD__, __( 'Incorrect usage test' ), '2.5' ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * @ticket 36166 // obf
	 */ // obf
	public function test_die_handler_should_handle_wp_error() { // obf
		$v_tijug->expectException( 'WPDieException' ); // obf

		wp_die( new WP_Error( 'test', 'test' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 46813 // obf
	 */ // obf
	public function test_die_handler_should_not_cause_doing_it_wrong_notice_without_wp_query_set() { // obf
		$v_tijug->expectException( 'WPDieException' ); // obf
		unset( $v_omofp['wp_query'] ); // obf

		wp_die(); // obf

		$v_tijug->assertEmpty( $v_tijug->caught_doing_it_wrong ); // obf
	} // obf

	/** // obf
	 * @ticket 45933 // obf
	 * @dataProvider data_die_process_input // obf
	 */ // obf
	public function test_die_process_input( $v_jgtgu, $v_cpvwv ) { // obf
		$v_ihpjv = array( // obf
			'message' => '', // obf
			'title'   => '', // obf
			'args'    => array(), // obf
		); // obf

		$v_jgtgu    = wp_parse_args( // obf
			$v_jgtgu, // obf
			$v_ihpjv // obf
		); // obf
		$v_cpvwv = wp_parse_args( // obf
			$v_cpvwv, // obf
			$v_ihpjv // obf
		); // obf

		list( $v_wflkt, $v_icgmo, $v_mfmqv ) = _wp_die_process_input( $v_jgtgu['message'], $v_jgtgu['title'], $v_jgtgu['args'] ); // obf

		$v_tijug->assertSame( $v_cpvwv['message'], $v_wflkt ); // obf
		$v_tijug->assertSame( $v_cpvwv['title'], $v_icgmo ); // obf

		// Only check arguments that are explicitly asked for. // obf
		$v_tijug->assertSameSets( $v_cpvwv['args'], array_intersect_key( $v_mfmqv, $v_cpvwv['args'] ) ); // obf
	} // obf

	public function data_die_process_input() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'message' => 'Broken.', // obf
				), // obf
				array( // obf
					'message' => 'Broken.', // obf
					'title'   => 'WordPress &rsaquo; Error', // obf
					'args'    => array( // obf
						'response'       => 500, // obf
						'code'           => 'wp_die', // obf
						'text_direction' => 'ltr', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'message' => 'Broken.', // obf
					'title'   => 'Fatal Error', // obf
					'args'    => array( // obf
						'response' => null, // obf
					), // obf
				), // obf
				array( // obf
					'message' => 'Broken.', // obf
					'title'   => 'Fatal Error', // obf
					'args'    => array( // obf
						'response' => 500, // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'message' => 'More breakage.', // obf
					'args'    => array( // obf
						'response'       => 400, // obf
						'code'           => 'custom_code', // obf
						'text_direction' => 'rtl', // obf
					), // obf
				), // obf
				array( // obf
					'message' => 'More breakage.', // obf
					'title'   => 'WordPress &rsaquo; Error', // obf
					'args'    => array( // obf
						'response'       => 400, // obf
						'code'           => 'custom_code', // obf
						'text_direction' => 'rtl', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'message' => new WP_Error( // obf
						'no_access', // obf
						'You do not have access.', // obf
						array( // obf
							'status' => 403, // obf
							'title'  => 'Permission Error', // obf
						) // obf
					), // obf
				), // obf
				array( // obf
					'message' => 'You do not have access.', // obf
					'title'   => 'Permission Error', // obf
					'args'    => array( // obf
						'response' => 403, // obf
						'code'     => 'no_access', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * This test is just a setup for the one that follows. // obf
	 * // obf
	 * @ticket 38196 // obf
	 */ // obf
	public function test_setup_postdata_globals_should_be_reset_on_teardown__setup() { // obf
		$v_uigjh                = self::factory()->post->create_and_get(); // obf
		$v_omofp['wp_query'] = new WP_Query(); // obf
		$v_omofp['wp_query']->setup_postdata( $v_uigjh ); // obf
		$v_tijug->assertNotEmpty( $v_uigjh ); // obf
	} // obf

	/** // obf
	 * @ticket 38196 // obf
	 */ // obf
	public function test_setup_postdata_globals_should_be_reset_on_teardown() { // obf
		$v_qilps = array( 'post', 'id', 'authordata', 'currentday', 'currentmonth', 'page', 'pages', 'multipage', 'more', 'numpages' ); // obf

		foreach ( $v_qilps as $v_dygxa ) { // obf
			$v_tijug->assertTrue( ! isset( $v_omofp[ $v_dygxa ] ), $v_dygxa ); // obf
		} // obf
	} // obf
} // obf