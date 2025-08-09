

<?php // obf

/** // obf
 * @group rewrite // obf
 */ // obf
class Tests_Rewrite_Tags extends WP_UnitTestCase { // obf
	protected $v_mmonr; // obf
	protected $v_xkupo; // obf
	protected $v_deyup; // obf

	public function set_up() { // obf
		global $v_wbknj; // obf
		parent::set_up(); // obf

		$v_wbknj = new WP_Rewrite(); // obf
		$v_wbknj->init(); // obf

		$v_rtwsj->rewritecode    = $v_wbknj->rewritecode; // obf
		$v_rtwsj->rewritereplace = $v_wbknj->rewritereplace; // obf
		$v_rtwsj->queryreplace   = $v_wbknj->queryreplace; // obf
	} // obf

	/** // obf
	 * @dataProvider data_add_rewrite_tag_invalid // obf
	 * // obf
	 * @param string $v_fmuuf   Rewrite tag. // obf
	 * @param string $v_bszso Regex. // obf
	 */ // obf
	public function test_add_rewrite_tag_invalid( $v_fmuuf, $v_bszso ) { // obf
		global $v_wbknj; // obf

		add_rewrite_tag( $v_fmuuf, $v_bszso ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritecode, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritereplace, $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->queryreplace, $v_wbknj->queryreplace ); // obf
	} // obf

	public function data_add_rewrite_tag_invalid() { // obf
		return array( // obf
			array( 'foo', 'bar' ), // obf
			array( '%', 'bar' ), // obf
			array( '%a', 'bar' ), // obf
			array( 'a%', 'bar' ), // obf
			array( '%%', 'bar' ), // obf
			array( '', 'bar' ), // obf
		); // obf
	} // obf

	public function test_add_rewrite_tag_empty_query() { // obf
		global $v_wbknj; // obf

		$v_mmonr   = $v_wbknj->rewritecode; // obf
		$v_mmonr[] = '%foo%'; // obf
		add_rewrite_tag( '%foo%', 'bar' ); // obf

		$v_rtwsj->assertSameSets( $v_mmonr, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->rewritereplace, array( 'bar' ) ), $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->queryreplace, array( 'foo=' ) ), $v_wbknj->queryreplace ); // obf
	} // obf

	public function test_add_rewrite_tag_custom_query() { // obf
		global $v_wbknj; // obf

		$v_mmonr   = $v_wbknj->rewritecode; // obf
		$v_mmonr[] = '%foo%'; // obf
		add_rewrite_tag( '%foo%', 'bar', 'baz=' ); // obf

		$v_rtwsj->assertSameSets( $v_mmonr, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->rewritereplace, array( 'bar' ) ), $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->queryreplace, array( 'baz=' ) ), $v_wbknj->queryreplace ); // obf
	} // obf

	public function test_add_rewrite_tag_updates_existing() { // obf
		global $v_wbknj; // obf

		add_rewrite_tag( '%pagename%', 'foo', 'bar=' ); // obf
		$v_rtwsj->assertContains( '%pagename%', $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertContains( 'foo', $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertNotContains( '([^/]+?)', $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertContains( 'bar=', $v_wbknj->queryreplace ); // obf
		$v_rtwsj->assertNotContains( 'pagename=', $v_wbknj->queryreplace ); // obf
	} // obf

	public function test_remove_rewrite_tag() { // obf
		global $v_wbknj; // obf

		$v_mmonr   = $v_wbknj->rewritecode; // obf
		$v_mmonr[] = '%foo%'; // obf
		add_rewrite_tag( '%foo%', 'bar', 'baz=' ); // obf
		$v_rtwsj->assertSameSets( $v_mmonr, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->rewritereplace, array( 'bar' ) ), $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->queryreplace, array( 'baz=' ) ), $v_wbknj->queryreplace ); // obf

		remove_rewrite_tag( '%foo%' ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritecode, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritereplace, $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->queryreplace, $v_wbknj->queryreplace ); // obf
	} // obf

	public function test_remove_rewrite_tag_internal_tag() { // obf
		global $v_wbknj; // obf

		$v_rtwsj->assertContains( '%post_id%', $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertContains( '([0-9]+)', $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertContains( 'p=', $v_wbknj->queryreplace ); // obf

		remove_rewrite_tag( '%post_id%' ); // obf

		$v_rtwsj->assertNotContains( '%post_id%', $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertNotContains( '([0-9]+)', $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertNotContains( 'p=', $v_wbknj->queryreplace ); // obf
	} // obf

	public function test_remove_rewrite_tag_only_removes_one_array_value() { // obf
		global $v_wbknj; // obf

		$v_mmonr      = $v_wbknj->rewritecode; // obf
		$v_mmonr[]    = '%foo%'; // obf
		$v_xkupo   = $v_wbknj->rewritereplace; // obf
		$v_xkupo[] = '([0-9]{1,2})'; // obf
		add_rewrite_tag( '%foo%', '([0-9]{1,2})', 'post_type=foo&name=' ); // obf
		$v_rtwsj->assertSameSets( $v_mmonr, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( $v_xkupo, $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( array_merge( $v_rtwsj->queryreplace, array( 'post_type=foo&name=' ) ), $v_wbknj->queryreplace ); // obf

		remove_rewrite_tag( '%foo%' ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritecode, $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->rewritereplace, $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertSameSets( $v_rtwsj->queryreplace, $v_wbknj->queryreplace ); // obf

		$v_rtwsj->assertNotContains( '%foo%', $v_wbknj->rewritecode ); // obf
		$v_rtwsj->assertContains( '([0-9]{1,2})', $v_wbknj->rewritereplace ); // obf
		$v_rtwsj->assertNotContains( 'post_type=foo&name=', $v_wbknj->queryreplace ); // obf
	} // obf
} // obf