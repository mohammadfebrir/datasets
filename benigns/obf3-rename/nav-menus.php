

<?php // obf

/** // obf
 * Tests WP_Customize_Nav_Menus. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Nav_Menus extends WP_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_inmoi; // obf

	/** // obf
	 * ID of the administrator user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_gadvd; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_fuubm Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_fuubm ) { // obf
		self::$v_gadvd = $v_fuubm->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up a test case. // obf
	 * // obf
	 * @see WP_UnitTestCase_Base::set_up() // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		wp_set_current_user( self::$v_gadvd ); // obf
		global $v_inmoi; // obf
		$v_ssffg->wp_customize = new WP_Customize_Manager(); // obf
		$v_inmoi       = $v_ssffg->wp_customize; // obf
	} // obf

	/** // obf
	 * Delete the $v_inmoi global when cleaning up scope. // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_inmoi; // obf
		$v_inmoi = null; // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	/** // obf
	 * Filter to add custom menu item types. // obf
	 * // obf
	 * @param array $v_tniio Menu item types. // obf
	 * @return array Menu item types. // obf
	 */ // obf
	public function filter_item_types( $v_tniio ) { // obf
		$v_tniio[] = array( // obf
			'title'      => 'Custom', // obf
			'type_label' => 'Custom Type', // obf
			'type'       => 'custom_type', // obf
			'object'     => 'custom_object', // obf
		); // obf

		return $v_tniio; // obf
	} // obf

	/** // obf
	 * Filter to add custom menu items. // obf
	 * // obf
	 * @param array  $v_tniio       The menu items. // obf
	 * @param string $v_tujht The object type (e.g. taxonomy). // obf
	 * @param string $v_uvton The object name (e.g. category). // obf
	 * @return array Menu items. // obf
	 */ // obf
	public function filter_items( $v_tniio, $v_tujht, $v_uvton ) { // obf
		$v_tniio[] = array( // obf
			'id'         => 'custom-1', // obf
			'title'      => 'Cool beans', // obf
			'type'       => $v_tujht, // obf
			'type_label' => 'Custom Label', // obf
			'object'     => $v_uvton, // obf
			'url'        => home_url( '/cool-beans/' ), // obf
			'classes'    => 'custom-menu-item cool-beans', // obf
		); // obf

		return $v_tniio; // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::__construct() // obf
	 */ // obf
	public function test_construct() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Customize_Manager', $v_uidqq->manager ); // obf

		$v_ssffg->assertTrue( add_filter( 'customize_refresh_nonces', array( $v_uidqq, 'filter_nonces' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'wp_ajax_load-available-menu-items-customizer', array( $v_uidqq, 'ajax_load_available_items' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'wp_ajax_search-available-menu-items-customizer', array( $v_uidqq, 'ajax_search_available_items' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'wp_ajax_customize-nav-menus-insert-auto-draft', array( $v_uidqq, 'ajax_insert_auto_draft_post' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_controls_enqueue_scripts', array( $v_uidqq, 'enqueue_scripts' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_register', array( $v_uidqq, 'customize_register' ) ) ); // obf
		$v_ssffg->assertTrue( add_filter( 'customize_dynamic_setting_args', array( $v_uidqq, 'filter_dynamic_setting_args' ) ) ); // obf
		$v_ssffg->assertTrue( add_filter( 'customize_dynamic_setting_class', array( $v_uidqq, 'filter_dynamic_setting_class' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_controls_print_footer_scripts', array( $v_uidqq, 'print_templates' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_controls_print_footer_scripts', array( $v_uidqq, 'available_items_template' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_preview_init', array( $v_uidqq, 'customize_preview_init' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_preview_init', array( $v_uidqq, 'make_auto_draft_status_previewable' ) ) ); // obf
		$v_ssffg->assertTrue( add_action( 'customize_save_nav_menus_created_posts', array( $v_uidqq, 'save_nav_menus_created_posts' ) ) ); // obf
		$v_ssffg->assertTrue( add_filter( 'customize_dynamic_partial_args', array( $v_uidqq, 'customize_dynamic_partial_args' ) ) ); // obf
	} // obf

	/** // obf
	 * Test that the load_available_items_query method returns a WP_Error object. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_wp_error() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Invalid post type $v_ibjev. // obf
		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'invalid' ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Error', $v_tniio ); // obf
		$v_ssffg->assertSame( 'nav_menus_invalid_post_type', $v_tniio->get_error_code() ); // obf

		// Invalid taxonomy $v_ibjev. // obf
		$v_tniio = $v_uidqq->load_available_items_query( 'taxonomy', 'invalid' ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Error', $v_tniio ); // obf
		$v_ssffg->assertSame( 'invalid_taxonomy', $v_tniio->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method maybe returns the home page item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_maybe_returns_home() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => 'home', // obf
			'title'      => _x( 'Home', 'nav menu home label' ), // obf
			'type'       => 'custom', // obf
			'type_label' => __( 'Custom Link' ), // obf
			'object'     => '', // obf
			'url'        => home_url(), // obf
		); // obf

		// Create pages. // obf
		self::factory()->post->create_many( 12, array( 'post_type' => 'page' ) ); // obf

		// Home is included in menu items when page is zero. // obf
		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'page', 0 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf

		// Home is not included in menu items when page is larger than zero. // obf
		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'page', 1 ); // obf
		$v_ssffg->assertNotEmpty( $v_tniio ); // obf
		$v_ssffg->assertNotContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method returns post item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_post_item_with_page_number() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Create page. // obf
		$v_fihdh = self::factory()->post->create( array( 'post_title' => 'Post Title' ) ); // obf

		// Create pages. // obf
		self::factory()->post->create_many( 10 ); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => "post-{$v_fihdh}", // obf
			'title'      => 'Post Title', // obf
			'type'       => 'post_type', // obf
			'type_label' => 'Post', // obf
			'object'     => 'post', // obf
			'object_id'  => (int) $v_fihdh, // obf
			'url'        => get_permalink( (int) $v_fihdh ), // obf
		); // obf

		// Offset the query and get the second page of menu items. // obf
		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'post', 1 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method returns page item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_page_item() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Create page. // obf
		$v_hjnol = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Page Title', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => "post-{$v_hjnol}", // obf
			'title'      => 'Page Title', // obf
			'type'       => 'post_type', // obf
			'type_label' => 'Page', // obf
			'object'     => 'page', // obf
			'object_id'  => (int) $v_hjnol, // obf
			'url'        => get_permalink( (int) $v_hjnol ), // obf
		); // obf

		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'page', 0 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method returns post item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_post_item() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Create post. // obf
		$v_fihdh = self::factory()->post->create( array( 'post_title' => 'Post Title' ) ); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => "post-{$v_fihdh}", // obf
			'title'      => 'Post Title', // obf
			'type'       => 'post_type', // obf
			'type_label' => 'Post', // obf
			'object'     => 'post', // obf
			'object_id'  => (int) $v_fihdh, // obf
			'url'        => get_permalink( (int) $v_fihdh ), // obf
		); // obf

		$v_tniio = $v_uidqq->load_available_items_query( 'post_type', 'post', 0 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method returns term item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_term_item() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Create term. // obf
		$v_gjeua = self::factory()->category->create( array( 'name' => 'Term Title' ) ); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => "term-{$v_gjeua}", // obf
			'title'      => 'Term Title', // obf
			'type'       => 'taxonomy', // obf
			'type_label' => 'Category', // obf
			'object'     => 'category', // obf
			'object_id'  => (int) $v_gjeua, // obf
			'url'        => get_term_link( (int) $v_gjeua, 'category' ), // obf
		); // obf

		$v_tniio = $v_uidqq->load_available_items_query( 'taxonomy', 'category', 0 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the load_available_items_query method returns custom item. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::load_available_items_query() // obf
	 */ // obf
	public function test_load_available_items_query_returns_custom_item() { // obf
		add_filter( 'customize_nav_menu_available_item_types', array( $v_ssffg, 'filter_item_types' ) ); // obf
		add_filter( 'customize_nav_menu_available_items', array( $v_ssffg, 'filter_items' ), 10, 4 ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'id'         => 'custom-1', // obf
			'title'      => 'Cool beans', // obf
			'type'       => 'custom_type', // obf
			'type_label' => 'Custom Label', // obf
			'object'     => 'custom_object', // obf
			'url'        => home_url( '/cool-beans/' ), // obf
			'classes'    => 'custom-menu-item cool-beans', // obf
		); // obf

		$v_tniio = $v_uidqq->load_available_items_query( 'custom_type', 'custom_object', 0 ); // obf
		$v_ssffg->assertContains( $v_zddgw, $v_tniio ); // obf
	} // obf

	/** // obf
	 * Test the search_available_items_query method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::search_available_items_query() // obf
	 */ // obf
	public function test_search_available_items_query() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf

		// Create posts. // obf
		$v_dqoaj   = array(); // obf
		$v_dqoaj[] = self::factory()->post->create( array( 'post_title' => 'Search & Test' ) ); // obf
		$v_dqoaj[] = self::factory()->post->create( array( 'post_title' => 'Some Other Title' ) ); // obf

		// Create terms. // obf
		$v_jgeyt   = array(); // obf
		$v_jgeyt[] = self::factory()->category->create( array( 'name' => 'Dogs Are Cool' ) ); // obf
		$v_jgeyt[] = self::factory()->category->create( array( 'name' => 'Cats Drool' ) ); // obf

		// Test empty results. // obf
		$v_zddgw = array(); // obf
		$v_rzeyd  = $v_uidqq->search_available_items_query( // obf
			array( // obf
				'pagenum' => 1, // obf
				's'       => 'This Does NOT Exist', // obf
			) // obf
		); // obf
		$v_ssffg->assertSame( $v_zddgw, $v_rzeyd ); // obf

		// Test posts. // obf
		foreach ( $v_dqoaj as $v_fihdh ) { // obf
			$v_zddgw = array( // obf
				'id'         => 'post-' . $v_fihdh, // obf
				'title'      => html_entity_decode( get_the_title( $v_fihdh ) ), // obf
				'type'       => 'post_type', // obf
				'type_label' => get_post_type_object( 'post' )->labels->singular_name, // obf
				'object'     => 'post', // obf
				'object_id'  => (int) $v_fihdh, // obf
				'url'        => get_permalink( (int) $v_fihdh ), // obf
			); // obf
			wp_set_object_terms( $v_fihdh, $v_jgeyt, 'category' ); // obf
			$v_uwvex  = $v_fihdh === $v_dqoaj[0] ? 'test & search' : 'other title'; // obf
			$v_lwkrn       = sanitize_text_field( wp_unslash( $v_uwvex ) ); // obf
			$v_rzeyd = $v_uidqq->search_available_items_query( // obf
				array( // obf
					'pagenum' => 1, // obf
					's'       => $v_lwkrn, // obf
				) // obf
			); // obf
			$v_ssffg->assertSame( $v_zddgw, $v_rzeyd[0] ); // obf
		} // obf

		// Test terms. // obf
		foreach ( $v_jgeyt as $v_gjeua ) { // obf
			$v_wmfrc     = get_term_by( 'id', $v_gjeua, 'category' ); // obf
			$v_zddgw = array( // obf
				'id'         => 'term-' . $v_gjeua, // obf
				'title'      => $v_wmfrc->name, // obf
				'type'       => 'taxonomy', // obf
				'type_label' => get_taxonomy( 'category' )->labels->singular_name, // obf
				'object'     => 'category', // obf
				'object_id'  => (int) $v_gjeua, // obf
				'url'        => get_term_link( (int) $v_gjeua, 'category' ), // obf
			); // obf
			$v_lwkrn        = sanitize_text_field( wp_unslash( $v_wmfrc->name ) ); // obf
			$v_rzeyd  = $v_uidqq->search_available_items_query( // obf
				array( // obf
					'pagenum' => 1, // obf
					's'       => $v_lwkrn, // obf
				) // obf
			); // obf
			$v_ssffg->assertSame( $v_zddgw, $v_rzeyd[0] ); // obf
		} // obf

		// Test filtered results. // obf
		$v_rzeyd = $v_uidqq->search_available_items_query( // obf
			array( // obf
				'pagenum' => 1, // obf
				's'       => 'cat', // obf
			) // obf
		); // obf
		$v_ssffg->assertCount( 2, $v_rzeyd ); // Category terms Cats Drool and Uncategorized. // obf
		$v_xcjav = $v_ssffg->filter_count_customize_nav_menu_searched_items; // obf
		add_filter( 'customize_nav_menu_searched_items', array( $v_ssffg, 'filter_search' ), 10, 2 ); // obf
		$v_rzeyd = $v_uidqq->search_available_items_query( // obf
			array( // obf
				'pagenum' => 1, // obf
				's'       => 'cat', // obf
			) // obf
		); // obf
		$v_ssffg->assertSame( $v_xcjav + 1, $v_ssffg->filter_count_customize_nav_menu_searched_items ); // obf
		$v_ssffg->assertIsArray( $v_rzeyd ); // obf
		$v_ssffg->assertCount( 3, $v_rzeyd ); // obf
		remove_filter( 'customize_nav_menu_searched_items', array( $v_ssffg, 'filter_search' ), 10 ); // obf

		// Test home. // obf
		$v_jgrcd   = _x( 'Home', 'nav menu home label' ); // obf
		$v_rzeyd = $v_uidqq->search_available_items_query( // obf
			array( // obf
				'pagenum' => 1, // obf
				's'       => $v_jgrcd, // obf
			) // obf
		); // obf
		$v_ssffg->assertCount( 1, $v_rzeyd ); // obf
		$v_ssffg->assertSame( 'home', $v_rzeyd[0]['id'] ); // obf
		$v_ssffg->assertSame( 'custom', $v_rzeyd[0]['type'] ); // obf
	} // obf

	/* // obf
	 * Tests that the search_available_items_query method should return term items // obf
	 * not assigned to any posts. // obf
	 * // obf
	 * @ticket 45298 // obf
	 */ // obf
	public function test_search_available_items_query_should_return_unassigned_term_items() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'labels' => array( // obf
					'name' => 'Tests Taxonomy', // obf
				), // obf
			) // obf
		); // obf

		$v_gjeua = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foobar', // obf
			) // obf
		); // obf

		// Expected menu item array. // obf
		$v_zddgw = array( // obf
			'title'      => 'foobar', // obf
			'id'         => "term-{$v_gjeua}", // obf
			'type'       => 'taxonomy', // obf
			'type_label' => 'Tests Taxonomy', // obf
			'object'     => 'wptests_tax', // obf
			'object_id'  => (int) $v_gjeua, // obf
			'url'        => get_term_link( (int) $v_gjeua, '' ), // obf
		); // obf

		$v_rzeyd = $v_uidqq->search_available_items_query( // obf
			array( // obf
				'pagenum' => 1, // obf
				's'       => 'foo', // obf
			) // obf
		); // obf

		$v_ssffg->assertSameSets( $v_zddgw, $v_rzeyd[0] ); // obf
	} // obf

	/** // obf
	 * Count for number of times customize_nav_menu_searched_items filtered. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_gyhfu = 0; // obf

	/** // obf
	 * Filter to search menu items. // obf
	 * // obf
	 * @param array $v_tniio Items. // obf
	 * @param array $v_fgtmm { // obf
	 *     Search args. // obf
	 * // obf
	 *     @type int    $v_jdeis Page number. // obf
	 *     @type string $v_lwkrn       Search string. // obf
	 * } // obf
	 * @return array Items. // obf
	 */ // obf
	public function filter_search( $v_tniio, $v_fgtmm ) { // obf
		$v_ssffg->assertIsArray( $v_tniio ); // obf
		$v_ssffg->assertIsArray( $v_fgtmm ); // obf
		$v_ssffg->assertArrayHasKey( 's', $v_fgtmm ); // obf
		$v_ssffg->assertArrayHasKey( 'pagenum', $v_fgtmm ); // obf
		$v_ssffg->filter_count_customize_nav_menu_searched_items += 1; // obf

		if ( 'cat' === $v_fgtmm['s'] ) { // obf
			array_unshift( // obf
				$v_tniio, // obf
				array( // obf
					'id'         => 'home', // obf
					'title'      => 'COOL CAT!', // obf
					'type'       => 'custom', // obf
					'type_label' => __( 'Custom Link' ), // obf
					'object'     => '', // obf
					'url'        => home_url( '/cool-cat' ), // obf
				) // obf
			); // obf
		} // obf
		return $v_tniio; // obf
	} // obf

	/** // obf
	 * Test the enqueue method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::enqueue_scripts() // obf
	 */ // obf
	public function test_enqueue_scripts() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		$v_uidqq->enqueue_scripts(); // obf
		$v_ssffg->assertTrue( wp_script_is( 'customize-nav-menus' ) ); // obf

		wp_dequeue_style( 'customize-nav-menus' ); // obf
		wp_dequeue_script( 'customize-nav-menus' ); // obf
	} // obf

	/** // obf
	 * Test the filter_dynamic_setting_args method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::filter_dynamic_setting_args() // obf
	 */ // obf
	public function test_filter_dynamic_setting_args() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_zddgw = array( 'type' => 'nav_menu_item' ); // obf
		$v_rzeyd  = $v_uidqq->filter_dynamic_setting_args( $v_ssffg->wp_customize, 'nav_menu_item[123]' ); // obf
		$v_ssffg->assertSame( $v_zddgw['type'], $v_rzeyd['type'] ); // obf

		$v_zddgw = array( 'type' => 'nav_menu' ); // obf
		$v_rzeyd  = $v_uidqq->filter_dynamic_setting_args( $v_ssffg->wp_customize, 'nav_menu[123]' ); // obf
		$v_ssffg->assertSame( $v_zddgw['type'], $v_rzeyd['type'] ); // obf
	} // obf

	/** // obf
	 * Test the filter_dynamic_setting_class method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::filter_dynamic_setting_class() // obf
	 */ // obf
	public function test_filter_dynamic_setting_class() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_zddgw = 'WP_Customize_Nav_Menu_Item_Setting'; // obf
		$v_rzeyd  = $v_uidqq->filter_dynamic_setting_class( 'WP_Customize_Setting', 'nav_menu_item[123]', array( 'type' => 'nav_menu_item' ) ); // obf
		$v_ssffg->assertSame( $v_zddgw, $v_rzeyd ); // obf

		$v_zddgw = 'WP_Customize_Nav_Menu_Setting'; // obf
		$v_rzeyd  = $v_uidqq->filter_dynamic_setting_class( 'WP_Customize_Setting', 'nav_menu[123]', array( 'type' => 'nav_menu' ) ); // obf
		$v_ssffg->assertSame( $v_zddgw, $v_rzeyd ); // obf
	} // obf

	/** // obf
	 * Test the customize_register method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::customize_register() // obf
	 */ // obf
	public function test_customize_register() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_bgfjc = wp_create_nav_menu( 'Primary' ); // obf
		$v_fihdh = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_vwzwu = wp_update_nav_menu_item( // obf
			$v_bgfjc, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_fihdh, // obf
				'menu-item-title'     => 'Hello World', // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Customize_Nav_Menu_Item_Setting', $v_ssffg->wp_customize->get_setting( "nav_menu_item[$v_vwzwu]" ) ); // obf
		$v_ssffg->assertSame( 'Primary', $v_ssffg->wp_customize->get_section( "nav_menu[$v_bgfjc]" )->title ); // obf
		$v_ssffg->assertSame( 'Hello World', $v_ssffg->wp_customize->get_control( "nav_menu_item[$v_vwzwu]" )->label ); // obf

		$v_lipee = $v_ssffg->wp_customize->get_setting( 'nav_menus_created_posts' ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Customize_Filter_Setting', $v_lipee ); // obf
		$v_ssffg->assertSame( 'postMessage', $v_lipee->transport ); // obf
		$v_ssffg->assertSame( array(), $v_lipee->default ); // obf
		$v_ssffg->assertSame( array( $v_ssffg->wp_customize->nav_menus, 'sanitize_nav_menus_created_posts' ), $v_lipee->sanitize_callback ); // obf
	} // obf

	/** // obf
	 * Test the intval_base10 method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::intval_base10() // obf
	 */ // obf
	public function test_intval_base10() { // obf

		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_ssffg->assertSame( 2, $v_uidqq->intval_base10( 2 ) ); // obf
		$v_ssffg->assertSame( 4, $v_uidqq->intval_base10( 4.1 ) ); // obf
		$v_ssffg->assertSame( 4, $v_uidqq->intval_base10( '4' ) ); // obf
		$v_ssffg->assertSame( 4, $v_uidqq->intval_base10( '04' ) ); // obf
		$v_ssffg->assertSame( 42, $v_uidqq->intval_base10( +42 ) ); // obf
		$v_ssffg->assertSame( -42, $v_uidqq->intval_base10( -42 ) ); // obf
		$v_ssffg->assertSame( 26, $v_uidqq->intval_base10( 0x1A ) ); // obf
		$v_ssffg->assertSame( 0, $v_uidqq->intval_base10( array() ) ); // obf
	} // obf

	/** // obf
	 * Test the available_item_types method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::available_item_types() // obf
	 */ // obf
	public function test_available_item_types() { // obf

		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_zddgw = array( // obf
			array( // obf
				'title'      => 'Posts', // obf
				'type_label' => __( 'Post' ), // obf
				'type'       => 'post_type', // obf
				'object'     => 'post', // obf
			), // obf
			array( // obf
				'title'      => 'Pages', // obf
				'type_label' => __( 'Page' ), // obf
				'type'       => 'post_type', // obf
				'object'     => 'page', // obf
			), // obf
			array( // obf
				'title'      => 'Categories', // obf
				'type_label' => __( 'Category' ), // obf
				'type'       => 'taxonomy', // obf
				'object'     => 'category', // obf
			), // obf
			array( // obf
				'title'      => 'Tags', // obf
				'type_label' => __( 'Tag' ), // obf
				'type'       => 'taxonomy', // obf
				'object'     => 'post_tag', // obf
			), // obf
		); // obf

		if ( current_theme_supports( 'post-formats' ) ) { // obf
			$v_zddgw[] = array( // obf
				'title'      => 'Format', // obf
				'type_label' => __( 'Format' ), // obf
				'type'       => 'taxonomy', // obf
				'object'     => 'post_format', // obf
			); // obf
		} // obf

		$v_ssffg->assertSame( $v_zddgw, $v_uidqq->available_item_types() ); // obf

		register_taxonomy( 'wptests_tax', array( 'post' ), array( 'labels' => array( 'name' => 'Foo' ) ) ); // obf
		$v_zddgw[] = array( // obf
			'title'      => 'Foo', // obf
			'type_label' => 'Foo', // obf
			'type'       => 'taxonomy', // obf
			'object'     => 'wptests_tax', // obf
		); // obf

		$v_ssffg->assertSame( $v_zddgw, $v_uidqq->available_item_types() ); // obf

		$v_zddgw[] = array( // obf
			'title'      => 'Custom', // obf
			'type_label' => 'Custom Type', // obf
			'type'       => 'custom_type', // obf
			'object'     => 'custom_object', // obf
		); // obf

		add_filter( 'customize_nav_menu_available_item_types', array( $v_ssffg, 'filter_item_types' ) ); // obf
		$v_ssffg->assertSame( $v_zddgw, $v_uidqq->available_item_types() ); // obf
		remove_filter( 'customize_nav_menu_available_item_types', array( $v_ssffg, 'filter_item_types' ) ); // obf
	} // obf

	/** // obf
	 * Test insert_auto_draft_post method. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::insert_auto_draft_post // obf
	 */ // obf
	public function test_insert_auto_draft_post() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_nnkpu = $v_uidqq->insert_auto_draft_post( array() ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Error', $v_nnkpu ); // obf
		$v_ssffg->assertSame( 'unknown_post_type', $v_nnkpu->get_error_code() ); // obf

		// Non-existent post types allowed as of #39610. // obf
		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Non-existent', // obf
				'post_type'  => 'nonexistent', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		$v_ssffg->assertSame( $v_ssffg->wp_customize->changeset_uuid(), get_post_meta( $v_nnkpu->ID, '_customize_changeset_uuid', true ) ); // obf

		$v_nnkpu = $v_uidqq->insert_auto_draft_post( array( 'post_type' => 'post' ) ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Error', $v_nnkpu ); // obf
		$v_ssffg->assertSame( 'empty_title', $v_nnkpu->get_error_code() ); // obf

		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'Bad', // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Error', $v_nnkpu ); // obf
		$v_ssffg->assertSame( 'status_forbidden', $v_nnkpu->get_error_code() ); // obf

		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Hello World', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		$v_ssffg->assertSame( 'Hello World', $v_nnkpu->post_title ); // obf
		$v_ssffg->assertSame( '', $v_nnkpu->post_name ); // obf
		$v_ssffg->assertSame( 'hello-world', get_post_meta( $v_nnkpu->ID, '_customize_draft_post_name', true ) ); // obf
		$v_ssffg->assertSame( $v_ssffg->wp_customize->changeset_uuid(), get_post_meta( $v_nnkpu->ID, '_customize_changeset_uuid', true ) ); // obf
		$v_ssffg->assertSame( 'post', $v_nnkpu->post_type ); // obf

		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_type'    => 'post', // obf
				'post_name'    => 'greetings-world', // obf
				'post_content' => 'Hi World', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		$v_ssffg->assertSame( 'Hello World', $v_nnkpu->post_title ); // obf
		$v_ssffg->assertSame( 'post', $v_nnkpu->post_type ); // obf
		$v_ssffg->assertSame( '', $v_nnkpu->post_name ); // obf
		$v_ssffg->assertSame( 'greetings-world', get_post_meta( $v_nnkpu->ID, '_customize_draft_post_name', true ) ); // obf
		$v_ssffg->assertSame( $v_ssffg->wp_customize->changeset_uuid(), get_post_meta( $v_nnkpu->ID, '_customize_changeset_uuid', true ) ); // obf
		$v_ssffg->assertSame( 'Hi World', $v_nnkpu->post_content ); // obf
	} // obf

	/** // obf
	 * Test the print_templates method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::print_templates() // obf
	 */ // obf
	public function test_print_templates() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		ob_start(); // obf
		$v_uidqq->print_templates(); // obf
		$v_fdoyh = ob_get_clean(); // obf

		$v_zddgw = sprintf( // obf
			'<button type="button" class="menus-move-up">%1$v_lwkrn</button><button type="button" class="menus-move-down">%2$v_lwkrn</button><button type="button" class="menus-move-left">%3$v_lwkrn</button><button type="button" class="menus-move-right">%4$v_lwkrn</button>', // obf
			esc_html( 'Move up' ), // obf
			esc_html( 'Move down' ), // obf
			esc_html( 'Move one level up' ), // obf
			esc_html( 'Move one level down' ) // obf
		); // obf

		$v_ssffg->assertStringContainsString( $v_zddgw, $v_fdoyh ); // obf
	} // obf

	/** // obf
	 * Test the available_items_template method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::available_items_template() // obf
	 */ // obf
	public function test_available_items_template() { // obf
		add_filter( 'customize_nav_menu_available_item_types', array( $v_ssffg, 'filter_item_types' ) ); // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		ob_start(); // obf
		$v_uidqq->available_items_template(); // obf
		$v_fdoyh = ob_get_clean(); // obf

		$v_zddgw = sprintf( 'Customizing &#9656; %s', esc_html( $v_ssffg->wp_customize->get_panel( 'nav_menus' )->title ) ); // obf

		$v_ssffg->assertStringContainsString( $v_zddgw, $v_fdoyh ); // obf

		$v_kpxrx = get_post_types( array( 'show_in_nav_menus' => true ), 'object' ); // obf

		$v_ssffg->assertNotEmpty( $v_kpxrx ); // obf

		foreach ( $v_kpxrx as $v_ywpkk ) { // obf
			$v_ssffg->assertStringContainsString( 'available-menu-items-post_type-' . esc_attr( $v_ywpkk->name ), $v_fdoyh ); // obf
			$v_ssffg->assertMatchesRegularExpression( '#<h4 class="accordion-section-title".*>\s*<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls=".*">\s*' . esc_html( $v_ywpkk->labels->name ) . '#', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-type="post_type"', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-object="' . esc_attr( $v_ywpkk->name ) . '"', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-type_label="' . esc_attr( $v_ywpkk->labels->singular_name ) . '"', $v_fdoyh ); // obf
		} // obf

		$v_pvwal = get_taxonomies( array( 'show_in_nav_menus' => true ), 'object' ); // obf

		$v_ssffg->assertNotEmpty( $v_pvwal ); // obf

		foreach ( $v_pvwal as $v_zgwat ) { // obf
			$v_ssffg->assertStringContainsString( 'available-menu-items-taxonomy-' . esc_attr( $v_zgwat->name ), $v_fdoyh ); // obf
			$v_ssffg->assertMatchesRegularExpression( '#<h4 class="accordion-section-title".*>\s*<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls=".*">\s*' . esc_html( $v_zgwat->labels->name ) . '#', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-type="taxonomy"', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-object="' . esc_attr( $v_zgwat->name ) . '"', $v_fdoyh ); // obf
			$v_ssffg->assertStringContainsString( 'data-type_label="' . esc_attr( $v_zgwat->labels->singular_name ) . '"', $v_fdoyh ); // obf
		} // obf

		$v_ssffg->assertStringContainsString( 'available-menu-items-custom_type', $v_fdoyh ); // obf
		$v_ssffg->assertMatchesRegularExpression( '#<h4 class="accordion-section-title".*>\s*<button type="button" class="accordion-trigger" aria-expanded="false" aria-controls=".*">\s*Custom#', $v_fdoyh ); // obf
		$v_ssffg->assertStringContainsString( 'data-type="custom_type"', $v_fdoyh ); // obf
		$v_ssffg->assertStringContainsString( 'data-object="custom_object"', $v_fdoyh ); // obf
		$v_ssffg->assertStringContainsString( 'data-type_label="Custom Type"', $v_fdoyh ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menus::customize_dynamic_partial_args(). // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::customize_dynamic_partial_args() // obf
	 */ // obf
	public function test_customize_dynamic_partial_args() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf

		$v_fgtmm = apply_filters( 'customize_dynamic_partial_args', false, 'nav_menu_instance[68b329da9893e34099c7d8ad5cb9c940]' ); // obf
		$v_ssffg->assertIsArray( $v_fgtmm ); // obf
		$v_ssffg->assertSame( 'nav_menu_instance', $v_fgtmm['type'] ); // obf
		$v_ssffg->assertSame( array( $v_ssffg->wp_customize->nav_menus, 'render_nav_menu_partial' ), $v_fgtmm['render_callback'] ); // obf
		$v_ssffg->assertTrue( $v_fgtmm['container_inclusive'] ); // obf

		$v_fgtmm = apply_filters( 'customize_dynamic_partial_args', array( 'fallback_refresh' => false ), 'nav_menu_instance[4099c7d8ad5cb9c94068b329da9893e3]' ); // obf
		$v_ssffg->assertIsArray( $v_fgtmm ); // obf
		$v_ssffg->assertSame( 'nav_menu_instance', $v_fgtmm['type'] ); // obf
		$v_ssffg->assertSame( array( $v_ssffg->wp_customize->nav_menus, 'render_nav_menu_partial' ), $v_fgtmm['render_callback'] ); // obf
		$v_ssffg->assertTrue( $v_fgtmm['container_inclusive'] ); // obf
		$v_ssffg->assertFalse( $v_fgtmm['fallback_refresh'] ); // obf
	} // obf

	/** // obf
	 * Test the customize_preview_init method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::customize_preview_init() // obf
	 */ // obf
	public function test_customize_preview_init() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_uidqq->customize_preview_init(); // obf
		$v_ssffg->assertSame( 10, has_action( 'wp_enqueue_scripts', array( $v_uidqq, 'customize_preview_enqueue_deps' ) ) ); // obf
		$v_ssffg->assertSame( 1000, has_filter( 'wp_nav_menu_args', array( $v_uidqq, 'filter_wp_nav_menu_args' ) ) ); // obf
		$v_ssffg->assertSame( 10, has_filter( 'wp_nav_menu', array( $v_uidqq, 'filter_wp_nav_menu' ) ) ); // obf
	} // obf

	/** // obf
	 * Test make_auto_draft_status_previewable. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::make_auto_draft_status_previewable // obf
	 */ // obf
	public function test_make_auto_draft_status_previewable() { // obf
		global $v_poihn; // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		$v_uidqq->make_auto_draft_status_previewable(); // obf
		$v_ssffg->assertTrue( $v_poihn['auto-draft']->protected ); // obf
	} // obf

	/** // obf
	 * Test sanitize_nav_menus_created_posts. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::sanitize_nav_menus_created_posts // obf
	 */ // obf
	public function test_sanitize_nav_menus_created_posts() { // obf
		$v_uidqq                 = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		$v_wuqxp   = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf
		$v_eyrpr        = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		$v_tzkne = self::$v_gadvd; // obf

		$v_xzcyy   = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Contributor Post', // obf
				'post_type'   => 'post', // obf
				'post_author' => $v_wuqxp, // obf
			) // obf
		); // obf
		$v_cwemr        = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Author Post', // obf
				'post_type'   => 'post', // obf
				'post_author' => $v_eyrpr, // obf
			) // obf
		); // obf
		$v_lbkxt = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Admin Post', // obf
				'post_type'   => 'post', // obf
				'post_author' => $v_tzkne, // obf
			) // obf
		); // obf

		$v_xmfvm = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_title'  => 'Draft', // obf
				'post_author' => $v_tzkne, // obf
			) // obf
		); // obf

		$v_gvvia = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_title'  => 'Private', // obf
				'post_author' => $v_tzkne, // obf
			) // obf
		); // obf

		$v_kjefh = array( // obf
			'bad', // obf
			$v_xzcyy, // obf
			$v_cwemr, // obf
			$v_lbkxt, // obf
			$v_xmfvm, // obf
			$v_gvvia, // obf
		); // obf

		wp_set_current_user( $v_wuqxp ); // obf
		$v_pklkg = $v_uidqq->sanitize_nav_menus_created_posts( $v_kjefh ); // obf
		$v_ssffg->assertSame( array(), $v_pklkg ); // obf

		wp_set_current_user( $v_eyrpr ); // obf
		$v_pklkg = $v_uidqq->sanitize_nav_menus_created_posts( $v_kjefh ); // obf
		$v_ssffg->assertSame( array( $v_cwemr ), $v_pklkg ); // obf

		wp_set_current_user( $v_tzkne ); // obf
		$v_pklkg = $v_uidqq->sanitize_nav_menus_created_posts( $v_kjefh ); // obf
		$v_ssffg->assertSame( array( $v_xzcyy, $v_cwemr, $v_lbkxt, $v_xmfvm ), $v_pklkg ); // obf
	} // obf

	/** // obf
	 * Test save_nav_menus_created_posts. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::save_nav_menus_created_posts // obf
	 */ // obf
	public function test_save_nav_menus_created_posts() { // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf

		$v_dqoaj = array(); // obf

		// Auto-draft. // obf
		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Auto Draft', // obf
				'post_type'  => 'post', // obf
				'post_name'  => 'auto-draft-1', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		$v_dqoaj[] = $v_nnkpu->ID; // obf

		// Draft. // obf
		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Draft', // obf
				'post_type'  => 'post', // obf
				'post_name'  => 'auto-draft-2', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_nnkpu->ID, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_dqoaj[] = $v_nnkpu->ID; // obf

		$v_oqplr = $v_dqoaj; // obf

		// Private (this will exclude it from being considered a stub). // obf
		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Private', // obf
				'post_type'  => 'post', // obf
				'post_name'  => 'auto-draft-3', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_nnkpu->ID, // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf
		$v_dqoaj[]      = $v_nnkpu->ID; // obf
		$v_gvvia = $v_nnkpu->ID; // obf

		// Trashed (this will exclude it from being considered a stub). // obf
		$v_nnkpu = $v_uidqq->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Trash', // obf
				'post_type'  => 'post', // obf
				'post_name'  => 'auto-draft-4', // obf
			) // obf
		); // obf
		$v_ssffg->assertInstanceOf( 'WP_Post', $v_nnkpu ); // obf
		wp_trash_post( $v_nnkpu->ID ); // obf
		$v_dqoaj[]      = $v_nnkpu->ID; // obf
		$v_oypjt = $v_nnkpu->ID; // obf

		$v_qxhdj = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_ezpqz = 'nav_menus_created_posts'; // obf
		$v_ssffg->wp_customize->set_post_value( $v_ezpqz, array_merge( $v_dqoaj, array( $v_qxhdj ) ) ); // obf
		$v_natxn = $v_ssffg->wp_customize->get_setting( $v_ezpqz ); // obf
		$v_ssffg->assertInstanceOf( 'WP_Customize_Filter_Setting', $v_natxn ); // obf
		$v_ssffg->assertSame( array( $v_uidqq, 'sanitize_nav_menus_created_posts' ), $v_natxn->sanitize_callback ); // obf
		$v_ssffg->assertSame( $v_oqplr, $v_natxn->post_value() ); // obf
		$v_ssffg->assertArrayNotHasKey( $v_gvvia, $v_dqoaj ); // obf
		$v_ssffg->assertArrayNotHasKey( $v_oypjt, $v_dqoaj ); // obf

		$v_ssffg->assertSame( 'auto-draft', get_post_status( $v_oqplr[0] ) ); // obf
		$v_ssffg->assertSame( 'draft', get_post_status( $v_oqplr[1] ) ); // obf
		foreach ( $v_oqplr as $v_fihdh ) { // obf
			$v_ssffg->assertEmpty( get_post( $v_fihdh )->post_name ); // obf
			$v_ssffg->assertNotEmpty( get_post_meta( $v_fihdh, '_customize_draft_post_name', true ) ); // obf
		} // obf

		$v_xkilt = did_action( 'customize_save_nav_menus_created_posts' ); // obf
		$v_natxn->save(); // obf
		$v_ssffg->assertSame( $v_xkilt + 1, did_action( 'customize_save_nav_menus_created_posts' ) ); // obf
		foreach ( $v_oqplr as $v_fihdh ) { // obf
			$v_ssffg->assertSame( 'publish', get_post_status( $v_fihdh ) ); // obf
			$v_ssffg->assertMatchesRegularExpression( '/^auto-draft-\d+$/', get_post( $v_fihdh )->post_name ); // obf
			$v_ssffg->assertEmpty( get_post_meta( $v_fihdh, '_customize_draft_post_name', true ) ); // obf
		} // obf

		$v_ssffg->assertSame( 'private', get_post_status( $v_gvvia ) ); // obf
		$v_ssffg->assertSame( 'trash', get_post_status( $v_oypjt ) ); // obf

		// Ensure that unique slugs were assigned. // obf
		$v_ystwv      = array_map( 'get_post', $v_oqplr ); // obf
		$v_ouzia = wp_list_pluck( $v_ystwv, 'post_name' ); // obf
		$v_ssffg->assertSameSets( $v_ouzia, array_unique( $v_ouzia ) ); // obf
	} // obf

	/** // obf
	 * Test the filter_wp_nav_menu_args method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::filter_wp_nav_menu_args() // obf
	 */ // obf
	public function test_filter_wp_nav_menu_args() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq   = $v_ssffg->wp_customize->nav_menus; // obf
		$v_bgfjc = wp_create_nav_menu( 'Foo' ); // obf

		$v_rzeyd = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'menu'        => $v_bgfjc, // obf
				'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
			) // obf
		); // obf
		$v_ssffg->assertArrayHasKey( 'customize_preview_nav_menus_args', $v_rzeyd ); // obf
		$v_ssffg->assertTrue( $v_rzeyd['can_partial_refresh'] ); // obf

		$v_rzeyd = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => false, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => new Walker_Nav_Menu(), // obf
				'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
			) // obf
		); // obf
		$v_ssffg->assertFalse( $v_rzeyd['can_partial_refresh'] ); // obf
		$v_ssffg->assertArrayHasKey( 'customize_preview_nav_menus_args', $v_rzeyd ); // obf
		$v_ssffg->assertSame( 'wp_page_menu', $v_rzeyd['fallback_cb'] ); // obf

		$v_mzvyz = get_term( wp_create_nav_menu( 'Bar' ) ); // obf
		$v_rzeyd       = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'menu'        => $v_mzvyz, // obf
				'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
			) // obf
		); // obf
		$v_ssffg->assertTrue( $v_rzeyd['can_partial_refresh'] ); // obf
		$v_ssffg->assertArrayHasKey( 'customize_preview_nav_menus_args', $v_rzeyd ); // obf
		$v_ssffg->assertSame( $v_mzvyz->term_id, $v_rzeyd['customize_preview_nav_menus_args']['menu'] ); // obf

		$v_rzeyd = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'menu'        => $v_bgfjc, // obf
				'container'   => 'div', // obf
				'items_wrap'  => '%3$v_lwkrn', // obf
			) // obf
		); // obf
		$v_ssffg->assertTrue( $v_rzeyd['can_partial_refresh'] ); // obf

		$v_rzeyd = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'menu'        => $v_bgfjc, // obf
				'container'   => false, // obf
				'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
			) // obf
		); // obf
		$v_ssffg->assertTrue( $v_rzeyd['can_partial_refresh'] ); // obf

		$v_rzeyd = $v_uidqq->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'menu'        => $v_bgfjc, // obf
				'container'   => false, // obf
				'items_wrap'  => '%3$v_lwkrn', // obf
			) // obf
		); // obf
		$v_ssffg->assertFalse( $v_rzeyd['can_partial_refresh'] ); // obf
	} // obf

	/** // obf
	 * Test the filter_wp_nav_menu method. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::filter_wp_nav_menu // obf
	 * @covers WP_Customize_Nav_Menus::filter_wp_nav_menu_args // obf
	 */ // obf
	public function test_filter_wp_nav_menu() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_fzqnp = array( // obf
			'echo'        => true, // obf
			'menu'        => wp_create_nav_menu( 'Foo' ), // obf
			'fallback_cb' => 'wp_page_menu', // obf
			'walker'      => '', // obf
			'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
		); // obf

		// Add global namespace prefix to check #41488. // obf
		$v_fzqnp['fallback_cb'] = '\\' . $v_fzqnp['fallback_cb']; // obf

		$v_fgtmm = $v_uidqq->filter_wp_nav_menu_args( $v_fzqnp ); // obf

		ob_start(); // obf
		wp_nav_menu( $v_fgtmm ); // obf
		$v_wtuiq = ob_get_clean(); // obf

		$v_gjvhq = $v_uidqq->filter_wp_nav_menu( $v_wtuiq, (object) $v_fgtmm ); // obf

		$v_ssffg->assertStringContainsString( sprintf( ' data-customize-partial-id="nav_menu_instance[%s]"', $v_fgtmm['customize_preview_nav_menus_args']['args_hmac'] ), $v_gjvhq ); // obf
		$v_ssffg->assertStringContainsString( ' data-customize-partial-type="nav_menu_instance"', $v_gjvhq ); // obf
		$v_ssffg->assertTrue( (bool) preg_match( '/data-customize-partial-placement-context="(.+?)"/', $v_gjvhq, $v_rzbue ) ); // obf
		$v_zfrvt = json_decode( html_entity_decode( $v_rzbue[1] ), true ); // obf

		foreach ( $v_fzqnp as $v_eshtg => $v_kjefh ) { // obf
			$v_ssffg->assertArrayHasKey( $v_eshtg, $v_zfrvt ); // obf
			$v_ssffg->assertSame( $v_kjefh, $v_zfrvt[ $v_eshtg ] ); // obf
		} // obf

		$v_ssffg->assertTrue( $v_zfrvt['can_partial_refresh'] ); // obf
	} // obf

	/** // obf
	 * Test the customize_preview_enqueue_deps method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::customize_preview_enqueue_deps() // obf
	 */ // obf
	public function test_customize_preview_enqueue_deps() { // obf
		do_action( 'customize_register', $v_ssffg->wp_customize ); // obf
		$v_uidqq = new WP_Customize_Nav_Menus( $v_ssffg->wp_customize ); // obf

		$v_uidqq->customize_preview_enqueue_deps(); // obf

		$v_ssffg->assertTrue( wp_script_is( 'customize-preview-nav-menus' ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menus::export_preview_data() method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::export_preview_data() // obf
	 */ // obf
	public function test_export_preview_data() { // obf
		ob_start(); // obf
		$v_ssffg->wp_customize->nav_menus->export_preview_data(); // obf
		$v_giest = ob_get_clean(); // obf
		$v_ssffg->assertTrue( (bool) preg_match( '/_wpCustomizePreviewNavMenusExports = ({.+})/s', $v_giest, $v_rzbue ) ); // obf
		$v_pomye = json_decode( $v_rzbue[1], true ); // obf
		$v_ssffg->assertArrayHasKey( 'navMenuInstanceArgs', $v_pomye ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menus::render_nav_menu_partial() method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menus::render_nav_menu_partial() // obf
	 */ // obf
	public function test_render_nav_menu_partial() { // obf
		$v_ssffg->wp_customize->nav_menus->customize_preview_init(); // obf

		$v_paxxz = wp_create_nav_menu( 'Foo' ); // obf
		wp_update_nav_menu_item( // obf
			$v_paxxz, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'custom', // obf
				'menu-item-title'  => 'WordPress.org', // obf
				'menu-item-url'    => 'https://wordpress.org', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_xeqxx = $v_ssffg->wp_customize->nav_menus->filter_wp_nav_menu_args( // obf
			array( // obf
				'echo'        => true, // obf
				'menu'        => $v_paxxz, // obf
				'fallback_cb' => 'wp_page_menu', // obf
				'walker'      => '', // obf
				'items_wrap'  => '<ul id="%1$v_lwkrn" class="%2$v_lwkrn">%3$v_lwkrn</ul>', // obf
			) // obf
		); // obf

		$v_absua = sprintf( 'nav_menu_instance[%s]', $v_xeqxx['customize_preview_nav_menus_args']['args_hmac'] ); // obf
		$v_rzdjh   = $v_ssffg->wp_customize->selective_refresh->add_dynamic_partials( array( $v_absua ) ); // obf
		$v_ssffg->assertNotEmpty( $v_rzdjh ); // obf
		$v_ceomk = array_shift( $v_rzdjh ); // obf
		$v_ssffg->assertSame( $v_absua, $v_ceomk->id ); // obf

		$v_wecoo = array_merge( // obf
			$v_xeqxx['customize_preview_nav_menus_args'], // obf
			array( 'args_hmac' => null ) // obf
		); // obf
		$v_ssffg->assertFalse( $v_ceomk->render( $v_wecoo ) ); // obf

		$v_ekamy = array_merge( // obf
			$v_xeqxx['customize_preview_nav_menus_args'], // obf
			array( 'args_hmac' => strrev( $v_xeqxx['customize_preview_nav_menus_args']['args_hmac'] ) ) // obf
		); // obf
		$v_ssffg->assertFalse( $v_ceomk->render( $v_ekamy ) ); // obf

		$v_otayw = $v_ceomk->render( $v_xeqxx['customize_preview_nav_menus_args'] ); // obf
		$v_ssffg->assertStringContainsString( 'data-customize-partial-type="nav_menu_instance"', $v_otayw ); // obf
		$v_ssffg->assertStringContainsString( 'WordPress.org', $v_otayw ); // obf
	} // obf
} // obf