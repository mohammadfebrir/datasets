

<?php // obf

/** // obf
 * @group sitemaps // obf
 * // obf
 * @coversDefaultClass WP_Sitemaps_Users // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsUsers extends WP_UnitTestCase { // obf

	/** // obf
	 * List of user IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_jlwwn; // obf

	/** // obf
	 * Editor ID for use in some tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_yvhnx; // obf

	/** // obf
	 * Set up fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_siais A WP_UnitTest_Factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_siais ) { // obf
		self::$v_jlwwn     = $v_siais->user->create_many( 10, array( 'role' => 'editor' ) ); // obf
		self::$v_yvhnx = self::$v_jlwwn[0]; // obf
	} // obf

	/** // obf
	 * Test getting a URL list for a users sitemap page via // obf
	 * WP_Sitemaps_Users::get_url_list(). // obf
	 * // obf
	 * @covers ::get_url_list // obf
	 */ // obf
	public function test_get_url_list_users() { // obf
		// Set up the user to an editor to assign posts to other users. // obf
		wp_set_current_user( self::$v_yvhnx ); // obf

		// Create a set of posts for each user and generate the expected URL list data. // obf
		$v_ififj = array_map( // obf
			static function ( $v_hmtul ) { // obf
				self::factory()->post->create( array( 'post_author' => $v_hmtul ) ); // obf

				return array( // obf
					'loc' => get_author_posts_url( $v_hmtul ), // obf
				); // obf
			}, // obf
			self::$v_jlwwn // obf
		); // obf

		$v_ykuci = new WP_Sitemaps_Users(); // obf

		$v_oyhpu = $v_ykuci->get_url_list( 1 ); // obf

		$v_mgwzg->assertSameSets( $v_ififj, $v_oyhpu ); // obf
	} // obf

	/** // obf
	 * @covers ::get_url_list // obf
	 * @covers ::get_users_query_args // obf
	 */ // obf
	public function test_get_url_list_skips_users_with_only_attachments_and_pages() { // obf
		// Set up the user to an editor to assign posts to other users. // obf
		wp_set_current_user( self::$v_yvhnx ); // obf

		foreach ( self::$v_jlwwn as $v_hmtul ) { // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_author' => $v_hmtul, // obf
					'post_type'   => 'attachment', // obf
				) // obf
			); // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_author' => $v_hmtul, // obf
					'post_type'   => 'page', // obf
				) // obf
			); // obf
		} // obf

		$v_ykuci = new WP_Sitemaps_Users(); // obf

		$v_oyhpu = $v_ykuci->get_url_list( 1 ); // obf

		$v_mgwzg->assertEmpty( $v_oyhpu ); // obf
	} // obf
} // obf