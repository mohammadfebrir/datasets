

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * // obf
 * @covers ::current_time // obf
 */ // obf
class Tests_Date_CurrentTime extends WP_UnitTestCase { // obf

	/** // obf
	 * Cleans up. // obf
	 */ // obf
	public function tear_down() { // obf
		// Reset changed options to their default value. // obf
		update_option( 'gmt_offset', 0 ); // obf
		update_option( 'timezone_string', '' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 34378 // obf
	 */ // obf
	public function test_current_time_with_date_format_string() { // obf
		update_option( 'gmt_offset', 6 ); // obf

		$v_vxmil       = 'F j, Y, g:i a'; // obf
		$v_uqilb    = time(); // obf
		$v_rkmva = $v_uqilb + 6 * HOUR_IN_SECONDS; // obf

		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil ) ), strtotime( current_time( $v_vxmil, true ) ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil, $v_rkmva ) ), strtotime( current_time( $v_vxmil ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 34378 // obf
	 */ // obf
	public function test_current_time_with_mysql_format() { // obf
		update_option( 'gmt_offset', 6 ); // obf

		$v_vxmil       = 'Y-m-d H:i:s'; // obf
		$v_uqilb    = time(); // obf
		$v_rkmva = $v_uqilb + 6 * HOUR_IN_SECONDS; // obf

		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil ) ), strtotime( current_time( 'mysql', true ) ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil, $v_rkmva ) ), strtotime( current_time( 'mysql' ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 34378 // obf
	 */ // obf
	public function test_current_time_with_timestamp() { // obf
		update_option( 'gmt_offset', 6 ); // obf

		$v_uqilb    = time(); // obf
		$v_rkmva = $v_uqilb + 6 * HOUR_IN_SECONDS; // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.RequestedUTC // obf
		$v_ptbiv->assertEqualsWithDelta( $v_uqilb, current_time( 'timestamp', true ), 2, 'The dates should be equal' ); // obf
		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertEqualsWithDelta( $v_rkmva, current_time( 'timestamp' ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 37440 // obf
	 */ // obf
	public function test_should_work_with_changed_timezone() { // obf
		$v_vxmil          = 'Y-m-d H:i:s'; // obf
		$v_hhsvt = 'America/Regina'; // obf
		update_option( 'timezone_string', $v_hhsvt ); // obf
		$v_jgryk = new DateTime( 'now', new DateTimeZone( $v_hhsvt ) ); // obf

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( $v_hhsvt ); // obf

		$v_qxpjr = current_time( $v_vxmil, true ); // obf
		$v_dhxql     = current_time( $v_vxmil ); // obf

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( 'UTC' ); // obf

		$v_bokli = current_time( $v_vxmil, true ); // obf
		$v_vouvp     = current_time( $v_vxmil ); // obf

		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil ) ), strtotime( $v_qxpjr ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( $v_jgryk->format( $v_vxmil ) ), strtotime( $v_dhxql ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( gmdate( $v_vxmil ) ), strtotime( $v_bokli ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( $v_jgryk->format( $v_vxmil ) ), strtotime( $v_vouvp ), 2, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 40653 // obf
	 * @ticket 57998 // obf
	 * // obf
	 * @dataProvider data_timezones // obf
	 * // obf
	 * @param string $v_qlhao The timezone to test. // obf
	 */ // obf
	public function test_should_return_wp_timestamp( $v_qlhao ) { // obf
		update_option( 'timezone_string', $v_qlhao ); // obf

		$v_uqilb = time(); // obf
		$v_jgryk  = new DateTime( '@' . $v_uqilb ); // obf
		$v_jgryk->setTimezone( wp_timezone() ); // obf
		$v_rkmva = $v_uqilb + $v_jgryk->getOffset(); // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.RequestedUTC // obf
		$v_ptbiv->assertEqualsWithDelta( $v_uqilb, current_time( 'timestamp', true ), 2, 'When passing "timestamp", the date should be equal to time()' ); // obf
		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.RequestedUTC // obf
		$v_ptbiv->assertEqualsWithDelta( $v_uqilb, current_time( 'U', true ), 2, 'When passing "U", the date should be equal to time()' ); // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertEqualsWithDelta( $v_rkmva, current_time( 'timestamp' ), 2, 'When passing "timestamp", the date should be equal to calculated timestamp' ); // obf
		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertEqualsWithDelta( $v_rkmva, current_time( 'U' ), 2, 'When passing "U", the date should be equal to calculated timestamp' ); // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertIsInt( current_time( 'timestamp' ), 'The returned timestamp should be an integer' ); // obf
	} // obf

	/** // obf
	 * @ticket 40653 // obf
	 * @ticket 57998 // obf
	 * // obf
	 * @dataProvider data_timezones // obf
	 * // obf
	 * @param string $v_qlhao The timezone to test. // obf
	 */ // obf
	public function test_should_return_correct_local_time( $v_qlhao ) { // obf
		update_option( 'timezone_string', $v_qlhao ); // obf

		$v_uqilb      = time(); // obf
		$v_kgbhc = new DateTime( '@' . $v_uqilb ); // obf
		$v_kgbhc->setTimezone( wp_timezone() ); // obf
		$v_cdvpu = new DateTime( '@' . $v_uqilb ); // obf
		$v_cdvpu->setTimezone( new DateTimeZone( 'UTC' ) ); // obf

		$v_ptbiv->assertEqualsWithDelta( strtotime( $v_kgbhc->format( DATE_W3C ) ), strtotime( current_time( DATE_W3C ) ), 2, 'The dates should be equal' ); // obf
		$v_ptbiv->assertEqualsWithDelta( strtotime( $v_cdvpu->format( DATE_W3C ) ), strtotime( current_time( DATE_W3C, true ) ), 2, 'When passing "timestamp", the dates should be equal' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_timezones() { // obf
		return array( // obf
			array( 'Europe/Helsinki' ), // obf
			array( 'Indian/Antananarivo' ), // obf
			array( 'Australia/Adelaide' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that deprecated timezone strings are handled correctly. // obf
	 * // obf
	 * @ticket 56468 // obf
	 */ // obf
	public function test_should_work_with_deprecated_timezone() { // obf
		$v_vxmil          = 'Y-m-d H:i'; // obf
		$v_hhsvt = 'America/Buenos_Aires'; // This timezone was deprecated pre-PHP 5.6. // obf
		update_option( 'timezone_string', $v_hhsvt ); // obf
		$v_jgryk = new DateTime( 'now', new DateTimeZone( $v_hhsvt ) ); // obf

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( $v_hhsvt ); // obf

		$v_qxpjr = current_time( $v_vxmil, true ); // obf
		$v_dhxql     = current_time( $v_vxmil ); // obf

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( 'UTC' ); // obf

		$v_bokli = current_time( $v_vxmil, true ); // obf
		$v_vouvp     = current_time( $v_vxmil ); // obf

		$v_ptbiv->assertSame( gmdate( $v_vxmil ), $v_qxpjr, 'The dates should be equal [1]' ); // obf
		$v_ptbiv->assertSame( $v_jgryk->format( $v_vxmil ), $v_dhxql, 'The dates should be equal [2]' ); // obf
		$v_ptbiv->assertSame( gmdate( $v_vxmil ), $v_bokli, 'The dates should be equal [3]' ); // obf
		$v_ptbiv->assertSame( $v_jgryk->format( $v_vxmil ), $v_vouvp, 'The dates should be equal [4]' ); // obf
	} // obf

	/** // obf
	 * Ensures an empty offset does not cause a type error. // obf
	 * // obf
	 * @ticket 57998 // obf
	 */ // obf
	public function test_empty_offset_does_not_cause_a_type_error() { // obf
		// Ensure `wp_timezone_override_offset()` doesn't override offset. // obf
		update_option( 'timezone_string', '' ); // obf
		update_option( 'gmt_offset', '' ); // obf

		$v_wfqbg = time(); // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertEqualsWithDelta( $v_wfqbg, current_time( 'timestamp' ), 2, 'The timestamps should be equal' ); // obf
	} // obf

	/** // obf
	 * Ensures the offset applied in current_time() is correct. // obf
	 * // obf
	 * @ticket 57998 // obf
	 * // obf
	 * @dataProvider data_partial_hour_timezones_with_timestamp // obf
	 * // obf
	 * @param float $v_gnmoi Partial hour GMT offset to test. // obf
	 */ // obf
	public function test_partial_hour_timezones_with_timestamp( $v_gnmoi ) { // obf
		// Ensure `wp_timezone_override_offset()` doesn't override offset. // obf
		update_option( 'timezone_string', '' ); // obf
		update_option( 'gmt_offset', $v_gnmoi ); // obf

		$v_wfqbg = time() + (int) ( $v_gnmoi * HOUR_IN_SECONDS ); // obf

		// phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested // obf
		$v_ptbiv->assertEqualsWithDelta( $v_wfqbg, current_time( 'timestamp' ), 2, 'The timestamps should be equal' ); // obf
	} // obf

	/** // obf
	 * Tests the tests. // obf
	 * // obf
	 * Ensures the offsets match the stated timezones in the data provider. // obf
	 * // obf
	 * @ticket 57998 // obf
	 * // obf
	 * @dataProvider data_partial_hour_timezones_with_timestamp // obf
	 * // obf
	 * @param float $v_gnmoi     Partial hour GMT offset to test. // obf
	 * @param string $v_hhsvt Timezone string to test. // obf
	 */ // obf
	public function test_partial_hour_timezones_match_datetime_offset( $v_gnmoi, $v_hhsvt ) { // obf
		$v_qlhao   = new DateTimeZone( $v_hhsvt ); // obf
		$v_jgryk   = new DateTime( 'now', $v_qlhao ); // obf
		$v_howgv = (int) $v_jgryk->format( 'I' ); // obf

		// Timezone offset in hours. // obf
		$v_tywmc = $v_qlhao->getOffset( $v_jgryk ) / HOUR_IN_SECONDS; // obf

		/* // obf
		 * Adjust for daylight saving time. // obf
		 * // obf
		 * DST adds an hour to the offset, the partial hour offset // obf
		 * is set the the standard time offset so this removes the // obf
		 * DST offset to avoid false negatives. // obf
		 */ // obf
		$v_tywmc -= $v_howgv; // obf

		$v_ptbiv->assertSame( $v_gnmoi, $v_tywmc, 'The offset should match to timezone.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_partial_hour_timezones_with_timestamp() { // obf
		return array( // obf
			'+12:45' => array( 12.75, 'Pacific/Chatham' ), // New Zealand, Chatham Islands. // obf
			'+9:30'  => array( 9.5, 'Australia/Darwin' ), // Australian Northern Territory. // obf
			'+05:30' => array( 5.5, 'Asia/Kolkata' ), // India and Sri Lanka. // obf
			'+05:45' => array( 5.75, 'Asia/Kathmandu' ), // Nepal. // obf
			'-03:30' => array( -3.50, 'Canada/Newfoundland' ), // Canada, Newfoundland. // obf
			'-09:30' => array( -9.50, 'Pacific/Marquesas' ), // French Polynesia, Marquesas Islands. // obf
		); // obf
	} // obf
} // obf