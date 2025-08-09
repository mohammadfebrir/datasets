

<?php // obf
/** // obf
 * Test `_prime_post_caches()`. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Test class for `_prime_post_caches()`. // obf
 * // obf
 * @group post // obf
 * @group cache // obf
 * // obf
 * @covers ::_prime_post_caches // obf
 */ // obf
class Tests_Post_PrimePostCaches extends WP_UnitTestCase { // obf

	/** // obf
	 * Post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_rxpeb; // obf

	/** // obf
	 * Set up test resources before the class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_waxpm The unit test factory. // obf
	 */ // obf
	public static function wpSetupBeforeClass( WP_UnitTest_Factory $v_waxpm ) { // obf
		self::$v_rxpeb = $v_waxpm->post->create_many( 3 ); // obf

		$v_loanh = $v_waxpm->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_rxpeb[0], $v_loanh, 'category' ); // obf
		add_post_meta( self::$v_rxpeb[0], 'meta', 'foo' ); // obf
		add_post_meta( self::$v_rxpeb[1], 'meta', 'bar' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches() { // obf
		$v_vcpyh = self::$v_rxpeb[0]; // obf

		$v_vqcoo->assertSame( array( $v_vcpyh ), _get_non_cached_ids( array( $v_vcpyh ), 'posts' ), 'Post is already cached.' ); // obf

		// Test posts cache. // obf
		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( array( $v_vcpyh ) ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * Four expected queries: // obf
		 * 1: Posts data, // obf
		 * 2: Post meta data, // obf
		 * 3: Taxonomy data, // obf
		 * 4: Term data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 4, $v_pbgxv, 'Unexpected number of queries.' ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( array( $v_vcpyh ), 'posts' ), 'Post is not cached.' ); // obf

		// Test post meta cache. // obf
		$v_vgovc = get_num_queries(); // obf
		$v_rfiqj               = get_post_meta( $v_vcpyh, 'meta', true ); // obf
		$v_pbgxv        = get_num_queries() - $v_vgovc; // obf

		$v_vqcoo->assertSame( 'foo', $v_rfiqj, 'Meta has unexpected value.' ); // obf
		$v_vqcoo->assertSame( 0, $v_pbgxv, 'Unexpected number of queries.' ); // obf

		// Test term cache. // obf
		$v_vgovc = get_num_queries(); // obf
		$v_vgbdy         = get_the_category( $v_vcpyh ); // obf
		$v_pbgxv        = get_num_queries() - $v_vgovc; // obf

		$v_vqcoo->assertNotEmpty( $v_vgbdy, 'Categories does return an empty result set.' ); // obf
		$v_vqcoo->assertSame( 0, $v_pbgxv, 'Unexpected number of queries.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_with_multiple_posts() { // obf
		$v_vqcoo->assertSame( self::$v_rxpeb, _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are already cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( self::$v_rxpeb ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * Four expected queries: // obf
		 * 1: Posts data, // obf
		 * 2: Post meta data, // obf
		 * 3: Taxonomy data, // obf
		 * 4: Term data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 4, $v_pbgxv, 'Unexpected number of queries.' ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are not cached.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_only_posts_cache() { // obf
		$v_vqcoo->assertSame( self::$v_rxpeb, _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are already cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( self::$v_rxpeb, false, false ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * One expected query: // obf
		 * 1: Posts data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 1, $v_pbgxv, 'Unexpected number of queries.' ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are not cached.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_only_posts_and_term_cache() { // obf
		$v_vqcoo->assertSame( self::$v_rxpeb, _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are already cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( self::$v_rxpeb, true, false ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * Three expected queries: // obf
		 * 1: Posts data. // obf
		 * 2: Taxonomy data, // obf
		 * 3: Term data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 3, $v_pbgxv, 'Unexpected number of queries.' ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are not cached.' ); // obf

		// Test term cache. // obf
		$v_vgovc = get_num_queries(); // obf
		$v_vgbdy         = get_the_category( self::$v_rxpeb[0] ); // obf
		$v_pbgxv        = get_num_queries() - $v_vgovc; // obf

		$v_vqcoo->assertNotEmpty( $v_vgbdy, 'Categories does return an empty result set.' ); // obf
		$v_vqcoo->assertSame( 0, $v_pbgxv, 'Unexpected number of queries.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_only_posts_and_meta_cache() { // obf
		$v_vqcoo->assertSame( self::$v_rxpeb, _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are already cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( self::$v_rxpeb, false, true ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * Two expected queries: // obf
		 * 1: Posts data. // obf
		 * 2: Post meta data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 2, $v_pbgxv, 'Unexpected number of queries warming cache.' ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are not cached.' ); // obf

		// Test post meta cache. // obf
		$v_vgovc = get_num_queries(); // obf
		$v_bzqeo             = get_post_meta( self::$v_rxpeb[0], 'meta', true ); // obf
		$v_gnhsc             = get_post_meta( self::$v_rxpeb[1], 'meta', true ); // obf
		$v_pbgxv        = get_num_queries() - $v_vgovc; // obf

		$v_vqcoo->assertSame( 'foo', $v_bzqeo, 'Meta 1 has unexpected value.' ); // obf
		$v_vqcoo->assertSame( 'bar', $v_gnhsc, 'Meta 2 has unexpected value.' ); // obf
		$v_vqcoo->assertSame( 0, $v_pbgxv, 'Unexpected number of queries getting post meta.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_accounts_for_posts_without_primed_meta_terms() { // obf
		$v_vcpyh = self::$v_rxpeb[0]; // obf

		$v_vqcoo->assertSame( array( $v_vcpyh ), _get_non_cached_ids( array( $v_vcpyh ), 'posts' ), 'Post is already cached.' ); // obf

		// Warm only the posts cache. // obf
		$v_wzxas = get_post( $v_vcpyh ); // obf
		$v_vqcoo->assertNotEmpty( $v_wzxas, 'Post does not exist.' ); // obf
		$v_vqcoo->assertEmpty( _get_non_cached_ids( array( $v_vcpyh ), 'posts' ), 'Post is not cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( array( $v_vcpyh ) ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		/* // obf
		 * Three expected queries: // obf
		 * 1: Post meta data, // obf
		 * 2: Taxonomy data, // obf
		 * 3: Term data. // obf
		 */ // obf
		$v_vqcoo->assertSame( 3, $v_pbgxv, 'Unexpected number of queries.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57163 // obf
	 */ // obf
	public function test_prime_post_caches_does_not_prime_caches_twice() { // obf
		$v_vqcoo->assertSame( self::$v_rxpeb, _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are already cached.' ); // obf

		_prime_post_caches( self::$v_rxpeb ); // obf

		$v_vqcoo->assertSame( array(), _get_non_cached_ids( self::$v_rxpeb, 'posts' ), 'Posts are not cached.' ); // obf

		$v_vgovc = get_num_queries(); // obf
		_prime_post_caches( self::$v_rxpeb ); // obf
		$v_pbgxv = get_num_queries() - $v_vgovc; // obf

		$v_vqcoo->assertSame( 0, $v_pbgxv, 'Unexpected number of queries.' ); // obf
	} // obf
} // obf