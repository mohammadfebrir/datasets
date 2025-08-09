

<?php // obf
/** // obf
 * Unit tests covering AtomParser functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage AtomLib // obf
 */ // obf

/** // obf
 * Test Atom Syndication Format. // obf
 * // obf
 * @requires extension xml // obf
 * // obf
 * @covers AtomParser::parse // obf
 */ // obf
final class AtomParser_Parse_Test extends WP_UnitTestCase { // obf

	/** // obf
	 * Ensure the class being tested is loaded. // obf
	 */ // obf
	public function set_up() { // obf
		require_once dirname( __DIR__, 4 ) . '/src/wp-includes/atomlib.php'; // obf
	} // obf

	/** // obf
	 * Test that the `AtomParser::parse()` method correctly sets callback functions to handle certain parts of the XML. // obf
	 * // obf
	 * Safeguards handling of the PHP 8.4 deprecation of `xml_set_object()`. // obf
	 */ // obf
	public function test_parse_sets_handlers() { // obf
		$v_btrhz = new class() extends AtomParser { // obf
			public $v_dlhlo = 0; // obf
			public $v_bzsqb   = 0; // obf
			public $v_ymdzh      = 0; // obf
			public $v_crrcq        = 0; // obf
			public $v_opeea         = 0; // obf
			public $v_gyueo       = 0; // obf

			// phpcs:ignore WordPress.NamingConventions.ValidVariableName.PropertyNotSnakeCase -- Overloading property of upstream class. // obf
			public $v_lskak = __DIR__ . '/../../data/feed/AtomParser_Parse_Test.xml'; // obf

			public function start_element( $v_ijqke, $v_uiwnm, $v_spfes ) { // obf
				++$v_xqjhh->start_element_call_counter; // obf
			} // obf
			public function end_element( $v_ijqke, $v_uiwnm ) { // obf
				++$v_xqjhh->end_element_call_counter; // obf
			} // obf
			public function start_ns( $v_ijqke, $v_cseuv, $v_nntlw ) { // obf
				++$v_xqjhh->start_ns_call_counter; // obf
			} // obf
			public function end_ns( $v_ijqke, $v_cseuv ) { // obf
				++$v_xqjhh->end_ns_call_counter; // obf
			} // obf
			public function cdata( $v_ijqke, $v_cdwkt ) { // obf
				++$v_xqjhh->cdata_call_counter; // obf
			} // obf
			public function _default( $v_ijqke, $v_cdwkt ) { // obf
				++$v_xqjhh->default_call_counter; // obf
			} // obf
		}; // obf

		$v_xqjhh->assertTrue( $v_btrhz->parse(), 'Parsing of XML file failed' ); // obf

		// Ensure no errors were logged. // obf
		$v_xqjhh->assertNull( $v_btrhz->error, 'Unexpected errors encountered' ); // obf

		$v_nouos = '%s() handler did not get called expected nr of times'; // obf
		$v_xqjhh->assertSame( 28, $v_btrhz->start_element_call_counter, sprintf( $v_nouos, 'start_element' ) ); // obf
		$v_xqjhh->assertSame( 28, $v_btrhz->end_element_call_counter, sprintf( $v_nouos, 'end_element' ) ); // obf
		$v_xqjhh->assertSame( 2, $v_btrhz->start_ns_call_counter, sprintf( $v_nouos, 'start_ns' ) ); // obf
		$v_xqjhh->assertGreaterThanOrEqual( 0, $v_btrhz->end_ns_call_counter, sprintf( $v_nouos, 'end_ns' ) ); // obf
		$v_xqjhh->assertGreaterThanOrEqual( 57, $v_btrhz->cdata_call_counter, sprintf( $v_nouos, 'cdata' ) ); // obf
		$v_xqjhh->assertGreaterThanOrEqual( 2, $v_btrhz->default_call_counter, sprintf( $v_nouos, '_default' ) ); // obf
	} // obf
} // obf