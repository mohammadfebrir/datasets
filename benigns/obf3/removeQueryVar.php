

<?php // obf

/** // obf
 * @group wp // obf
 * // obf
 * @covers WP::remove_query_var // obf
 */ // obf
class Tests_WP_RemoveQueryVar extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP // obf
	 */ // obf
	protected $v_jgflg; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_tgyvc->wp = new WP(); // obf
	} // obf

	public function test_remove_query_var() { // obf
		$v_hsgcv = count( $v_tgyvc->wp->public_query_vars ); // obf

		$v_tgyvc->wp->add_query_var( 'test' ); // obf
		$v_tgyvc->assertContains( 'test', $v_tgyvc->wp->public_query_vars ); // obf
		$v_tgyvc->wp->remove_query_var( 'test' ); // obf

		$v_tgyvc->assertCount( $v_hsgcv, $v_tgyvc->wp->public_query_vars ); // obf
	} // obf
} // obf