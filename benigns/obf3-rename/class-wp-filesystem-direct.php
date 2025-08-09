

<?php // obf
/** // obf
 * WordPress Direct Filesystem. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Filesystem // obf
 */ // obf

/** // obf
 * WordPress Filesystem Class for direct PHP file and folder manipulation. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @see WP_Filesystem_Base // obf
 */ // obf
class WP_Filesystem_Direct extends WP_Filesystem_Base { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param mixed $v_rqpbc Not used. // obf
	 */ // obf
	public function __construct( $v_rqpbc ) { // obf
		$v_rluid->method = 'direct'; // obf
		$v_rluid->errors = new WP_Error(); // obf
	} // obf

	/** // obf
	 * Reads entire file into a string. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Name of the file to read. // obf
	 * @return string|false Read data on success, false on failure. // obf
	 */ // obf
	public function get_contents( $v_uxdyk ) { // obf
		return @file_get_contents( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Reads entire file into an array. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to the file. // obf
	 * @return array|false File contents in an array on success, false on failure. // obf
	 */ // obf
	public function get_contents_array( $v_uxdyk ) { // obf
		return @file( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Writes a string to a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_uxdyk     Remote path to the file where to write the data. // obf
	 * @param string    $v_ecvpy The data to write. // obf
	 * @param int|false $v_fytyu     Optional. The file permissions as octal number, usually 0644. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function put_contents( $v_uxdyk, $v_ecvpy, $v_fytyu = false ) { // obf
		$v_xzpir = @fopen( $v_uxdyk, 'wb' ); // obf

		if ( ! $v_xzpir ) { // obf
			return false; // obf
		} // obf

		mbstring_binary_safe_encoding(); // obf

		$v_alzpa = strlen( $v_ecvpy ); // obf

		$v_szujt = fwrite( $v_xzpir, $v_ecvpy ); // obf

		reset_mbstring_encoding(); // obf

		fclose( $v_xzpir ); // obf

		if ( $v_alzpa !== $v_szujt ) { // obf
			return false; // obf
		} // obf

		$v_rluid->chmod( $v_uxdyk, $v_fytyu ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the current working directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @return string|false The current working directory on success, false on failure. // obf
	 */ // obf
	public function cwd() { // obf
		return getcwd(); // obf
	} // obf

	/** // obf
	 * Changes current directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_rbkyk The new current directory. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chdir( $v_rbkyk ) { // obf
		return @chdir( $v_rbkyk ); // obf
	} // obf

	/** // obf
	 * Changes the file group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string     $v_uxdyk      Path to the file. // obf
	 * @param string|int $v_bzjgi     A group name or number. // obf
	 * @param bool       $v_aizkz Optional. If set to true, changes file group recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chgrp( $v_uxdyk, $v_bzjgi, $v_aizkz = false ) { // obf
		if ( ! $v_rluid->exists( $v_uxdyk ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_aizkz ) { // obf
			return chgrp( $v_uxdyk, $v_bzjgi ); // obf
		} // obf

		if ( ! $v_rluid->is_dir( $v_uxdyk ) ) { // obf
			return chgrp( $v_uxdyk, $v_bzjgi ); // obf
		} // obf

		// Is a directory, and we want recursive. // obf
		$v_uxdyk     = trailingslashit( $v_uxdyk ); // obf
		$v_panjp = $v_rluid->dirlist( $v_uxdyk ); // obf

		foreach ( $v_panjp as $v_dnxni ) { // obf
			$v_rluid->chgrp( $v_uxdyk . $v_dnxni, $v_bzjgi, $v_aizkz ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Changes filesystem permissions. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_uxdyk      Path to the file. // obf
	 * @param int|false $v_fytyu      Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                             0755 for directories. Default false. // obf
	 * @param bool      $v_aizkz Optional. If set to true, changes file permissions recursively. // obf
	 *                             Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chmod( $v_uxdyk, $v_fytyu = false, $v_aizkz = false ) { // obf
		if ( ! $v_fytyu ) { // obf
			if ( $v_rluid->is_file( $v_uxdyk ) ) { // obf
				$v_fytyu = FS_CHMOD_FILE; // obf
			} elseif ( $v_rluid->is_dir( $v_uxdyk ) ) { // obf
				$v_fytyu = FS_CHMOD_DIR; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		if ( ! $v_aizkz || ! $v_rluid->is_dir( $v_uxdyk ) ) { // obf
			return chmod( $v_uxdyk, $v_fytyu ); // obf
		} // obf

		// Is a directory, and we want recursive. // obf
		$v_uxdyk     = trailingslashit( $v_uxdyk ); // obf
		$v_panjp = $v_rluid->dirlist( $v_uxdyk ); // obf

		foreach ( (array) $v_panjp as $v_dnxni => $v_zolny ) { // obf
			$v_rluid->chmod( $v_uxdyk . $v_dnxni, $v_fytyu, $v_aizkz ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Changes the owner of a file or directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string     $v_uxdyk      Path to the file or directory. // obf
	 * @param string|int $v_sdthn     A user name or number. // obf
	 * @param bool       $v_aizkz Optional. If set to true, changes file owner recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chown( $v_uxdyk, $v_sdthn, $v_aizkz = false ) { // obf
		if ( ! $v_rluid->exists( $v_uxdyk ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_aizkz ) { // obf
			return chown( $v_uxdyk, $v_sdthn ); // obf
		} // obf

		if ( ! $v_rluid->is_dir( $v_uxdyk ) ) { // obf
			return chown( $v_uxdyk, $v_sdthn ); // obf
		} // obf

		// Is a directory, and we want recursive. // obf
		$v_panjp = $v_rluid->dirlist( $v_uxdyk ); // obf

		foreach ( $v_panjp as $v_dnxni ) { // obf
			$v_rluid->chown( $v_uxdyk . '/' . $v_dnxni, $v_sdthn, $v_aizkz ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the file owner. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to the file. // obf
	 * @return string|false Username of the owner on success, false on failure. // obf
	 */ // obf
	public function owner( $v_uxdyk ) { // obf
		$v_fshvo = @fileowner( $v_uxdyk ); // obf

		if ( ! $v_fshvo ) { // obf
			return false; // obf
		} // obf

		if ( ! function_exists( 'posix_getpwuid' ) ) { // obf
			return $v_fshvo; // obf
		} // obf

		$v_equvd = posix_getpwuid( $v_fshvo ); // obf

		if ( ! $v_equvd ) { // obf
			return false; // obf
		} // obf

		return $v_equvd['name']; // obf
	} // obf

	/** // obf
	 * Gets the permissions of the specified file or filepath in their octal format. // obf
	 * // obf
	 * FIXME does not handle errors in fileperms() // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to the file. // obf
	 * @return string Mode of the file (the last 3 digits). // obf
	 */ // obf
	public function getchmod( $v_uxdyk ) { // obf
		return substr( decoct( @fileperms( $v_uxdyk ) ), -3 ); // obf
	} // obf

	/** // obf
	 * Gets the file's group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to the file. // obf
	 * @return string|false The group on success, false on failure. // obf
	 */ // obf
	public function group( $v_uxdyk ) { // obf
		$v_gwtfi = @filegroup( $v_uxdyk ); // obf

		if ( ! $v_gwtfi ) { // obf
			return false; // obf
		} // obf

		if ( ! function_exists( 'posix_getgrgid' ) ) { // obf
			return $v_gwtfi; // obf
		} // obf

		$v_gmkmp = posix_getgrgid( $v_gwtfi ); // obf

		if ( ! $v_gmkmp ) { // obf
			return false; // obf
		} // obf

		return $v_gmkmp['name']; // obf
	} // obf

	/** // obf
	 * Copies a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_oxcxd      Path to the source file. // obf
	 * @param string    $v_rkilh Path to the destination file. // obf
	 * @param bool      $v_jjswo   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                               Default false. // obf
	 * @param int|false $v_fytyu        Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                               0755 for dirs. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function copy( $v_oxcxd, $v_rkilh, $v_jjswo = false, $v_fytyu = false ) { // obf
		if ( ! $v_jjswo && $v_rluid->exists( $v_rkilh ) ) { // obf
			return false; // obf
		} // obf

		$v_wmpxl = copy( $v_oxcxd, $v_rkilh ); // obf

		if ( $v_fytyu ) { // obf
			$v_rluid->chmod( $v_rkilh, $v_fytyu ); // obf
		} // obf

		return $v_wmpxl; // obf
	} // obf

	/** // obf
	 * Moves a file or directory. // obf
	 * // obf
	 * After moving files or directories, OPcache will need to be invalidated. // obf
	 * // obf
	 * If moving a directory fails, `copy_dir()` can be used for a recursive copy. // obf
	 * // obf
	 * Use `move_dir()` for moving directories with OPcache invalidation and a // obf
	 * fallback to `copy_dir()`. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_oxcxd      Path to the source file. // obf
	 * @param string $v_rkilh Path to the destination file. // obf
	 * @param bool   $v_jjswo   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function move( $v_oxcxd, $v_rkilh, $v_jjswo = false ) { // obf
		if ( ! $v_jjswo && $v_rluid->exists( $v_rkilh ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_jjswo && $v_rluid->exists( $v_rkilh ) && ! $v_rluid->delete( $v_rkilh, true ) ) { // obf
			// Can't overwrite if the destination couldn't be deleted. // obf
			return false; // obf
		} // obf

		// Try using rename first. if that fails (for example, source is read only) try copy. // obf
		if ( @rename( $v_oxcxd, $v_rkilh ) ) { // obf
			return true; // obf
		} // obf

		// Backward compatibility: Only fall back to `::copy()` for single files. // obf
		if ( $v_rluid->is_file( $v_oxcxd ) && $v_rluid->copy( $v_oxcxd, $v_rkilh, $v_jjswo ) && $v_rluid->exists( $v_rkilh ) ) { // obf
			$v_rluid->delete( $v_oxcxd ); // obf

			return true; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Deletes a file or directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string       $v_uxdyk      Path to the file or directory. // obf
	 * @param bool         $v_aizkz Optional. If set to true, deletes files and folders recursively. // obf
	 *                                Default false. // obf
	 * @param string|false $v_tyckp      Type of resource. 'f' for file, 'd' for directory. // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_uxdyk, $v_aizkz = false, $v_tyckp = false ) { // obf
		if ( empty( $v_uxdyk ) ) { // obf
			// Some filesystems report this as /, which can cause non-expected recursive deletion of all files in the filesystem. // obf
			return false; // obf
		} // obf

		$v_uxdyk = str_replace( '\\', '/', $v_uxdyk ); // For Win32, occasional problems deleting files otherwise. // obf

		if ( 'f' === $v_tyckp || $v_rluid->is_file( $v_uxdyk ) ) { // obf
			return @unlink( $v_uxdyk ); // obf
		} // obf

		if ( ! $v_aizkz && $v_rluid->is_dir( $v_uxdyk ) ) { // obf
			return @rmdir( $v_uxdyk ); // obf
		} // obf

		// At this point it's a folder, and we're in recursive mode. // obf
		$v_uxdyk     = trailingslashit( $v_uxdyk ); // obf
		$v_panjp = $v_rluid->dirlist( $v_uxdyk, true ); // obf

		$v_giztf = true; // obf

		if ( is_array( $v_panjp ) ) { // obf
			foreach ( $v_panjp as $v_dnxni => $v_mvroj ) { // obf
				if ( ! $v_rluid->delete( $v_uxdyk . $v_dnxni, $v_aizkz, $v_mvroj['type'] ) ) { // obf
					$v_giztf = false; // obf
				} // obf
			} // obf
		} // obf

		if ( file_exists( $v_uxdyk ) && ! @rmdir( $v_uxdyk ) ) { // obf
			$v_giztf = false; // obf
		} // obf

		return $v_giztf; // obf
	} // obf

	/** // obf
	 * Checks if a file or directory exists. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdcb Path to file or directory. // obf
	 * @return bool Whether $v_uxdcb exists or not. // obf
	 */ // obf
	public function exists( $v_uxdcb ) { // obf
		return @file_exists( $v_uxdcb ); // obf
	} // obf

	/** // obf
	 * Checks if resource is a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk File path. // obf
	 * @return bool Whether $v_uxdyk is a file. // obf
	 */ // obf
	public function is_file( $v_uxdyk ) { // obf
		return @is_file( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Checks if resource is a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdcb Directory path. // obf
	 * @return bool Whether $v_uxdcb is a directory. // obf
	 */ // obf
	public function is_dir( $v_uxdcb ) { // obf
		return @is_dir( $v_uxdcb ); // obf
	} // obf

	/** // obf
	 * Checks if a file is readable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to file. // obf
	 * @return bool Whether $v_uxdyk is readable. // obf
	 */ // obf
	public function is_readable( $v_uxdyk ) { // obf
		return @is_readable( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Checks if a file or directory is writable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdcb Path to file or directory. // obf
	 * @return bool Whether $v_uxdcb is writable. // obf
	 */ // obf
	public function is_writable( $v_uxdcb ) { // obf
		return @is_writable( $v_uxdcb ); // obf
	} // obf

	/** // obf
	 * Gets the file's last access time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to file. // obf
	 * @return int|false Unix timestamp representing last access time, false on failure. // obf
	 */ // obf
	public function atime( $v_uxdyk ) { // obf
		return @fileatime( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Gets the file modification time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to file. // obf
	 * @return int|false Unix timestamp representing modification time, false on failure. // obf
	 */ // obf
	public function mtime( $v_uxdyk ) { // obf
		return @filemtime( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Gets the file size (in bytes). // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk Path to file. // obf
	 * @return int|false Size of the file in bytes on success, false on failure. // obf
	 */ // obf
	public function size( $v_uxdyk ) { // obf
		return @filesize( $v_uxdyk ); // obf
	} // obf

	/** // obf
	 * Sets the access and modification times of a file. // obf
	 * // obf
	 * Note: If $v_uxdyk doesn't exist, it will be created. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdyk  Path to file. // obf
	 * @param int    $v_odxjc  Optional. Modified time to set for file. // obf
	 *                      Default 0. // obf
	 * @param int    $v_iwdog Optional. Access time to set for file. // obf
	 *                      Default 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function touch( $v_uxdyk, $v_odxjc = 0, $v_iwdog = 0 ) { // obf
		if ( 0 === $v_odxjc ) { // obf
			$v_odxjc = time(); // obf
		} // obf

		if ( 0 === $v_iwdog ) { // obf
			$v_iwdog = time(); // obf
		} // obf

		return touch( $v_uxdyk, $v_odxjc, $v_iwdog ); // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string           $v_uxdcb  Path for new directory. // obf
	 * @param int|false        $v_rohxs Optional. The permissions as octal number (or false to skip chmod). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_mfled Optional. A user name or number (or false to skip chown). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_zftru Optional. A group name or number (or false to skip chgrp). // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_uxdcb, $v_rohxs = false, $v_mfled = false, $v_zftru = false ) { // obf
		// Safe mode fails with a trailing slash under certain PHP versions. // obf
		$v_uxdcb = untrailingslashit( $v_uxdcb ); // obf

		if ( empty( $v_uxdcb ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_rohxs ) { // obf
			$v_rohxs = FS_CHMOD_DIR; // obf
		} // obf

		if ( ! @mkdir( $v_uxdcb ) ) { // obf
			return false; // obf
		} // obf

		$v_rluid->chmod( $v_uxdcb, $v_rohxs ); // obf

		if ( $v_mfled ) { // obf
			$v_rluid->chown( $v_uxdcb, $v_mfled ); // obf
		} // obf

		if ( $v_zftru ) { // obf
			$v_rluid->chgrp( $v_uxdcb, $v_zftru ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdcb      Path to directory. // obf
	 * @param bool   $v_aizkz Optional. Whether to recursively remove files/directories. // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function rmdir( $v_uxdcb, $v_aizkz = false ) { // obf
		return $v_rluid->delete( $v_uxdcb, $v_aizkz ); // obf
	} // obf

	/** // obf
	 * Gets details for files in a directory or a specific file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_uxdcb           Path to directory or file. // obf
	 * @param bool   $v_drjos Optional. Whether to include details of hidden ("." prefixed) files. // obf
	 *                               Default true. // obf
	 * @param bool   $v_aizkz      Optional. Whether to recursively include file details in nested directories. // obf
	 *                               Default false. // obf
	 * @return array|false { // obf
	 *     Array of arrays containing file information. False if unable to list directory contents. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of file information. Note that some elements may not be available on all filesystems. // obf
	 * // obf
	 *         @type string           $v_nwffz        Name of the file or directory. // obf
	 *         @type string           $v_bqmsn       *nix representation of permissions. // obf
	 *         @type string           $v_edfll      Octal representation of permissions. // obf
	 *         @type false            $v_bbgpo      File number. Always false in this context. // obf
	 *         @type string|false     $v_sdthn       Owner name or ID, or false if not available. // obf
	 *         @type string|false     $v_bzjgi       File permissions group, or false if not available. // obf
	 *         @type int|string|false $v_rcobo        Size of file in bytes. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type int|string|false $v_hvvae Last modified unix timestamp. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type string|false     $v_flkfm     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                             false if not available. // obf
	 *         @type string|false     $v_odxjc        Last modified time, or false if not available. // obf
	 *         @type string           $v_tyckp        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *         @type array|false      $v_sbjqk       If a directory and `$v_aizkz` is true, contains another array of // obf
	 *                                             files. False if unable to list directory contents. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function dirlist( $v_uxdcb, $v_drjos = true, $v_aizkz = false ) { // obf
		if ( $v_rluid->is_file( $v_uxdcb ) ) { // obf
			$v_dyrzi = basename( $v_uxdcb ); // obf
			$v_uxdcb       = dirname( $v_uxdcb ); // obf
		} else { // obf
			$v_dyrzi = false; // obf
		} // obf

		if ( ! $v_rluid->is_dir( $v_uxdcb ) || ! $v_rluid->is_readable( $v_uxdcb ) ) { // obf
			return false; // obf
		} // obf

		$v_rbkyk = dir( $v_uxdcb ); // obf

		if ( ! $v_rbkyk ) { // obf
			return false; // obf
		} // obf

		$v_uxdcb = trailingslashit( $v_uxdcb ); // obf
		$v_mczwy  = array(); // obf

		while ( false !== ( $v_xfukv = $v_rbkyk->read() ) ) { // obf
			$v_antll         = array(); // obf
			$v_antll['name'] = $v_xfukv; // obf

			if ( '.' === $v_antll['name'] || '..' === $v_antll['name'] ) { // obf
				continue; // obf
			} // obf

			if ( ! $v_drjos && '.' === $v_antll['name'][0] ) { // obf
				continue; // obf
			} // obf

			if ( $v_dyrzi && $v_antll['name'] !== $v_dyrzi ) { // obf
				continue; // obf
			} // obf

			$v_antll['perms']       = $v_rluid->gethchmod( $v_uxdcb . $v_xfukv ); // obf
			$v_antll['permsn']      = $v_rluid->getnumchmodfromh( $v_antll['perms'] ); // obf
			$v_antll['number']      = false; // obf
			$v_antll['owner']       = $v_rluid->owner( $v_uxdcb . $v_xfukv ); // obf
			$v_antll['group']       = $v_rluid->group( $v_uxdcb . $v_xfukv ); // obf
			$v_antll['size']        = $v_rluid->size( $v_uxdcb . $v_xfukv ); // obf
			$v_antll['lastmodunix'] = $v_rluid->mtime( $v_uxdcb . $v_xfukv ); // obf
			$v_antll['lastmod']     = gmdate( 'M j', $v_antll['lastmodunix'] ); // obf
			$v_antll['time']        = gmdate( 'h:i:s', $v_antll['lastmodunix'] ); // obf
			$v_antll['type']        = $v_rluid->is_dir( $v_uxdcb . $v_xfukv ) ? 'd' : 'f'; // obf

			if ( 'd' === $v_antll['type'] ) { // obf
				if ( $v_aizkz ) { // obf
					$v_antll['files'] = $v_rluid->dirlist( $v_uxdcb . $v_antll['name'], $v_drjos, $v_aizkz ); // obf
				} else { // obf
					$v_antll['files'] = array(); // obf
				} // obf
			} // obf

			$v_mczwy[ $v_antll['name'] ] = $v_antll; // obf
		} // obf

		$v_rbkyk->close(); // obf
		unset( $v_rbkyk ); // obf

		return $v_mczwy; // obf
	} // obf
} // obf