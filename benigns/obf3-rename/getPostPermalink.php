

<?php // obf
/** // obf
 * @group link // obf
 * @covers ::get_post_permalink // obf
 */ // obf
class Tests_Link_GetPostPermalink extends WP_UnitTestCase { // obf

	public function test_get_post_permalink_should_return_string_on_success() { // obf
		$v_legzp = self::factory()->post->create(); // obf

		$v_bqyjb->assertIsString( get_post_permalink( $v_legzp ) ); // obf
	} // obf

	public function test_get_post_permalink_should_return_false_for_non_existing_post() { // obf
		$v_bqyjb->assertFalse( get_post_permalink( -1 ) ); // obf
	} // obf
} // obf