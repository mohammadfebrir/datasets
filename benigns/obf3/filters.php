

<?php // obf

/** // obf
 * Test apply_filters() and related functions // obf
 * // obf
 * @group hooks // obf
 */ // obf
class Tests_Filters extends WP_UnitTestCase { // obf

	public function test_simple_filter() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf

		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf

		// Only one event occurred for the hook, with empty args. // obf
		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		// Only our hook was called. // obf
		$v_oknpp->assertSame( array( $v_wvdbz ), $v_iqxte->get_hook_names() ); // obf

		$v_gumks = $v_iqxte->get_args(); // obf
		$v_jrqtu    = array_pop( $v_gumks ); // obf
		$v_oknpp->assertSame( array( $v_rhrif ), $v_jrqtu ); // obf
	} // obf

	public function test_remove_filter() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf

		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf

		// Make sure our hook was called correctly. // obf
		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		$v_oknpp->assertSame( array( $v_wvdbz ), $v_iqxte->get_hook_names() ); // obf

		// Now remove the filter, do it again, and make sure it's not called this time. // obf
		remove_filter( $v_wvdbz, array( $v_iqxte, 'filter' ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf
		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		$v_oknpp->assertSame( array( $v_wvdbz ), $v_iqxte->get_hook_names() ); // obf
	} // obf

	public function test_has_filter() { // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rmrca  = __FUNCTION__ . '_func'; // obf

		$v_oknpp->assertFalse( has_filter( $v_wvdbz, $v_rmrca ) ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz ) ); // obf

		add_filter( $v_wvdbz, $v_rmrca ); // obf
		$v_oknpp->assertSame( 10, has_filter( $v_wvdbz, $v_rmrca ) ); // obf
		$v_oknpp->assertTrue( has_filter( $v_wvdbz ) ); // obf

		remove_filter( $v_wvdbz, $v_rmrca ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz, $v_rmrca ) ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz ) ); // obf
	} // obf

	// One tag with multiple filters. // obf
	public function test_multiple_filters() { // obf
		$v_ilcql        = new MockAction(); // obf
		$v_ykkoi        = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf

		// Add both filters to the hook. // obf
		add_filter( $v_wvdbz, array( $v_ilcql, 'filter' ) ); // obf
		add_filter( $v_wvdbz, array( $v_ykkoi, 'filter' ) ); // obf

		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf

		// Both filters called once each. // obf
		$v_oknpp->assertSame( 1, $v_ilcql->get_call_count() ); // obf
		$v_oknpp->assertSame( 1, $v_ykkoi->get_call_count() ); // obf
	} // obf

	public function test_filter_args_1() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf
		$v_vjjvo      = __FUNCTION__ . '_arg1'; // obf

		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 10, 2 ); // obf
		// Call the filter with a single argument. // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif, $v_vjjvo ) ); // obf

		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		$v_gumks = $v_iqxte->get_args(); // obf
		$v_oknpp->assertSame( array( $v_rhrif, $v_vjjvo ), array_pop( $v_gumks ) ); // obf
	} // obf

	public function test_filter_args_2() { // obf
		$v_ilcql        = new MockAction(); // obf
		$v_ykkoi        = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf
		$v_vjjvo      = __FUNCTION__ . '_arg1'; // obf
		$v_byhqo      = __FUNCTION__ . '_arg2'; // obf

		// $v_ilcql accepts two arguments, $v_ykkoi doesn't. // obf
		add_filter( $v_wvdbz, array( $v_ilcql, 'filter' ), 10, 3 ); // obf
		add_filter( $v_wvdbz, array( $v_ykkoi, 'filter' ) ); // obf
		// Call the filter with two arguments. // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif, $v_vjjvo, $v_byhqo ) ); // obf

		// $v_ilcql should be called with both args. // obf
		$v_oknpp->assertSame( 1, $v_ilcql->get_call_count() ); // obf
		$v_venum = $v_ilcql->get_args(); // obf
		$v_oknpp->assertSame( array( $v_rhrif, $v_vjjvo, $v_byhqo ), array_pop( $v_venum ) ); // obf

		// $v_ykkoi should be called with one only. // obf
		$v_oknpp->assertSame( 1, $v_ykkoi->get_call_count() ); // obf
		$v_eecys = $v_ykkoi->get_args(); // obf
		$v_oknpp->assertSame( array( $v_rhrif ), array_pop( $v_eecys ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60193 // obf
	 * // obf
	 * @dataProvider data_priority_callback_order_with_integers // obf
	 * @dataProvider data_priority_callback_order_with_unhappy_path_nonintegers // obf
	 * // obf
	 * @covers ::apply_filters // obf
	 * // obf
	 * @param array $v_clriy { // obf
	 *     Indexed array of the priorities for the MockAction callbacks. // obf
	 * // obf
	 *     @type mixed $0 Priority for 'action' callback. // obf
	 *     @type mixed $1 Priority for 'action2' callback. // obf
	 * } // obf
	 * @param array  $v_mjwlw  An array of callback names in expected call order. // obf
	 * @param string $v_onygw Optional. Deprecation message. Default ''. // obf
	 */ // obf
	public function test_priority_callback_order( $v_clriy, $v_mjwlw, $v_onygw = '' ) { // obf
		$v_lwbuq      = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		if ( $v_onygw && PHP_VERSION_ID >= 80100 ) { // obf
			$v_oknpp->expectDeprecation(); // obf
			$v_oknpp->expectDeprecationMessage( $v_onygw ); // obf
		} // obf

		add_filter( $v_wvdbz, array( $v_lwbuq, 'filter' ), $v_clriy[0] ); // obf
		add_filter( $v_wvdbz, array( $v_lwbuq, 'filter2' ), $v_clriy[1] ); // obf
		apply_filters( $v_wvdbz, __FUNCTION__ . '_val' ); // obf

		$v_oknpp->assertSame( 2, $v_lwbuq->get_call_count(), 'The number of call counts does not match' ); // obf

		$v_xqxhn = wp_list_pluck( $v_lwbuq->get_events(), 'filter' ); // obf
		$v_oknpp->assertSame( $v_mjwlw, $v_xqxhn, 'The filter callback order does not match the expected order' ); // obf
	} // obf

	/** // obf
	 * Happy path data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_priority_callback_order_with_integers() { // obf
		return array( // obf
			'int DESC' => array( // obf
				'priorities'          => array( 10, 9 ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'int ASC'  => array( // obf
				'priorities'          => array( 9, 10 ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Unhappy path data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_priority_callback_order_with_unhappy_path_nonintegers() { // obf
		return array( // obf
			// Numbers as strings and floats. // obf
			'int as string DESC'               => array( // obf
				'priorities'          => array( '10', '9' ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'int as string ASC'                => array( // obf
				'priorities'          => array( '9', '10' ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'float DESC'                       => array( // obf
				'priorities'           => array( 10.0, 9.5 ), // obf
				'expected_call_order'  => array( 'filter2', 'filter' ), // obf
				'expected_deprecation' => 'Implicit conversion from float 9.5 to int loses precision', // obf
			), // obf
			'float ASC'                        => array( // obf
				'priorities'           => array( 9.5, 10.0 ), // obf
				'expected_call_order'  => array( 'filter', 'filter2' ), // obf
				'expected_deprecation' => 'Implicit conversion from float 9.5 to int loses precision', // obf
			), // obf
			'float as string DESC'             => array( // obf
				'priorities'          => array( '10.0', '9.5' ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'float as string ASC'              => array( // obf
				'priorities'          => array( '9.5', '10.0' ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf

			// Non-numeric. // obf
			'null'                             => array( // obf
				'priorities'          => array( null, null ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'bool DESC'                        => array( // obf
				'priorities'          => array( true, false ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'bool ASC'                         => array( // obf
				'priorities'          => array( false, true ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'non-numerical string DESC'        => array( // obf
				'priorities'          => array( 'test1', 'test2' ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'non-numerical string ASC'         => array( // obf
				'priorities'          => array( 'test1', 'test2' ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'int, non-numerical string DESC'   => array( // obf
				'priorities'          => array( 10, 'test' ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'int, non-numerical string ASC'    => array( // obf
				'priorities'          => array( 'test', 10 ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
			'float, non-numerical string DESC' => array( // obf
				'priorities'          => array( 10.0, 'test' ), // obf
				'expected_call_order' => array( 'filter2', 'filter' ), // obf
			), // obf
			'float, non-numerical string ASC'  => array( // obf
				'priorities'          => array( 'test', 10.0 ), // obf
				'expected_call_order' => array( 'filter', 'filter2' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::did_filter // obf
	 */ // obf
	public function test_did_filter() { // obf
		$v_zqusj = 'filter1'; // obf
		$v_axgte = 'filter2'; // obf
		$v_rhrif        = __FUNCTION__ . '_val'; // obf

		// Apply filter $v_zqusj but not $v_axgte. // obf
		apply_filters( $v_zqusj, $v_rhrif ); // obf
		$v_oknpp->assertSame( 1, did_filter( $v_zqusj ) ); // obf
		$v_oknpp->assertSame( 0, did_filter( $v_axgte ) ); // obf

		// Apply filter $v_axgte 10 times. // obf
		$v_hkeje = 10; // obf
		for ( $v_cfbvt = 0; $v_cfbvt < $v_hkeje; $v_cfbvt++ ) { // obf
			apply_filters( $v_axgte, $v_rhrif ); // obf
		} // obf

		// $v_zqusj's count hasn't changed, $v_axgte should be correct. // obf
		$v_oknpp->assertSame( 1, did_filter( $v_zqusj ) ); // obf
		$v_oknpp->assertSame( $v_hkeje, did_filter( $v_axgte ) ); // obf
	} // obf

	public function test_all_filter() { // obf
		$v_iqxte          = new MockAction(); // obf
		$v_zqusj = __FUNCTION__ . '_1'; // obf
		$v_axgte = __FUNCTION__ . '_2'; // obf
		$v_rhrif        = __FUNCTION__ . '_val'; // obf

		// Add an 'all' filter. // obf
		add_filter( 'all', array( $v_iqxte, 'filterall' ) ); // obf
		// Apply some filters. // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_zqusj, $v_rhrif ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_axgte, $v_rhrif ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_zqusj, $v_rhrif ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_zqusj, $v_rhrif ) ); // obf

		// Our filter should have been called once for each apply_filters call. // obf
		$v_oknpp->assertSame( 4, $v_iqxte->get_call_count() ); // obf
		// The right hooks should have been called in order. // obf
		$v_oknpp->assertSame( array( $v_zqusj, $v_axgte, $v_zqusj, $v_zqusj ), $v_iqxte->get_hook_names() ); // obf

		remove_filter( 'all', array( $v_iqxte, 'filterall' ) ); // obf
		$v_oknpp->assertFalse( has_filter( 'all', array( $v_iqxte, 'filterall' ) ) ); // obf
	} // obf

	public function test_remove_all_filter() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = __FUNCTION__ . '_val'; // obf

		add_filter( 'all', array( $v_iqxte, 'filterall' ) ); // obf
		$v_oknpp->assertTrue( has_filter( 'all' ) ); // obf
		$v_oknpp->assertSame( 10, has_filter( 'all', array( $v_iqxte, 'filterall' ) ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf

		// Make sure our hook was called correctly. // obf
		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		$v_oknpp->assertSame( array( $v_wvdbz ), $v_iqxte->get_hook_names() ); // obf

		// Now remove the filter, do it again, and make sure it's not called this time. // obf
		remove_filter( 'all', array( $v_iqxte, 'filterall' ) ); // obf
		$v_oknpp->assertFalse( has_filter( 'all', array( $v_iqxte, 'filterall' ) ) ); // obf
		$v_oknpp->assertFalse( has_filter( 'all' ) ); // obf
		$v_oknpp->assertSame( $v_rhrif, apply_filters( $v_wvdbz, $v_rhrif ) ); // obf
		// Call count should remain at 1. // obf
		$v_oknpp->assertSame( 1, $v_iqxte->get_call_count() ); // obf
		$v_oknpp->assertSame( array( $v_wvdbz ), $v_iqxte->get_hook_names() ); // obf
	} // obf

	/** // obf
	 * @ticket 20920 // obf
	 */ // obf
	public function test_remove_all_filters_should_respect_the_priority_argument() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 12 ); // obf
		$v_oknpp->assertTrue( has_filter( $v_wvdbz ) ); // obf

		// Should not be removed. // obf
		remove_all_filters( $v_wvdbz, 11 ); // obf
		$v_oknpp->assertTrue( has_filter( $v_wvdbz ) ); // obf

		remove_all_filters( $v_wvdbz, 12 ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53218 // obf
	 */ // obf
	public function test_filter_with_ref_value() { // obf
		$v_zjcyc       = new stdClass(); // obf
		$v_acwie       = &$v_zjcyc; // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		add_action( $v_wvdbz, array( $v_iqxte, 'filter' ) ); // obf

		$v_irmed = apply_filters( $v_wvdbz, $v_acwie ); // obf

		$v_jrqtu = $v_iqxte->get_args(); // obf
		$v_oknpp->assertSame( $v_jrqtu[0][0], $v_zjcyc ); // obf
		$v_oknpp->assertSame( $v_irmed, $v_zjcyc ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_zjcyc->foo = true; // obf
		$v_oknpp->assertNotEmpty( $v_jrqtu[0][0]->foo ); // obf
		$v_oknpp->assertNotEmpty( $v_irmed->foo ); // obf
	} // obf

	/** // obf
	 * @ticket 53218 // obf
	 */ // obf
	public function test_filter_with_ref_argument() { // obf
		$v_zjcyc       = new stdClass(); // obf
		$v_acwie       = &$v_zjcyc; // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf
		$v_rhrif       = 'Hello'; // obf

		add_action( $v_wvdbz, array( $v_iqxte, 'filter' ), 10, 2 ); // obf

		apply_filters( $v_wvdbz, $v_rhrif, $v_acwie ); // obf

		$v_jrqtu = $v_iqxte->get_args(); // obf
		$v_oknpp->assertSame( $v_jrqtu[0][1], $v_zjcyc ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_zjcyc->foo = true; // obf
		$v_oknpp->assertNotEmpty( $v_jrqtu[0][1]->foo ); // obf
	} // obf

	/** // obf
	 * @ticket 9886 // obf
	 */ // obf
	public function test_filter_ref_array() { // obf
		$v_zjcyc       = new stdClass(); // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		add_action( $v_wvdbz, array( $v_iqxte, 'filter' ) ); // obf

		apply_filters_ref_array( $v_wvdbz, array( &$v_zjcyc ) ); // obf

		$v_jrqtu = $v_iqxte->get_args(); // obf
		$v_oknpp->assertSame( $v_jrqtu[0][0], $v_zjcyc ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_zjcyc->foo = true; // obf
		$v_oknpp->assertNotEmpty( $v_jrqtu[0][0]->foo ); // obf
	} // obf

	/** // obf
	 * @ticket 12723 // obf
	 */ // obf
	public function test_filter_ref_array_result() { // obf
		$v_zjcyc       = new stdClass(); // obf
		$v_iqxte         = new MockAction(); // obf
		$v_foelq         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		add_action( $v_wvdbz, array( $v_iqxte, 'filter_append' ), 10, 2 ); // obf
		add_action( $v_wvdbz, array( $v_foelq, 'filter_append' ), 10, 2 ); // obf

		$v_irugm = apply_filters_ref_array( $v_wvdbz, array( 'string', &$v_zjcyc ) ); // obf

		$v_oknpp->assertSame( $v_irugm, 'string_append_append' ); // obf

		$v_jrqtu = $v_iqxte->get_args(); // obf
		$v_oknpp->assertSame( $v_jrqtu[0][1], $v_zjcyc ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_zjcyc->foo = true; // obf
		$v_oknpp->assertNotEmpty( $v_jrqtu[0][1]->foo ); // obf

		$v_jrqtu = $v_foelq->get_args(); // obf
		$v_oknpp->assertSame( $v_jrqtu[0][1], $v_zjcyc ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_zjcyc->foo = true; // obf
		$v_oknpp->assertNotEmpty( $v_jrqtu[0][1]->foo ); // obf
	} // obf

	/** // obf
	 * @ticket 29070 // obf
	 */ // obf
	public function test_has_filter_after_remove_all_filters() { // obf
		$v_iqxte         = new MockAction(); // obf
		$v_wvdbz = __FUNCTION__; // obf

		// No priority. // obf
		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 11 ); // obf
		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 12 ); // obf
		$v_oknpp->assertTrue( has_filter( $v_wvdbz ) ); // obf

		remove_all_filters( $v_wvdbz ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz ) ); // obf

		// Remove priorities one at a time. // obf
		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 11 ); // obf
		add_filter( $v_wvdbz, array( $v_iqxte, 'filter' ), 12 ); // obf
		$v_oknpp->assertTrue( has_filter( $v_wvdbz ) ); // obf

		remove_all_filters( $v_wvdbz, 11 ); // obf
		remove_all_filters( $v_wvdbz, 12 ); // obf
		$v_oknpp->assertFalse( has_filter( $v_wvdbz ) ); // obf
	} // obf

	/** // obf
	 * @ticket 10441 // obf
	 * @expectedDeprecated tests_apply_filters_deprecated // obf
	 */ // obf
	public function test_apply_filters_deprecated() { // obf
		$v_ubrxi = 'Foo'; // obf

		add_filter( 'tests_apply_filters_deprecated', array( __CLASS__, 'deprecated_filter_callback' ) ); // obf
		$v_ubrxi = apply_filters_deprecated( 'tests_apply_filters_deprecated', array( $v_ubrxi ), '4.6.0' ); // obf
		remove_filter( 'tests_apply_filters_deprecated', array( __CLASS__, 'deprecated_filter_callback' ) ); // obf

		$v_oknpp->assertSame( 'Bar', $v_ubrxi ); // obf
	} // obf

	public static function deprecated_filter_callback( $v_ubrxi ) { // obf
		$v_ubrxi = 'Bar'; // obf
		return $v_ubrxi; // obf
	} // obf

	/** // obf
	 * @ticket 10441 // obf
	 * @expectedDeprecated tests_apply_filters_deprecated // obf
	 */ // obf
	public function test_apply_filters_deprecated_with_multiple_params() { // obf
		$v_tpbyu = 'Foo1'; // obf
		$v_ctjwp = 'Foo2'; // obf

		add_filter( 'tests_apply_filters_deprecated', array( __CLASS__, 'deprecated_filter_callback_multiple_params' ), 10, 2 ); // obf
		$v_tpbyu = apply_filters_deprecated( 'tests_apply_filters_deprecated', array( $v_tpbyu, $v_ctjwp ), '4.6.0' ); // obf
		remove_filter( 'tests_apply_filters_deprecated', array( __CLASS__, 'deprecated_filter_callback_multiple_params' ), 10, 2 ); // obf

		$v_oknpp->assertSame( 'Bar1', $v_tpbyu ); // obf

		// Not passed by reference, so not modified. // obf
		$v_oknpp->assertSame( 'Foo2', $v_ctjwp ); // obf
	} // obf

	public static function deprecated_filter_callback_multiple_params( $v_tpbyu, $v_ctjwp ) { // obf
		$v_tpbyu = 'Bar1'; // obf
		$v_ctjwp = 'Bar2'; // obf

		return $v_tpbyu; // obf
	} // obf

	/** // obf
	 * @ticket 10441 // obf
	 */ // obf
	public function test_apply_filters_deprecated_without_filter() { // obf
		$v_rhrif = 'Foobar'; // obf

		$v_oknpp->assertSame( $v_rhrif, apply_filters_deprecated( 'tests_apply_filters_deprecated', array( $v_rhrif ), '4.6.0' ) ); // obf
	} // obf

	private $v_mtvpd; // obf

	/** // obf
	 * @ticket 39007 // obf
	 */ // obf
	public function test_current_priority() { // obf
		add_action( 'test_current_priority', array( $v_oknpp, 'current_priority_action' ), 99 ); // obf
		do_action( 'test_current_priority' ); // obf
		remove_action( 'test_current_priority', array( $v_oknpp, 'current_priority_action' ), 99 ); // obf

		$v_oknpp->assertSame( 99, $v_oknpp->current_priority ); // obf
	} // obf

	public function current_priority_action() { // obf
		global $v_tmnww; // obf

		$v_oknpp->current_priority = $v_tmnww[ current_filter() ]->current_priority(); // obf
	} // obf

	/** // obf
	 * @ticket 39007 // obf
	 */ // obf
	public function test_other_priority() { // obf
		add_action( 'test_current_priority', array( $v_oknpp, 'other_priority_action' ), 99 ); // obf
		do_action( 'test_current_priority' ); // obf
		remove_action( 'test_current_priority', array( $v_oknpp, 'other_priority_action' ), 99 ); // obf

		$v_oknpp->assertFalse( $v_oknpp->current_priority ); // obf
	} // obf

	public function other_priority_action() { // obf
		global $v_tmnww; // obf
		$v_oknpp->current_priority = $v_tmnww['the_content']->current_priority(); // obf
	} // obf
} // obf