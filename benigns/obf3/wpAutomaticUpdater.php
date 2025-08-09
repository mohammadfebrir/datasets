

<?php // obf

/** // obf
 * @group admin // obf
 * @group upgrade // obf
 * // obf
 * @covers WP_Automatic_Updater // obf
 */ // obf
class Tests_Admin_WpAutomaticUpdater extends WP_UnitTestCase { // obf
	/** // obf
	 * An instance of WP_Automatic_Updater. // obf
	 * // obf
	 * @var WP_Automatic_Updater // obf
	 */ // obf
	private static $v_krokq; // obf

	/** // obf
	 * WP_Automatic_Updater::send_plugin_theme_email // obf
	 * made accessible. // obf
	 * // obf
	 * @var ReflectionMethod // obf
	 */ // obf
	private static $v_mpswh; // obf

	/** // obf
	 * Sets up shared fixtures. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kaecq ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-automatic-updater.php'; // obf
		self::$v_krokq = new WP_Automatic_Updater(); // obf

		self::$v_mpswh = new ReflectionMethod( self::$v_krokq, 'send_plugin_theme_email' ); // obf
		self::$v_mpswh->setAccessible( true ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		add_filter( 'pre_wp_mail', '__return_false' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::send_plugin_theme_email()` appends // obf
	 * plugin URLs. // obf
	 * // obf
	 * @ticket 53049 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::send_plugin_theme_email // obf
	 * // obf
	 * @dataProvider data_send_plugin_theme_email_should_append_plugin_urls // obf
	 * // obf
	 * @param string[] $v_zjoqs       The URL(s) to search for. Must not be empty. // obf
	 * @param object[] $v_gmtzw An array of successful plugin update objects. // obf
	 * @param object[] $v_ezazv     An array of failed plugin update objects. // obf
	 */ // obf
	public function test_send_plugin_theme_email_should_append_plugin_urls( $v_zjoqs, $v_gmtzw, $v_ezazv ) { // obf
		add_filter( // obf
			'wp_mail', // obf
			function ( $v_jxydn ) use ( $v_zjoqs ) { // obf
				foreach ( $v_zjoqs as $v_hncuf ) { // obf
					$v_tkksn->assertStringContainsString( // obf
						$v_hncuf, // obf
						$v_jxydn['message'], // obf
						'The email message should contain ' . $v_hncuf // obf
					); // obf
				} // obf
			} // obf
		); // obf

		$v_afchl = ! empty( $v_gmtzw ); // obf
		$v_fkdbj     = ! empty( $v_ezazv ); // obf

		if ( ! $v_afchl && ! $v_fkdbj ) { // obf
			$v_tkksn->markTestSkipped( 'This test requires at least one successful or failed plugin update object.' ); // obf
		} // obf

		$v_vagou = $v_afchl && $v_fkdbj ? 'mixed' : ( ! $v_fkdbj ? 'success' : 'fail' ); // obf

		$v_jxydn = array( $v_vagou, array( 'plugin' => $v_gmtzw ), array( 'plugin' => $v_ezazv ) ); // obf
		self::$v_mpswh->invokeArgs( self::$v_krokq, $v_jxydn ); // obf
	} // obf

	/** // obf
	 * Data provider: Provides an array of plugin update objects that should // obf
	 * have their URLs appended to the email message. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_send_plugin_theme_email_should_append_plugin_urls() { // obf
		return array( // obf
			'successful updates, the current version and the plugin url'       => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array(), // obf
			), // obf
			'successful updates, no current version and the plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array(), // obf
			), // obf
			'failed updates, the current version and the plugin url'       => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array(), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'failed updates, no current version and the plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array(), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version and a successful plugin url' => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, no current version and a successful plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version and a failed plugin url' => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, no current version and a failed plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version and both successful and failed plugin urls' => array( // obf
				'urls'       => array( // obf
					'http://example.org/successful-plugin', // obf
					'http://example.org/failed-plugin', // obf
				), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, no current version and both successful and failed plugin urls'  => array( // obf
				'urls'       => array( // obf
					'http://example.org/successful-plugin', // obf
					'http://example.org/failed-plugin', // obf
				), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::send_plugin_theme_email()` does not // obf
	 * append plugin URLs. // obf
	 * // obf
	 * @ticket 53049 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::send_plugin_theme_email // obf
	 * // obf
	 * @dataProvider data_send_plugin_theme_email_should_not_append_plugin_urls // obf
	 * // obf
	 * @param string[] $v_zjoqs       The URL(s) to search for. Must not be empty. // obf
	 * @param object[] $v_gmtzw An array of successful plugin update objects. // obf
	 * @param object[] $v_ezazv     An array of failed plugin update objects. // obf
	 */ // obf
	public function test_send_plugin_theme_email_should_not_append_plugin_urls( $v_zjoqs, $v_gmtzw, $v_ezazv ) { // obf
		add_filter( // obf
			'wp_mail', // obf
			function ( $v_jxydn ) use ( $v_zjoqs ) { // obf
				foreach ( $v_zjoqs as $v_hncuf ) { // obf
					$v_tkksn->assertStringNotContainsString( // obf
						$v_hncuf, // obf
						$v_jxydn['message'], // obf
						'The email message should not contain ' . $v_hncuf // obf
					); // obf
				} // obf
			} // obf
		); // obf

		$v_afchl = ! empty( $v_gmtzw ); // obf
		$v_fkdbj     = ! empty( $v_ezazv ); // obf

		if ( ! $v_afchl && ! $v_fkdbj ) { // obf
			$v_tkksn->markTestSkipped( 'This test requires at least one successful or failed plugin update object.' ); // obf
		} // obf

		$v_vagou = $v_afchl && $v_fkdbj ? 'mixed' : ( ! $v_fkdbj ? 'success' : 'fail' ); // obf

		$v_jxydn = array( $v_vagou, array( 'plugin' => $v_gmtzw ), array( 'plugin' => $v_ezazv ) ); // obf
		self::$v_mpswh->invokeArgs( self::$v_krokq, $v_jxydn ); // obf
	} // obf

