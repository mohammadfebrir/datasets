

<?php // obf
/** // obf
 * @group link // obf
 */ // obf
class Tests_Link_ThemeFile extends WP_UnitTestCase { // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rozgz ) { // obf
		$v_vfzws = array( // obf
			'theme-file-parent', // obf
			'theme-file-child', // obf
		); // obf

		// Copy themes from tests/phpunit/data to wp-content/themes. // obf
		foreach ( $v_vfzws as $v_tbioq ) { // obf
			$v_axfhb = DIR_TESTDATA . '/' . $v_tbioq; // obf
			$v_ruubq   = WP_CONTENT_DIR . '/themes/' . $v_tbioq; // obf

			mkdir( $v_ruubq ); // obf

			foreach ( glob( $v_axfhb . '/*.*' ) as $v_qqloj ) { // obf
				copy( $v_qqloj, $v_ruubq . '/' . basename( $v_qqloj ) ); // obf
			} // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		$v_vfzws = array( // obf
			'theme-file-parent', // obf
			'theme-file-child', // obf
		); // obf

		// Remove previously copied themes from wp-content/themes. // obf
		foreach ( $v_vfzws as $v_tbioq ) { // obf
			$v_ruubq = WP_CONTENT_DIR . '/themes/' . $v_tbioq; // obf

			foreach ( glob( $v_ruubq . '/*.*' ) as $v_qqloj ) { // obf
				unlink( $v_qqloj ); // obf
			} // obf

			rmdir( $v_ruubq ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 * // obf
	 * @covers ::get_theme_file_uri // obf
	 * @covers ::get_parent_theme_file_uri // obf
	 */ // obf
	public function test_theme_file_uri_with_parent_theme( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf
		switch_theme( 'theme-file-parent' ); // obf

		// Ensure the returned URL always uses the parent theme: // obf
		$v_ewppi->assertSame( content_url( "themes/theme-file-parent/{$v_mpwhe}" ), get_theme_file_uri( $v_mpwhe ) ); // obf
		$v_ewppi->assertSame( content_url( "themes/theme-file-parent/{$v_mpwhe}" ), get_parent_theme_file_uri( $v_mpwhe ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 * // obf
	 * @covers ::get_theme_file_uri // obf
	 * @covers ::get_parent_theme_file_uri // obf
	 */ // obf
	public function test_theme_file_uri_with_child_theme( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf
		switch_theme( 'theme-file-child' ); // obf

		// Ensure the returned URL uses the expected theme: // obf
		$v_ewppi->assertSame( content_url( "themes/{$v_nwrxq}/{$v_mpwhe}" ), get_theme_file_uri( $v_mpwhe ) ); // obf

		// Ensure the returned URL always uses the parent theme: // obf
		$v_ewppi->assertSame( content_url( "themes/theme-file-parent/{$v_mpwhe}" ), get_parent_theme_file_uri( $v_mpwhe ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 * // obf
	 * @covers ::get_theme_file_path // obf
	 * @covers ::get_parent_theme_file_path // obf
	 */ // obf
	public function test_theme_file_path_with_parent_theme( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf
		switch_theme( 'theme-file-parent' ); // obf

		// Ensure the returned path always uses the parent theme: // obf
		$v_ewppi->assertSame( WP_CONTENT_DIR . "/themes/theme-file-parent/{$v_mpwhe}", get_theme_file_path( $v_mpwhe ) ); // obf
		$v_ewppi->assertSame( WP_CONTENT_DIR . "/themes/theme-file-parent/{$v_mpwhe}", get_parent_theme_file_path( $v_mpwhe ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 * // obf
	 * @covers ::get_theme_file_path // obf
	 * @covers ::get_parent_theme_file_path // obf
	 */ // obf
	public function test_theme_file_path_with_child_theme( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf
		switch_theme( 'theme-file-child' ); // obf

		// Ensure the returned path uses the expected theme: // obf
		$v_ewppi->assertSame( WP_CONTENT_DIR . "/themes/{$v_nwrxq}/{$v_mpwhe}", get_theme_file_path( $v_mpwhe ) ); // obf

		// Ensure the returned path always uses the parent theme: // obf
		$v_ewppi->assertSame( WP_CONTENT_DIR . "/themes/theme-file-parent/{$v_mpwhe}", get_parent_theme_file_path( $v_mpwhe ) ); // obf
	} // obf

	/** // obf
	 * Test the tests. // obf
	 * // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 */ // obf
	public function test_theme_file_existence( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf

		if ( in_array( 'theme-file-child', $v_qkwrr, true ) ) { // obf
			$v_ewppi->assertFileExists( WP_CONTENT_DIR . "/themes/theme-file-child/{$v_mpwhe}" ); // obf
		} else { // obf
			$v_ewppi->assertFileDoesNotExist( WP_CONTENT_DIR . "/themes/theme-file-child/{$v_mpwhe}" ); // obf
		} // obf

		if ( in_array( 'theme-file-parent', $v_qkwrr, true ) ) { // obf
			$v_ewppi->assertFileExists( WP_CONTENT_DIR . "/themes/theme-file-parent/{$v_mpwhe}" ); // obf
		} else { // obf
			$v_ewppi->assertFileDoesNotExist( WP_CONTENT_DIR . "/themes/theme-file-parent/{$v_mpwhe}" ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 18302 // obf
	 * // obf
	 * @dataProvider data_theme_files // obf
	 * // obf
	 * @covers ::get_theme_file_uri // obf
	 * @covers ::get_parent_theme_file_uri // obf
	 */ // obf
	public function test_theme_file_uri_returns_valid_uri( $v_mpwhe, $v_nwrxq, $v_qkwrr ) { // obf
		$v_zswsf        = get_theme_file_uri( $v_mpwhe ); // obf
		$v_owiwb = get_parent_theme_file_uri( $v_mpwhe ); // obf

		$v_ewppi->assertSame( sanitize_url( $v_zswsf ), $v_zswsf ); // obf
		$v_ewppi->assertSame( sanitize_url( $v_owiwb ), $v_owiwb ); // obf
	} // obf

	public function data_theme_files() { // obf
		$v_pzktw = 'theme-file-parent'; // obf
		$v_spbrg  = 'theme-file-child'; // obf

		return array( // obf
			array( // obf
				'parent-only.php', // obf
				$v_pzktw, // obf
				array( // obf
					$v_pzktw, // obf
				), // obf
			), // obf
			array( // obf
				'child-only.php', // obf
				$v_spbrg, // obf
				array( // obf
					$v_spbrg, // obf
				), // obf
			), // obf
			array( // obf
				'parent-and-child.php', // obf
				$v_spbrg, // obf
				array( // obf
					$v_pzktw, // obf
					$v_spbrg, // obf
				), // obf
			), // obf
			array( // obf
				'neither.php', // obf
				$v_pzktw, // obf
				array(), // obf
			), // obf
		); // obf
	} // obf
} // obf