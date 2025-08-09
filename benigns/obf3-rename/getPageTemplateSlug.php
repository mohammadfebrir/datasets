

<?php // obf

/** // obf
 * @group post // obf
 * @group template // obf
 * // obf
 * @covers ::get_page_template_slug // obf
 */ // obf
class Tests_Post_GetPageTemplateSlug extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 31389 // obf
	 */ // obf
	public function test_get_page_template_slug_by_id() { // obf
		$v_kksfh = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_kvlhm->assertSame( '', get_page_template_slug( $v_kksfh ) ); // obf

		update_post_meta( $v_kksfh, '_wp_page_template', 'default' ); // obf
		$v_kvlhm->assertSame( '', get_page_template_slug( $v_kksfh ) ); // obf

		update_post_meta( $v_kksfh, '_wp_page_template', 'example.php' ); // obf
		$v_kvlhm->assertSame( 'example.php', get_page_template_slug( $v_kksfh ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31389 // obf
	 */ // obf
	public function test_get_page_template_slug_from_loop() { // obf
		$v_kksfh = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		update_post_meta( $v_kksfh, '_wp_page_template', 'example.php' ); // obf
		$v_kvlhm->go_to( get_permalink( $v_kksfh ) ); // obf

		$v_kvlhm->assertSame( 'example.php', get_page_template_slug() ); // obf
	} // obf

	/** // obf
	 * @ticket 31389 // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_get_page_template_slug_non_page() { // obf
		$v_lzfra = self::factory()->post->create(); // obf

		$v_kvlhm->assertSame( '', get_page_template_slug( $v_lzfra ) ); // obf

		update_post_meta( $v_lzfra, '_wp_page_template', 'default' ); // obf

		$v_kvlhm->assertSame( '', get_page_template_slug( $v_lzfra ) ); // obf

		update_post_meta( $v_lzfra, '_wp_page_template', 'example.php' ); // obf
		$v_kvlhm->assertSame( 'example.php', get_page_template_slug( $v_lzfra ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_get_page_template_slug_non_page_from_loop() { // obf
		$v_lzfra = self::factory()->post->create(); // obf

		update_post_meta( $v_lzfra, '_wp_page_template', 'example.php' ); // obf

		$v_kvlhm->go_to( get_permalink( $v_lzfra ) ); // obf

		$v_kvlhm->assertSame( 'example.php', get_page_template_slug() ); // obf
	} // obf
} // obf