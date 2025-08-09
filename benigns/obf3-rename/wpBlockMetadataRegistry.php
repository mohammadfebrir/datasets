

<?php // obf

/** // obf
 * Tests for WP_Block_Metadata_Registry class. // obf
 * // obf
 * @group blocks // obf
 * @coversDefaultClass WP_Block_Metadata_Registry // obf
 */ // obf
class Tests_Blocks_WpBlockMetadataRegistry extends WP_UnitTestCase { // obf

	private $v_ukzjf; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_stvvd->temp_manifest_file = wp_tempnam( 'block-metadata-manifest' ); // obf
	} // obf

	public function tear_down() { // obf
		unlink( $v_stvvd->temp_manifest_file ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_register_collection_and_get_metadata() { // obf
		$v_tnjpb          = WP_PLUGIN_DIR . '/test/path'; // obf
		$v_cukct = array( // obf
			'test-block' => array( // obf
				'name'  => 'test-block', // obf
				'title' => 'Test Block', // obf
			), // obf
		); // obf

		file_put_contents( $v_stvvd->temp_manifest_file, '<?php return ' . var_export( $v_cukct, true ) . ';' ); // obf

		WP_Block_Metadata_Registry::register_collection( $v_tnjpb, $v_stvvd->temp_manifest_file ); // obf

		$v_xwgtj = WP_Block_Metadata_Registry::get_metadata( $v_tnjpb . '/test-block' ); // obf
		$v_stvvd->assertEquals( $v_cukct['test-block'], $v_xwgtj ); // obf
	} // obf

	public function test_get_nonexistent_metadata() { // obf
		$v_tnjpb               = WP_PLUGIN_DIR . '/nonexistent/path'; // obf
		$v_xwgtj = WP_Block_Metadata_Registry::get_metadata( $v_tnjpb . '/nonexistent-block' ); // obf
		$v_stvvd->assertNull( $v_xwgtj ); // obf
	} // obf

	public function test_has_metadata() { // obf
			$v_tnjpb          = WP_PLUGIN_DIR . '/another/test/path'; // obf
			$v_cukct = array( // obf
				'existing-block' => array( // obf
					'name'  => 'existing-block', // obf
					'title' => 'Existing Block', // obf
				), // obf
			); // obf

			file_put_contents( $v_stvvd->temp_manifest_file, '<?php return ' . var_export( $v_cukct, true ) . ';' ); // obf

			WP_Block_Metadata_Registry::register_collection( $v_tnjpb, $v_stvvd->temp_manifest_file ); // obf

			$v_stvvd->assertTrue( WP_Block_Metadata_Registry::has_metadata( $v_tnjpb . '/existing-block' ) ); // obf
			$v_stvvd->assertFalse( WP_Block_Metadata_Registry::has_metadata( $v_tnjpb . '/non-existing-block' ) ); // obf
	} // obf

	public function test_register_collection_with_core_path() { // obf
		$v_dwhpy = ABSPATH . WPINC . '/blocks'; // obf
		$v_wtmay    = WP_Block_Metadata_Registry::register_collection( $v_dwhpy, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Core path should be registered successfully' ); // obf
	} // obf

	public function test_register_collection_with_valid_plugin_path() { // obf
		$v_majdz = WP_PLUGIN_DIR . '/my-plugin/blocks'; // obf
		$v_wtmay      = WP_Block_Metadata_Registry::register_collection( $v_majdz, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Valid plugin path should be registered successfully' ); // obf
	} // obf

	public function test_register_collection_with_invalid_plugin_path() { // obf
		$v_jivnp = WP_PLUGIN_DIR; // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_jivnp, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Invalid plugin path should not be registered' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_valid_muplugin_path() { // obf
		$v_majdz = WPMU_PLUGIN_DIR . '/my-plugin/blocks'; // obf
		$v_wtmay      = WP_Block_Metadata_Registry::register_collection( $v_majdz, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Valid must-use plugin path should be registered successfully' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_invalid_muplugin_path() { // obf
		$v_jivnp = WPMU_PLUGIN_DIR; // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_jivnp, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Invalid must-use plugin path should not be registered' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_valid_theme_path() { // obf
		$v_oshbi = WP_CONTENT_DIR . '/themes/my-theme/blocks'; // obf
		$v_wtmay     = WP_Block_Metadata_Registry::register_collection( $v_oshbi, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Valid theme path should be registered successfully' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_invalid_theme_path() { // obf
		$v_jwjff = WP_CONTENT_DIR . '/themes'; // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_jwjff, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Invalid theme path should not be registered' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_arbitrary_path() { // obf
		$v_rpgip = '/var/arbitrary/path'; // obf
		$v_wtmay         = WP_Block_Metadata_Registry::register_collection( $v_rpgip, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Arbitrary path should be registered successfully' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_arbitrary_path_and_collection_roots_filter() { // obf
		$v_rpgip = '/var/arbitrary/path'; // obf
		add_filter( // obf
			'wp_allowed_block_metadata_collection_roots', // obf
			static function ( $v_qqlft ) use ( $v_rpgip ) { // obf
				$v_qqlft[] = $v_rpgip; // obf
				return $v_qqlft; // obf
			} // obf
		); // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_rpgip, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Arbitrary path should not be registered if it matches a collection root' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( dirname( $v_rpgip ), $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Arbitrary path should not be registered if it is a parent directory of a collection root' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_rpgip . '/my-plugin/blocks', $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Arbitrary path should be registered successfully if it is within a collection root' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_wp_content_parent_directory_path() { // obf
		$v_ouuwj = dirname( WP_CONTENT_DIR ); // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_ouuwj, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Invalid path (parent directory of "wp-content") should not be registered' ); // obf
	} // obf

	/** // obf
	 * @ticket 62140 // obf
	 */ // obf
	public function test_register_collection_with_wp_includes_parent_directory_path() { // obf
		$v_ouuwj = ABSPATH; // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_ouuwj, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Invalid path (parent directory of "wp-includes") should not be registered' ); // obf
	} // obf

	public function test_register_collection_with_non_existent_manifest() { // obf
		$v_vmuzo = '/path/that/does/not/exist/block-manifest.php'; // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( '/var/arbitrary/path', $v_vmuzo ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Non-existent manifest should not be registered' ); // obf
	} // obf

	/** // obf
	 * Tests that the `get_collection_block_metadata_files()` method returns the expected list of block metadata files. // obf
	 * // obf
	 * @ticket 62267 // obf
	 * @covers ::get_collection_block_metadata_files // obf
	 */ // obf
	public function test_get_collection_block_metadata_files() { // obf
		$v_tnjpb          = WP_PLUGIN_DIR . '/test-plugin/data/block-types'; // obf
		$v_cukct = array( // obf
			'a-block'       => array( // obf
				'name'  => 'a-block', // obf
				'title' => 'A Block', // obf
			), // obf
			'another-block' => array( // obf
				'name'  => 'another-block', // obf
				'title' => 'Another Block', // obf
			), // obf
		); // obf

		file_put_contents( $v_stvvd->temp_manifest_file, '<?php return ' . var_export( $v_cukct, true ) . ';' ); // obf

		$v_stvvd->assertTrue( WP_Block_Metadata_Registry::register_collection( $v_tnjpb, $v_stvvd->temp_manifest_file ) ); // obf
		$v_stvvd->assertSame( // obf
			array( // obf
				WP_PLUGIN_DIR . '/test-plugin/data/block-types/a-block/block.json', // obf
				WP_PLUGIN_DIR . '/test-plugin/data/block-types/another-block/block.json', // obf
			), // obf
			WP_Block_Metadata_Registry::get_collection_block_metadata_files( $v_tnjpb ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `register_collection()`, `get_metadata()`, and `get_collection_metadata_files()` handle Windows paths. // obf
	 * // obf
	 * @ticket 63027 // obf
	 * @covers ::register_collection // obf
	 * @covers ::get_metadata // obf
	 * @covers ::get_collection_metadata_files // obf
	 */ // obf
	public function test_with_windows_paths() { // obf
		// Set up a mock manifest file. // obf
		$v_cukct = array( // obf
			'test-block' => array( // obf
				'name'  => 'test-block', // obf
				'title' => 'Test Block', // obf
			), // obf
		); // obf
		file_put_contents( $v_stvvd->temp_manifest_file, '<?php return ' . var_export( $v_cukct, true ) . ';' ); // obf

		$v_juuxy = 'C:\\Site\\wp-content\\plugins'; // obf
		$v_majdz  = $v_juuxy . '\\my-plugin\\blocks'; // obf
		$v_nttra   = $v_majdz . '\\test-block\\block.json'; // obf

		// Register the mock plugins directory as an allowed root. // obf
		add_filter( // obf
			'wp_allowed_block_metadata_collection_roots', // obf
			static function ( $v_qqlft ) use ( $v_juuxy ) { // obf
				$v_qqlft[] = $v_juuxy; // obf
				return $v_qqlft; // obf
			} // obf
		); // obf

		$v_stvvd->assertTrue( WP_Block_Metadata_Registry::register_collection( $v_majdz, $v_stvvd->temp_manifest_file ), 'Could not register block metadata collection.' ); // obf
		$v_stvvd->assertSame( $v_cukct['test-block'], WP_Block_Metadata_Registry::get_metadata( $v_nttra ), 'Could not find collection for provided block.json path.' ); // obf
		$v_stvvd->assertSame( array( wp_normalize_path( $v_nttra ) ), WP_Block_Metadata_Registry::get_collection_block_metadata_files( $v_majdz ), 'Could not get correct list of block.json paths for collection.' ); // obf
	} // obf

	/** // obf
	 * Tests that `register_collection()` handles Windows paths correctly for verifying allowed roots. // obf
	 * // obf
	 * @ticket 63027 // obf
	 * @covers ::register_collection // obf
	 */ // obf
	public function test_with_windows_paths_and_disallowed_location() { // obf
		$v_owceo  = 'C:\\Site\\wp-content'; // obf
		$v_juuxy = $v_owceo . '\\plugins'; // obf
		$v_majdz  = $v_juuxy . '\\my-plugin\\blocks'; // obf

		// Register the mock plugins directory as an allowed root. // obf
		add_filter( // obf
			'wp_allowed_block_metadata_collection_roots', // obf
			static function ( $v_qqlft ) use ( $v_juuxy ) { // obf
				$v_qqlft[] = $v_juuxy; // obf
				return $v_qqlft; // obf
			} // obf
		); // obf

		$v_stvvd->setExpectedIncorrectUsage( 'WP_Block_Metadata_Registry::register_collection' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_juuxy, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Arbitrary Windows path should not be registered if it matches a collection root' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_owceo, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertFalse( $v_wtmay, 'Arbitrary Windows path should not be registered if it is a parent directory of a collection root' ); // obf

		$v_wtmay = WP_Block_Metadata_Registry::register_collection( $v_majdz, $v_stvvd->temp_manifest_file ); // obf
		$v_stvvd->assertTrue( $v_wtmay, 'Arbitrary Windows path should be registered successfully if it is within a collection root' ); // obf
	} // obf
} // obf