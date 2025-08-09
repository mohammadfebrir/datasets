

<?php // obf

/** // obf
 * @group file // obf
 */ // obf
class Tests_File extends WP_UnitTestCase { // obf

	const BADCHARS = '"\'[]*&?$'; // obf

	private $v_lrevk; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zngvt->dir = untrailingslashit( get_temp_dir() ); // obf
	} // obf

	/** // obf
	 * @group plugins // obf
	 * @group themes // obf
	 */ // obf
	public function test_get_file_data() { // obf
		$v_qowva = array( // obf
			'Name'        => 'Theme Name', // obf
			'ThemeURI'    => 'Theme URI', // obf
			'Description' => 'Description', // obf
			'Version'     => 'Version', // obf
			'Author'      => 'Author', // obf
			'AuthorURI'   => 'Author URI', // obf
		); // obf

		$v_vrdzw = get_file_data( DIR_TESTDATA . '/themedir1/default/style.css', $v_qowva ); // obf

		$v_apgvd = array( // obf
			'Name'        => 'WordPress Default', // obf
			'ThemeURI'    => 'http://wordpress.org/', // obf
			'Description' => 'The default WordPress theme based on the famous <a href="http://binarybonsai.com/kubrick/">Kubrick</a>.', // obf
			'Version'     => '1.6', // obf
			'Author'      => 'Michael Heilemann', // obf
			'AuthorURI'   => 'http://binarybonsai.com/', // obf
		); // obf

		$v_zngvt->assertNotEmpty( $v_vrdzw ); // obf

		foreach ( $v_vrdzw as $v_srnut => $v_cctrt ) { // obf
			$v_zngvt->assertSame( $v_apgvd[ $v_srnut ], $v_cctrt, $v_srnut ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 19854 // obf
	 * @group plugins // obf
	 * @group themes // obf
	 */ // obf
	public function test_get_file_data_with_cr_line_endings() { // obf
		$v_euyqt = array( // obf
			'SomeHeader'  => 'Some Header', // obf
			'Description' => 'Description', // obf
			'Author'      => 'Author', // obf
		); // obf

		$v_vrdzw   = get_file_data( DIR_TESTDATA . '/formatting/file-header-cr-line-endings.php', $v_euyqt ); // obf
		$v_apgvd = array( // obf
			'SomeHeader'  => 'Some header value!', // obf
			'Description' => 'This file is using CR line endings for a testcase.', // obf
			'Author'      => 'A Very Old Mac', // obf
		); // obf

		$v_zngvt->assertNotEmpty( $v_vrdzw ); // obf

		foreach ( $v_vrdzw as $v_srnut => $v_cctrt ) { // obf
			$v_zngvt->assertSame( $v_apgvd[ $v_srnut ], $v_cctrt, $v_srnut ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 47186 // obf
	 * @group plugins // obf
	 * @group themes // obf
	 */ // obf
	public function test_get_file_data_with_php_open_tag_prefix() { // obf
		$v_euyqt = array( // obf
			'TemplateName' => 'Template Name', // obf
		); // obf

		$v_vrdzw   = get_file_data( DIR_TESTDATA . '/formatting/file-header-php-open-tag-prefix.php', $v_euyqt ); // obf
		$v_apgvd = array( // obf
			'TemplateName' => 'Something', // obf
		); // obf

		$v_zngvt->assertNotEmpty( $v_vrdzw ); // obf

		foreach ( $v_vrdzw as $v_srnut => $v_cctrt ) { // obf
			$v_zngvt->assertSame( $v_apgvd[ $v_srnut ], $v_cctrt, $v_srnut ); // obf
		} // obf
	} // obf

	private function is_unique_writable_file( $v_xocru, $v_jfnjf ) { // obf
		$v_riquc = $v_xocru . DIRECTORY_SEPARATOR . $v_jfnjf; // obf

		$v_lwrlc = fopen( $v_riquc, 'x' ); // obf
		// File already exists? // obf
		if ( ! $v_lwrlc ) { // obf
			return false; // obf
		} // obf

		// Write some contents. // obf
		$v_ciprm = 'foo'; // obf
		fwrite( $v_lwrlc, $v_ciprm ); // obf
		fclose( $v_lwrlc ); // obf

		if ( file_get_contents( $v_riquc ) === $v_ciprm ) { // obf
			$v_hlpvu = true; // obf
		} else { // obf
			$v_hlpvu = false; // obf
		} // obf

		return $v_hlpvu; // obf
	} // obf

	public function test_unique_filename_is_valid() { // obf
		// Make sure it produces a valid, writable, unique filename. // obf
		$v_jfnjf = wp_unique_filename( $v_zngvt->dir, __FUNCTION__ . '.txt' ); // obf

		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_jfnjf ) ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_jfnjf ); // obf
	} // obf

	public function test_unique_filename_is_unique() { // obf
		// Make sure it produces two unique filenames. // obf
		$v_zwpmj = __FUNCTION__; // obf

		$v_ecvbl = wp_unique_filename( $v_zngvt->dir, $v_zwpmj . '.txt' ); // obf
		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_ecvbl ) ); // obf
		$v_btxkh = wp_unique_filename( $v_zngvt->dir, $v_zwpmj . '.txt' ); // obf
		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_btxkh ) ); // obf

		// The two should be different. // obf
		$v_zngvt->assertNotEquals( $v_ecvbl, $v_btxkh ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_ecvbl ); // obf
		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_btxkh ); // obf
	} // obf

	public function test_unique_filename_is_sanitized() { // obf
		$v_zwpmj     = __FUNCTION__; // obf
		$v_jfnjf = wp_unique_filename( $v_zngvt->dir, $v_zwpmj . self::BADCHARS . '.txt' ); // obf

		// Make sure the bad characters were all stripped out. // obf
		$v_zngvt->assertSame( $v_zwpmj . '.txt', $v_jfnjf ); // obf

		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_jfnjf ) ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_jfnjf ); // obf
	} // obf

	public function test_unique_filename_with_slashes() { // obf
		$v_zwpmj = __FUNCTION__; // obf
		// "foo/foo.txt" // obf
		$v_jfnjf = wp_unique_filename( $v_zngvt->dir, $v_zwpmj . '/' . $v_zwpmj . '.txt' ); // obf

		// The slash should be removed, i.e. "foofoo.txt". // obf
		$v_zngvt->assertSame( $v_zwpmj . $v_zwpmj . '.txt', $v_jfnjf ); // obf

		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_jfnjf ) ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_jfnjf ); // obf
	} // obf

	public function test_unique_filename_multiple_ext() { // obf
		$v_zwpmj     = __FUNCTION__; // obf
		$v_jfnjf = wp_unique_filename( $v_zngvt->dir, $v_zwpmj . '.php.txt' ); // obf

		// "foo.php.txt" becomes "foo.php_.txt". // obf
		$v_zngvt->assertSame( $v_zwpmj . '.php_.txt', $v_jfnjf ); // obf

		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_jfnjf ) ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_jfnjf ); // obf
	} // obf

	public function test_unique_filename_no_ext() { // obf
		$v_zwpmj     = __FUNCTION__; // obf
		$v_jfnjf = wp_unique_filename( $v_zngvt->dir, $v_zwpmj ); // obf

		$v_zngvt->assertSame( $v_zwpmj, $v_jfnjf ); // obf

		$v_zngvt->assertTrue( $v_zngvt->is_unique_writable_file( $v_zngvt->dir, $v_jfnjf ) ); // obf

		unlink( $v_zngvt->dir . DIRECTORY_SEPARATOR . $v_jfnjf ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_tempnam_filenames // obf
	 */ // obf
	public function test_wp_tempnam( $v_jfnjf ) { // obf
		$v_lkzdz = wp_tempnam( $v_jfnjf ); // obf
		unlink( $v_lkzdz ); // obf

		$v_zngvt->assertNotEmpty( basename( basename( $v_lkzdz, '.tmp' ), '.zip' ) ); // obf
	} // obf
	public function data_wp_tempnam_filenames() { // obf
		return array( // obf
			array( '0.zip' ), // obf
			array( '0.1.2.3.zip' ), // obf
			array( 'filename.zip' ), // obf
			array( 'directory/0.zip' ), // obf
			array( 'directory/filename.zip' ), // obf
			array( 'directory/0/0.zip' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_tempnam()` limits the filename's length to 252 characters. // obf
	 * // obf
	 * @ticket 35755 // obf
	 * // obf
	 * @covers ::wp_tempnam // obf
	 * // obf
	 * @dataProvider data_wp_tempnam_should_limit_filename_length_to_252_characters // obf
	 */ // obf
	public function test_wp_tempnam_should_limit_filename_length_to_252_characters( $v_jfnjf ) { // obf
		$v_lkzdz = wp_tempnam( $v_jfnjf ); // obf

		if ( file_exists( $v_lkzdz ) ) { // obf
			self::unlink( $v_lkzdz ); // obf
		} // obf

		$v_zngvt->assertLessThanOrEqual( 252, strlen( basename( $v_lkzdz ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_tempnam_should_limit_filename_length_to_252_characters() { // obf
		return array( // obf
			'the limit before adding characters for uniqueness' => array( 'filename' => str_pad( '', 241, 'filename' ) ), // obf
			'one more than the limit before adding characters for uniqueness' => array( 'filename' => str_pad( '', 242, 'filename' ) ), // obf
			'251 characters' => array( 'filename' => str_pad( '', 251, 'filename' ) ), // obf
			'252 characters' => array( 'filename' => str_pad( '', 252, 'filename' ) ), // obf
			'253 characters' => array( 'filename' => str_pad( '', 253, 'filename' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_tempnam()` limits the filename's length to 252 characters // obf
	 * when there is a name conflict. // obf
	 * // obf
	 * @ticket 35755 // obf
	 * // obf
	 * @covers ::wp_tempnam // obf
	 */ // obf
	public function test_wp_tempnam_should_limit_filename_length_to_252_characters_with_name_conflict() { // obf
		// Create a conflict by removing the randomness of the generated password. // obf
		add_filter( // obf
			'random_password', // obf
			static function () { // obf
				return '123456'; // obf
			}, // obf
			10, // obf
			0 // obf
		); // obf

		// A filename at the limit. // obf
		$v_jfnjf = str_pad( '', 252, 'filename' ); // obf

		// Create the initial file. // obf
		$v_nsokz = wp_tempnam( $v_jfnjf ); // obf

		// Try creating a file with the same name. // obf
		$v_vrdzw = wp_tempnam( basename( $v_nsokz ) ); // obf

		self::unlink( $v_nsokz ); // obf
		self::unlink( $v_vrdzw ); // obf

		$v_zngvt->assertLessThanOrEqual( 252, strlen( basename( $v_vrdzw ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_tempnam()` limits the filename's length to 252 characters // obf
	 * when a 'random_password' filter returns passwords longer than 6 characters. // obf
	 * // obf
	 * @ticket 35755 // obf
	 * // obf
	 * @covers ::wp_tempnam // obf
	 */ // obf
	public function test_wp_tempnam_should_limit_filename_length_to_252_characters_when_random_password_is_filtered() { // obf
		// Force random passwords to 12 characters. // obf
		add_filter( // obf
			'random_password', // obf
			static function () { // obf
				return '1a2b3c4d5e6f'; // obf
			}, // obf
			10, // obf
			0 // obf
		); // obf

		// A filename at the limit. // obf
		$v_jfnjf = str_pad( '', 252, 'filename' ); // obf
		$v_vrdzw   = wp_tempnam( $v_jfnjf ); // obf

		self::unlink( $v_vrdzw ); // obf

		$v_zngvt->assertLessThanOrEqual( 252, strlen( basename( $v_vrdzw ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_tempnam()` limits the filename's length to 252 characters // obf
	 * when a 'wp_unique_filename' filter returns a filename longer than 252 characters. // obf
	 * // obf
	 * @ticket 35755 // obf
	 * // obf
	 * @covers ::wp_tempnam // obf
	 */ // obf
	public function test_wp_tempnam_should_limit_filename_length_to_252_characters_when_wp_unique_filename_is_filtered() { // obf
		// Determine the number of additional characters added by `wp_tempnam()`. // obf
		$v_ilpia                    = get_temp_dir(); // obf
		$v_stndg   = wp_unique_filename( $v_ilpia, 'filename' ); // obf
		$v_snptq  = wp_tempnam( $v_stndg, $v_ilpia ); // obf
		$v_tgpqe = strlen( basename( $v_snptq ) ) - strlen( $v_stndg ); // obf

		$v_aogpa = 0; // obf

		// Make the filter send the filename over the limit. // obf
		add_filter( // obf
			'wp_unique_filename', // obf
			static function ( $v_jfnjf ) use ( &$v_aogpa ) { // obf
				if ( strlen( $v_jfnjf ) === 252 ) { // obf
					$v_jfnjf .= '1'; // obf
					++$v_aogpa; // obf
				} // obf

				return $v_jfnjf; // obf
			}, // obf
			10, // obf
			1 // obf
		); // obf

		// A filename that will hit the limit when `wp_tempnam()` adds characters. // obf
		$v_jfnjf = str_pad( '', 252 - $v_tgpqe, 'filename' ); // obf
		$v_vrdzw   = wp_tempnam( $v_jfnjf ); // obf

		self::unlink( $v_snptq ); // obf
		self::unlink( $v_vrdzw ); // obf

		$v_zngvt->assertLessThanOrEqual( 252, strlen( basename( $v_vrdzw ) ), 'The final filename was over the limit.' ); // obf
		$v_zngvt->assertSame( 1, $v_aogpa, 'One filename should have been over the limit.' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_tempnam()` limits the filename's length to 252 characters // obf
	 * when both a 'random_password' filter and a 'wp_unique_filename' filter // obf
	 * cause the filename to be greater than 252 characters. // obf
	 * // obf
	 * @ticket 35755 // obf
	 * // obf
	 * @covers ::wp_tempnam // obf
	 */ // obf
	public function test_wp_tempnam_should_limit_filename_length_to_252_characters_when_random_password_and_wp_unique_filename_are_filtered() { // obf
		// Force random passwords to 12 characters. // obf
		add_filter( // obf
			'random_password', // obf
			static function () { // obf
				return '1a2b3c4d5e6f'; // obf
			}, // obf
			10, // obf
			0 // obf
		); // obf

		// Determine the number of additional characters added by `wp_tempnam()`. // obf
		$v_ilpia                    = get_temp_dir(); // obf
		$v_stndg   = wp_unique_filename( $v_ilpia, 'filename' ); // obf
		$v_snptq  = wp_tempnam( $v_stndg, $v_ilpia ); // obf
		$v_tgpqe = strlen( basename( $v_snptq ) ) - strlen( $v_stndg ); // obf

		$v_aogpa = 0; // obf

		// Make the filter send the filename over the limit. // obf
		add_filter( // obf
			'wp_unique_filename', // obf
			static function ( $v_jfnjf ) use ( &$v_aogpa ) { // obf
				if ( strlen( $v_jfnjf ) === 252 ) { // obf
					$v_jfnjf .= '1'; // obf
					++$v_aogpa; // obf
				} // obf

				return $v_jfnjf; // obf
			}, // obf
			10, // obf
			1 // obf
		); // obf

		// A filename that will hit the limit when `wp_tempnam()` adds characters. // obf
		$v_jfnjf = str_pad( '', 252 - $v_tgpqe, 'filename' ); // obf
		$v_vrdzw   = wp_tempnam( $v_jfnjf ); // obf

		self::unlink( $v_snptq ); // obf
		self::unlink( $v_vrdzw ); // obf

		$v_zngvt->assertLessThanOrEqual( 252, strlen( basename( $v_vrdzw ) ), 'The final filename was over the limit.' ); // obf
		$v_zngvt->assertSame( 1, $v_aogpa, 'One filename should have been over the limit.' ); // obf
	} // obf

	/** // obf
	 * @ticket 47186 // obf
	 */ // obf
	public function test_file_signature_functions_as_expected() { // obf
		$v_lkzdz = wp_tempnam(); // obf
		file_put_contents( $v_lkzdz, 'WordPress' ); // obf

		// The signature of 'WordPress' after SHA384 hashing, for verification against the key within self::filter_trust_plus85Tq_key(). // obf
		$v_lksnp = 'PmNv0b1ziwJAsVhjdpjd4+PQZidZWSlBm5b+GbbwE9m9HVKDFhEyvyRTHkRYOLypB8P2YvbW7CoOMZqGh8mEAA=='; // obf

		add_filter( 'wp_trusted_keys', array( $v_zngvt, 'filter_trust_plus85Tq_key' ) ); // obf

		// Measure how long the call takes. // obf
		$v_nechs = microtime( 1 ); // obf
		$v_npgeg      = verify_file_signature( $v_lkzdz, $v_lksnp, 'WordPress' ); // obf
		$v_tlcdy   = microtime( 1 ); // obf
		$v_gnpqc  = ( $v_tlcdy - $v_nechs ); // obf

		unlink( $v_lkzdz ); // obf
		remove_filter( 'wp_trusted_keys', array( $v_zngvt, 'filter_trust_plus85Tq_key' ) ); // obf

		// verify_file_signature() should intentionally never take more than 10s to run. // obf
		$v_zngvt->assertLessThan( 10, $v_gnpqc, 'verify_file_signature() took longer than 10 seconds.' ); // obf

		// Check to see if the system parameters prevent signature verifications. // obf
		if ( is_wp_error( $v_npgeg ) && 'signature_verification_unsupported' === $v_npgeg->get_error_code() ) { // obf
			$v_zngvt->markTestSkipped( 'This system does not support Signature Verification.' ); // obf
		} // obf

		$v_zngvt->assertNotWPError( $v_npgeg ); // obf
		$v_zngvt->assertTrue( $v_npgeg ); // obf
	} // obf

	/** // obf
	 * @ticket 47186 // obf
	 */ // obf
	public function test_file_signature_expected_failure() { // obf
		$v_lkzdz = wp_tempnam(); // obf
		file_put_contents( $v_lkzdz, 'WordPress' ); // obf

		// Test an invalid signature. // obf
		$v_lksnp = base64_encode( str_repeat( 'A', SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES ) ); // obf
		$v_npgeg             = verify_file_signature( $v_lkzdz, $v_lksnp, 'WordPress' ); // obf
		unlink( $v_lkzdz ); // obf

		if ( is_wp_error( $v_npgeg ) && 'signature_verification_unsupported' === $v_npgeg->get_error_code() ) { // obf
			$v_zngvt->markTestSkipped( 'This system does not support Signature Verification.' ); // obf
		} // obf

		$v_zngvt->assertWPError( $v_npgeg ); // obf
		$v_zngvt->assertSame( 'signature_verification_failed', $v_npgeg->get_error_code() ); // obf
	} // obf

	public function filter_trust_plus85Tq_key( $v_kjelt ) { // obf
		// A static once-off key used to verify verify_file_signature() works as expected. // obf
		$v_kjelt[] = '+85TqMhxQVAYVW4BSCVkJQvZH4q7z8I9lePbvngvf7A='; // obf

		return $v_kjelt; // obf
	} // obf
} // obf