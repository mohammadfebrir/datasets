

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_Types extends WP_UnitTestCase { // obf

	/** // obf
	 * Post type. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fszjz; // obf

	/** // obf
	 * Set up. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_stokj->post_type = 'foo1'; // obf
	} // obf

	public function test_register_post_type() { // obf
		$v_stokj->assertNull( get_post_type_object( 'foo' ) ); // obf
		register_post_type( 'foo' ); // obf

		$v_ziwqk = get_post_type_object( 'foo' ); // obf
		$v_stokj->assertInstanceOf( 'WP_Post_Type', $v_ziwqk ); // obf
		$v_stokj->assertSame( 'foo', $v_ziwqk->name ); // obf

		// Test some defaults. // obf
		$v_stokj->assertFalse( is_post_type_hierarchical( 'foo' ) ); // obf
		$v_stokj->assertSame( array(), get_object_taxonomies( 'foo' ) ); // obf

		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 48558 // obf
	 */ // obf
	public function test_register_post_type_return_value() { // obf
		$v_stokj->assertInstanceOf( 'WP_Post_Type', register_post_type( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31134 // obf
	 * // obf
	 * @expectedIncorrectUsage register_post_type // obf
	 */ // obf
	public function test_register_post_type_with_too_long_name() { // obf
		// Post type too long. // obf
		$v_stokj->assertInstanceOf( 'WP_Error', register_post_type( 'abcdefghijklmnopqrstuvwxyz0123456789' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31134 // obf
	 * // obf
	 * @expectedIncorrectUsage register_post_type // obf
	 */ // obf
	public function test_register_post_type_with_empty_name() { // obf
		// Post type too short. // obf
		$v_stokj->assertInstanceOf( 'WP_Error', register_post_type( '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_exclude_from_search_should_default_to_opposite_value_of_public() { // obf
		/* // obf
		 * 'public'              Default is false // obf
		 * 'exclude_from_search' Default is null (opposite 'public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		$v_stokj->assertNotEquals( $v_htxxi, $v_fofdj->exclude_from_search ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_publicly_queryable_should_default_to_value_of_public() { // obf
		/* // obf
		 * 'public'             Default is false // obf
		 * 'publicly_queryable' Default is null ('public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		$v_stokj->assertSame( $v_htxxi, $v_fofdj->publicly_queryable ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_show_ui_should_default_to_value_of_public() { // obf
		/* // obf
		 * 'public'  Default is false // obf
		 * 'show_ui' Default is null ('public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		$v_stokj->assertSame( $v_htxxi, $v_fofdj->show_ui ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_show_in_menu_should_default_to_value_of_show_ui() { // obf
		/* // obf
		 * 'public'      Default is false // obf
		 * 'show_ui'     Default is null ('public') // obf
		 * 'show_in_menu Default is null ('show_ui' > 'public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		// Should fall back to 'show_ui'. // obf
		$v_stokj->assertSame( $v_fofdj->show_ui, $v_fofdj->show_in_menu ); // obf

		// Should fall back to 'show_ui', then 'public'. // obf
		$v_stokj->assertSame( $v_htxxi, $v_fofdj->show_in_menu ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_show_in_nav_menus_should_default_to_value_of_public() { // obf
		/* // obf
		 * 'public'            Default is false // obf
		 * 'show_in_nav_menus' Default is null ('public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		$v_stokj->assertSame( $v_htxxi, $v_fofdj->show_in_nav_menus ); // obf
	} // obf

	/** // obf
	 * @ticket 35985 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_register_post_type_show_in_admin_bar_should_default_to_value_of_show_in_menu() { // obf
		/* // obf
		 * 'public'            Default is false // obf
		 * 'show_in_menu'      Default is null ('show_ui' > 'public') // obf
		 * 'show_in_admin_bar' Default is null ('show_in_menu' > 'show_ui' > 'public') // obf
		 */ // obf
		$v_fofdj = register_post_type( $v_stokj->post_type, array( 'public' => $v_htxxi = false ) ); // obf

		// Should fall back to 'show_in_menu'. // obf
		$v_stokj->assertSame( $v_fofdj->show_in_menu, $v_fofdj->show_in_admin_bar ); // obf

		// Should fall back to 'show_ui'. // obf
		$v_stokj->assertSame( $v_fofdj->show_ui, $v_fofdj->show_in_admin_bar ); // obf

		// Should fall back to 'public'. // obf
		$v_stokj->assertSame( $v_htxxi, $v_fofdj->show_in_admin_bar ); // obf
	} // obf

	/** // obf
	 * @ticket 53212 // obf
	 * @covers ::register_post_type // obf
	 */ // obf
	public function test_fires_registered_post_type_actions() { // obf
		$v_fszjz = 'cpt'; // obf
		$v_zykkv    = new MockAction(); // obf

		add_action( 'registered_post_type', array( $v_zykkv, 'action' ) ); // obf
		add_action( "registered_post_type_{$v_fszjz}", array( $v_zykkv, 'action' ) ); // obf

		register_post_type( $v_fszjz ); // obf
		register_post_type( $v_stokj->post_type ); // obf

		$v_stokj->assertSame( 3, $v_zykkv->get_call_count() ); // obf
	} // obf

	public function test_register_taxonomy_for_object_type() { // obf
		global $v_vjvnu; // obf

		register_post_type( 'bar' ); // obf
		register_taxonomy_for_object_type( 'post_tag', 'bar' ); // obf
		$v_stokj->assertSame( array( 'post_tag' ), get_object_taxonomies( 'bar' ) ); // obf
		register_taxonomy_for_object_type( 'category', 'bar' ); // obf
		$v_stokj->assertSame( array( 'category', 'post_tag' ), get_object_taxonomies( 'bar' ) ); // obf

		$v_stokj->assertTrue( is_object_in_taxonomy( 'bar', 'post_tag' ) ); // obf
		$v_stokj->assertTrue( is_object_in_taxonomy( 'bar', 'post_tag' ) ); // obf

		// Clean up. Remove the 'bar' post type from these taxonomies. // obf
		$v_vhhvs['wp_taxonomies']['post_tag']->object_type = array( 'post' ); // obf
		$v_vhhvs['wp_taxonomies']['category']->object_type = array( 'post' ); // obf

		$v_stokj->assertFalse( is_object_in_taxonomy( 'bar', 'post_tag' ) ); // obf
		$v_stokj->assertFalse( is_object_in_taxonomy( 'bar', 'post_tag' ) ); // obf

		_unregister_post_type( 'bar' ); // obf
	} // obf

	public function test_post_type_exists() { // obf
		$v_stokj->assertFalse( post_type_exists( 'notaposttype' ) ); // obf
		$v_stokj->assertTrue( post_type_exists( 'post' ) ); // obf
	} // obf

	public function test_post_type_supports() { // obf
		$v_stokj->assertTrue( post_type_supports( 'post', 'post-formats' ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'page', 'post-formats' ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'notaposttype', 'post-formats' ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'post', 'notafeature' ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'notaposttype', 'notafeature' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21586 // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_post_type_with_no_support() { // obf
		register_post_type( 'foo', array( 'supports' => array() ) ); // obf
		$v_stokj->assertTrue( post_type_supports( 'foo', 'editor' ), 'Editor support should be enabled by default.' ); // obf
		$v_stokj->assertTrue( post_type_supports( 'foo', 'title' ), 'Title support should be enabled by default.' ); // obf
		$v_stokj->assertTrue( post_type_supports( 'foo', 'autosave' ), 'Autosaves support should be enabled by default.' ); // obf
		_unregister_post_type( 'foo' ); // obf

		register_post_type( 'foo', array( 'supports' => false ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'foo', 'editor' ), 'Editor support should be disabled.' ); // obf
		$v_stokj->assertFalse( post_type_supports( 'foo', 'title' ), 'Title support should be disabled.' ); // obf
		$v_stokj->assertFalse( post_type_supports( 'foo', 'autosave' ), 'Autosaves support should be disabled.' ); // obf
		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 23302 // obf
	 */ // obf
	public function test_post_type_with_no_feed() { // obf
		global $v_nximp; // obf
		$v_ogvfk = get_option( 'permalink_structure' ); // obf
		update_option( 'permalink_structure', '%postname%' ); // obf
		register_post_type( 'foo', array( 'rewrite' => array( 'feeds' => false ) ) ); // obf
		$v_stokj->assertFalse( $v_nximp->extra_permastructs['foo']['feed'] ); // obf
		update_option( 'permalink_structure', $v_ogvfk ); // obf
		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 30013 // obf
	 */ // obf
	public function test_get_post_type_object_with_non_scalar_values() { // obf
		$v_stokj->assertFalse( post_type_exists( 'foo' ) ); // obf

		register_post_type( 'foo' ); // obf

		$v_stokj->assertTrue( post_type_exists( 'foo' ) ); // obf

		$v_stokj->assertNotNull( get_post_type_object( 'foo' ) ); // obf
		$v_stokj->assertNull( get_post_type_object( array() ) ); // obf
		$v_stokj->assertNull( get_post_type_object( array( 'foo' ) ) ); // obf
		$v_stokj->assertNull( get_post_type_object( new stdClass() ) ); // obf

		_unregister_post_type( 'foo' ); // obf

		$v_stokj->assertFalse( post_type_exists( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33023 // obf
	 */ // obf
	public function test_get_post_type_object_casting() { // obf
		register_post_type( 'foo' ); // obf

		$v_efbhq = get_post_type_object( 'foo' )->labels; // obf

		get_post_type_labels( get_post_type_object( 'foo' ) ); // obf

		$v_qnirp = get_post_type_object( 'foo' )->labels; // obf

		$v_stokj->assertEquals( $v_efbhq, $v_qnirp ); // obf

		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 38844 // obf
	 */ // obf
	public function test_get_post_type_object_includes_menu_icon_for_builtin_post_types() { // obf
		$v_stokj->assertSame( 'dashicons-admin-post', get_post_type_object( 'post' )->menu_icon ); // obf
		$v_stokj->assertSame( 'dashicons-admin-page', get_post_type_object( 'page' )->menu_icon ); // obf
		$v_stokj->assertSame( 'dashicons-admin-media', get_post_type_object( 'attachment' )->menu_icon ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type() { // obf
		register_post_type( 'foo' ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_unknown_post_type() { // obf
		$v_stokj->assertWPError( unregister_post_type( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_twice() { // obf
		register_post_type( 'foo' ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertWPError( unregister_post_type( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_disallow_builtin_post_type() { // obf
		$v_stokj->assertWPError( unregister_post_type( 'post' ) ); // obf
		$v_stokj->assertWPError( unregister_post_type( 'page' ) ); // obf
		$v_stokj->assertWPError( unregister_post_type( 'attachment' ) ); // obf
		$v_stokj->assertWPError( unregister_post_type( 'revision' ) ); // obf
		$v_stokj->assertWPError( unregister_post_type( 'nav_menu_item' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_query_vars() { // obf
		global $v_djveq; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'    => true, // obf
				'query_var' => 'bar', // obf
			) // obf
		); // obf

		$v_stokj->assertIsInt( array_search( 'bar', $v_djveq->public_query_vars, true ) ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertFalse( array_search( 'bar', $v_djveq->public_query_vars, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_rewrite_tags() { // obf
		$v_stokj->set_permalink_structure( '/%postname%' ); // obf

		global $v_nximp; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'    => true, // obf
				'query_var' => 'bar', // obf
			) // obf
		); // obf

		$v_lccqd = count( $v_nximp->rewritereplace ); // obf

		$v_stokj->assertContains( '%foo%', $v_nximp->rewritecode ); // obf
		$v_stokj->assertContains( 'bar=', $v_nximp->queryreplace ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertNotContains( '%foo%', $v_nximp->rewritecode ); // obf
		$v_stokj->assertNotContains( 'bar=', $v_nximp->queryreplace ); // obf
		$v_stokj->assertCount( --$v_lccqd, $v_nximp->rewritereplace ); // Array was reduced by one value. // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_rewrite_rules() { // obf
		$v_stokj->set_permalink_structure( '/%postname%' ); // obf

		global $v_nximp; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
			) // obf
		); // obf

		$v_stokj->assertContains( 'index.php?post_type=foo', $v_nximp->extra_rules_top ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertNotContains( 'index.php?post_type=foo', $v_nximp->extra_rules_top ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_custom_meta_capabilities() { // obf
		global $v_cpsjq; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'          => true, // obf
				'capability_type' => 'bar', // obf
				'map_meta_cap'    => true, // obf
			) // obf
		); // obf

		$v_stokj->assertSame( 'read_post', $v_cpsjq['read_bar'] ); // obf
		$v_stokj->assertSame( 'delete_post', $v_cpsjq['delete_bar'] ); // obf
		$v_stokj->assertSame( 'edit_post', $v_cpsjq['edit_bar'] ); // obf

		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf

		$v_stokj->assertArrayNotHasKey( 'read_bar', $v_cpsjq ); // obf
		$v_stokj->assertArrayNotHasKey( 'delete_bar', $v_cpsjq ); // obf
		$v_stokj->assertArrayNotHasKey( 'edit_bar', $v_cpsjq ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_post_type_supports() { // obf
		global $v_qxcfv; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'   => true, // obf
				'supports' => array( 'editor', 'author', 'title' ), // obf
			) // obf
		); // obf

		$v_stokj->assertSameSetsWithIndex( // obf
			array( // obf
				'editor'   => true, // obf
				'author'   => true, // obf
				'title'    => true, // obf
				'autosave' => true, // obf
			), // obf
			$v_qxcfv['foo'] // obf
		); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertArrayNotHasKey( 'foo', $v_qxcfv ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_post_type_from_taxonomies() { // obf
		global $v_vjvnu; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'     => true, // obf
				'taxonomies' => array( 'category', 'post_tag' ), // obf
			) // obf
		); // obf

		$v_stokj->assertIsInt( array_search( 'foo', $v_vjvnu['category']->object_type, true ) ); // obf
		$v_stokj->assertIsInt( array_search( 'foo', $v_vjvnu['post_tag']->object_type, true ) ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertFalse( array_search( 'foo', $v_vjvnu['category']->object_type, true ) ); // obf
		$v_stokj->assertFalse( array_search( 'foo', $v_vjvnu['post_tag']->object_type, true ) ); // obf
		$v_stokj->assertEmpty( get_object_taxonomies( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_the_future_post_hooks() { // obf
		global $v_xyfjr; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_stokj->assertArrayHasKey( 'future_foo', $v_xyfjr ); // obf
		$v_stokj->assertCount( 1, $v_xyfjr['future_foo']->callbacks ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertArrayNotHasKey( 'future_foo', $v_xyfjr ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_meta_box_callback() { // obf
		global $v_xyfjr; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public'               => true, // obf
				'register_meta_box_cb' => '__return_empty_string', // obf
			) // obf
		); // obf

		$v_stokj->assertArrayHasKey( 'add_meta_boxes_foo', $v_xyfjr ); // obf
		$v_stokj->assertCount( 1, $v_xyfjr['add_meta_boxes_foo']->callbacks ); // obf
		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf
		$v_stokj->assertArrayNotHasKey( 'add_meta_boxes_foo', $v_xyfjr ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_unregister_post_type_removes_post_type_from_global() { // obf
		global $v_wflow; // obf

		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_stokj->assertIsObject( $v_wflow['foo'] ); // obf
		$v_stokj->assertIsObject( get_post_type_object( 'foo' ) ); // obf

		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf

		$v_stokj->assertArrayNotHasKey( 'foo', $v_wflow ); // obf
		$v_stokj->assertNull( get_post_type_object( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14761 // obf
	 */ // obf
	public function test_post_type_does_not_exist_after_unregister_post_type() { // obf
		register_post_type( // obf
			'foo', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_stokj->assertTrue( unregister_post_type( 'foo' ) ); // obf

		$v_stokj->assertFalse( post_type_exists( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_single_feature() { // obf
		$v_stokj->assertContains( 'post', get_post_types_by_support( 'title' ) ); // obf
		$v_stokj->assertContains( 'page', get_post_types_by_support( 'title' ) ); // obf
		$v_stokj->assertContains( 'attachment', get_post_types_by_support( 'title' ) ); // obf
		$v_stokj->assertContains( 'nav_menu_item', get_post_types_by_support( 'title' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_multiple_features() { // obf
		$v_stokj->assertContains( 'post', get_post_types_by_support( array( 'thumbnail', 'author' ) ) ); // obf
		$v_stokj->assertContains( 'page', get_post_types_by_support( array( 'thumbnail', 'author' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_or_operator() { // obf
		$v_stokj->assertContains( 'post', get_post_types_by_support( array( 'post-formats', 'page-attributes' ), 'or' ) ); // obf
		$v_stokj->assertContains( 'page', get_post_types_by_support( array( 'post-formats', 'page-attributes' ), 'or' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_not_operator() { // obf
		$v_stokj->assertContains( 'attachment', get_post_types_by_support( array( 'thumbnail' ), 'not' ) ); // obf
		$v_stokj->assertContains( 'revision', get_post_types_by_support( array( 'thumbnail' ), 'not' ) ); // obf
		$v_stokj->assertContains( 'nav_menu_item', get_post_types_by_support( array( 'thumbnail' ), 'not' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_excluding_features() { // obf
		$v_stokj->assertSameSets( array(), get_post_types_by_support( array( 'post-formats', 'page-attributes' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34010 // obf
	 */ // obf
	public function test_get_post_types_by_support_non_existent_feature() { // obf
		$v_stokj->assertSameSets( array(), get_post_types_by_support( 'somefeature' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_post_type_supports_autosave_based_on_editor_support() { // obf
		$v_stokj->assertFalse( post_type_supports( 'attachment', 'autosave' ) ); // obf

		register_post_type( 'foo', array( 'supports' => array( 'editor' ) ) ); // obf
		$v_stokj->assertTrue( post_type_supports( 'foo', 'autosave' ) ); // obf
		_unregister_post_type( 'foo' ); // obf

		register_post_type( 'foo', array( 'supports' => array( 'title' ) ) ); // obf
		$v_stokj->assertFalse( post_type_supports( 'foo', 'autosave' ) ); // obf
		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_removing_autosave_support_removes_rest_api_controller() { // obf
		register_post_type( // obf
			'foo', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'supports'     => array( 'editor' ), // obf
			) // obf
		); // obf

		$v_cwkwe = get_post_type_object( 'foo' ); // obf
		$v_stokj->assertInstanceOf( 'WP_REST_Autosaves_Controller', $v_cwkwe->get_autosave_rest_controller(), 'Autosave controller should be set by default.' ); // obf

		remove_post_type_support( 'foo', 'autosave' ); // obf
		$v_cwkwe = get_post_type_object( 'foo' ); // obf
		$v_stokj->assertSame( null, $v_cwkwe->get_autosave_rest_controller(), 'Autosave controller should be removed.' ); // obf
		_unregister_post_type( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_removing_editor_support_does_not_remove_autosave_support() { // obf
		register_post_type( // obf
			'foo', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'supports'     => array( 'editor' ), // obf
			) // obf
		); // obf
		remove_post_type_support( 'foo', 'editor' ); // obf

		$v_stokj->assertFalse( post_type_supports( 'foo', 'editor' ), 'Post type should not support editor.' ); // obf
		$v_stokj->assertTrue( post_type_supports( 'foo', 'autosave' ), 'Post type should still support autosaves.' ); // obf
	} // obf

	/** // obf
	 * @group oembed // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_register_post_type_is_embeddable_should_default_to_value_of_public() { // obf
		$v_fszjz = register_post_type( $v_stokj->post_type ); // obf
		$v_stokj->assertFalse( $v_fszjz->embeddable, 'Non-public post type should not be embeddable by default' ); // obf

		$v_fszjz = register_post_type( $v_stokj->post_type, array( 'public' => true ) ); // obf
		$v_stokj->assertTrue( $v_fszjz->embeddable, 'Public post type should be embeddable by default' ); // obf
	} // obf

	/** // obf
	 * @group oembed // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_register_post_type_override_is_embeddable() { // obf
		$v_fszjz = register_post_type( $v_stokj->post_type, array( 'embeddable' => true ) ); // obf
		$v_stokj->assertTrue( $v_fszjz->embeddable, 'Post type should be embeddable even though it is not public' ); // obf

		$v_fszjz = register_post_type( // obf
			$v_stokj->post_type, // obf
			array( // obf
				'public'     => true, // obf
				'embeddable' => false, // obf
			) // obf
		); // obf
		$v_stokj->assertFalse( $v_fszjz->embeddable, 'Post type should not be embeddable even though it is public' ); // obf
	} // obf
} // obf