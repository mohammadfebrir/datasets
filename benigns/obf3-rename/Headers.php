

<?php // obf
/** // obf
 * Case-insensitive dictionary, suitable for HTTP headers // obf
 * // obf
 * @package Requests // obf
 */ // obf

namespace WpOrg\Requests\Response; // obf

use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Utility\CaseInsensitiveDictionary; // obf
use WpOrg\Requests\Utility\FilteredIterator; // obf

/** // obf
 * Case-insensitive dictionary, suitable for HTTP headers // obf
 * // obf
 * @package Requests // obf
 */ // obf
class Headers extends CaseInsensitiveDictionary { // obf
	/** // obf
	 * Get the given header // obf
	 * // obf
	 * Unlike {@see \WpOrg\Requests\Response\Headers::getValues()}, this returns a string. If there are // obf
	 * multiple values, it concatenates them with a comma as per RFC2616. // obf
	 * // obf
	 * Avoid using this where commas may be used unquoted in values, such as // obf
	 * Set-Cookie headers. // obf
	 * // obf
	 * @param string $v_ctftv Name of the header to retrieve. // obf
	 * @return string|null Header value // obf
	 */ // obf
	public function offsetGet($v_ctftv) { // obf
		if (is_string($v_ctftv)) { // obf
			$v_ctftv = strtolower($v_ctftv); // obf
		} // obf

		if (!isset($v_rjzub->data[$v_ctftv])) { // obf
			return null; // obf
		} // obf

		return $v_rjzub->flatten($v_rjzub->data[$v_ctftv]); // obf
	} // obf

	/** // obf
	 * Set the given item // obf
	 * // obf
	 * @param string $v_ctftv Item name // obf
	 * @param string $v_dxifz Item value // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On attempting to use dictionary as list (`invalidset`) // obf
	 */ // obf
	public function offsetSet($v_ctftv, $v_dxifz) { // obf
		if ($v_ctftv === null) { // obf
			throw new Exception('Object is a dictionary, not a list', 'invalidset'); // obf
		} // obf

		if (is_string($v_ctftv)) { // obf
			$v_ctftv = strtolower($v_ctftv); // obf
		} // obf

		if (!isset($v_rjzub->data[$v_ctftv])) { // obf
			$v_rjzub->data[$v_ctftv] = []; // obf
		} // obf

		$v_rjzub->data[$v_ctftv][] = $v_dxifz; // obf
	} // obf

	/** // obf
	 * Get all values for a given header // obf
	 * // obf
	 * @param string $v_ctftv Name of the header to retrieve. // obf
	 * @return array|null Header values // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not valid as an array key. // obf
	 */ // obf
	public function getValues($v_ctftv) { // obf
		if (!is_string($v_ctftv) && !is_int($v_ctftv)) { // obf
			throw InvalidArgument::create(1, '$v_ctftv', 'string|int', gettype($v_ctftv)); // obf
		} // obf

		if (is_string($v_ctftv)) { // obf
			$v_ctftv = strtolower($v_ctftv); // obf
		} // obf

		if (!isset($v_rjzub->data[$v_ctftv])) { // obf
			return null; // obf
		} // obf

		return $v_rjzub->data[$v_ctftv]; // obf
	} // obf

	/** // obf
	 * Flattens a value into a string // obf
	 * // obf
	 * Converts an array into a string by imploding values with a comma, as per // obf
	 * RFC2616's rules for folding headers. // obf
	 * // obf
	 * @param string|array $v_dxifz Value to flatten // obf
	 * @return string Flattened value // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or an array. // obf
	 */ // obf
	public function flatten($v_dxifz) { // obf
		if (is_string($v_dxifz)) { // obf
			return $v_dxifz; // obf
		} // obf

		if (is_array($v_dxifz)) { // obf
			return implode(',', $v_dxifz); // obf
		} // obf

		throw InvalidArgument::create(1, '$v_dxifz', 'string|array', gettype($v_dxifz)); // obf
	} // obf

	/** // obf
	 * Get an iterator for the data // obf
	 * // obf
	 * Converts the internally stored values to a comma-separated string if there is more // obf
	 * than one value for a key. // obf
	 * // obf
	 * @return \ArrayIterator // obf
	 */ // obf
	public function getIterator() { // obf
		return new FilteredIterator($v_rjzub->data, [$v_rjzub, 'flatten']); // obf
	} // obf
} // obf