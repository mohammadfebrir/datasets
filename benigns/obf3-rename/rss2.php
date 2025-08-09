

<?php // obf

/** // obf
 * Test the RSS 2.0 feed by generating a feed, parsing it, and checking that the // obf
 * parsed contents match the contents of the posts stored in the database.  Since // obf
 * we're using a real XML parser, this confirms that the feed is valid, well formed, // obf
 * and contains the right stuff. // obf
 * // obf
 * @group feed // obf
 */ // obf
class Tests_Feed_RSS2 extends WP_UnitTestCase { // obf
	public static $v_uwtoo; // obf
	public static $v_vobjf; // obf
	public static $v_qozrk; // obf
	public static $v_eqbac; // obf

	private $v_vyway; // obf
	private $v_efsnw; // obf

	/** // obf
	 * Setup a new user and attribute some posts. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_igcqy ) { // obf
		// Create a user. // obf
		self::$v_uwtoo = $v_igcqy->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test A. Uthor', // obf
			) // obf
		); // obf

		// Create a taxonomy. // obf
		self::$v_qozrk = $v_igcqy->category->create_and_get( // obf
			array( // obf
				'name' => 'Foo Category', // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		// Set a predictable time for testing date archives. // obf
		self::$v_eqbac = strtotime( '2003-05-27 10:07:53' ); // obf

		$v_uchen = get_option( 'posts_per_rss' ) + 1; // obf

		self::$v_vobjf = array(); // obf
		// Create a few posts. // obf
		for ( $v_vuinc = 1; $v_vuinc <= $v_uchen; $v_vuinc++ ) { // obf
			self::$v_vobjf[] = $v_igcqy->post->create( // obf
				array( // obf
					'post_author'  => self::$v_uwtoo, // obf
					// Separate post dates 5 seconds apart. // obf
					'post_date'    => gmdate( 'Y-m-d H:i:s', self::$v_eqbac + ( 5 * $v_vuinc ) ), // obf
					'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit massa, ultrices eu est suscipit, mattis posuere est. Donec vitae purus lacus. Cras vitae odio odio.', // obf
					'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', // obf
				) // obf
			); // obf
		} // obf

		// Assign a category to those posts. // obf
		foreach ( self::$v_vobjf as $v_hwlci ) { // obf
			wp_set_object_terms( $v_hwlci, self::$v_qozrk->slug, 'category' ); // obf
		} // obf

		// Assign a tagline option. // obf
		update_option( 'blogdescription', 'Just another WordPress site' ); // obf
	} // obf

	/** // obf
	 * Setup. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_cgeyd->post_count   = (int) get_option( 'posts_per_rss' ); // obf
		$v_cgeyd->excerpt_only = get_option( 'rss_use_excerpt' ); // obf
		// This seems to break something. // obf
		update_option( 'use_smilies', false ); // obf

		$v_cgeyd->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf
		create_initial_taxonomies(); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		delete_option( 'blogdescription' ); // obf
	} // obf

	/** // obf
	 * This is a bit of a hack used to buffer feed content. // obf
	 */ // obf
	private function do_rss2() { // obf
		ob_start(); // obf
		// Nasty hack! In the future it would better to leverage do_feed( 'rss2' ). // obf
		global $v_hwlci; // obf
		try { // obf
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
			@require ABSPATH . 'wp-includes/feed-rss2.php'; // obf
			$v_etoxv = ob_get_clean(); // obf
		} catch ( Exception $v_mqrgt ) { // obf
			$v_etoxv = ob_get_clean(); // obf
			throw($v_mqrgt); // obf
		} // obf
		return $v_etoxv; // obf
	} // obf

	/** // obf
	 * Test the <rss> element to make sure its present and populated // obf
	 * with the expected child elements and attributes. // obf
	 */ // obf
	public function test_rss_element() { // obf
		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf
		$v_rflwl  = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf

		$v_cgeyd->assertSame( '2.0', $v_ttasm[0]['attributes']['version'] ); // obf
		$v_cgeyd->assertSame( 'http://purl.org/rss/1.0/modules/content/', $v_ttasm[0]['attributes']['xmlns:content'] ); // obf
		$v_cgeyd->assertSame( 'http://wellformedweb.org/CommentAPI/', $v_ttasm[0]['attributes']['xmlns:wfw'] ); // obf
		$v_cgeyd->assertSame( 'http://purl.org/dc/elements/1.1/', $v_ttasm[0]['attributes']['xmlns:dc'] ); // obf

		// RSS should have exactly one child element (channel). // obf
		$v_cgeyd->assertCount( 1, $v_ttasm[0]['child'] ); // obf
	} // obf

