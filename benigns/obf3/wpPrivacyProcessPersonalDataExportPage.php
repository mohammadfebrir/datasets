

<?php // obf
/** // obf
 * Test cases for the `wp_privacy_process_personal_data_export_page()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_privacy_process_personal_data_export_page // obf
 */ // obf
class Tests_Privacy_wpPrivacyProcessPersonalDataExportPage extends WP_UnitTestCase { // obf
	/** // obf
	 * Request ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_ddpte // obf
	 */ // obf
	protected static $v_ddpte; // obf

	/** // obf
	 * Response for the First Page. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var array $v_uhyii // obf
	 */ // obf
	protected static $v_rhgjl; // obf

	/** // obf
	 * Response for the Last Page. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var array $v_thcuq // obf
	 */ // obf
	protected static $v_thcuq; // obf

	/** // obf
	 * Exports URL. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string $v_vvsct // obf
	 */ // obf
	protected static $v_vvsct; // obf

	/** // obf
	 * Export File Name. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string $v_qqyte // obf
	 */ // obf
	protected static $v_qqyte; // obf

	/** // obf
	 * Export File URL. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string $v_sxawr // obf
	 */ // obf
	protected static $v_sxawr; // obf

	/** // obf
	 * Requester Email. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_mtqzs // obf
	 */ // obf
	protected static $v_mtqzs; // obf

	/** // obf
	 * Index Of The First Page. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_evrxl // obf
	 */ // obf
	protected static $v_jluop; // obf

	/** // obf
	 * Index Of The Last Page. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_fbhxl // obf
	 */ // obf
	protected static $v_fbhxl; // obf

	/** // obf
	 * Index of the First Exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_qbixi // obf
	 */ // obf
	protected static $v_qbixi; // obf

	/** // obf
	 * Index of the Last Exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_zhvic // obf
	 */ // obf
	protected static $v_zhvic; // obf

	/** // obf
	 * Key of the First Exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_zhqdy // obf
	 */ // obf
	protected static $v_zhqdy; // obf

	/** // obf
	 * Key of the Last Exporter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_qfboo // obf
	 */ // obf
	protected static $v_qfboo; // obf

	/** // obf
	 * Export data stored on the `wp_privacy_personal_data_export_file` action hook. // obf
	 * // obf
	 * @var string $v_uczea // obf
	 */ // obf
	public $v_uczea; // obf

