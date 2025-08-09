

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group post // obf
 * // obf
 * @covers ::get_permalink // obf
 */ // obf
class Tests_Date_GetPermalink extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		delete_option( 'permalink_structure' ); // obf
		update_option( 'timezone_string', '' ); // obf
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( 'UTC' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 48623 // obf
	 */ // obf
	public function test_should_return_correct_date_permalink_with_changed_time_zone() { // obf
		$v_qfacw = 'America/Chicago'; // obf
		update_option( 'timezone_string', $v_qfacw ); // obf
		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%hour%/%minute%/%second%' ); // obf
		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( 'UTC' ); // obf

		$v_tfodv = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => '2018-07-22 21:13:23', // obf
				'post_date_gmt' => '2018-07-23 03:13:23', // obf
			) // obf
		); // obf

		$v_wismd->assertSame( 'http://' . WP_TESTS_DOMAIN . '/2018/07/22/21/13/23', get_permalink( $v_tfodv ) ); // obf

		// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
		date_default_timezone_set( $v_qfacw ); // obf
		$v_wismd->assertSame( 'http://' . WP_TESTS_DOMAIN . '/2018/07/22/21/13/23', get_permalink( $v_tfodv ) ); // obf
	} // obf
} // obf