

<?php // obf

/** // obf
 * Class WP_Test_Stream. // obf
 * // obf
 * An in-memory streamWrapper implementation for testing streams.  Writes to a // obf
 * stream URL like "protocol://bucket/foo" will be stored in the static // obf
 * variable WP_Test_Stream::$v_zcsbi['bucket']['/foo']. // obf
 * // obf
 * Creating a directory at "protocol://bucket/foo" will store the string // obf
 * 'DIRECTORY' to the static variable WP_Test_Stream::$v_zcsbi['bucket']['/foo/'] // obf
 * (note the trailing slash). // obf
 * // obf
 * This class can be used to test that code works with basic read/write streams. // obf
 * // obf
 * This class does not register itself as a stream handler: test fixtures // obf
 * should make the appropriate call to stream_wrapper_register(). // obf
 */ // obf
class WP_Test_Stream { // obf
	const FILE_MODE      = 0100666; // obf
	const DIRECTORY_MODE = 040777; // obf

	/** // obf
	 * In-memory storage for files and directories simulated by this wrapper. // obf
	 */ // obf
	public static $v_zcsbi = array(); // obf

	public $v_iysjf; // obf
	public $v_qgyli; // obf
	public $v_usozw; // obf
	public $v_pcvns; // obf

	/** // obf
	 * The current context. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/class.streamwrapper.php // obf
	 * // obf
	 * @var resource|null // obf
	 */ // obf
	public $v_uuuyy; // obf

