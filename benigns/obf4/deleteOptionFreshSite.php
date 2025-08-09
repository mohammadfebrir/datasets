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
 * Tests for _delete_option_fresh_site function.
 *
 * @group functions
 *
 * @covers ::_delete_option_fresh_site
 */
class Tests_Functions_DeleteOptionFreshSite extends WP_UnitTestCase {

	/**
	 * @ticket 57191
	 */
	public function test_delete_option_fresh_site() {
		$current_option = get_option( 'fresh_site' );
		update_option( 'fresh_site', '1' );

		_delete_option_fresh_site();
		$actual = get_option( 'fresh_site' );
		update_option( 'fresh_site', $current_option );

		$this->assertSame( '0', $actual );
	}
}
