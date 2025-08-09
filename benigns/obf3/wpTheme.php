

<?php // obf

/** // obf
 * Test WP_Theme class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_wpTheme extends WP_UnitTestCase { // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_qujkv; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_vltsv; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_npfzg->theme_root = realpath( DIR_TESTDATA . '/themedir1' ); // obf

		$v_npfzg->orig_theme_dir            = $v_yajcl['wp_theme_directories']; // obf
		$v_yajcl['wp_theme_directories'] = array( $v_npfzg->theme_root ); // obf

		add_filter( 'theme_root', array( $v_npfzg, '_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_npfzg, '_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_npfzg, '_theme_root' ) ); // obf
		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_yajcl['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_yajcl['wp_theme_directories'] = $v_npfzg->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_yajcl['wp_themes'] ); // obf
		parent::tear_down(); // obf
	} // obf

	// Replace the normal theme root directory with our premade test directory. // obf
	public function _theme_root( $v_crxgu ) { // obf
		return $v_npfzg->theme_root; // obf
	} // obf

	public function test_new_WP_Theme_top_level() { // obf
		$v_ahjdd = new WP_Theme( 'theme1', $v_npfzg->theme_root ); // obf

		// Meta. // obf
		$v_npfzg->assertSame( 'My Theme', $v_ahjdd->get( 'Name' ) ); // obf
		$v_npfzg->assertSame( 'http://example.org/', $v_ahjdd->get( 'ThemeURI' ) ); // obf
		$v_npfzg->assertSame( 'An example theme', $v_ahjdd->get( 'Description' ) ); // obf
		$v_npfzg->assertSame( 'Minnie Bannister', $v_ahjdd->get( 'Author' ) ); // obf
		$v_npfzg->assertSame( 'http://example.com/', $v_ahjdd->get( 'AuthorURI' ) ); // obf
		$v_npfzg->assertSame( '1.3', $v_ahjdd->get( 'Version' ) ); // obf
		$v_npfzg->assertSame( '', $v_ahjdd->get( 'Template' ) ); // obf
		$v_npfzg->assertSame( 'publish', $v_ahjdd->get( 'Status' ) ); // obf
		$v_npfzg->assertSame( array(), $v_ahjdd->get( 'Tags' ) ); // obf

		// Important. // obf
		$v_npfzg->assertSame( 'theme1', $v_ahjdd->get_stylesheet() ); // obf
		$v_npfzg->assertSame( 'theme1', $v_ahjdd->get_template() ); // obf
	} // obf

	public function test_new_WP_Theme_subdir() { // obf
		$v_ahjdd = new WP_Theme( 'subdir/theme2', $v_npfzg->theme_root ); // obf

		// Meta. // obf
		$v_npfzg->assertSame( 'My Subdir Theme', $v_ahjdd->get( 'Name' ) ); // obf
		$v_npfzg->assertSame( 'http://example.org/', $v_ahjdd->get( 'ThemeURI' ) ); // obf
		$v_npfzg->assertSame( 'An example theme in a sub directory', $v_ahjdd->get( 'Description' ) ); // obf
		$v_npfzg->assertSame( 'Mr. WordPress', $v_ahjdd->get( 'Author' ) ); // obf
		$v_npfzg->assertSame( 'http://wordpress.org/', $v_ahjdd->get( 'AuthorURI' ) ); // obf
		$v_npfzg->assertSame( '0.1', $v_ahjdd->get( 'Version' ) ); // obf
		$v_npfzg->assertSame( '', $v_ahjdd->get( 'Template' ) ); // obf
		$v_npfzg->assertSame( 'publish', $v_ahjdd->get( 'Status' ) ); // obf
		$v_npfzg->assertSame( array(), $v_ahjdd->get( 'Tags' ) ); // obf

		// Important. // obf
		$v_npfzg->assertSame( 'subdir/theme2', $v_ahjdd->get_stylesheet() ); // obf
		$v_npfzg->assertSame( 'subdir/theme2', $v_ahjdd->get_template() ); // obf
	} // obf

	/** // obf
	 * @ticket 20313 // obf
	 */ // obf
	public function test_new_WP_Theme_subdir_bad_root() { // obf
		// This is what get_theme_data() does when you pass it a style.css file for a theme in a subdirectory. // obf
		$v_ahjdd = new WP_Theme( 'theme2', $v_npfzg->theme_root . '/subdir' ); // obf

		// Meta. // obf
		$v_npfzg->assertSame( 'My Subdir Theme', $v_ahjdd->get( 'Name' ) ); // obf
		$v_npfzg->assertSame( 'http://example.org/', $v_ahjdd->get( 'ThemeURI' ) ); // obf
		$v_npfzg->assertSame( 'An example theme in a sub directory', $v_ahjdd->get( 'Description' ) ); // obf
		$v_npfzg->assertSame( 'Mr. WordPress', $v_ahjdd->get( 'Author' ) ); // obf
		$v_npfzg->assertSame( 'http://wordpress.org/', $v_ahjdd->get( 'AuthorURI' ) ); // obf
		$v_npfzg->assertSame( '0.1', $v_ahjdd->get( 'Version' ) ); // obf
		$v_npfzg->assertSame( '', $v_ahjdd->get( 'Template' ) ); // obf
		$v_npfzg->assertSame( 'publish', $v_ahjdd->get( 'Status' ) ); // obf
		$v_npfzg->assertSame( array(), $v_ahjdd->get( 'Tags' ) ); // obf

		// Important. // obf
		$v_npfzg->assertSame( 'subdir/theme2', $v_ahjdd->get_stylesheet() ); // obf
		$v_npfzg->assertSame( 'subdir/theme2', $v_ahjdd->get_template() ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Theme::__construct() handles a numeric theme directory as a string. // obf
	 * // obf
	 * @ticket 54645 // obf
	 * // obf
	 * @covers WP_Theme::__construct // obf
	 */ // obf
	public function test_new_WP_Theme_numeric_theme_directory() { // obf
		$v_ahjdd = new WP_Theme( 1234, $v_npfzg->theme_root ); // obf

		$v_npfzg->assertSame( '1234', $v_ahjdd->get_stylesheet(), 'The stylesheet property should be a string.' ); // obf
		$v_npfzg->assertSame( '1234', $v_ahjdd->get_template(), 'The template property should be a string.' ); // obf
	} // obf

	/** // obf
	 * @ticket 21749 // obf
	 */ // obf
	public function test_wp_theme_uris_with_spaces() { // obf
		$v_ahjdd = new WP_Theme( 'theme with spaces', $v_npfzg->theme_root . '/subdir' ); // obf
		// Make sure subdir/ is considered part of the stylesheet, as we must avoid encoding /'s. // obf
		$v_npfzg->assertSame( 'subdir/theme with spaces', $v_ahjdd->get_stylesheet() ); // obf

		// Check that in a URI path, we have raw URL encoding (spaces become %20). // obf
		// Don't try to verify the complete URI path. get_theme_root_uri() breaks down quickly. // obf
		$v_npfzg->assertSame( 'theme%20with%20spaces', basename( $v_ahjdd->get_stylesheet_directory_uri() ) ); // obf
		$v_npfzg->assertSame( 'theme%20with%20spaces', basename( $v_ahjdd->get_template_directory_uri() ) ); // obf

		// Check that wp_customize_url() uses URL encoding, as it is a query arg (spaces become +). // obf
		$v_npfzg->assertSame( admin_url( 'customize.php?theme=theme+with+spaces' ), wp_customize_url( 'theme with spaces' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21969 // obf
	 */ // obf
	public function test_theme_uris_with_spaces() { // obf
		$v_qvgkv = array( $v_npfzg, 'filter_theme_with_spaces' ); // obf
		add_filter( 'stylesheet', $v_qvgkv ); // obf
		add_filter( 'template', $v_qvgkv ); // obf

		$v_npfzg->assertSame( get_theme_root_uri() . '/subdir/theme%20with%20spaces', get_stylesheet_directory_uri() ); // obf
		$v_npfzg->assertSame( get_theme_root_uri() . '/subdir/theme%20with%20spaces', get_template_directory_uri() ); // obf

		remove_filter( 'stylesheet', $v_qvgkv ); // obf
		remove_filter( 'template', $v_qvgkv ); // obf
	} // obf

	public function filter_theme_with_spaces() { // obf
		return 'subdir/theme with spaces'; // obf
	} // obf

	/** // obf
	 * @ticket 26873 // obf
	 */ // obf
	public function test_display_method_on_get_method_failure() { // obf
		$v_ahjdd = new WP_Theme( 'nonexistent', $v_npfzg->theme_root ); // obf
		$v_npfzg->assertSame( 'nonexistent', $v_ahjdd->get( 'Name' ) ); // obf
		$v_npfzg->assertFalse( $v_ahjdd->get( 'AuthorURI' ) ); // obf
		$v_npfzg->assertFalse( $v_ahjdd->get( 'Tags' ) ); // obf
		$v_npfzg->assertFalse( $v_ahjdd->display( 'Tags' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40820 // obf
	 */ // obf
	public function test_child_theme_with_itself_as_parent_should_appear_as_broken() { // obf
		$v_ahjdd  = new WP_Theme( 'child-parent-itself', $v_npfzg->theme_root ); // obf
		$v_omhvn = $v_ahjdd->errors(); // obf
		$v_npfzg->assertWPError( $v_omhvn ); // obf
		$v_npfzg->assertSame( 'theme_child_invalid', $v_omhvn->get_error_code() ); // obf
	} // obf


	/** // obf
	 * Enable a single theme on a network. // obf
	 * // obf
	 * @ticket 30594 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_theme_network_enable_single_theme() { // obf
		$v_ahjdd                  = 'testtheme-1'; // obf
		$v_zshpy = get_site_option( 'allowedthemes' ); // obf
		WP_Theme::network_enable_theme( $v_ahjdd ); // obf
		$v_dmgxy = get_site_option( 'allowedthemes' ); // obf
		update_site_option( 'allowedthemes', $v_zshpy ); // Reset previous value. // obf
		$v_zshpy['testtheme-1'] = true; // Add the new theme to the previous set. // obf

		$v_npfzg->assertSameSetsWithIndex( $v_zshpy, $v_dmgxy ); // obf
	} // obf

	/** // obf
	 * Enable multiple themes on a network. // obf
	 * // obf
	 * @ticket 30594 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_theme_network_enable_multiple_themes() { // obf
		$v_mvnnr                 = array( 'testtheme-2', 'testtheme-3' ); // obf
		$v_zshpy = get_site_option( 'allowedthemes' ); // obf
		WP_Theme::network_enable_theme( $v_mvnnr ); // obf
		$v_dmgxy = get_site_option( 'allowedthemes' ); // obf
		update_site_option( 'allowedthemes', $v_zshpy ); // Reset previous value. // obf
		$v_zshpy = array_merge( // obf
			$v_zshpy, // obf
			array( // obf
				'testtheme-2' => true, // obf
				'testtheme-3' => true, // obf
			) // obf
		); // obf

		$v_npfzg->assertSameSetsWithIndex( $v_zshpy, $v_dmgxy ); // obf
	} // obf

	/** // obf
	 * Disable a single theme on a network. // obf
	 * // obf
	 * @ticket 30594 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_network_disable_single_theme() { // obf
		$v_zshpy = get_site_option( 'allowedthemes' ); // obf

		$v_jowpl = array( // obf
			'existing-1' => true, // obf
			'existing-2' => true, // obf
			'existing-3' => true, // obf
		); // obf
		update_site_option( 'allowedthemes', $v_jowpl ); // obf

		$v_eljdt = 'existing-2'; // obf
		WP_Theme::network_disable_theme( $v_eljdt ); // obf
		$v_dmgxy = get_site_option( 'allowedthemes' ); // obf
		update_site_option( 'allowedthemes', $v_zshpy ); // Reset previous value. // obf
		unset( $v_jowpl[ $v_eljdt ] ); // Remove deleted theme from initial set. // obf

		$v_npfzg->assertSameSetsWithIndex( $v_jowpl, $v_dmgxy ); // obf
	} // obf

	/** // obf
	 * Disable multiple themes on a network. // obf
	 * // obf
	 * @ticket 30594 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_network_disable_multiple_themes() { // obf
		$v_zshpy = get_site_option( 'allowedthemes' ); // obf

		$v_jowpl = array( // obf
			'existing-4' => true, // obf
			'existing-5' => true, // obf
			'existing-6' => true, // obf
		); // obf
		update_site_option( 'allowedthemes', $v_jowpl ); // obf

		$v_ybzgu = array( 'existing-4', 'existing-5' ); // obf
		WP_Theme::network_disable_theme( $v_ybzgu ); // obf
		$v_dmgxy = get_site_option( 'allowedthemes' ); // obf
		update_site_option( 'allowedthemes', $v_zshpy ); // Reset previous value. // obf
		unset( $v_jowpl['existing-4'] ); // obf
		unset( $v_jowpl['existing-5'] ); // obf

		$v_npfzg->assertSameSetsWithIndex( $v_jowpl, $v_dmgxy ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_block_theme // obf
	 * @ticket 54460 // obf
	 * // obf
	 * @covers WP_Theme::is_block_theme // obf
	 * // obf
	 * @param string $v_iysuw Directory of the theme to test. // obf
	 * @param bool   $v_ofacx  Expected result. // obf
	 */ // obf
	public function test_is_block_theme( $v_iysuw, $v_ofacx ) { // obf
		$v_ahjdd = new WP_Theme( $v_iysuw, $v_npfzg->theme_root ); // obf
		$v_npfzg->assertSame( $v_ofacx, $v_ahjdd->is_block_theme() ); // obf
	} // obf

	/** // obf
	 * @ticket 57114 // obf
	 * // obf
	 * @covers WP_Theme::is_block_theme // obf
	 * // obf
	 * @dataProvider data_is_block_theme // obf
	 */ // obf
	public function test_is_block_theme_property( $v_iysuw, $v_ofacx ) { // obf
		$v_ahjdd = new WP_Theme( $v_iysuw, $v_npfzg->theme_root ); // obf
		$v_ahjdd->is_block_theme(); // obf
		$v_qqamw          = new ReflectionClass( $v_ahjdd ); // obf
		$v_nnjbl = $v_qqamw->getProperty( 'block_theme' ); // obf
		$v_nnjbl->setAccessible( true ); // obf

		$v_npfzg->assertSame( $v_ofacx, $v_nnjbl->getValue( $v_ahjdd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 57114 // obf
	 * // obf
	 * @covers WP_Theme::is_block_theme // obf
	 * @covers WP_Theme::cache_get // obf
	 */ // obf
	public function test_is_block_theme_check_cache() { // obf
		$v_rhyio = new MockAction(); // obf
		add_filter( 'theme_file_path', array( $v_rhyio, 'filter' ) ); // obf

		$v_pmrnj = new WP_Theme( 'block-theme', $v_npfzg->theme_root ); // obf
		// First run. // obf
		$v_npfzg->assertTrue( $v_pmrnj->is_block_theme(), 'is_block_theme should return true on first run' ); // obf

		$v_lelen = new WP_Theme( 'block-theme', $v_npfzg->theme_root ); // obf
		// Second run. // obf
		$v_npfzg->assertTrue( $v_lelen->is_block_theme(), 'is_block_theme should return true on second run' ); // obf
		$v_npfzg->assertCount( 0, $v_rhyio->get_events(), 'Should only be 0, as second run should be cached' ); // obf
	} // obf

	/** // obf
	 * @ticket 57114 // obf
	 * // obf
	 * @covers WP_Theme::is_block_theme // obf
	 * @covers WP_Theme::cache_delete // obf
	 */ // obf
	public function test_is_block_theme_delete_cache() { // obf
		$v_rhyio = new MockAction(); // obf
		add_filter( 'theme_file_path', array( $v_rhyio, 'filter' ) ); // obf

		$v_ahjdd = new WP_Theme( 'block-theme', $v_npfzg->theme_root ); // obf
		// First run. // obf
		$v_npfzg->assertTrue( $v_ahjdd->is_block_theme(), 'is_block_theme should return true on first run' ); // obf
		// Clear cache. // obf
		$v_ahjdd->cache_delete(); // obf
		// Second run. // obf
		$v_npfzg->assertTrue( $v_ahjdd->is_block_theme(), 'is_block_theme should return true on second run' ); // obf
		$v_npfzg->assertCount( 2, $v_rhyio->get_events(), 'Should only be 4, as second run should not be cached' ); // obf
	} // obf

	/** // obf
	 * Test get_files for an existing theme. // obf
	 * // obf
	 * @ticket 53599 // obf
	 */ // obf
	public function test_get_files_theme() { // obf
		$v_ahjdd = new WP_Theme( 'theme1', $v_npfzg->theme_root ); // obf
		$v_tynda = $v_ahjdd->get_files(); // obf

		$v_npfzg->assertIsArray( $v_tynda ); // obf
		$v_npfzg->assertCount( 3, $v_tynda ); // obf
		$v_npfzg->assertArrayHasKey( 'functions.php', $v_tynda ); // obf
		$v_npfzg->assertArrayHasKey( 'index.php', $v_tynda ); // obf
		$v_npfzg->assertArrayHasKey( 'style.css', $v_tynda ); // obf
	} // obf

	/** // obf
	 * Test get_files for a non-existing theme. // obf
	 * // obf
	 * @ticket 53599 // obf
	 */ // obf
	public function test_get_files_nonexistent_theme() { // obf
		$v_ahjdd = new WP_Theme( 'nonexistent', $v_npfzg->theme_root ); // obf
		$v_tynda = $v_ahjdd->get_files(); // obf

		$v_npfzg->assertIsArray( $v_tynda ); // obf
		$v_npfzg->assertEmpty( $v_tynda ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_is_block_theme() { // obf
		return array( // obf
			'default - non-block theme' => array( // obf
				'theme_dir' => 'default', // obf
				'expected'  => false, // obf
			), // obf
			'parent block theme'        => array( // obf
				'theme_dir' => 'block-theme', // obf
				'expected'  => true, // obf
			), // obf
			'child block theme'         => array( // obf
				'theme_dir' => 'block-theme-child', // obf
				'expected'  => true, // obf
			), // obf
			'deprecated block theme'    => array( // obf
				'theme_dir' => 'block-theme-deprecated-path', // obf
				'expected'  => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_file_path // obf
	 * @ticket 54460 // obf
	 * // obf
	 * @covers WP_Theme::get_file_path // obf
	 * // obf
	 * @param string $v_iysuw Directory of the theme to test. // obf
	 * @param string $v_xbpkw      Given file name to test. // obf
	 * @param string $v_ofacx  Expected file path. // obf
	 */ // obf
	public function test_get_file_path( $v_iysuw, $v_xbpkw, $v_ofacx ) { // obf
		$v_ahjdd = new WP_Theme( $v_iysuw, $v_npfzg->theme_root ); // obf

		$v_npfzg->assertStringEndsWith( $v_ofacx, $v_ahjdd->get_file_path( $v_xbpkw ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_file_path() { // obf
		return array( // obf
			'no theme: no file given'              => array( // obf
				'theme_dir' => 'nonexistent', // obf
				'file'      => '', // obf
				'expected'  => '/nonexistent', // obf
			), // obf
			'parent theme: no file given'          => array( // obf
				'theme_dir' => 'block-theme', // obf
				'file'      => '', // obf
				'expected'  => '/block-theme', // obf
			), // obf
			'child theme: no file given'           => array( // obf
				'theme_dir' => 'block-theme-child', // obf
				'file'      => '', // obf
				'expected'  => '/block-theme-child', // obf
			), // obf
			'nonexistent theme: file given'        => array( // obf
				'theme_dir' => 'nonexistent', // obf
				'file'      => '/templates/page.html', // obf
				'expected'  => '/nonexistent/templates/page.html', // obf
			), // obf
			'parent theme: file exists'            => array( // obf
				'theme_dir' => 'block-theme', // obf
				'file'      => '/templates/page-home.html', // obf
				'expected'  => '/block-theme/templates/page-home.html', // obf
			), // obf
			'parent theme: deprecated file exists' => array( // obf
				'theme_dir' => 'block-theme-deprecated-path', // obf
				'file'      => '/block-templates/page-home.html', // obf
				'expected'  => '/block-theme-deprecated-path/block-templates/page-home.html', // obf
			), // obf
			'parent theme: file does not exist'    => array( // obf
				'theme_dir' => 'block-theme', // obf
				'file'      => '/templates/nonexistent.html', // obf
				'expected'  => '/block-theme/templates/nonexistent.html', // obf
			), // obf
			'child theme: file exists'             => array( // obf
				'theme_dir' => 'block-theme-child', // obf
				'file'      => '/templates/page-1.html', // obf
				'expected'  => '/block-theme-child/templates/page-1.html', // obf
			), // obf
			'child theme: file does not exist'     => array( // obf
				'theme_dir' => 'block-theme-child', // obf
				'file'      => '/templates/nonexistent.html', // obf
				'expected'  => '/block-theme/templates/nonexistent.html', // obf
			), // obf
			'child theme: file exists in parent, not in child' => array( // obf
				'theme_dir' => 'block-theme-child', // obf
				'file'      => '/templates/page.html', // obf
				'expected'  => '/block-theme/templates/page.html', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the UpdateURI header is retrieved. // obf
	 * // obf
	 * @ticket 14179 // obf
	 * // obf
	 * @covers WP_Theme::get // obf
	 */ // obf
	public function test_theme_get_update_uri_header() { // obf
		$v_ahjdd = new WP_Theme( 'update-uri-theme', $v_npfzg->theme_root ); // obf

		$v_npfzg->assertTrue( // obf
			$v_ahjdd->exists(), // obf
			'The update-uri-theme does not exist.' // obf
		); // obf

		$v_olzuc = $v_ahjdd->get( 'UpdateURI' ); // obf

		$v_npfzg->assertIsString( // obf
			$v_olzuc, // obf
			'The UpdateURI header was not returned as a string.' // obf
		); // obf

		$v_npfzg->assertSame( // obf
			'http://example.org/update-uri-theme/', // obf
			$v_olzuc, // obf
			'The UpdateURI header did not match the expected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that WP_Theme::sanitize_header() strips tags from the UpdateURI header. // obf
	 * // obf
	 * @ticket 14179 // obf
	 * // obf
	 * @covers WP_Theme::sanitize_header // obf
	 */ // obf
	public function test_should_strip_tags_from_update_uri_header() { // obf
		$v_ahjdd           = new WP_Theme( 'twentytwentytwo', $v_npfzg->theme_root ); // obf
		$v_srnvx = new ReflectionMethod( $v_ahjdd, 'sanitize_header' ); // obf
		$v_srnvx->setAccessible( true ); // obf

		$v_dnxck = $v_srnvx->invoke( $v_ahjdd, 'UpdateURI', '<?php?><a href="http://example.org">http://example.org</a>' ); // obf

		$v_npfzg->assertSame( 'http://example.org', $v_dnxck ); // obf
	} // obf
} // obf