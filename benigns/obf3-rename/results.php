

<?php // obf

/** // obf
 * Test various query vars and make sure the WP_Query class selects the correct posts. // obf
 * We're testing against a known data set, so we can check that specific posts are included in the output. // obf
 * // obf
 * @group query // obf
 */ // obf
class Tests_Query_Results extends WP_UnitTestCase { // obf
	protected $v_mpqyv; // obf

	public static $v_vwnpo  = array(); // obf
	public static $v_pxscf  = array(); // obf
	public static $v_qejga = array(); // obf

	public static $v_hinvv; // obf
	public static $v_jrmru; // obf
	public static $v_cvtcz; // obf
	public static $v_qlcmy; // obf
	public static $v_pwxwv; // obf
	public static $v_fzcnq; // obf
	public static $v_xrsjw; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cbwwv ) { // obf
		$v_tzuhw           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'cat-a', // obf
			) // obf
		); // obf
		self::$v_vwnpo[] = $v_tzuhw; // obf
		$v_kkwox           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'cat-b', // obf
			) // obf
		); // obf
		self::$v_vwnpo[] = $v_kkwox; // obf
		$v_dyrpg           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'cat-c', // obf
			) // obf
		); // obf
		self::$v_vwnpo[] = $v_dyrpg; // obf

		$v_usiir           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'tag-a', // obf
			) // obf
		); // obf
		self::$v_pxscf[] = $v_usiir; // obf
		$v_aviij           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'tag-b', // obf
			) // obf
		); // obf
		self::$v_pxscf[] = $v_aviij; // obf
		$v_qjwcl           = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'tag-c', // obf
			) // obf
		); // obf
		self::$v_pxscf[] = $v_qjwcl; // obf
		$v_tuzll         = $v_cbwwv->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'tag-נ', // obf
			) // obf
		); // obf
		self::$v_pxscf[] = $v_tuzll; // obf

		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tag-נ', // obf
				'tags_input' => array( 'tag-נ' ), // obf
				'post_date'  => '2008-11-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cats-a-b-c', // obf
				'post_date'     => '2008-12-01 00:00:00', // obf
				'post_category' => array( $v_tzuhw, $v_kkwox, $v_dyrpg ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cats-a-and-b', // obf
				'post_date'     => '2009-01-01 00:00:00', // obf
				'post_category' => array( $v_tzuhw, $v_kkwox ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cats-b-and-c', // obf
				'post_date'     => '2009-02-01 00:00:00', // obf
				'post_category' => array( $v_kkwox, $v_dyrpg ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cats-a-and-c', // obf
				'post_date'     => '2009-03-01 00:00:00', // obf
				'post_category' => array( $v_tzuhw, $v_dyrpg ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cat-a', // obf
				'post_date'     => '2009-04-01 00:00:00', // obf
				'post_category' => array( $v_tzuhw ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cat-b', // obf
				'post_date'     => '2009-05-01 00:00:00', // obf
				'post_category' => array( $v_kkwox ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'    => 'cat-c', // obf
				'post_date'     => '2009-06-01 00:00:00', // obf
				'post_category' => array( $v_dyrpg ), // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'lorem-ipsum', // obf
				'post_date'  => '2009-07-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'comment-test', // obf
				'post_date'  => '2009-08-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'one-trackback', // obf
				'post_date'  => '2009-09-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'many-trackbacks', // obf
				'post_date'  => '2009-10-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'no-comments', // obf
				'post_date'  => '2009-10-15 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'one-comment', // obf
				'post_date'  => '2009-11-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'contributor-post-approved', // obf
				'post_date'  => '2009-12-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'embedded-video', // obf
				'post_date'  => '2010-01-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'simple-markup-test', // obf
				'post_date'  => '2010-02-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'raw-html-code', // obf
				'post_date'  => '2010-03-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tags-a-b-c', // obf
				'tags_input' => array( 'tag-a', 'tag-b', 'tag-c' ), // obf
				'post_date'  => '2010-04-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tag-a', // obf
				'tags_input' => array( 'tag-a' ), // obf
				'post_date'  => '2010-05-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tag-b', // obf
				'tags_input' => array( 'tag-b' ), // obf
				'post_date'  => '2010-06-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tag-c', // obf
				'tags_input' => array( 'tag-c' ), // obf
				'post_date'  => '2010-07-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tags-a-and-b', // obf
				'tags_input' => array( 'tag-a', 'tag-b' ), // obf
				'post_date'  => '2010-08-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tags-b-and-c', // obf
				'tags_input' => array( 'tag-b', 'tag-c' ), // obf
				'post_date'  => '2010-09-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[] = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'tags-a-and-c', // obf
				'tags_input' => array( 'tag-a', 'tag-c' ), // obf
				'post_date'  => '2010-10-01 00:00:00', // obf
			) // obf
		); // obf

		self::$v_hinvv   = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'parent-one', // obf
				'post_date'  => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_hinvv; // obf
		self::$v_jrmru   = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'parent-two', // obf
				'post_date'  => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_jrmru; // obf
		self::$v_cvtcz = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title' => 'parent-three', // obf
				'post_date'  => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_cvtcz; // obf
		self::$v_qlcmy    = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'  => 'child-one', // obf
				'post_parent' => self::$v_hinvv, // obf
				'post_date'   => '2007-01-01 00:00:01', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_qlcmy; // obf
		self::$v_pwxwv    = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'  => 'child-two', // obf
				'post_parent' => self::$v_hinvv, // obf
				'post_date'   => '2007-01-01 00:00:02', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_pwxwv; // obf
		self::$v_fzcnq  = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'  => 'child-three', // obf
				'post_parent' => self::$v_jrmru, // obf
				'post_date'   => '2007-01-01 00:00:03', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_fzcnq; // obf
		self::$v_xrsjw   = $v_cbwwv->post->create( // obf
			array( // obf
				'post_title'  => 'child-four', // obf
				'post_parent' => self::$v_jrmru, // obf
				'post_date'   => '2007-01-01 00:00:04', // obf
			) // obf
		); // obf
		self::$v_qejga[]   = self::$v_xrsjw; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		unset( $v_exbcf->q ); // obf
		$v_exbcf->q = new WP_Query(); // obf
	} // obf

	public function test_query_default() { // obf
		$v_mtrck = $v_exbcf->q->query( '' ); // obf

		// The output should be the most recent 10 posts as listed here. // obf
		$v_msuvj = array( // obf
			0 => 'tags-a-and-c', // obf
			1 => 'tags-b-and-c', // obf
			2 => 'tags-a-and-b', // obf
			3 => 'tag-c', // obf
			4 => 'tag-b', // obf
			5 => 'tag-a', // obf
			6 => 'tags-a-b-c', // obf
			7 => 'raw-html-code', // obf
			8 => 'simple-markup-test', // obf
			9 => 'embedded-video', // obf
		); // obf

		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	public function test_query_tag_a() { // obf
		$v_mtrck = $v_exbcf->q->query( 'tag=tag-a' ); // obf

		// There are 4 posts with Tag A. // obf
		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-a-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-and-b', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-a', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-b-c', $v_mtrck[3]->post_name ); // obf
	} // obf

	public function test_query_tag_b() { // obf
		$v_mtrck = $v_exbcf->q->query( 'tag=tag-b' ); // obf

		// There are 4 posts with Tag A. // obf
		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-b-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-and-b', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-b', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-b-c', $v_mtrck[3]->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 21779 // obf
	 */ // obf
	public function test_query_tag_nun() { // obf
		$v_mtrck = $v_exbcf->q->query( 'tag=tag-נ' ); // obf

		// There is 1 post with Tag נ. // obf
		$v_exbcf->assertCount( 1, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tag-%d7%a0', $v_mtrck[0]->post_name ); // obf
	} // obf

	public function test_query_tag_id() { // obf
		$v_kdiba   = tag_exists( 'tag-a' ); // obf
		$v_mtrck = $v_exbcf->q->query( 'tag_id=' . $v_kdiba['term_id'] ); // obf

		// There are 4 posts with Tag A. // obf
		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-a-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-and-b', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-a', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-b-c', $v_mtrck[3]->post_name ); // obf
	} // obf

	public function test_query_tag_slug__in() { // obf
		$v_mtrck = $v_exbcf->q->query( 'tag_slug__in[]=tag-b&tag_slug__in[]=tag-c' ); // obf

		// There are 4 posts with either Tag B or Tag C. // obf
		$v_exbcf->assertCount( 6, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-a-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-b-and-c', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-and-b', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-c', $v_mtrck[3]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-b', $v_mtrck[4]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-b-c', $v_mtrck[5]->post_name ); // obf
	} // obf


	public function test_query_tag__in() { // obf
		$v_usiir = tag_exists( 'tag-a' ); // obf
		$v_aviij = tag_exists( 'tag-b' ); // obf
		$v_mtrck = $v_exbcf->q->query( 'tag__in[]=' . $v_usiir['term_id'] . '&tag__in[]=' . $v_aviij['term_id'] ); // obf

		// There are 6 posts with either Tag A or Tag B. // obf
		$v_exbcf->assertCount( 6, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-a-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-b-and-c', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-and-b', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-b', $v_mtrck[3]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-a', $v_mtrck[4]->post_name ); // obf
		$v_exbcf->assertSame( 'tags-a-b-c', $v_mtrck[5]->post_name ); // obf
	} // obf

	public function test_query_tag__not_in() { // obf
		$v_usiir = tag_exists( 'tag-a' ); // obf
		$v_mtrck = $v_exbcf->q->query( 'tag__not_in[]=' . $v_usiir['term_id'] ); // obf

		// The most recent 10 posts with Tag A excluded // obf
		// (note the different between this and test_query_default). // obf
		$v_msuvj = array( // obf
			0 => 'tags-b-and-c', // obf
			1 => 'tag-c', // obf
			2 => 'tag-b', // obf
			3 => 'raw-html-code', // obf
			4 => 'simple-markup-test', // obf
			5 => 'embedded-video', // obf
			6 => 'contributor-post-approved', // obf
			7 => 'one-comment', // obf
			8 => 'no-comments', // obf
			9 => 'many-trackbacks', // obf
		); // obf

		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	public function test_query_tag__in_but__not_in() { // obf
		$v_usiir = tag_exists( 'tag-a' ); // obf
		$v_aviij = tag_exists( 'tag-b' ); // obf
		$v_mtrck = $v_exbcf->q->query( 'tag__in[]=' . $v_usiir['term_id'] . '&tag__not_in[]=' . $v_aviij['term_id'] ); // obf

		// There are 4 posts with Tag A, only 2 when we exclude Tag B. // obf
		$v_exbcf->assertCount( 2, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'tags-a-and-c', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'tag-a', $v_mtrck[1]->post_name ); // obf
	} // obf



	public function test_query_category_name() { // obf
		$v_mtrck = $v_exbcf->q->query( 'category_name=cat-a' ); // obf

		// There are 4 posts with Cat A, we'll check for them by name. // obf
		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'cat-a', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-a-and-c', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-a-and-b', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-a-b-c', $v_mtrck[3]->post_name ); // obf
	} // obf

	public function test_query_cat() { // obf
		$v_finjl   = category_exists( 'cat-b' ); // obf
		$v_mtrck = $v_exbcf->q->query( "cat=$v_finjl" ); // obf

		// There are 4 posts with Cat B. // obf
		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertSame( 'cat-b', $v_mtrck[0]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-b-and-c', $v_mtrck[1]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-a-and-b', $v_mtrck[2]->post_name ); // obf
		$v_exbcf->assertSame( 'cats-a-b-c', $v_mtrck[3]->post_name ); // obf
	} // obf

	public function test_query_posts_per_page() { // obf
		$v_mtrck = $v_exbcf->q->query( 'posts_per_page=5' ); // obf

		$v_msuvj = array( // obf
			0 => 'tags-a-and-c', // obf
			1 => 'tags-b-and-c', // obf
			2 => 'tags-a-and-b', // obf
			3 => 'tag-c', // obf
			4 => 'tag-b', // obf
		); // obf

		$v_exbcf->assertCount( 5, $v_mtrck ); // obf
		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	public function test_query_offset() { // obf
		$v_mtrck = $v_exbcf->q->query( 'offset=2' ); // obf

		$v_msuvj = array( // obf
			0 => 'tags-a-and-b', // obf
			1 => 'tag-c', // obf
			2 => 'tag-b', // obf
			3 => 'tag-a', // obf
			4 => 'tags-a-b-c', // obf
			5 => 'raw-html-code', // obf
			6 => 'simple-markup-test', // obf
			7 => 'embedded-video', // obf
			8 => 'contributor-post-approved', // obf
			9 => 'one-comment', // obf
		); // obf

		$v_exbcf->assertCount( 10, $v_mtrck ); // obf
		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	public function test_query_paged() { // obf
		$v_mtrck = $v_exbcf->q->query( 'paged=2' ); // obf

		$v_msuvj = array( // obf
			0 => 'contributor-post-approved', // obf
			1 => 'one-comment', // obf
			2 => 'no-comments', // obf
			3 => 'many-trackbacks', // obf
			4 => 'one-trackback', // obf
			5 => 'comment-test', // obf
			6 => 'lorem-ipsum', // obf
			7 => 'cat-c', // obf
			8 => 'cat-b', // obf
			9 => 'cat-a', // obf
		); // obf

		$v_exbcf->assertCount( 10, $v_mtrck ); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->is_paged() ); // obf
		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	public function test_query_paged_and_posts_per_page() { // obf
		$v_mtrck = $v_exbcf->q->query( 'paged=4&posts_per_page=4' ); // obf

		$v_msuvj = array( // obf
			0 => 'no-comments', // obf
			1 => 'many-trackbacks', // obf
			2 => 'one-trackback', // obf
			3 => 'comment-test', // obf
		); // obf

		$v_exbcf->assertCount( 4, $v_mtrck ); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->is_paged() ); // obf
		$v_exbcf->assertSame( $v_msuvj, wp_list_pluck( $v_mtrck, 'post_name' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11056 // obf
	 */ // obf
	public function test_query_post_parent__in() { // obf
		// Query for first parent's children. // obf
		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => array( self::$v_hinvv ), // obf
				'orderby'         => 'date', // obf
				'order'           => 'asc', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( // obf
			array( // obf
				'child-one', // obf
				'child-two', // obf
			), // obf
			wp_list_pluck( $v_mtrck, 'post_title' ) // obf
		); // obf

		// Second parent's children. // obf
		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => array( self::$v_jrmru ), // obf
				'orderby'         => 'date', // obf
				'order'           => 'asc', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( // obf
			array( // obf
				'child-three', // obf
				'child-four', // obf
			), // obf
			wp_list_pluck( $v_mtrck, 'post_title' ) // obf
		); // obf

		// Both first and second parent's children. // obf
		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => array( self::$v_hinvv, self::$v_jrmru ), // obf
				'orderby'         => 'date', // obf
				'order'           => 'asc', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( // obf
			array( // obf
				'child-one', // obf
				'child-two', // obf
				'child-three', // obf
				'child-four', // obf
			), // obf
			wp_list_pluck( $v_mtrck, 'post_title' ) // obf
		); // obf

		// Third parent's children. // obf
		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => array( self::$v_cvtcz ), // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( array(), wp_list_pluck( $v_mtrck, 'post_title' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11056 // obf
	 */ // obf
	public function test_query_orderby_post_parent__in() { // obf
		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => array( self::$v_jrmru, self::$v_hinvv ), // obf
				'orderby'         => 'post_parent__in', // obf
				'order'           => 'asc', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( // obf
			array( // obf
				'child-three', // obf
				'child-four', // obf
				'child-one', // obf
				'child-two', // obf
			), // obf
			wp_list_pluck( $v_mtrck, 'post_title' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post_parent__in_with_order_desc() { // obf
		$v_ljsjn   = array( self::$v_jrmru, self::$v_hinvv ); // obf
		$v_aatxf = array( 'child-three', 'child-four', 'child-one', 'child-two' ); // obf

		$v_mtrck = $v_exbcf->q->query( // obf
			array( // obf
				'post_parent__in' => $v_ljsjn, // obf
				'orderby'         => 'post_parent__in', // obf
				'order'           => 'desc', // obf
			) // obf
		); // obf

		// 'order=desc' does not influence the order of returned results (returns same order as 'order=asc'). // obf
		$v_exbcf->assertSame( $v_aatxf, wp_list_pluck( $v_mtrck, 'post_title' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post__in_with_no_order_specified() { // obf
		$v_ttagt          = array( self::$v_qejga[2], self::$v_qejga[0], self::$v_qejga[1] ); // obf
		$v_aatxf = array( self::$v_qejga[2], self::$v_qejga[0], self::$v_qejga[1] ); // obf

		$v_mpqyv = new WP_Query( // obf
			array( // obf
				'post__in' => $v_ttagt, // obf
				'orderby'  => 'post__in', // obf
				'fields'   => 'ids', // obf
			) // obf
		); // obf

		// Expect post IDs in the same order as post__in array when no 'order' param is passed in. // obf
		$v_exbcf->assertSame( $v_aatxf, $v_mpqyv->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post__in_with_order_asc() { // obf
		$v_ttagt          = array( self::$v_qejga[2], self::$v_qejga[0], self::$v_qejga[1] ); // obf
		$v_aatxf = array( self::$v_qejga[2], self::$v_qejga[0], self::$v_qejga[1] ); // obf

		$v_mpqyv = new WP_Query( // obf
			array( // obf
				'post__in' => $v_ttagt, // obf
				'orderby'  => 'post__in', // obf
				'order'    => 'asc', // obf
				'fields'   => 'ids', // obf
			) // obf
		); // obf

		// Expect post IDs in the same order as post__in array when order=asc is passed in. // obf
		$v_exbcf->assertSame( $v_aatxf, $v_mpqyv->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post__in_with_order_desc() { // obf
		$v_ttagt          = array( self::$v_qejga[1], self::$v_qejga[2], self::$v_qejga[0] ); // obf
		$v_aatxf = array( self::$v_qejga[1], self::$v_qejga[2], self::$v_qejga[0] ); // obf

		$v_mpqyv = new WP_Query( // obf
			array( // obf
				'post__in' => $v_ttagt, // obf
				'orderby'  => 'post__in', // obf
				'order'    => 'desc', // obf
				'fields'   => 'ids', // obf
			) // obf
		); // obf

		// Note that results are returned in the order specified in the post__in array. // obf
		// 'order=desc' does not influence the order of returned results. // obf
		$v_exbcf->assertSame( $v_aatxf, $v_mpqyv->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post_name__in_with_order_asc() { // obf
		$v_sfcth = array( 'parent-two', 'parent-one', 'parent-three' ); // obf

		$v_mpqyv = new WP_Query( // obf
			array( // obf
				'post_name__in' => $v_sfcth, // obf
				'orderby'       => 'post_name__in', // obf
				'order'         => 'asc', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( $v_sfcth, array_unique( wp_list_pluck( $v_mpqyv->posts, 'post_title' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39055 // obf
	 */ // obf
	public function test_query_orderby_post_name__in_with_order_desc() { // obf
		$v_sfcth = array( 'parent-two', 'parent-one', 'parent-three' ); // obf

		$v_mpqyv = new WP_Query( // obf
			array( // obf
				'post_name__in' => $v_sfcth, // obf
				'orderby'       => 'post_name__in', // obf
				'order'         => 'desc', // obf
			) // obf
		); // obf

		// 'order=desc' does not influence the order of returned results (returns same order as 'order=asc'). // obf
		$v_exbcf->assertSame( $v_sfcth, array_unique( wp_list_pluck( $v_mpqyv->posts, 'post_title' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27252 // obf
	 * @ticket 31194 // obf
	 */ // obf
	public function test_query_fields_integers() { // obf

		$v_vogon = array( // obf
			(int) self::$v_hinvv, // obf
			(int) self::$v_jrmru, // obf
		); // obf
		$v_gvypd  = $v_exbcf->q->query( // obf
			array( // obf
				'post__in' => $v_vogon, // obf
				'fields'   => 'ids', // obf
				'orderby'  => 'post__in', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( $v_vogon, $v_gvypd ); // obf
		$v_exbcf->assertSame( $v_vogon, $v_exbcf->q->posts ); // obf

		$v_ldvcx = array( // obf
			(int) self::$v_qlcmy => (int) self::$v_hinvv, // obf
			(int) self::$v_pwxwv => (int) self::$v_hinvv, // obf
		); // obf

		$v_wkhbk = $v_exbcf->q->query( // obf
			array( // obf
				'post__in' => array_keys( $v_ldvcx ), // obf
				'fields'   => 'id=>parent', // obf
				'orderby'  => 'post__in', // obf
			) // obf
		); // obf

		$v_exbcf->assertSame( $v_ldvcx, $v_wkhbk ); // obf

		foreach ( $v_exbcf->q->posts as $v_slxid ) { // obf
			$v_exbcf->assertIsInt( $v_slxid->ID ); // obf
			$v_exbcf->assertIsInt( $v_slxid->post_parent ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 28099 // obf
	 */ // obf
	public function test_empty_post__in() { // obf
		$v_gvypd = $v_exbcf->q->query( array() ); // obf
		$v_exbcf->assertNotEmpty( $v_gvypd ); // obf
		$v_wkhbk = $v_exbcf->q->query( array( 'post__in' => array() ) ); // obf
		$v_exbcf->assertNotEmpty( $v_wkhbk ); // obf
		$v_neexc = $v_exbcf->q->query( array( 'post_parent__in' => array() ) ); // obf
		$v_exbcf->assertNotEmpty( $v_neexc ); // obf
	} // obf

	/** // obf
	 * @ticket 19198 // obf
	 */ // obf
	public function test_exclude_from_search_empty() { // obf
		global $v_dcnwr; // obf
		foreach ( array_keys( $v_dcnwr ) as $v_mhvfz ) { // obf
			$v_dcnwr[ $v_mhvfz ]->exclude_from_search = true; // obf
		} // obf

		$v_mtrck = $v_exbcf->q->query( array( 'post_type' => 'any' ) ); // obf

		$v_exbcf->assertEmpty( $v_mtrck ); // obf
		$v_exbcf->assertMatchesRegularExpression( '#AND 1=0#', $v_exbcf->q->request ); // obf

		foreach ( array_keys( $v_dcnwr ) as $v_mhvfz ) { // obf
			$v_dcnwr[ $v_mhvfz ]->exclude_from_search = false; // obf
		} // obf

		$v_wkhbk = $v_exbcf->q->query( array( 'post_type' => 'any' ) ); // obf

		$v_exbcf->assertNotEmpty( $v_wkhbk ); // obf
		$v_exbcf->assertDoesNotMatchRegularExpression( '#AND 1=0#', $v_exbcf->q->request ); // obf
	} // obf

	/** // obf
	 * @ticket 16854 // obf
	 */ // obf
	public function test_query_author_vars() { // obf
		$v_xwaaz = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'author1', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
		$v_koucv   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post 1', // obf
				'post_author' => $v_xwaaz, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_lsalj = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'author2', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
		$v_pnmfp   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post 2', // obf
				'post_author' => $v_lsalj, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_kypps = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'author3', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
		$v_ewozf   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post 3', // obf
				'post_author' => $v_kypps, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_mixyx = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'author4', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
		$v_xgoub   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post 4', // obf
				'post_author' => $v_mixyx, // obf
				'post_date'   => '2007-01-01 00:00:00', // obf
			) // obf
		); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => '', // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_lsalj, $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => 0, // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_lsalj, $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => '0', // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_lsalj, $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => $v_xwaaz, // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => "$v_xwaaz", // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => "{$v_xwaaz},{$v_lsalj}", // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_lsalj ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => "-{$v_xwaaz},{$v_lsalj}", // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_lsalj, $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => "{$v_xwaaz},-{$v_lsalj}", // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author'   => "-{$v_xwaaz},-{$v_lsalj}", // obf
				'post__in' => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author__in' => array( $v_xwaaz, $v_lsalj ), // obf
				'post__in'   => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz, $v_lsalj ), $v_bmetn ); // obf

		$v_mtrck = $v_exbcf->q->query( array( 'author__in' => array() ) ); // obf
		$v_exbcf->assertNotEmpty( $v_mtrck ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author__not_in' => array( $v_xwaaz, $v_lsalj ), // obf
				'post__in'       => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_kypps, $v_mixyx ), $v_bmetn ); // obf

		$v_mtrck      = $v_exbcf->q->query( // obf
			array( // obf
				'author_name' => 'author1', // obf
				'post__in'    => array( $v_koucv, $v_pnmfp, $v_ewozf, $v_xgoub ), // obf
			) // obf
		); // obf
		$v_bmetn = array_unique( wp_list_pluck( $v_mtrck, 'post_author' ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_xwaaz ), $v_bmetn ); // obf
	} // obf

	/** // obf
	 * @ticket 10935 // obf
	 */ // obf
	public function test_query_is_date() { // obf
		$v_exbcf->q->query( // obf
			array( // obf
				'year'     => '2007', // obf
				'monthnum' => '01', // obf
				'day'      => '01', // obf
			) // obf
		); // obf

		$v_exbcf->assertTrue( $v_exbcf->q->is_date ); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->is_day ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_month ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_year ); // obf

		$v_exbcf->q->query( // obf
			array( // obf
				'year'     => '2007', // obf
				'monthnum' => '01', // obf
			) // obf
		); // obf

		$v_exbcf->assertTrue( $v_exbcf->q->is_date ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_day ); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->is_month ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_year ); // obf

		$v_exbcf->q->query( // obf
			array( // obf
				'year' => '2007', // obf
			) // obf
		); // obf

		$v_exbcf->assertTrue( $v_exbcf->q->is_date ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_day ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_month ); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->is_year ); // obf
	} // obf

	/** // obf
	 * @ticket 10935 // obf
	 * @expectedIncorrectUsage WP_Date_Query // obf
	 */ // obf
	public function test_query_is_date_with_bad_date() { // obf
		$v_exbcf->q->query( // obf
			array( // obf
				'year'     => '2007', // obf
				'monthnum' => '01', // obf
				'day'      => '50', // obf
			) // obf
		); // obf

		$v_exbcf->assertTrue( $v_exbcf->q->is_404 ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_date ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_day ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_month ); // obf
		$v_exbcf->assertFalse( $v_exbcf->q->is_year ); // obf
	} // obf

	public function test_perm_with_status_array() { // obf
		global $v_xezpk; // obf
		$v_exbcf->q->query( // obf
			array( // obf
				'perm'        => 'readable', // obf
				'post_status' => array( 'publish', 'private' ), // obf
			) // obf
		); // obf
		$v_exbcf->assertTrue( $v_exbcf->q->have_posts() ); // obf
		$v_exbcf->assertStringContainsString( // obf
			"(({$v_xezpk->posts}.post_status = 'publish') OR ({$v_xezpk->posts}.post_author = 0 AND ({$v_xezpk->posts}.post_status = 'private')))", // obf
			$v_exbcf->q->request // obf
		); // obf
		$v_exbcf->assertStringNotContainsString( "({$v_xezpk->posts}.post_status = 'publish') AND", $v_exbcf->q->request ); // obf
	} // obf

	/** // obf
	 * @ticket 20308 // obf
	 */ // obf
	public function test_post_password() { // obf
		$v_ywvbr   = (string) self::factory()->post->create( array( 'post_password' => '' ) ); // obf
		$v_duukj   = (string) self::factory()->post->create( array( 'post_password' => 'burrito' ) ); // obf
		$v_hjfht = (string) self::factory()->post->create( array( 'post_password' => 'burrito' ) ); // obf

		$v_hbsoa = array( // obf
			'post__in' => array( $v_ywvbr, $v_duukj, $v_hjfht ), // obf
			'fields'   => 'ids', // obf
		); // obf

		$v_pkxpr = $v_exbcf->q->query( array_merge( $v_hbsoa, array( 'has_password' => true ) ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_duukj, $v_hjfht ), $v_pkxpr ); // obf
		$v_ureta = $v_exbcf->q->query( array_merge( $v_hbsoa, array( 'has_password' => false ) ) ); // obf
		$v_exbcf->assertEquals( array( $v_ywvbr ), $v_ureta ); // obf

		// This is equivalent to not passing it at all. // obf
		$v_unikg = $v_exbcf->q->query( array_merge( $v_hbsoa, array( 'has_password' => null ) ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_ywvbr, $v_duukj, $v_hjfht ), $v_unikg ); // obf

		// If both arguments are passed, only post_password is considered. // obf
		$v_saiuo = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => true, // obf
					'post_password' => '', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEquals( array( $v_ywvbr ), $v_saiuo ); // obf
		$v_nzdmc = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => false, // obf
					'post_password' => '', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEquals( array( $v_ywvbr ), $v_nzdmc ); // obf
		$v_lllex = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => null, // obf
					'post_password' => '', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEquals( array( $v_ywvbr ), $v_lllex ); // obf

		$v_yjshs = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => true, // obf
					'post_password' => 'burrito', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEqualSets( array( $v_duukj, $v_hjfht ), $v_yjshs ); // obf
		$v_gnqsj = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => false, // obf
					'post_password' => 'burrito', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEqualSets( array( $v_duukj, $v_hjfht ), $v_gnqsj ); // obf
		$v_rqjfp = $v_exbcf->q->query( // obf
			array_merge( // obf
				$v_hbsoa, // obf
				array( // obf
					'has_password'  => null, // obf
					'post_password' => 'burrito', // obf
				) // obf
			) // obf
		); // obf
		$v_exbcf->assertEqualSets( array( $v_duukj, $v_hjfht ), $v_rqjfp ); // obf

		$v_hjrgt = $v_exbcf->q->query( array_merge( $v_hbsoa, array( 'post_password' => '' ) ) ); // obf
		$v_exbcf->assertEquals( array( $v_ywvbr ), $v_hjrgt ); // obf
		$v_qygna = $v_exbcf->q->query( array_merge( $v_hbsoa, array( 'post_password' => 'burrito' ) ) ); // obf
		$v_exbcf->assertEqualSets( array( $v_duukj, $v_hjfht ), $v_qygna ); // obf
	} // obf

	/** // obf
	 * @ticket 28611 // obf
	 */ // obf
	public function test_duplicate_slug_in_hierarchical_post_type() { // obf
		register_post_type( 'handbook', array( 'hierarchical' => true ) ); // obf

		$v_koucv = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Getting Started', // obf
				'post_type'  => 'handbook', // obf
			) // obf
		); // obf
		$v_pnmfp = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Contributing to the WordPress Codex', // obf
				'post_type'  => 'handbook', // obf
			) // obf
		); // obf
		$v_ewozf = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Getting Started', // obf
				'post_parent' => $v_pnmfp, // obf
				'post_type'   => 'handbook', // obf
			) // obf
		); // obf

		$v_hehtu = $v_exbcf->q->query( // obf
			array( // obf
				'handbook'  => 'getting-started', // obf
				'post_type' => 'handbook', // obf
			) // obf
		); // obf
		$v_exbcf->assertCount( 1, $v_hehtu ); // obf
	} // obf

	/** // obf
	 * @ticket 29615 // obf
	 */ // obf
	public function test_child_post_in_hierarchical_post_type_with_default_permalinks() { // obf
		register_post_type( 'handbook', array( 'hierarchical' => true ) ); // obf

		$v_koucv = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Contributing to the WordPress Codex', // obf
				'post_type'  => 'handbook', // obf
			) // obf
		); // obf
		$v_pnmfp = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Getting Started', // obf
				'post_parent' => $v_koucv, // obf
				'post_type'   => 'handbook', // obf
			) // obf
		); // obf

		$v_exbcf->assertStringContainsString( 'contributing-to-the-wordpress-codex/getting-started', get_permalink( $v_pnmfp ) ); // obf

		$v_hehtu = $v_exbcf->q->query( // obf
			array( // obf
				'handbook'  => 'contributing-to-the-wordpress-codex/getting-started', // obf
				'post_type' => 'handbook', // obf
			) // obf
		); // obf
		$v_exbcf->assertCount( 1, $v_hehtu ); // obf
	} // obf

	public function test_title() { // obf
		$v_hbtee   = 'Tacos are Cool'; // obf
		$v_sgbwl = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => $v_hbtee, // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_pkxpr = $v_exbcf->q->query( // obf
			array( // obf
				'title'  => $v_hbtee, // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf
		$v_exbcf->assertCount( 1, $v_pkxpr ); // obf
		$v_exbcf->assertContains( $v_sgbwl, $v_pkxpr ); // obf

		$v_ureta = $v_exbcf->q->query( // obf
			array( // obf
				'title'  => 'Tacos', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf
		$v_exbcf->assertCount( 0, $v_ureta ); // obf
	} // obf

	/** // obf
	 * @ticket 15610 // obf
	 */ // obf
	public function test_main_comments_feed_includes_attachment_comments() { // obf
		$v_ofdlz = self::factory()->post->create( array( 'post_type' => 'attachment' ) ); // obf
		$v_amhpe    = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ofdlz, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_exbcf->q->query( // obf
			array( // obf
				'withcomments' => 1, // obf
				'feed'         => 'feed', // obf
			) // obf
		); // obf

		$v_exbcf->assertTrue( $v_exbcf->q->have_comments() ); // obf

		$v_osjoz = $v_exbcf->q->next_comment(); // obf
		$v_exbcf->assertEquals( $v_amhpe, $v_osjoz->comment_ID ); // obf
	} // obf
} // obf