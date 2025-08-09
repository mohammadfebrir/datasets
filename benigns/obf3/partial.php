

<?php // obf
/** // obf
 * Tests for the Test_WP_Customize_Partial class. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @group customize // obf
 */ // obf
class Test_WP_Customize_Partial extends WP_UnitTestCase { // obf

	/** // obf
	 * Manager. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_bsktm; // obf

	/** // obf
	 * Component. // obf
	 * // obf
	 * @var WP_Customize_Selective_Refresh // obf
	 */ // obf
	public $v_qseqd; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_nlvre['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_fpems->wp_customize      = $v_nlvre['wp_customize']; // obf
		if ( isset( $v_fpems->wp_customize->selective_refresh ) ) { // obf
			$v_fpems->selective_refresh = $v_fpems->wp_customize->selective_refresh; // obf
		} // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::__construct(). // obf
	 * // obf
	 * @see WP_Customize_Partial::__construct() // obf
	 */ // obf
	public function test_construct_default_args() { // obf
		$v_wbspi = 'blogname'; // obf
		$v_njtua    = new WP_Customize_Partial( $v_fpems->selective_refresh, $v_wbspi ); // obf
		$v_fpems->assertSame( $v_wbspi, $v_njtua->id ); // obf
		$v_fpems->assertSame( $v_fpems->selective_refresh, $v_njtua->component ); // obf
		$v_fpems->assertSame( 'default', $v_njtua->type ); // obf
		$v_fpems->assertEmpty( $v_njtua->selector ); // obf
		$v_fpems->assertSame( array( $v_wbspi ), $v_njtua->settings ); // obf
		$v_fpems->assertSame( $v_wbspi, $v_njtua->primary_setting ); // obf
		$v_fpems->assertSame( array( $v_njtua, 'render_callback' ), $v_njtua->render_callback ); // obf
		$v_fpems->assertFalse( $v_njtua->container_inclusive ); // obf
		$v_fpems->assertTrue( $v_njtua->fallback_refresh ); // obf
	} // obf

	/** // obf
	 * Render post content partial. // obf
	 * // obf
	 * @param WP_Customize_Partial $v_njtua Partial. // obf
	 * @return string|false Content or false if error. // obf
	 */ // obf
	public function render_post_content_partial( $v_njtua ) { // obf
		$v_bstjw = $v_njtua->id_data(); // obf
		$v_hddve = (int) $v_bstjw['keys'][0]; // obf
		if ( empty( $v_hddve ) ) { // obf
			return false; // obf
		} // obf
		$v_jbvvt = get_post( $v_hddve ); // obf
		if ( ! $v_jbvvt ) { // obf
			return false; // obf
		} // obf
		return apply_filters( 'the_content', $v_jbvvt->post_content ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::__construct(). // obf
	 * // obf
	 * @see WP_Customize_Partial::__construct() // obf
	 */ // obf
	public function test_construct_non_default_args() { // obf

		$v_hddve = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Lorem Ipsum', // obf
			) // obf
		); // obf

		$v_wbspi = sprintf( 'post_content[%d]', $v_hddve ); // obf
		$v_ugcdp       = array( // obf
			'type'                => 'post', // obf
			'selector'            => "article.post-$v_hddve .entry-content", // obf
			'settings'            => array( 'user[1]', "post[$v_hddve]" ), // obf
			'primary_setting'     => "post[$v_hddve]", // obf
			'render_callback'     => array( $v_fpems, 'render_post_content_partial' ), // obf
			'container_inclusive' => false, // obf
			'fallback_refresh'    => false, // obf
		); // obf
		$v_njtua    = new WP_Customize_Partial( $v_fpems->selective_refresh, $v_wbspi, $v_ugcdp ); // obf
		$v_fpems->assertSame( $v_wbspi, $v_njtua->id ); // obf
		$v_fpems->assertSame( $v_fpems->selective_refresh, $v_njtua->component ); // obf
		$v_fpems->assertSame( $v_ugcdp['type'], $v_njtua->type ); // obf
		$v_fpems->assertSame( $v_ugcdp['selector'], $v_njtua->selector ); // obf
		$v_fpems->assertSameSets( $v_ugcdp['settings'], $v_njtua->settings ); // obf
		$v_fpems->assertSame( $v_ugcdp['primary_setting'], $v_njtua->primary_setting ); // obf
		$v_fpems->assertSame( $v_ugcdp['render_callback'], $v_njtua->render_callback ); // obf
		$v_fpems->assertFalse( $v_njtua->container_inclusive ); // obf
		$v_fpems->assertFalse( $v_njtua->fallback_refresh ); // obf
		$v_fpems->assertStringContainsString( 'Lorem Ipsum', $v_njtua->render() ); // obf

		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			$v_wbspi, // obf
			array( // obf
				'settings' => 'blogdescription', // obf
			) // obf
		); // obf
		$v_fpems->assertSame( array( 'blogdescription' ), $v_njtua->settings ); // obf
		$v_fpems->assertSame( 'blogdescription', $v_njtua->primary_setting ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::id_data(). // obf
	 * // obf
	 * @see WP_Customize_Partial::id_data() // obf
	 */ // obf
	public function test_id_data() { // obf
		$v_njtua = new WP_Customize_Partial( $v_fpems->selective_refresh, 'foo' ); // obf
		$v_bstjw = $v_njtua->id_data(); // obf
		$v_fpems->assertSame( 'foo', $v_bstjw['base'] ); // obf
		$v_fpems->assertSame( array(), $v_bstjw['keys'] ); // obf

		$v_njtua = new WP_Customize_Partial( $v_fpems->selective_refresh, 'bar[baz][quux]' ); // obf
		$v_bstjw = $v_njtua->id_data(); // obf
		$v_fpems->assertSame( 'bar', $v_bstjw['base'] ); // obf
		$v_fpems->assertSame( array( 'baz', 'quux' ), $v_bstjw['keys'] ); // obf
	} // obf

	/** // obf
	 * Keep track of filter calls to customize_partial_render. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_feamj = 0; // obf

	/** // obf
	 * Keep track of filter calls to customize_partial_render_{$v_njtua->id}. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_ppgvm = 0; // obf

	/** // obf
	 * Filter customize_partial_render. // obf
	 * // obf
	 * @param string|false         $v_zgsuh          Content. // obf
	 * @param WP_Customize_Partial $v_njtua           Partial. // obf
	 * @param array                $v_ofnmp Data. // obf
	 * @return string|false Content. // obf
	 */ // obf
	public function filter_customize_partial_render( $v_zgsuh, $v_njtua, $v_ofnmp ) { // obf
		$v_fpems->assertTrue( false === $v_zgsuh || is_string( $v_zgsuh ) ); // obf
		$v_fpems->assertInstanceOf( 'WP_Customize_Partial', $v_njtua ); // obf
		$v_fpems->assertIsArray( $v_ofnmp ); // obf
		$v_fpems->count_filter_customize_partial_render += 1; // obf
		return $v_zgsuh; // obf
	} // obf

	/** // obf
	 * Filter customize_partial_render_{$v_njtua->id}. // obf
	 * // obf
	 * @param string|false         $v_zgsuh          Content. // obf
	 * @param WP_Customize_Partial $v_njtua           Partial. // obf
	 * @param array                $v_ofnmp Data. // obf
	 * @return string|false Content. // obf
	 */ // obf
	public function filter_customize_partial_render_with_id( $v_zgsuh, $v_njtua, $v_ofnmp ) { // obf
		$v_fpems->assertSame( sprintf( 'customize_partial_render_%s', $v_njtua->id ), current_filter() ); // obf
		$v_fpems->assertTrue( false === $v_zgsuh || is_string( $v_zgsuh ) ); // obf
		$v_fpems->assertInstanceOf( 'WP_Customize_Partial', $v_njtua ); // obf
		$v_fpems->assertIsArray( $v_ofnmp ); // obf
		$v_fpems->count_filter_customize_partial_render_with_id += 1; // obf
		return $v_zgsuh; // obf
	} // obf

	/** // obf
	 * Bad render_callback(). // obf
	 * // obf
	 * @return string Content. // obf
	 */ // obf
	public function render_echo_and_return() { // obf
		echo 'foo'; // obf
		return 'bar'; // obf
	} // obf

	/** // obf
	 * Echo render_callback(). // obf
	 */ // obf
	public function render_echo() { // obf
		echo 'foo'; // obf
	} // obf

	/** // obf
	 * Return render_callback(). // obf
	 * // obf
	 * @return string Content. // obf
	 */ // obf
	public function render_return() { // obf
		return 'bar'; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::render() with a bad return_callback. // obf
	 * // obf
	 * @see WP_Customize_Partial::render() // obf
	 */ // obf
	public function test_render_with_bad_callback_should_give_preference_to_return_value() { // obf
		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'foo', // obf
			array( // obf
				'render_callback' => array( $v_fpems, 'render_echo_and_return' ), // obf
			) // obf
		); // obf
		$v_fpems->setExpectedIncorrectUsage( 'render' ); // obf
		$v_fpems->assertSame( 'bar', $v_njtua->render() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::render() with a return_callback that echos. // obf
	 * // obf
	 * @see WP_Customize_Partial::render() // obf
	 */ // obf
	public function test_render_echo_callback() { // obf
		$v_njtua                                       = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'foo', // obf
			array( // obf
				'render_callback' => array( $v_fpems, 'render_echo' ), // obf
			) // obf
		); // obf
		$v_feamj         = $v_fpems->count_filter_customize_partial_render; // obf
		$v_ppgvm = $v_fpems->count_filter_customize_partial_render_with_id; // obf
		add_filter( 'customize_partial_render', array( $v_fpems, 'filter_customize_partial_render' ), 10, 3 ); // obf
		add_filter( "customize_partial_render_{$v_njtua->id}", array( $v_fpems, 'filter_customize_partial_render_with_id' ), 10, 3 ); // obf
		$v_zgsuh = $v_njtua->render(); // obf
		$v_fpems->assertSame( 'foo', $v_zgsuh ); // obf
		$v_fpems->assertSame( $v_feamj + 1, $v_fpems->count_filter_customize_partial_render ); // obf
		$v_fpems->assertSame( $v_ppgvm + 1, $v_fpems->count_filter_customize_partial_render_with_id ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::render() with a return_callback that echos. // obf
	 * // obf
	 * @see WP_Customize_Partial::render() // obf
	 */ // obf
	public function test_render_return_callback() { // obf
		$v_njtua                                       = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'foo', // obf
			array( // obf
				'render_callback' => array( $v_fpems, 'render_return' ), // obf
			) // obf
		); // obf
		$v_feamj         = $v_fpems->count_filter_customize_partial_render; // obf
		$v_ppgvm = $v_fpems->count_filter_customize_partial_render_with_id; // obf
		add_filter( 'customize_partial_render', array( $v_fpems, 'filter_customize_partial_render' ), 10, 3 ); // obf
		add_filter( "customize_partial_render_{$v_njtua->id}", array( $v_fpems, 'filter_customize_partial_render_with_id' ), 10, 3 ); // obf
		$v_zgsuh = $v_njtua->render(); // obf
		$v_fpems->assertSame( 'bar', $v_zgsuh ); // obf
		$v_fpems->assertSame( $v_feamj + 1, $v_fpems->count_filter_customize_partial_render ); // obf
		$v_fpems->assertSame( $v_ppgvm + 1, $v_fpems->count_filter_customize_partial_render_with_id ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::render_callback() default. // obf
	 * // obf
	 * @see WP_Customize_Partial::render_callback() // obf
	 */ // obf
	public function test_render_callback_default() { // obf
		$v_njtua = new WP_Customize_Partial( $v_fpems->selective_refresh, 'foo' ); // obf
		$v_fpems->assertFalse( $v_njtua->render_callback( $v_njtua, array() ) ); // obf
		$v_fpems->assertFalse( call_user_func( $v_njtua->render_callback, $v_njtua, array() ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::json(). // obf
	 * // obf
	 * @see WP_Customize_Partial::json() // obf
	 */ // obf
	public function test_json() { // obf
		$v_hddve    = 123; // obf
		$v_wbspi = sprintf( 'post_content[%d]', $v_hddve ); // obf
		$v_ugcdp       = array( // obf
			'type'                => 'post', // obf
			'selector'            => "article.post-$v_hddve .entry-content", // obf
			'settings'            => array( 'user[1]', "post[$v_hddve]" ), // obf
			'primary_setting'     => "post[$v_hddve]", // obf
			'render_callback'     => array( $v_fpems, 'render_post_content_partial' ), // obf
			'container_inclusive' => false, // obf
			'fallback_refresh'    => false, // obf
		); // obf
		$v_njtua    = new WP_Customize_Partial( $v_fpems->selective_refresh, $v_wbspi, $v_ugcdp ); // obf

		$v_pbtxj = $v_njtua->json(); // obf
		$v_fpems->assertArrayHasKey( 'settings', $v_pbtxj ); // obf
		$v_fpems->assertArrayHasKey( 'primarySetting', $v_pbtxj ); // obf
		$v_fpems->assertArrayHasKey( 'selector', $v_pbtxj ); // obf
		$v_fpems->assertArrayHasKey( 'type', $v_pbtxj ); // obf
		$v_fpems->assertArrayHasKey( 'fallbackRefresh', $v_pbtxj ); // obf
		$v_fpems->assertArrayHasKey( 'containerInclusive', $v_pbtxj ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Partial::check_capabilities(). // obf
	 * // obf
	 * @see WP_Customize_Partial::check_capabilities() // obf
	 */ // obf
	public function test_check_capabilities() { // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		do_action( 'customize_register', $v_fpems->wp_customize ); // obf
		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname' ), // obf
			) // obf
		); // obf
		$v_fpems->assertTrue( $v_njtua->check_capabilities() ); // obf

		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname', 'non_existing' ), // obf
			) // obf
		); // obf
		$v_fpems->assertFalse( $v_njtua->check_capabilities() ); // obf

		$v_fpems->wp_customize->add_setting( // obf
			'top_secret_message', // obf
			array( // obf
				'capability' => 'top_secret_clearance', // obf
			) // obf
		); // obf
		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'blogname', // obf
			array( // obf
				'settings' => array( 'blogname', 'top_secret_clearance' ), // obf
			) // obf
		); // obf
		$v_fpems->assertFalse( $v_njtua->check_capabilities() ); // obf

		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'no_setting', // obf
			array( // obf
				'settings' => array(), // obf
			) // obf
		); // obf
		$v_fpems->assertTrue( $v_njtua->check_capabilities() ); // obf

		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'no_setting', // obf
			array( // obf
				'settings'   => array(), // obf
				'capability' => 'top_secret_clearance', // obf
			) // obf
		); // obf
		$v_fpems->assertFalse( $v_njtua->check_capabilities() ); // obf

		$v_njtua = new WP_Customize_Partial( // obf
			$v_fpems->selective_refresh, // obf
			'no_setting', // obf
			array( // obf
				'settings'   => array(), // obf
				'capability' => 'edit_theme_options', // obf
			) // obf
		); // obf
		$v_fpems->assertTrue( $v_njtua->check_capabilities() ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_fpems->wp_customize = null; // obf
		unset( $v_nlvre['wp_customize'] ); // obf
		parent::tear_down(); // obf
	} // obf
} // obf