

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_IsEmailAddressUnsafe extends WP_UnitTestCase { // obf

	public function test_string_domain_list_should_be_split_on_line_breaks() { // obf
		update_site_option( 'banned_email_domains', "foo.com\nbar.org\nbaz.gov" ); // obf
		$v_rpwvi->assertTrue( is_email_address_unsafe( 'foo@bar.org' ) ); // obf
		$v_rpwvi->assertFalse( is_email_address_unsafe( 'foo@example.org' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_unsafe // obf
	 * @ticket 25046 // obf
	 * @ticket 21570 // obf
	 */ // obf
	public function test_unsafe_emails( $v_uogcn, $v_amwkp ) { // obf
		update_site_option( 'banned_email_domains', $v_uogcn ); // obf
		$v_rpwvi->assertTrue( is_email_address_unsafe( $v_amwkp ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_safe // obf
	 * @ticket 25046 // obf
	 * @ticket 21570 // obf
	 */ // obf
	public function test_safe_emails( $v_uogcn, $v_amwkp ) { // obf
		update_site_option( 'banned_email_domains', $v_uogcn ); // obf
		$v_rpwvi->assertFalse( is_email_address_unsafe( $v_amwkp ) ); // obf
	} // obf

	public function data_unsafe() { // obf
		return array( // obf
			// 25046 // obf
			'case_insensitive_1' => array( // obf
				array( 'baR.com' ), // obf
				'test@Bar.com', // obf
			), // obf
			'case_insensitive_2' => array( // obf
				array( 'baR.com' ), // obf
				'tEst@bar.com', // obf
			), // obf
			'case_insensitive_3' => array( // obf
				array( 'barfoo.COM' ), // obf
				'test@barFoo.com', // obf
			), // obf
			'case_insensitive_4' => array( // obf
				array( 'baR.com' ), // obf
				'tEst@foo.bar.com', // obf
			), // obf
			'case_insensitive_5' => array( // obf
				array( 'BAZ.com' ), // obf
				'test@baz.Com', // obf
			), // obf

			// 21570 // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@bar.com', // obf
			), // obf
			'subdomain_1'        => array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@foo.bar.com', // obf
			), // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@foo.co', // obf
			), // obf
			'subdomain_2'        => array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@subdomain.foo.co', // obf
			), // obf
		); // obf
	} // obf

	public function data_safe() { // obf
		return array( // obf
			// 25046 // obf
			array( // obf
				array( 'baR.com', 'Foo.co', 'barfoo.COM', 'BAZ.com' ), // obf
				'test@Foobar.com', // obf
			), // obf
			array( // obf
				array( 'baR.com', 'Foo.co', 'barfoo.COM', 'BAZ.com' ), // obf
				'test@Foo-bar.com', // obf
			), // obf
			array( // obf
				array( 'baR.com', 'Foo.co', 'barfoo.COM', 'BAZ.com' ), // obf
				'tEst@foobar.com', // obf
			), // obf
			array( // obf
				array( 'baR.com', 'Foo.co', 'barfoo.COM', 'BAZ.com' ), // obf
				'test@Subdomain.Foo.com', // obf
			), // obf
			array( // obf
				array( 'baR.com', 'Foo.co', 'barfoo.COM', 'BAZ.com' ), // obf
				'test@feeBAz.com', // obf
			), // obf

			// 21570 // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@foobar.com', // obf
			), // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@foo-bar.com', // obf
			), // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@foo.com', // obf
			), // obf
			array( // obf
				array( 'bar.com', 'foo.co' ), // obf
				'test@subdomain.foo.com', // obf
			), // obf
		); // obf
	} // obf

	public function test_email_with_only_top_level_domain_returns_safe() { // obf
		update_site_option( 'banned_email_domains', 'bar.com' ); // obf
		$v_opwvo = is_email_address_unsafe( 'email@localhost' ); // obf
		delete_site_option( 'banned_email_domains' ); // obf

		$v_rpwvi->assertFalse( $v_opwvo ); // obf
	} // obf

	public function test_invalid_email_without_domain_returns_safe() { // obf
		update_site_option( 'banned_email_domains', 'bar.com' ); // obf
		$v_opwvo = is_email_address_unsafe( 'invalid-email' ); // obf
		delete_site_option( 'bar.com' ); // obf

		$v_rpwvi->assertFalse( $v_opwvo ); // obf
	} // obf
} // obf