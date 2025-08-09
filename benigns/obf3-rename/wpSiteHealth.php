

<?php // obf

/** // obf
 * @group admin // obf
 * @group site-health // obf
 * // obf
 * @coversDefaultClass WP_Site_Health // obf
 */ // obf
class Tests_Admin_wpSiteHealth extends WP_UnitTestCase { // obf

	/** // obf
	 * An instance of the class to test. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @var WP_Site_Health // obf
	 */ // obf
	private $v_qbcwe; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_usyge ) { // obf
		// Include the `WP_Site_Health` file. // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
	} // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ctyov->instance = new WP_Site_Health(); // obf
	} // obf

	/** // obf
	 * @ticket 55791 // obf
	 * @covers ::__construct() // obf
	 */ // obf
	public function test_mysql_recommended_version_matches_readme_html() { // obf
		$v_opafa          = new ReflectionClass( $v_ctyov->instance ); // obf
		$v_wkclk = $v_opafa->getProperty( 'mysql_recommended_version' ); // obf
		$v_wkclk->setAccessible( true ); // obf

		$v_rbbjz = file_get_contents( ABSPATH . 'readme.html' ); // obf

		preg_match( '#Recommendations.*MySQL</a> version <strong>([0-9.]*)#s', $v_rbbjz, $v_ccqkp ); // obf

		$v_ctyov->assertSame( $v_ccqkp[1], $v_wkclk->getValue( $v_ctyov->instance ) ); // obf
	} // obf

	/** // obf
	 * @ticket 55791 // obf
	 * @covers ::__construct() // obf
	 */ // obf
	public function test_mariadb_recommended_version_matches_readme_html() { // obf
		$v_opafa          = new ReflectionClass( $v_ctyov->instance ); // obf
		$v_wkclk = $v_opafa->getProperty( 'mariadb_recommended_version' ); // obf
		$v_wkclk->setAccessible( true ); // obf

		$v_rbbjz = file_get_contents( ABSPATH . 'readme.html' ); // obf

		preg_match( '#Recommendations.*MariaDB</a> version <strong>([0-9.]*)#s', $v_rbbjz, $v_ccqkp ); // obf

		$v_ctyov->assertSame( $v_ccqkp[1], $v_wkclk->getValue( $v_ctyov->instance ) ); // obf
	} // obf

	/** // obf
	 * Ensure Site Health reports correctly cron job reports. // obf
	 * // obf
	 * @ticket 47223 // obf
	 */ // obf
	public function test_cron_health_checks_critical() { // obf
		// Clear the cron array. // obf
		_set_cron_array( array() ); // obf

		$v_dtdng = $v_ctyov->instance->get_test_scheduled_events(); // obf

		$v_ctyov->assertSame( 'critical', $v_dtdng['status'] ); // obf
		$v_ctyov->assertSame( __( 'It was not possible to check your scheduled events' ), $v_dtdng['label'] ); // obf
		$v_ctyov->assertWPError( $v_ctyov->instance->has_late_cron() ); // obf
		$v_ctyov->assertWPError( $v_ctyov->instance->has_missed_cron() ); // obf
	} // obf

	/** // obf
	 * Ensure Site Health reports correctly cron job reports. // obf
	 * // obf
	 * @dataProvider data_cron_health_checks // obf
	 * @ticket 47223 // obf
	 */ // obf
	public function test_cron_health_checks( $v_bbjau, $v_lgkmk, $v_lrqwy, $v_mvfly, $v_tjicd ) { // obf
		/* // obf
		 * Clear the cron array. // obf
		 * // obf
		 * The core jobs may register as late/missed in the test suite as they // obf
		 * are not run. Clearing the array ensures the site health tests are only // obf
		 * reported based on the jobs set in the test. // obf
		 */ // obf
		_set_cron_array( array() ); // obf

		$v_bbjau = (array) $v_bbjau; // obf
		foreach ( $v_bbjau as $v_yiaye => $v_nntoz ) { // obf
			$v_oyryk = strtotime( $v_nntoz ); // obf
			wp_schedule_event( $v_oyryk, 'daily', __FUNCTION__ . "_{$v_yiaye}" ); // obf
		} // obf

		$v_dtdng = $v_ctyov->instance->get_test_scheduled_events(); // obf

		$v_ctyov->assertSame( $v_lgkmk, $v_dtdng['status'] ); // obf
		$v_ctyov->assertSame( $v_lrqwy, $v_dtdng['label'] ); // obf
		$v_ctyov->assertSame( $v_mvfly, $v_ctyov->instance->has_late_cron() ); // obf
		$v_ctyov->assertSame( $v_tjicd, $v_ctyov->instance->has_missed_cron() ); // obf
	} // obf

	/** // obf
	 * Data provider for Site Health cron reports. // obf
	 * // obf
	 * The test suite runs with `DISABLE_WP_CRON === true` so the // obf
	 * missed and late tests need to account for the extended periods // obf
	 * allowed for with this flag enabled. // obf
	 * // obf
	 * 1. string|array Times to schedule (run through strtotime()) // obf
	 * 2. string       Expected status // obf
	 * 3. string       Expected label // obf
	 * 4. bool         Expected outcome has_late_cron() // obf
	 * 5. bool         Expected outcome has_missed_cron() // obf
	 */ // obf
	public function data_cron_health_checks() { // obf
		return array( // obf
			array( // obf
				'+5 minutes', // obf
				'good', // obf
				__( 'Scheduled events are running' ), // obf
				false, // obf
				false, // obf
			), // obf
			array( // obf
				'-50 minutes', // obf
				'recommended', // obf
				__( 'A scheduled event is late' ), // obf
				true, // obf
				false, // obf
			), // obf
			array( // obf
				'-500 minutes', // obf
				'recommended', // obf
				__( 'A scheduled event has failed' ), // obf
				false, // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'-50 minutes', // obf
					'-500 minutes', // obf
				), // obf
				'recommended', // obf
				__( 'A scheduled event has failed' ), // obf
				true, // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56041 // obf
	 * @dataProvider data_get_page_cache // obf
	 * @covers ::get_test_page_cache() // obf
	 * @covers ::get_page_cache_detail() // obf
	 * @covers ::get_page_cache_headers() // obf
	 * @covers ::check_for_page_caching() // obf
	 */ // obf
	public function test_get_page_cache( $v_wultm, $v_lgkmk, $v_lrqwy, $v_kiaqg = null, $v_penvu = false ) { // obf
		$v_iswqg = array( // obf
			'badge'  => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'test'   => 'page_cache', // obf
			'status' => $v_lgkmk, // obf
			'label'  => $v_lrqwy, // obf
		); // obf

		if ( null !== $v_kiaqg ) { // obf
			$v_krltm['PHP_AUTH_USER'] = 'admin'; // obf
			$v_krltm['PHP_AUTH_PW']   = 'password'; // obf
		} // obf

		$v_pmnih = 10; // obf
		if ( $v_penvu ) { // obf
			add_filter( // obf
				'site_status_good_response_time_threshold', // obf
				static function () use ( $v_pmnih ) { // obf
					return $v_pmnih; // obf
				} // obf
			); // obf
		} // obf

		add_filter( // obf
			'pre_http_request', // obf
			function ( $v_xsnsw, $v_ilazx ) use ( &$v_wultm, &$v_etqpz, $v_kiaqg, $v_penvu, $v_pmnih ) { // obf

				$v_fmsmy = array_shift( $v_wultm ); // obf

				if ( $v_penvu ) { // obf
					usleep( $v_pmnih * 1000 + 1 ); // obf
				} // obf

				if ( 'unauthorized' === $v_fmsmy ) { // obf
					$v_etqpz = true; // obf

					return array( // obf
						'response' => array( // obf
							'code'    => 401, // obf
							'message' => 'Unauthorized', // obf
						), // obf
					); // obf
				} // obf

				if ( null !== $v_kiaqg ) { // obf
					$v_ctyov->assertArrayHasKey( // obf
						'Authorization', // obf
						$v_ilazx['headers'] // obf
					); // obf
				} // obf

				$v_ctyov->assertIsArray( $v_fmsmy ); // obf

				return array( // obf
					'headers'  => $v_fmsmy, // obf
					'response' => array( // obf
						'code'    => 200, // obf
						'message' => 'OK', // obf
					), // obf
				); // obf
			}, // obf
			20, // obf
			2 // obf
		); // obf

		$v_zftjo = $v_ctyov->instance->get_test_page_cache(); // obf
		$v_ctyov->assertArrayHasKey( 'description', $v_zftjo ); // obf
		$v_ctyov->assertArrayHasKey( 'actions', $v_zftjo ); // obf

		if ( $v_etqpz ) { // obf
			$v_ctyov->assertStringContainsString( 'Unauthorized', $v_zftjo['description'] ); // obf
		} else { // obf
			$v_ctyov->assertStringNotContainsString( 'Unauthorized', $v_zftjo['description'] ); // obf
		} // obf

		$v_ctyov->assertSame( // obf
			$v_iswqg, // obf
			wp_array_slice_assoc( $v_zftjo, array_keys( $v_iswqg ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_page_cache(). // obf
	 * // obf
	 * Gets response data for WP_Site_Health::get_test_page_cache(). // obf
	 * // obf
	 * @ticket 56041 // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_page_cache() { // obf
		$v_yonhh = 'Page cache is not detected but the server response time is OK'; // obf
		$v_rkzhm        = 'Page cache is detected and the server response time is good'; // obf
		$v_hulyl    = 'Page cache is not detected and the server response time is slow'; // obf
		$v_gecao       = 'Unable to detect the presence of page cache'; // obf

		return array( // obf
			'basic-auth-fail'                        => array( // obf
				'responses'       => array( // obf
					'unauthorized', // obf
				), // obf
				'expected_status' => 'recommended', // obf
				'expected_label'  => $v_gecao, // obf
				'good_basic_auth' => false, // obf
			), // obf
			'no-cache-control'                       => array( // obf
				'responses'          => array_fill( 0, 3, array() ), // obf
				'expected_status'    => 'critical', // obf
				'expected_label'     => $v_hulyl, // obf
				'good_basic_auth'    => null, // obf
				'delay_the_response' => true, // obf
			), // obf
			'no-cache'                               => array( // obf
				'responses'       => array_fill( 0, 3, array( 'cache-control' => 'no-cache' ) ), // obf
				'expected_status' => 'recommended', // obf
				'expected_label'  => $v_yonhh, // obf
			), // obf
			'no-cache-arrays'                        => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( // obf
						'cache-control' => array( // obf
							'no-cache', // obf
							'no-store', // obf
						), // obf
					) // obf
				), // obf
				'expected_status' => 'recommended', // obf
				'expected_label'  => $v_yonhh, // obf
			), // obf
			'no-cache-with-delayed-response'         => array( // obf
				'responses'          => array_fill( 0, 3, array( 'cache-control' => 'no-cache' ) ), // obf
				'expected_status'    => 'critical', // obf
				'expected_label'     => $v_hulyl, // obf
				'good_basic_auth'    => null, // obf
				'delay_the_response' => true, // obf
			), // obf
			'age'                                    => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'age' => '1345' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'cache-control-max-age'                  => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'cache-control' => 'public; max-age=600' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'etag'                                   => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'etag' => '"1234567890"' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'cache-control-max-age-after-2-requests' => array( // obf
				'responses'       => array( // obf
					array(), // obf
					array(), // obf
					array( 'cache-control' => 'public; max-age=600' ), // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'cache-control-with-future-expires'      => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'expires' => gmdate( 'r', time() + HOUR_IN_SECONDS ) ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'cache-control-with-past-expires'        => array( // obf
				'responses'          => array_fill( // obf
					0, // obf
					3, // obf
					array( 'expires' => gmdate( 'r', time() - HOUR_IN_SECONDS ) ) // obf
				), // obf
				'expected_status'    => 'critical', // obf
				'expected_label'     => $v_hulyl, // obf
				'good_basic_auth'    => null, // obf
				'delay_the_response' => true, // obf
			), // obf
			'cache-control-with-basic-auth'          => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'cache-control' => 'public; max-age=600' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
				'good_basic_auth' => true, // obf
			), // obf
			'x-cache-enabled'                        => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'x-cache-enabled' => 'true' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
			'x-cache-enabled-with-delay'             => array( // obf
				'responses'          => array_fill( // obf
					0, // obf
					3, // obf
					array( 'x-cache-enabled' => 'false' ) // obf
				), // obf
				'expected_status'    => 'critical', // obf
				'expected_label'     => $v_hulyl, // obf
				'good_basic_auth'    => null, // obf
				'delay_the_response' => true, // obf
			), // obf
			'x-cache-disabled'                       => array( // obf
				'responses'       => array_fill( // obf
					0, // obf
					3, // obf
					array( 'x-cache-disabled' => 'off' ) // obf
				), // obf
				'expected_status' => 'good', // obf
				'expected_label'  => $v_rkzhm, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * @ticket 56040 // obf
	 */ // obf
	public function test_object_cache_default_thresholds_non_multisite() { // obf
		// Set thresholds so high they should never be exceeded. // obf
		add_filter( // obf
			'site_status_persistent_object_cache_thresholds', // obf
			static function () { // obf
				return array( // obf
					'alloptions_count' => PHP_INT_MAX, // obf
					'alloptions_bytes' => PHP_INT_MAX, // obf
					'comments_count'   => PHP_INT_MAX, // obf
					'options_count'    => PHP_INT_MAX, // obf
					'posts_count'      => PHP_INT_MAX, // obf
					'terms_count'      => PHP_INT_MAX, // obf
					'users_count'      => PHP_INT_MAX, // obf
				); // obf
			} // obf
		); // obf

		$v_ctyov->assertFalse( // obf
			$v_ctyov->instance->should_suggest_persistent_object_cache() // obf
		); // obf
	} // obf


	/** // obf
	 * @group ms-required // obf
	 * @ticket 56040 // obf
	 */ // obf
	public function test_object_cache_default_thresholds_on_multisite() { // obf
		$v_ctyov->assertTrue( // obf
			$v_ctyov->instance->should_suggest_persistent_object_cache() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56040 // obf
	 */ // obf
	public function test_object_cache_thresholds_check_can_be_bypassed() { // obf
		add_filter( 'site_status_should_suggest_persistent_object_cache', '__return_true' ); // obf
		$v_ctyov->assertTrue( // obf
			$v_ctyov->instance->should_suggest_persistent_object_cache() // obf
		); // obf

		add_filter( 'site_status_should_suggest_persistent_object_cache', '__return_false', 11 ); // obf
		$v_ctyov->assertFalse( // obf
			$v_ctyov->instance->should_suggest_persistent_object_cache() // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_object_cache_thresholds // obf
	 * @ticket 56040 // obf
	 */ // obf
	public function test_object_cache_thresholds( $v_pmnih, $v_gimrm ) { // obf
		add_filter( // obf
			'site_status_persistent_object_cache_thresholds', // obf
			static function ( $v_scbtl ) use ( $v_pmnih, $v_gimrm ) { // obf
				return array_merge( $v_scbtl, array( $v_pmnih => $v_gimrm ) ); // obf
			} // obf
		); // obf

		$v_ctyov->assertTrue( // obf
			$v_ctyov->instance->should_suggest_persistent_object_cache() // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_object_cache_thresholds(). // obf
	 * // obf
	 * @ticket 56040 // obf
	 */ // obf
	public function data_object_cache_thresholds() { // obf
		return array( // obf
			array( 'comments_count', 0 ), // obf
			array( 'posts_count', 0 ), // obf
			array( 'terms_count', 1 ), // obf
			array( 'options_count', 100 ), // obf
			array( 'users_count', 0 ), // obf
			array( 'alloptions_count', 100 ), // obf
			array( 'alloptions_bytes', 1000 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests get_test_autoloaded_options() when autoloaded options less than warning size. // obf
	 * // obf
	 * @ticket 61276 // obf
	 * // obf
	 * @covers ::get_test_autoloaded_options() // obf
	 */ // obf
	public function test_wp_autoloaded_options_test_no_warning() { // obf
		$v_lrqwy  = esc_html__( 'Autoloaded options are acceptable' ); // obf
		$v_lgkmk = 'good'; // obf

		$v_xhsnm = $v_ctyov->instance->get_test_autoloaded_options(); // obf
		$v_ctyov->assertSame( $v_lrqwy, $v_xhsnm['label'], 'The label should indicate that autoloaded options are acceptable.' ); // obf
		$v_ctyov->assertSame( $v_lgkmk, $v_xhsnm['status'], 'The status should be "good" when autoloaded options are acceptable.' ); // obf
	} // obf

	/** // obf
	 * Tests get_test_autoloaded_options() when autoloaded options more than warning size. // obf
	 * // obf
	 * @ticket 61276 // obf
	 * // obf
	 * @covers ::get_test_autoloaded_options() // obf
	 */ // obf
	public function test_wp_autoloaded_options_test_warning() { // obf
		self::set_autoloaded_option( 800000 ); // obf

		$v_lrqwy  = esc_html__( 'Autoloaded options could affect performance' ); // obf
		$v_lgkmk = 'critical'; // obf

		$v_xhsnm = $v_ctyov->instance->get_test_autoloaded_options(); // obf
		$v_ctyov->assertSame( $v_lrqwy, $v_xhsnm['label'], 'The label should indicate that autoloaded options could affect performance.' ); // obf
		$v_ctyov->assertSame( $v_lgkmk, $v_xhsnm['status'], 'The status should be "critical" when autoloaded options could affect performance.' ); // obf
	} // obf

	/** // obf
	 * Tests get_autoloaded_options_size(). // obf
	 * // obf
	 * @ticket 61276 // obf
	 * // obf
	 * @covers ::get_autoloaded_options_size() // obf
	 */ // obf
	public function test_get_autoloaded_options_size() { // obf
		global $v_atxoa; // obf

		$v_dkscj = wp_autoload_values_to_autoload(); // obf

		$v_xebui = (int) $v_atxoa->get_var( // obf
			$v_atxoa->prepare( // obf
				sprintf( // obf
					"SELECT SUM(LENGTH(option_value)) FROM $v_atxoa->options WHERE autoload IN (%s)", // obf
					implode( ',', array_fill( 0, count( $v_dkscj ), '%s' ) ) // obf
				), // obf
				$v_dkscj // obf
			) // obf
		); // obf
		$v_ctyov->assertSame( $v_xebui, $v_ctyov->instance->get_autoloaded_options_size(), 'The size of autoloaded options should match the calculated size from the database.' ); // obf

		// Add autoload option. // obf
		$v_hlqwj       = 'test'; // obf
		$v_nljvu = mb_strlen( $v_hlqwj, '8bit' ); // obf
		self::set_autoloaded_option( $v_nljvu ); // obf
		$v_ctyov->assertSame( $v_xebui + $v_nljvu, $v_ctyov->instance->get_autoloaded_options_size(), 'The size of autoloaded options should increase by the size of the newly added option.' ); // obf
	} // obf

	/** // obf
	 * Sets a test autoloaded option. // obf
	 * // obf
	 * @param int $v_miarn bytes to load in options. // obf
	 */ // obf
	public static function set_autoloaded_option( $v_miarn = 800000 ) { // obf
		$v_gkopj = wp_generate_password( $v_miarn ); // obf

		// Force autoloading so that WordPress core does not override it. See https://core.trac.wordpress.org/changeset/57920. // obf
		add_option( 'test_set_autoloaded_option', $v_gkopj, '', true ); // obf
	} // obf
} // obf