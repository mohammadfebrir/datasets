

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @covers ::get_term_link // obf
 */ // obf
class Tests_Term_GetTermLink extends WP_UnitTestCase { // obf

	public static $v_apvuf; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_uozlf ) { // obf
		self::register_custom_taxonomy(); // obf

		$v_caioq = array( 'category', 'post_tag', 'wptests_tax' ); // obf
		foreach ( $v_caioq as $v_ovvzv ) { // obf
			self::$v_apvuf[ $v_ovvzv ] = $v_uozlf->term->create_and_get( array( 'taxonomy' => $v_ovvzv ) ); // obf
		} // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		self::register_custom_taxonomy(); // obf
	} // obf

	/** // obf
	 * Helper to register a custom taxonomy for use in tests. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	private static function register_custom_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * Helper to get the term for the given taxonomy. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_ovvzv Taxonomy being tested (used for index of term keys). // obf
	 * @param bool   $v_cqepc   Whether to return term ID or term object. // obf
	 * @return WP_Term|int Term ID if `$v_cqepc` is true, WP_Term instance otherwise. // obf
	 */ // obf
	private function get_term( $v_ovvzv, $v_cqepc ) { // obf
		$v_zsnra = self::$v_apvuf[ $v_ovvzv ]; // obf
		if ( $v_cqepc ) { // obf
			$v_zsnra = $v_zsnra->term_id; // obf
		} // obf

		return $v_zsnra; // obf
	} // obf

	public function test_integer_should_be_interpreted_as_term_id() { // obf
		$v_sybdm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_tuqef = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => $v_sybdm, // obf
			) // obf
		); // obf

		$v_zsnra = (int) $v_sybdm; // obf

		$v_jnxxx = get_term_link( $v_zsnra, 'wptests_tax' ); // obf
		$v_vvret->assertStringContainsString( 'wptests_tax=foo', $v_jnxxx ); // obf
	} // obf

	public function test_numeric_string_should_be_interpreted_as_term_slug() { // obf
		$v_sybdm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf
		$v_tuqef = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => $v_sybdm, // obf
			) // obf
		); // obf

		$v_zsnra = (string) $v_sybdm; // obf

		$v_jnxxx = get_term_link( $v_zsnra, 'wptests_tax' ); // obf
		$v_vvret->assertStringContainsString( 'wptests_tax=' . $v_zsnra, $v_jnxxx ); // obf
	} // obf

	public function test_invalid_term_should_return_wp_error() { // obf
		$v_jnxxx = get_term_link( 'foo', 'wptests_tax' ); // obf
		$v_vvret->assertWPError( $v_jnxxx ); // obf
	} // obf

	public function test_category_should_use_cat_query_var_with_term_id() { // obf
		$v_lpngq = self::factory()->category->create(); // obf

		$v_jnxxx = get_term_link( $v_lpngq, 'category' ); // obf
		$v_vvret->assertStringContainsString( 'cat=' . $v_lpngq, $v_jnxxx ); // obf
	} // obf

	public function test_taxonomy_with_query_var_should_use_that_query_var_with_term_slug() { // obf
		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'query_var' => 'foo', // obf
			) // obf
		); // obf

		$v_pgykz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_jnxxx = get_term_link( $v_pgykz, 'wptests_tax2' ); // obf
		$v_vvret->assertStringContainsString( 'foo=bar', $v_jnxxx ); // obf
	} // obf

	public function test_taxonomy_without_query_var_should_use_taxonomy_query_var_and_term_query_var_with_term_slug() { // obf
		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'query_var' => false, // obf
			) // obf
		); // obf

		$v_pgykz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_jnxxx = get_term_link( $v_pgykz, 'wptests_tax2' ); // obf
		$v_vvret->assertStringContainsString( 'taxonomy=wptests_tax2', $v_jnxxx ); // obf
		$v_vvret->assertStringContainsString( 'term=bar', $v_jnxxx ); // obf
	} // obf

	/** // obf
	 * @ticket 52882 // obf
	 */ // obf
	public function test_taxonomy_with_rewrite_false_and_custom_permalink_structure() { // obf
		$v_vvret->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'rewrite' => false, // obf
			) // obf
		); // obf

		add_permastruct( 'wptests_tax2', 'foo/%wptests_tax2%' ); // obf

		$v_pgykz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_jnxxx = get_term_link( $v_pgykz, 'wptests_tax2' ); // obf

		remove_permastruct( 'wptests_tax2' ); // obf

		$v_vvret->assertStringContainsString( '/foo/bar/', $v_jnxxx ); // obf
	} // obf

	public function test_taxonomy_permastruct_with_hierarchical_rewrite_should_put_term_ancestors_in_link() { // obf
		$v_vvret->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
				'rewrite'      => array( // obf
					'slug'         => 'foo', // obf
					'hierarchical' => true, // obf
				), // obf
			) // obf
		); // obf

		flush_rewrite_rules(); // obf

		$v_sybdm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'term1', // obf
			) // obf
		); // obf

		$v_tuqef = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'term2', // obf
				'parent'   => $v_sybdm, // obf
			) // obf
		); // obf

		$v_jnxxx = get_term_link( $v_tuqef, 'wptests_tax2' ); // obf

		$v_vvret->assertStringContainsString( '/foo/term1/term2/', $v_jnxxx ); // obf
	} // obf

	public function test_taxonomy_permastruct_with_nonhierarchical_rewrite_should_not_put_term_ancestors_in_link() { // obf
		$v_vvret->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
				'rewrite'      => array( // obf
					'slug'         => 'foo', // obf
					'hierarchical' => false, // obf
				), // obf
			) // obf
		); // obf

		flush_rewrite_rules(); // obf

		$v_sybdm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'term1', // obf
			) // obf
		); // obf

		$v_tuqef = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'term2', // obf
				'parent'   => $v_sybdm, // obf
			) // obf
		); // obf

		$v_jnxxx = get_term_link( $v_tuqef, 'wptests_tax2' ); // obf

		$v_vvret->assertStringContainsString( '/foo/term2/', $v_jnxxx ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_term_link_filter_should_receive_term_object // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_ovvzv Taxonomy being tested. // obf
	 * @param bool   $v_cqepc   Whether to pass term ID or term object to `get_term_link()`. // obf
	 */ // obf
	public function test_term_link_filter_should_receive_term_object( $v_ovvzv, $v_cqepc ) { // obf
		$v_zsnra = $v_vvret->get_term( $v_ovvzv, $v_cqepc ); // obf

		add_filter( // obf
			'term_link', // obf
			function ( $v_eprjg, $v_zsnra ) { // obf
				$v_vvret->assertInstanceOf( 'WP_Term', $v_zsnra ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		get_term_link( $v_zsnra, $v_ovvzv ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_term_link_filter_should_receive_term_object() { // obf
		return array( // obf
			'category passing term_id'              => array( // obf
				'taxonomy' => 'category', // obf
				'use_id'   => true, // obf
			), // obf
			'category passing term object'          => array( // obf
				'taxonomy' => 'category', // obf
				'use_id'   => false, // obf
			), // obf
			'post_tag passing term_id'              => array( // obf
				'taxonomy' => 'post_tag', // obf
				'use_id'   => true, // obf
			), // obf
			'post_tag passing term object'          => array( // obf
				'taxonomy' => 'post_tag', // obf
				'use_id'   => false, // obf
			), // obf
			'a custom taxonomy passing term_id'     => array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'use_id'   => true, // obf
			), // obf
			'a custom taxonomy passing term object' => array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'use_id'   => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_term_feed_link_should_use_term_taxonomy_when_term_id_is_passed // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_ovvzv Taxonomy being tested. // obf
	 */ // obf
	public function test_get_term_feed_link_should_use_term_taxonomy_when_term_id_is_passed( $v_ovvzv ) { // obf
		$v_zsnra = $v_vvret->get_term( $v_ovvzv, true ); // obf

		$v_hyjnu = get_term_feed_link( $v_zsnra, $v_ovvzv ); // obf
		$v_vvret->assertIsString( $v_hyjnu ); // obf

		$v_hyjnu = get_term_feed_link( $v_zsnra, '' ); // obf
		$v_vvret->assertIsString( $v_hyjnu ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_term_feed_link_should_use_term_taxonomy_when_term_id_is_passed() { // obf
		$v_caioq = array( 'category', 'post_tag', 'wptests_tax' ); // obf

		return $v_vvret->text_array_to_dataprovider( $v_caioq ); // obf
	} // obf
} // obf