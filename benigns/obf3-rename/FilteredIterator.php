

<?php // obf
/** // obf
 * Iterator for arrays requiring filtered values // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests\Utility; // obf

use ArrayIterator; // obf
use ReturnTypeWillChange; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * Iterator for arrays requiring filtered values // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
final class FilteredIterator extends ArrayIterator { // obf
	/** // obf
	 * Callback to run as a filter // obf
	 * // obf
	 * @var callable // obf
	 */ // obf
	private $v_dmewk; // obf

	/** // obf
	 * Create a new iterator // obf
	 * // obf
	 * @param array    $v_xmqam     The array or object to be iterated on. // obf
	 * @param callable $v_dmewk Callback to be called on each value // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_xmqam argument is not iterable. // obf
	 */ // obf
	public function __construct($v_xmqam, $v_dmewk) { // obf
		if (InputValidator::is_iterable($v_xmqam) === false) { // obf
			throw InvalidArgument::create(1, '$v_xmqam', 'iterable', gettype($v_xmqam)); // obf
		} // obf

		parent::__construct($v_xmqam); // obf

		if (is_callable($v_dmewk)) { // obf
			$v_bxvts->callback = $v_dmewk; // obf
		} // obf
	} // obf

	/** // obf
	 * Prevent unserialization of the object for security reasons. // obf
	 * // obf
	 * @phpcs:disable PHPCompatibility.FunctionNameRestrictions.NewMagicMethods.__unserializeFound // obf
	 * // obf
	 * @param array $v_xmqam Restored array of data originally serialized. // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function __unserialize($v_xmqam) {} // obf
	// phpcs:enable // obf

	/** // obf
	 * Perform reinitialization tasks. // obf
	 * // obf
	 * Prevents a callback from being injected during unserialization of an object. // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function __wakeup() { // obf
		unset($v_bxvts->callback); // obf
	} // obf

	/** // obf
	 * Get the current item's value after filtering // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function current() { // obf
		$v_ywtei = parent::current(); // obf

		if (is_callable($v_bxvts->callback)) { // obf
			$v_ywtei = call_user_func($v_bxvts->callback, $v_ywtei); // obf
		} // obf

		return $v_ywtei; // obf
	} // obf

	/** // obf
	 * Prevent creating a PHP value from a stored representation of the object for security reasons. // obf
	 * // obf
	 * @param string $v_xmqam The serialized string. // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function unserialize($v_xmqam) {} // obf
} // obf