
__fn_58306 = "exec"; // obf
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Class for providing debug data based on a users WordPress environment. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Site_Health // obf
 * @since 5.2.0 // obf
 */ // obf

#[AllowDynamicProperties] // obf
class WP_Debug_Data { // obf
	/** // obf
	 * Calls all core functions to check for updates. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public static function check_for_updates() { // obf
		wp_version_check(); // obf
		wp_update_plugins(); // obf
		wp_update_themes(); // obf
	} // obf

	/** // obf
	 * Static function for generating site debug data when required. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @since 5.3.0 Added database charset, database collation, // obf
	 *              and timezone information. // obf
	 * @since 5.5.0 Added pretty permalinks support information. // obf
	 * @since 6.7.0 Modularized into separate theme-oriented methods. // obf
	 * // obf
	 * @throws ImagickException // obf
	 * // obf
	 * @return array The debug data for the site. // obf
	 */ // obf
	public static function debug_data() { // obf
		/* // obf
		 * Set up the array that holds all debug information. // obf
		 * // obf
		 * When iterating through the debug data, the ordering of the sections // obf
		 * occurs in insertion-order of the assignments into this array. // obf
		 * // obf
		 * This is the single assignment of the sections before filtering. Null-entries will // obf
		 * be automatically be removed. // obf
		 */ // obf
		$v_cxvqk = array( // obf
			'wp-core'             => self::get_wp_core(), // obf
			'wp-paths-sizes'      => self::get_wp_paths_sizes(), // obf
			'wp-dropins'          => self::get_wp_dropins(), // obf
			'wp-active-theme'     => self::get_wp_active_theme(), // obf
			'wp-parent-theme'     => self::get_wp_parent_theme(), // obf
			'wp-themes-inactive'  => self::get_wp_themes_inactive(), // obf
			'wp-mu-plugins'       => self::get_wp_mu_plugins(), // obf
			'wp-plugins-active'   => self::get_wp_plugins_active(), // obf
			'wp-plugins-inactive' => self::get_wp_plugins_inactive(), // obf
			'wp-media'            => self::get_wp_media(), // obf
			'wp-server'           => self::get_wp_server(), // obf
			'wp-database'         => self::get_wp_database(), // obf
			'wp-constants'        => self::get_wp_constants(), // obf
			'wp-filesystem'       => self::get_wp_filesystem(), // obf
		); // obf

		/* // obf
		 * Remove null elements from the array. The individual methods are // obf
		 * allowed to return `null`, which communicates that the category // obf
		 * of debug data isn't relevant and shouldn't be passed through. // obf
		 */ // obf
		$v_cxvqk = array_filter( // obf
			$v_cxvqk, // obf
			static function ( $v_gdmhp ) { // obf
				return isset( $v_gdmhp ); // obf
			} // obf
		); // obf

		/** // obf
		 * Filters the debug information shown on the Tools -> Site Health -> Info screen. // obf
		 * // obf
		 * Plugin or themes may wish to introduce their own debug information without creating // obf
		 * additional admin pages. They can utilize this filter to introduce their own sections // obf
		 * or add more data to existing sections. // obf
		 * // obf
		 * Array keys for sections added by core are all prefixed with `wp-`. Plugins and themes // obf
		 * should use their own slug as a prefix, both for consistency as well as avoiding // obf
		 * key collisions. Note that the array keys are used as labels for the copied data. // obf
		 * // obf
		 * All strings are expected to be plain text except `$v_cbpqa` that can contain // obf
		 * inline HTML tags (see below). // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param array $v_tbxtq { // obf
		 *     The debug information to be added to the core information page. // obf
		 * // obf
		 *     This is an associative multi-dimensional array, up to three levels deep. // obf
		 *     The topmost array holds the sections, keyed by section ID. // obf
		 * // obf
		 *     @type array ...$0 { // obf
		 *         Each section has a `$v_gsglg` associative array (see below), and each `$v_opzxw` in `$v_gsglg` // obf
		 *         can be another associative array of name/value pairs when there is more structured data // obf
		 *         to display. // obf
		 * // obf
		 *         @type string $v_aguvz       Required. The title for this section of the debug output. // obf
		 *         @type string $v_cbpqa Optional. A description for your information section which // obf
		 *                                   may contain basic HTML markup, inline tags only as it is // obf
		 *                                   outputted in a paragraph. // obf
		 *         @type bool   $v_lybkr  Optional. If set to `true`, the amount of fields will be included // obf
		 *                                   in the title for this section. Default false. // obf
		 *         @type bool   $v_gpvsi     Optional. If set to `true`, the section and all associated fields // obf
		 *                                   will be excluded from the copied data. Default false. // obf
		 *         @type array  $v_gsglg { // obf
		 *             Required. An associative array containing the fields to be displayed in the section, // obf
		 *             keyed by field ID. // obf
		 * // obf
		 *             @type array ...$0 { // obf
		 *                 An associative array containing the data to be displayed for the field. // obf
		 * // obf
		 *                 @type string $v_aguvz    Required. The label for this piece of information. // obf
		 *                 @type mixed  $v_opzxw    Required. The output that is displayed for this field. // obf
		 *                                        Text should be translated. Can be an associative array // obf
		 *                                        that is displayed as name/value pairs. // obf
		 *                                        Accepted types: `string|int|float|(string|int|float)[]`. // obf
		 *                 @type string $v_utjxn    Optional. The output that is used for this field when // obf
		 *                                        the user copies the data. It should be more concise and // obf
		 *                                        not translated. If not set, the content of `$v_opzxw` // obf
		 *                                        is used. Note that the array keys are used as labels // obf
		 *                                        for the copied data. // obf
		 *                 @type bool   $v_gpvsi  Optional. If set to `true`, the field will be excluded // obf
		 *                                        from the copied data, allowing you to show, for example, // obf
		 *                                        API keys here. Default false. // obf
		 *             } // obf
		 *         } // obf
		 *     } // obf
		 * } // obf
		 */ // obf
		$v_cxvqk = apply_filters( 'debug_information', $v_cxvqk ); // obf

		return $v_cxvqk; // obf
	} // obf

