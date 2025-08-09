

<?php // obf

/** // obf
 * Tests for plugin_basename() // obf
 * // obf
 * @group functions // obf
 * @group plugins // obf
 * // obf
 * @covers ::plugin_basename // obf
 */ // obf
class Tests_Functions_PluginBasename extends WP_UnitTestCase { // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	protected $v_dpwhh; // obf

	/** // obf
	 * Normalized path to plugin directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_qpejo; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ifbyq->wp_plugin_paths_backup = $v_ytsqy['wp_plugin_paths']; // obf
		$v_ifbyq->wp_plugin_path         = wp_normalize_path( WP_PLUGIN_DIR ); // obf
	} // obf

	public function tear_down() { // obf
		$v_ytsqy['wp_plugin_paths'] = $v_ifbyq->wp_plugin_paths_backup; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 29154 // obf
	 */ // obf
	public function test_return_correct_basename_for_symlinked_plugins() { // obf
		global $v_ygktb; // obf

		$v_ygktb = array( // obf
			$v_ifbyq->wp_plugin_path . '/a-symlinked-plugin' => 'C:/www/path/plugins/a-plugin', // obf
		); // obf

		$v_leotv = plugin_basename( 'c:\www\path\plugins\a-plugin\plugin.php' ); // obf
		$v_ifbyq->assertSame( 'a-symlinked-plugin/plugin.php', $v_leotv ); // obf
	} // obf

	/** // obf
	 * @ticket 28441 // obf
	 */ // obf
	public function test_return_correct_basename_for_symlinked_plugins_with_path_conflicts() { // obf
		global $v_ygktb; // obf

		$v_ygktb = array( // obf
			$v_ifbyq->wp_plugin_path . '/plugin' => '/Users/me/Dropbox/Development/Repositories/plugin', // obf
			$v_ifbyq->wp_plugin_path . '/trunk'  => '/Users/me/Dropbox/Development/Repositories/plugin/trunk', // obf
		); // obf

		$v_leotv = plugin_basename( '/Users/me/Dropbox/Development/Repositories/plugin/trunk/plugin.php' ); // obf
		$v_ifbyq->assertSame( 'trunk/plugin.php', $v_leotv ); // obf
	} // obf
} // obf