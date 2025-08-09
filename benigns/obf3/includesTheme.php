

<?php // obf
/** // obf
 * @group admin // obf
 * @group themes // obf
 */ // obf
class Tests_Admin_IncludesTheme extends WP_UnitTestCase { // obf

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
	private $v_azaws; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_utywe->orig_theme_dir            = $v_ciljd['wp_theme_directories']; // obf
		$v_ciljd['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', self::THEME_ROOT ); // obf

		add_filter( 'theme_root', array( $v_utywe, 'filter_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_utywe, 'filter_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_utywe, 'filter_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_ciljd['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_ciljd['wp_theme_directories'] = $v_utywe->orig_theme_dir; // obf
		remove_filter( 'theme_root', array( $v_utywe, 'filter_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_utywe, 'filter_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_utywe, 'filter_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_ciljd['wp_themes'] ); // obf
		parent::tear_down(); // obf
	} // obf

	// Replace the normal theme root directory with our premade test directory. // obf
	public function filter_theme_root( $v_fuogo ) { // obf
		return self::THEME_ROOT; // obf
	} // obf

	/** // obf
	 * @ticket 10959 // obf
	 * @ticket 11216 // obf
	 * @expectedDeprecated get_theme // obf
	 * @expectedDeprecated get_themes // obf
	 */ // obf
	public function test_page_templates() { // obf
		$v_jmbes = get_theme( 'Page Template Theme' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level'                           => 'template-top-level.php', // obf
				'Sub Dir'                             => 'subdir/template-sub-dir.php', // obf
				'This Template Header Is On One Line' => 'template-header.php', // obf
			), // obf
			get_page_templates() // obf
		); // obf

		$v_jmbes = wp_get_theme( 'page-templates' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level'                           => 'template-top-level.php', // obf
				'Sub Dir'                             => 'subdir/template-sub-dir.php', // obf
				'This Template Header Is On One Line' => 'template-header.php', // obf
			), // obf
			get_page_templates() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_page_templates_different_post_types() { // obf
		$v_jmbes = wp_get_theme( 'page-templates' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level' => 'template-top-level-post-types.php', // obf
				'Sub Dir'   => 'subdir/template-sub-dir-post-types.php', // obf
			), // obf
			get_page_templates( null, 'foo' ) // obf
		); // obf
		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level' => 'template-top-level-post-types.php', // obf
				'Sub Dir'   => 'subdir/template-sub-dir-post-types.php', // obf
			), // obf
			get_page_templates( null, 'post' ) // obf
		); // obf
		$v_utywe->assertSame( array(), get_page_templates( null, 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38766 // obf
	 */ // obf
	public function test_page_templates_for_post_types_with_trailing_periods() { // obf
		$v_jmbes = wp_get_theme( 'page-templates' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'No Trailing Period'            => '38766/no-trailing-period-post-types.php', // obf
				'Trailing Period.'              => '38766/trailing-period-post-types.php', // obf
				'Trailing Comma,'               => '38766/trailing-comma-post-types.php', // obf
				'Trailing Period, White Space.' => '38766/trailing-period-whitespace-post-types.php', // obf
				'Trailing White Space, Period.' => '38766/trailing-whitespace-period-post-types.php', // obf
				'Tilde in Post Type.'           => '38766/tilde-post-types.php', // obf
			), // obf
			get_page_templates( null, 'period' ) // obf
		); // obf
		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'No Trailing Period'            => '38766/no-trailing-period-post-types.php', // obf
				'Trailing Period.'              => '38766/trailing-period-post-types.php', // obf
				'Trailing Comma,'               => '38766/trailing-comma-post-types.php', // obf
				'Trailing Period, White Space.' => '38766/trailing-period-whitespace-post-types.php', // obf
				'Trailing White Space, Period.' => '38766/trailing-whitespace-period-post-types.php', // obf
			), // obf
			get_page_templates( null, 'full-stop' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 38696 // obf
	 */ // obf
	public function test_page_templates_child_theme() { // obf
		$v_jmbes = wp_get_theme( 'page-templates-child' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level'                  => 'template-top-level-post-types.php', // obf
				'Sub Dir'                    => 'subdir/template-sub-dir-post-types.php', // obf
				'Top Level In A Child Theme' => 'template-top-level-post-types-child.php', // obf
				'Sub Dir In A Child Theme'   => 'subdir/template-sub-dir-post-types-child.php', // obf
			), // obf
			get_page_templates( null, 'foo' ) // obf
		); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level' => 'template-top-level-post-types.php', // obf
				'Sub Dir'   => 'subdir/template-sub-dir-post-types.php', // obf
			), // obf
			get_page_templates( null, 'post' ) // obf
		); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'Top Level'                           => 'template-top-level.php', // obf
				'Sub Dir'                             => 'subdir/template-sub-dir.php', // obf
				'This Template Header Is On One Line' => 'template-header.php', // obf
			), // obf
			get_page_templates() // obf
		); // obf

		$v_utywe->assertSame( array(), get_page_templates( null, 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41717 // obf
	 */ // obf
	public function test_get_post_templates_child_theme() { // obf
		$v_jmbes = wp_get_theme( 'page-templates-child' ); // obf
		$v_utywe->assertNotEmpty( $v_jmbes ); // obf

		switch_theme( $v_jmbes['Template'], $v_jmbes['Stylesheet'] ); // obf

		$v_wqwpy = $v_jmbes->get_post_templates(); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'template-top-level-post-types.php'       => 'Top Level', // obf
				'subdir/template-sub-dir-post-types.php'  => 'Sub Dir', // obf
				'template-top-level-post-types-child.php' => 'Top Level In A Child Theme', // obf
				'subdir/template-sub-dir-post-types-child.php' => 'Sub Dir In A Child Theme', // obf
			), // obf
			$v_wqwpy['foo'] // obf
		); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'template-top-level-post-types.php'      => 'Top Level', // obf
				'subdir/template-sub-dir-post-types.php' => 'Sub Dir', // obf
			), // obf
			$v_wqwpy['post'] // obf
		); // obf

		$v_utywe->assertSameSetsWithIndex( // obf
			array( // obf
				'template-top-level.php'      => 'Top Level', // obf
				'subdir/template-sub-dir.php' => 'Sub Dir', // obf
				'template-header.php'         => 'This Template Header Is On One Line', // obf
			), // obf
			$v_wqwpy['page'] // obf
		); // obf
	} // obf

	/** // obf
	 * Test that the list of theme features pulled from the WordPress.org API returns the expected data structure. // obf
	 * // obf
	 * Differences in the structure can also trigger failure by causing PHP notices/warnings. // obf
	 * // obf
	 * @group external-http // obf
	 * @ticket 28121 // obf
	 */ // obf
	public function test_get_theme_featured_list_api() { // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		$v_lxfan = get_theme_feature_list( true ); // obf
		$v_utywe->assertNonEmptyMultidimensionalArray( $v_lxfan ); // obf
	} // obf

	/** // obf
	 * Test that the list of theme features hardcoded into Core returns the expected data structure. // obf
	 * // obf
	 * Differences in the structure can also trigger failure by causing PHP notices/warnings. // obf
	 * // obf
	 * @group external-http // obf
	 * @ticket 28121 // obf
	 */ // obf
	public function test_get_theme_featured_list_hardcoded() { // obf
		$v_gxkuc = get_theme_feature_list( false ); // obf
		$v_utywe->assertNonEmptyMultidimensionalArray( $v_gxkuc ); // obf
	} // obf
} // obf