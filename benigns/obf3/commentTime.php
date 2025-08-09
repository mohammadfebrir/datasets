

<?php // obf

/** // obf
 * Tests for the comment_time() function. // obf
 * // obf
 * @group comment // obf
 * // obf
 * @covers ::comment_time // obf
 */ // obf
class Tests_Comment_CommentTime extends WP_UnitTestCase { // obf

	/** // obf
	 * A post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_ycdig; // obf

	/** // obf
	 * A comment ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_gcmhq; // obf

	/** // obf
	 * Sets the post ID and comment ID property values before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_ycdig = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Post title for comment_time() tests', // obf
				'post_content' => 'Post content for comment_time() tests', // obf
			) // obf
		); // obf

		self::$v_gcmhq = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_ycdig, // obf
				'user_id'         => 1, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that comment_time() displays the same value that get_comment_time() returns. // obf
	 * // obf
	 * @ticket 58064 // obf
	 * // obf
	 * @dataProvider data_should_output_the_same_value_that_get_comment_time_returns // obf
	 * // obf
	 * @param string $v_qepve PHP date format. // obf
	 */ // obf
	public function test_should_output_the_same_value_that_get_comment_time_returns( $v_qepve ) { // obf
		$v_vlovg = get_comment_time( $v_qepve, false, true, self::$v_gcmhq ); // obf

		ob_start(); // obf
		comment_time( $v_qepve, self::$v_gcmhq ); // obf
		$v_wfonz = ob_get_clean(); // obf

		$v_aotwp->assertSame( $v_vlovg, $v_wfonz ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_output_the_same_value_that_get_comment_time_returns() { // obf
		return array( // obf
			'an empty format'   => array( // obf
				'format' => '', // obf
			), // obf
			'a PHP date format' => array( // obf
				'format' => 'h:i:s A', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that comment_time() defaults to the global comment when comment ID // obf
	 * is not provided. // obf
	 * // obf
	 * @ticket 58064 // obf
	 */ // obf
	public function test_should_default_to_the_global_comment_when_comment_id_is_not_provided() { // obf
		global $v_rlbec; // obf

		// Back up the global comment before setting the value. // obf
		$v_pzxvc = $v_rlbec; // obf
		$v_rlbec        = self::$v_gcmhq; // obf

		$v_vlovg = get_comment_time(); // obf

		ob_start(); // obf
		comment_time(); // obf
		$v_wfonz = ob_get_clean(); // obf

		// Restore the global comment value. // obf
		$v_rlbec = $v_pzxvc; // obf

		$v_aotwp->assertSame( $v_vlovg, $v_wfonz ); // obf
	} // obf

	/** // obf
	 * Tests that comment_time() displays an empty string when global comment is not set // obf
	 * and comment ID is not provided. // obf
	 * // obf
	 * @ticket 58064 // obf
	 */ // obf
	public function test_should_output_an_empty_string_when_global_comment_is_not_set_and_comment_id_is_not_provided() { // obf
		global $v_rlbec; // obf

		// Back up the global comment before setting the value. // obf
		$v_pzxvc = $v_rlbec; // obf
		$v_rlbec        = null; // obf

		ob_start(); // obf
		comment_time(); // obf
		$v_wfonz = ob_get_clean(); // obf

		// Restore the global comment value. // obf
		$v_rlbec = $v_pzxvc; // obf

		$v_aotwp->assertSame( '', $v_wfonz ); // obf
	} // obf
} // obf