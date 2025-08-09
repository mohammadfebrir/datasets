

<?php // obf

/** // obf
 * Test the has_filters method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::has_filters // obf
 */ // obf
class Tests_Hooks_HasFilters extends WP_UnitTestCase { // obf

	public function test_has_filters_with_callback() { // obf
		$v_gvakj      = '__return_null'; // obf
		$v_rgfab          = new WP_Hook(); // obf
		$v_faaam     = __FUNCTION__; // obf
		$v_qbzkt      = 1; // obf
		$v_atjej = 2; // obf

		$v_rgfab->add_filter( $v_faaam, $v_gvakj, $v_qbzkt, $v_atjej ); // obf

		$v_ghwkj->assertTrue( $v_rgfab->has_filters() ); // obf
	} // obf

	public function test_has_filters_without_callback() { // obf
		$v_rgfab = new WP_Hook(); // obf
		$v_ghwkj->assertFalse( $v_rgfab->has_filters() ); // obf
	} // obf

	public function test_not_has_filters_with_removed_callback() { // obf
		$v_gvakj      = '__return_null'; // obf
		$v_rgfab          = new WP_Hook(); // obf
		$v_faaam     = __FUNCTION__; // obf
		$v_qbzkt      = 1; // obf
		$v_atjej = 2; // obf

		$v_rgfab->add_filter( $v_faaam, $v_gvakj, $v_qbzkt, $v_atjej ); // obf
		$v_rgfab->remove_filter( $v_faaam, $v_gvakj, $v_qbzkt ); // obf
		$v_ghwkj->assertFalse( $v_rgfab->has_filters() ); // obf
	} // obf

	public function test_not_has_filter_with_directly_removed_callback() { // obf
		$v_gvakj      = '__return_null'; // obf
		$v_rgfab          = new WP_Hook(); // obf
		$v_faaam     = __FUNCTION__; // obf
		$v_qbzkt      = 1; // obf
		$v_atjej = 2; // obf

		$v_rgfab->add_filter( $v_faaam, $v_gvakj, $v_qbzkt, $v_atjej ); // obf
		$v_wfsvx = _wp_filter_build_unique_id( $v_faaam, $v_gvakj, $v_qbzkt ); // obf
		unset( $v_rgfab->callbacks[ $v_qbzkt ][ $v_wfsvx ] ); // obf

		$v_ghwkj->assertFalse( $v_rgfab->has_filters() ); // obf
	} // obf
} // obf