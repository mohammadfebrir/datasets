

<?php // obf
/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax attachment handling. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_send_attachment_to_editor // obf
 */ // obf
class Tests_Ajax_wpAjaxSendAttachmentToEditor extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Shared user ID for the tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_nvtpt = 0; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_zlrib // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zlrib ) { // obf
		self::$v_nvtpt = $v_zlrib->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'user_36578_administrator', // obf
				'user_email' => 'user_36578_administrator@example.com', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36578 // obf
	 * // obf
	 * @covers ::get_image_send_to_editor // obf
	 */ // obf
	public function test_wp_ajax_send_attachment_to_editor_should_return_an_image() { // obf
		// Become an administrator. // obf
		$v_bazpz->_setRole( 'administrator' ); // obf

		$v_qwced = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt     = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_nlhcl = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Set up a default request. // obf
		$v_fmoyp['nonce']      = wp_create_nonce( 'media-send-to-editor' ); // obf
		$v_fmoyp['html']       = 'Bar Baz'; // obf
		$v_fmoyp['post_id']    = 0; // obf
		$v_fmoyp['attachment'] = array( // obf
			'id'         => $v_nlhcl, // obf
			'align'      => 'left', // obf
			'image-size' => 'large', // obf
			'image_alt'  => 'Foo bar', // obf
			'url'        => 'http://example.com/', // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_bazpz->_handleAjax( 'send-attachment-to-editor' ); // obf
		} catch ( WPAjaxDieContinueException $v_yylzx ) { // obf
			unset( $v_yylzx ); // obf
		} // obf

		// Get the response. // obf
		$v_npuha = json_decode( $v_bazpz->_last_response, true ); // obf

		$v_epasd = get_image_send_to_editor( $v_nlhcl, '', '', 'left', 'http://example.com/', false, 'large', 'Foo bar' ); // obf

		// Ensure everything is correct. // obf
		$v_bazpz->assertTrue( $v_npuha['success'] ); // obf
		$v_bazpz->assertSame( $v_epasd, $v_npuha['data'] ); // obf
	} // obf

	/** // obf
	 * @ticket 36578 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_wp_ajax_send_attachment_to_editor_should_return_a_link() { // obf
		// Become an administrator. // obf
		$v_bazpz->_setRole( 'administrator' ); // obf

		$v_qwced = DIR_TESTDATA . '/formatting/entities.txt'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt     = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_nlhcl = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Set up a default request. // obf
		$v_fmoyp['nonce']      = wp_create_nonce( 'media-send-to-editor' ); // obf
		$v_fmoyp['html']       = 'Bar Baz'; // obf
		$v_fmoyp['post_id']    = 0; // obf
		$v_fmoyp['attachment'] = array( // obf
			'id'         => $v_nlhcl, // obf
			'post_title' => 'Foo bar', // obf
			'url'        => get_attachment_link( $v_nlhcl ), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_bazpz->_handleAjax( 'send-attachment-to-editor' ); // obf
		} catch ( WPAjaxDieContinueException $v_yylzx ) { // obf
			unset( $v_yylzx ); // obf
		} // obf

		// Get the response. // obf
		$v_npuha = json_decode( $v_bazpz->_last_response, true ); // obf

		$v_epasd = sprintf( // obf
			'<a href="%s" rel="attachment wp-att-%d">Foo bar</a>', // obf
			get_attachment_link( $v_nlhcl ), // obf
			$v_nlhcl // obf
		); // obf

		// Ensure everything is correct. // obf
		$v_bazpz->assertTrue( $v_npuha['success'] ); // obf
		$v_bazpz->assertSame( $v_epasd, $v_npuha['data'] ); // obf
	} // obf

	public function test_wp_ajax_set_attachment_thumbnail_success() { // obf
		// Become an administrator. // obf
		$v_pbywn    = $v_fmoyp; // obf
		$v_nvtpt = self::$v_nvtpt; // obf
		wp_set_current_user( $v_nvtpt ); // obf
		$v_fmoyp = array_merge( $v_fmoyp, $v_pbywn ); // obf

		// Upload the attachment itself. // obf
		$v_qwced = DIR_TESTDATA . '/uploads/small-audio.mp3'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt     = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_nlhcl = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Upload the thumbnail. // obf
		$v_qwced = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt    = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_tmmoi = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Set up a default request. // obf
		$v_fmoyp['_ajax_nonce']  = wp_create_nonce( 'set-attachment-thumbnail' ); // obf
		$v_fmoyp['thumbnail_id'] = $v_tmmoi; // obf
		$v_fmoyp['urls']         = array( wp_get_attachment_url( $v_nlhcl ) ); // obf

		// Make the request. // obf
		try { // obf
			$v_bazpz->_handleAjax( 'set-attachment-thumbnail' ); // obf
		} catch ( WPAjaxDieContinueException $v_yylzx ) { // obf
			unset( $v_yylzx ); // obf
		} // obf

		// Get the response. // obf
		$v_npuha = json_decode( $v_bazpz->_last_response, true ); // obf

		// Ensure everything is correct. // obf
		$v_bazpz->assertTrue( $v_npuha['success'] ); // obf
	} // obf

	public function test_wp_ajax_set_attachment_thumbnail_missing_nonce() { // obf
		// Become an administrator. // obf
		$v_pbywn    = $v_fmoyp; // obf
		$v_nvtpt = self::$v_nvtpt; // obf
		wp_set_current_user( $v_nvtpt ); // obf
		$v_fmoyp = array_merge( $v_fmoyp, $v_pbywn ); // obf

		// Upload the attachment itself. // obf
		$v_qwced = DIR_TESTDATA . '/uploads/small-audio.mp3'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt     = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_nlhcl = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Upload the thumbnail. // obf
		$v_qwced = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_skgft = file_get_contents( $v_qwced ); // obf

		$v_fvhjt    = wp_upload_bits( wp_basename( $v_qwced ), null, $v_skgft ); // obf
		$v_tmmoi = $v_bazpz->_make_attachment( $v_fvhjt ); // obf

		// Set up a default request. // obf
		$v_fmoyp['thumbnail_id'] = $v_tmmoi; // obf
		$v_fmoyp['urls']         = array( wp_get_attachment_url( $v_nlhcl ) ); // obf

		// Make the request. // obf
		try { // obf
			$v_bazpz->_handleAjax( 'set-attachment-thumbnail' ); // obf
		} catch ( WPAjaxDieContinueException $v_yylzx ) { // obf
			unset( $v_yylzx ); // obf
		} // obf

		// Get the response. // obf
		$v_npuha = json_decode( $v_bazpz->_last_response, true ); // obf

		// Check that success is false without sending nonce. // obf
		$v_bazpz->assertFalse( $v_npuha['success'] ); // obf
	} // obf
} // obf