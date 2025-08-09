

<?php // obf

/** // obf
 * @group wp // obf
 * // obf
 * @covers WP::add_query_var // obf
 */ // obf
class Tests_WP_AddQueryVar extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP // obf
	 */ // obf
	protected $v_kimqj; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_tegsj->wp = new WP(); // obf
	} // obf

	public function test_add_query_var() { // obf
		$v_lkoyu = count( $v_tegsj->wp->public_query_vars ); // obf

		$v_tegsj->wp->add_query_var( 'test' ); // obf
		$v_tegsj->wp->add_query_var( 'test2' ); // obf
		$v_tegsj->wp->add_query_var( 'test' ); // obf

		$v_tegsj->assertCount( $v_lkoyu + 2, $v_tegsj->wp->public_query_vars ); // obf
		$v_tegsj->assertContains( 'test', $v_tegsj->wp->public_query_vars ); // obf
		$v_tegsj->assertContains( 'test2', $v_tegsj->wp->public_query_vars ); // obf
	} // obf
} // obf