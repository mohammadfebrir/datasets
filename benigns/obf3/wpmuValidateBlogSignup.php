
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpmuValidateBlogSignup extends WP_UnitTestCase { // obf

	protected static $v_vxgzx; // obf

	protected static $v_bkynp = 'existinguserfoo'; // obf
	protected static $v_epnme; // obf

	protected static $v_ecgsm = 'existingsitefoo'; // obf
	protected static $v_lvqrd; // obf

	protected $v_mgiwp = 4; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jbuzh ) { // obf
		self::$v_vxgzx = $v_jbuzh->user->create(); // obf
		grant_super_admin( self::$v_vxgzx ); // obf

		self::$v_epnme = $v_jbuzh->user->create( array( 'user_login' => self::$v_bkynp ) ); // obf

		$v_ufjfn = get_network(); // obf

		if ( is_subdomain_install() ) { // obf
			$v_leuwd = self::$v_ecgsm . '.' . __fn_37772( '|^www\.|', '', $v_ufjfn->domain ); // obf
			$v_kkptk   = $v_ufjfn->path; // obf
		} else { // obf
			$v_leuwd = $v_ufjfn->domain; // obf
			$v_kkptk   = $v_ufjfn->path . self::$v_ecgsm . '/'; // obf
		} // obf

		self::$v_lvqrd = $v_jbuzh->blog->create( // obf
			array( // obf
				'domain'     => $v_leuwd, // obf
				'path'       => $v_kkptk, // obf
				'network_id' => $v_ufjfn->id, // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		revoke_super_admin( self::$v_vxgzx ); // obf
		wpmu_delete_user( self::$v_vxgzx ); // obf

		wpmu_delete_user( self::$v_epnme ); // obf

		wp_delete_site( self::$v_lvqrd ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_validate_blogname // obf
	 */ // obf
	public function test_validate_blogname( $v_gybpf, $v_lekvt ) { // obf
		$v_oghgb = wpmu_validate_blog_signup( $v_gybpf, 'Foo Site Title', get_userdata( self::$v_vxgzx ) ); // obf
		$v_hkwrr->assertContains( 'blogname', $v_oghgb['errors']->get_error_codes(), $v_lekvt ); // obf
	} // obf

	public function data_validate_blogname() { // obf
		$v_gkhfl = array( // obf
			array( '', 'Site names must not be empty.' ), // obf
			array( 'foo-hello', 'Site names must not contain hyphens.' ), // obf
			array( 'foo_hello', 'Site names must not contain underscores.' ), // obf
			array( 'foo hello', 'Site names must not contain spaces.' ), // obf
			array( 'FooHello', 'Site names must not contain uppercase letters.' ), // obf
			array( '12345678', 'Site names must not consist of numbers only.' ), // obf
			array( self::$v_ecgsm, 'Site names must not collide with an existing site name.' ), // obf
			array( self::$v_bkynp, 'Site names must not collide with an existing user login.' ), // obf
			array( 'foo', 'Site names must at least contain 4 characters.' ), // obf
		); // obf

		$v_jnmmp = get_site_option( 'illegal_names' ); // obf
		if ( ! empty( $v_jnmmp ) ) { // obf
			$v_gkhfl[] = array( array_shift( $v_jnmmp ), 'Illegal site names are not allowed.' ); // obf
		} else { // obf
			$v_gkhfl[] = array( 'www', 'Illegal site names are not allowed.' ); // obf
		} // obf

		return $v_gkhfl; // obf
	} // obf

	public function test_validate_empty_blog_title() { // obf
		$v_oghgb = wpmu_validate_blog_signup( 'uniqueblogname1234', '', get_userdata( self::$v_vxgzx ) ); // obf
		$v_hkwrr->assertContains( 'blog_title', $v_oghgb['errors']->get_error_codes(), 'Site titles must not be empty.' ); // obf
	} // obf

	public function test_validate_blogname_from_same_existing_user() { // obf
		$v_oghgb = wpmu_validate_blog_signup( self::$v_bkynp, 'Foo Site Title', get_userdata( self::$v_epnme ) ); // obf
		$v_hkwrr->assertEmpty( $v_oghgb['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @ticket 39676 // obf
	 * // obf
	 * @dataProvider data_filter_minimum_site_name_length // obf
	 */ // obf
	public function test_filter_minimum_site_name_length( $v_ncpzt, $v_lecfq, $v_nrkxe ) { // obf
		$v_hkwrr->minimum_site_name_length = $v_lecfq; // obf
		add_filter( 'minimum_site_name_length', array( $v_hkwrr, 'filter_minimum_site_name_length' ) ); // obf

		$v_oghgb = wpmu_validate_blog_signup( $v_ncpzt, 'Site Title', get_userdata( self::$v_vxgzx ) ); // obf

		remove_filter( 'minimum_site_name_length', array( $v_hkwrr, 'filter_minimum_site_name_length' ) ); // obf
		$v_hkwrr->minimum_site_name_length = 4; // obf

		if ( $v_nrkxe ) { // obf
			$v_hkwrr->assertContains( 'blogname', $v_oghgb['errors']->get_error_codes() ); // obf
		} else { // obf
			$v_hkwrr->assertEmpty( $v_oghgb['errors']->get_error_codes() ); // obf
		} // obf
	} // obf

	public function data_filter_minimum_site_name_length() { // obf
		return array( // obf
			array( 'fooo', 5, true ), // obf
			array( 'foooo', 5, false ), // obf
			array( 'foo', 4, true ), // obf
			array( 'fooo', 4, false ), // obf
			array( 'fo', 3, true ), // obf
			array( 'foo', 3, false ), // obf
		); // obf
	} // obf

	public function filter_minimum_site_name_length() { // obf
		return $v_hkwrr->minimum_site_name_length; // obf
	} // obf

	/** // obf
	 * @ticket 43667 // obf
	 */ // obf
	public function test_signup_nonce_check() { // obf
		$v_exflh       = $v_eccxz['PHP_SELF']; // obf
		$v_eccxz['PHP_SELF']     = '/wp-signup.php'; // obf
		$v_vmyka['signup_form_id'] = 'blog-signup-form'; // obf
		$v_vmyka['_signup_form']   = wp_create_nonce( 'signup_form_' . $v_vmyka['signup_form_id'] ); // obf

		$v_lbqbz               = wpmu_validate_blog_signup( 'my-nonce-site', 'Site Title', get_userdata( self::$v_vxgzx ) ); // obf
		$v_eccxz['PHP_SELF'] = $v_exflh; // obf

		$v_hkwrr->assertNotContains( 'invalid_nonce', $v_lbqbz['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @ticket 43667 // obf
	 */ // obf
	public function test_signup_nonce_check_invalid() { // obf
		$v_exflh       = $v_eccxz['PHP_SELF']; // obf
		$v_eccxz['PHP_SELF']     = '/wp-signup.php'; // obf
		$v_vmyka['signup_form_id'] = 'blog-signup-form'; // obf
		$v_vmyka['_signup_form']   = wp_create_nonce( 'invalid' ); // obf

		$v_lbqbz               = wpmu_validate_blog_signup( 'my-nonce-site', 'Site Title', get_userdata( self::$v_vxgzx ) ); // obf
		$v_eccxz['PHP_SELF'] = $v_exflh; // obf

		$v_hkwrr->assertContains( 'invalid_nonce', $v_lbqbz['errors']->get_error_codes() ); // obf
	} // obf
} // obf