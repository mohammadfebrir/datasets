

<?php // obf

/** // obf
 * Tests for the WP_Customize_Section class. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Tests_WP_Customize_Section extends WP_UnitTestCase { // obf
	protected static $v_cvidp; // obf
	protected static $v_asusb = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_avolj ) { // obf
		self::$v_cvidp   = $v_avolj->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_asusb[] = self::$v_cvidp; // obf
	} // obf

	/** // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	protected $v_lrabk; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_lhskm['wp_customize'] = new WP_Customize_Manager(); // obf
		$v_zysrq->manager           = $v_lhskm['wp_customize']; // obf
	} // obf

	public function tear_down() { // obf
		$v_zysrq->manager = null; // obf
		unset( $v_lhskm['wp_customize'] ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::__construct() // obf
	 */ // obf
	public function test_construct_default_args() { // obf
		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo' ); // obf
		$v_zysrq->assertIsInt( $v_xujmi->instance_number ); // obf
		$v_zysrq->assertSame( $v_zysrq->manager, $v_xujmi->manager ); // obf
		$v_zysrq->assertSame( 'foo', $v_xujmi->id ); // obf
		$v_zysrq->assertSame( 160, $v_xujmi->priority ); // obf
		$v_zysrq->assertSame( 'edit_theme_options', $v_xujmi->capability ); // obf
		$v_zysrq->assertSame( '', $v_xujmi->theme_supports ); // obf
		$v_zysrq->assertSame( '', $v_xujmi->title ); // obf
		$v_zysrq->assertSame( '', $v_xujmi->description ); // obf
		$v_zysrq->assertEmpty( $v_xujmi->panel ); // obf
		$v_zysrq->assertSame( 'default', $v_xujmi->type ); // obf
		$v_zysrq->assertSame( array( $v_xujmi, 'active_callback' ), $v_xujmi->active_callback ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::__construct() // obf
	 */ // obf
	public function test_construct_custom_args() { // obf
		$v_fksxo = array( // obf
			'priority'        => 200, // obf
			'capability'      => 'edit_posts', // obf
			'theme_supports'  => 'html5', // obf
			'title'           => 'Hello World', // obf
			'description'     => 'Lorem Ipsum', // obf
			'type'            => 'horizontal', // obf
			'active_callback' => '__return_true', // obf
			'panel'           => 'bar', // obf
		); // obf

		$v_zysrq->manager->add_panel( 'bar' ); // obf

		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo', $v_fksxo ); // obf
		foreach ( $v_fksxo as $v_smcud => $v_gygld ) { // obf
			$v_zysrq->assertSame( $v_gygld, $v_xujmi->$v_smcud ); // obf
		} // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::__construct() // obf
	 */ // obf
	public function test_construct_custom_type() { // obf
		$v_xujmi = new Custom_Section_Test( $v_zysrq->manager, 'foo' ); // obf
		$v_zysrq->assertSame( 'titleless', $v_xujmi->type ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::active() // obf
	 * @see WP_Customize_Section::active_callback() // obf
	 */ // obf
	public function test_active() { // obf
		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo' ); // obf
		$v_zysrq->assertTrue( $v_xujmi->active() ); // obf

		$v_xujmi = new WP_Customize_Section( // obf
			$v_zysrq->manager, // obf
			'foo', // obf
			array( // obf
				'active_callback' => '__return_false', // obf
			) // obf
		); // obf
		$v_zysrq->assertFalse( $v_xujmi->active() ); // obf
		add_filter( 'customize_section_active', array( $v_zysrq, 'filter_active_test' ), 10, 2 ); // obf
		$v_zysrq->assertTrue( $v_xujmi->active() ); // obf
	} // obf

	/** // obf
	 * @param bool $v_grwyt // obf
	 * @param WP_Customize_Section $v_xujmi // obf
	 * @return bool // obf
	 */ // obf
	public function filter_active_test( $v_grwyt, $v_xujmi ) { // obf
		$v_zysrq->assertFalse( $v_grwyt ); // obf
		$v_zysrq->assertInstanceOf( 'WP_Customize_Section', $v_xujmi ); // obf
		$v_grwyt = true; // obf
		return $v_grwyt; // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::json() // obf
	 */ // obf
	public function test_json() { // obf
		$v_fksxo = array( // obf
			'priority'        => 200, // obf
			'capability'      => 'edit_posts', // obf
			'theme_supports'  => 'html5', // obf
			'title'           => 'Hello World', // obf
			'description'     => 'Lorem Ipsum', // obf
			'type'            => 'horizontal', // obf
			'panel'           => 'bar', // obf
			'active_callback' => '__return_true', // obf
		); // obf

		$v_zysrq->manager->add_panel( 'bar' ); // obf

		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo', $v_fksxo ); // obf
		$v_awqll    = $v_xujmi->json(); // obf
		$v_zysrq->assertSame( 'foo', $v_awqll['id'] ); // obf
		foreach ( array( 'title', 'description', 'priority', 'panel', 'type' ) as $v_smcud ) { // obf
			$v_zysrq->assertSame( $v_fksxo[ $v_smcud ], $v_awqll[ $v_smcud ] ); // obf
		} // obf
		$v_zysrq->assertEmpty( $v_awqll['content'] ); // obf
		$v_zysrq->assertTrue( $v_awqll['active'] ); // obf
		$v_zysrq->assertIsInt( $v_awqll['instanceNumber'] ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::check_capabilities() // obf
	 */ // obf
	public function test_check_capabilities() { // obf
		wp_set_current_user( self::$v_cvidp ); // obf

		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo' ); // obf
		$v_zysrq->assertTrue( $v_xujmi->check_capabilities() ); // obf
		$v_vvkdd             = $v_xujmi->capability; // obf
		$v_xujmi->capability = 'do_not_allow'; // obf
		$v_zysrq->assertFalse( $v_xujmi->check_capabilities() ); // obf
		$v_xujmi->capability = $v_vvkdd; // obf
		$v_zysrq->assertTrue( $v_xujmi->check_capabilities() ); // obf
		$v_xujmi->theme_supports = 'impossible_feature'; // obf
		$v_zysrq->assertFalse( $v_xujmi->check_capabilities() ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::get_content() // obf
	 */ // obf
	public function test_get_content() { // obf
		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'foo' ); // obf
		$v_zysrq->assertEmpty( $v_xujmi->get_content() ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::maybe_render() // obf
	 */ // obf
	public function test_maybe_render() { // obf
		wp_set_current_user( self::$v_cvidp ); // obf
		$v_xujmi                        = new WP_Customize_Section( $v_zysrq->manager, 'bar' ); // obf
		$v_qdqdj = did_action( 'customize_render_section' ); // obf
		add_action( 'customize_render_section', array( $v_zysrq, 'action_customize_render_section_test' ) ); // obf
		ob_start(); // obf
		$v_xujmi->maybe_render(); // obf
		$v_dwehp = ob_get_clean(); // obf
		$v_zysrq->assertTrue( $v_xujmi->check_capabilities() ); // obf
		$v_zysrq->assertEmpty( $v_dwehp ); // obf
		$v_zysrq->assertSame( $v_qdqdj + 1, did_action( 'customize_render_section' ), 'Unexpected did_action count for customize_render_section' ); // obf
		$v_zysrq->assertSame( 1, did_action( "customize_render_section_{$v_xujmi->id}" ), "Unexpected did_action count for customize_render_section_{$v_xujmi->id}" ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::maybe_render() // obf
	 * @param WP_Customize_Section $v_xujmi // obf
	 */ // obf
	public function action_customize_render_section_test( $v_xujmi ) { // obf
		$v_zysrq->assertInstanceOf( 'WP_Customize_Section', $v_xujmi ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::print_template() // obf
	 */ // obf
	public function test_print_templates_standard() { // obf
		wp_set_current_user( self::$v_cvidp ); // obf

		$v_xujmi = new WP_Customize_Section( $v_zysrq->manager, 'baz' ); // obf
		ob_start(); // obf
		$v_xujmi->print_template(); // obf
		$v_dwehp = ob_get_clean(); // obf
		$v_zysrq->assertStringContainsString( '<script type="text/html" id="tmpl-customize-section-default">', $v_dwehp ); // obf
		$v_zysrq->assertStringContainsString( 'accordion-section-title', $v_dwehp ); // obf
		$v_zysrq->assertStringContainsString( 'accordion-section-content', $v_dwehp ); // obf
	} // obf

	/** // obf
	 * @see WP_Customize_Section::print_template() // obf
	 */ // obf
	public function test_print_templates_custom() { // obf
		wp_set_current_user( self::$v_cvidp ); // obf

		$v_xujmi = new Custom_Section_Test( $v_zysrq->manager, 'baz' ); // obf
		ob_start(); // obf
		$v_xujmi->print_template(); // obf
		$v_dwehp = ob_get_clean(); // obf
		$v_zysrq->assertStringContainsString( '<script type="text/html" id="tmpl-customize-section-titleless">', $v_dwehp ); // obf
		$v_zysrq->assertStringNotContainsString( 'accordion-section-title', $v_dwehp ); // obf
		$v_zysrq->assertStringContainsString( 'accordion-section-content', $v_dwehp ); // obf
	} // obf
} // obf

require_once ABSPATH . WPINC . '/class-wp-customize-section.php'; // obf
class Custom_Section_Test extends WP_Customize_Section { // obf
	public $v_wionh = 'titleless'; // obf

	protected function render_template() { // obf
		?> // obf
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }}"> // obf
			<ul class="accordion-section-content"> // obf
				<# if ( data.description ) { #> // obf
					<li class="customize-section-description-container"> // obf
						<p class="description customize-section-description">{{{ data.description }}}</p> // obf
					</li> // obf
				<# } #> // obf
			</ul> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf