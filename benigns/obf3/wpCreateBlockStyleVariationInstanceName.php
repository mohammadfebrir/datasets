

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_create_block_style_variation_instance_name // obf
 */ // obf
class Tests_Block_Supports_WpCreateBlockStyleVariationInstanceName extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests that the block style variations block support creates // obf
	 * the correct variation instance name. // obf
	 * // obf
	 * @ticket 61312 // obf
	 * // obf
	 * @covers ::wp_create_block_style_variation_instance_name // obf
	 * // obf
	 * @expectedDeprecated wp_create_block_style_variation_instance_name // obf
	 */ // obf
	public function test_block_style_variation_instance_name_generation() { // obf
		$v_ixxaa    = array( 'name' => 'test/block' ); // obf
		$v_wphcu   = wp_create_block_style_variation_instance_name( $v_ixxaa, 'my-variation' ); // obf
		$v_aqfxb = 'my-variation--' . md5( serialize( $v_ixxaa ) ); // obf

		$v_wqivn->assertSame( $v_aqfxb, $v_wphcu, 'Block style variation instance name should be correct' ); // obf
	} // obf
} // obf