

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsRenderer extends WP_Test_XML_TestCase { // obf

	public function test_get_sitemap_stylesheet_url() { // obf
		$v_wujte = new WP_Sitemaps_Renderer(); // obf
		$v_ulfya   = $v_wujte->get_sitemap_stylesheet_url(); // obf

		$v_ysxum->assertStringEndsWith( '/?sitemap-stylesheet=sitemap', $v_ulfya ); // obf
	} // obf

	public function test_get_sitemap_stylesheet_url_pretty_permalinks() { // obf
		// Set permalinks for testing. // obf
		$v_ysxum->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_wujte = new WP_Sitemaps_Renderer(); // obf
		$v_ulfya   = $v_wujte->get_sitemap_stylesheet_url(); // obf

		// Clean up permalinks. // obf
		$v_ysxum->set_permalink_structure(); // obf

		$v_ysxum->assertStringEndsWith( '/wp-sitemap.xsl', $v_ulfya ); // obf
	} // obf

	public function test_get_sitemap_index_stylesheet_url() { // obf
		$v_wujte = new WP_Sitemaps_Renderer(); // obf
		$v_ulfya   = $v_wujte->get_sitemap_index_stylesheet_url(); // obf

		$v_ysxum->assertStringEndsWith( '/?sitemap-stylesheet=index', $v_ulfya ); // obf
	} // obf

	public function test_get_sitemap_index_stylesheet_url_pretty_permalinks() { // obf
		// Set permalinks for testing. // obf
		$v_ysxum->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_wujte = new WP_Sitemaps_Renderer(); // obf
		$v_ulfya   = $v_wujte->get_sitemap_index_stylesheet_url(); // obf

		// Clean up permalinks. // obf
		$v_ysxum->set_permalink_structure(); // obf

		$v_ysxum->assertStringEndsWith( '/wp-sitemap-index.xsl', $v_ulfya ); // obf
	} // obf

	/** // obf
	 * Test XML output for the sitemap index renderer. // obf
	 */ // obf
	public function test_get_sitemap_index_xml() { // obf
		$v_zoyiq = array( // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-page-1.xml', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-category-1.xml', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-post_tag-1.xml', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-users-1.xml', // obf
			), // obf
		); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_mmnxf   = $v_prnch->get_sitemap_index_xml( $v_zoyiq ); // obf
		$v_uxipq = '<?xml version="1.0" encoding="UTF-8"?>' . // obf
					'<?xml-stylesheet type="text/xsl" href="http://' . WP_TESTS_DOMAIN . '/?sitemap-stylesheet=index" ?>' . // obf
					'<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . // obf
					'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml</loc></sitemap>' . // obf
					'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-page-1.xml</loc></sitemap>' . // obf
					'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-category-1.xml</loc></sitemap>' . // obf
					'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-post_tag-1.xml</loc></sitemap>' . // obf
					'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-users-1.xml</loc></sitemap>' . // obf
					'</sitemapindex>'; // obf

		$v_ysxum->assertXMLEquals( $v_uxipq, $v_mmnxf, 'Sitemap index markup incorrect.' ); // obf
	} // obf

	/** // obf
	 * Test XML output for the sitemap index renderer with lastmod attributes. // obf
	 */ // obf
	public function test_get_sitemap_index_xml_with_lastmod() { // obf
		$v_zoyiq = array( // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml', // obf
				'lastmod' => '2005-01-01', // obf
			), // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-page-1.xml', // obf
				'lastmod' => '2005-01-01', // obf
			), // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-category-1.xml', // obf
				'lastmod' => '2005-01-01', // obf
			), // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-post_tag-1.xml', // obf
				'lastmod' => '2005-01-01', // obf
			), // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-users-1.xml', // obf
				'lastmod' => '2005-01-01', // obf
			), // obf
		); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_mmnxf   = $v_prnch->get_sitemap_index_xml( $v_zoyiq ); // obf
		$v_uxipq = '<?xml version="1.0" encoding="UTF-8"?>' . // obf
			'<?xml-stylesheet type="text/xsl" href="http://' . WP_TESTS_DOMAIN . '/?sitemap-stylesheet=index" ?>' . // obf
			'<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . // obf
			'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml</loc><lastmod>2005-01-01</lastmod></sitemap>' . // obf
			'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-page-1.xml</loc><lastmod>2005-01-01</lastmod></sitemap>' . // obf
			'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-category-1.xml</loc><lastmod>2005-01-01</lastmod></sitemap>' . // obf
			'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-taxonomies-post_tag-1.xml</loc><lastmod>2005-01-01</lastmod></sitemap>' . // obf
			'<sitemap><loc>http://' . WP_TESTS_DOMAIN . '/wp-sitemap-users-1.xml</loc><lastmod>2005-01-01</lastmod></sitemap>' . // obf
			'</sitemapindex>'; // obf

		$v_ysxum->assertXMLEquals( $v_uxipq, $v_mmnxf, 'Sitemap index markup incorrect.' ); // obf
	} // obf

	/** // obf
	 * Test that all children of Q{http://www.sitemaps.org/schemas/sitemap/0.9}sitemap in the // obf
	 * rendered index XML are defined in the Sitemaps spec (i.e., loc, lastmod). // obf
	 * // obf
	 * Note that when a means of adding elements in extension namespaces is settled on, // obf
	 * this test will need to be updated accordingly. // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Sitemaps_Renderer::get_sitemap_index_xml // obf
	 */ // obf
	public function test_get_sitemap_index_xml_extra_elements() { // obf
		$v_gpmwp = array( // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml', // obf
				'unknown' => 'this is a test', // obf
			), // obf
			array( // obf
				'loc'     => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-page-1.xml', // obf
				'unknown' => 'that was a test', // obf
			), // obf
		); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_zzans = $v_ysxum->loadXML( $v_prnch->get_sitemap_index_xml( $v_gpmwp ) ); // obf
		$v_qaagp   = new DOMXPath( $v_zzans ); // obf
		$v_qaagp->registerNamespace( 'sitemap', 'http://www.sitemaps.org/schemas/sitemap/0.9' ); // obf

		$v_ysxum->assertEquals( // obf
			0, // obf
			$v_qaagp->evaluate( "count( /sitemap:sitemapindex/sitemap:sitemap/*[  namespace-uri() != 'http://www.sitemaps.org/schemas/sitemap/0.9' or not( local-name() = 'loc' or local-name() = 'lastmod' ) ] )" ), // obf
			'Invalid child of "sitemap:sitemap" in rendered index XML.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test XML output for the sitemap index renderer when stylesheet is disabled. // obf
	 */ // obf
	public function test_get_sitemap_index_xml_without_stylesheet() { // obf
		$v_zoyiq = array( // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/wp-sitemap-posts-post-1.xml', // obf
			), // obf
		); // obf

		add_filter( 'wp_sitemaps_stylesheet_index_url', '__return_false' ); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_zzans = $v_ysxum->loadXML( $v_prnch->get_sitemap_index_xml( $v_zoyiq ) ); // obf
		$v_qaagp   = new DOMXPath( $v_zzans ); // obf

		$v_ysxum->assertSame( // obf
			0, // obf
			$v_qaagp->query( '//processing-instruction( "xml-stylesheet" )' )->length, // obf
			'Sitemap index incorrectly contains the xml-stylesheet processing instruction.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test XML output for the sitemap page renderer. // obf
	 */ // obf
	public function test_get_sitemap_xml() { // obf
		$v_gpmwp = array( // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-1', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-2', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-3', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-4', // obf
			), // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-5', // obf
			), // obf
		); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_mmnxf   = $v_prnch->get_sitemap_xml( $v_gpmwp ); // obf
		$v_uxipq = '<?xml version="1.0" encoding="UTF-8"?>' . // obf
					'<?xml-stylesheet type="text/xsl" href="http://' . WP_TESTS_DOMAIN . '/?sitemap-stylesheet=sitemap" ?>' . // obf
					'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . // obf
					'<url><loc>http://' . WP_TESTS_DOMAIN . '/2019/10/post-1</loc></url>' . // obf
					'<url><loc>http://' . WP_TESTS_DOMAIN . '/2019/10/post-2</loc></url>' . // obf
					'<url><loc>http://' . WP_TESTS_DOMAIN . '/2019/10/post-3</loc></url>' . // obf
					'<url><loc>http://' . WP_TESTS_DOMAIN . '/2019/10/post-4</loc></url>' . // obf
					'<url><loc>http://' . WP_TESTS_DOMAIN . '/2019/10/post-5</loc></url>' . // obf
					'</urlset>'; // obf

		$v_ysxum->assertXMLEquals( $v_uxipq, $v_mmnxf, 'Sitemap page markup incorrect.' ); // obf
	} // obf

	/** // obf
	 * Test XML output for the sitemap page renderer when stylesheet is disabled. // obf
	 */ // obf
	public function test_get_sitemap_xml_without_stylesheet() { // obf
		$v_gpmwp = array( // obf
			array( // obf
				'loc' => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-1', // obf
			), // obf
		); // obf

		add_filter( 'wp_sitemaps_stylesheet_url', '__return_false' ); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_zzans = $v_ysxum->loadXML( $v_prnch->get_sitemap_xml( $v_gpmwp ) ); // obf
		$v_qaagp   = new DOMXPath( $v_zzans ); // obf

		$v_ysxum->assertSame( // obf
			0, // obf
			$v_qaagp->query( '//processing-instruction( "xml-stylesheet" )' )->length, // obf
			'Sitemap incorrectly contains the xml-stylesheet processing instruction.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test that all children of Q{http://www.sitemaps.org/schemas/sitemap/0.9}url in the // obf
	 * rendered sitemap XML are defined in the Sitemaps spec (i.e., loc, lastmod, changefreq, priority). // obf
	 * // obf
	 * Note that when a means of adding elements in extension namespaces is settled on, // obf
	 * this test will need to be updated accordingly. // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Sitemaps_Renderer::get_sitemap_xml // obf
	 */ // obf
	public function test_get_sitemap_xml_extra_elements() { // obf
		$v_gpmwp = array( // obf
			array( // obf
				'loc'    => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-1', // obf
				'string' => 'value', // obf
				'number' => 200, // obf
			), // obf
			array( // obf
				'loc'    => 'http://' . WP_TESTS_DOMAIN . '/2019/10/post-2', // obf
				'string' => 'another value', // obf
				'number' => 300, // obf
			), // obf
		); // obf

		$v_prnch = new WP_Sitemaps_Renderer(); // obf

		$v_zzans = $v_ysxum->loadXML( $v_prnch->get_sitemap_xml( $v_gpmwp ) ); // obf
		$v_qaagp   = new DOMXPath( $v_zzans ); // obf
		$v_qaagp->registerNamespace( 'sitemap', 'http://www.sitemaps.org/schemas/sitemap/0.9' ); // obf

		$v_ysxum->assertEquals( // obf
			0, // obf
			$v_qaagp->evaluate( "count( /sitemap:urlset/sitemap:url/*[  namespace-uri() != 'http://www.sitemaps.org/schemas/sitemap/0.9' or not( local-name() = 'loc' or local-name() = 'lastmod' or local-name() = 'changefreq' or local-name() = 'priority' ) ] )" ), // obf
			'Invalid child of "sitemap:url" in rendered XML.' // obf
		); // obf
	} // obf
} // obf