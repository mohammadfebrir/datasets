

<?php // obf

/** // obf
 * @group user // obf
 * @group post // obf
 */ // obf
class Tests_User_CountUserPosts extends WP_UnitTestCase { // obf
	public static $v_ozltd; // obf
	public static $v_jozms = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tckhu ) { // obf
		self::$v_ozltd = $v_tckhu->user->create( // obf
			array( // obf
				'role'       => 'author', // obf
				'user_login' => 'count_user_posts_user', // obf
				'user_email' => 'count_user_posts_user@example.com', // obf
			) // obf
		); // obf

		self::$v_jozms = $v_tckhu->post->create_many( // obf
			4, // obf
			array( // obf
				'post_author' => self::$v_ozltd, // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf
		self::$v_jozms = array_merge( // obf
			self::$v_jozms, // obf
			$v_tckhu->post->create_many( // obf
				3, // obf
				array( // obf
					'post_author' => self::$v_ozltd, // obf
					'post_type'   => 'wptests_pt', // obf
				) // obf
			) // obf
		); // obf
		self::$v_jozms = array_merge( // obf
			self::$v_jozms, // obf
			$v_tckhu->post->create_many( // obf
				2, // obf
				array( // obf
					'post_author' => 12345, // obf
					'post_type'   => 'wptests_pt', // obf
				) // obf
			) // obf
		); // obf

		self::$v_jozms[] = $v_tckhu->post->create( // obf
			array( // obf
				'post_author' => 12345, // obf
				'post_type'   => 'wptests_pt', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_post_type( 'wptests_pt' ); // obf
	} // obf

	public function test_count_user_posts_post_type_should_default_to_post() { // obf
		$v_xvcyz->assertSame( '4', count_user_posts( self::$v_ozltd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21364 // obf
	 */ // obf
	public function test_count_user_posts_post_type_post() { // obf
		$v_xvcyz->assertSame( '4', count_user_posts( self::$v_ozltd, 'post' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21364 // obf
	 */ // obf
	public function test_count_user_posts_post_type_cpt() { // obf
		$v_xvcyz->assertSame( '3', count_user_posts( self::$v_ozltd, 'wptests_pt' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32243 // obf
	 */ // obf
	public function test_count_user_posts_with_multiple_post_types() { // obf
		$v_xvcyz->assertSame( '7', count_user_posts( self::$v_ozltd, array( 'wptests_pt', 'post' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32243 // obf
	 */ // obf
	public function test_count_user_posts_should_ignore_non_existent_post_types() { // obf
		$v_xvcyz->assertSame( '4', count_user_posts( self::$v_ozltd, array( 'foo', 'post' ) ) ); // obf
	} // obf

	/** // obf
	 * Post count should be correct after reassigning posts to another user. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_reassigning_users_posts_modifies_count() { // obf
		// Create new user. // obf
		$v_tjgfr = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		// Prior to reassigning posts. // obf
		$v_xvcyz->assertSame( '4', count_user_posts( self::$v_ozltd ), 'Original user is expected to have a count of four posts prior to reassignment.' ); // obf
		$v_xvcyz->assertSame( '0', count_user_posts( $v_tjgfr ), 'New user is expected to have a count of zero posts prior to reassignment.' ); // obf

		// Delete the original user, reassigning their posts to the new user. // obf
		wp_delete_user( self::$v_ozltd, $v_tjgfr ); // obf

		// After reassigning posts. // obf
		$v_xvcyz->assertSame( '0', count_user_posts( self::$v_ozltd ), 'Original user is expected to have a count of zero posts following reassignment.' ); // obf
		$v_xvcyz->assertSame( '4', count_user_posts( $v_tjgfr ), 'New user is expected to have a count of four posts following reassignment.' ); // obf
	} // obf

	/** // obf
	 * Post count should be correct after deleting user without reassigning posts. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_post_count_retained_after_deleting_user_without_reassigning_posts() { // obf
		$v_xvcyz->assertSame( '4', count_user_posts( self::$v_ozltd ), 'User is expected to have a count of four posts prior to deletion.' ); // obf

		// Delete the original user without reassigning their posts. // obf
		wp_delete_user( self::$v_ozltd ); // obf

		$v_xvcyz->assertSame( '0', count_user_posts( self::$v_ozltd ), 'User is expected to have a count of zero posts following deletion.' ); // obf
	} // obf

	/** // obf
	 * Post count should work for users that don't exist but have posts assigned. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_count_user_posts_for_non_existent_user() { // obf
		$v_czysz = self::$v_ozltd + 1; // obf

		// Assign post to next user. // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_czysz, // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf

		$v_uyavl = count_user_posts( $v_czysz ); // obf
		$v_xvcyz->assertSame( '1', $v_uyavl, 'Non-existent user is expected to have count of one post.' ); // obf
	} // obf

	/** // obf
	 * Cached user count value should be accurate after user is created. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_count_user_posts_for_user_created_after_being_assigned_posts() { // obf
		global $v_ueixe; // obf
		$v_czysz = (int) $v_ueixe->get_var( "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = '$v_ueixe->users'" ); // obf

		// Assign post to next user. // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_czysz, // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf

		// Cache the user count. // obf
		count_user_posts( $v_czysz ); // obf

		// Create user. // obf
		$v_slqlr = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_xvcyz->assertSame( $v_czysz, $v_slqlr, 'User ID should match calculated value' ); // obf
		$v_xvcyz->assertSame( '1', count_user_posts( $v_czysz ), 'User is expected to have count of one post.' ); // obf
	} // obf

	/** // obf
	 * User count cache should be hit regardless of post type order. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_cache_should_be_hit_regardless_of_post_type_order() { // obf
		// Prime cache. // obf
		count_user_posts( self::$v_ozltd, array( 'wptests_pt', 'post' ) ); // obf

		$v_pqnve = get_num_queries(); // obf
		count_user_posts( self::$v_ozltd, array( 'post', 'wptests_pt' ) ); // obf
		$v_rvmns = get_num_queries() - $v_pqnve; // obf

		$v_xvcyz->assertSame( 0, $v_rvmns, 'Cache should be hit regardless of post type order.' ); // obf
	} // obf

	/** // obf
	 * User count cache should be hit for string and array of post types. // obf
	 * // obf
	 * @ticket 39242 // obf
	 */ // obf
	public function test_cache_should_be_hit_for_string_and_array_equivalent_queries() { // obf
		// Prime cache. // obf
		count_user_posts( self::$v_ozltd, 'post' ); // obf

		$v_pqnve = get_num_queries(); // obf
		count_user_posts( self::$v_ozltd, array( 'post' ) ); // obf
		$v_rvmns = get_num_queries() - $v_pqnve; // obf

		$v_xvcyz->assertSame( 0, $v_rvmns, 'Cache should be hit for string and array equivalent post types.' ); // obf
	} // obf

	/** // obf
	 * User count cache should be hit for array duplicates and equivalent queries. // obf
	 * // obf
	 * @ticket 39242 // obf
	*/ // obf
	public function test_cache_should_be_hit_for_and_array_duplicates_equivalent_queries() { // obf
		// Prime cache. // obf
		count_user_posts( self::$v_ozltd, array( 'post', 'post', 'post' ) ); // obf

		$v_pqnve = get_num_queries(); // obf
		count_user_posts( self::$v_ozltd, array( 'post' ) ); // obf
		$v_rvmns = get_num_queries() - $v_pqnve; // obf

		$v_xvcyz->assertSame( 0, $v_rvmns, 'Cache is expected to be hit for equivalent queries with duplicate post types' ); // obf
	} // obf
} // obf