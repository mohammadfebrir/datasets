

<?php // obf

/** // obf
 * Tests for the WP_Customize_Panel class. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Tests_WP_Customize_Panel extends WP_UnitTestCase { // obf

	/** // obf
	 * ID of the administrator user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_rpcvv; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_wyypq Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wyypq ) { // obf
		self::$v_rpcvv = $v_wyypq->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	protected $v_kdhob; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_ipbqu['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_egpkp->manager           = $v_ipbqu['wp_customize']; // obf
	} // obf

	public function tear_down() { // obf
		$v_egpkp->manager = null; // obf
		unset( $v_ipbqu['wp_customize'] ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::__construct() // obf
	 */ // obf
	public function test_construct_default_args() { // obf
		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo' ); // obf
		$v_egpkp->assertIsInt( $v_grgtn->instance_number ); // obf
		$v_egpkp->assertSame( $v_egpkp->manager, $v_grgtn->manager ); // obf
		$v_egpkp->assertSame( 'foo', $v_grgtn->id ); // obf
		$v_egpkp->assertSame( 160, $v_grgtn->priority ); // obf
		$v_egpkp->assertSame( 'edit_theme_options', $v_grgtn->capability ); // obf
		$v_egpkp->assertSame( '', $v_grgtn->theme_supports ); // obf
		$v_egpkp->assertSame( '', $v_grgtn->title ); // obf
		$v_egpkp->assertSame( '', $v_grgtn->description ); // obf
		$v_egpkp->assertEmpty( $v_grgtn->sections ); // obf
		$v_egpkp->assertSame( 'default', $v_grgtn->type ); // obf
		$v_egpkp->assertSame( array( $v_grgtn, 'active_callback' ), $v_grgtn->active_callback ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::__construct() // obf
	 */ // obf
	public function test_construct_custom_args() { // obf
		$v_eabpw = array( // obf
			'priority'        => 200, // obf
			'capability'      => 'edit_posts', // obf
			'theme_supports'  => 'html5', // obf
			'title'           => 'Hello World', // obf
			'description'     => 'Lorem Ipsum', // obf
			'type'            => 'horizontal', // obf
			'active_callback' => '__return_true', // obf
		); // obf

		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo', $v_eabpw ); // obf
		foreach ( $v_eabpw as $v_ewhqu => $v_znafg ) { // obf
			$v_egpkp->assertSame( $v_znafg, $v_grgtn->$v_ewhqu ); // obf
		} // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::__construct() // obf
	 */ // obf
	public function test_construct_custom_type() { // obf
		$v_grgtn = new Custom_Panel_Test( $v_egpkp->manager, 'foo' ); // obf
		$v_egpkp->assertSame( 'titleless', $v_grgtn->type ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::active() // obf
	 * @see WP_Customize_Panel::active_callback() // obf
	 */ // obf
	public function test_active() { // obf
		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo' ); // obf
		$v_egpkp->assertTrue( $v_grgtn->active() ); // obf

		$v_grgtn = new WP_Customize_Panel( // obf
			$v_egpkp->manager, // obf
			'foo', // obf
			array( // obf
				'active_callback' => '__return_false', // obf
			) // obf
		); // obf
		$v_egpkp->assertFalse( $v_grgtn->active() ); // obf
		add_filter( 'customize_panel_active', array( $v_egpkp, 'filter_active_test' ), 10, 2 ); // obf
		$v_egpkp->assertTrue( $v_grgtn->active() ); // obf
	} // obf

	/** // obf
	 * @param bool $v_dqtma // obf
	 * @param WP_Customize_Panel $v_grgtn // obf
	 * @return bool // obf
	 */ // obf
	public function filter_active_test( $v_dqtma, $v_grgtn ) { // obf
		$v_egpkp->assertFalse( $v_dqtma ); // obf
		$v_egpkp->assertInstanceOf( 'WP_Customize_Panel', $v_grgtn ); // obf
		$v_dqtma = true; // obf
		return $v_dqtma; // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::json() // obf
	 */ // obf
	public function test_json() { // obf
		$v_eabpw  = array( // obf
			'priority'        => 200, // obf
			'capability'      => 'edit_posts', // obf
			'theme_supports'  => 'html5', // obf
			'title'           => 'Hello World', // obf
			'description'     => 'Lorem Ipsum', // obf
			'type'            => 'horizontal', // obf
			'active_callback' => '__return_true', // obf
		); // obf
		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo', $v_eabpw ); // obf
		$v_sohic  = $v_grgtn->json(); // obf
		$v_egpkp->assertSame( 'foo', $v_sohic['id'] ); // obf
		foreach ( array( 'title', 'description', 'priority', 'type' ) as $v_ewhqu ) { // obf
			$v_egpkp->assertSame( $v_eabpw[ $v_ewhqu ], $v_sohic[ $v_ewhqu ] ); // obf
		} // obf
		$v_egpkp->assertEmpty( $v_sohic['content'] ); // obf
		$v_egpkp->assertTrue( $v_sohic['active'] ); // obf
		$v_egpkp->assertIsInt( $v_sohic['instanceNumber'] ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::check_capabilities() // obf
	 */ // obf
	public function test_check_capabilities() { // obf
		wp_set_current_user( self::$v_rpcvv ); // obf

		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo' ); // obf
		$v_egpkp->assertTrue( $v_grgtn->check_capabilities() ); // obf
		$v_pvjhe           = $v_grgtn->capability; // obf
		$v_grgtn->capability = 'do_not_allow'; // obf
		$v_egpkp->assertFalse( $v_grgtn->check_capabilities() ); // obf
		$v_grgtn->capability = $v_pvjhe; // obf
		$v_egpkp->assertTrue( $v_grgtn->check_capabilities() ); // obf
		$v_grgtn->theme_supports = 'impossible_feature'; // obf
		$v_egpkp->assertFalse( $v_grgtn->check_capabilities() ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::get_content() // obf
	 */ // obf
	public function test_get_content() { // obf
		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'foo' ); // obf
		$v_egpkp->assertEmpty( $v_grgtn->get_content() ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::maybe_render() // obf
	 */ // obf
	public function test_maybe_render() { // obf
		wp_set_current_user( self::$v_rpcvv ); // obf
		$v_grgtn                        = new WP_Customize_Panel( $v_egpkp->manager, 'bar' ); // obf
		$v_upxgu = did_action( 'customize_render_panel' ); // obf
		add_action( 'customize_render_panel', array( $v_egpkp, 'action_customize_render_panel_test' ) ); // obf
		ob_start(); // obf
		$v_grgtn->maybe_render(); // obf
		$v_mqivz = ob_get_clean(); // obf
		$v_egpkp->assertTrue( $v_grgtn->check_capabilities() ); // obf
		$v_egpkp->assertEmpty( $v_mqivz ); // obf
		$v_egpkp->assertSame( $v_upxgu + 1, did_action( 'customize_render_panel' ), 'Unexpected did_action count for customize_render_panel' ); // obf
		$v_egpkp->assertSame( 1, did_action( "customize_render_panel_{$v_grgtn->id}" ), "Unexpected did_action count for customize_render_panel_{$v_grgtn->id}" ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::maybe_render() // obf
	 * @param WP_Customize_Panel $v_grgtn // obf
	 */ // obf
	public function action_customize_render_panel_test( $v_grgtn ) { // obf
		$v_egpkp->assertInstanceOf( 'WP_Customize_Panel', $v_grgtn ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 */ // obf
	public function test_print_templates_standard() { // obf
		wp_set_current_user( self::$v_rpcvv ); // obf

		$v_grgtn = new WP_Customize_Panel( $v_egpkp->manager, 'baz' ); // obf
		ob_start(); // obf
		$v_grgtn->print_template(); // obf
		$v_mqivz = ob_get_clean(); // obf
		$v_egpkp->assertStringContainsString( '<script type="text/html" id="tmpl-customize-panel-default-content">', $v_mqivz ); // obf
		$v_egpkp->assertStringContainsString( 'accordion-section-title', $v_mqivz ); // obf
		$v_egpkp->assertStringContainsString( 'control-panel-content', $v_mqivz ); // obf
		$v_egpkp->assertStringContainsString( '<script type="text/html" id="tmpl-customize-panel-default">', $v_mqivz ); // obf
		$v_egpkp->assertStringContainsString( 'customize-panel-description', $v_mqivz ); // obf
		$v_egpkp->assertStringContainsString( 'preview-notice', $v_mqivz ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 */ // obf
	public function test_print_templates_custom() { // obf
		wp_set_current_user( self::$v_rpcvv ); // obf

		$v_grgtn = new Custom_Panel_Test( $v_egpkp->manager, 'baz' ); // obf
		ob_start(); // obf
		$v_grgtn->print_template(); // obf
		$v_mqivz = ob_get_clean(); // obf
		$v_egpkp->assertStringContainsString( '<script type="text/html" id="tmpl-customize-panel-titleless-content">', $v_mqivz ); // obf
		$v_egpkp->assertStringNotContainsString( 'accordion-section-title', $v_mqivz ); // obf

		$v_egpkp->assertStringContainsString( '<script type="text/html" id="tmpl-customize-panel-titleless">', $v_mqivz ); // obf
		$v_egpkp->assertStringNotContainsString( 'preview-notice', $v_mqivz ); // obf
	} // obf
} // obf

require_once ABSPATH . WPINC . '/class-wp-customize-panel.php'; // obf
class Custom_Panel_Test extends WP_Customize_Panel { // obf
	public $v_kwdze = 'titleless'; // obf

	protected function render_template() { // obf
		?> // obf
		<li id="accordion-panel-{{ data.id }}" class="accordion-section control-section control-panel control-panel-{{ data.type }}"> // obf
			<ul class="accordion-sub-container control-panel-content"></ul> // obf
		</li> // obf
		<?php // obf
	} // obf

	protected function content_template() { // obf
		?> // obf
		<li class="panel-meta accordion-section control-section<# if ( ! data.description ) { #> cannot-expand<# } #>"> // obf
			<# if ( data.description ) { #> // obf
				<div class="accordion-section-content description"> // obf
					{{{ data.description }}} // obf
				</div> // obf
			<# } #> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf