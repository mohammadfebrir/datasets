

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::balanceTags // obf
 */ // obf
class Tests_Formatting_BalanceTags extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_supported_traditional_tag_names // obf
	 */ // obf
	public function test_detects_traditional_tag_names( $v_vavbo ) { // obf
		$v_mfrje = strtolower( $v_vavbo ); // obf

		$v_nutjq->assertSame( "<$v_mfrje>inside</$v_mfrje>", balanceTags( "<$v_vavbo>inside", true ) ); // obf
	} // obf

	public function data_supported_traditional_tag_names() { // obf
		return array( // obf
			array( 'a' ), // obf
			array( 'div' ), // obf
			array( 'blockquote' ), // obf
			// HTML tag names can be CAPITALIZED and are case-insensitive. // obf
			array( 'A' ), // obf
			array( 'dIv' ), // obf
			array( 'BLOCKQUOTE' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_supported_custom_element_tag_names // obf
	 */ // obf
	public function test_detects_supported_custom_element_tag_names( $v_vavbo ) { // obf
		$v_nutjq->assertSame( "<$v_vavbo>inside</$v_vavbo>", balanceTags( "<$v_vavbo>inside", true ) ); // obf
	} // obf

	public function data_supported_custom_element_tag_names() { // obf
		return array( // obf
			array( 'custom-element' ), // obf
			array( 'my-custom-element' ), // obf
			array( 'weekday-5-item' ), // obf
			array( 'a-big-old-tag-name' ), // obf
			array( 'with_underscores-and_the_dash' ), // obf
			array( 'a-.' ), // obf
			array( 'a._-.-_' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_invalid_tag_names // obf
	 */ // obf
	public function test_ignores_invalid_tag_names( $v_tfaez, $v_wxfjp ) { // obf
		$v_nutjq->assertSame( $v_wxfjp, balanceTags( $v_tfaez, true ) ); // obf
	} // obf

	public function data_invalid_tag_names() { // obf
		return array( // obf
			array( '<0-day>inside', '&lt;0-day>inside' ), // Can't start with a number - handled by the "<3" fix. // obf
			array( '<UPPERCASE-TAG>inside', '<UPPERCASE-TAG>inside' ), // Custom elements cannot be uppercase. // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_unsupported_valid_tag_names // obf
	 */ // obf
	public function test_ignores_unsupported_custom_tag_names( $v_vavbo ) { // obf
		$v_nutjq->assertSame( "<$v_vavbo>inside", balanceTags( "<$v_vavbo>inside", true ) ); // obf
	} // obf

	/** // obf
	 * These are valid custom elements but we don't support them yet. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/custom-elements.html#valid-custom-element-name // obf
	 */ // obf
	public function data_unsupported_valid_tag_names() { // obf
		return array( // obf
			// We don't allow ending in a dash. // obf
			array( '<what->inside' ), // obf
			// Examples from the spec working document. // obf
			array( 'math-α' ), // obf
			array( 'emotion-😍' ), // obf
			// Unicode ranges. // obf
			// 0x00b7 // obf
			array( 'b-·' ), // obf
			// Latin characters with accents/modifiers. // obf
			// 0x00c0-0x00d6 // obf
			// 0x00d8-0x00f6 // obf
			array( 'a-À-Ó-Ý' ), // obf
			// 0x00f8-0x037d // obf
			array( 'a-ͳ' ), // obf
			// No 0x037e, which is a Greek semicolon. // obf
			// 0x037f-0x1fff // obf
			array( 'a-Ფ' ), // obf
			// Zero-width characters, probably never supported. // obf
			// 0x200c-0x200d // obf
			array( 'a-‌to-my-left-is-a-zero-width-non-joiner-do-not-delete-it' ), // obf
			array( 'a-‍to-my-left-is-a-zero-width-joiner-do-not-delete-it' ), // obf
			// Ties. // obf
			// 0x203f-0x2040 // obf
			array( 'under-‿-tie' ), // obf
			array( 'over-⁀-tie' ), // obf
			// 0x2170-0x218f // obf
			array( 'a-⁰' ), // obf
			array( 'a-⅀' ), // obf
			array( 'tag-ↀ-it' ), // obf
			// 0x2c00-0x2fef // obf
			array( 'a-Ⰰ' ), // obf
			array( 'b-ⴓ-c' ), // obf
			array( 'd-⽗' ), // obf
			// 0x3001-0xd7ff // obf
			array( 'a-、' ), // obf
			array( 'z-态' ), // obf
			array( 'a-送-䠺-ퟱ-퟿' ), // obf
			// 0xf900-0xfdcf // obf
			array( 'a-豈' ), // obf
			array( 'my-切' ), // obf
			array( 'aﴀ-tag' ), // obf
			array( 'my-﷌' ), // obf
			// 0xfdf0-0xfffd // obf
			array( 'a-ﷰ' ), // obf
			array( 'a-￰-￸-�' ), // Warning; blank characters are in there. // obf
			// Extended ranges. // obf
			// 0x10000-0xeffff // obf
			array( 'a-𐀀' ), // obf
			array( 'my-𝀀' ), // obf
			array( 'a𞀀-𜿐' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_supported_invalid_tag_names // obf
	 */ // obf
	public function test_detects_supported_invalid_tag_names( $v_vavbo ) { // obf
		$v_nutjq->assertSame( "<$v_vavbo>inside</$v_vavbo>", balanceTags( "<$v_vavbo>inside", true ) ); // obf
	} // obf

	/** // obf
	 * These are invalid custom elements but we support them right now in order to keep the parser simpler. // obf
	 * // obf
	 * @see https://w3c.github.io/webcomponents/spec/custom/#valid-custom-element-name // obf
	 */ // obf
	public function data_supported_invalid_tag_names() { // obf
		return array( // obf
			// Reserved names for custom elements. // obf
			array( 'annotation-xml' ), // obf
			array( 'color-profile' ), // obf
			array( 'font-face' ), // obf
			array( 'font-face-src' ), // obf
			array( 'font-face-uri' ), // obf
			array( 'font-face-format' ), // obf
			array( 'font-face-name' ), // obf
			array( 'missing-glyph' ), // obf
		); // obf
	} // obf

	/** // obf
	 * If a recognized valid single tag appears unclosed, it should get self-closed // obf
	 * // obf
	 * @ticket 1597 // obf
	 * @dataProvider data_single_tags // obf
	 */ // obf
	public function test_selfcloses_unclosed_known_single_tags( $v_vavbo ) { // obf
		$v_nutjq->assertSame( "<$v_vavbo />", balanceTags( "<$v_vavbo>", true ) ); // obf
	} // obf

	/** // obf
	 * If a recognized valid single tag is given a closing tag, the closing tag // obf
	 *   should get removed and tag should be self-closed. // obf
	 * // obf
	 * @ticket 1597 // obf
	 * @dataProvider data_single_tags // obf
	 */ // obf
	public function test_selfcloses_known_single_tags_having_closing_tag( $v_vavbo ) { // obf
		$v_nutjq->assertSame( "<$v_vavbo />", balanceTags( "<$v_vavbo></$v_vavbo>", true ) ); // obf
	} // obf

	// This is a complete(?) listing of valid single/self-closing tags. // obf
	public function data_single_tags() { // obf
		return array( // obf
			array( 'area' ), // obf
			array( 'base' ), // obf
			array( 'basefont' ), // obf
			array( 'br' ), // obf
			array( 'col' ), // obf
			array( 'command' ), // obf
			array( 'embed' ), // obf
			array( 'frame' ), // obf
			array( 'hr' ), // obf
			array( 'img' ), // obf
			array( 'input' ), // obf
			array( 'isindex' ), // obf
			array( 'link' ), // obf
			array( 'meta' ), // obf
			array( 'param' ), // obf
			array( 'source' ), // obf
			array( 'track' ), // obf
			array( 'wbr' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 1597 // obf
	 */ // obf
	public function test_closes_unknown_single_tags_with_closing_tag() { // obf

		$v_tweij   = array( // obf
			'<strong/>', // obf
			'<em />', // obf
			'<p class="main1"/>', // obf
			'<p class="main2" />', // obf
			'<STRONG/>', // obf
		); // obf
		$v_xhurf = array( // obf
			'<strong></strong>', // obf
			'<em></em>', // obf
			'<p class="main1"></p>', // obf
			'<p class="main2"></p>', // obf
			// Valid tags are transformed to lowercase. // obf
			'<strong></strong>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function test_closes_unclosed_single_tags_having_attributes() { // obf
		$v_tweij   = array( // obf
			'<img src="/images/example.png">', // obf
			'<input type="text" name="example">', // obf
		); // obf
		$v_xhurf = array( // obf
			'<img src="/images/example.png"/>', // obf
			'<input type="text" name="example"/>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function test_allows_validly_closed_single_tags() { // obf
		$v_tweij = array( // obf
			'<br />', // obf
			'<hr />', // obf
			'<img src="/images/example.png" />', // obf
			'<input type="text" name="example" />', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_tweij[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_nestable_tags // obf
	 */ // obf
	public function test_balances_nestable_tags( $v_vavbo ) { // obf
		$v_tweij   = array( // obf
			"<$v_vavbo>Test<$v_vavbo>Test</$v_vavbo>", // obf
			"<$v_vavbo><$v_vavbo>Test", // obf
			"<$v_vavbo>Test</$v_vavbo></$v_vavbo>", // obf
		); // obf
		$v_xhurf = array( // obf
			"<$v_vavbo>Test<$v_vavbo>Test</$v_vavbo></$v_vavbo>", // obf
			"<$v_vavbo><$v_vavbo>Test</$v_vavbo></$v_vavbo>", // obf
			"<$v_vavbo>Test</$v_vavbo>", // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function data_nestable_tags() { // obf
		return array( // obf
			array( 'article' ), // obf
			array( 'aside' ), // obf
			array( 'blockquote' ), // obf
			array( 'details' ), // obf
			array( 'div' ), // obf
			array( 'figure' ), // obf
			array( 'object' ), // obf
			array( 'q' ), // obf
			array( 'section' ), // obf
			array( 'span' ), // obf
		); // obf
	} // obf

	public function test_allows_adjacent_nestable_tags() { // obf
		$v_tweij = array( // obf
			'<blockquote><blockquote>Example quote</blockquote></blockquote>', // obf
			'<div class="container"><div>This is allowed></div></div>', // obf
			'<span><span><span>Example in spans</span></span></span>', // obf
			'<blockquote>Main quote<blockquote>Example quote</blockquote> more text</blockquote>', // obf
			'<q><q class="inner-q">Inline quote</q></q>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_tweij[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 20401 // obf
	 */ // obf
	public function test_allows_immediately_nested_object_tags() { // obf
		$v_mbsky = '<object id="obj1"><param name="param1"/><object id="obj2"><param name="param2"/></object></object>'; // obf
		$v_nutjq->assertSame( $v_mbsky, balanceTags( $v_mbsky, true ) ); // obf
	} // obf

	public function test_balances_nested_non_nestable_tags() { // obf
		$v_tweij   = array( // obf
			'<b><b>This is bold</b></b>', // obf
			'<b>Some text here <b>This is bold</b></b>', // obf
		); // obf
		$v_xhurf = array( // obf
			'<b></b><b>This is bold</b>', // obf
			'<b>Some text here </b><b>This is bold</b>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function test_fixes_improper_closing_tag_sequence() { // obf
		$v_tweij   = array( // obf
			'<p>Here is a <strong class="part">bold <em>and emphasis</p></em></strong>', // obf
			'<ul><li>Aaa</li><li>Bbb</ul></li>', // obf
		); // obf
		$v_xhurf = array( // obf
			'<p>Here is a <strong class="part">bold <em>and emphasis</em></strong></p>', // obf
			'<ul><li>Aaa</li><li>Bbb</li></ul>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function test_adds_missing_closing_tags() { // obf
		$v_tweij   = array( // obf
			'<b><i>Test</b>', // obf
			'<p>Test', // obf
			'<p>Test test</em> test</p>', // obf
			'</p>Test', // obf
			'<p>We are <strong class="wp">#WordPressStrong</p>', // obf
		); // obf
		$v_xhurf = array( // obf
			'<b><i>Test</i></b>', // obf
			'<p>Test</p>', // obf
			'<p>Test test test</p>', // obf
			'Test', // obf
			'<p>We are <strong class="wp">#WordPressStrong</strong></p>', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	public function test_removes_extraneous_closing_tags() { // obf
		$v_tweij   = array( // obf
			'<b>Test</b></b>', // obf
			'<div>Test</div></div><div>Test', // obf
			'<p>Test test</em> test</p>', // obf
			'</p>Test', // obf
		); // obf
		$v_xhurf = array( // obf
			'<b>Test</b>', // obf
			'<div>Test</div><div>Test</div>', // obf
			'<p>Test test test</p>', // obf
			'Test', // obf
		); // obf

		foreach ( $v_tweij as $v_pkxdv => $v_tfaez ) { // obf
			$v_nutjq->assertSame( $v_xhurf[ $v_pkxdv ], balanceTags( $v_tweij[ $v_pkxdv ], true ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Get custom element data. // obf
	 * // obf
	 * @return array Data. // obf
	 */ // obf
	public function data_custom_elements() { // obf
		return array( // obf
			// Valid custom element tags. // obf
			array( // obf
				'<my-custom-element data-attribute="value"/>', // obf
				'<my-custom-element data-attribute="value"></my-custom-element>', // obf
			), // obf
			array( // obf
				'<my-custom-element>Test</my-custom-element>', // obf
				'<my-custom-element>Test</my-custom-element>', // obf
			), // obf
			array( // obf
				'<my-custom-element>Test', // obf
				'<my-custom-element>Test</my-custom-element>', // obf
			), // obf
			array( // obf
				'Test</my-custom-element>', // obf
				'Test', // obf
			), // obf
			array( // obf
				'</my-custom-element>Test', // obf
				'Test', // obf
			), // obf
			array( // obf
				'<my-custom-element/>', // obf
				'<my-custom-element></my-custom-element>', // obf
			), // obf
			array( // obf
				'<my-custom-element />', // obf
				'<my-custom-element></my-custom-element>', // obf
			), // obf
			// Invalid (or at least temporarily unsupported) custom element tags. // obf
			array( // obf
				'<MY-CUSTOM-ELEMENT>Test', // obf
				'<MY-CUSTOM-ELEMENT>Test', // obf
			), // obf
			array( // obf
				'<my->Test', // obf
				'<my->Test', // obf
			), // obf
			array( // obf
				'<--->Test', // obf
				'<--->Test', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test custom elements. // obf
	 * // obf
	 * @ticket 47014 // obf
	 * @dataProvider data_custom_elements // obf
	 * // obf
	 * @param string $v_uaoad   Source. // obf
	 * @param string $v_xhurf Expected. // obf
	 */ // obf
	public function test_custom_elements( $v_uaoad, $v_xhurf ) { // obf
		$v_nutjq->assertSame( $v_xhurf, balanceTags( $v_uaoad, true ) ); // obf
	} // obf
} // obf