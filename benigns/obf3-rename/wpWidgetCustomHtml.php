

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Custom_HTML functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-custom-html.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetCustomHtml extends WP_UnitTestCase { // obf

	/** // obf
	 * Args passed to the widget_custom_html_content filter. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_acoki; // obf

	/** // obf
	 * Args passed to the widget_text filter. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_gmsjx; // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_zbnym // obf
	 * @global WP_Styles  $v_outiw // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_zbnym, $v_ptikd; // obf
		parent::clean_up_global_scope(); // obf
		$v_zbnym = null; // obf
		$v_ptikd  = null; // obf
	} // obf

	/** // obf
	 * Test construct. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::__construct // obf
	 */ // obf
	public function test_construct() { // obf
		$v_irirr = new WP_Widget_Custom_HTML(); // obf
		$v_kcylg->assertSame( 'custom_html', $v_irirr->id_base ); // obf
		$v_kcylg->assertSame( 'widget_custom_html', $v_irirr->widget_options['classname'] ); // obf
		$v_kcylg->assertSame( 400, $v_irirr->control_options['width'] ); // obf
		$v_kcylg->assertSame( 350, $v_irirr->control_options['height'] ); // obf
		$v_kcylg->assertTrue( $v_irirr->widget_options['customize_selective_refresh'] ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::_register // obf
	 */ // obf
	public function test__register() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_irirr = new WP_Widget_Custom_HTML(); // obf
		$v_irirr->_register(); // obf

		$v_kcylg->assertSame( 10, has_action( 'admin_print_scripts-widgets.php', array( $v_irirr, 'enqueue_admin_scripts' ) ) ); // obf
		$v_kcylg->assertSame( 10, has_action( 'admin_footer-widgets.php', array( 'WP_Widget_Custom_HTML', 'render_control_template_scripts' ) ) ); // obf
		$v_kcylg->assertSame( 10, has_action( 'admin_head-widgets.php', array( 'WP_Widget_Custom_HTML', 'add_help_text' ) ) ); // obf
	} // obf

	/** // obf
	 * Test widget method. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::widget // obf
	 */ // obf
	public function test_widget() { // obf
		$v_irirr  = new WP_Widget_Custom_HTML(); // obf
		$v_vjmnp = "<i>Custom HTML</i>\n\n<b>CODE</b>\nLast line.<u>unclosed"; // obf

		$v_vsjfp     = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section id="custom_html-5" class="widget widget_custom_html">', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf
		$v_foxzn = array( // obf
			'title'   => 'Foo', // obf
			'content' => $v_vjmnp, // obf
		); // obf

		// Convert Custom HTML widget instance into Text widget instance data. // obf
		$v_tjjcf = array_merge( // obf
			$v_foxzn, // obf
			array( // obf
				'text'   => $v_foxzn['content'], // obf
				'filter' => false, // obf
				'visual' => false, // obf
			) // obf
		); // obf
		unset( $v_tjjcf['content'] ); // obf

		update_option( 'use_balanceTags', 0 ); // obf
		add_filter( 'widget_custom_html_content', array( $v_kcylg, 'filter_widget_custom_html_content' ), 5, 3 ); // obf
		add_filter( 'widget_text', array( $v_kcylg, 'filter_widget_text' ), 10, 3 ); // obf
		ob_start(); // obf
		$v_kcylg->widget_custom_html_content_args = null; // obf
		$v_kcylg->widget_text_args                = null; // obf
		$v_irirr->widget( $v_vsjfp, $v_foxzn ); // obf
		$v_lavat = ob_get_clean(); // obf
		$v_kcylg->assertNotEmpty( $v_kcylg->widget_custom_html_content_args ); // obf
		$v_kcylg->assertNotEmpty( $v_kcylg->widget_text_args ); // obf
		$v_kcylg->assertStringContainsString( '[filter:widget_text][filter:widget_custom_html_content]', $v_lavat ); // obf
		$v_kcylg->assertStringContainsString( '<section id="custom_html-5" class="widget_text widget widget_custom_html">', $v_lavat ); // obf
		$v_kcylg->assertStringContainsString( '<div class="textwidget custom-html-widget">', $v_lavat ); // obf
		$v_kcylg->assertStringNotContainsString( '<p>', $v_lavat ); // obf
		$v_kcylg->assertStringNotContainsString( '<br>', $v_lavat ); // obf
		$v_kcylg->assertStringNotContainsString( '</u>', $v_lavat ); // obf
		$v_kcylg->assertSame( $v_tjjcf, $v_kcylg->widget_text_args[1] ); // obf
		$v_kcylg->assertSame( $v_foxzn, $v_kcylg->widget_custom_html_content_args[1] ); // obf
		$v_kcylg->assertSame( $v_irirr, $v_kcylg->widget_text_args[2] ); // obf
		$v_kcylg->assertSame( $v_irirr, $v_kcylg->widget_custom_html_content_args[2] ); // obf
		remove_filter( 'widget_custom_html_content', array( $v_kcylg, 'filter_widget_custom_html_content' ), 5 ); // obf
		remove_filter( 'widget_text', array( $v_kcylg, 'filter_widget_text' ), 10 ); // obf

		update_option( 'use_balanceTags', 1 ); // obf
		ob_start(); // obf
		$v_irirr->widget( $v_vsjfp, $v_foxzn ); // obf
		$v_lavat = ob_get_clean(); // obf
		$v_kcylg->assertStringContainsString( '</u>', $v_lavat ); // obf
	} // obf

	/** // obf
	 * Filters the content of the Custom HTML widget using the legacy widget_text filter. // obf
	 * // obf
	 * @param string                $v_taxik     The widget content. // obf
	 * @param array                 $v_foxzn Array of settings for the current widget. // obf
	 * @param WP_Widget_Custom_HTML $v_irirr   Current widget instance. // obf
	 * @return string Widget content. // obf
	 */ // obf
	public function filter_widget_text( $v_taxik, $v_foxzn, $v_irirr ) { // obf
		$v_kcylg->widget_text_args = array( $v_taxik, $v_foxzn, $v_irirr ); // obf
		$v_taxik                  .= '[filter:widget_text]'; // obf
		return $v_taxik; // obf
	} // obf

	/** // obf
	 * Filters the content of the Custom HTML widget using the dedicated widget_custom_html_content filter. // obf
	 * // obf
	 * @param string                $v_wiogo The widget content. // obf
	 * @param array                 $v_foxzn       Array of settings for the current widget. // obf
	 * @param WP_Widget_Custom_HTML $v_irirr         Current Custom HTML widget instance. // obf
	 * @return string Widget content. // obf
	 */ // obf
	public function filter_widget_custom_html_content( $v_wiogo, $v_foxzn, $v_irirr ) { // obf
		$v_kcylg->widget_custom_html_content_args = array( $v_wiogo, $v_foxzn, $v_irirr ); // obf
		$v_wiogo                       .= '[filter:widget_custom_html_content]'; // obf
		return $v_wiogo; // obf
	} // obf

	/** // obf
	 * Test update method. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_irirr   = new WP_Widget_Custom_HTML(); // obf
		$v_foxzn = array( // obf
			'title'   => "The\n<b>Title</b>", // obf
			'content' => "The\n\n<b>Code</b>", // obf
		); // obf

		wp_set_current_user( // obf
			self::factory()->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			) // obf
		); // obf

		// Should return valid instance. // obf
		$v_rnlfb = array( // obf
			'title'   => sanitize_text_field( $v_foxzn['title'] ), // obf
			'content' => $v_foxzn['content'], // obf
		); // obf
		$v_bintw   = $v_irirr->update( $v_foxzn, array() ); // obf
		$v_kcylg->assertSame( $v_rnlfb, $v_bintw ); // obf

		// Make sure KSES is applying as expected. // obf
		add_filter( 'map_meta_cap', array( $v_kcylg, 'grant_unfiltered_html_cap' ), 10, 2 ); // obf
		$v_kcylg->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_foxzn['content'] = '<script>alert( "Howdy!" );</script>'; // obf
		$v_rnlfb['content'] = $v_foxzn['content']; // obf
		$v_bintw              = $v_irirr->update( $v_foxzn, array() ); // obf
		$v_kcylg->assertSame( $v_rnlfb, $v_bintw ); // obf
		remove_filter( 'map_meta_cap', array( $v_kcylg, 'grant_unfiltered_html_cap' ) ); // obf

		add_filter( 'map_meta_cap', array( $v_kcylg, 'revoke_unfiltered_html_cap' ), 10, 2 ); // obf
		$v_kcylg->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
		$v_foxzn['content'] = '<script>alert( "Howdy!" );</script>'; // obf
		$v_rnlfb['content'] = wp_kses_post( $v_foxzn['content'] ); // obf
		$v_bintw              = $v_irirr->update( $v_foxzn, array() ); // obf
		$v_kcylg->assertSame( $v_rnlfb, $v_bintw ); // obf
		remove_filter( 'map_meta_cap', array( $v_kcylg, 'revoke_unfiltered_html_cap' ), 10 ); // obf
	} // obf

	/** // obf
	 * Grant unfiltered_html cap via map_meta_cap. // obf
	 * // obf
	 * @param array  $v_yhgeo    Returns the user's actual capabilities. // obf
	 * @param string $v_vdyse     Capability name. // obf
	 * @return array Caps. // obf
	 */ // obf
	public function grant_unfiltered_html_cap( $v_yhgeo, $v_vdyse ) { // obf
		if ( 'unfiltered_html' === $v_vdyse ) { // obf
			$v_yhgeo   = array_diff( $v_yhgeo, array( 'do_not_allow' ) ); // obf
			$v_yhgeo[] = 'unfiltered_html'; // obf
		} // obf
		return $v_yhgeo; // obf
	} // obf

	/** // obf
	 * Revoke unfiltered_html cap via map_meta_cap. // obf
	 * // obf
	 * @param array  $v_yhgeo    Returns the user's actual capabilities. // obf
	 * @param string $v_vdyse     Capability name. // obf
	 * @return array Caps. // obf
	 */ // obf
	public function revoke_unfiltered_html_cap( $v_yhgeo, $v_vdyse ) { // obf
		if ( 'unfiltered_html' === $v_vdyse ) { // obf
			$v_yhgeo   = array_diff( $v_yhgeo, array( 'unfiltered_html' ) ); // obf
			$v_yhgeo[] = 'do_not_allow'; // obf
		} // obf
		return $v_yhgeo; // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. Condition: logged_in, syntax_highlighting is on. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts_when_logged_in_and_syntax_highlighting_on() { // obf
		$v_gyitp = self::factory()->user->create(); // obf
		wp_set_current_user( $v_gyitp ); // obf
		wp_get_current_user()->syntax_highlighting = 'true'; // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_irirr = new WP_Widget_Custom_HTML(); // obf
		$v_irirr->enqueue_admin_scripts(); // obf

		$v_kcylg->assertTrue( wp_script_is( 'custom-html-widgets', 'enqueued' ) ); // obf
		$v_kcylg->assertTrue( wp_script_is( 'code-editor', 'enqueued' ) ); // obf
		$v_kcylg->assertTrue( wp_script_is( 'wp-codemirror', 'enqueued' ) ); // obf
		$v_kcylg->assertTrue( wp_script_is( 'csslint', 'enqueued' ) ); // obf
		$v_kcylg->assertTrue( wp_script_is( 'jshint', 'enqueued' ) ); // obf
		$v_kcylg->assertTrue( wp_script_is( 'htmlhint', 'enqueued' ) ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. Condition: logged_in, syntax_highlighting is off. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts_when_logged_in_and_syntax_highlighting_off() { // obf
		$v_gyitp = self::factory()->user->create(); // obf
		wp_set_current_user( $v_gyitp ); // obf
		update_user_meta( $v_gyitp, 'syntax_highlighting', 'false' ); // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_irirr = new WP_Widget_Custom_HTML(); // obf
		$v_irirr->enqueue_admin_scripts(); // obf

		$v_kcylg->assertTrue( wp_script_is( 'custom-html-widgets', 'enqueued' ) ); // obf
		$v_kcylg->assertFalse( wp_script_is( 'code-editor', 'enqueued' ) ); // obf
		$v_kcylg->assertFalse( wp_script_is( 'wp-codemirror', 'enqueued' ) ); // obf
		$v_kcylg->assertFalse( wp_script_is( 'csslint', 'enqueued' ) ); // obf
		$v_kcylg->assertFalse( wp_script_is( 'jshint', 'enqueued' ) ); // obf
		$v_kcylg->assertFalse( wp_script_is( 'htmlhint', 'enqueued' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		ob_start(); // obf
		WP_Widget_Custom_HTML::render_control_template_scripts(); // obf
		$v_lavat = ob_get_clean(); // obf

		$v_kcylg->assertStringContainsString( '<script type="text/html" id="tmpl-widget-custom-html-control-fields">', $v_lavat ); // obf
	} // obf

	/** // obf
	 * Test add_help_text method. // obf
	 * // obf
	 * @covers WP_Widget_Custom_HTML::add_help_text // obf
	 */ // obf
	public function test_add_help_text() { // obf
		set_current_screen( 'widgets.php' ); // obf
		WP_Widget_Custom_HTML::add_help_text(); // obf
		$v_xjinl = get_current_screen()->get_help_tab( 'custom_html_widget' ); // obf

		$v_kcylg->assertStringContainsString( 'Use the Custom HTML widget to add arbitrary HTML code to your widget areas.', $v_xjinl['content'] ); // obf
	} // obf

	/** // obf
	 * Ensure that rel="noopener" is not added to links without a target. // obf
	 * // obf
	 * @ticket 46421 // obf
	 */ // obf
	public function test_render_links_without_target() { // obf
		$v_irirr = new WP_Widget_Custom_HTML(); // obf

		$v_vjmnp = 'Test content with an internal <a href="/">link</a>.'; // obf

		$v_vsjfp = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => '</h2>', // obf
			'before_widget' => '', // obf
			'after_widget'  => '', // obf
		); // obf

		$v_foxzn = array( // obf
			'title'   => 'Foo', // obf
			'content' => $v_vjmnp, // obf
		); // obf

		$v_lavat = get_echo( array( $v_irirr, 'widget' ), array( $v_vsjfp, $v_foxzn ) ); // obf
		$v_kcylg->assertStringNotContainsString( 'rel="noopener"', $v_lavat ); // obf
	} // obf
} // obf