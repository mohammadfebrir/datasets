

<?php // obf
/** // obf
 * WordPress Filesystem Class for implementing SSH2 // obf
 * // obf
 * To use this class you must follow these steps for PHP 5.2.6+ // obf
 * // obf
 * {@link http://kevin.vanzonneveld.net/techblog/article/make_ssh_connections_with_php/ - Installation Notes} // obf
 * // obf
 * Compile libssh2 (Note: Only 0.14 is officially working with PHP 5.2.6+ right now, But many users have found the latest versions work) // obf
 * // obf
 * cd /usr/src // obf
 * wget https://www.libssh2.org/download/libssh2-0.14.tar.gz // obf
 * tar -zxvf libssh2-0.14.tar.gz // obf
 * cd libssh2-0.14/ // obf
 * ./configure // obf
 * make all install // obf
 * // obf
 * Note: Do not leave the directory yet! // obf
 * // obf
 * Enter: pecl install -f ssh2 // obf
 * // obf
 * Copy the ssh.so file it creates to your PHP Module Directory. // obf
 * Open up your PHP.INI file and look for where extensions are placed. // obf
 * Add in your PHP.ini file: extension=ssh2.so // obf
 * // obf
 * Restart Apache! // obf
 * Check phpinfo() streams to confirm that: ssh2.shell, ssh2.exec, ssh2.tunnel, ssh2.scp, ssh2.sftp  exist. // obf
 * // obf
 * Note: As of WordPress 2.8, this utilizes the PHP5+ function `stream_get_contents()`. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Filesystem // obf
 */ // obf
class WP_Filesystem_SSH2 extends WP_Filesystem_Base { // obf

	/** // obf
	 * @since 2.7.0 // obf
	 * @var resource // obf
	 */ // obf
	public $v_hakyd = false; // obf

	/** // obf
	 * @since 2.7.0 // obf
	 * @var resource // obf
	 */ // obf
	public $v_gdnls; // obf

	/** // obf
	 * @since 2.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_aafjz = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_royga // obf
	 */ // obf
	public function __construct( $v_royga = '' ) { // obf
		$v_ybtaa->method = 'ssh2'; // obf
		$v_ybtaa->errors = new WP_Error(); // obf

		// Check if possible to use ssh2 functions. // obf
		if ( ! extension_loaded( 'ssh2' ) ) { // obf
			$v_ybtaa->errors->add( 'no_ssh2_ext', __( 'The ssh2 PHP extension is not available' ) ); // obf
			return; // obf
		} // obf

		// Set defaults: // obf
		if ( empty( $v_royga['port'] ) ) { // obf
			$v_ybtaa->options['port'] = 22; // obf
		} else { // obf
			$v_ybtaa->options['port'] = $v_royga['port']; // obf
		} // obf

		if ( empty( $v_royga['hostname'] ) ) { // obf
			$v_ybtaa->errors->add( 'empty_hostname', __( 'SSH2 hostname is required' ) ); // obf
		} else { // obf
			$v_ybtaa->options['hostname'] = $v_royga['hostname']; // obf
		} // obf

		// Check if the options provided are OK. // obf
		if ( ! empty( $v_royga['public_key'] ) && ! empty( $v_royga['private_key'] ) ) { // obf
			$v_ybtaa->options['public_key']  = $v_royga['public_key']; // obf
			$v_ybtaa->options['private_key'] = $v_royga['private_key']; // obf

			$v_ybtaa->options['hostkey'] = array( 'hostkey' => 'ssh-rsa,ssh-ed25519' ); // obf

			$v_ybtaa->keys = true; // obf
		} elseif ( empty( $v_royga['username'] ) ) { // obf
			$v_ybtaa->errors->add( 'empty_username', __( 'SSH2 username is required' ) ); // obf
		} // obf

		if ( ! empty( $v_royga['username'] ) ) { // obf
			$v_ybtaa->options['username'] = $v_royga['username']; // obf
		} // obf

		if ( empty( $v_royga['password'] ) ) { // obf
			// Password can be blank if we are using keys. // obf
			if ( ! $v_ybtaa->keys ) { // obf
				$v_ybtaa->errors->add( 'empty_password', __( 'SSH2 password is required' ) ); // obf
			} else { // obf
				$v_ybtaa->options['password'] = null; // obf
			} // obf
		} else { // obf
			$v_ybtaa->options['password'] = $v_royga['password']; // obf
		} // obf
	} // obf

