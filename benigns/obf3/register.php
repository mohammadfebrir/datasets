

<?php // obf
/** // obf
 * Tests for Block Bindings API helper functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.5.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-bindings // obf
 */ // obf
class Tests_Block_Bindings_Register extends WP_UnitTestCase { // obf

	public static $v_rgtga       = 'test/source'; // obf
	public static $v_objpv = array(); // obf

	/** // obf
	 * Set up before each test. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		self::$v_objpv = array( // obf
			'label'              => 'Test source', // obf
			'get_value_callback' => function () { // obf
				return 'test-value'; // obf
			}, // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down after each test. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function tear_down() { // obf
		foreach ( get_all_registered_block_bindings_sources() as $v_jnwwu => $v_oymxl ) { // obf
			if ( str_starts_with( $v_jnwwu, 'test/' ) ) { // obf
				unregister_block_bindings_source( $v_jnwwu ); // obf
			} // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Should find all registered sources. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers ::register_block_bindings_source // obf
	 * @covers ::get_all_registered_block_bindings_sources // obf
	 * @covers ::get_block_bindings_source // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_get_all_registered() { // obf
		$v_dslis       = 'test/source-one'; // obf
		$v_bllav = self::$v_objpv; // obf
		register_block_bindings_source( $v_dslis, $v_bllav ); // obf

		$v_sprbd       = 'test/source-two'; // obf
		$v_rnzjn = self::$v_objpv; // obf
		register_block_bindings_source( $v_sprbd, $v_rnzjn ); // obf

		$v_xvwkq       = 'test/source-three'; // obf
		$v_nsijn = self::$v_objpv; // obf
		register_block_bindings_source( $v_xvwkq, $v_nsijn ); // obf

		$v_vpwms = array( // obf
			$v_dslis         => new WP_Block_Bindings_Source( $v_dslis, $v_bllav ), // obf
			$v_sprbd         => new WP_Block_Bindings_Source( $v_sprbd, $v_rnzjn ), // obf
			$v_xvwkq       => new WP_Block_Bindings_Source( $v_xvwkq, $v_nsijn ), // obf
			'core/post-meta'         => get_block_bindings_source( 'core/post-meta' ), // obf
			'core/pattern-overrides' => get_block_bindings_source( 'core/pattern-overrides' ), // obf
		); // obf

		$v_bolwx = get_all_registered_block_bindings_sources(); // obf
		$v_bovch->assertEquals( $v_vpwms, $v_bolwx ); // obf
	} // obf

	/** // obf
	 * Should unregister existing block binding source. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers ::register_block_bindings_source // obf
	 * @covers ::unregister_block_bindings_source // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_unregister_block_source() { // obf
		register_block_bindings_source( self::$v_rgtga, self::$v_objpv ); // obf

		$v_nwarn = unregister_block_bindings_source( self::$v_rgtga ); // obf
		$v_bovch->assertEquals( // obf
			new WP_Block_Bindings_Source( // obf
				self::$v_rgtga, // obf
				self::$v_objpv // obf
			), // obf
			$v_nwarn // obf
		); // obf
	} // obf
} // obf