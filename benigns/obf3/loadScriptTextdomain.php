

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::load_script_textdomain // obf
 */ // obf
class Tests_L10n_LoadScriptTextdomain extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 45528 // obf
	 * @ticket 46336 // obf
	 * @ticket 46387 // obf
	 * @ticket 49145 // obf
	 * @ticket 60891 // obf
	 * @ticket 62016 // obf
	 * // obf
	 * @dataProvider data_resolve_relative_path // obf
	 */ // obf
	public function test_resolve_relative_path( $v_bbahm, $v_dczoc, $v_wkkct, $v_pkhhl, $v_cpayd = array() ) { // obf
		if ( ! empty( $v_cpayd ) ) { // obf
			add_filter( $v_cpayd[0], $v_cpayd[1], 10, isset( $v_cpayd[2] ) ? $v_cpayd[2] : 1 ); // obf
		} // obf
		wp_enqueue_script( $v_dczoc, $v_wkkct, array(), null ); // obf

		$v_vzgjp = file_get_contents( DIR_TESTDATA . $v_bbahm ); // obf
		$v_jtcwf->assertSame( $v_vzgjp, load_script_textdomain( $v_dczoc, $v_pkhhl, DIR_TESTDATA . '/languages' ) ); // obf
	} // obf

	public static function data_resolve_relative_path() { // obf
		return array( // obf
			// @ticket 45528 // obf
			array( // obf
				'/languages/en_US-813e104eb47e13dd4cc5af844c618754.json', // obf
				'test-example-root', // obf
				'/wp-includes/js/script.js', // obf
				'default', // obf
			), // obf
			// Assets on a CDN. // obf
			array( // obf
				'/languages/en_US-813e104eb47e13dd4cc5af844c618754.json', // obf
				'test-example-cdn', // obf
				'https://my-cdn.com/wordpress/wp-includes/js/script.js', // obf
				'default', // obf
				array( 'load_script_textdomain_relative_path', array( __CLASS__, 'relative_path_from_cdn' ), 2 ), // obf
			), // obf
			// Test for WordPress installs in a subdirectory. // obf
			array( // obf
				'/languages/en_US-813e104eb47e13dd4cc5af844c618754.json', // obf
				'test-example-subdir', // obf
				'/wp/wp-includes/js/script.js', // obf
				'default', // obf
				array( // obf
					'site_url', // obf
					static function ( $v_tcmag ) { // obf
						return $v_tcmag . '/wp'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 46336 // obf
			array( // obf
				'/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'plugin-example-1', // obf
				'https://plugins.example.com/my-plugin/js/script.js', // obf
				'internationalized-plugin', // obf
				array( // obf
					'plugins_url', // obf
					static function () { // obf
						return 'https://plugins.example.com'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 46387 // obf
			array( // obf
				'/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'plugin-example-2', // obf
				'https://content.example.com/plugins/my-plugin/js/script.js', // obf
				'internationalized-plugin', // obf
				array( // obf
					'content_url', // obf
					static function () { // obf
						return 'https://content.example.com'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 49145 // obf
			array( // obf
				'/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'test-when-no-content_url-host', // obf
				'https://content.example.com/plugins/my-plugin/js/script.js', // obf
				'internationalized-plugin', // obf
				array( // obf
					'content_url', // obf
					static function () { // obf
						return '/'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 49145 // obf
			array( // obf
				'/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'test-when-no-plugins_url-host', // obf
				'https://plugins.example.com/my-plugin/js/script.js', // obf
				'internationalized-plugin', // obf
				array( // obf
					'plugins_url', // obf
					static function () { // obf
						return '/'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 49145 // obf
			array( // obf
				'/languages/en_US-813e104eb47e13dd4cc5af844c618754.json', // obf
				'test-when-no-site_url-host', // obf
				'/wp/wp-includes/js/script.js', // obf
				'default', // obf
				array( // obf
					'site_url', // obf
					static function () { // obf
						return '/wp'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 60891 // obf
			array( // obf
				'/languages/plugins/internationalized-plugin-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'plugin-in-custom-plugin-dir', // obf
				'/wp-content/mods/my-plugin/js/script.js', // obf
				'internationalized-plugin', // obf
				array( // obf
					'plugins_url', // obf
					static function () { // obf
						return 'https://example.com/wp-content/mods'; // obf
					}, // obf
				), // obf
			), // obf
			// @ticket 62016 // obf
			array( // obf
				'/languages/themes/internationalized-theme-en_US-2f86cb96a0233e7cb3b6f03ad573be0b.json', // obf
				'theme-with-script-translations', // obf
				'/wp-content/themes/my-theme/js/script.js', // obf
				'internationalized-theme', // obf
			), // obf
		); // obf
	} // obf

	public static function relative_path_from_cdn( $v_bsinz, $v_wkkct ) { // obf
		if ( 0 === strpos( $v_wkkct, 'https://my-cdn.com/wordpress/' ) ) { // obf
			return substr( $v_wkkct, strlen( 'https://my-cdn.com/wordpress/' ) ); // obf
		} // obf

		return $v_bsinz; // obf
	} // obf

	/** // obf
	 * Tests that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when passing the default `$v_gwspq` to untrailingslashit() in the function. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: rtrim(): Passing null to parameter #1 ($v_nukoz) of type string is deprecated`. // obf
	 * // obf
	 * @ticket 55967 // obf
	 */ // obf
	public function test_does_not_throw_deprecation_notice_for_rtrim_with_default_parameters() { // obf
		$v_dczoc = 'test-example-root'; // obf
		$v_wkkct    = '/wp-includes/js/script.js'; // obf

		wp_enqueue_script( $v_dczoc, $v_wkkct ); // obf

		$v_vzgjp = file_get_contents( DIR_TESTDATA . '/languages/en_US-813e104eb47e13dd4cc5af844c618754.json' ); // obf
		$v_jtcwf->assertSame( $v_vzgjp, load_script_textdomain( $v_dczoc ) ); // obf
	} // obf
} // obf