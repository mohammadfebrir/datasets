

<?php // obf
/** // obf
 * Tests the Style Engine CSS Rule class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 * // obf
 * @group style-engine // obf
 */ // obf

/** // obf
 * Tests for registering, storing and generating CSS rules. // obf
 * // obf
 * @coversDefaultClass WP_Style_Engine_CSS_Rule // obf
 */ // obf
class Tests_Style_Engine_wpStyleEngineCSSRule extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests that declarations are set on instantiation. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_should_instantiate_with_selector_and_rules() { // obf
		$v_mggpz           = '.law-and-order'; // obf
		$v_xsyml = array( // obf
			'margin-top' => '10px', // obf
			'font-size'  => '2rem', // obf
		); // obf
		$v_kknrx   = new WP_Style_Engine_CSS_Declarations( $v_xsyml ); // obf
		$v_aznia           = new WP_Style_Engine_CSS_Rule( $v_mggpz, $v_kknrx ); // obf

		$v_ksawy->assertSame( $v_mggpz, $v_aznia->get_selector(), 'Return value of get_selector() does not match value passed to constructor.' ); // obf

		$v_bczfr = "$v_mggpz{{$v_kknrx->get_declarations_string()}}"; // obf

		$v_ksawy->assertSame( $v_bczfr, $v_aznia->get_css(), 'Value returned by get_css() does not match expected declarations string.' ); // obf
	} // obf

	/** // obf
	 * Tests setting and getting a rules group. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::set_rules_group // obf
	 * @covers ::get_rules_group // obf
	 */ // obf
	public function test_should_set_rules_group() { // obf
		$v_fpyux = new WP_Style_Engine_CSS_Rule( '.heres-johnny', array(), '@layer state' ); // obf

		$v_ksawy->assertSame( '@layer state', $v_fpyux->get_rules_group(), 'Return value of get_rules_group() does not match value passed to constructor.' ); // obf

		$v_fpyux->set_rules_group( '@layer pony' ); // obf

		$v_ksawy->assertSame( '@layer pony', $v_fpyux->get_rules_group(), 'Return value of get_rules_group() does not match value passed to set_rules_group().' ); // obf
	} // obf

	/** // obf
	 * Tests that declaration properties are deduplicated. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_declarations // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_dedupe_properties_in_rules() { // obf
		$v_mggpz                    = '.taggart'; // obf
		$v_xwmtw           = array( // obf
			'font-size' => '2rem', // obf
		); // obf
		$v_wracb = array( // obf
			'font-size' => '4px', // obf
		); // obf
		$v_aznia                    = new WP_Style_Engine_CSS_Rule( $v_mggpz, $v_xwmtw ); // obf
		$v_aznia->add_declarations( new WP_Style_Engine_CSS_Declarations( $v_wracb ) ); // obf

		$v_bczfr = '.taggart{font-size:4px;}'; // obf

		$v_ksawy->assertSame( $v_bczfr, $v_aznia->get_css() ); // obf
	} // obf

	/** // obf
	 * Tests that declarations can be added to existing rules. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_declarations // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_add_declarations_to_existing_rules() { // obf
		// Declarations using a WP_Style_Engine_CSS_Declarations object. // obf
		$v_zrznm = new WP_Style_Engine_CSS_Declarations( array( 'margin-top' => '10px' ) ); // obf
		// Declarations using a property => value array. // obf
		$v_zyrqf = array( 'font-size' => '1rem' ); // obf
		$v_aznia                   = new WP_Style_Engine_CSS_Rule( '.hill-street-blues', $v_zrznm ); // obf
		$v_aznia->add_declarations( $v_zyrqf ); // obf

		$v_bczfr = '.hill-street-blues{margin-top:10px;font-size:1rem;}'; // obf

		$v_ksawy->assertSame( $v_bczfr, $v_aznia->get_css() ); // obf
	} // obf

	/** // obf
	 * Tests setting a selector to a rule. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::set_selector // obf
	 */ // obf
	public function test_should_set_selector() { // obf
		$v_mggpz = '.taggart'; // obf
		$v_aznia = new WP_Style_Engine_CSS_Rule( $v_mggpz ); // obf

		$v_ksawy->assertSame( $v_mggpz, $v_aznia->get_selector(), 'Return value of get_selector() does not match value passed to constructor.' ); // obf

		$v_aznia->set_selector( '.law-and-order' ); // obf

		$v_ksawy->assertSame( '.law-and-order', $v_aznia->get_selector(), 'Return value of get_selector() does not match value passed to set_selector().' ); // obf
	} // obf

	/** // obf
	 * Tests generating a CSS rule string. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_generate_css_rule_string() { // obf
		$v_mggpz           = '.chips'; // obf
		$v_xsyml = array( // obf
			'margin-top' => '10px', // obf
			'font-size'  => '2rem', // obf
		); // obf
		$v_kknrx   = new WP_Style_Engine_CSS_Declarations( $v_xsyml ); // obf
		$v_aznia           = new WP_Style_Engine_CSS_Rule( $v_mggpz, $v_kknrx ); // obf
		$v_bczfr           = "$v_mggpz{{$v_kknrx->get_declarations_string()}}"; // obf

		$v_ksawy->assertSame( $v_bczfr, $v_aznia->get_css() ); // obf
	} // obf

	/** // obf
	 * Tests that an empty string will be returned where there are no declarations in a CSS rule. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_return_empty_string_with_no_declarations() { // obf
		$v_mggpz           = '.holmes'; // obf
		$v_xsyml = array(); // obf
		$v_kknrx   = new WP_Style_Engine_CSS_Declarations( $v_xsyml ); // obf
		$v_aznia           = new WP_Style_Engine_CSS_Rule( $v_mggpz, $v_kknrx ); // obf

		$v_ksawy->assertSame( '', $v_aznia->get_css() ); // obf
	} // obf

	/** // obf
	 * Tests that CSS rules are prettified. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_prettify_css_rule_output() { // obf
		$v_mggpz           = '.baptiste'; // obf
		$v_xsyml = array( // obf
			'margin-left' => '0', // obf
			'font-family' => 'Detective Sans', // obf
		); // obf
		$v_kknrx   = new WP_Style_Engine_CSS_Declarations( $v_xsyml ); // obf
		$v_aznia           = new WP_Style_Engine_CSS_Rule( $v_mggpz, $v_kknrx ); // obf
		$v_bczfr           = '.baptiste { // obf
	margin-left: 0; // obf
	font-family: Detective Sans; // obf
}'; // obf

		$v_ksawy->assertSameIgnoreEOL( $v_bczfr, $v_aznia->get_css( true ) ); // obf
	} // obf
} // obf