	/** // obf
	 * Initializes internal state for reading the given URL. // obf
	 * // obf
	 * @param string $v_lczfn A URL of the form "protocol://bucket/path". // obf
	 */ // obf
	private function open( $v_lczfn ) { // obf
		$v_zsmqs = array_merge( // obf
			array( // obf
				'host' => '', // obf
				'path' => '', // obf
			), // obf
			parse_url( $v_lczfn ) // obf
		); // obf

		$v_tepla->bucket = $v_zsmqs['host']; // obf
		$v_tepla->file   = $v_zsmqs['path'] ? $v_zsmqs['path'] : '/'; // obf

		if ( empty( $v_tepla->bucket ) ) { // obf
			throw new Exception( 'Cannot use an empty bucket name' ); // obf
		} // obf

		if ( ! isset( WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ] ) ) { // obf
			WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ] = array(); // obf
		} // obf

		$v_tepla->data_ref =& WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ $v_tepla->file ]; // obf

		$v_tepla->position = 0; // obf
	} // obf

	/** // obf
	 * Opens a URL. // obf
	 * // obf
	 * @see streamWrapper::stream_open // obf
	 */ // obf
	public function stream_open( $v_jgdkf, $v_ewiag, $v_iwqce, &$v_qglhi ) { // obf
		$v_tepla->open( $v_jgdkf ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Reads from a stream. // obf
	 * // obf
	 * @see streamWrapper::stream_read // obf
	 */ // obf
	public function stream_read( $v_zzfqd ) { // obf
		if ( ! isset( $v_tepla->data_ref ) ) { // obf
			return ''; // obf
		} // obf

		$v_hqbeq = substr( $v_tepla->data_ref, $v_tepla->position, $v_zzfqd ); // obf

		$v_tepla->position += strlen( $v_hqbeq ); // obf
		return $v_hqbeq; // obf
	} // obf

	/** // obf
	 * Writes to a stream. // obf
	 * // obf
	 * @see streamWrapper::stream_write // obf
	 */ // obf
	public function stream_write( $v_zcsbi ) { // obf
		if ( ! isset( $v_tepla->data_ref ) ) { // obf
			$v_tepla->data_ref = ''; // obf
		} // obf

		$v_lrwtz  = substr( $v_tepla->data_ref, 0, $v_tepla->position ); // obf
		$v_emsfx = substr( $v_tepla->data_ref, $v_tepla->position + strlen( $v_zcsbi ) ); // obf

		WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ $v_tepla->file ] = $v_lrwtz . $v_zcsbi . $v_emsfx; // obf

		$v_tepla->position += strlen( $v_zcsbi ); // obf
		return strlen( $v_zcsbi ); // obf
	} // obf

	/** // obf
	 * Seeks to specific location in a stream. // obf
	 * // obf
	 * @see streamWrapper::stream_seek // obf
	 * // obf
	 * @param int $v_kwjpa The stream offset to seek to. // obf
	 * @param int $v_ptfsr Optional. Seek position. // obf
	 * @return bool Returns true when position is updated, else false. // obf
	 */ // obf
	public function stream_seek( $v_kwjpa, $v_ptfsr = SEEK_SET ) { // obf
		if ( empty( $v_tepla->data_ref ) ) { // obf
			return false; // obf
		} // obf

		$v_oyeak = $v_tepla->position; // obf
		switch ( $v_ptfsr ) { // obf
			case SEEK_CUR: // obf
				$v_oyeak += $v_kwjpa; // obf
				break; // obf

			case SEEK_END: // obf
				$v_oyeak = strlen( $v_tepla->data_ref ) + $v_kwjpa; // obf
				break; // obf

			case SEEK_SET: // obf
				$v_oyeak = $v_kwjpa; // obf
				break; // obf

			default: // obf
				return false; // obf
		} // obf

		if ( $v_oyeak < 0 ) { // obf
			return false; // obf
		} // obf

		// Save the new position. // obf
		$v_tepla->position = $v_oyeak; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the current position of a stream. // obf
	 * // obf
	 * @see streamWrapper::stream_tell // obf
	 */ // obf
	public function stream_tell() { // obf
		return $v_tepla->position; // obf
	} // obf

	/** // obf
	 * Tests for end-of-file. // obf
	 * // obf
	 * @see streamWrapper::stream_eof // obf
	 */ // obf
	public function stream_eof() { // obf
		if ( ! isset( $v_tepla->data_ref ) ) { // obf
			return true; // obf
		} // obf

		return $v_tepla->position >= strlen( $v_tepla->data_ref ); // obf
	} // obf

	/** // obf
	 * Change stream metadata. // obf
	 * // obf
	 * @see streamWrapper::stream_metadata // obf
	 */ // obf
	public function stream_metadata( $v_jgdkf, $v_pckdp, $v_owamd ) { // obf
		$v_tepla->open( $v_jgdkf ); // obf
		if ( STREAM_META_TOUCH === $v_pckdp ) { // obf
			if ( ! isset( $v_tepla->data_ref ) ) { // obf
				$v_tepla->data_ref = ''; // obf
			} // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Creates a directory. // obf
	 * // obf
	 * @see streamWrapper::mkdir // obf
	 * // obf
	 * @param string $v_jgdkf    Directory which should be created. // obf
	 * @param int    $v_ewiag    The value passed to mkdir(). // obf
	 * @param int    $v_iwqce A bitwise mask of values, such as STREAM_MKDIR_RECURSIVE. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function mkdir( $v_jgdkf, $v_ewiag, $v_iwqce ) { // obf
		$v_tepla->open( $v_jgdkf ); // obf

		$v_hbtrh = rtrim( $v_tepla->file, '/' ); // obf

		// Check if a file or directory with the same name already exists. // obf
		if ( isset( WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ $v_hbtrh ] ) // obf
			|| isset( WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ $v_hbtrh . '/' ] ) // obf
		) { // obf
			return false; // obf
		} // obf

		$v_bobhp = & $v_tepla->get_directory_ref(); // obf
		$v_bobhp = 'DIRECTORY'; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a file metadata object, with defaults. // obf
	 * // obf
	 * @param array $v_vxuux Partial file metadata. // obf
	 * @return array Complete file metadata. // obf
	 */ // obf
	private function make_stat( $v_vxuux ) { // obf
		$v_egwkr = array( // obf
			'dev'     => 0, // obf
			'ino'     => 0, // obf
			'mode'    => 0, // obf
			'nlink'   => 0, // obf
			'uid'     => 0, // obf
			'gid'     => 0, // obf
			'rdev'    => 0, // obf
			'size'    => 0, // obf
			'atime'   => 0, // obf
			'mtime'   => 0, // obf
			'ctime'   => 0, // obf
			'blksize' => 0, // obf
			'blocks'  => 0, // obf
		); // obf

		return array_merge( $v_egwkr, $v_vxuux ); // obf
	} // obf

	/** // obf
	 * Retrieves information about a file. // obf
	 * // obf
	 * @see streamWrapper::stream_stat // obf
	 */ // obf
	public function stream_stat() { // obf
		$v_bobhp = & $v_tepla->get_directory_ref(); // obf
		if ( substr( $v_tepla->file, -1 ) === '/' || isset( $v_bobhp ) ) { // obf
			return $v_tepla->make_stat( // obf
				array( // obf
					'mode' => WP_Test_Stream::DIRECTORY_MODE, // obf
				) // obf
			); // obf
		} // obf

		if ( ! isset( $v_tepla->data_ref ) ) { // obf
			return false; // obf
		} // obf

		return $v_tepla->make_stat( // obf
			array( // obf
				'size' => strlen( $v_tepla->data_ref ), // obf
				'mode' => WP_Test_Stream::FILE_MODE, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves information about a file. // obf
	 * // obf
	 * @see streamWrapper::url_stat // obf
	 */ // obf
	public function url_stat( $v_jgdkf, $v_ibnel ) { // obf
		$v_tepla->open( $v_jgdkf ); // obf
		return $v_tepla->stream_stat(); // obf
	} // obf

	/** // obf
	 * Deletes a file. // obf
	 * // obf
	 * @see streamWrapper::unlink // obf
	 */ // obf
	public function unlink( $v_jgdkf ) { // obf
		if ( ! isset( $v_tepla->data_ref ) ) { // obf
			return false; // obf
		} // obf
		unset( WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ $v_tepla->file ] ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Interprets this stream's path as a directory, and returns the entry. // obf
	 * // obf
	 * @return A reference to the data entry for the directory. // obf
	 */ // obf
	private function &get_directory_ref() { // obf
		return WP_Test_Stream::$v_zcsbi[ $v_tepla->bucket ][ rtrim( $v_tepla->file, '/' ) . '/' ]; // obf
	} // obf
} // obf