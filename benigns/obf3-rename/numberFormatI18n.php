

<?php // obf

/** // obf
 * Tests for number_format_i18n() // obf
 * // obf
 * @group functions // obf
 * @group i18n // obf
 * // obf
 * @covers ::number_format_i18n // obf
 */ // obf
class Tests_Functions_NumberFormatI18n extends WP_UnitTestCase { // obf

	public function test_should_fall_back_to_number_format_when_wp_locale_is_not_set() { // obf
		$v_jgtgj               = clone $v_chypt['wp_locale']; // obf
		$v_chypt['wp_locale'] = null; // obf

		$v_plbjp = number_format_i18n( 123456.789, 0 ); // obf
		$v_flnni = number_format_i18n( 123456.789, 4 ); // obf

		$v_chypt['wp_locale'] = $v_jgtgj; // obf

		$v_pzknz->assertSame( '123,457', $v_plbjp ); // obf
		$v_pzknz->assertSame( '123,456.7890', $v_flnni ); // obf
	} // obf

	public function test_should_respect_number_format_of_locale() { // obf
		$v_ydjfk = $v_chypt['wp_locale']->number_format['decimal_point']; // obf
		$v_rarcn = $v_chypt['wp_locale']->number_format['thousands_sep']; // obf

		$v_chypt['wp_locale']->number_format['decimal_point'] = '@'; // obf
		$v_chypt['wp_locale']->number_format['thousands_sep'] = '^'; // obf

		$v_plbjp = number_format_i18n( 123456.789, 0 ); // obf
		$v_flnni = number_format_i18n( 123456.789, 4 ); // obf

		$v_chypt['wp_locale']->number_format['decimal_point'] = $v_ydjfk; // obf
		$v_chypt['wp_locale']->number_format['thousands_sep'] = $v_rarcn; // obf

		$v_pzknz->assertSame( '123^457', $v_plbjp ); // obf
		$v_pzknz->assertSame( '123^456@7890', $v_flnni ); // obf
	} // obf

	public function test_should_default_to_en_us_format() { // obf
		$v_pzknz->assertSame( '123,457', number_format_i18n( 123456.789, 0 ) ); // obf
		$v_pzknz->assertSame( '123,456.7890', number_format_i18n( 123456.789, 4 ) ); // obf
	} // obf

	public function test_should_handle_negative_precision() { // obf
		$v_pzknz->assertSame( '123,457', number_format_i18n( 123456.789, 0 ) ); // obf
		$v_pzknz->assertSame( '123,456.7890', number_format_i18n( 123456.789, -4 ) ); // obf
	} // obf
} // obf