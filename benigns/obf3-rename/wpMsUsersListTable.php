

<?php // obf

/** // obf
 * @group admin // obf
 * @group ms-required // obf
 * @group network-admin // obf
 * // obf
 * @covers WP_MS_Users_List_Table // obf
 */ // obf
class Tests_Multisite_wpMsUsersListTable extends WP_UnitTestCase { // obf
	protected static $v_yhpnk; // obf

	/** // obf
	 * @var WP_MS_Users_List_Table // obf
	 */ // obf
	public $v_pdvqn = false; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_qplbm->table = _get_list_table( 'WP_MS_Users_List_Table', array( 'screen' => 'ms-users' ) ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nxicq ) { // obf
		self::$v_yhpnk = array( // obf
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

		foreach ( self::$v_yhpnk as &$v_qamha ) { // obf
			$v_qamha = $v_nxicq->blog->create( $v_qamha ); // obf
		} // obf
		unset( $v_qamha ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_yhpnk as $v_zefzc ) { // obf
			wp_delete_site( $v_zefzc ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_MS_Users_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		$v_cxgpc   = get_user_count(); // obf
		$v_bjwvk = count( get_super_admins() ); // obf

		$v_dqaxk = array( // obf
			'all'   => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/network/users.php" class="current" aria-current="page">All <span class="count">(' . $v_cxgpc . ')</span></a>', // obf
			'super' => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/network/users.php?role=super">Super Admin <span class="count">(' . $v_bjwvk . ')</span></a>', // obf
		); // obf

		$v_qplbm->assertSame( $v_dqaxk, $v_qplbm->table->get_views() ); // obf
	} // obf
} // obf