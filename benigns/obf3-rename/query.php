

<?php // obf

/** // obf
 * @group query // obf
 * @group post // obf
 */ // obf
class Tests_Post_Query extends WP_UnitTestCase { // obf

	/** // obf
	 * Temporary storage for a post ID for tests using filter callbacks. // obf
	 * // obf
	 * Used in the `test_posts_pre_query_filter_should_respect_set_found_posts()` method. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_xmqil; // obf

	/** // obf
	 * Clean up after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		unset( $v_buigg->post_id ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @group taxonomy // obf
	 */ // obf
	public function test_category__and_var() { // obf
		$v_njbne = new WP_Query(); // obf

		$v_fokeq  = self::factory()->category->create( // obf
			array( // obf
				'slug' => 'woo', // obf
				'name' => 'WOO!', // obf
			) // obf
		); // obf
		$v_rbwsp = self::factory()->category->create( // obf
			array( // obf
				'slug' => 'hoo', // obf
				'name' => 'HOO!', // obf
			) // obf
		); // obf
		$v_xmqil  = self::factory()->post->create(); // obf

		wp_set_post_categories( $v_xmqil, $v_fokeq ); // obf

		$v_zvglt = $v_njbne->query( array( 'category__and' => array( $v_fokeq ) ) ); // obf

		$v_buigg->assertEmpty( $v_njbne->get( 'category__and' ) ); // obf
		$v_buigg->assertCount( 0, $v_njbne->get( 'category__and' ) ); // obf
		$v_buigg->assertNotEmpty( $v_njbne->get( 'category__in' ) ); // obf
		$v_buigg->assertCount( 1, $v_njbne->get( 'category__in' ) ); // obf

		$v_buigg->assertNotEmpty( $v_zvglt ); // obf
		$v_buigg->assertSame( array( $v_xmqil ), wp_list_pluck( $v_zvglt, 'ID' ) ); // obf

		$v_yuhic = $v_njbne->query( array( 'category__and' => array( $v_fokeq, $v_rbwsp ) ) ); // obf
		$v_buigg->assertNotEmpty( $v_njbne->get( 'category__and' ) ); // obf
		$v_buigg->assertCount( 2, $v_njbne->get( 'category__and' ) ); // obf
		$v_buigg->assertEmpty( $v_njbne->get( 'category__in' ) ); // obf
		$v_buigg->assertCount( 0, $v_njbne->get( 'category__in' ) ); // obf

		$v_buigg->assertEmpty( $v_yuhic ); // obf
	} // obf

	/** // obf
	 * @ticket 28099 // obf
	 * @group taxonomy // obf
	 */ // obf
	public function test_empty_category__in() { // obf
		$v_bojui  = self::factory()->category->create(); // obf
		$v_xmqil = self::factory()->post->create(); // obf
		wp_set_post_categories( $v_xmqil, $v_bojui ); // obf

		$v_heeaa = get_posts( array( 'category__in' => array( $v_bojui ) ) ); // obf
		$v_buigg->assertNotEmpty( $v_heeaa ); // obf
		$v_unnym = get_posts( array( 'category__in' => array() ) ); // obf
		$v_buigg->assertNotEmpty( $v_unnym ); // obf

		$v_stvoe    = wp_insert_term( 'woo', 'post_tag' ); // obf
		$v_gjlji = $v_stvoe['term_id']; // obf
		$v_vcawu   = get_tag( $v_gjlji )->slug; // obf
		wp_set_post_tags( $v_xmqil, $v_vcawu ); // obf

		$v_luvje = get_posts( array( 'tag__in' => array( $v_gjlji ) ) ); // obf
		$v_buigg->assertNotEmpty( $v_luvje ); // obf
		$v_qganj = get_posts( array( 'tag__in' => array() ) ); // obf
		$v_buigg->assertNotEmpty( $v_qganj ); // obf

		$v_ydtgx = get_posts( array( 'tag_slug__in' => array( $v_vcawu ) ) ); // obf
		$v_buigg->assertNotEmpty( $v_ydtgx ); // obf
		$v_timlc = get_posts( array( 'tag_slug__in' => array() ) ); // obf
		$v_buigg->assertNotEmpty( $v_timlc ); // obf
	} // obf

