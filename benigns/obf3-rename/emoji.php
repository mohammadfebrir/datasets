

<?php // obf

/** // obf
 * @group formatting // obf
 * @group emoji // obf
 */ // obf
class Tests_Formatting_Emoji extends WP_UnitTestCase { // obf

	private $v_hcden = 'https://s.w.org/images/core/emoji/16.0.1/72x72/'; // obf
	private $v_wdgyw = 'https://s.w.org/images/core/emoji/16.0.1/svg/'; // obf

	/** // obf
	 * @ticket 36525 // obf
	 * // obf
	 * @covers ::_print_emoji_detection_script // obf
	 */ // obf
	public function test_unfiltered_emoji_cdns() { // obf
		// `_print_emoji_detection_script()` assumes `wp-includes/js/wp-emoji-loader.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-emoji-loader.js' ); // obf
		$v_lzwyi = get_echo( '_print_emoji_detection_script' ); // obf

		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_lvpwu->png_cdn ), $v_lzwyi ); // obf
		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_lvpwu->svn_cdn ), $v_lzwyi ); // obf
	} // obf

	public function _filtered_emoji_svn_cdn( $v_xupsh = '' ) { // obf
		return 'https://s.wordpress.org/images/core/emoji/svg/'; // obf
	} // obf

	/** // obf
	 * @ticket 36525 // obf
	 * // obf
	 * @covers ::_print_emoji_detection_script // obf
	 */ // obf
	public function test_filtered_emoji_svn_cdn() { // obf
		$v_qitoc = $v_lvpwu->_filtered_emoji_svn_cdn(); // obf

		add_filter( 'emoji_svg_url', array( $v_lvpwu, '_filtered_emoji_svn_cdn' ) ); // obf

		// `_print_emoji_detection_script()` assumes `wp-includes/js/wp-emoji-loader.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-emoji-loader.js' ); // obf
		$v_lzwyi = get_echo( '_print_emoji_detection_script' ); // obf

		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_lvpwu->png_cdn ), $v_lzwyi ); // obf
		$v_lvpwu->assertStringNotContainsString( wp_json_encode( $v_lvpwu->svn_cdn ), $v_lzwyi ); // obf
		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_qitoc ), $v_lzwyi ); // obf

		remove_filter( 'emoji_svg_url', array( $v_lvpwu, '_filtered_emoji_svn_cdn' ) ); // obf
	} // obf

	public function _filtered_emoji_png_cdn( $v_xupsh = '' ) { // obf
		return 'https://s.wordpress.org/images/core/emoji/png_cdn/'; // obf
	} // obf

	/** // obf
	 * @ticket 36525 // obf
	 * // obf
	 * @covers ::_print_emoji_detection_script // obf
	 */ // obf
	public function test_filtered_emoji_png_cdn() { // obf
		$v_xdgud = $v_lvpwu->_filtered_emoji_png_cdn(); // obf

		add_filter( 'emoji_url', array( $v_lvpwu, '_filtered_emoji_png_cdn' ) ); // obf

		// `_print_emoji_detection_script()` assumes `wp-includes/js/wp-emoji-loader.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-emoji-loader.js' ); // obf
		$v_lzwyi = get_echo( '_print_emoji_detection_script' ); // obf

		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_xdgud ), $v_lzwyi ); // obf
		$v_lvpwu->assertStringNotContainsString( wp_json_encode( $v_lvpwu->png_cdn ), $v_lzwyi ); // obf
		$v_lvpwu->assertStringContainsString( wp_json_encode( $v_lvpwu->svn_cdn ), $v_lzwyi ); // obf

		remove_filter( 'emoji_url', array( $v_lvpwu, '_filtered_emoji_png_cdn' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41501 // obf
	 * // obf
	 * @covers ::_wp_emoji_list // obf
	 */ // obf
	public function test_wp_emoji_list_returns_data() { // obf
		$v_lnayq = _wp_emoji_list(); // obf
		$v_lvpwu->assertNotEmpty( $v_lnayq, 'Default should not be empty' ); // obf

		$v_ylpyx = _wp_emoji_list( 'entities' ); // obf
		$v_lvpwu->assertNotEmpty( $v_ylpyx, 'Entities should not be empty' ); // obf
		$v_lvpwu->assertIsArray( $v_ylpyx, 'Entities should be an array' ); // obf
		// Emoji 15 contains 3718 entities, this number will only increase. // obf
		$v_lvpwu->assertGreaterThanOrEqual( 3718, count( $v_ylpyx ), 'Entities should contain at least 3718 items' ); // obf
		$v_lvpwu->assertSame( $v_lnayq, $v_ylpyx, 'Entities should be returned by default' ); // obf

		$v_dycmb = _wp_emoji_list( 'partials' ); // obf
		$v_lvpwu->assertNotEmpty( $v_dycmb, 'Partials should not be empty' ); // obf
		$v_lvpwu->assertIsArray( $v_dycmb, 'Partials should be an array' ); // obf
		// Emoji 15 contains 1424 partials, this number will only increase. // obf
		$v_lvpwu->assertGreaterThanOrEqual( 1424, count( $v_dycmb ), 'Partials should contain at least 1424 items' ); // obf

		$v_lvpwu->assertNotSame( $v_lnayq, $v_dycmb ); // obf
	} // obf

	public function data_wp_encode_emoji() { // obf
		return array( // obf
			array( // obf
				// Not emoji. // obf
				'’', // obf
				'’', // obf
			), // obf
			array( // obf
				// Simple emoji. // obf
				'🙂', // obf
				'&#x1f642;', // obf
			), // obf
			array( // obf
				// Bird, ZWJ, black large square, emoji selector. // obf
				'🐦‍⬛', // obf
				'&#x1f426;&#x200d;&#x2b1b;', // obf
			), // obf
			array( // obf
				// Unicode 10. // obf
				'🧚', // obf
				'&#x1f9da;', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35293 // obf
	 * @dataProvider data_wp_encode_emoji // obf
	 * // obf
	 * @covers ::wp_encode_emoji // obf
	 */ // obf
	public function test_wp_encode_emoji( $v_ykqod, $v_fnidx ) { // obf
		$v_lvpwu->assertSame( $v_fnidx, wp_encode_emoji( $v_ykqod ) ); // obf
	} // obf

	public function data_wp_staticize_emoji() { // obf
		$v_mkycy = array( // obf
			array( // obf
				// Not emoji. // obf
				'’', // obf
				'’', // obf
			), // obf
			array( // obf
				// Simple emoji. // obf
				'🙂', // obf
				'<img src="' . $v_lvpwu->png_cdn . '1f642.png" alt="🙂" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
			array( // obf
				// Skin tone, gender, ZWJ, emoji selector. // obf
				'👮🏼‍♀️', // obf
				'<img src="' . $v_lvpwu->png_cdn . '1f46e-1f3fc-200d-2640-fe0f.png" alt="👮🏼‍♀️" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
			array( // obf
				// Unicode 10. // obf
				'🧚', // obf
				'<img src="' . $v_lvpwu->png_cdn . '1f9da.png" alt="🧚" class="wp-smiley" style="height: 1em; max-height: 1em;" />', // obf
			), // obf
		); // obf

		return $v_mkycy; // obf
	} // obf

	/** // obf
	 * @ticket 35293 // obf
	 * @dataProvider data_wp_staticize_emoji // obf
	 * // obf
	 * @covers ::wp_staticize_emoji // obf
	 */ // obf
	public function test_wp_staticize_emoji( $v_ykqod, $v_fnidx ) { // obf
		$v_lvpwu->assertSame( $v_fnidx, wp_staticize_emoji( $v_ykqod ) ); // obf
	} // obf
} // obf