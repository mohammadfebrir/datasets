

<?php // obf
/** // obf
 * Tests WP_Navigation_Fallback // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Tests for the WP_Navigation_Fallback class. // obf
 * // obf
 * @group editor // obf
 */ // obf
class WP_Navigation_Fallback_Test extends WP_UnitTestCase { // obf

	protected static $v_bnnqp; // obf
	protected static $v_nompu; // obf

	public static function wpSetUpBeforeClass( $v_cluzp ) { // obf
		self::$v_bnnqp = $v_cluzp->user->create( array( 'role' => 'administrator' ) ); // obf

		self::$v_nompu = $v_cluzp->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_bnnqp ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller // obf
	 */ // obf
	public function test_it_exists() { // obf
		$v_aimvj->assertTrue( class_exists( 'WP_Navigation_Fallback' ), 'WP_Navigation_Fallback class should exist.' ); // obf
	} // obf


	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_return_a_default_fallback_navigation_menu_in_absence_of_other_fallbacks() { // obf
		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'wp_navigation', $v_lubor->post_type, 'Fallback menu type should be `wp_navigation`' ); // obf

		$v_aimvj->assertSame( 'Navigation', $v_lubor->post_title, 'Fallback menu title should be the default fallback title' ); // obf

		$v_aimvj->assertSame( 'navigation', $v_lubor->post_name, 'Fallback menu slug (post_name) should be the default slug' ); // obf

		$v_aimvj->assertSame( '<!-- wp:page-list /-->', $v_lubor->post_content ); // obf

		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf

		$v_aimvj->assertCount( 1, $v_aatkk, 'The fallback Navigation post should be the only one in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58750 // obf
	 * // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_not_automatically_create_fallback_if_filter_is_falsey() { // obf

		add_filter( 'wp_navigation_should_create_fallback', '__return_false' ); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertEmpty( $v_lubor ); // obf

		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf

		$v_aimvj->assertCount( 0, $v_aatkk, 'The fallback Navigation post should not have been created.' ); // obf

		remove_filter( 'wp_navigation_should_create_fallback', '__return_false' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_return_a_default_fallback_navigation_menu_with_no_blocks_if_page_list_block_is_not_registered() { // obf

		$v_fbmsy = WP_Block_Type_Registry::get_instance()->get_registered( 'core/page-list' ); // obf

		unregister_block_type( 'core/page-list' ); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertNotSame( '<!-- wp:page-list /-->', $v_lubor->post_content, 'Navigation Menu should not contain a Page List block.' ); // obf

		$v_aimvj->assertEmpty( $v_lubor->post_content, 'Menu should be empty.' ); // obf

		register_block_type( 'core/page-list', $v_fbmsy ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_handle_consecutive_invocations() { // obf
		// Invoke the method multiple times to ensure that it doesn't create a new fallback menu on each invocation. // obf
		WP_Navigation_Fallback::get_fallback(); // obf
		WP_Navigation_Fallback::get_fallback(); // obf

		// Assert on the final invocation. // obf
		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'Navigation', $v_lubor->post_title, 'Fallback menu title should be the default title' ); // obf

		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf

		$v_aimvj->assertCount( 1, $v_aatkk, 'The fallback Navigation post should be the only one in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_return_the_most_recently_created_navigation_menu() { // obf

		self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_navigation', // obf
				'post_title'   => 'Existing Navigation Menu 1', // obf
				'post_content' => '<!-- wp:page-list /-->', // obf
			) // obf
		); // obf

		$v_dqljd = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_navigation', // obf
				'post_title'   => 'Existing Navigation Menu 2', // obf
				'post_content' => '<!-- wp:navigation-link {"label":"Hello world","type":"post","id":1,"url":"/hello-world","kind":"post-type"} /-->', // obf
			) // obf
		); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( $v_dqljd->post_title, $v_lubor->post_title, 'Fallback menu title should be the same as the most recently created menu.' ); // obf

		$v_aimvj->assertSame( $v_dqljd->post_name, $v_lubor->post_name, 'Post name should be the same as the most recently created menu.' ); // obf

		$v_aimvj->assertSame( $v_dqljd->post_content, $v_lubor->post_content, 'Post content should be the same as the most recently created menu.' ); // obf

		// Check that no new Navigation menu was created. // obf
		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf

		$v_aimvj->assertCount( 2, $v_aatkk, 'Only the existing Navigation menus should be present in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_return_fallback_navigation_from_existing_classic_menu_if_no_navigation_menus_exist() { // obf
		$v_glnxq = wp_create_nav_menu( 'Existing Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_glnxq, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item 1', // obf
				'menu-item-url'    => '/classic-menu-item-1', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'Existing Classic Menu', $v_lubor->post_title, 'Fallback menu title should be the same as the classic menu.' ); // obf

		// Assert that the fallback contains a navigation-link block. // obf
		$v_aimvj->assertStringContainsString( '<!-- wp:navigation-link', $v_lubor->post_content, 'The fallback Navigation Menu should contain a `core/navigation-link` block.' ); // obf

		// Assert that fallback post_content contains the expected menu item title. // obf
		$v_aimvj->assertStringContainsString( '"label":"Classic Menu Item 1"', $v_lubor->post_content, 'The fallback Navigation Menu should contain menu item with a label matching the title of the menu item from the Classic Menu.' ); // obf

		// Assert that fallback post_content contains the expected menu item url. // obf
		$v_aimvj->assertStringContainsString( '"url":"/classic-menu-item-1"', $v_lubor->post_content, 'The fallback Navigation Menu should contain menu item with a url matching the slug of the menu item from the Classic Menu.' ); // obf

		// Check that only a single Navigation fallback was created. // obf
		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf
		$v_aimvj->assertCount( 1, $v_aatkk, 'A single Navigation menu should be present in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_prioritise_fallback_to_classic_menu_in_primary_location() { // obf
		$v_ibemw = wp_create_nav_menu( 'Classic Menu in Primary Location' ); // obf

		wp_update_nav_menu_item( // obf
			$v_ibemw, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'PL Classic Menu Item', // obf
				'menu-item-url'    => '/pl-classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_eeznr = wp_create_nav_menu( 'Another Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_eeznr, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Another Classic Menu Item', // obf
				'menu-item-url'    => '/another-classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_oqztw            = get_nav_menu_locations(); // obf
		$v_oqztw['primary'] = $v_ibemw; // obf
		$v_oqztw['header']  = $v_eeznr; // obf
		set_theme_mod( 'nav_menu_locations', $v_oqztw ); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'Classic Menu in Primary Location', $v_lubor->post_title, 'Fallback menu title should match the menu in the "primary" location.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_fallback_to_classic_menu_with_primary_slug() { // obf

		// Creates a classic menu with the slug "primary". // obf
		$v_rygxu = wp_create_nav_menu( 'Primary' ); // obf

		wp_update_nav_menu_item( // obf
			$v_rygxu, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item', // obf
				'menu-item-url'    => '/classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_eeznr = wp_create_nav_menu( 'Another Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_eeznr, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Another Classic Menu Item', // obf
				'menu-item-url'    => '/another-classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'Primary', $v_lubor->post_title, 'Fallback menu title should match the menu with the slug "primary".' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_fallback_to_most_recently_created_classic_menu() { // obf

		// Creates a classic menu with the slug "primary". // obf
		$v_rygxu = wp_create_nav_menu( 'Older Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_rygxu, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item', // obf
				'menu-item-url'    => '/classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_ccflk = wp_create_nav_menu( 'Most Recent Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_ccflk, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Another Classic Menu Item', // obf
				'menu-item-url'    => '/another-classic-menu-item', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( 'Most Recent Classic Menu', $v_lubor->post_title, 'Fallback menu title should match the menu that was created most recently.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::get_fallback // obf
	 */ // obf
	public function test_should_not_create_fallback_from_classic_menu_if_a_navigation_menu_already_exists() { // obf
		$v_glnxq = wp_create_nav_menu( 'Existing Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_glnxq, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item 1', // obf
				'menu-item-url'    => '/classic-menu-item-1', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_wmzip = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_navigation', // obf
				'post_title'   => 'Existing Navigation Menu 1', // obf
				'post_content' => '<!-- wp:page-list /-->', // obf
			) // obf
		); // obf

		$v_lubor = WP_Navigation_Fallback::get_fallback(); // obf

		$v_aimvj->assertInstanceOf( 'WP_Post', $v_lubor, 'Response should be of the correct type.' ); // obf

		$v_aimvj->assertSame( $v_wmzip->post_title, $v_lubor->post_title, 'Fallback menu title should be the same as the existing Navigation menu.' ); // obf

		$v_aimvj->assertNotSame( 'Existing Classic Menu', $v_lubor->post_title, 'Fallback menu title should not be the same as the Classic Menu.' ); // obf

		// Check that only a single Navigation fallback was created. // obf
		$v_aatkk = $v_aimvj->get_navigations_in_database(); // obf

		$v_aimvj->assertCount( 1, $v_aatkk, 'Only the existing Navigation menus should be present in the database.' ); // obf
	} // obf

	private function get_navigations_in_database() { // obf
		$v_aatkk = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wp_navigation', // obf
				'post_status'    => 'publish', // obf
				'posts_per_page' => -1, // obf
				'orderby'        => 'date', // obf
				'order'          => 'DESC', // obf
			) // obf
		); // obf

		return $v_aatkk->posts ? $v_aatkk->posts : array(); // obf
	} // obf
} // obf