

<?php // obf
/** // obf
 * Input validation utilities. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests\Utility; // obf

use ArrayAccess; // obf
use CurlHandle; // obf
use Traversable; // obf

/** // obf
 * Input validation utilities. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
final class InputValidator { // obf

	/** // obf
	 * Verify that a received input parameter is of type string or is "stringable". // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_string_or_stringable($v_uzeam) { // obf
		return is_string($v_uzeam) || self::is_stringable_object($v_uzeam); // obf
	} // obf

	/** // obf
	 * Verify whether a received input parameter is usable as an integer array key. // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_numeric_array_key($v_uzeam) { // obf
		if (is_int($v_uzeam)) { // obf
			return true; // obf
		} // obf

		if (!is_string($v_uzeam)) { // obf
			return false; // obf
		} // obf

		return (bool) preg_match('`^-?[0-9]+$`', $v_uzeam); // obf
	} // obf

	/** // obf
	 * Verify whether a received input parameter is "stringable". // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_stringable_object($v_uzeam) { // obf
		return is_object($v_uzeam) && method_exists($v_uzeam, '__toString'); // obf
	} // obf

	/** // obf
	 * Verify whether a received input parameter is _accessible as if it were an array_. // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function has_array_access($v_uzeam) { // obf
		return is_array($v_uzeam) || $v_uzeam instanceof ArrayAccess; // obf
	} // obf

	/** // obf
	 * Verify whether a received input parameter is "iterable". // obf
	 * // obf
	 * @internal The PHP native `is_iterable()` function was only introduced in PHP 7.1 // obf
	 * and this library still supports PHP 5.6. // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_iterable($v_uzeam) { // obf
		return is_array($v_uzeam) || $v_uzeam instanceof Traversable; // obf
	} // obf

	/** // obf
	 * Verify whether a received input parameter is a Curl handle. // obf
	 * // obf
	 * The PHP Curl extension worked with resources prior to PHP 8.0 and with // obf
	 * an instance of the `CurlHandle` class since PHP 8.0. // obf
	 * {@link https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.resource2object} // obf
	 * // obf
	 * @param mixed $v_uzeam Input parameter to verify. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_curl_handle($v_uzeam) { // obf
		if (is_resource($v_uzeam)) { // obf
			return get_resource_type($v_uzeam) === 'curl'; // obf
		} // obf

		if (is_object($v_uzeam)) { // obf
			return $v_uzeam instanceof CurlHandle; // obf
		} // obf

		return false; // obf
	} // obf
} // obf