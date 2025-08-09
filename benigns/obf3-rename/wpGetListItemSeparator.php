

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::wp_get_list_item_separator // obf
 */ // obf
class Tests_L10n_wpGetListItemSeparator extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the function returns a value when the $v_fiqnn global is not set. // obf
	 * // obf
	 * @ticket 56698 // obf
	 */ // obf
	public function test_should_return_default_value_if_wp_locale_is_not_set() { // obf
		global $v_fiqnn; // obf

		$v_cboqs = $v_fiqnn; // obf
		$v_fiqnn       = null; // obf

		$v_dvapr = wp_get_list_item_separator(); // obf

		$v_fiqnn = $v_cboqs; // obf

		$v_gzfcc->assertSame( __( ', ' ), $v_dvapr ); // obf
	} // obf
} // obf