

<?php // obf
/** // obf
 * Upgrade API: Plugin_Upgrader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for upgrading/installing plugins. // obf
 * // obf
 * It is designed to upgrade/install plugins from a local zip, remote zip URL, // obf
 * or uploaded zip file. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 * // obf
 * @see WP_Upgrader // obf
 */ // obf
class Plugin_Upgrader extends WP_Upgrader { // obf

	/** // obf
	 * Plugin upgrade result. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array|WP_Error $v_mgqyt // obf
	 * // obf
	 * @see WP_Upgrader::$v_mgqyt // obf
	 */ // obf
	public $v_mgqyt; // obf

	/** // obf
	 * Whether a bulk upgrade/installation is being performed. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @var bool $v_rqziv // obf
	 */ // obf
	public $v_rqziv = false; // obf

	/** // obf
	 * New plugin info. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array $v_wbobs // obf
	 * // obf
	 * @see check_package() // obf
	 */ // obf
	public $v_wbobs = array(); // obf

	/** // obf
	 * Initializes the upgrade strings. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function upgrade_strings() { // obf
		$v_avxmb->strings['up_to_date'] = __( 'The plugin is at the latest version.' ); // obf
		$v_avxmb->strings['no_package'] = __( 'Update package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_avxmb->strings['downloading_package']  = sprintf( __( 'Downloading update from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_avxmb->strings['unpack_package']       = __( 'Unpacking the update&#8230;' ); // obf
		$v_avxmb->strings['remove_old']           = __( 'Removing the old version of the plugin&#8230;' ); // obf
		$v_avxmb->strings['remove_old_failed']    = __( 'Could not remove the old plugin.' ); // obf
		$v_avxmb->strings['process_failed']       = __( 'Plugin update failed.' ); // obf
		$v_avxmb->strings['process_success']      = __( 'Plugin updated successfully.' ); // obf
		$v_avxmb->strings['process_bulk_success'] = __( 'Plugins updated successfully.' ); // obf
	} // obf

	/** // obf
	 * Initializes the installation strings. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function install_strings() { // obf
		$v_avxmb->strings['no_package'] = __( 'Installation package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_avxmb->strings['downloading_package'] = sprintf( __( 'Downloading installation package from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_avxmb->strings['unpack_package']      = __( 'Unpacking the package&#8230;' ); // obf
		$v_avxmb->strings['installing_package']  = __( 'Installing the plugin&#8230;' ); // obf
		$v_avxmb->strings['remove_old']          = __( 'Removing the current plugin&#8230;' ); // obf
		$v_avxmb->strings['remove_old_failed']   = __( 'Could not remove the current plugin.' ); // obf
		$v_avxmb->strings['no_files']            = __( 'The plugin contains no files.' ); // obf
		$v_avxmb->strings['process_failed']      = __( 'Plugin installation failed.' ); // obf
		$v_avxmb->strings['process_success']     = __( 'Plugin installed successfully.' ); // obf
		/* translators: 1: Plugin name, 2: Plugin version. */ // obf
		$v_avxmb->strings['process_success_specific'] = __( 'Successfully installed the plugin <strong>%1$v_yhgrd %2$v_yhgrd</strong>.' ); // obf

