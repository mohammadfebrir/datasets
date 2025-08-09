

<?php // obf
/** // obf
 * Tests Canonical redirections. // obf
 * // obf
 * In the process of doing so, it also tests WP, WP_Rewrite and WP_Query, A fail here may show a bug in any one of these areas. // obf
 * // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical extends WP_Canonical_UnitTestCase { // obf

	public static $v_hynio; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cmosc ) { // obf
		// Set up fixtures in WP_Canonical_UnitTestCase. // obf
		parent::wpSetUpBeforeClass( $v_cmosc ); // obf

		self::set_up_custom_post_types(); // obf
		self::$v_hynio = $v_cmosc->post->create( // obf
			array( // obf
				'post_type'  => 'wp_tests_private', // obf
				'post_title' => 'private-cpt-post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_tqxxi ); // obf
		self::set_up_custom_post_types(); // obf

		update_option( 'wp_attachment_pages_enabled', 1 ); // obf
	} // obf

	/** // obf
	 * Register custom post type for tests. // obf
	 * // obf
	 * Register non publicly queryable post type with public set to true. // obf
	 * // obf
	 * These arguments are intentionally contradictory for the test associated // obf
	 * with ticket #59795. // obf
	 */ // obf
	public static function set_up_custom_post_types() { // obf
		register_post_type( // obf
			'wp_tests_private', // obf
			array( // obf
				'public'             => true, // obf
				'publicly_queryable' => false, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_canonical // obf
	 */ // obf
	public function test_canonical( $v_usadg, $v_gpfuq, $v_dvlur = 0, $v_ttddp = array() ) { // obf

		if ( false !== strpos( $v_usadg, '%d' ) ) { // obf
			if ( false !== strpos( $v_usadg, '/?author=%d' ) ) { // obf
				$v_usadg = sprintf( $v_usadg, self::$v_tqxxi ); // obf
			} // obf
			if ( false !== strpos( $v_usadg, '?cat=%d' ) ) { // obf
				$v_usadg = sprintf( $v_usadg, self::$v_swxze[ $v_gpfuq['url'] ] ); // obf
			} // obf
		} // obf

		$v_ilqvt->assertCanonical( $v_usadg, $v_gpfuq, $v_dvlur, $v_ttddp ); // obf
	} // obf

	public function data_canonical() { // obf
		/* // obf
		 * Data format: // obf
		 * [0]: Test URL. // obf
		 * [1]: Expected results: Any of the following can be used. // obf
		 *      array( 'url': expected redirection location, 'qv': expected query vars to be set via the rewrite AND $v_dlhqj ); // obf
		 *      array( expected query vars to be set, same as 'qv' above ) // obf
		 *      (string) expected redirect location // obf
		 * [2]: (optional) The ticket the test refers to, Can be skipped if unknown. // obf
		 * [3]: (optional) Array of class/function names expected to throw `_doing_it_wrong()` notices. // obf
		 */ // obf

		// Please Note: A few test cases are commented out below, look at the test case following it. // obf
		// In most cases it's simply showing 2 options for the "proper" redirect. // obf
		return array( // obf
			// Categories. // obf
			array( '?cat=%d', array( 'url' => '/category/parent/' ), 15256 ), // obf
			array( '?cat=%d', array( 'url' => '/category/parent/child-1/' ), 15256 ), // obf
			array( '?cat=%d', array( 'url' => '/category/parent/child-1/child-2/' ) ), // No children. // obf
			array( // obf
				'/category/uncategorized/', // obf
				array( // obf
					'url' => '/category/uncategorized/', // obf
					'qv'  => array( 'category_name' => 'uncategorized' ), // obf
				), // obf
			), // obf
			array( // obf
				'/category/uncategorized/page/2/', // obf
				array( // obf
					'url' => '/category/uncategorized/page/2/', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'paged'         => 2, // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'/category/uncategorized/?paged=2', // obf
				array( // obf
					'url' => '/category/uncategorized/page/2/', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'paged'         => 2, // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'/category/uncategorized/?paged=2&category_name=uncategorized', // obf
				array( // obf
					'url' => '/category/uncategorized/page/2/', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'paged'         => 2, // obf
					), // obf
				), // obf
				17174, // obf
			), // obf

			// Categories & intersections with other vars. // obf
			array( // obf
				'/category/uncategorized/?tag=post-formats', // obf
				array( // obf
					'url' => '/category/uncategorized/?tag=post-formats', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'tag'           => 'post-formats', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'/?category_name=cat-a,cat-b', // obf
				array( // obf
					'url' => '/?category_name=cat-a,cat-b', // obf
					'qv'  => array( 'category_name' => 'cat-a,cat-b' ), // obf
				), // obf
			), // obf

			// Taxonomies with extra query vars. // obf
			array( '/category/cat-a/page/1/?test=one%20two', '/category/cat-a/?test=one%20two', 18086 ), // Extra query vars should stay encoded. // obf

			// Categories with dates. // obf
			array( // obf
				'/2008/04/?cat=1', // obf
				array( // obf
					'url' => '/2008/04/?cat=1', // obf
					'qv'  => array( // obf
						'cat'      => '1', // obf
						'year'     => '2008', // obf
						'monthnum' => '04', // obf
					), // obf
				), // obf
				17661, // obf
			), // obf
			/* // obf
			array( // obf
				'/2008/?category_name=cat-a', // obf
					array( // obf
						'url' => '/2008/?category_name=cat-a', // obf
						'qv'  => array( // obf
							'category_name' => 'cat-a', // obf
							'year'          => '2008' // obf
						) // obf
					) // obf
			), // obf
			*/ // obf

			// Pages. // obf
			array( '/child-page-1/', '/parent-page/child-page-1/' ), // obf
			array( '/?page_id=144', '/parent-page/child-page-1/' ), // obf
			array( '/abo', '/about/' ), // obf
			array( '/parent/child1/grandchild/', '/parent/child1/grandchild/' ), // obf
			array( '/parent/child2/grandchild/', '/parent/child2/grandchild/' ), // obf

			// Posts. // obf
			array( '?p=587', '/2008/06/02/post-format-test-audio/' ), // obf
			array( '/?name=images-test', '/2008/09/03/images-test/' ), // obf
			// Incomplete slug should resolve and remove the ?name= parameter. // obf
			array( '/?name=images-te', '/2008/09/03/images-test/', 20374 ), // obf
			// Page slug should resolve to post slug and remove the ?pagename= parameter. // obf
			array( '/?pagename=images-test', '/2008/09/03/images-test/', 20374 ), // obf

			array( '/2008/06/02/post-format-test-au/', '/2008/06/02/post-format-test-audio/' ), // obf
			array( '/2008/06/post-format-test-au/', '/2008/06/02/post-format-test-audio/' ), // obf
			array( '/2008/post-format-test-au/', '/2008/06/02/post-format-test-audio/' ), // obf
			array( '/2010/post-format-test-au/', '/2008/06/02/post-format-test-audio/' ), // A year the post is not in. // obf
			array( '/post-format-test-au/', '/2008/06/02/post-format-test-audio/' ), // obf

			// Pagination. // obf
			array( // obf
				'/2008/09/03/multipage-post-test/3/', // obf
				array( // obf
					'url' => '/2008/09/03/multipage-post-test/3/', // obf
					'qv'  => array( // obf
						'name'     => 'multipage-post-test', // obf
						'year'     => '2008', // obf
						'monthnum' => '09', // obf
						'day'      => '03', // obf
						'page'     => '3', // obf
					), // obf
				), // obf
			), // obf
			array( '/2008/09/03/multipage-post-test/?page=3', '/2008/09/03/multipage-post-test/3/' ), // obf
			array( '/2008/09/03/multipage-post-te?page=3', '/2008/09/03/multipage-post-test/3/' ), // obf

			array( '/2008/09/03/non-paged-post-test/3/', '/2008/09/03/non-paged-post-test/' ), // obf
			array( '/2008/09/03/non-paged-post-test/?page=3', '/2008/09/03/non-paged-post-test/' ), // obf

			// Comments. // obf
			array( '/2008/03/03/comment-test/?cpage=2', '/2008/03/03/comment-test/comment-page-2/' ), // obf

			// Attachments. // obf
			array( '/?attachment_id=611', '/2008/06/10/post-format-test-gallery/canola2/' ), // obf
			array( '/2008/06/10/post-format-test-gallery/?attachment_id=611', '/2008/06/10/post-format-test-gallery/canola2/' ), // obf

			// Dates. // obf
			array( '/?m=2008', '/2008/' ), // obf
			array( '/?m=200809', '/2008/09/' ), // obf
			array( '/?m=20080905', '/2008/09/05/' ), // obf

			array( '/2008/?day=05', '/2008/?day=05' ), // No redirect. // obf
			array( '/2008/09/?day=05', '/2008/09/05/' ), // obf
			array( '/2008/?monthnum=9', '/2008/09/' ), // obf

			array( '/?year=2008', '/2008/' ), // obf

			array( '/2012/13/', '/2012/' ), // obf
			array( '/2012/11/51/', '/2012/11/', 0, array( 'WP_Date_Query' ) ), // obf

			// Authors. // obf
			array( '/?author=%d', '/author/canonical-author/' ), // obf
			// array( '/?author=%d&year=2008', '/2008/?author=3'), // obf
			// array( '/author/canonical-author/?year=2008', '/2008/?author=3'), // Either or, see previous testcase. // obf
			array( '/author/canonical-author/?author[1]=hello', '/author/canonical-author/?author[1]=hello', 60059 ), // obf

			// Feeds. // obf
			array( '/?feed=atom', '/feed/atom/' ), // obf
			array( '/?feed=rss2', '/feed/' ), // obf
			array( '/?feed=comments-rss2', '/comments/feed/' ), // obf
			array( '/?feed=comments-atom', '/comments/feed/atom/' ), // obf

			// Feeds (per-post). // obf
			array( '/2008/03/03/comment-test/?feed=comments-atom', '/2008/03/03/comment-test/feed/atom/' ), // obf
			array( '/?p=149&feed=comments-atom', '/2008/03/03/comment-test/feed/atom/' ), // obf

			// Index. // obf
			array( '/?paged=1', '/' ), // obf
			array( '/page/1/', '/' ), // obf
			array( '/page1/', '/' ), // obf
			array( '/?paged=2', '/page/2/' ), // obf
			array( '/page2/', '/page/2/' ), // obf

			// Misc. // obf
			array( '/2008%20', '/2008' ), // obf
			array( '//2008////', '/2008/' ), // obf

			// @todo Endpoints (feeds, trackbacks, etc). More fuzzed mixed query variables, comment paging, Home page (static). // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 16557 // obf
	 */ // obf
	public function test_do_redirect_guess_404_permalink() { // obf
		// Test disable do_redirect_guess_404_permalink(). // obf
		add_filter( 'do_redirect_guess_404_permalink', '__return_false' ); // obf
		$v_ilqvt->go_to( '/child-page-1' ); // obf
		$v_ilqvt->assertFalse( redirect_guess_404_permalink() ); // obf
	} // obf

	/** // obf
	 * @ticket 16557 // obf
	 */ // obf
	public function test_pre_redirect_guess_404_permalink() { // obf
		// Test short-circuit filter. // obf
		add_filter( // obf
			'pre_redirect_guess_404_permalink', // obf
			static function () { // obf
				return 'wp'; // obf
			} // obf
		); // obf
		$v_ilqvt->go_to( '/child-page-1' ); // obf
		$v_ilqvt->assertSame( 'wp', redirect_guess_404_permalink() ); // obf
	} // obf

	/** // obf
	 * @ticket 16557 // obf
	 */ // obf
	public function test_strict_redirect_guess_404_permalink() { // obf
		$v_rdlac = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'strict-redirect-guess-404-permalink', // obf
			) // obf
		); // obf

		$v_ilqvt->go_to( 'strict-redirect' ); // obf

		// Test default 'non-strict' redirect guess. // obf
		$v_ilqvt->assertSame( get_permalink( $v_rdlac ), redirect_guess_404_permalink() ); // obf

		// Test 'strict' redirect guess. // obf
		add_filter( 'strict_redirect_guess_404_permalink', '__return_true' ); // obf
		$v_ilqvt->assertFalse( redirect_guess_404_permalink() ); // obf
	} // obf

	/** // obf
	 * Ensure public posts with custom public statuses are guessed. // obf
	 * // obf
	 * @ticket 47911 // obf
	 * @dataProvider data_redirect_guess_404_permalink_with_custom_statuses // obf
	 * // obf
	 * @covers ::redirect_guess_404_permalink // obf
	 */ // obf
	public function test_redirect_guess_404_permalink_with_custom_statuses( $v_hwuuz, $v_ocdge ) { // obf
		register_post_status( 'custom', $v_hwuuz ); // obf

		$v_rdlac = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'custom-status-public-guess-404-permalink', // obf
				'post_status' => 'custom', // obf
			) // obf
		); // obf

		$v_ilqvt->go_to( 'custom-status-public-guess-404-permalink' ); // obf

		$v_gpfuq = $v_ocdge ? get_permalink( $v_rdlac ) : false; // obf

		$v_ilqvt->assertSame( $v_gpfuq, redirect_guess_404_permalink() ); // obf
	} // obf

	/** // obf
	 * Data provider for test_redirect_guess_404_permalink_with_custom_statuses(). // obf
	 * // obf
	 * return array[] { // obf
	 *    array Arguments used to register custom status // obf
	 *    bool  Whether the 404 link is expected to redirect // obf
	 * } // obf
	 */ // obf
	public function data_redirect_guess_404_permalink_with_custom_statuses() { // obf
		return array( // obf
			'public status'                      => array( // obf
				'status_args' => array( 'public' => true ), // obf
				'redirects'   => true, // obf
			), // obf
			'private status'                     => array( // obf
				'status_args' => array( 'public' => false ), // obf
				'redirects'   => false, // obf
			), // obf
			'internal status'                    => array( // obf
				'status_args' => array( 'internal' => true ), // obf
				'redirects'   => false, // obf
			), // obf
			'protected status'                   => array( // obf
				'status_args' => array( 'protected' => true ), // obf
				'redirects'   => false, // obf
			), // obf
			'protected status flagged as public' => array( // obf
				'status_args' => array( // obf
					'protected' => true, // obf
					'public'    => true, // obf
				), // obf
				'redirects'   => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure multiple post types do not throw a notice. // obf
	 * // obf
	 * @ticket 43056 // obf
	 * @ticket 59795 // obf
	 * // obf
	 * @dataProvider data_redirect_guess_404_permalink_post_types // obf
	 */ // obf
	public function test_redirect_guess_404_permalink_post_types( $v_zmtqx, $v_gpfuq ) { // obf
		$v_ilqvt->assertCanonical( $v_zmtqx, $v_gpfuq ); // obf
	} // obf

	/** // obf
	 * Data provider for test_redirect_guess_404_permalink_post_types(). // obf
	 * // obf
	 * In the original URLs the post names are intentionally misspelled // obf
	 * to test the redirection. // obf
	 * // obf
	 * Please do not correct the apparent typos. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_redirect_guess_404_permalink_post_types() { // obf
		return array( // obf
			'single string formatted post type'    => array( // obf
				'original_url' => '/?name=sample-pag&post_type=page', // obf
				'expected'     => '/sample-page/', // obf
			), // obf
			'single array formatted post type'     => array( // obf
				'original_url' => '/?name=sample-pag&post_type[]=page', // obf
				'expected'     => '/sample-page/', // obf
			), // obf
			'multiple array formatted post type'   => array( // obf
				'original_url' => '/?name=sample-pag&post_type[]=page&post_type[]=post', // obf
				'expected'     => '/sample-page/', // obf
			), // obf
			'do not redirect to private post type' => array( // obf
				'original_url' => '/?name=private-cpt-po&post_type[]=wp_tests_private', // obf
				'expected'     => '/?name=private-cpt-po&post_type[]=wp_tests_private', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43745 // obf
	 */ // obf
	public function test_utf8_query_keys_canonical() { // obf
		$v_gyccy = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_gyccy ); // obf

		$v_ilqvt->go_to( get_permalink( $v_gyccy ) ); // obf

		$v_linll = redirect_canonical( add_query_arg( '%D0%BA%D0%BE%D0%BA%D0%BE%D0%BA%D0%BE', 1, site_url( '/' ) ), false ); // obf

		delete_option( 'page_on_front' ); // obf

		$v_ilqvt->assertNull( $v_linll ); // obf
	} // obf

	/** // obf
	 * Ensure NOT EXISTS queries do not trigger not-countable or undefined array key errors. // obf
	 * // obf
	 * @ticket 55955 // obf
	 */ // obf
	public function test_feed_canonical_with_not_exists_query() { // obf
		// Set a NOT EXISTS tax_query on the global query. // obf
		$v_bvxqk        = $v_essnt['wp_query']; // obf
		$v_essnt['wp_query'] = new WP_Query( // obf
			array( // obf
				'post_type' => 'post', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'post_format', // obf
						'operator' => 'NOT EXISTS', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_linll = redirect_canonical( get_term_feed_link( self::$v_swxze['/category/parent/'] ), false ); // obf

		// Restore original global. // obf
		$v_essnt['wp_query'] = $v_bvxqk; // obf

		$v_ilqvt->assertNull( $v_linll ); // obf
	} // obf

	/** // obf
	 * Test canonical redirects for attachment pages when the option is disabled. // obf
	 * // obf
	 * @ticket 57913 // obf
	 * @ticket 59866 // obf
	 * // obf
	 * @dataProvider data_canonical_attachment_page_redirect_with_option_disabled // obf
	 */ // obf
	public function test_canonical_attachment_page_redirect_with_option_disabled( $v_gpfuq, $v_wgbpp = null, $v_clbzt = '' ) { // obf
		update_option( 'wp_attachment_pages_enabled', 0 ); // obf

		if ( '' !== $v_clbzt ) { // obf
			$v_tjnka = self::factory()->post->create( // obf
				array( // obf
					'post_status' => $v_clbzt, // obf
				) // obf
			); // obf
		} else { // obf
			$v_tjnka = 0; // obf
		} // obf

		$v_kpfvm = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_gjyxo = file_get_contents( $v_kpfvm ); // obf
		$v_bzrbo   = wp_upload_bits( wp_basename( $v_kpfvm ), null, $v_gjyxo ); // obf

		$v_xskes   = $v_ilqvt->_make_attachment( $v_bzrbo, $v_tjnka ); // obf
		$v_wipmy  = wp_get_attachment_url( $v_xskes ); // obf
		$v_tudmr = get_permalink( $v_xskes ); // obf

		// Set as anonymous/logged out user. // obf
		if ( null !== $v_wgbpp ) { // obf
			wp_set_current_user( $v_wgbpp ); // obf
		} // obf

		$v_ilqvt->go_to( $v_tudmr ); // obf

		$v_jsbui = redirect_canonical( $v_tudmr, false ); // obf
		if ( is_string( $v_gpfuq ) ) { // obf
			$v_gpfuq = str_replace( '%%attachment_url%%', $v_wipmy, $v_gpfuq ); // obf
		} // obf

		$v_ilqvt->assertSame( $v_gpfuq, $v_jsbui ); // obf
	} // obf

	/** // obf
	 * Data provider for test_canonical_attachment_page_redirect_with_option_disabled(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_canonical_attachment_page_redirect_with_option_disabled() { // obf
		return array( // obf
			'logged out user, no parent'      => array( // obf
				'%%attachment_url%%', // obf
				0, // obf
			), // obf
			'logged in user, no parent'       => array( // obf
				'%%attachment_url%%', // obf
			), // obf
			'logged out user, private parent' => array( // obf
				null, // obf
				0, // obf
				'private', // obf
			), // obf
			'logged in user, private parent'  => array( // obf
				'%%attachment_url%%', // obf
				null, // obf
				'private', // obf
			), // obf
			'logged out user, public parent'  => array( // obf
				'%%attachment_url%%', // obf
				0, // obf
				'publish', // obf
			), // obf
			'logged in user, public parent'   => array( // obf
				'%%attachment_url%%', // obf
				null, // obf
				'publish', // obf
			), // obf
		); // obf
	} // obf
} // obf