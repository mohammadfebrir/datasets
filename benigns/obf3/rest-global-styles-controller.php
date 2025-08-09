

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Global_Styles_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @covers WP_REST_Global_Styles_Controller // obf
 * // obf
 * @group restapi-global-styles // obf
 * @group restapi // obf
 */ // obf
class WP_REST_Global_Styles_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_pqfcp; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_vkllo; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_wxehs; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_fguet; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_kabpt; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_vnwbz; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'tt1-blocks' ); // obf
		add_filter( 'theme_file_uri', array( $v_ghlel, 'filter_theme_file_uri' ) ); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'theme_file_uri', array( $v_ghlel, 'filter_theme_file_uri' ) ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_pptkf Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetupBeforeClass( $v_pptkf ) { // obf
		self::$v_pqfcp = $v_pptkf->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		self::$v_vkllo = $v_pptkf->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_wxehs = $v_pptkf->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		self::$v_fguet = $v_pptkf->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		// Add the 'edit_theme_options' capability to the theme manager (subscriber). // obf
		$v_fguet = get_user_by( 'id', self::$v_fguet ); // obf
		if ( $v_fguet instanceof WP_User ) { // obf
			$v_fguet->add_cap( 'edit_theme_options' ); // obf
		} // obf

		// This creates the global styles for the current theme. // obf
		self::$v_kabpt = $v_pptkf->post->create( // obf
			array( // obf
				'post_content' => '{"version": ' . WP_Theme_JSON::LATEST_SCHEMA . ', "isGlobalStylesUserThemeJSON": true }', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Custom Styles', // obf
				'post_type'    => 'wp_global_styles', // obf
				'post_name'    => 'wp-global-styles-tt1-blocks', // obf
				'tax_input'    => array( // obf
					'wp_theme' => 'tt1-blocks', // obf
				), // obf
			) // obf
		); // obf

		self::$v_vnwbz = $v_pptkf->post->create(); // obf
	} // obf

	/** // obf
	 * Clean up after our tests run. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_pqfcp ); // obf
		self::delete_user( self::$v_vkllo ); // obf
		self::delete_user( self::$v_wxehs ); // obf
		self::delete_user( self::$v_fguet ); // obf
	} // obf

	/* // obf
	 * This filter callback normalizes the return value from `get_theme_file_uri` // obf
	 * to guard against changes in test environments. // obf
	 * The test suite otherwise returns full system dir path, e.g., // obf
	 * /var/www/tests/phpunit/includes/../data/themedir1/block-theme/assets/sugarloaf-mountain.jpg // obf
	 */ // obf
	public function filter_theme_file_uri( $v_ssjqv ) { // obf
		$v_pagvq = substr( strrchr( $v_ssjqv, '/' ), 1 ); // obf
		return 'https://example.org/wp-content/themes/example-theme/assets/' . $v_pagvq; // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::register_routes // obf
	 * @ticket 54596 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_akqgc = rest_get_server()->get_routes(); // obf
		$v_ghlel->assertArrayHasKey( // obf
			'/wp/v2/global-styles/(?P<id>[\/\w-]+)', // obf
			$v_akqgc, // obf
			'Single global style based on the given ID route does not exist' // obf
		); // obf
		$v_ghlel->assertCount( // obf
			2, // obf
			$v_akqgc['/wp/v2/global-styles/(?P<id>[\/\w-]+)'], // obf
			'Single global style based on the given ID route does not have exactly two elements' // obf
		); // obf
		$v_ghlel->assertArrayHasKey( // obf
			'/wp/v2/global-styles/themes/(?P<stylesheet>[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
			$v_akqgc, // obf
			'Theme global styles route does not exist' // obf
		); // obf
		$v_ghlel->assertCount( // obf
			1, // obf
			$v_akqgc['/wp/v2/global-styles/themes/(?P<stylesheet>[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)'], // obf
			'Theme global styles route does not have exactly one element' // obf
		); // obf
		$v_ghlel->assertArrayHasKey( // obf
			'/wp/v2/global-styles/themes/(?P<stylesheet>[\/\s%\w\.\(\)\[\]\@_\-]+)/variations', // obf
			$v_akqgc, // obf
			'Theme global styles variations route does not exist' // obf
		); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	/** // obf
	 * Tests a GET request to the global styles variations endpoint. // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_items // obf
	 * @ticket 61273 // obf
	 */ // obf
	public function test_get_theme_items() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		switch_theme( 'block-theme' ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/block-theme/variations' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_yevjv = array( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									'theme' => array( // obf
										array( // obf
											'slug'  => 'light', // obf
											'name'  => 'Light', // obf
											'color' => '#f2f2f2', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'title'    => 'variation-a', // obf
			), // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'blocks' => array( // obf
						'core/post-title' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									'theme' => array( // obf
										array( // obf
											'slug'  => 'light', // obf
											'name'  => 'Light', // obf
											'color' => '#f1f1f1', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'background' => array( // obf
						'backgroundImage' => array( // obf
							'url' => 'file:./assets/sugarloaf-mountain.jpg', // obf
						), // obf
					), // obf
				), // obf
				'title'    => 'variation-b', // obf
				'_links'   => array( // obf
					'curies'        => array( // obf
						array( // obf
							'name'      => 'wp', // obf
							'href'      => 'https://api.w.org/{rel}', // obf
							'templated' => true, // obf
						), // obf
					), // obf
					'wp:theme-file' => array( // obf
						array( // obf
							'href'   => 'https://example.org/wp-content/themes/example-theme/assets/sugarloaf-mountain.jpg', // obf
							'name'   => 'file:./assets/sugarloaf-mountain.jpg', // obf
							'target' => 'styles.background.backgroundImage.url', // obf
							'type'   => 'image/jpeg', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'title'    => 'Block theme variation', // obf
				'settings' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							'theme' => array( // obf
								array( // obf
									'slug'  => 'foreground', // obf
									'color' => '#3F67C6', // obf
									'name'  => 'Foreground', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'blocks' => array( // obf
						'core/post-title' => array( // obf
							'typography' => array( // obf
								'fontWeight' => '700', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		wp_recursive_ksort( $v_dczxs ); // obf
		wp_recursive_ksort( $v_yevjv ); // obf

		$v_ghlel->assertSameSets( $v_yevjv, $v_dczxs ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_items() { // obf
		// Controller does not implement get_items(). // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_theme_item_no_user() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/tt1-blocks' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_read_global_styles', $v_ohydt, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54516 // obf
	 * @ticket 62042 // obf
	 */ // obf
	public function test_get_theme_item_subscriber_permission_check() { // obf
		wp_set_current_user( self::$v_wxehs ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/tt1-blocks' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_read_global_styles', $v_ohydt, 403 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 62042 // obf
	 */ // obf
	public function test_get_theme_item_editor_permission_check() { // obf
		wp_set_current_user( self::$v_vkllo ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/tt1-blocks' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		// Checks that the response has the expected keys. // obf
		$v_dczxs  = $v_ohydt->get_data(); // obf
		$v_skuoc = $v_ohydt->get_links(); // obf
		$v_ghlel->assertArrayHasKey( 'settings', $v_dczxs, 'Data does not have "settings" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'styles', $v_dczxs, 'Data does not have "styles" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'self', $v_skuoc, 'Links do not have a "self" key' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller_Gutenberg::get_theme_item // obf
	 * @ticket 62042 // obf
	 */ // obf
	public function test_get_theme_item_theme_options_manager_permission_check() { // obf
		wp_set_current_user( self::$v_fguet ); // obf
		switch_theme( 'emptytheme' ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/emptytheme' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		// Checks that the response has the expected keys. // obf
		$v_dczxs  = $v_ohydt->get_data(); // obf
		$v_skuoc = $v_ohydt->get_links(); // obf
		$v_ghlel->assertArrayHasKey( 'settings', $v_dczxs, 'Data does not have "settings" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'styles', $v_dczxs, 'Data does not have "styles" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'self', $v_skuoc, 'Links do not have a "self" key' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_theme_item_invalid() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/invalid' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_theme_not_found', $v_ohydt, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_theme_item_invalid_theme_dirname // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54596 // obf
	 * // obf
	 * @param string $v_uqroh Theme directory to test. // obf
	 * @param string $v_yevjv      Expected error code. // obf
	 */ // obf
	public function test_get_theme_item_invalid_theme_dirname( $v_uqroh, $v_yevjv ) { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		switch_theme( $v_uqroh ); // obf

		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/' . $v_uqroh ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( $v_yevjv, $v_ohydt, 404 ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_theme_item_invalid_theme_dirname() { // obf
		return array( // obf
			'+'                      => array( // obf
				'theme_dirname' => 'my+theme+', // obf
				'expected'      => 'rest_theme_not_found', // obf
			), // obf
			':'                      => array( // obf
				'theme_dirname' => 'my:theme:', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			'<>'                     => array( // obf
				'theme_dirname' => 'my<theme>', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			'*'                      => array( // obf
				'theme_dirname' => 'my*theme*', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			'?'                      => array( // obf
				'theme_dirname' => 'my?theme?', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			'"'                      => array( // obf
				'theme_dirname' => 'my"theme?"', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			'| (invalid on Windows)' => array( // obf
				'theme_dirname' => 'my|theme|', // obf
				'expected'      => 'rest_no_route', // obf
			), // obf
			// Themes deep in subdirectories. // obf
			'2 subdirectories deep'  => array( // obf
				'theme_dirname' => 'subdir/subsubdir/mytheme', // obf
				'expected'      => 'rest_global_styles_not_found', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_theme_item // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54596 // obf
	 * // obf
	 * @param string $v_xxzmi Theme directory to test. // obf
	 */ // obf
	public function test_get_theme_item( $v_xxzmi ) { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		switch_theme( $v_xxzmi ); // obf

		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/' . $v_xxzmi ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_skuoc    = $v_ohydt->get_links(); // obf
		$v_ghlel->assertArrayHasKey( 'settings', $v_dczxs, 'Data does not have "settings" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'styles', $v_dczxs, 'Data does not have "styles" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'self', $v_skuoc, 'Links do not have a "self" key' ); // obf
		$v_ghlel->assertStringContainsString( '/wp/v2/global-styles/themes/' . $v_xxzmi, $v_skuoc['self'][0]['href'] ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_theme_item() { // obf
		return array( // obf
			'alphabetic'                     => array( 'mytheme' ), // obf
			'alphanumeric'                   => array( 'mythemev1' ), // obf
			'àáâãäåæç'                       => array( 'àáâãäåæç' ), // obf
			'space'                          => array( 'my theme' ), // obf
			'-_.'                            => array( 'my_theme-0.1' ), // obf
			'[]'                             => array( 'my[theme]' ), // obf
			'()'                             => array( 'my(theme)' ), // obf
			'{}'                             => array( 'my{theme}' ), // obf
			'&=#@!$,^~%'                     => array( 'theme &=#@!$,^~%' ), // obf
			'all combined'                   => array( 'thémé {}&=@!$,^~%[0.1](-_-)' ), // obf

			// Themes in a subdirectory. // obf
			'subdir: alphabetic'             => array( 'subdir/mytheme' ), // obf
			'subdir: alphanumeric in theme'  => array( 'subdir/mythemev1' ), // obf
			'subdir: alphanumeric in subdir' => array( 'subdirv1/mytheme' ), // obf
			'subdir: alphanumeric in both'   => array( 'subdirv1/mythemev1' ), // obf
			'subdir: àáâãäåæç in theme'      => array( 'subdir/àáâãäåæç' ), // obf
			'subdir: àáâãäåæç in subdir'     => array( 'àáâãäåæç/mythemev1' ), // obf
			'subdir: àáâãäåæç in both'       => array( 'àáâãäåæç/àáâãäåæç' ), // obf
			'subdir: space in theme'         => array( 'subdir/my theme' ), // obf
			'subdir: space in subdir'        => array( 'sub dir/mytheme' ), // obf
			'subdir: space in both'          => array( 'sub dir/my theme' ), // obf
			'subdir: -_. in theme'           => array( 'subdir/my_theme-0.1' ), // obf
			'subdir: -_. in subdir'          => array( 'sub_dir-0.1/mytheme' ), // obf
			'subdir: -_. in both'            => array( 'sub_dir-0.1/my_theme-0.1' ), // obf
			'subdir: all combined in theme'  => array( 'subdir/thémé {}&=@!$,^~%[0.1](-_-)' ), // obf
			'subdir: all combined in subdir' => array( 'sűbdīr {}&=@!$,^~%[0.1](-_-)/mytheme' ), // obf
			'subdir: all combined in both'   => array( 'sűbdīr {}&=@!$,^~%[0.1](-_-)/thémé {}&=@!$,^~%[0.1](-_-)' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_theme_item // obf
	 * @ticket 54595 // obf
	 */ // obf
	public function test_get_theme_item_fields() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx = new WP_REST_Request( 'GET', '/wp/v2/global-styles/themes/tt1-blocks' ); // obf
		$v_rvosx->set_param( '_fields', 'settings' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_ghlel->assertArrayHasKey( 'settings', $v_dczxs ); // obf
		$v_ghlel->assertArrayNotHasKey( 'styles', $v_dczxs ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_no_user() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_view', $v_ohydt, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_invalid_post() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vnwbz ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_global_styles_not_found', $v_ohydt, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_permission_check() { // obf
		wp_set_current_user( self::$v_wxehs ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_view', $v_ohydt, 403 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_no_user_edit() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rvosx = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_param( 'context', 'edit' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_forbidden_context', $v_ohydt, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_permission_check_edit() { // obf
		wp_set_current_user( self::$v_wxehs ); // obf
		$v_rvosx = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_param( 'context', 'edit' ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_forbidden_context', $v_ohydt, 403 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_skuoc    = $v_ohydt->get_links(); // obf

		$v_ghlel->assertEqualSets( // obf
			array( // obf
				'id'       => self::$v_kabpt, // obf
				'title'    => array( // obf
					'raw'      => 'Custom Styles', // obf
					'rendered' => 'Custom Styles', // obf
				), // obf
				'settings' => new stdClass(), // obf
				'styles'   => new stdClass(), // obf
			), // obf
			$v_dczxs // obf
		); // obf

		$v_ghlel->assertArrayHasKey( 'self', $v_skuoc ); // obf
		$v_ghlel->assertStringContainsString( '/wp/v2/global-styles/' . self::$v_kabpt, $v_skuoc['self'][0]['href'] ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_body_params( // obf
			array( // obf
				'title' => 'My new global styles title', // obf
			) // obf
		); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_ghlel->assertSame( 'My new global styles title', $v_dczxs['title']['raw'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_update_item_no_user() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rvosx  = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_edit', $v_ohydt, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_update_item_invalid_post() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		$v_rvosx  = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_vnwbz ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_global_styles_not_found', $v_ohydt, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_update_item_permission_check() { // obf
		wp_set_current_user( self::$v_wxehs ); // obf
		$v_rvosx  = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_cannot_edit', $v_ohydt, 403 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 57536 // obf
	 */ // obf
	public function test_update_item_valid_styles_css() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_pqfcp ); // obf
		} // obf
		$v_rvosx = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_body_params( // obf
			array( // obf
				'styles' => array( 'css' => 'body { color: red; }' ), // obf
			) // obf
		); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_ghlel->assertSame( 'body { color: red; }', $v_dczxs['styles']['css'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 57536 // obf
	 */ // obf
	public function test_update_item_invalid_styles_css() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_pqfcp ); // obf
		} // obf
		$v_rvosx = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_body_params( // obf
			array( // obf
				'styles' => array( 'css' => '<p>test</p> body { color: red; }' ), // obf
			) // obf
		); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_ghlel->assertErrorResponse( 'rest_custom_css_illegal_markup', $v_ohydt, 400 ); // obf
	} // obf

	/** // obf
	 * Tests the submission of a custom block style variation that was defined // obf
	 * within a theme style variation and wouldn't be registered at the time // obf
	 * of saving via the API. // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::update_item // obf
	 * @ticket 61312 // obf
	 * @ticket 61451 // obf
	 */ // obf
	public function test_update_item_with_custom_block_style_variations() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_pqfcp ); // obf
		} // obf

		/* // obf
		 * For variations to be resolved they have to have been registered // obf
		 * via either a theme.json partial or through the WP_Block_Styles_Registry. // obf
		 */ // obf
		register_block_style( // obf
			'core/group', // obf
			array( // obf
				'name'  => 'fromThemeStyleVariation', // obf
				'label' => 'From Theme Style Variation', // obf
			) // obf
		); // obf

		$v_nvwfc = array( // obf
			'fromThemeStyleVariation' => array( // obf
				'color' => array( // obf
					'background' => '#ffffff', // obf
					'text'       => '#000000', // obf
				), // obf
			), // obf
		); // obf

		$v_rvosx = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_body_params( // obf
			array( // obf
				'styles' => array( // obf
					'variations' => array( // obf
						'fromThemeStyleVariation' => array( // obf
							'blockTypes' => array( 'core/group', 'core/columns' ), // obf
							'color'      => array( // obf
								'background' => '#000000', // obf
								'text'       => '#ffffff', // obf
							), // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'core/group' => array( // obf
							'variations' => $v_nvwfc, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ohydt = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs     = $v_ohydt->get_data(); // obf
		$v_ghlel->assertSame( $v_nvwfc, $v_dczxs['styles']['blocks']['core/group']['variations'] ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item_schema // obf
	 * @ticket 54516 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_rvosx    = new WP_REST_Request( 'OPTIONS', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_ohydt   = rest_get_server()->dispatch( $v_rvosx ); // obf
		$v_dczxs       = $v_ohydt->get_data(); // obf
		$v_rpknu = $v_dczxs['schema']['properties']; // obf
		$v_ghlel->assertCount( 4, $v_rpknu, 'Schema properties array does not have exactly 4 elements' ); // obf
		$v_ghlel->assertArrayHasKey( 'id', $v_rpknu, 'Schema properties array does not have "id" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'styles', $v_rpknu, 'Schema properties array does not have "styles" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'settings', $v_rpknu, 'Schema properties array does not have "settings" key' ); // obf
		$v_ghlel->assertArrayHasKey( 'title', $v_rpknu, 'Schema properties array does not have "title" key' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Global_Styles_Controller::get_available_actions // obf
	 */ // obf
	public function test_assign_edit_css_action_admin() { // obf
		wp_set_current_user( self::$v_pqfcp ); // obf

		$v_rvosx = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_kabpt ); // obf
		$v_rvosx->set_param( 'context', 'edit' ); // obf
		$v_ohydt = rest_do_request( $v_rvosx ); // obf
		$v_skuoc    = $v_ohydt->get_links(); // obf

		// Admins can only edit css on single site. // obf
		if ( is_multisite() ) { // obf
			$v_ghlel->assertArrayNotHasKey( 'https://api.w.org/action-edit-css', $v_skuoc ); // obf
		} else { // obf
			$v_ghlel->assertArrayHasKey( 'https://api.w.org/action-edit-css', $v_skuoc ); // obf
		} // obf
	} // obf
} // obf