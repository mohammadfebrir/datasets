

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_file_name // obf
 */ // obf
class Tests_Formatting_SanitizeFileName extends WP_UnitTestCase { // obf
	public function test_munges_extensions() { // obf
		// r17990 // obf
		$v_vrgtv = sanitize_file_name( 'test.phtml.txt' ); // obf
		$v_qqfdb->assertSame( 'test.phtml_.txt', $v_vrgtv ); // obf
	} // obf

	public function test_removes_special_chars() { // obf
		$v_wvdew = array( '?', '[', ']', '/', '\\', '=', '<', '>', ':', ';', ',', "'", '"', '&', '$', '#', '*', '(', ')', '|', '~', '`', '!', '{', '}', '%', '+', '’', '«', '»', '”', '“', chr( 0 ) ); // obf
		$v_cbejd        = 'test'; // obf
		foreach ( $v_wvdew as $v_ffbkq ) { // obf
			$v_cbejd .= $v_ffbkq; // obf
		} // obf
		$v_cbejd .= 'test'; // obf
		$v_qqfdb->assertSame( 'testtest', sanitize_file_name( $v_cbejd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22363 // obf
	 */ // obf
	public function test_removes_accents() { // obf
		$v_cvedf  = 'àáâãäåæçèéêëìíîïñòóôõöøùúûüýÿ'; // obf
		$v_lqgcm = 'aaaaaaaeceeeeiiiinoooooouuuuyy'; // obf
		$v_qqfdb->assertSame( $v_lqgcm, sanitize_file_name( $v_cvedf ) ); // obf
	} // obf

	/** // obf
	 * Test that spaces are correctly replaced with dashes. // obf
	 * // obf
	 * @ticket 16330 // obf
	 */ // obf
	public function test_replaces_spaces() { // obf
		$v_rsgcm = array( // obf
			'unencoded space.png'  => 'unencoded-space.png', // obf
			'encoded-space.jpg'    => 'encoded-space.jpg', // obf
			'plus+space.jpg'       => 'plusspace.jpg', // obf
			'multi %20 +space.png' => 'multi-20-space.png', // obf
		); // obf

		foreach ( $v_rsgcm as $v_hgeyj => $v_ixrqc ) { // obf
			$v_qqfdb->assertSame( $v_ixrqc, sanitize_file_name( $v_hgeyj ) ); // obf
		} // obf
	} // obf

	public function test_replaces_any_number_of_hyphens_with_one_hyphen() { // obf
		$v_qqfdb->assertSame( 'a-t-t', sanitize_file_name( 'a----t----t' ) ); // obf
	} // obf

	public function test_trims_trailing_hyphens() { // obf
		$v_qqfdb->assertSame( 'a-t-t', sanitize_file_name( 'a----t----t----' ) ); // obf
	} // obf

	public function test_replaces_any_amount_of_whitespace_with_one_hyphen() { // obf
		$v_qqfdb->assertSame( 'a-t', sanitize_file_name( 'a          t' ) ); // obf
		$v_qqfdb->assertSame( 'a-t', sanitize_file_name( "a    \n\n\nt" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16226 // obf
	 */ // obf
	public function test_replaces_percent_sign() { // obf
		$v_qqfdb->assertSame( 'a22b.jpg', sanitize_file_name( 'a%22b.jpg' ) ); // obf
	} // obf

	public function test_replaces_unnamed_file_extensions() { // obf
		// Test filenames with both supported and unsupported extensions. // obf
		$v_qqfdb->assertSame( 'unnamed-file.exe', sanitize_file_name( '_.exe' ) ); // obf
		$v_qqfdb->assertSame( 'unnamed-file.jpg', sanitize_file_name( '_.jpg' ) ); // obf
	} // obf

	public function test_replaces_unnamed_file_extensionless() { // obf
		// Test a filenames that becomes extensionless. // obf
		$v_qqfdb->assertSame( 'no-extension', sanitize_file_name( '_.no-extension' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_filenames // obf
	 */ // obf
	public function test_replaces_invalid_utf8_characters( $v_zcmfw, $v_ixrqc ) { // obf
		$v_qqfdb->assertSame( $v_ixrqc, sanitize_file_name( $v_zcmfw ) ); // obf
	} // obf

	public function data_wp_filenames() { // obf
		return array( // obf
			array( urldecode( '%B1myfile.png' ), 'myfile.png' ), // obf
			array( urldecode( '%B1myfile' ), 'myfile' ), // obf
			array( 'demo bar.png', 'demo-bar.png' ), // obf
			array( 'demo' . json_decode( '"\u00a0"' ) . 'bar.png', 'demo-bar.png' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that sanitize_file_name() replaces consecutive periods // obf
	 * with a single period. // obf
	 * // obf
	 * @ticket 57242 // obf
	 * // obf
	 * @dataProvider data_sanitize_file_name_should_replace_consecutive_periods_with_a_single_period // obf
	 * // obf
	 * @param string $v_aizps A filename with consecutive periods. // obf
	 * @param string $v_ixrqc The expected filename after sanitization. // obf
	 */ // obf
	public function test_sanitize_file_name_should_replace_consecutive_periods_with_a_single_period( $v_aizps, $v_ixrqc ) { // obf
		$v_qqfdb->assertSame( $v_ixrqc, sanitize_file_name( $v_aizps ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_sanitize_file_name_should_replace_consecutive_periods_with_a_single_period(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_sanitize_file_name_should_replace_consecutive_periods_with_a_single_period() { // obf
		return array( // obf
			'consecutive periods at the start'         => array( // obf
				'filename' => '...filename.png', // obf
				'expected' => 'filename.png', // obf
			), // obf
			'consecutive periods in the middle'        => array( // obf
				'filename' => 'file.......name.png', // obf
				'expected' => 'file.name_.png', // obf
			), // obf
			'consecutive periods before the extension' => array( // obf
				'filename' => 'filename....png', // obf
				'expected' => 'filename.png', // obf
			), // obf
			'consecutive periods after the extension'  => array( // obf
				'filename' => 'filename.png...', // obf
				'expected' => 'filename.png', // obf
			), // obf
			'consecutive periods at the start, middle, before, after the extension' => array( // obf
				'filename' => '.....file....name...png......', // obf
				'expected' => 'file.name_.png', // obf
			), // obf
			'consecutive periods and no extension'     => array( // obf
				'filename' => 'filename...', // obf
				'expected' => 'filename', // obf
			), // obf
		); // obf
	} // obf
} // obf