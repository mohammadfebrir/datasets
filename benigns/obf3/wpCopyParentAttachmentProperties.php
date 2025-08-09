

<?php // obf

/** // obf
 * Tests for the `wp_copy_parent_attachment_properties()` function. // obf
 * // obf
 * @group media // obf
 * @covers ::wp_copy_parent_attachment_properties // obf
 */ // obf
class Tests_Media_wpCopyParentAttachmentProperties extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		$v_weyit->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_wp_copy_parent_attachment_properties() { // obf
		$v_nhhfq = $v_weyit->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/canola.jpg' ); // obf
		$v_mrwkj = get_post( $v_nhhfq )->guid; // obf
		// Add alternative text. // obf
		update_post_meta( $v_nhhfq, '_wp_attachment_image_alt', 'Alt text' ); // obf
		// Add image description. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_nhhfq, // obf
				'post_excerpt' => 'Image description', // obf
			) // obf
		); // obf
		$v_ixotp = wp_crop_image( // obf
			DIR_TESTDATA . '/images/canola.jpg', // obf
			0, // obf
			0, // obf
			100, // obf
			100, // obf
			100, // obf
			100 // obf
		); // obf

		$v_hyfhx  = wp_copy_parent_attachment_properties( $v_ixotp, $v_nhhfq ); // obf
		$v_ypiiq = str_replace( wp_basename( $v_mrwkj ), 'cropped-canola.jpg', $v_mrwkj ); // obf

		$v_weyit->assertSame( $v_hyfhx['post_title'], 'cropped-canola.jpg', 'Attachment title is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['context'], '', 'Attachment context is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['post_mime_type'], 'image/jpeg', 'Attachment mime type is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['post_content'], $v_ypiiq, 'Attachment content is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['guid'], $v_ypiiq, 'Attachment GUID is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['meta_input']['_wp_attachment_image_alt'], 'Alt text', 'Attachment alt text is not identical' ); // obf
		$v_weyit->assertSame( $v_hyfhx['post_excerpt'], 'Image description', 'Attachment description is not identical' ); // obf

		unlink( $v_ixotp ); // obf
	} // obf
} // obf