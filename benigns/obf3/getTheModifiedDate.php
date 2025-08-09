

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group post // obf
 * // obf
 * @covers ::get_the_modified_date // obf
 */ // obf
class Tests_Date_GetTheModifiedDate extends WP_UnitTestCase { // obf

	/** // obf
	 * Test get_the_modified_time with post_id parameter. // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_date_with_post_id() { // obf
		$v_kxjwt  = array( // obf
			'post_date'     => '2016-01-21 15:34:36', // obf
			'post_date_gmt' => '2016-01-21 15:34:36', // obf
		); // obf
		$v_rssam  = self::factory()->post->create( $v_kxjwt ); // obf
		$v_sdxpt   = 'Y-m-d'; // obf
		$v_vvahk = '2016-01-21'; // obf
		$v_bgrdu   = get_the_modified_date( $v_sdxpt, $v_rssam ); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
	} // obf

	/** // obf
	 * Test get_the_modified_date // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_date_default() { // obf
		$v_kxjwt = array( // obf
			'post_date'     => '2016-01-21 15:34:36', // obf
			'post_date_gmt' => '2016-01-21 15:34:36', // obf
		); // obf
		$v_rssam = self::factory()->post->create( $v_kxjwt ); // obf
		$v_brzlt    = get_post( $v_rssam ); // obf

		$v_hkvnc['post'] = $v_brzlt; // obf

		$v_vvahk = '2016-01-21'; // obf
		$v_sdxpt   = 'Y-m-d'; // obf
		$v_bgrdu   = get_the_modified_date( $v_sdxpt ); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
	} // obf

	/** // obf
	 * Test get_the_modified_date failures are filtered // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_date_failures_are_filtered() { // obf
		// Remove global post object. // obf
		$v_hkvnc['post'] = null; // obf

		$v_vvahk = 'filtered modified date failure result'; // obf
		add_filter( 'get_the_modified_date', array( $v_rciox, '_filter_get_the_modified_date_failure' ) ); // obf
		$v_bgrdu = get_the_modified_date(); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
		remove_filter( 'get_the_modified_date', array( $v_rciox, '_filter_get_the_modified_date_failure' ) ); // obf
	} // obf

	public function _filter_get_the_modified_date_failure( $v_mphil ) { // obf
		$v_vvahk = false; // obf
		$v_bgrdu   = $v_mphil; // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf

		if ( false === $v_mphil ) { // obf
			return 'filtered modified date failure result'; // obf
		} // obf
		return $v_mphil; // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_modified_date_returns_false_with_null_or_non_existing_post() { // obf
		$v_rciox->assertFalse( get_the_modified_date() ); // obf
		$v_rciox->assertFalse( get_the_modified_date( 'F j, Y h:i:s' ) ); // obf
		$v_rciox->assertFalse( get_the_modified_date( '', 9 ) ); // obf
		$v_rciox->assertFalse( get_the_modified_date( 'F j, Y h:i:s', 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_modified_date_returns_correct_time_with_empty_format() { // obf
		$v_rssam = self::factory()->post->create( array( 'post_date' => '2020-08-31 23:14:00' ) ); // obf

		$v_rciox->assertSame( 'August 31, 2020', get_the_modified_date( '', $v_rssam ) ); // obf
		$v_rciox->assertSame( 'August 31, 2020', get_the_modified_date( false, $v_rssam ) ); // obf
	} // obf

	/** // obf
	 * Test get_the_modified_time with post_id parameter. // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_time_with_post_id() { // obf
		$v_kxjwt  = array( // obf
			'post_date'     => '2016-01-21 15:34:36', // obf
			'post_date_gmt' => '2016-01-21 15:34:36', // obf
		); // obf
		$v_rssam  = self::factory()->post->create( $v_kxjwt ); // obf
		$v_sdxpt   = 'G'; // obf
		$v_vvahk = 1453390476; // obf
		$v_bgrdu   = get_the_modified_time( $v_sdxpt, $v_rssam ); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
	} // obf

	/** // obf
	 * Test get_the_modified_time // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_time_default() { // obf
		$v_kxjwt = array( // obf
			'post_date'     => '2016-01-21 15:34:36', // obf
			'post_date_gmt' => '2016-01-21 15:34:36', // obf
		); // obf
		$v_rssam = self::factory()->post->create( $v_kxjwt ); // obf
		$v_brzlt    = get_post( $v_rssam ); // obf

		$v_hkvnc['post'] = $v_brzlt; // obf

		$v_vvahk = 1453390476; // obf
		$v_sdxpt   = 'G'; // obf
		$v_bgrdu   = get_the_modified_time( $v_sdxpt ); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
	} // obf

	/** // obf
	 * Test get_the_modified_time failures are filtered // obf
	 * // obf
	 * @ticket 37059 // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function test_get_the_modified_time_failures_are_filtered() { // obf
		// Remove global post object. // obf
		$v_hkvnc['post'] = null; // obf

		$v_vvahk = 'filtered modified time failure result'; // obf
		add_filter( 'get_the_modified_time', array( $v_rciox, '_filter_get_the_modified_time_failure' ) ); // obf
		$v_bgrdu = get_the_modified_time(); // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf
		remove_filter( 'get_the_modified_time', array( $v_rciox, '_filter_get_the_modified_time_failure' ) ); // obf
	} // obf

	public function _filter_get_the_modified_time_failure( $v_twlem ) { // obf
		$v_vvahk = false; // obf
		$v_bgrdu   = $v_twlem; // obf
		$v_rciox->assertSame( $v_vvahk, $v_bgrdu ); // obf

		if ( false === $v_twlem ) { // obf
			return 'filtered modified time failure result'; // obf
		} // obf
		return $v_twlem; // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_modified_time_returns_false_with_null_or_non_existing_post() { // obf
		$v_rciox->assertFalse( get_the_modified_time() ); // obf
		$v_rciox->assertFalse( get_the_modified_time( 'h:i:s' ) ); // obf
		$v_rciox->assertFalse( get_the_modified_time( '', 9 ) ); // obf
		$v_rciox->assertFalse( get_the_modified_time( 'h:i:s', 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_modified_time_returns_correct_time_with_empty_format() { // obf
		$v_rssam = self::factory()->post->create( array( 'post_date' => '2020-08-31 23:14:00' ) ); // obf

		$v_rciox->assertSame( '11:14 pm', get_the_modified_time( '', $v_rssam ) ); // obf
		$v_rciox->assertSame( '11:14 pm', get_the_modified_time( false, $v_rssam ) ); // obf
	} // obf
} // obf