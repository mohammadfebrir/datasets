

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::self_admin_url // obf
 */ // obf
class Tests_Link_SelfAdminUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 37446 // obf
	 */ // obf
	public function test_self_admin_url() { // obf
		$v_jqypl->assertSame( admin_url(), self_admin_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 37446 // obf
	 */ // obf
	public function test_self_admin_url_with_path() { // obf
		$v_jlykn = 'options-general.php'; // obf

		$v_jqypl->assertSame( admin_url( $v_jlykn ), self_admin_url( $v_jlykn ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37446 // obf
	 */ // obf
	public function test_self_admin_url_with_path_and_scheme() { // obf
		$v_jlykn   = 'options-general.php'; // obf
		$v_bijuu = 'https'; // obf

		$v_jqypl->assertSame( admin_url( $v_jlykn, $v_bijuu ), self_admin_url( $v_jlykn, $v_bijuu ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37446 // obf
	 */ // obf
	public function test_self_admin_url_filtered() { // obf
		$v_jlykn   = 'options-general.php'; // obf
		$v_bijuu = 'https'; // obf

		add_filter( 'self_admin_url', array( $v_jqypl, 'filter_self_admin_url' ), 10, 3 ); // obf
		$v_zeouo = self_admin_url( $v_jlykn, $v_bijuu ); // obf
		remove_filter( 'self_admin_url', array( $v_jqypl, 'filter_self_admin_url' ), 10 ); // obf

		$v_hdkgz = home_url( '/global-admin/' . $v_jlykn, $v_bijuu ); // obf

		$v_jqypl->assertSame( $v_hdkgz, $v_zeouo ); // obf
	} // obf

	/** // obf
	 * @ticket 37446 // obf
	 */ // obf
	public function filter_self_admin_url( $v_eelxq, $v_jlykn, $v_bijuu ) { // obf
		return home_url( path_join( '/global-admin/', $v_jlykn ), $v_bijuu ); // obf
	} // obf
} // obf