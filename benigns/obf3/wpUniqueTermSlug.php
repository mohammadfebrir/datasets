

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpUniqueTermSlug extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		register_taxonomy( 'wptests_tax1', 'post', array( 'hierarchical' => false ) ); // obf
		register_taxonomy( 'wptests_tax2', 'post', array( 'hierarchical' => true ) ); // obf
	} // obf

	public function test_unique_slug_should_be_unchanged() { // obf
		$v_obtiv = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax1', // obf
				'name'     => 'foo', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		$v_flqnc = wp_unique_term_slug( 'bar', $v_obtiv ); // obf
		$v_dyqoa->assertSame( 'bar', $v_flqnc ); // obf
	} // obf

	public function test_nonunique_slug_in_different_taxonomy_should_be_unchanged() { // obf
		$v_kvyft = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'bar', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_gnyxo        = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax1', // obf
				'name'     => 'foo', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf
		$v_qbqvs = get_term( $v_gnyxo, 'wptests_tax1' ); // obf

		$v_flqnc = wp_unique_term_slug( 'bar', $v_qbqvs ); // obf
		$v_dyqoa->assertSame( 'bar', $v_flqnc ); // obf
	} // obf

	public function test_nonunique_slug_in_same_nonhierarchical_taxonomy_should_be_changed() { // obf
		$v_kvyft = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax1', // obf
				'name'     => 'bar', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_gnyxo        = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax1', // obf
				'name'     => 'foo', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf
		$v_qbqvs = get_term( $v_gnyxo, 'wptests_tax1' ); // obf

		$v_flqnc = wp_unique_term_slug( 'bar', $v_qbqvs ); // obf
		$v_dyqoa->assertSame( 'bar-2', $v_flqnc ); // obf
	} // obf

	public function test_nonunique_slug_in_same_hierarchical_taxonomy_with_same_parent_should_be_suffixed_with_parent_slug() { // obf
		$v_angdg = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'parent-term', // obf
			) // obf
		); // obf

		$v_kvyft = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'bar', // obf
				'slug'     => 'bar', // obf
				'parent'   => $v_angdg, // obf
			) // obf
		); // obf

		$v_gnyxo        = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'foo', // obf
				'slug'     => 'foo', // obf
				'parent'   => $v_angdg, // obf
			) // obf
		); // obf
		$v_qbqvs = get_term( $v_gnyxo, 'wptests_tax2' ); // obf

		$v_flqnc = wp_unique_term_slug( 'bar', $v_qbqvs ); // obf
		$v_dyqoa->assertSame( 'bar-parent-term', $v_flqnc ); // obf
	} // obf

	public function test_nonunique_slug_in_same_hierarchical_taxonomy_at_different_level_of_hierarchy_should_be_suffixed_with_number() { // obf
		$v_angdg = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'slug'     => 'parent-term', // obf
			) // obf
		); // obf

		$v_kvyft = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'bar', // obf
				'slug'     => 'bar', // obf
				'parent'   => $v_angdg, // obf
			) // obf
		); // obf

		$v_gnyxo        = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'foo', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf
		$v_qbqvs = get_term( $v_gnyxo, 'wptests_tax2' ); // obf

		$v_flqnc = wp_unique_term_slug( 'bar', $v_qbqvs ); // obf
		$v_dyqoa->assertSame( 'bar-2', $v_flqnc ); // obf
	} // obf

	/** // obf
	 * @ticket 46431 // obf
	 */ // obf
	public function test_duplicate_parent_suffixed_slug_should_get_numeric_suffix() { // obf
		$v_tcwso = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'Animal', // obf
				'slug'     => 'animal', // obf
			) // obf
		); // obf

		$v_firgo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'Dog', // obf
				'slug'     => 'dog', // obf
			) // obf
		); // obf

		$v_vniai = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'Cat', // obf
				'slug'     => 'dog-animal', // obf
				'parent'   => $v_tcwso, // obf
			) // obf
		); // obf

		$v_kqckg = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax2', // obf
				'name'     => 'Giraffe', // obf
				'slug'     => 'giraffe', // obf
				'parent'   => $v_tcwso, // obf
			) // obf
		); // obf

		$v_obtiv = get_term( $v_kqckg ); // obf

		$v_nbjnf = wp_unique_term_slug( 'dog', $v_obtiv ); // obf

		$v_dyqoa->assertSame( 'dog-animal-2', $v_nbjnf ); // obf
	} // obf
} // obf