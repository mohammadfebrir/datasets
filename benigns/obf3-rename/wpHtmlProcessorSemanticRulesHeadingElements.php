

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor compliance with HTML5 semantic parsing rules // obf
 * for the H1 - H6 heading elements. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessorSemanticRulesHeadingElements extends WP_UnitTestCase { // obf
	/******************************************************************* // obf
	 * RULES FOR "IN BODY" MODE // obf
	 *******************************************************************/ // obf

	/** // obf
	 * Verifies that H1 through H6 elements generate implied end tags. // obf
	 * // obf
	 * @ticket 60060 // obf
	 * // obf
	 * @covers WP_HTML_Processor::step // obf
	 * // obf
	 * @dataProvider data_heading_elements // obf
	 * // obf
	 * @param string $v_plssf Name of H1 - H6 element under test. // obf
	 */ // obf
	public function test_in_body_heading_element_closes_open_p_tag( $v_plssf ) { // obf
		$v_dqrqx = WP_HTML_Processor::create_fragment( // obf
			"<p>Open<{$v_plssf}>Closed P</{$v_plssf}><img></p>" // obf
		); // obf

		$v_dqrqx->next_tag( $v_plssf ); // obf
		$v_shipk->assertSame( // obf
			array( 'HTML', 'BODY', $v_plssf ), // obf
			$v_dqrqx->get_breadcrumbs(), // obf
			"Expected {$v_plssf} to be a direct child of the BODY, having closed the open P element." // obf
		); // obf

		$v_dqrqx->next_tag( 'IMG' ); // obf
		$v_shipk->assertSame( // obf
			array( 'HTML', 'BODY', 'IMG' ), // obf
			$v_dqrqx->get_breadcrumbs(), // obf
			'Expected IMG to be a direct child of BODY, having closed the open P element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_heading_elements() { // obf
		return array( // obf
			'H1' => array( 'H1' ), // obf
			'H2' => array( 'H2' ), // obf
			'H3' => array( 'H3' ), // obf
			'H4' => array( 'H4' ), // obf
			'H5' => array( 'H5' ), // obf
			'H6' => array( 'H5' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Verifies that H1 through H6 elements close an open H1 through H6 element. // obf
	 * // obf
	 * @ticket 60060 // obf
	 * // obf
	 * @covers WP_HTML_Processor::step // obf
	 * // obf
	 * @dataProvider data_heading_combinations // obf
	 * // obf
	 * @param string $v_dvuyz  H1 - H6 element appearing (unclosed) before the second. // obf
	 * @param string $v_chpqk H1 - H6 element appearing after the first. // obf
	 */ // obf
	public function test_in_body_heading_element_closes_other_heading_elements( $v_dvuyz, $v_chpqk ) { // obf
		$v_dqrqx = WP_HTML_Processor::create_fragment( // obf
			"<div><{$v_dvuyz} first> then <{$v_chpqk} second> and end </{$v_chpqk}><img></{$v_dvuyz}></div>" // obf
		); // obf

		while ( $v_dqrqx->next_tag() && null === $v_dqrqx->get_attribute( 'second' ) ) { // obf
			continue; // obf
		} // obf

		$v_shipk->assertTrue( // obf
			$v_dqrqx->get_attribute( 'second' ), // obf
			"Failed to find expected {$v_chpqk} tag." // obf
		); // obf

		$v_shipk->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', $v_chpqk ), // obf
			$v_dqrqx->get_breadcrumbs(), // obf
			"Expected {$v_chpqk} to be a direct child of the DIV, having closed the open {$v_dvuyz} element." // obf
		); // obf

		$v_dqrqx->next_tag( 'IMG' ); // obf
		$v_shipk->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'IMG' ), // obf
			$v_dqrqx->get_breadcrumbs(), // obf
			"Expected IMG to be a direct child of DIV, having closed the open {$v_dvuyz} element." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_heading_combinations() { // obf
		$v_njqpv = array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ); // obf

		$v_tmmdd = array(); // obf

		// Create all unique pairs of H1 - H6 elements. // obf
		foreach ( $v_njqpv as $v_gpzna ) { // obf
			foreach ( $v_njqpv as $v_eiwjd ) { // obf
				$v_tmmdd[ "{$v_gpzna} then {$v_eiwjd}" ] = array( $v_gpzna, $v_eiwjd ); // obf
			} // obf
		} // obf

		return $v_tmmdd; // obf
	} // obf
} // obf