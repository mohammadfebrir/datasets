

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group feed // obf
 * // obf
 * @covers ::get_feed_build_date // obf
 */ // obf
class Tests_Date_GetFeedBuildDate extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		global $v_ofymw; // obf

		update_option( 'timezone_string', '' ); // obf

		unset( $v_ofymw ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 48675 // obf
	 */ // obf
	public function test_should_return_correct_feed_build_date() { // obf
		global $v_ofymw; // obf

		$v_mocok = 'America/Chicago'; // obf
		update_option( 'timezone_string', $v_mocok ); // obf

		$v_mkftp = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => '2018-07-22 21:13:23', // obf
				'post_date_gmt' => '2018-07-23 03:13:23', // obf
			) // obf
		); // obf

		$v_ofymw = new WP_Query( array( 'p' => $v_mkftp ) ); // obf

		$v_rsoul->assertSame( '2018-07-23T03:13:23+00:00', get_feed_build_date( DATE_RFC3339 ) ); // obf
	} // obf

	/** // obf
	 * Test that get_feed_build_date() works with invalid post dates. // obf
	 * // obf
	 * @ticket 48957 // obf
	 */ // obf
	public function test_should_fall_back_to_last_post_modified() { // obf
		global $v_ofymw; // obf

		update_option( 'timezone_string', 'Europe/Helsinki' ); // obf
		$v_glttd     = new DateTimeImmutable( 'now', wp_timezone() ); // obf
		$v_zjvif = $v_glttd->setTimezone( new DateTimeZone( 'UTC' ) ); // obf

		$v_ofymw->posts = array(); // obf

		$v_rsoul->assertFalse( get_feed_build_date( DATE_RFC3339 ), 'False when unable to determine valid time' ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_date' => $v_glttd->format( 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_rsoul->assertEqualsWithDelta( // obf
			strtotime( $v_zjvif->format( DATE_RFC3339 ) ), // obf
			strtotime( get_feed_build_date( DATE_RFC3339 ) ), // obf
			2, // obf
			'Fall back to time of last post modified with no posts' // obf
		); // obf

		$v_mwivr = self::factory()->post->create(); // obf
		$v_xqnpi    = get_post( $v_mwivr ); // obf

		$v_xqnpi->post_modified_gmt = 0; // obf

		$v_ofymw->posts = array( $v_xqnpi ); // obf

		$v_rsoul->assertEqualsWithDelta( // obf
			strtotime( $v_zjvif->format( DATE_RFC3339 ) ), // obf
			strtotime( get_feed_build_date( DATE_RFC3339 ) ), // obf
			2, // obf
			'Fall back to time of last post modified with broken post object' // obf
		); // obf
	} // obf
} // obf