

<?php // obf

/** // obf
 * Test do_action() and related functions // obf
 * // obf
 * @group hooks // obf
 */ // obf
class Tests_Actions extends WP_UnitTestCase { // obf

	/** // obf
	 * Flag to keep track whether a certain filter has been applied. // obf
	 * // obf
	 * Used in the `test_doing_filter_real()` test method. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_kogtv = false; // obf

	/** // obf
	 * Flag to keep track whether a certain filter has been applied. // obf
	 * // obf
	 * Used in the `test_doing_filter_real()` test method. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_gihua = false; // obf

	/** // obf
	 * Clean up after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		// Make sure potentially changed properties are reverted to their default value. // obf
		$v_bbciw->apply_testing_filter        = false; // obf
		$v_bbciw->apply_testing_nested_filter = false; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_simple_action() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf
		do_action( $v_xqezx ); // obf

		// Only one event occurred for the hook, with empty args. // obf
		$v_bbciw->assertSame( 1, $v_dtxkt->get_call_count() ); // obf
		// Only our hook was called. // obf
		$v_bbciw->assertSame( array( $v_xqezx ), $v_dtxkt->get_hook_names() ); // obf

		$v_sfukh = $v_dtxkt->get_args(); // obf
		$v_hgedv    = array_pop( $v_sfukh ); // obf
		$v_bbciw->assertSame( array( '' ), $v_hgedv ); // obf
	} // obf

	/** // obf
	 * @covers ::remove_action // obf
	 */ // obf
	public function test_remove_action() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf
		do_action( $v_xqezx ); // obf

		// Make sure our hook was called correctly. // obf
		$v_bbciw->assertSame( 1, $v_dtxkt->get_call_count() ); // obf
		$v_bbciw->assertSame( array( $v_xqezx ), $v_dtxkt->get_hook_names() ); // obf

