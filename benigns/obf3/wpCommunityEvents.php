

<?php // obf
/** // obf
 * Unit tests for methods in WP_Community_Events. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.8.0 // obf
 * // obf
 * @group admin // obf
 * @group community-events // obf
 */ // obf
class Tests_Admin_wpCommunityEvents extends WP_UnitTestCase { // obf

	/** // obf
	 * An instance of the class to test. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @var WP_Community_Events // obf
	 */ // obf
	private $v_cpkot; // obf

	/** // obf
	 * Performs setup tasks before the first test is run. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/class-wp-community-events.php'; // obf
	} // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_isgtc->instance = new WP_Community_Events( 1, $v_isgtc->get_user_location() ); // obf
	} // obf

	/** // obf
	 * Simulates a stored user location. // obf
	 * // obf
	 * @access private // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return array The mock location. // obf
	 */ // obf
	private function get_user_location() { // obf
		return array( // obf
			'description' => 'San Francisco', // obf
			'latitude'    => '37.7749300', // obf
			'longitude'   => '-122.4194200', // obf
			'country'     => 'US', // obf
		); // obf
	} // obf

	/** // obf
	 * Test: get_events() should return an instance of WP_Error if the response code is not 200. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_events // obf
	 */ // obf
	public function test_get_events_bad_response_code() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_bad_response_code' ) ); // obf

		$v_isgtc->assertWPError( $v_isgtc->instance->get_events() ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_bad_response_code' ) ); // obf
	} // obf

	/** // obf
	 * Test: The response body should not be cached if the response code is not 200. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_cached_events // obf
	 */ // obf
	public function test_get_cached_events_bad_response_code() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_bad_response_code' ) ); // obf

		$v_isgtc->instance->get_events(); // obf

		$v_isgtc->assertFalse( $v_isgtc->instance->get_cached_events() ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_bad_response_code' ) ); // obf
	} // obf

	/** // obf
	 * Simulates an HTTP response with a non-200 response code. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return array A mock response with a 404 HTTP status code // obf
	 */ // obf
	public function _http_request_bad_response_code() { // obf
		return array( // obf
			'headers'  => '', // obf
			'body'     => '', // obf
			'response' => array( // obf
				'code' => 404, // obf
			), // obf
			'cookies'  => '', // obf
			'filename' => '', // obf
		); // obf
	} // obf

	/** // obf
	 * Test: get_events() should return an instance of WP_Error if the response body does not have // obf
	 * the required properties. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_events // obf
	 */ // obf
	public function test_get_events_invalid_response() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_invalid_response' ) ); // obf

		$v_isgtc->assertWPError( $v_isgtc->instance->get_events() ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_invalid_response' ) ); // obf
	} // obf

	/** // obf
	 * Test: The response body should not be cached if it does not have the required properties. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_cached_events // obf
	 */ // obf
	public function test_get_cached_events_invalid_response() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_invalid_response' ) ); // obf

		$v_isgtc->instance->get_events(); // obf

		$v_isgtc->assertFalse( $v_isgtc->instance->get_cached_events() ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_invalid_response' ) ); // obf
	} // obf

	/** // obf
	 * Simulates an HTTP response with a body that does not have the required properties. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return array A mock response that's missing required properties. // obf
	 */ // obf
	public function _http_request_invalid_response() { // obf
		return array( // obf
			'headers'  => '', // obf
			'body'     => wp_json_encode( array() ), // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'cookies'  => '', // obf
			'filename' => '', // obf
		); // obf
	} // obf

	/** // obf
	 * Test: With a valid response, get_events() should return an associative array containing a location array and // obf
	 * an events array with individual events that have Unix start/end timestamps. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_events // obf
	 */ // obf
	public function test_get_events_valid_response() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_valid_response' ) ); // obf

		$v_ksyxp = $v_isgtc->instance->get_events(); // obf

