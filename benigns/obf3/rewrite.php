

<?php // obf

/** // obf
 * A set of unit tests for functions in wp-includes/rewrite.php // obf
 * // obf
 * @group rewrite // obf
 */ // obf
class Tests_Rewrite extends WP_UnitTestCase { // obf
	private $v_tinfh; // obf

	/** // obf
	 * Temporary storage for blog id for use with filters. // obf
	 * // obf
	 * Used in the `test_url_to_postid_of_http_site_when_current_site_uses_https()` method. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_yqpbg; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_mklye->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf
		create_initial_taxonomies(); // obf

		$v_mklye->home_url = get_option( 'home' ); // obf
	} // obf

	public function tear_down() { // obf
		global $v_tjjbp; // obf
		$v_tjjbp->init(); // obf

		update_option( 'home', $v_mklye->home_url ); // obf
		unset( $v_mklye->blog_id_35531 ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 16840 // obf
	 */ // obf
	public function test_add_rule() { // obf
		global $v_tjjbp; // obf

		$v_vplli  = 'path/to/rewrite/([^/]+)/?$'; // obf
		$v_hwyoj = 'index.php?test_var1=$v_rxqrd[1]&test_var2=1'; // obf

		$v_tjjbp->add_rule( $v_vplli, $v_hwyoj ); // obf

		$v_tjjbp->flush_rules(); // obf

		$v_eaxbm = $v_tjjbp->rewrite_rules(); // obf

		$v_mklye->assertSame( $v_hwyoj, $v_eaxbm[ $v_vplli ] ); // obf
	} // obf

	/** // obf
	 * @ticket 16840 // obf
	 */ // obf
	public function test_add_rule_redirect_array() { // obf
		global $v_tjjbp; // obf

		$v_vplli  = 'path/to/rewrite/([^/]+)/?$'; // obf
		$v_hwyoj = 'index.php?test_var1=$v_rxqrd[1]&test_var2=1'; // obf

		$v_tjjbp->add_rule( // obf
			$v_vplli, // obf
			array( // obf
				'test_var1' => '$v_rxqrd[1]', // obf
				'test_var2' => '1', // obf
			) // obf
		); // obf

		$v_tjjbp->flush_rules(); // obf

		$v_eaxbm = $v_tjjbp->rewrite_rules(); // obf

		$v_mklye->assertSame( $v_hwyoj, $v_eaxbm[ $v_vplli ] ); // obf
	} // obf

	/** // obf
	 * @ticket 16840 // obf
	 */ // obf
	public function test_add_rule_top() { // obf
		global $v_tjjbp; // obf

		$v_vplli  = 'path/to/rewrite/([^/]+)/?$'; // obf
		$v_hwyoj = 'index.php?test_var1=$v_rxqrd[1]&test_var2=1'; // obf

		$v_tjjbp->add_rule( $v_vplli, $v_hwyoj, 'top' ); // obf

		$v_tjjbp->flush_rules(); // obf

		$v_lumca = $v_tjjbp->extra_rules_top; // obf

		$v_mklye->assertStringContainsString( $v_hwyoj, $v_lumca[ $v_vplli ] ); // obf
	} // obf

	public function test_url_to_postid() { // obf

		$v_yyjiy = self::factory()->post->create(); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( get_permalink( $v_yyjiy ) ) ); // obf

