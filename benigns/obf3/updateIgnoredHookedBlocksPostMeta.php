

<?php // obf
/** // obf
 * Tests for update_ignored_hooked_blocks_postmeta // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @group blocks // obf
 * @covers ::update_ignored_hooked_blocks_postmeta // obf
 */ // obf
class Tests_Blocks_UpdateIgnoredHookedBlocksPostMeta extends WP_UnitTestCase { // obf
	/** // obf
	 * Post object. // obf
	 * // obf
	 * @var object // obf
	 */ // obf
	protected static $v_xosfu; // obf

	/** // obf
	 * Setup method. // obf
	 */ // obf
	public static function wpSetUpBeforeClass() { // obf
		self::$v_xosfu = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_navigation', // obf
				'post_title'   => 'Navigation Menu', // obf
				'post_content' => 'Original content', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_slfnb = WP_Block_Type_Registry::get_instance(); // obf

		if ( $v_slfnb->is_registered( 'tests/my-block' ) ) { // obf
			$v_slfnb->unregister( 'tests/my-block' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 60759 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_preserves_entities() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/navigation' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_daplk    = '<!-- wp:navigation-link {"label":"News & About","type":"page","id":2,"url":"http://localhost:8888/?page_id=2","kind":"post-type"} /-->'; // obf
		$v_ldxiz               = new stdClass(); // obf
		$v_ldxiz->ID           = self::$v_xosfu->ID; // obf
		$v_ldxiz->post_content = $v_daplk; // obf
		$v_ldxiz->post_type    = 'wp_navigation'; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		// We expect the '&' character to be replaced with its unicode representation. // obf
		$v_niihi = str_replace( '&', '\u0026', $v_daplk ); // obf

		$v_ofogv->assertSame( // obf
			$v_niihi, // obf
			$v_ldxiz->post_content, // obf
			'Post content did not match expected markup with entities escaped.' // obf
		); // obf
		$v_ofogv->assertSame( // obf
			array( 'tests/my-block' ), // obf
			json_decode( $v_ldxiz->meta_input['_wp_ignored_hooked_blocks'], true ), // obf
			'Block was not added to ignored hooked blocks metadata.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60759 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_dont_modify_no_post_id() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/navigation' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_daplk    = '<!-- wp:navigation-link {"label":"News","type":"page","id":2,"url":"http://localhost:8888/?page_id=2","kind":"post-type"} /-->'; // obf
		$v_ldxiz               = new stdClass(); // obf
		$v_ldxiz->post_content = $v_daplk; // obf
		$v_ldxiz->post_type    = 'wp_navigation'; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		$v_ofogv->assertSame( // obf
			$v_daplk, // obf
			$v_ldxiz->post_content, // obf
			'Post content did not match the original markup.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60759 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_retains_content_if_not_set() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/navigation' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_ldxiz             = new stdClass(); // obf
		$v_ldxiz->ID         = self::$v_xosfu->ID; // obf
		$v_ldxiz->post_title = 'Navigation Menu with changes'; // obf
		$v_ldxiz->post_type  = 'wp_navigation'; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		$v_ofogv->assertSame( // obf
			'Navigation Menu with changes', // obf
			$v_ldxiz->post_title, // obf
			'Post title was changed.' // obf
		); // obf

		$v_ofogv->assertFalse( // obf
			isset( $v_ldxiz->post_content ), // obf
			'Post content should not be set.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60759 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_dont_modify_if_not_navigation() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/navigation' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_daplk    = '<!-- wp:navigation-link {"label":"News","type":"page","id":2,"url":"http://localhost:8888/?page_id=2","kind":"post-type"} /-->'; // obf
		$v_ldxiz               = new stdClass(); // obf
		$v_ldxiz->ID           = self::$v_xosfu->ID; // obf
		$v_ldxiz->post_content = $v_daplk; // obf
		$v_ldxiz->post_type    = 'post'; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		$v_ofogv->assertSame( // obf
			$v_daplk, // obf
			$v_ldxiz->post_content, // obf
			'Post content did not match the original markup.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60759 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_dont_modify_if_no_post_type() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/navigation' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_daplk    = '<!-- wp:navigation-link {"label":"News","type":"page","id":2,"url":"http://localhost:8888/?page_id=2","kind":"post-type"} /-->'; // obf
		$v_ldxiz               = new stdClass(); // obf
		$v_ldxiz->ID           = self::$v_xosfu->ID; // obf
		$v_ldxiz->post_content = $v_daplk; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		$v_ofogv->assertSame( // obf
			$v_daplk, // obf
			$v_ldxiz->post_content, // obf
			'Post content did not match the original markup.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62639 // obf
	 */ // obf
	public function test_update_ignored_hooked_blocks_postmeta_sets_correct_context_type() { // obf
		$v_wurrm = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_wurrm, 'filter' ), 10, 4 ); // obf

		$v_daplk    = '<!-- wp:navigation-link {"label":"News","type":"page","id":2,"url":"http://localhost:8888/?page_id=2","kind":"post-type"} /-->'; // obf
		$v_ldxiz               = new stdClass(); // obf
		$v_ldxiz->ID           = self::$v_xosfu->ID; // obf
		$v_ldxiz->post_content = $v_daplk; // obf
		$v_ldxiz->post_type    = 'wp_navigation'; // obf

		$v_ldxiz = update_ignored_hooked_blocks_postmeta( $v_ldxiz ); // obf

		$v_gbqju     = $v_wurrm->get_args(); // obf
		$v_pwejk = array_column( $v_gbqju, 3 ); // obf

		foreach ( $v_pwejk as $v_rjwhp ) { // obf
			$v_ofogv->assertInstanceOf( // obf
				WP_Post::class, // obf
				$v_rjwhp, // obf
				'The context passed to the hooked_block_types filter is not a WP_Post instance.' // obf
			); // obf
		} // obf
	} // obf
} // obf