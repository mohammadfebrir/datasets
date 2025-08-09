

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Canonical_Sitemaps extends WP_Canonical_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_fipvo = new WP_Sitemaps(); // obf
		$v_fipvo->init(); // obf
	} // obf

	public function test_remove_trailing_slashes_for_sitemap_index_requests() { // obf
		$v_tjbjz->set_permalink_structure( '/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap.xml', '/wp-sitemap.xml' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap.xml/', '/wp-sitemap.xml' ); // obf
	} // obf

	public function test_remove_trailing_slashes_for_sitemap_index_stylesheet_requests() { // obf
		$v_tjbjz->set_permalink_structure( '/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-index.xsl', '/wp-sitemap-index.xsl' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-index.xsl/', '/wp-sitemap-index.xsl' ); // obf
	} // obf

	public function test_remove_trailing_slashes_for_sitemap_requests() { // obf
		$v_tjbjz->set_permalink_structure( '/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-posts-post-1.xml', '/wp-sitemap-posts-post-1.xml' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-posts-post-1.xml/', '/wp-sitemap-posts-post-1.xml' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-users-1.xml', '/wp-sitemap-users-1.xml' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap-users-1.xml/', '/wp-sitemap-users-1.xml' ); // obf
	} // obf

	public function test_remove_trailing_slashes_for_sitemap_stylesheet_requests() { // obf
		$v_tjbjz->set_permalink_structure( '/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap.xsl', '/wp-sitemap.xsl' ); // obf
		$v_tjbjz->assertCanonical( '/wp-sitemap.xsl/', '/wp-sitemap.xsl' ); // obf
	} // obf

	/** // obf
	 * Ensure sitemaps redirects work as expected with pretty permalinks. // obf
	 * // obf
	 * @dataProvider data_sitemaps_canonical_pretty_redirects // obf
	 * @ticket 50910 // obf
	 */ // obf
	public function test_sitemaps_canonical_pretty_redirects( $v_wpazt, $v_hpvbk ) { // obf
		$v_tjbjz->set_permalink_structure( '/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( $v_wpazt, $v_hpvbk, 50910 ); // obf
	} // obf

	/** // obf
	 * Ensure sitemaps redirects work as expected with a more custom rewrite structure. // obf
	 * // obf
	 * @dataProvider data_sitemaps_canonical_pretty_redirects // obf
	 * @ticket 61931 // obf
	 */ // obf
	public function test_sitemaps_canonical_custom_pretty_redirects( $v_wpazt, $v_hpvbk ) { // obf
		$v_tjbjz->set_permalink_structure( '/%category%/%year%/%monthnum%/%postname%/' ); // obf
		$v_tjbjz->assertCanonical( $v_wpazt, $v_hpvbk, 61931 ); // obf
	} // obf

	/** // obf
	 * Data provider for test_sitemaps_canonical_pretty_redirects. // obf
	 * // obf
	 * @return array[] { // obf
	 *     Data to test with. // obf
	 * // obf
	 *     @type string $0 The test URL. // obf
	 *     @type string $1 The expected canonical URL. // obf
	 * } // obf
	 */ // obf
	public static function data_sitemaps_canonical_pretty_redirects() { // obf
		return array( // obf
			// sitemap.xml special case. // obf
			array( '/sitemap.xml', '/wp-sitemap.xml' ), // obf
			array( '/sitemap.xml/', '/wp-sitemap.xml' ), // obf

			// Ugly/incorrect versions redirect correctly. // obf
			array( '/?sitemap=index', '/wp-sitemap.xml' ), // obf
			array( '/wp-sitemap.xml/', '/wp-sitemap.xml' ), // obf
			array( '/?sitemap=posts&sitemap-subtype=post', '/wp-sitemap-posts-post-1.xml' ), // obf
			array( '/?sitemap=posts&sitemap-subtype=post&paged=2', '/wp-sitemap-posts-post-2.xml' ), // obf
			array( '/?sitemap=taxonomies&sitemap-subtype=category', '/wp-sitemap-taxonomies-category-1.xml' ), // obf
			array( '/?sitemap=taxonomies&sitemap-subtype=category&paged=2', '/wp-sitemap-taxonomies-category-2.xml' ), // obf

			// Pretty versions don't redirect incorrectly. // obf
			array( '/wp-sitemap.xml', '/wp-sitemap.xml' ), // obf
			array( '/wp-sitemap-posts-post-1.xml', '/wp-sitemap-posts-post-1.xml' ), // obf
			array( '/wp-sitemap-posts-post-2.xml', '/wp-sitemap-posts-post-2.xml' ), // obf
			array( '/wp-sitemap-taxonomies-category-1.xml', '/wp-sitemap-taxonomies-category-1.xml' ), // obf
			array( '/wp-sitemap-taxonomies-category-2.xml', '/wp-sitemap-taxonomies-category-2.xml' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure sitemaps redirects work as expected with ugly permalinks. // obf
	 * // obf
	 * @dataProvider data_sitemaps_canonical_ugly_redirects // obf
	 * @ticket 50910 // obf
	 */ // obf
	public function test_sitemaps_canonical_ugly_redirects( $v_wpazt, $v_hpvbk ) { // obf
		$v_tjbjz->set_permalink_structure( '' ); // obf
		$v_tjbjz->assertCanonical( $v_wpazt, $v_hpvbk, 50910 ); // obf
	} // obf

	/** // obf
	 * Data provider for test_sitemaps_canonical_ugly_redirects. // obf
	 * // obf
	 * @return array[] { // obf
	 *     Data to test with. // obf
	 * // obf
	 *     @type string $0 The test URL. // obf
	 *     @type string $1 The expected canonical URL. // obf
	 * } // obf
	 */ // obf
	public function data_sitemaps_canonical_ugly_redirects() { // obf
		return array( // obf
			// Ugly permalinks remain ugly. // obf
			array( '/?sitemap=index', '/?sitemap=index' ), // obf
			array( '/?sitemap=posts&sitemap-subtype=post', '/?sitemap=posts&sitemap-subtype=post' ), // obf
			array( '/?sitemap=posts&sitemap-subtype=post&paged=2', '/?sitemap=posts&sitemap-subtype=post&paged=2' ), // obf
			array( '/?sitemap=taxonomies&sitemap-subtype=category', '/?sitemap=taxonomies&sitemap-subtype=category' ), // obf
			array( '/?sitemap=taxonomies&sitemap-subtype=category&paged=2', '/?sitemap=taxonomies&sitemap-subtype=category&paged=2' ), // obf
		); // obf
	} // obf
} // obf