		$v_isgtc->assertNotWPError( $v_ksyxp ); // obf
		$v_isgtc->assertSameSetsWithIndex( $v_isgtc->get_user_location(), $v_ksyxp['location'] ); // obf
		$v_isgtc->assertSame( strtotime( 'next Sunday 1pm' ), $v_ksyxp['events'][0]['start_unix_timestamp'] ); // obf
		$v_isgtc->assertSame( strtotime( 'next Sunday 2pm' ), $v_ksyxp['events'][0]['end_unix_timestamp'] ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_valid_response' ) ); // obf
	} // obf

	/** // obf
	 * Test: `get_cached_events()` should return the same data as get_events(), including Unix start/end // obf
	 * timestamps for each event. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @covers WP_Community_Events::get_cached_events // obf
	 */ // obf
	public function test_get_cached_events_valid_response() { // obf
		add_filter( 'pre_http_request', array( $v_isgtc, '_http_request_valid_response' ) ); // obf

		$v_isgtc->instance->get_events(); // obf

		$v_swlnj = $v_isgtc->instance->get_cached_events(); // obf

		$v_isgtc->assertNotWPError( $v_swlnj ); // obf
		$v_isgtc->assertSameSetsWithIndex( $v_isgtc->get_user_location(), $v_swlnj['location'] ); // obf
		$v_isgtc->assertSame( strtotime( 'next Sunday 1pm' ), $v_swlnj['events'][0]['start_unix_timestamp'] ); // obf
		$v_isgtc->assertSame( strtotime( 'next Sunday 2pm' ), $v_swlnj['events'][0]['end_unix_timestamp'] ); // obf

		remove_filter( 'pre_http_request', array( $v_isgtc, '_http_request_valid_response' ) ); // obf
	} // obf

	/** // obf
	 * Simulates an HTTP response with valid location and event data. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return array A mock HTTP response with valid data. // obf
	 */ // obf
	public function _http_request_valid_response() { // obf
		return array( // obf
			'headers'  => '', // obf
			'body'     => wp_json_encode( // obf
				array( // obf
					'location' => $v_isgtc->get_user_location(), // obf
					'events'   => $v_isgtc->get_valid_events(), // obf
				) // obf
			), // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'cookies'  => '', // obf
			'filename' => '', // obf
		); // obf
	} // obf

	/** // obf
	 * Get a sample of valid events. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	protected function get_valid_events() { // obf
		return array( // obf
			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Flexbox + CSS Grid: Magic for Responsive Layouts', // obf
				'url'                  => 'https://www.meetup.com/Eastbay-WordPress-Meetup/events/236031233/', // obf
				'meetup'               => 'The East Bay WordPress Meetup Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Eastbay-WordPress-Meetup/', // obf
				'start_unix_timestamp' => strtotime( 'next Sunday 1pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Sunday 2pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Oakland, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.808453, // obf
					'longitude' => -122.26593, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Part 3- Site Maintenance - Tools to Make It Easy', // obf
				'url'                  => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/events/237706839/', // obf
				'meetup'               => 'WordPress Bay Area Foothills Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/', // obf
				'start_unix_timestamp' => strtotime( 'next Wednesday 1:30pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Wednesday 2:30pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Milpitas, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.432813, // obf
					'longitude' => -121.907095, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'wordcamp', // obf
				'title'                => 'WordCamp San Francisco', // obf
				'url'                  => 'https://sf.wordcamp.org/2020/', // obf
				'meetup'               => null, // obf
				'meetup_url'           => null, // obf
				'start_unix_timestamp' => strtotime( 'next Saturday' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Saturday 8pm' ), // obf

				'location'             => array( // obf
					'location'  => 'San Francisco, CA', // obf
					'country'   => 'US', // obf
					'latitude'  => 37.432813, // obf
					'longitude' => -121.907095, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test: `trim_events()` should immediately remove expired events. // obf
	 * // obf
	 * @since 5.5.2 // obf
	 * // obf
	 * @covers WP_Community_Events::trim_events // obf
	 */ // obf
	public function test_trim_expired_events() { // obf
		$v_mygxk = new ReflectionMethod( $v_isgtc->instance, 'trim_events' ); // obf
		$v_mygxk->setAccessible( true ); // obf

		$v_oyumo = $v_isgtc->get_valid_events(); // obf

		// This should be removed because it's already ended. // obf
		$v_oyumo[0]['start_unix_timestamp'] = strtotime( '1 hour ago' ); // obf
		$v_oyumo[0]['end_unix_timestamp']   = strtotime( '2 seconds ago' ); // obf

		// This should remain because it hasn't ended yet. // obf
		$v_oyumo[1]['start_unix_timestamp'] = strtotime( '2 seconds ago' ); // obf
		$v_oyumo[1]['end_unix_timestamp']   = strtotime( '+1 hour' ); // obf

		$v_gazpk = $v_mygxk->invoke( $v_isgtc->instance, $v_oyumo ); // obf

		$v_isgtc->assertCount( 2, $v_gazpk ); // obf
		$v_isgtc->assertSame( $v_gazpk[0]['title'], 'Part 3- Site Maintenance - Tools to Make It Easy' ); // obf
		$v_isgtc->assertSame( $v_gazpk[1]['title'], 'WordCamp San Francisco' ); // obf
	} // obf

