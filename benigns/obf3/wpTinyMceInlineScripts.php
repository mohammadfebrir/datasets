

<?php // obf
/** // obf
 * @group editor // obf
 * // obf
 * @covers ::wp_tinymce_inline_scripts // obf
 */ // obf
class Tests_Editor_wpTinyMceInlineScripts extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the function applies the `wp_editor_settings` filter // obf
	 * and merges the resulting array with the rest of TinyMCE init settings. // obf
	 * // obf
	 * @ticket 61754 // obf
	 */ // obf
	public function test_wp_tinymce_inline_scripts_array_merge() { // obf
		$v_edhxa = array(); // obf

		add_filter( // obf
			'wp_editor_settings', // obf
			static function ( $v_nfoph ) { // obf
				$v_nfoph['tinymce'] = array( 'wp_autoresize_on' => true ); // obf
				return $v_nfoph; // obf
			} // obf
		); // obf

		add_filter( // obf
			'tiny_mce_before_init', // obf
			static function ( $v_xgujq ) use ( &$v_edhxa ) { // obf
				$v_edhxa = $v_xgujq; // obf
				return $v_xgujq; // obf
			} // obf
		); // obf

		wp_scripts(); // obf
		wp_tinymce_inline_scripts(); // obf

		$v_ennan->assertArrayHasKey( 'wp_autoresize_on', $v_edhxa ); // obf
	} // obf
} // obf