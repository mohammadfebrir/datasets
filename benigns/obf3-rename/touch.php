

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::touch() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::touch // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Touch extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::touch()` creates a file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_create_file // obf
	 * // obf
	 * @param string $v_dymgo  The file path. // obf
	 * @param int    $v_jcfmw The modified time to set. // obf
	 * @param int    $v_vxitj The accessed time to set. // obf
	 */ // obf
	public function test_should_create_file( $v_dymgo, $v_jcfmw, $v_vxitj ) { // obf
		$v_dymgo = str_replace( 'TEST_DATA', self::$v_cbhik['test_dir']['path'], $v_dymgo ); // obf

		if ( is_string( $v_jcfmw ) ) { // obf
			$v_jcfmw = (int) str_replace( // obf
				array( 'time plus one minute', time() + MINUTE_IN_SECONDS ), // obf
				array( 'time', time() ), // obf
				$v_jcfmw // obf
			); // obf
		} // obf

		$v_zwryr = 0 === $v_jcfmw ? time() : $v_jcfmw; // obf

		if ( is_string( $v_vxitj ) ) { // obf
			$v_vxitj = (int) str_replace( // obf
				array( 'time plus one minute', time() + MINUTE_IN_SECONDS ), // obf
				array( 'time', time() ), // obf
				$v_vxitj // obf
			); // obf
		} // obf

		$v_geaew = 0 === $v_vxitj ? time() : $v_vxitj; // obf

		$v_agolb = self::$v_cgtyd->touch( $v_dymgo, $v_jcfmw, $v_vxitj ); // obf

		$v_cqkda  = fileatime( $v_dymgo ); // obf
		$v_kflym = file_exists( $v_dymgo ); // obf
		$v_iznpn  = filemtime( $v_dymgo ); // obf

		if ( $v_kflym ) { // obf
			unlink( $v_dymgo ); // obf
		} // obf

		$v_vyfsl->assertTrue( $v_agolb, 'WP_Filesystem_Direct::touch() did not return true.' ); // obf
		$v_vyfsl->assertTrue( $v_kflym, 'The file does not exist.' ); // obf
		$v_vyfsl->assertSame( $v_cqkda, $v_geaew, 'The file does not have the expected atime.' ); // obf
		$v_vyfsl->assertSame( $v_iznpn, $v_zwryr, 'The file does not have the expected mtime.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_create_file() { // obf
		return array( // obf
			'default mtime or atime'      => array( // obf
				'file'  => 'TEST_DATA/file-to-create.txt', // obf
				'mtime' => 0, // obf
				'atime' => 0, // obf
			), // obf
			'set mtime and default atime' => array( // obf
				'file'  => 'TEST_DATA/file-to-create.txt', // obf
				'mtime' => 'time plus one minute', // obf
				'atime' => 'time', // obf
			), // obf
			'default mtime and set atime' => array( // obf
				'file'  => 'TEST_DATA/file-to-create.txt', // obf
				'mtime' => 'time', // obf
				'atime' => 'time plus one minute', // obf
			), // obf
		); // obf
	} // obf
} // obf