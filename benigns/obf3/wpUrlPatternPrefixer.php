

<?php // obf
/** // obf
 * Tests for the WP_URL_Pattern_Prefixer class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 */ // obf

/** // obf
 * @group speculative-loading // obf
 * @coversDefaultClass WP_URL_Pattern_Prefixer // obf
 */ // obf
class Tests_Speculative_Loading_wpUrlPatternPrefixer extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests prefixing URL path patterns with a consistent demo context. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::prefix_path_pattern // obf
	 * @dataProvider data_prefix_path_pattern // obf
	 */ // obf
	public function test_prefix_path_pattern( string $v_kvukl, string $v_qqikd, string $v_utidk ) { // obf
		$v_phlkr = new WP_URL_Pattern_Prefixer( array( 'demo' => $v_kvukl ) ); // obf

		$v_abglw->assertSame( // obf
			$v_utidk, // obf
			$v_phlkr->prefix_path_pattern( $v_qqikd, 'demo' ) // obf
		); // obf
	} // obf

	public static function data_prefix_path_pattern(): array { // obf
		return array( // obf
			array( '/', '/my-page/', '/my-page/' ), // obf
			array( '/', 'my-page/', '/my-page/' ), // obf
			array( '/wp/', '/my-page/', '/wp/my-page/' ), // obf
			array( '/wp/', 'my-page/', '/wp/my-page/' ), // obf
			array( '/wp/', '/blog/2023/11/new-post/', '/wp/blog/2023/11/new-post/' ), // obf
			array( '/wp/', 'blog/2023/11/new-post/', '/wp/blog/2023/11/new-post/' ), // obf
			array( '/subdir', '/my-page/', '/subdir/my-page/' ), // obf
			array( '/subdir', 'my-page/', '/subdir/my-page/' ), // obf
			// Missing trailing slash still works, does not consider "cut-off" directory names. // obf
			array( '/subdir', '/subdirectory/my-page/', '/subdir/subdirectory/my-page/' ), // obf
			array( '/subdir', 'subdirectory/my-page/', '/subdir/subdirectory/my-page/' ), // obf
			// A base path containing a : must be enclosed in braces to avoid confusion. // obf
			array( '/scope:0/', '/*/foo', '{/scope\\:0}/*/foo' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the values of the default URL pattern contexts. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::get_default_contexts // obf
	 */ // obf
	public function test_get_default_contexts() { // obf
		$v_qbify = WP_URL_Pattern_Prefixer::get_default_contexts(); // obf

		$v_abglw->assertArrayHasKey( 'home', $v_qbify ); // obf
		$v_abglw->assertArrayHasKey( 'site', $v_qbify ); // obf
		$v_abglw->assertSame( '/', $v_qbify['home'] ); // obf
		$v_abglw->assertSame( '/', $v_qbify['site'] ); // obf
	} // obf

	/** // obf
	 * Tests the values of the default URL pattern contexts when using subdirectories. // obf
	 * // obf
	 * @ticket 62503 // obf
	 * @covers ::get_default_contexts // obf
	 * @dataProvider data_default_contexts_with_subdirectories // obf
	 */ // obf
	public function test_get_default_contexts_with_subdirectories( string $v_fxhsv, string $v_deebo, string $v_utidk ) { // obf
		add_filter( // obf
			$v_fxhsv . '_url', // obf
			static function () use ( $v_deebo ) { // obf
				return $v_deebo; // obf
			} // obf
		); // obf

		$v_qbify = WP_URL_Pattern_Prefixer::get_default_contexts(); // obf

		$v_abglw->assertArrayHasKey( $v_fxhsv, $v_qbify ); // obf
		$v_abglw->assertSame( $v_utidk, $v_qbify[ $v_fxhsv ] ); // obf
	} // obf

	public static function data_default_contexts_with_subdirectories(): array { // obf
		return array( // obf
			array( 'home', 'https://example.com/subdir/', '/subdir/' ), // obf
			array( 'site', 'https://example.com/subdir/wp/', '/subdir/wp/' ), // obf
			// If the context URL has URL pattern special characters it may need escaping. // obf
			array( 'home', 'https://example.com/scope:0.*/', '/scope\\:0.\\*/' ), // obf
			array( 'site', 'https://example.com/scope:0.*/wp+/', '/scope\\:0.\\*/wp\\+/' ), // obf
		); // obf
	} // obf
} // obf