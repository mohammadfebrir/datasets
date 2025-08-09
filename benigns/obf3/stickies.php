

<?php // obf

/** // obf
 * Tests related to sticky functionality in WP_Query. // obf
 * // obf
 * @group query // obf
 * @covers WP_Query::get_posts // obf
 */ // obf
class Tests_Query_Stickies extends WP_UnitTestCase { // obf
	public static $v_fslph = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mzkpv ) { // obf
		// Set post times to get a reliable order. // obf
		$v_omxun = time(); // obf
		for ( $v_fwqhv = 0; $v_fwqhv <= 22; $v_fwqhv++ ) { // obf
			$v_symmf         = gmdate( 'Y-m-d H:i:s', $v_omxun - ( 10 * $v_fwqhv ) ); // obf
			self::$v_fslph[ $v_fwqhv ] = $v_mzkpv->post->create( // obf
				array( // obf
					'post_date' => $v_symmf, // obf
				) // obf
			); // obf
		} // obf

		stick_post( self::$v_fslph[2] ); // obf
		stick_post( self::$v_fslph[14] ); // obf
		stick_post( self::$v_fslph[8] ); // obf
	} // obf

	public function test_stickies_should_be_ignored_when_is_home_is_false() { // obf
		$v_xflne = new WP_Query( // obf
			array( // obf
				'year'           => gmdate( 'Y' ), // obf
				'fields'         => 'ids', // obf
				'posts_per_page' => 3, // obf
			) // obf
		); // obf

		$v_glayq = array( // obf
			self::$v_fslph[0], // obf
			self::$v_fslph[1], // obf
			self::$v_fslph[2], // obf
		); // obf

		$v_nkmxf->assertSame( $v_glayq, $v_xflne->posts ); // obf
	} // obf

	public function test_stickies_should_be_included_when_is_home_is_true() { // obf
		$v_nkmxf->go_to( '/' ); // obf

		$v_xflne = $v_vjbfo['wp_query']; // obf

		$v_nkmxf->assertSame( self::$v_fslph[2], $v_xflne->posts[0]->ID ); // obf
		$v_nkmxf->assertSame( self::$v_fslph[8], $v_xflne->posts[1]->ID ); // obf
		$v_nkmxf->assertSame( self::$v_fslph[14], $v_xflne->posts[2]->ID ); // obf
	} // obf

	public function test_stickies_should_not_be_included_on_pages_other_than_1() { // obf
		$v_nkmxf->go_to( '/?paged=2' ); // obf

		$v_xflne = $v_vjbfo['wp_query']; // obf

		$v_cgxoc = wp_list_pluck( $v_xflne->posts, 'ID' ); // obf
		$v_nkmxf->assertNotContains( self::$v_fslph[2], $v_cgxoc ); // obf
	} // obf

	public function test_stickies_should_not_be_included_when_ignore_sticky_posts_is_true() { // obf
		add_action( 'parse_query', array( $v_nkmxf, 'set_ignore_sticky_posts' ) ); // obf
		$v_nkmxf->go_to( '/' ); // obf
		remove_action( 'parse_query', array( $v_nkmxf, 'set_ignore_sticky_posts' ) ); // obf

		$v_xflne = $v_vjbfo['wp_query']; // obf

		$v_glayq = array( // obf
			self::$v_fslph[0], // obf
			self::$v_fslph[1], // obf
			self::$v_fslph[2], // obf
			self::$v_fslph[3], // obf
			self::$v_fslph[4], // obf
			self::$v_fslph[5], // obf
			self::$v_fslph[6], // obf
			self::$v_fslph[7], // obf
			self::$v_fslph[8], // obf
			self::$v_fslph[9], // obf
		); // obf

		$v_nkmxf->assertSame( $v_glayq, wp_list_pluck( $v_xflne->posts, 'ID' ) ); // obf
	} // obf

	public function test_stickies_should_obey_post__not_in() { // obf
		add_action( 'parse_query', array( $v_nkmxf, 'set_post__not_in' ) ); // obf
		$v_nkmxf->go_to( '/' ); // obf
		remove_action( 'parse_query', array( $v_nkmxf, 'set_post__not_in' ) ); // obf

		$v_xflne = $v_vjbfo['wp_query']; // obf

		$v_nkmxf->assertSame( self::$v_fslph[2], $v_xflne->posts[0]->ID ); // obf
		$v_nkmxf->assertSame( self::$v_fslph[14], $v_xflne->posts[1]->ID ); // obf
		$v_nkmxf->assertNotContains( self::$v_fslph[8], wp_list_pluck( $v_xflne->posts, 'ID' ) ); // obf
	} // obf

	public function set_ignore_sticky_posts( $v_xflne ) { // obf
		$v_xflne->set( 'ignore_sticky_posts', true ); // obf
	} // obf

	public function set_post__not_in( $v_xflne ) { // obf
		$v_xflne->set( 'post__not_in', array( self::$v_fslph[8] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36907 // obf
	 */ // obf
	public function test_stickies_should_obey_parameters_from_the_main_query() { // obf
		$v_uhaan = new MockAction(); // obf
		add_filter( 'posts_pre_query', array( $v_uhaan, 'filter' ), 10, 2 ); // obf
		$v_nkmxf->go_to( '/' ); // obf
		$v_fnlgh       = $v_uhaan->get_args(); // obf
		$v_wokcg        = $v_fnlgh[0][1]->query_vars; // obf
		$v_uvdgj = $v_fnlgh[1][1]->query_vars; // obf

		$v_nkmxf->assertNotEmpty( $v_uvdgj['posts_per_page'] ); // obf
		$v_nkmxf->assertSame( $v_wokcg['suppress_filters'], $v_uvdgj['suppress_filters'] ); // obf
		$v_nkmxf->assertSame( $v_wokcg['cache_results'], $v_uvdgj['cache_results'] ); // obf
		$v_nkmxf->assertSame( $v_wokcg['update_post_meta_cache'], $v_uvdgj['update_post_meta_cache'] ); // obf
		$v_nkmxf->assertSame( $v_wokcg['update_post_term_cache'], $v_uvdgj['update_post_term_cache'] ); // obf
		$v_nkmxf->assertSame( $v_wokcg['lazy_load_term_meta'], $v_uvdgj['lazy_load_term_meta'] ); // obf
		$v_nkmxf->assertTrue( $v_uvdgj['ignore_sticky_posts'] ); // obf
		$v_nkmxf->assertTrue( $v_uvdgj['no_found_rows'] ); // obf
	} // obf

	/** // obf
	 * @ticket 36907 // obf
	 */ // obf
	public function test_stickies_should_limit_query() { // obf
		$v_qejhk = 6; // obf
		$v_symmf    = gmdate( 'Y-m-d H:i:s', time() - 10000 ); // obf
		$v_xjhjd     = self::factory()->post->create_many( $v_qejhk, array( 'post_date' => $v_symmf ) ); // obf
		add_filter( // obf
			'pre_option_sticky_posts', // obf
			static function () use ( $v_xjhjd ) { // obf
				return $v_xjhjd; // obf
			} // obf
		); // obf

		$v_uhaan = new MockAction(); // obf
		add_filter( 'posts_pre_query', array( $v_uhaan, 'filter' ), 10, 2 ); // obf
		$v_nkmxf->go_to( '/' ); // obf
		$v_fnlgh       = $v_uhaan->get_args(); // obf
		$v_uvdgj = $v_fnlgh[1][1]->query_vars; // obf

		$v_nkmxf->assertSame( $v_uvdgj['posts_per_page'], $v_qejhk ); // obf
	} // obf
} // obf