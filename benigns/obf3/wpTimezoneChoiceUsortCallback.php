

<?php // obf

/** // obf
 * Tests for the _wp_timezone_choice_usort_callback() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_timezone_choice_usort_callback // obf
 */ // obf
class Tests_Functions_WpTimezoneChoiceUsortCallback extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 59953 // obf
	 * // obf
	 * @dataProvider data_wp_timezone_choice_usort_callback // obf
	 */ // obf
	public function test_wp_timezone_choice_usort_callback( $v_pfkaq, $v_prhqh ) { // obf
		usort( $v_pfkaq, '_wp_timezone_choice_usort_callback' ); // obf

		$v_aqnnm->assertSame( $v_prhqh, $v_pfkaq ); // obf
	} // obf

	public function data_wp_timezone_choice_usort_callback() { // obf
		return array( // obf
			'just GMT+'                         => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+b', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+e', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+d', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+e', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+d', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+b', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'mixed UTC and GMT'                 => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'UTC', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'UTC', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+d', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+d', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'GMT+a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'UTC', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'UTC', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'just alpha city'                   => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'e', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'b', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'd', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'a', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'b', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'c', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'd', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => 'e', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'not Etc continents are not sorted' => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => 'd', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'c', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'a', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'd', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'e', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => 'd', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'c', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'a', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'd', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'e', // obf
						'city'        => '', // obf
						't_continent' => '', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'not Etc just t_continent'          => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'd', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'b', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'e', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'c', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'b', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'c', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'd', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'e', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'not Etc just t_city'               => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'd', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'e', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'c', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'b', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'b', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'c', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'd', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'e', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf

			'not Etc just t_subcity'            => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'b', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'e', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'a', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'c', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'd', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'a', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'b', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'c', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'd', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => 'a', // obf
						't_subcity'   => 'e', // obf
					), // obf
				), // obf
			), // obf

			'just continent with Etc which pulls 1 to bottom' => array( // obf
				'unsorted' => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'b', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'c', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => '', // obf
						't_continent' => '1', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'd', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
				'sorted'   => array( // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'a', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'b', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'c', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => '', // obf
						'city'        => '', // obf
						't_continent' => 'd', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
					array( // obf
						'continent'   => 'Etc', // obf
						'city'        => '', // obf
						't_continent' => '1', // obf
						't_city'      => '', // obf
						't_subcity'   => '', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf