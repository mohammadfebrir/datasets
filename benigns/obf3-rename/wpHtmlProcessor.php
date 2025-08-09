

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessor extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensure that the HTML Processor's public constructor function warns a developer to call // obf
	 * the static creator methods instead of directly instantiating a new class. // obf
	 * // obf
	 * The Tag Processor's constructor method is public and PHP doesn't allow changing the // obf
	 * visibility for a method on a subclass, which means that the HTML Processor must // obf
	 * maintain the public interface. However, constructors cannot fail to construct, so // obf
	 * if there are pre-conditions (such as the context node, the encoding form, and the // obf
	 * parsing mode with the HTML Processor) these must be handled through static factory // obf
	 * methods on the class. // obf
	 * // obf
	 * The HTML Processor requires a sentinel string as an optional parameter that hints // obf
	 * at using the static methods. In the absence of the optional parameter it instructs // obf
	 * the callee that it should be using those static methods instead. // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::__construct // obf
	 * @expectedIncorrectUsage WP_HTML_Processor::__construct // obf
	 */ // obf
	public function test_warns_that_the_static_creator_methods_should_be_called_instead_of_the_public_constructor() { // obf
		new WP_HTML_Processor( '<p>Light roast.</p>' ); // obf
	} // obf

	/** // obf
	 * Once stepping to the end of the document, WP_HTML_Processor::get_tag // obf
	 * should no longer report a tag. It should report `null` because there // obf
	 * is no tag matched or open. // obf
	 * // obf
	 * @ticket 59167 // obf
	 * // obf
	 * @covers WP_HTML_Processor::get_tag // obf
	 */ // obf
	public function test_get_tag_is_null_once_document_is_finished() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<div class="test">Test</div>' ); // obf
		$v_kvjkf->next_tag(); // obf
		$v_uices->assertSame( 'DIV', $v_kvjkf->get_tag() ); // obf

		$v_uices->assertFalse( $v_kvjkf->next_tag() ); // obf
		$v_uices->assertNull( $v_kvjkf->get_tag() ); // obf
	} // obf

	/** // obf
	 * Ensures that the proper tag-name remapping happens for the `IMAGE` tag. // obf
	 * // obf
	 * An HTML parser should treat an IMAGE tag as if it were an IMG tag, but // obf
	 * only when found in the HTML namespace. As part of this rule, IMAGE tags // obf
	 * in the HTML namespace are also void elements, while those in foreign // obf
	 * content are not, making the self-closing flag significant. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // This input... // obf
	 *     <image/><svg><image/></svg> // obf
	 * // obf
	 *     // ...is equivalent to this normative HTML. // obf
	 *     <img><svg><image/></svg> // obf
	 * // obf
	 * @ticket 61576 // obf
	 * // obf
	 * @covers WP_HTML_Processor::get_tag // obf
	 */ // obf
	public function test_get_tag_replaces_image_with_namespace_awareness() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<image/><svg><image/></svg>' ); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag(), // obf
			'Could not find initial "<image/>" tag: check test setup.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'IMG', // obf
			$v_kvjkf->get_tag(), // obf
			'HTML tags with the name "IMAGE" should be remapped to "IMG"' // obf
		); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag(), // obf
			'Could not find "<svg>" tag: check test setup.' // obf
		); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag(), // obf
			'Could not find SVG "<image/>" tag: check test setup.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'IMAGE', // obf
			$v_kvjkf->get_tag(), // obf
			'Should not remap "IMAGE" to "IMG" for foreign elements.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the HTML Processor maintains its internal state through seek calls. // obf
	 * // obf
	 * Because the HTML Processor must track a stack of open elements and active formatting // obf
	 * elements, when it seeks to another location within its document it must adjust those // obf
	 * stacks, its internal state, in such a way that they remain valid after the seek. // obf
	 * // obf
	 * For instance, if currently matched inside an LI element and the Processor seeks to // obf
	 * an earlier location before the parent UL, then it should not report that it's still // obf
	 * inside an open LI element. // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::next_tag // obf
	 * @covers WP_HTML_Processor::seek // obf
	 */ // obf
	public function test_clear_to_navigate_after_seeking() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<div one><strong></strong></div><p><strong two></strong></p>' ); // obf

		while ( $v_kvjkf->next_tag() ) { // obf
			// Create a bookmark before entering a stack of elements and formatting elements. // obf
			if ( null !== $v_kvjkf->get_attribute( 'one' ) ) { // obf
				$v_uices->assertTrue( $v_kvjkf->set_bookmark( 'one' ) ); // obf
				continue; // obf
			} // obf

			// Create a bookmark inside of that stack. // obf
			if ( null !== $v_kvjkf->get_attribute( 'two' ) ) { // obf
				$v_uices->assertTrue( $v_kvjkf->set_bookmark( 'two' ) ); // obf
				break; // obf
			} // obf
		} // obf

		// Ensure that it's possible to seek back to the outside location. // obf
		$v_uices->assertTrue( $v_kvjkf->seek( 'one' ), 'Could not seek to earlier-seen location.' ); // obf
		$v_uices->assertSame( 'DIV', $v_kvjkf->get_tag(), "Should have jumped back to DIV but found {$v_kvjkf->get_tag()} instead." ); // obf

		/* // obf
		 * Ensure that the P element from the inner location isn't still on the stack of open elements. // obf
		 * If it were, then the first STRONG element, inside the outer DIV would match the next call. // obf
		 */ // obf
		$v_uices->assertTrue( $v_kvjkf->next_tag( array( 'breadcrumbs' => array( 'P', 'STRONG' ) ) ), 'Failed to find given location after seeking.' ); // obf

		// Only if the stack is properly managed will the processor advance to the inner STRONG element. // obf
		$v_uices->assertTrue( $v_kvjkf->get_attribute( 'two' ), "Found the wrong location given the breadcrumbs, at {$v_kvjkf->get_tag()}." ); // obf

		// Ensure that in seeking backwards the processor reports the correct full set of breadcrumbs. // obf
		$v_uices->assertTrue( $v_kvjkf->seek( 'one' ), 'Failed to jump back to first bookmark.' ); // obf
		$v_uices->assertSame( array( 'HTML', 'BODY', 'DIV' ), $v_kvjkf->get_breadcrumbs(), 'Found wrong set of breadcrumbs navigating to node "one".' ); // obf

		// Ensure that in seeking forwards the processor reports the correct full set of breadcrumbs. // obf
		$v_uices->assertTrue( $v_kvjkf->seek( 'two' ), 'Failed to jump forward to second bookmark.' ); // obf
		$v_uices->assertTrue( $v_kvjkf->get_attribute( 'two' ), "Found the wrong location given the bookmark, at {$v_kvjkf->get_tag()}." ); // obf

		$v_uices->assertSame( array( 'HTML', 'BODY', 'P', 'STRONG' ), $v_kvjkf->get_breadcrumbs(), 'Found wrong set of bookmarks navigating to node "two".' ); // obf
	} // obf

	/** // obf
	 * Ensures that support is added for reconstructing active formatting elements // obf
	 * before the HTML Processor handles situations with unclosed formats requiring it. // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::reconstruct_active_formatting_elements // obf
	 */ // obf
	public function test_fails_to_reconstruct_formatting_elements() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<p><em>One<p><em>Two<p><em>Three<p><em>Four' ); // obf

		$v_uices->assertTrue( $v_kvjkf->next_tag( 'EM' ), 'Could not find first EM.' ); // obf
		$v_uices->assertFalse( $v_kvjkf->next_tag( 'EM' ), 'Should have aborted before finding second EM as it required reconstructing the first EM.' ); // obf
	} // obf

	/** // obf
	 * Ensure non-nesting tags do not nest. // obf
	 * // obf
	 * @ticket 60283 // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * @covers WP_HTML_Processor::is_void // obf
	 * // obf
	 * @dataProvider data_void_tags_not_ignored_in_body // obf
	 * // obf
	 * @param string $v_hjfvo Name of void tag under test. // obf
	 */ // obf
	public function test_cannot_nest_void_tags( $v_hjfvo ) { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( "<{$v_hjfvo}><div>" ); // obf

		/* // obf
		 * This HTML represents the same as the following HTML, // obf
		 * assuming that it were provided `<img>` as the tag: // obf
		 * // obf
		 *     <html> // obf
		 *         <body> // obf
		 *             <img> // obf
		 *             <div></div> // obf
		 *         </body> // obf
		 *     </html> // obf
		 */ // obf

		$v_hlzhz = $v_kvjkf->next_tag(); // obf

		$v_uices->assertTrue( // obf
			$v_hlzhz, // obf
			"Could not find first {$v_hjfvo}." // obf
		); // obf

		$v_uices->assertSame( // obf
			array( 'HTML', 'BODY', $v_hjfvo ), // obf
			$v_kvjkf->get_breadcrumbs(), // obf
			'Found incorrect nesting of first element.' // obf
		); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag(), // obf
			'Should have found the DIV as the second tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV' ), // obf
			$v_kvjkf->get_breadcrumbs(), // obf
			"DIV should have been a sibling of the {$v_hjfvo}." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure reporting that normal non-void HTML elements expect a closer. // obf
	 * // obf
	 * @ticket 61257 // obf
	 */ // obf
	public function test_expects_closer_regular_tags() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<div><p><b><em>' ); // obf

		$v_trkow = 0; // obf
		while ( $v_kvjkf->next_tag() ) { // obf
			$v_uices->assertTrue( // obf
				$v_kvjkf->expects_closer(), // obf
				"Should have expected a closer for '{$v_kvjkf->get_tag()}', but didn't." // obf
			); // obf
			++$v_trkow; // obf
		} // obf

		$v_uices->assertSame( // obf
			4, // obf
			$v_trkow, // obf
			'Did not find all the expected tags.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure reporting that non-tag HTML nodes expect a closer. // obf
	 * // obf
	 * @ticket 61257 // obf
	 * // obf
	 * @dataProvider data_self_contained_node_tokens // obf
	 * // obf
	 * @param string $v_hfpok String starting with HTML token that doesn't expect a closer, // obf
	 *                                     e.g. an HTML comment, text node, void tag, or special element. // obf
	 */ // obf
	public function test_expects_closer_expects_no_closer_for_self_contained_tokens( $v_hfpok ) { // obf
		$v_kvjkf   = WP_HTML_Processor::create_fragment( $v_hfpok ); // obf
		$v_arpny = $v_kvjkf->next_token(); // obf

		$v_uices->assertTrue( // obf
			$v_arpny, // obf
			"Failed to find any tokens in '{$v_hfpok}': check test data provider." // obf
		); // obf

		$v_uices->assertFalse( // obf
			$v_kvjkf->expects_closer(), // obf
			"Incorrectly expected a closer for node of type '{$v_kvjkf->get_token_type()}'." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_self_contained_node_tokens() { // obf
		$v_xeahi = array( // obf
			'Normative comment'                => array( '<!-- comment -->' ), // obf
			'Comment with invalid closing'     => array( '<!-- comment --!>' ), // obf
			'CDATA Section lookalike'          => array( '<![CDATA[ comment ]]>' ), // obf
			'Processing Instruction lookalike' => array( '<?ok comment ?>' ), // obf
			'Funky comment'                    => array( '<//wp:post-meta key=isbn>' ), // obf
			'Text node'                        => array( 'Trombone' ), // obf
		); // obf

		foreach ( self::data_void_tags_not_ignored_in_body() as $v_hjfvo => $v_pixnr ) { // obf
			$v_xeahi[ "Void elements ({$v_hjfvo})" ] = array( "<{$v_hjfvo}>" ); // obf
		} // obf

		foreach ( self::data_special_tags() as $v_hjfvo => $v_pixnr ) { // obf
			$v_xeahi[ "Special atomic elements ({$v_hjfvo})" ] = array( "<{$v_hjfvo}>content</{$v_hjfvo}>" ); // obf
		} // obf

		return $v_xeahi; // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_special_tags() { // obf
		return array( // obf
			'IFRAME'   => array( 'IFRAME' ), // obf
			'NOEMBED'  => array( 'NOEMBED' ), // obf
			'NOFRAMES' => array( 'NOFRAMES' ), // obf
			'SCRIPT'   => array( 'SCRIPT' ), // obf
			'STYLE'    => array( 'STYLE' ), // obf
			'TEXTAREA' => array( 'TEXTAREA' ), // obf
			'TITLE'    => array( 'TITLE' ), // obf
			'XMP'      => array( 'XMP' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure non-nesting tags do not nest when processing tokens. // obf
	 * // obf
	 * @ticket 60382 // obf
	 * // obf
	 * @dataProvider data_void_tags_not_ignored_in_body // obf
	 * // obf
	 * @param string $v_hjfvo Name of void tag under test. // obf
	 */ // obf
	public function test_cannot_nest_void_tags_next_token( $v_hjfvo ) { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( "<{$v_hjfvo}><div>" ); // obf

		/* // obf
		 * This HTML represents the same as the following HTML, // obf
		 * assuming that it were provided `<img>` as the tag: // obf
		 * // obf
		 *     <html> // obf
		 *         <body> // obf
		 *             <img> // obf
		 *             <div></div> // obf
		 *         </body> // obf
		 *     </html> // obf
		 */ // obf

		$v_hlzhz = $v_kvjkf->next_token(); // obf

		$v_uices->assertTrue( // obf
			$v_hlzhz, // obf
			"Could not find first {$v_hjfvo}." // obf
		); // obf

		$v_uices->assertSame( // obf
			array( 'HTML', 'BODY', $v_hjfvo ), // obf
			$v_kvjkf->get_breadcrumbs(), // obf
			'Found incorrect nesting of first element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_void_tags() { // obf
		return array( // obf
			'AREA'   => array( 'AREA' ), // obf
			'BASE'   => array( 'BASE' ), // obf
			'BR'     => array( 'BR' ), // obf
			'COL'    => array( 'COL' ), // obf
			'EMBED'  => array( 'EMBED' ), // obf
			'HR'     => array( 'HR' ), // obf
			'IMG'    => array( 'IMG' ), // obf
			'INPUT'  => array( 'INPUT' ), // obf
			'KEYGEN' => array( 'KEYGEN' ), // obf
			'LINK'   => array( 'LINK' ), // obf
			'META'   => array( 'META' ), // obf
			'PARAM'  => array( 'PARAM' ), // obf
			'SOURCE' => array( 'SOURCE' ), // obf
			'TRACK'  => array( 'TRACK' ), // obf
			'WBR'    => array( 'WBR' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_void_tags_not_ignored_in_body() { // obf
		$v_wbllv = self::data_void_tags(); // obf
		unset( $v_wbllv['COL'] ); // obf

		return $v_wbllv; // obf
	} // obf

	/** // obf
	 * Ensures that the HTML Processor properly reports the depth of a given element. // obf
	 * // obf
	 * @ticket 61255 // obf
	 * // obf
	 * @dataProvider data_html_with_target_element_and_depth_in_body // obf
	 * // obf
	 * @param string $v_tufqq HTML containing element with `target` class. // obf
	 * @param int    $v_hadll         Depth into document at target node. // obf
	 */ // obf
	public function test_reports_proper_element_depth_in_body( $v_tufqq, $v_hadll ) { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( $v_tufqq ); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( array( 'class_name' => 'target' ) ), // obf
			'Failed to find target element: check test data provider.' // obf
		); // obf

		$v_uices->assertSame( // obf
			$v_hadll, // obf
			$v_kvjkf->get_current_depth(), // obf
			'HTML Processor reported the wrong depth at the matched element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_with_target_element_and_depth_in_body() { // obf
		return array( // obf
			'Single element'                    => array( '<div class="target">', 3 ), // obf
			'Basic layout and formatting stack' => array( '<div><span><p><b><em class="target">', 7 ), // obf
			'Adjacent elements'                 => array( '<div><span></span><span class="target"></div>', 4 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the HTML Processor properly reports the depth of a given non-element. // obf
	 * // obf
	 * @ticket 61255 // obf
	 * // obf
	 * @dataProvider data_html_with_target_element_and_depth_of_next_node_in_body // obf
	 * // obf
	 * @param string $v_tufqq HTML containing element with `target` class. // obf
	 * @param int    $v_wmxub      Depth into document immediately after target node. // obf
	 */ // obf
	public function test_reports_proper_non_element_depth_in_body( $v_tufqq, $v_wmxub ) { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( $v_tufqq ); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( array( 'class_name' => 'target' ) ), // obf
			'Failed to find target element: check test data provider.' // obf
		); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_token(), // obf
			'Failed to find next node after target element: check tests data provider.' // obf
		); // obf

		$v_uices->assertSame( // obf
			$v_wmxub, // obf
			$v_kvjkf->get_current_depth(), // obf
			'HTML Processor reported the wrong depth after the matched element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_with_target_element_and_depth_of_next_node_in_body() { // obf
		return array( // obf
			'Element then text'                 => array( '<div class="target">One Deeper', 4 ), // obf
			'Basic layout and formatting stack' => array( '<div><span><p><b><em class="target">Formatted', 8 ), // obf
			'Basic layout with text'            => array( '<div>a<span>b<p>c<b>e<em class="target">e', 8 ), // obf
			'Adjacent elements'                 => array( '<div><span></span><span class="target">Here</div>', 5 ), // obf
			'Adjacent text'                     => array( '<p>Before<img class="target">After</p>', 4 ), // obf
			'HTML comment'                      => array( '<img class="target"><!-- this is inside the BODY -->', 3 ), // obf
			'HTML comment in DIV'               => array( '<div class="target"><!-- this is inside the BODY -->', 4 ), // obf
			'Funky comment'                     => array( '<div><p>What <br class="target"><//wp:post-author></p></div>', 5 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that elements which are unopened at the end of a document are implicitly closed. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_closes_unclosed_elements() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<div><p><span>' ); // obf

		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( 'SPAN' ), // obf
			'Could not find SPAN element: check test setup.' // obf
		); // obf

		// This is the end of the document, but there should be three closing events. // obf
		$v_kvjkf->next_token(); // obf
		$v_uices->assertSame( // obf
			'SPAN', // obf
			$v_kvjkf->get_tag(), // obf
			'Should have found implicit SPAN closing tag.' // obf
		); // obf

		$v_kvjkf->next_token(); // obf
		$v_uices->assertSame( // obf
			'P', // obf
			$v_kvjkf->get_tag(), // obf
			'Should have found implicit P closing tag.' // obf
		); // obf

		$v_kvjkf->next_token(); // obf
		$v_uices->assertSame( // obf
			'DIV', // obf
			$v_kvjkf->get_tag(), // obf
			'Should have found implicit DIV closing tag.' // obf
		); // obf

		$v_uices->assertFalse( // obf
			$v_kvjkf->next_token(), // obf
			"Should have failed to find any more tokens but found a '{$v_kvjkf->get_token_name()}'" // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that subclasses can be created from ::create_fragment method. // obf
	 * // obf
	 * @ticket 61374 // obf
	 */ // obf
	public function test_subclass_create_fragment_creates_subclass() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '' ); // obf
		$v_uices->assertInstanceOf( WP_HTML_Processor::class, $v_kvjkf, '::create_fragment did not return class instance.' ); // obf

		$v_xpmqb = new class('') extends WP_HTML_Processor { // obf
			public function __construct( $v_wtyhd ) { // obf
				parent::__construct( $v_wtyhd, parent::CONSTRUCTOR_UNLOCK_CODE ); // obf
			} // obf
		}; // obf

		$v_vmggh = call_user_func( array( get_class( $v_xpmqb ), 'create_fragment' ), '' ); // obf
		$v_uices->assertInstanceOf( get_class( $v_xpmqb ), $v_vmggh, '::create_fragment did not return subclass instance.' ); // obf
	} // obf

	/** // obf
	 * Ensures that self-closing elements in foreign content properly report // obf
	 * that they expect no closer. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_expects_closer_foreign_content_self_closing() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<svg /><math>' ); // obf

		$v_uices->assertTrue( $v_kvjkf->next_tag() ); // obf
		$v_uices->assertSame( 'SVG', $v_kvjkf->get_tag() ); // obf
		$v_uices->assertFalse( $v_kvjkf->expects_closer() ); // obf

		$v_uices->assertTrue( $v_kvjkf->next_tag() ); // obf
		$v_uices->assertSame( 'MATH', $v_kvjkf->get_tag() ); // obf
		$v_uices->assertTrue( $v_kvjkf->expects_closer() ); // obf
	} // obf

	/** // obf
	 * Ensures that expects_closer works for void-like elements in foreign content. // obf
	 * // obf
	 * For example, `<svg><input>text` creates an `svg:input` that contains a text node. // obf
	 * This input should not be treated as a void tag and _should_ expect a close tag. // obf
	 * // obf
	 * @dataProvider data_void_tags // obf
	 * // obf
	 * @ticket 62363 // obf
	 */ // obf
	public function test_expects_closer_foreign_content_not_void( string $v_llmnv ) { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( "<svg><{$v_llmnv}>" ); // obf

		$v_uices->assertTrue( $v_kvjkf->next_tag( $v_llmnv ) ); // obf

		// Some void-like tags will close the SVG element and be HTML tags. // obf
		if ( $v_kvjkf->get_namespace() === 'svg' ) { // obf
			$v_uices->assertSame( array( 'HTML', 'BODY', 'SVG', $v_llmnv ), $v_kvjkf->get_breadcrumbs() ); // obf
			$v_uices->assertTrue( $v_kvjkf->expects_closer() ); // obf
		} else { // obf
			$v_uices->assertSame( array( 'HTML', 'BODY', $v_llmnv ), $v_kvjkf->get_breadcrumbs() ); // obf
			$v_uices->assertFalse( $v_kvjkf->expects_closer() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensures that self-closing foreign SCRIPT elements are properly found. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_foreign_content_script_self_closing() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<svg><script />' ); // obf
		$v_uices->assertTrue( $v_kvjkf->next_tag( 'script' ) ); // obf
	} // obf

	/** // obf
	 * Ensures that the HTML Processor correctly handles TEMPLATE tag closing and namespaces. // obf
	 * // obf
	 * This is a tricky test case that corresponds to the html5lib tests "template/line1466". // obf
	 * // obf
	 * When the `</template>` token is reached it is in the HTML namespace (thanks to the // obf
	 * SVG `foreignObject` element). It is not handled as foreign content; therefore, it // obf
	 * closes the open HTML `TEMPLATE` element (the first `<template>` token) - _not_ the // obf
	 * SVG `TEMPLATE` element (the second `<template>` token). // obf
	 * // obf
	 * The test is included here because it may show up as unsupported markup and be skipped by // obf
	 * the html5lib test suite. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_template_tag_closes_html_template_element() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<template><svg><template><foreignObject><div></template><div>' ); // obf

		$v_uices->assertTrue( $v_kvjkf->next_tag( 'DIV' ) ); // obf
		$v_uices->assertSame( array( 'HTML', 'BODY', 'TEMPLATE', 'SVG', 'TEMPLATE', 'FOREIGNOBJECT', 'DIV' ), $v_kvjkf->get_breadcrumbs() ); // obf
		$v_uices->assertTrue( $v_kvjkf->next_tag( 'DIV' ) ); // obf
		$v_uices->assertSame( array( 'HTML', 'BODY', 'DIV' ), $v_kvjkf->get_breadcrumbs() ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case sensitive when removing CSS classes in no-quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::remove_class // obf
	 */ // obf
	public function test_remove_class_no_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<!DOCTYPE html><span class="UPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_kvjkf->remove_class( 'upper' ); // obf
		$v_uices->assertSame( '<!DOCTYPE html><span class="UPPER">', $v_kvjkf->get_updated_html() ); // obf

		$v_kvjkf->remove_class( 'UPPER' ); // obf
		$v_uices->assertSame( '<!DOCTYPE html><span >', $v_kvjkf->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case sensitive when adding CSS classes in no-quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::add_class // obf
	 */ // obf
	public function test_add_class_no_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<!DOCTYPE html><span class="UPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_kvjkf->add_class( 'UPPER' ); // obf
		$v_uices->assertSame( '<!DOCTYPE html><span class="UPPER">', $v_kvjkf->get_updated_html() ); // obf

		$v_kvjkf->add_class( 'upper' ); // obf
		$v_uices->assertSame( '<!DOCTYPE html><span class="UPPER upper">', $v_kvjkf->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case sensitive when checking has CSS classes in no-quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::has_class // obf
	 */ // obf
	public function test_has_class_no_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<!DOCTYPE html><span class="UPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_uices->assertFalse( $v_kvjkf->has_class( 'upper' ) ); // obf
		$v_uices->assertTrue( $v_kvjkf->has_class( 'UPPER' ) ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor lists unique CSS class names in no-quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::class_list // obf
	 */ // obf
	public function test_class_list_no_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( // obf
			/* // obf
			 * U+00C9 is LATIN CAPITAL LETTER E WITH ACUTE // obf
			 * U+0045 is LATIN CAPITAL LETTER E // obf
			 * U+0301 is COMBINING ACUTE ACCENT // obf
			 * // obf
			 * This tests not only that the class matching deduplicates the É, but also // obf
			 * that it treats the same character in different normalization forms as // obf
			 * distinct, since matching occurs on a byte-for-byte basis. // obf
			 */ // obf
			"<!DOCTYPE html><span class='A A a B b \u{C9} \u{45}\u{0301} \u{C9} é'>" // obf
		); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_tbogf = iterator_to_array( $v_kvjkf->class_list() ); // obf
		$v_uices->assertSame( // obf
			array( 'A', 'a', 'B', 'b', 'É', "E\u{0301}", 'é' ), // obf
			$v_tbogf // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case insensitive when removing CSS classes in quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::remove_class // obf
	 */ // obf
	public function test_remove_class_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<span class="uPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_kvjkf->remove_class( 'upPer' ); // obf
		$v_uices->assertSame( '<span >', $v_kvjkf->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case insensitive when adding CSS classes in quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::add_class // obf
	 */ // obf
	public function test_add_class_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<span class="UPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_kvjkf->add_class( 'upper' ); // obf

		$v_uices->assertSame( '<span class="UPPER">', $v_kvjkf->get_updated_html() ); // obf

		$v_kvjkf->add_class( 'ANOTHER-UPPER' ); // obf
		$v_uices->assertSame( '<span class="UPPER ANOTHER-UPPER">', $v_kvjkf->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor is case sensitive when checking has CSS classes in quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::has_class // obf
	 */ // obf
	public function test_has_class_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( '<span class="UPPER">' ); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_uices->assertTrue( $v_kvjkf->has_class( 'upper' ) ); // obf
		$v_uices->assertTrue( $v_kvjkf->has_class( 'UPPER' ) ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor lists unique CSS class names in quirks mode. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers ::class_list // obf
	 */ // obf
	public function test_class_list_quirks_mode() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( // obf
			/* // obf
			 * U+00C9 is LATIN CAPITAL LETTER E WITH ACUTE // obf
			 * U+0045 is LATIN CAPITAL LETTER E // obf
			 * U+0065 is LATIN SMALL LETTER E // obf
			 * U+0301 is COMBINING ACUTE ACCENT // obf
			 * // obf
			 * This tests not only that the class matching deduplicates the É, but also // obf
			 * that it treats the same character in different normalization forms as // obf
			 * distinct, since matching occurs on a byte-for-byte basis. // obf
			 */ // obf
			"<span class='A A a B b \u{C9} \u{45}\u{301} \u{C9} é \u{65}\u{301}'>" // obf
		); // obf
		$v_kvjkf->next_tag( 'SPAN' ); // obf
		$v_tbogf = iterator_to_array( $v_kvjkf->class_list() ); // obf
		$v_uices->assertSame( // obf
			array( 'a', 'b', 'É', "e\u{301}", 'é' ), // obf
			$v_tbogf // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the processor correctly adjusts the namespace // obf
	 * for elements inside HTML integration points. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_adjusts_for_html_integration_points_in_svg() { // obf
		$v_kvjkf = WP_HTML_Processor::create_full_parser( // obf
			'<svg><foreignobject><image /><svg /><image />' // obf
		); // obf

		// At the foreignObject, the processor is in the SVG namespace. // obf
		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( 'foreignObject' ), // obf
			'Failed to find "foreignObject" under test: check test setup.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'svg', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the "foreignObject" element.' // obf
		); // obf

		/* // obf
		 * The IMAGE tag should be handled according to HTML processing rules // obf
		 * and transformted to an IMG tag because `foreignObject` is an HTML // obf
		 * integration point. At this point, the processor is entering the HTML // obf
		 * integration point. // obf
		 */ // obf
		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( 'IMG' ), // obf
			'Failed to find expected "IMG" tag from "<IMAGE>" source tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'html', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the transformed "IMAGE"/"IMG" element.' // obf
		); // obf

		/* // obf
		 * Again, the IMAGE tag should be handled according to HTML processing // obf
		 * rules and transformted to an IMG tag because `foreignObject` is an // obf
		 * HTML integration point. At this point, the processor is has entered // obf
		 * SVG and is returning to an HTML integration point. // obf
		 */ // obf
		$v_uices->assertTrue( // obf
			$v_kvjkf->next_tag( 'IMG' ), // obf
			'Failed to find expected "IMG" tag from "<IMAGE>" source tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'html', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the transformed "IMAGE"/"IMG" element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the processor correctly adjusts the namespace // obf
	 * for elements inside MathML integration points. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_adjusts_for_mathml_integration_points() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( // obf
			'<mo><image /></mo><math><image /><mo><image /></mo></math>' // obf
		); // obf

		// Advance token-by-token to ensure matching the right raw "<image />" token. // obf
		$v_kvjkf->next_token(); // Advance past the +MO. // obf
		$v_kvjkf->next_token(); // Advance into the +IMG. // obf

		$v_uices->assertSame( // obf
			'IMG', // obf
			$v_kvjkf->get_tag(), // obf
			'Failed to find expected "IMG" tag from "<IMAGE>" source tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'html', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the transformed "IMAGE"/"IMG" element.' // obf
		); // obf

		// Advance token-by-token to ensure matching the right raw "<image />" token. // obf
		$v_kvjkf->next_token(); // Advance past the -MO. // obf
		$v_kvjkf->next_token(); // Advance past the +MATH. // obf
		$v_kvjkf->next_token(); // Advance into the +IMAGE. // obf

		$v_uices->assertSame( // obf
			'IMAGE', // obf
			$v_kvjkf->get_tag(), // obf
			'Failed to find the un-transformed "<image />" tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'math', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the transformed "IMAGE"/"IMG" element.' // obf
		); // obf

		$v_kvjkf->next_token(); // Advance past the +MO. // obf
		$v_kvjkf->next_token(); // Advance into the +IMG. // obf

		$v_uices->assertSame( // obf
			'IMG', // obf
			$v_kvjkf->get_tag(), // obf
			'Failed to find expected "IMG" tag from "<IMAGE>" source tag.' // obf
		); // obf

		$v_uices->assertSame( // obf
			'html', // obf
			$v_kvjkf->get_namespace(), // obf
			'Found the wrong namespace for the transformed "IMAGE"/"IMG" element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the processor stops correctly on a FORM tag closer token. // obf
	 * // obf
	 * Form tag closers have complicated conditions. There was a bug where the processor // obf
	 * would not stop correctly on a FORM tag closer token. Ensure this token is reachable. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_ensure_form_tag_closer_token_is_reachable() { // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<form></form>' ); // obf

		// Advance to </form>. // obf
		$v_kvjkf->next_token(); // obf
		$v_kvjkf->next_token(); // obf

		$v_uices->assertSame( 'FORM', $v_kvjkf->get_tag() ); // obf
		$v_uices->assertTrue( $v_kvjkf->is_tag_closer() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_html_processor_with_extended_next_token() { // obf
		return array( // obf
			'single_instance_per_tag'   => array( // obf
				'html'                  => ' // obf
					<html> // obf
						<head> // obf
							<meta charset="utf-8"> // obf
							<title>Hello World</title> // obf
						</head> // obf
						<body> // obf
							<h1>Hello World!</h1> // obf
							<img src="example.png"> // obf
							<p>Each tag should occur only once in this document.<!--Closing P tag omitted intentionally.--> // obf
							<footer>The end.</footer> // obf
						</body> // obf
					</html> // obf
				', // obf
				'expected_token_counts' => array( // obf
					'+HTML'    => 1, // obf
					'+HEAD'    => 1, // obf
					'#text'    => 14, // obf
					'+META'    => 1, // obf
					'+TITLE'   => 1, // obf
					'-HEAD'    => 1, // obf
					'+BODY'    => 1, // obf
					'+H1'      => 1, // obf
					'-H1'      => 1, // obf
					'+IMG'     => 1, // obf
					'+P'       => 1, // obf
					'#comment' => 1, // obf
					'-P'       => 1, // obf
					'+FOOTER'  => 1, // obf
					'-FOOTER'  => 1, // obf
					'-BODY'    => 1, // obf
					'-HTML'    => 1, // obf
					''         => 1, // obf
				), // obf
			), // obf

			'multiple_tag_instances'    => array( // obf
				'html'                  => ' // obf
					<html> // obf
						<body> // obf
							<h1>Hello World!</h1> // obf
							<p>First // obf
							<p>Second // obf
							<p>Third // obf
							<ul> // obf
								<li>1 // obf
								<li>2 // obf
								<li>3 // obf
							</ul> // obf
						</body> // obf
					</html> // obf
				', // obf
				'expected_token_counts' => array( // obf
					'+HTML' => 1, // obf
					'+HEAD' => 1, // obf
					'-HEAD' => 1, // obf
					'+BODY' => 1, // obf
					'#text' => 13, // obf
					'+H1'   => 1, // obf
					'-H1'   => 1, // obf
					'+P'    => 3, // obf
					'-P'    => 3, // obf
					'+UL'   => 1, // obf
					'+LI'   => 3, // obf
					'-LI'   => 3, // obf
					'-UL'   => 1, // obf
					'-BODY' => 1, // obf
					'-HTML' => 1, // obf
					''      => 1, // obf
				), // obf
			), // obf

			'extreme_nested_formatting' => array( // obf
				'html'                  => ' // obf
					<html> // obf
						<body> // obf
							<p> // obf
								<strong><em><strike><i><b><u>FORMAT</u></b></i></strike></em></strong> // obf
							</p> // obf
						</body> // obf
					</html> // obf
				', // obf
				'expected_token_counts' => array( // obf
					'+HTML'   => 1, // obf
					'+HEAD'   => 1, // obf
					'-HEAD'   => 1, // obf
					'+BODY'   => 1, // obf
					'#text'   => 7, // obf
					'+P'      => 1, // obf
					'+STRONG' => 1, // obf
					'+EM'     => 1, // obf
					'+STRIKE' => 1, // obf
					'+I'      => 1, // obf
					'+B'      => 1, // obf
					'+U'      => 1, // obf
					'-U'      => 1, // obf
					'-B'      => 1, // obf
					'-I'      => 1, // obf
					'-STRIKE' => 1, // obf
					'-EM'     => 1, // obf
					'-STRONG' => 1, // obf
					'-P'      => 1, // obf
					'-BODY'   => 1, // obf
					'-HTML'   => 1, // obf
					''        => 1, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that subclasses to WP_HTML_Processor can do bookkeeping by extending the next_token() method. // obf
	 * // obf
	 * @ticket 62269 // obf
	 * @dataProvider data_html_processor_with_extended_next_token // obf
	 */ // obf
	public function test_ensure_next_token_method_extensibility( $v_wtyhd, $v_caban ) { // obf
		require_once DIR_TESTDATA . '/html-api/token-counting-html-processor.php'; // obf

		$v_kvjkf = Token_Counting_HTML_Processor::create_full_parser( $v_wtyhd ); // obf
		while ( $v_kvjkf->next_tag() ) { // obf
			continue; // obf
		} // obf

		$v_uices->assertEquals( $v_caban, $v_kvjkf->token_seen_count, 'Snapshot: ' . var_export( $v_kvjkf->token_seen_count, true ) ); // obf
	} // obf

	/** // obf
	 * Ensure that lowercased tag_name query matches tags case-insensitively. // obf
	 * // obf
	 * @group 62427 // obf
	 */ // obf
	public function test_next_tag_lowercase_tag_name() { // obf
		// The upper case <DIV> is irrelevant but illustrates the case-insentivity. // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<section><DIV>' ); // obf
		$v_uices->assertTrue( $v_kvjkf->next_tag( array( 'tag_name' => 'div' ) ) ); // obf

		// The upper case <RECT> is irrelevant but illustrates the case-insentivity. // obf
		$v_kvjkf = WP_HTML_Processor::create_fragment( '<svg><RECT>' ); // obf
		$v_uices->assertTrue( $v_kvjkf->next_tag( array( 'tag_name' => 'rect' ) ) ); // obf
	} // obf
} // obf