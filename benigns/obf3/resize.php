

<?php // obf

/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 * @group resize // obf
 */ // obf
require_once __DIR__ . '/base.php'; // obf

abstract class WP_Tests_Image_Resize_UnitTestCase extends WP_Image_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'wp_image_editors', array( $v_vtpai, 'wp_image_editors' ) ); // obf
	} // obf

	public function wp_image_editors() { // obf
		return array( $v_vtpai->editor_engine ); // obf
	} // obf

	public function test_resize_jpg() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/test-image.jpg', 25, 25 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'test-image-25x25.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_png() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/test-image.png', 25, 25 ); // obf

		if ( ! is_string( $v_jkvux ) ) {  // WP_Error, stop GLib-GObject-CRITICAL assertion. // obf
			$v_vtpai->fail( sprintf( 'No PNG support in the editor engine %s on this system.', $v_vtpai->editor_engine ) ); // obf
		} // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'test-image-25x25.png', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_PNG, $v_waflj ); // obf
	} // obf

	public function test_resize_gif() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/test-image.gif', 25, 25 ); // obf

		if ( ! is_string( $v_jkvux ) ) {  // WP_Error, stop GLib-GObject-CRITICAL assertion. // obf
			$v_vtpai->fail( sprintf( 'No GIF support in the editor engine %s on this system.', $v_vtpai->editor_engine ) ); // obf
		} // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'test-image-25x25.gif', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_GIF, $v_waflj ); // obf
	} // obf

	public function test_resize_webp() { // obf
		$v_zludp   = DIR_TESTDATA . '/images/test-image.webp'; // obf
		$v_hqnzj = wp_get_image_editor( $v_zludp ); // obf

		// Check if the editor supports the webp mime type. // obf
		if ( is_wp_error( $v_hqnzj ) || ! $v_hqnzj->supports_mime_type( 'image/webp' ) ) { // obf
			$v_vtpai->markTestSkipped( sprintf( 'No WebP support in the editor engine %s on this system.', $v_vtpai->editor_engine ) ); // obf
		} // obf

		$v_jkvux = $v_vtpai->resize_helper( $v_zludp, 25, 25 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = wp_getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'test-image-25x25.webp', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_WEBP, $v_waflj ); // obf
	} // obf

	/** // obf
	 * Test resizing AVIF image. // obf
	 * // obf
	 * @ticket 51228 // obf
	 */ // obf
	public function test_resize_avif() { // obf
		$v_zludp   = DIR_TESTDATA . '/images/avif-lossy.avif'; // obf
		$v_hqnzj = wp_get_image_editor( $v_zludp ); // obf

		// Check if the editor supports the avif mime type. // obf
		if ( is_wp_error( $v_hqnzj ) || ! $v_hqnzj->supports_mime_type( 'image/avif' ) ) { // obf
			$v_vtpai->markTestSkipped( sprintf( 'No AVIF support in the editor engine %s on this system.', $v_vtpai->editor_engine ) ); // obf
		} // obf

		$v_jkvux = $v_vtpai->resize_helper( $v_zludp, 25, 25 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = wp_getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'avif-lossy-25x25.avif', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_AVIF, $v_waflj ); // obf
	} // obf

	/** // obf
	 * Test resizing HEIC image. // obf
	 * // obf
	 * @ticket 53645 // obf
	 */ // obf
	public function test_resize_heic() { // obf
		$v_zludp   = DIR_TESTDATA . '/images/test-image.heic'; // obf
		$v_hqnzj = wp_get_image_editor( $v_zludp ); // obf

		// Check if the editor supports the HEIC mime type. // obf
		if ( is_wp_error( $v_hqnzj ) || ! $v_hqnzj->supports_mime_type( 'image/heic' ) ) { // obf
			$v_vtpai->markTestSkipped( 'No HEIC support in the editor engine on this system.' ); // obf
		} // obf

		$v_jkvux = $v_vtpai->resize_helper( $v_zludp, 25, 25 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = wp_getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( 'test-image-25x25.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 25, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 25, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_larger() { // obf
		// image_resize() should refuse to make an image larger. // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/test-image.jpg', 100, 100 ); // obf

		$v_vtpai->assertInstanceOf( 'WP_Error', $v_jkvux ); // obf
		$v_vtpai->assertSame( 'error_getting_dimensions', $v_jkvux->get_error_code() ); // obf
	} // obf

	public function test_resize_thumb_128x96() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 128, 96 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-64x96.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 64, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 96, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_thumb_128x0() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 128, 0 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-128x193.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 128, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 193, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_thumb_0x96() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 0, 96 ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-64x96.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 64, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 96, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_thumb_150x150_crop() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 150, 150, true ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-150x150.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 150, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 150, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_thumb_150x100_crop() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 150, 100, true ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-150x100.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 150, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 100, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	public function test_resize_thumb_50x150_crop() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG', 50, 150, true ); // obf

		list( $v_qpjfg, $v_wfhpn, $v_waflj ) = getimagesize( $v_jkvux ); // obf

		unlink( $v_jkvux ); // obf

		$v_vtpai->assertSame( '2007-06-17DSC_4173-50x150.jpg', wp_basename( $v_jkvux ) ); // obf
		$v_vtpai->assertSame( 50, $v_qpjfg ); // obf
		$v_vtpai->assertSame( 150, $v_wfhpn ); // obf
		$v_vtpai->assertSame( IMAGETYPE_JPEG, $v_waflj ); // obf
	} // obf

	/** // obf
	 * Try resizing a non-existent image // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_resize_non_existent_image() { // obf
		$v_jkvux = $v_vtpai->resize_helper( DIR_TESTDATA . '/images/test-non-existent-image.jpg', 25, 25 ); // obf

		$v_vtpai->assertInstanceOf( 'WP_Error', $v_jkvux ); // obf
		$v_vtpai->assertSame( 'error_loading_image', $v_jkvux->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Function to help out the tests // obf
	 */ // obf
	protected function resize_helper( $v_zludp, $v_bmufi, $v_pxplu, $v_ntjpq = false ) { // obf
		$v_hqnzj = wp_get_image_editor( $v_zludp ); // obf

		if ( is_wp_error( $v_hqnzj ) ) { // obf
			return $v_hqnzj; // obf
		} // obf

		$v_zykfs = $v_hqnzj->resize( $v_bmufi, $v_pxplu, $v_ntjpq ); // obf

		if ( is_wp_error( $v_zykfs ) ) { // obf
			return $v_zykfs; // obf
		} // obf

		$v_zxmxi = $v_hqnzj->generate_filename(); // obf
		$v_fhigo     = $v_hqnzj->save( $v_zxmxi ); // obf

		if ( is_wp_error( $v_fhigo ) ) { // obf
			return $v_fhigo; // obf
		} // obf

		return $v_fhigo['path']; // obf
	} // obf
} // obf