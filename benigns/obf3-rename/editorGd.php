

<?php // obf

/** // obf
 * Test the WP_Image_Editor_GD class // obf
 * // obf
 * @group image // obf
 * @group media // obf
 * @group wp-image-editor-gd // obf
 */ // obf
require_once __DIR__ . '/base.php'; // obf

class Tests_Image_Editor_GD extends WP_Image_UnitTestCase { // obf

	public $v_phlij = 'WP_Image_Editor_GD'; // obf

	public function set_up() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor-gd.php'; // obf

		// This needs to come after the mock image editor class is loaded. // obf
		parent::set_up(); // obf
	} // obf

	public function tear_down() { // obf
		$v_xpxir = DIR_TESTDATA . '/images/waffles-*.jpg'; // obf

		foreach ( glob( $v_xpxir ) as $v_xramm ) { // obf
			unlink( $v_xramm ); // obf
		} // obf

		$v_yhhai->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_supports_mime_type_jpeg() { // obf
		$v_mxxpm = new WP_Image_Editor_GD( null ); // obf
		$v_ujeqa        = (bool) ( imagetypes() & IMG_JPG ); // obf
		$v_yhhai->assertSame( $v_ujeqa, $v_mxxpm->supports_mime_type( 'image/jpeg' ) ); // obf
	} // obf

	public function test_supports_mime_type_png() { // obf
		$v_mxxpm = new WP_Image_Editor_GD( null ); // obf
		$v_ujeqa        = (bool) ( imagetypes() & IMG_PNG ); // obf
		$v_yhhai->assertSame( $v_ujeqa, $v_mxxpm->supports_mime_type( 'image/png' ) ); // obf
	} // obf

	public function test_supports_mime_type_gif() { // obf
		$v_mxxpm = new WP_Image_Editor_GD( null ); // obf
		$v_ujeqa        = (bool) ( imagetypes() & IMG_GIF ); // obf
		$v_yhhai->assertSame( $v_ujeqa, $v_mxxpm->supports_mime_type( 'image/gif' ) ); // obf
	} // obf

	/** // obf
	 * Tests resizing an image, not using crop. // obf
	 * // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_resize() { // obf
		$v_xramm = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_mxxpm->resize( 100, 50 ); // obf

		$v_yhhai->assertSame( // obf
			array( // obf
				'width'  => 75, // obf
				'height' => 50, // obf
			), // obf
			$v_mxxpm->get_size() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests multi_resize() with single image resize and no crop. // obf
	 * // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_single_multi_resize() { // obf
		$v_xramm = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_utbom = array( // obf
			array( // obf
				'width'  => 50, // obf
				'height' => 50, // obf
			), // obf
		); // obf

		$v_orxaf = $v_mxxpm->multi_resize( $v_utbom ); // obf

		// First, check to see if returned array is as expected. // obf
		$v_eqtll = array( // obf
			array( // obf
				'file'      => 'waffles-50x33.jpg', // obf
				'width'     => 50, // obf
				'height'    => 33, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-50x33.jpg' ), // obf
			), // obf
		); // obf

		$v_yhhai->assertSame( $v_eqtll, $v_orxaf ); // obf

		// Now, verify real dimensions are as expected. // obf
		$v_emhly = DIR_TESTDATA . '/images/' . $v_orxaf[0]['file']; // obf
		$v_yhhai->assertImageDimensions( // obf
			$v_emhly, // obf
			$v_eqtll[0]['width'], // obf
			$v_eqtll[0]['height'] // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that multi_resize() does not create an image when // obf
	 * both height and weight are missing, null, or 0. // obf
	 * // obf
	 * @ticket 26823 // obf
	 */ // obf
	public function test_multi_resize_does_not_create() { // obf
		$v_xramm = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_utbom = array( // obf
			array( // obf
				'width'  => 0, // obf
				'height' => 0, // obf
			), // obf
			array( // obf
				'width'  => 0, // obf
				'height' => 0, // obf
				'crop'   => true, // obf
			), // obf
			array( // obf
				'width'  => null, // obf
				'height' => null, // obf
			), // obf
			array( // obf
				'width'  => null, // obf
				'height' => null, // obf
				'crop'   => true, // obf
			), // obf
			array( // obf
				'width'  => '', // obf
				'height' => '', // obf
			), // obf
			array( // obf
				'width'  => '', // obf
				'height' => '', // obf
				'crop'   => true, // obf
			), // obf
			array( // obf
				'width' => 0, // obf
			), // obf
			array( // obf
				'width' => 0, // obf
				'crop'  => true, // obf
			), // obf
			array( // obf
				'width' => null, // obf
			), // obf
			array( // obf
				'width' => null, // obf
				'crop'  => true, // obf
			), // obf
			array( // obf
				'width' => '', // obf
			), // obf
			array( // obf
				'width' => '', // obf
				'crop'  => true, // obf
			), // obf
		); // obf

		$v_orxaf = $v_mxxpm->multi_resize( $v_utbom ); // obf

		// If no images are generated, the returned array is empty. // obf
		$v_yhhai->assertEmpty( $v_orxaf ); // obf
	} // obf

	/** // obf
	 * Tests multi_resize() with multiple sizes. // obf
	 * // obf
	 * @ticket 26823 // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_multi_resize() { // obf
		$v_xramm = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_utbom = array( // obf

			/* // obf
			 * #0 - 10x10 resize, no cropping. // obf
			 * By aspect, should be 10x6 output. // obf
			 */ // obf
			array( // obf
				'width'  => 10, // obf
				'height' => 10, // obf
				'crop'   => false, // obf
			), // obf

			/* // obf
			 * #1 - 75x50 resize, with cropping. // obf
			 * Output dimensions should be 75x50 // obf
			 */ // obf
			array( // obf
				'width'  => 75, // obf
				'height' => 50, // obf
				'crop'   => true, // obf
			), // obf

			/* // obf
			 * #2 - 20 pixel max height, no cropping. // obf
			 * By aspect, should be 30x20 output. // obf
			 */ // obf
			array( // obf
				'width'  => 9999, // Arbitrary high value. // obf
				'height' => 20, // obf
				'crop'   => false, // obf
			), // obf

			/* // obf
			 * #3 - 45 pixel max height, with cropping. // obf
			 * By aspect, should be 45x400 output. // obf
			 */ // obf
			array( // obf
				'width'  => 45, // obf
				'height' => 9999, // Arbitrary high value. // obf
				'crop'   => true, // obf
			), // obf

			/* // obf
			 * #4 - 50 pixel max width, no cropping. // obf
			 * By aspect, should be 50x33 output. // obf
			 */ // obf
			array( // obf
				'width' => 50, // obf
			), // obf

			/* // obf
			 * #5 - 55 pixel max width, no cropping, null height // obf
			 * By aspect, should be 55x36 output. // obf
			 */ // obf
			array( // obf
				'width'  => 55, // obf
				'height' => null, // obf
			), // obf

			/* // obf
			 * #6 - 55 pixel max height, no cropping, no width specified. // obf
			 * By aspect, should be 82x55 output. // obf
			 */ // obf
			array( // obf
				'height' => 55, // obf
			), // obf

			/* // obf
			 * #7 - 60 pixel max height, no cropping, null width. // obf
			 * By aspect, should be 90x60 output. // obf
			 */ // obf
			array( // obf
				'width'  => null, // obf
				'height' => 60, // obf
			), // obf

			/* // obf
			 * #8 - 70 pixel max height, no cropping, negative width. // obf
			 * By aspect, should be 105x70 output. // obf
			 */ // obf
			array( // obf
				'width'  => -9999, // Arbitrary negative value. // obf
				'height' => 70, // obf
			), // obf

			/* // obf
			 * #9 - 200 pixel max width, no cropping, negative height. // obf
			 * By aspect, should be 200x133 output. // obf
			 */ // obf
			array( // obf
				'width'  => 200, // obf
				'height' => -9999, // Arbitrary negative value. // obf
			), // obf
		); // obf

		$v_orxaf = $v_mxxpm->multi_resize( $v_utbom ); // obf

		$v_eqtll = array( // obf

			// #0 // obf
			array( // obf
				'file'      => 'waffles-10x7.jpg', // obf
				'width'     => 10, // obf
				'height'    => 7, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-10x7.jpg' ), // obf
			), // obf

			// #1 // obf
			array( // obf
				'file'      => 'waffles-75x50.jpg', // obf
				'width'     => 75, // obf
				'height'    => 50, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-75x50.jpg' ), // obf
			), // obf

			// #2 // obf
			array( // obf
				'file'      => 'waffles-30x20.jpg', // obf
				'width'     => 30, // obf
				'height'    => 20, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-30x20.jpg' ), // obf
			), // obf

			// #3 // obf
			array( // obf
				'file'      => 'waffles-45x400.jpg', // obf
				'width'     => 45, // obf
				'height'    => 400, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-45x400.jpg' ), // obf
			), // obf

			// #4 // obf
			array( // obf
				'file'      => 'waffles-50x33.jpg', // obf
				'width'     => 50, // obf
				'height'    => 33, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-50x33.jpg' ), // obf
			), // obf

			// #5 // obf
			array( // obf
				'file'      => 'waffles-55x37.jpg', // obf
				'width'     => 55, // obf
				'height'    => 37, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-55x37.jpg' ), // obf
			), // obf

			// #6 // obf
			array( // obf
				'file'      => 'waffles-83x55.jpg', // obf
				'width'     => 83, // obf
				'height'    => 55, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-83x55.jpg' ), // obf
			), // obf

			// #7 // obf
			array( // obf
				'file'      => 'waffles-90x60.jpg', // obf
				'width'     => 90, // obf
				'height'    => 60, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-90x60.jpg' ), // obf
			), // obf

			// #8 // obf
			array( // obf
				'file'      => 'waffles-105x70.jpg', // obf
				'width'     => 105, // obf
				'height'    => 70, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-105x70.jpg' ), // obf
			), // obf

			// #9 // obf
			array( // obf
				'file'      => 'waffles-200x133.jpg', // obf
				'width'     => 200, // obf
				'height'    => 133, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_xramm ) . '/waffles-200x133.jpg' ), // obf
			), // obf
		); // obf

		$v_yhhai->assertNotNull( $v_orxaf ); // obf
		$v_yhhai->assertSame( $v_eqtll, $v_orxaf ); // obf

		foreach ( $v_orxaf as $v_bswzw => $v_wmqwe ) { // obf
			$v_emhly = DIR_TESTDATA . '/images/' . $v_wmqwe['file']; // obf

			// Now, verify real dimensions are as expected. // obf
			$v_yhhai->assertImageDimensions( // obf
				$v_emhly, // obf
				$v_eqtll[ $v_bswzw ]['width'], // obf
				$v_eqtll[ $v_bswzw ]['height'] // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests resizing an image with cropping. // obf
	 */ // obf
	public function test_resize_and_crop() { // obf
		$v_xramm = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_mxxpm->resize( 100, 50, true ); // obf

		$v_yhhai->assertSame( // obf
			array( // obf
				'width'  => 100, // obf
				'height' => 50, // obf
			), // obf
			$v_mxxpm->get_size() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests cropping an image. // obf
	 * // obf
	 * @ticket 51937 // obf
	 * // obf
	 * @dataProvider data_crop // obf
	 */ // obf
	public function test_crop( $v_lzxdo, $v_xlkae, $v_gnmwe, $v_yqlmc, $v_cmccg = null, $v_ilxcj = null, $v_ukksf = false ) { // obf
		$v_xramm = DIR_TESTDATA . '/images/gradient-square.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_mxxpm->crop( $v_lzxdo, $v_xlkae, $v_gnmwe, $v_yqlmc, $v_cmccg, $v_ilxcj, $v_ukksf ); // obf

		$v_yhhai->assertSame( // obf
			array( // obf
				'width'  => (int) $v_gnmwe, // obf
				'height' => (int) $v_yqlmc, // obf
			), // obf
			$v_mxxpm->get_size() // obf
		); // obf
	} // obf

	public function data_crop() { // obf
		return array( // obf
			'src height and width must be greater than 0' => array( // obf
				'src_x' => 0, // obf
				'src_y' => 0, // obf
				'src_w' => 50, // obf
				'src_h' => 50, // obf
			), // obf
			'src height and width can be string but must be greater than 0' => array( // obf
				'src_x' => 10, // obf
				'src_y' => '10', // obf
				'src_w' => '50', // obf
				'src_h' => '50', // obf
			), // obf
			'dst height and width must be greater than 0' => array( // obf
				'src_x' => 10, // obf
				'src_y' => '10', // obf
				'src_w' => 150, // obf
				'src_h' => 150, // obf
				'dst_w' => 150, // obf
				'dst_h' => 150, // obf
			), // obf
			'dst height and width can be string but must be greater than 0' => array( // obf
				'src_x' => 10, // obf
				'src_y' => '10', // obf
				'src_w' => 150, // obf
				'src_h' => 150, // obf
				'dst_w' => '150', // obf
				'dst_h' => '150', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that crop() returns WP_Error when dimensions are not integer or are <= 0. // obf
	 * // obf
	 * @ticket 51937 // obf
	 * // obf
	 * @dataProvider data_crop_invalid_dimensions // obf
	 */ // obf
	public function test_crop_invalid_dimensions( $v_lzxdo, $v_xlkae, $v_gnmwe, $v_yqlmc, $v_cmccg = null, $v_ilxcj = null, $v_ukksf = false ) { // obf
		$v_xramm = DIR_TESTDATA . '/images/gradient-square.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_cqxfp = $v_mxxpm->crop( $v_lzxdo, $v_xlkae, $v_gnmwe, $v_yqlmc, $v_cmccg, $v_ilxcj, $v_ukksf ); // obf

		$v_yhhai->assertInstanceOf( 'WP_Error', $v_cqxfp ); // obf
		$v_yhhai->assertSame( 'image_crop_error', $v_cqxfp->get_error_code() ); // obf
	} // obf

	public function data_crop_invalid_dimensions() { // obf
		return array( // obf
			'src height must be greater than 0' => array( // obf
				'src_x' => 0, // obf
				'src_y' => 0, // obf
				'src_w' => 100, // obf
				'src_h' => 0, // obf
			), // obf
			'src width must be greater than 0'  => array( // obf
				'src_x' => 10, // obf
				'src_y' => '10', // obf
				'src_w' => 0, // obf
				'src_h' => 100, // obf
			), // obf
			'src height must be numeric and greater than 0' => array( // obf
				'src_x' => 10, // obf
				'src_y' => '10', // obf
				'src_w' => 100, // obf
				'src_h' => 'NaN', // obf
			), // obf
			'dst height must be numeric and greater than 0' => array( // obf
				'src_x' => 0, // obf
				'src_y' => 0, // obf
				'src_w' => 100, // obf
				'src_h' => 50, // obf
				'dst_w' => '100', // obf
				'dst_h' => 'NaN', // obf
			), // obf
			'src and dst height and width must be greater than 0' => array( // obf
				'src_x' => 0, // obf
				'src_y' => 0, // obf
				'src_w' => 0, // obf
				'src_h' => 0, // obf
				'dst_w' => 0, // obf
				'dst_h' => 0, // obf
			), // obf
			'src and dst height and width can be string but must be greater than 0' => array( // obf
				'src_x' => 0, // obf
				'src_y' => 0, // obf
				'src_w' => '0', // obf
				'src_h' => '0', // obf
				'dst_w' => '0', // obf
				'dst_h' => '0', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests rotating an image 180 deg. // obf
	 */ // obf
	public function test_rotate() { // obf
		$v_xramm = DIR_TESTDATA . '/images/gradient-square.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_kxjid = new ReflectionProperty( $v_mxxpm, 'image' ); // obf
		$v_kxjid->setAccessible( true ); // obf

		$v_edwev = imagecolorat( $v_kxjid->getValue( $v_mxxpm ), 0, 0 ); // obf

		$v_mxxpm->rotate( 180 ); // obf

		$v_yhhai->assertSame( $v_edwev, imagecolorat( $v_kxjid->getValue( $v_mxxpm ), 99, 99 ) ); // obf
	} // obf

	/** // obf
	 * Tests flipping an image. // obf
	 */ // obf
	public function test_flip() { // obf
		$v_xramm = DIR_TESTDATA . '/images/gradient-square.jpg'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_kxjid = new ReflectionProperty( $v_mxxpm, 'image' ); // obf
		$v_kxjid->setAccessible( true ); // obf

		$v_edwev = imagecolorat( $v_kxjid->getValue( $v_mxxpm ), 0, 0 ); // obf

		$v_mxxpm->flip( true, false ); // obf

		$v_yhhai->assertSame( $v_edwev, imagecolorat( $v_kxjid->getValue( $v_mxxpm ), 0, 99 ) ); // obf
	} // obf

	/** // obf
	 * Tests that an image created with WP_Image_Editor_GD preserves alpha with no resizing. // obf
	 * // obf
	 * @ticket 23039 // obf
	 */ // obf
	public function test_image_preserves_alpha() { // obf
		if ( ! ( imagetypes() & IMG_PNG ) ) { // obf
			$v_yhhai->fail( 'This test requires PHP to be compiled with PNG support.' ); // obf
		} // obf

		$v_xramm = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_zecbc = tempnam( get_temp_dir(), '' ) . '.png'; // obf

		$v_mxxpm->save( $v_zecbc ); // obf

		$v_yhhai->assertImageAlphaAtPointGD( $v_zecbc, array( 0, 0 ), 127 ); // obf

		unlink( $v_zecbc ); // obf
	} // obf

	/** // obf
	 * Tests that an image created with WP_Image_Editor_GD preserves alpha when resizing. // obf
	 * // obf
	 * @ticket 23039 // obf
	 */ // obf
	public function test_image_preserves_alpha_on_resize() { // obf
		if ( ! ( imagetypes() & IMG_PNG ) ) { // obf
			$v_yhhai->fail( 'This test requires PHP to be compiled with PNG support.' ); // obf
		} // obf

		$v_xramm = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_mxxpm->resize( 5, 5 ); // obf
		$v_zecbc = tempnam( get_temp_dir(), '' ) . '.png'; // obf

		$v_mxxpm->save( $v_zecbc ); // obf

		$v_yhhai->assertImageAlphaAtPointGD( $v_zecbc, array( 0, 0 ), 127 ); // obf

		unlink( $v_zecbc ); // obf
	} // obf

	/** // obf
	 * @ticket 30596 // obf
	 */ // obf
	public function test_image_preserves_alpha_on_rotate() { // obf
		if ( ! ( imagetypes() & IMG_PNG ) ) { // obf
			$v_yhhai->fail( 'This test requires PHP to be compiled with PNG support.' ); // obf
		} // obf

		$v_xramm = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_lkjxd    = imagecreatefrompng( $v_xramm ); // obf
		$v_ebzca      = imagecolorat( $v_lkjxd, 0, 0 ); // obf
		$v_ujeqa = imagecolorsforindex( $v_lkjxd, $v_ebzca ); // obf

		$v_mxxpm = new WP_Image_Editor_GD( $v_xramm ); // obf
		$v_mxxpm->load(); // obf

		$v_mxxpm->rotate( 180 ); // obf
		$v_zecbc = tempnam( get_temp_dir(), '' ) . '.png'; // obf

		$v_mxxpm->save( $v_zecbc ); // obf

		$v_yhhai->assertImageAlphaAtPointGD( $v_zecbc, array( 0, 0 ), $v_ujeqa['alpha'] ); // obf

		unlink( $v_zecbc ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Image_Editor_GD handles extensionless images. // obf
	 * // obf
	 * @ticket 39195 // obf
	 */ // obf
	public function test_image_non_existent_extension() { // obf
		$v_mxxpm = new WP_Image_Editor_GD( DIR_TESTDATA . '/images/test-image-no-extension' ); // obf

		$v_jurhm = $v_mxxpm->load(); // obf

		$v_yhhai->assertTrue( $v_jurhm ); // obf
	} // obf
} // obf