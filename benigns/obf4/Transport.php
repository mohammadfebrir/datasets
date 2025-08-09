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
 * Transport Exception
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception;

use WpOrg\Requests\Exception;

/**
 * Transport Exception
 *
 * @package Requests\Exceptions
 */
class Transport extends Exception {}
