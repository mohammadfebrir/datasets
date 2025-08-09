

<?php // obf
/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 */ // obf
class Tests_Image_Intermediate_Size extends WP_UnitTestCase { // obf
	public function tear_down() { // obf
		$v_mfbtt->remove_added_uploads(); // obf

		remove_image_size( 'test-size' ); // obf
		remove_image_size( 'false-height' ); // obf
		remove_image_size( 'false-width' ); // obf
		remove_image_size( 'off-by-one' ); // obf
		parent::tear_down(); // obf
	} // obf

	public function _make_attachment( $v_dwuek, $v_szmta = 0 ) { // obf
		$v_bpbwr = file_get_contents( $v_dwuek ); // obf
		$v_qdtib   = wp_upload_bits( wp_basename( $v_dwuek ), null, $v_bpbwr ); // obf

		return parent::_make_attachment( $v_qdtib, $v_szmta ); // obf
	} // obf

	public function test_make_intermediate_size_no_size() { // obf
		$v_ksnjl = image_make_intermediate_size( DIR_TESTDATA . '/images/a2-small.jpg', 0, 0, false ); // obf

		$v_mfbtt->assertFalse( $v_ksnjl ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_make_intermediate_size_width() { // obf
		$v_ksnjl = image_make_intermediate_size( DIR_TESTDATA . '/images/a2-small.jpg', 100, 0, false ); // obf

		$v_mfbtt->assertIsArray( $v_ksnjl ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_make_intermediate_size_height() { // obf
		$v_ksnjl = image_make_intermediate_size( DIR_TESTDATA . '/images/a2-small.jpg', 0, 75, false ); // obf

		$v_mfbtt->assertIsArray( $v_ksnjl ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_make_intermediate_size_successful() { // obf
		$v_ksnjl = image_make_intermediate_size( DIR_TESTDATA . '/images/a2-small.jpg', 100, 75, true ); // obf

		unlink( DIR_TESTDATA . '/images/a2-small-100x75.jpg' ); // obf

		$v_mfbtt->assertIsArray( $v_ksnjl ); // obf
		$v_mfbtt->assertSame( 100, $v_ksnjl['width'] ); // obf
		$v_mfbtt->assertSame( 75, $v_ksnjl['height'] ); // obf
		$v_mfbtt->assertSame( 'image/jpeg', $v_ksnjl['mime-type'] ); // obf

		$v_mfbtt->assertArrayNotHasKey( 'path', $v_ksnjl ); // obf
	} // obf

	/** // obf
	 * @ticket 52867 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_image_editor_output_format_filter() { // obf
		add_filter( // obf
			'image_editor_output_format', // obf
			static function () { // obf
				return array( 'image/jpeg' => 'image/webp' ); // obf
			} // obf
		); // obf

		$v_dwuek   = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_ksnjl  = image_make_intermediate_size( $v_dwuek, 100, 75, true ); // obf
		$v_mkvfl = wp_get_image_editor( $v_dwuek ); // obf

		unlink( DIR_TESTDATA . '/images/' . $v_ksnjl['file'] ); // obf
		remove_all_filters( 'image_editor_output_format' ); // obf

		if ( is_wp_error( $v_mkvfl ) || ! $v_mkvfl->supports_mime_type( 'image/webp' ) ) { // obf
			$v_mfbtt->assertSame( 'image/jpeg', $v_ksnjl['mime-type'] ); // obf
		} else { // obf
			$v_mfbtt->assertSame( 'image/webp', $v_ksnjl['mime-type'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_name() { // obf
		add_image_size( 'test-size', 330, 220, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		// Look for a size by name. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, 'test-size' ); // obf

		// Cleanup. // obf
		remove_image_size( 'test-size' ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertStringContainsString( '330x220', $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_array_exact() { // obf
		// Only one dimension match shouldn't return false positive (see: #17626). // obf
		add_image_size( 'test-size', 330, 220, true ); // obf
		add_image_size( 'false-height', 330, 400, true ); // obf
		add_image_size( 'false-width', 600, 220, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		// Look for a size by array that exists. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 330, 220 ) ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertStringContainsString( '330x220', $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_array_nearest() { // obf
		// If an exact size is not found, it should be returned. // obf
		// If not, find nearest size that is larger (see: #17626). // obf
		add_image_size( 'test-size', 450, 300, true ); // obf
		add_image_size( 'false-height', 330, 100, true ); // obf
		add_image_size( 'false-width', 150, 220, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		// Look for a size by array that doesn't exist. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 330, 220 ) ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertStringContainsString( '450x300', $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_array_nearest_false() { // obf
		// If an exact size is not found, it should be returned. // obf
		// If not, find nearest size that is larger, otherwise return false (see: #17626). // obf
		add_image_size( 'false-height', 330, 100, true ); // obf
		add_image_size( 'false-width', 150, 220, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		// Look for a size by array that doesn't exist. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 330, 220 ) ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertFalse( $v_ksnjl ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_array_zero_height() { // obf
		// Use this width. // obf
		$v_wgdsy = 300; // obf

		// Only one dimension match shouldn't return false positive (see: #17626). // obf
		add_image_size( 'test-size', $v_wgdsy, 0, false ); // obf
		add_image_size( 'false-height', $v_wgdsy, 100, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		$v_kzraw = wp_get_attachment_metadata( $v_quktv ); // obf
		$v_isspn  = $v_wgdsy; // obf
		$v_tpady  = round( ( $v_isspn / $v_kzraw['width'] ) * $v_kzraw['height'] ); // obf

		// Look for a size by array that exists. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( $v_wgdsy, 0 ) ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertStringContainsString( $v_isspn . 'x' . $v_tpady, $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @ticket 34087 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_by_array_zero_width() { // obf
		// 202 is the smallest height that will trigger a miss for 'false-height'. // obf
		$v_fhnpn = 202; // obf

		// Only one dimension match shouldn't return false positive (see: #17626). // obf
		add_image_size( 'test-size', 0, $v_fhnpn, false ); // obf
		add_image_size( 'false-height', 300, $v_fhnpn, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		$v_kzraw = wp_get_attachment_metadata( $v_quktv ); // obf
		$v_tpady  = $v_fhnpn; // obf
		$v_isspn  = round( ( $v_tpady / $v_kzraw['height'] ) * $v_kzraw['width'] ); // obf

		// Look for a size by array that exists. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 0, $v_fhnpn ) ); // obf

		// Test for the expected string because the array will by definition // obf
		// return with the correct height and width attributes. // obf
		$v_mfbtt->assertStringContainsString( $v_isspn . 'x' . $v_tpady, $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17626 // obf
	 * @ticket 34087 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_sizes_should_match_size_with_off_by_one_aspect_ratio() { // obf
		// Original is 600x400. 300x201 is close enough to match. // obf
		$v_wgdsy  = 300; // obf
		$v_fhnpn = 201; // obf
		add_image_size( 'off-by-one', $v_wgdsy, $v_fhnpn, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		$v_kzraw = wp_get_attachment_metadata( $v_quktv ); // obf
		$v_tpady  = $v_fhnpn; // obf
		$v_isspn  = round( ( $v_tpady / $v_kzraw['height'] ) * $v_kzraw['width'] ); // obf

		// Look for a size by array that exists. // obf
		// Note: Staying larger than 300px to miss default medium crop. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 0, $v_fhnpn ) ); // obf

		$v_mfbtt->assertStringContainsString( $v_wgdsy . 'x' . $v_fhnpn, $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 34384 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_size_with_small_size_array() { // obf
		// Add a hard cropped size that matches the aspect ratio we're going to test. // obf
		add_image_size( 'test-size', 200, 100, true ); // obf

		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		// Request a size by array that doesn't exist and is smaller than the 'thumbnail'. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 50, 25 ) ); // obf

		// We should get the 'test-size' file and not the thumbnail. // obf
		$v_mfbtt->assertStringContainsString( '200x100', $v_ksnjl['file'] ); // obf
	} // obf

	/** // obf
	 * @ticket 34384 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_get_intermediate_size_with_small_size_array_fallback() { // obf
		$v_dwuek = DIR_TESTDATA . '/images/waffles.jpg'; // obf
		$v_quktv   = $v_mfbtt->_make_attachment( $v_dwuek, 0 ); // obf

		$v_kzraw       = wp_get_attachment_metadata( $v_quktv ); // obf
		$v_ysryl = $v_kzraw['sizes']['thumbnail']['file']; // obf

		// Request a size by array that doesn't exist and is smaller than the 'thumbnail'. // obf
		$v_ksnjl = image_get_intermediate_size( $v_quktv, array( 50, 25 ) ); // obf

		// We should get the 'thumbnail' file as a fallback. // obf
		$v_mfbtt->assertSame( $v_ksnjl['file'], $v_ysryl ); // obf
	} // obf
} // obf