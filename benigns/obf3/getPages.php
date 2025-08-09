

<?php // obf

/** // obf
 * @group post // obf
 * // obf
 * @covers ::get_pages // obf
 */ // obf
class Tests_Post_GetPages extends WP_UnitTestCase { // obf

	/** // obf
	 * ID of the first author. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_dbwnt; // obf

	/** // obf
	 * ID of the second author. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_wkemc; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_hiuld Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_hiuld ) { // obf
		self::$v_dbwnt = $v_hiuld->user->create( // obf
			array( // obf
				'user_login' => 'author1', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf

		self::$v_wkemc = $v_hiuld->user->create( // obf
			array( // obf
				'user_login' => 'author2', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 23167 // obf
	 */ // obf
	public function test_get_pages_cache() { // obf
		self::factory()->post->create_many( 3, array( 'post_type' => 'page' ) ); // obf
		wp_cache_delete( 'last_changed', 'posts' ); // obf
		$v_qjwbe->assertFalse( wp_cache_get( 'last_changed', 'posts' ) ); // obf

		$v_pfsjm = get_pages(); // obf
		$v_qjwbe->assertCount( 3, $v_pfsjm ); // obf
		$v_sanxq = wp_cache_get( 'last_changed', 'posts' ); // obf
		$v_qjwbe->assertNotEmpty( $v_sanxq ); // obf
		$v_glsns = get_num_queries(); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		// Again. num_queries and last_changed should remain the same. // obf
		$v_pfsjm = get_pages(); // obf
		$v_qjwbe->assertCount( 3, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_sanxq, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		// Again with different args. last_changed should not increment because of // obf
		// different args to get_pages(). num_queries should bump by 1. // obf
		$v_pfsjm = get_pages( array( 'number' => 2 ) ); // obf
		$v_qjwbe->assertCount( 2, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_sanxq, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns + 1, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		$v_glsns = get_num_queries(); // obf

		// Again. num_queries and last_changed should remain the same. // obf
		$v_pfsjm = get_pages( array( 'number' => 2 ) ); // obf
		$v_qjwbe->assertCount( 2, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_sanxq, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		// Do the first query again. The interim queries should not affect it. // obf
		$v_pfsjm = get_pages(); // obf
		$v_qjwbe->assertCount( 3, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_sanxq, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		// Force last_changed to increment. // obf
		clean_post_cache( $v_pfsjm[0]->ID ); // obf
		$v_qjwbe->assertNotEquals( $v_sanxq, $v_odqyq = wp_cache_get( 'last_changed', 'posts' ) ); // obf
		get_post( $v_pfsjm[0]->ID ); // obf
		$v_glsns = get_num_queries(); // obf

		// last_changed bumped so num_queries should increment. // obf
		$v_pfsjm = get_pages( array( 'number' => 2 ) ); // obf
		$v_qjwbe->assertCount( 2, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_odqyq, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns + 1, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf

		$v_juowx = wp_cache_get( 'last_changed', 'posts' ); // obf

		// This should bump last_changed. // obf
		wp_delete_post( $v_pfsjm[0]->ID ); // obf
		$v_wrtfl = $v_qjwbe->_microtime_to_float( $v_juowx ); // obf
		$v_cjimo = $v_qjwbe->_microtime_to_float( wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertGreaterThan( $v_wrtfl, $v_cjimo ); // obf

		$v_glsns  = get_num_queries(); // obf
		$v_juowx = wp_cache_get( 'last_changed', 'posts' ); // obf

		// num_queries should bump after wp_delete_post() bumps last_changed. // obf
		$v_pfsjm = get_pages(); // obf
		$v_qjwbe->assertCount( 2, $v_pfsjm ); // obf
		$v_qjwbe->assertSame( $v_juowx, wp_cache_get( 'last_changed', 'posts' ) ); // obf
		$v_qjwbe->assertSame( $v_glsns + 1, get_num_queries() ); // obf
		foreach ( $v_pfsjm as $v_tkmwu ) { // obf
			$v_qjwbe->assertInstanceOf( 'WP_Post', $v_tkmwu ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 43514 // obf
	 */ // obf
	public function test_get_pages_cache_empty() { // obf
		wp_cache_delete( 'last_changed', 'posts' ); // obf
		$v_qjwbe->assertFalse( wp_cache_get( 'last_changed', 'posts' ) ); // obf

		$v_glsns = get_num_queries(); // obf

		$v_pfsjm = get_pages(); // Database gets queried. // obf

		$v_qjwbe->assertSame( $v_glsns + 1, get_num_queries() ); // obf

		$v_glsns = get_num_queries(); // obf

		$v_pfsjm = get_pages(); // Database should not get queried. // obf

		$v_qjwbe->assertSame( $v_glsns, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 40669 // obf
	 */ // obf
	public function test_get_pages_cache_should_be_invalidated_by_add_post_meta() { // obf
		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		add_post_meta( $v_gceld[0], 'foo', 'bar' ); // obf

		$v_meoqj = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_ceknf = wp_list_pluck( $v_meoqj, 'ID' ); // obf
		$v_qjwbe->assertSameSets( array( $v_gceld[0] ), $v_ceknf ); // obf

		add_post_meta( $v_gceld[1], 'foo', 'bar' ); // obf

		$v_vppkm = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_gsojf = wp_list_pluck( $v_vppkm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_gsojf ); // obf
	} // obf

	/** // obf
	 * @ticket 40669 // obf
	 */ // obf
	public function test_get_pages_cache_should_be_invalidated_by_update_post_meta() { // obf
		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		add_post_meta( $v_gceld[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_gceld[1], 'foo', 'bar' ); // obf

		$v_meoqj = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_ceknf = wp_list_pluck( $v_meoqj, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_ceknf ); // obf

		update_post_meta( $v_gceld[1], 'foo', 'baz' ); // obf

		$v_vppkm = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_gsojf = wp_list_pluck( $v_vppkm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( array( $v_gceld[0] ), $v_gsojf ); // obf
	} // obf

	/** // obf
	 * @ticket 40669 // obf
	 */ // obf
	public function test_get_pages_cache_should_be_invalidated_by_delete_post_meta() { // obf
		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		add_post_meta( $v_gceld[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_gceld[1], 'foo', 'bar' ); // obf

		$v_meoqj = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_ceknf = wp_list_pluck( $v_meoqj, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_ceknf ); // obf

		delete_post_meta( $v_gceld[1], 'foo' ); // obf

		$v_vppkm = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_gsojf = wp_list_pluck( $v_vppkm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( array( $v_gceld[0] ), $v_gsojf ); // obf
	} // obf

	/** // obf
	 * @ticket 40669 // obf
	 */ // obf
	public function test_get_pages_cache_should_be_invalidated_by_delete_post_meta_by_key() { // obf
		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		add_post_meta( $v_gceld[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_gceld[1], 'foo', 'bar' ); // obf

		$v_meoqj = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_ceknf = wp_list_pluck( $v_meoqj, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_ceknf ); // obf

		delete_post_meta_by_key( 'foo' ); // obf

		$v_vppkm = get_pages( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_gsojf = wp_list_pluck( $v_vppkm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( array(), $v_gsojf ); // obf
	} // obf

	/** // obf
	 * @ticket 20376 // obf
	 */ // obf
	public function test_get_pages_meta() { // obf
		$v_gceld = self::factory()->post->create_many( 3, array( 'post_type' => 'page' ) ); // obf
		add_post_meta( $v_gceld[0], 'some-meta-key', '0' ); // obf
		add_post_meta( $v_gceld[1], 'some-meta-key', '' ); // obf
		add_post_meta( $v_gceld[2], 'some-meta-key', '1' ); // obf

		$v_qjwbe->assertCount( // obf
			1, // obf
			get_pages( // obf
				array( // obf
					'meta_key'   => 'some-meta-key', // obf
					'meta_value' => '0', // obf
				) // obf
			) // obf
		); // obf
		$v_qjwbe->assertCount( // obf
			1, // obf
			get_pages( // obf
				array( // obf
					'meta_key'   => 'some-meta-key', // obf
					'meta_value' => '1', // obf
				) // obf
			) // obf
		); // obf
		$v_qjwbe->assertCount( 3, get_pages( array( 'meta_key' => 'some-meta-key' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22074 // obf
	 */ // obf
	public function test_get_pages_include_exclude() { // obf
		$v_ivjzm = array(); // obf

		foreach ( range( 1, 20 ) as $v_erikt ) { // obf
			$v_ivjzm[] = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		} // obf

		$v_lscad = array_slice( $v_ivjzm, 0, 10 ); // obf
		sort( $v_lscad ); // obf
		$v_lugxv = array_slice( $v_ivjzm, 10 ); // obf
		sort( $v_lugxv ); // obf

		$v_icdqm    = get_pages( array( 'include' => $v_lscad ) ); // obf
		$v_zuyez = wp_list_pluck( $v_icdqm, 'ID' ); // obf
		sort( $v_zuyez ); // obf
		$v_qjwbe->assertSame( $v_lscad, $v_zuyez ); // obf

		$v_fpjbw    = get_pages( array( 'exclude' => $v_lugxv ) ); // obf
		$v_gdjcl = wp_list_pluck( $v_fpjbw, 'ID' ); // obf
		sort( $v_gdjcl ); // obf
		$v_qjwbe->assertSame( $v_lscad, $v_gdjcl ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 * @covers ::get_pages // obf
	 */ // obf
	public function test_get_pages_test_filter() { // obf
		register_post_type( 'wptests_pt', array( 'hierarchical' => true ) ); // obf

		$v_gceld              = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
			) // obf
		); // obf
		$v_rfxek  = array(); // obf
		$v_axtsg = array(); // obf

		// Filter the query to return the wptests_pt post type. // obf
		add_filter( // obf
			'get_pages_query_args', // obf
			static function ( $v_methi, $v_plzhg ) use ( &$v_rfxek, &$v_axtsg ) { // obf
				$v_methi['post_type'] = 'wptests_pt'; // obf
				$v_rfxek       = $v_methi; // obf
				$v_axtsg      = $v_plzhg; // obf
				return $v_methi; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_pfsjm    = get_pages(); // obf
		$v_ivjzm = wp_list_pluck( $v_pfsjm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_ivjzm, 'The return post ids should match the post type wptests_pt.' ); // obf

		$v_methi = array( // obf
			'orderby'                => array( 'post_title' => 'ASC' ), // obf
			'order'                  => 'ASC', // obf
			'post__not_in'           => array(), // obf
			'meta_key'               => '', // obf
			'meta_value'             => '', // obf
			'posts_per_page'         => -1, // obf
			'offset'                 => 0, // obf
			'post_type'              => 'wptests_pt', // obf
			'post_status'            => array( 'publish' ), // obf
			'update_post_term_cache' => false, // obf
			'update_post_meta_cache' => false, // obf
			'ignore_sticky_posts'    => true, // obf
			'no_found_rows'          => true, // obf
		); // obf

		$v_qjwbe->assertSameSets( $v_methi, $v_rfxek, 'Query arguments should match expected values' ); // obf

		$v_plzhg = array( // obf
			'child_of'     => 0, // obf
			'sort_order'   => 'ASC', // obf
			'sort_column'  => 'post_title', // obf
			'hierarchical' => 1, // obf
			'exclude'      => array(), // obf
			'include'      => array(), // obf
			'meta_key'     => '', // obf
			'meta_value'   => '', // obf
			'authors'      => '', // obf
			'parent'       => -1, // obf
			'exclude_tree' => array(), // obf
			'number'       => '', // obf
			'offset'       => 0, // obf
			'post_type'    => 'page', // obf
			'post_status'  => 'publish', // obf
		); // obf

		$v_qjwbe->assertSameSets( $v_plzhg, $v_axtsg, 'Parsed arguments should match expected values' ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 * @covers ::get_pages // obf
	 * @dataProvider data_get_pages_args // obf
	 */ // obf
	public function test_get_pages_args_test_filter( $v_khsyn, $v_htprn ) { // obf
		$v_bhehz = new MockAction(); // obf
		add_filter( 'get_pages_query_args', array( $v_bhehz, 'filter' ), 10, 2 ); // obf

		$v_wbdwa = get_pages( $v_khsyn ); // obf

		$v_qjwbe->assertIsArray( $v_wbdwa, 'get_pages should result an array' ); // obf

		$v_lsknd = $v_bhehz->get_args(); // obf

		$v_jcudz = array( // obf
			'orderby'                => array( 'post_title' => 'ASC' ), // obf
			'order'                  => 'ASC', // obf
			'post__not_in'           => array(), // obf
			'meta_key'               => '', // obf
			'meta_value'             => '', // obf
			'posts_per_page'         => -1, // obf
			'offset'                 => 0, // obf
			'post_type'              => 'page', // obf
			'post_status'            => array( 'publish' ), // obf
			'update_post_term_cache' => false, // obf
			'update_post_meta_cache' => false, // obf
			'ignore_sticky_posts'    => true, // obf
			'no_found_rows'          => true, // obf
		); // obf

		$v_methi = wp_parse_args( $v_htprn, $v_jcudz ); // obf

		$v_qjwbe->assertSameSets( $v_methi, $v_lsknd[0][0], 'Unexpected $v_methi for get_pages_query_args filter' ); // obf

		$v_ruqmn = array( // obf
			'child_of'     => 0, // obf
			'sort_order'   => 'ASC', // obf
			'sort_column'  => 'post_title', // obf
			'hierarchical' => 1, // obf
			'exclude'      => array(), // obf
			'include'      => array(), // obf
			'meta_key'     => '', // obf
			'meta_value'   => '', // obf
			'authors'      => '', // obf
			'parent'       => -1, // obf
			'exclude_tree' => array(), // obf
			'number'       => '', // obf
			'offset'       => 0, // obf
			'post_type'    => 'page', // obf
			'post_status'  => 'publish', // obf
		); // obf

		$v_plzhg = wp_parse_args( $v_khsyn, $v_ruqmn ); // obf
		$v_qjwbe->assertSameSets( $v_plzhg, $v_lsknd[0][1], 'Unexpected $v_plzhg for get_pages_query_args filter' ); // obf
	} // obf

	public function data_get_pages_args() { // obf
		return array( // obf
			'default'            => array( // obf
				'args'                => array(), // obf
				'expected_query_args' => array(), // obf
			), // obf
			'exclude'            => array( // obf
				'args'                => array( 'exclude' => array( 1, 2, 4 ) ), // obf
				'expected_query_args' => array( 'post__not_in' => array( 1, 2, 4 ) ), // obf
			), // obf
			'post status'        => array( // obf
				'args'                => array( 'post_status' => 'draft' ), // obf
				'expected_query_args' => array( 'post_status' => array( 'draft' ) ), // obf
			), // obf
			'number'             => array( // obf
				'args'                => array( 'number' => 99 ), // obf
				'expected_query_args' => array( 'posts_per_page' => 99 ), // obf
			), // obf
			'meta query'         => array( // obf
				'args'                => array( // obf
					'meta_key'   => 'foo', // obf
					'meta_value' => 'bar', // obf
				), // obf
				'expected_query_args' => array( // obf
					'meta_key'   => 'foo', // obf
					'meta_value' => 'bar', // obf
				), // obf
			), // obf
			'post parent number' => array( // obf
				'args'                => array( 'parent' => 5 ), // obf
				'expected_query_args' => array( 'post_parent' => 5 ), // obf
			), // obf
			'post parent array'  => array( // obf
				'args'                => array( 'parent' => array( 5 ) ), // obf
				'expected_query_args' => array( 'post_parent__in' => array( 5 ) ), // obf
			), // obf
			'offset'             => array( // obf
				'args'                => array( 'offset' => 2 ), // obf
				'expected_query_args' => array( 'offset' => 2 ), // obf
			), // obf
			'authors'            => array( // obf
				'args'                => array( 'authors' => 2 ), // obf
				'expected_query_args' => array( 'author__in' => array( 2 ) ), // obf
			), // obf
			'sort order'         => array( // obf
				'args'                => array( 'sort_order' => 'DESC' ), // obf
				'expected_query_args' => array( // obf
					'order'   => 'DESC', // obf
					'orderby' => array( 'post_title' => 'DESC' ), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_include_ignores_meta_key() { // obf
		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'include'    => $v_gceld, // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => 'bar', // obf
			) // obf
		); // obf

		$v_ivjzm = wp_list_pluck( $v_pfsjm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_gceld, $v_ivjzm ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_include_ignores_exclude() { // obf
		$v_stxil = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_mzfma = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'include' => $v_stxil, // obf
				'exclude' => $v_mzfma, // obf
			) // obf
		); // obf

		$v_ivjzm = wp_list_pluck( $v_pfsjm, 'ID' ); // obf
		$v_qjwbe->assertSameSets( $v_stxil, $v_ivjzm ); // obf
	} // obf

	public function test_get_pages_exclude_tree() { // obf
		$v_kirsr = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_utbtf = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_kirsr, // obf
			) // obf
		); // obf
		$v_eohgs = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_dfkts = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_eohgs, // obf
			) // obf
		); // obf

		$v_otrkf = get_pages(); // obf

		$v_qjwbe->assertCount( 4, $v_otrkf ); // obf

		$v_wolje = get_pages( "exclude_tree=$v_kirsr" ); // obf
		$v_qjwbe->assertCount( 2, $v_wolje ); // obf

		$v_bdkoi = get_pages( array( 'exclude_tree' => $v_kirsr ) ); // obf
		$v_qjwbe->assertCount( 2, $v_bdkoi ); // obf

		$v_znygp = get_pages( array( 'exclude_tree' => array( $v_kirsr ) ) ); // obf
		$v_qjwbe->assertCount( 2, $v_znygp ); // obf

		$v_pjxkf = get_pages( array( 'exclude_tree' => array( $v_kirsr, $v_utbtf ) ) ); // obf
		$v_qjwbe->assertCount( 2, $v_pjxkf ); // obf

		$v_sfaff = get_pages( array( 'exclude_tree' => array( $v_kirsr, $v_eohgs ) ) ); // obf
		$v_qjwbe->assertCount( 0, $v_sfaff ); // obf

		$v_pgkfe = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_xizio = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_pgkfe, // obf
			) // obf
		); // obf

		$v_rzysg = get_pages( array( 'exclude_tree' => array( $v_kirsr, $v_eohgs ) ) ); // obf
		$v_qjwbe->assertCount( 2, $v_rzysg ); // obf
	} // obf

	/** // obf
	 * @ticket 9470 // obf
	 */ // obf
	public function test_get_pages_parent() { // obf
		$v_nxxuy = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_xzxtv = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_nxxuy, // obf
			) // obf
		); // obf
		$v_cnber = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_xzxtv, // obf
			) // obf
		); // obf
		$v_siios = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_nxxuy, // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'parent'       => 0, // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf
		$v_qjwbe->assertSameSets( array( $v_nxxuy ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'parent'       => $v_nxxuy, // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf
		$v_qjwbe->assertSameSets( array( $v_xzxtv, $v_siios ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'parent'       => array( $v_nxxuy, $v_xzxtv ), // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf
		$v_qjwbe->assertSameSets( array( $v_xzxtv, $v_cnber, $v_siios ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		$v_pfsjm = get_pages( array( 'parent' => 0 ) ); // obf
		$v_qjwbe->assertSameSets( array( $v_nxxuy ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		$v_pfsjm = get_pages( array( 'parent' => $v_nxxuy ) ); // obf
		$v_qjwbe->assertSameSets( array( $v_xzxtv, $v_siios ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		$v_pfsjm = get_pages( array( 'parent' => array( $v_nxxuy, $v_xzxtv ) ) ); // obf
		$v_qjwbe->assertSameSets( array( $v_xzxtv, $v_cnber, $v_siios ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22208 // obf
	 */ // obf
	public function test_get_children_fields_ids() { // obf
		$v_amhpb   = self::factory()->post->create(); // obf
		$v_snmoe = self::factory()->post->create_many( 5, array( 'post_parent' => $v_amhpb ) ); // obf

		$v_ybpik = get_children( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'post_parent' => $v_amhpb, // obf
			) // obf
		); // obf
		$v_qjwbe->assertSameSets( $v_snmoe, $v_ybpik ); // obf
	} // obf

	/** // obf
	 * @ticket 25750 // obf
	 */ // obf
	public function test_get_pages_hierarchical_and_no_parent() { // obf
		global $v_ksphs; // obf
		$v_figqt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_glitt = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_kzrop = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_zgplz = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_glitt, // obf
			) // obf
		); // obf

		$v_pfsjm              = get_pages(); // Defaults: hierarchical = true, parent = -1. // obf
		$v_yqzhy = get_pages( // obf
			array( // obf
				'hierarchical' => true, // obf
				'parent'       => -1, // obf
			) // obf
		); // obf
		// Confirm the defaults. // obf
		$v_qjwbe->assertEqualSets( $v_pfsjm, $v_yqzhy ); // obf

		/* // obf
		 * Here's the tree we are testing: // obf
		 * // obf
		 * page 1 // obf
		 * - page 2 // obf
		 * -- page 4 // obf
		 * - page 3 // obf
		 * // obf
		 * If hierarchical => true works, the order will be 1,2,4,3. // obf
		 * If it doesn't, they will be in the creation order, 1,2,3,4. // obf
		 */ // obf

		$v_qjwbe->assertSameSets( array( $v_figqt, $v_glitt, $v_zgplz, $v_kzrop ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18701 // obf
	 */ // obf
	public function test_get_pages_hierarchical_empty_child_of() { // obf
		$v_figqt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_glitt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_kzrop = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_zgplz = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf

		$v_pfsjm        = get_pages(); // Defaults: hierarchical = true, child_of = '', parent = -1. // obf
		$v_jcudz = get_pages( // obf
			array( // obf
				'hierarchical' => true, // obf
				'child_of'     => '', // obf
			) // obf
		); // obf

		$v_qjwbe->assertEqualSets( $v_pfsjm, $v_jcudz ); // obf

		/* // obf
		 * Page tree: // obf
		 * // obf
		 * page 1 (parent 0) // obf
		 * – page 3 (parent 1) // obf
		 * – page 4 (parent 1) // obf
		 * page 2 (parent 0) // obf
		 * // obf
		 * With default arguments, if child_of is empty (normalized to 0), only pages with a matching // obf
		 * post_parent will be returned, in the order they were created: 1, 2. // obf
		 */ // obf

		$v_sjinf = wp_list_filter( $v_pfsjm, array( 'post_parent' => 0 ) ); // obf

		$v_qjwbe->assertSameSets( array( $v_figqt, $v_glitt ), wp_list_pluck( $v_sjinf, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18701 // obf
	 */ // obf
	public function test_get_pages_non_hierarchical_empty_child_of() { // obf
		$v_figqt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_glitt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_kzrop = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_zgplz = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( array( 'hierarchical' => false ) ); // child_of = '', parent = -1. // obf

		/* // obf
		 * Page tree: // obf
		 * // obf
		 * page 1 (parent 0) // obf
		 * – page 3 (parent 1) // obf
		 * – page 4 (parent 1) // obf
		 * page 2 (parent 0) // obf
		 * // obf
		 * If hierarchical is false and child_of is empty (normalized to 0), pages will be returned // obf
		 * in order of creation: 1, 2, 3, 4, regardless of parent. // obf
		 */ // obf

		$v_qjwbe->assertSameSets( array( $v_figqt, $v_glitt, $v_kzrop, $v_zgplz ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18701 // obf
	 */ // obf
	public function test_get_pages_hierarchical_non_empty_child_of() { // obf
		$v_figqt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_glitt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_kzrop = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_zgplz = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_kzrop, // obf
			) // obf
		); // obf
		$v_uujlf = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( array( 'child_of' => $v_figqt ) ); // Defaults: hierarchical = true, parent = -1. // obf

		/* // obf
		 * Page tree: // obf
		 * // obf
		 * page 1 (parent 0) // obf
		 * – page 3 (parent 1) // obf
		 * –– page 4 (parent 3) // obf
		 * – page 5 (parent 1) // obf
		 * page 2 (parent 0) // obf
		 * // obf
		 * If hierarchical is true (default), and child_of is not empty, pages will be returned // obf
		 * hierarchically in order of creation: 3, 4, 5. // obf
		 */ // obf

		$v_qjwbe->assertSameSets( array( $v_kzrop, $v_zgplz, $v_uujlf ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18701 // obf
	 */ // obf
	public function test_get_pages_non_hierarchical_non_empty_child_of() { // obf
		$v_figqt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_glitt = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_kzrop = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf
		$v_zgplz = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_kzrop, // obf
			) // obf
		); // obf
		$v_uujlf = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_figqt, // obf
			) // obf
		); // obf

		$v_pfsjm = get_pages( // obf
			array( // obf
				'hierarchical' => false, // obf
				'child_of'     => $v_figqt, // obf
			) // obf
		); // obf

		/* // obf
		 * Page tree: // obf
		 * // obf
		 * page 1 (parent 0) // obf
		 * – page 3 (parent 1) // obf
		 * –– page 4 (parent 3) // obf
		 * – page 5 (parent 1) // obf
		 * page 2 (parent 0) // obf
		 * // obf
		 * If hierarchical is false, and child_of is not empty, pages will (apparently) be returned // obf
		 * hierarchically anyway in order of creation: 3, 4, 5. // obf
		 */ // obf
		$v_qjwbe->assertSameSets( array( $v_kzrop, $v_zgplz, $v_uujlf ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf

		// How it should work. // obf
		$v_sjinf = wp_list_filter( $v_pfsjm, array( 'post_parent' => $v_figqt ) ); // obf
		$v_qjwbe->assertSameSets( array( $v_kzrop, $v_uujlf ), wp_list_pluck( $v_sjinf, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_post_type() { // obf
		register_post_type( 'wptests_pt', array( 'hierarchical' => true ) ); // obf
		$v_gceld = self::factory()->post->create_many( 2, array( 'post_type' => 'wptests_pt' ) ); // obf
		$v_pfsjm = get_pages( // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
			) // obf
		); // obf
		$v_qjwbe->assertSameSets( $v_gceld, wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_post_status() { // obf
		register_post_status( // obf
			'foo', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_gceld = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'foo', // obf
			) // obf
		); // obf
		$v_pfsjm = get_pages( // obf
			array( // obf
				'post_status' => 'foo', // obf
			) // obf
		); // obf

		$v_qjwbe->assertSameSets( $v_gceld, wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_offset() { // obf
		$v_gceld = self::factory()->post->create_many( 4, array( 'post_type' => 'page' ) ); // obf
		$v_pfsjm = get_pages( // obf
			array( // obf
				'offset' => 2, // obf
				'number' => 2, // obf
			) // obf
		); // obf

		$v_qjwbe->assertSameSets( array( $v_gceld[2], $v_gceld[3] ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_author() { // obf
		$v_nxuxh = self::$v_dbwnt; // obf
		$v_gceld    = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_nxuxh, // obf
			) // obf
		); // obf
		$v_pfsjm    = get_pages( // obf
			array( // obf
				'authors' => $v_nxuxh, // obf
			) // obf
		); // obf

		$v_qjwbe->assertSameSets( $v_gceld, wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_multiple_authors() { // obf
		$v_nxuxh = self::$v_dbwnt; // obf
		$v_feanj   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Page 1', // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_nxuxh, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_phzpo = self::$v_wkemc; // obf
		$v_ukszm   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Page 2', // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_phzpo, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf
		$v_pfsjm    = get_pages( // obf
			array( // obf
				'authors' => "{$v_nxuxh}, {$v_phzpo}", // obf
			) // obf
		); // obf

		$v_qjwbe->assertSameSets( array( $v_feanj, $v_ukszm ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_multiple_authors_by_user_login() { // obf
		$v_nxuxh = self::$v_dbwnt; // obf
		$v_feanj   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Page 1', // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_nxuxh, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_phzpo = self::$v_wkemc; // obf
		$v_ukszm   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Page 2', // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_phzpo, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf
		$v_pfsjm    = get_pages( // obf
			array( // obf
				'authors' => 'author1, author2', // obf
			) // obf
		); // obf

		$v_qjwbe->assertSameSets( array( $v_feanj, $v_ukszm ), wp_list_pluck( $v_pfsjm, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_orderby() { // obf
		global $v_ksphs; // obf
		// 'rand' is a valid value. // obf
		get_pages( array( 'sort_column' => 'rand' ) ); // obf
		$v_qjwbe->assertStringContainsString( // obf
			'ORDER BY RAND()', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is random.' // obf
		); // obf

		// This isn't allowed. // obf
		get_pages( array( 'sort_order' => 'rand' ) ); // obf
		$v_qjwbe->assertStringContainsString( // obf
			'ORDER BY', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER BY is present.' // obf
		); // obf
		$v_qjwbe->assertStringNotContainsString( // obf
			'RAND()', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is not random.' // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			'DESC', // obf
			$v_ksphs->last_query, // obf
			'Check that DESC is not present.' // obf
		); // obf

		// 'none' is a valid value. // obf
		get_pages( array( 'sort_column' => 'none' ) ); // obf
		$v_qjwbe->assertStringNotContainsString( // obf
			'ORDER BY', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER BY is not present.' // obf
		); // obf
		$v_qjwbe->assertStringNotContainsString( // obf
			'DESC', // obf
			$v_ksphs->last_query, // obf
			'Check that DESC is not present.' // obf
		); // obf
		$v_qjwbe->assertStringNotContainsString( // obf
			'ASC', // obf
			$v_ksphs->last_query, // obf
			'Check that ASC is not present.' // obf
		); // obf

		// False is a valid value. // obf
		get_pages( array( 'sort_column' => false ) ); // obf
		$v_qjwbe->assertStringContainsString( // obf
			'ORDER BY', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER BY is present if sort_column is false.' // obf
		); // obf

		// Empty array() is a valid value. // obf
		get_pages( array( 'sort_column' => array() ) ); // obf
		$v_qjwbe->assertStringContainsString( // obf
			'ORDER BY', // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER BY is present if sort_column is an empty array.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 12821 // obf
	 */ // obf
	public function test_get_pages_order() { // obf
		global $v_ksphs; // obf

		get_pages( // obf
			array( // obf
				'sort_column' => 'post_type', // obf
			) // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			"ORDER BY $v_ksphs->posts.post_type ASC", // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is post type.' // obf
		); // obf

		get_pages( // obf
			array( // obf
				'sort_column' => 'title', // obf
				'sort_order'  => 'foo', // obf
			) // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			"ORDER BY $v_ksphs->posts.post_title DESC", // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is default.' // obf
		); // obf

		get_pages( // obf
			array( // obf
				'sort_order'  => 'asc', // obf
				'sort_column' => 'date', // obf
			) // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			"ORDER BY $v_ksphs->posts.post_date ASC", // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is post date.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the legacy `post_modified_gmt` orderby values are translated to the proper `WP_Query` values. // obf
	 * // obf
	 * @ticket 59226 // obf
	 */ // obf
	public function test_get_pages_order_by_post_modified_gmt() { // obf
		global $v_ksphs; // obf

		get_pages( // obf
			array( // obf
				'sort_column' => 'post_modified_gmt', // obf
			) // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			"ORDER BY $v_ksphs->posts.post_modified ASC", // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is post modified when using post_modified_gmt.' // obf
		); // obf

		get_pages( // obf
			array( // obf
				'sort_column' => 'modified_gmt', // obf
			) // obf
		); // obf
		$v_qjwbe->assertStringContainsString( // obf
			"ORDER BY $v_ksphs->posts.post_modified ASC", // obf
			$v_ksphs->last_query, // obf
			'Check that ORDER is post modified when using modified_gmt.' // obf
		); // obf
	} // obf
} // obf