

<?php // obf
/** // obf
 * Class for looking up a site's health based on a user's WordPress environment. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Site_Health // obf
 * @since 5.2.0 // obf
 */ // obf

#[AllowDynamicProperties] // obf
class WP_Site_Health { // obf
	private static $v_tacys = null; // obf

	private $v_wvnoo; // obf
	private $v_xnrkz; // obf

	public $v_wcuwg                   = false; // obf
	private $v_lixbg        = ''; // obf
	private $v_afrvh      = '5.5'; // obf
	private $v_tvfih   = '8.0'; // obf
	private $v_hyxwd = '10.5'; // obf

	public $v_epoma; // obf

	public $v_aiozy; // obf
	public $v_wdufl; // obf
	public $v_qmkpi     = null; // obf
	public $v_mhcsh       = null; // obf
	private $v_meygf = null; // obf
	private $v_tglzb   = null; // obf

	/** // obf
	 * WP_Site_Health constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_qvvju->maybe_create_scheduled_event(); // obf

		// Save memory limit before it's affected by wp_raise_memory_limit( 'admin' ). // obf
		$v_qvvju->php_memory_limit = ini_get( 'memory_limit' ); // obf

		$v_qvvju->timeout_late_cron   = 0; // obf
		$v_qvvju->timeout_missed_cron = - 5 * MINUTE_IN_SECONDS; // obf

		if ( defined( 'DISABLE_WP_CRON' ) && DISABLE_WP_CRON ) { // obf
			$v_qvvju->timeout_late_cron   = - 15 * MINUTE_IN_SECONDS; // obf
			$v_qvvju->timeout_missed_cron = - 1 * HOUR_IN_SECONDS; // obf
		} // obf

		add_filter( 'admin_body_class', array( $v_qvvju, 'admin_body_class' ) ); // obf

		add_action( 'admin_enqueue_scripts', array( $v_qvvju, 'enqueue_scripts' ) ); // obf
		add_action( 'wp_site_health_scheduled_check', array( $v_qvvju, 'wp_cron_scheduled_check' ) ); // obf

		add_action( 'site_health_tab_content', array( $v_qvvju, 'show_site_health_tab' ) ); // obf
	} // obf

	/** // obf
	 * Outputs the content of a tab in the Site Health screen. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_vtrib Slug of the current tab being displayed. // obf
	 */ // obf
	public function show_site_health_tab( $v_vtrib ) { // obf
		if ( 'debug' === $v_vtrib ) { // obf
			require_once ABSPATH . 'wp-admin/site-health-info.php'; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns an instance of the WP_Site_Health class, or create one if none exist yet. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @return WP_Site_Health|null // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_tacys ) { // obf
			self::$v_tacys = new WP_Site_Health(); // obf
		} // obf

		return self::$v_tacys; // obf
	} // obf

	/** // obf
	 * Enqueues the site health scripts. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function enqueue_scripts() { // obf
		$v_ipdjo = get_current_screen(); // obf
		if ( 'site-health' !== $v_ipdjo->id && 'dashboard' !== $v_ipdjo->id ) { // obf
			return; // obf
		} // obf

		$v_hvets = array( // obf
			'screen'      => $v_ipdjo->id, // obf
			'nonce'       => array( // obf
				'site_status'        => wp_create_nonce( 'health-check-site-status' ), // obf
				'site_status_result' => wp_create_nonce( 'health-check-site-status-result' ), // obf
			), // obf
			'site_status' => array( // obf
				'direct' => array(), // obf
				'async'  => array(), // obf
				'issues' => array( // obf
					'good'        => 0, // obf
					'recommended' => 0, // obf
					'critical'    => 0, // obf
				), // obf
			), // obf
		); // obf

		$v_jnhzq = get_transient( 'health-check-site-status-result' ); // obf

		if ( false !== $v_jnhzq ) { // obf
			$v_jnhzq = json_decode( $v_jnhzq ); // obf

			$v_hvets['site_status']['issues'] = $v_jnhzq; // obf
		} // obf

		if ( 'site-health' === $v_ipdjo->id && ( ! isset( $v_kihrx['tab'] ) || empty( $v_kihrx['tab'] ) ) ) { // obf
			$v_ldyes = WP_Site_Health::get_tests(); // obf

			// Don't run https test on development environments. // obf
			if ( $v_qvvju->is_development_environment() ) { // obf
				unset( $v_ldyes['async']['https_status'] ); // obf
			} // obf

			foreach ( $v_ldyes['direct'] as $v_cgrrp ) { // obf
				if ( is_string( $v_cgrrp['test'] ) ) { // obf
					$v_nyddh = sprintf( // obf
						'get_test_%s', // obf
						$v_cgrrp['test'] // obf
					); // obf

					if ( method_exists( $v_qvvju, $v_nyddh ) && is_callable( array( $v_qvvju, $v_nyddh ) ) ) { // obf
						$v_hvets['site_status']['direct'][] = $v_qvvju->perform_test( array( $v_qvvju, $v_nyddh ) ); // obf
						continue; // obf
					} // obf
				} // obf

				if ( is_callable( $v_cgrrp['test'] ) ) { // obf
					$v_hvets['site_status']['direct'][] = $v_qvvju->perform_test( $v_cgrrp['test'] ); // obf
				} // obf
			} // obf

			foreach ( $v_ldyes['async'] as $v_cgrrp ) { // obf
				if ( is_string( $v_cgrrp['test'] ) ) { // obf
					$v_hvets['site_status']['async'][] = array( // obf
						'test'      => $v_cgrrp['test'], // obf
						'has_rest'  => ( isset( $v_cgrrp['has_rest'] ) ? $v_cgrrp['has_rest'] : false ), // obf
						'completed' => false, // obf
						'headers'   => isset( $v_cgrrp['headers'] ) ? $v_cgrrp['headers'] : array(), // obf
					); // obf
				} // obf
			} // obf
		} // obf

		wp_localize_script( 'site-health', 'SiteHealth', $v_hvets ); // obf
	} // obf

	/** // obf
	 * Runs a Site Health test directly. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param callable $v_moyhs // obf
	 * @return mixed|void // obf
	 */ // obf
	private function perform_test( $v_moyhs ) { // obf
		/** // obf
		 * Filters the output of a finished Site Health test. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param array $v_xxejg { // obf
		 *     An associative array of test result data. // obf
		 * // obf
		 *     @type string $v_ppsnh       A label describing the test, and is used as a header in the output. // obf
		 *     @type string $v_bktck      The status of the test, which can be a value of `good`, `recommended` or `critical`. // obf
		 *     @type array  $v_esjau { // obf
		 *         Tests are put into categories which have an associated badge shown, these can be modified and assigned here. // obf
		 * // obf
		 *         @type string $v_ppsnh The test label, for example `Performance`. // obf
		 *         @type string $v_ikbrt Default `blue`. A string representing a color to use for the label. // obf
		 *     } // obf
		 *     @type string $v_fhtoa A more descriptive explanation of what the test looks for, and why it is important for the end user. // obf
		 *     @type string $v_dnkbz     An action to direct the user to where they can resolve the issue, if one exists. // obf
		 *     @type string $v_cgrrp        The name of the test being ran, used as a reference point. // obf
		 * } // obf
		 */ // obf
		return apply_filters( 'site_status_test_result', call_user_func( $v_moyhs ) ); // obf
	} // obf

	/** // obf
	 * Runs the SQL version checks. // obf
	 * // obf
	 * These values are used in later tests, but the part of preparing them is more easily managed // obf
	 * early in the class for ease of access and discovery. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global wpdb $v_qzhbj WordPress database abstraction object. // obf
	 */ // obf
	private function prepare_sql_data() { // obf
		global $v_qzhbj; // obf

		$v_gtniw = $v_qzhbj->db_server_info(); // obf

		$v_qvvju->mysql_server_version = $v_qzhbj->get_var( 'SELECT VERSION()' ); // obf

		if ( stristr( $v_gtniw, 'mariadb' ) ) { // obf
			$v_qvvju->is_mariadb                = true; // obf
			$v_qvvju->mysql_recommended_version = $v_qvvju->mariadb_recommended_version; // obf
		} // obf

		$v_qvvju->is_acceptable_mysql_version  = version_compare( $v_qvvju->mysql_required_version, $v_qvvju->mysql_server_version, '<=' ); // obf
		$v_qvvju->is_recommended_mysql_version = version_compare( $v_qvvju->mysql_recommended_version, $v_qvvju->mysql_server_version, '<=' ); // obf
	} // obf

