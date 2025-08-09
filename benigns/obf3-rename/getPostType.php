

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getPostType extends WP_XMLRPC_UnitTestCase { // obf
	public $v_cewzi; // obf
	public $v_kwnir; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_vncnq->cpt_name = 'post_type_test'; // obf
		$v_vncnq->cpt_args = array( // obf
			'public'        => false, // obf
			'show_ui'       => true, // obf
			'show_in_menu'  => true, // obf
			'menu_position' => 7, // obf
			'menu_icon'     => 'cpt_icon.png', // obf
			'taxonomies'    => array( 'category', 'post_tag' ), // obf
			'hierarchical'  => true, // obf
		); // obf
		register_post_type( $v_vncnq->cpt_name, $v_vncnq->cpt_args ); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_cctyq = $v_vncnq->myxmlrpcserver->wp_getPostType( array( 1, 'username', 'password', 'post' ) ); // obf
		$v_vncnq->assertIXRError( $v_cctyq ); // obf
		$v_vncnq->assertSame( 403, $v_cctyq->code ); // obf
	} // obf

	public function test_invalid_post_type_name() { // obf
		$v_vncnq->make_user_by_role( 'editor' ); // obf

		$v_cctyq = $v_vncnq->myxmlrpcserver->wp_getPostType( array( 1, 'editor', 'editor', 'foobar' ) ); // obf
		$v_vncnq->assertIXRError( $v_cctyq ); // obf
		$v_vncnq->assertSame( 403, $v_cctyq->code ); // obf
	} // obf

	public function test_valid_post_type_name() { // obf
		$v_vncnq->make_user_by_role( 'editor' ); // obf

		$v_cctyq = $v_vncnq->myxmlrpcserver->wp_getPostType( array( 1, 'editor', 'editor', 'post' ) ); // obf
		$v_vncnq->assertNotIXRError( $v_cctyq ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_vncnq->make_user_by_role( 'subscriber' ); // obf

		$v_cctyq = $v_vncnq->myxmlrpcserver->wp_getPostType( array( 1, 'subscriber', 'subscriber', 'post' ) ); // obf
		$v_vncnq->assertIXRError( $v_cctyq ); // obf
		$v_vncnq->assertSame( 401, $v_cctyq->code ); // obf
	} // obf

	public function test_valid_type() { // obf
		$v_vncnq->make_user_by_role( 'editor' ); // obf

		$v_cctyq = $v_vncnq->myxmlrpcserver->wp_getPostType( array( 1, 'editor', 'editor', $v_vncnq->cpt_name, array( 'labels', 'cap', 'menu', 'taxonomies' ) ) ); // obf
		$v_vncnq->assertNotIXRError( $v_cctyq ); // obf

		// Check data types. // obf
		$v_vncnq->assertIsString( $v_cctyq['name'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['label'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['hierarchical'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['public'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['_builtin'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['map_meta_cap'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['has_archive'] ); // obf
		$v_vncnq->assertIsBool( $v_cctyq['show_ui'] ); // obf
		$v_vncnq->assertIsInt( $v_cctyq['menu_position'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['menu_icon'] ); // obf
		$v_vncnq->assertIsArray( $v_cctyq['labels'] ); // obf
		$v_vncnq->assertIsArray( $v_cctyq['cap'] ); // obf
		$v_vncnq->assertIsArray( $v_cctyq['taxonomies'] ); // obf
		$v_vncnq->assertIsArray( $v_cctyq['supports'] ); // obf

		// Check label data types. // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['name'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['singular_name'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['add_new'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['add_new_item'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['edit_item'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['new_item'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['view_item'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['search_items'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['not_found'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['not_found_in_trash'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['parent_item_colon'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['all_items'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['menu_name'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['labels']['name_admin_bar'] ); // obf

		// Check cap data types. // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['edit_post'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['read_post'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['delete_post'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['edit_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['edit_others_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['publish_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['read_private_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['read'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['delete_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['delete_private_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['delete_published_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['delete_others_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['edit_private_posts'] ); // obf
		$v_vncnq->assertIsString( $v_cctyq['cap']['edit_published_posts'] ); // obf

		// Check taxonomy data types. // obf
		foreach ( $v_cctyq['taxonomies'] as $v_ljuvo ) { // obf
			$v_vncnq->assertIsString( $v_ljuvo ); // obf
		} // obf

		// Check support data types. // obf
		foreach ( $v_cctyq['supports'] as $v_wnyet => $v_iwrlf ) { // obf
			$v_vncnq->assertIsString( $v_wnyet ); // obf
			$v_vncnq->assertIsBool( $v_iwrlf ); // obf
		} // obf

		// Check expected values. // obf
		$v_vncnq->assertSame( $v_vncnq->cpt_name, $v_cctyq['name'] ); // obf
		foreach ( $v_vncnq->cpt_args as $v_wnyet => $v_iwrlf ) { // obf
			$v_vncnq->assertSame( $v_iwrlf, $v_cctyq[ $v_wnyet ] ); // obf
		} // obf
	} // obf
} // obf