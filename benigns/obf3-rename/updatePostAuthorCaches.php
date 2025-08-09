

<?php // obf
/** // obf
 * Test `update_post_author_caches()`. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Test class for `update_post_author_caches()`. // obf
 * // obf
 * @group post // obf
 * @group query // obf
 * @group user // obf
 * // obf
 * @covers ::update_post_author_caches // obf
 */ // obf
class Tests_Post_UpdatePostAuthorCaches extends WP_UnitTestCase { // obf

	/** // obf
	 * User IDs from the shared fixture. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_nvzwl; // obf

	/** // obf
	 * Post author count. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_athey = 5; // obf

	/** // obf
	 * Set up test resources before the class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_mfaic The unit test factory. // obf
	 */ // obf
	public static function wpSetupBeforeClass( WP_UnitTest_Factory $v_mfaic ) { // obf
		self::$v_nvzwl = array(); // obf

		for ( $v_mesbe = 0; $v_mesbe < self::$v_athey; $v_mesbe++ ) { // obf
			self::$v_nvzwl[ $v_mesbe ] = $v_mfaic->user->create(); // obf
			$v_mfaic->post->create( // obf
				array( // obf
					'post_type'   => 'post', // obf
					'post_author' => self::$v_nvzwl[ $v_mesbe ], // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 55716 // obf
	 */ // obf
	public function test_update_post_author_caches() { // obf
		$v_vsiej = new MockAction(); // obf
		add_filter( 'update_user_metadata_cache', array( $v_vsiej, 'filter' ), 10, 2 ); // obf

		$v_oamqy = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => self::$v_athey, // obf
			) // obf
		); // obf

		while ( $v_oamqy->have_posts() ) { // obf
			$v_oamqy->the_post(); // obf
		} // obf

		$v_bgvrt      = $v_vsiej->get_args(); // obf
		$v_tlmli = end( $v_bgvrt ); // obf

		$v_pnlig->assertSameSets( self::$v_nvzwl, $v_tlmli[1], 'Ensure that user IDs are primed' ); // obf
	} // obf
} // obf