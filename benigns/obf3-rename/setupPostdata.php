

<?php // obf

/** // obf
 * @group query // obf
 * @covers ::setup_postdata // obf
 */ // obf
class Tests_Query_SetupPostdata extends WP_UnitTestCase { // obf
	protected $v_alegp = array( 'id', 'authordata', 'currentday', 'currentmonth', 'page', 'pages', 'multipage', 'more', 'numpages' ); // obf

	protected $v_lmfsj = array(); // obf

	protected $v_stwbt; // obf

	public function test_id() { // obf
		$v_hnnsu = self::factory()->post->create_and_get(); // obf
		setup_postdata( $v_hnnsu ); // obf

		$v_uenxw->assertNotEmpty( $v_hnnsu->ID ); // obf
		$v_uenxw->assertSame( $v_hnnsu->ID, $v_pegxv['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 30970 // obf
	 */ // obf
	public function test_setup_by_id() { // obf
		$v_hnnsu = self::factory()->post->create_and_get(); // obf
		setup_postdata( $v_hnnsu->ID ); // obf

		$v_uenxw->assertSame( $v_hnnsu->ID, $v_pegxv['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 30970 // obf
	 */ // obf
	public function test_setup_by_fake_post() { // obf
		$v_cuyme     = new stdClass(); // obf
		$v_cuyme->ID = 98765; // obf
		setup_postdata( $v_cuyme->ID ); // obf

		// Fails because there's no post with this ID. // obf
		$v_uenxw->assertNotSame( $v_cuyme->ID, $v_pegxv['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 30970 // obf
	 */ // obf
	public function test_setup_by_postish_object() { // obf
		$v_hnnsu = self::factory()->post->create(); // obf

		$v_moptj     = new stdClass(); // obf
		$v_moptj->ID = $v_hnnsu; // obf
		setup_postdata( $v_hnnsu ); // obf

		$v_uenxw->assertSame( $v_hnnsu, $v_pegxv['id'] ); // obf
	} // obf

	public function test_authordata() { // obf
		$v_ziert = self::factory()->user->create_and_get(); // obf
		$v_hnnsu = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_ziert->ID, // obf
			) // obf
		); // obf
		setup_postdata( $v_hnnsu ); // obf

		$v_uenxw->assertNotEmpty( $v_pegxv['authordata'] ); // obf
		$v_uenxw->assertEquals( $v_ziert, $v_pegxv['authordata'] ); // obf
	} // obf

	public function test_currentday() { // obf
		$v_hnnsu = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '1980-09-09 06:30:00', // obf
			) // obf
		); // obf
		setup_postdata( $v_hnnsu ); // obf

		$v_uenxw->assertSame( '09.09.80', $v_pegxv['currentday'] ); // obf
	} // obf

	public function test_currentmonth() { // obf
		$v_hnnsu = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '1980-09-09 06:30:00', // obf
			) // obf
		); // obf
		setup_postdata( $v_hnnsu ); // obf

		$v_uenxw->assertSame( '09', $v_pegxv['currentmonth'] ); // obf
	} // obf

	public function test_secondary_query_post_vars() { // obf
		$v_dehri = self::factory()->user->create_many( 2 ); // obf

		$v_wxdpx = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_dehri[0], // obf
				'post_date'   => '2012-02-02 02:00:00', // obf
			) // obf
		); // obf

		$v_mnsdq = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_dehri[1], // obf
				'post_date'   => '2013-03-03 03:00:00', // obf
			) // obf
		); // obf

		$v_uenxw->go_to( get_permalink( $v_wxdpx ) ); // obf
		setup_postdata( $v_wxdpx ); // obf

		// Main loop. // obf
		$v_uenxw->assertSame( $v_wxdpx->ID, $v_pegxv['id'] ); // obf
		$v_uenxw->assertEquals( get_userdata( $v_dehri[0] ), $v_pegxv['authordata'] ); // obf
		$v_uenxw->assertSame( '02.02.12', $v_pegxv['currentday'] ); // obf
		$v_uenxw->assertSame( '02', $v_pegxv['currentmonth'] ); // obf

		// Secondary loop. // obf
		$v_hfxno = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_uenxw->assertTrue( $v_hfxno->have_posts() ); // obf

		if ( $v_hfxno->have_posts() ) { // obf
			while ( $v_hfxno->have_posts() ) { // obf
				$v_hfxno->the_post(); // obf

				// Should refer to the current loop. // obf
				$v_uenxw->assertSame( $v_mnsdq->ID, $v_pegxv['id'] ); // obf
				$v_uenxw->assertEquals( get_userdata( $v_dehri[1] ), $v_pegxv['authordata'] ); // obf
				$v_uenxw->assertSame( '03.03.13', $v_pegxv['currentday'] ); // obf
				$v_uenxw->assertSame( '03', $v_pegxv['currentmonth'] ); // obf
			} // obf
		} // obf
		wp_reset_postdata(); // obf

