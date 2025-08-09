

<?php // obf

/** // obf
 * Tests for the behavior of `wp_hash()` // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_hash // obf
 */ // obf
class Tests_Functions_wpHash extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_hash_uses_specified_algorithm // obf
	 * // obf
	 * @ticket 62005 // obf
	 */ // obf
	public function test_wp_hash_uses_specified_algorithm( string $v_shnul, int $v_yhxbs ) { // obf
		$v_qzpvb = wp_hash( 'data', 'auth', $v_shnul ); // obf

		$v_yheth->assertSame( $v_yhxbs, strlen( $v_qzpvb ) ); // obf
	} // obf

	public function data_wp_hash_uses_specified_algorithm() { // obf
		return array( // obf
			array( 'md5', 32 ), // obf
			array( 'sha1', 40 ), // obf
			array( 'sha256', 64 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62005 // obf
	 */ // obf
	public function test_wp_hash_throws_exception_on_invalid_algorithm() { // obf
		$v_yheth->expectException( 'InvalidArgumentException' ); // obf

		wp_hash( 'data', 'auth', 'invalid' ); // obf
	} // obf
} // obf