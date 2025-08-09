

<?php // obf

/** // obf
 * @group query // obf
 * @covers WP_Query::get_posts // obf
 */ // obf
class Test_Query_CacheResults extends WP_UnitTestCase { // obf
	/** // obf
	 * Page IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_cchzm; // obf

	/** // obf
	 * Post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_qbhkv; // obf

	/** // obf
	 * Term ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_jclbs; // obf

	/** // obf
	 * Author's user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_imrvf; // obf

	/** // obf
	 * For testing test_generate_cache_key() includes a test containing the // obf
	 * placeholder within the generated SQL query. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public static $v_qpxvm = false; // obf

	/** // obf
	 * For testing test_generate_cache_key() includes a test containing the // obf
	 * placeholder within the generated WP_Query variables. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public static $v_cvgbm = false; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_izrll ) { // obf
		// Make some post objects. // obf
		self::$v_qbhkv = $v_izrll->post->create_many( 5 ); // obf
		self::$v_cchzm = $v_izrll->post->create_many( 5, array( 'post_type' => 'page' ) ); // obf

		self::$v_jclbs = $v_izrll->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_qbhkv[0], self::$v_jclbs, 'category' ); // obf
		add_post_meta( self::$v_qbhkv[0], 'color', '#000000' ); // obf

		// Make a user. // obf
		self::$v_imrvf = $v_izrll->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure cache keys are generated without WPDB placeholders. // obf
	 * // obf
	 * @ticket 56802 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 * // obf
	 * @dataProvider data_query_cache // obf
	 */ // obf
	public function test_generate_cache_key( $v_jnabh ) { // obf
		global $v_yrgix; // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		$v_tdpmc             = $v_thwlo->query_vars; // obf
		$v_sfstt                = $v_thwlo->request; // obf
		$v_sfxjb = $v_yrgix->remove_placeholder_escape( $v_sfstt ); // obf

		$v_ermwf->assertStringNotContainsString( $v_yrgix->placeholder_escape(), $v_sfxjb, 'Placeholder escape should be removed from the modified request.' ); // obf

		if ( str_contains( $v_sfstt, $v_yrgix->placeholder_escape() ) ) { // obf
			self::$v_qpxvm = true; // obf
		} // obf

		if ( str_contains( serialize( $v_tdpmc ), $v_yrgix->placeholder_escape() ) ) { // obf
			self::$v_cvgbm = true; // obf
		} // obf

		$v_hkihv = new ReflectionMethod( $v_thwlo, 'generate_cache_key' ); // obf
		$v_hkihv->setAccessible( true ); // obf

		$v_ojsbj = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_sfstt ); // obf
		$v_xekkp = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_sfxjb ); // obf

		$v_ermwf->assertSame( $v_ojsbj, $v_xekkp, 'Cache key differs when using wpdb placeholder.' ); // obf
	} // obf

	/** // obf
	 * Ensure cache keys tests include WPDB placeholder in SQL Query. // obf
	 * // obf
	 * @ticket 56802 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 * // obf
	 * @depends test_generate_cache_key // obf
	 */ // obf
	public function test_sql_placeholder_cache_key_tested() { // obf
		$v_ermwf->assertTrue( self::$v_qpxvm, 'Cache key containing WPDB placeholder in SQL query was not tested.' ); // obf
	} // obf

	/** // obf
	 * Ensure cache keys tests include WPDB placeholder in WP_Query arguments. // obf
	 * // obf
	 * This test mainly covers the search query which generates the `search_orderby_title` // obf
	 * query_var in WP_Query. // obf
	 * // obf
	 * @ticket 56802 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 * // obf
	 * @depends test_generate_cache_key // obf
	 */ // obf
	public function test_wp_query_placeholder_cache_key_tested() { // obf
		$v_ermwf->assertTrue( self::$v_cvgbm, 'Cache key containing WPDB placeholder in WP_Query arguments was not tested.' ); // obf
	} // obf

	/** // obf
	 * Ensure cache keys are generated without WPDB placeholders. // obf
	 * // obf
	 * @ticket 56802 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 */ // obf
	public function test_generate_cache_key_placeholder() { // obf
		global $v_yrgix; // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( array() ); // obf

		$v_tdpmc                                  = $v_thwlo->query_vars; // obf
		$v_sfstt                                     = $v_thwlo->request; // obf
		$v_tdpmc['test']['nest']                  = '%'; // obf
		$v_tdpmc['test2']['nest']['nest']['nest'] = '%'; // obf
		$v_ermwf->assertStringNotContainsString( $v_yrgix->placeholder_escape(), serialize( $v_tdpmc ), 'Query vars should not contain the wpdb placeholder.' ); // obf

		$v_hkihv = new ReflectionMethod( $v_thwlo, 'generate_cache_key' ); // obf
		$v_hkihv->setAccessible( true ); // obf

		$v_ojsbj = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_sfstt ); // obf

		$v_tdpmc['test']['nest']                  = $v_yrgix->placeholder_escape(); // obf
		$v_tdpmc['test2']['nest']['nest']['nest'] = $v_yrgix->placeholder_escape(); // obf
		$v_ermwf->assertStringContainsString( $v_yrgix->placeholder_escape(), serialize( $v_tdpmc ), 'Query vars should not contain the wpdb placeholder.' ); // obf

		$v_xekkp = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_sfstt ); // obf

		$v_ermwf->assertSame( $v_ojsbj, $v_xekkp, 'Cache key differs when using wpdb placeholder.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_Query::generate_cache_key // obf
	 * @ticket 59442 // obf
	 */ // obf
	public function test_generate_cache_key_unregister_post_type() { // obf
		global $v_yrgix; // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'exclude_from_search' => false, // obf
			) // obf
		); // obf
		$v_tdpmc = array( // obf
			'post_type' => 'any', // obf
		); // obf
		$v_fjzel     = "{$v_yrgix->posts}.ID"; // obf
		$v_thwlo     = new WP_Query( $v_tdpmc ); // obf
		$v_vnpbn   = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_thwlo->request ); // obf

		$v_hkihv = new ReflectionMethod( $v_thwlo, 'generate_cache_key' ); // obf
		$v_hkihv->setAccessible( true ); // obf

		$v_ojsbj = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_vnpbn ); // obf
		unregister_post_type( 'wptests_pt' ); // obf
		$v_xekkp = $v_hkihv->invoke( $v_thwlo, $v_tdpmc, $v_vnpbn ); // obf

		$v_ermwf->assertNotSame( $v_ojsbj, $v_xekkp, 'Cache key should differ after unregistering post type.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59516 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 */ // obf
	public function test_post_in_order_by_clauses_are_not_normalized() { // obf
		global $v_yrgix; // obf

		$v_wctey = self::$v_qbhkv; // obf

		$v_vzmul = array( // obf
			'post__in' => $v_wctey, // obf
			'orderby'  => 'post__in', // obf
		); // obf
		$v_rdozk = array( // obf
			'post__in' => array_reverse( $v_wctey ), // obf
			'orderby'  => 'post__in', // obf
		); // obf

		$v_fjzel   = "{$v_yrgix->posts}.ID"; // obf
		$v_thwlo   = new WP_Query( $v_vzmul ); // obf
		$v_vnpbn = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_thwlo->request ); // obf

		$v_yqudd   = new WP_Query( $v_rdozk ); // obf
		$v_emybb = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_yqudd->request ); // obf

		$v_alcuj = new ReflectionProperty( $v_thwlo, 'query_cache_key' ); // obf
		$v_alcuj->setAccessible( true ); // obf

		$v_bazim = new ReflectionProperty( $v_yqudd, 'query_cache_key' ); // obf
		$v_bazim->setAccessible( true ); // obf

		$v_ermwf->assertNotSame( $v_vnpbn, $v_emybb, 'Queries should not match' ); // obf

		$v_ojsbj = $v_alcuj->getValue( $v_thwlo ); // obf
		$v_xekkp = $v_bazim->getValue( $v_yqudd ); // obf

		$v_ermwf->assertNotSame( $v_ojsbj, $v_xekkp, 'Cache key should differ.' ); // obf
		$v_ermwf->assertNotEmpty( $v_ojsbj, 'Cache key for query one should not be empty.' ); // obf
		$v_ermwf->assertNotEmpty( $v_xekkp, 'Cache key for query two should not be empty.' ); // obf

		// Test the posts are returned different orders. // obf
		$v_ermwf->assertNotSame( wp_list_pluck( $v_thwlo->posts, 'ID' ), wp_list_pluck( $v_yqudd->posts, 'ID' ), 'Query one posts should not match the order of query two posts.' ); // obf
		// Test the posts are the same sets. // obf
		$v_ermwf->assertSameSets( wp_list_pluck( $v_thwlo->posts, 'ID' ), wp_list_pluck( $v_yqudd->posts, 'ID' ), 'Query one posts should match the set of query two posts.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59516 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 */ // obf
	public function test_post_parent_in_order_by_clauses_are_not_normalized() { // obf
		global $v_yrgix; // obf

		$v_cdrep = self::$v_cchzm; // obf
		$v_yewus   = array( 'doctor-dillamond', 'elphaba', 'fiyero', 'glinda', 'the-wizard-of-oz' ); // obf
		$v_tqzah  = array(); // obf
		foreach ( $v_cdrep as $v_erhco => $v_illpd ) { // obf
			$v_tqzah[] = self::factory()->post->create( // obf
				array( // obf
					'post_parent' => $v_illpd, // obf
					'post_type'   => 'page', // obf
					'post_name'   => $v_yewus[ $v_erhco ], // obf
				) // obf
			); // obf
		} // obf

		$v_vzmul = array( // obf
			'post_parent__in' => $v_cdrep, // obf
			'post_type'       => 'page', // obf
			'orderby'         => 'post_parent__in', // obf
		); // obf

		$v_rdozk = array( // obf
			'post_parent__in' => array_reverse( $v_cdrep ), // obf
			'post_type'       => 'page', // obf
			'orderby'         => 'post_parent__in', // obf
		); // obf

		$v_fjzel   = "{$v_yrgix->posts}.ID"; // obf
		$v_thwlo   = new WP_Query( $v_vzmul ); // obf
		$v_vnpbn = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_thwlo->request ); // obf

		$v_yqudd   = new WP_Query( $v_rdozk ); // obf
		$v_emybb = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_yqudd->request ); // obf

		$v_alcuj = new ReflectionProperty( $v_thwlo, 'query_cache_key' ); // obf
		$v_alcuj->setAccessible( true ); // obf

		$v_bazim = new ReflectionProperty( $v_yqudd, 'query_cache_key' ); // obf
		$v_bazim->setAccessible( true ); // obf

		$v_ermwf->assertNotSame( $v_vnpbn, $v_emybb, 'Queries should not match' ); // obf

		$v_ojsbj = $v_alcuj->getValue( $v_thwlo ); // obf
		$v_xekkp = $v_bazim->getValue( $v_yqudd ); // obf

		$v_ermwf->assertNotSame( $v_ojsbj, $v_xekkp, 'Cache key should differ.' ); // obf
		$v_ermwf->assertNotEmpty( $v_ojsbj, 'Cache key for query one should not be empty.' ); // obf
		$v_ermwf->assertNotEmpty( $v_xekkp, 'Cache key for query two should not be empty.' ); // obf

		// Test the posts are returned in the correct order. // obf
		$v_ermwf->assertSame( array( 'doctor-dillamond', 'elphaba', 'fiyero', 'glinda', 'the-wizard-of-oz' ), wp_list_pluck( $v_thwlo->posts, 'post_name' ), 'Query one posts should be in alphabetical order' ); // obf
		$v_ermwf->assertSame( array( 'the-wizard-of-oz', 'glinda', 'fiyero', 'elphaba', 'doctor-dillamond' ), wp_list_pluck( $v_yqudd->posts, 'post_name' ), 'Query two posts should be in reverse alphabetical order.' ); // obf
		// Test the posts are the same sets. // obf
		$v_ermwf->assertSameSets( wp_list_pluck( $v_thwlo->posts, 'ID' ), wp_list_pluck( $v_yqudd->posts, 'ID' ), 'Query one posts should match the set of query two posts.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59516 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 */ // obf
	public function test_post_name_in_order_by_clauses_are_not_normalized() { // obf
		global $v_yrgix; // obf
		$v_yewus = array( 'doctor-dillamond', 'elphaba', 'glinda', 'the-wizard-of-oz' ); // obf
		$v_qbhkv      = array(); // obf

		foreach ( $v_yewus as $v_umved ) { // obf
			$v_qbhkv[] = self::factory()->post->create( // obf
				array( // obf
					'post_name' => $v_umved, // obf
				) // obf
			); // obf
		} // obf

		$v_vzmul = array( // obf
			'post_name__in' => $v_yewus, // obf
			'orderby'       => 'post_name__in', // obf
		); // obf

		$v_rdozk = array( // obf
			'post_name__in' => array_reverse( $v_yewus ), // obf
			'orderby'       => 'post_name__in', // obf
		); // obf

		$v_fjzel   = "{$v_yrgix->posts}.ID"; // obf
		$v_thwlo   = new WP_Query( $v_vzmul ); // obf
		$v_vnpbn = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_thwlo->request ); // obf

		$v_yqudd   = new WP_Query( $v_rdozk ); // obf
		$v_emybb = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_yqudd->request ); // obf

		$v_alcuj = new ReflectionProperty( $v_thwlo, 'query_cache_key' ); // obf
		$v_alcuj->setAccessible( true ); // obf

		$v_bazim = new ReflectionProperty( $v_yqudd, 'query_cache_key' ); // obf
		$v_bazim->setAccessible( true ); // obf

		$v_ermwf->assertNotSame( $v_vnpbn, $v_emybb, 'Queries should not match' ); // obf

		$v_ojsbj = $v_alcuj->getValue( $v_thwlo ); // obf
		$v_xekkp = $v_bazim->getValue( $v_yqudd ); // obf

		$v_ermwf->assertNotSame( $v_ojsbj, $v_xekkp, 'Cache key should differ.' ); // obf
		$v_ermwf->assertNotEmpty( $v_ojsbj, 'Cache key for query one should not be empty.' ); // obf
		$v_ermwf->assertNotEmpty( $v_xekkp, 'Cache key for query two should not be empty.' ); // obf

		// Test the posts are returned in the correct order. // obf
		$v_ermwf->assertSame( array( 'doctor-dillamond', 'elphaba', 'glinda', 'the-wizard-of-oz' ), wp_list_pluck( $v_thwlo->posts, 'post_name' ), 'Query one posts should be in alphabetical order' ); // obf
		$v_ermwf->assertSame( array( 'the-wizard-of-oz', 'glinda', 'elphaba', 'doctor-dillamond' ), wp_list_pluck( $v_yqudd->posts, 'post_name' ), 'Query two posts should be in reverse alphabetical order.' ); // obf
		// Test the posts are the same sets. // obf
		$v_ermwf->assertSameSets( wp_list_pluck( $v_thwlo->posts, 'ID' ), wp_list_pluck( $v_yqudd->posts, 'ID' ), 'Query one posts should match the set of query two posts.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59442 // obf
	 * @ticket 59516 // obf
	 * // obf
	 * @covers WP_Query::generate_cache_key // obf
	 * // obf
	 * @dataProvider data_query_cache_duplicate // obf
	 */ // obf
	public function test_generate_cache_key_normalize( $v_vzmul, $v_rdozk ) { // obf
		global $v_yrgix; // obf

		$v_fjzel   = "{$v_yrgix->posts}.ID"; // obf
		$v_thwlo   = new WP_Query( $v_vzmul ); // obf
		$v_vnpbn = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_thwlo->request ); // obf

		$v_yqudd   = new WP_Query( $v_rdozk ); // obf
		$v_emybb = str_replace( $v_fjzel, "{$v_yrgix->posts}.*", $v_yqudd->request ); // obf

		$v_alcuj = new ReflectionProperty( $v_thwlo, 'query_cache_key' ); // obf
		$v_alcuj->setAccessible( true ); // obf

		$v_bazim = new ReflectionProperty( $v_yqudd, 'query_cache_key' ); // obf
		$v_bazim->setAccessible( true ); // obf

		$v_ermwf->assertSame( $v_vnpbn, $v_emybb, 'Queries should match' ); // obf

		$v_ojsbj = $v_alcuj->getValue( $v_thwlo ); // obf
		$v_xekkp = $v_bazim->getValue( $v_yqudd ); // obf

		$v_ermwf->assertSame( $v_ojsbj, $v_xekkp, 'Cache key differs the same effective parameters.' ); // obf
		$v_ermwf->assertNotEmpty( $v_ojsbj, 'Cache key for query one should not be empty.' ); // obf
		$v_ermwf->assertNotEmpty( $v_xekkp, 'Cache key for query two should not be empty.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_query_cache // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache( $v_jnabh ) { // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_thxgr         = $v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp  = get_num_queries(); // obf

		add_filter( 'split_the_query', '__return_false' ); // obf
		$v_lhxzt = new WP_Query(); // obf
		$v_hdosw = $v_lhxzt->query( $v_jnabh ); // obf
		remove_filter( 'split_the_query', '__return_false' ); // obf

		if ( isset( $v_jnabh['fields'] ) ) { // obf
			if ( 'all' !== $v_jnabh['fields'] ) { // obf
				$v_ermwf->assertSameSets( $v_tvfsb, $v_thxgr, 'Second query produces different set of posts to first.' ); // obf
				$v_ermwf->assertSameSets( $v_tvfsb, $v_hdosw, 'Split query produces different set of posts to first.' ); // obf
			} // obf
			if ( 'id=>parent' !== $v_jnabh['fields'] ) { // obf
				$v_ermwf->assertSame( $v_wgxrp, $v_pqwmp, 'Second query produces unexpected DB queries.' ); // obf
			} // obf
		} else { // obf
			$v_ermwf->assertSame( $v_wgxrp, $v_pqwmp, 'Second query produces unexpected DB queries.' ); // obf
		} // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts, 'Second query has a different number of found posts to first.' ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_lhxzt->found_posts, 'Split query has a different number of found posts to first.' ); // obf
		$v_ermwf->assertSame( $v_thwlo->max_num_pages, $v_yqudd->max_num_pages, 'Second query has a different number of total to first.' ); // obf
		$v_ermwf->assertSame( $v_thwlo->max_num_pages, $v_lhxzt->max_num_pages, 'Split query has a different number of total to first.' ); // obf

		if ( ! $v_thwlo->query_vars['no_found_rows'] ) { // obf
			wp_delete_post( self::$v_qbhkv[0], true ); // obf
			wp_delete_post( self::$v_cchzm[0], true ); // obf
			$v_btbxu = new WP_Query(); // obf
			$v_btbxu->query( $v_jnabh ); // obf

			$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_btbxu->found_posts ); // obf
			$v_ermwf->assertNotSame( $v_wgxrp, get_num_queries() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_generate_cache_key_normalize(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_query_cache_duplicate() { // obf
		return array( // obf
			'post type empty'                              => array( // obf
				'query_vars1' => array( 'post_type' => '' ), // obf
				'query_vars2' => array( 'post_type' => 'post' ), // obf
			), // obf
			'post type array'                              => array( // obf
				'query_vars1' => array( 'post_type' => array( 'page' ) ), // obf
				'query_vars2' => array( 'post_type' => 'page' ), // obf
			), // obf
			'orderby empty'                                => array( // obf
				'query_vars1' => array( 'orderby' => null ), // obf
				'query_vars2' => array( 'orderby' => 'date' ), // obf
			), // obf
			'different order parameter'                    => array( // obf
				'query_vars1' => array( // obf
					'post_type'      => 'post', // obf
					'posts_per_page' => 15, // obf
				), // obf
				'query_vars2' => array( // obf
					'posts_per_page' => 15, // obf
					'post_type'      => 'post', // obf
				), // obf
			), // obf
			'same args'                                    => array( // obf
				'query_vars1' => array( 'post_type' => 'post' ), // obf
				'query_vars2' => array( 'post_type' => 'post' ), // obf
			), // obf
			'same args any'                                => array( // obf
				'query_vars1' => array( 'post_type' => 'any' ), // obf
				'query_vars2' => array( 'post_type' => 'any' ), // obf
			), // obf
			'any and post types'                           => array( // obf
				'query_vars1' => array( 'post_type' => 'any' ), // obf
				'query_vars2' => array( 'post_type' => array( 'post', 'page', 'attachment' ) ), // obf
			), // obf
			'different order post type'                    => array( // obf
				'query_vars1' => array( 'post_type' => array( 'post', 'page' ) ), // obf
				'query_vars2' => array( 'post_type' => array( 'page', 'post' ) ), // obf
			), // obf
			'non-unique post type'                         => array( // obf
				'query_vars1' => array( 'post_type' => array( 'post', 'page' ) ), // obf
				'query_vars2' => array( 'post_type' => array( 'page', 'post', 'page' ) ), // obf
			), // obf
			'post status array'                            => array( // obf
				'query_vars1' => array( 'post_status' => 'publish' ), // obf
				'query_vars2' => array( 'post_status' => array( 'publish' ) ), // obf
			), // obf
			'post status order'                            => array( // obf
				'query_vars1' => array( 'post_status' => array( 'draft', 'publish' ) ), // obf
				'query_vars2' => array( 'post_status' => array( 'publish', 'draft' ) ), // obf
			), // obf
			'non-unique post status'                       => array( // obf
				'query_vars1' => array( 'post_status' => array( 'draft', 'publish' ) ), // obf
				'query_vars2' => array( 'post_status' => array( 'draft', 'publish', 'draft' ) ), // obf
			), // obf
			'post id int vs string'                        => array( // obf
				'query_vars1' => array( 'p' => '1' ), // obf
				'query_vars2' => array( 'p' => 1 ), // obf
			), // obf
			'page id int vs string'                        => array( // obf
				'query_vars1' => array( 'page_id' => '2' ), // obf
				'query_vars2' => array( 'page_id' => 2 ), // obf
			), // obf
			'attachment id int vs string'                  => array( // obf
				'query_vars1' => array( 'attachment_id' => '3' ), // obf
				'query_vars2' => array( 'attachment_id' => 3 ), // obf
			), // obf
			'date and time values int vs string'           => array( // obf
				'query_vars1' => array( // obf
					'year'     => '2013', // obf
					'monthnum' => '12', // obf
					'day'      => '12', // obf
					'hour'     => '12', // obf
					'minute'   => '12', // obf
					'second'   => '12', // obf
				), // obf
				'query_vars2' => array( // obf
					'year'     => 2013, // obf
					'monthnum' => 12, // obf
					'day'      => 12, // obf
					'hour'     => 12, // obf
					'minute'   => 12, // obf
					'second'   => 12, // obf
				), // obf
			), // obf
			'offset value int vs string'                   => array( // obf
				'query_vars1' => array( 'offset' => '5' ), // obf
				'query_vars2' => array( 'offset' => 5 ), // obf
			), // obf
			'posts per page value int vs string'           => array( // obf
				'query_vars1' => array( 'posts_per_page' => '5' ), // obf
				'query_vars2' => array( 'posts_per_page' => 5 ), // obf
			), // obf
			'paged value int vs string'                    => array( // obf
				'query_vars1' => array( 'paged' => '2' ), // obf
				'query_vars2' => array( 'paged' => 2 ), // obf
			), // obf
			'menu_order value int vs string'               => array( // obf
				'query_vars1' => array( 'menu_order' => '2' ), // obf
				'query_vars2' => array( 'menu_order' => 2 ), // obf
			), // obf
			'post__in different order'                     => array( // obf
				'query_vars1' => array( 'post__in' => array( 1, 2, 3, 4, 5 ) ), // obf
				'query_vars2' => array( 'post__in' => array( 5, 4, 3, 2, 1 ) ), // obf
			), // obf
			'post__in non-unique'                          => array( // obf
				'query_vars1' => array( 'post__in' => array( 1, 2, 3, 4, 5 ) ), // obf
				'query_vars2' => array( 'post__in' => array( 1, 2, 3, 4, 5, 1, 2, 3 ) ), // obf
			), // obf
			'post_parent__in different order'              => array( // obf
				'query_vars1' => array( 'post_parent__in' => array( 1, 2, 3, 4, 5 ) ), // obf
				'query_vars2' => array( 'post_parent__in' => array( 5, 4, 3, 2, 1 ) ), // obf
			), // obf
			'post_parent__in non-unique'                   => array( // obf
				'query_vars1' => array( 'post_parent__in' => array( 1, 2, 3, 4, 5 ) ), // obf
				'query_vars2' => array( 'post_parent__in' => array( 1, 2, 3, 4, 5, 1, 2, 3 ) ), // obf
			), // obf
			'post_name__in different order'                => array( // obf
				'query_vars1' => array( 'post_name__in' => array( 'elphaba', 'glinda', 'the-wizard-of-oz', 'doctor-dillamond' ) ), // obf
				'query_vars2' => array( 'post_name__in' => array( 'doctor-dillamond', 'elphaba', 'the-wizard-of-oz', 'glinda' ) ), // obf
			), // obf
			'post_name__in non-unique'                     => array( // obf
				'query_vars1' => array( 'post_name__in' => array( 'elphaba', 'glinda', 'the-wizard-of-oz', 'doctor-dillamond' ) ), // obf
				'query_vars2' => array( 'post_name__in' => array( 'elphaba', 'glinda', 'elphaba', 'glinda', 'the-wizard-of-oz', 'doctor-dillamond' ) ), // obf
			), // obf
			'cat different order (array)'                  => array( // obf
				'query_vars_1' => array( 'cat' => array( '1', '2' ) ), // obf
				'query_vars_2' => array( 'cat' => array( '2', '1' ) ), // obf
			), // obf
			'cat different order (string)'                 => array( // obf
				'query_vars_1' => array( 'cat' => '2,1' ), // obf
				'query_vars_2' => array( 'cat' => '1,2' ), // obf
			), // obf
			'cat queries int vs string'                    => array( // obf
				'query_vars_1' => array( 'cat' => '2' ), // obf
				'query_vars_2' => array( 'cat' => 2 ), // obf
			), // obf
			'category__in queries different order (array)' => array( // obf
				'query_vars_1' => array( 'category__in' => array( '1', '2' ) ), // obf
				'query_vars_2' => array( 'category__in' => array( '2', '1' ) ), // obf
			), // obf
			'category__in queries with non-unique array'   => array( // obf
				'query_vars_1' => array( 'category__in' => array( '1', '1' ) ), // obf
				'query_vars_2' => array( 'category__in' => array( '1' ) ), // obf
			), // obf
			'category__in queries string vs array (array)' => array( // obf
				'query_vars_1' => array( 'category__in' => array( '1' ) ), // obf
				'query_vars_2' => array( 'category__in' => array( 1 ) ), // obf
			), // obf
			'category__not_in different order (array)'     => array( // obf
				'query_vars_1' => array( 'category__not_in' => array( '1', '2' ) ), // obf
				'query_vars_2' => array( 'category__not_in' => array( '2', '1' ) ), // obf
			), // obf
			'category__not_in with non-unique array'       => array( // obf
				'query_vars_1' => array( 'category__not_in' => array( '1', '1' ) ), // obf
				'query_vars_2' => array( 'category__not_in' => array( '1' ) ), // obf
			), // obf
			'category__not_in queries string vs array (array)' => array( // obf
				'query_vars_1' => array( 'category__not_in' => array( '1' ) ), // obf
				'query_vars_2' => array( 'category__not_in' => array( 1 ) ), // obf
			), // obf
			'category__and queries width different order (array)' => array( // obf
				'query_vars_1' => array( 'category__and' => array( '1', '2' ) ), // obf
				'query_vars_2' => array( 'category__and' => array( '2', '1' ) ), // obf
			), // obf
			'category__and with non-unique array'          => array( // obf
				'query_vars_1' => array( 'category__and' => array( '1', '1', '2' ) ), // obf
				'query_vars_2' => array( 'category__and' => array( '1', '2' ) ), // obf
			), // obf
			'category__and queries string vs array (array)' => array( // obf
				'query_vars_1' => array( 'category__and' => array( '1', '2' ) ), // obf
				'query_vars_2' => array( 'category__and' => array( 1, 2 ) ), // obf
			), // obf
			'author queries different order (string)'      => array( // obf
				'query_vars_1' => array( 'author' => '1,2' ), // obf
				'query_vars_2' => array( 'author' => '2,1' ), // obf
			), // obf
			'author with non-unique string'                => array( // obf
				'query_vars_1' => array( 'author' => '1,1' ), // obf
				'query_vars_2' => array( 'author' => '1' ), // obf
			), // obf
			'author queries int vs string (string)'        => array( // obf
				'query_vars_1' => array( 'author' => 1 ), // obf
				'query_vars_2' => array( 'author' => '1' ), // obf
			), // obf
			'author queries int vs string (array)'         => array( // obf
				'query_vars_1' => array( 'author' => array( 1 ) ), // obf
				'query_vars_2' => array( 'author' => array( '1' ) ), // obf
			), // obf
			'author__in different order'                   => array( // obf
				'query_vars_1' => array( 'author__in' => array( 1, 2 ) ), // obf
				'query_vars_2' => array( 'author__in' => array( 2, 1 ) ), // obf
			), // obf
			'author__in with non-unique array'             => array( // obf
				'query_vars_1' => array( 'author__in' => array( 1, 1, 2 ) ), // obf
				'query_vars_2' => array( 'author__in' => array( 1, 2 ) ), // obf
			), // obf
			'author__in queries int vs string (array)'     => array( // obf
				'query_vars_1' => array( 'author__in' => array( 1 ) ), // obf
				'query_vars_2' => array( 'author__in' => array( '1' ) ), // obf
			), // obf
			'author__not_in different order (array)'       => array( // obf
				'query_vars_1' => array( 'author__not_in' => array( 1, 2 ) ), // obf
				'query_vars_2' => array( 'author__not_in' => array( 2, 1 ) ), // obf
			), // obf
			'author__not_in queries int vs string (array)' => array( // obf
				'query_vars_1' => array( 'author__not_in' => array( 1 ) ), // obf
				'query_vars_2' => array( 'author__not_in' => array( '1' ) ), // obf
			), // obf
			'tag_slug__in order'                           => array( // obf
				'query_vars_1' => array( 'tag_slug__in' => array( 'foo', 'bar' ) ), // obf
				'query_vars_2' => array( 'tag_slug__in' => array( 'bar', 'foo' ) ), // obf
			), // obf
			'tag_slug__in non-unique vs unique'            => array( // obf
				'query_vars_1' => array( 'tag_slug__in' => array( 'foo', 'bar', 'bar' ) ), // obf
				'query_vars_2' => array( 'tag_slug__in' => array( 'foo', 'bar' ) ), // obf
			), // obf
			'tag_slug__and order'                          => array( // obf
				'query_vars_1' => array( 'tag_slug__and' => array( 'foo', 'bar' ) ), // obf
				'query_vars_2' => array( 'tag_slug__and' => array( 'bar', 'foo' ) ), // obf
			), // obf
			'tag_slug__and non-unique'                     => array( // obf
				'query_vars_1' => array( 'tag_slug__and' => array( 'foo', 'bar', 'foo' ) ), // obf
				'query_vars_2' => array( 'tag_slug__and' => array( 'bar', 'foo' ) ), // obf
			), // obf
			'tag__in queries different order (array)'      => array( // obf
				'query_vars_1' => array( 'tag__in' => array( 1, 2 ) ), // obf
				'query_vars_2' => array( 'tag__in' => array( 2, 1 ) ), // obf
			), // obf
			'tag__in queries non-unique array'             => array( // obf
				'query_vars_1' => array( 'tag__in' => array( 1, 2, 1 ) ), // obf
				'query_vars_2' => array( 'tag__in' => array( 2, 1 ) ), // obf
			), // obf
			'tag__in queries int vs string'                => array( // obf
				'query_vars_1' => array( 'tag__in' => array( 2, 1 ) ), // obf
				'query_vars_2' => array( 'tag__in' => array( '2', '1' ) ), // obf
			), // obf
			'tag__and queries different order (array)'     => array( // obf
				'query_vars_1' => array( 'tag__and' => array( 1, 2 ) ), // obf
				'query_vars_2' => array( 'tag__and' => array( 2, 1 ) ), // obf
			), // obf
			'tag__and queries non-unique array'            => array( // obf
				'query_vars_1' => array( 'tag__and' => array( 1, 2, 2 ) ), // obf
				'query_vars_2' => array( 'tag__and' => array( 2, 1 ) ), // obf
			), // obf
			'tag__not_in queries different order (array)'  => array( // obf
				'query_vars_1' => array( 'tag__not_in' => array( 1, 2 ) ), // obf
				'query_vars_2' => array( 'tag__not_in' => array( 2, 1 ) ), // obf
			), // obf
			'tag__not_in queries non-unique array'         => array( // obf
				'query_vars_1' => array( 'tag__not_in' => array( 1, 2, 2 ) ), // obf
				'query_vars_2' => array( 'tag__not_in' => array( 1, 2 ) ), // obf
			), // obf
			'tag__not_in queries int vs string (array)'    => array( // obf
				'query_vars_1' => array( 'tag__not_in' => array( '1' ) ), // obf
				'query_vars_2' => array( 'tag__not_in' => array( 1 ) ), // obf
			), // obf
			'cache parameters'                             => array( // obf
				'query_vars1' => array( // obf
					'update_post_meta_cache' => true, // obf
					'update_post_term_cache' => true, // obf
					'update_menu_item_cache' => true, // obf
				), // obf
				'query_vars2' => array( // obf
					'update_post_meta_cache' => false, // obf
					'update_post_term_cache' => false, // obf
					'update_menu_item_cache' => false, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters. // obf
	 */ // obf
	public function data_query_cache() { // obf
		return array( // obf
			'cache true'                                  => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
				), // obf
			), // obf
			'cache true and pagination'                   => array( // obf
				'args' => array( // obf
					'cache_results'  => true, // obf
					'posts_per_page' => 3, // obf
					'page'           => 2, // obf
				), // obf
			), // obf
			'cache true and no pagination'                => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'nopaging'      => true, // obf
				), // obf
			), // obf
			'cache true and post type any'                => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'nopaging'      => true, // obf
					'post_type'     => 'any', // obf
				), // obf
			), // obf
			'cache true and get all'                      => array( // obf
				'args' => array( // obf
					'cache_results'  => true, // obf
					'fields'         => 'all', // obf
					'posts_per_page' => -1, // obf
					'post_status'    => 'any', // obf
					'post_type'      => 'any', // obf
				), // obf
			), // obf
			'cache true and page'                         => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'post_type'     => 'page', // obf
				), // obf
			), // obf
			'cache true and empty post type'              => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'post_type'     => '', // obf
				), // obf
			), // obf
			'cache true and orderby null'                 => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'orderby'       => null, // obf
				), // obf
			), // obf
			'cache true and ids'                          => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'fields'        => 'ids', // obf
				), // obf
			), // obf
			'cache true and id=>parent and no found rows' => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'fields'        => 'id=>parent', // obf
				), // obf
			), // obf
			'cache true and ids and no found rows'        => array( // obf
				'args' => array( // obf
					'no_found_rows' => true, // obf
					'cache_results' => true, // obf
					'fields'        => 'ids', // obf
				), // obf
			), // obf
			'cache true and id=>parent'                   => array( // obf
				'args' => array( // obf
					'no_found_rows' => true, // obf
					'cache_results' => true, // obf
					'fields'        => 'id=>parent', // obf
				), // obf
			), // obf
			'cache and ignore_sticky_posts'               => array( // obf
				'args' => array( // obf
					'cache_results'       => true, // obf
					'ignore_sticky_posts' => true, // obf
				), // obf
			), // obf
			'cache meta query'                            => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'meta_query'    => array( // obf
						array( // obf
							'key' => 'color', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'cache meta query search'                     => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'meta_query'    => array( // obf
						array( // obf
							'key'     => 'color', // obf
							'value'   => '00', // obf
							'compare' => 'LIKE', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'cache nested meta query search'              => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'meta_query'    => array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'key'     => 'color', // obf
							'value'   => '00', // obf
							'compare' => 'LIKE', // obf
						), // obf
						array( // obf
							'relation' => 'OR', // obf
							array( // obf
								'key'     => 'color', // obf
								'value'   => '00', // obf
								'compare' => 'LIKE', // obf
							), // obf
							array( // obf
								'relation' => 'AND', // obf
								array( // obf
									'key'     => 'wp_test_suite', // obf
									'value'   => '56802', // obf
									'compare' => 'LIKE', // obf
								), // obf
								array( // obf
									'key'     => 'wp_test_suite_too', // obf
									'value'   => '56802', // obf
									'compare' => 'LIKE', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'cache meta query not search'                 => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'meta_query'    => array( // obf
						array( // obf
							'key'     => 'color', // obf
							'value'   => 'ff', // obf
							'compare' => 'NOT LIKE', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'cache comment_count'                         => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'comment_count' => 0, // obf
				), // obf
			), // obf
			'cache term query'                            => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					'tax_query'     => array( // obf
						array( // obf
							'taxonomy' => 'category', // obf
							'terms'    => array( 'foo' ), // obf
							'field'    => 'slug', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'cache search query'                          => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					's'             => 'title', // obf
				), // obf
			), // obf
			'cache search query multiple terms'           => array( // obf
				'args' => array( // obf
					'cache_results' => true, // obf
					's'             => 'Post title', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_seeded_random_queries_only_cache_post_objects() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'orderby'       => 'rand(6)', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf
		$v_pqwmp = get_num_queries(); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf

		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertNotSame( $v_pqwmp, $v_wgxrp ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_unseeded_random_queries_only_cache_post_objects() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'orderby'       => 'rand', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf
		$v_pqwmp = get_num_queries(); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf

		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertNotSame( $v_pqwmp, $v_wgxrp ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_filter_request() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf
		$v_pqwmp = get_num_queries(); // obf

		add_filter( 'posts_request', array( $v_ermwf, 'filter_posts_request' ) ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf

		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertNotSame( $v_pqwmp, $v_wgxrp ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_no_caching() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf
		$v_pqwmp = get_num_queries(); // obf

		$v_yqudd                = new WP_Query(); // obf
		$v_jnabh['cache_results'] = false; // obf
		$v_yqudd->query( $v_jnabh ); // obf

		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertNotSame( $v_pqwmp, $v_wgxrp ); // obf
	} // obf

	public function filter_posts_request( $v_sfstt ) { // obf
		return $v_sfstt . ' -- Add comment'; // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_new_post() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		$v_nmupm = self::factory()->post->create(); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_main_query_sticky_posts_change() { // obf
		add_action( 'parse_query', array( $v_ermwf, 'set_cache_results' ) ); // obf
		update_option( 'posts_per_page', 5 ); // obf

		$v_fmtgj = date_create( '-25 hours' ); // obf
		$v_xnlfi = self::factory()->post->create( array( 'post_date' => $v_fmtgj->format( 'Y-m-d H:i:s' ) ) ); // obf

		// Post is unstuck. // obf
		$v_ermwf->go_to( '/' ); // obf
		$v_rirta     = $v_qatlw['wp_query']->posts; // obf
		$v_mzxcq = wp_list_pluck( $v_rirta, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf
		$v_ermwf->assertSame( $v_nheql, $v_mzxcq ); // obf

		// Stick the post. // obf
		stick_post( $v_xnlfi ); // obf

		$v_ermwf->go_to( '/' ); // obf
		$v_hlxal     = $v_qatlw['wp_query']->posts; // obf
		$v_xlepx = wp_list_pluck( $v_hlxal, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf
		array_unshift( $v_nheql, $v_xnlfi ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_xlepx ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_main_query_in_query_sticky_posts_change() { // obf
		add_action( 'parse_query', array( $v_ermwf, 'set_cache_results' ) ); // obf
		update_option( 'posts_per_page', 5 ); // obf

		$v_whzzr = self::$v_qbhkv[2]; // obf

		// Post is unstuck. // obf
		$v_ermwf->go_to( '/' ); // obf
		$v_rirta     = $v_qatlw['wp_query']->posts; // obf
		$v_mzxcq = wp_list_pluck( $v_rirta, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf
		$v_ermwf->assertSame( $v_nheql, $v_mzxcq ); // obf

		// Stick the post. // obf
		stick_post( $v_whzzr ); // obf

		$v_ermwf->go_to( '/' ); // obf
		$v_hlxal     = $v_qatlw['wp_query']->posts; // obf
		$v_xlepx = wp_list_pluck( $v_hlxal, 'ID' ); // obf

		$v_nheql = array_diff( array_reverse( self::$v_qbhkv ), array( $v_whzzr ) ); // obf
		array_unshift( $v_nheql, $v_whzzr ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_xlepx ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_sticky_posts_change() { // obf
		add_action( 'parse_query', array( $v_ermwf, 'set_cache_results' ) ); // obf

		$v_fmtgj = date_create( '-25 hours' ); // obf
		$v_xnlfi = self::factory()->post->create( array( 'post_date' => $v_fmtgj->format( 'Y-m-d H:i:s' ) ) ); // obf

		// Post is unstuck. // obf
		$v_rirta     = new WP_Query( array( 'posts_per_page' => 5 ) ); // obf
		$v_mzxcq = wp_list_pluck( $v_rirta->posts, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_mzxcq ); // obf

		// Stick the post. // obf
		stick_post( $v_xnlfi ); // obf

		$v_hlxal     = new WP_Query( array( 'posts_per_page' => 5 ) ); // obf
		$v_xlepx = wp_list_pluck( $v_hlxal->posts, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf
		array_unshift( $v_nheql, $v_xnlfi ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_xlepx ); // obf

		// Ignore sticky posts. // obf
		$v_btxwz     = new WP_Query( // obf
			array( // obf
				'posts_per_page'      => 5, // obf
				'ignore_sticky_posts' => true, // obf
			) // obf
		); // obf
		$v_msypq = wp_list_pluck( $v_btxwz->posts, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_msypq ); // obf

		// Just to make sure everything has changed. // obf
		$v_ermwf->assertNotSame( $v_rirta, $v_hlxal ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_in_query_sticky_posts_change() { // obf
		add_action( 'parse_query', array( $v_ermwf, 'set_cache_results' ) ); // obf

		$v_whzzr = self::$v_qbhkv[2]; // obf

		// Post is unstuck. // obf
		$v_rirta     = new WP_Query( array( 'posts_per_page' => 5 ) ); // obf
		$v_mzxcq = wp_list_pluck( $v_rirta->posts, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_mzxcq ); // obf

		// Stick the post. // obf
		stick_post( $v_whzzr ); // obf

		$v_hlxal     = new WP_Query( array( 'posts_per_page' => 5 ) ); // obf
		$v_xlepx = wp_list_pluck( $v_hlxal->posts, 'ID' ); // obf

		$v_nheql = array_diff( array_reverse( self::$v_qbhkv ), array( $v_whzzr ) ); // obf
		array_unshift( $v_nheql, $v_whzzr ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_xlepx ); // obf

		// Ignore sticky posts. // obf
		$v_btxwz     = new WP_Query( // obf
			array( // obf
				'posts_per_page'      => 5, // obf
				'ignore_sticky_posts' => true, // obf
			) // obf
		); // obf
		$v_msypq = wp_list_pluck( $v_btxwz->posts, 'ID' ); // obf

		$v_nheql = array_reverse( self::$v_qbhkv ); // obf

		$v_ermwf->assertSame( $v_nheql, $v_msypq ); // obf

		// Just to make sure everything has changed. // obf
		$v_ermwf->assertNotSame( $v_rirta, $v_hlxal ); // obf
	} // obf

	public function set_cache_results( $v_tbxlb ) { // obf
		$v_tbxlb->set( 'cache_results', true ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_different_args() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		$v_jnabh           = array( // obf
			'cache_results'          => true, // obf
			'fields'                 => 'ids', // obf
			'suppress_filters'       => true, // obf
			'cache_results'          => true, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'lazy_load_term_meta'    => false, // obf
		); // obf
		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_thxgr         = $v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp  = get_num_queries(); // obf

		$v_ermwf->assertSame( $v_pqwmp, $v_wgxrp ); // obf
		$v_ermwf->assertSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_different_fields() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'all', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		$v_jnabh           = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'id=>parent', // obf
		); // obf
		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertSame( 1, $v_wgxrp - $v_pqwmp ); // obf
		$v_ermwf->assertCount( 5, $v_thwlo->posts ); // obf
		$v_ermwf->assertCount( 5, $v_yqudd->posts ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf

		/* // obf
		 * Make sure the returned post objects differ due to the field argument. // obf
		 * // obf
		 * This uses assertNotEquals rather than assertNotSame as the former is // obf
		 * agnostic to the instance ID of objects, whereas the latter will take // obf
		 * it in to account. The test needs to discard the instance ID when // obf
		 * confirming inequality. // obf
		 */ // obf
		$v_ermwf->assertNotEquals( $v_thwlo->posts, $v_yqudd->posts ); // obf
	} // obf


	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_query_cache_unprimed_parents() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'id=>parent', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		$v_wctey   = wp_list_pluck( $v_thwlo->posts, 'ID' ); // obf
		$v_murxe = array_map( // obf
			function ( $v_hkbst ) { // obf
				return "post_parent:{$v_hkbst}"; // obf
			}, // obf
			$v_wctey // obf
		); // obf

		wp_cache_delete_multiple( $v_murxe, 'posts' ); // obf

		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertSame( 1, $v_wgxrp - $v_pqwmp, 'There should be only one query to prime parents' ); // obf
		$v_ermwf->assertCount( 5, $v_thwlo->posts, 'There should be only 5 posts returned on first query' ); // obf
		$v_ermwf->assertCount( 5, $v_yqudd->posts, 'There should be only 5 posts returned on second query' ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts, 'Found posts should match on second query' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_query_cache_update_parent() { // obf
		$v_lwjud = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => self::$v_cchzm[0], // obf
			) // obf
		); // obf
		$v_jnabh    = array( // obf
			'cache_results' => true, // obf
			'post_type'     => 'page', // obf
			'fields'        => 'id=>parent', // obf
			'post__in'      => array( // obf
				$v_lwjud, // obf
			), // obf
		); // obf
		$v_thwlo  = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_lwjud, // obf
				'post_parent' => self::$v_cchzm[1], // obf
			) // obf
		); // obf

		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertSame( self::$v_cchzm[0], $v_thwlo->posts[0]->post_parent, 'Check post parent on first query' ); // obf
		$v_ermwf->assertSame( self::$v_cchzm[1], $v_yqudd->posts[0]->post_parent, 'Check post parent on second query' ); // obf
		$v_ermwf->assertSame( 2, $v_wgxrp - $v_pqwmp, 'There should be 2 queries, one for id=>parent' ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts, 'Found posts should match on second query' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_query_cache_delete_parent() { // obf
		$v_ybklq = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_lwjud        = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_ybklq, // obf
			) // obf
		); // obf
		$v_jnabh           = array( // obf
			'cache_results' => true, // obf
			'post_type'     => 'page', // obf
			'fields'        => 'id=>parent', // obf
			'post__in'      => array( // obf
				$v_lwjud, // obf
			), // obf
		); // obf
		$v_thwlo         = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		wp_delete_post( $v_ybklq, true ); // obf

		$v_pqwmp = get_num_queries(); // obf
		$v_yqudd         = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf
		$v_wgxrp = get_num_queries(); // obf

		$v_ermwf->assertSame( $v_ybklq, $v_thwlo->posts[0]->post_parent, 'Check post parent on first query' ); // obf
		$v_ermwf->assertSame( 0, $v_yqudd->posts[0]->post_parent, 'Check post parent on second query' ); // obf
		$v_ermwf->assertSame( 2, $v_wgxrp - $v_pqwmp, 'There should be 2 queries, one for id=>parent' ); // obf
		$v_ermwf->assertSame( $v_thwlo->found_posts, $v_yqudd->found_posts, 'Found posts should match on second query' ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_logged_in() { // obf
		$v_tnzwk = self::$v_imrvf; // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => $v_tnzwk, // obf
			) // obf
		); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'author'        => $v_tnzwk, // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_set_current_user( $v_tnzwk ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf
		$v_ermwf->assertEmpty( $v_tvfsb ); // obf
		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_logged_in_password() { // obf
		$v_tnzwk = self::$v_imrvf; // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'    => 'foo', // obf
				'post_password' => 'password', // obf
				'post_author'   => $v_tnzwk, // obf
			) // obf
		); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			's'             => 'foo', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_set_current_user( $v_tnzwk ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf
		$v_ermwf->assertEmpty( $v_tvfsb ); // obf
		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_new_comment() { // obf
		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'comment_count' => 1, // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		self::factory()->comment->create( array( 'comment_post_ID' => self::$v_qbhkv[0] ) ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( self::$v_qbhkv[0], $v_thxgr ); // obf
		$v_ermwf->assertNotEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_main_comments_feed_includes_attachment_comments() { // obf
		$v_kkvux = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf
		$v_entxe    = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_kkvux, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'withcomments'  => 1, // obf
			'feed'          => 'feed', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_thwlo->query( $v_jnabh ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertTrue( $v_thwlo->have_comments() ); // obf
		$v_ermwf->assertTrue( $v_yqudd->have_comments() ); // obf

		$v_bhnrn = $v_thwlo->next_comment(); // obf
		$v_ermwf->assertEquals( $v_entxe, $v_bhnrn->comment_ID ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_delete_comment() { // obf
		$v_entxe = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_qbhkv[0] ) ); // obf
		$v_jnabh       = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'comment_count' => 1, // obf
		); // obf
		$v_thwlo     = new WP_Query(); // obf
		$v_tvfsb     = $v_thwlo->query( $v_jnabh ); // obf

		wp_delete_comment( $v_entxe, true ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_update_post() { // obf
		$v_nmupm = self::$v_qbhkv[0]; // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_nmupm, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_tvfsb ); // obf
		$v_ermwf->assertNotContains( $v_nmupm, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_new_meta() { // obf
		$v_nmupm = self::$v_qbhkv[1]; // Post 0 already has a color meta value. // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'meta_query'    => array( // obf
				array( // obf
					'key' => 'color', // obf
				), // obf
			), // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		add_post_meta( $v_nmupm, 'color', 'black' ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_update_meta() { // obf
		// Posts[0] already has a color meta value set to #000000. // obf
		$v_nmupm = self::$v_qbhkv[0]; // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'meta_query'    => array( // obf
				array( // obf
					'key'   => 'color', // obf
					'value' => '#000000', // obf
				), // obf
			), // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		update_post_meta( $v_nmupm, 'color', 'blue' ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_tvfsb ); // obf
		$v_ermwf->assertEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf


	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_delete_attachment() { // obf
		$v_nmupm = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'post_type'     => 'attachment', // obf
			'post_status'   => 'inherit', // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_delete_attachment( $v_nmupm ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_tvfsb ); // obf
		$v_ermwf->assertEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_delete_meta() { // obf
		// Post 0 already has a color meta value. // obf
		$v_nmupm = self::$v_qbhkv[1]; // obf
		add_post_meta( $v_nmupm, 'color', 'black' ); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'meta_query'    => array( // obf
				array( // obf
					'key' => 'color', // obf
				), // obf
			), // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		delete_post_meta( $v_nmupm, 'color' ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_tvfsb ); // obf
		$v_ermwf->assertNotEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_new_term() { // obf
		// Post 0 already has the category foo. // obf
		$v_nmupm = self::$v_qbhkv[1]; // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'tax_query'     => array( // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'terms'    => array( 'foo' ), // obf
					'field'    => 'slug', // obf
				), // obf
			), // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_set_post_terms( $v_nmupm, array( self::$v_jclbs ), 'category' ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_delete_term() { // obf
		// Post 0 already has the category foo. // obf
		$v_nmupm = self::$v_qbhkv[1]; // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf

		$v_jclbs = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf

		wp_set_object_terms( $v_nmupm, array( $v_jclbs ), 'wptests_tax1' ); // obf

		$v_jnabh   = array( // obf
			'cache_results' => true, // obf
			'fields'        => 'ids', // obf
			'tax_query'     => array( // obf
				array( // obf
					'taxonomy' => 'wptests_tax1', // obf
					'terms'    => array( $v_jclbs ), // obf
					'field'    => 'term_id', // obf
				), // obf
			), // obf
		); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf

		wp_delete_term( $v_jclbs, 'wptests_tax1' ); // obf

		$v_yqudd = new WP_Query(); // obf
		$v_thxgr = $v_yqudd->query( $v_jnabh ); // obf

		$v_ermwf->assertNotSame( $v_tvfsb, $v_thxgr ); // obf
		$v_ermwf->assertContains( $v_nmupm, $v_tvfsb ); // obf
		$v_ermwf->assertEmpty( $v_thxgr ); // obf
		$v_ermwf->assertNotSame( $v_thwlo->found_posts, $v_yqudd->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 58599 // obf
	 */ // obf
	public function test_query_posts_fields_request() { // obf
		global $v_yrgix; // obf

		$v_jnabh = array( // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'no_found_rows'          => true, // obf
		); // obf

		add_filter( 'posts_fields_request', array( $v_ermwf, 'filter_posts_fields_request' ) ); // obf

		$v_peyzm = get_num_queries(); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf
		$v_ldozp  = get_num_queries(); // obf

		foreach ( $v_tvfsb as $v_isjet ) { // obf
			$v_ermwf->assertNotSame( get_post( $v_isjet->ID )->post_content, $v_isjet->post_content ); // obf
		} // obf

		$v_ermwf->assertSame( 2, $v_ldozp - $v_peyzm, 'There should only be 2 queries run, one for request and one prime post objects.' ); // obf

		$v_ermwf->assertStringContainsString( // obf
			"SELECT $v_yrgix->posts.*", // obf
			$v_yrgix->last_query, // obf
			'Check that _prime_post_caches is called.' // obf
		); // obf
	} // obf

	public function filter_posts_fields_request( $v_fjzel ) { // obf
		global $v_yrgix; // obf
		return "{$v_yrgix->posts}.ID"; // obf
	} // obf

	/** // obf
	 * @ticket 58599 // obf
	 * @dataProvider data_query_filter_posts_results // obf
	 */ // obf
	public function test_query_filter_posts_results( $v_mzvth ) { // obf
		global $v_yrgix; // obf

		$v_jnabh = array( // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'no_found_rows'          => true, // obf
		); // obf

		add_filter( $v_mzvth, array( $v_ermwf, 'filter_posts_results' ) ); // obf

		$v_peyzm = get_num_queries(); // obf
		$v_thwlo = new WP_Query(); // obf
		$v_tvfsb = $v_thwlo->query( $v_jnabh ); // obf
		$v_ldozp  = get_num_queries(); // obf

		$v_ermwf->assertCount( 1, $v_tvfsb ); // obf

		$v_ermwf->assertSame( 2, $v_ldozp - $v_peyzm, 'There should only be 2 queries run, one for request and one prime post objects.' ); // obf

		$v_ermwf->assertStringContainsString( // obf
			"SELECT $v_yrgix->posts.*", // obf
			$v_yrgix->last_query, // obf
			'Check that _prime_post_caches is called.' // obf
		); // obf
	} // obf

	public function filter_posts_results() { // obf
		return array( get_post( self::$v_qbhkv[0] ) ); // obf
	} // obf

	public function data_query_filter_posts_results() { // obf
		return array( // obf
			array( 'posts_results' ), // obf
			array( 'the_posts' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_should_exclude_post_with_excluded_term() { // obf
		$v_cfvoh = self::$v_jclbs; // obf
		// Post 0 has the term applied. // obf
		$v_hkbst = self::$v_qbhkv[0]; // obf

		$v_jnabh = array( // obf
			'fields'    => 'ids', // obf
			'tax_query' => array( // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'terms'    => array( $v_cfvoh ), // obf
					'operator' => 'NOT IN', // obf
				), // obf
			), // obf
		); // obf

		$v_pfine = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertNotContains( $v_hkbst, $v_pfine, 'First query includes the post ID.' ); // obf

		$v_uizht = get_num_queries(); // obf
		$v_orbfa = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertNotContains( $v_hkbst, $v_orbfa, 'Second query includes the post ID.' ); // obf

		$v_ermwf->assertSame( $v_uizht, get_num_queries(), 'Second query is not cached.' ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_should_exclude_post_when_excluded_term_is_added_after_caching() { // obf
		$v_cfvoh = self::$v_jclbs; // obf
		// Post 1 does not have the term applied. // obf
		$v_hkbst = self::$v_qbhkv[1]; // obf

		$v_jnabh = array( // obf
			'fields'    => 'ids', // obf
			'tax_query' => array( // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'terms'    => array( $v_cfvoh ), // obf
					'operator' => 'NOT IN', // obf
				), // obf
			), // obf
		); // obf

		$v_pfine = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertContains( $v_hkbst, $v_pfine, 'First query does not include the post ID.' ); // obf

		wp_set_object_terms( $v_hkbst, array( $v_cfvoh ), 'category' ); // obf

		$v_uizht = get_num_queries(); // obf
		$v_orbfa = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertNotContains( $v_hkbst, $v_orbfa, 'Second query includes the post ID.' ); // obf
		$v_ermwf->assertNotSame( $v_uizht, get_num_queries(), 'Applying term does not invalidate previous cache.' ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_query_cache_should_not_exclude_post_when_excluded_term_is_removed_after_caching() { // obf
		$v_cfvoh = self::$v_jclbs; // obf
		// Post 0 has the term applied. // obf
		$v_hkbst = self::$v_qbhkv[0]; // obf

		$v_jnabh = array( // obf
			'fields'    => 'ids', // obf
			'tax_query' => array( // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'terms'    => array( $v_cfvoh ), // obf
					'operator' => 'NOT IN', // obf
				), // obf
			), // obf
		); // obf

		$v_pfine = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertNotContains( $v_hkbst, $v_pfine, 'First query includes the post ID.' ); // obf

		// Clear the post of terms. // obf
		wp_set_object_terms( $v_hkbst, array(), 'category' ); // obf

		$v_uizht = get_num_queries(); // obf
		$v_orbfa = get_posts( $v_jnabh ); // obf
		$v_ermwf->assertContains( $v_hkbst, $v_orbfa, 'Second query does not include the post ID.' ); // obf
		$v_ermwf->assertNotSame( $v_uizht, get_num_queries(), 'Removing term does not invalidate previous cache.' ); // obf
	} // obf

	/** // obf
	 * @ticket 22176 // obf
	 * @dataProvider data_query_cache_with_empty_result_set // obf
	 */ // obf
	public function test_query_cache_with_empty_result_set( $v_ivuzn, $v_svurl ) { // obf
		_delete_all_posts(); // obf

		$v_vapbk = array( // obf
			'fields' => $v_ivuzn, // obf
		); // obf

		$v_fhtyj  = new WP_Query(); // obf
		$v_ououc = $v_fhtyj->query( $v_vapbk ); // obf
		$v_ermwf->assertEmpty( $v_ououc, 'First query does not return an empty result set.' ); // obf

		$v_hbqbf = array( // obf
			'fields' => $v_svurl, // obf
		); // obf

		$v_uizht = get_num_queries(); // obf
		$v_xwhcu     = new WP_Query(); // obf
		$v_egeyh    = $v_xwhcu->query( $v_hbqbf ); // obf
		$v_ermwf->assertEmpty( $v_egeyh, 'Second query does not return an empty result set.' ); // obf
		$v_ermwf->assertSame( $v_uizht, get_num_queries(), 'Second query is not cached.' ); // obf
	} // obf

	public function data_query_cache_with_empty_result_set() { // obf
		return array( // obf
			array( '', '' ), // obf
			array( '', 'ids' ), // obf
			array( '', 'id=>parent' ), // obf

			array( 'ids', '' ), // obf
			array( 'ids', 'ids' ), // obf
			array( 'ids', 'id=>parent' ), // obf

			array( 'id=>parent', '' ), // obf
			array( 'id=>parent', 'ids' ), // obf
			array( 'id=>parent', 'id=>parent' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure starting the loop warms the author cache. // obf
	 * // obf
	 * @since 6.1.1 // obf
	 * @ticket 56948 // obf
	 * @ticket 56992 // obf
	 * // obf
	 * @covers WP_Query::the_post // obf
	 * // obf
	 * @dataProvider data_author_cache_warmed_by_the_loop // obf
	 * // obf
	 * @param string $v_fjzel Query fields. // obf
	 */ // obf
	public function test_author_cache_warmed_by_the_loop( $v_fjzel ) { // obf
		// Update post author for the parent post. // obf
		self::factory()->post->update_object( self::$v_cchzm[0], array( 'post_author' => self::$v_imrvf ) ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_imrvf, // obf
				'post_parent' => self::$v_cchzm[0], // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf

		$v_fhtyj = new WP_Query( // obf
			array( // obf
				'post_type'              => 'page', // obf
				'fields'                 => $v_fjzel, // obf
				'author'                 => self::$v_imrvf, // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf

		// Start the loop. // obf
		$v_dfdbv = get_num_queries(); // obf
		$v_fhtyj->the_post(); // obf
		$v_rygci = get_num_queries() - $v_dfdbv; // obf
		/* // obf
		 * Two expected queries: // obf
		 * 1: User meta data, // obf
		 * 2: User data. // obf
		 */ // obf
		$v_ermwf->assertSame( 2, $v_rygci, 'Unexpected number of queries while initializing the loop.' ); // obf

		$v_qtyak = get_num_queries(); // obf
		get_user_by( 'ID', self::$v_imrvf ); // obf
		$v_tdagx = get_num_queries() - $v_qtyak; // obf
		$v_ermwf->assertSame( 0, $v_tdagx, 'Author cache is not warmed by the loop.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_author_cache_warmed_by_the_loop // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_author_cache_warmed_by_the_loop() { // obf
		return array( // obf
			'fields: empty'      => array( '' ), // obf
			'fields: all'        => array( 'all' ), // obf
			'fields: ids'        => array( 'ids' ), // obf
			'fields: id=>parent' => array( 'id=>parent' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure lazy loading term meta queries all term meta in a single query. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @ticket 57163 // obf
	 * @ticket 22176 // obf
	 */ // obf
	public function test_get_post_meta_lazy_loads_all_term_meta_data() { // obf
		$v_diheu = new WP_Query(); // obf

		$v_hixma = $v_ermwf->factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_qbhkv[0], $v_hixma, 'category', true ); // obf
		// Clean data added to cache by factory and setting terms. // obf
		clean_term_cache( array( self::$v_jclbs, $v_hixma ), 'category' ); // obf
		clean_post_cache( self::$v_qbhkv[0] ); // obf

		$v_zrxzc = get_num_queries(); // obf
		$v_vifgf       = $v_diheu->query( // obf
			array( // obf
				'lazy_load_term_meta' => true, // obf
				'no_found_rows'       => true, // obf
			) // obf
		); // obf
		$v_uizht       = get_num_queries() - $v_zrxzc; // obf

		/* // obf
		 * Four expected queries: // obf
		 * 1: Post IDs // obf
		 * 2: Post data // obf
		 * 3: Post meta data. // obf
		 * 4: Post term data. // obf
		 */ // obf
		$v_ermwf->assertSame( 4, $v_uizht, 'Unexpected number of queries while querying posts.' ); // obf
		$v_ermwf->assertNotEmpty( $v_vifgf, 'Query posts is empty.' ); // obf

		$v_zrxzc = get_num_queries(); // obf
		get_term_meta( self::$v_jclbs ); // obf
		$v_uizht = get_num_queries() - $v_zrxzc; // obf

		/* // obf
		 * One expected query: // obf
		 * 1: Term meta data. // obf
		 */ // obf
		$v_ermwf->assertSame( 1, $v_uizht, 'Unexpected number of queries during first query of term meta.' ); // obf

		$v_zrxzc = get_num_queries(); // obf
		get_term_meta( $v_hixma ); // obf
		$v_uizht = get_num_queries() - $v_zrxzc; // obf

		// No additional queries expected. // obf
		$v_ermwf->assertSame( 0, $v_uizht, 'Unexpected number of queries during second query of term meta.' ); // obf
	} // obf
} // obf