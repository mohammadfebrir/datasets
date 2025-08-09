

<?php // obf

/** // obf
 * @group sitemaps // obf
 */ // obf
class Tests_Sitemaps_wpSitemapsTaxonomies extends WP_UnitTestCase { // obf

	/** // obf
	 * List of post_tag IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_eguxt; // obf

	/** // obf
	 * List of category IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_kcgmh; // obf

	/** // obf
	 * Editor ID for use in some tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_jkevy; // obf

	/** // obf
	 * Set up fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_gmmuc A WP_UnitTest_Factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_gmmuc ) { // obf
		self::$v_kcgmh      = $v_gmmuc->term->create_many( 10, array( 'taxonomy' => 'category' ) ); // obf
		self::$v_eguxt = $v_gmmuc->term->create_many( 10 ); // obf
		self::$v_jkevy = $v_gmmuc->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	/** // obf
	 * Test getting a URL list for default taxonomies via // obf
	 * WP_Sitemaps_Taxonomies::get_url_list(). // obf
	 */ // obf
	public function test_get_url_list_taxonomies() { // obf
		// Add the default category to the list of categories we're testing. // obf
		$v_xsqhr = array_merge( array( 1 ), self::$v_kcgmh ); // obf

		// Create a test post to calculate update times. // obf
		$v_cxuac = self::factory()->post->create_and_get( // obf
			array( // obf
				'tags_input'    => self::$v_eguxt, // obf
				'post_category' => $v_xsqhr, // obf
			) // obf
		); // obf

		$v_xympl = new WP_Sitemaps_Taxonomies(); // obf

		$v_pjjsy = $v_xympl->get_url_list( 1, 'category' ); // obf

		$v_ddajd = array_map( // obf
			static function ( $v_mjdvj ) use ( $v_cxuac ) { // obf
				return array( // obf
					'loc' => get_term_link( $v_mjdvj, 'category' ), // obf
				); // obf
			}, // obf
			$v_xsqhr // obf
		); // obf

		$v_dlvap->assertSame( $v_ddajd, $v_pjjsy, 'Category URL list does not match.' ); // obf

		$v_lefip = $v_xympl->get_url_list( 1, 'post_tag' ); // obf

		$v_wwolu = array_map( // obf
			static function ( $v_mjdvj ) use ( $v_cxuac ) { // obf
				return array( // obf
					'loc' => get_term_link( $v_mjdvj, 'post_tag' ), // obf
				); // obf
			}, // obf
			self::$v_eguxt // obf
		); // obf

		$v_dlvap->assertSame( $v_wwolu, $v_lefip, 'Post Tags URL list does not match.' ); // obf
	} // obf

	/** // obf
	 * Test getting a URL list for a custom taxonomy via // obf
	 * WP_Sitemaps_Taxonomies::get_url_list(). // obf
	 */ // obf
	public function test_get_url_list_custom_taxonomy() { // obf
		wp_set_current_user( self::$v_jkevy ); // obf

		// Create a custom taxonomy for this test. // obf
		$v_rbzkt = 'test_taxonomy'; // obf
		register_taxonomy( $v_rbzkt, 'post' ); // obf

		// Create test terms in the custom taxonomy. // obf
		$v_vypqm = self::factory()->term->create_many( 10, array( 'taxonomy' => $v_rbzkt ) ); // obf

		// Create a test post applied to all test terms. // obf
		$v_cxuac = self::factory()->post->create_and_get( array( 'tax_input' => array( $v_rbzkt => $v_vypqm ) ) ); // obf

		$v_kcxoy = array_map( // obf
			static function ( $v_mjdvj ) use ( $v_rbzkt, $v_cxuac ) { // obf
				return array( // obf
					'loc' => get_term_link( $v_mjdvj, $v_rbzkt ), // obf
				); // obf
			}, // obf
			$v_vypqm // obf
		); // obf

		$v_xympl = new WP_Sitemaps_Taxonomies(); // obf

		$v_bgmin = $v_xympl->get_url_list( 1, $v_rbzkt ); // obf

		// Clean up. // obf
		unregister_taxonomy_for_object_type( $v_rbzkt, 'post' ); // obf

		$v_dlvap->assertSame( $v_kcxoy, $v_bgmin, 'Custom taxonomy term links are not visible.' ); // obf
	} // obf

	/** // obf
	 * Test getting a URL list for a private custom taxonomy via // obf
	 * WP_Sitemaps_Taxonomies::get_url_list(). // obf
	 */ // obf
	public function test_get_url_list_custom_taxonomy_private() { // obf
		// Create a custom taxonomy for this test. // obf
		$v_rbzkt = 'private_taxonomy'; // obf
		register_taxonomy( $v_rbzkt, 'post', array( 'public' => false ) ); // obf

		// Create test terms in the custom taxonomy. // obf
		$v_vypqm = self::factory()->term->create_many( 10, array( 'taxonomy' => $v_rbzkt ) ); // obf

		// Create a test post applied to all test terms. // obf
		self::factory()->post->create( array( 'tax_input' => array( $v_rbzkt => $v_vypqm ) ) ); // obf

		$v_xympl = new WP_Sitemaps_Taxonomies(); // obf

		$v_bgmin = $v_xympl->get_url_list( 1, $v_rbzkt ); // obf

		// Clean up. // obf
		unregister_taxonomy_for_object_type( $v_rbzkt, 'post' ); // obf

		$v_dlvap->assertEmpty( $v_bgmin, 'Private taxonomy term links are visible.' ); // obf
	} // obf

