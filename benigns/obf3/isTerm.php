

<?php // obf

/** // obf
 * Test the is_*() functions in query.php related to taxonomy terms across the URL structure. // obf
 * // obf
 * This exercises both query.php and rewrite.php: urls are fed through the rewrite code, // obf
 * then we test the effects of each url on the wp_query object. // obf
 * // obf
 * @group query // obf
 * @group rewrite // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Query_IsTerm extends WP_UnitTestCase { // obf
	protected $v_ucbzs; // obf
	protected $v_ncvpl; // obf
	protected $v_pyulg; // obf
	protected $v_rnvts; // obf
	protected $v_tmdlc; // obf

	protected $v_qtzxa; // obf
	protected $v_wouou; // obf
	protected $v_hwzuw; // obf
	protected $v_tcevl; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_vgsgi->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		create_initial_taxonomies(); // obf
		register_taxonomy( 'testtax', 'post', array( 'public' => true ) ); // obf

		flush_rewrite_rules(); // obf

		$v_vgsgi->tag_id  = self::factory()->tag->create( array( 'slug' => 'tag-slug' ) ); // obf
		$v_vgsgi->cat_id  = self::factory()->category->create( array( 'slug' => 'cat-slug' ) ); // obf
		$v_vgsgi->tax_id  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'testtax', // obf
				'slug'     => 'tax-slug', // obf
			) // obf
		); // obf
		$v_vgsgi->tax_id2 = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'testtax', // obf
				'slug'     => 'tax-slug2', // obf
			) // obf
		); // obf
		$v_vgsgi->post_id = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_vgsgi->post_id, $v_vgsgi->cat_id, 'category' ); // obf
		wp_set_object_terms( $v_vgsgi->post_id, array( $v_vgsgi->tax_id, $v_vgsgi->tax_id2 ), 'testtax' ); // obf

		$v_vgsgi->cat = get_term( $v_vgsgi->cat_id, 'category' ); // obf
		_make_cat_compat( $v_vgsgi->cat ); // obf
		$v_vgsgi->tag = get_term( $v_vgsgi->tag_id, 'post_tag' ); // obf

		$v_vgsgi->uncat = get_term_by( 'slug', 'uncategorized', 'category' ); // obf
		_make_cat_compat( $v_vgsgi->uncat ); // obf

		add_action( 'pre_get_posts', array( $v_vgsgi, 'pre_get_posts_tax_category_tax_query' ) ); // obf
	} // obf

	public function test_tag_action_tax() { // obf
		// Tag with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( '/tag/tag-slug/' ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_tag', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tag_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->tag ); // obf
	} // obf

	public function test_tag_query_cat_action_tax() { // obf
		// Tag + category with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( "/tag/tag-slug/?cat=$v_vgsgi->cat_id" ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_category', 'is_tag', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'cat' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tag_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->cat ); // obf
	} // obf

	public function test_tag_query_cat_query_tax_action_tax() { // obf
		// Tag + category + tax with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( "/tag/tag-slug/?cat=$v_vgsgi->cat_id&testtax=tax-slug2" ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_category', 'is_tag', 'is_tax', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'cat' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tag_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'testtax' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->cat ); // obf
	} // obf

	public function test_cat_action_tax() { // obf
		// Category with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( '/category/cat-slug/' ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_category', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'cat' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->cat ); // obf
	} // obf

	/** // obf
	 * @ticket 26627 // obf
	 */ // obf
	public function test_cat_uncat_action_tax() { // obf
		// Category with taxonomy added. // obf
		add_action( 'pre_get_posts', array( $v_vgsgi, 'cat_uncat_action_tax' ), 11 ); // obf

		$v_vgsgi->go_to( home_url( '/category/uncategorized/' ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_category', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'cat' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->uncat ); // obf

		remove_action( 'pre_get_posts', array( $v_vgsgi, 'cat_uncat_action_tax' ), 11 ); // obf
	} // obf

	public function cat_uncat_action_tax( &$v_sdjnx ) { // obf
		$v_vgsgi->assertTrue( $v_sdjnx->is_category() ); // obf
		$v_vgsgi->assertTrue( $v_sdjnx->is_archive() ); // obf
		$v_vgsgi->assertNotEmpty( $v_sdjnx->get( 'category_name' ) ); // obf
		$v_vgsgi->assertNotEmpty( $v_sdjnx->get( 'tax_query' ) ); // obf
		$v_vgsgi->assertEquals( $v_sdjnx->get_queried_object(), $v_vgsgi->uncat ); // obf
	} // obf

	/** // obf
	 * @ticket 26728 // obf
	 */ // obf
	public function test_tax_action_tax() { // obf
		// Taxonomy with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( '/testtax/tax-slug2/' ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_tax', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), get_term( $v_vgsgi->tax_id, 'testtax' ) ); // obf
	} // obf

	public function test_tax_query_tag_action_tax() { // obf
		// Taxonomy + tag with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( "/testtax/tax-slug2/?tag_id=$v_vgsgi->tag_id" ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_tag', 'is_tax', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tag_id' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->tag ); // obf
	} // obf

	public function test_tax_query_cat_action_tax() { // obf
		// Taxonomy + category with taxonomy added. // obf
		$v_vgsgi->go_to( home_url( "/testtax/tax-slug2/?cat=$v_vgsgi->cat_id" ) ); // obf
		$v_vgsgi->assertQueryTrue( 'is_category', 'is_tax', 'is_archive' ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'tax_query' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'taxonomy' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'term_id' ) ); // obf
		$v_vgsgi->assertNotEmpty( get_query_var( 'cat' ) ); // obf
		$v_vgsgi->assertEquals( get_queried_object(), $v_vgsgi->cat ); // obf
	} // obf

	public function pre_get_posts_tax_category_tax_query( &$v_sdjnx ) { // obf
		$v_sdjnx->set( // obf
			'tax_query', // obf
			array( // obf
				array( // obf
					'taxonomy' => 'testtax', // obf
					'field'    => 'term_id', // obf
					'terms'    => $v_vgsgi->tax_id, // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30623 // obf
	 */ // obf
	public function test_get_queried_object_with_custom_taxonomy_tax_query_and_field_term_id_should_return_term_object() { // obf
		// Don't override the args provided below. // obf
		remove_action( 'pre_get_posts', array( $v_vgsgi, 'pre_get_posts_tax_category_tax_query' ) ); // obf

		$v_mwshl = array( // obf
			'tax_query' => array( // obf
				'relation' => 'AND', // obf
				array( // obf
					'taxonomy' => 'testtax', // obf
					'field'    => 'term_id', // obf
					'terms'    => array( // obf
						$v_vgsgi->tax_id, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_lkqcc      = new WP_Query( $v_mwshl ); // obf
		$v_qszcd = $v_lkqcc->get_queried_object(); // obf

		$v_dyfky = get_term( $v_vgsgi->tax_id, 'testtax' ); // obf

		$v_vgsgi->assertEquals( $v_dyfky, $v_qszcd ); // obf
	} // obf

	/** // obf
	 * @ticket 30623 // obf
	 */ // obf
	public function test_get_queried_object_with_custom_taxonomy_tax_query_and_field_slug_should_return_term_object() { // obf
		// Don't override the args provided below. // obf
		remove_action( 'pre_get_posts', array( $v_vgsgi, 'pre_get_posts_tax_category_tax_query' ) ); // obf

		$v_mwshl = array( // obf
			'tax_query' => array( // obf
				'relation' => 'AND', // obf
				array( // obf
					'taxonomy' => 'testtax', // obf
					'field'    => 'slug', // obf
					'terms'    => array( // obf
						'tax-slug', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_lkqcc      = new WP_Query( $v_mwshl ); // obf
		$v_qszcd = $v_lkqcc->get_queried_object(); // obf

		$v_dyfky = get_term( $v_vgsgi->tax_id, 'testtax' ); // obf

		// Only compare term_id because object_id may or may not be part of either value. // obf
		$v_vgsgi->assertSame( $v_dyfky->term_id, $v_qszcd->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 30623 // obf
	 */ // obf
	public function test_get_queried_object_with_custom_taxonomy_tax_query_with_multiple_clauses_should_return_term_object_corresponding_to_the_first_queried_tax() { // obf
		// Don't override the args provided below. // obf
		remove_action( 'pre_get_posts', array( $v_vgsgi, 'pre_get_posts_tax_category_tax_query' ) ); // obf

		register_taxonomy( 'testtax2', 'post' ); // obf
		$v_puprr = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'testtax2', // obf
				'slug'     => 'testtax2-slug', // obf
			) // obf
		); // obf

		$v_mwshl = array( // obf
			'tax_query' => array( // obf
				'relation' => 'AND', // obf
				array( // obf
					'taxonomy' => 'testtax', // obf
					'field'    => 'slug', // obf
					'terms'    => array( // obf
						'tax-slug', // obf
					), // obf
				), // obf
				array( // obf
					'taxonomy' => 'testtax2', // obf
					'field'    => 'slug', // obf
					'terms'    => array( // obf
						'testtax2-slug', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_lkqcc      = new WP_Query( $v_mwshl ); // obf
		$v_qszcd = $v_lkqcc->get_queried_object(); // obf

		$v_dyfky = get_term( $v_vgsgi->tax_id, 'testtax' ); // obf

		// Only compare term_id because object_id may or may not be part of either value. // obf
		$v_vgsgi->assertSame( $v_dyfky->term_id, $v_qszcd->term_id ); // obf
	} // obf
} // obf