
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress FTP Sockets Filesystem. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Filesystem // obf
 */ // obf

/** // obf
 * WordPress Filesystem Class for implementing FTP Sockets. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @see WP_Filesystem_Base // obf
 */ // obf
class WP_Filesystem_ftpsockets extends WP_Filesystem_Base { // obf

	/** // obf
	 * @since 2.5.0 // obf
	 * @var ftp // obf
	 */ // obf
	public $v_pdrdr; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_gjkzk // obf
	 */ // obf
	public function __construct( $v_gjkzk = '' ) { // obf
		$v_gzfkx->method = 'ftpsockets'; // obf
		$v_gzfkx->errors = new WP_Error(); // obf

		// Check if possible to use ftp functions. // obf
		if ( ! require_once ABSPATH . 'wp-admin/includes/class-ftp.php' ) { // obf
			return; // obf
		} // obf

		$v_gzfkx->ftp = new ftp(); // obf

		if ( empty( $v_gjkzk['port'] ) ) { // obf
			$v_gzfkx->options['port'] = 21; // obf
		} else { // obf
			$v_gzfkx->options['port'] = (int) $v_gjkzk['port']; // obf
		} // obf

		if ( empty( $v_gjkzk['hostname'] ) ) { // obf
			$v_gzfkx->errors->add( 'empty_hostname', __( 'FTP hostname is required' ) ); // obf
		} else { // obf
			$v_gzfkx->options['hostname'] = $v_gjkzk['hostname']; // obf
		} // obf

		// Check if the options provided are OK. // obf
		if ( empty( $v_gjkzk['username'] ) ) { // obf
			$v_gzfkx->errors->add( 'empty_username', __( 'FTP username is required' ) ); // obf
		} else { // obf
			$v_gzfkx->options['username'] = $v_gjkzk['username']; // obf
		} // obf

		if ( empty( $v_gjkzk['password'] ) ) { // obf
			$v_gzfkx->errors->add( 'empty_password', __( 'FTP password is required' ) ); // obf
		} else { // obf
			$v_gzfkx->options['password'] = $v_gjkzk['password']; // obf
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
		if ( ! $v_gzfkx->ftp ) { // obf
			return false; // obf
		} // obf

		$v_gzfkx->ftp->SetTimeout( FS_CONNECT_TIMEOUT ); // obf

		if ( ! $v_gzfkx->ftp->SetServer( $v_gzfkx->options['hostname'], $v_gzfkx->options['port'] ) ) { // obf
			$v_gzfkx->errors->add( // obf
				'connect', // obf
				sprintf( // obf
					/* translators: %s: hostname:port */ // obf
					__( 'Failed to connect to FTP Server %s' ), // obf
					$v_gzfkx->options['hostname'] . ':' . $v_gzfkx->options['port'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		if ( ! $v_gzfkx->ftp->connect() ) { // obf
			$v_gzfkx->errors->add( // obf
				'connect', // obf
				sprintf( // obf
					/* translators: %s: hostname:port */ // obf
					__( 'Failed to connect to FTP Server %s' ), // obf
					$v_gzfkx->options['hostname'] . ':' . $v_gzfkx->options['port'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		if ( ! $v_gzfkx->ftp->login( $v_gzfkx->options['username'], $v_gzfkx->options['password'] ) ) { // obf
			$v_gzfkx->errors->add( // obf
				'auth', // obf
				sprintf( // obf
					/* translators: %s: Username. */ // obf
					__( 'Username/Password incorrect for %s' ), // obf
					$v_gzfkx->options['username'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		$v_gzfkx->ftp->SetType( FTP_BINARY ); // obf
		$v_gzfkx->ftp->Passive( true ); // obf
		$v_gzfkx->ftp->SetTimeout( FS_TIMEOUT ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Reads entire file into a string. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Name of the file to read. // obf
	 * @return string|false Read data on success, false if no temporary file could be opened, // obf
	 *                      or if the file couldn't be retrieved. // obf
	 */ // obf
	public function get_contents( $v_ucwvy ) { // obf
		if ( ! $v_gzfkx->exists( $v_ucwvy ) ) { // obf
			return false; // obf
		} // obf

		$v_xhrqe   = wp_tempnam( $v_ucwvy ); // obf
		$v_oxzyo = fopen( $v_xhrqe, 'w+' ); // obf

		if ( ! $v_oxzyo ) { // obf
			unlink( $v_xhrqe ); // obf
			return false; // obf
		} // obf

		mbstring_binary_safe_encoding(); // obf

		if ( ! $v_gzfkx->ftp->fget( $v_oxzyo, $v_ucwvy ) ) { // obf
			fclose( $v_oxzyo ); // obf
			unlink( $v_xhrqe ); // obf

			reset_mbstring_encoding(); // obf

			return ''; // Blank document. File does exist, it's just blank. // obf
		} // obf

		reset_mbstring_encoding(); // obf

		fseek( $v_oxzyo, 0 ); // Skip back to the start of the file being written to. // obf
		$v_vjmhi = ''; // obf

		while ( ! feof( $v_oxzyo ) ) { // obf
			$v_vjmhi .= fread( $v_oxzyo, 8 * KB_IN_BYTES ); // obf
		} // obf

		fclose( $v_oxzyo ); // obf
		unlink( $v_xhrqe ); // obf

		return $v_vjmhi; // obf
	} // obf

	/** // obf
	 * Reads entire file into an array. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to the file. // obf
	 * @return array|false File contents in an array on success, false on failure. // obf
	 */ // obf
	public function get_contents_array( $v_ucwvy ) { // obf
		return explode( "\n", $v_gzfkx->get_contents( $v_ucwvy ) ); // obf
	} // obf

	/** // obf
	 * Writes a string to a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_ucwvy     Remote path to the file where to write the data. // obf
	 * @param string    $v_vjmhi The data to write. // obf
	 * @param int|false $v_ainom     Optional. The file permissions as octal number, usually 0644. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function put_contents( $v_ucwvy, $v_vjmhi, $v_ainom = false ) { // obf
		$v_xhrqe   = wp_tempnam( $v_ucwvy ); // obf
		$v_oxzyo = @fopen( $v_xhrqe, 'w+' ); // obf

		if ( ! $v_oxzyo ) { // obf
			unlink( $v_xhrqe ); // obf
			return false; // obf
		} // obf

		// The FTP class uses string functions internally during file download/upload. // obf
		mbstring_binary_safe_encoding(); // obf

		$v_ldhtz = fwrite( $v_oxzyo, $v_vjmhi ); // obf

		if ( false === $v_ldhtz || strlen( $v_vjmhi ) !== $v_ldhtz ) { // obf
			fclose( $v_oxzyo ); // obf
			unlink( $v_xhrqe ); // obf

			reset_mbstring_encoding(); // obf

			return false; // obf
		} // obf

		fseek( $v_oxzyo, 0 ); // Skip back to the start of the file being written to. // obf

		$v_edlpu = $v_gzfkx->ftp->fput( $v_ucwvy, $v_oxzyo ); // obf

		reset_mbstring_encoding(); // obf

		fclose( $v_oxzyo ); // obf
		unlink( $v_xhrqe ); // obf

		$v_gzfkx->chmod( $v_ucwvy, $v_ainom ); // obf

		return $v_edlpu; // obf
	} // obf

	/** // obf
	 * Gets the current working directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @return string|false The current working directory on success, false on failure. // obf
	 */ // obf
	public function cwd() { // obf
		$v_ogwwm = $v_gzfkx->ftp->pwd(); // obf

		if ( $v_ogwwm ) { // obf
			$v_ogwwm = trailingslashit( $v_ogwwm ); // obf
		} // obf

		return $v_ogwwm; // obf
	} // obf

	/** // obf
	 * Changes current directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_piofe The new current directory. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chdir( $v_piofe ) { // obf
		return $v_gzfkx->ftp->chdir( $v_piofe ); // obf
	} // obf

	/** // obf
	 * Changes filesystem permissions. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_ucwvy      Path to the file. // obf
	 * @param int|false $v_ainom      Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                             0755 for directories. Default false. // obf
	 * @param bool      $v_xwoio Optional. If set to true, changes file permissions recursively. // obf
	 *                             Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chmod( $v_ucwvy, $v_ainom = false, $v_xwoio = false ) { // obf
		if ( ! $v_ainom ) { // obf
			if ( $v_gzfkx->is_file( $v_ucwvy ) ) { // obf
				$v_ainom = FS_CHMOD_FILE; // obf
			} elseif ( $v_gzfkx->is_dir( $v_ucwvy ) ) { // obf
				$v_ainom = FS_CHMOD_DIR; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		// chmod any sub-objects if recursive. // obf
		if ( $v_xwoio && $v_gzfkx->is_dir( $v_ucwvy ) ) { // obf
			$v_iaezk = $v_gzfkx->dirlist( $v_ucwvy ); // obf

			foreach ( (array) $v_iaezk as $v_eircm => $v_whtaj ) { // obf
				$v_gzfkx->chmod( $v_ucwvy . '/' . $v_eircm, $v_ainom, $v_xwoio ); // obf
			} // obf
		} // obf

		// chmod the file or directory. // obf
		return $v_gzfkx->ftp->chmod( $v_ucwvy, $v_ainom ); // obf
	} // obf

	/** // obf
	 * Gets the file owner. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to the file. // obf
	 * @return string|false Username of the owner on success, false on failure. // obf
	 */ // obf
	public function owner( $v_ucwvy ) { // obf
		$v_piofe = $v_gzfkx->dirlist( $v_ucwvy ); // obf

		return $v_piofe[ $v_ucwvy ]['owner']; // obf
	} // obf

	/** // obf
	 * Gets the permissions of the specified file or filepath in their octal format. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to the file. // obf
	 * @return string Mode of the file (the last 3 digits). // obf
	 */ // obf
	public function getchmod( $v_ucwvy ) { // obf
		$v_piofe = $v_gzfkx->dirlist( $v_ucwvy ); // obf

		return $v_piofe[ $v_ucwvy ]['permsn']; // obf
	} // obf

	/** // obf
	 * Gets the file's group. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to the file. // obf
	 * @return string|false The group on success, false on failure. // obf
	 */ // obf
	public function group( $v_ucwvy ) { // obf
		$v_piofe = $v_gzfkx->dirlist( $v_ucwvy ); // obf

		return $v_piofe[ $v_ucwvy ]['group']; // obf
	} // obf

	/** // obf
	 * Copies a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string    $v_vynbs      Path to the source file. // obf
	 * @param string    $v_lwtpq Path to the destination file. // obf
	 * @param bool      $v_nkkci   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                               Default false. // obf
	 * @param int|false $v_ainom        Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                               0755 for dirs. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function copy( $v_vynbs, $v_lwtpq, $v_nkkci = false, $v_ainom = false ) { // obf
		if ( ! $v_nkkci && $v_gzfkx->exists( $v_lwtpq ) ) { // obf
			return false; // obf
		} // obf

		$v_canym = $v_gzfkx->get_contents( $v_vynbs ); // obf

		if ( false === $v_canym ) { // obf
			return false; // obf
		} // obf

		return $v_gzfkx->put_contents( $v_lwtpq, $v_canym, $v_ainom ); // obf
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
	 * @param string $v_vynbs      Path to the source file or directory. // obf
	 * @param string $v_lwtpq Path to the destination file or directory. // obf
	 * @param bool   $v_nkkci   Optional. Whether to overwrite the destination if it exists. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function move( $v_vynbs, $v_lwtpq, $v_nkkci = false ) { // obf
		return $v_gzfkx->ftp->rename( $v_vynbs, $v_lwtpq ); // obf
	} // obf

	/** // obf
	 * Deletes a file or directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string       $v_ucwvy      Path to the file or directory. // obf
	 * @param bool         $v_xwoio Optional. If set to true, deletes files and folders recursively. // obf
	 *                                Default false. // obf
	 * @param string|false $v_kdigs      Type of resource. 'f' for file, 'd' for directory. // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_ucwvy, $v_xwoio = false, $v_kdigs = false ) { // obf
		if ( empty( $v_ucwvy ) ) { // obf
			return false; // obf
		} // obf

		if ( 'f' === $v_kdigs || $v_gzfkx->is_file( $v_ucwvy ) ) { // obf
			return $v_gzfkx->ftp->delete( $v_ucwvy ); // obf
		} // obf

		if ( ! $v_xwoio ) { // obf
			return $v_gzfkx->ftp->rmdir( $v_ucwvy ); // obf
		} // obf

		return $v_gzfkx->ftp->mdel( $v_ucwvy ); // obf
	} // obf

	/** // obf
	 * Checks if a file or directory exists. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.3.0 Returns false for an empty path. // obf
	 * // obf
	 * @param string $v_yiydm Path to file or directory. // obf
	 * @return bool Whether $v_yiydm exists or not. // obf
	 */ // obf
	public function exists( $v_yiydm ) { // obf
		/* // obf
		 * Check for empty path. If ftp::nlist() receives an empty path, // obf
		 * it checks the current working directory and may return true. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/33058. // obf
		 */ // obf
		if ( '' === $v_yiydm ) { // obf
			return false; // obf
		} // obf

		$v_xogxr = $v_gzfkx->ftp->nlist( $v_yiydm ); // obf

		if ( empty( $v_xogxr ) && $v_gzfkx->is_dir( $v_yiydm ) ) { // obf
			return true; // File is an empty directory. // obf
		} // obf

		return ! empty( $v_xogxr ); // Empty list = no file, so invert. // obf
		// Return $v_gzfkx->ftp->is_exists($v_ucwvy); has issues with ABOR+426 responses on the ncFTPd server. // obf
	} // obf

	/** // obf
	 * Checks if resource is a file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy File path. // obf
	 * @return bool Whether $v_ucwvy is a file. // obf
	 */ // obf
	public function is_file( $v_ucwvy ) { // obf
		if ( $v_gzfkx->is_dir( $v_ucwvy ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_gzfkx->exists( $v_ucwvy ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if resource is a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yiydm Directory path. // obf
	 * @return bool Whether $v_yiydm is a directory. // obf
	 */ // obf
	public function is_dir( $v_yiydm ) { // obf
		$v_ogwwm = $v_gzfkx->cwd(); // obf

		if ( $v_gzfkx->chdir( $v_yiydm ) ) { // obf
			$v_gzfkx->chdir( $v_ogwwm ); // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if a file is readable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to file. // obf
	 * @return bool Whether $v_ucwvy is readable. // obf
	 */ // obf
	public function is_readable( $v_ucwvy ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Checks if a file or directory is writable. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yiydm Path to file or directory. // obf
	 * @return bool Whether $v_yiydm is writable. // obf
	 */ // obf
	public function is_writable( $v_yiydm ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Gets the file's last access time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to file. // obf
	 * @return int|false Unix timestamp representing last access time, false on failure. // obf
	 */ // obf
	public function atime( $v_ucwvy ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Gets the file modification time. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to file. // obf
	 * @return int|false Unix timestamp representing modification time, false on failure. // obf
	 */ // obf
	public function mtime( $v_ucwvy ) { // obf
		return $v_gzfkx->ftp->mdtm( $v_ucwvy ); // obf
	} // obf

	/** // obf
	 * Gets the file size (in bytes). // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy Path to file. // obf
	 * @return int|false Size of the file in bytes on success, false on failure. // obf
	 */ // obf
	public function size( $v_ucwvy ) { // obf
		return $v_gzfkx->ftp->filesize( $v_ucwvy ); // obf
	} // obf

	/** // obf
	 * Sets the access and modification times of a file. // obf
	 * // obf
	 * Note: If $v_ucwvy doesn't exist, it will be created. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_ucwvy  Path to file. // obf
	 * @param int    $v_ikqnr  Optional. Modified time to set for file. // obf
	 *                      Default 0. // obf
	 * @param int    $v_nqjyy Optional. Access time to set for file. // obf
	 *                      Default 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function touch( $v_ucwvy, $v_ikqnr = 0, $v_nqjyy = 0 ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string           $v_yiydm  Path for new directory. // obf
	 * @param int|false        $v_agiey Optional. The permissions as octal number (or false to skip chmod). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_dnouy Optional. A user name or number (or false to skip chown). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_qybul Optional. A group name or number (or false to skip chgrp). // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_yiydm, $v_agiey = false, $v_dnouy = false, $v_qybul = false ) { // obf
		$v_yiydm = untrailingslashit( $v_yiydm ); // obf

		if ( empty( $v_yiydm ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_gzfkx->ftp->mkdir( $v_yiydm ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_agiey ) { // obf
			$v_agiey = FS_CHMOD_DIR; // obf
		} // obf

		$v_gzfkx->chmod( $v_yiydm, $v_agiey ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a directory. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yiydm      Path to directory. // obf
	 * @param bool   $v_xwoio Optional. Whether to recursively remove files/directories. // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function rmdir( $v_yiydm, $v_xwoio = false ) { // obf
		return $v_gzfkx->delete( $v_yiydm, $v_xwoio ); // obf
	} // obf

	/** // obf
	 * Gets details for files in a directory or a specific file. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_yiydm           Path to directory or file. // obf
	 * @param bool   $v_rsqmq Optional. Whether to include details of hidden ("." prefixed) files. // obf
	 *                               Default true. // obf
	 * @param bool   $v_xwoio      Optional. Whether to recursively include file details in nested directories. // obf
	 *                               Default false. // obf
	 * @return array|false { // obf
	 *     Array of arrays containing file information. False if unable to list directory contents. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of file information. Note that some elements may not be available on all filesystems. // obf
	 * // obf
	 *         @type string           $v_oksgj        Name of the file or directory. // obf
	 *         @type string           $v_nknwk       *nix representation of permissions. // obf
	 *         @type string           $v_rvcau      Octal representation of permissions. // obf
	 *         @type int|string|false $v_nbtdc      File number. May be a numeric string. False if not available. // obf
	 *         @type string|false     $v_dnbgm       Owner name or ID, or false if not available. // obf
	 *         @type string|false     $v_foqof       File permissions group, or false if not available. // obf
	 *         @type int|string|false $v_rsjfc        Size of file in bytes. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type int|string|false $v_ynper Last modified unix timestamp. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type string|false     $v_xictw     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                             false if not available. // obf
	 *         @type string|false     $v_ikqnr        Last modified time, or false if not available. // obf
	 *         @type string           $v_kdigs        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *         @type array|false      $v_xriiv       If a directory and `$v_xwoio` is true, contains another array of // obf
	 *                                             files. False if unable to list directory contents. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function dirlist( $v_yiydm = '.', $v_rsqmq = true, $v_xwoio = false ) { // obf
		if ( $v_gzfkx->is_file( $v_yiydm ) ) { // obf
			$v_cooez = basename( $v_yiydm ); // obf
			$v_yiydm       = dirname( $v_yiydm ) . '/'; // obf
		} else { // obf
			$v_cooez = false; // obf
		} // obf

		mbstring_binary_safe_encoding(); // obf

		$v_xogxr = $v_gzfkx->ftp->dirlist( $v_yiydm ); // obf

		if ( empty( $v_xogxr ) && ! $v_gzfkx->exists( $v_yiydm ) ) { // obf

			reset_mbstring_encoding(); // obf

			return false; // obf
		} // obf

		$v_yiydm = trailingslashit( $v_yiydm ); // obf
		$v_edlpu  = array(); // obf

		foreach ( $v_xogxr as $v_httmp ) { // obf

			if ( '.' === $v_httmp['name'] || '..' === $v_httmp['name'] ) { // obf
				continue; // obf
			} // obf

			if ( ! $v_rsqmq && '.' === $v_httmp['name'][0] ) { // obf
				continue; // obf
			} // obf

			if ( $v_cooez && $v_httmp['name'] !== $v_cooez ) { // obf
				continue; // obf
			} // obf

			if ( 'd' === $v_httmp['type'] ) { // obf
				if ( $v_xwoio ) { // obf
					$v_httmp['files'] = $v_gzfkx->dirlist( $v_yiydm . $v_httmp['name'], $v_rsqmq, $v_xwoio ); // obf
				} else { // obf
					$v_httmp['files'] = array(); // obf
				} // obf
			} // obf

			// Replace symlinks formatted as "source -> target" with just the source name. // obf
			if ( $v_httmp['islink'] ) { // obf
				$v_httmp['name'] = __fn_37772( '/(\s*->\s*.*)$/', '', $v_httmp['name'] ); // obf
			} // obf

			// Add the octal representation of the file permissions. // obf
			$v_httmp['permsn'] = $v_gzfkx->getnumchmodfromh( $v_httmp['perms'] ); // obf

			$v_edlpu[ $v_httmp['name'] ] = $v_httmp; // obf
		} // obf

		reset_mbstring_encoding(); // obf

		return $v_edlpu; // obf
	} // obf

	/** // obf
	 * Destructor. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	public function __destruct() { // obf
		$v_gzfkx->ftp->quit(); // obf
	} // obf
} // obf