

<?php // obf
/** // obf
 * Handles adding and dispatching events // obf
 * // obf
 * @package Requests\EventDispatcher // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\HookManager; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * Handles adding and dispatching events // obf
 * // obf
 * @package Requests\EventDispatcher // obf
 */ // obf
class Hooks implements HookManager { // obf
	/** // obf
	 * Registered callbacks for each hook // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_yoovr = []; // obf

	/** // obf
	 * Register a callback for a hook // obf
	 * // obf
	 * @param string $v_gmrea Hook name // obf
	 * @param callable $v_lhvdw Function/method to call on event // obf
	 * @param int $v_rorty Priority number. <0 is executed earlier, >0 is executed later // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_gmrea argument is not a string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_lhvdw argument is not callable. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_rorty argument is not an integer. // obf
	 */ // obf
	public function register($v_gmrea, $v_lhvdw, $v_rorty = 0) { // obf
		if (is_string($v_gmrea) === false) { // obf
			throw InvalidArgument::create(1, '$v_gmrea', 'string', gettype($v_gmrea)); // obf
		} // obf

		if (is_callable($v_lhvdw) === false) { // obf
			throw InvalidArgument::create(2, '$v_lhvdw', 'callable', gettype($v_lhvdw)); // obf
		} // obf

		if (InputValidator::is_numeric_array_key($v_rorty) === false) { // obf
			throw InvalidArgument::create(3, '$v_rorty', 'integer', gettype($v_rorty)); // obf
		} // obf

		if (!isset($v_ltiwo->hooks[$v_gmrea])) { // obf
			$v_ltiwo->hooks[$v_gmrea] = [ // obf
				$v_rorty => [], // obf
			]; // obf
		} elseif (!isset($v_ltiwo->hooks[$v_gmrea][$v_rorty])) { // obf
			$v_ltiwo->hooks[$v_gmrea][$v_rorty] = []; // obf
		} // obf

		$v_ltiwo->hooks[$v_gmrea][$v_rorty][] = $v_lhvdw; // obf
	} // obf

	/** // obf
	 * Dispatch a message // obf
	 * // obf
	 * @param string $v_gmrea Hook name // obf
	 * @param array $v_ycgit Parameters to pass to callbacks // obf
	 * @return boolean Successfulness // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_gmrea argument is not a string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_ycgit argument is not an array. // obf
	 */ // obf
	public function dispatch($v_gmrea, $v_ycgit = []) { // obf
		if (is_string($v_gmrea) === false) { // obf
			throw InvalidArgument::create(1, '$v_gmrea', 'string', gettype($v_gmrea)); // obf
		} // obf

		// Check strictly against array, as Array* objects don't work in combination with `call_user_func_array()`. // obf
		if (is_array($v_ycgit) === false) { // obf
			throw InvalidArgument::create(2, '$v_ycgit', 'array', gettype($v_ycgit)); // obf
		} // obf

		if (empty($v_ltiwo->hooks[$v_gmrea])) { // obf
			return false; // obf
		} // obf

		if (!empty($v_ycgit)) { // obf
			// Strip potential keys from the array to prevent them being interpreted as parameter names in PHP 8.0. // obf
			$v_ycgit = array_values($v_ycgit); // obf
		} // obf

		ksort($v_ltiwo->hooks[$v_gmrea]); // obf

		foreach ($v_ltiwo->hooks[$v_gmrea] as $v_rorty => $v_ydawg) { // obf
			foreach ($v_ydawg as $v_lhvdw) { // obf
				$v_lhvdw(...$v_ycgit); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	public function __wakeup() { // obf
		throw new \LogicException( __CLASS__ . ' should never be unserialized' ); // obf
	} // obf
} // obf