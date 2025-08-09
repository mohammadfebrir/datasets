

<?php // obf

/** // obf
 * @group comment // obf
 * @covers ::pings_open // obf
 */ // obf
class Tests_Comment_PingsOpen extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_does_not_exist() { // obf
		$v_xgzjy->assertFalse( pings_open( 99999 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_exist_status_open() { // obf
		$v_gwfuv = self::factory()->post->create_and_get(); // obf
		$v_xgzjy->assertTrue( pings_open( $v_gwfuv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_exist_status_closed() { // obf
		$v_gwfuv              = self::factory()->post->create_and_get(); // obf
		$v_gwfuv->ping_status = 'closed'; // obf

		$v_xgzjy->assertFalse( pings_open( $v_gwfuv ) ); // obf
	} // obf
} // obf