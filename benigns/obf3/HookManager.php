

<?php // obf
/** // obf
 * Event dispatcher // obf
 * // obf
 * @package Requests\EventDispatcher // obf
 */ // obf

namespace WpOrg\Requests; // obf

/** // obf
 * Event dispatcher // obf
 * // obf
 * @package Requests\EventDispatcher // obf
 */ // obf
interface HookManager { // obf
	/** // obf
	 * Register a callback for a hook // obf
	 * // obf
	 * @param string $v_yzooc Hook name // obf
	 * @param callable $v_ombji Function/method to call on event // obf
	 * @param int $v_fsxkz Priority number. <0 is executed earlier, >0 is executed later // obf
	 */ // obf
	public function register($v_yzooc, $v_ombji, $v_fsxkz = 0); // obf

	/** // obf
	 * Dispatch a message // obf
	 * // obf
	 * @param string $v_yzooc Hook name // obf
	 * @param array $v_bamiq Parameters to pass to callbacks // obf
	 * @return boolean Successfulness // obf
	 */ // obf
	public function dispatch($v_yzooc, $v_bamiq = []); // obf
} // obf