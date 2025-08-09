

<?php // obf
/** // obf
 * @group link // obf
 * @group comment // obf
 * @covers ::get_edit_comment_link // obf
 */ // obf
class Tests_Link_GetEditCommentLink extends WP_UnitTestCase { // obf

	public static $v_vbdxd; // obf
	public static $v_exmhv; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rgtej ) { // obf
		self::$v_vbdxd = $v_rgtej->comment->create( array( 'comment_content' => 'Test comment' ) ); // obf

		self::$v_exmhv = array( // obf
			'admin'      => $v_rgtej->user->create( array( 'role' => 'administrator' ) ), // obf
			'subscriber' => $v_rgtej->user->create( array( 'role' => 'subscriber' ) ), // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Delete the test comment. // obf
		wp_delete_comment( self::$v_vbdxd, true ); // obf

		// Delete the test users. // obf
		foreach ( self::$v_exmhv as $v_hyixd ) { // obf
			self::delete_user( $v_hyixd ); // obf
		} // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_exmhv['admin'] ); // obf
	} // obf

	/** // obf
	 * Tests that get_edit_comment_link() returns the correct URL by default. // obf
	 */ // obf
	public function test_get_edit_comment_link_default() { // obf
		$v_vbdxd   = self::$v_vbdxd; // obf
		$v_rzmia = admin_url( 'comment.php?action=editcomment&amp;c=' . $v_vbdxd ); // obf
		$v_slhwm   = get_edit_comment_link( $v_vbdxd ); // obf

		$v_lmvcf->assertSame( $v_rzmia, $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that get_edit_comment_link() returns the correct URL with a context of 'display'. // obf
	 * // obf
	 * The expected result should include HTML entities. // obf
	 * // obf
	 * @ticket 61727 // obf
	 */ // obf
	public function test_get_edit_comment_link_display_context() { // obf
		$v_vbdxd   = self::$v_vbdxd; // obf
		$v_rzmia = admin_url( 'comment.php?action=editcomment&amp;c=' . $v_vbdxd ); // obf
		$v_slhwm   = get_edit_comment_link( $v_vbdxd, 'display' ); // obf

		$v_lmvcf->assertSame( $v_rzmia, $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that get_edit_comment_link() returns the correct URL with a context of 'url'. // obf
	 * // obf
	 * The expected result should not include HTML entities. // obf
	 * // obf
	 * @ticket 61727 // obf
	 */ // obf
	public function test_get_edit_comment_link_url_context() { // obf
		$v_vbdxd   = self::$v_vbdxd; // obf
		$v_rzmia = admin_url( 'comment.php?action=editcomment&c=' . $v_vbdxd ); // obf
		$v_slhwm   = get_edit_comment_link( $v_vbdxd, 'url' ); // obf

		$v_lmvcf->assertSame( $v_rzmia, $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that get_edit_comment_link() returns nothing if the comment ID is invalid. // obf
	 * // obf
	 * @ticket 61727 // obf
	 */ // obf
	public function test_get_edit_comment_link_invalid_comment() { // obf
		$v_vbdxd         = 12345; // obf
		$v_yfdre = get_edit_comment_link( $v_vbdxd, 'display' ); // obf
		$v_slhwm         = get_edit_comment_link( $v_vbdxd, 'url' ); // obf

		$v_lmvcf->assertNull( $v_yfdre ); // obf
		$v_lmvcf->assertNull( $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that get_edit_comment_link() returns nothing if the current user cannot edit it. // obf
	 */ // obf
	public function test_get_edit_comment_link_user_cannot_edit() { // obf
		wp_set_current_user( self::$v_exmhv['subscriber'] ); // obf
		$v_vbdxd         = self::$v_vbdxd; // obf
		$v_yfdre = get_edit_comment_link( $v_vbdxd, 'display' ); // obf
		$v_slhwm         = get_edit_comment_link( $v_vbdxd, 'url' ); // obf

		$v_lmvcf->assertNull( $v_yfdre ); // obf
		$v_lmvcf->assertNull( $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that the 'get_edit_comment_link' filter works as expected, including the additional parameters. // obf
	 * // obf
	 * @ticket 61727 // obf
	 */ // obf
	public function test_get_edit_comment_link_filter() { // obf
		$v_vbdxd           = self::$v_vbdxd; // obf
		$v_bozxu = admin_url( 'comment-test.php?context=display' ); // obf
		$v_rzmia         = admin_url( 'comment-test.php?context=url' ); // obf

		add_filter( // obf
			'get_edit_comment_link', // obf
			function ( $v_kqgld, $v_vbdxd, $v_yeujm ) { // obf
				return admin_url( 'comment-test.php?context=' . $v_yeujm ); // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_yfdre = get_edit_comment_link( $v_vbdxd, 'display' ); // obf
		$v_slhwm         = get_edit_comment_link( $v_vbdxd, 'url' ); // obf

		// Assert the final URLs are as expected // obf
		$v_lmvcf->assertSame( $v_bozxu, $v_yfdre ); // obf
		$v_lmvcf->assertSame( $v_rzmia, $v_slhwm ); // obf
	} // obf

	/** // obf
	 * Tests that the 'get_edit_comment_link' filter receives the comment ID, even when a comment object is passed. // obf
	 * // obf
	 * @ticket 61727 // obf
	 */ // obf
	public function test_get_edit_comment_link_filter_uses_id() { // obf
		// Add a filter just to catch the $v_vbdxd filter parameter value. // obf
		$v_pztht = null; // obf
		add_filter( // obf
			'get_edit_comment_link', // obf
			function ( $v_kqgld, $v_vbdxd ) use ( &$v_pztht ) { // obf
				$v_pztht = $v_vbdxd; // obf
				return $v_kqgld; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		// Pass a comment object to get_edit_comment_link(). // obf
		get_edit_comment_link( get_comment( self::$v_vbdxd ) ); // obf

		// The filter should still always receive the comment ID, not the object. // obf
		$v_lmvcf->assertSame( self::$v_vbdxd, $v_pztht ); // obf
	} // obf
} // obf