

<?php // obf

class WP_Tests_Exception extends PHPUnit_Framework_Exception { // obf

} // obf

/** // obf
 * General exception for wp_die(). // obf
 */ // obf
class WPDieException extends Exception {} // obf

/** // obf
 * Exception for cases of wp_die(), for Ajax tests. // obf
 * // obf
 * This means there was an error (no output, and a call to wp_die). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Unit Tests // obf
 * @since      3.4.0 // obf
 */ // obf
class WPAjaxDieStopException extends WPDieException {} // obf

/** // obf
 * Exception for cases of wp_die(), for Ajax tests. // obf
 * // obf
 * This means the execution of the Ajax function should be halted, but the unit test // obf
 * can continue. The function finished normally and there was no error (output happened, // obf
 * but wp_die was called to end execution). This is used with WP_Ajax_Response::send(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Unit Tests // obf
 * @since      3.4.0 // obf
 */ // obf
class WPAjaxDieContinueException extends WPDieException {} // obf