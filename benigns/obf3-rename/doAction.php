

<?php // obf

/** // obf
 * Test the do_action method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::do_action // obf
 */ // obf
class Tests_Hooks_DoAction extends WP_UnitTestCase { // obf
	private $v_kfbtc        = array(); // obf
	private $v_qjynl = ''; // obf
	private $v_ulfdv; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_pjzwr->events = array(); // obf
	} // obf

	public function test_do_action_with_callback() { // obf
		$v_tqktm             = new MockAction(); // obf
		$v_efqcr      = array( $v_tqktm, 'action' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 2; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_efqcr, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertSame( 1, $v_tqktm->get_call_count() ); // obf
	} // obf

	public function test_do_action_with_multiple_calls() { // obf
		$v_tqktm             = new MockAction(); // obf
		$v_efqcr      = array( $v_tqktm, 'filter' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 2; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_efqcr, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertSame( 2, $v_tqktm->get_call_count() ); // obf
	} // obf

	public function test_do_action_with_multiple_callbacks_on_same_priority() { // obf
		$v_tqktm             = new MockAction(); // obf
		$v_spglp             = new MockAction(); // obf
		$v_fmuhq  = array( $v_tqktm, 'filter' ); // obf
		$v_kimdy  = array( $v_spglp, 'filter' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 2; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_fmuhq, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->add_filter( $v_zkbrm, $v_kimdy, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertSame( 1, $v_tqktm->get_call_count() ); // obf
		$v_pjzwr->assertSame( 1, $v_tqktm->get_call_count() ); // obf
	} // obf

	public function test_do_action_with_multiple_callbacks_on_different_priorities() { // obf
		$v_tqktm             = new MockAction(); // obf
		$v_spglp             = new MockAction(); // obf
		$v_fmuhq  = array( $v_tqktm, 'filter' ); // obf
		$v_kimdy  = array( $v_spglp, 'filter' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 2; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_fmuhq, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->add_filter( $v_zkbrm, $v_kimdy, $v_htmpc + 1, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertSame( 1, $v_tqktm->get_call_count() ); // obf
		$v_pjzwr->assertSame( 1, $v_tqktm->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 60193 // obf
	 * // obf
	 * @dataProvider data_priority_callback_order_with_integers // obf
	 * @dataProvider data_priority_callback_order_with_unhappy_path_nonintegers // obf
	 * // obf
	 * @param array $v_ickwx { // obf
	 *     Indexed array of the priorities for the MockAction callbacks. // obf
	 * // obf
	 *     @type mixed $0 Priority for 'action' callback. // obf
	 *     @type mixed $1 Priority for 'action2' callback. // obf
	 * } // obf
	 * @param array  $v_nzzni  An array of callback names in expected call order. // obf
	 * @param string $v_xrurx Optional. Deprecation message. Default ''. // obf
	 */ // obf
	public function test_priority_callback_order( $v_ickwx, $v_nzzni, $v_xrurx = '' ) { // obf
		$v_dtfcr      = new MockAction(); // obf
		$v_ulfdv      = new WP_Hook(); // obf
		$v_zkbrm = __FUNCTION__; // obf

		if ( $v_xrurx && PHP_VERSION_ID >= 80100 ) { // obf
			$v_pjzwr->expectDeprecation(); // obf
			$v_pjzwr->expectDeprecationMessage( $v_xrurx ); // obf
		} // obf

		$v_ulfdv->add_filter( $v_zkbrm, array( $v_dtfcr, 'action' ), $v_ickwx[0], 1 ); // obf
		$v_ulfdv->add_filter( $v_zkbrm, array( $v_dtfcr, 'action2' ), $v_ickwx[1], 1 ); // obf
		$v_ulfdv->do_action( array( '' ) ); // obf

		$v_pjzwr->assertSame( 2, $v_dtfcr->get_call_count(), 'The number of call counts does not match' ); // obf

		$v_jtjav = wp_list_pluck( $v_dtfcr->get_events(), 'action' ); // obf
		$v_pjzwr->assertSame( $v_nzzni, $v_jtjav, 'The action callback order does not match the expected order' ); // obf
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

	public function test_do_action_with_no_accepted_args() { // obf
		$v_efqcr      = array( $v_pjzwr, '_action_callback' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 0; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_efqcr, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertEmpty( $v_pjzwr->events[0]['args'] ); // obf
	} // obf

	public function test_do_action_with_one_accepted_arg() { // obf
		$v_efqcr      = array( $v_pjzwr, '_action_callback' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 1; // obf
		$v_sykry = 1; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_efqcr, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertCount( 1, $v_pjzwr->events[0]['args'] ); // obf
	} // obf

	public function test_do_action_with_more_accepted_args() { // obf
		$v_efqcr      = array( $v_pjzwr, '_action_callback' ); // obf
		$v_ulfdv          = new WP_Hook(); // obf
		$v_zkbrm     = __FUNCTION__; // obf
		$v_htmpc      = 100; // obf
		$v_sykry = 1000; // obf
		$v_jnsoc           = __FUNCTION__ . '_arg'; // obf

		$v_ulfdv->add_filter( $v_zkbrm, $v_efqcr, $v_htmpc, $v_sykry ); // obf
		$v_ulfdv->do_action( array( $v_jnsoc ) ); // obf

		$v_pjzwr->assertCount( 1, $v_pjzwr->events[0]['args'] ); // obf
	} // obf

	public function test_do_action_doesnt_change_value() { // obf
		$v_pjzwr->hook          = new WP_Hook(); // obf
		$v_pjzwr->action_output = ''; // obf

		$v_pjzwr->hook->add_filter( 'do_action_doesnt_change_value', array( $v_pjzwr, '_filter_do_action_doesnt_change_value1' ), 10, 1 ); // obf
		$v_pjzwr->hook->add_filter( 'do_action_doesnt_change_value', array( $v_pjzwr, '_filter_do_action_doesnt_change_value2' ), 10, 1 ); // obf
		$v_pjzwr->hook->add_filter( 'do_action_doesnt_change_value', array( $v_pjzwr, '_filter_do_action_doesnt_change_value3' ), 11, 1 ); // obf

		$v_pjzwr->hook->do_action( array( 'a' ) ); // obf

		$v_pjzwr->assertSame( 'a1-b1b3-a2a3', $v_pjzwr->action_output ); // obf
	} // obf

	public function _filter_do_action_doesnt_change_value1( $v_bwaik ) { // obf
		$v_pjzwr->action_output .= $v_bwaik . 1; // obf
		return 'x1'; // obf
	} // obf
	public function _filter_do_action_doesnt_change_value2( $v_bwaik ) { // obf
		$v_pjzwr->hook->remove_filter( 'do_action_doesnt_change_value', array( $v_pjzwr, '_filter_do_action_doesnt_change_value2' ), 10 ); // obf

		$v_pjzwr->action_output .= '-'; // obf
		$v_pjzwr->hook->do_action( array( 'b' ) ); // obf
		$v_pjzwr->action_output .= '-'; // obf

		$v_pjzwr->hook->add_filter( 'do_action_doesnt_change_value', array( $v_pjzwr, '_filter_do_action_doesnt_change_value2' ), 10, 1 ); // obf

		$v_pjzwr->action_output .= $v_bwaik . 2; // obf

		return 'x2'; // obf
	} // obf

	public function _filter_do_action_doesnt_change_value3( $v_bwaik ) { // obf
		$v_pjzwr->action_output .= $v_bwaik . 3; // obf
		return 'x3'; // obf
	} // obf

	/** // obf
	 * Use this rather than MockAction so we can test callbacks with no args // obf
	 * // obf
	 * @param mixed ...$v_rxsqk Optional arguments passed to the action. // obf
	 */ // obf
	public function _action_callback( ...$v_rxsqk ) { // obf
		$v_pjzwr->events[] = array( // obf
			'action' => __FUNCTION__, // obf
			'args'   => $v_rxsqk, // obf
		); // obf
	} // obf
} // obf