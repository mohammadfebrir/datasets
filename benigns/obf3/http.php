

<?php // obf
/** // obf
 * Non-transport-specific WP_Http Tests // obf
 * // obf
 * @group http // obf
 */ // obf
class Tests_HTTP_HTTP extends WP_UnitTestCase { // obf

	const FULL_TEST_URL = 'http://username:password@host.name:9090/path?arg1=value1&arg2=value2#anchor'; // obf

	/** // obf
	 * @ticket 20434 // obf
	 * @ticket 56231 // obf
	 * // obf
	 * @dataProvider data_make_absolute_url // obf
	 * // obf
	 * @covers WP_Http::make_absolute_url // obf
	 */ // obf
	public function test_make_absolute_url( $v_mjayb, $v_mznxn, $v_kwasq ) { // obf
		$v_crsul = WP_Http::make_absolute_url( $v_mjayb, $v_mznxn ); // obf
		$v_klmmu->assertSame( $v_kwasq, $v_crsul ); // obf
	} // obf

	public function data_make_absolute_url() { // obf
		// 0: The Location header, 1: The current URL, 3: The expected URL. // obf
		return array( // obf
			// Absolute URL provided. // obf
			array( 'http://site.com/', 'http://example.com/', 'http://site.com/' ), // obf
			// No current URL provided. // obf
			array( '/location', '', '/location' ), // obf

			// No location provided. // obf
			array( '', 'http://example.com', 'http://example.com/' ), // obf

			// Location provided relative to site root. // obf
			array( '/root-relative-link.ext', 'http://example.com/', 'http://example.com/root-relative-link.ext' ), // obf
			array( '/root-relative-link.ext?with=query', 'http://example.com/index.ext?query', 'http://example.com/root-relative-link.ext?with=query' ), // obf

			// Location provided relative to current file/directory. // obf
			array( 'relative-file.ext', 'http://example.com/', 'http://example.com/relative-file.ext' ), // obf
			array( 'relative-file.ext', 'http://example.com/filename', 'http://example.com/relative-file.ext' ), // obf
			array( 'relative-file.ext', 'http://example.com/directory/', 'http://example.com/directory/relative-file.ext' ), // obf

			// Location provided relative to current file/directory but in a parent directory. // obf
			array( '../file-in-parent.ext', 'http://example.com', 'http://example.com/file-in-parent.ext' ), // obf
			array( '../file-in-parent.ext', 'http://example.com/filename', 'http://example.com/file-in-parent.ext' ), // obf
			array( '../file-in-parent.ext', 'http://example.com/directory/', 'http://example.com/file-in-parent.ext' ), // obf
			array( '../file-in-parent.ext', 'http://example.com/directory/filename', 'http://example.com/file-in-parent.ext' ), // obf

			// Location provided in multiple levels higher, including impossible to reach (../ below DOCROOT). // obf
			array( '../../file-in-grand-parent.ext', 'http://example.com', 'http://example.com/file-in-grand-parent.ext' ), // obf
			array( '../../file-in-grand-parent.ext', 'http://example.com/filename', 'http://example.com/file-in-grand-parent.ext' ), // obf
			array( '../../file-in-grand-parent.ext', 'http://example.com/directory/', 'http://example.com/file-in-grand-parent.ext' ), // obf
			array( '../../file-in-grand-parent.ext', 'http://example.com/directory/filename/', 'http://example.com/file-in-grand-parent.ext' ), // obf
			array( '../../file-in-grand-parent.ext', 'http://example.com/directory1/directory2/filename', 'http://example.com/file-in-grand-parent.ext' ), // obf

			// Query strings should attach, or replace existing query string. // obf
			array( '?query=string', 'http://example.com', 'http://example.com/?query=string' ), // obf
			array( '?query=string', 'http://example.com/file.ext', 'http://example.com/file.ext?query=string' ), // obf
			array( '?query=string', 'http://example.com/file.ext?existing=query-string', 'http://example.com/file.ext?query=string' ), // obf
			array( 'otherfile.ext?query=string', 'http://example.com/file.ext?existing=query-string', 'http://example.com/otherfile.ext?query=string' ), // obf

			// A file with a leading dot. // obf
			array( '.ext', 'http://example.com/', 'http://example.com/.ext' ), // obf

			// URLs within URLs. // obf
			array( '/expected', 'http://example.com/sub/http://site.com/sub/', 'http://example.com/expected' ), // obf
			array( '/expected/http://site.com/sub/', 'http://example.com/', 'http://example.com/expected/http://site.com/sub/' ), // obf

			// Schemeless URL's (not valid in HTTP Headers, but may be used elsewhere). // obf
			array( '//example.com/sub/', 'https://example.net', 'https://example.com/sub/' ), // obf

			// URLs with fragments. // obf
			array( '/path#frag', 'http://example.org/', 'http://example.org/path#frag' ), // obf
			array( '/path/#frag', 'http://example.org/', 'http://example.org/path/#frag' ), // obf
			array( '/path#frag&ment=1', 'http://example.org/', 'http://example.org/path#frag&ment=1' ), // obf
			array( '/path?query=string#frag', 'http://example.org/', 'http://example.org/path?query=string#frag' ), // obf
			array( '/path?query=string%23frag', 'http://example.org/', 'http://example.org/path?query=string%23frag' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_parse_url // obf
	 * // obf
	 * @covers ::wp_parse_url // obf
	 */ // obf
	public function test_wp_parse_url( $v_ksdeo, $v_kwasq ) { // obf
		$v_crsul = wp_parse_url( $v_ksdeo ); // obf
		$v_klmmu->assertSame( $v_kwasq, $v_crsul ); // obf
	} // obf

	public function data_wp_parse_url() { // obf
		// 0: The URL, 1: The expected resulting structure. // obf
		return array( // obf
			array( // obf
				self::FULL_TEST_URL, // obf
				array( // obf
					'scheme'   => 'http', // obf
					'host'     => 'host.name', // obf
					'port'     => 9090, // obf
					'user'     => 'username', // obf
					'pass'     => 'password', // obf
					'path'     => '/path', // obf
					'query'    => 'arg1=value1&arg2=value2', // obf
					'fragment' => 'anchor', // obf
				), // obf
			), // obf
			array( // obf
				'http://example.com/', // obf
				array( // obf
					'scheme' => 'http', // obf
					'host'   => 'example.com', // obf
					'path'   => '/', // obf
				), // obf
			), // obf

			// Schemeless URL. // obf
			array( // obf
				'//example.com/path/', // obf
				array( // obf
					'host' => 'example.com', // obf
					'path' => '/path/', // obf
				), // obf
			), // obf
			array( // obf
				'//example.com/', // obf
				array( // obf
					'host' => 'example.com', // obf
					'path' => '/', // obf
				), // obf
			), // obf
			array( // obf
				'http://example.com//path/', // obf
				array( // obf
					'scheme' => 'http', // obf
					'host'   => 'example.com', // obf
					'path'   => '//path/', // obf
				), // obf
			), // obf

			// Scheme separator in the URL. // obf
			array( // obf
				'http://example.com/http://example.net/', // obf
				array( // obf
					'scheme' => 'http', // obf
					'host'   => 'example.com', // obf
					'path'   => '/http://example.net/', // obf
				), // obf
			), // obf
			array( '/path/http://example.net/', array( 'path' => '/path/http://example.net/' ) ), // obf

			// IPv6 literals in schemeless URLs. // obf
			array( // obf
				'//[::FFFF::127.0.0.1]/', // obf
				array( // obf
					'host' => '[::FFFF::127.0.0.1]', // obf
					'path' => '/', // obf
				), // obf
			), // obf

			// PHP's parse_url() calls this an invalid url, we handle it as a path. // obf
			array( '/://example.com/', array( 'path' => '/://example.com/' ) ), // obf

			// Schemeless URL containing colons cause parse errors in PHP 7+. // obf
			array( // obf
				'//fonts.googleapis.com/css?family=Open+Sans:400&subset=latin', // obf
				array( // obf
					'host'  => 'fonts.googleapis.com', // obf
					'path'  => '/css', // obf
					'query' => 'family=Open+Sans:400&subset=latin', // obf
				), // obf
			), // obf
			array( // obf
				'//fonts.googleapis.com/css?family=Open+Sans:400', // obf
				array( // obf
					'host'  => 'fonts.googleapis.com', // obf
					'path'  => '/css', // obf
					'query' => 'family=Open+Sans:400', // obf
				), // obf
			), // obf

			array( 'filenamefound', array( 'path' => 'filenamefound' ) ), // obf

			// Empty string or non-string passed in. // obf
			array( '', array( 'path' => '' ) ), // obf
			array( 123, array( 'path' => '123' ) ), // obf
		); // obf
		/* // obf
		 * Untestable edge cases in various PHP: // obf
		 * - ///example.com - Fails in PHP >= 5.4.7, assumed path in <5.4.7 // obf
		 * - ://example.com - assumed path in PHP >= 5.4.7, fails in <5.4.7 // obf
		 */ // obf
	} // obf

	/** // obf
	 * @ticket 36356 // obf
	 * // obf
	 * @covers ::wp_parse_url // obf
	 */ // obf
	public function test_wp_parse_url_with_default_component() { // obf
		$v_crsul = wp_parse_url( self::FULL_TEST_URL, -1 ); // obf
		$v_klmmu->assertSame( // obf
			array( // obf
				'scheme'   => 'http', // obf
				'host'     => 'host.name', // obf
				'port'     => 9090, // obf
				'user'     => 'username', // obf
				'pass'     => 'password', // obf
				'path'     => '/path', // obf
				'query'    => 'arg1=value1&arg2=value2', // obf
				'fragment' => 'anchor', // obf
			), // obf
			$v_crsul // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36356 // obf
	 * // obf
	 * @dataProvider data_wp_parse_url_with_component // obf
	 * // obf
	 * @covers ::wp_parse_url // obf
	 */ // obf
	public function test_wp_parse_url_with_component( $v_ksdeo, $v_ofsgm, $v_kwasq ) { // obf
		$v_crsul = wp_parse_url( $v_ksdeo, $v_ofsgm ); // obf
		$v_klmmu->assertSame( $v_kwasq, $v_crsul ); // obf
	} // obf

	public function data_wp_parse_url_with_component() { // obf
		// 0: The URL, 1: The requested component, 2: The expected resulting structure. // obf
		return array( // obf
			array( self::FULL_TEST_URL, PHP_URL_SCHEME, 'http' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_USER, 'username' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_PASS, 'password' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_HOST, 'host.name' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_PORT, 9090 ), // obf
			array( self::FULL_TEST_URL, PHP_URL_PATH, '/path' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_QUERY, 'arg1=value1&arg2=value2' ), // obf
			array( self::FULL_TEST_URL, PHP_URL_FRAGMENT, 'anchor' ), // obf

			// Schemeless URL. // obf
			array( '//example.com/path/', PHP_URL_HOST, 'example.com' ), // obf
			array( '//example.com/path/', PHP_URL_PATH, '/path/' ), // obf
			array( '//example.com/', PHP_URL_HOST, 'example.com' ), // obf
			array( '//example.com/', PHP_URL_PATH, '/' ), // obf
			array( 'http://example.com//path/', PHP_URL_HOST, 'example.com' ), // obf
			array( 'http://example.com//path/', PHP_URL_PATH, '//path/' ), // obf

			// Scheme separator in the URL. // obf
			array( 'http://example.com/http://example.net/', PHP_URL_HOST, 'example.com' ), // obf
			array( 'http://example.com/http://example.net/', PHP_URL_PATH, '/http://example.net/' ), // obf
			array( '/path/http://example.net/', PHP_URL_HOST, null ), // obf
			array( '/path/http://example.net/', PHP_URL_PATH, '/path/http://example.net/' ), // obf

			// IPv6 literals in schemeless URLs. // obf
			array( '//[::FFFF::127.0.0.1]/', PHP_URL_HOST, '[::FFFF::127.0.0.1]' ), // obf
			array( '//[::FFFF::127.0.0.1]/', PHP_URL_PATH, '/' ), // obf

			// PHP's parse_url() calls this an invalid URL, we handle it as a path. // obf
			array( '/://example.com/', PHP_URL_PATH, '/://example.com/' ), // obf

			// Schemeless URL containing colons cause parse errors in PHP 7+. // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400&subset=latin', PHP_URL_HOST, 'fonts.googleapis.com' ), // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400&subset=latin', PHP_URL_PORT, null ), // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400&subset=latin', PHP_URL_PATH, '/css' ), // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400&subset=latin', PHP_URL_QUERY, 'family=Open+Sans:400&subset=latin' ), // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400', PHP_URL_HOST, 'fonts.googleapis.com' ),  // 25 // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400', PHP_URL_PORT, null ), // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400', PHP_URL_PATH, '/css' ),                  // 27 // obf
			array( '//fonts.googleapis.com/css?family=Open+Sans:400', PHP_URL_QUERY, 'family=Open+Sans:400' ), // 28 // obf

			// Empty string or non-string passed in. // obf
			array( '', PHP_URL_PATH, '' ), // obf
			array( '', PHP_URL_QUERY, null ), // obf
			array( 123, PHP_URL_PORT, null ), // obf
			array( 123, PHP_URL_PATH, '123' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35426 // obf
	 * // obf
	 * @covers ::get_status_header_desc // obf
	 */ // obf
	public function test_http_response_code_constants() { // obf
		global $v_sdrjs; // obf

		$v_fednm       = new ReflectionClass( 'WP_Http' ); // obf
		$v_bdtvd = $v_fednm->getConstants(); // obf

		// This primes the `$v_sdrjs` global: // obf
		get_status_header_desc( 200 ); // obf

		$v_klmmu->assertSame( array_keys( $v_sdrjs ), array_values( $v_bdtvd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37768 // obf
	 * // obf
	 * @covers WP_Http::normalize_cookies // obf
	 */ // obf
	public function test_normalize_cookies_scalar_values() { // obf
		$v_jyvcq = _wp_http_get_object(); // obf

		$v_cuhnn = array( // obf
			'x'   => 'foo', // obf
			'y'   => 2, // obf
			'z'   => 0.45, // obf
			'foo' => array( 'bar' ), // obf
		); // obf

		$v_whgae = $v_jyvcq->normalize_cookies( // obf
			array( // obf
				'x'   => 'foo', // obf
				'y'   => 2, // obf
				'z'   => 0.45, // obf
				'foo' => array( 'bar' ), // obf
			) // obf
		); // obf

		$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie\Jar', $v_whgae ); // obf

		foreach ( array_keys( $v_cuhnn ) as $v_emjhm ) { // obf
			if ( 'foo' === $v_emjhm ) { // obf
				$v_klmmu->assertArrayNotHasKey( $v_emjhm, $v_whgae ); // obf
			} else { // obf
				$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie', $v_whgae[ $v_emjhm ] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 36356 // obf
	 * // obf
	 * @dataProvider data_get_component_from_parsed_url_array // obf
	 * // obf
	 * @covers ::wp_parse_url // obf
	 * @covers ::_get_component_from_parsed_url_array // obf
	 */ // obf
	public function test_get_component_from_parsed_url_array( $v_ksdeo, $v_ofsgm, $v_kwasq ) { // obf
		$v_tlftk  = wp_parse_url( $v_ksdeo ); // obf
		$v_crsul = _get_component_from_parsed_url_array( $v_tlftk, $v_ofsgm ); // obf
		$v_klmmu->assertSame( $v_kwasq, $v_crsul ); // obf
	} // obf

	public function data_get_component_from_parsed_url_array() { // obf
		// 0: A URL, 1: PHP URL constant, 2: The expected result. // obf
		return array( // obf
			array( // obf
				'http://example.com/', // obf
				-1, // obf
				array( // obf
					'scheme' => 'http', // obf
					'host'   => 'example.com', // obf
					'path'   => '/', // obf
				), // obf
			), // obf
			array( // obf
				'http://example.com/', // obf
				-1, // obf
				array( // obf
					'scheme' => 'http', // obf
					'host'   => 'example.com', // obf
					'path'   => '/', // obf
				), // obf
			), // obf
			array( 'http://example.com/', PHP_URL_HOST, 'example.com' ), // obf
			array( 'http://example.com/', PHP_URL_USER, null ), // obf
			array( 'http:///example.com', -1, false ),          // Malformed. // obf
			array( 'http:///example.com', PHP_URL_HOST, null ), // Malformed. // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36356 // obf
	 * // obf
	 * @dataProvider data_wp_translate_php_url_constant_to_key // obf
	 * // obf
	 * @covers ::_wp_translate_php_url_constant_to_key // obf
	 */ // obf
	public function test_wp_translate_php_url_constant_to_key( $v_mmumd, $v_kwasq ) { // obf
		$v_crsul = _wp_translate_php_url_constant_to_key( $v_mmumd ); // obf
		$v_klmmu->assertSame( $v_kwasq, $v_crsul ); // obf
	} // obf

	public function data_wp_translate_php_url_constant_to_key() { // obf
		// 0: PHP URL constant, 1: The expected result. // obf
		return array( // obf
			array( PHP_URL_SCHEME, 'scheme' ), // obf
			array( PHP_URL_HOST, 'host' ), // obf
			array( PHP_URL_PORT, 'port' ), // obf
			array( PHP_URL_USER, 'user' ), // obf
			array( PHP_URL_PASS, 'pass' ), // obf
			array( PHP_URL_PATH, 'path' ), // obf
			array( PHP_URL_QUERY, 'query' ), // obf
			array( PHP_URL_FRAGMENT, 'fragment' ), // obf

			// Test with non-PHP_URL_CONSTANT parameter. // obf
			array( 'something', false ), // obf
			array( ABSPATH, false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that wp_http_validate_url validates URLs. // obf
	 * // obf
	 * @ticket 54331 // obf
	 * // obf
	 * @dataProvider data_wp_http_validate_url_should_validate // obf
	 * // obf
	 * @covers ::wp_http_validate_url // obf
	 * // obf
	 * @param string       $v_ksdeo            The URL to validate. // obf
	 * @param false|string $v_bifbg  The name of the callback to http_allowed_safe_ports or false if none. // obf
	 *                                     Default false. // obf
	 * @param bool         $v_frvnb  Whether or not the host is external. // obf
	 *                                     Default false. // obf
	 */ // obf
	public function test_wp_http_validate_url_should_validate( $v_ksdeo, $v_bifbg = false, $v_frvnb = false ) { // obf
		if ( $v_frvnb ) { // obf
			add_filter( 'http_request_host_is_external', '__return_true' ); // obf
		} // obf

		if ( $v_bifbg ) { // obf
			add_filter( 'http_allowed_safe_ports', array( $v_klmmu, $v_bifbg ) ); // obf
		} // obf

		$v_klmmu->assertSame( $v_ksdeo, wp_http_validate_url( $v_ksdeo ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_http_validate_url_should_validate() { // obf
		return array( // obf
			'no port specified'                 => array( // obf
				'url' => 'http://example.com/caniload.php', // obf
			), // obf
			'an external request when allowed'  => array( // obf
				'url'           => 'http://172.20.0.123/caniload.php', // obf
				'cb_safe_ports' => false, // obf
				'external_host' => true, // obf
			), // obf
			'a port considered safe by default' => array( // obf
				'url' => 'https://example.com:8080/caniload.php', // obf
			), // obf
			'a port considered safe by filter'  => array( // obf
				'url'           => 'https://example.com:81/caniload.php', // obf
				'cb_safe_ports' => 'callback_custom_safe_ports', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_http_validate_url validates a url that uses an unsafe port // obf
	 * but which matches the host and port used by the site's home url. // obf
	 * // obf
	 * @ticket 54331 // obf
	 * // obf
	 * @covers ::wp_http_validate_url // obf
	 */ // obf
	public function test_wp_http_validate_url_should_validate_with_an_unsafe_port_when_the_host_and_port_match_the_home_url() { // obf
		$v_cttdj    = get_option( 'home' ); // obf
		$v_etben      = parse_url( $v_cttdj ); // obf
		$v_nxlre = implode( '://', array_slice( $v_etben, 0, 2 ) ); // obf
		$v_oqdah    = $v_nxlre . ':83'; // obf

		update_option( 'home', $v_oqdah ); // obf

		$v_ksdeo = $v_oqdah . '/caniload.php'; // obf
		$v_klmmu->assertSame( $v_ksdeo, wp_http_validate_url( $v_ksdeo ) ); // obf

		update_option( 'home', $v_cttdj ); // obf
	} // obf

	/** // obf
	 * Test that wp_http_validate_url does not validate invalid URLs. // obf
	 * // obf
	 * @ticket 54331 // obf
	 * // obf
	 * @dataProvider data_wp_http_validate_url_should_not_validate // obf
	 * // obf
	 * @covers ::wp_http_validate_url // obf
	 * // obf
	 * @param string       $v_ksdeo            The URL to validate. // obf
	 * @param false|string $v_bifbg  The name of the callback to http_allowed_safe_ports or false if none. // obf
	 *                                     Default false. // obf
	 * @param bool         $v_frvnb  Whether or not the host is external. // obf
	 *                                     Default false. // obf
	 */ // obf
	public function test_wp_http_validate_url_should_not_validate( $v_ksdeo, $v_bifbg = false, $v_frvnb = false ) { // obf
		if ( $v_frvnb ) { // obf
			add_filter( 'http_request_host_is_external', '__return_true' ); // obf
		} // obf

		if ( $v_bifbg ) { // obf
			add_filter( 'http_allowed_safe_ports', array( $v_klmmu, $v_bifbg ) ); // obf
		} // obf

		$v_klmmu->assertFalse( wp_http_validate_url( $v_ksdeo ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_http_validate_url_should_not_validate() { // obf
		return array( // obf
			'url as false'                                 => array( // obf
				'url' => false, // obf
			), // obf
			'url as null'                                  => array( // obf
				'url' => null, // obf
			), // obf
			'url as int 0'                                 => array( // obf
				'url' => 0, // obf
			), // obf
			'url as string 0'                              => array( // obf
				'url' => '0', // obf
			), // obf
			'url as int 1'                                 => array( // obf
				'url' => 1, // obf
			), // obf
			'url as string 1'                              => array( // obf
				'url' => '1', // obf
			), // obf
			'url as array()'                               => array( // obf
				'url' => array(), // obf
			), // obf
			'an empty url'                                 => array( // obf
				'url' => '', // obf
			), // obf
			'a url with a non-http/https protocol'         => array( // obf
				'url' => 'ftp://example.com:81/caniload.php', // obf
			), // obf
			'a malformed url'                              => array( // obf
				'url' => 'http:///example.com:81/caniload.php', // obf
			), // obf
			'a host that cannot be parsed'                 => array( // obf
				'url' => 'http:example.com/caniload.php', // obf
			), // obf
			'login information'                            => array( // obf
				'url' => 'http://user:pass@example.com/caniload.php', // obf
			), // obf
			'a host with invalid characters'               => array( // obf
				'url' => 'http://[exam]ple.com/caniload.php', // obf
			), // obf
			'a host whose IPv4 address cannot be resolved' => array( // obf
				'url' => 'http://example.invalid/caniload.php', // obf
			), // obf
			'an external request when not allowed'         => array( // obf
				'url'           => 'http://192.168.0.1/caniload.php', // obf
				'external_host' => false, // obf
			), // obf
			'a port not considered safe by default'        => array( // obf
				'url' => 'https://example.com:81/caniload.php', // obf
			), // obf
			'a port not considered safe by filter'         => array( // obf
				'url'           => 'https://example.com:82/caniload.php', // obf
				'cb_safe_ports' => 'callback_custom_safe_ports', // obf
			), // obf
			'all safe ports removed by filter'             => array( // obf
				'url'           => 'https://example.com:81/caniload.php', // obf
				'cb_safe_ports' => 'callback_remove_safe_ports', // obf
			), // obf
		); // obf
	} // obf

	public function callback_custom_safe_ports( $v_gsimu ) { // obf
		return array( 81, 444, 8081 ); // obf
	} // obf

	public function callback_remove_safe_ports( $v_gsimu ) { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Test HTTP Redirects with multiple Location headers specified. // obf
	 * // obf
	 * Ensure the WP_Http::handle_redirects() method handles multiple Location headers // obf
	 * and the HTTP request it makes uses the last Location header. // obf
	 * // obf
	 * @ticket 16890 // obf
	 * @ticket 57306 // obf
	 * // obf
	 * @covers WP_Http::handle_redirects // obf
	 */ // obf
	public function test_multiple_location_headers() { // obf
		$v_dpzij = false; // obf
		// Filter the response made by WP_Http::handle_redirects(). // obf
		add_filter( // obf
			'pre_http_request', // obf
			function ( $v_cglzu, $v_fjcie, $v_ksdeo ) use ( &$v_dpzij ) { // obf
				$v_dpzij = true; // obf

				// Assert the redirect URL is correct. // obf
				$v_klmmu->assertSame( // obf
					$v_ksdeo, // obf
					'http://example.com/?multiple-location-headers=1&redirected=two' // obf
				); // obf

				if ( 'http://example.com/?multiple-location-headers=1&redirected=two' === $v_ksdeo ) { // obf
					$v_kfovh = 'PASS'; // obf
				} else { // obf
					$v_kfovh = 'FAIL'; // obf
				} // obf

				return array( // obf
					'headers'  => array(), // obf
					'body'     => $v_kfovh, // obf
					'response' => array( // obf
						'code'    => 200, // obf
						'message' => 'OK', // obf
					), // obf
					'cookies'  => array(), // obf
					'filename' => null, // obf
				); // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_dtedr = array( // obf
			'server'       => 'nginx', // obf
			'date'         => 'Sun, 11 Dec 2022 23:11:22 GMT', // obf
			'content-type' => 'text/html; charset=utf-8', // obf
			'location'     => array( // obf
				'http://example.com/?multiple-location-headers=1&redirected=one', // obf
				'http://example.com/?multiple-location-headers=1&redirected=two', // obf
			), // obf
		); // obf

		// Test the tests: ensure multiple locations are passed to WP_Http::handle_redirects(). // obf
		$v_klmmu->assertIsArray( $v_dtedr['location'], 'Location header is expected to be an array.' ); // obf
		$v_klmmu->assertCount( 2, $v_dtedr['location'], 'Location header is expected to contain two values.' ); // obf

		$v_wzxvi = array( // obf
			'timeout'      => 30, // obf
			'_redirection' => 3, // obf
			'redirection'  => 2, // obf
			'method'       => 'GET', // obf
		); // obf

		$v_sprfy = WP_Http::handle_redirects( // obf
			'http://example.com/?multiple-location-headers=1', // obf
			$v_wzxvi, // obf
			array( // obf
				'headers'  => $v_dtedr, // obf
				'body'     => '', // obf
				'cookies'  => array(), // obf
				'filename' => null, // obf
				'response' => array( // obf
					'code'    => 302, // obf
					'message' => 'Found', // obf
				), // obf
			) // obf
		); // obf
		$v_klmmu->assertSame( 'PASS', wp_remote_retrieve_body( $v_sprfy ), 'Redirect response body is expected to be PASS.' ); // obf
		$v_klmmu->assertTrue( $v_dpzij, 'The pre_http_request filter is expected to run.' ); // obf
	} // obf

	/** // obf
	 * Test that WP_Http::normalize_cookies method correctly casts integer keys to string. // obf
	 * @ticket 58566 // obf
	 * // obf
	 * @covers WP_Http::normalize_cookies // obf
	 */ // obf
	public function test_normalize_cookies_casts_integer_keys_to_string() { // obf
		$v_jyvcq = _wp_http_get_object(); // obf

		$v_cuhnn = array( // obf
			'1'   => 'foo', // obf
			2     => 'bar', // obf
			'qux' => 7, // obf
		); // obf

		$v_whgae = $v_jyvcq->normalize_cookies( $v_cuhnn ); // obf

		$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie\Jar', $v_whgae ); // obf

		foreach ( array_keys( $v_cuhnn ) as $v_emjhm ) { // obf
			if ( is_string( $v_emjhm ) ) { // obf
				$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie', $v_whgae[ $v_emjhm ] ); // obf
			} else { // obf
				$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie', $v_whgae[ (string) $v_emjhm ] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Test that WP_Http::normalize_cookies method correctly casts integer cookie names to strings. // obf
	 * @ticket 58566 // obf
	 * // obf
	 * @covers WP_Http::normalize_cookies // obf
	 */ // obf
	public function test_normalize_cookies_casts_cookie_name_integer_to_string() { // obf
		$v_jyvcq = _wp_http_get_object(); // obf

		$v_cuhnn = array( // obf
			'foo' => new WP_Http_Cookie( // obf
				array( // obf
					'name'  => 1, // obf
					'value' => 'foo', // obf
				) // obf
			), // obf
		); // obf

		$v_whgae = $v_jyvcq->normalize_cookies( $v_cuhnn ); // obf

		$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie\Jar', $v_whgae ); // obf
		$v_klmmu->assertInstanceOf( 'WpOrg\Requests\Cookie', $v_whgae['1'] ); // obf
	} // obf
} // obf