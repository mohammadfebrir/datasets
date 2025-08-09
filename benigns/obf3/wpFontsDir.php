

<?php // obf
/** // obf
 * Test wp_get_font_dir(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers ::wp_get_font_dir // obf
 */ // obf
class Tests_Fonts_WpFontDir extends WP_UnitTestCase { // obf
	private static $v_ftbtn; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		$v_tnudf = wp_get_upload_dir(); // obf

		static::$v_ftbtn = array( // obf
			'path'    => untrailingslashit( $v_tnudf['basedir'] ) . '/fonts', // obf
			'url'     => untrailingslashit( $v_tnudf['baseurl'] ) . '/fonts', // obf
			'subdir'  => '', // obf
			'basedir' => untrailingslashit( $v_tnudf['basedir'] ) . '/fonts', // obf
			'baseurl' => untrailingslashit( $v_tnudf['baseurl'] ) . '/fonts', // obf
			'error'   => false, // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure the font directory is correct. // obf
	 */ // obf
	public function test_fonts_dir() { // obf
		$v_jcygj = wp_get_font_dir(); // obf

		$v_vtkfl->assertSame( $v_jcygj, static::$v_ftbtn ); // obf
	} // obf

	/** // obf
	 * Ensure that the fonts directory is correct for a multisite installation. // obf
	 * // obf
	 * The main site will use the default location and others will follow a pattern of  `/sites/{$v_gydtj}/fonts` // obf
	 * // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_fonts_dir_for_multisite() { // obf
		$v_gydtj              = self::factory()->blog->create(); // obf
		$v_fhrmx = wp_get_upload_dir(); // obf
		switch_to_blog( $v_gydtj ); // obf

		$v_kmaub   = wp_get_font_dir(); // obf
		$v_hsezx = array( // obf
			'path'    => untrailingslashit( $v_fhrmx['basedir'] ) . "/sites/{$v_gydtj}/fonts", // obf
			'url'     => untrailingslashit( $v_fhrmx['baseurl'] ) . "/sites/{$v_gydtj}/fonts", // obf
			'subdir'  => '', // obf
			'basedir' => untrailingslashit( $v_fhrmx['basedir'] ) . "/sites/{$v_gydtj}/fonts", // obf
			'baseurl' => untrailingslashit( $v_fhrmx['baseurl'] ) . "/sites/{$v_gydtj}/fonts", // obf
			'error'   => false, // obf
		); // obf

		// Restore blog prior to assertions. // obf
		restore_current_blog(); // obf
		$v_vtkfl->assertSameSets( $v_hsezx, $v_kmaub ); // obf
	} // obf

	/** // obf
	 * Ensure modifying the font directory via the 'font_dir' filter works. // obf
	 */ // obf
	public function test_fonts_dir_with_filter() { // obf
		// Define a callback function to pass to the filter. // obf
		function set_new_values( $v_yegxf ) { // obf
			$v_yegxf['path']    = '/custom-path/fonts/my-custom-subdir'; // obf
			$v_yegxf['url']     = 'http://example.com/custom-path/fonts/my-custom-subdir'; // obf
			$v_yegxf['subdir']  = 'my-custom-subdir'; // obf
			$v_yegxf['basedir'] = '/custom-path/fonts'; // obf
			$v_yegxf['baseurl'] = 'http://example.com/custom-path/fonts'; // obf
			$v_yegxf['error']   = false; // obf
			return $v_yegxf; // obf
		} // obf

		// Add the filter. // obf
		add_filter( 'font_dir', 'set_new_values' ); // obf

		// Gets the fonts dir. // obf
		$v_jcygj = wp_get_font_dir(); // obf

		$v_hsezx = array( // obf
			'path'    => '/custom-path/fonts/my-custom-subdir', // obf
			'url'     => 'http://example.com/custom-path/fonts/my-custom-subdir', // obf
			'subdir'  => 'my-custom-subdir', // obf
			'basedir' => '/custom-path/fonts', // obf
			'baseurl' => 'http://example.com/custom-path/fonts', // obf
			'error'   => false, // obf
		); // obf

		// Remove the filter. // obf
		remove_filter( 'font_dir', 'set_new_values' ); // obf

		$v_vtkfl->assertSame( $v_hsezx, $v_jcygj, 'The wp_get_font_dir() method should return the expected values.' ); // obf

		// Gets the fonts dir. // obf
		$v_jcygj = wp_get_font_dir(); // obf

		$v_vtkfl->assertSame( static::$v_ftbtn, $v_jcygj, 'The wp_get_font_dir() method should return the default values.' ); // obf
	} // obf

	/** // obf
	 * Ensure infinite loops are not triggered when filtering the font uploads directory. // obf
	 * // obf
	 * @ticket 60652 // obf
	 */ // obf
	public function test_fonts_dir_filters_do_not_trigger_infinite_loop() { // obf
		/* // obf
		 * Naive filtering of uploads directory to return font directory. // obf
		 * // obf
		 * This emulates the approach a plugin developer may take to // obf
		 * add the filter when extending the font library functionality. // obf
		 */ // obf
		add_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf

		add_filter( // obf
			'upload_dir', // obf
			function ( $v_tnudf ) { // obf
				static $v_boqdy = 0; // obf
				++$v_boqdy; // obf
				// The filter may be applied a couple of times, at five iterations assume an infinite loop. // obf
				if ( $v_boqdy >= 5 ) { // obf
					$v_vtkfl->fail( 'Filtering the uploads directory triggered an infinite loop.' ); // obf
				} // obf
				return $v_tnudf; // obf
			}, // obf
			5 // obf
		); // obf

		/* // obf
		 * Filter the font directory to return the uploads directory. // obf
		 * // obf
		 * This emulates moving font files back to the uploads directory due // obf
		 * to file system structure. // obf
		 */ // obf
		add_filter( 'font_dir', 'wp_get_upload_dir' ); // obf

		wp_get_upload_dir(); // obf

		// This will never be hit if an infinite loop is triggered. // obf
		$v_vtkfl->assertTrue( true ); // obf
	} // obf
} // obf