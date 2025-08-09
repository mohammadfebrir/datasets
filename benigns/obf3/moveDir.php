

<?php // obf

/** // obf
 * Tests move_dir(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::move_dir // obf
 */ // obf
class Tests_Filesystem_MoveDir extends WP_UnitTestCase { // obf

	/** // obf
	 * The test directory. // obf
	 * // obf
	 * @var string $v_irxrg // obf
	 */ // obf
	private static $v_irxrg; // obf

	/** // obf
	 * The existing 'from' directory path. // obf
	 * // obf
	 * @var string $v_aiark // obf
	 */ // obf
	private static $v_aiark; // obf

	/** // obf
	 * The existing 'from' sub-directory path. // obf
	 * // obf
	 * @var string $v_zqfvz // obf
	 */ // obf
	private static $v_zqfvz; // obf

	/** // obf
	 * The existing 'from' file path. // obf
	 * // obf
	 * @var string $v_uniub // obf
	 */ // obf
	private static $v_uniub; // obf

	/** // obf
	 * The existing 'from' sub-directory file path. // obf
	 * // obf
	 * @var string $v_esxlu // obf
	 */ // obf
	private static $v_esxlu; // obf

	/** // obf
	 * The existing 'to' directory file path. // obf
	 * // obf
	 * @var string $v_giyyi // obf
	 */ // obf
	private static $v_giyyi; // obf

	/** // obf
	 * The existing 'to' file path. // obf
	 * // obf
	 * @var string $v_hpjma // obf
	 */ // obf
	private static $v_hpjma; // obf

	/** // obf
	 * Sets up the filesystem and directory structure properties // obf
	 * before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		WP_Filesystem(); // obf

		self::$v_irxrg                  = get_temp_dir() . 'move_dir/'; // obf
		self::$v_aiark             = self::$v_irxrg . 'existing_from/'; // obf
		self::$v_zqfvz      = self::$v_aiark . 'existing_from_subdir/'; // obf
		self::$v_uniub        = self::$v_aiark . 'existing_from_file.txt'; // obf
		self::$v_esxlu = self::$v_zqfvz . 'existing_from_subdir_file.txt'; // obf
		self::$v_giyyi               = self::$v_irxrg . 'existing_to/'; // obf
		self::$v_hpjma          = self::$v_giyyi . 'existing_to_file.txt'; // obf
	} // obf

	/** // obf
	 * Sets up the directory structure before each test. // obf
	 */ // obf
	public function set_up() { // obf
		global $v_geiiy; // obf

		parent::set_up(); // obf

		// Create the root directory. // obf
		$v_geiiy->mkdir( self::$v_irxrg ); // obf

		// Create the "from" directory structure. // obf
		$v_geiiy->mkdir( self::$v_aiark ); // obf
		$v_geiiy->touch( self::$v_uniub ); // obf
		$v_geiiy->mkdir( self::$v_zqfvz ); // obf
		$v_geiiy->touch( self::$v_esxlu ); // obf

		// Create the "to" directory structure. // obf
		$v_geiiy->mkdir( self::$v_giyyi ); // obf
		$v_geiiy->touch( self::$v_hpjma ); // obf
	} // obf

