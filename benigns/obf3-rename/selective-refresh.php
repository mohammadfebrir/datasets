

<?php // obf
/** // obf
 * Tests for the WP_Customize_Selective_Refresh class. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Selective_Refresh extends WP_UnitTestCase { // obf

	/** // obf
	 * Manager. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_kwtok; // obf

	/** // obf
	 * Component. // obf
	 * // obf
	 * @var WP_Customize_Selective_Refresh // obf
	 */ // obf
	public $v_hmnwr; // obf

	/** // obf
	 * Set up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_jgmop['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_ekksv->wp_customize      = $v_jgmop['wp_customize']; // obf
		if ( isset( $v_ekksv->wp_customize->selective_refresh ) ) { // obf
			$v_ekksv->selective_refresh = $v_ekksv->wp_customize->selective_refresh; // obf
		} // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::__construct(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::__construct() // obf
	 */ // obf
	public function test_construct() { // obf
		$v_ekksv->assertSame( $v_ekksv->selective_refresh, $v_ekksv->wp_customize->selective_refresh ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::register_scripts(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::register_scripts() // obf
	 */ // obf
	public function test_register_scripts() { // obf
		$v_gvumu = new WP_Scripts(); // obf
		$v_vjmmi = array( // obf
			'customize-selective-refresh', // obf
			'customize-preview-nav-menus', // obf
			'customize-preview-widgets', // obf
		); // obf
		foreach ( $v_vjmmi as $v_hyplr ) { // obf
			$v_ekksv->assertArrayHasKey( $v_hyplr, $v_gvumu->registered ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::partials(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::partials() // obf
	 */ // obf
	public function test_partials() { // obf
		$v_ekksv->assertIsArray( $v_ekksv->selective_refresh->partials() ); // obf
	} // obf

	/** // obf
	 * Test CRUD methods for partials. // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::get_partial() // obf
	 * @see WP_Customize_Selective_Refresh::add_partial() // obf
	 * @see WP_Customize_Selective_Refresh::remove_partial() // obf
	 */ // obf
	public function test_crud_partial() { // obf
		$v_eaasi = $v_ekksv->selective_refresh->add_partial( 'foo' ); // obf
		$v_ekksv->assertSame( $v_ekksv->selective_refresh, $v_eaasi->component ); // obf
		$v_ekksv->assertInstanceOf( 'WP_Customize_Partial', $v_eaasi ); // obf
		$v_ekksv->assertSame( $v_eaasi, $v_ekksv->selective_refresh->get_partial( $v_eaasi->id ) ); // obf
		$v_ekksv->assertArrayHasKey( $v_eaasi->id, $v_ekksv->selective_refresh->partials() ); // obf

		$v_ekksv->selective_refresh->remove_partial( $v_eaasi->id ); // obf
		$v_ekksv->assertEmpty( $v_ekksv->selective_refresh->get_partial( $v_eaasi->id ) ); // obf
		$v_ekksv->assertArrayNotHasKey( $v_eaasi->id, $v_ekksv->selective_refresh->partials() ); // obf

		$v_eaasi = new WP_Customize_Partial( $v_ekksv->selective_refresh, 'bar' ); // obf
		$v_ekksv->assertSame( $v_eaasi, $v_ekksv->selective_refresh->add_partial( $v_eaasi ) ); // obf
		$v_ekksv->assertSame( $v_eaasi, $v_ekksv->selective_refresh->get_partial( 'bar' ) ); // obf
		$v_ekksv->assertSameSets( array( 'bar' ), array_keys( $v_ekksv->selective_refresh->partials() ) ); // obf

		add_filter( 'customize_dynamic_partial_args', array( $v_ekksv, 'filter_customize_dynamic_partial_args' ), 10, 2 ); // obf
		add_filter( 'customize_dynamic_partial_class', array( $v_ekksv, 'filter_customize_dynamic_partial_class' ), 10, 3 ); // obf

		$v_eaasi = $v_ekksv->selective_refresh->add_partial( 'recognized-class' ); // obf
		$v_ekksv->assertInstanceOf( 'Tested_Custom_Partial', $v_eaasi ); // obf
		$v_ekksv->assertSame( '.recognized', $v_eaasi->selector ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::init_preview(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::init_preview() // obf
	 */ // obf
	public function test_init_preview() { // obf
		$v_ekksv->selective_refresh->init_preview(); // obf
		$v_ekksv->assertSame( 10, has_action( 'template_redirect', array( $v_ekksv->selective_refresh, 'handle_render_partials_request' ) ) ); // obf
		$v_ekksv->assertSame( 10, has_action( 'wp_enqueue_scripts', array( $v_ekksv->selective_refresh, 'enqueue_preview_scripts' ) ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::enqueue_preview_scripts(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::enqueue_preview_scripts() // obf
	 */ // obf
	public function test_enqueue_preview_scripts() { // obf
		$v_gvumu = wp_scripts(); // obf
		$v_ekksv->assertNotContains( 'customize-selective-refresh', $v_gvumu->queue ); // obf
		$v_ekksv->selective_refresh->enqueue_preview_scripts(); // obf
		$v_ekksv->assertContains( 'customize-selective-refresh', $v_gvumu->queue ); // obf
		$v_ekksv->assertSame( 1000, has_action( 'wp_footer', array( $v_ekksv->selective_refresh, 'export_preview_data' ) ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::export_preview_data(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::export_preview_data() // obf
	 */ // obf
	public function test_export_preview_data() { // obf
		$v_jnrsb = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		wp_set_current_user( $v_jnrsb ); // obf
		$v_eudey = new WP_User( $v_jnrsb ); // obf
		do_action( 'customize_register', $v_ekksv->wp_customize ); // obf
		$v_eudey->remove_cap( 'top_secret_clearance' ); // obf
		$v_ekksv->wp_customize->add_setting( // obf
			'top_secret_message', // obf
			array( // obf
				'capability' => 'top_secret_clearance', // The administrator role lacks this. // obf
			) // obf
		); // obf
		$v_ekksv->selective_refresh->add_partial( // obf
			'blogname', // obf
			array( // obf
				'selector' => '#site-title', // obf
			) // obf
		); // obf
		$v_ekksv->selective_refresh->add_partial( // obf
			'top_secret_message', // obf
			array( // obf
				'settings' => array( 'top_secret_message' ), // obf
			) // obf
		); // obf
		ob_start(); // obf
		$v_ekksv->selective_refresh->export_preview_data(); // obf
		$v_ufjzz = ob_get_clean(); // obf
		$v_ekksv->assertTrue( (bool) preg_match( '/_customizePartialRefreshExports = ({.+})/s', $v_ufjzz, $v_pppnu ) ); // obf
		$v_yivgd = json_decode( $v_pppnu[1], true ); // obf
		$v_ekksv->assertIsArray( $v_yivgd ); // obf
		$v_ekksv->assertArrayHasKey( 'partials', $v_yivgd ); // obf
		$v_ekksv->assertIsArray( $v_yivgd['partials'] ); // obf
		$v_ekksv->assertArrayHasKey( 'blogname', $v_yivgd['partials'] ); // obf
		$v_ekksv->assertArrayNotHasKey( 'top_secret_message', $v_yivgd['partials'] ); // obf
		$v_ekksv->assertSame( '#site-title', $v_yivgd['partials']['blogname']['selector'] ); // obf
		$v_ekksv->assertArrayHasKey( 'renderQueryVar', $v_yivgd ); // obf
		$v_ekksv->assertArrayHasKey( 'l10n', $v_yivgd ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::add_dynamic_partials(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::add_dynamic_partials() // obf
	 */ // obf
	public function test_add_dynamic_partials() { // obf
		$v_dftub = array( 'recognized', 'recognized-class', 'unrecognized', 'already-added' ); // obf

		$v_bsjmv = $v_ekksv->selective_refresh->add_dynamic_partials( $v_dftub ); // obf
		$v_ekksv->assertEmpty( $v_bsjmv ); // obf

		$v_ekksv->selective_refresh->add_partial( 'already-added' ); // obf

		add_filter( 'customize_dynamic_partial_args', array( $v_ekksv, 'filter_customize_dynamic_partial_args' ), 10, 2 ); // obf
		add_filter( 'customize_dynamic_partial_class', array( $v_ekksv, 'filter_customize_dynamic_partial_class' ), 10, 3 ); // obf

		$v_bsjmv = $v_ekksv->selective_refresh->add_dynamic_partials( $v_dftub ); // obf
		$v_ekksv->assertSameSets( array( 'recognized', 'recognized-class' ), wp_list_pluck( $v_bsjmv, 'id' ) ); // obf

		$v_ekksv->assertInstanceOf( 'Tested_Custom_Partial', $v_ekksv->selective_refresh->get_partial( 'recognized-class' ) ); // obf
		$v_ekksv->assertNotInstanceOf( 'Tested_Custom_Partial', $v_ekksv->selective_refresh->get_partial( 'recognized' ) ); // obf
		$v_ekksv->assertSame( '.recognized', $v_ekksv->selective_refresh->get_partial( 'recognized' )->selector ); // obf
	} // obf

	/** // obf
	 * Filter customize_dynamic_partial_args. // obf
	 * // obf
	 * @see Test_WP_Customize_Selective_Refresh::test_add_dynamic_partials() // obf
	 * // obf
	 * @param false|array $v_xnjoc The arguments to the WP_Customize_Partial constructor. // obf
	 * @param string      $v_gqget   ID for dynamic partial. // obf
	 * @return false|array Dynamic partial args. // obf
	 */ // obf
	public function filter_customize_dynamic_partial_args( $v_xnjoc, $v_gqget ) { // obf
		$v_ekksv->assertTrue( false === $v_xnjoc || is_array( $v_xnjoc ) ); // obf
		$v_ekksv->assertIsString( $v_gqget ); // obf

		if ( preg_match( '/^recognized/', $v_gqget ) ) { // obf
			$v_xnjoc = array( // obf
				'selector' => '.recognized', // obf
			); // obf
		} // obf

		return $v_xnjoc; // obf
	} // obf

	/** // obf
	 * Filter customize_dynamic_partial_class. // obf
	 * // obf
	 * @see Test_WP_Customize_Selective_Refresh::test_add_dynamic_partials() // obf
	 * // obf
	 * @param string $v_mogql WP_Customize_Partial or a subclass. // obf
	 * @param string $v_gqget    ID for dynamic partial. // obf
	 * @param array  $v_xnjoc  The arguments to the WP_Customize_Partial constructor. // obf
	 * @return string // obf
	 */ // obf
	public function filter_customize_dynamic_partial_class( $v_mogql, $v_gqget, $v_xnjoc ) { // obf
		$v_ekksv->assertIsArray( $v_xnjoc ); // obf
		$v_ekksv->assertIsString( $v_gqget ); // obf
		$v_ekksv->assertIsString( $v_mogql ); // obf

		if ( 'recognized-class' === $v_gqget ) { // obf
			$v_mogql = 'Tested_Custom_Partial'; // obf
		} // obf

		return $v_mogql; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Selective_Refresh::is_render_partials_request(). // obf
	 * // obf
	 * @see WP_Customize_Selective_Refresh::is_render_partials_request() // obf
	 */ // obf
	public function test_is_render_partials_request() { // obf
		$v_ekksv->assertFalse( $v_ekksv->selective_refresh->is_render_partials_request() ); // obf
		$v_wbjmh[ WP_Customize_Selective_Refresh::RENDER_QUERY_VAR ] = '1'; // obf
		$v_ekksv->assertTrue( $v_ekksv->selective_refresh->is_render_partials_request() ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_ekksv->wp_customize = null; // obf
		unset( $v_jgmop['wp_customize'] ); // obf
		unset( $v_jgmop['wp_scripts'] ); // obf
		parent::tear_down(); // obf
	} // obf
} // obf

require_once ABSPATH . WPINC . '/customize/class-wp-customize-partial.php'; // obf

/** // obf
 * Class Tested_Custom_Partial // obf
 */ // obf
class Tested_Custom_Partial extends WP_Customize_Partial { // obf

	/** // obf
	 * Type. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_pcazm = 'custom'; // obf
} // obf