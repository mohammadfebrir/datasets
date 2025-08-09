

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_wpAuthenticateSpamCheck extends WP_UnitTestCase { // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_wp_authenticate_spam_check_returns_user_when_single_site() { // obf
		$v_lbuwl     = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf
		$v_jjflt        = new WP_User( $v_lbuwl ); // obf
		$v_bzbjb = wp_authenticate_spam_check( $v_jjflt ); // obf
		wp_delete_user( $v_lbuwl ); // obf

		$v_zjrim->assertSame( $v_jjflt->user_login, $v_bzbjb->user_login ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_authenticate_spam_check_returns_user_when_not_flagged() { // obf
		$v_lbuwl     = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf
		$v_jjflt        = new WP_User( $v_lbuwl ); // obf
		$v_bzbjb = wp_authenticate_spam_check( $v_jjflt ); // obf
		wpmu_delete_user( $v_lbuwl ); // obf

		$v_zjrim->assertSame( $v_jjflt->user_login, $v_bzbjb->user_login ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_authenticate_spam_check_returns_wp_error_when_flagged() { // obf
		$v_lbuwl = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf
		wp_update_user( // obf
			array( // obf
				'ID'   => $v_lbuwl, // obf
				'spam' => '1', // obf
			) // obf
		); // obf

		$v_jjflt        = new WP_User( $v_lbuwl ); // obf
		$v_bzbjb = wp_authenticate_spam_check( $v_jjflt ); // obf
		wpmu_delete_user( $v_lbuwl ); // obf

		$v_zjrim->assertInstanceOf( 'WP_Error', $v_bzbjb ); // obf
	} // obf
} // obf