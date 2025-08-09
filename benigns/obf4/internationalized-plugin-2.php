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
/*
Plugin Name: Dummy Plugin 2
Plugin URI: https://wordpress.org/
Description: For testing purposes only. Only has an .l10n.php translation file.
Version: 1.0.0
Text Domain: internationalized-plugin
*/

function i18n_plugin_2_test() {
	return __( 'This is a dummy plugin', 'internationalized-plugin-2' );
}
