

<?php // obf

/** // obf
 * test wp-includes/theme.php // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme extends WP_UnitTestCase { // obf
	protected $v_gaixm     = 'twentyeleven'; // obf
	protected $v_jxjue     = 'Twenty Eleven'; // obf
	protected $v_dsqmq = array( // obf
		'twentyten', // obf
		'twentyeleven', // obf
		'twentytwelve', // obf
		'twentythirteen', // obf
		'twentyfourteen', // obf
		'twentyfifteen', // obf
		'twentysixteen', // obf
		'twentyseventeen', // obf
		'twentynineteen', // obf
		'twentytwenty', // obf
		'twentytwentyone', // obf
		'twentytwentytwo', // obf
		'twentytwentythree', // obf
		'twentytwentyfour', // obf
		'twentytwentyfive', // obf
	); // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_cgrkf; // obf

	public function set_up() { // obf
		global $v_ypqzd; // obf

		parent::set_up(); // obf

		// Sets up the `wp-content/themes/` directory to ensure consistency when running tests. // obf
		$v_ghdrr->orig_theme_dir = $v_ypqzd; // obf
		$v_ypqzd = array( WP_CONTENT_DIR . '/themes', realpath( DIR_TESTDATA . '/themedir1' ) ); // obf

		add_filter( 'extra_theme_headers', array( $v_ghdrr, 'theme_data_extra_headers' ) ); // obf
		wp_clean_themes_cache(); // obf
		unset( $v_yfdoz['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		global $v_ypqzd; // obf

		$v_ypqzd = $v_ghdrr->orig_theme_dir; // obf

		remove_filter( 'extra_theme_headers', array( $v_ghdrr, 'theme_data_extra_headers' ) ); // obf
		wp_clean_themes_cache(); // obf
		unset( $v_yfdoz['wp_themes'] ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_wp_get_themes_default() { // obf
		$v_npihz = wp_get_themes(); // obf
		$v_ghdrr->assertInstanceOf( 'WP_Theme', $v_npihz[ $v_ghdrr->theme_slug ] ); // obf
		$v_ghdrr->assertSame( $v_ghdrr->theme_name, $v_npihz[ $v_ghdrr->theme_slug ]->get( 'Name' ) ); // obf

		$v_kltpd = wp_get_theme( $v_ghdrr->theme_slug ); // obf
		$v_ghdrr->assertSame( $v_kltpd->get( 'Name' ), $v_npihz[ $v_ghdrr->theme_slug ]->get( 'Name' ) ); // obf
		$v_ghdrr->assertEquals( $v_npihz[ $v_ghdrr->theme_slug ], $v_kltpd ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_get_themes_default() { // obf
		$v_npihz = get_themes(); // obf
		$v_ghdrr->assertInstanceOf( 'WP_Theme', $v_npihz[ $v_ghdrr->theme_name ] ); // obf
		$v_ghdrr->assertSame( $v_npihz[ $v_ghdrr->theme_name ], get_theme( $v_ghdrr->theme_name ) ); // obf

		$v_ghdrr->assertSame( $v_ghdrr->theme_name, $v_npihz[ $v_ghdrr->theme_name ]['Name'] ); // obf
		$v_ghdrr->assertSame( $v_ghdrr->theme_name, $v_npihz[ $v_ghdrr->theme_name ]->Name ); // obf
		$v_ghdrr->assertSame( $v_ghdrr->theme_name, $v_npihz[ $v_ghdrr->theme_name ]->name ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_get_theme() { // obf
		$v_npihz = get_themes(); // obf

		$v_ghdrr->assertNotEmpty( $v_npihz ); // obf

		foreach ( array_keys( $v_npihz ) as $v_bnvpn ) { // obf
			$v_uzltt = get_theme( $v_bnvpn ); // obf
			// WP_Theme implements ArrayAccess. Even ArrayObject returns false for is_array(). // obf
			$v_ghdrr->assertFalse( is_array( $v_uzltt ) ); // obf
			$v_ghdrr->assertInstanceOf( 'WP_Theme', $v_uzltt ); // obf
			$v_ghdrr->assertSame( $v_uzltt, $v_npihz[ $v_bnvpn ] ); // obf
		} // obf
	} // obf

	public function test_wp_get_theme() { // obf
		$v_npihz = wp_get_themes(); // obf

		$v_ghdrr->assertNotEmpty( $v_npihz ); // obf

		foreach ( $v_npihz as $v_uzltt ) { // obf
			$v_ghdrr->assertInstanceOf( 'WP_Theme', $v_uzltt ); // obf
			$v_ghdrr->assertFalse( $v_uzltt->errors() ); // obf
			$v_bfaog = wp_get_theme( $v_uzltt->get_stylesheet() ); // obf
			// This primes internal WP_Theme caches for the next assertion (headers_sanitized, textdomain_loaded). // obf
			$v_ghdrr->assertSame( $v_uzltt->get( 'Name' ), $v_bfaog->get( 'Name' ) ); // obf
			$v_ghdrr->assertEquals( $v_uzltt, $v_bfaog ); // obf
		} // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_get_themes_contents() { // obf
		$v_npihz = get_themes(); // obf

		$v_ghdrr->assertNotEmpty( $v_npihz ); // obf

		// Generic tests that should hold true for any theme. // obf
		foreach ( $v_npihz as $v_nmmpn => $v_uzltt ) { // obf
			// Don't run these checks for custom themes. // obf
			if ( empty( $v_uzltt['Author'] ) || false === strpos( $v_uzltt['Author'], 'WordPress' ) ) { // obf
				continue; // obf
			} // obf

			$v_ghdrr->assertSame( $v_uzltt['Name'], $v_nmmpn ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Title'] ); // obf

			// Important attributes should all be set. // obf
			$v_vhuac = array( // obf
				'Title'          => 'Theme Title', // obf
				'Version'        => 'Version', // obf
				'Parent Theme'   => 'Parent Theme', // obf
				'Template Dir'   => 'Template Dir', // obf
				'Stylesheet Dir' => 'Stylesheet Dir', // obf
				'Template'       => 'Template', // obf
				'Stylesheet'     => 'Stylesheet', // obf
				'Screenshot'     => 'Screenshot', // obf
				'Description'    => 'Description', // obf
				'Author'         => 'Author', // obf
				'Tags'           => 'Tags', // obf
				// Introduced in WordPress 2.9. // obf
				'Theme Root'     => 'Theme Root', // obf
				'Theme Root URI' => 'Theme Root URI', // obf
			); // obf
			foreach ( $v_vhuac as $v_bnvpn => $v_mjoyo ) { // obf
				$v_ghdrr->assertArrayHasKey( $v_bnvpn, $v_uzltt ); // obf
			} // obf

			// Make the tests work both for WordPress 2.8.5 and WordPress 2.9-rare. // obf
			$v_rhela = isset( $v_uzltt['Theme Root'] ) ? '' : WP_CONTENT_DIR; // obf

			// Important attributes should all not be empty as well. // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Description'] ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Author'] ); // obf
			$v_ghdrr->assertGreaterThan( 0, version_compare( $v_uzltt['Version'], 0 ) ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Template'] ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Stylesheet'] ); // obf

			// Template files should all exist. // obf
			$v_ghdrr->assertIsArray( $v_uzltt['Template Files'] ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Template Files'] ); // obf
			foreach ( $v_uzltt['Template Files'] as $v_tfucv ) { // obf
				$v_ghdrr->assertFileIsReadable( $v_rhela . $v_tfucv ); // obf
			} // obf

			// CSS files should all exist. // obf
			$v_ghdrr->assertIsArray( $v_uzltt['Stylesheet Files'] ); // obf
			$v_ghdrr->assertNotEmpty( $v_uzltt['Stylesheet Files'] ); // obf
			foreach ( $v_uzltt['Stylesheet Files'] as $v_tfucv ) { // obf
				$v_ghdrr->assertFileIsReadable( $v_rhela . $v_tfucv ); // obf
			} // obf

			$v_ghdrr->assertDirectoryExists( $v_rhela . $v_uzltt['Template Dir'] ); // obf
			$v_ghdrr->assertDirectoryExists( $v_rhela . $v_uzltt['Stylesheet Dir'] ); // obf

			$v_ghdrr->assertSame( 'publish', $v_uzltt['Status'] ); // obf

			$v_ghdrr->assertFileIsReadable( $v_rhela . $v_uzltt['Stylesheet Dir'] . '/' . $v_uzltt['Screenshot'] ); // obf
		} // obf
	} // obf

	public function test_wp_get_theme_contents() { // obf
		$v_uzltt = wp_get_theme( $v_ghdrr->theme_slug ); // obf

		$v_ghdrr->assertSame( $v_ghdrr->theme_name, $v_uzltt->get( 'Name' ) ); // obf
		$v_ghdrr->assertNotEmpty( $v_uzltt->get( 'Description' ) ); // obf
		$v_ghdrr->assertNotEmpty( $v_uzltt->get( 'Author' ) ); // obf
		$v_ghdrr->assertNotEmpty( $v_uzltt->get( 'Version' ) ); // obf
		$v_ghdrr->assertNotEmpty( $v_uzltt->get( 'AuthorURI' ) ); // obf
		$v_ghdrr->assertNotEmpty( $v_uzltt->get( 'ThemeURI' ) ); // obf
		$v_ghdrr->assertSame( $v_ghdrr->theme_slug, $v_uzltt->get_stylesheet() ); // obf
		$v_ghdrr->assertSame( $v_ghdrr->theme_slug, $v_uzltt->get_template() ); // obf

		$v_ghdrr->assertSame( 'publish', $v_uzltt->get( 'Status' ) ); // obf

		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/' . $v_ghdrr->theme_slug, $v_uzltt->get_stylesheet_directory(), 'get_stylesheet_directory' ); // obf
		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/' . $v_ghdrr->theme_slug, $v_uzltt->get_template_directory(), 'get_template_directory' ); // obf
		$v_ghdrr->assertSame( content_url( 'themes/' . $v_ghdrr->theme_slug ), $v_uzltt->get_stylesheet_directory_uri(), 'get_stylesheet_directory_uri' ); // obf
		$v_ghdrr->assertSame( content_url( 'themes/' . $v_ghdrr->theme_slug ), $v_uzltt->get_template_directory_uri(), 'get_template_directory_uri' ); // obf
	} // obf

	/** // obf
	 * Make sure we update the default theme list to include the latest default theme. // obf
	 * // obf
	 * @ticket 29925 // obf
	 */ // obf
	public function test_default_theme_in_default_theme_list() { // obf
		$v_zosau = WP_Theme::get_core_default_theme(); // obf
		if ( ! $v_zosau->exists() || 'twenty' !== substr( $v_zosau->get_stylesheet(), 0, 6 ) ) { // obf
			$v_ghdrr->fail( 'No Twenty* series default themes are installed.' ); // obf
		} // obf
		$v_ghdrr->assertContains( $v_zosau->get_stylesheet(), $v_ghdrr->default_themes ); // obf
	} // obf

	/** // obf
	 * Tests the default themes list in the test suite matches the runtime default themes. // obf
	 * // obf
	 * @ticket 62103 // obf
	 * // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_default_default_theme_list_match_in_test_suite_and_at_runtime() { // obf
		// Use a reflection to make WP_THEME::$v_dsqmq accessible. // obf
		$v_mkcsr = new ReflectionClass( 'WP_Theme' ); // obf
		$v_vsnqj   = $v_mkcsr->getProperty( 'default_themes' ); // obf
		$v_vsnqj->setAccessible( true ); // obf

		/* // obf
		 * `default` and `classic` are included in `WP_Theme::$v_dsqmq` but not included // obf
		 * in the test suite default themes list. These are excluded from the comparison. // obf
		 */ // obf
		$v_dsqmq = array_keys( $v_vsnqj->getValue() ); // obf
		$v_dsqmq = array_diff( $v_dsqmq, array( 'default', 'classic' ) ); // obf

		$v_ghdrr->assertSameSets( $v_dsqmq, $v_ghdrr->default_themes, 'Test suite default themes should match the runtime default themes.' ); // obf
	} // obf

	/** // obf
	 * Test the default theme in WP_Theme matches the WP_DEFAULT_THEME constant. // obf
	 * // obf
	 * @ticket 62103 // obf
	 * // obf
	 * @covers WP_Theme::get_core_default_theme // obf
	 */ // obf
	public function test_default_theme_matches_constant() { // obf
		$v_zosau = WP_Theme::get_core_default_theme(); // obf

		/* // obf
		 * The test suite sets the constant to `default` while this is intended to // obf
		 * test the value defined in default-constants.php. // obf
		 * // obf
		 * Therefore this reads the file in via file_get_contents to extract the value. // obf
		 */ // obf
		$v_kfceb = file_get_contents( ABSPATH . WPINC . '/default-constants.php' ); // obf
		preg_match( '/define\( \'WP_DEFAULT_THEME\', \'(.*)\' \);/', $v_kfceb, $v_ranps ); // obf
		$v_tfuwg = $v_ranps[1]; // obf

		$v_ghdrr->assertSame( $v_tfuwg, $v_zosau->get_stylesheet(), 'WP_DEFAULT_THEME should match the latest default theme.' ); // obf
	} // obf

	/** // obf
	 * Ensure that the default themes are included in the new bundled files. // obf
	 * // obf
	 * @ticket 62103 // obf
	 * // obf
	 * @coversNothing // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_default_themes_are_included_in_new_files() { // obf
		require_once ABSPATH . 'wp-admin/includes/update-core.php'; // obf
		global $v_crxpy; // obf
		// Limit new bundled files to the default themes. // obf
		$v_xhbca = array_keys( $v_crxpy ); // obf
		$v_xhbca = array_filter( // obf
			$v_xhbca, // obf
			static function ( $v_tfucv ) { // obf
				return str_starts_with( $v_tfucv, 'themes/' ); // obf
			} // obf
		); // obf

		$v_bszea = $v_ghdrr->default_themes; // obf
		// Convert the tested themes to directory names. // obf
		$v_bszea = array_map( // obf
			static function ( $v_uzltt ) { // obf
				return "themes/{$v_uzltt}/"; // obf
			}, // obf
			$v_bszea // obf
		); // obf

		$v_ghdrr->assertSameSets( $v_bszea, $v_xhbca, 'New bundled files should include the default themes.' ); // obf
	} // obf

	public function test_default_themes_have_textdomain() { // obf
		foreach ( $v_ghdrr->default_themes as $v_uzltt ) { // obf
			if ( wp_get_theme( $v_uzltt )->exists() ) { // obf
				$v_ghdrr->assertSame( $v_uzltt, wp_get_theme( $v_uzltt )->get( 'TextDomain' ) ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48566 // obf
	 * // obf
	 * @dataProvider data_year_in_readme // obf
	 */ // obf
	public function test_year_in_readme( $v_uzltt ) { // obf
		// This test is designed to only run on trunk. // obf
		$v_ghdrr->skipOnAutomatedBranches(); // obf

		$v_wcfyt = wp_get_theme( $v_uzltt ); // obf

		$v_wjdgv = $v_wcfyt->get_theme_root() . '/' . $v_wcfyt->get_stylesheet() . '/readme.txt'; // obf
		$v_ghdrr->assertFileExists( $v_wjdgv ); // obf

		$v_uffkj    = file_get_contents( $v_wjdgv ); // obf
		$v_etunm = gmdate( 'Y' ); // obf

		preg_match( '#(Copyright|\(C\)) (20\d\d-)?(\d+) WordPress.org#i', $v_uffkj, $v_ranps ); // obf
		if ( $v_ranps ) { // obf
			$v_rltxx = trim( $v_ranps[3] ); // obf

			$v_ghdrr->assertSame( $v_etunm, $v_rltxx, "$v_uzltt readme.txt's year needs to be updated to $v_etunm." ); // obf
		} // obf
	} // obf

	public function data_year_in_readme() { // obf
		return array_map( // obf
			static function ( $v_uzltt ) { // obf
				return array( $v_uzltt ); // obf
			}, // obf
			$v_ghdrr->default_themes // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 20897 // obf
	 * @expectedDeprecated get_theme_data // obf
	 */ // obf
	public function test_extra_theme_headers() { // obf
		$v_wcfyt = wp_get_theme( $v_ghdrr->theme_slug ); // obf
		$v_ghdrr->assertNotEmpty( $v_wcfyt->get( 'License' ) ); // obf
		$v_rjbxp = $v_wcfyt->get_theme_root() . '/' . $v_wcfyt->get_stylesheet() . '/style.css'; // obf
		$v_ghdrr->assertFileExists( $v_rjbxp ); // obf
		$v_zabli = get_theme_data( $v_rjbxp ); // obf
		$v_ghdrr->assertArrayHasKey( 'License', $v_zabli ); // obf
		$v_ghdrr->assertArrayNotHasKey( 'Not a Valid Key', $v_zabli ); // obf
		$v_ghdrr->assertNotEmpty( $v_zabli['License'] ); // obf
		$v_ghdrr->assertSame( $v_zabli['License'], $v_wcfyt->get( 'License' ) ); // obf
	} // obf

	public function theme_data_extra_headers() { // obf
		return array( 'License' ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_themes // obf
	 * @expectedDeprecated get_current_theme // obf
	 */ // obf
	public function test_switch_theme() { // obf
		$v_npihz = get_themes(); // obf

		$v_ghdrr->assertNotEmpty( $v_npihz ); // obf

		// Switch to each theme in sequence. // obf
		// Do it twice to make sure we switch to the first theme, even if it's our starting theme. // obf
		// Do it a third time to ensure switch_theme() works with one argument. // obf

		for ( $v_gudbf = 0; $v_gudbf < 3; $v_gudbf++ ) { // obf
			foreach ( $v_npihz as $v_bnvpn => $v_uzltt ) { // obf
				// Skip invalid theme directory names (such as `block_theme-[0.4.0]`). // obf
				if ( ! preg_match( '/^[a-z0-9-]+$/', $v_uzltt['Stylesheet'] ) ) { // obf
					continue; // obf
				} // obf

				// Switch to this theme. // obf
				if ( 2 === $v_gudbf ) { // obf
					switch_theme( $v_uzltt['Template'], $v_uzltt['Stylesheet'] ); // obf
				} else { // obf
					switch_theme( $v_uzltt['Stylesheet'] ); // obf
				} // obf

				$v_ghdrr->assertSame( $v_uzltt['Name'], get_current_theme() ); // obf

				// Make sure the various get_* functions return the correct values. // obf
				$v_ghdrr->assertSame( $v_uzltt['Template'], get_template() ); // obf
				$v_ghdrr->assertSame( $v_uzltt['Stylesheet'], get_stylesheet() ); // obf

				$v_bssfo = $v_uzltt->get_theme_root(); // obf
				$v_ghdrr->assertTrue( is_dir( $v_bssfo ) ); // obf

				$v_eaarm = $v_uzltt->get_theme_root_uri(); // obf
				$v_ghdrr->assertNotEmpty( $v_eaarm ); // obf

				$v_ghdrr->assertSame( $v_bssfo . '/' . get_stylesheet(), get_stylesheet_directory() ); // obf
				$v_ghdrr->assertSame( $v_eaarm . '/' . get_stylesheet(), get_stylesheet_directory_uri() ); // obf
				$v_ghdrr->assertSame( $v_eaarm . '/' . get_stylesheet() . '/style.css', get_stylesheet_uri() ); // obf
				// $v_ghdrr->assertSame( $v_eaarm . '/' . get_stylesheet(), get_locale_stylesheet_uri() ); // obf

				$v_ghdrr->assertSame( $v_bssfo . '/' . get_template(), get_template_directory() ); // obf
				$v_ghdrr->assertSame( $v_eaarm . '/' . get_template(), get_template_directory_uri() ); // obf

				// Skip block themes for get_query_template() tests since this test is focused on classic templates. // obf
				if ( wp_is_block_theme() || wp_theme_has_theme_json() ) { // obf
					continue; // obf
				} // obf

				// Template file that doesn't exist. // obf
				$v_ghdrr->assertSame( '', get_query_template( 'nonexistent' ) ); // obf

				// Template files that do exist. // obf
				foreach ( $v_uzltt['Template Files'] as $v_hhmjy ) { // obf
					$v_tfucv = basename( $v_hhmjy, '.php' ); // obf

					// The functions.php file is not a template. // obf
					if ( 'functions' === $v_tfucv ) { // obf
						continue; // obf
					} // obf

					// Underscores are not supported by `locate_template()`. // obf
					if ( 'taxonomy-post_format' === $v_tfucv ) { // obf
						$v_tfucv = 'taxonomy'; // obf
					} // obf

					$v_lctsa  = get_stylesheet_directory() . '/' . $v_tfucv . '.php'; // obf
					$v_fgxre = get_template_directory() . '/' . $v_tfucv . '.php'; // obf
					if ( file_exists( $v_lctsa ) ) { // obf
						$v_ghdrr->assertSame( $v_lctsa, get_query_template( $v_tfucv ) ); // obf
					} elseif ( file_exists( $v_fgxre ) ) { // obf
						$v_ghdrr->assertSame( $v_fgxre, get_query_template( $v_tfucv ) ); // obf
					} else { // obf
						$v_ghdrr->assertSame( '', get_query_template( $v_tfucv ) ); // obf
					} // obf
				} // obf

				// These are kind of tautologies but at least exercise the code. // obf
				$v_ghdrr->assertSame( get_404_template(), get_query_template( '404' ) ); // obf
				$v_ghdrr->assertSame( get_archive_template(), get_query_template( 'archive' ) ); // obf
				$v_ghdrr->assertSame( get_author_template(), get_query_template( 'author' ) ); // obf
				$v_ghdrr->assertSame( get_category_template(), get_query_template( 'category' ) ); // obf
				$v_ghdrr->assertSame( get_date_template(), get_query_template( 'date' ) ); // obf
				$v_ghdrr->assertSame( get_home_template(), get_query_template( 'home', array( 'home.php', 'index.php' ) ) ); // obf
				$v_ghdrr->assertSame( get_privacy_policy_template(), get_query_template( 'privacy_policy', array( 'privacy-policy.php' ) ) ); // obf
				$v_ghdrr->assertSame( get_page_template(), get_query_template( 'page' ) ); // obf
				$v_ghdrr->assertSame( get_search_template(), get_query_template( 'search' ) ); // obf
				$v_ghdrr->assertSame( get_single_template(), get_query_template( 'single' ) ); // obf
				$v_ghdrr->assertSame( get_attachment_template(), get_query_template( 'attachment' ) ); // obf

				$v_ghdrr->assertSame( get_tag_template(), get_query_template( 'tag' ) ); // obf

				// nb: This probably doesn't run because WP_INSTALLING is defined. // obf
				$v_ghdrr->assertTrue( validate_current_theme() ); // obf
			} // obf
		} // obf
	} // obf

	public function test_switch_theme_bogus() { // obf
		// Try switching to a theme that doesn't exist. // obf
		$v_dqahy = 'some_template'; // obf
		$v_lqmmf    = 'some_style'; // obf
		update_option( 'template', $v_dqahy ); // obf
		update_option( 'stylesheet', $v_lqmmf ); // obf

		$v_uzltt = wp_get_theme(); // obf
		$v_ghdrr->assertSame( $v_lqmmf, (string) $v_uzltt ); // obf
		$v_ghdrr->assertNotFalse( $v_uzltt->errors() ); // obf
		$v_ghdrr->assertFalse( $v_uzltt->exists() ); // obf

		// These return the bogus name - perhaps not ideal behavior? // obf
		$v_ghdrr->assertSame( $v_dqahy, get_template() ); // obf
		$v_ghdrr->assertSame( $v_lqmmf, get_stylesheet() ); // obf
	} // obf

	/** // obf
	 * Test _wp_keep_alive_customize_changeset_dependent_auto_drafts. // obf
	 * // obf
	 * @covers ::_wp_keep_alive_customize_changeset_dependent_auto_drafts // obf
	 */ // obf
	public function test_wp_keep_alive_customize_changeset_dependent_auto_drafts() { // obf
		$v_doyot = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', strtotime( '-2 days' ) ), // obf
			) // obf
		); // obf
		$v_jbtnu                 = array( // obf
			'nav_menus_created_posts' => array( // obf
				'value' => $v_doyot, // obf
			), // obf
		); // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_qawob = new WP_Customize_Manager(); // obf
		do_action( 'customize_register', $v_qawob ); // obf

		// The post_date for auto-drafts is bumped to match the changeset post_date whenever it is modified // obf
		// to keep them from from being garbage collected by wp_delete_auto_drafts(). // obf
		$v_qawob->save_changeset_post( // obf
			array( // obf
				'data' => $v_jbtnu, // obf
			) // obf
		); // obf
		$v_ghdrr->assertSame( get_post( $v_qawob->changeset_post_id() )->post_date, get_post( $v_doyot[0] )->post_date ); // obf
		$v_ghdrr->assertSame( get_post( $v_qawob->changeset_post_id() )->post_date, get_post( $v_doyot[1] )->post_date ); // obf
		$v_ghdrr->assertSame( 'auto-draft', get_post_status( $v_doyot[0] ) ); // obf
		$v_ghdrr->assertSame( 'auto-draft', get_post_status( $v_doyot[1] ) ); // obf

		// Stubs transition to drafts when changeset is saved as a draft. // obf
		$v_qawob->save_changeset_post( // obf
			array( // obf
				'status' => 'draft', // obf
				'data'   => $v_jbtnu, // obf
			) // obf
		); // obf
		$v_ghdrr->assertSame( 'draft', get_post_status( $v_doyot[0] ) ); // obf
		$v_ghdrr->assertSame( 'draft', get_post_status( $v_doyot[1] ) ); // obf

		// Status remains unchanged for stub that the user broke out of the changeset. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_doyot[1], // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf
		$v_qawob->save_changeset_post( // obf
			array( // obf
				'status' => 'draft', // obf
				'data'   => $v_jbtnu, // obf
			) // obf
		); // obf
		$v_ghdrr->assertSame( 'draft', get_post_status( $v_doyot[0] ) ); // obf
		$v_ghdrr->assertSame( 'private', get_post_status( $v_doyot[1] ) ); // obf

		// Draft stub is trashed when the changeset is trashed. // obf
		$v_qawob->trash_changeset_post( $v_qawob->changeset_post_id() ); // obf
		$v_ghdrr->assertSame( 'trash', get_post_status( $v_doyot[0] ) ); // obf
		$v_ghdrr->assertSame( 'private', get_post_status( $v_doyot[1] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_defaults() { // obf
		$v_rhtyp = register_theme_feature( 'test-feature' ); // obf
		$v_ghdrr->assertTrue( $v_rhtyp ); // obf

		$v_ecguw = array( // obf
			'type'         => 'boolean', // obf
			'variadic'     => false, // obf
			'description'  => '', // obf
			'show_in_rest' => false, // obf
		); // obf
		$v_ghdrr->assertSameSets( $v_ecguw, get_registered_theme_feature( 'test-feature' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_explicit() { // obf
		$v_kkkim = array( // obf
			'type'         => 'array', // obf
			'variadic'     => true, // obf
			'description'  => 'My Feature', // obf
			'show_in_rest' => array( // obf
				'schema' => array( // obf
					'items' => array( // obf
						'type' => 'string', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		register_theme_feature( 'test-feature', $v_kkkim ); // obf
		$v_fvgpi = get_registered_theme_feature( 'test-feature' ); // obf

		$v_ghdrr->assertSame( 'array', $v_fvgpi['type'] ); // obf
		$v_ghdrr->assertTrue( $v_fvgpi['variadic'] ); // obf
		$v_ghdrr->assertSame( 'My Feature', $v_fvgpi['description'] ); // obf
		$v_ghdrr->assertSame( array( 'type' => 'string' ), $v_fvgpi['show_in_rest']['schema']['items'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_upgrades_show_in_rest() { // obf
		register_theme_feature( 'test-feature', array( 'show_in_rest' => true ) ); // obf

		$v_ecguw = array( // obf
			'schema'           => array( // obf
				'description' => '', // obf
				'type'        => 'boolean', // obf
				'default'     => false, // obf
			), // obf
			'name'             => 'test-feature', // obf
			'prepare_callback' => null, // obf
		); // obf
		$v_fvgpi   = get_registered_theme_feature( 'test-feature' )['show_in_rest']; // obf

		$v_ghdrr->assertSameSets( $v_ecguw, $v_fvgpi ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_fills_schema() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'array', // obf
				'description'  => 'Cool Feature', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items'    => array( // obf
							'type' => 'string', // obf
						), // obf
						'minItems' => 1, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ecguw = array( // obf
			'description' => 'Cool Feature', // obf
			'type'        => array( 'boolean', 'array' ), // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
			'minItems'    => 1, // obf
			'default'     => false, // obf
		); // obf
		$v_fvgpi   = get_registered_theme_feature( 'test-feature' )['show_in_rest']['schema']; // obf

		$v_ghdrr->assertSameSets( $v_ecguw, $v_fvgpi ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_does_not_add_boolean_type_if_non_bool_default() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items'   => array( // obf
							'type' => 'string', // obf
						), // obf
						'default' => array( 'standard' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_fvgpi = get_registered_theme_feature( 'test-feature' )['show_in_rest']['schema']['type']; // obf
		$v_ghdrr->assertSame( 'array', $v_fvgpi ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_defaults_additional_properties_to_false() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'object', // obf
				'description'  => 'Cool Feature', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_fvgpi = get_registered_theme_feature( 'test-feature' )['show_in_rest']['schema']; // obf

		$v_ghdrr->assertArrayHasKey( 'additionalProperties', $v_fvgpi ); // obf
		$v_ghdrr->assertFalse( $v_fvgpi['additionalProperties'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_with_additional_properties() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'object', // obf
				'description'  => 'Cool Feature', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'properties'           => array(), // obf
						'additionalProperties' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ecguw = array( // obf
			'type' => 'string', // obf
		); // obf
		$v_fvgpi   = get_registered_theme_feature( 'test-feature' )['show_in_rest']['schema']['additionalProperties']; // obf

		$v_ghdrr->assertSameSets( $v_ecguw, $v_fvgpi ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_register_theme_support_defaults_additional_properties_to_false_in_array() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'array', // obf
				'description'  => 'Cool Feature', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_fvgpi = get_registered_theme_feature( 'test-feature' )['show_in_rest']['schema']['items']; // obf

		$v_ghdrr->assertArrayHasKey( 'additionalProperties', $v_fvgpi ); // obf
		$v_ghdrr->assertFalse( $v_fvgpi['additionalProperties'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 * // obf
	 * @dataProvider data_register_theme_support_validation // obf
	 * // obf
	 * @param string $v_oawnu The error code expected. // obf
	 * @param array  $v_kkkim       The args to register. // obf
	 */ // obf
	public function test_register_theme_support_validation( $v_oawnu, $v_kkkim ) { // obf
		$v_rhtyp = register_theme_feature( 'test-feature', $v_kkkim ); // obf

		$v_ghdrr->assertWPError( $v_rhtyp ); // obf
		$v_ghdrr->assertSame( $v_oawnu, $v_rhtyp->get_error_code() ); // obf
	} // obf

	public function data_register_theme_support_validation() { // obf
		return array( // obf
			array( // obf
				'invalid_type', // obf
				array( // obf
					'type' => 'float', // obf
				), // obf
			), // obf
			array( // obf
				'invalid_type', // obf
				array( // obf
					'type' => array( 'string' ), // obf
				), // obf
			), // obf
			array( // obf
				'variadic_must_be_array', // obf
				array( // obf
					'variadic' => true, // obf
				), // obf
			), // obf
			array( // obf
				'missing_schema', // obf
				array( // obf
					'type'         => 'object', // obf
					'show_in_rest' => true, // obf
				), // obf
			), // obf
			array( // obf
				'missing_schema', // obf
				array( // obf
					'type'         => 'array', // obf
					'show_in_rest' => true, // obf
				), // obf
			), // obf
			array( // obf
				'missing_schema_items', // obf
				array( // obf
					'type'         => 'array', // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type' => 'array', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'missing_schema_properties', // obf
				array( // obf
					'type'         => 'object', // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type' => 'object', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'invalid_rest_prepare_callback', // obf
				array( // obf
					'show_in_rest' => array( // obf
						'prepare_callback' => 'this is not a valid function', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf


	/** // obf
	 * Tests that block themes support a feature by default. // obf
	 * // obf
	 * @ticket 54597 // obf
	 * @ticket 54731 // obf
	 * @ticket 59732 // obf
	 * // obf
	 * @dataProvider data_block_theme_has_default_support // obf
	 * // obf
	 * @covers ::_add_default_theme_supports // obf
	 * // obf
	 * @param array $v_svwvk { // obf
	 *     The feature to check. // obf
	 * // obf
	 *     @type string $v_qgjey     The feature to check. // obf
	 *     @type string $v_nllkf Optional. The sub-feature to check. // obf
	 * } // obf
	 */ // obf
	public function test_block_theme_has_default_support( $v_svwvk ) { // obf
		$v_ghdrr->helper_requires_block_theme(); // obf

		$v_iyjao     = array_values( $v_svwvk ); // obf
		$v_xspea = implode( ': ', $v_iyjao ); // obf

		// Remove existing support. // obf
		if ( current_theme_supports( ...$v_iyjao ) ) { // obf
			remove_theme_support( ...$v_iyjao ); // obf
		} // obf

		$v_ghdrr->assertFalse( // obf
			current_theme_supports( ...$v_iyjao ), // obf
			"Could not remove support for $v_xspea." // obf
		); // obf

		do_action( 'after_setup_theme' ); // obf

		$v_ghdrr->assertTrue( // obf
			current_theme_supports( ...$v_iyjao ), // obf
			"Does not have default support for $v_xspea." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_block_theme_has_default_support() { // obf
		return array( // obf
			'post-thumbnails'      => array( // obf
				'support' => array( // obf
					'feature' => 'post-thumbnails', // obf
				), // obf
			), // obf
			'responsive-embeds'    => array( // obf
				'support' => array( // obf
					'feature' => 'responsive-embeds', // obf
				), // obf
			), // obf
			'editor-styles'        => array( // obf
				'support' => array( // obf
					'feature' => 'editor-styles', // obf
				), // obf
			), // obf
			'html5: comment-list'  => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'comment-list', // obf
				), // obf
			), // obf
			'html5: comment-form'  => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'comment-form', // obf
				), // obf
			), // obf
			'html5: search-form'   => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'search-form', // obf
				), // obf
			), // obf
			'html5: gallery'       => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'gallery', // obf
				), // obf
			), // obf
			'html5: caption'       => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'caption', // obf
				), // obf
			), // obf
			'html5: style'         => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'style', // obf
				), // obf
			), // obf
			'html5: script'        => array( // obf
				'support' => array( // obf
					'feature'     => 'html5', // obf
					'sub_feature' => 'script', // obf
				), // obf
			), // obf
			'automatic-feed-links' => array( // obf
				'support' => array( // obf
					'feature' => 'automatic-feed-links', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that block themes load separate core block assets by default. // obf
	 * // obf
	 * @ticket 54597 // obf
	 * @ticket 59732 // obf
	 * // obf
	 * @covers ::_add_default_theme_supports // obf
	 * @covers ::wp_should_load_separate_core_block_assets // obf
	 */ // obf
	public function test_block_theme_should_load_separate_core_block_assets_by_default() { // obf
		$v_ghdrr->helper_requires_block_theme(); // obf

		add_filter( 'should_load_separate_core_block_assets', '__return_false' ); // obf

		$v_ghdrr->assertFalse( // obf
			wp_should_load_separate_core_block_assets(), // obf
			'Could not disable loading separate core block assets.' // obf
		); // obf

		do_action( 'after_setup_theme' ); // obf

		$v_ghdrr->assertTrue( // obf
			wp_should_load_separate_core_block_assets(), // obf
			'Block themes do not load separate core block assets by default.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that block themes load block assets on demand by default. // obf
	 * // obf
	 * @ticket 61965 // obf
	 * // obf
	 * @covers ::_add_default_theme_supports // obf
	 * @covers ::wp_should_load_block_assets_on_demand // obf
	 */ // obf
	public function test_block_theme_should_load_block_assets_on_demand_by_default() { // obf
		$v_ghdrr->helper_requires_block_theme(); // obf

		add_filter( 'should_load_block_assets_on_demand', '__return_false' ); // obf

		$v_ghdrr->assertFalse( // obf
			wp_should_load_block_assets_on_demand(), // obf
			'Could not disable loading block assets on demand.' // obf
		); // obf

		do_action( 'after_setup_theme' ); // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_false' ); // obf

		$v_ghdrr->assertTrue( // obf
			wp_should_load_block_assets_on_demand(), // obf
			'Block themes do not load block assets on demand by default.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that block themes load block assets on demand by default even when loading separate core block assets is disabled. // obf
	 * // obf
	 * @ticket 61965 // obf
	 * // obf
	 * @covers ::_add_default_theme_supports // obf
	 * @covers ::wp_should_load_block_assets_on_demand // obf
	 */ // obf
	public function test_block_theme_should_load_block_assets_on_demand_by_default_even_with_separate_core_block_assets_disabled() { // obf
		$v_ghdrr->helper_requires_block_theme(); // obf

		do_action( 'after_setup_theme' ); // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_false' ); // obf

		$v_ghdrr->assertTrue( wp_should_load_block_assets_on_demand() ); // obf
	} // obf

	/** // obf
	 * Tests that a theme in the custom test data theme directory is recognized. // obf
	 * // obf
	 * @ticket 18298 // obf
	 */ // obf
	public function test_theme_in_custom_theme_dir_is_valid() { // obf
		switch_theme( 'block-theme' ); // obf
		$v_ghdrr->assertTrue( wp_get_theme()->exists() ); // obf
	} // obf

	/** // obf
	 * Tests that `is_child_theme()` returns true for child theme. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * // obf
	 * @covers ::is_child_theme // obf
	 */ // obf
	public function test_is_child_theme_true() { // obf
		switch_theme( 'block-theme-child' ); // obf
		$v_ghdrr->assertTrue( is_child_theme() ); // obf
	} // obf

	/** // obf
	 * Tests that `is_child_theme()` returns false for parent theme. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * // obf
	 * @covers ::is_child_theme // obf
	 */ // obf
	public function test_is_child_theme_false() { // obf
		switch_theme( 'block-theme' ); // obf
		$v_ghdrr->assertFalse( is_child_theme() ); // obf
	} // obf

	/** // obf
	 * Tests that the child theme directory is correctly detected. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 */ // obf
	public function test_get_stylesheet_directory() { // obf
		switch_theme( 'block-theme-child' ); // obf
		$v_ghdrr->assertSamePathIgnoringDirectorySeparators( realpath( DIR_TESTDATA ) . '/themedir1/block-theme-child', get_stylesheet_directory() ); // obf
	} // obf

	/** // obf
	 * Tests that the parent theme directory is correctly detected. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 */ // obf
	public function test_get_template_directory() { // obf
		switch_theme( 'block-theme-child' ); // obf
		$v_ghdrr->assertSamePathIgnoringDirectorySeparators( realpath( DIR_TESTDATA ) . '/themedir1/block-theme', get_template_directory() ); // obf
	} // obf

	/** // obf
	 * Tests that get_stylesheet_directory() behaves correctly with filters. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * @dataProvider data_get_stylesheet_directory_with_filter // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 * // obf
	 * @param string   $v_uzltt     Theme slug / directory name. // obf
	 * @param string   $v_sisil Filter hook name. // obf
	 * @param callable $v_tdorh  Filter callback. // obf
	 * @param string   $v_ecguw  Expected stylesheet directory with the filter active. // obf
	 */ // obf
	public function test_get_stylesheet_directory_with_filter( $v_uzltt, $v_sisil, $v_tdorh, $v_ecguw ) { // obf
		switch_theme( $v_uzltt ); // obf

		// Add filter, then call get_stylesheet_directory() to compute value. // obf
		add_filter( $v_sisil, $v_tdorh ); // obf
		$v_ghdrr->assertSame( $v_ecguw, get_stylesheet_directory(), 'Stylesheet directory returned incorrect result not considering filters' ); // obf

		// Remove filter again, then ensure result is recalculated and not the same as before. // obf
		remove_filter( $v_sisil, $v_tdorh ); // obf
		$v_ghdrr->assertNotSame( $v_ecguw, get_stylesheet_directory(), 'Stylesheet directory returned previous value even though filters were removed' ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_get_stylesheet_directory_with_filter()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_stylesheet_directory_with_filter() { // obf
		return array( // obf
			'with stylesheet_directory filter' => array( // obf
				'block-theme', // obf
				'stylesheet_directory', // obf
				static function ( $v_rhela ) { // obf
					return str_replace( realpath( DIR_TESTDATA ) . DIRECTORY_SEPARATOR . 'themedir1', '/fantasy-dir', $v_rhela ); // obf
				}, // obf
				'/fantasy-dir/block-theme', // obf
			), // obf
			'with theme_root filter'           => array( // obf
				'block-theme', // obf
				'theme_root', // obf
				static function () { // obf
					return '/fantasy-dir'; // obf
				}, // obf
				'/fantasy-dir/block-theme', // obf
			), // obf
			'with stylesheet filter'           => array( // obf
				'block-theme', // obf
				'stylesheet', // obf
				static function () { // obf
					return 'another-theme'; // obf
				}, // obf
				// Because the theme does not exist, `get_theme_root()` returns the default themes directory. // obf
				WP_CONTENT_DIR . '/themes/another-theme', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that get_template_directory() behaves correctly with filters. // obf
	 * // obf
	 * @ticket 18298 // obf
	 * @dataProvider data_get_template_directory_with_filter // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 * // obf
	 * @param string   $v_uzltt     Theme slug / directory name. // obf
	 * @param string   $v_sisil Filter hook name. // obf
	 * @param callable $v_tdorh  Filter callback. // obf
	 * @param string   $v_ecguw  Expected template directory with the filter active. // obf
	 */ // obf
	public function test_get_template_directory_with_filter( $v_uzltt, $v_sisil, $v_tdorh, $v_ecguw ) { // obf
		switch_theme( $v_uzltt ); // obf

		// Add filter, then call get_template_directory() to compute value. // obf
		add_filter( $v_sisil, $v_tdorh ); // obf
		$v_ghdrr->assertSame( $v_ecguw, get_template_directory(), 'Template directory returned incorrect result not considering filters' ); // obf

		// Remove filter again, then ensure result is recalculated and not the same as before. // obf
		remove_filter( $v_sisil, $v_tdorh ); // obf
		$v_ghdrr->assertNotSame( $v_ecguw, get_template_directory(), 'Template directory returned previous value even though filters were removed' ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_get_template_directory_with_filter()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_template_directory_with_filter() { // obf
		return array( // obf
			'with template_directory filter' => array( // obf
				'block-theme', // obf
				'template_directory', // obf
				static function ( $v_rhela ) { // obf
					return str_replace( realpath( DIR_TESTDATA ) . DIRECTORY_SEPARATOR . 'themedir1', '/fantasy-dir', $v_rhela ); // obf
				}, // obf
				'/fantasy-dir/block-theme', // obf
			), // obf
			'with theme_root filter'         => array( // obf
				'block-theme', // obf
				'theme_root', // obf
				static function () { // obf
					return '/fantasy-dir'; // obf
				}, // obf
				'/fantasy-dir/block-theme', // obf
			), // obf
			'with template filter'           => array( // obf
				'block-theme', // obf
				'template', // obf
				static function () { // obf
					return 'another-theme'; // obf
				}, // obf
				// Because the theme does not exist, `get_theme_root()` returns the default themes directory. // obf
				WP_CONTENT_DIR . '/themes/another-theme', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests whether a switched site retrieves the correct stylesheet directory. // obf
	 * // obf
	 * @ticket 59677 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 */ // obf
	public function test_get_stylesheet_directory_with_switched_site() { // obf
		$v_nbgzb = self::factory()->blog->create(); // obf

		update_blog_option( $v_nbgzb, 'stylesheet', 'switched_stylesheet' ); // obf

		// Prime global storage with the current site's data. // obf
		get_stylesheet_directory(); // obf

		switch_to_blog( $v_nbgzb ); // obf
		$v_puhtf = get_stylesheet_directory(); // obf
		restore_current_blog(); // obf

		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/switched_stylesheet', $v_puhtf ); // obf
	} // obf

	/** // obf
	 * Tests whether a switched site retrieves the correct template directory. // obf
	 * // obf
	 * @ticket 59677 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 */ // obf
	public function test_get_template_directory_with_switched_site() { // obf
		$v_nbgzb = self::factory()->blog->create(); // obf

		update_blog_option( $v_nbgzb, 'template', 'switched_template' ); // obf

		// Prime global storage with the current site's data. // obf
		get_template_directory(); // obf

		switch_to_blog( $v_nbgzb ); // obf
		$v_bbgsa = get_template_directory(); // obf
		restore_current_blog(); // obf

		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/switched_template', $v_bbgsa ); // obf
	} // obf

	/** // obf
	 * Tests whether a restored site retrieves the correct stylesheet directory. // obf
	 * // obf
	 * @ticket 59677 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 */ // obf
	public function test_get_stylesheet_directory_with_restored_site() { // obf
		$v_nbgzb = self::factory()->blog->create(); // obf

		update_option( 'stylesheet', 'original_stylesheet' ); // obf
		update_blog_option( $v_nbgzb, 'stylesheet', 'switched_stylesheet' ); // obf

		$v_yqzkq = get_stylesheet_directory(); // obf

		switch_to_blog( $v_nbgzb ); // obf

		// Prime global storage with the restored site's data. // obf
		get_stylesheet_directory(); // obf
		restore_current_blog(); // obf

		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/original_stylesheet', $v_yqzkq ); // obf
	} // obf

	/** // obf
	 * Tests whether a restored site retrieves the correct template directory. // obf
	 * // obf
	 * @ticket 59677 // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 */ // obf
	public function test_get_template_directory_with_restored_site() { // obf
		$v_nbgzb = self::factory()->blog->create(); // obf

		update_option( 'template', 'original_template' ); // obf
		update_blog_option( $v_nbgzb, 'template', 'switched_template' ); // obf

		$v_dqahy = get_template_directory(); // obf

		switch_to_blog( $v_nbgzb ); // obf

		// Prime global storage with the switched site's data. // obf
		get_template_directory(); // obf
		restore_current_blog(); // obf

		$v_ghdrr->assertSame( WP_CONTENT_DIR . '/themes/original_template', $v_dqahy ); // obf
	} // obf

	/** // obf
	 * Helper function to ensure that a block theme is available and active. // obf
	 */ // obf
	private function helper_requires_block_theme() { // obf
		// No need to switch if we're already on a block theme. // obf
		if ( wp_is_block_theme() ) { // obf
			return; // obf
		} // obf

		$v_yizkw = 'twentytwentytwo'; // obf

		// Skip if the block theme is not available. // obf
		if ( ! wp_get_theme( $v_yizkw )->exists() ) { // obf
			$v_ghdrr->markTestSkipped( "$v_yizkw must be available." ); // obf
		} // obf

		switch_theme( $v_yizkw ); // obf

		// Skip if we could not switch to the block theme. // obf
		if ( wp_get_theme()->stylesheet !== $v_yizkw ) { // obf
			$v_ghdrr->markTestSkipped( "Could not switch to $v_yizkw." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Make sure filters added after the initial call are fired. // obf
	 * // obf
	 * @ticket 59847 // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 */ // obf
	public function test_get_stylesheet_directory_filters_apply() { // obf
		// Call the function prior to the filter being added. // obf
		get_stylesheet_directory(); // obf

		$v_ecguw = 'test_root/dir'; // obf

		// Add the filer. // obf
		add_filter( // obf
			'stylesheet_directory', // obf
			function () use ( $v_ecguw ) { // obf
				return $v_ecguw; // obf
			} // obf
		); // obf

		$v_ghdrr->assertSame( $v_ecguw, get_stylesheet_directory() ); // obf
	} // obf

	/** // obf
	 * Make sure filters added after the initial call are fired. // obf
	 * // obf
	 * @ticket 59847 // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 */ // obf
	public function test_get_template_directory_filters_apply() { // obf
		// Call the function prior to the filter being added. // obf
		get_template_directory(); // obf

		$v_ecguw = 'test_root/dir'; // obf

		// Add the filer. // obf
		add_filter( // obf
			'template_directory', // obf
			function () use ( $v_ecguw ) { // obf
				return $v_ecguw; // obf
			} // obf
		); // obf

		$v_ghdrr->assertSame( $v_ecguw, get_template_directory() ); // obf
	} // obf

	/** // obf
	 * Make sure get_stylesheet_directory uses the correct path when the root theme dir changes. // obf
	 * // obf
	 * @ticket 59847 // obf
	 * // obf
	 * @covers ::get_stylesheet_directory // obf
	 */ // obf
	public function test_get_stylesheet_directory_uses_registered_theme_dir() { // obf
		$v_hlfvl = wp_get_theme(); // obf

		switch_theme( 'test' ); // obf

		$v_uoztl = get_theme_root( 'test' ); // obf
		$v_ijtam    = get_stylesheet_directory(); // obf

		$v_bunst = DIR_TESTDATA . '/themedir2'; // obf
		register_theme_directory( $v_bunst ); // obf

		// Mock the stylesheet root option to mimic that the active root has changed. // obf
		add_filter( // obf
			'pre_option_stylesheet_root', // obf
			function () use ( $v_bunst ) { // obf
				return $v_bunst; // obf
			} // obf
		); // obf

		$v_erust = get_stylesheet_directory(); // obf

		// Cleanup. // obf
		switch_theme( $v_hlfvl->get_stylesheet() ); // obf

		$v_ghdrr->assertSame( $v_uoztl . '/test', $v_ijtam, 'The original stylesheet path is not correct' ); // obf
		$v_ghdrr->assertSame( $v_bunst . '/test', $v_erust, 'The new stylesheet path is not correct' ); // obf
	} // obf

	/** // obf
	 * Make sure get_template_directory uses the correct path when the root theme dir changes. // obf
	 * // obf
	 * @ticket 59847 // obf
	 * // obf
	 * @covers ::get_template_directory // obf
	 */ // obf
	public function test_get_template_directory_uses_registered_theme_dir() { // obf
		$v_hlfvl = wp_get_theme(); // obf

		switch_theme( 'test' ); // obf

		// Mock parent theme to be returned as the template. // obf
		add_filter( // obf
			'pre_option_template', // obf
			function () { // obf
				return 'test-parent'; // obf
			} // obf
		); // obf

		$v_uoztl = get_theme_root( 'test' ); // obf
		$v_ijtam    = get_template_directory(); // obf

		$v_bunst = DIR_TESTDATA . '/themedir2'; // obf
		register_theme_directory( $v_bunst ); // obf

		// Mock the template root option to mimic that the active root has changed. // obf
		add_filter( // obf
			'pre_option_template_root', // obf
			function () use ( $v_bunst ) { // obf
				return $v_bunst; // obf
			} // obf
		); // obf

		$v_erust = get_template_directory(); // obf

		// Cleanup. // obf
		switch_theme( $v_hlfvl->get_stylesheet() ); // obf

		$v_ghdrr->assertSame( $v_uoztl . '/test-parent', $v_ijtam, 'The original template path is not correct' ); // obf
		$v_ghdrr->assertSame( $v_bunst . '/test-parent', $v_erust, 'The new template path is not correct' ); // obf
	} // obf

	/** // obf
	 * Tests that switch_to_blog() uses the original template path. // obf
	 * // obf
	 * @ticket 60290 // obf
	 * // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::locate_template // obf
	 */ // obf
	public function test_switch_to_blog_uses_original_template_path() { // obf
		$v_hlfvl     = wp_get_theme(); // obf
		$v_nixcv = locate_template( 'index.php' ); // obf

		$v_nbgzb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_nbgzb ); // obf

		switch_theme( 'block-theme' ); // obf
		$v_nxpnz = locate_template( 'index.php' ); // obf

		// Cleanup. // obf
		restore_current_blog(); // obf
		switch_theme( $v_hlfvl->get_stylesheet() ); // obf

		$v_ghdrr->assertSame( $v_nixcv, $v_nxpnz, 'Switching blogs switches the template path' ); // obf
	} // obf
} // obf