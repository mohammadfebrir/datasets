

<?php // obf
/** // obf
 * Testing Ajax handler for exporting personal data. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group ajax // obf
 * @group privacy // obf
 * // obf
 * @covers ::wp_ajax_wp_privacy_export_personal_data // obf
 */ // obf
class Tests_Ajax_wpAjaxWpPrivacyExportPersonalData extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * User Request ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_ibleg // obf
	 */ // obf
	protected static $v_ibleg; // obf

	/** // obf
	 * User Request Email. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_uxksn // obf
	 */ // obf
	protected static $v_uxksn; // obf

	/** // obf
	 * Ajax Action. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_sgdav // obf
	 */ // obf
	protected static $v_sgdav; // obf

	/** // obf
	 * Exporter Index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_dyxeu // obf
	 */ // obf
	protected static $v_dyxeu; // obf

	/** // obf
	 * Exporter Key. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_wuulc // obf
	 */ // obf
	protected static $v_wuulc; // obf

	/** // obf
	 * Exporter Friendly Name. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_tmuyj // obf
	 */ // obf
	protected static $v_tmuyj; // obf

	/** // obf
	 * Page Index. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_maexx // obf
	 */ // obf
	protected static $v_maexx; // obf

	/** // obf
	 * Send As Email. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var bool $v_dsaie // obf
	 */ // obf
	protected static $v_dsaie; // obf

	/** // obf
	 * Last response parsed. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var array $v_oenma // obf
	 */ // obf
	protected $v_oenma; // obf

	/** // obf
	 * An array key in the test exporter to unset. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_wyrfd // obf
	 */ // obf
	protected $v_wyrfd; // obf

	/** // obf
	 * A value to change the test exporter callback to. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_wqcjh // obf
	 */ // obf
	protected $v_wqcjh; // obf

	/** // obf
	 * Create user export request fixtures. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_rpnxu Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rpnxu ) { // obf
		self::$v_uxksn          = 'requester@example.com'; // obf
		self::$v_ibleg             = wp_create_user_request( self::$v_uxksn, 'export_personal_data' ); // obf
		self::$v_sgdav                 = 'wp-privacy-export-personal-data'; // obf
		self::$v_dyxeu               = 1; // obf
		self::$v_wuulc           = 'custom-exporter'; // obf
		self::$v_tmuyj = 'Custom Exporter'; // obf
		self::$v_maexx                   = 1; // obf
		self::$v_dsaie          = false; // obf
	} // obf

	/** // obf
	 * Setup before each test method. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_dvlwt->key_to_unset       = ''; // obf
		$v_dvlwt->new_callback_value = ''; // obf

		// Make sure the exporter response is not modified and avoid e.g. writing export file to disk. // obf
		remove_all_filters( 'wp_privacy_personal_data_export_page' ); // obf

		// Only use our custom privacy personal data exporter. // obf
		remove_all_filters( 'wp_privacy_personal_data_exporters' ); // obf
		add_filter( 'wp_privacy_personal_data_exporters', array( $v_dvlwt, 'filter_register_custom_personal_data_exporter' ) ); // obf

		$v_dvlwt->_setRole( 'administrator' ); // obf
		// `export_others_personal_data` meta cap in Multisite installation is only granted to those with `manage_network` capability. // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( get_current_user_id() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clean up after each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		remove_filter( 'wp_privacy_personal_data_exporters', array( $v_dvlwt, 'filter_register_custom_personal_data_exporter' ) ); // obf

		if ( is_multisite() ) { // obf
			revoke_super_admin( get_current_user_id() ); // obf
		} // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Helper method for changing the test exporter's callback function. // obf
	 * // obf
	 * @param string|array $v_kfdcu New test exporter callback function. // obf
	 */ // obf
	protected function _set_exporter_callback( $v_kfdcu ) { // obf
		$v_dvlwt->new_callback_value = $v_kfdcu; // obf
		add_filter( 'wp_privacy_personal_data_exporters', array( $v_dvlwt, 'filter_exporter_callback_value' ), 20 ); // obf
	} // obf

	/** // obf
	 * Change the test exporter callback to a specified value. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_etymz List of data exporters. // obf
	 * @return array List of data exporters. // obf
	 */ // obf
	public function filter_exporter_callback_value( $v_etymz ) { // obf
		$v_etymz[ self::$v_wuulc ]['callback'] = $v_dvlwt->new_callback_value; // obf

		return $v_etymz; // obf
	} // obf

	/** // obf
	 * Helper method for unsetting an array index in the test exporter. // obf
	 * // obf
	 * @param string $v_andid Test exporter key to unset. // obf
	 */ // obf
	protected function _unset_exporter_key( $v_andid ) { // obf
		$v_dvlwt->key_to_unset = $v_andid; // obf
		add_filter( 'wp_privacy_personal_data_exporters', array( $v_dvlwt, 'filter_unset_exporter_key' ), 20 ); // obf
	} // obf

	/** // obf
	 * Unset a specified key in the test exporter array. // obf
	 * // obf
	 * @param array $v_etymz List of data exporters. // obf
	 * // obf
	 * @return array List of data exporters. // obf
	 */ // obf
	public function filter_unset_exporter_key( $v_etymz ) { // obf
		if ( false === $v_dvlwt->key_to_unset ) { // obf
			$v_etymz[ self::$v_wuulc ] = false; // obf
		} elseif ( ! empty( $v_dvlwt->key_to_unset ) ) { // obf
			unset( $v_etymz[ self::$v_wuulc ][ $v_dvlwt->key_to_unset ] ); // obf
		} // obf

		return $v_etymz; // obf
	} // obf

	/** // obf
	 * The function should send an error when the request ID is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_missing_request_id() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'id' => null, // Missing request ID. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Missing request ID.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the request ID is less than 1. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_invalid_id() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'id' => -1, // Invalid request ID, less than 1. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Invalid request ID.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the current user is missing the required capability. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_current_user_missing_required_capability() { // obf
		$v_dvlwt->_setRole( 'author' ); // obf

		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertFalse( current_user_can( 'export_others_personal_data' ) ); // obf
		$v_dvlwt->assertSame( 'Sorry, you are not allowed to perform this action.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * Test requests do not succeed on multisite when the current user is not a network admin. // obf
	 * // obf
	 * @ticket 43438 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_error_when_current_user_missing_required_capability_multisite() { // obf
		revoke_super_admin( get_current_user_id() ); // obf

		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Sorry, you are not allowed to perform this action.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the nonce does not validate. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_failure_with_invalid_nonce() { // obf
		$v_dvlwt->expectException( 'WPAjaxDieStopException' ); // obf
		$v_dvlwt->expectExceptionMessage( '-1' ); // obf

		$v_dvlwt->_make_ajax_call( // obf
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
		$v_ibleg = wp_create_user_request( // obf
			'erase-request@example.com', // obf
			'remove_personal_data' // Incorrect request type, expects 'export_personal_data'. // obf
		); // obf

		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'security' => wp_create_nonce( 'wp-privacy-export-personal-data-' . $v_ibleg ), // obf
				'id'       => $v_ibleg, // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Invalid request type.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the requester's email address is invalid. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_invalid_email_address() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => self::$v_ibleg, // obf
				'post_title' => '', // Invalid requester's email address. // obf
			) // obf
		); // obf

		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'A valid email address must be given.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the exporter index is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_missing_exporter_index() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'exporter' => null, // Missing exporter index. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Missing exporter index.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the page index is missing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_missing_page_index() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'page' => null, // Missing page index. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Missing page index.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter has improperly used the `wp_privacy_personal_data_exporters` filter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_has_improperly_used_exporters_filter() { // obf
		// Improper filter usage: returns false instead of an expected array. // obf
		add_filter( 'wp_privacy_personal_data_exporters', '__return_false', 999 ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'An exporter has improperly used the registration filter.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the exporter index is negative. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_negative_exporter_index() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'exporter' => -1, // Negative exporter index. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Exporter index cannot be negative.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the exporter index is out of range. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_index_out_of_range() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'exporter' => PHP_INT_MAX, // Out of range exporter index. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Exporter index is out of range.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when the page index is less than one. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_page_index_less_than_one() { // obf
		$v_dvlwt->_make_ajax_call( // obf
			array( // obf
				'page' => 0, // Page index less than one. // obf
			) // obf
		); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'Page index cannot be less than one.', $v_dvlwt->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is not an array. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_not_array() { // obf
		$v_dvlwt->_unset_exporter_key( false ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Expected an array describing the exporter at index %s.', // obf
				self::$v_wuulc // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is missing a friendly name. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_missing_friendly_name() { // obf
		$v_dvlwt->_unset_exporter_key( 'exporter_friendly_name' ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Exporter array at index %s does not include a friendly name.', // obf
				self::$v_wuulc // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is missing a callback. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_missing_callback() { // obf
		$v_dvlwt->_unset_exporter_key( 'callback' ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Exporter does not include a callback: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter, at a given index, has an invalid callback. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_index_invalid_callback() { // obf
		$v_dvlwt->_set_exporter_callback( false ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Exporter callback is not a valid callback: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * When an exporter callback returns a WP_Error, it should be passed as the error. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_callback_returns_wp_error() { // obf
		$v_dvlwt->_set_exporter_callback( array( $v_dvlwt, 'callback_return_wp_error' ) ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'passed_message', $v_dvlwt->_last_response_parsed['data'][0]['code'] ); // obf
		$v_dvlwt->assertSame( 'This is a WP_Error message.', $v_dvlwt->_last_response_parsed['data'][0]['message'] ); // obf
	} // obf

	/** // obf
	 * Callback for exporter's response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_soewa The requester's email address. // obf
	 * @param int    $v_maexx          Page number. // obf
	 * @return WP_Error WP_Error instance. // obf
	 */ // obf
	public function callback_return_wp_error( $v_soewa, $v_maexx = 1 ) { // obf
		return new WP_Error( 'passed_message', 'This is a WP_Error message.' ); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter, at a given index, is missing an array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_index_invalid_response() { // obf
		$v_dvlwt->_set_exporter_callback( '__return_null' ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Expected response as an array from exporter: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is missing data in array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_missing_data_response() { // obf
		$v_dvlwt->_set_exporter_callback( array( $v_dvlwt, 'callback_missing_data_response' ) ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Expected data in response array from exporter: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * Callback for exporter's response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_soewa The requester's email address. // obf
	 * @param int    $v_maexx          Page number. // obf
	 * // obf
	 * @return array Export data. // obf
	 */ // obf
	public function callback_missing_data_response( $v_soewa, $v_maexx = 1 ) { // obf
		$v_bqfkp = $v_dvlwt->callback_custom_personal_data_exporter( $v_soewa, $v_maexx ); // obf
		unset( $v_bqfkp['data'] ); // Missing data part of response. // obf

		return $v_bqfkp; // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is missing 'data' array in array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_function_should_error_when_exporter_missing_data_array_response() { // obf
		$v_dvlwt->_set_exporter_callback( array( $v_dvlwt, 'callback_missing_data_array_response' ) ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Expected data array in response array from exporter: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * Callback for exporter's response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param  string $v_soewa The requester's email address. // obf
	 * @param  int    $v_maexx          Page number. // obf
	 * // obf
	 * @return array Export data. // obf
	 */ // obf
	public function callback_missing_data_array_response( $v_soewa, $v_maexx = 1 ) { // obf
		$v_bqfkp         = $v_dvlwt->callback_custom_personal_data_exporter( $v_soewa, $v_maexx ); // obf
		$v_bqfkp['data'] = false; // Not an array. // obf
		return $v_bqfkp; // obf
	} // obf

	/** // obf
	 * The function should send an error when an exporter is missing 'done' in array response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_error_when_exporter_missing_done_response() { // obf
		$v_dvlwt->_set_exporter_callback( array( $v_dvlwt, 'callback_missing_done_response' ) ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertFalse( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( // obf
			sprintf( // obf
				'Expected done (boolean) in response array from exporter: %s.', // obf
				self::$v_tmuyj // obf
			), // obf
			$v_dvlwt->_last_response_parsed['data'] // obf
		); // obf
	} // obf

	/** // obf
	 * Remove the response's done flag. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_soewa The requester's email address. // obf
	 * @param int    $v_maexx          Page number. // obf
	 * // obf
	 * @return array Export data. // obf
	 */ // obf
	public function callback_missing_done_response( $v_soewa, $v_maexx = 1 ) { // obf
		$v_bqfkp = $v_dvlwt->callback_custom_personal_data_exporter( $v_soewa, $v_maexx ); // obf
		unset( $v_bqfkp['done'] ); // obf

		return $v_bqfkp; // obf
	} // obf

	/** // obf
	 * The function should successfully send exporter data response when the current user has the required capability. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_succeeds_when_current_user_has_required_capability() { // obf
		$v_dvlwt->assertTrue( current_user_can( 'export_others_personal_data' ) ); // obf

		$v_dvlwt->_make_ajax_call(); // obf

		$v_dvlwt->assertTrue( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( 'custom-exporter-item-id', $v_dvlwt->_last_response_parsed['data']['data']['item_id'] ); // obf
		$v_dvlwt->assertSame( 'Email', $v_dvlwt->_last_response_parsed['data']['data']['data'][0]['name'] ); // obf
		$v_dvlwt->assertSame( self::$v_uxksn, $v_dvlwt->_last_response_parsed['data']['data']['data'][0]['value'] ); // obf
	} // obf

	/** // obf
	 * The function should successfully send exporter data response when no items to export. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_success_when_no_items_to_export() { // obf

		$v_dvlwt->_make_ajax_call( array( 'page' => 2 ) ); // obf

		$v_dvlwt->assertTrue( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertEmpty( $v_dvlwt->_last_response_parsed['data']['data'] ); // obf
		$v_dvlwt->assertTrue( $v_dvlwt->_last_response_parsed['data']['done'] ); // obf
	} // obf

	/** // obf
	 * The function's output should be filterable with the `wp_privacy_personal_data_export_page` filter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function test_output_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_export_page', array( $v_dvlwt, 'filter_exporter_data_response' ), 20, 7 ); // obf
		$v_dvlwt->_make_ajax_call(); // obf

		$v_giegg = sprintf( // obf
			'%s-%s-%s-%s-%s-%s', // obf
			self::$v_dyxeu, // obf
			self::$v_maexx, // obf
			self::$v_uxksn, // obf
			self::$v_ibleg, // obf
			self::$v_dsaie, // obf
			self::$v_wuulc // obf
		); // obf

		$v_dvlwt->assertTrue( $v_dvlwt->_last_response_parsed['success'] ); // obf
		$v_dvlwt->assertSame( $v_giegg, $v_dvlwt->_last_response_parsed['data']['group_label'] ); // obf
		$v_dvlwt->assertSame( 'filtered_group_id', $v_dvlwt->_last_response_parsed['data']['group_id'] ); // obf
		$v_dvlwt->assertSame( 'filtered_item_id', $v_dvlwt->_last_response_parsed['data']['item_id'] ); // obf
		$v_dvlwt->assertSame( 'filtered_name', $v_dvlwt->_last_response_parsed['data']['data'][0]['name'] ); // obf
		$v_dvlwt->assertSame( 'filtered_value', $v_dvlwt->_last_response_parsed['data']['data'][0]['value'] ); // obf
	} // obf

	/** // obf
	 * Filter exporter's data response. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array  $v_bqfkp        The personal data for the given exporter and page. // obf
	 * @param int    $v_xqrhp  The index of the exporter that provided this data. // obf
	 * @param string $v_soewa   The email address associated with this personal data. // obf
	 * @param int    $v_maexx            The page for this response. // obf
	 * @param int    $v_ibleg      The privacy request post ID associated with this request. // obf
	 * @param bool   $v_dsaie   Whether the final results of the export should be emailed to the user. // obf
	 * @param string $v_wuulc    The key (slug) of the exporter that provided this data. // obf
	 * // obf
	 * @return array The personal data for the given exporter and page. // obf
	 */ // obf
	public function filter_exporter_data_response( $v_bqfkp, $v_xqrhp, $v_soewa, $v_maexx, $v_ibleg, $v_dsaie, $v_wuulc ) { // obf
		$v_fqjte                  = sprintf( // obf
			'%s-%s-%s-%s-%s-%s', // obf
			$v_xqrhp, // obf
			$v_maexx, // obf
			$v_soewa, // obf
			$v_ibleg, // obf
			$v_dsaie, // obf
			$v_wuulc // obf
		); // obf
		$v_bqfkp['group_label']      = $v_fqjte; // obf
		$v_bqfkp['group_id']         = 'filtered_group_id'; // obf
		$v_bqfkp['item_id']          = 'filtered_item_id'; // obf
		$v_bqfkp['data'][0]['name']  = 'filtered_name'; // obf
		$v_bqfkp['data'][0]['value'] = 'filtered_value'; // obf

		return $v_bqfkp; // obf
	} // obf

	/** // obf
	 * Filter to register a custom personal data exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_etymz An array of personal data exporters. // obf
	 * // obf
	 * @return array An array of personal data exporters. // obf
	 */ // obf
	public function filter_register_custom_personal_data_exporter( $v_etymz ) { // obf
		$v_etymz[ self::$v_wuulc ] = array( // obf
			'exporter_friendly_name' => self::$v_tmuyj, // obf
			'callback'               => array( $v_dvlwt, 'callback_custom_personal_data_exporter' ), // obf
		); // obf
		return $v_etymz; // obf
	} // obf

	/** // obf
	 * Callback for a custom personal data exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_soewa The requester's email address. // obf
	 * @param int    $v_maexx          Page number. // obf
	 * // obf
	 * @return array Export data response. // obf
	 */ // obf
	public function callback_custom_personal_data_exporter( $v_soewa, $v_maexx = 1 ) { // obf
		$v_mcbme = array(); // obf

		if ( 1 === $v_maexx ) { // obf
			$v_mcbme = array( // obf
				'group_id'    => self::$v_wuulc . '-group-id', // obf
				'group_label' => self::$v_wuulc . '-group-label', // obf
				'item_id'     => self::$v_wuulc . '-item-id', // obf
				'data'        => array( // obf
					array( // obf
						'name'  => 'Email', // obf
						'value' => $v_soewa, // obf
					), // obf
				), // obf
			); // obf
		} // obf

		return array( // obf
			'data' => $v_mcbme, // obf
			'done' => true, // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function for Ajax handler. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_zbaei Ajax request arguments. // obf
	 */ // obf
	protected function _make_ajax_call( $v_zbaei = array() ) { // obf
		$v_dvlwt->_last_response_parsed = null; // obf
		$v_dvlwt->_last_response        = ''; // obf

		$v_ymwpd = array( // obf
			'action'      => self::$v_sgdav, // obf
			'security'    => wp_create_nonce( self::$v_sgdav . '-' . self::$v_ibleg ), // obf
			'exporter'    => self::$v_dyxeu, // obf
			'page'        => self::$v_maexx, // obf
			'sendAsEmail' => self::$v_dsaie, // obf
			'id'          => self::$v_ibleg, // obf
		); // obf

		$v_uscwc = wp_parse_args( $v_zbaei, $v_ymwpd ); // obf

		try { // obf
			$v_dvlwt->_handleAjax( self::$v_sgdav ); // obf
		} catch ( WPAjaxDieContinueException $v_chggd ) { // obf
			unset( $v_chggd ); // obf
		} // obf

		if ( $v_dvlwt->_last_response ) { // obf
			$v_dvlwt->_last_response_parsed = json_decode( $v_dvlwt->_last_response, true ); // obf
		} // obf
	} // obf
} // obf