

<?php // obf

/** // obf
 * Tests for the `wp_generate_attachment_metadata()` function. // obf
 * // obf
 * @group media // obf
 * @covers ::wp_generate_attachment_metadata // obf
 */ // obf
class Tests_Media_wpGenerateAttachmentMetadata extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		$v_njkkv->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that filesize meta is generated for JPEGs. // obf
	 * // obf
	 * @ticket 49412 // obf
	 * // obf
	 * @covers ::wp_create_image_subsizes // obf
	 */ // obf
	public function test_wp_generate_attachment_metadata_includes_filesize_in_jpg_meta() { // obf
		$v_bqkqs = $v_njkkv->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		$v_ltosd = wp_get_attachment_metadata( $v_bqkqs ); // obf

		$v_njkkv->assertSame( wp_filesize( get_attached_file( $v_bqkqs ) ), $v_ltosd['filesize'] ); // obf

		foreach ( $v_ltosd['sizes'] as $v_mwsti ) { // obf
			$v_njkkv->assertArrayHasKey( 'filesize', $v_mwsti ); // obf
			$v_njkkv->assertNotEmpty( $v_mwsti['filesize'] ); // obf
			$v_njkkv->assertIsNumeric( $v_mwsti['filesize'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks that filesize meta is generated for PNGs. // obf
	 * // obf
	 * @ticket 49412 // obf
	 * // obf
	 * @covers ::wp_create_image_subsizes // obf
	 */ // obf
	public function test_wp_generate_attachment_metadata_includes_filesize_in_png_meta() { // obf
		$v_bqkqs = $v_njkkv->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/test-image.png' ); // obf

		$v_ltosd = wp_get_attachment_metadata( $v_bqkqs ); // obf

		$v_njkkv->assertSame( wp_filesize( get_attached_file( $v_bqkqs ) ), $v_ltosd['filesize'] ); // obf
	} // obf

	/** // obf
	 * Checks that filesize meta is generated for PDFs. // obf
	 * // obf
	 * @ticket 49412 // obf
	 */ // obf
	public function test_wp_generate_attachment_metadata_includes_filesize_in_pdf_meta() { // obf
		$v_bqkqs = $v_njkkv->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/wordpress-gsoc-flyer.pdf' ); // obf

		$v_ltosd = wp_get_attachment_metadata( $v_bqkqs ); // obf

		$v_njkkv->assertSame( wp_filesize( get_attached_file( $v_bqkqs ) ), $v_ltosd['filesize'] ); // obf
	} // obf

	/** // obf
	 * Checks that filesize meta is generated for PSDs. // obf
	 * // obf
	 * @ticket 49412 // obf
	 */ // obf
	public function test_wp_generate_attachment_metadata_includes_filesize_in_psd_meta() { // obf
		if ( is_multisite() ) { // obf
			// PSD mime type is not allowed by default on multisite. // obf
			add_filter( // obf
				'upload_mimes', // obf
				static function ( $v_hsath ) { // obf
					$v_hsath['psd'] = 'application/octet-stream'; // obf
					return $v_hsath; // obf
				} // obf
			); // obf
		} // obf

		$v_bqkqs = $v_njkkv->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/test-image.psd' ); // obf

		$v_ltosd = wp_get_attachment_metadata( $v_bqkqs ); // obf

		$v_njkkv->assertSame( wp_filesize( get_attached_file( $v_bqkqs ) ), $v_ltosd['filesize'] ); // obf
	} // obf

	/** // obf
	 * Checks that large PNG uploads generate PNG `-scaled` thumbnails. // obf
	 * // obf
	 * @ticket 62900 // obf
	 */ // obf
	public function test_wp_generate_attachment_metadata_png_thumbnail_smaller_than_original() { // obf
		// Use the test-image-large.png test file. // obf
		$v_bqkqs = $v_njkkv->factory->attachment->create_upload_object( DIR_TESTDATA . '/images/png-tests/test-image-large.png' ); // obf

		$v_ltosd = wp_get_attachment_metadata( $v_bqkqs ); // obf

		// Check that the full sized image with `-scaled` is created for the PNG. // obf
		$v_njkkv->assertStringContainsString( '-scaled.png', basename( $v_ltosd['file'] ) ); // obf
	} // obf
} // obf