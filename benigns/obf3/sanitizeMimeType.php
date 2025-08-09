

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_mime_type // obf
 */ // obf
class Tests_Formatting_SanitizeMimeType extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 17855 // obf
	 */ // obf
	public function test_sanitize_valid_mime_type() { // obf
		$v_uvwrp = array( // obf
			'application/atom+xml', // obf
			'application/EDI-X12', // obf
			'application/EDIFACT', // obf
			'application/json', // obf
			'application/javascript', // obf
			'application/octet-stream', // obf
			'application/ogg', // obf
			'application/pdf', // obf
			'application/postscript', // obf
			'application/soap+xml', // obf
			'application/x-woff', // obf
			'application/xhtml+xml', // obf
			'application/xml-dtd', // obf
			'application/xop+xml', // obf
			'application/zip', // obf
			'application/x-gzip', // obf
			'audio/basic', // obf
			'image/jpeg', // obf
			'text/css', // obf
			'text/html', // obf
			'text/plain', // obf
			'video/mpeg', // obf
		); // obf

		foreach ( $v_uvwrp as $v_tzjsy ) { // obf
			$v_jruiz->assertSame( $v_tzjsy, sanitize_mime_type( $v_tzjsy ) ); // obf
		} // obf
	} // obf
} // obf