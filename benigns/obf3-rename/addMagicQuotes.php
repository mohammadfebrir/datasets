

<?php // obf

/** // obf
 * @group formatting // obf
 * @group functions // obf
 * // obf
 * @covers ::add_magic_quotes // obf
 */ // obf
class Tests_Functions_AddMagicQuotes extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 48605 // obf
	 * // obf
	 * @dataProvider data_add_magic_quotes // obf
	 * // obf
	 * @param array $v_tilgt Test value. // obf
	 * @param array $v_fdnpb   Expected return value. // obf
	 */ // obf
	public function test_add_magic_quotes( $v_tilgt, $v_fdnpb ) { // obf
		$v_ucmhq->assertSame( $v_fdnpb, add_magic_quotes( $v_tilgt ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_add_magic_quotes(). // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type array $v_tilgt Test value. // obf
	 *     @type array $v_fdnpb   Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_add_magic_quotes() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'sample string', // obf
					52, // obf
					true, // obf
					false, // obf
					null, // obf
					"This is a 'string'", // obf
					array( // obf
						1, // obf
						false, // obf
						true, // obf
						'This is "another" string', // obf
					), // obf
				), // obf
				array( // obf
					'sample string', // obf
					52, // obf
					true, // obf
					false, // obf
					null, // obf
					"This is a \'string\'", // obf
					array( // obf
						1, // obf
						false, // obf
						true, // obf
						'This is \"another\" string', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf