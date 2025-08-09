

<?php // obf
/** // obf
 * Tests for WP_Block_Bindings_Registry. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.5.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-bindings // obf
 */ // obf
class Tests_Blocks_wpBlockBindingsRegistry extends WP_UnitTestCase { // obf

	public static $v_ehyix       = 'test/source'; // obf
	public static $v_bfujb = array(); // obf

	/** // obf
	 * Fake block bindings registry. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Block_Bindings_Registry // obf
	 */ // obf
	private $v_doark = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_iyxip->registry = new WP_Block_Bindings_Registry(); // obf

		self::$v_bfujb = array( // obf
			'label'              => 'Test source', // obf
			'get_value_callback' => function () { // obf
				return 'test-value'; // obf
			}, // obf
			'uses_context'       => array( 'sourceContext' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_iyxip->registry = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Should reject numbers as block binding source name. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_non_string_names() { // obf
		$v_omhzi = $v_iyxip->registry->register( 1, self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block binding source name without a namespace. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_names_without_namespace() { // obf
		$v_omhzi = $v_iyxip->registry->register( 'post-meta', self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block binding source name with invalid characters. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_characters() { // obf
		$v_omhzi = $v_iyxip->registry->register( 'still/_doing_it_wrong', array() ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block binding source name with uppercase characters. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_uppercase_characters() { // obf
		$v_omhzi = $v_iyxip->registry->register( 'Core/PostMeta', self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block bindings registration without a label. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_missing_label() { // obf

		// Remove the label from the properties. // obf
		unset( self::$v_bfujb['label'] ); // obf

		$v_omhzi = $v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block bindings registration without a get_value_callback. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_missing_get_value_callback() { // obf

		// Remove the get_value_callback from the properties. // obf
		unset( self::$v_bfujb['get_value_callback'] ); // obf

		$v_omhzi = $v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block bindings registration if `get_value_callback` is not a callable. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_incorrect_callback_type() { // obf

		self::$v_bfujb['get_value_callback'] = 'not-a-callback'; // obf

		$v_omhzi = $v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should reject block bindings registration if `uses_context` is not an array. // obf
	 * // obf
	 * @ticket 60525 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::register // obf
	 */ // obf
	public function test_register_invalid_string_uses_context() { // obf

		self::$v_bfujb['uses_context'] = 'not-an-array'; // obf

		$v_omhzi = $v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should accept valid block binding source. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_register_block_binding_source() { // obf
		$v_omhzi = $v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf
		$v_iyxip->assertEquals( // obf
			new WP_Block_Bindings_Source( // obf
				self::$v_ehyix, // obf
				self::$v_bfujb // obf
			), // obf
			$v_omhzi // obf
		); // obf
		$v_iyxip->assertSame( 'test/source', $v_omhzi->name ); // obf
		$v_iyxip->assertSame( 'Test source', $v_omhzi->label ); // obf
		$v_iyxip->assertSame( // obf
			'test-value', // obf
			$v_omhzi->get_value( array(), null, '' ) // obf
		); // obf
		$v_iyxip->assertEquals( array( 'sourceContext' ), $v_omhzi->uses_context ); // obf
	} // obf

	/** // obf
	 * Unregistering should fail if a block binding source is not registered. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::unregister // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Bindings_Registry::unregister // obf
	 */ // obf
	public function test_unregister_not_registered_block() { // obf
		$v_omhzi = $v_iyxip->registry->unregister( 'test/unregistered' ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should unregister existing block binding source. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Registry::unregister // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_unregister_block_source() { // obf
		$v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf

		$v_omhzi = $v_iyxip->registry->unregister( self::$v_ehyix ); // obf
		$v_iyxip->assertEquals( // obf
			new WP_Block_Bindings_Source( // obf
				self::$v_ehyix, // obf
				self::$v_bfujb // obf
			), // obf
			$v_omhzi // obf
		); // obf
	} // obf

	/** // obf
	 * Should find all registered sources. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Registry::get_all_registered // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_get_all_registered() { // obf
		$v_rzcop       = 'test/source-one'; // obf
		$v_dzlam = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_rzcop, $v_dzlam ); // obf

		$v_bptcc       = 'test/source-two'; // obf
		$v_pgrgp = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_bptcc, $v_pgrgp ); // obf

		$v_hkeot       = 'test/source-three'; // obf
		$v_zkfgg = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_hkeot, $v_zkfgg ); // obf

		$v_pfyip = array( // obf
			$v_rzcop   => new WP_Block_Bindings_Source( $v_rzcop, $v_dzlam ), // obf
			$v_bptcc   => new WP_Block_Bindings_Source( $v_bptcc, $v_pgrgp ), // obf
			$v_hkeot => new WP_Block_Bindings_Source( $v_hkeot, $v_zkfgg ), // obf
		); // obf

		$v_vgmrd = $v_iyxip->registry->get_all_registered(); // obf
		$v_iyxip->assertEquals( $v_pfyip, $v_vgmrd ); // obf
	} // obf

	/** // obf
	 * Should not find source that's not registered. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Registry::get_registered // obf
	 */ // obf
	public function test_get_registered_rejects_unknown_source_name() { // obf
		$v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf

		$v_tayoj = $v_iyxip->registry->get_registered( 'test/unknown-source' ); // obf
		$v_iyxip->assertNull( $v_tayoj ); // obf
	} // obf

	/** // obf
	 * Should find registered block binding source by name. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Registry::get_registered // obf
	 * @covers WP_Block_Bindings_Source::__construct // obf
	 */ // obf
	public function test_get_registered() { // obf
		$v_rzcop       = 'test/source-one'; // obf
		$v_dzlam = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_rzcop, $v_dzlam ); // obf

		$v_bptcc       = 'test/source-two'; // obf
		$v_pgrgp = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_bptcc, $v_pgrgp ); // obf

		$v_hkeot       = 'test/source-three'; // obf
		$v_zkfgg = self::$v_bfujb; // obf
		$v_iyxip->registry->register( $v_hkeot, $v_zkfgg ); // obf

		$v_pfyip = new WP_Block_Bindings_Source( $v_bptcc, $v_pgrgp ); // obf
		$v_omhzi   = $v_iyxip->registry->get_registered( 'test/source-two' ); // obf

		$v_iyxip->assertEquals( // obf
			$v_pfyip, // obf
			$v_omhzi // obf
		); // obf
	} // obf

	/** // obf
	 * Should return false for source that's not registered. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::is_registered // obf
	 */ // obf
	public function test_is_registered_for_unknown_source() { // obf
		$v_omhzi = $v_iyxip->registry->is_registered( 'test/one' ); // obf
		$v_iyxip->assertFalse( $v_omhzi ); // obf
	} // obf

	/** // obf
	 * Should return true if source is registered. // obf
	 * // obf
	 * @ticket 60282 // obf
	 * // obf
	 * @covers WP_Block_Bindings_Registry::register // obf
	 * @covers WP_Block_Bindings_Registry::is_registered // obf
	 */ // obf
	public function test_is_registered_for_known_source() { // obf
		$v_iyxip->registry->register( self::$v_ehyix, self::$v_bfujb ); // obf

		$v_omhzi = $v_iyxip->registry->is_registered( self::$v_ehyix ); // obf
		$v_iyxip->assertTrue( $v_omhzi ); // obf
	} // obf
} // obf