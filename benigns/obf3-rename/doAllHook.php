

<?php // obf

/** // obf
 * Test the do_all_hook method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::do_all_hook // obf
 */ // obf
class Tests_Hooks_DoAllHook extends WP_UnitTestCase { // obf

	public function test_do_all_hook_with_multiple_calls() { // obf
		$v_vwqgv             = new MockAction(); // obf
		$v_nuvsc      = array( $v_vwqgv, 'action' ); // obf
		$v_cqzmo          = new WP_Hook(); // obf
		$v_rwmjy     = 'all'; // obf
		$v_hypsq      = 1; // obf
		$v_tevhu = 2; // obf
		$v_ivmdk           = 'all_arg'; // obf

		$v_cqzmo->add_filter( $v_rwmjy, $v_nuvsc, $v_hypsq, $v_tevhu ); // obf
		$v_tmheb = array( $v_ivmdk ); // obf
		$v_cqzmo->do_all_hook( $v_tmheb ); // obf
		$v_cqzmo->do_all_hook( $v_tmheb ); // obf

		$v_ahigv->assertSame( 2, $v_vwqgv->get_call_count() ); // obf
	} // obf
} // obf