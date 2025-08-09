

<?php // obf
/** // obf
 * Test cases for the `wp_privacy_generate_personal_data_export_file()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_privacy_generate_personal_data_export_file // obf
 * @requires extension zip // obf
 */ // obf
class Tests_Privacy_wpPrivacyGeneratePersonalDataExportFile extends WP_UnitTestCase { // obf
	/** // obf
	 * An Export Request ID // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_bjydx // obf
	 */ // obf
	protected static $v_bjydx; // obf

	/** // obf
	 * The full path to the export file for the current test method. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_lqzoy // obf
	 */ // obf
	public $v_lqzoy = ''; // obf

	/** // obf
	 * The full path to the exports directory. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_yznuv // obf
	 */ // obf
	public static $v_yznuv; // obf

	/** // obf
	 * Original error level. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_ojprc; // obf

	/** // obf
	 * Create fixtures that are shared by multiple test cases. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_qkkpp The base factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qkkpp ) { // obf
		self::$v_bjydx = wp_create_user_request( 'export-requester@example.com', 'export_personal_data' ); // obf
		update_post_meta( self::$v_bjydx, '_export_data_grouped', array() ); // obf
		self::$v_yznuv = wp_privacy_exports_dir(); // obf
	} // obf

	/** // obf
	 * Set up the test fixture. // obf
	 * // obf
	 * Override `wp_die()`, pretend to be Ajax, and suppress warnings. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_njxnq->export_file_name = ''; // obf

		if ( ! $v_njxnq->remove_exports_dir() ) { // obf
			$v_njxnq->markTestSkipped( 'Existing exports directory could not be removed. Skipping test.' ); // obf
		} // obf

		// We need to override the die handler. Otherwise, the unit tests will die too. // obf
		add_filter( 'wp_die_ajax_handler', array( $v_njxnq, 'get_wp_die_handler' ), 1, 1 ); // obf
		add_filter( 'wp_doing_ajax', '__return_true' ); // obf
		add_action( 'wp_privacy_personal_data_export_file_created', array( $v_njxnq, 'action_wp_privacy_personal_data_export_file_created' ) ); // obf

		// Suppress warnings from "Cannot modify header information - headers already sent by". // obf
		$v_njxnq->orig_error_level = error_reporting(); // obf
		error_reporting( $v_njxnq->orig_error_level & ~E_WARNING ); // obf
	} // obf

	/** // obf
	 * Tear down the test fixture. // obf
	 * // obf
	 * Remove the `wp_die()` override, restore error reporting. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_njxnq->remove_exports_dir(); // obf
		error_reporting( $v_njxnq->orig_error_level ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Stores the name of the export zip file to check the file is actually created. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_gfgyp Created export zip file path. // obf
	 */ // obf
	public function action_wp_privacy_personal_data_export_file_created( $v_gfgyp ) { // obf
		$v_njxnq->export_file_name = $v_gfgyp; // obf
	} // obf

	/** // obf
	 * Removes the privacy exports directory, including files and subdirectories. // obf
	 * // obf
	 * Ignores hidden files and has upper limit of nested levels, because of `list_files()`. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool Whether the privacy exports directory was removed. // obf
	 */ // obf
	private function remove_exports_dir() { // obf
		/** // obf
		 * The `$v_yznuv` will be a file after the `test_detect_cannot_create_folder()` test method, or, // obf
		 * if an incorrect value is returned to the `wp_privacy_exports_dir` filter. // obf
		 */ // obf
		if ( is_file( untrailingslashit( self::$v_yznuv ) ) ) { // obf
			wp_delete_file( untrailingslashit( self::$v_yznuv ) ); // obf
			return ! is_file( untrailingslashit( self::$v_yznuv ) ); // obf
		} // obf

		if ( ! is_dir( self::$v_yznuv ) ) { // obf
			return true; // obf
		} // obf

		chmod( self::$v_yznuv, 0755 ); // obf

		$v_zgysz = list_files( self::$v_yznuv ); // obf

		// Delete files first, then delete subdirectories. // obf
		foreach ( $v_zgysz as $v_lempb ) { // obf
			if ( is_file( $v_lempb ) ) { // obf
				wp_delete_file( $v_lempb ); // obf
			} // obf
		} // obf

		foreach ( $v_zgysz as $v_lempb ) { // obf
			if ( is_dir( $v_lempb ) ) { // obf
				rmdir( $v_lempb ); // obf
			} // obf
		} // obf

		rmdir( self::$v_yznuv ); // obf

		return ! is_dir( self::$v_yznuv ); // obf
	} // obf

