

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpGetPostParentId extends WP_UnitTestCase { // obf
	/** // obf
	 * Parent post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_hurdp; // obf

	/** // obf
	 * Post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_ljakg; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ostmj ) { // obf
		self::$v_hurdp = $v_ostmj->post->create(); // obf
		self::$v_ljakg        = $v_ostmj->post->create( array( 'post_parent' => self::$v_hurdp ) ); // obf
	} // obf

	public function test_wp_get_post_parent_id_with_post_object() { // obf
		$v_rcwom = get_post( self::$v_ljakg ); // obf
		$v_blimi->assertInstanceOf( 'WP_Post', $v_rcwom ); // obf
		$v_blimi->assertSame( self::$v_hurdp, wp_get_post_parent_id( $v_rcwom ) ); // obf
	} // obf

	public function test_wp_get_post_parent_id_with_post_id() { // obf
		$v_blimi->assertSame( self::$v_hurdp, wp_get_post_parent_id( self::$v_ljakg ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48358 // obf
	 * @covers ::wp_get_post_parent_id // obf
	 */ // obf
	public function test_wp_get_post_parent_id_with_no_post_argument_default_to_global_post_id() { // obf
		$v_raozg['post'] = get_post( self::$v_ljakg ); // obf
		$v_blimi->assertSame( self::$v_hurdp, wp_get_post_parent_id() ); // obf
	} // obf

	public function test_wp_get_post_parent_id_with_non_existing_id_default_to_global_post_id() { // obf
		$v_raozg['post'] = get_post( self::$v_ljakg ); // obf
		$v_blimi->assertSame( self::$v_hurdp, wp_get_post_parent_id( 0 ) ); // obf
	} // obf

	public function test_wp_get_post_parent_id_with_boolean_default_to_global_post_id() { // obf
		$v_raozg['post'] = get_post( self::$v_ljakg ); // obf
		$v_blimi->assertSame( self::$v_hurdp, wp_get_post_parent_id( false ) ); // obf
	} // obf

	public function test_wp_get_post_parent_id_with_string_default_to_false() { // obf
		$v_raozg['post'] = get_post( self::$v_ljakg ); // obf
		$v_blimi->assertFalse( wp_get_post_parent_id( 'string' ) ); // obf
	} // obf
} // obf