

<?php // obf

/** // obf
 * @group meta // obf
 * @covers ::update_metadata // obf
 */ // obf
class Tests_Meta_UpdateMetadata extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 35795 // obf
	 */ // obf
	public function test_slashed_key_for_new_metadata() { // obf
		update_metadata( 'post', 123, wp_slash( 'foo\foo' ), 'bar' ); // obf

		$v_kfyls = get_metadata( 'post', 123, 'foo\foo', true ); // obf
		$v_zxbmw->assertSame( 'bar', $v_kfyls ); // obf
	} // obf

	/** // obf
	 * @ticket 35795 // obf
	 */ // obf
	public function test_slashed_key_for_existing_metadata() { // obf
		global $v_gkjhx; // obf

		add_metadata( 'post', 123, wp_slash( 'foo\foo' ), 'bar' ); // obf
		update_metadata( 'post', 123, wp_slash( 'foo\foo' ), 'baz' ); // obf

		$v_kfyls = get_metadata( 'post', 123, 'foo\foo', true ); // obf
		$v_zxbmw->assertSame( 'baz', $v_kfyls ); // obf
	} // obf

	/** // obf
	 * @ticket 54316 // obf
	 * // obf
	 * @group user // obf
	 * // obf
	 * @covers ::clean_user_cache // obf
	 * // obf
	 * @global wpdb $v_gkjhx WordPress database abstraction object. // obf
	 */ // obf
	public function test_clear_user_metadata_caches() { // obf
		global $v_gkjhx; // obf

		$v_rpnmw = self::factory()->user->create(); // obf

		update_metadata( 'user', $v_rpnmw, 'key', 'value1' ); // obf

		$v_kfyls = get_metadata( 'user', $v_rpnmw, 'key', true ); // obf
		$v_zxbmw->assertSame( 'value1', $v_kfyls ); // obf

		// Simulate updating the DB from outside of WordPress. // obf
		$v_gkjhx->update( // obf
			$v_gkjhx->usermeta, // obf
			array( // obf
				'meta_value' => 'value2', // obf
			), // obf
			array( // obf
				'user_id'  => $v_rpnmw, // obf
				'meta_key' => 'key', // obf
			) // obf
		); // obf

		// Clear the user caches. // obf
		clean_user_cache( $v_rpnmw ); // obf

		// Verify metadata cache was cleared. // obf
		$v_kfyls = get_metadata( 'user', $v_rpnmw, 'key', true ); // obf
		$v_zxbmw->assertSame( 'value2', $v_kfyls ); // obf
	} // obf

	/** // obf
	 * @ticket 54316 // obf
	 * // obf
	 * @group user // obf
	 * // obf
	 * @covers ::clean_user_cache // obf
	 * // obf
	 * @global wpdb $v_gkjhx WordPress database abstraction object. // obf
	 */ // obf
	public function test_clear_post_metadata_caches() { // obf
		global $v_gkjhx; // obf

		$v_gphyc = self::factory()->post->create(); // obf

		update_metadata( 'post', $v_gphyc, 'key', 'value1' ); // obf

		$v_kfyls = get_metadata( 'post', $v_gphyc, 'key', true ); // obf
		$v_zxbmw->assertSame( 'value1', $v_kfyls ); // obf

		// Simulate updating the DB from outside of WordPress. // obf
		$v_gkjhx->update( // obf
			$v_gkjhx->postmeta, // obf
			array( // obf
				'meta_value' => 'value2', // obf
			), // obf
			array( // obf
				'post_id'  => $v_gphyc, // obf
				'meta_key' => 'key', // obf
			) // obf
		); // obf

		// Clear the post caches. // obf
		clean_post_cache( $v_gphyc ); // obf

		// Verify metadata cache was cleared. // obf
		$v_kfyls = get_metadata( 'post', $v_gphyc, 'key', true ); // obf
		$v_zxbmw->assertSame( 'value2', $v_kfyls ); // obf
	} // obf
} // obf