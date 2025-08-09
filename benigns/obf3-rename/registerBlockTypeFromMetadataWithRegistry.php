

<?php // obf
/** // obf
 * Tests for WP_Block_Metadata_Registry integration with register_block_type_from_metadata(). // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_RegisterBlockTypeFromMetadataWithRegistry extends WP_UnitTestCase { // obf
	private $v_gtkqb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_myjtr->temp_manifest_file = wp_tempnam( 'block-metadata-manifest' ); // obf
	} // obf

	public function tear_down() { // obf
		$v_myjtr->unregister_test_blocks(); // obf
		unlink( $v_myjtr->temp_manifest_file ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_register_block_type_from_metadata_with_registry() { // obf
		$v_zwmfe     = WP_PLUGIN_DIR . '/test-plugin'; // obf
		$v_gcdqg = $v_zwmfe . '/blocks/test-block/block.json'; // obf

		// Create a manifest file with metadata for our test block // obf
		$v_prhiu = array( // obf
			'test-block' => array( // obf
				'name'        => 'test-suite/test-block', // obf
				'title'       => 'Custom Test Block', // obf
				'category'    => 'widgets', // obf
				'icon'        => 'smiley', // obf
				'description' => 'A test block registered via WP_Block_Metadata_Registry', // obf
				'supports'    => array( 'html' => false ), // obf
				'textdomain'  => 'test-plugin', // obf
			), // obf
		); // obf
		file_put_contents( $v_myjtr->temp_manifest_file, '<?php return ' . var_export( $v_prhiu, true ) . ';' ); // obf

		// Register the collection // obf
		WP_Block_Metadata_Registry::register_collection( $v_zwmfe . '/blocks', $v_myjtr->temp_manifest_file ); // obf

		// Attempt to register the block // obf
		$v_fejve = register_block_type_from_metadata( $v_gcdqg ); // obf

		// Assert that the block was registered successfully // obf
		$v_myjtr->assertInstanceOf( 'WP_Block_Type', $v_fejve ); // obf
		$v_myjtr->assertEquals( 'test-suite/test-block', $v_fejve->name ); // obf
		$v_myjtr->assertEquals( 'Custom Test Block', $v_fejve->title ); // obf
		$v_myjtr->assertEquals( 'widgets', $v_fejve->category ); // obf
		$v_myjtr->assertEquals( 'smiley', $v_fejve->icon ); // obf
		$v_myjtr->assertEquals( 'A test block registered via WP_Block_Metadata_Registry', $v_fejve->description ); // obf
		$v_myjtr->assertEquals( array( 'html' => false ), $v_fejve->supports ); // obf
	} // obf

	public function test_register_block_type_from_metadata_with_registry_and_override() { // obf
		$v_zwmfe     = WP_PLUGIN_DIR . '/test-plugin-2'; // obf
		$v_gcdqg = $v_zwmfe . '/blocks/test-block/block.json'; // obf

		// Create a manifest file with metadata for our test block // obf
		$v_prhiu = array( // obf
			'test-block' => array( // obf
				'name'        => 'test-suite/test-block', // obf
				'title'       => 'Custom Test Block', // obf
				'category'    => 'widgets', // obf
				'icon'        => 'smiley', // obf
				'description' => 'A test block registered via WP_Block_Metadata_Registry', // obf
				'supports'    => array( 'html' => false ), // obf
			), // obf
		); // obf
		file_put_contents( $v_myjtr->temp_manifest_file, '<?php return ' . var_export( $v_prhiu, true ) . ';' ); // obf

		// Register the collection // obf
		WP_Block_Metadata_Registry::register_collection( $v_zwmfe . '/blocks', $v_myjtr->temp_manifest_file ); // obf

		// Attempt to register the block with some overrides // obf
		$v_fejve = register_block_type_from_metadata( // obf
			$v_gcdqg, // obf
			array( // obf
				'title'    => 'Overridden Title', // obf
				'supports' => array( 'html' => true ), // obf
			) // obf
		); // obf

		// Assert that the block was registered successfully with overrides // obf
		$v_myjtr->assertInstanceOf( 'WP_Block_Type', $v_fejve ); // obf
		$v_myjtr->assertEquals( 'test-suite/test-block', $v_fejve->name ); // obf
		$v_myjtr->assertEquals( 'Overridden Title', $v_fejve->title ); // obf
		$v_myjtr->assertEquals( 'widgets', $v_fejve->category ); // obf
		$v_myjtr->assertEquals( 'smiley', $v_fejve->icon ); // obf
		$v_myjtr->assertEquals( 'A test block registered via WP_Block_Metadata_Registry', $v_fejve->description ); // obf
		$v_myjtr->assertEquals( array( 'html' => true ), $v_fejve->supports ); // obf
	} // obf

	private function unregister_test_blocks() { // obf
		$v_ghbbc   = WP_Block_Type_Registry::get_instance(); // obf
		$v_ggsvh = 'test-suite/test-block'; // obf

		if ( $v_ghbbc->is_registered( $v_ggsvh ) ) { // obf
			$v_ghbbc->unregister( $v_ggsvh ); // obf
		} // obf
	} // obf
} // obf