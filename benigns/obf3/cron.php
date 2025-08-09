

<?php // obf

/** // obf
 * Test the cron scheduling functions // obf
 * // obf
 * @group cron // obf
 */ // obf
class Tests_Cron extends WP_UnitTestCase { // obf
	/** // obf
	 * @var array Cron array for testing preflight filters. // obf
	 */ // obf
	private $v_eymlg; // obf

	/** // obf
	 * @var int Timestamp of now() + 30 minutes; // obf
	 */ // obf
	private $v_uaomz; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Make sure the schedule is clear. // obf
		_set_cron_array( array() ); // obf
		$v_recjy->preflight_cron_array = array(); // obf
		$v_recjy->plus_thirty_minutes  = strtotime( '+30 minutes' ); // obf
	} // obf

	public function tear_down() { // obf
		// Make sure the schedule is clear. // obf
		_set_cron_array( array() ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::wp_get_schedule // obf
	 */ // obf
	public function test_wp_get_schedule_empty() { // obf
		// Nothing scheduled. // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_recjy->assertFalse( wp_get_schedule( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_schedule_event_single() { // obf
		// Schedule an event and make sure it's returned by wp_next_scheduled(). // obf
		$v_qhehn      = __FUNCTION__; // obf
		$v_cnshz = strtotime( '+1 hour' ); // obf

		$v_wurro = wp_schedule_single_event( $v_cnshz, $v_qhehn ); // obf
		$v_recjy->assertTrue( $v_wurro ); // obf
		$v_recjy->assertSame( $v_cnshz, wp_next_scheduled( $v_qhehn ) ); // obf

		// It's a non-recurring event. // obf
		$v_recjy->assertFalse( wp_get_schedule( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_schedule_event_single_args() { // obf
		// Schedule an event with arguments and make sure it's returned by wp_next_scheduled(). // obf
		$v_qhehn      = 'event'; // obf
		$v_cnshz = strtotime( '+1 hour' ); // obf
		$v_kqhan      = array( 'foo' ); // obf

		$v_wurro = wp_schedule_single_event( $v_cnshz, $v_qhehn, $v_kqhan ); // obf
		$v_recjy->assertTrue( $v_wurro ); // obf
		// This returns the timestamp only if we provide matching args. // obf
		$v_recjy->assertSame( $v_cnshz, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
		// These don't match so return nothing. // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn, array( 'bar' ) ) ); // obf

		// It's a non-recurring event. // obf
		$v_recjy->assertFalse( wp_get_schedule( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_schedule_event // obf
	 */ // obf
	public function test_schedule_event() { // obf
		// Schedule an event and make sure it's returned by wp_next_scheduled(). // obf
		$v_qhehn      = __FUNCTION__; // obf
		$v_nlfbz     = 'hourly'; // obf
		$v_cnshz = strtotime( '+1 hour' ); // obf

		$v_wurro = wp_schedule_event( $v_cnshz, $v_nlfbz, $v_qhehn ); // obf
		$v_recjy->assertTrue( $v_wurro ); // obf
		// It's scheduled for the right time. // obf
		$v_recjy->assertSame( $v_cnshz, wp_next_scheduled( $v_qhehn ) ); // obf
		// It's a recurring event. // obf
		$v_recjy->assertSame( $v_nlfbz, wp_get_schedule( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_schedule_event // obf
	 */ // obf
	public function test_schedule_event_args() { // obf
		// Schedule an event and make sure it's returned by wp_next_scheduled(). // obf
		$v_qhehn      = 'event'; // obf
		$v_cnshz = strtotime( '+1 hour' ); // obf
		$v_nlfbz     = 'hourly'; // obf
		$v_kqhan      = array( 'foo' ); // obf

		$v_wurro = wp_schedule_event( $v_cnshz, 'hourly', $v_qhehn, $v_kqhan ); // obf
		$v_recjy->assertTrue( $v_wurro ); // obf
		// This returns the timestamp only if we provide matching args. // obf
		$v_recjy->assertSame( $v_cnshz, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
		// These don't match so return nothing. // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn, array( 'bar' ) ) ); // obf

		$v_recjy->assertSame( $v_nlfbz, wp_get_schedule( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * Tests that a call to wp_schedule_event() on a site without any scheduled events // obf
	 * does not result in a PHP deprecation notice on PHP 8.1 or higher. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: Automatic conversion of false to array is deprecated`. // obf
	 * // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @covers ::wp_schedule_event // obf
	 */ // obf
	public function test_wp_schedule_event_without_cron_option_does_not_throw_deprecation_notice() { // obf
		delete_option( 'cron' ); // obf

		// Verify that the cause of the error is in place. // obf
		$v_recjy->assertIsArray( _get_cron_array(), '_get_cron_array() does not return an array.' ); // obf
		$v_recjy->assertEmpty( _get_cron_array(), '_get_cron_array() does not return an empty array.' ); // obf

		$v_qhehn      = __FUNCTION__; // obf
		$v_cnshz = strtotime( '+10 minutes' ); // obf

		// Add an event. // obf
		$v_recjy->assertTrue( wp_schedule_event( $v_cnshz, 'daily', $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * Tests that a call to wp_schedule_single_event() on a site without any scheduled events // obf
	 * does not result in the value "false" being added into the cron array. // obf
	 * // obf
	 * @ticket 53950 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_wp_schedule_single_event_without_cron_option() { // obf
		delete_option( 'cron' ); // obf

		// Verify that the cause of the error is in place. // obf
		$v_recjy->assertIsArray( _get_cron_array(), '_get_cron_array() does not return an array.' ); // obf
		$v_recjy->assertEmpty( _get_cron_array(), '_get_cron_array() does not return an empty array.' ); // obf

		$v_qhehn      = __FUNCTION__; // obf
		$v_cnshz = strtotime( '+10 minutes' ); // obf

		// Add an event. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_cnshz, $v_qhehn ), 'Scheduling single event failed' ); // obf

		// Verify that "false" is not a value in the final cron array. // obf
		$v_recjy->assertNotContains( false, get_option( 'cron' ), 'Resulting cron array contains the value "false"' ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_unschedule_event // obf
	 */ // obf
	public function test_unschedule_event() { // obf
		// Schedule an event and make sure it's returned by wp_next_scheduled(). // obf
		$v_qhehn      = __FUNCTION__; // obf
		$v_cnshz = strtotime( '+1 hour' ); // obf

		wp_schedule_single_event( $v_cnshz, $v_qhehn ); // obf
		$v_recjy->assertSame( $v_cnshz, wp_next_scheduled( $v_qhehn ) ); // obf

		// Now unschedule it and make sure it's gone. // obf
		$v_lytun = wp_unschedule_event( $v_cnshz, $v_qhehn ); // obf
		$v_recjy->assertTrue( $v_lytun ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_schedule() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf

		// Schedule several events with and without arguments. // obf
		wp_schedule_single_event( strtotime( '+1 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+3 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+4 hour' ), $v_qhehn, $v_kqhan ); // obf

		// Make sure they're returned by wp_next_scheduled(). // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the no args events and make sure it's gone. // obf
		$v_mirtc = wp_clear_scheduled_hook( $v_qhehn ); // obf
		$v_recjy->assertSame( 2, $v_mirtc ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
		// The args events should still be there. // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the args events and make sure they're gone too. // obf
		// Note: wp_clear_scheduled_hook() expects args passed directly, rather than as an array. // obf
		wp_clear_scheduled_hook( $v_qhehn, $v_kqhan ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_undefined_schedule() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf

		wp_schedule_single_event( strtotime( '+1 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_qhehn, $v_kqhan ); // obf

		// Clear the schedule for no args events and ensure no events are cleared. // obf
		$v_mirtc = wp_clear_scheduled_hook( $v_qhehn ); // obf
		$v_recjy->assertSame( 0, $v_mirtc ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_schedule_multiple_args() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1', 'arg2' ); // obf

		// Schedule several events with and without arguments. // obf
		wp_schedule_single_event( strtotime( '+1 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+3 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+4 hour' ), $v_qhehn, $v_kqhan ); // obf

		// Make sure they're returned by wp_next_scheduled(). // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the no args events and make sure it's gone. // obf
		wp_clear_scheduled_hook( $v_qhehn ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
		// The args events should still be there. // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the args events and make sure they're gone too. // obf
		// Note: wp_clear_scheduled_hook() used to expect args passed directly, rather than as an array pre WP 3.0. // obf
		wp_clear_scheduled_hook( $v_qhehn, $v_kqhan ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @ticket 10468 // obf
	 * // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_schedule_new_args() { // obf
		$v_qhehn       = __FUNCTION__; // obf
		$v_kqhan       = array( 'arg1' ); // obf
		$v_ifzfk = __FUNCTION__ . '_multi'; // obf
		$v_sjhfl = array( 'arg2', 'arg3' ); // obf

		// Schedule several events with and without arguments. // obf
		wp_schedule_single_event( strtotime( '+1 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+3 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+4 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+5 hour' ), $v_ifzfk, $v_sjhfl ); // obf
		wp_schedule_single_event( strtotime( '+6 hour' ), $v_ifzfk, $v_sjhfl ); // obf

		// Make sure they're returned by wp_next_scheduled(). // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the no args events and make sure it's gone. // obf
		wp_clear_scheduled_hook( $v_qhehn ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
		// The args events should still be there. // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the args events and make sure they're gone too. // obf
		// wp_clear_scheduled_hook() should take args as an array like the other functions. // obf
		wp_clear_scheduled_hook( $v_qhehn, $v_kqhan ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule for the args events and make sure they're gone too. // obf
		// wp_clear_scheduled_hook() should take args as an array like the other functions and does from WP 3.0. // obf
		wp_clear_scheduled_hook( $v_ifzfk, $v_sjhfl ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_ifzfk, $v_sjhfl ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18997 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_hook() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'foo' ); // obf

		// Schedule several events with and without arguments. // obf
		wp_schedule_single_event( strtotime( '+1 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_qhehn ); // obf
		wp_schedule_single_event( strtotime( '+3 hour' ), $v_qhehn, $v_kqhan ); // obf
		wp_schedule_single_event( strtotime( '+4 hour' ), $v_qhehn, $v_kqhan ); // obf

		// Make sure they're returned by wp_next_scheduled(). // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn ) ); // obf
		$v_recjy->assertGreaterThan( 0, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf

		// Clear the schedule and make sure it's gone. // obf
		$v_acsdi = wp_unschedule_hook( $v_qhehn ); // obf
		$v_recjy->assertSame( 4, $v_acsdi ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_undefined_hook() { // obf
		$v_qhehn           = __FUNCTION__; // obf
		$v_fbpvq = __FUNCTION__ . '_two'; // obf

		// Attempt to clear schedule on non-existent hook. // obf
		$v_acsdi = wp_unschedule_hook( $v_qhehn ); // obf
		$v_recjy->assertSame( 0, $v_acsdi ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf

		// Repeat tests with populated cron array. // obf
		wp_schedule_single_event( strtotime( '+1 hour' ), $v_fbpvq ); // obf
		wp_schedule_single_event( strtotime( '+2 hour' ), $v_fbpvq ); // obf

		$v_acsdi = wp_unschedule_hook( $v_qhehn ); // obf
		$v_recjy->assertSame( 0, $v_acsdi ); // obf
		$v_recjy->assertFalse( wp_next_scheduled( $v_qhehn ) ); // obf
	} // obf

	/** // obf
	 * @ticket 6966 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_duplicate_event() { // obf
		// Duplicate events close together should be skipped. // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+5 minutes' ); // obf
		$v_uevaw  = strtotime( '+3 minutes' ); // obf

		// First one works. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf

		// Subsequent ones are ignored. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf
		$v_vmufc = wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan, true ); // obf
		$v_recjy->assertWPError( $v_vmufc ); // obf
		$v_recjy->assertSame( 'duplicate_event', $v_vmufc->get_error_code() ); // obf

		// The next event should be at +5 minutes, not +3. // obf
		$v_recjy->assertSame( $v_mzcfn, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @ticket 6966 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_not_duplicate_event() { // obf
		// Duplicate events far apart should work normally. // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+30 minutes' ); // obf
		$v_uevaw  = strtotime( '+3 minutes' ); // obf

		// First one works. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf
		// Second works too. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf

		// The next event should be at +3 minutes, even though that one was scheduled second. // obf
		$v_recjy->assertSame( $v_uevaw, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
		wp_unschedule_event( $v_uevaw, $v_qhehn, $v_kqhan ); // obf
		// Following event at +30 minutes should be there too. // obf
		$v_recjy->assertSame( $v_mzcfn, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_not_duplicate_event_reversed() { // obf
		// Duplicate events far apart should work normally regardless of order. // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+3 minutes' ); // obf
		$v_uevaw  = strtotime( '+30 minutes' ); // obf

		// First one works. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf
		// Second works too. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf

		// The next event should be at +3 minutes. // obf
		$v_recjy->assertSame( $v_mzcfn, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
		wp_unschedule_event( $v_mzcfn, $v_qhehn, $v_kqhan ); // obf
		// Following event should be there too. // obf
		$v_recjy->assertSame( $v_uevaw, wp_next_scheduled( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * Ensure the pre_scheduled_event filter prevents // obf
	 * modification of the cron_array_option. // obf
	 * // obf
	 * @ticket 32656 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 */ // obf
	public function test_pre_schedule_event_filter() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+30 minutes' ); // obf
		$v_uevaw  = strtotime( '+3 minutes' ); // obf

		$v_zziyr = _get_cron_array(); // obf

		add_filter( 'pre_schedule_event', array( $v_recjy, 'filter_pre_schedule_event_filter' ), 10, 2 ); // obf

		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf
		$v_recjy->assertTrue( wp_schedule_event( $v_uevaw, 'hourly', $v_qhehn ) ); // obf

		// Check cron option is unchanged. // obf
		$v_recjy->assertSame( $v_zziyr, _get_cron_array() ); // obf

		$v_qhleh[ $v_uevaw ][ $v_qhehn ][ md5( serialize( array() ) ) ] = array( // obf
			'schedule' => 'hourly', // obf
			'interval' => HOUR_IN_SECONDS, // obf
			'args'     => array(), // obf
		); // obf

		$v_qhleh[ $v_mzcfn ][ $v_qhehn ][ md5( serialize( $v_kqhan ) ) ] = array( // obf
			'schedule' => false, // obf
			'interval' => 0, // obf
			'args'     => $v_kqhan, // obf
		); // obf

		$v_recjy->assertSame( $v_qhleh, $v_recjy->preflight_cron_array ); // obf
	} // obf

	/** // obf
	 * Filter the scheduling of events to use the preflight array. // obf
	 */ // obf
	public function filter_pre_schedule_event_filter( $v_grzoi, $v_tvkll ) { // obf
		$v_bdjtq = md5( serialize( $v_tvkll->args ) ); // obf

		$v_recjy->preflight_cron_array[ $v_tvkll->timestamp ][ $v_tvkll->hook ][ $v_bdjtq ] = array( // obf
			'schedule' => $v_tvkll->schedule, // obf
			'interval' => isset( $v_tvkll->interval ) ? $v_tvkll->interval : 0, // obf
			'args'     => $v_tvkll->args, // obf
		); // obf
		uksort( $v_recjy->preflight_cron_array, 'strnatcasecmp' ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Ensure the pre_reschedule_event filter prevents // obf
	 * modification of the cron_array_option. // obf
	 * // obf
	 * @ticket 32656 // obf
	 * // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_pre_reschedule_event_filter() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_mzcfn  = strtotime( '+30 minutes' ); // obf

		// Add an event. // obf
		$v_recjy->assertTrue( wp_schedule_event( $v_mzcfn, 'hourly', $v_qhehn ) ); // obf
		$v_zziyr = _get_cron_array(); // obf

		// Add preflight filter. // obf
		add_filter( 'pre_reschedule_event', '__return_true' ); // obf

		// Reschedule event with preflight filter in place. // obf
		$v_zzjnm = wp_reschedule_event( $v_mzcfn, 'daily', $v_qhehn ); // obf

		// Check return value. // obf
		$v_recjy->assertTrue( $v_zzjnm ); // obf

		// Check cron option is unchanged. // obf
		$v_recjy->assertSame( $v_zziyr, _get_cron_array() ); // obf
	} // obf

	/** // obf
	 * Ensure the pre_unschedule_event filter prevents // obf
	 * modification of the cron_array_option. // obf
	 * // obf
	 * @ticket 32656 // obf
	 * // obf
	 * @covers ::wp_unschedule_event // obf
	 */ // obf
	public function test_pre_unschedule_event_filter() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_mzcfn  = strtotime( '+30 minutes' ); // obf

		// Add an event. // obf
		$v_recjy->assertTrue( wp_schedule_event( $v_mzcfn, 'hourly', $v_qhehn ) ); // obf
		$v_zziyr = _get_cron_array(); // obf

		// Add preflight filter. // obf
		add_filter( 'pre_unschedule_event', '__return_true' ); // obf

		// Unschedule event with preflight filter in place. // obf
		wp_unschedule_event( $v_mzcfn, $v_qhehn ); // obf

		// Check cron option is unchanged. // obf
		$v_recjy->assertSame( $v_zziyr, _get_cron_array() ); // obf
	} // obf

	/** // obf
	 * Ensure the clearing scheduled hooks filter prevents // obf
	 * modification of the cron_array_option. // obf
	 * // obf
	 * @ticket 32656 // obf
	 * // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_pre_clear_scheduled_hook_filters() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_mzcfn  = strtotime( '+30 minutes' ); // obf

		// Add an event. // obf
		$v_recjy->assertTrue( wp_schedule_event( $v_mzcfn, 'hourly', $v_qhehn ) ); // obf
		$v_zziyr = _get_cron_array(); // obf

		// Add preflight filters. // obf
		add_filter( 'pre_clear_scheduled_hook', '__return_true' ); // obf
		add_filter( 'pre_unschedule_hook', '__return_zero' ); // obf

		// Unschedule event with preflight filter in place. // obf
		wp_clear_scheduled_hook( $v_qhehn ); // obf

		// Check cron option is unchanged. // obf
		$v_recjy->assertSame( $v_zziyr, _get_cron_array() ); // obf

		// Unschedule all events with preflight filter in place. // obf
		wp_unschedule_hook( $v_qhehn ); // obf

		// Check cron option is unchanged. // obf
		$v_recjy->assertSame( $v_zziyr, _get_cron_array() ); // obf
	} // obf

	/** // obf
	 * Ensure the preflight hooks for scheduled events // obf
	 * return a filtered value as expected. // obf
	 * // obf
	 * @ticket 32656 // obf
	 * // obf
	 * @covers ::wp_get_scheduled_event // obf
	 * @covers ::wp_next_scheduled // obf
	 */ // obf
	public function test_pre_scheduled_event_hooks() { // obf
		add_filter( 'pre_get_scheduled_event', array( $v_recjy, 'filter_pre_scheduled_event_hooks' ) ); // obf

		$v_wrmjb  = wp_get_scheduled_event( 'preflight_event', array(), $v_recjy->plus_thirty_minutes ); // obf
		$v_vsrft = wp_next_scheduled( 'preflight_event', array() ); // obf

		$v_zziyr = (object) array( // obf
			'hook'      => 'preflight_event', // obf
			'timestamp' => $v_recjy->plus_thirty_minutes, // obf
			'schedule'  => false, // obf
			'args'      => array(), // obf
		); // obf

		$v_recjy->assertEquals( $v_zziyr, $v_wrmjb ); // obf
		$v_recjy->assertSame( $v_zziyr->timestamp, $v_vsrft ); // obf
	} // obf

	public function filter_pre_scheduled_event_hooks() { // obf
		return (object) array( // obf
			'hook'      => 'preflight_event', // obf
			'timestamp' => $v_recjy->plus_thirty_minutes, // obf
			'schedule'  => false, // obf
			'args'      => array(), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure wp_get_scheduled_event() returns the expected one off events. // obf
	 * // obf
	 * When no timestamp is specified, the next event should be returned. // obf
	 * When a timestamp is specified, a particular event should be returned. // obf
	 * // obf
	 * @ticket 45976 // obf
	 * // obf
	 * @covers ::wp_get_scheduled_event // obf
	 */ // obf
	public function test_get_scheduled_event_singles() { // obf
		$v_qhehn    = __FUNCTION__; // obf
		$v_kqhan    = array( 'arg1' ); // obf
		$v_mnkxh = strtotime( '+30 minutes' ); // obf
		$v_zzwvt = strtotime( '+3 minutes' ); // obf

		$v_xkprk = (object) array( // obf
			'hook'      => $v_qhehn, // obf
			'timestamp' => $v_mnkxh, // obf
			'schedule'  => false, // obf
			'args'      => $v_kqhan, // obf
		); // obf

		$v_cwbme = (object) array( // obf
			'hook'      => $v_qhehn, // obf
			'timestamp' => $v_zzwvt, // obf
			'schedule'  => false, // obf
			'args'      => $v_kqhan, // obf
		); // obf

		// Schedule late running event. // obf
		wp_schedule_single_event( $v_mnkxh, $v_qhehn, $v_kqhan ); // obf
		// Schedule next running event. // obf
		wp_schedule_single_event( $v_zzwvt, $v_qhehn, $v_kqhan ); // obf

		// Late running, timestamp specified. // obf
		$v_recjy->assertEquals( $v_xkprk, wp_get_scheduled_event( $v_qhehn, $v_kqhan, $v_mnkxh ) ); // obf

		// Next running, timestamp specified. // obf
		$v_recjy->assertEquals( $v_cwbme, wp_get_scheduled_event( $v_qhehn, $v_kqhan, $v_zzwvt ) ); // obf

		// Next running, no timestamp specified. // obf
		$v_recjy->assertEquals( $v_cwbme, wp_get_scheduled_event( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_get_scheduled_event() returns the expected recurring events. // obf
	 * // obf
	 * When no timestamp is specified, the next event should be returned. // obf
	 * When a timestamp is specified, a particular event should be returned. // obf
	 * // obf
	 * @ticket 45976 // obf
	 * // obf
	 * @covers ::wp_get_scheduled_event // obf
	 */ // obf
	public function test_get_scheduled_event_recurring() { // obf
		$v_qhehn     = __FUNCTION__; // obf
		$v_kqhan     = array( 'arg1' ); // obf
		$v_mnkxh  = strtotime( '+30 minutes' ); // obf
		$v_zzwvt  = strtotime( '+3 minutes' ); // obf
		$v_qjnpx = 'hourly'; // obf
		$v_qhwem = HOUR_IN_SECONDS; // obf

		$v_xkprk = (object) array( // obf
			'hook'      => $v_qhehn, // obf
			'timestamp' => $v_mnkxh, // obf
			'schedule'  => $v_qjnpx, // obf
			'args'      => $v_kqhan, // obf
			'interval'  => $v_qhwem, // obf
		); // obf

		$v_cwbme = (object) array( // obf
			'hook'      => $v_qhehn, // obf
			'timestamp' => $v_zzwvt, // obf
			'schedule'  => $v_qjnpx, // obf
			'args'      => $v_kqhan, // obf
			'interval'  => $v_qhwem, // obf
		); // obf

		// Schedule late running event. // obf
		wp_schedule_event( $v_mnkxh, $v_qjnpx, $v_qhehn, $v_kqhan ); // obf
		// Schedule next running event. // obf
		wp_schedule_event( $v_zzwvt, $v_qjnpx, $v_qhehn, $v_kqhan ); // obf

		// Late running, timestamp specified. // obf
		$v_recjy->assertEquals( $v_xkprk, wp_get_scheduled_event( $v_qhehn, $v_kqhan, $v_mnkxh ) ); // obf

		// Next running, timestamp specified. // obf
		$v_recjy->assertEquals( $v_cwbme, wp_get_scheduled_event( $v_qhehn, $v_kqhan, $v_zzwvt ) ); // obf

		// Next running, no timestamp specified. // obf
		$v_recjy->assertEquals( $v_cwbme, wp_get_scheduled_event( $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_get_scheduled_event() returns false when expected. // obf
	 * // obf
	 * @ticket 45976 // obf
	 * // obf
	 * @covers ::wp_get_scheduled_event // obf
	 */ // obf
	public function test_get_scheduled_event_false() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_fobsx   = strtotime( '+3 minutes' ); // obf

		// No scheduled events. // obf
		// - With timestamp. // obf
		$v_recjy->assertFalse( wp_get_scheduled_event( $v_qhehn, $v_kqhan, $v_fobsx ) ); // obf
		// - Get next, none scheduled. // obf
		$v_recjy->assertFalse( wp_get_scheduled_event( $v_qhehn, $v_kqhan ) ); // obf

		// Schedule an event. // obf
		wp_schedule_event( $v_fobsx, $v_qhehn, $v_kqhan ); // obf
		// - Unregistered timestamp. // obf
		$v_recjy->assertFalse( wp_get_scheduled_event( $v_qhehn, $v_kqhan, strtotime( '+30 minutes' ) ) ); // obf
		// - Invalid timestamp. // obf
		$v_recjy->assertFalse( wp_get_scheduled_event( $v_qhehn, $v_kqhan, 'Words Fail!' ) ); // obf
	} // obf

	/** // obf
	 * Ensure any past event counts as a duplicate. // obf
	 * // obf
	 * @ticket 44818 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_duplicate_past_event() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '-14 minutes' ); // obf
		$v_uevaw  = strtotime( '+5 minutes' ); // obf
		$v_eimwd  = strtotime( '-2 minutes' ); // obf

		// First event scheduled successfully. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf

		// Second event fails. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf

		// Third event fails. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan ) ); // obf

		// Fourth event fails. // obf
		$v_vmufc = wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan, true ); // obf
		$v_recjy->assertWPError( $v_vmufc ); // obf
		$v_recjy->assertSame( 'duplicate_event', $v_vmufc->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Ensure any near future event counts as a duplicate. // obf
	 * // obf
	 * @ticket 44818 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_duplicate_near_future_event() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+4 minutes' ); // obf
		$v_uevaw  = strtotime( '-15 minutes' ); // obf
		$v_eimwd  = strtotime( '+12 minutes' ); // obf

		// First event scheduled successfully. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf

		// Second event fails. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf

		// Third event fails. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan ) ); // obf

		// Fourth event fails. // obf
		$v_vmufc = wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan, true ); // obf
		$v_recjy->assertWPError( $v_vmufc ); // obf
		$v_recjy->assertSame( 'duplicate_event', $v_vmufc->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Duplicate future events are disallowed. // obf
	 * // obf
	 * @ticket 44818 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_duplicate_future_event() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+15 minutes' ); // obf
		$v_uevaw  = strtotime( '-600 seconds', $v_mzcfn ); // obf
		$v_eimwd  = strtotime( '+600 seconds', $v_mzcfn ); // obf

		// First event scheduled successfully. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf

		// Events within ten minutes should fail. // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf
		$v_recjy->assertFalse( wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan ) ); // obf

		$v_vmufc = wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan, true ); // obf
		$v_recjy->assertWPError( $v_vmufc ); // obf
		$v_recjy->assertSame( 'duplicate_event', $v_vmufc->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Future events are allowed. // obf
	 * // obf
	 * @ticket 44818 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_not_duplicate_future_event() { // obf
		$v_qhehn = __FUNCTION__; // obf
		$v_kqhan = array( 'arg1' ); // obf
		$v_mzcfn  = strtotime( '+15 minutes' ); // obf
		$v_uevaw  = strtotime( '-601 seconds', $v_mzcfn ); // obf
		$v_eimwd  = strtotime( '+601 seconds', $v_mzcfn ); // obf

		// First event scheduled successfully. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_mzcfn, $v_qhehn, $v_kqhan ) ); // obf

		// Events over ten minutes should work. // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_uevaw, $v_qhehn, $v_kqhan ) ); // obf
		$v_recjy->assertTrue( wp_schedule_single_event( $v_eimwd, $v_qhehn, $v_kqhan ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 * @covers ::wp_unschedule_event // obf
	 */ // obf
	public function test_invalid_timestamp_for_event_returns_error() { // obf
		$v_ytjfw      = wp_schedule_single_event( -50, 'hook', array(), true ); // obf
		$v_tvkll             = wp_schedule_event( -50, 'daily', 'hook', array(), true ); // obf
		$v_pmfhl = wp_reschedule_event( -50, 'daily', 'hook', array(), true ); // obf
		$v_xcwyo = wp_unschedule_event( -50, 'hook', array(), true ); // obf

		$v_recjy->assertWPError( $v_ytjfw ); // obf
		$v_recjy->assertSame( 'invalid_timestamp', $v_ytjfw->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'invalid_timestamp', $v_tvkll->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_pmfhl ); // obf
		$v_recjy->assertSame( 'invalid_timestamp', $v_pmfhl->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_xcwyo ); // obf
		$v_recjy->assertSame( 'invalid_timestamp', $v_xcwyo->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_invalid_recurrence_for_event_returns_error() { // obf
		$v_tvkll             = wp_schedule_event( time(), 'invalid', 'hook', array(), true ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'invalid', 'hook', array(), true ); // obf

		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'invalid_schedule', $v_tvkll->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_pmfhl ); // obf
		$v_recjy->assertSame( 'invalid_schedule', $v_pmfhl->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_disallowed_event_returns_false_when_wp_error_is_set_to_false() { // obf
		add_filter( 'schedule_event', '__return_false' ); // obf

		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array() ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array() ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array() ); // obf

		$v_recjy->assertFalse( $v_ytjfw ); // obf
		$v_recjy->assertFalse( $v_tvkll ); // obf
		$v_recjy->assertFalse( $v_pmfhl ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_disallowed_event_returns_error_when_wp_error_is_set_to_true() { // obf
		add_filter( 'schedule_event', '__return_false' ); // obf

		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array(), true ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array(), true ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array(), true ); // obf

		$v_recjy->assertWPError( $v_ytjfw ); // obf
		$v_recjy->assertSame( 'schedule_event_false', $v_ytjfw->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'schedule_event_false', $v_tvkll->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_pmfhl ); // obf
		$v_recjy->assertSame( 'schedule_event_false', $v_pmfhl->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_schedule_short_circuit_with_error_returns_false_when_wp_error_is_set_to_false() { // obf
		$v_hkete = function ( $v_grcyv, $v_tvkll, $v_ygsta ) { // obf
			$v_recjy->assertFalse( $v_ygsta ); // obf

			return new WP_Error( // obf
				'my_error', // obf
				'An error occurred' // obf
			); // obf
		}; // obf

		// Add filters which return a WP_Error: // obf
		add_filter( 'pre_schedule_event', $v_hkete, 10, 3 ); // obf
		add_filter( 'pre_reschedule_event', $v_hkete, 10, 3 ); // obf

		// Schedule events without the `$v_ygsta` parameter: // obf
		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array() ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array() ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array() ); // obf

		// Ensure boolean false is returned: // obf
		$v_recjy->assertFalse( $v_ytjfw ); // obf
		$v_recjy->assertFalse( $v_tvkll ); // obf
		$v_recjy->assertFalse( $v_pmfhl ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_schedule_short_circuit_with_error_returns_error_when_wp_error_is_set_to_true() { // obf
		$v_hkete = function ( $v_grcyv, $v_tvkll, $v_ygsta ) { // obf
			$v_recjy->assertTrue( $v_ygsta ); // obf

			return new WP_Error( // obf
				'my_error', // obf
				'An error occurred' // obf
			); // obf
		}; // obf

		// Add filters which return a WP_Error: // obf
		add_filter( 'pre_schedule_event', $v_hkete, 10, 3 ); // obf
		add_filter( 'pre_reschedule_event', $v_hkete, 10, 3 ); // obf

		// Schedule events with the `$v_ygsta` parameter: // obf
		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array(), true ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array(), true ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array(), true ); // obf

		// Ensure the error object is returned: // obf
		$v_recjy->assertWPError( $v_ytjfw ); // obf
		$v_recjy->assertSame( 'my_error', $v_ytjfw->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'my_error', $v_tvkll->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_pmfhl ); // obf
		$v_recjy->assertSame( 'my_error', $v_pmfhl->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_schedule_short_circuit_with_false_returns_false_when_wp_error_is_set_to_false() { // obf
		// Add filters which return false: // obf
		add_filter( 'pre_schedule_event', '__return_false' ); // obf
		add_filter( 'pre_reschedule_event', '__return_false' ); // obf

		// Schedule events without the `$v_ygsta` parameter: // obf
		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array() ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array() ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array() ); // obf

		// Ensure false is returned: // obf
		$v_recjy->assertFalse( $v_ytjfw ); // obf
		$v_recjy->assertFalse( $v_tvkll ); // obf
		$v_recjy->assertFalse( $v_pmfhl ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 * @covers ::wp_schedule_event // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_schedule_short_circuit_with_false_returns_error_when_wp_error_is_set_to_true() { // obf
		// Add filters which return false: // obf
		add_filter( 'pre_schedule_event', '__return_false' ); // obf
		add_filter( 'pre_reschedule_event', '__return_false' ); // obf

		// Schedule events with the `$v_ygsta` parameter: // obf
		$v_ytjfw      = wp_schedule_single_event( time(), 'hook', array(), true ); // obf
		$v_tvkll             = wp_schedule_event( time(), 'daily', 'hook', array(), true ); // obf
		$v_pmfhl = wp_reschedule_event( time(), 'daily', 'hook', array(), true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertWPError( $v_ytjfw ); // obf
		$v_recjy->assertSame( 'pre_schedule_event_false', $v_ytjfw->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'pre_schedule_event_false', $v_tvkll->get_error_code() ); // obf

		$v_recjy->assertWPError( $v_pmfhl ); // obf
		$v_recjy->assertSame( 'pre_reschedule_event_false', $v_pmfhl->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 57271 // obf
	 * // obf
	 * @dataProvider data_wp_reschedule_event_works_with_args // obf
	 * // obf
	 * @covers ::wp_reschedule_event // obf
	 */ // obf
	public function test_wp_reschedule_event_works_with_args( array $v_kqhan ) { // obf
		$v_sqbeq = time(); // obf

		// Schedule events with the `$v_ygsta` parameter: // obf
		$v_tvkll             = wp_schedule_event( $v_sqbeq, 'daily', 'hook', $v_kqhan, true ); // obf
		$v_pmfhl = wp_reschedule_event( $v_sqbeq, 'daily', 'hook', $v_kqhan, true ); // obf
		$v_xcwyo = wp_unschedule_event( $v_sqbeq, 'hook', $v_kqhan, true ); // obf
		$v_rcwic    = wp_next_scheduled( 'hook', $v_kqhan ); // obf

		// Ensure the events were added and updated correctly: // obf
		$v_recjy->assertNotWPError( $v_tvkll ); // obf
		$v_recjy->assertNotWPError( $v_pmfhl ); // obf
		$v_recjy->assertNotWPError( $v_xcwyo ); // obf
		$v_recjy->assertSame( $v_sqbeq + DAY_IN_SECONDS, $v_rcwic ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_reschedule_event_works_with_args(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_reschedule_event_works_with_args() { // obf
		return array( // obf
			'indexed'     => array( // obf
				array( // obf
					1, // obf
					2, // obf
					3, // obf
				), // obf
			), // obf
			'associative' => array( // obf
				array( // obf
					'one'   => 1, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * @expectedDeprecated wp_clear_scheduled_hook // obf
	 * // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_deprecated_argument_usage_of_wp_clear_scheduled_hook() { // obf
		$v_zzvvf = function ( $v_grcyv, $v_qhehn, $v_kqhan, $v_ygsta ) { // obf
			$v_recjy->assertSame( array( 1, 2, 3 ), $v_kqhan ); // obf
			$v_recjy->assertFalse( $v_ygsta ); // obf

			return $v_grcyv; // obf
		}; // obf

		add_filter( 'pre_clear_scheduled_hook', $v_zzvvf, 10, 4 ); // obf

		$v_ejupu = wp_clear_scheduled_hook( 'hook', 1, 2, 3 ); // obf

		$v_recjy->assertSame( 0, $v_ejupu ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_scheduled_hook_returns_default_pre_filter_error_when_wp_error_is_set_to_true() { // obf
		add_filter( 'pre_unschedule_event', '__return_false' ); // obf

		wp_schedule_single_event( strtotime( '+1 hour' ), 'test_hook' ); // obf
		wp_schedule_single_event( strtotime( '+2 hours' ), 'test_hook' ); // obf

		$v_ejupu = wp_clear_scheduled_hook( 'test_hook', array(), true ); // obf

		$v_recjy->assertWPError( $v_ejupu ); // obf
		$v_recjy->assertSame( // obf
			array( // obf
				'pre_unschedule_event_false', // obf
			), // obf
			$v_ejupu->get_error_codes() // obf
		); // obf
		$v_recjy->assertCount( 2, $v_ejupu->get_error_messages() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_clear_scheduled_hook // obf
	 */ // obf
	public function test_clear_scheduled_hook_returns_custom_pre_filter_error_when_wp_error_is_set_to_true() { // obf
		$v_hkete = function ( $v_grcyv, $v_cnshz, $v_qhehn, $v_kqhan, $v_ygsta ) { // obf
			$v_recjy->assertTrue( $v_ygsta ); // obf

			return new WP_Error( 'error_code', 'error message' ); // obf
		}; // obf

		add_filter( 'pre_unschedule_event', $v_hkete, 10, 5 ); // obf

		wp_schedule_single_event( strtotime( '+1 hour' ), 'test_hook' ); // obf
		wp_schedule_single_event( strtotime( '+2 hours' ), 'test_hook' ); // obf

		$v_ejupu = wp_clear_scheduled_hook( 'test_hook', array(), true ); // obf

		$v_recjy->assertWPError( $v_ejupu ); // obf
		$v_recjy->assertSame( // obf
			array( // obf
				'error_code', // obf
			), // obf
			$v_ejupu->get_error_codes() // obf
		); // obf
		$v_recjy->assertSame( // obf
			array( // obf
				'error message', // obf
				'error message', // obf
			), // obf
			$v_ejupu->get_error_messages() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_short_circuit_with_error_returns_false_when_wp_error_is_set_to_false() { // obf
		$v_hkete = function ( $v_grcyv, $v_qhehn, $v_ygsta ) { // obf
			$v_recjy->assertFalse( $v_ygsta ); // obf

			return new WP_Error( // obf
				'my_error', // obf
				'An error occurred' // obf
			); // obf
		}; // obf

		// Add a filter which returns a WP_Error: // obf
		add_filter( 'pre_unschedule_hook', $v_hkete, 10, 3 ); // obf

		// Unschedule a hook without the `$v_ygsta` parameter: // obf
		$v_grzoi = wp_unschedule_hook( 'hook' ); // obf

		// Ensure boolean false is returned: // obf
		$v_recjy->assertFalse( $v_grzoi ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_short_circuit_with_error_returns_error_when_wp_error_is_set_to_true() { // obf
		$v_hkete = function ( $v_grcyv, $v_qhehn, $v_ygsta ) { // obf
			$v_recjy->assertTrue( $v_ygsta ); // obf

			return new WP_Error( // obf
				'my_error', // obf
				'An error occurred' // obf
			); // obf
		}; // obf

		// Add a filter which returns a WP_Error: // obf
		add_filter( 'pre_unschedule_hook', $v_hkete, 10, 3 ); // obf

		// Unschedule a hook with the `$v_ygsta` parameter: // obf
		$v_grzoi = wp_unschedule_hook( 'hook', true ); // obf

		// Ensure the error object is returned: // obf
		$v_recjy->assertWPError( $v_grzoi ); // obf
		$v_recjy->assertSame( 'my_error', $v_grzoi->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_short_circuit_with_false_returns_false_when_wp_error_is_set_to_false() { // obf
		// Add a filter which returns false: // obf
		add_filter( 'pre_unschedule_hook', '__return_false' ); // obf

		// Unschedule a hook without the `$v_ygsta` parameter: // obf
		$v_grzoi = wp_unschedule_hook( 'hook' ); // obf

		// Ensure false is returned: // obf
		$v_recjy->assertFalse( $v_grzoi ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_unschedule_short_circuit_with_false_returns_error_when_wp_error_is_set_to_true() { // obf
		// Add a filter which returns false: // obf
		add_filter( 'pre_unschedule_hook', '__return_false' ); // obf

		// Unchedule a hook with the `$v_ygsta` parameter: // obf
		$v_grzoi = wp_unschedule_hook( 'hook', true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertWPError( $v_grzoi ); // obf
		$v_recjy->assertSame( 'pre_unschedule_hook_false', $v_grzoi->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_single_event // obf
	 */ // obf
	public function test_cron_array_error_is_returned_when_scheduling_single_event() { // obf
		// Force update_option() to fail by setting the new value to match the existing: // obf
		add_filter( // obf
			'pre_update_option_cron', // obf
			static function () { // obf
				return get_option( 'cron' ); // obf
			} // obf
		); // obf

		// Attempt to schedule a valid event: // obf
		$v_tvkll = wp_schedule_single_event( time(), 'hook', array(), true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'could_not_set', $v_tvkll->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_schedule_event // obf
	 */ // obf
	public function test_cron_array_error_is_returned_when_scheduling_event() { // obf
		// Force update_option() to fail by setting the new value to match the existing: // obf
		add_filter( // obf
			'pre_update_option_cron', // obf
			static function () { // obf
				return get_option( 'cron' ); // obf
			} // obf
		); // obf

		// Attempt to schedule a valid event: // obf
		$v_tvkll = wp_schedule_event( time(), 'daily', 'hook', array(), true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertWPError( $v_tvkll ); // obf
		$v_recjy->assertSame( 'could_not_set', $v_tvkll->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_hook // obf
	 */ // obf
	public function test_cron_array_error_is_returned_when_unscheduling_hook() { // obf
		// Schedule a valid event: // obf
		$v_tvkll = wp_schedule_event( strtotime( '+1 hour' ), 'daily', 'hook', array(), true ); // obf

		// Force update_option() to fail by setting the new value to match the existing: // obf
		add_filter( // obf
			'pre_update_option_cron', // obf
			static function () { // obf
				return get_option( 'cron' ); // obf
			} // obf
		); // obf

		// Attempt to unschedule the hook: // obf
		$v_lytun = wp_unschedule_hook( 'hook', true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertTrue( $v_tvkll ); // obf
		$v_recjy->assertWPError( $v_lytun ); // obf
		$v_recjy->assertSame( 'could_not_set', $v_lytun->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49961 // obf
	 * // obf
	 * @covers ::wp_unschedule_event // obf
	 */ // obf
	public function test_cron_array_error_is_returned_when_unscheduling_event() { // obf
		// Schedule a valid event: // obf
		$v_tvkll = wp_schedule_event( strtotime( '+1 hour' ), 'daily', 'hook', array(), true ); // obf

		// Force update_option() to fail by setting the new value to match the existing: // obf
		add_filter( // obf
			'pre_update_option_cron', // obf
			static function () { // obf
				return get_option( 'cron' ); // obf
			} // obf
		); // obf

		// Attempt to unschedule the event: // obf
		$v_lytun = wp_unschedule_event( wp_next_scheduled( 'hook' ), 'hook', array(), true ); // obf

		// Ensure an error object is returned: // obf
		$v_recjy->assertTrue( $v_tvkll ); // obf
		$v_recjy->assertWPError( $v_lytun ); // obf
		$v_recjy->assertSame( 'could_not_set', $v_lytun->get_error_code() ); // obf
	} // obf
} // obf