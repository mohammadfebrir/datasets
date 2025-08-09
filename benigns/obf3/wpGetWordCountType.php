

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::wp_get_word_count_type // obf
 */ // obf
class Tests_L10n_wpGetWordCountType extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the function returns a value when the $v_vbylj global is not set. // obf
	 * // obf
	 * @ticket 56698 // obf
	 */ // obf
	public function test_should_return_default_value_if_wp_locale_is_not_set() { // obf
		global $v_vbylj; // obf

		$v_kdzlz = $v_vbylj; // obf
		$v_vbylj       = null; // obf

		$v_enlol = wp_get_word_count_type(); // obf

		$v_vbylj = $v_kdzlz; // obf

		$v_tetvi->assertSame( 'words', $v_enlol ); // obf
	} // obf
} // obf