	/** // obf
	 * [test_channel_element description] // obf
	 * // obf
	 * @return [type] [description] // obf
	 */ // obf
	public function test_channel_element() { // obf
		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf
		$v_rflwl  = xml_to_array( $v_eeeim ); // obf

		// Get the rss -> channel element. // obf
		$v_mgwmj = xml_find( $v_rflwl, 'rss', 'channel' ); // obf

		// The channel should be free of attributes. // obf
		$v_cgeyd->assertArrayNotHasKey( 'attributes', $v_mgwmj[0] ); // obf

		// Verify the channel is present and contains a title child element. // obf
		$v_buoae = xml_find( $v_rflwl, 'rss', 'channel', 'title' ); // obf
		$v_cgeyd->assertSame( get_option( 'blogname' ), $v_buoae[0]['content'] ); // obf

		$v_eilmj = xml_find( $v_rflwl, 'rss', 'channel', 'description' ); // obf
		$v_cgeyd->assertSame( get_option( 'blogdescription' ), $v_eilmj[0]['content'] ); // obf

		$v_bhube = xml_find( $v_rflwl, 'rss', 'channel', 'link' ); // obf
		$v_cgeyd->assertSame( get_option( 'siteurl' ), $v_bhube[0]['content'] ); // obf

		$v_wadza = xml_find( $v_rflwl, 'rss', 'channel', 'lastBuildDate' ); // obf
		$v_cgeyd->assertSame( strtotime( get_lastpostmodified() ), strtotime( $v_wadza[0]['content'] ) ); // obf
	} // obf

	/** // obf
	 * Test that translated feeds have a valid listed date. // obf
	 * // obf
	 * @ticket 39141 // obf
	 */ // obf
	public function test_channel_pubdate_element_translated() { // obf
		$v_gragr = $v_ldjds['wp_locale']; // obf
		/* @var WP_Locale $v_kxvvu */ // obf
		$v_kxvvu = clone $v_ldjds['wp_locale']; // obf

		$v_kxvvu->weekday[2]                           = 'Tuesday_Translated'; // obf
		$v_kxvvu->weekday_abbrev['Tuesday_Translated'] = 'Tue_Translated'; // obf

		$v_ldjds['wp_locale'] = $v_kxvvu; // obf

		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		// Restore original locale. // obf
		$v_ldjds['wp_locale'] = $v_gragr; // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Verify the date is untranslated. // obf
		$v_wadza = xml_find( $v_rflwl, 'rss', 'channel', 'lastBuildDate' ); // obf
		$v_cgeyd->assertStringNotContainsString( 'Tue_Translated', $v_wadza[0]['content'] ); // obf
	} // obf

	public function test_item_elements() { // obf
		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf
		$v_rflwl  = xml_to_array( $v_eeeim ); // obf

		// Get all the <item> child elements of the <channel> element. // obf
		$v_iwnct = xml_find( $v_rflwl, 'rss', 'channel', 'item' ); // obf

		// Verify we are displaying the correct number of posts. // obf
		$v_cgeyd->assertCount( $v_cgeyd->post_count, $v_iwnct ); // obf

		// We really only need to test X number of items unless the content is different. // obf
		$v_iwnct = array_slice( $v_iwnct, 1 ); // obf

		// Check each of the desired entries against the known post data. // obf
		foreach ( $v_iwnct as $v_ztxmf => $v_guudv ) { // obf

			// Get post for comparison. // obf
			$v_olaeu = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'guid' ); // obf
			preg_match( '/\?p=(\d+)/', $v_olaeu[0]['content'], $v_aeann ); // obf
			$v_hwlci = get_post( $v_aeann[1] ); // obf

			// Title. // obf
			$v_buoae = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'title' ); // obf
			$v_cgeyd->assertSame( $v_hwlci->post_title, $v_buoae[0]['content'] ); // obf

