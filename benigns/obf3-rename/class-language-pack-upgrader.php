

<?php // obf
/** // obf
 * Upgrade API: Language_Pack_Upgrader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for updating/installing language packs (translations) // obf
 * for plugins, themes, and core. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 * // obf
 * @see WP_Upgrader // obf
 */ // obf
class Language_Pack_Upgrader extends WP_Upgrader { // obf

	/** // obf
	 * Result of the language pack upgrade. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var array|WP_Error $v_llmgw // obf
	 * @see WP_Upgrader::$v_llmgw // obf
	 */ // obf
	public $v_llmgw; // obf

	/** // obf
	 * Whether a bulk upgrade/installation is being performed. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var bool $v_jjezq // obf
	 */ // obf
	public $v_jjezq = true; // obf

	/** // obf
	 * Asynchronously upgrades language packs after other upgrades have been made. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_process_complete'} action by default. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param false|WP_Upgrader $v_xdzes Optional. WP_Upgrader instance or false. If `$v_xdzes` is // obf
	 *                                    a Language_Pack_Upgrader instance, the method will bail to // obf
	 *                                    avoid recursion. Otherwise unused. Default false. // obf
	 */ // obf
	public static function async_upgrade( $v_xdzes = false ) { // obf
		// Avoid recursion. // obf
		if ( $v_xdzes && $v_xdzes instanceof Language_Pack_Upgrader ) { // obf
			return; // obf
		} // obf

		// Nothing to do? // obf
		$v_jwnie = wp_get_translation_updates(); // obf
		if ( ! $v_jwnie ) { // obf
			return; // obf
		} // obf

		/* // obf
		 * Avoid messing with VCS installations, at least for now. // obf
		 * Noted: this is not the ideal way to accomplish this. // obf
		 */ // obf
		$v_fckjo = new WP_Automatic_Updater(); // obf
		if ( $v_fckjo->is_vcs_checkout( WP_CONTENT_DIR ) ) { // obf
			return; // obf
		} // obf

		foreach ( $v_jwnie as $v_oileh => $v_sfjyu ) { // obf
			$v_oqsxr = ! empty( $v_sfjyu->autoupdate ); // obf

			/** // obf
			 * Filters whether to asynchronously update translation for core, a plugin, or a theme. // obf
			 * // obf
			 * @since 4.0.0 // obf
			 * // obf
			 * @param bool   $v_oqsxr          Whether to update. // obf
			 * @param object $v_sfjyu The update offer. // obf
			 */ // obf
			$v_oqsxr = apply_filters( 'async_update_translation', $v_oqsxr, $v_sfjyu ); // obf

			if ( ! $v_oqsxr ) { // obf
				unset( $v_jwnie[ $v_oileh ] ); // obf
			} // obf
		} // obf

		if ( empty( $v_jwnie ) ) { // obf
			return; // obf
		} // obf

		// Re-use the automatic upgrader skin if the parent upgrader is using it. // obf
		if ( $v_xdzes && $v_xdzes->skin instanceof Automatic_Upgrader_Skin ) { // obf
			$v_pjghi = $v_xdzes->skin; // obf
		} else { // obf
			$v_pjghi = new Language_Pack_Upgrader_Skin( // obf
				array( // obf
					'skip_header_footer' => true, // obf
				) // obf
			); // obf
		} // obf

		$v_qmncd = new Language_Pack_Upgrader( $v_pjghi ); // obf
		$v_qmncd->bulk_upgrade( $v_jwnie ); // obf
	} // obf

