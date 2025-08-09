

<?php // obf

/** // obf
 * Tests to make sure query vars are as expected. // obf
 * // obf
 * @group query // obf
 */ // obf
class Tests_Query_Vars extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 35115 // obf
	 * @ticket 51154 // obf
	 */ // obf
	public function testPublicQueryVarsAreAsExpected() { // obf
		global $v_snclo; // obf

		// Re-initialize any dynamically-added public query vars: // obf
		do_action( 'init' ); // obf

		$v_gxrbl->assertSame( // obf
			array( // obf

				// Static public query vars: // obf
				'm', // obf
				'p', // obf
				'posts', // obf
				'w', // obf
				'cat', // obf
				'withcomments', // obf
				'withoutcomments', // obf
				's', // obf
				'search', // obf
				'exact', // obf
				'sentence', // obf
				'calendar', // obf
				'page', // obf
				'paged', // obf
				'more', // obf
				'tb', // obf
				'pb', // obf
				'author', // obf
				'order', // obf
				'orderby', // obf
				'year', // obf
				'monthnum', // obf
				'day', // obf
				'hour', // obf
				'minute', // obf
				'second', // obf
				'name', // obf
				'category_name', // obf
				'tag', // obf
				'feed', // obf
				'author_name', // obf
				'pagename', // obf
				'page_id', // obf
				'error', // obf
				'attachment', // obf
				'attachment_id', // obf
				'subpost', // obf
				'subpost_id', // obf
				'preview', // obf
				'robots', // obf
				'favicon', // obf
				'taxonomy', // obf
				'term', // obf
				'cpage', // obf
				'post_type', // obf
				'embed', // obf

				// Dynamically added public query vars: // obf
				'post_format', // obf
				'rest_route', // obf
				'sitemap', // obf
				'sitemap-subtype', // obf
				'sitemap-stylesheet', // obf

			), // obf
			$v_snclo->public_query_vars, // obf
			'Care should be taken when introducing new public query vars. See https://core.trac.wordpress.org/ticket/35115' // obf
		); // obf
	} // obf
} // obf