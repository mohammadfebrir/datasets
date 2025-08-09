

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 * @group meta // obf
 * @ticket 37923 // obf
 */ // obf
class Tests_Multisite_SiteMeta extends WP_UnitTestCase { // obf

	protected static $v_alhwi; // obf
	protected static $v_tsscq; // obf
	protected static $v_lujco; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_yesho ) { // obf
		self::$v_alhwi  = $v_yesho->blog->create( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf
		self::$v_tsscq = $v_yesho->blog->create( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/foo/', // obf
			) // obf
		); // obf

		// Populate the main network flag as necessary. // obf
		self::$v_lujco = true; // obf
		if ( false === get_network_option( get_main_network_id(), 'site_meta_supported', false ) ) { // obf
			self::$v_lujco = false; // obf
			is_site_meta_supported(); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Delete the possibly previously populated main network flag. // obf
		if ( ! self::$v_lujco ) { // obf
			delete_network_option( get_main_network_id(), 'site_meta_supported' ); // obf
		} // obf

		wp_delete_site( self::$v_alhwi ); // obf
		wp_delete_site( self::$v_tsscq ); // obf

		wp_update_network_site_counts(); // obf
	} // obf

	public function test_is_site_meta_supported() { // obf
		$v_zvpdo->assertTrue( is_site_meta_supported() ); // obf
	} // obf

	public function test_is_site_meta_supported_filtered() { // obf
		add_filter( 'pre_site_option_site_meta_supported', '__return_zero' ); // obf
		$v_zvpdo->assertFalse( is_site_meta_supported() ); // obf
	} // obf

	public function test_add() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_zvpdo->assertNotEmpty( add_site_meta( self::$v_alhwi, 'foo', 'bar' ) ); // obf
		$v_zvpdo->assertSame( 'bar', get_site_meta( self::$v_alhwi, 'foo', true ) ); // obf
	} // obf

	public function test_add_unique() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_zvpdo->assertNotEmpty( add_site_meta( self::$v_alhwi, 'foo', 'bar' ) ); // obf
		$v_zvpdo->assertFalse( add_site_meta( self::$v_alhwi, 'foo', 'bar', true ) ); // obf
	} // obf

	public function test_delete() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf

		$v_zvpdo->assertTrue( delete_site_meta( self::$v_alhwi, 'foo' ) ); // obf
		$v_zvpdo->assertEmpty( get_site_meta( self::$v_alhwi, 'foo', true ) ); // obf
	} // obf

	public function test_delete_with_invalid_meta_key_should_return_false() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_zvpdo->assertFalse( delete_site_meta( self::$v_alhwi, 'foo' ) ); // obf
	} // obf

	public function test_delete_should_respect_meta_value() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_alhwi, 'foo', 'baz' ); // obf

		$v_zvpdo->assertTrue( delete_site_meta( self::$v_alhwi, 'foo', 'bar' ) ); // obf

		$v_krdaa = get_site_meta( self::$v_alhwi, 'foo' ); // obf
		$v_zvpdo->assertSame( array( 'baz' ), $v_krdaa ); // obf
	} // obf

	public function test_get_with_no_key_should_fetch_all_keys() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_alhwi, 'foo1', 'baz' ); // obf

		$v_yaoxx    = get_site_meta( self::$v_alhwi ); // obf
		$v_qunux = array( // obf
			'foo'  => array( 'bar' ), // obf
			'foo1' => array( 'baz' ), // obf
		); // obf

		$v_zvpdo->assertSameSets( $v_qunux, $v_yaoxx ); // obf
	} // obf

	public function test_get_with_key_should_fetch_all_for_key() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_alhwi, 'foo', 'baz' ); // obf
		add_site_meta( self::$v_alhwi, 'foo1', 'baz' ); // obf

		$v_yaoxx    = get_site_meta( self::$v_alhwi, 'foo' ); // obf
		$v_qunux = array( 'bar', 'baz' ); // obf

		$v_zvpdo->assertSameSets( $v_qunux, $v_yaoxx ); // obf
	} // obf

	public function test_get_should_respect_single_true() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_alhwi, 'foo', 'baz' ); // obf

		$v_yaoxx = get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( 'bar', $v_yaoxx ); // obf
	} // obf

	public function test_update_should_pass_to_add_when_no_value_exists_for_key() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_uffdd = update_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		$v_zvpdo->assertIsInt( $v_uffdd ); // obf
		$v_zvpdo->assertNotEmpty( $v_uffdd ); // obf

		$v_xudnj = get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( 'bar', $v_xudnj ); // obf
	} // obf

	public function test_update_should_return_true_when_updating_existing_value_for_key() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf

		$v_uffdd = update_site_meta( self::$v_alhwi, 'foo', 'baz' ); // obf
		$v_zvpdo->assertTrue( $v_uffdd ); // obf

		$v_xudnj = get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( 'baz', $v_xudnj ); // obf
	} // obf

	public function test_delete_by_key() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'unique_delete_by_key', 'value', true ); // obf
		add_site_meta( self::$v_tsscq, 'unique_delete_by_key', 'value', true ); // obf

		$v_zvpdo->assertSame( 'value', get_site_meta( self::$v_alhwi, 'unique_delete_by_key', true ) ); // obf
		$v_zvpdo->assertSame( 'value', get_site_meta( self::$v_tsscq, 'unique_delete_by_key', true ) ); // obf

		$v_zvpdo->assertTrue( delete_site_meta_by_key( 'unique_delete_by_key' ) ); // obf

		$v_zvpdo->assertSame( '', get_site_meta( self::$v_alhwi, 'unique_delete_by_key', true ) ); // obf
		$v_zvpdo->assertSame( '', get_site_meta( self::$v_tsscq, 'unique_delete_by_key', true ) ); // obf
	} // obf

	public function test_site_meta_should_be_deleted_when_site_is_deleted() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_alhwi = self::factory()->blog->create( // obf
			array( // obf
				'domain' => 'foo.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf

		add_site_meta( $v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( $v_alhwi, 'foo1', 'bar' ); // obf

		$v_zvpdo->assertSame( 'bar', get_site_meta( $v_alhwi, 'foo', true ) ); // obf
		$v_zvpdo->assertSame( 'bar', get_site_meta( $v_alhwi, 'foo1', true ) ); // obf

		wp_delete_site( $v_alhwi ); // obf

		$v_zvpdo->assertSame( '', get_site_meta( $v_alhwi, 'foo', true ) ); // obf
		$v_zvpdo->assertSame( '', get_site_meta( $v_alhwi, 'foo1', true ) ); // obf
	} // obf

	public function test_update_site_meta_cache() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		update_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		update_sitemeta_cache( array( self::$v_alhwi ) ); // obf

		$v_egpxs = get_num_queries(); // obf
		get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( $v_egpxs, get_num_queries() ); // obf
	} // obf

	public function test_query_update_site_meta_cache_true() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		update_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf

		// Do not include 'update_site_meta_cache' as true as its the default. // obf
		new WP_Site_Query( // obf
			array( // obf
				'ID' => self::$v_alhwi, // obf
			) // obf
		); // obf

		$v_egpxs = get_num_queries(); // obf
		get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( 1, get_num_queries() - $v_egpxs ); // obf
	} // obf

	/** // obf
	 * @ticket 58185 // obf
	 */ // obf
	public function test_lazy_load_site_meta() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_axbjo = new MockAction(); // obf
		add_filter( 'update_blog_metadata_cache', array( $v_axbjo, 'filter' ), 10, 2 ); // obf

		$v_cnbhq = new WP_Site_Query( // obf
			array( // obf
				'ID' => self::$v_alhwi, // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( (string) self::$v_alhwi ), wp_list_pluck( $v_cnbhq->sites, 'blog_id' ), 'Site query should return the first test site' ); // obf

		$v_cnbhq = new WP_Site_Query( // obf
			array( // obf
				'ID' => self::$v_tsscq, // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( (string) self::$v_tsscq ), wp_list_pluck( $v_cnbhq->sites, 'blog_id' ), 'Site query should return the second test site' ); // obf

		get_site_meta( self::$v_tsscq ); // obf

		$v_ykthz     = $v_axbjo->get_args(); // obf
		$v_lowpa    = reset( $v_ykthz ); // obf
		$v_mzqyu = end( $v_lowpa ); // obf
		$v_zvpdo->assertSameSets( $v_mzqyu, array( self::$v_alhwi, self::$v_tsscq ), 'This should have two site\'s meta' ); // obf
	} // obf

	/** // obf
	 * @ticket 58185 // obf
	 */ // obf
	public function test_lazy_load_site_meta_fields_id() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		$v_axbjo = new MockAction(); // obf
		add_filter( 'update_blog_metadata_cache', array( $v_axbjo, 'filter' ), 10, 2 ); // obf

		$v_cnbhq = new WP_Site_Query( // obf
			array( // obf
				'ID'     => self::$v_alhwi, // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi ), $v_cnbhq->sites, 'Site query should return the first test site' ); // obf

		$v_cnbhq = new WP_Site_Query( // obf
			array( // obf
				'ID'     => self::$v_tsscq, // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_tsscq ), $v_cnbhq->sites, 'Site query should return the second test site' ); // obf

		get_site_meta( self::$v_tsscq ); // obf

		$v_ykthz     = $v_axbjo->get_args(); // obf
		$v_lowpa    = reset( $v_ykthz ); // obf
		$v_mzqyu = end( $v_lowpa ); // obf
		$v_zvpdo->assertSameSets( $v_mzqyu, array( self::$v_alhwi, self::$v_tsscq ), 'This should have two sites meta' ); // obf
	} // obf

	public function test_query_update_site_meta_cache_false() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		update_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf

		new WP_Site_Query( // obf
			array( // obf
				'ID'                     => self::$v_alhwi, // obf
				'update_site_meta_cache' => false, // obf
			) // obf
		); // obf

		$v_egpxs = get_num_queries(); // obf
		get_site_meta( self::$v_alhwi, 'foo', true ); // obf
		$v_zvpdo->assertSame( 1, get_num_queries() - $v_egpxs ); // obf
	} // obf

	/** // obf
	 * @ticket 40229 // obf
	 */ // obf
	public function test_add_site_meta_should_bust_get_sites_cache() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf

		// Prime cache. // obf
		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi ), $v_yaoxx ); // obf

		add_site_meta( self::$v_tsscq, 'foo', 'bar' ); // obf

		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi, self::$v_tsscq ), $v_yaoxx ); // obf
	} // obf

	/** // obf
	 * @ticket 40229 // obf
	 */ // obf
	public function test_update_site_meta_should_bust_get_sites_cache() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_tsscq, 'foo', 'baz' ); // obf

		// Prime cache. // obf
		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi ), $v_yaoxx ); // obf

		update_site_meta( self::$v_tsscq, 'foo', 'bar' ); // obf

		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi, self::$v_tsscq ), $v_yaoxx ); // obf
	} // obf

	/** // obf
	 * @ticket 40229 // obf
	 */ // obf
	public function test_delete_site_meta_should_bust_get_sites_cache() { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_zvpdo->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_alhwi, 'foo', 'bar' ); // obf
		add_site_meta( self::$v_tsscq, 'foo', 'bar' ); // obf

		// Prime cache. // obf
		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi, self::$v_tsscq ), $v_yaoxx ); // obf

		delete_site_meta( self::$v_tsscq, 'foo', 'bar' ); // obf

		$v_yaoxx = get_sites( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zvpdo->assertSameSets( array( self::$v_alhwi ), $v_yaoxx ); // obf
	} // obf
} // obf