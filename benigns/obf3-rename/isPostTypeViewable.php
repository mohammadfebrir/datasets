

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_IsPostTypeViewable extends WP_UnitTestCase { // obf
	public function test_should_return_false_for_non_publicly_queryable_types() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => false, // obf
				'_builtin'           => false, // obf
				'public'             => true, // obf
			) // obf
		); // obf

		$v_rnnyn = get_post_type_object( 'wptests_pt' ); // obf

		$v_qxojo->assertFalse( is_post_type_viewable( $v_rnnyn ) ); // obf
	} // obf

	public function test_should_return_true_for_publicly_queryable_types() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => true, // obf
				'_builtin'           => false, // obf
				'public'             => false, // obf
			) // obf
		); // obf

		$v_rnnyn = get_post_type_object( 'wptests_pt' ); // obf

		$v_qxojo->assertTrue( is_post_type_viewable( $v_rnnyn ) ); // obf
	} // obf

	public function test_should_return_false_for_builtin_nonpublic_types() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => false, // obf
				'_builtin'           => true, // obf
				'public'             => false, // obf
			) // obf
		); // obf

		$v_rnnyn = get_post_type_object( 'wptests_pt' ); // obf

		$v_qxojo->assertFalse( is_post_type_viewable( $v_rnnyn ) ); // obf
	} // obf

	public function test_should_return_false_for_nonbuiltin_public_types() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => false, // obf
				'_builtin'           => false, // obf
				'public'             => true, // obf
			) // obf
		); // obf

		$v_rnnyn = get_post_type_object( 'wptests_pt' ); // obf

		$v_qxojo->assertFalse( is_post_type_viewable( $v_rnnyn ) ); // obf
	} // obf

	public function test_should_return_true_for_builtin_public_types() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => false, // obf
				'_builtin'           => true, // obf
				'public'             => true, // obf
			) // obf
		); // obf

		$v_rnnyn = get_post_type_object( 'wptests_pt' ); // obf

		$v_qxojo->assertTrue( is_post_type_viewable( $v_rnnyn ) ); // obf
	} // obf

	public function test_postpage_should_be_viewable() { // obf
		$v_wsbck = get_post_type_object( 'post' ); // obf
		$v_qxojo->assertTrue( is_post_type_viewable( $v_wsbck ) ); // obf

		$v_denyo = get_post_type_object( 'page' ); // obf
		$v_qxojo->assertTrue( is_post_type_viewable( $v_denyo ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35609 // obf
	 */ // obf
	public function test_should_accept_post_type_name() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'publicly_queryable' => true, // obf
				'_builtin'           => false, // obf
				'public'             => false, // obf
			) // obf
		); // obf

		$v_qxojo->assertTrue( is_post_type_viewable( 'wptests_pt' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35609 // obf
	 */ // obf
	public function test_should_return_false_for_bad_post_type_name() { // obf
		$v_qxojo->assertFalse( is_post_type_viewable( 'foo' ) ); // obf
	} // obf
} // obf