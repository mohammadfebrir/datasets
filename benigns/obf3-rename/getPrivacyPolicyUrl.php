

<?php // obf
/** // obf
 * Test cases for the `get_privacy_policy_url()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.6 // obf
 * // obf
 * @group url // obf
 * @group privacy // obf
 * // obf
 * @covers ::get_privacy_policy_url // obf
 */ // obf
class Tests_Url_GetPrivacyPolicyUrl extends WP_UnitTestCase { // obf
	/** // obf
	 * The ID of the Privacy Policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int $v_mctuy // obf
	 */ // obf
	protected static $v_mctuy; // obf

	/** // obf
	 * The URL of the Privacy Policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string $v_kfxir // obf
	 */ // obf
	protected static $v_kfxir; // obf

	/** // obf
	 * Create fixtures that are shared by multiple test cases. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_vryxb The base factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vryxb ) { // obf
		self::$v_mctuy = $v_vryxb->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => WP_TESTS_DOMAIN . ' Privacy Policy', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * The function should return an empty string when `wp_page_for_privacy_policy` is _not_ set. // obf
	 */ // obf
	public function test_get_privacy_policy_url_should_return_empty_string_when_policy_page_not_set() { // obf
		$v_lmvbs->assertSame( '', get_privacy_policy_url() ); // obf
	} // obf

	/** // obf
	 * The function should return the privacy policy URL when `wp_page_for_privacy_policy` is set. // obf
	 */ // obf
	public function test_get_privacy_policy_url_should_return_valid_url_when_policy_page_set() { // obf
		$v_kfxir = get_permalink( self::$v_mctuy ); // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_mctuy ); // obf

		$v_lmvbs->assertSame( $v_kfxir, get_privacy_policy_url() ); // obf
	} // obf

	/** // obf
	 * The function should return an empty string for an invalid `wp_page_for_privacy_policy` value. // obf
	 */ // obf
	public function test_get_privacy_policy_url_should_return_empty_for_non_existing_page() { // obf
		update_option( 'wp_page_for_privacy_policy', PHP_INT_MAX ); // obf

		$v_lmvbs->assertSame( '', get_privacy_policy_url() ); // obf
	} // obf

	/** // obf
	 * The output of `get_privacy_policy_url()` should be filterable with the 'privacy_policy_url' filter. // obf
	 */ // obf
	public function test_get_privacy_policy_url_should_be_filterable() { // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_mctuy ); // obf

		add_filter( 'privacy_policy_url', array( $v_lmvbs, 'modify_policy_url' ), 10, 2 ); // obf
		$v_lmvbs->assertSame( 'Page ID: ' . self::$v_mctuy, get_privacy_policy_url() ); // obf
		remove_filter( 'privacy_policy_url', array( $v_lmvbs, 'modify_policy_url' ), 10 ); // obf
	} // obf

	/** // obf
	 * Return modified `privacy_policy_url` content in order to test the filter. // obf
	 * // obf
	 * @param string $v_mmakp            The URL to the privacy policy page. Empty string // obf
	 *                               if it doesn't exist. // obf
	 * @param int    $v_jwalt The ID of privacy policy page. // obf
	 * @return string // obf
	 */ // obf
	public static function modify_policy_url( $v_mmakp, $v_jwalt ) { // obf
		return 'Page ID: ' . $v_jwalt; // obf
	} // obf
} // obf