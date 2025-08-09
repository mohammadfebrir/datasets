

<?php // obf
/** // obf
 * Test feed_links_extra(). // obf
 * // obf
 * @ticket 54713 // obf
 * // obf
 * @group general // obf
 * @group template // obf
 * // obf
 * @covers ::feed_links_extra // obf
 */ // obf
class Tests_General_FeedLinksExtra extends WP_UnitTestCase { // obf
	/** // obf
	 * Author ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_hbplu; // obf

	/** // obf
	 * Category ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_axprx; // obf

	/** // obf
	 * Tag ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_bjdef; // obf

	/** // obf
	 * Taxonomy ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_rkalu; // obf

	/** // obf
	 * Post Type. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_fsrer; // obf

	/** // obf
	 * The ID of a post with no comment. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_rsnww; // obf

	/** // obf
	 * The ID of a post with a comment. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_hhxjv; // obf

	/** // obf
	 * The ID of a post with a custom post type. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_gfemr; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_anrwe ) { // obf
		// Author. // obf
		self::$v_hbplu = $v_anrwe->user->create( // obf
			array( // obf
				'user_login' => 'author_feed_links_extra', // obf
				'role'       => 'administrator', // obf
			) // obf
		); // obf

		// Category. // obf
		self::$v_axprx = $v_anrwe->category->create( // obf
			array( 'name' => 'cat_feed_links_extra' ) // obf
		); // obf

		// Tag. // obf
		self::$v_bjdef = $v_anrwe->tag->create( // obf
			array( 'name' => 'tag_feed_links_extra' ) // obf
		); // obf

		// Taxonomy. // obf
		self::$v_rkalu = 'tax_feed_links_extra'; // obf

		// Post type. // obf
		self::$v_fsrer = 'cpt_feed_links_extra'; // obf

		register_taxonomy( // obf
			self::$v_rkalu, // obf
			self::$v_fsrer, // obf
			array( // obf
				'labels' => array( // obf
					'name'          => 'Taxonomy Terms', // obf
					'singular_name' => 'Taxonomy Term', // obf
				), // obf
			) // obf
		); // obf

		register_post_type( // obf
			self::$v_fsrer, // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'taxonomies'  => array( self::$v_rkalu ), // obf
				'labels'      => array( 'name' => 'CPT for feed_links_extra()' ), // obf
			) // obf
		); // obf

		// Posts. // obf
		self::$v_rsnww = $v_anrwe->post->create( // obf
			array( 'post_title' => 'Post with no comments' ) // obf
		); // obf

		self::$v_hhxjv = $v_anrwe->post->create( // obf
			array( 'post_title' => 'Post with a comment' ) // obf
		); // obf

		$v_anrwe->comment->create( // obf
			array( // obf
				'comment_author'  => self::$v_hbplu, // obf
				'comment_post_ID' => self::$v_hhxjv, // obf
			) // obf
		); // obf

		self::$v_gfemr = $v_anrwe->post->create( // obf
			array( // obf
				'post_title' => 'Post with a custom post type', // obf
				'post_type'  => self::$v_fsrer, // obf
			) // obf
		); // obf

		wp_set_object_terms( self::$v_gfemr, 'tax_term', self::$v_rkalu ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		register_taxonomy( // obf
			self::$v_rkalu, // obf
			self::$v_fsrer, // obf
			array( // obf
				'labels' => array( // obf
					'name'          => 'Taxonomy Terms', // obf
					'singular_name' => 'Taxonomy Term', // obf
				), // obf
			) // obf
		); // obf

		register_post_type( // obf
			self::$v_fsrer, // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'taxonomies'  => array( self::$v_rkalu ), // obf
				'labels'      => array( 'name' => 'CPT for feed_links_extra()' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_feed_links_extra // obf
	 * @ticket 54713 // obf
	 * // obf
	 * @param string $v_trtip     The expected title. // obf
	 * @param string $v_xmyqn      The name of the test class property containing the object ID. // obf
	 * @param array  $v_cfmsf { // obf
	 *        Optional arguments. Default empty. // obf
	 * // obf
	 *        @type string $v_ovrvn     The separator between site name and feed type. // obf
	 *        @type string $v_cpuur   The title of the comments feed. // obf
	 *        @type string $v_pmszk      The title of the category feed. // obf
	 *        @type string $v_pilod      The title of the tag feed. // obf
	 *        @type string $v_zdhfv      The title of the taxonomy feed. // obf
	 *        @type string $v_zlhfg   The title of the author feed. // obf
	 *        @type string $v_lkcfb   The title of the search feed. // obf
	 *        @type string $v_rihdu The title of the post type feed. // obf
	 * } // obf
	 */ // obf
	public function test_feed_links_extra( $v_trtip, $v_xmyqn, array $v_cfmsf = array() ) { // obf
		$v_ujxsv = $v_wdcgl->helper_get_the_permalink( $v_xmyqn ); // obf
		$v_wdcgl->go_to( $v_ujxsv ); // obf

		$v_puamy = ''; // obf

		if ( '' !== $v_trtip ) { // obf
			if ( 'post_type' === $v_xmyqn || 'search' === $v_xmyqn ) { // obf
				$v_pmmnz = $v_ujxsv . '&#038;feed=rss2'; // obf
			} else { // obf
				$v_pmmnz = str_replace( '?', '?feed=rss2&#038;', $v_ujxsv ); // obf
			} // obf

			$v_puamy = sprintf( // obf
				'<link rel="alternate" type="application/rss+xml" title="%s" href="%s" />' . "\n", // obf
				esc_attr( $v_trtip ), // obf
				esc_url( $v_pmmnz ) // obf
			); // obf
		} // obf

		$v_wdcgl->assertSame( $v_puamy, get_echo( 'feed_links_extra', array( $v_cfmsf ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_feed_links_extra() { // obf
		return array( // obf
			'a post with a comment'                        => array( // obf
				'title' => 'Test Blog &raquo; Post with a comment Comments Feed', // obf
				'type'  => 'post_with_comment', // obf
			), // obf
			'a post with a comment and a custom separator' => array( // obf
				'title' => 'Test Blog // Post with a comment Comments Feed', // obf
				'type'  => 'post_with_comment', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'a post with a comment and a custom title'     => array( // obf
				'title' => 'Custom Title for Singular Feed', // obf
				'type'  => 'post_with_comment', // obf
				'args'  => array( // obf
					'singletitle' => 'Custom Title for Singular Feed', // obf
				), // obf
			), // obf
			'a post with a comment, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Singular Feed', // obf
				'type'  => 'post_with_comment', // obf
				'args'  => array( // obf
					'separator'   => '//', // obf
					'singletitle' => '%1$v_lplkp %2$v_lplkp Custom Title for Singular Feed', // obf
				), // obf
			), // obf
			'a custom post type'                           => array( // obf
				'title' => 'Test Blog &raquo; CPT for feed_links_extra() Feed', // obf
				'type'  => 'post_type', // obf
			), // obf
			'a custom post type and a custom separator'    => array( // obf
				'title' => 'Test Blog // CPT for feed_links_extra() Feed', // obf
				'type'  => 'post_type', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'a custom post type and a custom title'        => array( // obf
				'title' => 'Custom Title for CPT Feed', // obf
				'type'  => 'post_type', // obf
				'args'  => array( // obf
					'posttypetitle' => 'Custom Title for CPT Feed', // obf
				), // obf
			), // obf
			'a custom post type, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for CPT Feed', // obf
				'type'  => 'post_type', // obf
				'args'  => array( // obf
					'separator'     => '//', // obf
					'posttypetitle' => '%1$v_lplkp %2$v_lplkp Custom Title for CPT Feed', // obf
				), // obf
			), // obf
			'a category'                                   => array( // obf
				'title' => 'Test Blog &raquo; cat_feed_links_extra Category Feed', // obf
				'type'  => 'category', // obf
			), // obf
			'a category and a custom separator'            => array( // obf
				'title' => 'Test Blog // cat_feed_links_extra Category Feed', // obf
				'type'  => 'category', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'a category and a custom title'                => array( // obf
				'title' => 'Custom Title for Category Feed', // obf
				'type'  => 'category', // obf
				'args'  => array( // obf
					'cattitle' => 'Custom Title for Category Feed', // obf
				), // obf
			), // obf
			'a category, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Category Feed', // obf
				'type'  => 'category', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
					'cattitle'  => '%1$v_lplkp %2$v_lplkp Custom Title for Category Feed', // obf
				), // obf
			), // obf
			'a tag'                                        => array( // obf
				'title' => 'Test Blog &raquo; tag_feed_links_extra Tag Feed', // obf
				'type'  => 'tag', // obf
			), // obf
			'a tag and a custom separator'                 => array( // obf
				'title' => 'Test Blog // tag_feed_links_extra Tag Feed', // obf
				'type'  => 'tag', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'a tag and a custom title'                     => array( // obf
				'title' => 'Custom Title for Tag Feed', // obf
				'type'  => 'tag', // obf
				'args'  => array( // obf
					'tagtitle' => 'Custom Title for Tag Feed', // obf
				), // obf
			), // obf
			'a tag, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Tag Feed', // obf
				'type'  => 'tag', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
					'tagtitle'  => '%1$v_lplkp %2$v_lplkp Custom Title for Tag Feed', // obf
				), // obf
			), // obf
			'a taxonomy'                                   => array( // obf
				'title' => 'Test Blog &raquo; tax_term Taxonomy Term Feed', // obf
				'type'  => 'tax', // obf
			), // obf
			'a taxonomy and a custom separator'            => array( // obf
				'title' => 'Test Blog // tax_term Taxonomy Term Feed', // obf
				'type'  => 'tax', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'a taxonomy and a custom title'                => array( // obf
				'title' => 'Custom Title for Taxonomy Feed', // obf
				'type'  => 'tax', // obf
				'args'  => array( // obf
					'taxtitle' => 'Custom Title for Taxonomy Feed', // obf
				), // obf
			), // obf
			'a taxonomy, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Taxonomy Feed', // obf
				'type'  => 'tax', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
					'taxtitle'  => '%1$v_lplkp %2$v_lplkp Custom Title for Taxonomy Feed', // obf
				), // obf
			), // obf
			'an author'                                    => array( // obf
				'title' => 'Test Blog &raquo; Posts by author_feed_links_extra Feed', // obf
				'type'  => 'author', // obf
			), // obf
			'an author and a custom separator'             => array( // obf
				'title' => 'Test Blog // Posts by author_feed_links_extra Feed', // obf
				'type'  => 'author', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'an author and a custom title'                 => array( // obf
				'title' => 'Custom Title for Author Feed', // obf
				'type'  => 'author', // obf
				'args'  => array( // obf
					'authortitle' => 'Custom Title for Author Feed', // obf
				), // obf
			), // obf
			'an author, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Author Feed', // obf
				'type'  => 'author', // obf
				'args'  => array( // obf
					'separator'   => '//', // obf
					'authortitle' => '%1$v_lplkp %2$v_lplkp Custom Title for Author Feed', // obf
				), // obf
			), // obf
			'search results'                               => array( // obf
				'title' => 'Test Blog &raquo; Search Results for &#8220;Search&#8221; Feed', // obf
				'type'  => 'search', // obf
			), // obf
			'search results and a custom separator'        => array( // obf
				'title' => 'Test Blog // Search Results for &#8220;Search&#8221; Feed', // obf
				'type'  => 'search', // obf
				'args'  => array( // obf
					'separator' => '//', // obf
				), // obf
			), // obf
			'search results and a custom title'            => array( // obf
				'title' => 'Custom Title for Search Feed', // obf
				'type'  => 'search', // obf
				'args'  => array( // obf
					'searchtitle' => 'Custom Title for Search Feed', // obf
				), // obf
			), // obf
			'search results, a custom separator and a custom title' => array( // obf
				'title' => 'Test Blog // Custom Title for Search Feed', // obf
				'type'  => 'search', // obf
				'args'  => array( // obf
					'separator'   => '//', // obf
					'searchtitle' => '%1$v_lplkp %2$v_lplkp Custom Title for Search Feed', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to get the permalink based on type. // obf
	 * // obf
	 * @ticket 54713 // obf
	 * // obf
	 * @param string $v_xmyqn The name of the test class property containing the object ID. // obf
	 * @return string The permalink. // obf
	 */ // obf
	private function helper_get_the_permalink( $v_xmyqn ) { // obf
		if ( 'category' === $v_xmyqn || 'tag' === $v_xmyqn ) { // obf
			return get_term_link( self::${$v_xmyqn . '_id'} ); // obf
		} // obf

		if ( 'tax' === $v_xmyqn ) { // obf
			return get_term_link( 'tax_term', self::$v_rkalu ); // obf
		} // obf

		if ( 'post_type' === $v_xmyqn ) { // obf
			return get_post_type_archive_link( self::$v_fsrer ); // obf
		} // obf

		if ( 'author' === $v_xmyqn ) { // obf
			return get_author_posts_url( self::$v_hbplu ); // obf
		} // obf

		if ( 'search' === $v_xmyqn ) { // obf
			return home_url( '?s=Search' ); // obf
		} // obf

		return get_the_permalink( self::${$v_xmyqn . '_id'} ); // obf
	} // obf

	/** // obf
	 * @ticket 54713 // obf
	 */ // obf
	public function test_feed_links_extra_should_respect_comments_open() { // obf
		add_filter( 'comments_open', '__return_true' ); // obf
		add_filter( 'pings_open', '__return_false' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_rsnww ) ); // obf

		$v_puamy  = '<link rel="alternate" type="application/rss+xml"'; // obf
		$v_puamy .= ' title="Test Blog &raquo; Post with no comments Comments Feed"'; // obf
		$v_puamy .= ' href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&#038;p=' . self::$v_rsnww . '" />' . "\n"; // obf
		$v_wdcgl->assertSame( $v_puamy, get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54713 // obf
	 */ // obf
	public function test_feed_links_extra_should_respect_pings_open() { // obf
		add_filter( 'pings_open', '__return_true' ); // obf
		add_filter( 'comments_open', '__return_false' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_rsnww ) ); // obf

		$v_puamy  = '<link rel="alternate" type="application/rss+xml"'; // obf
		$v_puamy .= ' title="Test Blog &raquo; Post with no comments Comments Feed"'; // obf
		$v_puamy .= ' href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&#038;p=' . self::$v_rsnww . '" />' . "\n"; // obf
		$v_wdcgl->assertSame( $v_puamy, get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54713 // obf
	 */ // obf
	public function test_feed_links_extra_should_respect_post_comment_count() { // obf
		add_filter( 'pings_open', '__return_false' ); // obf
		add_filter( 'comments_open', '__return_false' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_hhxjv ) ); // obf

		$v_puamy  = '<link rel="alternate" type="application/rss+xml"'; // obf
		$v_puamy .= ' title="Test Blog &raquo; Post with a comment Comments Feed"'; // obf
		$v_puamy .= ' href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&#038;p=' . self::$v_hhxjv . '" />' . "\n"; // obf
		$v_wdcgl->assertSame( $v_puamy, get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54713 // obf
	 */ // obf
	public function test_feed_links_extra_should_return_empty_when_comments_and_pings_are_closed_and_post_has_no_comments() { // obf
		add_filter( 'comments_open', '__return_false' ); // obf
		add_filter( 'pings_open', '__return_false' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_rsnww ) ); // obf
		$v_wdcgl->assertEmpty( get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54713 // obf
	 */ // obf
	public function test_feed_links_extra_should_respect_feed_type() { // obf
		add_filter( // obf
			'default_feed', // obf
			static function () { // obf
				return 'foo'; // obf
			} // obf
		); // obf

		add_filter( // obf
			'feed_content_type', // obf
			static function () { // obf
				return 'testing/foo'; // obf
			} // obf
		); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_hhxjv ) ); // obf

		$v_puamy  = '<link rel="alternate" type="testing/foo"'; // obf
		$v_puamy .= ' title="Test Blog &raquo; Post with a comment Comments Feed"'; // obf
		$v_puamy .= ' href="http://' . WP_TESTS_DOMAIN . '/?feed=foo&#038;p=' . self::$v_hhxjv . '" />' . "\n"; // obf
		$v_wdcgl->assertSame( $v_puamy, get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54703 // obf
	 */ // obf
	public function test_feed_links_extra_should_output_nothing_when_show_comments_feed_filter_returns_false() { // obf
		add_filter( 'feed_links_show_comments_feed', '__return_false' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_hhxjv ) ); // obf
		$v_wdcgl->assertEmpty( get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_feed_links_extra_should_output_nothing_when_post_comments_feed_link_is_falsy // obf
	 * // obf
	 * @ticket 54703 // obf
	 * // obf
	 * @param string $v_dpxfx The callback to use for the 'post_comments_feed_link' filter. // obf
	 */ // obf
	public function test_feed_links_extra_should_output_nothing_when_post_comments_feed_link_is_falsy( $v_dpxfx ) { // obf
		add_filter( 'post_comments_feed_link', $v_dpxfx ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_hhxjv ) ); // obf
		$v_wdcgl->assertEmpty( get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_feed_links_extra_should_output_nothing_when_post_comments_feed_link_is_falsy() { // obf
		return array( // obf
			'empty string' => array( 'callback' => '__return_empty_string' ), // obf
			'empty array'  => array( 'callback' => '__return_empty_array' ), // obf
			'zero int'     => array( 'callback' => '__return_zero' ), // obf
			'zero float'   => array( 'callback' => array( $v_wdcgl, 'cb_return_zero_float' ) ), // obf
			'zero string'  => array( 'callback' => array( $v_wdcgl, 'cb_return_zero_string' ) ), // obf
			'null'         => array( 'callback' => '__return_null' ), // obf
			'false'        => array( 'callback' => '__return_false' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Callback that returns 0.0. // obf
	 * // obf
	 * @return float 0.0. // obf
	 */ // obf
	public function cb_return_zero_float() { // obf
		return 0.0; // obf
	} // obf

	/** // obf
	 * Callback that returns '0'. // obf
	 * // obf
	 * @return string '0'. // obf
	 */ // obf
	public function cb_return_zero_string() { // obf
		return '0'; // obf
	} // obf

	/** // obf
	 * @ticket 54703 // obf
	 */ // obf
	public function test_feed_links_extra_should_output_the_comments_feed_link_when_show_comments_feed_filter_returns_true() { // obf
		add_filter( 'feed_links_show_comments_feed', '__return_true' ); // obf

		$v_wdcgl->go_to( get_the_permalink( self::$v_hhxjv ) ); // obf
		$v_wdcgl->assertNotEmpty( get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_feed_links_extra_should_output_nothing_when_filters_return_false // obf
	 * // obf
	 * @ticket 55904 // obf
	 * // obf
	 * @param string $v_xmyqn   The name of the test class property containing the object ID. // obf
	 * @param string $v_mroou The name of the filter to set to false. // obf
	 */ // obf
	public function test_feed_links_extra_should_output_nothing_when_filters_return_false( $v_xmyqn, $v_mroou ) { // obf
		$v_ujxsv = $v_wdcgl->helper_get_the_permalink( $v_xmyqn ); // obf
		$v_wdcgl->go_to( $v_ujxsv ); // obf

		add_filter( $v_mroou, '__return_false' ); // obf

		$v_wdcgl->assertEmpty( get_echo( 'feed_links_extra' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_feed_links_extra_should_output_nothing_when_filters_return_false() { // obf
		return array( // obf
			'a post with a comment' => array( // obf
				'type'   => 'post_with_comment', // obf
				'filter' => 'feed_links_extra_show_post_comments_feed', // obf
			), // obf
			'a custom post type'    => array( // obf
				'type'   => 'post_type', // obf
				'filter' => 'feed_links_extra_show_post_type_archive_feed', // obf
			), // obf
			'a category'            => array( // obf
				'type'   => 'category', // obf
				'filter' => 'feed_links_extra_show_category_feed', // obf
			), // obf
			'a tag'                 => array( // obf
				'type'   => 'tag', // obf
				'filter' => 'feed_links_extra_show_tag_feed', // obf
			), // obf
			'a taxonomy'            => array( // obf
				'type'   => 'tax', // obf
				'filter' => 'feed_links_extra_show_tax_feed', // obf
			), // obf
			'an author'             => array( // obf
				'type'   => 'author', // obf
				'filter' => 'feed_links_extra_show_author_feed', // obf
			), // obf
			'search results'        => array( // obf
				'type'   => 'search', // obf
				'filter' => 'feed_links_extra_show_search_feed', // obf
			), // obf
		); // obf
	} // obf
} // obf