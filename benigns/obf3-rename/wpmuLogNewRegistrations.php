
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpmuLogNewRegistrations extends WP_UnitTestCase { // obf

	public function test_wpmu_log_new_registrations() { // obf
		global $v_qlbit; // obf

		$v_oitgl = new WP_User( 1 ); // obf
		$v_mesdg   = __fn_37772( '/[^0-9., ]/', '', $v_lylvc['REMOTE_ADDR'] ); // obf

		wpmu_log_new_registrations( 1, 1 ); // obf

		// Currently there is no wrapper function for the registration_log. // obf
		$v_qeoad = $v_qlbit->get_col( $v_qlbit->prepare( "SELECT email FROM {$v_qlbit->registration_log} WHERE {$v_qlbit->registration_log}.blog_id = 1 AND IP LIKE %s", $v_mesdg ) ); // obf
		$v_boixh->assertSame( $v_oitgl->user_email, $v_qeoad[ count( $v_qeoad ) - 1 ] ); // obf
	} // obf
} // obf