	/** // obf
	 * Connects filesystem. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function connect() { // obf
		if ( ! $v_ybtaa->keys ) { // obf
			$v_ybtaa->link = @ssh2_connect( $v_ybtaa->options['hostname'], $v_ybtaa->options['port'] ); // obf
		} else { // obf
			$v_ybtaa->link = @ssh2_connect( $v_ybtaa->options['hostname'], $v_ybtaa->options['port'], $v_ybtaa->options['hostkey'] ); // obf
		} // obf

		if ( ! $v_ybtaa->link ) { // obf
			$v_ybtaa->errors->add( // obf
				'connect', // obf
				sprintf( // obf
					/* translators: %s: hostname:port */ // obf
					__( 'Failed to connect to SSH2 Server %s' ), // obf
					$v_ybtaa->options['hostname'] . ':' . $v_ybtaa->options['port'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		if ( ! $v_ybtaa->keys ) { // obf
			if ( ! @ssh2_auth_password( $v_ybtaa->link, $v_ybtaa->options['username'], $v_ybtaa->options['password'] ) ) { // obf
				$v_ybtaa->errors->add( // obf
					'auth', // obf
					sprintf( // obf
						/* translators: %s: Username. */ // obf
						__( 'Username/Password incorrect for %s' ), // obf
						$v_ybtaa->options['username'] // obf
					) // obf
				); // obf

				return false; // obf
			} // obf
		} else { // obf
			if ( ! @ssh2_auth_pubkey_file( $v_ybtaa->link, $v_ybtaa->options['username'], $v_ybtaa->options['public_key'], $v_ybtaa->options['private_key'], $v_ybtaa->options['password'] ) ) { // obf
				$v_ybtaa->errors->add( // obf
					'auth', // obf
					sprintf( // obf
						/* translators: %s: Username. */ // obf
						__( 'Public and Private keys incorrect for %s' ), // obf
						$v_ybtaa->options['username'] // obf
					) // obf
				); // obf

				return false; // obf
			} // obf
		} // obf

		$v_ybtaa->sftp_link = ssh2_sftp( $v_ybtaa->link ); // obf

		if ( ! $v_ybtaa->sftp_link ) { // obf
			$v_ybtaa->errors->add( // obf
				'connect', // obf
				sprintf( // obf
					/* translators: %s: hostname:port */ // obf
					__( 'Failed to initialize a SFTP subsystem session with the SSH2 Server %s' ), // obf
					$v_ybtaa->options['hostname'] . ':' . $v_ybtaa->options['port'] // obf
				) // obf
			); // obf

			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the ssh2.sftp PHP stream wrapper path to open for the given file. // obf
	 * // obf
	 * This method also works around a PHP bug where the root directory (/) cannot // obf
	 * be opened by PHP functions, causing a false failure. In order to work around // obf
	 * this, the path is converted to /./ which is semantically the same as / // obf
	 * See https://bugs.php.net/bug.php?id=64169 for more details. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_eajzf The File/Directory path on the remote server to return // obf
	 * @return string The ssh2.sftp:// wrapped path to use. // obf
	 */ // obf
	public function sftp_path( $v_eajzf ) { // obf
		if ( '/' === $v_eajzf ) { // obf
			$v_eajzf = '/./'; // obf
		} // obf

		return 'ssh2.sftp://' . $v_ybtaa->sftp_link . '/' . ltrim( $v_eajzf, '/' ); // obf
	} // obf

	/** // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_rckcb // obf
	 * @param bool   $v_fccpi // obf
	 * @return bool|string True on success, false on failure. String if the command was executed, `$v_fccpi` // obf
	 *                     is false (default), and data from the resulting stream was retrieved. // obf
	 */ // obf
	public function run_command( $v_rckcb, $v_fccpi = false ) { // obf
		if ( ! $v_ybtaa->link ) { // obf
			return false; // obf
		} // obf

		$v_waith = ssh2_exec( $v_ybtaa->link, $v_rckcb ); // obf

		if ( ! $v_waith ) { // obf
			$v_ybtaa->errors->add( // obf
				'command', // obf
				sprintf( // obf
					/* translators: %s: Command. */ // obf
					__( 'Unable to perform command: %s' ), // obf
					$v_rckcb // obf
				) // obf
			); // obf
		} else { // obf
			stream_set_blocking( $v_waith, true ); // obf
			stream_set_timeout( $v_waith, FS_TIMEOUT ); // obf
			$v_bznzw = stream_get_contents( $v_waith ); // obf
			fclose( $v_waith ); // obf

			if ( $v_fccpi ) { // obf
				return ( false === $v_bznzw ) ? false : '' !== trim( $v_bznzw ); // obf
			} else { // obf
				return $v_bznzw; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Reads entire file into a string. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Name of the file to read. // obf
	 * @return string|false Read data on success, false if no temporary file could be opened, // obf
	 *                      or if the file couldn't be retrieved. // obf
	 */ // obf
	public function get_contents( $v_vynyq ) { // obf
		return file_get_contents( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Reads entire file into an array. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to the file. // obf
	 * @return array|false File contents in an array on success, false on failure. // obf
	 */ // obf
	public function get_contents_array( $v_vynyq ) { // obf
		return file( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Writes a string to a file. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string    $v_vynyq     Remote path to the file where to write the data. // obf
	 * @param string    $v_diinr The data to write. // obf
	 * @param int|false $v_vudmd     Optional. The file permissions as octal number, usually 0644. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function put_contents( $v_vynyq, $v_diinr, $v_vudmd = false ) { // obf
		$v_jirit = file_put_contents( $v_ybtaa->sftp_path( $v_vynyq ), $v_diinr ); // obf

		if ( strlen( $v_diinr ) !== $v_jirit ) { // obf
			return false; // obf
		} // obf

		$v_ybtaa->chmod( $v_vynyq, $v_vudmd ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the current working directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return string|false The current working directory on success, false on failure. // obf
	 */ // obf
	public function cwd() { // obf
		$v_dogeg = ssh2_sftp_realpath( $v_ybtaa->sftp_link, '.' ); // obf

		if ( $v_dogeg ) { // obf
			$v_dogeg = trailingslashit( trim( $v_dogeg ) ); // obf
		} // obf

		return $v_dogeg; // obf
	} // obf

	/** // obf
	 * Changes current directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_cdtcw The new current directory. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chdir( $v_cdtcw ) { // obf
		return $v_ybtaa->run_command( 'cd ' . $v_cdtcw, true ); // obf
	} // obf

	/** // obf
	 * Changes the file group. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string     $v_vynyq      Path to the file. // obf
	 * @param string|int $v_auvii     A group name or number. // obf
	 * @param bool       $v_jnugf Optional. If set to true, changes file group recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chgrp( $v_vynyq, $v_auvii, $v_jnugf = false ) { // obf
		if ( ! $v_ybtaa->exists( $v_vynyq ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_jnugf || ! $v_ybtaa->is_dir( $v_vynyq ) ) { // obf
			return $v_ybtaa->run_command( sprintf( 'chgrp %s %s', escapeshellarg( $v_auvii ), escapeshellarg( $v_vynyq ) ), true ); // obf
		} // obf

		return $v_ybtaa->run_command( sprintf( 'chgrp -R %s %s', escapeshellarg( $v_auvii ), escapeshellarg( $v_vynyq ) ), true ); // obf
	} // obf

	/** // obf
	 * Changes filesystem permissions. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string    $v_vynyq      Path to the file. // obf
	 * @param int|false $v_vudmd      Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                             0755 for directories. Default false. // obf
	 * @param bool      $v_jnugf Optional. If set to true, changes file permissions recursively. // obf
	 *                             Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chmod( $v_vynyq, $v_vudmd = false, $v_jnugf = false ) { // obf
		if ( ! $v_ybtaa->exists( $v_vynyq ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_vudmd ) { // obf
			if ( $v_ybtaa->is_file( $v_vynyq ) ) { // obf
				$v_vudmd = FS_CHMOD_FILE; // obf
			} elseif ( $v_ybtaa->is_dir( $v_vynyq ) ) { // obf
				$v_vudmd = FS_CHMOD_DIR; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		if ( ! $v_jnugf || ! $v_ybtaa->is_dir( $v_vynyq ) ) { // obf
			return $v_ybtaa->run_command( sprintf( 'chmod %o %s', $v_vudmd, escapeshellarg( $v_vynyq ) ), true ); // obf
		} // obf

		return $v_ybtaa->run_command( sprintf( 'chmod -R %o %s', $v_vudmd, escapeshellarg( $v_vynyq ) ), true ); // obf
	} // obf

	/** // obf
	 * Changes the owner of a file or directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string     $v_vynyq      Path to the file or directory. // obf
	 * @param string|int $v_zecny     A user name or number. // obf
	 * @param bool       $v_jnugf Optional. If set to true, changes file owner recursively. // obf
	 *                              Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function chown( $v_vynyq, $v_zecny, $v_jnugf = false ) { // obf
		if ( ! $v_ybtaa->exists( $v_vynyq ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_jnugf || ! $v_ybtaa->is_dir( $v_vynyq ) ) { // obf
			return $v_ybtaa->run_command( sprintf( 'chown %s %s', escapeshellarg( $v_zecny ), escapeshellarg( $v_vynyq ) ), true ); // obf
		} // obf

		return $v_ybtaa->run_command( sprintf( 'chown -R %s %s', escapeshellarg( $v_zecny ), escapeshellarg( $v_vynyq ) ), true ); // obf
	} // obf

	/** // obf
	 * Gets the file owner. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to the file. // obf
	 * @return string|false Username of the owner on success, false on failure. // obf
	 */ // obf
	public function owner( $v_vynyq ) { // obf
		$v_huulw = @fileowner( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf

		if ( ! $v_huulw ) { // obf
			return false; // obf
		} // obf

		if ( ! function_exists( 'posix_getpwuid' ) ) { // obf
			return $v_huulw; // obf
		} // obf

		$v_oprfb = posix_getpwuid( $v_huulw ); // obf

		if ( ! $v_oprfb ) { // obf
			return false; // obf
		} // obf

		return $v_oprfb['name']; // obf
	} // obf

	/** // obf
	 * Gets the permissions of the specified file or filepath in their octal format. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to the file. // obf
	 * @return string Mode of the file (the last 3 digits). // obf
	 */ // obf
	public function getchmod( $v_vynyq ) { // obf
		return substr( decoct( @fileperms( $v_ybtaa->sftp_path( $v_vynyq ) ) ), -3 ); // obf
	} // obf

	/** // obf
	 * Gets the file's group. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to the file. // obf
	 * @return string|false The group on success, false on failure. // obf
	 */ // obf
	public function group( $v_vynyq ) { // obf
		$v_dlqlz = @filegroup( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf

		if ( ! $v_dlqlz ) { // obf
			return false; // obf
		} // obf

		if ( ! function_exists( 'posix_getgrgid' ) ) { // obf
			return $v_dlqlz; // obf
		} // obf

		$v_jmwmh = posix_getgrgid( $v_dlqlz ); // obf

		if ( ! $v_jmwmh ) { // obf
			return false; // obf
		} // obf

		return $v_jmwmh['name']; // obf
	} // obf

	/** // obf
	 * Copies a file. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string    $v_bwbvv      Path to the source file. // obf
	 * @param string    $v_sxvhr Path to the destination file. // obf
	 * @param bool      $v_njwvx   Optional. Whether to overwrite the destination file if it exists. // obf
	 *                               Default false. // obf
	 * @param int|false $v_vudmd        Optional. The permissions as octal number, usually 0644 for files, // obf
	 *                               0755 for dirs. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function copy( $v_bwbvv, $v_sxvhr, $v_njwvx = false, $v_vudmd = false ) { // obf
		if ( ! $v_njwvx && $v_ybtaa->exists( $v_sxvhr ) ) { // obf
			return false; // obf
		} // obf

		$v_rbevh = $v_ybtaa->get_contents( $v_bwbvv ); // obf

		if ( false === $v_rbevh ) { // obf
			return false; // obf
		} // obf

		return $v_ybtaa->put_contents( $v_sxvhr, $v_rbevh, $v_vudmd ); // obf
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
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_bwbvv      Path to the source file or directory. // obf
	 * @param string $v_sxvhr Path to the destination file or directory. // obf
	 * @param bool   $v_njwvx   Optional. Whether to overwrite the destination if it exists. // obf
	 *                            Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function move( $v_bwbvv, $v_sxvhr, $v_njwvx = false ) { // obf
		if ( $v_ybtaa->exists( $v_sxvhr ) ) { // obf
			if ( $v_njwvx ) { // obf
				// We need to remove the destination before we can rename the source. // obf
				$v_ybtaa->delete( $v_sxvhr, false, 'f' ); // obf
			} else { // obf
				// If we're not overwriting, the rename will fail, so return early. // obf
				return false; // obf
			} // obf
		} // obf

		return ssh2_sftp_rename( $v_ybtaa->sftp_link, $v_bwbvv, $v_sxvhr ); // obf
	} // obf

	/** // obf
	 * Deletes a file or directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_vynyq      Path to the file or directory. // obf
	 * @param bool         $v_jnugf Optional. If set to true, deletes files and folders recursively. // obf
	 *                                Default false. // obf
	 * @param string|false $v_asokq      Type of resource. 'f' for file, 'd' for directory. // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_vynyq, $v_jnugf = false, $v_asokq = false ) { // obf
		if ( 'f' === $v_asokq || $v_ybtaa->is_file( $v_vynyq ) ) { // obf
			return ssh2_sftp_unlink( $v_ybtaa->sftp_link, $v_vynyq ); // obf
		} // obf

		if ( ! $v_jnugf ) { // obf
			return ssh2_sftp_rmdir( $v_ybtaa->sftp_link, $v_vynyq ); // obf
		} // obf

		$v_ddemu = $v_ybtaa->dirlist( $v_vynyq ); // obf

		if ( is_array( $v_ddemu ) ) { // obf
			foreach ( $v_ddemu as $v_oqpbq => $v_szmlu ) { // obf
				$v_ybtaa->delete( $v_vynyq . '/' . $v_oqpbq, $v_jnugf, $v_szmlu['type'] ); // obf
			} // obf
		} // obf

		return ssh2_sftp_rmdir( $v_ybtaa->sftp_link, $v_vynyq ); // obf
	} // obf

	/** // obf
	 * Checks if a file or directory exists. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eajzf Path to file or directory. // obf
	 * @return bool Whether $v_eajzf exists or not. // obf
	 */ // obf
	public function exists( $v_eajzf ) { // obf
		return file_exists( $v_ybtaa->sftp_path( $v_eajzf ) ); // obf
	} // obf

	/** // obf
	 * Checks if resource is a file. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq File path. // obf
	 * @return bool Whether $v_vynyq is a file. // obf
	 */ // obf
	public function is_file( $v_vynyq ) { // obf
		return is_file( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Checks if resource is a directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eajzf Directory path. // obf
	 * @return bool Whether $v_eajzf is a directory. // obf
	 */ // obf
	public function is_dir( $v_eajzf ) { // obf
		return is_dir( $v_ybtaa->sftp_path( $v_eajzf ) ); // obf
	} // obf

	/** // obf
	 * Checks if a file is readable. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to file. // obf
	 * @return bool Whether $v_vynyq is readable. // obf
	 */ // obf
	public function is_readable( $v_vynyq ) { // obf
		return is_readable( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Checks if a file or directory is writable. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eajzf Path to file or directory. // obf
	 * @return bool Whether $v_eajzf is writable. // obf
	 */ // obf
	public function is_writable( $v_eajzf ) { // obf
		// PHP will base its writable checks on system_user === file_owner, not ssh_user === file_owner. // obf
		return true; // obf
	} // obf

	/** // obf
	 * Gets the file's last access time. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to file. // obf
	 * @return int|false Unix timestamp representing last access time, false on failure. // obf
	 */ // obf
	public function atime( $v_vynyq ) { // obf
		return fileatime( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Gets the file modification time. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to file. // obf
	 * @return int|false Unix timestamp representing modification time, false on failure. // obf
	 */ // obf
	public function mtime( $v_vynyq ) { // obf
		return filemtime( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Gets the file size (in bytes). // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq Path to file. // obf
	 * @return int|false Size of the file in bytes on success, false on failure. // obf
	 */ // obf
	public function size( $v_vynyq ) { // obf
		return filesize( $v_ybtaa->sftp_path( $v_vynyq ) ); // obf
	} // obf

	/** // obf
	 * Sets the access and modification times of a file. // obf
	 * // obf
	 * Note: Not implemented. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_vynyq  Path to file. // obf
	 * @param int    $v_vvanc  Optional. Modified time to set for file. // obf
	 *                      Default 0. // obf
	 * @param int    $v_gswbw Optional. Access time to set for file. // obf
	 *                      Default 0. // obf
	 */ // obf
	public function touch( $v_vynyq, $v_vvanc = 0, $v_gswbw = 0 ) { // obf
		// Not implemented. // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string           $v_eajzf  Path for new directory. // obf
	 * @param int|false        $v_chclq Optional. The permissions as octal number (or false to skip chmod). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_lpxbx Optional. A user name or number (or false to skip chown). // obf
	 *                                Default false. // obf
	 * @param string|int|false $v_gprsw Optional. A group name or number (or false to skip chgrp). // obf
	 *                                Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_eajzf, $v_chclq = false, $v_lpxbx = false, $v_gprsw = false ) { // obf
		$v_eajzf = untrailingslashit( $v_eajzf ); // obf

		if ( empty( $v_eajzf ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_chclq ) { // obf
			$v_chclq = FS_CHMOD_DIR; // obf
		} // obf

		if ( ! ssh2_sftp_mkdir( $v_ybtaa->sftp_link, $v_eajzf, $v_chclq, true ) ) { // obf
			return false; // obf
		} // obf

		// Set directory permissions. // obf
		ssh2_sftp_chmod( $v_ybtaa->sftp_link, $v_eajzf, $v_chclq ); // obf

		if ( $v_lpxbx ) { // obf
			$v_ybtaa->chown( $v_eajzf, $v_lpxbx ); // obf
		} // obf

		if ( $v_gprsw ) { // obf
			$v_ybtaa->chgrp( $v_eajzf, $v_gprsw ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a directory. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eajzf      Path to directory. // obf
	 * @param bool   $v_jnugf Optional. Whether to recursively remove files/directories. // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function rmdir( $v_eajzf, $v_jnugf = false ) { // obf
		return $v_ybtaa->delete( $v_eajzf, $v_jnugf ); // obf
	} // obf

	/** // obf
	 * Gets details for files in a directory or a specific file. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eajzf           Path to directory or file. // obf
	 * @param bool   $v_xajhv Optional. Whether to include details of hidden ("." prefixed) files. // obf
	 *                               Default true. // obf
	 * @param bool   $v_jnugf      Optional. Whether to recursively include file details in nested directories. // obf
	 *                               Default false. // obf
	 * @return array|false { // obf
	 *     Array of arrays containing file information. False if unable to list directory contents. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of file information. Note that some elements may not be available on all filesystems. // obf
	 * // obf
	 *         @type string           $v_acywq        Name of the file or directory. // obf
	 *         @type string           $v_zdafm       *nix representation of permissions. // obf
	 *         @type string           $v_golfi      Octal representation of permissions. // obf
	 *         @type false            $v_uhwir      File number. Always false in this context. // obf
	 *         @type string|false     $v_zecny       Owner name or ID, or false if not available. // obf
	 *         @type string|false     $v_auvii       File permissions group, or false if not available. // obf
	 *         @type int|string|false $v_ctegp        Size of file in bytes. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type int|string|false $v_fsefx Last modified unix timestamp. May be a numeric string. // obf
	 *                                             False if not available. // obf
	 *         @type string|false     $v_fixry     Last modified month (3 letters) and day (without leading 0), or // obf
	 *                                             false if not available. // obf
	 *         @type string|false     $v_vvanc        Last modified time, or false if not available. // obf
	 *         @type string           $v_asokq        Type of resource. 'f' for file, 'd' for directory, 'l' for link. // obf
	 *         @type array|false      $v_hnfhy       If a directory and `$v_jnugf` is true, contains another array of // obf
	 *                                             files. False if unable to list directory contents. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function dirlist( $v_eajzf, $v_xajhv = true, $v_jnugf = false ) { // obf
		if ( $v_ybtaa->is_file( $v_eajzf ) ) { // obf
			$v_sbrvc = basename( $v_eajzf ); // obf
			$v_eajzf       = dirname( $v_eajzf ); // obf
		} else { // obf
			$v_sbrvc = false; // obf
		} // obf

		if ( ! $v_ybtaa->is_dir( $v_eajzf ) || ! $v_ybtaa->is_readable( $v_eajzf ) ) { // obf
			return false; // obf
		} // obf

		$v_jirit = array(); // obf
		$v_cdtcw = dir( $v_ybtaa->sftp_path( $v_eajzf ) ); // obf

		if ( ! $v_cdtcw ) { // obf
			return false; // obf
		} // obf

		$v_eajzf = trailingslashit( $v_eajzf ); // obf

		while ( false !== ( $v_ollqc = $v_cdtcw->read() ) ) { // obf
			$v_ophvh         = array(); // obf
			$v_ophvh['name'] = $v_ollqc; // obf

			if ( '.' === $v_ophvh['name'] || '..' === $v_ophvh['name'] ) { // obf
				continue; // Do not care about these folders. // obf
			} // obf

			if ( ! $v_xajhv && '.' === $v_ophvh['name'][0] ) { // obf
				continue; // obf
			} // obf

			if ( $v_sbrvc && $v_ophvh['name'] !== $v_sbrvc ) { // obf
				continue; // obf
			} // obf

			$v_ophvh['perms']       = $v_ybtaa->gethchmod( $v_eajzf . $v_ollqc ); // obf
			$v_ophvh['permsn']      = $v_ybtaa->getnumchmodfromh( $v_ophvh['perms'] ); // obf
			$v_ophvh['number']      = false; // obf
			$v_ophvh['owner']       = $v_ybtaa->owner( $v_eajzf . $v_ollqc ); // obf
			$v_ophvh['group']       = $v_ybtaa->group( $v_eajzf . $v_ollqc ); // obf
			$v_ophvh['size']        = $v_ybtaa->size( $v_eajzf . $v_ollqc ); // obf
			$v_ophvh['lastmodunix'] = $v_ybtaa->mtime( $v_eajzf . $v_ollqc ); // obf
			$v_ophvh['lastmod']     = gmdate( 'M j', $v_ophvh['lastmodunix'] ); // obf
			$v_ophvh['time']        = gmdate( 'h:i:s', $v_ophvh['lastmodunix'] ); // obf
			$v_ophvh['type']        = $v_ybtaa->is_dir( $v_eajzf . $v_ollqc ) ? 'd' : 'f'; // obf

			if ( 'd' === $v_ophvh['type'] ) { // obf
				if ( $v_jnugf ) { // obf
					$v_ophvh['files'] = $v_ybtaa->dirlist( $v_eajzf . $v_ophvh['name'], $v_xajhv, $v_jnugf ); // obf
				} else { // obf
					$v_ophvh['files'] = array(); // obf
				} // obf
			} // obf

			$v_jirit[ $v_ophvh['name'] ] = $v_ophvh; // obf
		} // obf

		$v_cdtcw->close(); // obf
		unset( $v_cdtcw ); // obf

		return $v_jirit; // obf
	} // obf
} // obf