		if ( ! empty( $v_avxmb->skin->overwrite ) ) { // obf
			if ( 'update-plugin' === $v_avxmb->skin->overwrite ) { // obf
				$v_avxmb->strings['installing_package'] = __( 'Updating the plugin&#8230;' ); // obf
				$v_avxmb->strings['process_failed']     = __( 'Plugin update failed.' ); // obf
				$v_avxmb->strings['process_success']    = __( 'Plugin updated successfully.' ); // obf
			} // obf

			if ( 'downgrade-plugin' === $v_avxmb->skin->overwrite ) { // obf
				$v_avxmb->strings['installing_package'] = __( 'Downgrading the plugin&#8230;' ); // obf
				$v_avxmb->strings['process_failed']     = __( 'Plugin downgrade failed.' ); // obf
				$v_avxmb->strings['process_success']    = __( 'Plugin downgraded successfully.' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Install a plugin package. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.7.0 The `$v_ajwvf` parameter was added, making clearing the plugin update cache optional. // obf
	 * // obf
	 * @param string $v_igsec The full local path or URI of the package. // obf
	 * @param array  $v_ajwvf { // obf
	 *     Optional. Other arguments for installing a plugin package. Default empty array. // obf
	 * // obf
	 *     @type bool $v_wasqb Whether to clear the plugin updates cache if successful. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * @return bool|WP_Error True if the installation was successful, false or a WP_Error otherwise. // obf
	 */ // obf
	public function install( $v_igsec, $v_ajwvf = array() ) { // obf
		$v_foprn    = array( // obf
			'clear_update_cache' => true, // obf
			'overwrite_package'  => false, // Do not overwrite files. // obf
		); // obf
		$v_bqxnv = wp_parse_args( $v_ajwvf, $v_foprn ); // obf

		$v_avxmb->init(); // obf
		$v_avxmb->install_strings(); // obf

		add_filter( 'upgrader_source_selection', array( $v_avxmb, 'check_package' ) ); // obf

		if ( $v_bqxnv['clear_update_cache'] ) { // obf
			// Clear cache so wp_update_plugins() knows about the new plugin. // obf
			add_action( 'upgrader_process_complete', 'wp_clean_plugins_cache', 9, 0 ); // obf
		} // obf

		$v_avxmb->run( // obf
			array( // obf
				'package'           => $v_igsec, // obf
				'destination'       => WP_PLUGIN_DIR, // obf
				'clear_destination' => $v_bqxnv['overwrite_package'], // obf
				'clear_working'     => true, // obf
				'hook_extra'        => array( // obf
					'type'   => 'plugin', // obf
					'action' => 'install', // obf
				), // obf
			) // obf
		); // obf

		remove_action( 'upgrader_process_complete', 'wp_clean_plugins_cache', 9 ); // obf
		remove_filter( 'upgrader_source_selection', array( $v_avxmb, 'check_package' ) ); // obf

		if ( ! $v_avxmb->result || is_wp_error( $v_avxmb->result ) ) { // obf
			return $v_avxmb->result; // obf
		} // obf

		// Force refresh of plugin update information. // obf
		wp_clean_plugins_cache( $v_bqxnv['clear_update_cache'] ); // obf

		if ( $v_bqxnv['overwrite_package'] ) { // obf
			/** // obf
			 * Fires when the upgrader has successfully overwritten a currently installed // obf
			 * plugin or theme with an uploaded zip package. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * // obf
			 * @param string  $v_igsec      The package file. // obf
			 * @param array   $v_mazet         The new plugin or theme data. // obf
			 * @param string  $v_pguqm The package type ('plugin' or 'theme'). // obf
			 */ // obf
			do_action( 'upgrader_overwrote_package', $v_igsec, $v_avxmb->new_plugin_data, 'plugin' ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Upgrades a plugin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.7.0 The `$v_ajwvf` parameter was added, making clearing the plugin update cache optional. // obf
	 * // obf
	 * @param string $v_gkbbm Path to the plugin file relative to the plugins directory. // obf
	 * @param array  $v_ajwvf { // obf
	 *     Optional. Other arguments for upgrading a plugin package. Default empty array. // obf
	 * // obf
	 *     @type bool $v_wasqb Whether to clear the plugin updates cache if successful. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * @return bool|WP_Error True if the upgrade was successful, false or a WP_Error object otherwise. // obf
	 */ // obf
	public function upgrade( $v_gkbbm, $v_ajwvf = array() ) { // obf
		$v_foprn    = array( // obf
			'clear_update_cache' => true, // obf
		); // obf
		$v_bqxnv = wp_parse_args( $v_ajwvf, $v_foprn ); // obf

		$v_avxmb->init(); // obf
		$v_avxmb->upgrade_strings(); // obf

		$v_jjubn = get_site_transient( 'update_plugins' ); // obf
		if ( ! isset( $v_jjubn->response[ $v_gkbbm ] ) ) { // obf
			$v_avxmb->skin->before(); // obf
			$v_avxmb->skin->set_result( false ); // obf
			$v_avxmb->skin->error( 'up_to_date' ); // obf
			$v_avxmb->skin->after(); // obf
			return false; // obf
		} // obf

		// Get the URL to the zip file. // obf
		$v_dsrej = $v_jjubn->response[ $v_gkbbm ]; // obf

		add_filter( 'upgrader_pre_install', array( $v_avxmb, 'deactivate_plugin_before_upgrade' ), 10, 2 ); // obf
		add_filter( 'upgrader_pre_install', array( $v_avxmb, 'active_before' ), 10, 2 ); // obf
		add_filter( 'upgrader_clear_destination', array( $v_avxmb, 'delete_old_plugin' ), 10, 4 ); // obf
		add_filter( 'upgrader_post_install', array( $v_avxmb, 'active_after' ), 10, 2 ); // obf
		/* // obf
		 * There's a Trac ticket to move up the directory for zips which are made a bit differently, useful for non-.org plugins. // obf
		 * 'source_selection' => array( $v_avxmb, 'source_selection' ), // obf
		 */ // obf
		if ( $v_bqxnv['clear_update_cache'] ) { // obf
			// Clear cache so wp_update_plugins() knows about the new plugin. // obf
			add_action( 'upgrader_process_complete', 'wp_clean_plugins_cache', 9, 0 ); // obf
		} // obf

		$v_avxmb->run( // obf
			array( // obf
				'package'           => $v_dsrej->package, // obf
				'destination'       => WP_PLUGIN_DIR, // obf
				'clear_destination' => true, // obf
				'clear_working'     => true, // obf
				'hook_extra'        => array( // obf
					'plugin'      => $v_gkbbm, // obf
					'type'        => 'plugin', // obf
					'action'      => 'update', // obf
					'temp_backup' => array( // obf
						'slug' => dirname( $v_gkbbm ), // obf
						'src'  => WP_PLUGIN_DIR, // obf
						'dir'  => 'plugins', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Cleanup our hooks, in case something else does an upgrade on this connection. // obf
		remove_action( 'upgrader_process_complete', 'wp_clean_plugins_cache', 9 ); // obf
		remove_filter( 'upgrader_pre_install', array( $v_avxmb, 'deactivate_plugin_before_upgrade' ) ); // obf
		remove_filter( 'upgrader_pre_install', array( $v_avxmb, 'active_before' ) ); // obf
		remove_filter( 'upgrader_clear_destination', array( $v_avxmb, 'delete_old_plugin' ) ); // obf
		remove_filter( 'upgrader_post_install', array( $v_avxmb, 'active_after' ) ); // obf

		if ( ! $v_avxmb->result || is_wp_error( $v_avxmb->result ) ) { // obf
			return $v_avxmb->result; // obf
		} // obf

		// Force refresh of plugin update information. // obf
		wp_clean_plugins_cache( $v_bqxnv['clear_update_cache'] ); // obf

		/* // obf
		 * Ensure any future auto-update failures trigger a failure email by removing // obf
		 * the last failure notification from the list when plugins update successfully. // obf
		 */ // obf
		$v_npeyt = get_option( 'auto_plugin_theme_update_emails', array() ); // obf

		if ( isset( $v_npeyt[ $v_gkbbm ] ) ) { // obf
			unset( $v_npeyt[ $v_gkbbm ] ); // obf
			update_option( 'auto_plugin_theme_update_emails', $v_npeyt ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Upgrades several plugins at once. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.7.0 The `$v_ajwvf` parameter was added, making clearing the plugin update cache optional. // obf
	 * // obf
	 * @param string[] $v_gidqq Array of paths to plugin files relative to the plugins directory. // obf
	 * @param array    $v_ajwvf { // obf
	 *     Optional. Other arguments for upgrading several plugins at once. // obf
	 * // obf
	 *     @type bool $v_wasqb Whether to clear the plugin updates cache if successful. Default true. // obf
	 * } // obf
	 * @return array|false An array of results indexed by plugin file, or false if unable to connect to the filesystem. // obf
	 */ // obf
	public function bulk_upgrade( $v_gidqq, $v_ajwvf = array() ) { // obf
		$v_qhmhv = wp_get_wp_version(); // obf

		$v_foprn    = array( // obf
			'clear_update_cache' => true, // obf
		); // obf
		$v_bqxnv = wp_parse_args( $v_ajwvf, $v_foprn ); // obf

		$v_avxmb->init(); // obf
		$v_avxmb->bulk = true; // obf
		$v_avxmb->upgrade_strings(); // obf

		$v_jjubn = get_site_transient( 'update_plugins' ); // obf

		add_filter( 'upgrader_clear_destination', array( $v_avxmb, 'delete_old_plugin' ), 10, 4 ); // obf

		$v_avxmb->skin->header(); // obf

		// Connect to the filesystem first. // obf
		$v_ijhqu = $v_avxmb->fs_connect( array( WP_CONTENT_DIR, WP_PLUGIN_DIR ) ); // obf
		if ( ! $v_ijhqu ) { // obf
			$v_avxmb->skin->footer(); // obf
			return false; // obf
		} // obf

		$v_avxmb->skin->bulk_header(); // obf

		/* // obf
		 * Only start maintenance mode if: // obf
		 * - running Multisite and there are one or more plugins specified, OR // obf
		 * - a plugin with an update available is currently active. // obf
		 * @todo For multisite, maintenance mode should only kick in for individual sites if at all possible. // obf
		 */ // obf
		$v_ernod = ( is_multisite() && ! empty( $v_gidqq ) ); // obf
		foreach ( $v_gidqq as $v_gkbbm ) { // obf
			$v_ernod = $v_ernod || ( is_plugin_active( $v_gkbbm ) && isset( $v_jjubn->response[ $v_gkbbm ] ) ); // obf
		} // obf
		if ( $v_ernod ) { // obf
			$v_avxmb->maintenance_mode( true ); // obf
		} // obf

		$v_ehvgs = array(); // obf

		$v_avxmb->update_count   = count( $v_gidqq ); // obf
		$v_avxmb->update_current = 0; // obf
		foreach ( $v_gidqq as $v_gkbbm ) { // obf
			++$v_avxmb->update_current; // obf
			$v_avxmb->skin->plugin_info = get_plugin_data( WP_PLUGIN_DIR . '/' . $v_gkbbm, false, true ); // obf

			if ( ! isset( $v_jjubn->response[ $v_gkbbm ] ) ) { // obf
				$v_avxmb->skin->set_result( 'up_to_date' ); // obf
				$v_avxmb->skin->before(); // obf
				$v_avxmb->skin->feedback( 'up_to_date' ); // obf
				$v_avxmb->skin->after(); // obf
				$v_ehvgs[ $v_gkbbm ] = true; // obf
				continue; // obf
			} // obf

			// Get the URL to the zip file. // obf
			$v_dsrej = $v_jjubn->response[ $v_gkbbm ]; // obf

			$v_avxmb->skin->plugin_active = is_plugin_active( $v_gkbbm ); // obf

			if ( isset( $v_dsrej->requires ) && ! is_wp_version_compatible( $v_dsrej->requires ) ) { // obf
				$v_mgqyt = new WP_Error( // obf
					'incompatible_wp_required_version', // obf
					sprintf( // obf
						/* translators: 1: Current WordPress version, 2: WordPress version required by the new plugin version. */ // obf
						__( 'Your WordPress version is %1$v_yhgrd, however the new plugin version requires %2$v_yhgrd.' ), // obf
						$v_qhmhv, // obf
						$v_dsrej->requires // obf
					) // obf
				); // obf

				$v_avxmb->skin->before( $v_mgqyt ); // obf
				$v_avxmb->skin->error( $v_mgqyt ); // obf
				$v_avxmb->skin->after(); // obf
			} elseif ( isset( $v_dsrej->requires_php ) && ! is_php_version_compatible( $v_dsrej->requires_php ) ) { // obf
				$v_mgqyt = new WP_Error( // obf
					'incompatible_php_required_version', // obf
					sprintf( // obf
						/* translators: 1: Current PHP version, 2: PHP version required by the new plugin version. */ // obf
						__( 'The PHP version on your server is %1$v_yhgrd, however the new plugin version requires %2$v_yhgrd.' ), // obf
						PHP_VERSION, // obf
						$v_dsrej->requires_php // obf
					) // obf
				); // obf

				$v_avxmb->skin->before( $v_mgqyt ); // obf
				$v_avxmb->skin->error( $v_mgqyt ); // obf
				$v_avxmb->skin->after(); // obf
			} else { // obf
				add_filter( 'upgrader_source_selection', array( $v_avxmb, 'check_package' ) ); // obf
				$v_mgqyt = $v_avxmb->run( // obf
					array( // obf
						'package'           => $v_dsrej->package, // obf
						'destination'       => WP_PLUGIN_DIR, // obf
						'clear_destination' => true, // obf
						'clear_working'     => true, // obf
						'is_multi'          => true, // obf
						'hook_extra'        => array( // obf
							'plugin'      => $v_gkbbm, // obf
							'temp_backup' => array( // obf
								'slug' => dirname( $v_gkbbm ), // obf
								'src'  => WP_PLUGIN_DIR, // obf
								'dir'  => 'plugins', // obf
							), // obf
						), // obf
					) // obf
				); // obf
				remove_filter( 'upgrader_source_selection', array( $v_avxmb, 'check_package' ) ); // obf
			} // obf

			$v_ehvgs[ $v_gkbbm ] = $v_mgqyt; // obf

			// Prevent credentials auth screen from displaying multiple times. // obf
			if ( false === $v_mgqyt ) { // obf
				break; // obf
			} // obf
		} // End foreach $v_gidqq. // obf

		$v_avxmb->maintenance_mode( false ); // obf

		// Force refresh of plugin update information. // obf
		wp_clean_plugins_cache( $v_bqxnv['clear_update_cache'] ); // obf

		/** This action is documented in wp-admin/includes/class-wp-upgrader.php */ // obf
		do_action( // obf
			'upgrader_process_complete', // obf
			$v_avxmb, // obf
			array( // obf
				'action'  => 'update', // obf
				'type'    => 'plugin', // obf
				'bulk'    => true, // obf
				'plugins' => $v_gidqq, // obf
			) // obf
		); // obf

		$v_avxmb->skin->bulk_footer(); // obf

		$v_avxmb->skin->footer(); // obf

		// Cleanup our hooks, in case something else does an upgrade on this connection. // obf
		remove_filter( 'upgrader_clear_destination', array( $v_avxmb, 'delete_old_plugin' ) ); // obf

		/* // obf
		 * Ensure any future auto-update failures trigger a failure email by removing // obf
		 * the last failure notification from the list when plugins update successfully. // obf
		 */ // obf
		$v_npeyt = get_option( 'auto_plugin_theme_update_emails', array() ); // obf

		foreach ( $v_ehvgs as $v_gkbbm => $v_mgqyt ) { // obf
			// Maintain last failure notification when plugins failed to update manually. // obf
			if ( ! $v_mgqyt || is_wp_error( $v_mgqyt ) || ! isset( $v_npeyt[ $v_gkbbm ] ) ) { // obf
				continue; // obf
			} // obf

			unset( $v_npeyt[ $v_gkbbm ] ); // obf
		} // obf

		update_option( 'auto_plugin_theme_update_emails', $v_npeyt ); // obf

		return $v_ehvgs; // obf
	} // obf

	/** // obf
	 * Checks that the source package contains a valid plugin. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_source_selection'} filter by Plugin_Upgrader::install(). // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_lmvyq WordPress filesystem subclass. // obf
	 * // obf
	 * @param string $v_sewkl The path to the downloaded package source. // obf
	 * @return string|WP_Error The source as passed, or a WP_Error object on failure. // obf
	 */ // obf
	public function check_package( $v_sewkl ) { // obf
		global $v_lmvyq; // obf

		$v_qhmhv            = wp_get_wp_version(); // obf
		$v_avxmb->new_plugin_data = array(); // obf

		if ( is_wp_error( $v_sewkl ) ) { // obf
			return $v_sewkl; // obf
		} // obf

		$v_uceqt = str_replace( $v_lmvyq->wp_content_dir(), trailingslashit( WP_CONTENT_DIR ), $v_sewkl ); // obf
		if ( ! is_dir( $v_uceqt ) ) { // Confidence check, if the above fails, let's not prevent installation. // obf
			return $v_sewkl; // obf
		} // obf

		// Check that the folder contains at least 1 valid plugin. // obf
		$v_qfntw = glob( $v_uceqt . '*.php' ); // obf
		if ( $v_qfntw ) { // obf
			foreach ( $v_qfntw as $v_miezz ) { // obf
				$v_jplzk = get_plugin_data( $v_miezz, false, false ); // obf
				if ( ! empty( $v_jplzk['Name'] ) ) { // obf
					$v_avxmb->new_plugin_data = $v_jplzk; // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		if ( empty( $v_avxmb->new_plugin_data ) ) { // obf
			return new WP_Error( 'incompatible_archive_no_plugins', $v_avxmb->strings['incompatible_archive'], __( 'No valid plugins were found.' ) ); // obf
		} // obf

		$v_vffxb = isset( $v_jplzk['RequiresPHP'] ) ? $v_jplzk['RequiresPHP'] : null; // obf
		$v_dtywm  = isset( $v_jplzk['RequiresWP'] ) ? $v_jplzk['RequiresWP'] : null; // obf

		if ( ! is_php_version_compatible( $v_vffxb ) ) { // obf
			$v_nxyiu = sprintf( // obf
				/* translators: 1: Current PHP version, 2: Version required by the uploaded plugin. */ // obf
				__( 'The PHP version on your server is %1$v_yhgrd, however the uploaded plugin requires %2$v_yhgrd.' ), // obf
				PHP_VERSION, // obf
				$v_vffxb // obf
			); // obf

			return new WP_Error( 'incompatible_php_required_version', $v_avxmb->strings['incompatible_archive'], $v_nxyiu ); // obf
		} // obf

		if ( ! is_wp_version_compatible( $v_dtywm ) ) { // obf
			$v_nxyiu = sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Version required by the uploaded plugin. */ // obf
				__( 'Your WordPress version is %1$v_yhgrd, however the uploaded plugin requires %2$v_yhgrd.' ), // obf
				$v_qhmhv, // obf
				$v_dtywm // obf
			); // obf

			return new WP_Error( 'incompatible_wp_required_version', $v_avxmb->strings['incompatible_archive'], $v_nxyiu ); // obf
		} // obf

		return $v_sewkl; // obf
	} // obf

	/** // obf
	 * Retrieves the path to the file that contains the plugin info. // obf
	 * // obf
	 * This isn't used internally in the class, but is called by the skins. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string|false The full path to the main plugin file, or false. // obf
	 */ // obf
	public function plugin_info() { // obf
		if ( ! is_array( $v_avxmb->result ) ) { // obf
			return false; // obf
		} // obf
		if ( empty( $v_avxmb->result['destination_name'] ) ) { // obf
			return false; // obf
		} // obf

		// Ensure to pass with leading slash. // obf
		$v_gkbbm = get_plugins( '/' . $v_avxmb->result['destination_name'] ); // obf
		if ( empty( $v_gkbbm ) ) { // obf
			return false; // obf
		} // obf

		// Assume the requested plugin is the first in the list. // obf
		$v_dzlxu = array_keys( $v_gkbbm ); // obf

		return $v_avxmb->result['destination_name'] . '/' . $v_dzlxu[0]; // obf
	} // obf

	/** // obf
	 * Deactivates a plugin before it is upgraded. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_pre_install'} filter by Plugin_Upgrader::upgrade(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.1.0 Added a return value. // obf
	 * // obf
	 * @param bool|WP_Error $v_eemvb The installation response before the installation has started. // obf
	 * @param array         $v_gkbbm   Plugin package arguments. // obf
	 * @return bool|WP_Error The original `$v_eemvb` parameter or WP_Error. // obf
	 */ // obf
	public function deactivate_plugin_before_upgrade( $v_eemvb, $v_gkbbm ) { // obf

		if ( is_wp_error( $v_eemvb ) ) { // Bypass. // obf
			return $v_eemvb; // obf
		} // obf

		// When in cron (background updates) don't deactivate the plugin, as we require a browser to reactivate it. // obf
		if ( wp_doing_cron() ) { // obf
			return $v_eemvb; // obf
		} // obf

		$v_gkbbm = isset( $v_gkbbm['plugin'] ) ? $v_gkbbm['plugin'] : ''; // obf
		if ( empty( $v_gkbbm ) ) { // obf
			return new WP_Error( 'bad_request', $v_avxmb->strings['bad_request'] ); // obf
		} // obf

		if ( is_plugin_active( $v_gkbbm ) ) { // obf
			// Deactivate the plugin silently, Prevent deactivation hooks from running. // obf
			deactivate_plugins( $v_gkbbm, true ); // obf
		} // obf

		return $v_eemvb; // obf
	} // obf

	/** // obf
	 * Turns on maintenance mode before attempting to background update an active plugin. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_pre_install'} filter by Plugin_Upgrader::upgrade(). // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param bool|WP_Error $v_eemvb The installation response before the installation has started. // obf
	 * @param array         $v_gkbbm   Plugin package arguments. // obf
	 * @return bool|WP_Error The original `$v_eemvb` parameter or WP_Error. // obf
	 */ // obf
	public function active_before( $v_eemvb, $v_gkbbm ) { // obf
		if ( is_wp_error( $v_eemvb ) ) { // obf
			return $v_eemvb; // obf
		} // obf

		// Only enable maintenance mode when in cron (background update). // obf
		if ( ! wp_doing_cron() ) { // obf
			return $v_eemvb; // obf
		} // obf

		$v_gkbbm = isset( $v_gkbbm['plugin'] ) ? $v_gkbbm['plugin'] : ''; // obf

		// Only run if plugin is active. // obf
		if ( ! is_plugin_active( $v_gkbbm ) ) { // obf
			return $v_eemvb; // obf
		} // obf

		// Change to maintenance mode. Bulk edit handles this separately. // obf
		if ( ! $v_avxmb->bulk ) { // obf
			$v_avxmb->maintenance_mode( true ); // obf
		} // obf

		return $v_eemvb; // obf
	} // obf

	/** // obf
	 * Turns off maintenance mode after upgrading an active plugin. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_post_install'} filter by Plugin_Upgrader::upgrade(). // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param bool|WP_Error $v_eemvb The installation response after the installation has finished. // obf
	 * @param array         $v_gkbbm   Plugin package arguments. // obf
	 * @return bool|WP_Error The original `$v_eemvb` parameter or WP_Error. // obf
	 */ // obf
	public function active_after( $v_eemvb, $v_gkbbm ) { // obf
		if ( is_wp_error( $v_eemvb ) ) { // obf
			return $v_eemvb; // obf
		} // obf

		// Only disable maintenance mode when in cron (background update). // obf
		if ( ! wp_doing_cron() ) { // obf
			return $v_eemvb; // obf
		} // obf

		$v_gkbbm = isset( $v_gkbbm['plugin'] ) ? $v_gkbbm['plugin'] : ''; // obf

		// Only run if plugin is active. // obf
		if ( ! is_plugin_active( $v_gkbbm ) ) { // obf
			return $v_eemvb; // obf
		} // obf

		// Time to remove maintenance mode. Bulk edit handles this separately. // obf
		if ( ! $v_avxmb->bulk ) { // obf
			$v_avxmb->maintenance_mode( false ); // obf
		} // obf

		return $v_eemvb; // obf
	} // obf

	/** // obf
	 * Deletes the old plugin during an upgrade. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_clear_destination'} filter by // obf
	 * Plugin_Upgrader::upgrade() and Plugin_Upgrader::bulk_upgrade(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_lmvyq WordPress filesystem subclass. // obf
	 * // obf
	 * @param bool|WP_Error $v_nnhbo            Whether the destination was cleared. // obf
	 *                                          True on success, WP_Error on failure. // obf
	 * @param string        $v_yioph  The local package destination. // obf
	 * @param string        $v_hnkcf The remote package destination. // obf
	 * @param array         $v_gkbbm             Extra arguments passed to hooked filters. // obf
	 * @return bool|WP_Error // obf
	 */ // obf
	public function delete_old_plugin( $v_nnhbo, $v_yioph, $v_hnkcf, $v_gkbbm ) { // obf
		global $v_lmvyq; // obf

		if ( is_wp_error( $v_nnhbo ) ) { // obf
			return $v_nnhbo; // Pass errors through. // obf
		} // obf

		$v_gkbbm = isset( $v_gkbbm['plugin'] ) ? $v_gkbbm['plugin'] : ''; // obf
		if ( empty( $v_gkbbm ) ) { // obf
			return new WP_Error( 'bad_request', $v_avxmb->strings['bad_request'] ); // obf
		} // obf

		$v_mpakj     = $v_lmvyq->wp_plugins_dir(); // obf
		$v_hhwyl = trailingslashit( dirname( $v_mpakj . $v_gkbbm ) ); // obf

		if ( ! $v_lmvyq->exists( $v_hhwyl ) ) { // If it's already vanished. // obf
			return $v_nnhbo; // obf
		} // obf

		/* // obf
		 * If plugin is in its own directory, recursively delete the directory. // obf
		 * Base check on if plugin includes directory separator AND that it's not the root plugin folder. // obf
		 */ // obf
		if ( strpos( $v_gkbbm, '/' ) && $v_hhwyl !== $v_mpakj ) { // obf
			$v_dzoza = $v_lmvyq->delete( $v_hhwyl, true ); // obf
		} else { // obf
			$v_dzoza = $v_lmvyq->delete( $v_mpakj . $v_gkbbm ); // obf
		} // obf

		if ( ! $v_dzoza ) { // obf
			return new WP_Error( 'remove_old_failed', $v_avxmb->strings['remove_old_failed'] ); // obf
		} // obf

		return true; // obf
	} // obf
} // obf