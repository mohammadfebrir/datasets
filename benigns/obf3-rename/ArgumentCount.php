

<?php // obf

namespace WpOrg\Requests\Exception; // obf

use WpOrg\Requests\Exception; // obf

/** // obf
 * Exception for when an incorrect number of arguments are passed to a method. // obf
 * // obf
 * Typically, this exception is used when all arguments for a method are optional, // obf
 * but certain arguments need to be passed together, i.e. a method which can be called // obf
 * with no arguments or with two arguments, but not with one argument. // obf
 * // obf
 * Along the same lines, this exception is also used if a method expects an array // obf
 * with a certain number of elements and the provided number of elements does not comply. // obf
 * // obf
 * @package Requests\Exceptions // obf
 * @since   2.0.0 // obf
 */ // obf
final class ArgumentCount extends Exception { // obf

	/** // obf
	 * Create a new argument count exception with a standardized text. // obf
	 * // obf
	 * @param string $v_nshxs The argument count expected as a phrase. // obf
	 *                         For example: `at least 2 arguments` or `exactly 1 argument`. // obf
	 * @param int    $v_xdwbo The actual argument count received. // obf
	 * @param string $v_btfoq     Exception type. // obf
	 * // obf
	 * @return \WpOrg\Requests\Exception\ArgumentCount // obf
	 */ // obf
	public static function create($v_nshxs, $v_xdwbo, $v_btfoq) { // obf
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_debug_backtrace // obf
		$v_kctkg = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2); // obf

		return new self( // obf
			sprintf( // obf
				'%s::%s() expects %s, %d given', // obf
				$v_kctkg[1]['class'], // obf
				$v_kctkg[1]['function'], // obf
				$v_nshxs, // obf
				$v_xdwbo // obf
			), // obf
			$v_btfoq // obf
		); // obf
	} // obf
} // obf