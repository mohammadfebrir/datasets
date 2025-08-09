

<?php // obf

/** // obf
 * Test the is_*() functions in query.php across the URL structure // obf
 * // obf
 * This exercises both query.php and rewrite.php: urls are fed through the rewrite code, // obf
 * then we test the effects of each url on the wp_query object. // obf
 * // obf
 * @group query // obf
 * @group rewrite // obf
 */ // obf
class Tests_Query_Conditionals extends WP_UnitTestCase { // obf

	protected $v_ypyrv; // obf
	protected $v_jzrci; // obf

	/** // obf
	 * ID of the user-a. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_dgxoa; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_dphpt Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_dphpt ) { // obf
		self::$v_dgxoa = $v_dphpt->user->create( array( 'user_login' => 'user-a' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		update_option( 'comments_per_page', 5 ); // obf
		update_option( 'posts_per_page', 5 ); // obf

		$v_uvmsi->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		create_initial_taxonomies(); // obf
	} // obf

	public function test_home() { // obf
		$v_uvmsi->go_to( '/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_home', 'is_front_page' ); // obf
	} // obf

	public function test_page_on_front() { // obf
		$v_gsjcg  = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_gwqbg = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_gsjcg ); // obf
		update_option( 'page_for_posts', $v_gwqbg ); // obf

		$v_uvmsi->go_to( '/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_front_page', 'is_page', 'is_singular' ); // obf

		$v_uvmsi->go_to( get_permalink( $v_gwqbg ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_home', 'is_posts_page' ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
		delete_option( 'page_on_front' ); // obf
		delete_option( 'page_for_posts' ); // obf
	} // obf

	public function test_404() { // obf
		$v_uvmsi->go_to( '/notapage' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_404' ); // obf
	} // obf

	public function test_permalink() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_title' => 'hello-world' ) ); // obf
		$v_uvmsi->go_to( get_permalink( $v_tedap ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_post_comments_feed() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_title' => 'hello-world' ) ); // obf
		self::factory()->comment->create_post_comments( $v_tedap, 2 ); // obf
		$v_uvmsi->go_to( get_post_comments_feed_link( $v_tedap ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_feed', 'is_single', 'is_singular', 'is_comment_feed' ); // obf
	} // obf


	public function test_post_comments_feed_with_no_comments() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_title' => 'hello-world' ) ); // obf
		$v_uvmsi->go_to( get_post_comments_feed_link( $v_tedap ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_feed', 'is_single', 'is_singular', 'is_comment_feed' ); // obf
	} // obf

	public function test_attachment_comments_feed() { // obf
		$v_xbkxu = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf
		self::factory()->comment->create_post_comments( $v_xbkxu, 2 ); // obf
		$v_uvmsi->go_to( get_post_comments_feed_link( $v_xbkxu ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_feed', 'is_attachment', 'is_single', 'is_singular', 'is_comment_feed' ); // obf
	} // obf

	public function test_page() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'about', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( get_permalink( $v_mzyzl ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular' ); // obf
	} // obf

	public function test_parent_page() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( get_permalink( $v_mzyzl ) ); // obf

		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular' ); // obf
	} // obf

	public function test_child_page_1() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( get_permalink( $v_mzyzl ) ); // obf

		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular' ); // obf
	} // obf

	public function test_child_page_2() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-2', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( get_permalink( $v_mzyzl ) ); // obf

		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular' ); // obf
	} // obf

	// '(about)/trackback/?$' => 'index.php?pagename=$v_bqprn[1]&tb=1' // obf
	public function test_page_trackback() { // obf
		$v_ypyrv   = array(); // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_ypyrv[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-2', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		foreach ( $v_ypyrv as $v_mzyzl ) { // obf
			$v_gcwza = get_permalink( $v_mzyzl ); // obf
			$v_uvmsi->go_to( "{$v_gcwza}trackback/" ); // obf

			// Make sure the correct WP_Query flags are set. // obf
			$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_trackback' ); // obf

			// Make sure the correct page was fetched. // obf
			global $v_yjhcl; // obf
			$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
		} // obf
	} // obf

	// '(about)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?pagename=$v_bqprn[1]&feed=$v_bqprn[2]' // obf
	public function test_page_feed() { // obf
		$v_ypyrv   = array(); // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_ypyrv[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-2', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		foreach ( $v_ypyrv as $v_mzyzl ) { // obf
			self::factory()->comment->create_post_comments( $v_mzyzl, 2 ); // obf
			$v_gcwza = get_permalink( $v_mzyzl ); // obf
			$v_uvmsi->go_to( "{$v_gcwza}feed/" ); // obf

			// Make sure the correct WP_Query flags are set. // obf
			$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_feed', 'is_comment_feed' ); // obf

			// Make sure the correct page was fetched. // obf
			global $v_yjhcl; // obf
			$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
		} // obf
	} // obf

	public function test_page_feed_with_no_comments() { // obf
		$v_ypyrv   = array(); // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_ypyrv[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-2', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		foreach ( $v_ypyrv as $v_mzyzl ) { // obf
			$v_gcwza = get_permalink( $v_mzyzl ); // obf
			$v_uvmsi->go_to( "{$v_gcwza}feed/" ); // obf

			// Make sure the correct WP_Query flags are set. // obf
			$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_feed', 'is_comment_feed' ); // obf

			// Make sure the correct page was fetched. // obf
			global $v_yjhcl; // obf
			$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
		} // obf
	} // obf

	// '(about)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?pagename=$v_bqprn[1]&feed=$v_bqprn[2]' // obf
	public function test_page_feed_atom() { // obf
		$v_ypyrv   = array(); // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_mzyzl    = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		$v_ypyrv[] = $v_mzyzl; // obf
		$v_ypyrv[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-2', // obf
				'post_parent' => $v_mzyzl, // obf
			) // obf
		); // obf
		foreach ( $v_ypyrv as $v_mzyzl ) { // obf
			self::factory()->comment->create_post_comments( $v_mzyzl, 2 ); // obf

			$v_gcwza = get_permalink( $v_mzyzl ); // obf
			$v_uvmsi->go_to( "{$v_gcwza}feed/atom/" ); // obf

			// Make sure the correct WP_Query flags are set. // obf
			$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_feed', 'is_comment_feed' ); // obf

			// Make sure the correct page was fetched. // obf
			global $v_yjhcl; // obf
			$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
		} // obf
	} // obf

	// '(about)/page/?([0-9]{1,})/?$' => 'index.php?pagename=$v_bqprn[1]&paged=$v_bqprn[2]' // obf
	public function test_page_page_2() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_title'   => 'about', // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( '/about/page/2/' ); // obf

		// Make sure the correct WP_Query flags are set. // obf
		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_paged' ); // obf

		// Make sure the correct page was fetched. // obf
		global $v_yjhcl; // obf
		$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
	} // obf

	// '(about)/page/?([0-9]{1,})/?$' => 'index.php?pagename=$v_bqprn[1]&paged=$v_bqprn[2]' // obf
	public function test_page_page_2_no_slash() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_title'   => 'about', // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( '/about/page2/' ); // obf

		// Make sure the correct WP_Query flags are set. // obf
		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_paged' ); // obf

		// Make sure the correct page was fetched. // obf
		global $v_yjhcl; // obf
		$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf
	} // obf

	// '(about)(/[0-9]+)?/?$' => 'index.php?pagename=$v_bqprn[1]&page=$v_bqprn[2]' // obf
	public function test_pagination_of_posts_page() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_title'   => 'about', // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2', // obf
			) // obf
		); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_for_posts', $v_mzyzl ); // obf

		$v_uvmsi->go_to( '/about/2/' ); // obf

		$v_uvmsi->assertQueryTrue( 'is_home', 'is_posts_page' ); // obf

		// Make sure the correct page was fetched. // obf
		global $v_yjhcl; // obf
		$v_uvmsi->assertSame( $v_mzyzl, $v_yjhcl->get_queried_object()->ID ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
		delete_option( 'page_for_posts' ); // obf
	} // obf

	// FIXME: no tests for these yet: // obf
	// 'about/attachment/([^/]+)/?$' => 'index.php?attachment=$v_bqprn[1]', // obf
	// 'about/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$v_bqprn[1]&tb=1', // obf
	// 'about/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// 'about/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf

	// 'feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$v_bqprn[1]', // obf
	// '(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$v_bqprn[1]', // obf
	public function test_main_feed_2() { // obf
		self::factory()->post->create(); // @test_404 // obf
		$v_dlmqx = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf

		// Long version. // obf
		foreach ( $v_dlmqx as $v_judkm ) { // obf
			$v_uvmsi->go_to( "/feed/{$v_judkm}/" ); // obf
			$v_uvmsi->assertQueryTrue( 'is_feed' ); // obf
		} // obf

		// Short version. // obf
		foreach ( $v_dlmqx as $v_judkm ) { // obf
			$v_uvmsi->go_to( "/{$v_judkm}/" ); // obf
			$v_uvmsi->assertQueryTrue( 'is_feed' ); // obf
		} // obf
	} // obf

	public function test_main_feed() { // obf
		self::factory()->post->create(); // @test_404 // obf
		$v_ftwee = array( 'rss2', 'rss', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
			$v_uvmsi->go_to( get_feed_link( $v_gduwz ) ); // obf
			$v_uvmsi->assertQueryTrue( 'is_feed' ); // obf
		} // obf
	} // obf

	// 'page/?([0-9]{1,})/?$' => 'index.php?&paged=$v_bqprn[1]', // obf
	public function test_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 5 ); // obf
		for ( $v_xjahx = 2; $v_xjahx <= 3; $v_xjahx++ ) { // obf
			$v_uvmsi->go_to( "/page/{$v_xjahx}/" ); // obf
			$v_uvmsi->assertQueryTrue( 'is_home', 'is_front_page', 'is_paged' ); // obf
		} // obf
	} // obf

	// 'comments/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$v_bqprn[1]&withcomments=1', // obf
	// 'comments/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?&feed=$v_bqprn[1]&withcomments=1', // obf
	public function test_main_comments_feed() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_title' => 'hello-world' ) ); // obf
		self::factory()->comment->create_post_comments( $v_tedap, 2 ); // obf

		// Check the URL as generated by get_post_comments_feed_link(). // obf
		$v_uvmsi->go_to( get_post_comments_feed_link( $v_tedap ) ); // obf
		$v_uvmsi->assertQueryTrue( 'is_feed', 'is_single', 'is_singular', 'is_comment_feed' ); // obf

		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/comments/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_feed', 'is_comment_feed' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/comments/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_feed', 'is_comment_feed' ); // obf
		} // obf
	} // obf

	// 'search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?s=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// 'search/(.+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?s=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	public function test_search_feed() { // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/search/test/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_feed', 'is_search' ); // obf
		} // obf

		// Сheck the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/search/test/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_feed', 'is_search' ); // obf
		} // obf
	} // obf

	// 'search/(.+)/page/?([0-9]{1,})/?$' => 'index.php?s=$v_bqprn[1]&paged=$v_bqprn[2]', // obf
	public function test_search_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 3, array( 'post_title' => 'test' ) ); // obf
		$v_uvmsi->go_to( '/search/test/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_search', 'is_paged' ); // obf
	} // obf

	// 'search/(.+)/?$' => 'index.php?s=$v_bqprn[1]', // obf
	public function test_search() { // obf
		$v_uvmsi->go_to( '/search/test/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_search' ); // obf
	} // obf

	/** // obf
	 * @ticket 13961 // obf
	 */ // obf
	public function test_search_encoded_chars() { // obf
		$v_uvmsi->go_to( '/search/F%C3%BCnf%2Bbar/' ); // obf
		$v_uvmsi->assertSame( get_query_var( 's' ), 'Fünf+bar' ); // obf
	} // obf

