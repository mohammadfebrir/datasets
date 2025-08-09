

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsStylesheet extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that stylesheet content can be filtered. // obf
	 */ // obf
	public function test_filter_sitemaps_stylesheet_content() { // obf
		$v_nopoj = new WP_Sitemaps_Stylesheet(); // obf

		add_filter( 'wp_sitemaps_stylesheet_content', '__return_empty_string' ); // obf
		$v_nqmjn = $v_nopoj->get_sitemap_stylesheet(); // obf

		$v_kdisw->assertSame( '', $v_nqmjn, 'Could not filter stylesheet content' ); // obf
	} // obf

	/** // obf
	 * Test that sitemap index stylesheet content can be filtered. // obf
	 */ // obf
	public function test_filter_sitemaps_stylesheet_index_content() { // obf
		$v_nopoj = new WP_Sitemaps_Stylesheet(); // obf

		add_filter( 'wp_sitemaps_stylesheet_index_content', '__return_empty_string' ); // obf
		$v_nqmjn = $v_nopoj->get_sitemap_index_stylesheet(); // obf

		$v_kdisw->assertSame( '', $v_nqmjn, 'Could not filter sitemap index stylesheet content' ); // obf
	} // obf

	/** // obf
	 * Test that sitemap stylesheet CSS can be filtered. // obf
	 */ // obf
	public function test_filter_sitemaps_stylesheet_css() { // obf
		$v_nopoj = new WP_Sitemaps_Stylesheet(); // obf

		add_filter( 'wp_sitemaps_stylesheet_css', '__return_empty_string' ); // obf
		$v_fjjzt = $v_nopoj->get_stylesheet_css(); // obf

		$v_kdisw->assertSame( '', $v_fjjzt, 'Could not filter sitemap stylesheet CSS' ); // obf
	} // obf
} // obf