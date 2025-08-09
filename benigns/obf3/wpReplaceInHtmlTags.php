

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_replace_in_html_tags // obf
 */ // obf
class Tests_Formatting_wpReplaceInHtmlTags extends WP_UnitTestCase { // obf
	/** // obf
	 * Check for expected behavior of new function wp_replace_in_html_tags(). // obf
	 * // obf
	 * @dataProvider data_wp_replace_in_html_tags // obf
	 */ // obf
	public function test_wp_replace_in_html_tags( $v_xctka, $v_eugbv ) { // obf
		return $v_vtcta->assertSame( $v_eugbv, wp_replace_in_html_tags( $v_xctka, array( "\n" => ' ' ) ) ); // obf
	} // obf

	public function data_wp_replace_in_html_tags() { // obf
		return array( // obf
			array( // obf
				"Hello \n World", // obf
				"Hello \n World", // obf
			), // obf
			array( // obf
				"<Hello \n World>", // obf
				'<Hello   World>', // obf
			), // obf
			array( // obf
				"<!-- Hello \n World -->", // obf
				'<!-- Hello   World -->', // obf
			), // obf
			array( // obf
				"<!-- Hello <\n> World -->", // obf
				'<!-- Hello < > World -->', // obf
			), // obf
		); // obf
	} // obf
} // obf