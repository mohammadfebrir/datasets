

<?php // obf

/** // obf
 * @group rewrite // obf
 * @ticket 5305 // obf
 */ // obf
class Tests_Rewrite_NumericSlugs extends WP_UnitTestCase { // obf
	private $v_amocv; // obf
	private $v_zntuh; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_cftfp->author_id = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf

		// Override the post/archive slug collision prevention in `wp_unique_post_slug()`. // obf
		add_filter( 'wp_unique_post_slug', array( $v_cftfp, 'filter_unique_post_slug' ), 10, 6 ); // obf
	} // obf

	public function test_go_to_year_segment_collision_without_title() { // obf
		global $v_leiby; // obf
		$v_cftfp->set_permalink_structure( '/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '2015', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		// Force an ID that resembles a year format. // obf
		$v_leiby->update( // obf
			$v_leiby->posts, // obf
			array( // obf
				'ID'   => '2015', // obf
				'guid' => 'http://' . WP_TESTS_DOMAIN . '/?p=2015', // obf
			), // obf
			array( 'ID' => $v_vgsnt ) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( '2015' ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_year_segment_collision_without_title() { // obf
		global $v_leiby; // obf
		$v_cftfp->set_permalink_structure( '/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '2015', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		// Force an ID that resembles a year format. // obf
		$v_leiby->update( // obf
			$v_leiby->posts, // obf
			array( // obf
				'ID'   => '2015', // obf
				'guid' => 'http://' . WP_TESTS_DOMAIN . '/?p=2015', // obf
			), // obf
			array( 'ID' => $v_vgsnt ) // obf
		); // obf

		$v_cftfp->assertSame( 2015, url_to_postid( get_permalink( '2015' ) ) ); // obf
	} // obf

	public function test_go_to_year_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '2015', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_year_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '2015', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_month_segment_collision_without_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_month_segment_collision_without_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_month_segment_collision_without_title_no_leading_zero() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '2', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_month_segment_collision_without_title_no_leading_zero() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '2', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_month_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_month_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_month_segment_collision_with_title_no_leading_zero() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '2', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_month_segment_collision_with_title_no_leading_zero() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '2', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_day_segment_collision_without_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '01', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_day_segment_collision_without_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '', // obf
				'post_name'    => '01', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_go_to_day_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '01', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
	} // obf

	public function test_url_to_postid_day_segment_collision_with_title() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '01', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->assertSame( $v_vgsnt, url_to_postid( get_permalink( $v_vgsnt ) ) ); // obf
	} // obf

	public function test_numeric_slug_permalink_conflicts_should_only_be_resolved_for_the_main_query() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => '01', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_pbgqs = new WP_Query( // obf
			array( // obf
				'year'     => '2015', // obf
				'monthnum' => '02', // obf
				'day'      => '01', // obf
			) // obf
		); // obf

		$v_cftfp->assertTrue( $v_pbgqs->is_day ); // obf
		$v_cftfp->assertFalse( $v_pbgqs->is_single ); // obf
	} // obf

	public function test_month_slug_collision_should_resolve_to_date_archive_when_year_does_not_match_post_year() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		// Make sure a post is published in 2013/02, to avoid 404s. // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'foo', // obf
				'post_title'   => 'bar', // obf
				'post_date'    => '2013-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'foo', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_ibbmk = get_permalink( $v_vgsnt ); // obf
		$v_ibbmk = str_replace( '/2015/', '/2013/', $v_ibbmk ); // obf

		$v_cftfp->go_to( $v_ibbmk ); // obf

		$v_cftfp->assertTrue( is_month() ); // obf
	} // obf

	public function test_day_slug_collision_should_resolve_to_date_archive_when_monthnum_does_not_match_post_month() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		// Make sure a post is published on 2015/01/01, to avoid 404s. // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'foo', // obf
				'post_title'   => 'bar', // obf
				'post_date'    => '2015-01-02 01:00:00', // obf
			) // obf
		); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'foo', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-02 01:00:00', // obf
			) // obf
		); // obf

		$v_ibbmk = get_permalink( $v_vgsnt ); // obf
		$v_ibbmk = str_replace( '/2015/02/', '/2015/01/', $v_ibbmk ); // obf

		$v_cftfp->go_to( $v_ibbmk ); // obf

		$v_cftfp->assertTrue( is_day() ); // obf
	} // obf

	public function test_date_slug_collision_should_distinguish_valid_pagination_from_date() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-01 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) . '1' ); // obf

		$v_cftfp->assertFalse( is_day() ); // obf
	} // obf

	public function test_date_slug_collision_should_distinguish_too_high_pagination_from_date() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-05 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) . '5' ); // obf

		$v_cftfp->assertTrue( is_day() ); // obf
	} // obf

	public function test_date_slug_collision_should_not_require_pagination_query_var() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-05 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) ); // obf

		$v_cftfp->assertQueryTrue( 'is_single', 'is_singular' ); // obf
		$v_cftfp->assertFalse( is_date() ); // obf
	} // obf

	public function test_date_slug_collision_should_be_ignored_when_pagination_var_is_present_but_post_does_not_have_multiple_pages() { // obf
		$v_cftfp->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_vgsnt = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_cftfp->author_id, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post does not have pagination.', // obf
				'post_title'   => '02', // obf
				'post_date'    => '2015-02-05 01:00:00', // obf
			) // obf
		); // obf

		$v_cftfp->go_to( get_permalink( $v_vgsnt ) . '5' ); // obf

		$v_cftfp->assertTrue( is_day() ); // obf
	} // obf

	public function filter_unique_post_slug( $v_cwsum, $v_vqjrl, $v_pcftp, $v_ainzo, $v_muwmy, $v_gmjok ) { // obf
		return $v_gmjok; // obf
	} // obf
} // obf