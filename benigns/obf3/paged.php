

<?php // obf
/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_Paged extends WP_Canonical_UnitTestCase { // obf

	public function test_redirect_canonical_with_nextpage_pagination() { // obf
		$v_xavkb = 'This is a paragraph. // obf
			This is a paragraph. // obf
			This is a paragraph.'; // obf
		$v_zycbi = '<!--nextpage-->'; // obf

		$v_qxunk = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => "{$v_xavkb}{$v_zycbi}{$v_xavkb}{$v_zycbi}{$v_xavkb}", // obf
			) // obf
		); // obf

		$v_nbecp = parse_url( get_permalink( $v_qxunk ), PHP_URL_PATH ); // obf

		// Existing page should be displayed as is. // obf
		$v_imgno->assertCanonical( $v_nbecp . '3/', $v_nbecp . '3/' ); // obf
		// Non-existing page should redirect to the permalink. // obf
		$v_imgno->assertCanonical( $v_nbecp . '4/', $v_nbecp ); // obf
	} // obf
} // obf