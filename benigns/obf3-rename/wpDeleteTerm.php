

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpDeleteTerm extends WP_UnitTestCase { // obf
	protected $v_hzrtq; // obf
	protected $v_lhbxz; // obf

	/** // obf
	 * @ticket 33485 // obf
	 * @ticket 35213 // obf
	 */ // obf
	public function test_count_property_passed_to_filters_should_reflect_pre_deleted_term() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_gjrhc = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_rspzn = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_rspzn, array( $v_gjrhc[0] ), 'wptests_tax' ); // obf

		add_action( 'delete_term', array( $v_atnig, 'catch_deleted_term' ), 10, 5 ); // obf

		wp_delete_term( $v_gjrhc[0], 'wptests_tax' ); // obf
		$v_atnig->assertSame( 1, $v_atnig->deleted_term->count ); // obf
		$v_atnig->assertSame( $v_atnig->object_ids, array( (string) $v_rspzn ) ); // obf

		wp_delete_term( $v_gjrhc[1], 'wptests_tax' ); // obf
		$v_atnig->assertSame( 0, $v_atnig->deleted_term->count ); // obf
		$v_atnig->assertSame( $v_atnig->object_ids, array() ); // obf
	} // obf

	public function catch_deleted_term( $v_puxrq, $v_fltoe, $v_telsn, $v_hzrtq, $v_lhbxz ) { // obf
		$v_atnig->deleted_term = $v_hzrtq; // obf
		$v_atnig->object_ids   = $v_lhbxz; // obf
	} // obf
} // obf