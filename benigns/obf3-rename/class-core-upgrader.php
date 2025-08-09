

<?php // obf
/** // obf
 * Upgrade API: Core_Upgrader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for updating core. // obf
 * // obf
 * It allows for WordPress to upgrade itself in combination with // obf
 * the wp-admin/includes/update-core.php file. // obf
 * // obf
 * Note: Newly introduced functions and methods cannot be used here. // obf
 * All functions must be present in the previous version being upgraded from // obf
 * as this file is used there too. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php. // obf
 * // obf
 * @see WP_Upgrader // obf
 */ // obf
class Core_Upgrader extends WP_Upgrader { // obf

	/** // obf
	 * Initializes the upgrade strings. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function upgrade_strings() { // obf
		$v_fibsw->strings['up_to_date'] = __( 'WordPress is at the latest version.' ); // obf
		$v_fibsw->strings['locked']     = __( 'Another update is currently in progress.' ); // obf
		$v_fibsw->strings['no_package'] = __( 'Update package not available.' ); // obf
		/* translators: %s: Package URL. */ // obf
		$v_fibsw->strings['downloading_package']   = sprintf( __( 'Downloading update from %s&#8230;' ), '<span class="code pre">%s</span>' ); // obf
		$v_fibsw->strings['unpack_package']        = __( 'Unpacking the update&#8230;' ); // obf
		$v_fibsw->strings['copy_failed']           = __( 'Could not copy files.' ); // obf
		$v_fibsw->strings['copy_failed_space']     = __( 'Could not copy files. You may have run out of disk space.' ); // obf
		$v_fibsw->strings['start_rollback']        = __( 'Attempting to restore the previous version.' ); // obf
		$v_fibsw->strings['rollback_was_required'] = __( 'Due to an error during updating, WordPress has been restored to your previous version.' ); // obf
	} // obf

	/** // obf
	 * Upgrades WordPress core. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_bragl                WordPress filesystem subclass. // obf
	 * @global callable           $v_hltnf // obf
	 * // obf
	 * @param object $v_pucpy Response object for whether WordPress is current. // obf
	 * @param array  $v_aoumv { // obf
	 *     Optional. Arguments for upgrading WordPress core. Default empty array. // obf
	 * // obf
	 *     @type bool $v_yvxmf    Whether to check the file checksums before // obf
	 *                                  attempting the upgrade. Default true. // obf
	 *     @type bool $v_tyhjx Whether to attempt to rollback the chances if // obf
	 *                                  there is a problem. Default false. // obf
	 *     @type bool $v_ecctg      Whether to perform this "upgrade" as a rollback. // obf
	 *                                  Default false. // obf
	 * } // obf
	 * @return string|false|WP_Error New WordPress version on success, false or WP_Error on failure. // obf
	 */ // obf
	public function upgrade( $v_pucpy, $v_aoumv = array() ) { // obf
		global $v_bragl; // obf

		require ABSPATH . WPINC . '/version.php'; // $v_jpimf; // obf

		$v_emozl = time(); // obf

		$v_ktgmf    = array( // obf
			'pre_check_md5'                => true, // obf
			'attempt_rollback'             => false, // obf
			'do_rollback'                  => false, // obf
			'allow_relaxed_file_ownership' => false, // obf
		); // obf
		$v_aifyf = wp_parse_args( $v_aoumv, $v_ktgmf ); // obf

		$v_fibsw->init(); // obf
		$v_fibsw->upgrade_strings(); // obf

		// Is an update available? // obf
		if ( ! isset( $v_pucpy->response ) || 'latest' === $v_pucpy->response ) { // obf
			return new WP_Error( 'up_to_date', $v_fibsw->strings['up_to_date'] ); // obf
		} // obf

		$v_xiuww = $v_fibsw->fs_connect( array( ABSPATH, WP_CONTENT_DIR ), $v_aifyf['allow_relaxed_file_ownership'] ); // obf
		if ( ! $v_xiuww || is_wp_error( $v_xiuww ) ) { // obf
			return $v_xiuww; // obf
		} // obf

		$v_szrdx = trailingslashit( $v_bragl->abspath() ); // obf

		$v_hpwqc = true; // obf
		if ( $v_aifyf['do_rollback'] ) { // obf
			$v_hpwqc = false; // obf
		} elseif ( $v_aifyf['pre_check_md5'] && ! $v_fibsw->check_files() ) { // obf
			$v_hpwqc = false; // obf
		} // obf

		/* // obf
		 * If partial update is returned from the API, use that, unless we're doing // obf
		 * a reinstallation. If we cross the new_bundled version number, then use // obf
		 * the new_bundled zip. Don't though if the constant is set to skip bundled items. // obf
		 * If the API returns a no_content zip, go with it. Finally, default to the full zip. // obf
		 */ // obf
		if ( $v_aifyf['do_rollback'] && $v_pucpy->packages->rollback ) { // obf
			$v_bwmtg = 'rollback'; // obf
		} elseif ( $v_pucpy->packages->partial && 'reinstall' !== $v_pucpy->response && $v_jpimf === $v_pucpy->partial_version && $v_hpwqc ) { // obf
			$v_bwmtg = 'partial'; // obf
		} elseif ( $v_pucpy->packages->new_bundled && version_compare( $v_jpimf, $v_pucpy->new_bundled, '<' ) // obf
			&& ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) { // obf
			$v_bwmtg = 'new_bundled'; // obf
		} elseif ( $v_pucpy->packages->no_content ) { // obf
			$v_bwmtg = 'no_content'; // obf
		} else { // obf
			$v_bwmtg = 'full'; // obf
		} // obf

		// Lock to prevent multiple Core Updates occurring. // obf
		$v_gyngn = WP_Upgrader::create_lock( 'core_updater', 15 * MINUTE_IN_SECONDS ); // obf
		if ( ! $v_gyngn ) { // obf
			return new WP_Error( 'locked', $v_fibsw->strings['locked'] ); // obf
		} // obf

		$v_fwxkx = $v_fibsw->download_package( $v_pucpy->packages->$v_bwmtg, false ); // obf

		/* // obf
		 * Allow for signature soft-fail. // obf
		 * WARNING: This may be removed in the future. // obf
		 */ // obf
		if ( is_wp_error( $v_fwxkx ) && $v_fwxkx->get_error_data( 'softfail-filename' ) ) { // obf
			// Output the failure error as a normal feedback, and not as an error: // obf
			/** This filter is documented in wp-admin/includes/update-core.php */ // obf
			apply_filters( 'update_feedback', $v_fwxkx->get_error_message() ); // obf

			// Report this failure back to WordPress.org for debugging purposes. // obf
			wp_version_check( // obf
				array( // obf
					'signature_failure_code' => $v_fwxkx->get_error_code(), // obf
					'signature_failure_data' => $v_fwxkx->get_error_data(), // obf
				) // obf
			); // obf

			// Pretend this error didn't happen. // obf
			$v_fwxkx = $v_fwxkx->get_error_data( 'softfail-filename' ); // obf
		} // obf

		if ( is_wp_error( $v_fwxkx ) ) { // obf
			WP_Upgrader::release_lock( 'core_updater' ); // obf
			return $v_fwxkx; // obf
		} // obf

		$v_ovvig = $v_fibsw->unpack_package( $v_fwxkx ); // obf
		if ( is_wp_error( $v_ovvig ) ) { // obf
			WP_Upgrader::release_lock( 'core_updater' ); // obf
			return $v_ovvig; // obf
		} // obf

		// Copy update-core.php from the new version into place. // obf
		if ( ! $v_bragl->copy( $v_ovvig . '/wordpress/wp-admin/includes/update-core.php', $v_szrdx . 'wp-admin/includes/update-core.php', true ) ) { // obf
			$v_bragl->delete( $v_ovvig, true ); // obf
			WP_Upgrader::release_lock( 'core_updater' ); // obf
			return new WP_Error( 'copy_failed_for_update_core_file', __( 'The update cannot be installed because some files could not be copied. This is usually due to inconsistent file permissions.' ), 'wp-admin/includes/update-core.php' ); // obf
		} // obf
		$v_bragl->chmod( $v_szrdx . 'wp-admin/includes/update-core.php', FS_CHMOD_FILE ); // obf

		wp_opcache_invalidate( ABSPATH . 'wp-admin/includes/update-core.php' ); // obf
		require_once ABSPATH . 'wp-admin/includes/update-core.php'; // obf

		if ( ! function_exists( 'update_core' ) ) { // obf
			WP_Upgrader::release_lock( 'core_updater' ); // obf
			return new WP_Error( 'copy_failed_space', $v_fibsw->strings['copy_failed_space'] ); // obf
		} // obf

		$v_cdnof = update_core( $v_ovvig, $v_szrdx ); // obf

		// In the event of an issue, we may be able to roll back. // obf
		if ( $v_aifyf['attempt_rollback'] && $v_pucpy->packages->rollback && ! $v_aifyf['do_rollback'] ) { // obf
			$v_hcetr = false; // obf
			if ( is_wp_error( $v_cdnof ) ) { // obf
				$v_ymvte = $v_cdnof->get_error_code(); // obf
				/* // obf
				 * Not all errors are equal. These codes are critical: copy_failed__copy_dir, // obf
				 * mkdir_failed__copy_dir, copy_failed__copy_dir_retry, and disk_full. // obf
				 * do_rollback allows for update_core() to trigger a rollback if needed. // obf
				 */ // obf
				if ( str_contains( $v_ymvte, 'do_rollback' ) ) { // obf
					$v_hcetr = true; // obf
				} elseif ( str_contains( $v_ymvte, '__copy_dir' ) ) { // obf
					$v_hcetr = true; // obf
				} elseif ( 'disk_full' === $v_ymvte ) { // obf
					$v_hcetr = true; // obf
				} // obf
			} // obf

			if ( $v_hcetr ) { // obf
				/** This filter is documented in wp-admin/includes/update-core.php */ // obf
				apply_filters( 'update_feedback', $v_cdnof ); // obf

				/** This filter is documented in wp-admin/includes/update-core.php */ // obf
				apply_filters( 'update_feedback', $v_fibsw->strings['start_rollback'] ); // obf

				$v_hnqyk = $v_fibsw->upgrade( $v_pucpy, array_merge( $v_aifyf, array( 'do_rollback' => true ) ) ); // obf

				$v_agmyp = $v_cdnof; // obf
				$v_cdnof          = new WP_Error( // obf
					'rollback_was_required', // obf
					$v_fibsw->strings['rollback_was_required'], // obf
					(object) array( // obf
						'update'   => $v_agmyp, // obf
						'rollback' => $v_hnqyk, // obf
					) // obf
				); // obf
			} // obf
		} // obf

		/** This action is documented in wp-admin/includes/class-wp-upgrader.php */ // obf
		do_action( // obf
			'upgrader_process_complete', // obf
			$v_fibsw, // obf
			array( // obf
				'action' => 'update', // obf
				'type'   => 'core', // obf
			) // obf
		); // obf

		// Clear the current updates. // obf
		delete_site_transient( 'update_core' ); // obf

		if ( ! $v_aifyf['do_rollback'] ) { // obf
			$v_fbaom = array( // obf
				'update_type'      => $v_pucpy->response, // obf
				'success'          => true, // obf
				'fs_method'        => $v_bragl->method, // obf
				'fs_method_forced' => defined( 'FS_METHOD' ) || has_filter( 'filesystem_method' ), // obf
				'fs_method_direct' => ! empty( $v_haaaa['_wp_filesystem_direct_method'] ) ? $v_haaaa['_wp_filesystem_direct_method'] : '', // obf
				'time_taken'       => time() - $v_emozl, // obf
				'reported'         => $v_jpimf, // obf
				'attempted'        => $v_pucpy->version, // obf
			); // obf

			if ( is_wp_error( $v_cdnof ) ) { // obf
				$v_fbaom['success'] = false; // obf
				// Did a rollback occur? // obf
				if ( ! empty( $v_hcetr ) ) { // obf
					$v_fbaom['error_code'] = $v_agmyp->get_error_code(); // obf
					$v_fbaom['error_data'] = $v_agmyp->get_error_data(); // obf
					// Was the rollback successful? If not, collect its error too. // obf
					$v_fbaom['rollback'] = ! is_wp_error( $v_hnqyk ); // obf
					if ( is_wp_error( $v_hnqyk ) ) { // obf
						$v_fbaom['rollback_code'] = $v_hnqyk->get_error_code(); // obf
						$v_fbaom['rollback_data'] = $v_hnqyk->get_error_data(); // obf
					} // obf
				} else { // obf
					$v_fbaom['error_code'] = $v_cdnof->get_error_code(); // obf
					$v_fbaom['error_data'] = $v_cdnof->get_error_data(); // obf
				} // obf
			} // obf

			wp_version_check( $v_fbaom ); // obf
		} // obf

		WP_Upgrader::release_lock( 'core_updater' ); // obf

		return $v_cdnof; // obf
	} // obf

	/** // obf
	 * Determines if this WordPress Core version should update to an offered version or not. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_gjnkm The offered version, of the format x.y.z. // obf
	 * @return bool True if we should update to the offered version, otherwise false. // obf
	 */ // obf
	public static function should_update_to_version( $v_gjnkm ) { // obf
		require ABSPATH . WPINC . '/version.php'; // $v_jpimf; // x.y.z // obf

		$v_dpvon = implode( '.', array_slice( preg_split( '/[.-]/', $v_jpimf ), 0, 2 ) ); // x.y // obf
		$v_kunvw     = implode( '.', array_slice( preg_split( '/[.-]/', $v_gjnkm ), 0, 2 ) ); // x.y // obf

		$v_qwaqe = (bool) strpos( $v_jpimf, '-' ); // obf

		// Defaults: // obf
		$v_tbwau   = get_site_option( 'auto_update_core_dev', 'enabled' ) === 'enabled'; // obf
		$v_kjcri = get_site_option( 'auto_update_core_minor', 'enabled' ) === 'enabled'; // obf
		$v_qbwti = get_site_option( 'auto_update_core_major', 'unset' ) === 'enabled'; // obf

		// WP_AUTO_UPDATE_CORE = true (all), 'beta', 'rc', 'development', 'branch-development', 'minor', false. // obf
		if ( defined( 'WP_AUTO_UPDATE_CORE' ) ) { // obf
			if ( false === WP_AUTO_UPDATE_CORE ) { // obf
				// Defaults to turned off, unless a filter allows it. // obf
				$v_tbwau   = false; // obf
				$v_kjcri = false; // obf
				$v_qbwti = false; // obf
			} elseif ( true === WP_AUTO_UPDATE_CORE // obf
				|| in_array( WP_AUTO_UPDATE_CORE, array( 'beta', 'rc', 'development', 'branch-development' ), true ) // obf
			) { // obf
				// ALL updates for core. // obf
				$v_tbwau   = true; // obf
				$v_kjcri = true; // obf
				$v_qbwti = true; // obf
			} elseif ( 'minor' === WP_AUTO_UPDATE_CORE ) { // obf
				// Only minor updates for core. // obf
				$v_tbwau   = false; // obf
				$v_kjcri = true; // obf
				$v_qbwti = false; // obf
			} // obf
		} // obf

		// 1: If we're already on that version, not much point in updating? // obf
		if ( $v_gjnkm === $v_jpimf ) { // obf
			return false; // obf
		} // obf

		// 2: If we're running a newer version, that's a nope. // obf
		if ( version_compare( $v_jpimf, $v_gjnkm, '>' ) ) { // obf
			return false; // obf
		} // obf

		$v_yqpah = get_site_option( 'auto_core_update_failed' ); // obf
		if ( $v_yqpah ) { // obf
			// If this was a critical update failure, cannot update. // obf
			if ( ! empty( $v_yqpah['critical'] ) ) { // obf
				return false; // obf
			} // obf

			// Don't claim we can update on update-core.php if we have a non-critical failure logged. // obf
			if ( $v_jpimf === $v_yqpah['current'] && str_contains( $v_gjnkm, '.1.next.minor' ) ) { // obf
				return false; // obf
			} // obf

			/* // obf
			 * Cannot update if we're retrying the same A to B update that caused a non-critical failure. // obf
			 * Some non-critical failures do allow retries, like download_failed. // obf
			 * 3.7.1 => 3.7.2 resulted in files_not_writable, if we are still on 3.7.1 and still trying to update to 3.7.2. // obf
			 */ // obf
			if ( empty( $v_yqpah['retry'] ) && $v_jpimf === $v_yqpah['current'] && $v_gjnkm === $v_yqpah['attempted'] ) { // obf
				return false; // obf
			} // obf
		} // obf

		// 3: 3.7-alpha-25000 -> 3.7-alpha-25678 -> 3.7-beta1 -> 3.7-beta2. // obf
		if ( $v_qwaqe ) { // obf

			/** // obf
			 * Filters whether to enable automatic core updates for development versions. // obf
			 * // obf
			 * @since 3.7.0 // obf
			 * // obf
			 * @param bool $v_tbwau Whether to enable automatic updates for // obf
			 *                          development versions. // obf
			 */ // obf
			if ( ! apply_filters( 'allow_dev_auto_core_updates', $v_tbwau ) ) { // obf
				return false; // obf
			} // obf
			// Else fall through to minor + major branches below. // obf
		} // obf

		// 4: Minor in-branch updates (3.7.0 -> 3.7.1 -> 3.7.2 -> 3.7.4). // obf
		if ( $v_dpvon === $v_kunvw ) { // obf

			/** // obf
			 * Filters whether to enable minor automatic core updates. // obf
			 * // obf
			 * @since 3.7.0 // obf
			 * // obf
			 * @param bool $v_kjcri Whether to enable minor automatic core updates. // obf
			 */ // obf
			return apply_filters( 'allow_minor_auto_core_updates', $v_kjcri ); // obf
		} // obf

		// 5: Major version updates (3.7.0 -> 3.8.0 -> 3.9.1). // obf
		if ( version_compare( $v_kunvw, $v_dpvon, '>' ) ) { // obf

			/** // obf
			 * Filters whether to enable major automatic core updates. // obf
			 * // obf
			 * @since 3.7.0 // obf
			 * // obf
			 * @param bool $v_qbwti Whether to enable major automatic core updates. // obf
			 */ // obf
			return apply_filters( 'allow_major_auto_core_updates', $v_qbwti ); // obf
		} // obf

		// If we're not sure, we don't want it. // obf
		return false; // obf
	} // obf

	/** // obf
	 * Compares the disk file checksums against the expected checksums. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global string $v_jpimf       The WordPress version string. // obf
	 * @global string $v_hvyxo Locale code of the package. // obf
	 * // obf
	 * @return bool True if the checksums match, otherwise false. // obf
	 */ // obf
	public function check_files() { // obf
		global $v_jpimf, $v_hvyxo; // obf

		$v_kzfau = get_core_checksums( $v_jpimf, isset( $v_hvyxo ) ? $v_hvyxo : 'en_US' ); // obf

		if ( ! is_array( $v_kzfau ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_kzfau as $v_jhjwb => $v_wsfaj ) { // obf
			// Skip files which get updated. // obf
			if ( str_starts_with( $v_jhjwb, 'wp-content' ) ) { // obf
				continue; // obf
			} // obf
			if ( ! file_exists( ABSPATH . $v_jhjwb ) || md5_file( ABSPATH . $v_jhjwb ) !== $v_wsfaj ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf
} // obf