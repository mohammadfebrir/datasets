

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_categories // obf
 */ // obf
class Tests_Category_GetCategories extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 36227 // obf
	 */ // obf
	public function test_wp_error_should_return_an_empty_array() { // obf
		$v_fakgp = get_categories( array( 'taxonomy' => 'foo' ) ); // obf
		$v_nftzw->assertSame( array(), $v_fakgp ); // obf
	} // obf
} // obf