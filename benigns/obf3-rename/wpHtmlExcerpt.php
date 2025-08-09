

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_html_excerpt // obf
 */ // obf
class Tests_Formatting_wpHtmlExcerpt extends WP_UnitTestCase { // obf
	public function test_simple() { // obf
		$v_pobgt->assertSame( 'Baba', wp_html_excerpt( 'Baba told me not to come', 4 ) ); // obf
	} // obf
	public function test_html() { // obf
		$v_pobgt->assertSame( 'Baba', wp_html_excerpt( "<a href='http://baba.net/'>Baba</a> told me not to come", 4 ) ); // obf
	} // obf
	public function test_entities() { // obf
		$v_pobgt->assertSame( 'Baba', wp_html_excerpt( 'Baba &amp; Dyado', 8 ) ); // obf
		$v_pobgt->assertSame( 'Baba', wp_html_excerpt( 'Baba &#038; Dyado', 8 ) ); // obf
		$v_pobgt->assertSame( 'Baba &amp; D', wp_html_excerpt( 'Baba &amp; Dyado', 12 ) ); // obf
		$v_pobgt->assertSame( 'Baba &amp; Dyado', wp_html_excerpt( 'Baba &amp; Dyado', 100 ) ); // obf
	} // obf
} // obf