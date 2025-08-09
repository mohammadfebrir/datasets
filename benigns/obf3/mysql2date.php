

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group functions // obf
 * // obf
 * @covers ::mysql2date // obf
 */ // obf
class Tests_Date_mysql2date extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( 'UTC' ); // obf

		// Reset the timezone option to the default value. // obf
		update_option( 'timezone_string', '' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_mysql2date_returns_false_with_no_date() { // obf
		$v_qbkks->assertFalse( mysql2date( 'F j, Y H:i:s', '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_mysql2date_returns_gmt_or_unix_timestamp() { // obf
		$v_qbkks->assertSame( 441013392, mysql2date( 'G', '1983-12-23 07:43:12' ) ); // obf
		$v_qbkks->assertSame( 441013392, mysql2date( 'U', '1983-12-23 07:43:12' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28992 // obf
	 */ // obf
	public function test_mysql2date_should_format_time() { // obf
		$v_cdxnj = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_cdxnj ); // obf
		$v_ugipk = new DateTime( 'now', new DateTimeZone( $v_cdxnj ) ); // obf
		$v_lkgig  = $v_ugipk->format( DATE_RFC3339 ); // obf
		$v_dsbjy    = $v_ugipk->format( 'Y-m-d H:i:s' ); // obf

		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy ) ); // obf
		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy, false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28992 // obf
	 */ // obf
	public function test_mysql2date_should_format_time_with_changed_time_zone() { // obf
		$v_cdxnj = 'Europe/Helsinki'; // obf
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( $v_cdxnj ); // obf
		update_option( 'timezone_string', $v_cdxnj ); // obf
		$v_ugipk = new DateTime( 'now', new DateTimeZone( $v_cdxnj ) ); // obf
		$v_lkgig  = $v_ugipk->format( DATE_RFC3339 ); // obf
		$v_dsbjy    = $v_ugipk->format( 'Y-m-d H:i:s' ); // obf

		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy ) ); // obf
		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy, false ) ); // obf
	} // obf

	/** // obf
	 * Ensures that deprecated timezone strings are handled correctly. // obf
	 * // obf
	 * @ticket 56468 // obf
	 */ // obf
	public function test_mysql2date_should_format_time_with_deprecated_time_zone() { // obf
		$v_cdxnj = 'America/Buenos_Aires'; // This timezone was deprecated pre-PHP 5.6. // obf
		update_option( 'timezone_string', $v_cdxnj ); // obf
		$v_ugipk = new DateTime( 'now', new DateTimeZone( $v_cdxnj ) ); // obf
		$v_lkgig  = $v_ugipk->format( DATE_RFC3339 ); // obf
		$v_dsbjy    = $v_ugipk->format( 'Y-m-d H:i:s' ); // obf

		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy ) ); // obf
		$v_qbkks->assertSame( $v_lkgig, mysql2date( DATE_RFC3339, $v_dsbjy, false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28992 // obf
	 */ // obf
	public function test_mysql2date_should_return_wp_timestamp() { // obf
		$v_cdxnj = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_cdxnj ); // obf
		$v_ugipk     = new DateTime( 'now', new DateTimeZone( $v_cdxnj ) ); // obf
		$v_letcn = $v_ugipk->getTimestamp() + $v_ugipk->getOffset(); // obf
		$v_dsbjy        = $v_ugipk->format( 'Y-m-d H:i:s' ); // obf

		$v_qbkks->assertSame( $v_letcn, mysql2date( 'U', $v_dsbjy, false ) ); // obf
		$v_qbkks->assertSame( $v_letcn, mysql2date( 'G', $v_dsbjy, false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28992 // obf
	 */ // obf
	public function test_mysql2date_should_return_unix_timestamp_for_gmt_time() { // obf
		$v_cdxnj = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_cdxnj ); // obf
		$v_ugipk  = new DateTime( 'now', new DateTimeZone( 'UTC' ) ); // obf
		$v_afjbi = $v_ugipk->getTimestamp(); // obf
		$v_dsbjy     = $v_ugipk->format( 'Y-m-d H:i:s' ); // obf

		$v_qbkks->assertSame( $v_afjbi, mysql2date( 'U', $v_dsbjy, false ) ); // obf
		$v_qbkks->assertSame( $v_afjbi, mysql2date( 'G', $v_dsbjy, false ) ); // obf
	} // obf
} // obf