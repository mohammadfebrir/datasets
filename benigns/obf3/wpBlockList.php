

<?php // obf
/** // obf
 * Tests for WP_Block_List. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.5.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockList extends WP_UnitTestCase { // obf

	/** // obf
	 * Fake block type registry. // obf
	 * // obf
	 * @var WP_Block_Type_Registry // obf
	 */ // obf
	private $v_bhzdb = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zwnkv->registry = new WP_Block_Type_Registry(); // obf
		$v_zwnkv->registry->register( 'core/example', array() ); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_zwnkv->registry = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_array_access() { // obf
		$v_rhrlg = parse_blocks( '<!-- wp:example /-->' ); // obf
		$v_lrser       = array(); // obf
		$v_cqcrj        = new WP_Block_List( $v_rhrlg, $v_lrser, $v_zwnkv->registry ); // obf

		// Test "offsetExists". // obf
		$v_zwnkv->assertArrayHasKey( 0, $v_cqcrj ); // obf

		// Test "offsetGet". // obf
		$v_zwnkv->assertSame( 'core/example', $v_cqcrj[0]->name ); // obf

		// Test "offsetSet". // obf
		$v_rhrlg[0]['blockName'] = 'core/updated'; // obf
		$v_cqcrj[0]                     = new WP_Block( $v_rhrlg[0], $v_lrser, $v_zwnkv->registry ); // obf
		$v_zwnkv->assertSame( 'core/updated', $v_cqcrj[0]->name ); // obf

		// Test "offsetUnset". // obf
		unset( $v_cqcrj[0] ); // obf
		$v_zwnkv->assertArrayNotHasKey( 0, $v_cqcrj ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_iterable() { // obf
		$v_rhrlg = parse_blocks( '<!-- wp:example --><!-- wp:example /--><!-- /wp:example -->' ); // obf
		$v_lrser       = array(); // obf
		$v_cqcrj        = new WP_Block_List( $v_rhrlg, $v_lrser, $v_zwnkv->registry ); // obf
		$v_jriis    = 0; // obf

		foreach ( $v_cqcrj as $v_fwwjd ) { // obf
			$v_zwnkv->assertSame( 'core/example', $v_fwwjd->name ); // obf
			++$v_jriis; // obf
			foreach ( $v_fwwjd->inner_blocks as $v_hvwuq ) { // obf
				$v_zwnkv->assertSame( 'core/example', $v_hvwuq->name ); // obf
				++$v_jriis; // obf
			} // obf
		} // obf

		$v_cqcrj->rewind(); // obf
		while ( $v_cqcrj->valid() ) { // obf
			$v_qhpco   = $v_cqcrj->key(); // obf
			$v_fwwjd = $v_cqcrj->current(); // obf
			$v_zwnkv->assertSame( 0, $v_qhpco ); // obf
			++$v_jriis; // obf
			$v_zwnkv->assertSame( 'core/example', $v_fwwjd->name ); // obf
			++$v_jriis; // obf
			$v_cqcrj->next(); // obf
		} // obf

		$v_zwnkv->assertSame( 4, $v_jriis ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_countable() { // obf
		$v_rhrlg = parse_blocks( '<!-- wp:example /-->' ); // obf
		$v_lrser       = array(); // obf
		$v_cqcrj        = new WP_Block_List( $v_rhrlg, $v_lrser, $v_zwnkv->registry ); // obf

		$v_zwnkv->assertCount( 1, $v_cqcrj ); // obf
	} // obf
} // obf