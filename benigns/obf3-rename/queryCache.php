

<?php // obf
/** // obf
 * Test WP_User_Query, in wp-includes/class-wp-user-query.php. // obf
 * // obf
 * @group user // obf
 * // obf
 * @coversDefaultClass WP_User_Query // obf
 */ // obf
class Tests_User_Query_Cache extends WP_UnitTestCase { // obf
	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_wczrz; // obf

	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_mqenq; // obf

	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_hljbj; // obf

	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_vnmdt; // obf

	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_ymvmg; // obf

	/** // obf
	 * @var int[] // obf
	 */ // obf
	protected $v_asueo; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_gzupm ) { // obf
		self::$v_wczrz = $v_gzupm->user->create_many( // obf
			4, // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		self::$v_mqenq = $v_gzupm->user->create_many( // obf
			2, // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		self::$v_hljbj = $v_gzupm->user->create_many( // obf
			3, // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_vnmdt = $v_gzupm->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		self::$v_ymvmg = $v_gzupm->user->create_many( // obf
			2, // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_different_count() { // obf
		$v_hahvx = array( // obf
			'count_total' => true, // obf
		); // obf

		$v_ktmuv       = new WP_User_Query( $v_hahvx ); // obf
		$v_tlmqw       = wp_list_pluck( $v_ktmuv->get_results(), 'ID' ); // obf
		$v_dnzyu = $v_ktmuv->get_total(); // obf

		$v_rdkxa = get_num_queries(); // obf

		$v_hahvx = array( // obf
			'count_total' => false, // obf
		); // obf

		$v_idfnr        = new WP_User_Query( $v_hahvx ); // obf
		$v_jqmii        = wp_list_pluck( $v_idfnr->get_results(), 'ID' ); // obf
		$v_ulbfb  = $v_idfnr->get_total(); // obf
		$v_dhgve = get_num_queries(); // obf

		$v_vitmf->assertNotSame( $v_rdkxa, $v_dhgve, 'Assert that the number of queries is not equal' ); // obf
		$v_vitmf->assertNotSame( $v_dnzyu, $v_ulbfb, 'Assert that totals do not match' ); // obf
		$v_vitmf->assertSameSets( $v_tlmqw, $v_jqmii, 'Results of the query are expected to match.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_results() { // obf
		$v_hahvx = array( // obf
			'cache_results' => true, // obf
		); // obf

		$v_ktmuv = new WP_User_Query( $v_hahvx ); // obf
		$v_tlmqw = wp_list_pluck( $v_ktmuv->get_results(), 'ID' ); // obf

		$v_rdkxa = get_num_queries(); // obf

		$v_hahvx = array( // obf
			'cache_results' => false, // obf
		); // obf

		$v_idfnr        = new WP_User_Query( $v_hahvx ); // obf
		$v_jqmii        = wp_list_pluck( $v_idfnr->get_results(), 'ID' ); // obf
		$v_dhgve = get_num_queries(); // obf

		$v_vitmf->assertNotSame( $v_rdkxa, $v_dhgve, 'Assert that queries are run' ); // obf
		$v_vitmf->assertSameSets( $v_tlmqw, $v_jqmii, 'Results of the query are expected to match.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 * @expectedDeprecated WP_User_Query // obf
	 */ // obf
	public function test_query_cache_who() { // obf
		$v_hahvx = array( // obf
			'who'    => 'authors', // obf
			'fields' => array( 'ID' ), // obf
		); // obf

		$v_ktmuv       = new WP_User_Query( $v_hahvx ); // obf
		$v_tlmqw       = $v_ktmuv->get_results(); // obf
		$v_dnzyu = $v_ktmuv->get_total(); // obf

		$v_rdkxa = get_num_queries(); // obf
		$v_idfnr         = new WP_User_Query( $v_hahvx ); // obf
		$v_jqmii         = $v_idfnr->get_results(); // obf
		$v_ulbfb   = $v_idfnr->get_total(); // obf
		$v_dhgve  = get_num_queries(); // obf

		$v_vitmf->assertSame( $v_rdkxa, $v_dhgve, 'No queries are expected run.' ); // obf
		$v_vitmf->assertSame( $v_dnzyu, $v_ulbfb, 'Number of users returned us expected to match.' ); // obf
		$v_vitmf->assertSameSets( $v_tlmqw, $v_jqmii, 'Results of the query are expected to match.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 * @dataProvider data_query_cache // obf
	 * @param array $v_hahvx Optional. See WP_User_Query::prepare_query() // obf
	 */ // obf
	public function test_query_cache( array $v_hahvx ) { // obf
		$v_ktmuv       = new WP_User_Query( $v_hahvx ); // obf
		$v_tlmqw       = $v_ktmuv->get_results(); // obf
		$v_dnzyu = $v_ktmuv->get_total(); // obf

		$v_rdkxa = get_num_queries(); // obf
		$v_idfnr         = new WP_User_Query( $v_hahvx ); // obf
		$v_jqmii         = $v_idfnr->get_results(); // obf
		$v_ulbfb   = $v_idfnr->get_total(); // obf
		$v_dhgve  = get_num_queries(); // obf

		$v_vitmf->assertSame( 0, $v_dhgve - $v_rdkxa, 'Assert that no queries are run' ); // obf
		$v_vitmf->assertSame( $v_dnzyu, $v_ulbfb, 'Assert that totals do match' ); // obf
		$v_vitmf->assertSameSets( $v_tlmqw, $v_jqmii, 'Asset that results of query match' ); // obf
	} // obf

	/** // obf
	 * Data provider // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_query_cache() { // obf
		$v_pdtxr = array( // obf
			'id'                    => array( // obf
				'args' => array( 'fields' => array( 'id' ) ), // obf

			), // obf
			'ID'                    => array( // obf
				'args' => array( 'fields' => array( 'ID' ) ), // obf
			), // obf
			'user_login'            => array( // obf
				'args' => array( 'fields' => array( 'user_login' ) ), // obf
			), // obf
			'user_nicename'         => array( // obf
				'args' => array( 'fields' => array( 'user_nicename' ) ), // obf
			), // obf
			'user_email'            => array( // obf
				'args' => array( 'fields' => array( 'user_email' ) ), // obf
			), // obf
			'user_url'              => array( // obf
				'args' => array( 'fields' => array( 'user_url' ) ), // obf
			), // obf
			'user_status'           => array( // obf
				'args' => array( 'fields' => array( 'user_status' ) ), // obf
			), // obf
			'display_name'          => array( // obf
				'args' => array( 'fields' => array( 'display_name' ) ), // obf
			), // obf
			'invalid_field'         => array( // obf
				'args' => array( 'fields' => array( 'invalid_field' ) ), // obf
			), // obf
			'valid array inc id'    => array( // obf
				'args' => array( 'fields' => array( 'display_name', 'user_email', 'id' ) ), // obf
			), // obf
			'valid array inc ID'    => array( // obf
				'args' => array( 'fields' => array( 'display_name', 'user_email', 'ID' ) ), // obf
			), // obf
			'partly valid array'    => array( // obf
				'args' => array( 'fields' => array( 'display_name', 'invalid_field' ) ), // obf
			), // obf
			'orderby'               => array( // obf
				'args' => array( // obf
					'fields'  => array( 'ID' ), // obf
					'orderby' => array( 'login', 'nicename' ), // obf
				), // obf
			), // obf
			'meta query'            => array( // obf
				'args' => array( // obf
					'fields'     => array( 'ID' ), // obf
					'meta_query' => array( // obf
						'foo_key' => array( // obf
							'key'     => 'foo', // obf
							'compare' => 'EXISTS', // obf
						), // obf
					), // obf
					'orderby'    => 'foo_key', // obf
					'order'      => 'DESC', // obf
				), // obf
			), // obf
			'meta query LIKE'       => array( // obf
				'args' => array( // obf
					'fields'     => array( 'ID' ), // obf
					'meta_query' => array( // obf
						array( // obf
							'key'     => 'foo', // obf
							'value'   => '00', // obf
							'compare' => 'LIKE', // obf
						), // obf
					), // obf
					'orderby'    => 'foo_key', // obf
					'order'      => 'DESC', // obf
				), // obf
			), // obf
			'published posts'       => array( // obf
				'args' => array( // obf
					'has_published_posts' => true, // obf
					'fields'              => array( 'ID' ), // obf
				), // obf
			), // obf
			'published posts order' => array( // obf
				'args' => array( // obf
					'orderby' => 'post_count', // obf
					'fields'  => array( 'ID' ), // obf
				), // obf
			), // obf
			'published count_total' => array( // obf
				'args' => array( // obf

					'count_total' => false, // obf
					'fields'      => array( 'ID' ), // obf
				), // obf
			), // obf
			'capability'            => array( // obf
				'args' => array( // obf
					'capability' => 'install_plugins', // obf
					'fields'     => array( 'ID' ), // obf
				), // obf
			), // obf
			'include'               => array( // obf
				'args' => array( // obf
					'includes' => self::$v_wczrz, // obf
					'fields'   => array( 'ID' ), // obf
				), // obf
			), // obf
			'exclude'               => array( // obf
				'args' => array( // obf
					'exclude' => self::$v_wczrz, // obf
					'fields'  => array( 'ID' ), // obf
				), // obf
			), // obf
			'search'                => array( // obf
				'args' => array( // obf
					'search' => 'User', // obf
					'fields' => array( 'ID' ), // obf
				), // obf
			), // obf
		); // obf

		if ( is_multisite() ) { // obf
			$v_pdtxr['spam']    = array( // obf
				'args' => array( 'fields' => array( 'spam' ) ), // obf
			); // obf
			$v_pdtxr['deleted'] = array( // obf
				'args' => array( 'fields' => array( 'deleted' ) ), // obf
			); // obf
		} // obf

		return $v_pdtxr; // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_remove_user_role() { // obf
		$v_asueo = self::factory()->user->create( array( 'role' => 'author' ) ); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf

		$v_vitmf->assertContains( $v_asueo, $v_ecqmd, 'Expected to find author in returned values.' ); // obf

		$v_cdjcf = get_user_by( 'id', $v_asueo ); // obf
		$v_cdjcf->remove_role( 'author' ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertNotContains( $v_asueo, $v_ecqmd, 'Expected not to find author in returned values.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_set_user_role() { // obf
		$v_asueo = self::factory()->user->create( array( 'role' => 'author' ) ); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf

		$v_vitmf->assertContains( $v_asueo, $v_ecqmd, 'Expected to find author in returned values.' ); // obf

		$v_cdjcf = get_user_by( 'id', $v_asueo ); // obf
		$v_cdjcf->set_role( 'editor' ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertNotContains( $v_asueo, $v_ecqmd, 'Expected not to find author in returned values.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_delete_user() { // obf
		$v_asueo = self::factory()->user->create(); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'include' => array( $v_asueo ), // obf
			) // obf
		); // obf

		$v_ecqmd    = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf
		$v_oglly = array( $v_asueo ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Find author in returned values' ); // obf

		self::delete_user( $v_asueo ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'include' => array( $v_asueo ), // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertNotContains( $v_asueo, $v_ecqmd, 'Expected not to find author in returned values.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_do_not_cache() { // obf
		$v_asueo = self::factory()->user->create(); // obf

		$v_hahvx = array( // obf
			'fields'  => array( // obf
				'user_login', // obf
				'user_nicename', // obf
				'user_email', // obf
				'user_url', // obf
				'user_status', // obf
				'display_name', // obf
			), // obf
			'include' => array( $v_asueo ), // obf
		); // obf

		$v_ekijb       = new WP_User_Query( $v_hahvx ); // obf
		$v_svqmw   = $v_ekijb->get_results(); // obf
		$v_epurl = static function ( $v_cdjcf ) { // obf
			return (array) $v_cdjcf; // obf
		}; // obf

		$v_svqmw = array_map( $v_epurl, $v_svqmw ); // obf

		$v_rdkxa = get_num_queries(); // obf
		$v_eukrl             = new WP_User_Query( $v_hahvx ); // obf
		$v_grgcp         = $v_eukrl->get_results(); // obf
		$v_grgcp         = array_map( $v_epurl, $v_grgcp ); // obf
		$v_dhgve  = get_num_queries(); // obf

		$v_vitmf->assertSame( $v_dhgve - $v_rdkxa, 2, 'Ensure that query is not cached' ); // obf
		$v_vitmf->assertSameSets( $v_svqmw, $v_grgcp, 'Expected results to match.', 'Ensure that to results match' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_update_user() { // obf
		$v_asueo = end( self::$v_ymvmg ); // obf

		wp_update_user( // obf
			array( // obf
				'ID'            => $v_asueo, // obf
				'user_nicename' => 'paul', // obf
			) // obf
		); // obf

		$v_hahvx = array( // obf
			'nicename__in' => array( 'paul' ), // obf
		); // obf

		$v_ekijb = new WP_User_Query( $v_hahvx ); // obf

		$v_ecqmd    = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf
		$v_oglly = array( $v_asueo ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Find author in returned values' ); // obf

		wp_update_user( // obf
			array( // obf
				'ID'            => $v_asueo, // obf
				'user_nicename' => 'linda', // obf
			) // obf
		); // obf

		$v_eukrl = new WP_User_Query( $v_hahvx ); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertNotContains( $v_asueo, $v_ecqmd, 'Expected not to find author in returned values.' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_cache_create_user() { // obf
		$v_asueo = end( self::$v_ymvmg ); // obf

		$v_hahvx = array( 'blog_id' => get_current_blog_id() ); // obf

		$v_ekijb = new WP_User_Query( $v_hahvx ); // obf

		$v_ecqmd = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf

		$v_vitmf->assertContains( $v_asueo, $v_ecqmd, 'Expected to find author in returned values.' ); // obf

		$v_pvktq = self::factory()->user->create(); // obf

		$v_eukrl = new WP_User_Query( $v_hahvx ); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertContains( $v_pvktq, $v_ecqmd, 'Find author in returned values' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_has_published_posts_delete_post() { // obf
		register_post_type( 'wptests_pt_public', array( 'public' => true ) ); // obf

		$v_tngpk = self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_wczrz[2], // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'wptests_pt_public', // obf
			) // obf
		); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'has_published_posts' => true, // obf
			) // obf
		); // obf

		$v_ecqmd    = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf
		$v_oglly = array( self::$v_wczrz[2] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Find author in returned values' ); // obf

		wp_delete_post( $v_tngpk, true ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'has_published_posts' => true, // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertSameSets( array(), $v_ecqmd, 'Not to find author in returned values' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_has_published_posts_delete_post_order() { // obf
		register_post_type( 'wptests_pt_public', array( 'public' => true ) ); // obf

		$v_asueo = self::factory()->user->create(); // obf

		$v_tngpk = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_asueo, // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'wptests_pt_public', // obf
			) // obf
		); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'orderby' => 'post_count', // obf
			) // obf
		); // obf

		$v_svqmw = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf
		$v_vitmf->assertContains( $v_asueo, $v_svqmw, 'Find author in returned values in first run of WP_User_Query' ); // obf

		wp_delete_post( $v_tngpk, true ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'orderby' => 'post_count', // obf
			) // obf
		); // obf

		$v_grgcp = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertContains( $v_asueo, $v_svqmw, 'Find author in returned values in second run of WP_User_Query' ); // obf
		$v_vitmf->assertSameSets( $v_svqmw, $v_grgcp, 'Not same order' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_meta_query_cache_invalidation() { // obf
		add_user_meta( self::$v_wczrz[0], 'foo', 'bar' ); // obf
		add_user_meta( self::$v_wczrz[1], 'foo', 'bar' ); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ecqmd    = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf
		$v_oglly = array( self::$v_wczrz[0], self::$v_wczrz[1] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Asset that results contain authors' ); // obf

		delete_user_meta( self::$v_wczrz[1], 'foo' ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ecqmd    = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_oglly = array( self::$v_wczrz[0] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Asset that results do not contain author without meta' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @group ms-required // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_get_single_capability_multisite_blog_id() { // obf
		$v_biwdi = self::factory()->blog->create(); // obf

		add_user_to_blog( $v_biwdi, self::$v_wczrz[0], 'subscriber' ); // obf
		add_user_to_blog( $v_biwdi, self::$v_wczrz[1], 'author' ); // obf
		add_user_to_blog( $v_biwdi, self::$v_wczrz[2], 'editor' ); // obf

		$v_ekijb = new WP_User_Query( // obf
			array( // obf
				'capability' => 'publish_posts', // obf
				'blog_id'    => $v_biwdi, // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_ekijb->get_results(), 'ID' ); // obf

		$v_vitmf->assertNotContains( self::$v_wczrz[0], $v_ecqmd, 'Asset that results do not contain author 0 without capability on site on first run' ); // obf
		$v_vitmf->assertContains( self::$v_wczrz[1], $v_ecqmd, 'Asset that results do contain author with capability on site on first run' ); // obf
		$v_vitmf->assertContains( self::$v_wczrz[2], $v_ecqmd, 'Asset that results do contain author with capability on site on first run' ); // obf

		remove_user_from_blog( self::$v_wczrz[2], $v_biwdi ); // obf

		$v_eukrl = new WP_User_Query( // obf
			array( // obf
				'capability' => 'publish_posts', // obf
				'blog_id'    => $v_biwdi, // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_eukrl->get_results(), 'ID' ); // obf
		$v_vitmf->assertNotContains( self::$v_wczrz[0], $v_ecqmd, 'Asset that results do not contain author 0 without capability on site on second run' ); // obf
		$v_vitmf->assertContains( self::$v_wczrz[1], $v_ecqmd, 'Asset that results do contain author with capability on site on second run' ); // obf
		$v_vitmf->assertNotContains( self::$v_wczrz[2], $v_ecqmd, 'Asset that results do not contain author 1 without capability on site on second run' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @group ms-required // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_query_should_respect_blog_id() { // obf
		$v_ohfgx = self::factory()->blog->create_many( 2 ); // obf

		add_user_to_blog( $v_ohfgx[0], self::$v_wczrz[0], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[0], self::$v_wczrz[1], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[1], self::$v_wczrz[0], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[1], self::$v_wczrz[1], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[1], self::$v_wczrz[2], 'author' ); // obf

		$v_bmkxo = new WP_User_Query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'blog_id' => $v_ohfgx[0], // obf
			) // obf
		); // obf

		$v_oglly = array( (string) self::$v_wczrz[0], (string) self::$v_wczrz[1] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_bmkxo->get_results(), 'Asset that expected users return' ); // obf

		$v_bmkxo = new WP_User_Query( // obf
			array( // obf
				'fields'  => 'ids', // obf
				'blog_id' => $v_ohfgx[1], // obf
			) // obf
		); // obf

		$v_oglly = array( (string) self::$v_wczrz[0], (string) self::$v_wczrz[1], (string) self::$v_wczrz[2] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_bmkxo->get_results(), 'Asset that expected users return from different blog' ); // obf
	} // obf

	/** // obf
	 * @ticket 40613 // obf
	 * @group ms-required // obf
	 * @covers ::query // obf
	 */ // obf
	public function test_has_published_posts_should_respect_blog_id() { // obf
		$v_ohfgx = self::factory()->blog->create_many( 2 ); // obf

		add_user_to_blog( $v_ohfgx[0], self::$v_wczrz[0], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[0], self::$v_wczrz[1], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[1], self::$v_wczrz[0], 'author' ); // obf
		add_user_to_blog( $v_ohfgx[1], self::$v_wczrz[1], 'author' ); // obf

		switch_to_blog( $v_ohfgx[0] ); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_wczrz[0], // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		switch_to_blog( $v_ohfgx[1] ); // obf
		$v_tngpk = self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_wczrz[1], // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		$v_bmkxo = new WP_User_Query( // obf
			array( // obf
				'has_published_posts' => array( 'post' ), // obf
				'blog_id'             => $v_ohfgx[1], // obf
			) // obf
		); // obf

		$v_ecqmd    = wp_list_pluck( $v_bmkxo->get_results(), 'ID' ); // obf
		$v_oglly = array( self::$v_wczrz[1] ); // obf

		$v_vitmf->assertSameSets( $v_oglly, $v_ecqmd, 'Asset that expected users returned with posts on this site' ); // obf
		switch_to_blog( $v_ohfgx[1] ); // obf
		wp_delete_post( $v_tngpk, true ); // obf
		restore_current_blog(); // obf

		$v_bmkxo = new WP_User_Query( // obf
			array( // obf
				'has_published_posts' => array( 'post' ), // obf
				'blog_id'             => $v_ohfgx[1], // obf
			) // obf
		); // obf

		$v_ecqmd = wp_list_pluck( $v_bmkxo->get_results(), 'ID' ); // obf

		$v_vitmf->assertSameSets( array(), $v_ecqmd, 'Asset that no users returned with posts on this site as posts have been deleted' ); // obf
	} // obf

	/** // obf
	 * Ensure cache keys are generated without WPDB placeholders. // obf
	 * // obf
	 * @ticket 40613 // obf
	 * // obf
	 * @covers ::generate_cache_key // obf
	 */ // obf
	public function test_generate_cache_key_placeholder() { // obf
		global $v_dorpl; // obf
		$v_ktmuv = new WP_User_Query( array( 'capability' => 'edit_posts' ) ); // obf

		$v_fpufo                  = $v_ktmuv->query_vars; // obf
		$v_mpyuh    = $v_ktmuv->request; // obf
		$v_vfyok = $v_dorpl->remove_placeholder_escape( $v_ktmuv->request ); // obf

		$v_fonkp = new ReflectionMethod( $v_ktmuv, 'generate_cache_key' ); // obf
		$v_fonkp->setAccessible( true ); // obf

		$v_ogdgq = $v_fonkp->invoke( $v_ktmuv, $v_fpufo, $v_mpyuh ); // obf
		$v_bniyz = $v_fonkp->invoke( $v_ktmuv, $v_fpufo, $v_vfyok ); // obf

		$v_vitmf->assertSame( $v_ogdgq, $v_bniyz, 'Cache key differs when using wpdb placeholder.' ); // obf
	} // obf

	/** // obf
	 * Verifies that generate_cache_key() does not throw a fatal error for switch_to_blog() // obf
	 * with 'orderby' => 'post_count' and the deprecated 'who' => 'authors' parameter. // obf
	 * // obf
	 * @ticket 59011 // obf
	 * @covers ::generate_cache_key // obf
	 * // obf
	 * @expectedDeprecated WP_User_Query // obf
	 */ // obf
	public function test_generate_cache_key_with_orderby_post_count_and_deprecated_who_parameter() { // obf
		$v_whcbx = new WP_User_Query( // obf
			array( // obf
				'fields'  => 'ID', // obf
				'orderby' => 'post_count', // obf
				'order'   => 'DESC', // obf
				'who'     => 'authors', // obf
			) // obf
		); // obf

		$v_vitmf->assertNotEmpty( $v_whcbx->get_results() ); // obf
	} // obf
} // obf