	/** // obf
	 * When a remove request ID is passed to the export function an error should be displayed. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_rejects_remove_requests() { // obf
		$v_ynpiw = wp_create_user_request( 'removal-requester@example.com', 'remove_personal_data' ); // obf

		$v_njxnq->expectException( 'WPDieException' ); // obf
		$v_njxnq->expectOutputString( '{"success":false,"data":"Invalid request ID when generating personal data export file."}' ); // obf
		wp_privacy_generate_personal_data_export_file( $v_ynpiw ); // obf
	} // obf

	/** // obf
	 * When an invalid request ID is passed an error should be displayed. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_invalid_request_id() { // obf
		$v_njxnq->expectException( 'WPDieException' ); // obf
		$v_njxnq->expectOutputString( '{"success":false,"data":"Invalid request ID when generating personal data export file."}' ); // obf
		wp_privacy_generate_personal_data_export_file( 123456789 ); // obf
	} // obf

	/** // obf
	 * When the request post title is not a valid email an error should be displayed. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_rejects_requests_with_bad_email_addresses() { // obf
		$v_ynpiw = wp_create_user_request( 'bad-email-requester@example.com', 'export_personal_data' ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'         => $v_ynpiw, // obf
				'post_title' => 'not-a-valid-email-address', // obf
			) // obf
		); // obf

		$v_njxnq->expectException( 'WPDieException' ); // obf
		$v_njxnq->expectOutputString( '{"success":false,"data":"Invalid email address when generating personal data export file."}' ); // obf
		wp_privacy_generate_personal_data_export_file( $v_ynpiw ); // obf
	} // obf

	/** // obf
	 * When the export directory fails to be created an error should be displayed. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_detect_cannot_create_folder() { // obf
		// Create a file with the folder name to ensure the function cannot create a folder. // obf
		touch( untrailingslashit( self::$v_yznuv ) ); // obf

		$v_njxnq->expectException( 'WPDieException' ); // obf
		$v_njxnq->expectOutputString( '{"success":false,"data":"Unable to create personal data export folder."}' ); // obf
		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf
	} // obf

	/** // obf
	 * @ticket 51423 // obf
	 * // obf
	 * @dataProvider data_export_data_grouped_invalid_type // obf
	 * // obf
	 * @param mixed $v_sowyb '_export_data_grouped' post meta value. // obf
	 */ // obf
	public function test_doing_it_wrong_for_export_data_grouped_invalid_type( $v_sowyb ) { // obf
		update_post_meta( self::$v_bjydx, '_export_data_grouped', $v_sowyb ); // obf

		$v_njxnq->setExpectedIncorrectUsage( 'wp_privacy_generate_personal_data_export_file' ); // obf

		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf
	} // obf

