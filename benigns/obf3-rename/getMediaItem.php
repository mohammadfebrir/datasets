

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @requires function imagejpeg // obf
 */ // obf
class Tests_XMLRPC_wp_getMediaItem extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_asyrk; // obf

	public $v_mazqa; // obf
	public $v_uoczy; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wdwef ) { // obf
		self::$v_asyrk = $v_wdwef->post->create(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_theme_support( 'post-thumbnails' ); // obf

		$v_wyigx = ( DIR_TESTDATA . '/images/waffles.jpg' ); // obf
		$v_ydlcw = file_get_contents( $v_wyigx ); // obf
		$v_cknca   = wp_upload_bits( wp_basename( $v_wyigx ), null, $v_ydlcw ); // obf

		$v_jwcyo->attachment_id   = $v_jwcyo->_make_attachment( $v_cknca, self::$v_asyrk ); // obf
		$v_jwcyo->attachment_data = get_post( $v_jwcyo->attachment_id, ARRAY_A ); // obf
		update_post_meta( $v_jwcyo->attachment_id, '_wp_attachment_image_alt', 'Waffle has alt text' ); // obf

		set_post_thumbnail( self::$v_asyrk, $v_jwcyo->attachment_id ); // obf
	} // obf

	public function tear_down() { // obf
		remove_theme_support( 'post-thumbnails' ); // obf

		$v_jwcyo->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_kdnop = $v_jwcyo->myxmlrpcserver->wp_getMediaItem( array( 1, 'username', 'password', 0 ) ); // obf
		$v_jwcyo->assertIXRError( $v_kdnop ); // obf
		$v_jwcyo->assertSame( 403, $v_kdnop->code ); // obf
	} // obf

	public function test_valid_media_item() { // obf
		$v_jwcyo->make_user_by_role( 'author' ); // obf

		$v_nhzrs = array( 'post' ); // obf
		$v_kdnop = $v_jwcyo->myxmlrpcserver->wp_getMediaItem( array( 1, 'author', 'author', $v_jwcyo->attachment_id, $v_nhzrs ) ); // obf
		$v_jwcyo->assertNotIXRError( $v_kdnop ); // obf

		// Check data types. // obf
		$v_jwcyo->assertIsString( $v_kdnop['attachment_id'] ); // obf
		$v_jwcyo->assertIsInt( $v_kdnop['parent'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['title'] ); // obf
		$v_jwcyo->assertInstanceOf( 'IXR_Date', $v_kdnop['date_created_gmt'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['caption'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['description'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['link'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['thumbnail'] ); // obf
		$v_jwcyo->assertIsArray( $v_kdnop['metadata'] ); // obf
		$v_jwcyo->assertIsString( $v_kdnop['alt'] ); // obf

		// Check expected values. // obf
		$v_jwcyo->assertStringMatchesFormat( '%d', $v_kdnop['attachment_id'] ); // obf
		$v_jwcyo->assertSame( $v_jwcyo->attachment_data['post_title'], $v_kdnop['title'] ); // obf
		$v_jwcyo->assertSame( wp_get_attachment_url( $v_jwcyo->attachment_id ), $v_kdnop['link'] ); // obf
		$v_jwcyo->assertSame( wp_get_attachment_thumb_url( $v_jwcyo->attachment_id ), $v_kdnop['thumbnail'] ); // obf
	} // obf
} // obf