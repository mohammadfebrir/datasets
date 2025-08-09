

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpRemoveObjectTerms extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 34338 // obf
	 */ // obf
	public function test_removal_should_delete_object_relationship_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_kqked = self::factory()->post->create(); // obf
		$v_vlqxy = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf

		wp_set_object_terms( $v_kqked, $v_vlqxy, 'wptests_tax' ); // obf

		// Pollute the cache. // obf
		get_the_terms( $v_kqked, 'wptests_tax' ); // obf

		wp_remove_object_terms( $v_kqked, $v_vlqxy, 'wptests_tax' ); // obf

		$v_eqhxx->assertFalse( get_the_terms( $v_kqked, 'wptests_tax' ) ); // obf
	} // obf
} // obf