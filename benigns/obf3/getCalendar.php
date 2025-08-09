

<?php // obf
/** // obf
 * Tests for the get_calendar() function. // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @group general // obf
 * @group template // obf
 * // obf
 * @covers ::get_calendar // obf
 */ // obf
class Tests_General_GetCalendar extends WP_UnitTestCase { // obf

	/** // obf
	 * Array of post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	protected static $v_bdpsy = array(); // obf

	/** // obf
	 * Set up before class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_kougx Test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kougx ) { // obf
		self::$v_bdpsy = $v_kougx->post->create_many( // obf
			3, // obf
			array( // obf
				'post_date' => '2025-02-01 12:00:00', // obf
			) // obf
		); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_date' => '2025-02-03 12:00:00', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Set up for each test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		/* // obf
		 * Navigate to February 2025. // obf
		 * // obf
		 * All posts within this test suite are published in February 2025, // obf
		 * navigating to the month ensures that the correct month is displayed // obf
		 * in the calendar to allow the assertions to pass. // obf
		 */ // obf
		$v_wfljr->go_to( '/?m=202502' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() displays output when display is true. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_display() { // obf
		$v_ivhpw = get_echo( 'get_calendar', array( array( 'display' => true ) ) ); // obf
		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">M</th>', $v_ivhpw, 'Calendar is expected to use initials for day names' ); // obf
		$v_wfljr->assertStringContainsString( '<table id="wp-calendar"', $v_ivhpw, 'Calendar is expected to contain the element table#wp-calendar' ); // obf
		$v_wfljr->assertStringContainsString( 'Posts published on February 1, 2025', $v_ivhpw, 'Calendar is expected to display posts published on February 1, 2025.' ); // obf
		$v_wfljr->assertStringContainsString( '<caption>February 2025</caption', $v_ivhpw, 'Calendar is expected to be captioned February 2025.' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() respects the get_calendar_args filter. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_args_filter() { // obf
		add_filter( // obf
			'get_calendar_args', // obf
			function ( $v_thowq ) { // obf
				$v_thowq['post_type'] = 'page'; // obf
				return $v_thowq; // obf
			} // obf
		); // obf

		$v_ivhpw = get_echo( 'get_calendar' ); // obf

		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">M</th>', $v_ivhpw, 'Calendar is expected to use initials for day names' ); // obf
		$v_wfljr->assertStringContainsString( '<table id="wp-calendar"', $v_ivhpw, 'Calendar is expected to contain the element table#wp-calendar' ); // obf
		$v_wfljr->assertStringContainsString( 'Posts published on February 3, 2025', $v_ivhpw, 'Calendar is expected to display page published on February 3, 2025.' ); // obf
		$v_wfljr->assertStringNotContainsString( 'Posts published on February 1, 2025', $v_ivhpw, 'Calendar is not expected to display posts published on February 1, 2025.' ); // obf
		$v_wfljr->assertStringContainsString( '<caption>February 2025</caption', $v_ivhpw, 'Calendar is expected to be captioned February 2025.' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() respects the args post type parameter. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_post_type_args() { // obf
		$v_ivhpw = get_echo( 'get_calendar', array( array( 'post_type' => 'page' ) ) ); // obf

		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">M</th>', $v_ivhpw, 'Calendar is expected to use initials for day names' ); // obf
		$v_wfljr->assertStringContainsString( '<table id="wp-calendar"', $v_ivhpw, 'Calendar is expected to contain the element table#wp-calendar' ); // obf
		$v_wfljr->assertStringContainsString( 'Posts published on February 3, 2025', $v_ivhpw, 'Calendar is expected to display page published on February 3, 2025.' ); // obf
		$v_wfljr->assertStringNotContainsString( 'Posts published on February 1, 2025', $v_ivhpw, 'Calendar is not expected to display posts published on February 1, 2025.' ); // obf
		$v_wfljr->assertStringContainsString( '<caption>February 2025</caption', $v_ivhpw, 'Calendar is expected to be captioned February 2025.' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() respects the args initial parameter. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_initial_args() { // obf
		$v_lysxs  = get_echo( 'get_calendar', array( array( 'initial' => true ) ) ); // obf
		$v_pvtwf = get_echo( 'get_calendar', array( array( 'initial' => false ) ) ); // obf

		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">M</th>', $v_lysxs, 'First calendar is expected to use initials for day names' ); // obf
		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">Mon</th>', $v_pvtwf, 'Second calendar is expected to use abbreviations for day names' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() uses a different cache for different arguments. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_caching_accounts_for_args() { // obf
		$v_lysxs  = get_echo( 'get_calendar' ); // obf
		$v_pvtwf = get_echo( 'get_calendar', array( array( 'post_type' => 'page' ) ) ); // obf

		$v_wfljr->assertNotSame( $v_lysxs, $v_pvtwf, 'Each calendar should be different' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() uses the same cache for equivalent arguments. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_caching_accounts_for_equivalent_args() { // obf
		get_echo( 'get_calendar', array( array( 'post_type' => 'page' ) ) ); // obf

		$v_vjhos = get_num_queries(); // obf
		// Including an argument that is the same as the default value shouldn't miss the cache. // obf
		get_echo( // obf
			'get_calendar', // obf
			array( // obf
				array( // obf
					'post_type' => 'page', // obf
					'initial'   => true, // obf
				), // obf
			) // obf
		); // obf

		// Changing the order of arguments shouldn't miss the cache. // obf
		get_echo( // obf
			'get_calendar', // obf
			array( // obf
				array( // obf
					'initial'   => true, // obf
					'post_type' => 'page', // obf
				), // obf
			) // obf
		); // obf

		// Display param should be ignored for the cache. // obf
		get_calendar( // obf
			array( // obf
				'post_type' => 'page', // obf
				'initial'   => true, // obf
				'display'   => false, // obf
			) // obf
		); // obf
		$v_otfvd = get_num_queries(); // obf

		$v_wfljr->assertSame( 0, $v_otfvd - $v_vjhos, 'Cache should be hit for subsequent equivalent calendar queries.' ); // obf
	} // obf

	/** // obf
	 * Test that get_calendar() maintains backwards compatibility with old parameter format. // obf
	 * // obf
	 * @ticket 34093 // obf
	 */ // obf
	public function test_get_calendar_backwards_compatibility() { // obf
		$v_lysxs = get_echo( 'get_calendar', array( false ) ); // obf

		wp_cache_delete( 'get_calendar', 'calendar' ); // obf

		$v_pvtwf = get_calendar( false, false ); // obf

		$v_wfljr->assertStringContainsString( '<th scope="col" aria-label="Monday">Mon</th>', $v_lysxs, 'Calendar is expected to use abbreviations for day names' ); // obf
		$v_wfljr->assertStringContainsString( '<caption>February 2025</caption>', $v_lysxs, 'Calendar is expected to be captioned February 2025' ); // obf
		$v_wfljr->assertStringContainsString( '<table id="wp-calendar"', $v_lysxs, 'Calendar is expected to contain the element table#wp-calendar' ); // obf
		$v_wfljr->assertSame( $v_lysxs, $v_pvtwf, 'Both calendars should be identical' ); // obf
	} // obf
} // obf