

<?php // obf

/** // obf
 * Tests to make sure querying posts based on various date parameters works as expected. // obf
 * // obf
 * @group query // obf
 * @group date // obf
 */ // obf
class Tests_Query_Date extends WP_UnitTestCase { // obf

	public $v_ajzus; // obf

	public static $v_hnumz = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_veszn ) { // obf
		// Be careful modifying this. Tests are coded to expect this exact sample data. // obf
		$v_ttzgs = array( // obf
			'1972-05-24 14:53:45', // obf
			'1984-07-28 19:28:56', // obf
			'2003-05-27 22:45:07', // obf
			'2004-01-03 08:54:10', // obf
			'2004-05-22 12:34:12', // obf
			'2005-02-17 00:00:15', // obf
			'2005-12-31 23:59:20', // obf
			'2007-01-22 03:49:21', // obf
			'2007-05-16 17:32:22', // obf
			'2007-09-24 07:17:23', // obf
			'2008-03-29 09:04:25', // obf
			'2008-07-15 11:32:26', // obf
			'2008-12-10 13:06:27', // obf
			'2009-06-11 21:30:28', // obf
			'2009-12-18 10:42:29', // obf
			'2010-06-17 17:09:30', // obf
			'2011-02-23 12:12:31', // obf
			'2011-07-04 01:56:32', // obf
			'2011-12-12 16:39:33', // obf
			'2012-06-13 14:03:34', // obf
			'2025-04-20 10:13:00', // obf
			'2025-04-20 10:13:01', // obf
			'2025-05-20 10:13:01', // obf
		); // obf

		foreach ( $v_ttzgs as $v_zbnwc ) { // obf
			self::$v_hnumz[] = $v_veszn->post->create( array( 'post_date' => $v_zbnwc ) ); // obf
		} // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		unset( $v_xbulz->q ); // obf
		$v_xbulz->q = new WP_Query(); // obf
	} // obf

	public function _get_query_result( $v_pcdqa = array() ) { // obf
		$v_pcdqa = wp_parse_args( // obf
			$v_pcdqa, // obf
			array( // obf
				'post_status'    => 'any', // For the future post. // obf
				'posts_per_page' => '-1',  // To make sure results are accurate. // obf
				'orderby'        => 'ID',  // Same order they were created. // obf
				'order'          => 'ASC', // obf
			) // obf
		); // obf

		return $v_xbulz->q->query( $v_pcdqa ); // obf
	} // obf

	public function test_simple_year_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'year' => 2008, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2008-03-29 09:04:25', // obf
			'2008-07-15 11:32:26', // obf
			'2008-12-10 13:06:27', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_year_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'year' => 2000, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_m_with_year_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '2007', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2007-01-22 03:49:21', // obf
			'2007-05-16 17:32:22', // obf
			'2007-09-24 07:17:23', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_m_with_year_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '1999', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_m_with_yearmonth_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '202504', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
			'2025-04-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_m_with_yearmonth_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '202502', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_m_with_yearmonthday_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '20250420', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
			'2025-04-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_m_with_yearmonthday_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '20250419', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_m_with_yearmonthdayhour_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '2025042010', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
			'2025-04-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_m_with_yearmonthdayhour_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '2025042009', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminute_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '202504201013', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
			'2025-04-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminute_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '202504201012', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminutesecond_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '20250420101301', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminutesecond_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '20250420101302', // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminutesecond_and_dashes_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => '2025-04-20 10:13:00', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24884 // obf
	 */ // obf
	public function test_simple_m_with_yearmonthdayhourminutesecond_and_dashesletters_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => 'alpha2025-04-20 10:13:00', // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2025-04-20 10:13:00', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36718 // obf
	 */ // obf
	public function test_non_scalar_m_should_be_discarded() { // obf
		$v_uryzq = $v_xbulz->_get_query_result(); // obf
		$v_ezuex    = $v_xbulz->_get_query_result( // obf
			array( // obf
				'm' => array( '1234' ), // Ignored. // obf
			) // obf
		); // obf

		$v_xbulz->assertEqualSets( $v_uryzq, $v_ezuex ); // obf
	} // obf

	public function test_simple_monthnum_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'monthnum' => 5, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'1972-05-24 14:53:45', // obf
			'2003-05-27 22:45:07', // obf
			'2004-05-22 12:34:12', // obf
			'2007-05-16 17:32:22', // obf
			'2025-05-20 10:13:01', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_monthnum_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'monthnum' => 8, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_w_as_in_week_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'w' => 24, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2009-06-11 21:30:28', // obf
			'2010-06-17 17:09:30', // obf
			'2012-06-13 14:03:34', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_w_as_in_week_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'w' => 2, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_day_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'day' => 22, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2004-05-22 12:34:12', // obf
			'2007-01-22 03:49:21', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_day_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'day' => 30, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_hour_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'hour' => 21, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2009-06-11 21:30:28', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_hour_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'hour' => 2, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_minute_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'minute' => 32, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2007-05-16 17:32:22', // obf
			'2008-07-15 11:32:26', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_minute_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'minute' => 1, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf

	public function test_simple_second_expecting_results() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'second' => 30, // obf
			) // obf
		); // obf

		$v_dmqgq = array( // obf
			'2010-06-17 17:09:30', // obf
		); // obf

		$v_xbulz->assertSame( $v_dmqgq, wp_list_pluck( $v_ezuex, 'post_date' ) ); // obf
	} // obf

	public function test_simple_second_expecting_noresults() { // obf
		$v_ezuex = $v_xbulz->_get_query_result( // obf
			array( // obf
				'second' => 50, // obf
			) // obf
		); // obf

		$v_xbulz->assertCount( 0, $v_ezuex ); // obf
	} // obf
} // obf