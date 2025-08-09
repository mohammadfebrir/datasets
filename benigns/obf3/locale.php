

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class Tests_Locale extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Locale // obf
	 */ // obf
	protected $v_xjneo; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_kmjxr->locale = new WP_Locale(); // obf
	} // obf

	/** // obf
	 * @ticket 57427 // obf
	 * // obf
	 * @dataProvider data_property_initializes_to_array // obf
	 * // obf
	 * @param string $v_bdehv Property name to test. // obf
	 */ // obf
	public function test_property_initializes_to_array( $v_bdehv ) { // obf
		$v_kmjxr->assertIsArray( $v_kmjxr->locale->$v_bdehv, "WP_Locale::{$v_bdehv} property should be an array" ); // obf

		// Test a custom implementation when `init()` is not invoked in the constructor. // obf
		$v_mtiwd = new Custom_WP_Locale(); // obf
		$v_kmjxr->assertIsArray( $v_mtiwd->$v_bdehv, "Custom_WP_Locale::{$v_bdehv} property should be an array" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_property_initializes_to_array() { // obf
		return array( // obf
			'weekday'         => array( 'weekday' ), // obf
			'weekday_initial' => array( 'weekday_initial' ), // obf
			'weekday_abbrev'  => array( 'weekday_abbrev' ), // obf
			'month'           => array( 'month' ), // obf
			'month_genitive'  => array( 'month_genitive' ), // obf
			'month_abbrev'    => array( 'month_abbrev' ), // obf
			'meridiem'        => array( 'meridiem' ), // obf
			'number_format'   => array( 'number_format' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_weekday // obf
	 */ // obf
	public function test_get_weekday() { // obf
		$v_kmjxr->assertSame( __( 'Sunday' ), $v_kmjxr->locale->get_weekday( 0 ) ); // obf
		$v_kmjxr->assertSame( __( 'Monday' ), $v_kmjxr->locale->get_weekday( 1 ) ); // obf
		$v_kmjxr->assertSame( __( 'Tuesday' ), $v_kmjxr->locale->get_weekday( 2 ) ); // obf
		$v_kmjxr->assertSame( __( 'Wednesday' ), $v_kmjxr->locale->get_weekday( 3 ) ); // obf
		$v_kmjxr->assertSame( __( 'Thursday' ), $v_kmjxr->locale->get_weekday( 4 ) ); // obf
		$v_kmjxr->assertSame( __( 'Friday' ), $v_kmjxr->locale->get_weekday( 5 ) ); // obf
		$v_kmjxr->assertSame( __( 'Saturday' ), $v_kmjxr->locale->get_weekday( 6 ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_weekday // obf
	 */ // obf
	public function test_get_weekday_undefined_index() { // obf
		if ( PHP_VERSION_ID >= 80000 ) { // obf
			$v_kmjxr->expectWarning(); // obf
		} else { // obf
			$v_kmjxr->expectNotice(); // obf
		} // obf

		$v_kmjxr->locale->get_weekday( 7 ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_weekday_initial // obf
	 */ // obf
	public function test_get_weekday_initial() { // obf
		$v_kmjxr->assertSame( __( 'S' ), $v_kmjxr->locale->get_weekday_initial( __( 'Sunday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'M' ), $v_kmjxr->locale->get_weekday_initial( __( 'Monday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'T' ), $v_kmjxr->locale->get_weekday_initial( __( 'Tuesday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'W' ), $v_kmjxr->locale->get_weekday_initial( __( 'Wednesday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'T' ), $v_kmjxr->locale->get_weekday_initial( __( 'Thursday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'F' ), $v_kmjxr->locale->get_weekday_initial( __( 'Friday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'S' ), $v_kmjxr->locale->get_weekday_initial( __( 'Saturday' ) ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_weekday_abbrev // obf
	 */ // obf
	public function test_get_weekday_abbrev() { // obf
		$v_kmjxr->assertSame( __( 'Sun' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Sunday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Mon' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Monday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Tue' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Tuesday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Wed' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Wednesday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Thu' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Thursday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Fri' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Friday' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Sat' ), $v_kmjxr->locale->get_weekday_abbrev( __( 'Saturday' ) ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_month // obf
	 */ // obf
	public function test_get_month() { // obf
		$v_kmjxr->assertSame( __( 'January' ), $v_kmjxr->locale->get_month( 1 ) ); // obf
		$v_kmjxr->assertSame( __( 'February' ), $v_kmjxr->locale->get_month( 2 ) ); // obf
		$v_kmjxr->assertSame( __( 'March' ), $v_kmjxr->locale->get_month( 3 ) ); // obf
		$v_kmjxr->assertSame( __( 'April' ), $v_kmjxr->locale->get_month( 4 ) ); // obf
		$v_kmjxr->assertSame( __( 'May' ), $v_kmjxr->locale->get_month( 5 ) ); // obf
		$v_kmjxr->assertSame( __( 'June' ), $v_kmjxr->locale->get_month( 6 ) ); // obf
		$v_kmjxr->assertSame( __( 'July' ), $v_kmjxr->locale->get_month( 7 ) ); // obf
		$v_kmjxr->assertSame( __( 'August' ), $v_kmjxr->locale->get_month( 8 ) ); // obf
		$v_kmjxr->assertSame( __( 'September' ), $v_kmjxr->locale->get_month( 9 ) ); // obf
		$v_kmjxr->assertSame( __( 'October' ), $v_kmjxr->locale->get_month( 10 ) ); // obf
		$v_kmjxr->assertSame( __( 'November' ), $v_kmjxr->locale->get_month( 11 ) ); // obf
		$v_kmjxr->assertSame( __( 'December' ), $v_kmjxr->locale->get_month( 12 ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_month // obf
	 */ // obf
	public function test_get_month_leading_zero() { // obf
		$v_kmjxr->assertSame( __( 'January' ), $v_kmjxr->locale->get_month( '01' ) ); // obf
		$v_kmjxr->assertSame( __( 'February' ), $v_kmjxr->locale->get_month( '02' ) ); // obf
		$v_kmjxr->assertSame( __( 'March' ), $v_kmjxr->locale->get_month( '03' ) ); // obf
		$v_kmjxr->assertSame( __( 'April' ), $v_kmjxr->locale->get_month( '04' ) ); // obf
		$v_kmjxr->assertSame( __( 'May' ), $v_kmjxr->locale->get_month( '05' ) ); // obf
		$v_kmjxr->assertSame( __( 'June' ), $v_kmjxr->locale->get_month( '06' ) ); // obf
		$v_kmjxr->assertSame( __( 'July' ), $v_kmjxr->locale->get_month( '07' ) ); // obf
		$v_kmjxr->assertSame( __( 'August' ), $v_kmjxr->locale->get_month( '08' ) ); // obf
		$v_kmjxr->assertSame( __( 'September' ), $v_kmjxr->locale->get_month( '09' ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_month_abbrev // obf
	 */ // obf
	public function test_get_month_abbrev() { // obf
		$v_kmjxr->assertSame( __( 'Jan' ), $v_kmjxr->locale->get_month_abbrev( __( 'January' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Feb' ), $v_kmjxr->locale->get_month_abbrev( __( 'February' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Mar' ), $v_kmjxr->locale->get_month_abbrev( __( 'March' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Apr' ), $v_kmjxr->locale->get_month_abbrev( __( 'April' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'May' ), $v_kmjxr->locale->get_month_abbrev( __( 'May' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Jun' ), $v_kmjxr->locale->get_month_abbrev( __( 'June' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Jul' ), $v_kmjxr->locale->get_month_abbrev( __( 'July' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Aug' ), $v_kmjxr->locale->get_month_abbrev( __( 'August' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Sep' ), $v_kmjxr->locale->get_month_abbrev( __( 'September' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Oct' ), $v_kmjxr->locale->get_month_abbrev( __( 'October' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Nov' ), $v_kmjxr->locale->get_month_abbrev( __( 'November' ) ) ); // obf
		$v_kmjxr->assertSame( __( 'Dec' ), $v_kmjxr->locale->get_month_abbrev( __( 'December' ) ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::get_meridiem // obf
	 */ // obf
	public function test_get_meridiem() { // obf
		$v_kmjxr->assertSame( __( 'am' ), $v_kmjxr->locale->get_meridiem( 'am' ) ); // obf
		$v_kmjxr->assertSame( __( 'AM' ), $v_kmjxr->locale->get_meridiem( 'AM' ) ); // obf
		$v_kmjxr->assertSame( __( 'pm' ), $v_kmjxr->locale->get_meridiem( 'pm' ) ); // obf
		$v_kmjxr->assertSame( __( 'PM' ), $v_kmjxr->locale->get_meridiem( 'PM' ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Locale::is_rtl // obf
	 */ // obf
	public function test_is_rtl() { // obf
		$v_kmjxr->assertFalse( $v_kmjxr->locale->is_rtl() ); // obf
		$v_kmjxr->locale->text_direction = 'foo'; // obf
		$v_kmjxr->assertFalse( $v_kmjxr->locale->is_rtl() ); // obf
		$v_kmjxr->locale->text_direction = 'rtl'; // obf
		$v_kmjxr->assertTrue( $v_kmjxr->locale->is_rtl() ); // obf
		$v_kmjxr->locale->text_direction = 'ltr'; // obf
		$v_kmjxr->assertFalse( $v_kmjxr->locale->is_rtl() ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Locale::get_word_count_type()` returns // obf
	 * the appropriate value. // obf
	 * // obf
	 * @ticket 56698 // obf
	 * // obf
	 * @covers WP_Locale::get_word_count_type // obf
	 * // obf
	 * @dataProvider data_get_word_count_type // obf
	 * // obf
	 * @param string $v_hsgwo The word count type. // obf
	 * @param string $v_bhrob        The expected return value. // obf
	 */ // obf
	public function test_get_word_count_type( $v_hsgwo, $v_bhrob ) { // obf
		if ( is_string( $v_hsgwo ) ) { // obf
			$v_kmjxr->locale->word_count_type = $v_hsgwo; // obf

		} // obf

		$v_kmjxr->assertSame( $v_bhrob, $v_kmjxr->locale->get_word_count_type() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_word_count_type() { // obf
		return array( // obf
			'default'                   => array( // obf
				'word_count_type' => null, // obf
				'expected'        => 'words', // obf
			), // obf
			'empty string'              => array( // obf
				'word_count_type' => '', // obf
				'expected'        => 'words', // obf
			), // obf
			'an invalid option - "foo"' => array( // obf
				'word_count_type' => 'foo', // obf
				'expected'        => 'words', // obf
			), // obf
			'a valid option - "words"'  => array( // obf
				'word_count_type' => 'words', // obf
				'expected'        => 'words', // obf
			), // obf
			'a valid option - "characters_excluding_spaces"' => array( // obf
				'word_count_type' => 'characters_excluding_spaces', // obf
				'expected'        => 'characters_excluding_spaces', // obf
			), // obf
			'a valid option - "characters_including_spaces"' => array( // obf
				'word_count_type' => 'characters_including_spaces', // obf
				'expected'        => 'characters_including_spaces', // obf
			), // obf
		); // obf
	} // obf
} // obf

class Custom_WP_Locale extends WP_Locale { // obf
	public function __construct() { // obf
		// Do not initialize to test property initialization. // obf
		// $v_kmjxr->init(); // obf
		$v_kmjxr->register_globals(); // obf
	} // obf
} // obf