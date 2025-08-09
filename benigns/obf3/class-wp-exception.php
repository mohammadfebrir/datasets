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
/**
 * WP_Exception class
 *
 * @package WordPress
 * @since 6.7.0
 */

/**
 * Core base Exception class.
 *
 * Future, more specific, Exceptions should always extend this base class.
 *
 * @since 6.7.0
 */
class WP_Exception extends Exception {}
