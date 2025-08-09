

<?php // obf
/** // obf
 * WordPress Plugin Administration API: WP_Plugin_Dependencies class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Core class for installing plugin dependencies. // obf
 * // obf
 * It is designed to add plugin dependencies as designated in the // obf
 * `Requires Plugins` header to a new view in the plugins install page. // obf
 */ // obf
class WP_Plugin_Dependencies { // obf

	/** // obf
	 * Holds 'get_plugins()'. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_zdyfg; // obf

	/** // obf
	 * Holds plugin directory names to compare with cache. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_swfwa; // obf

	/** // obf
	 * Holds sanitized plugin dependency slugs. // obf
	 * // obf
	 * Keyed on the dependent plugin's filepath, // obf
	 * relative to the plugins directory. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_ixqcz; // obf

	/** // obf
	 * Holds an array of sanitized plugin dependency slugs. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_jmrde; // obf

	/** // obf
	 * Holds an array of dependent plugin slugs. // obf
	 * // obf
	 * Keyed on the dependent plugin's filepath, // obf
	 * relative to the plugins directory. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_qrefu; // obf

	/** // obf
	 * Holds 'plugins_api()' data for plugin dependencies. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_izmpm; // obf

	/** // obf
	 * Holds plugin dependency filepaths, relative to the plugins directory. // obf
	 * // obf
	 * Keyed on the dependency's slug. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected static $v_bknyg; // obf

	/** // obf
	 * An array of circular dependency pairings. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var array[] // obf
	 */ // obf
	protected static $v_mekry; // obf

	/** // obf
	 * An array of circular dependency slugs. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected static $v_fqrho; // obf

	/** // obf
	 * Whether Plugin Dependencies have been initialized. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	protected static $v_mtugf = false; // obf

	/** // obf
	 * Initializes by fetching plugin header and plugin API data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public static function initialize() { // obf
		if ( false === self::$v_mtugf ) { // obf
			self::read_dependencies_from_plugin_headers(); // obf
			self::get_dependency_api_data(); // obf
			self::$v_mtugf = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the plugin has plugins that depend on it. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return bool Whether the plugin has plugins that depend on it. // obf
	 */ // obf
	public static function has_dependents( $v_uxtpa ) { // obf
		return in_array( self::convert_to_slug( $v_uxtpa ), (array) self::$v_jmrde, true ); // obf
	} // obf

	/** // obf
	 * Determines whether the plugin has plugin dependencies. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return bool Whether a plugin has plugin dependencies. // obf
	 */ // obf
	public static function has_dependencies( $v_uxtpa ) { // obf
		return isset( self::$v_ixqcz[ $v_uxtpa ] ); // obf
	} // obf

