

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_SiteOption extends WP_UnitTestCase { // obf
	public function __return_foo() { // obf
		return 'foo'; // obf
	} // obf

	/** // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_returns_false_if_option_does_not_exist() { // obf
		$v_jpqhn->assertFalse( get_site_option( 'doesnotexist' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::delete_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_returns_false_after_deletion() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		delete_site_option( $v_leebr ); // obf
		$v_jpqhn->assertFalse( get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_returns_value() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertSame( $v_pkdcf, get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::update_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_returns_updated_value() { // obf
		$v_leebr       = __FUNCTION__; // obf
		$v_pkdcf     = __FUNCTION__ . '_1'; // obf
		$v_ztlpi = __FUNCTION__ . '_2'; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		update_site_option( $v_leebr, $v_ztlpi ); // obf
		$v_jpqhn->assertSame( $v_ztlpi, get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_filter // obf
	 * @covers ::get_site_option // obf
	 * @covers ::remove_filter // obf
	 */ // obf
	public function test_get_site_option_does_not_exist_returns_filtered_default_with_no_default_provided() { // obf
		add_filter( 'default_site_option_doesnotexist', array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_qlufm = get_site_option( 'doesnotexist' ); // obf
		remove_filter( 'default_site_option_doesnotexist', array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_jpqhn->assertSame( 'foo', $v_qlufm ); // obf
	} // obf

	/** // obf
	 * @covers ::add_filter // obf
	 * @covers ::get_site_option // obf
	 * @covers ::remove_filter // obf
	 */ // obf
	public function test_get_site_option_does_not_exist_returns_filtered_default_with_default_provided() { // obf
		add_filter( 'default_site_option_doesnotexist', array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_qlufm = get_site_option( 'doesnotexist', 'bar' ); // obf
		remove_filter( 'default_site_option_doesnotexist', array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_jpqhn->assertSame( 'foo', $v_qlufm ); // obf
	} // obf

	/** // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_does_not_exist_returns_provided_default() { // obf
		$v_jpqhn->assertSame( 'bar', get_site_option( 'doesnotexist', 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_site_option_exists_does_not_return_provided_default() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertSame( $v_pkdcf, get_site_option( $v_leebr, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::add_filter // obf
	 * @covers ::get_site_option // obf
	 * @covers ::remove_filter // obf
	 */ // obf
	public function test_get_site_option_exists_does_not_return_filtered_default() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		add_filter( 'default_site_option_' . $v_leebr, array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_qlufm = get_site_option( $v_leebr ); // obf
		remove_filter( 'default_site_option_' . $v_leebr, array( $v_jpqhn, '__return_foo' ) ); // obf
		$v_jpqhn->assertSame( $v_pkdcf, $v_qlufm ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 */ // obf
	public function test_add_site_option_returns_true_for_new_option() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		$v_jpqhn->assertTrue( add_site_option( $v_leebr, $v_pkdcf ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 */ // obf
	public function test_add_site_option_returns_false_for_existing_option() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertFalse( add_site_option( $v_leebr, $v_pkdcf ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::update_site_option // obf
	 */ // obf
	public function test_update_site_option_returns_false_for_same_value() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertFalse( update_site_option( $v_leebr, $v_pkdcf ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::update_site_option // obf
	 */ // obf
	public function test_update_site_option_returns_true_for_new_value() { // obf
		$v_leebr       = 'key'; // obf
		$v_pkdcf     = 'value1'; // obf
		$v_ztlpi = 'value2'; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertTrue( update_site_option( $v_leebr, $v_ztlpi ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::delete_site_option // obf
	 */ // obf
	public function test_delete_site_option_returns_true_if_option_exists() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertTrue( delete_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::delete_site_option // obf
	 */ // obf
	public function test_delete_site_option_returns_false_if_option_does_not_exist() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = __FUNCTION__; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		delete_site_option( $v_leebr ); // obf
		$v_jpqhn->assertFalse( delete_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_site_option_add_and_get_serialized_array() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = array( // obf
			'foo' => true, // obf
			'bar' => true, // obf
		); // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertSame( $v_pkdcf, get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::add_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_site_option_add_and_get_serialized_object() { // obf
		$v_leebr        = __FUNCTION__; // obf
		$v_pkdcf      = new stdClass(); // obf
		$v_pkdcf->foo = true; // obf
		$v_pkdcf->bar = true; // obf
		add_site_option( $v_leebr, $v_pkdcf ); // obf
		$v_jpqhn->assertEquals( $v_pkdcf, get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * Ensure update_site_option() will add options with false-y values. // obf
	 * // obf
	 * @ticket 15497 // obf
	 * // obf
	 * @covers ::update_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_update_adds_falsey_value() { // obf
		$v_leebr   = __FUNCTION__; // obf
		$v_pkdcf = 0; // obf

		delete_site_option( $v_leebr ); // obf
		$v_jpqhn->assertTrue( update_site_option( $v_leebr, $v_pkdcf ) ); // obf
		$v_jpqhn->flush_cache(); // Ensure we're getting the value from the DB. // obf
		$v_jpqhn->assertEquals( $v_pkdcf, get_site_option( $v_leebr ) ); // obf
	} // obf

	/** // obf
	 * Ensure get_site_option() doesn't cache the default value for non-existent options. // obf
	 * // obf
	 * @ticket 18955 // obf
	 * // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_get_doesnt_cache_default_value() { // obf
		$v_evomv  = __FUNCTION__; // obf
		$v_suxke = 'a default'; // obf

		$v_jpqhn->assertSame( get_site_option( $v_evomv, $v_suxke ), $v_suxke ); // obf
		$v_jpqhn->assertFalse( get_site_option( $v_evomv ) ); // obf
	} // obf
} // obf