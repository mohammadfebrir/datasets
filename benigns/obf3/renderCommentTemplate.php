

<?php // obf
/** // obf
 * Tests for the Comment Template block rendering. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.0.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_RenderReusableCommentTemplate extends WP_UnitTestCase { // obf

	private static $v_acrfy; // obf
	private static $v_mugui; // obf
	private static $v_afwnq = 5; // obf

	/** // obf
	 * Array of the comments options and their original values. // obf
	 * Used to reset the options after each test. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_yrrdx; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		// Store the original option values. // obf
		$v_ghdsu = array( // obf
			'comment_order', // obf
			'comments_per_page', // obf
			'default_comments_page', // obf
			'page_comments', // obf
			'previous_default_page', // obf
			'thread_comments_depth', // obf
		); // obf
		foreach ( $v_ghdsu as $v_mdihz ) { // obf
			static::$v_yrrdx[ $v_mdihz ] = get_option( $v_mdihz ); // obf
		} // obf
	} // obf

	public function tear_down() { // obf
		// Reset the comment options to their original values. // obf
		foreach ( static::$v_yrrdx as $v_mdihz => $v_fgpzm ) { // obf
			update_option( $v_mdihz, $v_fgpzm ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', self::$v_afwnq ); // obf

		self::$v_acrfy = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'dogs', // obf
				'post_status'  => 'publish', // obf
				'post_name'    => 'metaldog', // obf
				'post_title'   => 'Metal Dog', // obf
				'post_content' => 'Metal Dog content', // obf
				'post_excerpt' => 'Metal Dog', // obf
			) // obf
		); // obf

		self::$v_mugui = self::factory()->comment->create_post_comments( // obf
			self::$v_acrfy->ID, // obf
			1, // obf
			array( // obf
				'comment_author'       => 'Test', // obf
				'comment_author_email' => 'test@example.org', // obf
				'comment_author_url'   => 'http://example.com/author-url/', // obf
				'comment_content'      => 'Hello world', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_with_context() { // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_ibyio->assertSameSetsWithIndex( // obf
			array( // obf
				'orderby'       => 'comment_date_gmt', // obf
				'order'         => 'ASC', // obf
				'status'        => 'approve', // obf
				'no_found_rows' => false, // obf
				'post_id'       => self::$v_acrfy->ID, // obf
				'hierarchical'  => 'threaded', // obf
				'number'        => 5, // obf
				'paged'         => 1, // obf
			), // obf
			build_comment_query_vars_from_block( $v_xjyxv ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55567 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_with_context_no_pagination() { // obf
		update_option( 'page_comments', false ); // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_ibyio->assertSameSetsWithIndex( // obf
			array( // obf
				'orderby'       => 'comment_date_gmt', // obf
				'order'         => 'ASC', // obf
				'status'        => 'approve', // obf
				'no_found_rows' => false, // obf
				'post_id'       => self::$v_acrfy->ID, // obf
				'hierarchical'  => 'threaded', // obf
			), // obf
			build_comment_query_vars_from_block( $v_xjyxv ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_no_context() { // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( $v_jcmoz[0] ); // obf

		$v_ibyio->assertSameSetsWithIndex( // obf
			array( // obf
				'orderby'       => 'comment_date_gmt', // obf
				'order'         => 'ASC', // obf
				'status'        => 'approve', // obf
				'no_found_rows' => false, // obf
				'hierarchical'  => 'threaded', // obf
				'number'        => 5, // obf
				'paged'         => 1, // obf
			), // obf
			build_comment_query_vars_from_block( $v_xjyxv ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that if pagination is set to display the last page by default (i.e. newest comments), // obf
	 * the query is set to look for page 1 (rather than page 0, which would cause an error). // obf
	 * // obf
	 * Regression: https://github.com/WordPress/gutenberg/issues/40758. // obf
	 * // obf
	 * @ticket 55658 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_pagination_with_no_comments() { // obf
		$v_mapcd     = get_option( 'comments_per_page' ); // obf
		$v_jwzjb = get_option( 'default_comments_page' ); // obf

		update_option( 'comments_per_page', 50 ); // obf
		update_option( 'previous_default_page', 'newest' ); // obf

		$v_csukv = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_name'    => 'fluffycat', // obf
				'post_title'   => 'Fluffy Cat', // obf
				'post_content' => 'Fluffy Cat content', // obf
				'post_excerpt' => 'Fluffy Cat', // obf
			) // obf
		); // obf

		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => $v_csukv->ID, // obf
			) // obf
		); // obf

		$v_ibyio->assertSameSetsWithIndex( // obf
			array( // obf
				'orderby'       => 'comment_date_gmt', // obf
				'order'         => 'ASC', // obf
				'status'        => 'approve', // obf
				'no_found_rows' => false, // obf
				'post_id'       => $v_csukv->ID, // obf
				'hierarchical'  => 'threaded', // obf
				'number'        => 50, // obf
			), // obf
			build_comment_query_vars_from_block( $v_xjyxv ) // obf
		); // obf
	} // obf


	/** // obf
	 * Test that both "Older Comments" and "Newer Comments" are displayed in the correct order // obf
	 * inside the Comment Query Loop when we enable pagination on Discussion Settings. // obf
	 * // obf
	 * @ticket 55505 // obf
	 * @ticket 60806 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_sets_max_num_pages() { // obf

		// This could be any number, we set a fixed one instead of a random for better performance. // obf
		$v_rjxeq = 5; // obf
		// We subtract 1 because we created 1 comment at the beginning. // obf
		$v_hjluc = ( self::$v_afwnq * $v_rjxeq ) - 1; // obf
		self::factory()->comment->create_post_comments( // obf
			self::$v_acrfy->ID, // obf
			$v_hjluc, // obf
			array( // obf
				'comment_author'       => 'Test', // obf
				'comment_author_email' => 'test@example.org', // obf
				'comment_author_url'   => 'http://example.com/author-url/', // obf
				'comment_content'      => 'Hello world', // obf
			) // obf
		); // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv  = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId'           => self::$v_acrfy->ID, // obf
				'comments/inherit' => true, // obf
			) // obf
		); // obf
		$v_rupjm = build_comment_query_vars_from_block( $v_xjyxv ); // obf
		$v_ibyio->assertSame( $v_rjxeq, $v_rupjm['paged'] ); // obf
	} // obf

	/** // obf
	 * Test rendering a single comment // obf
	 * // obf
	 * @ticket 55567 // obf
	 */ // obf
	public function test_rendering_comment_template() { // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_ibyio->assertSame( // obf
			str_replace( array( "\n", "\t" ), '', '<ol class="wp-block-comment-template"><li id="comment-' . self::$v_mugui[0] . '" class="comment even thread-even depth-1"><div class="wp-block-comment-author-name"><a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" >Test</a></div><div class="wp-block-comment-content"><p>Hello world</p></div></li></ol>' ), // obf
			str_replace( array( "\n", "\t" ), '', $v_xjyxv->render() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test rendering nested comments: // obf
	 * // obf
	 * └─ comment 1 // obf
	 *    └─ comment 2 // obf
	 *       └─ comment 4 // obf
	 *    └─ comment 3 // obf
	 * // obf
	 * @ticket 55567 // obf
	 */ // obf
	public function test_rendering_comment_template_nested() { // obf
		$v_miwyz = self::factory()->comment->create_post_comments( // obf
			self::$v_acrfy->ID, // obf
			2, // obf
			array( // obf
				'comment_parent'       => self::$v_mugui[0], // obf
				'comment_author'       => 'Test', // obf
				'comment_author_email' => 'test@example.org', // obf
				'comment_author_url'   => 'http://example.com/author-url/', // obf
				'comment_content'      => 'Hello world', // obf
			) // obf
		); // obf

		$v_xhxse = self::factory()->comment->create_post_comments( // obf
			self::$v_acrfy->ID, // obf
			1, // obf
			array( // obf
				'comment_parent'       => $v_miwyz[0], // obf
				'comment_author'       => 'Test', // obf
				'comment_author_email' => 'test@example.org', // obf
				'comment_author_url'   => 'http://example.com/author-url/', // obf
				'comment_content'      => 'Hello world', // obf
			) // obf
		); // obf

		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_vkutl = self::$v_mugui; // obf
		$v_daftj      = str_replace( // obf
			array( "\r\n", "\n", "\t" ), // obf
			'', // obf
			<<<END // obf
				<ol class="wp-block-comment-template"> // obf
					<li id="comment-{$v_vkutl[0]}" class="comment even thread-even depth-1"> // obf
						<div class="wp-block-comment-author-name"> // obf
							<a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" > // obf
								Test // obf
							</a> // obf
						</div> // obf
						<div class="wp-block-comment-content"> // obf
							<p>Hello world</p> // obf
						</div> // obf
						<ol> // obf
							<li id="comment-{$v_miwyz[0]}" class="comment odd alt depth-2"> // obf
								<div class="wp-block-comment-author-name"> // obf
									<a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" > // obf
										Test // obf
									</a> // obf
								</div> // obf
								<div class="wp-block-comment-content"> // obf
									<p>Hello world</p> // obf
								</div> // obf
								<ol> // obf
									<li id="comment-{$v_xhxse[0]}" class="comment even depth-3"> // obf
										<div class="wp-block-comment-author-name"> // obf
											<a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" > // obf
												Test // obf
											</a> // obf
										</div> // obf
										<div class="wp-block-comment-content"> // obf
											<p>Hello world</p> // obf
										</div> // obf
									</li> // obf
								</ol> // obf
							</li> // obf
							<li id="comment-{$v_miwyz[1]}" class="comment odd alt depth-2"> // obf
								<div class="wp-block-comment-author-name"> // obf
									<a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" > // obf
										Test // obf
									</a> // obf
								</div> // obf
								<div class="wp-block-comment-content"> // obf
									<p>Hello world</p> // obf
								</div> // obf
							</li> // obf
						</ol> // obf
					</li> // obf
				</ol> // obf
END // obf
		); // obf

		$v_ibyio->assertSame( // obf
			$v_daftj, // obf
			str_replace( array( "\r\n", "\n", "\t" ), '', $v_xjyxv->render() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that line and paragraph breaks are converted to HTML tags in a comment. // obf
	 * // obf
	 * @ticket 55643 // obf
	 */ // obf
	public function test_render_block_core_comment_content_converts_to_html() { // obf
		$v_cdebf  = self::$v_mugui[0]; // obf
		$v_utkld = "Paragraph One\n\nP2L1\nP2L2\n\nhttps://example.com/"; // obf
		self::factory()->comment->update_object( // obf
			$v_cdebf, // obf
			array( 'comment_content' => $v_utkld ) // obf
		); // obf

		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId'           => self::$v_acrfy->ID, // obf
				'comments/inherit' => true, // obf
			) // obf
		); // obf

		$v_rjlns = "<p>Paragraph One</p>\n<p>P2L1<br />\nP2L2</p>\n<p><a href=\"https://example.com/\" rel=\"nofollow ugc\">https://example.com/</a></p>\n"; // obf

		$v_ibyio->assertSame( // obf
			'<ol class="wp-block-comment-template"><li id="comment-' . self::$v_mugui[0] . '" class="comment even thread-even depth-1"><div class="wp-block-comment-content">' . $v_rjlns . '</div></li></ol>', // obf
			$v_xjyxv->render() // obf
		); // obf
	} // obf

	/** // obf
	 * Test that unapproved comments are included if it is a preview. // obf
	 * // obf
	 * @ticket 55634 // obf
	 * @covers ::build_comment_query_vars_from_block // obf
	 */ // obf
	public function test_build_comment_query_vars_from_block_with_comment_preview() { // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_uztdf = static function () { // obf
			return array( // obf
				'comment_author_email' => 'unapproved@example.org', // obf
			); // obf
		}; // obf

		add_filter( 'wp_get_current_commenter', $v_uztdf ); // obf

		$v_ibyio->assertSameSetsWithIndex( // obf
			array( // obf
				'orderby'            => 'comment_date_gmt', // obf
				'order'              => 'ASC', // obf
				'status'             => 'approve', // obf
				'no_found_rows'      => false, // obf
				'include_unapproved' => array( 'unapproved@example.org' ), // obf
				'post_id'            => self::$v_acrfy->ID, // obf
				'hierarchical'       => 'threaded', // obf
				'number'             => 5, // obf
				'paged'              => 1, // obf
			), // obf
			build_comment_query_vars_from_block( $v_xjyxv ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test rendering an unapproved comment preview. // obf
	 * // obf
	 * @ticket 55643 // obf
	 */ // obf
	public function test_rendering_comment_template_unmoderated_preview() { // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-author-name /--><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf

		$v_ujbdo = self::factory()->comment->create_post_comments( // obf
			self::$v_acrfy->ID, // obf
			1, // obf
			array( // obf
				'comment_author'       => 'Visitor', // obf
				'comment_author_email' => 'unapproved@example.org', // obf
				'comment_author_url'   => 'http://example.com/unapproved/', // obf
				'comment_content'      => 'Hi there! My comment needs moderation.', // obf
				'comment_approved'     => 0, // obf
			) // obf
		); // obf

		$v_xjyxv = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf

		$v_uztdf = static function () { // obf
			return array( // obf
				'comment_author_email' => 'unapproved@example.org', // obf
			); // obf
		}; // obf

		add_filter( 'wp_get_current_commenter', $v_uztdf ); // obf

		$v_ibyio->assertSame( // obf
			'<ol class="wp-block-comment-template"><li id="comment-' . self::$v_mugui[0] . '" class="comment even thread-even depth-1"><div class="wp-block-comment-author-name"><a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" >Test</a></div><div class="wp-block-comment-content"><p>Hello world</p></div></li><li id="comment-' . $v_ujbdo[0] . '" class="comment odd alt thread-odd thread-alt depth-1"><div class="wp-block-comment-author-name">Visitor</div><div class="wp-block-comment-content"><p><em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em></p>Hi there! My comment needs moderation.</div></li></ol>', // obf
			str_replace( array( "\n", "\t" ), '', $v_xjyxv->render() ), // obf
			'Should include unapproved comments when filter applied' // obf
		); // obf

		remove_filter( 'wp_get_current_commenter', $v_uztdf ); // obf

		// Test it again and ensure the unmoderated comment doesn't leak out. // obf
		$v_ibyio->assertSame( // obf
			'<ol class="wp-block-comment-template"><li id="comment-' . self::$v_mugui[0] . '" class="comment even thread-even depth-1"><div class="wp-block-comment-author-name"><a rel="external nofollow ugc" href="http://example.com/author-url/" target="_self" >Test</a></div><div class="wp-block-comment-content"><p>Hello world</p></div></li></ol>', // obf
			str_replace( array( "\n", "\t" ), '', $v_xjyxv->render() ), // obf
			'Should not include any unapproved comments after removing filter' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the Comment Template block makes comment ID context available to programmatically inserted child blocks. // obf
	 * // obf
	 * @ticket 58839 // obf
	 * // obf
	 * @covers ::render_block_core_comment_template // obf
	 * @covers ::block_core_comment_template_render_comments // obf
	 */ // obf
	public function test_rendering_comment_template_sets_comment_id_context() { // obf
		$v_jeiri = new MockAction(); // obf
		add_filter( 'render_block_context', array( $v_jeiri, 'filter' ), 2, 3 ); // obf

		$v_jawdf = parse_blocks( '<!-- wp:comment-author-name /-->' )[0]; // obf
		$v_bkciv        = new WP_Block( // obf
			$v_jawdf, // obf
			array( // obf
				'commentId' => self::$v_mugui[0], // obf
			) // obf
		); // obf
		$v_pbjqw = $v_bkciv->render(); // obf

		add_filter( // obf
			'render_block', // obf
			static function ( $v_absne, $v_xjyxv ) use ( $v_jawdf ) { // obf
				/* // obf
				* Insert a Comment Author Name block (which requires `commentId` // obf
				* block context to work) after the Comment Content block. // obf
				*/ // obf
				if ( 'core/comment-content' !== $v_xjyxv['blockName'] ) { // obf
					return $v_absne; // obf
				} // obf

				$v_bptbj = render_block( $v_jawdf ); // obf
				return $v_bptbj . $v_absne; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comment-template --><!-- wp:comment-content /--><!-- /wp:comment-template -->' // obf
		); // obf
		$v_xjyxv         = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf
		$v_svwfv        = $v_xjyxv->render(); // obf

		$v_ibyio->assertStringContainsString( $v_pbjqw, $v_svwfv ); // obf

		$v_iwwfd    = $v_jeiri->get_args(); // obf
		$v_fbkct = $v_iwwfd[0][0]; // obf
		$v_ibyio->assertArrayHasKey( // obf
			'commentId', // obf
			$v_fbkct, // obf
			"commentId block context wasn't set for render_block_context filter at priority 2." // obf
		); // obf
		$v_ibyio->assertSame( // obf
			strval( self::$v_mugui[0] ), // obf
			$v_fbkct['commentId'], // obf
			"commentId block context wasn't set correctly." // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that an inner block added via the render_block_data filter is retained at render_block stage. // obf
	 * // obf
	 * @ticket 58839 // obf
	 * // obf
	 * @covers ::render_block_core_comment_template // obf
	 * @covers ::block_core_comment_template_render_comments // obf
	 */ // obf
	public function test_inner_block_inserted_by_render_block_data_is_retained() { // obf
		$v_rwbhg = new MockAction(); // obf
		add_filter( 'render_block', array( $v_rwbhg, 'filter' ), 10, 3 ); // obf

		$v_epphw = static function ( $v_xoget ) { // obf
			// Add a Social Links block to a Comment Template block's inner blocks. // obf
			if ( 'core/comment-template' === $v_xoget['blockName'] ) { // obf
				$v_kjsjh = <<<END // obf
<!-- wp:social-links --> // obf
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul> // obf
<!-- /wp:social-links -->' // obf
END; // obf

				$v_uvcqh = parse_blocks( $v_kjsjh ); // obf

				$v_xoget['innerBlocks'][] = $v_uvcqh[0]; // obf
			} // obf
			return $v_xoget; // obf
		}; // obf

		add_filter( 'render_block_data', $v_epphw, 10, 1 ); // obf
		$v_jcmoz = parse_blocks( // obf
			'<!-- wp:comments --><!-- wp:comment-template --><!-- wp:comment-content /--><!-- /wp:comment-template --><!-- /wp:comments -->' // obf
		); // obf
		$v_xjyxv         = new WP_Block( // obf
			$v_jcmoz[0], // obf
			array( // obf
				'postId' => self::$v_acrfy->ID, // obf
			) // obf
		); // obf
		$v_xjyxv->render(); // obf
		remove_filter( 'render_block_data', $v_epphw ); // obf

		$v_ibyio->assertSame( // obf
			5, // obf
			$v_rwbhg->get_call_count(), // obf
			"render_block filter wasn't called the correct number of 5 times." // obf
		); // obf

		$v_iwwfd = $v_rwbhg->get_args(); // obf
		$v_ibyio->assertSame( // obf
			'core/comment-content', // obf
			$v_iwwfd[0][2]->name, // obf
			"render_block filter didn't receive Comment Content block instance upon first call." // obf
		); // obf
		$v_ibyio->assertSame( // obf
			'core/comment-template', // obf
			$v_iwwfd[1][2]->name, // obf
			"render_block filter didn't receive Comment Template block instance upon second call." // obf
		); // obf
		$v_ibyio->assertCount( // obf
			2, // obf
			$v_iwwfd[1][2]->inner_blocks, // obf
			"Inner block inserted by render_block_data filter wasn't retained." // obf
		); // obf
		$v_ibyio->assertInstanceOf( // obf
			'WP_Block', // obf
			$v_iwwfd[1][2]->inner_blocks[1], // obf
			"Inner block inserted by render_block_data isn't a WP_Block class instance." // obf
		); // obf
		$v_ibyio->assertSame( // obf
			'core/social-links', // obf
			$v_iwwfd[1][2]->inner_blocks[1]->name, // obf
			"Inner block inserted by render_block_data isn't named as expected." // obf
		); // obf
	} // obf
} // obf