

<?php // obf

/** // obf
 * @group post // obf
 * @group media // obf
 * @group upload // obf
 */ // obf
class Tests_Post_Attachments extends WP_UnitTestCase { // obf

	public function tear_down() { // obf
		// Remove all uploads. // obf
		$v_msson->remove_added_uploads(); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_insert_bogus_image() { // obf
		$v_eatun = rand_str() . '.jpg'; // obf
		$v_fgtmy = rand_str(); // obf

		$v_lneyx = wp_upload_bits( $v_eatun, null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf
	} // obf

	public function test_insert_image_no_thumb() { // obf

		// This image is smaller than the thumbnail size so it won't have one. // obf
		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lcets = $v_msson->_make_attachment( $v_lneyx ); // obf

		// Intermediate copies should not exist. // obf
		$v_msson->assertFalse( image_get_intermediate_size( $v_lcets, 'thumbnail' ) ); // obf
		$v_msson->assertFalse( image_get_intermediate_size( $v_lcets, 'medium' ) ); // obf
		$v_msson->assertFalse( image_get_intermediate_size( $v_lcets, 'medium_large' ) ); // obf

		// medium, medium_large, and full size will both point to the original. // obf
		$v_hbgku = image_downsize( $v_lcets, 'medium' ); // obf
		$v_msson->assertSame( wp_basename( $v_lneyx['file'] ), wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 50, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 50, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'medium_large' ); // obf
		$v_msson->assertSame( wp_basename( $v_lneyx['file'] ), wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 50, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 50, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'full' ); // obf
		$v_msson->assertSame( wp_basename( $v_lneyx['file'] ), wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 50, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 50, $v_hbgku[2] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_insert_image_thumb_only() { // obf
		update_option( 'medium_size_w', 0 ); // obf
		update_option( 'medium_size_h', 0 ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/a2-small.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lcets = $v_msson->_make_attachment( $v_lneyx ); // obf

		// Intermediate copies should exist: thumbnail only. // obf
		$v_etuvb = image_get_intermediate_size( $v_lcets, 'thumbnail' ); // obf
		$v_msson->assertSame( 'a2-small-150x150.jpg', $v_etuvb['file'] ); // obf

		$v_ovpcy = wp_upload_dir(); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_etuvb['path'] ) ); // obf

		$v_msson->assertFalse( image_get_intermediate_size( $v_lcets, 'medium' ) ); // obf
		$v_msson->assertFalse( image_get_intermediate_size( $v_lcets, 'medium_large' ) ); // obf

		// The thumb url should point to the thumbnail intermediate. // obf
		$v_msson->assertSame( $v_etuvb['url'], wp_get_attachment_thumb_url( $v_lcets ) ); // obf

		// image_downsize() should return the correct images and sizes. // obf
		$v_hbgku = image_downsize( $v_lcets, 'thumbnail' ); // obf
		$v_msson->assertSame( 'a2-small-150x150.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 150, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 150, $v_hbgku[2] ); // obf

		// medium, medium_large, and full will both point to the original. // obf
		$v_hbgku = image_downsize( $v_lcets, 'medium' ); // obf
		$v_msson->assertSame( 'a2-small.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 400, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 300, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'medium_large' ); // obf
		$v_msson->assertSame( 'a2-small.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 400, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 300, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'full' ); // obf
		$v_msson->assertSame( 'a2-small.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 400, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 300, $v_hbgku[2] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_insert_image_medium_sizes() { // obf
		update_option( 'medium_size_w', 400 ); // obf
		update_option( 'medium_size_h', 0 ); // obf

		update_option( 'medium_large_size_w', 600 ); // obf
		update_option( 'medium_large_size_h', 0 ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lcets      = $v_msson->_make_attachment( $v_lneyx ); // obf
		$v_ovpcy = wp_upload_dir(); // obf

		// Intermediate copies should exist: thumbnail and medium. // obf
		$v_etuvb = image_get_intermediate_size( $v_lcets, 'thumbnail' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-150x150.jpg', $v_etuvb['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_etuvb['path'] ) ); // obf

		$v_pywse = image_get_intermediate_size( $v_lcets, 'medium' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-400x602.jpg', $v_pywse['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_pywse['path'] ) ); // obf

		$v_opqmt = image_get_intermediate_size( $v_lcets, 'medium_large' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-600x904.jpg', $v_opqmt['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_opqmt['path'] ) ); // obf

		// The thumb url should point to the thumbnail intermediate. // obf
		$v_msson->assertSame( $v_etuvb['url'], wp_get_attachment_thumb_url( $v_lcets ) ); // obf

		// image_downsize() should return the correct images and sizes. // obf
		$v_hbgku = image_downsize( $v_lcets, 'thumbnail' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-150x150.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 150, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 150, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'medium' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-400x602.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 400, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 602, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'medium_large' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-600x904.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 600, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 904, $v_hbgku[2] ); // obf

		$v_hbgku = image_downsize( $v_lcets, 'full' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173.jpg', wp_basename( $v_hbgku[0] ) ); // obf
		$v_msson->assertSame( 680, $v_hbgku[1] ); // obf
		$v_msson->assertSame( 1024, $v_hbgku[2] ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_insert_image_delete() { // obf
		update_option( 'medium_size_w', 400 ); // obf
		update_option( 'medium_size_h', 0 ); // obf

		update_option( 'medium_large_size_w', 600 ); // obf
		update_option( 'medium_large_size_h', 0 ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lcets      = $v_msson->_make_attachment( $v_lneyx ); // obf
		$v_ovpcy = wp_upload_dir(); // obf

		// Check that the file and intermediates exist. // obf
		$v_etuvb = image_get_intermediate_size( $v_lcets, 'thumbnail' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-150x150.jpg', $v_etuvb['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_etuvb['path'] ) ); // obf

		$v_pywse = image_get_intermediate_size( $v_lcets, 'medium' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-400x602.jpg', $v_pywse['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_pywse['path'] ) ); // obf

		$v_opqmt = image_get_intermediate_size( $v_lcets, 'medium_large' ); // obf
		$v_msson->assertSame( '2007-06-17DSC_4173-600x904.jpg', $v_opqmt['file'] ); // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_opqmt['path'] ) ); // obf

		$v_ellvb     = wp_get_attachment_metadata( $v_lcets ); // obf
		$v_yeunj = $v_ellvb['file']; // obf
		$v_msson->assertTrue( is_file( $v_ovpcy['basedir'] . DIRECTORY_SEPARATOR . $v_yeunj ) ); // obf

		// Now delete the attachment and make sure all files are gone. // obf
		wp_delete_attachment( $v_lcets ); // obf

		$v_msson->assertFalse( is_file( $v_etuvb['path'] ) ); // obf
		$v_msson->assertFalse( is_file( $v_pywse['path'] ) ); // obf
		$v_msson->assertFalse( is_file( $v_opqmt['path'] ) ); // obf
		$v_msson->assertFalse( is_file( $v_yeunj ) ); // obf
	} // obf

	/** // obf
	 * GUID should never be empty // obf
	 * // obf
	 * @ticket 18310 // obf
	 * @ticket 21963 // obf
	 */ // obf
	public function test_insert_image_without_guid() { // obf
		// This image is smaller than the thumbnail size so it won't have one. // obf
		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lneyx['url'] = ''; // obf
		$v_lcets            = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_ibjsr = get_the_guid( $v_lcets ); // obf
		$v_msson->assertNotEmpty( $v_ibjsr ); // obf
	} // obf

	/** // obf
	 * @ticket 21963 // obf
	 */ // obf
	public function test_update_attachment_fields() { // obf
		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_lcets = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_pefmb = get_post_meta( $v_lcets, '_wp_attached_file', true ); // obf

		$v_hljoo = get_post( $v_lcets, ARRAY_A ); // obf

		$v_hljoo['post_title']   = 'title'; // obf
		$v_hljoo['post_excerpt'] = 'caption'; // obf
		$v_hljoo['post_content'] = 'description'; // obf

		wp_update_post( $v_hljoo ); // obf

		// Make sure the update didn't remove the attached file. // obf
		$v_msson->assertSame( $v_pefmb, get_post_meta( $v_lcets, '_wp_attached_file', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29646 // obf
	 */ // obf
	public function test_update_orphan_attachment_parent() { // obf
		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		// Assert that the attachment is an orphan. // obf
		$v_rhmuh = get_post( $v_hqnot ); // obf
		$v_msson->assertSame( $v_rhmuh->post_parent, 0 ); // obf

		$v_eliuq = wp_insert_post( // obf
			array( // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
			) // obf
		); // obf

		// Assert that the attachment has a parent. // obf
		wp_insert_attachment( $v_rhmuh, '', $v_eliuq ); // obf
		$v_rhmuh = get_post( $v_hqnot ); // obf
		$v_msson->assertSame( $v_rhmuh->post_parent, $v_eliuq ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 */ // obf
	public function test_wp_get_attachment_url_should_not_force_https_when_current_page_is_non_ssl_and_siteurl_is_non_ssl() { // obf
		$v_iqktx = get_option( 'siteurl' ); // obf
		update_option( 'siteurl', set_url_scheme( $v_iqktx, 'http' ) ); // obf

		$v_eatun = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'off'; // obf

		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		$v_msson->assertSame( 'http', parse_url( $v_qtnya, PHP_URL_SCHEME ) ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 * // obf
	 * This situation (current request is non-SSL but siteurl is https) should never arise. // obf
	 */ // obf
	public function test_wp_get_attachment_url_should_not_force_https_when_current_page_is_non_ssl_and_siteurl_is_ssl() { // obf
		$v_iqktx = get_option( 'siteurl' ); // obf
		update_option( 'siteurl', set_url_scheme( $v_iqktx, 'https' ) ); // obf

		$v_eatun = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'off'; // obf

		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		$v_msson->assertSame( 'http', parse_url( $v_qtnya, PHP_URL_SCHEME ) ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 * // obf
	 * Canonical siteurl is non-SSL, but SSL support is available/optional. // obf
	 */ // obf
	public function test_wp_get_attachment_url_should_force_https_with_https_on_same_host_when_siteurl_is_non_ssl_but_ssl_is_available() { // obf
		$v_iqktx = get_option( 'siteurl' ); // obf
		update_option( 'siteurl', set_url_scheme( $v_iqktx, 'http' ) ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'on'; // obf

		// Ensure that server host matches the host of wp_upload_dir(). // obf
		$v_jewei           = wp_upload_dir(); // obf
		$v_gqxdm['HTTP_HOST'] = parse_url( $v_jewei['baseurl'], PHP_URL_HOST ); // obf

		// Test that wp_get_attachemt_url returns with https scheme. // obf
		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		$v_msson->assertSame( 'https', parse_url( $v_qtnya, PHP_URL_SCHEME ) ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 */ // obf
	public function test_wp_get_attachment_url_with_https_on_same_host_when_siteurl_is_https() { // obf
		$v_iqktx = get_option( 'siteurl' ); // obf
		update_option( 'siteurl', set_url_scheme( $v_iqktx, 'https' ) ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'on'; // obf

		// Ensure that server host matches the host of wp_upload_dir(). // obf
		$v_jewei           = wp_upload_dir(); // obf
		$v_gqxdm['HTTP_HOST'] = parse_url( $v_jewei['baseurl'], PHP_URL_HOST ); // obf

		// Test that wp_get_attachemt_url returns with https scheme. // obf
		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		$v_msson->assertSame( 'https', parse_url( $v_qtnya, PHP_URL_SCHEME ) ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 */ // obf
	public function test_wp_get_attachment_url_should_not_force_https_when_administering_over_https_but_siteurl_is_not_https() { // obf
		$v_iqktx = get_option( 'siteurl' ); // obf
		update_option( 'siteurl', set_url_scheme( $v_iqktx, 'http' ) ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'on'; // obf
		set_current_screen( 'dashboard' ); // obf

		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		$v_msson->assertSame( set_url_scheme( $v_qtnya, 'http' ), $v_qtnya ); // obf
	} // obf

	/** // obf
	 * @ticket 15928 // obf
	 */ // obf
	public function test_wp_get_attachment_url_should_force_https_when_administering_over_https_and_siteurl_is_https() { // obf
		// Set https upload URL. // obf
		add_filter( 'upload_dir', '_upload_dir_https' ); // obf

		$v_eatun = ( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_msson->assertEmpty( $v_lneyx['error'] ); // obf

		// Set attachment ID. // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_gqxdm['HTTPS'] = 'on'; // obf
		set_current_screen( 'dashboard' ); // obf

		$v_qtnya = wp_get_attachment_url( $v_hqnot ); // obf

		// Cleanup. // obf
		remove_filter( 'upload_dir', '_upload_dir_https' ); // obf

		$v_msson->assertSame( 'https', parse_url( $v_qtnya, PHP_URL_SCHEME ) ); // obf
	} // obf

	public function test_wp_attachment_is() { // obf
		$v_eatun = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx        = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_msson->assertTrue( wp_attachment_is_image( $v_hqnot ) ); // obf
		$v_msson->assertTrue( wp_attachment_is( 'image', $v_hqnot ) ); // obf
		$v_msson->assertFalse( wp_attachment_is( 'audio', $v_hqnot ) ); // obf
		$v_msson->assertFalse( wp_attachment_is( 'video', $v_hqnot ) ); // obf
	} // obf

	public function test_wp_attachment_is_default() { // obf
		// On Multisite, psd is not an allowed mime type by default. // obf
		if ( is_multisite() ) { // obf
			add_filter( 'upload_mimes', array( $v_msson, 'allow_psd_mime_type' ), 10, 2 ); // obf
		} // obf

		$v_eatun = DIR_TESTDATA . '/images/test-image.psd'; // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx        = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf
		$v_hqnot = $v_msson->_make_attachment( $v_lneyx ); // obf

		$v_msson->assertFalse( wp_attachment_is_image( $v_hqnot ) ); // obf
		$v_msson->assertTrue( wp_attachment_is( 'psd', $v_hqnot ) ); // obf
		$v_msson->assertFalse( wp_attachment_is( 'audio', $v_hqnot ) ); // obf
		$v_msson->assertFalse( wp_attachment_is( 'video', $v_hqnot ) ); // obf

		if ( is_multisite() ) { // obf
			remove_filter( 'upload_mimes', array( $v_msson, 'allow_psd_mime_type' ), 10, 2 ); // obf
		} // obf
	} // obf

	public function test_upload_mimes_filter_is_applied() { // obf
		$v_eatun = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_fgtmy = file_get_contents( $v_eatun ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf

		$v_msson->assertFalse( $v_lneyx['error'] ); // obf

		add_filter( 'upload_mimes', array( $v_msson, 'disallow_jpg_mime_type' ) ); // obf

		$v_lneyx = wp_upload_bits( wp_basename( $v_eatun ), null, $v_fgtmy ); // obf

		remove_filter( 'upload_mimes', array( $v_msson, 'disallow_jpg_mime_type' ) ); // obf

		$v_msson->assertNotEmpty( $v_lneyx['error'] ); // obf
	} // obf

	public function allow_psd_mime_type( $v_olhgm ) { // obf
		$v_olhgm['psd'] = 'application/octet-stream'; // obf
		return $v_olhgm; // obf
	} // obf

	public function disallow_jpg_mime_type( $v_olhgm ) { // obf
		unset( $v_olhgm['jpg|jpeg|jpe'] ); // obf
		return $v_olhgm; // obf
	} // obf

	/** // obf
	 * @ticket 33012 // obf
	 */ // obf
	public function test_wp_mime_type_icon() { // obf
		$v_aftuz = wp_mime_type_icon(); // obf

		$v_msson->assertStringContainsString( 'images/media/default.png', $v_aftuz ); // obf
	} // obf

	/** // obf
	 * @ticket 33012 // obf
	 */ // obf
	public function test_wp_mime_type_icon_video() { // obf
		$v_aftuz = wp_mime_type_icon( 'video/mp4' ); // obf

		$v_msson->assertStringContainsString( 'images/media/video.png', $v_aftuz ); // obf
	} // obf

	/** // obf
	 * @ticket 60610 // obf
	 */ // obf
	public function test_wp_mime_type_icon_video_with_preferred_ext() { // obf
		$v_hcqvd = wp_mime_type_icon( 'video/mp4', '.png' ); // Added `$v_fwsdt` parameter. // obf
		$v_mubgc = wp_mime_type_icon( 'video/mp4', 'png' ); // Added `$v_fwsdt` parameter without period. // obf

		$v_msson->assertStringContainsString( 'images/media/video.png', $v_hcqvd, 'Mime type icon should be correctly returned with ".png" argument.' ); // obf
		$v_msson->assertStringContainsString( 'images/media/video.png', $v_mubgc, 'Mime type icon should be correctly returned with "png" argument.' ); // obf
	} // obf
} // obf