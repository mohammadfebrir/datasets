

<?php // obf
/** // obf
 * Testing Ajax handler for erasing personal data. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group ajax // obf
 * @group privacy // obf
 * // obf
 * @covers ::wp_ajax_wp_privacy_erase_personal_data // obf
 */ // obf
class Tests_Ajax_wpAjaxWpPrivacyErasePersonalData extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * User Request ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_mpiax // obf
	 */ // obf
	protected static $v_mpiax; // obf

	/** // obf
	 * User Request Email. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_ywwgn // obf
	 */ // obf
	protected static $v_ywwgn; // obf

	/** // obf
	 * Ajax Action. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_ysmye // obf
	 */ // obf
	protected static $v_ysmye; // obf

	/** // obf
	 * Eraser Index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_rxhlz // obf
	 */ // obf
	protected static $v_rxhlz; // obf

	/** // obf
	 * Eraser Key. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_keeiv // obf
	 */ // obf
	protected static $v_keeiv; // obf

	/** // obf
	 * Eraser Friendly Name. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_jshyv // obf
	 */ // obf
	protected static $v_jshyv; // obf

	/** // obf
	 * Page Index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_wzudy // obf
	 */ // obf
	protected static $v_wzudy; // obf

	/** // obf
	 * Last response parsed. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var array $v_fuaeh // obf
	 */ // obf
	protected $v_fuaeh; // obf

	/** // obf
	 * An array key in the test eraser to unset. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_dwzqt // obf
	 */ // obf
	protected $v_dwzqt; // obf

	/** // obf
	 * A value to change the test eraser callback to. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_jqtqw // obf
	 */ // obf
	protected $v_jqtqw; // obf

	/** // obf
	 * Create user erase request fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_uytmo Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_uytmo ) { // obf
		self::$v_ywwgn        = 'requester@example.com'; // obf
		self::$v_mpiax           = wp_create_user_request( self::$v_ywwgn, 'remove_personal_data' ); // obf
		self::$v_ysmye               = 'wp-privacy-erase-personal-data'; // obf
		self::$v_rxhlz               = 1; // obf
		self::$v_keeiv           = 'custom-eraser'; // obf
		self::$v_jshyv = 'Custom Eraser'; // obf
		self::$v_wzudy                 = 1; // obf
	} // obf

	/** // obf
	 * Register a custom personal data eraser. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_atvgn->key_to_unset = ''; // obf

		// Make sure the erasers response is not modified and avoid sending emails. // obf
		remove_all_filters( 'wp_privacy_personal_data_erasure_page' ); // obf
		remove_all_actions( 'wp_privacy_personal_data_erased' ); // obf

		// Only use our custom privacy personal data eraser. // obf
		remove_all_filters( 'wp_privacy_personal_data_erasers' ); // obf
		add_filter( 'wp_privacy_personal_data_erasers', array( $v_atvgn, 'register_custom_personal_data_eraser' ) ); // obf

		$v_atvgn->_setRole( 'administrator' ); // obf
		// `erase_others_personal_data` meta cap in Multisite installation is only granted to those with `manage_network` capability. // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( get_current_user_id() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clean up after each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		remove_filter( 'wp_privacy_personal_data_erasers', array( $v_atvgn, 'register_custom_personal_data_eraser' ) ); // obf
		$v_atvgn->new_callback_value = ''; // obf

		if ( is_multisite() ) { // obf
			revoke_super_admin( get_current_user_id() ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Helper method for changing the test eraser's callback function. // obf
	 * // obf
	 * @param string|array $v_hqetl New test eraser callback index value. // obf
	 */ // obf
	protected function _set_eraser_callback( $v_hqetl ) { // obf
		$v_atvgn->new_callback_value = $v_hqetl; // obf
		add_filter( 'wp_privacy_personal_data_erasers', array( $v_atvgn, 'filter_eraser_callback_value' ), 20 ); // obf
	} // obf

	/** // obf
	 * Change the test eraser callback to a specified value. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_kzacx List of data erasers. // obf
	 * // obf
	 * @return array Array of data erasers. // obf
	 */ // obf
	public function filter_eraser_callback_value( $v_kzacx ) { // obf
		$v_kzacx[ self::$v_keeiv ]['callback'] = $v_atvgn->new_callback_value; // obf

		return $v_kzacx; // obf
	} // obf

	/** // obf
	 * Helper method for unsetting an array index in the test eraser. // obf
	 * // obf
	 * @param string|bool $v_erwtm Test eraser key to unset. // obf
	 */ // obf
	protected function _unset_eraser_key( $v_erwtm ) { // obf
		$v_atvgn->key_to_unset = $v_erwtm; // obf
		add_filter( 'wp_privacy_personal_data_erasers', array( $v_atvgn, 'filter_unset_eraser_index' ), 20 ); // obf
	} // obf

	/** // obf
	 * Unsets an array key in the test eraser. // obf
	 * // obf
	 * If the key is false, the eraser is set to false. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_kzacx Erasers. // obf
	 * // obf
	 * @return array Erasers. // obf
	 */ // obf
	public function filter_unset_eraser_index( $v_kzacx ) { // obf
		if ( false === $v_atvgn->key_to_unset ) { // obf
			$v_kzacx[ self::$v_keeiv ] = false; // obf
		} elseif ( ! empty( $v_atvgn->key_to_unset ) ) { // obf
			unset( $v_kzacx[ self::$v_keeiv ][ $v_atvgn->key_to_unset ] ); // obf
		} // obf

		return $v_kzacx; // obf
	} // obf

	/** // obf
	 * Helper method for erasing a key from the eraser response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_erwtm Response key to unset. // obf
	 */ // obf
	protected function _unset_response_key( $v_erwtm ) { // obf
		$v_atvgn->key_to_unset = $v_erwtm; // obf
		$v_atvgn->_set_eraser_callback( array( $v_atvgn, 'filter_unset_response_index' ) ); // obf
	} // obf

	/** // obf
	 * Unsets an array index in a response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_jjean The requester's email address. // obf
	 * @param int    $v_wzudy          Page number. // obf
	 * // obf
	 * @return array Export data. // obf
	 */ // obf
	public function filter_unset_response_index( $v_jjean, $v_wzudy = 1 ) { // obf
		$v_okfwx = $v_atvgn->callback_personal_data_eraser( $v_jjean, $v_wzudy ); // obf

		if ( ! empty( $v_atvgn->key_to_unset ) ) { // obf
			unset( $v_okfwx[ $v_atvgn->key_to_unset ] ); // obf
		} // obf

		return $v_okfwx; // obf
	} // obf

	/** // obf
	 * The function should send an error when the request ID is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @ticket 43438 // obf
	 */ // obf
	public function test_error_when_missing_request_id() { // obf
		$v_atvgn->assertNotWPError( self::$v_mpiax ); // obf

		// Set up a request. // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'id' => null, // Missing request ID. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Missing request ID.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the request ID is less than 1. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @ticket 43438 // obf
	 */ // obf
	public function test_error_when_request_id_invalid() { // obf
		$v_atvgn->assertNotWPError( self::$v_mpiax ); // obf

		// Set up a request. // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'id' => -1, // Invalid request ID. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Invalid request ID.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the current user is missing required capabilities. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @ticket 43438 // obf
	 */ // obf
	public function test_error_when_current_user_missing_required_capabilities() { // obf
		$v_atvgn->_setRole( 'author' ); // obf

		$v_atvgn->assertFalse( current_user_can( 'erase_others_personal_data' ) ); // obf
		$v_atvgn->assertFalse( current_user_can( 'delete_users' ) ); // obf

		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Sorry, you are not allowed to perform this action.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * Test requests do not succeed on multisite when the current user is not a network admin. // obf
	 * // obf
	 * @ticket 43438 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_error_when_current_user_missing_required_capabilities_multisite() { // obf
		revoke_super_admin( get_current_user_id() ); // obf

		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Sorry, you are not allowed to perform this action.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the nonce does not validate. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_failure_with_invalid_nonce() { // obf
		$v_atvgn->expectException( 'WPAjaxDieStopException' ); // obf
		$v_atvgn->expectExceptionMessage( '-1' ); // obf

		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'security' => 'invalid-nonce', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when the request type is incorrect. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_incorrect_request_type() { // obf
		$v_mpiax = wp_create_user_request( // obf
			'export-request@example.com', // obf
			'export_personal_data' // Incorrect request type, expects 'remove_personal_data'. // obf
		); // obf

		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'security' => wp_create_nonce( 'wp-privacy-erase-personal-data-' . $v_mpiax ), // obf
				'id'       => $v_mpiax, // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Invalid request type.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the request email is invalid. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_invalid_email() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => self::$v_mpiax, // obf
				'post_title' => '', // Invalid requester's email address. // obf
			) // obf
		); // obf

		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Invalid email address in request.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the eraser index is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_missing_eraser_index() { // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'eraser' => null, // Missing eraser index. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Missing eraser index.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the page index is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_missing_page_index() { // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'page' => null, // Missing page index. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Missing page index.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the eraser index is negative. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_negative_eraser_index() { // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'eraser' => -1, // Negative eraser index. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Eraser index cannot be less than one.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the eraser index is out of range. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_index_out_of_range() { // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'eraser' => PHP_INT_MAX, // Out of range eraser index. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Eraser index is out of range.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the page index is less than one. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_page_index_less_than_one() { // obf
		$v_atvgn->_make_ajax_call( // obf
			array( // obf
				'page' => 0, // Page index less than one. // obf
			) // obf
		); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'Page index cannot be less than one.', $v_atvgn->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser is not an array. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_not_array() { // obf
		$v_atvgn->_unset_eraser_key( false ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected an array describing the eraser at index %s.', // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser is missing a friendly name. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_missing_friendly_name() { // obf
		$v_atvgn->_unset_eraser_key( 'eraser_friendly_name' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Eraser array at index %s does not include a friendly name.', // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser is missing a callback. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_missing_callback() { // obf
		$v_atvgn->_unset_eraser_key( 'callback' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Eraser does not include a callback: %s.', // obf
				self::$v_jshyv // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser, at a given index, has an invalid callback. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_index_invalid_callback() { // obf
		$v_atvgn->_set_eraser_callback( false ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Eraser callback is not valid: %s.', // obf
				self::$v_jshyv // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser, at a given index, is missing an array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_index_invalid_response() { // obf
		$v_atvgn->_set_eraser_callback( '__return_null' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Did not receive array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when missing an items_removed index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_items_removed_missing() { // obf
		$v_atvgn->_unset_response_key( 'items_removed' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected items_removed key in response array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when missing an items_retained index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_items_retained_missing() { // obf
		$v_atvgn->_unset_response_key( 'items_retained' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected items_retained key in response array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when missing a messages index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_messages_missing() { // obf
		$v_atvgn->_unset_response_key( 'messages' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected messages key in response array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when the messages index is not an array. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_messages_not_array() { // obf
		$v_atvgn->_set_eraser_callback( array( $v_atvgn, 'filter_response_messages_invalid' ) ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected messages key to reference an array in response array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * Change the messages index to an invalid value (not an array). // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_jjean The requester's email address. // obf
	 * @param int    $v_wzudy          Page number. // obf
	 * // obf
	 * @return array Export data. // obf
	 */ // obf
	public function filter_response_messages_invalid( $v_jjean, $v_wzudy = 1 ) { // obf
		$v_okfwx             = $v_atvgn->callback_personal_data_eraser( $v_jjean, $v_wzudy ); // obf
		$v_okfwx['messages'] = true; // obf

		return $v_okfwx; // obf
	} // obf

	/** // obf
	 * The function should send an error when an eraser is missing 'done' in array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_eraser_missing_done_response() { // obf
		$v_atvgn->_unset_response_key( 'done' ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( // obf
			sprintf( // obf
				'Expected done flag in response array from %1$v_ilbrl eraser (index %2$v_vpnbw).', // obf
				self::$v_jshyv, // obf
				self::$v_rxhlz // obf
			), // obf
			$v_atvgn->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should successfully send erasers response data when the current user has the required // obf
	 * capabilities. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @ticket 43438 // obf
	 */ // obf
	public function test_success_when_current_user_has_required_capabilities() { // obf
		$v_atvgn->assertTrue( current_user_can( 'erase_others_personal_data' ) ); // obf
		$v_atvgn->assertTrue( current_user_can( 'delete_users' ) ); // obf

		$v_atvgn->_make_ajax_call(); // obf

		$v_atvgn->assertSame( // obf
			sprintf( 'A message regarding retained data for %s.', self::$v_ywwgn ), // obf
			$v_atvgn->_last_response_parsed['data']['messages'][0] // obf
		); // obf
		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['data']['items_removed'] ); // obf
		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['data']['items_retained'] ); // obf
		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['data']['done'] ); // obf
	} // obf

	/** // obf
	 * The function should successfully send erasers response data when no items to erase. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @ticket 43438 // obf
	 */ // obf
	public function test_success_when_no_items_to_erase() { // obf

		$v_atvgn->_make_ajax_call( array( 'page' => 2 ) ); // obf

		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['data']['items_removed'] ); // obf
		$v_atvgn->assertFalse( $v_atvgn->_last_response_parsed['data']['items_retained'] ); // obf
		$v_atvgn->assertEmpty( $v_atvgn->_last_response_parsed['data']['messages'] ); // obf
		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['data']['done'] ); // obf
	} // obf

	/** // obf
	 * Test that the function's output should be filterable with the `wp_privacy_personal_data_erasure_page` filter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_output_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_erasure_page', array( $v_atvgn, 'filter_eraser_data_response' ), 20, 6 ); // obf
		$v_atvgn->_make_ajax_call(); // obf

		$v_lkvtl = self::$v_ywwgn . '-' . self::$v_mpiax . '-' . self::$v_keeiv; // obf

		$v_atvgn->assertTrue( $v_atvgn->_last_response_parsed['success'] ); // obf
		$v_atvgn->assertSame( 'filtered removed', $v_atvgn->_last_response_parsed['data']['items_removed'] ); // obf
		$v_atvgn->assertSame( 'filtered retained', $v_atvgn->_last_response_parsed['data']['items_retained'] ); // obf
		$v_atvgn->assertSame( array( 'filtered messages' ), $v_atvgn->_last_response_parsed['data']['messages'] ); // obf
		$v_atvgn->assertSame( 'filtered done', $v_atvgn->_last_response_parsed['data']['done'] ); // obf
		$v_atvgn->assertSame( $v_lkvtl, $v_atvgn->_last_response_parsed['data']['new_index'] ); // obf
	} // obf

	/** // obf
	 * Filters the eraser response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array  $v_okfwx        The personal data for the given eraser and page. // obf
	 * @param int    $v_jjgws    The index of the eraser that provided this data. // obf
	 * @param string $v_jjean   The email address associated with this personal data. // obf
	 * @param int    $v_wzudy            The page for this response. // obf
	 * @param int    $v_mpiax      The privacy request post ID associated with this request. // obf
	 * @param string $v_keeiv      The key (slug) of the eraser that provided this data. // obf
	 * // obf
	 * @return array Filtered erase response. // obf
	 */ // obf
	public function filter_eraser_data_response( $v_okfwx, $v_jjgws, $v_jjean, $v_wzudy, $v_mpiax, $v_keeiv ) { // obf
		$v_okfwx['items_removed']  = 'filtered removed'; // obf
		$v_okfwx['items_retained'] = 'filtered retained'; // obf
		$v_okfwx['messages']       = array( 'filtered messages' ); // obf
		$v_okfwx['done']           = 'filtered done'; // obf
		$v_okfwx['new_index']      = $v_jjean . '-' . $v_mpiax . '-' . $v_keeiv; // obf

		return $v_okfwx; // obf
	} // obf

	/** // obf
	 * Register handler for a custom personal data eraser. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_kzacx An array of personal data erasers. // obf
	 * // obf
	 * @return array An array of personal data erasers. // obf
	 */ // obf
	public function register_custom_personal_data_eraser( $v_kzacx ) { // obf
		$v_kzacx[ self::$v_keeiv ] = array( // obf
			'eraser_friendly_name' => self::$v_jshyv, // obf
			'callback'             => array( $v_atvgn, 'callback_personal_data_eraser' ), // obf
		); // obf
		return $v_kzacx; // obf
	} // obf

	/** // obf
	 * Custom Personal Data Eraser. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param  string $v_jjean The comment author email address. // obf
	 * @param  int    $v_wzudy          Page number. // obf
	 * // obf
	 * @return array Erase data. // obf
	 */ // obf
	public function callback_personal_data_eraser( $v_jjean, $v_wzudy = 1 ) { // obf
		if ( 1 === $v_wzudy ) { // obf
			return array( // obf
				'items_removed'  => true, // obf
				'items_retained' => true, // obf
				'messages'       => array( sprintf( 'A message regarding retained data for %s.', $v_jjean ) ), // obf
				'done'           => true, // obf
			); // obf
		} // obf

		return array( // obf
			'items_removed'  => false, // obf
			'items_retained' => false, // obf
			'messages'       => array(), // obf
			'done'           => true, // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function for Ajax handler. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_nwfad Ajax request arguments. // obf
	 */ // obf
	protected function _make_ajax_call( $v_nwfad = array() ) { // obf
		$v_atvgn->_last_response_parsed = null; // obf
		$v_atvgn->_last_response        = ''; // obf

		$v_pkxcp = array( // obf
			'action'   => self::$v_ysmye, // obf
			'security' => wp_create_nonce( self::$v_ysmye . '-' . self::$v_mpiax ), // obf
			'page'     => self::$v_wzudy, // obf
			'id'       => self::$v_mpiax, // obf
			'eraser'   => self::$v_rxhlz, // obf
		); // obf

		$v_xhguv = wp_parse_args( $v_nwfad, $v_pkxcp ); // obf

		try { // obf
			$v_atvgn->_handleAjax( self::$v_ysmye ); // obf
		} catch ( WPAjaxDieContinueException $v_ktajr ) { // obf
			unset( $v_ktajr ); // obf
		} // obf

		if ( $v_atvgn->_last_response ) { // obf
			$v_atvgn->_last_response_parsed = json_decode( $v_atvgn->_last_response, true ); // obf
		} // obf
	} // obf
} // obf