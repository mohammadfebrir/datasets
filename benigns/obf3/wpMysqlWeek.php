

<?php // obf

/** // obf
 * Tests for the _wp_mysql_week() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_mysql_week // obf
 */ // obf
class Tests_Functions_WpMysqlWeek extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 59931 // obf
	 * // obf
	 * @dataProvider data_wp_mysql_week // obf
	 */ // obf
	public function test_wp_mysql_week( $v_hxfzz, $v_pvgwr, $v_gatbj ) { // obf

		add_filter( // obf
			'pre_option_start_of_week', // obf
			static function ( $v_tiksk ) use ( $v_pvgwr ) { // obf
				return $v_pvgwr ?? $v_tiksk; // obf
			} // obf
		); // obf

		$v_tcwxo->assertSame( $v_gatbj, _wp_mysql_week( 'col_name' ) ); // obf
	} // obf

	/** // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_mysql_week() { // obf
		return array( // obf
			array( '1969-12-25', 0, 'WEEK( col_name, 0 )' ), // obf
			array( '1969-12-25', 1, 'WEEK( col_name, 1 )' ), // obf
			array( '1969-12-25', 2, 'WEEK( DATE_SUB( col_name, INTERVAL 2 DAY ), 0 )' ), // obf
			array( '1969-12-25', 3, 'WEEK( DATE_SUB( col_name, INTERVAL 3 DAY ), 0 )' ), // obf
			array( '1969-12-25', 4, 'WEEK( DATE_SUB( col_name, INTERVAL 4 DAY ), 0 )' ), // obf
			array( '1969-12-25', 5, 'WEEK( DATE_SUB( col_name, INTERVAL 5 DAY ), 0 )' ), // obf
			array( '1969-12-25', 6, 'WEEK( DATE_SUB( col_name, INTERVAL 6 DAY ), 0 )' ), // obf
			array( '1969-12-25', 9, 'WEEK( col_name, 0 )' ), // obf
		); // obf
	} // obf
} // obf