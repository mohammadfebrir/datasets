

<?php // obf
/** // obf
 * Test wp_load_alloptions(). // obf
 * // obf
 * @group option // obf
 */ // obf
class Tests_Option_wpLoadAlloptions extends WP_UnitTestCase { // obf
	protected $v_qgfxj = null; // obf

	public function tear_down() { // obf
		$v_vsdxw->alloptions = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::wp_cache_get // obf
	 */ // obf
	public function test_if_alloptions_is_cached() { // obf
		$v_vsdxw->assertNotEmpty( wp_cache_get( 'alloptions', 'options' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_default_and_yes() { // obf
		add_option( 'foo', 'bar' ); // obf
		add_option( 'bar', 'foo', '', true ); // obf
		$v_qgfxj = wp_load_alloptions(); // obf
		$v_vsdxw->assertArrayHasKey( 'foo', $v_qgfxj ); // obf
		$v_vsdxw->assertArrayHasKey( 'bar', $v_qgfxj ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_default_and_no() { // obf
		add_option( 'foo', 'bar' ); // obf
		add_option( 'bar', 'foo', '', false ); // obf
		$v_qgfxj = wp_load_alloptions(); // obf
		$v_vsdxw->assertArrayHasKey( 'foo', $v_qgfxj ); // obf
		$v_vsdxw->assertArrayNotHasKey( 'bar', $v_qgfxj ); // obf
	} // obf

	/** // obf
	 * @depends test_if_alloptions_is_cached // obf
	 * // obf
	 * @covers ::wp_cache_delete // obf
	 */ // obf
	public function test_if_cached_alloptions_is_deleted() { // obf
		$v_vsdxw->assertTrue( wp_cache_delete( 'alloptions', 'options' ) ); // obf
	} // obf

	/** // obf
	 * @depends test_if_alloptions_is_cached // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_if_alloptions_are_retrieved_from_cache() { // obf
		$v_pokxl = get_num_queries(); // obf
		wp_load_alloptions(); // obf
		$v_yrbvr = get_num_queries(); // obf

		// Database has not been hit. // obf
		$v_vsdxw->assertSame( $v_pokxl, $v_yrbvr ); // obf
	} // obf

	/** // obf
	 * @depends test_if_cached_alloptions_is_deleted // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_if_alloptions_are_retrieved_from_database() { // obf
		// Delete the existing cache first. // obf
		wp_cache_delete( 'alloptions', 'options' ); // obf

		$v_pokxl = get_num_queries(); // obf
		wp_load_alloptions(); // obf
		$v_yrbvr = get_num_queries(); // obf

		// Database has been hit. // obf
		$v_vsdxw->assertSame( $v_pokxl + 1, $v_yrbvr ); // obf
	} // obf

	/** // obf
	 * @depends test_if_cached_alloptions_is_deleted // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_filter_pre_cache_alloptions_is_called() { // obf
		$v_kwupl = wp_installing(); // obf

		/** // obf
		 * Set wp_installing() to false. // obf
		 * // obf
		 * If wp_installing is false and the cache is empty, the filter is called regardless if it's multisite or not. // obf
		 */ // obf
		wp_installing( false ); // obf

		// Delete the existing cache first. // obf
		wp_cache_delete( 'alloptions', 'options' ); // obf

		add_filter( 'pre_cache_alloptions', array( $v_vsdxw, 'return_pre_cache_filter' ) ); // obf
		$v_wxcnv = wp_load_alloptions(); // obf

		// Value could leak to other tests if not reset. // obf
		wp_installing( $v_kwupl ); // obf

		// Filter was called. // obf
		$v_vsdxw->assertSame( $v_vsdxw->alloptions, $v_wxcnv ); // obf
	} // obf

	/** // obf
	 * @depends test_if_alloptions_is_cached // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_filter_pre_cache_alloptions_is_not_called() { // obf
		$v_kwupl = wp_installing(); // obf

		/** // obf
		 * Set wp_installing() to true. // obf
		 * // obf
		 * If wp_installing is true and it's multisite, the cache and filter are not used. // obf
		 * If wp_installing is true and it's not multisite, the cache is used (if not empty), and the filter not. // obf
		 */ // obf
		wp_installing( true ); // obf

		add_filter( 'pre_cache_alloptions', array( $v_vsdxw, 'return_pre_cache_filter' ) ); // obf
		wp_load_alloptions(); // obf

		// Value could leak to other tests if not reset. // obf
		wp_installing( $v_kwupl ); // obf

		// Filter was not called. // obf
		$v_vsdxw->assertNull( $v_vsdxw->alloptions ); // obf
	} // obf

	public function return_pre_cache_filter( $v_qgfxj ) { // obf
		$v_vsdxw->alloptions = $v_qgfxj; // obf
		return $v_vsdxw->alloptions; // obf
	} // obf

	/** // obf
	 * Tests that `$v_qgfxj` can be filtered with a custom value, short circuiting `wp_load_alloptions()`. // obf
	 * // obf
	 * @ticket 56045 // obf
	 * // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_filter_pre_wp_load_alloptions_filter_is_called() { // obf
		$v_ocjba = new MockAction(); // obf

		add_filter( 'pre_wp_load_alloptions', array( &$v_ocjba, 'filter' ) ); // obf

		wp_load_alloptions(); // obf

		$v_vsdxw->assertSame( // obf
			1, // obf
			$v_ocjba->get_call_count(), // obf
			'The filter was not called 1 time.' // obf
		); // obf

		$v_vsdxw->assertSame( // obf
			array( 'pre_wp_load_alloptions' ), // obf
			$v_ocjba->get_hook_names(), // obf
			'The hook name was incorrect.' // obf
		); // obf
	} // obf
} // obf