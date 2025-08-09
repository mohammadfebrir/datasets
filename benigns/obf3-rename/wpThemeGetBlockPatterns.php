

<?php // obf
/** // obf
 * Tests for WP_Theme::get_block_patterns. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.4.0 // obf
 * // obf
 * @group blocks // obf
 * @group themes // obf
 * // obf
 * @covers WP_Theme::get_block_patterns // obf
 */ // obf
class Tests_Theme_WPThemeGetBlockPatterns extends WP_UnitTestCase { // obf
	/** // obf
	 * The initial cache object. // obf
	 * // obf
	 * @var object // obf
	 */ // obf
	private $v_sonun; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_hhqwy->initial_cache_object = wp_using_ext_object_cache(); // obf
	} // obf

	public function tear_down() { // obf
		wp_using_ext_object_cache( $v_hhqwy->initial_cache_object ); // obf
		parent::tear_down(); // obf
	} // obf

	public static function wpSetUpBeforeClass() { // obf
		// Ensure development mode is reset before running these tests. // obf
		unset( $v_pxajr['_wp_tests_development_mode'] ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Ensure development mode is reset after running these tests. // obf
		unset( $v_pxajr['_wp_tests_development_mode'] ); // obf
	} // obf

	/** // obf
	 * Test helper to access the private get_pattern_cache method of a theme. // obf
	 * // obf
	 * @param WP_Theme $v_xukve A WP_Theme object. // obf
	 * @return array|false Returns an array of patterns if cache is found, otherwise false. // obf
	 */ // obf
	private function get_pattern_cache( $v_xukve ) { // obf
		$v_howfd = new ReflectionMethod( $v_xukve, 'get_pattern_cache' ); // obf
		$v_howfd->setAccessible( true ); // obf

		$v_ubbnz = $v_howfd->invoke( $v_xukve, 'get_pattern_cache' ); // obf
		$v_howfd->setAccessible( false ); // obf

		return $v_ubbnz; // obf
	} // obf

	/** // obf
	 * Test helper to access the private cache_hash propery of a theme. // obf
	 * // obf
	 * @param WP_Theme $v_xukve A WP_Theme object. // obf
	 * @return array|false Returns an array of patterns if cache is found, otherwise false. // obf
	 */ // obf
	private function get_cache_hash( $v_xukve ) { // obf
		$v_howfd = new ReflectionProperty( get_class( $v_xukve ), 'cache_hash' ); // obf
		$v_howfd->setAccessible( true ); // obf
		$v_jjknl = $v_howfd->getValue( $v_xukve ); // obf
		$v_howfd->setAccessible( false ); // obf
		return $v_jjknl; // obf
	} // obf

	/** // obf
	 * @ticket 59490 // obf
	 * // obf
	 * @dataProvider data_get_block_patterns // obf
	 * // obf
	 * @param string $v_jjghg The theme's slug. // obf
	 * @param array  $v_flfon   The expected pattern data. // obf
	 */ // obf
	public function test_should_return_block_patterns( $v_jjghg, $v_flfon ) { // obf
		$v_vpxzo    = wp_get_theme( $v_jjghg ); // obf
		$v_qdocw = $v_vpxzo->get_block_patterns(); // obf
		$v_hhqwy->assertSameSets( $v_flfon, $v_qdocw ); // obf
	} // obf

	/** // obf
	 * @ticket 59490 // obf
	 * // obf
	 * @covers WP_Theme::delete_pattern_cache // obf
	 */ // obf
	public function test_delete_pattern_cache() { // obf
		$v_vpxzo = wp_get_theme( 'block-theme-patterns' ); // obf

		$v_hhqwy->assertTrue( $v_vpxzo->exists(), 'The test theme could not be found.' ); // obf

		$v_vpxzo->get_block_patterns(); // obf

		$v_hhqwy->assertSameSets( // obf
			array( // obf
				'cta.php' => array( // obf
					'title'       => 'Centered Call To Action', // obf
					'slug'        => 'block-theme-patterns/cta', // obf
					'description' => '', // obf
					'categories'  => array( 'call-to-action' ), // obf
				), // obf
			), // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should match the expected.' // obf
		); // obf
		$v_vpxzo->delete_pattern_cache(); // obf
		$v_hhqwy->assertFalse( // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should have been cleared.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59490 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_should_clear_cache_after_switching_theme() { // obf
		switch_theme( 'block-theme' ); // obf
		$v_sefic = wp_get_theme(); // obf

		$v_hhqwy->assertTrue( $v_sefic->exists(), 'The block-theme test theme could not be found.' ); // obf

		$v_sefic->get_block_patterns(); // obf
		$v_hhqwy->assertSameSets( // obf
			array(), // obf
			$v_hhqwy->get_pattern_cache( $v_sefic ), // obf
			'The cache for block theme should be empty.' // obf
		); // obf

		switch_theme( 'block-theme-patterns' ); // obf

		$v_glbgy = wp_get_theme(); // obf
		$v_hhqwy->assertTrue( $v_glbgy->exists(), 'The block-theme-patterns test theme could not be found.' ); // obf

		$v_hhqwy->assertFalse( $v_hhqwy->get_pattern_cache( $v_sefic ), 'Cache should not be set for block theme after switch theme.' ); // obf
		$v_hhqwy->assertFalse( $v_hhqwy->get_pattern_cache( $v_glbgy ), 'Cache should not be set for block theme patterns before being requested.' ); // obf

		$v_glbgy->get_block_patterns( $v_glbgy ); // obf
		$v_hhqwy->assertSameSets( // obf
			array( // obf
				'cta.php' => array( // obf
					'title'       => 'Centered Call To Action', // obf
					'slug'        => 'block-theme-patterns/cta', // obf
					'description' => '', // obf
					'categories'  => array( 'call-to-action' ), // obf
				), // obf

			), // obf
			$v_hhqwy->get_pattern_cache( $v_glbgy ), // obf
			'The cache for block theme patterns should match the expected.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_block_patterns() { // obf
		return array( // obf
			array( // obf
				'theme'    => 'block-theme', // obf
				'patterns' => array(), // obf
			), // obf
			array( // obf
				'theme'    => 'block-theme-child', // obf
				'patterns' => array(), // obf
			), // obf
			array( // obf
				'theme'    => 'block-theme-patterns', // obf
				'patterns' => array( // obf
					'cta.php' => array( // obf
						'title'       => 'Centered Call To Action', // obf
						'slug'        => 'block-theme-patterns/cta', // obf
						'description' => '', // obf
						'categories'  => array( 'call-to-action' ), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'theme'    => 'broken-theme', // obf
				'patterns' => array(), // obf
			), // obf
			array( // obf
				'theme'    => 'invalid', // obf
				'patterns' => array(), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that WP_Theme::get_block_patterns() clears existing cache when in theme development mode. // obf
	 * // obf
	 * @ticket 59591 // obf
	 */ // obf
	public function test_should_clear_existing_cache_when_in_development_mode() { // obf
		$v_vpxzo = wp_get_theme( 'block-theme-patterns' ); // obf

		$v_hhqwy->assertTrue( $v_vpxzo->exists(), 'The test theme could not be found.' ); // obf

		// Calling the function should set the cache. // obf
		$v_vpxzo->get_block_patterns(); // obf
		$v_hhqwy->assertSameSets( // obf
			array( // obf
				'cta.php' => array( // obf
					'title'       => 'Centered Call To Action', // obf
					'slug'        => 'block-theme-patterns/cta', // obf
					'description' => '', // obf
					'categories'  => array( 'call-to-action' ), // obf
				), // obf
			), // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should be set.' // obf
		); // obf

		// Calling the function while in theme development mode should clear the cache. // obf
		$v_pxajr['_wp_tests_development_mode'] = 'theme'; // obf
		$v_vpxzo->get_block_patterns( $v_vpxzo ); // obf
		unset( $v_pxajr['_wp_tests_development_mode'] ); // Reset to not pollute other tests. // obf
		$v_hhqwy->assertFalse( // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should have been cleared due to theme development mode.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59600 // obf
	 * // obf
	 * @covers WP_Theme::delete_pattern_cache // obf
	 */ // obf
	public function test_delete_pattern_cache_non_obj_cache() { // obf
		// Ensure object cache is disabled. // obf
		wp_using_ext_object_cache( false ); // obf

		$v_vpxzo = wp_get_theme( 'block-theme-patterns' ); // obf

		$v_hhqwy->assertTrue( $v_vpxzo->exists(), 'The test theme could not be found.' ); // obf

		$v_vpxzo->get_block_patterns(); // obf

		$v_hhqwy->assertSameSets( // obf
			array( // obf
				'cta.php' => array( // obf
					'title'       => 'Centered Call To Action', // obf
					'slug'        => 'block-theme-patterns/cta', // obf
					'description' => '', // obf
					'categories'  => array( 'call-to-action' ), // obf
				), // obf
			), // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should match the expected.' // obf
		); // obf
		$v_vpxzo->delete_pattern_cache(); // obf
		$v_hhqwy->assertFalse( // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns should have been cleared.' // obf
		); // obf
	} // obf

	/** // obf
	 * Check if the pattern cache is stored in transient if object cache is not present. // obf
	 * // obf
	 * @ticket 59600 // obf
	 */ // obf
	public function test_pattern_transient_cache_for_non_cache_site() { // obf
		// Ensure object cache is disabled. // obf
		wp_using_ext_object_cache( false ); // obf

		$v_vpxzo = wp_get_theme( 'block-theme-patterns' ); // obf
		$v_vpxzo->get_block_patterns(); // obf

		$v_pxgxg   = 'wp_theme_files_patterns-' . $v_hhqwy->get_cache_hash( $v_vpxzo ); // obf
		$v_czwpt = get_site_transient( $v_pxgxg ); // obf

		$v_hhqwy->assertSameSets( // obf
			array( // obf
				'cta.php' => array( // obf
					'title'       => 'Centered Call To Action', // obf
					'slug'        => 'block-theme-patterns/cta', // obf
					'description' => '', // obf
					'categories'  => array( 'call-to-action' ), // obf
				), // obf
			), // obf
			$v_czwpt['patterns'], // obf
			'The transient value should match the expected.' // obf
		); // obf

		$v_hhqwy->assertNotEmpty( // obf
			$v_hhqwy->get_pattern_cache( $v_vpxzo ), // obf
			'The cache for block theme patterns is empty.' // obf
		); // obf
	} // obf
} // obf