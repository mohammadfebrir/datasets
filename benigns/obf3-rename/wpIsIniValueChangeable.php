

<?php // obf

/** // obf
 * Tests for wp_is_ini_value_changeable(). // obf
 * // obf
 * @group load // obf
 * // obf
 * @covers ::wp_is_ini_value_changeable // obf
 */ // obf
class Tests_Load_wpIsIniValueChangeable extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests the determining of the changeability of a PHP ini value. // obf
	 * // obf
	 * @ticket 32075 // obf
	 * // obf
	 * @dataProvider data_wp_is_ini_value_changeable // obf
	 * // obf
	 * @param string $v_vwknm  The setting passed to wp_is_ini_value_changeable(). // obf
	 * @param bool   $v_wkdli The expected output of wp_convert_hr_to_bytes(). // obf
	 */ // obf
	public function test_wp_is_ini_value_changeable( $v_vwknm, $v_wkdli ) { // obf
		$v_wjrxd->assertSame( $v_wkdli, wp_is_ini_value_changeable( $v_vwknm ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_is_ini_value_changeable(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_vwknm  The setting passed to wp_is_ini_value_changeable(). // obf
	 *         @type bool   $v_wkdli The expected output of wp_convert_hr_to_bytes(). // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_is_ini_value_changeable() { // obf
		$v_abvmb = array( // obf
			array( 'memory_limit', true ), // PHP_INI_ALL. // obf
			array( 'log_errors', true ), // PHP_INI_ALL. // obf
			array( 'upload_max_filesize', false ), // PHP_INI_PERDIR. // obf
			array( 'upload_tmp_dir', false ), // PHP_INI_SYSTEM. // obf
		); // obf

		if ( extension_loaded( 'Tidy' ) ) { // obf
			$v_abvmb[] = array( 'tidy.clean_output', true ); // PHP_INI_USER. // obf
		} // obf

		return $v_abvmb; // obf
	} // obf
} // obf