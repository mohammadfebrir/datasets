

<?php // obf

/** // obf
 * @group post // obf
 * // obf
 * @covers ::wp_untrash_post // obf
 */ // obf
class Tests_Post_WpUntrashPost extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Post // obf
	 */ // obf
	protected $v_oqayb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_bgmod->trashed_post = wp_trash_post( // obf
			$v_bgmod->factory()->post->create( // obf
				array( // obf
					'post_status' => 'draft', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_untrash_post() returns a WP_Post object, // obf
	 * removes post meta for an untrashed post and sets it to a 'Draft'. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_untrash_post // obf
	 */ // obf
	public function test_untrash_post() { // obf
		$v_lelca = wp_untrash_post( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertInstanceOf( 'WP_Post', $v_lelca, 'wp_untrash_post returned value should be an instance of WP_Post.' ); // obf

		$v_kjmbd = get_posts( // obf
			array( // obf
				'post_status' => 'trash', // obf
				'fields'      => 'ids', // obf
			) // obf
		); // obf

		$v_bgmod->assertNotContains( $v_bgmod->trashed_post->ID, $v_kjmbd, 'Untrashed post should not belong to trashed posts anymore.' ); // obf

		$v_bghmf = get_post_meta( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertArrayNotHasKey( '_wp_trash_meta_status', $v_bghmf, 'Untrashed post should not have _wp_trash_meta_status meta anymore.' ); // obf
		$v_bgmod->assertArrayNotHasKey( '_wp_trash_meta_time', $v_bghmf, 'Untrashed post should not have _wp_trash_meta_time meta anymore.' ); // obf

		$v_jlnzb = get_post( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertSame( 'draft', $v_jlnzb->post_status, 'Untrashed post should have its previous status set correctly.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_untrash_post() applies 'pre_untrash_post' filters // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_untrash_post // obf
	 */ // obf
	public function test_pre_untrash_post_hook() { // obf
		add_filter( // obf
			'pre_untrash_post', // obf
			function ( $v_zbuxp, $v_jlnzb, $v_dxtvk ) { // obf
				$v_bgmod->assertNull( $v_zbuxp, 'pre_untrash_post first parameter should be null.' ); // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->ID, $v_jlnzb->ID, 'pre_untrash_post second parameter should be the trashed post ID.' ); // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->post_status, $v_dxtvk, 'pre_untrash_post third parameter should be the previous trashed post status.' ); // obf

				return $v_zbuxp; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		wp_untrash_post( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertGreaterThan( 0, did_filter( 'pre_untrash_post' ), 'pre_untrash_post filter was not called.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_untrash_post() triggers the 'untrash_post' action // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_untrash_post // obf
	 */ // obf
	public function test_untrash_post_hook() { // obf
		add_action( // obf
			'untrash_post', // obf
			function ( $v_lhsfz, $v_dxtvk ) { // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->ID, $v_lhsfz, 'untrash_post first parameter should be the trashed post ID.' ); // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->post_status, $v_dxtvk, 'untrash_post second parameter should be the previous trashed post status.' ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		wp_untrash_post( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertGreaterThan( 0, did_action( 'untrash_post' ), 'untrash_post action was not called.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_untrash_post() triggers the 'untrashed_post' action // obf
	 * and passes the expected values to callbacks. // obf
	 * // obf
	 * @ticket 58392 // obf
	 * // obf
	 * @covers ::wp_untrash_post // obf
	 */ // obf
	public function test_untrashed_post_hook() { // obf
		add_action( // obf
			'untrashed_post', // obf
			function ( $v_lhsfz, $v_dxtvk ) { // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->ID, $v_lhsfz, 'untrashed_post first parameter should be the trashed post ID.' ); // obf
				$v_bgmod->assertSame( $v_bgmod->trashed_post->post_status, $v_dxtvk, 'untrashed_post second parameter should be the previous trashed post status.' ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		wp_untrash_post( $v_bgmod->trashed_post->ID ); // obf

		$v_bgmod->assertGreaterThan( 0, did_action( 'untrashed_post' ), 'untrashed_post action was not called.' ); // obf
	} // obf
} // obf