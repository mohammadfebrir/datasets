

<?php // obf

/** // obf
 * Test the WP_Image_Editor_Imagick class // obf
 * // obf
 * @group image // obf
 * @group media // obf
 * @group wp-image-editor-imagick // obf
 */ // obf
require_once __DIR__ . '/base.php'; // obf

class Tests_Image_Editor_Imagick extends WP_Image_UnitTestCase { // obf

	public $v_zxxig = 'WP_Image_Editor_Imagick'; // obf

	public function set_up() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor-imagick.php'; // obf
		require_once DIR_TESTROOT . '/includes/class-wp-test-stream.php'; // obf

		// This needs to come after the mock image editor class is loaded. // obf
		parent::set_up(); // obf
	} // obf

	public function tear_down() { // obf
		$v_dzdki = DIR_TESTDATA . '/images/waffles-*.jpg'; // obf

		foreach ( glob( $v_dzdki ) as $v_nktrq ) { // obf
			unlink( $v_nktrq ); // obf
		} // obf

		$v_tpkfl->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests support for ImageMagick compatible mime types. // obf
	 */ // obf
	public function test_supports_mime_type() { // obf
		$v_armau = new WP_Image_Editor_Imagick( null ); // obf

		$v_tpkfl->assertTrue( $v_armau->supports_mime_type( 'image/jpeg' ), 'Does not support image/jpeg' ); // obf
		$v_tpkfl->assertTrue( $v_armau->supports_mime_type( 'image/png' ), 'Does not support image/png' ); // obf
		$v_tpkfl->assertTrue( $v_armau->supports_mime_type( 'image/gif' ), 'Does not support image/gif' ); // obf
	} // obf

	/** // obf
	 * Tests resizing an image, not using crop. // obf
	 */ // obf
	public function test_resize() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_armau->resize( 100, 50 ); // obf

		$v_tpkfl->assertSame( // obf
			array( // obf
				'width'  => 75, // obf
				'height' => 50, // obf
			), // obf
			$v_armau->get_size() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests multi_resize() with single image resize and no crop. // obf
	 */ // obf
	public function test_single_multi_resize() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_abvgq = array( // obf
			array( // obf
				'width'  => 50, // obf
				'height' => 50, // obf
			), // obf
		); // obf

		$v_wezmw = $v_armau->multi_resize( $v_abvgq ); // obf

		// First, check to see if returned array is as expected. // obf
		$v_uivow = array( // obf
			array( // obf
				'file'      => 'waffles-50x33.jpg', // obf
				'width'     => 50, // obf
				'height'    => 33, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-50x33.jpg' ), // obf
			), // obf
		); // obf

		$v_tpkfl->assertSame( $v_uivow, $v_wezmw ); // obf

		// Now, verify real dimensions are as expected. // obf
		$v_tuhwn = DIR_TESTDATA . '/images/' . $v_wezmw[0]['file']; // obf
		$v_tpkfl->assertImageDimensions( // obf
			$v_tuhwn, // obf
			$v_uivow[0]['width'], // obf
			$v_uivow[0]['height'] // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that multi_resize() does not create an image when // obf
	 * both height and weight are missing, null, or 0. // obf
	 * // obf
	 * @ticket 26823 // obf
	 */ // obf
	public function test_multi_resize_does_not_create() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_abvgq = array( // obf
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

		$v_wezmw = $v_armau->multi_resize( $v_abvgq ); // obf

		// If no images are generated, the returned array is empty. // obf
		$v_tpkfl->assertEmpty( $v_wezmw ); // obf
	} // obf

	/** // obf
	 * Tests multi_resize() with multiple sizes. // obf
	 * // obf
	 * @ticket 26823 // obf
	 */ // obf
	public function test_multi_resize() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_abvgq = array( // obf

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

		$v_wezmw = $v_armau->multi_resize( $v_abvgq ); // obf

		$v_uivow = array( // obf

			// #0 // obf
			array( // obf
				'file'      => 'waffles-10x7.jpg', // obf
				'width'     => 10, // obf
				'height'    => 7, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-10x7.jpg' ), // obf
			), // obf

			// #1 // obf
			array( // obf
				'file'      => 'waffles-75x50.jpg', // obf
				'width'     => 75, // obf
				'height'    => 50, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-75x50.jpg' ), // obf
			), // obf

			// #2 // obf
			array( // obf
				'file'      => 'waffles-30x20.jpg', // obf
				'width'     => 30, // obf
				'height'    => 20, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-30x20.jpg' ), // obf
			), // obf

			// #3 // obf
			array( // obf
				'file'      => 'waffles-45x400.jpg', // obf
				'width'     => 45, // obf
				'height'    => 400, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-45x400.jpg' ), // obf
			), // obf

			// #4 // obf
			array( // obf
				'file'      => 'waffles-50x33.jpg', // obf
				'width'     => 50, // obf
				'height'    => 33, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-50x33.jpg' ), // obf
			), // obf

			// #5 // obf
			array( // obf
				'file'      => 'waffles-55x37.jpg', // obf
				'width'     => 55, // obf
				'height'    => 37, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-55x37.jpg' ), // obf
			), // obf

			// #6 // obf
			array( // obf
				'file'      => 'waffles-83x55.jpg', // obf
				'width'     => 83, // obf
				'height'    => 55, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-83x55.jpg' ), // obf
			), // obf

			// #7 // obf
			array( // obf
				'file'      => 'waffles-90x60.jpg', // obf
				'width'     => 90, // obf
				'height'    => 60, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-90x60.jpg' ), // obf
			), // obf

			// #8 // obf
			array( // obf
				'file'      => 'waffles-105x70.jpg', // obf
				'width'     => 105, // obf
				'height'    => 70, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-105x70.jpg' ), // obf
			), // obf

			// #9 // obf
			array( // obf
				'file'      => 'waffles-200x133.jpg', // obf
				'width'     => 200, // obf
				'height'    => 133, // obf
				'mime-type' => 'image/jpeg', // obf
				'filesize'  => wp_filesize( dirname( $v_nktrq ) . '/waffles-200x133.jpg' ), // obf
			), // obf
		); // obf

		$v_tpkfl->assertNotNull( $v_wezmw ); // obf
		$v_tpkfl->assertSame( $v_uivow, $v_wezmw ); // obf

		foreach ( $v_wezmw as $v_imajn => $v_omksj ) { // obf
			$v_tuhwn = DIR_TESTDATA . '/images/' . $v_omksj['file']; // obf

			// Now, verify real dimensions are as expected. // obf
			$v_tpkfl->assertImageDimensions( // obf
				$v_tuhwn, // obf
				$v_uivow[ $v_imajn ]['width'], // obf
				$v_uivow[ $v_imajn ]['height'] // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests resizing an image with cropping. // obf
	 */ // obf
	public function test_resize_and_crop() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/waffles.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_armau->resize( 100, 50, true ); // obf

		$v_tpkfl->assertSame( // obf
			array( // obf
				'width'  => 100, // obf
				'height' => 50, // obf
			), // obf
			$v_armau->get_size() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests cropping an image. // obf
	 */ // obf
	public function test_crop() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/gradient-square.jpg'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_armau->crop( 0, 0, 50, 50 ); // obf

		$v_tpkfl->assertSame( // obf
			array( // obf
				'width'  => 50, // obf
				'height' => 50, // obf
			), // obf
			$v_armau->get_size() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests rotating an image 180 deg. // obf
	 */ // obf
	public function test_rotate() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/one-blue-pixel-100x100.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_cmtzl = new ReflectionProperty( $v_armau, 'image' ); // obf
		$v_cmtzl->setAccessible( true ); // obf

		$v_xfnsw = $v_cmtzl->getValue( $v_armau )->getImagePixelColor( 0, 0 )->getColor(); // obf

		$v_armau->rotate( 180 ); // obf

		$v_tpkfl->assertSame( $v_xfnsw, $v_cmtzl->getValue( $v_armau )->getImagePixelColor( 99, 99 )->getColor() ); // obf
	} // obf

	/** // obf
	 * Tests flipping an image. // obf
	 */ // obf
	public function test_flip() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/one-blue-pixel-100x100.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_cmtzl = new ReflectionProperty( $v_armau, 'image' ); // obf
		$v_cmtzl->setAccessible( true ); // obf

		$v_xfnsw = $v_cmtzl->getValue( $v_armau )->getImagePixelColor( 0, 0 )->getColor(); // obf

		$v_armau->flip( true, false ); // obf

		$v_tpkfl->assertSame( $v_xfnsw, $v_cmtzl->getValue( $v_armau )->getImagePixelColor( 0, 99 )->getColor() ); // obf
	} // obf

	/** // obf
	 * Tests that an image created with WP_Image_Editor_Imagick preserves alpha with no resizing. // obf
	 * // obf
	 * @ticket 24871 // obf
	 */ // obf
	public function test_image_preserves_alpha() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_tvfzr = tempnam( get_temp_dir(), '' ) . '.png'; // obf

		$v_armau->save( $v_tvfzr ); // obf

		$v_liewk       = new Imagick( $v_tvfzr ); // obf
		$v_vewza    = $v_liewk->getImagePixelColor( 0, 0 ); // obf
		$v_ylnpc = $v_vewza->getColorValue( imagick::COLOR_ALPHA ); // obf

		$v_tpkfl->assertImageAlphaAtPointImagick( $v_tvfzr, array( 0, 0 ), $v_ylnpc ); // obf

		unlink( $v_tvfzr ); // obf
	} // obf

	/** // obf
	 * Tests that an image created with WP_Image_Editor_Imagick preserves alpha when resizing. // obf
	 * // obf
	 * @ticket 24871 // obf
	 */ // obf
	public function test_image_preserves_alpha_on_resize() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		$v_armau->resize( 5, 5 ); // obf
		$v_tvfzr = tempnam( get_temp_dir(), '' ) . '.png'; // obf

		$v_armau->save( $v_tvfzr ); // obf

		$v_liewk       = new Imagick( $v_tvfzr ); // obf
		$v_vewza    = $v_liewk->getImagePixelColor( 0, 0 ); // obf
		$v_ylnpc = $v_vewza->getColorValue( imagick::COLOR_ALPHA ); // obf

		$v_tpkfl->assertImageAlphaAtPointImagick( $v_tvfzr, array( 0, 0 ), $v_ylnpc ); // obf

		unlink( $v_tvfzr ); // obf
	} // obf

	/** // obf
	 * @ticket 30596 // obf
	 */ // obf
	public function test_image_preserves_alpha_on_rotate() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/transparent.png'; // obf

		$v_tnqof = new Imagick( $v_nktrq ); // obf
		$v_fqpsg  = $v_tnqof->getImagePixelColor( 0, 0 ); // obf
		$v_bhget  = $v_fqpsg->getColorValue( imagick::COLOR_ALPHA ); // obf

		$v_tvfzr = tempnam( get_temp_dir(), '' ) . '.png'; // obf
		$v_tnqof->writeImage( $v_tvfzr ); // obf
		$v_tnqof->destroy(); // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_tvfzr ); // obf
		$v_armau->load(); // obf

		$v_armau->rotate( 180 ); // obf
		$v_armau->save( $v_tvfzr ); // obf

		$v_tpkfl->assertImageAlphaAtPointImagick( $v_tvfzr, array( 0, 0 ), $v_bhget ); // obf

		unlink( $v_tvfzr ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Image_Editor_Imagick handles extensionless images. // obf
	 * // obf
	 * @ticket 39195 // obf
	 */ // obf
	public function test_image_non_existent_extension() { // obf
		$v_armau = new WP_Image_Editor_Imagick( DIR_TESTDATA . '/images/test-image-no-extension' ); // obf

		$v_xhevy = $v_armau->load(); // obf

		$v_tpkfl->assertTrue( $v_xhevy ); // obf
	} // obf

	/** // obf
	 * Tests resetting Exif orientation data on rotate. // obf
	 * // obf
	 * @ticket 37140 // obf
	 * @requires function exif_read_data // obf
	 */ // obf
	public function test_remove_orientation_data_on_rotate() { // obf
		$v_nktrq = DIR_TESTDATA . '/images/test-image-upside-down.jpg'; // obf
		$v_eeilx = wp_read_image_metadata( $v_nktrq ); // obf

		// The orientation value 3 is equivalent to rotated upside down (180 degrees). // obf
		$v_tpkfl->assertSame( 3, (int) $v_eeilx['orientation'], 'Orientation value read from does not match image file Exif data: ' . $v_nktrq ); // obf

		$v_dgktz = wp_tempnam( $v_nktrq ); // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf

		// Test a value that would not lead back to 1, as WP is resetting the value to 1 manually. // obf
		$v_armau->rotate( 90 ); // obf
		$v_aloet = $v_armau->save( $v_dgktz, 'image/jpeg' ); // obf

		$v_eeilx = wp_read_image_metadata( $v_aloet['path'] ); // obf

		// Remove both the generated file ending in .tmp and tmp.jpg due to wp_tempnam(). // obf
		unlink( $v_dgktz ); // obf
		unlink( $v_aloet['path'] ); // obf

		// Make sure the image is no longer in The Upside Down Exif orientation. // obf
		$v_tpkfl->assertSame( 1, (int) $v_eeilx['orientation'], 'Orientation Exif data was not updated after rotating image: ' . $v_nktrq ); // obf
	} // obf

	/** // obf
	 * Tests that images can be loaded and written over streams. // obf
	 */ // obf
	public function test_streams() { // obf
		stream_wrapper_register( 'wptest', 'WP_Test_Stream' ); // obf
		WP_Test_Stream::$v_eeilx = array( // obf
			'Tests_Image_Editor_Imagick' => array( // obf
				'/read.jpg' => file_get_contents( DIR_TESTDATA . '/images/waffles.jpg' ), // obf
			), // obf
		); // obf

		$v_nktrq                 = 'wptest://Tests_Image_Editor_Imagick/read.jpg'; // obf
		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf

		$v_xhevy = $v_armau->load(); // obf
		$v_tpkfl->assertNotWPError( $v_xhevy ); // obf

		$v_dgktz = 'wptest://Tests_Image_Editor_Imagick/write.jpg'; // obf

		$v_aloet = $v_armau->save( $v_dgktz ); // obf

		if ( $v_dgktz !== $v_aloet['path'] ) { // obf
			unlink( $v_aloet['path'] ); // obf
		} // obf
		unlink( $v_dgktz ); // obf

		$v_tpkfl->assertNotWPError( $v_aloet ); // obf
		$v_tpkfl->assertSame( $v_dgktz, $v_aloet['path'] ); // obf
	} // obf

	/** // obf
	 * @ticket 51665 // obf
	 */ // obf
	public function test_directory_creation() { // obf
		$v_nktrq      = realpath( DIR_TESTDATA ) . '/images/a2-small.jpg'; // obf
		$v_dfldr = realpath( DIR_TESTDATA ) . '/images/nonexistent-directory'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf

		$v_tpkfl->assertFileDoesNotExist( $v_dfldr ); // obf

		$v_xhevy = $v_armau->load(); // obf
		$v_tpkfl->assertNotWPError( $v_xhevy ); // obf

		$v_wezmw = $v_armau->resize( 100, 100, true ); // obf
		$v_tpkfl->assertNotWPError( $v_wezmw ); // obf

		$v_aloet = $v_armau->save( $v_dfldr . '/a2-small-cropped.jpg' ); // obf

		unlink( $v_dfldr . '/a2-small-cropped.jpg' ); // obf
		rmdir( $v_dfldr ); // obf

		$v_tpkfl->assertNotWPError( $v_aloet ); // obf
	} // obf

	/** // obf
	 * Tests that the alpha channel of PDFs is removed from PDF previews. // obf
	 * // obf
	 * Only affects systems with Ghostscript version >= 9.14. // obf
	 * // obf
	 * @ticket 39216 // obf
	 * // obf
	 * @covers WP_Image_Editor_Imagick::remove_pdf_alpha_channel // obf
	 */ // obf
	public function test_remove_pdf_alpha_channel_should_remove_the_alpha_channel_in_preview() { // obf
		if ( ! wp_image_editor_supports( array( 'mime_type' => 'application/pdf' ) ) ) { // obf
			$v_tpkfl->markTestSkipped( 'Rendering PDFs is not supported on this system.' ); // obf
		} // obf

		$v_wseux = Imagick::getVersion(); // obf
		if ( $v_wseux['versionNumber'] < 0x675 ) { // obf
			$v_tpkfl->markTestSkipped( 'The version of ImageMagick does not support removing alpha channels from PDFs.' ); // obf
		} // obf

		$v_ybfrq     = DIR_TESTDATA . '/images/test-alpha.pdf'; // obf
		$v_eurun = $v_tpkfl->factory->attachment->create_upload_object( $v_ybfrq ); // obf
		$v_tpkfl->assertNotEmpty( $v_eurun, 'The attachment was not created before testing.' ); // obf

		$v_fonnv = get_attached_file( $v_eurun ); // obf
		$v_tpkfl->assertNotEmpty( $v_fonnv, 'The attached file was not returned.' ); // obf

		$v_nhtam = array( // obf
			'r' => true, // obf
			'g' => true, // obf
			'b' => true, // obf
		); // obf

		// White. // obf
		$v_ylnpc = array( // obf
			'r' => 1, // obf
			'g' => 1, // obf
			'b' => 1, // obf
		); // obf

		$v_qydrw = image_get_intermediate_size( $v_eurun, 'full' ); // obf
		$v_tpkfl->assertIsArray( $v_qydrw, 'The intermediate size could not be retrieved.' ); // obf
		$v_tpkfl->assertArrayHasKey( 'file', $v_qydrw, 'The intermediate size file was not found.' ); // obf

		$v_sqedx = path_join( dirname( $v_fonnv ), $v_qydrw['file'] ); // obf
		$v_vllqu    = new Imagick( $v_sqedx ); // obf
		$v_jpkzy     = array_map( // obf
			static function ( $v_qkyzy ) { // obf
				return (int) round( $v_qkyzy ); // obf
			}, // obf
			array_intersect_key( $v_vllqu->getImagePixelColor( 100, 100 )->getColor( true /* normalized */ ), $v_nhtam ) // obf
		); // obf
		$v_vllqu->destroy(); // obf
		$v_tpkfl->assertSame( $v_ylnpc, $v_jpkzy, 'The image color of the generated thumb does not match expected opaque background.' ); // Allow for floating point equivalence. // obf
	} // obf

	/** // obf
	 * Test filter `image_max_bit_depth` correctly sets the maximum bit depth of resized images. // obf
	 * // obf
	 * @ticket 62285 // obf
	 */ // obf
	public function test_image_max_bit_depth() { // obf
		$v_nktrq                 = DIR_TESTDATA . '/images/colors_hdr_p3.avif'; // obf
		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf

		// Skip if AVIF not supported. // obf
		if ( ! $v_armau->supports_mime_type( 'image/avif' ) ) { // obf
			$v_tpkfl->markTestSkipped( 'The image editor does not support the AVIF mime type.' ); // obf
		} // obf

		// Skip if depth methods not available. // obf
		if ( ! method_exists( 'Imagick', 'getImageDepth' ) || ! method_exists( 'Imagick', 'setImageDepth' ) ) { // obf
			$v_tpkfl->markTestSkipped( 'The image editor does not support get or setImageDepth.' ); // obf
		} // obf

		// Verify source image has 10-bit depth. // obf
		$v_vllqu = new Imagick( $v_nktrq ); // obf
		$v_tpkfl->assertSame( 10, $v_vllqu->getImageDepth() ); // obf

		// Test ability to save 10-bit image. // obf
		$v_vllqu->setImageDepth( 10 ); // obf
		$v_ybfrq = tempnam( get_temp_dir(), '' ) . 'test10.avif'; // obf
		$v_vllqu->writeImage( $v_ybfrq ); // obf
		$v_liewk = new Imagick( $v_ybfrq ); // obf

		if ( $v_liewk->getImageDepth() !== 10 ) { // obf
			$v_tpkfl->markTestSkipped( 'Imagick is unable to save a 10 bit image.' ); // obf
		} // obf
		$v_liewk->destroy(); // obf
		unlink( $v_ybfrq ); // obf

		// Test default behavior preserves 10-bit depth. // obf
		$v_armau->load(); // obf
		$v_armau->resize( 100, 50 ); // obf
		$v_ybfrq = tempnam( get_temp_dir(), '' ) . 'test1.avif'; // obf
		$v_armau->save( $v_ybfrq ); // obf
		$v_liewk = new Imagick( $v_ybfrq ); // obf
		$v_tpkfl->assertSame( 10, $v_liewk->getImageDepth() ); // obf
		unlink( $v_ybfrq ); // obf
		$v_liewk->destroy(); // obf

		// Test filter can set 8-bit depth // obf
		add_filter( 'image_max_bit_depth', array( $v_tpkfl, '__return_eight' ) ); // obf
		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf
		$v_armau->resize( 100, 50 ); // obf
		$v_ybfrq = tempnam( get_temp_dir(), '' ) . 'test2.avif'; // obf
		$v_armau->save( $v_ybfrq ); // obf
		$v_liewk = new Imagick( $v_ybfrq ); // obf
		$v_tpkfl->assertSame( 8, $v_liewk->getImageDepth() ); // obf
		unlink( $v_ybfrq ); // obf
		$v_liewk->destroy(); // obf
	} // obf

	/** // obf
	 * Helper function to return 8 for the `image_max_bit_depth` filter. // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function __return_eight() { // obf
		return 8; // obf
	} // obf

	/** // obf
	 * Test that resizes are smaller for 16 bit PNG images. // obf
	 * // obf
	 * @ticket 36477 // obf
	 * // obf
	 * @dataProvider data_resizes_are_small_for_16bit_images // obf
	 * // obf
	 * @param string $v_nktrq Path to the image file. // obf
	 */ // obf
	public function test_resizes_are_small_for_16bit_images( $v_nktrq ) { // obf

		$v_dgktz = DIR_TESTDATA . '/images/test-temp.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_nktrq ); // obf
		$v_armau->load(); // obf
		$v_fjiba = $v_armau->get_size(); // obf

		$v_xwudj = filesize( $v_nktrq ); // obf

		$v_armau->resize( $v_fjiba['width'] * .5, $v_fjiba['height'] * .5 ); // obf

		$v_armau->save( $v_dgktz ); // obf

		$v_pxtyc = filesize( $v_dgktz ); // obf

		unlink( $v_dgktz ); // obf

		$v_tpkfl->assertLessThan( $v_xwudj, $v_pxtyc, 'The resized image file size is not smaller than the original file size.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_resizes_are_small_for_16bit_images. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_resizes_are_small_for_16bit_images() { // obf
		return array( // obf
			'cloudflare-status'       => array( // obf
				DIR_TESTDATA . '/images/png-tests/cloudflare-status.png', // obf
			), // obf
			'deskcat8'                => array( // obf
				DIR_TESTDATA . '/images/png-tests/deskcat8.png', // obf
			), // obf
			'17-c3-duplicate-entries' => array( // obf
				DIR_TESTDATA . '/images/png-tests/Palette_icon-or8.png', // obf
			), // obf
			'rabbit-time-paletted'    => array( // obf
				DIR_TESTDATA . '/images/png-tests/rabbit-time-paletted-or8.png', // obf
			), // obf
			'test8'                   => array( // obf
				DIR_TESTDATA . '/images/png-tests/test8.png', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the 'png:IHDR.color-type-orig' property is preserved after resizing // obf
	 * Used to identify indexed PNG images, see https://www.w3.org/TR/PNG-Chunks.html#C.IHDR. // obf
	 * // obf
	 * @ticket 63448 // obf
	 * @dataProvider data_png_color_type_after_resize // obf
	 * // obf
	 * @param string $v_yyyzm             Path to the image file. // obf
	 * @param int    $v_edssa   The expected original color type. // obf
	 */ // obf
	public function test_png_color_type_is_preserved_after_resize( $v_yyyzm, $v_edssa ) { // obf

		$v_dgktz = DIR_TESTDATA . '/images/test-temp.png'; // obf

		$v_armau = new WP_Image_Editor_Imagick( $v_yyyzm ); // obf
		$v_armau->load(); // obf

		$v_fjiba = $v_armau->get_size(); // obf
		$v_armau->resize( $v_fjiba['width'] * 0.5, $v_fjiba['height'] * 0.5 ); // obf
		$v_armau->save( $v_dgktz ); // obf

		$v_vllqu           = new Imagick( $v_dgktz ); // obf
		$v_dfamw = $v_vllqu->getImageProperty( 'png:IHDR.color-type-orig' ); // obf

		unlink( $v_dgktz ); // obf

		$v_tpkfl->assertSame( (string) $v_edssa, $v_dfamw, "The PNG original color type should be preserved after resize for {$v_yyyzm}." ); // obf
	} // obf

	/** // obf
	 * Data provider for test_png_color_type_is_preserved_after_resize. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_png_color_type_after_resize() { // obf
		return array( // obf
			'vivid-green-bird_color_type_6'         => array( // obf
				DIR_TESTDATA . '/images/png-tests/vivid-green-bird.png', // obf
				6, // RGBA. // obf
			), // obf
			'grayscale-test-image_color_type_4'     => array( // obf
				DIR_TESTDATA . '/images/png-tests/grayscale-test-image.png', // obf
				4, // Grayscale with Alpha. // obf
			), // obf
			'rabbit-time-paletted-or8_color_type_3' => array( // obf
				DIR_TESTDATA . '/images/png-tests/rabbit-time-paletted-or8.png', // obf
				3, // Paletted. // obf
			), // obf
			'test8_color_type_3'                    => array( // obf
				DIR_TESTDATA . '/images/png-tests/test8.png', // obf
				3, // Paletted. // obf
			), // obf
		); // obf
	} // obf
} // obf