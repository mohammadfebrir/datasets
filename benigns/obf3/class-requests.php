

<?php // obf
/** // obf
 * Requests for PHP // obf
 * // obf
 * Inspired by Requests for Python. // obf
 * // obf
 * Based on concepts from SimplePie_File, RequestCore and WP_Http. // obf
 * // obf
 * @package Requests // obf
 * // obf
 * @deprecated 6.2.0 // obf
 */ // obf

/* // obf
 * Integrators who cannot yet upgrade to the PSR-4 class names can silence deprecations // obf
 * by defining a `REQUESTS_SILENCE_PSR0_DEPRECATIONS` constant and setting it to `true`. // obf
 * The constant needs to be defined before this class is required. // obf
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

require_once __DIR__ . '/Requests/src/Requests.php'; // obf

/** // obf
 * Requests for PHP // obf
 * // obf
 * Inspired by Requests for Python. // obf
 * // obf
 * Based on concepts from SimplePie_File, RequestCore and WP_Http. // obf
 * // obf
 * @package Requests // obf
 * // obf
 * @deprecated 6.2.0 Use `WpOrg\Requests\Requests` instead for the actual functionality and // obf
 *                   use `WpOrg\Requests\Autoload` for the autoloading. // obf
 */ // obf
class Requests extends WpOrg\Requests\Requests { // obf

	/** // obf
	 * Deprecated autoloader for Requests. // obf
	 * // obf
	 * @deprecated 6.2.0 Use the `WpOrg\Requests\Autoload::load()` method instead. // obf
	 * // obf
	 * @codeCoverageIgnore // obf
	 * // obf
	 * @param string $v_jniho Class name to load // obf
	 */ // obf
	public static function autoloader($v_jniho) { // obf
		if (class_exists('WpOrg\Requests\Autoload') === false) { // obf
			require_once __DIR__ . '/Requests/src/Autoload.php'; // obf
		} // obf

		return WpOrg\Requests\Autoload::load($v_jniho); // obf
	} // obf

	/** // obf
	 * Register the built-in autoloader // obf
	 * // obf
	 * @deprecated 6.2.0 Include the `WpOrg\Requests\Autoload` class and // obf
	 *                   call `WpOrg\Requests\Autoload::register()` instead. // obf
	 * // obf
	 * @codeCoverageIgnore // obf
	 */ // obf
	public static function register_autoloader() { // obf
		require_once __DIR__ . '/Requests/src/Autoload.php'; // obf
		WpOrg\Requests\Autoload::register(); // obf
	} // obf
} // obf