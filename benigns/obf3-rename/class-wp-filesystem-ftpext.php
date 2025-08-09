
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress FTP Filesystem. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Filesystem // obf
 */ // obf

/** // obf
 * WordPress Filesystem Class for implementing FTP. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @see WP_Filesystem_Base // obf
 */ // obf
class WP_Filesystem_FTPext extends WP_Filesystem_Base { // obf

	/** // obf
	 * @since 2.5.0 // obf
	 * @var resource // obf
	 */ // obf
	public $v_oifre; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_vxytj // obf
	 */ // obf
	public function __construct( $v_vxytj = '' ) { // obf
		$v_buhgn->method = 'ftpext'; // obf
		$v_buhgn->errors = new WP_Error(); // obf

		// Check if possible to use ftp functions. // obf
		if ( ! extension_loaded( 'ftp' ) ) { // obf
			$v_buhgn->errors->add( 'no_ftp_ext', __( 'The ftp PHP extension is not available' ) ); // obf
			return; // obf
		} // obf

		// This class uses the timeout on a per-connection basis, others use it on a per-action basis. // obf
		if ( ! defined( 'FS_TIMEOUT' ) ) { // obf
			define( 'FS_TIMEOUT', 4 * MINUTE_IN_SECONDS ); // obf
		} // obf

		if ( empty( $v_vxytj['port'] ) ) { // obf
			$v_buhgn->options['port'] = 21; // obf
		} else { // obf
			$v_buhgn->options['port'] = $v_vxytj['port']; // obf
		} // obf

		if ( empty( $v_vxytj['hostname'] ) ) { // obf
			$v_buhgn->errors->add( 'empty_hostname', __( 'FTP hostname is required' ) ); // obf
		} else { // obf
			$v_buhgn->options['hostname'] = $v_vxytj['hostname']; // obf
		} // obf

		// Check if the options provided are OK. // obf
		if ( empty( $v_vxytj['username'] ) ) { // obf
			$v_buhgn->errors->add( 'empty_username', __( 'FTP username is required' ) ); // obf
		} else { // obf
			$v_buhgn->options['username'] = $v_vxytj['username']; // obf
		} // obf

		if ( empty( $v_vxytj['password'] ) ) { // obf
			$v_buhgn->errors->add( 'empty_password', __( 'FTP password is required' ) ); // obf
		} else { // obf
			$v_buhgn->options['password'] = $v_vxytj['password']; // obf
		} // obf

		$v_buhgn->options['ssl'] = false; // obf

		if ( isset( $v_vxytj['connection_type'] ) && 'ftps' === $v_vxytj['connection_type'] ) { // obf
			$v_buhgn->options['ssl'] = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Connects filesystem. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function connect() { // obf
		if ( isset( $v_buhgn->options['ssl'] ) && $v_buhgn->options['ssl'] && function_exists( 'ftp_ssl_connect' ) ) { // obf
			$v_buhgn->link = @ftp_ssl_connect( $v_buhgn->options['hostname'], $v_buhgn->options['port'], FS_CONNECT_TIMEOUT ); // obf
		} else { // obf
			$v_buhgn->link = @ftp_connect( $v_buhgn->options['hostname'], $v_buhgn->options['port'], FS_CONNECT_TIMEOUT ); // obf
		} // obf

		if ( ! $v_buhgn->link ) { // obf
			$v_buhgn->errors->add( // obf
				'connect', // obf
				sprintf( // obf
					/* translators: %s: hostname:port */ // obf
					__( 'Failed to connect to FTP Server %s' ), // obf
					$v_buhgn->options['hostname'] . ':' . $v_buhgn->options['port'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		if ( ! @ftp_login( $v_buhgn->link, $v_buhgn->options['username'], $v_buhgn->options['password'] ) ) { // obf
			$v_buhgn->errors->add( // obf
				'auth', // obf
				sprintf( // obf
					/* translators: %s: Username. */ // obf
					__( 'Username/Password incorrect for %s' ), // obf
					$v_buhgn->options['username'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		// Set the connection to use Passive FTP. // obf
		ftp_pasv( $v_buhgn->link, true ); // obf

		if ( @ftp_get_option( $v_buhgn->link, FTP_TIMEOUT_SEC ) < FS_TIMEOUT ) { // obf
			@ftp_set_option( $v_buhgn->link, FTP_TIMEOUT_SEC, FS_TIMEOUT ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Reads entire file into a string. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Name of the file to read. // obf
	 * @return string|false Read data on success, false if no temporary file could be opened, // obf
	 *                      or if the file couldn't be retrieved. // obf
	 */ // obf
	public function get_contents( $v_dlsua ) { // obf
		$v_yktif   = wp_tempnam( $v_dlsua ); // obf
		$v_nwehq = fopen( $v_yktif, 'w+' ); // obf

		if ( ! $v_nwehq ) { // obf
			unlink( $v_yktif ); // obf
			return false; // obf
		} // obf

		if ( ! ftp_fget( $v_buhgn->link, $v_nwehq, $v_dlsua, FTP_BINARY ) ) { // obf
			fclose( $v_nwehq ); // obf
			unlink( $v_yktif ); // obf
			return false; // obf
		} // obf

		fseek( $v_nwehq, 0 ); // Skip back to the start of the file being written to. // obf
		$v_phjwc = ''; // obf

		while ( ! feof( $v_nwehq ) ) { // obf
			$v_phjwc .= fread( $v_nwehq, 8 * KB_IN_BYTES ); // obf
		} // obf

		fclose( $v_nwehq ); // obf
		unlink( $v_yktif ); // obf

		return $v_phjwc; // obf
	} // obf

	/** // obf
	 * Reads entire file into an array. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to the file. // obf
	 * @return array|false File contents in an array on success, false on failure. // obf
	 */ // obf
	public function get_contents_array( $v_dlsua ) { // obf
		return explode( "\n", $v_buhgn->get_contents( $v_dlsua ) ); // obf
	} // obf

	/** // obf
	 * Writes a string to a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_dlsua     Remote path to the file where to write the data. // obf
	 * @param string    $v_phjwc The data to write. // obf
	 * @param int|false $v_sdzna     Optional. The file permissions as octal number, usually 0644. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function put_contents( $v_dlsua, $v_phjwc, $v_sdzna = false ) { // obf
		$v_yktif   = wp_tempnam( $v_dlsua ); // obf
		$v_nwehq = fopen( $v_yktif, 'wb+' ); // obf

		if ( ! $v_nwehq ) { // obf
			unlink( $v_yktif ); // obf
			return false; // obf
		} // obf

		mbstring_binary_safe_encoding(); // obf

		$v_slnnq   = strlen( $v_phjwc ); // obf
		$v_vqzok = fwrite( $v_nwehq, $v_phjwc ); // obf

		reset_mbstring_encoding(); // obf

		if ( $v_slnnq !== $v_vqzok ) { // obf
			fclose( $v_nwehq ); // obf
			unlink( $v_yktif ); // obf
			return false; // obf
		} // obf

		fseek( $v_nwehq, 0 ); // Skip back to the start of the file being written to. // obf

		$v_bpuai = ftp_fput( $v_buhgn->link, $v_dlsua, $v_nwehq, FTP_BINARY ); // obf

		fclose( $v_nwehq ); // obf
		unlink( $v_yktif ); // obf

		$v_buhgn->chmod( $v_dlsua, $v_sdzna ); // obf

		return $v_bpuai; // obf
	} // obf

	/** // obf
	 * Gets the current working directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @return string|false The current working directory on success, false on failure. // obf
	 */ // obf
	public function cwd() { // obf
		$v_iaydk = ftp_pwd( $v_buhgn->link ); // obf

		if ( $v_iaydk ) { // obf
			$v_iaydk = trailingslashit( $v_iaydk ); // obf
		} // obf

		return $v_iaydk; // obf
	} // obf

	/** // obf
	 * Changes current directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_khjen The new current directory. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chdir( $v_khjen ) { // obf
		return @ftp_chdir( $v_buhgn->link, $v_khjen ); // obf
	} // obf

	/** // obf
	 * Changes filesystem permissions. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_dlsua      Path to the file. // obf
	 * @param int|false $v_sdzna      Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                             0755 for directories. Default false. // obf
	 * @param bool      $v_rsput Optional. If set to true, changes file permissions recursively. // obf
	 *                             Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chmod( $v_dlsua, $v_sdzna = false, $v_rsput = false ) { // obf
		if ( ! $v_sdzna ) { // obf
			if ( $v_buhgn->is_file( $v_dlsua ) ) { // obf
				$v_sdzna = FS_CHMOD_FILE; // obf
			} elseif ( $v_buhgn->is_dir( $v_dlsua ) ) { // obf
				$v_sdzna = FS_CHMOD_DIR; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		// chmod any sub-objects if recursive. // obf
		if ( $v_rsput && $v_buhgn->is_dir( $v_dlsua ) ) { // obf
			$v_ufmnj = $v_buhgn->dirlist( $v_dlsua ); // obf

			foreach ( (array) $v_ufmnj as $v_opnoz => $v_roqif ) { // obf
				$v_buhgn->chmod( $v_dlsua . '/' . $v_opnoz, $v_sdzna, $v_rsput ); // obf
			} // obf
		} // obf

		// chmod the file or directory. // obf
		if ( ! function_exists( 'ftp_chmod' ) ) { // obf
			return (bool) ftp_site( $v_buhgn->link, sprintf( 'CHMOD %o %s', $v_sdzna, $v_dlsua ) ); // obf
		} // obf

		return (bool) ftp_chmod( $v_buhgn->link, $v_sdzna, $v_dlsua ); // obf
	} // obf

	/** // obf
	 * Gets the file owner. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to the file. // obf
	 * @return string|false Username of the owner on success, false on failure. // obf
	 */ // obf
	public function owner( $v_dlsua ) { // obf
		$v_khjen = $v_buhgn->dirlist( $v_dlsua ); // obf

		return $v_khjen[ $v_dlsua ]['owner']; // obf
	} // obf

	/** // obf
	 * Gets the permissions of the specified file or filepath in their octal format. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to the file. // obf
	 * @return string Mode of the file (the last 3 digits). // obf
	 */ // obf
	public function getchmod( $v_dlsua ) { // obf
		$v_khjen = $v_buhgn->dirlist( $v_dlsua ); // obf

		return $v_khjen[ $v_dlsua ]['permsn']; // obf
	} // obf

	/** // obf
	 * Gets the file's group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to the file. // obf
	 * @return string|false The group on success, false on failure. // obf
	 */ // obf
	public function group( $v_dlsua ) { // obf
		$v_khjen = $v_buhgn->dirlist( $v_dlsua ); // obf

		return $v_khjen[ $v_dlsua ]['group']; // obf
	} // obf

	/** // obf
	 * Copies a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_yistq      Path to the source file. // obf
	 * @param string    $v_ptzww Path to the destination file. // obf
	 * @param bool      $v_dylzn   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                               Default false. // obf
	 * @param int|false $v_sdzna        Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                               0755 for dirs. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function copy( $v_yistq, $v_ptzww, $v_dylzn = false, $v_sdzna = false ) { // obf
		if ( ! $v_dylzn && $v_buhgn->exists( $v_ptzww ) ) { // obf
			return false; // obf
		} // obf

		$v_pjyey = $v_buhgn->get_contents( $v_yistq ); // obf

		if ( false === $v_pjyey ) { // obf
			return false; // obf
		} // obf

		return $v_buhgn->put_contents( $v_ptzww, $v_pjyey, $v_sdzna ); // obf
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
	 * @param string $v_yistq      Path to the source file or directory. // obf
	 * @param string $v_ptzww Path to the destination file or directory. // obf
	 * @param bool   $v_dylzn   Optional. Whether to overwrite the destination if it exists. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function move( $v_yistq, $v_ptzww, $v_dylzn = false ) { // obf
		return ftp_rename( $v_buhgn->link, $v_yistq, $v_ptzww ); // obf
	} // obf

	/** // obf
	 * Deletes a file or directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string       $v_dlsua      Path to the file or directory. // obf
	 * @param bool         $v_rsput Optional. If set to true, deletes files and folders recursively. // obf
	 *                                Default false. // obf
	 * @param string|false $v_ydmsq      Type of resource. 'f' for file, 'd' for directory. // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_dlsua, $v_rsput = false, $v_ydmsq = false ) { // obf
		if ( empty( $v_dlsua ) ) { // obf
			return false; // obf
		} // obf

		if ( 'f' === $v_ydmsq || $v_buhgn->is_file( $v_dlsua ) ) { // obf
			return ftp_delete( $v_buhgn->link, $v_dlsua ); // obf
		} // obf

		if ( ! $v_rsput ) { // obf
			return ftp_rmdir( $v_buhgn->link, $v_dlsua ); // obf
		} // obf

		$v_ufmnj = $v_buhgn->dirlist( trailingslashit( $v_dlsua ) ); // obf

		if ( ! empty( $v_ufmnj ) ) { // obf
			foreach ( $v_ufmnj as $v_cvoqp ) { // obf
				$v_buhgn->delete( trailingslashit( $v_dlsua ) . $v_cvoqp['name'], $v_rsput, $v_cvoqp['type'] ); // obf
			} // obf
		} // obf

		return ftp_rmdir( $v_buhgn->link, $v_dlsua ); // obf
	} // obf

	/** // obf
	 * Checks if a file or directory exists. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.3.0 Returns false for an empty path. // obf
	 * // obf
	 * @param string $v_tltaz Path to file or directory. // obf
	 * @return bool Whether $v_tltaz exists or not. // obf
	 */ // obf
	public function exists( $v_tltaz ) { // obf
		/* // obf
		 * Check for empty path. If ftp_nlist() receives an empty path, // obf
		 * it checks the current working directory and may return true. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/33058. // obf
		 */ // obf
		if ( '' === $v_tltaz ) { // obf
			return false; // obf
		} // obf

		$v_fscqt = ftp_nlist( $v_buhgn->link, $v_tltaz ); // obf

		if ( empty( $v_fscqt ) && $v_buhgn->is_dir( $v_tltaz ) ) { // obf
			return true; // File is an empty directory. // obf
		} // obf

		return ! empty( $v_fscqt ); // Empty list = no file, so invert. // obf
	} // obf

	/** // obf
	 * Checks if resource is a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua File path. // obf
	 * @return bool Whether $v_dlsua is a file. // obf
	 */ // obf
	public function is_file( $v_dlsua ) { // obf
		return $v_buhgn->exists( $v_dlsua ) && ! $v_buhgn->is_dir( $v_dlsua ); // obf
	} // obf

	/** // obf
	 * Checks if resource is a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_tltaz Directory path. // obf
	 * @return bool Whether $v_tltaz is a directory. // obf
	 */ // obf
	public function is_dir( $v_tltaz ) { // obf
		$v_iaydk    = $v_buhgn->cwd(); // obf
		$v_jkcnb = @ftp_chdir( $v_buhgn->link, trailingslashit( $v_tltaz ) ); // obf

		if ( $v_jkcnb && $v_tltaz === $v_buhgn->cwd() || $v_buhgn->cwd() !== $v_iaydk ) { // obf
			@ftp_chdir( $v_buhgn->link, $v_iaydk ); // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if a file is readable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to file. // obf
	 * @return bool Whether $v_dlsua is readable. // obf
	 */ // obf
	public function is_readable( $v_dlsua ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Checks if a file or directory is writable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_tltaz Path to file or directory. // obf
	 * @return bool Whether $v_tltaz is writable. // obf
	 */ // obf
	public function is_writable( $v_tltaz ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Gets the file's last access time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to file. // obf
	 * @return int|false Unix timestamp representing last access time, false on failure. // obf
	 */ // obf
	public function atime( $v_dlsua ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file modification time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to file. // obf
	 * @return int|false Unix timestamp representing modification time, false on failure. // obf
	 */ // obf
	public function mtime( $v_dlsua ) { // obf
		return ftp_mdtm( $v_buhgn->link, $v_dlsua ); // obf
	} // obf

	/** // obf
	 * Gets the file size (in bytes). // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua Path to file. // obf
	 * @return int|false Size of the file in bytes on success, false on failure. // obf
	 */ // obf
	public function size( $v_dlsua ) { // obf
		$v_isohy = ftp_size( $v_buhgn->link, $v_dlsua ); // obf

		return ( $v_isohy > -1 ) ? $v_isohy : false; // obf
	} // obf

	/** // obf
	 * Sets the access and modification times of a file. // obf
	 * // obf
	 * Note: If $v_dlsua doesn't exist, it will be created. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_dlsua  Path to file. // obf
	 * @param int    $v_lmaan  Optional. Modified time to set for file. // obf
	 *                      Default 0. // obf
	 * @param int    $v_hbzaf Optional. Access time to set for file. // obf
	 *                      Default 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function touch( $v_dlsua, $v_lmaan = 0, $v_hbzaf = 0 ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string           $v_tltaz  Path for new directory. // obf
	 * @param int|false        $v_gfexr Optional. The permissions as octal number (or false to skip chmod). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_quroe Optional. A user name or number (or false to skip chown). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_jruyj Optional. A group name or number (or false to skip chgrp). // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_tltaz, $v_gfexr = false, $v_quroe = false, $v_jruyj = false ) { // obf
		$v_tltaz = untrailingslashit( $v_tltaz ); // obf

		if ( empty( $v_tltaz ) ) { // obf
			return false; // obf
		} // obf

		if ( ! ftp_mkdir( $v_buhgn->link, $v_tltaz ) ) { // obf
			return false; // obf
		} // obf

		$v_buhgn->chmod( $v_tltaz, $v_gfexr ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_tltaz      Path to directory. // obf
	 * @param bool   $v_rsput Optional. Whether to recursively remove files/directories. // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function rmdir( $v_tltaz, $v_rsput = false ) { // obf
		return $v_buhgn->delete( $v_tltaz, $v_rsput ); // obf
	} // obf

	/** // obf
	 * Parses an individual entry from the FTP LIST command output. // obf
	 * // obf
	 * @param string $v_skuzv A line from the directory listing. // obf
	 * @return array|string { // obf
	 *     Array of file information. Empty string if the line could not be parsed. // obf
	 * // obf
	 *     @type string       $v_pymyj        Name of the file or directory. // obf
	 *     @type string       $v_ihati       *nix representation of permissions. // obf
	 *     @type string       $v_ubsgo      Octal representation of permissions. // obf
	 *     @type string|false $v_jebxl      File number as a string, or false if not available. // obf
	 *     @type string|false $v_jordy       Owner name or ID, or false if not available. // obf
	 *     @type string|false $v_fdllw       File permissions group, or false if not available. // obf
	 *     @type string|false $v_isohy        Size of file in bytes as a string, or false if not available. // obf
	 *     @type string|false $v_dhjrk Last modified unix timestamp as a string, or false if not available. // obf
	 *     @type string|false $v_vsbnw     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                     false if not available. // obf
	 *     @type string|false $v_lmaan        Last modified time, or false if not available. // obf
	 *     @type string       $v_ydmsq        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *     @type array|false  $v_eisxa       If a directory and `$v_rsput` is true, contains another array of files. // obf
	 *                                     False if unable to list directory contents. // obf
	 * } // obf
	 */ // obf
	public function parselisting( $v_skuzv ) { // obf
		static $v_rsbfv = null; // obf

		if ( is_null( $v_rsbfv ) ) { // obf
			$v_rsbfv = stripos( ftp_systype( $v_buhgn->link ), 'win' ) !== false; // obf
		} // obf

		if ( $v_rsbfv && preg_match( '/([0-9]{2})-([0-9]{2})-([0-9]{2}) +([0-9]{2}):([0-9]{2})(AM|PM) +([0-9]+|<DIR>) +(.+)/', $v_skuzv, $v_qswcn ) ) { // obf
			$v_ixebm = array(); // obf

			if ( $v_qswcn[3] < 70 ) { // obf
				$v_qswcn[3] += 2000; // obf
			} else { // obf
				$v_qswcn[3] += 1900; // 4-digit year fix. // obf
			} // obf

			$v_ixebm['isdir'] = ( '<DIR>' === $v_qswcn[7] ); // obf

			if ( $v_ixebm['isdir'] ) { // obf
				$v_ixebm['type'] = 'd'; // obf
			} else { // obf
				$v_ixebm['type'] = 'f'; // obf
			} // obf

			$v_ixebm['size']   = $v_qswcn[7]; // obf
			$v_ixebm['month']  = $v_qswcn[1]; // obf
			$v_ixebm['day']    = $v_qswcn[2]; // obf
			$v_ixebm['year']   = $v_qswcn[3]; // obf
			$v_ixebm['hour']   = $v_qswcn[4]; // obf
			$v_ixebm['minute'] = $v_qswcn[5]; // obf
			$v_ixebm['time']   = mktime( $v_qswcn[4] + ( strcasecmp( $v_qswcn[6], 'PM' ) === 0 ? 12 : 0 ), $v_qswcn[5], 0, $v_qswcn[1], $v_qswcn[2], $v_qswcn[3] ); // obf
			$v_ixebm['am/pm']  = $v_qswcn[6]; // obf
			$v_ixebm['name']   = $v_qswcn[8]; // obf
		} elseif ( ! $v_rsbfv ) { // obf
			$v_qswcn = preg_split( '/[ ]/', $v_skuzv, 9, PREG_SPLIT_NO_EMPTY ); // obf

			if ( $v_qswcn ) { // obf
				$v_imuin = count( $v_qswcn ); // obf

				if ( $v_imuin < 8 ) { // obf
					return ''; // obf
				} // obf

				$v_ixebm           = array(); // obf
				$v_ixebm['isdir']  = 'd' === $v_qswcn[0][0]; // obf
				$v_ixebm['islink'] = 'l' === $v_qswcn[0][0]; // obf

				if ( $v_ixebm['isdir'] ) { // obf
					$v_ixebm['type'] = 'd'; // obf
				} elseif ( $v_ixebm['islink'] ) { // obf
					$v_ixebm['type'] = 'l'; // obf
				} else { // obf
					$v_ixebm['type'] = 'f'; // obf
				} // obf

				$v_ixebm['perms']  = $v_qswcn[0]; // obf
				$v_ixebm['permsn'] = $v_buhgn->getnumchmodfromh( $v_ixebm['perms'] ); // obf
				$v_ixebm['number'] = $v_qswcn[1]; // obf
				$v_ixebm['owner']  = $v_qswcn[2]; // obf
				$v_ixebm['group']  = $v_qswcn[3]; // obf
				$v_ixebm['size']   = $v_qswcn[4]; // obf

				if ( 8 === $v_imuin ) { // obf
					sscanf( $v_qswcn[5], '%d-%d-%d', $v_ixebm['year'], $v_ixebm['month'], $v_ixebm['day'] ); // obf
					sscanf( $v_qswcn[6], '%d:%d', $v_ixebm['hour'], $v_ixebm['minute'] ); // obf

					$v_ixebm['time'] = mktime( $v_ixebm['hour'], $v_ixebm['minute'], 0, $v_ixebm['month'], $v_ixebm['day'], $v_ixebm['year'] ); // obf
					$v_ixebm['name'] = $v_qswcn[7]; // obf
				} else { // obf
					$v_ixebm['month'] = $v_qswcn[5]; // obf
					$v_ixebm['day']   = $v_qswcn[6]; // obf

					if ( preg_match( '/([0-9]{2}):([0-9]{2})/', $v_qswcn[7], $v_zmzbc ) ) { // obf
						$v_ixebm['year']   = gmdate( 'Y' ); // obf
						$v_ixebm['hour']   = $v_zmzbc[1]; // obf
						$v_ixebm['minute'] = $v_zmzbc[2]; // obf
					} else { // obf
						$v_ixebm['year']   = $v_qswcn[7]; // obf
						$v_ixebm['hour']   = 0; // obf
						$v_ixebm['minute'] = 0; // obf
					} // obf

					$v_ixebm['time'] = strtotime( sprintf( '%d %s %d %02d:%02d', $v_ixebm['day'], $v_ixebm['month'], $v_ixebm['year'], $v_ixebm['hour'], $v_ixebm['minute'] ) ); // obf
					$v_ixebm['name'] = $v_qswcn[8]; // obf
				} // obf
			} // obf
		} // obf

		// Replace symlinks formatted as "source -> target" with just the source name. // obf
		if ( isset( $v_ixebm['islink'] ) && $v_ixebm['islink'] ) { // obf
			$v_ixebm['name'] = __fn_37772( '/(\s*->\s*.*)$/', '', $v_ixebm['name'] ); // obf
		} // obf

		return $v_ixebm; // obf
	} // obf

	/** // obf
	 * Gets details for files in a directory or a specific file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_tltaz           Path to directory or file. // obf
	 * @param bool   $v_cserk Optional. Whether to include details of hidden ("." prefixed) files. // obf
	 *                               Default true. // obf
	 * @param bool   $v_rsput      Optional. Whether to recursively include file details in nested directories. // obf
	 *                               Default false. // obf
	 * @return array|false { // obf
	 *     Array of arrays containing file information. False if unable to list directory contents. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of file information. Note that some elements may not be available on all filesystems. // obf
	 * // obf
	 *         @type string           $v_pymyj        Name of the file or directory. // obf
	 *         @type string           $v_ihati       *nix representation of permissions. // obf
	 *         @type string           $v_ubsgo      Octal representation of permissions. // obf
	 *         @type int|string|false $v_jebxl      File number. May be a numeric string. False if not available. // obf
	 *         @type string|false     $v_jordy       Owner name or ID, or false if not available. // obf
	 *         @type string|false     $v_fdllw       File permissions group, or false if not available. // obf
	 *         @type int|string|false $v_isohy        Size of file in bytes. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type int|string|false $v_dhjrk Last modified unix timestamp. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type string|false     $v_vsbnw     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                             false if not available. // obf
	 *         @type string|false     $v_lmaan        Last modified time, or false if not available. // obf
	 *         @type string           $v_ydmsq        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *         @type array|false      $v_eisxa       If a directory and `$v_rsput` is true, contains another array of // obf
	 *                                             files. False if unable to list directory contents. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function dirlist( $v_tltaz = '.', $v_cserk = true, $v_rsput = false ) { // obf
		if ( $v_buhgn->is_file( $v_tltaz ) ) { // obf
			$v_xlfrf = basename( $v_tltaz ); // obf
			$v_tltaz       = dirname( $v_tltaz ) . '/'; // obf
		} else { // obf
			$v_xlfrf = false; // obf
		} // obf

		$v_xnxba = ftp_pwd( $v_buhgn->link ); // obf

		if ( ! @ftp_chdir( $v_buhgn->link, $v_tltaz ) ) { // Can't change to folder = folder doesn't exist. // obf
			return false; // obf
		} // obf

		$v_fscqt = ftp_rawlist( $v_buhgn->link, '-a', false ); // obf

		@ftp_chdir( $v_buhgn->link, $v_xnxba ); // obf

		if ( empty( $v_fscqt ) ) { // Empty array = non-existent folder (real folder will show . at least). // obf
			return false; // obf
		} // obf

		$v_rauok = array(); // obf

		foreach ( $v_fscqt as $v_qnlyk => $v_dndny ) { // obf
			$v_bhtpb = $v_buhgn->parselisting( $v_dndny ); // obf

			if ( empty( $v_bhtpb ) ) { // obf
				continue; // obf
			} // obf

			if ( '.' === $v_bhtpb['name'] || '..' === $v_bhtpb['name'] ) { // obf
				continue; // obf
			} // obf

			if ( ! $v_cserk && '.' === $v_bhtpb['name'][0] ) { // obf
				continue; // obf
			} // obf

			if ( $v_xlfrf && $v_bhtpb['name'] !== $v_xlfrf ) { // obf
				continue; // obf
			} // obf

			$v_rauok[ $v_bhtpb['name'] ] = $v_bhtpb; // obf
		} // obf

		$v_tltaz = trailingslashit( $v_tltaz ); // obf
		$v_bpuai  = array(); // obf

		foreach ( (array) $v_rauok as $v_vuoqi ) { // obf
			if ( 'd' === $v_vuoqi['type'] ) { // obf
				if ( $v_rsput ) { // obf
					$v_vuoqi['files'] = $v_buhgn->dirlist( $v_tltaz . $v_vuoqi['name'], $v_cserk, $v_rsput ); // obf
				} else { // obf
					$v_vuoqi['files'] = array(); // obf
				} // obf
			} // obf

			$v_bpuai[ $v_vuoqi['name'] ] = $v_vuoqi; // obf
		} // obf

		return $v_bpuai; // obf
	} // obf

	/** // obf
	 * Destructor. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	public function __destruct() { // obf
		if ( $v_buhgn->link ) { // obf
			ftp_close( $v_buhgn->link ); // obf
		} // obf
	} // obf
} // obf