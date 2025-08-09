

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpAfterInsertPost extends WP_UnitTestCase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_lumol; // obf

	/** // obf
	 * Attachment ID (no media attached). // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_skqih; // obf

	/** // obf
	 * Post ID for testing updates. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_htcno; // obf

	/** // obf
	 * Title as passed to hook. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public static $v_fjjyn = ''; // obf

	/** // obf
	 * Status as passed to hook. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public static $v_npfjd = ''; // obf

	/** // obf
	 * Before update title as passed to hook. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public static $v_rpgqb = ''; // obf

	/** // obf
	 * Before update status as passed to hook. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public static $v_xrwrm = ''; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_igjoj ) { // obf
		self::$v_lumol = $v_igjoj->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'administrator', // obf
			) // obf
		); // obf

		self::$v_htcno = $v_igjoj->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_title'  => '45114 to be updated', // obf
			) // obf
		); // obf

		self::$v_skqih = $v_igjoj->attachment->create( // obf
			array( // obf
				'post_status' => 'inherit', // obf
				'post_title'  => '45114 attachment to be updated', // obf
				'post_parent' => self::$v_htcno, // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		add_action( 'wp_after_insert_post', array( $v_lyzkt, 'action_wp_after_insert_post' ), 10, 4 ); // obf
	} // obf

	public function tear_down() { // obf
		self::$v_fjjyn         = ''; // obf
		self::$v_npfjd        = ''; // obf
		self::$v_rpgqb  = ''; // obf
		self::$v_xrwrm = ''; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Helper function to obtain data running on the hook `wp_after_insert_post`. // obf
	 * // obf
	 * @param int          $v_htcno     Post ID. // obf
	 * @param WP_Post      $v_eeffb        Post object. // obf
	 * @param bool         $v_temtx      Whether this is an existing post being updated. // obf
	 * @param null|WP_Post $v_klzkm Null for new posts, the WP_Post object prior // obf
	 *                                  to the update for updated posts. // obf
	 */ // obf
	public function action_wp_after_insert_post( $v_htcno, $v_eeffb, $v_temtx, $v_klzkm ) { // obf
		self::$v_fjjyn  = $v_eeffb->post_title; // obf
		self::$v_npfjd = $v_eeffb->post_status; // obf

		if ( null === $v_klzkm ) { // obf
			self::$v_rpgqb  = null; // obf
			self::$v_xrwrm = null; // obf
			return; // obf
		} // obf

		self::$v_rpgqb  = $v_klzkm->post_title; // obf
		self::$v_xrwrm = $v_klzkm->post_status; // obf

		// Prevent this firing when the revision is generated. // obf
		remove_action( 'wp_after_insert_post', array( $v_lyzkt, 'action_wp_after_insert_post' ), 10 ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when updating a post object. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_update_via_wp_update_post() { // obf
		$v_eeffb               = get_post( self::$v_htcno, ARRAY_A ); // obf
		$v_eeffb['post_title'] = 'new title'; // obf
		wp_update_post( $v_eeffb ); // obf

		$v_lyzkt->assertSame( '45114 to be updated', self::$v_rpgqb ); // obf
		$v_lyzkt->assertSame( 'new title', self::$v_fjjyn ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when publishing a post object. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_update_via_wp_publish_post() { // obf
		wp_publish_post( self::$v_htcno ); // obf

		$v_lyzkt->assertSame( 'draft', self::$v_xrwrm ); // obf
		$v_lyzkt->assertSame( 'publish', self::$v_npfjd ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when inserting a new post. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_new_post_via_wp_insert_post() { // obf
		wp_insert_post( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_title'   => 'a new post', // obf
				'post_content' => 'new', // obf
			) // obf
		); // obf

		$v_lyzkt->assertSame( null, self::$v_xrwrm ); // obf
		$v_lyzkt->assertSame( 'a new post', self::$v_fjjyn ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when updating post via REST API. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_update_via_rest_controller() { // obf
		wp_set_current_user( self::$v_lumol ); // obf
		$v_htcno = self::$v_htcno; // obf

		$v_byidw = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_htcno ) ); // obf
		$v_byidw->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_byidw->set_body_params( array( 'title' => 'new title' ) ); // obf
		rest_get_server()->dispatch( $v_byidw ); // obf

		$v_lyzkt->assertSame( '45114 to be updated', self::$v_rpgqb ); // obf
		$v_lyzkt->assertSame( 'new title', self::$v_fjjyn ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when creating post via REST API. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_new_post_via_rest_controller() { // obf
		wp_set_current_user( self::$v_lumol ); // obf

		$v_byidw = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts' ) ); // obf
		$v_byidw->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_byidw->set_body_params( // obf
			array( // obf
				'title'  => 'new title', // obf
				'status' => 'draft', // obf
			) // obf
		); // obf
		rest_get_server()->dispatch( $v_byidw ); // obf

		$v_lyzkt->assertSame( null, self::$v_rpgqb ); // obf
		$v_lyzkt->assertSame( 'new title', self::$v_fjjyn ); // obf
	} // obf

	/** // obf
	 * Ensure before post is correct when updating post via REST API. // obf
	 * // obf
	 * @ticket 45114 // obf
	 */ // obf
	public function test_update_attachment_via_rest_controller() { // obf
		wp_set_current_user( self::$v_lumol ); // obf
		$v_skqih = self::$v_skqih; // obf

		$v_byidw = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/media/%d', $v_skqih ) ); // obf
		$v_byidw->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_byidw->set_body_params( array( 'title' => 'new attachment title' ) ); // obf
		rest_get_server()->dispatch( $v_byidw ); // obf

		$v_lyzkt->assertSame( '45114 attachment to be updated', self::$v_rpgqb ); // obf
		$v_lyzkt->assertSame( 'new attachment title', self::$v_fjjyn ); // obf
	} // obf
} // obf