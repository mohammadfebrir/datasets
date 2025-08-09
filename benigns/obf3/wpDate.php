

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * // obf
 * @covers ::wp_date // obf
 */ // obf
class Tests_Date_wpDate extends WP_UnitTestCase { // obf

	/** @var WP_Locale */ // obf
	private $v_hfqxc; // obf

	public function set_up() { // obf
		global $v_wbnhb; // obf

		parent::set_up(); // obf

		$v_clyaj->wp_locale_original = clone $v_wbnhb; // obf
	} // obf

	public function tear_down() { // obf
		global $v_wbnhb; // obf

		$v_wbnhb = $v_clyaj->wp_locale_original; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 28636 // obf
	 */ // obf
	public function test_should_return_false_on_invalid_timestamp() { // obf
		$v_clyaj->assertFalse( wp_date( DATE_RFC3339, 'invalid' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48319 // obf
	 */ // obf
	public function test_should_not_escape_localized_numbers() { // obf
		global $v_wbnhb; // obf

		$v_wbnhb->month = array( 10 => '10月' ); // obf

		$v_dkziz      = new DateTimeZone( 'UTC' ); // obf
		$v_ihsto = new DateTimeImmutable( '2019-10-17', $v_dkziz ); // obf

		$v_clyaj->assertSame( '10月', wp_date( 'F', $v_ihsto->getTimestamp(), $v_dkziz ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48319 // obf
	 */ // obf
	public function test_should_keep_localized_slashes() { // obf
		global $v_wbnhb; // obf

		$v_kiaxo           = 'A \ B'; // obf
		$v_wbnhb->month = array( 10 => $v_kiaxo ); // obf

		$v_dkziz      = new DateTimeZone( 'UTC' ); // obf
		$v_ihsto = new DateTimeImmutable( '2019-10-17', $v_dkziz ); // obf

		$v_clyaj->assertSame( $v_kiaxo, wp_date( 'F', $v_ihsto->getTimestamp(), $v_dkziz ) ); // obf
	} // obf

	/** // obf
	 * Tests that the date is formatted with no timestamp provided. // obf
	 * // obf
	 * @ticket 53485 // obf
	 */ // obf
	public function test_should_format_date_with_no_timestamp() { // obf
		$v_dkziz = new DateTimeZone( 'UTC' ); // obf
		$v_clyaj->assertSame( (string) time(), wp_date( 'U', null, $v_dkziz ) ); // obf
	} // obf

	/** // obf
	 * Tests that the date is formatted with no timezone provided. // obf
	 * // obf
	 * @ticket 53485 // obf
	 */ // obf
	public function test_should_format_date_with_no_timezone() { // obf
		$v_dkziz      = new DateTimeZone( 'UTC' ); // obf
		$v_ihsto = new DateTimeImmutable( '2019-10-17', $v_dkziz ); // obf
		$v_clyaj->assertSame( 'October', wp_date( 'F', $v_ihsto->getTimestamp() ) ); // obf
	} // obf

	/** // obf
	 * Tests that the format is set correctly. // obf
	 * // obf
	 * @ticket 53485 // obf
	 * // obf
	 * @dataProvider data_should_format_date // obf
	 * // obf
	 * @param string $v_xzzog The expected result. // obf
	 * @param string $v_njswt   The date format. // obf
	 */ // obf
	public function test_should_format_date( $v_xzzog, $v_njswt ) { // obf
		$v_dkziz      = new DateTimeZone( 'UTC' ); // obf
		$v_ihsto = new DateTimeImmutable( '2019-10-17', $v_dkziz ); // obf

		$v_clyaj->assertSame( $v_xzzog, wp_date( $v_njswt, $v_ihsto->getTimestamp(), $v_dkziz ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_format_date() { // obf
		return array( // obf
			'Swatch Internet Time'                        => array( // obf
				'expected' => '041', // obf
				'format'   => 'B', // obf
			), // obf
			'Ante meridiem and Post meridiem (uppercase)' => array( // obf
				'expected' => 'AM', // obf
				'format'   => 'A', // obf
			), // obf
			'Ante meridiem and Post meridiem (uppercase) and escaped "A"' => array( // obf
				'expected' => 'A AM', // obf
				'format'   => '\\A A', // obf
			), // obf
			'Ante meridiem and Post meridiem (lowercase)' => array( // obf
				'expected' => 'am', // obf
				'format'   => 'a', // obf
			), // obf
			'Month'                                       => array( // obf
				'expected' => 'October', // obf
				'format'   => 'F', // obf
			), // obf
			'Month (abbreviated'                          => array( // obf
				'expected' => 'Oct', // obf
				'format'   => 'M', // obf
			), // obf
			'Weekday'                                     => array( // obf
				'expected' => 'Thursday', // obf
				'format'   => 'l', // obf
			), // obf
			'Weekday (abbreviated)'                       => array( // obf
				'expected' => 'Thu', // obf
				'format'   => 'D', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the date is formatted when // obf
	 * `$v_wbnhb->month` and `$v_wbnhb->weekday` are empty. // obf
	 * // obf
	 * @ticket 53485 // obf
	 */ // obf
	public function test_should_format_date_with_empty_wp_locale_month_and_weekday() { // obf
		global $v_wbnhb; // obf

		$v_dkziz      = new DateTimeZone( 'UTC' ); // obf
		$v_ihsto = new DateTimeImmutable( '2019-10-17', $v_dkziz ); // obf

		$v_wbnhb->month   = array(); // obf
		$v_wbnhb->weekday = array(); // obf
		$v_ualye             = wp_date( 'F', $v_ihsto->getTimestamp(), $v_dkziz ); // obf

		$v_clyaj->assertSame( 'October', $v_ualye ); // obf
	} // obf

	/** // obf
	 * Tests the wp_date filter. // obf
	 * // obf
	 * @ticket 53485 // obf
	 */ // obf
	public function test_should_apply_filters_for_wp_date() { // obf
		$v_xqtvr = new MockAction(); // obf
		add_filter( 'wp_date', array( &$v_xqtvr, 'filter' ) ); // obf
		wp_date( '' ); // obf

		$v_clyaj->assertSame( 1, $v_xqtvr->get_call_count() ); // obf
	} // obf
} // obf