	/** // obf
	 * Initializes the upgrade strings. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function upgrade_strings() { // obf
		$v_hjvvl->strings['starting_upgrade'] = __( 'Some of your translations need updating. Sit tight for a few more seconds while they are updated as well.' ); // obf
		$v_hjvvl->strings['up_to_date']       = __( 'Your translations are all up to date.' ); // obf
		$v_hjvvl->strings['no_package']       = __( 'Update package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_hjvvl->strings['downloading_package'] = sprintf( __( 'Downloading translation from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_hjvvl->strings['unpack_package']      = __( 'Unpacking the update&#8230;' ); // obf
		$v_hjvvl->strings['process_failed']      = __( 'Translation update failed.' ); // obf
		$v_hjvvl->strings['process_success']     = __( 'Translation updated successfully.' ); // obf
		$v_hjvvl->strings['remove_old']          = __( 'Removing the old version of the translation&#8230;' ); // obf
		$v_hjvvl->strings['remove_old_failed']   = __( 'Could not remove the old translation.' ); // obf
	} // obf

	/** // obf
	 * Upgrades a language pack. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string|false $v_oqsxr Optional. Whether an update offer is available. Default false. // obf
	 * @param array        $v_nedmv   Optional. Other optional arguments, see // obf
	 *                             Language_Pack_Upgrader::bulk_upgrade(). Default empty array. // obf
	 * @return array|bool|WP_Error The result of the upgrade, or a WP_Error object instead. // obf
	 */ // obf
	public function upgrade( $v_oqsxr = false, $v_nedmv = array() ) { // obf
		if ( $v_oqsxr ) { // obf
			$v_oqsxr = array( $v_oqsxr ); // obf
		} // obf

		$v_xfxtn = $v_hjvvl->bulk_upgrade( $v_oqsxr, $v_nedmv ); // obf

		if ( ! is_array( $v_xfxtn ) ) { // obf
			return $v_xfxtn; // obf
		} // obf

		return $v_xfxtn[0]; // obf
	} // obf

