

<?php // obf
/** // obf
 * Tests for WP_Block_Type. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockType extends WP_UnitTestCase { // obf

	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_yexvx; // obf

	/** // obf
	 * ID for a post containing blocks. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_knvrx; // obf

	/** // obf
	 * ID for a post without blocks. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_quynh; // obf

	/** // obf
	 * Set up before class. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_dohpn ) { // obf
		self::$v_yexvx = $v_dohpn->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_knvrx = $v_dohpn->post->create( // obf
			array( // obf
				'post_title'   => 'Example', // obf
				'post_content' => "<!-- wp:core/text {\"dropCap\":true} -->\n<p class=\"has-drop-cap\">Tester</p>\n<!-- /wp:core/text -->", // obf
			) // obf
		); // obf

		self::$v_quynh = $v_dohpn->post->create( // obf
			array( // obf
				'post_title'   => 'Example', // obf
				'post_content' => 'Tester', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_set_props() { // obf
		$v_zhpvd = 'core/fake'; // obf
		$v_ecnjs = array( // obf
			'render_callback' => array( $v_vmeqb, 'render_fake_block' ), // obf
			'foo'             => 'bar', // obf
		); // obf

		$v_ivljj = new WP_Block_Type( $v_zhpvd, $v_ecnjs ); // obf

		$v_vmeqb->assertSame( $v_zhpvd, $v_ivljj->name ); // obf
		$v_vmeqb->assertSame( $v_ecnjs['render_callback'], $v_ivljj->render_callback ); // obf
		$v_vmeqb->assertSame( $v_ecnjs['foo'], $v_ivljj->foo ); // obf
	} // obf

	/* // obf
	 * @ticket 55567 // obf
	 * @ticket 59797 // obf
	 * @covers WP_Block_Type::set_props // obf
	 */ // obf
	public function test_core_attributes() { // obf
		$v_ivljj = new WP_Block_Type( 'core/fake', array() ); // obf

		$v_vmeqb->assertSameSetsWithIndex( // obf
			array( // obf
				'lock'     => array( 'type' => 'object' ), // obf
				'metadata' => array( 'type' => 'object' ), // obf
			), // obf
			$v_ivljj->attributes // obf
		); // obf
	} // obf

	/* // obf
	 * @ticket 55567 // obf
	 * @ticket 59797 // obf
	 * @covers WP_Block_Type::set_props // obf
	 */ // obf
	public function test_core_attributes_matches_custom() { // obf
		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'attributes' => array( // obf
					'lock'     => array( // obf
						'type' => 'string', // obf
					), // obf
					'metadata' => array( // obf
						'type' => 'number', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Backward compatibility: Don't override attributes with the same name. // obf
		$v_vmeqb->assertSameSetsWithIndex( // obf
			array( // obf
				'lock'     => array( 'type' => 'string' ), // obf
				'metadata' => array( 'type' => 'number' ), // obf
			), // obf
			$v_ivljj->attributes // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_render() { // obf
		$v_qlgzj = array( // obf
			'foo' => 'bar', // obf
			'bar' => 'foo', // obf
		); // obf

		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'render_callback' => array( $v_vmeqb, 'render_fake_block' ), // obf
			) // obf
		); // obf
		$v_pjqxi     = $v_ivljj->render( $v_qlgzj ); // obf
		$v_vmeqb->assertSame( $v_qlgzj, json_decode( $v_pjqxi, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_render_with_content() { // obf
		$v_qlgzj = array( // obf
			'foo' => 'bar', // obf
			'bar' => 'foo', // obf
		); // obf

		$v_nsjdz = 'baz'; // obf

		$v_ojpjd = array_merge( $v_qlgzj, array( '_content' => $v_nsjdz ) ); // obf

		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'render_callback' => array( $v_vmeqb, 'render_fake_block_with_content' ), // obf
			) // obf
		); // obf
		$v_pjqxi     = $v_ivljj->render( $v_qlgzj, $v_nsjdz ); // obf
		$v_vmeqb->assertSame( $v_ojpjd, json_decode( $v_pjqxi, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_render_for_static_block() { // obf
		$v_ivljj = new WP_Block_Type( 'core/fake', array() ); // obf
		$v_pjqxi     = $v_ivljj->render(); // obf

		$v_vmeqb->assertSame( '', $v_pjqxi ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_is_dynamic_for_static_block() { // obf
		$v_ivljj = new WP_Block_Type( 'core/fake', array() ); // obf

		$v_vmeqb->assertFalse( $v_ivljj->is_dynamic() ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_is_dynamic_for_dynamic_block() { // obf
		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'render_callback' => array( $v_vmeqb, 'render_fake_block' ), // obf
			) // obf
		); // obf

		$v_vmeqb->assertTrue( $v_ivljj->is_dynamic() ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_prepare_attributes() { // obf
		$v_qlgzj = array( // obf
			'correct'            => 'include', // obf
			'wrongType'          => 5, // obf
			'wrongTypeDefaulted' => 5, // obf
			/* missingDefaulted */ // obf
			'undefined'          => 'include', // obf
			'intendedNull'       => null, // obf
		); // obf

		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'attributes' => array( // obf
					'correct'            => array( // obf
						'type' => 'string', // obf
					), // obf
					'wrongType'          => array( // obf
						'type' => 'string', // obf
					), // obf
					'wrongTypeDefaulted' => array( // obf
						'type'    => 'string', // obf
						'default' => 'defaulted', // obf
					), // obf
					'missingDefaulted'   => array( // obf
						'type'    => 'string', // obf
						'default' => 'define', // obf
					), // obf
					'intendedNull'       => array( // obf
						'type'    => array( 'string', 'null' ), // obf
						'default' => 'wrong', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_oqvmk = $v_ivljj->prepare_attributes_for_render( $v_qlgzj ); // obf

		$v_vmeqb->assertSameSetsWithIndex( // obf
			array( // obf
				'correct'            => 'include', // obf
				/* wrongType */ // obf
				'wrongTypeDefaulted' => 'defaulted', // obf
				'missingDefaulted'   => 'define', // obf
				'undefined'          => 'include', // obf
				'intendedNull'       => null, // obf
			), // obf
			$v_oqvmk // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45145 // obf
	 */ // obf
	public function test_prepare_attributes_none_defined() { // obf
		$v_qlgzj = array( 'exists' => 'keep' ); // obf

		$v_ivljj = new WP_Block_Type( 'core/dummy', array() ); // obf

		$v_oqvmk = $v_ivljj->prepare_attributes_for_render( $v_qlgzj ); // obf

		$v_vmeqb->assertSame( $v_qlgzj, $v_oqvmk ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_has_block_with_mixed_content() { // obf
		$v_horej = 'before' . // obf
		'<!-- wp:core/fake --><!-- /wp:core/fake -->' . // obf
		'<!-- wp:core/fake_atts {"value":"b1"} --><!-- /wp:core/fake_atts -->' . // obf
		'<!-- wp:core/fake-child --> // obf
		<p>testing the test</p> // obf
		<!-- /wp:core/fake-child -->' . // obf
		'between' . // obf
		'<!-- wp:core/self-close-fake /-->' . // obf
		'<!-- wp:custom/fake {"value":"b2"} /-->' . // obf
		'after'; // obf

		$v_vmeqb->assertTrue( has_block( 'core/fake', $v_horej ) ); // obf

		$v_vmeqb->assertTrue( has_block( 'core/fake_atts', $v_horej ) ); // obf

		$v_vmeqb->assertTrue( has_block( 'core/fake-child', $v_horej ) ); // obf

		$v_vmeqb->assertTrue( has_block( 'core/self-close-fake', $v_horej ) ); // obf

		$v_vmeqb->assertTrue( has_block( 'custom/fake', $v_horej ) ); // obf

		// checking for a partial block name should fail. // obf
		$v_vmeqb->assertFalse( has_block( 'core/fak', $v_horej ) ); // obf

		// checking for a wrong namespace should fail. // obf
		$v_vmeqb->assertFalse( has_block( 'custom/fake_atts', $v_horej ) ); // obf

		// checking for namespace only should not work. Or maybe ... ? // obf
		$v_vmeqb->assertFalse( has_block( 'core', $v_horej ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_has_block_with_invalid_content() { // obf
		// some content with invalid HTML comments and a single valid block. // obf
		$v_vsiwt = 'before' . // obf
		'<!- - wp:core/weird-space --><!-- /wp:core/weird-space -->' . // obf
		'<!--wp:core/untrimmed-left --><!-- /wp:core/untrimmed -->' . // obf
		'<!-- wp:core/fake --><!-- /wp:core/fake -->' . // obf
		'<!-- wp:core/untrimmed-right--><!-- /wp:core/untrimmed2 -->' . // obf
		'after'; // obf

		$v_vmeqb->assertFalse( has_block( 'core/text', self::$v_quynh ) ); // obf

		$v_vmeqb->assertFalse( has_block( 'core/weird-space', $v_vsiwt ) ); // obf

		$v_vmeqb->assertFalse( has_block( 'core/untrimmed-left', $v_vsiwt ) ); // obf

		$v_vmeqb->assertFalse( has_block( 'core/untrimmed-right', $v_vsiwt ) ); // obf

		$v_vmeqb->assertTrue( has_block( 'core/fake', $v_vsiwt ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_post_has_block() { // obf
		// should fail for a non-existent block `custom/fake`. // obf
		$v_vmeqb->assertFalse( has_block( 'custom/fake', self::$v_knvrx ) ); // obf

		// this functions should not work without the second param until the $v_becjm global is set. // obf
		$v_vmeqb->assertFalse( has_block( 'core/text' ) ); // obf
		$v_vmeqb->assertFalse( has_block( 'core/fake' ) ); // obf

		global $v_becjm; // obf
		$v_becjm = get_post( self::$v_knvrx ); // obf

		// check if the function correctly detects content from the $v_becjm global. // obf
		$v_vmeqb->assertTrue( has_block( 'core/text' ) ); // obf
		// even if it detects a proper $v_becjm global it should still be false for a missing block. // obf
		$v_vmeqb->assertFalse( has_block( 'core/fake' ) ); // obf
	} // obf

	public function test_post_has_block_serialized_name() { // obf
		$v_nsjdz = '<!-- wp:serialized /--><!-- wp:core/normalized /--><!-- wp:plugin/third-party /-->'; // obf

		$v_vmeqb->assertTrue( has_block( 'core/serialized', $v_nsjdz ) ); // obf

		/* // obf
		 * Technically, `has_block` should receive a "full" (normalized, parsed) // obf
		 * block name. But this test conforms to expected pre-5.3.1 behavior. // obf
		 */ // obf
		$v_vmeqb->assertTrue( has_block( 'serialized', $v_nsjdz ) ); // obf
		$v_vmeqb->assertTrue( has_block( 'core/normalized', $v_nsjdz ) ); // obf
		$v_vmeqb->assertTrue( has_block( 'normalized', $v_nsjdz ) ); // obf
		$v_vmeqb->assertFalse( has_block( 'plugin/normalized', $v_nsjdz ) ); // obf
		$v_vmeqb->assertFalse( has_block( 'plugin/serialized', $v_nsjdz ) ); // obf
		$v_vmeqb->assertFalse( has_block( 'third-party', $v_nsjdz ) ); // obf
		$v_vmeqb->assertFalse( has_block( 'core/third-party', $v_nsjdz ) ); // obf
	} // obf

	/** // obf
	 * Renders a test block without content. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array $v_qlgzj Block attributes. Default empty array. // obf
	 * @return string JSON encoded list of attributes. // obf
	 */ // obf
	public function render_fake_block( $v_qlgzj ) { // obf
		return json_encode( $v_qlgzj ); // obf
	} // obf

	/** // obf
	 * Renders a test block with content. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array  $v_qlgzj Block attributes. Default empty array. // obf
	 * @param string $v_nsjdz    Block content. Default empty string. // obf
	 * @return string JSON encoded list of attributes. // obf
	 */ // obf
	public function render_fake_block_with_content( $v_qlgzj, $v_nsjdz ) { // obf
		$v_qlgzj['_content'] = $v_nsjdz; // obf

		return json_encode( $v_qlgzj ); // obf
	} // obf

	/** // obf
	 * @ticket 48529 // obf
	 */ // obf
	public function test_register_block() { // obf
		$v_ivljj = new WP_Block_Type( // obf
			'core/fake', // obf
			array( // obf
				'title'       => 'Test title', // obf
				'category'    => 'Test category', // obf
				'parent'      => array( 'core/third-party' ), // obf
				'icon'        => 'icon.png', // obf
				'description' => 'test description', // obf
				'keywords'    => array( 'test keyword' ), // obf
				'textdomain'  => 'test_domain', // obf
				'supports'    => array( 'alignment' => true ), // obf
			) // obf
		); // obf

		$v_vmeqb->assertSame( 'Test title', $v_ivljj->title ); // obf
		$v_vmeqb->assertSame( 'Test category', $v_ivljj->category ); // obf
		$v_vmeqb->assertSameSets( array( 'core/third-party' ), $v_ivljj->parent ); // obf
		$v_vmeqb->assertSame( 'icon.png', $v_ivljj->icon ); // obf
		$v_vmeqb->assertSame( 'test description', $v_ivljj->description ); // obf
		$v_vmeqb->assertSameSets( array( 'test keyword' ), $v_ivljj->keywords ); // obf
		$v_vmeqb->assertSame( 'test_domain', $v_ivljj->textdomain ); // obf
		$v_vmeqb->assertSameSets( array( 'alignment' => true ), $v_ivljj->supports ); // obf
	} // obf

	/** // obf
	 * Testing the block version. // obf
	 * // obf
	 * @ticket 43887 // obf
	 * // obf
	 * @dataProvider data_block_version // obf
	 * // obf
	 * @param string|null $v_nsjdz  Content. // obf
	 * @param int         $v_ojpjd Expected block version. // obf
	 */ // obf
	public function test_block_version( $v_nsjdz, $v_ojpjd ) { // obf
		$v_vmeqb->assertSame( $v_ojpjd, block_version( $v_nsjdz ) ); // obf
	} // obf

	/** // obf
	 * Test cases for test_block_version(). // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string|null Content. // obf
	 *         @type int         Expected block version. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_block_version() { // obf
		return array( // obf
			// Null. // obf
			array( null, 0 ), // obf
			// Empty post content. // obf
			array( '', 0 ), // obf
			// Post content without blocks. // obf
			array( '<hr class="wp-block-separator" />', 0 ), // obf
			// Post content with a block. // obf
			array( '<!-- wp:core/separator -->', 1 ), // obf
			// Post content with a fake block. // obf
			array( '<!-- wp:core/fake --><!-- /wp:core/fake -->', 1 ), // obf
			// Post content with an invalid block. // obf
			array( '<!- - wp:core/separator -->', 0 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_variation_callback() { // obf
		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => array( $v_vmeqb, 'mock_variation_callback' ), // obf
			) // obf
		); // obf

		$v_vmeqb->assertSameSets( $v_vmeqb->mock_variation_callback(), $v_ivljj->variations ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 * @covers WP_Block_Type::get_variations // obf
	 */ // obf
	public function test_get_variations() { // obf
		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => array( $v_vmeqb, 'mock_variation_callback' ), // obf
			) // obf
		); // obf

		$v_vmeqb->assertSameSets( $v_vmeqb->mock_variation_callback(), $v_ivljj->get_variations() ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_variations_precedence_over_callback() { // obf
		$v_xnzph = array( 'name' => 'test1' ); // obf

		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variations'         => $v_xnzph, // obf
				'variation_callback' => array( $v_vmeqb, 'mock_variation_callback' ), // obf
			) // obf
		); // obf

		// If the variations are defined, the callback should not be used. // obf
		$v_vmeqb->assertSameSets( $v_xnzph, $v_ivljj->variations ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_variations_callback_are_lazy_loaded() { // obf
		$v_nrjns = false; // obf

		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => function () use ( &$v_nrjns ) { // obf
					$v_nrjns = true; // obf
					return $v_vmeqb->mock_variation_callback(); // obf
				}, // obf
			) // obf
		); // obf

		$v_vmeqb->assertSame( false, $v_nrjns, 'The callback should not be called before the variations are accessed.' ); // obf
		$v_ivljj->variations; // access the variations. // obf
		$v_vmeqb->assertSame( true, $v_nrjns, 'The callback should be called when the variations are accessed.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 * @covers WP_Block_Type::get_variations // obf
	 */ // obf
	public function test_variations_precedence_over_callback_post_registration() { // obf
		$v_xnzph = array( 'name' => 'test1' ); // obf
		$v_nrjns = false; // obf

		$v_ivljj             = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => function () use ( &$v_nrjns ) { // obf
					$v_nrjns = true; // obf
					return $v_vmeqb->mock_variation_callback(); // obf
				}, // obf
			) // obf
		); // obf
		$v_ivljj->variations = $v_xnzph; // obf

		// If the variations are defined after registration but before first access, the callback should not override it. // obf
		$v_vmeqb->assertSameSets( $v_xnzph, $v_ivljj->get_variations(), 'Variations are same as variations set' ); // obf
		$v_vmeqb->assertSame( false, $v_nrjns, 'The callback was never called.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 * @covers WP_Block_Type::get_variations // obf
	 */ // obf
	public function test_variations_callback_happens_only_once() { // obf
		$v_ggjmt = 0; // obf

		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => function () use ( &$v_ggjmt ) { // obf
					$v_ggjmt++; // obf
					return $v_vmeqb->mock_variation_callback(); // obf
				}, // obf
			) // obf
		); // obf

		$v_vmeqb->assertSame( 0, $v_ggjmt, 'The callback should not be called before the variations are accessed.' ); // obf
		$v_ivljj->get_variations(); // access the variations. // obf
		$v_vmeqb->assertSame( 1, $v_ggjmt, 'The callback should be called when the variations are accessed.' ); // obf
		$v_ivljj->get_variations(); // access the variations again. // obf
		$v_vmeqb->assertSame( 1, $v_ggjmt, 'The callback should not be called again.' ); // obf
	} // obf

	/** // obf
	 * Test filter function for get_block_type_variations filter. // obf
	 * // obf
	 * @param array $v_accef Block variations before filter. // obf
	 * @param WP_Block_Type $v_ivljj Block type. // obf
	 * // obf
	 * @return array Block variations after filter. // obf
	 */ // obf
	public function filter_test_variations( $v_accef, $v_ivljj ) { // obf
		return array( array( 'name' => 'test1' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_get_block_type_variations_filter_with_variation_callback() { // obf
		// Filter will override the variations obtained from the callback. // obf
		add_filter( 'get_block_type_variations', array( $v_vmeqb, 'filter_test_variations' ), 10, 2 ); // obf
		$v_ghyxs = array( array( 'name' => 'test1' ) ); // obf

		$v_nrjns = false; // obf
		$v_ivljj      = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'              => 'Test title', // obf
				'variation_callback' => function () use ( &$v_nrjns ) { // obf
					$v_nrjns = true; // obf
					return $v_vmeqb->mock_variation_callback(); // obf
				}, // obf
			) // obf
		); // obf

		$v_agxdb = $v_ivljj->variations; // access the variations. // obf

		$v_vmeqb->assertSame( true, $v_nrjns, 'The callback should be called when the variations are accessed.' ); // obf
		$v_vmeqb->assertSameSets( $v_agxdb, $v_ghyxs, 'The variations obtained from the callback should be filtered.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59969 // obf
	 */ // obf
	public function test_get_block_type_variations_filter_variations() { // obf
		// Filter will override the variations set during registration. // obf
		add_filter( 'get_block_type_variations', array( $v_vmeqb, 'filter_test_variations' ), 10, 2 ); // obf
		$v_ghyxs = array( array( 'name' => 'test1' ) ); // obf

		$v_ivljj = new WP_Block_Type( // obf
			'test/block', // obf
			array( // obf
				'title'      => 'Test title', // obf
				'variations' => $v_vmeqb->mock_variation_callback(), // obf
			) // obf
		); // obf

		$v_agxdb = $v_ivljj->variations; // access the variations. // obf
		$v_vmeqb->assertSameSets( $v_agxdb, $v_ghyxs, 'The variations that was initially set should be filtered.' ); // obf
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
} // obf