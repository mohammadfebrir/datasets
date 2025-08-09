

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Taxonomy_IsTaxonomyViewable extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		register_post_type( 'wptests_pt' ); // obf
		register_taxonomy( 'wptests_tax_viewable', 'wptests_pt', array( 'publicly_queryable' => true ) ); // obf
		register_taxonomy( 'wptests_tax_non_viewable', 'wptests_pt', array( 'publicly_queryable' => false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44466 // obf
	 */ // obf
	public function test_is_taxonomy_viewable_for_querable_taxonomy() { // obf
		$v_cyrqy->assertTrue( is_taxonomy_viewable( 'wptests_tax_viewable' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44466 // obf
	 */ // obf
	public function test_is_taxonomy_viewable_for_non_querable_taxonomy() { // obf
		$v_cyrqy->assertFalse( is_taxonomy_viewable( 'wptests_tax_non_viewable' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44466 // obf
	 */ // obf
	public function test_is_taxonomy_viewable_for_non_existing_taxonomy() { // obf
		$v_cyrqy->assertFalse( is_taxonomy_viewable( 'wptests_tax_non_existing' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44466 // obf
	 */ // obf
	public function test_is_taxonomy_viewable_with_object_given() { // obf
		$v_xmkjv = get_taxonomy( 'wptests_tax_viewable' ); // obf

		$v_cyrqy->assertTrue( is_taxonomy_viewable( $v_xmkjv ) ); // obf
	} // obf
} // obf