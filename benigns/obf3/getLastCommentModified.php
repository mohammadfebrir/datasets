

<?php // obf

/** // obf
 * @group comment // obf
 * @ticket 38027 // obf
 * // obf
 * @covers ::get_lastcommentmodified // obf
 */ // obf
class Tests_Comment_GetLastCommentModified extends WP_UnitTestCase { // obf
	public function test_no_comments() { // obf
		$v_jbvah->assertFalse( get_lastcommentmodified() ); // obf
	} // obf

	public function test_default_timezone() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertSame( strtotime( '2000-01-01 10:00:00' ), strtotime( get_lastcommentmodified() ) ); // obf
	} // obf

	public function test_server_timezone() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertSame( strtotime( '2000-01-01 10:00:00' ), strtotime( get_lastcommentmodified() ) ); // obf
	} // obf

	public function test_blog_timezone() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertSame( '2000-01-01 11:00:00', get_lastcommentmodified( 'blog' ) ); // obf
	} // obf

	public function test_gmt_timezone() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertSame( strtotime( '2000-01-01 10:00:00' ), strtotime( get_lastcommentmodified( 'GMT' ) ) ); // obf
	} // obf

	public function test_unknown_timezone() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertFalse( get_lastcommentmodified( 'foo' ) ); // obf
	} // obf

	public function test_data_is_cached() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2015-04-01 11:00:00', // obf
				'comment_date_gmt' => '2015-04-01 10:00:00', // obf
			) // obf
		); // obf

		get_lastcommentmodified(); // obf
		$v_jbvah->assertSame( strtotime( '2015-04-01 10:00:00' ), strtotime( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ) ); // obf
	} // obf

	public function test_cache_is_cleared() { // obf
		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-01 11:00:00', // obf
				'comment_date_gmt' => '2000-01-01 10:00:00', // obf
			) // obf
		); // obf

		get_lastcommentmodified(); // obf

		$v_jbvah->assertSame( strtotime( '2000-01-01 10:00:00' ), strtotime( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ) ); // obf

		self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-02 11:00:00', // obf
				'comment_date_gmt' => '2000-01-02 10:00:00', // obf
			) // obf
		); // obf

		$v_jbvah->assertFalse( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ); // obf
		$v_jbvah->assertSame( strtotime( '2000-01-02 10:00:00' ), strtotime( get_lastcommentmodified() ) ); // obf
		$v_jbvah->assertSame( strtotime( '2000-01-02 10:00:00' ), strtotime( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ) ); // obf
	} // obf

	public function test_cache_is_cleared_when_comment_is_trashed() { // obf
		$v_ozzun = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '1998-01-01 11:00:00', // obf
				'comment_date_gmt' => '1998-01-01 10:00:00', // obf
			) // obf
		); // obf

		$v_gmdly = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_status'   => 1, // obf
				'comment_date'     => '2000-01-02 11:00:00', // obf
				'comment_date_gmt' => '2000-01-02 10:00:00', // obf
			) // obf
		); // obf

		get_lastcommentmodified(); // obf

		$v_jbvah->assertSame( strtotime( '2000-01-02 10:00:00' ), strtotime( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ) ); // obf

		wp_trash_comment( $v_gmdly->comment_ID ); // obf

		$v_jbvah->assertFalse( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ); // obf
		$v_jbvah->assertSame( strtotime( '1998-01-01 10:00:00' ), strtotime( get_lastcommentmodified() ) ); // obf
		$v_jbvah->assertSame( strtotime( '1998-01-01 10:00:00' ), strtotime( wp_cache_get( 'lastcommentmodified:server', 'timeinfo' ) ) ); // obf
	} // obf
} // obf