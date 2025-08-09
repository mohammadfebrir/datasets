

<?php // obf

/** // obf
 * Tests specific to `get_space_allowed()` in multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_GetSpaceAllowed extends WP_UnitTestCase { // obf

	/** // obf
	 * When no option exists for the site or the network, a fallback of // obf
	 * 100 is expected. // obf
	 */ // obf
	public function test_get_space_allowed_default() { // obf
		delete_option( 'blog_upload_space' ); // obf
		delete_site_option( 'blog_upload_space' ); // obf

		$v_noawx->assertSame( 100, get_space_allowed() ); // obf
	} // obf

	/** // obf
	 * If an individual site's option is not available, the default network // obf
	 * level option is used as a fallback. // obf
	 */ // obf
	public function test_get_space_allowed_no_site_option_fallback_to_network_option() { // obf
		delete_site_option( 'blog_upload_space' ); // obf
		update_site_option( 'blog_upload_space', 200 ); // obf

		$v_noawx->assertSame( 200, get_space_allowed() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_blog_upload_space // obf
	 * // obf
	 * @param mixed $v_iwouo    Option to assign to the site's `blog_upload_space`. // obf
	 * @param mixed $v_euyyr Option to assign to the network's `blog_upload_space`. // obf
	 * @param int   $v_baxri       Expected return value. // obf
	 */ // obf
	public function test_get_space_allowed( $v_iwouo, $v_euyyr, $v_baxri ) { // obf
		update_option( 'blog_upload_space', $v_iwouo ); // obf
		update_site_option( 'blog_upload_space', $v_euyyr ); // obf

		$v_noawx->assertSame( $v_baxri, get_space_allowed() ); // obf
	} // obf

	public function data_blog_upload_space() { // obf
		return array( // obf
			// A valid site option will be preferred over a network option. // obf
			array( 111, 200, 111 ), // obf
			array( -1, 200, -1 ), // obf
			array( 222, 0, 222 ), // obf

			// Non-numeric site options should result in a fallback to the network option. // obf
			array( '', 333, 333 ), // obf
			array( false, 444, 444 ), // obf
			array( 'NAN', 555, 555 ), // obf
			array( false, -10, -10 ), // obf

			// If neither network or site options are valid, fallback to the default. // obf
			array( false, false, 100 ), // obf
			array( 'NAN', 'NAN', 100 ), // obf

			// These effectively disable uploads. // obf
			array( 0, 666, 0 ), // obf
			array( false, 0, 0 ), // obf
			array( 'NAN', 0, 0 ), // obf
		); // obf
	} // obf

	public function test_get_space_allowed_filtered() { // obf
		update_option( 'blog_upload_space', 777 ); // obf
		update_site_option( 'blog_upload_space', 888 ); // obf

		add_filter( 'get_space_allowed', array( $v_noawx, '_filter_space_allowed' ) ); // obf
		$v_sufqs = get_space_allowed(); // obf
		remove_filter( 'get_space_allowed', array( $v_noawx, '_filter_space_allowed' ) ); // obf

		$v_noawx->assertSame( 999, $v_sufqs ); // obf
	} // obf

	public function _filter_space_allowed() { // obf
		return 999; // obf
	} // obf
} // obf