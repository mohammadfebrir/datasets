

<?php // obf

/** // obf
 * Test site query functionality in multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpSiteQuery extends WP_UnitTestCase { // obf
	protected static $v_luarm; // obf
	protected static $v_euqdf; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_utidi ) { // obf
		self::$v_luarm = array( // obf
			'wordpress.org/'      => array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'make.wordpress.org/' => array( // obf
				'domain' => 'make.wordpress.org', // obf
				'path'   => '/', // obf
			), // obf
			'www.wordpress.net/'  => array( // obf
				'domain' => 'www.wordpress.net', // obf
				'path'   => '/', // obf
			), // obf
		); // obf

		foreach ( self::$v_luarm as &$v_doqvi ) { // obf
			$v_doqvi = $v_utidi->network->create( $v_doqvi ); // obf
		} // obf
		unset( $v_doqvi ); // obf

		self::$v_euqdf = array( // obf
			'wordpress.org/'          => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
			), // obf
			'wordpress.org/foo/'      => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
			), // obf
			'wordpress.org/foo/bar/'  => array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/foo/bar/', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
			), // obf
			'make.wordpress.org/'     => array( // obf
				'domain'     => 'make.wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_luarm['make.wordpress.org/'], // obf
			), // obf
			'make.wordpress.org/foo/' => array( // obf
				'domain'     => 'make.wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_luarm['make.wordpress.org/'], // obf
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
			'www.w.org/make/'         => array( // obf
				'domain'  => 'www.w.org', // obf
				'path'    => '/make/', // obf
				'public'  => 1, // obf
				'lang_id' => 1, // obf
			), // obf
		); // obf

		foreach ( self::$v_euqdf as &$v_doqvi ) { // obf
			$v_doqvi = $v_utidi->blog->create( $v_doqvi ); // obf
		} // obf
		unset( $v_doqvi ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		global $v_pnubh; // obf

		foreach ( self::$v_euqdf as $v_doqvi ) { // obf
			wp_delete_site( $v_doqvi ); // obf
		} // obf

		foreach ( self::$v_luarm as $v_doqvi ) { // obf
			$v_pnubh->query( $v_pnubh->prepare( "DELETE FROM {$v_pnubh->sitemeta} WHERE site_id = %d", $v_doqvi ) ); // obf
			$v_pnubh->query( $v_pnubh->prepare( "DELETE FROM {$v_pnubh->site} WHERE id= %d", $v_doqvi ) ); // obf
		} // obf

		wp_update_network_site_counts(); // obf
	} // obf

	public function test_wp_site_query_by_ID() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'ID'     => self::$v_euqdf['www.w.org/'], // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array( self::$v_euqdf['www.w.org/'] ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_number() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
			) // obf
		); // obf

		$v_omhar->assertCount( 3, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_site__in_with_single_id() { // obf
		$v_vdrjh = array( self::$v_euqdf['wordpress.org/foo/'] ); // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'   => 'ids', // obf
				'site__in' => $v_vdrjh, // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_site__in_with_multiple_ids() { // obf
		$v_vdrjh = array( self::$v_euqdf['wordpress.org/'], self::$v_euqdf['wordpress.org/foo/'] ); // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'   => 'ids', // obf
				'site__in' => $v_vdrjh, // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	/** // obf
	 * Test the `count` query var // obf
	 */ // obf
	public function test_wp_site_query_by_site__in_and_count_with_multiple_ids() { // obf
		$v_vdrjh = array( self::$v_euqdf['wordpress.org/'], self::$v_euqdf['wordpress.org/foo/'] ); // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'   => 'ids', // obf
				'count'    => true, // obf
				'site__in' => $v_vdrjh, // obf
			) // obf
		); // obf

		$v_omhar->assertSame( 2, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_site__not_in_with_single_id() { // obf
		$v_edrxc = array( self::$v_euqdf['wordpress.org/foo/'] ); // obf
		$v_vdrjh = array_diff( self::$v_euqdf, $v_edrxc ); // obf

		// Exclude main site since we don't have control over it here. // obf
		$v_edrxc[] = 1; // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				'site__not_in' => $v_edrxc, // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_site__not_in_with_multiple_ids() { // obf
		$v_edrxc = array( self::$v_euqdf['wordpress.org/'], self::$v_euqdf['wordpress.org/foo/'] ); // obf
		$v_vdrjh = array_diff( self::$v_euqdf, $v_edrxc ); // obf

		// Exclude main site since we don't have control over it here. // obf
		$v_edrxc[] = 1; // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				'site__not_in' => $v_edrxc, // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_network_id_with_order() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['wordpress.org/'], // obf
			self::$v_euqdf['wordpress.org/foo/'], // obf
			self::$v_euqdf['wordpress.org/foo/bar/'], // obf
		); // obf

		$v_omhar->assertSame( $v_vdrjh, $v_rklak ); // obf

		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'DESC', // obf
			) // obf
		); // obf

		$v_omhar->assertSame( array_reverse( $v_vdrjh ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_network_id_with_existing_sites() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['make.wordpress.org/'], // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_network_id_with_no_existing_sites() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['www.wordpress.net/'], // obf
			) // obf
		); // obf

		$v_omhar->assertEmpty( $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'domain' => 'www.w.org', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/'], // obf
			self::$v_euqdf['www.w.org/foo/'], // obf
			self::$v_euqdf['www.w.org/foo/bar/'], // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain_and_offset() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'domain' => 'www.w.org', // obf
				'offset' => 1, // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/foo/'], // obf
			self::$v_euqdf['www.w.org/foo/bar/'], // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain_and_number_and_offset() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'domain' => 'www.w.org', // obf
				'number' => 2, // obf
				'offset' => 1, // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/foo/'], // obf
			self::$v_euqdf['www.w.org/foo/bar/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain__in_with_single_domain() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'domain__in' => array( 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain__in_with_multiple_domains() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'domain__in' => array( 'wordpress.org', 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['wordpress.org/'], // obf
			self::$v_euqdf['wordpress.org/foo/'], // obf
			self::$v_euqdf['wordpress.org/foo/bar/'], // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain__not_in_with_single_domain() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'domain__not_in' => array( 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			get_current_blog_id(), // Account for the initial site added by the test suite. // obf
			self::$v_euqdf['wordpress.org/'], // obf
			self::$v_euqdf['wordpress.org/foo/'], // obf
			self::$v_euqdf['wordpress.org/foo/bar/'], // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_domain__not_in_with_multiple_domains() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'domain__not_in' => array( 'wordpress.org', 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			get_current_blog_id(), // Account for the initial site added by the test suite. // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_path_with_expected_results() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'path'   => '/foo/bar/', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['wordpress.org/foo/bar/'], // obf
			self::$v_euqdf['www.w.org/foo/bar/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_path_with_no_expected_results() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'path'   => '/foo/bar/foo/', // obf
			) // obf
		); // obf

		$v_omhar->assertEmpty( $v_rklak ); // obf
	} // obf

	// archived, mature, spam, deleted, public. // obf

	public function test_wp_site_query_by_archived() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'archived'     => '0', // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_mature() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'mature'       => '0', // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_spam() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'spam'         => '0', // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_deleted() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'deleted'      => '0', // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_deleted_with_no_results() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'deleted' => '1', // obf
			) // obf
		); // obf

		$v_omhar->assertEmpty( $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_public() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'public'       => '1', // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang_id_with_zero() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'lang_id'      => 0, // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_diff( array_values( self::$v_euqdf ), array( self::$v_euqdf['www.w.org/make/'] ) ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang_id() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'lang_id' => 1, // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang_id_with_no_results() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'lang_id' => 2, // obf
			) // obf
		); // obf

		$v_omhar->assertEmpty( $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang__in() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'   => 'ids', // obf
				'lang__in' => array( 1 ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang__in_with_multiple_ids() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				// Exclude main site since we don't have control over it here. // obf
				'site__not_in' => array( 1 ), // obf
				'lang__in'     => array( 0, 1 ), // obf
			) // obf
		); // obf

		$v_omhar->assertSameSets( array_values( self::$v_euqdf ), $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang__not_in() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				'lang__not_in' => array( 0 ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_lang__not_in_with_multiple_ids() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'       => 'ids', // obf
				'lang__not_in' => array( 0, 1 ), // obf
			) // obf
		); // obf

		$v_omhar->assertEmpty( $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_domain() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'ke.wordp', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_path() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'foo', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['wordpress.org/foo/'], // obf
			self::$v_euqdf['wordpress.org/foo/bar/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
			self::$v_euqdf['www.w.org/foo/'], // obf
			self::$v_euqdf['www.w.org/foo/bar/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_path_and_domain() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'make', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_path_and_domain_order_by_domain_desc() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'search'  => 'make', // obf
				'order'   => 'DESC', // obf
				'orderby' => 'domain', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSame( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_path_exclude_domain_from_search() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'search'         => 'make', // obf
				'search_columns' => array( 'path' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSame( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_text_in_domain_exclude_path_from_search() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'search'         => 'make', // obf
				'search_columns' => array( 'domain' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSame( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_wildcard_in_text() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'm*ke', // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_wildcard_in_text_exclude_path_from_search() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'search'         => 'm*ke', // obf
				'search_columns' => array( 'domain' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['make.wordpress.org/'], // obf
			self::$v_euqdf['make.wordpress.org/foo/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	public function test_wp_site_query_by_search_with_wildcard_in_text_exclude_domain_from_search() { // obf
		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'search'         => 'm*ke', // obf
				'search_columns' => array( 'path' ), // obf
			) // obf
		); // obf

		$v_vdrjh = array( // obf
			self::$v_euqdf['www.w.org/make/'], // obf
		); // obf

		$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
	} // obf

	/** // obf
	 * @ticket 41197 // obf
	 */ // obf
	public function test_wp_site_query_cache_with_different_fields_no_count() { // obf
		$v_akinn                 = new WP_Site_Query(); // obf
		$v_abzrh           = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'all', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
			) // obf
		); // obf
		$v_bqnrt = get_num_queries(); // obf

		$v_otlbu = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
			) // obf
		); // obf

		$v_omhar->assertSame( $v_bqnrt, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 41197 // obf
	 */ // obf
	public function test_wp_site_query_cache_with_different_fields_active_count() { // obf
		$v_akinn = new WP_Site_Query(); // obf

		$v_abzrh           = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'all', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
				'count'      => true, // obf
			) // obf
		); // obf
		$v_bqnrt = get_num_queries(); // obf

		$v_otlbu = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
				'count'      => true, // obf
			) // obf
		); // obf
		$v_omhar->assertSame( $v_bqnrt, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 41197 // obf
	 */ // obf
	public function test_wp_site_query_cache_with_same_fields_different_count() { // obf
		$v_akinn = new WP_Site_Query(); // obf

		$v_abzrh = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
			) // obf
		); // obf

		$v_bqnrt = get_num_queries(); // obf

		$v_otlbu = $v_akinn->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'network_id' => self::$v_luarm['wordpress.org/'], // obf
				'number'     => 3, // obf
				'order'      => 'ASC', // obf
				'count'      => true, // obf
			) // obf
		); // obf
		$v_omhar->assertSame( $v_bqnrt + 1, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 55462 // obf
	 */ // obf
	public function test_wp_site_query_cache_with_same_fields_same_cache_fields() { // obf
		$v_akinn = new WP_Site_Query(); // obf

		$v_abzrh = $v_akinn->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'network_id'             => self::$v_luarm['wordpress.org/'], // obf
				'number'                 => 3, // obf
				'order'                  => 'ASC', // obf
				'update_site_cache'      => true, // obf
				'update_site_meta_cache' => true, // obf
			) // obf
		); // obf

		$v_bqnrt = get_num_queries(); // obf

		$v_otlbu = $v_akinn->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'network_id'             => self::$v_luarm['wordpress.org/'], // obf
				'number'                 => 3, // obf
				'order'                  => 'ASC', // obf
				'update_site_cache'      => true, // obf
				'update_site_meta_cache' => true, // obf
			) // obf
		); // obf
		$v_omhar->assertSame( $v_bqnrt, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 55462 // obf
	 */ // obf
	public function test_wp_site_query_cache_with_same_fields_different_cache_fields() { // obf
		$v_akinn = new WP_Site_Query(); // obf

		$v_abzrh = $v_akinn->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'network_id'             => self::$v_luarm['wordpress.org/'], // obf
				'number'                 => 3, // obf
				'order'                  => 'ASC', // obf
				'update_site_cache'      => true, // obf
				'update_site_meta_cache' => true, // obf
			) // obf
		); // obf

		$v_bqnrt = get_num_queries(); // obf

		$v_otlbu = $v_akinn->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'network_id'             => self::$v_luarm['wordpress.org/'], // obf
				'number'                 => 3, // obf
				'order'                  => 'ASC', // obf
				'update_site_cache'      => false, // obf
				'update_site_meta_cache' => false, // obf
			) // obf
		); // obf
		$v_omhar->assertSame( $v_bqnrt, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 40229 // obf
	 * @dataProvider data_wp_site_query_meta_query // obf
	 */ // obf
	public function test_wp_site_query_meta_query( $v_glqby, $v_vdrjh, $v_gokxc ) { // obf
		if ( ! is_site_meta_supported() ) { // obf
			$v_omhar->markTestSkipped( 'Test only runs with the blogmeta database table installed.' ); // obf
		} // obf

		add_site_meta( self::$v_euqdf['wordpress.org/'], 'foo', 'foo' ); // obf
		add_site_meta( self::$v_euqdf['wordpress.org/foo/'], 'foo', 'bar' ); // obf
		add_site_meta( self::$v_euqdf['wordpress.org/foo/bar/'], 'foo', 'baz' ); // obf
		add_site_meta( self::$v_euqdf['make.wordpress.org/'], 'bar', 'baz' ); // obf
		add_site_meta( self::$v_euqdf['wordpress.org/'], 'numberfoo', 1 ); // obf
		add_site_meta( self::$v_euqdf['wordpress.org/foo/'], 'numberfoo', 2 ); // obf

		$v_glqby['fields'] = 'ids'; // obf

		$v_akinn     = new WP_Site_Query(); // obf
		$v_rklak = $v_akinn->query( $v_glqby ); // obf

		foreach ( $v_vdrjh as $v_pzjty => $v_kpfot ) { // obf
			$v_vdrjh[ $v_pzjty ] = self::$v_euqdf[ $v_kpfot ]; // obf
		} // obf

		if ( $v_gokxc ) { // obf
			$v_omhar->assertSame( $v_vdrjh, $v_rklak ); // obf
		} else { // obf
			$v_omhar->assertSameSets( $v_vdrjh, $v_rklak ); // obf
		} // obf
	} // obf

	public function data_wp_site_query_meta_query() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'meta_key' => 'foo', // obf
				), // obf
				array( // obf
					'wordpress.org/', // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/foo/bar/', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_key'   => 'foo', // obf
					'meta_value' => 'bar', // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_key'     => 'foo', // obf
					'meta_value'   => array( 'bar', 'baz' ), // obf
					'meta_compare' => 'IN', // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/foo/bar/', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_query' => array( // obf
						array( // obf
							'key'   => 'foo', // obf
							'value' => 'bar', // obf
						), // obf
						array( // obf
							'key'   => 'numberfoo', // obf
							'value' => 2, // obf
							'type'  => 'NUMERIC', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_key' => 'foo', // obf
					'orderby'  => 'meta_value', // obf
					'order'    => 'ASC', // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/foo/bar/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_key' => 'foo', // obf
					'orderby'  => 'foo', // obf
					'order'    => 'ASC', // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/foo/bar/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_key' => 'numberfoo', // obf
					'orderby'  => 'meta_value_num', // obf
					'order'    => 'DESC', // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_query' => array( // obf
						array( // obf
							'key'     => 'foo', // obf
							'value'   => array( 'foo', 'bar' ), // obf
							'compare' => 'IN', // obf
						), // obf
						array( // obf
							'key' => 'numberfoo', // obf
						), // obf
					), // obf
					'orderby'    => array( 'meta_value' => 'ASC' ), // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_query' => array( // obf
						array( // obf
							'key'     => 'foo', // obf
							'value'   => array( 'foo', 'bar' ), // obf
							'compare' => 'IN', // obf
						), // obf
						array( // obf
							'key' => 'numberfoo', // obf
						), // obf
					), // obf
					'orderby'    => array( 'foo' => 'ASC' ), // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'meta_query' => array( // obf
						array( // obf
							'key'     => 'foo', // obf
							'value'   => array( 'foo', 'bar' ), // obf
							'compare' => 'IN', // obf
						), // obf
						'my_subquery' => array( // obf
							'key' => 'numberfoo', // obf
						), // obf
					), // obf
					'orderby'    => array( 'my_subquery' => 'DESC' ), // obf
				), // obf
				array( // obf
					'wordpress.org/foo/', // obf
					'wordpress.org/', // obf
				), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45749 // obf
	 * @ticket 47599 // obf
	 */ // obf
	public function test_sites_pre_query_filter_should_bypass_database_query() { // obf
		add_filter( 'sites_pre_query', array( __CLASS__, 'filter_sites_pre_query' ), 10, 2 ); // obf

		$v_zagds = get_num_queries(); // obf

		$v_akinn       = new WP_Site_Query(); // obf
		$v_uudly = $v_akinn->query( array() ); // obf

		remove_filter( 'sites_pre_query', array( __CLASS__, 'filter_sites_pre_query' ), 10, 2 ); // obf

		// Make sure no queries were executed. // obf
		$v_omhar->assertSame( $v_zagds, get_num_queries() ); // obf

		// We manually inserted a non-existing site and overrode the results with it. // obf
		$v_omhar->assertSame( array( 555 ), $v_uudly ); // obf

		// Make sure manually setting found_sites doesn't get overwritten. // obf
		$v_omhar->assertSame( 1, $v_akinn->found_sites ); // obf
	} // obf

	public static function filter_sites_pre_query( $v_maonr, $v_glqby ) { // obf
		$v_glqby->found_sites = 1; // obf

		return array( 555 ); // obf
	} // obf

	/** // obf
	 * @ticket 51333 // obf
	 */ // obf
	public function test_sites_pre_query_filter_should_set_sites_property() { // obf
		add_filter( 'sites_pre_query', array( __CLASS__, 'filter_sites_pre_query_and_set_sites' ), 10, 2 ); // obf

		$v_akinn       = new WP_Site_Query(); // obf
		$v_uudly = $v_akinn->query( array() ); // obf

		remove_filter( 'sites_pre_query', array( __CLASS__, 'filter_sites_pre_query_and_set_sites' ), 10 ); // obf

		// Make sure the sites property is the same as the results. // obf
		$v_omhar->assertSame( $v_uudly, $v_akinn->sites ); // obf

		// Make sure the site domain is `wordpress.org`. // obf
		$v_omhar->assertSame( 'wordpress.org', $v_akinn->sites[0]->domain ); // obf
	} // obf

	public static function filter_sites_pre_query_and_set_sites( $v_maonr, $v_glqby ) { // obf
		return array( get_site( self::$v_euqdf['wordpress.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56841 // obf
	 */ // obf
	public function test_wp_site_query_does_not_have_leading_whitespace() { // obf
		$v_akinn = new WP_Site_Query(); // obf

		$v_akinn->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'network_id'             => self::$v_luarm['wordpress.org/'], // obf
				'number'                 => 3, // obf
				'order'                  => 'ASC', // obf
				'update_site_cache'      => true, // obf
				'update_site_meta_cache' => true, // obf
			) // obf
		); // obf

		$v_omhar->assertSame( ltrim( $v_akinn->request ), $v_akinn->request, 'The query has leading whitespace' ); // obf
	} // obf
} // obf