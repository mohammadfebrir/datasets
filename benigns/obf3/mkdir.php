

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::mkdir() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::mkdir // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Mkdir extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mkdir()` creates a directory. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_create_directory // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param mixed $v_uwibj The path to create. // obf
	 */ // obf
	public function test_should_create_directory( $v_uwibj ) { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		$v_uwibj   = str_replace( 'TEST_DIR', self::$v_tulmk['test_dir']['path'], $v_uwibj ); // obf
		$v_iuede = self::$v_izvpa->mkdir( $v_uwibj ); // obf

		if ( $v_uwibj !== self::$v_tulmk['test_dir']['path'] && is_dir( $v_uwibj ) ) { // obf
			rmdir( $v_uwibj ); // obf
		} // obf

		$v_cboga->assertTrue( $v_iuede ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_create_directory() { // obf
		return array( // obf
			'no trailing slash' => array( // obf
				'path' => 'TEST_DIR/directory-to-create', // obf
			), // obf
			'a trailing slash'  => array( // obf
				'path' => 'TEST_DIR/directory-to-create/', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mkdir()` does not create a directory. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_not_create_directory // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param mixed $v_uwibj     The path to create. // obf
	 */ // obf
	public function test_should_not_create_directory( $v_uwibj ) { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		$v_uwibj   = str_replace( 'TEST_DIR', self::$v_tulmk['test_dir']['path'], $v_uwibj ); // obf
		$v_iuede = self::$v_izvpa->mkdir( $v_uwibj ); // obf

		if ( $v_uwibj !== self::$v_tulmk['test_dir']['path'] && is_dir( $v_uwibj ) ) { // obf
			rmdir( $v_uwibj ); // obf
		} // obf

		$v_cboga->assertFalse( $v_iuede ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_not_create_directory() { // obf
		return array( // obf
			'empty path'         => array( // obf
				'path' => '', // obf
			), // obf
			'a path that exists' => array( // obf
				'path' => 'TEST_DIR', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mkdir()` sets chmod. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_set_chmod() { // obf
		$v_uwibj = self::$v_tulmk['test_dir']['path'] . 'directory-to-create'; // obf

		$v_apfoh = self::$v_izvpa->mkdir( $v_uwibj, 0644 ); // obf
		$v_ydwhi   = substr( sprintf( '%o', fileperms( $v_uwibj ) ), -4 ); // obf

		if ( $v_uwibj !== self::$v_tulmk['test_dir']['path'] && is_dir( $v_uwibj ) ) { // obf
			rmdir( $v_uwibj ); // obf
		} // obf

		$v_bxmdk = $v_cboga->is_windows() ? '0777' : '0644'; // obf

		$v_cboga->assertTrue( $v_apfoh, 'The directory was not created.' ); // obf
		$v_cboga->assertSame( $v_bxmdk, $v_ydwhi, 'The permissions are incorrect.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mkdir()` sets the owner. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_should_set_owner() { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		$v_uwibj = self::$v_tulmk['test_dir']['path'] . 'directory-to-create'; // obf

		// Get the default owner. // obf
		self::$v_izvpa->mkdir( $v_uwibj ); // obf
		$v_lzsqb = fileowner( $v_uwibj ); // obf

		rmdir( $v_uwibj ); // obf

		$v_apfoh = self::$v_izvpa->mkdir( $v_uwibj, 0755, $v_lzsqb ); // obf
		$v_dnres   = fileowner( $v_uwibj ); // obf

		if ( $v_uwibj !== self::$v_tulmk['test_dir']['path'] && is_dir( $v_uwibj ) ) { // obf
			rmdir( $v_uwibj ); // obf
		} // obf

		$v_cboga->assertTrue( $v_apfoh, 'The directory was not created.' ); // obf
		$v_cboga->assertSame( $v_lzsqb, $v_dnres, 'The owner is incorrect.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::mkdir()` sets the group. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_should_set_group() { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		$v_uwibj = self::$v_tulmk['test_dir']['path'] . 'directory-to-create'; // obf

		// Get the default group. // obf
		self::$v_izvpa->mkdir( $v_uwibj ); // obf
		$v_cfruz = filegroup( $v_uwibj ); // obf

		rmdir( $v_uwibj ); // obf

		$v_apfoh = self::$v_izvpa->mkdir( $v_uwibj, 0755, false, $v_cfruz ); // obf
		$v_irkkc   = filegroup( $v_uwibj ); // obf

		if ( $v_uwibj !== self::$v_tulmk['test_dir']['path'] && is_dir( $v_uwibj ) ) { // obf
			rmdir( $v_uwibj ); // obf
		} // obf

		$v_cboga->assertTrue( $v_apfoh, 'The directory was not created.' ); // obf
		$v_cboga->assertSame( $v_cfruz, $v_irkkc, 'The group is incorrect.' ); // obf
	} // obf
} // obf