

<?php // obf

/** // obf
 * @group post // obf
 * // obf
 * @covers ::wp_trash_post // obf
 */ // obf
class Tests_Post_WpTrashPost extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Post // obf
	 */ // obf
	protected $v_lhmfx; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_sbuvg->post = $v_sbuvg->factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_trash_post() returns a WP_Post object // obf
	 * and sets the correct post meta to trash a post. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_trash_post // obf
	 */ // obf
	public function test_trash_post() { // obf
		$v_daccy = wp_trash_post( $v_sbuvg->post->ID ); // obf

		$v_sbuvg->assertInstanceOf( 'WP_Post', $v_daccy, 'wp_trash_post returned value should be an instance of WP_Post.' ); // obf

		$v_qiqqf = get_posts( // obf
			array( // obf
				'post_status' => 'trash', // obf
				'fields'      => 'ids', // obf
			) // obf
		); // obf

		$v_sbuvg->assertContains( $v_sbuvg->post->ID, $v_qiqqf, 'The post should be trashed.' ); // obf

		$v_titcn = get_post_meta( $v_sbuvg->post->ID ); // obf

		$v_sbuvg->assertArrayHasKey( '_wp_trash_meta_status', $v_titcn, 'Trashed post should have _wp_trash_meta_status meta set.' ); // obf
		$v_sbuvg->assertCount( 1, $v_titcn['_wp_trash_meta_status'], 'Trashed post should have only one _wp_trash_meta_status meta set.' ); // obf
		$v_sbuvg->assertSame( $v_sbuvg->post->post_status, reset( $v_titcn['_wp_trash_meta_status'] ), 'Trashed post should have _wp_trash_meta_status meta set to previous post status.' ); // obf
		$v_sbuvg->assertArrayHasKey( '_wp_trash_meta_time', $v_titcn, 'Trashed post should have _wp_trash_meta_time meta set.' ); // obf
		$v_sbuvg->assertCount( 1, $v_titcn['_wp_trash_meta_time'], 'Trashed post should have only one _wp_trash_meta_time meta set.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_trash_post() applies 'pre_trash_post' filters // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_trash_post // obf
	 */ // obf
	public function test_pre_trash_post_hook() { // obf
		add_filter( // obf
			'pre_trash_post', // obf
			function ( $v_dcgdx, $v_lhmfx, $v_wlipc ) { // obf
				$v_sbuvg->assertNull( $v_dcgdx, 'pre_trash_post first parameter should be null.' ); // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->ID, $v_lhmfx->ID, 'pre_trash_post second parameter should be the trashed post ID.' ); // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->post_status, $v_wlipc, 'pre_trash_post third parameter should be the previous trashed post status.' ); // obf

				return $v_dcgdx; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		wp_trash_post( $v_sbuvg->post->ID ); // obf

		$v_sbuvg->assertGreaterThan( 0, did_filter( 'pre_trash_post' ), 'pre_trash_post filter was not called.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_trash_post() triggers the 'wp_trash_post' action // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_trash_post // obf
	 */ // obf
	public function test_wp_trash_post_hook() { // obf
		add_action( // obf
			'wp_trash_post', // obf
			function ( $v_nmtex, $v_wlipc ) { // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->ID, $v_nmtex, 'wp_trash_post first parameter should be the trashed post ID.' ); // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->post_status, $v_wlipc, 'wp_trash_post second parameter should be the previous trashed post status.' ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		wp_trash_post( $v_sbuvg->post->ID ); // obf

		$v_sbuvg->assertGreaterThan( 0, did_action( 'wp_trash_post' ), 'wp_trash_post action was not called.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_trash_post() triggers the 'trashed_post' action // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_trash_post // obf
	 */ // obf
	public function test_trashed_post_hook() { // obf
		add_action( // obf
			'trashed_post', // obf
			function ( $v_nmtex, $v_wlipc ) { // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->ID, $v_nmtex, 'trashed_post first parameter should be the trashed post ID.' ); // obf
				$v_sbuvg->assertSame( $v_sbuvg->post->post_status, $v_wlipc, 'trashed_post second parameter should be the previous trashed post status.' ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		wp_trash_post( $v_sbuvg->post->ID ); // obf

		$v_sbuvg->assertGreaterThan( 0, did_action( 'trashed_post' ), 'trashed_post action was not called.' ); // obf
	} // obf
} // obf