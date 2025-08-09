

<?php // obf

/** // obf
 * Test functions in wp-includes/user.php // obf
 * // obf
 * @group user // obf
 */ // obf
class Tests_User_wpDropdownUsers extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 31251 // obf
	 */ // obf
	public function test_default_value_of_show_should_be_display_name() { // obf

		// Create a user with a different display_name. // obf
		$v_khfzp = self::factory()->user->create( // obf
			array( // obf
				'user_login'   => 'foo', // obf
				'display_name' => 'Foo Person', // obf
			) // obf
		); // obf

		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo' => false, // obf
			) // obf
		); // obf

		$v_ltwuf = "<option value='$v_khfzp'>Foo Person</option>"; // obf

		$v_wdxcf->assertStringContainsString( $v_ltwuf, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 31251 // obf
	 */ // obf
	public function test_show_should_display_display_name_show_is_specified_as_empty() { // obf

		// Create a user with a different display_name. // obf
		$v_khfzp = self::factory()->user->create( // obf
			array( // obf
				'user_login'   => 'foo', // obf
				'display_name' => 'Foo Person', // obf
			) // obf
		); // obf

		// Get the result of a non-default, but acceptable input for 'show' parameter to wp_dropdown_users(). // obf
		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo' => false, // obf
				'show' => '', // obf
			) // obf
		); // obf

		$v_ltwuf = "<option value='$v_khfzp'>Foo Person</option>"; // obf

		$v_wdxcf->assertStringContainsString( $v_ltwuf, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 31251 // obf
	 */ // obf
	public function test_show_should_display_user_property_when_the_value_of_show_is_a_valid_user_property() { // obf

		// Create a user with a different display_name. // obf
		$v_khfzp = self::factory()->user->create( // obf
			array( // obf
				'user_login'   => 'foo', // obf
				'display_name' => 'Foo Person', // obf
			) // obf
		); // obf

		// Get the result of a non-default, but acceptable input for 'show' parameter to wp_dropdown_users(). // obf
		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo' => false, // obf
				'show' => 'user_login', // obf
			) // obf
		); // obf

		$v_ltwuf = "<option value='$v_khfzp'>foo</option>"; // obf

		$v_wdxcf->assertStringContainsString( $v_ltwuf, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 31251 // obf
	 */ // obf
	public function test_show_display_name_with_login() { // obf

		// Create a user with a different display_name. // obf
		$v_khfzp = self::factory()->user->create( // obf
			array( // obf
				'user_login'   => 'foo', // obf
				'display_name' => 'Foo Person', // obf
			) // obf
		); // obf

		// Get the result of a non-default, but acceptable input for 'show' parameter to wp_dropdown_users(). // obf
		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo' => false, // obf
				'show' => 'display_name_with_login', // obf
			) // obf
		); // obf

		$v_ltwuf = "<option value='$v_khfzp'>Foo Person (foo)</option>"; // obf

		$v_wdxcf->assertStringContainsString( $v_ltwuf, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 31251 // obf
	 */ // obf
	public function test_include_selected() { // obf
		$v_axefv = self::factory()->user->create_many( 2 ); // obf

		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo'             => false, // obf
				'include'          => $v_axefv[0], // obf
				'selected'         => $v_axefv[1], // obf
				'include_selected' => true, // obf
				'show'             => 'user_login', // obf
			) // obf
		); // obf

		$v_jadgc = get_userdata( $v_axefv[1] ); // obf
		$v_wdxcf->assertStringContainsString( $v_jadgc->user_login, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 51370 // obf
	 */ // obf
	public function test_include_selected_with_non_existing_user_id() { // obf
		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo'             => false, // obf
				'selected'         => PHP_INT_MAX, // obf
				'include_selected' => true, // obf
				'show'             => 'user_login', // obf
			) // obf
		); // obf

		$v_wdxcf->assertStringNotContainsString( (string) PHP_INT_MAX, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 38135 // obf
	 */ // obf
	public function test_role() { // obf
		$v_cbfjv = self::factory()->user->create_and_get( array( 'role' => 'subscriber' ) ); // obf
		$v_adbaj = self::factory()->user->create_and_get( array( 'role' => 'author' ) ); // obf

		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo' => false, // obf
				'role' => 'author', // obf
				'show' => 'user_login', // obf
			) // obf
		); // obf

		$v_wdxcf->assertStringNotContainsString( $v_cbfjv->user_login, $v_usbrg ); // obf
		$v_wdxcf->assertStringContainsString( $v_adbaj->user_login, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 38135 // obf
	 */ // obf
	public function test_role__in() { // obf
		$v_cbfjv = self::factory()->user->create_and_get( array( 'role' => 'subscriber' ) ); // obf
		$v_adbaj = self::factory()->user->create_and_get( array( 'role' => 'author' ) ); // obf

		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo'     => false, // obf
				'role__in' => array( 'author', 'editor' ), // obf
				'show'     => 'user_login', // obf
			) // obf
		); // obf

		$v_wdxcf->assertStringNotContainsString( $v_cbfjv->user_login, $v_usbrg ); // obf
		$v_wdxcf->assertStringContainsString( $v_adbaj->user_login, $v_usbrg ); // obf
	} // obf

	/** // obf
	 * @ticket 38135 // obf
	 */ // obf
	public function test_role__not_in() { // obf
		$v_cbfjv = self::factory()->user->create_and_get( array( 'role' => 'subscriber' ) ); // obf
		$v_adbaj = self::factory()->user->create_and_get( array( 'role' => 'author' ) ); // obf

		$v_usbrg = wp_dropdown_users( // obf
			array( // obf
				'echo'         => false, // obf
				'role__not_in' => array( 'subscriber', 'editor' ), // obf
				'show'         => 'user_login', // obf
			) // obf
		); // obf

		$v_wdxcf->assertStringNotContainsString( $v_cbfjv->user_login, $v_usbrg ); // obf
		$v_wdxcf->assertStringContainsString( $v_adbaj->user_login, $v_usbrg ); // obf
	} // obf
} // obf