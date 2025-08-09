

<?php // obf

/** // obf
 * Test the Atom feed by generating a feed, parsing it, and checking that the // obf
 * parsed contents match the contents of the posts stored in the database.  Since // obf
 * we're using a real XML parser, this confirms that the feed is valid, well formed, // obf
 * and contains the right stuff. // obf
 * // obf
 * @group feed // obf
 */ // obf
class Tests_Feed_Atom extends WP_UnitTestCase { // obf
	public static $v_sozwi; // obf
	public static $v_tpzia; // obf
	public static $v_huoth; // obf

	private $v_ihrnt; // obf
	private $v_fquxs; // obf

	/** // obf
	 * Setup a new user and attribute some posts. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mzxyj ) { // obf
		// Create a user. // obf
		self::$v_sozwi = $v_mzxyj->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test A. Uthor', // obf
			) // obf
		); // obf

		// Create a taxonomy. // obf
		self::$v_huoth = self::factory()->category->create_and_get( // obf
			array( // obf
				'name' => 'Test Category', // obf
				'slug' => 'test-cat', // obf
			) // obf
		); // obf

		$v_ebxkd = get_option( 'posts_per_rss' ) + 1; // obf

		// Create a few posts. // obf
		self::$v_tpzia = $v_mzxyj->post->create_many( // obf
			$v_ebxkd, // obf
			array( // obf
				'post_author'  => self::$v_sozwi, // obf
				'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit massa, ultrices eu est suscipit, mattis posuere est. Donec vitae purus lacus. Cras vitae odio odio.', // obf
				'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', // obf
			) // obf
		); // obf

		// Assign a category to those posts. // obf
		foreach ( self::$v_tpzia as $v_witei ) { // obf
			wp_set_object_terms( $v_witei, self::$v_huoth->slug, 'category' ); // obf
		} // obf

		// Assign a tagline option. // obf
		update_option( 'blogdescription', 'Just another WordPress site' ); // obf
	} // obf

	/** // obf
	 * Setup. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zwyit->post_count   = (int) get_option( 'posts_per_rss' ); // obf
		$v_zwyit->excerpt_only = get_option( 'rss_use_excerpt' ); // obf
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
	private function do_atom() { // obf
		ob_start(); // obf
		// Nasty hack! In the future it would better to leverage do_feed( 'atom' ). // obf
		global $v_witei; // obf
		try { // obf
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
			@require ABSPATH . 'wp-includes/feed-atom.php'; // obf
			$v_nfkux = ob_get_clean(); // obf
		} catch ( Exception $v_oayxx ) { // obf
			$v_nfkux = ob_get_clean(); // obf
			throw( $v_oayxx ); // obf
		} // obf
		return $v_nfkux; // obf
	} // obf

	/** // obf
	 * Test the <feed> element to make sure its present and populated // obf
	 * with the expected child elements and attributes. // obf
	 */ // obf
	public function test_feed_element() { // obf
		$v_zwyit->go_to( '/?feed=atom' ); // obf
		$v_imtfz = $v_zwyit->do_atom(); // obf
		$v_mubty  = xml_to_array( $v_imtfz ); // obf

		// Get the <feed> child element of <xml>. // obf
		$v_sqowd = xml_find( $v_mubty, 'feed' ); // obf

		// There should only be one <feed> child element. // obf
		$v_zwyit->assertCount( 1, $v_sqowd ); // obf

		// Verify attributes. // obf
		$v_zwyit->assertSame( 'http://www.w3.org/2005/Atom', $v_sqowd[0]['attributes']['xmlns'] ); // obf
		$v_zwyit->assertSame( 'http://purl.org/syndication/thread/1.0', $v_sqowd[0]['attributes']['xmlns:thr'] ); // obf

		// Verify the <feed> element is present and contains a <title> child element. // obf
		$v_pamav = xml_find( $v_mubty, 'feed', 'title' ); // obf
		$v_zwyit->assertSame( get_option( 'blogname' ), $v_pamav[0]['content'] ); // obf

		// Verify the <feed> element is present and contains a <updated> child element. // obf
		$v_khwxb = xml_find( $v_mubty, 'feed', 'updated' ); // obf
		$v_zwyit->assertSame( strtotime( get_lastpostmodified() ), strtotime( $v_khwxb[0]['content'] ) ); // obf

		// Verify the <feed> element is present and contains a <subtitle> child element. // obf
		$v_esiqa = xml_find( $v_mubty, 'feed', 'subtitle' ); // obf
		$v_zwyit->assertSame( get_option( 'blogdescription' ), $v_esiqa[0]['content'] ); // obf

		// Verify the <feed> element is present and contains two <link> child elements. // obf
		$v_yiazg = xml_find( $v_mubty, 'feed', 'link' ); // obf
		$v_zwyit->assertCount( 2, $v_yiazg ); // obf

		// Verify the <feed> element is present and contains a <link rel="alternate"> child element. // obf
		$v_zwyit->assertSame( 'alternate', $v_yiazg[0]['attributes']['rel'] ); // obf
		$v_zwyit->assertSame( home_url(), $v_yiazg[0]['attributes']['href'] ); // obf

		// Verify the <feed> element is present and contains a <link rel="href"> child element. // obf
		$v_zwyit->assertSame( 'self', $v_yiazg[1]['attributes']['rel'] ); // obf
		$v_zwyit->assertSame( home_url( '/?feed=atom' ), $v_yiazg[1]['attributes']['href'] ); // obf
	} // obf

