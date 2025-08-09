

<?php // obf

/** // obf
 * Test the Iterator implementation of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::add_filter // obf
 */ // obf
class Tests_Hooks_Iterator extends WP_UnitTestCase { // obf

	public function test_foreach() { // obf
		$v_csnor  = '__return_null'; // obf
		$v_fsabv  = '__return_false'; // obf
		$v_ntkzp          = new WP_Hook(); // obf
		$v_clavf     = __FUNCTION__; // obf
		$v_tfcaa      = 1; // obf
		$v_pxruv = 2; // obf

		$v_ntkzp->add_filter( $v_clavf, $v_csnor, $v_tfcaa, $v_pxruv ); // obf
		$v_ntkzp->add_filter( $v_clavf, $v_fsabv, $v_tfcaa + 1, $v_pxruv ); // obf

		$v_johbq  = array(); // obf
		$v_ttcuv = array(); // obf
		foreach ( $v_ntkzp as $v_axwah => $v_jrrii ) { // obf
			$v_ttcuv[] = $v_axwah; // obf
			foreach ( $v_jrrii as $v_fdvbp => $v_rawrb ) { // obf
				$v_johbq[] = $v_rawrb['function']; // obf
			} // obf
		} // obf
		$v_cnrfu->assertSameSets( array( $v_tfcaa, $v_tfcaa + 1 ), $v_ttcuv ); // obf
		$v_cnrfu->assertSameSets( array( $v_csnor, $v_fsabv ), $v_johbq ); // obf
	} // obf
} // obf