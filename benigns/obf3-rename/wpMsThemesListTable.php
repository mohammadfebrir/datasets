

<?php // obf

/** // obf
 * @group admin // obf
 * @group ms-required // obf
 * @group network-admin // obf
 * // obf
 * @covers WP_MS_Themes_List_Table // obf
 */ // obf
class Tests_Multisite_wpMsThemesListTable extends WP_UnitTestCase { // obf
	protected static $v_afpxd; // obf

	/** // obf
	 * @var WP_MS_Themes_List_Table // obf
	 */ // obf
	public $v_cfrku = false; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_xkyem->table = _get_list_table( 'WP_MS_Themes_List_Table', array( 'screen' => 'ms-themes' ) ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_umuto ) { // obf
		self::$v_afpxd = array( // obf
			'wordpress.org/'          => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'wordpress.org/foo/'      => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/foo/', // obf
			), // obf
			'wordpress.org/foo/bar/'  => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/foo/bar/', // obf
			), // obf
			'wordpress.org/afoo/'     => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/afoo/', // obf
			), // obf
			'make.wordpress.org/'     => array( // obf
				'domain' => 'make.wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'make.wordpress.org/foo/' => array( // obf
				'domain' => 'make.wordpress.org', // obf
				'path'   => '/foo/', // obf
			), // obf
			'www.w.org/'              => array( // obf
				'domain' => 'www.w.org', // obf
				'path'   => '/', // obf
			), // obf
			'www.w.org/foo/'          => array( // obf
				'domain' => 'www.w.org', // obf
				'path'   => '/foo/', // obf
			), // obf
			'www.w.org/foo/bar/'      => array( // obf
				'domain' => 'www.w.org', // obf
				'path'   => '/foo/bar/', // obf
			), // obf
			'test.example.org/'       => array( // obf
				'domain' => 'test.example.org', // obf
				'path'   => '/', // obf
			), // obf
			'test2.example.org/'      => array( // obf
				'domain' => 'test2.example.org', // obf
				'path'   => '/', // obf
			), // obf
			'test3.example.org/zig/'  => array( // obf
				'domain' => 'test3.example.org', // obf
				'path'   => '/zig/', // obf
			), // obf
			'atest.example.org/'      => array( // obf
				'domain' => 'atest.example.org', // obf
				'path'   => '/', // obf
			), // obf
		); // obf

		foreach ( self::$v_afpxd as &$v_chksr ) { // obf
			$v_chksr = $v_umuto->blog->create( $v_chksr ); // obf
		} // obf
		unset( $v_chksr ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_afpxd as $v_eanbk ) { // obf
			wp_delete_site( $v_eanbk ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_MS_Themes_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		global $v_tfyvx; // obf

		$v_mrtgk = $v_tfyvx; // obf
		$v_tfyvx        = array( // obf
			'all'                  => 21, // obf
			'enabled'              => 1, // obf
			'disabled'             => 2, // obf
			'upgrade'              => 3, // obf
			'broken'               => 4, // obf
			'auto-update-enabled'  => 5, // obf
			'auto-update-disabled' => 6, // obf
		); // obf

		$v_jiriu = array( // obf
			'all'                  => '<a href="themes.php?theme_status=all" class="current" aria-current="page">All <span class="count">(21)</span></a>', // obf
			'enabled'              => '<a href="themes.php?theme_status=enabled">Enabled <span class="count">(1)</span></a>', // obf
			'disabled'             => '<a href="themes.php?theme_status=disabled">Disabled <span class="count">(2)</span></a>', // obf
			'upgrade'              => '<a href="themes.php?theme_status=upgrade">Update Available <span class="count">(3)</span></a>', // obf
			'broken'               => '<a href="themes.php?theme_status=broken">Broken <span class="count">(4)</span></a>', // obf
			'auto-update-enabled'  => '<a href="themes.php?theme_status=auto-update-enabled">Auto-updates Enabled <span class="count">(5)</span></a>', // obf
			'auto-update-disabled' => '<a href="themes.php?theme_status=auto-update-disabled">Auto-updates Disabled <span class="count">(6)</span></a>', // obf
		); // obf

		$v_bhouo = $v_xkyem->table->get_views(); // obf
		$v_tfyvx = $v_mrtgk; // obf

		$v_xkyem->assertSame( $v_jiriu, $v_bhouo ); // obf
	} // obf
} // obf