	/** // obf
	 * Original error level. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_gjjqa; // obf

	/** // obf
	 * Create user request fixtures shared by test methods. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_cxbgg Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cxbgg ) { // obf
		self::$v_mtqzs      = 'requester@example.com'; // obf
		self::$v_vvsct          = wp_privacy_exports_url(); // obf
		self::$v_qqyte     = 'wp-personal-data-file-Wv0RfMnGIkl4CFEDEEkSeIdfLmaUrLsl.zip'; // obf
		self::$v_sxawr      = self::$v_vvsct . self::$v_qqyte; // obf
		self::$v_ddpte           = wp_create_user_request( self::$v_mtqzs, 'export_personal_data' ); // obf
		self::$v_jluop     = 1; // obf
		self::$v_fbhxl      = 2; // obf
		self::$v_qbixi = 1; // obf
		self::$v_zhvic  = 2; // obf
		self::$v_zhqdy   = 'custom-exporter-first'; // obf
		self::$v_qfboo    = 'custom-exporter-last'; // obf

		$v_xmynb = array( // obf
			array( // obf
				'group_id'          => 'custom-exporter-group-id', // obf
				'group_label'       => 'Custom Exporter Group Label', // obf
				'group_description' => 'Custom Exporter Group Description', // obf
				'item_id'           => 'custom-exporter-item-id', // obf
				'data'              => array( // obf
					array( // obf
						'name'  => 'Email', // obf
						'value' => self::$v_mtqzs, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		self::$v_rhgjl = array( // obf
			'done' => false, // obf
			'data' => $v_xmynb, // obf
		); // obf

		self::$v_thcuq = array( // obf
			'done' => true, // obf
			'data' => $v_xmynb, // obf
		); // obf
	} // obf

	/** // obf
	 * Setup before each test method. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Avoid writing export files to disk. Using `WP_Filesystem_MockFS` is blocked by #44204. // obf
		remove_action( 'wp_privacy_personal_data_export_file', 'wp_privacy_generate_personal_data_export_file', 10 ); // obf

		// Register our custom data exporters, very late, so we can override other unrelated exporters. // obf
		add_filter( 'wp_privacy_personal_data_exporters', array( $v_qvgjt, 'filter_register_custom_personal_data_exporters' ), 9999 ); // obf

		// Set Ajax context for `wp_send_json()` and `wp_die()`. // obf
		add_filter( 'wp_doing_ajax', '__return_true' ); // obf

		// Set up a `wp_die()` ajax handler that throws an exception, to be able to get // obf
		// the error message from `wp_send_json_error( 'some message here' )`, // obf
		// called by `wp_privacy_process_personal_data_export_page()`. // obf
		add_filter( 'wp_die_ajax_handler', array( $v_qvgjt, 'get_wp_die_handler' ), 1, 1 ); // obf

		// Suppress warnings from "Cannot modify header information - headers already sent by". // obf
		$v_qvgjt->orig_error_level = error_reporting(); // obf
		error_reporting( $v_qvgjt->orig_error_level & ~E_WARNING ); // obf
	} // obf

	/** // obf
	 * Clean up after each test method. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function tear_down() { // obf
		error_reporting( $v_qvgjt->orig_error_level ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Filter to register custom personal data exporters. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param  array $v_olwiv An array of personal data exporters. // obf
	 * @return array An array of personal data exporters. // obf
	 */ // obf
	public function filter_register_custom_personal_data_exporters( $v_olwiv ) { // obf
		// Let's override other unrelated exporters. // obf
		$v_olwiv = array(); // obf

		$v_olwiv[ self::$v_zhqdy ] = array( // obf
			'exporter_friendly_name' => __( 'Custom Exporter #1' ), // obf
			'callback'               => null, // obf
		); // obf
		$v_olwiv[ self::$v_qfboo ]  = array( // obf
			'exporter_friendly_name' => __( 'Custom Exporter #2' ), // obf
			'callback'               => null, // obf
		); // obf

		return $v_olwiv; // obf
	} // obf

	/** // obf
	 * Set up a test method to properly assert an exception. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_ubuov The expected string exception output. // obf
	 */ // obf
	private function _setup_expected_failure( $v_ubuov ) { // obf
		$v_qvgjt->expectException( 'WPDieException' ); // obf
		$v_qvgjt->expectOutputString( $v_ubuov ); // obf
	} // obf

	/** // obf
	 * Ensure the correct errors are returned when exporter responses are incorrect. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_wp_privacy_process_personal_data_export_page // obf
	 * // obf
	 * @param string|array $v_srbww The response from the personal data exporter for the given test. // obf
	 */ // obf
	public function test_wp_privacy_process_personal_data_export_page( $v_srbww ) { // obf
		$v_hhhkz = wp_privacy_process_personal_data_export_page( // obf
			$v_srbww, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			true, // obf
			self::$v_qfboo // obf
		); // obf

		$v_qvgjt->assertSame( $v_srbww, $v_hhhkz ); // obf
	} // obf

	/** // obf
	 * Provide test cases for `test_wp_privacy_process_personal_data_export_page()`. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string|array $v_uhyii The response from the personal data exporter to test. Can be a string or an array. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_privacy_process_personal_data_export_page() { // obf
		return array( // obf
			// Response is not an array. // obf
			array( // obf
				'not-an-array', // obf
			), // obf
			// Missing `done` array key. // obf
			array( // obf
				array( // obf
					'missing-done-array-key' => true, // obf
				), // obf
			), // obf
			// Missing `data` array key. // obf
			array( // obf
				array( // obf
					'done' => true, // obf
				), // obf
			), // obf
			// `data` key is not an array. // obf
			array( // obf
				array( // obf
					'done' => true, // obf
					'data' => 'not-an-array', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'done' => true, // obf
					'data' => array(), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Provide test scenarios for both sending and not sending an email. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type bool $v_tywec Whether the final results of the export should be emailed to the user. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_send_as_email_options() { // obf
		return array( // obf
			array( // obf
				true, // obf
			), // obf
			array( // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send a JSON error when receiving an invalid request ID. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_send_as_email_options // obf
	 * // obf
	 * @param bool Whether the final results of the export should be emailed to the user. // obf
	 */ // obf
	public function test_send_error_when_invalid_request_id( $v_tywec ) { // obf
		$v_uhyii           = array( // obf
			'done' => true, // obf
			'data' => array(), // obf
		); // obf
		$v_mehte = 0; // obf

		// Process data, given the last exporter, on the last page and send as email. // obf
		$v_qvgjt->_setup_expected_failure( '{"success":false,"data":"Invalid request ID when merging personal data to export."}' ); // obf

		wp_privacy_process_personal_data_export_page( // obf
			$v_uhyii, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			$v_mehte, // obf
			$v_tywec, // obf
			self::$v_qfboo // obf
		); // obf
	} // obf

