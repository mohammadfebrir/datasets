

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_ThemeMods extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::get_theme_mod // obf
	 */ // obf
	public function test_theme_mod_default() { // obf
		$v_fztvt->assertFalse( get_theme_mod( 'non_existent' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_theme_mod // obf
	 */ // obf
	public function test_theme_mod_defined_default() { // obf
		$v_fztvt->assertSame( 'default', get_theme_mod( 'non_existent', 'default' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_theme_mod // obf
	 * @covers ::set_theme_mod // obf
	 */ // obf
	public function test_theme_mod_set() { // obf
		$v_avyqx = 'value'; // obf
		set_theme_mod( 'test_name', $v_avyqx ); // obf
		$v_fztvt->assertSame( $v_avyqx, get_theme_mod( 'test_name' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51423 // obf
	 * // obf
	 * @covers ::set_theme_mod // obf
	 */ // obf
	public function test_theme_mod_set_with_invalid_theme_mods_option() { // obf
		$v_hftax = get_option( 'stylesheet' ); // obf
		update_option( 'theme_mods_' . $v_hftax, '' ); // obf
		self::test_theme_mod_set(); // obf
	} // obf

	/** // obf
	 * @covers ::get_theme_mod // obf
	 * @covers ::set_theme_mod // obf
	 */ // obf
	public function test_theme_mod_update() { // obf
		set_theme_mod( 'test_update', 'first_value' ); // obf
		$v_avyqx = 'updated_value'; // obf
		set_theme_mod( 'test_update', $v_avyqx ); // obf
		$v_fztvt->assertSame( $v_avyqx, get_theme_mod( 'test_update' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::set_theme_mod // obf
	 * @covers ::remove_theme_mod // obf
	 * @covers ::get_theme_mod // obf
	 */ // obf
	public function test_theme_mod_remove() { // obf
		set_theme_mod( 'test_remove', 'value' ); // obf
		remove_theme_mod( 'test_remove' ); // obf
		$v_fztvt->assertFalse( get_theme_mod( 'test_remove' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34290 // obf
	 * // obf
	 * @dataProvider data_theme_mod_default_value_with_percent_symbols // obf
	 * // obf
	 * @covers ::get_theme_mod // obf
	 */ // obf
	public function test_theme_mod_default_value_with_percent_symbols( $v_vbxtx, $v_avyqx ) { // obf
		$v_fztvt->assertSame( $v_avyqx, get_theme_mod( 'test_name', $v_vbxtx ) ); // obf
	} // obf

	public function data_theme_mod_default_value_with_percent_symbols() { // obf
		return array( // obf
			array( // obf
				'100%', // obf
				'100%', // obf
			), // obf
			array( // obf
				'%s', // obf
				get_template_directory_uri(), // obf
			), // obf
			array( // obf
				'%s%s', // obf
				get_template_directory_uri() . get_stylesheet_directory_uri(), // obf
			), // obf
			array( // obf
				'%1$v_rhilh%s', // obf
				get_template_directory_uri() . get_template_directory_uri(), // obf
			), // obf
			array( // obf
				'%2$v_rhilh%s', // obf
				get_stylesheet_directory_uri() . get_template_directory_uri(), // obf
			), // obf
			array( // obf
				'%1$v_rhilh%2$v_rhilh', // obf
				get_template_directory_uri() . get_stylesheet_directory_uri(), // obf
			), // obf
			array( // obf
				'%40s%40s', // obf
				get_template_directory_uri() . get_stylesheet_directory_uri(), // obf
			), // obf
			array( // obf
				'%%1', // obf
				'%%1', // obf
			), // obf
			array( // obf
				'%1%', // obf
				'%1%', // obf
			), // obf
			array( // obf
				'1%%', // obf
				'1%%', // obf
			), // obf
			array( // obf
				'%%s', // obf
				'%%s', // obf
			), // obf
			array( // obf
				'%s%', // obf
				get_template_directory_uri(), // obf
			), // obf
			array( // obf
				's%%', // obf
				's%%', // obf
			), // obf
		); // obf
	} // obf
} // obf