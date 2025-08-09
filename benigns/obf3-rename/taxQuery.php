

<?php // obf

/** // obf
 * @group query // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Query_TaxQuery extends WP_UnitTestCase { // obf
	public function test_tax_query_single_query_single_term_field_slug() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_field_name() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'Foo' ), // obf
						'field'    => 'name', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 27810 // obf
	 */ // obf
	public function test_field_name_should_work_for_names_with_spaces() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, $v_rtnry, 'wptests_tax' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax', // obf
						'terms'    => array( 'Foo Bar' ), // obf
						'field'    => 'name', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_field_term_taxonomy_id() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		$v_dgxsx = wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => $v_dgxsx, // obf
						'field'    => 'term_taxonomy_id', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_field_term_id() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( $v_rtnry ), // obf
						'field'    => 'term_id', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_operator_in() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_operator_not_in() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'NOT IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_single_term_operator_and() { // obf
		$v_rtnry  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_rtnry, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'AND', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_beidr ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_multiple_terms_operator_in() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_post_terms( $v_ifeou, $v_kqhtv, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo', 'bar' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_multiple_terms_operator_not_in() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_post_terms( $v_ifeou, $v_kqhtv, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo', 'bar' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'NOT IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_mrvat ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 18105 // obf
	 */ // obf
	public function test_tax_query_single_query_multiple_queries_operator_not_in() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_post_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_post_terms( $v_ifeou, $v_kqhtv, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'NOT IN', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'NOT IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_mrvat ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_single_query_multiple_terms_operator_and() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_zjxzk, $v_kqhtv ), 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo', 'bar' ), // obf
						'field'    => 'slug', // obf
						'operator' => 'AND', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29181 // obf
	 */ // obf
	public function test_tax_query_operator_not_exists() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		$v_zjxzk = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_kqhtv = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_zjxzk ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_kqhtv ), 'wptests_tax2' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'orderby'   => 'ID', // obf
				'order'     => 'ASC', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax2', // obf
						'operator' => 'NOT EXISTS', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_mrvat ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 36343 // obf
	 */ // obf
	public function test_tax_query_operator_not_exists_combined() { // obf
		register_post_type( 'wptests_cpt1' ); // obf
		register_taxonomy( 'wptests_tax1', 'wptests_cpt1' ); // obf
		register_taxonomy( 'wptests_tax2', 'wptests_cpt1' ); // obf

		$v_zjxzk = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_kqhtv = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_zynxu = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_beidr = self::factory()->post->create( array( 'post_type' => 'wptests_cpt1' ) ); // obf
		$v_ifeou = self::factory()->post->create( array( 'post_type' => 'wptests_cpt1' ) ); // obf
		$v_mrvat = self::factory()->post->create( array( 'post_type' => 'wptests_cpt1' ) ); // obf
		$v_byffl = self::factory()->post->create( array( 'post_type' => 'wptests_cpt1' ) ); // obf

		wp_set_object_terms( $v_beidr, array( $v_zjxzk ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_kqhtv ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_zynxu ), 'wptests_tax2' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'post_type' => 'wptests_cpt1', // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'wptests_tax1', // obf
						'operator' => 'NOT EXISTS', // obf
					), // obf
					array( // obf
						'taxonomy' => 'wptests_tax1', // obf
						'field'    => 'slug', // obf
						'terms'    => get_term_field( 'slug', $v_zjxzk ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		unregister_post_type( 'wptests_cpt1' ); // obf
		unregister_taxonomy( 'wptests_tax1' ); // obf
		unregister_taxonomy( 'wptests_tax2' ); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_mrvat, $v_byffl ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29181 // obf
	 */ // obf
	public function test_tax_query_operator_exists() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		$v_zjxzk = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_kqhtv = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_zjxzk ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_kqhtv ), 'wptests_tax2' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'orderby'   => 'ID', // obf
				'order'     => 'ASC', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax2', // obf
						'operator' => 'EXISTS', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29181 // obf
	 */ // obf
	public function test_tax_query_operator_exists_should_ignore_terms() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		$v_zjxzk = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_kqhtv = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_zjxzk ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_kqhtv ), 'wptests_tax2' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'orderby'   => 'ID', // obf
				'order'     => 'ASC', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax2', // obf
						'operator' => 'EXISTS', // obf
						'terms'    => array( 'foo', 'bar' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29181 // obf
	 */ // obf
	public function test_tax_query_operator_exists_with_no_taxonomy() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		$v_zjxzk = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_kqhtv = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_zjxzk ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_kqhtv ), 'wptests_tax2' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'orderby'   => 'ID', // obf
				'order'     => 'ASC', // obf
				'tax_query' => array( // obf
					array( // obf
						'operator' => 'EXISTS', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertEmpty( $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_multiple_queries_relation_and() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_zjxzk, $v_kqhtv ), 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'slug', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_multiple_queries_relation_or() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, $v_zjxzk, 'category' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_zjxzk, $v_kqhtv ), 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'slug', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	public function test_tax_query_multiple_queries_different_taxonomies() { // obf
		$v_zjxzk = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_kqhtv = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf
		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, $v_zjxzk, 'post_tag' ); // obf
		wp_set_object_terms( $v_ifeou, $v_kqhtv, 'category' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'terms'    => array( 'foo' ), // obf
						'field'    => 'slug', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'slug', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_tax_query_two_nested_queries() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		register_taxonomy( 'bar', 'post' ); // obf

		$v_nkzzc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_xehwo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_uzxte = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf
		$v_vbdnw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_beidr, array( $v_uzxte ), 'bar' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_xehwo ), 'foo' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_vbdnw ), 'bar' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_vbdnw ), 'bar' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'taxonomy' => 'foo', // obf
							'terms'    => array( $v_nkzzc ), // obf
							'field'    => 'term_id', // obf
						), // obf
						array( // obf
							'taxonomy' => 'bar', // obf
							'terms'    => array( $v_uzxte ), // obf
							'field'    => 'term_id', // obf
						), // obf
					), // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'taxonomy' => 'foo', // obf
							'terms'    => array( $v_xehwo ), // obf
							'field'    => 'term_id', // obf
						), // obf
						array( // obf
							'taxonomy' => 'bar', // obf
							'terms'    => array( $v_vbdnw ), // obf
							'field'    => 'term_id', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		_unregister_taxonomy( 'foo' ); // obf
		_unregister_taxonomy( 'bar' ); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_tax_query_one_nested_query_one_first_order_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		register_taxonomy( 'bar', 'post' ); // obf

		$v_nkzzc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_xehwo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_uzxte = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf
		$v_vbdnw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_beidr, array( $v_uzxte ), 'bar' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_xehwo ), 'foo' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_vbdnw ), 'bar' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_vbdnw ), 'bar' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_xehwo ), // obf
						'field'    => 'term_id', // obf
					), // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'taxonomy' => 'foo', // obf
							'terms'    => array( $v_nkzzc ), // obf
							'field'    => 'term_id', // obf
						), // obf
						array( // obf
							'taxonomy' => 'bar', // obf
							'terms'    => array( $v_uzxte ), // obf
							'field'    => 'term_id', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		_unregister_taxonomy( 'foo' ); // obf
		_unregister_taxonomy( 'bar' ); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_tax_query_one_double_nested_query_one_first_order_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		register_taxonomy( 'bar', 'post' ); // obf

		$v_nkzzc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_xehwo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_uzxte = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf
		$v_vbdnw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'bar', // obf
			) // obf
		); // obf

		$v_beidr = self::factory()->post->create(); // obf
		$v_ifeou = self::factory()->post->create(); // obf
		$v_mrvat = self::factory()->post->create(); // obf
		$v_byffl = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_beidr, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_beidr, array( $v_uzxte ), 'bar' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_xehwo ), 'foo' ); // obf
		wp_set_object_terms( $v_ifeou, array( $v_vbdnw ), 'bar' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_nkzzc ), 'foo' ); // obf
		wp_set_object_terms( $v_mrvat, array( $v_vbdnw ), 'bar' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_xehwo ), // obf
						'field'    => 'term_id', // obf
					), // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'taxonomy' => 'foo', // obf
							'terms'    => array( $v_nkzzc ), // obf
							'field'    => 'term_id', // obf
						), // obf
						array( // obf
							'relation' => 'OR', // obf
							array( // obf
								'taxonomy' => 'bar', // obf
								'terms'    => array( $v_uzxte ), // obf
								'field'    => 'term_id', // obf
							), // obf
							array( // obf
								'taxonomy' => 'bar', // obf
								'terms'    => array( $v_vbdnw ), // obf
								'field'    => 'term_id', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		_unregister_taxonomy( 'foo' ); // obf
		_unregister_taxonomy( 'bar' ); // obf

		$v_jujtb->assertSameSets( array( $v_beidr, $v_ifeou, $v_mrvat ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * An empty tax query should return an empty array, not all posts. // obf
	 * // obf
	 * @ticket 20604 // obf
	 */ // obf
	public function test_tax_query_relation_or_both_clauses_empty_terms() { // obf
		self::factory()->post->create_many( 2 ); // obf

		$v_rymaa = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_term_cache' => false, // obf
				'update_post_meta_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'field'    => 'id', // obf
						'terms'    => false, // obf
						'operator' => 'IN', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'field'    => 'id', // obf
						'terms'    => false, // obf
						'operator' => 'IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 0, $v_rymaa->posts ); // obf
	} // obf

	/** // obf
	 * An empty tax query should return an empty array, not all posts. // obf
	 * // obf
	 * @ticket 20604 // obf
	 */ // obf
	public function test_tax_query_relation_or_one_clause_empty_terms() { // obf
		self::factory()->post->create_many( 2 ); // obf

		$v_rymaa = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_term_cache' => false, // obf
				'update_post_meta_cache' => false, // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'field'    => 'id', // obf
						'terms'    => array( 'foo' ), // obf
						'operator' => 'IN', // obf
					), // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'field'    => 'id', // obf
						'terms'    => false, // obf
						'operator' => 'IN', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 0, $v_rymaa->posts ); // obf
	} // obf

	public function test_tax_query_include_children() { // obf
		$v_ktkmn = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'Australia', // obf
			) // obf
		); // obf
		$v_ggzeo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'Sydney', // obf
				'parent'   => $v_ktkmn, // obf
			) // obf
		); // obf
		$v_zmkkc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'East Syndney', // obf
				'parent'   => $v_ggzeo, // obf
			) // obf
		); // obf
		$v_rxjbc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'West Syndney', // obf
				'parent'   => $v_ggzeo, // obf
			) // obf
		); // obf

		$v_frmcv = self::factory()->post->create( array( 'post_category' => array( $v_ktkmn ) ) ); // obf
		$v_vrrrm = self::factory()->post->create( array( 'post_category' => array( $v_ggzeo ) ) ); // obf
		$v_etaew = self::factory()->post->create( array( 'post_category' => array( $v_zmkkc ) ) ); // obf
		$v_tpvgh = self::factory()->post->create( array( 'post_category' => array( $v_rxjbc ) ) ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'field'    => 'id', // obf
						'terms'    => array( $v_ktkmn ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 4, $v_pnwkn ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy'         => 'category', // obf
						'field'            => 'id', // obf
						'terms'            => array( $v_ktkmn ), // obf
						'include_children' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 1, $v_pnwkn ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'field'    => 'id', // obf
						'terms'    => array( $v_ggzeo ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 3, $v_pnwkn ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy'         => 'category', // obf
						'field'            => 'id', // obf
						'terms'            => array( $v_ggzeo ), // obf
						'include_children' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 1, $v_pnwkn ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'field'    => 'id', // obf
						'terms'    => array( $v_zmkkc ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 1, $v_pnwkn ); // obf

		$v_pnwkn = get_posts( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy'         => 'category', // obf
						'field'            => 'id', // obf
						'terms'            => array( $v_zmkkc ), // obf
						'include_children' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertCount( 1, $v_pnwkn ); // obf
	} // obf

	public function test_tax_query_taxonomy_with_attachments() { // obf
		$v_xtdyu = new WP_Query(); // obf

		register_taxonomy_for_object_type( 'post_tag', 'attachment:image' ); // obf
		$v_yekja   = self::factory()->term->create( // obf
			array( // obf
				'slug' => 'foo-bar', // obf
				'name' => 'Foo Bar', // obf
			) // obf
		); // obf
		$v_ygnyf = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf
		wp_set_object_terms( $v_ygnyf, $v_yekja, 'post_tag' ); // obf

		$v_pnwkn = $v_xtdyu->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'post_type'              => 'attachment', // obf
				'post_status'            => 'inherit', // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'field'    => 'term_id', // obf
						'terms'    => array( $v_yekja ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_ygnyf ), $v_pnwkn ); // obf
	} // obf

	public function test_tax_query_no_taxonomy() { // obf
		$v_cvznm = self::factory()->category->create( array( 'name' => 'alpha' ) ); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'    => 'alpha', // obf
				'post_category' => array( $v_cvznm ), // obf
			) // obf
		); // obf

		$v_ooumc = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					array( 'terms' => array( $v_cvznm ) ), // obf
				), // obf
			) // obf
		); // obf
		$v_jujtb->assertEmpty( $v_ooumc->posts ); // obf

		$v_mclgm = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( $v_cvznm ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_jujtb->assertNotEmpty( $v_mclgm->posts ); // obf

		$v_wvikx      = get_category( $v_cvznm ); // obf
		$v_jeujq = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'tax_query'              => array( // obf
					array( // obf
						'field' => 'term_taxonomy_id', // obf
						'terms' => array( $v_wvikx->term_taxonomy_id ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_jujtb->assertNotEmpty( $v_jeujq->posts ); // obf
	} // obf

	public function test_term_taxonomy_id_field_no_taxonomy() { // obf
		$v_xtdyu = new WP_Query(); // obf

		$v_pnwkn = self::factory()->post->create_many( 5 ); // obf

		$v_pzdxo = array(); // obf
		$v_wfhvq = array(); // obf

		// Need term_taxonomy_ids in addition to term_ids, so no factory. // obf
		for ( $v_oraol = 0; $v_oraol < 5; $v_oraol++ ) { // obf
			$v_pzdxo[ $v_oraol ] = wp_insert_term( 'category-' . $v_oraol, 'category' ); // obf
			$v_wfhvq[ $v_oraol ] = wp_insert_term( 'tag-' . $v_oraol, 'post_tag' ); // obf

			// Post 0 gets all terms. // obf
			wp_set_object_terms( $v_pnwkn[0], array( $v_pzdxo[ $v_oraol ]['term_id'] ), 'category', true ); // obf
			wp_set_object_terms( $v_pnwkn[0], array( $v_wfhvq[ $v_oraol ]['term_id'] ), 'post_tag', true ); // obf
		} // obf

		wp_set_object_terms( $v_pnwkn[1], array( $v_pzdxo[0]['term_id'], $v_pzdxo[2]['term_id'], $v_pzdxo[4]['term_id'] ), 'category' ); // obf
		wp_set_object_terms( $v_pnwkn[1], array( $v_wfhvq[0]['term_id'], $v_wfhvq[2]['term_id'], $v_pzdxo[4]['term_id'] ), 'post_tag' ); // obf

		wp_set_object_terms( $v_pnwkn[2], array( $v_pzdxo[1]['term_id'], $v_pzdxo[3]['term_id'] ), 'category' ); // obf
		wp_set_object_terms( $v_pnwkn[2], array( $v_wfhvq[1]['term_id'], $v_wfhvq[3]['term_id'] ), 'post_tag' ); // obf

		wp_set_object_terms( $v_pnwkn[3], array( $v_pzdxo[0]['term_id'], $v_pzdxo[2]['term_id'], $v_pzdxo[4]['term_id'] ), 'category' ); // obf
		wp_set_object_terms( $v_pnwkn[3], array( $v_wfhvq[1]['term_id'], $v_wfhvq[3]['term_id'] ), 'post_tag' ); // obf

		$v_ltmhs = $v_xtdyu->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'orderby'                => 'ID', // obf
				'order'                  => 'ASC', // obf
				'tax_query'              => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'field'            => 'term_taxonomy_id', // obf
						'terms'            => array( $v_pzdxo[0]['term_taxonomy_id'], $v_pzdxo[2]['term_taxonomy_id'], $v_pzdxo[4]['term_taxonomy_id'], $v_wfhvq[0]['term_taxonomy_id'], $v_wfhvq[2]['term_taxonomy_id'], $v_pzdxo[4]['term_taxonomy_id'] ), // obf
						'operator'         => 'AND', // obf
						'include_children' => false, // obf
					), // obf
					array( // obf
						'field'            => 'term_taxonomy_id', // obf
						'terms'            => array( $v_pzdxo[1]['term_taxonomy_id'], $v_pzdxo[3]['term_taxonomy_id'], $v_wfhvq[1]['term_taxonomy_id'], $v_wfhvq[3]['term_taxonomy_id'] ), // obf
						'operator'         => 'AND', // obf
						'include_children' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_pnwkn[0], $v_pnwkn[1], $v_pnwkn[2] ), $v_ltmhs, 'Relation: OR; Operator: AND' ); // obf

		$v_blfnc = $v_xtdyu->query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'orderby'                => 'ID', // obf
				'order'                  => 'ASC', // obf
				'tax_query'              => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'field'            => 'term_taxonomy_id', // obf
						'terms'            => array( $v_pzdxo[0]['term_taxonomy_id'], $v_wfhvq[0]['term_taxonomy_id'] ), // obf
						'operator'         => 'IN', // obf
						'include_children' => false, // obf
					), // obf
					array( // obf
						'field'            => 'term_taxonomy_id', // obf
						'terms'            => array( $v_pzdxo[3]['term_taxonomy_id'], $v_wfhvq[3]['term_taxonomy_id'] ), // obf
						'operator'         => 'IN', // obf
						'include_children' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( array( $v_pnwkn[0], $v_pnwkn[3] ), $v_blfnc, 'Relation: AND; Operator: IN' ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_populate_taxonomy_query_var_from_tax_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_nopsh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					// Empty terms mean that this one should be skipped. // obf
					array( // obf
						'taxonomy' => 'bar', // obf
						'terms'    => array(), // obf
					), // obf

					// Category and post tags should be skipped. // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( $v_nopsh ), // obf
					), // obf

					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_rtnry ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( 'foo', $v_xtdyu->get( 'taxonomy' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
	} // obf

	public function test_populate_taxonomy_query_var_from_tax_query_taxonomy_already_set() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		register_taxonomy( 'foo1', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'taxonomy'  => 'bar', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_rtnry ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( 'bar', $v_xtdyu->get( 'taxonomy' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
		_unregister_taxonomy( 'foo1' ); // obf
	} // obf

	public function test_populate_term_query_var_from_tax_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'slug', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( 'bar', $v_xtdyu->get( 'term' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
	} // obf

	public function test_populate_term_id_query_var_from_tax_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_rtnry ), // obf
						'field'    => 'term_id', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( $v_rtnry, $v_xtdyu->get( 'term_id' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_populate_cat_category_name_query_var_from_tax_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_nopsh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					// Non-category should be skipped. // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_rtnry ), // obf
					), // obf

					// Empty terms mean that this one should be skipped. // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array(), // obf
					), // obf

					// Category and post tags should be skipped. // obf
					array( // obf
						'taxonomy' => 'category', // obf
						'terms'    => array( $v_nopsh ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( $v_nopsh, $v_xtdyu->get( 'cat' ) ); // obf
		$v_jujtb->assertSame( 'bar', $v_xtdyu->get( 'category_name' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 29738 // obf
	 */ // obf
	public function test_populate_tag_id_query_var_from_tax_query() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_rtnry   = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf
		$v_cgjav = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'tax_query' => array( // obf
					// Non-tag should be skipped. // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( $v_rtnry ), // obf
					), // obf

					// Empty terms mean that this one should be skipped. // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'terms'    => array(), // obf
					), // obf

					// Category and post tags should be skipped. // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'terms'    => array( $v_cgjav ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSame( $v_cgjav, $v_xtdyu->get( 'tag_id' ) ); // obf

		_unregister_taxonomy( 'foo' ); // obf
	} // obf

	/** // obf
	 * @ticket 39315 // obf
	 */ // obf
	public function test_tax_terms_should_not_be_double_escaped() { // obf
		$v_ftvmj = "Don't worry be happy"; // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_rtnry = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => $v_ftvmj, // obf
			) // obf
		); // obf

		$v_okmcy = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_okmcy, array( $v_rtnry ), 'wptests_tax' ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax', // obf
						'field'    => 'name', // obf
						'terms'    => $v_ftvmj, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_jujtb->assertSameSets( array( $v_okmcy ), $v_xtdyu->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 55360 // obf
	 * // obf
	 * @covers WP_Tax_Query::transform_query // obf
	 */ // obf
	public function test_tax_terms_should_limit_query() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ftvmj = 'foobar'; // obf
		$v_rtnry    = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => $v_ftvmj, // obf
			) // obf
		); // obf

		$v_okmcy = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_okmcy, array( $v_rtnry ), 'wptests_tax' ); // obf

		$v_yrhal = new MockAction(); // obf
		add_filter( 'terms_pre_query', array( $v_yrhal, 'filter' ), 10, 2 ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax', // obf
						'field'    => 'name', // obf
						'terms'    => $v_ftvmj, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ijgkl = $v_yrhal->get_args(); // obf
		$v_rymaa       = $v_ijgkl[0][1]->request; // obf

		$v_jujtb->assertSameSets( array( $v_okmcy ), $v_xtdyu->posts ); // obf
		$v_jujtb->assertStringContainsString( 'LIMIT 1', $v_rymaa ); // obf
	} // obf

	/** // obf
	 * @ticket 55360 // obf
	 * // obf
	 * @covers WP_Tax_Query::transform_query // obf
	 */ // obf
	public function test_tax_terms_should_limit_query_to_one() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ftvmj = 'foobar'; // obf
		$v_rtnry    = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => $v_ftvmj, // obf
			) // obf
		); // obf

		$v_okmcy = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_okmcy, array( $v_rtnry ), 'wptests_tax' ); // obf

		$v_yrhal = new MockAction(); // obf
		add_filter( 'terms_pre_query', array( $v_yrhal, 'filter' ), 10, 2 ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax', // obf
						'field'    => 'term_id', // obf
						'terms'    => array( $v_rtnry, $v_rtnry, $v_rtnry ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ijgkl = $v_yrhal->get_args(); // obf
		$v_rymaa       = $v_ijgkl[0][1]->request; // obf

		$v_jujtb->assertSameSets( array( $v_okmcy ), $v_xtdyu->posts ); // obf
		$v_jujtb->assertStringContainsString( 'LIMIT 1', $v_rymaa ); // obf
	} // obf

	/** // obf
	 * @ticket 55360 // obf
	 * // obf
	 * @covers WP_Tax_Query::transform_query // obf
	 */ // obf
	public function test_hierarchical_taxonomies_do_not_limit_query() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_ftvmj = 'foobar'; // obf
		$v_rtnry    = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => $v_ftvmj, // obf
			) // obf
		); // obf

		$v_okmcy = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_okmcy, array( $v_rtnry ), 'wptests_tax' ); // obf

		$v_yrhal = new MockAction(); // obf
		add_filter( 'terms_pre_query', array( $v_yrhal, 'filter' ), 10, 2 ); // obf

		$v_xtdyu = new WP_Query( // obf
			array( // obf
				'fields'    => 'ids', // obf
				'tax_query' => array( // obf
					array( // obf
						'taxonomy' => 'wptests_tax', // obf
						'field'    => 'name', // obf
						'terms'    => $v_ftvmj, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ijgkl = $v_yrhal->get_args(); // obf
		$v_rymaa       = $v_ijgkl[0][1]->request; // obf

		$v_jujtb->assertSameSets( array( $v_okmcy ), $v_xtdyu->posts ); // obf
		$v_jujtb->assertStringNotContainsString( 'LIMIT 1', $v_rymaa ); // obf
	} // obf
} // obf