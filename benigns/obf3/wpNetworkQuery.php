

<?php // obf

/** // obf
 * Test network query functionality in multisite. // obf
 * // obf
 * @group ms-network // obf
 * @group ms-network-query // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpNetworkQuery extends WP_UnitTestCase { // obf
	protected static $v_wcnpx; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kbzhx ) { // obf
		self::$v_wcnpx = array( // obf
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
			'www.w.org/foo/'      => array( // obf
				'domain' => 'www.w.org', // obf
				'path'   => '/foo/', // obf
			), // obf
		); // obf

		foreach ( self::$v_wcnpx as &$v_glgpq ) { // obf
			$v_glgpq = $v_kbzhx->network->create( $v_glgpq ); // obf
		} // obf
		unset( $v_glgpq ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		global $v_jgwwg; // obf

		foreach ( self::$v_wcnpx as $v_glgpq ) { // obf
			$v_jgwwg->query( $v_jgwwg->prepare( "DELETE FROM {$v_jgwwg->sitemeta} WHERE site_id = %d", $v_glgpq ) ); // obf
			$v_jgwwg->query( $v_jgwwg->prepare( "DELETE FROM {$v_jgwwg->site} WHERE id= %d", $v_glgpq ) ); // obf
		} // obf
	} // obf

	public function test_wp_network_query_by_number() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
			) // obf
		); // obf

		$v_pbaxv->assertCount( 3, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__in_with_order() { // obf
		$v_rxibt = array( self::$v_wcnpx['wordpress.org/'], self::$v_wcnpx['make.wordpress.org/'] ); // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'network__in' => $v_rxibt, // obf
				'order'       => 'ASC', // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( $v_rxibt, $v_yhdyf ); // obf

		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'network__in' => $v_rxibt, // obf
				'order'       => 'DESC', // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( array_reverse( $v_rxibt ), $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__in_with_single_id() { // obf
		$v_rxibt = array( self::$v_wcnpx['wordpress.org/'] ); // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'network__in' => $v_rxibt, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__in_with_multiple_ids() { // obf
		$v_rxibt = array( self::$v_wcnpx['wordpress.org/'], self::$v_wcnpx['www.wordpress.net/'] ); // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'network__in' => $v_rxibt, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__in_and_count_with_multiple_ids() { // obf
		$v_rxibt = array( self::$v_wcnpx['wordpress.org/'], self::$v_wcnpx['make.wordpress.org/'] ); // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'count'       => true, // obf
				'network__in' => $v_rxibt, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( 2, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__not_in_with_single_id() { // obf
		$v_pyrzw = array( self::$v_wcnpx['wordpress.org/'] ); // obf
		$v_rxibt = array_diff( self::$v_wcnpx, $v_pyrzw ); // obf

		// Exclude main network since we don't have control over it here. // obf
		$v_pyrzw[] = 1; // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'          => 'ids', // obf
				'network__not_in' => $v_pyrzw, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_network__not_in_with_multiple_ids() { // obf
		$v_pyrzw = array( self::$v_wcnpx['wordpress.org/'], self::$v_wcnpx['www.w.org/foo/'] ); // obf
		$v_rxibt = array_diff( self::$v_wcnpx, $v_pyrzw ); // obf

		// Exclude main network since we don't have control over it here. // obf
		$v_pyrzw[] = 1; // obf

		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'          => 'ids', // obf
				'network__not_in' => $v_pyrzw, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'domain' => 'www.w.org', // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['www.w.org/foo/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__in_with_single_domain() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'domain__in' => array( 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__in_with_multiple_domains() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'domain__in' => array( 'wordpress.org', 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['wordpress.org/'], // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__in_with_multiple_domains_and_number() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'number'     => 1, // obf
				'domain__in' => array( 'wordpress.org', 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__in_with_multiple_domains_and_number_and_offset() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'number'     => 1, // obf
				'offset'     => 1, // obf
				'domain__in' => array( 'wordpress.org', 'make.wordpress.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__not_in_with_single_domain() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'domain__not_in' => array( 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			get_current_site()->id, // Account for the initial network added by the test suite. // obf
			self::$v_wcnpx['wordpress.org/'], // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__not_in_with_multiple_domains() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'domain__not_in' => array( 'wordpress.org', 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			get_current_site()->id, // Account for the initial network added by the test suite. // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__not_in_with_multiple_domains_and_number() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'number'         => 2, // obf
				'domain__not_in' => array( 'wordpress.org', 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			get_current_site()->id, // Account for the initial network added by the test suite. // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_domain__not_in_with_multiple_domains_and_number_and_offset() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'number'         => 2, // obf
				'offset'         => 1, // obf
				'domain__not_in' => array( 'wordpress.org', 'www.w.org' ), // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_path_with_expected_results() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'          => 'ids', // obf
				'path'            => '/', // obf
				'network__not_in' => get_current_site()->id, // Exclude the initial network added by the test suite. // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['wordpress.org/'], // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_path_and_number_and_offset_with_expected_results() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'          => 'ids', // obf
				'number'          => 1, // obf
				'offset'          => 2, // obf
				'path'            => '/', // obf
				'network__not_in' => get_current_site()->id, // Exclude the initial network added by the test suite. // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_path_with_no_expected_results() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'path'   => '/bar/', // obf
			) // obf
		); // obf

		$v_pbaxv->assertEmpty( $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_search_with_text_in_domain() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'ww.word', // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_search_with_text_in_path() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'search' => 'foo', // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['www.w.org/foo/'], // obf
		); // obf

		$v_pbaxv->assertSameSets( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	public function test_wp_network_query_by_path_order_by_domain_desc() { // obf
		$v_flcgh     = new WP_Network_Query(); // obf
		$v_yhdyf = $v_flcgh->query( // obf
			array( // obf
				'fields'          => 'ids', // obf
				'path'            => '/', // obf
				'network__not_in' => get_current_site()->id, // Exclude the initial network added by the test suite. // obf
				'order'           => 'DESC', // obf
				'orderby'         => 'domain', // obf
			) // obf
		); // obf

		$v_rxibt = array( // obf
			self::$v_wcnpx['www.wordpress.net/'], // obf
			self::$v_wcnpx['wordpress.org/'], // obf
			self::$v_wcnpx['make.wordpress.org/'], // obf
		); // obf

		$v_pbaxv->assertSame( $v_rxibt, $v_yhdyf ); // obf
	} // obf

	/** // obf
	 * @ticket 41347 // obf
	 */ // obf
	public function test_wp_network_query_cache_with_different_fields_no_count() { // obf
		$v_flcgh                 = new WP_Network_Query(); // obf
		$v_xtwny           = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'all', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
			) // obf
		); // obf
		$v_clfeb = get_num_queries(); // obf

		$v_uwzcc = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( $v_clfeb, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 41347 // obf
	 */ // obf
	public function test_wp_network_query_cache_with_different_fields_active_count() { // obf
		$v_flcgh = new WP_Network_Query(); // obf

		$v_xtwny           = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'all', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
				'count'  => true, // obf
			) // obf
		); // obf
		$v_clfeb = get_num_queries(); // obf

		$v_uwzcc = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
				'count'  => true, // obf
			) // obf
		); // obf
		$v_pbaxv->assertSame( $v_clfeb, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 41347 // obf
	 */ // obf
	public function test_wp_network_query_cache_with_same_fields_different_count() { // obf
		$v_flcgh = new WP_Network_Query(); // obf

		$v_xtwny = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
			) // obf
		); // obf

		$v_clfeb = get_num_queries(); // obf

		$v_uwzcc = $v_flcgh->query( // obf
			array( // obf
				'fields' => 'ids', // obf
				'number' => 3, // obf
				'order'  => 'ASC', // obf
				'count'  => true, // obf
			) // obf
		); // obf
		$v_pbaxv->assertSame( $v_clfeb + 1, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 55461 // obf
	 */ // obf
	public function test_wp_network_query_cache_with_same_fields_same_cache_field() { // obf
		$v_flcgh                 = new WP_Network_Query(); // obf
		$v_xtwny           = $v_flcgh->query( // obf
			array( // obf
				'fields'               => 'all', // obf
				'number'               => 3, // obf
				'order'                => 'ASC', // obf
				'update_network_cache' => true, // obf
			) // obf
		); // obf
		$v_clfeb = get_num_queries(); // obf

		$v_uwzcc = $v_flcgh->query( // obf
			array( // obf
				'fields'               => 'all', // obf
				'number'               => 3, // obf
				'order'                => 'ASC', // obf
				'update_network_cache' => true, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( $v_clfeb, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 55461 // obf
	 */ // obf
	public function test_wp_network_query_cache_with_same_fields_different_cache_field() { // obf
		$v_flcgh                 = new WP_Network_Query(); // obf
		$v_xtwny           = $v_flcgh->query( // obf
			array( // obf
				'fields'               => 'all', // obf
				'number'               => 3, // obf
				'order'                => 'ASC', // obf
				'update_network_cache' => true, // obf
			) // obf
		); // obf
		$v_clfeb = get_num_queries(); // obf

		$v_uwzcc = $v_flcgh->query( // obf
			array( // obf
				'fields'               => 'all', // obf
				'number'               => 3, // obf
				'order'                => 'ASC', // obf
				'update_network_cache' => false, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( $v_clfeb, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 45749 // obf
	 * @ticket 47599 // obf
	 */ // obf
	public function test_networks_pre_query_filter_should_bypass_database_query() { // obf
		add_filter( 'networks_pre_query', array( __CLASS__, 'filter_networks_pre_query' ), 10, 2 ); // obf

		$v_urhqr = get_num_queries(); // obf

		$v_flcgh       = new WP_Network_Query(); // obf
		$v_anidw = $v_flcgh->query( array() ); // obf

		remove_filter( 'networks_pre_query', array( __CLASS__, 'filter_networks_pre_query' ), 10, 2 ); // obf

		// Make sure no queries were executed. // obf
		$v_pbaxv->assertSame( $v_urhqr, get_num_queries() ); // obf

		// We manually inserted a non-existing site and overrode the results with it. // obf
		$v_pbaxv->assertSame( array( 555 ), $v_anidw ); // obf

		// Make sure manually setting found_networks doesn't get overwritten. // obf
		$v_pbaxv->assertSame( 1, $v_flcgh->found_networks ); // obf
	} // obf

	public static function filter_networks_pre_query( $v_ndsec, $v_rdxmf ) { // obf
		$v_rdxmf->found_networks = 1; // obf

		return array( 555 ); // obf
	} // obf

	/** // obf
	 * @ticket 51333 // obf
	 */ // obf
	public function test_networks_pre_query_filter_should_set_networks_property() { // obf
		add_filter( 'networks_pre_query', array( __CLASS__, 'filter_networks_pre_query_and_set_networks' ), 10, 2 ); // obf

		$v_flcgh       = new WP_Network_Query(); // obf
		$v_anidw = $v_flcgh->query( array() ); // obf

		remove_filter( 'networks_pre_query', array( __CLASS__, 'filter_networks_pre_query_and_set_networks' ), 10 ); // obf

		// Make sure the networks property is the same as the results. // obf
		$v_pbaxv->assertSame( $v_anidw, $v_flcgh->networks ); // obf

		// Make sure the network domain is `wordpress.org`. // obf
		$v_pbaxv->assertSame( 'wordpress.org', $v_flcgh->networks[0]->domain ); // obf
	} // obf

	public static function filter_networks_pre_query_and_set_networks( $v_ndsec, $v_rdxmf ) { // obf
		return array( get_network( self::$v_wcnpx['wordpress.org/'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56841 // obf
	 */ // obf
	public function test_wp_network_query_does_not_have_leading_whitespace() { // obf
		$v_flcgh = new WP_Network_Query(); // obf
		$v_flcgh->query( // obf
			array( // obf
				'fields'               => 'all', // obf
				'number'               => 3, // obf
				'order'                => 'ASC', // obf
				'update_network_cache' => true, // obf
			) // obf
		); // obf

		$v_pbaxv->assertSame( ltrim( $v_flcgh->request ), $v_flcgh->request, 'The query has leading whitespace' ); // obf
	} // obf
} // obf