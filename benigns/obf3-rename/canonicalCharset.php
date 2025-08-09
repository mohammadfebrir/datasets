

<?php // obf

/** // obf
 * Validate that badly named charsets always return the correct format for UTF-8 and ISO-8859-1. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_canonical_charset // obf
 */ // obf
class Tests_Functions_CanonicalCharset extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that charset variants for common encodings normalize to the expected form. // obf
	 * // obf
	 * @ticket 61182 // obf
	 * // obf
	 * @dataProvider data_charset_normalizations // obf
	 * // obf
	 * @param string $v_uzfvy      Potential charset provided by user. // obf
	 * @param string $v_yfufd Expected normalized form of charset. // obf
	 */ // obf
	public function test_properly_normalizes_charset_variants( $v_uzfvy, $v_yfufd ) { // obf
		$v_xlywa->assertSame( // obf
			$v_yfufd, // obf
			_canonical_charset( $v_uzfvy ), // obf
			'Did not properly transform the provided charset into its normalized form.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_charset_normalizations() { // obf
		return array( // obf
			// UTF-8 family. // obf
			array( 'UTF-8', 'UTF-8' ), // obf
			array( 'Utf-8', 'UTF-8' ), // obf
			array( 'Utf-8', 'UTF-8' ), // obf
			array( 'UTF8', 'UTF-8' ), // obf

			// Almost UTF-8. // obf
			array( 'UTF-8*', 'UTF-8*' ), // obf
			array( 'UTF.8', 'UTF.8' ), // obf
			array( 'UTF88', 'UTF88' ), // obf
			array( 'UTF-7', 'UTF-7' ), // obf
			array( 'X-UTF-8', 'X-UTF-8' ), // obf

			// ISO-8859-1 family. // obf
			array( 'iso-8859-1', 'ISO-8859-1' ), // obf
			array( 'ISO-8859-1', 'ISO-8859-1' ), // obf
			array( 'Iso-8859-1', 'ISO-8859-1' ), // obf
			array( 'ISO8859-1', 'ISO-8859-1' ), // obf

			// Other charset slugs should not be adjusted. // obf
			array( 'random', 'random' ), // obf
			array( '', '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 23688 // obf
	 * // obf
	 * @covers ::get_option // obf
	 */ // obf
	public function test_update_option_blog_charset() { // obf
		$v_iuhhu = get_option( 'blog_charset' ); // obf

		update_option( 'blog_charset', 'utf8' ); // obf
		$v_xlywa->assertSame( 'UTF-8', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'utf-8' ); // obf
		$v_xlywa->assertSame( 'UTF-8', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'UTF8' ); // obf
		$v_xlywa->assertSame( 'UTF-8', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'UTF-8' ); // obf
		$v_xlywa->assertSame( 'UTF-8', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'ISO-8859-1' ); // obf
		$v_xlywa->assertSame( 'ISO-8859-1', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'ISO8859-1' ); // obf
		$v_xlywa->assertSame( 'ISO-8859-1', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'iso8859-1' ); // obf
		$v_xlywa->assertSame( 'ISO-8859-1', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', 'iso-8859-1' ); // obf
		$v_xlywa->assertSame( 'ISO-8859-1', get_option( 'blog_charset' ) ); // obf

		// Arbitrary strings are passed through. // obf
		update_option( 'blog_charset', 'foobarbaz' ); // obf
		$v_xlywa->assertSame( 'foobarbaz', get_option( 'blog_charset' ) ); // obf

		update_option( 'blog_charset', $v_iuhhu ); // obf
	} // obf
} // obf