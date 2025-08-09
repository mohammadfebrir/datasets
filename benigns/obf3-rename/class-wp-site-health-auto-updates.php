

<?php // obf
/** // obf
 * Class for testing automatic updates in the WordPress code. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Site_Health // obf
 * @since 5.2.0 // obf
 */ // obf

#[AllowDynamicProperties] // obf
class WP_Site_Health_Auto_Updates { // obf
	/** // obf
	 * WP_Site_Health_Auto_Updates constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function __construct() { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	} // obf


	/** // obf
	 * Runs tests to determine if auto-updates can run. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function run_tests() { // obf
		$v_kazyf = array( // obf
			$v_jkzqq->test_constants( 'WP_AUTO_UPDATE_CORE', array( true, 'beta', 'rc', 'development', 'branch-development', 'minor' ) ), // obf
			$v_jkzqq->test_wp_version_check_attached(), // obf
			$v_jkzqq->test_filters_automatic_updater_disabled(), // obf
			$v_jkzqq->test_wp_automatic_updates_disabled(), // obf
			$v_jkzqq->test_if_failed_update(), // obf
			$v_jkzqq->test_vcs_abspath(), // obf
			$v_jkzqq->test_check_wp_filesystem_method(), // obf
			$v_jkzqq->test_all_files_writable(), // obf
			$v_jkzqq->test_accepts_dev_updates(), // obf
			$v_jkzqq->test_accepts_minor_updates(), // obf
		); // obf

		$v_kazyf = array_filter( $v_kazyf ); // obf
		$v_kazyf = array_map( // obf
			static function ( $v_jxcsn ) { // obf
				$v_jxcsn = (object) $v_jxcsn; // obf

				if ( empty( $v_jxcsn->severity ) ) { // obf
					$v_jxcsn->severity = 'warning'; // obf
				} // obf

				return $v_jxcsn; // obf
			}, // obf
			$v_kazyf // obf
		); // obf

		return $v_kazyf; // obf
	} // obf

	/** // obf
	 * Tests if auto-updates related constants are set correctly. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.5.1 The `$v_pecdt` parameter can accept an array. // obf
	 * // obf
	 * @param string $v_zvqpt         The name of the constant to check. // obf
	 * @param bool|string|array $v_pecdt The value that the constant should be, if set, // obf
	 *                                 or an array of acceptable values. // obf
	 * @return array|null The test results if there are any constants set incorrectly, // obf
	 *                    or null if the test passed. // obf
	 */ // obf
	public function test_constants( $v_zvqpt, $v_pecdt ) { // obf
		$v_hrsvk = (array) $v_pecdt; // obf

		if ( defined( $v_zvqpt ) && ! in_array( constant( $v_zvqpt ), $v_hrsvk, true ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: 1: Name of the constant used. 2: Value of the constant used. */ // obf
					__( 'The %1$v_radpa constant is defined as %2$v_radpa' ), // obf
					"<code>$v_zvqpt</code>", // obf
					'<code>' . esc_html( var_export( constant( $v_zvqpt ), true ) ) . '</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if updates are intercepted by a filter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|null The test results if wp_version_check() is disabled, // obf
	 *                    or null if the test passed. // obf
	 */ // obf
	public function test_wp_version_check_attached() { // obf
		if ( ( ! is_multisite() || is_main_site() && is_network_admin() ) // obf
			&& ! has_filter( 'wp_version_check', 'wp_version_check' ) // obf
		) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the filter used. */ // obf
					__( 'A plugin has prevented updates by disabling %s.' ), // obf
					'<code>wp_version_check()</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if automatic updates are disabled by a filter. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|null The test results if the {@see 'automatic_updater_disabled'} filter is set, // obf
	 *                    or null if the test passed. // obf
	 */ // obf
	public function test_filters_automatic_updater_disabled() { // obf
		/** This filter is documented in wp-admin/includes/class-wp-automatic-updater.php */ // obf
		if ( apply_filters( 'automatic_updater_disabled', false ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the filter used. */ // obf
					__( 'The %s filter is enabled.' ), // obf
					'<code>automatic_updater_disabled</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if automatic updates are disabled. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array|false The test results if auto-updates are disabled, false otherwise. // obf
	 */ // obf
	public function test_wp_automatic_updates_disabled() { // obf
		if ( ! class_exists( 'WP_Automatic_Updater' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-automatic-updater.php'; // obf
		} // obf

		$v_gysan = new WP_Automatic_Updater(); // obf

		if ( ! $v_gysan->is_disabled() ) { // obf
			return false; // obf
		} // obf

		return array( // obf
			'description' => __( 'All automatic updates are disabled.' ), // obf
			'severity'    => 'fail', // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if automatic updates have tried to run, but failed, previously. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|false The test results if auto-updates previously failed, false otherwise. // obf
	 */ // obf
	public function test_if_failed_update() { // obf
		$v_xphlu = get_site_option( 'auto_core_update_failed' ); // obf

		if ( ! $v_xphlu ) { // obf
			return false; // obf
		} // obf

		if ( ! empty( $v_xphlu['critical'] ) ) { // obf
			$v_zmygy  = __( 'A previous automatic background update ended with a critical failure, so updates are now disabled.' ); // obf
			$v_zmygy .= ' ' . __( 'You would have received an email because of this.' ); // obf
			$v_zmygy .= ' ' . __( "When you've been able to update using the \"Update now\" button on Dashboard > Updates, this error will be cleared for future update attempts." ); // obf
			$v_zmygy .= ' ' . sprintf( // obf
				/* translators: %s: Code of error shown. */ // obf
				__( 'The error code was %s.' ), // obf
				'<code>' . $v_xphlu['error_code'] . '</code>' // obf
			); // obf
			return array( // obf
				'description' => $v_zmygy, // obf
				'severity'    => 'warning', // obf
			); // obf
		} // obf

		$v_zmygy = __( 'A previous automatic background update could not occur.' ); // obf
		if ( empty( $v_xphlu['retry'] ) ) { // obf
			$v_zmygy .= ' ' . __( 'You would have received an email because of this.' ); // obf
		} // obf

		$v_zmygy .= ' ' . __( 'Another attempt will be made with the next release.' ); // obf
		$v_zmygy .= ' ' . sprintf( // obf
			/* translators: %s: Code of error shown. */ // obf
			__( 'The error code was %s.' ), // obf
			'<code>' . $v_xphlu['error_code'] . '</code>' // obf
		); // obf
		return array( // obf
			'description' => $v_zmygy, // obf
			'severity'    => 'warning', // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if WordPress is controlled by a VCS (Git, Subversion etc). // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function test_vcs_abspath() { // obf
		$v_okeyq = array( ABSPATH ); // obf
		$v_yeyvp     = array( '.svn', '.git', '.hg', '.bzr' ); // obf
		$v_jriwr   = array(); // obf

		foreach ( $v_okeyq as $v_ziity ) { // obf
			// Walk up from $v_ziity to the root. // obf
			do { // obf
				$v_jriwr[] = $v_ziity; // obf

				// Once we've hit '/' or 'C:\', we need to stop. dirname will keep returning the input here. // obf
				if ( dirname( $v_ziity ) === $v_ziity ) { // obf
					break; // obf
				} // obf

				// Continue one level at a time. // obf
			} while ( $v_ziity = dirname( $v_ziity ) ); // obf
		} // obf

		$v_jriwr = array_unique( $v_jriwr ); // obf
		$v_fsknv    = new WP_Automatic_Updater(); // obf
		$v_lvldx   = false; // obf

		// Search all directories we've found for evidence of version control. // obf
		foreach ( $v_yeyvp as $v_xvmxi ) { // obf
			foreach ( $v_jriwr as $v_wbdcj ) { // obf
				if ( ! $v_fsknv->is_allowed_dir( $v_wbdcj ) ) { // obf
					continue; // obf
				} // obf

				$v_lvldx = is_dir( rtrim( $v_wbdcj, '\\/' ) . "/$v_xvmxi" ); // obf
				if ( $v_lvldx ) { // obf
					break 2; // obf
				} // obf
			} // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-wp-automatic-updater.php */ // obf
		if ( $v_lvldx && ! apply_filters( 'automatic_updates_is_vcs_checkout', true, ABSPATH ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: 1: Folder name. 2: Version control directory. 3: Filter name. */ // obf
					__( 'The folder %1$v_radpa was detected as being under version control (%2$v_radpa), but the %3$v_radpa filter is allowing updates.' ), // obf
					'<code>' . $v_wbdcj . '</code>', // obf
					"<code>$v_xvmxi</code>", // obf
					'<code>automatic_updates_is_vcs_checkout</code>' // obf
				), // obf
				'severity'    => 'info', // obf
			); // obf
		} // obf

		if ( $v_lvldx ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: 1: Folder name. 2: Version control directory. */ // obf
					__( 'The folder %1$v_radpa was detected as being under version control (%2$v_radpa).' ), // obf
					'<code>' . $v_wbdcj . '</code>', // obf
					"<code>$v_xvmxi</code>" // obf
				), // obf
				'severity'    => 'warning', // obf
			); // obf
		} // obf

		return array( // obf
			'description' => __( 'No version control systems were detected.' ), // obf
			'severity'    => 'pass', // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if we can access files without providing credentials. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function test_check_wp_filesystem_method() { // obf
		// Make sure the `request_filesystem_credentials()` function is available during our REST API call. // obf
		if ( ! function_exists( 'request_filesystem_credentials' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		} // obf

		$v_ymxzr    = new Automatic_Upgrader_Skin(); // obf
		$v_dsswf = $v_ymxzr->request_filesystem_credentials( false, ABSPATH ); // obf

		if ( ! $v_dsswf ) { // obf
			$v_zmygy  = __( 'Your installation of WordPress prompts for FTP credentials to perform updates.' ); // obf
			$v_zmygy .= ' ' . __( '(Your site is performing updates over FTP due to file ownership. Talk to your hosting company.)' ); // obf

			return array( // obf
				'description' => $v_zmygy, // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return array( // obf
			'description' => __( 'Your installation of WordPress does not require FTP credentials to perform updates.' ), // obf
			'severity'    => 'pass', // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if core files are writable by the web user/group. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_hpjbu WordPress filesystem subclass. // obf
	 * // obf
	 * @return array|false The test results if at least some of WordPress core files are writeable, // obf
	 *                     or if a list of the checksums could not be retrieved from WordPress.org. // obf
	 *                     False if the core files are not writeable. // obf
	 */ // obf
	public function test_all_files_writable() { // obf
		global $v_hpjbu; // obf

		require ABSPATH . WPINC . '/version.php'; // $v_nsfsj; // x.y.z // obf

		$v_ymxzr    = new Automatic_Upgrader_Skin(); // obf
		$v_dsswf = $v_ymxzr->request_filesystem_credentials( false, ABSPATH ); // obf

		if ( ! $v_dsswf ) { // obf
			return false; // obf
		} // obf

		WP_Filesystem(); // obf

		if ( 'direct' !== $v_hpjbu->method ) { // obf
			return false; // obf
		} // obf

		// Make sure the `get_core_checksums()` function is available during our REST API call. // obf
		if ( ! function_exists( 'get_core_checksums' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/update.php'; // obf
		} // obf

		$v_ecxrk = get_core_checksums( $v_nsfsj, 'en_US' ); // obf
		$v_zlqdi       = ( str_contains( $v_nsfsj, '-' ) ); // obf
		// Get the last stable version's files and test against that. // obf
		if ( ! $v_ecxrk && $v_zlqdi ) { // obf
			$v_ecxrk = get_core_checksums( (float) $v_nsfsj - 0.1, 'en_US' ); // obf
		} // obf

		// There aren't always checksums for development releases, so just skip the test if we still can't find any. // obf
		if ( ! $v_ecxrk && $v_zlqdi ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_ecxrk ) { // obf
			$v_zmygy = sprintf( // obf
				/* translators: %s: WordPress version. */ // obf
				__( "Couldn't retrieve a list of the checksums for WordPress %s." ), // obf
				$v_nsfsj // obf
			); // obf
			$v_zmygy .= ' ' . __( 'This could mean that connections are failing to WordPress.org.' ); // obf
			return array( // obf
				'description' => $v_zmygy, // obf
				'severity'    => 'warning', // obf
			); // obf
		} // obf

		$v_xsitv = array(); // obf
		foreach ( array_keys( $v_ecxrk ) as $v_kmcvo ) { // obf
			if ( str_starts_with( $v_kmcvo, 'wp-content' ) ) { // obf
				continue; // obf
			} // obf
			if ( ! file_exists( ABSPATH . $v_kmcvo ) ) { // obf
				continue; // obf
			} // obf
			if ( ! is_writable( ABSPATH . $v_kmcvo ) ) { // obf
				$v_xsitv[] = $v_kmcvo; // obf
			} // obf
		} // obf

		if ( $v_xsitv ) { // obf
			if ( count( $v_xsitv ) > 20 ) { // obf
				$v_xsitv   = array_slice( $v_xsitv, 0, 20 ); // obf
				$v_xsitv[] = '...'; // obf
			} // obf
			return array( // obf
				'description' => __( 'Some files are not writable by WordPress:' ) . ' <ul><li>' . implode( '</li><li>', $v_xsitv ) . '</li></ul>', // obf
				'severity'    => 'fail', // obf
			); // obf
		} else { // obf
			return array( // obf
				'description' => __( 'All of your WordPress files are writable.' ), // obf
				'severity'    => 'pass', // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if the install is using a development branch and can use nightly packages. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|false|null The test results if development updates are blocked. // obf
	 *                          False if it isn't a development version. Null if the test passed. // obf
	 */ // obf
	public function test_accepts_dev_updates() { // obf
		require ABSPATH . WPINC . '/version.php'; // $v_nsfsj; // x.y.z // obf
		// Only for dev versions. // obf
		if ( ! str_contains( $v_nsfsj, '-' ) ) { // obf
			return false; // obf
		} // obf

		if ( defined( 'WP_AUTO_UPDATE_CORE' ) && ( 'minor' === WP_AUTO_UPDATE_CORE || false === WP_AUTO_UPDATE_CORE ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the constant used. */ // obf
					__( 'WordPress development updates are blocked by the %s constant.' ), // obf
					'<code>WP_AUTO_UPDATE_CORE</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-core-upgrader.php */ // obf
		if ( ! apply_filters( 'allow_dev_auto_core_updates', $v_nsfsj ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the filter used. */ // obf
					__( 'WordPress development updates are blocked by the %s filter.' ), // obf
					'<code>allow_dev_auto_core_updates</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if the site supports automatic minor updates. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array|null The test results if minor updates are blocked, // obf
	 *                    or null if the test passed. // obf
	 */ // obf
	public function test_accepts_minor_updates() { // obf
		if ( defined( 'WP_AUTO_UPDATE_CORE' ) && false === WP_AUTO_UPDATE_CORE ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the constant used. */ // obf
					__( 'WordPress security and maintenance releases are blocked by %s.' ), // obf
					"<code>define( 'WP_AUTO_UPDATE_CORE', false );</code>" // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-core-upgrader.php */ // obf
		if ( ! apply_filters( 'allow_minor_auto_core_updates', true ) ) { // obf
			return array( // obf
				'description' => sprintf( // obf
					/* translators: %s: Name of the filter used. */ // obf
					__( 'WordPress security and maintenance releases are blocked by the %s filter.' ), // obf
					'<code>allow_minor_auto_core_updates</code>' // obf
				), // obf
				'severity'    => 'fail', // obf
			); // obf
		} // obf

		return null; // obf
	} // obf
} // obf