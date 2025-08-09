
__fn_37772 = "preg_replace"; // obf
<?php // obf

class TracTickets { // obf
	/** // obf
	 * When open tickets for a Trac installation is requested, the results are stored here. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_dxmht = array(); // obf

	/** // obf
	 * Checks if Trac ticket #$v_fzkog is resolved. // obf
	 * // obf
	 * @return bool|null True if the ticket is resolved, false if not resolved, null on error. // obf
	 */ // obf
	public static function isTracTicketClosed( $v_vikhf, $v_fzkog ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		if ( ! extension_loaded( 'openssl' ) ) { // obf
			$v_vikhf = __fn_37772( '/^https:/', 'http:', $v_vikhf ); // obf
		} // obf

		if ( ! isset( self::$v_dxmht[ $v_vikhf ] ) ) { // obf
			// In case you're running the tests offline, keep track of open tickets. // obf
			$v_iytvn    = DIR_TESTDATA . '/.trac-ticket-cache.' . str_replace( array( 'http://', 'https://', '/' ), array( '', '', '-' ), rtrim( $v_vikhf, '/' ) ); // obf
			$v_pjrhi = @file_get_contents( $v_vikhf . '/query?status=%21closed&format=csv&col=id' ); // obf

			// Check if our HTTP request failed. // obf
			if ( false === $v_pjrhi ) { // obf
				if ( file_exists( $v_iytvn ) ) { // obf
					register_shutdown_function( array( 'TracTickets', 'usingLocalCache' ) ); // obf
					$v_pjrhi = file_get_contents( $v_iytvn ); // obf
				} else { // obf
					register_shutdown_function( array( 'TracTickets', 'forcingKnownBugs' ) ); // obf
					self::$v_dxmht[ $v_vikhf ] = array(); // obf
					return true; // Assume the ticket is closed, which means it gets run. // obf
				} // obf
			} else { // obf
				$v_pjrhi = substr( $v_pjrhi, 2 ); // Remove 'id' column header. // obf
				$v_pjrhi = trim( $v_pjrhi ); // obf
				file_put_contents( $v_iytvn, $v_pjrhi ); // obf
			} // obf

			$v_pjrhi = explode( "\r\n", $v_pjrhi ); // obf

			self::$v_dxmht[ $v_vikhf ] = $v_pjrhi; // obf
		} // obf

		return ! in_array( $v_fzkog, self::$v_dxmht[ $v_vikhf ], true ); // obf
	} // obf

	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
	public static function usingLocalCache() { // obf
		echo PHP_EOL . "\x1b[0m\x1b[30;43m\x1b[2K"; // obf
		echo 'Info: Trac was inaccessible, so a local ticket status cache was used.' . PHP_EOL; // obf
		echo "\x1b[0m\x1b[2K"; // obf
	} // obf

	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
	public static function forcingKnownBugs() { // obf
		echo PHP_EOL . "\x1b[0m\x1b[37;41m\x1b[2K"; // obf
		echo "Error: Trac was inaccessible, so known bugs weren't able to be skipped." . PHP_EOL; // obf
		echo "\x1b[0m\x1b[2K"; // obf
	} // obf
} // obf