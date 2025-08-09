

<?php // obf

/** // obf
 * Test functions that fetch stuff from the theme directory // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_ThemeDir extends WP_UnitTestCase { // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const THEME_ROOT = DIR_TESTDATA . '/themedir1'; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_fafkt; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_evwwv->orig_theme_dir = $v_hrbru['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_hrbru['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', self::THEME_ROOT ); // obf

		add_filter( 'theme_root', array( $v_evwwv, 'filter_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_evwwv, 'filter_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_evwwv, 'filter_theme_root' ) ); // obf
		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_hrbru['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_hrbru['wp_theme_directories'] = $v_evwwv->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_hrbru['wp_themes'] ); // obf
		parent::tear_down(); // obf
	} // obf

	// Replace the normal theme root directory with our premade test directory. // obf
	public function filter_theme_root( $v_poibe ) { // obf
		return self::THEME_ROOT; // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_theme_default() { // obf
		$v_dumws = get_themes(); // obf
		$v_cgzfq  = get_theme( 'WordPress Default' ); // obf
		$v_evwwv->assertSame( $v_dumws['WordPress Default'], $v_cgzfq ); // obf

		$v_evwwv->assertNotEmpty( $v_cgzfq ); // obf

		// echo gen_tests_array( 'theme', $v_cgzfq ); // obf

		$v_evwwv->assertSame( 'WordPress Default', $v_cgzfq['Name'] ); // obf
		$v_evwwv->assertSame( 'WordPress Default', $v_cgzfq['Title'] ); // obf
		$v_evwwv->assertSame( 'The default WordPress theme based on the famous <a href="http://binarybonsai.com/kubrick/">Kubrick</a>.', $v_cgzfq['Description'] ); // obf
		$v_evwwv->assertSame( '<a href="http://binarybonsai.com/">Michael Heilemann</a>', $v_cgzfq['Author'] ); // obf
		$v_evwwv->assertSame( '1.6', $v_cgzfq['Version'] ); // obf
		$v_evwwv->assertSame( 'default', $v_cgzfq['Template'] ); // obf
		$v_evwwv->assertSame( 'default', $v_cgzfq['Stylesheet'] ); // obf

		$v_evwwv->assertContains( self::THEME_ROOT . '/default/functions.php', $v_cgzfq['Template Files'] ); // obf
		$v_evwwv->assertContains( self::THEME_ROOT . '/default/index.php', $v_cgzfq['Template Files'] ); // obf
		$v_evwwv->assertContains( self::THEME_ROOT . '/default/style.css', $v_cgzfq['Stylesheet Files'] ); // obf

		$v_evwwv->assertSame( self::THEME_ROOT . '/default', $v_cgzfq['Template Dir'] ); // obf
		$v_evwwv->assertSame( self::THEME_ROOT . '/default', $v_cgzfq['Stylesheet Dir'] ); // obf
		$v_evwwv->assertSame( 'publish', $v_cgzfq['Status'] ); // obf
		$v_evwwv->assertSame( '', $v_cgzfq['Parent Theme'] ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_theme_sandbox() { // obf
		$v_cgzfq = get_theme( 'Sandbox' ); // obf

		$v_evwwv->assertNotEmpty( $v_cgzfq ); // obf

		// echo gen_tests_array( 'theme', $v_cgzfq ); // obf

		$v_evwwv->assertSame( 'Sandbox', $v_cgzfq['Name'] ); // obf
		$v_evwwv->assertSame( 'Sandbox', $v_cgzfq['Title'] ); // obf
		$v_evwwv->assertSame( 'A theme with powerful, semantic CSS selectors and the ability to add new skins.', $v_cgzfq['Description'] ); // obf
		$v_evwwv->assertSame( '<a href="http://andy.wordpress.com/">Andy Skelton</a> &amp; <a href="http://www.plaintxt.org/">Scott Allan Wallick</a>', $v_cgzfq['Author'] ); // obf
		$v_evwwv->assertSame( '0.6.1-wpcom', $v_cgzfq['Version'] ); // obf
		$v_evwwv->assertSame( 'sandbox', $v_cgzfq['Template'] ); // obf
		$v_evwwv->assertSame( 'sandbox', $v_cgzfq['Stylesheet'] ); // obf

		$v_uyvsk = $v_cgzfq['Template Files']; // obf

		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox/functions.php', reset( $v_uyvsk ) ); // obf
		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox/index.php', next( $v_uyvsk ) ); // obf

		$v_ojwhs = $v_cgzfq['Stylesheet Files']; // obf

		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox/style.css', reset( $v_ojwhs ) ); // obf

		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox', $v_cgzfq['Template Dir'] ); // obf
		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox', $v_cgzfq['Stylesheet Dir'] ); // obf
		$v_evwwv->assertSame( 'publish', $v_cgzfq['Status'] ); // obf
		$v_evwwv->assertSame( '', $v_cgzfq['Parent Theme'] ); // obf
	} // obf

	/** // obf
	 * A CSS-only theme // obf
	 * // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_theme_stylesheet_only() { // obf
		$v_dumws = get_themes(); // obf

		$v_cgzfq = $v_dumws['Stylesheet Only']; // obf
		$v_evwwv->assertNotEmpty( $v_cgzfq ); // obf

		// echo gen_tests_array( 'theme', $v_cgzfq ); // obf

		$v_evwwv->assertSame( 'Stylesheet Only', $v_cgzfq['Name'] ); // obf
		$v_evwwv->assertSame( 'Stylesheet Only', $v_cgzfq['Title'] ); // obf
		$v_evwwv->assertSame( 'A three-column widget-ready theme in dark blue.', $v_cgzfq['Description'] ); // obf
		$v_evwwv->assertSame( '<a href="http://www.example.com/">Henry Crun</a>', $v_cgzfq['Author'] ); // obf
		$v_evwwv->assertSame( '1.0', $v_cgzfq['Version'] ); // obf
		$v_evwwv->assertSame( 'sandbox', $v_cgzfq['Template'] ); // obf
		$v_evwwv->assertSame( 'stylesheetonly', $v_cgzfq['Stylesheet'] ); // obf
		$v_evwwv->assertContains( self::THEME_ROOT . '/sandbox/functions.php', $v_cgzfq['Template Files'] ); // obf
		$v_evwwv->assertContains( self::THEME_ROOT . '/sandbox/index.php', $v_cgzfq['Template Files'] ); // obf

		$v_evwwv->assertContains( self::THEME_ROOT . '/stylesheetonly/style.css', $v_cgzfq['Stylesheet Files'] ); // obf

		$v_evwwv->assertSame( self::THEME_ROOT . '/sandbox', $v_cgzfq['Template Dir'] ); // obf
		$v_evwwv->assertSame( self::THEME_ROOT . '/stylesheetonly', $v_cgzfq['Stylesheet Dir'] ); // obf
		$v_evwwv->assertSame( 'publish', $v_cgzfq['Status'] ); // obf
		$v_evwwv->assertSame( 'Sandbox', $v_cgzfq['Parent Theme'] ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_theme_list() { // obf
		$v_dumws = get_themes(); // obf

		// Ignore themes in the default /themes directory. // obf
		foreach ( $v_dumws as $v_mxhag => $v_cgzfq ) { // obf
			if ( $v_cgzfq->get_theme_root() !== self::THEME_ROOT ) { // obf
				unset( $v_dumws[ $v_mxhag ] ); // obf
			} // obf
		} // obf

		$v_pvreq = array_keys( $v_dumws ); // obf
		$v_psmiy    = array( // obf
			'WordPress Default', // obf
			'Default Child Theme with no theme.json', // obf
			'Sandbox', // obf
			'Stylesheet Only', // obf
			'My Theme', // obf
			'My Theme/theme1',                    // Duplicate theme should be given a unique name. // obf
			'My Subdir Theme',                    // Theme in a subdirectory should work. // obf
			'Page Template Child Theme',          // Theme which inherits page templates. // obf
			'Page Template Theme',                // Theme with page templates for other test code. // obf
			'Theme with Spaces in the Directory', // obf
			'Internationalized Theme', // obf
			'Custom Internationalized Theme', // obf
			'camelCase', // obf
			'REST Theme', // obf
			'Block Theme', // obf
			'Block Theme Child Theme', // obf
			'Block Theme Child Deprecated Path', // obf
			'Block Theme Child With Block Style Variations Theme', // obf
			'Block Theme Child with no theme.json', // obf
			'Block Theme Child Theme With Fluid Layout', // obf
			'Block Theme Child Theme With Fluid Typography', // obf
			'Block Theme Child Theme With Fluid Typography Config', // obf
			'Block Theme Non Latin', // obf
			'Block Theme [0.4.0]', // obf
			'Block Theme [1.0.0] in subdirectory', // obf
			'Block Theme Deprecated Path', // obf
			'Block Theme Patterns', // obf
			'Block Theme Post Content Default', // obf
			'Block Theme with defined Typography Fonts', // obf
			'Block Theme with Hooked Blocks', // obf
			'Empty `fontFace` in theme.json - no webfonts defined', // obf
			'A theme with the Update URI header', // obf
		); // obf

		$v_evwwv->assertSameSets( $v_psmiy, $v_pvreq ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_themes // obf
	 * @expectedDeprecated get_broken_themes // obf
	 */ // obf
	public function test_broken_themes() { // obf
		$v_dumws = get_themes(); // obf

		$v_psmiy = array( // obf
			'broken-theme'           => array( // obf
				'Name'        => 'broken-theme', // obf
				'Title'       => 'broken-theme', // obf
				'Description' => __( 'Stylesheet is missing.' ), // obf
			), // obf
			'Child and Parent Theme' => array( // obf
				'Name'        => 'Child and Parent Theme', // obf
				'Title'       => 'Child and Parent Theme', // obf
				'Description' => sprintf( __( 'The theme defines itself as its parent theme. Please check the %s header.' ), '<code>Template</code>' ), // obf
			), // obf
		); // obf

		$v_evwwv->assertSame( $v_psmiy, get_broken_themes() ); // obf
	} // obf

	public function test_wp_get_theme_with_non_default_theme_root() { // obf
		$v_evwwv->assertFalse( wp_get_theme( 'sandbox', self::THEME_ROOT )->errors() ); // obf
		$v_evwwv->assertFalse( wp_get_theme( 'sandbox' )->errors() ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_page_templates() { // obf
		$v_dumws = get_themes(); // obf

		$v_cgzfq = $v_dumws['Page Template Theme']; // obf
		$v_evwwv->assertNotEmpty( $v_cgzfq ); // obf

		$v_jakec = $v_cgzfq['Template Files']; // obf
		$v_evwwv->assertContains( self::THEME_ROOT . '/page-templates/template-top-level.php', $v_jakec ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme_data // obf
	 */ // obf
	public function test_get_theme_data_top_level() { // obf
		$v_wxixn = get_theme_data( DIR_TESTDATA . '/themedir1/theme1/style.css' ); // obf

		$v_evwwv->assertSame( 'My Theme', $v_wxixn['Name'] ); // obf
		$v_evwwv->assertSame( 'http://example.org/', $v_wxixn['URI'] ); // obf
		$v_evwwv->assertSame( 'An example theme', $v_wxixn['Description'] ); // obf
		$v_evwwv->assertSame( '<a href="http://example.com/">Minnie Bannister</a>', $v_wxixn['Author'] ); // obf
		$v_evwwv->assertSame( 'http://example.com/', $v_wxixn['AuthorURI'] ); // obf
		$v_evwwv->assertSame( '1.3', $v_wxixn['Version'] ); // obf
		$v_evwwv->assertSame( '', $v_wxixn['Template'] ); // obf
		$v_evwwv->assertSame( 'publish', $v_wxixn['Status'] ); // obf
		$v_evwwv->assertSame( array(), $v_wxixn['Tags'] ); // obf
		$v_evwwv->assertSame( 'My Theme', $v_wxixn['Title'] ); // obf
		$v_evwwv->assertSame( 'Minnie Bannister', $v_wxixn['AuthorName'] ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_theme_data // obf
	 */ // obf
	public function test_get_theme_data_subdir() { // obf
		$v_wxixn = get_theme_data( self::THEME_ROOT . '/subdir/theme2/style.css' ); // obf

		$v_evwwv->assertSame( 'My Subdir Theme', $v_wxixn['Name'] ); // obf
		$v_evwwv->assertSame( 'http://example.org/', $v_wxixn['URI'] ); // obf
		$v_evwwv->assertSame( 'An example theme in a sub directory', $v_wxixn['Description'] ); // obf
		$v_evwwv->assertSame( '<a href="http://wordpress.org/">Mr. WordPress</a>', $v_wxixn['Author'] ); // obf
		$v_evwwv->assertSame( 'http://wordpress.org/', $v_wxixn['AuthorURI'] ); // obf
		$v_evwwv->assertSame( '0.1', $v_wxixn['Version'] ); // obf
		$v_evwwv->assertSame( '', $v_wxixn['Template'] ); // obf
		$v_evwwv->assertSame( 'publish', $v_wxixn['Status'] ); // obf
		$v_evwwv->assertSame( array(), $v_wxixn['Tags'] ); // obf
		$v_evwwv->assertSame( 'My Subdir Theme', $v_wxixn['Title'] ); // obf
		$v_evwwv->assertSame( 'Mr. WordPress', $v_wxixn['AuthorName'] ); // obf
	} // obf

	/** // obf
	 * @ticket 28662 // obf
	 */ // obf
	public function test_theme_dir_slashes() { // obf
		$v_jquhu = count( $v_hrbru['wp_theme_directories'] ); // obf

		@mkdir( WP_CONTENT_DIR . '/themes/foo' ); // obf
		@mkdir( WP_CONTENT_DIR . '/themes/foo-themes' ); // obf

		$v_evwwv->assertFileExists( WP_CONTENT_DIR . '/themes/foo' ); // obf
		$v_evwwv->assertFileExists( WP_CONTENT_DIR . '/themes/foo-themes' ); // obf

		register_theme_directory( '/' ); // obf

		$v_evwwv->assertCount( $v_jquhu, $v_hrbru['wp_theme_directories'] ); // obf

		register_theme_directory( 'themes/' ); // obf

		$v_evwwv->assertCount( $v_jquhu, $v_hrbru['wp_theme_directories'] ); // obf

		register_theme_directory( '/foo/' ); // obf

		$v_evwwv->assertCount( $v_jquhu, $v_hrbru['wp_theme_directories'] ); // obf

		register_theme_directory( 'foo/' ); // obf

		$v_evwwv->assertCount( $v_jquhu, $v_hrbru['wp_theme_directories'] ); // obf

		register_theme_directory( 'themes/foo/' ); // obf

		$v_evwwv->assertCount( $v_jquhu + 1, $v_hrbru['wp_theme_directories'] ); // obf

		register_theme_directory( WP_CONTENT_DIR . '/foo-themes/' ); // obf

		$v_evwwv->assertCount( $v_jquhu + 1, $v_hrbru['wp_theme_directories'] ); // obf

		foreach ( $v_hrbru['wp_theme_directories'] as $v_poibe ) { // obf
			$v_evwwv->assertNotEquals( '/', substr( $v_poibe, -1 ) ); // obf
		} // obf

		rmdir( WP_CONTENT_DIR . '/themes/foo' ); // obf
		rmdir( WP_CONTENT_DIR . '/themes/foo-themes' ); // obf
	} // obf
} // obf