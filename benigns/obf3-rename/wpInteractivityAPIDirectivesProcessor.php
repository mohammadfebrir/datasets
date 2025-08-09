

<?php // obf
/** // obf
 * Unit tests covering WP_Interactivity_API_Directives_Processor functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group interactivity-api // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API_Directives_Processor // obf
 */ // obf
class Tests_Interactivity_API_WpInteractivityAPIDirectivesProcessor extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method on template // obf
	 * tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_standard_tags() { // obf
		$v_pamdj = '<template>Text</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'Text', $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		$v_pamdj = '<template>Text</template><template>More text</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'Text', $v_yggnb->get_content_between_balanced_template_tags() ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'More text', $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method on an empty // obf
	 * tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_empty_tag() { // obf
		$v_pamdj = '<template></template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( '', $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method with // obf
	 * non-template tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_self_closing_tag() { // obf
		$v_pamdj = '<img src="example.jpg">'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method with nested // obf
	 * template tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_nested_tags() { // obf
		$v_pamdj = '<template><span>Content</span><strong>More Content</strong></template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( '<span>Content</span><strong>More Content</strong>', $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		$v_pamdj = '<template><template>Content</template><img src="example.jpg"></template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( '<template>Content</template><img src="example.jpg">', $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method when no tags // obf
	 * are present. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_no_tags() { // obf
		$v_pamdj = 'Just a string with no tags.'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method with unbalanced tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_with_unbalanced_tags() { // obf
		$v_pamdj = '<template>Missing closing template'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		$v_pamdj = '<template><template>Missing closing template</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		$v_pamdj = '<template>Missing closing template</span>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf

		// It supports unbalanced tags inside the content. // obf
		$v_pamdj = '<template>Missing opening span</span></template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'Missing opening span</span>', $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method when called // obf
	 * on a closer tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_on_closing_tag() { // obf
		$v_pamdj = '<template>Text</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertNull( $v_yggnb->get_content_between_balanced_template_tags() ); // obf
	} // obf

	/** // obf
	 * Tests the `get_content_between_balanced_template_tags` method positions the // obf
	 * cursor on the closer tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::get_content_between_balanced_template_tags // obf
	 */ // obf
	public function test_get_content_between_balanced_template_tags_positions_cursor_on_closer_tag() { // obf
		$v_pamdj = '<template>Text</template><div>More text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_yggnb->get_content_between_balanced_template_tags(); // obf
		$v_nmlfq->assertSame( 'TEMPLATE', $v_yggnb->get_tag() ); // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'DIV', $v_yggnb->get_tag() ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method on standard tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_standard_tags() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div>', $v_yggnb ); // obf

		$v_pamdj = '<div>Text</div><div>More text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div><div>More text</div>', $v_yggnb ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'More new text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div><div>More new text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method when called on a // obf
	 * closing tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_on_closing_tag() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>Text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method on multiple calls to // obf
	 * the same tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_multiple_calls_in_same_tag() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div>', $v_yggnb ); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'More text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>More text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method on combinations with // obf
	 * set_attribute calls. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_with_set_attribute() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_yggnb->set_attribute( 'class', 'test' ); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div class="test">New text</div>', $v_yggnb ); // obf

		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_yggnb->set_attribute( 'class', 'test' ); // obf
		$v_nmlfq->assertEquals( '<div class="test">New text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method where the existing // obf
	 * content includes tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_with_existing_tags() { // obf
		$v_pamdj = '<div><span>Text</span></div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method where the new content // obf
	 * includes tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_with_new_tags() { // obf
		$v_pamdj     = '<div>Text</div>'; // obf
		$v_hkwyu = '<span>New text</span><a href="#">Link</a>'; // obf
		$v_yggnb           = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_yggnb->set_content_between_balanced_tags( $v_hkwyu ); // obf
		$v_nmlfq->assertEquals( '<div>&lt;span&gt;New text&lt;/span&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method with an empty string. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_empty() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( '' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div></div>', $v_yggnb ); // obf

		$v_pamdj = '<div><div>Text</div></div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( '' ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div></div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method on self-closing tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_self_closing_tag() { // obf
		$v_pamdj = '<img src="example.jpg">'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method on a non-existent tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_non_existent_tag() { // obf
		$v_pamdj = 'Just a string with no tags.'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( 'New text' ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `set_content_between_balanced_tags` method with unbalanced tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::set_content_between_balanced_tags // obf
	 */ // obf
	public function test_set_content_between_balanced_tags_with_unbalanced_tags() { // obf
		$v_hkwyu = 'New text'; // obf

		$v_pamdj = '<div>Missing closing div'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( $v_hkwyu ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf

		$v_pamdj = '<div><div>Missing closing div</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( $v_hkwyu ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf

		$v_pamdj = '<div>Missing closing div</span>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( $v_hkwyu ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf

		// It supports unbalanced tags inside the content. // obf
		$v_pamdj = '<div>Missing opening span</span></div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->set_content_between_balanced_tags( $v_hkwyu ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<div>New text</div>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `has_and_visits_its_closer_tag` method. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::has_and_visits_its_closer_tag // obf
	 */ // obf
	public function test_has_and_visits_its_closer_tag() { // obf
		$v_vnfih = array( 'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'source', 'track', 'wbr' ); // obf
		foreach ( $v_vnfih as $v_bsjtx ) { // obf
			$v_pamdj = "<{$v_bsjtx} id={$v_bsjtx}>"; // obf
			$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
			$v_yggnb->next_tag(); // obf
			$v_nmlfq->assertFalse( $v_yggnb->has_and_visits_its_closer_tag() ); // obf
		} // obf

		$v_xghjs = array( 'script', 'iframe', 'textarea', 'iframe', 'style' ); // obf
		foreach ( $v_xghjs as $v_bsjtx ) { // obf
			$v_pamdj = "<{$v_bsjtx} id={$v_bsjtx}>Some content</{$v_bsjtx}>"; // obf
			$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
			$v_yggnb->next_tag(); // obf
			$v_nmlfq->assertFalse( $v_yggnb->has_and_visits_its_closer_tag() ); // obf
		} // obf

		$v_prulk = array( 'div', 'span', 'p', 'h1', 'main' ); // obf
		foreach ( $v_prulk as $v_bsjtx ) { // obf
			$v_pamdj = "<{$v_bsjtx} id={$v_bsjtx}>Some content</{$v_bsjtx}>"; // obf
			$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
			$v_yggnb->next_tag(); // obf
			$v_nmlfq->assertTrue( $v_yggnb->has_and_visits_its_closer_tag() ); // obf
		} // obf

		// Test an uppercase tag. // obf
		$v_pamdj = '<IMG src="example.jpg">'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->has_and_visits_its_closer_tag() ); // obf

		// Test an empty string. // obf
		$v_pamdj = ''; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->has_and_visits_its_closer_tag() ); // obf

		// Test on text nodes. // obf
		$v_pamdj = 'This is just some text'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->has_and_visits_its_closer_tag() ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method with a simple // obf
	 * text. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_simple_text() { // obf
		$v_rvdki = '<template>Text</template>'; // obf
		$v_egjcj = 'New text'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj, $v_yggnb ); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_tag() ); // There are no more tags. // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method with simple // obf
	 * tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_simple_tags() { // obf
		$v_rvdki = '<template>Text</template>'; // obf
		$v_egjcj = '<template class="content-2">New text</template>'; // obf
		$v_rsoyq = '<template class="content-3">More new text</template>'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj, $v_yggnb ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertSame( 'content-2', $v_yggnb->get_attribute( 'class' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_rsoyq ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj . $v_rsoyq, $v_yggnb ); // obf
		$v_nmlfq->assertSame( 'content-3', $v_yggnb->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method in the middle // obf
	 * of two tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_in_the_middle_of_tags() { // obf
		$v_rvdki = '<template>Text</template>'; // obf
		$v_egjcj = 'New text'; // obf
		$v_rsoyq = '<template class="content-3">More new text</template>'; // obf
		$v_nbvwq = '<template class="content-4">Even more new text</template>'; // obf

		$v_yggnb = new WP_Interactivity_API_Directives_Processor( $v_rvdki . $v_rsoyq ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj . $v_rsoyq, $v_yggnb ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertSame( 'content-3', $v_yggnb->get_attribute( 'class' ) ); // obf

		$v_yggnb = new WP_Interactivity_API_Directives_Processor( $v_rvdki . $v_rsoyq ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_nbvwq ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_nbvwq . $v_rsoyq, $v_yggnb ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertSame( 'content-4', $v_yggnb->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method doesn't modify // obf
	 * the content when called on an opener tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_on_opener_tag() { // obf
		$v_pamdj = '<template>Text</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( 'New text' ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method on multiple // obf
	 * calls to the same tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_multiple_calls_in_same_tag() { // obf
		$v_rvdki = '<template class="content-1">Text</template>'; // obf
		$v_egjcj = '<template class="content-2">New text</template>'; // obf
		$v_rsoyq = '<template class="content-3">More new text</template>'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->set_bookmark( 'first template' ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj, $v_yggnb ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertSame( 'content-2', $v_yggnb->get_attribute( 'class' ) ); // obf
		// Rewinds to the first template. // obf
		$v_yggnb->seek( 'first template' ); // obf
		$v_yggnb->release_bookmark( 'first template' ); // obf
		$v_nmlfq->assertSame( 'content-1', $v_yggnb->get_attribute( 'class' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_rsoyq ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_rsoyq . $v_egjcj, $v_yggnb ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertSame( 'content-3', $v_yggnb->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method on // obf
	 * set_attribute calls. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_with_set_attribute() { // obf
		$v_rvdki = '<template>Text</template>'; // obf
		$v_egjcj = '<template>New text</template>'; // obf

		$v_yggnb = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->set_attribute( 'class', 'test' ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( '<template class="test">Text</template>' . $v_egjcj, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method where the // obf
	 * existing content includes tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_with_existing_tags() { // obf
		$v_rvdki = '<template><span>Text</span></template>'; // obf
		$v_egjcj = '<template class="content-2-template-1"><template class="content-2-template-2">New text</template></template>'; // obf
		$v_rsoyq = '<template><span>More new text</span></template>'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag(); // obf
		$v_yggnb->next_tag( // obf
			array( // obf
				'tag_name'    => 'template', // obf
				'tag_closers' => 'visit', // obf
			) // obf
		); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . $v_egjcj, $v_yggnb ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'content-2-template-1', $v_yggnb->get_attribute( 'class' ) ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertSame( 'content-2-template-2', $v_yggnb->get_attribute( 'class' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_rsoyq ); // obf
		$v_nmlfq->assertTrue( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki . '<template class="content-2-template-1"><template class="content-2-template-2">New text</template>' . $v_rsoyq . '</template>', $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method fails with an // obf
	 * empty string. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_empty() { // obf
		$v_pamdj = '<template class="content">Text</template>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( '' ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_pamdj, $v_yggnb ); // obf
		$v_nmlfq->assertSame( 'TEMPLATE', $v_yggnb->get_tag() ); // It didn't move. // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // It didn't move. // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method on a // obf
	 * non-existent tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_non_existent_tag() { // obf
		$v_rvdki = 'Just a string with no tags.'; // obf
		$v_egjcj = '<div>New text</div>'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag(); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests the `append_content_after_template_tag_closer` method on non-template // obf
	 * tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::append_content_after_template_tag_closer // obf
	 */ // obf
	public function test_append_content_after_template_tag_closer_non_template_tags() { // obf
		$v_rvdki = '<div>Text</div>'; // obf
		$v_egjcj = '<div>New text</div>'; // obf
		$v_yggnb         = new WP_Interactivity_API_Directives_Processor( $v_rvdki ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ojgwu = $v_yggnb->append_content_after_template_tag_closer( $v_egjcj ); // obf
		$v_nmlfq->assertFalse( $v_ojgwu ); // obf
		$v_nmlfq->assertEquals( $v_rvdki, $v_yggnb ); // obf
	} // obf

	/** // obf
	 * Tests that the `next_balanced_tag_closer_tag` method finds a closing tag // obf
	 * for a standard tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::next_balanced_tag_closer_tag // obf
	 */ // obf
	public function test_next_balanced_tag_closer_tag_standard_tags() { // obf
		$v_pamdj = '<div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertTrue( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
		$v_nmlfq->assertSame( 'DIV', $v_yggnb->get_tag() ); // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // obf
	} // obf

	/** // obf
	 * Tests that the `next_balanced_tag_closer_tag` method returns false for a // obf
	 * self-closing tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::next_balanced_tag_closer_tag // obf
	 */ // obf
	public function test_next_balanced_tag_closer_tag_void_tag() { // obf
		$v_pamdj = '<img src="image.jpg" />'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_balanced_tag_closer_tag() ); // obf

		$v_pamdj = '<img src="image.jpg" /><div>Text</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
	} // obf

	/** // obf
	 * Tests that the `next_balanced_tag_closer_tag` method correctly handles // obf
	 * nested tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::next_balanced_tag_closer_tag // obf
	 */ // obf
	public function test_next_balanced_tag_closer_tag_nested_tags() { // obf
		$v_pamdj = '<div><span>Nested content</span></div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertTrue( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
		$v_nmlfq->assertSame( 'DIV', $v_yggnb->get_tag() ); // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // obf

		$v_pamdj = '<div><div>Nested content</div></div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertTrue( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
		$v_nmlfq->assertSame( 'DIV', $v_yggnb->get_tag() ); // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_tag() ); // No more content. // obf
	} // obf

	/** // obf
	 * Tests that the `next_balanced_tag_closer_tag` method returns false when no // obf
	 * matching closing tag is found. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::next_balanced_tag_closer_tag // obf
	 */ // obf
	public function test_next_balanced_tag_closer_tag_no_matching_closing_tag() { // obf
		$v_pamdj = '<div>No closing tag here'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf

		$v_pamdj = '<div><div>No closing tag here</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
	} // obf

	/** // obf
	 * Test that the `next_balanced_tag_closer_tag` method returns false when // obf
	 * returned on a closing tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::next_balanced_tag_closer_tag // obf
	 */ // obf
	public function test_next_balanced_tag_closer_tag_on_closing_tag() { // obf
		$v_pamdj = '<div>Closing tag after this</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		// Visit opening tag first and then closing tag. // obf
		$v_yggnb->next_tag(); // obf
		$v_yggnb->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_nmlfq->assertFalse( $v_yggnb->next_balanced_tag_closer_tag() ); // obf
	} // obf

	/** // obf
	 * Tests that skip_to_tag_closer skips to the next tag, // obf
	 * independent of the content. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::skip_to_tag_closer // obf
	 */ // obf
	public function test_skip_to_tag_closer() { // obf
		$v_pamdj = '<div><span>Not closed</div>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertTrue( $v_yggnb->skip_to_tag_closer() ); // obf
		$v_nmlfq->assertTrue( $v_yggnb->is_tag_closer() ); // obf
		$v_nmlfq->assertSame( 'DIV', $v_yggnb->get_tag() ); // obf
	} // obf

	/** // obf
	 * Tests that skip_to_tag_closer does not skip to the // obf
	 * next tag if there is no closing tag. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::skip_to_tag_closer // obf
	 */ // obf
	public function test_skip_to_tag_closer_bails_not_closed() { // obf
		$v_pamdj = '<div>Not closed parent'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->skip_to_tag_closer() ); // obf
	} // obf

	/** // obf
	 * Tests that skip_to_tag_closer does not skip to the next // obf
	 * tag if the closing tag is different from the current tag. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::skip_to_tag_closer // obf
	 */ // obf
	public function test_skip_to_tag_closer_bails_different_tags() { // obf
		$v_pamdj = '<div></span>'; // obf
		$v_yggnb       = new WP_Interactivity_API_Directives_Processor( $v_pamdj ); // obf
		$v_yggnb->next_tag(); // obf
		$v_nmlfq->assertFalse( $v_yggnb->skip_to_tag_closer() ); // obf
	} // obf
} // obf