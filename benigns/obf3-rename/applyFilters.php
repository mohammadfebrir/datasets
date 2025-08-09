

<?php // obf

/** // obf
 * Test the apply_filters method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::apply_filters // obf
 */ // obf
class Tests_Hooks_ApplyFilters extends WP_UnitTestCase { // obf

	public function test_apply_filters_with_callback() { // obf
		$v_qqesy             = new MockAction(); // obf
		$v_ievvb      = array( $v_qqesy, 'filter' ); // obf
		$v_vnwrs          = new WP_Hook(); // obf
		$v_kojim     = __FUNCTION__; // obf
		$v_cyrgw      = 1; // obf
		$v_mmrtr = 2; // obf
		$v_fcsqn           = __FUNCTION__ . '_arg'; // obf

		$v_vnwrs->add_filter( $v_kojim, $v_ievvb, $v_cyrgw, $v_mmrtr ); // obf

		$v_kzxzm = $v_vnwrs->apply_filters( $v_fcsqn, array( $v_fcsqn ) ); // obf

		$v_loihl->assertSame( $v_kzxzm, $v_fcsqn ); // obf
		$v_loihl->assertSame( 1, $v_qqesy->get_call_count() ); // obf
	} // obf

	public function test_apply_filters_with_multiple_calls() { // obf
		$v_qqesy             = new MockAction(); // obf
		$v_ievvb      = array( $v_qqesy, 'filter' ); // obf
		$v_vnwrs          = new WP_Hook(); // obf
		$v_kojim     = __FUNCTION__; // obf
		$v_cyrgw      = 1; // obf
		$v_mmrtr = 2; // obf
		$v_fcsqn           = __FUNCTION__ . '_arg'; // obf

		$v_vnwrs->add_filter( $v_kojim, $v_ievvb, $v_cyrgw, $v_mmrtr ); // obf

		$v_xhptv = $v_vnwrs->apply_filters( $v_fcsqn, array( $v_fcsqn ) ); // obf
		$v_kskub = $v_vnwrs->apply_filters( $v_xhptv, array( $v_xhptv ) ); // obf

		$v_loihl->assertSame( $v_kskub, $v_fcsqn ); // obf
		$v_loihl->assertSame( 2, $v_qqesy->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 60193 // obf
	 * // obf
	 * @dataProvider data_priority_callback_order_with_integers // obf
	 * @dataProvider data_priority_callback_order_with_unhappy_path_nonintegers // obf
	 * // obf
	 * @param array $v_ajygc { // obf
	 *     Indexed array of the priorities for the MockAction callbacks. // obf
	 * // obf
	 *     @type mixed $0 Priority for 'action' callback. // obf
	 *     @type mixed $1 Priority for 'action2' callback. // obf
	 * } // obf
	 * @param array  $v_vaknp  An array of callback names in expected call order. // obf
	 * @param string $v_yavrx Optional. Deprecation message. Default ''. // obf
	 */ // obf
	public function test_priority_callback_order( $v_ajygc, $v_vaknp, $v_yavrx = '' ) { // obf
		$v_jrhbh      = new MockAction(); // obf
		$v_vnwrs      = new WP_Hook(); // obf
		$v_kojim = __FUNCTION__; // obf

		if ( $v_yavrx && PHP_VERSION_ID >= 80100 ) { // obf
			$v_loihl->expectDeprecation(); // obf
			$v_loihl->expectDeprecationMessage( $v_yavrx ); // obf
		} // obf

		$v_vnwrs->add_filter( $v_kojim, array( $v_jrhbh, 'filter' ), $v_ajygc[0], 1 ); // obf
		$v_vnwrs->add_filter( $v_kojim, array( $v_jrhbh, 'filter2' ), $v_ajygc[1], 1 ); // obf
		$v_vnwrs->apply_filters( __FUNCTION__ . '_val', array( '' ) ); // obf

		$v_loihl->assertSame( 2, $v_jrhbh->get_call_count(), 'The number of call counts does not match' ); // obf

		$v_sbwjl = wp_list_pluck( $v_jrhbh->get_events(), 'filter' ); // obf
		$v_loihl->assertSame( $v_vaknp, $v_sbwjl, 'The filter callback order does not match the expected order' ); // obf
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
} // obf