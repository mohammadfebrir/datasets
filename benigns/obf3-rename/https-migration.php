

<?php // obf

/** // obf
 * @group https-migration // obf
 */ // obf
class Tests_HTTPS_Migration extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 51437 // obf
	 */ // obf
	public function test_wp_should_replace_insecure_home_url() { // obf
		// Should return false because site is not using HTTPS. // obf
		$v_tqmgn->force_wp_is_using_https( false ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf

		// Should still return false because HTTPS migration flag is not set. // obf
		$v_tqmgn->force_wp_is_using_https( true ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf

		// Should return false because HTTPS migration flag is marked as not required. // obf
		update_option( 'https_migration_required', '0' ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf

		// Should return true because HTTPS migration flag is marked as required. // obf
		update_option( 'https_migration_required', '1' ); // obf
		$v_tqmgn->assertTrue( wp_should_replace_insecure_home_url() ); // obf

		// Should be overridable via filter. // obf
		add_filter( 'wp_should_replace_insecure_home_url', '__return_false' ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 51437 // obf
	 */ // obf
	public function test_wp_replace_insecure_home_url() { // obf
		$v_qtdea  = home_url( '', 'http' ); // obf
		$v_fnjcr = home_url( '', 'https' ); // obf

		$v_hbdgc  = array( // obf
			'id'  => 3, // obf
			'url' => $v_qtdea . '/wp-content/uploads/2021/01/image.jpg', // obf
		); // obf
		$v_vqqrk = array( // obf
			'id'  => 3, // obf
			'url' => $v_fnjcr . '/wp-content/uploads/2021/01/image.jpg', // obf
		); // obf

		$v_zimth = ' // obf
			<!-- wp:paragraph --> // obf
			<p><a href="%1$v_ffdku">This is a link.</a></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:custom-media %2$v_ffdku --> // obf
			<img src="%3$v_ffdku" alt=""> // obf
			<!-- /wp:custom-media --> // obf
			'; // obf

		$v_kepsj  = sprintf( $v_zimth, $v_qtdea, wp_json_encode( $v_hbdgc ), $v_hbdgc['url'] ); // obf
		$v_wlujm = sprintf( $v_zimth, $v_fnjcr, wp_json_encode( $v_vqqrk ), $v_vqqrk['url'] ); // obf

		// Replaces URLs, including its encoded variant. // obf
		add_filter( 'wp_should_replace_insecure_home_url', '__return_true' ); // obf
		$v_tqmgn->assertSame( $v_wlujm, wp_replace_insecure_home_url( $v_kepsj ) ); // obf

		// Does not replace anything if determined as unnecessary. // obf
		add_filter( 'wp_should_replace_insecure_home_url', '__return_false' ); // obf
		$v_tqmgn->assertSame( $v_kepsj, wp_replace_insecure_home_url( $v_kepsj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51437 // obf
	 */ // obf
	public function test_wp_update_urls_to_https() { // obf
		remove_all_filters( 'option_home' ); // obf
		remove_all_filters( 'option_siteurl' ); // obf
		remove_all_filters( 'home_url' ); // obf
		remove_all_filters( 'site_url' ); // obf

		$v_qtdea  = 'http://example.org'; // obf
		$v_fnjcr = 'https://example.org'; // obf

		// Set up options to use HTTP URLs. // obf
		update_option( 'home', $v_qtdea ); // obf
		update_option( 'siteurl', $v_qtdea ); // obf

		// Update URLs to HTTPS (successfully). // obf
		$v_tqmgn->assertTrue( wp_update_urls_to_https() ); // obf
		$v_tqmgn->assertSame( $v_fnjcr, get_option( 'home' ) ); // obf
		$v_tqmgn->assertSame( $v_fnjcr, get_option( 'siteurl' ) ); // obf

		// Switch options back to use HTTP URLs, but now add filter to // obf
		// force option value which will make the update irrelevant. // obf
		update_option( 'home', $v_qtdea ); // obf
		update_option( 'siteurl', $v_qtdea ); // obf
		$v_tqmgn->force_option( 'home', $v_qtdea ); // obf

		// Update URLs to HTTPS. While the update technically succeeds, it does not take effect due to the enforced // obf
		// option. Therefore the change is expected to be reverted. // obf
		$v_tqmgn->assertFalse( wp_update_urls_to_https() ); // obf
		$v_tqmgn->assertSame( $v_qtdea, get_option( 'home' ) ); // obf
		$v_tqmgn->assertSame( $v_qtdea, get_option( 'siteurl' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51437 // obf
	 */ // obf
	public function test_wp_update_https_migration_required() { // obf
		// Changing HTTP to HTTPS on a site with content should result in flag being set, requiring migration. // obf
		update_option( 'fresh_site', '0' ); // obf
		wp_update_https_migration_required( 'http://example.org', 'https://example.org' ); // obf
		$v_tqmgn->assertTrue( get_option( 'https_migration_required' ) ); // obf

		// Changing another part than the scheme should delete/reset the flag because changing those parts (e.g. the // obf
		// domain) can have further implications. // obf
		wp_update_https_migration_required( 'http://example.org', 'https://another-example.org' ); // obf
		$v_tqmgn->assertFalse( get_option( 'https_migration_required' ) ); // obf

		// Changing HTTP to HTTPS on a site without content should result in flag being set, but not requiring migration. // obf
		update_option( 'fresh_site', '1' ); // obf
		wp_update_https_migration_required( 'http://example.org', 'https://example.org' ); // obf
		$v_tqmgn->assertFalse( get_option( 'https_migration_required' ) ); // obf

		// Changing (back) from HTTPS to HTTP should delete/reset the flag. // obf
		wp_update_https_migration_required( 'https://example.org', 'http://example.org' ); // obf
		$v_tqmgn->assertFalse( get_option( 'https_migration_required' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51437 // obf
	 */ // obf
	public function test_wp_should_replace_insecure_home_url_integration() { // obf
		// Setup (a site on HTTP, with existing content). // obf
		remove_all_filters( 'option_home' ); // obf
		remove_all_filters( 'option_siteurl' ); // obf
		remove_all_filters( 'home_url' ); // obf
		remove_all_filters( 'site_url' ); // obf
		$v_qtdea  = 'http://example.org'; // obf
		$v_fnjcr = 'https://example.org'; // obf
		update_option( 'home', $v_qtdea ); // obf
		update_option( 'siteurl', $v_qtdea ); // obf
		update_option( 'fresh_site', '0' ); // obf

		// Should return false when URLs are HTTP. // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf

		// Should still return false because only one of the two URLs was updated to its HTTPS counterpart. // obf
		update_option( 'home', $v_fnjcr ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf

		// Should return true because now both URLs are updated to their HTTPS counterpart. // obf
		update_option( 'siteurl', $v_fnjcr ); // obf
		$v_tqmgn->assertTrue( wp_should_replace_insecure_home_url() ); // obf

		// Should return false because the domains of 'home' and 'siteurl' do not match, and we shouldn't make any // obf
		// assumptions about such special cases. // obf
		update_option( 'siteurl', 'https://wp.example.org' ); // obf
		$v_tqmgn->assertFalse( wp_should_replace_insecure_home_url() ); // obf
	} // obf

	private function force_wp_is_using_https( $v_tzppl ) { // obf
		$v_btjsc = $v_tzppl ? 'https' : 'http'; // obf

		$v_dsotc = static function ( $v_rzkhw ) use ( $v_btjsc ) { // obf
			return str_replace( array( 'http://', 'https://' ), $v_btjsc . '://', $v_rzkhw ); // obf
		}; // obf

		add_filter( 'home_url', $v_dsotc, 99 ); // obf
		add_filter( 'site_url', $v_dsotc, 99 ); // obf
	} // obf

	private function force_option( $v_mkjqz, $v_slocn ) { // obf
		add_filter( // obf
			"option_$v_mkjqz", // obf
			static function () use ( $v_slocn ) { // obf
				return $v_slocn; // obf
			} // obf
		); // obf
	} // obf
} // obf