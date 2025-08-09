

<?php // obf
/** // obf
 * Upgrade API: WP_Upgrader class // obf
 * // obf
 * Requires skin classes and WP_Upgrader subclasses for backward compatibility. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 2.8.0 // obf
 */ // obf

/** WP_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader-skin.php'; // obf

/** Plugin_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader-skin.php'; // obf

/** Theme_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-theme-upgrader-skin.php'; // obf

/** Bulk_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-bulk-upgrader-skin.php'; // obf

/** Bulk_Plugin_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-bulk-plugin-upgrader-skin.php'; // obf

/** Bulk_Theme_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-bulk-theme-upgrader-skin.php'; // obf

/** Plugin_Installer_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-plugin-installer-skin.php'; // obf

/** Theme_Installer_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-theme-installer-skin.php'; // obf

/** Language_Pack_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-language-pack-upgrader-skin.php'; // obf

/** Automatic_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-automatic-upgrader-skin.php'; // obf

/** WP_Ajax_Upgrader_Skin class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php'; // obf

/** // obf
 * Core class used for upgrading/installing a local set of files via // obf
 * the Filesystem Abstraction classes from a Zip file. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Upgrader { // obf

	/** // obf
	 * The error/notification strings used to update the user on the progress. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array $v_hfjqo // obf
	 */ // obf
	public $v_hfjqo = array(); // obf

	/** // obf
	 * The upgrader skin being used. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var Automatic_Upgrader_Skin|WP_Upgrader_Skin $v_jwpzt // obf
	 */ // obf
	public $v_jwpzt = null; // obf

	/** // obf
	 * The result of the installation. // obf
	 * // obf
	 * This is set by WP_Upgrader::install_package(), only when the package is installed // obf
	 * successfully. It will then be an array, unless a WP_Error is returned by the // obf
	 * {@see 'upgrader_post_install'} filter. In that case, the WP_Error will be assigned to // obf
	 * it. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var array|WP_Error $v_wqelq { // obf
	 *     @type string $v_rywec             The full path to the source the files were installed from. // obf
	 *     @type string $v_fnghl       List of all the files in the source directory. // obf
	 *     @type string $v_vcazs        The full path to the installation destination folder. // obf
	 *     @type string $v_ovzyg   The name of the destination folder, or empty if `$v_vcazs` // obf
	 *                                      and `$v_nwneu` are the same. // obf
	 *     @type string $v_nwneu  The full local path to the destination folder. This is usually // obf
	 *                                      the same as `$v_vcazs`. // obf
	 *     @type string $v_ispbx The full remote path to the destination folder // obf
	 *                                      (i.e., from `$v_qrxta`). // obf
	 *     @type bool   $v_fqgzj  Whether the destination folder was cleared. // obf
	 * } // obf
	 */ // obf
	public $v_wqelq = array(); // obf

	/** // obf
	 * The total number of updates being performed. // obf
	 * // obf
	 * Set by the bulk update methods. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var int $v_xxjqu // obf
	 */ // obf
	public $v_xxjqu = 0; // obf

	/** // obf
	 * The current update if multiple updates are being performed. // obf
	 * // obf
	 * Used by the bulk update methods, and incremented for each update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_livce = 0; // obf

	/** // obf
	 * Stores the list of plugins or themes added to temporary backup directory. // obf
	 * // obf
	 * Used by the rollback functions. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_szywn = array(); // obf

	/** // obf
	 * Stores the list of plugins or themes to be restored from temporary backup directory. // obf
	 * // obf
	 * Used by the rollback functions. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_gigfa = array(); // obf

	/** // obf
	 * Construct the upgrader with a skin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param WP_Upgrader_Skin $v_jwpzt The upgrader skin to use. Default is a WP_Upgrader_Skin // obf
	 *                               instance. // obf
	 */ // obf
	public function __construct( $v_jwpzt = null ) { // obf
		if ( null === $v_jwpzt ) { // obf
			$v_vmhlw->skin = new WP_Upgrader_Skin(); // obf
		} else { // obf
			$v_vmhlw->skin = $v_jwpzt; // obf
		} // obf
	} // obf

	/** // obf
	 * Initializes the upgrader. // obf
	 * // obf
	 * This will set the relationship between the skin being used and this upgrader, // obf
	 * and also add the generic strings to `WP_Upgrader::$v_hfjqo`. // obf
	 * // obf
	 * Additionally, it will schedule a weekly task to clean up the temporary backup directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 6.3.0 Added the `schedule_temp_backup_cleanup()` task. // obf
	 */ // obf
	public function init() { // obf
		$v_vmhlw->skin->set_upgrader( $v_vmhlw ); // obf
		$v_vmhlw->generic_strings(); // obf

		if ( ! wp_installing() ) { // obf
			$v_vmhlw->schedule_temp_backup_cleanup(); // obf
		} // obf
	} // obf

	/** // obf
	 * Schedules the cleanup of the temporary backup directory. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	protected function schedule_temp_backup_cleanup() { // obf
		if ( false === wp_next_scheduled( 'wp_delete_temp_updater_backups' ) ) { // obf
			wp_schedule_event( time(), 'weekly', 'wp_delete_temp_updater_backups' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds the generic strings to WP_Upgrader::$v_hfjqo. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function generic_strings() { // obf
		$v_vmhlw->strings['bad_request']    = __( 'Invalid data provided.' ); // obf
		$v_vmhlw->strings['fs_unavailable'] = __( 'Could not access filesystem.' ); // obf
		$v_vmhlw->strings['fs_error']       = __( 'Filesystem error.' ); // obf
		$v_vmhlw->strings['fs_no_root_dir'] = __( 'Unable to locate WordPress root directory.' ); // obf
		/* translators: %s: Directory name. */ // obf
		$v_vmhlw->strings['fs_no_content_dir'] = sprintf( __( 'Unable to locate WordPress content directory (%s).' ), 'wp-content' ); // obf
		$v_vmhlw->strings['fs_no_plugins_dir'] = __( 'Unable to locate WordPress plugin directory.' ); // obf
		$v_vmhlw->strings['fs_no_themes_dir']  = __( 'Unable to locate WordPress theme directory.' ); // obf
		/* translators: %s: Directory name. */ // obf
		$v_vmhlw->strings['fs_no_folder'] = __( 'Unable to locate needed folder (%s).' ); // obf

		$v_vmhlw->strings['no_package']           = __( 'Package not available.' ); // obf
		$v_vmhlw->strings['download_failed']      = __( 'Download failed.' ); // obf
		$v_vmhlw->strings['installing_package']   = __( 'Installing the latest version&#8230;' ); // obf
		$v_vmhlw->strings['no_files']             = __( 'The package contains no files.' ); // obf
		$v_vmhlw->strings['folder_exists']        = __( 'Destination folder already exists.' ); // obf
		$v_vmhlw->strings['mkdir_failed']         = __( 'Could not create directory.' ); // obf
		$v_vmhlw->strings['incompatible_archive'] = __( 'The package could not be installed.' ); // obf
		$v_vmhlw->strings['files_not_writable']   = __( 'The update cannot be installed because some files could not be copied. This is usually due to inconsistent file permissions.' ); // obf
		$v_vmhlw->strings['dir_not_readable']     = __( 'A directory could not be read.' ); // obf

		$v_vmhlw->strings['maintenance_start'] = __( 'Enabling Maintenance mode&#8230;' ); // obf
		$v_vmhlw->strings['maintenance_end']   = __( 'Disabling Maintenance mode&#8230;' ); // obf

		/* translators: %s: upgrade-temp-backup */ // obf
		$v_vmhlw->strings['temp_backup_mkdir_failed'] = sprintf( __( 'Could not create the %s directory.' ), 'upgrade-temp-backup' ); // obf
		/* translators: %s: upgrade-temp-backup */ // obf
		$v_vmhlw->strings['temp_backup_move_failed'] = sprintf( __( 'Could not move the old version to the %s directory.' ), 'upgrade-temp-backup' ); // obf
		/* translators: %s: The plugin or theme slug. */ // obf
		$v_vmhlw->strings['temp_backup_restore_failed'] = __( 'Could not restore the original version of %s.' ); // obf
		/* translators: %s: The plugin or theme slug. */ // obf
		$v_vmhlw->strings['temp_backup_delete_failed'] = __( 'Could not delete the temporary backup directory for %s.' ); // obf
	} // obf

	/** // obf
	 * Connects to the filesystem. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param string[] $v_vvbbd                  Optional. Array of directories. If any of these do // obf
	 *                                               not exist, a WP_Error object will be returned. // obf
	 *                                               Default empty array. // obf
	 * @param bool     $v_zkqvw Whether to allow relaxed file ownership. // obf
	 *                                               Default false. // obf
	 * @return bool|WP_Error True if able to connect, false or a WP_Error otherwise. // obf
	 */ // obf
	public function fs_connect( $v_vvbbd = array(), $v_zkqvw = false ) { // obf
		global $v_qrxta; // obf

		$v_tvump = $v_vmhlw->skin->request_filesystem_credentials( false, $v_vvbbd[0], $v_zkqvw ); // obf
		if ( false === $v_tvump ) { // obf
			return false; // obf
		} // obf

		if ( ! WP_Filesystem( $v_tvump, $v_vvbbd[0], $v_zkqvw ) ) { // obf
			$v_nkhmz = true; // obf
			if ( is_object( $v_qrxta ) && $v_qrxta->errors->has_errors() ) { // obf
				$v_nkhmz = $v_qrxta->errors; // obf
			} // obf
			// Failed to connect. Error and request again. // obf
			$v_vmhlw->skin->request_filesystem_credentials( $v_nkhmz, $v_vvbbd[0], $v_zkqvw ); // obf
			return false; // obf
		} // obf

		if ( ! is_object( $v_qrxta ) ) { // obf
			return new WP_Error( 'fs_unavailable', $v_vmhlw->strings['fs_unavailable'] ); // obf
		} // obf

		if ( is_wp_error( $v_qrxta->errors ) && $v_qrxta->errors->has_errors() ) { // obf
			return new WP_Error( 'fs_error', $v_vmhlw->strings['fs_error'], $v_qrxta->errors ); // obf
		} // obf

		foreach ( (array) $v_vvbbd as $v_infnd ) { // obf
			switch ( $v_infnd ) { // obf
				case ABSPATH: // obf
					if ( ! $v_qrxta->abspath() ) { // obf
						return new WP_Error( 'fs_no_root_dir', $v_vmhlw->strings['fs_no_root_dir'] ); // obf
					} // obf
					break; // obf
				case WP_CONTENT_DIR: // obf
					if ( ! $v_qrxta->wp_content_dir() ) { // obf
						return new WP_Error( 'fs_no_content_dir', $v_vmhlw->strings['fs_no_content_dir'] ); // obf
					} // obf
					break; // obf
				case WP_PLUGIN_DIR: // obf
					if ( ! $v_qrxta->wp_plugins_dir() ) { // obf
						return new WP_Error( 'fs_no_plugins_dir', $v_vmhlw->strings['fs_no_plugins_dir'] ); // obf
					} // obf
					break; // obf
				case get_theme_root(): // obf
					if ( ! $v_qrxta->wp_themes_dir() ) { // obf
						return new WP_Error( 'fs_no_themes_dir', $v_vmhlw->strings['fs_no_themes_dir'] ); // obf
					} // obf
					break; // obf
				default: // obf
					if ( ! $v_qrxta->find_folder( $v_infnd ) ) { // obf
						return new WP_Error( 'fs_no_folder', sprintf( $v_vmhlw->strings['fs_no_folder'], esc_html( basename( $v_infnd ) ) ) ); // obf
					} // obf
					break; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Downloads a package. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.2.0 Added the `$v_hpoai` parameter. // obf
	 * @since 5.5.0 Added the `$v_hmohs` parameter. // obf
	 * // obf
	 * @param string $v_ancck          The URI of the package. If this is the full path to an // obf
	 *                                 existing local file, it will be returned untouched. // obf
	 * @param bool   $v_hpoai Whether to validate file signatures. Default false. // obf
	 * @param array  $v_hmohs       Extra arguments to pass to the filter hooks. Default empty array. // obf
	 * @return string|WP_Error The full path to the downloaded package file, or a WP_Error object. // obf
	 */ // obf
	public function download_package( $v_ancck, $v_hpoai = false, $v_hmohs = array() ) { // obf
		/** // obf
		 * Filters whether to return the package. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * @since 5.5.0 Added the `$v_hmohs` parameter. // obf
		 * // obf
		 * @param bool        $v_jqrtu      Whether to bail without returning the package. // obf
		 *                                Default false. // obf
		 * @param string      $v_ancck    The package file name. // obf
		 * @param WP_Upgrader $v_pemgc   The WP_Upgrader instance. // obf
		 * @param array       $v_hmohs Extra arguments passed to hooked filters. // obf
		 */ // obf
		$v_jqrtu = apply_filters( 'upgrader_pre_download', false, $v_ancck, $v_vmhlw, $v_hmohs ); // obf
		if ( false !== $v_jqrtu ) { // obf
			return $v_jqrtu; // obf
		} // obf

		if ( ! preg_match( '!^(http|https|ftp)://!i', $v_ancck ) && file_exists( $v_ancck ) ) { // Local file or remote? // obf
			return $v_ancck; // Must be a local file. // obf
		} // obf

		if ( empty( $v_ancck ) ) { // obf
			return new WP_Error( 'no_package', $v_vmhlw->strings['no_package'] ); // obf
		} // obf

		$v_vmhlw->skin->feedback( 'downloading_package', $v_ancck ); // obf

		$v_ljfie = download_url( $v_ancck, 300, $v_hpoai ); // obf

		if ( is_wp_error( $v_ljfie ) && ! $v_ljfie->get_error_data( 'softfail-filename' ) ) { // obf
			return new WP_Error( 'download_failed', $v_vmhlw->strings['download_failed'], $v_ljfie->get_error_message() ); // obf
		} // obf

		return $v_ljfie; // obf
	} // obf

	/** // obf
	 * Unpacks a compressed package file. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param string $v_ancck        Full path to the package file. // obf
	 * @param bool   $v_blirc Optional. Whether to delete the package file after attempting // obf
	 *                               to unpack it. Default true. // obf
	 * @return string|WP_Error The path to the unpacked contents, or a WP_Error on failure. // obf
	 */ // obf
	public function unpack_package( $v_ancck, $v_blirc = true ) { // obf
		global $v_qrxta; // obf

		$v_vmhlw->skin->feedback( 'unpack_package' ); // obf

		if ( ! $v_qrxta->wp_content_dir() ) { // obf
			return new WP_Error( 'fs_no_content_dir', $v_vmhlw->strings['fs_no_content_dir'] ); // obf
		} // obf

		$v_dfdfg = $v_qrxta->wp_content_dir() . 'upgrade/'; // obf

		// Clean up contents of upgrade directory beforehand. // obf
		$v_arkwe = $v_qrxta->dirlist( $v_dfdfg ); // obf
		if ( ! empty( $v_arkwe ) ) { // obf
			foreach ( $v_arkwe as $v_crgqk ) { // obf
				$v_qrxta->delete( $v_dfdfg . $v_crgqk['name'], true ); // obf
			} // obf
		} // obf

		// We need a working directory - strip off any .tmp or .zip suffixes. // obf
		$v_vaxdd = $v_dfdfg . basename( basename( $v_ancck, '.tmp' ), '.zip' ); // obf

		// Clean up working directory. // obf
		if ( $v_qrxta->is_dir( $v_vaxdd ) ) { // obf
			$v_qrxta->delete( $v_vaxdd, true ); // obf
		} // obf

		// Unzip package to working directory. // obf
		$v_wqelq = unzip_file( $v_ancck, $v_vaxdd ); // obf

		// Once extracted, delete the package if required. // obf
		if ( $v_blirc ) { // obf
			unlink( $v_ancck ); // obf
		} // obf

		if ( is_wp_error( $v_wqelq ) ) { // obf
			$v_qrxta->delete( $v_vaxdd, true ); // obf
			if ( 'incompatible_archive' === $v_wqelq->get_error_code() ) { // obf
				return new WP_Error( 'incompatible_archive', $v_vmhlw->strings['incompatible_archive'], $v_wqelq->get_error_data() ); // obf
			} // obf
			return $v_wqelq; // obf
		} // obf

		return $v_vaxdd; // obf
	} // obf

	/** // obf
	 * Flattens the results of WP_Filesystem_Base::dirlist() for iterating over. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array  $v_wwzgu Array of files as returned by WP_Filesystem_Base::dirlist(). // obf
	 * @param string $v_tspls         Relative path to prepend to child nodes. Optional. // obf
	 * @return array A flattened array of the $v_wwzgu specified. // obf
	 */ // obf
	protected function flatten_dirlist( $v_wwzgu, $v_tspls = '' ) { // obf
		$v_hjsog = array(); // obf

		foreach ( $v_wwzgu as $v_hkvpw => $v_xplhy ) { // obf
			$v_hjsog[ $v_tspls . $v_hkvpw ] = $v_xplhy; // obf

			// Append children recursively. // obf
			if ( ! empty( $v_xplhy['files'] ) ) { // obf
				$v_eqyxw = $v_vmhlw->flatten_dirlist( $v_xplhy['files'], $v_tspls . $v_hkvpw . '/' ); // obf

				// Merge keeping possible numeric keys, which array_merge() will reindex from 0..n. // obf
				$v_hjsog = $v_hjsog + $v_eqyxw; // obf
			} // obf
		} // obf

		return $v_hjsog; // obf
	} // obf

	/** // obf
	 * Clears the directory where this item is going to be installed into. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param string $v_ispbx The location on the remote filesystem to be cleared. // obf
	 * @return true|WP_Error True upon success, WP_Error on failure. // obf
	 */ // obf
	public function clear_destination( $v_ispbx ) { // obf
		global $v_qrxta; // obf

		$v_hjsog = $v_qrxta->dirlist( $v_ispbx, true, true ); // obf

		// False indicates that the $v_ispbx doesn't exist. // obf
		if ( false === $v_hjsog ) { // obf
			return true; // obf
		} // obf

		// Flatten the file list to iterate over. // obf
		$v_hjsog = $v_vmhlw->flatten_dirlist( $v_hjsog ); // obf

		// Check all files are writable before attempting to clear the destination. // obf
		$v_yvduq = array(); // obf

		// Check writability. // obf
		foreach ( $v_hjsog as $v_izvlr => $v_dzqht ) { // obf
			if ( ! $v_qrxta->is_writable( $v_ispbx . $v_izvlr ) ) { // obf
				// Attempt to alter permissions to allow writes and try again. // obf
				$v_qrxta->chmod( $v_ispbx . $v_izvlr, ( 'd' === $v_dzqht['type'] ? FS_CHMOD_DIR : FS_CHMOD_FILE ) ); // obf
				if ( ! $v_qrxta->is_writable( $v_ispbx . $v_izvlr ) ) { // obf
					$v_yvduq[] = $v_izvlr; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_yvduq ) ) { // obf
			return new WP_Error( 'files_not_writable', $v_vmhlw->strings['files_not_writable'], implode( ', ', $v_yvduq ) ); // obf
		} // obf

		if ( ! $v_qrxta->delete( $v_ispbx, true ) ) { // obf
			return new WP_Error( 'remove_old_failed', $v_vmhlw->strings['remove_old_failed'] ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Install a package. // obf
	 * // obf
	 * Copies the contents of a package from a source directory, and installs them in // obf
	 * a destination directory. Optionally removes the source. It can also optionally // obf
	 * clear out the destination folder if it already exists. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 6.2.0 Use move_dir() instead of copy_dir() when possible. // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta        WordPress filesystem subclass. // obf
	 * @global string[]           $v_jiito // obf
	 * // obf
	 * @param array|string $v_vcrsn { // obf
	 *     Optional. Array or string of arguments for installing a package. Default empty array. // obf
	 * // obf
	 *     @type string $v_rywec                      Required path to the package source. Default empty. // obf
	 *     @type string $v_vcazs                 Required path to a folder to install the package in. // obf
	 *                                               Default empty. // obf
	 *     @type bool   $v_fqgzj           Whether to delete any files already in the destination // obf
	 *                                               folder. Default false. // obf
	 *     @type bool   $v_tkifm               Whether to delete the files from the working directory // obf
	 *                                               after copying them to the destination. Default false. // obf
	 *     @type bool   $v_gyzln Whether to abort the installation if // obf
	 *                                               the destination folder already exists. Default true. // obf
	 *     @type array  $v_hmohs                  Extra arguments to pass to the filter hooks called by // obf
	 *                                               WP_Upgrader::install_package(). Default empty array. // obf
	 * } // obf
	 * // obf
	 * @return array|WP_Error The result (also stored in `WP_Upgrader::$v_wqelq`), or a WP_Error on failure. // obf
	 */ // obf
	public function install_package( $v_vcrsn = array() ) { // obf
		global $v_qrxta, $v_jiito; // obf

		$v_ndesk = array( // obf
			'source'                      => '', // Please always pass this. // obf
			'destination'                 => '', // ...and this. // obf
			'clear_destination'           => false, // obf
			'clear_working'               => false, // obf
			'abort_if_destination_exists' => true, // obf
			'hook_extra'                  => array(), // obf
		); // obf

		$v_vcrsn = wp_parse_args( $v_vcrsn, $v_ndesk ); // obf

		// These were previously extract()'d. // obf
		$v_rywec            = $v_vcrsn['source']; // obf
		$v_vcazs       = $v_vcrsn['destination']; // obf
		$v_fqgzj = $v_vcrsn['clear_destination']; // obf

		/* // obf
		 * Give the upgrade an additional 300 seconds (5 minutes) to ensure the install // obf
		 * doesn't prematurely timeout having used up the maximum script execution time // obf
		 * upacking and downloading in WP_Upgrader->run(). // obf
		 */ // obf
		if ( function_exists( 'set_time_limit' ) ) { // obf
			set_time_limit( 300 ); // obf
		} // obf

		if ( // obf
			( ! is_string( $v_rywec ) || '' === $v_rywec || trim( $v_rywec ) !== $v_rywec ) || // obf
			( ! is_string( $v_vcazs ) || '' === $v_vcazs || trim( $v_vcazs ) !== $v_vcazs ) // obf
		) { // obf
			return new WP_Error( 'bad_request', $v_vmhlw->strings['bad_request'] ); // obf
		} // obf
		$v_vmhlw->skin->feedback( 'installing_package' ); // obf

		/** // obf
		 * Filters the installation response before the installation has started. // obf
		 * // obf
		 * Returning a value that could be evaluated as a `WP_Error` will effectively // obf
		 * short-circuit the installation, returning that value instead. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param bool|WP_Error $v_mhgxh   Installation response. // obf
		 * @param array         $v_hmohs Extra arguments passed to hooked filters. // obf
		 */ // obf
		$v_hoejz = apply_filters( 'upgrader_pre_install', true, $v_vcrsn['hook_extra'] ); // obf

		if ( is_wp_error( $v_hoejz ) ) { // obf
			return $v_hoejz; // obf
		} // obf

		// Retain the original source and destinations. // obf
		$v_uqscd     = $v_vcrsn['source']; // obf
		$v_nwneu = $v_vcazs; // obf

		$v_reybi = $v_qrxta->dirlist( $v_uqscd ); // obf

		if ( false === $v_reybi ) { // obf
			return new WP_Error( 'source_read_failed', $v_vmhlw->strings['fs_error'], $v_vmhlw->strings['dir_not_readable'] ); // obf
		} // obf

		$v_fnghl       = array_keys( $v_reybi ); // obf
		$v_ispbx = $v_qrxta->find_folder( $v_nwneu ); // obf

		// Locate which directory to copy to the new folder. This is based on the actual folder holding the files. // obf
		if ( 1 === count( $v_fnghl ) && $v_qrxta->is_dir( trailingslashit( $v_vcrsn['source'] ) . $v_fnghl[0] . '/' ) ) { // obf
			// Only one folder? Then we want its contents. // obf
			$v_rywec = trailingslashit( $v_vcrsn['source'] ) . trailingslashit( $v_fnghl[0] ); // obf
		} elseif ( 0 === count( $v_fnghl ) ) { // obf
			// There are no files? // obf
			return new WP_Error( 'incompatible_archive_empty', $v_vmhlw->strings['incompatible_archive'], $v_vmhlw->strings['no_files'] ); // obf
		} else { // obf
			/* // obf
			 * It's only a single file, the upgrader will use the folder name of this file as the destination folder. // obf
			 * Folder name is based on zip filename. // obf
			 */ // obf
			$v_rywec = trailingslashit( $v_vcrsn['source'] ); // obf
		} // obf

		/** // obf
		 * Filters the source file location for the upgrade package. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @since 4.4.0 The $v_hmohs parameter became available. // obf
		 * // obf
		 * @param string      $v_rywec        File source location. // obf
		 * @param string      $v_uqscd Remote file source location. // obf
		 * @param WP_Upgrader $v_pemgc      WP_Upgrader instance. // obf
		 * @param array       $v_hmohs    Extra arguments passed to hooked filters. // obf
		 */ // obf
		$v_rywec = apply_filters( 'upgrader_source_selection', $v_rywec, $v_uqscd, $v_vmhlw, $v_vcrsn['hook_extra'] ); // obf

		if ( is_wp_error( $v_rywec ) ) { // obf
			return $v_rywec; // obf
		} // obf

		if ( ! empty( $v_vcrsn['hook_extra']['temp_backup'] ) ) { // obf
			$v_sxmrm = $v_vmhlw->move_to_temp_backup_dir( $v_vcrsn['hook_extra']['temp_backup'] ); // obf

			if ( is_wp_error( $v_sxmrm ) ) { // obf
				return $v_sxmrm; // obf
			} // obf

			$v_vmhlw->temp_backups[] = $v_vcrsn['hook_extra']['temp_backup']; // obf
		} // obf

		// Has the source location changed? If so, we need a new source_files list. // obf
		if ( $v_rywec !== $v_uqscd ) { // obf
			$v_reybi = $v_qrxta->dirlist( $v_rywec ); // obf

			if ( false === $v_reybi ) { // obf
				return new WP_Error( 'new_source_read_failed', $v_vmhlw->strings['fs_error'], $v_vmhlw->strings['dir_not_readable'] ); // obf
			} // obf

			$v_fnghl = array_keys( $v_reybi ); // obf
		} // obf

		/* // obf
		 * Protection against deleting files in any important base directories. // obf
		 * Theme_Upgrader & Plugin_Upgrader also trigger this, as they pass the // obf
		 * destination directory (WP_PLUGIN_DIR / wp-content/themes) intending // obf
		 * to copy the directory into the directory, whilst they pass the source // obf
		 * as the actual files to copy. // obf
		 */ // obf
		$v_ynlne = array( ABSPATH, WP_CONTENT_DIR, WP_PLUGIN_DIR, WP_CONTENT_DIR . '/themes' ); // obf

		if ( is_array( $v_jiito ) ) { // obf
			$v_ynlne = array_merge( $v_ynlne, $v_jiito ); // obf
		} // obf

		if ( in_array( $v_vcazs, $v_ynlne, true ) ) { // obf
			$v_ispbx = trailingslashit( $v_ispbx ) . trailingslashit( basename( $v_rywec ) ); // obf
			$v_vcazs        = trailingslashit( $v_vcazs ) . trailingslashit( basename( $v_rywec ) ); // obf
		} // obf

		if ( $v_fqgzj ) { // obf
			// We're going to clear the destination if there's something there. // obf
			$v_vmhlw->skin->feedback( 'remove_old' ); // obf

			$v_pfvbh = $v_vmhlw->clear_destination( $v_ispbx ); // obf

			/** // obf
			 * Filters whether the upgrader cleared the destination. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param true|WP_Error $v_pfvbh            Whether the destination was cleared. // obf
			 *                                          True upon success, WP_Error on failure. // obf
			 * @param string        $v_nwneu  The local package destination. // obf
			 * @param string        $v_ispbx The remote package destination. // obf
			 * @param array         $v_hmohs         Extra arguments passed to hooked filters. // obf
			 */ // obf
			$v_pfvbh = apply_filters( 'upgrader_clear_destination', $v_pfvbh, $v_nwneu, $v_ispbx, $v_vcrsn['hook_extra'] ); // obf

			if ( is_wp_error( $v_pfvbh ) ) { // obf
				return $v_pfvbh; // obf
			} // obf
		} elseif ( $v_vcrsn['abort_if_destination_exists'] && $v_qrxta->exists( $v_ispbx ) ) { // obf
			/* // obf
			 * If we're not clearing the destination folder and something exists there already, bail. // obf
			 * But first check to see if there are actually any files in the folder. // obf
			 */ // obf
			$v_eiucb = $v_qrxta->dirlist( $v_ispbx ); // obf
			if ( ! empty( $v_eiucb ) ) { // obf
				$v_qrxta->delete( $v_uqscd, true ); // Clear out the source files. // obf
				return new WP_Error( 'folder_exists', $v_vmhlw->strings['folder_exists'], $v_ispbx ); // obf
			} // obf
		} // obf

		/* // obf
		 * If 'clear_working' is false, the source should not be removed, so use copy_dir() instead. // obf
		 * // obf
		 * Partial updates, like language packs, may want to retain the destination. // obf
		 * If the destination exists or has contents, this may be a partial update, // obf
		 * and the destination should not be removed, so use copy_dir() instead. // obf
		 */ // obf
		if ( $v_vcrsn['clear_working'] // obf
			&& ( // obf
				// Destination does not exist or has no contents. // obf
				! $v_qrxta->exists( $v_ispbx ) // obf
				|| empty( $v_qrxta->dirlist( $v_ispbx ) ) // obf
			) // obf
		) { // obf
			$v_wqelq = move_dir( $v_rywec, $v_ispbx, true ); // obf
		} else { // obf
			// Create destination if needed. // obf
			if ( ! $v_qrxta->exists( $v_ispbx ) ) { // obf
				if ( ! $v_qrxta->mkdir( $v_ispbx, FS_CHMOD_DIR ) ) { // obf
					return new WP_Error( 'mkdir_failed_destination', $v_vmhlw->strings['mkdir_failed'], $v_ispbx ); // obf
				} // obf
			} // obf
			$v_wqelq = copy_dir( $v_rywec, $v_ispbx ); // obf
		} // obf

		// Clear the working directory? // obf
		if ( $v_vcrsn['clear_working'] ) { // obf
			$v_qrxta->delete( $v_uqscd, true ); // obf
		} // obf

		if ( is_wp_error( $v_wqelq ) ) { // obf
			return $v_wqelq; // obf
		} // obf

		$v_ovzyg = basename( str_replace( $v_nwneu, '', $v_vcazs ) ); // obf
		if ( '.' === $v_ovzyg ) { // obf
			$v_ovzyg = ''; // obf
		} // obf

		$v_vmhlw->result = compact( 'source', 'source_files', 'destination', 'destination_name', 'local_destination', 'remote_destination', 'clear_destination' ); // obf

		/** // obf
		 * Filters the installation response after the installation has finished. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param bool  $v_mhgxh   Installation response. // obf
		 * @param array $v_hmohs Extra arguments passed to hooked filters. // obf
		 * @param array $v_wqelq     Installation result data. // obf
		 */ // obf
		$v_hoejz = apply_filters( 'upgrader_post_install', true, $v_vcrsn['hook_extra'], $v_vmhlw->result ); // obf

		if ( is_wp_error( $v_hoejz ) ) { // obf
			$v_vmhlw->result = $v_hoejz; // obf
			return $v_hoejz; // obf
		} // obf

		// Bombard the calling function will all the info which we've just used. // obf
		return $v_vmhlw->result; // obf
	} // obf

	/** // obf
	 * Runs an upgrade/installation. // obf
	 * // obf
	 * Attempts to download the package (if it is not a local file), unpack it, and // obf
	 * install it in the destination folder. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_lvfyj { // obf
	 *     Array or string of arguments for upgrading/installing a package. // obf
	 * // obf
	 *     @type string $v_ancck                     The full path or URI of the package to install. // obf
	 *                                               Default empty. // obf
	 *     @type string $v_vcazs                 The full path to the destination folder. // obf
	 *                                               Default empty. // obf
	 *     @type bool   $v_fqgzj           Whether to delete any files already in the // obf
	 *                                               destination folder. Default false. // obf
	 *     @type bool   $v_tkifm               Whether to delete the files from the working // obf
	 *                                               directory after copying them to the destination. // obf
	 *                                               Default true. // obf
	 *     @type bool   $v_gyzln Whether to abort the installation if the destination // obf
	 *                                               folder already exists. When true, `$v_fqgzj` // obf
	 *                                               should be false. Default true. // obf
	 *     @type bool   $v_zzwfd                    Whether this run is one of multiple upgrade/installation // obf
	 *                                               actions being performed in bulk. When true, the skin // obf
	 *                                               WP_Upgrader::header() and WP_Upgrader::footer() // obf
	 *                                               aren't called. Default false. // obf
	 *     @type array  $v_hmohs                  Extra arguments to pass to the filter hooks called by // obf
	 *                                               WP_Upgrader::run(). // obf
	 * } // obf
	 * @return array|false|WP_Error The result from self::install_package() on success, otherwise a WP_Error, // obf
	 *                              or false if unable to connect to the filesystem. // obf
	 */ // obf
	public function run( $v_lvfyj ) { // obf

		$v_ndesk = array( // obf
			'package'                     => '', // Please always pass this. // obf
			'destination'                 => '', // ...and this. // obf
			'clear_destination'           => false, // obf
			'clear_working'               => true, // obf
			'abort_if_destination_exists' => true, // Abort if the destination directory exists. Pass clear_destination as false please. // obf
			'is_multi'                    => false, // obf
			'hook_extra'                  => array(), // Pass any extra $v_hmohs args here, this will be passed to any hooked filters. // obf
		); // obf

		$v_lvfyj = wp_parse_args( $v_lvfyj, $v_ndesk ); // obf

		/** // obf
		 * Filters the package options before running an update. // obf
		 * // obf
		 * See also {@see 'upgrader_process_complete'}. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param array $v_lvfyj { // obf
		 *     Options used by the upgrader. // obf
		 * // obf
		 *     @type string $v_ancck                     Package for update. // obf
		 *     @type string $v_vcazs                 Update location. // obf
		 *     @type bool   $v_fqgzj           Clear the destination resource. // obf
		 *     @type bool   $v_tkifm               Clear the working resource. // obf
		 *     @type bool   $v_gyzln Abort if the Destination directory exists. // obf
		 *     @type bool   $v_zzwfd                    Whether the upgrader is running multiple times. // obf
		 *     @type array  $v_hmohs { // obf
		 *         Extra hook arguments. // obf
		 * // obf
		 *         @type string $v_cgbor               Type of action. Default 'update'. // obf
		 *         @type string $v_ixmui                 Type of update process. Accepts 'plugin', 'theme', or 'core'. // obf
		 *         @type bool   $v_qyrpe                 Whether the update process is a bulk update. Default true. // obf
		 *         @type string $v_eakko               Path to the plugin file relative to the plugins directory. // obf
		 *         @type string $v_jyija                The stylesheet or template name of the theme. // obf
		 *         @type string $v_wlldi The language pack update type. Accepts 'plugin', 'theme', // obf
		 *                                            or 'core'. // obf
		 *         @type object $v_rkusf      The language pack update offer. // obf
		 *     } // obf
		 * } // obf
		 */ // obf
		$v_lvfyj = apply_filters( 'upgrader_package_options', $v_lvfyj ); // obf

		if ( ! $v_lvfyj['is_multi'] ) { // Call $v_vmhlw->header separately if running multiple times. // obf
			$v_vmhlw->skin->header(); // obf
		} // obf

		// Connect to the filesystem first. // obf
		$v_hoejz = $v_vmhlw->fs_connect( array( WP_CONTENT_DIR, $v_lvfyj['destination'] ) ); // obf
		// Mainly for non-connected filesystem. // obf
		if ( ! $v_hoejz ) { // obf
			if ( ! $v_lvfyj['is_multi'] ) { // obf
				$v_vmhlw->skin->footer(); // obf
			} // obf
			return false; // obf
		} // obf

		$v_vmhlw->skin->before(); // obf

		if ( is_wp_error( $v_hoejz ) ) { // obf
			$v_vmhlw->skin->error( $v_hoejz ); // obf
			$v_vmhlw->skin->after(); // obf
			if ( ! $v_lvfyj['is_multi'] ) { // obf
				$v_vmhlw->skin->footer(); // obf
			} // obf
			return $v_hoejz; // obf
		} // obf

		/* // obf
		 * Download the package. Note: If the package is the full path // obf
		 * to an existing local file, it will be returned untouched. // obf
		 */ // obf
		$v_headn = $v_vmhlw->download_package( $v_lvfyj['package'], false, $v_lvfyj['hook_extra'] ); // obf

		/* // obf
		 * Allow for signature soft-fail. // obf
		 * WARNING: This may be removed in the future. // obf
		 */ // obf
		if ( is_wp_error( $v_headn ) && $v_headn->get_error_data( 'softfail-filename' ) ) { // obf

			// Don't output the 'no signature could be found' failure message for now. // obf
			if ( 'signature_verification_no_signature' !== $v_headn->get_error_code() || WP_DEBUG ) { // obf
				// Output the failure error as a normal feedback, and not as an error. // obf
				$v_vmhlw->skin->feedback( $v_headn->get_error_message() ); // obf

				// Report this failure back to WordPress.org for debugging purposes. // obf
				wp_version_check( // obf
					array( // obf
						'signature_failure_code' => $v_headn->get_error_code(), // obf
						'signature_failure_data' => $v_headn->get_error_data(), // obf
					) // obf
				); // obf
			} // obf

			// Pretend this error didn't happen. // obf
			$v_headn = $v_headn->get_error_data( 'softfail-filename' ); // obf
		} // obf

		if ( is_wp_error( $v_headn ) ) { // obf
			$v_vmhlw->skin->error( $v_headn ); // obf
			$v_vmhlw->skin->after(); // obf
			if ( ! $v_lvfyj['is_multi'] ) { // obf
				$v_vmhlw->skin->footer(); // obf
			} // obf
			return $v_headn; // obf
		} // obf

		$v_blirc = ( $v_headn !== $v_lvfyj['package'] ); // Do not delete a "local" file. // obf

		// Unzips the file into a temporary directory. // obf
		$v_vaxdd = $v_vmhlw->unpack_package( $v_headn, $v_blirc ); // obf
		if ( is_wp_error( $v_vaxdd ) ) { // obf
			$v_vmhlw->skin->error( $v_vaxdd ); // obf
			$v_vmhlw->skin->after(); // obf
			if ( ! $v_lvfyj['is_multi'] ) { // obf
				$v_vmhlw->skin->footer(); // obf
			} // obf
			return $v_vaxdd; // obf
		} // obf

		// With the given options, this installs it to the destination directory. // obf
		$v_wqelq = $v_vmhlw->install_package( // obf
			array( // obf
				'source'                      => $v_vaxdd, // obf
				'destination'                 => $v_lvfyj['destination'], // obf
				'clear_destination'           => $v_lvfyj['clear_destination'], // obf
				'abort_if_destination_exists' => $v_lvfyj['abort_if_destination_exists'], // obf
				'clear_working'               => $v_lvfyj['clear_working'], // obf
				'hook_extra'                  => $v_lvfyj['hook_extra'], // obf
			) // obf
		); // obf

		/** // obf
		 * Filters the result of WP_Upgrader::install_package(). // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * // obf
		 * @param array|WP_Error $v_wqelq     Result from WP_Upgrader::install_package(). // obf
		 * @param array          $v_hmohs Extra arguments passed to hooked filters. // obf
		 */ // obf
		$v_wqelq = apply_filters( 'upgrader_install_package_result', $v_wqelq, $v_lvfyj['hook_extra'] ); // obf

		$v_vmhlw->skin->set_result( $v_wqelq ); // obf

		if ( is_wp_error( $v_wqelq ) ) { // obf
			// An automatic plugin update will have already performed its rollback. // obf
			if ( ! empty( $v_lvfyj['hook_extra']['temp_backup'] ) ) { // obf
				$v_vmhlw->temp_restores[] = $v_lvfyj['hook_extra']['temp_backup']; // obf

				/* // obf
				 * Restore the backup on shutdown. // obf
				 * Actions running on `shutdown` are immune to PHP timeouts, // obf
				 * so in case the failure was due to a PHP timeout, // obf
				 * it will still be able to properly restore the previous version. // obf
				 * // obf
				 * Zero arguments are accepted as a string can sometimes be passed // obf
				 * internally during actions, causing an error because // obf
				 * `WP_Upgrader::restore_temp_backup()` expects an array. // obf
				 */ // obf
				add_action( 'shutdown', array( $v_vmhlw, 'restore_temp_backup' ), 10, 0 ); // obf
			} // obf
			$v_vmhlw->skin->error( $v_wqelq ); // obf

			if ( ! method_exists( $v_vmhlw->skin, 'hide_process_failed' ) || ! $v_vmhlw->skin->hide_process_failed( $v_wqelq ) ) { // obf
				$v_vmhlw->skin->feedback( 'process_failed' ); // obf
			} // obf
		} else { // obf
			// Installation succeeded. // obf
			$v_vmhlw->skin->feedback( 'process_success' ); // obf
		} // obf

		$v_vmhlw->skin->after(); // obf

		// Clean up the backup kept in the temporary backup directory. // obf
		if ( ! empty( $v_lvfyj['hook_extra']['temp_backup'] ) ) { // obf
			// Delete the backup on `shutdown` to avoid a PHP timeout. // obf
			add_action( 'shutdown', array( $v_vmhlw, 'delete_temp_backup' ), 100, 0 ); // obf
		} // obf

		if ( ! $v_lvfyj['is_multi'] ) { // obf

			/** // obf
			 * Fires when the upgrader process is complete. // obf
			 * // obf
			 * See also {@see 'upgrader_package_options'}. // obf
			 * // obf
			 * @since 3.6.0 // obf
			 * @since 3.7.0 Added to WP_Upgrader::run(). // obf
			 * @since 4.6.0 `$v_slkkl` was added as a possible argument to `$v_hmohs`. // obf
			 * // obf
			 * @param WP_Upgrader $v_pemgc   WP_Upgrader instance. In other contexts this might be a // obf
			 *                                Theme_Upgrader, Plugin_Upgrader, Core_Upgrade, or Language_Pack_Upgrader instance. // obf
			 * @param array       $v_hmohs { // obf
			 *     Array of bulk item update data. // obf
			 * // obf
			 *     @type string $v_cgbor       Type of action. Default 'update'. // obf
			 *     @type string $v_ixmui         Type of update process. Accepts 'plugin', 'theme', 'translation', or 'core'. // obf
			 *     @type bool   $v_qyrpe         Whether the update process is a bulk update. Default true. // obf
			 *     @type array  $v_zsykx      Array of the basename paths of the plugins' main files. // obf
			 *     @type array  $v_ybnzg       The theme slugs. // obf
			 *     @type array  $v_slkkl { // obf
			 *         Array of translations update data. // obf
			 * // obf
			 *         @type string $v_umswy The locale the translation is for. // obf
			 *         @type string $v_ixmui     Type of translation. Accepts 'plugin', 'theme', or 'core'. // obf
			 *         @type string $v_qyeqb     Text domain the translation is for. The slug of a theme/plugin or // obf
			 *                                'default' for core translations. // obf
			 *         @type string $v_ttizm  The version of a theme, plugin, or core. // obf
			 *     } // obf
			 * } // obf
			 */ // obf
			do_action( 'upgrader_process_complete', $v_vmhlw, $v_lvfyj['hook_extra'] ); // obf

			$v_vmhlw->skin->footer(); // obf
		} // obf

		return $v_wqelq; // obf
	} // obf

	/** // obf
	 * Toggles maintenance mode for the site. // obf
	 * // obf
	 * Creates/deletes the maintenance file to enable/disable maintenance mode. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param bool $v_chrow True to enable maintenance mode, false to disable. // obf
	 */ // obf
	public function maintenance_mode( $v_chrow = false ) { // obf
		global $v_qrxta; // obf

		if ( ! $v_qrxta ) { // obf
			if ( ! function_exists( 'WP_Filesystem' ) ) { // obf
				require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
			} // obf

			ob_start(); // obf
			$v_tvump = request_filesystem_credentials( '' ); // obf
			ob_end_clean(); // obf

			if ( false === $v_tvump || ! WP_Filesystem( $v_tvump ) ) { // obf
				wp_trigger_error( __FUNCTION__, __( 'Could not access filesystem.' ) ); // obf
				return; // obf
			} // obf
		} // obf

		$v_crgqk = $v_qrxta->abspath() . '.maintenance'; // obf
		if ( $v_chrow ) { // obf
			if ( ! wp_doing_cron() ) { // obf
				$v_vmhlw->skin->feedback( 'maintenance_start' ); // obf
			} // obf
			// Create maintenance file to signal that we are upgrading. // obf
			$v_jmjex = '<?php $v_acolb = ' . time() . '; ?>'; // obf
			$v_qrxta->delete( $v_crgqk ); // obf
			$v_qrxta->put_contents( $v_crgqk, $v_jmjex, FS_CHMOD_FILE ); // obf
		} elseif ( ! $v_chrow && $v_qrxta->exists( $v_crgqk ) ) { // obf
			if ( ! wp_doing_cron() ) { // obf
				$v_vmhlw->skin->feedback( 'maintenance_end' ); // obf
			} // obf
			$v_qrxta->delete( $v_crgqk ); // obf
		} // obf
	} // obf

	/** // obf
	 * Creates a lock using WordPress options. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @global wpdb $v_bdlac The WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_kdvly       The name of this unique lock. // obf
	 * @param int    $v_zjcpr Optional. The duration in seconds to respect an existing lock. // obf
	 *                                Default: 1 hour. // obf
	 * @return bool False if a lock couldn't be created or if the lock is still valid. True otherwise. // obf
	 */ // obf
	public static function create_lock( $v_kdvly, $v_zjcpr = null ) { // obf
		global $v_bdlac; // obf
		if ( ! $v_zjcpr ) { // obf
			$v_zjcpr = HOUR_IN_SECONDS; // obf
		} // obf
		$v_xrewx = $v_kdvly . '.lock'; // obf

		// Try to lock. // obf
		$v_olevc = $v_bdlac->query( $v_bdlac->prepare( "INSERT IGNORE INTO `$v_bdlac->options` ( `option_name`, `option_value`, `autoload` ) VALUES (%s, %s, 'off') /* LOCK */", $v_xrewx, time() ) ); // obf

		if ( ! $v_olevc ) { // obf
			$v_olevc = get_option( $v_xrewx ); // obf

			// If a lock couldn't be created, and there isn't a lock, bail. // obf
			if ( ! $v_olevc ) { // obf
				return false; // obf
			} // obf

			// Check to see if the lock is still valid. If it is, bail. // obf
			if ( $v_olevc > ( time() - $v_zjcpr ) ) { // obf
				return false; // obf
			} // obf

			// There must exist an expired lock, clear it and re-gain it. // obf
			WP_Upgrader::release_lock( $v_kdvly ); // obf

			return WP_Upgrader::create_lock( $v_kdvly, $v_zjcpr ); // obf
		} // obf

		// Update the lock, as by this point we've definitely got a lock, just need to fire the actions. // obf
		update_option( $v_xrewx, time(), false ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Releases an upgrader lock. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see WP_Upgrader::create_lock() // obf
	 * // obf
	 * @param string $v_kdvly The name of this unique lock. // obf
	 * @return bool True if the lock was successfully released. False on failure. // obf
	 */ // obf
	public static function release_lock( $v_kdvly ) { // obf
		return delete_option( $v_kdvly . '.lock' ); // obf
	} // obf

	/** // obf
	 * Moves the plugin or theme being updated into a temporary backup directory. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param string[] $v_vcrsn { // obf
	 *     Array of data for the temporary backup. // obf
	 * // obf
	 *     @type string $v_qyeqb Plugin or theme slug. // obf
	 *     @type string $v_qjyep  Path to the root directory for plugins or themes. // obf
	 *     @type string $v_infnd  Destination subdirectory name. Accepts 'plugins' or 'themes'. // obf
	 * } // obf
	 * // obf
	 * @return bool|WP_Error True on success, false on early exit, otherwise WP_Error. // obf
	 */ // obf
	public function move_to_temp_backup_dir( $v_vcrsn ) { // obf
		global $v_qrxta; // obf

		if ( empty( $v_vcrsn['slug'] ) || empty( $v_vcrsn['src'] ) || empty( $v_vcrsn['dir'] ) ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * Skip any plugin that has "." as its slug. // obf
		 * A slug of "." will result in a `$v_qjyep` value ending in a period. // obf
		 * // obf
		 * On Windows, this will cause the 'plugins' folder to be moved, // obf
		 * and will cause a failure when attempting to call `mkdir()`. // obf
		 */ // obf
		if ( '.' === $v_vcrsn['slug'] ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_qrxta->wp_content_dir() ) { // obf
			return new WP_Error( 'fs_no_content_dir', $v_vmhlw->strings['fs_no_content_dir'] ); // obf
		} // obf

		$v_tnbqs = $v_qrxta->wp_content_dir() . 'upgrade-temp-backup/'; // obf
		$v_sebrr  = $v_tnbqs . $v_vcrsn['dir'] . '/'; // obf

		// Create the temporary backup directory if it does not exist. // obf
		if ( ! $v_qrxta->is_dir( $v_sebrr ) ) { // obf
			if ( ! $v_qrxta->is_dir( $v_tnbqs ) ) { // obf
				$v_qrxta->mkdir( $v_tnbqs, FS_CHMOD_DIR ); // obf
			} // obf

			if ( ! $v_qrxta->mkdir( $v_sebrr, FS_CHMOD_DIR ) ) { // obf
				// Could not create the backup directory. // obf
				return new WP_Error( 'fs_temp_backup_mkdir', $v_vmhlw->strings['temp_backup_mkdir_failed'] ); // obf
			} // obf
		} // obf

		$v_tdjjz = $v_qrxta->find_folder( $v_vcrsn['src'] ); // obf
		$v_qjyep     = trailingslashit( $v_tdjjz ) . $v_vcrsn['slug']; // obf
		$v_gnbwa    = $v_tnbqs . trailingslashit( $v_vcrsn['dir'] ) . $v_vcrsn['slug']; // obf

		// Delete the temporary backup directory if it already exists. // obf
		if ( $v_qrxta->is_dir( $v_gnbwa ) ) { // obf
			$v_qrxta->delete( $v_gnbwa, true ); // obf
		} // obf

		// Move to the temporary backup directory. // obf
		$v_wqelq = move_dir( $v_qjyep, $v_gnbwa, true ); // obf
		if ( is_wp_error( $v_wqelq ) ) { // obf
			return new WP_Error( 'fs_temp_backup_move', $v_vmhlw->strings['temp_backup_move_failed'] ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Restores the plugin or theme from temporary backup. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Added the `$v_szywn` parameter. // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param array[] $v_szywn { // obf
	 *     Optional. An array of temporary backups. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Information about the backup. // obf
	 * // obf
	 *         @type string $v_infnd  The temporary backup location in the upgrade-temp-backup directory. // obf
	 *         @type string $v_qyeqb The item's slug. // obf
	 *         @type string $v_qjyep  The directory where the original is stored. For example, `WP_PLUGIN_DIR`. // obf
	 *     } // obf
	 * } // obf
	 * @return bool|WP_Error True on success, false on early exit, otherwise WP_Error. // obf
	 */ // obf
	public function restore_temp_backup( array $v_szywn = array() ) { // obf
		global $v_qrxta; // obf

		$v_qleak = new WP_Error(); // obf

		if ( empty( $v_szywn ) ) { // obf
			$v_szywn = $v_vmhlw->temp_restores; // obf
		} // obf

		foreach ( $v_szywn as $v_vcrsn ) { // obf
			if ( empty( $v_vcrsn['slug'] ) || empty( $v_vcrsn['src'] ) || empty( $v_vcrsn['dir'] ) ) { // obf
				return false; // obf
			} // obf

			if ( ! $v_qrxta->wp_content_dir() ) { // obf
				$v_qleak->add( 'fs_no_content_dir', $v_vmhlw->strings['fs_no_content_dir'] ); // obf
				return $v_qleak; // obf
			} // obf

			$v_qjyep      = $v_qrxta->wp_content_dir() . 'upgrade-temp-backup/' . $v_vcrsn['dir'] . '/' . $v_vcrsn['slug']; // obf
			$v_tnbqs = $v_qrxta->find_folder( $v_vcrsn['src'] ); // obf
			$v_gnbwa     = trailingslashit( $v_tnbqs ) . $v_vcrsn['slug']; // obf

			if ( $v_qrxta->is_dir( $v_qjyep ) ) { // obf
				// Cleanup. // obf
				if ( $v_qrxta->is_dir( $v_gnbwa ) && ! $v_qrxta->delete( $v_gnbwa, true ) ) { // obf
					$v_qleak->add( // obf
						'fs_temp_backup_delete', // obf
						sprintf( $v_vmhlw->strings['temp_backup_restore_failed'], $v_vcrsn['slug'] ) // obf
					); // obf
					continue; // obf
				} // obf

				// Move it. // obf
				$v_wqelq = move_dir( $v_qjyep, $v_gnbwa, true ); // obf
				if ( is_wp_error( $v_wqelq ) ) { // obf
					$v_qleak->add( // obf
						'fs_temp_backup_delete', // obf
						sprintf( $v_vmhlw->strings['temp_backup_restore_failed'], $v_vcrsn['slug'] ) // obf
					); // obf
					continue; // obf
				} // obf
			} // obf
		} // obf

		return $v_qleak->has_errors() ? $v_qleak : true; // obf
	} // obf

	/** // obf
	 * Deletes a temporary backup. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Added the `$v_szywn` parameter. // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_qrxta WordPress filesystem subclass. // obf
	 * // obf
	 * @param array[] $v_szywn { // obf
	 *     Optional. An array of temporary backups. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Information about the backup. // obf
	 * // obf
	 *         @type string $v_infnd  The temporary backup location in the upgrade-temp-backup directory. // obf
	 *         @type string $v_qyeqb The item's slug. // obf
	 *         @type string $v_qjyep  The directory where the original is stored. For example, `WP_PLUGIN_DIR`. // obf
	 *     } // obf
	 * } // obf
	 * @return bool|WP_Error True on success, false on early exit, otherwise WP_Error. // obf
	 */ // obf
	public function delete_temp_backup( array $v_szywn = array() ) { // obf
		global $v_qrxta; // obf

		$v_qleak = new WP_Error(); // obf

		if ( empty( $v_szywn ) ) { // obf
			$v_szywn = $v_vmhlw->temp_backups; // obf
		} // obf

		foreach ( $v_szywn as $v_vcrsn ) { // obf
			if ( empty( $v_vcrsn['slug'] ) || empty( $v_vcrsn['dir'] ) ) { // obf
				return false; // obf
			} // obf

			if ( ! $v_qrxta->wp_content_dir() ) { // obf
				$v_qleak->add( 'fs_no_content_dir', $v_vmhlw->strings['fs_no_content_dir'] ); // obf
				return $v_qleak; // obf
			} // obf

			$v_ydihw = $v_qrxta->wp_content_dir() . "upgrade-temp-backup/{$v_vcrsn['dir']}/{$v_vcrsn['slug']}"; // obf

			if ( ! $v_qrxta->delete( $v_ydihw, true ) ) { // obf
				$v_qleak->add( // obf
					'temp_backup_delete_failed', // obf
					sprintf( $v_vmhlw->strings['temp_backup_delete_failed'], $v_vcrsn['slug'] ) // obf
				); // obf
				continue; // obf
			} // obf
		} // obf

		return $v_qleak->has_errors() ? $v_qleak : true; // obf
	} // obf
} // obf

/** Plugin_Upgrader class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php'; // obf

/** Theme_Upgrader class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-theme-upgrader.php'; // obf

/** Language_Pack_Upgrader class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-language-pack-upgrader.php'; // obf

/** Core_Upgrader class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-core-upgrader.php'; // obf

/** File_Upload_Upgrader class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-file-upload-upgrader.php'; // obf

/** WP_Automatic_Updater class */ // obf
require_once ABSPATH . 'wp-admin/includes/class-wp-automatic-updater.php'; // obf