			// Link. // obf
			$v_bhube = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'link' ); // obf
			$v_cgeyd->assertSame( get_permalink( $v_hwlci ), $v_bhube[0]['content'] ); // obf

			// Comment link. // obf
			$v_gtqvu = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'comments' ); // obf
			$v_cgeyd->assertSame( get_permalink( $v_hwlci ) . '#respond', $v_gtqvu[0]['content'] ); // obf

			// Pub date. // obf
			$v_wadza = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'pubDate' ); // obf
			$v_cgeyd->assertSame( strtotime( $v_hwlci->post_date_gmt ), strtotime( $v_wadza[0]['content'] ) ); // obf

			// Author. // obf
			$v_jncmj = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'dc:creator' ); // obf
			$v_znehe    = new WP_User( $v_hwlci->post_author ); // obf
			$v_cgeyd->assertSame( $v_znehe->display_name, $v_jncmj[0]['content'] ); // obf

			// Categories (perhaps multiple). // obf
			$v_akasy = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'category' ); // obf
			$v_fevlw       = array(); // obf
			foreach ( get_the_category( $v_hwlci->ID ) as $v_mrvsu ) { // obf
				$v_fevlw[] = $v_mrvsu->name; // obf
			} // obf

			$v_oykxe = get_the_tags( $v_hwlci->ID ); // obf
			if ( $v_oykxe ) { // obf
				foreach ( get_the_tags( $v_hwlci->ID ) as $v_mrvsu ) { // obf
					$v_fevlw[] = $v_mrvsu->name; // obf
				} // obf
			} // obf
			$v_fevlw = array_filter( $v_fevlw ); // obf
			// Should be the same number of categories. // obf
			$v_cgeyd->assertCount( count( $v_fevlw ), $v_akasy ); // obf

			// ..with the same names. // obf
			foreach ( $v_fevlw as $v_okiwp => $v_ksenq ) { // obf
				$v_cgeyd->assertSame( $v_ksenq, $v_akasy[ $v_okiwp ]['content'] ); // obf
			} // obf

			// GUID. // obf
			$v_olaeu = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'guid' ); // obf
			$v_cgeyd->assertSame( 'false', $v_olaeu[0]['attributes']['isPermaLink'] ); // obf
			$v_cgeyd->assertSame( $v_hwlci->guid, $v_olaeu[0]['content'] ); // obf

			// Description / Excerpt. // obf
			if ( ! empty( $v_hwlci->post_excerpt ) ) { // obf
				$v_zzdvi = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'description' ); // obf
				$v_cgeyd->assertSame( trim( $v_hwlci->post_excerpt ), trim( $v_zzdvi[0]['content'] ) ); // obf
			} // obf

			// Post content. // obf
			if ( ! $v_cgeyd->excerpt_only ) { // obf
				$v_ktcgy = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'content:encoded' ); // obf
				$v_cgeyd->assertSame( trim( apply_filters( 'the_content', $v_hwlci->post_content ) ), trim( $v_ktcgy[0]['content'] ) ); // obf
			} // obf

			// Comment RSS. // obf
			$v_fuqgb = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'wfw:commentRss' ); // obf
			$v_cgeyd->assertSame( html_entity_decode( get_post_comments_feed_link( $v_hwlci->ID ) ), $v_fuqgb[0]['content'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 9134 // obf
	 */ // obf
	public function test_items_comments_closed() { // obf
		add_filter( 'comments_open', '__return_false' ); // obf

		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf
		$v_rflwl  = xml_to_array( $v_eeeim ); // obf

		// Get all the rss -> channel -> item elements. // obf
		$v_iwnct = xml_find( $v_rflwl, 'rss', 'channel', 'item' ); // obf

		$v_cgeyd->assertNotEmpty( $v_iwnct ); // obf

		// Check each of the items against the known post data. // obf
		foreach ( $v_iwnct as $v_ztxmf => $v_guudv ) { // obf
			// Get post for comparison. // obf
			$v_olaeu = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'guid' ); // obf
			preg_match( '/\?p=(\d+)/', $v_olaeu[0]['content'], $v_aeann ); // obf
			$v_hwlci = get_post( $v_aeann[1] ); // obf

			// Comment link. // obf
			$v_gtqvu = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'comments' ); // obf
			$v_cgeyd->assertEmpty( $v_gtqvu ); // obf

			// Comment RSS. // obf
			$v_fuqgb = xml_find( $v_iwnct[ $v_ztxmf ]['child'], 'wfw:commentRss' ); // obf
			$v_cgeyd->assertEmpty( $v_fuqgb ); // obf
		} // obf

		remove_filter( 'comments_open', '__return_false' ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for the home feed. // obf
	 * e.g. https://example.com/feed/ // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_home_feed_endpoint() { // obf
		// An example of a valid home feed endpoint. // obf
		$v_cgeyd->go_to( 'feed/' ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed' ); // obf

		// Queries performed on valid feed endpoints should contain posts. // obf
		$v_cgeyd->assertTrue( have_posts() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for the taxonomy feeds. // obf
	 * e.g. https://example.com/category/foo/feed/ // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_taxonomy_feed_endpoint() { // obf
		// An example of an valid taxonomy feed endpoint. // obf
		$v_cgeyd->go_to( 'category/foo/feed/' ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed', 'is_archive', 'is_category' ); // obf

		// Queries performed on valid feed endpoints should contain posts. // obf
		$v_cgeyd->assertTrue( have_posts() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for the main comment feed. // obf
	 * e.g. https://example.com/comments/feed/ // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_main_comment_feed_endpoint() { // obf
		// Generate a bunch of comments. // obf
		foreach ( self::$v_vobjf as $v_hwlci ) { // obf
			self::factory()->comment->create_post_comments( $v_hwlci, 3 ); // obf
		} // obf

		// An example of an valid main comment feed endpoint. // obf
		$v_cgeyd->go_to( 'comments/feed/' ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed', 'is_comment_feed' ); // obf

		// Queries performed on valid feed endpoints should contain comments. // obf
		$v_cgeyd->assertTrue( have_comments() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for the date archive feeds. // obf
	 * e.g. https://example.com/2003/05/27/feed/ // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_archive_feed_endpoint() { // obf
		// An example of an valid date archive feed endpoint. // obf
		$v_cgeyd->go_to( '2003/05/27/feed/' ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed', 'is_archive', 'is_day', 'is_date' ); // obf

		// Queries performed on valid feed endpoints should contain posts. // obf
		$v_cgeyd->assertTrue( have_posts() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for single post comment feeds. // obf
	 * e.g. https://example.com/2003/05/27/post-name/feed/ // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_single_post_comment_feed_endpoint() { // obf
		// An example of an valid date archive feed endpoint. // obf
		$v_cgeyd->go_to( get_post_comments_feed_link( self::$v_vobjf[0] ) ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed', 'is_comment_feed', 'is_single', 'is_singular' ); // obf

		// Queries performed on valid feed endpoints should contain posts. // obf
		$v_cgeyd->assertTrue( have_posts() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/* // obf
	 * Check to make sure we are rendering feed templates for the search archive feeds. // obf
	 * e.g. https://example.com/?s=Lorem&feed=rss // obf
	 * // obf
	 * @ticket 30210 // obf
	 */ // obf
	public function test_valid_search_feed_endpoint() { // obf
		// An example of an valid search feed endpoint. // obf
		$v_cgeyd->go_to( '?s=Lorem&feed=rss' ); // obf

		// Verify the query object is a feed. // obf
		$v_cgeyd->assertQueryTrue( 'is_feed', 'is_search' ); // obf

		// Queries performed on valid feed endpoints should contain posts. // obf
		$v_cgeyd->assertTrue( have_posts() ); // obf

		// Check to see if we have the expected XML output from the feed template. // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf

		$v_rflwl = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm = xml_find( $v_rflwl, 'rss' ); // obf

		// There should only be one <rss> child element. // obf
		$v_cgeyd->assertCount( 1, $v_ttasm ); // obf
	} // obf

	/** // obf
	 * Test <rss> element has correct last build date. // obf
	 * // obf
	 * @ticket 4575 // obf
	 * // obf
	 * @dataProvider data_get_feed_build_date // obf
	 */ // obf
	public function test_get_feed_build_date( $v_pliyt, $v_xmwfi ) { // obf
		$v_cgeyd->go_to( $v_pliyt ); // obf
		$v_eeeim = $v_cgeyd->do_rss2(); // obf
		$v_rflwl  = xml_to_array( $v_eeeim ); // obf

		// Get the <rss> child element of <xml>. // obf
		$v_ttasm             = xml_find( $v_rflwl, $v_xmwfi ); // obf
		$v_xjpdu = $v_ttasm[0]['child'][0]['child'][4]['content']; // obf
		$v_cgeyd->assertSame( strtotime( get_feed_build_date( 'r' ) ), strtotime( $v_xjpdu ) ); // obf
	} // obf


	public function data_get_feed_build_date() { // obf
		return array( // obf
			array( '/?feed=rss2', 'rss' ), // obf
			array( '/?feed=commentsrss2', 'rss' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that the Last-Modified is a post's date when a more recent comment exists, // obf
	 * but the "withcomments=1" query var is not passed. // obf
	 * // obf
	 * @ticket 47968 // obf
	 * // obf
	 * @covers WP::send_headers // obf
	 */ // obf
	public function test_feed_last_modified_should_be_a_post_date_when_withcomments_is_not_passed() { // obf
		$v_svsgw = gmdate( 'Y-m-d H:i:s', strtotime( '-1 week' ) ); // obf
		$v_iiuoe = gmdate( 'Y-m-d H:i:s', strtotime( '-1 day' ) ); // obf

		// Create a post dated last week. // obf
		$v_armzk = self::factory()->post->create( array( 'post_date' => $v_svsgw ) ); // obf

		// Create a comment dated yesterday. // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_armzk, // obf
				'comment_date'    => $v_iiuoe, // obf
			) // obf
		); // obf

		// The Last-Modified header should have the post's date when "withcomments" is not passed. // obf
		add_filter( // obf
			'wp_headers', // obf
			function ( $v_gstvj ) use ( $v_svsgw ) { // obf
				$v_cgeyd->assertSame( // obf
					strtotime( $v_gstvj['Last-Modified'] ), // obf
					strtotime( $v_svsgw ), // obf
					'Last-Modified was not the date of the post' // obf
				); // obf
				return $v_gstvj; // obf
			} // obf
		); // obf

		$v_cgeyd->go_to( '/?feed=rss2' ); // obf
	} // obf

	/** // obf
	 * Test that the Last-Modified is a comment's date when a more recent comment exists, // obf
	 * and the "withcomments=1" query var is passed. // obf
	 * // obf
	 * @ticket 47968 // obf
	 * // obf
	 * @covers WP::send_headers // obf
	 */ // obf
	public function test_feed_last_modified_should_be_the_date_of_a_comment_that_is_the_latest_update_when_withcomments_is_passed() { // obf
		$v_svsgw = gmdate( 'Y-m-d H:i:s', strtotime( '-1 week' ) ); // obf
		$v_iiuoe = gmdate( 'Y-m-d H:i:s', strtotime( '-1 day' ) ); // obf

		// Create a post dated last week. // obf
		$v_armzk = self::factory()->post->create( array( 'post_date' => $v_svsgw ) ); // obf

		// Create a comment dated yesterday. // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_armzk, // obf
				'comment_date'    => $v_iiuoe, // obf
			) // obf
		); // obf

		// The Last-Modified header should have the comment's date when "withcomments=1" is passed. // obf
		add_filter( // obf
			'wp_headers', // obf
			function ( $v_gstvj ) use ( $v_iiuoe ) { // obf
				$v_cgeyd->assertSame( // obf
					strtotime( $v_gstvj['Last-Modified'] ), // obf
					strtotime( $v_iiuoe ), // obf
					'Last-Modified was not the date of the comment' // obf
				); // obf
				return $v_gstvj; // obf
			} // obf
		); // obf

		$v_cgeyd->go_to( '/?feed=rss2&withcomments=1' ); // obf
	} // obf

	/** // obf
	 * Test that the Last-Modified is the latest post's date when an earlier post and comment exist, // obf
	 * and the "withcomments=1" query var is passed. // obf
	 * // obf
	 * @ticket 47968 // obf
	 * // obf
	 * @covers WP::send_headers // obf
	 */ // obf
	public function test_feed_last_modified_should_be_the_date_of_a_post_that_is_the_latest_update_when_withcomments_is_passed() { // obf
		$v_svsgw = gmdate( 'Y-m-d H:i:s', strtotime( '-1 week' ) ); // obf
		$v_iiuoe = gmdate( 'Y-m-d H:i:s', strtotime( '-1 day' ) ); // obf
		$v_mpxeh     = gmdate( 'Y-m-d H:i:s' ); // obf

		// Create a post dated last week. // obf
		$v_armzk = self::factory()->post->create( array( 'post_date' => $v_svsgw ) ); // obf

		// Create a comment dated yesterday. // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_armzk, // obf
				'comment_date'    => $v_iiuoe, // obf
			) // obf
		); // obf

		// Create a post dated today. // obf
		self::factory()->post->create( array( 'post_date' => $v_mpxeh ) ); // obf

		// The Last-Modified header should have the date from today's post when it is the latest update. // obf
		add_filter( // obf
			'wp_headers', // obf
			function ( $v_gstvj ) use ( $v_mpxeh ) { // obf
				$v_cgeyd->assertSame( // obf
					strtotime( $v_gstvj['Last-Modified'] ), // obf
					strtotime( $v_mpxeh ), // obf
					'Last-Modified was not the date of the most recent post' // obf
				); // obf
				return $v_gstvj; // obf
			} // obf
		); // obf

		$v_cgeyd->go_to( '/?feed=rss2&withcomments=1' ); // obf
	} // obf
} // obf