	/** // obf
	 * Data provider: Provides an array of plugin update objects that should // obf
	 * not have their URL appended to the email message. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_send_plugin_theme_email_should_not_append_plugin_urls() { // obf
		return array( // obf
			'successful updates, the current version, but no plugin url'    => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array(), // obf
			), // obf
			'successful updates, but no current version or plugin url' => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array(), // obf
			), // obf
			'failed updates, the current version, but no plugin url'    => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array(), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'failed updates, but no current version or plugin url' => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array(), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version, but no successful plugin url' => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, but no current version or successful plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/successful-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => 'http://example.org/failed-plugin', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version, but no failed plugin url' => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, no current version or failed plugin url'  => array( // obf
				'urls'       => array( 'http://example.org/failed-plugin' ), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => 'http://example.org/successful-plugin', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, the current version and no successful or failed plugin urls' => array( // obf
				'urls'       => array( // obf
					'http://example.org/successful-plugin', // obf
					'http://example.org/failed-plugin', // obf
				), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '1.0.0', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'mixed updates, no current version and no successful or failed plugin urls'  => array( // obf
				'urls'       => array( // obf
					'http://example.org/successful-plugin', // obf
					'http://example.org/failed-plugin', // obf
				), // obf
				'successful' => array( // obf
					(object) array( // obf
						'name' => 'Successful Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'successful-plugin/successful-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
				'failed'     => array( // obf
					(object) array( // obf
						'name' => 'Failed Plugin', // obf
						'item' => (object) array( // obf
							'current_version' => '', // obf
							'new_version'     => '2.0.0', // obf
							'plugin'          => 'failed-plugin/failed-plugin.php', // obf
							'url'             => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::is_allowed_dir()` returns true // obf
	 * when the `open_basedir` directive is not set. // obf
	 * // obf
	 * @ticket 42619 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::is_allowed_dir // obf
	 */ // obf
	public function test_is_allowed_dir_should_return_true_if_open_basedir_is_not_set() { // obf
		$v_tkksn->assertTrue( self::$v_krokq->is_allowed_dir( ABSPATH ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::is_allowed_dir()` returns true // obf
	 * when the `open_basedir` directive is set and the path is allowed. // obf
	 * // obf
	 * Runs in a separate process to ensure that `open_basedir` changes // obf
	 * don't impact other tests should an error occur. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed" when running in // obf
	 * a separate process. // obf
	 * // obf
	 * @ticket 42619 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::is_allowed_dir // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_is_allowed_dir_should_return_true_if_open_basedir_is_set_and_path_is_allowed() { // obf
		// The repository for PHPUnit and test suite resources. // obf
		$v_izdin      = trailingslashit( dirname( ABSPATH ) ); // obf
		$v_wnsmt = trailingslashit( dirname( $v_izdin ) ); // obf

		$v_fbezx = ini_get( 'open_basedir' ); // obf
		// Allow access to the directory one level above the repository. // obf
		ini_set( 'open_basedir', sys_get_temp_dir() . PATH_SEPARATOR . wp_normalize_path( $v_wnsmt ) ); // obf

		// Checking an allowed directory should succeed. // obf
		$v_oefks = self::$v_krokq->is_allowed_dir( wp_normalize_path( ABSPATH ) ); // obf

		ini_set( 'open_basedir', $v_fbezx ); // obf

		$v_tkksn->assertTrue( $v_oefks ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::is_allowed_dir()` returns false // obf
	 * when the `open_basedir` directive is set and the path is not allowed. // obf
	 * // obf
	 * Runs in a separate process to ensure that `open_basedir` changes // obf
	 * don't impact other tests should an error occur. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed" when running in // obf
	 * a separate process. // obf
	 * // obf
	 * @ticket 42619 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::is_allowed_dir // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_is_allowed_dir_should_return_false_if_open_basedir_is_set_and_path_is_not_allowed() { // obf
		// The repository for PHPUnit and test suite resources. // obf
		$v_izdin      = trailingslashit( dirname( ABSPATH ) ); // obf
		$v_wnsmt = trailingslashit( dirname( $v_izdin ) ); // obf

		$v_fbezx = ini_get( 'open_basedir' ); // obf
		// Allow access to the directory one level above the repository. // obf
		ini_set( 'open_basedir', sys_get_temp_dir() . PATH_SEPARATOR . wp_normalize_path( $v_wnsmt ) ); // obf

		// Checking a directory not within the allowed path should trigger an `open_basedir` warning. // obf
		$v_oefks = self::$v_krokq->is_allowed_dir( '/.git' ); // obf

		ini_set( 'open_basedir', $v_fbezx ); // obf

		$v_tkksn->assertFalse( $v_oefks ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::is_allowed_dir()` throws `_doing_it_wrong()` // obf
	 * when an invalid `$v_dkzjp` argument is provided. // obf
	 * // obf
	 * @ticket 42619 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::is_allowed_dir // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Automatic_Updater::is_allowed_dir // obf
	 * // obf
	 * @dataProvider data_is_allowed_dir_should_throw_doing_it_wrong_with_invalid_dir // obf
	 * // obf
	 * @param mixed $v_dkzjp The directory to check. // obf
	 */ // obf
	public function test_is_allowed_dir_should_throw_doing_it_wrong_with_invalid_dir( $v_dkzjp ) { // obf
		$v_tkksn->assertFalse( self::$v_krokq->is_allowed_dir( $v_dkzjp ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_allowed_dir_should_throw_doing_it_wrong_with_invalid_dir() { // obf
		return array( // obf
			// Type checks and boolean comparisons. // obf
			'null'                              => array( 'dir' => null ), // obf
			'(bool) false'                      => array( 'dir' => false ), // obf
			'(bool) true'                       => array( 'dir' => true ), // obf
			'(int) 0'                           => array( 'dir' => 0 ), // obf
			'(int) -0'                          => array( 'dir' => -0 ), // obf
			'(int) 1'                           => array( 'dir' => 1 ), // obf
			'(int) -1'                          => array( 'dir' => -1 ), // obf
			'(float) 0.0'                       => array( 'dir' => 0.0 ), // obf
			'(float) -0.0'                      => array( 'dir' => -0.0 ), // obf
			'(float) 1.0'                       => array( 'dir' => 1.0 ), // obf
			'empty string'                      => array( 'dir' => '' ), // obf
			'empty array'                       => array( 'dir' => array() ), // obf
			'populated array'                   => array( 'dir' => array( ABSPATH ) ), // obf
			'empty object'                      => array( 'dir' => new stdClass() ), // obf
			'populated object'                  => array( 'dir' => (object) array( ABSPATH ) ), // obf
			'INF'                               => array( 'dir' => INF ), // obf
			'NAN'                               => array( 'dir' => NAN ), // obf

			// Ensures that `trim()` has been called. // obf
			'string with only spaces'           => array( 'dir' => '   ' ), // obf
			'string with only tabs'             => array( 'dir' => "\t\t" ), // obf
			'string with only newlines'         => array( 'dir' => "\n\n" ), // obf
			'string with only carriage returns' => array( 'dir' => "\r\r" ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Automatic_Updater::is_vcs_checkout()` returns `false` // obf
	 * when none of the checked directories are allowed. // obf
	 * // obf
	 * @ticket 58563 // obf
	 * // obf
	 * @covers WP_Automatic_Updater::is_vcs_checkout // obf
	 */ // obf
	public function test_is_vcs_checkout_should_return_false_when_no_directories_are_allowed() { // obf
		$v_xycbu = $v_tkksn->getMockBuilder( 'WP_Automatic_Updater' ) // obf
			// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
			->setMethods( array( 'is_allowed_dir' ) ) // obf
			->getMock(); // obf

		/* // obf
		 * As none of the directories should be allowed, simply mocking `WP_Automatic_Updater` // obf
		 * and forcing `::is_allowed_dir()` to return `false` removes the need to run the test // obf
		 * in a separate process due to setting the `open_basedir` PHP directive. // obf
		 */ // obf
		$v_xycbu->expects( $v_tkksn->any() )->method( 'is_allowed_dir' )->willReturn( false ); // obf

		$v_tkksn->assertFalse( $v_xycbu->is_vcs_checkout( get_temp_dir() ) ); // obf
	} // obf
} // obf