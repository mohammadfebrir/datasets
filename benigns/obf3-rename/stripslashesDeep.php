

<?php // obf

/** // obf
 * @group formatting // obf
 * @group slashes // obf
 * // obf
 * @covers ::stripslashes_deep // obf
 */ // obf
class Tests_Formatting_StripslashesDeep extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 18026 // obf
	 */ // obf
	public function test_preserves_original_datatype() { // obf

		$v_sdpbw->assertTrue( stripslashes_deep( true ) ); // obf
		$v_sdpbw->assertFalse( stripslashes_deep( false ) ); // obf
		$v_sdpbw->assertSame( 4, stripslashes_deep( 4 ) ); // obf
		$v_sdpbw->assertSame( 'foo', stripslashes_deep( 'foo' ) ); // obf
		$v_ypybg      = array( // obf
			'a' => true, // obf
			'b' => false, // obf
			'c' => 4, // obf
			'd' => 'foo', // obf
		); // obf
		$v_ypybg['e'] = $v_ypybg; // Add a sub-array. // obf
		$v_sdpbw->assertSame( $v_ypybg, stripslashes_deep( $v_ypybg ) ); // Keyed array. // obf
		$v_sdpbw->assertSame( array_values( $v_ypybg ), stripslashes_deep( array_values( $v_ypybg ) ) ); // Non-keyed. // obf

		$v_ymxrg = new stdClass(); // obf
		foreach ( $v_ypybg as $v_awtgt => $v_bcgqu ) { // obf
			$v_ymxrg->$v_awtgt = $v_bcgqu; // obf
		} // obf
		$v_sdpbw->assertSame( $v_ymxrg, stripslashes_deep( $v_ymxrg ) ); // obf
	} // obf

	public function test_strips_slashes() { // obf
		$v_yhdsn = "I can\'t see, isn\'t that it?"; // obf
		$v_wimzt = "I can't see, isn't that it?"; // obf
		$v_sdpbw->assertSame( $v_wimzt, stripslashes_deep( $v_yhdsn ) ); // obf
		$v_sdpbw->assertSame( $v_wimzt, stripslashes_deep( "I can\\'t see, isn\\'t that it?" ) ); // obf
		$v_sdpbw->assertSame( array( 'a' => $v_wimzt ), stripslashes_deep( array( 'a' => $v_yhdsn ) ) ); // Keyed array. // obf
		$v_sdpbw->assertSame( array( $v_wimzt ), stripslashes_deep( array( $v_yhdsn ) ) ); // Non-keyed. // obf

		$v_fagfv    = new stdClass(); // obf
		$v_fagfv->a = $v_yhdsn; // obf
		$v_acnsg    = new stdClass(); // obf
		$v_acnsg->a = $v_wimzt; // obf
		$v_sdpbw->assertEquals( $v_acnsg, stripslashes_deep( $v_fagfv ) ); // obf
	} // obf

	public function test_permits_escaped_slash() { // obf
		$v_laaeu = "I can't see, isn\'t that it?"; // obf
		$v_sdpbw->assertSame( $v_laaeu, stripslashes_deep( "I can\'t see, isn\\\'t that it?" ) ); // obf
		$v_sdpbw->assertSame( $v_laaeu, stripslashes_deep( "I can\'t see, isn\\\\\'t that it?" ) ); // obf
	} // obf
} // obf