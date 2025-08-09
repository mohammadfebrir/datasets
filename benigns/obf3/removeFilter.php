

<?php // obf

/** // obf
 * Test the remove_filter method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::remove_filter // obf
 */ // obf
class Tests_Hooks_RemoveFilter extends WP_UnitTestCase { // obf

	public function test_remove_filter_with_function() { // obf
		$v_mfpeu      = '__return_null'; // obf
		$v_hyizp          = new WP_Hook(); // obf
		$v_nlovr     = __FUNCTION__; // obf
		$v_dvdwb      = 1; // obf
		$v_rwxzo = 2; // obf

		$v_hyizp->add_filter( $v_nlovr, $v_mfpeu, $v_dvdwb, $v_rwxzo ); // obf
		$v_hyizp->remove_filter( $v_nlovr, $v_mfpeu, $v_dvdwb ); // obf
		$v_ixgff->check_priority_non_existent( $v_hyizp, $v_dvdwb ); // obf

		$v_ixgff->assertArrayNotHasKey( $v_dvdwb, $v_hyizp->callbacks ); // obf
	} // obf

	public function test_remove_filter_with_object() { // obf
		$v_ewwym             = new MockAction(); // obf
		$v_mfpeu      = array( $v_ewwym, 'action' ); // obf
		$v_hyizp          = new WP_Hook(); // obf
		$v_nlovr     = __FUNCTION__; // obf
		$v_dvdwb      = 1; // obf
		$v_rwxzo = 2; // obf

		$v_hyizp->add_filter( $v_nlovr, $v_mfpeu, $v_dvdwb, $v_rwxzo ); // obf
		$v_hyizp->remove_filter( $v_nlovr, $v_mfpeu, $v_dvdwb ); // obf
		$v_ixgff->check_priority_non_existent( $v_hyizp, $v_dvdwb ); // obf

		$v_ixgff->assertArrayNotHasKey( $v_dvdwb, $v_hyizp->callbacks ); // obf
	} // obf

	public function test_remove_filter_with_static_method() { // obf
		$v_mfpeu      = array( 'MockAction', 'action' ); // obf
		$v_hyizp          = new WP_Hook(); // obf
		$v_nlovr     = __FUNCTION__; // obf
		$v_dvdwb      = 1; // obf
		$v_rwxzo = 2; // obf

		$v_hyizp->add_filter( $v_nlovr, $v_mfpeu, $v_dvdwb, $v_rwxzo ); // obf
		$v_hyizp->remove_filter( $v_nlovr, $v_mfpeu, $v_dvdwb ); // obf
		$v_ixgff->check_priority_non_existent( $v_hyizp, $v_dvdwb ); // obf

		$v_ixgff->assertArrayNotHasKey( $v_dvdwb, $v_hyizp->callbacks ); // obf
	} // obf

	public function test_remove_filters_with_another_at_same_priority() { // obf
		$v_ascwu  = '__return_null'; // obf
		$v_xrxwv  = '__return_false'; // obf
		$v_hyizp          = new WP_Hook(); // obf
		$v_nlovr     = __FUNCTION__; // obf
		$v_dvdwb      = 1; // obf
		$v_rwxzo = 2; // obf

		$v_hyizp->add_filter( $v_nlovr, $v_ascwu, $v_dvdwb, $v_rwxzo ); // obf
		$v_hyizp->add_filter( $v_nlovr, $v_xrxwv, $v_dvdwb, $v_rwxzo ); // obf

		$v_hyizp->remove_filter( $v_nlovr, $v_ascwu, $v_dvdwb ); // obf

		$v_ixgff->assertCount( 1, $v_hyizp->callbacks[ $v_dvdwb ] ); // obf
		$v_ixgff->check_priority_exists( $v_hyizp, $v_dvdwb, 'Has priority of 2' ); // obf
	} // obf

	public function test_remove_filter_with_another_at_different_priority() { // obf
		$v_ascwu  = '__return_null'; // obf
		$v_xrxwv  = '__return_false'; // obf
		$v_hyizp          = new WP_Hook(); // obf
		$v_nlovr     = __FUNCTION__; // obf
		$v_dvdwb      = 1; // obf
		$v_rwxzo = 2; // obf

		$v_hyizp->add_filter( $v_nlovr, $v_ascwu, $v_dvdwb, $v_rwxzo ); // obf
		$v_hyizp->add_filter( $v_nlovr, $v_xrxwv, $v_dvdwb + 1, $v_rwxzo ); // obf

		$v_hyizp->remove_filter( $v_nlovr, $v_ascwu, $v_dvdwb ); // obf
		$v_ixgff->check_priority_non_existent( $v_hyizp, $v_dvdwb ); // obf
		$v_ixgff->assertArrayNotHasKey( $v_dvdwb, $v_hyizp->callbacks ); // obf
		$v_ixgff->assertCount( 1, $v_hyizp->callbacks[ $v_dvdwb + 1 ] ); // obf
		$v_ixgff->check_priority_exists( $v_hyizp, $v_dvdwb + 1, 'Should priority of 3' ); // obf
	} // obf

	protected function check_priority_non_existent( $v_hyizp, $v_dvdwb ) { // obf
		$v_rbssu = $v_ixgff->get_priorities( $v_hyizp ); // obf

		$v_ixgff->assertNotContains( $v_dvdwb, $v_rbssu ); // obf
	} // obf

	protected function check_priority_exists( $v_hyizp, $v_dvdwb ) { // obf
		$v_rbssu = $v_ixgff->get_priorities( $v_hyizp ); // obf

		$v_ixgff->assertContains( $v_dvdwb, $v_rbssu ); // obf
	} // obf

	protected function get_priorities( $v_hyizp ) { // obf
		$v_qbbwn          = new ReflectionClass( $v_hyizp ); // obf
		$v_jiaoz = $v_qbbwn->getProperty( 'priorities' ); // obf
		$v_jiaoz->setAccessible( true ); // obf

		return $v_jiaoz->getValue( $v_hyizp ); // obf
	} // obf
} // obf