	/** // obf
	 * Gets the WordPress core section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_core(): array { // obf
		// Save few function calls. // obf
		$v_rsnot    = get_option( 'permalink_structure' ); // obf
		$v_rsmzi                 = is_ssl(); // obf
		$v_tuggl     = get_option( 'users_can_register' ); // obf
		$v_ubiba            = get_option( 'blog_public' ); // obf
		$v_dagwo = get_option( 'default_comment_status' ); // obf
		$v_giaks       = wp_get_environment_type(); // obf
		$v_jtyut           = wp_get_wp_version(); // obf
		$v_zhsyo           = get_core_updates(); // obf
		$v_tuhmj     = ''; // obf

		if ( is_array( $v_zhsyo ) ) { // obf
			foreach ( $v_zhsyo as $v_pkgcg => $v_xougp ) { // obf
				if ( 'upgrade' === $v_xougp->response ) { // obf
					/* translators: %s: Latest WordPress version number. */ // obf
					$v_tuhmj = ' ' . sprintf( __( '(Latest version: %s)' ), $v_xougp->version ); // obf
				} else { // obf
					$v_tuhmj = ''; // obf
				} // obf
			} // obf
		} // obf

		$v_gsglg = array( // obf
			'version'                => array( // obf
				'label' => __( 'Version' ), // obf
				'value' => $v_jtyut . $v_tuhmj, // obf
				'debug' => $v_jtyut, // obf
			), // obf
			'site_language'          => array( // obf
				'label' => __( 'Site Language' ), // obf
				'value' => get_locale(), // obf
			), // obf
			'user_language'          => array( // obf
				'label' => __( 'User Language' ), // obf
				'value' => get_user_locale(), // obf
			), // obf
			'timezone'               => array( // obf
				'label' => __( 'Timezone' ), // obf
				'value' => wp_timezone_string(), // obf
			), // obf
			'home_url'               => array( // obf
				'label'   => __( 'Home URL' ), // obf
				'value'   => get_bloginfo( 'url' ), // obf
				'private' => true, // obf
			), // obf
			'site_url'               => array( // obf
				'label'   => __( 'Site URL' ), // obf
				'value'   => get_bloginfo( 'wpurl' ), // obf
				'private' => true, // obf
			), // obf
			'permalink'              => array( // obf
				'label' => __( 'Permalink structure' ), // obf
				'value' => $v_rsnot ? $v_rsnot : __( 'No permalink structure set' ), // obf
				'debug' => $v_rsnot, // obf
			), // obf
			'https_status'           => array( // obf
				'label' => __( 'Is this site using HTTPS?' ), // obf
				'value' => $v_rsmzi ? __( 'Yes' ) : __( 'No' ), // obf
				'debug' => $v_rsmzi, // obf
			), // obf
			'multisite'              => array( // obf
				'label' => __( 'Is this a multisite?' ), // obf
				'value' => is_multisite() ? __( 'Yes' ) : __( 'No' ), // obf
				'debug' => is_multisite(), // obf
			), // obf
			'user_registration'      => array( // obf
				'label' => __( 'Can anyone register on this site?' ), // obf
				'value' => $v_tuggl ? __( 'Yes' ) : __( 'No' ), // obf
				'debug' => $v_tuggl, // obf
			), // obf
			'blog_public'            => array( // obf
				'label' => __( 'Is this site discouraging search engines?' ), // obf
				'value' => $v_ubiba ? __( 'No' ) : __( 'Yes' ), // obf
				'debug' => $v_ubiba, // obf
			), // obf
			'default_comment_status' => array( // obf
				'label' => __( 'Default comment status' ), // obf
				'value' => 'open' === $v_dagwo ? _x( 'Open', 'comment status' ) : _x( 'Closed', 'comment status' ), // obf
				'debug' => $v_dagwo, // obf
			), // obf
			'environment_type'       => array( // obf
				'label' => __( 'Environment type' ), // obf
				'value' => $v_giaks, // obf
				'debug' => $v_giaks, // obf
			), // obf
		); // obf

		// Conditionally add debug information for multisite setups. // obf
		if ( is_multisite() ) { // obf
			$v_flhok = get_current_blog_id(); // obf

			$v_gsglg['site_id'] = array( // obf
				'label' => __( 'Site ID' ), // obf
				'value' => $v_flhok, // obf
				'debug' => $v_flhok, // obf
			); // obf

			$v_eneph = new WP_Network_Query(); // obf
			$v_ifkuw   = $v_eneph->query( // obf
				array( // obf
					'fields'        => 'ids', // obf
					'number'        => 100, // obf
					'no_found_rows' => false, // obf
				) // obf
			); // obf

			$v_qymzj = 0; // obf
			foreach ( $v_ifkuw as $v_ochnc ) { // obf
				$v_qymzj += get_blog_count( $v_ochnc ); // obf
			} // obf

			$v_gsglg['site_count'] = array( // obf
				'label' => __( 'Site count' ), // obf
				'value' => $v_qymzj, // obf
			); // obf

			$v_gsglg['network_count'] = array( // obf
				'label' => __( 'Network count' ), // obf
				'value' => $v_eneph->found_networks, // obf
			); // obf
		} // obf

		$v_gsglg['user_count'] = array( // obf
			'label' => __( 'User count' ), // obf
			'value' => get_user_count(), // obf
		); // obf

		// WordPress features requiring processing. // obf
		$v_tszaf = wp_remote_get( 'https://wordpress.org', array( 'timeout' => 10 ) ); // obf

		if ( ! is_wp_error( $v_tszaf ) ) { // obf
			$v_gsglg['dotorg_communication'] = array( // obf
				'label' => __( 'Communication with WordPress.org' ), // obf
				'value' => __( 'WordPress.org is reachable' ), // obf
				'debug' => 'true', // obf
			); // obf
		} else { // obf
			$v_gsglg['dotorg_communication'] = array( // obf
				'label' => __( 'Communication with WordPress.org' ), // obf
				'value' => sprintf( // obf
				/* translators: 1: The IP address WordPress.org resolves to. 2: The error returned by the lookup. */ // obf
					__( 'Unable to reach WordPress.org at %1$v_ipfrn: %2$v_ipfrn' ), // obf
					gethostbyname( 'wordpress.org' ), // obf
					$v_tszaf->get_error_message() // obf
				), // obf
				'debug' => $v_tszaf->get_error_message(), // obf
			); // obf
		} // obf

		return array( // obf
			'label'  => __( 'WordPress' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress drop-in section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_dropins(): array { // obf
		// Get a list of all drop-in replacements. // obf
		$v_btclk = get_dropins(); // obf

		// Get drop-ins descriptions. // obf
		$v_gkxns = _get_dropins(); // obf

		$v_gsglg = array(); // obf
		foreach ( $v_btclk as $v_tvzvw => $v_hgryc ) { // obf
			$v_gsglg[ sanitize_text_field( $v_tvzvw ) ] = array( // obf
				'label' => $v_tvzvw, // obf
				'value' => $v_gkxns[ $v_tvzvw ][0], // obf
				'debug' => 'true', // obf
			); // obf
		} // obf

		return array( // obf
			'label'       => __( 'Drop-ins' ), // obf
			'show_count'  => true, // obf
			'description' => sprintf( // obf
				/* translators: %s: wp-content directory name. */ // obf
				__( 'Drop-ins are single files, found in the %s directory, that replace or enhance WordPress features in ways that are not possible for traditional plugins.' ), // obf
				'<code>' . str_replace( ABSPATH, '', WP_CONTENT_DIR ) . '</code>' // obf
			), // obf
			'fields'      => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress server section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_server(): array { // obf
		// Populate the server debug fields. // obf
		if ( function_exists( 'php_uname' ) ) { // obf
			$v_ecmor = sprintf( '%s %s %s', php_uname( 's' ), php_uname( 'r' ), php_uname( 'm' ) ); // obf
		} else { // obf
			$v_ecmor = 'unknown'; // obf
		} // obf

		$v_frzka = PHP_VERSION; // obf
		// Whether PHP supports 64-bit. // obf
		$v_qgnbk = ( PHP_INT_SIZE * 8 === 64 ); // obf

		$v_comtz = sprintf( // obf
			'%s %s', // obf
			$v_frzka, // obf
			( $v_qgnbk ? __( '(Supports 64bit values)' ) : __( '(Does not support 64bit values)' ) ) // obf
		); // obf

		if ( $v_qgnbk ) { // obf
			$v_frzka .= ' 64bit'; // obf
		} // obf

		$v_gsglg = array(); // obf

		$v_gsglg['server_architecture'] = array( // obf
			'label' => __( 'Server architecture' ), // obf
			'value' => ( 'unknown' !== $v_ecmor ? $v_ecmor : __( 'Unable to determine server architecture' ) ), // obf
			'debug' => $v_ecmor, // obf
		); // obf
		$v_gsglg['httpd_software']      = array( // obf
			'label' => __( 'Web server' ), // obf
			'value' => ( isset( $v_zcvwp['SERVER_SOFTWARE'] ) ? $v_zcvwp['SERVER_SOFTWARE'] : __( 'Unable to determine what web server software is used' ) ), // obf
			'debug' => ( isset( $v_zcvwp['SERVER_SOFTWARE'] ) ? $v_zcvwp['SERVER_SOFTWARE'] : 'unknown' ), // obf
		); // obf
		$v_gsglg['php_version']         = array( // obf
			'label' => __( 'PHP version' ), // obf
			'value' => $v_comtz, // obf
			'debug' => $v_frzka, // obf
		); // obf
		$v_gsglg['php_sapi']            = array( // obf
			'label' => __( 'PHP SAPI' ), // obf
			'value' => PHP_SAPI, // obf
			'debug' => PHP_SAPI, // obf
		); // obf

		// Some servers disable `ini_set()` and `ini_get()`, we check this before trying to get configuration values. // obf
		if ( ! function_exists( 'ini_get' ) ) { // obf
			$v_gsglg['ini_get'] = array( // obf
				'label' => __( 'Server settings' ), // obf
				'value' => sprintf( // obf
				/* translators: %s: ini_get() */ // obf
					__( 'Unable to determine some settings, as the %s function has been disabled.' ), // obf
					'ini_get()' // obf
				), // obf
				'debug' => 'ini_get() is disabled', // obf
			); // obf
		} else { // obf
			$v_gsglg['max_input_variables'] = array( // obf
				'label' => __( 'PHP max input variables' ), // obf
				'value' => ini_get( 'max_input_vars' ), // obf
			); // obf
			$v_gsglg['time_limit']          = array( // obf
				'label' => __( 'PHP time limit' ), // obf
				'value' => ini_get( 'max_execution_time' ), // obf
			); // obf

			if ( WP_Site_Health::get_instance()->php_memory_limit !== ini_get( 'memory_limit' ) ) { // obf
				$v_gsglg['memory_limit']       = array( // obf
					'label' => __( 'PHP memory limit' ), // obf
					'value' => WP_Site_Health::get_instance()->php_memory_limit, // obf
				); // obf
				$v_gsglg['admin_memory_limit'] = array( // obf
					'label' => __( 'PHP memory limit (only for admin screens)' ), // obf
					'value' => ini_get( 'memory_limit' ), // obf
				); // obf
			} else { // obf
				$v_gsglg['memory_limit'] = array( // obf
					'label' => __( 'PHP memory limit' ), // obf
					'value' => ini_get( 'memory_limit' ), // obf
				); // obf
			} // obf

			$v_gsglg['max_input_time']      = array( // obf
				'label' => __( 'Max input time' ), // obf
				'value' => ini_get( 'max_input_time' ), // obf
			); // obf
			$v_gsglg['upload_max_filesize'] = array( // obf
				'label' => __( 'Upload max filesize' ), // obf
				'value' => ini_get( 'upload_max_filesize' ), // obf
			); // obf
			$v_gsglg['php_post_max_size']   = array( // obf
				'label' => __( 'PHP post max size' ), // obf
				'value' => ini_get( 'post_max_size' ), // obf
			); // obf
		} // obf

		if ( function_exists( 'curl_version' ) ) { // obf
			$v_uyxdv = curl_version(); // obf

			$v_gsglg['curl_version'] = array( // obf
				'label' => __( 'cURL version' ), // obf
				'value' => sprintf( '%s %s', $v_uyxdv['version'], $v_uyxdv['ssl_version'] ), // obf
			); // obf
		} else { // obf
			$v_gsglg['curl_version'] = array( // obf
				'label' => __( 'cURL version' ), // obf
				'value' => __( 'Not available' ), // obf
				'debug' => 'not available', // obf
			); // obf
		} // obf

		// SUHOSIN. // obf
		$v_msgax = ( extension_loaded( 'suhosin' ) || ( defined( 'SUHOSIN_PATCH' ) && constant( 'SUHOSIN_PATCH' ) ) ); // obf

		$v_gsglg['suhosin'] = array( // obf
			'label' => __( 'Is SUHOSIN installed?' ), // obf
			'value' => ( $v_msgax ? __( 'Yes' ) : __( 'No' ) ), // obf
			'debug' => $v_msgax, // obf
		); // obf

		// Imagick. // obf
		$v_wjeht = extension_loaded( 'imagick' ); // obf

		$v_gsglg['imagick_availability'] = array( // obf
			'label' => __( 'Is the Imagick library available?' ), // obf
			'value' => ( $v_wjeht ? __( 'Yes' ) : __( 'No' ) ), // obf
			'debug' => $v_wjeht, // obf
		); // obf

		// Pretty permalinks. // obf
		$v_tkmeg = got_url_rewrite(); // obf

		$v_gsglg['pretty_permalinks'] = array( // obf
			'label' => __( 'Are pretty permalinks supported?' ), // obf
			'value' => ( $v_tkmeg ? __( 'Yes' ) : __( 'No' ) ), // obf
			'debug' => $v_tkmeg, // obf
		); // obf

		// Check if a .htaccess file exists. // obf
		if ( is_file( ABSPATH . '.htaccess' ) ) { // obf
			// If the file exists, grab the content of it. // obf
			$v_nnklk = file_get_contents( ABSPATH . '.htaccess' ); // obf

			// Filter away the core WordPress rules. // obf
			$v_fxmaz = trim( __fn_37772( '/\# BEGIN WordPress[\s\S]+?# END WordPress/si', '', $v_nnklk ) ); // obf
			$v_fxmaz = ! empty( $v_fxmaz ); // obf

			if ( $v_fxmaz ) { // obf
				/* translators: %s: .htaccess */ // obf
				$v_sxklb = sprintf( __( 'Custom rules have been added to your %s file.' ), '.htaccess' ); // obf
			} else { // obf
				/* translators: %s: .htaccess */ // obf
				$v_sxklb = sprintf( __( 'Your %s file contains only core WordPress features.' ), '.htaccess' ); // obf
			} // obf

			$v_gsglg['htaccess_extra_rules'] = array( // obf
				'label' => __( '.htaccess rules' ), // obf
				'value' => $v_sxklb, // obf
				'debug' => $v_fxmaz, // obf
			); // obf
		} // obf

		// Check if a robots.txt file exists. // obf
		if ( is_file( ABSPATH . 'robots.txt' ) ) { // obf
			// If the file exists, turn debug info to true. // obf
			$v_vmyoj = true; // obf

			/* translators: %s: robots.txt */ // obf
			$v_lmdaw = sprintf( __( 'There is a static %s file in your installation folder. WordPress cannot dynamically serve one.' ), 'robots.txt' ); // obf
		} elseif ( got_url_rewrite() ) { // obf
			// No robots.txt file available and rewrite rules in place, turn debug info to false. // obf
			$v_vmyoj = false; // obf

			/* translators: %s: robots.txt */ // obf
			$v_lmdaw = sprintf( __( 'Your site is using the dynamic %s file which is generated by WordPress.' ), 'robots.txt' ); // obf
		} else { // obf
			// No robots.txt file, but without rewrite rules WP can't serve one. // obf
			$v_vmyoj = true; // obf

			/* translators: %s: robots.txt */ // obf
			$v_lmdaw = sprintf( __( 'WordPress cannot dynamically serve a %s file due to a lack of rewrite rule support' ), 'robots.txt' ); // obf

		} // obf

		$v_gsglg['static_robotstxt_file'] = array( // obf
			'label' => __( 'robots.txt' ), // obf
			'value' => $v_lmdaw, // obf
			'debug' => $v_vmyoj, // obf
		); // obf

		// Server time. // obf
		$v_zupij = new DateTime( 'now', new DateTimeZone( 'UTC' ) ); // obf

		$v_gsglg['current']     = array( // obf
			'label' => __( 'Current time' ), // obf
			'value' => $v_zupij->format( DateTime::ATOM ), // obf
		); // obf
		$v_gsglg['utc-time']    = array( // obf
			'label' => __( 'Current UTC time' ), // obf
			'value' => $v_zupij->format( DateTime::RFC850 ), // obf
		); // obf
		$v_gsglg['server-time'] = array( // obf
			'label' => __( 'Current Server time' ), // obf
			'value' => wp_date( 'c', $v_zcvwp['REQUEST_TIME'] ), // obf
		); // obf

		return array( // obf
			'label'       => __( 'Server' ), // obf
			'description' => __( 'The options shown below relate to your server setup. If changes are required, you may need your web host&#8217;s assistance.' ), // obf
			'fields'      => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress media section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws ImagickException // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_media(): array { // obf
		// Spare few function calls. // obf
		$v_vhhtn = __( 'Not available' ); // obf

		// Populate the media fields. // obf
		$v_gsglg['image_editor'] = array( // obf
			'label' => __( 'Active editor' ), // obf
			'value' => _wp_image_editor_choose(), // obf
		); // obf

		// Get ImageMagic information, if available. // obf
		if ( class_exists( 'Imagick' ) ) { // obf
			// Save the Imagick instance for later use. // obf
			$v_apxaw             = new Imagick(); // obf
			$v_hkyoq = $v_apxaw->getVersion(); // obf
		} else { // obf
			$v_hkyoq = __( 'Not available' ); // obf
		} // obf

		$v_gsglg['imagick_module_version'] = array( // obf
			'label' => __( 'ImageMagick version number' ), // obf
			'value' => ( is_array( $v_hkyoq ) ? $v_hkyoq['versionNumber'] : $v_hkyoq ), // obf
		); // obf

		$v_gsglg['imagemagick_version'] = array( // obf
			'label' => __( 'ImageMagick version string' ), // obf
			'value' => ( is_array( $v_hkyoq ) ? $v_hkyoq['versionString'] : $v_hkyoq ), // obf
		); // obf

		$v_qkxct = phpversion( 'imagick' ); // obf

		$v_gsglg['imagick_version'] = array( // obf
			'label' => __( 'Imagick version' ), // obf
			'value' => ( $v_qkxct ) ? $v_qkxct : __( 'Not available' ), // obf
		); // obf

		if ( ! function_exists( 'ini_get' ) ) { // obf
			$v_gsglg['ini_get'] = array( // obf
				'label' => __( 'File upload settings' ), // obf
				'value' => sprintf( // obf
				/* translators: %s: ini_get() */ // obf
					__( 'Unable to determine some settings, as the %s function has been disabled.' ), // obf
					'ini_get()' // obf
				), // obf
				'debug' => 'ini_get() is disabled', // obf
			); // obf
		} else { // obf
			// Get the PHP ini directive values. // obf
			$v_oxfqe        = ini_get( 'file_uploads' ); // obf
			$v_qxdpi       = ini_get( 'post_max_size' ); // obf
			$v_kuigv = ini_get( 'upload_max_filesize' ); // obf
			$v_lntbg    = ini_get( 'max_file_uploads' ); // obf
			$v_xvvju           = min( wp_convert_hr_to_bytes( $v_qxdpi ), wp_convert_hr_to_bytes( $v_kuigv ) ); // obf

			// Add info in Media section. // obf
			$v_gsglg['file_uploads']        = array( // obf
				'label' => __( 'File uploads' ), // obf
				'value' => $v_oxfqe ? __( 'Enabled' ) : __( 'Disabled' ), // obf
				'debug' => $v_oxfqe, // obf
			); // obf
			$v_gsglg['post_max_size']       = array( // obf
				'label' => __( 'Max size of post data allowed' ), // obf
				'value' => $v_qxdpi, // obf
			); // obf
			$v_gsglg['upload_max_filesize'] = array( // obf
				'label' => __( 'Max size of an uploaded file' ), // obf
				'value' => $v_kuigv, // obf
			); // obf
			$v_gsglg['max_effective_size']  = array( // obf
				'label' => __( 'Max effective file size' ), // obf
				'value' => size_format( $v_xvvju ), // obf
			); // obf
			$v_gsglg['max_file_uploads']    = array( // obf
				'label' => __( 'Max simultaneous file uploads' ), // obf
				'value' => $v_lntbg, // obf
			); // obf
		} // obf

		// If Imagick is used as our editor, provide some more information about its limitations. // obf
		if ( 'WP_Image_Editor_Imagick' === _wp_image_editor_choose() && isset( $v_apxaw ) && $v_apxaw instanceof Imagick ) { // obf
			$v_tqbas = array( // obf
				'area'   => ( defined( 'imagick::RESOURCETYPE_AREA' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_AREA ) ) : $v_vhhtn ), // obf
				'disk'   => ( defined( 'imagick::RESOURCETYPE_DISK' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_DISK ) : $v_vhhtn ), // obf
				'file'   => ( defined( 'imagick::RESOURCETYPE_FILE' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_FILE ) : $v_vhhtn ), // obf
				'map'    => ( defined( 'imagick::RESOURCETYPE_MAP' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_MAP ) ) : $v_vhhtn ), // obf
				'memory' => ( defined( 'imagick::RESOURCETYPE_MEMORY' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_MEMORY ) ) : $v_vhhtn ), // obf
				'thread' => ( defined( 'imagick::RESOURCETYPE_THREAD' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_THREAD ) : $v_vhhtn ), // obf
				'time'   => ( defined( 'imagick::RESOURCETYPE_TIME' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_TIME ) : $v_vhhtn ), // obf
			); // obf

			$v_muwqt = array( // obf
				'imagick::RESOURCETYPE_AREA'   => ( defined( 'imagick::RESOURCETYPE_AREA' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_AREA ) ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_DISK'   => ( defined( 'imagick::RESOURCETYPE_DISK' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_DISK ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_FILE'   => ( defined( 'imagick::RESOURCETYPE_FILE' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_FILE ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_MAP'    => ( defined( 'imagick::RESOURCETYPE_MAP' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_MAP ) ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_MEMORY' => ( defined( 'imagick::RESOURCETYPE_MEMORY' ) ? size_format( $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_MEMORY ) ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_THREAD' => ( defined( 'imagick::RESOURCETYPE_THREAD' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_THREAD ) : 'not available' ), // obf
				'imagick::RESOURCETYPE_TIME'   => ( defined( 'imagick::RESOURCETYPE_TIME' ) ? $v_apxaw->getResourceLimit( imagick::RESOURCETYPE_TIME ) : 'not available' ), // obf
			); // obf

			$v_gsglg['imagick_limits'] = array( // obf
				'label' => __( 'Imagick Resource Limits' ), // obf
				'value' => $v_tqbas, // obf
				'debug' => $v_muwqt, // obf
			); // obf

			try { // obf
				$v_mcvuy = Imagick::queryFormats( '*' ); // obf
			} catch ( Exception $v_fkzga ) { // obf
				$v_mcvuy = array(); // obf
			} // obf

			$v_gsglg['imagemagick_file_formats'] = array( // obf
				'label' => __( 'ImageMagick supported file formats' ), // obf
				'value' => ( empty( $v_mcvuy ) ) ? __( 'Unable to determine' ) : implode( ', ', $v_mcvuy ), // obf
				'debug' => ( empty( $v_mcvuy ) ) ? 'Unable to determine' : implode( ', ', $v_mcvuy ), // obf
			); // obf
		} // obf

		// Get the image format transforms. // obf
		$v_ksnub           = wp_get_image_editor_output_format( '', '' ); // obf
		$v_lbgtp = array(); // obf

		if ( ! empty( $v_ksnub ) ) { // obf
			foreach ( $v_ksnub as $v_ewowf => $v_jxhst ) { // obf
				$v_lbgtp[] = sprintf( '%s &rarr; %s', $v_ewowf, $v_jxhst ); // obf
			} // obf
			$v_vefyh = implode( ', ', $v_lbgtp ); // obf
		} else { // obf
			$v_vefyh = __( 'No format transforms defined' ); // obf
		} // obf

		$v_gsglg['image_format_transforms'] = array( // obf
			'label' => __( 'Image format transforms' ), // obf
			'value' => $v_vefyh, // obf
			'debug' => ( empty( $v_ksnub ) ) ? 'No format transforms defined' : $v_vefyh, // obf
		); // obf

		// Get GD information, if available. // obf
		if ( function_exists( 'gd_info' ) ) { // obf
			$v_ajhel = gd_info(); // obf
		} else { // obf
			$v_ajhel = false; // obf
		} // obf

		$v_gsglg['gd_version'] = array( // obf
			'label' => __( 'GD version' ), // obf
			'value' => ( is_array( $v_ajhel ) ? $v_ajhel['GD Version'] : $v_vhhtn ), // obf
			'debug' => ( is_array( $v_ajhel ) ? $v_ajhel['GD Version'] : 'not available' ), // obf
		); // obf

		$v_bccjx     = array(); // obf
		$v_ijyro = array( // obf
			'GIF Create' => 'GIF', // obf
			'JPEG'       => 'JPEG', // obf
			'PNG'        => 'PNG', // obf
			'WebP'       => 'WebP', // obf
			'BMP'        => 'BMP', // obf
			'AVIF'       => 'AVIF', // obf
			'HEIF'       => 'HEIF', // obf
			'TIFF'       => 'TIFF', // obf
			'XPM'        => 'XPM', // obf
		); // obf

		foreach ( $v_ijyro as $v_pkbho => $v_ewowf ) { // obf
			$v_dazng = $v_pkbho . ' Support'; // obf
			if ( isset( $v_ajhel[ $v_dazng ] ) && $v_ajhel[ $v_dazng ] ) { // obf
				array_push( $v_bccjx, $v_ewowf ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_bccjx ) ) { // obf
			$v_gsglg['gd_formats'] = array( // obf
				'label' => __( 'GD supported file formats' ), // obf
				'value' => implode( ', ', $v_bccjx ), // obf
			); // obf
		} // obf

		// Get Ghostscript information, if available. // obf
		if ( function_exists( 'exec' ) ) { // obf
			$v_uajlf = __fn_58306( 'gs --version' ); // obf

			if ( empty( $v_uajlf ) ) { // obf
				$v_uajlf       = $v_vhhtn; // obf
				$v_carvd = 'not available'; // obf
			} else { // obf
				$v_carvd = $v_uajlf; // obf
			} // obf
		} else { // obf
			$v_uajlf       = __( 'Unable to determine if Ghostscript is installed' ); // obf
			$v_carvd = 'unknown'; // obf
		} // obf

		$v_gsglg['ghostscript_version'] = array( // obf
			'label' => __( 'Ghostscript version' ), // obf
			'value' => $v_uajlf, // obf
			'debug' => $v_carvd, // obf
		); // obf

		return array( // obf
			'label'  => __( 'Media Handling' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress MU plugins section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_mu_plugins(): array { // obf
		// List must use plugins if there are any. // obf
		$v_zpgih = get_mu_plugins(); // obf
		$v_gsglg     = array(); // obf

		foreach ( $v_zpgih as $v_exklh => $v_qvkrz ) { // obf
			$v_krvhj = $v_qvkrz['Version']; // obf
			$v_mktvg  = $v_qvkrz['Author']; // obf

			$v_pmwoe       = __( 'No version or author information is available.' ); // obf
			$v_iockn = 'author: (undefined), version: (undefined)'; // obf

			if ( ! empty( $v_krvhj ) && ! empty( $v_mktvg ) ) { // obf
				/* translators: 1: Plugin version number. 2: Plugin author name. */ // obf
				$v_pmwoe       = sprintf( __( 'Version %1$v_ipfrn by %2$v_ipfrn' ), $v_krvhj, $v_mktvg ); // obf
				$v_iockn = sprintf( 'version: %s, author: %s', $v_krvhj, $v_mktvg ); // obf
			} else { // obf
				if ( ! empty( $v_mktvg ) ) { // obf
					/* translators: %s: Plugin author name. */ // obf
					$v_pmwoe       = sprintf( __( 'By %s' ), $v_mktvg ); // obf
					$v_iockn = sprintf( 'author: %s, version: (undefined)', $v_mktvg ); // obf
				} // obf

				if ( ! empty( $v_krvhj ) ) { // obf
					/* translators: %s: Plugin version number. */ // obf
					$v_pmwoe       = sprintf( __( 'Version %s' ), $v_krvhj ); // obf
					$v_iockn = sprintf( 'author: (undefined), version: %s', $v_krvhj ); // obf
				} // obf
			} // obf

			$v_gsglg[ sanitize_text_field( $v_qvkrz['Name'] ) ] = array( // obf
				'label' => $v_qvkrz['Name'], // obf
				'value' => $v_pmwoe, // obf
				'debug' => $v_iockn, // obf
			); // obf
		} // obf

		return array( // obf
			'label'      => __( 'Must Use Plugins' ), // obf
			'show_count' => true, // obf
			'fields'     => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress paths and sizes section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array|null Paths and sizes debug data for single sites, // obf
	 *                    otherwise `null` for multi-site installs. // obf
	 */ // obf
	private static function get_wp_paths_sizes(): ?array { // obf
		if ( is_multisite() ) { // obf
			return null; // obf
		} // obf

		$v_tdokg = __( 'Loading&hellip;' ); // obf

		$v_gsglg = array( // obf
			'wordpress_path' => array( // obf
				'label' => __( 'WordPress directory location' ), // obf
				'value' => untrailingslashit( ABSPATH ), // obf
			), // obf
			'wordpress_size' => array( // obf
				'label' => __( 'WordPress directory size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'uploads_path'   => array( // obf
				'label' => __( 'Uploads directory location' ), // obf
				'value' => wp_upload_dir()['basedir'], // obf
			), // obf
			'uploads_size'   => array( // obf
				'label' => __( 'Uploads directory size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'themes_path'    => array( // obf
				'label' => __( 'Themes directory location' ), // obf
				'value' => get_theme_root(), // obf
			), // obf
			'themes_size'    => array( // obf
				'label' => __( 'Themes directory size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'plugins_path'   => array( // obf
				'label' => __( 'Plugins directory location' ), // obf
				'value' => WP_PLUGIN_DIR, // obf
			), // obf
			'plugins_size'   => array( // obf
				'label' => __( 'Plugins directory size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'fonts_path'     => array( // obf
				'label' => __( 'Fonts directory location' ), // obf
				'value' => wp_get_font_dir()['basedir'], // obf
			), // obf
			'fonts_size'     => array( // obf
				'label' => __( 'Fonts directory size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'database_size'  => array( // obf
				'label' => __( 'Database size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
			'total_size'     => array( // obf
				'label' => __( 'Total installation size' ), // obf
				'value' => $v_tdokg, // obf
				'debug' => 'loading...', // obf
			), // obf
		); // obf

		return array( // obf
			/* translators: Filesystem directory paths and storage sizes. */ // obf
			'label'  => __( 'Directories and Sizes' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress active plugins section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_plugins_active(): array { // obf
		return array( // obf
			'label'      => __( 'Active Plugins' ), // obf
			'show_count' => true, // obf
			'fields'     => self::get_wp_plugins_raw_data()['wp-plugins-active'], // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress inactive plugins section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_plugins_inactive(): array { // obf
		return array( // obf
			'label'      => __( 'Inactive Plugins' ), // obf
			'show_count' => true, // obf
			'fields'     => self::get_wp_plugins_raw_data()['wp-plugins-inactive'], // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the raw plugin data for the WordPress active and inactive sections of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_plugins_raw_data(): array { // obf
		// List all available plugins. // obf
		$v_jzfvv        = get_plugins(); // obf
		$v_fbadp = get_plugin_updates(); // obf
		$v_finyc      = get_site_transient( 'update_plugins' ); // obf

		$v_kgkye = array(); // obf
		$v_gsglg       = array( // obf
			'wp-plugins-active'   => array(), // obf
			'wp-plugins-inactive' => array(), // obf
		); // obf

		$v_jwgpf = wp_is_auto_update_enabled_for_type( 'plugin' ); // obf

		if ( $v_jwgpf ) { // obf
			$v_kgkye = (array) get_site_option( 'auto_update_plugins', array() ); // obf
		} // obf

		foreach ( $v_jzfvv as $v_exklh => $v_qvkrz ) { // obf
			$v_iohwp = ( is_plugin_active( $v_exklh ) ) ? 'wp-plugins-active' : 'wp-plugins-inactive'; // obf

			$v_krvhj = $v_qvkrz['Version']; // obf
			$v_mktvg  = $v_qvkrz['Author']; // obf

			$v_pmwoe       = __( 'No version or author information is available.' ); // obf
			$v_iockn = 'author: (undefined), version: (undefined)'; // obf

			if ( ! empty( $v_krvhj ) && ! empty( $v_mktvg ) ) { // obf
				/* translators: 1: Plugin version number. 2: Plugin author name. */ // obf
				$v_pmwoe       = sprintf( __( 'Version %1$v_ipfrn by %2$v_ipfrn' ), $v_krvhj, $v_mktvg ); // obf
				$v_iockn = sprintf( 'version: %s, author: %s', $v_krvhj, $v_mktvg ); // obf
			} else { // obf
				if ( ! empty( $v_mktvg ) ) { // obf
					/* translators: %s: Plugin author name. */ // obf
					$v_pmwoe       = sprintf( __( 'By %s' ), $v_mktvg ); // obf
					$v_iockn = sprintf( 'author: %s, version: (undefined)', $v_mktvg ); // obf
				} // obf

				if ( ! empty( $v_krvhj ) ) { // obf
					/* translators: %s: Plugin version number. */ // obf
					$v_pmwoe       = sprintf( __( 'Version %s' ), $v_krvhj ); // obf
					$v_iockn = sprintf( 'author: (undefined), version: %s', $v_krvhj ); // obf
				} // obf
			} // obf

			if ( array_key_exists( $v_exklh, $v_fbadp ) ) { // obf
				/* translators: %s: Latest plugin version number. */ // obf
				$v_pmwoe       .= ' ' . sprintf( __( '(Latest version: %s)' ), $v_fbadp[ $v_exklh ]->update->new_version ); // obf
				$v_iockn .= sprintf( ' (latest version: %s)', $v_fbadp[ $v_exklh ]->update->new_version ); // obf
			} // obf

			if ( $v_jwgpf ) { // obf
				if ( isset( $v_finyc->response[ $v_exklh ] ) ) { // obf
					$v_dqhiq = $v_finyc->response[ $v_exklh ]; // obf
				} elseif ( isset( $v_finyc->no_update[ $v_exklh ] ) ) { // obf
					$v_dqhiq = $v_finyc->no_update[ $v_exklh ]; // obf
				} else { // obf
					$v_dqhiq = array( // obf
						'id'            => $v_exklh, // obf
						'slug'          => '', // obf
						'plugin'        => $v_exklh, // obf
						'new_version'   => '', // obf
						'url'           => '', // obf
						'package'       => '', // obf
						'icons'         => array(), // obf
						'banners'       => array(), // obf
						'banners_rtl'   => array(), // obf
						'tested'        => '', // obf
						'requires_php'  => '', // obf
						'compatibility' => new stdClass(), // obf
					); // obf
					$v_dqhiq = wp_parse_args( $v_qvkrz, $v_dqhiq ); // obf
				} // obf

				$v_tlrmj = wp_is_auto_update_forced_for_item( 'plugin', null, (object) $v_dqhiq ); // obf

				if ( ! is_null( $v_tlrmj ) ) { // obf
					$v_acwvm = $v_tlrmj; // obf
				} else { // obf
					$v_acwvm = in_array( $v_exklh, $v_kgkye, true ); // obf
				} // obf

				if ( $v_acwvm ) { // obf
					$v_gpvrw = __( 'Auto-updates enabled' ); // obf
				} else { // obf
					$v_gpvrw = __( 'Auto-updates disabled' ); // obf
				} // obf

				/** // obf
				 * Filters the text string of the auto-updates setting for each plugin in the Site Health debug data. // obf
				 * // obf
				 * @since 5.5.0 // obf
				 * // obf
				 * @param string $v_gpvrw The string output for the auto-updates column. // obf
				 * @param string $v_exklh         The path to the plugin file. // obf
				 * @param array  $v_qvkrz              An array of plugin data. // obf
				 * @param bool   $v_acwvm             Whether auto-updates are enabled for this item. // obf
				 */ // obf
				$v_gpvrw = apply_filters( 'plugin_auto_update_debug_string', $v_gpvrw, $v_exklh, $v_qvkrz, $v_acwvm ); // obf

				$v_pmwoe       .= ' | ' . $v_gpvrw; // obf
				$v_iockn .= ', ' . $v_gpvrw; // obf
			} // obf

			$v_gsglg[ $v_iohwp ][ sanitize_text_field( $v_qvkrz['Name'] ) ] = array( // obf
				'label' => $v_qvkrz['Name'], // obf
				'value' => $v_pmwoe, // obf
				'debug' => $v_iockn, // obf
			); // obf
		} // obf

		return $v_gsglg; // obf
	} // obf

	/** // obf
	 * Gets the WordPress active theme section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @global array $v_sskze // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_active_theme(): array { // obf
		global $v_sskze; // obf

		// Populate the section for the currently active theme. // obf
		$v_wxfof = array(); // obf

		if ( ! empty( $v_sskze ) ) { // obf
			foreach ( $v_sskze as $v_hpszq => $v_xjnka ) { // obf
				$v_wxfof[] = $v_hpszq; // obf
			} // obf
		} // obf

		$v_dfstb  = wp_get_theme(); // obf
		$v_wvhgh = get_theme_updates(); // obf
		$v_finyc     = get_site_transient( 'update_themes' ); // obf

		$v_bmikb       = $v_dfstb->version; // obf
		$v_jhpbh = $v_bmikb; // obf

		$v_kgkye         = array(); // obf
		$v_jwgpf = wp_is_auto_update_enabled_for_type( 'theme' ); // obf
		if ( $v_jwgpf ) { // obf
			$v_kgkye = (array) get_site_option( 'auto_update_themes', array() ); // obf
		} // obf

		if ( array_key_exists( $v_dfstb->stylesheet, $v_wvhgh ) ) { // obf
			$v_mqger = $v_wvhgh[ $v_dfstb->stylesheet ]->update['new_version']; // obf

			/* translators: %s: Latest theme version number. */ // obf
			$v_bmikb       .= ' ' . sprintf( __( '(Latest version: %s)' ), $v_mqger ); // obf
			$v_jhpbh .= sprintf( ' (latest version: %s)', $v_mqger ); // obf
		} // obf

		$v_luayw = $v_dfstb->display( 'AuthorURI' ); // obf

		if ( $v_dfstb->parent_theme ) { // obf
			$v_ukepj = sprintf( // obf
				/* translators: 1: Theme name. 2: Theme slug. */ // obf
				__( '%1$v_ipfrn (%2$v_ipfrn)' ), // obf
				$v_dfstb->parent_theme, // obf
				$v_dfstb->template // obf
			); // obf
			$v_ejlna = sprintf( // obf
				'%s (%s)', // obf
				$v_dfstb->parent_theme, // obf
				$v_dfstb->template // obf
			); // obf
		} else { // obf
			$v_ukepj       = __( 'None' ); // obf
			$v_ejlna = 'none'; // obf
		} // obf

		$v_gsglg = array( // obf
			'name'           => array( // obf
				'label' => __( 'Name' ), // obf
				'value' => sprintf( // obf
					/* translators: 1: Theme name. 2: Theme slug. */ // obf
					__( '%1$v_ipfrn (%2$v_ipfrn)' ), // obf
					$v_dfstb->name, // obf
					$v_dfstb->stylesheet // obf
				), // obf
			), // obf
			'version'        => array( // obf
				'label' => __( 'Version' ), // obf
				'value' => $v_bmikb, // obf
				'debug' => $v_jhpbh, // obf
			), // obf
			'author'         => array( // obf
				'label' => __( 'Author' ), // obf
				'value' => wp_kses( $v_dfstb->author, array() ), // obf
			), // obf
			'author_website' => array( // obf
				'label' => __( 'Author website' ), // obf
				'value' => ( $v_luayw ? $v_luayw : __( 'Undefined' ) ), // obf
				'debug' => ( $v_luayw ? $v_luayw : '(undefined)' ), // obf
			), // obf
			'parent_theme'   => array( // obf
				'label' => __( 'Parent theme' ), // obf
				'value' => $v_ukepj, // obf
				'debug' => $v_ejlna, // obf
			), // obf
			'theme_features' => array( // obf
				'label' => __( 'Theme features' ), // obf
				'value' => implode( ', ', $v_wxfof ), // obf
			), // obf
			'theme_path'     => array( // obf
				'label' => __( 'Theme directory location' ), // obf
				'value' => get_stylesheet_directory(), // obf
			), // obf
		); // obf

		if ( $v_jwgpf ) { // obf
			if ( isset( $v_finyc->response[ $v_dfstb->stylesheet ] ) ) { // obf
				$v_dqhiq = $v_finyc->response[ $v_dfstb->stylesheet ]; // obf
			} elseif ( isset( $v_finyc->no_update[ $v_dfstb->stylesheet ] ) ) { // obf
				$v_dqhiq = $v_finyc->no_update[ $v_dfstb->stylesheet ]; // obf
			} else { // obf
				$v_dqhiq = array( // obf
					'theme'        => $v_dfstb->stylesheet, // obf
					'new_version'  => $v_dfstb->version, // obf
					'url'          => '', // obf
					'package'      => '', // obf
					'requires'     => '', // obf
					'requires_php' => '', // obf
				); // obf
			} // obf

			$v_tlrmj = wp_is_auto_update_forced_for_item( 'theme', null, (object) $v_dqhiq ); // obf

			if ( ! is_null( $v_tlrmj ) ) { // obf
				$v_acwvm = $v_tlrmj; // obf
			} else { // obf
				$v_acwvm = in_array( $v_dfstb->stylesheet, $v_kgkye, true ); // obf
			} // obf

			if ( $v_acwvm ) { // obf
				$v_gpvrw = __( 'Enabled' ); // obf
			} else { // obf
				$v_gpvrw = __( 'Disabled' ); // obf
			} // obf

			/** This filter is documented in wp-admin/includes/class-wp-debug-data.php */ // obf
			$v_gpvrw = apply_filters( 'theme_auto_update_debug_string', $v_gpvrw, $v_dfstb, $v_acwvm ); // obf

			$v_gsglg['auto_update'] = array( // obf
				'label' => __( 'Auto-updates' ), // obf
				'value' => $v_gpvrw, // obf
				'debug' => $v_gpvrw, // obf
			); // obf
		} // obf

		return array( // obf
			'label'  => __( 'Active Theme' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress parent theme section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_parent_theme(): array { // obf
		$v_wvhgh = get_theme_updates(); // obf
		$v_finyc     = get_site_transient( 'update_themes' ); // obf

		$v_kgkye         = array(); // obf
		$v_jwgpf = wp_is_auto_update_enabled_for_type( 'theme' ); // obf
		if ( $v_jwgpf ) { // obf
			$v_kgkye = (array) get_site_option( 'auto_update_themes', array() ); // obf
		} // obf

		$v_dfstb = wp_get_theme(); // obf
		$v_atxwf = $v_dfstb->parent(); // obf
		$v_gsglg       = array(); // obf

		if ( $v_atxwf ) { // obf
			$v_dkdyv       = $v_atxwf->version; // obf
			$v_tycfm = $v_dkdyv; // obf

			if ( array_key_exists( $v_atxwf->stylesheet, $v_wvhgh ) ) { // obf
				$v_suwpr = $v_wvhgh[ $v_atxwf->stylesheet ]->update['new_version']; // obf

				/* translators: %s: Latest theme version number. */ // obf
				$v_dkdyv       .= ' ' . sprintf( __( '(Latest version: %s)' ), $v_suwpr ); // obf
				$v_tycfm .= sprintf( ' (latest version: %s)', $v_suwpr ); // obf
			} // obf

			$v_zzqbm = $v_atxwf->display( 'AuthorURI' ); // obf

			$v_gsglg = array( // obf
				'name'           => array( // obf
					'label' => __( 'Name' ), // obf
					'value' => sprintf( // obf
						/* translators: 1: Theme name. 2: Theme slug. */ // obf
						__( '%1$v_ipfrn (%2$v_ipfrn)' ), // obf
						$v_atxwf->name, // obf
						$v_atxwf->stylesheet // obf
					), // obf
				), // obf
				'version'        => array( // obf
					'label' => __( 'Version' ), // obf
					'value' => $v_dkdyv, // obf
					'debug' => $v_tycfm, // obf
				), // obf
				'author'         => array( // obf
					'label' => __( 'Author' ), // obf
					'value' => wp_kses( $v_atxwf->author, array() ), // obf
				), // obf
				'author_website' => array( // obf
					'label' => __( 'Author website' ), // obf
					'value' => ( $v_zzqbm ? $v_zzqbm : __( 'Undefined' ) ), // obf
					'debug' => ( $v_zzqbm ? $v_zzqbm : '(undefined)' ), // obf
				), // obf
				'theme_path'     => array( // obf
					'label' => __( 'Theme directory location' ), // obf
					'value' => get_template_directory(), // obf
				), // obf
			); // obf

			if ( $v_jwgpf ) { // obf
				if ( isset( $v_finyc->response[ $v_atxwf->stylesheet ] ) ) { // obf
					$v_dqhiq = $v_finyc->response[ $v_atxwf->stylesheet ]; // obf
				} elseif ( isset( $v_finyc->no_update[ $v_atxwf->stylesheet ] ) ) { // obf
					$v_dqhiq = $v_finyc->no_update[ $v_atxwf->stylesheet ]; // obf
				} else { // obf
					$v_dqhiq = array( // obf
						'theme'        => $v_atxwf->stylesheet, // obf
						'new_version'  => $v_atxwf->version, // obf
						'url'          => '', // obf
						'package'      => '', // obf
						'requires'     => '', // obf
						'requires_php' => '', // obf
					); // obf
				} // obf

				$v_tlrmj = wp_is_auto_update_forced_for_item( 'theme', null, (object) $v_dqhiq ); // obf

				if ( ! is_null( $v_tlrmj ) ) { // obf
					$v_acwvm = $v_tlrmj; // obf
				} else { // obf
					$v_acwvm = in_array( $v_atxwf->stylesheet, $v_kgkye, true ); // obf
				} // obf

				if ( $v_acwvm ) { // obf
					$v_lymoj = __( 'Enabled' ); // obf
				} else { // obf
					$v_lymoj = __( 'Disabled' ); // obf
				} // obf

				/** This filter is documented in wp-admin/includes/class-wp-debug-data.php */ // obf
				$v_lymoj = apply_filters( 'theme_auto_update_debug_string', $v_lymoj, $v_atxwf, $v_acwvm ); // obf

				$v_gsglg['auto_update'] = array( // obf
					'label' => __( 'Auto-update' ), // obf
					'value' => $v_lymoj, // obf
					'debug' => $v_lymoj, // obf
				); // obf
			} // obf
		} // obf

		return array( // obf
			'label'  => __( 'Parent Theme' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress inactive themes section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_themes_inactive(): array { // obf
		$v_dfstb  = wp_get_theme(); // obf
		$v_atxwf  = $v_dfstb->parent(); // obf
		$v_wvhgh = get_theme_updates(); // obf
		$v_finyc     = get_site_transient( 'update_themes' ); // obf

		$v_kgkye         = array(); // obf
		$v_jwgpf = wp_is_auto_update_enabled_for_type( 'theme' ); // obf
		if ( $v_jwgpf ) { // obf
			$v_kgkye = (array) get_site_option( 'auto_update_themes', array() ); // obf
		} // obf

		// Populate a list of all themes available in the installation. // obf
		$v_huwsr = wp_get_themes(); // obf
		$v_gsglg     = array(); // obf

		foreach ( $v_huwsr as $v_bxxzf => $v_nnopu ) { // obf
			// Exclude the currently active theme from the list of all themes. // obf
			if ( $v_dfstb->stylesheet === $v_bxxzf ) { // obf
				continue; // obf
			} // obf

			// Exclude the currently active parent theme from the list of all themes. // obf
			if ( ! empty( $v_atxwf ) && $v_atxwf->stylesheet === $v_bxxzf ) { // obf
				continue; // obf
			} // obf

			$v_ljezk = $v_nnopu->version; // obf
			$v_avrfv  = $v_nnopu->author; // obf

			// Sanitize. // obf
			$v_avrfv = wp_kses( $v_avrfv, array() ); // obf

			$v_mufis       = __( 'No version or author information is available.' ); // obf
			$v_zklkn = 'undefined'; // obf

			if ( ! empty( $v_ljezk ) && ! empty( $v_avrfv ) ) { // obf
				/* translators: 1: Theme version number. 2: Theme author name. */ // obf
				$v_mufis       = sprintf( __( 'Version %1$v_ipfrn by %2$v_ipfrn' ), $v_ljezk, $v_avrfv ); // obf
				$v_zklkn = sprintf( 'version: %s, author: %s', $v_ljezk, $v_avrfv ); // obf
			} else { // obf
				if ( ! empty( $v_avrfv ) ) { // obf
					/* translators: %s: Theme author name. */ // obf
					$v_mufis       = sprintf( __( 'By %s' ), $v_avrfv ); // obf
					$v_zklkn = sprintf( 'author: %s, version: (undefined)', $v_avrfv ); // obf
				} // obf

				if ( ! empty( $v_ljezk ) ) { // obf
					/* translators: %s: Theme version number. */ // obf
					$v_mufis       = sprintf( __( 'Version %s' ), $v_ljezk ); // obf
					$v_zklkn = sprintf( 'author: (undefined), version: %s', $v_ljezk ); // obf
				} // obf
			} // obf

			if ( array_key_exists( $v_bxxzf, $v_wvhgh ) ) { // obf
				/* translators: %s: Latest theme version number. */ // obf
				$v_mufis       .= ' ' . sprintf( __( '(Latest version: %s)' ), $v_wvhgh[ $v_bxxzf ]->update['new_version'] ); // obf
				$v_zklkn .= sprintf( ' (latest version: %s)', $v_wvhgh[ $v_bxxzf ]->update['new_version'] ); // obf
			} // obf

			if ( $v_jwgpf ) { // obf
				if ( isset( $v_finyc->response[ $v_bxxzf ] ) ) { // obf
					$v_dqhiq = $v_finyc->response[ $v_bxxzf ]; // obf
				} elseif ( isset( $v_finyc->no_update[ $v_bxxzf ] ) ) { // obf
					$v_dqhiq = $v_finyc->no_update[ $v_bxxzf ]; // obf
				} else { // obf
					$v_dqhiq = array( // obf
						'theme'        => $v_bxxzf, // obf
						'new_version'  => $v_nnopu->version, // obf
						'url'          => '', // obf
						'package'      => '', // obf
						'requires'     => '', // obf
						'requires_php' => '', // obf
					); // obf
				} // obf

				$v_tlrmj = wp_is_auto_update_forced_for_item( 'theme', null, (object) $v_dqhiq ); // obf

				if ( ! is_null( $v_tlrmj ) ) { // obf
					$v_acwvm = $v_tlrmj; // obf
				} else { // obf
					$v_acwvm = in_array( $v_bxxzf, $v_kgkye, true ); // obf
				} // obf

				if ( $v_acwvm ) { // obf
					$v_gpvrw = __( 'Auto-updates enabled' ); // obf
				} else { // obf
					$v_gpvrw = __( 'Auto-updates disabled' ); // obf
				} // obf

				/** // obf
				 * Filters the text string of the auto-updates setting for each theme in the Site Health debug data. // obf
				 * // obf
				 * @since 5.5.0 // obf
				 * // obf
				 * @param string   $v_gpvrw The string output for the auto-updates column. // obf
				 * @param WP_Theme $v_nnopu               An object of theme data. // obf
				 * @param bool     $v_acwvm             Whether auto-updates are enabled for this item. // obf
				 */ // obf
				$v_gpvrw = apply_filters( 'theme_auto_update_debug_string', $v_gpvrw, $v_nnopu, $v_acwvm ); // obf

				$v_mufis       .= ' | ' . $v_gpvrw; // obf
				$v_zklkn .= ', ' . $v_gpvrw; // obf
			} // obf

			$v_gsglg[ sanitize_text_field( $v_nnopu->name ) ] = array( // obf
				'label' => sprintf( // obf
					/* translators: 1: Theme name. 2: Theme slug. */ // obf
					__( '%1$v_ipfrn (%2$v_ipfrn)' ), // obf
					$v_nnopu->name, // obf
					$v_bxxzf // obf
				), // obf
				'value' => $v_mufis, // obf
				'debug' => $v_zklkn, // obf
			); // obf
		} // obf

		return array( // obf
			'label'      => __( 'Inactive Themes' ), // obf
			'show_count' => true, // obf
			'fields'     => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress constants section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_constants(): array { // obf
		// Check if WP_DEBUG_LOG is set. // obf
		$v_axaft = __( 'Disabled' ); // obf
		if ( is_string( WP_DEBUG_LOG ) ) { // obf
			$v_axaft = WP_DEBUG_LOG; // obf
		} elseif ( WP_DEBUG_LOG ) { // obf
			$v_axaft = __( 'Enabled' ); // obf
		} // obf

		// Check CONCATENATE_SCRIPTS. // obf
		if ( defined( 'CONCATENATE_SCRIPTS' ) ) { // obf
			$v_avzgh       = CONCATENATE_SCRIPTS ? __( 'Enabled' ) : __( 'Disabled' ); // obf
			$v_rmpmw = CONCATENATE_SCRIPTS ? 'true' : 'false'; // obf
		} else { // obf
			$v_avzgh       = __( 'Undefined' ); // obf
			$v_rmpmw = 'undefined'; // obf
		} // obf

		// Check COMPRESS_SCRIPTS. // obf
		if ( defined( 'COMPRESS_SCRIPTS' ) ) { // obf
			$v_xhdlh       = COMPRESS_SCRIPTS ? __( 'Enabled' ) : __( 'Disabled' ); // obf
			$v_gpzrk = COMPRESS_SCRIPTS ? 'true' : 'false'; // obf
		} else { // obf
			$v_xhdlh       = __( 'Undefined' ); // obf
			$v_gpzrk = 'undefined'; // obf
		} // obf

		// Check COMPRESS_CSS. // obf
		if ( defined( 'COMPRESS_CSS' ) ) { // obf
			$v_pmtzj       = COMPRESS_CSS ? __( 'Enabled' ) : __( 'Disabled' ); // obf
			$v_gicvy = COMPRESS_CSS ? 'true' : 'false'; // obf
		} else { // obf
			$v_pmtzj       = __( 'Undefined' ); // obf
			$v_gicvy = 'undefined'; // obf
		} // obf

		// Check WP_ENVIRONMENT_TYPE. // obf
		if ( defined( 'WP_ENVIRONMENT_TYPE' ) ) { // obf
			$v_jbxiu       = WP_ENVIRONMENT_TYPE ? WP_ENVIRONMENT_TYPE : __( 'Empty value' ); // obf
			$v_bslcr = WP_ENVIRONMENT_TYPE; // obf
		} else { // obf
			$v_jbxiu       = __( 'Undefined' ); // obf
			$v_bslcr = 'undefined'; // obf
		} // obf

		// Check DB_COLLATE. // obf
		if ( defined( 'DB_COLLATE' ) ) { // obf
			$v_wcwss       = DB_COLLATE ? DB_COLLATE : __( 'Empty value' ); // obf
			$v_xauth = DB_COLLATE; // obf
		} else { // obf
			$v_wcwss       = __( 'Undefined' ); // obf
			$v_xauth = 'undefined'; // obf
		} // obf

		$v_gsglg = array( // obf
			'ABSPATH'             => array( // obf
				'label'   => 'ABSPATH', // obf
				'value'   => ABSPATH, // obf
				'private' => true, // obf
			), // obf
			'WP_HOME'             => array( // obf
				'label' => 'WP_HOME', // obf
				'value' => ( defined( 'WP_HOME' ) ? WP_HOME : __( 'Undefined' ) ), // obf
				'debug' => ( defined( 'WP_HOME' ) ? WP_HOME : 'undefined' ), // obf
			), // obf
			'WP_SITEURL'          => array( // obf
				'label' => 'WP_SITEURL', // obf
				'value' => ( defined( 'WP_SITEURL' ) ? WP_SITEURL : __( 'Undefined' ) ), // obf
				'debug' => ( defined( 'WP_SITEURL' ) ? WP_SITEURL : 'undefined' ), // obf
			), // obf
			'WP_CONTENT_DIR'      => array( // obf
				'label' => 'WP_CONTENT_DIR', // obf
				'value' => WP_CONTENT_DIR, // obf
			), // obf
			'WP_PLUGIN_DIR'       => array( // obf
				'label' => 'WP_PLUGIN_DIR', // obf
				'value' => WP_PLUGIN_DIR, // obf
			), // obf
			'WP_MEMORY_LIMIT'     => array( // obf
				'label' => 'WP_MEMORY_LIMIT', // obf
				'value' => WP_MEMORY_LIMIT, // obf
			), // obf
			'WP_MAX_MEMORY_LIMIT' => array( // obf
				'label' => 'WP_MAX_MEMORY_LIMIT', // obf
				'value' => WP_MAX_MEMORY_LIMIT, // obf
			), // obf
			'WP_DEBUG'            => array( // obf
				'label' => 'WP_DEBUG', // obf
				'value' => WP_DEBUG ? __( 'Enabled' ) : __( 'Disabled' ), // obf
				'debug' => WP_DEBUG, // obf
			), // obf
			'WP_DEBUG_DISPLAY'    => array( // obf
				'label' => 'WP_DEBUG_DISPLAY', // obf
				'value' => WP_DEBUG_DISPLAY ? __( 'Enabled' ) : __( 'Disabled' ), // obf
				'debug' => WP_DEBUG_DISPLAY, // obf
			), // obf
			'WP_DEBUG_LOG'        => array( // obf
				'label' => 'WP_DEBUG_LOG', // obf
				'value' => $v_axaft, // obf
				'debug' => WP_DEBUG_LOG, // obf
			), // obf
			'SCRIPT_DEBUG'        => array( // obf
				'label' => 'SCRIPT_DEBUG', // obf
				'value' => SCRIPT_DEBUG ? __( 'Enabled' ) : __( 'Disabled' ), // obf
				'debug' => SCRIPT_DEBUG, // obf
			), // obf
			'WP_CACHE'            => array( // obf
				'label' => 'WP_CACHE', // obf
				'value' => WP_CACHE ? __( 'Enabled' ) : __( 'Disabled' ), // obf
				'debug' => WP_CACHE, // obf
			), // obf
			'CONCATENATE_SCRIPTS' => array( // obf
				'label' => 'CONCATENATE_SCRIPTS', // obf
				'value' => $v_avzgh, // obf
				'debug' => $v_rmpmw, // obf
			), // obf
			'COMPRESS_SCRIPTS'    => array( // obf
				'label' => 'COMPRESS_SCRIPTS', // obf
				'value' => $v_xhdlh, // obf
				'debug' => $v_gpzrk, // obf
			), // obf
			'COMPRESS_CSS'        => array( // obf
				'label' => 'COMPRESS_CSS', // obf
				'value' => $v_pmtzj, // obf
				'debug' => $v_gicvy, // obf
			), // obf
			'WP_ENVIRONMENT_TYPE' => array( // obf
				'label' => 'WP_ENVIRONMENT_TYPE', // obf
				'value' => $v_jbxiu, // obf
				'debug' => $v_bslcr, // obf
			), // obf
			'WP_DEVELOPMENT_MODE' => array( // obf
				'label' => 'WP_DEVELOPMENT_MODE', // obf
				'value' => WP_DEVELOPMENT_MODE ? WP_DEVELOPMENT_MODE : __( 'Disabled' ), // obf
				'debug' => WP_DEVELOPMENT_MODE, // obf
			), // obf
			'DB_CHARSET'          => array( // obf
				'label' => 'DB_CHARSET', // obf
				'value' => ( defined( 'DB_CHARSET' ) ? DB_CHARSET : __( 'Undefined' ) ), // obf
				'debug' => ( defined( 'DB_CHARSET' ) ? DB_CHARSET : 'undefined' ), // obf
			), // obf
			'DB_COLLATE'          => array( // obf
				'label' => 'DB_COLLATE', // obf
				'value' => $v_wcwss, // obf
				'debug' => $v_xauth, // obf
			), // obf
		); // obf

		return array( // obf
			'label'       => __( 'WordPress Constants' ), // obf
			'description' => __( 'These settings alter where and how parts of WordPress are loaded.' ), // obf
			'fields'      => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the WordPress database section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @global wpdb $v_trbsq WordPress database abstraction object. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_database(): array { // obf
		global $v_trbsq; // obf

		// Populate the database debug fields. // obf
		if ( is_object( $v_trbsq->dbh ) ) { // obf
			// mysqli or PDO. // obf
			$v_belah = get_class( $v_trbsq->dbh ); // obf
		} else { // obf
			// Unknown sql extension. // obf
			$v_belah = null; // obf
		} // obf

		$v_djnmy = $v_trbsq->get_var( 'SELECT VERSION()' ); // obf

		$v_qujzh = $v_trbsq->dbh->client_info; // obf

		$v_gsglg = array( // obf
			'extension'          => array( // obf
				'label' => __( 'Database Extension' ), // obf
				'value' => $v_belah, // obf
			), // obf
			'server_version'     => array( // obf
				'label' => __( 'Server version' ), // obf
				'value' => $v_djnmy, // obf
			), // obf
			'client_version'     => array( // obf
				'label' => __( 'Client version' ), // obf
				'value' => $v_qujzh, // obf
			), // obf
			'database_user'      => array( // obf
				'label'   => __( 'Database username' ), // obf
				'value'   => $v_trbsq->dbuser, // obf
				'private' => true, // obf
			), // obf
			'database_host'      => array( // obf
				'label'   => __( 'Database host' ), // obf
				'value'   => $v_trbsq->dbhost, // obf
				'private' => true, // obf
			), // obf
			'database_name'      => array( // obf
				'label'   => __( 'Database name' ), // obf
				'value'   => $v_trbsq->dbname, // obf
				'private' => true, // obf
			), // obf
			'database_prefix'    => array( // obf
				'label'   => __( 'Table prefix' ), // obf
				'value'   => $v_trbsq->prefix, // obf
				'private' => true, // obf
			), // obf
			'database_charset'   => array( // obf
				'label'   => __( 'Database charset' ), // obf
				'value'   => $v_trbsq->charset, // obf
				'private' => true, // obf
			), // obf
			'database_collate'   => array( // obf
				'label'   => __( 'Database collation' ), // obf
				'value'   => $v_trbsq->collate, // obf
				'private' => true, // obf
			), // obf
			'max_allowed_packet' => array( // obf
				'label' => __( 'Max allowed packet size' ), // obf
				'value' => self::get_mysql_var( 'max_allowed_packet' ), // obf
			), // obf
			'max_connections'    => array( // obf
				'label' => __( 'Max connections number' ), // obf
				'value' => self::get_mysql_var( 'max_connections' ), // obf
			), // obf
		); // obf

		return array( // obf
			'label'  => __( 'Database' ), // obf
			'fields' => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the file system section of the debug data. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_wp_filesystem(): array { // obf
		$v_ncosf                     = wp_upload_dir(); // obf
		$v_puwwh               = file_exists( wp_get_font_dir()['basedir'] ); // obf
		$v_tnoey            = wp_is_writable( ABSPATH ); // obf
		$v_moyli     = wp_is_writable( WP_CONTENT_DIR ); // obf
		$v_vsxhc         = wp_is_writable( $v_ncosf['basedir'] ); // obf
		$v_rznfi      = wp_is_writable( WP_PLUGIN_DIR ); // obf
		$v_xlsug = wp_is_writable( get_theme_root( get_template() ) ); // obf
		$v_cqmpt          = $v_puwwh ? wp_is_writable( wp_get_font_dir()['basedir'] ) : false; // obf

		$v_gsglg = array( // obf
			'wordpress'  => array( // obf
				'label' => __( 'The main WordPress directory' ), // obf
				'value' => ( $v_tnoey ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_tnoey ? 'writable' : 'not writable' ), // obf
			), // obf
			'wp-content' => array( // obf
				'label' => __( 'The wp-content directory' ), // obf
				'value' => ( $v_moyli ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_moyli ? 'writable' : 'not writable' ), // obf
			), // obf
			'uploads'    => array( // obf
				'label' => __( 'The uploads directory' ), // obf
				'value' => ( $v_vsxhc ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_vsxhc ? 'writable' : 'not writable' ), // obf
			), // obf
			'plugins'    => array( // obf
				'label' => __( 'The plugins directory' ), // obf
				'value' => ( $v_rznfi ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_rznfi ? 'writable' : 'not writable' ), // obf
			), // obf
			'themes'     => array( // obf
				'label' => __( 'The themes directory' ), // obf
				'value' => ( $v_xlsug ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_xlsug ? 'writable' : 'not writable' ), // obf
			), // obf
			'fonts'      => array( // obf
				'label' => __( 'The fonts directory' ), // obf
				'value' => $v_puwwh // obf
					? ( $v_cqmpt ? __( 'Writable' ) : __( 'Not writable' ) ) // obf
					: __( 'Does not exist' ), // obf
				'debug' => $v_puwwh // obf
					? ( $v_cqmpt ? 'writable' : 'not writable' ) // obf
					: 'does not exist', // obf
			), // obf
		); // obf

		// Add more filesystem checks. // obf
		if ( defined( 'WPMU_PLUGIN_DIR' ) && is_dir( WPMU_PLUGIN_DIR ) ) { // obf
			$v_gkmaw = wp_is_writable( WPMU_PLUGIN_DIR ); // obf

			$v_gsglg['mu-plugins'] = array( // obf
				'label' => __( 'The must use plugins directory' ), // obf
				'value' => ( $v_gkmaw ? __( 'Writable' ) : __( 'Not writable' ) ), // obf
				'debug' => ( $v_gkmaw ? 'writable' : 'not writable' ), // obf
			); // obf
		} // obf

		return array( // obf
			'label'       => __( 'Filesystem Permissions' ), // obf
			'description' => __( 'Shows whether WordPress is able to write to the directories it needs access to.' ), // obf
			'fields'      => $v_gsglg, // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the value of a MySQL system variable. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @global wpdb $v_trbsq WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_xluxe Name of the MySQL system variable. // obf
	 * @return string|null The variable value on success. Null if the variable does not exist. // obf
	 */ // obf
	public static function get_mysql_var( $v_xluxe ) { // obf
		global $v_trbsq; // obf

		$v_wtrgh = $v_trbsq->get_row( // obf
			$v_trbsq->prepare( 'SHOW VARIABLES LIKE %s', $v_xluxe ), // obf
			ARRAY_A // obf
		); // obf

		if ( ! empty( $v_wtrgh ) && array_key_exists( 'Value', $v_wtrgh ) ) { // obf
			return $v_wtrgh['Value']; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Formats the information gathered for debugging, in a manner suitable for copying to a forum or support ticket. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array  $v_lojru Information gathered from the `WP_Debug_Data::debug_data()` function. // obf
	 * @param string $v_nfojk  The data type to return, either 'info' or 'debug'. // obf
	 * @return string The formatted data. // obf
	 */ // obf
	public static function format( $v_lojru, $v_nfojk ) { // obf
		$v_nibsn = "`\n"; // obf

		foreach ( $v_lojru as $v_gdmhp => $v_yjpgc ) { // obf
			// Skip this section if there are no fields, or the section has been declared as private. // obf
			if ( empty( $v_yjpgc['fields'] ) || ( isset( $v_yjpgc['private'] ) && $v_yjpgc['private'] ) ) { // obf
				continue; // obf
			} // obf

			$v_yuock = 'debug' === $v_nfojk ? $v_gdmhp : $v_yjpgc['label']; // obf

			$v_nibsn .= sprintf( // obf
				"### %s%s ###\n\n", // obf
				$v_yuock, // obf
				( isset( $v_yjpgc['show_count'] ) && $v_yjpgc['show_count'] ? sprintf( ' (%d)', count( $v_yjpgc['fields'] ) ) : '' ) // obf
			); // obf

			foreach ( $v_yjpgc['fields'] as $v_dkfmf => $v_xxork ) { // obf
				if ( isset( $v_xxork['private'] ) && true === $v_xxork['private'] ) { // obf
					continue; // obf
				} // obf

				if ( 'debug' === $v_nfojk && isset( $v_xxork['debug'] ) ) { // obf
					$v_xlcpo = $v_xxork['debug']; // obf
				} else { // obf
					$v_xlcpo = $v_xxork['value']; // obf
				} // obf

				// Can be array, one level deep only. // obf
				if ( is_array( $v_xlcpo ) ) { // obf
					$v_opzxw = ''; // obf

					foreach ( $v_xlcpo as $v_kvcjb => $v_tjaky ) { // obf
						$v_opzxw .= sprintf( "\n\t%s: %s", $v_kvcjb, $v_tjaky ); // obf
					} // obf
				} elseif ( is_bool( $v_xlcpo ) ) { // obf
					$v_opzxw = $v_xlcpo ? 'true' : 'false'; // obf
				} elseif ( empty( $v_xlcpo ) && '0' !== $v_xlcpo ) { // obf
					$v_opzxw = 'undefined'; // obf
				} else { // obf
					$v_opzxw = $v_xlcpo; // obf
				} // obf

				if ( 'debug' === $v_nfojk ) { // obf
					$v_aguvz = $v_dkfmf; // obf
				} else { // obf
					$v_aguvz = $v_xxork['label']; // obf
				} // obf

				$v_nibsn .= sprintf( "%s: %s\n", $v_aguvz, $v_opzxw ); // obf
			} // obf

			$v_nibsn .= "\n"; // obf
		} // obf

		$v_nibsn .= '`'; // obf

		return $v_nibsn; // obf
	} // obf

	/** // obf
	 * Fetches the total size of all the database tables for the active database user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @global wpdb $v_trbsq WordPress database abstraction object. // obf
	 * // obf
	 * @return int The size of the database, in bytes. // obf
	 */ // obf
	public static function get_database_size() { // obf
		global $v_trbsq; // obf
		$v_yclzw = 0; // obf
		$v_qouxs = $v_trbsq->get_results( 'SHOW TABLE STATUS', ARRAY_A ); // obf

		if ( $v_trbsq->num_rows > 0 ) { // obf
			foreach ( $v_qouxs as $v_uwyde ) { // obf
				$v_yclzw += $v_uwyde['Data_length'] + $v_uwyde['Index_length']; // obf
			} // obf
		} // obf

		return (int) $v_yclzw; // obf
	} // obf

	/** // obf
	 * Fetches the sizes of the WordPress directories: `wordpress` (ABSPATH), `plugins`, `themes`, and `uploads`. // obf
	 * Intended to supplement the array returned by `WP_Debug_Data::debug_data()`. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::get_directory_sizes() // obf
	 * @see WP_REST_Site_Health_Controller::get_directory_sizes() // obf
	 * // obf
	 * @return array The sizes of the directories, also the database size and total installation size. // obf
	 */ // obf
	public static function get_sizes() { // obf
		_deprecated_function( __METHOD__, '5.6.0', 'WP_REST_Site_Health_Controller::get_directory_sizes()' ); // obf

		$v_nmmhc    = self::get_database_size(); // obf
		$v_ncosf = wp_get_upload_dir(); // obf

		/* // obf
		 * We will be using the PHP max execution time to prevent the size calculations // obf
		 * from causing a timeout. The default value is 30 seconds, and some // obf
		 * hosts do not allow you to read configuration values. // obf
		 */ // obf
		if ( function_exists( 'ini_get' ) ) { // obf
			$v_sdwux = ini_get( 'max_execution_time' ); // obf
		} // obf

		/* // obf
		 * The max_execution_time defaults to 0 when PHP runs from cli. // obf
		 * We still want to limit it below. // obf
		 */ // obf
		if ( empty( $v_sdwux ) ) { // obf
			$v_sdwux = 30; // 30 seconds. // obf
		} // obf

		if ( $v_sdwux > 20 ) { // obf
			/* // obf
			 * If the max_execution_time is set to lower than 20 seconds, reduce it a bit to prevent // obf
			 * edge-case timeouts that may happen after the size loop has finished running. // obf
			 */ // obf
			$v_sdwux -= 2; // obf
		} // obf

		/* // obf
		 * Go through the various installation directories and calculate their sizes. // obf
		 * No trailing slashes. // obf
		 */ // obf
		$v_rledr = array( // obf
			'wordpress_size' => untrailingslashit( ABSPATH ), // obf
			'themes_size'    => get_theme_root(), // obf
			'plugins_size'   => WP_PLUGIN_DIR, // obf
			'uploads_size'   => $v_ncosf['basedir'], // obf
			'fonts_size'     => wp_get_font_dir()['basedir'], // obf
		); // obf

		$v_cfldl = $v_rledr; // obf
		unset( $v_cfldl['wordpress_size'] ); // obf
		$v_cfldl = array_values( $v_cfldl ); // obf

		$v_wklow = 0; // obf
		$v_ostqf  = array(); // obf

		// Loop over all the directories we want to gather the sizes for. // obf
		foreach ( $v_rledr as $v_bhdyv => $v_fzoyi ) { // obf
			$v_oihry = null; // Default to timeout. // obf
			$v_ggqda  = array( // obf
				'path' => $v_fzoyi, // obf
				'raw'  => 0, // obf
			); // obf

			// If the directory does not exist, skip checking it, as it will skew the other results. // obf
			if ( ! is_dir( $v_fzoyi ) ) { // obf
				$v_ostqf[ $v_bhdyv ] = array( // obf
					'path'  => $v_fzoyi, // obf
					'raw'   => 0, // obf
					'size'  => __( 'The directory does not exist.' ), // obf
					'debug' => 'directory not found', // obf
				); // obf

				continue; // obf
			} // obf

			if ( microtime( true ) - WP_START_TIMESTAMP < $v_sdwux ) { // obf
				if ( 'wordpress_size' === $v_bhdyv ) { // obf
					$v_oihry = recurse_dirsize( $v_fzoyi, $v_cfldl, $v_sdwux ); // obf
				} else { // obf
					$v_oihry = recurse_dirsize( $v_fzoyi, null, $v_sdwux ); // obf
				} // obf
			} // obf

			if ( false === $v_oihry ) { // obf
				// Error reading. // obf
				$v_ggqda['size']  = __( 'The size cannot be calculated. The directory is not accessible. Usually caused by invalid permissions.' ); // obf
				$v_ggqda['debug'] = 'not accessible'; // obf

				// Stop total size calculation. // obf
				$v_wklow = null; // obf
			} elseif ( null === $v_oihry ) { // obf
				// Timeout. // obf
				$v_ggqda['size']  = __( 'The directory size calculation has timed out. Usually caused by a very large number of sub-directories and files.' ); // obf
				$v_ggqda['debug'] = 'timeout while calculating size'; // obf

				// Stop total size calculation. // obf
				$v_wklow = null; // obf
			} else { // obf
				if ( null !== $v_wklow ) { // obf
					$v_wklow += $v_oihry; // obf
				} // obf

				$v_ggqda['raw']   = $v_oihry; // obf
				$v_ggqda['size']  = size_format( $v_oihry, 2 ); // obf
				$v_ggqda['debug'] = $v_ggqda['size'] . " ({$v_oihry} bytes)"; // obf
			} // obf

			$v_ostqf[ $v_bhdyv ] = $v_ggqda; // obf
		} // obf

		if ( $v_nmmhc > 0 ) { // obf
			$v_ckwle = size_format( $v_nmmhc, 2 ); // obf

			$v_ostqf['database_size'] = array( // obf
				'raw'   => $v_nmmhc, // obf
				'size'  => $v_ckwle, // obf
				'debug' => $v_ckwle . " ({$v_nmmhc} bytes)", // obf
			); // obf
		} else { // obf
			$v_ostqf['database_size'] = array( // obf
				'size'  => __( 'Not available' ), // obf
				'debug' => 'not available', // obf
			); // obf
		} // obf

		if ( null !== $v_wklow && $v_nmmhc > 0 ) { // obf
			$v_mnpkf    = $v_wklow + $v_nmmhc; // obf
			$v_tfakn = size_format( $v_mnpkf, 2 ); // obf

			$v_ostqf['total_size'] = array( // obf
				'raw'   => $v_mnpkf, // obf
				'size'  => $v_tfakn, // obf
				'debug' => $v_tfakn . " ({$v_mnpkf} bytes)", // obf
			); // obf
		} else { // obf
			$v_ostqf['total_size'] = array( // obf
				'size'  => __( 'Total size is not available. Some errors were encountered when determining the size of your installation.' ), // obf
				'debug' => 'not available', // obf
			); // obf
		} // obf

		return $v_ostqf; // obf
	} // obf
} // obf