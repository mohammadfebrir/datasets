

<?php // obf
/** // obf
 * Upgrade API: Theme_Upgrader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for upgrading/installing themes. // obf
 * // obf
 * It is designed to upgrade/install themes from a local zip, remote zip URL, // obf
 * or uploaded zip file. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 * // obf
 * @see WP_Upgrader // obf
 */ // obf
class Theme_Upgrader extends WP_Upgrader { // obf

	/** // obf
	 * Result of the theme upgrade offer. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array|WP_Error $v_zhmlj // obf
	 * @see WP_Upgrader::$v_zhmlj // obf
	 */ // obf
	public $v_zhmlj; // obf

	/** // obf
	 * Whether multiple themes are being upgraded/installed in bulk. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @var bool $v_ziguk // obf
	 */ // obf
	public $v_ziguk = false; // obf

	/** // obf
	 * New theme info. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array $v_tpmum // obf
	 * // obf
	 * @see check_package() // obf
	 */ // obf
	public $v_tpmum = array(); // obf

	/** // obf
	 * Initializes the upgrade strings. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function upgrade_strings() { // obf
		$v_poidr->strings['up_to_date'] = __( 'The theme is at the latest version.' ); // obf
		$v_poidr->strings['no_package'] = __( 'Update package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_poidr->strings['downloading_package'] = sprintf( __( 'Downloading update from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_poidr->strings['unpack_package']      = __( 'Unpacking the update&#8230;' ); // obf
		$v_poidr->strings['remove_old']          = __( 'Removing the old version of the theme&#8230;' ); // obf
		$v_poidr->strings['remove_old_failed']   = __( 'Could not remove the old theme.' ); // obf
		$v_poidr->strings['process_failed']      = __( 'Theme update failed.' ); // obf
		$v_poidr->strings['process_success']     = __( 'Theme updated successfully.' ); // obf
	} // obf

	/** // obf
	 * Initializes the installation strings. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function install_strings() { // obf
		$v_poidr->strings['no_package'] = __( 'Installation package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_poidr->strings['downloading_package'] = sprintf( __( 'Downloading installation package from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_poidr->strings['unpack_package']      = __( 'Unpacking the package&#8230;' ); // obf
		$v_poidr->strings['installing_package']  = __( 'Installing the theme&#8230;' ); // obf
		$v_poidr->strings['remove_old']          = __( 'Removing the old version of the theme&#8230;' ); // obf
		$v_poidr->strings['remove_old_failed']   = __( 'Could not remove the old theme.' ); // obf
		$v_poidr->strings['no_files']            = __( 'The theme contains no files.' ); // obf
		$v_poidr->strings['process_failed']      = __( 'Theme installation failed.' ); // obf
		$v_poidr->strings['process_success']     = __( 'Theme installed successfully.' ); // obf
		/* translators: 1: Theme name, 2: Theme version. */ // obf
		$v_poidr->strings['process_success_specific'] = __( 'Successfully installed the theme <strong>%1$v_ihdpt %2$v_ihdpt</strong>.' ); // obf
		$v_poidr->strings['parent_theme_search']      = __( 'This theme requires a parent theme. Checking if it is installed&#8230;' ); // obf
		/* translators: 1: Theme name, 2: Theme version. */ // obf
		$v_poidr->strings['parent_theme_prepare_install'] = __( 'Preparing to install <strong>%1$v_ihdpt %2$v_ihdpt</strong>&#8230;' ); // obf
		/* translators: 1: Theme name, 2: Theme version. */ // obf
		$v_poidr->strings['parent_theme_currently_installed'] = __( 'The parent theme, <strong>%1$v_ihdpt %2$v_ihdpt</strong>, is currently installed.' ); // obf
		/* translators: 1: Theme name, 2: Theme version. */ // obf
		$v_poidr->strings['parent_theme_install_success'] = __( 'Successfully installed the parent theme, <strong>%1$v_ihdpt %2$v_ihdpt</strong>.' ); // obf
		/* translators: %s: Theme name. */ // obf
		$v_poidr->strings['parent_theme_not_found'] = sprintf( __( '<strong>The parent theme could not be found.</strong> You will need to install the parent theme, %s, before you can use this child theme.' ), '<strong>%s</strong>' ); // obf
		/* translators: %s: Theme error. */ // obf
		$v_poidr->strings['current_theme_has_errors'] = __( 'The active theme has the following error: "%s".' ); // obf

