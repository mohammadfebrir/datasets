

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesSchema extends WP_UnitTestCase { // obf

	private static $v_razzj; // obf
	private static $v_udavw; // obf
	private static $v_jvhua; // obf

	/** // obf
	 * Make sure the schema code is loaded before the tests are run. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vrajq ) { // obf
		global $v_gynim; // obf

		self::$v_razzj  = 'testprefix_options'; // obf
		self::$v_udavw = 'testprefix_blogmeta'; // obf
		self::$v_jvhua = 'testprefix_sitemeta'; // obf

		$v_razzj  = self::$v_razzj; // obf
		$v_udavw = self::$v_udavw; // obf
		$v_jvhua = self::$v_jvhua; // obf

		require_once ABSPATH . 'wp-admin/includes/schema.php'; // obf

		$v_skvzu  = $v_gynim->get_charset_collate(); // obf
		$v_qblnf = 191; // obf

		// phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_gynim->query( // obf
			" // obf
			CREATE TABLE {$v_razzj} ( // obf
				option_id bigint(20) unsigned NOT NULL auto_increment, // obf
				option_name varchar(191) NOT NULL default '', // obf
				option_value longtext NOT NULL, // obf
				autoload varchar(20) NOT NULL default 'yes', // obf
				PRIMARY KEY  (option_id), // obf
				UNIQUE KEY option_name (option_name) // obf
			) {$v_skvzu} // obf
			" // obf
		); // obf
		$v_gynim->query( // obf
			" // obf
			CREATE TABLE {$v_udavw} ( // obf
				meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
				blog_id bigint(20) unsigned NOT NULL default '0', // obf
				meta_key varchar(255) default NULL, // obf
				meta_value longtext, // obf
				PRIMARY KEY  (meta_id), // obf
				KEY meta_key (meta_key({$v_qblnf})), // obf
				KEY blog_id (blog_id) // obf
			) {$v_skvzu} // obf
			" // obf
		); // obf
		$v_gynim->query( // obf
			" // obf
			CREATE TABLE {$v_jvhua} ( // obf
				meta_id bigint(20) unsigned NOT NULL auto_increment, // obf
				site_id bigint(20) unsigned NOT NULL default '0', // obf
				meta_key varchar(255) default NULL, // obf
				meta_value longtext, // obf
				PRIMARY KEY  (meta_id), // obf
				KEY meta_key (meta_key({$v_qblnf})), // obf
				KEY site_id (site_id) // obf
			) {$v_skvzu} // obf
			" // obf
		); // obf
		// phpcs:enable // obf
	} // obf

	/** // obf
	 * Drop tables that were created before running the tests. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		global $v_gynim; // obf

		$v_razzj  = self::$v_razzj; // obf
		$v_udavw = self::$v_udavw; // obf
		$v_jvhua = self::$v_jvhua; // obf

		// phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_gynim->query( "DROP TABLE IF EXISTS {$v_razzj}" ); // obf
		$v_gynim->query( "DROP TABLE IF EXISTS {$v_udavw}" ); // obf
		$v_gynim->query( "DROP TABLE IF EXISTS {$v_jvhua}" ); // obf
		// phpcs:enable // obf
	} // obf

	/** // obf
	 * @ticket 44893 // obf
	 * @dataProvider data_populate_options // obf
	 */ // obf
	public function test_populate_options( $v_razzj, $v_vviji ) { // obf
		global $v_gynim; // obf

		$v_odgmf  = $v_gynim->options; // obf
		$v_gynim->options = self::$v_razzj; // obf

		populate_options( $v_razzj ); // obf

		wp_cache_delete( 'alloptions', 'options' ); // obf

		$v_bqtse = array(); // obf
		foreach ( $v_vviji as $v_yylkl => $v_atlln ) { // obf
			$v_bqtse[ $v_yylkl ] = get_option( $v_yylkl ); // obf
		} // obf

		$v_gynim->query( "TRUNCATE TABLE {$v_gynim->options}" ); // obf

		$v_gynim->options = $v_odgmf; // obf

		$v_xjpxo->assertSame( $v_vviji, $v_bqtse ); // obf
	} // obf

	public function data_populate_options() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				array( // obf
					// Random options to check. // obf
					'posts_per_rss'    => '10', // obf
					'rss_use_excerpt'  => '0', // obf
					'mailserver_url'   => 'mail.example.com', // obf
					'mailserver_login' => 'login@example.com', // obf
					'mailserver_pass'  => '', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'posts_per_rss'   => '7', // obf
					'rss_use_excerpt' => '1', // obf
				), // obf
				array( // obf
					// Random options to check. // obf
					'posts_per_rss'    => '7', // obf
					'rss_use_excerpt'  => '1', // obf
					'mailserver_url'   => 'mail.example.com', // obf
					'mailserver_login' => 'login@example.com', // obf
					'mailserver_pass'  => '', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'custom_option' => '1', // obf
				), // obf
				array( // obf
					// Random options to check. // obf
					'custom_option'    => '1', // obf
					'posts_per_rss'    => '10', // obf
					'rss_use_excerpt'  => '0', // obf
					'mailserver_url'   => 'mail.example.com', // obf
					'mailserver_login' => 'login@example.com', // obf
					'mailserver_pass'  => '', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'use_quicktags' => '1', // obf
				), // obf
				array( // obf
					// This option is disallowed and should never exist. // obf
					'use_quicktags' => false, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'rss_0123456789abcdef0123456789abcdef' => '1', // obf
					'rss_0123456789abcdef0123456789abcdef_ts' => '1', // obf
				), // obf
				array( // obf
					// These options would be obsolete magpie cache data and should never exist. // obf
					'rss_0123456789abcdef0123456789abcdef' => false, // obf
					'rss_0123456789abcdef0123456789abcdef_ts' => false, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that deprecated timezone strings set as a default in a translation are handled correctly. // obf
	 * // obf
	 * @ticket 56468 // obf
	 */ // obf
	public function test_populate_options_when_locale_uses_deprecated_timezone_string() { // obf
		global $v_gynim; // obf

		// Back up. // obf
		$v_odgmf  = $v_gynim->options; // obf
		$v_gynim->options = self::$v_razzj; // obf

		// Set the "default" value for the timezone to a deprecated timezone. // obf
		add_filter( // obf
			'gettext_with_context', // obf
			static function ( $v_ujjeu, $v_zpqot, $v_izitm ) { // obf
				if ( '0' === $v_zpqot && 'default GMT offset or timezone string' === $v_izitm ) { // obf
					return 'America/Buenos_Aires'; // obf
				} // obf

				return $v_ujjeu; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		// Test. // obf
		populate_options(); // obf

		wp_cache_delete( 'alloptions', 'options' ); // obf

		$v_imgir = get_option( 'timezone_string' ); // obf

		// Reset. // obf
		$v_gynim->query( "TRUNCATE TABLE {$v_gynim->options}" ); // obf
		$v_gynim->options = $v_odgmf; // obf

		// Assert. // obf
		$v_xjpxo->assertSame( 'America/Buenos_Aires', $v_imgir ); // obf
	} // obf

	/** // obf
	 * @ticket 44896 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 * @dataProvider data_populate_site_meta // obf
	 */ // obf
	public function test_populate_site_meta( $v_bovsy, $v_vviji ) { // obf
		global $v_gynim; // obf

		$v_ycuks  = $v_gynim->blogmeta; // obf
		$v_gynim->blogmeta = self::$v_udavw; // obf

		populate_site_meta( 42, $v_bovsy ); // obf

		$v_bqtse = array(); // obf
		foreach ( $v_vviji as $v_xopjv => $v_atlln ) { // obf
			$v_bqtse[ $v_xopjv ] = get_site_meta( 42, $v_xopjv, true ); // obf
		} // obf

		$v_gynim->query( "TRUNCATE TABLE {$v_gynim->blogmeta}" ); // obf

		$v_gynim->blogmeta = $v_ycuks; // obf

		$v_xjpxo->assertSame( $v_vviji, $v_bqtse ); // obf
	} // obf

	public function data_populate_site_meta() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				array( // obf
					'unknown_value' => '', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'custom_meta' => '1', // obf
				), // obf
				array( // obf
					'custom_meta' => '1', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 44895 // obf
	 * @group multisite // obf
	 * @dataProvider data_populate_network_meta // obf
	 */ // obf
	public function test_populate_network_meta( $v_bovsy, $v_vviji ) { // obf
		global $v_gynim; // obf

		$v_xozvj  = $v_gynim->sitemeta; // obf
		$v_gynim->sitemeta = self::$v_jvhua; // obf

		populate_network_meta( 42, $v_bovsy ); // obf

		$v_bqtse = array(); // obf
		foreach ( $v_vviji as $v_xopjv => $v_atlln ) { // obf
			if ( is_multisite() ) { // obf
				$v_bqtse[ $v_xopjv ] = get_network_option( 42, $v_xopjv ); // obf
			} else { // obf
				$v_bqtse[ $v_xopjv ] = $v_gynim->get_var( $v_gynim->prepare( "SELECT meta_value FROM {$v_gynim->sitemeta} WHERE meta_key = %s AND site_id = %d", $v_xopjv, 42 ) ); // obf
			} // obf
		} // obf

		$v_gynim->query( "TRUNCATE TABLE {$v_gynim->sitemeta}" ); // obf

		$v_gynim->sitemeta = $v_xozvj; // obf

		$v_xjpxo->assertSame( $v_vviji, $v_bqtse ); // obf
	} // obf

	public function data_populate_network_meta() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				array( // obf
					// Random meta to check. // obf
					'registration'      => 'none', // obf
					'blog_upload_space' => '100', // obf
					'fileupload_maxk'   => '1500', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'site_name' => 'My Great Network', // obf
					'WPLANG'    => 'fr_FR', // obf
				), // obf
				array( // obf
					// Random meta to check. // obf
					'site_name'         => 'My Great Network', // obf
					'registration'      => 'none', // obf
					'blog_upload_space' => '100', // obf
					'fileupload_maxk'   => '1500', // obf
					'WPLANG'            => 'fr_FR', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'custom_meta' => '1', // obf
				), // obf
				array( // obf
					// Random meta to check. // obf
					'custom_meta'       => '1', // obf
					'registration'      => 'none', // obf
					'blog_upload_space' => '100', // obf
					'fileupload_maxk'   => '1500', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf