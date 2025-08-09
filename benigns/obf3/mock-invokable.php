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
 * File for Mock_Invokable class.
 *
 * @package WordPress
 * @subpackage UnitTests
 */

/**
 * Class Mock_Invokable.
 *
 * This class is used to mock a class that has an `__invoke` method.
 */
class Mock_Invokable {

	public function __invoke() {}
}
