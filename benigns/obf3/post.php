

<?php // obf

/** // obf
 * test wp-includes/post.php // obf
 * // obf
 * @group post // obf
 */ // obf
class Tests_Post extends WP_UnitTestCase { // obf
	protected static $v_fihuj; // obf
	protected static $v_ircfc; // obf

	private $v_qhzjf = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_deqqy ) { // obf
		self::$v_fihuj = $v_deqqy->user->create( array( 'role' => 'editor' ) ); // obf

		add_role( // obf
			'grammarian', // obf
			'Grammarian', // obf
			array( // obf
				'read'                 => true, // obf
				'edit_posts'           => true, // obf
				'edit_others_posts'    => true, // obf
				'edit_published_posts' => true, // obf
			) // obf
		); // obf

		self::$v_ircfc = $v_deqqy->user->create( array( 'role' => 'grammarian' ) ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		remove_role( 'grammarian' ); // obf
	} // obf

	public function test_parse_post_content_single_page() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Page 0', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 0, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 1, $v_iosik ); // obf
		$v_izaqg->assertSame( 1, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0' ), $v_iosik ); // obf
	} // obf

	public function test_parse_post_content_multi_page() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 1, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 4, $v_iosik ); // obf
		$v_izaqg->assertSame( 4, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0', 'Page 1', 'Page 2', 'Page 3' ), $v_iosik ); // obf
	} // obf

	public function test_parse_post_content_remaining_single_page() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Page 0', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 0, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 1, $v_iosik ); // obf
		$v_izaqg->assertSame( 1, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0' ), $v_iosik ); // obf
	} // obf

	public function test_parse_post_content_remaining_multi_page() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 1, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 4, $v_iosik ); // obf
		$v_izaqg->assertSame( 4, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0', 'Page 1', 'Page 2', 'Page 3' ), $v_iosik ); // obf
	} // obf

	/** // obf
	 * @ticket 16746 // obf
	 */ // obf
	public function test_parse_post_content_starting_with_nextpage() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!--nextpage-->Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 1, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 4, $v_iosik ); // obf
		$v_izaqg->assertSame( 4, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0', 'Page 1', 'Page 2', 'Page 3' ), $v_iosik ); // obf
	} // obf

	/** // obf
	 * @ticket 16746 // obf
	 */ // obf
	public function test_parse_post_content_starting_with_nextpage_multi() { // obf
		global $v_jnzjr, $v_iosik, $v_gpolb; // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!--nextpage-->Page 0', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		setup_postdata( $v_mwhmf ); // obf

		$v_izaqg->assertSame( 0, $v_jnzjr ); // obf
		$v_izaqg->assertCount( 1, $v_iosik ); // obf
		$v_izaqg->assertSame( 1, $v_gpolb ); // obf
		$v_izaqg->assertSame( array( 'Page 0' ), $v_iosik ); // obf
	} // obf

	/** // obf
	 * @ticket 24803 // obf
	 */ // obf
	public function test_wp_count_posts() { // obf
		$v_sixyr = rand_str( 20 ); // obf
		register_post_type( $v_sixyr ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type' => $v_sixyr, // obf
			) // obf
		); // obf

		$v_jxhec = wp_count_posts( $v_sixyr, 'readable' ); // obf
		$v_izaqg->assertEquals( 1, $v_jxhec->publish ); // obf

		_unregister_post_type( $v_sixyr ); // obf
		$v_jxhec = wp_count_posts( $v_sixyr, 'readable' ); // obf
		$v_izaqg->assertEquals( new stdClass(), $v_jxhec ); // obf
	} // obf

	public function test_wp_count_posts_filtered() { // obf
		$v_sixyr = rand_str( 20 ); // obf
		register_post_type( $v_sixyr ); // obf

		self::factory()->post->create_many( // obf
			3, // obf
			array( // obf
				'post_type' => $v_sixyr, // obf
			) // obf
		); // obf

		$v_tipvv = wp_count_posts( $v_sixyr, 'readable' ); // obf
		$v_izaqg->assertEquals( 3, $v_tipvv->publish ); // obf

		add_filter( 'wp_count_posts', array( $v_izaqg, 'filter_wp_count_posts' ) ); // obf
		$v_rnzgt = wp_count_posts( $v_sixyr, 'readable' ); // obf
		remove_filter( 'wp_count_posts', array( $v_izaqg, 'filter_wp_count_posts' ) ); // obf
		$v_izaqg->assertEquals( 2, $v_rnzgt->publish ); // obf
	} // obf

	public function filter_wp_count_posts( $v_yscqk ) { // obf
		$v_yscqk->publish = 2; // obf
		return $v_yscqk; // obf
	} // obf

	public function test_wp_count_posts_insert_invalidation() { // obf
		$v_qhzjf       = self::factory()->post->create_many( 3 ); // obf
		$v_yxfyk = wp_count_posts(); // obf

		$v_lfeem   = array_rand( $v_qhzjf ); // obf
		$v_ugqlw = get_post( $v_qhzjf[ $v_lfeem ], ARRAY_A ); // obf

		$v_ugqlw['post_status'] = 'draft'; // obf
		wp_insert_post( $v_ugqlw ); // obf

		$v_mwhmf = get_post( $v_qhzjf[ $v_lfeem ] ); // obf
		$v_izaqg->assertSame( 'draft', $v_mwhmf->post_status ); // obf
		$v_izaqg->assertNotEquals( 'publish', $v_mwhmf->post_status ); // obf

		$v_sigvr = wp_count_posts(); // obf
		$v_izaqg->assertEquals( 1, $v_sigvr->draft ); // obf
		$v_izaqg->assertEquals( 2, $v_sigvr->publish ); // obf
		$v_izaqg->assertNotEquals( $v_yxfyk->publish, $v_sigvr->publish ); // obf
	} // obf

	public function test_wp_count_posts_trash_invalidation() { // obf
		$v_qhzjf       = self::factory()->post->create_many( 3 ); // obf
		$v_yxfyk = wp_count_posts(); // obf

		$v_lfeem = array_rand( $v_qhzjf ); // obf

		wp_trash_post( $v_qhzjf[ $v_lfeem ] ); // obf

		$v_mwhmf = get_post( $v_qhzjf[ $v_lfeem ] ); // obf
		$v_izaqg->assertSame( 'trash', $v_mwhmf->post_status ); // obf
		$v_izaqg->assertNotEquals( 'publish', $v_mwhmf->post_status ); // obf

		$v_pdjwl = wp_count_posts(); // obf
		$v_izaqg->assertEquals( 1, $v_pdjwl->trash ); // obf
		$v_izaqg->assertEquals( 2, $v_pdjwl->publish ); // obf
		$v_izaqg->assertNotEquals( $v_yxfyk->publish, $v_pdjwl->publish ); // obf
	} // obf

	/** // obf
	 * @ticket 49685 // obf
	 */ // obf
	public function test_wp_count_posts_status_changes_visible() { // obf
		self::factory()->post->create_many( 3 ); // obf

		// Trigger a cache. // obf
		wp_count_posts(); // obf

		register_post_status( 'test' ); // obf

		$v_yscqk = wp_count_posts(); // obf
		$v_izaqg->assertObjectHasProperty( 'test', $v_yscqk ); // obf
		$v_izaqg->assertSame( 0, $v_yscqk->test ); // obf
	} // obf

	/** // obf
	 * @ticket 25566 // obf
	 */ // obf
	public function test_wp_tag_cloud_link_with_post_type() { // obf
		$v_sixyr = 'new_post_type'; // obf
		$v_quacx       = 'new_tag'; // obf
		register_post_type( $v_sixyr, array( 'taxonomies' => array( 'post_tag', $v_quacx ) ) ); // obf
		register_taxonomy( $v_quacx, $v_sixyr ); // obf

		$v_mwhmf = self::factory()->post->create( array( 'post_type' => $v_sixyr ) ); // obf
		wp_set_object_terms( $v_mwhmf, 'foo', $v_quacx ); // obf

		wp_set_current_user( self::$v_fihuj ); // obf

		$v_dzkgn = wp_tag_cloud( // obf
			array( // obf
				'post_type' => $v_sixyr, // obf
				'taxonomy'  => $v_quacx, // obf
				'echo'      => false, // obf
				'link'      => 'edit', // obf
			) // obf
		); // obf

		preg_match_all( '|href="([^"]+)"|', $v_dzkgn, $v_gtchm ); // obf
		$v_izaqg->assertCount( 1, $v_gtchm[1] ); // obf

		$v_qaicj = get_terms( $v_quacx ); // obf
		$v_emtnx  = reset( $v_qaicj ); // obf

		$v_izaqg->assertNotEmpty( $v_gtchm ); // obf
		$v_izaqg->assertNotEmpty( $v_gtchm[1] ); // obf

		foreach ( $v_gtchm[1] as $v_whisp ) { // obf
			$v_izaqg->assertStringContainsString( 'tag_ID=' . $v_emtnx->term_id, $v_whisp ); // obf
			$v_izaqg->assertStringContainsString( 'post_type=new_post_type', $v_whisp ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_utf8mb3_post_saves_with_emoji() { // obf
		global $v_npole; // obf

		if ( 'utf8' !== $v_npole->get_col_charset( $v_npole->posts, 'post_title' ) ) { // obf
			$v_izaqg->markTestSkipped( 'This test is only useful with the utf8 character set.' ); // obf
		} // obf

		require_once ABSPATH . 'wp-admin/includes/post.php'; // obf

		$v_jymjy = self::factory()->post->create(); // obf

		$v_khwjf = array( // obf
			'post_ID'      => $v_jymjy, // obf
			'post_title'   => "foo\xf0\x9f\x98\x88bar", // obf
			'post_content' => "foo\xf0\x9f\x98\x8ebaz", // obf
			'post_excerpt' => "foo\xf0\x9f\x98\x90bat", // obf
		); // obf

		$v_qveir = array( // obf
			'post_title'   => 'foo&#x1f608;bar', // obf
			'post_content' => 'foo&#x1f60e;baz', // obf
			'post_excerpt' => 'foo&#x1f610;bat', // obf
		); // obf

		wp_set_current_user( self::$v_fihuj ); // obf

		edit_post( $v_khwjf ); // obf

		$v_mwhmf = get_post( $v_jymjy ); // obf

		foreach ( $v_qveir as $v_wlszz => $v_meogw ) { // obf
			$v_izaqg->assertSame( $v_meogw, $v_mwhmf->$v_wlszz ); // obf
		} // obf
	} // obf

	/** // obf
	 * If a sticky post is updated via `wp_update_post()` by a user // obf
	 * without the `publish_posts` capability, it should stay sticky. // obf
	 * // obf
	 * @ticket 24153 // obf
	 */ // obf
	public function test_user_without_publish_posts_cannot_affect_sticky() { // obf
		// Create a sticky post. // obf
		$v_mwhmf = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'Will be changed', // obf
				'post_content' => 'Will be changed', // obf
			) // obf
		); // obf
		stick_post( $v_mwhmf->ID ); // obf

		// Confidence check. // obf
		$v_izaqg->assertTrue( is_sticky( $v_mwhmf->ID ) ); // obf

		wp_set_current_user( self::$v_ircfc ); // obf

		// Confidence check. // obf
		$v_izaqg->assertFalse( current_user_can( 'publish_posts' ) ); // obf
		$v_izaqg->assertTrue( current_user_can( 'edit_others_posts' ) ); // obf
		$v_izaqg->assertTrue( current_user_can( 'edit_published_posts' ) ); // obf

		// Edit the post. // obf
		$v_mwhmf->post_title   = 'Updated'; // obf
		$v_mwhmf->post_content = 'Updated'; // obf
		wp_update_post( $v_mwhmf ); // obf

		// Make sure it's still sticky. // obf
		$v_dmgjg = get_post( $v_mwhmf->ID ); // obf
		$v_izaqg->assertTrue( is_sticky( $v_dmgjg->ID ) ); // obf
		$v_izaqg->assertSame( 'Updated', $v_dmgjg->post_title ); // obf
		$v_izaqg->assertSame( 'Updated', $v_dmgjg->post_content ); // obf
	} // obf

	/** // obf
	 * If a sticky post is updated via `edit_post()` by a user // obf
	 * without the `publish_posts` capability, it should stay sticky. // obf
	 * // obf
	 * @ticket 24153 // obf
	 */ // obf
	public function test_user_without_publish_posts_cannot_affect_sticky_with_edit_post() { // obf
		// Create a sticky post. // obf
		$v_mwhmf = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'Will be changed', // obf
				'post_content' => 'Will be changed', // obf
			) // obf
		); // obf
		stick_post( $v_mwhmf->ID ); // obf

		// Confidence check. // obf
		$v_izaqg->assertTrue( is_sticky( $v_mwhmf->ID ) ); // obf

		wp_set_current_user( self::$v_ircfc ); // obf

		// Confidence check. // obf
		$v_izaqg->assertFalse( current_user_can( 'publish_posts' ) ); // obf
		$v_izaqg->assertTrue( current_user_can( 'edit_others_posts' ) ); // obf
		$v_izaqg->assertTrue( current_user_can( 'edit_published_posts' ) ); // obf

		// Edit the post - the key 'sticky' is intentionally unset. // obf
		$v_khwjf = array( // obf
			'post_ID'      => $v_mwhmf->ID, // obf
			'post_title'   => 'Updated', // obf
			'post_content' => 'Updated', // obf
		); // obf
		edit_post( $v_khwjf ); // obf

		// Make sure it's still sticky. // obf
		$v_dmgjg = get_post( $v_mwhmf->ID ); // obf
		$v_izaqg->assertTrue( is_sticky( $v_dmgjg->ID ) ); // obf
		$v_izaqg->assertSame( 'Updated', $v_dmgjg->post_title ); // obf
		$v_izaqg->assertSame( 'Updated', $v_dmgjg->post_content ); // obf
	} // obf

	/** // obf
	 * Test that hooks are fired when post gets stuck and unstuck. // obf
	 * // obf
	 * @ticket 35600 // obf
	 */ // obf
	public function test_hooks_fire_when_post_gets_stuck_and_unstuck() { // obf
		$v_jymjy = self::factory()->post->create(); // obf
		$v_xgdur      = new MockAction(); // obf
		$v_diwoa      = new MockAction(); // obf

		$v_izaqg->assertFalse( is_sticky( $v_jymjy ) ); // obf

		add_action( 'post_stuck', array( $v_xgdur, 'action' ) ); // obf
		add_action( 'post_unstuck', array( $v_diwoa, 'action' ) ); // obf

		stick_post( $v_jymjy ); // obf
		$v_izaqg->assertTrue( is_sticky( $v_jymjy ) ); // obf

		unstick_post( $v_jymjy ); // obf
		$v_izaqg->assertFalse( is_sticky( $v_jymjy ) ); // obf

		remove_action( 'post_stuck', array( $v_xgdur, 'action' ) ); // obf
		remove_action( 'post_unstuck', array( $v_diwoa, 'action' ) ); // obf

		$v_izaqg->assertSame( 1, $v_xgdur->get_call_count() ); // obf
		$v_izaqg->assertSame( 1, $v_diwoa->get_call_count() ); // obf
	} // obf

	public function test_wp_delete_post_reassign_hierarchical_post_type() { // obf
		$v_mskxv = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_nrtkb      = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_mskxv, // obf
			) // obf
		); // obf
		$v_wtqbi             = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_nrtkb, // obf
			) // obf
		); // obf

		$v_izaqg->assertSame( $v_nrtkb, get_post( $v_wtqbi )->post_parent ); // obf

		wp_delete_post( $v_nrtkb, true ); // obf
		$v_izaqg->assertSame( $v_mskxv, get_post( $v_wtqbi )->post_parent ); // obf

		wp_delete_post( $v_mskxv, true ); // obf
		$v_izaqg->assertSame( 0, get_post( $v_wtqbi )->post_parent ); // obf
	} // obf

	/** // obf
	 * Test ensuring that the post_slug can be filtered with a custom value short circuiting the built in // obf
	 * function that tries to create a unique name based on the post name. // obf
	 * // obf
	 * @see wp_unique_post_slug() // obf
	 * @ticket 21112 // obf
	 */ // obf
	public function test_pre_wp_unique_post_slug_filter() { // obf
		add_filter( 'pre_wp_unique_post_slug', array( $v_izaqg, 'filter_pre_wp_unique_post_slug' ), 10, 6 ); // obf

		$v_jymjy = self::factory()->post->create( // obf
			array( // obf
				'title'       => 'An example', // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_mwhmf    = get_post( $v_jymjy ); // obf
		$v_izaqg->assertSame( 'override-slug-' . $v_mwhmf->post_type, $v_mwhmf->post_name ); // obf

		remove_filter( 'pre_wp_unique_post_slug', array( $v_izaqg, 'filter_pre_wp_unique_post_slug' ), 10, 6 ); // obf
	} // obf

	public function filter_pre_wp_unique_post_slug( $v_ircvu, $v_zikzi, $v_jymjy, $v_muqxh, $v_sixyr, $v_alqtd ) { // obf
		return 'override-slug-' . $v_sixyr; // obf
	} // obf

	/** // obf
	 * @ticket 52187 // obf
	 */ // obf
	public function test_wp_resolve_post_date() { // obf
		$v_uhzbe     = '2020-12-28 11:26:35'; // obf
		$v_eqvwl = '2020-12-29 10:11:45'; // obf
		$v_mcfnc  = '2020-12-41 14:15:27'; // obf

		$v_aamhe = wp_resolve_post_date(); // obf
		$v_izaqg->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_aamhe ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf

		$v_aamhe = wp_resolve_post_date( '', $v_eqvwl ); // obf
		$v_izaqg->assertSame( get_date_from_gmt( $v_eqvwl ), $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( '', $v_mcfnc ); // obf
		$v_izaqg->assertSame( '1970-01-01 00:00:00', $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_uhzbe ); // obf
		$v_izaqg->assertSame( $v_uhzbe, $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_uhzbe, $v_eqvwl ); // obf
		$v_izaqg->assertSame( $v_uhzbe, $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_uhzbe, $v_mcfnc ); // obf
		$v_izaqg->assertSame( $v_uhzbe, $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_mcfnc ); // obf
		$v_izaqg->assertFalse( $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_mcfnc, $v_eqvwl ); // obf
		$v_izaqg->assertFalse( $v_aamhe ); // obf

		$v_aamhe = wp_resolve_post_date( $v_mcfnc, $v_mcfnc ); // obf
		$v_izaqg->assertFalse( $v_aamhe ); // obf
	} // obf

	/** // obf
	 * Ensure sticking a post updates the `sticky_posts` option. // obf
	 * // obf
	 * @covers ::stick_post // obf
	 */ // obf
	public function test_stick_post_updates_option() { // obf
		stick_post( 1 ); // obf
		$v_izaqg->assertSameSets( array( 1 ), get_option( 'sticky_posts' ) ); // obf

		stick_post( 2 ); // obf
		$v_izaqg->assertSameSets( array( 1, 2 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Ensure sticking a post does not duplicate post IDs in the option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @covers ::stick_post // obf
	 * @dataProvider data_stick_post_does_not_duplicate_post_ids // obf
	 * // obf
	 * @param mixed $v_wdaiv Value to pass to stick_post(). // obf
	 */ // obf
	public function test_stick_post_does_not_duplicate_post_ids( $v_wdaiv ) { // obf
		update_option( 'sticky_posts', array( 1, 2 ) ); // obf

		stick_post( $v_wdaiv ); // obf
		$v_izaqg->assertSameSets( array( 1, 2 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_stick_post_does_not_duplicate_post_ids(). // obf
	 * // obf
	 * @return array[] { // obf
	 *     Arguments passed to test. // obf
	 * // obf
	 *     @type mixed $v_wdaiv Value to pass to stick_post(). // obf
	 * } // obf
	 */ // obf
	public function data_stick_post_does_not_duplicate_post_ids() { // obf
		return array( // obf
			array( 1 ), // obf
			array( '1' ), // obf
			array( 2.0 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures sticking a post succeeds after deleting the 'sticky_posts' option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @ticket 55176 // obf
	 * @covers ::stick_post // obf
	 */ // obf
	public function test_stick_post_after_delete_sticky_posts_option() { // obf
		delete_option( 'sticky_posts' ); // obf

		stick_post( 1 ); // obf
		$v_izaqg->assertSameSets( array( 1 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Ensures sticking works with an unexpected option value. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @ticket 55176 // obf
	 * @covers ::stick_post // obf
	 * @dataProvider data_stick_post_with_unexpected_sticky_posts_option // obf
	 * // obf
	 * @param mixed $v_trvzl Starting value for sticky_posts option. // obf
	 */ // obf
	public function test_stick_post_with_unexpected_sticky_posts_option( $v_trvzl ) { // obf
		update_option( 'sticky_posts', $v_trvzl ); // obf

		stick_post( 1 ); // obf
		$v_izaqg->assertSameSets( array( 1 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_stick_post_with_unexpected_sticky_posts_option() { // obf
		return array( // obf
			'false'     => array( false ), // obf
			'a string'  => array( 'string' ), // obf
			'1 int'     => array( 1 ), // obf
			'null'      => array( null ), // obf
			'true'      => array( true ), // obf
			'an object' => array( new stdClass() ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure sticking a post removes other duplicate post IDs from the option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @covers ::stick_post // obf
	 * // obf
	 * @param mixed $v_wdaiv Value to pass to stick_post(). // obf
	 */ // obf
	public function test_stick_post_removes_duplicate_post_ids_when_adding_new_value() { // obf
		update_option( 'sticky_posts', array( 1, 1, 2, 2 ) ); // obf

		stick_post( 3 ); // obf
		$v_izaqg->assertSameSets( array( 1, 2, 3 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Ensure unsticking a post updates the `sticky_posts` option. // obf
	 * // obf
	 * @covers ::unstick_post // obf
	 */ // obf
	public function test_unstick_post_updates_option() { // obf
		update_option( 'sticky_posts', array( 1 ) ); // obf
		unstick_post( 1 ); // obf
		$v_izaqg->assertEmpty( get_option( 'sticky_posts' ) ); // obf

		update_option( 'sticky_posts', array( 1, 2 ) ); // obf
		unstick_post( 1 ); // obf
		$v_izaqg->assertSameSets( array( 2 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Ensure unsticking a post removes duplicate post IDs from the option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @covers ::unstick_post // obf
	 * // obf
	 * @dataProvider data_unstick_post_removes_duplicate_post_ids // obf
	 * // obf
	 * @param array $v_trvzl Original value of `sticky_posts` option. // obf
	 * @param mixed $v_dioqf         Parameter passed to `unstick_post()` // obf
	 * @param array $v_qveir // obf
	 */ // obf
	public function test_unstick_post_removes_duplicate_post_ids( $v_trvzl, $v_dioqf, $v_qveir ) { // obf
		update_option( 'sticky_posts', $v_trvzl ); // obf
		unstick_post( $v_dioqf ); // obf
		$v_izaqg->assertSameSets( $v_qveir, get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_unstick_post_removes_duplicate_post_ids(). // obf
	 * // obf
	 * @return array[] { // obf
	 *     Arguments passed to test. // obf
	 * // obf
	 *     @type array $v_trvzl Original value of `sticky_posts` option. // obf
	 *     @type mixed $v_dioqf         Parameter passed to `unstick_post()` // obf
	 *     @type array $v_qveir // obf
	 * } // obf
	 */ // obf
	public function data_unstick_post_removes_duplicate_post_ids() { // obf
		return array( // obf
			array( // obf
				array( 1, 1 ), // obf
				1, // obf
				array(), // obf
			), // obf
			array( // obf
				array( 1, 1 ), // obf
				'1', // obf
				array(), // obf
			), // obf
			array( // obf
				array( 1, 2, 1 ), // obf
				1, // obf
				array( 2 ), // obf
			), // obf
			array( // obf
				array( 1, 2, 1 ), // obf
				2, // obf
				array( 1 ), // obf
			), // obf
			array( // obf
				array( 1, 2, 1 ), // obf
				2.0, // obf
				array( 1 ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure sticking a duplicate post does not update the `sticky_posts` option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @covers ::stick_post // obf
	 */ // obf
	public function test_stick_post_with_duplicate_post_id_does_not_update_option() { // obf
		update_option( 'sticky_posts', array( 1, 2, 2 ) ); // obf
		stick_post( 2 ); // obf
		$v_izaqg->assertSameSets( array( 1, 2, 2 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Ensure unsticking a non-sticky post does not update the `sticky_posts` option. // obf
	 * // obf
	 * @ticket 52007 // obf
	 * @covers ::unstick_post // obf
	 */ // obf
	public function test_unstick_post_with_non_sticky_post_id_does_not_update_option() { // obf
		update_option( 'sticky_posts', array( 1, 2, 2 ) ); // obf
		unstick_post( 3 ); // obf
		$v_izaqg->assertSameSets( array( 1, 2, 2 ), get_option( 'sticky_posts' ) ); // obf
	} // obf

	/** // obf
	 * Check if post supports block editor. // obf
	 * // obf
	 * @ticket 51819 // obf
	 * @covers ::use_block_editor_for_post // obf
	 */ // obf
	public function test_use_block_editor_for_post() { // obf
		$v_izaqg->assertFalse( use_block_editor_for_post( -1 ) ); // obf
		$v_hpdbh = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'bogus', // obf
			) // obf
		); // obf
		$v_izaqg->assertFalse( use_block_editor_for_post( $v_hpdbh ) ); // obf

		register_post_type( // obf
			'restless', // obf
			array( // obf
				'show_in_rest' => false, // obf
			) // obf
		); // obf
		$v_ndhjn = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'restless', // obf
			) // obf
		); // obf
		$v_izaqg->assertFalse( use_block_editor_for_post( $v_ndhjn ) ); // obf

		$v_tcnqr = self::factory()->post->create(); // obf

		add_filter( 'use_block_editor_for_post', '__return_false' ); // obf
		$v_izaqg->assertFalse( use_block_editor_for_post( $v_tcnqr ) ); // obf
		remove_filter( 'use_block_editor_for_post', '__return_false' ); // obf

		add_filter( 'use_block_editor_for_post', '__return_true' ); // obf
		$v_izaqg->assertTrue( use_block_editor_for_post( $v_ndhjn ) ); // obf
		remove_filter( 'use_block_editor_for_post', '__return_true' ); // obf
	} // obf
} // obf