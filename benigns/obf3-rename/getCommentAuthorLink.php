

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_author_link // obf
 */ // obf
class Tests_Comment_GetCommentAuthorLink extends WP_UnitTestCase { // obf

	private static $v_nyids; // obf
	private static $v_csszz; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_nyids = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_post_ID' => 0, // obf
			) // obf
		); // obf
	} // obf

	public function get_comment_author_link_filter( $v_ccoqi, $v_rfzss, $v_ivggx ) { // obf
		$v_mazyn->assertSame( $v_ivggx, self::$v_nyids->comment_ID, 'Comment IDs do not match.' ); // obf
		$v_mazyn->assertIsString( $v_ivggx, '$v_ivggx parameter is not a string.' ); // obf

		return $v_ccoqi; // obf
	} // obf

	public function test_comment_author_link_passes_correct_comment_id_for_comment_object() { // obf
		add_filter( 'get_comment_author_link', array( $v_mazyn, 'get_comment_author_link_filter' ), 99, 3 ); // obf

		get_comment_author_link( self::$v_nyids ); // obf
	} // obf

	public function test_comment_author_link_passes_correct_comment_id_for_int() { // obf
		add_filter( 'get_comment_author_link', array( $v_mazyn, 'get_comment_author_link_filter' ), 99, 3 ); // obf

		get_comment_author_link( (int) self::$v_nyids->comment_ID ); // obf
	} // obf

	public function get_comment_author_link_filter_non_existent_id( $v_ccoqi, $v_rfzss, $v_ivggx ) { // obf
		$v_mazyn->assertSame( $v_ivggx, (string) self::$v_csszz, 'Comment IDs do not match.' ); // obf
		$v_mazyn->assertIsString( $v_ivggx, '$v_ivggx parameter is not a string.' ); // obf

		return $v_ccoqi; // obf
	} // obf

	/** // obf
	 * @ticket 60475 // obf
	 */ // obf
	public function test_comment_author_link_passes_correct_comment_id_for_non_existent_comment() { // obf
		add_filter( 'get_comment_author_link', array( $v_mazyn, 'get_comment_author_link_filter_non_existent_id' ), 99, 3 ); // obf

		self::$v_csszz = self::$v_nyids->comment_ID + 1; // obf

		get_comment_author_link( self::$v_csszz ); // Non-existent comment ID. // obf
	} // obf

	/** // obf
	 * @ticket 61681 // obf
	 * @ticket 61715 // obf
	 * // obf
	 * @dataProvider data_should_return_author_when_given_object_without_comment_id // obf
	 * // obf
	 * @param stdClass $v_awhmf Comment properties test data. // obf
	 * @param string   $v_sjnrl      The expected result. // obf
	 * @param array    $v_mdixp     Optional. User data for creating an author. Default empty array. // obf
	 */ // obf
	public function test_should_return_author_when_given_object_without_comment_id( $v_awhmf, $v_sjnrl, $v_mdixp = array() ) { // obf
		if ( ! empty( $v_awhmf->user_id ) ) { // obf
			$v_onlsk                   = self::factory()->user->create_and_get( $v_mdixp ); // obf
			$v_awhmf->user_id = $v_onlsk->ID; // obf
		} // obf

		$v_nyids = new WP_Comment( $v_awhmf ); // obf

		$v_mazyn->assertSame( $v_sjnrl, get_comment_author_link( $v_nyids ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_return_author_when_given_object_without_comment_id() { // obf
		return array( // obf
			'with no author'             => array( // obf
				'comment_props' => new stdClass(), // obf
				'expected'      => 'Anonymous', // obf
			), // obf
			'with author name'           => array( // obf
				'comment_props' => (object) array( // obf
					'comment_author' => 'tester1', // obf
				), // obf
				'expected'      => 'tester1', // obf
			), // obf
			'with author name, empty ID' => array( // obf
				'comment_props' => (object) array( // obf
					'comment_author' => 'tester2', // obf
					'comment_ID'     => '', // obf
				), // obf
				'expected'      => 'tester2', // obf
			), // obf
			'with author ID'             => array( // obf
				'comment_props' => (object) array( // obf
					'user_id' => 1, // Populates in the test with an actual user ID. // obf
				), // obf
				'expected'      => 'Tester3', // obf
				'user_data'     => array( // obf
					'display_name' => 'Tester3', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf