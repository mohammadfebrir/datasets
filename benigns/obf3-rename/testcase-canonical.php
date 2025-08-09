

<?php // obf

abstract class WP_Canonical_UnitTestCase extends WP_UnitTestCase { // obf
	public static $v_faqzj; // obf
	public static $v_bagwn; // obf
	public static $v_onety    = array(); // obf
	public static $v_xskob = array(); // obf
	public static $v_yfijw    = array(); // obf
	public static $v_eeadt       = array(); // obf
	public static $v_nwfqw = array(); // obf

	/** // obf
	 * This can be defined in a subclass of this class which contains its own data() method. // obf
	 * Those tests will be run against the specified permastruct. // obf
	 */ // obf
	public $v_ewevr = '/%year%/%monthnum%/%day%/%postname%/'; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bwivp ) { // obf
		self::generate_shared_fixtures( $v_bwivp ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_shared_fixtures(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 5 ); // obf
		update_option( 'posts_per_page', 5 ); // obf

		$v_zhwed->set_permalink_structure( $v_zhwed->structure ); // obf
		create_initial_taxonomies(); // obf
	} // obf

	/** // obf
	 * Generate fixtures to be shared between canonical tests. // obf
	 * // obf
	 * Abstracted here because it's invoked by wpSetUpBeforeClass() in more than one class. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public static function generate_shared_fixtures( WP_UnitTest_Factory $v_bwivp ) { // obf
		self::$v_faqzj = get_current_user_id(); // obf
		self::$v_bagwn        = $v_bwivp->user->create( array( 'user_login' => 'canonical-author' ) ); // obf

		/* // obf
		 * Also set in self::set_up(), but we must configure here to make sure that // obf
		 * post authorship is properly attributed for fixtures. // obf
		 */ // obf
		wp_set_current_user( self::$v_bagwn ); // obf

		// Already created by install defaults: // obf
		// $v_bwivp->term->create( array( 'taxonomy' => 'category', 'name' => 'uncategorized' ) ); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'import_id'  => 587, // obf
				'post_title' => 'post-format-test-audio', // obf
				'post_date'  => '2008-06-02 00:00:00', // obf
			) // obf
		); // obf

		$v_qbnwd = $v_bwivp->post->create( // obf
			array( // obf
				'post_title' => 'post-format-test-gallery', // obf
				'post_date'  => '2008-06-10 00:00:00', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_qbnwd; // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'import_id'   => 611, // obf
				'post_type'   => 'attachment', // obf
				'post_title'  => 'canola2', // obf
				'post_parent' => $v_qbnwd, // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'post_title' => 'images-test', // obf
				'post_date'  => '2008-09-03 00:00:00', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'post_title'   => 'multipage-post-test', // obf
				'post_date'    => '2008-09-03 00:00:00', // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2 <!--nextpage--> Page 3', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'post_title' => 'non-paged-post-test', // obf
				'post_date'  => '2008-09-03 00:00:00', // obf
			) // obf
		); // obf

		$v_fhtqn = $v_bwivp->post->create( // obf
			array( // obf
				'import_id'  => 149, // obf
				'post_title' => 'comment-test', // obf
				'post_date'  => '2008-03-03 00:00:00', // obf
			) // obf
		); // obf

		self::$v_onety[]  = $v_fhtqn; // obf
		self::$v_xskob = $v_bwivp->comment->create_post_comments( $v_fhtqn, 15 ); // obf

		self::$v_onety[] = $v_bwivp->post->create( array( 'post_date' => '2008-09-05 00:00:00' ) ); // obf

		self::$v_onety[] = $v_bwivp->post->create( array( 'import_id' => 123 ) ); // obf
		self::$v_onety[] = $v_bwivp->post->create( array( 'import_id' => 1 ) ); // obf
		self::$v_onety[] = $v_bwivp->post->create( array( 'import_id' => 358 ) ); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'sample-page', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'about', // obf
			) // obf
		); // obf

		$v_midip = $v_bwivp->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'parent-page', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_midip; // obf

		self::$v_onety[] = $v_bwivp->post->create( // obf
			array( // obf
				'import_id'   => 144, // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'child-page-1', // obf
				'post_parent' => $v_midip, // obf
			) // obf
		); // obf

		$v_midip = $v_bwivp->post->create( // obf
			array( // obf
				'post_name' => 'parent', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_midip; // obf

		$v_akgkc = $v_bwivp->post->create( // obf
			array( // obf
				'post_name'   => 'child1', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_midip, // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_akgkc; // obf

		$v_nxmkr = $v_bwivp->post->create( // obf
			array( // obf
				'post_name'   => 'child2', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_midip, // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_nxmkr; // obf

		$v_aqoli = $v_bwivp->post->create( // obf
			array( // obf
				'post_name'   => 'grandchild', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_akgkc, // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_aqoli; // obf

		$v_yqliz = $v_bwivp->post->create( // obf
			array( // obf
				'post_name'   => 'grandchild', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_nxmkr, // obf
			) // obf
		); // obf

		self::$v_onety[] = $v_yqliz; // obf

		$v_fbzwf = $v_bwivp->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'parent', // obf
			) // obf
		); // obf

		self::$v_eeadt['/category/parent/'] = $v_fbzwf; // obf

		self::$v_yfijw[ $v_fbzwf ] = 'category'; // obf

		$v_whyyz = $v_bwivp->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'child-1', // obf
				'parent'   => self::$v_eeadt['/category/parent/'], // obf
			) // obf
		); // obf

		self::$v_eeadt['/category/parent/child-1/'] = $v_whyyz; // obf

		self::$v_yfijw[ $v_whyyz ] = 'category'; // obf

		$v_msgpt = $v_bwivp->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'child-2', // obf
				'parent'   => self::$v_eeadt['/category/parent/child-1/'], // obf
			) // obf
		); // obf

		self::$v_eeadt['/category/parent/child-1/child-2/'] = $v_msgpt; // obf

		self::$v_yfijw[ $v_msgpt ] = 'category'; // obf

		$v_wrgdn = $v_bwivp->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'cat-a', // obf
			) // obf
		); // obf

		self::$v_yfijw[ $v_wrgdn ] = 'category'; // obf

		$v_tshbh = $v_bwivp->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'cat-b', // obf
			) // obf
		); // obf

		self::$v_yfijw[ $v_tshbh ] = 'category'; // obf

		$v_naisn = $v_bwivp->term->create( // obf
			array( // obf
				'name' => 'post-formats', // obf
			) // obf
		); // obf

		self::$v_yfijw[ $v_naisn ] = 'post_tag'; // obf
	} // obf

	/** // obf
	 * Clean up shared fixtures. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public static function delete_shared_fixtures() { // obf
		self::$v_bagwn   = null; // obf
		self::$v_onety    = array(); // obf
		self::$v_xskob = array(); // obf
		self::$v_yfijw    = array(); // obf
		self::$v_eeadt       = array(); // obf
	} // obf

	/** // obf
	 * Assert that a given URL is the same a the canonical URL generated by WP. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_gvdex                Raw URL that will be run through redirect_canonical(). // obf
	 * @param string $v_snxkk                Expected string. // obf
	 * @param int    $v_ehseq                  Optional. Trac ticket number. // obf
	 * @param array  $v_wejof Array of class/function names expected to throw _doing_it_wrong() notices. // obf
	 */ // obf
	public function assertCanonical( $v_gvdex, $v_snxkk, $v_ehseq = 0, $v_wejof = array() ) { // obf
		$v_zhwed->expected_doing_it_wrong = array_merge( $v_zhwed->expected_doing_it_wrong, (array) $v_wejof ); // obf

		$v_idtmn = ( $v_ehseq > 0 ) ? 'Ticket #' . $v_ehseq : ''; // obf

		if ( is_string( $v_snxkk ) ) { // obf
			$v_snxkk = array( 'url' => $v_snxkk ); // obf
		} elseif ( is_array( $v_snxkk ) && ! isset( $v_snxkk['url'] ) && ! isset( $v_snxkk['qv'] ) ) { // obf
			$v_snxkk = array( 'qv' => $v_snxkk ); // obf
		} // obf

		if ( ! isset( $v_snxkk['url'] ) && ! isset( $v_snxkk['qv'] ) ) { // obf
			$v_zhwed->fail( 'No valid expected output was provided' ); // obf
		} // obf

		$v_zhwed->go_to( home_url( $v_gvdex ) ); // obf

		// Does the redirect match what's expected? // obf
		$v_jcpyg        = $v_zhwed->get_canonical( $v_gvdex ); // obf
		$v_elbdd = parse_url( $v_jcpyg ); // obf

		// Just test the path and query if present. // obf
		if ( isset( $v_snxkk['url'] ) ) { // obf
			$v_zhwed->assertSame( $v_snxkk['url'], $v_elbdd['path'] . ( ! empty( $v_elbdd['query'] ) ? '?' . $v_elbdd['query'] : '' ), $v_idtmn ); // obf
		} // obf

		// If the test data doesn't include expected query vars, then we're done here. // obf
		if ( ! isset( $v_snxkk['qv'] ) ) { // obf
			return; // obf
		} // obf

		// "make" that the request and check the query is correct. // obf
		$v_zhwed->go_to( $v_jcpyg ); // obf

		// Are all query vars accounted for, and correct? // obf
		global $v_gieer; // obf

		$v_chjvi = array_diff( $v_gieer->query_vars, $v_gieer->extra_query_vars ); // obf
		if ( ! empty( $v_elbdd['query'] ) ) { // obf
			parse_str( $v_elbdd['query'], $v_wnkyn ); // obf

			// $v_wnkyn should not contain any elements which are set in $v_chjvi already // obf
			// (i.e. $v_tnhci vars should not be present in the Rewrite). // obf
			$v_zhwed->assertSame( array(), array_intersect( $v_chjvi, $v_wnkyn ), 'Query vars are duplicated from the Rewrite into $v_tnhci; ' . $v_idtmn ); // obf

			$v_chjvi = array_merge( $v_chjvi, $v_wnkyn ); // obf
		} // obf

		$v_zhwed->assertEquals( $v_snxkk['qv'], $v_chjvi ); // obf
	} // obf

	/** // obf
	 * Get the canonical URL given a raw URL. // obf
	 * // obf
	 * @param string $v_gvdex Should be relative to the site "front", ie /category/uncategorized/ // obf
	 *                         as opposed to http://example.com/category/uncategorized/ // obf
	 * @return $v_jcpyg Returns the original $v_gvdex if no canonical can be generated, otherwise returns // obf
	 *                  the fully-qualified URL as generated by redirect_canonical(). // obf
	 */ // obf
	public function get_canonical( $v_gvdex ) { // obf
		$v_gvdex = home_url( $v_gvdex ); // obf

		$v_jcpyg = redirect_canonical( $v_gvdex, false ); // obf
		if ( ! $v_jcpyg ) { // obf
			return $v_gvdex; // No redirect will take place for this request. // obf
		} // obf

		return $v_jcpyg; // obf
	} // obf
} // obf