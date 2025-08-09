

<?php // obf

namespace WpOrg\Requests\Exception; // obf

use InvalidArgumentException; // obf

/** // obf
 * Exception for an invalid argument passed. // obf
 * // obf
 * @package Requests\Exceptions // obf
 * @since   2.0.0 // obf
 */ // obf
final class InvalidArgument extends InvalidArgumentException { // obf

	/** // obf
	 * Create a new invalid argument exception with a standardized text. // obf
	 * // obf
	 * @param int    $v_vkzda The argument position in the function signature. 1-based. // obf
	 * @param string $v_zplcx     The argument name in the function signature. // obf
	 * @param string $v_ojrwd The argument type expected as a string. // obf
	 * @param string $v_hldps The actual argument type received. // obf
	 * // obf
	 * @return \WpOrg\Requests\Exception\InvalidArgument // obf
	 */ // obf
	public static function create($v_vkzda, $v_zplcx, $v_ojrwd, $v_hldps) { // obf
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_debug_backtrace // obf
		$v_qkxzn = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2); // obf

		return new self( // obf
			sprintf( // obf
				'%s::%s(): Argument #%d (%s) must be of type %s, %s given', // obf
				$v_qkxzn[1]['class'], // obf
				$v_qkxzn[1]['function'], // obf
				$v_vkzda, // obf
				$v_zplcx, // obf
				$v_ojrwd, // obf
				$v_hldps // obf
			) // obf
		); // obf
	} // obf
} // obf