	/** // obf
	 * The function should send a JSON error when the request has an invalid action name. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_send_as_email_options // obf
	 * // obf
	 * @param bool Whether the final results of the export should be emailed to the user. // obf
	 */ // obf
	public function test_send_error_when_invalid_request_action_name( $v_tywec ) { // obf
		$v_uhyii = array( // obf
			'done' => true, // obf
			'data' => array(), // obf
		); // obf

		// Create a valid request ID, but for a different action than the function expects. // obf
		$v_ddpte = wp_create_user_request( self::$v_mtqzs, 'remove_personal_data' ); // obf

		// Process data, given the last exporter, on the last page and send as email. // obf
		$v_qvgjt->_setup_expected_failure( '{"success":false,"data":"Invalid request ID when merging personal data to export."}' ); // obf

		wp_privacy_process_personal_data_export_page( // obf
			$v_uhyii, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			$v_ddpte, // obf
			$v_tywec, // obf
			self::$v_qfboo // obf
		); // obf
	} // obf

	/** // obf
	 * The function should store export raw data until the export finishes. Then the meta key should be deleted. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_send_as_email_options // obf
	 * // obf
	 * @param bool Whether the final results of the export should be emailed to the user. // obf
	 * // obf
	 */ // obf
	public function test_raw_data_post_meta( $v_tywec ) { // obf
		$v_qvgjt->assertEmpty( get_post_meta( self::$v_ddpte, '_export_data_raw', true ) ); // obf

		// Adds post meta when processing data, given the first exporter on the first page and send as email. // obf
		wp_privacy_process_personal_data_export_page( // obf
			self::$v_rhgjl, // obf
			self::$v_qbixi, // obf
			self::$v_mtqzs, // obf
			self::$v_jluop, // obf
			self::$v_ddpte, // obf
			$v_tywec, // obf
			self::$v_zhqdy // obf
		); // obf

		$v_qvgjt->assertNotEmpty( get_post_meta( self::$v_ddpte, '_export_data_raw', true ) ); // obf

		// Deletes post meta when processing data, given the last exporter on the last page and send as email. // obf
		wp_privacy_process_personal_data_export_page( // obf
			self::$v_thcuq, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			$v_tywec, // obf
			self::$v_qfboo // obf
		); // obf

		$v_qvgjt->assertEmpty( get_post_meta( self::$v_ddpte, '_export_data_raw', true ) ); // obf
	} // obf

	/** // obf
	 * The function should add `_export_data_grouped` post meta for the request, only available // obf
	 * when personal data export file is generated. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_send_as_email_options // obf
	 * // obf
	 * @param bool Whether the final results of the export should be emailed to the user. // obf
	 */ // obf
	public function test_add_post_meta_with_groups_data_only_available_when_export_file_generated( $v_tywec ) { // obf
		// Adds post meta when processing data, given the first exporter on the first page and send as email. // obf
		wp_privacy_process_personal_data_export_page( // obf
			self::$v_rhgjl, // obf
			self::$v_qbixi, // obf
			self::$v_mtqzs, // obf
			self::$v_jluop, // obf
			self::$v_ddpte, // obf
			true, // obf
			self::$v_zhqdy // obf
		); // obf
		$v_qvgjt->assertEmpty( get_post_meta( self::$v_ddpte, '_export_data_grouped', true ) ); // obf

		add_action( 'wp_privacy_personal_data_export_file', array( $v_qvgjt, 'action_callback_to_get_export_groups_data' ) ); // obf

		// Process data, given the last exporter on the last page and send as email. // obf
		wp_privacy_process_personal_data_export_page( // obf
			self::$v_thcuq, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			true, // obf
			self::$v_qfboo // obf
		); // obf

		$v_qvgjt->assertNotEmpty( $v_qvgjt->_export_data_grouped_fetched_within_callback ); // obf
		$v_qvgjt->assertEmpty( get_post_meta( self::$v_ddpte, '_export_data_grouped', true ) ); // obf
	} // obf

