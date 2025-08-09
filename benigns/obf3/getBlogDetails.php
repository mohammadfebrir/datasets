

<?php // obf

/** // obf
 * @ticket 29845 // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_GetBlogDetails extends WP_UnitTestCase { // obf

	protected static $v_jhzlk; // obf
	protected static $v_blwcr; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_pvlly ) { // obf
		self::$v_blwcr = array( // obf
			WP_TESTS_DOMAIN . '/foo/'      => array( // obf
				'domain' => WP_TESTS_DOMAIN, // obf
				'path'   => '/foo/', // obf
			), // obf
			'foo.' . WP_TESTS_DOMAIN . '/' => array( // obf
				'domain' => 'foo.' . WP_TESTS_DOMAIN, // obf
				'path'   => '/', // obf
			), // obf
			'wordpress.org/'               => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
		); // obf

		foreach ( self::$v_blwcr as &$v_ffzsh ) { // obf
			$v_ffzsh = $v_pvlly->blog->create( $v_ffzsh ); // obf
		} // obf
		unset( $v_ffzsh ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_blwcr as $v_ffzsh ) { // obf
			wp_delete_site( $v_ffzsh ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	public function test_get_blog_details_with_no_arguments_returns_current_site() { // obf
		$v_liqut = get_blog_details(); // obf
		$v_rrqes->assertEquals( get_current_blog_id(), $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_site_name_string_subdirectory() { // obf
		if ( is_subdomain_install() ) { // obf
			$v_rrqes->markTestSkipped( 'This test is only valid in a subdirectory configuration.' ); // obf
		} // obf

		$v_liqut = get_blog_details( 'foo' ); // obf
		$v_rrqes->assertEquals( self::$v_blwcr[ WP_TESTS_DOMAIN . '/foo/' ], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_site_name_string_subdomain() { // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_rrqes->markTestSkipped( 'This test is only valid in a subdomain configuration.' ); // obf
		} // obf

		$v_liqut = get_blog_details( 'foo' ); // obf
		$v_rrqes->assertEquals( self::$v_blwcr[ 'foo.' . WP_TESTS_DOMAIN . '/' ], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_invalid_site_name_string() { // obf
		$v_liqut = get_blog_details( 'invalid' ); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_site_id_int() { // obf
		$v_liqut = get_blog_details( self::$v_blwcr['wordpress.org/'] ); // obf
		$v_rrqes->assertEquals( self::$v_blwcr['wordpress.org/'], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_invalid_site_id_int() { // obf
		$v_liqut = get_blog_details( 99999 ); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_blog_id_in_fields() { // obf
		$v_liqut = get_blog_details( array( 'blog_id' => self::$v_blwcr['wordpress.org/'] ) ); // obf
		$v_rrqes->assertEquals( self::$v_blwcr['wordpress.org/'], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_invalid_blog_id_in_fields() { // obf
		$v_liqut = get_blog_details( array( 'blog_id' => 88888 ) ); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_domain_and_path_in_fields() { // obf
		$v_liqut = get_blog_details( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf
		$v_rrqes->assertEquals( self::$v_blwcr['wordpress.org/'], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_domain_and_invalid_path_in_fields() { // obf
		$v_liqut = get_blog_details( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/zxy/', // obf
			) // obf
		); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_path_and_invalid_domain_in_fields() { // obf
		$v_liqut = get_blog_details( // obf
			array( // obf
				'domain' => 'invalid.org', // obf
				'path'   => '/foo/', // obf
			) // obf
		); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_only_domain_in_fields_subdomain() { // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_rrqes->markTestSkipped( 'This test is only valid in a subdomain configuration.' ); // obf
		} // obf

		$v_liqut = get_blog_details( array( 'domain' => 'wordpress.org' ) ); // obf
		$v_rrqes->assertSame( self::$v_blwcr['wordpress.org/'], $v_liqut->blog_id ); // obf
	} // obf

	public function test_get_blog_details_with_only_domain_in_fields_subdirectory() { // obf
		if ( is_subdomain_install() ) { // obf
			$v_rrqes->markTestSkipped( 'This test is only valid in a subdirectory configuration.' ); // obf
		} // obf

		$v_liqut = get_blog_details( array( 'domain' => 'wordpress.org' ) ); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	public function test_get_blog_details_with_only_path_in_fields() { // obf
		$v_liqut = get_blog_details( array( 'path' => '/foo/' ) ); // obf
		$v_rrqes->assertFalse( $v_liqut ); // obf
	} // obf

	/** // obf
	 * @ticket 50391 // obf
	 */ // obf
	public function test_get_blog_details_does_not_switch_to_current_blog() { // obf
		$v_llwbp = did_action( 'switch_blog' ); // obf

		get_blog_details(); // obf
		$v_rrqes->assertSame( $v_llwbp, did_action( 'switch_blog' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_all // obf
	 * // obf
	 * @ticket 40228 // obf
	 */ // obf
	public function test_get_blog_details_get_object_vars( $v_agebq ) { // obf
		$v_liqut = get_blog_details( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			$v_agebq // obf
		); // obf

		$v_wcgqr = array_keys( get_object_vars( $v_liqut ) ); // obf

		$v_rrqes->assertSameSets( $v_rrqes->get_fields( $v_agebq ), $v_wcgqr ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_all // obf
	 * // obf
	 * @ticket 40228 // obf
	 */ // obf
	public function test_get_blog_details_iterate_over_result( $v_agebq ) { // obf
		$v_liqut = get_blog_details( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			$v_agebq // obf
		); // obf

		$v_wcgqr = array(); // obf
		foreach ( $v_liqut as $v_dwulb => $v_oexdl ) { // obf
			$v_wcgqr[] = $v_dwulb; // obf
		} // obf

		$v_rrqes->assertSameSets( $v_rrqes->get_fields( $v_agebq ), $v_wcgqr ); // obf
	} // obf

	public function data_get_all() { // obf
		return array( // obf
			array( false ), // obf
			array( true ), // obf
		); // obf
	} // obf

	protected function get_fields( $v_rsyge = false ) { // obf
		$v_zmryt = array( // obf
			'blog_id', // obf
			'domain', // obf
			'path', // obf
			'site_id', // obf
			'registered', // obf
			'last_updated', // obf
			'public', // obf
			'archived', // obf
			'mature', // obf
			'spam', // obf
			'deleted', // obf
			'lang_id', // obf
		); // obf

		if ( $v_rsyge ) { // obf
			$v_zmryt = array_merge( // obf
				$v_zmryt, // obf
				array( // obf
					'blogname', // obf
					'siteurl', // obf
					'post_count', // obf
					'home', // obf
				) // obf
			); // obf
		} // obf

		return $v_zmryt; // obf
	} // obf
} // obf