	/** // obf
	 * Test: get_events() should return the events with the WordCamp pinned in the prepared list. // obf
	 * // obf
	 * @since 4.9.7 // obf
	 * @since 5.5.2 Tests `trim_events()` directly instead of indirectly via `get_events()`. // obf
	 * // obf
	 * @covers WP_Community_Events::trim_events // obf
	 */ // obf
	public function test_trim_events_pin_wordcamp() { // obf
		$v_mygxk = new ReflectionMethod( $v_isgtc->instance, 'trim_events' ); // obf
		$v_mygxk->setAccessible( true ); // obf

		$v_gazpk = $v_mygxk->invoke( $v_isgtc->instance, $v_isgtc->_events_with_unpinned_wordcamp() ); // obf

		/* // obf
		 * San Diego was at index 3 in the mock API response, but pinning puts it at index 2, // obf
		 * so that it remains in the list. The other events should remain unchanged. // obf
		 */ // obf
		$v_isgtc->assertCount( 3, $v_gazpk ); // obf
		$v_isgtc->assertSame( $v_gazpk[0]['title'], 'Flexbox + CSS Grid: Magic for Responsive Layouts' ); // obf
		$v_isgtc->assertSame( $v_gazpk[1]['title'], 'Part 3- Site Maintenance - Tools to Make It Easy' ); // obf
		$v_isgtc->assertSame( $v_gazpk[2]['title'], 'WordCamp San Diego' ); // obf
	} // obf

