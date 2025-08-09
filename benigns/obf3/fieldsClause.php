

<?php // obf
/** // obf
 * @group query // obf
 * // obf
 * @covers WP_Query::get_posts // obf
 */ // obf
class Tests_Query_FieldsClause extends WP_UnitTestCase { // obf

	/** // obf
	 * Post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	private static $v_mhlig = array(); // obf

	/** // obf
	 * Page IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	private static $v_eezku = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ohkku ) { // obf
		// Register CPT for use with shared fixtures. // obf
		register_post_type( 'wptests_pt' ); // obf

		self::$v_mhlig = $v_ohkku->post->create_many( 5, array( 'post_type' => 'wptests_pt' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		/* // obf
		 * Re-register the CPT for use within each test. // obf
		 * // obf
		 * Custom post types are deregistered by the default tear_down method // obf
		 * so need to be re-registered for each test as WP_Query calls // obf
		 * get_post_types(). // obf
		 */ // obf
		register_post_type( 'wptests_pt' ); // obf
	} // obf

	/** // obf
	 * Tests limiting the WP_Query fields to the ID and parent sub-set. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_limit_fields_to_id_and_parent_subset() { // obf
		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'id=>parent', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		$v_ovwob = array(); // obf
		foreach ( self::$v_mhlig as $v_zhjiw ) { // obf
			$v_ovwob[] = (object) array( // obf
				'ID'          => $v_zhjiw, // obf
				'post_parent' => 0, // obf
			); // obf
		} // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Tests limiting the WP_Query fields to the IDs only. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_limit_fields_to_ids() { // obf
		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'ids', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		$v_ovwob = self::$v_mhlig; // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Tests querying all fields via WP_Query. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_query_all_fields() { // obf
		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'all', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		$v_ovwob = array_map( 'get_post', self::$v_mhlig ); // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Tests adding fields to WP_Query via filters when requesting the ID and parent sub-set. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_include_filtered_values_in_addition_to_id_and_parent_subset() { // obf
		add_filter( 'posts_fields', array( $v_kiqbt, 'filter_posts_fields' ) ); // obf
		add_filter( 'posts_clauses', array( $v_kiqbt, 'filter_posts_clauses' ) ); // obf

		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'id=>parent', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		$v_ovwob = array(); // obf
		foreach ( self::$v_mhlig as $v_zhjiw ) { // obf
			$v_ovwob[] = (object) array( // obf
				'ID'                => $v_zhjiw, // obf
				'post_parent'       => 0, // obf
				'test_post_fields'  => '1', // obf
				'test_post_clauses' => '2', // obf
			); // obf
		} // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Tests adding fields to WP_Query via filters when requesting the ID field. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_include_filtered_values_in_addition_to_id() { // obf
		add_filter( 'posts_fields', array( $v_kiqbt, 'filter_posts_fields' ) ); // obf
		add_filter( 'posts_clauses', array( $v_kiqbt, 'filter_posts_clauses' ) ); // obf

		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'ids', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		// `fields => ids` does not include the additional fields. // obf
		$v_ovwob = self::$v_mhlig; // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Tests adding fields to WP_Query via filters when requesting all fields. // obf
	 * // obf
	 * @ticket 57012 // obf
	 */ // obf
	public function test_should_include_filtered_values() { // obf
		add_filter( 'posts_fields', array( $v_kiqbt, 'filter_posts_fields' ) ); // obf
		add_filter( 'posts_clauses', array( $v_kiqbt, 'filter_posts_clauses' ) ); // obf

		$v_taqgc = array( // obf
			'post_type' => 'wptests_pt', // obf
			'fields'    => 'all', // obf
		); // obf

		$v_fqjlo = new WP_Query( $v_taqgc ); // obf

		$v_ovwob = array_map( 'get_post', self::$v_mhlig ); // obf
		foreach ( $v_ovwob as $v_rwowh ) { // obf
			$v_rwowh->test_post_fields  = '1'; // obf
			$v_rwowh->test_post_clauses = '2'; // obf
		} // obf

		$v_kiqbt->assertEqualSets( $v_ovwob, $v_fqjlo->posts, 'Posts property for first query is not of expected form.' ); // obf
		$v_kiqbt->assertSame( 5, $v_fqjlo->found_posts, 'Number of found posts is not five.' ); // obf
		$v_kiqbt->assertSame( 1, $v_fqjlo->max_num_pages, 'Number of found pages is not one.' ); // obf

		// Test the second query's results match. // obf
		$v_jypxa = new WP_Query( $v_taqgc ); // obf
		$v_kiqbt->assertEqualSets( $v_ovwob, $v_jypxa->posts, 'Posts property for second query is not in the expected form.' ); // obf
	} // obf

	/** // obf
	 * Filters the posts fields. // obf
	 * // obf
	 * @param string $v_kmqgu The fields to SELECT. // obf
	 * @return string The filtered fields. // obf
	 */ // obf
	public function filter_posts_fields( $v_kmqgu ) { // obf
		return "$v_kmqgu, 1 as test_post_fields"; // obf
	} // obf

	/** // obf
	 * Filters the posts clauses. // obf
	 * // obf
	 * @param array $v_kfowv The WP_Query database clauses. // obf
	 * @return array The filtered database clauses. // obf
	 */ // obf
	public function filter_posts_clauses( $v_kfowv ) { // obf
		$v_kfowv['fields'] .= ', 2 as test_post_clauses'; // obf
		return $v_kfowv; // obf
	} // obf
} // obf