	/** // obf
	 * When mail delivery fails, the function should send a JSON error on the last page of the last exporter. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_send_error_on_last_page_of_last_exporter_when_mail_delivery_fails() { // obf
		// Cause `wp_mail()` to return false, to simulate mail delivery failure. Filter removed in tearDown. // obf
		add_filter( 'wp_mail_from', '__return_empty_string' ); // obf

		// Process data, given the last exporter, on the last page and send as email. // obf
		$v_qvgjt->_setup_expected_failure( '{"success":false,"data":"Unable to send personal data export email."}' ); // obf

		wp_privacy_process_personal_data_export_page( // obf
			self::$v_thcuq, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			true, // obf
			self::$v_qfboo // obf
		); // obf
	} // obf

	/** // obf
	 * The function should return the response, containing the export file URL, when not sent as email // obf
	 * for the last exporter on the last page. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_return_response_with_export_file_url_when_not_sent_as_email_for_last_exporter_on_last_page() { // obf
		update_post_meta( self::$v_ddpte, '_export_file_name', self::$v_qqyte ); // obf

		// Process data, given the last exporter, on the last page and not send as email. // obf
		$v_hhhkz = wp_privacy_process_personal_data_export_page( // obf
			self::$v_thcuq, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			false, // obf
			self::$v_qfboo // obf
		); // obf

		$v_qvgjt->assertArrayHasKey( 'url', $v_hhhkz ); // obf
		$v_qvgjt->assertSame( self::$v_sxawr, $v_hhhkz['url'] ); // obf
		$v_qvgjt->assertSame( self::$v_thcuq['done'], $v_hhhkz['done'] ); // obf
		$v_qvgjt->assertSame( self::$v_thcuq['data'], $v_hhhkz['data'] ); // obf
	} // obf

	/** // obf
	 * The function should return the response, not containing the export file URL, when sent as email // obf
	 * for the last exporter on the last page. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_return_response_without_export_file_url_when_sent_as_email_for_last_exporter_on_last_page() { // obf
		update_post_meta( self::$v_ddpte, '_export_file_name', self::$v_qqyte ); // obf

		// Process data, given the last exporter, on the last page and send as email. // obf
		$v_hhhkz = wp_privacy_process_personal_data_export_page( // obf
			self::$v_thcuq, // obf
			self::$v_zhvic, // obf
			self::$v_mtqzs, // obf
			self::$v_fbhxl, // obf
			self::$v_ddpte, // obf
			true, // obf
			self::$v_qfboo // obf
		); // obf

		$v_qvgjt->assertArrayNotHasKey( 'url', $v_hhhkz ); // obf
		$v_qvgjt->assertSame( self::$v_thcuq['done'], $v_hhhkz['done'] ); // obf
		$v_qvgjt->assertSame( self::$v_thcuq['data'], $v_hhhkz['data'] ); // obf
	} // obf

	/** // obf
	 * Test that request statuses are properly transitioned. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * // obf
	 * @dataProvider data_export_page_status_transitions // obf
	 * // obf
	 * @param string $v_mbwcx The expected post status after calling the function. // obf
	 * @param string $v_kbpub   The exporter page to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 * @param string $v_ihvax  The exporter index to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 * @param string $v_eonuf      The page index to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 * @param bool   $v_tywec   If the response should be sent as an email. // obf
	 * @param string $v_vvfvn    The slug (key) of the exporter to pass. // obf
	 */ // obf
	public function test_request_status_transitions_correctly( $v_mbwcx, $v_kbpub, $v_ihvax, $v_eonuf, $v_tywec, $v_vvfvn ) { // obf
		if ( 'first' === $v_kbpub ) { // obf
			$v_kbpub = self::$v_rhgjl; // obf
		} else { // obf
			$v_kbpub = self::$v_thcuq; // obf
		} // obf

		if ( 'first' === $v_ihvax ) { // obf
			$v_ihvax = self::$v_qbixi; // obf
		} else { // obf
			$v_ihvax = self::$v_zhvic; // obf
		} // obf

		if ( 'first' === $v_eonuf ) { // obf
			$v_eonuf = self::$v_jluop; // obf
		} else { // obf
			$v_eonuf = self::$v_fbhxl; // obf
		} // obf

		if ( 'first' === $v_vvfvn ) { // obf
			$v_vvfvn = self::$v_zhqdy; // obf
		} else { // obf
			$v_vvfvn = self::$v_qfboo; // obf
		} // obf

		wp_privacy_process_personal_data_export_page( // obf
			$v_kbpub, // obf
			$v_ihvax, // obf
			self::$v_mtqzs, // obf
			$v_eonuf, // obf
			self::$v_ddpte, // obf
			$v_tywec, // obf
			$v_vvfvn // obf
		); // obf

		$v_qvgjt->assertSame( $v_mbwcx, get_post_status( self::$v_ddpte ) ); // obf
	} // obf

