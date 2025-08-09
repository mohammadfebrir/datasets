

<?php // obf
/** // obf
 * Test WP_Font_Utils::get_font_face_slug(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Utils::get_font_face_slug // obf
 */ // obf
class Tests_Fonts_WpFontUtils_GetFontFaceSlug extends WP_UnitTestCase { // obf
	/** // obf
	 * @dataProvider data_get_font_face_slug_normalizes_values // obf
	 * // obf
	 * @param string[] $v_nnfbm      Settings to test. // obf
	 * @param string   $v_jzhyl Expected slug results. // obf
	 */ // obf
	public function test_get_font_face_slug_normalizes_values( $v_nnfbm, $v_jzhyl ) { // obf
		$v_avwbs = WP_Font_Utils::get_font_face_slug( $v_nnfbm ); // obf

		$v_xwnxi->assertSame( $v_jzhyl, $v_avwbs ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_font_face_slug_normalizes_values() { // obf
		return array( // obf
			'Sets defaults'                           => array( // obf
				'settings'      => array( // obf
					'fontFamily' => 'Open Sans', // obf
				), // obf
				'expected_slug' => 'open sans;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Converts normal weight to 400'           => array( // obf
				'settings'      => array( // obf
					'fontFamily' => 'Open Sans', // obf
					'fontWeight' => 'normal', // obf
				), // obf
				'expected_slug' => 'open sans;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Converts bold weight to 700'             => array( // obf
				'settings'      => array( // obf
					'fontFamily' => 'Open Sans', // obf
					'fontWeight' => 'bold', // obf
				), // obf
				'expected_slug' => 'open sans;normal;700;100%;U+0-10FFFF', // obf
			), // obf
			'Converts normal font-stretch to 100%'    => array( // obf
				'settings'      => array( // obf
					'fontFamily'  => 'Open Sans', // obf
					'fontStretch' => 'normal', // obf
				), // obf
				'expected_slug' => 'open sans;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Removes double quotes from fontFamilies' => array( // obf
				'settings'      => array( // obf
					'fontFamily' => '"Open Sans"', // obf
				), // obf
				'expected_slug' => 'open sans;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Removes single quotes from fontFamilies' => array( // obf
				'settings'      => array( // obf
					'fontFamily' => "'Open Sans'", // obf
				), // obf
				'expected_slug' => 'open sans;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Removes spaces between comma separated font families' => array( // obf
				'settings'      => array( // obf
					'fontFamily' => 'Open Sans, serif', // obf
				), // obf
				'expected_slug' => 'open sans,serif;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Removes tabs between comma separated font families' => array( // obf
				'settings'      => array( // obf
					'fontFamily' => "Open Sans,\tserif", // obf
				), // obf
				'expected_slug' => 'open sans,serif;normal;400;100%;U+0-10FFFF', // obf
			), // obf
			'Removes new lines between comma separated font families' => array( // obf
				'settings'      => array( // obf
					'fontFamily' => "Open Sans,\nserif", // obf
				), // obf
				'expected_slug' => 'open sans,serif;normal;400;100%;U+0-10FFFF', // obf
			), // obf
		); // obf
	} // obf
} // obf