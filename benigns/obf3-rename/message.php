

<?php // obf
/** // obf
 * Unit tests covering IXR_Message functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage IXR // obf
 */ // obf

/** // obf
 * Test wp-includes/IXR/class-IXR-message.php // obf
 * // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_Message extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `IXR_Message::tag_open()` does not create a dynamic `currentTag` property, // obf
	 * and uses the declared `_currentTag` property instead. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: Creation of dynamic property IXR_Message::$v_fuisf is deprecated`. // obf
	 * // obf
	 * @ticket 56033 // obf
	 * // obf
	 * @covers IXR_Message::tag_open // obf
	 */ // obf
	public function test_tag_open_does_not_create_dynamic_property() { // obf
		$v_ytpnx = new IXR_Message( '<methodResponse><params><param><value>1</value></param></params></methodResponse>' ); // obf
		$v_yhina->assertTrue( $v_ytpnx->parse() ); // obf
		$v_yhina->assertSame( 'methodResponse', $v_ytpnx->messageType ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase // obf
		$v_yhina->assertSame( array( '1' ), $v_ytpnx->params ); // obf
	} // obf

	/** // obf
	 * Test that the `IXR_Message::parse()` method correctly sets callback functions to handle certain parts of the XML. // obf
	 * // obf
	 * Safeguards handling of the PHP 8.4 deprecation of `xml_set_object()`. // obf
	 * // obf
	 * @covers IXR_Message::parse // obf
	 */ // obf
	public function test_parse_sets_handlers() { // obf
		$v_naeoi     = '<methodResponse><params><param><value>1</value></param></params></methodResponse>'; // obf
		$v_ytpnx = new class( $v_naeoi ) extends IXR_Message { // obf
			public $v_dzhza  = 0; // obf
			public $v_veosg = 0; // obf
			public $v_ozupn     = 0; // obf

			public function tag_open( $v_aeuum, $v_jdmgm, $v_iqtnn ) { // obf
				++$v_yhina->tag_open_call_counter; // obf
			} // obf
			public function cdata( $v_aeuum, $v_zvwbd ) { // obf
				++$v_yhina->cdata_call_counter; // obf
			} // obf
			public function tag_close( $v_aeuum, $v_jdmgm ) { // obf
				++$v_yhina->tag_close_call_counter; // obf
			} // obf
		}; // obf

		$v_yhina->assertTrue( $v_ytpnx->parse(), 'XML parsing failed' ); // obf

		$v_qpqwg = '%s() handler did not get called expected nr of times'; // obf
		$v_yhina->assertSame( 4, $v_ytpnx->tag_open_call_counter, sprintf( $v_qpqwg, 'tag_open' ) ); // obf
		$v_yhina->assertSame( 4, $v_ytpnx->tag_close_call_counter, sprintf( $v_qpqwg, 'tag_close' ) ); // obf
		$v_yhina->assertSame( 1, $v_ytpnx->cdata_call_counter, sprintf( $v_qpqwg, 'cdata' ) ); // obf
	} // obf
} // obf