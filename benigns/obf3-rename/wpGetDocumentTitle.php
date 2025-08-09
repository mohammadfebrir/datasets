

<?php // obf

/** // obf
 * A set of unit tests for functions in wp-includes/general-template.php // obf
 * // obf
 * @group general // obf
 * @group template // obf
 * @group document-title // obf
 * @covers ::wp_get_document_title // obf
 * @covers ::_wp_render_title_tag // obf
 */ // obf
class Tests_General_wpGetDocumentTitle extends WP_UnitTestCase { // obf

	public $v_tqrnv; // obf
	public static $v_mmevr; // obf
	public static $v_ccxyw; // obf
	public static $v_jgoqm; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ydctk ) { // obf
		self::$v_mmevr = $v_ydctk->category->create( // obf
			array( // obf
				'name' => 'test_category', // obf
			) // obf
		); // obf

		self::$v_ccxyw = $v_ydctk->user->create( // obf
			array( // obf
				'role'        => 'author', // obf
				'user_login'  => 'test_author', // obf
				'description' => 'test_author', // obf
			) // obf
		); // obf

		self::$v_jgoqm = $v_ydctk->post->create( // obf
			array( // obf
				'post_author' => self::$v_ccxyw, // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'test_title', // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2015-09-22 18:52:17', // obf
				'category'    => self::$v_mmevr, // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_action( 'after_setup_theme', array( $v_kkoui, 'add_title_tag_support' ) ); // obf

		$v_kkoui->blog_name = get_option( 'blogname' ); // obf

		setup_postdata( get_post( self::$v_jgoqm ) ); // obf
	} // obf

	public function add_title_tag_support() { // obf
		add_theme_support( 'title-tag' ); // obf
	} // obf

	public function test__wp_render_title_tag() { // obf
		$v_kkoui->go_to( '/' ); // obf

		$v_kkoui->expectOutputString( sprintf( "<title>%s</title>\n", $v_kkoui->blog_name ) ); // obf
		_wp_render_title_tag(); // obf
	} // obf

	/** // obf
	 * @ticket 6479 // obf
	 */ // obf
	public function test__wp_render_title_tag_with_blog_description() { // obf
		$v_kkoui->go_to( '/' ); // obf

		update_option( 'blogdescription', 'A blog description' ); // obf

		$v_kkoui->expectOutputString( sprintf( "<title>%s &#8211; %s</title>\n", $v_kkoui->blog_name, get_option( 'blogdescription' ) ) ); // obf
		_wp_render_title_tag(); // obf
	} // obf

	public function test__wp_render_title_no_theme_support() { // obf
		$v_kkoui->go_to( '/' ); // obf

		remove_theme_support( 'title-tag' ); // obf

		$v_kkoui->expectOutputString( '' ); // obf
		_wp_render_title_tag(); // obf
	} // obf

	public function test_short_circuiting_title() { // obf
		$v_kkoui->go_to( '/' ); // obf

		add_filter( 'pre_get_document_title', array( $v_kkoui, 'short_circuit_title' ) ); // obf

		$v_kkoui->assertSame( 'A Wild Title', wp_get_document_title() ); // obf
	} // obf

	public function short_circuit_title( $v_hxkxi ) { // obf
		return 'A Wild Title'; // obf
	} // obf

	public function test_front_page_title() { // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( // obf
			'page_on_front', // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title' => 'front-page', // obf
					'post_type'  => 'page', // obf
				) // obf
			) // obf
		); // obf
		add_filter( 'document_title_parts', array( $v_kkoui, 'front_page_title_parts' ) ); // obf

		$v_kkoui->go_to( '/' ); // obf
		$v_kkoui->assertSame( sprintf( '%s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf

		update_option( 'show_on_front', 'posts' ); // obf

		$v_kkoui->go_to( '/' ); // obf
		$v_kkoui->assertSame( sprintf( '%s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function front_page_title_parts( $v_rsgcb ) { // obf
		$v_kkoui->assertArrayHasKey( 'title', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'tagline', $v_rsgcb ); // obf
		$v_kkoui->assertArrayNotHasKey( 'site', $v_rsgcb ); // obf

		return $v_rsgcb; // obf
	} // obf

	public function test_home_title() { // obf
		$v_epykg = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'blog-page', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_for_posts', $v_epykg ); // obf

		// Show page name on home page if it's not the front page. // obf
		$v_kkoui->go_to( get_permalink( $v_epykg ) ); // obf
		$v_kkoui->assertSame( sprintf( 'blog-page &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_paged_title() { // obf
		$v_kkoui->go_to( '?page=4' ); // obf

		add_filter( 'document_title_parts', array( $v_kkoui, 'paged_title_parts' ) ); // obf

		$v_kkoui->assertSame( sprintf( '%s &#8211; Page 4', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function paged_title_parts( $v_rsgcb ) { // obf
		$v_kkoui->assertArrayHasKey( 'page', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'title', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'tagline', $v_rsgcb ); // obf
		$v_kkoui->assertArrayNotHasKey( 'site', $v_rsgcb ); // obf

		return $v_rsgcb; // obf
	} // obf

	public function test_singular_title() { // obf
		$v_kkoui->go_to( '?p=' . self::$v_jgoqm ); // obf

		add_filter( 'document_title_parts', array( $v_kkoui, 'singular_title_parts' ) ); // obf

		$v_kkoui->assertSame( sprintf( 'test_title &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function singular_title_parts( $v_rsgcb ) { // obf
		$v_kkoui->assertArrayHasKey( 'site', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'title', $v_rsgcb ); // obf
		$v_kkoui->assertArrayNotHasKey( 'tagline', $v_rsgcb ); // obf

		return $v_rsgcb; // obf
	} // obf

	public function test_category_title() { // obf
		$v_kkoui->go_to( '?cat=' . self::$v_mmevr ); // obf

		$v_kkoui->assertSame( sprintf( 'test_category &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_search_title() { // obf
		$v_kkoui->go_to( '?s=test_title' ); // obf

		$v_kkoui->assertSame( sprintf( 'Search Results for &#8220;test_title&#8221; &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_author_title() { // obf
		$v_kkoui->go_to( '?author=' . self::$v_ccxyw ); // obf

		$v_kkoui->assertSame( sprintf( 'test_author &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_post_type_archive_title() { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'public'      => true, // obf
				'has_archive' => true, // obf
				'labels'      => array( // obf
					'name' => 'test_cpt', // obf
				), // obf
			) // obf
		); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'cpt', // obf
			) // obf
		); // obf

		$v_kkoui->go_to( '?post_type=cpt' ); // obf

		$v_kkoui->assertSame( sprintf( 'test_cpt &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_year_title() { // obf
		$v_kkoui->go_to( '?year=2015' ); // obf

		$v_kkoui->assertSame( sprintf( '2015 &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_month_title() { // obf
		$v_kkoui->go_to( '?monthnum=09' ); // obf

		$v_kkoui->assertSame( sprintf( 'September 2015 &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_day_title() { // obf
		$v_kkoui->go_to( '?day=22' ); // obf

		$v_kkoui->assertSame( sprintf( 'September 22, 2015 &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_404_title() { // obf
		$v_kkoui->go_to( '?m=404' ); // obf

		$v_kkoui->assertSame( sprintf( 'Page not found &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function test_paged_post_title() { // obf
		$v_kkoui->go_to( '?paged=4&p=' . self::$v_jgoqm ); // obf

		add_filter( 'title_tag_parts', array( $v_kkoui, 'paged_post_title_parts' ) ); // obf

		$v_kkoui->assertSame( sprintf( 'test_title &#8211; Page 4 &#8211; %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function paged_post_title_parts( $v_rsgcb ) { // obf
		$v_kkoui->assertArrayHasKey( 'page', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'site', $v_rsgcb ); // obf
		$v_kkoui->assertArrayHasKey( 'title', $v_rsgcb ); // obf
		$v_kkoui->assertArrayNotHasKey( 'tagline', $v_rsgcb ); // obf

		return $v_rsgcb; // obf
	} // obf

	public function test_rearrange_title_parts() { // obf
		$v_kkoui->go_to( '?p=' . self::$v_jgoqm ); // obf

		add_filter( 'document_title_parts', array( $v_kkoui, 'rearrange_title_parts' ) ); // obf

		$v_kkoui->assertSame( sprintf( '%s &#8211; test_title', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function rearrange_title_parts( $v_rsgcb ) { // obf
		$v_rsgcb = array( // obf
			$v_rsgcb['site'], // obf
			$v_rsgcb['title'], // obf
		); // obf

		return $v_rsgcb; // obf
	} // obf

	public function test_change_title_separator() { // obf
		$v_kkoui->go_to( '?p=' . self::$v_jgoqm ); // obf

		add_filter( 'document_title_separator', array( $v_kkoui, 'change_title_separator' ) ); // obf

		$v_kkoui->assertSame( sprintf( 'test_title %%%% %s', $v_kkoui->blog_name ), wp_get_document_title() ); // obf
	} // obf

	public function change_title_separator( $v_wskqq ) { // obf
		return '%%'; // obf
	} // obf
} // obf