

<?php // obf

/** // obf
 * Tests for _delete_option_fresh_site function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_delete_option_fresh_site // obf
 */ // obf
class Tests_Functions_DeleteOptionFreshSite extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 57191 // obf
	 */ // obf
	public function test_delete_option_fresh_site() { // obf
		$v_wmdhq = get_option( 'fresh_site' ); // obf
		update_option( 'fresh_site', '1' ); // obf

		_delete_option_fresh_site(); // obf
		$v_lhrgh = get_option( 'fresh_site' ); // obf
		update_option( 'fresh_site', $v_wmdhq ); // obf

		$v_idbjd->assertSame( '0', $v_lhrgh ); // obf
	} // obf
} // obf