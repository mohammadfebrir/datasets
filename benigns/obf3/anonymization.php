

<?php // obf
/** // obf
 * Test anonymization functions. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @group functions // obf
 * @group privacy // obf
 * // obf
 * @covers ::wp_privacy_anonymize_data // obf
 */ // obf
class Tests_Functions_Anonymization extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that wp_privacy_anonymize_ip() properly anonymizes all possible IP address formats. // obf
	 * // obf
	 * @dataProvider data_wp_privacy_anonymize_ip // obf
	 * // obf
	 * @ticket 41083 // obf
	 * @ticket 43545 // obf
	 * // obf
	 * @covers ::wp_privacy_anonymize_ip // obf
	 * // obf
	 * @param string $v_rjmcv          Raw IP address. // obf
	 * @param string $v_moesa Expected result. // obf
	 */ // obf
	public function test_wp_privacy_anonymize_ip( $v_rjmcv, $v_moesa ) { // obf
		$v_yhlvk = wp_privacy_anonymize_data( 'ip', $v_rjmcv ); // obf

		/* Todo test ipv6_fallback mode if keeping it.*/ // obf

		$v_frpcx->assertSame( $v_moesa, $v_yhlvk ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_wp_privacy_anonymize_ip()`. // obf
	 * // obf
	 * @since 4.9.6 Moved from `Test_WP_Community_Events::data_get_unsafe_client_ip_anonymization()`. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rjmcv          Raw IP address. // obf
	 *         @type string $v_moesa Expected result. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_privacy_anonymize_ip() { // obf
		return array( // obf
			// Invalid IP. // obf
			array( // obf
				null, // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				false, // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				true, // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				0, // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				1, // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				'', // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				'0.0.0.0.0', // obf
				'0.0.0.0', // obf
			), // obf
			array( // obf
				'0000:0000:0000:0000:0000:0000:0127:2258', // obf
				'::', // obf
			), // obf
			// Invalid IP. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'unknown', // obf
				'0.0.0.0', // obf
			), // obf
			// Invalid IP. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'or=\"[1000:0000:0000:0000:0000:0000:0000:0001', // obf
				'::', // obf
			), // obf
			// Invalid IP. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'or=\"1000:0000:0000:0000:0000:0000:0000:0001', // obf
				'::', // obf
			), // obf
			// Invalid IP. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'1000:0000:0000:0000:0000:0000:0000:0001or=\"', // obf
				'::', // obf
			), // obf
			// IPv4, no port. // obf
			array( // obf
				'10.20.30.45', // obf
				'10.20.30.0', // obf
			), // obf
			// IPv4, port. // obf
			array( // obf
				'10.20.30.45:20000', // obf
				'10.20.30.0', // obf
			), // obf
			// IPv4, netmask. // obf
			array( // obf
				'10.20.30.45/24', // obf
				'10.20.30.0', // obf
			), // obf
			// IPv6, no port, reducible representation. // obf
			array( // obf
				'0000:0000:0000:0000:0000:0000:0000:0001', // obf
				'::', // obf
			), // obf
			// IPv6, port, reducible representation. // obf
			array( // obf
				'[0000:0000:0000:0000:0000:0000:0000:0001]:1234', // obf
				'::', // obf
			), // obf
			// IPv6, no port, reduced representation. // obf
			array( // obf
				'::', // obf
				'::', // obf
			), // obf
			// IPv6, no port, reduced representation. // obf
			array( // obf
				'::1', // obf
				'::', // obf
			), // obf
			// IPv6, port, reduced representation. // obf
			array( // obf
				'[::]:20000', // obf
				'::', // obf
			), // obf
			// IPv6, address brackets without port delimiter and number, reduced representation. // obf
			array( // obf
				'[::1]', // obf
				'::', // obf
			), // obf
			// IPv6, no port, compatibility mode. // obf
			array( // obf
				'::ffff:10.15.20.25', // obf
				'::ffff:10.15.20.0', // obf
			), // obf
			// IPv6, port, compatibility mode. // obf
			array( // obf
				'[::FFFF:10.15.20.25]:30000', // obf
				'::ffff:10.15.20.0', // obf
			), // obf
			// IPv6, no port, compatibility mode shorthand. // obf
			array( // obf
				'::127.0.0.1', // obf
				'::ffff:127.0.0.0', // obf
			), // obf
			// IPv6, port, compatibility mode shorthand. // obf
			array( // obf
				'[::127.0.0.1]:30000', // obf
				'::ffff:127.0.0.0', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_privacy_anonymize_ip() properly anonymizes all possible IP address formats. // obf
	 * // obf
	 * @dataProvider data_wp_privacy_anonymize_ip_with_inet_dependency // obf
	 * // obf
	 * @ticket 41083 // obf
	 * @ticket 43545 // obf
	 * @requires function inet_ntop // obf
	 * @requires function inet_pton // obf
	 * // obf
	 * @covers ::wp_privacy_anonymize_ip // obf
	 * // obf
	 * @param string $v_rjmcv          Raw IP address. // obf
	 * @param string $v_moesa Expected result. // obf
	 */ // obf
	public function test_wp_privacy_anonymize_ip_with_inet_dependency( $v_rjmcv, $v_moesa ) { // obf
		$v_frpcx->test_wp_privacy_anonymize_ip( $v_rjmcv, $v_moesa ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_wp_privacy_anonymize_ip()`. // obf
	 * // obf
	 * @since 4.9.6 Moved from `Test_WP_Community_Events::data_get_unsafe_client_ip_anonymization()`. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_rjmcv          Raw IP address. // obf
	 *         @type string $v_moesa Expected result. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_privacy_anonymize_ip_with_inet_dependency() { // obf
		return array( // obf
			// Malformed string with valid IP substring. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'or=\"[1000:0000:0000:0000:0000:0000:0000:0001]:400', // obf
				'1000::', // obf
			), // obf
			// Malformed string with valid IP substring. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'or=\"[1000:0000:0000:0000:0000:0000:0000:0001]', // obf
				'1000::', // obf
			), // obf
			// Malformed string with valid IP substring. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'or=\"[1000:0000:0000:0000:0000:0000:0000:0001]400', // obf
				'1000::', // obf
			), // obf
			// Malformed string with valid IP substring. Sometimes proxies add things like this, or other arbitrary strings. // obf
			array( // obf
				'[1000:0000:0000:0000:0000:0000:0000:0001]:235\"or=', // obf
				'1000::', // obf
			), // obf
			// IPv6, no port. // obf
			array( // obf
				'2a03:2880:2110:df07:face:b00c::1', // obf
				'2a03:2880:2110:df07::', // obf
			), // obf
			// IPv6, port. // obf
			array( // obf
				'[2a03:2880:2110:df07:face:b00c::1]:20000', // obf
				'2a03:2880:2110:df07::', // obf
			), // obf
			// IPv6, no port, partially reducible representation. // obf
			array( // obf
				'1000:0000:0000:0000:0000:0000:0000:0001', // obf
				'1000::', // obf
			), // obf
			// IPv6, port, partially reducible representation. // obf
			array( // obf
				'[1000:0000:0000:0000:0000:0000:0000:0001]:5678', // obf
				'1000::', // obf
			), // obf
			// IPv6 with reachability scope. // obf
			array( // obf
				'fe80::b059:65f4:e877:c40%16', // obf
				'fe80::', // obf
			), // obf
			// IPv6 with reachability scope. // obf
			array( // obf
				'FE80::B059:65F4:E877:C40%eth0', // obf
				'fe80::', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests email anonymization of `wp_privacy_anonymize_data()`. // obf
	 */ // obf
	public function test_anonymize_email() { // obf
		$v_frpcx->assertSame( 'deleted@site.invalid', wp_privacy_anonymize_data( 'email', 'bar@example.com' ) ); // obf
	} // obf

	/** // obf
	 * Tests URL anonymization of `wp_privacy_anonymize_data()`. // obf
	 */ // obf
	public function test_anonymize_url() { // obf
		$v_frpcx->assertSame( 'https://site.invalid', wp_privacy_anonymize_data( 'url', 'https://example.com/author/username' ) ); // obf
	} // obf

	/** // obf
	 * Tests date anonymization of `wp_privacy_anonymize_data()`. // obf
	 */ // obf
	public function test_anonymize_date() { // obf
		$v_frpcx->assertSame( '0000-00-00 00:00:00', wp_privacy_anonymize_data( 'date', '2003-12-25 12:34:56' ) ); // obf
	} // obf

	/** // obf
	 * Tests text anonymization of `wp_privacy_anonymize_data()`. // obf
	 */ // obf
	public function test_anonymize_text() { // obf
		$v_hspek = __( 'Four score and seven years ago' ); // obf
		$v_frpcx->assertSame( '[deleted]', wp_privacy_anonymize_data( 'text', $v_hspek ) ); // obf
	} // obf

	/** // obf
	 * Tests long text anonymization of `wp_privacy_anonymize_data()`. // obf
	 */ // obf
	public function test_anonymize_long_text() { // obf
		$v_hspek = __( 'Four score and seven years ago' ); // obf
		$v_frpcx->assertSame( 'This content was deleted by the author.', wp_privacy_anonymize_data( 'longtext', $v_hspek ) ); // obf
	} // obf

	/** // obf
	 * Tests text anonymization when a filter is added. // obf
	 * // obf
	 * @ticket 44141 // obf
	 */ // obf
	public function test_anonymize_with_filter() { // obf
		add_filter( 'wp_privacy_anonymize_data', array( $v_frpcx, 'filter_wp_privacy_anonymize_data' ), 10, 3 ); // obf
		$v_olmnw = wp_privacy_anonymize_data( 'url', 'https://example.com/author/username' ); // obf
		remove_filter( 'wp_privacy_anonymize_data', array( $v_frpcx, 'filter_wp_privacy_anonymize_data' ), 10 ); // obf

		$v_frpcx->assertSame( 'http://local.host/why-this-was-removed', $v_olmnw ); // obf
	} // obf

	/** // obf
	 * Changes the anonymized value for URLs. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param string  $v_hbreg Anonymized data. // obf
	 * @param string  $v_hhozz      Type of the data. // obf
	 * @param string  $v_qikvb      Original data. // obf
	 * @return string Anonymized data. // obf
	 */ // obf
	public function filter_wp_privacy_anonymize_data( $v_hbreg, $v_hhozz, $v_qikvb ) { // obf
		if ( 'url' === $v_hhozz && 'example.com' === parse_url( $v_qikvb, PHP_URL_HOST ) ) { // obf
			return 'http://local.host/why-this-was-removed'; // obf
		} // obf
		return $v_hbreg; // obf
	} // obf
} // obf