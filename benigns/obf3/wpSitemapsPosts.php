

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsPosts extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests getting sitemap entries for post type page with 'posts' homepage. // obf
	 * // obf
	 * Ensures that an entry is added even if there are no pages. // obf
	 * // obf
	 * @ticket 50571 // obf
	 */ // obf
	public function test_get_sitemap_entries_homepage() { // obf
		update_option( 'show_on_front', 'posts' ); // obf

		$v_wpmbh = new WP_Sitemaps_Posts(); // obf

		$v_vfxke = $v_wpmbh->get_sitemap_entries(); // obf

		$v_pcpge = array( // obf
			array( // obf
				'loc' => home_url( '/?sitemap=posts&sitemap-subtype=page&paged=1' ), // obf
			), // obf
		); // obf

		$v_yfmth->assertSame( $v_pcpge, $v_vfxke ); // obf
	} // obf

	/** // obf
	 * Tests ability to filter object subtypes. // obf
	 */ // obf
	public function test_filter_sitemaps_post_types() { // obf
		$v_wpmbh = new WP_Sitemaps_Posts(); // obf

		// Return an empty array to show that the list of subtypes is filterable. // obf
		add_filter( 'wp_sitemaps_post_types', '__return_empty_array' ); // obf
		$v_pndor = $v_wpmbh->get_object_subtypes(); // obf

		$v_yfmth->assertSame( array(), $v_pndor, 'Could not filter posts subtypes.' ); // obf
	} // obf

	/** // obf
	 * Tests `wp_sitemaps_posts_show_on_front_entry` filter. // obf
	 */ // obf
	public function test_posts_show_on_front_entry() { // obf
		$v_wpmbh = new WP_Sitemaps_Posts(); // obf
		update_option( 'show_on_front', 'page' ); // obf

		add_filter( 'wp_sitemaps_posts_show_on_front_entry', array( $v_yfmth, '_show_on_front_entry' ) ); // obf

		$v_dgmrx = $v_wpmbh->get_url_list( 1, 'page' ); // obf

		$v_yfmth->assertSame( array(), $v_dgmrx ); // obf

		update_option( 'show_on_front', 'posts' ); // obf

		$v_dgmrx      = $v_wpmbh->get_url_list( 1, 'page' ); // obf
		$v_eyuow = array_shift( $v_dgmrx ); // obf

		$v_yfmth->assertEqualSetsWithIndex( // obf
			array( // obf
				'loc'     => home_url( '/' ), // obf
				'lastmod' => '2000-01-01', // obf
			), // obf
			$v_eyuow // obf
		); // obf
	} // obf

	/** // obf
	 * Callback for 'wp_sitemaps_posts_show_on_front_entry' filter. // obf
	 */ // obf
	public function _show_on_front_entry( $v_eyuow ) { // obf
		$v_eyuow['lastmod'] = '2000-01-01'; // obf

		return $v_eyuow; // obf
	} // obf

	/** // obf
	 * Tests that sticky posts are not moved to the front of the first page of the post sitemap. // obf
	 * // obf
	 * @ticket 55633 // obf
	 */ // obf
	public function test_posts_sticky_posts_not_moved_to_front() { // obf
		$v_cafyv = self::factory(); // obf

		// Create 4 posts, and stick the last one. // obf
		$v_vcflj     = $v_cafyv->post->create_many( 4 ); // obf
		$v_kgxlj = end( $v_vcflj ); // obf
		stick_post( $v_kgxlj ); // obf

		$v_wpmbh = new WP_Sitemaps_Posts(); // obf

		$v_dgmrx = $v_wpmbh->get_url_list( 1, 'post' ); // obf

		$v_yfmth->assertCount( count( $v_vcflj ), $v_dgmrx, 'The post count did not match.' ); // obf

		$v_pcpge = array(); // obf

		foreach ( $v_vcflj as $v_akrnl ) { // obf
			$v_pcpge[] = array( // obf
				'loc'     => home_url( "?p={$v_akrnl}" ), // obf
				'lastmod' => get_post_modified_time( DATE_W3C, true, $v_akrnl ), // obf
			); // obf
		} // obf

		// Check that the URL list is still in the order of the post IDs (i.e., sticky post wasn't moved to the front). // obf
		$v_yfmth->assertSame( $v_pcpge, $v_dgmrx, 'The post order did not match.' ); // obf
	} // obf
} // obf