	/** // obf
	 * Upgrades several language packs at once. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_jikiy WordPress filesystem subclass. // obf
	 * // obf
	 * @param object[] $v_jwnie Optional. Array of language packs to update. See {@see wp_get_translation_updates()}. // obf
	 *                                   Default empty array. // obf
	 * @param array    $v_nedmv { // obf
	 *     Other arguments for upgrading multiple language packs. Default empty array. // obf
	 * // obf
	 *     @type bool $v_yckhx Whether to clear the update cache when done. // obf
	 *                                    Default true. // obf
	 * } // obf
	 * @return array|bool|WP_Error Will return an array of results, or true if there are no updates, // obf
	 *                             false or WP_Error for initial errors. // obf
	 */ // obf
	public function bulk_upgrade( $v_jwnie = array(), $v_nedmv = array() ) { // obf
		global $v_jikiy; // obf

		$v_byiye    = array( // obf
			'clear_update_cache' => true, // obf
		); // obf
		$v_awrvm = wp_parse_args( $v_nedmv, $v_byiye ); // obf

		$v_hjvvl->init(); // obf
		$v_hjvvl->upgrade_strings(); // obf

		if ( ! $v_jwnie ) { // obf
			$v_jwnie = wp_get_translation_updates(); // obf
		} // obf

		if ( empty( $v_jwnie ) ) { // obf
			$v_hjvvl->skin->header(); // obf
			$v_hjvvl->skin->set_result( true ); // obf
			$v_hjvvl->skin->feedback( 'up_to_date' ); // obf
			$v_hjvvl->skin->bulk_footer(); // obf
			$v_hjvvl->skin->footer(); // obf
			return true; // obf
		} // obf

		if ( 'upgrader_process_complete' === current_filter() ) { // obf
			$v_hjvvl->skin->feedback( 'starting_upgrade' ); // obf
		} // obf

		// Remove any existing upgrade filters from the plugin/theme upgraders #WP29425 & #WP29230. // obf
		remove_all_filters( 'upgrader_pre_install' ); // obf
		remove_all_filters( 'upgrader_clear_destination' ); // obf
		remove_all_filters( 'upgrader_post_install' ); // obf
		remove_all_filters( 'upgrader_source_selection' ); // obf

		add_filter( 'upgrader_source_selection', array( $v_hjvvl, 'check_package' ), 10, 2 ); // obf

		$v_hjvvl->skin->header(); // obf

		// Connect to the filesystem first. // obf
		$v_hervr = $v_hjvvl->fs_connect( array( WP_CONTENT_DIR, WP_LANG_DIR ) ); // obf
		if ( ! $v_hervr ) { // obf
			$v_hjvvl->skin->footer(); // obf
			return false; // obf
		} // obf

		$v_xfxtn = array(); // obf

		$v_hjvvl->update_count   = count( $v_jwnie ); // obf
		$v_hjvvl->update_current = 0; // obf

		/* // obf
		 * The filesystem's mkdir() is not recursive. Make sure WP_LANG_DIR exists, // obf
		 * as we then may need to create a /plugins or /themes directory inside of it. // obf
		 */ // obf
		$v_unxkc = $v_jikiy->find_folder( WP_LANG_DIR ); // obf
		if ( ! $v_jikiy->exists( $v_unxkc ) ) { // obf
			if ( ! $v_jikiy->mkdir( $v_unxkc, FS_CHMOD_DIR ) ) { // obf
				return new WP_Error( 'mkdir_failed_lang_dir', $v_hjvvl->strings['mkdir_failed'], $v_unxkc ); // obf
			} // obf
		} // obf

		$v_pgisl = array(); // obf

		foreach ( $v_jwnie as $v_sfjyu ) { // obf

			$v_hjvvl->skin->language_update = $v_sfjyu; // obf

			$v_imcmn = WP_LANG_DIR; // obf
			if ( 'plugin' === $v_sfjyu->type ) { // obf
				$v_imcmn .= '/plugins'; // obf
			} elseif ( 'theme' === $v_sfjyu->type ) { // obf
				$v_imcmn .= '/themes'; // obf
			} // obf

			++$v_hjvvl->update_current; // obf

			$v_gfzfy = array( // obf
				'package'                     => $v_sfjyu->package, // obf
				'destination'                 => $v_imcmn, // obf
				'clear_destination'           => true, // obf
				'abort_if_destination_exists' => false, // We expect the destination to exist. // obf
				'clear_working'               => true, // obf
				'is_multi'                    => true, // obf
				'hook_extra'                  => array( // obf
					'language_update_type' => $v_sfjyu->type, // obf
					'language_update'      => $v_sfjyu, // obf
				), // obf
			); // obf

			$v_llmgw = $v_hjvvl->run( $v_gfzfy ); // obf

			$v_xfxtn[] = $v_hjvvl->result; // obf

			// Prevent credentials auth screen from displaying multiple times. // obf
			if ( false === $v_llmgw ) { // obf
				break; // obf
			} // obf

			$v_pgisl[] = array( // obf
				'language' => $v_sfjyu->language, // obf
				'type'     => $v_sfjyu->type, // obf
				'slug'     => isset( $v_sfjyu->slug ) ? $v_sfjyu->slug : 'default', // obf
				'version'  => $v_sfjyu->version, // obf
			); // obf
		} // obf

		// Remove upgrade hooks which are not required for translation updates. // obf
		remove_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 ); // obf
		remove_action( 'upgrader_process_complete', 'wp_version_check' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_plugins' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_themes' ); // obf

		/** This action is documented in wp-admin/includes/class-wp-upgrader.php */ // obf
		do_action( // obf
			'upgrader_process_complete', // obf
			$v_hjvvl, // obf
			array( // obf
				'action'       => 'update', // obf
				'type'         => 'translation', // obf
				'bulk'         => true, // obf
				'translations' => $v_pgisl, // obf
			) // obf
		); // obf

