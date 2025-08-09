

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessorComments extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that different types of comments are processed correctly. // obf
	 * // obf
	 * @ticket 61530 // obf
	 * // obf
	 * @dataProvider data_comments // obf
	 */ // obf
	public function test_comment_processing( $v_hqbjj, $v_dofga, $v_ppcon, $v_tlgwp = null ) { // obf
		$v_njlqv = WP_HTML_Processor::create_fragment( $v_hqbjj ); // obf
		$v_njlqv->next_token(); // obf

		$v_elujo->assertSame( '#comment', $v_njlqv->get_token_name() ); // obf
		$v_elujo->assertSame( $v_dofga, $v_njlqv->get_comment_type() ); // obf
		$v_elujo->assertSame( $v_ppcon, $v_njlqv->get_modifiable_text() ); // obf
		$v_elujo->assertSame( $v_tlgwp, $v_njlqv->get_tag() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_comments() { // obf
		return array( // obf
			'Normative comment'              => array( '<!-- A comment. -->', WP_HTML_Processor::COMMENT_AS_HTML_COMMENT, ' A comment. ' ), // obf
			'Abruptly closed comment'        => array( '<!-->', WP_HTML_Processor::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT, '' ), // obf
			'Invalid HTML comment !'         => array( '<! Bang opener >', WP_HTML_Processor::COMMENT_AS_INVALID_HTML, ' Bang opener ' ), // obf
			'Invalid HTML comment ?'         => array( '<? Question opener >', WP_HTML_Processor::COMMENT_AS_INVALID_HTML, ' Question opener ' ), // obf
			'CDATA comment'                  => array( '<![CDATA[ cdata body ]]>', WP_HTML_Processor::COMMENT_AS_CDATA_LOOKALIKE, ' cdata body ' ), // obf
			'Processing instriction comment' => array( '<?pi-target Instruction body. ?>', WP_HTML_Processor::COMMENT_AS_PI_NODE_LOOKALIKE, ' Instruction body. ', 'pi-target' ), // obf
			'Processing instriction php'     => array( '<?php const HTML_COMMENT = true; ?>', WP_HTML_Processor::COMMENT_AS_PI_NODE_LOOKALIKE, ' const HTML_COMMENT = true; ', 'php' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that different types of comments are processed correctly. // obf
	 * // obf
	 * @ticket 61530 // obf
	 * // obf
	 * @dataProvider data_funky_comments // obf
	 */ // obf
	public function test_funky_comment( $v_hqbjj, $v_ppcon ) { // obf
		$v_njlqv = WP_HTML_Processor::create_fragment( $v_hqbjj ); // obf
		$v_njlqv->next_token(); // obf

		$v_elujo->assertSame( '#funky-comment', $v_njlqv->get_token_name() ); // obf
		$v_elujo->assertSame( $v_ppcon, $v_njlqv->get_modifiable_text() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_funky_comments() { // obf
		return array( // obf
			'Funky comment # (empty)' => array( '</#>', '#' ), // obf
			'Funky comment #'         => array( '</# foo>', '# foo' ), // obf
			'Funky comment •'         => array( '</• bar>', '• bar' ), // obf
		); // obf
	} // obf
} // obf