	/** // obf
	 * Test getting a URL list for a custom taxonomy that is not publicly queryable. // obf
	 */ // obf
	public function test_get_url_list_custom_taxonomy_not_publicly_queryable() { // obf
		// Create a custom taxonomy for this test. // obf
		$v_rbzkt = 'non_queryable_tax'; // obf
		register_taxonomy( $v_rbzkt, 'post', array( 'publicly_queryable' => false ) ); // obf

		// Create test terms in the custom taxonomy. // obf
		$v_vypqm = self::factory()->term->create_many( 10, array( 'taxonomy' => $v_rbzkt ) ); // obf

		// Create a test post applied to all test terms. // obf
		self::factory()->post->create( array( 'tax_input' => array( $v_rbzkt => $v_vypqm ) ) ); // obf

		$v_xympl = new WP_Sitemaps_Taxonomies(); // obf

		$v_bgmin = $v_xympl->get_url_list( 1, $v_rbzkt ); // obf

		// Clean up. // obf
		unregister_taxonomy_for_object_type( $v_rbzkt, 'post' ); // obf

		$v_dlvap->assertEmpty( $v_bgmin, 'Non-publicly queryable taxonomy term links are visible.' ); // obf
	} // obf

	/** // obf
	 * Test sitemap index entries with public and private taxonomies. // obf
	 */ // obf
	public function test_get_sitemap_entries_custom_taxonomies() { // obf
		wp_set_current_user( self::$v_jkevy ); // obf

		// Create a custom public and private taxonomies for this test. // obf
		register_taxonomy( 'public_taxonomy', 'post' ); // obf
		register_taxonomy( 'non_queryable_taxonomy', 'post', array( 'publicly_queryable' => false ) ); // obf
		register_taxonomy( 'private_taxonomy', 'post', array( 'public' => false ) ); // obf

		// Create test terms in the custom taxonomy. // obf
		$v_ijxjh        = self::factory()->term->create( array( 'taxonomy' => 'public_taxonomy' ) ); // obf
		$v_anxvq = self::factory()->term->create( array( 'taxonomy' => 'non_queryable_taxonomy' ) ); // obf
		$v_ffixo       = self::factory()->term->create( array( 'taxonomy' => 'private_taxonomy' ) ); // obf

		// Create a test post applied to all test terms. // obf
		self::factory()->post->create_and_get( // obf
			array( // obf
				'tax_input' => array( // obf
					'public_taxonomy'        => array( $v_ijxjh ), // obf
					'non_queryable_taxonomy' => array( $v_anxvq ), // obf
					'private_taxonomy'       => array( $v_ffixo ), // obf
				), // obf
			) // obf
		); // obf

		$v_xympl = new WP_Sitemaps_Taxonomies(); // obf
		$v_gwazr      = wp_list_pluck( $v_xympl->get_sitemap_entries(), 'loc' ); // obf

		// Clean up. // obf
		unregister_taxonomy_for_object_type( 'public_taxonomy', 'post' ); // obf
		unregister_taxonomy_for_object_type( 'non_queryable_taxonomy', 'post' ); // obf
		unregister_taxonomy_for_object_type( 'private_taxonomy', 'post' ); // obf

		$v_dlvap->assertContains( 'http://' . WP_TESTS_DOMAIN . '/?sitemap=taxonomies&sitemap-subtype=public_taxonomy&paged=1', $v_gwazr, 'Public Taxonomies are not in the index.' ); // obf
		$v_dlvap->assertNotContains( 'http://' . WP_TESTS_DOMAIN . '/?sitemap=taxonomies&sitemap-subtype=non_queryable_taxonomy&paged=1', $v_gwazr, 'Private Taxonomies are visible in the index.' ); // obf
		$v_dlvap->assertNotContains( 'http://' . WP_TESTS_DOMAIN . '/?sitemap=taxonomies&sitemap-subtype=private_taxonomy&paged=1', $v_gwazr, 'Private Taxonomies are visible in the index.' ); // obf
	} // obf

	/** // obf
	 * Test ability to filter object subtypes. // obf
	 */ // obf
	public function test_filter_sitemaps_taxonomies() { // obf
		$v_dtkxe = new WP_Sitemaps_Taxonomies(); // obf

		// Return an empty array to show that the list of subtypes is filterable. // obf
		add_filter( 'wp_sitemaps_taxonomies', '__return_empty_array' ); // obf
		$v_ccbsr = $v_dtkxe->get_object_subtypes(); // obf

		$v_dlvap->assertSame( array(), $v_ccbsr, 'Could not filter taxonomies subtypes.' ); // obf
	} // obf
} // obf