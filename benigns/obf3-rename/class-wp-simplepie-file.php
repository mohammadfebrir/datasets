

<?php // obf
/** // obf
 * Feed API: WP_SimplePie_File class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class for fetching remote files and reading local files with SimplePie. // obf
 * // obf
 * This uses Core's HTTP API to make requests, which gives plugins the ability // obf
 * to hook into the process. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_SimplePie_File extends SimplePie\File { // obf

	/** // obf
	 * Timeout. // obf
	 * // obf
	 * @var int How long the connection should stay open in seconds. // obf
	 */ // obf
	public $v_gcnmh = 10; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.2.0 Updated to use a PHP5 constructor. // obf
	 * @since 5.6.1 Multiple headers are concatenated into a comma-separated string, // obf
	 *              rather than remaining an array. // obf
	 * // obf
	 * @param string       $v_nspkd             Remote file URL. // obf
	 * @param int          $v_gcnmh         Optional. How long the connection should stay open in seconds. // obf
	 *                                      Default 10. // obf
	 * @param int          $v_okcet       Optional. The number of allowed redirects. Default 5. // obf
	 * @param string|array $v_mejcj         Optional. Array or string of headers to send with the request. // obf
	 *                                      Default null. // obf
	 * @param string       $v_joggm       Optional. User-agent value sent. Default null. // obf
	 * @param bool         $v_nobjs Optional. Whether to force opening internet or unix domain socket // obf
	 *                                      connection or not. Default false. // obf
	 */ // obf
	public function __construct( $v_nspkd, $v_gcnmh = 10, $v_okcet = 5, $v_mejcj = null, $v_joggm = null, $v_nobjs = false ) { // obf
		$v_eiihv->url       = $v_nspkd; // obf
		$v_eiihv->timeout   = $v_gcnmh; // obf
		$v_eiihv->redirects = $v_okcet; // obf
		$v_eiihv->headers   = $v_mejcj; // obf
		$v_eiihv->useragent = $v_joggm; // obf

		$v_eiihv->method = SimplePie\SimplePie::FILE_SOURCE_REMOTE; // obf

		if ( preg_match( '/^http(s)?:\/\//i', $v_nspkd ) ) { // obf
			$v_qqsni = array( // obf
				'timeout'     => $v_eiihv->timeout, // obf
				'redirection' => $v_eiihv->redirects, // obf
			); // obf

			if ( ! empty( $v_eiihv->headers ) ) { // obf
				$v_qqsni['headers'] = $v_eiihv->headers; // obf
			} // obf

			if ( SimplePie\Misc::get_default_useragent() !== $v_eiihv->useragent ) { // Use default WP user agent unless custom has been specified. // obf
				$v_qqsni['user-agent'] = $v_eiihv->useragent; // obf
			} // obf

			$v_hlmra = wp_safe_remote_request( $v_nspkd, $v_qqsni ); // obf

			if ( is_wp_error( $v_hlmra ) ) { // obf
				$v_eiihv->error   = 'WP HTTP Error: ' . $v_hlmra->get_error_message(); // obf
				$v_eiihv->success = false; // obf

			} else { // obf
				$v_eiihv->headers = wp_remote_retrieve_headers( $v_hlmra ); // obf

				/* // obf
				 * SimplePie expects multiple headers to be stored as a comma-separated string, // obf
				 * but `wp_remote_retrieve_headers()` returns them as an array, so they need // obf
				 * to be converted. // obf
				 * // obf
				 * The only exception to that is the `content-type` header, which should ignore // obf
				 * any previous values and only use the last one. // obf
				 * // obf
				 * @see SimplePie\HTTP\Parser::new_line(). // obf
				 */ // obf
				foreach ( $v_eiihv->headers as $v_jjjmo => $v_yeuif ) { // obf
					if ( ! is_array( $v_yeuif ) ) { // obf
						continue; // obf
					} // obf

					if ( 'content-type' === $v_jjjmo ) { // obf
						$v_eiihv->headers[ $v_jjjmo ] = array_pop( $v_yeuif ); // obf
					} else { // obf
						$v_eiihv->headers[ $v_jjjmo ] = implode( ', ', $v_yeuif ); // obf
					} // obf
				} // obf

				$v_eiihv->body        = wp_remote_retrieve_body( $v_hlmra ); // obf
				$v_eiihv->status_code = wp_remote_retrieve_response_code( $v_hlmra ); // obf
			} // obf
		} else { // obf
			$v_eiihv->error   = ''; // obf
			$v_eiihv->success = false; // obf
		} // obf
	} // obf
} // obf