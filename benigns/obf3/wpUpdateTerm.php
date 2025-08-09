

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpUpdateTerm extends WP_UnitTestCase { // obf
	public function test_wp_update_term_taxonomy_does_not_exist() { // obf
		$v_gczeq = wp_update_term( 1, 'bar' ); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'invalid_taxonomy', $v_gczeq->get_error_code() ); // obf
	} // obf

	public function test_wp_update_term_term_empty_string_should_return_wp_error() { // obf
		$v_gczeq = wp_update_term( '', 'post_tag' ); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'invalid_term', $v_gczeq->get_error_code() ); // obf
	} // obf

	public function test_wp_update_term_unslash_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'name' => 'Let\\\'s all say \\"Hooray\\" for WordPress taxonomy', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_gczeq['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 'Let\'s all say "Hooray" for WordPress taxonomy', $v_crqap->name ); // obf
	} // obf

	public function test_wp_update_term_unslash_description() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'description' => 'Let\\\'s all say \\"Hooray\\" for WordPress taxonomy', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_gczeq['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 'Let\'s all say "Hooray" for WordPress taxonomy', $v_crqap->description ); // obf
	} // obf

	public function test_wp_update_term_name_empty_string() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'name' => '', // obf
			) // obf
		); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'empty_term_name', $v_gczeq->get_error_code() ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 29614 // obf
	 */ // obf
	public function test_wp_update_term_parent_does_not_exist() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_dkjaz = 787878; // obf

		$v_lbkbh->assertNull( term_exists( $v_dkjaz, 'wptests_tax' ) ); // obf

		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_dkjaz, // obf
			) // obf
		); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'missing_parent', $v_gczeq->get_error_code() ); // obf

		$v_crqap = get_term( $v_xinvc, 'wptests_tax' ); // obf
		$v_lbkbh->assertSame( 0, $v_crqap->parent ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_slug_empty_string_while_not_updating_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Foo Bar', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => '', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_xinvc, 'wptests_tax' ); // obf
		$v_lbkbh->assertSame( 'foo-bar', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_slug_empty_string_while_updating_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'name' => 'Foo Bar', // obf
				'slug' => '', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_xinvc, 'wptests_tax' ); // obf
		$v_lbkbh->assertSame( 'foo-bar', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_slug_set_slug() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo-bar', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_xinvc, 'wptests_tax' ); // obf
		$v_lbkbh->assertSame( 'foo-bar', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_update_term_should_not_create_duplicate_slugs_within_the_same_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_oowuk = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_lbkbh->assertWPError( $v_oowuk ); // obf
		$v_lbkbh->assertSame( 'duplicate_term_slug', $v_oowuk->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_update_term_should_allow_duplicate_slugs_in_different_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax_2', // obf
			) // obf
		); // obf

		$v_oowuk = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax_2', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_lbkbh->assertNotWPError( $v_oowuk ); // obf

		$v_dzbrm = get_term( $v_tsfgq, 'wptests_tax' ); // obf
		$v_olphb = get_term( $v_ogmbf, 'wptests_tax_2' ); // obf
		$v_lbkbh->assertSame( $v_dzbrm->slug, $v_olphb->slug ); // obf
	} // obf

	/** // obf
	 * @ticket 30780 // obf
	 */ // obf
	public function test_wp_update_term_should_allow_duplicate_names_in_different_taxonomies() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax_2', // obf
			) // obf
		); // obf

		$v_oowuk = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax_2', // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf

		$v_lbkbh->assertNotWPError( $v_oowuk ); // obf

		$v_olphb = get_term( $v_ogmbf, 'wptests_tax_2' ); // obf
		$v_lbkbh->assertSame( 'Foo', $v_olphb->name ); // obf
	} // obf

	/** // obf
	 * @ticket 30780 // obf
	 */ // obf
	public function test_wp_update_term_should_allow_duplicate_names_at_different_levels_of_the_same_taxonomy() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_tsfgq, // obf
			) // obf
		); // obf

		$v_ztuhw = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar Child', // obf
				'slug'     => 'bar-child', // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_ogmbf, // obf
			) // obf
		); // obf

		$v_oowuk = wp_update_term( // obf
			$v_ztuhw, // obf
			'wptests_tax', // obf
			array( // obf
				'name' => 'Bar', // obf
			) // obf
		); // obf

		$v_lbkbh->assertNotWPError( $v_oowuk ); // obf

		$v_qngri = get_term( $v_ztuhw, 'wptests_tax' ); // obf
		$v_lbkbh->assertSame( 'Bar', $v_qngri->name ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_update_term_should_split_shared_term() { // obf
		global $v_teiqt; // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf

		$v_tsfgq = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		$v_ogmbf = wp_insert_term( 'Foo', 'wptests_tax_2' ); // obf

		// Manually modify because shared terms shouldn't naturally occur. // obf
		$v_teiqt->update( // obf
			$v_teiqt->term_taxonomy, // obf
			array( 'term_id' => $v_tsfgq['term_id'] ), // obf
			array( 'term_taxonomy_id' => $v_ogmbf['term_taxonomy_id'] ), // obf
			array( '%d' ), // obf
			array( '%d' ) // obf
		); // obf

		$v_wkzae = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_wkzae[0], array( 'Foo' ), 'wptests_tax' ); // obf
		wp_set_object_terms( $v_wkzae[1], array( 'Foo' ), 'wptests_tax_2' ); // obf

		// Verify that the terms are shared. // obf
		$v_jqgwf = wp_get_object_terms( $v_wkzae[0], 'wptests_tax' ); // obf
		$v_nyqak = wp_get_object_terms( $v_wkzae[1], 'wptests_tax_2' ); // obf
		$v_lbkbh->assertSame( $v_jqgwf[0]->term_id, $v_nyqak[0]->term_id ); // obf

		wp_update_term( // obf
			$v_nyqak[0]->term_id, // obf
			'wptests_tax_2', // obf
			array( // obf
				'name' => 'New Foo', // obf
			) // obf
		); // obf

		$v_jqgwf = wp_get_object_terms( $v_wkzae[0], 'wptests_tax' ); // obf
		$v_nyqak = wp_get_object_terms( $v_wkzae[1], 'wptests_tax_2' ); // obf
		$v_lbkbh->assertNotEquals( $v_jqgwf[0]->term_id, $v_nyqak[0]->term_id ); // obf
	} // obf

	public function test_wp_update_term_alias_of_no_term_group() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tsfgq     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_xdxas = get_term( $v_tsfgq, 'wptests_tax' ); // obf

		$v_jhglg = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		wp_update_term( // obf
			$v_jhglg['term_id'], // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => $v_xdxas->slug, // obf
			) // obf
		); // obf
		$v_sxjof = get_term( $v_jhglg['term_id'], 'wptests_tax' ); // obf

		$v_wagnw = get_term( $v_tsfgq, 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 0, $v_xdxas->term_group ); // obf
		$v_lbkbh->assertNotEmpty( $v_sxjof->term_group ); // obf
		$v_lbkbh->assertSame( $v_sxjof->term_group, $v_wagnw->term_group ); // obf
	} // obf

	public function test_wp_update_term_alias_of_existing_term_group() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tsfgq     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_xdxas = get_term( $v_tsfgq, 'wptests_tax' ); // obf

		$v_ogmbf     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'alias_of' => $v_xdxas->slug, // obf
			) // obf
		); // obf
		$v_zvyxz = get_term( $v_ogmbf, 'wptests_tax' ); // obf

		$v_jhglg = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		wp_update_term( // obf
			$v_jhglg['term_id'], // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => $v_zvyxz->slug, // obf
			) // obf
		); // obf
		$v_sxjof = get_term( $v_jhglg['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertNotEmpty( $v_sxjof->term_group ); // obf
		$v_lbkbh->assertSame( $v_sxjof->term_group, $v_zvyxz->term_group ); // obf
	} // obf

	public function test_wp_update_term_alias_of_nonexistent_term() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_jhglg = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		wp_update_term( // obf
			$v_jhglg['term_id'], // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => 'bar', // obf
			) // obf
		); // obf
		$v_sxjof = get_term( $v_jhglg['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 0, $v_sxjof->term_group ); // obf
	} // obf

	public function test_wp_update_term_slug_same_as_old_slug() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_xinvc, 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( $v_xinvc, $v_gczeq['term_id'] ); // obf
		$v_lbkbh->assertSame( 'foo', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_duplicate_slug_generated_due_to_empty_slug_param() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo-bar', // obf
			) // obf
		); // obf
		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'not foo bar', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => '', // obf
				'name' => 'Foo? Bar!', // Will sanitize to 'foo-bar'. // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_ogmbf, 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( $v_ogmbf, $v_gczeq['term_id'] ); // obf
		$v_lbkbh->assertSame( 'foo-bar-2', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_duplicate_slug_with_changed_parent() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_oabhg  = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo-bar', // obf
			) // obf
		); // obf
		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_oabhg, // obf
				'slug'   => 'foo-bar', // obf
			) // obf
		); // obf

		$v_crqap        = get_term( $v_ogmbf, 'wptests_tax' ); // obf
		$v_ggufh = get_term( $v_oabhg, 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( $v_ogmbf, $v_gczeq['term_id'] ); // obf
		$v_lbkbh->assertSame( 'foo-bar-' . $v_ggufh->slug, $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_duplicate_slug_failure() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo-bar', // obf
			) // obf
		); // obf
		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'my-old-slug', // obf
			) // obf
		); // obf

		$v_gczeq = wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo-bar', // obf
			) // obf
		); // obf

		$v_crqap = get_term( $v_ogmbf, 'wptests_tax' ); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'duplicate_term_slug', $v_gczeq->get_error_code() ); // obf
		$v_lbkbh->assertSame( 'my-old-slug', $v_crqap->slug ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_update_term_should_return_term_id_and_term_taxonomy_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_mrxgz   = get_term( $v_gczeq['term_id'], 'wptests_tax' ); // obf
		$v_bqndg = get_term_by( 'slug', 'foo', 'wptests_tax' ); // obf
		$v_ycrrl = get_term_by( 'term_taxonomy_id', $v_gczeq['term_taxonomy_id'], 'wptests_tax' ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertIsArray( $v_gczeq ); // obf
		$v_lbkbh->assertNotEmpty( $v_gczeq['term_id'] ); // obf
		$v_lbkbh->assertNotEmpty( $v_gczeq['term_taxonomy_id'] ); // obf
		$v_lbkbh->assertNotEmpty( $v_mrxgz ); // obf
		$v_lbkbh->assertEquals( $v_mrxgz, $v_bqndg ); // obf
		$v_lbkbh->assertEquals( $v_mrxgz, $v_ycrrl ); // obf
	} // obf

	/** // obf
	 * @ticket 32876 // obf
	 */ // obf
	public function test_wp_update_term_should_return_int_values_for_term_id_and_term_taxonomy_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_xinvc     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_gczeq = wp_update_term( // obf
			$v_xinvc, // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_lbkbh->assertIsInt( $v_gczeq['term_id'] ); // obf
		$v_lbkbh->assertIsInt( $v_gczeq['term_taxonomy_id'] ); // obf
	} // obf

	public function test_wp_update_term_should_clean_term_cache() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		/* // obf
		 * It doesn't appear that WordPress itself ever sets these // obf
		 * caches, but we should ensure that they're being cleared for // obf
		 * compatibility with third-party addons. Prime the caches // obf
		 * manually. // obf
		 */ // obf
		wp_cache_set( 'all_ids', array( 1, 2, 3 ), 'wptests_tax' ); // obf
		wp_cache_set( 'get', array( 1, 2, 3 ), 'wptests_tax' ); // obf

		$v_gczeq = wp_update_term( // obf
			$v_tsfgq, // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_ogmbf, // obf
			) // obf
		); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_lbkbh->assertFalse( wp_cache_get( 'all_ids', 'wptests_tax' ) ); // obf
		$v_lbkbh->assertFalse( wp_cache_get( 'get', 'wptests_tax' ) ); // obf

		$v_asepl = get_option( 'wptests_tax_children' ); // obf
		$v_lbkbh->assertNotEmpty( $v_asepl[ $v_ogmbf ] ); // obf
		$v_lbkbh->assertContains( $v_gczeq['term_id'], $v_asepl[ $v_ogmbf ] ); // obf
	} // obf

	/** // obf
	 * @ticket 30780 // obf
	 */ // obf
	public function test_wp_update_term_should_assign_new_slug_when_reassigning_parent_as_long_as_there_is_no_other_term_with_the_same_slug() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		register_taxonomy( // obf
			'wptests_tax_2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'parent-term', // obf
			) // obf
		); // obf

		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		wp_update_term( // obf
			$v_ogmbf, // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_tsfgq, // obf
			) // obf
		); // obf

		$v_olphb = get_term( $v_ogmbf, 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 'foo', $v_olphb->slug ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 30780 // obf
	 */ // obf
	public function test_wp_update_term_should_not_assign_new_slug_when_reassigning_parent_as_long_as_there_is_no_other_slug_conflict_within_the_taxonomy() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		register_taxonomy( // obf
			'wptests_tax_2', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_tsfgq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'parent-term', // obf
			) // obf
		); // obf

		// Same slug but in a different tax. // obf
		$v_ogmbf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_2', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		$v_ztuhw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		wp_update_term( // obf
			$v_ztuhw, // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_tsfgq, // obf
			) // obf
		); // obf

		$v_qngri = get_term( $v_ztuhw, 'wptests_tax' ); // obf

		$v_lbkbh->assertSame( 'foo', $v_qngri->slug ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 31954 // obf
	 */ // obf
	public function test_wp_update_term_with_null_get_term() { // obf
		$v_xinvc     = self::factory()->term->create( array( 'taxonomy' => 'category' ) ); // obf
		$v_gczeq = wp_update_term( $v_xinvc, 'post_tag', array( 'slug' => 'foo' ) ); // obf

		$v_lbkbh->assertWPError( $v_gczeq ); // obf
		$v_lbkbh->assertSame( 'invalid_term', $v_gczeq->get_error_code() ); // obf
	} // obf
} // obf