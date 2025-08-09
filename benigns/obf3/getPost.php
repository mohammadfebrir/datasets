

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getPost extends WP_XMLRPC_UnitTestCase { // obf
	public $v_xysog; // obf
	public $v_fcpgw; // obf
	public $v_ofoek; // obf
	public $v_utsmi; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_tuzqc->post_date_ts            = strtotime( '+1 day' ); // obf
		$v_tuzqc->post_data               = array( // obf
			'post_title'   => 'Post Title', // obf
			'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', // obf
			'post_excerpt' => 'Post Excerpt', // obf
			'post_author'  => $v_tuzqc->make_user_by_role( 'author' ), // obf
			'post_date'    => date_format( date_create( "@{$v_tuzqc->post_date_ts}" ), 'Y-m-d H:i:s' ), // obf
		); // obf
		$v_tuzqc->post_id                 = wp_insert_post( $v_tuzqc->post_data ); // obf
		$v_tuzqc->post_custom_field       = array( // obf
			'key'   => 'test_custom_field', // obf
			'value' => 12345678, // obf
		); // obf
		$v_tuzqc->post_custom_field['id'] = add_post_meta( $v_tuzqc->post_id, $v_tuzqc->post_custom_field['key'], $v_tuzqc->post_custom_field['value'] ); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'username', 'password', 1 ) ); // obf
		$v_tuzqc->assertIXRError( $v_gnjtd ); // obf
		$v_tuzqc->assertSame( 403, $v_gnjtd->code ); // obf
	} // obf

	public function test_valid_post() { // obf
		add_theme_support( 'post-thumbnails' ); // obf

		$v_qkomb = array( 'post', 'custom_fields' ); // obf
		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'author', 'author', $v_tuzqc->post_id, $v_qkomb ) ); // obf
		$v_tuzqc->assertNotIXRError( $v_gnjtd ); // obf

		// Check data types. // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_id'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_title'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_date'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_date_gmt'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_modified'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_modified_gmt'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_status'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_type'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_name'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_author'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_password'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_excerpt'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_content'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['link'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['comment_status'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['ping_status'] ); // obf
		$v_tuzqc->assertIsBool( $v_gnjtd['sticky'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_format'] ); // obf
		$v_tuzqc->assertIsArray( $v_gnjtd['post_thumbnail'] ); // obf
		$v_tuzqc->assertIsArray( $v_gnjtd['custom_fields'] ); // obf

		// Check expected values. // obf
		$v_tuzqc->assertStringMatchesFormat( '%d', $v_gnjtd['post_id'] ); // obf
		$v_tuzqc->assertSame( $v_tuzqc->post_data['post_title'], $v_gnjtd['post_title'] ); // obf
		$v_tuzqc->assertSame( 'draft', $v_gnjtd['post_status'] ); // obf
		$v_tuzqc->assertSame( 'post', $v_gnjtd['post_type'] ); // obf
		$v_tuzqc->assertStringMatchesFormat( '%d', $v_gnjtd['post_author'] ); // obf
		$v_tuzqc->assertSame( $v_tuzqc->post_data['post_excerpt'], $v_gnjtd['post_excerpt'] ); // obf
		$v_tuzqc->assertSame( $v_tuzqc->post_data['post_content'], $v_gnjtd['post_content'] ); // obf
		$v_tuzqc->assertSame( url_to_postid( $v_gnjtd['link'] ), $v_tuzqc->post_id ); // obf
		$v_tuzqc->assertEquals( $v_tuzqc->post_custom_field['id'], $v_gnjtd['custom_fields'][0]['id'] ); // obf
		$v_tuzqc->assertSame( $v_tuzqc->post_custom_field['key'], $v_gnjtd['custom_fields'][0]['key'] ); // obf
		$v_tuzqc->assertEquals( $v_tuzqc->post_custom_field['value'], $v_gnjtd['custom_fields'][0]['value'] ); // obf

		remove_theme_support( 'post-thumbnails' ); // obf
	} // obf

	public function test_no_fields() { // obf
		$v_qkomb = array(); // obf
		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'author', 'author', $v_tuzqc->post_id, $v_qkomb ) ); // obf
		$v_tuzqc->assertNotIXRError( $v_gnjtd ); // obf

		// When no fields are requested, only the IDs should be returned. // obf
		$v_tuzqc->assertCount( 1, $v_gnjtd ); // obf
		$v_tuzqc->assertSame( array( 'post_id' ), array_keys( $v_gnjtd ) ); // obf
	} // obf

	public function test_default_fields() { // obf
		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'author', 'author', $v_tuzqc->post_id ) ); // obf
		$v_tuzqc->assertNotIXRError( $v_gnjtd ); // obf

		$v_tuzqc->assertArrayHasKey( 'post_id', $v_gnjtd ); // obf
		$v_tuzqc->assertArrayHasKey( 'link', $v_gnjtd ); // Random field from 'posts' group. // obf
		$v_tuzqc->assertArrayHasKey( 'terms', $v_gnjtd ); // obf
		$v_tuzqc->assertArrayHasKey( 'custom_fields', $v_gnjtd ); // obf
	} // obf

	public function test_date() { // obf
		$v_qkomb = array( 'post' ); // obf
		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'author', 'author', $v_tuzqc->post_id, $v_qkomb ) ); // obf
		$v_tuzqc->assertNotIXRError( $v_gnjtd ); // obf

		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_date'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_date_gmt'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_modified'] ); // obf
		$v_tuzqc->assertInstanceOf( 'IXR_Date', $v_gnjtd['post_modified_gmt'] ); // obf

		$v_tuzqc->assertSame( $v_tuzqc->post_date_ts, $v_gnjtd['post_date']->getTimestamp() ); // obf
		$v_tuzqc->assertSame( $v_tuzqc->post_date_ts, $v_gnjtd['post_modified']->getTimestamp() ); // obf

		$v_dhnsj     = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_tuzqc->post_data['post_date'], false ), 'Ymd\TH:i:s' ) ); // obf
		$v_tynei = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_tuzqc->post_data['post_date'], false ), 'Ymd\TH:i:s' ) ); // obf

		$v_tuzqc->assertSame( $v_dhnsj, $v_gnjtd['post_date_gmt']->getTimestamp() ); // obf
		$v_tuzqc->assertSame( $v_tynei, $v_gnjtd['post_modified_gmt']->getTimestamp() ); // obf
	} // obf

	/** // obf
	 * @ticket 21308 // obf
	 */ // obf
	public function test_valid_page() { // obf
		$v_tuzqc->make_user_by_role( 'editor' ); // obf

		$v_qupdr = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_chokt  = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_qupdr, // obf
				'menu_order'  => 2, // obf
			) // obf
		); // obf

		$v_gnjtd = $v_tuzqc->myxmlrpcserver->wp_getPost( array( 1, 'editor', 'editor', $v_chokt ) ); // obf
		$v_tuzqc->assertNotIXRError( $v_gnjtd ); // obf

		$v_tuzqc->assertIsString( $v_gnjtd['post_id'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_parent'] ); // obf
		$v_tuzqc->assertIsInt( $v_gnjtd['menu_order'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['guid'] ); // obf
		$v_tuzqc->assertIsString( $v_gnjtd['post_mime_type'] ); // obf

		$v_tuzqc->assertSame( 'page', $v_gnjtd['post_type'] ); // obf
		$v_tuzqc->assertEquals( $v_qupdr, $v_gnjtd['post_parent'] ); // obf
		$v_tuzqc->assertSame( 2, $v_gnjtd['menu_order'] ); // obf
	} // obf
} // obf