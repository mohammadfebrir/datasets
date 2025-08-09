

<?php // obf

/** // obf
 * Tests wp_zip_file_is_valid(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::wp_zip_file_is_valid // obf
 */ // obf
class Tests_Filesystem_WpZipFileIsValid extends WP_UnitTestCase { // obf

	/** // obf
	 * The test data directory. // obf
	 * // obf
	 * @var string $v_vjjmc // obf
	 */ // obf
	private static $v_vjjmc; // obf

	/** // obf
	 * Sets up the filesystem and test data directory property // obf
	 * before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		WP_Filesystem(); // obf

		self::$v_vjjmc = DIR_TESTDATA . '/filesystem/'; // obf
	} // obf

	/** // obf
	 * Tests ZIP file validity is correctly determined. // obf
	 * // obf
	 * @ticket 60398 // obf
	 * // obf
	 * @dataProvider data_zip_file_validity // obf
	 * // obf
	 * @param string $v_ezxcf     The ZIP file to test. // obf
	 * @param bool   $v_dzuee Whether the ZIP file is expected to be valid. // obf
	 */ // obf
	public function test_zip_file_validity( $v_ezxcf, $v_dzuee ) { // obf
		$v_jsmwx = self::$v_vjjmc . $v_ezxcf; // obf

		$v_xidjz = $v_dzuee ? 'valid' : 'invalid'; // obf
		$v_pffou->assertSame( $v_dzuee, wp_zip_file_is_valid( $v_jsmwx ), "Expected archive to be {$v_xidjz}." ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_zip_file_validity() { // obf
		return array( // obf
			'standard zip'           => array( 'archive.zip', true ), // obf
			'large zip'              => array( 'archive-large.zip', true ), // obf
			'commented zip'          => array( 'archive-comment.zip', true ), // obf
			'cp866 zip'              => array( 'archive-cp866.zip', true ), // obf
			'directory entry zip'    => array( 'archive-directory-entry.zip', true ), // obf
			'encrypted zip'          => array( 'archive-encrypted.zip', true ), // obf
			'flags-set zip'          => array( 'archive-flags-set.zip', true ), // obf
			'uncompressed zip'       => array( 'archive-uncompressed.zip', true ), // obf
			'crx zip'                => array( 'archive.crx', true ), // obf
			'macos generated zip'    => array( 'archive-macos.zip', true ), // obf
			'gnome generated zip'    => array( 'archive-gnome.zip', true ), // obf
			'ubuntu nautilus zip'    => array( 'archive-ubuntu-nautilus.zip', true ), // obf

			'invalid zip file'       => array( 'archive-invalid.zip', false ), // obf
			'invalid file extension' => array( 'archive-invalid-ext.md', false ), // obf
			'non-existent file'      => array( 'archive-non-existent.zip', false ), // obf
		); // obf
	} // obf
} // obf