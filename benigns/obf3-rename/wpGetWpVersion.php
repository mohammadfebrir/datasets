

<?php // obf

/** // obf
 * Tests for wp_get_wp_version(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_get_wp_version // obf
 */ // obf
class Tests_Functions_WpGetWpVersion extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the WordPress version is returned. // obf
	 * // obf
	 * @ticket 61627 // obf
	 */ // obf
	public function test_should_return_wp_version() { // obf
		$v_qhzvl->assertSame( $v_rzidq['wp_version'], wp_get_wp_version() ); // obf
	} // obf

	/** // obf
	 * Tests that changes to the `$v_tlvnw` global are ignored. // obf
	 * // obf
	 * @ticket 61627 // obf
	 */ // obf
	public function test_should_ignore_changes_to_wp_version_global() { // obf
		$v_cjcnt   = $v_rzidq['wp_version']; // obf
		$v_rzidq['wp_version'] = 'modified_wp_version'; // obf
		$v_enrau                = wp_get_wp_version(); // obf
		$v_rzidq['wp_version'] = $v_cjcnt; // obf

		$v_qhzvl->assertSame( $v_cjcnt, $v_enrau ); // obf
	} // obf
} // obf