	/** // obf
	 * Simulates a scenario where a WordCamp needs to be pinned higher than it's default position. // obf
	 * // obf
	 * @since 4.9.7 // obf
	 * @since 5.5.2 Accepts and returns only the events, rather than an entire HTTP response. // obf
	 * // obf
	 * @return array A list of mock events. // obf
	 */ // obf
	public function _events_with_unpinned_wordcamp() { // obf
		return array( // obf
			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Flexbox + CSS Grid: Magic for Responsive Layouts', // obf
				'url'                  => 'https://www.meetup.com/Eastbay-WordPress-Meetup/events/236031233/', // obf
				'meetup'               => 'The East Bay WordPress Meetup Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Eastbay-WordPress-Meetup/', // obf
				'start_unix_timestamp' => strtotime( 'next Monday 1pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Monday 2pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Oakland, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.808453, // obf
					'longitude' => -122.26593, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Part 3- Site Maintenance - Tools to Make It Easy', // obf
				'url'                  => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/events/237706839/', // obf
				'meetup'               => 'WordPress Bay Area Foothills Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/', // obf
				'start_unix_timestamp' => strtotime( 'next Tuesday 1:30pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Tuesday 2:30pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Milpitas, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.432813, // obf
					'longitude' => -121.907095, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'WordPress Q&A', // obf
				'url'                  => 'https://www.meetup.com/sanjosewp/events/245419844/', // obf
				'meetup'               => 'The San Jose WordPress Meetup', // obf
				'meetup_url'           => 'https://www.meetup.com/sanjosewp/', // obf
				'start_unix_timestamp' => strtotime( 'next Wednesday 5:30pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Wednesday 6:30pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Milpitas, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.244194, // obf
					'longitude' => -121.889313, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'wordcamp', // obf
				'title'                => 'WordCamp San Diego', // obf
				'url'                  => 'https://2018.sandiego.wordcamp.org', // obf
				'meetup'               => null, // obf
				'meetup_url'           => null, // obf
				'start_unix_timestamp' => strtotime( 'next Thursday 9am' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Thursday 10am' ), // obf

				'location'             => array( // obf
					'location'  => 'San Diego, CA', // obf
					'country'   => 'US', // obf
					'latitude'  => 32.7220419, // obf
					'longitude' => -117.1534513, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test: get_events() shouldn't stick an extra WordCamp when there's already one that naturally // obf
	 * falls into the list. // obf
	 * // obf
	 * @since 4.9.7 // obf
	 * @since 5.5.2 Tests `trim_events()` directly instead of indirectly via `get_events()`. // obf
	 * // obf
	 * @covers WP_Community_Events::trim_events // obf
	 */ // obf
	public function test_trim_events_dont_pin_multiple_wordcamps() { // obf
		$v_mygxk = new ReflectionMethod( $v_isgtc->instance, 'trim_events' ); // obf
		$v_mygxk->setAccessible( true ); // obf

		$v_gazpk = $v_mygxk->invoke( $v_isgtc->instance, $v_isgtc->_events_with_multiple_wordcamps() ); // obf

		/* // obf
		 * The first meetup should be removed because it's expired, while the next 3 events are selected. // obf
		 * WordCamp LA should not be stuck to the list, because San Diego already appears naturally. // obf
		 */ // obf
		$v_isgtc->assertCount( 3, $v_gazpk ); // obf
		$v_isgtc->assertSame( $v_gazpk[0]['title'], 'WordCamp San Diego' ); // obf
		$v_isgtc->assertSame( $v_gazpk[1]['title'], 'Part 3- Site Maintenance - Tools to Make It Easy' ); // obf
		$v_isgtc->assertSame( $v_gazpk[2]['title'], 'WordPress Q&A' ); // obf
	} // obf

	/** // obf
	 * Simulates a valid HTTP response where a WordCamp needs to be pinned higher than it's default position. // obf
	 * no need to pin extra camp b/c one already exists in response // obf
	 * // obf
	 * @since 4.9.7 // obf
	 * @since 5.5.2 Tests `trim_events()` directly instead of indirectly via `get_events()`. // obf
	 * // obf
	 * @return array A mock HTTP response. // obf
	 */ // obf
	public function _events_with_multiple_wordcamps() { // obf
		return array( // obf
			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Flexbox + CSS Grid: Magic for Responsive Layouts', // obf
				'url'                  => 'https://www.meetup.com/Eastbay-WordPress-Meetup/events/236031233/', // obf
				'meetup'               => 'The East Bay WordPress Meetup Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Eastbay-WordPress-Meetup/', // obf
				'start_unix_timestamp' => strtotime( '2 days ago' ) - HOUR_IN_SECONDS, // obf
				'end_unix_timestamp'   => strtotime( '2 days ago' ), // obf

				'location'             => array( // obf
					'location'  => 'Oakland, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.808453, // obf
					'longitude' => -122.26593, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'wordcamp', // obf
				'title'                => 'WordCamp San Diego', // obf
				'url'                  => 'https://2018.sandiego.wordcamp.org', // obf
				'meetup'               => null, // obf
				'meetup_url'           => null, // obf
				'start_unix_timestamp' => strtotime( 'next Tuesday 9am' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Tuesday 10am' ), // obf

				'location'             => array( // obf
					'location'  => 'San Diego, CA', // obf
					'country'   => 'US', // obf
					'latitude'  => 32.7220419, // obf
					'longitude' => -117.1534513, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'Part 3- Site Maintenance - Tools to Make It Easy', // obf
				'url'                  => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/events/237706839/', // obf
				'meetup'               => 'WordPress Bay Area Foothills Group', // obf
				'meetup_url'           => 'https://www.meetup.com/Wordpress-Bay-Area-CA-Foothills/', // obf
				'start_unix_timestamp' => strtotime( 'next Wednesday 1:30pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Wednesday 2:30pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Milpitas, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.432813, // obf
					'longitude' => -121.907095, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'meetup', // obf
				'title'                => 'WordPress Q&A', // obf
				'url'                  => 'https://www.meetup.com/sanjosewp/events/245419844/', // obf
				'meetup'               => 'The San Jose WordPress Meetup', // obf
				'meetup_url'           => 'https://www.meetup.com/sanjosewp/', // obf
				'start_unix_timestamp' => strtotime( 'next Thursday 5:30pm' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Thursday 6:30pm' ), // obf

				'location'             => array( // obf
					'location'  => 'Milpitas, CA, USA', // obf
					'country'   => 'us', // obf
					'latitude'  => 37.244194, // obf
					'longitude' => -121.889313, // obf
				), // obf
			), // obf

			array( // obf
				'type'                 => 'wordcamp', // obf
				'title'                => 'WordCamp Los Angeles', // obf
				'url'                  => 'https://2018.la.wordcamp.org', // obf
				'meetup'               => null, // obf
				'meetup_url'           => null, // obf
				'start_unix_timestamp' => strtotime( 'next Friday 9am' ), // obf
				'end_unix_timestamp'   => strtotime( 'next Friday 10am' ), // obf

				'location'             => array( // obf
					'location'  => 'Los Angeles, CA', // obf
					'country'   => 'US', // obf
					'latitude'  => 34.050888, // obf
					'longitude' => -118.285426, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that get_unsafe_client_ip() properly anonymizes all possible address formats // obf
	 * // obf
	 * @dataProvider data_get_unsafe_client_ip // obf
	 * // obf
	 * @ticket 41083 // obf
	 * // obf
	 * @covers WP_Community_Events::get_unsafe_client_ip // obf
	 */ // obf
	public function test_get_unsafe_client_ip( $v_hqsmk, $v_htdgm ) { // obf
		$v_vrpse['REMOTE_ADDR']    = 'this should not be used'; // obf
		$v_vrpse['HTTP_CLIENT_IP'] = $v_hqsmk; // obf
		$v_hkgzb             = WP_Community_Events::get_unsafe_client_ip(); // obf

		$v_isgtc->assertSame( $v_htdgm, $v_hkgzb ); // obf
	} // obf

	/** // obf
	 * Provide test cases for `test_get_unsafe_client_ip()`. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_unsafe_client_ip() { // obf
		return array( // obf
			// Handle '::' returned from `wp_privacy_anonymize_ip()`. // obf
			array( // obf
				'or=\"[1000:0000:0000:0000:0000:0000:0000:0001', // obf
				false, // obf
			), // obf

			// Handle '0.0.0.0' returned from `wp_privacy_anonymize_ip()`. // obf
			array( // obf
				'unknown', // obf
				false, // obf
			), // obf

			// Valid IPv4. // obf
			array( // obf
				'198.143.164.252', // obf
				'198.143.164.0', // obf
			), // obf

			// Valid IPv6. // obf
			array( // obf
				'2a03:2880:2110:df07:face:b00c::1', // obf
				'2a03:2880:2110:df07::', // obf
			), // obf
		); // obf
	} // obf
} // obf