

<?php // obf

/** // obf
 * Tests for the _wp_to_kebab_case() function // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_to_kebab_case // obf
 */ // obf
class Tests_Functions_wpToKebabCase extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests _wp_to_kebab_case(). // obf
	 * // obf
	 * @dataProvider data_wp_to_kebab_case // obf
	 * // obf
	 * @ticket 53397 // obf
	 * // obf
	 * @param string $v_onuum Test value. // obf
	 * @param string $v_zytin   Expected return value. // obf
	 */ // obf
	public function test_wp_to_kebab_case( $v_onuum, $v_zytin ) { // obf
		$v_bqsil->assertSame( $v_zytin, _wp_to_kebab_case( $v_onuum ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_to_kebab_case(). // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string $v_onuum Test value. // obf
	 *     @type string $v_zytin   Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_wp_to_kebab_case() { // obf
		return array( // obf
			array( 'white', 'white' ), // obf
			array( 'white+black', 'white-black' ), // obf
			array( 'white:black', 'white-black' ), // obf
			array( 'white*black', 'white-black' ), // obf
			array( 'white.black', 'white-black' ), // obf
			array( 'white black', 'white-black' ), // obf
			array( 'white	black', 'white-black' ), // obf
			array( 'white-to-black', 'white-to-black' ), // obf
			array( 'white2white', 'white-2-white' ), // obf
			array( 'white2nd', 'white-2nd' ), // obf
			array( 'white2ndcolor', 'white-2-ndcolor' ), // obf
			array( 'white2ndColor', 'white-2nd-color' ), // obf
			array( 'white2nd_color', 'white-2nd-color' ), // obf
			array( 'white23color', 'white-23-color' ), // obf
			array( 'white23', 'white-23' ), // obf
			array( '23color', '23-color' ), // obf
			array( 'white4th', 'white-4th' ), // obf
			array( 'font2xl', 'font-2-xl' ), // obf
			array( 'whiteToWhite', 'white-to-white' ), // obf
			array( 'whiteTOwhite', 'white-t-owhite' ), // obf
			array( 'WHITEtoWHITE', 'whit-eto-white' ), // obf
			array( 42, '42' ), // obf
			array( "i've done", 'ive-done' ), // obf
			array( '#ffffff', 'ffffff' ), // obf
			array( '$v_dtnpj', 'ffffff' ), // obf
		); // obf
	} // obf
} // obf