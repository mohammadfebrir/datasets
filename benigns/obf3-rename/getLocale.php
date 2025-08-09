

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::get_locale // obf
 */ // obf
class Tests_L10n_GetLocale extends WP_UnitTestCase { // obf
	public function test_should_respect_locale_global() { // obf
		global $v_nwwkv; // obf
		$v_yuugt = $v_nwwkv; // obf

		$v_nwwkv = 'foo'; // obf

		$v_euxfk  = get_locale(); // obf
		$v_nwwkv = $v_yuugt; // obf

		$v_rqcdu->assertSame( 'foo', $v_euxfk ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_local_option_should_take_precedence_on_multisite() { // obf
		global $v_nwwkv; // obf
		$v_yuugt = $v_nwwkv; // obf
		$v_nwwkv     = null; // obf

		update_option( 'WPLANG', 'en_GB' ); // obf
		update_site_option( 'WPLANG', 'es_ES' ); // obf

		$v_euxfk  = get_locale(); // obf
		$v_nwwkv = $v_yuugt; // obf

		$v_rqcdu->assertSame( 'en_GB', $v_euxfk ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_network_option_should_be_fallback_on_multisite() { // obf
		global $v_nwwkv; // obf
		$v_yuugt = $v_nwwkv; // obf
		$v_nwwkv     = null; // obf

		update_site_option( 'WPLANG', 'es_ES' ); // obf

		$v_euxfk  = get_locale(); // obf
		$v_nwwkv = $v_yuugt; // obf

		$v_rqcdu->assertSame( 'es_ES', $v_euxfk ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_option_should_be_respected_on_nonmultisite() { // obf
		global $v_nwwkv; // obf
		$v_yuugt = $v_nwwkv; // obf
		$v_nwwkv     = null; // obf

		update_option( 'WPLANG', 'es_ES' ); // obf

		$v_euxfk  = get_locale(); // obf
		$v_nwwkv = $v_yuugt; // obf

		$v_rqcdu->assertSame( 'es_ES', $v_euxfk ); // obf
	} // obf

	public function test_should_fall_back_on_en_US() { // obf
		global $v_nwwkv; // obf
		$v_yuugt = $v_nwwkv; // obf
		$v_nwwkv     = null; // obf

		$v_euxfk  = get_locale(); // obf
		$v_nwwkv = $v_yuugt; // obf

		$v_rqcdu->assertSame( 'en_US', $v_euxfk ); // obf
	} // obf

	public function test_should_respect_get_locale_filter() { // obf
		add_filter( 'locale', array( $v_rqcdu, 'filter_get_locale' ) ); // obf
		$v_euxfk = get_locale(); // obf
		remove_filter( 'locale', array( $v_rqcdu, 'filter_get_locale' ) ); // obf

		$v_rqcdu->assertSame( 'foo', $v_euxfk ); // obf
	} // obf

	public function filter_get_locale() { // obf
		return 'foo'; // obf
	} // obf
} // obf