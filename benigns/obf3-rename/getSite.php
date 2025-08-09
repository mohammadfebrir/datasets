

<?php // obf

/** // obf
 * Test get_site() wrapper of WP_Site in multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_GetSite extends WP_UnitTestCase { // obf

	protected static $v_slfja; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vloqe ) { // obf
		self::$v_slfja = array( // obf
			'wordpress.org/'         => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'wordpress.org/foo/'     => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/foo/', // obf
			), // obf
			'wordpress.org/foo/bar/' => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/foo/bar/', // obf
			), // obf
		); // obf

		foreach ( self::$v_slfja as &$v_edpcl ) { // obf
			$v_edpcl = $v_vloqe->blog->create( $v_edpcl ); // obf
		} // obf
		unset( $v_edpcl ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_slfja as $v_edpcl ) { // obf
			wp_delete_site( $v_edpcl ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	public function test_get_site_in_switched_state_returns_switched_site() { // obf
		switch_to_blog( self::$v_slfja['wordpress.org/foo/'] ); // obf
		$v_zqped = get_site(); // obf
		restore_current_blog(); // obf

		$v_yeuyx->assertSame( self::$v_slfja['wordpress.org/foo/'], $v_zqped->id ); // obf
	} // obf
} // obf