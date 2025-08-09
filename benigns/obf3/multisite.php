

<?php // obf

/** // obf
 * Tests specific to network and site options in Multisite. // obf
 * // obf
 * @group option // obf
 * @group ms-option // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Option_Multisite extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::get_blog_option // obf
	 * @covers ::get_option // obf
	 * @covers ::add_blog_option // obf
	 * @covers ::update_blog_option // obf
	 * @covers ::delete_blog_option // obf
	 */ // obf
	public function test_from_same_site() { // obf
		$v_cjfvt    = __FUNCTION__ . '_1'; // obf
		$v_wzsab   = __FUNCTION__ . '_2'; // obf
		$v_mukvb  = __FUNCTION__ . '_val1'; // obf
		$v_gggjc = __FUNCTION__ . '_val2'; // obf

		$v_soyko->assertFalse( get_blog_option( 1, 'doesnotexist' ) ); // obf
		$v_soyko->assertFalse( get_option( 'doesnotexist' ) );           // Check get_option(). // obf

		$v_soyko->assertTrue( add_blog_option( 1, $v_cjfvt, $v_mukvb ) ); // obf
		// Assert all values of $v_vncsf that means the current or main blog (the same here). // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( '1', $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_option( $v_cjfvt ) );            // Check get_option(). // obf

		$v_soyko->assertFalse( add_blog_option( 1, $v_cjfvt, $v_mukvb ) );     // Already exists. // obf
		$v_soyko->assertFalse( update_blog_option( 1, $v_cjfvt, $v_mukvb ) );  // Value is the same. // obf
		$v_soyko->assertTrue( update_blog_option( 1, $v_cjfvt, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );           // Check get_option(). // obf
		$v_soyko->assertFalse( add_blog_option( 1, $v_cjfvt, $v_mukvb ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );           // Check get_option(). // obf

		$v_soyko->assertTrue( delete_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertFalse( get_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertFalse( get_option( $v_cjfvt ) );                     // Check get_option(). // obf
		$v_soyko->assertFalse( delete_blog_option( 1, $v_cjfvt ) ); // obf
		$v_soyko->assertTrue( update_blog_option( 1, $v_wzsab, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( 1, $v_wzsab ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_wzsab ) );          // Check get_option(). // obf
		$v_soyko->assertTrue( delete_blog_option( 1, $v_wzsab ) ); // obf
		$v_soyko->assertFalse( get_blog_option( 1, $v_wzsab ) ); // obf
		$v_soyko->assertFalse( get_option( $v_wzsab ) );                    // Check get_option(). // obf
	} // obf

	/** // obf
	 * @covers ::get_blog_option // obf
	 * @covers ::get_option // obf
	 * @covers ::add_blog_option // obf
	 * @covers ::update_blog_option // obf
	 * @covers ::delete_blog_option // obf
	 */ // obf
	public function test_from_same_site_with_null_blog_id() { // obf
		$v_cjfvt    = __FUNCTION__ . '_1'; // obf
		$v_wzsab   = __FUNCTION__ . '_2'; // obf
		$v_mukvb  = __FUNCTION__ . '_val1'; // obf
		$v_gggjc = __FUNCTION__ . '_val2'; // obf

		$v_soyko->assertFalse( get_blog_option( null, 'doesnotexist' ) ); // obf
		$v_soyko->assertFalse( get_option( 'doesnotexist' ) );              // Check get_option(). // obf

		$v_soyko->assertTrue( add_blog_option( null, $v_cjfvt, $v_mukvb ) ); // obf
		// Assert all values of $v_vncsf that means the current or main blog (the same here). // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_option( $v_cjfvt ) );               // Check get_option(). // obf

		$v_soyko->assertFalse( add_blog_option( null, $v_cjfvt, $v_mukvb ) );     // Already exists. // obf
		$v_soyko->assertFalse( update_blog_option( null, $v_cjfvt, $v_mukvb ) );  // Value is the same. // obf
		$v_soyko->assertTrue( update_blog_option( null, $v_cjfvt, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );              // Check get_option(). // obf
		$v_soyko->assertFalse( add_blog_option( null, $v_cjfvt, $v_mukvb ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );              // Check get_option(). // obf

		$v_soyko->assertTrue( delete_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertFalse( get_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertFalse( get_option( $v_cjfvt ) );                        // Check get_option(). // obf
		$v_soyko->assertFalse( delete_blog_option( null, $v_cjfvt ) ); // obf
		$v_soyko->assertTrue( update_blog_option( null, $v_wzsab, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( null, $v_wzsab ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_option( $v_wzsab ) );             // Check get_option(). // obf
		$v_soyko->assertTrue( delete_blog_option( null, $v_wzsab ) ); // obf
		$v_soyko->assertFalse( get_blog_option( null, $v_wzsab ) ); // obf
		$v_soyko->assertFalse( get_option( $v_wzsab ) );                       // Check get_option(). // obf
	} // obf

	/** // obf
	 * @covers ::get_blog_option // obf
	 * @covers ::get_option // obf
	 * @covers ::add_blog_option // obf
	 * @covers ::update_blog_option // obf
	 * @covers ::delete_blog_option // obf
	 */ // obf
	public function test_with_another_site() { // obf
		$v_scoxb = self::factory()->user->create(); // obf
		$v_soyko->assertIsInt( $v_scoxb ); // obf

		$v_vncsf = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_scoxb, // obf
				'public'  => 1, // obf
			) // obf
		); // obf
		$v_soyko->assertIsInt( $v_vncsf ); // obf

		$v_cjfvt    = __FUNCTION__ . '_key1'; // obf
		$v_wzsab   = __FUNCTION__ . '_key2'; // obf
		$v_mukvb  = __FUNCTION__ . '_val1'; // obf
		$v_gggjc = __FUNCTION__ . '_val2'; // obf

		$v_soyko->assertFalse( get_blog_option( $v_vncsf, 'doesnotexist' ) ); // obf
		// $v_soyko->assertFalse( get_option( 'doesnotexist' ) );               // Check get_option(). // obf

		$v_soyko->assertTrue( add_blog_option( $v_vncsf, $v_cjfvt, $v_mukvb ) ); // obf
		// Assert all values of $v_vncsf that means the current or main blog (the same here). // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		$v_soyko->assertSame( $v_mukvb, get_blog_option( (string) $v_vncsf, $v_cjfvt ) ); // obf
		// $v_soyko->assertSame( $v_mukvb, get_option( $v_cjfvt ) );                // Check get_option(). // obf

		$v_soyko->assertFalse( add_blog_option( $v_vncsf, $v_cjfvt, $v_mukvb ) );     // Already exists. // obf
		$v_soyko->assertFalse( update_blog_option( $v_vncsf, $v_cjfvt, $v_mukvb ) );  // Value is the same. // obf
		$v_soyko->assertTrue( update_blog_option( $v_vncsf, $v_cjfvt, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		// $v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );               // Check get_option(). // obf
		$v_soyko->assertFalse( add_blog_option( $v_vncsf, $v_cjfvt, $v_mukvb ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		// $v_soyko->assertSame( $v_gggjc, get_option( $v_cjfvt ) );               // Check get_option(). // obf

		$v_soyko->assertTrue( delete_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		$v_soyko->assertFalse( get_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		// $v_soyko->assertFalse( get_option( $v_cjfvt ) );                         // Check get_option(). // obf
		$v_soyko->assertFalse( delete_blog_option( $v_vncsf, $v_cjfvt ) ); // obf
		$v_soyko->assertTrue( update_blog_option( $v_vncsf, $v_wzsab, $v_gggjc ) ); // obf
		$v_soyko->assertSame( $v_gggjc, get_blog_option( $v_vncsf, $v_wzsab ) ); // obf
		// $v_soyko->assertSame( $v_gggjc, get_option( $v_wzsab ) );              // Check get_option(). // obf
		$v_soyko->assertTrue( delete_blog_option( $v_vncsf, $v_wzsab ) ); // obf
		$v_soyko->assertFalse( get_blog_option( $v_vncsf, $v_wzsab ) ); // obf
		// $v_soyko->assertFalse( get_option( $v_wzsab ) );                        // Check get_option(). // obf
	} // obf

	/** // obf
	 * @group multisite // obf
	 * // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_site_notoptions() { // obf
		$v_djqrr     = get_current_network_id(); // obf
		$v_bmvzh = "{$v_djqrr}:notoptions"; // obf

		$v_ufruc = wp_cache_get( 'notoptions', 'site-options' ); // obf
		$v_soyko->assertEmpty( $v_ufruc ); // obf
		$v_rnfmf = wp_cache_get( $v_bmvzh, 'site-options' ); // obf
		$v_soyko->assertEmpty( $v_rnfmf ); // obf

		get_site_option( 'burrito' ); // obf

		$v_zkrby = wp_cache_get( 'notoptions', 'site-options' ); // obf
		$v_soyko->assertEmpty( $v_zkrby ); // obf
		$v_bngpm = wp_cache_get( $v_bmvzh, 'site-options' ); // obf
		$v_soyko->assertNotEmpty( $v_bngpm ); // obf
	} // obf

	/** // obf
	 * @covers ::users_can_register_signup_filter // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_users_can_register_signup_filter() { // obf

		get_site_option( 'registration' ); // obf
		$v_soyko->assertFalse( users_can_register_signup_filter() ); // obf

		update_site_option( 'registration', 'all' ); // obf
		$v_soyko->assertTrue( users_can_register_signup_filter() ); // obf

		update_site_option( 'registration', 'user' ); // obf
		$v_soyko->assertTrue( users_can_register_signup_filter() ); // obf

		update_site_option( 'registration', 'none' ); // obf
		$v_soyko->assertFalse( users_can_register_signup_filter() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_illegal_names // obf
	 * // obf
	 * @covers ::update_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_sanitize_network_option_illegal_names( $v_xjwvv, $v_nkoxy ) { // obf
		update_site_option( 'illegal_names', $v_xjwvv ); // obf
		$v_soyko->assertSame( $v_nkoxy, get_site_option( 'illegal_names' ) ); // obf
	} // obf

	public function data_illegal_names() { // obf
		return array( // obf
			array( array( '', 'Woo', '' ), array( 'Woo' ) ), // obf
			array( 'foo bar', array( 'foo', 'bar' ) ), // obf
			array( array(), '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_email_domains // obf
	 * // obf
	 * @param $v_xjwvv // obf
	 * @param $v_nkoxy // obf
	 * // obf
	 * @covers ::update_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_sanitize_network_option_limited_email_domains( $v_xjwvv, $v_nkoxy ) { // obf
		update_site_option( 'limited_email_domains', $v_xjwvv ); // obf
		$v_soyko->assertSame( $v_nkoxy, get_site_option( 'limited_email_domains' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_email_domains // obf
	 * // obf
	 * @param $v_xjwvv // obf
	 * @param $v_nkoxy // obf
	 * // obf
	 * @covers ::update_site_option // obf
	 * @covers ::get_site_option // obf
	 */ // obf
	public function test_sanitize_network_option_banned_email_domains( $v_xjwvv, $v_nkoxy ) { // obf
		update_site_option( 'banned_email_domains', $v_xjwvv ); // obf
		$v_soyko->assertSame( $v_nkoxy, get_site_option( 'banned_email_domains' ) ); // obf
	} // obf

	public function data_email_domains() { // obf
		return array( // obf
			array( array( 'woo', '', 'boo.com', 'foo.net.biz..' ), array( 'woo', 'boo.com' ) ), // obf
			array( "foo\nbar", array( 'foo', 'bar' ) ), // obf
			array( "foo\n\nbar", array( 'foo', 'bar' ) ), // obf
			array( "\nfoo\nbar\n", array( 'foo', 'bar' ) ), // obf
			array( "foo\nfoo.net.biz..", array( 'foo' ) ), // obf
			array( "foo\nfoo.net.biz..\nbar.com", array( 'foo', 'bar.com' ) ), // obf
			array( 'foo.', array( 'foo.' ) ), // obf
			array( '.foo', array( '.foo' ) ), // obf
			array( 'foo^net', '' ), // obf
			array( array(), '' ), // obf
		); // obf
	} // obf
} // obf