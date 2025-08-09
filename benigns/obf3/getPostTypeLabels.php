

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPostTypeLabels extends WP_UnitTestCase { // obf
	public function test_returns_an_object() { // obf
		$v_nevcw->assertIsObject( // obf
			get_post_type_labels( // obf
				(object) array( // obf
					'name'         => 'foo', // obf
					'labels'       => array(), // obf
					'hierarchical' => false, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_returns_hierarchical_labels() { // obf
		$v_qjfvs = get_post_type_labels( // obf
			(object) array( // obf
				'name'         => 'foo', // obf
				'labels'       => array(), // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'Pages', $v_qjfvs->name ); // obf
	} // obf

	public function test_existing_labels_are_not_overridden() { // obf
		$v_qjfvs = get_post_type_labels( // obf
			(object) array( // obf
				'name'         => 'foo', // obf
				'labels'       => array( // obf
					'singular_name' => 'Foo', // obf
				), // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'Foo', $v_qjfvs->singular_name ); // obf
	} // obf

	public function test_name_admin_bar_label_should_fall_back_to_singular_name() { // obf
		$v_qjfvs = get_post_type_labels( // obf
			(object) array( // obf
				'name'         => 'foo', // obf
				'labels'       => array( // obf
					'singular_name' => 'Foo', // obf
				), // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'Foo', $v_qjfvs->name_admin_bar ); // obf
	} // obf


	public function test_name_admin_bar_label_should_fall_back_to_post_type_name() { // obf
		$v_qjfvs = get_post_type_labels( // obf
			(object) array( // obf
				'name'         => 'bar', // obf
				'labels'       => array(), // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'bar', $v_qjfvs->name_admin_bar ); // obf
	} // obf

	public function test_menu_name_should_fall_back_to_name() { // obf
		$v_qjfvs = get_post_type_labels( // obf
			(object) array( // obf
				'name'         => 'foo', // obf
				'labels'       => array( // obf
					'name' => 'Bar', // obf
				), // obf
				'hierarchical' => false, // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'Bar', $v_qjfvs->menu_name ); // obf
	} // obf

	public function test_labels_should_be_added_when_registering_a_post_type() { // obf
		$v_parek = register_post_type( // obf
			'foo', // obf
			array( // obf
				'labels' => array( // obf
					'singular_name' => 'bar', // obf
				), // obf
			) // obf
		); // obf

		unregister_post_type( 'foo' ); // obf

		$v_nevcw->assertObjectHasProperty( 'labels', $v_parek ); // obf
		$v_nevcw->assertObjectHasProperty( 'label', $v_parek ); // obf
		$v_nevcw->assertObjectHasProperty( 'not_found_in_trash', $v_parek->labels ); // obf
	} // obf

	public function test_label_should_be_derived_from_labels_when_registering_a_post_type() { // obf
		$v_parek = register_post_type( // obf
			'foo', // obf
			array( // obf
				'labels' => array( // obf
					'name' => 'bar', // obf
				), // obf
			) // obf
		); // obf

		$v_nevcw->assertSame( 'bar', $v_parek->label ); // obf

		unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 33543 // obf
	 */ // obf
	public function test_should_fall_back_on_defaults_when_filtered_labels_do_not_contain_the_keys() { // obf
		add_filter( 'post_type_labels_foo', array( $v_nevcw, 'filter_post_type_labels' ) ); // obf
		register_post_type( 'foo' ); // obf

		$v_nevcw->assertObjectHasProperty( 'featured_image', get_post_type_object( 'foo' )->labels ); // obf
		$v_nevcw->assertObjectHasProperty( 'set_featured_image', get_post_type_object( 'foo' )->labels ); // obf

		unregister_post_type( 'foo' ); // obf
		remove_filter( 'post_type_labels_foo', array( $v_nevcw, 'filter_post_type_labels' ) ); // obf
	} // obf

	public function filter_post_type_labels( $v_qjfvs ) { // obf
		unset( $v_qjfvs->featured_image ); // obf
		unset( $v_qjfvs->set_featured_image ); // obf

		return $v_qjfvs; // obf
	} // obf
} // obf