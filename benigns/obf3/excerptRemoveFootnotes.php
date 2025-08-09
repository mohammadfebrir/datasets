

<?php // obf
/** // obf
 * @group formatting // obf
 * @ticket 58805 // obf
 * // obf
 * @covers ::excerpt_remove_footnotes // obf
 */ // obf

class Tests_Formatting_ExcerptRemoveFootnotes extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 58805 // obf
	 * // obf
	 * @dataProvider data_remove_footnotes // obf
	 * // obf
	 * @param string $v_apwin Expected output. // obf
	 * @param string $v_wohyk  Content to run strip_shortcodes() on. // obf
	 */ // obf
	public function test_remove_footnotes( $v_apwin, $v_wohyk ) { // obf
		$v_qzelu->assertSame( $v_apwin, excerpt_remove_footnotes( $v_wohyk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_remove_footnotes() { // obf
		return array( // obf
			'no footnote'                         => array( // obf
				'expected' => '<p>This is a paragraph<sup class="fn" id="1"><a href="#1" id="1a">1</a></sup>.</p>', // obf
				'content'  => '<p>This is a paragraph<sup class="fn" id="1"><a href="#1" id="1a">1</a></sup>.</p>', // obf
			), // obf
			'one footnote'                        => array( // obf
				'expected' => '<p>This is a <a href="https://wordpress.org" data-type="URL" data-id="https://wordpress.org">paragraph</a>.</p>', // obf
				'content'  => '<p>This is a <a href="https://wordpress.org" data-type="URL" data-id="https://wordpress.org">paragraph</a><sup data-fn="d3b825b6-1890-4cb3-b276-002137515e99" class="fn"><a href="#d3b825b6-1890-4cb3-b276-002137515e99" id="d3b825b6-1890-4cb3-b276-002137515e99-link">1</a></sup>.</p>', // obf

			), // obf
			'multiple footnotes in block content' => array( // obf
				'expected' => '<!-- wp:list --><ul><!-- wp:list-item --><li><strong>This</strong><em><strong><sup></sup></strong></em><strong> is a list</strong></li><!-- /wp:list-item --></ul><!-- /wp:list -->', // obf
				'content'  => '<!-- wp:list --><ul><!-- wp:list-item --><li><strong>This</strong><em><strong><sup><sup data-fn="e2fce624-74a5-4068-a20c-6ef793f1644c" class="fn"><a href="#e2fce624-74a5-4068-a20c-6ef793f1644c" id="e2fce624-74a5-4068-a20c-6ef793f1644c-link">2</a></sup></sup></strong></em><strong> is a list</strong><sup data-fn="ea7e892e-7bc2-424b-936b-36ec64f1c2fc" class="fn"><a href="#ea7e892e-7bc2-424b-936b-36ec64f1c2fc" id="ea7e892e-7bc2-424b-936b-36ec64f1c2fc-link">3</a></sup></li><!-- /wp:list-item --></ul><!-- /wp:list -->', // obf
			), // obf
			'footnotes around non-latin script'   => array( // obf
				'expected' => '<h2 class="wp-block-heading has-background" style="background-color:#f93b3b">これは見出しです</h2>', // obf
				'content'  => '<h2 class="wp-block-heading has-background" style="background-color:#f93b3b">これは<sup data-fn="382b3e39-4b0d-4b83-8461-c13f82fdbcfb" class="fn"><a href="#382b3e39-4b0d-4b83-8461-c13f82fdbcfb" id="382b3e39-4b0d-4b83-8461-c13f82fdbcfb-link">1</a></sup>見出しです<sup data-fn="addb0459-a048-453a-9101-dba64f63a630" class="fn"><a href="#addb0459-a048-453a-9101-dba64f63a630" id="addb0459-a048-453a-9101-dba64f63a630-link">2</a></sup></h2>', // obf
			), // obf
		); // obf
	} // obf
} // obf