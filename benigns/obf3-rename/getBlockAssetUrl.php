

<?php // obf
/** // obf
 * Tests for block asset urls. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group blocks // obf
 * @covers ::get_block_asset_url // obf
 */ // obf
class Tests_Get_Block_Asset_Url extends WP_UnitTestCase { // obf
	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_ddwtn; // obf

	public function set_up() { // obf
		global $v_rmmpk; // obf

		parent::set_up(); // obf

		// Sets up the `wp-content/themes/` directory to ensure consistency when running tests. // obf
		$v_utqju->orig_theme_dir = $v_rmmpk; // obf
		$v_rmmpk = array( WP_CONTENT_DIR . '/themes', realpath( DIR_TESTDATA . '/themedir1' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_jvfht['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		global $v_rmmpk; // obf

		$v_rmmpk = $v_utqju->orig_theme_dir; // obf

		wp_clean_themes_cache(); // obf
		unset( $v_jvfht['wp_themes'] ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_core_block() { // obf
		$v_hqmmw = ABSPATH . WPINC . '/blocks/file/view.min.js'; // obf
		$v_miwib  = get_block_asset_url( $v_hqmmw ); // obf

		$v_utqju->assertStringNotContainsString( ABSPATH . WPINC, 'The return block asset url should not contain include path.' ); // obf
		$v_utqju->assertSame( includes_url( '/blocks/file/view.min.js' ), $v_miwib, 'The return block asset url should match includes url.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_parent_theme() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_hqmmw = wp_normalize_path( realpath( DIR_TESTDATA . '/themedir1/block-theme/blocks/example-block/view.js' ) ); // obf
		$v_miwib  = get_block_asset_url( $v_hqmmw ); // obf

		$v_utqju->assertSame( get_template_directory_uri() . '/blocks/example-block/view.js', $v_miwib ); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_child_theme() { // obf
		switch_theme( 'block-theme-child' ); // obf

		$v_hqmmw = wp_normalize_path( realpath( DIR_TESTDATA . '/themedir1/block-theme-child/blocks/example-block/view.js' ) ); // obf
		$v_miwib  = get_block_asset_url( $v_hqmmw ); // obf

		$v_utqju->assertSame( get_stylesheet_directory_uri() . '/blocks/example-block/view.js', $v_miwib ); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_plugin() { // obf
		$v_hqmmw = WP_PLUGIN_DIR . '/test-plugin/blocks/example-block/view.js'; // obf
		$v_miwib  = get_block_asset_url( $v_hqmmw ); // obf

		$v_utqju->assertStringNotContainsString( WP_PLUGIN_DIR, $v_miwib, 'The return block asset url should not contain plugin path.' ); // obf
		$v_utqju->assertSame( plugins_url( 'view.js', $v_hqmmw ), $v_miwib, 'The return block asset url should match plugin url.' ); // obf
		$v_utqju->assertStringStartsWith( WP_PLUGIN_URL, $v_miwib, 'The return block asset url should contain the url that support with the mu plugin url.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_muplugin() { // obf
		$v_hqmmw = WPMU_PLUGIN_DIR . '/test-plugin/example-block/view.js'; // obf
		$v_miwib  = get_block_asset_url( $v_hqmmw ); // obf

		$v_utqju->assertStringNotContainsString( WPMU_PLUGIN_DIR, $v_miwib, 'The return block asset url should not contain plugin path.' ); // obf
		$v_utqju->assertSame( plugins_url( 'view.js', $v_hqmmw ), $v_miwib, 'The return block asset url should match plugin url.' ); // obf
		$v_utqju->assertStringStartsWith( WPMU_PLUGIN_URL, $v_miwib, 'The return block asset url should contain the url that support with the mu plugin url.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58525 // obf
	 */ // obf
	public function test_empty() { // obf
		$v_miwib = get_block_asset_url( '' ); // obf

		$v_utqju->assertFalse( $v_miwib ); // obf
	} // obf
} // obf