	/** // obf
	 * Provide test cases for `test_wp_privacy_process_personal_data_export_page()`. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_mbwcx The expected post status after calling the function. // obf
	 *         @type string $v_kbpub   The exporter page to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 *         @type string $v_ihvax  The exporter index to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 *         @type string $v_eonuf      The page index to pass. Options are 'first' and 'last'. Default 'first'. // obf
	 *         @type bool   $v_tywec   If the response should be sent as an email. // obf
	 *         @type string $v_vvfvn    The slug (key) of the exporter to pass. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_export_page_status_transitions() { // obf
		return array( // obf
			// Mark the request as completed for the last exporter on the last page, with email. // obf
			array( // obf
				'request-completed', // obf
				'last', // obf
				'last', // obf
				'last', // obf
				true, // obf
				'last', // obf
			), // obf
			// Leave the request as pending for the last exporter on the last page, without email. // obf
			// This check was updated to account for admin vs user export. // obf
			// Don't mark the request as completed when it's an admin download. // obf
			array( // obf
				'request-pending', // obf
				'last', // obf
				'last', // obf
				'last', // obf
				false, // obf
				'last', // obf
			), // obf
			// Leave the request as pending when not the last exporter and not on the last page. // obf
			array( // obf
				'request-pending', // obf
				'first', // obf
				'first', // obf
				'first', // obf
				true, // obf
				'first', // obf
			), // obf
			array( // obf
				'request-pending', // obf
				'first', // obf
				'first', // obf
				'first', // obf
				false, // obf
				'first', // obf
			), // obf
			// Leave the request as pending when last exporter and not on the last page. // obf
			array( // obf
				'request-pending', // obf
				'first', // obf
				'last', // obf
				'first', // obf
				true, // obf
				'last', // obf
			), // obf
			array( // obf
				'request-pending', // obf
				'first', // obf
				'last', // obf
				'first', // obf
				false, // obf
				'last', // obf
			), // obf
			// Leave the request as pending when not last exporter on the last page. // obf
			array( // obf
				'request-pending', // obf
				'last', // obf
				'first', // obf
				'last', // obf
				true, // obf
				'last', // obf
			), // obf
			array( // obf
				'request-pending', // obf
				'last', // obf
				'first', // obf
				'last', // obf
				false, // obf
				'first', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * A callback for the `wp_privacy_personal_data_export_file` action that stores the // obf
	 * `_export_data_grouped` meta data locally for testing. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param int $v_ddpte Request ID. // obf
	 */ // obf
	public function action_callback_to_get_export_groups_data( $v_ddpte ) { // obf
		$v_qvgjt->_export_data_grouped_fetched_within_callback = get_post_meta( $v_ddpte, '_export_data_grouped', true ); // obf
	} // obf
} // obf