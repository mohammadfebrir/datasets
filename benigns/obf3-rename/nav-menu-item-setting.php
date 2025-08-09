

<?php // obf
/** // obf
 * Tests WP_Customize_Nav_Menu_Item_Setting. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Nav_Menu_Item_Setting extends WP_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_dkbgw; // obf

	/** // obf
	 * ID of the administrator user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_ehnhm; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_cslob Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cslob ) { // obf
		self::$v_ehnhm = $v_cslob->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up a test case. // obf
	 * // obf
	 * @see WP_UnitTestCase_Base::set_up() // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		wp_set_current_user( self::$v_ehnhm ); // obf

		global $v_dkbgw; // obf
		$v_wtele->wp_customize = new WP_Customize_Manager(); // obf
		$v_dkbgw       = $v_wtele->wp_customize; // obf
	} // obf

	/** // obf
	 * Delete the $v_dkbgw global when cleaning up scope. // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_dkbgw; // obf
		$v_dkbgw = null; // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	/** // obf
	 * Filter to add a custom menu item type label. // obf
	 * // obf
	 * @param object $v_ivzva Menu item. // obf
	 * @return object // obf
	 */ // obf
	public function filter_type_label( $v_ivzva ) { // obf
		if ( 'custom_type' === $v_ivzva->type ) { // obf
			$v_ivzva->type_label = 'Custom Label'; // obf
		} // obf

		return $v_ivzva; // obf
	} // obf

	/** // obf
	 * Test constants and statics. // obf
	 */ // obf
	public function test_constants() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf
		$v_wtele->assertTrue( post_type_exists( WP_Customize_Nav_Menu_Item_Setting::POST_TYPE ) ); // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::__construct() // obf
	 */ // obf
	public function test_construct() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, 'nav_menu_item[123]' ); // obf
		$v_wtele->assertSame( 'nav_menu_item', $v_iprlw->type ); // obf
		$v_wtele->assertSame( 123, $v_iprlw->post_id ); // obf
		$v_wtele->assertNull( $v_iprlw->previous_post_id ); // obf
		$v_wtele->assertNull( $v_iprlw->update_status ); // obf
		$v_wtele->assertNull( $v_iprlw->update_error ); // obf
		$v_wtele->assertIsArray( $v_iprlw->default ); // obf

		$v_lueub = array( // obf
			'object_id'        => 0, // obf
			'object'           => '', // obf
			'menu_item_parent' => 0, // obf
			'position'         => 0, // obf
			'type'             => 'custom', // obf
			'title'            => '', // obf
			'url'              => '', // obf
			'target'           => '', // obf
			'attr_title'       => '', // obf
			'description'      => '', // obf
			'classes'          => '', // obf
			'xfn'              => '', // obf
			'status'           => 'publish', // obf
			'original_title'   => '', // obf
			'nav_menu_term_id' => 0, // obf
			'_invalid'         => false, // obf
		); // obf
		$v_wtele->assertSame( $v_lueub, $v_iprlw->default ); // obf

		$v_cztci = null; // obf
		try { // obf
			$v_ndxzb = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, 'foo_bar_baz' ); // obf
			unset( $v_ndxzb ); // obf
		} catch ( Exception $v_ovtji ) { // obf
			$v_cztci = $v_ovtji; // obf
		} // obf
		$v_wtele->assertInstanceOf( 'Exception', $v_cztci ); // obf
	} // obf

	/** // obf
	 * Test empty constructor. // obf
	 */ // obf
	public function test_construct_empty_menus() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf
		$v_wqgmm = $v_wtele->wp_customize; // obf
		unset( $v_wqgmm->nav_menus ); // obf

		$v_cztci = null; // obf
		try { // obf
			$v_ndxzb = new WP_Customize_Nav_Menu_Item_Setting( $v_wqgmm, 'nav_menu_item[123]' ); // obf
			unset( $v_ndxzb ); // obf
		} catch ( Exception $v_ovtji ) { // obf
			$v_cztci = $v_ovtji; // obf
		} // obf
		$v_wtele->assertInstanceOf( 'Exception', $v_cztci ); // obf
	} // obf

	/** // obf
	 * Test constructor for placeholder (draft) menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::__construct() // obf
	 */ // obf
	public function test_construct_placeholder() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf
		$v_lueub = array( // obf
			'title'            => 'Lorem', // obf
			'description'      => 'ipsum', // obf
			'menu_item_parent' => 123, // obf
		); // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, 'nav_menu_item[-5]', compact( 'default' ) ); // obf
		$v_wtele->assertSame( -5, $v_iprlw->post_id ); // obf
		$v_wtele->assertNull( $v_iprlw->previous_post_id ); // obf
		$v_wtele->assertSame( $v_lueub, $v_iprlw->default ); // obf
	} // obf

	/** // obf
	 * Test value method with post. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	public function test_value_type_post_type() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_tihdb = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf

		$v_flzcz    = wp_create_nav_menu( 'Menu' ); // obf
		$v_biqfc = 'Greetings'; // obf
		$v_uktmg    = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_tihdb, // obf
				'menu-item-title'     => $v_biqfc, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_xhetg      = get_post( $v_uktmg ); // obf
		$v_ivzva = wp_setup_nav_menu_item( $v_xhetg ); // obf
		$v_wtele->assertSame( $v_biqfc, $v_ivzva->title ); // obf

		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf

		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_ivzva->title, $v_cgjzi['title'] ); // obf
		$v_wtele->assertSame( $v_ivzva->type, $v_cgjzi['type'] ); // obf
		$v_wtele->assertEquals( $v_ivzva->object_id, $v_cgjzi['object_id'] ); // obf
		$v_wtele->assertSame( $v_flzcz, $v_cgjzi['nav_menu_term_id'] ); // obf
		$v_wtele->assertSame( 'Hello World', $v_cgjzi['original_title'] ); // obf

		$v_uqbbh = wp_create_nav_menu( 'Menu2' ); // obf
		wp_update_nav_menu_item( // obf
			$v_uqbbh, // obf
			$v_uktmg, // obf
			array( // obf
				'menu-item-title' => 'Hola', // obf
			) // obf
		); // obf
		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertSame( 'Hola', $v_cgjzi['title'] ); // obf
		$v_wtele->assertSame( $v_uqbbh, $v_cgjzi['nav_menu_term_id'] ); // obf
	} // obf

	/** // obf
	 * Test value method with post without nav menu item title (label). // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	public function test_value_type_post_type_without_label() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_xkhiy = 'Hello World'; // obf
		$v_tihdb        = self::factory()->post->create( array( 'post_title' => $v_xkhiy ) ); // obf

		$v_flzcz = wp_create_nav_menu( 'Menu' ); // obf
		$v_uktmg = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_tihdb, // obf
				'menu-item-title'     => '', // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf

		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertSame( '', $v_cgjzi['title'] ); // obf
		$v_wtele->assertSame( $v_xkhiy, $v_cgjzi['original_title'] ); // obf
	} // obf

	/** // obf
	 * Test value method with taxonomy. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	public function test_value_type_taxonomy() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_ircto = self::factory()->category->create( array( 'name' => 'Salutations' ) ); // obf

		$v_flzcz    = wp_create_nav_menu( 'Menu' ); // obf
		$v_biqfc = 'Greetings'; // obf
		$v_uktmg    = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-object-id' => $v_ircto, // obf
				'menu-item-title'     => $v_biqfc, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_xhetg      = get_post( $v_uktmg ); // obf
		$v_ivzva = wp_setup_nav_menu_item( $v_xhetg ); // obf
		$v_wtele->assertSame( $v_biqfc, $v_ivzva->title ); // obf

		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf

		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_ivzva->title, $v_cgjzi['title'] ); // obf
		$v_wtele->assertSame( $v_ivzva->type, $v_cgjzi['type'] ); // obf
		$v_wtele->assertEquals( $v_ivzva->object_id, $v_cgjzi['object_id'] ); // obf
		$v_wtele->assertSame( $v_flzcz, $v_cgjzi['nav_menu_term_id'] ); // obf
		$v_wtele->assertSame( 'Salutations', $v_cgjzi['original_title'] ); // obf
	} // obf

	/** // obf
	 * Test value method with a custom object. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	public function test_custom_type_label() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf
		add_filter( 'wp_setup_nav_menu_item', array( $v_wtele, 'filter_type_label' ) ); // obf

		$v_flzcz = wp_create_nav_menu( 'Menu' ); // obf
		$v_uktmg = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'custom_type', // obf
				'menu-item-object' => 'custom_object', // obf
				'menu-item-title'  => 'Cool beans', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_xhetg      = get_post( $v_uktmg ); // obf
		$v_ivzva = wp_setup_nav_menu_item( $v_xhetg ); // obf

		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf

		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_ivzva->type_label, 'Custom Label' ); // obf
		$v_wtele->assertSame( $v_ivzva->type_label, $v_cgjzi['type_label'] ); // obf
	} // obf

	/** // obf
	 * Test value method returns zero for nav_menu_term_id when previewing a new menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	public function test_value_nav_menu_term_id_returns_zero() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz    = -123; // obf
		$v_gbmdb = array( // obf
			'name'        => 'Secondary', // obf
			'description' => '', // obf
			'parent'      => 0, // obf
			'auto_add'    => false, // obf
		); // obf
		$v_mpncf = "nav_menu[$v_flzcz]"; // obf
		$v_fnksx       = new WP_Customize_Nav_Menu_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf

		$v_wtele->wp_customize->set_post_value( $v_fnksx->id, $v_gbmdb ); // obf
		$v_fnksx->preview(); // obf
		$v_cgjzi = $v_fnksx->value(); // obf
		$v_wtele->assertSame( $v_gbmdb, $v_cgjzi ); // obf

		$v_tihdb = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_uktmg = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_tihdb, // obf
				'menu-item-title'     => 'Hello World', // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf

		$v_xhetg      = get_post( $v_uktmg ); // obf
		$v_ivzva = wp_setup_nav_menu_item( $v_xhetg ); // obf

		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_cgjzi      = $v_iprlw->value(); // obf
		$v_wtele->assertSame( 0, $v_cgjzi['nav_menu_term_id'] ); // obf
	} // obf

	/** // obf
	 * Test preview method for updated menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::preview() // obf
	 */ // obf
	public function test_preview_updated() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_sujiu  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_rygcn = self::factory()->post->create( array( 'post_title' => 'Hola Muno' ) ); // obf

		$v_zqiif   = wp_create_nav_menu( 'Primary' ); // obf
		$v_njazz = wp_create_nav_menu( 'Secondary' ); // obf
		$v_biqfc        = 'Greetings'; // obf
		$v_uktmg           = wp_update_nav_menu_item( // obf
			$v_zqiif, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_sujiu, // obf
				'menu-item-title'     => $v_biqfc, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		$v_wtele->assertNotEmpty( wp_get_nav_menu_items( $v_zqiif, array( 'post_status' => 'publish,draft' ) ) ); // obf

		$v_gbmdb = array( // obf
			'type'             => 'post_type', // obf
			'object'           => 'post', // obf
			'object_id'        => $v_rygcn, // obf
			'title'            => 'Saludos', // obf
			'status'           => 'publish', // obf
			'nav_menu_term_id' => $v_njazz, // obf
		); // obf
		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, $v_gbmdb ); // obf
		unset( $v_gbmdb['nav_menu_term_id'] ); // obf
		$v_iprlw->preview(); // obf

		// Make sure the menu item appears in the new menu. // obf
		$v_wtele->assertNotContains( $v_uktmg, wp_list_pluck( wp_get_nav_menu_items( $v_zqiif ), 'db_id' ) ); // obf
		$v_ujirt = wp_get_nav_menu_items( $v_njazz ); // obf
		$v_tmbev     = wp_list_pluck( $v_ujirt, 'db_id' ); // obf
		$v_wtele->assertContains( $v_uktmg, $v_tmbev ); // obf
		$v_ullhn                         = array_search( $v_uktmg, $v_tmbev, true ); // obf
		$v_xnpwf              = $v_ujirt[ $v_ullhn ]; // obf
		$v_gbmdb['post_status'] = $v_gbmdb['status']; // obf
		unset( $v_gbmdb['status'] ); // obf
		foreach ( $v_gbmdb as $v_zwooy => $v_cgjzi ) { // obf
			$v_wtele->assertSame( $v_cgjzi, $v_xnpwf->$v_zwooy, "Key $v_zwooy mismatch" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test preview method for inserted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::preview() // obf
	 */ // obf
	public function test_preview_inserted() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz  = wp_create_nav_menu( 'Primary' ); // obf
		$v_tihdb  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_tmord = array(); // obf
		for ( $v_ullhn = 0; $v_ullhn < 5; $v_ullhn += 1 ) { // obf
			$v_uktmg    = wp_update_nav_menu_item( // obf
				$v_flzcz, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'post_type', // obf
					'menu-item-object'    => 'post', // obf
					'menu-item-object-id' => $v_tihdb, // obf
					'menu-item-title'     => "Item $v_ullhn", // obf
					'menu-item-status'    => 'publish', // obf
					'menu-item-position'  => $v_ullhn + 1, // obf
				) // obf
			); // obf
			$v_tmord[] = $v_uktmg; // obf
		} // obf

		$v_gbmdb = array( // obf
			'type'             => 'post_type', // obf
			'object'           => 'post', // obf
			'object_id'        => $v_tihdb, // obf
			'title'            => 'Inserted item', // obf
			'status'           => 'publish', // obf
			'nav_menu_term_id' => $v_flzcz, // obf
			'position'         => count( $v_tmord ) + 1, // obf
		); // obf

		$v_wrxws = -10; // obf
		$v_mpncf  = "nav_menu_item[$v_wrxws]"; // obf
		$v_iprlw     = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, $v_gbmdb ); // obf
		unset( $v_gbmdb['nav_menu_term_id'] ); // obf

		$v_lvrju = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_iprlw->preview(); // obf
		$v_kynha = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertNotEquals( count( $v_lvrju ), count( $v_kynha ) ); // obf

		$v_azkzh = array_pop( $v_kynha ); // obf
		$v_wtele->assertSame( $v_wrxws, $v_azkzh->db_id ); // obf
		$v_gbmdb['post_status'] = $v_gbmdb['status']; // obf
		unset( $v_gbmdb['status'] ); // obf
		$v_gbmdb['menu_order'] = $v_gbmdb['position']; // obf
		unset( $v_gbmdb['position'] ); // obf
		foreach ( $v_gbmdb as $v_zwooy => $v_cgjzi ) { // obf
			$v_wtele->assertSame( $v_cgjzi, $v_azkzh->$v_zwooy, "Mismatch for $v_zwooy property." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test preview method for deleted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::preview() // obf
	 */ // obf
	public function test_preview_deleted() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz  = wp_create_nav_menu( 'Primary' ); // obf
		$v_tihdb  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_tmord = array(); // obf
		for ( $v_ullhn = 0; $v_ullhn < 5; $v_ullhn += 1 ) { // obf
			$v_uktmg    = wp_update_nav_menu_item( // obf
				$v_flzcz, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'post_type', // obf
					'menu-item-object'    => 'post', // obf
					'menu-item-object-id' => $v_tihdb, // obf
					'menu-item-title'     => "Item $v_ullhn", // obf
					'menu-item-status'    => 'publish', // obf
					'menu-item-position'  => $v_ullhn + 1, // obf
				) // obf
			); // obf
			$v_tmord[] = $v_uktmg; // obf
		} // obf

		$v_ezxwo = $v_tmord[2]; // obf
		$v_mpncf     = "nav_menu_item[$v_ezxwo]"; // obf
		$v_iprlw        = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, false ); // obf

		$v_lvrju = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertContains( $v_ezxwo, wp_list_pluck( $v_lvrju, 'db_id' ) ); // obf
		$v_iprlw->preview(); // obf
		$v_kynha = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertNotEquals( count( $v_lvrju ), count( $v_kynha ) ); // obf
		$v_wtele->assertContains( $v_ezxwo, wp_list_pluck( $v_lvrju, 'db_id' ) ); // obf
	} // obf

	/** // obf
	 * Test sanitize method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::sanitize() // obf
	 */ // obf
	public function test_sanitize() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz = wp_create_nav_menu( 'Primary' ); // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, 'nav_menu_item[123]' ); // obf

		$v_wtele->assertNull( $v_iprlw->sanitize( 'not an array' ) ); // obf
		$v_wtele->assertNull( $v_iprlw->sanitize( 123 ) ); // obf

		$v_uxpjl = array( // obf
			'http://example.com/', // obf
			'https://foo.example.com/hello.html', // obf
			'mailto:nobody@example.com?subject=hi', // obf
			'ftp://example.com/', // obf
			'ftps://example.com/', // obf
			'news://news.server.example/example.group.this', // obf
			'irc://irc.freenode.net/wordpress', // obf
			'irc6://irc.freenode.net/wordpress', // obf
			'ircs://irc.freenode.net/wordpress', // obf
			'gopher://example.com', // obf
			'nntp://news.server.example/example.group.this', // obf
			'feed://example.com/', // obf
			'telnet://example.com', // obf
			'mms://example.com', // obf
			'rtsp://example.com/', // obf
			'svn://develop.svn.wordpress.org/trunk', // obf
			'tel:000-000-000', // obf
			'fax:000-000-000', // obf
			'xmpp:user@host?message', // obf
			'webcal://example.com', // obf
			'urn:org.wordpress', // obf
		); // obf
		foreach ( $v_uxpjl as $v_ksuhf ) { // obf
			$v_mpvya = $v_iprlw->sanitize( array( 'url' => $v_ksuhf ) ); // obf
			$v_wtele->assertIsArray( $v_mpvya ); // obf
			$v_wtele->assertSame( $v_ksuhf, $v_mpvya['url'] ); // obf
		} // obf

		$v_lhsik = array( // obf
			'javascript:alert(1)', // obf
			'unknown://something.out-there', // obf
			'smtp://user:pass@mailserver.thing', // obf
		); // obf
		foreach ( $v_lhsik as $v_iggyy ) { // obf
			$v_mpvya = $v_iprlw->sanitize( array( 'url' => $v_iggyy ) ); // obf
			$v_wtele->assertInstanceOf( 'WP_Error', $v_mpvya ); // obf
			$v_wtele->assertSame( 'invalid_url', $v_mpvya->get_error_code() ); // obf
		} // obf

		$v_eanxl = array( // obf
			'object_id'        => 'bad', // obf
			'object'           => '<b>hello</b>', // obf
			'menu_item_parent' => 'asdasd', // obf
			'position'         => -123, // obf
			'type'             => 'custom<b>', // obf
			'title'            => '\o/ o\'o Hi<script>unfilteredHtml()</script>', // obf
			'url'              => '', // Note the javascript: protocol is checked above and results in a hard validation error, beyond mere sanitization. // obf
			'target'           => '" onclick="', // obf
			'attr_title'       => '\o/ o\'o <b>bolded</b><script>unfilteredHtml()</script>', // obf
			'description'      => '\o/ o\'o <b>Hello world</b><script>unfilteredHtml()</script>', // obf
			'classes'          => 'hello " inject="', // obf
			'xfn'              => 'hello " inject="', // obf
			'status'           => 'forbidden', // obf
			'original_title'   => 'Hi<script>unfilteredHtml()</script>', // obf
			'nav_menu_term_id' => 'heilo', // obf
			'_invalid'         => false, // obf
		); // obf

		$v_lcndf = array( // obf
			'object_id'        => 0, // obf
			'object'           => 'bhellob', // obf
			'menu_item_parent' => 0, // obf
			'position'         => -123, // obf
			'type'             => 'customb', // obf
			'title'            => current_user_can( 'unfiltered_html' ) ? '\o/ o\'o Hi<script>unfilteredHtml()</script>' : '\o/ o\'o HiunfilteredHtml()', // obf
			'url'              => '', // obf
			'target'           => 'onclick', // obf
			'attr_title'       => current_user_can( 'unfiltered_html' ) ? '\o/ o\'o <b>bolded</b><script>unfilteredHtml()</script>' : '\o/ o\'o <b>bolded</b>unfilteredHtml()', // obf
			'description'      => current_user_can( 'unfiltered_html' ) ? '\o/ o\'o <b>Hello world</b><script>unfilteredHtml()</script>' : '\o/ o\'o <b>Hello world</b>unfilteredHtml()', // obf
			'classes'          => 'hello  inject', // obf
			'xfn'              => 'hello  inject', // obf
			'status'           => 'draft', // obf
			'original_title'   => 'Hi', // obf
			'nav_menu_term_id' => 0, // obf
		); // obf

		$v_goqjm = $v_iprlw->sanitize( $v_eanxl ); // obf
		$v_wtele->assertSameSets( array_keys( $v_eanxl ), array_keys( $v_goqjm ) ); // obf

		foreach ( $v_lcndf as $v_zwooy => $v_cgjzi ) { // obf
			$v_wtele->assertSame( $v_cgjzi, $v_goqjm[ $v_zwooy ], "Expected $v_zwooy to be sanitized." ); // obf
		} // obf

		$v_bpobu = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			wp_slash( // obf
				array( // obf
					'menu-item-object-id'   => $v_eanxl['object_id'], // obf
					'menu-item-object'      => $v_eanxl['object'], // obf
					'menu-item-parent-id'   => $v_eanxl['menu_item_parent'], // obf
					'menu-item-position'    => $v_eanxl['position'], // obf
					'menu-item-type'        => $v_eanxl['type'], // obf
					'menu-item-title'       => $v_eanxl['title'], // obf
					'menu-item-url'         => $v_eanxl['url'], // obf
					'menu-item-description' => $v_eanxl['description'], // obf
					'menu-item-attr-title'  => $v_eanxl['attr_title'], // obf
					'menu-item-target'      => $v_eanxl['target'], // obf
					'menu-item-classes'     => $v_eanxl['classes'], // obf
					'menu-item-xfn'         => $v_eanxl['xfn'], // obf
					'menu-item-status'      => $v_eanxl['status'], // obf
				) // obf
			) // obf
		); // obf

		$v_xhetg          = get_post( $v_bpobu ); // obf
		$v_dpupm = wp_setup_nav_menu_item( clone $v_xhetg ); // obf

		$v_wtele->assertEquals( $v_lcndf['object_id'], $v_dpupm->object_id ); // obf
		$v_wtele->assertSame( $v_lcndf['object'], $v_dpupm->object ); // obf
		$v_wtele->assertEquals( $v_lcndf['menu_item_parent'], $v_dpupm->menu_item_parent ); // obf
		$v_wtele->assertSame( $v_lcndf['position'], $v_xhetg->menu_order ); // obf
		$v_wtele->assertSame( $v_lcndf['type'], $v_dpupm->type ); // obf
		$v_wtele->assertSame( $v_lcndf['title'], $v_xhetg->post_title ); // obf
		$v_wtele->assertSame( $v_lcndf['url'], $v_dpupm->url ); // obf
		$v_wtele->assertSame( $v_lcndf['description'], $v_xhetg->post_content ); // obf
		$v_wtele->assertSame( $v_lcndf['attr_title'], $v_xhetg->post_excerpt ); // obf
		$v_wtele->assertSame( $v_lcndf['target'], $v_dpupm->target ); // obf
		$v_wtele->assertSame( $v_lcndf['classes'], implode( ' ', $v_dpupm->classes ) ); // obf
		$v_wtele->assertSame( $v_lcndf['xfn'], $v_dpupm->xfn ); // obf
		$v_wtele->assertSame( $v_lcndf['status'], $v_xhetg->post_status ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for updated menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 */ // obf
	public function test_save_updated() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_sujiu  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_rygcn = self::factory()->post->create( array( 'post_title' => 'Hola Muno' ) ); // obf

		$v_zqiif   = wp_create_nav_menu( 'Primary' ); // obf
		$v_njazz = wp_create_nav_menu( 'Secondary' ); // obf
		$v_biqfc        = 'Greetings'; // obf
		$v_uktmg           = wp_update_nav_menu_item( // obf
			$v_zqiif, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_sujiu, // obf
				'menu-item-title'     => $v_biqfc, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		$v_wtele->assertNotEmpty( wp_get_nav_menu_items( $v_zqiif, array( 'post_status' => 'publish,draft' ) ) ); // obf

		$v_gbmdb = array( // obf
			'type'             => 'post_type', // obf
			'object'           => 'post', // obf
			'object_id'        => $v_rygcn, // obf
			'title'            => 'Saludos \o/ o\'o', // obf
			'status'           => 'publish', // obf
			'nav_menu_term_id' => $v_njazz, // obf
		); // obf
		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf
		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, $v_gbmdb ); // obf
		unset( $v_gbmdb['nav_menu_term_id'] ); // obf
		$v_iprlw->save(); // obf

		// Make sure the menu item appears in the new menu. // obf
		$v_wtele->assertNotContains( $v_uktmg, wp_list_pluck( wp_get_nav_menu_items( $v_zqiif ), 'db_id' ) ); // obf
		$v_ujirt = wp_get_nav_menu_items( $v_njazz ); // obf
		$v_tmbev     = wp_list_pluck( $v_ujirt, 'db_id' ); // obf
		$v_wtele->assertContains( $v_uktmg, $v_tmbev ); // obf
		$v_ullhn                         = array_search( $v_uktmg, $v_tmbev, true ); // obf
		$v_xnpwf              = $v_ujirt[ $v_ullhn ]; // obf
		$v_gbmdb['post_status'] = $v_gbmdb['status']; // obf
		unset( $v_gbmdb['status'] ); // obf
		foreach ( $v_gbmdb as $v_zwooy => $v_cgjzi ) { // obf
			$v_wtele->assertEquals( $v_cgjzi, $v_xnpwf->$v_zwooy, "Key $v_zwooy mismatch" ); // obf
		} // obf

		// Verify the Ajax responses is being amended. // obf
		$v_gvxpz = apply_filters( 'customize_save_response', array() ); // obf
		$v_wtele->assertArrayHasKey( 'nav_menu_item_updates', $v_gvxpz ); // obf
		$v_wsffu = array_shift( $v_gvxpz['nav_menu_item_updates'] ); // obf
		$v_wtele->assertArrayHasKey( 'post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'previous_post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'error', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'status', $v_wsffu ); // obf

		$v_wtele->assertSame( $v_uktmg, $v_wsffu['post_id'] ); // obf
		$v_wtele->assertNull( $v_wsffu['previous_post_id'] ); // obf
		$v_wtele->assertNull( $v_wsffu['error'] ); // obf
		$v_wtele->assertSame( 'updated', $v_wsffu['status'] ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for inserted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 */ // obf
	public function test_save_inserted() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz  = wp_create_nav_menu( 'Primary' ); // obf
		$v_tihdb  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_tmord = array(); // obf
		for ( $v_ullhn = 0; $v_ullhn < 5; $v_ullhn += 1 ) { // obf
			$v_uktmg    = wp_update_nav_menu_item( // obf
				$v_flzcz, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'post_type', // obf
					'menu-item-object'    => 'post', // obf
					'menu-item-object-id' => $v_tihdb, // obf
					'menu-item-title'     => "Item $v_ullhn", // obf
					'menu-item-status'    => 'publish', // obf
					'menu-item-position'  => $v_ullhn + 1, // obf
				) // obf
			); // obf
			$v_tmord[] = $v_uktmg; // obf
		} // obf

		$v_gbmdb = array( // obf
			'type'             => 'post_type', // obf
			'object'           => 'post', // obf
			'object_id'        => $v_tihdb, // obf
			'title'            => 'Inserted item', // obf
			'status'           => 'publish', // obf
			'nav_menu_term_id' => $v_flzcz, // obf
			'position'         => count( $v_tmord ) + 1, // obf
		); // obf

		$v_wrxws = -10; // obf
		$v_mpncf  = "nav_menu_item[$v_wrxws]"; // obf
		$v_iprlw     = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, $v_gbmdb ); // obf
		unset( $v_gbmdb['nav_menu_term_id'] ); // obf

		$v_lvrju = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_iprlw->save(); // obf
		$v_kynha = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertNotEquals( count( $v_lvrju ), count( $v_kynha ) ); // obf

		$v_azkzh = array_pop( $v_kynha ); // obf
		$v_wtele->assertSame( $v_iprlw->post_id, $v_azkzh->db_id ); // obf
		$v_gbmdb['post_status'] = $v_gbmdb['status']; // obf
		unset( $v_gbmdb['status'] ); // obf
		$v_gbmdb['menu_order'] = $v_gbmdb['position']; // obf
		unset( $v_gbmdb['position'] ); // obf
		foreach ( $v_gbmdb as $v_zwooy => $v_cgjzi ) { // obf
			$v_wtele->assertEquals( $v_cgjzi, $v_azkzh->$v_zwooy, "Mismatch for $v_zwooy property." ); // obf
		} // obf

		// Verify the Ajax responses is being amended. // obf
		$v_gvxpz = apply_filters( 'customize_save_response', array() ); // obf
		$v_wtele->assertArrayHasKey( 'nav_menu_item_updates', $v_gvxpz ); // obf
		$v_wsffu = array_shift( $v_gvxpz['nav_menu_item_updates'] ); // obf
		$v_wtele->assertArrayHasKey( 'post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'previous_post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'error', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'status', $v_wsffu ); // obf

		$v_wtele->assertSame( $v_iprlw->post_id, $v_wsffu['post_id'] ); // obf
		$v_wtele->assertSame( $v_wrxws, $v_wsffu['previous_post_id'] ); // obf
		$v_wtele->assertNull( $v_wsffu['error'] ); // obf
		$v_wtele->assertSame( 'inserted', $v_wsffu['status'] ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for deleted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 */ // obf
	public function test_save_deleted() { // obf
		do_action( 'customize_register', $v_wtele->wp_customize ); // obf

		$v_flzcz  = wp_create_nav_menu( 'Primary' ); // obf
		$v_tihdb  = self::factory()->post->create( array( 'post_title' => 'Hello World' ) ); // obf
		$v_tmord = array(); // obf
		for ( $v_ullhn = 0; $v_ullhn < 5; $v_ullhn += 1 ) { // obf
			$v_uktmg    = wp_update_nav_menu_item( // obf
				$v_flzcz, // obf
				0, // obf
				array( // obf
					'menu-item-type'      => 'post_type', // obf
					'menu-item-object'    => 'post', // obf
					'menu-item-object-id' => $v_tihdb, // obf
					'menu-item-title'     => "Item $v_ullhn", // obf
					'menu-item-status'    => 'publish', // obf
					'menu-item-position'  => $v_ullhn + 1, // obf
				) // obf
			); // obf
			$v_tmord[] = $v_uktmg; // obf
		} // obf

		$v_ezxwo = $v_tmord[2]; // obf
		$v_mpncf     = "nav_menu_item[$v_ezxwo]"; // obf
		$v_iprlw        = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_wtele->wp_customize->set_post_value( $v_mpncf, false ); // obf

		$v_lvrju = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertContains( $v_ezxwo, wp_list_pluck( $v_lvrju, 'db_id' ) ); // obf
		$v_iprlw->save(); // obf
		$v_kynha = wp_get_nav_menu_items( $v_flzcz ); // obf
		$v_wtele->assertNotEquals( count( $v_lvrju ), count( $v_kynha ) ); // obf
		$v_wtele->assertContains( $v_ezxwo, wp_list_pluck( $v_lvrju, 'db_id' ) ); // obf

		// Verify the Ajax responses is being amended. // obf
		$v_gvxpz = apply_filters( 'customize_save_response', array() ); // obf
		$v_wtele->assertArrayHasKey( 'nav_menu_item_updates', $v_gvxpz ); // obf
		$v_wsffu = array_shift( $v_gvxpz['nav_menu_item_updates'] ); // obf
		$v_wtele->assertArrayHasKey( 'post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'previous_post_id', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'error', $v_wsffu ); // obf
		$v_wtele->assertArrayHasKey( 'status', $v_wsffu ); // obf

		$v_wtele->assertSame( $v_ezxwo, $v_wsffu['post_id'] ); // obf
		$v_wtele->assertNull( $v_wsffu['previous_post_id'] ); // obf
		$v_wtele->assertNull( $v_wsffu['error'] ); // obf
		$v_wtele->assertSame( 'deleted', $v_wsffu['status'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33665 // obf
	 */ // obf
	public function test_invalid_nav_menu_item() { // obf
		$v_flzcz = wp_create_nav_menu( 'Primary' ); // obf
		register_post_type( // obf
			'poem', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_tihdb    = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'poem', // obf
				'post_title' => 'Code is poetry.', // obf
			) // obf
		); // obf
		$v_xhetg       = get_post( $v_tihdb ); // obf
		$v_uktmg    = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'poem', // obf
				'menu-item-object-id' => $v_tihdb, // obf
				'menu-item-title'     => $v_xhetg->post_title, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-position'  => 1, // obf
			) // obf
		); // obf
		$v_mpncf = "nav_menu_item[$v_uktmg]"; // obf

		do_action( 'customize_register', $v_wtele->wp_customize ); // obf
		$v_iprlw = $v_wtele->wp_customize->get_setting( $v_mpncf ); // obf
		$v_wtele->assertNotEmpty( $v_iprlw ); // obf
		$v_cgjzi = $v_iprlw->value(); // obf
		$v_wtele->assertFalse( $v_cgjzi['_invalid'] ); // obf
		$v_omgkx = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertFalse( $v_omgkx->_invalid ); // obf

		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_cgjzi   = $v_iprlw->value(); // obf
		$v_wtele->assertFalse( $v_cgjzi['_invalid'] ); // obf
		$v_omgkx = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertFalse( $v_omgkx->_invalid ); // obf

		_unregister_post_type( 'poem' ); // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( $v_wtele->wp_customize, $v_mpncf ); // obf
		$v_cgjzi   = $v_iprlw->value(); // obf
		$v_wtele->assertTrue( $v_cgjzi['_invalid'] ); // obf
		$v_omgkx = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertTrue( $v_omgkx->_invalid ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item(). // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item() // obf
	 */ // obf
	public function test_value_as_wp_post_nav_menu_item() { // obf
		$v_tihdb = self::factory()->post->create(); // obf

		$v_iprlw    = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[123]' // obf
		); // obf
		$v_gbmdb = array( // obf
			'object_id'        => $v_tihdb, // obf
			'object'           => 'post', // obf
			'menu_item_parent' => 0, // obf
			'position'         => 2, // obf
			'type'             => 'custom_type', // obf
			'title'            => 'Hello \o/ o\'o World', // obf
			'url'              => '', // obf
			'target'           => '', // obf
			'attr_title'       => '">att \o/ o\'o empted <b>baddie</b>', // obf
			'description'      => 'Attempted \o/ o\'o <b>markup</b>', // obf
			'classes'          => 'class-1 class-2', // obf
			'xfn'              => '', // obf
			'status'           => 'publish', // obf
			'original_title'   => '', // obf
			'nav_menu_term_id' => 0, // obf
			'_invalid'         => false, // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( $v_iprlw->id, $v_gbmdb ); // obf

		$v_iprlw->preview(); // obf

		$v_jeiyx = $v_iprlw->value(); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( 'Custom Link', $v_dpupm->type_label ); // obf
		$v_wtele->assertSame( $v_jeiyx['type_label'], $v_dpupm->type_label ); // obf
		add_filter( 'wp_setup_nav_menu_item', array( $v_wtele, 'filter_type_label' ) ); // obf
		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( 'Custom Label', $v_dpupm->type_label ); // obf

		$v_wtele->assertObjectNotHasProperty( 'nav_menu_term_id', $v_dpupm ); // obf
		$v_wtele->assertObjectNotHasProperty( 'status', $v_dpupm ); // obf
		$v_wtele->assertSame( 'publish', $v_dpupm->post_status ); // obf
		$v_wtele->assertSame( 'nav_menu_item', $v_dpupm->post_type ); // obf
		$v_wtele->assertObjectNotHasProperty( 'position', $v_dpupm ); // obf
		$v_wtele->assertSame( $v_gbmdb['position'], $v_dpupm->menu_order ); // obf
		$v_wtele->assertSame( $v_gbmdb['title'], $v_dpupm->post_title ); // obf
		$v_wtele->assertSame( 123, $v_dpupm->ID ); // obf
		$v_wtele->assertSame( 123, $v_dpupm->db_id ); // obf
		$v_wtele->assertSame( wp_get_current_user()->ID, $v_dpupm->post_author ); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_dpupm ); // obf
		$v_emtku = apply_filters( 'nav_menu_attr_title', wp_unslash( apply_filters( 'excerpt_save_pre', wp_slash( $v_gbmdb['attr_title'] ) ) ) ); // obf
		$v_wtele->assertSame( $v_emtku, $v_dpupm->attr_title ); // obf
		$v_wtele->assertSame( 'Attempted \o/ o&#8217;o markup', $v_dpupm->description ); // obf
		$v_wtele->assertSame( array( 'class-1', 'class-2' ), $v_dpupm->classes ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item() to set url for posts, terms, and post type archives. // obf
	 * // obf
	 * @ticket 38945 // obf
	 * @covers WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item // obf
	 */ // obf
	public function test_value_as_wp_post_nav_menu_item_term_urls() { // obf
		$v_ondif = self::factory()->term->create( array( 'taxonomy' => 'category' ) ); // obf
		register_post_type( // obf
			'press_release', // obf
			array( // obf
				'has_archive' => true, // obf
			) // obf
		); // obf
		$v_tihdb = self::factory()->post->create( array( 'post_type' => 'press_release' ) ); // obf

		// Term. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-1]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'type'      => 'taxonomy', // obf
				'object'    => 'category', // obf
				'object_id' => $v_ondif, // obf
				'title'     => 'Category', // obf
				'url'       => '', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( get_term_link( $v_ondif ), $v_dpupm->url ); // obf

		// Post. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-2]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'type'      => 'post_type', // obf
				'object'    => 'press_release', // obf
				'object_id' => $v_tihdb, // obf
				'title'     => 'PR', // obf
				'url'       => '', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( get_permalink( $v_tihdb ), $v_dpupm->url ); // obf

		// Post type archive. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-3]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'type'   => 'post_type_archive', // obf
				'object' => 'press_release', // obf
				'title'  => 'PR', // obf
				'url'    => '', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( get_post_type_archive_link( 'press_release' ), $v_dpupm->url ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item() for obtaining original title. // obf
	 * // obf
	 * @ticket 38945 // obf
	 * @covers WP_Customize_Nav_Menu_Item_Setting::get_original_title // obf
	 */ // obf
	public function test_get_original_title() { // obf
		$v_flzcz = wp_create_nav_menu( 'Menu' ); // obf
		register_post_type( // obf
			'press_release', // obf
			array( // obf
				'has_archive' => true, // obf
				'labels'      => array( // obf
					'name'          => 'PRs', // obf
					'singular_name' => 'PR', // obf
					'archives'      => 'All PRs', // obf
				), // obf
			) // obf
		); // obf
		$v_jiunz = 'The PR Post'; // obf
		$v_tihdb             = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'press_release', // obf
				'post_title' => $v_jiunz, // obf
			) // obf
		); // obf
		$v_bctgf = 'The Category Term'; // obf
		$v_ondif             = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => $v_bctgf, // obf
			) // obf
		); // obf

		// Post: existing nav menu item. // obf
		$v_bpobu = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-object-id' => $v_tihdb, // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'press_release', // obf
				'menu-item-title'     => '', // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw          = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[' . $v_bpobu . ']' // obf
		); // obf
		$v_jeiyx       = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_jiunz, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( $v_jiunz, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( $v_jiunz, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->singular_name, $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf

		// Post: staged nav menu item. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-1]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'object_id' => $v_tihdb, // obf
				'type'      => 'post_type', // obf
				'object'    => 'press_release', // obf
				'title'     => '', // obf
				'status'    => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_jeiyx = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_jiunz, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( $v_jiunz, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( $v_jiunz, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->singular_name, $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf

		// Term: existing nav menu item. // obf
		$v_bpobu = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-object-id' => $v_ondif, // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'category', // obf
				'menu-item-title'     => '', // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw          = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[' . $v_bpobu . ']' // obf
		); // obf
		$v_jeiyx       = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_bctgf, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( $v_bctgf, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( $v_bctgf, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( get_taxonomy( 'category' )->labels->singular_name, $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf

		// Term: staged nav menu item. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-2]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'object_id' => $v_ondif, // obf
				'type'      => 'taxonomy', // obf
				'object'    => 'category', // obf
				'title'     => '', // obf
				'status'    => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_jeiyx = $v_iprlw->value(); // obf
		$v_wtele->assertSame( $v_bctgf, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( $v_bctgf, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( $v_bctgf, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( get_taxonomy( 'category' )->labels->singular_name, $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf

		// Post Type Archive: existing nav menu item. // obf
		$v_bpobu = wp_update_nav_menu_item( // obf
			$v_flzcz, // obf
			0, // obf
			array( // obf
				'menu-item-type'   => 'post_type_archive', // obf
				'menu-item-object' => 'press_release', // obf
				'menu-item-title'  => '', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw          = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[' . $v_bpobu . ']' // obf
		); // obf
		$v_jeiyx       = $v_iprlw->value(); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( __( 'Post Type Archive' ), $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf

		// Post Type Archive: staged nav menu item. // obf
		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[-3]' // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( // obf
			$v_iprlw->id, // obf
			array( // obf
				'type'   => 'post_type_archive', // obf
				'object' => 'press_release', // obf
				'title'  => '', // obf
				'status' => 'publish', // obf
			) // obf
		); // obf
		$v_iprlw->preview(); // obf
		$v_jeiyx = $v_iprlw->value(); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_jeiyx['original_title'] ); // obf
		$v_wtele->assertSame( '', $v_jeiyx['title'] ); // obf
		$v_xqpja = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertObjectHasProperty( 'type_label', $v_xqpja ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_xqpja->original_title ); // obf
		$v_wtele->assertSame( get_post_type_object( 'press_release' )->labels->archives, $v_xqpja->title ); // obf
		$v_wtele->assertArrayHasKey( 'type_label', $v_jeiyx ); // obf
		$v_wtele->assertSame( __( 'Post Type Archive' ), $v_jeiyx['type_label'] ); // obf
		$v_wtele->assertSame( $v_xqpja->type_label, $v_jeiyx['type_label'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item() where title is empty. // obf
	 * // obf
	 * @ticket 38015 // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value_as_wp_post_nav_menu_item() // obf
	 */ // obf
	public function test_value_as_wp_post_nav_menu_item_with_empty_title() { // obf
		$v_xkhiy = 'The Original Title'; // obf
		$v_tihdb        = self::factory()->post->create( array( 'post_title' => $v_xkhiy ) ); // obf

		$v_iprlw = new WP_Customize_Nav_Menu_Item_Setting( // obf
			$v_wtele->wp_customize, // obf
			'nav_menu_item[123]' // obf
		); // obf

		$v_gbmdb = array_merge( // obf
			$v_iprlw->default, // obf
			array( // obf
				'object_id'        => $v_tihdb, // obf
				'object'           => 'post', // obf
				'type'             => 'post_type', // obf
				'status'           => 'publish', // obf
				'nav_menu_term_id' => 0, // obf
			) // obf
		); // obf
		$v_wtele->wp_customize->set_post_value( $v_iprlw->id, $v_gbmdb ); // obf

		$v_iprlw->preview(); // obf

		$v_dpupm = $v_iprlw->value_as_wp_post_nav_menu_item(); // obf
		$v_wtele->assertSame( $v_xkhiy, $v_dpupm->title ); // obf
	} // obf
} // obf