

<?php // obf

/** // obf
 * Test 'site_details' functionality. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_SiteDetails extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_allowed_options // obf
	 * // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_allowed_option_deletes_site_details_cache( $v_gvlzv, $v_fjdwu ) { // obf
		$v_tdrhj = get_site(); // obf

		$v_xfoov = $v_tdrhj->$v_gvlzv; // obf
		update_option( $v_gvlzv, $v_fjdwu ); // obf

		$v_hdydn = wp_cache_get( $v_tdrhj->id, 'site-details' ); // obf

		/* Reset to original value. */ // obf
		update_option( $v_gvlzv, $v_xfoov ); // obf

		$v_mnfan->assertFalse( $v_hdydn ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_allowed_options // obf
	 * // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_allowed_option_deletes_blog_details_cache( $v_gvlzv, $v_fjdwu ) { // obf
		$v_mxbvh = get_blog_details(); // obf

		$v_xfoov = $v_mxbvh->$v_gvlzv; // obf
		update_option( $v_gvlzv, $v_fjdwu ); // obf

		$v_hdydn = wp_cache_get( $v_mxbvh->id, 'blog-details' ); // obf

		/* Reset to original value. */ // obf
		update_option( $v_gvlzv, $v_xfoov ); // obf

		$v_mnfan->assertFalse( $v_hdydn ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_allowed_options // obf
	 * // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_allowed_option_does_not_delete_site_cache( $v_gvlzv, $v_fjdwu ) { // obf
		$v_tdrhj = get_site(); // obf

		$v_xfoov = $v_tdrhj->$v_gvlzv; // obf
		update_option( $v_gvlzv, $v_fjdwu ); // obf

		$v_hdydn = wp_cache_get( $v_tdrhj->id, 'sites' ); // obf

		/* Reset to original value. */ // obf
		update_option( $v_gvlzv, $v_xfoov ); // obf

		$v_mnfan->assertNotFalse( $v_hdydn ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_allowed_options // obf
	 * // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_allowed_option_does_not_delete_short_blog_details_cache( $v_gvlzv, $v_fjdwu ) { // obf
		$v_mxbvh = get_blog_details( null, false ); // obf

		$v_xfoov = get_option( $v_gvlzv ); // obf
		update_option( $v_gvlzv, $v_fjdwu ); // obf

		$v_hdydn = wp_cache_get( $v_mxbvh->id . 'short', 'blog-details' ); // obf

		/* Reset to original value. */ // obf
		update_option( $v_gvlzv, $v_xfoov ); // obf

		$v_mnfan->assertNotFalse( $v_hdydn ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_allowed_options // obf
	 * // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_allowed_option_does_not_update_sites_last_changed( $v_gvlzv, $v_fjdwu ) { // obf
		$v_hxmaj = wp_cache_get_last_changed( 'sites' ); // obf

		$v_xfoov = get_option( $v_gvlzv ); // obf
		update_option( $v_gvlzv, $v_fjdwu ); // obf

		$v_wmaus = wp_cache_get_last_changed( 'sites' ); // obf

		/* Reset to original value. */ // obf
		update_option( $v_gvlzv, $v_xfoov ); // obf

		$v_mnfan->assertSame( $v_wmaus, $v_hxmaj ); // obf
	} // obf

	public function data_allowed_options() { // obf
		return array( // obf
			array( 'blogname', 'Custom Site' ), // obf
			array( 'home', 'http://custom-site-url.org' ), // obf
			array( 'siteurl', 'http://custom-site-url.org' ), // obf
			array( 'post_count', '4' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40063 // obf
	 */ // obf
	public function test_update_random_blog_option_does_not_delete_cache() { // obf
		$v_tdrhj = get_site(); // obf

		update_option( 'foobar_option', 'foobar_value' ); // obf
		$v_hdydn = wp_cache_get( $v_tdrhj->id, 'sites' ); // obf

		delete_option( 'foobar_option' ); // obf

		$v_mnfan->assertNotFalse( $v_hdydn ); // obf
	} // obf

	/** // obf
	 * @ticket 40247 // obf
	 */ // obf
	public function test_site_details_cached_including_false_values() { // obf
		$v_qbrgs = self::factory()->blog->create(); // obf

		$v_tdrhj = get_site( $v_qbrgs ); // obf

		// Trigger retrieving site details (post_count is not set on new sites). // obf
		$v_hlabu = $v_tdrhj->post_count; // obf

		$v_ldmlf = wp_cache_get( $v_tdrhj->id, 'site-details' ); // obf

		wp_delete_site( $v_qbrgs ); // obf
		wp_update_network_site_counts(); // obf

		$v_mnfan->assertNotFalse( $v_ldmlf ); // obf
	} // obf

	public function test_site_details_filter_with_blogname() { // obf
		add_filter( 'site_details', array( $v_mnfan, '_filter_site_details_blogname' ) ); // obf
		$v_tdrhj     = get_site(); // obf
		$v_tpnvn = $v_tdrhj->blogname; // obf
		remove_filter( 'site_details', array( $v_mnfan, '_filter_site_details_blogname' ) ); // obf

		$v_mnfan->assertSame( 'Foo Bar', $v_tpnvn ); // obf
	} // obf

	public function _filter_site_details_blogname( $v_qzsqx ) { // obf
		$v_qzsqx->blogname = 'Foo Bar'; // obf
		return $v_qzsqx; // obf
	} // obf

	/** // obf
	 * @ticket 40458 // obf
	 */ // obf
	public function test_site_details_filter_with_custom_value_isetter() { // obf
		add_filter( 'site_details', array( $v_mnfan, '_filter_site_details_custom_value' ) ); // obf
		$v_tdrhj               = get_site(); // obf
		$v_tjnif = isset( $v_tdrhj->custom_value ); // obf
		remove_filter( 'site_details', array( $v_mnfan, '_filter_site_details_custom_value' ) ); // obf

		$v_mnfan->assertTrue( $v_tjnif ); // obf
	} // obf

	/** // obf
	 * @ticket 40458 // obf
	 */ // obf
	public function test_site_details_filter_with_custom_value_getter() { // obf
		add_filter( 'site_details', array( $v_mnfan, '_filter_site_details_custom_value' ) ); // obf
		$v_tdrhj         = get_site(); // obf
		$v_oedgg = $v_tdrhj->custom_value; // obf
		remove_filter( 'site_details', array( $v_mnfan, '_filter_site_details_custom_value' ) ); // obf

		$v_mnfan->assertSame( 'foo', $v_oedgg ); // obf
	} // obf

	public function _filter_site_details_custom_value( $v_qzsqx ) { // obf
		$v_qzsqx->custom_value = 'foo'; // obf
		return $v_qzsqx; // obf
	} // obf
} // obf