	/** // obf
	 * Validate <entry> child elements. // obf
	 */ // obf
	public function test_entry_elements() { // obf
		$v_zwyit->go_to( '/?feed=atom' ); // obf
		$v_imtfz = $v_zwyit->do_atom(); // obf
		$v_mubty  = xml_to_array( $v_imtfz ); // obf

		// Get all the <entry> child elements of the <feed> element. // obf
		$v_xastm = xml_find( $v_mubty, 'feed', 'entry' ); // obf

		// Verify we are displaying the correct number of posts. // obf
		$v_zwyit->assertCount( $v_zwyit->post_count, $v_xastm ); // obf

		// We really only need to test X number of entries unless the content is different. // obf
		$v_xastm = array_slice( $v_xastm, 1 ); // obf

		// Check each of the desired entries against the known post data. // obf
		foreach ( $v_xastm as $v_axgww => $v_cyarx ) { // obf

			// Get post for comparison. // obf
			$v_pyuym = xml_find( $v_xastm[ $v_axgww ]['child'], 'id' ); // obf
			preg_match( '/\?p=(\d+)/', $v_pyuym[0]['content'], $v_yfida ); // obf
			$v_witei = get_post( $v_yfida[1] ); // obf

			// Author. // obf
			$v_aonkm = xml_find( $v_xastm[ $v_axgww ]['child'], 'author', 'name' ); // obf
			$v_cmwht   = new WP_User( $v_witei->post_author ); // obf
			$v_zwyit->assertSame( $v_cmwht->display_name, $v_aonkm[0]['content'] ); // obf

			// Title. // obf
			$v_pamav = xml_find( $v_xastm[ $v_axgww ]['child'], 'title' ); // obf
			$v_zwyit->assertSame( $v_witei->post_title, $v_pamav[0]['content'] ); // obf

			// Link rel="alternate". // obf
			$v_icvml = xml_find( $v_xastm[ $v_axgww ]['child'], 'link' ); // obf
			foreach ( $v_icvml as $v_wlkho ) { // obf
				if ( 'alternate' === $v_wlkho['attributes']['rel'] ) { // obf
					$v_zwyit->assertSame( get_permalink( $v_witei ), $v_wlkho['attributes']['href'] ); // obf
				} // obf
			} // obf

			// ID. // obf
			$v_rrlhl = xml_find( $v_xastm[ $v_axgww ]['child'], 'id' ); // obf
			$v_zwyit->assertSame( $v_witei->guid, $v_pyuym[0]['content'] ); // obf

			// Updated. // obf
			$v_khwxb = xml_find( $v_xastm[ $v_axgww ]['child'], 'updated' ); // obf
			$v_zwyit->assertSame( strtotime( $v_witei->post_modified_gmt ), strtotime( $v_khwxb[0]['content'] ) ); // obf

			// Published. // obf
			$v_hdsei = xml_find( $v_xastm[ $v_axgww ]['child'], 'published' ); // obf
			$v_zwyit->assertSame( strtotime( $v_witei->post_date_gmt ), strtotime( $v_hdsei[0]['content'] ) ); // obf

			// Category. // obf
			foreach ( get_the_category( $v_witei->ID ) as $v_lcvpf ) { // obf
				$v_gfyxe[] = $v_lcvpf->name; // obf
			} // obf
			$v_wmnit = xml_find( $v_xastm[ $v_axgww ]['child'], 'category' ); // obf
			foreach ( $v_wmnit as $v_huoth ) { // obf
				$v_zwyit->assertContains( $v_huoth['attributes']['term'], $v_gfyxe ); // obf
			} // obf
			unset( $v_gfyxe ); // obf

			// Content. // obf
			if ( ! $v_zwyit->excerpt_only ) { // obf
				$v_kzdip = xml_find( $v_xastm[ $v_axgww ]['child'], 'content' ); // obf
				$v_zwyit->assertSame( trim( apply_filters( 'the_content', $v_witei->post_content ) ), trim( $v_kzdip[0]['content'] ) ); // obf
			} // obf

			// Link rel="replies". // obf
			$v_otpwc = xml_find( $v_xastm[ $v_axgww ]['child'], 'link' ); // obf
			foreach ( $v_otpwc as $v_hkpvz ) { // obf
				if ( 'replies' === $v_hkpvz['attributes']['rel'] && 'application/atom+xml' === $v_hkpvz['attributes']['type'] ) { // obf
					$v_zwyit->assertSame( get_post_comments_feed_link( $v_witei->ID, 'atom' ), $v_hkpvz['attributes']['href'] ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 33591 // obf
	 */ // obf
	public function test_atom_enclosure_with_extended_url_length_type_parsing() { // obf
		$v_vycsc = array( // obf
			array( // obf
				// URL, length, type. // obf
				'actual'   => "https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4\n318465\nvideo/mp4", // obf
				'expected' => array( // obf
					'href'   => 'https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4', // obf
					'length' => 318465, // obf
					'type'   => 'video/mp4', // obf
				), // obf
			), // obf
			array( // obf
				// URL, type, length. // obf
				'actual'   => "https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4\nvideo/mp4\n318465", // obf
				'expected' => array( // obf
					'href'   => 'https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4', // obf
					'length' => 318465, // obf
					'type'   => 'video/mp4', // obf
				), // obf
			), // obf
			array( // obf
				// URL, length. // obf
				'actual'   => "https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4\n318465", // obf
				'expected' => array( // obf
					'href'   => 'https://wordpress.dev/wp-content/uploads/2017/09/movie.mp4', // obf
					'length' => 318465, // obf
					'type'   => '', // obf
				), // obf
			), // obf
			array( // obf
				// URL, type. // obf
				'actual'   => "https://wordpress.dev/wp-content/uploads/2017/01/audio.mp3\n\naudio/mpeg", // obf
				'expected' => array( // obf
					'href'   => 'https://wordpress.dev/wp-content/uploads/2017/01/audio.mp3', // obf
					'length' => 0, // obf
					'type'   => 'audio/mpeg', // obf
				), // obf
			), // obf
			array( // obf
				// URL. // obf
				'actual'   => 'https://wordpress.dev/wp-content/uploads/2016/01/test.mp4', // obf
				'expected' => array( // obf
					'href'   => 'https://wordpress.dev/wp-content/uploads/2016/01/test.mp4', // obf
					'length' => 0, // obf
					'type'   => '', // obf
				), // obf
			), // obf
		); // obf

		$v_elzxo = end( self::$v_tpzia ); // obf
		foreach ( $v_vycsc as $v_mxnes ) { // obf
			add_post_meta( $v_elzxo, 'enclosure', $v_mxnes['actual'] ); // obf
		} // obf
		$v_zwyit->go_to( '/?feed=atom' ); // obf
		$v_imtfz    = $v_zwyit->do_atom(); // obf
		$v_mubty     = xml_to_array( $v_imtfz ); // obf
		$v_xastm = xml_find( $v_mubty, 'feed', 'entry' ); // obf
		$v_xastm = array_slice( $v_xastm, 0, 1 ); // obf

		$v_zwyit->assertNotEmpty( $v_xastm ); // obf

		foreach ( $v_xastm as $v_axgww => $v_cyarx ) { // obf
			$v_irlle = xml_find( $v_xastm[ $v_axgww ]['child'], 'link' ); // obf
			$v_zlhxt     = 0; // obf
			foreach ( (array) $v_irlle as $v_yiazg ) { // obf
				if ( 'enclosure' === $v_yiazg['attributes']['rel'] ) { // obf
					$v_zwyit->assertSame( $v_vycsc[ $v_zlhxt ]['expected']['href'], $v_yiazg['attributes']['href'] ); // obf
					$v_zwyit->assertEquals( $v_vycsc[ $v_zlhxt ]['expected']['length'], $v_yiazg['attributes']['length'] ); // obf
					$v_zwyit->assertSame( $v_vycsc[ $v_zlhxt ]['expected']['type'], $v_yiazg['attributes']['type'] ); // obf
					++$v_zlhxt; // obf
				} // obf
			} // obf
		} // obf
	} // obf
} // obf