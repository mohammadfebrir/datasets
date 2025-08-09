

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group post // obf
 * // obf
 * @covers ::get_post_time // obf
 * @covers ::get_post_modified_time // obf
 */ // obf
class Tests_Date_GetPostTime extends WP_UnitTestCase { // obf

	/** // obf
	 * Cleans up. // obf
	 */ // obf
	public function tear_down() { // obf
		// Reset the timezone option to the default value. // obf
		update_option( 'timezone_string', '' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_post_time_returns_correct_time_with_post_id() { // obf
		$v_xriur = self::factory()->post->create( array( 'post_date' => '2014-03-01 16:35:00' ) ); // obf

		$v_mbzpl->assertSame( '16:35:00', get_post_time( 'H:i:s', false, $v_xriur ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_post_time_returns_false_with_null_or_non_existing_post() { // obf
		$v_mbzpl->assertFalse( get_post_time() ); // obf
		$v_mbzpl->assertFalse( get_post_time( 'h:i:s' ) ); // obf
		$v_mbzpl->assertFalse( get_post_time( '', false, 9 ) ); // obf
		$v_mbzpl->assertFalse( get_post_time( 'h:i:s', false, 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_post_modified_time_returns_correct_time_with_post_id() { // obf
		$v_xriur = self::factory()->post->create( array( 'post_date' => '2014-03-01 16:35:00' ) ); // obf

		$v_mbzpl->assertSame( '16:35:00', get_post_modified_time( 'H:i:s', false, $v_xriur ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_post_modified_time_returns_false_with_null_or_non_existing_post() { // obf
		$v_mbzpl->assertFalse( get_post_modified_time() ); // obf
		$v_mbzpl->assertFalse( get_post_modified_time( 'h:i:s' ) ); // obf
		$v_mbzpl->assertFalse( get_post_modified_time( '', false, 9 ) ); // obf
		$v_mbzpl->assertFalse( get_post_modified_time( 'h:i:s', false, 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 25002 // obf
	 */ // obf
	public function test_should_return_wp_timestamp() { // obf
		$v_dxyyz = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_dxyyz ); // obf

		$v_maxoh     = new DateTimeImmutable( 'now', new DateTimeZone( $v_dxyyz ) ); // obf
		$v_ifbnl        = $v_maxoh->format( 'Y-m-d H:i:s' ); // obf
		$v_ebhto    = $v_maxoh->getTimestamp(); // obf
		$v_czqbb = $v_maxoh->getTimestamp() + $v_maxoh->getOffset(); // obf

		$v_xriur = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_ifbnl, // obf
				'post_modified' => $v_ifbnl, // obf
			) // obf
		); // obf

		$v_mbzpl->assertSame( $v_czqbb, get_post_time( 'U', false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_czqbb, get_post_time( 'G', false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_ebhto, get_post_time( 'U', true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_ebhto, get_post_time( 'G', true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_czqbb, get_post_modified_time( 'U', false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_czqbb, get_post_modified_time( 'G', false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_ebhto, get_post_modified_time( 'U', true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_ebhto, get_post_modified_time( 'G', true, $v_xriur ) ); // obf
	} // obf

	/** // obf
	 * @ticket 25002 // obf
	 */ // obf
	public function test_should_return_time() { // obf
		$v_dxyyz = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_dxyyz ); // obf

		$v_maxoh    = new DateTimeImmutable( 'now', new DateTimeZone( $v_dxyyz ) ); // obf
		$v_ifbnl       = $v_maxoh->format( 'Y-m-d H:i:s' ); // obf
		$v_hjsmb     = $v_maxoh->format( DATE_RFC3339 ); // obf
		$v_gozre = $v_maxoh->setTimezone( new DateTimeZone( 'UTC' ) )->format( DATE_RFC3339 ); // obf
		$v_xriur     = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_ifbnl, // obf
				'post_modified' => $v_ifbnl, // obf
			) // obf
		); // obf

		$v_mbzpl->assertSame( $v_hjsmb, get_post_time( DATE_RFC3339, false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_gozre, get_post_time( DATE_RFC3339, true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_hjsmb, get_post_time( DATE_RFC3339, false, $v_xriur, true ) ); // obf
		$v_mbzpl->assertSame( $v_gozre, get_post_time( DATE_RFC3339, true, $v_xriur, true ) ); // obf
		$v_mbzpl->assertSame( $v_hjsmb, get_post_modified_time( DATE_RFC3339, false, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_gozre, get_post_modified_time( DATE_RFC3339, true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_hjsmb, get_post_modified_time( DATE_RFC3339, false, $v_xriur, true ) ); // obf
		$v_mbzpl->assertSame( $v_gozre, get_post_modified_time( DATE_RFC3339, true, $v_xriur, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48384 // obf
	 */ // obf
	public function test_should_keep_utc_time_on_timezone_change() { // obf
		$v_dxyyz = 'UTC'; // obf
		update_option( 'timezone_string', $v_dxyyz ); // obf

		$v_maxoh = new DateTimeImmutable( 'now', new DateTimeZone( $v_dxyyz ) ); // obf
		$v_ifbnl    = $v_maxoh->format( 'Y-m-d H:i:s' ); // obf
		$v_hjsmb  = $v_maxoh->format( DATE_RFC3339 ); // obf
		$v_xriur  = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_ifbnl, // obf
				'post_modified' => $v_ifbnl, // obf
			) // obf
		); // obf

		update_option( 'timezone_string', 'Europe/Helsinki' ); // obf

		$v_mbzpl->assertSame( $v_hjsmb, get_post_time( DATE_RFC3339, true, $v_xriur ) ); // obf
		$v_mbzpl->assertSame( $v_hjsmb, get_post_modified_time( DATE_RFC3339, true, $v_xriur ) ); // obf
	} // obf
} // obf