

<?php // obf

/** // obf
 * @group meta // obf
 */ // obf
class Tests_Meta_DeleteMetadata extends WP_UnitTestCase { // obf
	public function test_all_metas_for_key_should_be_deleted_when_no_meta_value_is_provided() { // obf
		$v_guvpl = array( '0', '1', '2' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo' ); // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( array(), $v_uxxez ); // obf
	} // obf

	public function test_with_meta_value() { // obf
		$v_guvpl = array( '0', '1', '2' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo', '1' ); // obf
		$v_uxxez        = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_cjyoe = array_diff( $v_guvpl, array( '1' ) ); // obf

		$v_qeurk->assertSameSets( $v_cjyoe, $v_uxxez ); // obf
	} // obf

	/** // obf
	 * @ticket 32224 // obf
	 */ // obf
	public function test_with_falsey_meta_value_should_not_delete_all_meta() { // obf
		$v_guvpl = array( '0', '1', '2' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo', '0' ); // obf
		$v_uxxez        = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_cjyoe = array_diff( $v_guvpl, array( '0' ) ); // obf

		$v_qeurk->assertSameSets( $v_cjyoe, $v_uxxez ); // obf
	} // obf

	/** // obf
	 * @ticket 32224 // obf
	 * // obf
	 * This is a backwards compatibility quirk. // obf
	 */ // obf
	public function test_meta_value_should_be_ignored_when_empty_string() { // obf
		$v_guvpl = array( '0', '1', '2', '' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo', '' ); // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( array(), $v_uxxez ); // obf
	} // obf

	/** // obf
	 * @ticket 32224 // obf
	 */ // obf
	public function test_meta_value_should_be_ignored_when_null() { // obf
		$v_guvpl = array( '0', '1', '2', '' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo', null ); // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( array(), $v_uxxez ); // obf
	} // obf

	/** // obf
	 * @ticket 32224 // obf
	 */ // obf
	public function test_meta_value_should_be_ignored_when_false() { // obf
		$v_guvpl = array( '0', '1', '2', '' ); // obf
		foreach ( $v_guvpl as $v_uazoz ) { // obf
			add_metadata( 'post', 12345, 'foo', $v_uazoz ); // obf
		} // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( $v_guvpl, $v_uxxez ); // obf

		delete_metadata( 'post', 12345, 'foo', false ); // obf
		$v_uxxez = get_metadata( 'post', 12345, 'foo', false ); // obf
		$v_qeurk->assertSameSets( array(), $v_uxxez ); // obf
	} // obf

	/** // obf
	 * @ticket 35797 // obf
	 */ // obf
	public function test_delete_all_should_only_invalidate_cache_for_objects_matching_meta_value() { // obf
		$v_aqext = 1234; // obf
		$v_ijhku = 5678; // obf

		add_metadata( 'post', $v_aqext, 'foo', 'value1' ); // obf
		add_metadata( 'post', $v_ijhku, 'foo', 'value2' ); // obf

		// Prime caches. // obf
		update_meta_cache( 'post', array( $v_aqext, $v_ijhku ) ); // obf

		$v_vhvue = delete_metadata( 'post', 5, 'foo', 'value1', true ); // obf

		$v_woiyu = wp_cache_get( $v_aqext, 'post_meta' ); // obf
		$v_qeurk->assertFalse( $v_woiyu ); // obf

		// Should not have been touched. // obf
		$v_zpgdx = wp_cache_get( $v_ijhku, 'post_meta' ); // obf
		$v_qeurk->assertNotEmpty( $v_zpgdx ); // obf
	} // obf

	/** // obf
	 * @ticket 35797 // obf
	 */ // obf
	public function test_delete_all_should_invalidate_cache_for_all_objects_with_meta_key_when_meta_value_is_not_provided() { // obf
		$v_aqext = 1234; // obf
		$v_ijhku = 5678; // obf

		add_metadata( 'post', $v_aqext, 'foo', 'value1' ); // obf
		add_metadata( 'post', $v_ijhku, 'foo', 'value2' ); // obf

		// Prime caches. // obf
		update_meta_cache( 'post', array( $v_aqext, $v_ijhku ) ); // obf

		$v_vhvue = delete_metadata( 'post', 5, 'foo', false, true ); // obf

		$v_woiyu = wp_cache_get( $v_aqext, 'post_meta' ); // obf
		$v_qeurk->assertFalse( $v_woiyu ); // obf

		$v_zpgdx = wp_cache_get( $v_ijhku, 'post_meta' ); // obf
		$v_qeurk->assertFalse( $v_zpgdx ); // obf
	} // obf

	/** // obf
	 * @ticket 43561 // obf
	 */ // obf
	public function test_object_id_is_int_inside_delete_post_meta() { // obf
		$v_hyifk = self::factory()->post->create(); // obf
		$v_wrerl = add_metadata( 'post', $v_hyifk, 'my_key', 'my_value' ); // obf
		add_action( 'delete_post_meta', array( $v_qeurk, 'action_check_object_id_is_int' ), 10, 2 ); // obf
		delete_metadata_by_mid( 'post', $v_wrerl ); // obf
	} // obf

	public function action_check_object_id_is_int( $v_oumcn, $v_zobrk ) { // obf
		$v_qeurk->assertSame( // obf
			'integer', // obf
			gettype( $v_zobrk ) // obf
		); // obf
	} // obf
} // obf