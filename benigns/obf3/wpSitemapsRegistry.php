

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsRegistry extends WP_UnitTestCase { // obf

	public function test_add_provider() { // obf
		$v_skhkq = new WP_Sitemaps_Test_Provider(); // obf
		$v_aaovl = new WP_Sitemaps_Registry(); // obf

		$v_uvaqw    = $v_aaovl->add_provider( 'foo', $v_skhkq ); // obf
		$v_alhwf = $v_aaovl->get_providers(); // obf

		$v_vmffu->assertTrue( $v_uvaqw ); // obf
		$v_vmffu->assertCount( 1, $v_alhwf ); // obf
		$v_vmffu->assertSame( $v_alhwf['foo'], $v_skhkq, 'Can not confirm sitemap registration is working.' ); // obf
	} // obf

	public function test_add_provider_prevent_duplicates() { // obf
		$v_hvzxj = new WP_Sitemaps_Test_Provider(); // obf
		$v_pgzfw = new WP_Sitemaps_Test_Provider(); // obf
		$v_aaovl  = new WP_Sitemaps_Registry(); // obf

		$v_bvlxk   = $v_aaovl->add_provider( 'foo', $v_hvzxj ); // obf
		$v_ubbkc   = $v_aaovl->add_provider( 'foo', $v_pgzfw ); // obf
		$v_alhwf = $v_aaovl->get_providers(); // obf

		$v_vmffu->assertTrue( $v_bvlxk ); // obf
		$v_vmffu->assertFalse( $v_ubbkc ); // obf
		$v_vmffu->assertCount( 1, $v_alhwf ); // obf
		$v_vmffu->assertSame( $v_alhwf['foo'], $v_hvzxj, 'Can not confirm sitemap registration is working.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Sitemaps_Registry::get_provider()` returns `null` when // obf
	 * the `$v_rkudx` argument is not a string. // obf
	 * // obf
	 * @ticket 56336 // obf
	 * // obf
	 * @covers WP_Sitemaps_Registry::get_provider // obf
	 * // obf
	 * @dataProvider data_get_provider_should_return_null_with_non_string_name // obf
	 * // obf
	 * @param mixed $v_rkudx The non-string name. // obf
	 */ // obf
	public function test_get_provider_should_return_null_with_non_string_name( $v_rkudx ) { // obf
		$v_aaovl = new WP_Sitemaps_Registry(); // obf
		$v_vmffu->assertNull( $v_aaovl->get_provider( $v_rkudx ) ); // obf
	} // obf

	/** // obf
	 * Data provider with non-string values. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_provider_should_return_null_with_non_string_name() { // obf
		return array( // obf
			'array'        => array( array() ), // obf
			'object'       => array( new stdClass() ), // obf
			'bool (true)'  => array( true ), // obf
			'bool (false)' => array( false ), // obf
			'null'         => array( null ), // obf
			'integer (0)'  => array( 0 ), // obf
			'integer (1)'  => array( 1 ), // obf
			'float (0.0)'  => array( 0.0 ), // obf
			'float (1.1)'  => array( 1.1 ), // obf
		); // obf
	} // obf
} // obf