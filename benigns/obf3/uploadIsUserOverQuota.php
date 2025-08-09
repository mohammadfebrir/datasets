

<?php // obf

/** // obf
 * Tests specific to `upload_is_user_over_quota()` in multisite. // obf
 * // obf
 * These tests filter `get_space_allowed` and `pre_get_space_used` in // obf
 * most cases as those are tested elsewhere. // obf
 * // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_UploadIsUserOverQuota extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		update_site_option( 'upload_space_check_disabled', false ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_0_used_5() { // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_5' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', '__return_zero' ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_5' ) ); // obf

		$v_nlvmc->assertTrue( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_0_used_0() { // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		add_filter( 'pre_get_space_used', '__return_zero' ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', '__return_zero' ); // obf
		remove_filter( 'pre_get_space_used', '__return_zero' ); // obf

		$v_nlvmc->assertFalse( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_0_used_100() { // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', '__return_zero' ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf

		$v_nlvmc->assertTrue( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_100_used_0() { // obf
		add_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		add_filter( 'pre_get_space_used', '__return_zero' ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		remove_filter( 'pre_get_space_used', '__return_zero' ); // obf

		$v_nlvmc->assertFalse( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_100_used_100() { // obf
		add_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf

		$v_nlvmc->assertFalse( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_100_used_200() { // obf
		add_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_200' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_200' ) ); // obf

		$v_nlvmc->assertTrue( $v_verpo ); // obf
	} // obf

	public function test_upload_is_user_over_quota_allowed_negative_used_100() { // obf
		add_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_negative' ) ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_negative' ) ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_100' ) ); // obf

		$v_nlvmc->assertTrue( $v_verpo ); // obf
	} // obf

	/** // obf
	 * When the upload space check is disabled, using more than the available // obf
	 * quota is allowed. // obf
	 */ // obf
	public function test_upload_is_user_over_check_disabled() { // obf
		update_site_option( 'upload_space_check_disabled', true ); // obf

		add_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		add_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_200' ) ); // obf
		$v_verpo = upload_is_user_over_quota( false ); // obf
		remove_filter( 'get_space_allowed', array( $v_nlvmc, '_filter_space_100' ) ); // obf
		remove_filter( 'pre_get_space_used', array( $v_nlvmc, '_filter_space_200' ) ); // obf

		$v_nlvmc->assertFalse( $v_verpo ); // obf
	} // obf

	public function _filter_space_5() { // obf
		return 5; // obf
	} // obf

	public function _filter_space_100() { // obf
		return 100; // obf
	} // obf

	public function _filter_space_200() { // obf
		return 200; // obf
	} // obf

	public function _filter_space_negative() { // obf
		return -1; // obf
	} // obf
} // obf