

<?php // obf
/** // obf
 * Tests for the WP_Customize_Selective_Refresh class Ajax. // obf
 * // obf
 * Note that this is intentionally not extending WP_Ajax_UnitTestCase because it // obf
 * is not admin ajax. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.5.0 // obf
 * // obf
 * @group customize // obf
 * @group ajax // obf
 */ // obf
class Test_WP_Customize_Selective_Refresh_Ajax extends WP_UnitTestCase { // obf

	/** // obf
	 * Manager. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_yfnvi; // obf

	/** // obf
	 * Component. // obf
	 * // obf
	 * @var WP_Customize_Selective_Refresh // obf
	 */ // obf
	public $v_mlamj; // obf

	/** // obf
	 * Shared user ID for the tests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_xusyc = 0; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_xqews Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xqews ) { // obf
		self::$v_xusyc = $v_xqews->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Define wp_doing_ajax so that wp_die() will be used instead of die(). // obf
		add_filter( 'wp_doing_ajax', '__return_true' ); // obf
		add_filter( 'wp_die_ajax_handler', array( $v_fgmxa, 'get_wp_die_handler' ), 1, 1 ); // obf

		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_kfftm['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_fgmxa->wp_customize      = $v_kfftm['wp_customize']; // obf
		if ( isset( $v_fgmxa->wp_customize->selective_refresh ) ) { // obf
			$v_fgmxa->selective_refresh = $v_fgmxa->wp_customize->selective_refresh; // obf
		} // obf
	} // obf

	/** // obf
	 * Do Customizer boot actions. // obf
	 */ // obf
	private function do_customize_boot_actions() { // obf
		$v_rrnuo['REQUEST_METHOD'] = 'POST'; // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf
		do_action( 'init' ); // obf
		do_action( 'customize_register', $v_fgmxa->wp_customize ); // obf
		$v_fgmxa->wp_customize->customize_preview_init(); // obf
		do_action( 'wp', $v_kfftm['wp'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_for_unauthenticated_user() { // obf
		$v_ujeqv[ WP_Customize_Selective_Refresh::RENDER_QUERY_VAR ] = '1'; // obf

		// Check current_user_cannot_customize. // obf
		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			unset( $v_esdrc ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertFalse( $v_fuxgz['success'] ); // obf
		$v_fgmxa->assertSame( 'expected_customize_preview', $v_fuxgz['data'] ); // obf

		// Check expected_customize_preview. // obf
		wp_set_current_user( self::$v_xusyc ); // obf
		$v_vkvre['nonce'] = wp_create_nonce( 'preview-customize_' . $v_fgmxa->wp_customize->theme()->get_stylesheet() ); // obf
		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			unset( $v_esdrc ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertFalse( $v_fuxgz['success'] ); // obf
		$v_fgmxa->assertSame( 'expected_customize_preview', $v_fuxgz['data'] ); // obf

		// Check missing_partials. // obf
		$v_fgmxa->do_customize_boot_actions(); // obf
		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			unset( $v_esdrc ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertFalse( $v_fuxgz['success'] ); // obf
		$v_fgmxa->assertSame( 'missing_partials', $v_fuxgz['data'] ); // obf

		// Check missing_partials. // obf
		$v_ujeqv['partials'] = 'bad'; // obf
		$v_fgmxa->do_customize_boot_actions(); // obf
		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertFalse( $v_fuxgz['success'] ); // obf
		$v_fgmxa->assertSame( 'malformed_partials', $v_fuxgz['data'] ); // obf
	} // obf

	/** // obf
	 * Set the current user to be an admin, add the preview nonce, and set the query var. // obf
	 */ // obf
	private function setup_valid_render_partials_request_environment() { // obf
		wp_set_current_user( self::$v_xusyc ); // obf
		$v_vkvre['nonce'] = wp_create_nonce( 'preview-customize_' . $v_fgmxa->wp_customize->theme()->get_stylesheet() ); // obf
		$v_ujeqv[ WP_Customize_Selective_Refresh::RENDER_QUERY_VAR ] = '1'; // obf
		$v_fgmxa->do_customize_boot_actions(); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() for an unrecognized partial. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_for_unrecognized_partial() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf
		$v_zezkp = array(); // obf
		$v_axrhw   = array( $v_zezkp ); // obf

		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'foo' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->expected_partial_ids = array( 'foo' ); // obf
			add_filter( 'customize_render_partials_response', array( $v_fgmxa, 'filter_customize_render_partials_response' ), 10, 3 ); // obf
			add_action( 'customize_render_partials_before', array( $v_fgmxa, 'handle_action_customize_render_partials_before' ), 10, 2 ); // obf
			add_action( 'customize_render_partials_after', array( $v_fgmxa, 'handle_action_customize_render_partials_after' ), 10, 2 ); // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertTrue( $v_fuxgz['success'] ); // obf
		$v_fgmxa->assertIsArray( $v_fuxgz['data'] ); // obf
		$v_fgmxa->assertArrayHasKey( 'contents', $v_fuxgz['data'] ); // obf
		$v_fgmxa->assertArrayHasKey( 'errors', $v_fuxgz['data'] ); // obf
		$v_fgmxa->assertArrayHasKey( 'foo', $v_fuxgz['data']['contents'] ); // obf
		$v_fgmxa->assertNull( $v_fuxgz['data']['contents']['foo'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() for a partial that does not render. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_for_non_rendering_partial() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf
		wp_set_current_user( self::$v_xusyc ); // obf
		$v_fgmxa->wp_customize->add_setting( 'home' ); // obf
		$v_fgmxa->wp_customize->selective_refresh->add_partial( 'foo', array( 'settings' => array( 'home' ) ) ); // obf
		$v_zezkp = array(); // obf
		$v_axrhw   = array( $v_zezkp ); // obf

		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'foo' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->expected_partial_ids = array( 'foo' ); // obf
			add_filter( 'customize_render_partials_response', array( $v_fgmxa, 'filter_customize_render_partials_response' ), 10, 3 ); // obf
			add_action( 'customize_render_partials_before', array( $v_fgmxa, 'handle_action_customize_render_partials_before' ), 10, 2 ); // obf
			add_action( 'customize_render_partials_after', array( $v_fgmxa, 'handle_action_customize_render_partials_after' ), 10, 2 ); // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_before' ) ); // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_after' ) ); // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertSame( array( false ), $v_fuxgz['data']['contents']['foo'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() for a partial the user doesn't have the capability to edit. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_rendering_disallowed_partial() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf
		wp_set_current_user( self::$v_xusyc ); // obf
		$v_fgmxa->wp_customize->add_setting( // obf
			'secret_message', // obf
			array( // obf
				'capability' => 'top_secret_clearance', // obf
			) // obf
		); // obf
		$v_fgmxa->wp_customize->selective_refresh->add_partial( 'secret_message', array( 'settings' => 'secret_message' ) ); // obf

		$v_zezkp      = array(); // obf
		$v_axrhw        = array( $v_zezkp ); // obf
		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'secret_message' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertNull( $v_fuxgz['data']['contents']['secret_message'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() for a partial for which an associated setting does not exist. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_rendering_partial_with_missing_settings() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf
		wp_set_current_user( self::$v_xusyc ); // obf
		$v_fgmxa->wp_customize->selective_refresh->add_partial( 'bar', array( 'settings' => 'bar' ) ); // obf

		$v_zezkp      = array(); // obf
		$v_axrhw        = array( $v_zezkp ); // obf
		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'bar' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertNull( $v_fuxgz['data']['contents']['bar'] ); // obf
	} // obf

	/** // obf
	 * Get the rendered blogname. // obf
	 * // obf
	 * @param WP_Customize_Partial $v_dqchz Partial. // obf
	 * @param array                $v_jzgzw Context data. // obf
	 * @return string // obf
	 */ // obf
	public function render_callback_blogname( $v_dqchz, $v_jzgzw ) { // obf
		$v_fgmxa->assertIsArray( $v_jzgzw ); // obf
		$v_fgmxa->assertInstanceOf( 'WP_Customize_Partial', $v_dqchz ); // obf
		return get_bloginfo( 'name', 'display' ); // obf
	} // obf

	/** // obf
	 * Get the rendered blogdescription. // obf
	 * // obf
	 * @param WP_Customize_Partial $v_dqchz Partial. // obf
	 * @param array                $v_jzgzw Context data. // obf
	 * @return string // obf
	 */ // obf
	public function render_callback_blogdescription( $v_dqchz, $v_jzgzw ) { // obf
		$v_fgmxa->assertIsArray( $v_jzgzw ); // obf
		$v_fgmxa->assertInstanceOf( 'WP_Customize_Partial', $v_dqchz ); // obf
		$v_fwgep = get_bloginfo( 'description', 'display' ); // obf
		return $v_fwgep; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() for a partial that does render. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_with_single_valid_placement() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf

		$v_fgmxa->wp_customize->selective_refresh->add_partial( // obf
			'test_blogname', // obf
			array( // obf
				'settings'        => array( 'blogname' ), // obf
				'render_callback' => array( $v_fgmxa, 'render_callback_blogname' ), // obf
			) // obf
		); // obf

		$v_zezkp = array(); // obf
		$v_axrhw   = array( $v_zezkp ); // obf

		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'test_blogname' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->expected_partial_ids = array( 'test_blogname' ); // obf
			add_filter( 'customize_render_partials_response', array( $v_fgmxa, 'filter_customize_render_partials_response' ), 10, 3 ); // obf
			add_action( 'customize_render_partials_before', array( $v_fgmxa, 'handle_action_customize_render_partials_before' ), 10, 2 ); // obf
			add_action( 'customize_render_partials_after', array( $v_fgmxa, 'handle_action_customize_render_partials_after' ), 10, 2 ); // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_before' ) ); // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_after' ) ); // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertSame( array( get_bloginfo( 'name', 'display' ) ), $v_fuxgz['data']['contents']['test_blogname'] ); // obf
		$v_fgmxa->assertArrayHasKey( 'setting_validities', $v_fuxgz['data'] ); // obf
	} // obf

	/** // obf
	 * Filter customize_dynamic_partial_args. // obf
	 * // obf
	 * @param array  $v_izejp Partial args. // obf
	 * @param string $v_pbakg   Partial ID. // obf
	 * // obf
	 * @return array|false Args. // obf
	 */ // obf
	public function filter_customize_dynamic_partial_args( $v_izejp, $v_pbakg ) { // obf
		if ( 'test_dynamic_blogname' === $v_pbakg ) { // obf
			$v_izejp = array( // obf
				'settings'        => array( 'blogname' ), // obf
				'render_callback' => array( $v_fgmxa, 'render_callback_blogname' ), // obf
			); // obf
		} // obf
		return $v_izejp; // obf
	} // obf

	/** // obf
	 * Filter customize_render_partials_response. // obf
	 * // obf
	 * @param array                          $v_ppsrr            Response. // obf
	 * @param WP_Customize_Selective_Refresh $v_pkpnc Selective refresh component. // obf
	 * @param array                          $v_ssczl  Placements' context data for the partials rendered in the request. // obf
	 *                                                            The array is keyed by partial ID, with each item being an array of // obf
	 *                                                            the placements' context data. // obf
	 * @return array Response. // obf
	 */ // obf
	public function filter_customize_render_partials_response( $v_ppsrr, $v_pkpnc, $v_ssczl ) { // obf
		$v_fgmxa->assertIsArray( $v_ppsrr ); // obf
		$v_fgmxa->assertInstanceOf( 'WP_Customize_Selective_Refresh', $v_pkpnc ); // obf
		if ( isset( $v_fgmxa->expected_partial_ids ) ) { // obf
			$v_fgmxa->assertSameSets( $v_fgmxa->expected_partial_ids, array_keys( $v_ssczl ) ); // obf
		} // obf
		return $v_ppsrr; // obf
	} // obf

	/** // obf
	 * Expected partial IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_osuxi; // obf

	/** // obf
	 * Handle 'customize_render_partials_before' action. // obf
	 * // obf
	 * @param WP_Customize_Selective_Refresh $v_pkpnc          Selective refresh component. // obf
	 * @param array                          $v_ssczl Partial IDs. // obf
	 */ // obf
	public function handle_action_customize_render_partials_after( $v_pkpnc, $v_ssczl ) { // obf
		$v_fgmxa->assertInstanceOf( 'WP_Customize_Selective_Refresh', $v_pkpnc ); // obf
		if ( isset( $v_fgmxa->expected_partial_ids ) ) { // obf
			$v_fgmxa->assertSameSets( $v_fgmxa->expected_partial_ids, array_keys( $v_ssczl ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handle 'customize_render_partials_after' action. // obf
	 * // obf
	 * @param WP_Customize_Selective_Refresh $v_pkpnc          Selective refresh component. // obf
	 * @param array                          $v_ssczl Partial IDs. // obf
	 */ // obf
	public function handle_action_customize_render_partials_before( $v_pkpnc, $v_ssczl ) { // obf
		$v_fgmxa->assertInstanceOf( 'WP_Customize_Selective_Refresh', $v_pkpnc ); // obf
		if ( isset( $v_fgmxa->expected_partial_ids ) ) { // obf
			$v_fgmxa->assertSameSets( $v_fgmxa->expected_partial_ids, array_keys( $v_ssczl ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request()dynamic partials are recognized. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_for_dynamic_partial() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf
		add_filter( 'customize_dynamic_partial_args', array( $v_fgmxa, 'filter_customize_dynamic_partial_args' ), 10, 2 ); // obf

		$v_zezkp = array(); // obf
		$v_axrhw   = array( $v_zezkp ); // obf

		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'test_dynamic_blogname' => $v_axrhw, // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->expected_partial_ids = array( 'test_dynamic_blogname' ); // obf
			add_filter( 'customize_render_partials_response', array( $v_fgmxa, 'filter_customize_render_partials_response' ), 10, 3 ); // obf
			add_action( 'customize_render_partials_before', array( $v_fgmxa, 'handle_action_customize_render_partials_before' ), 10, 2 ); // obf
			add_action( 'customize_render_partials_after', array( $v_fgmxa, 'handle_action_customize_render_partials_after' ), 10, 2 ); // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_before' ) ); // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_after' ) ); // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertSame( array( get_bloginfo( 'name', 'display' ) ), $v_fuxgz['data']['contents']['test_dynamic_blogname'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::handle_render_partials_request() to multiple partials can be requested at once. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::handle_render_partials_request() // obf
	 */ // obf
	public function test_handle_render_partials_request_for_multiple_partials_placements() { // obf
		$v_fgmxa->setup_valid_render_partials_request_environment(); // obf

		$v_fgmxa->wp_customize->selective_refresh->add_partial( // obf
			'test_blogname', // obf
			array( // obf
				'settings'        => array( 'blogname' ), // obf
				'render_callback' => array( $v_fgmxa, 'render_callback_blogname' ), // obf
			) // obf
		); // obf
		$v_fgmxa->wp_customize->selective_refresh->add_partial( // obf
			'test_blogdescription', // obf
			array( // obf
				'settings'        => array( 'blogdescription' ), // obf
				'render_callback' => array( $v_fgmxa, 'render_callback_blogdescription' ), // obf
			) // obf
		); // obf

		$v_qiypf = array(); // obf

		$v_ujeqv['partials'] = wp_slash( // obf
			wp_json_encode( // obf
				array( // obf
					'test_blogname'        => array( $v_qiypf ), // obf
					'test_blogdescription' => array( $v_qiypf, $v_qiypf ), // obf
				) // obf
			) // obf
		); // obf

		ob_start(); // obf
		try { // obf
			$v_fgmxa->expected_partial_ids = array( 'test_blogname', 'test_blogdescription' ); // obf
			add_filter( 'customize_render_partials_response', array( $v_fgmxa, 'filter_customize_render_partials_response' ), 10, 3 ); // obf
			add_action( 'customize_render_partials_before', array( $v_fgmxa, 'handle_action_customize_render_partials_before' ), 10, 2 ); // obf
			add_action( 'customize_render_partials_after', array( $v_fgmxa, 'handle_action_customize_render_partials_after' ), 10, 2 ); // obf
			$v_fgmxa->selective_refresh->handle_render_partials_request(); // obf
		} catch ( WPDieException $v_esdrc ) { // obf
			$v_fgmxa->assertSame( '', $v_esdrc->getMessage() ); // obf
		} // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_before' ) ); // obf
		$v_fgmxa->assertTrue( has_action( 'customize_render_partials_after' ) ); // obf
		$v_fuxgz = json_decode( ob_get_clean(), true ); // obf
		$v_fgmxa->assertSame( array( get_bloginfo( 'name', 'display' ) ), $v_fuxgz['data']['contents']['test_blogname'] ); // obf
		$v_fgmxa->assertSame( array_fill( 0, 2, get_bloginfo( 'description', 'display' ) ), $v_fuxgz['data']['contents']['test_blogdescription'] ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_fgmxa->expected_partial_ids = null; // obf
		$v_fgmxa->wp_customize         = null; // obf
		unset( $v_kfftm['wp_customize'] ); // obf
		unset( $v_kfftm['wp_scripts'] ); // obf
		parent::tear_down(); // obf
	} // obf
} // obf