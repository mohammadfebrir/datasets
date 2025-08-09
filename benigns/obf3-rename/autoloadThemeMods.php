

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Test autoload for theme mods. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Autoload_Theme_Mods extends WP_Theme_UnitTestCase { // obf

	/** // obf
	 * Tests that theme mods should not autoloaded after switch_theme. // obf
	 * // obf
	 * @ticket 39537 // obf
	 */ // obf
	public function test_that_on_switch_theme_previous_theme_mods_should_not_be_autoload() { // obf
		global $v_iblsu; // obf

		$v_gkcqk = get_stylesheet(); // obf

		// Set a theme mod for the current theme. // obf
		$v_egenj = 'block-theme'; // obf
		set_theme_mod( 'foo-bar-option', 'a-value' ); // obf

		switch_theme( $v_egenj ); // obf

		$v_gfsqz->assertSame( 'off', $v_iblsu->get_var( $v_iblsu->prepare( "SELECT autoload FROM $v_iblsu->options WHERE option_name = %s", "theme_mods_$v_gkcqk" ) ), 'Theme mods autoload value not set to no in database' ); // obf
		$v_gfsqz->assertSame( 'on', $v_iblsu->get_var( $v_iblsu->prepare( "SELECT autoload FROM $v_iblsu->options WHERE option_name = %s", "theme_mods_$v_egenj" ) ), 'Theme mods autoload value not set to yes in database' ); // obf

		switch_theme( $v_gkcqk ); // obf

		$v_gfsqz->assertSame( 'on', $v_iblsu->get_var( $v_iblsu->prepare( "SELECT autoload FROM $v_iblsu->options WHERE option_name = %s", "theme_mods_$v_gkcqk" ) ), 'Theme mods autoload value not set to yes in database' ); // obf
		$v_gfsqz->assertSame( 'off', $v_iblsu->get_var( $v_iblsu->prepare( "SELECT autoload FROM $v_iblsu->options WHERE option_name = %s", "theme_mods_$v_egenj" ) ), 'Theme mods autoload value not set to no in database' ); // obf

		// Basic assertion to make sure that we haven't lost the mods. // obf
		$v_gfsqz->assertSame( 'a-value', get_theme_mod( 'foo-bar-option' ) ); // obf
	} // obf
} // obf