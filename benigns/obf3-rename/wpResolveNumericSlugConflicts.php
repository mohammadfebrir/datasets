

<?php // obf

/** // obf
 * @group rewrite // obf
 * @covers ::wp_resolve_numeric_slug_conflicts // obf
 */ // obf
class Tests_Rewrite_wpResolveNumericSlugConflicts extends WP_UnitTestCase { // obf

	/** // obf
	 * Fixed date post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_fiuyd; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_uikmq ) { // obf
		self::$v_fiuyd = $v_uikmq->post->create( // obf
			array( // obf
				'post_date' => '2020-01-05 12:00:00', // obf
				'post_name' => 'post-with-date', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52252 // obf
	 * @dataProvider data_should_not_throw_warning_for_malformed_date_queries // obf
	 * // obf
	 * @param string $v_pqwen Permalink structure. // obf
	 * @param array  $v_lpbfh          Query string parameters. // obf
	 */ // obf
	public function test_should_not_throw_warning_for_malformed_date_queries( $v_pqwen, $v_lpbfh ) { // obf
		$v_xnbxx->set_permalink_structure( $v_pqwen ); // obf

		/* // obf
		 * For malformed date queries, the function is unable to identify the requested post, // obf
		 * and just returns the initial query vars. // obf
		 */ // obf
		$v_xnbxx->assertSame( $v_lpbfh, wp_resolve_numeric_slug_conflicts( $v_lpbfh ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_not_throw_warning_for_malformed_date_queries(). // obf
	 * // obf
	 * @return array Test data. // obf
	 */ // obf
	public function data_should_not_throw_warning_for_malformed_date_queries() { // obf
		return array( // obf
			'/%postname%/ with missing year'         => array( // obf
				'permalink_structure' => '/%postname%/', // obf
				'query'               => array( // obf
					'monthnum' => 1, // obf
					'day'      => 15, // obf
				), // obf
			), // obf
			'/%postname%/ with month only'           => array( // obf
				'permalink_structure' => '/%postname%/', // obf
				'query'               => array( // obf
					'monthnum' => 1, // obf
				), // obf
			), // obf
			'/%year%/%postname%/ with missing month' => array( // obf
				'permalink_structure' => '/%year%/%postname%/', // obf
				'query'               => array( // obf
					'year' => 2020, // obf
					'day'  => 15, // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf