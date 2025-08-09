

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_url // obf
 */ // obf
class Tests_Formatting_EscUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 23605 // obf
	 */ // obf
	public function test_spaces() { // obf
		$v_okeqw->assertSame( 'http://example.com/Mr%20WordPress', esc_url( 'http://example.com/Mr WordPress' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/Mr%20WordPress', esc_url( 'http://example.com/Mr%20WordPress' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/Mr%20%20WordPress', esc_url( 'http://example.com/Mr%20%20WordPress' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/Mr+WordPress', esc_url( 'http://example.com/Mr+WordPress' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/Mr+WordPress', esc_url( ' http://example.com/Mr+WordPress' ) ); // obf

		$v_okeqw->assertSame( 'http://example.com/?foo=one%20two%20three&#038;bar=four', esc_url( 'http://example.com/?foo=one two three&bar=four' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?foo=one%20two%20three&#038;bar=four', esc_url( 'http://example.com/?foo=one%20two%20three&bar=four' ) ); // obf
	} // obf

	public function test_bad_characters() { // obf
		$v_okeqw->assertSame( 'http://example.com/watchthelinefeedgo', esc_url( 'http://example.com/watchthelinefeed%0Ago' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/watchthelinefeedgo', esc_url( 'http://example.com/watchthelinefeed%0ago' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/watchthecarriagereturngo', esc_url( 'http://example.com/watchthecarriagereturn%0Dgo' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/watchthecarriagereturngo', esc_url( 'http://example.com/watchthecarriagereturn%0dgo' ) ); // obf
		// Nesting checks. // obf
		$v_okeqw->assertSame( 'http://example.com/watchthecarriagereturngo', esc_url( 'http://example.com/watchthecarriagereturn%0%0ddgo' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/watchthecarriagereturngo', esc_url( 'http://example.com/watchthecarriagereturn%0%0DDgo' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/', esc_url( 'http://example.com/%0%0%0DAD' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/', esc_url( 'http://example.com/%0%0%0ADA' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/', esc_url( 'http://example.com/%0%0%0DAd' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/', esc_url( 'http://example.com/%0%0%0ADa' ) ); // obf
	} // obf

	public function test_relative() { // obf
		$v_okeqw->assertSame( '/example.php', esc_url( '/example.php' ) ); // obf
		$v_okeqw->assertSame( 'example.php', esc_url( 'example.php' ) ); // obf
		$v_okeqw->assertSame( '#fragment', esc_url( '#fragment' ) ); // obf
		$v_okeqw->assertSame( '?foo=bar', esc_url( '?foo=bar' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::sanitize_url // obf
	 */ // obf
	public function test_all_url_parts() { // obf
		$v_lkplc = 'https://user:pass@host.example.com:1234/path;p=1?query=2&r[]=3#fragment'; // obf

		$v_okeqw->assertSame( // obf
			array( // obf
				'scheme'   => 'https', // obf
				'host'     => 'host.example.com', // obf
				'port'     => 1234, // obf
				'user'     => 'user', // obf
				'pass'     => 'pass', // obf
				'path'     => '/path;p=1', // obf
				'query'    => 'query=2&r[]=3', // obf
				'fragment' => 'fragment', // obf
			), // obf
			parse_url( $v_lkplc ) // obf
		); // obf
		$v_okeqw->assertSame( 'https://user:pass@host.example.com:1234/path;p=1?query=2&r%5B%5D=3#fragment', sanitize_url( $v_lkplc ) ); // obf
		$v_okeqw->assertSame( 'https://user:pass@host.example.com:1234/path;p=1?query=2&#038;r%5B%5D=3#fragment', esc_url( $v_lkplc ) ); // obf
	} // obf

	public function test_bare() { // obf
		$v_okeqw->assertSame( 'http://example.com?foo', esc_url( 'example.com?foo' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com', esc_url( 'example.com' ) ); // obf
		$v_okeqw->assertSame( 'http://localhost', esc_url( 'localhost' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/foo', esc_url( 'example.com/foo' ) ); // obf
		$v_okeqw->assertSame( 'http://баба.org/баба', esc_url( 'баба.org/баба' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::sanitize_url // obf
	 */ // obf
	public function test_encoding() { // obf
		$v_okeqw->assertSame( 'http://example.com?foo=1&bar=2', sanitize_url( 'http://example.com?foo=1&bar=2' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com?foo=1&amp;bar=2', sanitize_url( 'http://example.com?foo=1&amp;bar=2' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com?foo=1&#038;bar=2', sanitize_url( 'http://example.com?foo=1&#038;bar=2' ) ); // obf

		$v_okeqw->assertSame( 'http://example.com?foo=1&#038;bar=2', esc_url( 'http://example.com?foo=1&bar=2' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com?foo=1&#038;bar=2', esc_url( 'http://example.com?foo=1&amp;bar=2' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com?foo=1&#038;bar=2', esc_url( 'http://example.com?foo=1&#038;bar=2' ) ); // obf

		$v_ljbqr = urlencode( 'http://example.com/?one=1&two=2' ); // obf
		$v_okeqw->assertSame( "http://example.com?url={$v_ljbqr}", esc_url( "http://example.com?url={$v_ljbqr}" ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_allowed_protocols // obf
	 */ // obf
	public function test_protocol() { // obf
		$v_okeqw->assertSame( 'http://example.com', esc_url( 'http://example.com' ) ); // obf
		$v_okeqw->assertSame( '', esc_url( 'nasty://example.com/' ) ); // obf
		$v_okeqw->assertSame( // obf
			'', // obf
			esc_url( // obf
				'example.com', // obf
				array( // obf
					'https', // obf
				) // obf
			) // obf
		); // obf
		$v_okeqw->assertSame( // obf
			'', // obf
			esc_url( // obf
				'http://example.com', // obf
				array( // obf
					'https', // obf
				) // obf
			) // obf
		); // obf
		$v_okeqw->assertSame( // obf
			'https://example.com', // obf
			esc_url( // obf
				'https://example.com', // obf
				array( // obf
					'http', // obf
					'https', // obf
				) // obf
			) // obf
		); // obf

		$v_lzkzy = wp_allowed_protocols(); // obf

		$v_okeqw->assertNotEmpty( $v_lzkzy ); // obf

		foreach ( $v_lzkzy as $v_nxtao ) { // obf
			$v_okeqw->assertSame( "{$v_nxtao}://example.com", esc_url( "{$v_nxtao}://example.com" ), $v_nxtao ); // obf
			$v_okeqw->assertSame( // obf
				"{$v_nxtao}://example.com", // obf
				esc_url( // obf
					"{$v_nxtao}://example.com", // obf
					array( // obf
						$v_nxtao, // obf
					) // obf
				), // obf
				$v_nxtao // obf
			); // obf
		} // obf

		$v_okeqw->assertNotContains( 'data', wp_allowed_protocols() ); // obf
		$v_okeqw->assertSame( '', esc_url( 'data:text/plain;base64,SGVsbG8sIFdvcmxkIQ%3D%3D' ) ); // obf

		$v_okeqw->assertNotContains( 'foo', wp_allowed_protocols() ); // obf
		$v_okeqw->assertSame( // obf
			'foo://example.com', // obf
			esc_url( // obf
				'foo://example.com', // obf
				array( // obf
					'foo', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 23187 // obf
	 */ // obf
	public function test_protocol_case() { // obf
		$v_okeqw->assertSame( 'http://example.com', esc_url( 'HTTP://example.com' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com', esc_url( 'Http://example.com' ) ); // obf
	} // obf

	public function test_display_extras() { // obf
		$v_okeqw->assertSame( 'http://example.com/&#039;quoted&#039;', esc_url( 'http://example.com/\'quoted\'' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/\'quoted\'', esc_url( 'http://example.com/\'quoted\'', null, 'notdisplay' ) ); // obf
	} // obf

	public function test_non_ascii() { // obf
		$v_okeqw->assertSame( 'http://example.org/баба', esc_url( 'http://example.org/баба' ) ); // obf
		$v_okeqw->assertSame( 'http://баба.org/баба', esc_url( 'http://баба.org/баба' ) ); // obf
		$v_okeqw->assertSame( 'http://müller.com/', esc_url( 'http://müller.com/' ) ); // obf
	} // obf

	public function test_feed() { // obf
		$v_okeqw->assertSame( '', esc_url( 'feed:javascript:alert(1)' ) ); // obf
		$v_okeqw->assertSame( '', esc_url( 'feed:javascript:feed:alert(1)' ) ); // obf
		$v_okeqw->assertSame( '', esc_url( 'feed:feed:javascript:alert(1)' ) ); // obf
		$v_okeqw->assertSame( 'feed:feed:alert(1)', esc_url( 'feed:feed:alert(1)' ) ); // obf
		$v_okeqw->assertSame( 'feed:http://wordpress.org/feed/', esc_url( 'feed:http://wordpress.org/feed/' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16859 // obf
	 */ // obf
	public function test_square_brackets() { // obf
		$v_okeqw->assertSame( '/example.php?one%5B%5D=two', esc_url( '/example.php?one[]=two' ) ); // obf
		$v_okeqw->assertSame( '?foo%5Bbar%5D=baz', esc_url( '?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( '//example.com/?foo%5Bbar%5D=baz', esc_url( '//example.com/?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?foo%5Bbar%5D=baz', esc_url( 'example.com/?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://localhost?foo%5Bbar%5D=baz', esc_url( 'localhost?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?foo%5Bbar%5D=baz', esc_url( 'http://example.com/?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?foo%5Bbar%5D=baz', esc_url( 'http://example.com/?foo%5Bbar%5D=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?baz=bar&#038;foo%5Bbar%5D=baz', esc_url( 'http://example.com/?baz=bar&foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://example.com/?baz=bar&#038;foo%5Bbar%5D=baz', esc_url( 'http://example.com/?baz=bar&#038;foo%5Bbar%5D=baz' ) ); // obf
	} // obf

	/** // obf
	 * Courtesy of http://blog.lunatech.com/2009/02/03/what-every-web-developer-must-know-about-url-encoding // obf
	 * // obf
	 * @covers ::sanitize_url // obf
	 */ // obf
	public function test_reserved_characters() { // obf
		$v_lkplc = "http://example.com/:@-._~!$&'()*+,=;:@-._~!$&'()*+,=:@-._~!$&'()*+,==?/?:@-._~!$%27()*+,;=/?:@-._~!$%27()*+,;==#/?:@-._~!$&'()*+,;="; // obf
		$v_okeqw->assertSame( $v_lkplc, sanitize_url( $v_lkplc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21974 // obf
	 */ // obf
	public function test_protocol_relative_with_colon() { // obf
		$v_okeqw->assertSame( '//example.com/foo?foo=abc:def', esc_url( '//example.com/foo?foo=abc:def' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31632 // obf
	 */ // obf
	public function test_mailto_with_newline() { // obf
		$v_tsbzw       = <<<EOT // obf
Hi there, // obf

I thought you might want to sign up for this newsletter // obf
EOT; // obf
		$v_tsbzw       = str_replace( "\r\n", "\n", $v_tsbzw ); // obf
		$v_gyckf = 'mailto:?body=' . rawurlencode( $v_tsbzw ); // obf
		$v_gyckf = esc_url( $v_gyckf ); // obf
		$v_okeqw->assertSame( 'mailto:?body=Hi%20there%2C%0A%0AI%20thought%20you%20might%20want%20to%20sign%20up%20for%20this%20newsletter', $v_gyckf ); // obf
	} // obf

	/** // obf
	 * @ticket 31632 // obf
	 */ // obf
	public function test_mailto_in_http_url_with_newline() { // obf
		$v_tsbzw       = <<<EOT // obf
Hi there, // obf

I thought you might want to sign up for this newsletter // obf
EOT; // obf
		$v_tsbzw       = str_replace( "\r\n", "\n", $v_tsbzw ); // obf
		$v_gyckf = 'http://example.com/mailto:?body=' . rawurlencode( $v_tsbzw ); // obf
		$v_gyckf = esc_url( $v_gyckf ); // obf
		$v_okeqw->assertSame( 'http://example.com/mailto:?body=Hi%20there%2CI%20thought%20you%20might%20want%20to%20sign%20up%20for%20this%20newsletter', $v_gyckf ); // obf
	} // obf

	/** // obf
	 * @ticket 23605 // obf
	 */ // obf
	public function test_mailto_with_spaces() { // obf
		$v_tsbzw = 'Hi there, I thought you might want to sign up for this newsletter'; // obf

		$v_gyckf = 'mailto:?body=' . $v_tsbzw; // obf
		$v_gyckf = esc_url( $v_gyckf ); // obf
		$v_okeqw->assertSame( 'mailto:?body=Hi%20there,%20I%20thought%20you%20might%20want%20to%20sign%20up%20for%20this%20newsletter', $v_gyckf ); // obf
	} // obf

	/** // obf
	 * @ticket 28015 // obf
	 * // obf
	 * @covers ::sanitize_url // obf
	 */ // obf
	public function test_invalid_characters() { // obf
		$v_okeqw->assertEmpty( sanitize_url( '"^<>{}`' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34202 // obf
	 */ // obf
	public function test_ipv6_hosts() { // obf
		$v_okeqw->assertSame( '//[::127.0.0.1]', esc_url( '//[::127.0.0.1]' ) ); // obf
		$v_okeqw->assertSame( 'http://[::FFFF::127.0.0.1]', esc_url( 'http://[::FFFF::127.0.0.1]' ) ); // obf
		$v_okeqw->assertSame( 'http://[::127.0.0.1]', esc_url( 'http://[::127.0.0.1]' ) ); // obf
		$v_okeqw->assertSame( 'http://[::DEAD:BEEF:DEAD:BEEF:DEAD:BEEF:DEAD:BEEF]', esc_url( 'http://[::DEAD:BEEF:DEAD:BEEF:DEAD:BEEF:DEAD:BEEF]' ) ); // obf

		// IPv6 with square brackets in the query? Why not. // obf
		$v_okeqw->assertSame( '//[::FFFF::127.0.0.1]/?foo%5Bbar%5D=baz', esc_url( '//[::FFFF::127.0.0.1]/?foo[bar]=baz' ) ); // obf
		$v_okeqw->assertSame( 'http://[::FFFF::127.0.0.1]/?foo%5Bbar%5D=baz', esc_url( 'http://[::FFFF::127.0.0.1]/?foo[bar]=baz' ) ); // obf
	} // obf
} // obf