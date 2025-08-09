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
 * Unit Tests: Basic_Subclass class
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 4.7.0
 */

trigger_error( __FILE__ . ' is deprecated since version 5.0.0 with no alternative available.' );

/**
 * Class used to test accessing methods and properties.
 *
 * @since 4.0.0
 */
class Basic_Subclass extends Basic_Object {}