		// Should be reset to main loop. // obf
		$v_uenxw->assertSame( $v_wxdpx->ID, $v_pegxv['id'] ); // obf
		$v_uenxw->assertEquals( get_userdata( $v_dehri[0] ), $v_pegxv['authordata'] ); // obf
		$v_uenxw->assertSame( '02.02.12', $v_pegxv['currentday'] ); // obf
		$v_uenxw->assertSame( '02', $v_pegxv['currentmonth'] ); // obf
	} // obf

	public function test_single_page() { // obf
		$v_moptj = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Page 0', // obf
			) // obf
		); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( 0, $v_pegxv['multipage'] ); // obf
		$v_uenxw->assertSame( 1, $v_pegxv['numpages'] ); // obf
		$v_uenxw->assertSame( array( 'Page 0' ), $v_pegxv['pages'] ); // obf
	} // obf

	public function test_multi_page() { // obf
		$v_moptj = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( 1, $v_pegxv['multipage'] ); // obf
		$v_uenxw->assertSame( 4, $v_pegxv['numpages'] ); // obf
		$v_uenxw->assertSame( array( 'Page 0', 'Page 1', 'Page 2', 'Page 3' ), $v_pegxv['pages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 16746 // obf
	 */ // obf
	public function test_nextpage_at_start_of_content() { // obf
		$v_moptj = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => '<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( 1, $v_pegxv['multipage'] ); // obf
		$v_uenxw->assertSame( 3, $v_pegxv['numpages'] ); // obf
		$v_uenxw->assertSame( array( 'Page 1', 'Page 2', 'Page 3' ), $v_pegxv['pages'] ); // obf
	} // obf

	public function test_trim_nextpage_linebreaks() { // obf
		$v_moptj = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => "Page 0\n<!--nextpage-->\nPage 1\nhas a line break\n<!--nextpage-->Page 2<!--nextpage-->\n\nPage 3", // obf
			) // obf
		); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( array( 'Page 0', "Page 1\nhas a line break", 'Page 2', "\nPage 3" ), $v_pegxv['pages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 25349 // obf
	 */ // obf
	public function test_secondary_query_nextpage() { // obf
		$v_wxdpx = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 1 Page 1<!--nextpage-->Post 1 Page 2', // obf
			) // obf
		); // obf
		$v_mnsdq = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 2 Page 1<!--nextpage-->Post 2 Page 2', // obf
			) // obf
		); // obf

		$v_uenxw->go_to( '/?p=' . $v_wxdpx ); // obf
		setup_postdata( get_post( $v_wxdpx ) ); // obf

		// Main loop. // obf
		$v_uenxw->assertSame( array( 'Post 1 Page 1', 'Post 1 Page 2' ), $v_pegxv['pages'] ); // obf

		// Secondary loop. // obf
		$v_hfxno = new WP_Query( // obf
			array( // obf
				'post__in' => array( $v_mnsdq ), // obf
			) // obf
		); // obf

		$v_uenxw->assertTrue( $v_hfxno->have_posts() ); // obf

		if ( $v_hfxno->have_posts() ) { // obf
			while ( $v_hfxno->have_posts() ) { // obf
				$v_hfxno->the_post(); // obf

				// Should refer to the current loop. // obf
				$v_uenxw->assertSame( array( 'Post 2 Page 1', 'Post 2 Page 2' ), $v_pegxv['pages'] ); // obf
			} // obf
		} // obf
		wp_reset_postdata(); // obf

		// Should be reset to main loop. // obf
		$v_uenxw->assertSame( array( 'Post 1 Page 1', 'Post 1 Page 2' ), $v_pegxv['pages'] ); // obf
	} // obf

	public function test_page_from_wp_query() { // obf
		$v_mwcyg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_uenxw->go_to( '/?page=78' ); // obf

		$v_pegxv['wp_query']->query_vars['page'] = 78; // obf
		setup_postdata( $v_mwcyg ); // obf

		$v_uenxw->assertSame( 78, $v_pegxv['page'] ); // obf
	} // obf

	public function test_page_when_on_page() { // obf
		$v_mwcyg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_uenxw->go_to( get_permalink( $v_mwcyg ) ); // obf
		setup_postdata( $v_mwcyg ); // obf

		$v_uenxw->assertSame( 1, $v_pegxv['page'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 */ // obf
	public function test_secondary_query_page() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		$v_uenxw->go_to( '/?page=3' ); // obf
		setup_postdata( $v_moptj ); // obf

		// Main loop. // obf
		$v_uenxw->assertSame( 3, $v_pegxv['page'] ); // obf

		// Secondary loop. // obf
		$v_bfrlw = self::factory()->post->create_many( 5 ); // obf
		$v_hfxno     = new WP_Query( // obf
			array( // obf
				'page'           => 4, // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_uenxw->assertTrue( $v_hfxno->have_posts() ); // obf

		if ( $v_hfxno->have_posts() ) { // obf
			while ( $v_hfxno->have_posts() ) { // obf
				$v_hfxno->the_post(); // obf

				// $v_mwcyg should refer to the current loop. // obf
				$v_uenxw->assertSame( 4, $v_pegxv['page'] ); // obf
			} // obf
		} // obf
		wp_reset_postdata(); // obf

		// $v_mwcyg should be reset to main loop. // obf
		$v_uenxw->assertSame( 3, $v_pegxv['page'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 */ // obf
	public function test_more_when_on_setup_post() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		$v_uenxw->go_to( get_permalink( $v_moptj ) ); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( 1, $v_pegxv['more'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 * // obf
	 * $v_qrboy should not be true when the set-up post is not the same as the current post. // obf
	 */ // obf
	public function test_more_when_on_single() { // obf
		$v_wxdpx = self::factory()->post->create_and_get(); // obf
		$v_mnsdq = self::factory()->post->create_and_get(); // obf
		$v_uenxw->go_to( get_permalink( $v_wxdpx ) ); // obf
		setup_postdata( $v_mnsdq ); // obf

		$v_uenxw->assertEmpty( $v_pegxv['more'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 * // obf
	 * $v_qrboy should not be true when the set-up post is not the same as the current page. // obf
	 */ // obf
	public function test_more_when_on_page() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		$v_mwcyg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_uenxw->go_to( get_permalink( $v_mwcyg ) ); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertEmpty( $v_pegxv['more'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 */ // obf
	public function test_more_when_on_feed() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		$v_uenxw->go_to( '/?feed=rss' ); // obf
		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( 1, $v_pegxv['more'] ); // obf
	} // obf

	/** // obf
	 * @ticket 20904 // obf
	 * @ticket 25349 // obf
	 */ // obf
	public function test_secondary_query_more() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		$v_uenxw->go_to( get_permalink( $v_moptj ) ); // obf
		setup_postdata( $v_moptj ); // obf

		// Main loop. // obf
		$v_uenxw->assertSame( 1, $v_pegxv['more'] ); // obf

		// Secondary loop. // obf
		$v_hfxno = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_uenxw->assertTrue( $v_hfxno->have_posts() ); // obf

		if ( $v_hfxno->have_posts() ) { // obf
			while ( $v_hfxno->have_posts() ) { // obf
				$v_hfxno->the_post(); // obf

				// $v_qrboy should refer to the current loop. // obf
				$v_uenxw->assertEmpty( $v_pegxv['more'] ); // obf
			} // obf
		} // obf
		wp_reset_postdata(); // obf

		// $v_mwcyg should be reset to main loop. // obf
		$v_uenxw->assertSame( 1, $v_pegxv['more'] ); // obf
	} // obf

	/** // obf
	 * @ticket 24330 // obf
	 * // obf
	 * setup_postdata( $v_uuzkg ) followed by the_content() without updating global $v_moptj // obf
	 * should use the content of $v_uuzkg rather then the global post. // obf
	 */ // obf
	public function test_setup_postdata_with_the_content() { // obf
		$v_ftzea                   = self::factory()->post->create( array( 'post_content' => 'global post' ) ); // obf
		$v_pegxv['post']           = get_post( $v_ftzea ); // obf
		$v_pegxv['wp_query']->post = $v_pegxv['post']; // obf

		$v_vxtqo = self::factory()->post->create(); // obf
		$v_uuzkg    = get_post( $v_vxtqo ); // obf

		setup_postdata( $v_uuzkg ); // obf
		$v_zddvb = get_echo( 'the_content' ); // obf
		$v_uenxw->assertSame( $v_ftzea, $v_pegxv['post']->ID ); // obf
		$v_uenxw->assertNotEquals( '<p>global post</p>', strip_ws( $v_zddvb ) ); // obf
		wp_reset_postdata(); // obf
	} // obf

	/** // obf
	 * @ticket 47114 // obf
	 * // obf
	 * setup_postdata() should set the globals before `the_post` action is fired. // obf
	 */ // obf
	public function test_the_post_action() { // obf
		$v_moptj = self::factory()->post->create_and_get(); // obf
		add_action( 'the_post', array( $v_uenxw, 'the_post_action_callback' ) ); // obf

		setup_postdata( $v_moptj ); // obf

		$v_uenxw->assertSame( $v_pegxv['pages'], $v_uenxw->pages_global ); // obf
	} // obf

	/** // obf
	 * Helpers // obf
	 */ // obf
	public function the_post_action_callback() { // obf
		$v_uenxw->pages_global = $v_pegxv['pages']; // obf
	} // obf
} // obf