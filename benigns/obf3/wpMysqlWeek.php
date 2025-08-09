$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

/**
 * Tests for the _wp_mysql_week() function.
 *
 * @group functions
 *
 * @covers ::_wp_mysql_week
 */
class Tests_Functions_WpMysqlWeek extends WP_UnitTestCase {

	/**
	 * @ticket 59931
	 *
	 * @dataProvider data_wp_mysql_week
	 */
	public function test_wp_mysql_week( $date, $start_of_week, $expected_sql ) {

		add_filter(
			'pre_option_start_of_week',
			static function ( $value ) use ( $start_of_week ) {
				return $start_of_week ?? $value;
			}
		);

		$this->assertSame( $expected_sql, _wp_mysql_week( 'col_name' ) );
	}

	/**
	 * @return array[]
	 */
	public function data_wp_mysql_week() {
		return array(
			array( '1969-12-25', 0, 'WEEK( col_name, 0 )' ),
			array( '1969-12-25', 1, 'WEEK( col_name, 1 )' ),
			array( '1969-12-25', 2, 'WEEK( DATE_SUB( col_name, INTERVAL 2 DAY ), 0 )' ),
			array( '1969-12-25', 3, 'WEEK( DATE_SUB( col_name, INTERVAL 3 DAY ), 0 )' ),
			array( '1969-12-25', 4, 'WEEK( DATE_SUB( col_name, INTERVAL 4 DAY ), 0 )' ),
			array( '1969-12-25', 5, 'WEEK( DATE_SUB( col_name, INTERVAL 5 DAY ), 0 )' ),
			array( '1969-12-25', 6, 'WEEK( DATE_SUB( col_name, INTERVAL 6 DAY ), 0 )' ),
			array( '1969-12-25', 9, 'WEEK( col_name, 0 )' ),
		);
	}
}