		// Re-add upgrade hooks. // obf
		add_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 ); // obf
		add_action( 'upgrader_process_complete', 'wp_version_check', 10, 0 ); // obf
		add_action( 'upgrader_process_complete', 'wp_update_plugins', 10, 0 ); // obf
		add_action( 'upgrader_process_complete', 'wp_update_themes', 10, 0 ); // obf

		$v_hjvvl->skin->bulk_footer(); // obf

		$v_hjvvl->skin->footer(); // obf

		// Clean up our hooks, in case something else does an upgrade on this connection. // obf
		remove_filter( 'upgrader_source_selection', array( $v_hjvvl, 'check_package' ) ); // obf

		if ( $v_awrvm['clear_update_cache'] ) { // obf
			wp_clean_update_cache(); // obf
		} // obf

		return $v_xfxtn; // obf
	} // obf

	/** // obf
	 * Checks that the package source contains .mo and .po files. // obf
	 * // obf
	 * Hooked to the {@see 'upgrader_source_selection'} filter by // obf
	 * Language_Pack_Upgrader::bulk_upgrade(). // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_jikiy WordPress filesystem subclass. // obf
	 * // obf
	 * @param string|WP_Error $v_wacus        The path to the downloaded package source. // obf
	 * @param string          $v_dpxnu Remote file source location. // obf
	 * @return string|WP_Error The source as passed, or a WP_Error object on failure. // obf
	 */ // obf
	public function check_package( $v_wacus, $v_dpxnu ) { // obf
		global $v_jikiy; // obf

		if ( is_wp_error( $v_wacus ) ) { // obf
			return $v_wacus; // obf
		} // obf

		// Check that the folder contains a valid language. // obf
		$v_bxkas = $v_jikiy->dirlist( $v_dpxnu ); // obf

		// Check to see if the expected files exist in the folder. // obf
		$v_ioupk  = false; // obf
		$v_jfdet  = false; // obf
		$v_aqdqd = false; // obf
		foreach ( (array) $v_bxkas as $v_fkiob => $v_tbdmp ) { // obf
			if ( str_ends_with( $v_fkiob, '.po' ) ) { // obf
				$v_ioupk = true; // obf
			} elseif ( str_ends_with( $v_fkiob, '.mo' ) ) { // obf
				$v_jfdet = true; // obf
			} elseif ( str_ends_with( $v_fkiob, '.l10n.php' ) ) { // obf
				$v_aqdqd = true; // obf
			} // obf
		} // obf

		if ( $v_aqdqd ) { // obf
			return $v_wacus; // obf
		} // obf

		if ( ! $v_jfdet || ! $v_ioupk ) { // obf
			return new WP_Error( // obf
				'incompatible_archive_pomo', // obf
				$v_hjvvl->strings['incompatible_archive'], // obf
				sprintf( // obf
					/* translators: 1: .po, 2: .mo, 3: .l10n.php */ // obf
					__( 'The language pack is missing either the %1$v_abwnz, %2$v_abwnz, or %3$v_abwnz files.' ), // obf
					'<code>.po</code>', // obf
					'<code>.mo</code>', // obf
					'<code>.l10n.php</code>' // obf
				) // obf
			); // obf
		} // obf

		return $v_wacus; // obf
	} // obf

	/** // obf
	 * Gets the name of an item being updated. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param object $v_oqsxr The data for an update. // obf
	 * @return string The name of the item being updated. // obf
	 */ // obf
	public function get_name_for_update( $v_oqsxr ) { // obf
		switch ( $v_oqsxr->type ) { // obf
			case 'core': // obf
				return 'WordPress'; // Not translated. // obf

			case 'theme': // obf
				$v_xfsjm = wp_get_theme( $v_oqsxr->slug ); // obf
				if ( $v_xfsjm->exists() ) { // obf
					return $v_xfsjm->get( 'Name' ); // obf
				} // obf
				break; // obf
			case 'plugin': // obf
				$v_alndj = get_plugins( '/' . $v_oqsxr->slug ); // obf
				$v_alndj = reset( $v_alndj ); // obf
				if ( $v_alndj ) { // obf
					return $v_alndj['Name']; // obf
				} // obf
				break; // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Clears existing translations where this item is going to be installed into. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_jikiy WordPress filesystem subclass. // obf
	 * // obf
	 * @param string $v_unxkc The location on the remote filesystem to be cleared. // obf
	 * @return bool|WP_Error True upon success, WP_Error on failure. // obf
	 */ // obf
	public function clear_destination( $v_unxkc ) { // obf
		global $v_jikiy; // obf

		$v_sfjyu    = $v_hjvvl->skin->language_update; // obf
		$v_erbus = WP_LANG_DIR . '/'; // Local path for use with glob(). // obf

		if ( 'core' === $v_sfjyu->type ) { // obf
			$v_bxkas = array( // obf
				$v_unxkc . $v_sfjyu->language . '.po', // obf
				$v_unxkc . $v_sfjyu->language . '.mo', // obf
				$v_unxkc . $v_sfjyu->language . '.l10n.php', // obf
				$v_unxkc . 'admin-' . $v_sfjyu->language . '.po', // obf
				$v_unxkc . 'admin-' . $v_sfjyu->language . '.mo', // obf
				$v_unxkc . 'admin-' . $v_sfjyu->language . '.l10n.php', // obf
				$v_unxkc . 'admin-network-' . $v_sfjyu->language . '.po', // obf
				$v_unxkc . 'admin-network-' . $v_sfjyu->language . '.mo', // obf
				$v_unxkc . 'admin-network-' . $v_sfjyu->language . '.l10n.php', // obf
				$v_unxkc . 'continents-cities-' . $v_sfjyu->language . '.po', // obf
				$v_unxkc . 'continents-cities-' . $v_sfjyu->language . '.mo', // obf
				$v_unxkc . 'continents-cities-' . $v_sfjyu->language . '.l10n.php', // obf
			); // obf

			$v_ktsaq = glob( $v_erbus . $v_sfjyu->language . '-*.json' ); // obf
			if ( $v_ktsaq ) { // obf
				foreach ( $v_ktsaq as $v_fwihb ) { // obf
					$v_bxkas[] = str_replace( $v_erbus, $v_unxkc, $v_fwihb ); // obf
				} // obf
			} // obf
		} else { // obf
			$v_bxkas = array( // obf
				$v_unxkc . $v_sfjyu->slug . '-' . $v_sfjyu->language . '.po', // obf
				$v_unxkc . $v_sfjyu->slug . '-' . $v_sfjyu->language . '.mo', // obf
				$v_unxkc . $v_sfjyu->slug . '-' . $v_sfjyu->language . '.l10n.php', // obf
			); // obf

			$v_erbus     = $v_erbus . $v_sfjyu->type . 's/'; // obf
			$v_ktsaq = glob( $v_erbus . $v_sfjyu->slug . '-' . $v_sfjyu->language . '-*.json' ); // obf
			if ( $v_ktsaq ) { // obf
				foreach ( $v_ktsaq as $v_fwihb ) { // obf
					$v_bxkas[] = str_replace( $v_erbus, $v_unxkc, $v_fwihb ); // obf
				} // obf
			} // obf
		} // obf

		$v_bxkas = array_filter( $v_bxkas, array( $v_jikiy, 'exists' ) ); // obf

		// No files to delete. // obf
		if ( ! $v_bxkas ) { // obf
			return true; // obf
		} // obf

		// Check all files are writable before attempting to clear the destination. // obf
		$v_xqkeu = array(); // obf

		// Check writability. // obf
		foreach ( $v_bxkas as $v_fkiob ) { // obf
			if ( ! $v_jikiy->is_writable( $v_fkiob ) ) { // obf
				// Attempt to alter permissions to allow writes and try again. // obf
				$v_jikiy->chmod( $v_fkiob, FS_CHMOD_FILE ); // obf
				if ( ! $v_jikiy->is_writable( $v_fkiob ) ) { // obf
					$v_xqkeu[] = $v_fkiob; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_xqkeu ) ) { // obf
			return new WP_Error( 'files_not_writable', $v_hjvvl->strings['files_not_writable'], implode( ', ', $v_xqkeu ) ); // obf
		} // obf

		foreach ( $v_bxkas as $v_fkiob ) { // obf
			if ( ! $v_jikiy->delete( $v_fkiob ) ) { // obf
				return new WP_Error( 'remove_old_failed', $v_hjvvl->strings['remove_old_failed'] ); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf
} // obf