

<?php // obf

/** // obf
 * Tests WP_Customize_Nav_Menu_Setting. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Nav_Menu_Setting extends WP_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_rfonx; // obf

	/** // obf
	 * ID of the administrator user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_xevgl; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_iecvu Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iecvu ) { // obf
		self::$v_xevgl = $v_iecvu->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up a test case. // obf
	 * // obf
	 * @see WP_UnitTestCase_Base::set_up() // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		wp_set_current_user( self::$v_xevgl ); // obf

		global $v_rfonx; // obf
		$v_etqnw->wp_customize = new WP_Customize_Manager(); // obf
		$v_rfonx       = $v_etqnw->wp_customize; // obf
	} // obf

	/** // obf
	 * Delete the $v_rfonx global when cleaning up scope. // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_rfonx; // obf
		$v_rfonx = null; // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	/** // obf
	 * Helper for getting the nav_menu_options option. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function get_nav_menu_items_option() { // obf
		return get_option( 'nav_menu_options', array( 'auto_add' => array() ) ); // obf
	} // obf

	/** // obf
	 * Test constants and statics. // obf
	 */ // obf
	public function test_constants() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf
		$v_etqnw->assertTrue( taxonomy_exists( WP_Customize_Nav_Menu_Setting::TAXONOMY ) ); // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::__construct() // obf
	 */ // obf
	public function test_construct() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_nczzw = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, 'nav_menu[123]' ); // obf
		$v_etqnw->assertSame( 'nav_menu', $v_nczzw->type ); // obf
		$v_etqnw->assertSame( 'postMessage', $v_nczzw->transport ); // obf
		$v_etqnw->assertSame( 123, $v_nczzw->term_id ); // obf
		$v_etqnw->assertNull( $v_nczzw->previous_term_id ); // obf
		$v_etqnw->assertNull( $v_nczzw->update_status ); // obf
		$v_etqnw->assertNull( $v_nczzw->update_error ); // obf
		$v_etqnw->assertIsArray( $v_nczzw->default ); // obf
		foreach ( array( 'name', 'description', 'parent' ) as $v_zynid ) { // obf
			$v_etqnw->assertArrayHasKey( $v_zynid, $v_nczzw->default ); // obf
		} // obf
		$v_etqnw->assertSame( '', $v_nczzw->default['name'] ); // obf
		$v_etqnw->assertSame( '', $v_nczzw->default['description'] ); // obf
		$v_etqnw->assertSame( 0, $v_nczzw->default['parent'] ); // obf

		$v_qwlpe = null; // obf
		try { // obf
			$v_urlrf = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, 'foo_bar_baz' ); // obf
			unset( $v_urlrf ); // obf
		} catch ( Exception $v_zzvad ) { // obf
			$v_qwlpe = $v_zzvad; // obf
		} // obf
		$v_etqnw->assertInstanceOf( 'Exception', $v_qwlpe ); // obf
	} // obf

	/** // obf
	 * Test empty constructor. // obf
	 */ // obf
	public function test_construct_empty_menus() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf
		$v_ztfgv = $v_etqnw->wp_customize; // obf
		unset( $v_ztfgv->nav_menus ); // obf

		$v_qwlpe = null; // obf
		try { // obf
			$v_urlrf = new WP_Customize_Nav_Menu_Setting( $v_ztfgv, 'nav_menu_item[123]' ); // obf
			unset( $v_urlrf ); // obf
		} catch ( Exception $v_zzvad ) { // obf
			$v_qwlpe = $v_zzvad; // obf
		} // obf
		$v_etqnw->assertInstanceOf( 'Exception', $v_qwlpe ); // obf
	} // obf

	/** // obf
	 * Test constructor for placeholder (draft) menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::__construct() // obf
	 */ // obf
	public function test_construct_placeholder() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf
		$v_lbfcp = array( // obf
			'name'        => 'Lorem \\o/', // obf
			'description' => 'ipsum \\o/', // obf
			'parent'      => 123, // obf
		); // obf
		$v_nczzw = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, 'nav_menu[-5]', compact( 'default' ) ); // obf
		$v_etqnw->assertSame( -5, $v_nczzw->term_id ); // obf
		$v_etqnw->assertSame( $v_lbfcp, $v_nczzw->default ); // obf
	} // obf

	/** // obf
	 * Test value method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::value() // obf
	 */ // obf
	public function test_value() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_czugj      = 'Test 123 \\o/'; // obf
		$v_fjpig = wp_create_nav_menu( wp_slash( "Parent $v_czugj" ) ); // obf
		$v_dlszk    = 'Hello my world \\o/.'; // obf
		$v_dyjox        = wp_update_nav_menu_object( // obf
			0, // obf
			wp_slash( // obf
				array( // obf
					'menu-name'   => $v_czugj, // obf
					'parent'      => $v_fjpig, // obf
					'description' => $v_dlszk, // obf
				) // obf
			) // obf
		); // obf

		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf

		$v_yvsxn = $v_nczzw->value(); // obf
		$v_etqnw->assertIsArray( $v_yvsxn ); // obf
		foreach ( array( 'name', 'description', 'parent' ) as $v_zynid ) { // obf
			$v_etqnw->assertArrayHasKey( $v_zynid, $v_yvsxn ); // obf
		} // obf
		$v_etqnw->assertSame( $v_czugj, $v_yvsxn['name'] ); // obf
		$v_etqnw->assertSame( $v_dlszk, $v_yvsxn['description'] ); // obf
		$v_etqnw->assertSame( $v_fjpig, $v_yvsxn['parent'] ); // obf

		$v_hsazn = 'Foo'; // obf
		wp_update_nav_menu_object( $v_dyjox, wp_slash( array( 'menu-name' => $v_hsazn ) ) ); // obf
		$v_qpqxv = $v_nczzw->value(); // obf
		$v_etqnw->assertSame( $v_hsazn, $v_qpqxv['name'] ); // obf
	} // obf

	/** // obf
	 * Test preview method for updated menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::preview() // obf
	 */ // obf
	public function test_preview_updated() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_dyjox    = wp_update_nav_menu_object( // obf
			0, // obf
			wp_slash( // obf
				array( // obf
					'menu-name'   => 'Name 1 \\o/', // obf
					'description' => 'Description 1 \\o/', // obf
					'parent'      => 0, // obf
				) // obf
			) // obf
		); // obf
		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertNotContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf

		$v_ouujm = array( // obf
			'name'        => 'Name 2 \\o/', // obf
			'description' => 'Description 2 \\o/', // obf
			'parent'      => 1, // obf
			'auto_add'    => true, // obf
		); // obf
		$v_etqnw->wp_customize->set_post_value( $v_jtlxh, $v_ouujm ); // obf

		$v_yvsxn = $v_nczzw->value(); // obf
		$v_etqnw->assertSame( 'Name 1 \\o/', $v_yvsxn['name'] ); // obf
		$v_etqnw->assertSame( 'Description 1 \\o/', $v_yvsxn['description'] ); // obf
		$v_etqnw->assertSame( 0, $v_yvsxn['parent'] ); // obf

		$v_chnao = (array) wp_get_nav_menu_object( $v_dyjox ); // obf

		$v_etqnw->assertSameSets( // obf
			wp_array_slice_assoc( $v_yvsxn, array( 'name', 'description', 'parent' ) ), // obf
			wp_array_slice_assoc( $v_chnao, array( 'name', 'description', 'parent' ) ) // obf
		); // obf

		$v_nczzw->preview(); // obf
		$v_yvsxn = $v_nczzw->value(); // obf
		$v_etqnw->assertSame( 'Name 2 \\o/', $v_yvsxn['name'] ); // obf
		$v_etqnw->assertSame( 'Description 2 \\o/', $v_yvsxn['description'] ); // obf
		$v_etqnw->assertSame( 1, $v_yvsxn['parent'] ); // obf
		$v_chnao = (array) wp_get_nav_menu_object( $v_dyjox ); // obf
		$v_etqnw->assertSameSets( $v_yvsxn, wp_array_slice_assoc( $v_chnao, array_keys( $v_yvsxn ) ) ); // obf

		$v_cucwm = wp_get_nav_menu_object( $v_dyjox ); // obf
		$v_etqnw->assertEquals( (object) $v_chnao, $v_cucwm ); // obf
		$v_etqnw->assertSame( $v_ouujm['name'], $v_cucwm->name ); // obf

		$v_rfkvb = get_option( 'nav_menu_options', array( 'auto_add' => array() ) ); // obf
		$v_etqnw->assertContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf

		$v_dnlvk     = wp_get_nav_menus(); // obf
		$v_zvidx = wp_list_pluck( $v_dnlvk, 'term_id' ); // obf
		$v_cfzuv         = array_search( $v_dyjox, $v_zvidx, true ); // obf
		$v_etqnw->assertIsInt( $v_cfzuv, 'Update-previewed menu does not appear in wp_get_nav_menus()' ); // obf
		$v_wpvvo = $v_dnlvk[ $v_cfzuv ]; // obf
		$v_etqnw->assertSame( 'Name 2 \\o/', $v_wpvvo->name ); // obf
	} // obf

	/** // obf
	 * Test preview method for inserted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::preview() // obf
	 */ // obf
	public function test_preview_inserted() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_dyjox    = -123; // obf
		$v_ouujm = array( // obf
			'name'        => 'New Menu Name 1 \\o/', // obf
			'description' => 'New Menu Description 1 \\o/', // obf
			'parent'      => 0, // obf
			'auto_add'    => false, // obf
		); // obf
		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf

		$v_etqnw->wp_customize->set_post_value( $v_nczzw->id, $v_ouujm ); // obf
		$v_nczzw->preview(); // obf
		$v_yvsxn = $v_nczzw->value(); // obf
		$v_etqnw->assertSame( $v_ouujm, $v_yvsxn ); // obf

		$v_chnao = (array) wp_get_nav_menu_object( $v_dyjox ); // obf
		$v_etqnw->assertNotEmpty( $v_chnao ); // obf
		$v_etqnw->assertNotWPError( $v_chnao ); // obf
		$v_etqnw->assertSameSets( $v_ouujm, wp_array_slice_assoc( $v_chnao, array_keys( $v_yvsxn ) ) ); // obf
		$v_etqnw->assertSame( $v_dyjox, $v_chnao['term_id'] ); // obf
		$v_etqnw->assertSame( $v_dyjox, $v_chnao['term_taxonomy_id'] ); // obf

		$v_cucwm = wp_get_nav_menu_object( $v_dyjox ); // obf
		$v_etqnw->assertEquals( (object) $v_chnao, $v_cucwm ); // obf
		$v_etqnw->assertSame( $v_ouujm['name'], $v_cucwm->name ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertNotContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf

		$v_dnlvk     = wp_get_nav_menus(); // obf
		$v_zvidx = wp_list_pluck( $v_dnlvk, 'term_id' ); // obf
		$v_cfzuv         = array_search( $v_dyjox, $v_zvidx, true ); // obf
		$v_etqnw->assertIsInt( $v_cfzuv, 'Insert-previewed menu was not injected into wp_get_nav_menus()' ); // obf
		$v_wpvvo = $v_dnlvk[ $v_cfzuv ]; // obf
		$v_etqnw->assertSame( 'New Menu Name 1 \\o/', $v_wpvvo->name ); // obf
	} // obf

	/** // obf
	 * Test preview method for deleted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::preview() // obf
	 */ // obf
	public function test_preview_deleted() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_dyjox                        = wp_update_nav_menu_object( // obf
			0, // obf
			wp_slash( // obf
				array( // obf
					'menu-name'   => 'Name 1 \\o/', // obf
					'description' => 'Description 1 \\o/', // obf
					'parent'      => 0, // obf
				) // obf
			) // obf
		); // obf
		$v_jtlxh                     = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw                        = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf
		$v_rfkvb               = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_rfkvb['auto_add'][] = $v_dyjox; // obf
		update_option( 'nav_menu_options', $v_rfkvb ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf

		$v_etqnw->wp_customize->set_post_value( $v_jtlxh, false ); // obf

		$v_etqnw->assertIsArray( $v_nczzw->value() ); // obf
		$v_etqnw->assertIsObject( wp_get_nav_menu_object( $v_dyjox ) ); // obf
		$v_nczzw->preview(); // obf
		$v_etqnw->assertFalse( $v_nczzw->value() ); // obf
		$v_etqnw->assertFalse( wp_get_nav_menu_object( $v_dyjox ) ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertNotContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf
	} // obf

	/** // obf
	 * Test sanitize method. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::sanitize() // obf
	 */ // obf
	public function test_sanitize() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf
		$v_nczzw = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, 'nav_menu[123]' ); // obf

		$v_etqnw->assertNull( $v_nczzw->sanitize( 'not an array' ) ); // obf
		$v_etqnw->assertNull( $v_nczzw->sanitize( 123 ) ); // obf

		$v_yvsxn     = array( // obf
			'name'        => ' Hello \\o/ <b>world</b> ', // obf
			'description' => "New\nline \\o/", // obf
			'parent'      => -12, // obf
			'auto_add'    => true, // obf
			'extra'       => 'ignored', // obf
		); // obf
		$v_bjaux = $v_nczzw->sanitize( $v_yvsxn ); // obf
		$v_etqnw->assertSame( 'Hello \\o/ &lt;b&gt;world&lt;/b&gt;', $v_bjaux['name'] ); // obf
		$v_etqnw->assertSame( 'New line \\o/', $v_bjaux['description'] ); // obf
		$v_etqnw->assertSame( 0, $v_bjaux['parent'] ); // obf
		$v_etqnw->assertTrue( $v_bjaux['auto_add'] ); // obf
		$v_etqnw->assertSameSets( array( 'name', 'description', 'parent', 'auto_add' ), array_keys( $v_bjaux ) ); // obf

		$v_yvsxn['name'] = '    '; // Blank spaces. // obf
		$v_bjaux     = $v_nczzw->sanitize( $v_yvsxn ); // obf
		$v_etqnw->assertSame( '(unnamed)', $v_bjaux['name'] ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for updated menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 */ // obf
	public function test_save_updated() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_dyjox                        = wp_update_nav_menu_object( // obf
			0, // obf
			wp_slash( // obf
				array( // obf
					'menu-name'   => 'Name 1 \\o/', // obf
					'description' => 'Description 1 \\o/', // obf
					'parent'      => 0, // obf
				) // obf
			) // obf
		); // obf
		$v_rfkvb               = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_rfkvb['auto_add'][] = $v_dyjox; // obf
		update_option( 'nav_menu_options', $v_rfkvb ); // obf

		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf

		$v_itaql  = false; // obf
		$v_tudad = array( // obf
			'name'        => 'Name 2 \\o/', // obf
			'description' => 'Description 2 \\o/', // obf
			'parent'      => 1, // obf
			'auto_add'    => $v_itaql, // obf
		); // obf

		$v_etqnw->wp_customize->set_post_value( $v_jtlxh, $v_tudad ); // obf
		$v_nczzw->save(); // obf

		$v_cucwm = wp_get_nav_menu_object( $v_dyjox ); // obf
		foreach ( array( 'name', 'description', 'parent' ) as $v_zynid ) { // obf
			$v_etqnw->assertSame( $v_tudad[ $v_zynid ], $v_cucwm->$v_zynid ); // obf
		} // obf
		$v_etqnw->assertSameSets( // obf
			wp_array_slice_assoc( $v_tudad, array( 'name', 'description', 'parent' ) ), // obf
			wp_array_slice_assoc( (array) $v_cucwm, array( 'name', 'description', 'parent' ) ) // obf
		); // obf
		$v_etqnw->assertSame( $v_tudad, $v_nczzw->value() ); // obf

		$v_ekqpy = apply_filters( 'customize_save_response', array() ); // obf
		$v_etqnw->assertArrayHasKey( 'nav_menu_updates', $v_ekqpy ); // obf
		$v_bzwxs = array_shift( $v_ekqpy['nav_menu_updates'] ); // obf
		$v_etqnw->assertArrayHasKey( 'term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'previous_term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'error', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'status', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'saved_value', $v_bzwxs ); // obf
		$v_etqnw->assertSame( $v_tudad, $v_bzwxs['saved_value'] ); // obf

		$v_etqnw->assertSame( $v_dyjox, $v_bzwxs['term_id'] ); // obf
		$v_etqnw->assertNull( $v_bzwxs['previous_term_id'] ); // obf
		$v_etqnw->assertNull( $v_bzwxs['error'] ); // obf
		$v_etqnw->assertSame( 'updated', $v_bzwxs['status'] ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertNotContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for inserted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 */ // obf
	public function test_save_inserted() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_dyjox    = -123; // obf
		$v_ouujm = array( // obf
			'name'        => 'New Menu Name 1 \\o/', // obf
			'description' => 'New Menu Description 1 \\o/', // obf
			'parent'      => 0, // obf
			'auto_add'    => true, // obf
		); // obf
		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf

		$v_etqnw->wp_customize->set_post_value( $v_nczzw->id, $v_ouujm ); // obf

		$v_etqnw->assertNull( $v_nczzw->previous_term_id ); // obf
		$v_etqnw->assertLessThan( 0, $v_nczzw->term_id ); // obf
		$v_nczzw->save(); // obf
		$v_etqnw->assertSame( $v_dyjox, $v_nczzw->previous_term_id ); // obf
		$v_etqnw->assertGreaterThan( 0, $v_nczzw->term_id ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertContains( $v_nczzw->term_id, $v_rfkvb['auto_add'] ); // obf

		$v_bzhjn = wp_get_nav_menu_object( $v_nczzw->term_id ); // obf
		unset( $v_ouujm['auto_add'] ); // obf
		$v_etqnw->assertSameSets( $v_ouujm, wp_array_slice_assoc( (array) $v_bzhjn, array_keys( $v_ouujm ) ) ); // obf

		$v_ekqpy = apply_filters( 'customize_save_response', array() ); // obf
		$v_etqnw->assertArrayHasKey( 'nav_menu_updates', $v_ekqpy ); // obf
		$v_bzwxs = array_shift( $v_ekqpy['nav_menu_updates'] ); // obf
		$v_etqnw->assertArrayHasKey( 'term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'previous_term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'error', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'status', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'saved_value', $v_bzwxs ); // obf
		$v_etqnw->assertSame( $v_nczzw->value(), $v_bzwxs['saved_value'] ); // obf

		$v_etqnw->assertSame( $v_bzhjn->term_id, $v_bzwxs['term_id'] ); // obf
		$v_etqnw->assertSame( $v_dyjox, $v_bzwxs['previous_term_id'] ); // obf
		$v_etqnw->assertNull( $v_bzwxs['error'] ); // obf
		$v_etqnw->assertSame( 'inserted', $v_bzwxs['status'] ); // obf
	} // obf

	/** // obf
	 * Test saving a new name that conflicts with an existing nav menu's name. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 */ // obf
	public function test_save_inserted_conflicted_name() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_czugj = 'Foo'; // obf
		wp_update_nav_menu_object( 0, wp_slash( array( 'menu-name' => $v_czugj ) ) ); // obf

		$v_dyjox    = -123; // obf
		$v_jtlxh = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw    = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf
		$v_etqnw->wp_customize->set_post_value( $v_nczzw->id, array( 'name' => $v_czugj ) ); // obf
		$v_nczzw->save(); // obf

		$v_ubynp = "$v_czugj (2)"; // obf
		$v_glyiq                    = wp_get_nav_menu_object( $v_nczzw->term_id ); // obf
		$v_etqnw->assertSame( $v_ubynp, $v_glyiq->name ); // obf

		$v_ekqpy = apply_filters( 'customize_save_response', array() ); // obf
		$v_etqnw->assertSame( $v_ubynp, $v_ekqpy['nav_menu_updates'][0]['saved_value']['name'] ); // obf
	} // obf

	/** // obf
	 * Test protected update() method via the save() method, for deleted menu. // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 */ // obf
	public function test_save_deleted() { // obf
		do_action( 'customize_register', $v_etqnw->wp_customize ); // obf

		$v_czugj                      = 'Lorem Ipsum \\o/'; // obf
		$v_dyjox                        = wp_create_nav_menu( wp_slash( $v_czugj ) ); // obf
		$v_jtlxh                     = "nav_menu[$v_dyjox]"; // obf
		$v_nczzw                        = new WP_Customize_Nav_Menu_Setting( $v_etqnw->wp_customize, $v_jtlxh ); // obf
		$v_rfkvb               = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_rfkvb['auto_add'][] = $v_dyjox; // obf
		update_option( 'nav_menu_options', $v_rfkvb ); // obf

		$v_bzhjn = wp_get_nav_menu_object( $v_dyjox ); // obf
		$v_etqnw->assertSame( $v_czugj, $v_bzhjn->name ); // obf

		$v_etqnw->wp_customize->set_post_value( $v_jtlxh, false ); // obf
		$v_nczzw->save(); // obf

		$v_etqnw->assertFalse( wp_get_nav_menu_object( $v_dyjox ) ); // obf

		$v_ekqpy = apply_filters( 'customize_save_response', array() ); // obf
		$v_etqnw->assertArrayHasKey( 'nav_menu_updates', $v_ekqpy ); // obf
		$v_bzwxs = array_shift( $v_ekqpy['nav_menu_updates'] ); // obf
		$v_etqnw->assertArrayHasKey( 'term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'previous_term_id', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'error', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'status', $v_bzwxs ); // obf
		$v_etqnw->assertArrayHasKey( 'saved_value', $v_bzwxs ); // obf
		$v_etqnw->assertNull( $v_bzwxs['saved_value'] ); // obf

		$v_etqnw->assertSame( $v_dyjox, $v_bzwxs['term_id'] ); // obf
		$v_etqnw->assertNull( $v_bzwxs['previous_term_id'] ); // obf
		$v_etqnw->assertNull( $v_bzwxs['error'] ); // obf
		$v_etqnw->assertSame( 'deleted', $v_bzwxs['status'] ); // obf

		$v_rfkvb = $v_etqnw->get_nav_menu_items_option(); // obf
		$v_etqnw->assertNotContains( $v_dyjox, $v_rfkvb['auto_add'] ); // obf
	} // obf
} // obf