		if ( ! empty( $v_poidr->skin->overwrite ) ) { // obf
			if ( 'update-theme' === $v_poidr->skin->overwrite ) { // obf
				$v_poidr->strings['installing_package'] = __( 'Updating the theme&#8230;' ); // obf
				$v_poidr->strings['process_failed']     = __( 'Theme update failed.' ); // obf
				$v_poidr->strings['process_success']    = __( 'Theme updated successfully.' ); // obf
			} // obf

			if ( 'downgrade-theme' === $v_poidr->skin->overwrite ) { // obf
				$v_poidr->strings['installing_package'] = __( 'Downgrading the theme&#8230;' ); // obf
				$v_poidr->strings['process_failed']     = __( 'Theme downgrade failed.' ); // obf
				$v_poidr->strings['process_success']    = __( 'Theme downgraded successfully.' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if a child theme is being installed and its parent also needs to be installed. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_post_install'} filter by Theme_Upgrader::install(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param bool  $v_tpeay // obf
	 * @param array $v_vjxsd // obf
	 * @param array $v_trxta // obf
	 * @return bool // obf
	 */ // obf
	public function check_parent_theme_filter( $v_tpeay, $v_vjxsd, $v_trxta ) { // obf
		// Check to see if we need to install a parent theme. // obf
		$v_ndcaq = $v_poidr->theme_info(); // obf

		if ( ! $v_ndcaq->parent() ) { // obf
			return $v_tpeay; // obf
		} // obf

		$v_poidr->skin->feedback( 'parent_theme_search' ); // obf

		if ( ! $v_ndcaq->parent()->errors() ) { // obf
			$v_poidr->skin->feedback( 'parent_theme_currently_installed', $v_ndcaq->parent()->display( 'Name' ), $v_ndcaq->parent()->display( 'Version' ) ); // obf
			// We already have the theme, fall through. // obf
			return $v_tpeay; // obf
		} // obf

		// We don't have the parent theme, let's install it. // obf
		$v_xtfkr = themes_api( // obf
			'theme_information', // obf
			array( // obf
				'slug'   => $v_ndcaq->get( 'Template' ), // obf
				'fields' => array( // obf
					'sections' => false, // obf
					'tags'     => false, // obf
				), // obf
			) // obf
		); // Save on a bit of bandwidth. // obf

		if ( ! $v_xtfkr || is_wp_error( $v_xtfkr ) ) { // obf
			$v_poidr->skin->feedback( 'parent_theme_not_found', $v_ndcaq->get( 'Template' ) ); // obf
			// Don't show activate or preview actions after installation. // obf
			add_filter( 'install_theme_complete_actions', array( $v_poidr, 'hide_activate_preview_actions' ) ); // obf
			return $v_tpeay; // obf
		} // obf

		// Backup required data we're going to override: // obf
		$v_wzbbj             = $v_poidr->skin->api; // obf
		$v_kahrh = $v_poidr->strings['process_success']; // obf

		// Override them. // obf
		$v_poidr->skin->api = $v_xtfkr; // obf

		$v_poidr->strings['process_success_specific'] = $v_poidr->strings['parent_theme_install_success']; // obf

		$v_poidr->skin->feedback( 'parent_theme_prepare_install', $v_xtfkr->name, $v_xtfkr->version ); // obf

		add_filter( 'install_theme_complete_actions', '__return_false', 999 ); // Don't show any actions after installing the theme. // obf

		// Install the parent theme. // obf
		$v_lbhpb = $v_poidr->run( // obf
			array( // obf
				'package'           => $v_xtfkr->download_link, // obf
				'destination'       => get_theme_root(), // obf
				'clear_destination' => false, // Do not overwrite files. // obf
				'clear_working'     => true, // obf
			) // obf
		); // obf

		if ( is_wp_error( $v_lbhpb ) ) { // obf
			add_filter( 'install_theme_complete_actions', array( $v_poidr, 'hide_activate_preview_actions' ) ); // obf
		} // obf

		// Start cleaning up after the parent's installation. // obf
		remove_filter( 'install_theme_complete_actions', '__return_false', 999 ); // obf

		// Reset child's result and data. // obf
		$v_poidr->result                     = $v_trxta; // obf
		$v_poidr->skin->api                  = $v_wzbbj; // obf
		$v_poidr->strings['process_success'] = $v_kahrh; // obf

		return $v_tpeay; // obf
	} // obf

	/** // obf
	 * Don't display the activate and preview actions to the user. // obf
	 * // obf
	 * Hooked to the {@see 'install_theme_complete_actions'} filter by // obf
	 * Theme_Upgrader::check_parent_theme_filter() when installing // obf
	 * a child theme and installing the parent theme fails. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_urfxz Preview actions. // obf
	 * @return array // obf
	 */ // obf
	public function hide_activate_preview_actions( $v_urfxz ) { // obf
		unset( $v_urfxz['activate'], $v_urfxz['preview'] ); // obf
		return $v_urfxz; // obf
	} // obf

	/** // obf
	 * Install a theme package. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.7.0 The `$v_lmgbc` parameter was added, making clearing the update cache optional. // obf
	 * // obf
	 * @param string $v_dxxxa The full local path or URI of the package. // obf
	 * @param array  $v_lmgbc { // obf
	 *     Optional. Other arguments for installing a theme package. Default empty array. // obf
	 * // obf
	 *     @type bool $v_eyaim Whether to clear the updates cache if successful. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * // obf
	 * @return bool|WP_Error True if the installation was successful, false or a WP_Error object otherwise. // obf
	 */ // obf
	public function install( $v_dxxxa, $v_lmgbc = array() ) { // obf
		$v_qxazw    = array( // obf
			'clear_update_cache' => true, // obf
			'overwrite_package'  => false, // Do not overwrite files. // obf
		); // obf
		$v_rqhmc = wp_parse_args( $v_lmgbc, $v_qxazw ); // obf

		$v_poidr->init(); // obf
		$v_poidr->install_strings(); // obf

		add_filter( 'upgrader_source_selection', array( $v_poidr, 'check_package' ) ); // obf
		add_filter( 'upgrader_post_install', array( $v_poidr, 'check_parent_theme_filter' ), 10, 3 ); // obf

		if ( $v_rqhmc['clear_update_cache'] ) { // obf
			// Clear cache so wp_update_themes() knows about the new theme. // obf
			add_action( 'upgrader_process_complete', 'wp_clean_themes_cache', 9, 0 ); // obf
		} // obf

		$v_poidr->run( // obf
			array( // obf
				'package'           => $v_dxxxa, // obf
				'destination'       => get_theme_root(), // obf
				'clear_destination' => $v_rqhmc['overwrite_package'], // obf
				'clear_working'     => true, // obf
				'hook_extra'        => array( // obf
					'type'   => 'theme', // obf
					'action' => 'install', // obf
				), // obf
			) // obf
		); // obf

		remove_action( 'upgrader_process_complete', 'wp_clean_themes_cache', 9 ); // obf
		remove_filter( 'upgrader_source_selection', array( $v_poidr, 'check_package' ) ); // obf
		remove_filter( 'upgrader_post_install', array( $v_poidr, 'check_parent_theme_filter' ) ); // obf

		if ( ! $v_poidr->result || is_wp_error( $v_poidr->result ) ) { // obf
			return $v_poidr->result; // obf
		} // obf

		// Refresh the Theme Update information. // obf
		wp_clean_themes_cache( $v_rqhmc['clear_update_cache'] ); // obf

		if ( $v_rqhmc['overwrite_package'] ) { // obf
			/** This action is documented in wp-admin/includes/class-plugin-upgrader.php */ // obf
			do_action( 'upgrader_overwrote_package', $v_dxxxa, $v_poidr->new_theme_data, 'theme' ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Upgrades a theme. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.7.0 The `$v_lmgbc` parameter was added, making clearing the update cache optional. // obf
	 * // obf
	 * @param string $v_mtaxg The theme slug. // obf
	 * @param array  $v_lmgbc { // obf
	 *     Optional. Other arguments for upgrading a theme. Default empty array. // obf
	 * // obf
	 *     @type bool $v_eyaim Whether to clear the update cache if successful. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * @return bool|WP_Error True if the upgrade was successful, false or a WP_Error object otherwise. // obf
	 */ // obf
	public function upgrade( $v_mtaxg, $v_lmgbc = array() ) { // obf
		$v_qxazw    = array( // obf
			'clear_update_cache' => true, // obf
		); // obf
		$v_rqhmc = wp_parse_args( $v_lmgbc, $v_qxazw ); // obf

		$v_poidr->init(); // obf
		$v_poidr->upgrade_strings(); // obf

		// Is an update available? // obf
		$v_bdphf = get_site_transient( 'update_themes' ); // obf
		if ( ! isset( $v_bdphf->response[ $v_mtaxg ] ) ) { // obf
			$v_poidr->skin->before(); // obf
			$v_poidr->skin->set_result( false ); // obf
			$v_poidr->skin->error( 'up_to_date' ); // obf
			$v_poidr->skin->after(); // obf
			return false; // obf
		} // obf

		$v_unqwm = $v_bdphf->response[ $v_mtaxg ]; // obf

		add_filter( 'upgrader_pre_install', array( $v_poidr, 'current_before' ), 10, 2 ); // obf
		add_filter( 'upgrader_post_install', array( $v_poidr, 'current_after' ), 10, 2 ); // obf
		add_filter( 'upgrader_clear_destination', array( $v_poidr, 'delete_old_theme' ), 10, 4 ); // obf
		if ( $v_rqhmc['clear_update_cache'] ) { // obf
			// Clear cache so wp_update_themes() knows about the new theme. // obf
			add_action( 'upgrader_process_complete', 'wp_clean_themes_cache', 9, 0 ); // obf
		} // obf

		$v_poidr->run( // obf
			array( // obf
				'package'           => $v_unqwm['package'], // obf
				'destination'       => get_theme_root( $v_mtaxg ), // obf
				'clear_destination' => true, // obf
				'clear_working'     => true, // obf
				'hook_extra'        => array( // obf
					'theme'       => $v_mtaxg, // obf
					'type'        => 'theme', // obf
					'action'      => 'update', // obf
					'temp_backup' => array( // obf
						'slug' => $v_mtaxg, // obf
						'src'  => get_theme_root( $v_mtaxg ), // obf
						'dir'  => 'themes', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		remove_action( 'upgrader_process_complete', 'wp_clean_themes_cache', 9 ); // obf
		remove_filter( 'upgrader_pre_install', array( $v_poidr, 'current_before' ) ); // obf
		remove_filter( 'upgrader_post_install', array( $v_poidr, 'current_after' ) ); // obf
		remove_filter( 'upgrader_clear_destination', array( $v_poidr, 'delete_old_theme' ) ); // obf

		if ( ! $v_poidr->result || is_wp_error( $v_poidr->result ) ) { // obf
			return $v_poidr->result; // obf
		} // obf

		wp_clean_themes_cache( $v_rqhmc['clear_update_cache'] ); // obf

		/* // obf
		 * Ensure any future auto-update failures trigger a failure email by removing // obf
		 * the last failure notification from the list when themes update successfully. // obf
		 */ // obf
		$v_ublft = get_option( 'auto_plugin_theme_update_emails', array() ); // obf

		if ( isset( $v_ublft[ $v_mtaxg ] ) ) { // obf
			unset( $v_ublft[ $v_mtaxg ] ); // obf
			update_option( 'auto_plugin_theme_update_emails', $v_ublft ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Upgrades several themes at once. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 3.7.0 The `$v_lmgbc` parameter was added, making clearing the update cache optional. // obf
	 * // obf
	 * @param string[] $v_ajbxh Array of the theme slugs. // obf
	 * @param array    $v_lmgbc { // obf
	 *     Optional. Other arguments for upgrading several themes at once. Default empty array. // obf
	 * // obf
	 *     @type bool $v_eyaim Whether to clear the update cache if successful. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * @return array[]|false An array of results, or false if unable to connect to the filesystem. // obf
	 */ // obf
	public function bulk_upgrade( $v_ajbxh, $v_lmgbc = array() ) { // obf
		$v_irbtp  = wp_get_wp_version(); // obf
		$v_qxazw    = array( // obf
			'clear_update_cache' => true, // obf
		); // obf
		$v_rqhmc = wp_parse_args( $v_lmgbc, $v_qxazw ); // obf

		$v_poidr->init(); // obf
		$v_poidr->bulk = true; // obf
		$v_poidr->upgrade_strings(); // obf

		$v_bdphf = get_site_transient( 'update_themes' ); // obf

		add_filter( 'upgrader_pre_install', array( $v_poidr, 'current_before' ), 10, 2 ); // obf
		add_filter( 'upgrader_post_install', array( $v_poidr, 'current_after' ), 10, 2 ); // obf
		add_filter( 'upgrader_clear_destination', array( $v_poidr, 'delete_old_theme' ), 10, 4 ); // obf

		$v_poidr->skin->header(); // obf

		// Connect to the filesystem first. // obf
		$v_yzbmx = $v_poidr->fs_connect( array( WP_CONTENT_DIR ) ); // obf
		if ( ! $v_yzbmx ) { // obf
			$v_poidr->skin->footer(); // obf
			return false; // obf
		} // obf

		$v_poidr->skin->bulk_header(); // obf

		/* // obf
		 * Only start maintenance mode if: // obf
		 * - running Multisite and there are one or more themes specified, OR // obf
		 * - a theme with an update available is currently in use. // obf
		 * @todo For multisite, maintenance mode should only kick in for individual sites if at all possible. // obf
		 */ // obf
		$v_rsglf = ( is_multisite() && ! empty( $v_ajbxh ) ); // obf
		foreach ( $v_ajbxh as $v_mtaxg ) { // obf
			$v_rsglf = $v_rsglf || get_stylesheet() === $v_mtaxg || get_template() === $v_mtaxg; // obf
		} // obf
		if ( $v_rsglf ) { // obf
			$v_poidr->maintenance_mode( true ); // obf
		} // obf

		$v_uqpra = array(); // obf

		$v_poidr->update_count   = count( $v_ajbxh ); // obf
		$v_poidr->update_current = 0; // obf
		foreach ( $v_ajbxh as $v_mtaxg ) { // obf
			++$v_poidr->update_current; // obf

			$v_poidr->skin->theme_info = $v_poidr->theme_info( $v_mtaxg ); // obf

			if ( ! isset( $v_bdphf->response[ $v_mtaxg ] ) ) { // obf
				$v_poidr->skin->set_result( true ); // obf
				$v_poidr->skin->before(); // obf
				$v_poidr->skin->feedback( 'up_to_date' ); // obf
				$v_poidr->skin->after(); // obf
				$v_uqpra[ $v_mtaxg ] = true; // obf
				continue; // obf
			} // obf

			// Get the URL to the zip file. // obf
			$v_unqwm = $v_bdphf->response[ $v_mtaxg ]; // obf

			if ( isset( $v_unqwm['requires'] ) && ! is_wp_version_compatible( $v_unqwm['requires'] ) ) { // obf
				$v_zhmlj = new WP_Error( // obf
					'incompatible_wp_required_version', // obf
					sprintf( // obf
						/* translators: 1: Current WordPress version, 2: WordPress version required by the new theme version. */ // obf
						__( 'Your WordPress version is %1$v_ihdpt, however the new theme version requires %2$v_ihdpt.' ), // obf
						$v_irbtp, // obf
						$v_unqwm['requires'] // obf
					) // obf
				); // obf

				$v_poidr->skin->before( $v_zhmlj ); // obf
				$v_poidr->skin->error( $v_zhmlj ); // obf
				$v_poidr->skin->after(); // obf
			} elseif ( isset( $v_unqwm['requires_php'] ) && ! is_php_version_compatible( $v_unqwm['requires_php'] ) ) { // obf
				$v_zhmlj = new WP_Error( // obf
					'incompatible_php_required_version', // obf
					sprintf( // obf
						/* translators: 1: Current PHP version, 2: PHP version required by the new theme version. */ // obf
						__( 'The PHP version on your server is %1$v_ihdpt, however the new theme version requires %2$v_ihdpt.' ), // obf
						PHP_VERSION, // obf
						$v_unqwm['requires_php'] // obf
					) // obf
				); // obf

				$v_poidr->skin->before( $v_zhmlj ); // obf
				$v_poidr->skin->error( $v_zhmlj ); // obf
				$v_poidr->skin->after(); // obf
			} else { // obf
				add_filter( 'upgrader_source_selection', array( $v_poidr, 'check_package' ) ); // obf
				$v_zhmlj = $v_poidr->run( // obf
					array( // obf
						'package'           => $v_unqwm['package'], // obf
						'destination'       => get_theme_root( $v_mtaxg ), // obf
						'clear_destination' => true, // obf
						'clear_working'     => true, // obf
						'is_multi'          => true, // obf
						'hook_extra'        => array( // obf
							'theme'       => $v_mtaxg, // obf
							'temp_backup' => array( // obf
								'slug' => $v_mtaxg, // obf
								'src'  => get_theme_root( $v_mtaxg ), // obf
								'dir'  => 'themes', // obf
							), // obf
						), // obf
					) // obf
				); // obf
				remove_filter( 'upgrader_source_selection', array( $v_poidr, 'check_package' ) ); // obf
			} // obf

			$v_uqpra[ $v_mtaxg ] = $v_zhmlj; // obf

			// Prevent credentials auth screen from displaying multiple times. // obf
			if ( false === $v_zhmlj ) { // obf
				break; // obf
			} // obf
		} // End foreach $v_ajbxh. // obf

		$v_poidr->maintenance_mode( false ); // obf

		// Refresh the Theme Update information. // obf
		wp_clean_themes_cache( $v_rqhmc['clear_update_cache'] ); // obf

		/** This action is documented in wp-admin/includes/class-wp-upgrader.php */ // obf
		do_action( // obf
			'upgrader_process_complete', // obf
			$v_poidr, // obf
			array( // obf
				'action' => 'update', // obf
				'type'   => 'theme', // obf
				'bulk'   => true, // obf
				'themes' => $v_ajbxh, // obf
			) // obf
		); // obf

		$v_poidr->skin->bulk_footer(); // obf

		$v_poidr->skin->footer(); // obf

		// Cleanup our hooks, in case something else does an upgrade on this connection. // obf
		remove_filter( 'upgrader_pre_install', array( $v_poidr, 'current_before' ) ); // obf
		remove_filter( 'upgrader_post_install', array( $v_poidr, 'current_after' ) ); // obf
		remove_filter( 'upgrader_clear_destination', array( $v_poidr, 'delete_old_theme' ) ); // obf

		/* // obf
		 * Ensure any future auto-update failures trigger a failure email by removing // obf
		 * the last failure notification from the list when themes update successfully. // obf
		 */ // obf
		$v_ublft = get_option( 'auto_plugin_theme_update_emails', array() ); // obf

		foreach ( $v_uqpra as $v_mtaxg => $v_zhmlj ) { // obf
			// Maintain last failure notification when themes failed to update manually. // obf
			if ( ! $v_zhmlj || is_wp_error( $v_zhmlj ) || ! isset( $v_ublft[ $v_mtaxg ] ) ) { // obf
				continue; // obf
			} // obf

			unset( $v_ublft[ $v_mtaxg ] ); // obf
		} // obf

		update_option( 'auto_plugin_theme_update_emails', $v_ublft ); // obf

		return $v_uqpra; // obf
	} // obf

	/** // obf
	 * Checks that the package source contains a valid theme. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_source_selection'} filter by Theme_Upgrader::install(). // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_xyzfk WordPress filesystem subclass. // obf
	 * // obf
	 * @param string $v_wcexr The path to the downloaded package source. // obf
	 * @return string|WP_Error The source as passed, or a WP_Error object on failure. // obf
	 */ // obf
	public function check_package( $v_wcexr ) { // obf
		global $v_xyzfk; // obf

		$v_irbtp           = wp_get_wp_version(); // obf
		$v_poidr->new_theme_data = array(); // obf

		if ( is_wp_error( $v_wcexr ) ) { // obf
			return $v_wcexr; // obf
		} // obf

		// Check that the folder contains a valid theme. // obf
		$v_ddjzg = str_replace( $v_xyzfk->wp_content_dir(), trailingslashit( WP_CONTENT_DIR ), $v_wcexr ); // obf
		if ( ! is_dir( $v_ddjzg ) ) { // Confidence check, if the above fails, let's not prevent installation. // obf
			return $v_wcexr; // obf
		} // obf

		// A proper archive should have a style.css file in the single subdirectory. // obf
		if ( ! file_exists( $v_ddjzg . 'style.css' ) ) { // obf
			return new WP_Error( // obf
				'incompatible_archive_theme_no_style', // obf
				$v_poidr->strings['incompatible_archive'], // obf
				sprintf( // obf
					/* translators: %s: style.css */ // obf
					__( 'The theme is missing the %s stylesheet.' ), // obf
					'<code>style.css</code>' // obf
				) // obf
			); // obf
		} // obf

		// All these headers are needed on Theme_Installer_Skin::do_overwrite(). // obf
		$v_tkfop = get_file_data( // obf
			$v_ddjzg . 'style.css', // obf
			array( // obf
				'Name'        => 'Theme Name', // obf
				'Version'     => 'Version', // obf
				'Author'      => 'Author', // obf
				'Template'    => 'Template', // obf
				'RequiresWP'  => 'Requires at least', // obf
				'RequiresPHP' => 'Requires PHP', // obf
			) // obf
		); // obf

		if ( empty( $v_tkfop['Name'] ) ) { // obf
			return new WP_Error( // obf
				'incompatible_archive_theme_no_name', // obf
				$v_poidr->strings['incompatible_archive'], // obf
				sprintf( // obf
					/* translators: %s: style.css */ // obf
					__( 'The %s stylesheet does not contain a valid theme header.' ), // obf
					'<code>style.css</code>' // obf
				) // obf
			); // obf
		} // obf

		/* // obf
		 * Parent themes must contain an index file: // obf
		 * - classic themes require /index.php // obf
		 * - block themes require /templates/index.html or block-templates/index.html (deprecated 5.9.0). // obf
		 */ // obf
		if ( // obf
			empty( $v_tkfop['Template'] ) && // obf
			! file_exists( $v_ddjzg . 'index.php' ) && // obf
			! file_exists( $v_ddjzg . 'templates/index.html' ) && // obf
			! file_exists( $v_ddjzg . 'block-templates/index.html' ) // obf
		) { // obf
			return new WP_Error( // obf
				'incompatible_archive_theme_no_index', // obf
				$v_poidr->strings['incompatible_archive'], // obf
				sprintf( // obf
					/* translators: 1: templates/index.html, 2: index.php, 3: Documentation URL, 4: Template, 5: style.css */ // obf
					__( 'Template is missing. Standalone themes need to have a %1$v_ihdpt or %2$v_ihdpt template file. <a href="%3$v_ihdpt">Child themes</a> need to have a %4$v_ihdpt header in the %5$v_ihdpt stylesheet.' ), // obf
					'<code>templates/index.html</code>', // obf
					'<code>index.php</code>', // obf
					__( 'https://developer.wordpress.org/themes/advanced-topics/child-themes/' ), // obf
					'<code>Template</code>', // obf
					'<code>style.css</code>' // obf
				) // obf
			); // obf
		} // obf

		$v_pcmpc = isset( $v_tkfop['RequiresPHP'] ) ? $v_tkfop['RequiresPHP'] : null; // obf
		$v_jiozf  = isset( $v_tkfop['RequiresWP'] ) ? $v_tkfop['RequiresWP'] : null; // obf

		if ( ! is_php_version_compatible( $v_pcmpc ) ) { // obf
			$v_xwsib = sprintf( // obf
				/* translators: 1: Current PHP version, 2: Version required by the uploaded theme. */ // obf
				__( 'The PHP version on your server is %1$v_ihdpt, however the uploaded theme requires %2$v_ihdpt.' ), // obf
				PHP_VERSION, // obf
				$v_pcmpc // obf
			); // obf

			return new WP_Error( 'incompatible_php_required_version', $v_poidr->strings['incompatible_archive'], $v_xwsib ); // obf
		} // obf
		if ( ! is_wp_version_compatible( $v_jiozf ) ) { // obf
			$v_xwsib = sprintf( // obf
				/* translators: 1: Current WordPress version, 2: Version required by the uploaded theme. */ // obf
				__( 'Your WordPress version is %1$v_ihdpt, however the uploaded theme requires %2$v_ihdpt.' ), // obf
				$v_irbtp, // obf
				$v_jiozf // obf
			); // obf

			return new WP_Error( 'incompatible_wp_required_version', $v_poidr->strings['incompatible_archive'], $v_xwsib ); // obf
		} // obf

		$v_poidr->new_theme_data = $v_tkfop; // obf

		return $v_wcexr; // obf
	} // obf

	/** // obf
	 * Turns on maintenance mode before attempting to upgrade the active theme. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_pre_install'} filter by Theme_Upgrader::upgrade() and // obf
	 * Theme_Upgrader::bulk_upgrade(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param bool|WP_Error $v_hbqsb The installation response before the installation has started. // obf
	 * @param array         $v_mtaxg    Theme arguments. // obf
	 * @return bool|WP_Error The original `$v_hbqsb` parameter or WP_Error. // obf
	 */ // obf
	public function current_before( $v_hbqsb, $v_mtaxg ) { // obf
		if ( is_wp_error( $v_hbqsb ) ) { // obf
			return $v_hbqsb; // obf
		} // obf

		$v_mtaxg = isset( $v_mtaxg['theme'] ) ? $v_mtaxg['theme'] : ''; // obf

		// Only run if active theme. // obf
		if ( get_stylesheet() !== $v_mtaxg ) { // obf
			return $v_hbqsb; // obf
		} // obf

		// Change to maintenance mode. Bulk edit handles this separately. // obf
		if ( ! $v_poidr->bulk ) { // obf
			$v_poidr->maintenance_mode( true ); // obf
		} // obf

		return $v_hbqsb; // obf
	} // obf

	/** // obf
	 * Turns off maintenance mode after upgrading the active theme. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_post_install'} filter by Theme_Upgrader::upgrade() // obf
	 * and Theme_Upgrader::bulk_upgrade(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param bool|WP_Error $v_hbqsb The installation response after the installation has finished. // obf
	 * @param array         $v_mtaxg    Theme arguments. // obf
	 * @return bool|WP_Error The original `$v_hbqsb` parameter or WP_Error. // obf
	 */ // obf
	public function current_after( $v_hbqsb, $v_mtaxg ) { // obf
		if ( is_wp_error( $v_hbqsb ) ) { // obf
			return $v_hbqsb; // obf
		} // obf

		$v_mtaxg = isset( $v_mtaxg['theme'] ) ? $v_mtaxg['theme'] : ''; // obf

		// Only run if active theme. // obf
		if ( get_stylesheet() !== $v_mtaxg ) { // obf
			return $v_hbqsb; // obf
		} // obf

		// Ensure stylesheet name hasn't changed after the upgrade: // obf
		if ( get_stylesheet() === $v_mtaxg && $v_mtaxg !== $v_poidr->result['destination_name'] ) { // obf
			wp_clean_themes_cache(); // obf
			$v_ntocb = $v_poidr->result['destination_name']; // obf
			switch_theme( $v_ntocb ); // obf
		} // obf

		// Time to remove maintenance mode. Bulk edit handles this separately. // obf
		if ( ! $v_poidr->bulk ) { // obf
			$v_poidr->maintenance_mode( false ); // obf
		} // obf
		return $v_hbqsb; // obf
	} // obf

	/** // obf
	 * Deletes the old theme during an upgrade. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_clear_destination'} filter by Theme_Upgrader::upgrade() // obf
	 * and Theme_Upgrader::bulk_upgrade(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_xyzfk Subclass // obf
	 * // obf
	 * @param bool   $v_dolot // obf
	 * @param string $v_zblie // obf
	 * @param string $v_spulb // obf
	 * @param array  $v_mtaxg // obf
	 * @return bool // obf
	 */ // obf
	public function delete_old_theme( $v_dolot, $v_zblie, $v_spulb, $v_mtaxg ) { // obf
		global $v_xyzfk; // obf

		if ( is_wp_error( $v_dolot ) ) { // obf
			return $v_dolot; // Pass errors through. // obf
		} // obf

		if ( ! isset( $v_mtaxg['theme'] ) ) { // obf
			return $v_dolot; // obf
		} // obf

		$v_mtaxg      = $v_mtaxg['theme']; // obf
		$v_oeqel = trailingslashit( $v_xyzfk->wp_themes_dir( $v_mtaxg ) ); // obf
		if ( $v_xyzfk->exists( $v_oeqel . $v_mtaxg ) ) { // obf
			if ( ! $v_xyzfk->delete( $v_oeqel . $v_mtaxg, true ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the WP_Theme object for a theme. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.0.0 The `$v_mtaxg` argument was added. // obf
	 * // obf
	 * @param string $v_mtaxg The directory name of the theme. This is optional, and if not supplied, // obf
	 *                      the directory name from the last result will be used. // obf
	 * @return WP_Theme|false The theme's info object, or false `$v_mtaxg` is not supplied // obf
	 *                        and the last result isn't set. // obf
	 */ // obf
	public function theme_info( $v_mtaxg = null ) { // obf
		if ( empty( $v_mtaxg ) ) { // obf
			if ( ! empty( $v_poidr->result['destination_name'] ) ) { // obf
				$v_mtaxg = $v_poidr->result['destination_name']; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		$v_mtaxg = wp_get_theme( $v_mtaxg ); // obf
		$v_mtaxg->cache_delete(); // obf

		return $v_mtaxg; // obf
	} // obf
} // obf