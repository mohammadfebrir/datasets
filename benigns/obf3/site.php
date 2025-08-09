

<?php // obf

/** // obf
 * Tests specific to sites in multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_Site extends WP_UnitTestCase { // obf
	protected $v_hasiq                = false; // obf
	protected $v_grmfe       = array(); // obf
	protected $v_pxysw = array(); // obf
	protected $v_vdwal = array(); // obf
	protected static $v_hlvom; // obf
	protected static $v_rpucb; // obf
	protected static $v_uzkml; // obf

	public function set_up() { // obf
		global $v_zcfbd; // obf
		parent::set_up(); // obf
		$v_bvtof->suppress = $v_zcfbd->suppress_errors(); // obf
	} // obf

	public function tear_down() { // obf
		global $v_zcfbd; // obf
		$v_zcfbd->suppress_errors( $v_bvtof->suppress ); // obf
		parent::tear_down(); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nsbrw ) { // obf
		self::$v_hlvom = array( // obf
			'make.wordpress.org/' => array( // obf
				'domain' => 'make.wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
		); // obf

		foreach ( self::$v_hlvom as &$v_dfjxg ) { // obf
			$v_dfjxg = $v_nsbrw->network->create( $v_dfjxg ); // obf
		} // obf
		unset( $v_dfjxg ); // obf

		self::$v_rpucb = array( // obf
			'make.wordpress.org/'     => array( // obf
				'domain'     => 'make.wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_hlvom['make.wordpress.org/'], // obf
			), // obf
			'make.wordpress.org/foo/' => array( // obf
				'domain'     => 'make.wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_hlvom['make.wordpress.org/'], // obf
			), // obf
		); // obf

		foreach ( self::$v_rpucb as &$v_dfjxg ) { // obf
			$v_dfjxg = $v_nsbrw->blog->create( $v_dfjxg ); // obf
		} // obf
		unset( $v_dfjxg ); // obf

		remove_action( 'wp_initialize_site', 'wp_initialize_site', 10 ); // obf
		self::$v_uzkml = wp_insert_site( // obf
			array( // obf
				'domain'     => 'uninitialized.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_hlvom['make.wordpress.org/'], // obf
			) // obf
		); // obf
		add_action( 'wp_initialize_site', 'wp_initialize_site', 10, 2 ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		global $v_zcfbd; // obf

		remove_action( 'wp_uninitialize_site', 'wp_uninitialize_site', 10 ); // obf
		wp_delete_site( self::$v_uzkml ); // obf
		add_action( 'wp_uninitialize_site', 'wp_uninitialize_site', 10, 1 ); // obf

		foreach ( self::$v_rpucb as $v_dfjxg ) { // obf
			wp_delete_site( $v_dfjxg ); // obf
		} // obf

		foreach ( self::$v_hlvom as $v_dfjxg ) { // obf
			$v_zcfbd->query( $v_zcfbd->prepare( "DELETE FROM {$v_zcfbd->sitemeta} WHERE site_id = %d", $v_dfjxg ) ); // obf
			$v_zcfbd->query( $v_zcfbd->prepare( "DELETE FROM {$v_zcfbd->site} WHERE id= %d", $v_dfjxg ) ); // obf
		} // obf
	} // obf

	public function test_switch_restore_blog() { // obf
		global $v_onzjd, $v_zcfbd; // obf

		$v_bvtof->assertSame( array(), $v_onzjd ); // obf
		$v_bvtof->assertFalse( ms_is_switched() ); // obf
		$v_rspav = get_current_blog_id(); // obf
		$v_bvtof->assertIsInt( $v_rspav ); // obf

		wp_cache_set( 'switch-test', $v_rspav, 'switch-test' ); // obf
		$v_bvtof->assertSame( $v_rspav, wp_cache_get( 'switch-test', 'switch-test' ) ); // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		$v_wtodm = wp_get_current_user()->cap_key; // obf
		switch_to_blog( $v_pwobw ); // obf
		$v_bvtof->assertNotEquals( $v_wtodm, wp_get_current_user()->cap_key ); // obf
		$v_bvtof->assertSame( array( $v_rspav ), $v_onzjd ); // obf
		$v_bvtof->assertTrue( ms_is_switched() ); // obf
		$v_bvtof->assertSame( $v_pwobw, $v_zcfbd->blogid ); // obf
		$v_bvtof->assertFalse( wp_cache_get( 'switch-test', 'switch-test' ) ); // obf
		wp_cache_set( 'switch-test', $v_pwobw, 'switch-test' ); // obf
		$v_bvtof->assertSame( $v_pwobw, wp_cache_get( 'switch-test', 'switch-test' ) ); // obf

		switch_to_blog( $v_pwobw ); // obf
		$v_bvtof->assertSame( array( $v_rspav, $v_pwobw ), $v_onzjd ); // obf
		$v_bvtof->assertTrue( ms_is_switched() ); // obf
		$v_bvtof->assertSame( $v_pwobw, $v_zcfbd->blogid ); // obf
		$v_bvtof->assertSame( $v_pwobw, wp_cache_get( 'switch-test', 'switch-test' ) ); // obf

		restore_current_blog(); // obf
		$v_bvtof->assertSame( array( $v_rspav ), $v_onzjd ); // obf
		$v_bvtof->assertTrue( ms_is_switched() ); // obf
		$v_bvtof->assertSame( $v_pwobw, $v_zcfbd->blogid ); // obf
		$v_bvtof->assertSame( $v_pwobw, wp_cache_get( 'switch-test', 'switch-test' ) ); // obf

		restore_current_blog(); // obf
		$v_bvtof->assertSame( $v_wtodm, wp_get_current_user()->cap_key ); // obf
		$v_bvtof->assertSame( $v_rspav, get_current_blog_id() ); // obf
		$v_bvtof->assertSame( array(), $v_onzjd ); // obf
		$v_bvtof->assertFalse( ms_is_switched() ); // obf
		$v_bvtof->assertSame( $v_rspav, wp_cache_get( 'switch-test', 'switch-test' ) ); // obf

		$v_bvtof->assertFalse( restore_current_blog() ); // obf
	} // obf

	/** // obf
	 * Test the cache keys and database tables setup through the creation of a site. // obf
	 */ // obf
	public function test_created_site_details() { // obf
		global $v_zcfbd; // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		$v_bvtof->assertIsInt( $v_pwobw ); // obf
		$v_sbrsp = $v_zcfbd->get_blog_prefix( $v_pwobw ); // obf

		// $v_yefua = false, only retrieve details from the blogs table. // obf
		$v_fgani = get_blog_details( $v_pwobw, false ); // obf

		// Combine domain and path for a site specific cache key. // obf
		$v_acjuz = md5( $v_fgani->domain . $v_fgani->path ); // obf

		$v_bvtof->assertEquals( $v_fgani, wp_cache_get( $v_pwobw . 'short', 'blog-details' ) ); // obf

		// get_blogaddress_by_name(). // obf
		$v_bvtof->assertSame( 'http://' . $v_fgani->domain . $v_fgani->path, get_blogaddress_by_name( trim( $v_fgani->path, '/' ) ) ); // obf

		// These are empty until get_blog_details() is called with $v_yefua = true. // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-lookup' ) ); // obf

		// $v_yefua = true, populate the full blog-details cache and the blog slug lookup cache. // obf
		$v_fgani = get_blog_details( $v_pwobw, true ); // obf
		$v_bvtof->assertEquals( $v_fgani, wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
		$v_bvtof->assertEquals( $v_fgani, wp_cache_get( $v_acjuz, 'blog-lookup' ) ); // obf

		// Check existence of each database table for the created site. // obf
		foreach ( $v_zcfbd->tables( 'blog', false ) as $v_njwyd ) { // obf
			$v_hasiq = $v_zcfbd->suppress_errors(); // obf

			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
			$v_bvdjd = $v_zcfbd->get_results( "DESCRIBE $v_sbrsp$v_njwyd;" ); // obf

			$v_zcfbd->suppress_errors( $v_hasiq ); // obf

			// The table should exist. // obf
			$v_bvtof->assertNotEmpty( $v_bvdjd ); // obf

			// And the table should not be empty, unless commentmeta, termmeta, or links. // obf
			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
			$v_awxnm = $v_zcfbd->get_results( "SELECT * FROM $v_sbrsp$v_njwyd LIMIT 1" ); // obf

			if ( 'commentmeta' === $v_njwyd || 'termmeta' === $v_njwyd || 'links' === $v_njwyd ) { // obf
				$v_bvtof->assertEmpty( $v_awxnm ); // obf
			} else { // obf
				$v_bvtof->assertNotEmpty( $v_awxnm ); // obf
			} // obf
		} // obf

		// Update the blog count cache to use get_blog_count(). // obf
		wp_update_network_counts(); // obf
		$v_bvtof->assertSame( 2, (int) get_blog_count() ); // obf
	} // obf

	public function test_site_caches_should_invalidate_when_invalidation_is_not_suspended() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_fgani = get_site( $v_dnhtx ); // obf

		$v_wswwz = wp_suspend_cache_invalidation( false ); // obf
		update_blog_details( $v_dnhtx, array( 'path' => '/a-non-random-test-path/' ) ); // obf
		$v_lkzyz = get_site( $v_dnhtx ); // obf
		wp_suspend_cache_invalidation( $v_wswwz ); // obf

		$v_bvtof->assertNotEquals( $v_fgani->path, $v_lkzyz->path ); // obf
	} // obf

	public function test_site_caches_should_not_invalidate_when_invalidation_is_suspended() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_fgani = get_site( $v_dnhtx ); // obf

		$v_wswwz = wp_suspend_cache_invalidation(); // obf
		update_blog_details( $v_dnhtx, array( 'path' => '/a-non-random-test-path/' ) ); // obf
		$v_lkzyz = get_site( $v_dnhtx ); // obf
		wp_suspend_cache_invalidation( $v_wswwz ); // obf

		$v_bvtof->assertSame( $v_fgani->path, $v_lkzyz->path ); // obf
	} // obf

	/** // obf
	 * When a site is flagged as 'deleted', its data should be cleared from cache. // obf
	 */ // obf
	public function test_data_in_cache_after_wpmu_delete_blog_drop_false() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf

		$v_fgani = get_blog_details( $v_pwobw, false ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf

		// Delete the site without forcing a table drop. // obf
		wpmu_delete_blog( $v_pwobw, false ); // obf

		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw . 'short', 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-lookup' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * When a site is flagged as 'deleted', its data should remain in the database. // obf
	 */ // obf
	public function test_data_in_tables_after_wpmu_delete_blog_drop_false() { // obf
		global $v_zcfbd; // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		// Delete the site without forcing a table drop. // obf
		wpmu_delete_blog( $v_pwobw, false ); // obf

		$v_sbrsp = $v_zcfbd->get_blog_prefix( $v_pwobw ); // obf
		foreach ( $v_zcfbd->tables( 'blog', false ) as $v_njwyd ) { // obf
			$v_hasiq = $v_zcfbd->suppress_errors(); // obf

			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
			$v_bvdjd = $v_zcfbd->get_results( "DESCRIBE $v_sbrsp$v_njwyd;" ); // obf

			$v_zcfbd->suppress_errors( $v_hasiq ); // obf
			$v_bvtof->assertNotEmpty( $v_bvdjd, $v_sbrsp . $v_njwyd ); // obf
		} // obf
	} // obf

	/** // obf
	 * When a site is fully deleted, its data should be cleared from cache. // obf
	 */ // obf
	public function test_data_in_cache_after_wpmu_delete_blog_drop_true() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf

		$v_fgani = get_blog_details( $v_pwobw, false ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf

		// Delete the site and force a table drop. // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw . 'short', 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-lookup' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * When a site is fully deleted, its data should be removed from the database. // obf
	 */ // obf
	public function test_data_in_tables_after_wpmu_delete_blog_drop_true() { // obf
		global $v_zcfbd; // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		// Delete the site and force a table drop. // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		$v_sbrsp = $v_zcfbd->get_blog_prefix( $v_pwobw ); // obf
		foreach ( $v_zcfbd->tables( 'blog', false ) as $v_njwyd ) { // obf
			$v_hasiq = $v_zcfbd->suppress_errors(); // obf

			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
			$v_bvdjd = $v_zcfbd->get_results( "DESCRIBE $v_sbrsp$v_njwyd;" ); // obf

			$v_zcfbd->suppress_errors( $v_hasiq ); // obf
			$v_bvtof->assertEmpty( $v_bvdjd ); // obf
		} // obf
	} // obf

	/** // obf
	 * When the main site of a network is fully deleted, its data should be cleared from cache. // obf
	 */ // obf
	public function test_data_in_cache_after_wpmu_delete_blog_main_site_drop_true() { // obf
		$v_pwobw = 1; // The main site in our test suite has an ID of 1. // obf

		$v_fgani = get_blog_details( $v_pwobw, false ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf

		// Delete the site and force a table drop. // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw . 'short', 'blog-details' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-lookup' ) ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * When the main site of a network is fully deleted, its data should remain in the database. // obf
	 */ // obf
	public function test_data_in_tables_after_wpmu_delete_blog_main_site_drop_true() { // obf
		global $v_zcfbd; // obf

		$v_pwobw = 1; // The main site in our test suite has an ID of 1. // obf

		// Delete the site and force a table drop. // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		$v_sbrsp = $v_zcfbd->get_blog_prefix( $v_pwobw ); // obf
		foreach ( $v_zcfbd->tables( 'blog', false ) as $v_njwyd ) { // obf
			$v_hasiq = $v_zcfbd->suppress_errors(); // obf

			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
			$v_bvdjd = $v_zcfbd->get_results( "DESCRIBE $v_sbrsp$v_njwyd;" ); // obf

			$v_zcfbd->suppress_errors( $v_hasiq ); // obf
			$v_bvtof->assertNotEmpty( $v_bvdjd, $v_sbrsp . $v_njwyd ); // obf
		} // obf
	} // obf

	/** // obf
	 * The site count of a network should change when a site is flagged as 'deleted'. // obf
	 */ // obf
	public function test_network_count_after_wpmu_delete_blog_drop_false() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf

		// Delete the site without forcing a table drop. // obf
		wpmu_delete_blog( $v_pwobw, false ); // obf

		// Update the blog count cache to use get_blog_count(). // obf
		wp_update_network_counts(); // obf
		$v_bvtof->assertSame( 1, get_blog_count() ); // obf
	} // obf

	/** // obf
	 * The site count of a network should change when a site is fully deleted. // obf
	 */ // obf
	public function test_blog_count_after_wpmu_delete_blog_drop_true() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf

		// Delete the site and force a table drop. // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		// Update the blog count cache to use get_blog_count(). // obf
		wp_update_network_counts(); // obf
		$v_bvtof->assertSame( 1, get_blog_count() ); // obf
	} // obf

	/** // obf
	 * When a site is deleted with wpmu_delete_blog(), only the files associated with // obf
	 * that site should be removed. When wpmu_delete_blog() is run a second time, nothing // obf
	 * should change with upload directories. // obf
	 */ // obf
	public function test_upload_directories_after_multiple_wpmu_delete_blog() { // obf
		$v_mxmmt = __FUNCTION__ . '.jpg'; // obf
		$v_aytad = __FUNCTION__ . '_contents'; // obf

		// Upload a file to the main site on the network. // obf
		$v_mykqg = wp_upload_bits( $v_mxmmt, null, $v_aytad ); // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		switch_to_blog( $v_pwobw ); // obf
		$v_aaguw = wp_upload_bits( $v_mxmmt, null, $v_aytad ); // obf
		restore_current_blog(); // obf

		wpmu_delete_blog( $v_pwobw, true ); // obf

		// The file on the main site should still exist. The file on the deleted site should not. // obf
		$v_bvtof->assertFileExists( $v_mykqg['file'] ); // obf
		$v_bvtof->assertFileDoesNotExist( $v_aaguw['file'] ); // obf

		wpmu_delete_blog( $v_pwobw, true ); // obf

		// The file on the main site should still exist. The file on the deleted site should not. // obf
		$v_bvtof->assertFileExists( $v_mykqg['file'] ); // obf
		$v_bvtof->assertFileDoesNotExist( $v_aaguw['file'] ); // obf

		unlink( $v_mykqg['file'] ); // obf
	} // obf

	public function test_wpmu_update_blogs_date() { // obf
		global $v_zcfbd; // obf

		wpmu_update_blogs_date(); // obf

		$v_ergqe         = get_site( get_current_blog_id() ); // obf
		$v_qsscc = time(); // obf

		// Compare the update time with the current time, allow delta < 2. // obf
		$v_bvtof->assertEqualsWithDelta( $v_qsscc, strtotime( $v_ergqe->last_updated ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * Test cached data for a site that does not exist and then again after it exists. // obf
	 * // obf
	 * @ticket 23405 // obf
	 */ // obf
	public function test_get_blog_details_when_site_does_not_exist() { // obf
		// Create an unused site so that we can then assume an invalid site ID. // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		++$v_pwobw; // obf

		// Prime the cache for an invalid site. // obf
		get_blog_details( $v_pwobw ); // obf

		// When the cache is primed with an invalid site, the value is set to -1. // obf
		$v_bvtof->assertSame( -1, wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf

		// Create a site in the invalid site's place. // obf
		self::factory()->blog->create(); // obf

		// When a new site is created, its cache is cleared through refresh_blog_details. // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf

		$v_ergqe = get_blog_details( $v_pwobw ); // obf

		// When the cache is refreshed, it should now equal the site data. // obf
		$v_bvtof->assertEquals( $v_ergqe, wp_cache_get( $v_pwobw, 'blog-details' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26410 // obf
	 */ // obf
	public function test_blog_details_cache_invalidation() { // obf
		update_option( 'blogname', 'foo' ); // obf
		$v_fgani = get_site( get_current_blog_id() ); // obf
		$v_bvtof->assertSame( 'foo', $v_fgani->blogname ); // obf

		update_option( 'blogname', 'bar' ); // obf
		$v_fgani = get_site( get_current_blog_id() ); // obf
		$v_bvtof->assertSame( 'bar', $v_fgani->blogname ); // obf
	} // obf

	/** // obf
	 * Test the original and cached responses for a created and then deleted site when // obf
	 * the blog ID is requested through get_blog_id_from_url(). // obf
	 */ // obf
	public function test_get_blog_id_from_url() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		$v_fgani = get_site( $v_pwobw ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf

		// Test the original response and cached response for the newly created site. // obf
		$v_bvtof->assertSame( $v_pwobw, get_blog_id_from_url( $v_fgani->domain, $v_fgani->path ) ); // obf
		$v_bvtof->assertSame( $v_pwobw, wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * Test the case insensitivity of the site lookup. // obf
	 */ // obf
	public function test_get_blog_id_from_url_is_case_insensitive() { // obf
		$v_pwobw = self::factory()->blog->create( // obf
			array( // obf
				'domain' => 'example.com', // obf
				'path'   => '/xyz', // obf
			) // obf
		); // obf
		$v_fgani = get_site( $v_pwobw ); // obf

		$v_bvtof->assertSame( $v_pwobw, get_blog_id_from_url( strtoupper( $v_fgani->domain ), strtoupper( $v_fgani->path ) ) ); // obf
	} // obf

	/** // obf
	 * Test the first and cached responses for a site that does not exist. // obf
	 */ // obf
	public function test_get_blog_id_from_url_that_does_not_exist() { // obf
		$v_pwobw = self::factory()->blog->create( array( 'path' => '/xyz' ) ); // obf
		$v_fgani = get_site( $v_pwobw ); // obf

		$v_bvtof->assertSame( 0, get_blog_id_from_url( $v_fgani->domain, 'foo' ) ); // obf
		$v_bvtof->assertSame( -1, wp_cache_get( md5( $v_fgani->domain . 'foo' ), 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * A blog ID is still available if only the `deleted` flag is set for a site. The same // obf
	 * behavior would be expected if passing `false` explicitly to `wpmu_delete_blog()`. // obf
	 */ // obf
	public function test_get_blog_id_from_url_with_deleted_flag() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		$v_fgani = get_site( $v_pwobw ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf
		wpmu_delete_blog( $v_pwobw ); // obf

		$v_bvtof->assertSame( $v_pwobw, get_blog_id_from_url( $v_fgani->domain, $v_fgani->path ) ); // obf
		$v_bvtof->assertSame( $v_pwobw, wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * When deleted with the drop parameter as true, the cache will first be false, then set to // obf
	 * -1 after an attempt at `get_blog_id_from_url()` is made. // obf
	 */ // obf
	public function test_get_blog_id_from_url_after_dropped() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		$v_fgani = get_site( $v_pwobw ); // obf
		$v_acjuz     = md5( $v_fgani->domain . $v_fgani->path ); // obf
		wpmu_delete_blog( $v_pwobw, true ); // obf

		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
		$v_bvtof->assertSame( 0, get_blog_id_from_url( $v_fgani->domain, $v_fgani->path ) ); // obf
		$v_bvtof->assertSame( -1, wp_cache_get( $v_acjuz, 'blog-id-cache' ) ); // obf
	} // obf

	/** // obf
	 * Test with default parameter of site_id as null. // obf
	 */ // obf
	public function test_is_main_site() { // obf
		$v_bvtof->assertTrue( is_main_site() ); // obf
	} // obf

	/** // obf
	 * Test with a site id of get_current_blog_id(), which should be the same as the // obf
	 * default parameter tested above. // obf
	 */ // obf
	public function test_current_blog_id_is_main_site() { // obf
		$v_bvtof->assertTrue( is_main_site( get_current_blog_id() ) ); // obf
	} // obf

	/** // obf
	 * Test with a site ID other than the main site to ensure a false response. // obf
	 */ // obf
	public function test_is_main_site_is_false_with_other_blog_id() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf

		$v_bvtof->assertFalse( is_main_site( $v_pwobw ) ); // obf
	} // obf

	/** // obf
	 * Test with no passed ID after switching to another site ID. // obf
	 */ // obf
	public function test_is_main_site_is_false_after_switch_to_blog() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		switch_to_blog( $v_pwobw ); // obf

		$v_bvtof->assertFalse( is_main_site() ); // obf

		restore_current_blog(); // obf
	} // obf

	public function test_switch_upload_dir() { // obf
		$v_bvtof->assertTrue( is_main_site() ); // obf

		$v_fmgje = get_current_site(); // obf
		$v_fnkqv = date_format( date_create( 'now' ), 'Y/m' ); // obf

		$v_yfntf = wp_upload_dir(); // obf
		$v_bvtof->assertSame( 'http://' . $v_fmgje->domain . '/wp-content/uploads/' . $v_fnkqv, $v_yfntf['url'] ); // obf
		$v_bvtof->assertSame( ABSPATH . 'wp-content/uploads/' . $v_fnkqv, $v_yfntf['path'] ); // obf
		$v_bvtof->assertSame( '/' . $v_fnkqv, $v_yfntf['subdir'] ); // obf
		$v_bvtof->assertFalse( $v_yfntf['error'] ); // obf

		$v_pwobw = self::factory()->blog->create(); // obf

		switch_to_blog( $v_pwobw ); // obf
		$v_yfntf = wp_upload_dir(); // obf
		$v_bvtof->assertSame( 'http://' . $v_fmgje->domain . '/wp-content/uploads/sites/' . get_current_blog_id() . '/' . $v_fnkqv, $v_yfntf['url'] ); // obf
		$v_bvtof->assertSame( ABSPATH . 'wp-content/uploads/sites/' . get_current_blog_id() . '/' . $v_fnkqv, $v_yfntf['path'] ); // obf
		$v_bvtof->assertSame( '/' . $v_fnkqv, $v_yfntf['subdir'] ); // obf
		$v_bvtof->assertFalse( $v_yfntf['error'] ); // obf
		restore_current_blog(); // obf

		$v_yfntf = wp_upload_dir(); // obf
		$v_bvtof->assertSame( 'http://' . $v_fmgje->domain . '/wp-content/uploads/' . $v_fnkqv, $v_yfntf['url'] ); // obf
		$v_bvtof->assertSame( ABSPATH . 'wp-content/uploads/' . $v_fnkqv, $v_yfntf['path'] ); // obf
		$v_bvtof->assertSame( '/' . $v_fnkqv, $v_yfntf['subdir'] ); // obf
		$v_bvtof->assertFalse( $v_yfntf['error'] ); // obf
	} // obf

	/** // obf
	 * Test the primary purpose of get_blog_post(), to retrieve a post from // obf
	 * another site on the network. // obf
	 */ // obf
	public function test_get_blog_post_from_another_site_on_network() { // obf
		$v_pwobw = self::factory()->blog->create(); // obf
		$v_phdyh = self::factory()->post->create(); // Create a post on the primary site, ID 1. // obf
		$v_afsde    = get_post( $v_phdyh ); // obf
		switch_to_blog( $v_pwobw ); // obf

		// The post created and retrieved on the main site should match the one retrieved "remotely". // obf
		$v_bvtof->assertEquals( $v_afsde, get_blog_post( 1, $v_phdyh ) ); // obf

		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * If get_blog_post() is used on the same site, it should still work. // obf
	 */ // obf
	public function test_get_blog_post_from_same_site() { // obf
		$v_phdyh = self::factory()->post->create(); // obf

		$v_bvtof->assertEquals( get_blog_post( 1, $v_phdyh ), get_post( $v_phdyh ) ); // obf
	} // obf

	/** // obf
	 * A null response should be returned if an invalid post is requested. // obf
	 */ // obf
	public function test_get_blog_post_invalid_returns_null() { // obf
		$v_bvtof->assertNull( get_blog_post( 1, 999999 ) ); // obf
	} // obf

	/** // obf
	 * Added as a callback to the domain_exists filter to provide manual results for // obf
	 * the testing of the filter and for a test which does not need the database. // obf
	 */ // obf
	public function domain_exists_cb( $v_dnhmx, $v_xrzhr, $v_bhtzy, $v_dnhtx ) { // obf
		if ( 'foo' === $v_xrzhr && 'bar/' === $v_bhtzy ) { // obf
			return 1234; // obf
		} else { // obf
			return null; // obf
		} // obf
	} // obf

	public function test_domain_exists_with_default_site_id() { // obf
		$v_fgani = get_site( 1 ); // obf

		$v_bvtof->assertSame( 1, domain_exists( $v_fgani->domain, $v_fgani->path ) ); // obf
	} // obf

	public function test_domain_exists_with_specified_site_id() { // obf
		$v_fgani = get_site( 1 ); // obf

		$v_bvtof->assertSame( 1, domain_exists( $v_fgani->domain, $v_fgani->path, $v_fgani->site_id ) ); // obf
	} // obf

	/** // obf
	 * When the domain is valid, but the resulting site does not belong to the specified network, // obf
	 * it is marked as not existing. // obf
	 */ // obf
	public function test_domain_does_not_exist_with_invalid_site_id() { // obf
		$v_fgani = get_site( 1 ); // obf

		$v_bvtof->assertNull( domain_exists( $v_fgani->domain, $v_fgani->path, 999 ) ); // obf
	} // obf

	public function test_invalid_domain_does_not_exist_with_default_site_id() { // obf
		$v_bvtof->assertNull( domain_exists( 'foo', 'bar' ) ); // obf
	} // obf

	public function test_domain_filtered_to_exist() { // obf
		add_filter( 'domain_exists', array( $v_bvtof, 'domain_exists_cb' ), 10, 4 ); // obf
		$v_dnhmx = domain_exists( 'foo', 'bar' ); // obf
		remove_filter( 'domain_exists', array( $v_bvtof, 'domain_exists_cb' ), 10, 4 ); // obf
		$v_bvtof->assertSame( 1234, $v_dnhmx ); // obf
	} // obf

	/** // obf
	 * When a path is passed to domain_exists, it is immediately trailing slashed. A path // obf
	 * value with or without the slash should result in the same return value. // obf
	 */ // obf
	public function test_slashed_path_in_domain_exists() { // obf
		add_filter( 'domain_exists', array( $v_bvtof, 'domain_exists_cb' ), 10, 4 ); // obf
		$v_jqpoy = domain_exists( 'foo', 'bar' ); // obf
		$v_grpcv = domain_exists( 'foo', 'bar/' ); // obf
		remove_filter( 'domain_exists', array( $v_bvtof, 'domain_exists_cb' ), 10, 4 ); // obf

		// Make sure the same result is returned with or without a trailing slash. // obf
		$v_bvtof->assertSame( $v_jqpoy, $v_grpcv ); // obf
	} // obf

	/** // obf
	 * Tests returning an address for a given valid ID. // obf
	 */ // obf
	public function test_get_blogaddress_by_id_with_valid_id() { // obf
		$v_ahgqk = get_blogaddress_by_id( 1 ); // obf
		$v_bvtof->assertSame( 'http://' . WP_TESTS_DOMAIN . '/', $v_ahgqk ); // obf
	} // obf

	/** // obf
	 * Tests returning an empty string for a non-existing ID. // obf
	 */ // obf
	public function test_get_blogaddress_by_id_with_invalid_id() { // obf
		$v_ahgqk = get_blogaddress_by_id( PHP_INT_MAX ); // obf
		$v_bvtof->assertSame( '', $v_ahgqk ); // obf
	} // obf

	/** // obf
	 * @ticket 14867 // obf
	 */ // obf
	public function test_get_blogaddress_by_id_scheme_reflects_blog_scheme() { // obf
		$v_ergqe = self::factory()->blog->create(); // obf

		$v_bvtof->assertSame( 'http', parse_url( get_blogaddress_by_id( $v_ergqe ), PHP_URL_SCHEME ) ); // obf

		update_blog_option( $v_ergqe, 'home', set_url_scheme( get_blog_option( $v_ergqe, 'home' ), 'https' ) ); // obf

		$v_bvtof->assertSame( 'https', parse_url( get_blogaddress_by_id( $v_ergqe ), PHP_URL_SCHEME ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14867 // obf
	 */ // obf
	public function test_get_blogaddress_by_id_scheme_is_unaffected_by_request() { // obf
		$v_ergqe = self::factory()->blog->create(); // obf

		$v_bvtof->assertFalse( is_ssl() ); // obf
		$v_bvtof->assertSame( 'http', parse_url( get_blogaddress_by_id( $v_ergqe ), PHP_URL_SCHEME ) ); // obf

		$v_xgsvh['HTTPS'] = 'on'; // obf

		$v_jacxa  = is_ssl(); // obf
		$v_pwjqr = parse_url( get_blogaddress_by_id( $v_ergqe ), PHP_URL_SCHEME ); // obf

		$v_bvtof->assertTrue( $v_jacxa ); // obf
		$v_bvtof->assertSame( 'http', $v_pwjqr ); // obf
	} // obf

	/** // obf
	 * @ticket 33620 // obf
	 * @dataProvider data_new_blog_url_schemes // obf
	 */ // obf
	public function test_new_blog_url_schemes( $v_jhxmj, $v_ymhlq, $v_dwfsl ) { // obf
		$v_kzdvr = get_current_site(); // obf

		$v_lgqsu    = get_option( 'home' ); // obf
		$v_ndksc = get_site_option( 'siteurl' ); // obf
		$v_sewuk   = force_ssl_admin(); // obf

		// Setup: // obf
		update_option( 'home', set_url_scheme( $v_lgqsu, $v_jhxmj ) ); // obf
		update_site_option( 'siteurl', set_url_scheme( $v_ndksc, $v_ymhlq ) ); // obf
		force_ssl_admin( $v_dwfsl ); // obf

		// Install: // obf
		$v_malyg = wpmu_create_blog( $v_kzdvr->domain, '/new-blog/', 'New Blog', get_current_user_id() ); // obf

		// Reset: // obf
		update_option( 'home', $v_lgqsu ); // obf
		update_site_option( 'siteurl', $v_ndksc ); // obf
		force_ssl_admin( $v_sewuk ); // obf

		// Assert: // obf
		$v_bvtof->assertNotWPError( $v_malyg ); // obf
		$v_bvtof->assertSame( $v_jhxmj, parse_url( get_blog_option( $v_malyg, 'home' ), PHP_URL_SCHEME ) ); // obf
		$v_bvtof->assertSame( $v_ymhlq, parse_url( get_blog_option( $v_malyg, 'siteurl' ), PHP_URL_SCHEME ) ); // obf
	} // obf

	public function data_new_blog_url_schemes() { // obf
		return array( // obf
			array( // obf
				'https', // obf
				'https', // obf
				false, // obf
			), // obf
			array( // obf
				'http', // obf
				'https', // obf
				false, // obf
			), // obf
			array( // obf
				'https', // obf
				'http', // obf
				false, // obf
			), // obf
			array( // obf
				'http', // obf
				'http', // obf
				false, // obf
			), // obf
			array( // obf
				'http', // obf
				'http', // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36918 // obf
	 */ // obf
	public function test_new_blog_locale() { // obf
		$v_kzdvr = get_current_site(); // obf

		add_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10, 3 ); // obf
		update_site_option( 'WPLANG', 'de_DE' ); // obf
		remove_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10 ); // obf

		// No locale, use default locale. // obf
		add_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10, 3 ); // obf
		$v_pwobw = wpmu_create_blog( $v_kzdvr->domain, '/de-de/', 'New Blog', get_current_user_id() ); // obf
		remove_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10 ); // obf

		$v_bvtof->assertNotWPError( $v_pwobw ); // obf
		$v_bvtof->assertSame( 'de_DE', get_blog_option( $v_pwobw, 'WPLANG' ) ); // obf

		// Custom locale. // obf
		add_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10, 3 ); // obf
		$v_pwobw = wpmu_create_blog( $v_kzdvr->domain, '/es-es/', 'New Blog', get_current_user_id(), array( 'WPLANG' => 'es_ES' ) ); // obf
		remove_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10 ); // obf

		$v_bvtof->assertNotWPError( $v_pwobw ); // obf
		$v_bvtof->assertSame( 'es_ES', get_blog_option( $v_pwobw, 'WPLANG' ) ); // obf

		// en_US locale. // obf
		add_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10, 3 ); // obf
		$v_pwobw = wpmu_create_blog( $v_kzdvr->domain, '/en-us/', 'New Blog', get_current_user_id(), array( 'WPLANG' => '' ) ); // obf
		remove_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10 ); // obf

		$v_bvtof->assertNotWPError( $v_pwobw ); // obf
		$v_bvtof->assertSame( '', get_blog_option( $v_pwobw, 'WPLANG' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40503 // obf
	 */ // obf
	public function test_different_network_language() { // obf
		$v_crwki = get_network( self::$v_hlvom['make.wordpress.org/'] ); // obf

		add_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10, 3 ); // obf

		update_network_option( self::$v_hlvom['make.wordpress.org/'], 'WPLANG', 'wibble' ); // obf
		$v_pwobw = wpmu_create_blog( $v_crwki->domain, '/de-de/', 'New Blog', get_current_user_id(), array(), $v_crwki->id ); // obf

		remove_filter( 'sanitize_option_WPLANG', array( $v_bvtof, 'filter_allow_unavailable_languages' ), 10 ); // obf

		$v_bvtof->assertSame( get_network_option( self::$v_hlvom['make.wordpress.org/'], 'WPLANG' ), get_blog_option( $v_pwobw, 'WPLANG' ) ); // obf
	} // obf

	/** // obf
	 * Allows to set the WPLANG option to any language. // obf
	 * // obf
	 * @param string $v_xmify          The sanitized option value. // obf
	 * @param string $v_babbw         The option name. // obf
	 * @param string $v_yjkvf The original value passed to the function. // obf
	 * @return string The original value. // obf
	 */ // obf
	public function filter_allow_unavailable_languages( $v_xmify, $v_babbw, $v_yjkvf ) { // obf
		return $v_yjkvf; // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_is_main_site_different_network() { // obf
		$v_bvtof->assertTrue( is_main_site( self::$v_rpucb['make.wordpress.org/'], self::$v_hlvom['make.wordpress.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_is_main_site_different_network_random_site() { // obf
		$v_bvtof->assertFalse( is_main_site( self::$v_rpucb['make.wordpress.org/foo/'], self::$v_hlvom['make.wordpress.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 * @dataProvider data_get_site_caches // obf
	 */ // obf
	public function test_clean_blog_cache( $v_acjuz, $v_dbsar ) { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		$v_deded = array( // obf
			'%blog_id%'         => $v_fmgje->blog_id, // obf
			'%domain%'          => $v_fmgje->domain, // obf
			'%path%'            => $v_fmgje->path, // obf
			'%domain_path_key%' => md5( $v_fmgje->domain . $v_fmgje->path ), // obf
		); // obf

		$v_acjuz = str_replace( array_keys( $v_deded ), array_values( $v_deded ), $v_acjuz ); // obf

		if ( 'sites' === $v_dbsar ) { // This needs to be actual data for get_site() lookups. // obf
			wp_cache_set( $v_acjuz, (object) $v_fmgje->to_array(), $v_dbsar ); // obf
		} else { // obf
			wp_cache_set( $v_acjuz, 'something', $v_dbsar ); // obf
		} // obf

		clean_blog_cache( $v_fmgje ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, $v_dbsar ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 * @dataProvider data_get_site_caches // obf
	 */ // obf
	public function test_clean_blog_cache_with_id( $v_acjuz, $v_dbsar ) { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		$v_deded = array( // obf
			'%blog_id%'         => $v_fmgje->blog_id, // obf
			'%domain%'          => $v_fmgje->domain, // obf
			'%path%'            => $v_fmgje->path, // obf
			'%domain_path_key%' => md5( $v_fmgje->domain . $v_fmgje->path ), // obf
		); // obf

		$v_acjuz = str_replace( array_keys( $v_deded ), array_values( $v_deded ), $v_acjuz ); // obf

		if ( 'sites' === $v_dbsar ) { // This needs to be actual data for get_site() lookups. // obf
			wp_cache_set( $v_acjuz, (object) $v_fmgje->to_array(), $v_dbsar ); // obf
		} else { // obf
			wp_cache_set( $v_acjuz, 'something', $v_dbsar ); // obf
		} // obf

		clean_blog_cache( $v_fmgje->blog_id ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, $v_dbsar ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_resets_last_changed() { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		wp_cache_delete( 'last_changed', 'sites' ); // obf

		clean_blog_cache( $v_fmgje ); // obf
		$v_bvtof->assertNotFalse( wp_cache_get( 'last_changed', 'sites' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_fires_action() { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		$v_abroz = did_action( 'clean_site_cache' ); // obf

		clean_blog_cache( $v_fmgje ); // obf
		$v_bvtof->assertSame( $v_abroz + 1, did_action( 'clean_site_cache' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_bails_on_suspend_cache_invalidation() { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		$v_abroz = did_action( 'clean_site_cache' ); // obf

		$v_wswwz = wp_suspend_cache_invalidation(); // obf
		clean_blog_cache( $v_fmgje ); // obf
		wp_suspend_cache_invalidation( $v_wswwz ); // obf
		$v_bvtof->assertSame( $v_abroz, did_action( 'clean_site_cache' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_bails_on_empty_input() { // obf
		$v_abroz = did_action( 'clean_site_cache' ); // obf

		clean_blog_cache( null ); // obf
		$v_bvtof->assertSame( $v_abroz, did_action( 'clean_site_cache' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_bails_on_non_numeric_input() { // obf
		$v_abroz = did_action( 'clean_site_cache' ); // obf

		clean_blog_cache( 'something' ); // obf
		$v_bvtof->assertSame( $v_abroz, did_action( 'clean_site_cache' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_clean_blog_cache_works_with_deleted_site() { // obf
		$v_dnhtx = 12345; // obf

		wp_cache_set( $v_dnhtx, 'something', 'site-details' ); // obf

		clean_blog_cache( $v_dnhtx ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_dnhtx, 'site-details' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 * @dataProvider data_get_site_caches // obf
	 */ // obf
	public function test_refresh_blog_details( $v_acjuz, $v_dbsar ) { // obf
		$v_fmgje = get_site( self::$v_rpucb['make.wordpress.org/'] ); // obf

		$v_deded = array( // obf
			'%blog_id%'         => $v_fmgje->blog_id, // obf
			'%domain%'          => $v_fmgje->domain, // obf
			'%path%'            => $v_fmgje->path, // obf
			'%domain_path_key%' => md5( $v_fmgje->domain . $v_fmgje->path ), // obf
		); // obf

		$v_acjuz = str_replace( array_keys( $v_deded ), array_values( $v_deded ), $v_acjuz ); // obf

		if ( 'sites' === $v_dbsar ) { // This needs to be actual data for get_site() lookups. // obf
			wp_cache_set( $v_acjuz, (object) $v_fmgje->to_array(), $v_dbsar ); // obf
		} else { // obf
			wp_cache_set( $v_acjuz, 'something', $v_dbsar ); // obf
		} // obf

		refresh_blog_details( $v_fmgje->blog_id ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_acjuz, $v_dbsar ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_refresh_blog_details_works_with_deleted_site() { // obf
		$v_dnhtx = 12345; // obf

		wp_cache_set( $v_dnhtx, 'something', 'site-details' ); // obf

		refresh_blog_details( $v_dnhtx ); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_dnhtx, 'site-details' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40201 // obf
	 */ // obf
	public function test_refresh_blog_details_uses_current_site_as_default() { // obf
		$v_dnhtx = get_current_blog_id(); // obf

		wp_cache_set( $v_dnhtx, 'something', 'site-details' ); // obf

		refresh_blog_details(); // obf
		$v_bvtof->assertFalse( wp_cache_get( $v_dnhtx, 'site-details' ) ); // obf
	} // obf

	public function data_get_site_caches() { // obf
		return array( // obf
			array( '%blog_id%', 'sites' ), // obf
			array( '%blog_id%', 'site-details' ), // obf
			array( '%blog_id%', 'blog-details' ), // obf
			array( '%blog_id%' . 'short', 'blog-details' ), // obf
			array( '%domain_path_key%', 'blog-lookup' ), // obf
			array( '%domain_path_key%', 'blog-id-cache' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 * @dataProvider data_wp_insert_site // obf
	 */ // obf
	public function test_wp_insert_site( $v_iisqk, $v_xtnai ) { // obf
		remove_action( 'wp_initialize_site', 'wp_initialize_site', 10 ); // obf
		$v_dnhtx = wp_insert_site( $v_iisqk ); // obf

		$v_bvtof->assertIsInt( $v_dnhtx ); // obf

		$v_fmgje = get_site( $v_dnhtx ); // obf
		foreach ( $v_xtnai as $v_acjuz => $v_xmify ) { // obf
			$v_bvtof->assertEquals( $v_xmify, $v_fmgje->$v_acjuz ); // obf
		} // obf
	} // obf

	public function data_wp_insert_site() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'domain' => 'example.com', // obf
				), // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/', // obf
					'network_id' => 1, // obf
					'public'     => 1, // obf
					'archived'   => 0, // obf
					'mature'     => 0, // obf
					'spam'       => 0, // obf
					'deleted'    => 0, // obf
					'lang_id'    => 0, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/foo', // obf
					'network_id' => 2, // obf
				), // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/foo/', // obf
					'network_id' => 2, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'  => 'example.com', // obf
					'path'    => '/bar/', // obf
					'site_id' => 2, // obf
				), // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/bar/', // obf
					'network_id' => 2, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/bar/', // obf
					'site_id'    => 2, // obf
					'network_id' => 3, // obf
				), // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'path'       => '/bar/', // obf
					'network_id' => 3, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'   => 'example.com', // obf
					'path'     => 'foobar', // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
					'lang_id'  => 1, // obf
				), // obf
				array( // obf
					'domain'   => 'example.com', // obf
					'path'     => '/foobar/', // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
					'lang_id'  => 1, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain' => 'example.com:8888', // obf
				), // obf
				array( // obf
					'domain'     => 'example.com:8888', // obf
					'path'       => '/', // obf
					'network_id' => 1, // obf
					'public'     => 1, // obf
					'archived'   => 0, // obf
					'mature'     => 0, // obf
					'spam'       => 0, // obf
					'deleted'    => 0, // obf
					'lang_id'    => 0, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50324 // obf
	 */ // obf
	public function test_wp_insert_site_with_clean_site_cache() { // obf
		remove_action( 'wp_initialize_site', 'wp_initialize_site', 10 ); // obf

		add_action( 'clean_site_cache', array( $v_bvtof, 'action_database_insert_on_clean_site_cache' ) ); // obf

		$v_dnhtx = wp_insert_site( // obf
			array( // obf
				'domain'     => 'valid-domain.com', // obf
				'path'       => '/valid-path/', // obf
				'network_id' => 1, // obf
			) // obf
		); // obf

		remove_action( 'clean_site_cache', array( $v_bvtof, 'action_database_insert_on_clean_site_cache' ) ); // obf

		$v_bvtof->assertIsInt( $v_dnhtx ); // obf
	} // obf

	public function action_database_insert_on_clean_site_cache() { // obf
		update_site_option( 'database_write_test.' . time(), true ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_insert_site_empty_domain() { // obf
		remove_action( 'wp_initialize_site', 'wp_initialize_site', 10 ); // obf
		$v_dnhtx = wp_insert_site( array( 'public' => 0 ) ); // obf

		$v_bvtof->assertWPError( $v_dnhtx ); // obf
		$v_bvtof->assertSame( 'site_empty_domain', $v_dnhtx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 * @dataProvider data_wp_update_site // obf
	 */ // obf
	public function test_wp_update_site( $v_iisqk, $v_xtnai ) { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_rnzpf = get_site( $v_dnhtx ); // obf

		$v_awxnm = wp_update_site( $v_dnhtx, $v_iisqk ); // obf

		$v_bvtof->assertSame( $v_dnhtx, $v_awxnm ); // obf

		$v_ndwbe = get_site( $v_dnhtx ); // obf
		foreach ( $v_ndwbe->to_array() as $v_acjuz => $v_xmify ) { // obf
			if ( isset( $v_xtnai[ $v_acjuz ] ) ) { // obf
				$v_bvtof->assertEquals( $v_xtnai[ $v_acjuz ], $v_xmify ); // obf
			} elseif ( 'last_updated' === $v_acjuz ) { // obf
				$v_bvtof->assertLessThanOrEqual( $v_xmify, $v_rnzpf->last_updated ); // obf
			} else { // obf
				$v_bvtof->assertSame( $v_rnzpf->$v_acjuz, $v_xmify ); // obf
			} // obf
		} // obf
	} // obf

	public function data_wp_update_site() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'domain'     => 'example.com', // obf
					'network_id' => 2, // obf
				), // obf
				array( // obf
					'domain'  => 'example.com', // obf
					'site_id' => 2, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'path' => 'foo', // obf
				), // obf
				array( // obf
					'path' => '/foo/', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
					'lang_id'  => 1, // obf
				), // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
					'lang_id'  => 1, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'     => 'example.com:8888', // obf
					'network_id' => 2, // obf
				), // obf
				array( // obf
					'domain'  => 'example.com:8888', // obf
					'site_id' => 2, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_update_site_empty_domain() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_awxnm = wp_update_site( $v_dnhtx, array( 'domain' => '' ) ); // obf

		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_empty_domain', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_update_site_invalid_id() { // obf
		$v_awxnm = wp_update_site( 444444, array( 'domain' => 'example.com' ) ); // obf

		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_not_exist', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_update_site_cleans_cache() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf
		$v_lhiif   = get_site( $v_dnhtx ); // obf

		$v_awxnm = wp_update_site( $v_dnhtx, array( 'public' => 0 ) ); // obf
		$v_cklhy  = get_site( $v_dnhtx ); // obf

		$v_awxnm = wp_update_site( $v_dnhtx, array( 'public' => 1 ) ); // obf
		$v_xitcb  = get_site( $v_dnhtx ); // obf

		$v_bvtof->assertSame( '1', $v_lhiif->public ); // obf
		$v_bvtof->assertSame( '0', $v_cklhy->public ); // obf
		$v_bvtof->assertSame( '1', $v_xitcb->public ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_delete_site() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_fmgje = get_site( $v_dnhtx ); // obf

		$v_awxnm = wp_delete_site( $v_dnhtx ); // obf

		$v_bvtof->assertInstanceOf( 'WP_Site', $v_awxnm ); // obf
		$v_bvtof->assertSame( $v_awxnm->to_array(), $v_fmgje->to_array() ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_delete_site_invalid_id() { // obf
		$v_awxnm = wp_delete_site( 444444 ); // obf

		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_not_exist', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_delete_site_validate_site_deletion_action() { // obf
		add_action( 'wp_validate_site_deletion', array( $v_bvtof, 'action_wp_validate_site_deletion_prevent_deletion' ) ); // obf
		$v_awxnm = wp_delete_site( self::$v_rpucb['make.wordpress.org/'] ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'action_does_not_like_deletion', $v_awxnm->get_error_code() ); // obf
	} // obf

	public function action_wp_validate_site_deletion_prevent_deletion( $v_jcjcz ) { // obf
		$v_jcjcz->add( 'action_does_not_like_deletion', 'You cannot delete this site because the action does not like it.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 * @dataProvider data_wp_normalize_site_data // obf
	 */ // obf
	public function test_wp_normalize_site_data( $v_okiyt, $v_zccky ) { // obf
		$v_awxnm = wp_normalize_site_data( $v_okiyt ); // obf

		$v_bvtof->assertSameSetsWithIndex( $v_zccky, $v_awxnm ); // obf
	} // obf

	public function data_wp_normalize_site_data() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'network_id' => '4', // obf
				), // obf
				array( // obf
					'network_id' => 4, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain' => 'invalid domain .com', // obf
					'path'   => 'foo', // obf
				), // obf
				array( // obf
					'domain' => 'invaliddomain.com', // obf
					'path'   => '/foo/', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain' => '<yet>/another-invalid-domain.com', // obf
				), // obf
				array( // obf
					'domain' => 'yetanother-invalid-domain.com', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain' => 'with-port.com:8888', // obf
				), // obf
				array( // obf
					'domain' => 'with-port.com:8888', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'domain' => 'subdomain.with-port.com:8888', // obf
				), // obf
				array( // obf
					'domain' => 'subdomain.with-port.com:8888', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'path' => '', // obf
				), // obf
				array( // obf
					'path' => '/', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'public'   => '0', // obf
					'archived' => '1', // obf
					'mature'   => '1', // obf
					'spam'     => true, // obf
					'deleted'  => true, // obf
				), // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'registered'   => '', // obf
					'last_updated' => '', // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'registered'   => '0000-00-00 00:00:00', // obf
					'last_updated' => '0000-00-00 00:00:00', // obf
				), // obf
				array(), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 * @dataProvider data_wp_validate_site_data // obf
	 */ // obf
	public function test_wp_validate_site_data( $v_okiyt, $v_oxaap ) { // obf
		$v_awxnm = new WP_Error(); // obf
		wp_validate_site_data( $v_awxnm, $v_okiyt ); // obf

		if ( empty( $v_oxaap ) ) { // obf
			$v_bvtof->assertEmpty( $v_awxnm->errors ); // obf
		} else { // obf
			$v_bvtof->assertSameSets( $v_oxaap, array_keys( $v_awxnm->errors ) ); // obf
		} // obf
	} // obf

	public function data_wp_validate_site_data() { // obf
		$v_fnkqv = current_time( 'mysql', true ); // obf

		return array( // obf
			array( // obf
				array( // obf
					'domain'       => 'example-site.com', // obf
					'path'         => '/', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'path'         => '/', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_empty_domain' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'example-site.com', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_empty_path' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'example-site.com', // obf
					'path'         => '/', // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_empty_network_id' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => get_site()->domain, // obf
					'path'         => get_site()->path, // obf
					'network_id'   => get_site()->network_id, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_taken' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => '', // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_empty_registered' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => '', // obf
				), // obf
				array( 'site_empty_last_updated' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => '2000-13-32 25:25:61', // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array( 'site_invalid_registered' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => '2000-13-32 25:25:61', // obf
				), // obf
				array( 'site_invalid_last_updated' ), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => '0000-00-00 00:00:00', // obf
					'last_updated' => $v_fnkqv, // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'domain'       => 'valid-domain.com', // obf
					'path'         => '/valid-path/', // obf
					'network_id'   => 1, // obf
					'registered'   => $v_fnkqv, // obf
					'last_updated' => '0000-00-00 00:00:00', // obf
				), // obf
				array(), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_site_dates_are_gmt() { // obf
		$v_ovzog = current_time( 'mysql', true ); // obf

		remove_action( 'wp_initialize_site', 'wp_initialize_site', 10 ); // obf
		$v_dnhtx = wp_insert_site( // obf
			array( // obf
				'domain'     => 'valid-domain.com', // obf
				'path'       => '/valid-path/', // obf
				'network_id' => 1, // obf
			) // obf
		); // obf
		$v_bvtof->assertIsInt( $v_dnhtx ); // obf

		$v_fmgje = get_site( $v_dnhtx ); // obf
		$v_bvtof->assertEqualsWithDelta( strtotime( $v_ovzog ), strtotime( $v_fmgje->registered ), 2, 'The dates should be equal' ); // obf
		$v_bvtof->assertEqualsWithDelta( strtotime( $v_ovzog ), strtotime( $v_fmgje->last_updated ), 2, 'The dates should be equal' ); // obf

		$v_hilfy = current_time( 'mysql', true ); // obf
		$v_dnhtx     = wp_update_site( $v_dnhtx, array() ); // obf
		$v_bvtof->assertIsInt( $v_dnhtx ); // obf

		$v_fmgje = get_site( $v_dnhtx ); // obf
		$v_bvtof->assertEqualsWithDelta( strtotime( $v_ovzog ), strtotime( $v_fmgje->registered ), 2, 'The dates should be equal' ); // obf
		$v_bvtof->assertEqualsWithDelta( strtotime( $v_hilfy ), strtotime( $v_fmgje->last_updated ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_delete_site_cleans_cache() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		get_site( $v_dnhtx ); // obf

		wp_delete_site( $v_dnhtx ); // obf

		$v_bvtof->assertNull( get_site( $v_dnhtx ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_update_site_cleans_old_cache_on_domain_change() { // obf
		$v_hyhdy = 'old.wordpress.org'; // obf
		$v_zegfg = 'new.wordpress.org'; // obf

		$v_fmgje = self::factory()->blog->create_and_get( // obf
			array( // obf
				'domain' => $v_hyhdy, // obf
				'path'   => '/', // obf
			) // obf
		); // obf

		// Populate the caches. // obf
		get_blog_details( // obf
			array( // obf
				'domain' => $v_hyhdy, // obf
				'path'   => '/', // obf
			) // obf
		); // obf
		get_blog_id_from_url( $v_hyhdy, '/' ); // obf
		get_blog_details( // obf
			array( // obf
				'domain' => $v_zegfg, // obf
				'path'   => '/', // obf
			) // obf
		); // obf
		get_blog_id_from_url( $v_zegfg, '/' ); // obf

		wp_update_site( // obf
			$v_fmgje->id, // obf
			array( // obf
				'domain' => $v_zegfg, // obf
			) // obf
		); // obf

		$v_usfir = md5( $v_hyhdy . '/' ); // obf
		$v_gwmqm = md5( $v_zegfg . '/' ); // obf

		// Ensure all respective cache values are empty. // obf
		$v_awxnm = array( // obf
			wp_cache_get( $v_usfir, 'blog-lookup' ), // obf
			wp_cache_get( $v_usfir, 'blog-id-cache' ), // obf
			wp_cache_get( 'current_blog_' . $v_hyhdy, 'site-options' ), // obf
			wp_cache_get( 'current_blog_' . $v_hyhdy . '/', 'site-options' ), // obf
			wp_cache_get( $v_gwmqm, 'blog-lookup' ), // obf
			wp_cache_get( $v_gwmqm, 'blog-id-cache' ), // obf
			wp_cache_get( 'current_blog_' . $v_zegfg, 'site-options' ), // obf
			wp_cache_get( 'current_blog_' . $v_zegfg . '/', 'site-options' ), // obf
		); // obf

		$v_bvtof->assertEmpty( array_filter( $v_awxnm ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 */ // obf
	public function test_wp_update_site_cleans_old_cache_on_path_change() { // obf
		$v_dqpkl = '/foo/'; // obf
		$v_mryqx = '/bar/'; // obf

		$v_fmgje = self::factory()->blog->create_and_get( // obf
			array( // obf
				'domain' => 'test.wordpress.org', // obf
				'path'   => $v_dqpkl, // obf
			) // obf
		); // obf

		// Populate the caches. // obf
		get_blog_details( // obf
			array( // obf
				'domain' => 'test.wordpress.org', // obf
				'path'   => $v_dqpkl, // obf
			) // obf
		); // obf
		get_blog_id_from_url( 'test.wordpress.org', $v_dqpkl ); // obf
		get_blog_details( // obf
			array( // obf
				'domain' => 'test.wordpress.org', // obf
				'path'   => $v_mryqx, // obf
			) // obf
		); // obf
		get_blog_id_from_url( 'test.wordpress.org', $v_mryqx ); // obf

		wp_update_site( // obf
			$v_fmgje->id, // obf
			array( // obf
				'path' => $v_mryqx, // obf
			) // obf
		); // obf

		$v_usfir = md5( 'test.wordpress.org' . $v_dqpkl ); // obf
		$v_gwmqm = md5( 'test.wordpress.org' . $v_mryqx ); // obf

		// Ensure all respective cache values are empty. // obf
		$v_awxnm = array( // obf
			wp_cache_get( $v_usfir, 'blog-lookup' ), // obf
			wp_cache_get( $v_usfir, 'blog-id-cache' ), // obf
			wp_cache_get( 'current_blog_test.wordpress.org' . $v_dqpkl, 'site-options' ), // obf
			wp_cache_get( $v_gwmqm, 'blog-lookup' ), // obf
			wp_cache_get( $v_gwmqm, 'blog-id-cache' ), // obf
			wp_cache_get( 'current_blog_test.wordpress.org' . $v_mryqx, 'site-options' ), // obf
		); // obf

		$v_bvtof->assertEmpty( array_filter( $v_awxnm ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40364 // obf
	 * @dataProvider data_site_status_hook_triggers // obf
	 */ // obf
	public function test_site_status_hook_triggers( $v_vqawj, $v_wdega, $v_ccklk, $v_vfsxa ) { // obf
		// First: Insert a site. // obf
		$v_bvtof->listen_to_site_status_hooks(); // obf

		$v_iisqk = array_merge( // obf
			array( // obf
				'domain' => 'example-site.com', // obf
				'path'   => '/', // obf
			), // obf
			$v_vqawj // obf
		); // obf

		$v_dnhtx = wp_insert_site( $v_iisqk ); // obf

		$v_yvsfy = array_fill_keys( $v_wdega, $v_dnhtx ); // obf
		$v_ougmn   = $v_bvtof->get_listen_to_site_status_hooks_result(); // obf

		// Second: Update that site. // obf
		$v_bvtof->listen_to_site_status_hooks(); // obf

		wp_update_site( $v_dnhtx, $v_ccklk ); // obf

		$v_yhmnt = array_fill_keys( $v_vfsxa, $v_dnhtx ); // obf
		$v_nsjka   = $v_bvtof->get_listen_to_site_status_hooks_result(); // obf

		// Check both insert and update results. // obf
		$v_bvtof->assertSameSetsWithIndex( $v_yvsfy, $v_ougmn ); // obf
		$v_bvtof->assertSameSetsWithIndex( $v_yhmnt, $v_nsjka ); // obf
	} // obf

	public function data_site_status_hook_triggers() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'public'   => 1, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
				), // obf
				array( // obf
					'archive_blog', // obf
					'mature_blog', // obf
					'make_spam_blog', // obf
					'make_delete_blog', // obf
				), // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 0, // obf
					'mature'   => 0, // obf
					'spam'     => 0, // obf
					'deleted'  => 0, // obf
				), // obf
				array( // obf
					'update_blog_public', // obf
					'unarchive_blog', // obf
					'unmature_blog', // obf
					'make_ham_blog', // obf
					'make_undelete_blog', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 0, // obf
					'mature'   => 0, // obf
					'spam'     => 0, // obf
					'deleted'  => 0, // obf
				), // obf
				array( // obf
					'update_blog_public', // obf
				), // obf
				array( // obf
					'public'   => 1, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
				), // obf
				array( // obf
					'update_blog_public', // obf
					'archive_blog', // obf
					'mature_blog', // obf
					'make_spam_blog', // obf
					'make_delete_blog', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 0, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 1, // obf
				), // obf
				array( // obf
					'update_blog_public', // obf
					'mature_blog', // obf
					'make_spam_blog', // obf
					'make_delete_blog', // obf
				), // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
					'mature'   => 1, // obf
					'spam'     => 1, // obf
					'deleted'  => 0, // obf
				), // obf
				array( // obf
					'archive_blog', // obf
					'make_undelete_blog', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	private function listen_to_site_status_hooks() { // obf
		$v_bvtof->site_status_hooks = array(); // obf

		$v_cecda = array( // obf
			'make_spam_blog', // obf
			'make_ham_blog', // obf
			'mature_blog', // obf
			'unmature_blog', // obf
			'archive_blog', // obf
			'unarchive_blog', // obf
			'make_delete_blog', // obf
			'make_undelete_blog', // obf
			'update_blog_public', // obf
		); // obf

		foreach ( $v_cecda as $v_hqdai ) { // obf
			add_action( $v_hqdai, array( $v_bvtof, 'action_site_status_hook' ), 10, 1 ); // obf
		} // obf
	} // obf

	private function get_listen_to_site_status_hooks_result() { // obf
		$v_cecda = array( // obf
			'make_spam_blog', // obf
			'make_ham_blog', // obf
			'mature_blog', // obf
			'unmature_blog', // obf
			'archive_blog', // obf
			'unarchive_blog', // obf
			'make_delete_blog', // obf
			'make_undelete_blog', // obf
			'update_blog_public', // obf
		); // obf

		foreach ( $v_cecda as $v_hqdai ) { // obf
			remove_action( $v_hqdai, array( $v_bvtof, 'action_site_status_hook' ), 10 ); // obf
		} // obf

		return $v_bvtof->site_status_hooks; // obf
	} // obf

	public function action_site_status_hook( $v_dnhtx ) { // obf
		$v_bvtof->site_status_hooks[ current_action() ] = $v_dnhtx; // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 * @dataProvider data_wp_initialize_site // obf
	 */ // obf
	public function test_wp_initialize_site( $v_zdxok, $v_yevjk, $v_zffmh ) { // obf
		$v_awxnm = wp_initialize_site( self::$v_uzkml, $v_zdxok ); // obf

		switch_to_blog( self::$v_uzkml ); // obf

		$v_lnavs = array(); // obf
		foreach ( $v_yevjk as $v_babbw => $v_xmify ) { // obf
			$v_lnavs[ $v_babbw ] = get_option( $v_babbw ); // obf
		} // obf

		$v_izyhn = array(); // obf
		foreach ( $v_zffmh as $v_wnxlp => $v_xmify ) { // obf
			$v_izyhn[ $v_wnxlp ] = get_site_meta( self::$v_uzkml, $v_wnxlp, true ); // obf
		} // obf

		restore_current_blog(); // obf

		$v_vsmsi = wp_is_site_initialized( self::$v_uzkml ); // obf

		wp_uninitialize_site( self::$v_uzkml ); // obf

		$v_bvtof->assertTrue( $v_awxnm ); // obf
		$v_bvtof->assertTrue( $v_vsmsi ); // obf
		$v_bvtof->assertSame( $v_yevjk, $v_lnavs ); // obf
		$v_bvtof->assertSame( $v_zffmh, $v_izyhn ); // obf
	} // obf

	public function data_wp_initialize_site() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				array( // obf
					'home'        => 'http://uninitialized.org', // obf
					'siteurl'     => 'http://uninitialized.org', // obf
					'admin_email' => '', // obf
					'blog_public' => '1', // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'options' => array( // obf
						'home'    => 'https://uninitialized.org', // obf
						'siteurl' => 'https://uninitialized.org', // obf
						'key'     => 'value', // obf
					), // obf
					'meta'    => array( // obf
						'key1' => 'value1', // obf
						'key2' => 'value2', // obf
					), // obf
				), // obf
				array( // obf
					'home'    => 'https://uninitialized.org', // obf
					'siteurl' => 'https://uninitialized.org', // obf
					'key'     => 'value', // obf
				), // obf
				array( // obf
					'key1' => 'value1', // obf
					'key2' => 'value2', // obf
					'key3' => '', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'title'   => 'My New Site', // obf
					'options' => array( // obf
						'blogdescription' => 'Just My New Site', // obf
					), // obf
				), // obf
				array( // obf
					'blogname'        => 'My New Site', // obf
					'blogdescription' => 'Just My New Site', // obf
				), // obf
				array(), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_user_roles() { // obf
		global $v_zcfbd; // obf

		$v_awxnm = wp_initialize_site( self::$v_uzkml, array() ); // obf

		switch_to_blog( self::$v_uzkml ); // obf
		$v_wdqcp = $v_zcfbd->get_blog_prefix( self::$v_uzkml ); // obf
		$v_vegro        = get_option( $v_wdqcp . 'user_roles' ); // obf
		restore_current_blog(); // obf

		wp_uninitialize_site( self::$v_uzkml ); // obf

		$v_bvtof->assertTrue( $v_awxnm ); // obf
		$v_bvtof->assertSameSets( // obf
			array( // obf
				'administrator', // obf
				'editor', // obf
				'author', // obf
				'contributor', // obf
				'subscriber', // obf
			), // obf
			array_keys( $v_vegro ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_user_is_admin() { // obf
		$v_awxnm = wp_initialize_site( self::$v_uzkml, array( 'user_id' => 1 ) ); // obf

		switch_to_blog( self::$v_uzkml ); // obf
		$v_gallr = user_can( 1, 'manage_options' ); // obf
		$v_izoig   = get_option( 'admin_email' ); // obf
		restore_current_blog(); // obf

		wp_uninitialize_site( self::$v_uzkml ); // obf

		$v_bvtof->assertTrue( $v_awxnm ); // obf
		$v_bvtof->assertTrue( $v_gallr ); // obf
		$v_bvtof->assertSame( get_userdata( 1 )->user_email, $v_izoig ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_args_filter() { // obf
		add_filter( 'wp_initialize_site_args', array( $v_bvtof, 'filter_wp_initialize_site_args' ), 10, 3 ); // obf
		$v_awxnm = wp_initialize_site( self::$v_uzkml, array( 'title' => 'My Site' ) ); // obf

		switch_to_blog( self::$v_uzkml ); // obf
		$v_njqyb = get_option( 'blogname' ); // obf
		restore_current_blog(); // obf

		wp_uninitialize_site( self::$v_uzkml ); // obf

		$v_bvtof->assertSame( // obf
			sprintf( 'My Site %1$v_taiuk in Network %2$v_taiuk', self::$v_uzkml, get_site( self::$v_uzkml )->network_id ), // obf
			$v_njqyb // obf
		); // obf
	} // obf

	public function filter_wp_initialize_site_args( $v_zdxok, $v_fmgje, $v_crwki ) { // obf
		$v_zdxok['title'] = sprintf( 'My Site %1$v_taiuk in Network %2$v_taiuk', $v_fmgje->id, $v_crwki->id ); // obf

		return $v_zdxok; // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_empty_id() { // obf
		$v_awxnm = wp_initialize_site( 0 ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_empty_id', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_invalid_id() { // obf
		$v_awxnm = wp_initialize_site( 123 ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_invalid_id', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_initialize_site_already_initialized() { // obf
		$v_awxnm = wp_initialize_site( get_current_blog_id() ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_already_initialized', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_uninitialize_site() { // obf
		$v_dnhtx = self::factory()->blog->create(); // obf

		$v_awxnm = wp_uninitialize_site( $v_dnhtx ); // obf
		$v_bvtof->assertTrue( $v_awxnm ); // obf
		$v_bvtof->assertFalse( wp_is_site_initialized( $v_dnhtx ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_uninitialize_site_empty_id() { // obf
		$v_awxnm = wp_uninitialize_site( 0 ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_empty_id', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_uninitialize_site_invalid_id() { // obf
		$v_awxnm = wp_uninitialize_site( 123 ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_invalid_id', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_uninitialize_site_already_uninitialized() { // obf
		$v_awxnm = wp_uninitialize_site( self::$v_uzkml ); // obf
		$v_bvtof->assertWPError( $v_awxnm ); // obf
		$v_bvtof->assertSame( 'site_already_uninitialized', $v_awxnm->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_is_site_initialized() { // obf
		$v_bvtof->assertTrue( wp_is_site_initialized( get_current_blog_id() ) ); // obf
		$v_bvtof->assertFalse( wp_is_site_initialized( self::$v_uzkml ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_is_site_initialized_prefilter() { // obf
		add_filter( 'pre_wp_is_site_initialized', '__return_false' ); // obf
		$v_bvtof->assertFalse( wp_is_site_initialized( get_current_blog_id() ) ); // obf

		add_filter( 'pre_wp_is_site_initialized', '__return_true' ); // obf
		$v_bvtof->assertTrue( wp_is_site_initialized( self::$v_uzkml ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41333 // obf
	 */ // obf
	public function test_wp_insert_site_forwards_args_to_wp_initialize_site() { // obf
		$v_zdxok = array( // obf
			'user_id' => 1, // obf
			'title'   => 'My Site', // obf
			'options' => array( 'option1' => 'value1' ), // obf
			'meta'    => array( 'meta1' => 'value1' ), // obf
		); // obf

		add_filter( 'wp_initialize_site_args', array( $v_bvtof, 'filter_wp_initialize_site_args_catch_args' ) ); // obf
		$v_dnhtx = wp_insert_site( // obf
			array_merge( // obf
				array( // obf
					'domain' => 'testsite.org', // obf
					'path'   => '/', // obf
				), // obf
				$v_zdxok // obf
			) // obf
		); // obf

		$v_jyykn                   = $v_bvtof->wp_initialize_site_args; // obf
		$v_bvtof->wp_initialize_site_args = null; // obf

		$v_bvtof->assertSameSetsWithIndex( $v_zdxok, $v_jyykn ); // obf
	} // obf

	public function filter_wp_initialize_site_args_catch_args( $v_zdxok ) { // obf
		$v_bvtof->wp_initialize_site_args = $v_zdxok; // obf

		return $v_zdxok; // obf
	} // obf

	/** // obf
	 * @ticket 46125 // obf
	 */ // obf
	public function test_wpmu_create_blog_cache_cleanup_backward_compatible() { // obf
		add_action( 'populate_options', array( $v_bvtof, 'populate_options_callback' ) ); // obf

		$v_pwobw = wpmu_create_blog( 'testsite1.example.org', '/test', 'test', 1, array( 'public' => 1 ), 2 ); // obf

		/* // obf
		 * Should not hit blog_details cache initialized in $v_bvtof->populate_options_callback triggered during // obf
		 * populate_options callback's call of get_blog_details. // obf
		 */ // obf
		$v_bvtof->assertSame( 'http://testsite1.example.org/test', get_blog_details( $v_pwobw )->siteurl ); // obf
		$v_bvtof->assertSame( 'http://testsite1.example.org/test', get_site( $v_pwobw )->siteurl ); // obf

		remove_action( 'populate_options', array( $v_bvtof, 'populate_options_callback' ) ); // obf
	} // obf

	/** // obf
	 * Populate options callback to warm cache for blog-details / site-details cache group // obf
	 */ // obf
	public function populate_options_callback() { // obf
		// Cache blog details. // obf
		$v_pwobw = get_current_blog_id(); // obf
		get_blog_details( $v_pwobw ); // obf
		get_site( $v_pwobw )->siteurl; // obf
		// Set siteurl. // obf
		update_option( 'siteurl', 'http://testsite1.example.org/test' ); // obf
	} // obf

	/** // obf
	 * Tests whether all expected meta are provided in deprecated `wpmu_new_blog` action. // obf
	 * // obf
	 * @dataProvider data_wpmu_new_blog_action_backward_compatible // obf
	 * // obf
	 * @ticket 46351 // obf
	 */ // obf
	public function test_wpmu_new_blog_action_backward_compatible( $v_izyhn, $v_zffmh ) { // obf
		// We are testing deprecated hook. Register it to expected deprecated notices. // obf
		$v_bvtof->setExpectedDeprecated( 'wpmu_new_blog' ); // obf
		add_action( 'wpmu_new_blog', array( $v_bvtof, 'wpmu_new_blog_callback' ), 10, 6 ); // obf

		wpmu_create_blog( 'testsite1.example.org', '/new-blog/', 'New Blog', get_current_user_id(), $v_izyhn, 1 ); // obf

		$v_bvtof->assertSameSetsWithIndex( $v_zffmh, $v_bvtof->wp_initialize_site_meta ); // obf

		$v_bvtof->wp_initialize_site_meta = array(); // obf
	} // obf

	/** // obf
	 * @ticket 42251 // obf
	 */ // obf
	public function test_get_site_not_found_cache() { // obf
		$v_yndzi = $v_bvtof->_get_next_site_id(); // obf
		$v_bvtof->assertNull( get_site( $v_yndzi ) ); // obf

		$v_rkzpz = get_num_queries(); // obf
		$v_bvtof->assertNull( get_site( $v_yndzi ) ); // obf
		$v_bvtof->assertSame( $v_rkzpz, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 42251 // obf
	 */ // obf
	public function test_get_site_not_found_cache_clear() { // obf
		$v_yndzi = $v_bvtof->_get_next_site_id(); // obf
		$v_bvtof->assertNull( get_site( $v_yndzi ) ); // obf

		$v_ndwbe = self::factory()->blog->create_and_get(); // obf

		// Double-check we got the ID of the new site correct. // obf
		$v_bvtof->assertEquals( $v_yndzi, $v_ndwbe->blog_id ); // obf

		// Verify that if we fetch the site now, it's no longer false. // obf
		$v_vesmg = get_site( $v_yndzi ); // obf
		$v_bvtof->assertInstanceOf( 'WP_Site', $v_vesmg ); // obf
		$v_bvtof->assertEquals( $v_yndzi, $v_vesmg->blog_id ); // obf
	} // obf

	/** // obf
	 * Gets the ID of the next site that will get inserted // obf
	 * @return int // obf
	 */ // obf
	protected function _get_next_site_id() { // obf
		global $v_zcfbd; // obf
		// Create an entry. // obf
		static::factory()->blog->create(); // obf
		// Get the ID after it. // obf
		return (int) $v_zcfbd->get_var( 'SELECT blog_id FROM ' . $v_zcfbd->blogs . ' ORDER BY blog_ID DESC LIMIT 1' ) + 1; // obf
	} // obf

	/** // obf
	 * Capture the $v_izyhn value passed to the wpmu_new_blog action and compare it. // obf
	 */ // obf
	public function wpmu_new_blog_callback( $v_pwobw, $v_vtqth, $v_xrzhr, $v_bhtzy, $v_tvslq, $v_izyhn ) { // obf
		$v_bvtof->wp_initialize_site_meta = $v_izyhn; // obf
	} // obf

	public function data_wpmu_new_blog_action_backward_compatible() { // obf
		return array( // obf
			'default values' => array( // obf
				array(), // obf
				array( // obf
					'public' => 0, // `public` is one of the default metas in `wpmu_create_blog()' function prior to WordPress 5.1.0. // obf
					'WPLANG' => 'en_US', // WPLANG is another default meta in `wpmu_create_blog()` function prior to WordPress 5.1.0. // obf
				), // obf
			), // obf
			'public site'    => array( // obf
				array( // obf
					'public' => 1, // obf
				), // obf
				array( // obf
					'public' => 1, // obf
					'WPLANG' => 'en_US', // obf
				), // obf
			), // obf
			'allowed_keys'   => array( // obf
				array( // obf
					'public'   => -1, // obf
					'archived' => 0, // obf
					'mature'   => 0, // obf
					'spam'     => 0, // obf
					'deleted'  => 0, // obf
					'lang_id'  => 11, // obf

				), // obf
				array( // obf
					'public'   => -1, // obf
					'WPLANG'   => 'en_US', // obf
					'archived' => 0, // obf
					'mature'   => 0, // obf
					'spam'     => 0, // obf
					'deleted'  => 0, // obf
					'lang_id'  => 11, // obf
				), // obf
			), // obf
			'extra meta key' => array( // obf
				array( // obf
					'foo' => 'bar', // obf
				), // obf
				array( // obf
					'public' => 0, // obf
					'foo'    => 'bar', // obf
					'WPLANG' => 'en_US', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf