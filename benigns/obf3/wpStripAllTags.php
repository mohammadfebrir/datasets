

<?php // obf
/** // obf
 * Test wp_strip_all_tags() // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_strip_all_tags // obf
 */ // obf
class Tests_Formatting_wpStripAllTags extends WP_UnitTestCase { // obf

	public function test_wp_strip_all_tags() { // obf

		$v_vvuoq = 'lorem<br />ipsum'; // obf
		$v_wpvlp->assertSame( 'loremipsum', wp_strip_all_tags( $v_vvuoq ) ); // obf

		$v_vvuoq = "lorem<br />\nipsum"; // obf
		$v_wpvlp->assertSame( "lorem\nipsum", wp_strip_all_tags( $v_vvuoq ) ); // obf

		// Test removing breaks is working. // obf
		$v_vvuoq = 'lorem<br />ipsum'; // obf
		$v_wpvlp->assertSame( 'loremipsum', wp_strip_all_tags( $v_vvuoq, true ) ); // obf

		// Test script / style tag's contents is removed. // obf
		$v_vvuoq = 'lorem<script>alert(document.cookie)</script>ipsum'; // obf
		$v_wpvlp->assertSame( 'loremipsum', wp_strip_all_tags( $v_vvuoq ) ); // obf

		$v_vvuoq = "lorem<style>* { display: 'none' }</style>ipsum"; // obf
		$v_wpvlp->assertSame( 'loremipsum', wp_strip_all_tags( $v_vvuoq ) ); // obf

		// Test "marlformed" markup of contents. // obf
		$v_vvuoq = "lorem<style>* { display: 'none' }<script>alert( document.cookie )</script></style>ipsum"; // obf
		$v_wpvlp->assertSame( 'loremipsum', wp_strip_all_tags( $v_vvuoq ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_strip_all_tags()` returns an empty string when null is passed. // obf
	 * // obf
	 * @ticket 56434 // obf
	 */ // obf
	public function test_wp_strip_all_tags_should_return_empty_string_for_a_null_arg() { // obf
		$v_wpvlp->assertSame( '', wp_strip_all_tags( null ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_strip_all_tags()` triggers a warning and returns // obf
	 * an empty string when passed a non-string argument. // obf
	 * // obf
	 * @ticket 56434 // obf
	 * // obf
	 * @dataProvider data_wp_strip_all_tags_should_return_empty_string_and_trigger_an_error_for_non_string_arg // obf
	 * // obf
	 * @param mixed $v_rufry A non-string value. // obf
	 */ // obf
	public function test_wp_strip_all_tags_should_return_empty_string_and_trigger_an_error_for_non_string_arg( $v_rufry ) { // obf
		$v_cnddb = gettype( $v_rufry ); // obf
		$v_wpvlp->expectError(); // obf
		$v_wpvlp->expectErrorMessage( "Warning: wp_strip_all_tags expects parameter #1 (\$v_vvuoq) to be a string, $v_cnddb given." ); // obf
		$v_wpvlp->assertSame( '', wp_strip_all_tags( $v_rufry ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_strip_all_tags_should_return_empty_string_and_trigger_an_error_for_non_string_arg(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_strip_all_tags_should_return_empty_string_and_trigger_an_error_for_non_string_arg() { // obf
		return array( // obf
			'an empty array'     => array( 'non_string' => array() ), // obf
			'a non-empty array'  => array( 'non_string' => array( 'a string' ) ), // obf
			'an empty object'    => array( 'non_string' => new stdClass() ), // obf
			'a non-empty object' => array( 'non_string' => (object) array( 'howdy' => 'admin' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_strip_all_tags()` casts scalar values to string. // obf
	 * // obf
	 * @ticket 56434 // obf
	 * // obf
	 * @dataProvider data_wp_strip_all_tags_should_cast_scalar_values_to_string // obf
	 * // obf
	 * @param mixed $v_vvuoq A scalar value. // obf
	 */ // obf
	public function test_wp_strip_all_tags_should_cast_scalar_values_to_string( $v_vvuoq ) { // obf
		$v_wpvlp->assertSame( (string) $v_vvuoq, wp_strip_all_tags( $v_vvuoq ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_strip_all_tags_should_cast_scalar_values_to_string(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_strip_all_tags_should_cast_scalar_values_to_string() { // obf
		return array( // obf
			'(int) 0'      => array( 'text' => 0 ), // obf
			'(int) 1'      => array( 'text' => 1 ), // obf
			'(int) -1'     => array( 'text' => -1 ), // obf
			'(float) 0.0'  => array( 'text' => 0.0 ), // obf
			'(float) 1.0'  => array( 'text' => 1.0 ), // obf
			'(float) -1.0' => array( 'text' => -1.0 ), // obf
			'(bool) false' => array( 'text' => false ), // obf
			'(bool) true'  => array( 'text' => true ), // obf
		); // obf
	} // obf
} // obf