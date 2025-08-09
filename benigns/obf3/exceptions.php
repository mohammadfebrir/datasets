$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

class WP_Tests_Exception extends PHPUnit_Framework_Exception {

}

/**
 * General exception for wp_die().
 */
class WPDieException extends Exception {}

/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means there was an error (no output, and a call to wp_die).
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieStopException extends WPDieException {}

/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means the execution of the Ajax function should be halted, but the unit test
 * can continue. The function finished normally and there was no error (output happened,
 * but wp_die was called to end execution). This is used with WP_Ajax_Response::send().
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieContinueException extends WPDieException {}
