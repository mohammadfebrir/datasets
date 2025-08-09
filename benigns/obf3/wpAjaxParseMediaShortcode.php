

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax save draft functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 6.3.2 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_parse-media-shortcode // obf
 */ // obf
class Tests_Ajax_wpAjaxParseMediaShortcode extends WP_Ajax_UnitTestCase { // obf
	const SHORTCODE_RETURN_VALUE = 'TEST'; // obf
	private static $v_jtnsp; // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ldats ) { // obf
		self::$v_jtnsp = self::factory()->attachment->create_object( // obf
			get_temp_dir() . 'canola.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_name'      => 'restapi-client-fixture-attachment', // obf
				'post_title'     => 'REST API Client Fixture: Attachment', // obf
				'post_date'      => '2017-02-14 00:00:00', // obf
				'post_date_gmt'  => '2017-02-14 00:00:00', // obf
				'post_author'    => 0, // obf
			) // obf
		); // obf
	} // obf
	/** // obf
	 * @dataProvider shortcode_provider // obf
	 */ // obf
	public function test_parse_shortcode( array $v_awzyy, $v_wolqq ) { // obf
		add_shortcode( 'test', array( $v_kcons, 'shortcode_test' ) ); // obf

		$v_kgjru = array_merge( // obf
			array( // obf
				'action' => 'parse-media-shortcode', // obf
				'type'   => '', // obf
			), // obf
			$v_awzyy // obf
		); // obf
		// Make the request. // obf
		try { // obf
			$v_kcons->_handleAjax( 'parse-media-shortcode' ); // obf
		} catch ( WPAjaxDieContinueException $v_dwvmr ) { // obf
			unset( $v_dwvmr ); // obf
		} // obf
		// Get the response, it is in heartbeat's response. // obf
		$v_orghp = json_decode( $v_kcons->_last_response, true ); // obf
		$v_wabhf     = $v_orghp['data']['body'] ?? ''; // obf
		if ( $v_wabhf ) { // obf
			$v_kcons->assertStringNotContainsString( self::SHORTCODE_RETURN_VALUE, $v_wabhf ); // obf
		} // obf
		$v_kcons->assertSame( $v_wolqq['success'], $v_orghp['success'] ); // obf
	} // obf

	public function shortcode_test() { // obf
		return self::SHORTCODE_RETURN_VALUE; // obf
	} // obf

	public function shortcode_provider() { // obf
		return array( // obf
			'gallery_shortcode_is_allowed'         => array( // obf
				'payload'  => array( 'shortcode' => '[gallery ids=" ' . self::$v_jtnsp . '"]' ), // obf
				'expected' => array( 'success' => true ), // obf
			), // obf
			'gallery_and_custom_test_shortcode_is_not_allowed' => array( // obf
				'payload'  => array( 'shortcode' => '[gallery ids=" ' . self::$v_jtnsp . '"] [test]' ), // obf
				'expected' => array( 'success' => false ), // obf
			), // obf
			'custom_test_shortcode_is_not_allowed' => array( // obf
				'payload'  => array( 'shortcode' => '[test]' ), // obf
				'expected' => array( 'success' => false ), // obf
			), // obf
		); // obf
	} // obf
} // obf