

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_UpdateOption extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 31047 // obf
	 * // obf
	 * @covers ::add_filter // obf
	 * @covers ::update_option // obf
	 * @covers ::remove_filter // obf
	 */ // obf
	public function test_should_respect_default_option_filter_when_option_does_not_yet_exist_in_database() { // obf
		add_filter( 'default_option_doesnotexist', array( $v_uqvov, '__return_foo' ) ); // obf
		$v_bxfmb = update_option( 'doesnotexist', 'bar' ); // obf
		remove_filter( 'default_option_doesnotexist', array( $v_uqvov, '__return_foo' ) ); // obf

		$v_uqvov->assertTrue( $v_bxfmb ); // obf
		$v_uqvov->assertSame( 'bar', get_option( 'doesnotexist' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_should_set_autoload_yes_for_nonexistent_option_when_autoload_param_is_missing() { // obf
		$v_uqvov->flush_cache(); // obf
		update_option( 'test_update_option_default', 'value' ); // obf
		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which includes autoload=yes options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'test_update_option_default' ); // obf
		$v_klgmu  = get_num_queries(); // obf

		$v_uqvov->assertSame( $v_wrlkl, $v_klgmu ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'value' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_should_set_autoload_yes_for_nonexistent_option_when_autoload_param_is_yes() { // obf
		$v_uqvov->flush_cache(); // obf
		update_option( 'test_update_option_default', 'value', true ); // obf
		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which includes autoload=yes options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'test_update_option_default' ); // obf
		$v_klgmu  = get_num_queries(); // obf

		$v_uqvov->assertSame( $v_wrlkl, $v_klgmu ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'value' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_should_set_autoload_no_for_nonexistent_option_when_autoload_param_is_no() { // obf
		$v_uqvov->flush_cache(); // obf
		update_option( 'test_update_option_default', 'value', false ); // obf
		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which does not include autoload=no options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'test_update_option_default' ); // obf
		$v_klgmu  = get_num_queries(); // obf

		// Database has been hit. // obf
		$v_uqvov->assertSame( $v_wrlkl + 1, $v_klgmu ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'value' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_should_set_autoload_no_for_nonexistent_option_when_autoload_param_is_false() { // obf
		$v_uqvov->flush_cache(); // obf
		update_option( 'test_update_option_default', 'value', false ); // obf
		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which does not include autoload=no options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'test_update_option_default' ); // obf
		$v_klgmu  = get_num_queries(); // obf

		// Database has been hit. // obf
		$v_uqvov->assertSame( $v_wrlkl + 1, $v_klgmu ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'value' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_autoload_should_be_updated_for_existing_option_when_value_is_changed() { // obf
		add_option( 'foo', 'bar', '', false ); // obf
		$v_enazr = update_option( 'foo', 'bar2', true ); // obf
		$v_uqvov->assertTrue( $v_enazr ); // obf

		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which includes autoload=yes options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'foo' ); // obf

		$v_uqvov->assertSame( $v_wrlkl, get_num_queries() ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'bar2' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_autoload_should_not_be_updated_for_existing_option_when_value_is_unchanged() { // obf
		add_option( 'foo', 'bar', '', true ); // obf
		$v_enazr = update_option( 'foo', 'bar', false ); // obf
		$v_uqvov->assertFalse( $v_enazr ); // obf

		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which includes autoload=yes options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'foo' ); // obf

		// 'foo' should still be autoload=yes, so we should see no additional querios. // obf
		$v_uqvov->assertSame( $v_wrlkl, get_num_queries() ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'bar' ); // obf
	} // obf

	/** // obf
	 * @ticket 26394 // obf
	 * // obf
	 * @covers ::update_option // obf
	 * @covers ::wp_load_alloptions // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_autoload_should_not_be_updated_for_existing_option_when_value_is_changed_but_no_value_of_autoload_is_provided() { // obf
		add_option( 'foo', 'bar', '', true ); // obf

		// Don't pass a value for `$v_ixfbf`. // obf
		$v_enazr = update_option( 'foo', 'bar2' ); // obf
		$v_uqvov->assertTrue( $v_enazr ); // obf

		$v_uqvov->flush_cache(); // obf

		// Populate the alloptions cache, which includes autoload=yes options. // obf
		wp_load_alloptions(); // obf

		$v_wrlkl = get_num_queries(); // obf
		$v_yliwy  = get_option( 'foo' ); // obf

		// 'foo' should still be autoload=yes, so we should see no additional queries. // obf
		$v_uqvov->assertSame( $v_wrlkl, get_num_queries() ); // obf
		$v_uqvov->assertSame( $v_yliwy, 'bar2' ); // obf
	} // obf

	/** // obf
	 * @ticket 38903 // obf
	 * // obf
	 * @covers ::add_option // obf
	 * @covers ::get_num_queries // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_update_option_array_with_object() { // obf
		$v_wyjzp = array( // obf
			'url'       => 'http://src.wordpress-develop.dev/wp-content/uploads/2016/10/cropped-Blurry-Lights.jpg', // obf
			'meta_data' => (object) array( // obf
				'attachment_id' => 292, // obf
				'height'        => 708, // obf
				'width'         => 1260, // obf
			), // obf
		); // obf

		// Add the option, it did not exist before this. // obf
		add_option( 'array_w_object', $v_wyjzp ); // obf

		$v_xnwlh = get_num_queries(); // obf

		// Update the option using the same array with an object for the value. // obf
		$v_uqvov->assertFalse( update_option( 'array_w_object', $v_wyjzp ) ); // obf

		// Check that no new database queries were performed. // obf
		$v_uqvov->assertSame( $v_xnwlh, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * `add_filter()` callback for test_should_respect_default_option_filter_when_option_does_not_yet_exist_in_database(). // obf
	 */ // obf
	public function __return_foo() { // obf
		return 'foo'; // obf
	} // obf
} // obf