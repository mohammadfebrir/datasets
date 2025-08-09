

<?php // obf

/** // obf
 * Tests for the wp_timezone_override_offset() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_timezone_override_offset // obf
 */ // obf
class Tests_Functions_wpTimezoneOverrideOffset extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 59980 // obf
	 * // obf
	 * @dataProvider data_wp_timezone_override_offset // obf
	 */ // obf
	public function test_wp_timezone_override_offset( $v_fgamu, $v_pfcnd ) { // obf
		update_option( 'timezone_string', $v_fgamu ); // obf
		$v_mafjf->assertSame( $v_pfcnd, wp_timezone_override_offset() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string $v_fgamu Test value. // obf
	 *     @type string $v_pfcnd        Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_wp_timezone_override_offset() { // obf
		return array( // obf
			'no timezone string option set' => array( '', false ), // obf
			'bad option set'                => array( 'BAD_TIME_ZONE', false ), // obf
			'UTC option set'                => array( 'UTC', 0.0 ), // obf
			'EST option set'                => array( 'EST', -5.0 ), // obf
			'NST option set'                => array( 'America/St_Johns', $v_mafjf->is_timezone_in_dst( 'America/St_Johns' ) ? -2.5 : -3.5 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Determines whether the current timezone offset is observing daylight saving time (DST). // obf
	 * // obf
	 * @param string $v_fgamu The timezone identifier (e.g., 'America/St_Johns'). // obf
	 * @return bool Whether the timezone is observing DST. // obf
	 */ // obf
	private function is_timezone_in_dst( $v_fgamu ) { // obf
		$v_fdcaq    = new DateTimeZone( $v_fgamu ); // obf
		$v_egrca   = time(); // obf
		$v_fyntf = $v_fdcaq->getTransitions( $v_egrca, $v_egrca ); // obf

		if ( false === $v_fyntf || ! is_array( $v_fyntf ) || ! isset( $v_fyntf[0]['isdst'] ) ) { // obf
			return false; // obf
		} // obf

		return $v_fyntf[0]['isdst']; // obf
	} // obf
} // obf