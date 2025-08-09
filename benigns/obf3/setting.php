
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * Tests for the WP_Customize_Setting class. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Tests_WP_Customize_Setting extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	protected $v_ktzcy; // obf

	/** // obf
	 * @var stdClass an instance which serves as a symbol to do identity checks with // obf
	 */ // obf
	public $v_ktjoy; // obf

	/** // obf
	 * Shared admin user ID for the tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_tvqnt = 0; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_pcjan Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_pcjan ) { // obf
		self::$v_tvqnt = $v_pcjan->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_hfxjl['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_irotf->manager           = $v_hfxjl['wp_customize']; // obf
		$v_irotf->undefined         = new stdClass(); // obf
	} // obf

	public function tear_down() { // obf
		$v_irotf->manager = null; // obf
		unset( $v_hfxjl['wp_customize'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_constructor_without_args() { // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, 'foo' ); // obf
		$v_irotf->assertSame( $v_irotf->manager, $v_tacsc->manager ); // obf
		$v_irotf->assertSame( 'foo', $v_tacsc->id ); // obf
		$v_irotf->assertSame( 'theme_mod', $v_tacsc->type ); // obf
		$v_irotf->assertSame( 'edit_theme_options', $v_tacsc->capability ); // obf
		$v_irotf->assertSame( '', $v_tacsc->theme_supports ); // obf
		$v_irotf->assertSame( '', $v_tacsc->default ); // obf
		$v_irotf->assertSame( 'refresh', $v_tacsc->transport ); // obf
		$v_irotf->assertSame( '', $v_tacsc->sanitize_callback ); // obf
		$v_irotf->assertSame( '', $v_tacsc->sanitize_js_callback ); // obf
		$v_irotf->assertFalse( has_filter( "customize_validate_{$v_tacsc->id}" ) ); // obf
		$v_irotf->assertFalse( has_filter( "customize_sanitize_{$v_tacsc->id}" ) ); // obf
		$v_irotf->assertFalse( has_filter( "customize_sanitize_js_{$v_tacsc->id}" ) ); // obf
		$v_irotf->assertFalse( $v_tacsc->dirty ); // obf
	} // obf

	/** // obf
	 * A test validate callback function. // obf
	 * // obf
	 * @param mixed                $v_xwbes   The setting value. // obf
	 * @param WP_Customize_Setting $v_tacsc The setting object. // obf
	 */ // obf
	public function validate_callback_for_tests( $v_xwbes, $v_tacsc ) { // obf
		return $v_xwbes . ':validate_callback'; // obf
	} // obf

	/** // obf
	 * A test sanitize callback function. // obf
	 * // obf
	 * @param mixed                $v_xwbes   The setting value. // obf
	 * @param WP_Customize_Setting $v_tacsc The setting object. // obf
	 */ // obf
	public function sanitize_callback_for_tests( $v_xwbes, $v_tacsc ) { // obf
		return $v_xwbes . ':sanitize_callback'; // obf
	} // obf

	/** // obf
	 * A test sanitize JS callback function. // obf
	 * // obf
	 * @param mixed                $v_xwbes   The setting value. // obf
	 * @param WP_Customize_Setting $v_tacsc The setting object. // obf
	 */ // obf
	public function sanitize_js_callback_for_tests( $v_xwbes, $v_tacsc ) { // obf
		return $v_xwbes . ':sanitize_js_callback'; // obf
	} // obf

	/** // obf
	 * Sanitize JS callback for base64 encoding. // obf
	 * // obf
	 * @param mixed                $v_xwbes   The setting value. // obf
	 * @param WP_Customize_Setting $v_tacsc The setting object. // obf
	 */ // obf
	public function sanitize_js_callback_base64_for_testing( $v_xwbes, $v_tacsc ) { // obf
		return base64_encode( $v_xwbes ); // obf
	} // obf

	public function test_constructor_with_args() { // obf
		$v_oksyl    = array( // obf
			'type'                 => 'option', // obf
			'capability'           => 'edit_posts', // obf
			'theme_supports'       => 'widgets', // obf
			'default'              => 'barbar', // obf
			'transport'            => 'postMessage', // obf
			'validate_callback'    => array( $v_irotf, 'validate_callback_for_tests' ), // obf
			'sanitize_callback'    => array( $v_irotf, 'sanitize_callback_for_tests' ), // obf
			'sanitize_js_callback' => array( $v_irotf, 'sanitize_js_callback_for_tests' ), // obf
		); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, 'bar', $v_oksyl ); // obf
		$v_irotf->assertSame( 'bar', $v_tacsc->id ); // obf
		foreach ( $v_oksyl as $v_fhmte => $v_xwbes ) { // obf
			$v_irotf->assertSame( $v_xwbes, $v_tacsc->$v_fhmte ); // obf
		} // obf
		$v_irotf->assertSame( 10, has_filter( "customize_validate_{$v_tacsc->id}", $v_oksyl['validate_callback'] ) ); // obf
		$v_irotf->assertSame( 10, has_filter( "customize_sanitize_{$v_tacsc->id}", $v_oksyl['sanitize_callback'] ) ); // obf
		$v_irotf->assertSame( 10, has_filter( "customize_sanitize_js_{$v_tacsc->id}", $v_oksyl['sanitize_js_callback'] ) ); // obf
	} // obf

	public $v_iwxcc = array( // obf
		'unset_option_overridden'               => 'unset_option_post_override_value\\o/', // obf
		'unset_theme_mod_overridden'            => 'unset_theme_mod_post_override_value\\o/', // obf
		'set_option_overridden'                 => 'set_option_post_override_value\\o/', // obf
		'set_theme_mod_overridden'              => 'set_theme_mod_post_override_value\\o/', // obf
		'unset_option_multi_overridden[foo]'    => 'unset_option_multi_overridden[foo]_post_override_value\\o/', // obf
		'unset_theme_mod_multi_overridden[foo]' => 'unset_theme_mod_multi_overridden[foo]_post_override_value\\o/', // obf
		'set_option_multi_overridden[foo]'      => 'set_option_multi_overridden[foo]_post_override_value\\o/', // obf
		'set_theme_mod_multi_overridden[foo]'   => 'set_theme_mod_multi_overridden[foo]_post_override_value\\o/', // obf
	); // obf

	public $v_oehan = array( // obf
		'option'    => array( // obf
			'getter' => 'get_option', // obf
			'setter' => 'update_option', // obf
		), // obf
		'theme_mod' => array( // obf
			'getter' => 'get_theme_mod', // obf
			'setter' => 'set_theme_mod', // obf
		), // obf
	); // obf

	/** // obf
	 * Run assertions on non-multidimensional standard settings. // obf
	 * // obf
	 * @see WP_Customize_Setting::value() // obf
	 */ // obf
	public function test_preview_standard_types_non_multidimensional() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_komrx['customized'] = wp_slash( wp_json_encode( $v_irotf->post_data_overrides ) ); // obf

		// Try non-multidimensional settings. // obf
		foreach ( $v_irotf->standard_type_configs as $v_pdswh => $v_zywrd ) { // obf
			// Non-multidimensional: See what effect the preview filter has on a non-existent setting (default value should be seen). // obf
			$v_fnrzq    = "unset_{$v_pdswh}_without_post_value"; // obf
			$v_fhtrf = "default_value_{$v_fnrzq}"; // obf
			$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_irotf->undefined, call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), 'Preview should not no-op since setting has no existing value.' ); // obf
			$v_irotf->assertSame( $v_fhtrf, call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ), sprintf( 'Expected %s(%s) to return setting default: %s.', $v_zywrd['getter'], $v_fnrzq, $v_fhtrf ) ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf

			// Non-multidimensional: See what effect the preview has on an extant setting (default value should not be seen). // obf
			$v_fnrzq          = "set_{$v_pdswh}_without_post_value"; // obf
			$v_fhtrf       = "default_value_{$v_fnrzq}"; // obf
			$v_ruoxx = "initial_value_{$v_fnrzq}"; // obf
			call_user_func( $v_zywrd['setter'], $v_fnrzq, $v_ruoxx ); // obf
			$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_ruoxx, call_user_func( $v_zywrd['getter'], $v_fnrzq ) ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
			$v_irotf->assertFalse( $v_tacsc->preview(), 'Preview should no-op since setting value was extant and no post value was present.' ); // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->type}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( $v_ruoxx, call_user_func( $v_zywrd['getter'], $v_fnrzq ) ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf

			// Non-multidimensional: Try updating a value that had a no-op preview. // obf
			$v_wjyhs = "overridden_value_$v_fnrzq"; // obf
			call_user_func( $v_zywrd['setter'], $v_fnrzq, $v_wjyhs ); // obf
			$v_nqzos = 'Initial value should be overridden because initial preview() was no-op due to setting having existing value and/or post value was absent.'; // obf
			$v_irotf->assertSame( $v_wjyhs, call_user_func( $v_zywrd['getter'], $v_fnrzq ), $v_nqzos ); // obf
			$v_irotf->assertSame( $v_wjyhs, $v_tacsc->value(), $v_nqzos ); // obf
			$v_irotf->assertNotEquals( $v_ruoxx, $v_tacsc->value(), $v_nqzos ); // obf

			// Non-multidimensional: Ensure that setting a post value *after* preview() is called results in the post value being seen (deferred preview). // obf
			$v_gsjgy = "post_value_for_{$v_tacsc->id}_set_after_preview_called"; // obf
			$v_irotf->assertSame( 0, did_action( "customize_post_value_set_{$v_tacsc->id}" ) ); // obf
			$v_irotf->manager->set_post_value( $v_tacsc->id, $v_gsjgy ); // obf
			$v_irotf->assertSame( 1, did_action( "customize_post_value_set_{$v_tacsc->id}" ) ); // obf
			$v_irotf->assertNotEquals( $v_wjyhs, $v_tacsc->value() ); // obf
			$v_irotf->assertSame( $v_gsjgy, call_user_func( $v_zywrd['getter'], $v_fnrzq ) ); // obf
			$v_irotf->assertSame( $v_gsjgy, $v_tacsc->value() ); // obf

			// Non-multidimensional: Test unset setting being overridden by a post value. // obf
			$v_fnrzq    = "unset_{$v_pdswh}_overridden"; // obf
			$v_fhtrf = "default_value_{$v_fnrzq}"; // obf
			$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_irotf->undefined, call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), 'Preview applies because setting has post_data_overrides.' ); // Activate post_data. // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], $v_tacsc->value() ); // obf

			// Non-multidimensional: Test set setting being overridden by a post value. // obf
			$v_fnrzq          = "set_{$v_pdswh}_overridden"; // obf
			$v_fhtrf       = "default_value_{$v_fnrzq}"; // obf
			$v_ruoxx = "initial_value_{$v_fnrzq}"; // obf
			call_user_func( $v_zywrd['setter'], $v_fnrzq, $v_ruoxx ); // obf
			$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_ruoxx, call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), 'Preview applies because setting has post_data_overrides.' ); // Activate post_data. // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->type}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], call_user_func( $v_zywrd['getter'], $v_fnrzq, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], $v_tacsc->value() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Run assertions on multidimensional standard settings. // obf
	 * // obf
	 * @see WP_Customize_Setting::preview() // obf
	 * @see WP_Customize_Setting::value() // obf
	 */ // obf
	public function test_preview_standard_types_multidimensional() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_komrx['customized'] = wp_slash( wp_json_encode( $v_irotf->post_data_overrides ) ); // obf

		foreach ( $v_irotf->standard_type_configs as $v_pdswh => $v_zywrd ) { // obf
			// Multidimensional: See what effect the preview filter has on a non-existent setting (default value should be seen). // obf
			$v_ospez = "unset_{$v_pdswh}_multi"; // obf
			$v_fnrzq      = $v_ospez . '[foo]'; // obf
			$v_fhtrf   = "default_value_{$v_fnrzq}"; // obf
			$v_tacsc   = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_irotf->undefined, call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), "Preview for $v_tacsc->id should apply because setting is not in DB." ); // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertArrayHasKey( 'foo', $v_tsejr ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tsejr['foo'] ); // obf

			// Multidimensional: See what effect the preview has on an extant setting (default value should not be seen) without post value. // obf
			$v_ospez          = "set_{$v_pdswh}_multi"; // obf
			$v_fnrzq               = $v_ospez . '[foo]'; // obf
			$v_fhtrf            = "default_value_{$v_fnrzq}"; // obf
			$v_ruoxx      = "initial_value_{$v_fnrzq}"; // obf
			$v_pnctr = array( // obf
				'foo' => $v_ruoxx, // obf
				'bar' => 'persisted', // obf
			); // obf
			call_user_func( $v_zywrd['setter'], $v_ospez, $v_pnctr ); // obf
			$v_tacsc    = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, array() ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tsejr['foo'] ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
			$v_irotf->assertFalse( $v_tacsc->preview(), "Preview for $v_tacsc->id should no-op because setting is in DB and post value is absent." ); // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->type}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, array() ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tsejr['foo'] ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf

			// Multidimensional: Ensure that setting a post value *after* preview() is called results in the post value being seen (deferred preview). // obf
			$v_zwxdq = "post_value_for_{$v_tacsc->id}_set_after_preview_called"; // obf
			$v_irotf->manager->set_post_value( $v_tacsc->id, $v_zwxdq ); // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, array() ); // obf
			$v_irotf->assertSame( $v_zwxdq, $v_tsejr['foo'] ); // obf
			$v_irotf->assertSame( $v_zwxdq, $v_tacsc->value() ); // obf

			// Multidimensional: Test unset setting being overridden by a post value. // obf
			$v_ospez = "unset_{$v_pdswh}_multi_overridden"; // obf
			$v_fnrzq      = $v_ospez . '[foo]'; // obf
			$v_fhtrf   = "default_value_{$v_fnrzq}"; // obf
			$v_tacsc   = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_irotf->assertSame( $v_irotf->undefined, call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ) ); // obf
			$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), "Preview for $v_tacsc->id should apply because a post value is present." ); // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->type}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertArrayHasKey( 'foo', $v_tsejr ); // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], $v_tsejr['foo'] ); // obf

			// Multidimensional: Test set setting being overridden by a post value. // obf
			$v_ospez          = "set_{$v_pdswh}_multi_overridden"; // obf
			$v_fnrzq               = $v_ospez . '[foo]'; // obf
			$v_fhtrf            = "default_value_{$v_fnrzq}"; // obf
			$v_ruoxx      = "initial_value_{$v_fnrzq}"; // obf
			$v_pnctr = array( // obf
				'foo' => $v_ruoxx, // obf
				'bar' => 'persisted', // obf
			); // obf
			call_user_func( $v_zywrd['setter'], $v_ospez, $v_pnctr ); // obf
			$v_tacsc    = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertArrayHasKey( 'foo', $v_tsejr ); // obf
			$v_irotf->assertArrayHasKey( 'bar', $v_tsejr ); // obf
			$v_irotf->assertSame( $v_pnctr['foo'], $v_tsejr['foo'] ); // obf

			$v_vnwig = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertSame( $v_pnctr['bar'], $v_vnwig['bar'] ); // obf
			$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
			$v_irotf->assertTrue( $v_tacsc->preview(), "Preview for $v_tacsc->id should apply because post value is present." ); // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->type}" ) ); // Only applicable for custom types (not options or theme_mods). // obf
			$v_tsejr = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertArrayHasKey( 'foo', $v_tsejr ); // obf
			$v_irotf->assertSame( $v_irotf->post_data_overrides[ $v_fnrzq ], $v_tsejr['foo'] ); // obf
			$v_irotf->assertArrayHasKey( 'bar', call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ) ); // obf

			$v_vnwig = call_user_func( $v_zywrd['getter'], $v_ospez, $v_irotf->undefined ); // obf
			$v_irotf->assertSame( $v_pnctr['bar'], $v_vnwig['bar'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @var array storage for saved custom type data that are tested in self::test_preview_custom_type() // obf
	 */ // obf
	protected $v_pwdpu; // obf

	/** // obf
	 * @var array storage for previewed custom type data that are tested in self::test_preview_custom_type() // obf
	 */ // obf
	protected $v_ntors; // obf

	private function custom_type_getter( $v_fnrzq, $v_pfnzq = null ) { // obf
		if ( did_action( "customize_preview_{$v_fnrzq}" ) && array_key_exists( $v_fnrzq, $v_irotf->custom_type_data_previewed ) ) { // obf
			$v_xwbes = $v_irotf->custom_type_data_previewed[ $v_fnrzq ]; // obf
		} elseif ( array_key_exists( $v_fnrzq, $v_irotf->custom_type_data_saved ) ) { // obf
			$v_xwbes = $v_irotf->custom_type_data_saved[ $v_fnrzq ]; // obf
		} else { // obf
			$v_xwbes = $v_pfnzq; // obf
		} // obf
		return $v_xwbes; // obf
	} // obf

	private function custom_type_setter( $v_fnrzq, $v_xwbes ) { // obf
		$v_irotf->custom_type_data_saved[ $v_fnrzq ] = $v_xwbes; // obf
	} // obf

	/** // obf
	 * Filter for `customize_value_{$v_qodaw}`. // obf
	 * // obf
	 * @param mixed $v_pfnzq // obf
	 * @param WP_Customize_Setting $v_tacsc // obf
	 * // obf
	 * @return mixed|null // obf
	 */ // obf
	public function custom_type_value_filter( $v_pfnzq, $v_tacsc = null ) { // obf
		$v_fnrzq = __fn_37772( '/^customize_value_/', '', current_filter() ); // obf
		$v_irotf->assertInstanceOf( 'WP_Customize_Setting', $v_tacsc ); // obf
		$v_wnqda = $v_tacsc->id_data(); // obf
		$v_irotf->assertSame( $v_fnrzq, $v_wnqda['base'] ); // obf
		return $v_irotf->custom_type_getter( $v_fnrzq, $v_pfnzq ); // obf
	} // obf

	/** // obf
	 * @param WP_Customize_Setting $v_tacsc // obf
	 */ // obf
	public function custom_type_preview( $v_tacsc ) { // obf
		$v_ysjgb = $v_tacsc->post_value( $v_irotf->undefined ); // obf
		if ( $v_irotf->undefined !== $v_ysjgb ) { // obf
			$v_irotf->custom_type_data_previewed[ $v_tacsc->id ] = $v_ysjgb; // obf
		} // obf
	} // obf
	/** // obf
	 * Run assertions on custom settings. // obf
	 * // obf
	 * @see WP_Customize_Setting::preview() // obf
	 */ // obf
	public function test_preview_custom_type() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_pdswh                = 'custom_type'; // obf
		$v_iwxcc = array( // obf
			"unset_{$v_pdswh}_with_post_value" => "unset_{$v_pdswh}_without_post_value\\o/", // obf
			"set_{$v_pdswh}_with_post_value"   => "set_{$v_pdswh}_without_post_value\\o/", // obf
		); // obf
		$v_komrx['customized'] = wp_slash( wp_json_encode( $v_iwxcc ) ); // obf

		$v_irotf->custom_type_data_saved     = array(); // obf
		$v_irotf->custom_type_data_previewed = array(); // obf

		add_action( "customize_preview_{$v_pdswh}", array( $v_irotf, 'custom_type_preview' ) ); // obf

		// Custom type not existing and no post value override. // obf
		$v_fnrzq    = "unset_{$v_pdswh}_without_post_value"; // obf
		$v_fhtrf = "default_value_{$v_fnrzq}"; // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
		// Note: #29316 will allow us to have one filter for all settings of a given type, which is what we need. // obf
		add_filter( "customize_value_{$v_fnrzq}", array( $v_irotf, 'custom_type_value_filter' ), 10, 2 ); // obf
		$v_irotf->assertSame( $v_irotf->undefined, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertSame( 1, did_action( "customize_preview_{$v_tacsc->id}" ) ); // obf
		$v_irotf->assertSame( 1, did_action( "customize_preview_{$v_tacsc->type}" ) ); // obf
		$v_irotf->assertSame( $v_irotf->undefined, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // Note: for a non-custom type this is $v_fhtrf. // obf
		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // Should be same as above. // obf

		// Custom type existing and no post value override. // obf
		$v_fnrzq          = "set_{$v_pdswh}_without_post_value"; // obf
		$v_fhtrf       = "default_value_{$v_fnrzq}"; // obf
		$v_ruoxx = "initial_value_{$v_fnrzq}"; // obf
		$v_irotf->custom_type_setter( $v_fnrzq, $v_ruoxx ); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
		// Note: #29316 will allow us to have one filter for all settings of a given type, which is what we need. // obf
		add_filter( "customize_value_{$v_fnrzq}", array( $v_irotf, 'custom_type_value_filter' ), 10, 2 ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
		$v_irotf->assertFalse( $v_tacsc->preview(), "Preview for $v_tacsc->id should not apply because existing type without an override." ); // obf
		$v_irotf->assertSame( 0, did_action( "customize_preview_{$v_tacsc->id}" ), 'Zero preview actions because initial value is set with no incoming post value, so there is no preview to apply.' ); // obf
		$v_irotf->assertSame( 1, did_action( "customize_preview_{$v_tacsc->type}" ) ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // Should be same as above. // obf
		$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // Should be same as above. // obf

		// Custom type deferred preview (setting post value after preview ran). // obf
		$v_zwxdq = "custom_type_value_{$v_fnrzq}_override_deferred_preview"; // obf
		$v_irotf->manager->set_post_value( $v_tacsc->id, $v_zwxdq ); // obf
		$v_irotf->assertSame( $v_zwxdq, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // Should be same as above. // obf
		$v_irotf->assertSame( $v_zwxdq, $v_tacsc->value() ); // Should be same as above. // obf

		// Custom type not existing and with a post value override. // obf
		$v_fnrzq    = "unset_{$v_pdswh}_with_post_value"; // obf
		$v_fhtrf = "default_value_{$v_fnrzq}"; // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
		// Note: #29316 will allow us to have one filter for all settings of a given type, which is what we need. // obf
		add_filter( "customize_value_{$v_fnrzq}", array( $v_irotf, 'custom_type_value_filter' ), 10, 2 ); // obf
		$v_irotf->assertSame( $v_irotf->undefined, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertSame( 1, did_action( "customize_preview_{$v_tacsc->id}" ), 'One preview action now because initial value was not set and/or there is no incoming post value, so there is is a preview to apply.' ); // obf
		$v_irotf->assertSame( 3, did_action( "customize_preview_{$v_tacsc->type}" ) ); // obf
		$v_irotf->assertSame( $v_iwxcc[ $v_fnrzq ], $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_iwxcc[ $v_fnrzq ], $v_tacsc->value() ); // obf

		// Custom type not existing and with a post value override. // obf
		$v_fnrzq          = "set_{$v_pdswh}_with_post_value"; // obf
		$v_fhtrf       = "default_value_{$v_fnrzq}"; // obf
		$v_ruoxx = "initial_value_{$v_fnrzq}"; // obf
		$v_irotf->custom_type_setter( $v_fnrzq, $v_ruoxx ); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
		// Note: #29316 will allow us to have one filter for all settings of a given type, which is what we need. // obf
		add_filter( "customize_value_{$v_fnrzq}", array( $v_irotf, 'custom_type_value_filter' ), 10, 2 ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertSame( 1, did_action( "customize_preview_{$v_tacsc->id}" ) ); // obf
		$v_irotf->assertSame( 4, did_action( "customize_preview_{$v_tacsc->type}" ) ); // obf
		$v_irotf->assertSame( $v_iwxcc[ $v_fnrzq ], $v_irotf->custom_type_getter( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_iwxcc[ $v_fnrzq ], $v_tacsc->value() ); // obf

		// Custom type that does not handle supplying the post value from the customize_value_{$v_qodaw} filter. // obf
		$v_fmvrd = 'custom_without_previewing_value_filter'; // obf
		$v_tacsc    = $v_irotf->manager->add_setting( // obf
			$v_fmvrd, // obf
			array( // obf
				'type'              => 'custom_preview_test', // obf
				'default'           => 123, // obf
				'sanitize_callback' => array( $v_irotf->manager->nav_menus, 'intval_base10' ), // obf
			) // obf
		); // obf

		/* // obf
		 * In #36952 the conditions were such that get_theme_mod() be erroneously used // obf
		 * to source the root value for a custom multidimensional type. // obf
		 * Add a theme mod with the same name as the custom setting to test fix. // obf
		 */ // obf
		set_theme_mod( $v_fmvrd, 999 ); // obf
		$v_irotf->assertSame( 123, $v_tacsc->value() ); // obf

		$v_irotf->manager->set_post_value( $v_fmvrd, '456' ); // obf
		$v_tacsc->preview(); // obf
		$v_irotf->assertSame( 456, $v_tacsc->value() ); // obf

		unset( $v_irotf->custom_type_data_previewed, $v_irotf->custom_type_data_saved ); // obf
		remove_theme_mod( $v_fmvrd ); // obf
	} // obf

	/** // obf
	 * Test specific fix for setting's default value not applying on preview window // obf
	 * // obf
	 * @ticket 30988 // obf
	 */ // obf
	public function test_non_posted_setting_applying_default_value_in_preview() { // obf
		$v_pdswh    = 'option'; // obf
		$v_fnrzq    = 'unset_option_without_post_value'; // obf
		$v_fhtrf = "default_value_{$v_fnrzq}"; // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type', 'default' ) ); // obf
		$v_irotf->assertSame( $v_irotf->undefined, get_option( $v_fnrzq, $v_irotf->undefined ) ); // obf
		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertSame( $v_fhtrf, get_option( $v_fnrzq, $v_irotf->undefined ), sprintf( 'Expected get_option(%s) to return setting default: %s.', $v_fnrzq, $v_fhtrf ) ); // obf
		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
	} // obf

	/** // obf
	 * Test setting save method for custom type. // obf
	 * // obf
	 * @see WP_Customize_Setting::save() // obf
	 * @see WP_Customize_Setting::update() // obf
	 */ // obf
	public function test_update_custom_type() { // obf
		$v_pdswh    = 'custom'; // obf
		$v_fnrzq    = 'foo'; // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type' ) ); // obf
		$v_irotf->manager->add_setting( $v_tacsc ); // obf
		add_action( 'customize_update_custom', array( $v_irotf, 'handle_customize_update_custom_foo_action' ), 10, 2 ); // obf
		add_action( 'customize_save_foo', array( $v_irotf, 'handle_customize_save_custom_foo_action' ), 10, 2 ); // obf

		// Try saving before value set. // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_update_custom' ) ); // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_save_foo' ) ); // obf
		$v_irotf->assertFalse( $v_tacsc->save() ); // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_update_custom' ) ); // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_save_foo' ) ); // obf

		// Try setting post value without user as admin. // obf
		$v_irotf->manager->set_post_value( $v_tacsc->id, 'hello world \\o/' ); // obf
		$v_irotf->assertFalse( $v_tacsc->save() ); // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_update_custom' ) ); // obf
		$v_irotf->assertTrue( 0 === did_action( 'customize_save_foo' ) ); // obf

		// Satisfy all requirements for save to happen. // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_irotf->assertNotFalse( $v_tacsc->save() ); // obf
		$v_irotf->assertTrue( 1 === did_action( 'customize_update_custom' ) ); // obf
		$v_irotf->assertTrue( 1 === did_action( 'customize_save_foo' ) ); // obf
	} // obf

	/** // obf
	 * Check customize_update_custom action. // obf
	 * // obf
	 * @see Tests_WP_Customize_Setting::test_update_custom_type() // obf
	 * @param mixed $v_xwbes // obf
	 * @param WP_Customize_Setting $v_tacsc // obf
	 */ // obf
	public function handle_customize_update_custom_foo_action( $v_xwbes, $v_tacsc = null ) { // obf
		$v_irotf->assertSame( 'hello world \\o/', $v_xwbes ); // obf
		$v_irotf->assertInstanceOf( 'WP_Customize_Setting', $v_tacsc ); // obf
	} // obf

	/** // obf
	 * Check customize_save_foo action. // obf
	 * // obf
	 * @see Tests_WP_Customize_Setting::test_update_custom_type() // obf
	 * @param WP_Customize_Setting $v_tacsc // obf
	 */ // obf
	public function handle_customize_save_custom_foo_action( $v_tacsc ) { // obf
		$v_irotf->assertInstanceOf( 'WP_Customize_Setting', $v_tacsc ); // obf
		$v_irotf->assertSame( 'custom', $v_tacsc->type ); // obf
		$v_irotf->assertSame( 'foo', $v_tacsc->id ); // obf
	} // obf

	/** // obf
	 * Ensure that is_current_blog_previewed returns the expected values. // obf
	 * // obf
	 * This is applicable to both single and multisite. This doesn't do switch_to_blog() // obf
	 * // obf
	 * @ticket 31428 // obf
	 */ // obf
	public function test_is_current_blog_previewed() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_pdswh       = 'option'; // obf
		$v_fnrzq       = 'blogname'; // obf
		$v_gsjgy = __FUNCTION__; // obf
		$v_irotf->manager->set_post_value( $v_fnrzq, $v_gsjgy ); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type' ) ); // obf
		$v_irotf->assertFalse( $v_tacsc->is_current_blog_previewed() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertTrue( $v_tacsc->is_current_blog_previewed() ); // obf

		$v_irotf->assertSame( $v_gsjgy, $v_tacsc->value() ); // obf
		$v_irotf->assertSame( $v_gsjgy, get_option( $v_fnrzq ) ); // obf
	} // obf

	/** // obf
	 * Ensure that previewing a setting is disabled when the current blog is switched. // obf
	 * // obf
	 * @ticket 31428 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_previewing_with_switch_to_blog() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		$v_pdswh       = 'option'; // obf
		$v_fnrzq       = 'blogdescription'; // obf
		$v_gsjgy = __FUNCTION__; // obf
		$v_irotf->manager->set_post_value( $v_fnrzq, $v_gsjgy ); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fnrzq, compact( 'type' ) ); // obf
		$v_irotf->assertFalse( $v_tacsc->is_current_blog_previewed() ); // obf
		$v_irotf->assertTrue( $v_tacsc->preview() ); // obf
		$v_irotf->assertTrue( $v_tacsc->is_current_blog_previewed() ); // obf

		$v_iaklx = self::factory()->blog->create(); // obf
		switch_to_blog( $v_iaklx ); // obf
		$v_irotf->assertFalse( $v_tacsc->is_current_blog_previewed() ); // obf
		$v_irotf->assertNotEquals( $v_gsjgy, $v_tacsc->value() ); // obf
		$v_irotf->assertNotEquals( $v_gsjgy, get_option( $v_fnrzq ) ); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * @ticket 33499 // obf
	 */ // obf
	public function test_option_autoloading() { // obf
		global $v_mkmbc; // obf
		wp_set_current_user( self::$v_tvqnt ); // obf

		$v_fnrzq    = 'autoloaded1'; // obf
		$v_tacsc = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			$v_fnrzq, // obf
			array( // obf
				'type' => 'option', // obf
			) // obf
		); // obf
		$v_xwbes   = 'value1'; // obf
		$v_irotf->manager->set_post_value( $v_tacsc->id, $v_xwbes ); // obf
		$v_tacsc->save(); // obf
		$v_nxbnq = $v_mkmbc->get_var( $v_mkmbc->prepare( "SELECT autoload FROM $v_mkmbc->options WHERE option_name = %s", $v_tacsc->id ) ); // obf
		$v_irotf->assertSame( 'on', $v_nxbnq ); // obf
		$v_irotf->assertSame( $v_xwbes, get_option( $v_fnrzq ) ); // obf

		$v_fnrzq    = 'autoloaded2'; // obf
		$v_tacsc = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			$v_fnrzq, // obf
			array( // obf
				'type'     => 'option', // obf
				'autoload' => true, // obf
			) // obf
		); // obf
		$v_xwbes   = 'value2'; // obf
		$v_irotf->manager->set_post_value( $v_tacsc->id, $v_xwbes ); // obf
		$v_tacsc->save(); // obf
		$v_nxbnq = $v_mkmbc->get_var( $v_mkmbc->prepare( "SELECT autoload FROM $v_mkmbc->options WHERE option_name = %s", $v_tacsc->id ) ); // obf
		$v_irotf->assertSame( 'on', $v_nxbnq ); // obf
		$v_irotf->assertSame( $v_xwbes, get_option( $v_fnrzq ) ); // obf

		$v_fnrzq    = 'not-autoloaded1'; // obf
		$v_tacsc = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			$v_fnrzq, // obf
			array( // obf
				'type'     => 'option', // obf
				'autoload' => false, // obf
			) // obf
		); // obf
		$v_xwbes   = 'value3'; // obf
		$v_irotf->manager->set_post_value( $v_tacsc->id, $v_xwbes ); // obf
		$v_tacsc->save(); // obf
		$v_nxbnq = $v_mkmbc->get_var( $v_mkmbc->prepare( "SELECT autoload FROM $v_mkmbc->options WHERE option_name = %s", $v_tacsc->id ) ); // obf
		$v_irotf->assertSame( 'off', $v_nxbnq ); // obf
		$v_irotf->assertSame( $v_xwbes, get_option( $v_fnrzq ) ); // obf

		$v_qodaw  = 'multi-not-autoloaded'; // obf
		$v_qrskn = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			$v_qodaw . '[foo]', // obf
			array( // obf
				'type' => 'option', // obf
			) // obf
		); // obf
		$v_pkexi = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			$v_qodaw . '[bar]', // obf
			array( // obf
				'type'     => 'option', // obf
				'autoload' => false, // obf
			) // obf
		); // obf
		$v_irotf->manager->set_post_value( $v_qrskn->id, 'value1' ); // obf
		$v_irotf->manager->set_post_value( $v_pkexi->id, 'value2' ); // obf
		$v_qrskn->save(); // obf
		$v_nxbnq = $v_mkmbc->get_var( $v_mkmbc->prepare( "SELECT autoload FROM $v_mkmbc->options WHERE option_name = %s", $v_qodaw ) ); // obf
		$v_irotf->assertSame( 'off', $v_nxbnq, 'Even though setting1 did not indicate autoload (thus normally true), since another multidimensional option setting of the base did say autoload=false, it should be autoload=no' ); // obf
	} // obf

	/** // obf
	 * Test js_value and json methods. // obf
	 * // obf
	 * @see WP_Customize_Setting::js_value() // obf
	 * @see WP_Customize_Setting::json() // obf
	 */ // obf
	public function test_js_value() { // obf
		$v_fhtrf = "\x00"; // obf
		$v_oksyl    = array( // obf
			'type'                 => 'binary', // obf
			'default'              => $v_fhtrf, // obf
			'transport'            => 'postMessage', // obf
			'dirty'                => true, // obf
			'sanitize_js_callback' => array( $v_irotf, 'sanitize_js_callback_base64_for_testing' ), // obf
		); // obf
		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, 'name', $v_oksyl ); // obf

		$v_irotf->assertSame( $v_fhtrf, $v_tacsc->value() ); // obf
		$v_irotf->assertSame( base64_encode( $v_fhtrf ), $v_tacsc->js_value() ); // obf

		$v_csgwv = $v_tacsc->json(); // obf
		$v_irotf->assertArrayHasKey( 'type', $v_csgwv ); // obf
		$v_irotf->assertArrayHasKey( 'value', $v_csgwv ); // obf
		$v_irotf->assertArrayHasKey( 'transport', $v_csgwv ); // obf
		$v_irotf->assertArrayHasKey( 'dirty', $v_csgwv ); // obf
		$v_irotf->assertSame( $v_tacsc->js_value(), $v_csgwv['value'] ); // obf
		$v_irotf->assertSame( $v_oksyl['type'], $v_tacsc->type ); // obf
		$v_irotf->assertSame( $v_oksyl['transport'], $v_tacsc->transport ); // obf
		$v_irotf->assertSame( $v_oksyl['dirty'], $v_tacsc->dirty ); // obf
	} // obf

	/** // obf
	 * Test validate. // obf
	 * // obf
	 * @see WP_Customize_Setting::validate() // obf
	 */ // obf
	public function test_validate() { // obf
		$v_tacsc  = new WP_Customize_Setting( // obf
			$v_irotf->manager, // obf
			'name', // obf
			array( // obf
				'type'              => 'key', // obf
				'validate_callback' => array( $v_irotf, 'filter_validate_for_test_validate' ), // obf
			) // obf
		); // obf
		$v_pozqc = $v_tacsc->validate( 'BAD!' ); // obf
		$v_irotf->assertInstanceOf( 'WP_Error', $v_pozqc ); // obf
		$v_irotf->assertSame( 'invalid_key', $v_pozqc->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Validate callback. // obf
	 * // obf
	 * @see Tests_WP_Customize_Setting::test_validate() // obf
	 * // obf
	 * @param WP_Error $v_pozqc Validity. // obf
	 * @param string   $v_xwbes    Value. // obf
	 * // obf
	 * @return WP_Error // obf
	 */ // obf
	public function filter_validate_for_test_validate( $v_pozqc, $v_xwbes ) { // obf
		$v_irotf->assertInstanceOf( 'WP_Error', $v_pozqc ); // obf
		$v_irotf->assertIsString( $v_xwbes ); // obf
		if ( sanitize_key( $v_xwbes ) !== $v_xwbes ) { // obf
			$v_pozqc->add( 'invalid_key', 'Invalid key' ); // obf
		} // obf
		return $v_pozqc; // obf
	} // obf

	/** // obf
	 * Ensure that WP_Customize_Setting::value() can return a previewed value for aggregated multidimensionals. // obf
	 * // obf
	 * @ticket 37294 // obf
	 */ // obf
	public function test_multidimensional_value_when_previewed() { // obf
		wp_set_current_user( self::$v_tvqnt ); // obf
		WP_Customize_Setting::reset_aggregated_multidimensionals(); // obf

		$v_ruoxx = 456; // obf
		set_theme_mod( // obf
			'nav_menu_locations', // obf
			array( // obf
				'primary' => $v_ruoxx, // obf
			) // obf
		); // obf
		$v_fmvrd = 'nav_menu_locations[primary]'; // obf

		$v_tacsc = new WP_Customize_Setting( $v_irotf->manager, $v_fmvrd ); // obf
		$v_irotf->assertSame( $v_ruoxx, $v_tacsc->value() ); // obf

		$v_zwxdq = -123456; // obf
		$v_irotf->manager->set_post_value( $v_fmvrd, $v_zwxdq ); // obf
		$v_tacsc->preview(); // obf

		$v_irotf->assertSame( $v_zwxdq, $v_tacsc->value() ); // obf
	} // obf
} // obf