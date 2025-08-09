

<?php // obf

/** // obf
 * @group admin // obf
 * @group ms-required // obf
 * @group network-admin // obf
 */ // obf
class Tests_Multisite_wpMsSitesListTable extends WP_UnitTestCase { // obf

	protected static $v_mejqp; // obf

	/** // obf
	 * @var WP_MS_Sites_List_Table // obf
	 */ // obf
	public $v_wgrdi = false; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_aqhwp->table = _get_list_table( 'WP_MS_Sites_List_Table', array( 'screen' => 'ms-sites' ) ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mzgnt ) { // obf
		self::$v_mejqp = array( // obf
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

		foreach ( self::$v_mejqp as &$v_rxzcv ) { // obf
			$v_rxzcv = $v_mzgnt->blog->create( $v_rxzcv ); // obf
		} // obf
		unset( $v_rxzcv ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_mejqp as $v_zckev ) { // obf
			wp_delete_site( $v_zckev ); // obf
		} // obf
	} // obf

	public function test_ms_sites_list_table_default_items() { // obf
		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		$v_aqhwp->assertSameSets( array( 1 ) + self::$v_mejqp, $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_subdirectory_path_search_items() { // obf
		if ( is_subdomain_install() ) { // obf
			$v_aqhwp->markTestSkipped( 'Path search is not available for subdomain configurations.' ); // obf
		} // obf

		$v_wrgfm['s'] = 'foo'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_kuwnh = array( // obf
			self::$v_mejqp['wordpress.org/foo/'], // obf
			self::$v_mejqp['wordpress.org/foo/bar/'], // obf
			self::$v_mejqp['wordpress.org/afoo/'], // obf
			self::$v_mejqp['make.wordpress.org/foo/'], // obf
			self::$v_mejqp['www.w.org/foo/'], // obf
			self::$v_mejqp['www.w.org/foo/bar/'], // obf
		); // obf

		$v_aqhwp->assertSameSets( $v_kuwnh, $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_subdirectory_multiple_path_search_items() { // obf
		if ( is_subdomain_install() ) { // obf
			$v_aqhwp->markTestSkipped( 'Path search is not available for subdomain configurations.' ); // obf
		} // obf

		$v_wrgfm['s'] = 'foo/bar'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_kuwnh = array( // obf
			self::$v_mejqp['wordpress.org/foo/bar/'], // obf
			self::$v_mejqp['www.w.org/foo/bar/'], // obf
		); // obf

		$v_aqhwp->assertSameSets( $v_kuwnh, $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_invalid_path_search_items() { // obf
		$v_wrgfm['s'] = 'foobar'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_aqhwp->assertEmpty( $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_subdomain_domain_search_items() { // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_aqhwp->markTestSkipped( 'Domain search is not available for subdirectory configurations.' ); // obf
		} // obf

		$v_wrgfm['s'] = 'test'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_kuwnh = array( // obf
			self::$v_mejqp['test.example.org/'], // obf
			self::$v_mejqp['test2.example.org/'], // obf
			self::$v_mejqp['test3.example.org/zig/'], // obf
			self::$v_mejqp['atest.example.org/'], // obf
		); // obf

		$v_aqhwp->assertSameSets( $v_kuwnh, $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_subdomain_domain_search_items_with_trailing_wildcard() { // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_aqhwp->markTestSkipped( 'Domain search is not available for subdirectory configurations.' ); // obf
		} // obf

		$v_wrgfm['s'] = 'test*'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_kuwnh = array( // obf
			self::$v_mejqp['test.example.org/'], // obf
			self::$v_mejqp['test2.example.org/'], // obf
			self::$v_mejqp['test3.example.org/zig/'], // obf
			self::$v_mejqp['atest.example.org/'], // obf
		); // obf

		$v_aqhwp->assertSameSets( $v_kuwnh, $v_kcspa ); // obf
	} // obf

	public function test_ms_sites_list_table_subdirectory_path_search_items_with_trailing_wildcard() { // obf
		if ( is_subdomain_install() ) { // obf
			$v_aqhwp->markTestSkipped( 'Path search is not available for subdomain configurations.' ); // obf
		} // obf

		$v_wrgfm['s'] = 'fo*'; // obf

		$v_aqhwp->table->prepare_items(); // obf

		$v_kcspa = wp_list_pluck( $v_aqhwp->table->items, 'blog_id' ); // obf
		$v_kcspa = array_map( 'intval', $v_kcspa ); // obf

		unset( $v_wrgfm['s'] ); // obf

		$v_kuwnh = array( // obf
			self::$v_mejqp['wordpress.org/foo/'], // obf
			self::$v_mejqp['wordpress.org/foo/bar/'], // obf
			self::$v_mejqp['wordpress.org/afoo/'], // obf
			self::$v_mejqp['make.wordpress.org/foo/'], // obf
			self::$v_mejqp['www.w.org/foo/'], // obf
			self::$v_mejqp['www.w.org/foo/bar/'], // obf
		); // obf

		$v_aqhwp->assertSameSets( $v_kuwnh, $v_kcspa ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		$v_kuwnh = array( // obf
			'all'    => '<a href="sites.php" class="current" aria-current="page">All <span class="count">(14)</span></a>', // obf
			'public' => '<a href="sites.php?status=public">Public <span class="count">(14)</span></a>', // obf
		); // obf

		$v_aqhwp->assertSame( $v_kuwnh, $v_aqhwp->table->get_views() ); // obf
	} // obf
} // obf