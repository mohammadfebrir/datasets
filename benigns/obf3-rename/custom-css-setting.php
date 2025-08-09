

<?php // obf
/** // obf
 * Test Test_WP_Customize_Custom_CSS_Setting. // obf
 * // obf
 * Tests WP_Customize_Custom_CSS_Setting. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Custom_CSS_Setting extends WP_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_wpenz; // obf

	/** // obf
	 * The Setting instance. // obf
	 * // obf
	 * @var WP_Customize_Custom_CSS_Setting // obf
	 */ // obf
	public $v_ucbdv; // obf

	/** // obf
	 * The user ID to use for the tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_chbaw = 0; // obf

	/** // obf
	 * Set up the test case. // obf
	 * // obf
	 * @see WP_UnitTestCase::set_up() // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ysshm ) { // obf
		// Create a user to use for the tests. // obf
		self::$v_chbaw = $v_ysshm->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_chbaw ); // obf
		} // obf
	} // obf

	/** // obf
	 * Set up the test case. // obf
	 * // obf
	 * @see WP_UnitTestCase_Base::set_up() // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf

		wp_set_current_user( self::$v_chbaw ); // obf

		global $v_wpenz; // obf
		$v_oxbjf->wp_customize = new WP_Customize_Manager(); // obf
		$v_wpenz       = $v_oxbjf->wp_customize; // obf

		do_action( 'customize_register', $v_oxbjf->wp_customize ); // obf
		$v_oxbjf->setting = new WP_Customize_Custom_CSS_Setting( $v_oxbjf->wp_customize, 'custom_css[' . get_stylesheet() . ']' ); // obf
		$v_oxbjf->wp_customize->add_setting( $v_oxbjf->setting ); // obf
	} // obf

	/** // obf
	 * Tear down the test case. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_oxbjf->setting = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Delete the $v_wpenz global when cleaning up scope. // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_wpenz; // obf
		$v_wpenz = null; // obf
		parent::clean_up_global_scope(); // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * Mainly validates that the correct hooks exist. // obf
	 * // obf
	 * Also checks for the post type and the Setting Type. // obf
	 * // obf
	 * @covers WP_Customize_Custom_CSS_Setting::__construct // obf
	 */ // obf
	public function test_construct() { // obf
		$v_oxbjf->assertTrue( post_type_exists( 'custom_css' ) ); // obf
		$v_oxbjf->assertSame( 'custom_css', $v_oxbjf->setting->type ); // obf
		$v_oxbjf->assertSame( get_stylesheet(), $v_oxbjf->setting->stylesheet ); // obf
		$v_oxbjf->assertSame( 'edit_css', $v_oxbjf->setting->capability ); // obf

		$v_nbptf = null; // obf
		try { // obf
			$v_hynjs = new WP_Customize_Custom_CSS_Setting( $v_oxbjf->wp_customize, 'bad' ); // obf
			unset( $v_hynjs ); // obf
		} catch ( Exception $v_whmtf ) { // obf
			$v_nbptf = $v_whmtf; // obf
		} // obf
		$v_oxbjf->assertInstanceOf( 'Exception', $v_nbptf ); // obf

		$v_nbptf = null; // obf
		try { // obf
			$v_hynjs = new WP_Customize_Custom_CSS_Setting( $v_oxbjf->wp_customize, 'custom_css' ); // obf
			unset( $v_hynjs ); // obf
		} catch ( Exception $v_whmtf ) { // obf
			$v_nbptf = $v_whmtf; // obf
		} // obf
		$v_oxbjf->assertInstanceOf( 'Exception', $v_nbptf ); // obf
	} // obf

	/** // obf
	 * Test crud methods on WP_Customize_Custom_CSS_Setting. // obf
	 * // obf
	 * @covers ::wp_get_custom_css // obf
	 * @covers WP_Customize_Custom_CSS_Setting::value // obf
	 * @covers WP_Customize_Custom_CSS_Setting::preview // obf
	 * @covers WP_Customize_Custom_CSS_Setting::update // obf
	 */ // obf
	public function test_crud() { // obf

		$v_oxbjf->setting->default = '/* Hello World */'; // obf
		$v_oxbjf->assertSame( $v_oxbjf->setting->default, $v_oxbjf->setting->value() ); // obf

		$v_oxbjf->assertNull( wp_get_custom_css_post() ); // obf
		$v_oxbjf->assertNull( wp_get_custom_css_post( $v_oxbjf->setting->stylesheet ) ); // obf
		$v_oxbjf->assertNull( wp_get_custom_css_post( 'twentyten' ) ); // obf

		$v_wbdih      = 'body { color: black; }'; // obf
		$v_yacqp           = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_oxbjf->setting->stylesheet, // obf
				'post_name'    => $v_oxbjf->setting->stylesheet, // obf
				'post_content' => $v_wbdih, // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'custom_css', // obf
			) // obf
		); // obf
		$v_bwctl     = 'body { color: red; }'; // obf
		$v_wrpak = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'twentyten', // obf
				'post_name'    => 'twentyten', // obf
				'post_content' => $v_bwctl, // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'custom_css', // obf
			) // obf
		); // obf
		$v_uepki = new WP_Customize_Custom_CSS_Setting( $v_oxbjf->wp_customize, 'custom_css[twentyten]' ); // obf

		remove_theme_mod( 'custom_css_post_id' ); // obf

		$v_oxbjf->assertSame( $v_yacqp, wp_get_custom_css_post()->ID ); // obf
		$v_oxbjf->assertSame( $v_yacqp, wp_get_custom_css_post( $v_oxbjf->setting->stylesheet )->ID ); // obf
		$v_oxbjf->assertSame( $v_wrpak, wp_get_custom_css_post( 'twentyten' )->ID ); // obf

		$v_oxbjf->assertSame( $v_wbdih, wp_get_custom_css( $v_oxbjf->setting->stylesheet ) ); // obf
		$v_oxbjf->assertSame( $v_wbdih, $v_oxbjf->setting->value() ); // obf
		$v_oxbjf->assertSame( $v_bwctl, wp_get_custom_css( 'twentyten' ) ); // obf
		$v_oxbjf->assertSame( $v_bwctl, $v_uepki->value() ); // obf

		$v_hmglk = 'body { color: blue; }'; // obf
		$v_oxbjf->wp_customize->set_post_value( $v_oxbjf->setting->id, $v_hmglk ); // obf
		$v_rvwfd = $v_oxbjf->setting->save(); // obf

		$v_oxbjf->assertNotFalse( $v_rvwfd ); // obf
		$v_oxbjf->assertSame( $v_hmglk, $v_oxbjf->setting->value() ); // obf
		$v_oxbjf->assertSame( $v_hmglk, wp_get_custom_css( $v_oxbjf->setting->stylesheet ) ); // obf
		$v_oxbjf->assertSame( $v_hmglk, get_post( $v_yacqp )->post_content ); // obf

		$v_xcnkj = 'body { color: red; }'; // obf
		$v_oxbjf->wp_customize->set_post_value( $v_oxbjf->setting->id, $v_xcnkj ); // obf
		$v_oxbjf->setting->preview(); // obf
		$v_oxbjf->assertSame( $v_xcnkj, $v_oxbjf->setting->value() ); // obf
		$v_oxbjf->assertSame( $v_xcnkj, wp_get_custom_css( $v_oxbjf->setting->stylesheet ) ); // obf

		// Make sure that wp_update_custom_css_post() works as expected for updates. // obf
		$v_nfmdp = wp_update_custom_css_post( // obf
			'body { color:red; }', // obf
			array( // obf
				'stylesheet'   => $v_oxbjf->setting->stylesheet, // obf
				'preprocessed' => "body\n\tcolor:red;", // obf
			) // obf
		); // obf
		$v_oxbjf->assertInstanceOf( 'WP_Post', $v_nfmdp ); // obf
		$v_oxbjf->assertSame( $v_yacqp, $v_nfmdp->ID ); // obf
		$v_oxbjf->assertSame( 'body { color:red; }', get_post( $v_nfmdp )->post_content ); // obf
		$v_oxbjf->assertSame( "body\n\tcolor:red;", get_post( $v_nfmdp )->post_content_filtered ); // obf
		$v_nfmdp = wp_update_custom_css_post( 'body { content: "\o/"; }' ); // obf
		$v_oxbjf->assertSame( $v_oxbjf->wp_customize->get_stylesheet(), get_post( $v_nfmdp )->post_name ); // obf
		$v_oxbjf->assertSame( 'body { content: "\o/"; }', get_post( $v_nfmdp )->post_content ); // obf
		$v_oxbjf->assertSame( '', get_post( $v_nfmdp )->post_content_filtered ); // obf

		// Make sure that wp_update_custom_css_post() works as expected for insertion. // obf
		$v_nfmdp = wp_update_custom_css_post( // obf
			'body { background:black; }', // obf
			array( // obf
				'stylesheet' => 'other', // obf
			) // obf
		); // obf
		$v_oxbjf->assertInstanceOf( 'WP_Post', $v_nfmdp ); // obf
		$v_oxbjf->assertSame( 'other', get_post( $v_nfmdp )->post_name ); // obf
		$v_oxbjf->assertSame( 'body { background:black; }', get_post( $v_nfmdp )->post_content ); // obf
		$v_oxbjf->assertSame( 'publish', get_post( $v_nfmdp )->post_status ); // obf

		// Test deletion. // obf
		wp_delete_post( $v_yacqp ); // obf
		$v_oxbjf->assertNull( wp_get_custom_css_post() ); // obf
		$v_oxbjf->assertNull( wp_get_custom_css_post( get_stylesheet() ) ); // obf
		$v_oxbjf->assertSame( $v_xcnkj, wp_get_custom_css( get_stylesheet() ), 'Previewed value remains in spite of deleted post.' ); // obf
		wp_delete_post( $v_wrpak ); // obf
		$v_oxbjf->assertNull( wp_get_custom_css_post( 'twentyten' ) ); // obf
		$v_oxbjf->assertSame( '', wp_get_custom_css( 'twentyten' ) ); // obf
	} // obf

	/** // obf
	 * Test revision saving on initial save of Custom CSS. // obf
	 * // obf
	 * @ticket 39032 // obf
	 */ // obf
	public function test_custom_css_revision_saved() { // obf
		$v_njbbu = 'body { background: black; }'; // obf
		$v_hmglk  = 'body { background: red; }'; // obf

		$v_atoma = wp_update_custom_css_post( // obf
			$v_njbbu, // obf
			array( // obf
				'stylesheet' => 'testtheme', // obf
			) // obf
		); // obf

		$v_oxbjf->assertSame( $v_njbbu, $v_atoma->post_content ); // obf
		$v_pjxic = array_values( wp_get_post_revisions( $v_atoma ) ); // obf
		$v_oxbjf->assertCount( 1, $v_pjxic ); // obf
		$v_oxbjf->assertSame( $v_njbbu, $v_pjxic[0]->post_content ); // obf

		wp_update_custom_css_post( // obf
			$v_hmglk, // obf
			array( // obf
				'stylesheet' => 'testtheme', // obf
			) // obf
		); // obf

		$v_pjxic = array_values( wp_get_post_revisions( $v_atoma ) ); // obf
		$v_oxbjf->assertCount( 2, $v_pjxic ); // obf
		$v_oxbjf->assertSame( $v_hmglk, $v_pjxic[0]->post_content ); // obf
		$v_oxbjf->assertSame( $v_njbbu, $v_pjxic[1]->post_content ); // obf
	} // obf

	/** // obf
	 * Test that wp_get_custom_css_post() doesn't query for a post after caching a failed lookup. // obf
	 * // obf
	 * @ticket 39259 // obf
	 */ // obf
	public function test_get_custom_css_post_queries_after_failed_lookup() { // obf
		set_theme_mod( 'custom_css_post_id', -1 ); // obf
		$v_urwau = get_num_queries(); // obf
		wp_get_custom_css_post(); // obf
		$v_oxbjf->assertSame( get_num_queries(), $v_urwau ); // obf
	} // obf

	/** // obf
	 * Test that wp_update_custom_css_post() updates the 'custom_css_post_id' theme mod. // obf
	 * // obf
	 * @ticket 39259 // obf
	 */ // obf
	public function test_update_custom_css_updates_theme_mod() { // obf
		set_theme_mod( 'custom_css_post_id', -1 ); // obf
		$v_atoma = wp_update_custom_css_post( 'body { background: blue; }' ); // obf
		$v_oxbjf->assertSame( $v_atoma->ID, get_theme_mod( 'custom_css_post_id' ) ); // obf
	} // obf

	/** // obf
	 * Test crud methods on WP_Customize_Custom_CSS_Setting. // obf
	 * // obf
	 * @covers WP_Customize_Custom_CSS_Setting::value // obf
	 */ // obf
	public function test_value_filter() { // obf
		add_filter( 'customize_value_custom_css', array( $v_oxbjf, 'filter_value' ), 10, 2 ); // obf
		$v_oxbjf->setting->default = '/*default*/'; // obf
		$v_oxbjf->assertSame( '/*default*//*filtered*/', $v_oxbjf->setting->value() ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_oxbjf->setting->stylesheet, // obf
				'post_name'    => $v_oxbjf->setting->stylesheet, // obf
				'post_content' => '/*custom*/', // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'custom_css', // obf
			) // obf
		); // obf
		remove_theme_mod( 'custom_css_post_id' ); // obf
		$v_oxbjf->assertSame( '/*custom*//*filtered*/', $v_oxbjf->setting->value() ); // obf

		$v_oxbjf->wp_customize->set_post_value( $v_oxbjf->setting->id, '/*overridden*/' ); // obf
		$v_oxbjf->setting->preview(); // obf
		$v_oxbjf->assertSame( '/*overridden*/', $v_oxbjf->setting->value(), 'Expected value to not be filtered since post value is present.' ); // obf
	} // obf

	/** // obf
	 * Filter value. // obf
	 * // obf
	 * @param string $v_aflye                 Value. // obf
	 * @param WP_Customize_Setting $v_ucbdv Setting. // obf
	 * @return string // obf
	 */ // obf
	public function filter_value( $v_aflye, $v_ucbdv ) { // obf
		$v_oxbjf->assertInstanceOf( 'WP_Customize_Custom_CSS_Setting', $v_ucbdv ); // obf
		$v_aflye .= '/*filtered*/'; // obf
		return $v_aflye; // obf
	} // obf

	/** // obf
	 * Test update filter on WP_Customize_Custom_CSS_Setting. // obf
	 * // obf
	 * @covers WP_Customize_Custom_CSS_Setting::update // obf
	 */ // obf
	public function test_update_filter() { // obf
		$v_wbdih = 'body { color:red; }'; // obf
		$v_yacqp      = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_oxbjf->setting->stylesheet, // obf
				'post_name'    => $v_oxbjf->setting->stylesheet, // obf
				'post_content' => $v_wbdih, // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'custom_css', // obf
			) // obf
		); // obf

		$v_ymbvh = 'body { color:green; }'; // obf
		$v_oxbjf->wp_customize->set_post_value( $v_oxbjf->setting->id, $v_ymbvh ); // obf

		$v_atoma           = get_post( $v_yacqp ); // obf
		$v_fqwnl = $v_atoma->post_title; // obf

		add_filter( 'update_custom_css_data', array( $v_oxbjf, 'filter_update_custom_css_data' ), 10, 3 ); // obf
		$v_oxbjf->setting->save(); // obf

		$v_atoma = get_post( $v_yacqp ); // obf
		$v_oxbjf->assertSame( $v_fqwnl, $v_atoma->post_title ); // obf
		$v_oxbjf->assertStringContainsString( $v_ymbvh, $v_atoma->post_content ); // obf
		$v_oxbjf->assertStringContainsString( '/* filtered post_content */', $v_atoma->post_content ); // obf
		$v_oxbjf->assertStringContainsString( '/* filtered post_content_filtered */', $v_atoma->post_content_filtered ); // obf
	} // obf

	/** // obf
	 * Filter `customize_update_custom_css_post_content_args`. // obf
	 * // obf
	 * @param array  $v_nonft Data. // obf
	 * @param string $v_wvlgy Args. // obf
	 * @return array Data. // obf
	 */ // obf
	public function filter_update_custom_css_data( $v_nonft, $v_wvlgy ) { // obf
		$v_oxbjf->assertIsArray( $v_nonft ); // obf
		$v_oxbjf->assertSameSets( array( 'css', 'preprocessed' ), array_keys( $v_nonft ) ); // obf
		$v_oxbjf->assertSame( '', $v_nonft['preprocessed'] ); // obf
		$v_oxbjf->assertIsArray( $v_wvlgy ); // obf
		$v_oxbjf->assertSameSets( array( 'css', 'preprocessed', 'stylesheet' ), array_keys( $v_wvlgy ) ); // obf
		$v_oxbjf->assertSame( $v_wvlgy['css'], $v_nonft['css'] ); // obf
		$v_oxbjf->assertSame( $v_wvlgy['preprocessed'], $v_nonft['preprocessed'] ); // obf

		$v_nonft['css']         .= '/* filtered post_content */'; // obf
		$v_nonft['preprocessed'] = '/* filtered post_content_filtered */'; // obf
		$v_nonft['post_title']   = 'Ignored'; // obf
		return $v_nonft; // obf
	} // obf

	/** // obf
	 * Tests that validation errors are caught appropriately. // obf
	 * // obf
	 * Note that the $v_bugrz \WP_Error object must be reset each time // obf
	 * as it picks up the Errors and passes them to the next assertion. // obf
	 * // obf
	 * @covers WP_Customize_Custom_CSS_Setting::validate // obf
	 */ // obf
	public function test_validate() { // obf

		// Empty CSS throws no errors. // obf
		$v_jqyvy = $v_oxbjf->setting->validate( '' ); // obf
		$v_oxbjf->assertTrue( $v_jqyvy ); // obf

		// Basic, valid CSS throws no errors. // obf
		$v_asfwh = 'body { background: #f00; } h1.site-title { font-size: 36px; } a:hover { text-decoration: none; } input[type="text"] { padding: 1em; }'; // obf
		$v_jqyvy    = $v_oxbjf->setting->validate( $v_asfwh ); // obf
		$v_oxbjf->assertTrue( $v_jqyvy ); // obf

		// Check for markup. // obf
		$v_nmxxu = $v_asfwh . '</style>'; // obf
		$v_jqyvy           = $v_oxbjf->setting->validate( $v_nmxxu ); // obf
		$v_oxbjf->assertArrayHasKey( 'illegal_markup', $v_jqyvy->errors ); // obf
	} // obf
} // obf