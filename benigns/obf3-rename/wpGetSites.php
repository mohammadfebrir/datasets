

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpGetSites extends WP_UnitTestCase { // obf
	protected static $v_jktoe; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_fuhym ) { // obf
		self::$v_jktoe = array( // obf
			'w.org/'      => array( // obf
				'domain'     => 'w.org', // obf
				'path'       => '/', // obf
				'network_id' => 2, // obf
			), // obf
			'wp.org/'     => array( // obf
				'domain'     => 'wp.org', // obf
				'path'       => '/', // obf
				'network_id' => 2, // obf
				'public'     => 0, // obf
			), // obf
			'wp.org/foo/' => array( // obf
				'domain'     => 'wp.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => 1, // obf
				'public'     => 0, // obf
			), // obf
			'wp.org/oof/' => array( // obf
				'domain' => 'wp.org', // obf
				'path'   => '/oof/', // obf
			), // obf
		); // obf

		foreach ( self::$v_jktoe as &$v_dsuqo ) { // obf
			$v_dsuqo = $v_fuhym->blog->create( $v_dsuqo ); // obf
		} // obf
		unset( $v_dsuqo ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_jktoe as $v_dsuqo ) { // obf
			wp_delete_site( $v_dsuqo ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_get_sites // obf
	 */ // obf
	public function test_wp_get_sites_site_is_expected_array() { // obf

		$v_duygd  = array( // obf
			'blog_id', // obf
			'site_id', // obf
			'domain', // obf
			'path', // obf
			'registered', // obf
			'last_updated', // obf
			'public', // obf
			'archived', // obf
			'mature', // obf
			'spam', // obf
			'deleted', // obf
			'lang_id', // obf
		); // obf
		$v_bsprd = wp_get_sites(); // obf

		$v_ybjbi = array_diff_key( array_flip( $v_duygd ), $v_bsprd[0] ); // obf

		$v_oedju->assertSame( array(), $v_ybjbi, 'Keys are missing from site arrays.' ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_get_sites // obf
	 * @dataProvider data_wp_get_sites // obf
	 * // obf
	 * @param $v_jyfrq // obf
	 * @param $v_shrab // obf
	 * @param $v_zlzng // obf
	 */ // obf
	public function test_wp_get_sites( $v_jyfrq, $v_shrab, $v_zlzng ) { // obf
		$v_oedju->assertCount( $v_jyfrq, wp_get_sites( $v_shrab ), $v_zlzng ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_get_sites() { // obf
		return array( // obf
			array( 3, array(), 'Default arguments should return all sites from the current network.' ), // obf
			array( 0, array( 'network_id' => 999 ), 'No sites should match a query with an invalid network ID.' ), // obf
			array( 5, array( 'network_id' => null ), 'A network ID of null should return all sites on all networks.' ), // obf
			array( 2, array( 'network_id' => 2 ), 'Only sites on a specified network ID should be returned.' ), // obf
			array( 5, array( 'network_id' => array( 1, 2 ) ), 'If multiple network IDs are specified, sites from both should be returned.' ), // obf
			array( // obf
				3, // obf
				array( // obf
					'public'     => 1, // obf
					'network_id' => null, // obf
				), // obf
				'Public sites on all networks.', // obf
			), // obf
			array( // obf
				2, // obf
				array( // obf
					'public'     => 0, // obf
					'network_id' => null, // obf
				), // obf
				'Non public sites on all networks.', // obf
			), // obf
			array( // obf
				2, // obf
				array( // obf
					'public'     => 1, // obf
					'network_id' => 1, // obf
				), // obf
				'Public sites on a single network.', // obf
			), // obf
			array( // obf
				1, // obf
				array( // obf
					'public'     => 1, // obf
					'network_id' => 2, // obf
				), // obf
				'Public sites on a second network.', // obf
			), // obf
			array( 2, array( 'limit' => 2 ), 'Provide only a limit argument.' ), // obf
			array( // obf
				1, // obf
				array( // obf
					'limit'  => 2, // obf
					'offset' => 2, // obf
				), // obf
				'Provide both limit and offset arguments.', // obf
			), // obf
			array( 2, array( 'offset' => 1 ), 'Provide only an offset argument.' ), // obf
			array( 0, array( 'offset' => 20 ), 'Expect 0 sites when using an offset larger than the total number of sites.' ), // obf
		); // obf
	} // obf
} // obf