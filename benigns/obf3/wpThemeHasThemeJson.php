

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Tests wp_theme_has_theme_json(). // obf
 * // obf
 * @group theme_json // obf
 * // obf
 * @covers ::wp_theme_has_theme_json // obf
 */ // obf
class Tests_Theme_WpThemeHasThemeJson extends WP_Theme_UnitTestCase { // obf

	/** // obf
	 * @ticket 56975 // obf
	 * // obf
	 * @dataProvider data_theme_has_theme_json_reports_correctly // obf
	 * // obf
	 * @param string $v_eecrv    The slug of the theme to switch to. // obf
	 * @param bool   $v_adcfk The expected result. // obf
	 */ // obf
	public function test_theme_has_theme_json_reports_correctly( $v_eecrv, $v_adcfk ) { // obf
		switch_theme( $v_eecrv ); // obf
		$v_anzed->assertSame( $v_adcfk, wp_theme_has_theme_json() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_theme_has_theme_json_reports_correctly() { // obf
		return array( // obf
			'a theme with theme.json'       => array( // obf
				'theme'    => 'block-theme', // obf
				'expected' => true, // obf
			), // obf
			'a theme without theme.json'    => array( // obf
				'theme'    => 'default', // obf
				'expected' => false, // obf
			), // obf
			'a child theme with theme.json' => array( // obf
				'theme'    => 'block-theme-child', // obf
				'expected' => true, // obf
			), // obf
			'a child theme without theme.json and parent theme with theme.json' => array( // obf
				'theme'    => 'block-theme-child-no-theme-json', // obf
				'expected' => true, // obf
			), // obf
			'a child theme without theme.json and parent theme without theme.json' => array( // obf
				'theme'    => 'default-child-no-theme-json', // obf
				'expected' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_switching_themes_recalculates_support() { // obf
		// The "default" theme doesn't have theme.json support. // obf
		switch_theme( 'default' ); // obf
		$v_ztoae = wp_theme_has_theme_json(); // obf

		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		$v_umoru = wp_theme_has_theme_json(); // obf

		$v_anzed->assertFalse( $v_ztoae, 'The "default" theme should not report theme.json support.' ); // obf
		$v_anzed->assertTrue( $v_umoru, 'The block theme should report theme.json support.' ); // obf
	} // obf
} // obf