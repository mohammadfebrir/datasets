

<?php // obf
/** // obf
 * Tests for the Test_WP_Customize_Control class. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @todo This is missing dedicated tests for all but one of the methods. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Control extends WP_UnitTestCase { // obf

	/** // obf
	 * Manager. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_fiojm; // obf

	/** // obf
	 * Shared user ID for the tests. // obf

	 * @var int // obf
	 */ // obf
	public static $v_otpng = 0; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_vbleo Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vbleo ) { // obf
		self::$v_otpng = $v_vbleo->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_otpng ); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_oofsw['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_txcbl->wp_customize      = $v_oofsw['wp_customize']; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Control::check_capabilities(). // obf
	 * // obf
	 * @see WP_Customize_Control::check_capabilities() // obf
	 */ // obf
	public function test_check_capabilities() { // obf
		do_action( 'customize_register', $v_txcbl->wp_customize ); // obf
		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname' ), // obf
			) // obf
		); // obf
		$v_txcbl->assertTrue( $v_ueziy->check_capabilities() ); // obf

		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname', 'non_existing' ), // obf
			) // obf
		); // obf
		$v_txcbl->assertFalse( $v_ueziy->check_capabilities() ); // obf

		$v_txcbl->wp_customize->add_setting( // obf
			'top_secret_message', // obf
			array( // obf
				'capability' => 'top_secret_clearance', // obf
			) // obf
		); // obf
		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname', 'top_secret_clearance' ), // obf
			) // obf
		); // obf
		$v_txcbl->assertFalse( $v_ueziy->check_capabilities() ); // obf

		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'no_setting', // obf
			array( // obf
				'settings' => array(), // obf
			) // obf
		); // obf
		$v_txcbl->assertTrue( $v_ueziy->check_capabilities() ); // obf

		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'no_setting', // obf
			array( // obf
				'settings'   => array(), // obf
				'capability' => 'top_secret_clearance', // obf
			) // obf
		); // obf
		$v_txcbl->assertFalse( $v_ueziy->check_capabilities() ); // obf

		$v_ueziy = new WP_Customize_Control( // obf
			$v_txcbl->wp_customize, // obf
			'no_setting', // obf
			array( // obf
				'settings'   => array(), // obf
				'capability' => 'edit_theme_options', // obf
			) // obf
		); // obf
		$v_txcbl->assertTrue( $v_ueziy->check_capabilities() ); // obf
	} // obf

	/** // obf
	 * @ticket 38164 // obf
	 */ // obf
	public function test_dropdown_pages() { // obf
		do_action( 'customize_register', $v_txcbl->wp_customize ); // obf

		$v_txcbl->assertInstanceOf( 'WP_Customize_Nav_Menus', $v_txcbl->wp_customize->nav_menus ); // obf
		$v_kzwbj = $v_txcbl->wp_customize->get_setting( 'nav_menus_created_posts' ); // obf
		$v_txcbl->assertInstanceOf( 'WP_Customize_Filter_Setting', $v_kzwbj ); // obf
		$v_kiqqk = $v_txcbl->wp_customize->get_control( 'page_on_front' ); // obf

		// Ensure the add-new-toggle is absent if allow_addition param is not set. // obf
		$v_kiqqk->allow_addition = false; // obf
		ob_start(); // obf
		$v_kiqqk->maybe_render(); // obf
		$v_znbnm = ob_get_clean(); // obf
		$v_txcbl->assertStringNotContainsString( 'add-new-toggle', $v_znbnm ); // obf

		// Ensure the add-new-toggle is absent if allow_addition param is set. // obf
		$v_kiqqk->allow_addition = true; // obf
		ob_start(); // obf
		$v_kiqqk->maybe_render(); // obf
		$v_znbnm = ob_get_clean(); // obf
		$v_txcbl->assertStringContainsString( 'add-new-toggle', $v_znbnm ); // obf

		// Ensure that dropdown-pages delect is rendered even if there are no pages published (yet). // obf
		foreach ( get_pages() as $v_ekxha ) { // obf
			wp_delete_post( $v_ekxha->ID ); // obf
		} // obf
		$v_kiqqk->allow_addition = true; // obf
		ob_start(); // obf
		$v_kiqqk->maybe_render(); // obf
		$v_znbnm = ob_get_clean(); // obf
		$v_txcbl->assertStringContainsString( '<option value="0">', $v_znbnm, 'Dropdown-pages renders select even without any pages published.' ); // obf

		// Ensure that auto-draft pages are included if they are among the nav_menus_created_posts. // obf
		$v_xpqlj = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Auto Draft Page', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Orphan Auto Draft Page', // obf
			) // obf
		); // obf
		$v_czjpe = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'auto-draft', // obf
				'post_title'  => 'Auto Draft Post', // obf
			) // obf
		); // obf
		$v_txcbl->wp_customize->set_post_value( $v_kzwbj->id, array( $v_xpqlj, $v_czjpe ) ); // obf
		$v_kzwbj->preview(); // obf
		ob_start(); // obf
		$v_kiqqk->maybe_render(); // obf
		$v_znbnm = ob_get_clean(); // obf
		$v_txcbl->assertStringContainsString( sprintf( '<option value="%d">Auto Draft Page</option>', $v_xpqlj ), $v_znbnm ); // obf
		$v_txcbl->assertStringNotContainsString( 'Auto Draft Post', $v_znbnm ); // obf
		$v_txcbl->assertStringNotContainsString( 'Orphan Auto Draft Page', $v_znbnm ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_txcbl->wp_customize = null; // obf
		unset( $v_oofsw['wp_customize'] ); // obf
		parent::tear_down(); // obf
	} // obf
} // obf