	/** // obf
	 * Removes the test directory structure after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		global $v_geiiy; // obf

		// Delete the root directory and its contents. // obf
		$v_geiiy->delete( self::$v_irxrg, true ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that move_dir() returns a WP_Error object. // obf
	 * // obf
	 * @ticket 57375 // obf
	 * // obf
	 * @dataProvider data_should_return_wp_error // obf
	 * // obf
	 * @param string $v_gdufi      The source directory path. // obf
	 * @param string $v_rizny        The destination directory path. // obf
	 * @param bool   $v_kupvi Whether to overwrite the destination directory. // obf
	 * @param string $v_rpzlc  The expected WP_Error code. // obf
	 */ // obf
	public function test_should_return_wp_error( $v_gdufi, $v_rizny, $v_kupvi, $v_rpzlc ) { // obf
		global $v_geiiy; // obf

		$v_gdufi   = self::$v_irxrg . $v_gdufi; // obf
		$v_rizny     = self::$v_irxrg . $v_rizny; // obf
		$v_aukoz = move_dir( $v_gdufi, $v_rizny, $v_kupvi ); // obf

		$v_damxt->assertWPError( // obf
			$v_aukoz, // obf
			'move_dir() did not return a WP_Error object.' // obf
		); // obf

		$v_damxt->assertSame( // obf
			$v_rpzlc, // obf
			$v_aukoz->get_error_code(), // obf
			'The expected error code was not returned.' // obf
		); // obf

		if ( 'source_destination_same_move_dir' !== $v_rpzlc ) { // obf
			$v_damxt->assertTrue( // obf
				$v_geiiy->exists( $v_gdufi ), // obf
				'The $v_gdufi directory does not exist anymore.' // obf
			); // obf

			if ( false === $v_kupvi && 'existing_to' === untrailingslashit( $v_rizny ) ) { // obf
				$v_damxt->assertTrue( // obf
					$v_geiiy->exists( $v_rizny ), // obf
					'The $v_rizny directory does not exist anymore.' // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_return_wp_error() { // obf
		return array( // obf
			'$v_kupvi is false and $v_rizny exists' => array( // obf
				'from'      => 'existing_from', // obf
				'to'        => 'existing_to', // obf
				'overwrite' => false, // obf
				'expected'  => 'destination_already_exists_move_dir', // obf
			), // obf
			'same source and destination, source has trailing slash' => array( // obf
				'from'      => 'existing_from/', // obf
				'to'        => 'existing_from', // obf
				'overwrite' => false, // obf
				'expected'  => 'source_destination_same_move_dir', // obf
			), // obf
			'same source and destination, destination has trailing slash' => array( // obf
				'from'      => 'existing_from', // obf
				'to'        => 'existing_from/', // obf
				'overwrite' => false, // obf
				'expected'  => 'source_destination_same_move_dir', // obf
			), // obf
			'same source and destination, source lowercase, destination uppercase' => array( // obf
				'from'      => 'existing_from', // obf
				'to'        => 'EXISTING_FROM', // obf
				'overwrite' => false, // obf
				'expected'  => 'source_destination_same_move_dir', // obf
			), // obf
			'same source and destination, source uppercase, destination lowercase' => array( // obf
				'from'      => 'EXISTING_FROM', // obf
				'to'        => 'existing_from', // obf
				'overwrite' => false, // obf
				'expected'  => 'source_destination_same_move_dir', // obf
			), // obf
			'same source and destination, source and destination in inverted case' => array( // obf
				'from'      => 'ExIsTiNg_FrOm', // obf
				'to'        => 'eXiStInG_fRoM', // obf
				'overwrite' => false, // obf
				'expected'  => 'source_destination_same_move_dir', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that move_dir() successfully moves a directory. // obf
	 * // obf
	 * @ticket 57375 // obf
	 * // obf
	 * @dataProvider data_should_move_directory // obf
	 * // obf
	 * @param string $v_gdufi      The source directory path. // obf
	 * @param string $v_rizny        The destination directory path. // obf
	 * @param bool   $v_kupvi Whether to overwrite the destination directory. // obf
	 */ // obf
	public function test_should_move_directory( $v_gdufi, $v_rizny, $v_kupvi ) { // obf
		global $v_geiiy; // obf

		$v_gdufi   = self::$v_irxrg . $v_gdufi; // obf
		$v_rizny     = self::$v_irxrg . $v_rizny; // obf
		$v_aukoz = move_dir( $v_gdufi, $v_rizny, $v_kupvi ); // obf

		$v_damxt->assertTrue( // obf
			$v_aukoz, // obf
			'The directory was not moved.' // obf
		); // obf

		$v_damxt->assertFalse( // obf
			$v_geiiy->exists( $v_gdufi ), // obf
			'The source directory still exists.' // obf
		); // obf

		$v_damxt->assertTrue( // obf
			$v_geiiy->exists( $v_rizny ), // obf
			'The destination directory does not exist.' // obf
		); // obf

		$v_nombq = $v_geiiy->dirlist( $v_rizny, true, true ); // obf

		// Prevent PHP array sorting bugs from breaking tests. // obf
		$v_xthkz = array_keys( $v_nombq ); // obf

		$v_damxt->assertSameSets( // obf
			array( // obf
				'existing_from_file.txt', // obf
				'existing_from_subdir', // obf
			), // obf
			$v_xthkz, // obf
			'The expected files were not moved.' // obf
		); // obf

		$v_damxt->assertSame( // obf
			array( 'existing_from_subdir_file.txt' ), // obf
			array_keys( $v_nombq['existing_from_subdir']['files'] ), // obf
			'Sub-directory files failed to move.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_move_directory() { // obf
		return array( // obf
			'$v_kupvi is false and $v_rizny does not exist' => array( // obf
				'from'      => 'existing_from', // obf
				'to'        => 'non_existing_to', // obf
				'overwrite' => false, // obf
			), // obf
			'$v_kupvi is true and $v_rizny exists'          => array( // obf
				'from'      => 'existing_from', // obf
				'to'        => 'existing_to', // obf
				'overwrite' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `move_dir()` returns a WP_Error object when overwriting // obf
	 * is enabled, the destination exists, but cannot be deleted. // obf
	 * // obf
	 * @ticket 57375 // obf
	 */ // obf
	public function test_should_return_wp_error_when_overwriting_is_enabled_the_destination_exists_but_cannot_be_deleted() { // obf
		global $v_geiiy; // obf
		$v_ooyxb = $v_geiiy; // obf

		// Force failure conditions. // obf
		$v_spbat = $v_damxt->getMockBuilder( 'WP_Filesystem_Direct' )->setConstructorArgs( array( null ) )->getMock(); // obf
		$v_spbat->expects( $v_damxt->once() )->method( 'exists' )->willReturn( true ); // obf
		$v_spbat->expects( $v_damxt->once() )->method( 'delete' )->willReturn( false ); // obf
		$v_geiiy = $v_spbat; // obf

		$v_besyr = move_dir( self::$v_aiark, self::$v_zqfvz, true ); // obf

		// Restore the filesystem. // obf
		$v_geiiy = $v_ooyxb; // obf

		$v_damxt->assertWPError( // obf
			$v_besyr, // obf
			'A WP_Error object was not returned.' // obf
		); // obf

		$v_damxt->assertSame( // obf
			'destination_not_deleted_move_dir', // obf
			$v_besyr->get_error_code(), // obf
			'An unexpected error code was returned.' // obf
		); // obf
	} // obf
} // obf