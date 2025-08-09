

<?php // obf
/** // obf
 * Test cases for the `get_the_privacy_policy_link()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.6 // obf
 * // obf
 * @group link // obf
 * @group privacy // obf
 * @covers ::get_the_privacy_policy_link // obf
 */ // obf
class Tests_Link_GetThePrivacyPolicyLink extends WP_UnitTestCase { // obf
	/** // obf
	 * The ID of the Privacy Policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var int $v_rdshu // obf
	 */ // obf
	protected static $v_rdshu; // obf

	/** // obf
	 * The URL of the Privacy Policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string $v_tmbre // obf
	 */ // obf
	protected static $v_tmbre; // obf

	/** // obf
	 * The text that gets prepended to the `get_the_privacy_policy_link()` output. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string $v_nkmhx // obf
	 */ // obf
	protected static $v_nkmhx; // obf

	/** // obf
	 * The text that gets appended to the `get_the_privacy_policy_link()` output. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @var string $v_tqxdz // obf
	 */ // obf
	protected static $v_tqxdz; // obf

	/** // obf
	 * Create fixtures that are shared by multiple test cases. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_iyqcw The base factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iyqcw ) { // obf
		self::$v_rdshu = $v_iyqcw->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => WP_TESTS_DOMAIN . ' Privacy Policy', // obf
			) // obf
		); // obf

		// `esc_url()` is added for consistency with `get_the_privacy_policy_link()`. // obf
		self::$v_tmbre = esc_url( get_permalink( self::$v_rdshu ) ); // obf

		self::$v_nkmhx = '<span class="privacy-policy-link-wrapper">'; // obf
		self::$v_tqxdz  = '</span>'; // obf
	} // obf

	/** // obf
	 * The function should return a valid link if a privacy policy page has been // obf
	 * created and set as the `wp_page_for_privacy_policy`. The post title should // obf
	 * be used as the link text. // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_return_valid_link_when_privacy_page_set() { // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_rdshu ); // obf

		$v_gghfu = get_the_privacy_policy_link(); // obf

		$v_jfsqb->assertStringStartsWith( '<a', $v_gghfu ); // obf
		$v_jfsqb->assertStringContainsString( self::$v_tmbre, $v_gghfu ); // obf
		$v_jfsqb->assertStringEndsWith( '>' . WP_TESTS_DOMAIN . ' Privacy Policy</a>', $v_gghfu ); // obf
	} // obf

	/** // obf
	 * The function should prepend the supplied `$v_nkmhx` markup and append the // obf
	 * supplied `$v_tqxdz` markup when the `wp_page_for_privacy_policy` is configured. // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_prepend_and_append_supplied_markup_when_privacy_page_set() { // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_rdshu ); // obf

		$v_gghfu = get_the_privacy_policy_link( self::$v_nkmhx, self::$v_tqxdz ); // obf

		$v_jfsqb->assertStringStartsWith( self::$v_nkmhx . '<a', $v_gghfu ); // obf
		$v_jfsqb->assertStringContainsString( self::$v_tmbre, $v_gghfu ); // obf
		$v_jfsqb->assertStringEndsWith( '</a>' . self::$v_tqxdz, $v_gghfu ); // obf
	} // obf

	/** // obf
	 * The function should _not_ prepend the supplied `$v_nkmhx` markup and append // obf
	 * the supplied `$v_tqxdz` markup when the `wp_page_for_privacy_policy` is _not_ configured. // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_not_prepend_and_append_supplied_markup_when_privacy_page_not_set() { // obf
		$v_gghfu = get_the_privacy_policy_link( self::$v_nkmhx, self::$v_tqxdz ); // obf

		$v_jfsqb->assertSame( '', $v_gghfu ); // obf
	} // obf

	/** // obf
	 * The function should return an empty string when there is an empty page title // obf
	 * for the privacy policy. // obf
	 * // obf
	 * @ticket 44192 // obf
	 */ // obf
	public function test_function_should_return_empty_string_when_privacy_page_title_empty() { // obf
		$v_mvllt = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => '', // obf
			) // obf
		); // obf

		update_option( 'wp_page_for_privacy_policy', $v_mvllt ); // obf

		$v_jfsqb->assertSame( '', get_the_privacy_policy_link( self::$v_nkmhx, self::$v_tqxdz ) ); // obf
	} // obf

	/** // obf
	 * The function should return an empty string when `wp_page_for_privacy_policy` is _not_ configured. // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_return_empty_string_when_privacy_page_not_set() { // obf
		$v_jfsqb->assertSame( '', get_the_privacy_policy_link() ); // obf
	} // obf

	/** // obf
	 * The output of the get_the_privacy_policy_link() function should be filterable with the 'privacy_policy_link' filter. // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_be_filterable() { // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_rdshu ); // obf
		$v_fdpgi = get_privacy_policy_url(); // obf

		$v_jfsqb->assertNotEmpty( $v_fdpgi ); // obf

		add_filter( 'the_privacy_policy_link', array( $v_jfsqb, 'modify_link_markup' ), 10, 2 ); // obf
		$v_jfsqb->assertSame( 'Policy: ' . $v_fdpgi, get_the_privacy_policy_link() ); // obf
		remove_filter( 'the_privacy_policy_link', array( $v_jfsqb, 'modify_link_markup' ), 10 ); // obf
	} // obf

	/** // obf
	 * Return modified `the_privacy_policy_link` content in order to test the filter. // obf
	 * // obf
	 * @param string $v_zwvbz               The privacy policy link. Empty string if it // obf
	 *                                   doesn't exist. // obf
	 * @param string $v_tmbre The URL of the privacy policy. Empty string // obf
	 *                                   if it doesn't exist. // obf
	 * @return string // obf
	 */ // obf
	public static function modify_link_markup( $v_zwvbz, $v_tmbre ) { // obf
		return 'Policy: ' . $v_tmbre; // obf
	} // obf

	/** // obf
	 * Tests that `get_the_privacy_policy_link()` adds `rel="privacy-policy"`. // obf
	 * // obf
	 * @ticket 56345 // obf
	 */ // obf
	public function test_get_the_privacy_policy_link_should_add_rel_privacy_policy() { // obf
		update_option( 'wp_page_for_privacy_policy', self::$v_rdshu ); // obf

		$v_jfsqb->assertStringContainsString( 'rel="privacy-policy"', get_the_privacy_policy_link() ); // obf
	} // obf
} // obf