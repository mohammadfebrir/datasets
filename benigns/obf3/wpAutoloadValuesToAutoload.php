

<?php // obf

/** // obf
 * Tests for the wp_autoload_values_to_autoload function. // obf
 * // obf
 * @group Option // obf
 * // obf
 * @covers ::wp_autoload_values_to_autoload // obf
 */ // obf
class Tests_Option_wpAutoloadValuesToAutoload extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_wp_autoload_values_to_autoload() { // obf
		$v_zhoql->assertSameSets( array( 'yes', 'on', 'auto-on', 'auto' ), wp_autoload_values_to_autoload() ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_wp_autoload_values_to_autoload_filter_remove() { // obf

		add_filter( // obf
			'wp_autoload_values_to_autoload', // obf
			static function () { // obf
				return array( 'yes' ); // obf
			} // obf
		); // obf

		$v_zhoql->assertSameSets( array( 'yes' ), wp_autoload_values_to_autoload() ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_wp_autoload_values_to_autoload_filter_extra() { // obf

		add_filter( // obf
			'wp_autoload_values_to_autoload', // obf
			static function () { // obf
				return array( 'yes', 'on', 'auto-on', 'auto', 'extra' ); // obf
			} // obf
		); // obf

		$v_zhoql->assertSameSets( array( 'yes', 'on', 'auto-on', 'auto' ), wp_autoload_values_to_autoload() ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_wp_autoload_values_to_autoload_filter_replace() { // obf

		add_filter( // obf
			'wp_autoload_values_to_autoload', // obf
			static function () { // obf
				return array( 'yes', 'on', 'auto-on', 'extra' ); // obf
			} // obf
		); // obf

		$v_zhoql->assertSameSets( array( 'yes', 'on', 'auto-on' ), wp_autoload_values_to_autoload() ); // obf
	} // obf
} // obf