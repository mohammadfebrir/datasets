

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Themes_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi-themes // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Themes_Controller extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int $v_jrnnl // obf
	 */ // obf
	protected static $v_jrnnl; // obf

	/** // obf
	 * Contributor user ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int $v_bwhjs // obf
	 */ // obf
	protected static $v_bwhjs; // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @var int $v_kojyh // obf
	 */ // obf
	protected static $v_kojyh; // obf

	/** // obf
	 * The current theme object. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var WP_Theme $v_amdsm // obf
	 */ // obf
	protected static $v_amdsm; // obf

	/** // obf
	 * The REST API route for themes. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string $v_jthub // obf
	 */ // obf
	protected static $v_jthub = '/wp/v2/themes'; // obf

	/** // obf
	 * Performs a REST API request for the active theme. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_arxca Optional. Request method. Default GET. // obf
	 * @return WP_REST_Response The request's response. // obf
	 */ // obf
	protected function perform_active_theme_request( $v_arxca = 'GET' ) { // obf
		$v_bbkxb = new WP_REST_Request( $v_arxca, self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', 'active' ); // obf

		return rest_get_server()->dispatch( $v_bbkxb ); // obf
	} // obf

	/** // obf
	 * Check that common properties are included in a response. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_yyysp Current REST API response. // obf
	 */ // obf
	protected function check_get_theme_response( $v_yyysp ) { // obf
		if ( $v_yyysp instanceof WP_REST_Response ) { // obf
			$v_mkopq  = $v_yyysp->get_headers(); // obf
			$v_yyysp = $v_yyysp->get_data(); // obf
		} else { // obf
			$v_mkopq = array(); // obf
		} // obf

		$v_qorsb->assertArrayHasKey( 'X-WP-Total', $v_mkopq ); // obf
		$v_qorsb->assertSame( 1, $v_mkopq['X-WP-Total'] ); // obf
		$v_qorsb->assertArrayHasKey( 'X-WP-TotalPages', $v_mkopq ); // obf
		$v_qorsb->assertSame( 1, $v_mkopq['X-WP-TotalPages'] ); // obf
	} // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_qytnk WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qytnk ) { // obf
		self::$v_kojyh       = $v_qytnk->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_jrnnl  = $v_qytnk->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_bwhjs = $v_qytnk->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
		self::$v_amdsm  = wp_get_theme(); // obf

		wp_set_current_user( self::$v_bwhjs ); // obf
	} // obf

	/** // obf
	 * Clean up test fixtures. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_jrnnl ); // obf
		self::delete_user( self::$v_bwhjs ); // obf
		self::delete_user( self::$v_kojyh ); // obf

		remove_theme_support( 'editor-gradient-presets' ); // obf
		remove_theme_support( 'editor-color-palette' ); // obf
	} // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_bwhjs ); // obf
		switch_theme( 'rest-api' ); // obf
	} // obf

	/** // obf
	 * Theme routes should be registered correctly. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_hctfq = rest_get_server()->get_routes(); // obf
		$v_qorsb->assertArrayHasKey( self::$v_jthub, $v_hctfq ); // obf
		$v_qorsb->assertArrayHasKey( // obf
			sprintf( '%s/(?P<stylesheet>%s)', self::$v_jthub, WP_REST_Themes_Controller::PATTERN ), // obf
			$v_hctfq // obf
		); // obf
	} // obf

	/** // obf
	 * Test retrieving a collection of themes. // obf
	 * // obf
	 * @ticket 45016 // obf
	 * @ticket 61021 // obf
	 * @ticket 62574. // obf
	 */ // obf
	public function test_get_items() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_yfnhl = $v_yyysp->get_data(); // obf

		$v_qorsb->check_get_theme_response( $v_yyysp ); // obf
		$v_qxfwg = array( // obf
			'_links', // obf
			'author', // obf
			'author_uri', // obf
			'default_template_part_areas', // obf
			'default_template_types', // obf
			'description', // obf
			'is_block_theme', // obf
			'name', // obf
			'requires_php', // obf
			'requires_wp', // obf
			'screenshot', // obf
			'status', // obf
			'stylesheet', // obf
			'stylesheet_uri', // obf
			'tags', // obf
			'template', // obf
			'template_uri', // obf
			'textdomain', // obf
			'theme_supports', // obf
			'theme_uri', // obf
			'version', // obf
		); // obf
		$v_qorsb->assertIsArray( $v_yfnhl ); // obf
		$v_qorsb->assertNotEmpty( $v_yfnhl ); // obf
		$v_qorsb->assertSameSets( $v_qxfwg, array_keys( $v_yfnhl[0] ) ); // obf
	} // obf

	/** // obf
	 * Test retrieving a collection of inactive themes. // obf
	 * // obf
	 * @ticket 50152 // obf
	 * @ticket 61021 // obf
	 */ // obf
	public function test_get_items_inactive() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', 'inactive' ); // obf

		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_yfnhl = $v_yyysp->get_data(); // obf

		$v_qxfwg = array( // obf
			'_links', // obf
			'author', // obf
			'author_uri', // obf
			'description', // obf
			'is_block_theme', // obf
			'name', // obf
			'requires_php', // obf
			'requires_wp', // obf
			'screenshot', // obf
			'status', // obf
			'stylesheet', // obf
			'stylesheet_uri', // obf
			'tags', // obf
			'template', // obf
			'template_uri', // obf
			'textdomain', // obf
			'theme_uri', // obf
			'version', // obf
		); // obf
		$v_qorsb->assertIsArray( $v_yfnhl ); // obf
		$v_qorsb->assertNotEmpty( $v_yfnhl ); // obf
		$v_qorsb->assertSameSets( $v_qxfwg, array_keys( $v_yfnhl[0] ) ); // obf

		$v_qorsb->assertContains( 'twentytwenty', wp_list_pluck( $v_yfnhl, 'stylesheet' ) ); // obf
		$v_qorsb->assertNotContains( get_stylesheet(), wp_list_pluck( $v_yfnhl, 'stylesheet' ) ); // obf
	} // obf

	/** // obf
	 * Test retrieving a collection of inactive themes. // obf
	 * // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_items_active_and_inactive() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', array( 'active', 'inactive' ) ); // obf

		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_yfnhl = $v_yyysp->get_data(); // obf

		$v_qorsb->assertContains( 'twentytwenty', wp_list_pluck( $v_yfnhl, 'stylesheet' ) ); // obf
		$v_qorsb->assertContains( get_stylesheet(), wp_list_pluck( $v_yfnhl, 'stylesheet' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 46723 // obf
	 * @ticket 50152 // obf
	 * @dataProvider data_get_items_by_status // obf
	 */ // obf
	public function test_get_items_logged_out( $v_odplt, $v_uvard ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', $v_odplt ); // obf

		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_qorsb->assertErrorResponse( $v_uvard, $v_yyysp, 401 ); // obf
	} // obf

	/** // obf
	 * An error should be returned when the user does not have the edit_posts capability. // obf
	 * // obf
	 * @ticket 45016 // obf
	 * @ticket 50152 // obf
	 * @dataProvider data_get_items_by_status // obf
	 */ // obf
	public function test_get_items_no_permission( $v_odplt, $v_uvard ) { // obf
		wp_set_current_user( self::$v_jrnnl ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', $v_odplt ); // obf

		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_qorsb->assertErrorResponse( $v_uvard, $v_yyysp, 403 ); // obf
	} // obf

	public function data_get_items_by_status() { // obf
		return array( // obf
			array( 'active', 'rest_cannot_view_active_theme' ), // obf
			array( 'active, inactive', 'rest_cannot_view_themes' ), // obf
			array( 'inactive', 'rest_cannot_view_themes' ), // obf
			array( '', 'rest_cannot_view_themes' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 * @dataProvider data_get_items_by_status_for_contributor // obf
	 */ // obf
	public function test_get_items_contributor( $v_odplt, $v_uvard ) { // obf
		wp_set_current_user( self::$v_bwhjs ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', $v_odplt ); // obf

		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf

		if ( $v_uvard ) { // obf
			$v_qorsb->assertErrorResponse( $v_uvard, $v_yyysp, 403 ); // obf
		} else { // obf
			$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		} // obf
	} // obf

	public function data_get_items_by_status_for_contributor() { // obf
		return array( // obf
			array( 'active', '' ), // obf
			array( 'active, inactive', 'rest_cannot_view_themes' ), // obf
			array( 'inactive', 'rest_cannot_view_themes' ), // obf
			array( '', 'rest_cannot_view_themes' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 46723 // obf
	 */ // obf
	public function test_get_item_single_post_type_cap() { // obf
		$v_jqbui = self::factory()->user->create_and_get(); // obf
		$v_jqbui->add_cap( 'edit_pages' ); // obf
		wp_set_current_user( $v_jqbui->ID ); // obf

		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
	} // obf

	/** // obf
	 * Test an item is prepared for the response. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_qorsb->check_get_theme_response( $v_yyysp ); // obf
	} // obf

	/** // obf
	 * Verify the theme schema. // obf
	 * // obf
	 * @ticket 45016 // obf
	 * @ticket 61021 // obf
	 * @ticket 62574 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_yyysp   = self::perform_active_theme_request( 'OPTIONS' ); // obf
		$v_yfnhl       = $v_yyysp->get_data(); // obf
		$v_zzpvy = $v_yfnhl['schema']['properties']; // obf
		$v_qorsb->assertCount( 20, $v_zzpvy ); // obf

		$v_qorsb->assertArrayHasKey( 'author', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['author']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['author']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'author_uri', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['author_uri']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['author_uri']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'description', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['description']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['description']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'default_template_part_areas', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'default_template_types', $v_zzpvy ); // obf

		$v_qorsb->assertArrayHasKey( 'is_block_theme', $v_zzpvy ); // obf

		$v_qorsb->assertArrayHasKey( 'name', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['name']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['name']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'requires_php', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'requires_wp', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'screenshot', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'status', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'stylesheet', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'stylesheet_uri', $v_zzpvy ); // obf

		$v_qorsb->assertArrayHasKey( 'tags', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['tags']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'items', $v_zzpvy['tags']['properties']['raw'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['tags']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'template', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'template_uri', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'textdomain', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_zzpvy ); // obf

		$v_qorsb->assertArrayHasKey( 'theme_uri', $v_zzpvy ); // obf
		$v_qorsb->assertArrayHasKey( 'raw', $v_zzpvy['theme_uri']['properties'] ); // obf
		$v_qorsb->assertArrayHasKey( 'rendered', $v_zzpvy['theme_uri']['properties'] ); // obf

		$v_qorsb->assertArrayHasKey( 'version', $v_zzpvy ); // obf

		$v_zrhia = $v_zzpvy['theme_supports']['properties']; // obf
		$v_qorsb->assertArrayHasKey( 'align-wide', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'automatic-feed-links', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'block-templates', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'block-template-parts', $v_zrhia, "Theme supports should have 'block-template-parts' key" ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-header', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-background', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-logo', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'customize-selective-refresh-widgets', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'title-tag', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'dark-editor-style', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-custom-font-sizes', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-custom-gradients', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-layout-styles', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-color-palette', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-font-sizes', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-gradient-presets', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-spacing-sizes', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-styles', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'formats', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'html5', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'post-thumbnails', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'responsive-embeds', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'title-tag', $v_zrhia ); // obf
		$v_qorsb->assertArrayHasKey( 'wp-block-styles', $v_zrhia ); // obf
		$v_qorsb->assertCount( 24, $v_zrhia, 'There should be 24 theme supports' ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_author() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'author', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'Michael Heilemann', $v_drktf[0]['author']['raw'] ); // obf
		$v_qorsb->assertSame( // obf
			'<a href="http://binarybonsai.com/?search=1&#038;term=2">Michael Heilemann</a>', // obf
			$v_drktf[0]['author']['rendered'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_author_uri() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'author_uri', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'http://binarybonsai.com/?search=1&term=2', $v_drktf[0]['author_uri']['raw'] ); // obf
		$v_qorsb->assertSame( 'http://binarybonsai.com/?search=1&#038;term=2', $v_drktf[0]['author_uri']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_description() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'description', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( // obf
			'The 9\' foot tall theme.', // obf
			$v_drktf[0]['description']['raw'] // obf
		); // obf
		$v_qorsb->assertSame( // obf
			'The 9&#8242; foot tall theme.', // obf
			$v_drktf[0]['description']['rendered'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62574 // obf
	 */ // obf
	public function test_theme_default_template_part_areas() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'default_template_part_areas', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( get_allowed_block_template_part_areas(), $v_drktf[0]['default_template_part_areas'] ); // obf
	} // obf

	/** // obf
	 * @ticket 62574 // obf
	 */ // obf
	public function test_theme_default_template_types() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_hjvhj = array(); // obf
		foreach ( get_default_block_template_types() as $v_jfqfs => $v_qgflc ) { // obf
			$v_qgflc['slug'] = (string) $v_jfqfs; // obf
			$v_hjvhj[]            = $v_qgflc; // obf
		} // obf

		$v_qorsb->assertArrayHasKey( 'default_template_types', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( $v_hjvhj, $v_drktf[0]['default_template_types'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_requires_php() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'requires_php', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( '5.6', $v_drktf[0]['requires_php'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_requires_wp() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'requires_wp', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( '5.3', $v_drktf[0]['requires_wp'] ); // obf
	} // obf

	/** // obf
	 * @ticket 58123 // obf
	 * @covers WP_REST_Themes_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_theme_is_block_theme() { // obf
		// Test classic theme, activated in test setup. // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf

		$v_qorsb->assertArrayHasKey( 'is_block_theme', $v_drktf[0] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['is_block_theme'] ); // obf

		// Test block theme. // obf
		switch_theme( 'block-theme' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf

		$v_qorsb->assertArrayHasKey( 'is_block_theme', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['is_block_theme'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_name() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'name', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'REST Theme', $v_drktf[0]['name']['raw'] ); // obf
		$v_qorsb->assertSame( 'REST Theme', $v_drktf[0]['name']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_screenshot() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'screenshot', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( '', $v_drktf[0]['screenshot'] ); // No screenshot for default theme // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_stylesheet() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'stylesheet', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'rest-api', $v_drktf[0]['stylesheet'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61021 // obf
	 */ // obf
	public function test_theme_stylesheet_uri() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', array( 'active', 'inactive' ) ); // obf

		$v_yyysp      = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_drktf        = $v_yyysp->get_data(); // obf
		$v_amdsm = wp_get_theme(); // obf

		foreach ( $v_drktf as $v_hmgny ) { // obf
			$v_qorsb->assertArrayHasKey( 'stylesheet_uri', $v_hmgny ); // obf
			if ( 'active' === $v_hmgny['status'] ) { // obf
				$v_qorsb->assertSame( // obf
					get_stylesheet_directory_uri(), // obf
					$v_hmgny['stylesheet_uri'], // obf
					'stylesheet_uri for an active theme should be the same as the global get_stylesheet_directory_uri()' // obf
				); // obf
			} else { // obf
				$v_govyz = wp_get_theme( $v_hmgny['stylesheet'] ); // obf
				$v_qorsb->assertSame( // obf
					$v_govyz->get_stylesheet_directory_uri(), // obf
					$v_hmgny['stylesheet_uri'], // obf
					"stylesheet_uri for an inactive theme should be the same as the theme's get_stylesheet_directory_uri() method" // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_tags() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'tags', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( array( 'Holiday', 'custom-menu' ), $v_drktf[0]['tags']['raw'] ); // obf
		$v_qorsb->assertSame( 'Holiday, custom-menu', $v_drktf[0]['tags']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_template() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'template', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'default', $v_drktf[0]['template'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61021 // obf
	 */ // obf
	public function test_theme_template_uri() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb = new WP_REST_Request( 'GET', self::$v_jthub ); // obf
		$v_bbkxb->set_param( 'status', array( 'active', 'inactive' ) ); // obf

		$v_yyysp      = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_drktf        = $v_yyysp->get_data(); // obf
		$v_amdsm = wp_get_theme(); // obf

		foreach ( $v_drktf as $v_hmgny ) { // obf
			$v_qorsb->assertArrayHasKey( 'template_uri', $v_hmgny ); // obf
			if ( 'active' === $v_hmgny['status'] ) { // obf
				$v_qorsb->assertSame( // obf
					get_template_directory_uri(), // obf
					$v_hmgny['template_uri'], // obf
					'template_uri for an active theme should be the same as the global get_template_directory_uri()' // obf
				); // obf
			} else { // obf
				$v_govyz = wp_get_theme( $v_hmgny['stylesheet'] ); // obf
				$v_qorsb->assertSame( // obf
					$v_govyz->get_template_directory_uri(), // obf
					$v_hmgny['template_uri'], // obf
					"template_uri for an inactive theme should be the same as the theme's get_template_directory_uri() method" // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_textdomain() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'textdomain', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'rest-api', $v_drktf[0]['textdomain'] ); // obf
	} // obf

	public function test_theme_theme_uri() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_uri', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( 'http://wordpress.org/?search=1&term=2', $v_drktf[0]['theme_uri']['raw'] ); // obf
		$v_qorsb->assertSame( 'http://wordpress.org/?search=1&#038;term=2', $v_drktf[0]['theme_uri']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49906 // obf
	 */ // obf
	public function test_theme_version() { // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'version', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( '1.6', $v_drktf[0]['version'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_disable_custom_colors_false() { // obf
		remove_theme_support( 'disable-custom-colors' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-custom-colors', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['disable-custom-colors'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_disable_custom_colors_true() { // obf
		remove_theme_support( 'disable-custom-colors' ); // obf
		add_theme_support( 'disable-custom-colors' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['disable-custom-colors'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_disable_custom_font_sizes_false() { // obf
		remove_theme_support( 'disable-custom-font-sizes' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-custom-font-sizes', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['disable-custom-font-sizes'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_disable_custom_font_sizes_true() { // obf
		remove_theme_support( 'disable-custom-font-sizes' ); // obf
		add_theme_support( 'disable-custom-font-sizes' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['disable-custom-font-sizes'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_editor_font_sizes_false() { // obf
		remove_theme_support( 'editor-font-sizes' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-font-sizes', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['editor-font-sizes'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_editor_font_sizes_array() { // obf
		remove_theme_support( 'editor-font-sizes' ); // obf
		$v_jjczv = array( // obf
			'name' => 'Tiny', // obf
			'size' => 8, // obf
			'slug' => 'tiny', // obf
		); // obf
		add_theme_support( 'editor-font-sizes', array( $v_jjczv ) ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-font-sizes', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertEqualSetsWithIndex( array( $v_jjczv ), $v_drktf[0]['theme_supports']['editor-font-sizes'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_editor_color_palette_false() { // obf
		remove_theme_support( 'editor-color-palette' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-color-palette', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['editor-color-palette'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_editor_color_palette_array() { // obf
		remove_theme_support( 'editor-color-palette' ); // obf
		$v_ujbgb = array( // obf
			'name'  => 'WordPress Blue', // obf
			'slug'  => 'wordpress-blue', // obf
			'color' => '#0073AA', // obf
		); // obf
		add_theme_support( 'editor-color-palette', array( $v_ujbgb ) ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( array( $v_ujbgb ), $v_drktf[0]['theme_supports']['editor-color-palette'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_enable_automatic_feed_links() { // obf
		remove_theme_support( 'automatic-feed-links' ); // obf
		add_theme_support( 'automatic-feed-links' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['automatic-feed-links'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_does_not_enable_automatic_feed_links() { // obf
		remove_theme_support( 'automatic-feed-links' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'automatic-feed-links', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['automatic-feed-links'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_does_not_support_custom_logo() { // obf
		remove_theme_support( 'custom-logo' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-logo', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['custom-logo'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_custom_logo() { // obf
		remove_theme_support( 'custom-logo' ); // obf
		$v_ayccl = array( // obf
			'width'                => 400, // obf
			'height'               => 100, // obf
			'flex-width'           => true, // obf
			'flex-height'          => true, // obf
			'header-text'          => array( 'site-title', 'site-description' ), // obf
			'unlink-homepage-logo' => false, // obf
		); // obf
		add_theme_support( 'custom-logo', $v_ayccl ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( $v_ayccl, $v_drktf[0]['theme_supports']['custom-logo'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_does_not_support_custom_header() { // obf
		remove_theme_support( 'custom-header' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-header', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['custom-header'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_custom_header() { // obf
		remove_theme_support( 'custom-header' ); // obf
		$v_gjkwk = array( // obf
			'default-image'          => '', // obf
			'random-default'         => false, // obf
			'width'                  => 0, // obf
			'height'                 => 0, // obf
			'flex-height'            => false, // obf
			'flex-width'             => false, // obf
			'default-text-color'     => '', // obf
			'header-text'            => true, // obf
			'uploads'                => true, // obf
			'wp-head-callback'       => '', // obf
			'admin-head-callback'    => '', // obf
			'admin-preview-callback' => '', // obf
			'video'                  => false, // obf
			'video-active-callback'  => 'is_front_page', // obf
		); // obf
		$v_jmdsb         = array( // obf
			'wp-head-callback', // obf
			'admin-head-callback', // obf
			'admin-preview-callback', // obf
			'video-active-callback', // obf
		); // obf
		add_theme_support( 'custom-header', $v_gjkwk ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf

		$v_hjvhj = array_diff_key( $v_gjkwk, array_flip( $v_jmdsb ) ); // obf
		$v_qorsb->assertSame( $v_hjvhj, $v_drktf[0]['theme_supports']['custom-header'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_does_not_support_custom_background() { // obf
		remove_theme_support( 'custom-background' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'custom-background', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['custom-background'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_custom_background() { // obf
		remove_theme_support( 'custom-background' ); // obf
		$v_hgrsb = array( // obf
			'default-image'          => '', // obf
			'default-preset'         => 'default', // obf
			'default-position-x'     => 'left', // obf
			'default-position-y'     => 'top', // obf
			'default-size'           => 'auto', // obf
			'default-repeat'         => 'repeat', // obf
			'default-attachment'     => 'scroll', // obf
			'default-color'          => '', // obf
			'wp-head-callback'       => '_custom_background_cb', // obf
			'admin-head-callback'    => '', // obf
			'admin-preview-callback' => '', // obf
		); // obf
		$v_jmdsb   = array( // obf
			'wp-head-callback', // obf
			'admin-head-callback', // obf
			'admin-preview-callback', // obf
		); // obf
		add_theme_support( 'custom-background', $v_hgrsb ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf

		$v_hjvhj = array_diff_key( $v_hgrsb, array_flip( $v_jmdsb ) ); // obf
		$v_qorsb->assertSame( $v_hjvhj, $v_drktf[0]['theme_supports']['custom-background'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_does_not_support_html5() { // obf
		remove_theme_support( 'html5' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'html5', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['html5'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_html5() { // obf
		remove_theme_support( 'html5' ); // obf
		$v_xekmg = array( // obf
			'search-form', // obf
			'comment-form', // obf
			'comment-list', // obf
			'gallery', // obf
			'caption', // obf
			'script', // obf
			'style', // obf
		); // obf
		add_theme_support( 'html5', $v_xekmg ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( $v_xekmg, $v_drktf[0]['theme_supports']['html5'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_cannot_manage_title_tag() { // obf
		remove_theme_support( 'title-tag' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'title-tag', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['title-tag'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_can_manage_title_tag() { // obf
		global $v_uylgs; // obf
		$v_uylgs['title-tag'] = true; // obf
		$v_yyysp                        = self::perform_active_theme_request(); // obf
		$v_drktf                          = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['title-tag'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_cannot_manage_selective_refresh_for_widgets() { // obf
		remove_theme_support( 'customize-selective-refresh-widgets' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'customize-selective-refresh-widgets', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['customize-selective-refresh-widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_can_manage_selective_refresh_for_widgets() { // obf
		remove_theme_support( 'customize-selective-refresh-widgets' ); // obf
		add_theme_support( 'customize-selective-refresh-widgets' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['customize-selective-refresh-widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_no_wp_block_styles() { // obf
		remove_theme_support( 'wp-block-styles' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'wp-block-styles', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['wp-block-styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_wp_block_styles_opt_in() { // obf
		remove_theme_support( 'wp-block-styles' ); // obf
		add_theme_support( 'wp-block-styles' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['wp-block-styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_no_align_wide() { // obf
		remove_theme_support( 'align-wide' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'align-wide', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['align-wide'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_align_wide_opt_in() { // obf
		remove_theme_support( 'align-wide' ); // obf
		add_theme_support( 'align-wide' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['align-wide'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_no_editor_styles() { // obf
		remove_theme_support( 'editor-styles' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'editor-styles', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['editor-styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_editor_styles_opt_in() { // obf
		remove_theme_support( 'editor-styles' ); // obf
		add_theme_support( 'editor-styles' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['editor-styles'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_no_dark_editor_style() { // obf
		remove_theme_support( 'dark-editor-style' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'dark-editor-style', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['dark-editor-style'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_dark_editor_style_opt_in() { // obf
		remove_theme_support( 'dark-editor-style' ); // obf
		add_theme_support( 'dark-editor-style' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['dark-editor-style'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_no_disable_custom_gradients() { // obf
		remove_theme_support( 'disable-custom-gradients' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'disable-custom-gradients', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['disable-custom-gradients'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_disable_custom_gradients() { // obf
		remove_theme_support( 'disable-custom-gradients' ); // obf
		add_theme_support( 'disable-custom-gradients' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['disable-custom-gradients'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49037 // obf
	 */ // obf
	public function test_theme_supports_editor_gradient_presets_array() { // obf
		remove_theme_support( 'editor-gradient-presets' ); // obf
		$v_islor = array( // obf
			'name'     => __( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ), // obf
			'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
			'slug'     => 'vivid-cyan-blue-to-vivid-purple', // obf
		); // obf
		add_theme_support( 'editor-gradient-presets', array( $v_islor ) ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( array( $v_islor ), $v_drktf[0]['theme_supports']['editor-gradient-presets'] ); // obf
	} // obf

	/** // obf
	 * Should include relevant data in the 'theme_supports' key. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_formats() { // obf
		remove_theme_support( 'post-formats' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'formats', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertSame( array( 'standard' ), $v_drktf[0]['theme_supports']['formats'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme only supports some post formats. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_formats_non_default() { // obf
		add_theme_support( 'post-formats', array( 'aside', 'video' ) ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'formats', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertSame( array( 'standard', 'aside', 'video' ), $v_drktf[0]['theme_supports']['formats'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme does not support responsive embeds. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_responsive_embeds_false() { // obf
		remove_theme_support( 'responsive-embeds' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf

		$v_drktf = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'responsive-embeds', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['responsive-embeds'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme supports responsive embeds. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_responsive_embeds_true() { // obf
		remove_theme_support( 'responsive-embeds' ); // obf
		add_theme_support( 'responsive-embeds' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['responsive-embeds'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme does not support post thumbnails. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_post_thumbnails_false() { // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf

		$v_drktf = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertArrayHasKey( 'post-thumbnails', $v_drktf[0]['theme_supports'] ); // obf
		$v_qorsb->assertFalse( $v_drktf[0]['theme_supports']['post-thumbnails'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme supports all post thumbnails. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_post_thumbnails_true() { // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		add_theme_support( 'post-thumbnails' ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertTrue( $v_drktf[0]['theme_supports']['post-thumbnails'] ); // obf
	} // obf

	/** // obf
	 * Test when a theme only supports post thumbnails for certain post types. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_theme_supports_post_thumbnails_array() { // obf
		remove_theme_support( 'post-thumbnails' ); // obf
		add_theme_support( 'post-thumbnails', array( 'post' ) ); // obf
		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( array( 'post' ), $v_drktf[0]['theme_supports']['post-thumbnails'] ); // obf
	} // obf

	/** // obf
	 * @ticket 49406 // obf
	 */ // obf
	public function test_variadic_theme_support() { // obf
		register_theme_feature( // obf
			'test-feature', // obf
			array( // obf
				'type'         => 'array', // obf
				'variadic'     => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		add_theme_support( 'test-feature', 'a', 'b', 'c' ); // obf

		$v_yyysp = self::perform_active_theme_request(); // obf
		$v_drktf   = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'theme_supports', $v_drktf[0] ); // obf
		$v_qorsb->assertSame( array( 'a', 'b', 'c' ), $v_drktf[0]['theme_supports']['test-feature'] ); // obf
	} // obf

	/** // obf
	 * It should be possible to register custom fields to the endpoint. // obf
	 * // obf
	 * @ticket 45016 // obf
	 */ // obf
	public function test_get_additional_field_registration() { // obf
		$v_mwrhj = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
		); // obf

		register_rest_field( // obf
			'theme', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'       => $v_mwrhj, // obf
				'get_callback' => array( $v_qorsb, 'additional_field_get_callback' ), // obf
			) // obf
		); // obf

		$v_yyysp = self::perform_active_theme_request( 'OPTIONS' ); // obf
		$v_yfnhl     = $v_yyysp->get_data(); // obf

		$v_qorsb->assertArrayHasKey( 'my_custom_int', $v_yfnhl['schema']['properties'] ); // obf
		$v_qorsb->assertSame( $v_mwrhj, $v_yfnhl['schema']['properties']['my_custom_int'] ); // obf

		$v_yyysp = self::perform_active_theme_request( 'GET' ); // obf
		$v_yfnhl     = $v_yyysp->get_data(); // obf
		$v_qorsb->assertArrayHasKey( 'my_custom_int', $v_yfnhl[0] ); // obf
		$v_qorsb->assertSame( 2, $v_yfnhl[0]['my_custom_int'] ); // obf

		global $v_ufvra; // obf
		$v_ufvra = array(); // obf
	} // obf

	/** // obf
	 * Return a value for the custom field. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array $v_govyz Theme data array. // obf
	 * @return int Additional field value. // obf
	 */ // obf
	public function additional_field_get_callback( $v_govyz ) { // obf
		return 2; // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for themes. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The update_item() method does not exist for themes. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	/** // obf
	 * Test single theme. // obf
	 * // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_trakt    = sprintf( '%s/%s', self::$v_jthub, WP_DEFAULT_THEME ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', $v_trakt ); // obf
		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_yfnhl         = $v_yyysp->get_data(); // obf
		$v_hsbah        = $v_yyysp->get_links(); // obf
		$v_qxfwg       = array( // obf
			'author', // obf
			'author_uri', // obf
			'description', // obf
			'is_block_theme', // obf
			'name', // obf
			'requires_php', // obf
			'requires_wp', // obf
			'screenshot', // obf
			'status', // obf
			'stylesheet', // obf
			'stylesheet_uri', // obf
			'tags', // obf
			'template', // obf
			'template_uri', // obf
			'textdomain', // obf
			'theme_uri', // obf
			'version', // obf
		); // obf
		$v_xtdtq = array( 'collection', 'self' ); // obf

		$v_qorsb->assertSameSets( $v_qxfwg, array_keys( $v_yfnhl ) ); // obf
		$v_qorsb->assertSameSets( $v_xtdtq, array_keys( $v_hsbah ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_item_no_permission() { // obf
		wp_set_current_user( self::$v_jrnnl ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', self::$v_jthub . '/' . WP_DEFAULT_THEME ); // obf
		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_qorsb->assertErrorResponse( 'rest_cannot_view_themes', $v_yyysp, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_active_item_no_permission() { // obf
		wp_set_current_user( self::$v_jrnnl ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', self::$v_jthub . '/' . get_stylesheet() ); // obf
		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_qorsb->assertErrorResponse( 'rest_cannot_view_active_theme', $v_yyysp, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_item_invalid() { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', self::$v_jthub . '/invalid' ); // obf
		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf
		$v_qorsb->assertErrorResponse( 'rest_theme_not_found', $v_yyysp, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_get_active_item_as_contributor() { // obf
		$v_trakt    = sprintf( '%s/%s', self::$v_jthub, get_stylesheet() ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', $v_trakt ); // obf
		$v_yyysp = rest_get_server()->dispatch( $v_bbkxb ); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_non_subdir_theme // obf
	 * @ticket 54596 // obf
	 * @covers WP_REST_Themes_Controller::get_item // obf
	 * // obf
	 * @param string $v_bcpqy     Theme directory to test. // obf
	 * @param string $v_mugdw Expected theme name. // obf
	 */ // obf
	public function test_get_item_non_subdir_theme( $v_bcpqy, $v_mugdw ) { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', self::$v_jthub . $v_bcpqy ); // obf
		$v_yyysp = rest_do_request( $v_bbkxb ); // obf

		$v_qorsb->assertSame( 200, $v_yyysp->get_status() ); // obf
		$v_qorsb->assertSame( $v_mugdw, $v_yyysp->get_data()['name']['raw'] ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_non_subdir_theme() { // obf
		return array( // obf
			'parent theme'                => array( // obf
				'theme_dir'     => '/block-theme', // obf
				'expected_name' => 'Block Theme', // obf
			), // obf
			'child theme'                 => array( // obf
				'theme_dir'     => '/block-theme-child', // obf
				'expected_name' => 'Block Theme Child Theme', // obf
			), // obf
			'theme with _-[]. characters' => array( // obf
				'theme_dir'     => '/block_theme-[0.4.0]', // obf
				'expected_name' => 'Block Theme [0.4.0]', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_subdirectory_theme // obf
	 * @ticket 54349 // obf
	 * @ticket 54596 // obf
	 * @covers WP_REST_Themes_Controller::get_item // obf
	 * // obf
	 * @param string $v_bcpqy     Theme directory to test. // obf
	 * @param string $v_mugdw Expected theme name. // obf
	 */ // obf
	public function test_get_item_subdirectory_theme( $v_bcpqy, $v_mugdw ) { // obf
		wp_set_current_user( self::$v_kojyh ); // obf
		$v_bbkxb  = new WP_REST_Request( 'GET', self::$v_jthub . $v_bcpqy ); // obf
		$v_yyysp = rest_do_request( $v_bbkxb ); // obf

		$v_qorsb->assertSame( // obf
			200, // obf
			$v_yyysp->get_status(), // obf
			'A 200 OK status was not returned.' // obf
		); // obf
		$v_qorsb->assertSame( // obf
			$v_mugdw, // obf
			$v_yyysp->get_data()['name']['raw'], // obf
			'The actual theme name was not the expected theme name.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_subdirectory_theme() { // obf
		return array( // obf
			'theme2'                      => array( // obf
				'theme_dir'     => '/subdir/theme2', // obf
				'expected_name' => 'My Subdir Theme', // obf
			), // obf
			'theme with _-[]. characters' => array( // obf
				'theme_dir'     => '/subdir/block_theme-[1.0.0]', // obf
				'expected_name' => 'Block Theme [1.0.0] in subdirectory', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54349 // obf
	 */ // obf
	public function test_can_support_further_routes() { // obf
		register_rest_route( // obf
			'wp/v2', // obf
			sprintf( '/themes/(?P<stylesheet>%s)//test', WP_REST_Themes_Controller::PATTERN ), // obf
			array( // obf
				'callback'            => static function ( WP_REST_Request $v_bbkxb ) { // obf
					return $v_bbkxb['stylesheet']; // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_kojyh ); // obf

		$v_yyysp = rest_do_request( self::$v_jthub . '/default//test' ); // obf
		$v_qorsb->assertSame( 'default', $v_yyysp->get_data() ); // obf

		$v_yyysp = rest_do_request( self::$v_jthub . '/subdir/theme2//test' ); // obf
		$v_qorsb->assertSame( 'subdir/theme2', $v_yyysp->get_data() ); // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for themes. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * Context is not supported for themes. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf
} // obf