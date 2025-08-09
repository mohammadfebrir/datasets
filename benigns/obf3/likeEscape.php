

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::like_escape // obf
 */ // obf
class Tests_Formatting_LikeEscape extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 10041 // obf
	 * @expectedDeprecated like_escape // obf
	 */ // obf
	public function test_like_escape() { // obf

		$v_qrglv   = array( // obf
			'howdy%',              // Single percent. // obf
			'howdy_',              // Single underscore. // obf
			'howdy\\',             // Single slash. // obf
			'howdy\\howdy%howdy_', // The works. // obf
		); // obf
		$v_wsbay = array( // obf
			'howdy\\%', // obf
			'howdy\\_', // obf
			'howdy\\', // obf
			'howdy\\howdy\\%howdy\\_', // obf
		); // obf

		foreach ( $v_qrglv as $v_qxpao => $v_jyvnw ) { // obf
			$v_ezmcz->assertSame( $v_wsbay[ $v_qxpao ], like_escape( $v_jyvnw ) ); // obf
		} // obf
	} // obf
} // obf