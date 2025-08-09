

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Tag_Processor bookmark functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Tag_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlTagProcessor_Bookmark extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_bookmark // obf
	 */ // obf
	public function test_set_bookmark() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_tbkco->assertTrue( $v_rbqec->set_bookmark( 'first li' ), 'Could not allocate a "first li" bookmark' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_tbkco->assertTrue( $v_rbqec->set_bookmark( 'second li' ), 'Could not allocate a "second li" bookmark' ); // obf
		$v_tbkco->assertTrue( $v_rbqec->set_bookmark( 'first li' ), 'Could not move the "first li" bookmark' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::release_bookmark // obf
	 */ // obf
	public function test_release_bookmark() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_tbkco->assertFalse( $v_rbqec->release_bookmark( 'first li' ), 'Released a non-existing bookmark' ); // obf
		$v_rbqec->set_bookmark( 'first li' ); // obf
		$v_tbkco->assertTrue( $v_rbqec->release_bookmark( 'first li' ), 'Could not release a bookmark' ); // obf
	} // obf

	/** // obf
	 * @ticket 57788 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_bookmark // obf
	 */ // obf
	public function test_has_bookmark_returns_false_if_bookmark_does_not_exist() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf
		$v_tbkco->assertFalse( $v_rbqec->has_bookmark( 'my-bookmark' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 57788 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_bookmark // obf
	 */ // obf
	public function test_has_bookmark_returns_true_if_bookmark_exists() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'my-bookmark' ); // obf
		$v_tbkco->assertTrue( $v_rbqec->has_bookmark( 'my-bookmark' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 57788 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_bookmark // obf
	 */ // obf
	public function test_has_bookmark_returns_false_if_bookmark_has_been_released() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'my-bookmark' ); // obf
		$v_rbqec->release_bookmark( 'my-bookmark' ); // obf
		$v_tbkco->assertFalse( $v_rbqec->has_bookmark( 'my-bookmark' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_seek() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_rbqec->set_bookmark( 'first li' ); // obf

		$v_rbqec->next_tag( 'li' ); // obf
		$v_rbqec->set_attribute( 'foo-2', 'bar-2' ); // obf

		$v_rbqec->seek( 'first li' ); // obf
		$v_rbqec->set_attribute( 'foo-1', 'bar-1' ); // obf

		$v_tbkco->assertSame( // obf
			'<ul><li foo-1="bar-1">One</li><li foo-2="bar-2">Two</li><li>Three</li></ul>', // obf
			$v_rbqec->get_updated_html(), // obf
			'Did not seek to the intended bookmark locations' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57787 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_seeks_to_tag_closer_bookmark() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>First</div><span>Second</span>' ); // obf
		$v_rbqec->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_rbqec->set_bookmark( 'second' ); // obf

		$v_rbqec->seek( 'first' ); // obf
		$v_rbqec->seek( 'second' ); // obf

		$v_tbkco->assertSame( // obf
			'DIV', // obf
			$v_rbqec->get_tag(), // obf
			'Did not seek to the intended bookmark location' // obf
		); // obf
	} // obf

	/** // obf
	 * WP_HTML_Tag_Processor used to test for the diffs affecting // obf
	 * the adjusted bookmark position while simultaneously adjusting // obf
	 * the bookmark in question. As a result, updating the bookmarks // obf
	 * of a next tag while removing two subsequent attributes in // obf
	 * a previous tag unfolded like this: // obf
	 * // obf
	 * 1. Check if the first removed attribute is before the bookmark: // obf
	 * // obf
	 * <button twenty_one_characters 7_chars></button><button></button> // obf
	 *         ^-------------------^                  ^ // obf
	 *           diff applied here           the bookmark is here // obf
	 * // obf
	 *    (Yes it is) // obf
	 * // obf
	 * 2. Move the bookmark to the left by the attribute length: // obf
	 * // obf
	 * <button twenty_one_characters 7_chars></button><button></button> // obf
	 *                           ^ // obf
	 *                   the bookmark is here // obf
	 * // obf
	 * 3. Check if the second removed attribute is before the bookmark: // obf
	 * // obf
	 * <button twenty_one_characters 7_chars></button><button></button> // obf
	 *                           ^   ^-----^ // obf
	 *                    bookmark    diff // obf
	 * // obf
	 *    This time, it isn't! // obf
	 * // obf
	 * The fix in the WP_HTML_Tag_Processor involves doing all the checks // obf
	 * before moving the bookmark. This test is here to guard us from // obf
	 * the erroneous behavior accidentally returning one day. // obf
	 * // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 * @covers WP_HTML_Tag_Processor::set_bookmark // obf
	 */ // obf
	public function test_removing_long_attributes_doesnt_break_seek() { // obf
		$v_vlmma     = <<<HTML // obf
		<button twenty_one_characters 7_chars></button><button></button> // obf
HTML; // obf
		$v_rbqec = new WP_HTML_Tag_Processor( $v_vlmma ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'second' ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'first' ), // obf
			'Seek() to the first button has failed' // obf
		); // obf
		$v_rbqec->remove_attribute( 'twenty_one_characters' ); // obf
		$v_rbqec->remove_attribute( '7_chars' ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'second' ), // obf
			'Seek() to the second button has failed' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 * @covers WP_HTML_Tag_Processor::set_bookmark // obf
	 */ // obf
	public function test_bookmarks_complex_use_case() { // obf
		$v_vlmma           = <<<HTML // obf
<div selected class="merge-message" checked> // obf
	<div class="select-menu d-inline-block"> // obf
		<div checked class="BtnGroup MixedCaseHTML position-relative" /> // obf
		<div checked class="BtnGroup MixedCaseHTML position-relative"> // obf
			<button type="button" class="merge-box-button btn-group-merge rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Merge pull request // obf
			</button> // obf

			<button type="button" class="merge-box-button btn-group-squash rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Squash and merge // obf
			</button> // obf

			<button type="button" class="merge-box-button btn-group-rebase rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Rebase and merge // obf
			</button> // obf

			<button aria-label="Select merge method" disabled="disabled" type="button" data-view-component="true" class="select-menu-button btn BtnGroup-item"></button> // obf
		</div> // obf
	</div> // obf
</div> // obf
HTML; // obf
		$v_zhlsn = <<<HTML // obf
<div selected class="merge-message" checked> // obf
	<div class="select-menu d-inline-block"> // obf
		<div  class="BtnGroup MixedCaseHTML position-relative" /> // obf
		<div checked class="BtnGroup MixedCaseHTML position-relative"> // obf
			<button type="submit" class="merge-box-button btn-group-merge rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Merge pull request // obf
			</button> // obf

			<button  class="hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Squash and merge // obf
			</button> // obf

			<button id="rebase-and-merge"     disabled=""> // obf
			  Rebase and merge // obf
			</button> // obf

			<button id="last-button"     ></button> // obf
		</div> // obf
	</div> // obf
</div> // obf
HTML; // obf
		$v_rbqec       = new WP_HTML_Tag_Processor( $v_vlmma ); // obf
		$v_rbqec->next_tag( 'div' ); // obf
		$v_rbqec->next_tag( 'div' ); // obf
		$v_rbqec->next_tag( 'div' ); // obf
		$v_rbqec->set_bookmark( 'first div' ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'first button' ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'second button' ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'third button' ); // obf
		$v_rbqec->next_tag( 'button' ); // obf
		$v_rbqec->set_bookmark( 'fourth button' ); // obf

		$v_rbqec->seek( 'first button' ); // obf
		$v_rbqec->set_attribute( 'type', 'submit' ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'third button' ), // obf
			'Seek() to the third button failed' // obf
		); // obf
		$v_rbqec->remove_attribute( 'class' ); // obf
		$v_rbqec->remove_attribute( 'type' ); // obf
		$v_rbqec->remove_attribute( 'aria-expanded' ); // obf
		$v_rbqec->set_attribute( 'id', 'rebase-and-merge' ); // obf
		$v_rbqec->remove_attribute( 'data-details-container' ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'first div' ), // obf
			'Seek() to the first div failed' // obf
		); // obf
		$v_rbqec->set_attribute( 'checked', false ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'fourth button' ), // obf
			'Seek() to the fourth button failed' // obf
		); // obf
		$v_rbqec->set_attribute( 'id', 'last-button' ); // obf
		$v_rbqec->remove_attribute( 'class' ); // obf
		$v_rbqec->remove_attribute( 'type' ); // obf
		$v_rbqec->remove_attribute( 'checked' ); // obf
		$v_rbqec->remove_attribute( 'aria-label' ); // obf
		$v_rbqec->remove_attribute( 'disabled' ); // obf
		$v_rbqec->remove_attribute( 'data-view-component' ); // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'second button' ), // obf
			'Seek() to the second button failed' // obf
		); // obf
		$v_rbqec->remove_attribute( 'type' ); // obf
		$v_rbqec->set_attribute( 'class', 'hx_create-pr-button' ); // obf

		$v_tbkco->assertSame( // obf
			$v_zhlsn, // obf
			$v_rbqec->get_updated_html(), // obf
			'Performing several attribute updates on different tags does not produce the expected HTML snippet' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * @ticket 60697 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_updates_bookmark_for_additions_after_both_sides() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>First</div><div>Second</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_attribute( 'id', 'one' ); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_attribute( 'id', 'two' ); // obf
		$v_rbqec->add_class( 'second' ); // obf

		$v_rbqec->seek( 'first' ); // obf
		$v_rbqec->add_class( 'first' ); // obf

		$v_tbkco->assertSame( // obf
			'one', // obf
			$v_rbqec->get_attribute( 'id' ), // obf
			'Should have remembered attribute change from before the seek.' // obf
		); // obf

		$v_tbkco->assertSame( // obf
			'<div class="first" id="one">First</div><div class="second" id="two">Second</div>', // obf
			$v_rbqec->get_updated_html(), // obf
			'The bookmark was updated incorrectly in response to HTML markup updates' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_updates_bookmark_for_additions_before_both_sides() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>First</div><div>Second</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'second' ); // obf

		$v_rbqec->seek( 'first' ); // obf
		$v_rbqec->add_class( 'first' ); // obf

		$v_rbqec->seek( 'second' ); // obf
		$v_rbqec->add_class( 'second' ); // obf

		$v_tbkco->assertSame( // obf
			'<div class="first">First</div><div class="second">Second</div>', // obf
			$v_rbqec->get_updated_html(), // obf
			'The bookmark was updated incorrectly in response to HTML markup updates' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_updates_bookmark_for_deletions_after_both_sides() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div>First</div><div disabled>Second</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->remove_attribute( 'disabled' ); // obf

		$v_rbqec->seek( 'first' ); // obf
		$v_rbqec->set_attribute( 'untouched', true ); // obf

		$v_tbkco->assertSame( // obf
			/* // obf
			 * It shouldn't be necessary to assert the extra space after the tag // obf
			 * following the attribute removal, but doing so makes the test easier // obf
			 * to see than it would be if parsing the output HTML for proper // obf
			 * validation. If the Tag Processor changes so that this space no longer // obf
			 * appears then this test should be updated to reflect that. The space // obf
			 * is not required. // obf
			 */ // obf
			'<div untouched>First</div><div >Second</div>', // obf
			$v_rbqec->get_updated_html(), // obf
			'The bookmark was incorrectly in response to HTML markup updates' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_updates_bookmark_for_deletions_before_both_sides() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<div disabled>First</div><div>Second</div>' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'first' ); // obf
		$v_rbqec->next_tag(); // obf
		$v_rbqec->set_bookmark( 'second' ); // obf

		$v_rbqec->seek( 'first' ); // obf
		$v_rbqec->remove_attribute( 'disabled' ); // obf

		$v_rbqec->seek( 'second' ); // obf
		$v_rbqec->set_attribute( 'safe', true ); // obf

		$v_tbkco->assertSame( // obf
			/* // obf
			 * It shouldn't be necessary to assert the extra space after the tag // obf
			 * following the attribute removal, but doing so makes the test easier // obf
			 * to see than it would be if parsing the output HTML for proper // obf
			 * validation. If the Tag Processor changes so that this space no longer // obf
			 * appears then this test should be updated to reflect that. The space // obf
			 * is not required. // obf
			 */ // obf
			'<div >First</div><div safe>Second</div>', // obf
			$v_rbqec->get_updated_html(), // obf
			'The bookmark was updated incorrectly in response to HTML markup updates' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_bookmark // obf
	 * @expectedIncorrectUsage WP_HTML_Tag_Processor::set_bookmark // obf
	 */ // obf
	public function test_limits_the_number_of_bookmarks() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf

		for ( $v_piypp = 0; $v_piypp < WP_HTML_Tag_Processor::MAX_BOOKMARKS; $v_piypp++ ) { // obf
			$v_tbkco->assertTrue( $v_rbqec->set_bookmark( "bookmark $v_piypp" ), "Could not allocate the bookmark #$v_piypp" ); // obf
		} // obf

		$v_tbkco->assertFalse( $v_rbqec->set_bookmark( 'final bookmark' ), "Allocated $v_piypp bookmarks, which is one above the limit" ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_limits_the_number_of_seek_calls() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_rbqec->set_bookmark( 'ping' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_rbqec->set_bookmark( 'pong' ); // obf

		for ( $v_piypp = 0; $v_piypp < WP_HTML_Tag_Processor::MAX_SEEK_OPS; $v_piypp += 2 ) { // obf
			$v_tbkco->assertTrue( // obf
				$v_rbqec->seek( 'ping' ), // obf
				'Could not seek to the "ping": check test setup.' // obf
			); // obf

			$v_tbkco->assertTrue( // obf
				$v_rbqec->seek( 'pong' ), // obf
				'Could not seek to the "pong": check test setup.' // obf
			); // obf
		} // obf

		$v_tbkco->setExpectedIncorrectUsage( 'WP_HTML_Tag_Processor::seek' ); // obf
		$v_tbkco->assertFalse( $v_rbqec->seek( 'bookmark' ), "$v_piypp-th seek() to the bookmark succeeded, even though it should exceed the allowed limit" ); // obf
	} // obf

	/** // obf
	 * @ticket 62085 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::seek // obf
	 */ // obf
	public function test_skips_counting_noop_seek_calls() { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( '<ul><li>One</li><li>Two</li><li>Three</li></ul>' ); // obf
		$v_rbqec->next_tag( 'li' ); // obf
		$v_rbqec->set_bookmark( 'here' ); // obf

		for ( $v_piypp = 0; $v_piypp < WP_HTML_Tag_Processor::MAX_SEEK_OPS; $v_piypp++ ) { // obf
			$v_tbkco->assertTrue( // obf
				$v_rbqec->seek( 'here' ), // obf
				'Could not seek to the "here": check test setup.' // obf
			); // obf
		} // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'here' ), // obf
			'Should never fail to seek if the seek is pointing at the current location.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that it's possible to seek to an earlier location in a document even // obf
	 * after reaching the end of a document, when most functionality shuts down. // obf
	 * // obf
	 * @ticket 60428 // obf
	 * // obf
	 * @dataProvider data_incomplete_html_with_target_nodes_for_seeking // obf
	 * // obf
	 * @param string $v_cgyoo HTML string containing a tag with a `target` attribute. // obf
	 */ // obf
	public function test_can_seek_after_document_ends( $v_cgyoo ) { // obf
		$v_rbqec = new WP_HTML_Tag_Processor( $v_cgyoo ); // obf

		$v_kazyv = null; // obf
		while ( $v_rbqec->next_tag() ) { // obf
			if ( null !== $v_rbqec->get_attribute( 'target' ) ) { // obf
				$v_rbqec->set_bookmark( 'target' ); // obf
				$v_kazyv = $v_rbqec->get_tag(); // obf
			} // obf
		} // obf

		$v_tbkco->assertTrue( // obf
			$v_rbqec->seek( 'target' ), // obf
			'Should have been able to seek to the target bookmark after reaching the end of the document.' // obf
		); // obf

		$v_tbkco->assertSame( // obf
			$v_kazyv, // obf
			$v_rbqec->get_tag(), // obf
			"Should have found original target node instead of {$v_rbqec->get_tag()}." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_incomplete_html_with_target_nodes_for_seeking() { // obf
		return array( // obf
			'Compete document'    => array( '<div><img target></div>' ), // obf
			'Incomplete document' => array( '<div><img target></div' ), // obf
		); // obf
	} // obf
} // obf