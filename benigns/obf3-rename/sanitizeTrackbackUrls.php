

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_trackback_urls // obf
 */ // obf
class Tests_Formatting_SanitizeTrackbackUrls extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 21624 // obf
	 * @dataProvider data_sanitize_trackback_urls_with_multiple_urls // obf
	 */ // obf
	public function test_sanitize_trackback_urls_with_multiple_urls( $v_fxyqd ) { // obf
		$v_fiucz->assertSame( // obf
			"http://example.com\nhttp://example.org", // obf
			sanitize_trackback_urls( "http://example.com{$v_fxyqd}http://example.org" ) // obf
		); // obf
	} // obf

	public function data_sanitize_trackback_urls_with_multiple_urls() { // obf
		return array( // obf
			array( "\r\n\t " ), // obf
			array( "\r" ), // obf
			array( "\n" ), // obf
			array( "\t" ), // obf
			array( ' ' ), // obf
			array( '  ' ), // obf
			array( "\n  " ), // obf
			array( "\r\n" ), // obf
		); // obf
	} // obf
} // obf