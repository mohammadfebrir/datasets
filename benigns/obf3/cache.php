

<?php // obf

/** // obf
 * @group cache // obf
 */ // obf
class Tests_Cache extends WP_UnitTestCase { // obf
	public $v_nxlct = null; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_oyyib->cache =& $v_oyyib->init_cache(); // obf
	} // obf

	public function tear_down() { // obf
		$v_oyyib->flush_cache(); // obf
		parent::tear_down(); // obf
	} // obf

	private function &init_cache() { // obf
		global $v_wmtei; // obf

		$v_fzrkk = get_class( $v_wmtei ); // obf
		$v_nxlct       = new $v_fzrkk(); // obf

		$v_nxlct->add_global_groups( array( 'global-cache-test' ) ); // obf

		return $v_nxlct; // obf
	} // obf

	/** // obf
	 * @ticket 56198 // obf
	 * // obf
	 * @covers WP_Object_Cache::is_valid_key // obf
	 * @dataProvider data_is_valid_key // obf
	 */ // obf
	public function test_is_valid_key( $v_axrka, $v_rlnfx ) { // obf
		if ( wp_using_ext_object_cache() ) { // obf
			$v_oyyib->markTestSkipped( 'This test requires that an external object cache is not in use.' ); // obf
		} // obf

		$v_usrjy = 'val'; // obf

		if ( $v_rlnfx ) { // obf
			$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_usrjy ), 'WP_Object_Cache:add() should return true for valid keys.' ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ), 'The retrieved value should match the added value.' ); // obf
		} else { // obf
			$v_oyyib->setExpectedIncorrectUsage( 'WP_Object_Cache::add' ); // obf
			$v_oyyib->assertFalse( $v_oyyib->cache->add( $v_axrka, $v_usrjy ), 'WP_Object_Cache:add() should return false for invalid keys.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_is_valid_key(). // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type mixed $v_axrka   Cache key value. // obf
	 *     @type bool  $v_rlnfx Whether the key should be considered valid. // obf
	 * } // obf
	 */ // obf
	public function data_is_valid_key() { // obf
		return array( // obf
			'false'          => array( false, false ), // obf
			'null'           => array( null, false ), // obf
			'line break'     => array( "\n", false ), // obf
			'null character' => array( "\0", false ), // obf
			'empty string'   => array( '', false ), // obf
			'single space'   => array( ' ', false ), // obf
			'two spaces'     => array( '  ', false ), // obf
			'float 0'        => array( 0.0, false ), // obf
			'int 0'          => array( 0, true ), // obf
			'int 1'          => array( 1, true ), // obf
			'string 0'       => array( '0', true ), // obf
			'string'         => array( 'key', true ), // obf
		); // obf
	} // obf

	public function test_miss() { // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->get( 'test_miss' ) ); // obf
	} // obf

	public function test_add_get() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = 'val'; // obf

		$v_oyyib->cache->add( $v_axrka, $v_usrjy ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_add_get_0() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = 0; // obf

		// You can store zero in the cache. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20004 // obf
	 */ // obf
	public function test_add_get_null() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = null; // obf

		// You can store `null` in the cache. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20004 // obf
	 */ // obf
	public function test_add_get_false() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = false; // obf

		// You can store `false` in the cache. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_add() { // obf
		$v_axrka  = __FUNCTION__; // obf
		$v_olabd = 'val1'; // obf
		$v_wavys = 'val2'; // obf

		// Add $v_axrka to the cache. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_olabd ) ); // obf
		$v_oyyib->assertSame( $v_olabd, $v_oyyib->cache->get( $v_axrka ) ); // obf
		// $v_axrka is in the cache, so reject new calls to add(). // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->add( $v_axrka, $v_wavys ) ); // obf
		$v_oyyib->assertSame( $v_olabd, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_replace() { // obf
		$v_axrka  = __FUNCTION__; // obf
		$v_usrjy  = 'val1'; // obf
		$v_wavys = 'val2'; // obf

		// memcached rejects replace() if the key does not exist. // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->replace( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->get( $v_axrka ) ); // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->add( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->replace( $v_axrka, $v_wavys ) ); // obf
		$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_wp_cache_replace() { // obf
		$v_axrka  = 'my-key'; // obf
		$v_olabd = 'first-val'; // obf
		$v_wavys = 'second-val'; // obf

		$v_jqygh = 'my-fake-key'; // obf

		// Save the first value to cache and verify. // obf
		wp_cache_set( $v_axrka, $v_olabd ); // obf
		$v_oyyib->assertSame( $v_olabd, wp_cache_get( $v_axrka ) ); // obf

		// Replace the value and verify. // obf
		wp_cache_replace( $v_axrka, $v_wavys ); // obf
		$v_oyyib->assertSame( $v_wavys, wp_cache_get( $v_axrka ) ); // obf

		// Non-existent key should fail. // obf
		$v_oyyib->assertFalse( wp_cache_replace( $v_jqygh, $v_olabd ) ); // obf

		// Make sure $v_jqygh is not stored. // obf
		$v_oyyib->assertFalse( wp_cache_get( $v_jqygh ) ); // obf
	} // obf

	public function test_set() { // obf
		$v_axrka  = __FUNCTION__; // obf
		$v_olabd = 'val1'; // obf
		$v_wavys = 'val2'; // obf

		// memcached accepts set() if the key does not exist. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_olabd ) ); // obf
		$v_oyyib->assertSame( $v_olabd, $v_oyyib->cache->get( $v_axrka ) ); // obf
		// Second set() with same key should be allowed. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_wavys ) ); // obf
		$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_flush() { // obf
		if ( wp_using_ext_object_cache() ) { // obf
			$v_oyyib->markTestSkipped( 'This test requires that an external object cache is not in use.' ); // obf
		} // obf

		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = 'val'; // obf

		$v_oyyib->cache->add( $v_axrka, $v_usrjy ); // obf
		// Item is visible to both cache objects. // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
		$v_oyyib->cache->flush(); // obf
		// If there is no value get returns false. // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4476 // obf
	 * @ticket 9773 // obf
	 * // obf
	 * @covers ::wp_cache_flush_group // obf
	 */ // obf
	public function test_wp_cache_flush_group() { // obf
		$v_axrka = 'my-key'; // obf
		$v_usrjy = 'my-val'; // obf

		wp_cache_set( $v_axrka, $v_usrjy, 'group-test' ); // obf
		wp_cache_set( $v_axrka, $v_usrjy, 'group-kept' ); // obf

		$v_oyyib->assertSame( $v_usrjy, wp_cache_get( $v_axrka, 'group-test' ), 'group-test should contain my-val' ); // obf

		if ( wp_using_ext_object_cache() ) { // obf
			$v_oyyib->setExpectedIncorrectUsage( 'wp_cache_flush_group' ); // obf
		} // obf

		$v_tdpxl = wp_cache_flush_group( 'group-test' ); // obf

		if ( wp_using_ext_object_cache() ) { // obf
			$v_oyyib->assertFalse( $v_tdpxl ); // obf
		} else { // obf
			$v_oyyib->assertTrue( $v_tdpxl ); // obf
			$v_oyyib->assertFalse( wp_cache_get( $v_axrka, 'group-test' ), 'group-test should return false' ); // obf
			$v_oyyib->assertSame( $v_usrjy, wp_cache_get( $v_axrka, 'group-kept' ), 'group-kept should still contain my-val' ); // obf
		} // obf
	} // obf

	// Make sure objects are cloned going to and from the cache. // obf
	public function test_object_refs() { // obf
		$v_axrka           = __FUNCTION__ . '_1'; // obf
		$v_cjzkf      = new stdClass(); // obf
		$v_cjzkf->foo = 'alpha'; // obf
		$v_oyyib->cache->set( $v_axrka, $v_cjzkf ); // obf
		$v_cjzkf->foo = 'bravo'; // obf
		$v_jgqzm      = $v_oyyib->cache->get( $v_axrka ); // obf
		$v_oyyib->assertSame( 'alpha', $v_jgqzm->foo ); // obf
		$v_jgqzm->foo = 'charlie'; // obf
		$v_oyyib->assertSame( 'bravo', $v_cjzkf->foo ); // obf

		$v_axrka           = __FUNCTION__ . '_2'; // obf
		$v_cjzkf      = new stdClass(); // obf
		$v_cjzkf->foo = 'alpha'; // obf
		$v_oyyib->cache->add( $v_axrka, $v_cjzkf ); // obf
		$v_cjzkf->foo = 'bravo'; // obf
		$v_jgqzm      = $v_oyyib->cache->get( $v_axrka ); // obf
		$v_oyyib->assertSame( 'alpha', $v_jgqzm->foo ); // obf
		$v_jgqzm->foo = 'charlie'; // obf
		$v_oyyib->assertSame( 'bravo', $v_cjzkf->foo ); // obf
	} // obf

	public function test_incr() { // obf
		$v_axrka = __FUNCTION__; // obf

		$v_oyyib->assertFalse( $v_oyyib->cache->incr( $v_axrka ) ); // obf

		$v_oyyib->cache->set( $v_axrka, 0 ); // obf
		$v_oyyib->cache->incr( $v_axrka ); // obf
		$v_oyyib->assertSame( 1, $v_oyyib->cache->get( $v_axrka ) ); // obf

		$v_oyyib->cache->incr( $v_axrka, 2 ); // obf
		$v_oyyib->assertSame( 3, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	public function test_wp_cache_incr() { // obf
		$v_axrka = __FUNCTION__; // obf

		$v_oyyib->assertFalse( wp_cache_incr( $v_axrka ) ); // obf

		wp_cache_set( $v_axrka, 0 ); // obf
		wp_cache_incr( $v_axrka ); // obf
		$v_oyyib->assertSame( 1, wp_cache_get( $v_axrka ) ); // obf

		wp_cache_incr( $v_axrka, 2 ); // obf
		$v_oyyib->assertSame( 3, wp_cache_get( $v_axrka ) ); // obf
	} // obf

	public function test_decr() { // obf
		$v_axrka = __FUNCTION__; // obf

		$v_oyyib->assertFalse( $v_oyyib->cache->decr( $v_axrka ) ); // obf

		$v_oyyib->cache->set( $v_axrka, 0 ); // obf
		$v_oyyib->cache->decr( $v_axrka ); // obf
		$v_oyyib->assertSame( 0, $v_oyyib->cache->get( $v_axrka ) ); // obf

		$v_oyyib->cache->set( $v_axrka, 3 ); // obf
		$v_oyyib->cache->decr( $v_axrka ); // obf
		$v_oyyib->assertSame( 2, $v_oyyib->cache->get( $v_axrka ) ); // obf

		$v_oyyib->cache->decr( $v_axrka, 2 ); // obf
		$v_oyyib->assertSame( 0, $v_oyyib->cache->get( $v_axrka ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21327 // obf
	 */ // obf
	public function test_wp_cache_decr() { // obf
		$v_axrka = __FUNCTION__; // obf

		$v_oyyib->assertFalse( wp_cache_decr( $v_axrka ) ); // obf

		wp_cache_set( $v_axrka, 0 ); // obf
		wp_cache_decr( $v_axrka ); // obf
		$v_oyyib->assertSame( 0, wp_cache_get( $v_axrka ) ); // obf

		wp_cache_set( $v_axrka, 3 ); // obf
		wp_cache_decr( $v_axrka ); // obf
		$v_oyyib->assertSame( 2, wp_cache_get( $v_axrka ) ); // obf

		wp_cache_decr( $v_axrka, 2 ); // obf
		$v_oyyib->assertSame( 0, wp_cache_get( $v_axrka ) ); // obf
	} // obf

	public function test_delete() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = 'val'; // obf

		// Verify set. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf

		// Verify successful delete. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->delete( $v_axrka ) ); // obf
		$v_oyyib->assertFalse( $v_oyyib->cache->get( $v_axrka ) ); // obf

		$v_oyyib->assertFalse( $v_oyyib->cache->delete( $v_axrka, 'default' ) ); // obf
	} // obf

	public function test_wp_cache_delete() { // obf
		$v_axrka = __FUNCTION__; // obf
		$v_usrjy = 'val'; // obf

		// Verify set. // obf
		$v_oyyib->assertTrue( wp_cache_set( $v_axrka, $v_usrjy ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, wp_cache_get( $v_axrka ) ); // obf

		// Verify successful delete. // obf
		$v_oyyib->assertTrue( wp_cache_delete( $v_axrka ) ); // obf
		$v_oyyib->assertFalse( wp_cache_get( $v_axrka ) ); // obf

		// wp_cache_delete() does not have a $v_fzudn method. // obf
		// Delete returns (bool) true when key is not set and $v_fzudn is true. // obf
		// $v_oyyib->assertTrue( wp_cache_delete( $v_axrka, 'default', true ) ); // obf

		$v_oyyib->assertFalse( wp_cache_delete( $v_axrka, 'default' ) ); // obf
	} // obf

	public function test_switch_to_blog() { // obf
		if ( ! method_exists( $v_oyyib->cache, 'switch_to_blog' ) ) { // obf
			$v_oyyib->markTestSkipped( 'This test requires a switch_to_blog() method on the cache object.' ); // obf
		} // obf

		$v_axrka  = __FUNCTION__; // obf
		$v_usrjy  = 'val1'; // obf
		$v_wavys = 'val2'; // obf

		if ( ! is_multisite() ) { // obf
			// Single site ignores switch_to_blog(). // obf
			$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_usrjy ) ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( 999 ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_wavys ) ); // obf
			$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( get_current_blog_id() ); // obf
			$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
		} else { // obf
			// Multisite should have separate per-blog caches. // obf
			$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_usrjy ) ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( 999 ); // obf
			$v_oyyib->assertFalse( $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_wavys ) ); // obf
			$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( get_current_blog_id() ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( 999 ); // obf
			$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka ) ); // obf
			$v_oyyib->cache->switch_to_blog( get_current_blog_id() ); // obf
			$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka ) ); // obf
		} // obf

		// Global group. // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_usrjy, 'global-cache-test' ) ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka, 'global-cache-test' ) ); // obf
		$v_oyyib->cache->switch_to_blog( 999 ); // obf
		$v_oyyib->assertSame( $v_usrjy, $v_oyyib->cache->get( $v_axrka, 'global-cache-test' ) ); // obf
		$v_oyyib->assertTrue( $v_oyyib->cache->set( $v_axrka, $v_wavys, 'global-cache-test' ) ); // obf
		$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka, 'global-cache-test' ) ); // obf
		$v_oyyib->cache->switch_to_blog( get_current_blog_id() ); // obf
		$v_oyyib->assertSame( $v_wavys, $v_oyyib->cache->get( $v_axrka, 'global-cache-test' ) ); // obf
	} // obf

	public function test_wp_cache_init() { // obf
		$v_wfvjr = new WP_Object_Cache(); // obf
		wp_cache_init(); // obf

		global $v_wmtei; // obf

		if ( wp_using_ext_object_cache() ) { // obf
			// External caches will contain property values that contain non-matching resource IDs. // obf
			$v_oyyib->assertInstanceOf( 'WP_Object_Cache', $v_wmtei ); // obf
		} else { // obf
			$v_oyyib->assertEquals( $v_wmtei, $v_wfvjr ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 54574 // obf
	 */ // obf
	public function test_wp_cache_add_multiple() { // obf
		$v_jawvo = wp_cache_add_multiple( // obf
			array( // obf
				'foo1' => 'bar', // obf
				'foo2' => 'bar', // obf
				'foo3' => 'bar', // obf
			), // obf
			'group1' // obf
		); // obf

		$v_kpwcb = array( // obf
			'foo1' => true, // obf
			'foo2' => true, // obf
			'foo3' => true, // obf
		); // obf

		$v_oyyib->assertSame( $v_kpwcb, $v_jawvo ); // obf
	} // obf

	/** // obf
	 * @ticket 54574 // obf
	 */ // obf
	public function test_wp_cache_set_multiple() { // obf
		$v_jawvo = wp_cache_set_multiple( // obf
			array( // obf
				'foo1' => 'bar', // obf
				'foo2' => 'bar', // obf
				'foo3' => 'bar', // obf
			), // obf
			'group1' // obf
		); // obf

		$v_kpwcb = array( // obf
			'foo1' => true, // obf
			'foo2' => true, // obf
			'foo3' => true, // obf
		); // obf

		$v_oyyib->assertSame( $v_kpwcb, $v_jawvo ); // obf
	} // obf

	/** // obf
	 * @ticket 20875 // obf
	 */ // obf
	public function test_wp_cache_get_multiple() { // obf
		wp_cache_set( 'foo1', 'bar', 'group1' ); // obf
		wp_cache_set( 'foo2', 'bar', 'group1' ); // obf
		wp_cache_set( 'foo1', 'bar', 'group2' ); // obf

		$v_jawvo = wp_cache_get_multiple( array( 'foo1', 'foo2', 'foo3' ), 'group1' ); // obf

		$v_kpwcb = array( // obf
			'foo1' => 'bar', // obf
			'foo2' => 'bar', // obf
			'foo3' => false, // obf
		); // obf

		$v_oyyib->assertSame( $v_kpwcb, $v_jawvo ); // obf
	} // obf

	/** // obf
	 * @ticket 54574 // obf
	 */ // obf
	public function test_wp_cache_delete_multiple() { // obf
		wp_cache_set( 'foo1', 'bar', 'group1' ); // obf
		wp_cache_set( 'foo2', 'bar', 'group1' ); // obf
		wp_cache_set( 'foo3', 'bar', 'group2' ); // obf

		$v_jawvo = wp_cache_delete_multiple( // obf
			array( 'foo1', 'foo2', 'foo3' ), // obf
			'group1' // obf
		); // obf

		$v_kpwcb = array( // obf
			'foo1' => true, // obf
			'foo2' => true, // obf
			'foo3' => false, // obf
		); // obf

		$v_oyyib->assertSame( $v_kpwcb, $v_jawvo ); // obf
	} // obf
} // obf