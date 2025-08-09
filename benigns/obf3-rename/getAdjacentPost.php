

<?php // obf
/** // obf
 * @group link // obf
 * @covers ::get_adjacent_post // obf
 */ // obf
class Tests_Link_GetAdjacentPost extends WP_UnitTestCase { // obf
	protected $v_zzfvv; // obf

	/** // obf
	 * @ticket 17807 // obf
	 */ // obf
	public function test_get_adjacent_post() { // obf
		// Need some sample posts to test adjacency. // obf
		$v_uungz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'First', // obf
				'post_date'  => '2012-01-01 12:00:00', // obf
			) // obf
		); // obf

		$v_wezha = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Second', // obf
				'post_date'  => '2012-02-01 12:00:00', // obf
			) // obf
		); // obf

		$v_hdzak = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Third', // obf
				'post_date'  => '2012-03-01 12:00:00', // obf
			) // obf
		); // obf

		$v_wrgqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Fourth', // obf
				'post_date'  => '2012-04-01 12:00:00', // obf
			) // obf
		); // obf

		// Assign some terms. // obf
		wp_set_object_terms( $v_uungz->ID, 'WordPress', 'category', false ); // obf
		wp_set_object_terms( $v_hdzak->ID, 'WordPress', 'category', false ); // obf

		wp_set_object_terms( $v_wezha->ID, 'plugins', 'post_tag', false ); // obf
		wp_set_object_terms( $v_wrgqg->ID, 'plugins', 'post_tag', false ); // obf

		// Test normal post adjacency. // obf
		$v_idein->go_to( get_permalink( $v_wezha->ID ) ); // obf

		$v_idein->assertEquals( $v_uungz, get_adjacent_post( false, '', true ) ); // obf
		$v_idein->assertEquals( $v_hdzak, get_adjacent_post( false, '', false ) ); // obf

		$v_idein->assertNotEquals( $v_wezha, get_adjacent_post( false, '', true ) ); // obf
		$v_idein->assertNotEquals( $v_wezha, get_adjacent_post( false, '', false ) ); // obf

		// Test category adjacency. // obf
		$v_idein->go_to( get_permalink( $v_uungz->ID ) ); // obf

		$v_idein->assertSame( '', get_adjacent_post( true, '', true, 'category' ) ); // obf
		$v_idein->assertEquals( $v_hdzak, get_adjacent_post( true, '', false, 'category' ) ); // obf

		// Test tag adjacency. // obf
		$v_idein->go_to( get_permalink( $v_wezha->ID ) ); // obf

		$v_idein->assertSame( '', get_adjacent_post( true, '', true, 'post_tag' ) ); // obf
		$v_idein->assertEquals( $v_wrgqg, get_adjacent_post( true, '', false, 'post_tag' ) ); // obf

		// Test normal boundary post. // obf
		$v_idein->go_to( get_permalink( $v_wezha->ID ) ); // obf

		$v_idein->assertEquals( array( $v_uungz ), get_boundary_post( false, '', true ) ); // obf
		$v_idein->assertEquals( array( $v_wrgqg ), get_boundary_post( false, '', false ) ); // obf

		// Test category boundary post. // obf
		$v_idein->go_to( get_permalink( $v_uungz->ID ) ); // obf

		$v_idein->assertEquals( array( $v_uungz ), get_boundary_post( true, '', true, 'category' ) ); // obf
		$v_idein->assertEquals( array( $v_hdzak ), get_boundary_post( true, '', false, 'category' ) ); // obf

		// Test tag boundary post. // obf
		$v_idein->go_to( get_permalink( $v_wezha->ID ) ); // obf

		$v_idein->assertEquals( array( $v_wezha ), get_boundary_post( true, '', true, 'post_tag' ) ); // obf
		$v_idein->assertEquals( array( $v_wrgqg ), get_boundary_post( true, '', false, 'post_tag' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22112 // obf
	 */ // obf
	public function test_get_adjacent_post_exclude_self_term() { // obf
		// Bump term_taxonomy to mimic shared term offsets. // obf
		global $v_zuylm; // obf
		$v_zuylm->insert( // obf
			$v_zuylm->term_taxonomy, // obf
			array( // obf
				'taxonomy'    => 'foo', // obf
				'term_id'     => 12345, // obf
				'description' => '', // obf
			) // obf
		); // obf

		$v_lewxn = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'Include', // obf
			) // obf
		); // obf
		$v_yyjzz = self::factory()->category->create(); // obf

		$v_mwqwp = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date'     => '2012-01-01 12:00:00', // obf
				'post_category' => array( $v_lewxn, $v_yyjzz ), // obf
			) // obf
		); // obf

		$v_jmkyv = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date'     => '2012-01-02 12:00:00', // obf
				'post_category' => array(), // obf
			) // obf
		); // obf

		$v_akqvy = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date'     => '2012-01-03 12:00:00', // obf
				'post_category' => array( $v_lewxn, $v_yyjzz ), // obf
			) // obf
		); // obf

		$v_lbsxi = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date'     => '2012-01-04 12:00:00', // obf
				'post_category' => array( $v_lewxn ), // obf
			) // obf
		); // obf

		$v_ltqan = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date'     => '2012-01-05 12:00:00', // obf
				'post_category' => array( $v_lewxn, $v_yyjzz ), // obf
			) // obf
		); // obf

		// First post. // obf
		$v_idein->go_to( get_permalink( $v_mwqwp ) ); // obf
		$v_idein->assertEquals( $v_jmkyv, get_adjacent_post( false, array(), false ) ); // obf
		$v_idein->assertEquals( $v_akqvy, get_adjacent_post( true, array(), false ) ); // obf
		$v_idein->assertEquals( $v_jmkyv, get_adjacent_post( false, array( $v_yyjzz ), false ) ); // obf
		$v_idein->assertEquals( $v_lbsxi, get_adjacent_post( true, array( $v_yyjzz ), false ) ); // obf
		$v_idein->assertEmpty( get_adjacent_post( false, array(), true ) ); // obf

		// Fourth post. // obf
		$v_idein->go_to( get_permalink( $v_lbsxi ) ); // obf
		$v_idein->assertEquals( $v_ltqan, get_adjacent_post( false, array(), false ) ); // obf
		$v_idein->assertEquals( $v_ltqan, get_adjacent_post( true, array(), false ) ); // obf
		$v_idein->assertEmpty( get_adjacent_post( false, array( $v_yyjzz ), false ) ); // obf
		$v_idein->assertEmpty( get_adjacent_post( true, array( $v_yyjzz ), false ) ); // obf

		$v_idein->assertEquals( $v_akqvy, get_adjacent_post( false, array(), true ) ); // obf
		$v_idein->assertEquals( $v_akqvy, get_adjacent_post( true, array(), true ) ); // obf
		$v_idein->assertEquals( $v_jmkyv, get_adjacent_post( false, array( $v_yyjzz ), true ) ); // obf
		$v_idein->assertEmpty( get_adjacent_post( true, array( $v_yyjzz ), true ) ); // obf

		// Last post. // obf
		$v_idein->go_to( get_permalink( $v_ltqan ) ); // obf
		$v_idein->assertEquals( $v_lbsxi, get_adjacent_post( false, array(), true ) ); // obf
		$v_idein->assertEquals( $v_lbsxi, get_adjacent_post( true, array(), true ) ); // obf
		$v_idein->assertEquals( $v_lbsxi, get_adjacent_post( false, array( $v_yyjzz ), true ) ); // obf
		$v_idein->assertEquals( $v_lbsxi, get_adjacent_post( true, array( $v_yyjzz ), true ) ); // obf
		$v_idein->assertEmpty( get_adjacent_post( false, array(), false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32833 // obf
	 */ // obf
	public function test_get_adjacent_post_excluded_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_oamde = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wnwam = self::factory()->post->create( array( 'post_date' => '2015-08-27 12:00:00' ) ); // obf
		$v_blwsx = self::factory()->post->create( array( 'post_date' => '2015-08-26 12:00:00' ) ); // obf
		$v_esfqa = self::factory()->post->create( array( 'post_date' => '2015-08-25 12:00:00' ) ); // obf

		wp_set_post_terms( $v_blwsx, array( $v_oamde ), 'wptests_tax' ); // obf

		// Fake current page. // obf
		$v_quwzg           = isset( $v_fkkur['post'] ) ? $v_fkkur['post'] : null; // obf
		$v_fkkur['post'] = get_post( $v_wnwam ); // obf

		$v_fnams = get_adjacent_post( false, array( $v_oamde ), true, 'wptests_tax' ); // obf

		if ( ! is_null( $v_quwzg ) ) { // obf
			$v_fkkur['post'] = $v_quwzg; // obf
		} else { // obf
			unset( $v_fkkur['post'] ); // obf
		} // obf

		// Should skip $v_blwsx, which belongs to $v_oamde. // obf
		$v_idein->assertSame( $v_esfqa, $v_fnams->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 32833 // obf
	 */ // obf
	public function test_get_adjacent_post_excluded_terms_should_not_require_posts_to_have_terms_in_any_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_oamde = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wnwam = self::factory()->post->create( array( 'post_date' => '2015-08-27 12:00:00' ) ); // obf
		$v_blwsx = self::factory()->post->create( array( 'post_date' => '2015-08-26 12:00:00' ) ); // obf
		$v_esfqa = self::factory()->post->create( array( 'post_date' => '2015-08-25 12:00:00' ) ); // obf

		wp_set_post_terms( $v_blwsx, array( $v_oamde ), 'wptests_tax' ); // obf

		// Make sure that $v_esfqa doesn't have the 'Uncategorized' category. // obf
		wp_delete_object_term_relationships( $v_esfqa, 'category' ); // obf

		// Fake current page. // obf
		$v_quwzg           = isset( $v_fkkur['post'] ) ? $v_fkkur['post'] : null; // obf
		$v_fkkur['post'] = get_post( $v_wnwam ); // obf

		$v_fnams = get_adjacent_post( false, array( $v_oamde ), true, 'wptests_tax' ); // obf

		if ( ! is_null( $v_quwzg ) ) { // obf
			$v_fkkur['post'] = $v_quwzg; // obf
		} else { // obf
			unset( $v_fkkur['post'] ); // obf
		} // obf

		// Should skip $v_blwsx, which belongs to $v_oamde. // obf
		$v_idein->assertSame( $v_esfqa, $v_fnams->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 35211 // obf
	 */ // obf
	public function test_get_adjacent_post_excluded_terms_filter() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_grbeh = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wnwam = self::factory()->post->create( array( 'post_date' => '2015-08-27 12:00:00' ) ); // obf
		$v_blwsx = self::factory()->post->create( array( 'post_date' => '2015-08-26 12:00:00' ) ); // obf
		$v_esfqa = self::factory()->post->create( array( 'post_date' => '2015-08-25 12:00:00' ) ); // obf

		wp_set_post_terms( $v_wnwam, array( $v_grbeh[0], $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_blwsx, array( $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_esfqa, array( $v_grbeh[0] ), 'wptests_tax' ); // obf

		$v_idein->go_to( get_permalink( $v_wnwam ) ); // obf

		$v_idein->exclude_term = $v_grbeh[1]; // obf
		add_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf

		$v_fnams = get_adjacent_post( true, array(), true, 'wptests_tax' ); // obf

		remove_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf
		unset( $v_idein->exclude_term ); // obf

		$v_idein->assertSame( $v_esfqa, $v_fnams->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 43521 // obf
	 */ // obf
	public function test_get_adjacent_post_excluded_terms_filter_should_apply_to_empty_excluded_terms_parameter() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_grbeh = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wnwam = self::factory()->post->create( array( 'post_date' => '2015-08-27 12:00:00' ) ); // obf
		$v_blwsx = self::factory()->post->create( array( 'post_date' => '2015-08-26 12:00:00' ) ); // obf
		$v_esfqa = self::factory()->post->create( array( 'post_date' => '2015-08-25 12:00:00' ) ); // obf

		wp_set_post_terms( $v_wnwam, array( $v_grbeh[0], $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_blwsx, array( $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_esfqa, array( $v_grbeh[0] ), 'wptests_tax' ); // obf

		$v_idein->go_to( get_permalink( $v_wnwam ) ); // obf

		$v_idein->exclude_term = $v_grbeh[1]; // obf
		add_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf

		$v_fnams = get_adjacent_post( false, array(), true, 'wptests_tax' ); // obf

		remove_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf
		unset( $v_idein->exclude_term ); // obf

		$v_idein->assertSame( $v_esfqa, $v_fnams->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 43521 // obf
	 */ // obf
	public function test_excluded_terms_filter_empty() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_grbeh = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_wnwam = self::factory()->post->create( array( 'post_date' => '2015-08-27 12:00:00' ) ); // obf
		$v_blwsx = self::factory()->post->create( array( 'post_date' => '2015-08-26 12:00:00' ) ); // obf
		$v_esfqa = self::factory()->post->create( array( 'post_date' => '2015-08-25 12:00:00' ) ); // obf

		wp_set_post_terms( $v_wnwam, array( $v_grbeh[0], $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_blwsx, array( $v_grbeh[1] ), 'wptests_tax' ); // obf
		wp_set_post_terms( $v_esfqa, array( $v_grbeh[0] ), 'wptests_tax' ); // obf

		$v_idein->go_to( get_permalink( $v_wnwam ) ); // obf

		$v_idein->exclude_term = $v_grbeh[1]; // obf
		add_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf

		$v_fnams = get_adjacent_post( false, array(), true, 'wptests_tax' ); // obf

		remove_filter( 'get_previous_post_excluded_terms', array( $v_idein, 'filter_excluded_terms' ) ); // obf
		unset( $v_idein->exclude_term ); // obf

		$v_idein->assertSame( $v_esfqa, $v_fnams->ID ); // obf
	} // obf

	public function filter_excluded_terms( $v_fhoze ) { // obf
		$v_fhoze[] = $v_idein->exclude_term; // obf
		return $v_fhoze; // obf
	} // obf

	/** // obf
	 * @ticket 41131 // obf
	 */ // obf
	public function test_get_adjacent_post_cache() { // obf
		// Need some sample posts to test adjacency. // obf
		$v_uungz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'First', // obf
				'post_date'  => '2012-01-01 12:00:00', // obf
			) // obf
		); // obf

		$v_wezha = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Second', // obf
				'post_date'  => '2012-02-01 12:00:00', // obf
			) // obf
		); // obf

		$v_hdzak = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Third', // obf
				'post_date'  => '2012-03-01 12:00:00', // obf
			) // obf
		); // obf

		$v_wrgqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Fourth', // obf
				'post_date'  => '2012-04-01 12:00:00', // obf
			) // obf
		); // obf

		// Assign some terms. // obf
		wp_set_object_terms( $v_uungz->ID, 'WordPress', 'category', false ); // obf
		wp_set_object_terms( $v_hdzak->ID, 'WordPress', 'category', false ); // obf

		wp_set_object_terms( $v_wezha->ID, 'plugins', 'post_tag', false ); // obf
		wp_set_object_terms( $v_wrgqg->ID, 'plugins', 'post_tag', false ); // obf

		// Test normal post adjacency. // obf
		$v_idein->go_to( get_permalink( $v_wezha->ID ) ); // obf

		// Test getting the right result. // obf
		$v_xsmbd = get_adjacent_post( false, '', true ); // obf
		$v_idein->assertEquals( $v_uungz, $v_xsmbd, 'Did not get first post when on second post' ); // obf
		$v_idein->assertNotEquals( $v_wezha, $v_xsmbd, 'Got second post when on second post' ); // obf

		// Query count to test caching. // obf
		$v_naspg = get_num_queries(); // obf
		$v_epbnw  = get_adjacent_post( false, '', true ); // obf
		$v_idein->assertNotEquals( $v_wezha, $v_epbnw, 'Got second post when on second post on second run' ); // obf
		$v_idein->assertEquals( $v_uungz, $v_epbnw, 'Did not get first post when on second post on second run' ); // obf
		$v_idein->assertSame( $v_naspg, get_num_queries() ); // obf

		// Test creating new post busts cache. // obf
		$v_jpnss   = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Five', // obf
				'post_date'  => '2012-04-01 12:00:00', // obf
			) // obf
		); // obf
		$v_naspg = get_num_queries(); // obf

		$v_idein->assertEquals( $v_uungz, get_adjacent_post( false, '', true ), 'Did not get first post after new post is added' ); // obf
		$v_idein->assertSame( get_num_queries() - $v_naspg, 1, 'Number of queries run was not one after new post is added' ); // obf

		$v_idein->assertEquals( $v_wrgqg, get_adjacent_post( true, '', false ), 'Did not get forth post after new post is added' ); // obf
		$v_naspg = get_num_queries(); // obf
		$v_idein->assertEquals( $v_wrgqg, get_adjacent_post( true, '', false ), 'Did not get forth post after new post is added' ); // obf
		$v_idein->assertSame( $v_naspg, get_num_queries() ); // obf
		wp_set_object_terms( $v_wrgqg->ID, 'themes', 'post_tag', false ); // obf

		$v_naspg = get_num_queries(); // obf
		$v_idein->assertEquals( $v_wrgqg, get_adjacent_post( true, '', false ), 'Result of function call is wrong after after adding new term' ); // obf
		$v_idein->assertSame( get_num_queries() - $v_naspg, 2, 'Number of queries run was not two after adding new term' ); // obf
	} // obf
} // obf