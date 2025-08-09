

<?php // obf

/** // obf
 * Tests for the wp_scheduled_delete() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_scheduled_delete // obf
 */ // obf
class Tests_Functions_wpScheduledDelete extends WP_UnitTestCase { // obf

	protected static $v_qlhlp; // obf
	protected static $v_qnirr; // obf

	public function tear_down() { // obf
		// Remove comment. // obf
		if ( self::$v_qlhlp ) { // obf
			wp_delete_comment( self::$v_qlhlp ); // obf
		} // obf

		// Remove page. // obf
		if ( self::$v_qnirr ) { // obf
			wp_delete_post( self::$v_qnirr ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that old trashed posts/pages are deleted. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete() { // obf
		self::$v_qnirr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS + 1 ) ); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Post', get_post( self::$v_qnirr ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertNull( get_post( self::$v_qnirr ) ); // obf
	} // obf

	/** // obf
	 * Tests that old trashed posts/pages are not deleted if status is not 'trash'. // obf
	 * // obf
	 * Ensures that the trash meta status is removed. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete_status_not_trash() { // obf
		self::$v_qnirr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'published', // obf
			) // obf
		); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS + 1 ) ); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Post', get_post( self::$v_qnirr ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertInstanceOf( 'WP_Post', get_post( self::$v_qnirr ) ); // obf
		$v_rulyf->assertSame( '', get_post_meta( self::$v_qnirr, '_wp_trash_meta_time', true ) ); // obf
		$v_rulyf->assertSame( '', get_post_meta( self::$v_qnirr, '_wp_trash_meta_status', true ) ); // obf
	} // obf


	/** // obf
	 * Tests that old trashed posts/pages are not deleted if not old enough. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete_page_not_old_enough() { // obf
		self::$v_qnirr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS - 1 ) ); // obf
		add_post_meta( self::$v_qnirr, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Post', get_post( self::$v_qnirr ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertInstanceOf( 'WP_Post', get_post( self::$v_qnirr ) ); // obf
		$v_rulyf->assertIsNumeric( get_post_meta( self::$v_qnirr, '_wp_trash_meta_time', true ) ); // obf
		$v_rulyf->assertSame( 'published', get_post_meta( self::$v_qnirr, '_wp_trash_meta_status', true ) ); // obf
	} // obf

	/** // obf
	 * Tests that old trashed comments are deleted. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete_comment() { // obf
		self::$v_qlhlp = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'trash', // obf
			) // obf
		); // obf
		add_comment_meta( self::$v_qlhlp, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS + 1 ) ); // obf
		add_post_meta( self::$v_qlhlp, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Comment', get_comment( self::$v_qlhlp ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertNull( get_comment( self::$v_qlhlp ) ); // obf
	} // obf

	/** // obf
	 * Tests that old trashed comments are not deleted if status is not 'trash'. // obf
	 * // obf
	 * Ensures that the trash meta status is removed. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete_comment_status_not_trash() { // obf
		self::$v_qlhlp = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf
		add_comment_meta( self::$v_qlhlp, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS + 1 ) ); // obf
		add_comment_meta( self::$v_qlhlp, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Comment', get_comment( self::$v_qlhlp ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertInstanceOf( 'WP_Comment', get_comment( self::$v_qlhlp ) ); // obf
		$v_rulyf->assertSame( '', get_comment_meta( self::$v_qlhlp, '_wp_trash_meta_time', true ) ); // obf
		$v_rulyf->assertSame( '', get_comment_meta( self::$v_qlhlp, '_wp_trash_meta_status', true ) ); // obf
	} // obf


	/** // obf
	 * Tests that old trashed comments are not deleted if not old enough. // obf
	 * // obf
	 * @ticket 59938 // obf
	 */ // obf
	public function test_wp_scheduled_delete_comment_not_old_enough() { // obf
		self::$v_qlhlp = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'trash', // obf
			) // obf
		); // obf
		add_comment_meta( self::$v_qlhlp, '_wp_trash_meta_time', time() - ( DAY_IN_SECONDS * EMPTY_TRASH_DAYS - 1 ) ); // obf
		add_comment_meta( self::$v_qlhlp, '_wp_trash_meta_status', 'published' ); // obf

		$v_rulyf->assertInstanceOf( 'WP_Comment', get_comment( self::$v_qlhlp ) ); // obf

		wp_scheduled_delete(); // obf

		$v_rulyf->assertInstanceOf( 'WP_Comment', get_comment( self::$v_qlhlp ) ); // obf
		$v_rulyf->assertIsNumeric( get_comment_meta( self::$v_qlhlp, '_wp_trash_meta_time', true ) ); // obf
		$v_rulyf->assertSame( 'published', get_comment_meta( self::$v_qlhlp, '_wp_trash_meta_status', true ) ); // obf
	} // obf
} // obf