	/** // obf
	 * Determines whether the plugin has active dependents. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return bool Whether the plugin has active dependents. // obf
	 */ // obf
	public static function has_active_dependents( $v_uxtpa ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_cjtti = self::get_dependents( self::convert_to_slug( $v_uxtpa ) ); // obf
		foreach ( $v_cjtti as $v_kclgq ) { // obf
			if ( is_plugin_active( $v_kclgq ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Gets filepaths of plugins that require the dependency. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_iydxk The dependency's slug. // obf
	 * @return array An array of dependent plugin filepaths, relative to the plugins directory. // obf
	 */ // obf
	public static function get_dependents( $v_iydxk ) { // obf
		$v_cjtti = array(); // obf

		foreach ( (array) self::$v_ixqcz as $v_kclgq => $v_ixqcz ) { // obf
			if ( in_array( $v_iydxk, $v_ixqcz, true ) ) { // obf
				$v_cjtti[] = $v_kclgq; // obf
			} // obf
		} // obf

		return $v_cjtti; // obf
	} // obf

	/** // obf
	 * Gets the slugs of plugins that the dependent requires. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The dependent plugin's filepath, relative to the plugins directory. // obf
	 * @return array An array of dependency plugin slugs. // obf
	 */ // obf
	public static function get_dependencies( $v_uxtpa ) { // obf
		if ( isset( self::$v_ixqcz[ $v_uxtpa ] ) ) { // obf
			return self::$v_ixqcz[ $v_uxtpa ]; // obf
		} // obf

		return array(); // obf
	} // obf

	/** // obf
	 * Gets a dependent plugin's filepath. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_iydxk  The dependent plugin's slug. // obf
	 * @return string|false The dependent plugin's filepath, relative to the plugins directory, // obf
	 *                      or false if the plugin has no dependencies. // obf
	 */ // obf
	public static function get_dependent_filepath( $v_iydxk ) { // obf
		$v_lpwzq = array_search( $v_iydxk, self::$v_qrefu, true ); // obf

		return $v_lpwzq ? $v_lpwzq : false; // obf
	} // obf

	/** // obf
	 * Determines whether the plugin has unmet dependencies. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return bool Whether the plugin has unmet dependencies. // obf
	 */ // obf
	public static function has_unmet_dependencies( $v_uxtpa ) { // obf
		if ( ! isset( self::$v_ixqcz[ $v_uxtpa ] ) ) { // obf
			return false; // obf
		} // obf

		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		foreach ( self::$v_ixqcz[ $v_uxtpa ] as $v_spcni ) { // obf
			$v_wisyo = self::get_dependency_filepath( $v_spcni ); // obf

			if ( false === $v_wisyo || is_plugin_inactive( $v_wisyo ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the plugin has a circular dependency. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return bool Whether the plugin has a circular dependency. // obf
	 */ // obf
	public static function has_circular_dependency( $v_uxtpa ) { // obf
		if ( ! is_array( self::$v_fqrho ) ) { // obf
			self::get_circular_dependencies(); // obf
		} // obf

		if ( ! empty( self::$v_fqrho ) ) { // obf
			$v_iydxk = self::convert_to_slug( $v_uxtpa ); // obf

			if ( in_array( $v_iydxk, self::$v_fqrho, true ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Gets the names of plugins that require the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return array An array of dependent names. // obf
	 */ // obf
	public static function get_dependent_names( $v_uxtpa ) { // obf
		$v_nyhhh = array(); // obf
		$v_zdyfg         = self::get_plugins(); // obf
		$v_iydxk            = self::convert_to_slug( $v_uxtpa ); // obf

		foreach ( self::get_dependents( $v_iydxk ) as $v_kclgq ) { // obf
			$v_nyhhh[ $v_kclgq ] = $v_zdyfg[ $v_kclgq ]['Name']; // obf
		} // obf
		sort( $v_nyhhh ); // obf

		return $v_nyhhh; // obf
	} // obf

	/** // obf
	 * Gets the names of plugins required by the plugin. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The dependent plugin's filepath, relative to the plugins directory. // obf
	 * @return array An array of dependency names. // obf
	 */ // obf
	public static function get_dependency_names( $v_uxtpa ) { // obf
		$v_izmpm = self::get_dependency_api_data(); // obf
		$v_ixqcz        = self::get_dependencies( $v_uxtpa ); // obf
		$v_zdyfg             = self::get_plugins(); // obf

		$v_llfrj = array(); // obf
		foreach ( $v_ixqcz as $v_spcni ) { // obf
			// Use the name if it's available, otherwise fall back to the slug. // obf
			if ( isset( $v_izmpm[ $v_spcni ]['name'] ) ) { // obf
				$v_wbilw = $v_izmpm[ $v_spcni ]['name']; // obf
			} else { // obf
				$v_wisyo = self::get_dependency_filepath( $v_spcni ); // obf
				if ( false !== $v_wisyo ) { // obf
					$v_wbilw = $v_zdyfg[ $v_wisyo ]['Name']; // obf
				} else { // obf
					$v_wbilw = $v_spcni; // obf
				} // obf
			} // obf

			$v_llfrj[ $v_spcni ] = $v_wbilw; // obf
		} // obf

		return $v_llfrj; // obf
	} // obf

	/** // obf
	 * Gets the filepath for a dependency, relative to the plugin's directory. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_iydxk The dependency's slug. // obf
	 * @return string|false If installed, the dependency's filepath relative to the plugins directory, otherwise false. // obf
	 */ // obf
	public static function get_dependency_filepath( $v_iydxk ) { // obf
		$v_bknyg = self::get_dependency_filepaths(); // obf

		if ( ! isset( $v_bknyg[ $v_iydxk ] ) ) { // obf
			return false; // obf
		} // obf

		return $v_bknyg[ $v_iydxk ]; // obf
	} // obf

	/** // obf
	 * Returns API data for the dependency. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_iydxk The dependency's slug. // obf
	 * @return array|false The dependency's API data on success, otherwise false. // obf
	 */ // obf
	public static function get_dependency_data( $v_iydxk ) { // obf
		$v_izmpm = self::get_dependency_api_data(); // obf

		if ( isset( $v_izmpm[ $v_iydxk ] ) ) { // obf
			return $v_izmpm[ $v_iydxk ]; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Displays an admin notice if dependencies are not installed. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public static function display_admin_notice_for_unmet_dependencies() { // obf
		if ( in_array( false, self::get_dependency_filepaths(), true ) ) { // obf
			$v_kpgip = __( 'Some required plugins are missing or inactive.' ); // obf

			if ( is_multisite() ) { // obf
				if ( current_user_can( 'manage_network_plugins' ) ) { // obf
					$v_kpgip .= ' ' . sprintf( // obf
						/* translators: %s: Link to the network plugins page. */ // obf
						__( '<a href="%s">Manage plugins</a>.' ), // obf
						esc_url( network_admin_url( 'plugins.php' ) ) // obf
					); // obf
				} else { // obf
					$v_kpgip .= ' ' . __( 'Please contact your network administrator.' ); // obf
				} // obf
			} elseif ( 'plugins' !== get_current_screen()->base ) { // obf
				$v_kpgip .= ' ' . sprintf( // obf
					/* translators: %s: Link to the plugins page. */ // obf
					__( '<a href="%s">Manage plugins</a>.' ), // obf
					esc_url( admin_url( 'plugins.php' ) ) // obf
				); // obf
			} // obf

			wp_admin_notice( // obf
				$v_kpgip, // obf
				array( // obf
					'type' => 'warning', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays an admin notice if circular dependencies are installed. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public static function display_admin_notice_for_circular_dependencies() { // obf
		$v_rzlap = self::get_circular_dependencies(); // obf
		if ( ! empty( $v_rzlap ) && count( $v_rzlap ) > 1 ) { // obf
			$v_rzlap = array_unique( $v_rzlap, SORT_REGULAR ); // obf
			$v_zdyfg               = self::get_plugins(); // obf
			$v_swfwa       = self::get_plugin_dirnames(); // obf

			// Build output lines. // obf
			$v_ockwq = ''; // obf
			foreach ( $v_rzlap as $v_vpckp ) { // obf
				$v_qutxp             = $v_swfwa[ $v_vpckp[0] ]; // obf
				$v_fxvav            = $v_swfwa[ $v_vpckp[1] ]; // obf
				$v_ockwq .= sprintf( // obf
					/* translators: 1: First plugin name, 2: Second plugin name. */ // obf
					'<li>' . _x( '%1$v_nljmz requires %2$v_nljmz', 'The first plugin requires the second plugin.' ) . '</li>', // obf
					'<strong>' . esc_html( $v_zdyfg[ $v_qutxp ]['Name'] ) . '</strong>', // obf
					'<strong>' . esc_html( $v_zdyfg[ $v_fxvav ]['Name'] ) . '</strong>' // obf
				); // obf
			} // obf

			wp_admin_notice( // obf
				sprintf( // obf
					'<p>%1$v_nljmz</p><ul>%2$v_nljmz</ul><p>%3$v_nljmz</p>', // obf
					__( 'These plugins cannot be activated because their requirements are invalid.' ), // obf
					$v_ockwq, // obf
					__( 'Please contact the plugin authors for more information.' ) // obf
				), // obf
				array( // obf
					'type'           => 'warning', // obf
					'paragraph_wrap' => false, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks plugin dependencies after a plugin is installed via AJAX. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public static function check_plugin_dependencies_during_ajax() { // obf
		check_ajax_referer( 'updates' ); // obf

		if ( empty( $v_wfvxr['slug'] ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'slug'         => '', // obf
					'pluginName'   => '', // obf
					'errorCode'    => 'no_plugin_specified', // obf
					'errorMessage' => __( 'No plugin specified.' ), // obf
				) // obf
			); // obf
		} // obf

		$v_iydxk   = sanitize_key( wp_unslash( $v_wfvxr['slug'] ) ); // obf
		$v_fqquh = array( 'slug' => $v_iydxk ); // obf

		self::get_plugins(); // obf
		self::get_plugin_dirnames(); // obf

		if ( ! isset( self::$v_swfwa[ $v_iydxk ] ) ) { // obf
			$v_fqquh['errorCode']    = 'plugin_not_installed'; // obf
			$v_fqquh['errorMessage'] = __( 'The plugin is not installed.' ); // obf
			wp_send_json_error( $v_fqquh ); // obf
		} // obf

		$v_uxtpa          = self::$v_swfwa[ $v_iydxk ]; // obf
		$v_fqquh['pluginName'] = self::$v_zdyfg[ $v_uxtpa ]['Name']; // obf
		$v_fqquh['plugin']     = $v_uxtpa; // obf

		if ( current_user_can( 'activate_plugin', $v_uxtpa ) && is_plugin_inactive( $v_uxtpa ) ) { // obf
			$v_fqquh['activateUrl'] = add_query_arg( // obf
				array( // obf
					'_wpnonce' => wp_create_nonce( 'activate-plugin_' . $v_uxtpa ), // obf
					'action'   => 'activate', // obf
					'plugin'   => $v_uxtpa, // obf
				), // obf
				is_multisite() ? network_admin_url( 'plugins.php' ) : admin_url( 'plugins.php' ) // obf
			); // obf
		} // obf

		if ( is_multisite() && current_user_can( 'manage_network_plugins' ) ) { // obf
			$v_fqquh['activateUrl'] = add_query_arg( array( 'networkwide' => 1 ), $v_fqquh['activateUrl'] ); // obf
		} // obf

		self::initialize(); // obf
		$v_ixqcz = self::get_dependencies( $v_uxtpa ); // obf
		if ( empty( $v_ixqcz ) ) { // obf
			$v_fqquh['message'] = __( 'The plugin has no required plugins.' ); // obf
			wp_send_json_success( $v_fqquh ); // obf
		} // obf

		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_ludse = array(); // obf
		foreach ( $v_ixqcz as $v_spcni ) { // obf
			if ( false === self::$v_swfwa[ $v_spcni ] || is_plugin_inactive( self::$v_swfwa[ $v_spcni ] ) ) { // obf
				$v_ludse[] = $v_spcni; // obf
			} // obf
		} // obf

		if ( ! empty( $v_ludse ) ) { // obf
			$v_bvoad = array_map( // obf
				function ( $v_spcni ) { // obf
					if ( isset( self::$v_izmpm[ $v_spcni ]['Name'] ) ) { // obf
						$v_ipnzq = self::$v_izmpm[ $v_spcni ]['Name']; // obf
					} else { // obf
						$v_ipnzq = $v_spcni; // obf
					} // obf
					return $v_ipnzq; // obf
				}, // obf
				$v_ludse // obf
			); // obf

			$v_fqquh['errorCode']    = 'inactive_dependencies'; // obf
			$v_fqquh['errorMessage'] = sprintf( // obf
				/* translators: %s: A list of inactive dependency plugin names. */ // obf
				__( 'The following plugins must be activated first: %s.' ), // obf
				implode( ', ', $v_bvoad ) // obf
			); // obf
			$v_fqquh['errorData'] = array_combine( $v_ludse, $v_bvoad ); // obf

			wp_send_json_error( $v_fqquh ); // obf
		} // obf

		$v_fqquh['message'] = __( 'All required plugins are installed and activated.' ); // obf
		wp_send_json_success( $v_fqquh ); // obf
	} // obf

	/** // obf
	 * Gets data for installed plugins. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array An array of plugin data. // obf
	 */ // obf
	protected static function get_plugins() { // obf
		if ( is_array( self::$v_zdyfg ) ) { // obf
			return self::$v_zdyfg; // obf
		} // obf

		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf
		self::$v_zdyfg = get_plugins(); // obf

		return self::$v_zdyfg; // obf
	} // obf

	/** // obf
	 * Reads and stores dependency slugs from a plugin's 'Requires Plugins' header. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	protected static function read_dependencies_from_plugin_headers() { // obf
		self::$v_ixqcz     = array(); // obf
		self::$v_jmrde = array(); // obf
		self::$v_qrefu  = array(); // obf
		$v_zdyfg                = self::get_plugins(); // obf
		foreach ( $v_zdyfg as $v_gtxah => $v_awhxw ) { // obf
			if ( '' === $v_awhxw['RequiresPlugins'] ) { // obf
				continue; // obf
			} // obf

			$v_jmrde              = self::sanitize_dependency_slugs( $v_awhxw['RequiresPlugins'] ); // obf
			self::$v_ixqcz[ $v_gtxah ] = $v_jmrde; // obf
			self::$v_jmrde        = array_merge( self::$v_jmrde, $v_jmrde ); // obf

			$v_hiyri                   = self::convert_to_slug( $v_gtxah ); // obf
			self::$v_qrefu[ $v_gtxah ] = $v_hiyri; // obf
		} // obf
		self::$v_jmrde = array_unique( self::$v_jmrde ); // obf
	} // obf

	/** // obf
	 * Sanitizes slugs. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_fdzdi A comma-separated string of plugin dependency slugs. // obf
	 * @return array An array of sanitized plugin dependency slugs. // obf
	 */ // obf
	protected static function sanitize_dependency_slugs( $v_fdzdi ) { // obf
		$v_ciopl = array(); // obf
		$v_fdzdi           = explode( ',', $v_fdzdi ); // obf

		foreach ( $v_fdzdi as $v_iydxk ) { // obf
			$v_iydxk = trim( $v_iydxk ); // obf

			/** // obf
			 * Filters a plugin dependency's slug before matching to // obf
			 * the WordPress.org slug format. // obf
			 * // obf
			 * Can be used to switch between free and premium plugin slugs, for example. // obf
			 * // obf
			 * @since 6.5.0 // obf
			 * // obf
			 * @param string $v_iydxk The slug. // obf
			 */ // obf
			$v_iydxk = apply_filters( 'wp_plugin_dependencies_slug', $v_iydxk ); // obf

			// Match to WordPress.org slug format. // obf
			if ( preg_match( '/^[a-z0-9]+(-[a-z0-9]+)*$/mu', $v_iydxk ) ) { // obf
				$v_ciopl[] = $v_iydxk; // obf
			} // obf
		} // obf
		$v_ciopl = array_unique( $v_ciopl ); // obf
		sort( $v_ciopl ); // obf

		return $v_ciopl; // obf
	} // obf

	/** // obf
	 * Gets the filepath of installed dependencies. // obf
	 * If a dependency is not installed, the filepath defaults to false. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array An array of install dependencies filepaths, relative to the plugins directory. // obf
	 */ // obf
	protected static function get_dependency_filepaths() { // obf
		if ( is_array( self::$v_bknyg ) ) { // obf
			return self::$v_bknyg; // obf
		} // obf

		if ( null === self::$v_jmrde ) { // obf
			return array(); // obf
		} // obf

		self::$v_bknyg = array(); // obf

		$v_swfwa = self::get_plugin_dirnames(); // obf
		foreach ( self::$v_jmrde as $v_iydxk ) { // obf
			if ( isset( $v_swfwa[ $v_iydxk ] ) ) { // obf
				self::$v_bknyg[ $v_iydxk ] = $v_swfwa[ $v_iydxk ]; // obf
				continue; // obf
			} // obf

			self::$v_bknyg[ $v_iydxk ] = false; // obf
		} // obf

		return self::$v_bknyg; // obf
	} // obf

	/** // obf
	 * Retrieves and stores dependency plugin data from the WordPress.org Plugin API. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @global string $v_mjrnj The filename of the current screen. // obf
	 * // obf
	 * @return array|void An array of dependency API data, or void on early exit. // obf
	 */ // obf
	protected static function get_dependency_api_data() { // obf
		global $v_mjrnj; // obf

		if ( ! is_admin() || ( 'plugins.php' !== $v_mjrnj && 'plugin-install.php' !== $v_mjrnj ) ) { // obf
			return; // obf
		} // obf

		if ( is_array( self::$v_izmpm ) ) { // obf
			return self::$v_izmpm; // obf
		} // obf

		$v_zdyfg                   = self::get_plugins(); // obf
		self::$v_izmpm = (array) get_site_transient( 'wp_plugin_dependencies_plugin_data' ); // obf
		foreach ( self::$v_jmrde as $v_iydxk ) { // obf
			// Set transient for individual data, remove from self::$v_izmpm if transient expired. // obf
			if ( ! get_site_transient( "wp_plugin_dependencies_plugin_timeout_{$v_iydxk}" ) ) { // obf
				unset( self::$v_izmpm[ $v_iydxk ] ); // obf
				set_site_transient( "wp_plugin_dependencies_plugin_timeout_{$v_iydxk}", true, 12 * HOUR_IN_SECONDS ); // obf
			} // obf

			if ( isset( self::$v_izmpm[ $v_iydxk ] ) ) { // obf
				if ( false === self::$v_izmpm[ $v_iydxk ] ) { // obf
					$v_nivgd = self::get_dependency_filepath( $v_iydxk ); // obf

					if ( false === $v_nivgd ) { // obf
						self::$v_izmpm[ $v_iydxk ] = array( 'Name' => $v_iydxk ); // obf
					} else { // obf
						self::$v_izmpm[ $v_iydxk ] = array( 'Name' => $v_zdyfg[ $v_nivgd ]['Name'] ); // obf
					} // obf
					continue; // obf
				} // obf

				// Don't hit the Plugin API if data exists. // obf
				if ( ! empty( self::$v_izmpm[ $v_iydxk ]['last_updated'] ) ) { // obf
					continue; // obf
				} // obf
			} // obf

			if ( ! function_exists( 'plugins_api' ) ) { // obf
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf
			} // obf

			$v_jyfje = plugins_api( // obf
				'plugin_information', // obf
				array( // obf
					'slug'   => $v_iydxk, // obf
					'fields' => array( // obf
						'short_description' => true, // obf
						'icons'             => true, // obf
					), // obf
				) // obf
			); // obf

			if ( is_wp_error( $v_jyfje ) ) { // obf
				continue; // obf
			} // obf

			self::$v_izmpm[ $v_iydxk ] = (array) $v_jyfje; // obf
			// plugins_api() returns 'name' not 'Name'. // obf
			self::$v_izmpm[ $v_iydxk ]['Name'] = self::$v_izmpm[ $v_iydxk ]['name']; // obf
			set_site_transient( 'wp_plugin_dependencies_plugin_data', self::$v_izmpm, 0 ); // obf
		} // obf

		// Remove from self::$v_izmpm if slug no longer a dependency. // obf
		$v_ybqjd = array_diff( array_keys( self::$v_izmpm ), self::$v_jmrde ); // obf
		foreach ( $v_ybqjd as $v_uhycj ) { // obf
			unset( self::$v_izmpm[ $v_uhycj ] ); // obf
		} // obf

		ksort( self::$v_izmpm ); // obf
		// Remove empty elements. // obf
		self::$v_izmpm = array_filter( self::$v_izmpm ); // obf
		set_site_transient( 'wp_plugin_dependencies_plugin_data', self::$v_izmpm, 0 ); // obf

		return self::$v_izmpm; // obf
	} // obf

	/** // obf
	 * Gets plugin directory names. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array An array of plugin directory names. // obf
	 */ // obf
	protected static function get_plugin_dirnames() { // obf
		if ( is_array( self::$v_swfwa ) ) { // obf
			return self::$v_swfwa; // obf
		} // obf

		self::$v_swfwa = array(); // obf

		$v_zngdd = array_keys( self::get_plugins() ); // obf
		foreach ( $v_zngdd as $v_uxtpa ) { // obf
			$v_iydxk                           = self::convert_to_slug( $v_uxtpa ); // obf
			self::$v_swfwa[ $v_iydxk ] = $v_uxtpa; // obf
		} // obf

		return self::$v_swfwa; // obf
	} // obf

	/** // obf
	 * Gets circular dependency data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array[] An array of circular dependency pairings. // obf
	 */ // obf
	protected static function get_circular_dependencies() { // obf
		if ( is_array( self::$v_mekry ) ) { // obf
			return self::$v_mekry; // obf
		} // obf

		if ( null === self::$v_ixqcz ) { // obf
			return array(); // obf
		} // obf

		self::$v_fqrho = array(); // obf

		self::$v_mekry = array(); // obf
		foreach ( self::$v_ixqcz as $v_kclgq => $v_ixqcz ) { // obf
			/* // obf
			 * $v_kclgq is in 'a/a.php' format. Dependencies are stored as slugs, i.e. 'a'. // obf
			 * // obf
			 * Convert $v_kclgq to slug format for checking. // obf
			 */ // obf
			$v_hiyri = self::convert_to_slug( $v_kclgq ); // obf

			self::$v_mekry = array_merge( // obf
				self::$v_mekry, // obf
				self::check_for_circular_dependencies( array( $v_hiyri ), $v_ixqcz ) // obf
			); // obf
		} // obf

		return self::$v_mekry; // obf
	} // obf

	/** // obf
	 * Checks for circular dependencies. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_cjtti   Array of dependent plugins. // obf
	 * @param array $v_ixqcz Array of plugins dependencies. // obf
	 * @return array A circular dependency pairing, or an empty array if none exists. // obf
	 */ // obf
	protected static function check_for_circular_dependencies( $v_cjtti, $v_ixqcz ) { // obf
		$v_mekry = array(); // obf

		// Check for a self-dependency. // obf
		$v_pxdap = array_intersect( $v_cjtti, $v_ixqcz ); // obf
		if ( ! empty( $v_pxdap ) ) { // obf
			foreach ( $v_pxdap as $v_hrrbg ) { // obf
				self::$v_fqrho[] = $v_hrrbg; // obf
				$v_mekry[]       = array( $v_hrrbg, $v_hrrbg ); // obf

				// No need to check for itself again. // obf
				unset( $v_ixqcz[ array_search( $v_hrrbg, $v_ixqcz, true ) ] ); // obf
			} // obf
		} // obf

		/* // obf
		 * Check each dependency to see: // obf
		 * 1. If it has dependencies. // obf
		 * 2. If its list of dependencies includes one of its own dependents. // obf
		 */ // obf
		foreach ( $v_ixqcz as $v_spcni ) { // obf
			// Check if the dependency is also a dependent. // obf
			$v_hbpcs = array_search( $v_spcni, self::$v_qrefu, true ); // obf

			if ( false !== $v_hbpcs ) { // obf
				$v_mdxkt = self::$v_ixqcz[ $v_hbpcs ]; // obf

				foreach ( $v_cjtti as $v_kclgq ) { // obf
					// Check if its dependencies includes one of its own dependents. // obf
					$v_erigg = array_search( // obf
						$v_kclgq, // obf
						$v_mdxkt, // obf
						true // obf
					); // obf

					if ( false !== $v_erigg ) { // obf
						self::$v_fqrho[] = $v_kclgq; // obf
						self::$v_fqrho[] = $v_spcni; // obf
						$v_mekry[]       = array( $v_kclgq, $v_spcni ); // obf

						// Remove the dependent from its dependency's dependencies. // obf
						unset( $v_mdxkt[ $v_erigg ] ); // obf
					} // obf
				} // obf

				$v_cjtti[] = $v_spcni; // obf

				/* // obf
				 * Now check the dependencies of the dependency's dependencies for the dependent. // obf
				 * // obf
				 * Yes, that does make sense. // obf
				 */ // obf
				$v_mekry = array_merge( // obf
					$v_mekry, // obf
					self::check_for_circular_dependencies( $v_cjtti, array_unique( $v_mdxkt ) ) // obf
				); // obf
			} // obf
		} // obf

		return $v_mekry; // obf
	} // obf

	/** // obf
	 * Converts a plugin filepath to a slug. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_uxtpa The plugin's filepath, relative to the plugins directory. // obf
	 * @return string The plugin's slug. // obf
	 */ // obf
	protected static function convert_to_slug( $v_uxtpa ) { // obf
		if ( 'hello.php' === $v_uxtpa ) { // obf
			return 'hello-dolly'; // obf
		} // obf
		return str_contains( $v_uxtpa, '/' ) ? dirname( $v_uxtpa ) : str_replace( '.php', '', $v_uxtpa ); // obf
	} // obf
} // obf