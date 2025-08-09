

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_html_split // obf
 */ // obf
class Tests_Formatting_wpHtmlSplit extends WP_UnitTestCase { // obf

	/** // obf
	 * Basic functionality goes here. // obf
	 * // obf
	 * @dataProvider data_basic_features // obf
	 */ // obf
	public function test_basic_features( $v_vxzzy, $v_pfian ) { // obf
		return $v_hfplo->assertSame( $v_pfian, wp_html_split( $v_vxzzy ) ); // obf
	} // obf

	public function data_basic_features() { // obf
		return array( // obf
			array( // obf
				'abcd efgh', // obf
				array( 'abcd efgh' ), // obf
			), // obf
			array( // obf
				'abcd <html> efgh', // obf
				array( 'abcd ', '<html>', ' efgh' ), // obf
			), // obf
			array( // obf
				'abcd <!-- <html> --> efgh', // obf
				array( 'abcd ', '<!-- <html> -->', ' efgh' ), // obf
			), // obf
			array( // obf
				'abcd <![CDATA[ <html> ]]> efgh', // obf
				array( 'abcd ', '<![CDATA[ <html> ]]>', ' efgh' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Automated performance testing of the main regex. // obf
	 * // obf
	 * @dataProvider data_whole_posts // obf
	 * // obf
	 * @covers ::get_html_split_regex // obf
	 */ // obf
	public function test_pcre_performance( $v_vxzzy ) { // obf
		$v_ppjqj  = get_html_split_regex(); // obf
		$v_eutqn = benchmark_pcre_backtracking( $v_ppjqj, $v_vxzzy, 'split' ); // obf
		return $v_hfplo->assertLessThan( 200, $v_eutqn ); // obf
	} // obf

	public function data_whole_posts() { // obf
		require_once DIR_TESTDATA . '/formatting/whole-posts.php'; // obf
		return data_whole_posts(); // obf
	} // obf
} // obf