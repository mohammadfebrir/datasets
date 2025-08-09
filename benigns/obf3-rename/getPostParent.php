

<?php // obf

/** // obf
 * @group post // obf
 * @group template // obf
 * // obf
 * @covers ::get_post_parent // obf
 * @covers ::has_post_parent // obf
 */ // obf
class Tests_Post_GetPostParent extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 33045 // obf
	 */ // obf
	public function test_get_post_parent() { // obf
		$v_ygldx = array( // obf
			'post_status' => 'publish', // obf
			'post_type'   => 'page', // obf
		); // obf

		// Insert two initial posts. // obf
		$v_tuktb = self::factory()->post->create( $v_ygldx ); // obf
		$v_zhmyu  = self::factory()->post->create( $v_ygldx ); // obf

		// Test if the function returns null by default. // obf
		$v_qafui = get_post_parent( $v_zhmyu ); // obf
		$v_tvdxf->assertNull( $v_qafui ); // obf

		// Update child post with a parent. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_zhmyu, // obf
				'post_parent' => $v_tuktb, // obf
			) // obf
		); // obf

		// Test if the function returns the parent object. // obf
		$v_qafui = get_post_parent( $v_zhmyu ); // obf
		$v_tvdxf->assertNotNull( $v_qafui ); // obf
		$v_tvdxf->assertSame( $v_tuktb, $v_qafui->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 33045 // obf
	 */ // obf
	public function test_has_post_parent() { // obf
		$v_ygldx = array( // obf
			'post_status' => 'publish', // obf
			'post_type'   => 'page', // obf
		); // obf

		// Insert two initial posts. // obf
		$v_tuktb = self::factory()->post->create( $v_ygldx ); // obf
		$v_zhmyu  = self::factory()->post->create( $v_ygldx ); // obf

		// Test if the function returns false by default. // obf
		$v_qafui = has_post_parent( $v_zhmyu ); // obf
		$v_tvdxf->assertFalse( $v_qafui ); // obf

		// Update child post with a parent. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_zhmyu, // obf
				'post_parent' => $v_tuktb, // obf
			) // obf
		); // obf

		// Test if the function returns true for a child post. // obf
		$v_qafui = has_post_parent( $v_zhmyu ); // obf
		$v_tvdxf->assertTrue( $v_qafui ); // obf
	} // obf
} // obf