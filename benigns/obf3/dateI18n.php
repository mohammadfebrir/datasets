

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * // obf
 * @covers ::date_i18n // obf
 */ // obf
class Tests_Date_DateI18n extends WP_UnitTestCase { // obf

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
	 * @ticket 28636 // obf
	 */ // obf
	public function test_should_return_current_time_on_invalid_timestamp() { // obf
		$v_mmtzt = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_mmtzt ); // obf

		$v_uikej     = new DateTime( 'now', new DateTimeZone( $v_mmtzt ) ); // obf
		$v_xzgfx = $v_uikej->getTimestamp() + $v_uikej->getOffset(); // obf

		$v_tdqsm->assertEqualsWithDelta( $v_xzgfx, date_i18n( 'U', 'invalid' ), 5, 'The dates should be equal' ); // obf
	} // obf

	/** // obf
	 * @ticket 28636 // obf
	 */ // obf
	public function test_should_handle_zero_timestamp() { // obf
		$v_mmtzt = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_mmtzt ); // obf

		$v_uikej = DateTimeImmutable::createFromFormat( // obf
			'Y-m-d H:i:s', // obf
			'1970-01-01 00:00:00', // obf
			new DateTimeZone( $v_mmtzt ) // obf
		); // obf
		$v_zgljs  = $v_uikej->format( DATE_RFC3339 ); // obf

		$v_tdqsm->assertSame( 0, date_i18n( 'U', 0 ) ); // obf
		$v_tdqsm->assertSame( $v_zgljs, date_i18n( DATE_RFC3339, 0 ) ); // obf
	} // obf

	public function test_should_format_date() { // obf
		$v_tdqsm->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s' ) ), strtotime( date_i18n( 'Y-m-d H:i:s' ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	public function test_should_use_custom_timestamp() { // obf
		$v_tdqsm->assertSame( '2012-12-01 00:00:00', date_i18n( 'Y-m-d H:i:s', strtotime( '2012-12-01 00:00:00' ) ) ); // obf
	} // obf

	public function test_date_should_be_in_gmt() { // obf
		$v_tdqsm->assertEqualsWithDelta( strtotime( gmdate( DATE_RFC3339 ) ), strtotime( date_i18n( DATE_RFC3339, false, true ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	public function test_custom_timezone_setting() { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertEqualsWithDelta( strtotime( gmdate( 'Y-m-d H:i:s', time() + get_option( 'gmt_offset' ) * HOUR_IN_SECONDS ) ), strtotime( date_i18n( 'Y-m-d H:i:s' ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	public function test_date_should_be_in_gmt_with_custom_timezone_setting() { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertEqualsWithDelta( strtotime( gmdate( DATE_RFC3339 ) ), strtotime( date_i18n( DATE_RFC3339, false, true ) ), 2, 'The dates should be equal' ); // obf
	} // obf

	public function test_date_should_be_in_gmt_with_custom_timezone_setting_and_timestamp() { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertSame( '2012-12-01 00:00:00', date_i18n( 'Y-m-d H:i:s', strtotime( '2012-12-01 00:00:00' ) ) ); // obf
	} // obf

	public function test_adjusts_format_based_on_locale() { // obf
		$v_qplfh = $v_gkwmc['wp_locale']; // obf
		/* @var WP_Locale $v_lbtxu */ // obf
		$v_lbtxu = clone $v_gkwmc['wp_locale']; // obf

		$v_lbtxu->weekday[6]                            = 'Saturday_Translated'; // obf
		$v_lbtxu->weekday_abbrev['Saturday_Translated'] = 'Sat_Translated'; // obf
		$v_lbtxu->month[12]                             = 'December_Translated'; // obf
		$v_lbtxu->month_abbrev['December_Translated']   = 'Dec_Translated'; // obf
		$v_lbtxu->meridiem['am']                        = 'am_Translated'; // obf
		$v_lbtxu->meridiem['AM']                        = 'AM_Translated'; // obf

		$v_gkwmc['wp_locale'] = $v_lbtxu; // obf

		$v_zmatf = 'Saturday_Translated (Sat_Translated) 01 December_Translated (Dec_Translated) 00:00:00 am_Translated AM_Translated'; // obf
		$v_mefpg   = date_i18n( 'l (D) d F (M) H:i:s a A', strtotime( '2012-12-01 00:00:00' ) ); // obf

		// Restore original locale. // obf
		$v_gkwmc['wp_locale'] = $v_qplfh; // obf

		$v_tdqsm->assertSame( $v_zmatf, $v_mefpg ); // obf
	} // obf

	public function test_adjusts_format_based_on_timezone_string() { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertSame( '2012-12-01 00:00:00 CST -06:00 America/Regina', date_i18n( 'Y-m-d H:i:s T P e', strtotime( '2012-12-01 00:00:00' ) ) ); // obf
	} // obf

	/** // obf
	 * Ensures that deprecated timezone strings are handled correctly. // obf
	 * // obf
	 * @ticket 56468 // obf
	 */ // obf
	public function test_adjusts_format_based_on_deprecated_timezone_string() { // obf
		update_option( 'timezone_string', 'America/Buenos_Aires' ); // This timezone was deprecated pre-PHP 5.6. // obf

		$v_zmatf = '2022-08-01 00:00:00 -03 -03:00 America/Buenos_Aires'; // obf

		$v_tdqsm->assertSame( $v_zmatf, date_i18n( 'Y-m-d H:i:s T P e', strtotime( '2022-08-01 00:00:00' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34835 // obf
	 */ // obf
	public function test_gmt_offset_should_output_correct_timezone() { // obf
		$v_nucdv = 'P I O T Z e'; // obf
		$v_npcxk  = 'America/Regina'; // obf
		$v_iudyq     = new DateTimeZone( $v_npcxk ); // obf
		update_option( 'timezone_string', '' ); // obf
		$v_pqvjz = $v_iudyq->getOffset( new DateTime() ) / 3600; // obf
		update_option( 'gmt_offset', $v_pqvjz ); // obf

		$v_uikej = new DateTime( 'now', $v_iudyq ); // obf
		$v_uikej = new DateTime( $v_uikej->format( 'P' ) ); // obf

		$v_tdqsm->assertSame( $v_uikej->format( $v_nucdv ), date_i18n( $v_nucdv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20973 // obf
	 * // obf
	 * @dataProvider data_formats // obf
	 */ // obf
	public function test_date_i18n_handles_shorthand_formats( $v_amjkq, $v_igqjx ) { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertEqualsWithDelta( strtotime( date_i18n( $v_igqjx ) ), strtotime( date_i18n( $v_amjkq ) ), 2, 'The dates should be equal' ); // obf
		$v_tdqsm->assertSame( $v_amjkq, date_i18n( '\\' . $v_amjkq ) ); // obf
	} // obf

	public function data_formats() { // obf
		return array( // obf
			array( // obf
				'c', // obf
				'Y-m-d\TH:i:sP', // obf
			), // obf
			array( // obf
				'r', // obf
				'D, d M Y H:i:s O', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 25768 // obf
	 */ // obf
	public function test_should_return_wp_timestamp() { // obf
		update_option( 'timezone_string', 'Europe/Helsinki' ); // obf

		$v_uikej     = new DateTimeImmutable( 'now', wp_timezone() ); // obf
		$v_ahpcp    = $v_uikej->getTimestamp(); // obf
		$v_xzgfx = $v_ahpcp + $v_uikej->getOffset(); // obf

		$v_tdqsm->assertEqualsWithDelta( $v_xzgfx, date_i18n( 'U' ), 2, 'The dates should be equal' ); // obf
		$v_tdqsm->assertEqualsWithDelta( $v_ahpcp, date_i18n( 'U', false, true ), 2, 'The dates should be equal' ); // obf
		$v_tdqsm->assertSame( $v_xzgfx, date_i18n( 'U', $v_xzgfx ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43530 // obf
	 */ // obf
	public function test_swatch_internet_time_with_wp_timestamp() { // obf
		update_option( 'timezone_string', 'America/Regina' ); // obf

		$v_tdqsm->assertSame( gmdate( 'B' ), date_i18n( 'B' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 25768 // obf
	 */ // obf
	public function test_should_handle_escaped_formats() { // obf
		$v_dnvvl = 'D | \D | \\D | \\\D | \\\\D | \\\\\D | \\\\\\D'; // obf

		$v_tdqsm->assertSame( gmdate( $v_dnvvl ), date_i18n( $v_dnvvl ) ); // obf
	} // obf

	/** // obf
	 * @ticket 25768 // obf
	 * // obf
	 * @dataProvider data_should_handle_dst // obf
	 * // obf
	 * @param string $v_rhawg     Time to test in Y-m-d H:i:s format. // obf
	 * @param string $v_mmtzt PHP timezone string to use. // obf
	 */ // obf
	public function test_should_handle_dst( $v_rhawg, $v_mmtzt ) { // obf
		update_option( 'timezone_string', $v_mmtzt ); // obf

		$v_mmtzt     = new DateTimeZone( $v_mmtzt ); // obf
		$v_uikej     = new DateTime( $v_rhawg, $v_mmtzt ); // obf
		$v_xzgfx = strtotime( $v_rhawg ); // obf
		$v_dnvvl       = 'I ' . DATE_RFC3339; // obf

		$v_tdqsm->assertSame( $v_uikej->format( $v_dnvvl ), date_i18n( $v_dnvvl, $v_xzgfx ) ); // obf
	} // obf

	public function data_should_handle_dst() { // obf
		return array( // obf
			'Before DST start' => array( '2019-03-31 02:59:00', 'Europe/Helsinki' ), // obf
			'After DST start'  => array( '2019-03-31 04:01:00', 'Europe/Helsinki' ), // obf
			'Before DST end'   => array( '2019-10-27 02:59:00', 'Europe/Helsinki' ), // obf
			'After DST end'    => array( '2019-10-27 04:01:00', 'Europe/Helsinki' ), // obf
		); // obf
	} // obf
} // obf