	/** // obf
	 * @ticket 22448 // obf
	 */ // obf
	public function test_the_posts_filter() { // obf
		// Create posts and clear their caches. // obf
		$v_bjqby = self::factory()->post->create_many( 4 ); // obf
		foreach ( $v_bjqby as $v_xmqil ) { // obf
			clean_post_cache( $v_xmqil ); // obf
		} // obf

		add_filter( 'the_posts', array( $v_buigg, 'the_posts_filter' ) ); // obf

		$v_jbuwu = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => 3, // obf
			) // obf
		); // obf

		// Fourth post added in filter. // obf
		$v_buigg->assertCount( 4, $v_jbuwu->posts ); // obf
		$v_buigg->assertSame( 4, $v_jbuwu->post_count ); // obf

		foreach ( $v_jbuwu->posts as $v_jiyvl ) { // obf

			// Posts are WP_Post objects. // obf
			$v_buigg->assertInstanceOf( 'WP_Post', $v_jiyvl ); // obf

			// Filters are raw. // obf
			$v_buigg->assertSame( 'raw', $v_jiyvl->filter ); // obf

			// Custom data added in the_posts filter is preserved. // obf
			$v_buigg->assertSame( array( $v_jiyvl->ID, 'custom data' ), $v_jiyvl->custom_data ); // obf
		} // obf

		remove_filter( 'the_posts', array( $v_buigg, 'the_posts_filter' ) ); // obf
	} // obf

	/** // obf
	 * Use with the_posts filter, appends a post and adds some custom data. // obf
	 */ // obf
	public function the_posts_filter( $v_zvglt ) { // obf
		$v_zvglt[] = clone $v_zvglt[0]; // obf

		// Add some custom data to each post. // obf
		foreach ( $v_zvglt as $v_lsbhy => $v_jiyvl ) { // obf
			$v_zvglt[ $v_lsbhy ]->custom_data = array( $v_jiyvl->ID, 'custom data' ); // obf
		} // obf

		return $v_zvglt; // obf
	} // obf

	public function test_post__in_ordering() { // obf
		$v_dzdeb = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'menu_order' => 1, // obf
			) // obf
		); // obf
		$v_fpozv = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'menu_order' => 2, // obf
			) // obf
		); // obf
		$v_onlox = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_fpozv, // obf
				'menu_order'  => 3, // obf
			) // obf
		); // obf
		$v_eqjyu = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_fpozv, // obf
				'menu_order'  => 4, // obf
			) // obf
		); // obf
		$v_toovc = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'menu_order' => 5, // obf
			) // obf
		); // obf

		$v_jfjtz = array( $v_fpozv, $v_eqjyu, $v_onlox, $v_dzdeb, $v_toovc ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type' => 'any', // obf
				'post__in'  => $v_jfjtz, // obf
				'orderby'   => 'post__in', // obf
			) // obf
		); // obf
		$v_buigg->assertSame( $v_jfjtz, wp_list_pluck( $v_njbne->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38034 // obf
	 */ // obf
	public function test_orderby_post__in_array() { // obf
		$v_zvglt = self::factory()->post->create_many( 4 ); // obf

		$v_jfjtz = array( $v_zvglt[2], $v_zvglt[0], $v_zvglt[3] ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type' => 'any', // obf
				'post__in'  => $v_jfjtz, // obf
				'orderby'   => array( 'post__in' => 'ASC' ), // obf
			) // obf
		); // obf
		$v_buigg->assertSame( $v_jfjtz, wp_list_pluck( $v_njbne->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38034 // obf
	 */ // obf
	public function test_orderby_post__in_array_with_implied_order() { // obf
		$v_zvglt = self::factory()->post->create_many( 4 ); // obf

		$v_jfjtz = array( $v_zvglt[2], $v_zvglt[0], $v_zvglt[3] ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type' => 'any', // obf
				'post__in'  => $v_jfjtz, // obf
				'orderby'   => 'post__in', // obf
			) // obf
		); // obf
		$v_buigg->assertSame( $v_jfjtz, wp_list_pluck( $v_njbne->posts, 'ID' ) ); // obf
	} // obf

	public function test_post__in_attachment_ordering() { // obf
		$v_xmqil    = self::factory()->post->create(); // obf
		$v_zugyl    = array(); // obf
		$v_mqliq       = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_zugyl[1] = self::factory()->attachment->create_object( // obf
			$v_mqliq, // obf
			$v_xmqil, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 1, // obf
			) // obf
		); // obf
		$v_zugyl[2] = self::factory()->attachment->create_object( // obf
			$v_mqliq, // obf
			$v_xmqil, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 2, // obf
			) // obf
		); // obf
		$v_zugyl[3] = self::factory()->attachment->create_object( // obf
			$v_mqliq, // obf
			$v_xmqil, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 3, // obf
			) // obf
		); // obf
		$v_zugyl[4] = self::factory()->attachment->create_object( // obf
			$v_mqliq, // obf
			$v_xmqil, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 4, // obf
			) // obf
		); // obf
		$v_zugyl[5] = self::factory()->attachment->create_object( // obf
			$v_mqliq, // obf
			$v_xmqil, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 5, // obf
			) // obf
		); // obf

		$v_jfjtz = array( $v_zugyl[5], $v_zugyl[1], $v_zugyl[4], $v_zugyl[3], $v_zugyl[2] ); // obf

		$v_hmtie = new WP_Query( // obf
			array( // obf
				'post__in'       => $v_jfjtz, // obf
				'post_type'      => 'attachment', // obf
				'post_parent'    => $v_xmqil, // obf
				'post_mime_type' => 'image', // obf
				'post_status'    => 'inherit', // obf
				'posts_per_page' => '-1', // obf
				'orderby'        => 'post__in', // obf
			) // obf
		); // obf
		$v_buigg->assertSame( $v_jfjtz, wp_list_pluck( $v_hmtie->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36515 // obf
	 */ // obf
	public function test_post_name__in_ordering() { // obf
		$v_dzdeb = self::factory()->post->create( // obf
			array( // obf
				'post_name' => 'id-1', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_fpozv = self::factory()->post->create( // obf
			array( // obf
				'post_name' => 'id-2', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_onlox = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'id-3', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_fpozv, // obf
			) // obf
		); // obf

		$v_jfjtz = array( 'id-2', 'id-3', 'id-1' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'     => 'any', // obf
				'post_name__in' => $v_jfjtz, // obf
				'orderby'       => 'post_name__in', // obf
			) // obf
		); // obf

		$v_buigg->assertSame( $v_jfjtz, wp_list_pluck( $v_njbne->posts, 'post_name' ) ); // obf
	} // obf

	public function test_post_status() { // obf
		$v_gycnw = get_post_stati(); // obf
		$v_buigg->assertContains( 'auto-draft', $v_gycnw ); // obf

		$v_kocov = get_post_stati( array( 'exclude_from_search' => true ) ); // obf
		$v_buigg->assertContains( 'auto-draft', $v_kocov ); // obf

		$v_qnmxq = get_post_stati( array( 'exclude_from_search' => false ) ); // obf
		$v_buigg->assertNotContains( 'auto-draft', $v_qnmxq ); // obf

		$v_heeaa = new WP_Query( array( 'post_status' => 'any' ) ); // obf
		$v_buigg->assertStringContainsString( "post_status <> 'auto-draft'", $v_heeaa->request ); // obf

		$v_unnym = new WP_Query( array( 'post_status' => 'any, auto-draft' ) ); // obf
		$v_buigg->assertStringNotContainsString( "post_status <> 'auto-draft'", $v_unnym->request ); // obf

		$v_luvje = new WP_Query( array( 'post_status' => array( 'any', 'auto-draft' ) ) ); // obf
		$v_buigg->assertStringNotContainsString( "post_status <> 'auto-draft'", $v_luvje->request ); // obf
	} // obf

	/** // obf
	 * @ticket 17065 // obf
	 */ // obf
	public function test_orderby_array() { // obf
		global $v_eubik; // obf

		$v_heeaa = new WP_Query( // obf
			array( // obf
				'orderby' => array( // obf
					'type' => 'DESC', // obf
					'name' => 'ASC', // obf
				), // obf
			) // obf
		); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_type DESC, $v_eubik->posts.post_name ASC", // obf
			$v_heeaa->request // obf
		); // obf

		$v_unnym = new WP_Query( array( 'orderby' => array() ) ); // obf
		$v_buigg->assertStringNotContainsString( 'ORDER BY', $v_unnym->request ); // obf
		$v_buigg->assertStringNotContainsString( 'ORDER', $v_unnym->request ); // obf

		$v_luvje = new WP_Query( array( 'post_type' => 'post' ) ); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_date DESC", // obf
			$v_luvje->request // obf
		); // obf

		$v_qganj = new WP_Query( array( 'post_type' => 'post' ) ); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_date DESC", // obf
			$v_qganj->request // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 17065 // obf
	 */ // obf
	public function test_order() { // obf
		global $v_eubik; // obf

		$v_heeaa = new WP_Query( // obf
			array( // obf
				'orderby' => array( // obf
					'post_type' => 'foo', // obf
				), // obf
			) // obf
		); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_type DESC", // obf
			$v_heeaa->request // obf
		); // obf

		$v_unnym = new WP_Query( // obf
			array( // obf
				'orderby' => 'title', // obf
				'order'   => 'foo', // obf
			) // obf
		); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_title DESC", // obf
			$v_unnym->request // obf
		); // obf

		$v_luvje = new WP_Query( // obf
			array( // obf
				'order' => 'asc', // obf
			) // obf
		); // obf
		$v_buigg->assertStringContainsString( // obf
			"ORDER BY $v_eubik->posts.post_date ASC", // obf
			$v_luvje->request // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 29629 // obf
	 */ // obf
	public function test_orderby() { // obf
		// 'rand' is a valid value. // obf
		$v_njbne = new WP_Query( array( 'orderby' => 'rand' ) ); // obf
		$v_buigg->assertStringContainsString( 'ORDER BY RAND()', $v_njbne->request ); // obf
		$v_buigg->assertStringNotContainsString( 'ASC', $v_njbne->request ); // obf
		$v_buigg->assertStringNotContainsString( 'DESC', $v_njbne->request ); // obf

		// This isn't allowed. // obf
		$v_unnym = new WP_Query( array( 'order' => 'rand' ) ); // obf
		$v_buigg->assertStringContainsString( 'ORDER BY', $v_unnym->request ); // obf
		$v_buigg->assertStringNotContainsString( 'RAND()', $v_unnym->request ); // obf
		$v_buigg->assertStringContainsString( 'DESC', $v_unnym->request ); // obf

		// 'none' is a valid value. // obf
		$v_luvje = new WP_Query( array( 'orderby' => 'none' ) ); // obf
		$v_buigg->assertStringNotContainsString( 'ORDER BY', $v_luvje->request ); // obf
		$v_buigg->assertStringNotContainsString( 'DESC', $v_luvje->request ); // obf
		$v_buigg->assertStringNotContainsString( 'ASC', $v_luvje->request ); // obf

		// False is a valid value. // obf
		$v_qganj = new WP_Query( array( 'orderby' => false ) ); // obf
		$v_buigg->assertStringNotContainsString( 'ORDER BY', $v_qganj->request ); // obf
		$v_buigg->assertStringNotContainsString( 'DESC', $v_qganj->request ); // obf
		$v_buigg->assertStringNotContainsString( 'ASC', $v_qganj->request ); // obf

		// Empty array() is a valid value. // obf
		$v_ydtgx = new WP_Query( array( 'orderby' => array() ) ); // obf
		$v_buigg->assertStringNotContainsString( 'ORDER BY', $v_ydtgx->request ); // obf
		$v_buigg->assertStringNotContainsString( 'DESC', $v_ydtgx->request ); // obf
		$v_buigg->assertStringNotContainsString( 'ASC', $v_ydtgx->request ); // obf
	} // obf

	/** // obf
	 * @ticket 35692 // obf
	 */ // obf
	public function test_orderby_rand_with_seed() { // obf
		$v_njbne = new WP_Query( // obf
			array( // obf
				'orderby' => 'RAND(5)', // obf
			) // obf
		); // obf

		$v_buigg->assertStringContainsString( 'ORDER BY RAND(5)', $v_njbne->request ); // obf
	} // obf

	/** // obf
	 * @ticket 35692 // obf
	 */ // obf
	public function test_orderby_rand_should_ignore_invalid_seed() { // obf
		$v_njbne = new WP_Query( // obf
			array( // obf
				'orderby' => 'RAND(foo)', // obf
			) // obf
		); // obf

		$v_buigg->assertStringNotContainsString( 'ORDER BY RAND', $v_njbne->request ); // obf
	} // obf

	/** // obf
	 * @ticket 35692 // obf
	 */ // obf
	public function test_orderby_rand_with_seed_should_be_case_insensitive() { // obf
		$v_njbne = new WP_Query( // obf
			array( // obf
				'orderby' => 'rand(5)', // obf
			) // obf
		); // obf

		$v_buigg->assertStringContainsString( 'ORDER BY RAND(5)', $v_njbne->request ); // obf
	} // obf

	/** // obf
	 * Tests the post_name__in attribute of WP_Query. // obf
	 * // obf
	 * @ticket 33065 // obf
	 */ // obf
	public function test_post_name__in() { // obf
		$v_njbne = new WP_Query(); // obf

		$v_bjqby[0] = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'woo', // obf
				'post_date'  => '2015-07-23 00:00:00', // obf
			) // obf
		); // obf
		$v_bjqby[1] = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'hoo', // obf
				'post_date'  => '2015-07-23 00:00:00', // obf
			) // obf
		); // obf
		$v_bjqby[2] = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'test', // obf
				'post_date'  => '2015-07-23 00:00:00', // obf
			) // obf
		); // obf
		$v_bjqby[3] = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'me', // obf
				'post_date'  => '2015-07-23 00:00:00', // obf
			) // obf
		); // obf

		$v_vccgb = array( $v_bjqby[0], $v_bjqby[3] ); // obf
		$v_njbne->query( // obf
			array( // obf
				'post_name__in' => array( 'woo', 'me' ), // obf
				'fields'        => 'ids', // obf
			) // obf
		); // obf
		$v_nzyng = $v_njbne->get_posts(); // obf
		$v_buigg->assertSameSets( $v_vccgb, $v_nzyng ); // obf

		$v_vccgb = array( $v_bjqby[1], $v_bjqby[2] ); // obf
		$v_njbne->query( // obf
			array( // obf
				'post_name__in' => array( 'hoo', 'test' ), // obf
				'fields'        => 'ids', // obf
			) // obf
		); // obf
		$v_nzyng = $v_njbne->get_posts(); // obf
		$v_buigg->assertSameSets( $v_vccgb, $v_nzyng ); // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_posts_pre_query_filter_should_bypass_database_query() { // obf
		add_filter( 'posts_pre_query', array( __CLASS__, 'filter_posts_pre_query' ) ); // obf

		$v_azrrd = get_num_queries(); // obf
		$v_njbne           = new WP_Query( // obf
			array( // obf
				'fields'        => 'ids', // obf
				'no_found_rows' => true, // obf
			) // obf
		); // obf

		remove_filter( 'posts_pre_query', array( __CLASS__, 'filter_posts_pre_query' ) ); // obf

		$v_buigg->assertSame( $v_azrrd, get_num_queries() ); // obf
		$v_buigg->assertSame( array( 12345 ), $v_njbne->posts ); // obf
	} // obf

	public static function filter_posts_pre_query( $v_zvglt ) { // obf
		return array( 12345 ); // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_posts_pre_query_filter_should_respect_set_found_posts() { // obf
		global $v_eubik; // obf

		$v_buigg->post_id = self::factory()->post->create(); // obf

		// Prevent the DB query. // obf
		add_filter( 'posts_request', '__return_empty_string' ); // obf
		add_filter( 'found_posts_query', '__return_empty_string' ); // obf

		// Add the post and found_posts. // obf
		add_filter( 'the_posts', array( $v_buigg, 'filter_the_posts' ) ); // obf
		add_filter( 'found_posts', array( $v_buigg, 'filter_found_posts' ) ); // obf

		$v_njbne = new WP_Query( array( 'suppress_filters' => false ) ); // obf

		remove_filter( 'posts_request', '__return_empty_string' ); // obf
		remove_filter( 'found_posts_query', '__return_empty_string' ); // obf
		remove_filter( 'the_posts', array( $v_buigg, 'filter_the_posts' ) ); // obf
		remove_filter( 'found_posts', array( $v_buigg, 'filter_found_posts' ) ); // obf

		$v_buigg->assertSame( array( $v_buigg->post_id ), wp_list_pluck( $v_njbne->posts, 'ID' ) ); // obf
		$v_buigg->assertSame( 1, $v_njbne->found_posts ); // obf
	} // obf

	public function filter_the_posts() { // obf
		return array( get_post( $v_buigg->post_id ) ); // obf
	} // obf

	public function filter_found_posts( $v_zvglt ) { // obf
		return 1; // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_set_found_posts_fields_ids() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_zvglt = self::factory()->post->create_many( 2, array( 'post_type' => 'wptests_pt' ) ); // obf

		foreach ( $v_zvglt as $v_jopqy ) { // obf
			clean_post_cache( $v_jopqy ); // obf
		} // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wptests_pt', // obf
				'posts_per_page' => 1, // obf
				'fields'         => 'ids', // obf
			) // obf
		); // obf

		$v_buigg->assertSame( 2, $v_njbne->found_posts ); // obf
		$v_buigg->assertSame( 2, $v_njbne->max_num_pages ); // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_set_found_posts_fields_idparent() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_zvglt = self::factory()->post->create_many( 2, array( 'post_type' => 'wptests_pt' ) ); // obf
		foreach ( $v_zvglt as $v_jopqy ) { // obf
			clean_post_cache( $v_jopqy ); // obf
		} // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wptests_pt', // obf
				'posts_per_page' => 1, // obf
				'fields'         => 'id=>parent', // obf
			) // obf
		); // obf

		$v_buigg->assertSame( 2, $v_njbne->found_posts ); // obf
		$v_buigg->assertSame( 2, $v_njbne->max_num_pages ); // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_set_found_posts_fields_split_the_query() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_zvglt = self::factory()->post->create_many( 2, array( 'post_type' => 'wptests_pt' ) ); // obf
		foreach ( $v_zvglt as $v_jopqy ) { // obf
			clean_post_cache( $v_jopqy ); // obf
		} // obf

		add_filter( 'split_the_query', '__return_true' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wptests_pt', // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		remove_filter( 'split_the_query', '__return_true' ); // obf

		$v_buigg->assertSame( 2, $v_njbne->found_posts ); // obf
		$v_buigg->assertSame( 2, $v_njbne->max_num_pages ); // obf
	} // obf

	/** // obf
	 * @ticket 36687 // obf
	 */ // obf
	public function test_set_found_posts_fields_not_split_the_query() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_zvglt = self::factory()->post->create_many( 2, array( 'post_type' => 'wptests_pt' ) ); // obf
		foreach ( $v_zvglt as $v_jopqy ) { // obf
			clean_post_cache( $v_jopqy ); // obf
		} // obf

		// ! $v_icbvh // obf
		add_filter( 'split_the_query', '__return_false' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wptests_pt', // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		remove_filter( 'split_the_query', '__return_false' ); // obf

		$v_buigg->assertSame( 2, $v_njbne->found_posts ); // obf
		$v_buigg->assertSame( 2, $v_njbne->max_num_pages ); // obf
	} // obf

	/** // obf
	 * @ticket 42860 // obf
	 * // obf
	 * @dataProvider data_set_found_posts_not_posts_as_an_array // obf
	 */ // obf
	public function test_set_found_posts_not_posts_as_an_array( $v_zvglt, $v_fpazv ) { // obf
		$v_njbne = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wptests_pt', // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_njbne->posts = $v_zvglt; // obf

		$v_wilsg = new ReflectionMethod( 'WP_Query', 'set_found_posts' ); // obf
		$v_wilsg->setAccessible( true ); // obf
		$v_wilsg->invoke( $v_njbne, array( 'no_found_rows' => false ), array() ); // obf

		$v_buigg->assertSame( $v_fpazv, $v_njbne->found_posts ); // obf
	} // obf

	public function data_set_found_posts_not_posts_as_an_array() { // obf
		// Count return 0 for null, but 1 for other data you may not expect. // obf
		return array( // obf
			array( null, 0 ), // obf
			array( '', 1 ), // obf
			array( "To life, to life, l'chaim", 1 ), // obf
			array( false, 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42469 // obf
	 */ // obf
	public function test_found_posts_should_be_integer_not_string() { // obf
		$v_xmqil = self::factory()->post->create(); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_buigg->assertIsInt( $v_njbne->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 42469 // obf
	 */ // obf
	public function test_found_posts_should_be_integer_even_if_found_posts_filter_returns_string_value() { // obf
		$v_xmqil = self::factory()->post->create(); // obf

		add_filter( 'found_posts', '__return_empty_string' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		remove_filter( 'found_posts', '__return_empty_string' ); // obf

		$v_buigg->assertIsInt( $v_njbne->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 57296 // obf
	 * @covers WP_Query::get_posts // obf
	 */ // obf
	public function test_split_the_query_object_cache() { // obf
		$v_yqbkm = new MockAction(); // obf
		add_filter( 'split_the_query', array( $v_yqbkm, 'filter' ) ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 501, // obf
			) // obf
		); // obf

		$v_buigg->assertSame( (bool) wp_using_ext_object_cache(), $v_yqbkm->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 56841 // obf
	 */ // obf
	public function test_query_does_not_have_leading_whitespace() { // obf
		add_filter( 'split_the_query', '__return_false' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 501, // obf
			) // obf
		); // obf

		remove_filter( 'split_the_query', '__return_false' ); // obf

		$v_buigg->assertSame( ltrim( $v_njbne->request ), $v_njbne->request, 'The query has leading whitespace' ); // obf
	} // obf

	/** // obf
	 * @ticket 56841 // obf
	 */ // obf
	public function test_query_does_not_have_leading_whitespace_split_the_query() { // obf
		add_filter( 'split_the_query', '__return_true' ); // obf

		$v_njbne = new WP_Query( // obf
			array( // obf
				'posts_per_page' => 501, // obf
			) // obf
		); // obf

		remove_filter( 'split_the_query', '__return_true' ); // obf

		$v_buigg->assertSame( ltrim( $v_njbne->request ), $v_njbne->request, 'The query has leading whitespace' ); // obf
	} // obf
} // obf