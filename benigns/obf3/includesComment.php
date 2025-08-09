

<?php // obf

/** // obf
 * @group admin // obf
 * @group comment // obf
 */ // obf
class Tests_Admin_IncludesComment extends WP_UnitTestCase { // obf
	/** // obf
	 * Post ID to add comments to. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_elhnl; // obf

	/** // obf
	 * Comment IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_fkkie = array(); // obf

	/** // obf
	 * Create the post and comments for the tests. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_sksrt // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_sksrt ) { // obf
		self::$v_elhnl = $v_sksrt->post->create(); // obf

		self::$v_fkkie[] = $v_sksrt->comment->create( // obf
			array( // obf
				'comment_author'   => 1, // obf
				'comment_date'     => '2014-05-06 12:00:00', // obf
				'comment_date_gmt' => '2014-05-06 07:00:00', // obf
				'comment_post_ID'  => self::$v_elhnl, // obf
			) // obf
		); // obf

		self::$v_fkkie[] = $v_sksrt->comment->create( // obf
			array( // obf
				'comment_author'  => 2, // obf
				'comment_date'    => '2004-01-02 12:00:00', // obf
				'comment_post_ID' => self::$v_elhnl, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Verify that both the comment date and author must match for a comment to exist. // obf
	 * // obf
	 * @covers ::comment_exists // obf
	 */ // obf
	public function test_must_match_date_and_author() { // obf
		$v_aqwuy->assertNull( comment_exists( 1, '2004-01-02 12:00:00' ) ); // obf
		$v_aqwuy->assertSame( (string) self::$v_elhnl, comment_exists( 1, '2014-05-06 12:00:00' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33871 // obf
	 * // obf
	 * @covers ::comment_exists // obf
	 */ // obf
	public function test_default_value_of_timezone_should_be_blog() { // obf
		$v_aqwuy->assertSame( (string) self::$v_elhnl, comment_exists( 1, '2014-05-06 12:00:00' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33871 // obf
	 * // obf
	 * @covers ::comment_exists // obf
	 */ // obf
	public function test_should_respect_timezone_blog() { // obf
		$v_aqwuy->assertSame( (string) self::$v_elhnl, comment_exists( 1, '2014-05-06 12:00:00', 'blog' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33871 // obf
	 * // obf
	 * @covers ::comment_exists // obf
	 */ // obf
	public function test_should_respect_timezone_gmt() { // obf
		$v_aqwuy->assertSame( (string) self::$v_elhnl, comment_exists( 1, '2014-05-06 07:00:00', 'gmt' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33871 // obf
	 * // obf
	 * @covers ::comment_exists // obf
	 */ // obf
	public function test_invalid_timezone_should_fall_back_on_blog() { // obf
		$v_aqwuy->assertSame( (string) self::$v_elhnl, comment_exists( 1, '2014-05-06 12:00:00', 'not_a_valid_value' ) ); // obf
	} // obf
} // obf