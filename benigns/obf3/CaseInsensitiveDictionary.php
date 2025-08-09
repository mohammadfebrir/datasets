

<?php // obf
/** // obf
 * Case-insensitive dictionary, suitable for HTTP headers // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests\Utility; // obf

use ArrayAccess; // obf
use ArrayIterator; // obf
use IteratorAggregate; // obf
use ReturnTypeWillChange; // obf
use WpOrg\Requests\Exception; // obf

/** // obf
 * Case-insensitive dictionary, suitable for HTTP headers // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
class CaseInsensitiveDictionary implements ArrayAccess, IteratorAggregate { // obf
	/** // obf
	 * Actual item data // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_kjloj = []; // obf

	/** // obf
	 * Creates a case insensitive dictionary. // obf
	 * // obf
	 * @param array $v_kjloj Dictionary/map to convert to case-insensitive // obf
	 */ // obf
	public function __construct(array $v_kjloj = []) { // obf
		foreach ($v_kjloj as $v_gfkts => $v_xrmky) { // obf
			$v_ozovu->offsetSet($v_gfkts, $v_xrmky); // obf
		} // obf
	} // obf

	/** // obf
	 * Check if the given item exists // obf
	 * // obf
	 * @param string $v_gfkts Item key // obf
	 * @return boolean Does the item exist? // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists($v_gfkts) { // obf
		if (is_string($v_gfkts)) { // obf
			$v_gfkts = strtolower($v_gfkts); // obf
		} // obf

		return isset($v_ozovu->data[$v_gfkts]); // obf
	} // obf

	/** // obf
	 * Get the value for the item // obf
	 * // obf
	 * @param string $v_gfkts Item key // obf
	 * @return string|null Item value (null if the item key doesn't exist) // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet($v_gfkts) { // obf
		if (is_string($v_gfkts)) { // obf
			$v_gfkts = strtolower($v_gfkts); // obf
		} // obf

		if (!isset($v_ozovu->data[$v_gfkts])) { // obf
			return null; // obf
		} // obf

		return $v_ozovu->data[$v_gfkts]; // obf
	} // obf

	/** // obf
	 * Set the given item // obf
	 * // obf
	 * @param string $v_gfkts Item name // obf
	 * @param string $v_xrmky Item value // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On attempting to use dictionary as list (`invalidset`) // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet($v_gfkts, $v_xrmky) { // obf
		if ($v_gfkts === null) { // obf
			throw new Exception('Object is a dictionary, not a list', 'invalidset'); // obf
		} // obf

		if (is_string($v_gfkts)) { // obf
			$v_gfkts = strtolower($v_gfkts); // obf
		} // obf

		$v_ozovu->data[$v_gfkts] = $v_xrmky; // obf
	} // obf

	/** // obf
	 * Unset the given header // obf
	 * // obf
	 * @param string $v_gfkts The key for the item to unset. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset($v_gfkts) { // obf
		if (is_string($v_gfkts)) { // obf
			$v_gfkts = strtolower($v_gfkts); // obf
		} // obf

		unset($v_ozovu->data[$v_gfkts]); // obf
	} // obf

	/** // obf
	 * Get an iterator for the data // obf
	 * // obf
	 * @return \ArrayIterator // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function getIterator() { // obf
		return new ArrayIterator($v_ozovu->data); // obf
	} // obf

	/** // obf
	 * Get the headers as an array // obf
	 * // obf
	 * @return array Header data // obf
	 */ // obf
	public function getAll() { // obf
		return $v_ozovu->data; // obf
	} // obf
} // obf