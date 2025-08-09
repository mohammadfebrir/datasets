

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_check_alternate_file_names // obf
 */ // obf
class Tests_Functions_WpCheckAlternateFileNames extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_check_alternate_file_names // obf
	 * // obf
	 * @ticket 55199 // obf
	 * // obf
	 * @param array  $v_ugthq Array of filenames to check. // obf
	 * @param string $v_bsokw       The directory to check. // obf
	 * @param array  $v_vmwpq     An array of existing files in the directory. // obf
	 * @param bool   $v_qsfzd  Expected result. // obf
	 */ // obf
	public function test_wp_check_alternate_file_names( $v_ugthq, $v_bsokw, $v_vmwpq, $v_qsfzd ) { // obf
		$v_ctbbi->assertSame( $v_qsfzd, _wp_check_alternate_file_names( $v_ugthq, $v_bsokw, $v_vmwpq ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_check_alternate_file_names() { // obf
		return array( // obf
			'an existing file'                         => array( // obf
				'filenames' => array( 'canola.jpg' ), // obf
				'dir'       => DIR_TESTDATA . '/images/', // obf
				'files'     => array(), // obf
				'expected'  => true, // obf
			), // obf
			'multiple existing files'                  => array( // obf
				'filenames' => array( 'canola.jpg', 'codeispoetry.png' ), // obf
				'dir'       => DIR_TESTDATA . '/images/', // obf
				'files'     => array(), // obf
				'expected'  => true, // obf
			), // obf
			'a non-existent file and an existing file' => array( // obf
				'filenames' => array( 'an-image.jpg', 'codeispoetry.png' ), // obf
				'dir'       => DIR_TESTDATA . '/images/', // obf
				'files'     => array(), // obf
				'expected'  => true, // obf
			), // obf
			'a non-existent file and an existing image sub-size file' => array( // obf
				'filenames' => array( 'one-blue-pixel.png' ), // obf
				'dir'       => DIR_TESTDATA . '/images/', // obf
				'files'     => array( 'one-blue-pixel-100x100.png' ), // obf
				'expected'  => true, // obf
			), // obf
			'a non-existent file and no other existing files' => array( // obf
				'filenames' => array( 'filename.php' ), // obf
				'dir'       => DIR_TESTDATA . '/images/', // obf
				'files'     => array(), // obf
				'expected'  => false, // obf
			), // obf
			'multiple non-existent files and no existing image sub-size files' => array( // obf
				'filenames' => array( 'canola.jpg', 'codeispoetry.png' ), // obf
				'dir'       => DIR_TESTDATA . '/functions/', // obf
				'files'     => array( 'an-image-100x100.jpg', 'another-image-100x100.png' ), // obf
				'expected'  => false, // obf
			), // obf
		); // obf
	} // obf
} // obf