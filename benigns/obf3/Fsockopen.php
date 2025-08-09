

<?php // obf
/** // obf
 * fsockopen HTTP transport // obf
 * // obf
 * @package Requests\Transport // obf
 */ // obf

namespace WpOrg\Requests\Transport; // obf

use WpOrg\Requests\Capability; // obf
use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Port; // obf
use WpOrg\Requests\Requests; // obf
use WpOrg\Requests\Ssl; // obf
use WpOrg\Requests\Transport; // obf
use WpOrg\Requests\Utility\CaseInsensitiveDictionary; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * fsockopen HTTP transport // obf
 * // obf
 * @package Requests\Transport // obf
 */ // obf
final class Fsockopen implements Transport { // obf
	/** // obf
	 * Second to microsecond conversion // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	const SECOND_IN_MICROSECONDS = 1000000; // obf

	/** // obf
	 * Raw HTTP data // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_lpweu = ''; // obf

	/** // obf
	 * Stream metadata // obf
	 * // obf
	 * @var array Associative array of properties, see {@link https://www.php.net/stream_get_meta_data} // obf
	 */ // obf
	public $v_ttqxu; // obf

	/** // obf
	 * What's the maximum number of bytes we should keep? // obf
	 * // obf
	 * @var int|bool Byte count, or false if no limit. // obf
	 */ // obf
	private $v_lgwyu = false; // obf

