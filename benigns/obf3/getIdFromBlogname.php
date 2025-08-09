

<?php // obf

/** // obf
 * Test get_id_from_blogname() in multisite. // obf
 * // obf
 * @group blogname // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_GetIdFromBlogname extends WP_UnitTestCase { // obf

	protected static $v_gzekf; // obf
	protected static $v_scimj; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xnfjx ) { // obf
		self::$v_gzekf = array( // obf
			'wordpress.org/'     => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'www.wordpress.net/' => array( // obf
				'domain' => 'www.wordpress.net', // obf
				'path'   => '/', // obf
			), // obf
		); // obf

		foreach ( self::$v_gzekf as &$v_sujlf ) { // obf
			$v_sujlf = $v_xnfjx->network->create( $v_sujlf ); // obf
		} // obf
		unset( $v_sujlf ); // obf

		self::$v_scimj = array( // obf
			'wordpress.org/'         => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_gzekf['wordpress.org/'], // obf
			), // obf
			'foo.wordpress.org/'     => array( // obf
				'domain'     => 'foo.wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_gzekf['wordpress.org/'], // obf
			), // obf
			'wordpress.org/foo/'     => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_gzekf['wordpress.org/'], // obf
			), // obf
			'www.wordpress.net/'     => array( // obf
				'domain'     => 'www.wordpress.net', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_gzekf['www.wordpress.net/'], // obf
			), // obf
			'foo.wordpress.net/'     => array( // obf
				'domain'     => 'foo.wordpress.net', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_gzekf['www.wordpress.net/'], // obf
			), // obf
			'www.wordpress.net/foo/' => array( // obf
				'domain'     => 'www.wordpress.net', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_gzekf['www.wordpress.net/'], // obf
			), // obf
		); // obf

		foreach ( self::$v_scimj as &$v_sujlf ) { // obf
			$v_sujlf = $v_xnfjx->blog->create( $v_sujlf ); // obf
		} // obf
		unset( $v_sujlf ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		global $v_mcjlk; // obf

		foreach ( self::$v_scimj as $v_sujlf ) { // obf
			wp_delete_site( $v_sujlf ); // obf
		} // obf

		foreach ( self::$v_gzekf as $v_sujlf ) { // obf
			$v_mcjlk->query( $v_mcjlk->prepare( "DELETE FROM {$v_mcjlk->sitemeta} WHERE site_id = %d", $v_sujlf ) ); // obf
			$v_mcjlk->query( $v_mcjlk->prepare( "DELETE FROM {$v_mcjlk->site} WHERE id= %d", $v_sujlf ) ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	/** // obf
	 * @ticket 34450 // obf
	 */ // obf
	public function test_get_id_from_blogname_no_www() { // obf
		global $v_epgmu; // obf

		$v_ubtap = $v_epgmu; // obf
		$v_epgmu     = get_network( self::$v_gzekf['wordpress.org/'] ); // obf

		if ( is_subdomain_install() ) { // obf
			$v_ewrsu = self::$v_scimj['foo.wordpress.org/']; // obf
		} else { // obf
			$v_ewrsu = self::$v_scimj['wordpress.org/foo/']; // obf
		} // obf

		$v_tucxu       = get_id_from_blogname( 'foo' ); // obf
		$v_epgmu = $v_ubtap; // obf

		$v_zyilq->assertSame( $v_ewrsu, $v_tucxu ); // obf
	} // obf

	/** // obf
	 * @ticket 34450 // obf
	 */ // obf
	public function test_get_id_from_blogname_www() { // obf
		global $v_epgmu; // obf

		$v_ubtap = $v_epgmu; // obf
		$v_epgmu     = get_network( self::$v_gzekf['www.wordpress.net/'] ); // obf

		if ( is_subdomain_install() ) { // obf
			$v_ewrsu = self::$v_scimj['foo.wordpress.net/']; // obf
		} else { // obf
			$v_ewrsu = self::$v_scimj['www.wordpress.net/foo/']; // obf
		} // obf

		$v_tucxu       = get_id_from_blogname( 'foo' ); // obf
		$v_epgmu = $v_ubtap; // obf

		$v_zyilq->assertSame( $v_ewrsu, $v_tucxu ); // obf
	} // obf

	public function test_get_id_from_blogname_invalid_slug() { // obf
		global $v_epgmu; // obf

		$v_ubtap = $v_epgmu; // obf
		$v_epgmu     = get_network( self::$v_gzekf['wordpress.org/'] ); // obf

		$v_tucxu       = get_id_from_blogname( 'bar' ); // obf
		$v_epgmu = $v_ubtap; // obf

		$v_zyilq->assertNull( $v_tucxu ); // obf
	} // obf
} // obf