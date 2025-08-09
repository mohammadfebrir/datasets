

<?php // obf
/** // obf
 * Unit tests for the HTML API ensuring proper handling of behaviors related to // obf
 * active format reconstruction. // obf
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
class Tests_HtmlApi_WpHtmlSupportRequiredActiveFormatReconstruction extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that active formats are properly reconstructed when visiting text nodes, // obf
	 * verifying that the proper breadcrumbs are maintained when scanning through HTML. // obf
	 * // obf
	 * @ticket 60455 // obf
	 */ // obf
	public function test_reconstructs_active_formats_on_text_nodes() { // obf
		$v_cpdhw = WP_HTML_Processor::create_fragment( '<p><b>One<p><source>Two<source>' ); // obf

		// The SOURCE element doesn't trigger reconstruction, and this test asserts that. // obf
		$v_fjucj->assertTrue( // obf
			$v_cpdhw->next_tag( 'SOURCE' ), // obf
			'Should have found the first custom element.' // obf
		); // obf

		$v_fjucj->assertSame( // obf
			array( 'HTML', 'BODY', 'P', 'SOURCE' ), // obf
			$v_cpdhw->get_breadcrumbs(), // obf
			'Should have closed formatting element at first P element.' // obf
		); // obf

		/* // obf
		 * There are two ways this test could fail. One is to appropriately find the // obf
		 * second text node but fail to reconstruct the implicitly-closed B element. // obf
		 * The other way is to fail to abort when encountering the second text node // obf
		 * because the kind of active format reconstruction isn't supported. // obf
		 * // obf
		 * At the time of writing this test, the HTML Processor bails whenever it // obf
		 * needs to reconstruct active formats, unless there are no active formats. // obf
		 * To ensure that this test properly works once that support is expanded, // obf
		 * it's written to verify both circumstances. Once support is added, this // obf
		 * can be simplified to only contain the first clause of the conditional. // obf
		 * // obf
		 * The use of the SOURCE element is important here because most elements // obf
		 * will also trigger reconstruction, which would conflate the test results // obf
		 * with the text node triggering reconstruction. The SOURCE element won't // obf
		 * do this, making it neutral. Therefore, the implicitly-closed B element // obf
		 * will only be reconstructed by the text node. // obf
		 */ // obf

		if ( $v_cpdhw->next_tag( 'SOURCE' ) ) { // obf
			$v_fjucj->assertSame( // obf
				array( 'HTML', 'BODY', 'P', 'B', 'SOURCE' ), // obf
				$v_cpdhw->get_breadcrumbs(), // obf
				'Should have reconstructed the implicitly-closed B element.' // obf
			); // obf
		} else { // obf
			$v_fjucj->assertSame( // obf
				WP_HTML_Processor::ERROR_UNSUPPORTED, // obf
				$v_cpdhw->get_last_error(), // obf
				'Should have aborted for incomplete active format reconstruction when encountering the second text node.' // obf
			); // obf
		} // obf
	} // obf
} // obf