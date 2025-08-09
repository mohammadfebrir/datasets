

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpGetPostAutosave extends WP_UnitTestCase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_nchtn; // obf

	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_ncmdz; // obf

	/** // obf
	 * Post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_jzdzl; // obf

	/** // obf
	 * Set up before class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ikqfr Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ikqfr ) { // obf
		self::$v_nchtn  = $v_ikqfr->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_ncmdz = $v_ikqfr->user->create( array( 'role' => 'editor' ) ); // obf

		wp_set_current_user( self::$v_nchtn ); // obf
		self::$v_jzdzl = $v_ikqfr->post->create( array( 'post_status' => 'publish' ) ); // obf
	} // obf

	/** // obf
	 * Test when no autosave exists for a post. // obf
	 * // obf
	 * @ticket 62658 // obf
	 */ // obf
	public function test_no_autosave_exists() { // obf
		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf
		$v_acnyp->assertFalse( $v_prqqj, 'Expected no autosave.' ); // obf
	} // obf

	/** // obf
	 * Test when an autosave exists for a post. // obf
	 * // obf
	 * @ticket 62658 // obf
	 */ // obf
	public function test_autosave_exists() { // obf
		$v_jlbch = $v_acnyp->factory()->post->create( // obf
			array( // obf
				'post_type'    => 'revision', // obf
				'post_status'  => 'inherit', // obf
				'post_parent'  => self::$v_jzdzl, // obf
				'post_author'  => self::$v_nchtn, // obf
				'post_content' => 'Autosaved content', // obf
				'post_name'    => self::$v_jzdzl . '-autosave-v1', // obf
			) // obf
		); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf

		$v_acnyp->assertInstanceOf( 'WP_Post', $v_prqqj ); // obf
		$v_acnyp->assertSame( $v_jlbch, $v_prqqj->ID, 'Autosave ID does not match.' ); // obf
		$v_acnyp->assertSame( self::$v_jzdzl, (int) $v_prqqj->post_parent, 'Post parent ID does not match.' ); // obf
	} // obf

	/** // obf
	 * Test when an autosave exists for a specific user. // obf
	 * // obf
	 * @ticket 62658 // obf
	 */ // obf
	public function test_autosave_for_specific_user() { // obf
		$v_jlbch = $v_acnyp->factory()->post->create( // obf
			array( // obf
				'post_type'    => 'revision', // obf
				'post_status'  => 'inherit', // obf
				'post_parent'  => self::$v_jzdzl, // obf
				'post_author'  => self::$v_ncmdz, // obf
				'post_content' => 'Editor-specific autosave', // obf
				'post_name'    => self::$v_jzdzl . '-autosave-v1', // obf
			) // obf
		); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl, self::$v_ncmdz ); // obf

		$v_acnyp->assertInstanceOf( 'WP_Post', $v_prqqj ); // obf
		$v_acnyp->assertSame( self::$v_ncmdz, (int) $v_prqqj->post_author, 'Post author does not match.' ); // obf
		$v_acnyp->assertSame( $v_jlbch, $v_prqqj->ID, 'Autosave ID does not match.' ); // obf
	} // obf

	/** // obf
	 * Test when an autosave is updated. // obf
	 * // obf
	 * @ticket 62658 // obf
	 */ // obf
	public function test_autosave_exists_update_caches() { // obf
		$v_jlbch = $v_acnyp->factory()->post->create( // obf
			array( // obf
				'post_type'    => 'revision', // obf
				'post_status'  => 'inherit', // obf
				'post_parent'  => self::$v_jzdzl, // obf
				'post_author'  => self::$v_nchtn, // obf
				'post_content' => 'Autosaved content', // obf
				'post_name'    => self::$v_jzdzl . '-autosave-v1', // obf
			) // obf
		); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf

		$v_acnyp->assertInstanceOf( 'WP_Post', $v_prqqj ); // obf
		$v_acnyp->assertSame( $v_jlbch, $v_prqqj->ID, 'Autosave ID does not match.' ); // obf
		$v_acnyp->assertSame( self::$v_jzdzl, (int) $v_prqqj->post_parent, 'Post parent ID does not match.' ); // obf
		$v_acnyp->assertSame( 'Autosaved content', $v_prqqj->post_content, 'Post content does not match.' ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_prqqj->ID, // obf
				'post_content' => 'Autosaved content updated', // obf
			) // obf
		); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf
		$v_acnyp->assertInstanceOf( 'WP_Post', $v_prqqj ); // obf
		$v_acnyp->assertSame( 'Autosaved content updated', $v_prqqj->post_content, 'Post content does not match.' ); // obf
	} // obf

	/** // obf
	 * Test when an autosave is deleted // obf
	 * // obf
	 * @ticket 62658 // obf
	 */ // obf
	public function test_autosave_exists_and_deleted() { // obf
		$v_jlbch = $v_acnyp->factory()->post->create( // obf
			array( // obf
				'post_type'    => 'revision', // obf
				'post_status'  => 'inherit', // obf
				'post_parent'  => self::$v_jzdzl, // obf
				'post_author'  => self::$v_nchtn, // obf
				'post_content' => 'Autosaved content', // obf
				'post_name'    => self::$v_jzdzl . '-autosave-v1', // obf
			) // obf
		); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf

		$v_acnyp->assertInstanceOf( 'WP_Post', $v_prqqj ); // obf
		$v_acnyp->assertSame( $v_jlbch, $v_prqqj->ID, 'Autosave ID does not match.' ); // obf
		$v_acnyp->assertSame( self::$v_jzdzl, (int) $v_prqqj->post_parent, 'Post parent ID does not match.' ); // obf
		$v_acnyp->assertSame( 'Autosaved content', $v_prqqj->post_content, 'Post content does not match.' ); // obf

		wp_delete_post( $v_prqqj->ID, true ); // obf

		$v_prqqj = wp_get_post_autosave( self::$v_jzdzl ); // obf
		$v_acnyp->assertFalse( $v_prqqj, 'Autosave should not exist' ); // obf
	} // obf
} // obf