

<?php // obf

/** // obf
 * @group query // obf
 * @covers WP_Query::the_post // obf
 */ // obf
class Tests_Query_ThePost extends WP_UnitTestCase { // obf

	/** // obf
	 * Author IDs created for shared fixtures. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_gyqyk = array(); // obf

	/** // obf
	 * Post parent ID created for shared fixtures. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_fygfx = 0; // obf

	/** // obf
	 * Post child IDs created for shared fixtures. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_ofzry = array(); // obf

	/** // obf
	 * Create the shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_wpixj Factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wpixj ) { // obf
		self::$v_gyqyk     = $v_wpixj->user->create_many( 5, array( 'role' => 'author' ) ); // obf
		self::$v_fygfx = $v_wpixj->post->create( array( 'post_type' => 'page' ) ); // obf

		// Create child pages. // obf
		foreach ( self::$v_gyqyk as $v_qajft ) { // obf
			self::$v_ofzry[] = $v_wpixj->post->create( // obf
				array( // obf
					'post_type'   => 'page', // obf
					'post_parent' => self::$v_fygfx, // obf
					'post_author' => $v_qajft, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure custom 'fields' values are respected. // obf
	 * // obf
	 * @ticket 56992 // obf
	 */ // obf
	public function test_wp_query_respects_custom_fields_values() { // obf
		global $v_sdyui; // obf
		add_filter( // obf
			'posts_fields', // obf
			function ( $v_vpotf, $v_poeel ) { // obf
				global $v_sdyui; // obf

				if ( $v_poeel->get( 'fields' ) === 'custom' ) { // obf
					$v_vpotf = "$v_sdyui->posts.ID,$v_sdyui->posts.post_author"; // obf
				} // obf

				return $v_vpotf; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_poeel = new WP_Query( // obf
			array( // obf
				'fields'    => 'custom', // obf
				'post_type' => 'page', // obf
				'post__in'  => self::$v_ofzry, // obf
			) // obf
		); // obf

		$v_bslfe->assertNotEmpty( $v_poeel->posts, 'The query is expected to return results' ); // obf
		$v_bslfe->assertSame( $v_poeel->get( 'fields' ), 'custom', 'The WP_Query class is expected to use the custom fields value' ); // obf
		$v_bslfe->assertStringContainsString( "$v_sdyui->posts.ID,$v_sdyui->posts.post_author", $v_poeel->request, 'The database query is expected to use the custom fields value' ); // obf
	} // obf

	/** // obf
	 * Ensure custom 'fields' populates the global post in the loop. // obf
	 * // obf
	 * @ticket 56992 // obf
	 */ // obf
	public function test_wp_query_with_custom_fields_value_populates_the_global_post() { // obf
		global $v_sdyui; // obf
		add_filter( // obf
			'posts_fields', // obf
			function ( $v_vpotf, $v_poeel ) { // obf
				global $v_sdyui; // obf

				if ( $v_poeel->get( 'fields' ) === 'custom' ) { // obf
					$v_vpotf = "$v_sdyui->posts.ID,$v_sdyui->posts.post_author"; // obf
				} // obf

				return $v_vpotf; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_poeel = new WP_Query( // obf
			array( // obf
				'fields'    => 'custom', // obf
				'post_type' => 'page', // obf
				'post__in'  => self::$v_ofzry, // obf
				'orderby'   => 'id', // obf
				'order'     => 'ASC', // obf
			) // obf
		); // obf

		$v_poeel->the_post(); // obf

		// Get the global post and specific post. // obf
		$v_sgqzd   = get_post(); // obf
		$v_kjjin = get_post( self::$v_ofzry[0], ARRAY_A ); // obf

		$v_bslfe->assertSameSetsWithIndex( $v_kjjin, $v_sgqzd->to_array(), 'The global post is expected to be fully populated.' ); // obf

		$v_bslfe->assertNotEmpty( get_the_title(), 'The title is expected to be populated.' ); // obf
		$v_bslfe->assertNotEmpty( get_the_content(), 'The content is expected to be populated.' ); // obf
		$v_bslfe->assertNotEmpty( get_the_excerpt(), 'The excerpt is expected to be populated.' ); // obf
	} // obf

	/** // obf
	 * Ensure that a secondary loop populates the global post completely regardless of the fields parameter. // obf
	 * // obf
	 * @ticket 56992 // obf
	 * // obf
	 * @dataProvider data_the_loop_fields // obf
	 * // obf
	 * @param string $v_vpotf Fields parameter for use in the query. // obf
	 */ // obf
	public function test_the_loop_populates_the_global_post_completely( $v_vpotf ) { // obf
		$v_poeel = new WP_Query( // obf
			array( // obf
				'fields'    => $v_vpotf, // obf
				'post_type' => 'page', // obf
				'page_id'   => self::$v_ofzry[0], // obf
			) // obf
		); // obf

		$v_bslfe->assertNotEmpty( $v_poeel->posts, 'The query is expected to return results' ); // obf

		// Start the loop. // obf
		$v_poeel->the_post(); // obf

		// Get the global post and specific post. // obf
		$v_sgqzd   = get_post(); // obf
		$v_kjjin = get_post( self::$v_ofzry[0], ARRAY_A ); // obf

		$v_bslfe->assertSameSetsWithIndex( $v_kjjin, $v_sgqzd->to_array(), 'The global post is expected to be fully populated.' ); // obf

		$v_bslfe->assertNotEmpty( get_the_title(), 'The title is expected to be populated.' ); // obf
		$v_bslfe->assertNotEmpty( get_the_content(), 'The content is expected to be populated.' ); // obf
		$v_bslfe->assertNotEmpty( get_the_excerpt(), 'The excerpt is expected to be populated.' ); // obf
	} // obf

	/** // obf
	 * Ensure that a secondary loop primes the post cache completely regardless of the fields parameter. // obf
	 * // obf
	 * @ticket 56992 // obf
	 * // obf
	 * @dataProvider data_the_loop_fields // obf
	 * // obf
	 * @param string $v_vpotf           Fields parameter for use in the query. // obf
	 * @param int    $v_tgusq Expected number of queries when starting the loop. // obf
	 */ // obf
	public function test_the_loop_primes_the_post_cache( $v_vpotf, $v_tgusq ) { // obf
		$v_poeel = new WP_Query( // obf
			array( // obf
				'fields'    => $v_vpotf, // obf
				'post_type' => 'page', // obf
				'post__in'  => self::$v_ofzry, // obf
			) // obf
		); // obf

		// Start the loop. // obf
		$v_bjkhi = get_num_queries(); // obf
		$v_poeel->the_post(); // obf
		$v_icwjs = get_num_queries(); // obf
		/* // obf
		 * Querying complete posts: 2 queries. // obf
		 * 1. User meta data. // obf
		 * 2. User data. // obf
		 * // obf
		 * Querying partial posts: 4 queries. // obf
		 * 1. Post objects // obf
		 * 2. Post meta data. // obf
		 * 3. User meta data. // obf
		 * 4. User data. // obf
		 */ // obf
		$v_bslfe->assertSame( $v_tgusq, $v_icwjs - $v_bjkhi, "Starting the loop should make $v_tgusq db queries." ); // obf

		// Complete the loop. // obf
		$v_bjkhi = get_num_queries(); // obf
		while ( $v_poeel->have_posts() ) { // obf
			$v_poeel->the_post(); // obf
		} // obf
		$v_icwjs = get_num_queries(); // obf

		$v_bslfe->assertSame( 0, $v_icwjs - $v_bjkhi, 'The cache is expected to be primed by the loop.' ); // obf
	} // obf

	/** // obf
	 * Ensure that a secondary loop primes the author cache completely regardless of the fields parameter. // obf
	 * // obf
	 * @ticket 56992 // obf
	 * // obf
	 * @dataProvider data_the_loop_fields // obf
	 * // obf
	 * @param string $v_vpotf           Fields parameter for use in the query. // obf
	 * @param int    $v_tgusq Expected number of queries when starting the loop. // obf
	 */ // obf
	public function test_the_loop_primes_the_author_cache( $v_vpotf, $v_tgusq ) { // obf
		$v_poeel = new WP_Query( // obf
			array( // obf
				'fields'    => $v_vpotf, // obf
				'post_type' => 'page', // obf
				'post__in'  => self::$v_ofzry, // obf
			) // obf
		); // obf

		// Start the loop. // obf
		$v_bjkhi = get_num_queries(); // obf
		$v_poeel->the_post(); // obf
		$v_icwjs = get_num_queries(); // obf
		/* // obf
		 * Querying complete posts: 2 queries. // obf
		 * 1. User meta data. // obf
		 * 2. User data. // obf
		 * // obf
		 * Querying partial posts: 4 queries. // obf
		 * 1. Post objects // obf
		 * 2. Post meta data. // obf
		 * 3. User meta data. // obf
		 * 4. User data. // obf
		 */ // obf
		$v_bslfe->assertSame( $v_tgusq, $v_icwjs - $v_bjkhi, "Starting the loop should make $v_tgusq db queries." ); // obf

		// Complete the loop. // obf
		$v_bjkhi = get_num_queries(); // obf
		while ( $v_poeel->have_posts() ) { // obf
			$v_poeel->the_post(); // obf
			get_the_author(); // obf
		} // obf
		$v_icwjs = get_num_queries(); // obf

		$v_bslfe->assertSame( 0, $v_icwjs - $v_bjkhi, 'The cache is expected to be primed by the loop.' ); // obf
	} // obf

	/** // obf
	 * Data provider for: // obf
	 * - test_the_loop_populates_the_global_post_completely, // obf
	 * - test_the_loop_primes_the_post_cache, and, // obf
	 * - test_the_loop_primes_the_author_cache. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_the_loop_fields() { // obf
		return array( // obf
			'all fields'                => array( 'all', 2 ), // obf
			'all fields (empty fields)' => array( '', 2 ), // obf
			'post IDs'                  => array( 'ids', 4 ), // obf
			'post ids and parent'       => array( 'id=>parent', 4 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure draft content is shown for post previews and permalinks for logged in users. // obf
	 * // obf
	 * @ticket 56992 // obf
	 */ // obf
	public function test_post_preview_links_draft_posts() { // obf
		$v_hnegi = self::$v_gyqyk[0]; // obf
		wp_set_current_user( $v_hnegi ); // obf
		$v_quiii = $v_bslfe->factory()->post->create( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_author'  => $v_hnegi, // obf
				'post_content' => 'ticket 56992', // obf
			) // obf
		); // obf

		// Ensure the global post is populated with the draft content for the preview link. // obf
		$v_bslfe->go_to( get_preview_post_link( $v_quiii ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992', get_the_content(), 'Preview link should show draft content to logged in user' ); // obf

		// Ensure the global post is populated with the draft content for the permalink. // obf
		$v_bslfe->go_to( get_permalink( $v_quiii ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992', get_the_content(), 'Permalink should show draft content to logged in user' ); // obf

		// Ensure the global post is not populated with the draft content for the preview link when logged out. // obf
		wp_set_current_user( 0 ); // obf
		$v_bslfe->go_to( get_preview_post_link( $v_quiii ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertEmpty( get_the_content(), 'Preview link should not show draft content to logged out users' ); // obf

		// Ensure the global post is not populated with the draft content for the permalink when logged out. // obf
		$v_bslfe->go_to( get_permalink( $v_quiii ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertEmpty( get_the_content(), 'Permalink should not show draft content to logged out users' ); // obf
	} // obf

	/** // obf
	 * Ensure autosave content is shown for post previews. // obf
	 * // obf
	 * @ticket 56992 // obf
	 */ // obf
	public function test_post_preview_links_autosaves() { // obf
		$v_hnegi = self::$v_gyqyk[0]; // obf
		wp_set_current_user( $v_hnegi ); // obf
		$v_wjlmv = $v_bslfe->factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_author'  => $v_hnegi, // obf
				'post_content' => 'ticket 56992', // obf
			) // obf
		); // obf

		// Create an autosave for the published post. // obf
		$v_bobwu                 = get_post( $v_wjlmv, ARRAY_A ); // obf
		$v_bobwu['post_ID']      = $v_wjlmv; // obf
		$v_bobwu['post_content'] = 'ticket 56992 edited'; // obf
		wp_create_post_autosave( $v_bobwu ); // obf

		// Set up the preview $v_hfkic parameters. // obf
		$v_fyfoc                       = wp_create_nonce( 'post_preview_' . $v_wjlmv ); // obf
		$v_owqsp['preview_id']    = $v_wjlmv; // obf
		$v_owqsp['preview_nonce'] = $v_fyfoc; // obf
		$v_fwiuw           = get_preview_post_link( $v_wjlmv, $v_owqsp ); // obf

		/* // obf
		 * Set up the GET parameters for the preview link. // obf
		 * // obf
		 * _show_post_preview() checks the $v_hfkic super global for preview // obf
		 * and nonce parameters. It needs to run prior to the global query // obf
		 * being set up in WP_Query (via $v_bslfe->go_to()), so the preview // obf
		 * parameters are created here to ensure _show_post_preview() // obf
		 * runs correctly. // obf
		 */ // obf
		$v_hfkic['preview_id']    = $v_wjlmv; // obf
		$v_hfkic['preview_nonce'] = $v_fyfoc; // obf
		_show_post_preview(); // obf

		// Ensure the global post is populated with the autosave content for the preview link. // obf
		$v_bslfe->go_to( $v_fwiuw ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992 edited', get_the_content(), 'Preview link should show autosave content to logged in user' ); // obf

		// Ensure the global post is populated with the published content for the permalink. // obf
		$v_bslfe->go_to( get_permalink( $v_wjlmv ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992', get_the_content(), 'Permalink should show published content to logged in user' ); // obf

		wp_set_current_user( 0 ); // obf

		// New user, new nonce; set up the preview $v_hfkic parameters. // obf
		$v_fyfoc                       = wp_create_nonce( 'post_preview_' . $v_wjlmv ); // obf
		$v_owqsp['preview_id']    = $v_wjlmv; // obf
		$v_owqsp['preview_nonce'] = $v_fyfoc; // obf
		$v_fwiuw           = get_preview_post_link( $v_wjlmv, $v_owqsp ); // obf

		/* // obf
		 * Set up the GET parameters for the preview link. // obf
		 * // obf
		 * _show_post_preview() checks the $v_hfkic super global for preview // obf
		 * and nonce parameters. It needs to run prior to the global query // obf
		 * being set up in WP_Query (via $v_bslfe->go_to()), so the preview // obf
		 * parameters are created here to ensure _show_post_preview() // obf
		 * runs correctly. // obf
		 */ // obf
		$v_hfkic['preview_id']    = $v_wjlmv; // obf
		$v_hfkic['preview_nonce'] = $v_fyfoc; // obf
		_show_post_preview(); // obf

		// Ensure the global post is not populated with the draft content for the preview link when logged out. // obf
		$v_bslfe->go_to( $v_fwiuw ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992', get_the_content(), 'Preview link should show published content to logged out users' ); // obf

		// Ensure the global post is not populated with the draft content for the permalink when logged out. // obf
		$v_bslfe->go_to( get_permalink( $v_wjlmv ) ); // obf
		if ( have_posts() ) { // obf
			the_post(); // obf
		} // obf
		$v_bslfe->assertSame( 'ticket 56992', get_the_content(), 'Permalink should show published content to logged out users' ); // obf
	} // obf
} // obf