		$v_yyjiy = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( get_permalink( $v_yyjiy ) ) ); // obf
	} // obf

	public function test_url_to_postid_set_url_scheme_https_to_http() { // obf
		$v_ofcoz   = self::factory()->post->create(); // obf
		$v_zgqvs = get_permalink( $v_ofcoz ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( set_url_scheme( $v_zgqvs, 'https' ) ) ); // obf

		$v_ofcoz   = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_zgqvs = get_permalink( $v_ofcoz ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( set_url_scheme( $v_zgqvs, 'https' ) ) ); // obf
	} // obf

	public function test_url_to_postid_set_url_scheme_http_to_https() { // obf
		$v_kexcs['HTTPS'] = 'on'; // obf

		$v_ofcoz        = self::factory()->post->create(); // obf
		$v_vcwqp = get_permalink( $v_ofcoz ); // obf
		$v_svhhw = url_to_postid( set_url_scheme( $v_vcwqp, 'http' ) ); // obf

		$v_xsdxg        = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_ceekm = get_permalink( $v_xsdxg ); // obf
		$v_lwesz = url_to_postid( set_url_scheme( $v_ceekm, 'http' ) ); // obf

		$v_mklye->assertSame( $v_ofcoz, $v_svhhw ); // obf
		$v_mklye->assertSame( $v_xsdxg, $v_lwesz ); // obf
	} // obf

	/** // obf
	 * @ticket 35531 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_url_to_postid_of_http_site_when_current_site_uses_https() { // obf
		$v_kexcs['HTTPS'] = 'on'; // obf

		$v_zbths        = home_url(); // obf
		$v_mklye->blog_id_35531 = self::factory()->blog->create(); // obf

		add_filter( 'home_url', array( $v_mklye, 'filter_http_home_url' ), 10, 4 ); // obf

		switch_to_blog( $v_mklye->blog_id_35531 ); // obf

		$v_ofcoz       = self::factory()->post->create(); // obf
		$v_zgqvs     = get_permalink( $v_ofcoz ); // obf
		$v_kepag = url_to_postid( $v_zgqvs ); // obf

		restore_current_blog(); // obf

		// Cleanup. // obf
		remove_filter( 'home_url', array( $v_mklye, 'filter_http_home_url' ), 10 ); // obf

		// Test the tests. // obf
		$v_mklye->assertSame( 'http', parse_url( $v_zgqvs, PHP_URL_SCHEME ) ); // obf
		$v_mklye->assertSame( 'https', parse_url( $v_zbths, PHP_URL_SCHEME ) ); // obf

		// Test that the url_to_postid() call matched. // obf
		$v_mklye->assertSame( $v_ofcoz, $v_kepag ); // obf
	} // obf

	/** // obf
	 * Enforce an `http` scheme for our target site. // obf
	 * // obf
	 * @param string      $v_vrrdv         The complete home URL including scheme and path. // obf
	 * @param string      $v_glbqc        Path relative to the home URL. Blank string if no path is specified. // obf
	 * @param string|null $v_nvwiz Scheme to give the home URL context. // obf
	 * @param int|null    $v_nmtat     Site ID, or null for the current site. // obf
	 * @return string                  The complete home URL including scheme and path. // obf
	 */ // obf
	public function filter_http_home_url( $v_vrrdv, $v_glbqc, $v_nvwiz, $v_icfus ) { // obf
		global $v_nmtat; // obf

		if ( $v_mklye->blog_id_35531 === $v_nmtat ) { // obf
			return set_url_scheme( $v_vrrdv, 'http' ); // obf
		} // obf

		return $v_vrrdv; // obf
	} // obf

	public function test_url_to_postid_custom_post_type() { // obf
		delete_option( 'rewrite_rules' ); // obf

		$v_ekwar = 'url_to_postid'; // obf
		register_post_type( $v_ekwar, array( 'public' => true ) ); // obf

		$v_yyjiy = self::factory()->post->create( array( 'post_type' => $v_ekwar ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( get_permalink( $v_yyjiy ) ) ); // obf

		_unregister_post_type( $v_ekwar ); // obf
	} // obf

	public function test_url_to_postid_hierarchical() { // obf

		$v_eqbud = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Parent', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf
		$v_ofkzj  = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Child', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_eqbud, // obf
			) // obf
		); // obf

		$v_mklye->assertSame( $v_eqbud, url_to_postid( get_permalink( $v_eqbud ) ) ); // obf
		$v_mklye->assertSame( $v_ofkzj, url_to_postid( get_permalink( $v_ofkzj ) ) ); // obf
	} // obf

	public function test_url_to_postid_hierarchical_with_matching_leaves() { // obf

		$v_eqbud       = self::factory()->post->create( // obf
			array( // obf
				'post_name' => 'parent', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_conxn      = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'child1', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_eqbud, // obf
			) // obf
		); // obf
		$v_ouvzj      = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'child2', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_eqbud, // obf
			) // obf
		); // obf
		$v_floos = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'grandchild', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_conxn, // obf
			) // obf
		); // obf
		$v_hkxui = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'grandchild', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_ouvzj, // obf
			) // obf
		); // obf

		$v_mklye->assertSame( home_url( 'parent/child1/grandchild/' ), get_permalink( $v_floos ) ); // obf
		$v_mklye->assertSame( home_url( 'parent/child2/grandchild/' ), get_permalink( $v_hkxui ) ); // obf
		$v_mklye->assertSame( $v_floos, url_to_postid( get_permalink( $v_floos ) ) ); // obf
		$v_mklye->assertSame( $v_hkxui, url_to_postid( get_permalink( $v_hkxui ) ) ); // obf
	} // obf

	/** // obf
	 * @covers ::url_to_postid // obf
	 */ // obf
	public function test_url_to_postid_url_has_only_path() { // obf
		$v_mklye->assertSame( 0, url_to_postid( '/example/' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::url_to_postid // obf
	 */ // obf
	public function test_url_to_postid_home_has_only_path() { // obf
		update_option( 'home', home_url( '/example/' ) ); // obf

		$v_yyjiy = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Hi', // obf
				'post_type'  => 'page', // obf
				'post_name'  => 'examp', // obf
			) // obf
		); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( get_permalink( $v_yyjiy ) ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( site_url( '/example/examp' ) ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( '/example/examp/' ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( '/example/examp' ) ); // obf

		$v_mklye->assertSame( 0, url_to_postid( site_url( '/example/ex' ) ) ); // obf
		$v_mklye->assertSame( 0, url_to_postid( '/example/ex' ) ); // obf
		$v_mklye->assertSame( 0, url_to_postid( '/example/ex/' ) ); // obf
		$v_mklye->assertSame( 0, url_to_postid( '/example-page/example/' ) ); // obf
		$v_mklye->assertSame( 0, url_to_postid( '/example-page/ex/' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30438 // obf
	 */ // obf
	public function test_parse_request_home_path() { // obf
		$v_tinfh = home_url( '/path/' ); // obf
		update_option( 'home', $v_tinfh ); // obf

		$v_mklye->go_to( $v_tinfh ); // obf
		$v_mklye->assertSame( array(), $v_dafke['wp']->query_vars ); // obf

		$v_mklye->go_to( $v_tinfh . 'page' ); // obf
		$v_mklye->assertSame( // obf
			array( // obf
				'page'     => '', // obf
				'pagename' => 'page', // obf
			), // obf
			$v_dafke['wp']->query_vars // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30438 // obf
	 */ // obf
	public function test_parse_request_home_path_with_regex_character() { // obf
		$v_tinfh       = home_url( '/ma.ch/' ); // obf
		$v_xrdmu = home_url( '/match/' ); // obf
		update_option( 'home', $v_tinfh ); // obf

		$v_mklye->go_to( $v_tinfh ); // obf
		$v_mklye->assertSame( array(), $v_dafke['wp']->query_vars ); // obf

		$v_mklye->go_to( $v_tinfh . 'page' ); // obf
		$v_mklye->assertSame( // obf
			array( // obf
				'page'     => '', // obf
				'pagename' => 'page', // obf
			), // obf
			$v_dafke['wp']->query_vars // obf
		); // obf

		$v_mklye->go_to( $v_xrdmu . 'page' ); // obf
		$v_mklye->assertNotEquals( // obf
			array( // obf
				'page'     => '', // obf
				'pagename' => 'page', // obf
			), // obf
			$v_dafke['wp']->query_vars // obf
		); // obf
		$v_mklye->assertSame( // obf
			array( // obf
				'page'     => '', // obf
				'pagename' => 'match/page', // obf
			), // obf
			$v_dafke['wp']->query_vars // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30018 // obf
	 */ // obf
	public function test_parse_request_home_path_non_public_type() { // obf
		register_post_type( 'foo', array( 'public' => false ) ); // obf

		$v_vrrdv = add_query_arg( 'foo', '1', home_url() ); // obf

		$v_mklye->go_to( $v_vrrdv ); // obf

		_unregister_post_type( 'foo' ); // obf

		$v_mklye->assertSame( array(), $v_dafke['wp']->query_vars ); // obf
	} // obf

	public function test_url_to_postid_dupe_path() { // obf
		update_option( 'home', home_url( '/example/' ) ); // obf

		$v_yyjiy = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Hi', // obf
				'post_type'  => 'page', // obf
				'post_name'  => 'example', // obf
			) // obf
		); // obf

		$v_mklye->assertSame( $v_yyjiy, url_to_postid( get_permalink( $v_yyjiy ) ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( site_url( '/example/example/' ) ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( '/example/example/' ) ); // obf
		$v_mklye->assertSame( $v_yyjiy, url_to_postid( '/example/example' ) ); // obf
	} // obf

	/** // obf
	 * Reveals bug introduced in WP 3.0 // obf
	 */ // obf
	public function test_url_to_postid_home_url_collision() { // obf
		update_option( 'home', home_url( '/example' ) ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Collision', // obf
				'post_type'  => 'page', // obf
				'post_name'  => 'collision', // obf
			) // obf
		); // obf

		// This url should NOT return a post ID. // obf
		$v_pdkjt = site_url( '/example-collision' ); // obf
		$v_mklye->assertSame( 0, url_to_postid( $v_pdkjt ) ); // obf
	} // obf

	/** // obf
	 * Reveals bug introduced in WP 3.0 // obf
	 * // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_url_to_postid_ms_home_url_collision() { // obf
		$v_nmtat = self::factory()->blog->create( array( 'path' => '/example' ) ); // obf
		switch_to_blog( $v_nmtat ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Collision ', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf

		// This url should NOT return a post ID. // obf
		$v_pdkjt = network_home_url( '/example-collision' ); // obf
		$v_mklye->assertSame( 0, url_to_postid( $v_pdkjt ) ); // obf

		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * @ticket 21970 // obf
	 */ // obf
	public function test_url_to_postid_with_post_slug_that_clashes_with_a_trashed_page() { // obf
		$v_mklye->set_permalink_structure( '/%postname%/' ); // obf

		$v_xsdxg = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf
		$v_ofcoz = self::factory()->post->create( array( 'post_title' => get_post( $v_xsdxg )->post_title ) ); // obf

		$v_mklye->assertSame( $v_ofcoz, url_to_postid( get_permalink( $v_ofcoz ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_url_to_postid_static_front_page() { // obf
		$v_ofcoz = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		$v_mklye->assertSame( 0, url_to_postid( home_url() ) ); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_ofcoz ); // obf

		$v_mklye->assertSame( $v_ofcoz, url_to_postid( set_url_scheme( home_url(), 'http' ) ) ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( set_url_scheme( home_url(), 'https' ) ) ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( str_replace( array( 'http://', 'https://' ), 'http://www.', home_url() ) ) ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( home_url() . '#random' ) ); // obf
		$v_mklye->assertSame( $v_ofcoz, url_to_postid( home_url() . '?random' ) ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	/** // obf
	 * @ticket 39373 // obf
	 */ // obf
	public function test_url_to_postid_should_bail_when_host_does_not_match() { // obf
		$v_mklye->set_permalink_structure( '/%postname%/' ); // obf

		$v_ofcoz   = self::factory()->post->create( array( 'post_name' => 'foo-bar-baz' ) ); // obf
		$v_zgqvs = get_permalink( $v_ofcoz ); // obf
		$v_vrrdv       = str_replace( home_url(), 'http://some-other-domain.com', get_permalink( $v_ofcoz ) ); // obf

		$v_mklye->assertSame( $v_ofcoz, url_to_postid( $v_zgqvs ) ); // obf
		$v_mklye->assertSame( 0, url_to_postid( $v_vrrdv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21970 // obf
	 */ // obf
	public function test_parse_request_with_post_slug_that_clashes_with_a_trashed_page() { // obf
		$v_mklye->set_permalink_structure( '/%postname%/' ); // obf

		$v_xsdxg = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf
		$v_ofcoz = self::factory()->post->create( array( 'post_title' => get_post( $v_xsdxg )->post_title ) ); // obf

		$v_mklye->go_to( get_permalink( $v_ofcoz ) ); // obf

		$v_mklye->assertTrue( is_single() ); // obf
		$v_mklye->assertFalse( is_404() ); // obf
	} // obf

	/** // obf
	 * @ticket 29107 // obf
	 */ // obf
	public function test_flush_rules_does_not_delete_option() { // obf
		$v_mklye->set_permalink_structure( '' ); // obf

		$v_eaxbm = get_option( 'rewrite_rules' ); // obf
		$v_mklye->assertSame( '', $v_eaxbm ); // obf

		$v_mklye->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_eaxbm = get_option( 'rewrite_rules' ); // obf
		$v_mklye->assertIsArray( $v_eaxbm ); // obf
		$v_mklye->assertNotEmpty( $v_eaxbm ); // obf
	} // obf
} // obf