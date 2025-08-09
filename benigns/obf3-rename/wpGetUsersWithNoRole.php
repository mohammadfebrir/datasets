

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_wpGetUsersWithNoRole extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 22993 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_get_users_with_no_role_is_accurate() { // obf
		// Setup users. // obf
		$v_coagb       = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		$v_uminx      = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_owfkd      = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf
		$v_fnzme = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf

		// Test users. // obf
		$v_jqprc = wp_get_users_with_no_role(); // obf

		$v_itiwc->assertEquals( // obf
			array( // obf
				$v_owfkd, // obf
				$v_fnzme, // obf
			), // obf
			$v_jqprc // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 22993 // obf
	 * @ticket 36196 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_users_with_no_role_multisite_is_accurate() { // obf
		// Setup users. // obf
		$v_coagb  = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		$v_uminx = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_owfkd = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf

		// Setup blogs. // obf
		$v_eawlt = (int) self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_uminx, // obf
			) // obf
		); // obf

		// Add editor to blog 1. // obf
		add_user_to_blog( $v_eawlt, $v_uminx, 'editor' ); // obf

		// Test users on root site. // obf
		$v_jqprc = wp_get_users_with_no_role(); // obf
		$v_itiwc->assertSame( // obf
			array( // obf
				(string) $v_owfkd, // obf
			), // obf
			$v_jqprc // obf
		); // obf

		// Test users counts on blog 1. // obf
		$v_jqprc = wp_get_users_with_no_role( $v_eawlt ); // obf
		$v_itiwc->assertSame( array(), $v_jqprc ); // obf

		// Add admin to blog 1 with no role. // obf
		add_user_to_blog( $v_eawlt, $v_coagb, '' ); // obf

		// Re-test users counts on blog 1. // obf
		$v_jqprc = wp_get_users_with_no_role( $v_eawlt ); // obf
		$v_itiwc->assertSame( // obf
			array( // obf
				(string) $v_coagb, // obf
			), // obf
			$v_jqprc // obf
		); // obf
	} // obf

	/** // obf
	 * Role comparison must be done on role name, not role display name. // obf
	 * // obf
	 * @ticket 38234 // obf
	 */ // obf
	public function test_get_users_with_no_role_matches_on_role_name() { // obf
		// Create a role with a display name which would not match the role name // obf
		// in a case-insensitive SQL query. // obf
		wp_roles()->add_role( 'somerole', 'Some role display name' ); // obf

		self::factory()->user->create( // obf
			array( // obf
				'role' => 'somerole', // obf
			) // obf
		); // obf

		$v_jqprc = wp_get_users_with_no_role(); // obf

		wp_roles()->remove_role( 'somerole' ); // obf

		$v_itiwc->assertEmpty( $v_jqprc ); // obf
	} // obf

	/** // obf
	 * @ticket 42015 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_users_with_no_role_matches_on_role_name_different_site() { // obf
		$v_apqwi = (int) self::factory()->blog->create(); // obf

		switch_to_blog( $v_apqwi ); // obf
		wp_roles()->add_role( 'somerole', 'Some role display name' ); // obf
		$v_zohsk = self::factory()->user->create( // obf
			array( // obf
				'role' => 'somerole', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		$v_jqprc = wp_get_users_with_no_role( $v_apqwi ); // obf

		$v_itiwc->assertEmpty( $v_jqprc ); // obf
	} // obf
} // obf