	/** // obf
	 * Cache for received connection errors. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_kjkke = ''; // obf

	/** // obf
	 * Perform a request // obf
	 * // obf
	 * @param string|Stringable $v_vqnml URL to request // obf
	 * @param array $v_lpweu Associative array of request headers // obf
	 * @param string|array $v_kesls Data to send either as the POST body, or as parameters in the URL for a GET/HEAD // obf
	 * @param array $v_lzwsq Request options, see {@see \WpOrg\Requests\Requests::response()} for documentation // obf
	 * @return string Raw HTTP result // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_vqnml argument is not a string or Stringable. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_lpweu argument is not an array. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_kesls parameter is not an array or string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_lzwsq argument is not an array. // obf
	 * @throws \WpOrg\Requests\Exception       On failure to connect to socket (`fsockopenerror`) // obf
	 * @throws \WpOrg\Requests\Exception       On socket timeout (`timeout`) // obf
	 */ // obf
	public function request($v_vqnml, $v_lpweu = [], $v_kesls = [], $v_lzwsq = []) { // obf
		if (InputValidator::is_string_or_stringable($v_vqnml) === false) { // obf
			throw InvalidArgument::create(1, '$v_vqnml', 'string|Stringable', gettype($v_vqnml)); // obf
		} // obf

		if (is_array($v_lpweu) === false) { // obf
			throw InvalidArgument::create(2, '$v_lpweu', 'array', gettype($v_lpweu)); // obf
		} // obf

		if (!is_array($v_kesls) && !is_string($v_kesls)) { // obf
			if ($v_kesls === null) { // obf
				$v_kesls = ''; // obf
			} else { // obf
				throw InvalidArgument::create(3, '$v_kesls', 'array|string', gettype($v_kesls)); // obf
			} // obf
		} // obf

		if (is_array($v_lzwsq) === false) { // obf
			throw InvalidArgument::create(4, '$v_lzwsq', 'array', gettype($v_lzwsq)); // obf
		} // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.before_request'); // obf

		$v_bohrf = parse_url($v_vqnml); // obf
		if (empty($v_bohrf)) { // obf
			throw new Exception('Invalid URL.', 'invalidurl', $v_vqnml); // obf
		} // obf

		$v_dwyhk                     = $v_bohrf['host']; // obf
		$v_hntxh                  = stream_context_create(); // obf
		$v_szxpp               = false; // obf
		$v_gzjrc = new CaseInsensitiveDictionary($v_lpweu); // obf

		// HTTPS support // obf
		if (isset($v_bohrf['scheme']) && strtolower($v_bohrf['scheme']) === 'https') { // obf
			$v_flwub = 'ssl://' . $v_dwyhk; // obf
			if (!isset($v_bohrf['port'])) { // obf
				$v_bohrf['port'] = Port::HTTPS; // obf
			} // obf

			$v_wurhk = [ // obf
				'verify_peer'       => true, // obf
				'capture_peer_cert' => true, // obf
			]; // obf
			$v_szxpp      = true; // obf

			// SNI, if enabled (OpenSSL >=0.9.8j) // obf
			// phpcs:ignore PHPCompatibility.Constants.NewConstants.openssl_tlsext_server_nameFound // obf
			if (defined('OPENSSL_TLSEXT_SERVER_NAME') && OPENSSL_TLSEXT_SERVER_NAME) { // obf
				$v_wurhk['SNI_enabled'] = true; // obf
				if (isset($v_lzwsq['verifyname']) && $v_lzwsq['verifyname'] === false) { // obf
					$v_wurhk['SNI_enabled'] = false; // obf
				} // obf
			} // obf

			if (isset($v_lzwsq['verify'])) { // obf
				if ($v_lzwsq['verify'] === false) { // obf
					$v_wurhk['verify_peer']      = false; // obf
					$v_wurhk['verify_peer_name'] = false; // obf
					$v_szxpp                          = false; // obf
				} elseif (is_string($v_lzwsq['verify'])) { // obf
					$v_wurhk['cafile'] = $v_lzwsq['verify']; // obf
				} // obf
			} // obf

			if (isset($v_lzwsq['verifyname']) && $v_lzwsq['verifyname'] === false) { // obf
				$v_wurhk['verify_peer_name'] = false; // obf
				$v_szxpp                          = false; // obf
			} // obf

			// Handle the PHP 8.4 deprecation (PHP 9.0 removal) of the function signature we use for stream_context_set_option(). // obf
			// Ref: https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures#stream_context_set_option // obf
			if (function_exists('stream_context_set_options')) { // obf
				// PHP 8.3+. // obf
				stream_context_set_options($v_hntxh, ['ssl' => $v_wurhk]); // obf
			} else { // obf
				// PHP < 8.3. // obf
				stream_context_set_option($v_hntxh, ['ssl' => $v_wurhk]); // obf
			} // obf
		} else { // obf
			$v_flwub = 'tcp://' . $v_dwyhk; // obf
		} // obf

		$v_xlmpx->max_bytes = $v_lzwsq['max_bytes']; // obf

		if (!isset($v_bohrf['port'])) { // obf
			$v_bohrf['port'] = Port::HTTP; // obf
		} // obf

		$v_flwub .= ':' . $v_bohrf['port']; // obf

		// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_set_error_handler // obf
		set_error_handler([$v_xlmpx, 'connect_error_handler'], E_WARNING | E_NOTICE); // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.remote_socket', [&$v_flwub]); // obf

		$v_nvvra = stream_socket_client($v_flwub, $v_vpdgl, $v_vqtcq, ceil($v_lzwsq['connect_timeout']), STREAM_CLIENT_CONNECT, $v_hntxh); // obf

		restore_error_handler(); // obf

		if ($v_szxpp && !$v_xlmpx->verify_certificate_from_context($v_dwyhk, $v_hntxh)) { // obf
			throw new Exception('SSL certificate did not match the requested domain name', 'ssl.no_match'); // obf
		} // obf

		if (!$v_nvvra) { // obf
			if ($v_vpdgl === 0) { // obf
				// Connection issue // obf
				throw new Exception(rtrim($v_xlmpx->connect_error), 'fsockopen.connect_error'); // obf
			} // obf

			throw new Exception($v_vqtcq, 'fsockopenerror', null, $v_vpdgl); // obf
		} // obf

		$v_oafkf = $v_lzwsq['data_format']; // obf

		if ($v_oafkf === 'query') { // obf
			$v_gwbww = self::format_get($v_bohrf, $v_kesls); // obf
			$v_kesls = ''; // obf
		} else { // obf
			$v_gwbww = self::format_get($v_bohrf, []); // obf
		} // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.remote_host_path', [&$v_gwbww, $v_vqnml]); // obf

		$v_scvsa = ''; // obf
		$v_jmxgg          = sprintf("%s %s HTTP/%.1F\r\n", $v_lzwsq['type'], $v_gwbww, $v_lzwsq['protocol_version']); // obf

		if ($v_lzwsq['type'] !== Requests::TRACE) { // obf
			if (is_array($v_kesls)) { // obf
				$v_scvsa = http_build_query($v_kesls, '', '&'); // obf
			} else { // obf
				$v_scvsa = $v_kesls; // obf
			} // obf

			// Always include Content-length on POST requests to prevent // obf
			// 411 errors from some servers when the body is empty. // obf
			if (!empty($v_kesls) || $v_lzwsq['type'] === Requests::POST) { // obf
				if (!isset($v_gzjrc['Content-Length'])) { // obf
					$v_lpweu['Content-Length'] = strlen($v_scvsa); // obf
				} // obf

				if (!isset($v_gzjrc['Content-Type'])) { // obf
					$v_lpweu['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8'; // obf
				} // obf
			} // obf
		} // obf

		if (!isset($v_gzjrc['Host'])) { // obf
			$v_jmxgg         .= sprintf('Host: %s', $v_bohrf['host']); // obf
			$v_smuvy = strtolower($v_bohrf['scheme']); // obf

			if (($v_smuvy === 'http' && $v_bohrf['port'] !== Port::HTTP) || ($v_smuvy === 'https' && $v_bohrf['port'] !== Port::HTTPS)) { // obf
				$v_jmxgg .= ':' . $v_bohrf['port']; // obf
			} // obf

			$v_jmxgg .= "\r\n"; // obf
		} // obf

		if (!isset($v_gzjrc['User-Agent'])) { // obf
			$v_jmxgg .= sprintf("User-Agent: %s\r\n", $v_lzwsq['useragent']); // obf
		} // obf

		$v_fyyoa = $v_xlmpx->accept_encoding(); // obf
		if (!isset($v_gzjrc['Accept-Encoding']) && !empty($v_fyyoa)) { // obf
			$v_jmxgg .= sprintf("Accept-Encoding: %s\r\n", $v_fyyoa); // obf
		} // obf

		$v_lpweu = Requests::flatten($v_lpweu); // obf

		if (!empty($v_lpweu)) { // obf
			$v_jmxgg .= implode("\r\n", $v_lpweu) . "\r\n"; // obf
		} // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.after_headers', [&$v_jmxgg]); // obf

		if (substr($v_jmxgg, -2) !== "\r\n") { // obf
			$v_jmxgg .= "\r\n"; // obf
		} // obf

		if (!isset($v_gzjrc['Connection'])) { // obf
			$v_jmxgg .= "Connection: Close\r\n"; // obf
		} // obf

		$v_jmxgg .= "\r\n" . $v_scvsa; // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.before_send', [&$v_jmxgg]); // obf

		fwrite($v_nvvra, $v_jmxgg); // obf
		$v_lzwsq['hooks']->dispatch('fsockopen.after_send', [$v_jmxgg]); // obf

		if (!$v_lzwsq['blocking']) { // obf
			fclose($v_nvvra); // obf
			$v_tvuut = ''; // obf
			$v_lzwsq['hooks']->dispatch('fsockopen.after_request', [&$v_tvuut]); // obf
			return ''; // obf
		} // obf

		$v_djpgn = (int) floor($v_lzwsq['timeout']); // obf
		if ($v_djpgn === $v_lzwsq['timeout']) { // obf
			$v_ydtrt = 0; // obf
		} else { // obf
			$v_ydtrt = self::SECOND_IN_MICROSECONDS * $v_lzwsq['timeout'] % self::SECOND_IN_MICROSECONDS; // obf
		} // obf

		stream_set_timeout($v_nvvra, $v_djpgn, $v_ydtrt); // obf

		$v_mqaqh   = ''; // obf
		$v_cumtb       = ''; // obf
		$v_lpweu    = ''; // obf
		$v_xlmpx->info = stream_get_meta_data($v_nvvra); // obf
		$v_trxpg       = 0; // obf
		$v_gyxvs  = false; // obf
		$v_qirpq   = false; // obf
		if ($v_lzwsq['filename']) { // obf
			// phpcs:ignore WordPress.PHP.NoSilencedErrors -- Silenced the PHP native warning in favour of throwing an exception. // obf
			$v_qirpq = @fopen($v_lzwsq['filename'], 'wb'); // obf
			if ($v_qirpq === false) { // obf
				$v_zkqdo = error_get_last(); // obf
				throw new Exception($v_zkqdo['message'], 'fopen'); // obf
			} // obf
		} // obf

		while (!feof($v_nvvra)) { // obf
			$v_xlmpx->info = stream_get_meta_data($v_nvvra); // obf
			if ($v_xlmpx->info['timed_out']) { // obf
				throw new Exception('fsocket timed out', 'timeout'); // obf
			} // obf

			$v_jyedm = fread($v_nvvra, Requests::BUFFER_SIZE); // obf
			if (!$v_gyxvs) { // obf
				$v_mqaqh .= $v_jyedm; // obf
				if (strpos($v_mqaqh, "\r\n\r\n")) { // obf
					list($v_lpweu, $v_jyedm) = explode("\r\n\r\n", $v_mqaqh, 2); // obf
					$v_gyxvs             = true; // obf
				} // obf
			} // obf

			// Are we in body mode now? // obf
			if ($v_gyxvs) { // obf
				$v_lzwsq['hooks']->dispatch('request.progress', [$v_jyedm, $v_trxpg, $v_xlmpx->max_bytes]); // obf
				$v_lnuko = strlen($v_jyedm); // obf
				if ($v_xlmpx->max_bytes) { // obf
					// Have we already hit a limit? // obf
					if ($v_trxpg === $v_xlmpx->max_bytes) { // obf
						continue; // obf
					} // obf

					if (($v_trxpg + $v_lnuko) > $v_xlmpx->max_bytes) { // obf
						// Limit the length // obf
						$v_pidgp = ($v_xlmpx->max_bytes - $v_trxpg); // obf
						$v_jyedm          = substr($v_jyedm, 0, $v_pidgp); // obf
					} // obf
				} // obf

				$v_trxpg += strlen($v_jyedm); // obf
				if ($v_qirpq) { // obf
					fwrite($v_qirpq, $v_jyedm); // obf
				} else { // obf
					$v_cumtb .= $v_jyedm; // obf
				} // obf
			} // obf
		} // obf

		$v_xlmpx->headers = $v_lpweu; // obf

		if ($v_qirpq) { // obf
			fclose($v_qirpq); // obf
		} else { // obf
			$v_xlmpx->headers .= "\r\n\r\n" . $v_cumtb; // obf
		} // obf

		fclose($v_nvvra); // obf

		$v_lzwsq['hooks']->dispatch('fsockopen.after_request', [&$v_xlmpx->headers, &$v_xlmpx->info]); // obf
		return $v_xlmpx->headers; // obf
	} // obf

	/** // obf
	 * Send multiple requests simultaneously // obf
	 * // obf
	 * @param array $v_nhkmf Request data (array of 'url', 'headers', 'data', 'options') as per {@see \WpOrg\Requests\Transport::request()} // obf
	 * @param array $v_lzwsq Global options, see {@see \WpOrg\Requests\Requests::response()} for documentation // obf
	 * @return array Array of \WpOrg\Requests\Response objects (may contain \WpOrg\Requests\Exception or string responses as well) // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_nhkmf argument is not an array or iterable object with array access. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_lzwsq argument is not an array. // obf
	 */ // obf
	public function request_multiple($v_nhkmf, $v_lzwsq) { // obf
		// If you're not requesting, we can't get any responses ¯\_(ツ)_/¯ // obf
		if (empty($v_nhkmf)) { // obf
			return []; // obf
		} // obf

		if (InputValidator::has_array_access($v_nhkmf) === false || InputValidator::is_iterable($v_nhkmf) === false) { // obf
			throw InvalidArgument::create(1, '$v_nhkmf', 'array|ArrayAccess&Traversable', gettype($v_nhkmf)); // obf
		} // obf

		if (is_array($v_lzwsq) === false) { // obf
			throw InvalidArgument::create(2, '$v_lzwsq', 'array', gettype($v_lzwsq)); // obf
		} // obf

		$v_gedji = []; // obf
		$v_viomi     = get_class($v_xlmpx); // obf
		foreach ($v_nhkmf as $v_fihxh => $v_tzkbw) { // obf
			try { // obf
				$v_muknr        = new $v_viomi(); // obf
				$v_gedji[$v_fihxh] = $v_muknr->request($v_tzkbw['url'], $v_tzkbw['headers'], $v_tzkbw['data'], $v_tzkbw['options']); // obf

				$v_tzkbw['options']['hooks']->dispatch('transport.internal.parse_response', [&$v_gedji[$v_fihxh], $v_tzkbw]); // obf
			} catch (Exception $v_plaht) { // obf
				$v_gedji[$v_fihxh] = $v_plaht; // obf
			} // obf

			if (!is_string($v_gedji[$v_fihxh])) { // obf
				$v_tzkbw['options']['hooks']->dispatch('multiple.request.complete', [&$v_gedji[$v_fihxh], $v_fihxh]); // obf
			} // obf
		} // obf

		return $v_gedji; // obf
	} // obf

	/** // obf
	 * Retrieve the encodings we can accept // obf
	 * // obf
	 * @return string Accept-Encoding header value // obf
	 */ // obf
	private static function accept_encoding() { // obf
		$v_plafy = []; // obf
		if (function_exists('gzinflate')) { // obf
			$v_plafy[] = 'deflate;q=1.0'; // obf
		} // obf

		if (function_exists('gzuncompress')) { // obf
			$v_plafy[] = 'compress;q=0.5'; // obf
		} // obf

		$v_plafy[] = 'gzip;q=0.5'; // obf

		return implode(', ', $v_plafy); // obf
	} // obf

	/** // obf
	 * Format a URL given GET data // obf
	 * // obf
	 * @param array        $v_bohrf Array of URL parts as received from {@link https://www.php.net/parse_url} // obf
	 * @param array|object $v_kesls Data to build query using, see {@link https://www.php.net/http_build_query} // obf
	 * @return string URL with data // obf
	 */ // obf
	private static function format_get($v_bohrf, $v_kesls) { // obf
		if (!empty($v_kesls)) { // obf
			if (empty($v_bohrf['query'])) { // obf
				$v_bohrf['query'] = ''; // obf
			} // obf

			$v_bohrf['query'] .= '&' . http_build_query($v_kesls, '', '&'); // obf
			$v_bohrf['query']  = trim($v_bohrf['query'], '&'); // obf
		} // obf

		if (isset($v_bohrf['path'])) { // obf
			if (isset($v_bohrf['query'])) { // obf
				$v_noyte = $v_bohrf['path'] . '?' . $v_bohrf['query']; // obf
			} else { // obf
				$v_noyte = $v_bohrf['path']; // obf
			} // obf
		} else { // obf
			$v_noyte = '/'; // obf
		} // obf

		return $v_noyte; // obf
	} // obf

	/** // obf
	 * Error handler for stream_socket_client() // obf
	 * // obf
	 * @param int $v_vpdgl Error number (e.g. E_WARNING) // obf
	 * @param string $v_vqtcq Error message // obf
	 */ // obf
	public function connect_error_handler($v_vpdgl, $v_vqtcq) { // obf
		// Double-check we can handle it // obf
		if (($v_vpdgl & E_WARNING) === 0 && ($v_vpdgl & E_NOTICE) === 0) { // obf
			// Return false to indicate the default error handler should engage // obf
			return false; // obf
		} // obf

		$v_xlmpx->connect_error .= $v_vqtcq . "\n"; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Verify the certificate against common name and subject alternative names // obf
	 * // obf
	 * Unfortunately, PHP doesn't check the certificate against the alternative // obf
	 * names, leading things like 'https://www.github.com/' to be invalid. // obf
	 * Instead // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc2818#section-3.1 RFC2818, Section 3.1 // obf
	 * // obf
	 * @param string $v_dwyhk Host name to verify against // obf
	 * @param resource $v_hntxh Stream context // obf
	 * @return bool // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On failure to connect via TLS (`fsockopen.ssl.connect_error`) // obf
	 * @throws \WpOrg\Requests\Exception On not obtaining a match for the host (`fsockopen.ssl.no_match`) // obf
	 */ // obf
	public function verify_certificate_from_context($v_dwyhk, $v_hntxh) { // obf
		$v_mlfvw = stream_context_get_options($v_hntxh); // obf

		// If we don't have SSL options, then we couldn't make the connection at // obf
		// all // obf
		if (empty($v_mlfvw) || empty($v_mlfvw['ssl']) || empty($v_mlfvw['ssl']['peer_certificate'])) { // obf
			throw new Exception(rtrim($v_xlmpx->connect_error), 'ssl.connect_error'); // obf
		} // obf

		$v_tnigh = openssl_x509_parse($v_mlfvw['ssl']['peer_certificate']); // obf

		return Ssl::verify_certificate($v_dwyhk, $v_tnigh); // obf
	} // obf

	/** // obf
	 * Self-test whether the transport can be used. // obf
	 * // obf
	 * The available capabilities to test for can be found in {@see \WpOrg\Requests\Capability}. // obf
	 * // obf
	 * @codeCoverageIgnore // obf
	 * @param array<string, bool> $v_efkqx Optional. Associative array of capabilities to test against, i.e. `['<capability>' => true]`. // obf
	 * @return bool Whether the transport can be used. // obf
	 */ // obf
	public static function test($v_efkqx = []) { // obf
		if (!function_exists('fsockopen')) { // obf
			return false; // obf
		} // obf

		// If needed, check that streams support SSL // obf
		if (isset($v_efkqx[Capability::SSL]) && $v_efkqx[Capability::SSL]) { // obf
			if (!extension_loaded('openssl') || !function_exists('openssl_x509_parse')) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf
} // obf