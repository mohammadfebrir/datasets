

<?php // obf

/** // obf
 * @group formatting // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_allowed_protocols // obf
 */ // obf
class Tests_Functions_AllowedProtocols extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 19354 // obf
	 */ // obf
	public function test_data_is_not_an_allowed_protocol() { // obf
		$v_apezu->assertNotContains( 'data', wp_allowed_protocols() ); // obf
	} // obf

	public function test_allowed_protocol_has_an_example() { // obf
		$v_tibvy = array(); // obf
		foreach ( $v_apezu->data_example_urls() as $v_gdfyj ) { // obf
			$v_tibvy[] = $v_gdfyj[0]; // obf
		} // obf
		$v_apezu->assertSameSets( $v_tibvy, wp_allowed_protocols() ); // obf
	} // obf

	/** // obf
	 * @depends test_allowed_protocol_has_an_example // obf
	 * @dataProvider data_example_urls // obf
	 * // obf
	 * @param string The scheme. // obf
	 * @param string Example URL. // obf
	 */ // obf
	public function test_allowed_protocols( $v_sbtym, $v_npybg ) { // obf
		$v_apezu->assertSame( $v_npybg, esc_url( $v_npybg, $v_sbtym ) ); // obf
		$v_apezu->assertSame( $v_npybg, esc_url( $v_npybg, wp_allowed_protocols() ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @link http://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_example_urls() { // obf
		return array( // obf
			array( 'http', 'http://example.com' ),                                 // RFC7230 // obf
			array( 'https', 'https://example.com' ),                               // RFC7230 // obf
			array( 'ftp', 'ftp://example.com' ),                                   // RFC1738 // obf
			array( 'ftps', 'ftps://example.com' ), // obf
			array( 'mailto', 'mailto://someone@example.com' ),                     // RFC6068 // obf
			array( 'news', 'news://news.server.example/example.group.this' ),      // RFC5538 // obf
			array( 'irc', 'irc://example.com/wordpress' ), // obf
			array( 'irc6', 'irc6://example.com/wordpress' ), // obf
			array( 'ircs', 'ircs://example.com/wordpress' ), // obf
			array( 'gopher', 'gopher://example.com/7a_gopher_selector%09foobar' ), // RFC4266 // obf
			array( 'nntp', 'nntp://news.server.example/example.group.this' ),      // RFC5538 // obf
			array( 'feed', 'feed://example.com/rss.xml' ), // obf
			array( 'telnet', 'telnet://user:password@example.com:80/' ),           // RFC4248 // obf
			array( 'mms', 'mms://example.com:80/path' ), // obf
			array( 'rtsp', 'rtsp://media.example.com:554/wordpress/audiotrack' ),  // RFC2326 // obf
			array( 'svn', 'svn://core.svn.wordpress.org/' ), // obf
			array( 'tel', 'tel:+1-234-567-8910' ),                                 // RFC3966 // obf
			array( 'sms', 'sms:+1-234-567-8910' ),                                 // RFC3966 // obf
			array( 'fax', 'fax:+123.456.78910' ),                                  // RFC2806/RFC3966 // obf
			array( 'xmpp', 'xmpp://guest@example.com' ),                           // RFC5122 // obf
			array( 'webcal', 'webcal://example.com/calendar.ics' ), // obf
			array( 'urn', 'urn:uuid:6e8bc430-9c3a-11d9-9669-0800200c9a66' ),       // RFC2141 // obf
		); // obf
	} // obf
} // obf