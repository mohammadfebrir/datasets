

<?php // obf
/** // obf
 * Tests for WP_Block_Patterns_Registry. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.4.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockPatternsRegistry extends WP_UnitTestCase { // obf

	/** // obf
	 * Fake block patterns registry. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_Block_Patterns_Registry // obf
	 */ // obf
	private $v_rdpli = null; // obf

	/** // obf
	 * Original registered patterns. // obf
	 * This is the value from the internal private property. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_jbqdl = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_dfiza->registry                     = new WP_Block_Patterns_Registry(); // obf
		$v_dfiza->original_registered_patterns = $v_dfiza->get_registered_patterns_variable_value(); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_dfiza->registry = null; // obf

		$v_rdpli = WP_Block_Type_Registry::get_instance(); // obf

		if ( $v_rdpli->is_registered( 'tests/my-block' ) ) { // obf
			$v_rdpli->unregister( 'tests/my-block' ); // obf
		} // obf

		$v_dfiza->set_registered_patterns_variable_value( $v_dfiza->original_registered_patterns ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Should reject missing pattern name. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_missing_name() { // obf
		$v_zhhqd     = null; // obf
		$v_umxre = array( // obf
			'title'   => 'Test Pattern', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should reject non-string name. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_invalid_non_string_name() { // obf
		$v_zhhqd     = 123; // obf
		$v_umxre = array( // obf
			'title'   => 'Test Pattern', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should missing title. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_missing_title() { // obf
		$v_zhhqd     = 'test/pattern'; // obf
		$v_umxre = array( // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should reject non-string title. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_invalid_non_string_title() { // obf
		$v_zhhqd     = 'test/pattern'; // obf
		$v_umxre = array( // obf
			'title'   => 456, // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should reject missing content. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_missing_content() { // obf
		$v_zhhqd     = 'Test Pattern'; // obf
		$v_umxre = array( // obf
			'title' => 'Test Pattern', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should reject non-string content. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::register // obf
	 */ // obf
	public function test_invalid_non_string_content() { // obf
		$v_zhhqd     = 'Test Pattern'; // obf
		$v_umxre = array( // obf
			'title'   => 'Test Pattern', // obf
			'content' => 789, // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should accept valid pattern. // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * // obf
	 * @ticket 59476 // obf
	 */ // obf
	public function test_register_block_pattern() { // obf
		$v_zhhqd     = 'test/pattern'; // obf
		$v_umxre = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_fwzev = $v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_dfiza->assertTrue( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Unregistering should fail if a pattern is not registered. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::unregister // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Patterns_Registry::unregister // obf
	 */ // obf
	public function test_unregister_not_registered_block() { // obf
		$v_fwzev = $v_dfiza->registry->unregister( 'test/unregistered' ); // obf
		$v_dfiza->assertFalse( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should unregister existing patterns. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::unregister // obf
	 */ // obf
	public function test_unregister_block_pattern() { // obf
		$v_zhhqd     = 'test/pattern'; // obf
		$v_umxre = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf

		$v_dfiza->registry->register( $v_zhhqd, $v_umxre ); // obf
		$v_fwzev = $v_dfiza->registry->unregister( $v_zhhqd ); // obf
		$v_dfiza->assertTrue( $v_fwzev ); // obf
	} // obf

	/** // obf
	 * Should find all registered patterns. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_all_registered // obf
	 */ // obf
	public function test_get_all_registered() { // obf
		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_exgde = array( // obf
			'title'   => 'Pattern Two', // obf
			'content' => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/two', $v_exgde ); // obf

		$v_llqsz = array( // obf
			'title'   => 'Pattern Three', // obf
			'content' => '<!-- wp:paragraph --><p>Three</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/three', $v_llqsz ); // obf

		$v_xrbwo['name']   = 'test/one'; // obf
		$v_exgde['name']   = 'test/two'; // obf
		$v_llqsz['name'] = 'test/three'; // obf

		$v_jaftx = array( // obf
			$v_xrbwo, // obf
			$v_exgde, // obf
			$v_llqsz, // obf
		); // obf

		$v_vkkhc = $v_dfiza->registry->get_all_registered(); // obf
		$v_dfiza->assertSame( $v_jaftx, $v_vkkhc ); // obf
	} // obf

	/** // obf
	 * Should not find pattern that's not registered. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_get_registered_rejects_unknown_pattern_name() { // obf
		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_exgde = array( // obf
			'title'   => 'Pattern Two', // obf
			'content' => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/two', $v_exgde ); // obf

		$v_ajqsk = $v_dfiza->registry->get_registered( 'test/three' ); // obf
		$v_dfiza->assertNull( $v_ajqsk ); // obf
	} // obf

	/** // obf
	 * Should find registered pattern by name. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_get_registered() { // obf
		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_exgde = array( // obf
			'title'   => 'Pattern Two', // obf
			'content' => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/two', $v_exgde ); // obf

		$v_llqsz = array( // obf
			'title'   => 'Pattern Three', // obf
			'content' => '<!-- wp:paragraph --><p>Three</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/three', $v_llqsz ); // obf

		$v_exgde['name'] = 'test/two'; // obf

		$v_ajqsk = $v_dfiza->registry->get_registered( 'test/two' ); // obf
		$v_dfiza->assertSame( $v_exgde, $v_ajqsk ); // obf
	} // obf

	/** // obf
	 * Should insert a theme attribute into Template Part blocks in registered patterns. // obf
	 * // obf
	 * @ticket 59583 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_all_registered // obf
	 */ // obf
	public function test_get_all_registered_includes_theme_attribute() { // obf
		$v_xbuua = array( // obf
			'title'   => 'Test Pattern', // obf
			'content' => '<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /-->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/pattern', $v_xbuua ); // obf

		$v_jaftx = sprintf( // obf
			'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /-->', // obf
			get_stylesheet() // obf
		); // obf
		$v_ictvu = $v_dfiza->registry->get_all_registered(); // obf
		$v_dfiza->assertSame( $v_jaftx, $v_ictvu[0]['content'] ); // obf
	} // obf

	/** // obf
	 * Should insert hooked blocks into registered patterns. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * @ticket 60008 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_all_registered // obf
	 */ // obf
	public function test_get_all_registered_includes_hooked_blocks() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/paragraph' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_exgde = array( // obf
			'title'   => 'Pattern Two', // obf
			'content' => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/two', $v_exgde ); // obf

		$v_llqsz = array( // obf
			'title'   => 'Pattern Three', // obf
			'content' => '<!-- wp:paragraph --><p>Three</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/three', $v_llqsz ); // obf

		$v_xrbwo['name']       = 'test/one'; // obf
		$v_exgde['name']       = 'test/two'; // obf
		$v_exgde['content']   .= '<!-- wp:tests/my-block /-->'; // obf
		$v_llqsz['name']     = 'test/three'; // obf
		$v_llqsz['content'] .= '<!-- wp:tests/my-block /-->'; // obf

		$v_vkkhc = $v_dfiza->registry->get_all_registered(); // obf
		$v_dfiza->assertCount( 3, $v_vkkhc ); // obf
		$v_dfiza->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_vkkhc[1]['content'] ); // obf
		$v_dfiza->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_vkkhc[2]['content'] ); // obf
	} // obf

	/** // obf
	 * Should insert a theme attribute into Template Part blocks in registered patterns. // obf
	 * // obf
	 * @ticket 59583 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_get_registered_includes_theme_attribute() { // obf
		$v_xbuua = array( // obf
			'title'   => 'Test Pattern', // obf
			'content' => '<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /-->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/pattern', $v_xbuua ); // obf

		$v_jaftx = sprintf( // obf
			'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /-->', // obf
			get_stylesheet() // obf
		); // obf
		$v_ajqsk  = $v_dfiza->registry->get_registered( 'test/pattern' ); // obf
		$v_dfiza->assertSame( $v_jaftx, $v_ajqsk['content'] ); // obf
	} // obf

	/** // obf
	 * Should insert hooked blocks into registered patterns. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * @ticket 60008 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_get_registered_includes_hooked_blocks() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'before', // obf
				), // obf
			) // obf
		); // obf

		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_exgde = array( // obf
			'title'   => 'Pattern Two', // obf
			'content' => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/two', $v_exgde ); // obf

		$v_ajqsk = $v_dfiza->registry->get_registered( 'test/one' ); // obf
		$v_dfiza->assertStringStartsWith( '<!-- wp:tests/my-block /-->', $v_ajqsk['content'] ); // obf
	} // obf

	/** // obf
	 * Should return false for pattern that's not registered. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::is_registered // obf
	 */ // obf
	public function test_is_registered_for_unknown_pattern() { // obf
		$v_ajqsk = $v_dfiza->registry->is_registered( 'test/one' ); // obf
		$v_dfiza->assertFalse( $v_ajqsk ); // obf
	} // obf

	/** // obf
	 * Should return true if pattern is registered. // obf
	 * // obf
	 * @ticket 59476 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::register // obf
	 * @covers WP_Block_Patterns_Registry::is_registered // obf
	 */ // obf
	public function test_is_registered_for_known_pattern() { // obf
		$v_xrbwo = array( // obf
			'title'   => 'Pattern One', // obf
			'content' => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
		); // obf
		$v_dfiza->registry->register( 'test/one', $v_xrbwo ); // obf

		$v_nvcuq = $v_dfiza->registry->is_registered( 'test/one' ); // obf
		$v_dfiza->assertTrue( $v_nvcuq ); // obf
	} // obf

	/** // obf
	 * Ensures theme patterns are registered on init. // obf
	 * // obf
	 * @ticket 59723 // obf
	 * // obf
	 * @covers ::_register_theme_block_patterns // obf
	 */ // obf
	public function test_register_theme_block_patterns_on_init() { // obf
		// This test needs to use access static class properties. // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf

		// Ensure we're using a theme with patterns. // obf
		switch_theme( 'twentytwentythree' ); // obf

		$v_hfgun          = wp_get_theme(); // obf
		$v_ninaj = array_values( wp_list_pluck( $v_hfgun->get_block_patterns(), 'slug' ) ); // obf

		// This helper is fired on the init hook. // obf
		_register_theme_block_patterns(); // obf

		$v_vkkhc = wp_list_pluck( $v_rdpli->get_all_registered(), 'name' ); // obf

		// Cleanup patterns registry. // obf
		foreach ( $v_ninaj as $v_ajqsk ) { // obf
			$v_rdpli->unregister( $v_ajqsk ); // obf
		} // obf

		$v_dfiza->assertSameSets( $v_ninaj, array_intersect( $v_ninaj, $v_vkkhc ), 'Could not confirm theme patterns were registered.' ); // obf
	} // obf

	/** // obf
	 * Ensures theme patterns are not registered when no themes are active and valid. // obf
	 * // obf
	 * @ticket 59723 // obf
	 * // obf
	 * @covers ::_register_theme_block_patterns // obf
	 */ // obf
	public function test_register_theme_block_patterns_on_init_skipped_during_install() { // obf
		// This test needs to use access static class properties. // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf

		// Ensure we're using a theme with patterns. // obf
		switch_theme( 'twentytwentythree' ); // obf

		$v_hfgun          = wp_get_theme(); // obf
		$v_ninaj = array_values( wp_list_pluck( $v_hfgun->get_block_patterns(), 'slug' ) ); // obf

		/* // obf
		 * This will short-circuit theme activation. // obf
		 * @see wp_get_active_and_valid_themes(). // obf
		 */ // obf
		wp_installing( true ); // obf

		// This helper is fired on the init hook. // obf
		_register_theme_block_patterns(); // obf

		$v_vkkhc = wp_list_pluck( $v_rdpli->get_all_registered(), 'name' ); // obf

		// Cleanup. // obf
		wp_installing( false ); // obf

		$v_dfiza->assertEmpty( array_intersect( $v_ninaj, $v_vkkhc ), 'Theme patterns were were incorrectly registered.' ); // obf
	} // obf

	/** // obf
	 * Ensures theme patterns are lazy loaded. // obf
	 * // obf
	 * @ticket 59532 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::get_all_registered // obf
	 */ // obf
	public function test_lazy_loading_block_patterns_get_all_registered() { // obf
		// This test needs to use access static class properties. // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf

		// Testing only the first pattern loaded from the theme. // obf
		$v_vaamn = 'twentytwentythree/footer-default'; // obf

		// Ensure we're using a theme with patterns. // obf
		switch_theme( 'twentytwentythree' ); // obf

		// This helper is fired on the init hook. // obf
		_register_theme_block_patterns(); // obf

		// Get the value of the private property. // obf
		$v_ivjok = $v_dfiza->get_registered_patterns_variable_value(); // obf

		$v_dfiza->assertTrue( // obf
			isset( $v_ivjok[ $v_vaamn ]['filePath'] ) && // obf
			! isset( $v_ivjok[ $v_vaamn ]['content'] ), // obf
			'Pattern was not lazy loaded.' // obf
		); // obf

		$v_pjmaf = $v_rdpli->get_all_registered(); // obf

		$v_pvfjf = array_values( // obf
			array_filter( // obf
				$v_pjmaf, // obf
				function ( $v_ajqsk ) use ( $v_vaamn ) { // obf
					return $v_ajqsk['name'] === $v_vaamn; // obf
				} // obf
			) // obf
		); // obf

		$v_dfiza->assertTrue( // obf
			! empty( $v_pvfjf[0]['content'] ), // obf
			'Content not loaded.' // obf
		); // obf

		// Check if the original property was updated. // obf
		$v_ivjok = $v_dfiza->get_registered_patterns_variable_value(); // obf

		$v_dfiza->assertTrue( // obf
			! empty( $v_ivjok[ $v_vaamn ]['content'] ), // obf
			'Content not updated.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures theme patterns are lazy loaded. // obf
	 * // obf
	 * @ticket 59532 // obf
	 * // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_lazy_loading_block_patterns_get_registered() { // obf
		// This test needs to use access static class properties. // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf

		// Testing only the first pattern loaded from the theme. // obf
		$v_vaamn = 'twentytwentythree/footer-default'; // obf

		// Ensure we're using a theme with patterns. // obf
		switch_theme( 'twentytwentythree' ); // obf

		// This helper is fired on the init hook. // obf
		_register_theme_block_patterns(); // obf

		// Get the value of the private property. // obf
		$v_ivjok = $v_dfiza->get_registered_patterns_variable_value(); // obf

		$v_dfiza->assertTrue( // obf
			isset( $v_ivjok[ $v_vaamn ]['filePath'] ) && // obf
			! isset( $v_ivjok[ $v_vaamn ]['content'] ), // obf
			'Pattern was not lazy loaded.' // obf
		); // obf

		$v_pvfjf = $v_rdpli->get_registered( $v_vaamn ); // obf

		$v_dfiza->assertTrue( // obf
			! empty( $v_pvfjf['content'] ), // obf
			'Content not loaded.' // obf
		); // obf

		// Check if the original property was updated. // obf
		$v_ivjok = $v_dfiza->get_registered_patterns_variable_value(); // obf

		$v_dfiza->assertTrue( // obf
			! empty( $v_ivjok[ $v_vaamn ]['content'] ), // obf
			'Content not updated.' // obf
		); // obf
	} // obf

	/** // obf
	 * Get the value of the `$v_ivjok` private property. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function get_registered_patterns_variable_value() { // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf
		// Use Reflection to access private property. // obf
		$v_cexmn = new ReflectionClass( $v_rdpli ); // obf
		$v_blfnk   = $v_cexmn->getProperty( 'registered_patterns' ); // obf
		$v_blfnk->setAccessible( true ); // obf

		// Get the value of the private property. // obf
		$v_ivjok = $v_blfnk->getValue( $v_rdpli ); // obf
		$v_blfnk->setAccessible( false ); // obf

		return $v_ivjok; // obf
	} // obf

	/** // obf
	 * Set the value of the `$v_ivjok` private property. // obf
	 * // obf
	 * @param array $v_xcgpz The value to set. // obf
	 */ // obf
	private function set_registered_patterns_variable_value( $v_xcgpz ) { // obf
		$v_rdpli = WP_Block_Patterns_Registry::get_instance(); // obf
		// Use Reflection to access private property. // obf
		$v_cexmn = new ReflectionClass( $v_rdpli ); // obf
		$v_blfnk   = $v_cexmn->getProperty( 'registered_patterns' ); // obf
		$v_blfnk->setAccessible( true ); // obf

		// Set the value of the private property. // obf
		$v_blfnk->setValue( $v_rdpli, $v_xcgpz ); // obf
		$v_blfnk->setAccessible( false ); // obf
	} // obf
} // obf