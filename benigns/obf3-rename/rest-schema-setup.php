

<?php // obf
/** // obf
 * Unit tests covering schema initialization. // obf
 * // obf
 * Also generates the fixture data used by the wp-api.js QUnit tests. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 * @group restapi-jsclient // obf
 */ // obf
class WP_Test_REST_Schema_Initialization extends WP_Test_REST_TestCase { // obf
	const YOUTUBE_VIDEO_ID = 'i_cVJgIz_Cs'; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		/** @var WP_REST_Server $v_ycokd */ // obf
		global $v_ycokd; // obf
		$v_ycokd = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_ycokd ); // obf

		add_filter( 'pre_http_request', array( $v_ygovm, 'mock_embed_request' ), 10, 3 ); // obf
	} // obf

	public function tear_down() { // obf
		/** @var WP_REST_Server $v_ycokd */ // obf
		global $v_ycokd; // obf
		$v_ycokd = null; // obf

		parent::tear_down(); // obf
	} // obf

	public function mock_embed_request( $v_uanbe, $v_mjcab, $v_ikwke ) { // obf
		unset( $v_uanbe, $v_mjcab ); // obf

		// Mock request to YouTube Embed. // obf
		if ( false !== strpos( $v_ikwke, self::YOUTUBE_VIDEO_ID ) ) { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 200, // obf
				), // obf
				'body'     => wp_json_encode( // obf
					array( // obf
						'version'          => '1.0', // obf
						'type'             => 'video', // obf
						'provider_name'    => 'YouTube', // obf
						'provider_url'     => 'https://www.youtube.com', // obf
						'thumbnail_width'  => 480, // obf
						'width'            => 500, // obf
						'thumbnail_height' => 360, // obf
						'html'             => '<iframe width="500" height="375" src="https://www.youtube.com/embed/' . self::YOUTUBE_VIDEO_ID . '?feature=oembed" frameborder="0" allowfullscreen></iframe>', // obf
						'author_name'      => 'Jorge Rubira Santos', // obf
						'thumbnail_url'    => 'https://i.ytimg.com/vi/' . self::YOUTUBE_VIDEO_ID . '/hqdefault.jpg', // obf
						'title'            => 'No te olvides de poner el Where en el Delete From. (Una cancion para programadores)', // obf
						'height'           => 375, // obf
					) // obf
				), // obf
			); // obf
		} else { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 404, // obf
				), // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 54596 // obf
	 */ // obf
	public function test_expected_routes_in_schema() { // obf
		$v_paxuf = rest_get_server()->get_routes(); // obf

		$v_ygovm->assertIsArray( $v_paxuf, '`get_routes` should return an array.' ); // obf
		$v_ygovm->assertNotEmpty( $v_paxuf, 'Routes should not be empty.' ); // obf

		$v_paxuf = array_filter( array_keys( $v_paxuf ), array( $v_ygovm, 'is_builtin_route' ) ); // obf

		$v_inaqv = array( // obf
			'/', // obf
			'/oembed/1.0', // obf
			'/oembed/1.0/embed', // obf
			'/oembed/1.0/proxy', // obf
			'/wp/v2', // obf
			'/wp/v2/posts', // obf
			'/wp/v2/posts/(?P<id>[\\d]+)', // obf
			'/wp/v2/posts/(?P<parent>[\\d]+)/revisions', // obf
			'/wp/v2/posts/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)', // obf
			'/wp/v2/posts/(?P<id>[\\d]+)/autosaves', // obf
			'/wp/v2/posts/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)', // obf
			'/wp/v2/menu-items', // obf
			'/wp/v2/menu-items/(?P<id>[\d]+)', // obf
			'/wp/v2/menu-items/(?P<id>[\d]+)/autosaves', // obf
			'/wp/v2/menu-items/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', // obf
			'/wp/v2/menu-locations', // obf
			'/wp/v2/menu-locations/(?P<location>[\w-]+)', // obf
			'/wp/v2/menus', // obf
			'/wp/v2/menus/(?P<id>[\d]+)', // obf
			'/wp/v2/pages', // obf
			'/wp/v2/pages/(?P<id>[\\d]+)', // obf
			'/wp/v2/pages/(?P<parent>[\\d]+)/revisions', // obf
			'/wp/v2/pages/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)', // obf
			'/wp/v2/pages/(?P<id>[\\d]+)/autosaves', // obf
			'/wp/v2/pages/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)', // obf
			'/wp/v2/pattern-directory/patterns', // obf
			'/wp/v2/media', // obf
			'/wp/v2/media/(?P<id>[\\d]+)', // obf
			'/wp/v2/media/(?P<id>[\\d]+)/post-process', // obf
			'/wp/v2/media/(?P<id>[\\d]+)/edit', // obf
			'/wp/v2/blocks', // obf
			'/wp/v2/blocks/(?P<id>[\d]+)', // obf
			'/wp/v2/blocks/(?P<id>[\d]+)/autosaves', // obf
			'/wp/v2/blocks/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', // obf
			'/wp/v2/blocks/(?P<parent>[\d]+)/revisions', // obf
			'/wp/v2/blocks/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', // obf
			'/wp/v2/types', // obf
			'/wp/v2/types/(?P<type>[\\w-]+)', // obf
			'/wp/v2/statuses', // obf
			'/wp/v2/statuses/(?P<status>[\\w-]+)', // obf
			'/wp/v2/taxonomies', // obf
			'/wp/v2/taxonomies/(?P<taxonomy>[\\w-]+)', // obf
			'/wp/v2/categories', // obf
			'/wp/v2/categories/(?P<id>[\\d]+)', // obf
			'/wp/v2/tags', // obf
			'/wp/v2/tags/(?P<id>[\\d]+)', // obf
			'/wp/v2/users', // obf
			'/wp/v2/users/(?P<id>[\\d]+)', // obf
			'/wp/v2/users/me', // obf
			'/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords', // obf
			'/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/introspect', // obf
			'/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/(?P<uuid>[\\w\\-]+)', // obf
			'/wp/v2/comments', // obf
			'/wp/v2/comments/(?P<id>[\\d]+)', // obf
			'/wp/v2/global-styles/(?P<id>[\/\w-]+)', // obf
			'/wp/v2/global-styles/(?P<parent>[\d]+)/revisions', // obf
			'/wp/v2/global-styles/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', // obf
			'/wp/v2/global-styles/themes/(?P<stylesheet>[\/\s%\w\.\(\)\[\]\@_\-]+)/variations', // obf
			'/wp/v2/global-styles/themes/(?P<stylesheet>[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
			'/wp/v2/search', // obf
			'/wp/v2/block-renderer/(?P<name>[a-z0-9-]+/[a-z0-9-]+)', // obf
			'/wp/v2/block-types', // obf
			'/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)', // obf
			'/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)/(?P<name>[a-zA-Z0-9_-]+)', // obf
			'/wp/v2/settings', // obf
			'/wp/v2/template-parts', // obf
			'/wp/v2/template-parts/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)', // obf
			'/wp/v2/template-parts/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves', // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves/(?P<id>[\d]+)', // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions', // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions/(?P<id>[\d]+)', // obf
			'/wp/v2/template-parts/lookup', // obf
			'/wp/v2/templates', // obf
			'/wp/v2/templates/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)', // obf
			'/wp/v2/templates/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves', // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves/(?P<id>[\d]+)', // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions', // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions/(?P<id>[\d]+)', // obf
			'/wp/v2/templates/lookup', // obf
			'/wp/v2/themes', // obf
			'/wp/v2/themes/(?P<stylesheet>[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
			'/wp/v2/plugins', // obf
			'/wp/v2/plugins/(?P<plugin>[^.\/]+(?:\/[^.\/]+)?)', // obf
			'/wp/v2/block-directory/search', // obf
			'/wp/v2/block-patterns/categories', // obf
			'/wp/v2/block-patterns/patterns', // obf
			'/wp/v2/sidebars', // obf
			'/wp/v2/sidebars/(?P<id>[\w-]+)', // obf
			'/wp/v2/widget-types', // obf
			'/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)', // obf
			'/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/encode', // obf
			'/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/render', // obf
			'/wp/v2/widgets', // obf
			'/wp/v2/widgets/(?P<id>[\w\-]+)', // obf
			'/wp/v2/navigation', // obf
			'/wp/v2/navigation/(?P<id>[\d]+)', // obf
			'/wp/v2/navigation/(?P<id>[\d]+)/autosaves', // obf
			'/wp/v2/navigation/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', // obf
			'/wp/v2/navigation/(?P<parent>[\d]+)/revisions', // obf
			'/wp/v2/navigation/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', // obf
			'/wp-site-health/v1', // obf
			'/wp-site-health/v1/tests/background-updates', // obf
			'/wp-site-health/v1/tests/loopback-requests', // obf
			'/wp-site-health/v1/tests/https-status', // obf
			'/wp-site-health/v1/tests/dotorg-communication', // obf
			'/wp-site-health/v1/tests/authorization-header', // obf
			'/wp-site-health/v1/tests/page-cache', // obf
			'/wp-site-health/v1/directory-sizes', // obf
			'/wp/v2/wp_pattern_category', // obf
			'/wp/v2/wp_pattern_category/(?P<id>[\d]+)', // obf
			'/wp/v2/font-collections', // obf
			'/wp/v2/font-collections/(?P<slug>[\/\w-]+)', // obf
			'/wp/v2/font-families', // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces', // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces/(?P<id>[\d]+)', // obf
			'/wp/v2/font-families/(?P<id>[\d]+)', // obf
		); // obf

		$v_ygovm->assertSameSets( $v_inaqv, $v_paxuf ); // obf
	} // obf

	private function is_builtin_route( $v_bnavf ) { // obf
		return ( // obf
			'/' === $v_bnavf || // obf
			preg_match( '#^/oembed/1\.0(/.+)?$#', $v_bnavf ) || // obf
			preg_match( '#^/wp/v2(/.+)?$#', $v_bnavf ) || // obf
			preg_match( '#^/wp-site-health/v1(/.+)?$#', $v_bnavf ) // obf
		); // obf
	} // obf

	public function test_build_wp_api_client_fixtures() { // obf
		if ( 'example.org' !== WP_TESTS_DOMAIN ) { // obf
			$v_ygovm->markTestSkipped( 'This test can only be run on example.org' ); // obf
		} // obf

		// Set up data for individual endpoint responses.  We need to specify // obf
		// lots of different fields on these objects, otherwise the generated // obf
		// fixture file will be different between runs of PHPUnit tests, which // obf
		// is not desirable. // obf

		$v_yuyxn = self::factory()->user->create( // obf
			array( // obf
				'role'          => 'administrator', // obf
				'display_name'  => 'REST API Client Fixture: User', // obf
				'user_nicename' => 'restapiclientfixtureuser', // obf
				'user_email'    => 'administrator@example.org', // obf
			) // obf
		); // obf
		wp_set_current_user( $v_yuyxn ); // obf

		$v_thwdf = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => 'restapi-client-fixture-post', // obf
				'post_title'   => 'REST API Client Fixture: Post', // obf
				'post_content' => 'REST API Client Fixture: Post', // obf
				'post_excerpt' => 'REST API Client Fixture: Post', // obf
				'post_author'  => 0, // obf
			) // obf
		); // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_thwdf, // obf
				'post_content' => 'Updated post content.', // obf
			) // obf
		); // obf
		$v_pimfx   = array_values( wp_get_post_revisions( $v_thwdf ) ); // obf
		$v_rxdus = $v_pimfx[ count( $v_pimfx ) - 1 ]->ID; // obf

		// Create an autosave. // obf
		wp_create_post_autosave( // obf
			array( // obf
				'post_ID'      => $v_thwdf, // obf
				'post_content' => 'Autosave post content.', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf

		$v_mjlyg = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_name'     => 'restapi-client-fixture-page', // obf
				'post_title'    => 'REST API Client Fixture: Page', // obf
				'post_content'  => 'REST API Client Fixture: Page', // obf
				'post_excerpt'  => 'REST API Client Fixture: Page', // obf
				'post_date'     => '2017-02-14 00:00:00', // obf
				'post_date_gmt' => '2017-02-14 00:00:00', // obf
				'post_author'   => 0, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_mjlyg, // obf
				'post_content' => 'Updated page content.', // obf
			) // obf
		); // obf
		$v_mfskm   = array_values( wp_get_post_revisions( $v_mjlyg ) ); // obf
		$v_axkpg = $v_mfskm[ count( $v_mfskm ) - 1 ]->ID; // obf

		// Create an autosave. // obf
		wp_create_post_autosave( // obf
			array( // obf
				'post_ID'      => $v_mjlyg, // obf
				'post_content' => 'Autosave page content.', // obf
				'post_type'    => 'page', // obf
			) // obf
		); // obf

		$v_mpzai = self::factory()->tag->create( // obf
			array( // obf
				'name'        => 'REST API Client Fixture: Tag', // obf
				'slug'        => 'restapi-client-fixture-tag', // obf
				'description' => 'REST API Client Fixture: Tag', // obf
			) // obf
		); // obf

		$v_qdcnj = self::factory()->attachment->create_object( // obf
			get_temp_dir() . 'canola.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption', // obf
				'post_name'      => 'restapi-client-fixture-attachment', // obf
				'post_title'     => 'REST API Client Fixture: Attachment', // obf
				'post_date'      => '2017-02-14 00:00:00', // obf
				'post_date_gmt'  => '2017-02-14 00:00:00', // obf
				'post_author'    => 0, // obf
			) // obf
		); // obf

		$v_cbqot = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved'     => 1, // obf
				'comment_post_ID'      => $v_thwdf, // obf
				'user_id'              => 0, // obf
				'comment_date'         => '2017-02-14 00:00:00', // obf
				'comment_date_gmt'     => '2017-02-14 00:00:00', // obf
				'comment_author'       => 'Internet of something or other', // obf
				'comment_author_email' => 'lights@example.org', // obf
				'comment_author_url'   => 'http://lights.example.org/', // obf
			) // obf
		); // obf
		$v_ninpi  = array( // obf
			'sanitize_callback' => 'sanitize_my_meta_key', // obf
			'auth_callback'     => '__return_true', // obf
			'type'              => 'string', // obf
			'description'       => 'Test meta key', // obf
			'single'            => true, // obf
			'show_in_rest'      => true, // obf
		); // obf

		$v_rkoqi           = $v_ninpi; // obf
		$v_rkoqi['single'] = false; // obf

		// Set up meta. // obf
		register_meta( 'term', 'test_single', $v_ninpi ); // obf
		register_meta( 'term', 'test_multi', $v_rkoqi ); // obf
		register_term_meta( 'category', 'test_cat_single', $v_ninpi ); // obf
		register_term_meta( 'category', 'test_cat_multi', $v_rkoqi ); // obf
		register_term_meta( 'post_tag', 'test_tag_meta', $v_ninpi ); // obf

		register_meta( 'user', 'meta_key', $v_ninpi ); // obf
		update_user_meta( 1, 'meta_key', 'meta_value' ); // Always use the first user. // obf
		register_meta( 'post', 'meta_key', $v_ninpi ); // obf
		update_post_meta( $v_thwdf, 'meta_key', 'meta_value' ); // obf
		register_meta( 'comment', 'meta_key', $v_ninpi ); // obf
		update_comment_meta( $v_cbqot, 'meta_key', 'meta_value' ); // obf
		register_meta( 'term', 'meta_key', $v_ninpi ); // obf
		update_term_meta( $v_mpzai, 'meta_key', 'meta_value' ); // obf

		// Generate route data for subsequent QUnit tests. // obf
		$v_sqfxw = array( // obf
			array( // obf
				'route' => '/', // obf
				'name'  => 'Schema', // obf
			), // obf
			array( // obf
				'route' => '/oembed/1.0', // obf
				'name'  => 'oembed', // obf
			), // obf
			array( // obf
				'route' => '/oembed/1.0/embed', // obf
				'name'  => 'oembeds', // obf
				'args'  => array( // obf
					'url' => '?p=' . $v_thwdf, // obf
				), // obf
			), // obf
			array( // obf
				'route' => '/oembed/1.0/proxy', // obf
				'name'  => 'oembedProxy', // obf
				'args'  => array( // obf
					'url' => 'https://www.youtube.com/watch?v=i_cVJgIz_Cs', // obf
				), // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts', // obf
				'name'  => 'PostsCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts/' . $v_thwdf, // obf
				'name'  => 'PostModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts/' . $v_thwdf . '/revisions', // obf
				'name'  => 'postRevisions', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts/' . $v_thwdf . '/revisions/' . $v_rxdus, // obf
				'name'  => 'revision', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts/' . $v_thwdf . '/autosaves', // obf
				'name'  => 'postAutosaves', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/posts/' . $v_thwdf . '/autosaves/' . $v_rxdus, // obf
				'name'  => 'autosave', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages', // obf
				'name'  => 'PagesCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages/' . $v_mjlyg, // obf
				'name'  => 'PageModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages/' . $v_mjlyg . '/revisions', // obf
				'name'  => 'pageRevisions', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages/' . $v_mjlyg . '/revisions/' . $v_axkpg, // obf
				'name'  => 'pageRevision', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages/' . $v_mjlyg . '/autosaves', // obf
				'name'  => 'pageAutosaves', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/pages/' . $v_mjlyg . '/autosaves/' . $v_axkpg, // obf
				'name'  => 'pageAutosave', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/media', // obf
				'name'  => 'MediaCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/media/' . $v_qdcnj, // obf
				'name'  => 'MediaModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/types', // obf
				'name'  => 'TypesCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/types/post', // obf
				'name'  => 'TypeModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/statuses', // obf
				'name'  => 'StatusesCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/statuses/publish', // obf
				'name'  => 'StatusModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/taxonomies', // obf
				'name'  => 'TaxonomiesCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/taxonomies/category', // obf
				'name'  => 'TaxonomyModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/categories', // obf
				'name'  => 'CategoriesCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/categories/1', // obf
				'name'  => 'CategoryModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/tags', // obf
				'name'  => 'TagsCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/tags/' . $v_mpzai, // obf
				'name'  => 'TagModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/users', // obf
				'name'  => 'UsersCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/users/' . $v_yuyxn, // obf
				'name'  => 'UserModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/users/me', // obf
				'name'  => 'me', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/comments', // obf
				'name'  => 'CommentsCollection', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/comments/' . $v_cbqot, // obf
				'name'  => 'CommentModel', // obf
			), // obf
			array( // obf
				'route' => '/wp/v2/settings', // obf
				'name'  => 'settings', // obf
			), // obf
		); // obf

		$v_jlslr  = "/**\n"; // obf
		$v_jlslr .= " * DO NOT EDIT\n"; // obf
		$v_jlslr .= " * Auto-generated by test_build_wp_api_client_fixtures\n"; // obf
		$v_jlslr .= " */\n"; // obf
		$v_jlslr .= "var mockedApiResponse = {};\n"; // obf
		$v_jlslr .= "/* jshint -W109 */\n"; // obf

		foreach ( $v_sqfxw as $v_bnavf ) { // obf
			$v_iyjny = new WP_REST_Request( 'GET', $v_bnavf['route'] ); // obf
			if ( isset( $v_bnavf['args'] ) ) { // obf
				$v_iyjny->set_query_params( $v_bnavf['args'] ); // obf
			} // obf
			$v_uanbe = rest_get_server()->dispatch( $v_iyjny ); // obf
			$v_ujawh   = $v_uanbe->get_status(); // obf
			$v_watwg     = $v_uanbe->get_data(); // obf

			$v_ygovm->assertSame( // obf
				200, // obf
				$v_uanbe->get_status(), // obf
				"HTTP $v_ujawh from $v_bnavf[route]: " . json_encode( $v_watwg ) // obf
			); // obf
			$v_ygovm->assertNotEmpty( $v_watwg, $v_bnavf['name'] . ' route should return data.' ); // obf

			$v_oaavf           = $v_ygovm->normalize_fixture( $v_watwg, $v_bnavf['name'] ); // obf
			$v_jlslr .= "\nmockedApiResponse." . $v_bnavf['name'] . ' = ' // obf
				. json_encode( $v_oaavf, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) // obf
				. ";\n"; // obf
		} // obf

		// Only generate API client fixtures in single site and when required JSON_* constants are supported. // obf
		if ( ! is_multisite() ) { // obf
			// Save the route object for QUnit tests. // obf
			$v_trjmu = dirname( DIR_TESTROOT ) . '/qunit/fixtures/wp-api-generated.js'; // obf
			file_put_contents( $v_trjmu, $v_jlslr ); // obf
		} // obf

		// Clean up our test data. // obf
		wp_delete_post( $v_thwdf, true ); // obf
		wp_delete_post( $v_mjlyg, true ); // obf
		wp_delete_term( $v_mpzai, 'tags' ); // obf
		wp_delete_attachment( $v_qdcnj, true ); // obf
		wp_delete_comment( $v_cbqot ); // obf
	} // obf

	/** // obf
	 * This array contains normalized versions of object IDs and other values // obf
	 * that can change depending on how PHPUnit is executed.  For details on // obf
	 * how they were generated, see #41123. // obf
	 */ // obf
	private static $v_brojt = array( // obf
		'Schema.name'                                      => 'Test Blog', // obf
		'Schema.url'                                       => 'http://example.org', // obf
		'Schema.home'                                      => 'http://example.org', // obf
		'Schema.routes./._links.self'                      => 'http://example.org/index.php?rest_route=/', // obf
		'Schema.routes./oembed/1.0._links.self'            => 'http://example.org/index.php?rest_route=/oembed/1.0', // obf
		'Schema.routes./oembed/1.0/embed._links.self'      => 'http://example.org/index.php?rest_route=/oembed/1.0/embed', // obf
		'Schema.routes./oembed/1.0/proxy._links.self'      => 'http://example.org/index.php?rest_route=/oembed/1.0/proxy', // obf
		'Schema.routes./wp/v2._links.self'                 => 'http://example.org/index.php?rest_route=/wp/v2', // obf
		'Schema.routes./wp/v2/posts._links.self'           => 'http://example.org/index.php?rest_route=/wp/v2/posts', // obf
		'Schema.routes./wp/v2/pages._links.self'           => 'http://example.org/index.php?rest_route=/wp/v2/pages', // obf
		'Schema.routes./wp/v2/media._links.self'           => 'http://example.org/index.php?rest_route=/wp/v2/media', // obf
		'Schema.routes./wp/v2/blocks._links.self'          => 'http://example.org/index.php?rest_route=/wp/v2/blocks', // obf
		'Schema.routes./wp/v2/types._links.self'           => 'http://example.org/index.php?rest_route=/wp/v2/types', // obf
		'Schema.routes./wp/v2/statuses._links.self'        => 'http://example.org/index.php?rest_route=/wp/v2/statuses', // obf
		'Schema.routes./wp/v2/taxonomies._links.self'      => 'http://example.org/index.php?rest_route=/wp/v2/taxonomies', // obf
		'Schema.routes./wp/v2/categories._links.self'      => 'http://example.org/index.php?rest_route=/wp/v2/categories', // obf
		'Schema.routes./wp/v2/tags._links.self'            => 'http://example.org/index.php?rest_route=/wp/v2/tags', // obf
		'Schema.routes./wp/v2/users._links.self'           => 'http://example.org/index.php?rest_route=/wp/v2/users', // obf
		'Schema.routes./wp/v2/users/me._links.self'        => 'http://example.org/index.php?rest_route=/wp/v2/users/me', // obf
		'Schema.routes./wp/v2/comments._links.self'        => 'http://example.org/index.php?rest_route=/wp/v2/comments', // obf
		'Schema.routes./wp/v2/search._links.self'          => 'http://example.org/index.php?rest_route=/wp/v2/search', // obf
		'Schema.routes./wp/v2/settings._links.self'        => 'http://example.org/index.php?rest_route=/wp/v2/settings', // obf
		'Schema.routes./wp/v2/themes._links.self'          => 'http://example.org/index.php?rest_route=/wp/v2/themes', // obf
		'oembed.routes./oembed/1.0._links.self'            => 'http://example.org/index.php?rest_route=/oembed/1.0', // obf
		'oembed.routes./oembed/1.0/embed._links.self'      => 'http://example.org/index.php?rest_route=/oembed/1.0/embed', // obf
		'oembed.routes./oembed/1.0/proxy._links.self'      => 'http://example.org/index.php?rest_route=/oembed/1.0/proxy', // obf
		'oembeds.provider_name'                            => 'Test Blog', // obf
		'oembeds.provider_url'                             => 'http://example.org', // obf
		'oembeds.author_name'                              => 'Test Blog', // obf
		'oembeds.author_url'                               => 'http://example.org', // obf
		'oembeds.html'                                     => '<blockquote class="wp-embedded-content">...</blockquote>...', // obf
		'PostsCollection.0.id'                             => 4, // obf
		'PostsCollection.0.class_list.0'                   => 'post-4', // obf
		'PostsCollection.0.guid.rendered'                  => 'http://example.org/?p=4', // obf
		'PostsCollection.0.link'                           => 'http://example.org/?p=4', // obf
		'PostsCollection.0._links.self.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/posts/4', // obf
		'PostsCollection.0._links.collection.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/posts', // obf
		'PostsCollection.0._links.about.0.href'            => 'http://example.org/index.php?rest_route=/wp/v2/types/post', // obf
		'PostsCollection.0._links.replies.0.href'          => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fcomments&post=4', // obf
		'PostsCollection.0._links.version-history.0.href'  => 'http://example.org/index.php?rest_route=/wp/v2/posts/4/revisions', // obf
		'PostsCollection.0._links.predecessor-version.0.id' => 6, // obf
		'PostsCollection.0._links.predecessor-version.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/posts/4/revisions/6', // obf
		'PostsCollection.0._links.wp:attachment.0.href'    => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fmedia&parent=4', // obf
		'PostsCollection.0._links.wp:term.0.href'          => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fcategories&post=4', // obf
		'PostsCollection.0._links.wp:term.1.href'          => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Ftags&post=4', // obf
		'PostModel.id'                                     => 4, // obf
		'PostModel.class_list.0'                           => 'post-4', // obf
		'PostModel.guid.rendered'                          => 'http://example.org/?p=4', // obf
		'PostModel.link'                                   => 'http://example.org/?p=4', // obf
		'postRevisions.0.author'                           => 2, // obf
		'postRevisions.0.id'                               => 6, // obf
		'postRevisions.0.parent'                           => 4, // obf
		'postRevisions.0.slug'                             => '4-autosave-v1', // obf
		'postRevisions.0.guid.rendered'                    => 'http://example.org/?p=6', // obf
		'postRevisions.0._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/posts/4', // obf
		'postRevisions.1.author'                           => 2, // obf
		'postRevisions.1.id'                               => 5, // obf
		'postRevisions.1.parent'                           => 4, // obf
		'postRevisions.1.slug'                             => '4-revision-v1', // obf
		'postRevisions.1.guid.rendered'                    => 'http://example.org/?p=5', // obf
		'postRevisions.1._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/posts/4', // obf
		'revision.author'                                  => 2, // obf
		'revision.id'                                      => 5, // obf
		'revision.parent'                                  => 4, // obf
		'revision.slug'                                    => '4-revision-v1', // obf
		'revision.guid.rendered'                           => 'http://example.org/?p=5', // obf
		'postAutosaves.0.author'                           => 2, // obf
		'postAutosaves.0.id'                               => 6, // obf
		'postAutosaves.0.parent'                           => 4, // obf
		'postAutosaves.0.slug'                             => '4-autosave-v1', // obf
		'postAutosaves.0.guid.rendered'                    => 'http://example.org/?p=6', // obf
		'postAutosaves.0._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/posts/4', // obf
		'autosave.author'                                  => 2, // obf
		'autosave.id'                                      => 6, // obf
		'autosave.parent'                                  => 4, // obf
		'autosave.slug'                                    => '4-autosave-v1', // obf
		'autosave.guid.rendered'                           => 'http://example.org/?p=6', // obf
		'PagesCollection.0.id'                             => 7, // obf
		'PagesCollection.0.class_list.0'                   => 'post-7', // obf
		'PagesCollection.0.guid.rendered'                  => 'http://example.org/?page_id=7', // obf
		'PagesCollection.0.link'                           => 'http://example.org/?page_id=7', // obf
		'PagesCollection.0._links.self.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/pages/7', // obf
		'PagesCollection.0._links.collection.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/pages', // obf
		'PagesCollection.0._links.about.0.href'            => 'http://example.org/index.php?rest_route=/wp/v2/types/page', // obf
		'PagesCollection.0._links.replies.0.href'          => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fcomments&post=7', // obf
		'PagesCollection.0._links.version-history.0.href'  => 'http://example.org/index.php?rest_route=/wp/v2/pages/7/revisions', // obf
		'PagesCollection.0._links.predecessor-version.0.id' => 9, // obf
		'PagesCollection.0._links.predecessor-version.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/pages/7/revisions/9', // obf
		'PagesCollection.0._links.wp:attachment.0.href'    => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fmedia&parent=7', // obf
		'PageModel.id'                                     => 7, // obf
		'PageModel.class_list.0'                           => 'post-7', // obf
		'PageModel.guid.rendered'                          => 'http://example.org/?page_id=7', // obf
		'PageModel.link'                                   => 'http://example.org/?page_id=7', // obf
		'pageRevisions.0.author'                           => 2, // obf
		'pageRevisions.0.id'                               => 9, // obf
		'pageRevisions.0.parent'                           => 7, // obf
		'pageRevisions.0.slug'                             => '7-autosave-v1', // obf
		'pageRevisions.0.guid.rendered'                    => 'http://example.org/?p=9', // obf
		'pageRevisions.0._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/pages/7', // obf
		'pageRevisions.1.author'                           => 2, // obf
		'pageRevisions.1.id'                               => 8, // obf
		'pageRevisions.1.parent'                           => 7, // obf
		'pageRevisions.1.slug'                             => '7-revision-v1', // obf
		'pageRevisions.1.guid.rendered'                    => 'http://example.org/?p=8', // obf
		'pageRevisions.1._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/pages/7', // obf
		'pageRevision.author'                              => 2, // obf
		'pageRevision.id'                                  => 8, // obf
		'pageRevision.parent'                              => 7, // obf
		'pageRevision.slug'                                => '7-revision-v1', // obf
		'pageRevision.guid.rendered'                       => 'http://example.org/?p=8', // obf
		'pageAutosaves.0.author'                           => 2, // obf
		'pageAutosaves.0.id'                               => 9, // obf
		'pageAutosaves.0.parent'                           => 7, // obf
		'pageAutosaves.0.slug'                             => '7-autosave-v1', // obf
		'pageAutosaves.0.guid.rendered'                    => 'http://example.org/?p=9', // obf
		'pageAutosaves.0._links.parent.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/pages/7', // obf
		'pageAutosave.author'                              => 2, // obf
		'pageAutosave.id'                                  => 9, // obf
		'pageAutosave.parent'                              => 7, // obf
		'pageAutosave.slug'                                => '7-autosave-v1', // obf
		'pageAutosave.guid.rendered'                       => 'http://example.org/?p=9', // obf
		'MediaCollection.0.id'                             => 10, // obf
		'MediaCollection.0.class_list.0'                   => 'post-10', // obf
		'MediaCollection.0.guid.rendered'                  => 'http://example.org/?attachment_id=10', // obf
		'MediaCollection.0.link'                           => 'http://example.org/?attachment_id=10', // obf
		'MediaCollection.0.description.rendered'           => '<p class="attachment"><!-- <a...><img.../></a> --></p>', // obf
		'MediaCollection.0.source_url'                     => 'http://example.org/wp-content/uploads//tmp/canola.jpg', // obf
		'MediaCollection.0._links.self.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/media/10', // obf
		'MediaCollection.0._links.collection.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/media', // obf
		'MediaCollection.0._links.about.0.href'            => 'http://example.org/index.php?rest_route=/wp/v2/types/attachment', // obf
		'MediaCollection.0._links.replies.0.href'          => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fcomments&post=10', // obf
		'MediaModel.id'                                    => 10, // obf
		'MediaModel.class_list.0'                          => 'post-10', // obf
		'MediaModel.guid.rendered'                         => 'http://example.org/?attachment_id=10', // obf
		'MediaModel.link'                                  => 'http://example.org/?attachment_id=10', // obf
		'MediaModel.description.rendered'                  => '<p class="attachment"><!-- <a...><img.../></a> --></p>', // obf
		'MediaModel.source_url'                            => 'http://example.org/wp-content/uploads//tmp/canola.jpg', // obf
		'TypesCollection.post._links.collection.0.href'    => 'http://example.org/index.php?rest_route=/wp/v2/types', // obf
		'TypesCollection.post._links.wp:items.0.href'      => 'http://example.org/index.php?rest_route=/wp/v2/posts', // obf
		'TypesCollection.page._links.collection.0.href'    => 'http://example.org/index.php?rest_route=/wp/v2/types', // obf
		'TypesCollection.page._links.wp:items.0.href'      => 'http://example.org/index.php?rest_route=/wp/v2/pages', // obf
		'TypesCollection.attachment._links.collection.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/types', // obf
		'TypesCollection.attachment._links.wp:items.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/media', // obf
		'TypesCollection.wp_block._links.collection.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/types', // obf
		'TypesCollection.wp_block._links.wp:items.0.href'  => 'http://example.org/index.php?rest_route=/wp/v2/blocks', // obf
		'StatusesCollection.publish._links.archives.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/posts', // obf
		'StatusesCollection.future._links.archives.0.href' => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&status=future', // obf
		'StatusesCollection.draft._links.archives.0.href'  => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&status=draft', // obf
		'StatusesCollection.pending._links.archives.0.href' => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&status=pending', // obf
		'StatusesCollection.private._links.archives.0.href' => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&status=private', // obf
		'StatusesCollection.trash._links.archives.0.href'  => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&status=trash', // obf
		'TaxonomiesCollection.category._links.collection.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/taxonomies', // obf
		'TaxonomiesCollection.category._links.wp:items.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/categories', // obf
		'TaxonomiesCollection.post_tag._links.collection.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/taxonomies', // obf
		'TaxonomiesCollection.post_tag._links.wp:items.0.href' => 'http://example.org/index.php?rest_route=/wp/v2/tags', // obf
		'CategoriesCollection.0.link'                      => 'http://example.org/?cat=1', // obf
		'CategoriesCollection.0.meta.test_single'          => '', // obf
		'CategoriesCollection.0.meta.test_multi'           => array(), // obf
		'CategoriesCollection.0.meta.test_cat_single'      => '', // obf
		'CategoriesCollection.0.meta.test_cat_multi'       => array(), // obf
		'CategoriesCollection.0._links.self.0.href'        => 'http://example.org/index.php?rest_route=/wp/v2/categories/1', // obf
		'CategoriesCollection.0._links.collection.0.href'  => 'http://example.org/index.php?rest_route=/wp/v2/categories', // obf
		'CategoriesCollection.0._links.about.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/taxonomies/category', // obf
		'CategoriesCollection.0._links.wp:post_type.0.href' => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&categories=1', // obf
		'CategoryModel.link'                               => 'http://example.org/?cat=1', // obf
		'CategoryModel.meta.test_single'                   => '', // obf
		'CategoryModel.meta.test_multi'                    => array(), // obf
		'CategoryModel.meta.test_cat_single'               => '', // obf
		'CategoryModel.meta.test_cat_multi'                => array(), // obf
		'TagsCollection.0.id'                              => 2, // obf
		'TagsCollection.0.link'                            => 'http://example.org/?tag=restapi-client-fixture-tag', // obf
		'TagsCollection.0.meta.test_single'                => '', // obf
		'TagsCollection.0.meta.test_multi'                 => array(), // obf
		'TagsCollection.0.meta.test_tag_meta'              => '', // obf
		'TagsCollection.0._links.self.0.href'              => 'http://example.org/index.php?rest_route=/wp/v2/tags/2', // obf
		'TagsCollection.0._links.collection.0.href'        => 'http://example.org/index.php?rest_route=/wp/v2/tags', // obf
		'TagsCollection.0._links.about.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/taxonomies/post_tag', // obf
		'TagsCollection.0._links.wp:post_type.0.href'      => 'http://example.org/index.php?rest_route=%2Fwp%2Fv2%2Fposts&tags=2', // obf
		'TagModel.id'                                      => 2, // obf
		'TagModel.link'                                    => 'http://example.org/?tag=restapi-client-fixture-tag', // obf
		'TagModel.meta.test_single'                        => '', // obf
		'TagModel.meta.test_multi'                         => array(), // obf
		'TagModel.meta.test_tag_meta'                      => '', // obf
		'UsersCollection.0.link'                           => 'http://example.org/?author=1', // obf
		'UsersCollection.0.avatar_urls.24'                 => 'https://secure.gravatar.com/avatar/9387ed9432ec25ef93df84b8a0b9697ddef435a945e7f244670c4f79f88363e9?s=24&d=mm&r=g', // obf
		'UsersCollection.0.avatar_urls.48'                 => 'https://secure.gravatar.com/avatar/9387ed9432ec25ef93df84b8a0b9697ddef435a945e7f244670c4f79f88363e9?s=48&d=mm&r=g', // obf
		'UsersCollection.0.avatar_urls.96'                 => 'https://secure.gravatar.com/avatar/9387ed9432ec25ef93df84b8a0b9697ddef435a945e7f244670c4f79f88363e9?s=96&d=mm&r=g', // obf
		'UsersCollection.0._links.self.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/users/1', // obf
		'UsersCollection.0._links.collection.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/users', // obf
		'UsersCollection.1.id'                             => 2, // obf
		'UsersCollection.1.link'                           => 'http://example.org/?author=2', // obf
		'UsersCollection.1._links.self.0.href'             => 'http://example.org/index.php?rest_route=/wp/v2/users/2', // obf
		'UsersCollection.1._links.collection.0.href'       => 'http://example.org/index.php?rest_route=/wp/v2/users', // obf
		'UserModel.id'                                     => 2, // obf
		'UserModel.link'                                   => 'http://example.org/?author=2', // obf
		'me.id'                                            => 2, // obf
		'me.link'                                          => 'http://example.org/?author=2', // obf
		'CommentsCollection.0.id'                          => 2, // obf
		'CommentsCollection.0.post'                        => 4, // obf
		'CommentsCollection.0.link'                        => 'http://example.org/?p=4#comment-2', // obf
		'CommentsCollection.0._links.self.0.href'          => 'http://example.org/index.php?rest_route=/wp/v2/comments/2', // obf
		'CommentsCollection.0._links.collection.0.href'    => 'http://example.org/index.php?rest_route=/wp/v2/comments', // obf
		'CommentsCollection.0._links.up.0.href'            => 'http://example.org/index.php?rest_route=/wp/v2/posts/4', // obf
		'CommentModel.id'                                  => 2, // obf
		'CommentModel.post'                                => 4, // obf
		'CommentModel.link'                                => 'http://example.org/?p=4#comment-2', // obf
		'settings.title'                                   => 'Test Blog', // obf
		'settings.url'                                     => 'http://example.org', // obf
		'settings.email'                                   => 'admin@example.org', // obf
	); // obf

	private function normalize_fixture( $v_watwg, $v_fpqau ) { // obf
		if ( isset( self::$v_brojt[ $v_fpqau ] ) ) { // obf
			return self::$v_brojt[ $v_fpqau ]; // obf
		} // obf

		if ( ! is_array( $v_watwg ) ) { // obf
			return $v_watwg; // obf
		} // obf

		$v_iegqk = array( 'date', 'date_gmt', 'modified', 'modified_gmt' ); // obf

		foreach ( $v_watwg as $v_bogmq => $v_crapy ) { // obf
			if ( is_string( $v_crapy ) && in_array( $v_bogmq, $v_iegqk, true ) ) { // obf
				$v_watwg[ $v_bogmq ] = '2017-02-14T00:00:00'; // obf
				continue; // obf
			} // obf

			$v_watwg[ $v_bogmq ] = $v_ygovm->normalize_fixture( $v_crapy, "$v_fpqau.$v_bogmq" ); // obf
		} // obf

		return $v_watwg; // obf
	} // obf
} // obf