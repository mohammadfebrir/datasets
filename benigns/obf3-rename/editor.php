

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Test the WP_Image_Editor base class // obf
 * // obf
 * @group image // obf
 * @group media // obf
 */ // obf
class Tests_Image_Editor extends WP_Image_UnitTestCase { // obf
	public $v_uhzsz = 'WP_Image_Editor_Mock'; // obf

	/** // obf
	 * Setup test fixture // obf
	 */ // obf
	public function set_up() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf

		require_once DIR_TESTDATA . '/../includes/mock-image-editor.php'; // obf

		// This needs to come after the mock image editor class is loaded. // obf
		parent::set_up(); // obf
	} // obf

	/** // obf
	 * Test wp_get_image_editor() where load returns true // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_get_editor_load_returns_true() { // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		$v_tcntk->assertInstanceOf( 'WP_Image_Editor_Mock', $v_hndlx ); // obf
	} // obf

	/** // obf
	 * Test wp_get_image_editor() where load returns false // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_get_editor_load_returns_false() { // obf
		WP_Image_Editor_Mock::$v_gfbdf = new WP_Error(); // obf

		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		$v_tcntk->assertInstanceOf( 'WP_Error', $v_hndlx ); // obf

		WP_Image_Editor_Mock::$v_gfbdf = true; // obf
	} // obf

	/** // obf
	 * Return integer of 95 for testing. // obf
	 */ // obf
	public function return_integer_95() { // obf
		return 95; // obf
	} // obf

	/** // obf
	 * Return integer of 100 for testing. // obf
	 */ // obf
	public function return_integer_100() { // obf
		return 100; // obf
	} // obf

	/** // obf
	 * Test test_quality // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_set_quality() { // obf

		// Get an editor. // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf
		$v_hndlx->set_mime_type( 'image/jpeg' ); // Ensure mime-specific filters act properly. // obf

		// Check default value. // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality() ); // obf

		// Ensure the quality filters do not have precedence if created after editor instantiation. // obf
		$v_uzcqg = array( $v_tcntk, 'return_integer_100' ); // obf
		add_filter( 'wp_editor_set_quality', $v_uzcqg ); // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality() ); // obf

		$v_mmzrn = array( $v_tcntk, 'return_integer_95' ); // obf
		add_filter( 'jpeg_quality', $v_mmzrn ); // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality() ); // obf

		// Ensure set_quality() works and overrides the filters. // obf
		$v_tcntk->assertTrue( $v_hndlx->set_quality( 75 ) ); // obf
		$v_tcntk->assertSame( 75, $v_hndlx->get_quality() ); // obf

		// Get a new editor to clear default quality state. // obf
		unset( $v_hndlx ); // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf
		$v_hndlx->set_mime_type( 'image/jpeg' ); // Ensure mime-specific filters act properly. // obf

		// Ensure jpeg_quality filter applies if it exists before editor instantiation. // obf
		$v_tcntk->assertSame( 95, $v_hndlx->get_quality() ); // obf

		// Get a new editor to clear jpeg_quality state. // obf
		remove_filter( 'jpeg_quality', $v_mmzrn ); // obf
		unset( $v_hndlx ); // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		// Ensure wp_editor_set_quality filter applies if it exists before editor instantiation. // obf
		$v_tcntk->assertSame( 100, $v_hndlx->get_quality() ); // obf
	} // obf

	/** // obf
	 * Test test_quality when converting image // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_set_quality_with_image_conversion() { // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/test-image.png' ); // obf
		$v_hndlx->set_mime_type( 'image/png' ); // Ensure mime-specific filters act properly. // obf

		// Quality setting for the source image. For PNG the fallback default of 82 is used. // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality(), 'Default quality setting is 82.' ); // obf

		// Set conversions for uploaded images. // obf
		add_filter( 'image_editor_output_format', array( $v_tcntk, 'image_editor_output_formats' ) ); // obf

		// Quality setting for the source image. For PNG the fallback default of 82 is used. // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality(), 'Default quality setting is 82.' ); // obf

		// When saving, quality should change to the output format's value. // obf
		// A PNG image will be converted to WebP whose quality should be 86. // obf
		$v_hndlx->save(); // obf
		$v_tcntk->assertSame( 86, $v_hndlx->get_quality(), 'Output image format is WebP. Quality setting for it should be 86.' ); // obf

		// Saving again should not change the quality. // obf
		$v_hndlx->save(); // obf
		$v_tcntk->assertSame( 86, $v_hndlx->get_quality(), 'Output image format is WebP. Quality setting for it should be 86.' ); // obf

		// Removing PNG to WebP conversion on save. Quality setting should reset to the default. // obf
		remove_filter( 'image_editor_output_format', array( $v_tcntk, 'image_editor_output_formats' ) ); // obf
		$v_hndlx->save(); // obf
		$v_tcntk->assertSame( 82, $v_hndlx->get_quality(), 'After removing image conversion quality setting should reset to the default of 82.' ); // obf

		unset( $v_hndlx ); // obf

		// Set conversions for uploaded images. // obf
		add_filter( 'image_editor_output_format', array( $v_tcntk, 'image_editor_output_formats' ) ); // obf
		// Change the quality values. // obf
		add_filter( 'wp_editor_set_quality', array( $v_tcntk, 'image_editor_change_quality' ), 10, 2 ); // obf

		// Get a new editor to clear quality state. // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/test-image.jpg' ); // obf
		$v_hndlx->set_mime_type( 'image/jpeg' ); // obf

		$v_tcntk->assertSame( 56, $v_hndlx->get_quality(), 'Filtered default quality for JPEG is 56.' ); // obf

		// Quality should change to the output format's value as filtered above. // obf
		// A JPEG image will be converted to WebP whose quialty should be 42. // obf
		$v_hndlx->save(); // obf
		$v_tcntk->assertSame( 42, $v_hndlx->get_quality(), 'Image conversion from JPEG to WEBP. Filtered WEBP quality should be 42.' ); // obf

		// After removing the conversion the quality setting should reset to the filtered value for the original image type, JPEG. // obf
		remove_filter( 'image_editor_output_format', array( $v_tcntk, 'image_editor_output_formats' ) ); // obf
		$v_hndlx->save(); // obf
		$v_tcntk->assertSame( // obf
			56, // obf
			$v_hndlx->get_quality(), // obf
			'After removing image conversion the quality setting should reset to the filtered value for JPEG, 56.' // obf
		); // obf
	} // obf

	/** // obf
	 * Changes the output format when editing images. PNG and JPEG files // obf
	 * will be converted to WEBP (if the image editor in PHP supports it). // obf
	 * // obf
	 * @param array $v_bdvlt // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function image_editor_output_formats( $v_bdvlt ) { // obf
		$v_bdvlt['image/png']  = 'image/webp'; // obf
		$v_bdvlt['image/jpeg'] = 'image/webp'; // obf
		return $v_bdvlt; // obf
	} // obf

	/** // obf
	 * Changes the quality according to the mime-type. // obf
	 * // obf
	 * @param int    $v_kynxk   Default quality. // obf
	 * @param string $v_inwae Image mime-type. // obf
	 * @return int The changed quality. // obf
	 */ // obf
	public function image_editor_change_quality( $v_kynxk, $v_inwae ) { // obf
		if ( 'image/jpeg' === $v_inwae ) { // obf
			return 56; // obf
		} elseif ( 'image/webp' === $v_inwae ) { // obf
			return 42; // obf
		} else { // obf
			return 30; // obf
		} // obf
	} // obf

	/** // obf
	 * Test generate_filename // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_generate_filename() { // obf

		// Get an editor. // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		$v_jjean = new ReflectionProperty( $v_hndlx, 'size' ); // obf
		$v_jjean->setAccessible( true ); // obf
		$v_jjean->setValue( // obf
			$v_hndlx, // obf
			array( // obf
				'height' => 50, // obf
				'width'  => 100, // obf
			) // obf
		); // obf

		// Test with no parameters. // obf
		$v_tcntk->assertSame( 'canola-100x50.jpg', wp_basename( $v_hndlx->generate_filename() ) ); // obf

		// Test with a suffix only. // obf
		$v_tcntk->assertSame( 'canola-new.jpg', wp_basename( $v_hndlx->generate_filename( 'new' ) ) ); // obf

		// Test with a destination dir only. // obf
		$v_tcntk->assertSame( trailingslashit( realpath( get_temp_dir() ) ), trailingslashit( realpath( dirname( $v_hndlx->generate_filename( null, get_temp_dir() ) ) ) ) ); // obf

		// Test with a suffix only. // obf
		$v_tcntk->assertSame( 'canola-100x50.png', wp_basename( $v_hndlx->generate_filename( null, null, 'png' ) ) ); // obf

		// Combo! // obf
		$v_tcntk->assertSame( trailingslashit( realpath( get_temp_dir() ) ) . 'canola-new.png', $v_hndlx->generate_filename( 'new', realpath( get_temp_dir() ), 'png' ) ); // obf

		// Test with a stream destination. // obf
		$v_tcntk->assertSame( 'file://testing/path/canola-100x50.jpg', $v_hndlx->generate_filename( null, 'file://testing/path' ) ); // obf
	} // obf

	/** // obf
	 * Test get_size // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_get_size() { // obf

		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		// Size should be false by default. // obf
		$v_tcntk->assertNull( $v_hndlx->get_size() ); // obf

		// Set a size. // obf
		$v_kckor     = array( // obf
			'height' => 50, // obf
			'width'  => 100, // obf
		); // obf
		$v_jjean = new ReflectionProperty( $v_hndlx, 'size' ); // obf
		$v_jjean->setAccessible( true ); // obf
		$v_jjean->setValue( $v_hndlx, $v_kckor ); // obf

		$v_tcntk->assertSame( $v_kckor, $v_hndlx->get_size() ); // obf
	} // obf

	/** // obf
	 * Test get_suffix // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_get_suffix() { // obf
		$v_hndlx = wp_get_image_editor( DIR_TESTDATA . '/images/canola.jpg' ); // obf

		// Size should be false by default. // obf
		$v_tcntk->assertFalse( $v_hndlx->get_suffix() ); // obf

		// Set a size. // obf
		$v_kckor     = array( // obf
			'height' => 50, // obf
			'width'  => 100, // obf
		); // obf
		$v_jjean = new ReflectionProperty( $v_hndlx, 'size' ); // obf
		$v_jjean->setAccessible( true ); // obf
		$v_jjean->setValue( $v_hndlx, $v_kckor ); // obf

		$v_tcntk->assertSame( '100x50', $v_hndlx->get_suffix() ); // obf
	} // obf

	/** // obf
	 * Test wp_get_webp_info. // obf
	 * // obf
	 * @ticket 35725 // obf
	 * @dataProvider data_wp_get_webp_info // obf
	 * // obf
	 */ // obf
	public function test_wp_get_webp_info( $v_zcklp, $v_tyqxs ) { // obf
		$v_rqqmu = wp_get_webp_info( $v_zcklp ); // obf
		$v_tcntk->assertSame( $v_tyqxs, $v_rqqmu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_get_webp_info(). // obf
	 */ // obf
	public function data_wp_get_webp_info() { // obf
		return array( // obf
			// Standard JPEG. // obf
			array( // obf
				DIR_TESTDATA . '/images/test-image.jpg', // obf
				array( // obf
					'width'  => false, // obf
					'height' => false, // obf
					'type'   => false, // obf
				), // obf
			), // obf
			// Standard GIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/test-image.gif', // obf
				array( // obf
					'width'  => false, // obf
					'height' => false, // obf
					'type'   => false, // obf
				), // obf
			), // obf
			// Animated WebP. // obf
			array( // obf
				DIR_TESTDATA . '/images/webp-animated.webp', // obf
				array( // obf
					'width'  => 100, // obf
					'height' => 100, // obf
					'type'   => 'animated-alpha', // obf
				), // obf
			), // obf
			// Lossless WebP. // obf
			array( // obf
				DIR_TESTDATA . '/images/webp-lossless.webp', // obf
				array( // obf
					'width'  => 1200, // obf
					'height' => 675, // obf
					'type'   => 'lossless', // obf
				), // obf
			), // obf
			// Lossy WebP. // obf
			array( // obf
				DIR_TESTDATA . '/images/webp-lossy.webp', // obf
				array( // obf
					'width'  => 1200, // obf
					'height' => 675, // obf
					'type'   => 'lossy', // obf
				), // obf
			), // obf
			// Transparent WebP. // obf
			array( // obf
				DIR_TESTDATA . '/images/webp-transparent.webp', // obf
				array( // obf
					'width'  => 1200, // obf
					'height' => 675, // obf
					'type'   => 'animated-alpha', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test wp_get_avif_info. // obf
	 * // obf
	 * @ticket 51228 // obf
	 * // obf
	 * @dataProvider data_wp_get_avif_info // obf
	 * // obf
	 * @param string $v_zcklp     The path to the AVIF file for testing. // obf
	 * @param array  $v_tyqxs The expected AVIF file information. // obf
	 */ // obf
	public function test_wp_get_avif_info( $v_zcklp, $v_tyqxs ) { // obf
		$v_rqqmu = wp_get_avif_info( $v_zcklp ); // obf
		$v_tcntk->assertSame( $v_tyqxs, $v_rqqmu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_get_avif_info(). // obf
	 */ // obf
	public function data_wp_get_avif_info() { // obf
		return array( // obf
			// Standard JPEG. // obf
			array( // obf
				DIR_TESTDATA . '/images/test-image.jpg', // obf
				array( // obf
					'width'        => false, // obf
					'height'       => false, // obf
					'bit_depth'    => false, // obf
					'num_channels' => false, // obf
				), // obf
			), // obf
			// Standard GIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/test-image.gif', // obf
				array( // obf
					'width'        => false, // obf
					'height'       => false, // obf
					'bit_depth'    => false, // obf
					'num_channels' => false, // obf
				), // obf
			), // obf
			// Animated AVIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/avif-animated.avif', // obf
				array( // obf
					'width'        => 150, // obf
					'height'       => 150, // obf
					'bit_depth'    => 8, // obf
					'num_channels' => 4, // obf
				), // obf
			), // obf
			// Lossless AVIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/avif-lossless.avif', // obf
				array( // obf
					'width'        => 400, // obf
					'height'       => 400, // obf
					'bit_depth'    => 8, // obf
					'num_channels' => 3, // obf
				), // obf
			), // obf
			// Lossy AVIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/avif-lossy.avif', // obf
				array( // obf
					'width'        => 400, // obf
					'height'       => 400, // obf
					'bit_depth'    => 8, // obf
					'num_channels' => 3, // obf
				), // obf
			), // obf
			// Transparent AVIF. // obf
			array( // obf
				DIR_TESTDATA . '/images/avif-transparent.avif', // obf
				array( // obf
					'width'        => 128, // obf
					'height'       => 128, // obf
					'bit_depth'    => 12, // obf
					'num_channels' => 4, // obf
				), // obf
			), // obf
			array( // obf
				DIR_TESTDATA . '/images/color_grid_alpha_nogrid.avif', // obf
				array( // obf
					'width'        => 80, // obf
					'height'       => 80, // obf
					'bit_depth'    => 8, // obf
					'num_channels' => 4, // obf
				), // obf
			), // obf
			array( // obf
				DIR_TESTDATA . '/images/avif-alpha-grid2x1.avif', // obf
				array( // obf
					'width'        => 199, // obf
					'height'       => 200, // obf
					'bit_depth'    => 8, // obf
					'num_channels' => 4, // obf
				), // obf
			), // obf
			array( // obf
				DIR_TESTDATA . '/images/colors_hdr_p3.avif', // obf
				array( // obf
					'width'        => 200, // obf
					'height'       => 200, // obf
					'bit_depth'    => 10, // obf
					'num_channels' => 3, // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf