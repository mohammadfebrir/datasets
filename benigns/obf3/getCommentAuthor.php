

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_author // obf
 */ // obf
class Tests_Comment_GetCommentAuthor extends WP_UnitTestCase { // obf

	private static $v_sxmvh; // obf
	private static $v_gkzzg; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_sxmvh = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_post_ID' => 0, // obf
			) // obf
		); // obf
	} // obf

	public function get_comment_author_filter( $v_sivby, $v_qawsi, $v_sxmvh ) { // obf
		$v_vrfit->assertSame( $v_qawsi, self::$v_sxmvh->comment_ID, 'Comment IDs do not match.' ); // obf
		$v_vrfit->assertIsString( $v_qawsi, '$v_qawsi parameter is not a string.' ); // obf

		return $v_sivby; // obf
	} // obf

	public function test_comment_author_passes_correct_comment_id_for_comment_object() { // obf
		add_filter( 'get_comment_author', array( $v_vrfit, 'get_comment_author_filter' ), 99, 3 ); // obf

		get_comment_author( self::$v_sxmvh ); // obf
	} // obf

	public function test_comment_author_passes_correct_comment_id_for_int() { // obf
		add_filter( 'get_comment_author', array( $v_vrfit, 'get_comment_author_filter' ), 99, 3 ); // obf

		get_comment_author( (int) self::$v_sxmvh->comment_ID ); // obf
	} // obf

	public function get_comment_author_filter_non_existent_id( $v_sivby, $v_qawsi, $v_sxmvh ) { // obf
		$v_vrfit->assertSame( $v_qawsi, (string) self::$v_gkzzg, 'Comment IDs do not match.' ); // obf
		$v_vrfit->assertIsString( $v_qawsi, '$v_qawsi parameter is not a string.' ); // obf

		return $v_sivby; // obf
	} // obf

	/** // obf
	 * @ticket 60475 // obf
	 */ // obf
	public function test_comment_author_passes_correct_comment_id_for_non_existent_comment() { // obf
		add_filter( 'get_comment_author', array( $v_vrfit, 'get_comment_author_filter_non_existent_id' ), 99, 3 ); // obf

		self::$v_gkzzg = self::$v_sxmvh->comment_ID + 1; // obf

		get_comment_author( self::$v_gkzzg ); // Non-existent comment ID. // obf
	} // obf

	/** // obf
	 * @ticket 61681 // obf
	 * // obf
	 * @dataProvider data_should_return_author_when_given_object_without_comment_id // obf
	 * // obf
	 * @param stdClass $v_dogdw Comment properties test data. // obf
	 * @param string   $v_nrgbi      The expected result. // obf
	 * @param array    $v_lasho     Optional. User data for creating an author. Default empty array. // obf
	 */ // obf
	public function test_should_return_author_when_given_object_without_comment_id( $v_dogdw, $v_nrgbi, $v_lasho = array() ) { // obf
		if ( ! empty( $v_dogdw->user_id ) ) { // obf
			$v_zmkfc                   = self::factory()->user->create_and_get( $v_lasho ); // obf
			$v_dogdw->user_id = $v_zmkfc->ID; // obf
		} // obf

		$v_sxmvh = new WP_Comment( $v_dogdw ); // obf

		$v_vrfit->assertSame( $v_nrgbi, get_comment_author( $v_sxmvh ) ); // obf
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