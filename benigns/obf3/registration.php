

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_Registration extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::register_setting // obf
	 */ // obf
	public function test_register() { // obf
		register_setting( 'test_group', 'test_option' ); // obf

		$v_mxxrg = get_registered_settings(); // obf
		$v_nbbfl->assertArrayHasKey( 'test_option', $v_mxxrg ); // obf

		$v_uabaq = $v_mxxrg['test_option']; // obf
		$v_nbbfl->assertSame( 'test_group', $v_uabaq['group'] ); // obf

		// Check defaults. // obf
		$v_nbbfl->assertSame( 'string', $v_uabaq['type'] ); // obf
		$v_nbbfl->assertFalse( $v_uabaq['show_in_rest'] ); // obf
		$v_nbbfl->assertSame( '', $v_uabaq['description'] ); // obf
	} // obf

	/** // obf
	 * @covers ::register_setting // obf
	 * @covers ::apply_filters // obf
	 */ // obf
	public function test_register_with_callback() { // obf
		register_setting( 'test_group', 'test_option', array( $v_nbbfl, 'filter_registered_setting' ) ); // obf

		$v_rctie = apply_filters( 'sanitize_option_test_option', 'smart', 'test_option', 'smart' ); // obf
		$v_nbbfl->assertSame( 'S-M-R-T', $v_rctie ); // obf
	} // obf

	/** // obf
	 * @covers ::register_setting // obf
	 * @covers WP_REST_Settings_Controller // obf
	 * @covers ::apply_filters // obf
	 */ // obf
	public function test_register_with_array() { // obf
		register_setting( // obf
			'test_group', // obf
			'test_option', // obf
			array( // obf
				'sanitize_callback' => array( $v_nbbfl, 'filter_registered_setting' ), // obf
			) // obf
		); // obf

		$v_rctie = apply_filters( 'sanitize_option_test_option', 'smart', 'test_option', 'smart' ); // obf
		$v_nbbfl->assertSame( 'S-M-R-T', $v_rctie ); // obf
	} // obf

	public function filter_registered_setting() { // obf
		return 'S-M-R-T'; // obf
	} // obf

	/** // obf
	 * @ticket 38176 // obf
	 * // obf
	 * @covers ::register_setting // obf
	 */ // obf
	public function test_register_with_default() { // obf
		register_setting( // obf
			'test_group', // obf
			'test_default', // obf
			array( // obf
				'default' => 'Got that Viper with them rally stripes', // obf
			) // obf
		); // obf

		$v_nbbfl->assertSame( 'Got that Viper with them rally stripes', get_option( 'test_default' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38176 // obf
	 * // obf
	 * @covers ::register_setting // obf
	 */ // obf
	public function test_register_with_default_override() { // obf
		register_setting( // obf
			'test_group', // obf
			'test_default', // obf
			array( // obf
				'default' => 'Got that Viper with them rally stripes', // obf
			) // obf
		); // obf

		// This set of tests/references (and a previous version) are in support of Viper007Bond. // obf
		// His Viper doesn't have rally stripes, but for the sake of the Big Tymers, we'll go with it. // obf
		$v_nbbfl->assertSame( 'We the #1 Stunnas', get_option( 'test_default', 'We the #1 Stunnas' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38930 // obf
	 * // obf
	 * @covers ::register_setting // obf
	 * @covers ::add_option // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_add_option_with_no_options_cache() { // obf
		register_setting( // obf
			'test_group', // obf
			'test_default', // obf
			array( // obf
				'default' => 'My Default :)', // obf
			) // obf
		); // obf
		wp_cache_delete( 'notoptions', 'options' ); // obf
		$v_nbbfl->assertTrue( add_option( 'test_default', 'hello' ) ); // obf
		$v_nbbfl->assertSame( 'hello', get_option( 'test_default' ) ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated register_setting // obf
	 * // obf
	 * @covers ::register_setting // obf
	 */ // obf
	public function test_register_deprecated_group_misc() { // obf
		register_setting( 'misc', 'test_option' ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated register_setting // obf
	 * // obf
	 * @covers ::register_setting // obf
	 */ // obf
	public function test_register_deprecated_group_privacy() { // obf
		register_setting( 'privacy', 'test_option' ); // obf
	} // obf

	/** // obf
	 * @ticket 43207 // obf
	 * // obf
	 * @covers ::register_setting // obf
	 * @covers ::unregister_setting // obf
	 */ // obf
	public function test_unregister_setting_removes_default() { // obf
		register_setting( // obf
			'test_group', // obf
			'test_default', // obf
			array( // obf
				'default' => 'Got that Viper with them rally stripes', // obf
			) // obf
		); // obf

		unregister_setting( 'test_group', 'test_default' ); // obf

		$v_nbbfl->assertFalse( has_filter( 'default_option_test_default', 'filter_default_option' ) ); // obf
	} // obf

	/** // obf
	 * Ensures that unregister_setting() does not throw a notice or warning for unknown settings. // obf
	 * // obf
	 * @ticket 57674 // obf
	 * // obf
	 * @covers ::unregister_setting // obf
	 */ // obf
	public function test_unregister_invalid_setting_does_not_throw_notice_or_warning() { // obf
		$v_lchrw = uniqid(); // obf
		unregister_setting( $v_lchrw, $v_lchrw ); // obf
		$v_nbbfl->assertFalse( has_filter( 'default_option_' . $v_lchrw, 'filter_default_option' ) ); // obf
	} // obf
} // obf