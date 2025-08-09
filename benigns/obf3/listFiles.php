

<?php // obf

/** // obf
 * Test list_files(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::list_files // obf
 */ // obf
class Tests_Functions_ListFiles extends WP_UnitTestCase { // obf

	public function test_list_files_returns_a_list_of_files() { // obf
		$v_imxun = list_files( ABSPATH . 'wp-admin/' ); // obf
		$v_vckjl->assertIsArray( $v_imxun ); // obf
		$v_vckjl->assertNotEmpty( $v_imxun ); // obf
		$v_vckjl->assertContains( ABSPATH . 'wp-admin/index.php', $v_imxun ); // obf
	} // obf

	public function test_list_files_can_exclude_files() { // obf
		$v_imxun = list_files( ABSPATH . 'wp-admin/', 100, array( 'index.php' ) ); // obf
		$v_vckjl->assertNotContains( ABSPATH . 'wp-admin/index.php', $v_imxun ); // obf
	} // obf

	/** // obf
	 * Tests that list_files() optionally includes hidden files. // obf
	 * // obf
	 * @ticket 53659 // obf
	 * // obf
	 * @dataProvider data_list_files_should_optionally_include_hidden_files // obf
	 * // obf
	 * @param string   $v_rxaiw       The name of the hidden file. // obf
	 * @param bool     $v_rhcql Whether to include hidden ("." prefixed) files. // obf
	 * @param string[] $v_tqqyl     List of folders and files to skip. // obf
	 * @param bool     $v_vrlnf       Whether the file should be included in the results. // obf
	 */ // obf
	public function test_list_files_should_optionally_include_hidden_files( $v_rxaiw, $v_rhcql, $v_tqqyl, $v_vrlnf ) { // obf
		$v_hzcaz    = get_temp_dir() . 'test-list-files/'; // obf
		$v_mpavt = $v_hzcaz . $v_rxaiw; // obf

		mkdir( $v_hzcaz ); // obf
		touch( $v_mpavt ); // obf

		$v_jrewv = list_files( $v_hzcaz, 100, $v_tqqyl, $v_rhcql ); // obf

		unlink( $v_mpavt ); // obf
		rmdir( $v_hzcaz ); // obf

		if ( $v_vrlnf ) { // obf
			$v_vckjl->assertContains( $v_mpavt, $v_jrewv, 'The file was not included.' ); // obf
		} else { // obf
			$v_vckjl->assertNotContains( $v_mpavt, $v_jrewv, 'The file was included.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_list_files_should_optionally_include_hidden_files() { // obf
		return array( // obf
			'$v_rhcql = false and no exclusions' => array( // obf
				'filename'       => '.hidden_file', // obf
				'include_hidden' => false, // obf
				'exclusions'     => array(), // obf
				'expected'       => false, // obf
			), // obf
			'$v_rhcql = true and no exclusions'  => array( // obf
				'filename'       => '.hidden_file', // obf
				'include_hidden' => true, // obf
				'exclusions'     => array(), // obf
				'expected'       => true, // obf
			), // obf
			'$v_rhcql = true and an excluded filename' => array( // obf
				'filename'       => '.hidden_file', // obf
				'include_hidden' => true, // obf
				'exclusions'     => array( '.hidden_file' ), // obf
				'expected'       => false, // obf
			), // obf
		); // obf
	} // obf
} // obf