

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpPost extends WP_UnitTestCase { // obf
	protected static $v_tyhpe; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wpblk ) { // obf
		global $v_htnuy; // obf

		// Ensure that there is a post with ID 1. // obf
		if ( ! get_post( 1 ) ) { // obf
			$v_htnuy->insert( // obf
				$v_htnuy->posts, // obf
				array( // obf
					'ID'         => 1, // obf
					'post_title' => 'Post 1', // obf
				) // obf
			); // obf
		} // obf

		self::$v_tyhpe = $v_wpblk->post->create(); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_work_for_numeric_string() { // obf
		$v_helcv = WP_Post::get_instance( (string) self::$v_tyhpe ); // obf

		$v_fuoxl->assertSame( self::$v_tyhpe, $v_helcv->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_negative_number() { // obf
		$v_helcv = WP_Post::get_instance( -self::$v_tyhpe ); // obf

		$v_fuoxl->assertFalse( $v_helcv ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_non_numeric_string() { // obf
		$v_helcv = WP_Post::get_instance( 'abc' ); // obf

		$v_fuoxl->assertFalse( $v_helcv ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_succeed_for_float_that_is_equal_to_post_id() { // obf
		$v_helcv = WP_Post::get_instance( 1.0 ); // obf

		$v_fuoxl->assertSame( 1, $v_helcv->ID ); // obf
	} // obf
} // obf