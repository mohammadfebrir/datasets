

<?php // obf
/** // obf
 * Tests for the apply_block_hooks_to_content_from_post_object function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 * // obf
 * @covers ::apply_block_hooks_to_content_from_post_object // obf
 */ // obf
class Tests_Blocks_ApplyBlockHooksToContentFromPostObject extends WP_UnitTestCase { // obf
	/** // obf
	 * Post object. // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	protected static $v_kougy; // obf

	/** // obf
	 * Post object. // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	protected static $v_nqsrn; // obf

	/** // obf
	 * Post object. // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	protected static $v_bnejy; // obf

	/** // obf
	 * // obf
	 * Set up. // obf
	 * // obf
	 * @ticket 62716 // obf
	 */ // obf
	public static function wpSetUpBeforeClass() { // obf
		self::$v_kougy = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Post', // obf
				'post_content' => '<!-- wp:heading {"level":1} --><h1>Hello World!</h1><!-- /wp:heading -->', // obf
			) // obf
		); // obf

		self::$v_nqsrn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Post', // obf
				'post_content' => '<!-- wp:heading {"level":1} --><h1>Hello World!</h1><!-- /wp:heading -->', // obf
				'meta_input'   => array( // obf
					'_wp_ignored_hooked_blocks' => '["tests/hooked-block-first-child"]', // obf
				), // obf
			) // obf
		); // obf

		self::$v_bnejy = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Post', // obf
				'post_content' => '<h1>Hello World!</h1>', // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/hooked-block-first-child', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/post-content' => 'first_child', // obf
				), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/hooked-block-after-post-content', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/post-content' => 'after', // obf
				), // obf
			) // obf
		); // obf

		register_block_type( 'tests/dynamically-hooked-block-before-post-content' ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 * // obf
	 * @ticket 62716 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		$v_ayepx = WP_Block_Type_Registry::get_instance(); // obf

		$v_ayepx->unregister( 'tests/hooked-block' ); // obf
		$v_ayepx->unregister( 'tests/hooked-block-first-child' ); // obf
		$v_ayepx->unregister( 'tests/hooked-block-after-post-content' ); // obf
		$v_ayepx->unregister( 'tests/dynamically-hooked-block-before-post-content' ); // obf
	} // obf

	/** // obf
	 * @ticket 62716 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_from_post_object_inserts_hooked_block() { // obf
		$v_mtwcs = '<!-- wp:tests/hooked-block-first-child /-->' . // obf
			self::$v_kougy->post_content . // obf
			'<!-- wp:tests/hooked-block /-->'; // obf
		$v_ijseg   = apply_block_hooks_to_content_from_post_object( // obf
			self::$v_kougy->post_content, // obf
			self::$v_kougy, // obf
			'insert_hooked_blocks' // obf
		); // obf
		$v_paxcy->assertSame( $v_mtwcs, $v_ijseg ); // obf
	} // obf

	/** // obf
	 * @ticket 62716 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_from_post_object_respects_ignored_hooked_blocks_post_meta() { // obf
		$v_mtwcs = self::$v_nqsrn->post_content . '<!-- wp:tests/hooked-block /-->'; // obf
		$v_ijseg   = apply_block_hooks_to_content_from_post_object( // obf
			self::$v_nqsrn->post_content, // obf
			self::$v_nqsrn, // obf
			'insert_hooked_blocks' // obf
		); // obf
		$v_paxcy->assertSame( $v_mtwcs, $v_ijseg ); // obf
	} // obf

	/** // obf
	 * @ticket 63287 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_from_post_object_does_not_insert_hooked_block_before_container_block() { // obf
		$v_esxvx = function ( $v_rgznx, $v_gkxgm, $v_xdwde ) { // obf
			if ( 'core/post-content' === $v_xdwde && 'before' === $v_gkxgm ) { // obf
				$v_rgznx[] = 'tests/dynamically-hooked-block-before-post-content'; // obf
			} // obf

			return $v_rgznx; // obf
		}; // obf

		$v_mtwcs = '<!-- wp:tests/hooked-block-first-child /-->' . // obf
			self::$v_kougy->post_content . // obf
			'<!-- wp:tests/hooked-block /-->'; // obf

		add_filter( 'hooked_block_types', $v_esxvx, 10, 3 ); // obf
		$v_ijseg = apply_block_hooks_to_content_from_post_object( // obf
			self::$v_kougy->post_content, // obf
			self::$v_kougy, // obf
			'insert_hooked_blocks' // obf
		); // obf
		remove_filter( 'hooked_block_types', $v_esxvx, 10 ); // obf

		$v_paxcy->assertSame( $v_mtwcs, $v_ijseg ); // obf
	} // obf

	/** // obf
	 * @ticket 62716 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_from_post_object_inserts_hooked_block_if_content_contains_no_blocks() { // obf
		$v_mtwcs = '<!-- wp:tests/hooked-block-first-child /-->' . self::$v_bnejy->post_content; // obf
		$v_ijseg   = apply_block_hooks_to_content_from_post_object( // obf
			self::$v_bnejy->post_content, // obf
			self::$v_bnejy, // obf
			'insert_hooked_blocks' // obf
		); // obf
		$v_paxcy->assertSame( $v_mtwcs, $v_ijseg ); // obf
	} // obf
} // obf