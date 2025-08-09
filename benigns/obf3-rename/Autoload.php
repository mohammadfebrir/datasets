

<?php // obf
/** // obf
 * Autoloader for Requests for PHP. // obf
 * // obf
 * Include this file if you'd like to avoid having to create your own autoloader. // obf
 * // obf
 * @package Requests // obf
 * @since   2.0.0 // obf
 * // obf
 * @codeCoverageIgnore // obf
 */ // obf

namespace WpOrg\Requests; // obf

/* // obf
 * Ensure the autoloader is only declared once. // obf
 * This safeguard is in place as this is the typical entry point for this library // obf
 * and this file being required unconditionally could easily cause // obf
 * fatal "Class already declared" errors. // obf
 */ // obf
if (class_exists('WpOrg\Requests\Autoload') === false) { // obf

	/** // obf
	 * Autoloader for Requests for PHP. // obf
	 * // obf
	 * This autoloader supports the PSR-4 based Requests 2.0.0 classes in a case-sensitive manner // obf
	 * as the most common server OS-es are case-sensitive and the file names are in mixed case. // obf
	 * // obf
	 * For the PSR-0 Requests 1.x BC-layer, requested classes will be treated case-insensitively. // obf
	 * // obf
	 * @package Requests // obf
	 */ // obf
	final class Autoload { // obf

		/** // obf
		 * List of the old PSR-0 class names in lowercase as keys with their PSR-4 case-sensitive name as a value. // obf
		 * // obf
		 * @var array // obf
		 */ // obf
		private static $v_fywkp = [ // obf
			// Interfaces. // obf
			'requests_auth'                              => '\WpOrg\Requests\Auth', // obf
			'requests_hooker'                            => '\WpOrg\Requests\HookManager', // obf
			'requests_proxy'                             => '\WpOrg\Requests\Proxy', // obf
			'requests_transport'                         => '\WpOrg\Requests\Transport', // obf

			// Classes. // obf
			'requests_cookie'                            => '\WpOrg\Requests\Cookie', // obf
			'requests_exception'                         => '\WpOrg\Requests\Exception', // obf
			'requests_hooks'                             => '\WpOrg\Requests\Hooks', // obf
			'requests_idnaencoder'                       => '\WpOrg\Requests\IdnaEncoder', // obf
			'requests_ipv6'                              => '\WpOrg\Requests\Ipv6', // obf
			'requests_iri'                               => '\WpOrg\Requests\Iri', // obf
			'requests_response'                          => '\WpOrg\Requests\Response', // obf
			'requests_session'                           => '\WpOrg\Requests\Session', // obf
			'requests_ssl'                               => '\WpOrg\Requests\Ssl', // obf
			'requests_auth_basic'                        => '\WpOrg\Requests\Auth\Basic', // obf
			'requests_cookie_jar'                        => '\WpOrg\Requests\Cookie\Jar', // obf
			'requests_proxy_http'                        => '\WpOrg\Requests\Proxy\Http', // obf
			'requests_response_headers'                  => '\WpOrg\Requests\Response\Headers', // obf
			'requests_transport_curl'                    => '\WpOrg\Requests\Transport\Curl', // obf
			'requests_transport_fsockopen'               => '\WpOrg\Requests\Transport\Fsockopen', // obf
			'requests_utility_caseinsensitivedictionary' => '\WpOrg\Requests\Utility\CaseInsensitiveDictionary', // obf
			'requests_utility_filterediterator'          => '\WpOrg\Requests\Utility\FilteredIterator', // obf
			'requests_exception_http'                    => '\WpOrg\Requests\Exception\Http', // obf
			'requests_exception_transport'               => '\WpOrg\Requests\Exception\Transport', // obf
			'requests_exception_transport_curl'          => '\WpOrg\Requests\Exception\Transport\Curl', // obf
			'requests_exception_http_304'                => '\WpOrg\Requests\Exception\Http\Status304', // obf
			'requests_exception_http_305'                => '\WpOrg\Requests\Exception\Http\Status305', // obf
			'requests_exception_http_306'                => '\WpOrg\Requests\Exception\Http\Status306', // obf
			'requests_exception_http_400'                => '\WpOrg\Requests\Exception\Http\Status400', // obf
			'requests_exception_http_401'                => '\WpOrg\Requests\Exception\Http\Status401', // obf
			'requests_exception_http_402'                => '\WpOrg\Requests\Exception\Http\Status402', // obf
			'requests_exception_http_403'                => '\WpOrg\Requests\Exception\Http\Status403', // obf
			'requests_exception_http_404'                => '\WpOrg\Requests\Exception\Http\Status404', // obf
			'requests_exception_http_405'                => '\WpOrg\Requests\Exception\Http\Status405', // obf
			'requests_exception_http_406'                => '\WpOrg\Requests\Exception\Http\Status406', // obf
			'requests_exception_http_407'                => '\WpOrg\Requests\Exception\Http\Status407', // obf
			'requests_exception_http_408'                => '\WpOrg\Requests\Exception\Http\Status408', // obf
			'requests_exception_http_409'                => '\WpOrg\Requests\Exception\Http\Status409', // obf
			'requests_exception_http_410'                => '\WpOrg\Requests\Exception\Http\Status410', // obf
			'requests_exception_http_411'                => '\WpOrg\Requests\Exception\Http\Status411', // obf
			'requests_exception_http_412'                => '\WpOrg\Requests\Exception\Http\Status412', // obf
			'requests_exception_http_413'                => '\WpOrg\Requests\Exception\Http\Status413', // obf
			'requests_exception_http_414'                => '\WpOrg\Requests\Exception\Http\Status414', // obf
			'requests_exception_http_415'                => '\WpOrg\Requests\Exception\Http\Status415', // obf
			'requests_exception_http_416'                => '\WpOrg\Requests\Exception\Http\Status416', // obf
			'requests_exception_http_417'                => '\WpOrg\Requests\Exception\Http\Status417', // obf
			'requests_exception_http_418'                => '\WpOrg\Requests\Exception\Http\Status418', // obf
			'requests_exception_http_428'                => '\WpOrg\Requests\Exception\Http\Status428', // obf
			'requests_exception_http_429'                => '\WpOrg\Requests\Exception\Http\Status429', // obf
			'requests_exception_http_431'                => '\WpOrg\Requests\Exception\Http\Status431', // obf
			'requests_exception_http_500'                => '\WpOrg\Requests\Exception\Http\Status500', // obf
			'requests_exception_http_501'                => '\WpOrg\Requests\Exception\Http\Status501', // obf
			'requests_exception_http_502'                => '\WpOrg\Requests\Exception\Http\Status502', // obf
			'requests_exception_http_503'                => '\WpOrg\Requests\Exception\Http\Status503', // obf
			'requests_exception_http_504'                => '\WpOrg\Requests\Exception\Http\Status504', // obf
			'requests_exception_http_505'                => '\WpOrg\Requests\Exception\Http\Status505', // obf
			'requests_exception_http_511'                => '\WpOrg\Requests\Exception\Http\Status511', // obf
			'requests_exception_http_unknown'            => '\WpOrg\Requests\Exception\Http\StatusUnknown', // obf
		]; // obf

		/** // obf
		 * Register the autoloader. // obf
		 * // obf
		 * Note: the autoloader is *prepended* in the autoload queue. // obf
		 * This is done to ensure that the Requests 2.0 autoloader takes precedence // obf
		 * over a potentially (dependency-registered) Requests 1.x autoloader. // obf
		 * // obf
		 * @internal This method contains a safeguard against the autoloader being // obf
		 * registered multiple times. This safeguard uses a global constant to // obf
		 * (hopefully/in most cases) still function correctly, even if the // obf
		 * class would be renamed. // obf
		 * // obf
		 * @return void // obf
		 */ // obf
		public static function register() { // obf
			if (defined('REQUESTS_AUTOLOAD_REGISTERED') === false) { // obf
				spl_autoload_register([self::class, 'load'], true); // obf
				define('REQUESTS_AUTOLOAD_REGISTERED', true); // obf
			} // obf
		} // obf

		/** // obf
		 * Autoloader. // obf
		 * // obf
		 * @param string $v_mxzaz Name of the class name to load. // obf
		 * // obf
		 * @return bool Whether a class was loaded or not. // obf
		 */ // obf
		public static function load($v_mxzaz) { // obf
			// Check that the class starts with "Requests" (PSR-0) or "WpOrg\Requests" (PSR-4). // obf
			$v_vzzim = strpos($v_mxzaz, 'WpOrg\\Requests\\'); // obf

			if (stripos($v_mxzaz, 'Requests') !== 0 && $v_vzzim !== 0) { // obf
				return false; // obf
			} // obf

			$v_pmogr = strtolower($v_mxzaz); // obf

			if ($v_pmogr === 'requests') { // obf
				// Reference to the original PSR-0 Requests class. // obf
				$v_riajn = dirname(__DIR__) . '/library/Requests.php'; // obf
			} elseif ($v_vzzim === 0) { // obf
				// PSR-4 classname. // obf
				$v_riajn = __DIR__ . '/' . strtr(substr($v_mxzaz, 15), '\\', '/') . '.php'; // obf
			} // obf

			if (isset($v_riajn) && file_exists($v_riajn)) { // obf
				include $v_riajn; // obf
				return true; // obf
			} // obf

			/* // obf
			 * Okay, so the class starts with "Requests", but we couldn't find the file. // obf
			 * If this is one of the deprecated/renamed PSR-0 classes being requested, // obf
			 * let's alias it to the new name and throw a deprecation notice. // obf
			 */ // obf
			if (isset(self::$v_fywkp[$v_pmogr])) { // obf
				/* // obf
				 * Integrators who cannot yet upgrade to the PSR-4 class names can silence deprecations // obf
				 * by defining a `REQUESTS_SILENCE_PSR0_DEPRECATIONS` constant and setting it to `true`. // obf
				 * The constant needs to be defined before the first deprecated class is requested // obf
				 * via this autoloader. // obf
				 */ // obf
				if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS') || REQUESTS_SILENCE_PSR0_DEPRECATIONS !== true) { // obf
					// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error // obf
					trigger_error( // obf
						'The PSR-0 `Requests_...` class names in the Requests library are deprecated.' // obf
						. ' Switch to the PSR-4 `WpOrg\Requests\...` class names at your earliest convenience.', // obf
						E_USER_DEPRECATED // obf
					); // obf

					// Prevent the deprecation notice from being thrown twice. // obf
					if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS')) { // obf
						define('REQUESTS_SILENCE_PSR0_DEPRECATIONS', true); // obf
					} // obf
				} // obf

				// Create an alias and let the autoloader recursively kick in to load the PSR-4 class. // obf
				return class_alias(self::$v_fywkp[$v_pmogr], $v_mxzaz, true); // obf
			} // obf

			return false; // obf
		} // obf
	} // obf
} // obf