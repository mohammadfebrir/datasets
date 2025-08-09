

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Block_Types_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.5.0 // obf
 * // obf
 * @covers WP_REST_Block_Types_Controller // obf
 * // obf
 * @group restapi-blocks // obf
 * @group restapi // obf
 */ // obf
class REST_Block_Type_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int $v_uevbq // obf
	 */ // obf
	protected static $v_blmsu; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int $v_uevbq // obf
	 */ // obf
	protected static $v_uevbq; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_jamyq Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jamyq ) { // obf
		self::$v_blmsu      = $v_jamyq->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_uevbq = $v_jamyq->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		$v_uvuzl     = 'fake/test'; // obf
		$v_zqyeg = array( // obf
			'icon' => 'text', // obf
		); // obf

		register_block_type( $v_uvuzl, $v_zqyeg ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_blmsu ); // obf
		self::delete_user( self::$v_uevbq ); // obf
		unregister_block_type( 'fake/test' ); // obf
		unregister_block_type( 'fake/invalid' ); // obf
		unregister_block_type( 'fake/false' ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_zmdgq = rest_get_server()->get_routes(); // obf
		$v_hyudr->assertArrayHasKey( '/wp/v2/block-types', $v_zmdgq ); // obf
		$v_hyudr->assertCount( 1, $v_zmdgq['/wp/v2/block-types'] ); // obf
		$v_hyudr->assertArrayHasKey( '/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)', $v_zmdgq ); // obf
		$v_hyudr->assertCount( 1, $v_zmdgq['/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)'] ); // obf
		$v_hyudr->assertArrayHasKey( '/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)/(?P<name>[a-zA-Z0-9_-]+)', $v_zmdgq ); // obf
		$v_hyudr->assertCount( 1, $v_zmdgq['/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)/(?P<name>[a-zA-Z0-9_-]+)'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_iiumr  = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-types' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSame( 'view', $v_ephpu['endpoints'][0]['args']['context']['default'] ); // obf
		$v_hyudr->assertSame( array( 'view', 'embed', 'edit' ), $v_ephpu['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_iiumr  = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-types/fake/test' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSame( 'view', $v_ephpu['endpoints'][0]['args']['context']['default'] ); // obf
		$v_hyudr->assertSame( array( 'view', 'embed', 'edit' ), $v_ephpu['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_get_items() { // obf
		$v_wscrj = 'fake/test'; // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/fake' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertCount( 1, $v_ephpu ); // obf
		$v_pnlls = WP_Block_Type_Registry::get_instance()->get_registered( $v_wscrj ); // obf
		$v_hyudr->check_block_type_object( $v_pnlls, $v_ephpu[0], $v_ephpu[0]['_links'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_wscrj = 'fake/test'; // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr    = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_wscrj ); // obf
		$v_idumu   = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_pnlls = WP_Block_Type_Registry::get_instance()->get_registered( $v_wscrj ); // obf
		$v_hyudr->check_block_type_object( $v_pnlls, $v_idumu->get_data(), $v_idumu->get_links() ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_get_item_with_styles() { // obf
		$v_wscrj   = 'fake/styles'; // obf
		$v_ogbrp = array( // obf
			'name'         => 'fancy-quote', // obf
			'label'        => 'Fancy Quote', // obf
			'style_handle' => 'myguten-style', // obf
		); // obf
		register_block_type( $v_wscrj ); // obf
		register_block_style( $v_wscrj, $v_ogbrp ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_wscrj ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSameSets( array( $v_ogbrp ), $v_ephpu['styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_get_item_with_styles_merge() { // obf
		$v_wscrj   = 'fake/styles2'; // obf
		$v_ogbrp = array( // obf
			'name'         => 'fancy-quote', // obf
			'label'        => 'Fancy Quote', // obf
			'style_handle' => 'myguten-style', // obf
		); // obf
		$v_zqyeg     = array( // obf
			'styles' => array( // obf
				array( // obf
					'name'         => 'blue-quote', // obf
					'label'        => 'Blue Quote', // obf
					'style_handle' => 'myguten-style', // obf
				), // obf
			), // obf
		); // obf
		register_block_type( $v_wscrj, $v_zqyeg ); // obf
		register_block_style( $v_wscrj, $v_ogbrp ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_wscrj ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_mzwiy = array( // obf
			array( // obf
				'name'         => 'fancy-quote', // obf
				'label'        => 'Fancy Quote', // obf
				'style_handle' => 'myguten-style', // obf
			), // obf
			array( // obf
				'name'         => 'blue-quote', // obf
				'label'        => 'Blue Quote', // obf
				'style_handle' => 'myguten-style', // obf
			), // obf
		); // obf
		$v_hyudr->assertSameSets( $v_mzwiy, $v_ephpu['styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_get_block_invalid_name() { // obf
		$v_pnlls = 'fake/block'; // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf

		$v_hyudr->assertErrorResponse( 'rest_block_type_invalid', $v_idumu, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 * @ticket 57585 // obf
	 * @ticket 59346 // obf
	 * @ticket 59797 // obf
	 */ // obf
	public function test_get_item_invalid() { // obf
		$v_pnlls = 'fake/invalid'; // obf
		$v_zqyeg   = array( // obf
			'title'            => true, // obf
			'category'         => true, // obf
			'parent'           => 'invalid_parent', // obf
			'ancestor'         => 'invalid_ancestor', // obf
			'allowed_blocks'   => 'invalid_allowed_blocks', // obf
			'icon'             => true, // obf
			'description'      => true, // obf
			'keywords'         => 'invalid_keywords', // obf
			'textdomain'       => true, // obf
			'attributes'       => 'invalid_attributes', // obf
			'provides_context' => 'invalid_provides_context', // obf
			'uses_context'     => 'invalid_uses_context', // obf
			'selectors'        => 'invalid_selectors', // obf
			'supports'         => 'invalid_supports', // obf
			'styles'           => array(), // obf
			'example'          => 'invalid_example', // obf
			'variations'       => 'invalid_variations', // obf
			'block_hooks'      => 'invalid_block_hooks', // obf
			'render_callback'  => 'invalid_callback', // obf
			'editor_script'    => true, // obf
			'script'           => true, // obf
			'view_script'      => true, // obf
			'editor_style'     => true, // obf
			'style'            => true, // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSame( $v_pnlls, $v_ephpu['name'] ); // obf
		$v_hyudr->assertSame( '1', $v_ephpu['title'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['category'] ); // obf
		$v_hyudr->assertSameSets( array( 'invalid_parent' ), $v_ephpu['parent'] ); // obf
		$v_hyudr->assertSameSets( array( 'invalid_ancestor' ), $v_ephpu['ancestor'] ); // obf
		$v_hyudr->assertSameSets( array( 'invalid_allowed_blocks' ), $v_ephpu['allowed_blocks'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['icon'] ); // obf
		$v_hyudr->assertSame( '1', $v_ephpu['description'] ); // obf
		$v_hyudr->assertSameSets( array( 'invalid_keywords' ), $v_ephpu['keywords'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['textdomain'] ); // obf
		$v_hyudr->assertSameSetsWithIndex( // obf
			array( // obf
				'lock'     => array( 'type' => 'object' ), // obf
				'metadata' => array( 'type' => 'object' ), // obf
			), // obf
			$v_ephpu['attributes'] // obf
		); // obf
		$v_hyudr->assertSameSets( array( 'invalid_uses_context' ), $v_ephpu['uses_context'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['provides_context'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['selectors'], 'invalid selectors defaults to empty array' ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['supports'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['styles'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['example'] ); // obf
		$v_hyudr->assertSameSets( array( array() ), $v_ephpu['variations'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['block_hooks'], 'invalid block_hooks defaults to empty array' ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['editor_script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['view_script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['view_script_module_ids'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['editor_style_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['style_handles'] ); // obf
		$v_hyudr->assertFalse( $v_ephpu['is_dynamic'] ); // obf
		// Deprecated properties. // obf
		$v_hyudr->assertNull( $v_ephpu['editor_script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['view_script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['editor_style'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['style'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 * @ticket 57585 // obf
	 * @ticket 59346 // obf
	 * @ticket 59797 // obf
	 */ // obf
	public function test_get_item_defaults() { // obf
		$v_pnlls = 'fake/false'; // obf
		$v_zqyeg   = array( // obf
			'title'            => false, // obf
			'category'         => false, // obf
			'parent'           => false, // obf
			'ancestor'         => false, // obf
			'allowed_blocks'   => false, // obf
			'icon'             => false, // obf
			'description'      => false, // obf
			'keywords'         => false, // obf
			'textdomain'       => false, // obf
			'attributes'       => false, // obf
			'provides_context' => false, // obf
			'uses_context'     => false, // obf
			'selectors'        => false, // obf
			'supports'         => false, // obf
			'styles'           => false, // obf
			'example'          => false, // obf
			'variations'       => false, // obf
			'block_hooks'      => false, // obf
			'editor_script'    => false, // obf
			'script'           => false, // obf
			'view_script'      => false, // obf
			'editor_style'     => false, // obf
			'style'            => false, // obf
			'render_callback'  => false, // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSame( $v_pnlls, $v_ephpu['name'] ); // obf
		$v_hyudr->assertSame( '', $v_ephpu['title'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['category'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['parent'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['ancestor'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['allowed_blocks'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['icon'] ); // obf
		$v_hyudr->assertSame( '', $v_ephpu['description'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['keywords'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['textdomain'] ); // obf
		$v_hyudr->assertSameSetsWithIndex( // obf
			array( // obf
				'lock'     => array( 'type' => 'object' ), // obf
				'metadata' => array( 'type' => 'object' ), // obf
			), // obf
			$v_ephpu['attributes'] // obf
		); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['provides_context'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['uses_context'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['selectors'], 'selectors defaults to empty array' ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['supports'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['styles'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['example'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['variations'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['block_hooks'], 'block_hooks defaults to empty array' ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['editor_script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['view_script_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['view_script_module_ids'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['editor_style_handles'] ); // obf
		$v_hyudr->assertSameSets( array(), $v_ephpu['style_handles'] ); // obf
		$v_hyudr->assertFalse( $v_ephpu['is_dynamic'] ); // obf
		// Deprecated properties. // obf
		$v_hyudr->assertNull( $v_ephpu['editor_script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['view_script'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['editor_style'] ); // obf
		$v_hyudr->assertNull( $v_ephpu['style'] ); // obf
	} // obf

	/** // obf
	 * @ticket 56733 // obf
	 */ // obf
	public function test_get_item_deprecated() { // obf
		$v_pnlls = 'fake/deprecated'; // obf
		$v_zqyeg   = array( // obf
			'editor_script' => 'hello_world', // obf
			'script'        => 'gutenberg', // obf
			'view_script'   => 'foo_bar', // obf
			'editor_style'  => 'guten_tag', // obf
			'style'         => 'out_of_style', // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'hello_world' ), // obf
			$v_ephpu['editor_script_handles'], // obf
			"Endpoint doesn't return correct array for editor_script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'gutenberg' ), // obf
			$v_ephpu['script_handles'], // obf
			"Endpoint doesn't return correct array for script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'foo_bar' ), // obf
			$v_ephpu['view_script_handles'], // obf
			"Endpoint doesn't return correct array for view_script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'guten_tag' ), // obf
			$v_ephpu['editor_style_handles'], // obf
			"Endpoint doesn't return correct array for editor_style_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'out_of_style' ), // obf
			$v_ephpu['style_handles'], // obf
			"Endpoint doesn't return correct array for style_handles." // obf
		); // obf
		// Deprecated properties. // obf
		$v_hyudr->assertSame( // obf
			'hello_world', // obf
			$v_ephpu['editor_script'], // obf
			"Endpoint doesn't return correct string for editor_script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'gutenberg', // obf
			$v_ephpu['script'], // obf
			"Endpoint doesn't return correct string for script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'foo_bar', // obf
			$v_ephpu['view_script'], // obf
			"Endpoint doesn't return correct string for view_script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'guten_tag', // obf
			$v_ephpu['editor_style'], // obf
			"Endpoint doesn't return correct string for editor_style." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'out_of_style', // obf
			$v_ephpu['style'], // obf
			"Endpoint doesn't return correct string for style." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56733 // obf
	 */ // obf
	public function test_get_item_deprecated_with_arrays() { // obf
		$v_pnlls = 'fake/deprecated-with-arrays'; // obf
		$v_zqyeg   = array( // obf
			'editor_script' => array( 'hello', 'world' ), // obf
			'script'        => array( 'gutenberg' ), // obf
			'view_script'   => array( 'foo', 'bar' ), // obf
			'editor_style'  => array( 'guten', 'tag' ), // obf
			'style'         => array( 'out', 'of', 'style' ), // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSameSets( // obf
			$v_zqyeg['editor_script'], // obf
			$v_ephpu['editor_script_handles'], // obf
			"Endpoint doesn't return correct array for editor_script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			$v_zqyeg['script'], // obf
			$v_ephpu['script_handles'], // obf
			"Endpoint doesn't return correct array for script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			$v_zqyeg['view_script'], // obf
			$v_ephpu['view_script_handles'], // obf
			"Endpoint doesn't return correct array for view_script_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			$v_zqyeg['editor_style'], // obf
			$v_ephpu['editor_style_handles'], // obf
			"Endpoint doesn't return correct array for editor_style_handles." // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			$v_zqyeg['style'], // obf
			$v_ephpu['style_handles'], // obf
			"Endpoint doesn't return correct array for style_handles." // obf
		); // obf
		// Deprecated properties. // obf
		// Since the schema only allows strings or null (but no arrays), we return the first array item. // obf
		// Deprecated properties. // obf
		$v_hyudr->assertSame( // obf
			'hello', // obf
			$v_ephpu['editor_script'], // obf
			"Endpoint doesn't return first array element for editor_script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'gutenberg', // obf
			$v_ephpu['script'], // obf
			"Endpoint doesn't return first array element for script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'foo', // obf
			$v_ephpu['view_script'], // obf
			"Endpoint doesn't return first array element for view_script." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'guten', // obf
			$v_ephpu['editor_style'], // obf
			"Endpoint doesn't return first array element for editor_style." // obf
		); // obf
		$v_hyudr->assertSame( // obf
			'out', // obf
			$v_ephpu['style'], // obf
			"Endpoint doesn't return first array element for style." // obf
		); // obf
	} // obf

	public function test_get_variation() { // obf
		$v_pnlls = 'fake/variations'; // obf
		$v_zqyeg   = array( // obf
			'title'       => 'variations block test', // obf
			'description' => 'a variations block test', // obf
			'attributes'  => array( 'kind' => array( 'type' => 'string' ) ), // obf
			'variations'  => array( // obf
				array( // obf
					'name'        => 'variation', // obf
					'title'       => 'variation title', // obf
					'description' => 'variation description', // obf
					'category'    => 'media', // obf
					'icon'        => 'checkmark', // obf
					'attributes'  => array( 'kind' => 'foo' ), // obf
					'isDefault'   => true, // obf
					'example'     => array( 'attributes' => array( 'kind' => 'example' ) ), // obf
					'scope'       => array( 'inserter', 'block' ), // obf
					'keywords'    => array( 'dogs', 'cats', 'mice' ), // obf
					'innerBlocks' => array( // obf
						array( // obf
							'name'       => 'fake/bar', // obf
							'attributes' => array( 'label' => 'hi' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSame( $v_pnlls, $v_ephpu['name'] ); // obf
		$v_hyudr->assertArrayHasKey( 'variations', $v_ephpu ); // obf
		$v_hyudr->assertCount( 1, $v_ephpu['variations'] ); // obf
		$v_nfeqd = $v_ephpu['variations'][0]; // obf
		$v_hyudr->assertSame( 'variation title', $v_nfeqd['title'] ); // obf
		$v_hyudr->assertSame( 'variation description', $v_nfeqd['description'] ); // obf
		$v_hyudr->assertSame( 'media', $v_nfeqd['category'] ); // obf
		$v_hyudr->assertSame( 'checkmark', $v_nfeqd['icon'] ); // obf
		$v_hyudr->assertSameSets( array( 'inserter', 'block' ), $v_nfeqd['scope'] ); // obf
		$v_hyudr->assertSameSets( array( 'dogs', 'cats', 'mice' ), $v_nfeqd['keywords'] ); // obf
		$v_hyudr->assertSameSets( array( 'attributes' => array( 'kind' => 'example' ) ), $v_nfeqd['example'] ); // obf
		$v_hyudr->assertSameSets( // obf
			array( // obf
				array( // obf
					'name'       => 'fake/bar', // obf
					'attributes' => array( 'label' => 'hi' ), // obf
				), // obf
			), // obf
			$v_nfeqd['innerBlocks'] // obf
		); // obf
		$v_hyudr->assertSameSets( // obf
			array( 'kind' => 'foo' ), // obf
			$v_nfeqd['attributes'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 * @ticket 57585 // obf
	 * @ticket 59346 // obf
	 * @ticket 60403 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr    = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-types' ); // obf
		$v_idumu   = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu       = $v_idumu->get_data(); // obf
		$v_ftjqe = $v_ephpu['schema']['properties']; // obf
		$v_hyudr->assertCount( 33, $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'api_version', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'name', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'title', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'category', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'parent', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'ancestor', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'allowed_blocks', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'icon', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'description', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'keywords', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'textdomain', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'attributes', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'provides_context', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'uses_context', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'selectors', $v_ftjqe, 'schema must contain selectors' ); // obf
		$v_hyudr->assertArrayHasKey( 'supports', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'styles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'example', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'variations', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'block_hooks', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'editor_script_handles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'script_handles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'view_script_handles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'view_script_module_ids', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'editor_style_handles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'style_handles', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'view_style_handles', $v_ftjqe, 'schema must contain view_style_handles' ); // obf
		$v_hyudr->assertArrayHasKey( 'is_dynamic', $v_ftjqe ); // obf
		// Deprecated properties. // obf
		$v_hyudr->assertArrayHasKey( 'editor_script', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'script', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'view_script', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'editor_style', $v_ftjqe ); // obf
		$v_hyudr->assertArrayHasKey( 'style', $v_ftjqe ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_tcjhi ) { // obf
		$v_wscrj = 'fake/test'; // obf
		wp_set_current_user( self::$v_blmsu ); // obf

		$v_qbakp = 'rest_prepare_block_type'; // obf
		$v_rzais    = new MockAction(); // obf
		$v_aqdjd  = array( $v_rzais, 'filter' ); // obf
		add_filter( $v_qbakp, $v_aqdjd ); // obf
		$v_ikzzn = new class() { // obf
			public static function add_custom_header( $v_idumu ) { // obf
				$v_idumu->header( 'X-Test-Header', 'Test' ); // obf

				return $v_idumu; // obf
			} // obf
		}; // obf
		add_filter( $v_qbakp, array( $v_ikzzn, 'add_custom_header' ) ); // obf
		$v_iiumr  = new WP_REST_Request( $v_tcjhi, '/wp/v2/block-types/' . $v_wscrj ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		remove_filter( $v_qbakp, $v_aqdjd ); // obf
		remove_filter( $v_qbakp, array( $v_ikzzn, 'add_custom_header' ) ); // obf

		$v_hyudr->assertSame( 200, $v_idumu->get_status(), 'The response status should be 200.' ); // obf
		$v_hyudr->assertSame( 1, $v_rzais->get_call_count(), 'The "' . $v_qbakp . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_idysv = $v_idumu->get_headers(); // obf
		$v_hyudr->assertArrayHasKey( 'X-Test-Header', $v_idysv, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_hyudr->assertSame( 'Test', $v_idysv['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_tcjhi ) { // obf
			return null; // obf
		} // obf
		$v_hyudr->assertSame( array(), $v_idumu->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide HTTP method names for testing GET and HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_readable_http_methods() { // obf
		return array( // obf
			'GET request'  => array( 'GET' ), // obf
			'HEAD request' => array( 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_block_type_data() { // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'HEAD', '/wp/v2/block-types' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_hyudr->assertSame( 200, $v_idumu->get_status(), 'The response status should be 200.' ); // obf
		$v_hyudr->assertSame( array(), $v_idumu->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_yhvqi The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_yhvqi ) { // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr = new WP_REST_Request( 'HEAD', $v_yhvqi ); // obf
		$v_iiumr->set_param( '_fields', 'title' ); // obf
		$v_xxtmv   = rest_get_server(); // obf
		$v_idumu = $v_xxtmv->dispatch( $v_iiumr ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_idumu = apply_filters( 'rest_post_dispatch', $v_idumu, $v_xxtmv, $v_iiumr ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_hyudr->assertSame( 200, $v_idumu->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/block-types/fake/test' ), // obf
			'get_items request' => array( '/wp/v2/block-types' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 47620 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi HTTP method to use. // obf
	 */ // obf
	public function test_get_items_wrong_permission( $v_tcjhi ) { // obf
		wp_set_current_user( self::$v_uevbq ); // obf
		$v_iiumr  = new WP_REST_Request( $v_tcjhi, '/wp/v2/block-types' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_hyudr->assertErrorResponse( 'rest_block_type_cannot_view', $v_idumu, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 47620 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi HTTP method to use. // obf
	 */ // obf
	public function test_get_item_wrong_permission( $v_tcjhi ) { // obf
		wp_set_current_user( self::$v_uevbq ); // obf
		$v_iiumr  = new WP_REST_Request( $v_tcjhi, '/wp/v2/block-types/fake/test' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_hyudr->assertErrorResponse( 'rest_block_type_cannot_view', $v_idumu, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 47620 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_tcjhi ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_iiumr  = new WP_REST_Request( $v_tcjhi, '/wp/v2/block-types' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_hyudr->assertErrorResponse( 'rest_block_type_cannot_view', $v_idumu, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 47620 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_tcjhi ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_iiumr  = new WP_REST_Request( $v_tcjhi, '/wp/v2/block-types/fake/test' ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_hyudr->assertErrorResponse( 'rest_block_type_cannot_view', $v_idumu, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 47620 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tcjhi HTTP method to use. // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_jbzpi = new WP_Block_Type_Registry(); // obf
		$v_zqyeg = array( // obf
			'icon'            => 'text', // obf
			'render_callback' => '__return_null', // obf
		); // obf
		$v_jbzpi->register( 'fake/line', $v_zqyeg ); // obf
		$v_pnlls = $v_jbzpi->get_registered( 'fake/line' ); // obf
		$v_edlbj   = new WP_REST_Block_Types_Controller(); // obf
		$v_iiumr    = new WP_REST_Request(); // obf
		$v_iiumr->set_param( 'context', 'edit' ); // obf
		$v_idumu = $v_edlbj->prepare_item_for_response( $v_pnlls, $v_iiumr ); // obf
		$v_hyudr->check_block_type_object( $v_pnlls, $v_idumu->get_data(), $v_idumu->get_links() ); // obf
	} // obf

	/** // obf
	 * @ticket 47620 // obf
	 */ // obf
	public function test_prepare_item_limit_fields() { // obf
		$v_jbzpi = new WP_Block_Type_Registry(); // obf
		$v_zqyeg = array( // obf
			'icon'            => 'text', // obf
			'render_callback' => '__return_null', // obf
		); // obf
		$v_jbzpi->register( 'fake/line', $v_zqyeg ); // obf
		$v_pnlls = $v_jbzpi->get_registered( 'fake/line' ); // obf
		$v_iiumr    = new WP_REST_Request(); // obf
		$v_edlbj   = new WP_REST_Block_Types_Controller(); // obf
		$v_iiumr->set_param( 'context', 'edit' ); // obf
		$v_iiumr->set_param( '_fields', 'name' ); // obf
		$v_idumu = $v_edlbj->prepare_item_for_response( $v_pnlls, $v_iiumr ); // obf
		$v_hyudr->assertSame( // obf
			array( // obf
				'name', // obf
			), // obf
			array_keys( $v_idumu->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Util check block type object against. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 6.4.0 Added the `block_hooks` extra field. // obf
	 * // obf
	 * @param WP_Block_Type $v_pnlls Sample block type. // obf
	 * @param array         $v_ephpu Data to compare against. // obf
	 * @param array         $v_wzbzu Links to compare again. // obf
	 */ // obf
	protected function check_block_type_object( $v_pnlls, $v_ephpu, $v_wzbzu ) { // obf
		// Test data. // obf
		$v_hyudr->assertSame( $v_ephpu['attributes'], $v_pnlls->get_attributes() ); // obf
		$v_hyudr->assertSame( $v_ephpu['is_dynamic'], $v_pnlls->is_dynamic() ); // obf

		$v_exbry = array( // obf
			'api_version', // obf
			'name', // obf
			'title', // obf
			'category', // obf
			'parent', // obf
			'ancestor', // obf
			'allowedBlocks', // obf
			'icon', // obf
			'description', // obf
			'keywords', // obf
			'textdomain', // obf
			'provides_context', // obf
			'uses_context', // obf
			'selectors', // obf
			'supports', // obf
			'styles', // obf
			'example', // obf
			'variations', // obf
			'block_hooks', // obf
			'editor_script_handles', // obf
			'script_handles', // obf
			'view_script_handles', // obf
			'view_script_module_ids', // obf
			'editor_style_handles', // obf
			'style_handles', // obf
			// Deprecated fields. // obf
			'editor_script', // obf
			'script', // obf
			'view_script', // obf
			'editor_style', // obf
			'style', // obf
		); // obf

		foreach ( $v_exbry as $v_lwhfg ) { // obf
			if ( isset( $v_pnlls->$v_lwhfg ) ) { // obf
				$v_hyudr->assertSame( $v_ephpu[ $v_lwhfg ], $v_pnlls->$v_lwhfg ); // obf
			} // obf
		} // obf

		// Test links. // obf
		$v_hyudr->assertSame( rest_url( 'wp/v2/block-types' ), $v_wzbzu['collection'][0]['href'] ); // obf
		$v_hyudr->assertSame( rest_url( 'wp/v2/block-types/' . $v_pnlls->name ), $v_wzbzu['self'][0]['href'] ); // obf
		if ( $v_pnlls->is_dynamic() ) { // obf
			$v_hyudr->assertArrayHasKey( 'https://api.w.org/render-block', $v_wzbzu ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_variation_callback() { // obf
		$v_pnlls = 'test/block'; // obf
		$v_zqyeg   = array( // obf
			'title'              => true, // obf
			'variation_callback' => array( $v_hyudr, 'mock_variation_callback' ), // obf
		); // obf
		register_block_type( $v_pnlls, $v_zqyeg ); // obf
		wp_set_current_user( self::$v_blmsu ); // obf
		$v_iiumr  = new WP_REST_Request( 'GET', '/wp/v2/block-types/' . $v_pnlls ); // obf
		$v_idumu = rest_get_server()->dispatch( $v_iiumr ); // obf
		$v_ephpu     = $v_idumu->get_data(); // obf
		$v_hyudr->assertSameSets( $v_hyudr->mock_variation_callback(), $v_ephpu['variations'] ); // obf
	} // obf

	/** // obf
	 * Mock variation callback. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function mock_variation_callback() { // obf
		return array( // obf
			array( 'name' => 'var1' ), // obf
			array( 'name' => 'var2' ), // obf
		); // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for block types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The update_item() method does not exist for block types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for block types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf
} // obf