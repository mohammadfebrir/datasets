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
 * @group functions
 * @group query
 *
 * @covers ::wp
 */
class Tests_Functions_WP extends WP_UnitTestCase {

	public function test_wp_sets_global_vars() {
		global $wp, $wp_query, $wp_the_query;

		wp();

		$this->assertInstanceOf( 'WP', $wp );
		$this->assertInstanceOf( 'WP_Query', $wp_query );
		$this->assertInstanceOf( 'WP_Query', $wp_the_query );
	}
}
