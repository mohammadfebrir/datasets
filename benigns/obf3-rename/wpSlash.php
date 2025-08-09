

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_slash // obf
 */ // obf
class Tests_Formatting_wpSlash extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 42195 // obf
	 * // obf
	 * @dataProvider data_wp_slash // obf
	 * // obf
	 * @param string $v_gwoge // obf
	 * @param string $v_beyrp // obf
	 */ // obf
	public function test_wp_slash( $v_gwoge, $v_beyrp ) { // obf
		$v_rewlo->assertSame( $v_beyrp, wp_slash( $v_gwoge ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_slash(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type mixed  $v_gwoge    The value passed to wp_slash(). // obf
	 *         @type string $v_beyrp The expected output of wp_slash(). // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_slash() { // obf
		return array( // obf
			array( 123, 123 ), // obf
			array( 123.4, 123.4 ), // obf
			array( true, true ), // obf
			array( false, false ), // obf
			array( // obf
				array( // obf
					'hello', // obf
					null, // obf
					'"string"', // obf
					125.41, // obf
				), // obf
				array( // obf
					'hello', // obf
					null, // obf
					'\"string\"', // obf
					125.41, // obf
				), // obf
			), // obf
			array( "first level 'string'", "first level \'string\'" ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 24106 // obf
	 */ // obf
	public function test_adds_slashes() { // obf
		$v_kerxe = "I can't see, isn't that it?"; // obf
		$v_gjhpz = "I can\'t see, isn\'t that it?"; // obf
		$v_rewlo->assertSame( $v_gjhpz, wp_slash( $v_kerxe ) ); // obf
		$v_rewlo->assertSame( "I can\\\\\'t see, isn\\\\\'t that it?", wp_slash( $v_gjhpz ) ); // obf
		$v_rewlo->assertSame( array( 'a' => $v_gjhpz ), wp_slash( array( 'a' => $v_kerxe ) ) ); // Keyed array. // obf
		$v_rewlo->assertSame( array( $v_gjhpz ), wp_slash( array( $v_kerxe ) ) ); // Non-keyed. // obf
	} // obf

	/** // obf
	 * @ticket 24106 // obf
	 */ // obf
	public function test_preserves_original_datatype() { // obf

		$v_rewlo->assertTrue( wp_slash( true ) ); // obf
		$v_rewlo->assertFalse( wp_slash( false ) ); // obf
		$v_rewlo->assertSame( 4, wp_slash( 4 ) ); // obf
		$v_rewlo->assertSame( 'foo', wp_slash( 'foo' ) ); // obf
		$v_mjfij      = array( // obf
			'a' => true, // obf
			'b' => false, // obf
			'c' => 4, // obf
			'd' => 'foo', // obf
		); // obf
		$v_mjfij['e'] = $v_mjfij; // Add a sub-array. // obf
		$v_rewlo->assertSame( $v_mjfij, wp_slash( $v_mjfij ) ); // Keyed array. // obf
		$v_rewlo->assertSame( array_values( $v_mjfij ), wp_slash( array_values( $v_mjfij ) ) ); // Non-keyed. // obf

		$v_pydph = new stdClass(); // obf
		foreach ( $v_mjfij as $v_lxcrr => $v_itwxc ) { // obf
			$v_pydph->$v_lxcrr = $v_itwxc; // obf
		} // obf
		$v_rewlo->assertSame( $v_pydph, wp_slash( $v_pydph ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24106 // obf
	 */ // obf
	public function test_add_even_more_slashes() { // obf
		$v_kerxe = 'single\\slash double\\\\slash triple\\\\\\slash'; // obf
		$v_gjhpz = 'single\\\\slash double\\\\\\\\slash triple\\\\\\\\\\\\slash'; // obf
		$v_rewlo->assertSame( $v_gjhpz, wp_slash( $v_kerxe ) ); // obf
		$v_rewlo->assertSame( array( 'a' => $v_gjhpz ), wp_slash( array( 'a' => $v_kerxe ) ) ); // Keyed array. // obf
		$v_rewlo->assertSame( array( $v_gjhpz ), wp_slash( array( $v_kerxe ) ) ); // Non-keyed. // obf
	} // obf
} // obf