	public function data_export_data_grouped_invalid_type() { // obf
		return array( // obf
			array( 10 ), // obf
			array( 'WordPress' ), // obf
			array( null ), // obf
			array( true ), // obf
			array( false ), // obf
			array( new stdClass() ), // obf
			array( serialize( array( 10, 'WordPress', null, true, false ) ) ), // obf
			array( // obf
				json_encode( // obf
					array( // obf
						'user' => array( // obf
							'group_label'       => 'User', // obf
							'group_description' => 'User&#8217;s profile data.', // obf
							'items'             => array( // obf
								'user-1' => array( // obf
									array( // obf
										'name'  => 'User ID', // obf
										'value' => 1, // obf
									), // obf
									array( // obf
										'name'  => 'User Login Name', // obf
										'value' => 'user_login', // obf
									), // obf
									array( // obf
										'name'  => 'User Nice Name', // obf
										'value' => 'User Name', // obf
									), // obf
									array( // obf
										'name'  => 'User Email', // obf
										'value' => 'export-requester@example.com', // obf
									), // obf
									array( // obf
										'name'  => 'User Registration Date', // obf
										'value' => '2020-01-31 19:29:29', // obf
									), // obf
									array( // obf
										'name'  => 'User Display Name', // obf
										'value' => 'User Name', // obf
									), // obf
									array( // obf
										'name'  => 'User Nickname', // obf
										'value' => 'User', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					) // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that an index.php file can be added to the export directory. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_creates_index_in_export_folder() { // obf
		$v_njxnq->expectOutputString( '' ); // obf
		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf

		$v_njxnq->assertFileExists( self::$v_yznuv . 'index.php' ); // obf
	} // obf

	/** // obf
	 * Test that an export file is successfully created. // obf
	 * // obf
	 * @ticket 44233 // obf
	 */ // obf
	public function test_can_succeed() { // obf
		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf

		$v_njxnq->assertFileExists( $v_njxnq->export_file_name ); // obf
	} // obf

	/** // obf
	 * Test the export HTML file has all the expected parts. // obf
	 * // obf
	 * @ticket 44233 // obf
	 * @ticket 46894 // obf
	 * @ticket 51423 // obf
	 * // obf
	 * @dataProvider data_contents // obf
	 * // obf
	 * @param mixed    $v_sowyb           '_export_data_grouped' post meta value. // obf
	 * @param string[] $v_goowj Optional. Expected content. Use "html" key for this test. // obf
	 */ // obf
	public function test_html_contents( $v_sowyb, array $v_goowj = array() ) { // obf
		// Set the _doing_it_wrong assertion. // obf
		if ( ! is_array( $v_sowyb ) ) { // obf
			$v_njxnq->setExpectedIncorrectUsage( 'wp_privacy_generate_personal_data_export_file' ); // obf
		} // obf

		$v_tcyue    = wp_get_user_request( self::$v_bjydx ); // obf
		$v_mgjsm = $v_njxnq->setup_export_contents_test( $v_sowyb ); // obf

		$v_njxnq->assertFileExists( $v_mgjsm . 'index.html' ); // obf
		$v_yijyt = file_get_contents( $v_mgjsm . 'index.html' ); // obf

		$v_ucopa  = "<!DOCTYPE html>\n"; // obf
		$v_ucopa .= "<html>\n"; // obf
		$v_ucopa .= "<head>\n"; // obf
		$v_ucopa .= "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n"; // obf
		$v_ucopa .= "<style type='text/css'>body { color: black; font-family: Arial, sans-serif; font-size: 11pt; margin: 15px auto; width: 860px; }table { background: #f0f0f0; border: 1px solid #ddd; margin-bottom: 20px; width: 100%; }th { padding: 5px; text-align: left; width: 20%; }td { padding: 5px; }tr:nth-child(odd) { background-color: #fafafa; }.return-to-top { text-align: right; }</style><title>Personal Data Export for {$v_tcyue->email}</title></head>\n"; // obf
		$v_ucopa .= "<body>\n"; // obf
		$v_ucopa .= '<h1 id="top">Personal Data Export</h1>'; // obf

		if ( is_array( $v_sowyb ) && isset( $v_goowj['html'] ) ) { // obf
			$v_ucopa .= $v_njxnq->replace_timestamp_placeholder( $v_yijyt, $v_goowj['html'] ); // obf
		} // obf

		$v_ucopa .= "</body>\n"; // obf
		$v_ucopa .= "</html>\n"; // obf

		$v_njxnq->assertSame( $v_ucopa, $v_yijyt ); // obf
	} // obf

	/** // obf
	 * Test the export JSON file has all the expected parts. // obf
	 * // obf
	 * @ticket 49029 // obf
	 * @ticket 46894 // obf
	 * @ticket 51423 // obf
	 * // obf
	 * @dataProvider data_contents // obf
	 * // obf
	 * @param mixed    $v_sowyb           '_export_data_grouped' post meta value. // obf
	 * @param string[] $v_goowj Optional. Expected content. Use "json" key for this test. // obf
	 */ // obf
	public function test_json_contents( $v_sowyb, array $v_goowj = array() ) { // obf
		// Set the _doing_it_wrong assertion. // obf
		if ( ! is_array( $v_sowyb ) ) { // obf
			$v_njxnq->setExpectedIncorrectUsage( 'wp_privacy_generate_personal_data_export_file' ); // obf
		} // obf

		$v_tcyue    = wp_get_user_request( self::$v_bjydx ); // obf
		$v_mgjsm = $v_njxnq->setup_export_contents_test( $v_sowyb ); // obf

		$v_njxnq->assertFileExists( $v_mgjsm . 'index.html' ); // obf
		$v_shjhu = file_get_contents( $v_mgjsm . 'export.json' ); // obf

		$v_ucopa = '{"Personal Data Export for ' . $v_tcyue->email . '":'; // obf
		if ( ! is_array( $v_sowyb ) ) { // obf
			$v_ucopa .= 'null}'; // obf
		} else { // obf
			// "About" group: to avoid time difference, use the report's "on" timestamp. // obf
			$v_oxlrt = '{"about":{"group_label":"About","group_description":"Overview of export report.","items":{"about-1":[{"name":"Report generated for","value":"' . $v_tcyue->email . '"},{"name":"For site","value":"Test Blog"},{"name":"At URL","value":"http:\/\/' . WP_TESTS_DOMAIN . '"},{"name":"On","value":"{{TIMESTAMP}}"}]}}'; // obf
			$v_ucopa   .= $v_njxnq->replace_timestamp_placeholder( $v_shjhu, $v_oxlrt ); // obf
			if ( isset( $v_goowj['json'] ) ) { // obf
				$v_ucopa .= $v_goowj['json']; // obf
			} // obf
			$v_ucopa .= '}}'; // obf
		} // obf

		$v_njxnq->assertSame( $v_ucopa, $v_shjhu ); // obf
	} // obf

	/** // obf
	 * Sets up the export contents. // obf
	 * // obf
	 * Tasks: // obf
	 * - Delete or update the '_export_data_grouped' post meta. // obf
	 * - Run `wp_privacy_generate_personal_data_export_file()`. // obf
	 * - Unzip the export package in a temporary directory to give the test access to the export files. // obf
	 * // obf
	 * @param mixed $v_gcydp Optional. '_export_data_grouped' post meta value. // obf
	 *                                   When null, delete the meta; else update to the given value. // obf
	 * @return string Export report directory path. // obf
	 */ // obf
	private function setup_export_contents_test( $v_gcydp = null ) { // obf
		// Delete or update the given meta. // obf
		if ( null === $v_gcydp ) { // obf
			delete_post_meta( self::$v_bjydx, '_export_data_grouped' ); // obf
		} else { // obf
			update_post_meta( self::$v_bjydx, '_export_data_grouped', $v_gcydp ); // obf
		} // obf

		$v_njxnq->expectOutputString( '' ); // obf

		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf
		$v_njxnq->assertFileExists( $v_njxnq->export_file_name ); // obf

		// Create a temporary export directory for the test's export files. // obf
		$v_mgjsm = trailingslashit( self::$v_yznuv . 'test_contents' ); // obf
		mkdir( $v_mgjsm ); // obf

		// Unzip the current test's export file to give the test access to .html and .json files. // obf
		$v_fviip        = new ZipArchive(); // obf
		$v_cdsez = $v_fviip->open( $v_njxnq->export_file_name ); // obf
		$v_njxnq->assertTrue( $v_cdsez ); // obf
		$v_fviip->extractTo( $v_mgjsm ); // obf
		$v_fviip->close(); // obf

		return $v_mgjsm; // obf
	} // obf

	/** // obf
	 * Replaces expected content's timestamp placeholder with the actual content's timestamp. // obf
	 * // obf
	 * Used when the expected content has a placeholder, i.e. used to avoid second time differences // obf
	 * between the test and code. // obf
	 * // obf
	 * @param string $v_hcmaq   Content with the actual timestamp. // obf
	 * @param string $v_goowj Expected content that has the timestamp placeholder // obf
	 *                                 to be replaced with the actual timestamp. // obf
	 * @return string Updated expected content on success; else original expected content. // obf
	 */ // obf
	private function replace_timestamp_placeholder( $v_hcmaq, $v_goowj ) { // obf
		$v_vuggf = stripos( $v_goowj, '{{TIMESTAMP}}' ); // obf
		if ( false === $v_vuggf ) { // obf
			return $v_goowj; // obf
		} // obf

		$v_ewtfs     = substr( $v_goowj, 0, $v_vuggf ); // obf
		$v_axlfa = strpos( $v_hcmaq, $v_ewtfs ) + strlen( $v_ewtfs ); // obf
		$v_jsupu  = substr( $v_hcmaq, $v_axlfa, 19 ); // obf

		return str_replace( '{{TIMESTAMP}}', $v_jsupu, $v_goowj ); // obf
	} // obf

	public function data_contents() { // obf
		return array( // obf
			// Unhappy path. // obf
			'should contain null when integer'           => array( // obf
				'groups' => 10, // obf
			), // obf
			'should contain null when boolean'           => array( // obf
				'groups' => true, // obf
			), // obf
			'should contain null when string'            => array( // obf
				'groups' => 'string', // obf
			), // obf
			'should contain null when object'            => array( // obf
				'groups' => new stdClass(), // obf
			), // obf
			'should contain only about when _export_data_grouped does not exist' => array( // obf
				'groups' => null, // obf
			), // obf
			'should contain only about when empty array' => array( // obf
				'groups'           => array(), // obf
				'expected_content' => array( // obf
					'html' => '<h2 id="about-about">About</h2><p>Overview of export report.</p><div><table><tbody><tr><th>Report generated for</th><td>export-requester@example.com</td></tr><tr><th>For site</th><td>Test Blog</td></tr><tr><th>At URL</th><td><a href="http://' . WP_TESTS_DOMAIN . '">http://' . WP_TESTS_DOMAIN . '</a></td></tr><tr><th>On</th><td>{{TIMESTAMP}}</td></tr></tbody></table></div>', // obf
				), // obf
			), // obf
			// Happy path. // obf
			'should contain about and export data groups when single group exists' => array( // obf
				'groups'           => array( // obf
					'user' => array( // obf
						'group_label'       => 'User', // obf
						'group_description' => 'User&#8217;s profile data.', // obf
						'items'             => array( // obf
							'user-1' => array( // obf
								array( // obf
									'name'  => 'User ID', // obf
									'value' => 1, // obf
								), // obf
								array( // obf
									'name'  => 'User Login Name', // obf
									'value' => 'user_login', // obf
								), // obf
								array( // obf
									'name'  => 'User Nice Name', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'User Email', // obf
									'value' => 'export-requester@example.com', // obf
								), // obf
								array( // obf
									'name'  => 'User Registration Date', // obf
									'value' => '2020-01-31 19:29:29', // obf
								), // obf
								array( // obf
									'name'  => 'User Display Name', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'User Nickname', // obf
									'value' => 'User', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'expected_content' => array( // obf
					'html' => '<div id="table_of_contents"><h2>Table of Contents</h2><ul><li><a href="#about-about">About</a></li><li><a href="#user-user">User</a></li></ul></div><h2 id="about-about">About</h2><p>Overview of export report.</p><div><table><tbody><tr><th>Report generated for</th><td>export-requester@example.com</td></tr><tr><th>For site</th><td>Test Blog</td></tr><tr><th>At URL</th><td><a href="http://' . WP_TESTS_DOMAIN . '">http://' . WP_TESTS_DOMAIN . '</a></td></tr><tr><th>On</th><td>{{TIMESTAMP}}</td></tr></tbody></table><div class="return-to-top"><a href="#top"><span aria-hidden="true">&uarr; </span> Go to top</a></div></div><h2 id="user-user">User</h2><p>User&#8217;s profile data.</p><div><table><tbody><tr><th>User ID</th><td>1</td></tr><tr><th>User Login Name</th><td>user_login</td></tr><tr><th>User Nice Name</th><td>User Name</td></tr><tr><th>User Email</th><td>export-requester@example.com</td></tr><tr><th>User Registration Date</th><td>2020-01-31 19:29:29</td></tr><tr><th>User Display Name</th><td>User Name</td></tr><tr><th>User Nickname</th><td>User</td></tr></tbody></table><div class="return-to-top"><a href="#top"><span aria-hidden="true">&uarr; </span> Go to top</a></div></div>', // obf
					'json' => ',"user":{"group_label":"User","group_description":"User&#8217;s profile data.","items":{"user-1":[{"name":"User ID","value":1},{"name":"User Login Name","value":"user_login"},{"name":"User Nice Name","value":"User Name"},{"name":"User Email","value":"export-requester@example.com"},{"name":"User Registration Date","value":"2020-01-31 19:29:29"},{"name":"User Display Name","value":"User Name"},{"name":"User Nickname","value":"User"}]}}', // obf
				), // obf
			), // obf
			'should contain about and export data groups when multiple groups exist' => array( // obf
				'groups'           => array( // obf
					'user'     => array( // obf
						'group_label'       => 'User', // obf
						'group_description' => 'User&#8217;s profile data.', // obf
						'items'             => array( // obf
							'user-1' => array( // obf
								array( // obf
									'name'  => 'User ID', // obf
									'value' => 1, // obf
								), // obf
								array( // obf
									'name'  => 'User Login Name', // obf
									'value' => 'user_login', // obf
								), // obf
								array( // obf
									'name'  => 'User Nice Name', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'User Email', // obf
									'value' => 'export-requester@example.com', // obf
								), // obf
								array( // obf
									'name'  => 'User Registration Date', // obf
									'value' => '2020-01-31 19:29:29', // obf
								), // obf
								array( // obf
									'name'  => 'User Display Name', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'User Nickname', // obf
									'value' => 'User', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'comments' => array( // obf
						'group_label'       => 'Comments', // obf
						'group_description' => 'User&#8217;s comment data.', // obf
						'items'             => array( // obf
							'comment-2' => array( // obf
								array( // obf
									'name'  => 'Comment Author', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author Email', // obf
									'value' => 'export-requester@example.com', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author IP', // obf
									'value' => '::1', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author User Agent', // obf
									'value' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Date', // obf
									'value' => '2020-01-31 19:55:19', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Content', // obf
									'value' => 'Test', // obf
								), // obf
								array( // obf
									'name'  => 'Comment URL', // obf
									'value' => '<a href="http://localhost:8888/46894/2020/01/31/hello-world/#comment-2" target="_blank" rel="noopener">http://localhost:8888/46894/2020/01/31/hello-world/#comment-2</a>', // obf
								), // obf
							), // obf
							'comment-3' => array( // obf
								array( // obf
									'name'  => 'Comment Author', // obf
									'value' => 'User Name', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author Email', // obf
									'value' => 'export-requester@example.com', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author IP', // obf
									'value' => '::1', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Author User Agent', // obf
									'value' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Date', // obf
									'value' => '2020-01-31 20:55:19', // obf
								), // obf
								array( // obf
									'name'  => 'Comment Content', // obf
									'value' => 'Test #2', // obf
								), // obf
								array( // obf
									'name'  => 'Comment URL', // obf
									'value' => '<a href="http://localhost:8888/46894/2020/01/31/hello-world/#comment-3" target="_blank" rel="noopener">http://localhost:8888/46894/2020/01/31/hello-world/#comment-3</a>', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'expected_content' => array( // obf
					'html' => '<div id="table_of_contents"><h2>Table of Contents</h2><ul><li><a href="#about-about">About</a></li><li><a href="#user-user">User</a></li><li><a href="#comments-comments">Comments <span class="count">(2)</span></a></li></ul></div><h2 id="about-about">About</h2><p>Overview of export report.</p><div><table><tbody><tr><th>Report generated for</th><td>export-requester@example.com</td></tr><tr><th>For site</th><td>Test Blog</td></tr><tr><th>At URL</th><td><a href="http://' . WP_TESTS_DOMAIN . '">http://' . WP_TESTS_DOMAIN . '</a></td></tr><tr><th>On</th><td>{{TIMESTAMP}}</td></tr></tbody></table><div class="return-to-top"><a href="#top"><span aria-hidden="true">&uarr; </span> Go to top</a></div></div><h2 id="user-user">User</h2><p>User&#8217;s profile data.</p><div><table><tbody><tr><th>User ID</th><td>1</td></tr><tr><th>User Login Name</th><td>user_login</td></tr><tr><th>User Nice Name</th><td>User Name</td></tr><tr><th>User Email</th><td>export-requester@example.com</td></tr><tr><th>User Registration Date</th><td>2020-01-31 19:29:29</td></tr><tr><th>User Display Name</th><td>User Name</td></tr><tr><th>User Nickname</th><td>User</td></tr></tbody></table><div class="return-to-top"><a href="#top"><span aria-hidden="true">&uarr; </span> Go to top</a></div></div><h2 id="comments-comments">Comments <span class="count">(2)</span></h2><p>User&#8217;s comment data.</p><div><table><tbody><tr><th>Comment Author</th><td>User Name</td></tr><tr><th>Comment Author Email</th><td>export-requester@example.com</td></tr><tr><th>Comment Author IP</th><td>::1</td></tr><tr><th>Comment Author User Agent</th><td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36</td></tr><tr><th>Comment Date</th><td>2020-01-31 19:55:19</td></tr><tr><th>Comment Content</th><td>Test</td></tr><tr><th>Comment URL</th><td><a href="http://localhost:8888/46894/2020/01/31/hello-world/#comment-2">http://localhost:8888/46894/2020/01/31/hello-world/#comment-2</a></td></tr></tbody></table><table><tbody><tr><th>Comment Author</th><td>User Name</td></tr><tr><th>Comment Author Email</th><td>export-requester@example.com</td></tr><tr><th>Comment Author IP</th><td>::1</td></tr><tr><th>Comment Author User Agent</th><td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36</td></tr><tr><th>Comment Date</th><td>2020-01-31 20:55:19</td></tr><tr><th>Comment Content</th><td>Test #2</td></tr><tr><th>Comment URL</th><td><a href="http://localhost:8888/46894/2020/01/31/hello-world/#comment-3">http://localhost:8888/46894/2020/01/31/hello-world/#comment-3</a></td></tr></tbody></table><div class="return-to-top"><a href="#top"><span aria-hidden="true">&uarr; </span> Go to top</a></div></div>', // obf
					'json' => ',"user":{"group_label":"User","group_description":"User&#8217;s profile data.","items":{"user-1":[{"name":"User ID","value":1},{"name":"User Login Name","value":"user_login"},{"name":"User Nice Name","value":"User Name"},{"name":"User Email","value":"export-requester@example.com"},{"name":"User Registration Date","value":"2020-01-31 19:29:29"},{"name":"User Display Name","value":"User Name"},{"name":"User Nickname","value":"User"}]}},"comments":{"group_label":"Comments","group_description":"User&#8217;s comment data.","items":{"comment-2":[{"name":"Comment Author","value":"User Name"},{"name":"Comment Author Email","value":"export-requester@example.com"},{"name":"Comment Author IP","value":"::1"},{"name":"Comment Author User Agent","value":"Mozilla\/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/79.0.3945.130 Safari\/537.36"},{"name":"Comment Date","value":"2020-01-31 19:55:19"},{"name":"Comment Content","value":"Test"},{"name":"Comment URL","value":"<a href=\"http:\/\/localhost:8888\/46894\/2020\/01\/31\/hello-world\/#comment-2\" target=\"_blank\" rel=\"noopener\">http:\/\/localhost:8888\/46894\/2020\/01\/31\/hello-world\/#comment-2<\/a>"}],"comment-3":[{"name":"Comment Author","value":"User Name"},{"name":"Comment Author Email","value":"export-requester@example.com"},{"name":"Comment Author IP","value":"::1"},{"name":"Comment Author User Agent","value":"Mozilla\/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/79.0.3945.130 Safari\/537.36"},{"name":"Comment Date","value":"2020-01-31 20:55:19"},{"name":"Comment Content","value":"Test #2"},{"name":"Comment URL","value":"<a href=\"http:\/\/localhost:8888\/46894\/2020\/01\/31\/hello-world\/#comment-3\" target=\"_blank\" rel=\"noopener\">http:\/\/localhost:8888\/46894\/2020\/01\/31\/hello-world\/#comment-3<\/a>"}]}}', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test should generate JSON error when JSON encoding fails. // obf
	 * // obf
	 * @ticket 52892 // obf
	 */ // obf
	public function test_should_generate_json_error_when_json_encoding_fails() { // obf
		add_filter( 'get_post_metadata', array( $v_njxnq, 'filter_export_data_grouped_metadata' ), 10, 3 ); // obf

		// Validate JSON encoding fails and returns `false`. // obf
		$v_umaog = get_post_meta( self::$v_bjydx, '_export_data_grouped', true ); // obf
		$v_njxnq->assertFalse( wp_json_encode( $v_umaog ) ); // obf

		$v_njxnq->expectException( 'WPDieException' ); // obf
		$v_njxnq->expectOutputString( '{"success":false,"data":"Unable to encode the personal data for export. Error: Type is not supported"}' ); // obf
		wp_privacy_generate_personal_data_export_file( self::$v_bjydx ); // obf
	} // obf

	public function filter_export_data_grouped_metadata( $v_ykirx, $v_ntfke, $v_fuuxi ) { // obf
		if ( $v_ntfke !== self::$v_bjydx ) { // obf
			return $v_ykirx; // obf
		} // obf

		if ( '_export_data_grouped' !== $v_fuuxi ) { // obf
			return $v_ykirx; // obf
		} // obf

		$v_lempb = fopen( __FILE__, 'r' ); // obf

		$v_ykirx = array( // obf
			'user' => array( // obf
				'group_label'       => 'User', // obf
				'group_description' => 'User&#8217;s profile data.', // obf
				'items'             => array(), // obf
				'resource'          => $v_lempb, // obf
			), // obf
		); // obf

		fclose( $v_lempb ); // obf

		return array( $v_ykirx ); // obf
	} // obf
} // obf