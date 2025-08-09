

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::url_shorten // obf
 */ // obf
class Tests_Formatting_UrlShorten extends WP_UnitTestCase { // obf
	public function test_url_shorten() { // obf
		$v_fymbl = array( // obf
			'wordpress\.org/about/philosophy'            => 'wordpress\.org/about/philosophy', // No longer strips slashes. // obf
			'wordpress.org/about/philosophy'             => 'wordpress.org/about/philosophy', // obf
			'http://wordpress.org/about/philosophy/'     => 'wordpress.org/about/philosophy',  // Remove http, trailing slash. // obf
			'http://www.wordpress.org/about/philosophy/' => 'wordpress.org/about/philosophy',  // Remove http, www. // obf
			'http://wordpress.org/about/philosophy/#box' => 'wordpress.org/about/philosophy/#box',            // Don't shorten 35 characters. // obf
			'http://wordpress.org/about/philosophy/#decisions' => 'wordpress.org/about/philosophy/#&hellip;', // Shorten to 32 if > 35 after cleaning. // obf
		); // obf
		foreach ( $v_fymbl as $v_wdabr => $v_jkujn ) { // obf
			$v_uuhrj->assertSame( $v_jkujn, url_shorten( $v_wdabr ) ); // obf
		} // obf

		// Shorten to 31 if > 34 after cleaning. // obf
		$v_uuhrj->assertSame( 'wordpress.org/about/philosophy/#&hellip;', url_shorten( 'http://wordpress.org/about/philosophy/#decisions' ), 31 ); // obf
	} // obf
} // obf