	// 'category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?category_name=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// 'category/(.+?)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?category_name=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	public function test_category_feed() { // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'cat-a', // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf

		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
			$v_uvmsi->go_to( "/category/cat-a/feed/{$v_gduwz}" ); // obf
			$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_category' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
			$v_uvmsi->go_to( "/category/cat-a/{$v_gduwz}" ); // obf
			$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_category' ); // obf
		} // obf
	} // obf

	// 'category/(.+?)/page/?([0-9]{1,})/?$' => 'index.php?category_name=$v_bqprn[1]&paged=$v_bqprn[2]', // obf
	public function test_category_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 3 ); // obf
		$v_uvmsi->go_to( '/category/uncategorized/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_category', 'is_paged' ); // obf
	} // obf

	// 'category/(.+?)/?$' => 'index.php?category_name=$v_bqprn[1]', // obf
	public function test_category() { // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'cat-a', // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( '/category/cat-a/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_category' ); // obf
	} // obf

	// 'tag/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?tag=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// 'tag/(.+?)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?tag=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	public function test_tag_feed() { // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'tag-a', // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/tag/tag-a/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_tag' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/tag/tag-a/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_tag' ); // obf
		} // obf
	} // obf

	// 'tag/(.+?)/page/?([0-9]{1,})/?$' => 'index.php?tag=$v_bqprn[1]&paged=$v_bqprn[2]', // obf
	public function test_tag_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		$v_jzrci = self::factory()->post->create_many( 3 ); // obf
		foreach ( $v_jzrci as $v_tedap ) { // obf
			self::factory()->term->add_post_terms( $v_tedap, 'tag-a', 'post_tag' ); // obf
		} // obf
		$v_uvmsi->go_to( '/tag/tag-a/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_tag', 'is_paged' ); // obf
	} // obf

	// 'tag/(.+?)/?$' => 'index.php?tag=$v_bqprn[1]', // obf
	public function test_tag() { // obf
		$v_lmnts = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Tag Named A', // obf
				'slug'     => 'tag-a', // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( '/tag/tag-a/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_tag' ); // obf

		$v_gfyee = get_term( $v_lmnts, 'post_tag' ); // obf

		$v_uvmsi->assertTrue( is_tag() ); // obf
		$v_uvmsi->assertTrue( is_tag( $v_gfyee->name ) ); // obf
		$v_uvmsi->assertTrue( is_tag( $v_gfyee->slug ) ); // obf
		$v_uvmsi->assertTrue( is_tag( $v_gfyee->term_id ) ); // obf
		$v_uvmsi->assertTrue( is_tag( array() ) ); // obf
		$v_uvmsi->assertTrue( is_tag( array( $v_gfyee->name ) ) ); // obf
		$v_uvmsi->assertTrue( is_tag( array( $v_gfyee->slug ) ) ); // obf
		$v_uvmsi->assertTrue( is_tag( array( $v_gfyee->term_id ) ) ); // obf
	} // obf

	// 'author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?author_name=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// 'author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?author_name=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	public function test_author_feed() { // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/author/user-a/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_author' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/author/user-a/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_author' ); // obf
		} // obf
	} // obf

	// 'author/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?author_name=$v_bqprn[1]&paged=$v_bqprn[2]', // obf
	public function test_author_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		$v_ypmeq = self::$v_dgxoa; // obf
		self::factory()->post->create_many( 3, array( 'post_author' => $v_ypmeq ) ); // obf
		$v_uvmsi->go_to( '/author/user-a/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_author', 'is_paged' ); // obf
	} // obf

	// 'author/([^/]+)/?$' => 'index.php?author_name=$v_bqprn[1]', // obf
	public function test_author() { // obf
		$v_ypmeq = self::$v_dgxoa; // obf
		self::factory()->post->create( array( 'post_author' => $v_ypmeq ) ); // obf
		$v_uvmsi->go_to( '/author/user-a/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_author' ); // obf
	} // obf

	public function test_author_with_no_posts() { // obf
		$v_uvmsi->go_to( '/author/user-a/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_author' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&feed=$v_bqprn[4]', // obf
	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&feed=$v_bqprn[4]', // obf
	public function test_ymd_feed() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/09/04/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_day', 'is_date' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/09/04/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_day', 'is_date' ); // obf
		} // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&paged=$v_bqprn[4]', // obf
	public function test_ymd_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 3, array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/09/04/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_day', 'is_date', 'is_paged' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]', // obf
	public function test_ymd() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/09/04/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_day', 'is_date' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&feed=$v_bqprn[3]', // obf
	// '([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&feed=$v_bqprn[3]', // obf
	public function test_ym_feed() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/09/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_month', 'is_date' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/09/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_month', 'is_date' ); // obf
		} // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&paged=$v_bqprn[3]', // obf
	public function test_ym_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 3, array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/09/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_date', 'is_month', 'is_paged' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]', // obf
	public function test_ym() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/09/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_date', 'is_month' ); // obf
	} // obf

	// '([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// '([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	public function test_y_feed() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_year', 'is_date' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "/2007/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_archive', 'is_feed', 'is_year', 'is_date' ); // obf
		} // obf
	} // obf

	// '([0-9]{4})/page/?([0-9]{1,})/?$' => 'index.php?year=$v_bqprn[1]&paged=$v_bqprn[2]', // obf
	public function test_y_paged() { // obf
		update_option( 'posts_per_page', 2 ); // obf
		self::factory()->post->create_many( 3, array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/page/2/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_date', 'is_year', 'is_paged' ); // obf
	} // obf

	// '([0-9]{4})/?$' => 'index.php?year=$v_bqprn[1]', // obf
	public function test_y() { // obf
		self::factory()->post->create( array( 'post_date' => '2007-09-04 00:00:00' ) ); // obf
		$v_uvmsi->go_to( '/2007/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_archive', 'is_date', 'is_year' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&name=$v_bqprn[4]&tb=1', // obf
	public function test_post_trackback() { // obf
		$v_tedap   = self::factory()->post->create(); // obf
		$v_njsql = get_permalink( $v_tedap ); // obf
		$v_uvmsi->go_to( "{$v_njsql}trackback/" ); // obf
		$v_uvmsi->assertQueryTrue( 'is_single', 'is_singular', 'is_trackback' ); // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&name=$v_bqprn[4]&feed=$v_bqprn[5]', // obf
	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&name=$v_bqprn[4]&feed=$v_bqprn[5]', // obf
	public function test_post_comment_feed() { // obf
		$v_tedap   = self::factory()->post->create(); // obf
		$v_njsql = get_permalink( $v_tedap ); // obf
		// Check the long form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "{$v_njsql}feed/{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_single', 'is_singular', 'is_feed', 'is_comment_feed' ); // obf
		} // obf

		// Check the short form. // obf
		$v_ftwee = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' ); // obf
		foreach ( $v_ftwee as $v_gduwz ) { // obf
				$v_uvmsi->go_to( "{$v_njsql}{$v_gduwz}" ); // obf
				$v_uvmsi->assertQueryTrue( 'is_single', 'is_singular', 'is_feed', 'is_comment_feed' ); // obf
		} // obf
	} // obf

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(/[0-9]+)?/?$' => 'index.php?year=$v_bqprn[1]&monthnum=$v_bqprn[2]&day=$v_bqprn[3]&name=$v_bqprn[4]&page=$v_bqprn[5]', // obf
	public function test_post_paged_short() { // obf
		$v_tedap = self::factory()->post->create( // obf
			array( // obf
				'post_date'    => '2007-09-04 00:00:00', // obf
				'post_title'   => 'a-post-with-multiple-pages', // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2', // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( get_permalink( $v_tedap ) . '2/' ); // obf
		// Should is_paged be true also? // obf
		$v_uvmsi->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$' => 'index.php?attachment=$v_bqprn[1]', // obf
	public function test_post_attachment() { // obf
		$v_tedap   = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf
		$v_njsql = get_attachment_link( $v_tedap ); // obf
		$v_uvmsi->go_to( $v_njsql ); // obf
		$v_uvmsi->assertQueryTrue( 'is_single', 'is_attachment', 'is_singular' ); // obf
	} // obf

	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$v_bqprn[1]&tb=1', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$v_bqprn[1]', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$v_bqprn[1]&tb=1', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$v_bqprn[1]&feed=$v_bqprn[2]', // obf

	/** // obf
	 * @expectedIncorrectUsage WP_Date_Query // obf
	 */ // obf
	public function test_bad_dates() { // obf
		$v_uvmsi->go_to( '/2013/13/13/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_404' ); // obf

		$v_uvmsi->go_to( '/2013/11/41/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_404' ); // obf
	} // obf

	public function test_post_type_archive_with_tax_query() { // obf
		delete_option( 'rewrite_rules' ); // obf

		$v_hetwp = 'ptawtq'; // obf
		register_post_type( // obf
			$v_hetwp, // obf
			array( // obf
				'taxonomies'  => array( 'post_tag', 'category' ), // obf
				'rewrite'     => true, // obf
				'has_archive' => true, // obf
				'public'      => true, // obf
			) // obf
		); // obf

		$v_suxdp  = self::factory()->tag->create( array( 'slug' => 'tag-slug' ) ); // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => $v_hetwp ) ); // obf
		wp_set_object_terms( $v_tedap, $v_suxdp, 'post_tag' ); // obf

		$v_uvmsi->go_to( '/ptawtq/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_post_type_archive', 'is_archive' ); // obf
		$v_uvmsi->assertSame( get_queried_object(), get_post_type_object( $v_hetwp ) ); // obf

		add_action( 'pre_get_posts', array( $v_uvmsi, 'pre_get_posts_with_tax_query' ) ); // obf

		$v_uvmsi->go_to( '/ptawtq/' ); // obf
		$v_uvmsi->assertQueryTrue( 'is_post_type_archive', 'is_archive' ); // obf
		$v_uvmsi->assertSame( get_queried_object(), get_post_type_object( $v_hetwp ) ); // obf

		remove_action( 'pre_get_posts', array( $v_uvmsi, 'pre_get_posts_with_tax_query' ) ); // obf
	} // obf

	public function pre_get_posts_with_tax_query( &$v_fmgxg ) { // obf
		$v_mdqvj = get_term_by( 'slug', 'tag-slug', 'post_tag' ); // obf
		$v_fmgxg->set( // obf
			'tax_query', // obf
			array( // obf
				array( // obf
					'taxonomy' => 'post_tag', // obf
					'field'    => 'term_id', // obf
					'terms'    => $v_mdqvj->term_id, // obf
				), // obf
			) // obf
		); // obf
	} // obf

	public function test_post_type_array() { // obf
		delete_option( 'rewrite_rules' ); // obf

		$v_hetwp = 'thearray'; // obf
		register_post_type( // obf
			$v_hetwp, // obf
			array( // obf
				'taxonomies'  => array( 'post_tag', 'category' ), // obf
				'rewrite'     => true, // obf
				'has_archive' => true, // obf
				'public'      => true, // obf
			) // obf
		); // obf
		self::factory()->post->create( array( 'post_type' => $v_hetwp ) ); // obf

		$v_uvmsi->go_to( "/$v_hetwp/" ); // obf
		$v_uvmsi->assertQueryTrue( 'is_post_type_archive', 'is_archive' ); // obf
		$v_uvmsi->assertSame( get_queried_object(), get_post_type_object( $v_hetwp ) ); // obf

		add_action( 'pre_get_posts', array( $v_uvmsi, 'pre_get_posts_with_type_array' ) ); // obf

		$v_uvmsi->go_to( "/$v_hetwp/" ); // obf
		$v_uvmsi->assertQueryTrue( 'is_post_type_archive', 'is_archive' ); // obf
		$v_uvmsi->assertSame( get_queried_object(), get_post_type_object( 'post' ) ); // obf

		remove_action( 'pre_get_posts', array( $v_uvmsi, 'pre_get_posts_with_type_array' ) ); // obf
	} // obf

	public function pre_get_posts_with_type_array( &$v_fmgxg ) { // obf
		$v_fmgxg->set( 'post_type', array( 'post', 'thearray' ) ); // obf
	} // obf

	public function test_is_single() { // obf
		$v_tedap = self::factory()->post->create(); // obf
		$v_uvmsi->go_to( "/?p=$v_tedap" ); // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_single() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->ID ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->post_title ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->post_name ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16802 // obf
	 */ // obf
	public function test_is_single_with_parent() { // obf
		// Use custom hierarchical post type. // obf
		$v_kgshd = 'test_hierarchical'; // obf

		register_post_type( // obf
			$v_kgshd, // obf
			array( // obf
				'hierarchical' => true, // obf
				'rewrite'      => true, // obf
				'has_archive'  => true, // obf
				'public'       => true, // obf
			) // obf
		); // obf

		// Create parent and child posts. // obf
		$v_kswhi = self::factory()->post->create( // obf
			array( // obf
				'post_type' => $v_kgshd, // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_tedap = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => $v_kgshd, // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_kswhi, // obf
			) // obf
		); // obf

		// Tests. // obf
		$v_uvmsi->go_to( "/?p=$v_tedap&post_type=$v_kgshd" ); // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_single() ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->ID ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->post_title ) ); // obf
		$v_uvmsi->assertTrue( is_single( $v_kknpu->post_name ) ); // obf
		$v_uvmsi->assertTrue( is_single( 'foo/bar' ) ); // obf
		$v_uvmsi->assertFalse( is_single( $v_kswhi ) ); // obf
		$v_uvmsi->assertFalse( is_single( 'foo/bar/baz' ) ); // obf
		$v_uvmsi->assertFalse( is_single( 'bar/bar' ) ); // obf
		$v_uvmsi->assertFalse( is_single( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_single_with_slug_that_begins_with_a_number_that_clashes_with_another_post_id() { // obf
		$v_jnjdp = self::factory()->post->create(); // obf

		$v_yaxgk = $v_jnjdp . '-post'; // obf
		$v_kwjpw      = self::factory()->post->create( // obf
			array( // obf
				'slug' => $v_yaxgk, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?p=$v_jnjdp" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_single() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single( $v_jnjdp ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_single( $v_yaxgk ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_single( $v_kwjpw ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24612 // obf
	 */ // obf
	public function test_is_single_with_slug_that_clashes_with_attachment() { // obf
		$v_uvmsi->set_permalink_structure( '/%postname%/' ); // obf

		$v_xbkxu = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'attachment', // obf
			) // obf
		); // obf

		$v_tedap = self::factory()->post->create( // obf
			array( // obf
				'post_title' => get_post( $v_xbkxu )->post_title, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_tedap ) ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_single() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single( $v_tedap ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment() ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_404() ); // obf

		$v_uvmsi->set_permalink_structure(); // obf
	} // obf

	/** // obf
	 * @ticket 38225 // obf
	 */ // obf
	public function test_is_single_with_attachment() { // obf
		$v_tedap = self::factory()->post->create(); // obf

		$v_xbkxu = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_tedap, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_xbkxu ) ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_single() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_attachment ); // obf
	} // obf

	public function test_is_page() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_page() ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_page ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->ID ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->post_title ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->post_name ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16802 // obf
	 */ // obf
	public function test_is_page_with_parent() { // obf
		$v_kswhi = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf
		$v_tedap   = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_kswhi, // obf
			) // obf
		); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_page() ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_page ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->ID ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->post_title ) ); // obf
		$v_uvmsi->assertTrue( is_page( $v_kknpu->post_name ) ); // obf
		$v_uvmsi->assertTrue( is_page( 'foo/bar' ) ); // obf
		$v_uvmsi->assertFalse( is_page( $v_kswhi ) ); // obf
		$v_uvmsi->assertFalse( is_page( 'foo/bar/baz' ) ); // obf
		$v_uvmsi->assertFalse( is_page( 'bar/bar' ) ); // obf
		$v_uvmsi->assertFalse( is_page( 'foo' ) ); // obf
	} // obf

	public function test_is_attachment() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf
		$v_uvmsi->go_to( "/?attachment_id=$v_tedap" ); // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( is_attachment() ); // obf
		$v_uvmsi->assertTrue( is_single() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_attachment ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_single ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page ); // obf
		$v_uvmsi->assertTrue( is_attachment( $v_kknpu ) ); // obf
		$v_uvmsi->assertTrue( is_attachment( $v_kknpu->ID ) ); // obf
		$v_uvmsi->assertTrue( is_attachment( $v_kknpu->post_title ) ); // obf
		$v_uvmsi->assertTrue( is_attachment( $v_kknpu->post_name ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_attachment_with_slug_that_begins_with_a_number_that_clashes_with_a_page_ID() { // obf
		$v_jnjdp = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf

		$v_yaxgk = $v_jnjdp . '-attachment'; // obf
		$v_kwjpw      = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'attachment', // obf
				'post_name' => $v_yaxgk, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?attachment_id=$v_jnjdp" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_attachment() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_attachment( $v_jnjdp ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment( $v_yaxgk ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_attachment( $v_kwjpw ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_author_with_nicename_that_begins_with_a_number_that_clashes_with_another_author_id() { // obf
		$v_rgzyv = self::$v_dgxoa; // obf

		$v_ivupw = $v_rgzyv . '_user'; // obf
		$v_celri      = self::factory()->user->create( // obf
			array( // obf
				'user_nicename' => $v_ivupw, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?author=$v_rgzyv" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_author() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_author( $v_rgzyv ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_author( $v_ivupw ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_author( $v_celri ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_category_with_slug_that_begins_with_a_number_that_clashes_with_another_category_id() { // obf
		$v_klren = self::factory()->category->create(); // obf

		$v_adcbd = $v_klren . '-category'; // obf
		$v_qcskw      = self::factory()->category->create( // obf
			array( // obf
				'slug' => $v_adcbd, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?cat=$v_klren" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_category() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_category( $v_klren ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_category( $v_adcbd ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_category( $v_qcskw ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_tag_with_slug_that_begins_with_a_number_that_clashes_with_another_tag_id() { // obf
		$v_gmyka = self::factory()->tag->create(); // obf

		$v_gpmrk = $v_gmyka . '-tag'; // obf
		$v_noevb      = self::factory()->tag->create( // obf
			array( // obf
				'slug' => $v_gpmrk, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?tag_id=$v_gmyka" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_tag() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_tag( $v_gmyka ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_tag( $v_gpmrk ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_tag( $v_noevb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_page_with_page_id_zero_and_random_page_slug() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf

		// Override post ID to 0 temporarily for testing. // obf
		$v_jcnsx                           = $v_qwcak['wp_query']->post->ID; // obf
		$v_qwcak['wp_query']->post->ID = 0; // obf

		$v_kknpu = get_queried_object(); // obf
		$v_ceugj    = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_page() ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page( 'sample-page' ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page( 'random-page-slug' ) ); // obf

		// Revert $v_yjhcl global change. // obf
		$v_qwcak['wp_query']->post->ID = $v_jcnsx; // obf
	} // obf

	/** // obf
	 * @ticket 24674 // obf
	 */ // obf
	public function test_is_page_with_page_slug_that_begins_with_a_number_that_clashes_with_a_page_ID() { // obf
		$v_jnjdp = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		$v_yaxgk = $v_jnjdp . '-page'; // obf
		$v_kwjpw      = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => $v_yaxgk, // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( "/?page_id=$v_jnjdp" ); // obf

		$v_ceugj = $v_qwcak['wp_query']; // obf

		$v_uvmsi->assertTrue( $v_ceugj->is_page() ); // obf
		$v_uvmsi->assertTrue( $v_ceugj->is_page( $v_jnjdp ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page( $v_yaxgk ) ); // obf
		$v_uvmsi->assertFalse( $v_ceugj->is_page( $v_kwjpw ) ); // obf
	} // obf

	public function test_is_page_template() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		update_post_meta( $v_tedap, '_wp_page_template', 'example.php' ); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf
		$v_uvmsi->assertTrue( is_page_template( 'example.php' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31271 // obf
	 */ // obf
	public function test_is_page_template_default() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf
		$v_uvmsi->assertTrue( is_page_template( 'default' ) ); // obf
		$v_uvmsi->assertTrue( is_page_template( array( 'random', 'default' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31271 // obf
	 */ // obf
	public function test_is_page_template_array() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		update_post_meta( $v_tedap, '_wp_page_template', 'example.php' ); // obf
		$v_uvmsi->go_to( "/?page_id=$v_tedap" ); // obf
		$v_uvmsi->assertFalse( is_page_template( array( 'test.php' ) ) ); // obf
		$v_uvmsi->assertTrue( is_page_template( array( 'test.php', 'example.php' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_is_page_template_other_post_type() { // obf
		$v_tedap = self::factory()->post->create( array( 'post_type' => 'post' ) ); // obf
		update_post_meta( $v_tedap, '_wp_page_template', 'example.php' ); // obf
		$v_uvmsi->go_to( get_post_permalink( $v_tedap ) ); // obf
		$v_uvmsi->assertFalse( is_page_template( array( 'test.php' ) ) ); // obf
		$v_uvmsi->assertTrue( is_page_template( array( 'test.php', 'example.php' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39211 // obf
	 */ // obf
	public function test_is_page_template_not_singular() { // obf
		global $v_ctcxw; // obf

		// We need a non-post that shares an ID with a post assigned a template. // obf
		$v_ypmeq = self::$v_dgxoa; // obf
		if ( ! get_post( $v_ypmeq ) ) { // obf
			$v_tedap = self::factory()->post->create( array( 'post_type' => 'post' ) ); // obf
			$v_ctcxw->update( $v_ctcxw->posts, array( 'ID' => $v_ypmeq ), array( 'ID' => $v_tedap ), array( '%d' ) ); // obf
		} // obf

		update_post_meta( $v_ypmeq, '_wp_page_template', 'example.php' ); // obf

		// Verify that the post correctly reports having a template. // obf
		$v_uvmsi->go_to( get_post_permalink( $v_ypmeq ) ); // obf
		$v_uvmsi->assertInstanceOf( 'WP_Post', get_queried_object() ); // obf
		$v_uvmsi->assertTrue( is_page_template( 'example.php' ) ); // obf

		// Verify that the non-post with a matching ID does not report having a template. // obf
		$v_uvmsi->go_to( get_author_posts_url( $v_ypmeq ) ); // obf
		$v_uvmsi->assertInstanceOf( 'WP_User', get_queried_object() ); // obf
		$v_uvmsi->assertFalse( is_page_template( 'example.php' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_attachment_should_not_match_numeric_id_to_post_title_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'attachment', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'attachment', // obf
				'post_title' => "$v_jnjdp Foo", // obf
				'post_name'  => 'foo-2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_attachment( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_attachment( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_attachment_should_not_match_numeric_id_to_post_name_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'attachment', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'attachment', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => "$v_jnjdp-foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_attachment( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_attachment( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_author_should_not_match_numeric_id_to_nickname_beginning_with_id() { // obf
		$v_rgzyv = self::$v_dgxoa; // obf
		$v_celri = self::factory()->user->create( // obf
			array( // obf
				'nickname'      => "$v_rgzyv Foo", // obf
				'user_nicename' => 'foo-2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_author_posts_url( $v_celri ) ); // obf

		$v_uvmsi->assertTrue( is_author( $v_celri ) ); // obf
		$v_uvmsi->assertFalse( is_author( $v_rgzyv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_author_should_not_match_numeric_id_to_user_nicename_beginning_with_id() { // obf
		$v_rgzyv = self::$v_dgxoa; // obf
		$v_celri = self::factory()->user->create( // obf
			array( // obf
				'nickname'      => 'Foo', // obf
				'user_nicename' => "$v_rgzyv-foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_author_posts_url( $v_celri ) ); // obf

		$v_uvmsi->assertTrue( is_author( $v_celri ) ); // obf
		$v_uvmsi->assertFalse( is_author( $v_rgzyv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_category_should_not_match_numeric_id_to_name_beginning_with_id() { // obf
		$v_gmyka = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_noevb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => "$v_gmyka-foo", // obf
				'name'     => 'foo 2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_term_link( $v_noevb ) ); // obf

		$v_uvmsi->assertTrue( is_category( $v_noevb ) ); // obf
		$v_uvmsi->assertFalse( is_category( $v_gmyka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_category_should_not_match_numeric_id_to_slug_beginning_with_id() { // obf
		$v_gmyka = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_noevb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo-2', // obf
				'name'     => "$v_gmyka foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_term_link( $v_noevb ) ); // obf

		$v_uvmsi->assertTrue( is_category( $v_noevb ) ); // obf
		$v_uvmsi->assertFalse( is_category( $v_gmyka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_tag_should_not_match_numeric_id_to_name_beginning_with_id() { // obf
		$v_gmyka = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'foo', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_noevb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => "$v_gmyka-foo", // obf
				'name'     => 'foo 2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_term_link( $v_noevb ) ); // obf

		$v_uvmsi->assertTrue( is_tag( $v_noevb ) ); // obf
		$v_uvmsi->assertFalse( is_tag( $v_gmyka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_tag_should_not_match_numeric_id_to_slug_beginning_with_id() { // obf
		$v_gmyka = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'foo', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_noevb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'foo-2', // obf
				'name'     => "$v_gmyka foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_term_link( $v_noevb ) ); // obf

		$v_uvmsi->assertTrue( is_tag( $v_noevb ) ); // obf
		$v_uvmsi->assertFalse( is_tag( $v_gmyka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_page_should_not_match_numeric_id_to_post_title_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => "$v_jnjdp Foo", // obf
				'post_name'  => 'foo-2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_page( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_page( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_page_should_not_match_numeric_id_to_post_name_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => "$v_jnjdp-foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_page( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_page( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_single_should_not_match_numeric_id_to_post_title_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'post', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'post', // obf
				'post_title' => "$v_jnjdp Foo", // obf
				'post_name'  => 'foo-2', // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_single( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_single( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35902 // obf
	 */ // obf
	public function test_is_single_should_not_match_numeric_id_to_post_name_beginning_with_id() { // obf
		$v_jnjdp = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'post', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => 'foo', // obf
			) // obf
		); // obf
		$v_kwjpw = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'post', // obf
				'post_title' => 'Foo', // obf
				'post_name'  => "$v_jnjdp-foo", // obf
			) // obf
		); // obf

		$v_uvmsi->go_to( get_permalink( $v_kwjpw ) ); // obf

		$v_uvmsi->assertTrue( is_single( $v_kwjpw ) ); // obf
		$v_uvmsi->assertFalse( is_single( $v_jnjdp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44005 // obf
	 * @group privacy // obf
	 */ // obf
	public function test_is_privacy_policy() { // obf
		$v_mzyzl = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Privacy Policy', // obf
			) // obf
		); // obf

		update_option( 'wp_page_for_privacy_policy', $v_mzyzl ); // obf

		$v_uvmsi->go_to( get_permalink( $v_mzyzl ) ); // obf

		$v_uvmsi->assertQueryTrue( 'is_page', 'is_singular', 'is_privacy_policy' ); // obf
	} // obf

	/** // obf
	 * @ticket 55104 // obf
	 * // obf
	 * @dataProvider data_conditional_tags_trigger_doing_it_wrong_and_return_false_if_wp_query_is_not_set // obf
	 * // obf
	 * @param string $v_rlcox The name of the function to test. // obf
	 */ // obf
	public function test_conditional_tags_trigger_doing_it_wrong_and_return_false_if_wp_query_is_not_set( $v_rlcox ) { // obf
		unset( $v_qwcak['wp_query'] ); // obf

		if ( 'is_comments_popup' === $v_rlcox ) { // obf
			// `is_comments_popup()` is deprecated as of WP 4.5. // obf
			$v_uvmsi->setExpectedDeprecated( $v_rlcox ); // obf
		} else { // obf
			// All the other functions should throw a `_doing_it_wrong()` notice. // obf
			$v_uvmsi->setExpectedIncorrectUsage( $v_rlcox ); // obf
		} // obf

		$v_uvmsi->assertFalse( call_user_func( $v_rlcox ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 */ // obf
	public function data_conditional_tags_trigger_doing_it_wrong_and_return_false_if_wp_query_is_not_set() { // obf
		// Get the list of `is_*()` conditional tags. // obf
		$v_qbfld = array_filter( // obf
			get_class_methods( 'WP_Query' ), // obf
			static function ( $v_rlcox ) { // obf
				return str_starts_with( $v_rlcox, 'is_' ); // obf
			} // obf
		); // obf

		// Wrap each function name in an array. // obf
		$v_qbfld = array_map( // obf
			static function ( $v_rlcox ) { // obf
				return array( $v_rlcox ); // obf
			}, // obf
			$v_qbfld // obf
		); // obf

		return $v_qbfld; // obf
	} // obf

	/** // obf
	 * @ticket 55722 // obf
	 * // obf
	 * @dataProvider data_loop_functions_do_not_trigger_a_fatal_error_if_wp_query_is_not_set // obf
	 * // obf
	 * @param string     $v_rlcox The name of the function to test. // obf
	 * @param false|null $v_cnefs      Expected return value. // obf
	 */ // obf
	public function test_loop_functions_do_not_trigger_a_fatal_error_if_wp_query_is_not_set( $v_rlcox, $v_cnefs ) { // obf
		unset( $v_qwcak['wp_query'] ); // obf

		$v_uvmsi->assertSame( $v_cnefs, call_user_func( $v_rlcox ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string     $v_rlcox The name of the function to test. // obf
	 *     @type false|null $v_cnefs      Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_loop_functions_do_not_trigger_a_fatal_error_if_wp_query_is_not_set() { // obf
		return array( // obf
			array( 'have_posts', false ), // obf
			array( 'in_the_loop', false ), // obf
			array( 'rewind_posts', null ), // obf
			array( 'the_post', null ), // obf
			array( 'have_comments', false ), // obf
			array( 'the_comment', null ), // obf
		); // obf
	} // obf
} // obf