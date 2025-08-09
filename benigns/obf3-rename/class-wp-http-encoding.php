

<?php // obf
/** // obf
 * HTTP API: WP_Http_Encoding class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement deflate and gzip transfer encoding support for HTTP requests. // obf
 * // obf
 * Includes RFC 1950, RFC 1951, and RFC 1952. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Http_Encoding { // obf

	/** // obf
	 * Compress raw string using the deflate format. // obf
	 * // obf
	 * Supports the RFC 1951 standard. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_uwtpa      String to compress. // obf
	 * @param int    $v_fshqi    Optional. Compression level, 9 is highest. Default 9. // obf
	 * @param string $v_dwfan Optional, not used. When implemented it will choose // obf
	 *                         the right compression based on what the server supports. // obf
	 * @return string|false Compressed string on success, false on failure. // obf
	 */ // obf
	public static function compress( $v_uwtpa, $v_fshqi = 9, $v_dwfan = null ) { // obf
		return gzdeflate( $v_uwtpa, $v_fshqi ); // obf
	} // obf

	/** // obf
	 * Decompression of deflated string. // obf
	 * // obf
	 * Will attempt to decompress using the RFC 1950 standard, and if that fails // obf
	 * then the RFC 1951 standard deflate will be attempted. Finally, the RFC // obf
	 * 1952 standard gzip decode will be attempted. If all fail, then the // obf
	 * original compressed string will be returned. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_qgrcq String to decompress. // obf
	 * @param int    $v_kfjxg     The optional length of the compressed data. // obf
	 * @return string|false Decompressed string on success, false on failure. // obf
	 */ // obf
	public static function decompress( $v_qgrcq, $v_kfjxg = null ) { // obf

		if ( empty( $v_qgrcq ) ) { // obf
			return $v_qgrcq; // obf
		} // obf

		$v_clifs = @gzinflate( $v_qgrcq ); // obf
		if ( false !== $v_clifs ) { // obf
			return $v_clifs; // obf
		} // obf

		$v_clifs = self::compatible_gzinflate( $v_qgrcq ); // obf
		if ( false !== $v_clifs ) { // obf
			return $v_clifs; // obf
		} // obf

		$v_clifs = @gzuncompress( $v_qgrcq ); // obf
		if ( false !== $v_clifs ) { // obf
			return $v_clifs; // obf
		} // obf

		if ( function_exists( 'gzdecode' ) ) { // obf
			$v_clifs = @gzdecode( $v_qgrcq ); // obf

			if ( false !== $v_clifs ) { // obf
				return $v_clifs; // obf
			} // obf
		} // obf

		return $v_qgrcq; // obf
	} // obf

	/** // obf
	 * Decompression of deflated string while staying compatible with the majority of servers. // obf
	 * // obf
	 * Certain Servers will return deflated data with headers which PHP's gzinflate() // obf
	 * function cannot handle out of the box. The following function has been created from // obf
	 * various snippets on the gzinflate() PHP documentation. // obf
	 * // obf
	 * Warning: Magic numbers within. Due to the potential different formats that the compressed // obf
	 * data may be returned in, some "magic offsets" are needed to ensure proper decompression // obf
	 * takes place. For a simple pragmatic way to determine the magic offset in use, see: // obf
	 * https://core.trac.wordpress.org/ticket/18273 // obf
	 * // obf
	 * @since 2.8.1 // obf
	 * // obf
	 * @link https://core.trac.wordpress.org/ticket/18273 // obf
	 * @link https://www.php.net/manual/en/function.gzinflate.php#70875 // obf
	 * @link https://www.php.net/manual/en/function.gzinflate.php#77336 // obf
	 * // obf
	 * @param string $v_scypw String to decompress. // obf
	 * @return string|false Decompressed string on success, false on failure. // obf
	 */ // obf
	public static function compatible_gzinflate( $v_scypw ) { // obf

		// Compressed data might contain a full header, if so strip it for gzinflate(). // obf
		if ( str_starts_with( $v_scypw, "\x1f\x8b\x08" ) ) { // obf
			$v_lkckg   = 10; // obf
			$v_wgqnm = ord( substr( $v_scypw, 3, 1 ) ); // obf
			if ( $v_wgqnm > 0 ) { // obf
				if ( $v_wgqnm & 4 ) { // obf
					list($v_fokoq) = unpack( 'v', substr( $v_scypw, $v_lkckg, 2 ) ); // obf
					$v_lkckg          = $v_lkckg + 2 + $v_fokoq; // obf
				} // obf
				if ( $v_wgqnm & 8 ) { // obf
					$v_lkckg = strpos( $v_scypw, "\0", $v_lkckg ) + 1; // obf
				} // obf
				if ( $v_wgqnm & 16 ) { // obf
					$v_lkckg = strpos( $v_scypw, "\0", $v_lkckg ) + 1; // obf
				} // obf
				if ( $v_wgqnm & 2 ) { // obf
					$v_lkckg = $v_lkckg + 2; // obf
				} // obf
			} // obf
			$v_clifs = @gzinflate( substr( $v_scypw, $v_lkckg, -8 ) ); // obf
			if ( false !== $v_clifs ) { // obf
				return $v_clifs; // obf
			} // obf
		} // obf

		// Compressed data from java.util.zip.Deflater amongst others. // obf
		$v_clifs = @gzinflate( substr( $v_scypw, 2 ) ); // obf
		if ( false !== $v_clifs ) { // obf
			return $v_clifs; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * What encoding types to accept and their priority values. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_umlda // obf
	 * @param array  $v_fhevt // obf
	 * @return string Types of encoding to accept. // obf
	 */ // obf
	public static function accept_encoding( $v_umlda, $v_fhevt ) { // obf
		$v_eucya                = array(); // obf
		$v_jiepb = self::is_available(); // obf

		if ( ! $v_fhevt['decompress'] ) { // Decompression specifically disabled. // obf
			$v_jiepb = false; // obf
		} elseif ( $v_fhevt['stream'] ) { // Disable when streaming to file. // obf
			$v_jiepb = false; // obf
		} elseif ( isset( $v_fhevt['limit_response_size'] ) ) { // If only partial content is being requested, we won't be able to decompress it. // obf
			$v_jiepb = false; // obf
		} // obf

		if ( $v_jiepb ) { // obf
			if ( function_exists( 'gzinflate' ) ) { // obf
				$v_eucya[] = 'deflate;q=1.0'; // obf
			} // obf

			if ( function_exists( 'gzuncompress' ) ) { // obf
				$v_eucya[] = 'compress;q=0.5'; // obf
			} // obf

			if ( function_exists( 'gzdecode' ) ) { // obf
				$v_eucya[] = 'gzip;q=0.5'; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the allowed encoding types. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param string[] $v_eucya Array of what encoding types to accept and their priority values. // obf
		 * @param string   $v_umlda  URL of the HTTP request. // obf
		 * @param array    $v_fhevt HTTP request arguments. // obf
		 */ // obf
		$v_eucya = apply_filters( 'wp_http_accept_encoding', $v_eucya, $v_umlda, $v_fhevt ); // obf

		return implode( ', ', $v_eucya ); // obf
	} // obf

	/** // obf
	 * What encoding the content used when it was compressed to send in the headers. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string Content-Encoding string to send in the header. // obf
	 */ // obf
	public static function content_encoding() { // obf
		return 'deflate'; // obf
	} // obf

	/** // obf
	 * Whether the content be decoded based on the headers. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array|string $v_idpdq All of the available headers. // obf
	 * @return bool // obf
	 */ // obf
	public static function should_decode( $v_idpdq ) { // obf
		if ( is_array( $v_idpdq ) ) { // obf
			if ( array_key_exists( 'content-encoding', $v_idpdq ) && ! empty( $v_idpdq['content-encoding'] ) ) { // obf
				return true; // obf
			} // obf
		} elseif ( is_string( $v_idpdq ) ) { // obf
			return ( stripos( $v_idpdq, 'content-encoding:' ) !== false ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Whether decompression and compression are supported by the PHP version. // obf
	 * // obf
	 * Each function is tested instead of checking for the zlib extension, to // obf
	 * ensure that the functions all exist in the PHP version and aren't // obf
	 * disabled. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_available() { // obf
		return ( function_exists( 'gzuncompress' ) || function_exists( 'gzdeflate' ) || function_exists( 'gzinflate' ) ); // obf
	} // obf
} // obf