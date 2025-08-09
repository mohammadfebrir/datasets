

<?php // obf
/** // obf
 * Tests for WP_Block_Styles_Registry. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.6.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockStylesRegistry extends WP_UnitTestCase { // obf

	/** // obf
	 * Fake block styles registry. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var WP_Block_Styles_Registry // obf
	 */ // obf
	private $v_puhuk = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_lmdln->registry = new WP_Block_Styles_Registry(); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_lmdln->registry = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Should accept valid string block type name. // obf
	 * // obf
	 * @ticket 61274 // obf
	 */ // obf
	public function test_register_block_style_with_string_block_name() { // obf
		$v_hsprq             = 'core/paragraph'; // obf
		$v_gbdzr = array( 'name' => 'fancy' ); // obf
		$v_lwmiw           = $v_lmdln->registry->register( $v_hsprq, $v_gbdzr ); // obf
		$v_lmdln->assertTrue( $v_lwmiw ); // obf
		$v_lmdln->assertTrue( $v_lmdln->registry->is_registered( 'core/paragraph', 'fancy' ) ); // obf
	} // obf

	/** // obf
	 * Should accept valid array of block type names. // obf
	 * // obf
	 * @ticket 61274 // obf
	 */ // obf
	public function test_register_block_style_with_array_of_block_names() { // obf
		$v_arlog            = array( 'core/paragraph', 'core/group' ); // obf
		$v_gbdzr = array( 'name' => 'plain' ); // obf
		$v_lwmiw           = $v_lmdln->registry->register( $v_arlog, $v_gbdzr ); // obf
		$v_lmdln->assertTrue( $v_lwmiw ); // obf
		$v_lmdln->assertTrue( $v_lmdln->registry->is_registered( 'core/paragraph', 'plain' ) ); // obf
		$v_lmdln->assertTrue( $v_lmdln->registry->is_registered( 'core/group', 'plain' ) ); // obf
	} // obf
} // obf