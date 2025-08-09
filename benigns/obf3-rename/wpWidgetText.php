

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Text functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-text.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetText extends WP_UnitTestCase { // obf
	/** // obf
	 * Args passed to the widget_text filter. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_azqrk; // obf

	/** // obf
	 * Args passed to the widget_text_content filter. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_vmscc; // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts           $v_pdmqu // obf
	 * @global WP_Styles            $v_myvns // obf
	 * @global WP_Customize_Manager $v_quhzk // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_pdmqu, $v_tghso, $v_quhzk; // obf
		parent::clean_up_global_scope(); // obf
		$v_pdmqu   = null; // obf
		$v_tghso    = null; // obf
		$v_quhzk = null; // obf
	} // obf

	/** // obf
	 * Test constructor method. // obf
	 * // obf
	 * @covers WP_Widget_Text::__construct // obf
	 */ // obf
	public function test_construct() { // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		$v_lcfcr->assertSame( 'text', $v_umwuw->id_base ); // obf
		$v_lcfcr->assertSame( 'widget_text', $v_umwuw->widget_options['classname'] ); // obf
		$v_lcfcr->assertTrue( $v_umwuw->widget_options['customize_selective_refresh'] ); // obf
		$v_lcfcr->assertSame( 400, $v_umwuw->control_options['width'] ); // obf
		$v_lcfcr->assertSame( 350, $v_umwuw->control_options['height'] ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Text::_register // obf
	 */ // obf
	public function test__register() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		$v_umwuw->_register(); // obf

		$v_lcfcr->assertSame( 10, has_action( 'admin_print_scripts-widgets.php', array( $v_umwuw, 'enqueue_admin_scripts' ) ) ); // obf
		$v_lcfcr->assertSame( 10, has_action( 'admin_footer-widgets.php', array( 'WP_Widget_Text', 'render_control_template_scripts' ) ) ); // obf
		$v_lcfcr->assertFalse( has_action( 'wp_enqueue_scripts', array( $v_umwuw, 'enqueue_preview_scripts' ) ) ); // obf
	} // obf

	/** // obf
	 * Test register in customize preview. // obf
	 * // obf
	 * @global WP_Customize_Manager $v_quhzk // obf
	 * @covers WP_Widget_Text::__construct // obf
	 * @covers WP_Widget_Text::_register // obf
	 */ // obf
	public function test__register_in_customize_preview() { // obf
		global $v_quhzk; // obf
		wp_set_current_user( // obf
			self::factory()->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			) // obf
		); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_quhzk = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => wp_generate_uuid4(), // obf
			) // obf
		); // obf
		$v_quhzk->start_previewing_theme(); // obf

		$v_umwuw = new WP_Widget_Text(); // obf
		$v_umwuw->_register(); // obf
		$v_lcfcr->assertSame( 10, has_action( 'wp_enqueue_scripts', array( $v_umwuw, 'enqueue_preview_scripts' ) ) ); // obf
	} // obf

	/** // obf
	 * Test enqueue_preview_scripts method. // obf
	 * // obf
	 * @global WP_Scripts $v_pdmqu // obf
	 * @global WP_Styles $v_tghso // obf
	 * @covers WP_Widget_Text::enqueue_preview_scripts // obf
	 */ // obf
	public function test_enqueue_preview_scripts() { // obf
		global $v_pdmqu, $v_tghso; // obf
		$v_pdmqu = null; // obf
		$v_tghso  = null; // obf
		$v_umwuw     = new WP_Widget_Text(); // obf

		$v_lcfcr->assertFalse( wp_style_is( 'wp-mediaelement' ) ); // obf
		$v_lcfcr->assertFalse( wp_script_is( 'wp-playlist' ) ); // obf

		ob_start(); // obf
		$v_umwuw->enqueue_preview_scripts(); // obf
		ob_end_clean(); // obf

		$v_lcfcr->assertTrue( wp_style_is( 'wp-mediaelement' ) ); // obf
		$v_lcfcr->assertTrue( wp_script_is( 'wp-playlist' ) ); // obf
	} // obf

	/** // obf
	 * Test widget method. // obf
	 * // obf
	 * @covers WP_Widget_Text::widget // obf
	 */ // obf
	public function test_widget() { // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		$v_vgghs   = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n Praesent ut turpis consequat lorem volutpat bibendum vitae vitae ante."; // obf

		$v_ubzuu = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section>', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf

		add_filter( 'widget_text_content', array( $v_lcfcr, 'filter_widget_text_content' ), 5, 3 ); // obf
		add_filter( 'widget_text', array( $v_lcfcr, 'filter_widget_text' ), 5, 3 ); // obf

		// Test with filter=false, implicit legacy mode. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		ob_start(); // obf
		$v_sdreb = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => false, // obf
		); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringNotContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertEmpty( $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertNotEmpty( $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertStringContainsString( '[filter:widget_text]', $v_bgobw ); // obf
		$v_lcfcr->assertStringNotContainsString( '[filter:widget_text_content]', $v_bgobw ); // obf

		// Test with filter=true, implicit legacy mode. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		$v_sdreb                       = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => true, // obf
		); // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertNotEmpty( $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertSame( $v_sdreb['text'], $v_lcfcr->widget_text_args[0] ); // obf
		$v_lcfcr->assertSame( $v_sdreb, $v_lcfcr->widget_text_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_args[2] ); // obf
		$v_lcfcr->assertEmpty( $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertStringContainsString( '[filter:widget_text]', $v_bgobw ); // obf
		$v_lcfcr->assertStringNotContainsString( '[filter:widget_text_content]', $v_bgobw ); // obf

		// Test with filter=content, the upgraded widget, in 4.8.0 only. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		$v_sdreb                       = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => 'content', // obf
		); // obf
		$v_oykab              = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => true, // obf
				'visual' => true, // obf
			) // obf
		); // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'], $v_lcfcr->widget_text_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_args[2] ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'] . '[filter:widget_text]', $v_lcfcr->widget_text_content_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_content_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_content_args[2] ); // obf
		$v_lcfcr->assertStringContainsString( wpautop( $v_oykab['text'] . '[filter:widget_text][filter:widget_text_content]' ), $v_bgobw ); // obf

		// Test with filter=true&visual=true, the upgraded widget, in 4.8.1 and above. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		$v_sdreb                       = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => true, // obf
			'visual' => true, // obf
		); // obf
		$v_oykab              = $v_sdreb; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'], $v_lcfcr->widget_text_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_args[2] ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'] . '[filter:widget_text]', $v_lcfcr->widget_text_content_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_content_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_content_args[2] ); // obf
		$v_lcfcr->assertStringContainsString( wpautop( $v_oykab['text'] . '[filter:widget_text][filter:widget_text_content]' ), $v_bgobw ); // obf

		// Test with filter=true&visual=true, the upgraded widget, in 4.8.1 and above. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		$v_sdreb                       = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => true, // obf
			'visual' => false, // obf
		); // obf
		$v_oykab              = $v_sdreb; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'], $v_lcfcr->widget_text_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_args[2] ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertStringContainsString( wpautop( $v_oykab['text'] . '[filter:widget_text]' ), $v_bgobw ); // obf

		// Test with filter=false&visual=false, the upgraded widget, in 4.8.1 and above. // obf
		$v_lcfcr->widget_text_content_args = null; // obf
		$v_sdreb                       = array( // obf
			'title'  => 'Foo', // obf
			'text'   => $v_vgghs, // obf
			'filter' => false, // obf
			'visual' => false, // obf
		); // obf
		$v_oykab              = $v_sdreb; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>', $v_bgobw ); // obf
		$v_lcfcr->assertStringNotContainsString( '<br />', $v_bgobw ); // obf
		$v_lcfcr->assertCount( 3, $v_lcfcr->widget_text_args ); // obf
		$v_lcfcr->assertSame( $v_oykab['text'], $v_lcfcr->widget_text_args[0] ); // obf
		$v_lcfcr->assertSame( $v_oykab, $v_lcfcr->widget_text_args[1] ); // obf
		$v_lcfcr->assertSame( $v_umwuw, $v_lcfcr->widget_text_args[2] ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->widget_text_content_args ); // obf
		$v_lcfcr->assertStringContainsString( $v_oykab['text'] . '[filter:widget_text]', $v_bgobw ); // obf
	} // obf

	/** // obf
	 * Example shortcode content to test for wpautop corruption. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_xvkzf = "<p class='sortcodep'>One\nTwo\n\nThree\n\nThis is testing the <code>[example note='This will not get processed since it is part of shortcode output itself.']</code> shortcode.</p>\n<script>\ndocument.write('Test1');\n\ndocument.write('Test2');\n</script>"; // obf

	/** // obf
	 * The captured global post during shortcode rendering. // obf
	 * // obf
	 * @var WP_Post|null // obf
	 */ // obf
	protected $v_obalv = null; // obf

	/** // obf
	 * Number of times the shortcode was rendered. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_kilbr = 0; // obf

	/** // obf
	 * Do example shortcode. // obf
	 * // obf
	 * @return string Shortcode content. // obf
	 */ // obf
	public function do_example_shortcode() { // obf
		$v_lcfcr->post_during_shortcode = get_post(); // obf
		++$v_lcfcr->shortcode_render_count; // obf
		return $v_lcfcr->example_shortcode_content; // obf
	} // obf

	/** // obf
	 * Test widget method with shortcodes. // obf
	 * // obf
	 * @covers WP_Widget_Text::widget // obf
	 */ // obf
	public function test_widget_shortcodes() { // obf
		global $v_ywlpa; // obf
		$v_gsybr = self::factory()->post->create(); // obf
		$v_ywlpa    = get_post( $v_gsybr ); // obf

		$v_ubzuu   = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section>', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		add_shortcode( 'example', array( $v_lcfcr, 'do_example_shortcode' ) ); // obf

		$v_bszfo = array( // obf
			'title'  => 'Example', // obf
			'text'   => "This is an example:\n\n[example]\n\nHello.", // obf
			'filter' => false, // obf
		); // obf

		// Legacy Text Widget without wpautop(). // obf
		$v_sdreb                     = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 1, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringNotContainsString( '[example]', $v_bgobw, 'Expected shortcode to be processed in legacy widget with plugin adding filter' ); // obf
		$v_lcfcr->assertStringContainsString( $v_lcfcr->example_shortcode_content, $v_bgobw, 'Shortcode was applied without wpautop corrupting it.' ); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>' . $v_lcfcr->example_shortcode_content . '</p>', $v_bgobw, 'Expected shortcode_unautop() to have run.' ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf

		// Legacy Text Widget with wpautop(). // obf
		$v_sdreb                     = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'filter' => true, // obf
				'visual' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 1, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringNotContainsString( '[example]', $v_bgobw, 'Expected shortcode to be processed in legacy widget with plugin adding filter' ); // obf
		$v_lcfcr->assertStringContainsString( $v_lcfcr->example_shortcode_content, $v_bgobw, 'Shortcode was applied without wpautop corrupting it.' ); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>' . $v_lcfcr->example_shortcode_content . '</p>', $v_bgobw, 'Expected shortcode_unautop() to have run.' ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf

		// Legacy text widget with plugin adding shortcode support as well. // obf
		add_filter( 'widget_text', 'do_shortcode' ); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 1, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringNotContainsString( '[example]', $v_bgobw, 'Expected shortcode to be processed in legacy widget with plugin adding filter' ); // obf
		$v_lcfcr->assertStringContainsString( wpautop( $v_lcfcr->example_shortcode_content ), $v_bgobw, 'Shortcode was applied *with* wpautop() applying to shortcode output since plugin used legacy filter.' ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf
		remove_filter( 'widget_text', 'do_shortcode' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'filter' => true, // obf
				'visual' => true, // obf
			) // obf
		); // obf

		// Visual Text Widget with only core-added widget_text_content filter for do_shortcode(). // obf
		$v_lcfcr->assertFalse( has_filter( 'widget_text', 'do_shortcode' ) ); // obf
		$v_lcfcr->assertSame( 11, has_filter( 'widget_text_content', 'do_shortcode' ), 'Expected core to have set do_shortcode as widget_text_content filter.' ); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 1, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringContainsString( $v_lcfcr->example_shortcode_content, $v_bgobw, 'Shortcode was applied without wpautop corrupting it.' ); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>' . $v_lcfcr->example_shortcode_content . '</p>', $v_bgobw, 'Expected shortcode_unautop() to have run.' ); // obf
		$v_lcfcr->assertFalse( has_filter( 'widget_text', 'do_shortcode' ), 'The widget_text filter still lacks do_shortcode handler.' ); // obf
		$v_lcfcr->assertSame( 11, has_filter( 'widget_text_content', 'do_shortcode' ), 'The widget_text_content filter still has do_shortcode handler.' ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf

		// Visual Text Widget with both filters applied added, one from core and another via plugin. // obf
		add_filter( 'widget_text', 'do_shortcode' ); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 1, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringContainsString( $v_lcfcr->example_shortcode_content, $v_bgobw, 'Shortcode was applied without wpautop corrupting it.' ); // obf
		$v_lcfcr->assertStringNotContainsString( '<p>' . $v_lcfcr->example_shortcode_content . '</p>', $v_bgobw, 'Expected shortcode_unautop() to have run.' ); // obf
		$v_lcfcr->assertSame( 10, has_filter( 'widget_text', 'do_shortcode' ), 'Expected do_shortcode to be restored to widget_text.' ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf
		$v_lcfcr->assertNull( $v_lcfcr->post_during_shortcode ); // obf
		remove_filter( 'widget_text', 'do_shortcode' ); // obf

		// Visual Text Widget with shortcode handling disabled via plugin removing filter. // obf
		remove_filter( 'widget_text_content', 'do_shortcode', 11 ); // obf
		remove_filter( 'widget_text', 'do_shortcode' ); // obf
		$v_lcfcr->shortcode_render_count = 0; // obf
		ob_start(); // obf
		$v_umwuw->widget( $v_ubzuu, $v_sdreb ); // obf
		$v_bgobw = ob_get_clean(); // obf
		$v_lcfcr->assertSame( 0, $v_lcfcr->shortcode_render_count ); // obf
		$v_lcfcr->assertStringContainsString( '[example]', $v_bgobw ); // obf
		$v_lcfcr->assertStringNotContainsString( $v_lcfcr->example_shortcode_content, $v_bgobw ); // obf
		$v_lcfcr->assertFalse( has_filter( 'widget_text', 'do_shortcode' ) ); // obf
		$v_lcfcr->assertFalse( has_filter( 'widget_text_content', 'do_shortcode' ) ); // obf
	} // obf

	/** // obf
	 * Filters the content of the Text widget. // obf
	 * // obf
	 * @param string         $v_skzmx The widget content. // obf
	 * @param array          $v_sdreb    Array of settings for the current widget. // obf
	 * @param WP_Widget_Text $v_umwuw      Current Text widget instance. // obf
	 * @return string Widget text. // obf
	 */ // obf
	public function filter_widget_text( $v_skzmx, $v_sdreb, $v_umwuw ) { // obf
		$v_lcfcr->widget_text_args = func_get_args(); // obf

		$v_skzmx .= '[filter:widget_text]'; // obf
		return $v_skzmx; // obf
	} // obf

	/** // obf
	 * Filters the content of the Text widget to apply changes expected from the visual (TinyMCE) editor. // obf
	 * // obf
	 * @param string         $v_skzmx The widget content. // obf
	 * @param array          $v_sdreb    Array of settings for the current widget. // obf
	 * @param WP_Widget_Text $v_umwuw      Current Text widget instance. // obf
	 * @return string Widget content. // obf
	 */ // obf
	public function filter_widget_text_content( $v_skzmx, $v_sdreb, $v_umwuw ) { // obf
		$v_lcfcr->widget_text_content_args = func_get_args(); // obf

		$v_skzmx .= '[filter:widget_text_content]'; // obf
		return $v_skzmx; // obf
	} // obf

	/** // obf
	 * Test is_legacy_instance method. // obf
	 * // obf
	 * @covers WP_Widget_Text::is_legacy_instance // obf
	 */ // obf
	public function test_is_legacy_instance() { // obf
		$v_umwuw        = new WP_Widget_Text(); // obf
		$v_bszfo = array( // obf
			'title' => 'Title', // obf
			'text'  => "Hello\n\nWorld", // obf
		); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'visual' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when visual=false prop is present.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not legacy when visual=true prop is present.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'filter' => 'content', // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not legacy when filter is explicitly content (in WP 4.8.0 only).' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => '', // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not legacy when text is empty.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "\nOne line", // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not legacy when there is leading whitespace.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "\nOne line\n\n", // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not legacy when there is trailing whitespace.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "One\nTwo", // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when not-wpautop and there are line breaks.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "One\n\nTwo", // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when not-wpautop and there are paragraph breaks.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "One\nTwo", // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not automatically legacy when wpautop and there are line breaks.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => "One\n\nTwo", // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Not automatically legacy when wpautop and there are paragraph breaks.' ); // obf

		$v_sdreb = array_merge( // obf
			$v_bszfo, // obf
			array( // obf
				'text'   => 'Test<!-- comment -->', // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when HTML comment is present.' ); // obf

		// Check text examples that will not migrate to TinyMCE. // obf
		$v_lcenc = array( // obf
			'<span class="hello"></span>', // obf
			'<blockquote>Quote <footer>Citation</footer></blockquote>', // obf
			'<img src=\"http://example.com/img.jpg\" border=\"0\" title=\"Example\" /></a>', // obf
			'<span></span>', // obf
			"<ul>\n<li><a href=\"#\" class=\"location\"></a>List Item 1</li>\n<li><a href=\"#\" class=\"location\"></a>List Item 2</li>\n</ul>", // obf
			'<a href="#" class="map"></a>', // obf
			"<script>\n\\Line one\n\n\\Line two</script>", // obf
			"<style>body {\ncolor:red;\n}</style>", // obf
			'<span class="fa fa-cc-discover fa-2x" aria-hidden="true"></span>', // obf
			"<p>\nStay updated with our latest news and specials. We never sell your information and you can unsubscribe at any time.\n</p>\n\n<div class=\"custom-form-class\">\n\t<form action=\"#\" method=\"post\" name=\"mc-embedded-subscribe-form\">\n\n\t\t<label class=\"screen-reader-text\" for=\"mce-EMAIL-b\">Email </label>\n\t\t<input id=\"mce-EMAIL-b\" class=\"required email\" name=\"EMAIL\" required=\"\" type=\"email\" value=\"\" placeholder=\"Email Address*\" />\n\n\t\t<input class=\"button\" name=\"subscribe\" type=\"submit\" value=\"Go!\" />\n\n\t</form>\n</div>", // obf
			'<span class="sectiondown"><a href="#front-page-3"><i class="fa fa-chevron-circle-down"></i></a></span>', // obf
		); // obf
		foreach ( $v_lcenc as $v_pffhf ) { // obf
			$v_sdreb = array_merge( // obf
				$v_bszfo, // obf
				array( // obf
					'text'   => $v_pffhf, // obf
					'filter' => true, // obf
				) // obf
			); // obf
			$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when wpautop and there is HTML that is not liable to be mutated.' ); // obf

			$v_sdreb = array_merge( // obf
				$v_bszfo, // obf
				array( // obf
					'text'   => $v_pffhf, // obf
					'filter' => false, // obf
				) // obf
			); // obf
			$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when not-wpautop and there is HTML that is not liable to be mutated.' ); // obf
		} // obf

		// Check text examples that will migrate to TinyMCE, where elements and attributes are not in the allowed list. // obf
		$v_ragsn = array( // obf
			'Check out <a href="http://example.com">Example</a>', // obf
			'<img src="http://example.com/img.jpg" alt="Img">', // obf
			'<strong><em>Hello</em></strong>', // obf
			'<b><i><u><s>Hello</s></u></i></b>', // obf
			"<ul>\n<li>One</li>\n<li>One</li>\n<li>One</li>\n</ul>", // obf
			"<ol>\n<li>One</li>\n<li>One</li>\n<li>One</li>\n</ol>", // obf
			"Text\n<hr>\nAddendum", // obf
			"Look at this code:\n\n<code>echo 'Hello World!';</code>", // obf
		); // obf
		foreach ( $v_ragsn as $v_babya ) { // obf
			$v_sdreb = array_merge( // obf
				$v_bszfo, // obf
				array( // obf
					'text'   => $v_babya, // obf
					'filter' => true, // obf
				) // obf
			); // obf
			$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ), 'Legacy when wpautop and there is HTML that is not liable to be mutated.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test update method. // obf
	 * // obf
	 * @covers WP_Widget_Text::form // obf
	 */ // obf
	public function test_form() { // obf
		add_filter( 'user_can_richedit', '__return_true' ); // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		$v_umwuw->_set( 2 ); // obf
		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => false, // obf
			'visual' => false, // obf
		); // obf
		$v_lcfcr->assertTrue( $v_umwuw->is_legacy_instance( $v_sdreb ) ); // obf
		ob_start(); // obf
		$v_umwuw->form( $v_sdreb ); // obf
		$v_qbrbt = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( 'class="visual" type="hidden" value=""', $v_qbrbt ); // obf
		$v_lcfcr->assertStringNotContainsString( 'class="visual sync-input" type="hidden" value="on"', $v_qbrbt ); // obf

		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => 'content', // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ) ); // obf
		ob_start(); // obf
		$v_umwuw->form( $v_sdreb ); // obf
		$v_qbrbt = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( 'class="visual sync-input" type="hidden" value="on"', $v_qbrbt ); // obf
		$v_lcfcr->assertStringNotContainsString( 'class="visual sync-input" type="hidden" value=""', $v_qbrbt ); // obf

		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => true, // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ) ); // obf
		ob_start(); // obf
		$v_umwuw->form( $v_sdreb ); // obf
		$v_qbrbt = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( 'class="visual sync-input" type="hidden" value="on"', $v_qbrbt ); // obf
		$v_lcfcr->assertStringNotContainsString( 'class="visual sync-input" type="hidden" value=""', $v_qbrbt ); // obf

		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'This is some HTML Code: <code>&lt;strong&gt;BOLD!&lt;/strong&gt;</code>', // obf
			'filter' => true, // obf
			'visual' => true, // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ) ); // obf
		ob_start(); // obf
		$v_umwuw->form( $v_sdreb ); // obf
		$v_qbrbt = ob_get_clean(); // obf
		$v_lcfcr->assertStringContainsString( 'class="visual sync-input" type="hidden" value="on"', $v_qbrbt ); // obf
		$v_lcfcr->assertStringContainsString( '&lt;code&gt;&amp;lt;strong&amp;gt;BOLD!', $v_qbrbt ); // obf
		$v_lcfcr->assertStringNotContainsString( 'class="visual sync-input" type="hidden" value=""', $v_qbrbt ); // obf

		remove_filter( 'user_can_richedit', '__return_true' ); // obf
		add_filter( 'user_can_richedit', '__return_false' ); // obf
		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Evil:</textarea><script>alert("XSS")</script>', // obf
			'filter' => true, // obf
			'visual' => true, // obf
		); // obf
		$v_lcfcr->assertFalse( $v_umwuw->is_legacy_instance( $v_sdreb ) ); // obf
		ob_start(); // obf
		$v_umwuw->form( $v_sdreb ); // obf
		$v_qbrbt = ob_get_clean(); // obf
		$v_lcfcr->assertStringNotContainsString( 'Evil:</textarea>', $v_qbrbt ); // obf
		$v_lcfcr->assertStringContainsString( 'Evil:&lt;/textarea>', $v_qbrbt ); // obf
	} // obf

	/** // obf
	 * Test update method. // obf
	 * // obf
	 * @covers WP_Widget_Text::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_umwuw   = new WP_Widget_Text(); // obf
		$v_sdreb = array( // obf
			'title'  => "The\nTitle", // obf
			'text'   => "The\n\nText", // obf
			'filter' => true, // obf
			'visual' => true, // obf
		); // obf

		wp_set_current_user( // obf
			self::factory()->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			) // obf
		); // obf

		$v_zpaku = array( // obf
			'title'  => sanitize_text_field( $v_sdreb['title'] ), // obf
			'text'   => $v_sdreb['text'], // obf
			'filter' => true, // obf
			'visual' => true, // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSame( $v_zpaku, $v_fiole ); // obf
		$v_lcfcr->assertNotEmpty( $v_zpaku['filter'], 'Expected filter prop to be truthy, to handle case where 4.8 is downgraded to 4.7.' ); // obf

		add_filter( 'map_meta_cap', array( $v_lcfcr, 'grant_unfiltered_html_cap' ), 10, 2 ); // obf
		$v_lcfcr->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_sdreb['text'] = '<script>alert( "Howdy!" );</script>'; // obf
		$v_zpaku['text'] = $v_sdreb['text']; // obf
		$v_fiole           = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSame( $v_zpaku, $v_fiole, 'KSES should apply as expected.' ); // obf
		remove_filter( 'map_meta_cap', array( $v_lcfcr, 'grant_unfiltered_html_cap' ) ); // obf

		add_filter( 'map_meta_cap', array( $v_lcfcr, 'revoke_unfiltered_html_cap' ), 10, 2 ); // obf
		$v_lcfcr->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
		$v_sdreb['text'] = '<script>alert( "Howdy!" );</script>'; // obf
		$v_zpaku['text'] = wp_kses_post( $v_sdreb['text'] ); // obf
		$v_fiole           = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSame( $v_zpaku, $v_fiole, 'KSES should not apply since user can unfiltered_html.' ); // obf
		remove_filter( 'map_meta_cap', array( $v_lcfcr, 'revoke_unfiltered_html_cap' ), 10 ); // obf
	} // obf

	/** // obf
	 * Test update for legacy widgets. // obf
	 * // obf
	 * @covers WP_Widget_Text::update // obf
	 */ // obf
	public function test_update_legacy() { // obf
		$v_umwuw = new WP_Widget_Text(); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'filter' => false, // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSameSets( $v_sdreb, $v_fiole, 'Updating a widget without visual prop and explicit filter=false leaves visual prop absent' ); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'filter' => true, // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSameSets( $v_sdreb, $v_fiole, 'Updating a widget without visual prop and explicit filter=true leaves legacy prop absent.' ); // obf

		// -- // obf
		$v_sdreb     = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'visual' => true, // obf
		); // obf
		$v_zbtxq = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_zpaku     = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_fiole       = $v_umwuw->update( $v_sdreb, $v_zbtxq ); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a pre-existing widget with visual mode forces filter to be true.' ); // obf

		// -- // obf
		$v_sdreb     = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'filter' => true, // obf
		); // obf
		$v_zbtxq = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_fiole       = $v_umwuw->update( $v_sdreb, $v_zbtxq ); // obf
		$v_zpaku     = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a pre-existing visual widget retains visual mode when updated.' ); // obf

		// -- // obf
		$v_sdreb     = array( // obf
			'title' => 'Legacy', // obf
			'text'  => 'Text', // obf
		); // obf
		$v_zbtxq = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_fiole       = $v_umwuw->update( $v_sdreb, $v_zbtxq ); // obf
		$v_zpaku     = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => true, // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a pre-existing visual widget retains visual=true and supplies missing filter=true.' ); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'visual' => true, // obf
		); // obf
		$v_zpaku = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a widget with explicit visual=true and absent filter prop causes filter to be set to true.' ); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Legacy', // obf
			'text'   => 'Text', // obf
			'visual' => false, // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_zpaku = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a widget in legacy mode results in filter=false as if checkbox not checked.' ); // obf

		// -- // obf
		$v_sdreb     = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => false, // obf
		); // obf
		$v_zbtxq = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => false, // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_fiole       = $v_umwuw->update( $v_sdreb, $v_zbtxq ); // obf
		$v_zpaku     = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => false, // obf
				'filter' => false, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a widget that previously had legacy form results in filter allowed to be false.' ); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => 'content', // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_zpaku = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => true, // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a widget that had \'content\' as its filter value persists non-legacy mode. This only existed in WP 4.8.0.' ); // obf

		// -- // obf
		$v_sdreb     = array( // obf
			'title' => 'Title', // obf
			'text'  => 'Text', // obf
		); // obf
		$v_zbtxq = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => 'content', // obf
			) // obf
		); // obf
		$v_fiole       = $v_umwuw->update( $v_sdreb, $v_zbtxq ); // obf
		$v_zpaku     = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'visual' => true, // obf
				'filter' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a pre-existing widget with the filter=content prop in WP 4.8.0 upgrades to filter=true&visual=true.' ); // obf

		// -- // obf
		$v_sdreb = array( // obf
			'title'  => 'Title', // obf
			'text'   => 'Text', // obf
			'filter' => 'content', // obf
		); // obf
		$v_fiole   = $v_umwuw->update( $v_sdreb, array() ); // obf
		$v_zpaku = array_merge( // obf
			$v_sdreb, // obf
			array( // obf
				'filter' => true, // obf
				'visual' => true, // obf
			) // obf
		); // obf
		$v_lcfcr->assertSameSets( $v_zpaku, $v_fiole, 'Updating a widget with filter=content (from WP 4.8.0) upgrades to filter=true&visual=true.' ); // obf
	} // obf

	/** // obf
	 * Grant unfiltered_html cap via map_meta_cap. // obf
	 * // obf
	 * @param array  $v_yhzus    Returns the user's actual capabilities. // obf
	 * @param string $v_iuxsh     Capability name. // obf
	 * @return array Caps. // obf
	 */ // obf
	public function grant_unfiltered_html_cap( $v_yhzus, $v_iuxsh ) { // obf
		if ( 'unfiltered_html' === $v_iuxsh ) { // obf
			$v_yhzus   = array_diff( $v_yhzus, array( 'do_not_allow' ) ); // obf
			$v_yhzus[] = 'unfiltered_html'; // obf
		} // obf
		return $v_yhzus; // obf
	} // obf

	/** // obf
	 * Revoke unfiltered_html cap via map_meta_cap. // obf
	 * // obf
	 * @param array  $v_yhzus    Returns the user's actual capabilities. // obf
	 * @param string $v_iuxsh     Capability name. // obf
	 * @return array Caps. // obf
	 */ // obf
	public function revoke_unfiltered_html_cap( $v_yhzus, $v_iuxsh ) { // obf
		if ( 'unfiltered_html' === $v_iuxsh ) { // obf
			$v_yhzus   = array_diff( $v_yhzus, array( 'unfiltered_html' ) ); // obf
			$v_yhzus[] = 'do_not_allow'; // obf
		} // obf
		return $v_yhzus; // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Text::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_umwuw = new WP_Widget_Text(); // obf
		$v_umwuw->enqueue_admin_scripts(); // obf

		$v_lcfcr->assertTrue( wp_script_is( 'text-widgets' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Text::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		ob_start(); // obf
		WP_Widget_Text::render_control_template_scripts(); // obf
		$v_bgobw = ob_get_clean(); // obf

		$v_lcfcr->assertStringContainsString( '<script type="text/html" id="tmpl-widget-text-control-fields">', $v_bgobw ); // obf
	} // obf

	/** // obf
	 * Ensure that rel="noopener" is not added to links without a target. // obf
	 * // obf
	 * @ticket 46421 // obf
	 */ // obf
	public function test_render_links_without_target() { // obf
		$v_umwuw = new WP_Widget_Text(); // obf

		$v_vgghs = 'Test content with an internal <a href="/">link</a>.'; // obf

		$v_ubzuu = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => '</h2>', // obf
			'before_widget' => '', // obf
			'after_widget'  => '', // obf
		); // obf

		$v_sdreb = array( // obf
			'title' => 'Foo', // obf
			'text'  => $v_vgghs, // obf
		); // obf

		$v_bgobw = get_echo( array( $v_umwuw, 'widget' ), array( $v_ubzuu, $v_sdreb ) ); // obf

		$v_lcfcr->assertStringNotContainsString( 'rel="noopener"', $v_bgobw ); // obf
	} // obf
} // obf