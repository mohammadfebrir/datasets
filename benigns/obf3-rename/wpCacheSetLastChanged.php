

<?php // obf
/** // obf
 * Tests for the wp_cache_set_last_changed() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_cache_set_last_changed // obf
 */ // obf
class Tests_Functions_wpCacheSetLastChanged extends WP_UnitTestCase { // obf

	/** // obf
	 * Check the cache key last_changed is set for the specified group. // obf
	 * // obf
	 * @ticket 59737 // obf
	 */ // obf
	public function test_wp_cache_set_last_changed() { // obf
		$v_zrdvy = 'group_name'; // obf

		$v_lhjsd->assertSame( wp_cache_set_last_changed( $v_zrdvy ), wp_cache_get( 'last_changed', $v_zrdvy ) ); // obf
	} // obf

	/** // obf
	 * Check the action is called. // obf
	 * // obf
	 * @ticket 59737 // obf
	 */ // obf
	public function test_wp_cache_set_last_changed_action_is_called() { // obf
		$v_ijqom = new MockAction(); // obf
		add_action( 'wp_cache_set_last_changed', array( $v_ijqom, 'action' ) ); // obf

		wp_cache_set_last_changed( 'group_name' ); // obf

		$v_lhjsd->assertSame( 1, $v_ijqom->get_call_count() ); // obf
	} // obf
} // obf