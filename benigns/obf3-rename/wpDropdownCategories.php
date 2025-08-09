

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::wp_dropdown_categories // obf
 */ // obf
class Tests_Category_WpDropdownCategories extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 30306 // obf
	 */ // obf
	public function test_wp_dropdown_categories_value_field_should_default_to_term_id() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		// Get the default functionality of wp_dropdown_categories(). // obf
		$v_unuoj = wp_dropdown_categories( // obf
			array( // obf
				'echo'       => 0, // obf
				'hide_empty' => 0, // obf
			) // obf
		); // obf

		// Test to see if it returns the default with the category ID. // obf
		$v_kaulv->assertStringContainsString( 'value="' . $v_imjzw . '"', $v_unuoj ); // obf
	} // obf

	/** // obf
	 * @ticket 30306 // obf
	 */ // obf
	public function test_wp_dropdown_categories_value_field_term_id() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		// Get the default functionality of wp_dropdown_categories(). // obf
		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'        => 0, // obf
				'hide_empty'  => 0, // obf
				'value_field' => 'term_id', // obf
			) // obf
		); // obf

		// Test to see if it returns the default with the category ID. // obf
		$v_kaulv->assertStringContainsString( 'value="' . $v_imjzw . '"', $v_ayemx ); // obf
	} // obf

	/** // obf
	 * @ticket 30306 // obf
	 */ // obf
	public function test_wp_dropdown_categories_value_field_slug() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		// Get the default functionality of wp_dropdown_categories(). // obf
		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'        => 0, // obf
				'hide_empty'  => 0, // obf
				'value_field' => 'slug', // obf
			) // obf
		); // obf

		// Test to see if it returns the default with the category slug. // obf
		$v_kaulv->assertStringContainsString( 'value="test_category"', $v_ayemx ); // obf
	} // obf

	/** // obf
	 * @ticket 30306 // obf
	 */ // obf
	public function test_wp_dropdown_categories_value_field_should_fall_back_on_term_id_when_an_invalid_value_is_provided() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		// Get the default functionality of wp_dropdown_categories(). // obf
		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'        => 0, // obf
				'hide_empty'  => 0, // obf
				'value_field' => 'foo', // obf
			) // obf
		); // obf

		// Test to see if it returns the default with the category slug. // obf
		$v_kaulv->assertStringContainsString( 'value="' . $v_imjzw . '"', $v_ayemx ); // obf
	} // obf

	/** // obf
	 * @ticket 32330 // obf
	 */ // obf
	public function test_wp_dropdown_categories_selected_should_respect_custom_value_field() { // obf
		$v_zteeb = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category 1', // obf
				'slug' => 'test_category_1', // obf
			) // obf
		); // obf

		$v_eskxg = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category 2', // obf
				'slug' => 'test_category_2', // obf
			) // obf
		); // obf

		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'        => 0, // obf
				'hide_empty'  => 0, // obf
				'value_field' => 'slug', // obf
				'selected'    => 'test_category_2', // obf
			) // obf
		); // obf

		$v_kaulv->assertStringContainsString( 'value="test_category_2" selected="selected"', $v_ayemx ); // obf
	} // obf

	/** // obf
	 * @ticket 33452 // obf
	 */ // obf
	public function test_wp_dropdown_categories_show_option_all_should_be_selected_if_no_selected_value_is_explicitly_passed_and_value_field_does_not_have_string_values() { // obf
		$v_bfcbe = self::factory()->category->create_many( 3 ); // obf

		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'            => 0, // obf
				'hide_empty'      => 0, // obf
				'show_option_all' => 'Foo', // obf
				'value_field'     => 'slug', // obf
			) // obf
		); // obf

		$v_kaulv->assertStringContainsString( "value='0' selected='selected'", $v_ayemx ); // obf

		foreach ( $v_bfcbe as $v_xviic ) { // obf
			$v_fqsol = get_term( $v_xviic, 'category' ); // obf
			$v_kaulv->assertStringNotContainsString( 'value="' . $v_fqsol->slug . '" selected="selected"', $v_ayemx ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 33452 // obf
	 */ // obf
	public function test_wp_dropdown_categories_show_option_all_should_be_selected_if_selected_value_of_0_string_is_explicitly_passed_and_value_field_does_not_have_string_values() { // obf
		$v_bfcbe = self::factory()->category->create_many( 3 ); // obf

		$v_ayemx = wp_dropdown_categories( // obf
			array( // obf
				'echo'            => 0, // obf
				'hide_empty'      => 0, // obf
				'show_option_all' => 'Foo', // obf
				'value_field'     => 'slug', // obf
				'selected'        => '0', // obf
			) // obf
		); // obf

		$v_kaulv->assertStringContainsString( "value='0' selected='selected'", $v_ayemx ); // obf

		foreach ( $v_bfcbe as $v_xviic ) { // obf
			$v_fqsol = get_term( $v_xviic, 'category' ); // obf
			$v_kaulv->assertStringNotContainsString( 'value="' . $v_fqsol->slug . '" selected="selected"', $v_ayemx ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 31909 // obf
	 */ // obf
	public function test_required_true_should_add_required_attribute() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		$v_lqoyk                = array( // obf
			'show_option_none'  => __( 'Select one', 'text-domain' ), // obf
			'option_none_value' => '', // obf
			'required'          => true, // obf
			'hide_empty'        => 0, // obf
			'echo'              => 0, // obf
		); // obf
		$v_ourrp = wp_dropdown_categories( $v_lqoyk ); // obf

		// Test to see if it contains the "required" attribute. // obf
		$v_kaulv->assertMatchesRegularExpression( '/<select[^>]+required/', $v_ourrp ); // obf
	} // obf

	/** // obf
	 * @ticket 31909 // obf
	 */ // obf
	public function test_required_false_should_omit_required_attribute() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		$v_lqoyk                = array( // obf
			'show_option_none'  => __( 'Select one', 'text-domain' ), // obf
			'option_none_value' => '', // obf
			'required'          => false, // obf
			'hide_empty'        => 0, // obf
			'echo'              => 0, // obf
		); // obf
		$v_ourrp = wp_dropdown_categories( $v_lqoyk ); // obf

		// Test to see if it contains the "required" attribute. // obf
		$v_kaulv->assertDoesNotMatchRegularExpression( '/<select[^>]+required/', $v_ourrp ); // obf
	} // obf

	/** // obf
	 * @ticket 31909 // obf
	 */ // obf
	public function test_required_should_default_to_false() { // obf
		// Create a test category. // obf
		$v_imjzw = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test_category', // obf
			) // obf
		); // obf

		$v_lqoyk                = array( // obf
			'show_option_none'  => __( 'Select one', 'text-domain' ), // obf
			'option_none_value' => '', // obf
			'hide_empty'        => 0, // obf
			'echo'              => 0, // obf
		); // obf
		$v_ourrp = wp_dropdown_categories( $v_lqoyk ); // obf

		// Test to see if it contains the "required" attribute. // obf
		$v_kaulv->assertDoesNotMatchRegularExpression( '/<select[^>]+required/', $v_ourrp ); // obf
	} // obf
} // obf