

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getOptions extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_rahgb = $v_eaweo->myxmlrpcserver->wp_getOptions( array( 1, 'username', 'password' ) ); // obf
		$v_eaweo->assertIXRError( $v_rahgb ); // obf
		$v_eaweo->assertSame( 403, $v_rahgb->code ); // obf
	} // obf

	public function test_valid_username_password() { // obf
		$v_eaweo->make_user_by_role( 'subscriber' ); // obf

		$v_rahgb = $v_eaweo->myxmlrpcserver->wp_getOptions( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_eaweo->assertIsArray( $v_rahgb ); // obf
		$v_eaweo->assertSame( 'WordPress', $v_rahgb['software_name']['value'] ); // obf
	} // obf

	public function test_option_value() { // obf
		$v_eaweo->make_user_by_role( 'administrator' ); // obf

		$v_rahgb = $v_eaweo->myxmlrpcserver->wp_getOptions( array( 1, 'administrator', 'administrator', 'default_comment_status' ) ); // obf
		$v_eaweo->assertIsArray( $v_rahgb ); // obf

		$v_eaweo->assertSame( get_option( 'default_comment_status' ), $v_rahgb['default_comment_status']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['default_comment_status']['readonly'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20201 // obf
	 */ // obf
	public function test_option_values_subscriber() { // obf
		global $v_eunvw; // obf
		$v_eaweo->make_user_by_role( 'subscriber' ); // obf

		$v_rahgb = $v_eaweo->myxmlrpcserver->wp_getOptions( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_eaweo->assertIsArray( $v_rahgb ); // obf

		// Read-only options. // obf
		$v_eaweo->assertSame( 'WordPress', $v_rahgb['software_name']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['software_name']['readonly'] ); // obf

		$v_eaweo->assertSame( $v_eunvw, $v_rahgb['software_version']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['software_version']['readonly'] ); // obf

		$v_eaweo->assertSame( get_site_url(), $v_rahgb['blog_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['blog_url']['readonly'] ); // obf

		$v_eaweo->assertSame( wp_login_url(), $v_rahgb['login_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['login_url']['readonly'] ); // obf

		$v_eaweo->assertSame( get_admin_url(), $v_rahgb['admin_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['admin_url']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_link_type' ), $v_rahgb['image_default_link_type']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_link_type']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_size' ), $v_rahgb['image_default_size']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_size']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_align' ), $v_rahgb['image_default_align']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_align']['readonly'] ); // obf

		$v_eaweo->assertSame( get_template(), $v_rahgb['template']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['template']['readonly'] ); // obf

		$v_eaweo->assertSame( get_stylesheet(), $v_rahgb['stylesheet']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['stylesheet']['readonly'] ); // obf

		$v_eaweo->assertSame( current_theme_supports( 'post-thumbnails' ), $v_rahgb['post_thumbnail']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['post_thumbnail']['readonly'] ); // obf

		// Updatable options. // obf
		$v_eaweo->assertSame( get_option( 'gmt_offset' ), $v_rahgb['time_zone']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['time_zone']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'blogname' ), $v_rahgb['blog_title']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['blog_title']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'blogdescription' ), $v_rahgb['blog_tagline']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['blog_tagline']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'date_format' ), $v_rahgb['date_format']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['date_format']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'time_format' ), $v_rahgb['time_format']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['time_format']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'users_can_register' ), $v_rahgb['users_can_register']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['users_can_register']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_size_w' ), $v_rahgb['thumbnail_size_w']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['thumbnail_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_size_h' ), $v_rahgb['thumbnail_size_h']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['thumbnail_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_crop' ), $v_rahgb['thumbnail_crop']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['thumbnail_crop']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'medium_size_w' ), $v_rahgb['medium_size_w']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['medium_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'medium_size_h' ), $v_rahgb['medium_size_h']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['medium_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'large_size_w' ), $v_rahgb['large_size_w']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['large_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'large_size_h' ), $v_rahgb['large_size_h']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['large_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'default_comment_status' ), $v_rahgb['default_comment_status']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['default_comment_status']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'default_ping_status' ), $v_rahgb['default_ping_status']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['default_ping_status']['readonly'] ); // obf
	} // obf

	public function test_option_values_admin() { // obf
		global $v_eunvw; // obf

		$v_eaweo->make_user_by_role( 'administrator' ); // obf

		$v_rahgb = $v_eaweo->myxmlrpcserver->wp_getOptions( array( 1, 'administrator', 'administrator' ) ); // obf
		$v_eaweo->assertIsArray( $v_rahgb ); // obf

		// Read-only options. // obf
		$v_eaweo->assertSame( 'WordPress', $v_rahgb['software_name']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['software_name']['readonly'] ); // obf

		$v_eaweo->assertSame( $v_eunvw, $v_rahgb['software_version']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['software_version']['readonly'] ); // obf

		$v_eaweo->assertSame( get_site_url(), $v_rahgb['blog_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['blog_url']['readonly'] ); // obf

		$v_eaweo->assertSame( wp_login_url(), $v_rahgb['login_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['login_url']['readonly'] ); // obf

		$v_eaweo->assertSame( get_admin_url(), $v_rahgb['admin_url']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['admin_url']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_link_type' ), $v_rahgb['image_default_link_type']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_link_type']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_size' ), $v_rahgb['image_default_size']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_size']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'image_default_align' ), $v_rahgb['image_default_align']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['image_default_align']['readonly'] ); // obf

		$v_eaweo->assertSame( get_template(), $v_rahgb['template']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['template']['readonly'] ); // obf

		$v_eaweo->assertSame( get_stylesheet(), $v_rahgb['stylesheet']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['stylesheet']['readonly'] ); // obf

		$v_eaweo->assertSame( current_theme_supports( 'post-thumbnails' ), $v_rahgb['post_thumbnail']['value'] ); // obf
		$v_eaweo->assertTrue( $v_rahgb['post_thumbnail']['readonly'] ); // obf

		// Updatable options. // obf
		$v_eaweo->assertSame( get_option( 'gmt_offset' ), $v_rahgb['time_zone']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['time_zone']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'blogname' ), $v_rahgb['blog_title']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['blog_title']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'blogdescription' ), $v_rahgb['blog_tagline']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['blog_tagline']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'date_format' ), $v_rahgb['date_format']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['date_format']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'time_format' ), $v_rahgb['time_format']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['time_format']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'users_can_register' ), $v_rahgb['users_can_register']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['users_can_register']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_size_w' ), $v_rahgb['thumbnail_size_w']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['thumbnail_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_size_h' ), $v_rahgb['thumbnail_size_h']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['thumbnail_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'thumbnail_crop' ), $v_rahgb['thumbnail_crop']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['thumbnail_crop']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'medium_size_w' ), $v_rahgb['medium_size_w']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['medium_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'medium_size_h' ), $v_rahgb['medium_size_h']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['medium_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'large_size_w' ), $v_rahgb['large_size_w']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['large_size_w']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'large_size_h' ), $v_rahgb['large_size_h']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['large_size_h']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'default_comment_status' ), $v_rahgb['default_comment_status']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['default_comment_status']['readonly'] ); // obf

		$v_eaweo->assertSame( get_option( 'default_ping_status' ), $v_rahgb['default_ping_status']['value'] ); // obf
		$v_eaweo->assertFalse( $v_rahgb['default_ping_status']['readonly'] ); // obf
	} // obf
} // obf