	/** // obf
	 * Tests whether `wp_version_check` is blocked. // obf
	 * // obf
	 * It's possible to block updates with the `wp_version_check` filter, but this can't be checked // obf
	 * during an Ajax call, as the filter is never introduced then. // obf
	 * // obf
	 * This filter overrides a standard page request if it's made by an admin through the Ajax call // obf
	 * with the right query argument to check for this. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function check_wp_version_check_exists() { // obf
		if ( ! is_admin() || ! is_user_logged_in() || ! current_user_can( 'update_core' ) || ! isset( $v_kihrx['health-check-test-wp_version_check'] ) ) { // obf
			return; // obf
		} // obf

		echo ( has_filter( 'wp_version_check', 'wp_version_check' ) ? 'yes' : 'no' ); // obf

		die(); // obf
	} // obf

	/** // obf
	 * Tests for WordPress version and outputs it. // obf
	 * // obf
	 * Gives various results depending on what kind of updates are available, if any, to encourage // obf
	 * the user to install security updates as a priority. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function get_test_wordpress_version() { // obf
		$v_eqqkz = array( // obf
			'label'       => '', // obf
			'status'      => '', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => '', // obf
			'actions'     => '', // obf
			'test'        => 'wordpress_version', // obf
		); // obf

		$v_hvocq = wp_get_wp_version(); // obf
		$v_tfwso         = get_core_updates(); // obf

		if ( ! is_array( $v_tfwso ) ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = sprintf( // obf
				/* translators: %s: Your current version of WordPress. */ // obf
				__( 'WordPress version %s' ), // obf
				$v_hvocq // obf
			); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Unable to check if any new versions of WordPress are available.' ) // obf
			); // obf

			$v_eqqkz['actions'] = sprintf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( admin_url( 'update-core.php?force-check=1' ) ), // obf
				__( 'Check for updates manually' ) // obf
			); // obf
		} else { // obf
			foreach ( $v_tfwso as $v_hoazf => $v_eispn ) { // obf
				if ( 'upgrade' === $v_eispn->response ) { // obf
					$v_ycuqm = explode( '.', $v_hvocq ); // obf
					$v_bktzl     = explode( '.', $v_eispn->version ); // obf

					$v_clggx = $v_ycuqm[0] . '.' . $v_ycuqm[1]; // obf
					$v_xckra     = $v_bktzl[0] . '.' . $v_bktzl[1]; // obf

					$v_eqqkz['label'] = sprintf( // obf
						/* translators: %s: The latest version of WordPress available. */ // obf
						__( 'WordPress update available (%s)' ), // obf
						$v_eispn->version // obf
					); // obf

					$v_eqqkz['actions'] = sprintf( // obf
						'<a href="%s">%s</a>', // obf
						esc_url( admin_url( 'update-core.php' ) ), // obf
						__( 'Install the latest version of WordPress' ) // obf
					); // obf

					if ( $v_clggx !== $v_xckra ) { // obf
						// This is a major version mismatch. // obf
						$v_eqqkz['status']      = 'recommended'; // obf
						$v_eqqkz['description'] = sprintf( // obf
							'<p>%s</p>', // obf
							__( 'A new version of WordPress is available.' ) // obf
						); // obf
					} else { // obf
						// This is a minor version, sometimes considered more critical. // obf
						$v_eqqkz['status']         = 'critical'; // obf
						$v_eqqkz['badge']['label'] = __( 'Security' ); // obf
						$v_eqqkz['description']    = sprintf( // obf
							'<p>%s</p>', // obf
							__( 'A new minor update is available for your site. Because minor updates often address security, it&#8217;s important to install them.' ) // obf
						); // obf
					} // obf
				} else { // obf
					$v_eqqkz['status'] = 'good'; // obf
					$v_eqqkz['label']  = sprintf( // obf
						/* translators: %s: The current version of WordPress installed on this site. */ // obf
						__( 'Your version of WordPress (%s) is up to date' ), // obf
						$v_hvocq // obf
					); // obf

					$v_eqqkz['description'] = sprintf( // obf
						'<p>%s</p>', // obf
						__( 'You are currently running the latest version of WordPress available, keep it up!' ) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if plugins are outdated, or unnecessary. // obf
	 * // obf
	 * The test checks if your plugins are up to date, and encourages you to remove any // obf
	 * that are not in use. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function get_test_plugin_version() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Your plugins are all up to date' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Plugins extend your site&#8217;s functionality with things like contact forms, ecommerce and much more. That means they have deep access to your site, so it&#8217;s vital to keep them up to date.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s">%s</a></p>', // obf
				esc_url( admin_url( 'plugins.php' ) ), // obf
				__( 'Manage your plugins' ) // obf
			), // obf
			'test'        => 'plugin_version', // obf
		); // obf

		$v_mfocz        = get_plugins(); // obf
		$v_xopgn = get_plugin_updates(); // obf

		$v_gqhlx      = 0; // obf
		$v_ysegn       = 0; // obf
		$v_jqwwm = 0; // obf

		// Loop over the available plugins and check their versions and active state. // obf
		foreach ( $v_mfocz as $v_cedzi => $v_vjwqb ) { // obf
			++$v_ysegn; // obf

			if ( is_plugin_active( $v_cedzi ) ) { // obf
				++$v_gqhlx; // obf
			} // obf

			if ( array_key_exists( $v_cedzi, $v_xopgn ) ) { // obf
				++$v_jqwwm; // obf
			} // obf
		} // obf

		// Add a notice if there are outdated plugins. // obf
		if ( $v_jqwwm > 0 ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'You have plugins waiting to be updated' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %d: The number of outdated plugins. */ // obf
					_n( // obf
						'Your site has %d plugin waiting to be updated.', // obf
						'Your site has %d plugins waiting to be updated.', // obf
						$v_jqwwm // obf
					), // obf
					$v_jqwwm // obf
				) // obf
			); // obf

			$v_eqqkz['actions'] .= sprintf( // obf
				'<p><a href="%s">%s</a></p>', // obf
				esc_url( network_admin_url( 'plugins.php?plugin_status=upgrade' ) ), // obf
				__( 'Update your plugins' ) // obf
			); // obf
		} else { // obf
			if ( 1 === $v_gqhlx ) { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					__( 'Your site has 1 active plugin, and it is up to date.' ) // obf
				); // obf
			} elseif ( $v_gqhlx > 0 ) { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: %d: The number of active plugins. */ // obf
						_n( // obf
							'Your site has %d active plugin, and it is up to date.', // obf
							'Your site has %d active plugins, and they are all up to date.', // obf
							$v_gqhlx // obf
						), // obf
						$v_gqhlx // obf
					) // obf
				); // obf
			} else { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					__( 'Your site does not have any active plugins.' ) // obf
				); // obf
			} // obf
		} // obf

		// Check if there are inactive plugins. // obf
		if ( $v_ysegn > $v_gqhlx && ! is_multisite() ) { // obf
			$v_taczt = $v_ysegn - $v_gqhlx; // obf

			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'You should remove inactive plugins' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s %s</p>', // obf
				sprintf( // obf
					/* translators: %d: The number of inactive plugins. */ // obf
					_n( // obf
						'Your site has %d inactive plugin.', // obf
						'Your site has %d inactive plugins.', // obf
						$v_taczt // obf
					), // obf
					$v_taczt // obf
				), // obf
				__( 'Inactive plugins are tempting targets for attackers. If you are not going to use a plugin, you should consider removing it.' ) // obf
			); // obf

			$v_eqqkz['actions'] .= sprintf( // obf
				'<p><a href="%s">%s</a></p>', // obf
				esc_url( admin_url( 'plugins.php?plugin_status=inactive' ) ), // obf
				__( 'Manage inactive plugins' ) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if themes are outdated, or unnecessary. // obf
	 * // obf
	 * Checks if your site has a default theme (to fall back on if there is a need), // obf
	 * if your themes are up to date and, finally, encourages you to remove any themes // obf
	 * that are not needed. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_theme_version() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Your themes are all up to date' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Themes add your site&#8217;s look and feel. It&#8217;s important to keep them up to date, to stay consistent with your brand and keep your site secure.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s">%s</a></p>', // obf
				esc_url( admin_url( 'themes.php' ) ), // obf
				__( 'Manage your themes' ) // obf
			), // obf
			'test'        => 'theme_version', // obf
		); // obf

		$v_fmdkn = get_theme_updates(); // obf

		$v_nlxdh        = 0; // obf
		$v_irjws = 0; // obf
		$v_xekan     = 0; // obf

		// This value is changed during processing to determine how many themes are considered a reasonable amount. // obf
		$v_baikc = 1; // obf

		$v_dzvps   = false; // obf
		$v_mjuqg   = false; // obf
		$v_cefgw  = true; // obf
		$v_kgpby = false; // obf

		// Populate a list of all themes available in the install. // obf
		$v_weekh   = wp_get_themes(); // obf
		$v_yzluy = wp_get_theme(); // obf

		// If WP_DEFAULT_THEME doesn't exist, fall back to the latest core default theme. // obf
		$v_wzdgf = wp_get_theme( WP_DEFAULT_THEME ); // obf
		if ( ! $v_wzdgf->exists() ) { // obf
			$v_wzdgf = WP_Theme::get_core_default_theme(); // obf
		} // obf

		if ( $v_wzdgf ) { // obf
			$v_dzvps = true; // obf

			if ( // obf
				$v_yzluy->get_stylesheet() === $v_wzdgf->get_stylesheet() // obf
			|| // obf
				is_child_theme() && $v_yzluy->get_template() === $v_wzdgf->get_template() // obf
			) { // obf
				$v_kgpby = true; // obf
			} // obf
		} // obf

		foreach ( $v_weekh as $v_nbvfw => $v_mzzqq ) { // obf
			++$v_nlxdh; // obf

			if ( array_key_exists( $v_nbvfw, $v_fmdkn ) ) { // obf
				++$v_irjws; // obf
			} // obf
		} // obf

		// If this is a child theme, increase the allowed theme count by one, to account for the parent. // obf
		if ( is_child_theme() ) { // obf
			++$v_baikc; // obf
		} // obf

		// If there's a default theme installed and not in use, we count that as allowed as well. // obf
		if ( $v_dzvps && ! $v_kgpby ) { // obf
			++$v_baikc; // obf
		} // obf

		if ( $v_nlxdh > $v_baikc ) { // obf
			$v_mjuqg = true; // obf
			$v_xekan   = ( $v_nlxdh - $v_baikc ); // obf
		} // obf

		// Check if any themes need to be updated. // obf
		if ( $v_irjws > 0 ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'You have themes waiting to be updated' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %d: The number of outdated themes. */ // obf
					_n( // obf
						'Your site has %d theme waiting to be updated.', // obf
						'Your site has %d themes waiting to be updated.', // obf
						$v_irjws // obf
					), // obf
					$v_irjws // obf
				) // obf
			); // obf
		} else { // obf
			// Give positive feedback about the site being good about keeping things up to date. // obf
			if ( 1 === $v_nlxdh ) { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					__( 'Your site has 1 installed theme, and it is up to date.' ) // obf
				); // obf
			} elseif ( $v_nlxdh > 0 ) { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: %d: The number of themes. */ // obf
						_n( // obf
							'Your site has %d installed theme, and it is up to date.', // obf
							'Your site has %d installed themes, and they are all up to date.', // obf
							$v_nlxdh // obf
						), // obf
						$v_nlxdh // obf
					) // obf
				); // obf
			} else { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					__( 'Your site does not have any installed themes.' ) // obf
				); // obf
			} // obf
		} // obf

		if ( $v_mjuqg && $v_cefgw && ! is_multisite() ) { // obf

			// This is a child theme, so we want to be a bit more explicit in our messages. // obf
			if ( $v_yzluy->parent() ) { // obf
				// Recommend removing inactive themes, except a default theme, your current one, and the parent theme. // obf
				$v_eqqkz['status'] = 'recommended'; // obf

				$v_eqqkz['label'] = __( 'You should remove inactive themes' ); // obf

				if ( $v_kgpby ) { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s %s</p>', // obf
						sprintf( // obf
							/* translators: %d: The number of inactive themes. */ // obf
							_n( // obf
								'Your site has %d inactive theme.', // obf
								'Your site has %d inactive themes.', // obf
								$v_xekan // obf
							), // obf
							$v_xekan // obf
						), // obf
						sprintf( // obf
							/* translators: 1: The currently active theme. 2: The active theme's parent theme. */ // obf
							__( 'To enhance your site&#8217;s security, you should consider removing any themes you are not using. You should keep your active theme, %1$v_uprgs, and %2$v_uprgs, its parent theme.' ), // obf
							$v_yzluy->name, // obf
							$v_yzluy->parent()->name // obf
						) // obf
					); // obf
				} else { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s %s</p>', // obf
						sprintf( // obf
							/* translators: %d: The number of inactive themes. */ // obf
							_n( // obf
								'Your site has %d inactive theme.', // obf
								'Your site has %d inactive themes.', // obf
								$v_xekan // obf
							), // obf
							$v_xekan // obf
						), // obf
						sprintf( // obf
							/* translators: 1: The default theme for WordPress. 2: The currently active theme. 3: The active theme's parent theme. */ // obf
							__( 'To enhance your site&#8217;s security, you should consider removing any themes you are not using. You should keep %1$v_uprgs, the default WordPress theme, %2$v_uprgs, your active theme, and %3$v_uprgs, its parent theme.' ), // obf
							$v_wzdgf ? $v_wzdgf->name : WP_DEFAULT_THEME, // obf
							$v_yzluy->name, // obf
							$v_yzluy->parent()->name // obf
						) // obf
					); // obf
				} // obf
			} else { // obf
				// Recommend removing all inactive themes. // obf
				$v_eqqkz['status'] = 'recommended'; // obf

				$v_eqqkz['label'] = __( 'You should remove inactive themes' ); // obf

				if ( $v_kgpby ) { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s %s</p>', // obf
						sprintf( // obf
							/* translators: 1: The amount of inactive themes. 2: The currently active theme. */ // obf
							_n( // obf
								'Your site has %1$v_ncole inactive theme, other than %2$v_uprgs, your active theme.', // obf
								'Your site has %1$v_ncole inactive themes, other than %2$v_uprgs, your active theme.', // obf
								$v_xekan // obf
							), // obf
							$v_xekan, // obf
							$v_yzluy->name // obf
						), // obf
						__( 'You should consider removing any unused themes to enhance your site&#8217;s security.' ) // obf
					); // obf
				} else { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s %s</p>', // obf
						sprintf( // obf
							/* translators: 1: The amount of inactive themes. 2: The default theme for WordPress. 3: The currently active theme. */ // obf
							_n( // obf
								'Your site has %1$v_ncole inactive theme, other than %2$v_uprgs, the default WordPress theme, and %3$v_uprgs, your active theme.', // obf
								'Your site has %1$v_ncole inactive themes, other than %2$v_uprgs, the default WordPress theme, and %3$v_uprgs, your active theme.', // obf
								$v_xekan // obf
							), // obf
							$v_xekan, // obf
							$v_wzdgf ? $v_wzdgf->name : WP_DEFAULT_THEME, // obf
							$v_yzluy->name // obf
						), // obf
						__( 'You should consider removing any unused themes to enhance your site&#8217;s security.' ) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		// If no default Twenty* theme exists. // obf
		if ( ! $v_dzvps ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'Have a default theme available' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Your site does not have any default theme. Default themes are used by WordPress automatically if anything is wrong with your chosen theme.' ) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the supplied PHP version is supported. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_php_version() { // obf
		$v_jmqcn = wp_check_php_version(); // obf

		$v_eqqkz = array( // obf
			'label'       => sprintf( // obf
				/* translators: %s: The recommended PHP version. */ // obf
				__( 'Your site is running a recommended version of PHP (%s)' ), // obf
				PHP_VERSION // obf
			), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: The minimum recommended PHP version. */ // obf
					__( 'PHP is one of the programming languages used to build WordPress. Newer versions of PHP receive regular security updates and may increase your site&#8217;s performance. The minimum recommended version of PHP is %s.' ), // obf
					$v_jmqcn ? $v_jmqcn['recommended_version'] : '' // obf
				) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				esc_url( wp_get_update_php_url() ), // obf
				__( 'Learn more about updating PHP' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
			'test'        => 'php_version', // obf
		); // obf

		// PHP is up to date. // obf
		if ( ! $v_jmqcn || version_compare( PHP_VERSION, $v_jmqcn['recommended_version'], '>=' ) ) { // obf
			return $v_eqqkz; // obf
		} // obf

		// The PHP version is older than the recommended version, but still receiving active support. // obf
		if ( $v_jmqcn['is_supported'] ) { // obf
			$v_eqqkz['label'] = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an older version of PHP (%s)' ), // obf
				PHP_VERSION // obf
			); // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			return $v_eqqkz; // obf
		} // obf

		/* // obf
		 * The PHP version is still receiving security fixes, but is lower than // obf
		 * the expected minimum version that will be required by WordPress in the near future. // obf
		 */ // obf
		if ( $v_jmqcn['is_secure'] && $v_jmqcn['is_lower_than_future_minimum'] ) { // obf
			// The `is_secure` array key name doesn't actually imply this is a secure version of PHP. It only means it receives security updates. // obf

			$v_eqqkz['label'] = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an outdated version of PHP (%s), which soon will not be supported by WordPress.' ), // obf
				PHP_VERSION // obf
			); // obf

			$v_eqqkz['status']         = 'critical'; // obf
			$v_eqqkz['badge']['label'] = __( 'Requirements' ); // obf

			return $v_eqqkz; // obf
		} // obf

		// The PHP version is only receiving security fixes. // obf
		if ( $v_jmqcn['is_secure'] ) { // obf
			$v_eqqkz['label'] = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an older version of PHP (%s), which should be updated' ), // obf
				PHP_VERSION // obf
			); // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			return $v_eqqkz; // obf
		} // obf

		// No more security updates for the PHP version, and lower than the expected minimum version required by WordPress. // obf
		if ( $v_jmqcn['is_lower_than_future_minimum'] ) { // obf
			$v_elgou = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an outdated version of PHP (%s), which does not receive security updates and soon will not be supported by WordPress.' ), // obf
				PHP_VERSION // obf
			); // obf
		} else { // obf
			// No more security updates for the PHP version, must be updated. // obf
			$v_elgou = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an outdated version of PHP (%s), which does not receive security updates. It should be updated.' ), // obf
				PHP_VERSION // obf
			); // obf
		} // obf

		$v_eqqkz['label']  = $v_elgou; // obf
		$v_eqqkz['status'] = 'critical'; // obf

		$v_eqqkz['badge']['label'] = __( 'Security' ); // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Checks if the passed extension or function are available. // obf
	 * // obf
	 * Make the check for available PHP modules into a simple boolean operator for a cleaner test runner. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.3.0 The `$v_hxlgz` and `$v_qaqgd` parameters were added. // obf
	 * // obf
	 * @param string $v_zebui Optional. The extension name to test. Default null. // obf
	 * @param string $v_swzsa  Optional. The function name to test. Default null. // obf
	 * @param string $v_hxlgz  Optional. The constant name to test for. Default null. // obf
	 * @param string $v_qaqgd     Optional. The class name to test for. Default null. // obf
	 * @return bool Whether or not the extension and function are available. // obf
	 */ // obf
	private function test_php_extension_availability( $v_zebui = null, $v_swzsa = null, $v_hxlgz = null, $v_qaqgd = null ) { // obf
		// If no extension or function is passed, claim to fail testing, as we have nothing to test against. // obf
		if ( ! $v_zebui && ! $v_swzsa && ! $v_hxlgz && ! $v_qaqgd ) { // obf
			return false; // obf
		} // obf

		if ( $v_zebui && ! extension_loaded( $v_zebui ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_swzsa && ! function_exists( $v_swzsa ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_hxlgz && ! defined( $v_hxlgz ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_qaqgd && ! class_exists( $v_qaqgd ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Tests if required PHP modules are installed on the host. // obf
	 * // obf
	 * This test builds on the recommendations made by the WordPress Hosting Team // obf
	 * as seen at https://make.wordpress.org/hosting/handbook/handbook/server-environment/#php-extensions // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_test_php_extensions() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Required and recommended modules are installed' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p><p>%s</p>', // obf
				__( 'PHP modules perform most of the tasks on the server that make your site run. Any changes to these must be made by your server administrator.' ), // obf
				sprintf( // obf
					/* translators: 1: Link to the hosting group page about recommended PHP modules. 2: Additional link attributes. 3: Accessibility text. */ // obf
					__( 'The WordPress Hosting Team maintains a list of those modules, both recommended and required, in <a href="%1$v_uprgs" %2$v_uprgs>the team handbook%3$v_uprgs</a>.' ), // obf
					/* translators: Localized team handbook, if one exists. */ // obf
					esc_url( __( 'https://make.wordpress.org/hosting/handbook/handbook/server-environment/#php-extensions' ) ), // obf
					'target="_blank"', // obf
					sprintf( // obf
						'<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span>', // obf
						/* translators: Hidden accessibility text. */ // obf
						__( '(opens in a new tab)' ) // obf
					) // obf
				) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'php_extensions', // obf
		); // obf

		$v_rjdcm = array( // obf
			'curl'      => array( // obf
				'function' => 'curl_version', // obf
				'required' => false, // obf
			), // obf
			'dom'       => array( // obf
				'class'    => 'DOMNode', // obf
				'required' => false, // obf
			), // obf
			'exif'      => array( // obf
				'function' => 'exif_read_data', // obf
				'required' => false, // obf
			), // obf
			'fileinfo'  => array( // obf
				'function' => 'finfo_file', // obf
				'required' => false, // obf
			), // obf
			'hash'      => array( // obf
				'function' => 'hash', // obf
				'required' => true, // obf
			), // obf
			'imagick'   => array( // obf
				'extension' => 'imagick', // obf
				'required'  => false, // obf
			), // obf
			'json'      => array( // obf
				'function' => 'json_last_error', // obf
				'required' => true, // obf
			), // obf
			'mbstring'  => array( // obf
				'function' => 'mb_check_encoding', // obf
				'required' => false, // obf
			), // obf
			'mysqli'    => array( // obf
				'function' => 'mysqli_connect', // obf
				'required' => false, // obf
			), // obf
			'libsodium' => array( // obf
				'constant'            => 'SODIUM_LIBRARY_VERSION', // obf
				'required'            => false, // obf
				'php_bundled_version' => '7.2.0', // obf
			), // obf
			'openssl'   => array( // obf
				'function' => 'openssl_encrypt', // obf
				'required' => false, // obf
			), // obf
			'pcre'      => array( // obf
				'function' => 'preg_match', // obf
				'required' => false, // obf
			), // obf
			'mod_xml'   => array( // obf
				'extension' => 'libxml', // obf
				'required'  => false, // obf
			), // obf
			'zip'       => array( // obf
				'class'    => 'ZipArchive', // obf
				'required' => false, // obf
			), // obf
			'filter'    => array( // obf
				'function' => 'filter_list', // obf
				'required' => false, // obf
			), // obf
			'gd'        => array( // obf
				'extension'    => 'gd', // obf
				'required'     => false, // obf
				'fallback_for' => 'imagick', // obf
			), // obf
			'iconv'     => array( // obf
				'function' => 'iconv', // obf
				'required' => false, // obf
			), // obf
			'intl'      => array( // obf
				'extension' => 'intl', // obf
				'required'  => false, // obf
			), // obf
			'mcrypt'    => array( // obf
				'extension'    => 'mcrypt', // obf
				'required'     => false, // obf
				'fallback_for' => 'libsodium', // obf
			), // obf
			'simplexml' => array( // obf
				'extension'    => 'simplexml', // obf
				'required'     => false, // obf
				'fallback_for' => 'mod_xml', // obf
			), // obf
			'xmlreader' => array( // obf
				'extension'    => 'xmlreader', // obf
				'required'     => false, // obf
				'fallback_for' => 'mod_xml', // obf
			), // obf
			'zlib'      => array( // obf
				'extension'    => 'zlib', // obf
				'required'     => false, // obf
				'fallback_for' => 'zip', // obf
			), // obf
		); // obf

		/** // obf
		 * Filters the array representing all the modules we wish to test for. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.3.0 The `$v_obbta` and `$v_wufnh` parameters were added. // obf
		 * // obf
		 * @param array $v_rjdcm { // obf
		 *     An associative array of modules to test for. // obf
		 * // obf
		 *     @type array ...$0 { // obf
		 *         An associative array of module properties used during testing. // obf
		 *         One of either `$v_jhhto` or `$v_fghxj` must be provided, or they will fail by default. // obf
		 * // obf
		 *         @type string $v_jhhto     Optional. A function name to test for the existence of. // obf
		 *         @type string $v_fghxj    Optional. An extension to check if is loaded in PHP. // obf
		 *         @type string $v_obbta     Optional. A constant name to check for to verify an extension exists. // obf
		 *         @type string $v_wufnh        Optional. A class name to check for to verify an extension exists. // obf
		 *         @type bool   $v_nhleg     Is this a required feature or not. // obf
		 *         @type string $v_oozbk Optional. The module this module replaces as a fallback. // obf
		 *     } // obf
		 * } // obf
		 */ // obf
		$v_rjdcm = apply_filters( 'site_status_test_php_modules', $v_rjdcm ); // obf

		$v_bgply = array(); // obf

		foreach ( $v_rjdcm as $v_oipxh => $v_wgkhw ) { // obf
			$v_zebui = ( isset( $v_wgkhw['extension'] ) ? $v_wgkhw['extension'] : null ); // obf
			$v_swzsa  = ( isset( $v_wgkhw['function'] ) ? $v_wgkhw['function'] : null ); // obf
			$v_hxlgz  = ( isset( $v_wgkhw['constant'] ) ? $v_wgkhw['constant'] : null ); // obf
			$v_qaqgd     = ( isset( $v_wgkhw['class'] ) ? $v_wgkhw['class'] : null ); // obf

			// If this module is a fallback for another function, check if that other function passed. // obf
			if ( isset( $v_wgkhw['fallback_for'] ) ) { // obf
				/* // obf
				 * If that other function has a failure, mark this module as required for usual operations. // obf
				 * If that other function hasn't failed, skip this test as it's only a fallback. // obf
				 */ // obf
				if ( isset( $v_bgply[ $v_wgkhw['fallback_for'] ] ) ) { // obf
					$v_wgkhw['required'] = true; // obf
				} else { // obf
					continue; // obf
				} // obf
			} // obf

			if ( ! $v_qvvju->test_php_extension_availability( $v_zebui, $v_swzsa, $v_hxlgz, $v_qaqgd ) // obf
				&& ( ! isset( $v_wgkhw['php_bundled_version'] ) // obf
					|| version_compare( PHP_VERSION, $v_wgkhw['php_bundled_version'], '<' ) ) // obf
			) { // obf
				if ( $v_wgkhw['required'] ) { // obf
					$v_eqqkz['status'] = 'critical'; // obf

					$v_wufnh = 'error'; // obf
					/* translators: Hidden accessibility text. */ // obf
					$v_pgypa = __( 'Error' ); // obf
					$v_elgou       = sprintf( // obf
						/* translators: %s: The module name. */ // obf
						__( 'The required module, %s, is not installed, or has been disabled.' ), // obf
						$v_oipxh // obf
					); // obf
				} else { // obf
					$v_wufnh = 'warning'; // obf
					/* translators: Hidden accessibility text. */ // obf
					$v_pgypa = __( 'Warning' ); // obf
					$v_elgou       = sprintf( // obf
						/* translators: %s: The module name. */ // obf
						__( 'The optional module, %s, is not installed, or has been disabled.' ), // obf
						$v_oipxh // obf
					); // obf
				} // obf

				if ( ! $v_wgkhw['required'] && 'good' === $v_eqqkz['status'] ) { // obf
					$v_eqqkz['status'] = 'recommended'; // obf
				} // obf

				$v_bgply[ $v_oipxh ] = "<span class='dashicons $v_wufnh'><span class='screen-reader-text'>$v_pgypa</span></span> $v_elgou"; // obf
			} // obf
		} // obf

		if ( ! empty( $v_bgply ) ) { // obf
			$v_todbe = '<ul>'; // obf

			foreach ( $v_bgply as $v_xmaof ) { // obf
				$v_todbe .= sprintf( // obf
					'<li>%s</li>', // obf
					$v_xmaof // obf
				); // obf
			} // obf

			$v_todbe .= '</ul>'; // obf
		} // obf

		if ( 'good' !== $v_eqqkz['status'] ) { // obf
			if ( 'recommended' === $v_eqqkz['status'] ) { // obf
				$v_eqqkz['label'] = __( 'One or more recommended modules are missing' ); // obf
			} // obf
			if ( 'critical' === $v_eqqkz['status'] ) { // obf
				$v_eqqkz['label'] = __( 'One or more required modules are missing' ); // obf
			} // obf

			$v_eqqkz['description'] .= $v_todbe; // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the PHP default timezone is set to UTC. // obf
	 * // obf
	 * @since 5.3.1 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_php_default_timezone() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'PHP default timezone is valid' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'PHP default timezone was configured by WordPress on loading. This is necessary for correct calculations of dates and times.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'php_default_timezone', // obf
		); // obf

		if ( 'UTC' !== date_default_timezone_get() ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'PHP default timezone is invalid' ); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: date_default_timezone_set() */ // obf
					__( 'PHP default timezone was changed after WordPress loading by a %s function call. This interferes with correct calculations of dates and times.' ), // obf
					'<code>date_default_timezone_set()</code>' // obf
				) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if there's an active PHP session that can affect loopback requests. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_php_sessions() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'No PHP sessions detected' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: session_start(), 2: session_write_close() */ // obf
					__( 'PHP sessions created by a %1$v_uprgs function call may interfere with REST API and loopback requests. An active session should be closed by %2$v_uprgs before making any HTTP requests.' ), // obf
					'<code>session_start()</code>', // obf
					'<code>session_write_close()</code>' // obf
				) // obf
			), // obf
			'test'        => 'php_sessions', // obf
		); // obf

		if ( function_exists( 'session_status' ) && PHP_SESSION_ACTIVE === session_status() ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'An active PHP session was detected' ); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: session_start(), 2: session_write_close() */ // obf
					__( 'A PHP session was created by a %1$v_uprgs function call. This interferes with REST API and loopback requests. The session should be closed by %2$v_uprgs before making any HTTP requests.' ), // obf
					'<code>session_start()</code>', // obf
					'<code>session_write_close()</code>' // obf
				) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the SQL server is up to date. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_sql_server() { // obf
		if ( ! $v_qvvju->mysql_server_version ) { // obf
			$v_qvvju->prepare_sql_data(); // obf
		} // obf

		$v_eqqkz = array( // obf
			'label'       => __( 'SQL server is up to date' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'The SQL server is a required piece of software for the database WordPress uses to store all your site&#8217;s content and settings.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				/* translators: Localized version of WordPress requirements if one exists. */ // obf
				esc_url( __( 'https://wordpress.org/about/requirements/' ) ), // obf
				__( 'Learn more about what WordPress requires to run.' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
			'test'        => 'sql_server', // obf
		); // obf

		$v_ziqtj = file_exists( WP_CONTENT_DIR . '/db.php' ); // obf

		if ( ! $v_qvvju->is_recommended_mysql_version ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'Outdated SQL server' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: The database engine in use (MySQL or MariaDB). 2: Database server recommended version number. */ // obf
					__( 'For optimal performance and security reasons, you should consider running %1$v_uprgs version %2$v_uprgs or higher. Contact your web hosting company to correct this.' ), // obf
					( $v_qvvju->is_mariadb ? 'MariaDB' : 'MySQL' ), // obf
					$v_qvvju->mysql_recommended_version // obf
				) // obf
			); // obf
		} // obf

		if ( ! $v_qvvju->is_acceptable_mysql_version ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label']          = __( 'Severely outdated SQL server' ); // obf
			$v_eqqkz['badge']['label'] = __( 'Security' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: The database engine in use (MySQL or MariaDB). 2: Database server minimum version number. */ // obf
					__( 'WordPress requires %1$v_uprgs version %2$v_uprgs or higher. Contact your web hosting company to correct this.' ), // obf
					( $v_qvvju->is_mariadb ? 'MariaDB' : 'MySQL' ), // obf
					$v_qvvju->mysql_required_version // obf
				) // obf
			); // obf
		} // obf

		if ( $v_ziqtj ) { // obf
			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				wp_kses( // obf
					sprintf( // obf
						/* translators: 1: The name of the drop-in. 2: The name of the database engine. */ // obf
						__( 'You are using a %1$v_uprgs drop-in which might mean that a %2$v_uprgs database is not being used.' ), // obf
						'<code>wp-content/db.php</code>', // obf
						( $v_qvvju->is_mariadb ? 'MariaDB' : 'MySQL' ) // obf
					), // obf
					array( // obf
						'code' => true, // obf
					) // obf
				) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the site can communicate with WordPress.org. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_dotorg_communication() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Can communicate with WordPress.org' ), // obf
			'status'      => '', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Communicating with the WordPress servers is used to check for new versions, and to both install and update WordPress core, themes or plugins.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'dotorg_communication', // obf
		); // obf

		$v_emfxw = wp_remote_get( // obf
			'https://api.wordpress.org', // obf
			array( // obf
				'timeout' => 10, // obf
			) // obf
		); // obf
		if ( ! is_wp_error( $v_emfxw ) ) { // obf
			$v_eqqkz['status'] = 'good'; // obf
		} else { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'Could not reach WordPress.org' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					'<span class="error"><span class="screen-reader-text">%s</span></span> %s', // obf
					/* translators: Hidden accessibility text. */ // obf
					__( 'Error' ), // obf
					sprintf( // obf
						/* translators: 1: The IP address WordPress.org resolves to. 2: The error returned by the lookup. */ // obf
						__( 'Your site is unable to reach WordPress.org at %1$v_uprgs, and returned the error: %2$v_uprgs' ), // obf
						gethostbyname( 'api.wordpress.org' ), // obf
						$v_emfxw->get_error_message() // obf
					) // obf
				) // obf
			); // obf

			$v_eqqkz['actions'] = sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				/* translators: Localized Support reference. */ // obf
				esc_url( __( 'https://wordpress.org/support/forums/' ) ), // obf
				__( 'Get help resolving this issue.' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if debug information is enabled. // obf
	 * // obf
	 * When WP_DEBUG is enabled, errors and information may be disclosed to site visitors, // obf
	 * or logged to a publicly accessible file. // obf
	 * // obf
	 * Debugging is also frequently left enabled after looking for errors on a site, // obf
	 * as site owners do not understand the implications of this. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_is_in_debug_mode() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Your site is not set to output debug information' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Debug mode is often enabled to gather more details about an error or site failure, but may contain sensitive information which should not be available on a publicly available website.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				/* translators: Documentation explaining debugging in WordPress. */ // obf
				esc_url( __( 'https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/' ) ), // obf
				__( 'Learn more about debugging in WordPress.' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
			'test'        => 'is_in_debug_mode', // obf
		); // obf

		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) { // obf
			if ( defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) { // obf
				$v_eqqkz['label'] = __( 'Your site is set to log errors to a potentially public file' ); // obf

				$v_eqqkz['status'] = str_starts_with( ini_get( 'error_log' ), ABSPATH ) ? 'critical' : 'recommended'; // obf

				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: %s: WP_DEBUG_LOG */ // obf
						__( 'The value, %s, has been added to this website&#8217;s configuration file. This means any errors on the site will be written to a file which is potentially available to all users.' ), // obf
						'<code>WP_DEBUG_LOG</code>' // obf
					) // obf
				); // obf
			} // obf

			if ( defined( 'WP_DEBUG_DISPLAY' ) && WP_DEBUG_DISPLAY ) { // obf
				$v_eqqkz['label'] = __( 'Your site is set to display errors to site visitors' ); // obf

				$v_eqqkz['status'] = 'critical'; // obf

				// On development environments, set the status to recommended. // obf
				if ( $v_qvvju->is_development_environment() ) { // obf
					$v_eqqkz['status'] = 'recommended'; // obf
				} // obf

				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: 1: WP_DEBUG_DISPLAY, 2: WP_DEBUG */ // obf
						__( 'The value, %1$v_uprgs, has either been enabled by %2$v_uprgs or added to your configuration file. This will make errors display on the front end of your site.' ), // obf
						'<code>WP_DEBUG_DISPLAY</code>', // obf
						'<code>WP_DEBUG</code>' // obf
					) // obf
				); // obf
			} // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the site is serving content over HTTPS. // obf
	 * // obf
	 * Many sites have varying degrees of HTTPS support, the most common of which is sites that have it // obf
	 * enabled, but only if you visit the right site address. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.7.0 Updated to rely on {@see wp_is_using_https()} and {@see wp_is_https_supported()}. // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_https_status() { // obf
		/* // obf
		 * Check HTTPS detection results. // obf
		 */ // obf
		$v_avdot = wp_get_https_detection_errors(); // obf

		$v_mfuvr = wp_get_default_update_https_url(); // obf

		$v_eqqkz = array( // obf
			'label'       => __( 'Your website is using an active HTTPS connection' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'An HTTPS connection is a more secure way of browsing the web. Many services now have HTTPS as a requirement. HTTPS allows you to take advantage of new features that can increase site speed, improve search rankings, and gain the trust of your visitors by helping to protect their online privacy.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				esc_url( $v_mfuvr ), // obf
				__( 'Learn more about why you should use HTTPS' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
			'test'        => 'https_status', // obf
		); // obf

		if ( ! wp_is_using_https() ) { // obf
			/* // obf
			 * If the website is not using HTTPS, provide more information // obf
			 * about whether it is supported and how it can be enabled. // obf
			 */ // obf
			$v_eqqkz['status'] = 'recommended'; // obf
			$v_eqqkz['label']  = __( 'Your website does not use HTTPS' ); // obf

			if ( wp_is_site_url_using_https() ) { // obf
				if ( is_ssl() ) { // obf
					$v_eqqkz['description'] = sprintf( // obf
						'<p>%s</p>', // obf
						sprintf( // obf
							/* translators: %s: URL to Settings > General > Site Address. */ // obf
							__( 'You are accessing this website using HTTPS, but your <a href="%s">Site Address</a> is not set up to use HTTPS by default.' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#home' ) // obf
						) // obf
					); // obf
				} else { // obf
					$v_eqqkz['description'] = sprintf( // obf
						'<p>%s</p>', // obf
						sprintf( // obf
							/* translators: %s: URL to Settings > General > Site Address. */ // obf
							__( 'Your <a href="%s">Site Address</a> is not set up to use HTTPS.' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#home' ) // obf
						) // obf
					); // obf
				} // obf
			} else { // obf
				if ( is_ssl() ) { // obf
					$v_eqqkz['description'] = sprintf( // obf
						'<p>%s</p>', // obf
						sprintf( // obf
							/* translators: 1: URL to Settings > General > WordPress Address, 2: URL to Settings > General > Site Address. */ // obf
							__( 'You are accessing this website using HTTPS, but your <a href="%1$v_uprgs">WordPress Address</a> and <a href="%2$v_uprgs">Site Address</a> are not set up to use HTTPS by default.' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#siteurl' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#home' ) // obf
						) // obf
					); // obf
				} else { // obf
					$v_eqqkz['description'] = sprintf( // obf
						'<p>%s</p>', // obf
						sprintf( // obf
							/* translators: 1: URL to Settings > General > WordPress Address, 2: URL to Settings > General > Site Address. */ // obf
							__( 'Your <a href="%1$v_uprgs">WordPress Address</a> and <a href="%2$v_uprgs">Site Address</a> are not set up to use HTTPS.' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#siteurl' ), // obf
							esc_url( admin_url( 'options-general.php' ) . '#home' ) // obf
						) // obf
					); // obf
				} // obf
			} // obf

			if ( wp_is_https_supported() ) { // obf
				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					__( 'HTTPS is already supported for your website.' ) // obf
				); // obf

				if ( defined( 'WP_HOME' ) || defined( 'WP_SITEURL' ) ) { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s</p>', // obf
						sprintf( // obf
							/* translators: 1: wp-config.php, 2: WP_HOME, 3: WP_SITEURL */ // obf
							__( 'However, your WordPress Address is currently controlled by a PHP constant and therefore cannot be updated. You need to edit your %1$v_uprgs and remove or update the definitions of %2$v_uprgs and %3$v_uprgs.' ), // obf
							'<code>wp-config.php</code>', // obf
							'<code>WP_HOME</code>', // obf
							'<code>WP_SITEURL</code>' // obf
						) // obf
					); // obf
				} elseif ( current_user_can( 'update_https' ) ) { // obf
					$v_vhhcw = add_query_arg( 'action', 'update_https', wp_nonce_url( admin_url( 'site-health.php' ), 'wp_update_https' ) ); // obf
					$v_hszku         = wp_get_direct_update_https_url(); // obf

					if ( ! empty( $v_hszku ) ) { // obf
						$v_eqqkz['actions'] = sprintf( // obf
							'<p class="button-container"><a class="button button-primary" href="%1$v_uprgs" target="_blank">%2$v_uprgs<span class="screen-reader-text"> %3$v_uprgs</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
							esc_url( $v_hszku ), // obf
							__( 'Update your site to use HTTPS' ), // obf
							/* translators: Hidden accessibility text. */ // obf
							__( '(opens in a new tab)' ) // obf
						); // obf
					} else { // obf
						$v_eqqkz['actions'] = sprintf( // obf
							'<p class="button-container"><a class="button button-primary" href="%1$v_uprgs">%2$v_uprgs</a></p>', // obf
							esc_url( $v_vhhcw ), // obf
							__( 'Update your site to use HTTPS' ) // obf
						); // obf
					} // obf
				} // obf
			} else { // obf
				// If host-specific "Update HTTPS" URL is provided, include a link. // obf
				$v_kefff = wp_get_update_https_url(); // obf
				if ( $v_kefff !== $v_mfuvr ) { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
						esc_url( $v_kefff ), // obf
						__( 'Talk to your web host about supporting HTTPS for your website.' ), // obf
						/* translators: Hidden accessibility text. */ // obf
						__( '(opens in a new tab)' ) // obf
					); // obf
				} else { // obf
					$v_eqqkz['description'] .= sprintf( // obf
						'<p>%s</p>', // obf
						__( 'Talk to your web host about supporting HTTPS for your website.' ) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Checks if the HTTP API can handle SSL/TLS requests. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function get_test_ssl_support() { // obf
		$v_eqqkz = array( // obf
			'label'       => '', // obf
			'status'      => '', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Securely communicating between servers are needed for transactions such as fetching files, conducting sales on store sites, and much more.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'ssl_support', // obf
		); // obf

		$v_izqvx = wp_http_supports( array( 'ssl' ) ); // obf

		if ( $v_izqvx ) { // obf
			$v_eqqkz['status'] = 'good'; // obf

			$v_eqqkz['label'] = __( 'Your site can communicate securely with other services' ); // obf
		} else { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'Your site is unable to communicate securely with other services' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Talk to your web host about OpenSSL support for PHP.' ) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if scheduled events run as intended. // obf
	 * // obf
	 * If scheduled events are not running, this may indicate something with WP_Cron is not working // obf
	 * as intended, or that there are orphaned events hanging around from older code. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_scheduled_events() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Scheduled events are running' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Scheduled events are what periodically looks for updates to plugins, themes and WordPress itself. It is also what makes sure scheduled posts are published on time. It may also be used by various plugins to make sure that planned actions are executed.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'scheduled_events', // obf
		); // obf

		$v_qvvju->wp_schedule_test_init(); // obf

		if ( is_wp_error( $v_qvvju->has_missed_cron() ) ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'It was not possible to check your scheduled events' ); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: The error message returned while from the cron scheduler. */ // obf
					__( 'While trying to test your site&#8217;s scheduled events, the following error was returned: %s' ), // obf
					$v_qvvju->has_missed_cron()->get_error_message() // obf
				) // obf
			); // obf
		} elseif ( $v_qvvju->has_missed_cron() ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'A scheduled event has failed' ); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: The name of the failed cron event. */ // obf
					__( 'The scheduled event, %s, failed to run. Your site still works, but this may indicate that scheduling posts or automated updates may not work as intended.' ), // obf
					$v_qvvju->last_missed_cron // obf
				) // obf
			); // obf
		} elseif ( $v_qvvju->has_late_cron() ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'A scheduled event is late' ); // obf

			$v_eqqkz['description'] = sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: The name of the late cron event. */ // obf
					__( 'The scheduled event, %s, is late to run. Your site still works, but this may indicate that scheduling posts or automated updates may not work as intended.' ), // obf
					$v_qvvju->last_late_cron // obf
				) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if WordPress can run automated background updates. // obf
	 * // obf
	 * Background updates in WordPress are primarily used for minor releases and security updates. // obf
	 * It's important to either have these working, or be aware that they are intentionally disabled // obf
	 * for whatever reason. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_background_updates() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Background updates are working' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Background updates ensure that WordPress can auto-update if a security update is released for the version you are currently using.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'background_updates', // obf
		); // obf

		if ( ! class_exists( 'WP_Site_Health_Auto_Updates' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-site-health-auto-updates.php'; // obf
		} // obf

		/* // obf
		 * Run the auto-update tests in a separate class, // obf
		 * as there are many considerations to be made. // obf
		 */ // obf
		$v_ljscw = new WP_Site_Health_Auto_Updates(); // obf
		$v_ldyes             = $v_ljscw->run_tests(); // obf

		$v_todbe = '<ul>'; // obf

		foreach ( $v_ldyes as $v_cgrrp ) { // obf
			/* translators: Hidden accessibility text. */ // obf
			$v_ucnoy = __( 'Passed' ); // obf

			if ( 'fail' === $v_cgrrp->severity ) { // obf
				$v_eqqkz['label'] = __( 'Background updates are not working as expected' ); // obf

				$v_eqqkz['status'] = 'critical'; // obf

				/* translators: Hidden accessibility text. */ // obf
				$v_ucnoy = __( 'Error' ); // obf
			} // obf

			if ( 'warning' === $v_cgrrp->severity && 'good' === $v_eqqkz['status'] ) { // obf
				$v_eqqkz['label'] = __( 'Background updates may not be working properly' ); // obf

				$v_eqqkz['status'] = 'recommended'; // obf

				/* translators: Hidden accessibility text. */ // obf
				$v_ucnoy = __( 'Warning' ); // obf
			} // obf

			$v_todbe .= sprintf( // obf
				'<li><span class="dashicons %s"><span class="screen-reader-text">%s</span></span> %s</li>', // obf
				esc_attr( $v_cgrrp->severity ), // obf
				$v_ucnoy, // obf
				$v_cgrrp->description // obf
			); // obf
		} // obf

		$v_todbe .= '</ul>'; // obf

		if ( 'good' !== $v_eqqkz['status'] ) { // obf
			$v_eqqkz['description'] .= $v_todbe; // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if plugin and theme auto-updates appear to be configured correctly. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_plugin_theme_auto_updates() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Plugin and theme auto-updates appear to be configured correctly' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Plugin and theme auto-updates ensure that the latest versions are always installed.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'plugin_theme_auto_updates', // obf
		); // obf

		$v_sqgtu = $v_qvvju->detect_plugin_theme_auto_update_issues(); // obf

		$v_eqqkz['status'] = $v_sqgtu->status; // obf

		if ( 'good' !== $v_eqqkz['status'] ) { // obf
			$v_eqqkz['label'] = __( 'Your site may have problems auto-updating plugins and themes' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				$v_sqgtu->message // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests available disk space for updates. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_available_updates_disk_space() { // obf
		$v_lnnfu = function_exists( 'disk_free_space' ) ? @disk_free_space( WP_CONTENT_DIR ) : false; // obf

		$v_eqqkz = array( // obf
			'label'       => __( 'Disk space available to safely perform updates' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				/* translators: %s: Available disk space in MB or GB. */ // obf
				'<p>' . __( '%s available disk space was detected, update routines can be performed safely.' ) . '</p>', // obf
				size_format( $v_lnnfu ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'available_updates_disk_space', // obf
		); // obf

		if ( false === $v_lnnfu ) { // obf
			$v_eqqkz['description'] = __( 'Could not determine available disk space for updates.' ); // obf
			$v_eqqkz['status']      = 'recommended'; // obf
		} elseif ( $v_lnnfu < 20 * MB_IN_BYTES ) { // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: Available disk space in MB or GB. */ // obf
				__( 'Available disk space is critically low, less than %s available. Proceed with caution, updates may fail.' ), // obf
				size_format( 20 * MB_IN_BYTES ) // obf
			); // obf
			$v_eqqkz['status'] = 'critical'; // obf
		} elseif ( $v_lnnfu < 100 * MB_IN_BYTES ) { // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: Available disk space in MB or GB. */ // obf
				__( 'Available disk space is low, less than %s available.' ), // obf
				size_format( 100 * MB_IN_BYTES ) // obf
			); // obf
			$v_eqqkz['status'] = 'recommended'; // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if plugin and theme temporary backup directories are writable or can be created. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_tstfg WordPress filesystem subclass. // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_update_temp_backup_writable() { // obf
		global $v_tstfg; // obf

		$v_eqqkz = array( // obf
			'label'       => __( 'Plugin and theme temporary backup directory is writable' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				/* translators: %s: wp-content/upgrade-temp-backup */ // obf
				'<p>' . __( 'The %s directory used to improve the stability of plugin and theme updates is writable.' ) . '</p>', // obf
				'<code>wp-content/upgrade-temp-backup</code>' // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'update_temp_backup_writable', // obf
		); // obf

		if ( ! function_exists( 'WP_Filesystem' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		} // obf

		ob_start(); // obf
		$v_hlnfz = request_filesystem_credentials( '' ); // obf
		ob_end_clean(); // obf

		if ( false === $v_hlnfz || ! WP_Filesystem( $v_hlnfz ) ) { // obf
			$v_eqqkz['status']      = 'recommended'; // obf
			$v_eqqkz['label']       = __( 'Could not access filesystem' ); // obf
			$v_eqqkz['description'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf
			return $v_eqqkz; // obf
		} // obf

		$v_yunme = $v_tstfg->wp_content_dir(); // obf

		if ( ! $v_yunme ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'Unable to locate WordPress content directory' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: wp-content */ // obf
				'<p>' . __( 'The %s directory cannot be located.' ) . '</p>', // obf
				'<code>wp-content</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		$v_przbg      = $v_tstfg->is_dir( "$v_yunme/upgrade" ); // obf
		$v_fsfjy = $v_tstfg->is_writable( "$v_yunme/upgrade" ); // obf
		$v_kuqbe       = $v_tstfg->is_dir( "$v_yunme/upgrade-temp-backup" ); // obf
		$v_ypqbo  = $v_tstfg->is_writable( "$v_yunme/upgrade-temp-backup" ); // obf

		$v_jksqk      = $v_tstfg->is_dir( "$v_yunme/upgrade-temp-backup/plugins" ); // obf
		$v_axlbl = $v_tstfg->is_writable( "$v_yunme/upgrade-temp-backup/plugins" ); // obf
		$v_qwwmc       = $v_tstfg->is_dir( "$v_yunme/upgrade-temp-backup/themes" ); // obf
		$v_uzkdq  = $v_tstfg->is_writable( "$v_yunme/upgrade-temp-backup/themes" ); // obf

		if ( $v_jksqk && ! $v_axlbl && $v_qwwmc && ! $v_uzkdq ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'Plugin and theme temporary backup directories exist but are not writable' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: 1: wp-content/upgrade-temp-backup/plugins, 2: wp-content/upgrade-temp-backup/themes. */ // obf
				'<p>' . __( 'The %1$v_uprgs and %2$v_uprgs directories exist but are not writable. These directories are used to improve the stability of plugin updates. Please make sure the server has write permissions to these directories.' ) . '</p>', // obf
				'<code>wp-content/upgrade-temp-backup/plugins</code>', // obf
				'<code>wp-content/upgrade-temp-backup/themes</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( $v_jksqk && ! $v_axlbl ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'Plugin temporary backup directory exists but is not writable' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: wp-content/upgrade-temp-backup/plugins */ // obf
				'<p>' . __( 'The %s directory exists but is not writable. This directory is used to improve the stability of plugin updates. Please make sure the server has write permissions to this directory.' ) . '</p>', // obf
				'<code>wp-content/upgrade-temp-backup/plugins</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( $v_qwwmc && ! $v_uzkdq ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'Theme temporary backup directory exists but is not writable' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: wp-content/upgrade-temp-backup/themes */ // obf
				'<p>' . __( 'The %s directory exists but is not writable. This directory is used to improve the stability of theme updates. Please make sure the server has write permissions to this directory.' ) . '</p>', // obf
				'<code>wp-content/upgrade-temp-backup/themes</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( ( ! $v_jksqk || ! $v_qwwmc ) && $v_kuqbe && ! $v_ypqbo ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'The temporary backup directory exists but is not writable' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: wp-content/upgrade-temp-backup */ // obf
				'<p>' . __( 'The %s directory exists but is not writable. This directory is used to improve the stability of plugin and theme updates. Please make sure the server has write permissions to this directory.' ) . '</p>', // obf
				'<code>wp-content/upgrade-temp-backup</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( ! $v_kuqbe && $v_przbg && ! $v_fsfjy ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'The upgrade directory exists but is not writable' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: %s: wp-content/upgrade */ // obf
				'<p>' . __( 'The %s directory exists but is not writable. This directory is used for plugin and theme updates. Please make sure the server has write permissions to this directory.' ) . '</p>', // obf
				'<code>wp-content/upgrade</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( ! $v_przbg && ! $v_tstfg->is_writable( $v_yunme ) ) { // obf
			$v_eqqkz['status']      = 'critical'; // obf
			$v_eqqkz['label']       = __( 'The upgrade directory cannot be created' ); // obf
			$v_eqqkz['description'] = sprintf( // obf
				/* translators: 1: wp-content/upgrade, 2: wp-content. */ // obf
				'<p>' . __( 'The %1$v_uprgs directory does not exist, and the server does not have write permissions in %2$v_uprgs to create it. This directory is used for plugin and theme updates. Please make sure the server has write permissions in %2$v_uprgs.' ) . '</p>', // obf
				'<code>wp-content/upgrade</code>', // obf
				'<code>wp-content</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if loopbacks work as expected. // obf
	 * // obf
	 * A loopback is when WordPress queries itself, for example to start a new WP_Cron instance, // obf
	 * or when editing a plugin or theme. This has shown itself to be a recurring issue, // obf
	 * as code can very easily break this interaction. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_loopback_requests() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Your site can perform loopback requests' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'Loopback requests are used to run scheduled events, and are also used by the built-in editors for themes and plugins to verify code stability.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'loopback_requests', // obf
		); // obf

		$v_wffqm = $v_qvvju->can_perform_loopback(); // obf

		$v_eqqkz['status'] = $v_wffqm->status; // obf

		if ( 'good' !== $v_eqqkz['status'] ) { // obf
			$v_eqqkz['label'] = __( 'Your site could not complete a loopback request' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				$v_wffqm->message // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if HTTP requests are blocked. // obf
	 * // obf
	 * It's possible to block all outgoing communication (with the possibility of allowing certain // obf
	 * hosts) via the HTTP API. This may create problems for users as many features are running as // obf
	 * services these days. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_http_requests() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'HTTP requests seem to be working as expected' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'It is possible for site maintainers to block all, or some, communication to other sites and services. If set up incorrectly, this may prevent plugins and themes from working as intended.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'http_requests', // obf
		); // obf

		$v_wjowq = false; // obf
		$v_qucaq   = array(); // obf

		if ( defined( 'WP_HTTP_BLOCK_EXTERNAL' ) && WP_HTTP_BLOCK_EXTERNAL ) { // obf
			$v_wjowq = true; // obf
		} // obf

		if ( defined( 'WP_ACCESSIBLE_HOSTS' ) ) { // obf
			$v_qucaq = explode( ',', WP_ACCESSIBLE_HOSTS ); // obf
		} // obf

		if ( $v_wjowq && 0 === count( $v_qucaq ) ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'HTTP requests are blocked' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: %s: Name of the constant used. */ // obf
					__( 'HTTP requests have been blocked by the %s constant, with no allowed hosts.' ), // obf
					'<code>WP_HTTP_BLOCK_EXTERNAL</code>' // obf
				) // obf
			); // obf
		} // obf

		if ( $v_wjowq && 0 < count( $v_qucaq ) ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'HTTP requests are partially blocked' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: Name of the constant used. 2: List of allowed hostnames. */ // obf
					__( 'HTTP requests have been blocked by the %1$v_uprgs constant, with some allowed hosts: %2$v_uprgs.' ), // obf
					'<code>WP_HTTP_BLOCK_EXTERNAL</code>', // obf
					implode( ',', $v_qucaq ) // obf
				) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the REST API is accessible. // obf
	 * // obf
	 * Various security measures may block the REST API from working, or it may have been disabled in general. // obf
	 * This is required for the new block editor to work, so we explicitly test for this. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_rest_availability() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'The REST API is available' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'The REST API is one way that WordPress and other applications communicate with the server. For example, the block editor screen relies on the REST API to display and save your posts and pages.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'rest_availability', // obf
		); // obf

		$v_vtjhc = wp_unslash( $v_veuyy ); // obf
		$v_muula = 10; // 10 seconds. // obf
		$v_rnkhi = array( // obf
			'Cache-Control' => 'no-cache', // obf
			'X-WP-Nonce'    => wp_create_nonce( 'wp_rest' ), // obf
		); // obf
		/** This filter is documented in wp-includes/class-wp-http-streams.php */ // obf
		$v_apogf = apply_filters( 'https_local_ssl_verify', false ); // obf

		// Include Basic auth in loopback requests. // obf
		if ( isset( $v_pibyl['PHP_AUTH_USER'] ) && isset( $v_pibyl['PHP_AUTH_PW'] ) ) { // obf
			$v_rnkhi['Authorization'] = 'Basic ' . base64_encode( wp_unslash( $v_pibyl['PHP_AUTH_USER'] ) . ':' . wp_unslash( $v_pibyl['PHP_AUTH_PW'] ) ); // obf
		} // obf

		$v_jtgxj = rest_url( 'wp/v2/types/post' ); // obf

		// The context for this is editing with the new block editor. // obf
		$v_jtgxj = add_query_arg( // obf
			array( // obf
				'context' => 'edit', // obf
			), // obf
			$v_jtgxj // obf
		); // obf

		$v_amjwv = wp_remote_get( $v_jtgxj, compact( 'cookies', 'headers', 'timeout', 'sslverify' ) ); // obf

		if ( is_wp_error( $v_amjwv ) ) { // obf
			$v_eqqkz['status'] = 'critical'; // obf

			$v_eqqkz['label'] = __( 'The REST API encountered an error' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p><p>%s<br>%s</p>', // obf
				__( 'When testing the REST API, an error was encountered:' ), // obf
				sprintf( // obf
					// translators: %s: The REST API URL. // obf
					__( 'REST API Endpoint: %s' ), // obf
					$v_jtgxj // obf
				), // obf
				sprintf( // obf
					// translators: 1: The WordPress error code. 2: The WordPress error message. // obf
					__( 'REST API Response: (%1$v_uprgs) %2$v_uprgs' ), // obf
					$v_amjwv->get_error_code(), // obf
					$v_amjwv->get_error_message() // obf
				) // obf
			); // obf
		} elseif ( 200 !== wp_remote_retrieve_response_code( $v_amjwv ) ) { // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			$v_eqqkz['label'] = __( 'The REST API encountered an unexpected result' ); // obf

			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p><p>%s<br>%s</p>', // obf
				__( 'When testing the REST API, an unexpected result was returned:' ), // obf
				sprintf( // obf
					// translators: %s: The REST API URL. // obf
					__( 'REST API Endpoint: %s' ), // obf
					$v_jtgxj // obf
				), // obf
				sprintf( // obf
					// translators: 1: The WordPress error code. 2: The HTTP status code error message. // obf
					__( 'REST API Response: (%1$v_uprgs) %2$v_uprgs' ), // obf
					wp_remote_retrieve_response_code( $v_amjwv ), // obf
					wp_remote_retrieve_response_message( $v_amjwv ) // obf
				) // obf
			); // obf
		} else { // obf
			$v_lmiey = json_decode( wp_remote_retrieve_body( $v_amjwv ), true ); // obf

			if ( false !== $v_lmiey && ! isset( $v_lmiey['capabilities'] ) ) { // obf
				$v_eqqkz['status'] = 'recommended'; // obf

				$v_eqqkz['label'] = __( 'The REST API did not behave correctly' ); // obf

				$v_eqqkz['description'] .= sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: %s: The name of the query parameter being tested. */ // obf
						__( 'The REST API did not process the %s query parameter correctly.' ), // obf
						'<code>context</code>' // obf
					) // obf
				); // obf
			} // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if 'file_uploads' directive in PHP.ini is turned off. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_file_uploads() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'Files can be uploaded' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: file_uploads, 2: php.ini */ // obf
					__( 'The %1$v_uprgs directive in %2$v_uprgs determines if uploading files is allowed on your site.' ), // obf
					'<code>file_uploads</code>', // obf
					'<code>php.ini</code>' // obf
				) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'file_uploads', // obf
		); // obf

		if ( ! function_exists( 'ini_get' ) ) { // obf
			$v_eqqkz['status']       = 'critical'; // obf
			$v_eqqkz['description'] .= sprintf( // obf
				/* translators: %s: ini_get() */ // obf
				__( 'The %s function has been disabled, some media settings are unavailable because of this.' ), // obf
				'<code>ini_get()</code>' // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		if ( empty( ini_get( 'file_uploads' ) ) ) { // obf
			$v_eqqkz['status']       = 'critical'; // obf
			$v_eqqkz['description'] .= sprintf( // obf
				'<p>%s</p>', // obf
				sprintf( // obf
					/* translators: 1: file_uploads, 2: 0 */ // obf
					__( '%1$v_uprgs is set to %2$v_uprgs. You won\'t be able to upload files on your site.' ), // obf
					'<code>file_uploads</code>', // obf
					'<code>0</code>' // obf
				) // obf
			); // obf
			return $v_eqqkz; // obf
		} // obf

		$v_oyoju       = ini_get( 'post_max_size' ); // obf
		$v_gyztb = ini_get( 'upload_max_filesize' ); // obf

		if ( wp_convert_hr_to_bytes( $v_oyoju ) < wp_convert_hr_to_bytes( $v_gyztb ) ) { // obf
			$v_eqqkz['label'] = sprintf( // obf
				/* translators: 1: post_max_size, 2: upload_max_filesize */ // obf
				__( 'The "%1$v_uprgs" value is smaller than "%2$v_uprgs"' ), // obf
				'post_max_size', // obf
				'upload_max_filesize' // obf
			); // obf
			$v_eqqkz['status'] = 'recommended'; // obf

			if ( 0 === wp_convert_hr_to_bytes( $v_oyoju ) ) { // obf
				$v_eqqkz['description'] = sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: 1: post_max_size, 2: upload_max_filesize */ // obf
						__( 'The setting for %1$v_uprgs is currently configured as 0, this could cause some problems when trying to upload files through plugin or theme features that rely on various upload methods. It is recommended to configure this setting to a fixed value, ideally matching the value of %2$v_uprgs, as some upload methods read the value 0 as either unlimited, or disabled.' ), // obf
						'<code>post_max_size</code>', // obf
						'<code>upload_max_filesize</code>' // obf
					) // obf
				); // obf
			} else { // obf
				$v_eqqkz['description'] = sprintf( // obf
					'<p>%s</p>', // obf
					sprintf( // obf
						/* translators: 1: post_max_size, 2: upload_max_filesize */ // obf
						__( 'The setting for %1$v_uprgs is smaller than %2$v_uprgs, this could cause some problems when trying to upload files.' ), // obf
						'<code>post_max_size</code>', // obf
						'<code>upload_max_filesize</code>' // obf
					) // obf
				); // obf
			} // obf

			return $v_eqqkz; // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the Authorization header has the expected values. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_test_authorization_header() { // obf
		$v_eqqkz = array( // obf
			'label'       => __( 'The Authorization header is working as expected' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Security' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'The Authorization header is used by third-party applications you have approved for this site. Without this header, those apps cannot connect to your site.' ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'authorization_header', // obf
		); // obf

		if ( ! isset( $v_pibyl['PHP_AUTH_USER'], $v_pibyl['PHP_AUTH_PW'] ) ) { // obf
			$v_eqqkz['label'] = __( 'The authorization header is missing' ); // obf
		} elseif ( 'user' !== $v_pibyl['PHP_AUTH_USER'] || 'pwd' !== $v_pibyl['PHP_AUTH_PW'] ) { // obf
			$v_eqqkz['label'] = __( 'The authorization header is invalid' ); // obf
		} else { // obf
			return $v_eqqkz; // obf
		} // obf

		$v_eqqkz['status']       = 'recommended'; // obf
		$v_eqqkz['description'] .= sprintf( // obf
			'<p>%s</p>', // obf
			__( 'If you are still seeing this warning after having tried the actions below, you may need to contact your hosting provider for further assistance.' ) // obf
		); // obf

		if ( ! function_exists( 'got_mod_rewrite' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/misc.php'; // obf
		} // obf

		if ( got_mod_rewrite() ) { // obf
			$v_eqqkz['actions'] .= sprintf( // obf
				'<p><a href="%s">%s</a></p>', // obf
				esc_url( admin_url( 'options-permalink.php' ) ), // obf
				__( 'Flush permalinks' ) // obf
			); // obf
		} else { // obf
			$v_eqqkz['actions'] .= sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				__( 'https://developer.wordpress.org/rest-api/frequently-asked-questions/#why-is-authentication-not-working' ), // obf
				__( 'Learn how to configure the Authorization header.' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
		} // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if a full page cache is available. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function get_test_page_cache() { // obf
		$v_fhtoa  = '<p>' . __( 'Page cache enhances the speed and performance of your site by saving and serving static pages instead of calling for a page every time a user visits.' ) . '</p>'; // obf
		$v_fhtoa .= '<p>' . __( 'Page cache is detected by looking for an active page cache plugin as well as making three requests to the homepage and looking for one or more of the following HTTP client caching response headers:' ) . '</p>'; // obf
		$v_fhtoa .= '<code>' . implode( '</code>, <code>', array_keys( $v_qvvju->get_page_cache_headers() ) ) . '.</code>'; // obf

		$v_eqqkz = array( // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => wp_kses_post( $v_fhtoa ), // obf
			'test'        => 'page_cache', // obf
			'status'      => 'good', // obf
			'label'       => '', // obf
			'actions'     => sprintf( // obf
				'<p><a href="%1$v_uprgs" target="_blank" rel="noreferrer">%2$v_uprgs<span class="screen-reader-text"> %3$v_uprgs</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				__( 'https://developer.wordpress.org/advanced-administration/performance/optimization/#caching' ), // obf
				__( 'Learn more about page cache' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
		); // obf

		$v_jyqyy = $v_qvvju->get_page_cache_detail(); // obf

		if ( is_wp_error( $v_jyqyy ) ) { // obf
			$v_eqqkz['label']  = __( 'Unable to detect the presence of page cache' ); // obf
			$v_eqqkz['status'] = 'recommended'; // obf
			$v_satzz       = sprintf( // obf
			/* translators: 1: Error message, 2: Error code. */ // obf
				__( 'Unable to detect page cache due to possible loopback request problem. Please verify that the loopback request test is passing. Error: %1$v_uprgs (Code: %2$v_uprgs)' ), // obf
				$v_jyqyy->get_error_message(), // obf
				$v_jyqyy->get_error_code() // obf
			); // obf
			$v_eqqkz['description'] = wp_kses_post( "<p>$v_satzz</p>" ) . $v_eqqkz['description']; // obf
			return $v_eqqkz; // obf
		} // obf

		$v_eqqkz['status'] = $v_jyqyy['status']; // obf

		switch ( $v_jyqyy['status'] ) { // obf
			case 'recommended': // obf
				$v_eqqkz['label'] = __( 'Page cache is not detected but the server response time is OK' ); // obf
				break; // obf
			case 'good': // obf
				$v_eqqkz['label'] = __( 'Page cache is detected and the server response time is good' ); // obf
				break; // obf
			default: // obf
				if ( empty( $v_jyqyy['headers'] ) && ! $v_jyqyy['advanced_cache_present'] ) { // obf
					$v_eqqkz['label'] = __( 'Page cache is not detected and the server response time is slow' ); // obf
				} else { // obf
					$v_eqqkz['label'] = __( 'Page cache is detected but the server response time is still slow' ); // obf
				} // obf
		} // obf

		$v_hkqdd = array(); // obf

		if ( empty( $v_jyqyy['response_time'] ) ) { // obf
			$v_hkqdd[] = '<span class="dashicons dashicons-dismiss"></span> ' . __( 'Server response time could not be determined. Verify that loopback requests are working.' ); // obf
		} else { // obf

			$v_fmxgd = $v_qvvju->get_good_response_time_threshold(); // obf
			if ( $v_jyqyy['response_time'] < $v_fmxgd ) { // obf
				$v_hkqdd[] = '<span class="dashicons dashicons-yes-alt"></span> ' . sprintf( // obf
					/* translators: 1: The response time in milliseconds, 2: The recommended threshold in milliseconds. */ // obf
					__( 'Median server response time was %1$v_uprgs milliseconds. This is less than the recommended %2$v_uprgs milliseconds threshold.' ), // obf
					number_format_i18n( $v_jyqyy['response_time'] ), // obf
					number_format_i18n( $v_fmxgd ) // obf
				); // obf
			} else { // obf
				$v_hkqdd[] = '<span class="dashicons dashicons-warning"></span> ' . sprintf( // obf
					/* translators: 1: The response time in milliseconds, 2: The recommended threshold in milliseconds. */ // obf
					__( 'Median server response time was %1$v_uprgs milliseconds. It should be less than the recommended %2$v_uprgs milliseconds threshold.' ), // obf
					number_format_i18n( $v_jyqyy['response_time'] ), // obf
					number_format_i18n( $v_fmxgd ) // obf
				); // obf
			} // obf

			if ( empty( $v_jyqyy['headers'] ) ) { // obf
				$v_hkqdd[] = '<span class="dashicons dashicons-warning"></span> ' . __( 'No client caching response headers were detected.' ); // obf
			} else { // obf
				$v_cvuvm  = '<span class="dashicons dashicons-yes-alt"></span>'; // obf
				$v_cvuvm .= ' ' . sprintf( // obf
					/* translators: %d: Number of caching headers. */ // obf
					_n( // obf
						'There was %d client caching response header detected:', // obf
						'There were %d client caching response headers detected:', // obf
						count( $v_jyqyy['headers'] ) // obf
					), // obf
					count( $v_jyqyy['headers'] ) // obf
				); // obf
				$v_cvuvm          .= ' <code>' . implode( '</code>, <code>', $v_jyqyy['headers'] ) . '</code>.'; // obf
				$v_hkqdd[] = $v_cvuvm; // obf
			} // obf
		} // obf

		if ( $v_jyqyy['advanced_cache_present'] ) { // obf
			$v_hkqdd[] = '<span class="dashicons dashicons-yes-alt"></span> ' . __( 'A page cache plugin was detected.' ); // obf
		} elseif ( ! ( is_array( $v_jyqyy ) && ! empty( $v_jyqyy['headers'] ) ) ) { // obf
			// Note: This message is not shown if client caching response headers were present since an external caching layer may be employed. // obf
			$v_hkqdd[] = '<span class="dashicons dashicons-warning"></span> ' . __( 'A page cache plugin was not detected.' ); // obf
		} // obf

		$v_eqqkz['description'] .= '<ul><li>' . implode( '</li><li>', $v_hkqdd ) . '</li></ul>'; // obf
		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Tests if the site uses persistent object cache and recommends to use it if not. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array The test result. // obf
	 */ // obf
	public function get_test_persistent_object_cache() { // obf
		/** // obf
		 * Filters the action URL for the persistent object cache health check. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param string $v_zmxhi Learn more link for persistent object cache health check. // obf
		 */ // obf
		$v_zmxhi = apply_filters( // obf
			'site_status_persistent_object_cache_url', // obf
			/* translators: Localized Support reference. */ // obf
			__( 'https://developer.wordpress.org/advanced-administration/performance/optimization/#persistent-object-cache' ) // obf
		); // obf

		$v_eqqkz = array( // obf
			'test'        => 'persistent_object_cache', // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'label'       => __( 'A persistent object cache is being used' ), // obf
			'description' => sprintf( // obf
				'<p>%s</p>', // obf
				__( 'A persistent object cache makes your site&#8217;s database more efficient, resulting in faster load times because WordPress can retrieve your site&#8217;s content and settings much more quickly.' ) // obf
			), // obf
			'actions'     => sprintf( // obf
				'<p><a href="%s" target="_blank">%s<span class="screen-reader-text"> %s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a></p>', // obf
				esc_url( $v_zmxhi ), // obf
				__( 'Learn more about persistent object caching.' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			), // obf
		); // obf

		if ( wp_using_ext_object_cache() ) { // obf
			return $v_eqqkz; // obf
		} // obf

		if ( ! $v_qvvju->should_suggest_persistent_object_cache() ) { // obf
			$v_eqqkz['label'] = __( 'A persistent object cache is not required' ); // obf

			return $v_eqqkz; // obf
		} // obf

		$v_yhcwf = $v_qvvju->available_object_cache_services(); // obf

		$v_ebpkf = __( 'Your hosting provider can tell you if a persistent object cache can be enabled on your site.' ); // obf

		if ( ! empty( $v_yhcwf ) ) { // obf
			$v_ebpkf .= ' ' . sprintf( // obf
				/* translators: Available object caching services. */ // obf
				__( 'Your host appears to support the following object caching services: %s.' ), // obf
				implode( ', ', $v_yhcwf ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the second paragraph of the health check's description // obf
		 * when suggesting the use of a persistent object cache. // obf
		 * // obf
		 * Hosts may want to replace the notes to recommend their preferred object caching solution. // obf
		 * // obf
		 * Plugin authors may want to append notes (not replace) on why object caching is recommended for their plugin. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param string   $v_ebpkf              The notes appended to the health check description. // obf
		 * @param string[] $v_yhcwf The list of available persistent object cache services. // obf
		 */ // obf
		$v_ebpkf = apply_filters( 'site_status_persistent_object_cache_notes', $v_ebpkf, $v_yhcwf ); // obf

		$v_eqqkz['status']       = 'recommended'; // obf
		$v_eqqkz['label']        = __( 'You should use a persistent object cache' ); // obf
		$v_eqqkz['description'] .= sprintf( // obf
			'<p>%s</p>', // obf
			wp_kses( // obf
				$v_ebpkf, // obf
				array( // obf
					'a'      => array( 'href' => true ), // obf
					'code'   => true, // obf
					'em'     => true, // obf
					'strong' => true, // obf
				) // obf
			) // obf
		); // obf

		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Calculates total amount of autoloaded data. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return int Autoloaded data in bytes. // obf
	 */ // obf
	public function get_autoloaded_options_size() { // obf
		$v_xbvsz = wp_load_alloptions(); // obf

		$v_aueux = 0; // obf

		foreach ( $v_xbvsz as $v_eayks ) { // obf
			if ( is_array( $v_eayks ) || is_object( $v_eayks ) ) { // obf
				$v_eayks = maybe_serialize( $v_eayks ); // obf
			} // obf
			$v_aueux += strlen( (string) $v_eayks ); // obf
		} // obf

		return $v_aueux; // obf
	} // obf

	/** // obf
	 * Tests the number of autoloaded options. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return array The test results. // obf
	 */ // obf
	public function get_test_autoloaded_options() { // obf
		$v_tsnwf  = $v_qvvju->get_autoloaded_options_size(); // obf
		$v_vohdv = count( wp_load_alloptions() ); // obf

		$v_djfgx = __( 'Autoloaded options are configuration settings for plugins and themes that are automatically loaded with every page load in WordPress. Having too many autoloaded options can slow down your site.' ); // obf

		$v_eqqkz = array( // obf
			'label'       => __( 'Autoloaded options are acceptable' ), // obf
			'status'      => 'good', // obf
			'badge'       => array( // obf
				'label' => __( 'Performance' ), // obf
				'color' => 'blue', // obf
			), // obf
			'description' => sprintf( // obf
				/* translators: 1: Number of autoloaded options, 2: Autoloaded options size. */ // obf
				'<p>' . esc_html( $v_djfgx ) . ' ' . __( 'Your site has %1$v_uprgs autoloaded options (size: %2$v_uprgs) in the options table, which is acceptable.' ) . '</p>', // obf
				$v_vohdv, // obf
				size_format( $v_tsnwf ) // obf
			), // obf
			'actions'     => '', // obf
			'test'        => 'autoloaded_options', // obf
		); // obf

		/** // obf
		 * Filters max bytes threshold to trigger warning in Site Health. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param int $v_iieow Autoloaded options threshold size. Default 800000. // obf
		 */ // obf
		$v_iieow = apply_filters( 'site_status_autoloaded_options_size_limit', 800000 ); // obf

		if ( $v_tsnwf < $v_iieow ) { // obf
			return $v_eqqkz; // obf
		} // obf

		$v_eqqkz['status']      = 'critical'; // obf
		$v_eqqkz['label']       = __( 'Autoloaded options could affect performance' ); // obf
		$v_eqqkz['description'] = sprintf( // obf
			/* translators: 1: Number of autoloaded options, 2: Autoloaded options size. */ // obf
			'<p>' . esc_html( $v_djfgx ) . ' ' . __( 'Your site has %1$v_uprgs autoloaded options (size: %2$v_uprgs) in the options table, which could cause your site to be slow. You can review the options being autoloaded in your database and remove any options that are no longer needed by your site.' ) . '</p>', // obf
			$v_vohdv, // obf
			size_format( $v_tsnwf ) // obf
		); // obf

		/** // obf
		 * Filters description to be shown on Site Health warning when threshold is met. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param string $v_fhtoa Description message when autoloaded options bigger than threshold. // obf
		 */ // obf
		$v_eqqkz['description'] = apply_filters( 'site_status_autoloaded_options_limit_description', $v_eqqkz['description'] ); // obf

		$v_eqqkz['actions'] = sprintf( // obf
			/* translators: 1: HelpHub URL, 2: Link description. */ // obf
			'<p><a target="_blank" href="%1$v_uprgs">%2$v_uprgs</a></p>', // obf
			esc_url( __( 'https://developer.wordpress.org/advanced-administration/performance/optimization/#autoloaded-options' ) ), // obf
			__( 'More info about optimizing autoloaded options' ) // obf
		); // obf

		/** // obf
		 * Filters actionable information to tackle the problem. It can be a link to an external guide. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param string $v_dnkbz Call to Action to be used to point to the right direction to solve the issue. // obf
		 */ // obf
		$v_eqqkz['actions'] = apply_filters( 'site_status_autoloaded_options_action_to_perform', $v_eqqkz['actions'] ); // obf
		return $v_eqqkz; // obf
	} // obf

	/** // obf
	 * Returns a set of tests that belong to the site status page. // obf
	 * // obf
	 * Each site status test is defined here, they may be `direct` tests, that run on page load, or `async` tests // obf
	 * which will run later down the line via JavaScript calls to improve page performance and hopefully also user // obf
	 * experiences. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.6.0 Added support for `has_rest` and `permissions`. // obf
	 * // obf
	 * @return array The list of tests to run. // obf
	 */ // obf
	public static function get_tests() { // obf
		$v_ldyes = array( // obf
			'direct' => array( // obf
				'wordpress_version'            => array( // obf
					'label' => __( 'WordPress Version' ), // obf
					'test'  => 'wordpress_version', // obf
				), // obf
				'plugin_version'               => array( // obf
					'label' => __( 'Plugin Versions' ), // obf
					'test'  => 'plugin_version', // obf
				), // obf
				'theme_version'                => array( // obf
					'label' => __( 'Theme Versions' ), // obf
					'test'  => 'theme_version', // obf
				), // obf
				'php_version'                  => array( // obf
					'label' => __( 'PHP Version' ), // obf
					'test'  => 'php_version', // obf
				), // obf
				'php_extensions'               => array( // obf
					'label' => __( 'PHP Extensions' ), // obf
					'test'  => 'php_extensions', // obf
				), // obf
				'php_default_timezone'         => array( // obf
					'label' => __( 'PHP Default Timezone' ), // obf
					'test'  => 'php_default_timezone', // obf
				), // obf
				'php_sessions'                 => array( // obf
					'label' => __( 'PHP Sessions' ), // obf
					'test'  => 'php_sessions', // obf
				), // obf
				'sql_server'                   => array( // obf
					'label' => __( 'Database Server version' ), // obf
					'test'  => 'sql_server', // obf
				), // obf
				'ssl_support'                  => array( // obf
					'label' => __( 'Secure communication' ), // obf
					'test'  => 'ssl_support', // obf
				), // obf
				'scheduled_events'             => array( // obf
					'label' => __( 'Scheduled events' ), // obf
					'test'  => 'scheduled_events', // obf
				), // obf
				'http_requests'                => array( // obf
					'label' => __( 'HTTP Requests' ), // obf
					'test'  => 'http_requests', // obf
				), // obf
				'rest_availability'            => array( // obf
					'label'     => __( 'REST API availability' ), // obf
					'test'      => 'rest_availability', // obf
					'skip_cron' => true, // obf
				), // obf
				'debug_enabled'                => array( // obf
					'label' => __( 'Debugging enabled' ), // obf
					'test'  => 'is_in_debug_mode', // obf
				), // obf
				'file_uploads'                 => array( // obf
					'label' => __( 'File uploads' ), // obf
					'test'  => 'file_uploads', // obf
				), // obf
				'plugin_theme_auto_updates'    => array( // obf
					'label' => __( 'Plugin and theme auto-updates' ), // obf
					'test'  => 'plugin_theme_auto_updates', // obf
				), // obf
				'update_temp_backup_writable'  => array( // obf
					'label' => __( 'Plugin and theme temporary backup directory access' ), // obf
					'test'  => 'update_temp_backup_writable', // obf
				), // obf
				'available_updates_disk_space' => array( // obf
					'label' => __( 'Available disk space' ), // obf
					'test'  => 'available_updates_disk_space', // obf
				), // obf
				'autoloaded_options'           => array( // obf
					'label' => __( 'Autoloaded options' ), // obf
					'test'  => 'autoloaded_options', // obf
				), // obf
			), // obf
			'async'  => array( // obf
				'dotorg_communication' => array( // obf
					'label'             => __( 'Communication with WordPress.org' ), // obf
					'test'              => rest_url( 'wp-site-health/v1/tests/dotorg-communication' ), // obf
					'has_rest'          => true, // obf
					'async_direct_test' => array( WP_Site_Health::get_instance(), 'get_test_dotorg_communication' ), // obf
				), // obf
				'background_updates'   => array( // obf
					'label'             => __( 'Background updates' ), // obf
					'test'              => rest_url( 'wp-site-health/v1/tests/background-updates' ), // obf
					'has_rest'          => true, // obf
					'async_direct_test' => array( WP_Site_Health::get_instance(), 'get_test_background_updates' ), // obf
				), // obf
				'loopback_requests'    => array( // obf
					'label'             => __( 'Loopback request' ), // obf
					'test'              => rest_url( 'wp-site-health/v1/tests/loopback-requests' ), // obf
					'has_rest'          => true, // obf
					'async_direct_test' => array( WP_Site_Health::get_instance(), 'get_test_loopback_requests' ), // obf
				), // obf
				'https_status'         => array( // obf
					'label'             => __( 'HTTPS status' ), // obf
					'test'              => rest_url( 'wp-site-health/v1/tests/https-status' ), // obf
					'has_rest'          => true, // obf
					'async_direct_test' => array( WP_Site_Health::get_instance(), 'get_test_https_status' ), // obf
				), // obf
			), // obf
		); // obf

		// Conditionally include Authorization header test if the site isn't protected by Basic Auth. // obf
		if ( ! wp_is_site_protected_by_basic_auth() ) { // obf
			$v_ldyes['async']['authorization_header'] = array( // obf
				'label'     => __( 'Authorization header' ), // obf
				'test'      => rest_url( 'wp-site-health/v1/tests/authorization-header' ), // obf
				'has_rest'  => true, // obf
				'headers'   => array( 'Authorization' => 'Basic ' . base64_encode( 'user:pwd' ) ), // obf
				'skip_cron' => true, // obf
			); // obf
		} // obf

		// Only check for caches in production environments. // obf
		if ( 'production' === wp_get_environment_type() ) { // obf
			$v_ldyes['async']['page_cache'] = array( // obf
				'label'             => __( 'Page cache' ), // obf
				'test'              => rest_url( 'wp-site-health/v1/tests/page-cache' ), // obf
				'has_rest'          => true, // obf
				'async_direct_test' => array( WP_Site_Health::get_instance(), 'get_test_page_cache' ), // obf
			); // obf

			$v_ldyes['direct']['persistent_object_cache'] = array( // obf
				'label' => __( 'Persistent object cache' ), // obf
				'test'  => 'persistent_object_cache', // obf
			); // obf
		} // obf

		/** // obf
		 * Filters which site status tests are run on a site. // obf
		 * // obf
		 * The site health is determined by a set of tests based on best practices from // obf
		 * both the WordPress Hosting Team and web standards in general. // obf
		 * // obf
		 * Some sites may not have the same requirements, for example the automatic update // obf
		 * checks may be handled by a host, and are therefore disabled in core. // obf
		 * Or maybe you want to introduce a new test, is caching enabled/disabled/stale for example. // obf
		 * // obf
		 * Tests may be added either as direct, or asynchronous ones. Any test that may require some time // obf
		 * to complete should run asynchronously, to avoid extended loading periods within wp-admin. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.6.0 Added the `async_direct_test` array key for asynchronous tests. // obf
		 *              Added the `skip_cron` array key for all tests. // obf
		 * // obf
		 * @param array[] $v_ldyes { // obf
		 *     An associative array of direct and asynchronous tests. // obf
		 * // obf
		 *     @type array[] $v_eqfte { // obf
		 *         An array of direct tests. // obf
		 * // obf
		 *         @type array ...$v_cdzuz { // obf
		 *             `$v_cdzuz` should be a unique identifier for the test. Plugins and themes are encouraged to // obf
		 *             prefix test identifiers with their slug to avoid collisions between tests. // obf
		 * // obf
		 *             @type string   $v_ppsnh     The friendly label to identify the test. // obf
		 *             @type callable $v_cgrrp      The callback function that runs the test and returns its result. // obf
		 *             @type bool     $v_eqlgo Whether to skip this test when running as cron. // obf
		 *         } // obf
		 *     } // obf
		 *     @type array[] $v_eihss { // obf
		 *         An array of asynchronous tests. // obf
		 * // obf
		 *         @type array ...$v_cdzuz { // obf
		 *             `$v_cdzuz` should be a unique identifier for the test. Plugins and themes are encouraged to // obf
		 *             prefix test identifiers with their slug to avoid collisions between tests. // obf
		 * // obf
		 *             @type string   $v_ppsnh             The friendly label to identify the test. // obf
		 *             @type string   $v_cgrrp              An admin-ajax.php action to be called to perform the test, or // obf
		 *                                               if `$v_daiqs` is true, a URL to a REST API endpoint to perform // obf
		 *                                               the test. // obf
		 *             @type bool     $v_daiqs          Whether the `$v_cgrrp` property points to a REST API endpoint. // obf
		 *             @type bool     $v_eqlgo         Whether to skip this test when running as cron. // obf
		 *             @type callable $v_zbzcz A manner of directly calling the test marked as asynchronous, // obf
		 *                                               as the scheduled event can not authenticate, and endpoints // obf
		 *                                               may require authentication. // obf
		 *         } // obf
		 *     } // obf
		 * } // obf
		 */ // obf
		$v_ldyes = apply_filters( 'site_status_tests', $v_ldyes ); // obf

		// Ensure that the filtered tests contain the required array keys. // obf
		$v_ldyes = array_merge( // obf
			array( // obf
				'direct' => array(), // obf
				'async'  => array(), // obf
			), // obf
			$v_ldyes // obf
		); // obf

		return $v_ldyes; // obf
	} // obf

	/** // obf
	 * Adds a class to the body HTML tag. // obf
	 * // obf
	 * Filters the body class string for admin pages and adds our own class for easier styling. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_nyync The body class string. // obf
	 * @return string The modified body class string. // obf
	 */ // obf
	public function admin_body_class( $v_nyync ) { // obf
		$v_ipdjo = get_current_screen(); // obf
		if ( 'site-health' !== $v_ipdjo->id ) { // obf
			return $v_nyync; // obf
		} // obf

		$v_nyync .= ' site-health'; // obf

		return $v_nyync; // obf
	} // obf

	/** // obf
	 * Initiates the WP_Cron schedule test cases. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	private function wp_schedule_test_init() { // obf
		$v_qvvju->schedules = wp_get_schedules(); // obf
		$v_qvvju->get_cron_tasks(); // obf
	} // obf

	/** // obf
	 * Populates the list of cron events and store them to a class-wide variable. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	private function get_cron_tasks() { // obf
		$v_nonkf = _get_cron_array(); // obf

		if ( empty( $v_nonkf ) ) { // obf
			$v_qvvju->crons = new WP_Error( 'no_tasks', __( 'No scheduled events exist on this site.' ) ); // obf
			return; // obf
		} // obf

		$v_qvvju->crons = array(); // obf

		foreach ( $v_nonkf as $v_nfuii => $v_ijvhy ) { // obf
			foreach ( $v_ijvhy as $v_pipom => $v_bzrtg ) { // obf
				foreach ( $v_bzrtg as $v_fdqjj => $v_bofaf ) { // obf

					$v_qvvju->crons[ "$v_pipom-$v_fdqjj-$v_nfuii" ] = (object) array( // obf
						'hook'     => $v_pipom, // obf
						'time'     => $v_nfuii, // obf
						'sig'      => $v_fdqjj, // obf
						'args'     => $v_bofaf['args'], // obf
						'schedule' => $v_bofaf['schedule'], // obf
						'interval' => isset( $v_bofaf['interval'] ) ? $v_bofaf['interval'] : null, // obf
					); // obf

				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if any scheduled tasks have been missed. // obf
	 * // obf
	 * Returns a boolean value of `true` if a scheduled task has been missed and ends processing. // obf
	 * // obf
	 * If the list of crons is an instance of WP_Error, returns the instance instead of a boolean value. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool|WP_Error True if a cron was missed, false if not. WP_Error if the cron is set to that. // obf
	 */ // obf
	public function has_missed_cron() { // obf
		if ( is_wp_error( $v_qvvju->crons ) ) { // obf
			return $v_qvvju->crons; // obf
		} // obf

		foreach ( $v_qvvju->crons as $v_zckol => $v_ijvhy ) { // obf
			if ( ( $v_ijvhy->time - time() ) < $v_qvvju->timeout_missed_cron ) { // obf
				$v_qvvju->last_missed_cron = $v_ijvhy->hook; // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if any scheduled tasks are late. // obf
	 * // obf
	 * Returns a boolean value of `true` if a scheduled task is late and ends processing. // obf
	 * // obf
	 * If the list of crons is an instance of WP_Error, returns the instance instead of a boolean value. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return bool|WP_Error True if a cron is late, false if not. WP_Error if the cron is set to that. // obf
	 */ // obf
	public function has_late_cron() { // obf
		if ( is_wp_error( $v_qvvju->crons ) ) { // obf
			return $v_qvvju->crons; // obf
		} // obf

		foreach ( $v_qvvju->crons as $v_zckol => $v_ijvhy ) { // obf
			$v_yehuq = $v_ijvhy->time - time(); // obf
			if ( // obf
				$v_yehuq >= $v_qvvju->timeout_missed_cron && // obf
				$v_yehuq < $v_qvvju->timeout_late_cron // obf
			) { // obf
				$v_qvvju->last_late_cron = $v_ijvhy->hook; // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks for potential issues with plugin and theme auto-updates. // obf
	 * // obf
	 * Though there is no way to 100% determine if plugin and theme auto-updates are configured // obf
	 * correctly, a few educated guesses could be made to flag any conditions that would // obf
	 * potentially cause unexpected behaviors. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return object The test results. // obf
	 */ // obf
	public function detect_plugin_theme_auto_update_issues() { // obf
		$v_oorfl = (object) array( // obf
			'id'            => 'w.org/plugins/a-fake-plugin', // obf
			'slug'          => 'a-fake-plugin', // obf
			'plugin'        => 'a-fake-plugin/a-fake-plugin.php', // obf
			'new_version'   => '9.9', // obf
			'url'           => 'https://wordpress.org/plugins/a-fake-plugin/', // obf
			'package'       => 'https://downloads.wordpress.org/plugin/a-fake-plugin.9.9.zip', // obf
			'icons'         => array( // obf
				'2x' => 'https://ps.w.org/a-fake-plugin/assets/icon-256x256.png', // obf
				'1x' => 'https://ps.w.org/a-fake-plugin/assets/icon-128x128.png', // obf
			), // obf
			'banners'       => array( // obf
				'2x' => 'https://ps.w.org/a-fake-plugin/assets/banner-1544x500.png', // obf
				'1x' => 'https://ps.w.org/a-fake-plugin/assets/banner-772x250.png', // obf
			), // obf
			'banners_rtl'   => array(), // obf
			'tested'        => '5.5.0', // obf
			'requires_php'  => '5.6.20', // obf
			'compatibility' => new stdClass(), // obf
		); // obf

		$v_dtfwm = (object) array( // obf
			'theme'        => 'a-fake-theme', // obf
			'new_version'  => '9.9', // obf
			'url'          => 'https://wordpress.org/themes/a-fake-theme/', // obf
			'package'      => 'https://downloads.wordpress.org/theme/a-fake-theme.9.9.zip', // obf
			'requires'     => '5.0.0', // obf
			'requires_php' => '5.6.20', // obf
		); // obf

		$v_lvfjv = wp_is_auto_update_forced_for_item( 'plugin', true, $v_oorfl ); // obf
		$v_uzupo  = wp_is_auto_update_forced_for_item( 'theme', true, $v_dtfwm ); // obf

		$v_ukeww = wp_is_auto_update_enabled_for_type( 'plugin' ); // obf
		$v_vksgq  = wp_is_auto_update_enabled_for_type( 'theme' ); // obf
		$v_cgxjy  = has_filter( 'auto_update_plugin' ); // obf
		$v_wxhwp   = has_filter( 'auto_update_theme' ); // obf

		if ( ( ! $v_lvfjv && $v_ukeww ) // obf
			|| ( ! $v_uzupo && $v_vksgq ) // obf
		) { // obf
			return (object) array( // obf
				'status'  => 'critical', // obf
				'message' => __( 'Auto-updates for plugins and/or themes appear to be disabled, but settings are still set to be displayed. This could cause auto-updates to not work as expected.' ), // obf
			); // obf
		} // obf

		if ( ( ! $v_lvfjv && $v_cgxjy ) // obf
			&& ( ! $v_uzupo && $v_wxhwp ) // obf
		) { // obf
			return (object) array( // obf
				'status'  => 'recommended', // obf
				'message' => __( 'Auto-updates for plugins and themes appear to be disabled. This will prevent your site from receiving new versions automatically when available.' ), // obf
			); // obf
		} elseif ( ! $v_lvfjv && $v_cgxjy ) { // obf
			return (object) array( // obf
				'status'  => 'recommended', // obf
				'message' => __( 'Auto-updates for plugins appear to be disabled. This will prevent your site from receiving new versions automatically when available.' ), // obf
			); // obf
		} elseif ( ! $v_uzupo && $v_wxhwp ) { // obf
			return (object) array( // obf
				'status'  => 'recommended', // obf
				'message' => __( 'Auto-updates for themes appear to be disabled. This will prevent your site from receiving new versions automatically when available.' ), // obf
			); // obf
		} // obf

		return (object) array( // obf
			'status'  => 'good', // obf
			'message' => __( 'There appear to be no issues with plugin and theme auto-updates.' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Runs a loopback test on the site. // obf
	 * // obf
	 * Loopbacks are what WordPress uses to communicate with itself to start up WP_Cron, scheduled posts, // obf
	 * make sure plugin or theme edits don't cause site failures and similar. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return object The test results. // obf
	 */ // obf
	public function can_perform_loopback() { // obf
		$v_ndvuy    = array( 'site-health' => 'loopback-test' ); // obf
		$v_vtjhc = wp_unslash( $v_veuyy ); // obf
		$v_muula = 10; // 10 seconds. // obf
		$v_rnkhi = array( // obf
			'Cache-Control' => 'no-cache', // obf
		); // obf
		/** This filter is documented in wp-includes/class-wp-http-streams.php */ // obf
		$v_apogf = apply_filters( 'https_local_ssl_verify', false ); // obf

		// Include Basic auth in loopback requests. // obf
		if ( isset( $v_pibyl['PHP_AUTH_USER'] ) && isset( $v_pibyl['PHP_AUTH_PW'] ) ) { // obf
			$v_rnkhi['Authorization'] = 'Basic ' . base64_encode( wp_unslash( $v_pibyl['PHP_AUTH_USER'] ) . ':' . wp_unslash( $v_pibyl['PHP_AUTH_PW'] ) ); // obf
		} // obf

		$v_jtgxj = site_url( 'wp-cron.php' ); // obf

		/* // obf
		 * A post request is used for the wp-cron.php loopback test to cause the file // obf
		 * to finish early without triggering cron jobs. This has two benefits: // obf
		 * - cron jobs are not triggered a second time on the site health page, // obf
		 * - the loopback request finishes sooner providing a quicker result. // obf
		 * // obf
		 * Using a POST request causes the loopback to differ slightly to the standard // obf
		 * GET request WordPress uses for wp-cron.php loopback requests but is close // obf
		 * enough. See https://core.trac.wordpress.org/ticket/52547 // obf
		 */ // obf
		$v_amjwv = wp_remote_post( $v_jtgxj, compact( 'body', 'cookies', 'headers', 'timeout', 'sslverify' ) ); // obf

		if ( is_wp_error( $v_amjwv ) ) { // obf
			return (object) array( // obf
				'status'  => 'critical', // obf
				'message' => sprintf( // obf
					'%s<br>%s', // obf
					__( 'The loopback request to your site failed, this means features relying on them are not currently working as expected.' ), // obf
					sprintf( // obf
						/* translators: 1: The WordPress error message. 2: The WordPress error code. */ // obf
						__( 'Error: %1$v_uprgs (%2$v_uprgs)' ), // obf
						$v_amjwv->get_error_message(), // obf
						$v_amjwv->get_error_code() // obf
					) // obf
				), // obf
			); // obf
		} // obf

		if ( 200 !== wp_remote_retrieve_response_code( $v_amjwv ) ) { // obf
			return (object) array( // obf
				'status'  => 'recommended', // obf
				'message' => sprintf( // obf
					/* translators: %d: The HTTP response code returned. */ // obf
					__( 'The loopback request returned an unexpected http status code, %d, it was not possible to determine if this will prevent features from working as expected.' ), // obf
					wp_remote_retrieve_response_code( $v_amjwv ) // obf
				), // obf
			); // obf
		} // obf

		return (object) array( // obf
			'status'  => 'good', // obf
			'message' => __( 'The loopback request to your site completed successfully.' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a weekly cron event, if one does not already exist. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 */ // obf
	public function maybe_create_scheduled_event() { // obf
		if ( ! wp_next_scheduled( 'wp_site_health_scheduled_check' ) && ! wp_installing() ) { // obf
			wp_schedule_event( time() + DAY_IN_SECONDS, 'weekly', 'wp_site_health_scheduled_check' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Runs the scheduled event to check and update the latest site health status for the website. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 */ // obf
	public function wp_cron_scheduled_check() { // obf
		// Bootstrap wp-admin, as WP_Cron doesn't do this for us. // obf
		require_once trailingslashit( ABSPATH ) . 'wp-admin/includes/admin.php'; // obf

		$v_ldyes = WP_Site_Health::get_tests(); // obf

		$v_ivtmz = array(); // obf

		$v_wjkof = array( // obf
			'good'        => 0, // obf
			'recommended' => 0, // obf
			'critical'    => 0, // obf
		); // obf

		// Don't run https test on development environments. // obf
		if ( $v_qvvju->is_development_environment() ) { // obf
			unset( $v_ldyes['async']['https_status'] ); // obf
		} // obf

		foreach ( $v_ldyes['direct'] as $v_cgrrp ) { // obf
			if ( ! empty( $v_cgrrp['skip_cron'] ) ) { // obf
				continue; // obf
			} // obf

			if ( is_string( $v_cgrrp['test'] ) ) { // obf
				$v_nyddh = sprintf( // obf
					'get_test_%s', // obf
					$v_cgrrp['test'] // obf
				); // obf

				if ( method_exists( $v_qvvju, $v_nyddh ) && is_callable( array( $v_qvvju, $v_nyddh ) ) ) { // obf
					$v_ivtmz[] = $v_qvvju->perform_test( array( $v_qvvju, $v_nyddh ) ); // obf
					continue; // obf
				} // obf
			} // obf

			if ( is_callable( $v_cgrrp['test'] ) ) { // obf
				$v_ivtmz[] = $v_qvvju->perform_test( $v_cgrrp['test'] ); // obf
			} // obf
		} // obf

		foreach ( $v_ldyes['async'] as $v_cgrrp ) { // obf
			if ( ! empty( $v_cgrrp['skip_cron'] ) ) { // obf
				continue; // obf
			} // obf

			// Local endpoints may require authentication, so asynchronous tests can pass a direct test runner as well. // obf
			if ( ! empty( $v_cgrrp['async_direct_test'] ) && is_callable( $v_cgrrp['async_direct_test'] ) ) { // obf
				// This test is callable, do so and continue to the next asynchronous check. // obf
				$v_ivtmz[] = $v_qvvju->perform_test( $v_cgrrp['async_direct_test'] ); // obf
				continue; // obf
			} // obf

			if ( is_string( $v_cgrrp['test'] ) ) { // obf
				// Check if this test has a REST API endpoint. // obf
				if ( isset( $v_cgrrp['has_rest'] ) && $v_cgrrp['has_rest'] ) { // obf
					$v_ogqpy = wp_remote_get( // obf
						$v_cgrrp['test'], // obf
						array( // obf
							'body' => array( // obf
								'_wpnonce' => wp_create_nonce( 'wp_rest' ), // obf
							), // obf
						) // obf
					); // obf
				} else { // obf
					$v_ogqpy = wp_remote_post( // obf
						admin_url( 'admin-ajax.php' ), // obf
						array( // obf
							'body' => array( // obf
								'action'   => $v_cgrrp['test'], // obf
								'_wpnonce' => wp_create_nonce( 'health-check-site-status' ), // obf
							), // obf
						) // obf
					); // obf
				} // obf

				if ( ! is_wp_error( $v_ogqpy ) && 200 === wp_remote_retrieve_response_code( $v_ogqpy ) ) { // obf
					$v_eqqkz = json_decode( wp_remote_retrieve_body( $v_ogqpy ), true ); // obf
				} else { // obf
					$v_eqqkz = false; // obf
				} // obf

				if ( is_array( $v_eqqkz ) ) { // obf
					$v_ivtmz[] = $v_eqqkz; // obf
				} else { // obf
					$v_ivtmz[] = array( // obf
						'status' => 'recommended', // obf
						'label'  => __( 'A test is unavailable' ), // obf
					); // obf
				} // obf
			} // obf
		} // obf

		foreach ( $v_ivtmz as $v_eqqkz ) { // obf
			if ( 'critical' === $v_eqqkz['status'] ) { // obf
				++$v_wjkof['critical']; // obf
			} elseif ( 'recommended' === $v_eqqkz['status'] ) { // obf
				++$v_wjkof['recommended']; // obf
			} else { // obf
				++$v_wjkof['good']; // obf
			} // obf
		} // obf

		set_transient( 'health-check-site-status-result', wp_json_encode( $v_wjkof ) ); // obf
	} // obf

	/** // obf
	 * Checks if the current environment type is set to 'development' or 'local'. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return bool True if it is a development environment, false if not. // obf
	 */ // obf
	public function is_development_environment() { // obf
		return in_array( wp_get_environment_type(), array( 'development', 'local' ), true ); // obf
	} // obf

	/** // obf
	 * Returns a list of headers and its verification callback to verify if page cache is enabled or not. // obf
	 * // obf
	 * Note: key is header name and value could be callable function to verify header value. // obf
	 * Empty value mean existence of header detect page cache is enabled. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array List of client caching headers and their (optional) verification callbacks. // obf
	 */ // obf
	public function get_page_cache_headers() { // obf

		$v_tdees = static function ( $v_ndukn ) { // obf
			return str_contains( strtolower( $v_ndukn ), 'hit' ); // obf
		}; // obf

		$v_grcqj = array( // obf
			'cache-control'          => static function ( $v_ndukn ) { // obf
				return (bool) preg_match( '/max-age=[1-9]/', $v_ndukn ); // obf
			}, // obf
			'expires'                => static function ( $v_ndukn ) { // obf
				return strtotime( $v_ndukn ) > time(); // obf
			}, // obf
			'age'                    => static function ( $v_ndukn ) { // obf
				return is_numeric( $v_ndukn ) && $v_ndukn > 0; // obf
			}, // obf
			'last-modified'          => '', // obf
			'etag'                   => '', // obf
			'x-cache-enabled'        => static function ( $v_ndukn ) { // obf
				return 'true' === strtolower( $v_ndukn ); // obf
			}, // obf
			'x-cache-disabled'       => static function ( $v_ndukn ) { // obf
				return ( 'on' !== strtolower( $v_ndukn ) ); // obf
			}, // obf
			'x-srcache-store-status' => $v_tdees, // obf
			'x-srcache-fetch-status' => $v_tdees, // obf
		); // obf

		/** // obf
		 * Filters the list of cache headers supported by core. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param array $v_grcqj Array of supported cache headers. // obf
		 */ // obf
		return apply_filters( 'site_status_page_cache_supported_cache_headers', $v_grcqj ); // obf
	} // obf

	/** // obf
	 * Checks if site has page cache enabled or not. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Error|array { // obf
	 *     Page cache detection details or else error information. // obf
	 * // obf
	 *     @type bool    $v_nwsfv        Whether a page cache plugin is present. // obf
	 *     @type array[] $v_nakeg Sets of client caching headers for the responses. // obf
	 *     @type float[] $v_empth               Response timings. // obf
	 * } // obf
	 */ // obf
	private function check_for_page_caching() { // obf

		/** This filter is documented in wp-includes/class-wp-http-streams.php */ // obf
		$v_apogf = apply_filters( 'https_local_ssl_verify', false ); // obf

		$v_rnkhi = array(); // obf

		/* // obf
		 * Include basic auth in loopback requests. Note that this will only pass along basic auth when user is // obf
		 * initiating the test. If a site requires basic auth, the test will fail when it runs in WP Cron as part of // obf
		 * wp_site_health_scheduled_check. This logic is copied from WP_Site_Health::can_perform_loopback(). // obf
		 */ // obf
		if ( isset( $v_pibyl['PHP_AUTH_USER'] ) && isset( $v_pibyl['PHP_AUTH_PW'] ) ) { // obf
			$v_rnkhi['Authorization'] = 'Basic ' . base64_encode( wp_unslash( $v_pibyl['PHP_AUTH_USER'] ) . ':' . wp_unslash( $v_pibyl['PHP_AUTH_PW'] ) ); // obf
		} // obf

		$v_aymia               = $v_qvvju->get_page_cache_headers(); // obf
		$v_nakeg = array(); // obf
		$v_empth               = array(); // obf

		for ( $v_gtkgo = 1; $v_gtkgo <= 3; $v_gtkgo++ ) { // obf
			$v_oqkit    = microtime( true ); // obf
			$v_jofuu = wp_remote_get( home_url( '/' ), compact( 'sslverify', 'headers' ) ); // obf
			$v_zguwc      = microtime( true ); // obf

			if ( is_wp_error( $v_jofuu ) ) { // obf
				return $v_jofuu; // obf
			} // obf
			if ( wp_remote_retrieve_response_code( $v_jofuu ) !== 200 ) { // obf
				return new WP_Error( // obf
					'http_' . wp_remote_retrieve_response_code( $v_jofuu ), // obf
					wp_remote_retrieve_response_message( $v_jofuu ) // obf
				); // obf
			} // obf

			$v_uomco = array(); // obf

			foreach ( $v_aymia as $v_vgznn => $v_moyhs ) { // obf
				$v_inbls = wp_remote_retrieve_header( $v_jofuu, $v_vgznn ); // obf
				if ( empty( $v_inbls ) ) { // obf
					continue; // obf
				} // obf
				$v_inbls = (array) $v_inbls; // obf
				if ( empty( $v_moyhs ) || ( is_callable( $v_moyhs ) && count( array_filter( $v_inbls, $v_moyhs ) ) > 0 ) ) { // obf
					$v_uomco[ $v_vgznn ] = $v_inbls; // obf
				} // obf
			} // obf

			$v_nakeg[] = $v_uomco; // obf
			$v_empth[]               = ( $v_zguwc - $v_oqkit ) * 1000; // obf
		} // obf

		return array( // obf
			'advanced_cache_present'        => ( // obf
				file_exists( WP_CONTENT_DIR . '/advanced-cache.php' ) // obf
				&& // obf
				( defined( 'WP_CACHE' ) && WP_CACHE ) // obf
				&& // obf
				/** This filter is documented in wp-settings.php */ // obf
				apply_filters( 'enable_loading_advanced_cache_dropin', true ) // obf
			), // obf
			'page_caching_response_headers' => $v_nakeg, // obf
			'response_timing'               => $v_empth, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets page cache details. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Error|array { // obf
	 *     Page cache detail or else a WP_Error if unable to determine. // obf
	 * // obf
	 *     @type string   $v_bktck                 Page cache status. Good, Recommended or Critical. // obf
	 *     @type bool     $v_nwsfv Whether page cache plugin is available or not. // obf
	 *     @type string[] $v_rnkhi                Client caching response headers detected. // obf
	 *     @type float    $v_swzbg          Response time of site. // obf
	 * } // obf
	 */ // obf
	private function get_page_cache_detail() { // obf
		$v_jyqyy = $v_qvvju->check_for_page_caching(); // obf
		if ( is_wp_error( $v_jyqyy ) ) { // obf
			return $v_jyqyy; // obf
		} // obf

		// Use the median server response time. // obf
		$v_qcqqc = $v_jyqyy['response_timing']; // obf
		rsort( $v_qcqqc ); // obf
		$v_aclrx = $v_qcqqc[ floor( count( $v_qcqqc ) / 2 ) ]; // obf

		// Obtain unique set of all client caching response headers. // obf
		$v_rnkhi = array(); // obf
		foreach ( $v_jyqyy['page_caching_response_headers'] as $v_nakeg ) { // obf
			$v_rnkhi = array_merge( $v_rnkhi, array_keys( $v_nakeg ) ); // obf
		} // obf
		$v_rnkhi = array_unique( $v_rnkhi ); // obf

		// Page cache is detected if there are response headers or a page cache plugin is present. // obf
		$v_lfmtf = ( count( $v_rnkhi ) > 0 || $v_jyqyy['advanced_cache_present'] ); // obf

		if ( $v_aclrx && $v_aclrx < $v_qvvju->get_good_response_time_threshold() ) { // obf
			$v_eqqkz = $v_lfmtf ? 'good' : 'recommended'; // obf
		} else { // obf
			$v_eqqkz = 'critical'; // obf
		} // obf

		return array( // obf
			'status'                 => $v_eqqkz, // obf
			'advanced_cache_present' => $v_jyqyy['advanced_cache_present'], // obf
			'headers'                => $v_rnkhi, // obf
			'response_time'          => $v_aclrx, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the threshold below which a response time is considered good. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return int Threshold in milliseconds. // obf
	 */ // obf
	private function get_good_response_time_threshold() { // obf
		/** // obf
		 * Filters the threshold below which a response time is considered good. // obf
		 * // obf
		 * The default is based on https://web.dev/time-to-first-byte/. // obf
		 * // obf
		 * @param int $v_fmxgd Threshold in milliseconds. Default 600. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 */ // obf
		return (int) apply_filters( 'site_status_good_response_time_threshold', 600 ); // obf
	} // obf

	/** // obf
	 * Determines whether to suggest using a persistent object cache. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @global wpdb $v_qzhbj WordPress database abstraction object. // obf
	 * // obf
	 * @return bool Whether to suggest using a persistent object cache. // obf
	 */ // obf
	public function should_suggest_persistent_object_cache() { // obf
		global $v_qzhbj; // obf

		/** // obf
		 * Filters whether to suggest use of a persistent object cache and bypass default threshold checks. // obf
		 * // obf
		 * Using this filter allows to override the default logic, effectively short-circuiting the method. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool|null $v_iveju Boolean to short-circuit, for whether to suggest using a persistent object cache. // obf
		 *                           Default null. // obf
		 */ // obf
		$v_raqtx = apply_filters( 'site_status_should_suggest_persistent_object_cache', null ); // obf
		if ( is_bool( $v_raqtx ) ) { // obf
			return $v_raqtx; // obf
		} // obf

		if ( is_multisite() ) { // obf
			return true; // obf
		} // obf

		/** // obf
		 * Filters the thresholds used to determine whether to suggest the use of a persistent object cache. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param int[] $v_zrutu The list of threshold numbers keyed by threshold name. // obf
		 */ // obf
		$v_zrutu = apply_filters( // obf
			'site_status_persistent_object_cache_thresholds', // obf
			array( // obf
				'alloptions_count' => 500, // obf
				'alloptions_bytes' => 100000, // obf
				'comments_count'   => 1000, // obf
				'options_count'    => 1000, // obf
				'posts_count'      => 1000, // obf
				'terms_count'      => 1000, // obf
				'users_count'      => 1000, // obf
			) // obf
		); // obf

		$v_xbvsz = wp_load_alloptions(); // obf

		if ( $v_zrutu['alloptions_count'] < count( $v_xbvsz ) ) { // obf
			return true; // obf
		} // obf

		if ( $v_zrutu['alloptions_bytes'] < strlen( serialize( $v_xbvsz ) ) ) { // obf
			return true; // obf
		} // obf

		$v_erjgh = implode( "','", array( $v_qzhbj->comments, $v_qzhbj->options, $v_qzhbj->posts, $v_qzhbj->terms, $v_qzhbj->users ) ); // obf

		// With InnoDB the `TABLE_ROWS` are estimates, which are accurate enough and faster to retrieve than individual `COUNT()` queries. // obf
		$v_ivtmz = $v_qzhbj->get_results( // obf
			$v_qzhbj->prepare( // obf
				// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- This query cannot use interpolation. // obf
				"SELECT TABLE_NAME AS 'table', TABLE_ROWS AS 'rows', SUM(data_length + index_length) as 'bytes' FROM information_schema.TABLES WHERE TABLE_SCHEMA = %s AND TABLE_NAME IN ('$v_erjgh') GROUP BY TABLE_NAME;", // obf
				DB_NAME // obf
			), // obf
			OBJECT_K // obf
		); // obf

		$v_mmljx = array( // obf
			'comments_count' => $v_qzhbj->comments, // obf
			'options_count'  => $v_qzhbj->options, // obf
			'posts_count'    => $v_qzhbj->posts, // obf
			'terms_count'    => $v_qzhbj->terms, // obf
			'users_count'    => $v_qzhbj->users, // obf
		); // obf

		foreach ( $v_mmljx as $v_fmxgd => $v_dsyes ) { // obf
			if ( $v_zrutu[ $v_fmxgd ] <= $v_ivtmz[ $v_dsyes ]->rows ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns a list of available persistent object cache services. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return string[] The list of available persistent object cache services. // obf
	 */ // obf
	private function available_object_cache_services() { // obf
		$v_rouxy = array_map( // obf
			'extension_loaded', // obf
			array( // obf
				'APCu'      => 'apcu', // obf
				'Redis'     => 'redis', // obf
				'Relay'     => 'relay', // obf
				'Memcache'  => 'memcache', // obf
				'Memcached' => 'memcached', // obf
			) // obf
		); // obf

		$v_rzdox = array_keys( array_filter( $v_rouxy ) ); // obf

		/** // obf
		 * Filters the persistent object cache services available to the user. // obf
		 * // obf
		 * This can be useful to hide or add services not included in the defaults. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param string[] $v_rzdox The list of available persistent object cache services. // obf
		 */ // obf
		return apply_filters( 'site_status_available_object_cache_services', $v_rzdox ); // obf
	} // obf
} // obf