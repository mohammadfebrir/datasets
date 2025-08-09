

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_IsPostStatusViewable extends WP_UnitTestCase { // obf

	/** // obf
	 * Remove the test status from the global when finished. // obf
	 * // obf
	 * @global $v_jbtoc // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		global $v_jbtoc; // obf
		unset( $v_jbtoc['wp_tests_ps'] ); // obf
	} // obf

	/** // obf
	 * Test custom post status. // obf
	 * // obf
	 * This may include emulations of built in (_builtin) statuses. // obf
	 * // obf
	 * @ticket 49380 // obf
	 * @dataProvider data_custom_post_statuses // obf
	 * // obf
	 * @param array $v_twnhz Registration arguments. // obf
	 * @param bool  $v_cqonb Expected result. // obf
	 */ // obf
	public function test_custom_post_statuses( $v_twnhz, $v_cqonb ) { // obf
		register_post_status( // obf
			'wp_tests_ps', // obf
			$v_twnhz // obf
		); // obf

		// Test status passed as string. // obf
		$v_sitjr->assertSame( $v_cqonb, is_post_status_viewable( 'wp_tests_ps' ) ); // obf
		// Test status passed as object. // obf
		$v_sitjr->assertSame( $v_cqonb, is_post_status_viewable( get_post_status_object( 'wp_tests_ps' ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider for custom post status tests. // obf
	 * // obf
	 * @return array[] { // obf
	 *     array CPS registration args. // obf
	 *     bool  Expected result. // obf
	 * } // obf
	 */ // obf
	public function data_custom_post_statuses() { // obf
		return array( // obf
			// 0. False for non-publicly queryable types. // obf
			array( // obf
				array( // obf
					'publicly_queryable' => false, // obf
					'_builtin'           => false, // obf
					'public'             => true, // obf
				), // obf
				false, // obf
			), // obf
			// 1. True for publicly queryable types. // obf
			array( // obf
				array( // obf
					'publicly_queryable' => true, // obf
					'_builtin'           => false, // obf
					'public'             => false, // obf
				), // obf
				true, // obf
			), // obf
			// 2. False for built-in non-public types. // obf
			array( // obf
				array( // obf
					'publicly_queryable' => false, // obf
					'_builtin'           => true, // obf
					'public'             => false, // obf
				), // obf
				false, // obf
			), // obf
			// 3. False for non-built-in public types. // obf
			array( // obf
				array( // obf
					'publicly_queryable' => false, // obf
					'_builtin'           => false, // obf
					'public'             => true, // obf
				), // obf
				false, // obf
			), // obf
			// 4. True for built-in public types. // obf
			array( // obf
				array( // obf
					'publicly_queryable' => false, // obf
					'_builtin'           => true, // obf
					'public'             => true, // obf
				), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test built-in and unregistered post status. // obf
	 * // obf
	 * @dataProvider data_built_unregistered_in_status_types // obf
	 * @ticket 49380 // obf
	 * // obf
	 * @param mixed $v_sixsu   Post status to check. // obf
	 * @param bool  $v_cqonb Expected viewable status. // obf
	 */ // obf
	public function test_built_unregistered_in_status_types( $v_sixsu, $v_cqonb ) { // obf
		// Test status passed as string. // obf
		$v_sitjr->assertSame( $v_cqonb, is_post_status_viewable( $v_sixsu ) ); // obf
		// Test status passed as object. // obf
		$v_sitjr->assertSame( $v_cqonb, is_post_status_viewable( get_post_status_object( $v_sixsu ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider for built-in and unregistered post status tests. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type mixed $v_sixsu   Post status to check. // obf
	 *     @type bool  $v_cqonb Expected viewable status. // obf
	 * } // obf
	 */ // obf
	public function data_built_unregistered_in_status_types() { // obf
		return array( // obf
			array( 'publish', true ), // obf
			array( 'future', false ), // obf
			array( 'draft', false ), // obf
			array( 'pending', false ), // obf
			array( 'private', false ), // obf
			array( 'trash', false ), // obf
			array( 'auto-draft', false ), // obf
			array( 'inherit', false ), // obf
			array( 'request-pending', false ), // obf
			array( 'request-confirmed', false ), // obf
			array( 'request-failed', false ), // obf
			array( 'request-completed', false ), // obf

			// Various unregistered statuses. // obf
			array( 'unregistered-status', false ), // obf
			array( false, false ), // obf
			array( true, false ), // obf
			array( 20, false ), // obf
			array( null, false ), // obf
			array( '', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Sanitize key should not be run when testing. // obf
	 * // obf
	 * @ticket 49380 // obf
	 */ // obf
	public function test_sanitize_key_not_run() { // obf
		register_post_status( // obf
			'WP_Tests_ps', // obf
			array( // obf
				'publicly_queryable' => true, // obf
				'_builtin'           => false, // obf
				'public'             => true, // obf
			) // obf
		); // obf

		// Sanitized key should return true. // obf
		$v_sitjr->assertTrue( is_post_status_viewable( 'wp_tests_ps' ) ); // obf
		$v_sitjr->assertTrue( is_post_status_viewable( get_post_status_object( 'wp_tests_ps' ) ) ); // obf

		// Unsanitized key should return false. // obf
		$v_sitjr->assertFalse( is_post_status_viewable( 'WP_tests_ps' ) ); // obf
		$v_sitjr->assertFalse( is_post_status_viewable( get_post_status_object( 'WP_tests_ps' ) ) ); // obf
	} // obf
} // obf