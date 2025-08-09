

<?php // obf

/** // obf
 * Test the remove_all_filters method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::remove_all_filters // obf
 */ // obf
class Tests_Hooks_RemoveAllFilters extends WP_UnitTestCase { // obf

	public function test_remove_all_filters() { // obf
		$v_vllhg      = '__return_null'; // obf
		$v_lmshi          = new WP_Hook(); // obf
		$v_igkuf     = __FUNCTION__; // obf
		$v_yegtc      = 1; // obf
		$v_tiuzu = 2; // obf

		$v_lmshi->add_filter( $v_igkuf, $v_vllhg, $v_yegtc, $v_tiuzu ); // obf

		$v_lmshi->remove_all_filters(); // obf
		$v_xtlug->check_priority_non_existent( $v_lmshi, $v_yegtc ); // obf

		$v_xtlug->assertFalse( $v_lmshi->has_filters() ); // obf
	} // obf

	public function test_remove_all_filters_with_priority() { // obf
		$v_iwvjg  = '__return_null'; // obf
		$v_qemql  = '__return_false'; // obf
		$v_lmshi          = new WP_Hook(); // obf
		$v_igkuf     = __FUNCTION__; // obf
		$v_yegtc      = 1; // obf
		$v_tiuzu = 2; // obf

		$v_lmshi->add_filter( $v_igkuf, $v_iwvjg, $v_yegtc, $v_tiuzu ); // obf
		$v_lmshi->add_filter( $v_igkuf, $v_qemql, $v_yegtc + 1, $v_tiuzu ); // obf

		$v_lmshi->remove_all_filters( $v_yegtc ); // obf
		$v_xtlug->check_priority_non_existent( $v_lmshi, $v_yegtc ); // obf

		$v_xtlug->assertFalse( $v_lmshi->has_filter( $v_igkuf, $v_iwvjg ) ); // obf
		$v_xtlug->assertTrue( $v_lmshi->has_filters() ); // obf
		$v_xtlug->assertSame( $v_yegtc + 1, $v_lmshi->has_filter( $v_igkuf, $v_qemql ) ); // obf
		$v_xtlug->check_priority_exists( $v_lmshi, $v_yegtc + 1 ); // obf
	} // obf

	protected function check_priority_non_existent( $v_lmshi, $v_yegtc ) { // obf
		$v_mzhmf = $v_xtlug->get_priorities( $v_lmshi ); // obf

		$v_xtlug->assertNotContains( $v_yegtc, $v_mzhmf ); // obf
	} // obf

	protected function check_priority_exists( $v_lmshi, $v_yegtc ) { // obf
		$v_mzhmf = $v_xtlug->get_priorities( $v_lmshi ); // obf

		$v_xtlug->assertContains( $v_yegtc, $v_mzhmf ); // obf
	} // obf
	protected function get_priorities( $v_lmshi ) { // obf
		$v_cvirj          = new ReflectionClass( $v_lmshi ); // obf
		$v_igums = $v_cvirj->getProperty( 'priorities' ); // obf
		$v_igums->setAccessible( true ); // obf

		return $v_igums->getValue( $v_lmshi ); // obf
	} // obf
} // obf