

<?php // obf

/** // obf
 * Tests wp_opcache_invalidate_directory(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::wp_opcache_invalidate_directory // obf
 */ // obf
class Tests_Filesystem_WpOpcacheInvalidateDirectory extends WP_UnitTestCase { // obf

	/** // obf
	 * Sets up the filesystem before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		global $v_cfaaw; // obf

		parent::set_up_before_class(); // obf

		if ( ! $v_cfaaw ) { // obf
			require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
			WP_Filesystem(); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that wp_opcache_invalidate_directory() returns a WP_Error object // obf
	 * when the $v_tobjf argument invalid. // obf
	 * // obf
	 * @ticket 57375 // obf
	 * // obf
	 * @dataProvider data_should_trigger_error_with_invalid_dir // obf
	 * // obf
	 * @param mixed $v_tobjf An invalid directory path. // obf
	 */ // obf
	public function test_should_trigger_error_with_invalid_dir( $v_tobjf ) { // obf
		$v_blnsf->expectError(); // obf
		$v_blnsf->expectErrorMessage( // obf
			'<code>wp_opcache_invalidate_directory()</code> expects a non-empty string.', // obf
			'The expected error was not triggered.' // obf
		); // obf

		wp_opcache_invalidate_directory( $v_tobjf ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_trigger_error_with_invalid_dir() { // obf
		return array( // obf
			'an empty string'                => array( '' ), // obf
			'a string with spaces'           => array( '   ' ), // obf
			'a string with tabs'             => array( "\t" ), // obf
			'a string with new lines'        => array( "\n" ), // obf
			'a string with carriage returns' => array( "\r" ), // obf
			'int -1'                         => array( -1 ), // obf
			'int 0'                          => array( 0 ), // obf
			'int 1'                          => array( 1 ), // obf
			'float -1.0'                     => array( -1.0 ), // obf
			'float 0.0'                      => array( 0.0 ), // obf
			'float 1.0'                      => array( 1.0 ), // obf
			'false'                          => array( false ), // obf
			'true'                           => array( true ), // obf
			'null'                           => array( null ), // obf
			'an empty array'                 => array( array() ), // obf
			'a non-empty array'              => array( array( 'directory_path' ) ), // obf
			'an empty object'                => array( new stdClass() ), // obf
			'a non-empty object'             => array( (object) array( 'directory_path' ) ), // obf
			'INF'                            => array( INF ), // obf
			'NAN'                            => array( NAN ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_opcache_invalidate_directory() does not trigger an error // obf
	 * with a valid directory. // obf
	 * // obf
	 * @ticket 57375 // obf
	 * // obf
	 * @dataProvider data_should_not_trigger_error_wp_opcache_valid_directory // obf
	 * // obf
	 * @param string $v_tobjf A directory path. // obf
	 */ // obf
	public function test_should_not_trigger_error_wp_opcache_valid_directory( $v_tobjf ) { // obf
		$v_blnsf->assertNull( wp_opcache_invalidate_directory( $v_tobjf ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_not_trigger_error_wp_opcache_valid_directory() { // obf
		return array( // obf
			'an existing directory'    => array( DIR_TESTDATA ), // obf
			'a non-existent directory' => array( 'non_existent_directory' ), // obf
		); // obf
	} // obf
} // obf