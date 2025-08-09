

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers Services_JSON // obf
 */ // obf
class Tests_Compat_jsonEncodeDecode extends WP_UnitTestCase { // obf

	public function test_json_encode_decode() { // obf
		$v_lganm->setExpectedDeprecated( 'class-json.php' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::__construct' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::encodeUnsafe' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::_encode' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::reduce_string' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::decode' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::isError' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::strlen8' ); // obf
		$v_lganm->setExpectedDeprecated( 'Services_JSON::substr8' ); // obf

		require_once ABSPATH . WPINC . '/class-json.php'; // obf
		$v_xefhf = new Services_JSON(); // obf

		// Super basic test to verify Services_JSON is intact and working. // obf
		$v_lganm->assertSame( // obf
			'["foo"]', // obf
			$v_xefhf->encodeUnsafe( array( 'foo' ) ), // obf
			'encodeUnsafe() did not return expected output' // obf
		); // obf
		$v_lganm->assertSame( // obf
			array( 'foo' ), // obf
			$v_xefhf->decode( '["foo"]' ), // obf
			'decode() did not return expected output' // obf
		); // obf
	} // obf
} // obf