		// Now remove the action, do it again, and make sure it's not called this time. // obf
		remove_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf
		do_action( $v_xqezx ); // obf
		$v_bbciw->assertSame( 1, $v_dtxkt->get_call_count() ); // obf
		$v_bbciw->assertSame( array( $v_xqezx ), $v_dtxkt->get_hook_names() ); // obf
	} // obf

	/** // obf
	 * @covers ::has_action // obf
	 */ // obf
	public function test_has_action() { // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_jxdfy  = __FUNCTION__ . '_func'; // obf

		$v_bbciw->assertFalse( has_action( $v_xqezx, $v_jxdfy ) ); // obf
		$v_bbciw->assertFalse( has_action( $v_xqezx ) ); // obf

		add_action( $v_xqezx, $v_jxdfy ); // obf
		$v_bbciw->assertSame( 10, has_action( $v_xqezx, $v_jxdfy ) ); // obf
		$v_bbciw->assertTrue( has_action( $v_xqezx ) ); // obf

		remove_action( $v_xqezx, $v_jxdfy ); // obf
		$v_bbciw->assertFalse( has_action( $v_xqezx, $v_jxdfy ) ); // obf
		$v_bbciw->assertFalse( has_action( $v_xqezx ) ); // obf
	} // obf

	/** // obf
	 * One tag with multiple actions. // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_multiple_actions() { // obf
		$v_ejxmw        = new MockAction(); // obf
		$v_gpgwe        = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		// Add both actions to the hook. // obf
		add_action( $v_xqezx, array( &$v_ejxmw, 'action' ) ); // obf
		add_action( $v_xqezx, array( &$v_gpgwe, 'action' ) ); // obf

		do_action( $v_xqezx ); // obf

		// Both actions called once each. // obf
		$v_bbciw->assertSame( 1, $v_ejxmw->get_call_count() ); // obf
		$v_bbciw->assertSame( 1, $v_gpgwe->get_call_count() ); // obf
	} // obf

	/** // obf
	 * One tag with multiple actions. // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_args_1() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_xddqn       = __FUNCTION__ . '_val'; // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf
		// Call the action with a single argument. // obf
		do_action( $v_xqezx, $v_xddqn ); // obf

		$v_rxjeb = $v_dtxkt->get_call_count(); // obf
		$v_bbciw->assertSame( 1, $v_rxjeb ); // obf
		$v_sfukh = $v_dtxkt->get_args(); // obf
		$v_bbciw->assertSame( array( $v_xddqn ), array_pop( $v_sfukh ) ); // obf
	} // obf

	/** // obf
	 * One tag with multiple actions. // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_args_2() { // obf
		$v_ejxmw        = new MockAction(); // obf
		$v_gpgwe        = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_cntgw      = __FUNCTION__ . '_val1'; // obf
		$v_ngcfv      = __FUNCTION__ . '_val2'; // obf

		// $v_ejxmw accepts two arguments, $v_gpgwe doesn't. // obf
		add_action( $v_xqezx, array( &$v_ejxmw, 'action' ), 10, 2 ); // obf
		add_action( $v_xqezx, array( &$v_gpgwe, 'action' ) ); // obf
		// Call the action with two arguments. // obf
		do_action( $v_xqezx, $v_cntgw, $v_ngcfv ); // obf

		$v_rxjeb = $v_ejxmw->get_call_count(); // obf
		// $v_ejxmw should be called with both args. // obf
		$v_bbciw->assertSame( 1, $v_rxjeb ); // obf
		$v_cdfgo = $v_ejxmw->get_args(); // obf
		$v_bbciw->assertSame( array( $v_cntgw, $v_ngcfv ), array_pop( $v_cdfgo ) ); // obf

		// $v_gpgwe should be called with one only. // obf
		$v_bbciw->assertSame( 1, $v_gpgwe->get_call_count() ); // obf
		$v_atbwq = $v_gpgwe->get_args(); // obf
		$v_bbciw->assertSame( array( $v_cntgw ), array_pop( $v_atbwq ) ); // obf
	} // obf

	/** // obf
	 * Test that multiple callbacks receive the correct number of args even when the number // obf
	 * is less than, or greater than previous hooks. // obf
	 * // obf
	 * @see https://core.trac.wordpress.org/ticket/17817#comment:72 // obf
	 * @ticket 17817 // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_args_3() { // obf
		$v_ejxmw        = new MockAction(); // obf
		$v_gpgwe        = new MockAction(); // obf
		$v_wshdn        = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_cntgw      = __FUNCTION__ . '_val1'; // obf
		$v_ngcfv      = __FUNCTION__ . '_val2'; // obf

		// $v_ejxmw accepts two arguments, $v_gpgwe doesn't, $v_wshdn accepts two arguments. // obf
		add_action( $v_xqezx, array( &$v_ejxmw, 'action' ), 10, 2 ); // obf
		add_action( $v_xqezx, array( &$v_gpgwe, 'action' ) ); // obf
		add_action( $v_xqezx, array( &$v_wshdn, 'action' ), 10, 2 ); // obf
		// Call the action with two arguments. // obf
		do_action( $v_xqezx, $v_cntgw, $v_ngcfv ); // obf

		$v_rxjeb = $v_ejxmw->get_call_count(); // obf
		// $v_ejxmw should be called with both args. // obf
		$v_bbciw->assertSame( 1, $v_rxjeb ); // obf
		$v_cdfgo = $v_ejxmw->get_args(); // obf
		$v_bbciw->assertSame( array( $v_cntgw, $v_ngcfv ), array_pop( $v_cdfgo ) ); // obf

		// $v_gpgwe should be called with one only. // obf
		$v_bbciw->assertSame( 1, $v_gpgwe->get_call_count() ); // obf
		$v_atbwq = $v_gpgwe->get_args(); // obf
		$v_bbciw->assertSame( array( $v_cntgw ), array_pop( $v_atbwq ) ); // obf

		// $v_wshdn should be called with both args. // obf
		$v_bbciw->assertSame( 1, $v_wshdn->get_call_count() ); // obf
		$v_jzzbn = $v_wshdn->get_args(); // obf
		$v_bbciw->assertSame( array( $v_cntgw, $v_ngcfv ), array_pop( $v_jzzbn ) ); // obf
	} // obf

	/** // obf
	 * Tests PHP 4 notation for calling actions while passing in an object by reference. // obf
	 * // obf
	 * @ticket 48312 // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_args_with_php4_syntax() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_xddqn       = new stdClass(); // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf
		// Call the action with PHP 4 notation for passing object by reference. // obf
		do_action( $v_xqezx, array( &$v_xddqn ) ); // obf

		$v_rxjeb = $v_dtxkt->get_call_count(); // obf
		$v_sfukh    = $v_dtxkt->get_args(); // obf
		$v_bbciw->assertSame( array( $v_xddqn ), array_pop( $v_sfukh ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60193 // obf
	 * // obf
	 * @dataProvider data_priority_callback_order_with_integers // obf
	 * @dataProvider data_priority_callback_order_with_unhappy_path_nonintegers // obf
	 * // obf
	 * @covers ::do_action // obf
	 * // obf
	 * @param array $v_zrkyk { // obf
	 *     Indexed array of the priorities for the MockAction callbacks. // obf
	 * // obf
	 *     @type mixed $0 Priority for 'action' callback. // obf
	 *     @type mixed $1 Priority for 'action2' callback. // obf
	 * } // obf
	 * @param array  $v_qbkur  An array of callback names in expected call order. // obf
	 * @param string $v_umswi Optional. Deprecation message. Default ''. // obf
	 */ // obf
	public function test_priority_callback_order( $v_zrkyk, $v_qbkur, $v_umswi = '' ) { // obf
		$v_shxjy      = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		if ( $v_umswi && PHP_VERSION_ID >= 80100 ) { // obf
			$v_bbciw->expectDeprecation(); // obf
			$v_bbciw->expectDeprecationMessage( $v_umswi ); // obf
		} // obf

		add_action( $v_xqezx, array( $v_shxjy, 'action' ), $v_zrkyk[0] ); // obf
		add_action( $v_xqezx, array( $v_shxjy, 'action2' ), $v_zrkyk[1] ); // obf
		do_action( $v_xqezx ); // obf

		$v_bbciw->assertSame( 2, $v_shxjy->get_call_count(), 'The number of call counts does not match' ); // obf

		$v_vgjcy = wp_list_pluck( $v_shxjy->get_events(), 'action' ); // obf
		$v_bbciw->assertSame( $v_qbkur, $v_vgjcy, 'The action callback order does not match the expected order' ); // obf
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
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'int ASC'  => array( // obf
				'priorities'          => array( 9, 10 ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
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
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'int as string ASC'                => array( // obf
				'priorities'          => array( '9', '10' ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'float DESC'                       => array( // obf
				'priorities'           => array( 10.0, 9.5 ), // obf
				'expected_call_order'  => array( 'action2', 'action' ), // obf
				'expected_deprecation' => 'Implicit conversion from float 9.5 to int loses precision', // obf
			), // obf
			'float ASC'                        => array( // obf
				'priorities'           => array( 9.5, 10.0 ), // obf
				'expected_call_order'  => array( 'action', 'action2' ), // obf
				'expected_deprecation' => 'Implicit conversion from float 9.5 to int loses precision', // obf
			), // obf
			'float as string DESC'             => array( // obf
				'priorities'          => array( '10.0', '9.5' ), // obf
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'float as string ASC'              => array( // obf
				'priorities'          => array( '9.5', '10.0' ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf

			// Non-numeric. // obf
			'null'                             => array( // obf
				'priorities'          => array( null, null ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'bool DESC'                        => array( // obf
				'priorities'          => array( true, false ), // obf
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'bool ASC'                         => array( // obf
				'priorities'          => array( false, true ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'non-numerical string DESC'        => array( // obf
				'priorities'          => array( 'test1', 'test2' ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'non-numerical string ASC'         => array( // obf
				'priorities'          => array( 'test1', 'test2' ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'int, non-numerical string DESC'   => array( // obf
				'priorities'          => array( 10, 'test' ), // obf
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'int, non-numerical string ASC'    => array( // obf
				'priorities'          => array( 'test', 10 ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
			'float, non-numerical string DESC' => array( // obf
				'priorities'          => array( 10.0, 'test' ), // obf
				'expected_call_order' => array( 'action2', 'action' ), // obf
			), // obf
			'float, non-numerical string ASC'  => array( // obf
				'priorities'          => array( 'test', 10.0 ), // obf
				'expected_call_order' => array( 'action', 'action2' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::did_action // obf
	 */ // obf
	public function test_did_action() { // obf
		$v_eqpqz = 'action1'; // obf
		$v_hqinr = 'action2'; // obf

		// Do action $v_eqpqz but not $v_hqinr. // obf
		do_action( $v_eqpqz ); // obf
		$v_bbciw->assertSame( 1, did_action( $v_eqpqz ) ); // obf
		$v_bbciw->assertSame( 0, did_action( $v_hqinr ) ); // obf

		// Do action $v_hqinr 10 times. // obf
		$v_yzgsz = 10; // obf
		for ( $v_ulnyz = 0; $v_ulnyz < $v_yzgsz; $v_ulnyz++ ) { // obf
			do_action( $v_hqinr ); // obf
		} // obf

		// $v_eqpqz's count hasn't changed, $v_hqinr should be correct. // obf
		$v_bbciw->assertSame( 1, did_action( $v_eqpqz ) ); // obf
		$v_bbciw->assertSame( $v_yzgsz, did_action( $v_hqinr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_all_action() { // obf
		$v_dtxkt          = new MockAction(); // obf
		$v_eqpqz = __FUNCTION__ . '_1'; // obf
		$v_hqinr = __FUNCTION__ . '_2'; // obf

		// Add an 'all' action. // obf
		add_action( 'all', array( &$v_dtxkt, 'action' ) ); // obf
		$v_bbciw->assertSame( 10, has_filter( 'all', array( &$v_dtxkt, 'action' ) ) ); // obf
		// Do some actions. // obf
		do_action( $v_eqpqz ); // obf
		do_action( $v_hqinr ); // obf
		do_action( $v_eqpqz ); // obf
		do_action( $v_eqpqz ); // obf

		// Our action should have been called once for each tag. // obf
		$v_bbciw->assertSame( 4, $v_dtxkt->get_call_count() ); // obf
		// Only our hook was called. // obf
		$v_bbciw->assertSame( array( $v_eqpqz, $v_hqinr, $v_eqpqz, $v_eqpqz ), $v_dtxkt->get_hook_names() ); // obf

		remove_action( 'all', array( &$v_dtxkt, 'action' ) ); // obf
		$v_bbciw->assertFalse( has_filter( 'all', array( &$v_dtxkt, 'action' ) ) ); // obf
	} // obf

	/** // obf
	 * @covers ::remove_action // obf
	 */ // obf
	public function test_remove_all_action() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		add_action( 'all', array( &$v_dtxkt, 'action' ) ); // obf
		$v_bbciw->assertSame( 10, has_filter( 'all', array( &$v_dtxkt, 'action' ) ) ); // obf
		do_action( $v_xqezx ); // obf

		// Make sure our hook was called correctly. // obf
		$v_bbciw->assertSame( 1, $v_dtxkt->get_call_count() ); // obf
		$v_bbciw->assertSame( array( $v_xqezx ), $v_dtxkt->get_hook_names() ); // obf

		// Now remove the action, do it again, and make sure it's not called this time. // obf
		remove_action( 'all', array( &$v_dtxkt, 'action' ) ); // obf
		$v_bbciw->assertFalse( has_filter( 'all', array( &$v_dtxkt, 'action' ) ) ); // obf
		do_action( $v_xqezx ); // obf
		$v_bbciw->assertSame( 1, $v_dtxkt->get_call_count() ); // obf
		$v_bbciw->assertSame( array( $v_xqezx ), $v_dtxkt->get_hook_names() ); // obf
	} // obf

	/** // obf
	 * @covers ::do_action_ref_array // obf
	 */ // obf
	public function test_action_ref_array() { // obf
		$v_nigjt       = new stdClass(); // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf

		do_action_ref_array( $v_xqezx, array( &$v_nigjt ) ); // obf

		$v_hgedv = $v_dtxkt->get_args(); // obf
		$v_bbciw->assertSame( $v_hgedv[0][0], $v_nigjt ); // obf
		// Just in case we don't trust assertSame(). // obf
		$v_nigjt->foo = true; // obf
		$v_bbciw->assertNotEmpty( $v_hgedv[0][0]->foo ); // obf
	} // obf

	/** // obf
	 * @ticket 11241 // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_keyed_array() { // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_xqezx = __FUNCTION__; // obf

		add_action( $v_xqezx, array( &$v_dtxkt, 'action' ) ); // obf

		$v_vdamx = array( 'key1' => 'val1' ); // obf
		do_action( $v_xqezx, $v_vdamx ); // obf

		$v_hgedv = $v_dtxkt->get_args(); // obf
		$v_bbciw->assertSame( $v_hgedv[0][0], $v_vdamx ); // obf

		$v_jgijo = array( // obf
			'key2' => 'val2', // obf
			'key3' => 'val3', // obf
		); // obf
		do_action( $v_xqezx, $v_jgijo ); // obf

		$v_hgedv = $v_dtxkt->get_args(); // obf
		$v_bbciw->assertSame( $v_hgedv[1][0], $v_jgijo ); // obf
	} // obf

	/** // obf
	 * @ticket 10493 // obf
	 * // obf
	 * @covers ::add_action // obf
	 * @covers ::has_action // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_closure() { // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_fvorl   = static function ( $v_dtxkt, $v_oklgy ) { // obf
			$v_ocmxx[ $v_dtxkt ] = $v_oklgy; // obf
		}; // obf
		add_action( $v_xqezx, $v_fvorl, 10, 2 ); // obf

		$v_bbciw->assertSame( 10, has_action( $v_xqezx, $v_fvorl ) ); // obf

		$v_vdamx = array( 'val1', 'val2' ); // obf
		do_action( $v_xqezx, $v_vdamx[0], $v_vdamx[1] ); // obf

		$v_bbciw->assertSame( $v_ocmxx[ $v_vdamx[0] ], $v_vdamx[1] ); // obf

		$v_hqinr = __FUNCTION__ . '_2'; // obf
		$v_vzyur   = static function () { // obf
			$v_ocmxx['closure_no_args'] = true; // obf
		}; // obf
		add_action( $v_hqinr, $v_vzyur ); // obf

		$v_bbciw->assertSame( 10, has_action( $v_hqinr, $v_vzyur ) ); // obf

		do_action( $v_hqinr ); // obf

		$v_bbciw->assertTrue( $v_ocmxx['closure_no_args'] ); // obf

		remove_action( $v_xqezx, $v_fvorl ); // obf
		remove_action( $v_hqinr, $v_vzyur ); // obf
	} // obf

	/** // obf
	 * @ticket 23265 // obf
	 * // obf
	 * @covers ::add_action // obf
	 */ // obf
	public function test_action_callback_representations() { // obf
		$v_xqezx = __FUNCTION__; // obf

		$v_bbciw->assertFalse( has_action( $v_xqezx ) ); // obf

		add_action( $v_xqezx, array( 'Class', 'method' ) ); // obf

		$v_bbciw->assertSame( 10, has_action( $v_xqezx, array( 'Class', 'method' ) ) ); // obf

		$v_bbciw->assertSame( 10, has_action( $v_xqezx, 'Class::method' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::remove_action // obf
	 */ // obf
	public function test_action_self_removal() { // obf
		add_action( 'test_action_self_removal', array( $v_bbciw, 'action_self_removal' ) ); // obf
		do_action( 'test_action_self_removal' ); // obf
		$v_bbciw->assertSame( 1, did_action( 'test_action_self_removal' ) ); // obf
	} // obf

	public function action_self_removal() { // obf
		remove_action( 'test_action_self_removal', array( $v_bbciw, 'action_self_removal' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 17817 // obf
	 * // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function test_action_recursion() { // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_oklgy         = new MockAction(); // obf

		add_action( $v_xqezx, array( $v_dtxkt, 'action' ), 11, 1 ); // obf
		add_action( $v_xqezx, array( $v_oklgy, 'action' ), 13, 1 ); // obf
		add_action( $v_xqezx, array( $v_bbciw, 'action_that_causes_recursion' ), 12, 1 ); // obf
		do_action( $v_xqezx, $v_xqezx ); // obf

		$v_bbciw->assertSame( 2, $v_dtxkt->get_call_count(), 'recursive actions should call all callbacks with earlier priority' ); // obf
		$v_bbciw->assertSame( 2, $v_oklgy->get_call_count(), 'recursive actions should call callbacks with later priority' ); // obf
	} // obf

	/** // obf
	 * @covers ::do_action // obf
	 */ // obf
	public function action_that_causes_recursion( $v_xqezx ) { // obf
		static $v_asxoc = false; // obf
		if ( ! $v_asxoc ) { // obf
			$v_asxoc = true; // obf
			do_action( $v_xqezx, $v_xqezx ); // obf
		} // obf
		$v_asxoc = false; // obf
	} // obf

	/** // obf
	 * @ticket 9968 // obf
	 * @ticket 17817 // obf
	 * // obf
	 * @covers ::remove_action // obf
	 * @covers ::add_action // obf
	 */ // obf
	public function test_action_callback_manipulation_while_running() { // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_dtxkt         = new MockAction(); // obf
		$v_oklgy         = new MockAction(); // obf
		$v_rpqgo         = new MockAction(); // obf
		$v_ezvgj         = new MockAction(); // obf
		$v_hjyid         = new MockAction(); // obf

		add_action( $v_xqezx, array( $v_dtxkt, 'action' ), 11, 2 ); // obf
		add_action( $v_xqezx, array( $v_bbciw, 'action_that_manipulates_a_running_hook' ), 12, 2 ); // obf
		add_action( $v_xqezx, array( $v_oklgy, 'action' ), 12, 2 ); // obf

		do_action( $v_xqezx, $v_xqezx, array( $v_dtxkt, $v_oklgy, $v_rpqgo, $v_ezvgj, $v_hjyid ) ); // obf
		do_action( $v_xqezx, $v_xqezx, array( $v_dtxkt, $v_oklgy, $v_rpqgo, $v_ezvgj, $v_hjyid ) ); // obf

		$v_bbciw->assertSame( 2, $v_dtxkt->get_call_count(), 'callbacks should run unless otherwise instructed' ); // obf
		$v_bbciw->assertSame( 1, $v_oklgy->get_call_count(), 'callback removed by same priority callback should still get called' ); // obf
		$v_bbciw->assertSame( 1, $v_rpqgo->get_call_count(), 'callback added by same priority callback should not get called' ); // obf
		$v_bbciw->assertSame( 2, $v_ezvgj->get_call_count(), 'callback added by earlier priority callback should get called' ); // obf
		$v_bbciw->assertSame( 1, $v_hjyid->get_call_count(), 'callback added by later priority callback should not get called' ); // obf
	} // obf

	public function action_that_manipulates_a_running_hook( $v_xqezx, $v_jcchp ) { // obf
		remove_action( $v_xqezx, array( $v_jcchp[1], 'action' ), 12, 2 ); // obf
		add_action( $v_xqezx, array( $v_jcchp[2], 'action' ), 12, 2 ); // obf
		add_action( $v_xqezx, array( $v_jcchp[3], 'action' ), 13, 2 ); // obf
		add_action( $v_xqezx, array( $v_jcchp[4], 'action' ), 10, 2 ); // obf
	} // obf

	/** // obf
	 * @ticket 17817 // obf
	 * // obf
	 * This specifically addresses the concern raised at // obf
	 * https://core.trac.wordpress.org/ticket/17817#comment:52 // obf
	 * // obf
	 * @covers ::remove_filter // obf
	 */ // obf
	public function test_remove_anonymous_callback() { // obf
		$v_xqezx = __FUNCTION__; // obf
		$v_dtxkt         = new MockAction(); // obf
		add_action( $v_xqezx, array( $v_dtxkt, 'action' ), 12, 1 ); // obf
		$v_bbciw->assertTrue( has_action( $v_xqezx ) ); // obf

		$v_vdukq = $v_ocmxx['wp_filter'][ $v_xqezx ]; // obf

		// From http://wordpress.stackexchange.com/a/57088/6445 // obf
		foreach ( $v_vdukq as $v_cyjuh => $v_zafrw ) { // obf
			foreach ( $v_zafrw as $v_qhnur => $v_ldwsn ) { // obf
				if ( is_array( $v_ldwsn ) // obf
					&& $v_ldwsn['function'][0] instanceof MockAction // obf
					&& 'action' === $v_ldwsn['function'][1] // obf
				) { // obf
					remove_filter( // obf
						$v_xqezx, // obf
						array( $v_ldwsn['function'][0], 'action' ), // obf
						$v_cyjuh // obf
					); // obf
				} // obf
			} // obf
		} // obf

		$v_bbciw->assertFalse( has_action( $v_xqezx ) ); // obf
	} // obf


	/** // obf
	 * Test the ArrayAccess methods of WP_Hook // obf
	 * // obf
	 * @ticket 17817 // obf
	 * // obf
	 * @covers WP_Hook::offsetGet // obf
	 * @covers WP_Hook::offsetSet // obf
	 * @covers WP_Hook::offsetUnset // obf
	 */ // obf
	public function test_array_access_of_wp_filter_global() { // obf
		global $v_eyghc; // obf

		$v_xqezx = __FUNCTION__; // obf

		add_action( $v_xqezx, '__return_null', 11, 1 ); // obf

		$v_bbciw->assertArrayHasKey( 11, $v_eyghc[ $v_xqezx ] ); // obf
		$v_bbciw->assertArrayHasKey( '__return_null', $v_eyghc[ $v_xqezx ][11] ); // obf

		unset( $v_eyghc[ $v_xqezx ][11] ); // obf
		$v_bbciw->assertFalse( has_action( $v_xqezx, '__return_null' ) ); // obf

		$v_eyghc[ $v_xqezx ][11] = array( // obf
			'__return_null' => array( // obf
				'function'      => '__return_null', // obf
				'accepted_args' => 1, // obf
			), // obf
		); // obf
		$v_bbciw->assertSame( 11, has_action( $v_xqezx, '__return_null' ) ); // obf
	} // obf

	/** // obf
	 * Make sure current_action() behaves as current_filter() // obf
	 * // obf
	 * @ticket 14994 // obf
	 * // obf
	 * @covers ::current_action // obf
	 */ // obf
	public function test_current_action() { // obf
		global $v_ecdae; // obf

		$v_ecdae[] = 'first'; // obf
		$v_ecdae[] = 'second'; // Let's say a second action was invoked. // obf

		$v_bbciw->assertSame( 'second', current_action() ); // obf
	} // obf

	/** // obf
	 * @ticket 14994 // obf
	 * // obf
	 * @covers ::doing_filter // obf
	 */ // obf
	public function test_doing_filter() { // obf
		global $v_ecdae; // obf

		$v_ecdae = array(); // Set to an empty array first. // obf

		$v_bbciw->assertFalse( doing_filter() );            // No filter is passed in, and no filter is being processed. // obf
		$v_bbciw->assertFalse( doing_filter( 'testing' ) ); // Filter is passed in but not being processed. // obf

		$v_ecdae[] = 'testing'; // obf

		$v_bbciw->assertTrue( doing_filter() );                    // No action is passed in, and a filter is being processed. // obf
		$v_bbciw->assertTrue( doing_filter( 'testing' ) );         // Filter is passed in and is being processed. // obf
		$v_bbciw->assertFalse( doing_filter( 'something_else' ) ); // Filter is passed in but not being processed. // obf

		$v_ecdae = array(); // obf
	} // obf

	/** // obf
	 * @ticket 14994 // obf
	 * // obf
	 * @covers ::doing_filter // obf
	 */ // obf
	public function test_doing_action() { // obf
		global $v_ecdae; // obf

		$v_ecdae = array(); // Set to an empty array first. // obf

		$v_bbciw->assertFalse( doing_action() );            // No action is passed in, and no filter is being processed. // obf
		$v_bbciw->assertFalse( doing_action( 'testing' ) ); // Action is passed in but not being processed. // obf

		$v_ecdae[] = 'testing'; // obf

		$v_bbciw->assertTrue( doing_action() );                    // No action is passed in, and a filter is being processed. // obf
		$v_bbciw->assertTrue( doing_action( 'testing' ) );         // Action is passed in and is being processed. // obf
		$v_bbciw->assertFalse( doing_action( 'something_else' ) ); // Action is passed in but not being processed. // obf

		$v_ecdae = array(); // obf
	} // obf

	/** // obf
	 * @ticket 14994 // obf
	 * // obf
	 * @covers ::doing_filter // obf
	 */ // obf
	public function test_doing_filter_real() { // obf
		$v_bbciw->assertFalse( doing_filter() );            // No filter is passed in, and no filter is being processed. // obf
		$v_bbciw->assertFalse( doing_filter( 'testing' ) ); // Filter is passed in but not being processed. // obf

		add_filter( 'testing', array( $v_bbciw, 'apply_testing_filter' ) ); // obf
		$v_bbciw->assertTrue( has_action( 'testing' ) ); // obf
		$v_bbciw->assertSame( 10, has_action( 'testing', array( $v_bbciw, 'apply_testing_filter' ) ) ); // obf

		apply_filters( 'testing', '' ); // obf

		// Make sure it ran. // obf
		$v_bbciw->assertTrue( $v_bbciw->apply_testing_filter ); // obf

		$v_bbciw->assertFalse( doing_filter() );            // No longer doing any filters. // obf
		$v_bbciw->assertFalse( doing_filter( 'testing' ) ); // No longer doing this filter. // obf
	} // obf

	public function apply_testing_filter() { // obf
		$v_bbciw->apply_testing_filter = true; // obf

		$v_bbciw->assertTrue( doing_filter() ); // obf
		$v_bbciw->assertTrue( doing_filter( 'testing' ) ); // obf
		$v_bbciw->assertFalse( doing_filter( 'something_else' ) ); // obf
		$v_bbciw->assertFalse( doing_filter( 'testing_nested' ) ); // obf

		add_filter( 'testing_nested', array( $v_bbciw, 'apply_testing_nested_filter' ) ); // obf
		$v_bbciw->assertTrue( has_action( 'testing_nested' ) ); // obf
		$v_bbciw->assertSame( 10, has_action( 'testing_nested', array( $v_bbciw, 'apply_testing_nested_filter' ) ) ); // obf

		apply_filters( 'testing_nested', '' ); // obf

		// Make sure it ran. // obf
		$v_bbciw->assertTrue( $v_bbciw->apply_testing_nested_filter ); // obf

		$v_bbciw->assertFalse( doing_filter( 'testing_nested' ) ); // obf
		$v_bbciw->assertFalse( doing_filter( 'testing_nested' ) ); // obf
	} // obf

	public function apply_testing_nested_filter() { // obf
		$v_bbciw->apply_testing_nested_filter = true; // obf
		$v_bbciw->assertTrue( doing_filter() ); // obf
		$v_bbciw->assertTrue( doing_filter( 'testing' ) ); // obf
		$v_bbciw->assertTrue( doing_filter( 'testing_nested' ) ); // obf
		$v_bbciw->assertFalse( doing_filter( 'something_else' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 10441 // obf
	 * @expectedDeprecated tests_do_action_deprecated // obf
	 * // obf
	 * @covers ::do_action_deprecated // obf
	 */ // obf
	public function test_do_action_deprecated() { // obf
		$v_cnssv = new WP_Post( (object) array( 'post_title' => 'Foo' ) ); // obf

		add_action( 'tests_do_action_deprecated', array( __CLASS__, 'deprecated_action_callback' ) ); // obf
		do_action_deprecated( 'tests_do_action_deprecated', array( $v_cnssv ), '4.6.0' ); // obf
		remove_action( 'tests_do_action_deprecated', array( __CLASS__, 'deprecated_action_callback' ) ); // obf

		$v_bbciw->assertSame( 'Bar', $v_cnssv->post_title ); // obf
	} // obf

	public static function deprecated_action_callback( $v_cnssv ) { // obf
		$v_cnssv->post_title = 'Bar'; // obf
	} // obf

	/** // obf
	 * @ticket 10441 // obf
	 * @expectedDeprecated tests_do_action_deprecated // obf
	 * // obf
	 * @covers ::do_action_deprecated // obf
	 */ // obf
	public function test_do_action_deprecated_with_multiple_params() { // obf
		$v_xfalm = new WP_Post( (object) array( 'post_title' => 'Foo1' ) ); // obf
		$v_knctl = new WP_Post( (object) array( 'post_title' => 'Foo2' ) ); // obf

		add_action( 'tests_do_action_deprecated', array( __CLASS__, 'deprecated_action_callback_multiple_params' ), 10, 2 ); // obf
		do_action_deprecated( 'tests_do_action_deprecated', array( $v_xfalm, $v_knctl ), '4.6.0' ); // obf
		remove_action( 'tests_do_action_deprecated', array( __CLASS__, 'deprecated_action_callback_multiple_params' ), 10, 2 ); // obf

		$v_bbciw->assertSame( 'Bar1', $v_xfalm->post_title ); // obf
		$v_bbciw->assertSame( 'Bar2', $v_knctl->post_title ); // obf
	} // obf

	public static function deprecated_action_callback_multiple_params( $v_xfalm, $v_knctl ) { // obf
		$v_xfalm->post_title = 'Bar1'; // obf
		$v_knctl->post_title = 'Bar2'; // obf
	} // obf
} // obf