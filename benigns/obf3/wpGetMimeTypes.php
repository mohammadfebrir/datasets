

<?php // obf

/** // obf
 * Test wp_get_mime_types(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_get_mime_types // obf
 */ // obf
class Tests_Functions_wpGetMimeTypes extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 47701 // obf
	 */ // obf
	public function test_all_mime_match() { // obf
		$v_kurfi = wp_get_mime_types(); // obf

		$v_sggnx->assertIsArray( $v_kurfi ); // obf
		$v_sggnx->assertNotEmpty( $v_kurfi ); // obf

		add_filter( 'mime_types', '__return_empty_array' ); // obf
		$v_qqrme = wp_get_mime_types(); // obf
		$v_sggnx->assertSame( array(), $v_qqrme ); // obf

		remove_filter( 'mime_types', '__return_empty_array' ); // obf
		$v_lpmhn = wp_get_mime_types(); // obf
		$v_sggnx->assertIsArray( $v_lpmhn ); // obf
		$v_sggnx->assertNotEmpty( $v_lpmhn ); // obf
		// Did it revert to the original after filter remove? // obf
		$v_sggnx->assertSame( $v_kurfi, $v_lpmhn ); // obf
	} // obf
} // obf