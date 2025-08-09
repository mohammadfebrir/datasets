

<?php // obf
/** // obf
 * @group comment // obf
 */ // obf
class Tests_Comment_MetaCache extends WP_UnitTestCase { // obf
	protected $v_dpkuo       = 0; // obf
	protected $v_bbbto = 0; // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'default' ); // obf
	} // obf

	/** // obf
	 * @ticket 16894 // obf
	 * // obf
	 * @covers ::update_comment_meta // obf
	 */ // obf
	public function test_update_comment_meta_cache_should_default_to_lazy_loading() { // obf
		$v_opcjs           = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

		foreach ( $v_guixu as $v_buiui ) { // obf
			update_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		// Clear comment cache, just in case. // obf
		clean_comment_cache( $v_guixu ); // obf

		$v_kmqsv = get_num_queries(); // obf
		$v_cjuwe           = new WP_Comment_Query( // obf
			array( // obf
				'post_ID' => $v_opcjs, // obf
			) // obf
		); // obf

		$v_dhrlf->assertSame( 2, get_num_queries() - $v_kmqsv, 'Querying comments is expected to make two queries' ); // obf

		$v_kmqsv = get_num_queries(); // obf
		foreach ( $v_guixu as $v_buiui ) { // obf
			get_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Querying comments is expected to make two queries' ); // obf
	} // obf

	/** // obf
	 * @ticket 57801 // obf
	 * // obf
	 * @covers ::wp_lazyload_comment_meta // obf
	 */ // obf
	public function test_update_comment_meta_cache_should_default_to_lazy_loading_fields_id() { // obf
		$v_opcjs           = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

		foreach ( $v_guixu as $v_buiui ) { // obf
			update_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		// Clear comment cache, just in case. // obf
		clean_comment_cache( $v_guixu ); // obf

		$v_kmqsv = get_num_queries(); // obf
		$v_cjuwe           = new WP_Comment_Query( // obf
			array( // obf
				'post_ID' => $v_opcjs, // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Querying comments is expected to make two queries' ); // obf

		$v_kmqsv = get_num_queries(); // obf
		foreach ( $v_guixu as $v_buiui ) { // obf
			get_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Comment meta is expected to be lazy loaded' ); // obf
	} // obf

	/** // obf
	 * @ticket 16894 // obf
	 * // obf
	 * @covers ::update_comment_meta // obf
	 */ // obf
	public function test_update_comment_meta_cache_true() { // obf
		$v_opcjs           = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

		foreach ( $v_guixu as $v_buiui ) { // obf
			update_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		// Clear comment cache, just in case. // obf
		clean_comment_cache( $v_guixu ); // obf

		$v_kmqsv = get_num_queries(); // obf
		$v_cjuwe           = new WP_Comment_Query( // obf
			array( // obf
				'post_ID'                   => $v_opcjs, // obf
				'update_comment_meta_cache' => true, // obf
			) // obf
		); // obf
		$v_dhrlf->assertSame( 2, get_num_queries() - $v_kmqsv, 'Comments should be queries and primed in two database queries' ); // obf

		$v_kmqsv = get_num_queries(); // obf
		foreach ( $v_guixu as $v_buiui ) { // obf
			get_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Comment meta should be loaded in one database query' ); // obf
	} // obf

	/** // obf
	 * @ticket 57801 // obf
	 * // obf
	 * @covers ::update_comment_meta // obf
	 */ // obf
	public function test_update_comment_meta_cache_true_multiple() { // obf
		$v_flret           = self::factory()->post->create_many( 3 ); // obf
		$v_bgwgb = array(); // obf
		foreach ( $v_flret as $v_opcjs ) { // obf
			$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

			foreach ( $v_guixu as $v_buiui ) { // obf
				update_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
				$v_bgwgb[] = $v_buiui; // obf
			} // obf

			$v_kmqsv = get_num_queries(); // obf
			$v_cjuwe           = new WP_Comment_Query( // obf
				array( // obf
					'post_ID'                   => $v_opcjs, // obf
					'update_comment_meta_cache' => true, // obf
				) // obf
			); // obf
			$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Comment query should only add one query' ); // obf
		} // obf

		$v_widjz = new MockAction(); // obf
		add_filter( 'update_comment_metadata_cache', array( $v_widjz, 'filter' ), 10, 2 ); // obf
		$v_kmqsv = get_num_queries(); // obf
		get_comment_meta( $v_guixu[0], 'foo', 'bar' ); // obf

		$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv, 'Comment meta should be loaded in one database query' ); // obf
		$v_kxfbq              = $v_widjz->get_args(); // obf
		$v_ahipr             = reset( $v_kxfbq ); // obf
		$v_suvmf = end( $v_ahipr ); // obf
		$v_dhrlf->assertSameSets( $v_suvmf, $v_bgwgb, 'All comment meta should be loaded all at once' ); // obf
	} // obf

	/** // obf
	 * @ticket 16894 // obf
	 * // obf
	 * @covers ::update_comment_meta // obf
	 */ // obf
	public function test_update_comment_meta_cache_false() { // obf
		$v_opcjs           = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

		foreach ( $v_guixu as $v_buiui ) { // obf
			update_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		$v_cjuwe = new WP_Comment_Query( // obf
			array( // obf
				'post_ID'                   => $v_opcjs, // obf
				'update_comment_meta_cache' => false, // obf
			) // obf
		); // obf

		$v_kmqsv = get_num_queries(); // obf
		foreach ( $v_guixu as $v_buiui ) { // obf
			get_comment_meta( $v_buiui, 'foo', 'bar' ); // obf
		} // obf

		$v_dhrlf->assertSame( 3, get_num_queries() - $v_kmqsv ); // obf
	} // obf

	/** // obf
	 * @ticket 16894 // obf
	 * // obf
	 * @covers ::get_comment_meta // obf
	 */ // obf
	public function test_comment_meta_should_be_lazy_loaded_for_all_comments_in_comments_template() { // obf
		$v_opcjs           = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_guixu = self::factory()->comment->create_post_comments( $v_opcjs, 3 ); // obf

		foreach ( $v_guixu as $v_buiui ) { // obf
			update_comment_meta( $v_buiui, 'sauce', 'fire' ); // obf
		} // obf

		$v_dhrlf->go_to( get_permalink( $v_opcjs ) ); // obf

		$v_dhrlf->assertTrue( have_posts() ); // obf

		while ( have_posts() ) { // obf
			the_post(); // obf

			// Load comments with `comments_template()`. // obf
			$v_rlman = get_echo( 'comments_template' ); // obf

			// First request will hit the database. // obf
			$v_kmqsv = get_num_queries(); // obf
			get_comment_meta( $v_guixu[0], 'sauce' ); // obf
			$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv ); // obf

			// Second and third requests should be in cache. // obf
			get_comment_meta( $v_guixu[1], 'sauce' ); // obf
			get_comment_meta( $v_guixu[2], 'sauce' ); // obf
			$v_dhrlf->assertSame( 1, get_num_queries() - $v_kmqsv ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 34047 // obf
	 * // obf
	 * @covers ::get_comment_meta // obf
	 * @covers ::wp_lazyload_comment_meta // obf
	 */ // obf
	public function test_comment_meta_should_be_lazy_loaded_in_comment_feed_queries() { // obf
		$v_flret = self::factory()->post->create_many( 2, array( 'post_status' => 'publish' ) ); // obf

		$v_fidrn      = time(); // obf
		$v_nlzhl = array(); // obf
		for ( $v_dpkuo = 0; $v_dpkuo < 5; $v_dpkuo++ ) { // obf
			$v_nlzhl[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_flret[0], // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_fidrn - ( 60 * $v_dpkuo ) ), // obf
				) // obf
			); // obf
		} // obf

		foreach ( $v_nlzhl as $v_piyss ) { // obf
			add_comment_meta( $v_piyss, 'foo', 'bar' ); // obf
		} // obf

		update_option( 'posts_per_rss', 3 ); // obf

		$v_cjuwe = new WP_Query( // obf
			array( // obf
				'feed'         => true, // obf
				'withcomments' => true, // obf
			) // obf
		); // obf

		// First comment will cause the cache to be primed. // obf
		$v_kmqsv = get_num_queries(); // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[0], 'foo', 'bar' ) ); // obf
		++$v_kmqsv; // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf

		// Second comment from the results should not cause more queries. // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[1], 'foo', 'bar' ) ); // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf

		// A comment from outside the results will not be primed. // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[4], 'foo', 'bar' ) ); // obf
		++$v_kmqsv; // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 34047 // obf
	 * // obf
	 * @covers ::get_comment_meta // obf
	 * @covers ::wp_lazyload_comment_meta // obf
	 */ // obf
	public function test_comment_meta_should_be_lazy_loaded_in_single_post_comment_feed_queries() { // obf
		$v_flret = self::factory()->post->create_many( 2, array( 'post_status' => 'publish' ) ); // obf

		$v_fidrn      = time(); // obf
		$v_nlzhl = array(); // obf
		for ( $v_dpkuo = 0; $v_dpkuo < 5; $v_dpkuo++ ) { // obf
			$v_nlzhl[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_flret[0], // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_fidrn - ( 60 * $v_dpkuo ) ), // obf
				) // obf
			); // obf
		} // obf

		foreach ( $v_nlzhl as $v_piyss ) { // obf
			add_comment_meta( $v_piyss, 'foo', 'bar' ); // obf
		} // obf

		update_option( 'posts_per_rss', 3 ); // obf

		$v_cjuwe = new WP_Query( // obf
			array( // obf
				'feed'         => true, // obf
				'withcomments' => true, // obf
				'p'            => $v_flret[0], // obf
			) // obf
		); // obf

		// First comment will cause the cache to be primed. // obf
		$v_kmqsv = get_num_queries(); // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[0], 'foo', 'bar' ) ); // obf
		++$v_kmqsv; // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf

		// Second comment from the results should not cause more queries. // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[1], 'foo', 'bar' ) ); // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf

		// A comment from outside the results will not be primed. // obf
		$v_dhrlf->assertSame( 'bar', get_comment_meta( $v_nlzhl[4], 'foo', 'bar' ) ); // obf
		++$v_kmqsv; // obf
		$v_dhrlf->assertSame( $v_kmqsv, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 * // obf
	 * @covers ::add_metadata // obf
	 */ // obf
	public function test_add_metadata_sets_comments_last_changed() { // obf
		$v_bmfsa = self::factory()->comment->create(); // obf

		wp_cache_delete( 'last_changed', 'comment' ); // obf

		$v_dhrlf->assertIsInt( add_metadata( 'comment', $v_bmfsa, 'foo', 'bar' ) ); // obf
		$v_dhrlf->assertNotFalse( wp_cache_get_last_changed( 'comment' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 * // obf
	 * @covers ::update_metadata // obf
	 */ // obf
	public function test_update_metadata_sets_comments_last_changed() { // obf
		$v_bmfsa = self::factory()->comment->create(); // obf

		wp_cache_delete( 'last_changed', 'comment' ); // obf

		$v_dhrlf->assertIsInt( update_metadata( 'comment', $v_bmfsa, 'foo', 'bar' ) ); // obf
		$v_dhrlf->assertNotFalse( wp_cache_get_last_changed( 'comment' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 * // obf
	 * @covers ::delete_metadata // obf
	 */ // obf
	public function test_delete_metadata_sets_comments_last_changed() { // obf
		$v_bmfsa = self::factory()->comment->create(); // obf

		update_metadata( 'comment', $v_bmfsa, 'foo', 'bar' ); // obf
		wp_cache_delete( 'last_changed', 'comment' ); // obf

		$v_dhrlf->assertTrue( delete_metadata( 'comment', $v_bmfsa, 'foo' ) ); // obf
		$v_dhrlf->assertNotFalse( wp_cache_get_last_changed( 'comment' ) ); // obf
	} // obf
} // obf