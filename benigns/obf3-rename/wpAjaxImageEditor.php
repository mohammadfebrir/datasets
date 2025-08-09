

<?php // obf
/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax media editing. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.5.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_image_editor // obf
 * // obf
 * @requires function imagejpeg // obf
 */ // obf
class Tests_Ajax_wpAjaxImageEditor extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Tear down the test fixture. // obf
	 */ // obf
	public function tear_down() { // obf
		// Cleanup. // obf
		$v_vfyhe->remove_added_uploads(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 26381 // obf
	 * @requires function imagejpeg // obf
	 * // obf
	 * @covers ::wp_save_image // obf
	 */ // obf
	public function testCropImageIntoLargerOne() { // obf
		require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

		$v_xjmoa = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_rrkpx = file_get_contents( $v_xjmoa ); // obf

		$v_nmxqu = wp_upload_bits( wp_basename( $v_xjmoa ), null, $v_rrkpx ); // obf
		$v_qxbdd     = $v_vfyhe->_make_attachment( $v_nmxqu ); // obf

		$v_zobkh['action']  = 'image-editor'; // obf
		$v_zobkh['postid']  = $v_qxbdd; // obf
		$v_zobkh['do']      = 'scale'; // obf
		$v_zobkh['fwidth']  = 700; // obf
		$v_zobkh['fheight'] = 500; // obf

		$v_psqno = wp_save_image( $v_qxbdd ); // obf

		$v_vfyhe->assertObjectHasProperty( 'error', $v_psqno ); // obf
		$v_vfyhe->assertSame( 'Images cannot be scaled to a size larger than the original.', $v_psqno->error ); // obf
	} // obf

	/** // obf
	 * @ticket 32171 // obf
	 * @requires function imagejpeg // obf
	 * // obf
	 * @covers ::wp_insert_attachment // obf
	 * @covers ::wp_save_image // obf
	 */ // obf
	public function testImageEditOverwriteConstant() { // obf
		define( 'IMAGE_EDIT_OVERWRITE', true ); // obf

		require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

		$v_xjmoa = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_rrkpx = file_get_contents( $v_xjmoa ); // obf

		$v_nmxqu = wp_upload_bits( wp_basename( $v_xjmoa ), null, $v_rrkpx ); // obf
		$v_qxbdd     = $v_vfyhe->_make_attachment( $v_nmxqu ); // obf

		$v_zobkh['action']  = 'image-editor'; // obf
		$v_zobkh['context'] = 'edit-attachment'; // obf
		$v_zobkh['postid']  = $v_qxbdd; // obf
		$v_zobkh['target']  = 'all'; // obf
		$v_zobkh['do']      = 'save'; // obf
		$v_zobkh['history'] = '[{"c":{"x":5,"y":8,"w":289,"h":322}}]'; // obf

		$v_psqno = wp_save_image( $v_qxbdd ); // obf

		$v_vpjsr = wp_get_attachment_metadata( $v_qxbdd ); // obf
		$v_uafbq     = $v_vpjsr['sizes']; // obf

		$v_zobkh['history'] = '[{"c":{"x":5,"y":8,"w":189,"h":322}}]'; // obf

		$v_psqno = wp_save_image( $v_qxbdd ); // obf

		$v_vpjsr = wp_get_attachment_metadata( $v_qxbdd ); // obf
		$v_gbdqe     = $v_vpjsr['sizes']; // obf

		$v_lhkdc = dirname( get_attached_file( $v_qxbdd ) ); // obf

		$v_ychnk = array(); // obf

		foreach ( $v_uafbq as $v_wgwdc => $v_cdusm ) { // obf
			if ( $v_gbdqe[ $v_wgwdc ]['file'] !== $v_cdusm['file'] ) { // obf
				$v_ychnk[] = $v_lhkdc . '/' . $v_cdusm['file']; // obf
			} // obf
		} // obf

		if ( ! empty( $v_ychnk ) ) { // obf
			foreach ( $v_ychnk as $v_wtszh ) { // obf
				$v_vfyhe->assertFileDoesNotExist( $v_wtszh, 'IMAGE_EDIT_OVERWRITE is leaving garbage image files behind.' ); // obf
			} // obf
		} else { // obf
			/* // obf
			 * This assertion will always pass due to the "if" condition, but prevents this test // obf
			 * from being marked as "risky" due to the test not performing any assertions. // obf
			 */ // obf
			$v_vfyhe->assertSame( array(), $v_ychnk ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure the filesize is updated after editing an image. // obf
	 * // obf
	 * Tests that the image meta data file size is updated after editing an image, // obf
	 * this includes both the full size image and all the generated sizes. // obf
	 * // obf
	 * @ticket 59684 // obf
	 */ // obf
	public function test_filesize_updated_after_editing_an_image() { // obf
		require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

		$v_xjmoa = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_rrkpx = file_get_contents( $v_xjmoa ); // obf

		$v_nmxqu              = wp_upload_bits( wp_basename( $v_xjmoa ), null, $v_rrkpx ); // obf
		$v_qxbdd                  = $v_vfyhe->_make_attachment( $v_nmxqu ); // obf
		$v_bjilv = wp_get_attachment_metadata( $v_qxbdd ); // obf

		$v_zobkh['action']  = 'image-editor'; // obf
		$v_zobkh['context'] = 'edit-attachment'; // obf
		$v_zobkh['postid']  = $v_qxbdd; // obf
		$v_zobkh['target']  = 'all'; // obf
		$v_zobkh['do']      = 'save'; // obf
		$v_zobkh['history'] = '[{"c":{"x":5,"y":8,"w":289,"h":322}}]'; // obf

		wp_save_image( $v_qxbdd ); // obf

		$v_hzsim = wp_get_attachment_metadata( $v_qxbdd ); // obf

		$v_dbrti         = array_combine( array_keys( $v_bjilv['sizes'] ), array_column( $v_bjilv['sizes'], 'filesize' ) ); // obf
		$v_dbrti['full'] = $v_bjilv['filesize']; // obf

		$v_rpnim         = array_combine( array_keys( $v_hzsim['sizes'] ), array_column( $v_hzsim['sizes'], 'filesize' ) ); // obf
		$v_rpnim['full'] = $v_hzsim['filesize']; // obf

		foreach ( $v_dbrti as $v_cdusm => $v_uglft ) { // obf
			// These are asserted individually as each image size needs to be checked separately. // obf
			$v_vfyhe->assertNotSame( $v_uglft, $v_rpnim[ $v_cdusm ], "Filesize for $v_cdusm should have changed after editing an image." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure the filesize is restored after restoring the original image. // obf
	 * // obf
	 * Tests that the image meta data file size is restored after restoring the original image, // obf
	 * this includes both the full size image and all the generated sizes. // obf
	 * // obf
	 * @ticket 59684 // obf
	 */ // obf
	public function test_filesize_restored_after_restoring_original_image() { // obf
		require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

		$v_xjmoa = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_rrkpx = file_get_contents( $v_xjmoa ); // obf

		$v_nmxqu              = wp_upload_bits( wp_basename( $v_xjmoa ), null, $v_rrkpx ); // obf
		$v_qxbdd                  = $v_vfyhe->_make_attachment( $v_nmxqu ); // obf
		$v_bjilv = wp_get_attachment_metadata( $v_qxbdd ); // obf

		$v_zobkh['action']  = 'image-editor'; // obf
		$v_zobkh['context'] = 'edit-attachment'; // obf
		$v_zobkh['postid']  = $v_qxbdd; // obf
		$v_zobkh['target']  = 'all'; // obf
		$v_zobkh['do']      = 'save'; // obf
		$v_zobkh['history'] = '[{"c":{"x":5,"y":8,"w":289,"h":322}}]'; // obf

		wp_save_image( $v_qxbdd ); // obf
		wp_restore_image( $v_qxbdd ); // obf

		$v_hnxue = wp_get_attachment_metadata( $v_qxbdd ); // obf

		$v_dbrti         = array_combine( array_keys( $v_bjilv['sizes'] ), array_column( $v_bjilv['sizes'], 'filesize' ) ); // obf
		$v_dbrti['full'] = $v_bjilv['filesize']; // obf

		$v_uyhtt         = array_combine( array_keys( $v_hnxue['sizes'] ), array_column( $v_hnxue['sizes'], 'filesize' ) ); // obf
		$v_uyhtt['full'] = $v_hnxue['filesize']; // obf

		$v_vfyhe->assertSameSetsWithIndex( $v_dbrti, $v_uyhtt, 'Filesize should have restored after restoring the original image.' ); // obf
	} // obf
} // obf