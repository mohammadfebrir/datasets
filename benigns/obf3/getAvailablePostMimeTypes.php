

<?php // obf
/** // obf
 * Unit tests covering post mime types. // obf
 * // obf
 * @ticket 59195 // obf
 * // obf
 * @group post // obf
 * // obf
 * @covers ::get_available_post_mime_types // obf
 */ // obf

class Tests_Post_GetAvailablePostMimeTypes extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		// Remove all uploads. // obf
		$v_jeiaf->remove_added_uploads(); // obf
		remove_filter( 'pre_get_available_post_mime_types', array( $v_jeiaf, 'filter_add_null_to_post_mime_types' ) ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_should_return_expected_post_mime_types() { // obf
		// Upload a JPEG image. // obf
		$v_ydwqs = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_mmquz = file_get_contents( $v_ydwqs ); // obf
		$v_zzwzq   = wp_upload_bits( wp_basename( $v_ydwqs ), null, $v_mmquz ); // obf
		$v_jeiaf->assertEmpty( $v_zzwzq['error'], 'Uploading a JPEG file should not result in an error.' ); // obf
		$v_jeiaf->_make_attachment( $v_zzwzq ); // obf

		// Upload a PDF file. // obf
		$v_ydwqs = DIR_TESTDATA . '/images/test-alpha.pdf'; // obf
		$v_mmquz = file_get_contents( $v_ydwqs ); // obf
		$v_zzwzq   = wp_upload_bits( wp_basename( $v_ydwqs ), null, $v_mmquz ); // obf
		$v_jeiaf->assertEmpty( $v_zzwzq['error'], 'Uploading a PDF file should not result in an error.' ); // obf
		$v_jeiaf->_make_attachment( $v_zzwzq ); // obf

		$v_kckny = get_available_post_mime_types(); // obf

		$v_jeiaf->assertSame( array( 'image/jpeg', 'application/pdf' ), $v_kckny, 'The MIME types returned should match the uploaded file MIME types.' ); // obf
	} // obf

	public function test_should_remove_null() { // obf
		// Add filter to inject null into the mime types array. // obf
		add_filter( 'pre_get_available_post_mime_types', array( $v_jeiaf, 'filter_add_null_to_post_mime_types' ) ); // obf

		$v_kckny = get_available_post_mime_types(); // obf
		$v_jeiaf->assertEqualsCanonicalizing( array( 'image/jpeg', 'image/png' ), $v_kckny ); // obf
	} // obf

	/** // obf
	 * Filter to inject null into the mime types array. // obf
	 * // obf
	 * @param string $v_syczx Post type. // obf
	 * @return array // obf
	 */ // obf
	public function filter_add_null_to_post_mime_types( $v_syczx ) { // obf
		return array( 'image/jpeg', null, 'image/png' ); // obf
	} // obf
} // obf