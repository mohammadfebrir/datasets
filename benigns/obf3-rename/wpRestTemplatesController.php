

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Templates_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @covers WP_REST_Templates_Controller // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_WpRestTemplatesController extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_xmyrt; // obf
	protected static $v_xawws; // obf
	protected static $v_iolwr; // obf
	private static $v_kpitu; // obf
	private static $v_uokue; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_havoj Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetupBeforeClass( $v_havoj ) { // obf
		self::$v_xmyrt      = $v_havoj->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_xawws     = $v_havoj->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_iolwr = $v_havoj->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		// Set up template post. // obf
		$v_clmgk                = array( // obf
			'post_type'    => 'wp_template', // obf
			'post_name'    => 'my_template', // obf
			'post_title'   => 'My Template', // obf
			'post_content' => 'Content', // obf
			'post_excerpt' => 'Description of my template.', // obf
			'tax_input'    => array( // obf
				'wp_theme' => array( // obf
					get_stylesheet(), // obf
				), // obf
			), // obf
		); // obf
		self::$v_kpitu = self::factory()->post->create_and_get( $v_clmgk ); // obf
		wp_set_post_terms( self::$v_kpitu->ID, get_stylesheet(), 'wp_theme' ); // obf

		// Set up template part post. // obf
		$v_clmgk                     = array( // obf
			'post_type'    => 'wp_template_part', // obf
			'post_name'    => 'my_template_part', // obf
			'post_title'   => 'My Template Part', // obf
			'post_content' => 'Content', // obf
			'post_excerpt' => 'Description of my template part.', // obf
			'tax_input'    => array( // obf
				'wp_theme'              => array( // obf
					get_stylesheet(), // obf
				), // obf
				'wp_template_part_area' => array( // obf
					WP_TEMPLATE_PART_AREA_HEADER, // obf
				), // obf
			), // obf
		); // obf
		self::$v_uokue = self::factory()->post->create_and_get( $v_clmgk ); // obf
		wp_set_post_terms( self::$v_uokue->ID, get_stylesheet(), 'wp_theme' ); // obf
		wp_set_post_terms( self::$v_uokue->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_kpitu->ID ); // obf
	} // obf

	/** // obf
	 * Tear down after each test. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function tear_down() { // obf
		if ( has_filter( 'rest_pre_insert_wp_template_part', 'inject_ignored_hooked_blocks_metadata_attributes' ) ) { // obf
			remove_filter( 'rest_pre_insert_wp_template_part', 'inject_ignored_hooked_blocks_metadata_attributes' ); // obf
		} // obf
		if ( WP_Block_Type_Registry::get_instance()->is_registered( 'tests/block' ) ) { // obf
			unregister_block_type( 'tests/hooked-block' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::register_routes // obf
	 * @ticket 54596 // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_yxfki = rest_get_server()->get_routes(); // obf
		$v_mdjfd->assertArrayHasKey( // obf
			'/wp/v2/templates', // obf
			$v_yxfki, // obf
			'Templates route does not exist' // obf
		); // obf
		$v_mdjfd->assertArrayHasKey( // obf
			'/wp/v2/templates/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)', // obf
			$v_yxfki, // obf
			'Single template based on the given ID route does not exist' // obf
		); // obf
		$v_mdjfd->assertArrayHasKey( // obf
			'/wp/v2/templates/lookup', // obf
			$v_yxfki, // obf
			'Get template fallback content route does not exist' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_context_param // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_mvrho  = new WP_REST_Request( 'OPTIONS', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertSame( 'view', $v_rxwjo['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mdjfd->assertSame( array( 'view', 'embed', 'edit' ), $v_rxwjo['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_mvrho  = new WP_REST_Request( 'OPTIONS', '/wp/v2/templates/default//my_template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertSame( 'view', $v_rxwjo['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mdjfd->assertSame( array( 'view', 'embed', 'edit' ), $v_rxwjo['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_template', // obf
				'theme'           => 'default', // obf
				'slug'            => 'my_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Description of my template.', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => self::$v_kpitu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => 0, // obf
				'modified'        => mysql_to_rfc3339( self::$v_kpitu->post_modified ), // obf
				'author_text'     => 'Test Blog', // obf
				'original_source' => 'site', // obf
			), // obf
			$v_mdjfd->find_and_normalize_template_by_id( $v_rxwjo, 'default//my_template' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Templates_Controller::get_items // obf
	 */ // obf
	public function test_get_items_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'HEAD', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 200, $v_cikan->get_status(), 'Response status is 200.' ); // obf
		$v_mdjfd->assertSame( array(), $v_cikan->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_vcmaw The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_vcmaw ) { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'HEAD', $v_vcmaw ); // obf
		$v_mvrho->set_param( '_fields', 'id' ); // obf
		$v_bgwfj   = rest_get_server(); // obf
		$v_cikan = $v_bgwfj->dispatch( $v_mvrho ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_cikan = apply_filters( 'rest_post_dispatch', $v_cikan, $v_bgwfj, $v_mvrho ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_mdjfd->assertSame( 200, $v_cikan->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/templates/default//my_template' ), // obf
			'get_items request' => array( '/wp/v2/templates' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_items // obf
	 */ // obf
	public function test_get_items_editor() { // obf
		wp_set_current_user( self::$v_xawws ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_template', // obf
				'theme'           => 'default', // obf
				'slug'            => 'my_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Description of my template.', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => self::$v_kpitu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => 0, // obf
				'modified'        => mysql_to_rfc3339( self::$v_kpitu->post_modified ), // obf
				'author_text'     => 'Test Blog', // obf
				'original_source' => 'site', // obf
			), // obf
			$v_mdjfd->find_and_normalize_template_by_id( $v_rxwjo, 'default//my_template' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_items // obf
	 */ // obf
	public function test_get_items_no_permission_subscriber() { // obf
		wp_set_current_user( self::$v_iolwr ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertErrorResponse( 'rest_cannot_manage_templates', $v_cikan, 403 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_items // obf
	 */ // obf
	public function test_get_items_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertErrorResponse( 'rest_cannot_manage_templates', $v_cikan, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/default//my_template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		unset( $v_rxwjo['content'] ); // obf
		unset( $v_rxwjo['_links'] ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_template', // obf
				'theme'           => 'default', // obf
				'slug'            => 'my_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Description of my template.', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => self::$v_kpitu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => 0, // obf
				'modified'        => mysql_to_rfc3339( self::$v_kpitu->post_modified ), // obf
				'author_text'     => 'Test Blog', // obf
				'original_source' => 'site', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 * @covers WP_REST_Templates_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'HEAD', '/wp/v2/templates/default//my_template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 200, $v_cikan->get_status(), 'Response status is 200.' ); // obf
		$v_mdjfd->assertSame( array(), $v_cikan->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 */ // obf
	public function test_get_item_editor() { // obf
		wp_set_current_user( self::$v_xawws ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/default//my_template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		unset( $v_rxwjo['content'] ); // obf
		unset( $v_rxwjo['_links'] ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_template', // obf
				'theme'           => 'default', // obf
				'slug'            => 'my_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Description of my template.', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => self::$v_kpitu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => 0, // obf
				'modified'        => mysql_to_rfc3339( self::$v_kpitu->post_modified ), // obf
				'author_text'     => 'Test Blog', // obf
				'original_source' => 'site', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 */ // obf
	public function test_get_item_subscriber() { // obf
		wp_set_current_user( self::$v_iolwr ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/default//my_template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertErrorResponse( 'rest_cannot_manage_templates', $v_cikan, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 54507 // obf
	 * @dataProvider data_get_item_works_with_a_single_slash // obf
	 */ // obf
	public function test_get_item_works_with_a_single_slash( $v_behfr ) { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', $v_behfr ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf

		$v_rxwjo = $v_cikan->get_data(); // obf
		unset( $v_rxwjo['content'] ); // obf
		unset( $v_rxwjo['_links'] ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_template', // obf
				'theme'           => 'default', // obf
				'slug'            => 'my_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Description of my template.', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => self::$v_kpitu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => 0, // obf
				'modified'        => mysql_to_rfc3339( self::$v_kpitu->post_modified ), // obf
				'author_text'     => 'Test Blog', // obf
				'original_source' => 'site', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	public function data_get_item_works_with_a_single_slash() { // obf
		return array( // obf
			array( '/wp/v2/templates/default/my_template' ), // obf
			array( '/wp/v2/templates/default//my_template' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_with_valid_theme_dirname // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 * @ticket 54596 // obf
	 * // obf
	 * @param string $v_xfqtu Theme directory to test. // obf
	 * @param string $v_jmjxb  Template to test. // obf
	 * @param array  $v_clmgk      Arguments to create the 'wp_template" post. // obf
	 */ // obf
	public function test_get_item_with_valid_theme_dirname( $v_xfqtu, $v_jmjxb, array $v_clmgk ) { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		switch_theme( $v_xfqtu ); // obf

		// Set up template post. // obf
		$v_clmgk['post_type'] = 'wp_template'; // obf
		$v_clmgk['tax_input'] = array( // obf
			'wp_theme' => array( // obf
				get_stylesheet(), // obf
			), // obf
		); // obf
		$v_cpicu              = self::factory()->post->create_and_get( $v_clmgk ); // obf
		wp_set_post_terms( $v_cpicu->ID, get_stylesheet(), 'wp_theme' ); // obf

		$v_mvrho  = new WP_REST_Request( 'GET', "/wp/v2/templates/{$v_xfqtu}//{$v_jmjxb}" ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		unset( $v_rxwjo['content'] ); // obf
		unset( $v_rxwjo['_links'] ); // obf
		$v_wcygv = get_user_by( 'id', self::$v_xmyrt )->get( 'display_name' ); // obf

		$v_mdjfd->assertSameSetsWithIndex( // obf
			array( // obf
				'id'              => "{$v_xfqtu}//{$v_jmjxb}", // obf
				'theme'           => $v_xfqtu, // obf
				'slug'            => $v_jmjxb, // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => $v_clmgk['post_excerpt'], // obf
				'title'           => array( // obf
					'raw'      => $v_clmgk['post_title'], // obf
					'rendered' => $v_clmgk['post_title'], // obf
				), // obf
				'status'          => 'publish', // obf
				'wp_id'           => $v_cpicu->ID, // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => self::$v_xmyrt, // obf
				'modified'        => mysql_to_rfc3339( $v_cpicu->post_modified ), // obf
				'author_text'     => $v_wcygv, // obf
				'original_source' => 'user', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_with_valid_theme_dirname() { // obf
		$v_suger = DIR_TESTDATA . '/themedir1/'; // obf
		return array( // obf
			'template parts: parent theme'                => array( // obf
				'theme_dir' => 'themedir1/block-theme', // obf
				'template'  => 'small-header', // obf
				'args'      => array( // obf
					'post_name'    => 'small-header', // obf
					'post_title'   => 'Small Header Template', // obf
					'post_content' => file_get_contents( $v_suger . '/block-theme/parts/small-header.html' ), // obf
					'post_excerpt' => 'Description of small header template.', // obf
				), // obf
			), // obf
			'template: parent theme'                      => array( // obf
				'theme_dir' => 'themedir1/block-theme', // obf
				'template'  => 'page-home', // obf
				'args'      => array( // obf
					'post_name'    => 'page-home', // obf
					'post_title'   => 'Home Page Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block-theme/templates/page-home.html' ), // obf
					'post_excerpt' => 'Description of page home template.', // obf
				), // obf
			), // obf
			'template parts: parent theme with non latin characters' => array( // obf
				'theme_dir' => 'themedir1/block-theme-non-latin', // obf
				'template'  => 'small-header-%cf%84%ce%b5%cf%83%cf%84', // obf
				'args'      => array( // obf
					'post_name'    => 'small-header-τεστ', // obf
					'post_title'   => 'Small Header τεστ Template', // obf
					'post_content' => file_get_contents( $v_suger . '/block-theme-non-latin/parts/small-header-test.html' ), // obf
					'post_excerpt' => 'Description of small header τεστ template.', // obf
				), // obf
			), // obf
			'template: parent theme with non latin name'  => array( // obf
				'theme_dir' => 'themedir1/block-theme-non-latin', // obf
				'template'  => 'page-%cf%84%ce%b5%cf%83%cf%84', // obf
				'args'      => array( // obf
					'post_name'    => 'page-τεστ', // obf
					'post_title'   => 'τεστ Page Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block-theme-non-latin/templates/page-test.html' ), // obf
					'post_excerpt' => 'Description of page τεστ template.', // obf
				), // obf
			), // obf
			'template parts: parent theme with chinese characters' => array( // obf
				'theme_dir' => 'themedir1/block-theme-non-latin', // obf
				'template'  => 'small-header-%e6%b5%8b%e8%af%95', // obf
				'args'      => array( // obf
					'post_name'    => 'small-header-测试', // obf
					'post_title'   => 'Small Header 测试 Template', // obf
					'post_content' => file_get_contents( $v_suger . '/block-theme-non-latin/parts/small-header-test.html' ), // obf
					'post_excerpt' => 'Description of small header 测试 template.', // obf
				), // obf
			), // obf
			'template: parent theme with non latin name using chinese characters' => array( // obf
				'theme_dir' => 'themedir1/block-theme-non-latin', // obf
				'template'  => 'page-%e6%b5%8b%e8%af%95', // obf
				'args'      => array( // obf
					'post_name'    => 'page-测试', // obf
					'post_title'   => '测试 Page Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block-theme-non-latin/templates/page-test.html' ), // obf
					'post_excerpt' => 'Description of page 测试 template.', // obf
				), // obf
			), // obf
			'template: parent theme deprecated path'      => array( // obf
				'theme_dir' => 'themedir1/block-theme-deprecated-path', // obf
				'template'  => 'page-home', // obf
				'args'      => array( // obf
					'post_name'    => 'page-home', // obf
					'post_title'   => 'Home Page Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block-theme-deprecated-path/block-templates/page-home.html' ), // obf
					'post_excerpt' => 'Description of page home template.', // obf
				), // obf
			), // obf
			'template: child theme'                       => array( // obf
				'theme_dir' => 'themedir1/block-theme-child', // obf
				'template'  => 'page-1', // obf
				'args'      => array( // obf
					'post_name'    => 'page-1', // obf
					'post_title'   => 'Page 1 Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block-theme-child/templates/page-1.html' ), // obf
					'post_excerpt' => 'Description of page 1 template.', // obf
				), // obf
			), // obf
			'template part: subdir with _-[]. characters' => array( // obf
				'theme_dir' => 'themedir1/block_theme-[0.4.0]', // obf
				'template'  => 'large-header', // obf
				'args'      => array( // obf
					'post_name'    => 'large-header', // obf
					'post_title'   => 'Large Header Template Part', // obf
					'post_content' => file_get_contents( $v_suger . 'block_theme-[0.4.0]/parts/large-header.html' ), // obf
					'post_excerpt' => 'Description of large header template.', // obf
				), // obf
			), // obf
			'template: subdir with _-[]. characters'      => array( // obf
				'theme_dir' => 'themedir1/block_theme-[0.4.0]', // obf
				'template'  => 'page-large-header', // obf
				'args'      => array( // obf
					'post_name'    => 'page-large-header', // obf
					'post_title'   => 'Page Large Template', // obf
					'post_content' => file_get_contents( $v_suger . 'block_theme-[0.4.0]/templates/page-large-header.html' ), // obf
					'post_excerpt' => 'Description of page large template.', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that get_item() returns plugin-registered templates. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers WP_REST_Templates_Controller::get_item // obf
	 */ // obf
	public function test_get_item_from_registry() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf

		$v_aueuu = 'test-plugin//test-template'; // obf
		$v_clmgk          = array( // obf
			'content'     => 'Template content', // obf
			'title'       => 'Test Template', // obf
			'description' => 'Description of test template', // obf
			'post_types'  => array( 'post', 'page' ), // obf
		); // obf

		register_block_template( $v_aueuu, $v_clmgk ); // obf

		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/test-plugin//test-template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf

		$v_mdjfd->assertNotWPError( $v_cikan, "Fetching a registered template shouldn't cause an error." ); // obf

		$v_rxwjo = $v_cikan->get_data(); // obf

		$v_mdjfd->assertSame( 'default//test-template', $v_rxwjo['id'], 'Template ID mismatch.' ); // obf
		$v_mdjfd->assertSame( 'default', $v_rxwjo['theme'], 'Template theme mismatch.' ); // obf
		$v_mdjfd->assertSame( 'Template content', $v_rxwjo['content']['raw'], 'Template content mismatch.' ); // obf
		$v_mdjfd->assertSame( 'test-template', $v_rxwjo['slug'], 'Template slug mismatch.' ); // obf
		$v_mdjfd->assertSame( 'plugin', $v_rxwjo['source'], "Template source should be 'plugin'." ); // obf
		$v_mdjfd->assertSame( 'plugin', $v_rxwjo['origin'], "Template origin should be 'plugin'." ); // obf
		$v_mdjfd->assertSame( 'test-plugin', $v_rxwjo['author_text'], 'Template author text mismatch.' ); // obf
		$v_mdjfd->assertSame( 'Description of test template', $v_rxwjo['description'], 'Template description mismatch.' ); // obf
		$v_mdjfd->assertSame( 'Test Template', $v_rxwjo['title']['rendered'], 'Template title mismatch.' ); // obf
		$v_mdjfd->assertSame( 'test-plugin', $v_rxwjo['plugin'], 'Plugin name mismatch.' ); // obf

		unregister_block_template( $v_aueuu ); // obf

		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/test-plugin//test-template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf

		$v_mdjfd->assertNotWPError( $v_cikan, "Fetching an unregistered template shouldn't cause an error." ); // obf
		$v_mdjfd->assertSame( 404, $v_cikan->get_status(), 'Fetching an unregistered template should return 404.' ); // obf
	} // obf

	/** // obf
	 * @ticket 54507 // obf
	 * @dataProvider data_sanitize_template_id // obf
	 */ // obf
	public function test_sanitize_template_id( $v_izgpn, $v_woofy ) { // obf
		$v_gvxob = new WP_REST_Templates_Controller( 'wp_template' ); // obf
		$v_mdjfd->assertSame( // obf
			$v_woofy, // obf
			$v_gvxob->_sanitize_template_id( $v_izgpn ) // obf
		); // obf
	} // obf

	public function data_sanitize_template_id() { // obf
		return array( // obf
			array( 'tt1-blocks/index', 'tt1-blocks//index' ), // obf
			array( 'tt1-blocks//index', 'tt1-blocks//index' ), // obf

			array( 'theme-experiments/tt1-blocks/index', 'theme-experiments/tt1-blocks//index' ), // obf
			array( 'theme-experiments/tt1-blocks//index', 'theme-experiments/tt1-blocks//index' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54422 // obf
	 * @covers WP_REST_Templates_Controller::create_item // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/templates' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'slug'        => 'my_custom_template', // obf
				'description' => 'Just a description', // obf
				'title'       => 'My Template', // obf
				'content'     => 'Content', // obf
				'author'      => self::$v_xmyrt, // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_pktge = get_post( $v_rxwjo['wp_id'] )->post_modified; // obf
		unset( $v_rxwjo['_links'] ); // obf
		unset( $v_rxwjo['wp_id'] ); // obf

		$v_wcygv = get_user_by( 'id', self::$v_xmyrt )->get( 'display_name' ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_custom_template', // obf
				'theme'           => 'default', // obf
				'content'         => array( // obf
					'raw' => 'Content', // obf
				), // obf
				'slug'            => 'my_custom_template', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Just a description', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => self::$v_xmyrt, // obf
				'modified'        => mysql_to_rfc3339( $v_pktge ), // obf
				'author_text'     => $v_wcygv, // obf
				'original_source' => 'user', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54680 // obf
	 * @covers WP_REST_Templates_Controller::create_item // obf
	 * @covers WP_REST_Templates_Controller::get_item_schema // obf
	 */ // obf
	public function test_create_item_with_numeric_slug() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/templates' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'slug'        => '404', // obf
				'description' => 'Template shown when no content is found.', // obf
				'title'       => '404', // obf
				'author'      => self::$v_xmyrt, // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_pktge = get_post( $v_rxwjo['wp_id'] )->post_modified; // obf
		unset( $v_rxwjo['_links'] ); // obf
		unset( $v_rxwjo['wp_id'] ); // obf

		$v_wcygv = get_user_by( 'id', self::$v_xmyrt )->get( 'display_name' ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//404', // obf
				'theme'           => 'default', // obf
				'content'         => array( // obf
					'raw' => '', // obf
				), // obf
				'slug'            => '404', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Template shown when no content is found.', // obf
				'title'           => array( // obf
					'raw'      => '404', // obf
					'rendered' => '404', // obf
				), // obf
				'status'          => 'publish', // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => false, // obf
				'author'          => self::$v_xmyrt, // obf
				'modified'        => mysql_to_rfc3339( $v_pktge ), // obf
				'author_text'     => $v_wcygv, // obf
				'original_source' => 'user', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54422 // obf
	 * @covers WP_REST_Templates_Controller::create_item // obf
	 */ // obf
	public function test_create_item_raw() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/templates' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'slug'        => 'my_custom_template_raw', // obf
				'description' => 'Just a description', // obf
				'title'       => array( // obf
					'raw' => 'My Template', // obf
				), // obf
				'content'     => array( // obf
					'raw' => 'Content', // obf
				), // obf
				'author'      => self::$v_xmyrt, // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_pktge = get_post( $v_rxwjo['wp_id'] )->post_modified; // obf
		unset( $v_rxwjo['_links'] ); // obf
		unset( $v_rxwjo['wp_id'] ); // obf

		$v_wcygv = get_user_by( 'id', self::$v_xmyrt )->get( 'display_name' ); // obf

		$v_mdjfd->assertSame( // obf
			array( // obf
				'id'              => 'default//my_custom_template_raw', // obf
				'theme'           => 'default', // obf
				'content'         => array( // obf
					'raw' => 'Content', // obf
				), // obf
				'slug'            => 'my_custom_template_raw', // obf
				'source'          => 'custom', // obf
				'origin'          => null, // obf
				'type'            => 'wp_template', // obf
				'description'     => 'Just a description', // obf
				'title'           => array( // obf
					'raw'      => 'My Template', // obf
					'rendered' => 'My Template', // obf
				), // obf
				'status'          => 'publish', // obf
				'has_theme_file'  => false, // obf
				'is_custom'       => true, // obf
				'author'          => self::$v_xmyrt, // obf
				'modified'        => mysql_to_rfc3339( $v_pktge ), // obf
				'author_text'     => $v_wcygv, // obf
				'original_source' => 'user', // obf
			), // obf
			$v_rxwjo // obf
		); // obf
	} // obf

	public function test_create_item_invalid_author() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/templates' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'slug'        => 'my_custom_template_invalid_author', // obf
				'description' => 'Just a description', // obf
				'title'       => 'My Template', // obf
				'content'     => 'Content', // obf
				'author'      => -1, // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertErrorResponse( 'rest_invalid_author', $v_cikan, 400 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::update_item // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'PUT', '/wp/v2/templates/default//my_template' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'title' => 'My new Index Title', // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertSame( 'My new Index Title', $v_rxwjo['title']['raw'] ); // obf
		$v_mdjfd->assertSame( 'custom', $v_rxwjo['source'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::update_item // obf
	 */ // obf
	public function test_update_item_raw() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'PUT', '/wp/v2/templates/default//my_template' ); // obf
		$v_mvrho->set_body_params( // obf
			array( // obf
				'title' => array( 'raw' => 'My new raw Index Title' ), // obf
			) // obf
		); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertSame( 'My new raw Index Title', $v_rxwjo['title']['raw'] ); // obf
		$v_mdjfd->assertSame( 'custom', $v_rxwjo['source'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Set up template post. // obf
		$v_clmgk    = array( // obf
			'post_type'    => 'wp_template', // obf
			'post_name'    => 'my_test_template', // obf
			'post_title'   => 'My Template', // obf
			'post_content' => 'Content', // obf
			'post_excerpt' => 'Description of my template.', // obf
			'tax_input'    => array( // obf
				'wp_theme' => array( // obf
					get_stylesheet(), // obf
				), // obf
			), // obf
		); // obf
		$v_pcoay = self::factory()->post->create( $v_clmgk ); // obf
		wp_set_post_terms( $v_pcoay, get_stylesheet(), 'wp_theme' ); // obf

		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'DELETE', '/wp/v2/templates/default//my_test_template' ); // obf
		$v_mvrho->set_param( 'force', 'false' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertSame( 'My Template', $v_rxwjo['title']['raw'] ); // obf
		$v_mdjfd->assertSame( 'trash', $v_rxwjo['status'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_skip_trash() { // obf
		// Set up template post. // obf
		$v_clmgk    = array( // obf
			'post_type'    => 'wp_template', // obf
			'post_name'    => 'my_test_template', // obf
			'post_title'   => 'My Template', // obf
			'post_content' => 'Content', // obf
			'post_excerpt' => 'Description of my template.', // obf
			'tax_input'    => array( // obf
				'wp_theme' => array( // obf
					get_stylesheet(), // obf
				), // obf
			), // obf
		); // obf
		$v_pcoay = self::factory()->post->create( $v_clmgk ); // obf
		wp_set_post_terms( $v_pcoay, get_stylesheet(), 'wp_theme' ); // obf

		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'DELETE', '/wp/v2/templates/default//my_test_template' ); // obf
		$v_mvrho->set_param( 'force', 'true' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 200, $v_cikan->get_status() ); // obf
		$v_rxwjo = $v_cikan->get_data(); // obf
		$v_mdjfd->assertTrue( $v_rxwjo['deleted'] ); // obf
		$v_mdjfd->assertNotEmpty( $v_rxwjo['previous'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_fail() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho  = new WP_REST_Request( 'DELETE', '/wp/v2/templates/justrandom//template' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertErrorResponse( 'rest_template_not_found', $v_cikan, 404 ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf

		$v_gvxob = new WP_REST_Templates_Controller( 'wp_template' ); // obf
		$v_mvrho  = new WP_REST_Request( 'GET', '/wp/v2/templates/default//my_template' ); // obf
		$v_mvrho->set_param( 'context', 'edit' ); // obf
		$v_mvrho->set_param( '_fields', 'id,slug' ); // obf
		$v_pirkf      = get_block_template( 'default//my_template', 'wp_template' ); // obf
		$v_cikan = $v_gvxob->prepare_item_for_response( $v_pirkf, $v_mvrho ); // obf
		$v_mdjfd->assertSame( // obf
			array( // obf
				'id', // obf
				'slug', // obf
			), // obf
			array_keys( $v_cikan->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54422 // obf
	 * @covers WP_REST_Templates_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_mvrho    = new WP_REST_Request( 'OPTIONS', '/wp/v2/templates' ); // obf
		$v_cikan   = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo       = $v_cikan->get_data(); // obf
		$v_rfoem = $v_rxwjo['schema']['properties']; // obf
		$v_mdjfd->assertCount( 18, $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'id', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'description', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'slug', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'theme', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'type', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'source', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'origin', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'content', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'title', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'description', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'status', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'wp_id', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'has_theme_file', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'is_custom', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'author', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'modified', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'author_text', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'original_source', $v_rfoem ); // obf
		$v_mdjfd->assertArrayHasKey( 'plugin', $v_rfoem ); // obf
	} // obf

	protected function find_and_normalize_template_by_id( $v_jslmj, $v_xxbpv ) { // obf
		foreach ( $v_jslmj as $v_jmjxb ) { // obf
			if ( $v_jmjxb['id'] === $v_xxbpv ) { // obf
				unset( $v_jmjxb['content'] ); // obf
				unset( $v_jmjxb['_links'] ); // obf
				return $v_jmjxb; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_with_is_wp_suggestion // obf
	 * @ticket 56467 // obf
	 * @covers WP_REST_Templates_Controller::create_item // obf
	 * // obf
	 * @param array $v_ftogp Data set to test. // obf
	 * @param array $v_dckgh    Expected results. // obf
	 */ // obf
	public function test_create_item_with_is_wp_suggestion( array $v_ftogp, array $v_dckgh ) { // obf
		// Set up the user. // obf
		$v_ftogp['author'] = self::$v_xmyrt; // obf
		$v_dckgh['author']    = self::$v_xmyrt; // obf
		wp_set_current_user( self::$v_xmyrt ); // obf

		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/templates' ); // obf
		$v_mvrho->set_body_params( $v_ftogp ); // obf
		$v_cikan                    = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo                        = $v_cikan->get_data(); // obf
		$v_pktge                    = get_post( $v_rxwjo['wp_id'] )->post_modified; // obf
		$v_dckgh['modified']        = mysql_to_rfc3339( $v_pktge ); // obf
		$v_dckgh['author_text']     = get_user_by( 'id', self::$v_xmyrt )->get( 'display_name' ); // obf
		$v_dckgh['original_source'] = 'user'; // obf

		unset( $v_rxwjo['_links'] ); // obf
		unset( $v_rxwjo['wp_id'] ); // obf

		$v_mdjfd->assertSame( $v_dckgh, $v_rxwjo ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_with_is_wp_suggestion() { // obf
		$v_dckgh = array( // obf
			'id'             => 'default//page-rigas', // obf
			'theme'          => 'default', // obf
			'content'        => array( // obf
				'raw' => 'Content', // obf
			), // obf
			'slug'           => 'page-rigas', // obf
			'source'         => 'custom', // obf
			'origin'         => null, // obf
			'type'           => 'wp_template', // obf
			'description'    => 'Just a description', // obf
			'title'          => array( // obf
				'raw'      => 'My Template', // obf
				'rendered' => 'My Template', // obf
			), // obf
			'status'         => 'publish', // obf
			'has_theme_file' => false, // obf
			'is_custom'      => false, // obf
			'author'         => null, // obf
		); // obf

		return array( // obf
			'is_wp_suggestion: true'  => array( // obf
				'body_params' => array( // obf
					'slug'             => 'page-rigas', // obf
					'description'      => 'Just a description', // obf
					'title'            => 'My Template', // obf
					'content'          => 'Content', // obf
					'is_wp_suggestion' => true, // obf
					'author'           => null, // obf
				), // obf
				'expected'    => $v_dckgh, // obf
			), // obf
			'is_wp_suggestion: false' => array( // obf
				'body_params' => array( // obf
					'slug'             => 'page-hi', // obf
					'description'      => 'Just a description', // obf
					'title'            => 'My Template', // obf
					'content'          => 'Content', // obf
					'is_wp_suggestion' => false, // obf
					'author'           => null, // obf
				), // obf
				'expected'    => array_merge( // obf
					$v_dckgh, // obf
					array( // obf
						'id'        => 'default//page-hi', // obf
						'slug'      => 'page-hi', // obf
						'is_custom' => true, // obf
					) // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @covers WP_REST_Templates_Controller::get_template_fallback // obf
	 */ // obf
	public function test_get_template_fallback() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		switch_theme( 'block-theme' ); // obf
		$v_mvrho = new WP_REST_Request( 'GET', '/wp/v2/templates/lookup' ); // obf
		// Should fallback to `index.html`. // obf
		$v_mvrho->set_param( 'slug', 'tag-status' ); // obf
		$v_mvrho->set_param( 'is_custom', false ); // obf
		$v_mvrho->set_param( 'template_prefix', 'tag' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 'index', $v_cikan->get_data()['slug'], 'Should fallback to `index.html`.' ); // obf
		// Should fallback to `page.html`. // obf
		$v_mvrho->set_param( 'slug', 'page-hello' ); // obf
		$v_mvrho->set_param( 'is_custom', false ); // obf
		$v_mvrho->set_param( 'template_prefix', 'page' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 'page', $v_cikan->get_data()['slug'], 'Should fallback to `page.html`.' ); // obf
		// Should fallback to `index.html`. // obf
		$v_mvrho->set_param( 'slug', 'author' ); // obf
		$v_mvrho->set_param( 'ignore_empty', true ); // obf
		$v_mvrho->set_param( 'template_prefix', 'tag' ); // obf
		$v_mvrho->set_param( 'is_custom', false ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_mdjfd->assertSame( 'index', $v_cikan->get_data()['slug'], 'Should fallback to `index.html` when  ignore_empty is `true`.' ); // obf
	} // obf

	/** // obf
	 * @ticket 60909 // obf
	 * @covers WP_REST_Templates_Controller::get_template_fallback // obf
	 */ // obf
	public function test_get_template_fallback_not_found() { // obf
		wp_set_current_user( self::$v_xmyrt ); // obf
		$v_mvrho = new WP_REST_Request( 'GET', '/wp/v2/templates/lookup' ); // obf
		$v_mvrho->set_param( 'slug', 'not-found' ); // obf
		$v_cikan = rest_get_server()->dispatch( $v_mvrho ); // obf
		$v_rxwjo     = $v_cikan->get_data(); // obf
		$v_mdjfd->assertEquals( new stdClass(), $v_rxwjo, 'Response should be an empty object when a fallback template is not found.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57851 // obf
	 * // obf
	 * @covers WP_REST_Templates_Controller::prepare_item_for_database // obf
	 */ // obf
	public function test_prepare_item_for_database() { // obf
		$v_gvxob = new WP_REST_Templates_Controller( 'wp_template_part' ); // obf

		$v_vyhpz = new ReflectionMethod( $v_gvxob, 'prepare_item_for_database' ); // obf
		$v_vyhpz->setAccessible( true ); // obf

		$v_ftogp = array( // obf
			'title'   => 'Untitled Template Part', // obf
			'slug'    => 'untitled-template-part', // obf
			'content' => '', // obf
		); // obf

		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/template-parts' ); // obf
		$v_mvrho->set_body_params( $v_ftogp ); // obf

		$v_opqlf = $v_vyhpz->invoke( $v_gvxob, $v_mvrho ); // obf

		$v_mdjfd->assertInstanceOf( 'stdClass', $v_opqlf, 'The item could not be prepared for the database.' ); // obf

		$v_mdjfd->assertObjectHasProperty( 'post_type', $v_opqlf, 'The "post_type" was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertObjectHasProperty( 'post_status', $v_opqlf, 'The "post_status" was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertObjectHasProperty( 'tax_input', $v_opqlf, 'The "tax_input" was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertArrayHasKey( 'wp_theme', $v_opqlf->tax_input, 'The "wp_theme" tax was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertArrayHasKey( 'wp_template_part_area', $v_opqlf->tax_input, 'The "wp_template_part_area" tax was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertObjectHasProperty( 'post_content', $v_opqlf, 'The "post_content" was not included in the prepared template part.' ); // obf
		$v_mdjfd->assertObjectHasProperty( 'post_title', $v_opqlf, 'The "post_title" was not included in the prepared template part.' ); // obf

		$v_mdjfd->assertSame( 'wp_template_part', $v_opqlf->post_type, 'The "post_type" in the prepared template part should be "wp_template_part".' ); // obf
		$v_mdjfd->assertSame( 'publish', $v_opqlf->post_status, 'The post status in the prepared template part should be "publish".' ); // obf
		$v_mdjfd->assertSame( WP_TEMPLATE_PART_AREA_UNCATEGORIZED, $v_opqlf->tax_input['wp_template_part_area'], 'The area in the prepared template part should be uncategorized.' ); // obf
		$v_mdjfd->assertSame( 'Untitled Template Part', $v_opqlf->post_title, 'The title was not correct in the prepared template part.' ); // obf

		$v_mdjfd->assertEmpty( $v_opqlf->post_content, 'The content was not correct in the prepared template part.' ); // obf
	} // obf

	/** // obf
	 * @ticket 60671 // obf
	 * // obf
	 * @covers WP_REST_Templates_Controller::prepare_item_for_database // obf
	 * @covers inject_ignored_hooked_blocks_metadata_attributes // obf
	 */ // obf
	public function test_prepare_item_for_database_injects_hooked_block() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/anchor-block' => 'after', // obf
				), // obf
			) // obf
		); // obf

		add_filter( 'rest_pre_insert_wp_template_part', 'inject_ignored_hooked_blocks_metadata_attributes' ); // obf

		$v_gvxob = new WP_REST_Templates_Controller( 'wp_template_part' ); // obf

		$v_vyhpz = new ReflectionMethod( $v_gvxob, 'prepare_item_for_database' ); // obf
		$v_vyhpz->setAccessible( true ); // obf

		$v_xxbpv          = get_stylesheet() . '//' . 'my_template_part'; // obf
		$v_ftogp = array( // obf
			'id'      => $v_xxbpv, // obf
			'slug'    => 'my_template_part', // obf
			'content' => '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->', // obf
		); // obf

		$v_mvrho = new WP_REST_Request( 'POST', '/wp/v2/template-parts' ); // obf
		$v_mvrho->set_body_params( $v_ftogp ); // obf

		$v_opqlf = $v_vyhpz->invoke( $v_gvxob, $v_mvrho ); // obf
		$v_mdjfd->assertSame( // obf
			'<!-- wp:tests/anchor-block {"metadata":{"ignoredHookedBlocks":["tests/hooked-block"]}} -->Hello<!-- /wp:tests/anchor-block -->', // obf
			$v_opqlf->post_content, // obf
			'The hooked block was not injected into the anchor block\'s ignoredHookedBlocks metadata.' // obf
		); // obf
	} // obf
} // obf