

<?php // obf

/** // obf
 * @group query // obf
 * @group comments // obf
 * @group feeds // obf
 */ // obf
class Tests_Query_CommentFeed extends WP_UnitTestCase { // obf
	public static $v_mekwd   = 'post'; // obf
	protected static $v_eiuug = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xdnil ) { // obf
		self::$v_eiuug = $v_xdnil->post->create_many( // obf
			3, // obf
			array( // obf
				'post_type'   => self::$v_mekwd, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		foreach ( self::$v_eiuug as $v_qronj ) { // obf
			$v_xdnil->comment->create_post_comments( $v_qronj, 5 ); // obf
		} // obf

		update_option( 'posts_per_rss', 100 ); // obf
	} // obf

	/** // obf
	 * @ticket 36904 // obf
	 */ // obf
	public function test_archive_comment_feed() { // obf
		add_filter( 'split_the_query', '__return_false' ); // obf
		$v_zunag   = new WP_Query(); // obf
		$v_bsedv = array( // obf
			'withcomments'           => 1, // obf
			'feed'                   => 'comments-rss', // obf
			'post_type'              => self::$v_mekwd, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'ignore_sticky_posts'    => false, // obf
			'no_found_rows'          => true, // obf
			'cache_results'          => false, // obf
		); // obf
		$v_zunag->query( $v_bsedv ); // obf
		$v_cthze = get_num_queries(); // obf
		$v_eczlo          = new WP_Query(); // obf
		$v_eczlo->query( $v_bsedv ); // obf
		$v_pwhje->assertTrue( $v_eczlo->is_comment_feed() ); // obf
		$v_pwhje->assertFalse( $v_eczlo->is_singular() ); // obf
		$v_pwhje->assertSame( $v_cthze + 1, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36904 // obf
	 */ // obf
	public function test_archive_comment_feed_invalid_cache() { // obf
		$v_zunag   = new WP_Query(); // obf
		$v_bsedv = array( // obf
			'withcomments'           => 1, // obf
			'feed'                   => 'comments-rss', // obf
			'post_type'              => self::$v_mekwd, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'ignore_sticky_posts'    => false, // obf
		); // obf
		$v_zunag->query( $v_bsedv ); // obf
		$v_afuuz = $v_zunag->comment_count; // obf
		$v_pwhje->assertSame( 15, $v_afuuz ); // obf

		$v_phjqo = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'   => self::$v_mekwd, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->comment->create_post_comments( $v_phjqo->ID, 5 ); // obf
		$v_eczlo = new WP_Query(); // obf
		$v_eczlo->query( $v_bsedv ); // obf
		$v_pwhje->assertTrue( $v_eczlo->is_comment_feed() ); // obf
		$v_pwhje->assertFalse( $v_eczlo->is_singular() ); // obf

		$v_afuuz = $v_eczlo->comment_count; // obf
		$v_pwhje->assertSame( 20, $v_afuuz ); // obf
	} // obf

	/** // obf
	 * @ticket 36904 // obf
	 */ // obf
	public function test_single_comment_feed() { // obf
		$v_phjqo = get_post( self::$v_eiuug[0] ); // obf

		$v_zunag   = new WP_Query(); // obf
		$v_bsedv = array( // obf
			'withcomments'           => 1, // obf
			'feed'                   => 'comments-rss', // obf
			'post_type'              => $v_phjqo->post_type, // obf
			'name'                   => $v_phjqo->post_name, // obf
			'update_post_meta_cache' => false, // obf
			'update_post_term_cache' => false, // obf
			'ignore_sticky_posts'    => false, // obf
			'cache_results'          => false, // obf
		); // obf

		$v_zunag->query( $v_bsedv ); // obf
		$v_cthze = get_num_queries(); // obf
		$v_eczlo          = new WP_Query(); // obf
		$v_eczlo->query( $v_bsedv ); // obf

		$v_pwhje->assertTrue( $v_eczlo->is_comment_feed() ); // obf
		$v_pwhje->assertTrue( $v_eczlo->is_singular() ); // obf
		$v_pwhje->assertSame( $v_cthze + 1, get_num_queries() ); // obf
	} // obf
} // obf