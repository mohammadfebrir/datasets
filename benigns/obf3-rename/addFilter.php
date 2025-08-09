

<?php // obf

/** // obf
 * Test the add_filter method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::add_filter // obf
 */ // obf
class Tests_Hooks_AddFilter extends WP_UnitTestCase { // obf

	public $v_isbzc; // obf

	/** // obf
	 * Temporary storage for action output. // obf
	 * // obf
	 * Used in the following tests: // obf
	 * - `test_remove_and_add_action()` // obf
	 * - `test_remove_and_add_last_action()` // obf
	 * - `test_remove_and_recurse_and_add_action()` // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_xkozf = ''; // obf

	public function tear_down() { // obf
		$v_gyjht->action_output = ''; // obf
		parent::tear_down(); // obf
	} // obf

	public function test_add_filter_with_function() { // obf
		$v_buovv      = '__return_null'; // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf

		$v_iabrr = _wp_filter_build_unique_id( $v_hzflb, $v_buovv, $v_lqvjs ); // obf
		$v_gyjht->assertSame( $v_buovv, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['function'] ); // obf
		$v_gyjht->assertSame( $v_efcqh, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['accepted_args'] ); // obf
	} // obf

	public function test_add_filter_with_object() { // obf
		$v_jtjsp             = new MockAction(); // obf
		$v_buovv      = array( $v_jtjsp, 'action' ); // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf

		$v_iabrr = _wp_filter_build_unique_id( $v_hzflb, $v_buovv, $v_lqvjs ); // obf
		$v_gyjht->assertSame( $v_buovv, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['function'] ); // obf
		$v_gyjht->assertSame( $v_efcqh, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['accepted_args'] ); // obf
	} // obf

	public function test_add_filter_with_static_method() { // obf
		$v_buovv      = array( 'MockAction', 'action' ); // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf

		$v_iabrr = _wp_filter_build_unique_id( $v_hzflb, $v_buovv, $v_lqvjs ); // obf
		$v_gyjht->assertSame( $v_buovv, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['function'] ); // obf
		$v_gyjht->assertSame( $v_efcqh, $v_isbzc->callbacks[ $v_lqvjs ][ $v_iabrr ]['accepted_args'] ); // obf
	} // obf

	public function test_add_two_filters_with_same_priority() { // obf
		$v_zehpu  = '__return_null'; // obf
		$v_cfrko  = '__return_false'; // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_zehpu, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf

		$v_isbzc->add_filter( $v_hzflb, $v_cfrko, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->assertCount( 2, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf
	} // obf

	public function test_add_two_filters_with_different_priority() { // obf
		$v_zehpu  = '__return_null'; // obf
		$v_cfrko  = '__return_false'; // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_zehpu, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf

		$v_isbzc->add_filter( $v_hzflb, $v_cfrko, $v_lqvjs + 1, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs + 1 ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs + 1 ] ); // obf
	} // obf

	public function test_readd_filter() { // obf
		$v_buovv      = '__return_null'; // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf
	} // obf

	public function test_readd_filter_with_different_priority() { // obf
		$v_buovv      = '__return_null'; // obf
		$v_isbzc          = new WP_Hook(); // obf
		$v_hzflb     = __FUNCTION__; // obf
		$v_lqvjs      = 1; // obf
		$v_efcqh = 2; // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf

		$v_isbzc->add_filter( $v_hzflb, $v_buovv, $v_lqvjs + 1, $v_efcqh ); // obf
		$v_gyjht->check_priority_exists( $v_isbzc, $v_lqvjs + 1 ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs ] ); // obf
		$v_gyjht->assertCount( 1, $v_isbzc->callbacks[ $v_lqvjs + 1 ] ); // obf
	} // obf

	public function test_sort_after_add_filter() { // obf
		$v_jtjsp         = new MockAction(); // obf
		$v_rzjlb         = new MockAction(); // obf
		$v_jbevn         = new MockAction(); // obf
		$v_isbzc      = new WP_Hook(); // obf
		$v_hzflb = __FUNCTION__; // obf

		$v_isbzc->add_filter( $v_hzflb, array( $v_jtjsp, 'action' ), 10, 1 ); // obf
		$v_isbzc->add_filter( $v_hzflb, array( $v_rzjlb, 'action' ), 5, 1 ); // obf
		$v_isbzc->add_filter( $v_hzflb, array( $v_jbevn, 'action' ), 8, 1 ); // obf

		$v_gyjht->assertSame( array( 5, 8, 10 ), $v_gyjht->get_priorities( $v_isbzc ) ); // obf
	} // obf

	public function test_remove_and_add() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', '__return_empty_string', 10, 0 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 10 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add2' ), 11, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 11 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add4' ), 12, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 12 ); // obf
		$v_riazj = $v_gyjht->hook->apply_filters( '', array() ); // obf

		$v_gyjht->assertSameSets( array( 10, 11, 12 ), $v_gyjht->get_priorities( $v_gyjht->hook ), 'The priorities should match this array' ); // obf

		$v_gyjht->assertSame( '24', $v_riazj ); // obf
	} // obf

	public function test_remove_and_add_last_filter() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', '__return_empty_string', 10, 0 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 10 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add1' ), 11, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 11 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add2' ), 12, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 12 ); // obf
		$v_riazj = $v_gyjht->hook->apply_filters( '', array() ); // obf

		$v_gyjht->assertSameSets( array( 10, 11, 12 ), $v_gyjht->get_priorities( $v_gyjht->hook ), 'The priorities should match this array' ); // obf

		$v_gyjht->assertSame( '12', $v_riazj ); // obf
	} // obf

	public function test_remove_and_recurse_and_add() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', '__return_empty_string', 10, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add1' ), 11, 1 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_recurse_and_add2' ), 11, 1 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add3' ), 11, 1 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add4' ), 12, 1 ); // obf

		$v_gyjht->assertSameSets( array( 10, 11, 12 ), $v_gyjht->get_priorities( $v_gyjht->hook ), 'The priorities should match this array' ); // obf

		$v_riazj = $v_gyjht->hook->apply_filters( '', array() ); // obf

		$v_gyjht->assertSame( '1-134-234', $v_riazj ); // obf
	} // obf

	public function _filter_remove_and_add1( $v_riazj ) { // obf
		return $v_riazj . '1'; // obf
	} // obf

	public function _filter_remove_and_add2( $v_riazj ) { // obf
		$v_gyjht->hook->remove_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add2' ), 11 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_add2' ), 11, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 11 ); // obf
		return $v_riazj . '2'; // obf
	} // obf

	public function _filter_remove_and_recurse_and_add2( $v_riazj ) { // obf
		$v_gyjht->hook->remove_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_recurse_and_add2' ), 11 ); // obf

		$v_riazj .= '-' . $v_gyjht->hook->apply_filters( '', array() ) . '-'; // obf

		$v_gyjht->hook->add_filter( 'remove_and_add', array( $v_gyjht, '_filter_remove_and_recurse_and_add2' ), 11, 1 ); // obf
		$v_gyjht->check_priority_exists( $v_gyjht->hook, 11 ); // obf
		return $v_riazj . '2'; // obf
	} // obf

	public function _filter_remove_and_add3( $v_riazj ) { // obf
		return $v_riazj . '3'; // obf
	} // obf

	public function _filter_remove_and_add4( $v_riazj ) { // obf
		return $v_riazj . '4'; // obf
	} // obf

	public function test_remove_and_add_action() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', '__return_empty_string', 10, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add2' ), 11, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add4' ), 12, 0 ); // obf

		$v_gyjht->hook->do_action( array() ); // obf

		$v_gyjht->assertSame( '24', $v_gyjht->action_output ); // obf
	} // obf

	public function test_remove_and_add_last_action() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', '__return_empty_string', 10, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add1' ), 11, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add2' ), 12, 0 ); // obf

		$v_gyjht->hook->do_action( array() ); // obf

		$v_gyjht->assertSame( '12', $v_gyjht->action_output ); // obf
	} // obf

	public function test_remove_and_recurse_and_add_action() { // obf
		$v_gyjht->hook = new WP_Hook(); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', '__return_empty_string', 10, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add1' ), 11, 0 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_recurse_and_add2' ), 11, 0 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add3' ), 11, 0 ); // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add4' ), 12, 0 ); // obf

		$v_gyjht->hook->do_action( array() ); // obf

		$v_gyjht->assertSame( '1-134-234', $v_gyjht->action_output ); // obf
	} // obf

	public function _action_remove_and_add1() { // obf
		$v_gyjht->action_output .= 1; // obf
	} // obf

	public function _action_remove_and_add2() { // obf
		$v_gyjht->hook->remove_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add2' ), 11 ); // obf
		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_add2' ), 11, 0 ); // obf

		$v_gyjht->action_output .= '2'; // obf
	} // obf

	public function _action_remove_and_recurse_and_add2() { // obf
		$v_gyjht->hook->remove_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_recurse_and_add2' ), 11 ); // obf

		$v_gyjht->action_output .= '-'; // obf
		$v_gyjht->hook->do_action( array() ); // obf
		$v_gyjht->action_output .= '-'; // obf

		$v_gyjht->hook->add_filter( 'remove_and_add_action', array( $v_gyjht, '_action_remove_and_recurse_and_add2' ), 11, 0 ); // obf

		$v_gyjht->action_output .= '2'; // obf
	} // obf

	public function _action_remove_and_add3() { // obf
		$v_gyjht->action_output .= '3'; // obf
	} // obf

	public function _action_remove_and_add4() { // obf
		$v_gyjht->action_output .= '4'; // obf
	} // obf

	protected function check_priority_exists( $v_isbzc, $v_lqvjs ) { // obf
		$v_xiebk = $v_gyjht->get_priorities( $v_isbzc ); // obf

		$v_gyjht->assertContains( $v_lqvjs, $v_xiebk ); // obf
	} // obf

	protected function get_priorities( $v_isbzc ) { // obf
		$v_aagqp          = new ReflectionClass( $v_isbzc ); // obf
		$v_qbgbt = $v_aagqp->getProperty( 'priorities' ); // obf
		$v_qbgbt->setAccessible( true ); // obf

		return $v_qbgbt->getValue( $v_isbzc ); // obf
	} // obf
} // obf