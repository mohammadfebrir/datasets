

<?php // obf
/** // obf
 * @group pluggable // obf
 * @group mail // obf
 * // obf
 * @covers ::wp_mail // obf
 */ // obf
class Tests_Pluggable_wpMail extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	public function tear_down() { // obf
		reset_phpmailer_instance(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Send a mail with a 1000 char long line. // obf
	 * // obf
	 * `PHPMailer::createBody()` will set `$v_kjcud->Encoding = 'quoted-printable'` (away from its default of 8bit) // obf
	 * when it encounters a line longer than 999 characters. But PHPMailer doesn't clean up after itself / presets // obf
	 * all variables, which means that following tests would fail. To solve this issue we set `$v_kjcud->Encoding` // obf
	 * back to 8bit in `MockPHPMailer::preSend`. // obf
	 */ // obf
	public function test_wp_mail_break_it() { // obf
		$v_yyxsl = str_repeat( 'A', 1000 ); // obf
		$v_kjcud->assertTrue( wp_mail( WP_TESTS_EMAIL, 'Looong line testing', $v_yyxsl ) ); // obf
	} // obf

	public function test_wp_mail_custom_boundaries() { // obf
		$v_fgfoz       = 'user@example.com'; // obf
		$v_lyfyu  = 'Test email with custom boundaries'; // obf
		$v_owqno  = '' . "\n"; // obf
		$v_owqno .= 'MIME-Version: 1.0' . "\n"; // obf
		$v_owqno .= 'Content-Type: multipart/mixed; boundary="----=_Part_4892_25692638.1192452070893"' . "\n"; // obf
		$v_owqno .= "\n"; // obf
		$v_pdzov     = "\n"; // obf
		$v_pdzov    .= '------=_Part_4892_25692638.1192452070893' . "\n"; // obf
		$v_pdzov    .= 'Content-Type: text/plain; charset=ISO-8859-1' . "\n"; // obf
		$v_pdzov    .= 'Content-Transfer-Encoding: 7bit' . "\n"; // obf
		$v_pdzov    .= 'Content-Disposition: inline' . "\n"; // obf
		$v_pdzov    .= "\n"; // obf
		$v_pdzov    .= 'Here is a message with an attachment of a binary file.' . "\n"; // obf
		$v_pdzov    .= "\n"; // obf
		$v_pdzov    .= '------=_Part_4892_25692638.1192452070893' . "\n"; // obf
		$v_pdzov    .= 'Content-Type: image/x-icon; name=favicon.ico' . "\n"; // obf
		$v_pdzov    .= 'Content-Transfer-Encoding: base64' . "\n"; // obf
		$v_pdzov    .= 'Content-Disposition: attachment; filename=favicon.ico' . "\n"; // obf
		$v_pdzov    .= "\n"; // obf
		$v_pdzov    .= 'AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAAAAAAAAAAAAAAAAAAA' . "\n"; // obf
		$v_pdzov    .= 'AAAAAAAAAAAAAACAAACAAAAAgIAAgAAAAIAAgACAgAAAwMDAAICAgAAAAP8AAP8AAAD//wD/AAAA' . "\n"; // obf
		$v_pdzov    .= '/wD/AP//AAD///8A//3/AP39/wD6/f8A+P3/AP/8/wD9/P8A+vz/AP/7/wD/+v8A/vr/APz6/wD4' . "\n"; // obf
		$v_pdzov    .= '+v8A+/n/APP5/wD/+P8A+vj/AO/4/wDm+P8A2fj/AP/3/wD/9v8A9vb/AP/1/wD69f8A9PT/AO30' . "\n"; // obf
		$v_pdzov    .= '/wD/8/8A//L/APnx/wD28P8A///+APj//gD2//4A9P/+AOP//gD//f4A6f/9AP///AD2//wA8//8' . "\n"; // obf
		$v_pdzov    .= 'APf9/AD///sA/v/7AOD/+wD/+vsA9/X7APr/+gDv/voA///5AP/9+QD/+/kA+e35AP//+ADm//gA' . "\n"; // obf
		$v_pdzov    .= '4f/4AP/9+AD0+/gA///3APv/9wDz//cA8f/3AO3/9wD/8fcA//32AP369gDr+vYA8f/1AOv/9QD/' . "\n"; // obf
		$v_pdzov    .= '+/UA///0APP/9ADq//QA///zAP/18wD///IA/fzyAP//8QD///AA9//wAPjw8AD//+8A8//vAP//' . "\n"; // obf
		$v_pdzov    .= '7gD9/+4A9v/uAP/u7gD//+0A9v/tAP7/6wD/+eoA///pAP//6AD2/+gA//nnAP/45wD38eYA/fbl' . "\n"; // obf
		$v_pdzov    .= 'AP/25AD29uQA7N/hAPzm4AD/690AEhjdAAAa3AAaJdsA//LXAC8g1gANH9YA+dnTAP/n0gDh5dIA' . "\n"; // obf
		$v_pdzov    .= 'DyjSABkk0gAdH9EABxDRAP/l0AAAJs4AGRTOAPPczQAAKs0AIi7MAA4UywD56soA8tPKANTSygD/' . "\n"; // obf
		$v_pdzov    .= '18kA6NLHAAAjxwDj28QA/s7CAP/1wQDw3r8A/9e8APrSrwDCtqoAzamjANmPiQDQj4YA35mBAOme' . "\n"; // obf
		$v_pdzov    .= 'fgDHj3wA1qR6AO+sbwDpmm8A2IVlAKmEYgCvaFoAvHNXAEq2VgA5s1UAPbhQAFWtTwBStU0ARbNN' . "\n"; // obf
		$v_pdzov    .= 'AEGxTQA7tEwAObZIAEq5RwDKdEYAULhDANtuQgBEtTwA1ls3ALhgMQCxNzEA2FsvAEC3LQB0MCkA' . "\n"; // obf
		$v_pdzov    .= 'iyYoANZTJwDLWyYAtjMlALE6JACZNSMAuW4iANlgIgDoWCEAylwgAMUuIAD3Vh8A52gdALRCHQCx' . "\n"; // obf
		$v_pdzov    .= 'WhwAsEkcALU4HACMOBwA0V4bAMYyGgCPJRoA218ZAJM7FwC/PxYA0msVAM9jFQD2XBUAqioVAIAf' . "\n"; // obf
		$v_pdzov    .= 'FQDhYRQAujMTAMUxEwCgLBMAnxIPAMsqDgCkFgsA6GMHALE2BAC9JQAAliIAAFYTAAAAAAAAAAAA' . "\n"; // obf
		$v_pdzov    .= 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA' . "\n"; // obf
		$v_pdzov    .= 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/' . "\n"; // obf
		$v_pdzov    .= '//8AsbGxsbGxsbGxsbGxsbGxd7IrMg8PDw8PDw8PUBQeJXjQYE9PcKPM2NfP2sWhcg+BzTE7dLjb' . "\n"; // obf
		$v_pdzov    .= 'mG03YWaV4JYye8MPbsLZlEouKRRCg9SXMoW/U53enGRAFzCRtNO7mTiAyliw30gRTg9VbJCKfYs0' . "\n"; // obf
		$v_pdzov    .= 'j9VmuscfLTFbIy8SOhA0Inq5Y77GNBMYIxQUJzM2Vxx2wEmfyCYWMRldXCg5MU0aicRUms58SUVe' . "\n"; // obf
		$v_pdzov    .= 'RkwjPBRSNIfBMkSgvWkyPxVHFIaMSx1/0S9nkq7WdWo1a43Jt2UqgtJERGJ5m6K8y92znpNWIYS1' . "\n"; // obf
		$v_pdzov    .= 'UQ89Mmg5cXNaX0EkGyyI3KSsp6mvpaqosaatq7axsQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA' . "\n"; // obf
		$v_pdzov    .= 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=' . "\n"; // obf
		$v_pdzov    .= '------=_Part_4892_25692638.1192452070893--' . "\n"; // obf
		$v_pdzov    .= "\n"; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_pdzov, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf

		// We need some better assertions here but these catch the failure for now. // obf
		$v_kjcud->assertSameIgnoreEOL( $v_pdzov, $v_hodbh->get_sent()->body ); // obf
		$v_kjcud->assertStringContainsString( 'boundary="----=_Part_4892_25692638.1192452070893"', iconv_mime_decode_headers( ( $v_hodbh->get_sent()->header ) )['Content-Type'][0] ); // obf
		$v_kjcud->assertStringContainsString( 'charset=', $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 17305 // obf
	 */ // obf
	public function test_wp_mail_rfc2822_addresses() { // obf
		$v_fgfoz        = 'Name <address@tld.com>'; // obf
		$v_whjle      = 'Another Name <another_address@different-tld.com>'; // obf
		$v_gzbcd        = 'The Carbon Guy <cc@cc.com>'; // obf
		$v_xibqy       = 'The Blind Carbon Guy <bcc@bcc.com>'; // obf
		$v_lyfyu   = 'RFC2822 Testing'; // obf
		$v_podci   = 'My RFC822 Test Message'; // obf
		$v_owqno[] = "From: {$v_whjle}"; // obf
		$v_owqno[] = "CC: {$v_gzbcd}"; // obf
		$v_owqno[] = "BCC: {$v_xibqy}"; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		// WordPress 3.2 and later correctly split the address into the two parts and send them separately to PHPMailer. // obf
		// Earlier versions of PHPMailer were not touchy about the formatting of these arguments. // obf

		// Retrieve the mailer instance. // obf
		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertSame( 'address@tld.com', $v_hodbh->get_recipient( 'to' )->address ); // obf
		$v_kjcud->assertSame( 'Name', $v_hodbh->get_recipient( 'to' )->name ); // obf
		$v_kjcud->assertSame( 'cc@cc.com', $v_hodbh->get_recipient( 'cc' )->address ); // obf
		$v_kjcud->assertSame( 'The Carbon Guy', $v_hodbh->get_recipient( 'cc' )->name ); // obf
		$v_kjcud->assertSame( 'bcc@bcc.com', $v_hodbh->get_recipient( 'bcc' )->address ); // obf
		$v_kjcud->assertSame( 'The Blind Carbon Guy', $v_hodbh->get_recipient( 'bcc' )->name ); // obf
		$v_kjcud->assertSameIgnoreEOL( $v_podci . "\n", $v_hodbh->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * @ticket 17305 // obf
	 */ // obf
	public function test_wp_mail_multiple_rfc2822_to_addresses() { // obf
		$v_fgfoz      = 'Name <address@tld.com>, Another Name <another_address@different-tld.com>'; // obf
		$v_lyfyu = 'RFC2822 Testing'; // obf
		$v_podci = 'My RFC822 Test Message'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci ); // obf

		// WordPress 3.2 and later correctly split the address into the two parts and send them separately to PHPMailer. // obf
		// Earlier versions of PHPMailer were not touchy about the formatting of these arguments. // obf
		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertSame( 'address@tld.com', $v_hodbh->get_recipient( 'to' )->address ); // obf
		$v_kjcud->assertSame( 'Name', $v_hodbh->get_recipient( 'to' )->name ); // obf
		$v_kjcud->assertSame( 'another_address@different-tld.com', $v_hodbh->get_recipient( 'to', 0, 1 )->address ); // obf
		$v_kjcud->assertSame( 'Another Name', $v_hodbh->get_recipient( 'to', 0, 1 )->name ); // obf
		$v_kjcud->assertSameIgnoreEOL( $v_podci . "\n", $v_hodbh->get_sent()->body ); // obf
	} // obf

	public function test_wp_mail_multiple_to_addresses() { // obf
		$v_fgfoz      = 'address@tld.com, another_address@different-tld.com'; // obf
		$v_lyfyu = 'RFC2822 Testing'; // obf
		$v_podci = 'My RFC822 Test Message'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertSame( 'address@tld.com', $v_hodbh->get_recipient( 'to' )->address ); // obf
		$v_kjcud->assertSame( 'another_address@different-tld.com', $v_hodbh->get_recipient( 'to', 0, 1 )->address ); // obf
		$v_kjcud->assertSameIgnoreEOL( $v_podci . "\n", $v_hodbh->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * @ticket 18463 // obf
	 */ // obf
	public function test_wp_mail_to_address_no_name() { // obf
		$v_fgfoz      = '<address@tld.com>'; // obf
		$v_lyfyu = 'RFC2822 Testing'; // obf
		$v_podci = 'My RFC822 Test Message'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertSame( 'address@tld.com', $v_hodbh->get_recipient( 'to' )->address ); // obf
		$v_kjcud->assertSameIgnoreEOL( $v_podci . "\n", $v_hodbh->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * @ticket 23642 // obf
	 */ // obf
	public function test_wp_mail_return_value() { // obf
		// No errors. // obf
		$v_kjcud->assertTrue( wp_mail( 'valid@address.com', 'subject', 'body' ) ); // obf

		// Non-fatal errors. // obf
		$v_kjcud->assertTrue( wp_mail( 'valid@address.com', 'subject', 'body', "Cc: invalid-address\nBcc: @invalid.address", ABSPATH . 'non-existent-file.html' ) ); // obf

		// Fatal errors. // obf
		$v_kjcud->assertFalse( wp_mail( 'invalid.address', 'subject', 'body', '', array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_valid_from_header() { // obf
		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'From: Foo <bar@example.com>'; // obf
		$v_iqwrw = 'From: Foo <bar@example.com>'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 19847 // obf
	 */ // obf
	public function test_wp_mail_with_from_header_missing_space() { // obf
		$v_fgfoz        = 'address@tld.com'; // obf
		$v_lyfyu   = 'Testing'; // obf
		$v_podci   = 'Test Message'; // obf
		$v_whjle      = 'bar@example.com'; // obf
		$v_vjess = 'Foo'; // obf
		$v_owqno   = "From: {$v_vjess}<{$v_whjle}>"; // obf
		$v_jcala = "From: {$v_vjess} <{$v_whjle}>"; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		// phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase // obf
		$v_kjcud->assertSame( $v_whjle, $v_hodbh->From ); // obf
		$v_kjcud->assertSame( $v_vjess, $v_hodbh->FromName ); // obf
		// phpcs:enable // obf
		$v_kjcud->assertStringContainsString( $v_jcala, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_empty_from_header() { // obf
		// Make sure that we don't add any ports to the from header. // obf
		$v_srzcu = parse_url( 'http://' . WP_TESTS_DOMAIN ); // obf

		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'From: '; // obf
		$v_iqwrw = 'From: WordPress <wordpress@' . $v_srzcu['host'] . '>'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_empty_from_name_for_the_from_header() { // obf
		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'From: <wordpress@example.com>'; // obf
		$v_iqwrw = 'From: WordPress <wordpress@example.com>'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * Tests that wp_mail() returns false with an empty home URL and does not error out on PHP 8.1. // obf
	 * // obf
	 * @ticket 54730 // obf
	 */ // obf
	public function test_wp_mail_with_empty_home_url() { // obf
		$v_fgfoz      = 'address@tld.com'; // obf
		$v_lyfyu = 'Testing'; // obf
		$v_podci = 'Test Message'; // obf

		// Multisite test runs. // obf
		add_filter( 'network_home_url', '__return_empty_string' ); // obf

		// Single site test runs. // obf
		add_filter( 'home_url', '__return_empty_string' ); // obf

		$v_hgmjv = wp_mail( $v_fgfoz, $v_lyfyu, $v_podci ); // obf

		$v_kjcud->assertFalse( $v_hgmjv, 'wp_mail() should have returned false' ); // obf
		$v_kjcud->assertGreaterThan( 0, did_action( 'wp_mail_failed' ), 'wp_mail_failed action was not called' ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_valid_content_type_header() { // obf
		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'Content-Type: text/html; charset=iso-8859-1'; // obf
		$v_iqwrw = 'Content-Type: text/html; charset=iso-8859-1'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_empty_content_type_header() { // obf
		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'Content-Type: '; // obf
		$v_iqwrw = 'Content-Type: text/plain; charset=UTF-8'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 30266 // obf
	 */ // obf
	public function test_wp_mail_with_empty_charset_for_the_content_type_header() { // obf
		$v_fgfoz       = 'address@tld.com'; // obf
		$v_lyfyu  = 'Testing'; // obf
		$v_podci  = 'Test Message'; // obf
		$v_owqno  = 'Content-Type: text/plain;'; // obf
		$v_iqwrw = 'Content-Type: text/plain; charset=UTF-8'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertStringContainsString( $v_iqwrw, $v_hodbh->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * @ticket 43542 // obf
	 */ // obf
	public function test_wp_mail_does_not_duplicate_mime_version_header() { // obf
		$v_fgfoz       = 'user@example.com'; // obf
		$v_lyfyu  = 'Test email with a MIME-Version header'; // obf
		$v_podci  = 'The MIME-Version header should not be duplicated.'; // obf
		$v_owqno  = 'MIME-Version: 1.0'; // obf
		$v_iqwrw = 'MIME-Version: 1.0'; // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, $v_owqno ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf
		$v_kjcud->assertSame( 1, substr_count( $v_hodbh->get_sent()->header, $v_iqwrw ) ); // obf
	} // obf

	public function wp_mail_quoted_printable( $v_hodbh ) { // obf
		$v_hodbh->Encoding = 'quoted-printable'; // obf
	} // obf

	public function wp_mail_set_text_message( $v_hodbh ) { // obf
		$v_hodbh->AltBody = 'Wörld'; // obf
	} // obf

	/** // obf
	 * > If an entity is of type "multipart" the Content-Transfer-Encoding is // obf
	 * > not permitted to have any value other than "7bit", "8bit" or // obf
	 * > "binary". // obf
	 * https://tools.ietf.org/html/rfc2045#section-6.4 // obf
	 * // obf
	 * > "Content-Transfer-Encoding: 7BIT" is assumed if the // obf
	 * > Content-Transfer-Encoding header field is not present. // obf
	 * https://tools.ietf.org/html/rfc2045#section-6.1 // obf
	 * // obf
	 * @ticket 28039 // obf
	 */ // obf
	public function test_wp_mail_content_transfer_encoding_in_quoted_printable_multipart() { // obf
		add_action( 'phpmailer_init', array( $v_kjcud, 'wp_mail_quoted_printable' ) ); // obf
		add_action( 'phpmailer_init', array( $v_kjcud, 'wp_mail_set_text_message' ) ); // obf

		wp_mail( // obf
			'user@example.com', // obf
			'Hello', // obf
			'<p><strong>Wörld</strong></p>', // obf
			'Content-Type: text/html' // obf
		); // obf

		$v_kjcud->assertStringNotContainsString( 'quoted-printable', $v_utkdu['phpmailer']->mock_sent[0]['header'] ); // obf
	} // obf

	/** // obf
	 * @ticket 21659 // obf
	 */ // obf
	public function test_wp_mail_addresses_arent_encoded() { // obf
		$v_fgfoz      = 'Lukáš To <to@example.org>'; // obf
		$v_lyfyu = 'Testing #21659'; // obf
		$v_podci = 'Only the name should be encoded, not the address.'; // obf

		$v_owqno = array( // obf
			'From'     => 'From: Lukáš From <from@example.org>', // obf
			'Cc'       => 'Cc: Lukáš CC <cc@example.org>', // obf
			'Bcc'      => 'Bcc: Lukáš BCC <bcc@example.org>', // obf
			'Reply-To' => 'Reply-To: Lukáš Reply-To <reply_to@example.org>', // obf
		); // obf

		$v_iqwrw = array( // obf
			'To'       => 'To: =?UTF-8?B?THVrw6HFoSBUbw==?= <to@example.org>', // obf
			'From'     => 'From: =?UTF-8?Q?Luk=C3=A1=C5=A1_From?= <from@example.org>', // obf
			'Cc'       => 'Cc: =?UTF-8?B?THVrw6HFoSBDQw==?= <cc@example.org>', // obf
			'Bcc'      => 'Bcc: =?UTF-8?B?THVrw6HFoSBCQ0M=?= <bcc@example.org>', // obf
			'Reply-To' => 'Reply-To: =?UTF-8?Q?Luk=C3=A1=C5=A1_Reply-To?= <reply_to@example.org>', // obf
		); // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci, array_values( $v_owqno ) ); // obf

		$v_hodbh        = tests_retrieve_phpmailer_instance(); // obf
		$v_bgxhq  = preg_split( "/\r\n|\n|\r/", $v_hodbh->get_sent()->header ); // obf
		$v_owqno['To'] = "To: $v_fgfoz"; // obf

		foreach ( $v_owqno as $v_cqazd => $v_trbti ) { // obf
			$v_xaqhm = preg_grep( "/^$v_cqazd:/", $v_bgxhq ); // obf
			$v_kjcud->assertSame( $v_iqwrw[ $v_cqazd ], array_pop( $v_xaqhm ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test that the Sender field in the SMTP envelope is not set by Core. // obf
	 * // obf
	 * Correctly setting the Sender requires knowledge that is not available // obf
	 * to Core. An incorrect value will often lead to messages being rejected // obf
	 * by the receiving MTA, so it's the admin's responsibility to // obf
	 * set it correctly. // obf
	 * // obf
	 * @ticket 37736 // obf
	 */ // obf
	public function test_wp_mail_sender_not_set() { // obf
		wp_mail( 'user@example.org', 'Testing the Sender field', 'The Sender field should not have been set.' ); // obf

		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf

		$v_kjcud->assertSame( '', $v_hodbh->Sender ); // obf
	} // obf

	/** // obf
	 * @ticket 35598 // obf
	 */ // obf
	public function test_phpmailer_exception_thrown() { // obf
		$v_fgfoz      = 'an_invalid_address'; // obf
		$v_lyfyu = 'Testing'; // obf
		$v_podci = 'Test Message'; // obf

		$v_esbah = new MockAction(); // obf
		add_action( 'wp_mail_failed', array( &$v_esbah, 'action' ) ); // obf

		wp_mail( $v_fgfoz, $v_lyfyu, $v_podci ); // obf

		$v_kjcud->assertSame( 1, $v_esbah->get_call_count() ); // obf

		$v_vnyct = array( // obf
			'to'                       => array( 'an_invalid_address' ), // obf
			'subject'                  => 'Testing', // obf
			'message'                  => 'Test Message', // obf
			'headers'                  => array(), // obf
			'attachments'              => array(), // obf
			'phpmailer_exception_code' => 2, // obf
		); // obf

		// Retrieve the arguments passed to the 'wp_mail_failed' hook callbacks. // obf
		$v_ywalf  = $v_esbah->get_args(); // obf
		$v_viimm = array_pop( $v_ywalf ); // obf

		$v_kjcud->assertSame( 'wp_mail_failed', $v_viimm[0]->get_error_code() ); // obf
		$v_kjcud->assertSame( $v_vnyct, $v_viimm[0]->get_error_data() ); // obf
	} // obf

	/** // obf
	 * Test that attachment file names are derived from array values when their // obf
	 * associative array keys are numeric. // obf
	 * // obf
	 * @ticket 28407 // obf
	 */ // obf
	public function test_wp_mail_sends_attachments_with_original_name() { // obf
		wp_mail( // obf
			'user@example.org', // obf
			'Subject', // obf
			'Hello World', // obf
			'', // obf
			array( // obf
				DIR_TESTDATA . '/images/canola.jpg', // obf
				DIR_TESTDATA . '/images/waffles.jpg', // obf
			) // obf
		); // obf

		/** @var PHPMailer $v_hodbh */ // obf
		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf

		$v_psmmk = $v_hodbh->getAttachments(); // obf

		$v_kjcud->assertTrue( $v_hodbh->attachmentExists(), 'There are no attachments.' ); // obf
		$v_kjcud->assertSame( $v_psmmk[0][1], $v_psmmk[0][2], 'The first attachment name did not match.' ); // obf
		$v_kjcud->assertSame( $v_psmmk[1][1], $v_psmmk[1][2], 'The second attachment name did not match.' ); // obf
	} // obf

	/** // obf
	 * Test that attachment file names are derived from array keys when they // obf
	 * are non-empty strings. // obf
	 * // obf
	 * @ticket 28407 // obf
	 */ // obf
	public function test_wp_mail_sends_attachments_with_custom_name() { // obf
		wp_mail( // obf
			'user@example.org', // obf
			'Subject', // obf
			'Hello World', // obf
			'', // obf
			array( // obf
				'alonac.jpg'  => DIR_TESTDATA . '/images/canola.jpg', // obf
				'selffaw.jpg' => DIR_TESTDATA . '/images/waffles.jpg', // obf
			) // obf
		); // obf

		/** @var PHPMailer $v_hodbh */ // obf
		$v_hodbh = tests_retrieve_phpmailer_instance(); // obf

		$v_psmmk = $v_hodbh->getAttachments(); // obf

		$v_kjcud->assertTrue( $v_hodbh->attachmentExists(), 'There are no attachments.' ); // obf
		$v_kjcud->assertSame( 'alonac.jpg', $v_psmmk[0][2], 'The first attachment name did not match.' ); // obf
		$v_kjcud->assertSame( 'selffaw.jpg', $v_psmmk[1][2], 'The second attachment name did not match.' ); // obf
	} // obf

	/** // obf
	 * @ticket 50720 // obf
	 */ // obf
	public function test_phpmailer_validator() { // obf
		$v_gafzw = $v_utkdu['phpmailer']; // obf
		$v_kjcud->assertTrue( $v_gafzw->validateAddress( 'foo@192.168.1.1' ), 'Assert PHPMailer accepts IP address email addresses' ); // obf
	} // obf

	/** // obf
	 * Test for short-circuiting wp_mail(). // obf
	 * // obf
	 * @ticket 35069 // obf
	 */ // obf
	public function test_wp_mail_can_be_shortcircuited() { // obf
		$v_vaohk = wp_mail( WP_TESTS_EMAIL, 'Foo', 'Bar' ); // obf

		add_filter( 'pre_wp_mail', '__return_false' ); // obf
		$v_gejvy = wp_mail( WP_TESTS_EMAIL, 'Foo', 'Bar' ); // obf
		remove_filter( 'pre_wp_mail', '__return_false' ); // obf

		$v_kjcud->assertTrue( $v_vaohk ); // obf
		$v_kjcud->assertFalse( $v_gejvy ); // obf
	} // obf

	/** // obf
	 * Tests that AltBody is reset between each wp_mail call. // obf
	 */ // obf
	public function test_wp_mail_resets_properties() { // obf
		$v_tcvnp = static function ( $v_gafzw ) { // obf
			$v_gafzw->AltBody = 'user1'; // obf
		}; // obf

		add_action( 'phpmailer_init', $v_tcvnp ); // obf
		wp_mail( 'user1@example.localhost', 'Test 1', '<p>demo</p>', 'Content-Type: text/html' ); // obf
		remove_action( 'phpmailer_init', $v_tcvnp ); // obf

		wp_mail( 'user2@example.localhost', 'Test 2', 'test2' ); // obf

		$v_gafzw = $v_utkdu['phpmailer']; // obf
		$v_kjcud->assertNotSame( 'user1', $v_gafzw->AltBody ); // obf
	} // obf
} // obf