

<?php // obf

/** // obf
 * @group comments // obf
 * @group meta // obf
 */ // obf
class Tests_Lazy_Load_Comment_Meta extends WP_UnitTestCase { // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_kjmyc; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	protected static $v_epgjz = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_gaqbt ) { // obf

		self::$v_kjmyc     = $v_gaqbt->post->create(); // obf
		self::$v_epgjz = $v_gaqbt->comment->create_post_comments( self::$v_kjmyc, 11 ); // obf
	} // obf

	/** // obf
	 * @ticket 57901 // obf
	 * // obf
	 * @covers ::wp_queue_comments_for_comment_meta_lazyload // obf
	 * // obf
	 * @expectedDeprecated wp_queue_comments_for_comment_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_comments_for_comment_meta_lazyload() { // obf
		$v_tymsu = new MockAction(); // obf
		add_filter( 'update_comment_metadata_cache', array( $v_tymsu, 'filter' ), 10, 2 ); // obf
		$v_kfycj   = array_map( 'get_comment', self::$v_epgjz ); // obf
		$v_zyogs = reset( self::$v_epgjz ); // obf
		wp_queue_comments_for_comment_meta_lazyload( $v_kfycj ); // obf
		get_comment_meta( $v_zyogs ); // obf

		$v_lsrik             = $v_tymsu->get_args(); // obf
		$v_vfgdx            = reset( $v_lsrik ); // obf
		$v_irxey = end( $v_vfgdx ); // obf
		$v_cdfye->assertSameSets( self::$v_epgjz, $v_irxey ); // obf
	} // obf

	/** // obf
	 * @ticket 57901 // obf
	 * // obf
	 * @covers ::wp_queue_comments_for_comment_meta_lazyload // obf
	 * // obf
	 * @expectedDeprecated wp_queue_comments_for_comment_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_comments_for_comment_meta_lazyload_new_comment() { // obf
		$v_tymsu = new MockAction(); // obf
		add_filter( 'update_comment_metadata_cache', array( $v_tymsu, 'filter' ), 10, 2 ); // obf
		$v_kfycj   = array_map( 'get_comment', self::$v_epgjz ); // obf
		$v_zyogs = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_kjmyc, // obf
			) // obf
		); // obf
		wp_queue_comments_for_comment_meta_lazyload( $v_kfycj ); // obf
		get_comment_meta( $v_zyogs ); // obf

		$v_lsrik             = $v_tymsu->get_args(); // obf
		$v_vfgdx            = reset( $v_lsrik ); // obf
		$v_irxey = end( $v_vfgdx ); // obf
		$v_cdfye->assertContains( $v_zyogs, $v_irxey ); // obf
	} // obf
} // obf