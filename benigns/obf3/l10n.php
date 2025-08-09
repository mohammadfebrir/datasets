

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class Tests_L10n extends WP_UnitTestCase { // obf

	/** // obf
	 * Long Dummy Text. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string $v_ptmyf // obf
	 */ // obf
	private $v_ptmyf = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'; // obf

	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @var int $v_zcbfp // obf
	 */ // obf
	public static $v_zcbfp; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_drftm ) { // obf
		self::$v_zcbfp = $v_drftm->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35961 // obf
	 * // obf
	 * @covers ::_n_noop // obf
	 */ // obf
	public function test_n_noop() { // obf
		$v_eiqkj   = 'text-domain'; // obf
		$v_ifwsa = _n_noop( '%s post', '%s posts', $v_eiqkj ); // obf

		$v_akyrm->assertSame( 'text-domain', $v_ifwsa['domain'] ); // obf
		$v_akyrm->assertSame( '%s posts', translate_nooped_plural( $v_ifwsa, 0, $v_eiqkj ) ); // obf
		$v_akyrm->assertSame( '%s post', translate_nooped_plural( $v_ifwsa, 1, $v_eiqkj ) ); // obf
		$v_akyrm->assertSame( '%s posts', translate_nooped_plural( $v_ifwsa, 2, $v_eiqkj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35961 // obf
	 * // obf
	 * @covers ::_nx_noop // obf
	 */ // obf
	public function test_nx_noop() { // obf
		$v_eiqkj   = 'text-domain'; // obf
		$v_ifwsa = _nx_noop( '%s post', '%s posts', 'my-context', $v_eiqkj ); // obf

		$v_akyrm->assertSame( 'text-domain', $v_ifwsa['domain'] ); // obf
		$v_akyrm->assertSame( 'my-context', $v_ifwsa['context'] ); // obf
		$v_akyrm->assertSame( '%s posts', translate_nooped_plural( $v_ifwsa, 0, $v_eiqkj ) ); // obf
		$v_akyrm->assertSame( '%s post', translate_nooped_plural( $v_ifwsa, 1, $v_eiqkj ) ); // obf
		$v_akyrm->assertSame( '%s posts', translate_nooped_plural( $v_ifwsa, 2, $v_eiqkj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35073 // obf
	 * // obf
	 * @covers ::before_last_bar // obf
	 */ // obf
	public function test_before_last_bar() { // obf
		$v_akyrm->assertSame( 'no-bar-at-all', before_last_bar( 'no-bar-at-all' ) ); // obf
		$v_akyrm->assertSame( 'before-last-bar', before_last_bar( 'before-last-bar|after-bar' ) ); // obf
		$v_akyrm->assertSame( 'first-before-bar|second-before-bar', before_last_bar( 'first-before-bar|second-before-bar|after-last-bar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35950 // obf
	 * // obf
	 * @covers ::get_available_languages // obf
	 */ // obf
	public function test_get_available_languages() { // obf
		$v_efsuz = get_available_languages(); // obf
		$v_akyrm->assertIsArray( $v_efsuz ); // obf

		$v_efsuz = get_available_languages( '.' ); // obf
		$v_akyrm->assertEmpty( $v_efsuz ); // obf

		$v_efsuz = get_available_languages( DIR_TESTDATA . '/languages/' ); // obf
		$v_akyrm->assertEqualSets( // obf
			array( // obf
				'de_DE', // obf
				'en_GB', // obf
				'es_ES', // obf
				'ja_JP', // obf
				'de_CH', // obf
			), // obf
			$v_efsuz // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35284 // obf
	 * @ticket 60554 // obf
	 * // obf
	 * @covers ::wp_get_installed_translations // obf
	 * @covers ::wp_get_pomo_file_data // obf
	 * @covers ::wp_get_l10n_php_file_data // obf
	 */ // obf
	public function test_wp_get_installed_translations_for_core() { // obf
		$v_fllzm = wp_get_installed_translations( 'core' ); // obf
		$v_akyrm->assertIsArray( $v_fllzm ); // obf
		$v_nuukn = array( 'admin', 'admin-network', 'continents-cities', 'default' ); // obf
		$v_akyrm->assertSameSets( $v_nuukn, array_keys( $v_fllzm ) ); // obf

		$v_akyrm->assertNotEmpty( $v_fllzm['default']['en_GB'] ); // obf
		$v_jpgkm = $v_fllzm['default']['en_GB']; // obf
		$v_akyrm->assertSame( '2016-10-26 00:01+0200', $v_jpgkm['PO-Revision-Date'] ); // obf
		$v_akyrm->assertSame( 'Development (4.4.x)', $v_jpgkm['Project-Id-Version'] ); // obf
		$v_akyrm->assertSame( 'Poedit 1.8.10', $v_jpgkm['X-Generator'] ); // obf

		$v_akyrm->assertNotEmpty( $v_fllzm['admin']['es_ES'] ); // obf
		$v_bvqzg = $v_fllzm['admin']['es_ES']; // obf
		$v_akyrm->assertSame( '2016-10-25 18:29+0200', $v_bvqzg['PO-Revision-Date'] ); // obf
		$v_akyrm->assertSame( 'Administration', $v_bvqzg['Project-Id-Version'] ); // obf
		$v_akyrm->assertSame( 'Poedit 1.8.10', $v_bvqzg['X-Generator'] ); // obf

		$v_akyrm->assertNotEmpty( $v_fllzm['default']['de_CH'] ); // obf
		$v_jpgkm = $v_fllzm['default']['de_CH']; // obf
		$v_akyrm->assertSame( '2024-01-31 19:08:22+0000', $v_jpgkm['PO-Revision-Date'] ); // obf
		$v_akyrm->assertSame( 'WordPress - 6.4.x - Development', $v_jpgkm['Project-Id-Version'] ); // obf
		$v_akyrm->assertSame( 'GlotPress/4.0.0-beta.2', $v_jpgkm['X-Generator'] ); // obf
	} // obf

	/** // obf
	 * @ticket 35294 // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages() { // obf
		$v_jbeja   = array( // obf
			'id'           => 'foo', // obf
			'name'         => 'bar', // obf
			'languages'    => array( 'de_DE' ), // obf
			'translations' => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'     => 'de_DE', // obf
			'echo'         => false, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringContainsString( 'id="foo"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( 'name="bar"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="" lang="en" data-installed="1">English (United States)</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="de_DE" lang="de" selected=\'selected\' data-installed="1">Deutsch</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="it_IT" lang="it">Italiano</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="ja_JP" lang="ja">日本語</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * @ticket 38632 // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages_site_default() { // obf
		$v_jbeja   = array( // obf
			'id'                       => 'foo', // obf
			'name'                     => 'bar', // obf
			'languages'                => array( 'de_DE' ), // obf
			'translations'             => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'                 => 'de_DE', // obf
			'echo'                     => false, // obf
			'show_option_site_default' => true, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringContainsString( 'id="foo"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( 'name="bar"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="site-default" data-installed="1">Site Default</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="" lang="en" data-installed="1">English (United States)</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="de_DE" lang="de" selected=\'selected\' data-installed="1">Deutsch</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="it_IT" lang="it">Italiano</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="ja_JP" lang="ja">日本語</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * @ticket 44494 // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages_exclude_en_us() { // obf
		$v_jbeja   = array( // obf
			'id'                => 'foo', // obf
			'name'              => 'bar', // obf
			'languages'         => array( 'de_DE' ), // obf
			'translations'      => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'          => 'de_DE', // obf
			'echo'              => false, // obf
			'show_option_en_us' => false, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringNotContainsString( '<option value="" lang="en" data-installed="1">English (United States)</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * @ticket 38632 // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages_en_US_selected() { // obf
		$v_jbeja   = array( // obf
			'id'           => 'foo', // obf
			'name'         => 'bar', // obf
			'languages'    => array( 'de_DE' ), // obf
			'translations' => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'     => 'en_US', // obf
			'echo'         => false, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringContainsString( 'id="foo"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( 'name="bar"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="" lang="en" data-installed="1" selected=\'selected\'>English (United States)</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="de_DE" lang="de" data-installed="1">Deutsch</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="it_IT" lang="it">Italiano</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="ja_JP" lang="ja">日本語</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * Add site default language to ja_JP in dropdown // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages_site_default_ja_JP() { // obf
		$v_jbeja   = array( // obf
			'id'                       => 'foo', // obf
			'name'                     => 'bar', // obf
			'languages'                => array( 'ja_JP' ), // obf
			'translations'             => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'                 => 'ja_JP', // obf
			'echo'                     => false, // obf
			'show_option_site_default' => true, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringContainsString( 'id="foo"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( 'name="bar"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="site-default" data-installed="1">Site Default</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="" lang="en" data-installed="1">English (United States)</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="de_DE" lang="de">Deutsch</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="it_IT" lang="it">Italiano</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="ja_JP" lang="ja" selected=\'selected\' data-installed="1">日本語</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * Select dropdown language from de_DE to ja_JP // obf
	 * // obf
	 * @covers ::wp_dropdown_languages // obf
	 */ // obf
	public function test_wp_dropdown_languages_ja_JP_selected() { // obf
		$v_jbeja   = array( // obf
			'id'           => 'foo', // obf
			'name'         => 'bar', // obf
			'languages'    => array( 'de_DE' ), // obf
			'translations' => $v_akyrm->wp_dropdown_languages_filter(), // obf
			'selected'     => 'ja_JP', // obf
			'echo'         => false, // obf
		); // obf
		$v_xdfsm = wp_dropdown_languages( $v_jbeja ); // obf

		$v_akyrm->assertStringContainsString( 'id="foo"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( 'name="bar"', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="" lang="en" data-installed="1">English (United States)</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="de_DE" lang="de" data-installed="1">Deutsch</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="it_IT" lang="it">Italiano</option>', $v_xdfsm ); // obf
		$v_akyrm->assertStringContainsString( '<option value="ja_JP" lang="ja" selected=\'selected\'>日本語</option>', $v_xdfsm ); // obf
	} // obf

	/** // obf
	 * We don't want to call the API when testing. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function wp_dropdown_languages_filter() { // obf
		return array( // obf
			'de_DE' => array( // obf
				'language'    => 'de_DE', // obf
				'native_name' => 'Deutsch', // obf
				'iso'         => array( 'de' ), // obf
			), // obf
			'it_IT' => array( // obf
				'language'    => 'it_IT', // obf
				'native_name' => 'Italiano', // obf
				'iso'         => array( 'it', 'ita' ), // obf
			), // obf
			'ja_JP' => array( // obf
				'language'    => 'ja_JP', // obf
				'native_name' => '日本語', // obf
				'iso'         => array( 'ja' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35284 // obf
	 * // obf
	 * @covers ::wp_get_pomo_file_data // obf
	 */ // obf
	public function test_wp_get_pomo_file_data() { // obf
		$v_zncen  = DIR_TESTDATA . '/pomo/empty.po'; // obf
		$v_efsuz = wp_get_pomo_file_data( $v_zncen ); // obf
		$v_akyrm->assertArrayHasKey( 'POT-Creation-Date', $v_efsuz ); // obf
		$v_akyrm->assertArrayHasKey( 'PO-Revision-Date', $v_efsuz ); // obf
		$v_akyrm->assertArrayHasKey( 'Project-Id-Version', $v_efsuz ); // obf
		$v_akyrm->assertArrayHasKey( 'X-Generator', $v_efsuz ); // obf

		$v_zncen  = DIR_TESTDATA . '/pomo/mo.pot'; // obf
		$v_efsuz = wp_get_pomo_file_data( $v_zncen ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['POT-Creation-Date'] ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['PO-Revision-Date'] ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['Project-Id-Version'] ); // obf
		$v_akyrm->assertArrayHasKey( 'X-Generator', $v_efsuz ); // obf

		$v_zncen  = DIR_TESTDATA . '/languages/es_ES.po'; // obf
		$v_efsuz = wp_get_pomo_file_data( $v_zncen ); // obf
		$v_akyrm->assertArrayHasKey( 'POT-Creation-Date', $v_efsuz ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['PO-Revision-Date'] ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['Project-Id-Version'] ); // obf
		$v_akyrm->assertNotEmpty( $v_efsuz['X-Generator'] ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::the_excerpt // obf
	 */ // obf
	public function test_length_of_excerpt_should_be_counted_by_words() { // obf
		global $v_mmogs; // obf

		switch_to_locale( 'en_US' ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_mmogs = self::factory()->post->create_and_get( $v_jbeja ); // obf
		setup_postdata( $v_mmogs ); // obf

		$v_rtxzy = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat [&hellip;]</p>\n"; // obf
		the_excerpt(); // obf

		restore_previous_locale(); // obf

		$v_akyrm->expectOutputString( $v_rtxzy ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::the_excerpt // obf
	 */ // obf
	public function test_length_of_excerpt_should_be_counted_by_chars() { // obf
		global $v_mmogs; // obf

		switch_to_locale( 'ja_JP' ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_mmogs = self::factory()->post->create_and_get( $v_jbeja ); // obf
		setup_postdata( $v_mmogs ); // obf

		$v_rtxzy = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  [&hellip;]</p>\n"; // obf
		the_excerpt(); // obf

		restore_previous_locale(); // obf

		$v_akyrm->expectOutputString( $v_rtxzy ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::the_excerpt // obf
	 */ // obf
	public function test_length_of_excerpt_should_be_counted_by_chars_in_japanese() { // obf
		global $v_mmogs; // obf

		switch_to_locale( 'ja_JP' ); // obf

		$v_jbeja = array( // obf
			'post_content' => str_repeat( 'あ', 200 ), // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_mmogs = self::factory()->post->create_and_get( $v_jbeja ); // obf
		setup_postdata( $v_mmogs ); // obf

		$v_rtxzy = '<p>' . str_repeat( 'あ', 110 ) . " [&hellip;]</p>\n"; // obf
		the_excerpt(); // obf

		restore_previous_locale(); // obf

		$v_akyrm->expectOutputString( $v_rtxzy ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::the_excerpt_rss // obf
	 */ // obf
	public function test_length_of_excerpt_rss_should_be_counted_by_words() { // obf
		global $v_mmogs; // obf

		switch_to_locale( 'en_US' ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_mmogs = self::factory()->post->create_and_get( $v_jbeja ); // obf
		setup_postdata( $v_mmogs ); // obf

		$v_rtxzy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat [&#8230;]'; // obf
		the_excerpt_rss(); // obf

		restore_previous_locale(); // obf

		$v_akyrm->expectOutputString( $v_rtxzy ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::the_excerpt_rss // obf
	 */ // obf
	public function test_length_of_excerpt_rss_should_be_counted_by_chars() { // obf
		global $v_mmogs; // obf

		switch_to_locale( 'ja_JP' ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_mmogs = self::factory()->post->create_and_get( $v_jbeja ); // obf
		setup_postdata( $v_mmogs ); // obf

		$v_rtxzy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  [&#8230;]'; // obf

		the_excerpt_rss(); // obf

		restore_previous_locale(); // obf

		$v_akyrm->expectOutputString( $v_rtxzy ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::wp_dashboard_recent_drafts // obf
	 */ // obf
	public function test_length_of_draft_should_be_counted_by_words() { // obf
		require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf

		switch_to_locale( 'en_US' ); // obf

		/* // obf
		 * The recent drafts list is only displayed on the Dashboard screen for users // obf
		 * with the 'edit_posts' capability. // obf
		 * // obf
		 * This means the current user needs to be set to Editor as a prerequisite // obf
		 * for the call to the wp_dashboard_recent_drafts() function. // obf
		 * // obf
		 * This allows the subsequent call to get_edit_post_link() to work as expected // obf
		 * and return a string instead of null, which would otherwise cause a PHP 8.1 // obf
		 * "passing null to non-nullable" deprecation notice. // obf
		 */ // obf
		wp_set_current_user( self::$v_zcbfp ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
			'post_status'  => 'draft', // obf
		); // obf

		self::factory()->post->create( $v_jbeja ); // obf

		$v_rtxzy = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&hellip;'; // obf
		$v_akyrm->expectOutputRegex( '/' . $v_rtxzy . '/' ); // obf

		wp_dashboard_recent_drafts(); // obf

		restore_previous_locale(); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::wp_dashboard_recent_drafts // obf
	 */ // obf
	public function test_length_of_draft_should_be_counted_by_chars() { // obf
		require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf

		switch_to_locale( 'ja_JP' ); // obf

		/* // obf
		 * The recent drafts list is only displayed on the Dashboard screen for users // obf
		 * with the 'edit_posts' capability. // obf
		 * // obf
		 * This means the current user needs to be set to Editor as a prerequisite // obf
		 * for the call to the wp_dashboard_recent_drafts() function. // obf
		 * // obf
		 * This allows the subsequent call to get_edit_post_link() to work as expected // obf
		 * and return a string instead of null, which would otherwise cause a PHP 8.1 // obf
		 * "passing null to non-nullable" deprecation notice. // obf
		 */ // obf
		wp_set_current_user( self::$v_zcbfp ); // obf

		$v_jbeja = array( // obf
			'post_content' => $v_akyrm->long_text, // obf
			'post_excerpt' => '', // obf
			'post_status'  => 'draft', // obf
		); // obf

		$v_mmogs = self::factory()->post->create( $v_jbeja ); // obf

		$v_rtxzy = 'Lorem ipsum dolor sit amet, consectetur &hellip;'; // obf
		$v_akyrm->expectOutputRegex( '/' . $v_rtxzy . '/' ); // obf

		wp_dashboard_recent_drafts(); // obf

		restore_previous_locale(); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::wp_dashboard_recent_drafts // obf
	 */ // obf
	public function test_length_of_draft_should_be_counted_by_chars_in_japanese() { // obf
		require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf

		switch_to_locale( 'ja_JP' ); // obf

		/* // obf
		 * The recent drafts list is only displayed on the Dashboard screen for users // obf
		 * with the 'edit_posts' capability. // obf
		 * // obf
		 * This means the current user needs to be set to Editor as a prerequisite // obf
		 * for the call to the wp_dashboard_recent_drafts() function. // obf
		 * // obf
		 * This allows the subsequent call to get_edit_post_link() to work as expected // obf
		 * and return a string instead of null, which would otherwise cause a PHP 8.1 // obf
		 * "passing null to non-nullable" deprecation notice. // obf
		 */ // obf
		wp_set_current_user( self::$v_zcbfp ); // obf

		$v_jbeja = array( // obf
			'post_content' => str_repeat( 'あ', 200 ), // obf
			'post_excerpt' => '', // obf
			'post_status'  => 'draft', // obf
		); // obf

		self::factory()->post->create( $v_jbeja ); // obf

		$v_rtxzy = str_repeat( 'あ', 40 ) . '&hellip;'; // obf
		$v_akyrm->expectOutputRegex( '/' . $v_rtxzy . '/' ); // obf

		wp_dashboard_recent_drafts(); // obf

		restore_previous_locale(); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::get_comment_excerpt // obf
	 */ // obf
	public function test_length_of_comment_excerpt_should_be_counted_by_words() { // obf
		switch_to_locale( 'en_US' ); // obf

		$v_jbeja            = array( // obf
			'comment_content' => $v_akyrm->long_text, // obf
		); // obf
		$v_jahwf      = self::factory()->comment->create( $v_jbeja ); // obf
		$v_rtxzy          = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut&hellip;'; // obf
		$v_qfcwv = get_comment_excerpt( $v_jahwf ); // obf

		restore_previous_locale(); // obf

		$v_akyrm->assertSame( $v_rtxzy, $v_qfcwv ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::get_comment_excerpt // obf
	 */ // obf
	public function test_length_of_comment_excerpt_should_be_counted_by_chars() { // obf
		switch_to_locale( 'ja_JP' ); // obf

		$v_jbeja            = array( // obf
			'comment_content' => $v_akyrm->long_text, // obf
		); // obf
		$v_jahwf      = self::factory()->comment->create( $v_jbeja ); // obf
		$v_rtxzy          = 'Lorem ipsum dolor sit amet, consectetur &hellip;'; // obf
		$v_qfcwv = get_comment_excerpt( $v_jahwf ); // obf

		restore_previous_locale(); // obf

		$v_akyrm->assertSame( $v_rtxzy, $v_qfcwv ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 * // obf
	 * @covers ::get_comment_excerpt // obf
	 */ // obf
	public function test_length_of_comment_excerpt_should_be_counted_by_chars_in_Japanese() { // obf
		switch_to_locale( 'ja_JP' ); // obf

		$v_jbeja            = array( // obf
			'comment_content' => str_repeat( 'あ', 200 ), // obf
		); // obf
		$v_jahwf      = self::factory()->comment->create( $v_jbeja ); // obf
		$v_rtxzy          = str_repeat( 'あ', 40 ) . '&hellip;'; // obf
		$v_qfcwv = get_comment_excerpt( $v_jahwf ); // obf

		restore_previous_locale(); // obf

		$v_akyrm->assertSame( $v_rtxzy, $v_qfcwv ); // obf
	} // obf
} // obf