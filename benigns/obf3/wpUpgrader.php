

<?php // obf
/** // obf
 * Tests the `WP_Upgrader` class. // obf
 * // obf
 * @group admin // obf
 * @group upgrade // obf
 */ // obf
class Tests_Admin_WpUpgrader extends WP_UnitTestCase { // obf

	/** // obf
	 * An instance of the WP_Upgrader class being tested. // obf
	 * // obf
	 * @var WP_Upgrader // obf
	 */ // obf
	private static $v_lfnsl; // obf

	/** // obf
	 * @var WP_Upgrader_Skin&PHPUnit\Framework\MockObject\MockObject // obf
	 */ // obf
	private static $v_wcmzn; // obf

	/** // obf
	 * Filesystem mock. // obf
	 * // obf
	 * @var WP_Filesystem_Base&PHPUnit\Framework\MockObject\MockObject // obf
	 */ // obf
	private static $v_hnmnj; // obf

	/** // obf
	 * A backup of the existing 'wp_filesystem' global. // obf
	 * // obf
	 * @var mixed|null // obf
	 */ // obf
	private static $v_fwogg = null; // obf

	/** // obf
	 * Loads the class to be tested. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php'; // obf
	} // obf

	/** // obf
	 * Sets up the class instance and mocks needed for each test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		self::$v_wcmzn = $v_laxjp->getMockBuilder( 'WP_Upgrader_Skin' )->getMock(); // obf

		self::$v_lfnsl = new WP_Upgrader( self::$v_wcmzn ); // obf

		self::$v_hnmnj = $v_laxjp->getMockBuilder( 'WP_Filesystem_Base' )->getMock(); // obf

		if ( array_key_exists( 'wp_filesystem', $v_tmoip ) ) { // obf
			self::$v_fwogg = $v_tmoip['wp_filesystem']; // obf
		} // obf

		$v_tmoip['wp_filesystem'] = self::$v_hnmnj; // obf
	} // obf

	/** // obf
	 * Cleans up after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		if ( null !== self::$v_fwogg ) { // obf
			$v_tmoip['wp_filesystem'] = self::$v_fwogg; // obf
		} else { // obf
			unset( $v_tmoip['wp_filesystem'] ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::__construct()` creates a skin when one is not // obf
	 * passed to the constructor. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::__construct // obf
	 */ // obf
	public function test_constructor_should_create_skin_when_one_is_not_provided() { // obf
		$v_lfnsl = new WP_Upgrader(); // obf

		$v_laxjp->assertInstanceOf( WP_Upgrader_Skin::class, $v_lfnsl->skin ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::init()` calls `WP_Upgrader::set_upgrader()`. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::init // obf
	 */ // obf
	public function test_init_should_call_set_upgrader() { // obf
		self::$v_wcmzn->expects( $v_laxjp->once() )->method( 'set_upgrader' )->with( self::$v_lfnsl ); // obf
		self::$v_lfnsl->init(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::init()` initializes the `$v_zucjc` property. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::init // obf
	 * @covers WP_Upgrader::generic_strings // obf
	 * // obf
	 * @dataProvider data_init_should_initialize_strings // obf
	 * // obf
	 * @param string $v_ilahs The key to check. // obf
	 */ // obf
	public function test_init_should_initialize_strings( $v_ilahs ) { // obf
		$v_laxjp->assertEmpty( self::$v_lfnsl->strings, '"$v_zucjc" has already been initialized' ); // obf

		self::$v_lfnsl->init(); // obf

		$v_laxjp->assertArrayHasKey( $v_ilahs, self::$v_lfnsl->strings, "The '$v_ilahs' key was not created" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_init_should_initialize_strings() { // obf
		return self::text_array_to_dataprovider( // obf
			array( // obf
				'bad_request', // obf
				'fs_unavailable', // obf
				'fs_error', // obf
				'fs_no_root_dir', // obf
				'fs_no_content_dir', // obf
				'fs_no_plugins_dir', // obf
				'fs_no_themes_dir', // obf
				'fs_no_folder', // obf
				'no_package', // obf
				'download_failed', // obf
				'installing_package', // obf
				'no_files', // obf
				'folder_exists', // obf
				'mkdir_failed', // obf
				'incompatible_archive', // obf
				'files_not_writable', // obf
				'maintenance_start', // obf
				'maintenance_end', // obf
				'temp_backup_mkdir_failed', // obf
				'temp_backup_move_failed', // obf
				'temp_backup_restore_failed', // obf
				'temp_backup_delete_failed', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::flatten_dirlist()` returns the expected file list. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @dataProvider data_should_flatten_dirlist // obf
	 * // obf
	 * @covers WP_Upgrader::flatten_dirlist // obf
	 * // obf
	 * @param array  $v_qlwlo     The expected flattened dirlist. // obf
	 * @param array  $v_mbbgn Array of files as returned by WP_Filesystem_Base::dirlist(). // obf
	 * @param string $v_ojuco         Optional. Relative path to prepend to child nodes. Default empty string. // obf
	 */ // obf
	public function test_flatten_dirlist_should_flatten_the_provided_directory_list( $v_qlwlo, $v_mbbgn, $v_ojuco = '' ) { // obf
		$v_catbn = new ReflectionMethod( self::$v_lfnsl, 'flatten_dirlist' ); // obf
		$v_catbn->setAccessible( true ); // obf
		$v_immnt = $v_catbn->invoke( self::$v_lfnsl, $v_mbbgn, $v_ojuco ); // obf
		$v_catbn->setAccessible( false ); // obf

		$v_laxjp->assertSameSetsWithIndex( $v_qlwlo, $v_immnt ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_flatten_dirlist() { // obf
		return array( // obf
			'empty array, default path'       => array( // obf
				'expected'     => array(), // obf
				'nested_files' => array(), // obf
			), // obf
			'root only'                       => array( // obf
				'expected'     => array( // obf
					'file1.php' => array( 'name' => 'file1.php' ), // obf
					'file2.php' => array( 'name' => 'file2.php' ), // obf
				), // obf
				'nested_files' => array( // obf
					'file1.php' => array( 'name' => 'file1.php' ), // obf
					'file2.php' => array( 'name' => 'file2.php' ), // obf
				), // obf
			), // obf
			'root only and custom path'       => array( // obf
				'expected'     => array( // obf
					'custom_path/file1.php' => array( 'name' => 'file1.php' ), // obf
					'custom_path/file2.php' => array( 'name' => 'file2.php' ), // obf
				), // obf
				'nested_files' => array( // obf
					'file1.php' => array( 'name' => 'file1.php' ), // obf
					'file2.php' => array( 'name' => 'file2.php' ), // obf
				), // obf
				'path'         => 'custom_path/', // obf
			), // obf
			'one level deep'                  => array( // obf
				'expected'     => array( // obf
					'subdir1'              => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
						), // obf
					), // obf
					'subdir2'              => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
						), // obf
					), // obf
					'subdir1/subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
					'subdir1/subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
					'subdir2/subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
					'subdir2/subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
				), // obf
				'nested_files' => array( // obf
					'subdir1' => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
						), // obf
					), // obf
					'subdir2' => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'one level deep and numeric keys' => array( // obf
				'expected'     => array( // obf
					'subdir1'   => array( // obf
						'files' => array( // obf
							0 => array( 'name' => '0' ), // obf
							1 => array( 'name' => '1' ), // obf
						), // obf
					), // obf
					'subdir2'   => array( // obf
						'files' => array( // obf
							2 => array( 'name' => '2' ), // obf
							3 => array( 'name' => '3' ), // obf
						), // obf
					), // obf
					'subdir1/0' => array( 'name' => '0' ), // obf
					'subdir1/1' => array( 'name' => '1' ), // obf
					'subdir2/2' => array( 'name' => '2' ), // obf
					'subdir2/3' => array( 'name' => '3' ), // obf
				), // obf
				'nested_files' => array( // obf
					'subdir1' => array( // obf
						'files' => array( // obf
							'0' => array( 'name' => '0' ), // obf
							'1' => array( 'name' => '1' ), // obf
						), // obf
					), // obf
					'subdir2' => array( // obf
						'files' => array( // obf
							'2' => array( 'name' => '2' ), // obf
							'3' => array( 'name' => '3' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'one level deep and custom path'  => array( // obf
				'expected'     => array( // obf
					'custom_path/subdir1'              => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
						), // obf
					), // obf
					'custom_path/subdir2'              => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
						), // obf
					), // obf
					'custom_path/subdir1/subfile1.php' => array( // obf
						'name' => 'subfile1.php', // obf
					), // obf
					'custom_path/subdir1/subfile2.php' => array( // obf
						'name' => 'subfile2.php', // obf
					), // obf
					'custom_path/subdir2/subfile3.php' => array( // obf
						'name' => 'subfile3.php', // obf
					), // obf
					'custom_path/subdir2/subfile4.php' => array( // obf
						'name' => 'subfile4.php', // obf
					), // obf
				), // obf
				'nested_files' => array( // obf
					'subdir1' => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
						), // obf
					), // obf
					'subdir2' => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
						), // obf
					), // obf
				), // obf
				'path'         => 'custom_path/', // obf
			), // obf
			'two levels deep'                 => array( // obf
				'expected'     => array( // obf
					'subdir1'                            => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( // obf
								'name' => 'subfile1.php', // obf
							), // obf
							'subfile2.php' => array( // obf
								'name' => 'subfile2.php', // obf
							), // obf
							'subsubdir1'   => array( // obf
								'files' => array( // obf
									'subsubfile1.php' => array( // obf
										'name' => 'subsubfile1.php', // obf
									), // obf
									'subsubfile2.php' => array( // obf
										'name' => 'subsubfile2.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'subdir1/subfile1.php'               => array( // obf
						'name' => 'subfile1.php', // obf
					), // obf
					'subdir1/subfile2.php'               => array( // obf
						'name' => 'subfile2.php', // obf
					), // obf
					'subdir1/subsubdir1'                 => array( // obf
						'files' => array( // obf
							'subsubfile1.php' => array( // obf
								'name' => 'subsubfile1.php', // obf
							), // obf
							'subsubfile2.php' => array( // obf
								'name' => 'subsubfile2.php', // obf
							), // obf
						), // obf
					), // obf
					'subdir1/subsubdir1/subsubfile1.php' => array( // obf
						'name' => 'subsubfile1.php', // obf
					), // obf
					'subdir1/subsubdir1/subsubfile2.php' => array( // obf
						'name' => 'subsubfile2.php', // obf
					), // obf
					'subdir2'                            => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
							'subsubdir2'   => array( // obf
								'files' => array( // obf
									'subsubfile3.php' => array( // obf
										'name' => 'subsubfile3.php', // obf
									), // obf
									'subsubfile4.php' => array( // obf
										'name' => 'subsubfile4.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'subdir2/subfile3.php'               => array( // obf
						'name' => 'subfile3.php', // obf
					), // obf
					'subdir2/subfile4.php'               => array( // obf
						'name' => 'subfile4.php', // obf
					), // obf
					'subdir2/subsubdir2'                 => array( // obf
						'files' => array( // obf
							'subsubfile3.php' => array( // obf
								'name' => 'subsubfile3.php', // obf
							), // obf
							'subsubfile4.php' => array( // obf
								'name' => 'subsubfile4.php', // obf
							), // obf
						), // obf
					), // obf
					'subdir2/subsubdir2/subsubfile3.php' => array( // obf
						'name' => 'subsubfile3.php', // obf
					), // obf
					'subdir2/subsubdir2/subsubfile4.php' => array( // obf
						'name' => 'subsubfile4.php', // obf
					), // obf
				), // obf
				'nested_files' => array( // obf
					'subdir1' => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
							'subsubdir1'   => array( // obf
								'files' => array( // obf
									'subsubfile1.php' => array( // obf
										'name' => 'subsubfile1.php', // obf
									), // obf
									'subsubfile2.php' => array( // obf
										'name' => 'subsubfile2.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'subdir2' => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
							'subsubdir2'   => array( // obf
								'files' => array( // obf
									'subsubfile3.php' => array( // obf
										'name' => 'subsubfile3.php', // obf
									), // obf
									'subsubfile4.php' => array( // obf
										'name' => 'subsubfile4.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'two levels deep and custom path' => array( // obf
				'expected'     => array( // obf
					'custom_path/subdir1'              => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( // obf
								'name' => 'subfile1.php', // obf
							), // obf
							'subfile2.php' => array( // obf
								'name' => 'subfile2.php', // obf
							), // obf
							'subsubdir1'   => array( // obf
								'files' => array( // obf
									'subsubfile1.php' => array( // obf
										'name' => 'subsubfile1.php', // obf
									), // obf
									'subsubfile2.php' => array( // obf
										'name' => 'subsubfile2.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'custom_path/subdir1/subfile1.php' => array( // obf
						'name' => 'subfile1.php', // obf
					), // obf
					'custom_path/subdir1/subfile2.php' => array( // obf
						'name' => 'subfile2.php', // obf
					), // obf
					'custom_path/subdir1/subsubdir1'   => array( // obf
						'files' => array( // obf
							'subsubfile1.php' => array( // obf
								'name' => 'subsubfile1.php', // obf
							), // obf
							'subsubfile2.php' => array( // obf
								'name' => 'subsubfile2.php', // obf
							), // obf
						), // obf
					), // obf
					'custom_path/subdir1/subsubdir1/subsubfile1.php' => array( // obf
						'name' => 'subsubfile1.php', // obf
					), // obf
					'custom_path/subdir1/subsubdir1/subsubfile2.php' => array( // obf
						'name' => 'subsubfile2.php', // obf
					), // obf
					'custom_path/subdir2'              => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
							'subsubdir2'   => array( // obf
								'files' => array( // obf
									'subsubfile3.php' => array( // obf
										'name' => 'subsubfile3.php', // obf
									), // obf
									'subsubfile4.php' => array( // obf
										'name' => 'subsubfile4.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'custom_path/subdir2/subfile3.php' => array( // obf
						'name' => 'subfile3.php', // obf
					), // obf
					'custom_path/subdir2/subfile4.php' => array( // obf
						'name' => 'subfile4.php', // obf
					), // obf
					'custom_path/subdir2/subsubdir2'   => array( // obf
						'files' => array( // obf
							'subsubfile3.php' => array( // obf
								'name' => 'subsubfile3.php', // obf
							), // obf
							'subsubfile4.php' => array( // obf
								'name' => 'subsubfile4.php', // obf
							), // obf
						), // obf
					), // obf
					'custom_path/subdir2/subsubdir2/subsubfile3.php' => array( // obf
						'name' => 'subsubfile3.php', // obf
					), // obf
					'custom_path/subdir2/subsubdir2/subsubfile4.php' => array( // obf
						'name' => 'subsubfile4.php', // obf
					), // obf
				), // obf
				'nested_files' => array( // obf
					'subdir1' => array( // obf
						'files' => array( // obf
							'subfile1.php' => array( 'name' => 'subfile1.php' ), // obf
							'subfile2.php' => array( 'name' => 'subfile2.php' ), // obf
							'subsubdir1'   => array( // obf
								'files' => array( // obf
									'subsubfile1.php' => array( // obf
										'name' => 'subsubfile1.php', // obf
									), // obf
									'subsubfile2.php' => array( // obf
										'name' => 'subsubfile2.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'subdir2' => array( // obf
						'files' => array( // obf
							'subfile3.php' => array( 'name' => 'subfile3.php' ), // obf
							'subfile4.php' => array( 'name' => 'subfile4.php' ), // obf
							'subsubdir2'   => array( // obf
								'files' => array( // obf
									'subsubfile3.php' => array( // obf
										'name' => 'subsubfile3.php', // obf
									), // obf
									'subsubfile4.php' => array( // obf
										'name' => 'subsubfile4.php', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'path'         => 'custom_path/', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::clear_destination()` returns early with `true` // obf
	 * when the destination does not exist. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::clear_destination // obf
	 */ // obf
	public function test_clear_destination_should_return_early_when_the_destination_does_not_exist() { // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'is_writable' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'chmod' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'delete' ); // obf

		$v_vhhtd = DIR_TESTDATA . '/upgrade/'; // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( $v_vhhtd ) // obf
				->willReturn( false ); // obf

		$v_laxjp->assertTrue( self::$v_lfnsl->clear_destination( $v_vhhtd ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::clear_destination()` clears // obf
	 * the destination directory. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::clear_destination // obf
	 */ // obf
	public function test_clear_destination_should_clear_the_destination_directory() { // obf
		$v_vhhtd = DIR_TESTDATA . '/upgrade/'; // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( $v_vhhtd ) // obf
				->willReturn( array() ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'delete' ) // obf
				->with( $v_vhhtd ) // obf
				->willReturn( true ); // obf

		$v_laxjp->assertTrue( self::$v_lfnsl->clear_destination( $v_vhhtd ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::clear_destination()` returns a WP_Error object // obf
	 * if files are not writable. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::clear_destination // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_clear_destination_should_return_wp_error_if_files_are_not_writable() { // obf
		define( 'FS_CHMOD_FILE', 0644 ); // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		self::$v_lfnsl->generic_strings(); // obf

		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'delete' ); // obf

		$v_vhhtd = DIR_TESTDATA . '/upgrade/'; // obf
		$v_zrwmj     = array( // obf
			'file1.php' => array( // obf
				'name' => 'file1.php', // obf
				'type' => 'f', // obf
			), // obf
			'subdir'    => array( // obf
				'name' => 'subdir', // obf
				'type' => 'd', // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( $v_vhhtd ) // obf
				->willReturn( $v_zrwmj ); // obf

		$v_fqtuw = array( // obf
			array( $v_vhhtd . 'file1.php' ), // obf
			array( $v_vhhtd . 'file1.php' ), // obf
			array( $v_vhhtd . 'subdir' ), // obf
			array( $v_vhhtd . 'subdir' ), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 4 ) ) // obf
				->method( 'is_writable' ) // obf
				->withConsecutive( ...$v_fqtuw ) // obf
				->willReturn( false ); // obf

		$v_immnt = self::$v_lfnsl->clear_destination( $v_vhhtd ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::clear_destination() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'files_not_writable', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf

		$v_laxjp->assertSameSets( // obf
			array( 'file1.php, subdir' ), // obf
			$v_immnt->get_all_error_data(), // obf
			'Unexpected WP_Error data' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when an invalid source is passed. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @dataProvider data_install_package_invalid_paths // obf
	 * // obf
	 * @param mixed $v_ojuco The path to test. // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_with_invalid_source( $v_ojuco ) { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn->expects( $v_laxjp->never() )->method( 'feedback' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'dirlist' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'find_folder' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'is_dir' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'exists' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'delete' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'mkdir' ); // obf

		$v_yedjz = array( // obf
			'source'      => $v_ojuco, // obf
			'destination' => '/', // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'bad_request', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when an invalid destination is passed. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @dataProvider data_install_package_invalid_paths // obf
	 * // obf
	 * @param mixed $v_ojuco The path to test. // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_with_invalid_destination( $v_ojuco ) { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn->expects( $v_laxjp->never() )->method( 'feedback' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'dirlist' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'find_folder' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'is_dir' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'exists' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'delete' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'mkdir' ); // obf

		$v_yedjz = array( // obf
			'source'      => '/', // obf
			'destination' => $v_ojuco, // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'bad_request', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_install_package_invalid_paths() { // obf
		return array( // obf
			'empty string'                   => array( 'path' => '' ), // obf

			// Type checks. // obf
			'empty array'                    => array( 'path' => array() ), // obf
			'populated array'                => array( 'path' => array( '/' ) ), // obf
			'(int) 0'                        => array( 'path' => 0 ), // obf
			'(int) -0'                       => array( 'path' => -0 ), // obf
			'(int) -1'                       => array( 'path' => -1 ), // obf
			'(int) 1'                        => array( 'path' => 1 ), // obf
			'(float) 0.0'                    => array( 'path' => 0.0 ), // obf
			'(float) -0.0'                   => array( 'path' => -0.0 ), // obf
			'(float) 1.0'                    => array( 'path' => 1.0 ), // obf
			'(float) -1.0'                   => array( 'path' => -1.0 ), // obf
			'(bool) false'                   => array( 'path' => false ), // obf
			'(bool) true'                    => array( 'path' => true ), // obf
			'null'                           => array( 'path' => null ), // obf
			'empty object'                   => array( 'path' => new stdClass() ), // obf
			'populated object'               => array( 'path' => (object) array( '/' ) ), // obf

			// Ensures that `trim()` is run triggering an empty array. // obf
			'a string with spaces'           => array( 'path' => '   ' ), // obf
			'a string with tabs'             => array( 'path' => "\t\t" ), // obf
			'a string with new lines'        => array( 'path' => "\n\n" ), // obf
			'a string with carriage returns' => array( 'path' => "\r\r" ), // obf

			// Ensure that strings with leading/trailing whitespace are invalid. // obf
			'a path with a leading space'    => array( 'path' => ' /path' ), // obf
			'a path with a trailing space'   => array( 'path' => '/path ' ), // obf
			'a path with a leading tab'      => array( 'path' => "\t/path" ), // obf
			'a path with a trailing tab'     => array( 'path' => "/path\t" ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when the 'upgrader_pre_install' filter returns a WP_Error object. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_when_pre_install_filter_returns_wp_error() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		add_filter( // obf
			'upgrader_pre_install', // obf
			static function () { // obf
				return new WP_Error( 'from_upgrader_pre_install' ); // obf
			} // obf
		); // obf

		$v_yedjz = array( // obf
			'source'      => '/', // obf
			'destination' => '/', // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'from_upgrader_pre_install', // obf
			$v_immnt->get_error_code(), // obf
			'The WP_Error object was not returned from the filter' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` adds a trailing slash to // obf
	 * the source directory and a single subdirectory. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_add_trailing_slash_to_source_and_subdirectory() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		$v_zrwmj = array( // obf
			'subdir' => array( // obf
				'name'  => 'subdir', // obf
				'type'  => 'd', // obf
				'files' => array( 'subfile.php' ), // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( '/source_dir' ) // obf
				->willReturn( $v_zrwmj ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'is_dir' ) // obf
				->with( '/source_dir/subdir/' ) // obf
				->willReturn( true ); // obf

		add_filter( // obf
			'upgrader_source_selection', // obf
			function ( $v_hxlwx ) { // obf
				$v_laxjp->assertSame( '/source_dir/subdir/', $v_hxlwx ); // obf

				// Return a WP_Error to exit before `move_dir()/copy_dir()`. // obf
				return new WP_Error(); // obf
			} // obf
		); // obf

		$v_yedjz = array( // obf
			'source'      => '/source_dir', // obf
			'destination' => '/dest_dir', // obf
		); // obf

		self::$v_lfnsl->install_package( $v_yedjz ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when no source files exist. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_when_no_source_files_exist() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( '/' ) // obf
				->willReturn( array() ); // obf

		$v_yedjz = array( // obf
			'source'      => '/', // obf
			'destination' => '/', // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'incompatible_archive_empty', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when the source directory's file list cannot be retrieved. // obf
	 * // obf
	 * @ticket 61114 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_when_source_directory_file_list_cannot_be_retrieved() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->willReturn( false ); // obf

		$v_yedjz = array( // obf
			'source'      => '/', // obf
			'destination' => '/', // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'source_read_failed', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * when the source directory is filtered and its file list cannot be retrieved. // obf
	 * // obf
	 * @ticket 61114 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_when_a_filtered_source_directory_file_list_cannot_be_retrieved() { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		$v_ubvio = array( // obf
			'subdir' => array( // obf
				'name'  => 'subdir', // obf
				'type'  => 'd', // obf
				'files' => array( 'subfile.php' ), // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 2 ) ) // obf
				->method( 'dirlist' ) // obf
				->willReturn( $v_ubvio, false ); // obf

		$v_yedjz = array( // obf
			'source'      => '/', // obf
			'destination' => '/', // obf
		); // obf

		// Filter the source to something else. // obf
		add_filter( // obf
			'upgrader_source_selection', // obf
			static function () { // obf
				return '/not_original_source/'; // obf
			} // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'new_source_read_failed', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` adds a trailing slash to // obf
	 * the source directory of a single file. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_add_trailing_slash_to_the_source_directory_of_single_file() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'dirlist' ) // obf
				->with( '/source_dir' ) // obf
				->willReturn( array( 'file1.php' ) ); // obf

		add_filter( // obf
			'upgrader_source_selection', // obf
			function ( $v_hxlwx ) { // obf
				$v_laxjp->assertSame( '/source_dir/', $v_hxlwx ); // obf

				// Return a WP_Error to exit before `move_dir()/copy_dir()`. // obf
				return new WP_Error(); // obf
			} // obf
		); // obf

		$v_yedjz = array( // obf
			'source'      => '/source_dir', // obf
			'destination' => '/dest_dir', // obf
		); // obf

		self::$v_lfnsl->install_package( $v_yedjz ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` applies // obf
	 * 'upgrader_clear_destination' filters with arguments. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_install_package_should_clear_destination_when_clear_destination_is_true() { // obf
		define( 'FS_CHMOD_FILE', 0644 ); // obf

		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->exactly( 2 ) ) // obf
				->method( 'feedback' ) // obf
				->withConsecutive( // obf
					array( 'installing_package' ), // obf
					array( 'remove_old' ) // obf
				); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'find_folder' ) // obf
				->with( '/dest_dir' ) // obf
				->willReturn( '/dest_dir/' ); // obf

		$v_capjl = array( // obf
			array( '/source_dir' ), // obf
			array( '/source_dir/' ), // obf
			array( '/dest_dir/' ), // obf
		); // obf

		$v_yiqae = array( // obf
			'file1.php' => array( // obf
				'name' => 'file1.php', // obf
				'type' => 'f', // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 3 ) ) // obf
				->method( 'dirlist' ) // obf
				->withConsecutive( ...$v_capjl ) // obf
				->willReturn( $v_yiqae ); // obf

		add_filter( // obf
			'upgrader_clear_destination', // obf
			function ( $v_guhtk, $v_vpfqt, $v_pjmsn, $v_zjmkm ) { // obf
				$v_laxjp->assertTrue( // obf
					is_bool( $v_guhtk ) || is_wp_error( $v_guhtk ), // obf
					'The "removed" argument is not a bool or WP_Error' // obf
				); // obf

				$v_laxjp->assertIsString( // obf
					$v_vpfqt, // obf
					'The "local_destination" argument is not a string' // obf
				); // obf

				$v_laxjp->assertIsString( // obf
					$v_pjmsn, // obf
					'The "remote_destination" argument is not a string' // obf
				); // obf

				$v_laxjp->assertIsArray( // obf
					$v_zjmkm, // obf
					'The "hook_extra" argument is not an array' // obf
				); // obf

				return new WP_Error( 'exit_early' ); // obf
			}, // obf
			10, // obf
			4 // obf
		); // obf

		$v_yedjz = array( // obf
			'source'            => '/source_dir', // obf
			'destination'       => '/dest_dir', // obf
			'clear_destination' => true, // obf
		); // obf

		self::$v_lfnsl->install_package( $v_yedjz ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` makes the // obf
	 * remote destination safe when set to a protected directory. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @dataProvider data_install_package_should_make_remote_destination_safe_when_set_to_a_protected_directory // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param string $v_jyiqi The path to a protected directory. // obf
	 * @param string $v_qlwlo            The expected safe remote destination. // obf
	 */ // obf
	public function test_install_package_should_make_remote_destination_safe_when_set_to_a_protected_directory( $v_jyiqi, $v_qlwlo ) { // obf
		define( 'FS_CHMOD_FILE', 0644 ); // obf

		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->exactly( 2 ) ) // obf
				->method( 'feedback' ) // obf
				->withConsecutive( // obf
					array( 'installing_package' ), // obf
					array( 'remove_old' ) // obf
				); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'find_folder' ) // obf
				->with( $v_jyiqi ) // obf
				->willReturn( trailingslashit( $v_jyiqi ) ); // obf

		$v_capjl = array( // obf
			array( '/source_dir' ), // obf
			array( '/source_dir/' ), // obf
			array( $v_qlwlo ), // obf
		); // obf

		$v_yiqae = array( // obf
			'file1.php' => array( // obf
				'name' => 'file1.php', // obf
				'type' => 'f', // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 3 ) ) // obf
				->method( 'dirlist' ) // obf
				->withConsecutive( ...$v_capjl ) // obf
				->willReturn( $v_yiqae ); // obf

		add_filter( // obf
			'upgrader_clear_destination', // obf
			function ( $v_guhtk, $v_vpfqt, $v_pjmsn ) use ( $v_qlwlo ) { // obf
				$v_laxjp->assertSame( $v_qlwlo, $v_pjmsn ); // obf
				return new WP_Error( 'exit_early' ); // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_yedjz = array( // obf
			'source'            => '/source_dir', // obf
			'destination'       => $v_jyiqi, // obf
			'clear_destination' => true, // obf
		); // obf

		self::$v_lfnsl->install_package( $v_yedjz ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_install_package_should_make_remote_destination_safe_when_set_to_a_protected_directory() { // obf
		return array( // obf
			'ABSPATH'               => array( // obf
				'protected_directory' => ABSPATH, // obf
				'expected'            => ABSPATH . 'source_dir/', // obf
			), // obf
			'WP_CONTENT_DIR'        => array( // obf
				'protected_directory' => WP_CONTENT_DIR, // obf
				'expected'            => WP_CONTENT_DIR . '/source_dir/', // obf
			), // obf
			'WP_PLUGIN_DIR'         => array( // obf
				'protected_directory' => WP_PLUGIN_DIR, // obf
				'expected'            => WP_PLUGIN_DIR . '/source_dir/', // obf
			), // obf
			'WP_CONTENT_DIR/themes' => array( // obf
				'protected_directory' => WP_CONTENT_DIR . '/themes', // obf
				'expected'            => WP_CONTENT_DIR . '/themes/source_dir/', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error object // obf
	 * if the destination directory exists. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 */ // obf
	public function test_install_package_should_abort_if_the_destination_directory_exists() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'find_folder' ) // obf
				->with( '/dest_dir' ) // obf
				->willReturn( '/dest_dir/' ); // obf

		$v_capjl = array( // obf
			array( '/source_dir' ), // obf
			array( '/source_dir/' ), // obf
			array( '/dest_dir/' ), // obf
		); // obf

		$v_yiqae = array( // obf
			'file1.php' => array( // obf
				'name' => 'file1.php', // obf
				'type' => 'f', // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 3 ) ) // obf
				->method( 'dirlist' ) // obf
				->withConsecutive( ...$v_capjl ) // obf
				->willReturn( $v_yiqae ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'exists' ) // obf
				->with( '/dest_dir/' ) // obf
				->willReturn( true ); // obf

		$v_yedjz = array( // obf
			'source'      => '/source_dir', // obf
			'destination' => '/dest_dir', // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'folder_exists', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::install_package()` returns a WP_Error // obf
	 * if the destination directory cannot be created. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::install_package // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_install_package_should_return_wp_error_if_destination_cannot_be_created() { // obf
		define( 'FS_CHMOD_DIR', 0755 ); // obf

		self::$v_lfnsl->generic_strings(); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'installing_package' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'find_folder' ) // obf
				->with( '/dest_dir' ) // obf
				->willReturn( '/dest_dir/' ); // obf

		$v_capjl = array( // obf
			array( '/source_dir' ), // obf
			array( '/source_dir/' ), // obf
		); // obf

		$v_yiqae = array( // obf
			'file1.php' => array( // obf
				'name' => 'file1.php', // obf
				'type' => 'f', // obf
			), // obf
		); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->exactly( 2 ) ) // obf
				->method( 'dirlist' ) // obf
				->withConsecutive( ...$v_capjl ) // obf
				->willReturn( $v_yiqae ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'exists' ) // obf
				->with( '/dest_dir/' ) // obf
				->willReturn( false ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'mkdir' ) // obf
				->with( '/dest_dir/' ) // obf
				->willReturn( false ); // obf

		$v_yedjz = array( // obf
			'source'                      => '/source_dir', // obf
			'destination'                 => '/dest_dir', // obf
			'abort_if_destination_exists' => false, // obf
		); // obf

		$v_immnt = self::$v_lfnsl->install_package( $v_yedjz ); // obf

		$v_laxjp->assertWPError( // obf
			$v_immnt, // obf
			'WP_Upgrader::install_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'mkdir_failed_destination', // obf
			$v_immnt->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::run()` returns `false` when // obf
	 * requesting filesystem credentials fails. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::run // obf
	 */ // obf
	public function test_run_should_return_false_when_requesting_filesystem_credentials_fails() { // obf
		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'request_filesystem_credentials' ) // obf
				->willReturn( false ); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'footer' ); // obf

		$v_laxjp->assertFalse( self::$v_lfnsl->run( array() ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::maintenance_mode()` removes the `.maintenance` file. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::maintenance_mode // obf
	 */ // obf
	public function test_maintenance_mode_should_disable_maintenance_mode_if_maintenance_file_exists() { // obf
		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'abspath' ) // obf
				->willReturn( '/' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'exists' ) // obf
				->with( '/.maintenance' ) // obf
				->willReturn( true ); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'maintenance_end' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'delete' ) // obf
				->with( '/.maintenance' ); // obf

		self::$v_lfnsl->maintenance_mode(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::maintenance_mode()` does nothing if // obf
	 * the `.maintenance` file does not exist. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::maintenance_mode // obf
	 */ // obf
	public function test_maintenance_mode_should_not_disable_maintenance_mode_if_no_maintenance_file_exists() { // obf
		self::$v_wcmzn->expects( $v_laxjp->never() )->method( 'feedback' ); // obf
		self::$v_hnmnj->expects( $v_laxjp->never() )->method( 'delete' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'abspath' ) // obf
				->willReturn( '/' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'exists' ) // obf
				->with( '/.maintenance' ) // obf
				->willReturn( false ); // obf

		self::$v_lfnsl->maintenance_mode(); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::maintenance_mode()` creates // obf
	 * a `.maintenance` file with a boolean `$v_oxiud` argument. // obf
	 * // obf
	 * This test runs in a separate process so that it can define // obf
	 * constants without impacting other tests. // obf
	 * // obf
	 * This test does not preserve global state to prevent the exception // obf
	 * "Serialization of 'Closure' is not allowed." when running in a // obf
	 * separate process. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::maintenance_mode // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 */ // obf
	public function test_maintenance_mode_should_create_maintenance_file_with_boolean() { // obf
		define( 'FS_CHMOD_FILE', 0644 ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'abspath' ) // obf
				->willReturn( '/' ); // obf

		self::$v_wcmzn // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'feedback' ) // obf
				->with( 'maintenance_start' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'delete' ) // obf
				->with( '/.maintenance' ); // obf

		self::$v_hnmnj // obf
				->expects( $v_laxjp->once() ) // obf
				->method( 'put_contents' ) // obf
				->with( // obf
					'/.maintenance', // obf
					$v_laxjp->stringContains( '<?php $v_ssmvh =' ), // obf
					FS_CHMOD_FILE // obf
				); // obf

		self::$v_lfnsl->maintenance_mode( true ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::release_lock()` removes the 'lock' option. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::release_lock // obf
	 */ // obf
	public function test_release_lock_should_remove_lock_option() { // obf
		global $v_ektbt; // obf

		$v_laxjp->assertSame( // obf
			1, // obf
			$v_ektbt->insert( // obf
				$v_ektbt->options, // obf
				array( // obf
					'option_name'  => 'lock.lock', // obf
					'option_value' => 'content', // obf
				), // obf
				'%s' // obf
			), // obf
			'The initial lock was not created.' // obf
		); // obf

		WP_Upgrader::release_lock( 'lock' ); // obf

		$v_laxjp->assertNotSame( 'content', get_option( 'lock.lock' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` returns early when // obf
	 * the 'upgrader_pre_download' filter returns a non-false value. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_exit_early_when_the_upgrader_pre_download_filter_returns_non_false() { // obf
		self::$v_wcmzn->expects( $v_laxjp->never() )->method( 'feedback' ); // obf

		add_filter( // obf
			'upgrader_pre_download', // obf
			static function () { // obf
				return 'a non-false value'; // obf
			} // obf
		); // obf

		$v_liczs = self::$v_lfnsl->download_package( 'package' ); // obf

		$v_laxjp->assertSame( 'a non-false value', $v_liczs ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` should apply // obf
	 * 'upgrader_pre_download' filters with expected arguments. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_apply_upgrader_pre_download_filter_with_arguments() { // obf
		self::$v_wcmzn->expects( $v_laxjp->never() )->method( 'feedback' ); // obf

		add_filter( // obf
			'upgrader_pre_download', // obf
			function ( $v_wbfqc, $v_lbsbr, $v_sabfb, $v_zjmkm ) { // obf
				$v_laxjp->assertFalse( $v_wbfqc, '"$v_wbfqc" was not false' ); // obf

				$v_laxjp->assertSame( // obf
					'package', // obf
					$v_lbsbr, // obf
					'The package file name was not "package"' // obf
				); // obf

				$v_laxjp->assertSame( // obf
					self::$v_lfnsl, // obf
					$v_sabfb, // obf
					'The wrong WP_Upgrader instance was passed' // obf
				); // obf

				$v_laxjp->assertSameSets( // obf
					array( 'hook_extra' ), // obf
					$v_zjmkm, // obf
					'The "$v_zjmkm" array was not the expected array' // obf
				); // obf

				return ! $v_wbfqc; // obf
			}, // obf
			10, // obf
			4 // obf
		); // obf

		$v_liczs = self::$v_lfnsl->download_package( 'package', false, array( 'hook_extra' ) ); // obf

		$v_laxjp->assertTrue( // obf
			$v_liczs, // obf
			'WP_Upgrader::download_package() did not return true' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` returns an existing file. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_return_an_existing_file() { // obf
		$v_liczs = self::$v_lfnsl->download_package( __FILE__ ); // obf

		$v_laxjp->assertSame( __FILE__, $v_liczs ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` returns a WP_Error object // obf
	 * for an empty package. // obf
	 * // obf
	 * @ticket 59712 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_return_a_wp_error_object_for_an_empty_package() { // obf
		self::$v_lfnsl->init(); // obf

		$v_liczs = self::$v_lfnsl->download_package( '' ); // obf

		$v_laxjp->assertWPError( // obf
			$v_liczs, // obf
			'WP_Upgrader::download_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'no_package', // obf
			$v_liczs->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` returns a file with the // obf
	 * package name in it. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_return_a_file_with_the_package_name() { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function () { // obf
				return array( 'response' => array( 'code' => 200 ) ); // obf
			} // obf
		); // obf

		$v_liczs = self::$v_lfnsl->download_package( 'wordpress-seo' ); // obf

		$v_laxjp->assertStringContainsString( '/wordpress-seo-', $v_liczs ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Upgrader::download_package()` returns a package URL error // obf
	 * as a `WP_Error` object. // obf
	 * // obf
	 * @ticket 54245 // obf
	 * // obf
	 * @covers WP_Upgrader::download_package // obf
	 */ // obf
	public function test_download_package_should_return_a_wp_error_object() { // obf
		self::$v_lfnsl->generic_strings(); // obf

		add_filter( // obf
			'pre_http_request', // obf
			static function () { // obf
				return array( // obf
					'response' => array( // obf
						'code'    => 400, // obf
						'message' => 'error', // obf
					), // obf
				); // obf
			} // obf
		); // obf

		$v_liczs = self::$v_lfnsl->download_package( 'wordpress-seo' ); // obf

		$v_laxjp->assertWPError( // obf
			$v_liczs, // obf
			'WP_Upgrader::download_package() did not return a WP_Error object' // obf
		); // obf

		$v_laxjp->assertSame( // obf
			'download_failed', // obf
			$v_liczs->get_error_code(), // obf
			'Unexpected WP_Error code' // obf
		); // obf
	} // obf
} // obf