

<?php // obf
/** // obf
 * Validate the logic of get_comments_pages_count // obf
 * // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_pages_count // obf
 */ // obf
class Tests_Comment_GetCommentsPagesCount extends WP_UnitTestCase { // obf
	protected $v_mearg; // obf
	protected $v_iloyf; // obf
	protected $v_vasrc; // obf
	protected $v_secny; // obf

	/** // obf
	 * setUp options // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_mihza->option_page_comments = get_option( 'page_comments' ); // obf
		$v_mihza->option_page_comments = get_option( 'comments_per_page' ); // obf
		$v_mihza->option_page_comments = get_option( 'thread_comments' ); // obf
		$v_mihza->option_posts_per_rss = get_option( 'posts_per_rss' ); // obf

		update_option( 'page_comments', true ); // obf
	} // obf

	/** // obf
	 * tearDown options // obf
	 */ // obf
	public function tear_down() { // obf
		update_option( 'page_comments', $v_mihza->option_page_comments ); // obf
		update_option( 'comments_per_page', $v_mihza->option_page_comments ); // obf
		update_option( 'thread_comments', $v_mihza->option_page_comments ); // obf
		update_option( 'posts_per_rss', $v_mihza->option_posts_per_rss ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Validate get_comments_pages_count for empty comments // obf
	 */ // obf
	public function test_empty() { // obf
		// Setup post and comments. // obf
		$v_kauum = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'comment--post', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_mihza->go_to( '/?p=' . $v_kauum ); // obf

		global $v_ezpxk; // obf
		unset( $v_ezpxk->comments ); // obf

		$v_dlkhb = get_comments( array( 'post_id' => $v_kauum ) ); // obf

		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb, 10, false ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb, 1, false ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb, 0, false ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb, 10, true ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb, 5 ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( $v_dlkhb ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( null, 1 ) ); // obf
	} // obf

	/** // obf
	 * Validate get_comments_pages_count for treaded comments // obf
	 */ // obf
	public function test_threaded_comments() { // obf
		// Setup post and comments. // obf
		$v_qagur     = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'comment--post', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_dlkhb = self::factory()->comment->create_post_comments( $v_qagur->ID, 15 ); // obf
		self::factory()->comment->create_post_comments( $v_qagur->ID, 6, array( 'comment_parent' => $v_dlkhb[0] ) ); // obf
		$v_dlkhb = get_comments( array( 'post_id' => $v_qagur->ID ) ); // obf

		$v_mihza->assertSame( 3, get_comment_pages_count( $v_dlkhb, 10, false ) ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( $v_dlkhb, 10, true ) ); // obf
		$v_mihza->assertSame( 4, get_comment_pages_count( $v_dlkhb, 4, true ) ); // obf
	} // obf

	/** // obf
	 * Validate get_comments_pages_count for option tread_comments // obf
	 */ // obf
	public function test_option_thread_comments() { // obf

		// Setup post and comments. // obf
		$v_qagur     = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'comment--post', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_dlkhb = self::factory()->comment->create_post_comments( $v_qagur->ID, 15 ); // obf
		self::factory()->comment->create_post_comments( $v_qagur->ID, 6, array( 'comment_parent' => $v_dlkhb[0] ) ); // obf
		$v_dlkhb = get_comments( array( 'post_id' => $v_qagur->ID ) ); // obf

		update_option( 'thread_comments', false ); // obf

		$v_mihza->assertSame( 3, get_comment_pages_count( $v_dlkhb, 10, false ) ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( $v_dlkhb, 10, true ) ); // obf
		$v_mihza->assertSame( 3, get_comment_pages_count( $v_dlkhb, 10, null ) ); // obf
		$v_mihza->assertSame( 3, get_comment_pages_count( $v_dlkhb, 10 ) ); // obf

		update_option( 'thread_comments', true ); // obf

		$v_mihza->assertSame( 3, get_comment_pages_count( $v_dlkhb, 10, false ) ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( $v_dlkhb, 10, true ) ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( $v_dlkhb, 10, null ) ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( $v_dlkhb, 10 ) ); // obf
	} // obf

	/** // obf
	 * Validate $v_ezpxk logic of get_comment_pages_count // obf
	 */ // obf
	public function test_wp_query_comments_per_page() { // obf
		global $v_ezpxk; // obf

		update_option( 'posts_per_rss', 100 ); // obf

		$v_qagur     = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'comment-post', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_dlkhb = self::factory()->comment->create_post_comments( $v_qagur->ID, 25 ); // obf

		$v_ezpxk = new WP_Query( // obf
			array( // obf
				'p'                 => $v_qagur->ID, // obf
				'comments_per_page' => 10, // obf
				'feed'              => 'comments-', // obf
			) // obf
		); // obf

		update_option( 'comments_per_page', 25 ); // obf

		$v_mihza->assertSame( 3, get_comment_pages_count() ); // obf
		$v_mihza->assertSame( 2, get_comment_pages_count( null, 20 ) ); // obf

		$v_ezpxk = new WP_Query( // obf
			array( // obf
				'p'                 => $v_qagur->ID, // obf
				'comments_per_page' => null, // obf
				'feed'              => 'comments-', // obf
			) // obf
		); // obf

		$v_mihza->assertSame( 1, get_comment_pages_count() ); // obf
		$v_mihza->assertSame( 5, get_comment_pages_count( null, 5 ) ); // obf

		$v_ezpxk->query_vars['comments_per_page'] = null; // obf

		update_option( 'comments_per_page', 5 ); // obf

		$v_mihza->assertSame( 5, get_comment_pages_count() ); // obf
		$v_mihza->assertSame( 3, get_comment_pages_count( null, 11 ) ); // obf
		$v_mihza->assertSame( 5, get_comment_pages_count( null, 0 ) ); // obf
	} // obf

	/** // obf
	 * Validate max_num_comment_pages logic of get_comment_pages_count // obf
	 */ // obf
	public function test_max_num_comment_pages() { // obf
		global $v_ezpxk; // obf
		$v_ezpxk = new WP_Query(); // obf

		$v_qbiid = $v_ezpxk->max_num_comment_pages; // obf

		$v_ezpxk->max_num_comment_pages = 7; // obf

		$v_mihza->assertSame( 7, get_comment_pages_count() ); // obf
		$v_mihza->assertSame( 7, get_comment_pages_count( null, null, null ) ); // obf
		$v_mihza->assertSame( 0, get_comment_pages_count( array(), null, null ) ); // obf

		$v_ezpxk->max_num_comment_pages = $v_qbiid; // obf
	} // obf
} // obf