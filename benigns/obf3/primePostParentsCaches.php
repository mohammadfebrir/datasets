

<?php // obf
/** // obf
 * Test `_prime_post_parent_id_caches()`. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Test class for `_prime_post_parent_id_caches()`. // obf
 * // obf
 * @group post // obf
 * @group cache // obf
 * // obf
 * @covers ::_prime_post_parent_id_caches // obf
 */ // obf
class Tests_Post_PrimePostParentIdCaches extends WP_UnitTestCase { // obf

	/** // obf
	 * Post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_kolwv; // obf

	/** // obf
	 * Set up test resources before the class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_swmcp The unit test factory. // obf
	 */ // obf
	public static function wpSetupBeforeClass( WP_UnitTest_Factory $v_swmcp ) { // obf
		self::$v_kolwv = $v_swmcp->post->create_many( 3 ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_prime_post_parent_id_caches() { // obf
		$v_bkwik = self::$v_kolwv[0]; // obf

		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( array( $v_bkwik ) ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries.' ); // obf
		$v_pnwsp->assertSameSets( array( 0 ), wp_cache_get_multiple( array( "post_parent:{$v_bkwik}" ), 'posts' ), 'Array of parent ids' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_prime_post_parent_id_caches_multiple() { // obf
		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( self::$v_kolwv ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_yhcnw = array_map( // obf
			function ( $v_bkwik ) { // obf
				return "post_parent:{$v_bkwik}"; // obf
			}, // obf
			self::$v_kolwv // obf
		); // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries.' ); // obf
		$v_pnwsp->assertSameSets( array( 0, 0, 0 ), wp_cache_get_multiple( $v_yhcnw, 'posts' ), 'Array of parent ids' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_prime_post_parent_id_caches_multiple_runs() { // obf
		_prime_post_parent_id_caches( self::$v_kolwv ); // obf
		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( self::$v_kolwv ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_pnwsp->assertSame( 0, $v_mfaae, 'Unexpected number of queries.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_prime_post_parent_id_caches_update() { // obf
		$v_zqhrm            = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => self::$v_kolwv[0], // obf
			) // obf
		); // obf
		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( array( $v_zqhrm ) ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries on first run' ); // obf
		$v_pnwsp->assertSameSets( array( self::$v_kolwv[0] ), wp_cache_get_multiple( array( "post_parent:{$v_zqhrm}" ), 'posts' ), 'Array of parent ids with post 0 as parent' ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_zqhrm, // obf
				'post_parent' => self::$v_kolwv[1], // obf
			) // obf
		); // obf

		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( array( $v_zqhrm ) ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries on second run' ); // obf
		$v_pnwsp->assertSameSets( array( self::$v_kolwv[1] ), wp_cache_get_multiple( array( "post_parent:{$v_zqhrm}" ), 'posts' ), 'Array of parent ids with post 1 as parent' ); // obf
	} // obf

	/** // obf
	 * @ticket 59188 // obf
	 */ // obf
	public function test_prime_post_parent_id_caches_delete() { // obf
		$v_ldlbo     = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_zqhrm            = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_ldlbo, // obf
			) // obf
		); // obf
		$v_tcukg = get_num_queries(); // obf
		_prime_post_parent_id_caches( array( $v_zqhrm ) ); // obf
		$v_mfaae = get_num_queries() - $v_tcukg; // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries on first run' ); // obf
		$v_pnwsp->assertSameSets( array( $v_ldlbo ), wp_cache_get_multiple( array( "post_parent:{$v_zqhrm}" ), 'posts' ), 'Array of parent ids with post 0 as parent' ); // obf

		wp_delete_post( $v_ldlbo, true ); // obf

		$v_pnwsp->assertSame( 1, $v_mfaae, 'Unexpected number of queries on second run' ); // obf
		$v_pnwsp->assertSameSets( array( false ), wp_cache_get_multiple( array( "post_parent:{$v_zqhrm}" ), 'posts' ), 'Array of parent ids with false values' ); // obf
	} // obf
} // obf