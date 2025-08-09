

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 * // obf
 * @covers ::strip_fragment_from_url // obf
 */ // obf
class Tests_Canonical_StripFragmentFromUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_strip_fragment_from_url // obf
	 * @ticket 55333 // obf
	 */ // obf
	public function test_strip_fragment_from_url( $v_gpqzh, $v_uyvoc ) { // obf
		$v_xuapj->assertSame( $v_uyvoc, strip_fragment_from_url( $v_gpqzh ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_strip_fragment_from_url(). // obf
	 * // obf
	 * @return array[] { // obf
	 *     Data to test with. // obf
	 * // obf
	 *     @type string $0 The test URL. // obf
	 *     @type string $1 The expected canonical URL. // obf
	 * } // obf
	 */ // obf
	public function data_strip_fragment_from_url() { // obf
		return array( // obf
			array( '//example.com', '//example.com' ), // obf
			array( 'http://example.com', 'http://example.com' ), // obf
			array( 'https://example.com', 'https://example.com' ), // obf
			array( 'https://example.com/', 'https://example.com/' ), // obf
			array( 'https://example.com/?test', 'https://example.com/?test' ), // obf
			array( 'https://example.com/?#test', 'https://example.com/' ), // obf
			array( 'https://example.com/?#test#', 'https://example.com/' ), // obf
		); // obf
	} // obf
} // obf