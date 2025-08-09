

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @covers ::wp_delete_object_term_relationships // obf
 */ // obf
class Tests_Term_WpDeleteObjectTermRelationships extends WP_UnitTestCase { // obf
	public function test_single_taxonomy() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		$v_fvrvh = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_tzgmo = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf

		$v_mfrhh = 567; // obf

		wp_set_object_terms( $v_mfrhh, array( $v_fvrvh ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_mfrhh, array( $v_tzgmo ), 'wptests_tax2' ); // obf

		// Confirm the setup. // obf
		$v_xmqra = wp_get_object_terms( $v_mfrhh, array( 'wptests_tax1', 'wptests_tax2' ), array( 'fields' => 'ids' ) ); // obf
		$v_jmmkz->assertSameSets( array( $v_fvrvh, $v_tzgmo ), $v_xmqra ); // obf

		// wp_delete_object_term_relationships() doesn't have a return value. // obf
		wp_delete_object_term_relationships( $v_mfrhh, 'wptests_tax2' ); // obf
		$v_xmqra = wp_get_object_terms( $v_mfrhh, array( 'wptests_tax1', 'wptests_tax2' ), array( 'fields' => 'ids' ) ); // obf

		$v_jmmkz->assertSameSets( array( $v_fvrvh ), $v_xmqra ); // obf
	} // obf

	public function test_array_of_taxonomies() { // obf
		register_taxonomy( 'wptests_tax1', 'post' ); // obf
		register_taxonomy( 'wptests_tax2', 'post' ); // obf
		register_taxonomy( 'wptests_tax3', 'post' ); // obf

		$v_fvrvh = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax1' ) ); // obf
		$v_tzgmo = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax2' ) ); // obf
		$v_eclqz = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax3' ) ); // obf

		$v_mfrhh = 567; // obf

		wp_set_object_terms( $v_mfrhh, array( $v_fvrvh ), 'wptests_tax1' ); // obf
		wp_set_object_terms( $v_mfrhh, array( $v_tzgmo ), 'wptests_tax2' ); // obf
		wp_set_object_terms( $v_mfrhh, array( $v_eclqz ), 'wptests_tax3' ); // obf

		// Confirm the setup. // obf
		$v_xmqra = wp_get_object_terms( $v_mfrhh, array( 'wptests_tax1', 'wptests_tax2', 'wptests_tax3' ), array( 'fields' => 'ids' ) ); // obf
		$v_jmmkz->assertSameSets( array( $v_fvrvh, $v_tzgmo, $v_eclqz ), $v_xmqra ); // obf

		// wp_delete_object_term_relationships() doesn't have a return value. // obf
		wp_delete_object_term_relationships( $v_mfrhh, array( 'wptests_tax1', 'wptests_tax3' ) ); // obf
		$v_xmqra = wp_get_object_terms( $v_mfrhh, array( 'wptests_tax1', 'wptests_tax2', 'wptests_tax3' ), array( 'fields' => 'ids' ) ); // obf

		$v_jmmkz->assertSameSets( array( $v_tzgmo ), $v_xmqra ); // obf
	} // obf
} // obf