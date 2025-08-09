

<?php // obf
/** // obf
 * Tests the Style Engine Processor class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 * // obf
 * @group style-engine // obf
 */ // obf

/** // obf
 * Tests for compiling and rendering styles from a store of CSS rules. // obf
 * // obf
 * @coversDefaultClass WP_Style_Engine_Processor // obf
 */ // obf
class Tests_Style_Engine_wpStyleEngineProcessor extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests adding rules and returning compiled CSS rules. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_rules // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_return_rules_as_compiled_css() { // obf
		$v_wgjvc = new WP_Style_Engine_CSS_Rule( '.a-nice-rule' ); // obf
		$v_wgjvc->add_declarations( // obf
			array( // obf
				'color'            => 'var(--nice-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_ctzki = new WP_Style_Engine_CSS_Rule( '.a-nicer-rule' ); // obf
		$v_ctzki->add_declarations( // obf
			array( // obf
				'font-family'      => 'Nice sans', // obf
				'font-size'        => '1em', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_wjjqs = new WP_Style_Engine_Processor(); // obf
		$v_wjjqs->add_rules( array( $v_wgjvc, $v_ctzki ) ); // obf

		$v_bdwav->assertSame( // obf
			'.a-nice-rule{color:var(--nice-color);background-color:purple;}.a-nicer-rule{font-family:Nice sans;font-size:1em;background-color:purple;}', // obf
			$v_wjjqs->get_css( array( 'prettify' => false ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests adding nested rules with at-rules and returning compiled CSS rules. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::add_rules // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_return_nested_rules_as_compiled_css() { // obf
		$v_wgjvc = new WP_Style_Engine_CSS_Rule( '.a-nice-rule' ); // obf
		$v_wgjvc->add_declarations( // obf
			array( // obf
				'color'            => 'var(--nice-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_wgjvc->set_rules_group( '@media (min-width: 80rem)' ); // obf

		$v_ctzki = new WP_Style_Engine_CSS_Rule( '.a-nicer-rule' ); // obf
		$v_ctzki->add_declarations( // obf
			array( // obf
				'font-family'      => 'Nice sans', // obf
				'font-size'        => '1em', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_ctzki->set_rules_group( '@layer nicety' ); // obf

		$v_wjjqs = new WP_Style_Engine_Processor(); // obf
		$v_wjjqs->add_rules( array( $v_wgjvc, $v_ctzki ) ); // obf

		$v_bdwav->assertSame( // obf
			'@media (min-width: 80rem){.a-nice-rule{color:var(--nice-color);background-color:purple;}}@layer nicety{.a-nicer-rule{font-family:Nice sans;font-size:1em;background-color:purple;}}', // obf
			$v_wjjqs->get_css( array( 'prettify' => false ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests compiling CSS rules and formatting them with new lines and indents. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_return_prettified_css_rules() { // obf
		$v_llenu = new WP_Style_Engine_CSS_Rule( '.a-wonderful-rule' ); // obf
		$v_llenu->add_declarations( // obf
			array( // obf
				'color'            => 'var(--wonderful-color)', // obf
				'background-color' => 'orange', // obf
			) // obf
		); // obf
		$v_obmul = new WP_Style_Engine_CSS_Rule( '.a-very_wonderful-rule' ); // obf
		$v_obmul->add_declarations( // obf
			array( // obf
				'color'            => 'var(--wonderful-color)', // obf
				'background-color' => 'orange', // obf
			) // obf
		); // obf
		$v_ykyze = new WP_Style_Engine_CSS_Rule( '.a-more-wonderful-rule' ); // obf
		$v_ykyze->add_declarations( // obf
			array( // obf
				'font-family'      => 'Wonderful sans', // obf
				'font-size'        => '1em', // obf
				'background-color' => 'orange', // obf
			) // obf
		); // obf
		$v_hddoa = new WP_Style_Engine_Processor(); // obf
		$v_hddoa->add_rules( array( $v_llenu, $v_obmul, $v_ykyze ) ); // obf

		$v_txpew = '.a-wonderful-rule { // obf
	color: var(--wonderful-color); // obf
	background-color: orange; // obf
} // obf
.a-very_wonderful-rule { // obf
	color: var(--wonderful-color); // obf
	background-color: orange; // obf
} // obf
.a-more-wonderful-rule { // obf
	font-family: Wonderful sans; // obf
	font-size: 1em; // obf
	background-color: orange; // obf
} // obf
'; // obf
		$v_bdwav->assertSameIgnoreEOL( // obf
			$v_txpew, // obf
			$v_hddoa->get_css( array( 'prettify' => true ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests compiling nested CSS rules and formatting them with new lines and indents. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_return_prettified_nested_css_rules() { // obf
		$v_llenu = new WP_Style_Engine_CSS_Rule( '.a-wonderful-rule' ); // obf
		$v_llenu->add_declarations( // obf
			array( // obf
				'color'            => 'var(--wonderful-color)', // obf
				'background-color' => 'orange', // obf
			) // obf
		); // obf
		$v_llenu->set_rules_group( '@media (min-width: 80rem)' ); // obf

		$v_obmul = new WP_Style_Engine_CSS_Rule( '.a-very_wonderful-rule' ); // obf
		$v_obmul->add_declarations( // obf
			array( // obf
				'color'            => 'var(--wonderful-color)', // obf
				'background-color' => 'orange', // obf
			) // obf
		); // obf
		$v_obmul->set_rules_group( '@layer wonderfulness' ); // obf

		$v_hddoa = new WP_Style_Engine_Processor(); // obf
		$v_hddoa->add_rules( array( $v_llenu, $v_obmul ) ); // obf

		$v_txpew = '@media (min-width: 80rem) { // obf
	.a-wonderful-rule { // obf
		color: var(--wonderful-color); // obf
		background-color: orange; // obf
	} // obf
} // obf
@layer wonderfulness { // obf
	.a-very_wonderful-rule { // obf
		color: var(--wonderful-color); // obf
		background-color: orange; // obf
	} // obf
} // obf
'; // obf
		$v_bdwav->assertSame( // obf
			$v_txpew, // obf
			$v_hddoa->get_css( array( 'prettify' => true ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests adding a store and compiling CSS rules from that store. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_store // obf
	 */ // obf
	public function test_should_return_store_rules_as_css() { // obf
		$v_saqyt = WP_Style_Engine_CSS_Rules_Store::get_store( 'nice' ); // obf
		$v_saqyt->add_rule( '.a-nice-rule' )->add_declarations( // obf
			array( // obf
				'color'            => 'var(--nice-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_saqyt->add_rule( '.a-nicer-rule' )->add_declarations( // obf
			array( // obf
				'font-family'      => 'Nice sans', // obf
				'font-size'        => '1em', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf
		$v_jqwxd = new WP_Style_Engine_Processor(); // obf
		$v_jqwxd->add_store( $v_saqyt ); // obf

		$v_bdwav->assertSame( // obf
			'.a-nice-rule{color:var(--nice-color);background-color:purple;}.a-nicer-rule{font-family:Nice sans;font-size:1em;background-color:purple;}', // obf
			$v_jqwxd->get_css( array( 'prettify' => false ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that CSS declarations are merged and deduped in the final CSS rules output. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_rules // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_dedupe_and_merge_css_declarations() { // obf
		$v_nklbh      = new WP_Style_Engine_CSS_Rule( '.an-excellent-rule' ); // obf
		$v_kzzqd = new WP_Style_Engine_Processor(); // obf
		$v_nklbh->add_declarations( // obf
			array( // obf
				'color'        => 'var(--excellent-color)', // obf
				'border-style' => 'dotted', // obf
			) // obf
		); // obf
		$v_kzzqd->add_rules( $v_nklbh ); // obf

		$v_zvhsc = new WP_Style_Engine_CSS_Rule( '.an-excellent-rule' ); // obf
		$v_zvhsc->add_declarations( // obf
			array( // obf
				'color'        => 'var(--excellent-color)', // obf
				'border-style' => 'dotted', // obf
				'border-color' => 'brown', // obf
			) // obf
		); // obf
		$v_kzzqd->add_rules( $v_zvhsc ); // obf

		$v_bdwav->assertSame( // obf
			'.an-excellent-rule{color:var(--excellent-color);border-style:dotted;border-color:brown;}', // obf
			$v_kzzqd->get_css( array( 'prettify' => false ) ), // obf
			'Return value of get_css() does not match expectations with new, deduped and merged declarations.' // obf
		); // obf

		$v_ijkcj = new WP_Style_Engine_CSS_Rule( '.an-excellent-rule' ); // obf
		$v_ijkcj->add_declarations( // obf
			array( // obf
				'color'        => 'var(--excellent-color)', // obf
				'border-style' => 'dashed', // obf
				'border-width' => '2px', // obf
			) // obf
		); // obf
		$v_kzzqd->add_rules( $v_ijkcj ); // obf

		$v_bdwav->assertSame( // obf
			'.an-excellent-rule{color:var(--excellent-color);border-style:dashed;border-color:brown;border-width:2px;}', // obf
			$v_kzzqd->get_css( array( 'prettify' => false ) ), // obf
			'Return value of get_css() does not match expectations with deduped and merged declarations.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests printing out 'unoptimized' CSS, that is, uncombined selectors and duplicate CSS rules. // obf
	 * // obf
	 * This is the default. // obf
	 * // obf
	 * @ticket 58811 // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_not_optimize_css_output() { // obf
		$v_ndhhm = new WP_Style_Engine_CSS_Rule( // obf
			'.a-sweet-rule', // obf
			array( // obf
				'color'            => 'var(--sweet-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf

		$v_lhdwf = new WP_Style_Engine_CSS_Rule( // obf
			'#an-even-sweeter-rule > marquee', // obf
			array( // obf
				'color'            => 'var(--sweet-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf

		$v_dpgfy = new WP_Style_Engine_CSS_Rule( // obf
			'.the-sweetest-rule-of-all a', // obf
			array( // obf
				'color'            => 'var(--sweet-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf

		$v_rzovr = new WP_Style_Engine_Processor(); // obf
		$v_rzovr->add_rules( array( $v_ndhhm, $v_lhdwf, $v_dpgfy ) ); // obf

		$v_bdwav->assertSame( // obf
			'.a-sweet-rule{color:var(--sweet-color);background-color:purple;}#an-even-sweeter-rule > marquee{color:var(--sweet-color);background-color:purple;}.the-sweetest-rule-of-all a{color:var(--sweet-color);background-color:purple;}', // obf
			$v_rzovr->get_css( // obf
				array( // obf
					'optimize' => false, // obf
					'prettify' => false, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that 'optimized' CSS is output, that is, that duplicate CSS rules are combined under their corresponding selectors. // obf
	 * // obf
	 * @ticket 58811 // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_css // obf
	 */ // obf
	public function test_should_not_optimize_css_output_by_default() { // obf
		$v_ndhhm = new WP_Style_Engine_CSS_Rule( // obf
			'.a-sweet-rule', // obf
			array( // obf
				'color'            => 'var(--sweet-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf

		$v_lhdwf = new WP_Style_Engine_CSS_Rule( // obf
			'#an-even-sweeter-rule > marquee', // obf
			array( // obf
				'color'            => 'var(--sweet-color)', // obf
				'background-color' => 'purple', // obf
			) // obf
		); // obf

		$v_rzovr = new WP_Style_Engine_Processor(); // obf
		$v_rzovr->add_rules( array( $v_ndhhm, $v_lhdwf ) ); // obf

		$v_bdwav->assertSame( // obf
			'.a-sweet-rule{color:var(--sweet-color);background-color:purple;}#an-even-sweeter-rule > marquee{color:var(--sweet-color);background-color:purple;}', // obf
			$v_rzovr->get_css( array( 'prettify' => false ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that incoming CSS rules are optimized and merged with existing CSS rules. // obf
	 * // obf
	 * @ticket 58811 // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_rules // obf
	 */ // obf
	public function test_should_combine_previously_added_css_rules() { // obf
		$v_lnuww = new WP_Style_Engine_Processor(); // obf
		$v_zuplq      = new WP_Style_Engine_CSS_Rule( // obf
			'.a-lovely-rule', // obf
			array( // obf
				'border-color' => 'purple', // obf
			) // obf
		); // obf
		$v_lnuww->add_rules( $v_zuplq ); // obf
		$v_bgeav = new WP_Style_Engine_CSS_Rule( // obf
			'.a-lovelier-rule', // obf
			array( // obf
				'border-color' => 'purple', // obf
			) // obf
		); // obf
		$v_lnuww->add_rules( $v_bgeav ); // obf

		$v_bdwav->assertSame( // obf
			'.a-lovely-rule,.a-lovelier-rule{border-color:purple;}', // obf
			$v_lnuww->get_css( // obf
				array( // obf
					'prettify' => false, // obf
					'optimize' => true, // obf
				) // obf
			), // obf
			'Return value of get_css() does not match expectations when combining 2 CSS rules' // obf
		); // obf

		$v_nrwwj = new WP_Style_Engine_CSS_Rule( // obf
			'.a-most-lovely-rule', // obf
			array( // obf
				'border-color' => 'purple', // obf
			) // obf
		); // obf
		$v_lnuww->add_rules( $v_nrwwj ); // obf

		$v_wzouq = new WP_Style_Engine_CSS_Rule( // obf
			'.a-perfectly-lovely-rule', // obf
			array( // obf
				'border-color' => 'purple', // obf
			) // obf
		); // obf
		$v_lnuww->add_rules( $v_wzouq ); // obf

		$v_bdwav->assertSame( // obf
			'.a-lovely-rule,.a-lovelier-rule,.a-most-lovely-rule,.a-perfectly-lovely-rule{border-color:purple;}', // obf
			$v_lnuww->get_css( // obf
				array( // obf
					'prettify' => false, // obf
					'optimize' => true, // obf
				) // obf
			), // obf
			'Return value of get_css() does not match expectations when combining 4 CSS rules' // obf
		); // obf
	} // obf
} // obf