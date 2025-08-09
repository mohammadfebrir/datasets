

<?php // obf
/** // obf
 * Tests for render block functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.5.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_RenderBlock extends WP_UnitTestCase { // obf

	/** // obf
	 * Sets up each test method. // obf
	 */ // obf
	public function set_up() { // obf
		global $v_dkkfn; // obf

		parent::set_up(); // obf

		$v_lsuol = array( // obf
			'post_content' => 'example', // obf
			'post_excerpt' => '', // obf
		); // obf

		$v_dkkfn = self::factory()->post->create_and_get( $v_lsuol ); // obf
		setup_postdata( $v_dkkfn ); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		// Removes test block types registered by test cases. // obf
		$v_zrfqf = WP_Block_Type_Registry::get_instance()->get_all_registered(); // obf
		foreach ( $v_zrfqf as $v_fcuzs ) { // obf
			$v_loxod = $v_fcuzs->name; // obf
			if ( str_starts_with( $v_loxod, 'tests/' ) ) { // obf
				unregister_block_type( $v_loxod ); // obf
			} // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that a block which provides context makes that context available to // obf
	 * its inner blocks. // obf
	 * // obf
	 * @ticket 49927 // obf
	 * // obf
	 * @covers ::register_block_type // obf
	 * @covers ::render_block // obf
	 */ // obf
	public function test_provides_block_context() { // obf
		$v_iipec = array(); // obf

		register_block_type( // obf
			'tests/context-provider', // obf
			array( // obf
				'attributes'       => array( // obf
					'contextWithAssigned'   => array( // obf
						'type' => 'number', // obf
					), // obf
					'contextWithDefault'    => array( // obf
						'type'    => 'number', // obf
						'default' => 0, // obf
					), // obf
					'contextWithoutDefault' => array( // obf
						'type' => 'number', // obf
					), // obf
					'contextNotRequested'   => array( // obf
						'type' => 'number', // obf
					), // obf
				), // obf
				'provides_context' => array( // obf
					'tests/contextWithAssigned'   => 'contextWithAssigned', // obf
					'tests/contextWithDefault'    => 'contextWithDefault', // obf
					'tests/contextWithoutDefault' => 'contextWithoutDefault', // obf
					'tests/contextNotRequested'   => 'contextNotRequested', // obf
				), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/context-consumer', // obf
			array( // obf
				'uses_context'    => array( // obf
					'tests/contextWithDefault', // obf
					'tests/contextWithAssigned', // obf
					'tests/contextWithoutDefault', // obf
				), // obf
				'render_callback' => static function ( $v_zcxdr, $v_mmjku, $v_dipeg ) use ( &$v_iipec ) { // obf
					$v_iipec[] = $v_dipeg->context; // obf

					return ''; // obf
				}, // obf
			) // obf
		); // obf

		$v_jyhll = parse_blocks( // obf
			'<!-- wp:tests/context-provider {"contextWithAssigned":10} -->' . // obf
			'<!-- wp:tests/context-consumer /-->' . // obf
			'<!-- /wp:tests/context-provider -->' // obf
		); // obf

		render_block( $v_jyhll[0] ); // obf

		$v_rtvdb->assertSame( // obf
			array( // obf
				'tests/contextWithDefault'  => 0, // obf
				'tests/contextWithAssigned' => 10, // obf
			), // obf
			$v_iipec[0] // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block can receive default-provided context through // obf
	 * render_block. // obf
	 * // obf
	 * @ticket 49927 // obf
	 * // obf
	 * @covers ::register_block_type // obf
	 * @covers ::render_block // obf
	 */ // obf
	public function test_provides_default_context() { // obf
		global $v_dkkfn; // obf

		$v_iipec = array(); // obf

		register_block_type( // obf
			'tests/context-consumer', // obf
			array( // obf
				'uses_context'    => array( 'postId', 'postType' ), // obf
				'render_callback' => static function ( $v_zcxdr, $v_mmjku, $v_dipeg ) use ( &$v_iipec ) { // obf
					$v_iipec[] = $v_dipeg->context; // obf

					return ''; // obf
				}, // obf
			) // obf
		); // obf

		$v_jyhll = parse_blocks( '<!-- wp:tests/context-consumer /-->' ); // obf

		render_block( $v_jyhll[0] ); // obf

		$v_rtvdb->assertSame( // obf
			array( // obf
				'postId'   => $v_dkkfn->ID, // obf
				'postType' => $v_dkkfn->post_type, // obf
			), // obf
			$v_iipec[0] // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that default block context can be filtered. // obf
	 * // obf
	 * @ticket 49927 // obf
	 * // obf
	 * @covers ::register_block_type // obf
	 * @covers ::render_block // obf
	 */ // obf
	public function test_default_context_is_filterable() { // obf
		$v_iipec = array(); // obf

		register_block_type( // obf
			'tests/context-consumer', // obf
			array( // obf
				'uses_context'    => array( 'example' ), // obf
				'render_callback' => static function ( $v_zcxdr, $v_mmjku, $v_dipeg ) use ( &$v_iipec ) { // obf
					$v_iipec[] = $v_dipeg->context; // obf

					return ''; // obf
				}, // obf
			) // obf
		); // obf

		$v_inkys = static function ( $v_pjebe ) { // obf
			$v_pjebe['example'] = 'ok'; // obf
			return $v_pjebe; // obf
		}; // obf

		$v_jyhll = parse_blocks( '<!-- wp:tests/context-consumer /-->' ); // obf

		add_filter( 'render_block_context', $v_inkys ); // obf

		render_block( $v_jyhll[0] ); // obf

		remove_filter( 'render_block_context', $v_inkys ); // obf

		$v_rtvdb->assertSame( array( 'example' => 'ok' ), $v_iipec[0] ); // obf
	} // obf

	/** // obf
	 * Tests the behavior of the 'render_block_context' filter based on the location of the filtered block. // obf
	 * // obf
	 * @ticket 62046 // obf
	 */ // obf
	public function test_render_block_context_inner_blocks() { // obf
		$v_iipec = array(); // obf

		register_block_type( // obf
			'tests/context-provider', // obf
			array( // obf
				'provides_context' => array( 'example' ), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/context-consumer', // obf
			array( // obf
				'uses_context'    => array( 'example' ), // obf
				'render_callback' => static function ( $v_zcxdr, $v_mmjku, $v_dipeg ) use ( &$v_iipec ) { // obf
					$v_iipec = $v_dipeg->context; // obf

					return ''; // obf
				}, // obf
			) // obf
		); // obf

		// Filter the context provided by the test block. // obf
		add_filter( // obf
			'render_block_context', // obf
			function ( $v_pjebe, $v_eawiu ) { // obf
				if ( isset( $v_eawiu['blockName'] ) && 'tests/context-provider' === $v_eawiu['blockName'] ) { // obf
					$v_pjebe['example'] = 'ok'; // obf
				} // obf

				return $v_pjebe; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		// Test inner block context when the provider block is a top-level block. // obf
		do_blocks( // obf
			<<<HTML // obf
<!-- wp:tests/context-provider --> // obf
<!-- wp:tests/context-consumer /--> // obf
<!-- /wp:tests/context-provider --> // obf
HTML // obf
		); // obf
		$v_rtvdb->assertArrayHasKey( 'example', $v_iipec, 'Test block is top-level block: Context should include "example"' ); // obf
		$v_rtvdb->assertSame( 'ok', $v_iipec['example'], 'Test block is top-level block: "example" in context should be "ok"' ); // obf

		// Test inner block context when the provider block is an inner block. // obf
		do_blocks( // obf
			<<<HTML // obf
<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<!-- wp:tests/context-provider --> // obf
<!-- wp:tests/context-consumer /--> // obf
<!-- /wp:tests/context-provider --> // obf
<!-- /wp:group --> // obf
HTML // obf
		); // obf
		$v_rtvdb->assertArrayHasKey( 'example', $v_iipec, 'Test block is inner block: Block context should include "example"' ); // obf
		$v_rtvdb->assertSame( 'ok', $v_iipec['example'], 'Test block is inner block: "example" in context should be "ok"' ); // obf
	} // obf

	/** // obf
	 * Tests that the 'render_block_context' filter arbitrary context. // obf
	 * // obf
	 * @ticket 62046 // obf
	 */ // obf
	public function test_render_block_context_allowed_context() { // obf
		$v_iipec = array(); // obf

		register_block_type( // obf
			'tests/context-consumer', // obf
			array( // obf
				'uses_context'    => array( 'example' ), // obf
				'render_callback' => static function ( $v_zcxdr, $v_mmjku, $v_dipeg ) use ( &$v_iipec ) { // obf
					$v_iipec = $v_dipeg->context; // obf

					return ''; // obf
				}, // obf
			) // obf
		); // obf

		// Filter the context provided to the test block. // obf
		add_filter( // obf
			'render_block_context', // obf
			function ( $v_pjebe, $v_eawiu ) { // obf
				if ( isset( $v_eawiu['blockName'] ) && 'tests/context-consumer' === $v_eawiu['blockName'] ) { // obf
					$v_pjebe['arbitrary'] = 'ok'; // obf
				} // obf

				return $v_pjebe; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		do_blocks( // obf
			<<<HTML // obf
<!-- wp:tests/context-consumer /--> // obf
HTML // obf
		); // obf
		$v_rtvdb->assertArrayNotHasKey( 'arbitrary', $v_iipec, 'Test block is top-level block: Block context should not include "arbitrary"' ); // obf

		do_blocks( // obf
			<<<HTML // obf
<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<!-- wp:tests/context-consumer /--> // obf
<!-- /wp:group --> // obf
HTML // obf
		); // obf

		/* // obf
		 * These assertions assert something that ideally should not be the case: Inner blocks should respect the // obf
		 * `uses_context` value just like top-level blocks do. However, due to logic in `WP_Block::render()`, the // obf
		 * `context` property value itself is filterable when it should rather only apply to the `available_context` // obf
		 * property. // obf
		 * However, changing this behavior now would be a backward compatibility break, hence the assertion here. // obf
		 * Potentially it can be reconsidered in the future, so that these two assertions could be replaced with an // obf
		 * `assertArrayNotHasKey( 'arbitrary', $v_iipec )`. // obf
		 */ // obf
		$v_rtvdb->assertArrayHasKey( 'arbitrary', $v_iipec, 'Test block is inner block: Block context should include "arbitrary"' ); // obf
		$v_rtvdb->assertSame( 'ok', $v_iipec['arbitrary'], 'Test block is inner block: "arbitrary" in context should be "ok"' ); // obf
	} // obf
} // obf