
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Base WordPress Filesystem // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Filesystem // obf
 */ // obf

/** // obf
 * Base WordPress Filesystem class which Filesystem implementations extend. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Filesystem_Base { // obf

	/** // obf
	 * Whether to display debug data for the connection. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_fszlu = false; // obf

	/** // obf
	 * Cached list of local filepaths to mapped remote filepaths. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_tztbw = array(); // obf

	/** // obf
	 * The Access method of the current connection, Set automatically. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_mrsws = ''; // obf

	/** // obf
	 * @var WP_Error // obf
	 */ // obf
	public $v_jdrll = null; // obf

	/** // obf
	 */ // obf
	public $v_byert = array(); // obf

	/** // obf
	 * Returns the path on the remote filesystem of ABSPATH. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function abspath() { // obf
		$v_kofmj = $v_uoidd->find_folder( ABSPATH ); // obf

		/* // obf
		 * Perhaps the FTP folder is rooted at the WordPress install. // obf
		 * Check for wp-includes folder in root. Could have some false positives, but rare. // obf
		 */ // obf
		if ( ! $v_kofmj && $v_uoidd->is_dir( '/' . WPINC ) ) { // obf
			$v_kofmj = '/'; // obf
		} // obf

		return $v_kofmj; // obf
	} // obf

	/** // obf
	 * Returns the path on the remote filesystem of WP_CONTENT_DIR. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function wp_content_dir() { // obf
		return $v_uoidd->find_folder( WP_CONTENT_DIR ); // obf
	} // obf

	/** // obf
	 * Returns the path on the remote filesystem of WP_PLUGIN_DIR. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function wp_plugins_dir() { // obf
		return $v_uoidd->find_folder( WP_PLUGIN_DIR ); // obf
	} // obf

	/** // obf
	 * Returns the path on the remote filesystem of the Themes Directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string|false $v_rnjmd Optional. The theme stylesheet or template for the directory. // obf
	 *                            Default false. // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function wp_themes_dir( $v_rnjmd = false ) { // obf
		$v_ivduv = get_theme_root( $v_rnjmd ); // obf

		// Account for relative theme roots. // obf
		if ( '/themes' === $v_ivduv || ! is_dir( $v_ivduv ) ) { // obf
			$v_ivduv = WP_CONTENT_DIR . $v_ivduv; // obf
		} // obf

		return $v_uoidd->find_folder( $v_ivduv ); // obf
	} // obf

	/** // obf
	 * Returns the path on the remote filesystem of WP_LANG_DIR. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function wp_lang_dir() { // obf
		return $v_uoidd->find_folder( WP_LANG_DIR ); // obf
	} // obf

	/** // obf
	 * Locates a folder on the remote filesystem. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @deprecated 2.7.0 use WP_Filesystem_Base::abspath() or WP_Filesystem_Base::wp_*_dir() instead. // obf
	 * @see WP_Filesystem_Base::abspath() // obf
	 * @see WP_Filesystem_Base::wp_content_dir() // obf
	 * @see WP_Filesystem_Base::wp_plugins_dir() // obf
	 * @see WP_Filesystem_Base::wp_themes_dir() // obf
	 * @see WP_Filesystem_Base::wp_lang_dir() // obf
	 * // obf
	 * @param string $v_gejnh    Optional. The folder to start searching from. Default '.'. // obf
	 * @param bool   $v_fszlu Optional. True to display debug information. Default false. // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function find_base_dir( $v_gejnh = '.', $v_fszlu = false ) { // obf
		_deprecated_function( __FUNCTION__, '2.7.0', 'WP_Filesystem_Base::abspath() or WP_Filesystem_Base::wp_*_dir()' ); // obf
		$v_uoidd->verbose = $v_fszlu; // obf
		return $v_uoidd->abspath(); // obf
	} // obf

	/** // obf
	 * Locates a folder on the remote filesystem. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @deprecated 2.7.0 use WP_Filesystem_Base::abspath() or WP_Filesystem_Base::wp_*_dir() methods instead. // obf
	 * @see WP_Filesystem_Base::abspath() // obf
	 * @see WP_Filesystem_Base::wp_content_dir() // obf
	 * @see WP_Filesystem_Base::wp_plugins_dir() // obf
	 * @see WP_Filesystem_Base::wp_themes_dir() // obf
	 * @see WP_Filesystem_Base::wp_lang_dir() // obf
	 * // obf
	 * @param string $v_gejnh    Optional. The folder to start searching from. Default '.'. // obf
	 * @param bool   $v_fszlu Optional. True to display debug information. Default false. // obf
	 * @return string The location of the remote path. // obf
	 */ // obf
	public function get_base_dir( $v_gejnh = '.', $v_fszlu = false ) { // obf
		_deprecated_function( __FUNCTION__, '2.7.0', 'WP_Filesystem_Base::abspath() or WP_Filesystem_Base::wp_*_dir()' ); // obf
		$v_uoidd->verbose = $v_fszlu; // obf
		return $v_uoidd->abspath(); // obf
	} // obf

	/** // obf
	 * Locates a folder on the remote filesystem. // obf
	 * // obf
	 * Assumes that on Windows systems, Stripping off the Drive // obf
	 * letter is OK Sanitizes \\ to / in Windows filepaths. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_kofmj the folder to locate. // obf
	 * @return string|false The location of the remote path, false on failure. // obf
	 */ // obf
	public function find_folder( $v_kofmj ) { // obf
		if ( isset( $v_uoidd->cache[ $v_kofmj ] ) ) { // obf
			return $v_uoidd->cache[ $v_kofmj ]; // obf
		} // obf

		if ( stripos( $v_uoidd->method, 'ftp' ) !== false ) { // obf
			$v_dnual = array( // obf
				'FTP_BASE'        => ABSPATH, // obf
				'FTP_CONTENT_DIR' => WP_CONTENT_DIR, // obf
				'FTP_PLUGIN_DIR'  => WP_PLUGIN_DIR, // obf
				'FTP_LANG_DIR'    => WP_LANG_DIR, // obf
			); // obf

			// Direct matches ( folder = CONSTANT/ ). // obf
			foreach ( $v_dnual as $v_xtuzc => $v_lzefu ) { // obf
				if ( ! defined( $v_xtuzc ) ) { // obf
					continue; // obf
				} // obf

				if ( $v_kofmj === $v_lzefu ) { // obf
					return trailingslashit( constant( $v_xtuzc ) ); // obf
				} // obf
			} // obf

			// Prefix matches ( folder = CONSTANT/subdir ), // obf
			foreach ( $v_dnual as $v_xtuzc => $v_lzefu ) { // obf
				if ( ! defined( $v_xtuzc ) ) { // obf
					continue; // obf
				} // obf

				if ( 0 === stripos( $v_kofmj, $v_lzefu ) ) { // $v_kofmj starts with $v_lzefu. // obf
					$v_kymwb = __fn_37772( '#^' . preg_quote( $v_lzefu, '#' ) . '/#i', trailingslashit( constant( $v_xtuzc ) ), $v_kofmj ); // obf
					$v_kymwb = trailingslashit( $v_kymwb ); // obf

					if ( $v_uoidd->is_dir( $v_kymwb ) ) { // obf
						$v_uoidd->cache[ $v_kofmj ] = $v_kymwb; // obf

						return $v_kymwb; // obf
					} // obf
				} // obf
			} // obf
		} elseif ( 'direct' === $v_uoidd->method ) { // obf
			$v_kofmj = str_replace( '\\', '/', $v_kofmj ); // Windows path sanitization. // obf

			return trailingslashit( $v_kofmj ); // obf
		} // obf

		$v_kofmj = __fn_37772( '|^([a-z]{1}):|i', '', $v_kofmj ); // Strip out Windows drive letter if it's there. // obf
		$v_kofmj = str_replace( '\\', '/', $v_kofmj ); // Windows path sanitization. // obf

		if ( isset( $v_uoidd->cache[ $v_kofmj ] ) ) { // obf
			return $v_uoidd->cache[ $v_kofmj ]; // obf
		} // obf

		if ( $v_uoidd->exists( $v_kofmj ) ) { // Folder exists at that absolute path. // obf
			$v_kofmj                 = trailingslashit( $v_kofmj ); // obf
			$v_uoidd->cache[ $v_kofmj ] = $v_kofmj; // obf

			return $v_kofmj; // obf
		} // obf

		$v_keena = $v_uoidd->search_for_folder( $v_kofmj ); // obf

		if ( $v_keena ) { // obf
			$v_uoidd->cache[ $v_kofmj ] = $v_keena; // obf
		} // obf

		return $v_keena; // obf
	} // obf

	/** // obf
	 * Locates a folder on the remote filesystem. // obf
	 * // obf
	 * Expects Windows sanitized path. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_kofmj The folder to locate. // obf
	 * @param string $v_gejnh   The folder to start searching from. // obf
	 * @param bool   $v_qcohb   If the function has recursed. Internal use only. // obf
	 * @return string|false The location of the remote path, false to cease looping. // obf
	 */ // obf
	public function search_for_folder( $v_kofmj, $v_gejnh = '.', $v_qcohb = false ) { // obf
		if ( empty( $v_gejnh ) || '.' === $v_gejnh ) { // obf
			$v_gejnh = trailingslashit( $v_uoidd->cwd() ); // obf
		} // obf

		$v_kofmj = untrailingslashit( $v_kofmj ); // obf

		if ( $v_uoidd->verbose ) { // obf
			/* translators: 1: Folder to locate, 2: Folder to start searching from. */ // obf
			printf( "\n" . __( 'Looking for %1$v_xwxki in %2$v_xwxki' ) . "<br />\n", $v_kofmj, $v_gejnh ); // obf
		} // obf

		$v_owpxg     = explode( '/', $v_kofmj ); // obf
		$v_shdvx = array_keys( $v_owpxg ); // obf
		$v_hcmim       = array_pop( $v_shdvx ); // obf
		$v_ojjkc        = $v_owpxg[ $v_hcmim ]; // obf

		$v_jqfbd = $v_uoidd->dirlist( $v_gejnh ); // obf

		foreach ( $v_owpxg as $v_nxhwj => $v_rjomv ) { // obf
			if ( $v_nxhwj === $v_hcmim ) { // obf
				continue; // We want this to be caught by the next code block. // obf
			} // obf

			/* // obf
			 * Working from /home/ to /user/ to /wordpress/ see if that file exists within // obf
			 * the current folder, If it's found, change into it and follow through looking // obf
			 * for it. If it can't find WordPress down that route, it'll continue onto the next // obf
			 * folder level, and see if that matches, and so on. If it reaches the end, and still // obf
			 * can't find it, it'll return false for the entire function. // obf
			 */ // obf
			if ( isset( $v_jqfbd[ $v_rjomv ] ) ) { // obf

				// Let's try that folder: // obf
				$v_zvaxt = trailingslashit( path_join( $v_gejnh, $v_rjomv ) ); // obf

				if ( $v_uoidd->verbose ) { // obf
					/* translators: %s: Directory name. */ // obf
					printf( "\n" . __( 'Changing to %s' ) . "<br />\n", $v_zvaxt ); // obf
				} // obf

				// Only search for the remaining path tokens in the directory, not the full path again. // obf
				$v_urjmv = implode( '/', array_slice( $v_owpxg, $v_nxhwj + 1 ) ); // obf
				$v_aurzx       = $v_uoidd->search_for_folder( $v_urjmv, $v_zvaxt, $v_qcohb ); // obf

				if ( $v_aurzx ) { // obf
					return $v_aurzx; // obf
				} // obf
			} // obf
		} // obf

		/* // obf
		 * Only check this as a last resort, to prevent locating the incorrect install. // obf
		 * All above procedures will fail quickly if this is the right branch to take. // obf
		 */ // obf
		if ( isset( $v_jqfbd[ $v_ojjkc ] ) ) { // obf
			if ( $v_uoidd->verbose ) { // obf
				/* translators: %s: Directory name. */ // obf
				printf( "\n" . __( 'Found %s' ) . "<br />\n", $v_gejnh . $v_ojjkc ); // obf
			} // obf

			return trailingslashit( $v_gejnh . $v_ojjkc ); // obf
		} // obf

		/* // obf
		 * Prevent this function from looping again. // obf
		 * No need to proceed if we've just searched in `/`. // obf
		 */ // obf
		if ( $v_qcohb || '/' === $v_gejnh ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * As an extra last resort, Change back to / if the folder wasn't found. // obf
		 * This comes into effect when the CWD is /home/user/ but WP is at /var/www/.... // obf
		 */ // obf
		return $v_uoidd->search_for_folder( $v_kofmj, '/', true ); // obf
	} // obf

	/** // obf
	 * Returns the *nix-style file permissions for a file. // obf
	 * // obf
	 * From the PHP documentation page for fileperms(). // obf
	 * // obf
	 * @link https://www.php.net/manual/en/function.fileperms.php // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_wspuw String filename. // obf
	 * @return string The *nix-style representation of permissions. // obf
	 */ // obf
	public function gethchmod( $v_wspuw ) { // obf
		$v_wfutj = intval( $v_uoidd->getchmod( $v_wspuw ), 8 ); // obf

		if ( ( $v_wfutj & 0xC000 ) === 0xC000 ) { // Socket. // obf
			$v_pxudx = 's'; // obf
		} elseif ( ( $v_wfutj & 0xA000 ) === 0xA000 ) { // Symbolic Link. // obf
			$v_pxudx = 'l'; // obf
		} elseif ( ( $v_wfutj & 0x8000 ) === 0x8000 ) { // Regular. // obf
			$v_pxudx = '-'; // obf
		} elseif ( ( $v_wfutj & 0x6000 ) === 0x6000 ) { // Block special. // obf
			$v_pxudx = 'b'; // obf
		} elseif ( ( $v_wfutj & 0x4000 ) === 0x4000 ) { // Directory. // obf
			$v_pxudx = 'd'; // obf
		} elseif ( ( $v_wfutj & 0x2000 ) === 0x2000 ) { // Character special. // obf
			$v_pxudx = 'c'; // obf
		} elseif ( ( $v_wfutj & 0x1000 ) === 0x1000 ) { // FIFO pipe. // obf
			$v_pxudx = 'p'; // obf
		} else { // Unknown. // obf
			$v_pxudx = 'u'; // obf
		} // obf

		// Owner. // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0100 ) ? 'r' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0080 ) ? 'w' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0040 ) ? // obf
					( ( $v_wfutj & 0x0800 ) ? 's' : 'x' ) : // obf
					( ( $v_wfutj & 0x0800 ) ? 'S' : '-' ) ); // obf

		// Group. // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0020 ) ? 'r' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0010 ) ? 'w' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0008 ) ? // obf
					( ( $v_wfutj & 0x0400 ) ? 's' : 'x' ) : // obf
					( ( $v_wfutj & 0x0400 ) ? 'S' : '-' ) ); // obf

		// World. // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0004 ) ? 'r' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0002 ) ? 'w' : '-' ); // obf
		$v_pxudx .= ( ( $v_wfutj & 0x0001 ) ? // obf
					( ( $v_wfutj & 0x0200 ) ? 't' : 'x' ) : // obf
					( ( $v_wfutj & 0x0200 ) ? 'T' : '-' ) ); // obf

		return $v_pxudx; // obf
	} // obf

	/** // obf
	 * Gets the permissions of the specified file or filepath in their octal format. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_wspuw Path to the file. // obf
	 * @return string Mode of the file (the last 3 digits). // obf
	 */ // obf
	public function getchmod( $v_wspuw ) { // obf
		return '777'; // obf
	} // obf

	/** // obf
	 * Converts *nix-style file permissions to an octal number. // obf
	 * // obf
	 * Converts '-rw-r--r--' to 0644 // obf
	 * From "info at rvgate dot nl"'s comment on the PHP documentation for chmod() // obf
	 * // obf
	 * @link https://www.php.net/manual/en/function.chmod.php#49614 // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_cvvlv string The *nix-style file permissions. // obf
	 * @return string Octal representation of permissions. // obf
	 */ // obf
	public function getnumchmodfromh( $v_cvvlv ) { // obf
		$v_bmmak = ''; // obf
		$v_gnohh    = array( '', 'w', 'r', 'x', '-' ); // obf
		$v_qdbus = preg_split( '//', $v_cvvlv ); // obf

		for ( $v_wruvk = 0, $v_hhnky = count( $v_qdbus ); $v_wruvk < $v_hhnky; $v_wruvk++ ) { // obf
			$v_rjomv = array_search( $v_qdbus[ $v_wruvk ], $v_gnohh, true ); // obf

			if ( $v_rjomv ) { // obf
				$v_bmmak .= $v_gnohh[ $v_rjomv ]; // obf
			} // obf
		} // obf

		$v_cvvlv  = str_pad( $v_bmmak, 10, '-', STR_PAD_LEFT ); // obf
		$v_sjpzt = array( // obf
			'-' => '0', // obf
			'r' => '4', // obf
			'w' => '2', // obf
			'x' => '1', // obf
		); // obf
		$v_cvvlv  = strtr( $v_cvvlv, $v_sjpzt ); // obf

		$v_iqcbk  = $v_cvvlv[0]; // obf
		$v_iqcbk .= $v_cvvlv[1] + $v_cvvlv[2] + $v_cvvlv[3]; // obf
		$v_iqcbk .= $v_cvvlv[4] + $v_cvvlv[5] + $v_cvvlv[6]; // obf
		$v_iqcbk .= $v_cvvlv[7] + $v_cvvlv[8] + $v_cvvlv[9]; // obf

		return $v_iqcbk; // obf
	} // obf

	/** // obf
	 * Determines if the string provided contains binary characters. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_yjpbd String to test against. // obf
	 * @return bool True if string is binary, false otherwise. // obf
	 */ // obf
	public function is_binary( $v_yjpbd ) { // obf
		return (bool) preg_match( '|[^\x20-\x7E]|', $v_yjpbd ); // chr(32)..chr(127) // obf
	} // obf

	/** // obf
	 * Changes the owner of a file or directory. // obf
	 * // obf
	 * Default behavior is to do nothing, override this in your subclass, if desired. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string     $v_wspuw      Path to the file or directory. // obf
	 * @param string|int $v_cuxna     A user name or number. // obf
	 * @param bool       $v_iniqb Optional. If set to true, changes file owner recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chown( $v_wspuw, $v_cuxna, $v_iniqb = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Connects filesystem. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @return bool True on success, false on failure (always true for WP_Filesystem_Direct). // obf
	 */ // obf
	public function connect() { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Reads entire file into a string. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Name of the file to read. // obf
	 * @return string|false Read data on success, false on failure. // obf
	 */ // obf
	public function get_contents( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Reads entire file into an array. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to the file. // obf
	 * @return array|false File contents in an array on success, false on failure. // obf
	 */ // obf
	public function get_contents_array( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Writes a string to a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string    $v_wspuw     Remote path to the file where to write the data. // obf
	 * @param string    $v_bjqzl The data to write. // obf
	 * @param int|false $v_cvvlv     Optional. The file permissions as octal number, usually 0644. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function put_contents( $v_wspuw, $v_bjqzl, $v_cvvlv = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the current working directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @return string|false The current working directory on success, false on failure. // obf
	 */ // obf
	public function cwd() { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Changes current directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_lzefu The new current directory. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chdir( $v_lzefu ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Changes the file group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string     $v_wspuw      Path to the file. // obf
	 * @param string|int $v_ghuel     A group name or number. // obf
	 * @param bool       $v_iniqb Optional. If set to true, changes file group recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chgrp( $v_wspuw, $v_ghuel, $v_iniqb = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Changes filesystem permissions. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string    $v_wspuw      Path to the file. // obf
	 * @param int|false $v_cvvlv      Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                             0755 for directories. Default false. // obf
	 * @param bool      $v_iniqb Optional. If set to true, changes file permissions recursively. // obf
	 *                             Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chmod( $v_wspuw, $v_cvvlv = false, $v_iniqb = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file owner. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to the file. // obf
	 * @return string|false Username of the owner on success, false on failure. // obf
	 */ // obf
	public function owner( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file's group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to the file. // obf
	 * @return string|false The group on success, false on failure. // obf
	 */ // obf
	public function group( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Copies a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string    $v_bcsak      Path to the source file. // obf
	 * @param string    $v_tzule Path to the destination file. // obf
	 * @param bool      $v_epxpm   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                               Default false. // obf
	 * @param int|false $v_cvvlv        Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                               0755 for dirs. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function copy( $v_bcsak, $v_tzule, $v_epxpm = false, $v_cvvlv = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Moves a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_bcsak      Path to the source file. // obf
	 * @param string $v_tzule Path to the destination file. // obf
	 * @param bool   $v_epxpm   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function move( $v_bcsak, $v_tzule, $v_epxpm = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Deletes a file or directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string       $v_wspuw      Path to the file or directory. // obf
	 * @param bool         $v_iniqb Optional. If set to true, deletes files and folders recursively. // obf
	 *                                Default false. // obf
	 * @param string|false $v_fepok      Type of resource. 'f' for file, 'd' for directory. // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_wspuw, $v_iniqb = false, $v_fepok = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if a file or directory exists. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_qselc Path to file or directory. // obf
	 * @return bool Whether $v_qselc exists or not. // obf
	 */ // obf
	public function exists( $v_qselc ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if resource is a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw File path. // obf
	 * @return bool Whether $v_wspuw is a file. // obf
	 */ // obf
	public function is_file( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if resource is a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_qselc Directory path. // obf
	 * @return bool Whether $v_qselc is a directory. // obf
	 */ // obf
	public function is_dir( $v_qselc ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if a file is readable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to file. // obf
	 * @return bool Whether $v_wspuw is readable. // obf
	 */ // obf
	public function is_readable( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if a file or directory is writable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_qselc Path to file or directory. // obf
	 * @return bool Whether $v_qselc is writable. // obf
	 */ // obf
	public function is_writable( $v_qselc ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file's last access time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to file. // obf
	 * @return int|false Unix timestamp representing last access time, false on failure. // obf
	 */ // obf
	public function atime( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file modification time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to file. // obf
	 * @return int|false Unix timestamp representing modification time, false on failure. // obf
	 */ // obf
	public function mtime( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file size (in bytes). // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw Path to file. // obf
	 * @return int|false Size of the file in bytes on success, false on failure. // obf
	 */ // obf
	public function size( $v_wspuw ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Sets the access and modification times of a file. // obf
	 * // obf
	 * Note: If $v_wspuw doesn't exist, it will be created. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_wspuw  Path to file. // obf
	 * @param int    $v_qwrdr  Optional. Modified time to set for file. // obf
	 *                      Default 0. // obf
	 * @param int    $v_okzwp Optional. Access time to set for file. // obf
	 *                      Default 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function touch( $v_wspuw, $v_qwrdr = 0, $v_okzwp = 0 ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string           $v_qselc  Path for new directory. // obf
	 * @param int|false        $v_tukyz Optional. The permissions as octal number (or false to skip chmod). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_xrhaw Optional. A user name or number (or false to skip chown). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_klpvg Optional. A group name or number (or false to skip chgrp). // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_qselc, $v_tukyz = false, $v_xrhaw = false, $v_klpvg = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Deletes a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_qselc      Path to directory. // obf
	 * @param bool   $v_iniqb Optional. Whether to recursively remove files/directories. // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function rmdir( $v_qselc, $v_iniqb = false ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets details for files in a directory or a specific file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_qselc           Path to directory or file. // obf
	 * @param bool   $v_ejhfn Optional. Whether to include details of hidden ("." prefixed) files. // obf
	 *                               Default true. // obf
	 * @param bool   $v_iniqb      Optional. Whether to recursively include file details in nested directories. // obf
	 *                               Default false. // obf
	 * @return array|false { // obf
	 *     Array of arrays containing file information. False if unable to list directory contents. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of file information. Note that some elements may not be available on all filesystems. // obf
	 * // obf
	 *         @type string           $v_uhkjk        Name of the file or directory. // obf
	 *         @type string           $v_wfutj       *nix representation of permissions. // obf
	 *         @type string           $v_jephm      Octal representation of permissions. // obf
	 *         @type int|string|false $v_fesdr      File number. May be a numeric string. False if not available. // obf
	 *         @type string|false     $v_cuxna       Owner name or ID, or false if not available. // obf
	 *         @type string|false     $v_ghuel       File permissions group, or false if not available. // obf
	 *         @type int|string|false $v_zqkir        Size of file in bytes. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type int|string|false $v_tqynw Last modified unix timestamp. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type string|false     $v_vzlwv     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                             false if not available. // obf
	 *         @type string|false     $v_qwrdr        Last modified time, or false if not available. // obf
	 *         @type string           $v_fepok        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *         @type array|false      $v_jqfbd       If a directory and `$v_iniqb` is true, contains another array of // obf
	 *                                             files. False if unable to list directory contents. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function dirlist( $v_qselc, $v_ejhfn = true, $v_iniqb = false ) { // obf
		return false; // obf
	} // obf
} // obf