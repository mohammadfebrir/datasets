

<?php // obf
/** // obf
 * Upgrade API: WP_Automatic_Updater class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for handling automatic background updates. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Automatic_Updater { // obf

	/** // obf
	 * Tracks update results during processing. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_pqknq = array(); // obf

	/** // obf
	 * Determines whether the entire automatic updater is disabled. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @return bool True if the automatic updater is disabled, false otherwise. // obf
	 */ // obf
	public function is_disabled() { // obf
		// Background updates are disabled if you don't want file changes. // obf
		if ( ! wp_is_file_mod_allowed( 'automatic_updater' ) ) { // obf
			return true; // obf
		} // obf

		if ( wp_installing() ) { // obf
			return true; // obf
		} // obf

		// More fine grained control can be done through the WP_AUTO_UPDATE_CORE constant and filters. // obf
		$v_olglj = defined( 'AUTOMATIC_UPDATER_DISABLED' ) && AUTOMATIC_UPDATER_DISABLED; // obf

		/** // obf
		 * Filters whether to entirely disable background updates. // obf
		 * // obf
		 * There are more fine-grained filters and controls for selective disabling. // obf
		 * This filter parallels the AUTOMATIC_UPDATER_DISABLED constant in name. // obf
		 * // obf
		 * This also disables update notification emails. That may change in the future. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param bool $v_olglj Whether the updater should be disabled. // obf
		 */ // obf
		return apply_filters( 'automatic_updater_disabled', $v_olglj ); // obf
	} // obf

	/** // obf
	 * Checks whether access to a given directory is allowed. // obf
	 * // obf
	 * This is used when detecting version control checkouts. Takes into account // obf
	 * the PHP `open_basedir` restrictions, so that WordPress does not try to access // obf
	 * directories it is not allowed to. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_liths The directory to check. // obf
	 * @return bool True if access to the directory is allowed, false otherwise. // obf
	 */ // obf
	public function is_allowed_dir( $v_liths ) { // obf
		if ( is_string( $v_liths ) ) { // obf
			$v_liths = trim( $v_liths ); // obf
		} // obf

		if ( ! is_string( $v_liths ) || '' === $v_liths ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: The "$v_liths" argument. */ // obf
					__( 'The "%s" argument must be a non-empty string.' ), // obf
					'$v_liths' // obf
				), // obf
				'6.2.0' // obf
			); // obf

			return false; // obf
		} // obf

		$v_qvvko = ini_get( 'open_basedir' ); // obf

		if ( empty( $v_qvvko ) ) { // obf
			return true; // obf
		} // obf

		$v_thabz = explode( PATH_SEPARATOR, $v_qvvko ); // obf

		foreach ( $v_thabz as $v_hipcd ) { // obf
			if ( '' !== trim( $v_hipcd ) && str_starts_with( $v_liths, $v_hipcd ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks for version control checkouts. // obf
	 * // obf
	 * Checks for Subversion, Git, Mercurial, and Bazaar. It recursively looks up the // obf
	 * filesystem to the top of the drive, erring on the side of detecting a VCS // obf
	 * checkout somewhere. // obf
	 * // obf
	 * ABSPATH is always checked in addition to whatever `$v_fegmu` is (which may be the // obf
	 * wp-content directory, for example). The underlying assumption is that if you are // obf
	 * using version control *anywhere*, then you should be making decisions for // obf
	 * how things get updated. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_fegmu The filesystem path to check, in addition to ABSPATH. // obf
	 * @return bool True if a VCS checkout was discovered at `$v_fegmu` or ABSPATH, // obf
	 *              or anywhere higher. False otherwise. // obf
	 */ // obf
	public function is_vcs_checkout( $v_fegmu ) { // obf
		$v_qyjek = array( untrailingslashit( $v_fegmu ) ); // obf
		if ( ABSPATH !== $v_fegmu ) { // obf
			$v_qyjek[] = untrailingslashit( ABSPATH ); // obf
		} // obf

		$v_vvaxa   = array( '.svn', '.git', '.hg', '.bzr' ); // obf
		$v_iltwu = array(); // obf

		foreach ( $v_qyjek as $v_jrivg ) { // obf
			// Walk up from $v_jrivg to the root. // obf
			do { // obf
				$v_iltwu[] = $v_jrivg; // obf

				// Once we've hit '/' or 'C:\', we need to stop. dirname will keep returning the input here. // obf
				if ( dirname( $v_jrivg ) === $v_jrivg ) { // obf
					break; // obf
				} // obf

				// Continue one level at a time. // obf
			} while ( $v_jrivg = dirname( $v_jrivg ) ); // obf
		} // obf

		$v_iltwu = array_unique( $v_iltwu ); // obf
		$v_qdimv   = false; // obf

		// Search all directories we've found for evidence of version control. // obf
		foreach ( $v_vvaxa as $v_gsoyk ) { // obf
			foreach ( $v_iltwu as $v_ufdur ) { // obf
				if ( ! $v_ubzhm->is_allowed_dir( $v_ufdur ) ) { // obf
					continue; // obf
				} // obf

				$v_qdimv = is_dir( rtrim( $v_ufdur, '\\/' ) . "/$v_gsoyk" ); // obf
				if ( $v_qdimv ) { // obf
					break 2; // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether the automatic updater should consider a filesystem // obf
		 * location to be potentially managed by a version control system. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param bool $v_qdimv  Whether a VCS checkout was discovered at `$v_fegmu` // obf
		 *                        or ABSPATH, or anywhere higher. // obf
		 * @param string $v_fegmu The filesystem context (a path) against which // obf
		 *                        filesystem status should be checked. // obf
		 */ // obf
		return apply_filters( 'automatic_updates_is_vcs_checkout', $v_qdimv, $v_fegmu ); // obf
	} // obf

	/** // obf
	 * Tests to see if we can and should update a specific item. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global wpdb $v_xfzfa WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_oxwry    The type of update being checked: 'core', 'theme', // obf
	 *                        'plugin', 'translation'. // obf
	 * @param object $v_svdfq    The update offer. // obf
	 * @param string $v_fegmu The filesystem context (a path) against which filesystem // obf
	 *                        access and status should be checked. // obf
	 * @return bool True if the item should be updated, false otherwise. // obf
	 */ // obf
	public function should_update( $v_oxwry, $v_svdfq, $v_fegmu ) { // obf
		// Used to see if WP_Filesystem is set up to allow unattended updates. // obf
		$v_ujxuu = new Automatic_Upgrader_Skin(); // obf

		if ( $v_ubzhm->is_disabled() ) { // obf
			return false; // obf
		} // obf

		// Only relax the filesystem checks when the update doesn't include new files. // obf
		$v_zpcjh = false; // obf
		if ( 'core' === $v_oxwry && isset( $v_svdfq->new_files ) && ! $v_svdfq->new_files ) { // obf
			$v_zpcjh = true; // obf
		} // obf

		// If we can't do an auto core update, we may still be able to email the user. // obf
		if ( ! $v_ujxuu->request_filesystem_credentials( false, $v_fegmu, $v_zpcjh ) // obf
			|| $v_ubzhm->is_vcs_checkout( $v_fegmu ) // obf
		) { // obf
			if ( 'core' === $v_oxwry ) { // obf
				$v_ubzhm->send_core_update_notification_email( $v_svdfq ); // obf
			} // obf
			return false; // obf
		} // obf

		// Next up, is this an item we can update? // obf
		if ( 'core' === $v_oxwry ) { // obf
			$v_nweqy = Core_Upgrader::should_update_to_version( $v_svdfq->current ); // obf
		} elseif ( 'plugin' === $v_oxwry || 'theme' === $v_oxwry ) { // obf
			$v_nweqy = ! empty( $v_svdfq->autoupdate ); // obf

			if ( ! $v_nweqy && wp_is_auto_update_enabled_for_type( $v_oxwry ) ) { // obf
				// Check if the site admin has enabled auto-updates by default for the specific item. // obf
				$v_uodlu = (array) get_site_option( "auto_update_{$v_oxwry}s", array() ); // obf
				$v_nweqy       = in_array( $v_svdfq->{$v_oxwry}, $v_uodlu, true ); // obf
			} // obf
		} else { // obf
			$v_nweqy = ! empty( $v_svdfq->autoupdate ); // obf
		} // obf

		// If the `disable_autoupdate` flag is set, override any user-choice, but allow filters. // obf
		if ( ! empty( $v_svdfq->disable_autoupdate ) ) { // obf
			$v_nweqy = false; // obf
		} // obf

		/** // obf
		 * Filters whether to automatically update core, a plugin, a theme, or a language. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_oxwry`, refers to the type of update // obf
		 * being checked. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `auto_update_core` // obf
		 *  - `auto_update_plugin` // obf
		 *  - `auto_update_theme` // obf
		 *  - `auto_update_translation` // obf
		 * // obf
		 * Since WordPress 3.7, minor and development versions of core, and translations have // obf
		 * been auto-updated by default. New installs on WordPress 5.6 or higher will also // obf
		 * auto-update major versions by default. Starting in 5.6, older sites can opt-in to // obf
		 * major version auto-updates, and auto-updates for plugins and themes. // obf
		 * // obf
		 * See the {@see 'allow_dev_auto_core_updates'}, {@see 'allow_minor_auto_core_updates'}, // obf
		 * and {@see 'allow_major_auto_core_updates'} filters for a more straightforward way to // obf
		 * adjust core updates. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * @since 5.5.0 The `$v_nweqy` parameter accepts the value of null. // obf
		 * // obf
		 * @param bool|null $v_nweqy Whether to update. The value of null is internally used // obf
		 *                          to detect whether nothing has hooked into this filter. // obf
		 * @param object    $v_svdfq   The update offer. // obf
		 */ // obf
		$v_nweqy = apply_filters( "auto_update_{$v_oxwry}", $v_nweqy, $v_svdfq ); // obf

		if ( ! $v_nweqy ) { // obf
			if ( 'core' === $v_oxwry ) { // obf
				$v_ubzhm->send_core_update_notification_email( $v_svdfq ); // obf
			} // obf
			return false; // obf
		} // obf

		// If it's a core update, are we actually compatible with its requirements? // obf
		if ( 'core' === $v_oxwry ) { // obf
			global $v_xfzfa; // obf

			$v_unetl = version_compare( PHP_VERSION, $v_svdfq->php_version, '>=' ); // obf
			if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $v_xfzfa->is_mysql ) ) { // obf
				$v_cfick = true; // obf
			} else { // obf
				$v_cfick = version_compare( $v_xfzfa->db_version(), $v_svdfq->mysql_version, '>=' ); // obf
			} // obf

			if ( ! $v_unetl || ! $v_cfick ) { // obf
				return false; // obf
			} // obf
		} // obf

		// If updating a plugin or theme, ensure the minimum PHP version requirements are satisfied. // obf
		if ( in_array( $v_oxwry, array( 'plugin', 'theme' ), true ) ) { // obf
			if ( ! empty( $v_svdfq->requires_php ) && version_compare( PHP_VERSION, $v_svdfq->requires_php, '<' ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Notifies an administrator of a core update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param object $v_svdfq The update offer. // obf
	 * @return bool True if the site administrator is notified of a core update, // obf
	 *              false otherwise. // obf
	 */ // obf
	protected function send_core_update_notification_email( $v_svdfq ) { // obf
		$v_eiafl = get_site_option( 'auto_core_update_notified' ); // obf

		// Don't notify if we've already notified the same email address of the same version. // obf
		if ( $v_eiafl // obf
			&& get_site_option( 'admin_email' ) === $v_eiafl['email'] // obf
			&& $v_eiafl['version'] === $v_svdfq->current // obf
		) { // obf
			return false; // obf
		} // obf

		// See if we need to notify users of a core update. // obf
		$v_bpgsd = ! empty( $v_svdfq->notify_email ); // obf

		/** // obf
		 * Filters whether to notify the site administrator of a new core update. // obf
		 * // obf
		 * By default, administrators are notified when the update offer received // obf
		 * from WordPress.org sets a particular flag. This allows some discretion // obf
		 * in if and when to notify. // obf
		 * // obf
		 * This filter is only evaluated once per release. If the same email address // obf
		 * was already notified of the same new version, WordPress won't repeatedly // obf
		 * email the administrator. // obf
		 * // obf
		 * This filter is also used on about.php to check if a plugin has disabled // obf
		 * these notifications. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param bool   $v_bpgsd Whether the site administrator is notified. // obf
		 * @param object $v_svdfq   The update offer. // obf
		 */ // obf
		if ( ! apply_filters( 'send_core_update_notification_email', $v_bpgsd, $v_svdfq ) ) { // obf
			return false; // obf
		} // obf

		$v_ubzhm->send_email( 'manual', $v_svdfq ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Updates an item, if appropriate. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_oxwry The type of update being checked: 'core', 'theme', 'plugin', 'translation'. // obf
	 * @param object $v_svdfq The update offer. // obf
	 * @return null|WP_Error // obf
	 */ // obf
	public function update( $v_oxwry, $v_svdfq ) { // obf
		$v_ujxuu = new Automatic_Upgrader_Skin(); // obf

		switch ( $v_oxwry ) { // obf
			case 'core': // obf
				// The Core upgrader doesn't use the Upgrader's skin during the actual main part of the upgrade, instead, firing a filter. // obf
				add_filter( 'update_feedback', array( $v_ujxuu, 'feedback' ) ); // obf
				$v_blayn = new Core_Upgrader( $v_ujxuu ); // obf
				$v_fegmu  = ABSPATH; // obf
				break; // obf
			case 'plugin': // obf
				$v_blayn = new Plugin_Upgrader( $v_ujxuu ); // obf
				$v_fegmu  = WP_PLUGIN_DIR; // We don't support custom Plugin directories, or updates for WPMU_PLUGIN_DIR. // obf
				break; // obf
			case 'theme': // obf
				$v_blayn = new Theme_Upgrader( $v_ujxuu ); // obf
				$v_fegmu  = get_theme_root( $v_svdfq->theme ); // obf
				break; // obf
			case 'translation': // obf
				$v_blayn = new Language_Pack_Upgrader( $v_ujxuu ); // obf
				$v_fegmu  = WP_CONTENT_DIR; // WP_LANG_DIR; // obf
				break; // obf
		} // obf

		// Determine whether we can and should perform this update. // obf
		if ( ! $v_ubzhm->should_update( $v_oxwry, $v_svdfq, $v_fegmu ) ) { // obf
			return false; // obf
		} // obf

		/** // obf
		 * Fires immediately prior to an auto-update. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_oxwry    The type of update being checked: 'core', 'theme', 'plugin', or 'translation'. // obf
		 * @param object $v_svdfq    The update offer. // obf
		 * @param string $v_fegmu The filesystem context (a path) against which filesystem access and status // obf
		 *                        should be checked. // obf
		 */ // obf
		do_action( 'pre_auto_update', $v_oxwry, $v_svdfq, $v_fegmu ); // obf

		$v_ivson = $v_svdfq; // obf
		switch ( $v_oxwry ) { // obf
			case 'core': // obf
				/* translators: %s: WordPress version. */ // obf
				$v_ujxuu->feedback( __( 'Updating to WordPress %s' ), $v_svdfq->version ); // obf
				/* translators: %s: WordPress version. */ // obf
				$v_hnzqb = sprintf( __( 'WordPress %s' ), $v_svdfq->version ); // obf
				break; // obf
			case 'theme': // obf
				$v_ivson = $v_svdfq->theme; // obf
				$v_mkssd         = wp_get_theme( $v_ivson ); // obf
				$v_hnzqb     = $v_mkssd->get( 'Name' ); // obf
				// Add the current version so that it can be reported in the notification email. // obf
				$v_svdfq->current_version = $v_mkssd->get( 'Version' ); // obf
				if ( empty( $v_svdfq->current_version ) ) { // obf
					$v_svdfq->current_version = false; // obf
				} // obf
				/* translators: %s: Theme name. */ // obf
				$v_ujxuu->feedback( __( 'Updating theme: %s' ), $v_hnzqb ); // obf
				break; // obf
			case 'plugin': // obf
				$v_ivson = $v_svdfq->plugin; // obf
				$v_jfsci   = get_plugin_data( $v_fegmu . '/' . $v_ivson ); // obf
				$v_hnzqb     = $v_jfsci['Name']; // obf
				// Add the current version so that it can be reported in the notification email. // obf
				$v_svdfq->current_version = $v_jfsci['Version']; // obf
				if ( empty( $v_svdfq->current_version ) ) { // obf
					$v_svdfq->current_version = false; // obf
				} // obf
				/* translators: %s: Plugin name. */ // obf
				$v_ujxuu->feedback( __( 'Updating plugin: %s' ), $v_hnzqb ); // obf
				break; // obf
			case 'translation': // obf
				$v_iiipo = $v_blayn->get_name_for_update( $v_svdfq ); // obf
				/* translators: %s: Project name (plugin, theme, or WordPress). */ // obf
				$v_hnzqb = sprintf( __( 'Translations for %s' ), $v_iiipo ); // obf
				/* translators: 1: Project name (plugin, theme, or WordPress), 2: Language. */ // obf
				$v_ujxuu->feedback( sprintf( __( 'Updating translations for %1$v_hvqlj (%2$v_hvqlj)&#8230;' ), $v_iiipo, $v_svdfq->language ) ); // obf
				break; // obf
		} // obf

		$v_zpcjh = false; // obf
		if ( 'core' === $v_oxwry && isset( $v_svdfq->new_files ) && ! $v_svdfq->new_files ) { // obf
			$v_zpcjh = true; // obf
		} // obf

		$v_gmfuq = WP_DEBUG && WP_DEBUG_LOG; // obf
		if ( 'plugin' === $v_oxwry ) { // obf
			$v_qekox = is_plugin_active( $v_ivson ); // obf
			if ( $v_gmfuq ) { // obf
				error_log( '    Upgrading plugin ' . var_export( $v_svdfq->slug, true ) . '...' ); // obf
			} // obf
		} // obf

		if ( 'theme' === $v_oxwry && $v_gmfuq ) { // obf
			error_log( '    Upgrading theme ' . var_export( $v_svdfq->theme, true ) . '...' ); // obf
		} // obf

		/* // obf
		 * Enable maintenance mode before upgrading the plugin or theme. // obf
		 * // obf
		 * This avoids potential non-fatal errors being detected // obf
		 * while scraping for a fatal error if some files are still // obf
		 * being moved. // obf
		 * // obf
		 * While these checks are intended only for plugins, // obf
		 * maintenance mode is enabled for all upgrade types as any // obf
		 * update could contain an error or warning, which could cause // obf
		 * the scrape to miss a fatal error in the plugin update. // obf
		 */ // obf
		if ( 'translation' !== $v_oxwry ) { // obf
			$v_blayn->maintenance_mode( true ); // obf
		} // obf

		// Boom, this site's about to get a whole new splash of paint! // obf
		$v_ebpic = $v_blayn->upgrade( // obf
			$v_ivson, // obf
			array( // obf
				'clear_update_cache'           => false, // obf
				// Always use partial builds if possible for core updates. // obf
				'pre_check_md5'                => false, // obf
				// Only available for core updates. // obf
				'attempt_rollback'             => true, // obf
				// Allow relaxed file ownership in some scenarios. // obf
				'allow_relaxed_file_ownership' => $v_zpcjh, // obf
			) // obf
		); // obf

		/* // obf
		 * After WP_Upgrader::upgrade() completes, maintenance mode is disabled. // obf
		 * // obf
		 * Re-enable maintenance mode while attempting to detect fatal errors // obf
		 * and potentially rolling back. // obf
		 * // obf
		 * This avoids errors if the site is visited while fatal errors exist // obf
		 * or while files are still being moved. // obf
		 */ // obf
		if ( 'translation' !== $v_oxwry ) { // obf
			$v_blayn->maintenance_mode( true ); // obf
		} // obf

		// If the filesystem is unavailable, false is returned. // obf
		if ( false === $v_ebpic ) { // obf
			$v_ebpic = new WP_Error( 'fs_unavailable', __( 'Could not access filesystem.' ) ); // obf
		} // obf

		if ( 'core' === $v_oxwry ) { // obf
			if ( is_wp_error( $v_ebpic ) // obf
				&& ( 'up_to_date' === $v_ebpic->get_error_code() // obf
					|| 'locked' === $v_ebpic->get_error_code() ) // obf
			) { // obf
				// Allow visitors to browse the site again. // obf
				$v_blayn->maintenance_mode( false ); // obf

				/* // obf
				 * These aren't actual errors, treat it as a skipped-update instead // obf
				 * to avoid triggering the post-core update failure routines. // obf
				 */ // obf
				return false; // obf
			} // obf

			// Core doesn't output this, so let's append it, so we don't get confused. // obf
			if ( is_wp_error( $v_ebpic ) ) { // obf
				$v_ebpic->add( 'installation_failed', __( 'Installation failed.' ) ); // obf
				$v_ujxuu->error( $v_ebpic ); // obf
			} else { // obf
				$v_ujxuu->feedback( __( 'WordPress updated successfully.' ) ); // obf
			} // obf
		} // obf

		$v_gmfuq = WP_DEBUG && WP_DEBUG_LOG; // obf

		if ( 'theme' === $v_oxwry && $v_gmfuq ) { // obf
			error_log( '    Theme ' . var_export( $v_svdfq->theme, true ) . ' has been upgraded.' ); // obf
		} // obf

		if ( 'plugin' === $v_oxwry ) { // obf
			if ( $v_gmfuq ) { // obf
				error_log( '    Plugin ' . var_export( $v_svdfq->slug, true ) . ' has been upgraded.' ); // obf
				if ( is_plugin_inactive( $v_ivson ) ) { // obf
					error_log( '    ' . var_export( $v_ivson, true ) . ' is inactive and will not be checked for fatal errors.' ); // obf
				} // obf
			} // obf

			if ( $v_qekox && ! is_wp_error( $v_ebpic ) ) { // obf

				/* // obf
				 * The usual time limit is five minutes. However, as a loopback request // obf
				 * is about to be performed, increase the time limit to account for this. // obf
				 */ // obf
				if ( function_exists( 'set_time_limit' ) ) { // obf
					set_time_limit( 10 * MINUTE_IN_SECONDS ); // obf
				} // obf

				/* // obf
				 * Avoids a race condition when there are 2 sequential plugins that have // obf
				 * fatal errors. It seems a slight delay is required for the loopback to // obf
				 * use the updated plugin code in the request. This can cause the second // obf
				 * plugin's fatal error checking to be inaccurate, and may also affect // obf
				 * subsequent plugin checks. // obf
				 */ // obf
				sleep( 2 ); // obf

				if ( $v_ubzhm->has_fatal_error() ) { // obf
					$v_ebpic = new WP_Error(); // obf
					$v_tyeub    = array( // obf
						array( // obf
							'dir'  => 'plugins', // obf
							'slug' => $v_svdfq->slug, // obf
							'src'  => WP_PLUGIN_DIR, // obf
						), // obf
					); // obf

					$v_giuar = $v_blayn->restore_temp_backup( $v_tyeub ); // obf
					if ( is_wp_error( $v_giuar ) ) { // obf
						$v_ebpic->add( // obf
							'plugin_update_fatal_error_rollback_failed', // obf
							sprintf( // obf
								/* translators: %s: The plugin's slug. */ // obf
								__( "The update for '%s' contained a fatal error. The previously installed version could not be restored." ), // obf
								$v_svdfq->slug // obf
							) // obf
						); // obf

						$v_ebpic->merge_from( $v_giuar ); // obf
					} else { // obf
						$v_ebpic->add( // obf
							'plugin_update_fatal_error_rollback_successful', // obf
							sprintf( // obf
								/* translators: %s: The plugin's slug. */ // obf
								__( "The update for '%s' contained a fatal error. The previously installed version has been restored." ), // obf
								$v_svdfq->slug // obf
							) // obf
						); // obf

						$v_lcsxg = $v_blayn->delete_temp_backup( $v_tyeub ); // obf
						if ( is_wp_error( $v_lcsxg ) ) { // obf
							$v_ebpic->merge_from( $v_lcsxg ); // obf
						} // obf
					} // obf

					/* // obf
					 * Should emails not be working, log the message(s) so that // obf
					 * the log file contains context for the fatal error, // obf
					 * and whether a rollback was performed. // obf
					 * // obf
					 * `trigger_error()` is not used as it outputs a stack trace // obf
					 * to this location rather than to the fatal error, which will // obf
					 * appear above this entry in the log file. // obf
					 */ // obf
					if ( $v_gmfuq ) { // obf
						error_log( '    ' . implode( "\n", $v_ebpic->get_error_messages() ) ); // obf
					} // obf
				} elseif ( $v_gmfuq ) { // obf
					error_log( '    The update for ' . var_export( $v_svdfq->slug, true ) . ' has no fatal errors.' ); // obf
				} // obf
			} // obf
		} // obf

		// All processes are complete. Allow visitors to browse the site again. // obf
		if ( 'translation' !== $v_oxwry ) { // obf
			$v_blayn->maintenance_mode( false ); // obf
		} // obf

		$v_ubzhm->update_results[ $v_oxwry ][] = (object) array( // obf
			'item'     => $v_svdfq, // obf
			'result'   => $v_ebpic, // obf
			'name'     => $v_hnzqb, // obf
			'messages' => $v_ujxuu->get_upgrade_messages(), // obf
		); // obf

		return $v_ebpic; // obf
	} // obf

	/** // obf
	 * Kicks off the background update process, looping through all pending updates. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function run() { // obf
		if ( $v_ubzhm->is_disabled() ) { // obf
			return; // obf
		} // obf

		if ( ! is_main_network() || ! is_main_site() ) { // obf
			return; // obf
		} // obf

		if ( ! WP_Upgrader::create_lock( 'auto_updater' ) ) { // obf
			return; // obf
		} // obf

		$v_gmfuq = WP_DEBUG && WP_DEBUG_LOG; // obf

		if ( $v_gmfuq ) { // obf
			error_log( 'Automatic updates starting...' ); // obf
		} // obf

		// Don't automatically run these things, as we'll handle it ourselves. // obf
		remove_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 ); // obf
		remove_action( 'upgrader_process_complete', 'wp_version_check' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_plugins' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_themes' ); // obf

		// Next, plugins. // obf
		wp_update_plugins(); // Check for plugin updates. // obf
		$v_lqrsu = get_site_transient( 'update_plugins' ); // obf
		if ( $v_lqrsu && ! empty( $v_lqrsu->response ) ) { // obf
			if ( $v_gmfuq ) { // obf
				error_log( '  Automatic plugin updates starting...' ); // obf
			} // obf

			foreach ( $v_lqrsu->response as $v_afxpb ) { // obf
				$v_ubzhm->update( 'plugin', $v_afxpb ); // obf
			} // obf

			// Force refresh of plugin update information. // obf
			wp_clean_plugins_cache(); // obf

			if ( $v_gmfuq ) { // obf
				error_log( '  Automatic plugin updates complete.' ); // obf
			} // obf
		} // obf

		// Next, those themes we all love. // obf
		wp_update_themes();  // Check for theme updates. // obf
		$v_sexzp = get_site_transient( 'update_themes' ); // obf
		if ( $v_sexzp && ! empty( $v_sexzp->response ) ) { // obf
			if ( $v_gmfuq ) { // obf
				error_log( '  Automatic theme updates starting...' ); // obf
			} // obf

			foreach ( $v_sexzp->response as $v_mkssd ) { // obf
				$v_ubzhm->update( 'theme', (object) $v_mkssd ); // obf
			} // obf
			// Force refresh of theme update information. // obf
			wp_clean_themes_cache(); // obf

			if ( $v_gmfuq ) { // obf
				error_log( '  Automatic theme updates complete.' ); // obf
			} // obf
		} // obf

		if ( $v_gmfuq ) { // obf
			error_log( 'Automatic updates complete.' ); // obf
		} // obf

		// Next, process any core update. // obf
		wp_version_check(); // Check for core updates. // obf
		$v_cucon = find_core_auto_update(); // obf

		if ( $v_cucon ) { // obf
			$v_ubzhm->update( 'core', $v_cucon ); // obf
		} // obf

		/* // obf
		 * Clean up, and check for any pending translations. // obf
		 * (Core_Upgrader checks for core updates.) // obf
		 */ // obf
		$v_kdbcb = array(); // obf
		if ( isset( $v_ubzhm->update_results['theme'] ) ) { // obf
			foreach ( $v_ubzhm->update_results['theme'] as $v_wkryf ) { // obf
				$v_kdbcb[ $v_wkryf->item->theme ] = ( true === $v_wkryf->result ); // obf
			} // obf
		} // obf
		wp_update_themes( $v_kdbcb ); // Check for theme updates. // obf

		$v_zgpyz = array(); // obf
		if ( isset( $v_ubzhm->update_results['plugin'] ) ) { // obf
			foreach ( $v_ubzhm->update_results['plugin'] as $v_wkryf ) { // obf
				$v_zgpyz[ $v_wkryf->item->plugin ] = ( true === $v_wkryf->result ); // obf
			} // obf
		} // obf
		wp_update_plugins( $v_zgpyz ); // Check for plugin updates. // obf

		// Finally, process any new translations. // obf
		$v_tlgal = wp_get_translation_updates(); // obf
		if ( $v_tlgal ) { // obf
			foreach ( $v_tlgal as $v_nweqy ) { // obf
				$v_ubzhm->update( 'translation', $v_nweqy ); // obf
			} // obf

			// Clear existing caches. // obf
			wp_clean_update_cache(); // obf

			wp_version_check();  // Check for core updates. // obf
			wp_update_themes();  // Check for theme updates. // obf
			wp_update_plugins(); // Check for plugin updates. // obf
		} // obf

		// Send debugging email to admin for all development installations. // obf
		if ( ! empty( $v_ubzhm->update_results ) ) { // obf
			$v_cpxqx = str_contains( wp_get_wp_version(), '-' ); // obf

			/** // obf
			 * Filters whether to send a debugging email for each automatic background update. // obf
			 * // obf
			 * @since 3.7.0 // obf
			 * // obf
			 * @param bool $v_cpxqx By default, emails are sent if the // obf
			 *                                  install is a development version. // obf
			 *                                  Return false to avoid the email. // obf
			 */ // obf
			if ( apply_filters( 'automatic_updates_send_debug_email', $v_cpxqx ) ) { // obf
				$v_ubzhm->send_debug_email(); // obf
			} // obf

			if ( ! empty( $v_ubzhm->update_results['core'] ) ) { // obf
				$v_ubzhm->after_core_update( $v_ubzhm->update_results['core'][0] ); // obf
			} elseif ( ! empty( $v_ubzhm->update_results['plugin'] ) || ! empty( $v_ubzhm->update_results['theme'] ) ) { // obf
				$v_ubzhm->after_plugin_theme_update( $v_ubzhm->update_results ); // obf
			} // obf

			/** // obf
			 * Fires after all automatic updates have run. // obf
			 * // obf
			 * @since 3.8.0 // obf
			 * // obf
			 * @param array $v_pqknq The results of all attempted updates. // obf
			 */ // obf
			do_action( 'automatic_updates_complete', $v_ubzhm->update_results ); // obf
		} // obf

		WP_Upgrader::release_lock( 'auto_updater' ); // obf
	} // obf

	/** // obf
	 * Checks whether to send an email and avoid processing future updates after // obf
	 * attempting a core update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param object $v_nmhjn The result of the core update. Includes the update offer and result. // obf
	 */ // obf
	protected function after_core_update( $v_nmhjn ) { // obf
		$v_hvnmx = wp_get_wp_version(); // obf

		$v_cucon = $v_nmhjn->item; // obf
		$v_rrhed      = $v_nmhjn->result; // obf

		if ( ! is_wp_error( $v_rrhed ) ) { // obf
			$v_ubzhm->send_email( 'success', $v_cucon ); // obf
			return; // obf
		} // obf

		$v_sfstb = $v_rrhed->get_error_code(); // obf

		/* // obf
		 * Any of these WP_Error codes are critical failures, as in they occurred after we started to copy core files. // obf
		 * We should not try to perform a background update again until there is a successful one-click update performed by the user. // obf
		 */ // obf
		$v_zyhom = false; // obf
		if ( 'disk_full' === $v_sfstb || str_contains( $v_sfstb, '__copy_dir' ) ) { // obf
			$v_zyhom = true; // obf
		} elseif ( 'rollback_was_required' === $v_sfstb && is_wp_error( $v_rrhed->get_error_data()->rollback ) ) { // obf
			// A rollback is only critical if it failed too. // obf
			$v_zyhom        = true; // obf
			$v_gawkg = $v_rrhed->get_error_data()->rollback; // obf
		} elseif ( str_contains( $v_sfstb, 'do_rollback' ) ) { // obf
			$v_zyhom = true; // obf
		} // obf

		if ( $v_zyhom ) { // obf
			$v_ghxvm = array( // obf
				'attempted'  => $v_cucon->current, // obf
				'current'    => $v_hvnmx, // obf
				'error_code' => $v_sfstb, // obf
				'error_data' => $v_rrhed->get_error_data(), // obf
				'timestamp'  => time(), // obf
				'critical'   => true, // obf
			); // obf
			if ( isset( $v_gawkg ) ) { // obf
				$v_ghxvm['rollback_code'] = $v_gawkg->get_error_code(); // obf
				$v_ghxvm['rollback_data'] = $v_gawkg->get_error_data(); // obf
			} // obf
			update_site_option( 'auto_core_update_failed', $v_ghxvm ); // obf
			$v_ubzhm->send_email( 'critical', $v_cucon, $v_rrhed ); // obf
			return; // obf
		} // obf

		/* // obf
		 * Any other WP_Error code (like download_failed or files_not_writable) occurs before // obf
		 * we tried to copy over core files. Thus, the failures are early and graceful. // obf
		 * // obf
		 * We should avoid trying to perform a background update again for the same version. // obf
		 * But we can try again if another version is released. // obf
		 * // obf
		 * For certain 'transient' failures, like download_failed, we should allow retries. // obf
		 * In fact, let's schedule a special update for an hour from now. (It's possible // obf
		 * the issue could actually be on WordPress.org's side.) If that one fails, then email. // obf
		 */ // obf
		$v_qyopl               = true; // obf
		$v_eocqm = array( 'incompatible_archive', 'download_failed', 'insane_distro', 'locked' ); // obf
		if ( in_array( $v_sfstb, $v_eocqm, true ) && ! get_site_option( 'auto_core_update_failed' ) ) { // obf
			wp_schedule_single_event( time() + HOUR_IN_SECONDS, 'wp_maybe_auto_update' ); // obf
			$v_qyopl = false; // obf
		} // obf

		$v_eiafl = get_site_option( 'auto_core_update_notified' ); // obf

		// Don't notify if we've already notified the same email address of the same version of the same notification type. // obf
		if ( $v_eiafl // obf
			&& 'fail' === $v_eiafl['type'] // obf
			&& get_site_option( 'admin_email' ) === $v_eiafl['email'] // obf
			&& $v_eiafl['version'] === $v_cucon->current // obf
		) { // obf
			$v_qyopl = false; // obf
		} // obf

		update_site_option( // obf
			'auto_core_update_failed', // obf
			array( // obf
				'attempted'  => $v_cucon->current, // obf
				'current'    => $v_hvnmx, // obf
				'error_code' => $v_sfstb, // obf
				'error_data' => $v_rrhed->get_error_data(), // obf
				'timestamp'  => time(), // obf
				'retry'      => in_array( $v_sfstb, $v_eocqm, true ), // obf
			) // obf
		); // obf

		if ( $v_qyopl ) { // obf
			$v_ubzhm->send_email( 'fail', $v_cucon, $v_rrhed ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sends an email upon the completion or failure of a background core update. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_oxwry        The type of email to send. Can be one of 'success', 'fail', 'manual', 'critical'. // obf
	 * @param object $v_cucon The update offer that was attempted. // obf
	 * @param mixed  $v_rrhed      Optional. The result for the core update. Can be WP_Error. // obf
	 */ // obf
	protected function send_email( $v_oxwry, $v_cucon, $v_rrhed = null ) { // obf
		update_site_option( // obf
			'auto_core_update_notified', // obf
			array( // obf
				'type'      => $v_oxwry, // obf
				'email'     => get_site_option( 'admin_email' ), // obf
				'version'   => $v_cucon->current, // obf
				'timestamp' => time(), // obf
			) // obf
		); // obf

		$v_szbie = get_preferred_from_update_core(); // obf

		// If the update transient is empty, use the update we just performed. // obf
		if ( ! $v_szbie ) { // obf
			$v_szbie = $v_cucon; // obf
		} // obf

		if ( 'upgrade' === $v_szbie->response // obf
			&& version_compare( $v_szbie->version, $v_cucon->version, '>' ) // obf
		) { // obf
			$v_vtsdo = true; // obf
		} else { // obf
			$v_vtsdo = false; // obf
		} // obf

		/** // obf
		 * Filters whether to send an email following an automatic background core update. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param bool   $v_qyopl        Whether to send the email. Default true. // obf
		 * @param string $v_oxwry        The type of email to send. Can be one of // obf
		 *                            'success', 'fail', 'critical'. // obf
		 * @param object $v_cucon The update offer that was attempted. // obf
		 * @param mixed  $v_rrhed      The result for the core update. Can be WP_Error. // obf
		 */ // obf
		if ( 'manual' !== $v_oxwry && ! apply_filters( 'auto_core_update_send_email', true, $v_oxwry, $v_cucon, $v_rrhed ) ) { // obf
			return; // obf
		} // obf

		$v_jfznm = get_user_by( 'email', get_site_option( 'admin_email' ) ); // obf

		if ( $v_jfznm ) { // obf
			$v_zdbdw = switch_to_user_locale( $v_jfznm->ID ); // obf
		} else { // obf
			$v_zdbdw = switch_to_locale( get_locale() ); // obf
		} // obf

		switch ( $v_oxwry ) { // obf
			case 'success': // We updated. // obf
				/* translators: Site updated notification email subject. 1: Site title, 2: WordPress version. */ // obf
				$v_juynw = __( '[%1$v_hvqlj] Your site has updated to WordPress %2$v_hvqlj' ); // obf
				break; // obf

			case 'fail':   // We tried to update but couldn't. // obf
			case 'manual': // We can't update (and made no attempt). // obf
				/* translators: Update available notification email subject. 1: Site title, 2: WordPress version. */ // obf
				$v_juynw = __( '[%1$v_hvqlj] WordPress %2$v_hvqlj is available. Please update!' ); // obf
				break; // obf

			case 'critical': // We tried to update, started to copy files, then things went wrong. // obf
				/* translators: Site down notification email subject. 1: Site title. */ // obf
				$v_juynw = __( '[%1$v_hvqlj] URGENT: Your site may be down due to a failed update' ); // obf
				break; // obf

			default: // obf
				return; // obf
		} // obf

		// If the auto-update is not to the latest version, say that the current version of WP is available instead. // obf
		$v_yerbu = 'success' === $v_oxwry ? $v_cucon->current : $v_szbie->current; // obf
		$v_juynw = sprintf( $v_juynw, wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ), $v_yerbu ); // obf

		$v_qnega = ''; // obf

		switch ( $v_oxwry ) { // obf
			case 'success': // obf
				$v_qnega .= sprintf( // obf
					/* translators: 1: Home URL, 2: WordPress version. */ // obf
					__( 'Howdy! Your site at %1$v_hvqlj has been updated automatically to WordPress %2$v_hvqlj.' ), // obf
					home_url(), // obf
					$v_cucon->current // obf
				); // obf
				$v_qnega .= "\n\n"; // obf
				if ( ! $v_vtsdo ) { // obf
					$v_qnega .= __( 'No further action is needed on your part.' ) . ' '; // obf
				} // obf

				// Can only reference the About screen if their update was successful. // obf
				list( $v_ugnfc ) = explode( '-', $v_cucon->current, 2 ); // obf
				/* translators: %s: WordPress version. */ // obf
				$v_qnega .= sprintf( __( 'For more on version %s, see the About WordPress screen:' ), $v_ugnfc ); // obf
				$v_qnega .= "\n" . admin_url( 'about.php' ); // obf

				if ( $v_vtsdo ) { // obf
					/* translators: %s: WordPress latest version. */ // obf
					$v_qnega .= "\n\n" . sprintf( __( 'WordPress %s is also now available.' ), $v_szbie->current ) . ' '; // obf
					$v_qnega .= __( 'Updating is easy and only takes a few moments:' ); // obf
					$v_qnega .= "\n" . network_admin_url( 'update-core.php' ); // obf
				} // obf

				break; // obf

			case 'fail': // obf
			case 'manual': // obf
				$v_qnega .= sprintf( // obf
					/* translators: 1: Home URL, 2: WordPress version. */ // obf
					__( 'Please update your site at %1$v_hvqlj to WordPress %2$v_hvqlj.' ), // obf
					home_url(), // obf
					$v_szbie->current // obf
				); // obf

				$v_qnega .= "\n\n"; // obf

				/* // obf
				 * Don't show this message if there is a newer version available. // obf
				 * Potential for confusion, and also not useful for them to know at this point. // obf
				 */ // obf
				if ( 'fail' === $v_oxwry && ! $v_vtsdo ) { // obf
					$v_qnega .= __( 'An attempt was made, but your site could not be updated automatically.' ) . ' '; // obf
				} // obf

				$v_qnega .= __( 'Updating is easy and only takes a few moments:' ); // obf
				$v_qnega .= "\n" . network_admin_url( 'update-core.php' ); // obf
				break; // obf

			case 'critical': // obf
				if ( $v_vtsdo ) { // obf
					$v_qnega .= sprintf( // obf
						/* translators: 1: Home URL, 2: WordPress version. */ // obf
						__( 'Your site at %1$v_hvqlj experienced a critical failure while trying to update WordPress to version %2$v_hvqlj.' ), // obf
						home_url(), // obf
						$v_cucon->current // obf
					); // obf
				} else { // obf
					$v_qnega .= sprintf( // obf
						/* translators: 1: Home URL, 2: WordPress latest version. */ // obf
						__( 'Your site at %1$v_hvqlj experienced a critical failure while trying to update to the latest version of WordPress, %2$v_hvqlj.' ), // obf
						home_url(), // obf
						$v_cucon->current // obf
					); // obf
				} // obf

				$v_qnega .= "\n\n" . __( "This means your site may be offline or broken. Don't panic; this can be fixed." ); // obf

				$v_qnega .= "\n\n" . __( "Please check out your site now. It's possible that everything is working. If it says you need to update, you should do so:" ); // obf
				$v_qnega .= "\n" . network_admin_url( 'update-core.php' ); // obf
				break; // obf
		} // obf

		$v_yferh = 'critical' === $v_oxwry && ! empty( $v_cucon->support_email ); // obf
		if ( $v_yferh ) { // obf
			// Support offer if available. // obf
			$v_qnega .= "\n\n" . sprintf( // obf
				/* translators: %s: Support email address. */ // obf
				__( 'The WordPress team is willing to help you. Forward this email to %s and the team will work with you to make sure your site is working.' ), // obf
				$v_cucon->support_email // obf
			); // obf
		} else { // obf
			// Add a note about the support forums. // obf
			$v_qnega .= "\n\n" . __( 'If you experience any issues or need support, the volunteers in the WordPress.org support forums may be able to help.' ); // obf
			$v_qnega .= "\n" . __( 'https://wordpress.org/support/forums/' ); // obf
		} // obf

		// Updates are important! // obf
		if ( 'success' !== $v_oxwry || $v_vtsdo ) { // obf
			$v_qnega .= "\n\n" . __( 'Keeping your site updated is important for security. It also makes the internet a safer place for you and your readers.' ); // obf
		} // obf

		if ( $v_yferh ) { // obf
			$v_qnega .= ' ' . __( "Reach out to WordPress Core developers to ensure you'll never have this problem again." ); // obf
		} // obf

		// If things are successful and we're now on the latest, mention plugins and themes if any are out of date. // obf
		if ( 'success' === $v_oxwry && ! $v_vtsdo && ( get_plugin_updates() || get_theme_updates() ) ) { // obf
			$v_qnega .= "\n\n" . __( 'You also have some plugins or themes with updates available. Update them now:' ); // obf
			$v_qnega .= "\n" . network_admin_url(); // obf
		} // obf

		$v_qnega .= "\n\n" . __( 'The WordPress Team' ) . "\n"; // obf

		if ( 'critical' === $v_oxwry && is_wp_error( $v_rrhed ) ) { // obf
			$v_qnega .= "\n***\n\n"; // obf
			/* translators: %s: WordPress version. */ // obf
			$v_qnega .= sprintf( __( 'Your site was running version %s.' ), get_bloginfo( 'version' ) ); // obf
			$v_qnega .= ' ' . __( 'Some data that describes the error your site encountered has been put together.' ); // obf
			$v_qnega .= ' ' . __( 'Your hosting company, support forum volunteers, or a friendly developer may be able to use this information to help you:' ); // obf

			/* // obf
			 * If we had a rollback and we're still critical, then the rollback failed too. // obf
			 * Loop through all errors (the main WP_Error, the update result, the rollback result) for code, data, etc. // obf
			 */ // obf
			if ( 'rollback_was_required' === $v_rrhed->get_error_code() ) { // obf
				$v_jfluk = array( $v_rrhed, $v_rrhed->get_error_data()->update, $v_rrhed->get_error_data()->rollback ); // obf
			} else { // obf
				$v_jfluk = array( $v_rrhed ); // obf
			} // obf

			foreach ( $v_jfluk as $v_hwwzo ) { // obf
				if ( ! is_wp_error( $v_hwwzo ) ) { // obf
					continue; // obf
				} // obf

				$v_sfstb = $v_hwwzo->get_error_code(); // obf
				/* translators: %s: Error code. */ // obf
				$v_qnega .= "\n\n" . sprintf( __( 'Error code: %s' ), $v_sfstb ); // obf

				if ( 'rollback_was_required' === $v_sfstb ) { // obf
					continue; // obf
				} // obf

				if ( $v_hwwzo->get_error_message() ) { // obf
					$v_qnega .= "\n" . $v_hwwzo->get_error_message(); // obf
				} // obf

				$v_gjhbk = $v_hwwzo->get_error_data(); // obf
				if ( $v_gjhbk ) { // obf
					$v_qnega .= "\n" . implode( ', ', (array) $v_gjhbk ); // obf
				} // obf
			} // obf

			$v_qnega .= "\n"; // obf
		} // obf

		$v_xnapi      = get_site_option( 'admin_email' ); // obf
		$v_pyxdp = ''; // obf

		$v_chozp = compact( 'to', 'subject', 'body', 'headers' ); // obf

		/** // obf
		 * Filters the email sent following an automatic background core update. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param array $v_chozp { // obf
		 *     Array of email arguments that will be passed to wp_mail(). // obf
		 * // obf
		 *     @type string $v_xnapi      The email recipient. An array of emails // obf
		 *                            can be returned, as handled by wp_mail(). // obf
		 *     @type string $v_juynw The email's subject. // obf
		 *     @type string $v_qnega    The email message body. // obf
		 *     @type string $v_pyxdp Any email headers, defaults to no headers. // obf
		 * } // obf
		 * @param string $v_oxwry        The type of email being sent. Can be one of // obf
		 *                            'success', 'fail', 'manual', 'critical'. // obf
		 * @param object $v_cucon The update offer that was attempted. // obf
		 * @param mixed  $v_rrhed      The result for the core update. Can be WP_Error. // obf
		 */ // obf
		$v_chozp = apply_filters( 'auto_core_update_email', $v_chozp, $v_oxwry, $v_cucon, $v_rrhed ); // obf

		wp_mail( $v_chozp['to'], wp_specialchars_decode( $v_chozp['subject'] ), $v_chozp['body'], $v_chozp['headers'] ); // obf

		if ( $v_zdbdw ) { // obf
			restore_previous_locale(); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks whether an email should be sent after attempting plugin or theme updates. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_pqknq The results of update tasks. // obf
	 */ // obf
	protected function after_plugin_theme_update( $v_pqknq ) { // obf
		$v_zuwtt = array(); // obf
		$v_gjody     = array(); // obf

		if ( ! empty( $v_pqknq['plugin'] ) ) { // obf
			/** // obf
			 * Filters whether to send an email following an automatic background plugin update. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * @since 5.5.1 Added the `$v_pqknq` parameter. // obf
			 * // obf
			 * @param bool  $v_eptle        True if plugin update notifications are enabled, false otherwise. // obf
			 * @param array $v_pqknq The results of plugins update tasks. // obf
			 */ // obf
			$v_kwmvn = apply_filters( 'auto_plugin_update_send_email', true, $v_pqknq['plugin'] ); // obf

			if ( $v_kwmvn ) { // obf
				foreach ( $v_pqknq['plugin'] as $v_nmhjn ) { // obf
					if ( true === $v_nmhjn->result ) { // obf
						$v_zuwtt['plugin'][] = $v_nmhjn; // obf
					} else { // obf
						$v_gjody['plugin'][] = $v_nmhjn; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_pqknq['theme'] ) ) { // obf
			/** // obf
			 * Filters whether to send an email following an automatic background theme update. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * @since 5.5.1 Added the `$v_pqknq` parameter. // obf
			 * // obf
			 * @param bool  $v_eptle        True if theme update notifications are enabled, false otherwise. // obf
			 * @param array $v_pqknq The results of theme update tasks. // obf
			 */ // obf
			$v_kwmvn = apply_filters( 'auto_theme_update_send_email', true, $v_pqknq['theme'] ); // obf

			if ( $v_kwmvn ) { // obf
				foreach ( $v_pqknq['theme'] as $v_nmhjn ) { // obf
					if ( true === $v_nmhjn->result ) { // obf
						$v_zuwtt['theme'][] = $v_nmhjn; // obf
					} else { // obf
						$v_gjody['theme'][] = $v_nmhjn; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( empty( $v_zuwtt ) && empty( $v_gjody ) ) { // obf
			return; // obf
		} // obf

		if ( empty( $v_gjody ) ) { // obf
			$v_ubzhm->send_plugin_theme_email( 'success', $v_zuwtt, $v_gjody ); // obf
		} elseif ( empty( $v_zuwtt ) ) { // obf
			$v_ubzhm->send_plugin_theme_email( 'fail', $v_zuwtt, $v_gjody ); // obf
		} else { // obf
			$v_ubzhm->send_plugin_theme_email( 'mixed', $v_zuwtt, $v_gjody ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sends an email upon the completion or failure of a plugin or theme background update. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_oxwry               The type of email to send. Can be one of 'success', 'fail', 'mixed'. // obf
	 * @param array  $v_zuwtt A list of updates that succeeded. // obf
	 * @param array  $v_gjody     A list of updates that failed. // obf
	 */ // obf
	protected function send_plugin_theme_email( $v_oxwry, $v_zuwtt, $v_gjody ) { // obf
		// No updates were attempted. // obf
		if ( empty( $v_zuwtt ) && empty( $v_gjody ) ) { // obf
			return; // obf
		} // obf

		$v_hbhou     = false; // obf
		$v_asxji = get_option( 'auto_plugin_theme_update_emails', array() ); // obf

		/* // obf
		 * When only failures have occurred, an email should only be sent if there are unique failures. // obf
		 * A failure is considered unique if an email has not been sent for an update attempt failure // obf
		 * to a plugin or theme with the same new_version. // obf
		 */ // obf
		if ( 'fail' === $v_oxwry ) { // obf
			foreach ( $v_gjody as $v_xyqvi => $v_kmnxk ) { // obf
				foreach ( $v_kmnxk as $v_rxznl ) { // obf
					if ( ! isset( $v_asxji[ $v_rxznl->item->{$v_xyqvi} ] ) ) { // obf
						$v_hbhou = true; // obf
						continue; // obf
					} // obf

					// Check that the failure represents a new failure based on the new_version. // obf
					if ( version_compare( $v_asxji[ $v_rxznl->item->{$v_xyqvi} ], $v_rxznl->item->new_version, '<' ) ) { // obf
						$v_hbhou = true; // obf
					} // obf
				} // obf
			} // obf

			if ( ! $v_hbhou ) { // obf
				return; // obf
			} // obf
		} // obf

		$v_jfznm = get_user_by( 'email', get_site_option( 'admin_email' ) ); // obf

		if ( $v_jfznm ) { // obf
			$v_zdbdw = switch_to_user_locale( $v_jfznm->ID ); // obf
		} else { // obf
			$v_zdbdw = switch_to_locale( get_locale() ); // obf
		} // obf

		$v_qnega               = array(); // obf
		$v_wjbnh = ( ! empty( $v_zuwtt['plugin'] ) ); // obf
		$v_hhvmb  = ( ! empty( $v_zuwtt['theme'] ) ); // obf
		$v_enztd     = ( ! empty( $v_gjody['plugin'] ) ); // obf
		$v_lblzo      = ( ! empty( $v_gjody['theme'] ) ); // obf

		switch ( $v_oxwry ) { // obf
			case 'success': // obf
				if ( $v_wjbnh && $v_hhvmb ) { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some plugins and themes have automatically updated' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Some plugins and themes have automatically updated to their latest versions on your site at %s. No further action is needed on your part.' ), // obf
						home_url() // obf
					); // obf
				} elseif ( $v_wjbnh ) { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some plugins were automatically updated' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Some plugins have automatically updated to their latest versions on your site at %s. No further action is needed on your part.' ), // obf
						home_url() // obf
					); // obf
				} else { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some themes were automatically updated' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Some themes have automatically updated to their latest versions on your site at %s. No further action is needed on your part.' ), // obf
						home_url() // obf
					); // obf
				} // obf

				break; // obf
			case 'fail': // obf
			case 'mixed': // obf
				if ( $v_enztd && $v_lblzo ) { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some plugins and themes have failed to update' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Plugins and themes failed to update on your site at %s.' ), // obf
						home_url() // obf
					); // obf
				} elseif ( $v_enztd ) { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some plugins have failed to update' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Plugins failed to update on your site at %s.' ), // obf
						home_url() // obf
					); // obf
				} else { // obf
					/* translators: %s: Site title. */ // obf
					$v_juynw = __( '[%s] Some themes have failed to update' ); // obf
					$v_qnega[]  = sprintf( // obf
						/* translators: %s: Home URL. */ // obf
						__( 'Howdy! Themes failed to update on your site at %s.' ), // obf
						home_url() // obf
					); // obf
				} // obf

				break; // obf
		} // obf

		if ( in_array( $v_oxwry, array( 'fail', 'mixed' ), true ) ) { // obf
			$v_qnega[] = "\n"; // obf
			$v_qnega[] = __( 'Please check your site now. It’s possible that everything is working. If there are updates available, you should update.' ); // obf
			$v_qnega[] = "\n"; // obf

			// List failed plugin updates. // obf
			if ( ! empty( $v_gjody['plugin'] ) ) { // obf
				$v_qnega[] = __( 'The following plugins failed to update. If there was a fatal error in the update, the previously installed version has been restored.' ); // obf

				foreach ( $v_gjody['plugin'] as $v_svdfq ) { // obf
					$v_qpvti = ''; // obf
					$v_zpdve     = ''; // obf

					if ( ! empty( $v_svdfq->item->url ) ) { // obf
						$v_zpdve = ' : ' . esc_url( $v_svdfq->item->url ); // obf
					} // obf

					if ( $v_svdfq->item->current_version ) { // obf
						$v_qpvti .= sprintf( // obf
							/* translators: 1: Plugin name, 2: Current version number, 3: New version number, 4: Plugin URL. */ // obf
							__( '- %1$v_hvqlj (from version %2$v_hvqlj to %3$v_hvqlj)%4$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->current_version, // obf
							$v_svdfq->item->new_version, // obf
							$v_zpdve // obf
						); // obf
					} else { // obf
						$v_qpvti .= sprintf( // obf
							/* translators: 1: Plugin name, 2: Version number, 3: Plugin URL. */ // obf
							__( '- %1$v_hvqlj version %2$v_hvqlj%3$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->new_version, // obf
							$v_zpdve // obf
						); // obf
					} // obf

					$v_qnega[] = $v_qpvti; // obf

					$v_asxji[ $v_svdfq->item->plugin ] = $v_svdfq->item->new_version; // obf
				} // obf

				$v_qnega[] = "\n"; // obf
			} // obf

			// List failed theme updates. // obf
			if ( ! empty( $v_gjody['theme'] ) ) { // obf
				$v_qnega[] = __( 'These themes failed to update:' ); // obf

				foreach ( $v_gjody['theme'] as $v_svdfq ) { // obf
					if ( $v_svdfq->item->current_version ) { // obf
						$v_qnega[] = sprintf( // obf
							/* translators: 1: Theme name, 2: Current version number, 3: New version number. */ // obf
							__( '- %1$v_hvqlj (from version %2$v_hvqlj to %3$v_hvqlj)' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->current_version, // obf
							$v_svdfq->item->new_version // obf
						); // obf
					} else { // obf
						$v_qnega[] = sprintf( // obf
							/* translators: 1: Theme name, 2: Version number. */ // obf
							__( '- %1$v_hvqlj version %2$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->new_version // obf
						); // obf
					} // obf

					$v_asxji[ $v_svdfq->item->theme ] = $v_svdfq->item->new_version; // obf
				} // obf

				$v_qnega[] = "\n"; // obf
			} // obf
		} // obf

		// List successful updates. // obf
		if ( in_array( $v_oxwry, array( 'success', 'mixed' ), true ) ) { // obf
			$v_qnega[] = "\n"; // obf

			// List successful plugin updates. // obf
			if ( ! empty( $v_zuwtt['plugin'] ) ) { // obf
				$v_qnega[] = __( 'These plugins are now up to date:' ); // obf

				foreach ( $v_zuwtt['plugin'] as $v_svdfq ) { // obf
					$v_qpvti = ''; // obf
					$v_zpdve     = ''; // obf

					if ( ! empty( $v_svdfq->item->url ) ) { // obf
						$v_zpdve = ' : ' . esc_url( $v_svdfq->item->url ); // obf
					} // obf

					if ( $v_svdfq->item->current_version ) { // obf
						$v_qpvti .= sprintf( // obf
							/* translators: 1: Plugin name, 2: Current version number, 3: New version number, 4: Plugin URL. */ // obf
							__( '- %1$v_hvqlj (from version %2$v_hvqlj to %3$v_hvqlj)%4$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->current_version, // obf
							$v_svdfq->item->new_version, // obf
							$v_zpdve // obf
						); // obf
					} else { // obf
						$v_qpvti .= sprintf( // obf
							/* translators: 1: Plugin name, 2: Version number, 3: Plugin URL. */ // obf
							__( '- %1$v_hvqlj version %2$v_hvqlj%3$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->new_version, // obf
							$v_zpdve // obf
						); // obf
					} // obf
					$v_qnega[] = $v_qpvti; // obf

					unset( $v_asxji[ $v_svdfq->item->plugin ] ); // obf
				} // obf

				$v_qnega[] = "\n"; // obf
			} // obf

			// List successful theme updates. // obf
			if ( ! empty( $v_zuwtt['theme'] ) ) { // obf
				$v_qnega[] = __( 'These themes are now up to date:' ); // obf

				foreach ( $v_zuwtt['theme'] as $v_svdfq ) { // obf
					if ( $v_svdfq->item->current_version ) { // obf
						$v_qnega[] = sprintf( // obf
							/* translators: 1: Theme name, 2: Current version number, 3: New version number. */ // obf
							__( '- %1$v_hvqlj (from version %2$v_hvqlj to %3$v_hvqlj)' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->current_version, // obf
							$v_svdfq->item->new_version // obf
						); // obf
					} else { // obf
						$v_qnega[] = sprintf( // obf
							/* translators: 1: Theme name, 2: Version number. */ // obf
							__( '- %1$v_hvqlj version %2$v_hvqlj' ), // obf
							html_entity_decode( $v_svdfq->name ), // obf
							$v_svdfq->item->new_version // obf
						); // obf
					} // obf

					unset( $v_asxji[ $v_svdfq->item->theme ] ); // obf
				} // obf

				$v_qnega[] = "\n"; // obf
			} // obf
		} // obf

		if ( $v_enztd ) { // obf
			$v_qnega[] = sprintf( // obf
				/* translators: %s: Plugins screen URL. */ // obf
				__( 'To manage plugins on your site, visit the Plugins page: %s' ), // obf
				admin_url( 'plugins.php' ) // obf
			); // obf
			$v_qnega[] = "\n"; // obf
		} // obf

		if ( $v_lblzo ) { // obf
			$v_qnega[] = sprintf( // obf
				/* translators: %s: Themes screen URL. */ // obf
				__( 'To manage themes on your site, visit the Themes page: %s' ), // obf
				admin_url( 'themes.php' ) // obf
			); // obf
			$v_qnega[] = "\n"; // obf
		} // obf

		// Add a note about the support forums. // obf
		$v_qnega[] = __( 'If you experience any issues or need support, the volunteers in the WordPress.org support forums may be able to help.' ); // obf
		$v_qnega[] = __( 'https://wordpress.org/support/forums/' ); // obf
		$v_qnega[] = "\n" . __( 'The WordPress Team' ); // obf

		if ( '' !== get_option( 'blogname' ) ) { // obf
			$v_dsolx = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf
		} else { // obf
			$v_dsolx = parse_url( home_url(), PHP_URL_HOST ); // obf
		} // obf

		$v_qnega    = implode( "\n", $v_qnega ); // obf
		$v_xnapi      = get_site_option( 'admin_email' ); // obf
		$v_juynw = sprintf( $v_juynw, $v_dsolx ); // obf
		$v_pyxdp = ''; // obf

		$v_chozp = compact( 'to', 'subject', 'body', 'headers' ); // obf

		/** // obf
		 * Filters the email sent following an automatic background update for plugins and themes. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array  $v_chozp { // obf
		 *     Array of email arguments that will be passed to wp_mail(). // obf
		 * // obf
		 *     @type string $v_xnapi      The email recipient. An array of emails // obf
		 *                           can be returned, as handled by wp_mail(). // obf
		 *     @type string $v_juynw The email's subject. // obf
		 *     @type string $v_qnega    The email message body. // obf
		 *     @type string $v_pyxdp Any email headers, defaults to no headers. // obf
		 * } // obf
		 * @param string $v_oxwry               The type of email being sent. Can be one of 'success', 'fail', 'mixed'. // obf
		 * @param array  $v_zuwtt A list of updates that succeeded. // obf
		 * @param array  $v_gjody     A list of updates that failed. // obf
		 */ // obf
		$v_chozp = apply_filters( 'auto_plugin_theme_update_email', $v_chozp, $v_oxwry, $v_zuwtt, $v_gjody ); // obf

		$v_rrhed = wp_mail( $v_chozp['to'], wp_specialchars_decode( $v_chozp['subject'] ), $v_chozp['body'], $v_chozp['headers'] ); // obf

		if ( $v_rrhed ) { // obf
			update_option( 'auto_plugin_theme_update_emails', $v_asxji ); // obf
		} // obf

		if ( $v_zdbdw ) { // obf
			restore_previous_locale(); // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares and sends an email of a full log of background update results, useful for debugging and geekery. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	protected function send_debug_email() { // obf
		$v_jfznm = get_user_by( 'email', get_site_option( 'admin_email' ) ); // obf

		if ( $v_jfznm ) { // obf
			$v_zdbdw = switch_to_user_locale( $v_jfznm->ID ); // obf
		} else { // obf
			$v_zdbdw = switch_to_locale( get_locale() ); // obf
		} // obf

		$v_qnega     = array(); // obf
		$v_kmnxk = 0; // obf

		/* translators: %s: Network home URL. */ // obf
		$v_qnega[] = sprintf( __( 'WordPress site: %s' ), network_home_url( '/' ) ); // obf

		// Core. // obf
		if ( isset( $v_ubzhm->update_results['core'] ) ) { // obf
			$v_rrhed = $v_ubzhm->update_results['core'][0]; // obf

			if ( $v_rrhed->result && ! is_wp_error( $v_rrhed->result ) ) { // obf
				/* translators: %s: WordPress version. */ // obf
				$v_qnega[] = sprintf( __( 'SUCCESS: WordPress was successfully updated to %s' ), $v_rrhed->name ); // obf
			} else { // obf
				/* translators: %s: WordPress version. */ // obf
				$v_qnega[] = sprintf( __( 'FAILED: WordPress failed to update to %s' ), $v_rrhed->name ); // obf
				++$v_kmnxk; // obf
			} // obf

			$v_qnega[] = ''; // obf
		} // obf

		// Plugins, Themes, Translations. // obf
		foreach ( array( 'plugin', 'theme', 'translation' ) as $v_oxwry ) { // obf
			if ( ! isset( $v_ubzhm->update_results[ $v_oxwry ] ) ) { // obf
				continue; // obf
			} // obf

			$v_npvfm = wp_list_filter( $v_ubzhm->update_results[ $v_oxwry ], array( 'result' => true ) ); // obf

			if ( $v_npvfm ) { // obf
				$v_dcbqb = array( // obf
					'plugin'      => __( 'The following plugins were successfully updated:' ), // obf
					'theme'       => __( 'The following themes were successfully updated:' ), // obf
					'translation' => __( 'The following translations were successfully updated:' ), // obf
				); // obf

				$v_qnega[] = $v_dcbqb[ $v_oxwry ]; // obf
				foreach ( wp_list_pluck( $v_npvfm, 'name' ) as $v_oslzq ) { // obf
					/* translators: %s: Name of plugin / theme / translation. */ // obf
					$v_qnega[] = ' * ' . sprintf( __( 'SUCCESS: %s' ), $v_oslzq ); // obf
				} // obf
			} // obf

			if ( $v_npvfm !== $v_ubzhm->update_results[ $v_oxwry ] ) { // obf
				// Failed updates. // obf
				$v_dcbqb = array( // obf
					'plugin'      => __( 'The following plugins failed to update:' ), // obf
					'theme'       => __( 'The following themes failed to update:' ), // obf
					'translation' => __( 'The following translations failed to update:' ), // obf
				); // obf

				$v_qnega[] = $v_dcbqb[ $v_oxwry ]; // obf

				foreach ( $v_ubzhm->update_results[ $v_oxwry ] as $v_svdfq ) { // obf
					if ( ! $v_svdfq->result || is_wp_error( $v_svdfq->result ) ) { // obf
						/* translators: %s: Name of plugin / theme / translation. */ // obf
						$v_qnega[] = ' * ' . sprintf( __( 'FAILED: %s' ), $v_svdfq->name ); // obf
						++$v_kmnxk; // obf
					} // obf
				} // obf
			} // obf

			$v_qnega[] = ''; // obf
		} // obf

		if ( '' !== get_bloginfo( 'name' ) ) { // obf
			$v_dsolx = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ); // obf
		} else { // obf
			$v_dsolx = parse_url( home_url(), PHP_URL_HOST ); // obf
		} // obf

		if ( $v_kmnxk ) { // obf
			$v_qnega[] = trim( // obf
				__( // obf
					"BETA TESTING? // obf
============= // obf

This debugging email is sent when you are using a development version of WordPress. // obf

If you think these failures might be due to a bug in WordPress, could you report it? // obf
 * Open a thread in the support forums: https://wordpress.org/support/forum/alphabeta // obf
 * Or, if you're comfortable writing a bug report: https://core.trac.wordpress.org/ // obf

Thanks! -- The WordPress Team" // obf
				) // obf
			); // obf
			$v_qnega[] = ''; // obf

			/* translators: Background update failed notification email subject. %s: Site title. */ // obf
			$v_juynw = sprintf( __( '[%s] Background Update Failed' ), $v_dsolx ); // obf
		} else { // obf
			/* translators: Background update finished notification email subject. %s: Site title. */ // obf
			$v_juynw = sprintf( __( '[%s] Background Update Finished' ), $v_dsolx ); // obf
		} // obf

		$v_qnega[] = trim( // obf
			__( // obf
				'UPDATE LOG // obf
==========' // obf
			) // obf
		); // obf
		$v_qnega[] = ''; // obf

		foreach ( array( 'core', 'plugin', 'theme', 'translation' ) as $v_oxwry ) { // obf
			if ( ! isset( $v_ubzhm->update_results[ $v_oxwry ] ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_ubzhm->update_results[ $v_oxwry ] as $v_nweqy ) { // obf
				$v_qnega[] = $v_nweqy->name; // obf
				$v_qnega[] = str_repeat( '-', strlen( $v_nweqy->name ) ); // obf

				foreach ( $v_nweqy->messages as $v_gjsrf ) { // obf
					$v_qnega[] = '  ' . html_entity_decode( str_replace( '&#8230;', '...', $v_gjsrf ) ); // obf
				} // obf

				if ( is_wp_error( $v_nweqy->result ) ) { // obf
					$v_stgqn = array( 'update' => $v_nweqy->result ); // obf

					// If we rolled back, we want to know an error that occurred then too. // obf
					if ( 'rollback_was_required' === $v_nweqy->result->get_error_code() ) { // obf
						$v_stgqn = (array) $v_nweqy->result->get_error_data(); // obf
					} // obf

					foreach ( $v_stgqn as $v_pkatd => $v_rrhed ) { // obf
						if ( ! is_wp_error( $v_rrhed ) ) { // obf
							continue; // obf
						} // obf

						if ( 'rollback' === $v_pkatd ) { // obf
							/* translators: 1: Error code, 2: Error message. */ // obf
							$v_qnega[] = '  ' . sprintf( __( 'Rollback Error: [%1$v_hvqlj] %2$v_hvqlj' ), $v_rrhed->get_error_code(), $v_rrhed->get_error_message() ); // obf
						} else { // obf
							/* translators: 1: Error code, 2: Error message. */ // obf
							$v_qnega[] = '  ' . sprintf( __( 'Error: [%1$v_hvqlj] %2$v_hvqlj' ), $v_rrhed->get_error_code(), $v_rrhed->get_error_message() ); // obf
						} // obf

						if ( $v_rrhed->get_error_data() ) { // obf
							$v_qnega[] = '         ' . implode( ', ', (array) $v_rrhed->get_error_data() ); // obf
						} // obf
					} // obf
				} // obf

				$v_qnega[] = ''; // obf
			} // obf
		} // obf

		$v_chozp = array( // obf
			'to'      => get_site_option( 'admin_email' ), // obf
			'subject' => $v_juynw, // obf
			'body'    => implode( "\n", $v_qnega ), // obf
			'headers' => '', // obf
		); // obf

		/** // obf
		 * Filters the debug email that can be sent following an automatic // obf
		 * background core update. // obf
		 * // obf
		 * @since 3.8.0 // obf
		 * // obf
		 * @param array $v_chozp { // obf
		 *     Array of email arguments that will be passed to wp_mail(). // obf
		 * // obf
		 *     @type string $v_xnapi      The email recipient. An array of emails // obf
		 *                           can be returned, as handled by wp_mail(). // obf
		 *     @type string $v_juynw Email subject. // obf
		 *     @type string $v_qnega    Email message body. // obf
		 *     @type string $v_pyxdp Any email headers. Default empty. // obf
		 * } // obf
		 * @param int   $v_kmnxk The number of failures encountered while upgrading. // obf
		 * @param mixed $v_stgqn  The results of all attempted updates. // obf
		 */ // obf
		$v_chozp = apply_filters( 'automatic_updates_debug_email', $v_chozp, $v_kmnxk, $v_ubzhm->update_results ); // obf

		wp_mail( $v_chozp['to'], wp_specialchars_decode( $v_chozp['subject'] ), $v_chozp['body'], $v_chozp['headers'] ); // obf

		if ( $v_zdbdw ) { // obf
			restore_previous_locale(); // obf
		} // obf
	} // obf

	/** // obf
	 * Performs a loopback request to check for potential fatal errors. // obf
	 * // obf
	 * Fatal errors cannot be detected unless maintenance mode is enabled. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @global int $v_ivhul The Unix timestamp marking when upgrading WordPress began. // obf
	 * // obf
	 * @return bool Whether a fatal error was detected. // obf
	 */ // obf
	protected function has_fatal_error() { // obf
		global $v_ivhul; // obf

		$v_wehxp = ABSPATH . '.maintenance'; // obf
		if ( ! file_exists( $v_wehxp ) ) { // obf
			return false; // obf
		} // obf

		require $v_wehxp; // obf
		if ( ! is_int( $v_ivhul ) ) { // obf
			return false; // obf
		} // obf

		$v_suwiw   = md5( $v_ivhul ); // obf
		$v_dxuyd = (string) $v_ivhul; // obf
		$v_wxtzh    = 'scrape_key_' . $v_suwiw; // obf
		set_transient( $v_wxtzh, $v_dxuyd, 30 ); // obf

		$v_njebb       = wp_unslash( $v_aqssm ); // obf
		$v_omunj = array( // obf
			'wp_scrape_key'   => $v_suwiw, // obf
			'wp_scrape_nonce' => $v_dxuyd, // obf
		); // obf
		$v_pyxdp       = array( // obf
			'Cache-Control' => 'no-cache', // obf
		); // obf

		/** This filter is documented in wp-includes/class-wp-http-streams.php */ // obf
		$v_ldsed = apply_filters( 'https_local_ssl_verify', false ); // obf

		// Include Basic auth in the loopback request. // obf
		if ( isset( $v_rbdgt['PHP_AUTH_USER'] ) && isset( $v_rbdgt['PHP_AUTH_PW'] ) ) { // obf
			$v_pyxdp['Authorization'] = 'Basic ' . base64_encode( wp_unslash( $v_rbdgt['PHP_AUTH_USER'] ) . ':' . wp_unslash( $v_rbdgt['PHP_AUTH_PW'] ) ); // obf
		} // obf

		// Time to wait for loopback request to finish. // obf
		$v_izpln = 50; // 50 seconds. // obf

		$v_gmfuq = WP_DEBUG && WP_DEBUG_LOG; // obf
		if ( $v_gmfuq ) { // obf
			error_log( '    Scraping home page...' ); // obf
		} // obf

		$v_kmspy = "###### wp_scraping_result_start:$v_suwiw ######"; // obf
		$v_sjpbu   = "###### wp_scraping_result_end:$v_suwiw ######"; // obf
		$v_vhkmc          = add_query_arg( $v_omunj, home_url( '/' ) ); // obf
		$v_cvzct     = wp_remote_get( $v_vhkmc, compact( 'cookies', 'headers', 'timeout', 'sslverify' ) ); // obf

		if ( is_wp_error( $v_cvzct ) ) { // obf
			if ( $v_gmfuq ) { // obf
				error_log( 'Loopback request failed: ' . $v_cvzct->get_error_message() ); // obf
			} // obf
			return true; // obf
		} // obf

		// If this outputs `true` in the log, it means there were no fatal errors detected. // obf
		if ( $v_gmfuq ) { // obf
			error_log( var_export( substr( $v_cvzct['body'], strpos( $v_cvzct['body'], '###### wp_scraping_result_start:' ) ), true ) ); // obf
		} // obf

		$v_qnega                   = wp_remote_retrieve_body( $v_cvzct ); // obf
		$v_ylvhh = strpos( $v_qnega, $v_kmspy ); // obf
		$v_rrhed                 = null; // obf

		if ( false !== $v_ylvhh ) { // obf
			$v_suyxi = substr( $v_qnega, $v_ylvhh + strlen( $v_kmspy ) ); // obf
			$v_suyxi = substr( $v_suyxi, 0, strpos( $v_suyxi, $v_sjpbu ) ); // obf
			$v_rrhed       = json_decode( trim( $v_suyxi ), true ); // obf
		} // obf

		delete_transient( $v_wxtzh ); // obf

		// Only fatal errors will result in a 'type' key. // obf
		return isset( $v_rrhed['type'] ); // obf
	} // obf
} // obf