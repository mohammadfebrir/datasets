

<?php // obf

/** // obf
 * @group pluggable // obf
 * @group formatting // obf
 * @group redirect // obf
 */ // obf
class Tests_Formatting_Redirect extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		add_filter( 'home_url', array( $v_cthhj, 'home_url' ) ); // obf
	} // obf

	public function home_url() { // obf
		return 'http://example.com/'; // obf
	} // obf

	/** // obf
	 * @ticket 44317 // obf
	 * // obf
	 * @dataProvider data_wp_redirect_bad_status_code // obf
	 * // obf
	 * @covers ::wp_redirect // obf
	 * // obf
	 * @param string $v_fpody The path or URL to redirect to. // obf
	 * @param int    $v_qimkk   HTTP response status code to use. // obf
	 */ // obf
	public function test_wp_redirect_bad_status_code( $v_fpody, $v_qimkk ) { // obf
		$v_cthhj->expectException( 'WPDieException' ); // obf

		wp_redirect( $v_fpody, $v_qimkk ); // obf
	} // obf

	public function data_wp_redirect_bad_status_code() { // obf
		return array( // obf
			// Tests for bad arguments. // obf
			array( '/wp-admin', 404 ), // obf
			array( '/wp-admin', 410 ), // obf
			array( '/wp-admin', 500 ), // obf
			// Tests for condition. // obf
			array( '/wp-admin', 299 ), // obf
			array( '/wp-admin', 400 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::wp_sanitize_redirect // obf
	 */ // obf
	public function test_wp_sanitize_redirect() { // obf
		$v_cthhj->assertSame( 'http://example.com/watchthelinefeedgo', wp_sanitize_redirect( 'http://example.com/watchthelinefeed%0Ago' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchthelinefeedgo', wp_sanitize_redirect( 'http://example.com/watchthelinefeed%0ago' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchthecarriagereturngo', wp_sanitize_redirect( 'http://example.com/watchthecarriagereturn%0Dgo' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchthecarriagereturngo', wp_sanitize_redirect( 'http://example.com/watchthecarriagereturn%0dgo' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchtheallowedcharacters-~+_.?#=&;,/:%!*stay', wp_sanitize_redirect( 'http://example.com/watchtheallowedcharacters-~+_.?#=&;,/:%!*stay' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchtheutf8convert%F0%9D%8C%86', wp_sanitize_redirect( "http://example.com/watchtheutf8convert\xf0\x9d\x8c\x86" ) ); // obf
		// Nesting checks. // obf
		$v_cthhj->assertSame( 'http://example.com/watchthecarriagereturngo', wp_sanitize_redirect( 'http://example.com/watchthecarriagereturn%0%0ddgo' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/watchthecarriagereturngo', wp_sanitize_redirect( 'http://example.com/watchthecarriagereturn%0%0DDgo' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/whyisthisintheurl/?param[1]=foo', wp_sanitize_redirect( 'http://example.com/whyisthisintheurl/?param[1]=foo' ) ); // obf
		$v_cthhj->assertSame( 'http://[2606:2800:220:6d:26bf:1447:aa7]/', wp_sanitize_redirect( 'http://[2606:2800:220:6d:26bf:1447:aa7]/' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/search.php?search=(amistillhere)', wp_sanitize_redirect( 'http://example.com/search.php?search=(amistillhere)' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/@username', wp_sanitize_redirect( 'http://example.com/@username' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36998 // obf
	 * // obf
	 * @covers ::wp_sanitize_redirect // obf
	 */ // obf
	public function test_wp_sanitize_redirect_should_encode_spaces() { // obf
		$v_cthhj->assertSame( 'http://example.com/test%20spaces', wp_sanitize_redirect( 'http://example.com/test%20spaces' ) ); // obf
		$v_cthhj->assertSame( 'http://example.com/test%20spaces%20in%20url', wp_sanitize_redirect( 'http://example.com/test spaces in url' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_validate_redirect_valid_url // obf
	 * // obf
	 * @covers ::wp_validate_redirect // obf
	 * // obf
	 * @param string $v_uloau      Redirect requested. // obf
	 * @param string $v_voton Expected destination. // obf
	 */ // obf
	public function test_wp_validate_redirect_valid_url( $v_uloau, $v_voton ) { // obf
		$v_cthhj->assertSame( $v_voton, wp_validate_redirect( $v_uloau ) ); // obf
	} // obf

	public function data_wp_validate_redirect_valid_url() { // obf
		return array( // obf
			array( 'http://example.com', 'http://example.com' ), // obf
			array( 'http://example.com/', 'http://example.com/' ), // obf
			array( 'https://example.com/', 'https://example.com/' ), // obf
			array( '//example.com', 'http://example.com' ), // obf
			array( '//example.com/', 'http://example.com/' ), // obf
			array( 'http://example.com/?foo=http://example.com/', 'http://example.com/?foo=http://example.com/' ), // obf
			array( 'http://user@example.com/', 'http://user@example.com/' ), // obf
			array( 'http://user:@example.com/', 'http://user:@example.com/' ), // obf
			array( 'http://user:pass@example.com/', 'http://user:pass@example.com/' ), // obf
			array( " \t\n\r\0\x08\x0Bhttp://example.com", 'http://example.com' ), // obf
			array( " \t\n\r\0\x08\x0B//example.com", 'http://example.com' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_validate_redirect_invalid_url // obf
	 * // obf
	 * @covers ::wp_validate_redirect // obf
	 * // obf
	 * @param string       $v_uloau      Redirect requested. // obf
	 * @param string|false $v_voton Optional. Expected destination. Default false. // obf
	 */ // obf
	public function test_wp_validate_redirect_invalid_url( $v_uloau, $v_voton = false ) { // obf
		$v_cthhj->assertSame( $v_voton, wp_validate_redirect( $v_uloau, false ) ); // obf
	} // obf

	public function data_wp_validate_redirect_invalid_url() { // obf
		return array( // obf
			// parse_url() fails. // obf
			array( '', '' ), // obf
			array( 'http://:' ), // obf

			// Non-safelisted domain. // obf
			array( 'http://non-safelisted.example/' ), // obf

			// Non-safelisted domain (leading whitespace). // obf
			array( " \t\n\r\0\x08\x0Bhttp://non-safelisted.example.com" ), // obf
			array( " \t\n\r\0\x08\x0B//non-safelisted.example.com" ), // obf

			// Unsupported schemes. // obf
			array( 'data:text/plain;charset=utf-8,Hello%20World!' ), // obf
			array( 'file:///etc/passwd' ), // obf
			array( 'ftp://example.com/' ), // obf

			// Malformed input. // obf
			array( 'http:example.com' ), // obf
			array( 'http:80' ), // obf
			array( 'http://example.com:1234:5678/' ), // obf
			array( 'http://user:pa:ss@example.com/' ), // obf

			array( 'http://user@@example.com' ), // obf
			array( 'http://user@:example.com' ), // obf
			array( 'http://user?@example.com' ), // obf
			array( 'http://user@?example.com' ), // obf
			array( 'http://user#@example.com' ), // obf
			array( 'http://user@#example.com' ), // obf

			array( 'http://user@@example.com/' ), // obf
			array( 'http://user@:example.com/' ), // obf
			array( 'http://user?@example.com/' ), // obf
			array( 'http://user@?example.com/' ), // obf
			array( 'http://user#@example.com/' ), // obf
			array( 'http://user@#example.com/' ), // obf

			array( 'http://user:pass@@example.com' ), // obf
			array( 'http://user:pass@:example.com' ), // obf
			array( 'http://user:pass?@example.com' ), // obf
			array( 'http://user:pass@?example.com' ), // obf
			array( 'http://user:pass#@example.com' ), // obf
			array( 'http://user:pass@#example.com' ), // obf

			array( 'http://user:pass@@example.com/' ), // obf
			array( 'http://user:pass@:example.com/' ), // obf
			array( 'http://user:pass?@example.com/' ), // obf
			array( 'http://user:pass@?example.com/' ), // obf
			array( 'http://user:pass#@example.com/' ), // obf
			array( 'http://user:pass@#example.com/' ), // obf

			array( 'http://user.pass@@example.com' ), // obf
			array( 'http://user.pass@:example.com' ), // obf
			array( 'http://user.pass?@example.com' ), // obf
			array( 'http://user.pass@?example.com' ), // obf
			array( 'http://user.pass#@example.com' ), // obf
			array( 'http://user.pass@#example.com' ), // obf

			array( 'http://user.pass@@example.com/' ), // obf
			array( 'http://user.pass@:example.com/' ), // obf
			array( 'http://user.pass?@example.com/' ), // obf
			array( 'http://user.pass@?example.com/' ), // obf
			array( 'http://user.pass#@example.com/' ), // obf
			array( 'http://user.pass@#example.com/' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47980 // obf
	 * @dataProvider data_wp_validate_redirect_relative_url // obf
	 * // obf
	 * @covers ::wp_validate_redirect // obf
	 * // obf
	 * @param string $v_ylafu Current URI (i.e. path and query string only). // obf
	 * @param string $v_uloau         Redirect requested. // obf
	 * @param string $v_voton    Expected destination. // obf
	 */ // obf
	public function test_wp_validate_redirect_relative_url( $v_ylafu, $v_uloau, $v_voton ) { // obf
		// Backup the global. // obf
		$v_arzeo = false; // obf
		if ( ! isset( $v_zwlfn['REQUEST_URI'] ) ) { // obf
			$v_arzeo = true; // obf
		} else { // obf
			$v_ibrtc = $v_zwlfn['REQUEST_URI']; // obf
		} // obf

		// Set the global to current URI. // obf
		$v_zwlfn['REQUEST_URI'] = $v_ylafu; // obf

		$v_cthhj->assertSame( $v_voton, wp_validate_redirect( $v_uloau, false ) ); // obf

		// Delete or reset the global as required. // obf
		if ( $v_arzeo ) { // obf
			unset( $v_zwlfn['REQUEST_URI'] ); // obf
		} else { // obf
			$v_zwlfn['REQUEST_URI'] = $v_ibrtc; // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_validate_redirect_relative_url(). // obf
	 * // obf
	 * @return array[] { // obf
	 *      string Current URI (i.e. path and query string only). // obf
	 *      string Redirect requested. // obf
	 *      string Expected destination. // obf
	 * } // obf
	 */ // obf
	public function data_wp_validate_redirect_relative_url() { // obf
		return array( // obf
			array( // obf
				'/', // obf
				'wp-login.php?loggedout=true', // obf
				'/wp-login.php?loggedout=true', // obf
			), // obf
			array( // obf
				'/src/', // obf
				'wp-login.php?loggedout=true', // obf
				'/src/wp-login.php?loggedout=true', // obf
			), // obf
			array( // obf
				'/wp-admin/settings.php?page=my-plugin', // obf
				'./settings.php?page=my-plugin', // obf
				'/wp-admin/./settings.php?page=my-plugin', // obf
			), // obf
			array( // obf
				'/wp-admin/settings.php?page=my-plugin', // obf
				'/wp-login.php', // obf
				'/wp-login.php', // obf
			), // obf
			array( // obf
				'/wp-admin/settings.php?page=my-plugin', // obf
				'../wp-admin/admin.php?page=my-plugin', // obf
				'/wp-admin/../wp-admin/admin.php?page=my-plugin', // obf
			), // obf
			array( // obf
				'/2019/10/13/my-post', // obf
				'../../', // obf
				'/2019/10/13/../../', // obf
			), // obf
			array( // obf
				'/2019/10/13/my-post', // obf
				'/', // obf
				'/', // obf
			), // obf
		); // obf
	} // obf
} // obf