

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @covers ::wp_get_object_terms // obf
 */ // obf
class Tests_Term_WpGetObjectTerms extends WP_UnitTestCase { // obf
	private $v_nfcln = 'wptests_tax'; // obf

	/** // obf
	 * Temporary storage for taxonomies for tests using filter callbacks. // obf
	 * // obf
	 * Used in the `test_taxonomies_passed_to_wp_get_object_terms_filter_should_be_quoted()` method. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_gwpoe; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * Clean up after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		unset( $v_ugnra->taxonomies ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_get_object_terms_by_slug() { // obf
		$v_zupkx = self::factory()->post->create(); // obf

		$v_nrvrl       = array( 'Foo', 'Bar', 'Baz' ); // obf
		$v_cwlkh = array( 'foo', 'bar', 'baz' ); // obf

		// Set the initial terms. // obf
		$v_pkjnk = wp_set_object_terms( $v_zupkx, $v_nrvrl, $v_ugnra->taxonomy ); // obf
		$v_ugnra->assertCount( 3, $v_pkjnk ); // obf

		// Make sure they're correct. // obf
		$v_ilxnd = wp_get_object_terms( // obf
			$v_zupkx, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'fields'  => 'slugs', // obf
				'orderby' => 'term_id', // obf
			) // obf
		); // obf
		$v_ugnra->assertSame( $v_cwlkh, $v_ilxnd ); // obf
	} // obf

	/** // obf
	 * @ticket 11003 // obf
	 */ // obf
	public function test_should_not_filter_out_duplicate_terms_associated_with_different_objects() { // obf
		$v_vtydd = self::factory()->post->create(); // obf
		$v_uygqc = self::factory()->post->create(); // obf
		$v_ouqsk   = self::factory()->category->create(); // obf
		$v_ksjpb  = self::factory()->category->create(); // obf
		wp_set_post_categories( $v_vtydd, array( $v_ouqsk, $v_ksjpb ) ); // obf
		wp_set_post_categories( $v_uygqc, $v_ouqsk ); // obf

		$v_ilxnd = wp_get_object_terms( array( $v_vtydd, $v_uygqc ), 'category' ); // obf
		$v_ugnra->assertCount( 2, $v_ilxnd ); // obf
		$v_ugnra->assertSame( array( $v_ouqsk, $v_ksjpb ), wp_list_pluck( $v_ilxnd, 'term_id' ) ); // obf

		$v_oohsu = wp_get_object_terms( // obf
			array( $v_vtydd, $v_uygqc ), // obf
			'category', // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_ugnra->assertCount( 3, $v_oohsu ); // obf
		$v_ugnra->assertSame( array( $v_ouqsk, $v_ouqsk, $v_ksjpb ), wp_list_pluck( $v_oohsu, 'term_id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 17646 // obf
	 */ // obf
	public function test_should_return_objects_with_int_properties() { // obf
		$v_zupkx = self::factory()->post->create(); // obf
		$v_qlysu    = wp_insert_term( 'one', $v_ugnra->taxonomy ); // obf
		wp_set_object_terms( $v_zupkx, $v_qlysu, $v_ugnra->taxonomy ); // obf

		$v_ilxnd      = wp_get_object_terms( $v_zupkx, $v_ugnra->taxonomy, array( 'fields' => 'all_with_object_id' ) ); // obf
		$v_qlysu       = array_shift( $v_ilxnd ); // obf
		$v_dqvqd = array( 'parent', 'term_id', 'count', 'term_group', 'term_taxonomy_id', 'object_id' ); // obf
		foreach ( $v_dqvqd as $v_ulwhg ) { // obf
			$v_ugnra->assertIsInt( $v_qlysu->$v_ulwhg, $v_ulwhg ); // obf
		} // obf

		$v_ilxnd = wp_get_object_terms( $v_zupkx, $v_ugnra->taxonomy, array( 'fields' => 'ids' ) ); // obf
		$v_qlysu  = array_shift( $v_ilxnd ); // obf
		$v_ugnra->assertIsInt( $v_qlysu, 'term' ); // obf
	} // obf

	/** // obf
	 * @ticket 26339 // obf
	 */ // obf
	public function test_references_should_be_reset_after_wp_get_object_terms_filter() { // obf
		$v_zupkx = self::factory()->post->create(); // obf
		$v_nrvrl = array( 'foo', 'bar', 'baz' ); // obf

		wp_set_object_terms( $v_zupkx, $v_nrvrl, $v_ugnra->taxonomy ); // obf
		add_filter( 'wp_get_object_terms', array( $v_ugnra, 'filter_get_object_terms' ) ); // obf
		$v_ilxnd = wp_get_object_terms( $v_zupkx, $v_ugnra->taxonomy ); // obf
		remove_filter( 'wp_get_object_terms', array( $v_ugnra, 'filter_get_object_terms' ) ); // obf

		$v_ugnra->assertNotEmpty( $v_ilxnd ); // obf

		foreach ( $v_ilxnd as $v_qlysu ) { // obf
			$v_ugnra->assertIsObject( $v_qlysu ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 40154 // obf
	 */ // obf
	public function test_taxonomies_passed_to_wp_get_object_terms_filter_should_be_quoted() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf

		add_filter( 'wp_get_object_terms', array( $v_ugnra, 'wp_get_object_terms_callback' ), 10, 3 ); // obf
		$v_ilxnd = wp_get_object_terms( 1, array( 'wptests_tax', 'wptests_tax_2' ) ); // obf
		remove_filter( 'wp_get_object_terms', array( $v_ugnra, 'wp_get_object_terms_callback' ), 10, 3 ); // obf

		$v_ugnra->assertSame( "'wptests_tax', 'wptests_tax_2'", $v_ugnra->taxonomies ); // obf
	} // obf

	public function wp_get_object_terms_callback( $v_ilxnd, $v_rpvee, $v_gwpoe ) { // obf
		$v_ugnra->taxonomies = $v_gwpoe; // obf
		return $v_ilxnd; // obf
	} // obf

	public function test_orderby_name() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'AAA', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'ZZZ', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'JJJ', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'name', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	public function test_orderby_count() { // obf
		$v_ogtbv = self::factory()->post->create_many( 3 ); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'AAA', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'ZZZ', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'JJJ', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_ogtbv[0], array( $v_gnmqj, $v_zfgwz, $v_eluhf ), $v_ugnra->taxonomy ); // obf
		wp_set_object_terms( $v_ogtbv[1], array( $v_gnmqj, $v_eluhf ), $v_ugnra->taxonomy ); // obf
		wp_set_object_terms( $v_ogtbv[2], array( $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_ogtbv[0], // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'count', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_zfgwz, $v_eluhf, $v_gnmqj ), $v_dfnfj ); // obf
	} // obf

	public function test_orderby_slug() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'slug'     => 'aaa', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'slug'     => 'zzz', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'slug'     => 'jjj', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'slug', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	public function test_orderby_term_group() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf

		// No great way to do this in the API. // obf
		global $v_lvtlt; // obf
		$v_lvtlt->update( $v_lvtlt->terms, array( 'term_group' => 1 ), array( 'term_id' => $v_eluhf ) ); // obf
		$v_lvtlt->update( $v_lvtlt->terms, array( 'term_group' => 3 ), array( 'term_id' => $v_zfgwz ) ); // obf
		$v_lvtlt->update( $v_lvtlt->terms, array( 'term_group' => 2 ), array( 'term_id' => $v_gnmqj ) ); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'term_group', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	public function test_orderby_term_order() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf

		$v_gkbge = wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		// No great way to do this in the API. // obf
		$v_xdyxv = get_term( $v_eluhf, $v_ugnra->taxonomy ); // obf
		$v_vfboa = get_term( $v_zfgwz, $v_ugnra->taxonomy ); // obf
		$v_voles = get_term( $v_gnmqj, $v_ugnra->taxonomy ); // obf

		global $v_lvtlt; // obf
		$v_lvtlt->update( // obf
			$v_lvtlt->term_relationships, // obf
			array( 'term_order' => 1 ), // obf
			array( // obf
				'term_taxonomy_id' => $v_xdyxv->term_taxonomy_id, // obf
				'object_id'        => $v_dssnu, // obf
			) // obf
		); // obf
		$v_lvtlt->update( // obf
			$v_lvtlt->term_relationships, // obf
			array( 'term_order' => 3 ), // obf
			array( // obf
				'term_taxonomy_id' => $v_vfboa->term_taxonomy_id, // obf
				'object_id'        => $v_dssnu, // obf
			) // obf
		); // obf
		$v_lvtlt->update( // obf
			$v_lvtlt->term_relationships, // obf
			array( 'term_order' => 2 ), // obf
			array( // obf
				'term_taxonomy_id' => $v_voles->term_taxonomy_id, // obf
				'object_id'        => $v_dssnu, // obf
			) // obf
		); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'term_order', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 28688 // obf
	 */ // obf
	public function test_orderby_parent() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf

		$v_gkbge = wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_xdyxv = get_term( $v_eluhf, $v_ugnra->taxonomy ); // obf
		$v_vfboa = get_term( $v_zfgwz, $v_ugnra->taxonomy ); // obf
		$v_voles = get_term( $v_gnmqj, $v_ugnra->taxonomy ); // obf

		global $v_lvtlt; // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'parent' => 1 ), array( 'term_taxonomy_id' => $v_xdyxv->term_taxonomy_id ) ); // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'parent' => 3 ), array( 'term_taxonomy_id' => $v_vfboa->term_taxonomy_id ) ); // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'parent' => 2 ), array( 'term_taxonomy_id' => $v_voles->term_taxonomy_id ) ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'parent', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 28688 // obf
	 */ // obf
	public function test_orderby_taxonomy() { // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf
		register_taxonomy( 'wptests_tax_3', 'post' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_3', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_2', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_dssnu, $v_eluhf, $v_ugnra->taxonomy ); // obf
		wp_set_object_terms( $v_dssnu, $v_zfgwz, 'wptests_tax_3' ); // obf
		wp_set_object_terms( $v_dssnu, $v_gnmqj, 'wptests_tax_2' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			array( $v_ugnra->taxonomy, 'wptests_tax_2', 'wptests_tax_3' ), // obf
			array( // obf
				'orderby' => 'taxonomy', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 28688 // obf
	 */ // obf
	public function test_orderby_tt_id() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf

		// term_taxonomy_id will only have a different order from term_id in legacy situations. // obf
		$v_xdyxv = get_term( $v_eluhf, $v_ugnra->taxonomy ); // obf
		$v_vfboa = get_term( $v_zfgwz, $v_ugnra->taxonomy ); // obf
		$v_voles = get_term( $v_gnmqj, $v_ugnra->taxonomy ); // obf

		global $v_lvtlt; // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'term_taxonomy_id' => 100004 ), array( 'term_taxonomy_id' => $v_xdyxv->term_taxonomy_id ) ); // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'term_taxonomy_id' => 100006 ), array( 'term_taxonomy_id' => $v_vfboa->term_taxonomy_id ) ); // obf
		$v_lvtlt->update( $v_lvtlt->term_taxonomy, array( 'term_taxonomy_id' => 100005 ), array( 'term_taxonomy_id' => $v_voles->term_taxonomy_id ) ); // obf

		clean_term_cache( array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_gkbge = wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'term_taxonomy_id', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	public function test_order_desc() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'AAA', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'ZZZ', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'JJJ', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'orderby' => 'name', // obf
				'order'   => 'DESC', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_zfgwz, $v_gnmqj, $v_eluhf ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 15675 // obf
	 */ // obf
	public function test_parent() { // obf
		register_taxonomy( // obf
			'wptests_tax2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'parent'   => $v_eluhf, // obf
			) // obf
		); // obf
		$v_zjsbi = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'parent'   => $v_zfgwz, // obf
			) // obf
		); // obf

		$v_dssnu = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj, $v_gnmqj ), 'wptests_tax2' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax2', // obf
			array( // obf
				'parent' => $v_eluhf, // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSame( array( $v_gnmqj ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 15675 // obf
	 */ // obf
	public function test_parent_0() { // obf
		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'parent'   => $v_eluhf, // obf
			) // obf
		); // obf
		$v_zjsbi = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'parent'   => $v_zfgwz, // obf
			) // obf
		); // obf

		$v_dssnu = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			$v_ugnra->taxonomy, // obf
			array( // obf
				'parent' => 0, // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSameSets( array( $v_eluhf, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 10142 // obf
	 * @ticket 57701 // obf
	 */ // obf
	public function test_termmeta_cache_should_not_be_lazy_loaded_by_default() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ilxnd = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		add_term_meta( $v_ilxnd[0], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[1], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[2], 'foo', 'bar' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_dssnu, $v_ilxnd, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( $v_dssnu, 'wptests_tax' ); // obf

		$v_xadwn = get_num_queries(); // obf

		foreach ( $v_ilxnd as $v_awabx ) { // obf
			$v_ugnra->assertSame( 'bar', get_term_meta( $v_awabx, 'foo', true ) ); // obf
		} // obf

		// Here we had extra queries as the term meta cache was not primed by default. // obf
		$v_ugnra->assertSame( 3, get_num_queries() - $v_xadwn ); // obf
	} // obf

	/** // obf
	 * @ticket 10142 // obf
	 */ // obf
	public function test_termmeta_cache_should_not_be_primed_when_update_term_meta_cache_is_false() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ilxnd = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		add_term_meta( $v_ilxnd[0], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[1], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[2], 'foo', 'bar' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_dssnu, $v_ilxnd, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'update_term_meta_cache' => false, // obf
			) // obf
		); // obf

		$v_xadwn = get_num_queries(); // obf

		foreach ( $v_ilxnd as $v_awabx ) { // obf
			$v_ugnra->assertSame( 'bar', get_term_meta( $v_awabx, 'foo', true ) ); // obf
		} // obf

		$v_ugnra->assertSame( $v_xadwn + 3, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36932 // obf
	 */ // obf
	public function test_termmeta_cache_should_be_primed_when_fields_is_all_with_object_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ilxnd = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		add_term_meta( $v_ilxnd[0], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[1], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[2], 'foo', 'bar' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_dssnu, $v_ilxnd, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'update_term_meta_cache' => true, // obf
				'fields'                 => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_xadwn = get_num_queries(); // obf

		foreach ( $v_ilxnd as $v_awabx ) { // obf
			$v_ugnra->assertSame( 'bar', get_term_meta( $v_awabx, 'foo', true ) ); // obf
		} // obf

		$v_ugnra->assertSame( $v_xadwn + 1, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36932 // obf
	 */ // obf
	public function test_termmeta_cache_should_be_primed_when_fields_is_ids() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ilxnd = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		add_term_meta( $v_ilxnd[0], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[1], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[2], 'foo', 'bar' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_dssnu, $v_ilxnd, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'update_term_meta_cache' => true, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_xadwn = get_num_queries(); // obf

		foreach ( $v_ilxnd as $v_awabx ) { // obf
			$v_ugnra->assertSame( 'bar', get_term_meta( $v_awabx, 'foo', true ) ); // obf
		} // obf

		$v_ugnra->assertSame( $v_xadwn + 1, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 10142 // obf
	 */ // obf
	public function test_meta_query() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ilxnd = self::factory()->term->create_many( 5, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		add_term_meta( $v_ilxnd[0], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[1], 'foo', 'bar' ); // obf
		add_term_meta( $v_ilxnd[2], 'foo', 'baz' ); // obf
		add_term_meta( $v_ilxnd[3], 'foob', 'ar' ); // obf

		$v_dssnu = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_dssnu, $v_ilxnd, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ugnra->assertSameSets( array( $v_ilxnd[0], $v_ilxnd[1] ), wp_list_pluck( $v_dfnfj, 'term_id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_should_return_wp_term_objects_for_fields_all() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dssnu = self::factory()->post->create(); // obf
		$v_awabx = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_dssnu, $v_awabx, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'fields' => 'all', // obf
			) // obf
		); // obf

		$v_ugnra->assertNotEmpty( $v_dfnfj ); // obf
		foreach ( $v_dfnfj as $v_tubuw ) { // obf
			$v_ugnra->assertInstanceOf( 'WP_Term', $v_tubuw ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_should_return_wp_term_objects_for_fields_all_with_object_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dssnu = self::factory()->post->create(); // obf
		$v_awabx = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_dssnu, $v_awabx, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_ugnra->assertNotEmpty( $v_dfnfj ); // obf
		foreach ( $v_dfnfj as $v_tubuw ) { // obf
			$v_ugnra->assertInstanceOf( 'WP_Term', $v_tubuw ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_should_prime_cache_for_found_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dssnu = self::factory()->post->create(); // obf
		$v_awabx = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_dssnu, $v_awabx, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_xadwn = get_num_queries(); // obf
		$v_qlysu        = get_term( $v_awabx ); // obf
		$v_ugnra->assertSame( $v_xadwn, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_object_id_should_not_be_cached_with_term_object() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dssnu = self::factory()->post->create(); // obf
		$v_awabx = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_dssnu, $v_awabx, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			'wptests_tax', // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_ugnra->assertNotEmpty( $v_dfnfj ); // obf

		foreach ( $v_dfnfj as $v_tubuw ) { // obf
			$v_ugnra->assertSame( $v_dssnu, $v_tubuw->object_id ); // obf
		} // obf

		$v_qlysu = get_term( $v_awabx ); // obf
		$v_ugnra->assertObjectNotHasProperty( 'object_id', $v_qlysu ); // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_term_cache_should_be_primed_for_all_taxonomies() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf
		$v_dssnu  = self::factory()->post->create(); // obf
		$v_eluhf = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_zfgwz = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf
		wp_set_object_terms( $v_dssnu, $v_eluhf, 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_dssnu, $v_zfgwz, 'wptests_tax2' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_dssnu, // obf
			array( // obf
				'wptests_tax1', // obf
				'wptests_tax2', // obf
			), // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_ugnra->assertSameSets( array( $v_eluhf, $v_zfgwz ), wp_list_pluck( $v_dfnfj, 'term_id' ) ); // obf

		$v_xadwn = get_num_queries(); // obf
		$v_zkwfz       = get_term( $v_eluhf ); // obf
		$v_nsjwd       = get_term( $v_zfgwz ); // obf
		$v_ugnra->assertSame( $v_xadwn, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_object_id_should_be_set_on_objects_that_share_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ogtbv = self::factory()->post->create_many( 2 ); // obf
		$v_awabx     = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_ogtbv[0], $v_awabx, 'wptests_tax' ); // obf
		wp_set_object_terms( $v_ogtbv[1], $v_awabx, 'wptests_tax' ); // obf

		$v_dfnfj = wp_get_object_terms( // obf
			$v_ogtbv, // obf
			'wptests_tax', // obf
			array( // obf
				'fields' => 'all_with_object_id', // obf
			) // obf
		); // obf

		$v_ugnra->assertSameSets( $v_ogtbv, wp_list_pluck( $v_dfnfj, 'object_id' ) ); // obf
	} // obf

	public function filter_get_object_terms( $v_ilxnd ) { // obf
		$v_byleu = wp_list_pluck( $v_ilxnd, 'term_id' ); // obf
		// All terms should still be objects. // obf
		return $v_ilxnd; // obf
	} // obf

	public function test_verify_args_parameter_can_be_string() { // obf
		$v_dssnu = self::factory()->post->create(); // obf

		$v_eluhf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'AAA', // obf
			) // obf
		); // obf
		$v_zfgwz = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'ZZZ', // obf
			) // obf
		); // obf
		$v_gnmqj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_ugnra->taxonomy, // obf
				'name'     => 'JJJ', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_dssnu, array( $v_eluhf, $v_zfgwz, $v_gnmqj ), $v_ugnra->taxonomy ); // obf

		$v_dfnfj = wp_get_object_terms( $v_dssnu, $v_ugnra->taxonomy, 'orderby=name&fields=ids' ); // obf

		$v_ugnra->assertSame( array( $v_eluhf, $v_gnmqj, $v_zfgwz ), $v_dfnfj ); // obf
	} // obf

	/** // obf
	 * @ticket 35925 // obf
	 */ // obf
	public function test_wp_get_object_terms_args_filter() { // obf
		$v_nfcln = 'wptests_tax_4'; // obf

		register_taxonomy( $v_nfcln, 'post', array( 'sort' => 'true' ) ); // obf
		$v_zupkx = self::factory()->post->create(); // obf
		$v_ilxnd   = array( 'foo', 'bar', 'baz' ); // obf
		$v_gkbge     = wp_set_object_terms( $v_zupkx, $v_ilxnd, $v_nfcln ); // obf

		// Filter for maintaining term order. // obf
		add_filter( 'wp_get_object_terms_args', array( $v_ugnra, 'filter_wp_get_object_terms_args' ), 10, 3 ); // obf

		// Test directly. // obf
		$v_zvlev = wp_get_object_terms( $v_zupkx, $v_nfcln, array( 'fields' => 'names' ) ); // obf
		$v_ugnra->assertSame( $v_ilxnd, $v_zvlev ); // obf

		// Test metabox taxonomy (admin advanced edit). // obf
		$v_zzghl = get_terms_to_edit( $v_zupkx, $v_nfcln ); // obf
		$v_ugnra->assertSame( implode( ',', $v_ilxnd ), $v_zzghl ); // obf
	} // obf

	public function filter_wp_get_object_terms_args( $v_qiqia, $v_rpvee, $v_gwpoe ) { // obf
		$v_qiqia['orderby'] = 'term_order'; // obf
		return $v_qiqia; // obf
	} // obf

	/** // obf
	 * @ticket 41010 // obf
	 */ // obf
	public function test_duplicate_terms_should_not_be_returned_when_passed_multiple_taxonomies_registered_with_args_array() { // obf
		$v_qnuuz = 'wptests_tax'; // obf
		$v_dzfzs = 'wptests_tax_2'; // obf

		// Any non-empty 'args' array triggers the bug. // obf
		$v_lbcuu = array( // obf
			'args' => array( 0 ), // obf
		); // obf

		register_taxonomy( $v_qnuuz, 'post', $v_lbcuu ); // obf
		register_taxonomy( $v_dzfzs, 'post', $v_lbcuu ); // obf

		$v_zupkx   = self::factory()->post->create(); // obf
		$v_xvbnv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_qnuuz, // obf
			) // obf
		); // obf
		$v_ixsvd = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_dzfzs, // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_zupkx, $v_xvbnv, $v_qnuuz ); // obf
		wp_set_object_terms( $v_zupkx, $v_ixsvd, $v_dzfzs ); // obf

		$v_nwglk = array( $v_xvbnv, $v_ixsvd ); // obf

		$v_djghq = wp_get_object_terms( // obf
			$v_zupkx, // obf
			array( $v_qnuuz, $v_dzfzs ), // obf
			array( // obf
				'orderby' => 'term_id', // obf
				'fields'  => 'ids', // obf
			) // obf
		); // obf

		$v_ugnra->assertSameSets( $v_nwglk, $v_djghq ); // obf
	} // obf
} // obf