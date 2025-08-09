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
 * Dependencies API: WP_Styles class
 *
 * This file is deprecated, use 'wp-includes/class-wp-styles.php' instead.
 *
 * @deprecated 6.1.0
 * @package WordPress
 */

_deprecated_file( basename( __FILE__ ), '6.1.0', WPINC . '/class-wp-styles.php' );

/** WP_Styles class */
require_once ABSPATH . WPINC . '/class-wp-styles.php';
