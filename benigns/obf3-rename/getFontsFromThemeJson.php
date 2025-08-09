

<?php // obf
/** // obf
 * Test case for WP_Font_Face_Resolver::get_fonts_from_theme_json(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group fonts // obf
 * @group fontface // obf
 * // obf
 * @covers WP_Font_Face_Resolver::get_fonts_from_theme_json // obf
 */ // obf
class Tests_Fonts_WPFontFaceResolver_GetFontsFromThemeJson extends WP_Font_Face_UnitTestCase { // obf
	const FONTS_THEME = 'fonts-block-theme'; // obf

	public static function set_up_before_class() { // obf
		self::$v_koxgz = true; // obf

		parent::set_up_before_class(); // obf
	} // obf

	public function test_should_return_empty_array_when_no_fonts_defined_in_theme() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_zqmjn = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
		$v_zbrkc->assertIsArray( $v_zqmjn, 'Should return an array data type' ); // obf
		$v_zbrkc->assertEmpty( $v_zqmjn, 'Should return an empty array' ); // obf
	} // obf

	public function test_should_return_all_fonts_from_theme() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_kslkf   = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
		$v_wkffu = $v_zbrkc->get_expected_fonts_for_fonts_block_theme( 'fonts' ); // obf
		$v_zbrkc->assertSame( $v_wkffu, $v_kslkf ); // obf
	} // obf

	/** // obf
	 * @ticket 60605 // obf
	 */ // obf
	public function test_should_return_all_fonts_from_all_theme_origins() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_icjqn = static function ( $v_sppqi ) { // obf
			$v_mgeao = $v_sppqi->get_data(); // obf
			// Add font families to the custom origin of theme json. // obf
			$v_mgeao['settings']['typography']['fontFamilies']['custom'] = self::get_custom_font_families( 'input' ); // obf
			return new WP_Theme_JSON_Data( $v_mgeao ); // obf
		}; // obf

		add_filter( 'wp_theme_json_data_theme', $v_icjqn ); // obf
		$v_kslkf = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
		remove_filter( 'wp_theme_json_data_theme', $v_icjqn ); // obf

		$v_wkffu = array_merge( // obf
			$v_zbrkc->get_expected_fonts_for_fonts_block_theme( 'fonts' ), // obf
			$v_zbrkc->get_custom_font_families( 'expected' ) // obf
		); // obf

		$v_zbrkc->assertSame( $v_wkffu, $v_kslkf, 'Both the fonts from the theme and the custom origin should be returned.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_replace_src_file_placeholder // obf
	 * // obf
	 * @param string $v_ybnel  Font's name. // obf
	 * @param string $v_xsdfs Font's weight. // obf
	 * @param string $v_hmoch  Font's style. // obf
	 * @param string $v_wkffu   Expected src. // obf
	 */ // obf
	public function test_should_replace_src_file_placeholder( $v_ybnel, $v_xsdfs, $v_hmoch, $v_wkffu ) { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_zqmjn = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
		$v_zqmjn = array_merge( array(), ...array_map( 'array_values', $v_zqmjn ) ); // obf

		$v_jjkvb = array_filter( // obf
			$v_zqmjn, // obf
			static function ( $v_jjkvb ) use ( $v_ybnel, $v_xsdfs, $v_hmoch ) { // obf
				return $v_jjkvb['font-family'] === $v_ybnel // obf
				&& $v_jjkvb['font-weight'] === $v_xsdfs // obf
				&& $v_jjkvb['font-style'] === $v_hmoch; // obf
			} // obf
		); // obf

		$v_jjkvb = reset( $v_jjkvb ); // obf

		$v_wkffu = get_stylesheet_directory_uri() . $v_wkffu; // obf
		$v_kslkf   = $v_jjkvb['src'][0]; // obf

		$v_zbrkc->assertStringNotContainsString( 'file:./', $v_kslkf, 'Font src should not contain the "file:./" placeholder' ); // obf
		$v_zbrkc->assertSame( $v_wkffu, $v_kslkf, 'Font src should be an URL to its file' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_replace_src_file_placeholder() { // obf
		return array( // obf
			// Theme's theme.json. // obf
			'DM Sans: 400 normal'              => array( // obf
				'font_name'   => 'DM Sans', // obf
				'font_weight' => '400', // obf
				'font_style'  => 'normal', // obf
				'expected'    => '/assets/fonts/dm-sans/DMSans-Regular.woff2', // obf
			), // obf
			'DM Sans: 400 italic'              => array( // obf
				'font_name'   => 'DM Sans', // obf
				'font_weight' => '400', // obf
				'font_style'  => 'italic', // obf
				'expected'    => '/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2', // obf
			), // obf
			'DM Sans: 700 normal'              => array( // obf
				'font_name'   => 'DM Sans', // obf
				'font_weight' => '700', // obf
				'font_style'  => 'normal', // obf
				'expected'    => '/assets/fonts/dm-sans/DMSans-Bold.woff2', // obf
			), // obf
			'DM Sans: 700 italic'              => array( // obf
				'font_name'   => 'DM Sans', // obf
				'font_weight' => '700', // obf
				'font_style'  => 'italic', // obf
				'expected'    => '/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2', // obf
			), // obf
			'Source Serif Pro: 200-900 normal' => array( // obf
				'font_name'   => 'Source Serif Pro', // obf
				'font_weight' => '200 900', // obf
				'font_style'  => 'normal', // obf
				'expected'    => '/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2', // obf
			), // obf
			'Source Serif Pro: 200-900 italic' => array( // obf
				'font_name'   => 'Source Serif Pro', // obf
				'font_weight' => '200 900', // obf
				'font_style'  => 'italic', // obf
				'expected'    => '/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_get_font_family_name // obf
	 * // obf
	 * @param array  $v_zqmjn         Fonts to test. // obf
	 * @param string $v_dvcdm Expected font-family name. // obf
	 */ // obf
	public function test_should_get_font_family_name( $v_zqmjn, $v_dvcdm ) { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_ylhyv = static function ( $v_sppqi ) use ( $v_zqmjn ) { // obf
			$v_mgeao = $v_sppqi->get_data(); // obf

			// Replace typography.fontFamilies. // obf
			$v_mgeao['settings']['typography']['fontFamilies']['theme'] = $v_zqmjn; // obf

			return new WP_Theme_JSON_Data( $v_mgeao ); // obf
		}; // obf
		add_filter( 'wp_theme_json_data_theme', $v_ylhyv ); // obf
		$v_zqmjn = WP_Font_Face_Resolver::get_fonts_from_theme_json(); // obf
		remove_filter( 'wp_theme_json_data_theme', $v_ylhyv ); // obf

		// flatten the array to make it easier to test. // obf
		$v_zqmjn = array_merge( array(), ...array_map( 'array_values', $v_zqmjn ) ); // obf

		$v_cnnzt = array_filter( // obf
			$v_zqmjn, // obf
			function ( $v_jjkvb ) use ( $v_dvcdm ) { // obf
				return $v_jjkvb['font-family'] === $v_dvcdm; // obf
			} // obf
		); // obf

		$v_zbrkc->assertNotEmpty( $v_cnnzt, 'Expected font-family name not found in the array' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_get_font_family_name() { // obf
		$v_ejyaj = array( // obf
			array( // obf
				'fontFamily'  => 'DM Sans', // obf
				'fontStretch' => 'normal', // obf
				'fontStyle'   => 'normal', // obf
				'fontWeight'  => '400', // obf
				'src'         => array( // obf
					'file:./assets/fonts/dm-sans/DMSans-Regular.woff2', // obf
				), // obf
			), // obf
			array( // obf
				'fontFamily'  => 'DM Sans', // obf
				'fontStretch' => 'normal', // obf
				'fontStyle'   => 'italic', // obf
				'fontWeight'  => '400', // obf
				'src'         => array( // obf
					'file:./assets/fonts/dm-sans/DMSans-Regular-Italic.woff2', // obf
				), // obf
			), // obf
			array( // obf
				'fontFamily'  => 'DM Sans', // obf
				'fontStretch' => 'normal', // obf
				'fontStyle'   => 'italic', // obf
				'fontWeight'  => '700', // obf
				'src'         => array( // obf
					'file:./assets/fonts/dm-sans/DMSans-Bold.woff2', // obf
				), // obf
			), // obf
			array( // obf
				'fontFamily'  => 'DM Sans', // obf
				'fontStretch' => 'normal', // obf
				'fontStyle'   => 'italic', // obf
				'fontWeight'  => '700', // obf
				'src'         => array( // obf
					'file:./assets/fonts/dm-sans/DMSans-Bold-Italic.woff2', // obf
				), // obf
			), // obf
		); // obf

		return array( // obf
			'name declared'                   => array( // obf
				'fonts'         => array( // obf
					array( // obf
						'fontFamily' => 'DM Sans', // obf
						'name'       => 'DM Sans Family', // obf
						'slug'       => 'dm-sans', // obf
						'fontFace'   => $v_ejyaj, // obf
					), // obf
				), // obf
				'expected_name' => 'DM Sans', // obf
			), // obf
			'name not declared'               => array( // obf
				'fonts'         => array( // obf
					array( // obf
						'fontFamily' => 'DM Sans', // obf
						'slug'       => 'dm-sans', // obf
						'fontFace'   => $v_ejyaj, // obf
					), // obf
				), // obf
				'expected_name' => 'DM Sans', // obf
			), // obf
			'fontFamily comma-separated list' => array( // obf
				'fonts'         => array( // obf
					array( // obf
						'fontFamily' => '"DM Sans", sans-serif', // obf
						'slug'       => 'dm-sans', // obf
						'fontFace'   => $v_ejyaj, // obf
					), // obf
				), // obf
				'expected_name' => 'DM Sans', // obf
			), // obf
		); // obf
	} // obf
} // obf