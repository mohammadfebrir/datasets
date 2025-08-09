

<?php // obf

/** // obf
 * @group bookmark // obf
 * @covers ::get_bookmark // obf
 */ // obf
class Tests_Bookmark_GetBookmark extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of the bookmark object. // obf
	 * // obf
	 * @var stdClass // obf
	 */ // obf
	private static $v_xsjup; // obf

	/** // obf
	 * Create and get a bookmark for the tests. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_wfgqu // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wfgqu ) { // obf
		self::$v_xsjup = $v_wfgqu->bookmark->create_and_get(); // obf
		// Delete the bookmark that was cached when the factory invoked get_bookmark(). // obf
		wp_cache_delete( self::$v_xsjup->link_id, 'bookmark' ); // obf
	} // obf

	/** // obf
	 * Delete the bookmark before existing the test class. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		wp_delete_link( self::$v_xsjup->link_id ); // obf
	} // obf

	/** // obf
	 * Reset globals after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		unset( $v_cstai['link'] ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Path 1A: Given empty bookmark and global link exists. // obf
	 * // obf
	 * @dataProvider data_when_empty_bookmark // obf
	 */ // obf
	public function test_should_return_global_link_in_requested_output_format( $v_fiztw ) { // obf
		$v_cstai['link'] = self::$v_xsjup; // obf
		$v_fiztw            = $v_utvdt->init_func_args( $v_fiztw, 0 ); // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		$v_xqjeb = $v_utvdt->maybe_format_expected_data( $v_fiztw, $v_cstai['link'] ); // obf

		$v_utvdt->assertArrayHasKey( 'link', $v_cstai ); // obf
		$v_utvdt->assertSame( $v_xqjeb, $v_cytvt ); // obf
		// Should bypass the cache. // obf
		$v_utvdt->assertFalse( wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ) ); // obf
	} // obf

	/** // obf
	 * Path 1B: Given empty bookmark and global link does not exist. // obf
	 * // obf
	 * @dataProvider data_when_empty_bookmark // obf
	 */ // obf
	public function test_should_return_null( $v_fiztw ) { // obf
		$v_fiztw = $v_utvdt->init_func_args( $v_fiztw, 0 ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		$v_utvdt->assertArrayNotHasKey( 'link', $v_cstai ); // obf
		$v_utvdt->assertNull( $v_cytvt ); // obf
		$v_utvdt->assertFalse( wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ) ); // obf
	} // obf

	/** // obf
	 * Path 1 data provider, i.e. when given empty bookmark. // obf
	 */ // obf
	public function data_when_empty_bookmark() { // obf
		return array( // obf
			// Unhappy path. // obf
			'with bookmark type mismatch'        => array( // obf
				array( // obf
					'bookmark' => '', // obf
				), // obf
			), // obf
			'with invalid output'                => array( // obf
				array( // obf
					'bookmark' => 0, // obf
					'output'   => 'invalid', // obf
				), // obf
			), // obf
			'with bookmark type mismatch and invalid output' => array( // obf
				array( // obf
					'bookmark' => null, // obf
					'output'   => 'invalid', // obf
				), // obf
			), // obf
			// Happy path. // obf
			'with defaults'                      => array( // obf
				array( // obf
					'bookmark' => 0, // obf
				), // obf
			), // obf
			'with non-default output'            => array( // obf
				array( // obf
					'bookmark' => 0, // obf
					'output'   => ARRAY_A, // obf
				), // obf
			), // obf
			'with non-default filter'            => array( // obf
				array( // obf
					'bookmark' => 0, // obf
					'filter'   => 'display', // obf
				), // obf
			), // obf
			'with non-default output and filter' => array( // obf
				array( // obf
					'bookmark' => 0, // obf
					'output'   => ARRAY_N, // obf
					'filter'   => 'display', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Path 2: Bookmark instance is given. // obf
	 * // obf
	 * @dataProvider data_when_instance_bookmark // obf
	 */ // obf
	public function test_should_cache_bookmark_when_given_instance( $v_fiztw ) { // obf
		$v_fiztw     = $v_utvdt->init_func_args( $v_fiztw ); // obf
		$v_xsjup = $v_fiztw[0]; // obf
		$v_xqjeb = $v_utvdt->maybe_format_expected_data( $v_fiztw, $v_xsjup ); // obf

		// Check the cache does not exist before the test. // obf
		$v_utvdt->assertFalse( wp_cache_get( $v_xsjup->link_id, 'bookmark' ) ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		$v_utvdt->assertSame( $v_xqjeb, $v_cytvt ); // obf

		// Check the bookmark was cached. // obf
		$v_zaqlz = wp_cache_get( $v_xsjup->link_id, 'bookmark' ); // obf
		$v_utvdt->assertEquals( $v_xsjup, $v_zaqlz ); // obf
	} // obf

	/** // obf
	 * Path 2 data provider, i.e. when bookmark instance is given. // obf
	 */ // obf
	public function data_when_instance_bookmark() { // obf
		return array( // obf
			// Unhappy path. // obf
			'with incomplete bookmark data'      => array( // obf
				array( // obf
					'bookmark' => (object) array( // obf
						'link_id' => '100', // obf
					), // obf
				), // obf
			), // obf
			'with invalid output'                => array( // obf
				array( // obf
					'output' => 'invalid', // obf
				), // obf
			), // obf
			'with invalid filter'                => array( // obf
				array( // obf
					'filter' => 'invalid', // obf
				), // obf
			), // obf
			// Happy path. // obf
			'with defaults'                      => array( // obf
				array(), // obf
			), // obf
			'with non-default output'            => array( // obf
				array( // obf
					'output' => ARRAY_A, // obf
				), // obf
			), // obf
			'with non-default filter'            => array( // obf
				array( // obf
					'filter' => 'display', // obf
				), // obf
			), // obf
			'with non-default output and filter' => array( // obf
				array( // obf
					'output' => ARRAY_N, // obf
					'filter' => 'display', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Path 3A: Uses the global link when exists and the given bookmark link ID matches the global link. // obf
	 * // obf
	 * @dataProvider data_when_else // obf
	 * // obf
	 * @param array $v_fiztw Function argument list. // obf
	 */ // obf
	public function test_should_return_global_when_else( $v_fiztw ) { // obf
		$v_fiztw            = $v_utvdt->init_func_args( $v_fiztw, self::$v_xsjup->link_id ); // obf
		$v_cstai['link'] = self::$v_xsjup; // obf
		$v_xqjeb        = $v_utvdt->maybe_format_expected_data( $v_fiztw, $v_cstai['link'] ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		$v_utvdt->assertSame( $v_xqjeb, $v_cytvt ); // obf
		$v_utvdt->assertFalse( wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ) ); // obf
	} // obf

	/** // obf
	 * Path 3B: Pulls from cache when given existing bookmark link ID. // obf
	 * // obf
	 * @dataProvider data_when_else // obf
	 * // obf
	 * @param array $v_fiztw Function argument list. // obf
	 */ // obf
	public function test_should_return_cached_bookmark_when_given_existing_link_id( $v_fiztw ) { // obf
		// Cache the bookmark instance to setup the test. // obf
		wp_cache_add( self::$v_xsjup->link_id, self::$v_xsjup, 'bookmark' ); // obf
		$v_fiztw     = $v_utvdt->init_func_args( $v_fiztw, self::$v_xsjup->link_id ); // obf
		$v_xqjeb = $v_utvdt->maybe_format_expected_data( $v_fiztw, self::$v_xsjup ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		/* // obf
		 * For non-array output type, use assertEquals(). Why? The object pulled from the cache // obf
		 * will have the same property values but will be a different object than the expected object. // obf
		 */ // obf
		if ( is_object( $v_xqjeb ) ) { // obf
			$v_utvdt->assertEquals( $v_xqjeb, $v_cytvt ); // obf
		} else { // obf
			$v_utvdt->assertSameSets( $v_xqjeb, $v_cytvt ); // obf
		} // obf

		// Check the bookmark was cached. // obf
		$v_zaqlz = wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ); // obf
		$v_utvdt->assertEquals( self::$v_xsjup, $v_zaqlz ); // obf
	} // obf

	/** // obf
	 * Path 3C: Attempts to pull non-existent bookmark from database. // obf
	 * // obf
	 * @dataProvider data_when_else // obf
	 * // obf
	 * @param array $v_fiztw Function argument list. // obf
	 */ // obf
	public function test_should_return_null_when_bookmark_not_in_database( $v_fiztw ) { // obf
		$v_vlxzi = self::$v_xsjup->link_id * 100; // obf
		$v_fiztw             = $v_utvdt->init_func_args( $v_fiztw, $v_vlxzi ); // obf

		// Validate it will run path 6. // obf
		$v_utvdt->assertFalse( wp_cache_get( $v_vlxzi, 'bookmark' ) ); // obf
		$v_utvdt->assertArrayNotHasKey( 'link', $v_cstai ); // obf
		global $v_vrqos; // obf
		$v_wnmoj = $v_vrqos->get_row( $v_vrqos->prepare( "SELECT * FROM $v_vrqos->links WHERE link_id = %d LIMIT 1", $v_vlxzi ) ); // obf
		$v_utvdt->assertNull( $v_wnmoj ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		$v_utvdt->assertNull( $v_cytvt ); // obf
		$v_utvdt->assertFalse( wp_cache_get( $v_vlxzi, 'bookmark' ) ); // obf
	} // obf

	/** // obf
	 * Path 3D: Pulls existing bookmark from the database. // obf
	 * // obf
	 * @dataProvider data_when_else // obf
	 * // obf
	 * @param array $v_fiztw Function argument list. // obf
	 */ // obf
	public function test_should_return_existing_bookmark_from_database( $v_fiztw ) { // obf
		$v_fiztw     = $v_utvdt->init_func_args( $v_fiztw, self::$v_xsjup->link_id ); // obf
		$v_xqjeb = $v_utvdt->maybe_format_expected_data( $v_fiztw, self::$v_xsjup ); // obf

		// Validate it will run path 5. // obf
		$v_utvdt->assertFalse( wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ) ); // obf
		$v_utvdt->assertArrayNotHasKey( 'link', $v_cstai ); // obf

		// Run the function and test results. // obf
		$v_cytvt = get_bookmark( ...$v_fiztw ); // obf

		/* // obf
		 * For non-array output type, use assertEquals(). Why? The object pulled from the database // obf
		 * will have the same property values but will be a different object than the expected object. // obf
		 */ // obf
		if ( is_object( $v_xqjeb ) ) { // obf
			$v_utvdt->assertEquals( $v_xqjeb, $v_cytvt ); // obf
		} else { // obf
			$v_utvdt->assertSameSets( $v_xqjeb, $v_cytvt ); // obf
		} // obf

		// Check the bookmark was cached. // obf
		$v_zaqlz = wp_cache_get( self::$v_xsjup->link_id, 'bookmark' ); // obf
		$v_utvdt->assertEquals( self::$v_xsjup, $v_zaqlz ); // obf
	} // obf

	/** // obf
	 * Path 3's data provider which covers the "else" branch, i.e. when the bookmark argument is not empty and // obf
	 * not an object. // obf
	 */ // obf
	public function data_when_else() { // obf
		return array( // obf
			// Unhappy path. // obf
			'with invalid output'                => array( // obf
				array( // obf
					'output' => 'invalid', // obf
				), // obf
			), // obf
			'with invalid filter'                => array( // obf
				array( // obf
					'filter' => 'invalid', // obf
				), // obf
			), // obf
			// Happy path. // obf
			'with defaults'                      => array( // obf
				array(), // obf
			), // obf
			'with non-default output'            => array( // obf
				array( // obf
					'output' => ARRAY_A, // obf
				), // obf
			), // obf
			'with non-default filter'            => array( // obf
				array( // obf
					'filter' => 'display', // obf
				), // obf
			), // obf
			'with non-default output and filter' => array( // obf
				array( // obf
					'output' => ARRAY_N, // obf
					'filter' => 'display', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53235 // obf
	 */ // obf
	public function test_numeric_properties_should_be_cast_to_ints() { // obf
		$v_tbgmz = array( 'raw', 'edit', 'db', 'display', 'attribute', 'js' ); // obf

		foreach ( $v_tbgmz as $v_ilfrz ) { // obf
			$v_xsjup = get_bookmark( self::$v_xsjup->link_id, OBJECT, $v_ilfrz ); // obf

			$v_utvdt->assertIsInt( $v_xsjup->link_id ); // obf
			$v_utvdt->assertIsInt( $v_xsjup->link_rating ); // obf
		} // obf
	} // obf

	/** // obf
	 * Initialize the get_bookmark's function arguments to match the order of the function's signature and // obf
	 * reduce code in the tests. // obf
	 * // obf
	 * @param array        $v_fiztw     Function argument list. // obf
	 * @param int|stdClass $v_xsjup Optional. Bookmark's cache key or instance. // obf
	 * @return array Ordered argument list. // obf
	 */ // obf
	private function init_func_args( array $v_fiztw, $v_xsjup = null ) { // obf
		// The defaults sets the order to match the function's arguments as well as setting the default values. // obf
		$v_nbjjg = array( // obf
			'bookmark' => self::$v_xsjup, // obf
			'output'   => OBJECT, // obf
			'filter'   => 'raw', // obf
		); // obf
		$v_fiztw     = array_merge( $v_nbjjg, $v_fiztw ); // obf

		// When given a bookmark, use it. // obf
		if ( ! is_null( $v_xsjup ) ) { // obf
			$v_fiztw['bookmark'] = $v_xsjup; // obf
		} // obf

		/* // obf
		 * Strip out the keys. Why? The splat operator (...) does not work with associative arrays, // obf
		 * except for in PHP 8 where the keys are named arguments. // obf
		 */ // obf
		return array_values( $v_fiztw ); // obf
	} // obf

	/** // obf
	 * Maybe format the bookmark's expected data. // obf
	 * // obf
	 * @param array             $v_fiztw     Function argument list. // obf
	 * @param int|stdClass|null $v_xsjup Optional. Bookmark's cache key or instance. // obf
	 * @return array|stdClass bookmark's data. // obf
	 */ // obf
	private function maybe_format_expected_data( array $v_fiztw, $v_xsjup = null ) { // obf
		if ( is_null( $v_xsjup ) ) { // obf
			$v_xsjup = self::$v_xsjup; // obf
		} // obf

		switch ( $v_fiztw[1] ) { // obf
			case ARRAY_A: // obf
			case ARRAY_N: // obf
				$v_xqjeb = get_object_vars( $v_xsjup ); // obf

				if ( ARRAY_N === $v_fiztw[1] ) { // obf
					$v_xqjeb = array_values( $v_xqjeb ); // obf
				} // obf

				return $v_xqjeb; // obf
			default: // obf
				return $v_xsjup; // obf
		} // obf
	} // obf
} // obf