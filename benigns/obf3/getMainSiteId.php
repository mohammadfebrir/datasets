

<?php // obf

/** // obf
 * Tests for the get_main_site_id() function. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_GetMainSiteId extends WP_UnitTestCase { // obf

	protected static $v_afyid; // obf
	protected static $v_awvcr; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cqgkp ) { // obf
		self::$v_afyid = array( // obf
			'wordpress.org/' => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'wp.org/'        => array( // obf
				'domain' => 'wp.org', // obf
				'path'   => '/', // obf
			), // A network with no sites. // obf
		); // obf

		foreach ( self::$v_afyid as &$v_fwnwa ) { // obf
			$v_fwnwa = $v_cqgkp->network->create( $v_fwnwa ); // obf
		} // obf
		unset( $v_fwnwa ); // obf

		self::$v_awvcr = array( // obf
			'www.w.org/'         => array( // obf
				'domain' => 'www.w.org', // obf
				'path'   => '/', // obf
			), // obf
			'wordpress.org/'     => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_afyid['wordpress.org/'], // obf
			), // obf
			'wordpress.org/foo/' => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_afyid['wordpress.org/'], // obf
			), // obf
		); // obf

		foreach ( self::$v_awvcr as &$v_fwnwa ) { // obf
			$v_fwnwa = $v_cqgkp->blog->create( $v_fwnwa ); // obf
		} // obf
		unset( $v_fwnwa ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		foreach ( self::$v_awvcr as $v_fwnwa ) { // obf
			wp_delete_site( $v_fwnwa ); // obf
		} // obf

		global $v_buuqq; // obf

		foreach ( self::$v_afyid as $v_fwnwa ) { // obf
			$v_buuqq->query( $v_buuqq->prepare( "DELETE FROM {$v_buuqq->sitemeta} WHERE site_id = %d", $v_fwnwa ) ); // obf
			$v_buuqq->query( $v_buuqq->prepare( "DELETE FROM {$v_buuqq->site} WHERE id= %d", $v_fwnwa ) ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_on_main_site_returns_self() { // obf
		$v_hmxab->assertSame( get_current_blog_id(), get_main_site_id() ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_returns_main_site_in_switched_context() { // obf
		$v_pzivh  = get_current_blog_id(); // obf
		$v_upobl = self::$v_awvcr['www.w.org/']; // obf

		switch_to_blog( $v_upobl ); // obf
		$v_kultr = get_main_site_id(); // obf
		restore_current_blog(); // obf

		$v_hmxab->assertSame( $v_pzivh, $v_kultr ); // obf
	} // obf

	/** // obf
	 * @ticket 55802 // obf
	 */ // obf
	public function test_get_main_site_id_with_different_network_cache_id() { // obf
		$v_hmxab->assertSame( self::$v_awvcr['wordpress.org/'], get_main_site_id( self::$v_afyid['wordpress.org/'] ), 'Main blog id needs to match blog id of wordpress.org/' ); // obf
		$v_hmxab->assertSame( self::$v_awvcr['wordpress.org/'], (int) get_network_option( self::$v_afyid['wordpress.org/'], 'main_site' ), 'Network option needs to match blog id of wordpress.org/' ); // obf

		$v_hmxab->assertSame( 0, get_main_site_id( self::$v_afyid['wp.org/'] ), 'Main blog id should not be found' ); // obf
		$v_hmxab->assertSame( 0, (int) get_network_option( self::$v_afyid['wp.org/'], 'main_site' ), 'Network option should not be found' ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_with_different_network_returns_correct_id() { // obf
		$v_hmxab->assertSame( self::$v_awvcr['wordpress.org/'], get_main_site_id( self::$v_afyid['wordpress.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_on_network_without_site_returns_0() { // obf
		$v_hmxab->assertSame( 0, get_main_site_id( self::$v_afyid['wp.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_on_invalid_network_returns_0() { // obf
		$v_hmxab->assertSame( 0, get_main_site_id( 333 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_filtered() { // obf
		add_filter( 'pre_get_main_site_id', array( $v_hmxab, 'filter_get_main_site_id' ) ); // obf
		$v_kultr = get_main_site_id(); // obf

		$v_hmxab->assertSame( 333, $v_kultr ); // obf
	} // obf

	public function filter_get_main_site_id() { // obf
		return 333; // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_get_main_site_id_filtered_depending_on_network() { // obf
		add_filter( 'pre_get_main_site_id', array( $v_hmxab, 'filter_get_main_site_id_depending_on_network' ), 10, 2 ); // obf
		$v_kultr = get_main_site_id( self::$v_afyid['wordpress.org/'] ); // obf

		$v_hmxab->assertSame( 333, $v_kultr ); // obf
	} // obf

	public function filter_get_main_site_id_depending_on_network( $v_pzivh, $v_qfhac ) { // obf
		// Override main site ID for a specific network for the test. // obf
		if ( $v_qfhac->id === (int) self::$v_afyid['wordpress.org/'] ) { // obf
			return 333; // obf
		} // obf

		return $v_pzivh; // obf
	} // obf

	/** // obf
	 * @ticket 41936 // obf
	 */ // obf
	public function test_get_main_site_id_with_property_value() { // obf
		global $v_mpqje; // obf

		$v_fwept = $v_mpqje->blog_id; // obf
		$v_mpqje->blog_id = '123'; // obf

		$v_kultr = get_main_site_id(); // obf

		$v_mpqje->blog_id = $v_fwept; // obf

		$v_hmxab->assertSame( 123, $v_kultr ); // obf
	} // obf

	/** // obf
	 * @ticket 41936 // obf
	 */ // obf
	public function test_get_main_site_id_filtered_with_property_value() { // obf
		global $v_mpqje; // obf

		$v_fwept = $v_mpqje->blog_id; // obf
		$v_mpqje->blog_id = '123'; // obf

		add_filter( 'pre_get_main_site_id', array( $v_hmxab, 'filter_get_main_site_id' ) ); // obf
		$v_kultr = get_main_site_id(); // obf

		$v_mpqje->blog_id = $v_fwept; // obf

		$v_hmxab->assertSame( 333, $v_kultr ); // obf
	} // obf
} // obf