

<?php // obf
/** // obf
 * Tests for WP_Block_Type_Registry. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockTypeRegistry extends WP_UnitTestCase { // obf

	/** // obf
	 * Fake block type registry. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Type_Registry // obf
	 */ // obf
	private $v_dowhl = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_tnpge->registry = new WP_Block_Type_Registry(); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_tnpge->registry = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Should reject numbers // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::register // obf
	 */ // obf
	public function test_invalid_non_string_names() { // obf
		$v_xdrut = $v_tnpge->registry->register( 1, array() ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should reject blocks without a namespace // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::register // obf
	 */ // obf
	public function test_invalid_names_without_namespace() { // obf
		$v_xdrut = $v_tnpge->registry->register( 'paragraph', array() ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should reject blocks with invalid characters // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::register // obf
	 */ // obf
	public function test_invalid_characters() { // obf
		$v_xdrut = $v_tnpge->registry->register( 'still/_doing_it_wrong', array() ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should reject blocks with uppercase characters // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::register // obf
	 */ // obf
	public function test_uppercase_characters() { // obf
		$v_xdrut = $v_tnpge->registry->register( 'Core/Paragraph', array() ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should accept valid block names // obf
	 * // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_register_block_type() { // obf
		$v_fyuvj     = 'core/paragraph'; // obf
		$v_wgmlx = array( // obf
			'icon' => 'editor-paragraph', // obf
		); // obf

		$v_udpkc = $v_tnpge->registry->register( $v_fyuvj, $v_wgmlx ); // obf
		$v_tnpge->assertSame( $v_fyuvj, $v_udpkc->name ); // obf
		$v_tnpge->assertSame( $v_wgmlx['icon'], $v_udpkc->icon ); // obf
		$v_tnpge->assertSame( $v_udpkc, $v_tnpge->registry->get_registered( $v_fyuvj ) ); // obf
	} // obf

	/** // obf
	 * Should fail to re-register the same block // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::register // obf
	 */ // obf
	public function test_register_block_type_twice() { // obf
		$v_fyuvj     = 'core/paragraph'; // obf
		$v_wgmlx = array( // obf
			'icon' => 'editor-paragraph', // obf
		); // obf

		$v_xdrut = $v_tnpge->registry->register( $v_fyuvj, $v_wgmlx ); // obf
		$v_tnpge->assertNotFalse( $v_xdrut ); // obf
		$v_xdrut = $v_tnpge->registry->register( $v_fyuvj, $v_wgmlx ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should accept a WP_Block_Type instance // obf
	 * // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_register_block_type_instance() { // obf
		$v_udpkc = new WP_Fake_Block_Type( 'core/fake' ); // obf

		$v_xdrut = $v_tnpge->registry->register( $v_udpkc ); // obf
		$v_tnpge->assertSame( $v_udpkc, $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Unregistering should fail if a block is not registered // obf
	 * // obf
	 * @ticket 45097 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Block_Type_Registry::unregister // obf
	 */ // obf
	public function test_unregister_not_registered_block() { // obf
		$v_xdrut = $v_tnpge->registry->unregister( 'core/unregistered' ); // obf
		$v_tnpge->assertFalse( $v_xdrut ); // obf
	} // obf

	/** // obf
	 * Should unregister existing blocks // obf
	 * // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_unregister_block_type() { // obf
		$v_fyuvj     = 'core/paragraph'; // obf
		$v_wgmlx = array( // obf
			'icon' => 'editor-paragraph', // obf
		); // obf

		$v_tnpge->registry->register( $v_fyuvj, $v_wgmlx ); // obf
		$v_udpkc = $v_tnpge->registry->unregister( $v_fyuvj ); // obf
		$v_tnpge->assertSame( $v_fyuvj, $v_udpkc->name ); // obf
		$v_tnpge->assertSame( $v_wgmlx['icon'], $v_udpkc->icon ); // obf
		$v_tnpge->assertFalse( $v_tnpge->registry->is_registered( $v_fyuvj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 45097 // obf
	 */ // obf
	public function test_get_all_registered() { // obf
		$v_qvwac    = array( 'core/paragraph', 'core/image', 'core/blockquote' ); // obf
		$v_wgmlx = array( // obf
			'icon' => 'random', // obf
		); // obf

		foreach ( $v_qvwac as $v_fyuvj ) { // obf
			$v_tnpge->registry->register( $v_fyuvj, $v_wgmlx ); // obf
		} // obf

		$v_zebzk = $v_tnpge->registry->get_all_registered(); // obf
		$v_tnpge->assertSameSets( $v_qvwac, array_keys( $v_zebzk ) ); // obf
	} // obf
} // obf