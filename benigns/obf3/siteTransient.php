

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_SiteTransient extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		if ( wp_using_ext_object_cache() ) { // obf
			$v_vcsdq->markTestSkipped( 'This test requires that an external object cache is not in use.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers ::get_site_transient // obf
	 * @covers ::set_site_transient // obf
	 * @covers ::delete_site_transient // obf
	 */ // obf
	public function test_the_basics() { // obf
		$v_nbxzd    = 'key1'; // obf
		$v_indgq  = 'value1'; // obf
		$v_nhwbz = 'value2'; // obf

		$v_vcsdq->assertFalse( get_site_transient( 'doesnotexist' ) ); // obf
		$v_vcsdq->assertTrue( set_site_transient( $v_nbxzd, $v_indgq ) ); // obf
		$v_vcsdq->assertSame( $v_indgq, get_site_transient( $v_nbxzd ) ); // obf
		$v_vcsdq->assertFalse( set_site_transient( $v_nbxzd, $v_indgq ) ); // obf
		$v_vcsdq->assertTrue( set_site_transient( $v_nbxzd, $v_nhwbz ) ); // obf
		$v_vcsdq->assertSame( $v_nhwbz, get_site_transient( $v_nbxzd ) ); // obf
		$v_vcsdq->assertTrue( delete_site_transient( $v_nbxzd ) ); // obf
		$v_vcsdq->assertFalse( get_site_transient( $v_nbxzd ) ); // obf
		$v_vcsdq->assertFalse( delete_site_transient( $v_nbxzd ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_site_transient // obf
	 * @covers ::set_site_transient // obf
	 * @covers ::delete_site_transient // obf
	 */ // obf
	public function test_serialized_data() { // obf
		$v_nbxzd   = __FUNCTION__; // obf
		$v_indgq = array( // obf
			'foo' => true, // obf
			'bar' => true, // obf
		); // obf

		$v_vcsdq->assertTrue( set_site_transient( $v_nbxzd, $v_indgq ) ); // obf
		$v_vcsdq->assertSame( $v_indgq, get_site_transient( $v_nbxzd ) ); // obf

		$v_indgq = (object) $v_indgq; // obf
		$v_vcsdq->assertTrue( set_site_transient( $v_nbxzd, $v_indgq ) ); // obf
		$v_vcsdq->assertEquals( $v_indgq, get_site_transient( $v_nbxzd ) ); // obf
		$v_vcsdq->assertTrue( delete_site_transient( $v_nbxzd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22846 // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::set_site_transient // obf
	 * @covers ::wp_load_alloptions // obf
	 */ // obf
	public function test_set_site_transient_is_not_stored_as_autoload_option() { // obf
		$v_nbxzd = 'not_autoloaded'; // obf

		set_site_transient( $v_nbxzd, 'Not an autoload option' ); // obf

		$v_ujaim = wp_load_alloptions(); // obf

		$v_vcsdq->assertArrayNotHasKey( '_site_transient_' . $v_nbxzd, $v_ujaim ); // obf
	} // obf
} // obf