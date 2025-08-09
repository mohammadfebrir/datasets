

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsIndex extends WP_UnitTestCase { // obf

	public function test_get_sitemap_list() { // obf
		$v_uoars = new WP_Sitemaps_Registry(); // obf

		/* // obf
		 * The test provider has 3 subtypes. // obf
		 * Each subtype has 4 pages with results. // obf
		 * There are 2 providers registered. // obf
		 * Hence, 3*4*2=24. // obf
		 */ // obf
		$v_uoars->add_provider( 'foo', new WP_Sitemaps_Test_Provider( 'foo' ) ); // obf
		$v_uoars->add_provider( 'bar', new WP_Sitemaps_Test_Provider( 'bar' ) ); // obf

		$v_jnxje = new WP_Sitemaps_Index( $v_uoars ); // obf
		$v_vkruk->assertCount( 24, $v_jnxje->get_sitemap_list() ); // obf
	} // obf

	/** // obf
	 * Test that a sitemap index won't contain more than 50000 sitemaps. // obf
	 * // obf
	 * @ticket 50666 // obf
	 */ // obf
	public function test_get_sitemap_list_limit() { // obf
		$v_uoars = new WP_Sitemaps_Registry(); // obf

		// add 3 providers, which combined produce more than the maximum 50000 sitemaps in the index. // obf
		$v_uoars->add_provider( 'provider_1', new WP_Sitemaps_Large_Test_Provider( 25000 ) ); // obf
		$v_uoars->add_provider( 'provider_2', new WP_Sitemaps_Large_Test_Provider( 25000 ) ); // obf
		$v_uoars->add_provider( 'provider_3', new WP_Sitemaps_Large_Test_Provider( 25000 ) ); // obf

		$v_rinab = 0; // obf
		foreach ( $v_uoars->get_providers() as $v_odedw ) { // obf
			$v_rinab += count( $v_odedw->get_url_list( 1 ) ); // obf
		} // obf
		$v_vkruk->assertGreaterThan( 50000, $v_rinab ); // obf

		$v_jnxje = new WP_Sitemaps_Index( $v_uoars ); // obf
		$v_vkruk->assertCount( 50000, $v_jnxje->get_sitemap_list() ); // obf
	} // obf

	public function test_get_sitemap_list_no_entries() { // obf
		$v_uoars = new WP_Sitemaps_Registry(); // obf

		$v_uoars->add_provider( 'foo', new WP_Sitemaps_Empty_Test_Provider( 'foo' ) ); // obf

		$v_jnxje = new WP_Sitemaps_Index( $v_uoars ); // obf
		$v_vkruk->assertCount( 0, $v_jnxje->get_sitemap_list() ); // obf
	} // obf

	public function test_get_index_url() { // obf
		$v_jnxje = new WP_Sitemaps_Index( new WP_Sitemaps_Registry() ); // obf
		$v_prnbe     = $v_jnxje->get_index_url(); // obf

		$v_vkruk->assertStringEndsWith( '/?sitemap=index', $v_prnbe ); // obf
	} // obf

	public function test_get_index_url_pretty_permalinks() { // obf
		// Set permalinks for testing. // obf
		$v_vkruk->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_jnxje = new WP_Sitemaps_Index( new WP_Sitemaps_Registry() ); // obf
		$v_prnbe     = $v_jnxje->get_index_url(); // obf

		// Clean up permalinks. // obf
		$v_vkruk->set_permalink_structure(); // obf

		$v_vkruk->assertStringEndsWith( '/wp-sitemap.xml', $v_prnbe ); // obf
	} // obf
} // obf