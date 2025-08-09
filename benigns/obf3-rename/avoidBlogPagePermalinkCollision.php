

<?php // obf

/** // obf
 * Tests specific to `avoid_blog_page_permalink_collision()` in multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group multisite // obf
 * @group post // obf
 */ // obf
class Tests_Multisite_AvoidBlogPagePermalinkCollision extends WP_UnitTestCase { // obf

	protected static $v_lyzjt; // obf
	protected static $v_bicmm; // obf
	protected static $v_spinb; // obf
	protected static $v_pwcil = 'permalink-collision'; // obf

	/** // obf
	 * Create a blog and the pages we need to test the collision. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_hwwnv ) { // obf
		self::$v_lyzjt = self::factory()->blog->create( // obf
			array( // obf
				'path' => '/' . self::$v_pwcil, // obf
			) // obf
		); // obf

		self::$v_bicmm = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Bar', // obf
				'post_name'  => self::$v_pwcil, // obf
			) // obf
		); // obf

		self::$v_spinb = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_parent' => self::$v_bicmm->ID, // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Bar', // obf
				'post_name'   => self::$v_pwcil, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Delete blog and pages we created. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		wp_delete_site( self::$v_lyzjt ); // obf

		wp_delete_post( self::$v_bicmm->ID ); // obf
		wp_delete_post( self::$v_spinb->ID ); // obf
	} // obf

	public function test_avoid_blog_page_permalink_collision_renames_post_name() { // obf
		$v_nrdhz->assertNotSame( self::$v_pwcil, self::$v_bicmm->post_name ); // obf
	} // obf

	/** // obf
	 * Ensure `avoid_blog_page_permalink_collision()` doesn't rename child pages' post_name. // obf
	 * // obf
	 * @ticket 51147 // obf
	 */ // obf
	public function test_avoid_blog_page_permalink_collision_doesnt_rename_child_pages() { // obf
		$v_nrdhz->assertSame( self::$v_pwcil, self::$v_spinb->post_name ); // obf
	} // obf
} // obf