

<?php // obf

/** // obf
 * Test functions and classes for widgets and sidebars. // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets extends WP_UnitTestCase { // obf
	public $v_ozlym; // obf
	public $v_ntoam; // obf

	public function clean_up_global_scope() { // obf
		global $v_ldejg, $v_amlxh, $v_mwtgy, $v_xffwl, $v_yktax; // obf

		$v_amlxh        = array(); // obf
		$v_mwtgy         = array(); // obf
		$v_xffwl = array(); // obf
		$v_yktax  = array(); // obf
		$v_ldejg->widgets    = array(); // obf

		parent::clean_up_global_scope(); // obf
	} // obf

	public function tear_down() { // obf
		global $v_ulsfa; // obf

		$v_ulsfa = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @see register_widget() // obf
	 * @see unregister_widget() // obf
	 */ // obf
	public function test_register_and_unregister_widget_core_widget() { // obf
		global $v_ldejg; // obf

		$v_sxavy = 'WP_Widget_Search'; // obf

		register_widget( $v_sxavy ); // obf
		$v_nlxig->assertArrayHasKey( $v_sxavy, $v_ldejg->widgets ); // obf

		unregister_widget( $v_sxavy ); // obf
		$v_nlxig->assertArrayNotHasKey( $v_sxavy, $v_ldejg->widgets ); // obf
	} // obf

	/** // obf
	 * Test that registering a widget class and registering a widget instance work together. // obf
	 * // obf
	 * @see register_widget() // obf
	 * @see unregister_widget() // obf
	 * @ticket 28216 // obf
	 */ // obf
	public function test_register_and_unregister_widget_instance() { // obf
		global $v_ldejg, $v_mwtgy; // obf

		$v_nlxig->assertEmpty( $v_ldejg->widgets ); // obf
		$v_nlxig->assertEmpty( $v_mwtgy ); // obf

		update_option( // obf
			'widget_search', // obf
			array( // obf
				2              => array( 'title' => '' ), // obf
				'_multiwidget' => 1, // obf
			) // obf
		); // obf
		update_option( // obf
			'widget_better_search', // obf
			array( // obf
				3              => array( 'title' => '' ), // obf
				'_multiwidget' => 1, // obf
			) // obf
		); // obf
		update_option( // obf
			'widget_best_search', // obf
			array( // obf
				4              => array( 'title' => '' ), // obf
				'_multiwidget' => 1, // obf
			) // obf
		); // obf

		register_widget( 'WP_Widget_Search' ); // obf
		$v_nlxig->assertArrayHasKey( 'WP_Widget_Search', $v_ldejg->widgets ); // obf

		$v_zbhvd                              = new WP_Widget_Search(); // obf
		$v_zbhvd->id_base                     = 'better_search'; // obf
		$v_zbhvd->name                        = 'Better Search'; // obf
		$v_zbhvd->option_name                 = 'widget_' . $v_zbhvd->id_base; // obf
		$v_zbhvd->widget_options['classname'] = 'widget_' . $v_zbhvd->id_base; // obf
		$v_zbhvd->control_options['id_base']  = $v_zbhvd->id_base; // obf
		register_widget( $v_zbhvd ); // obf
		$v_nlxig->assertContains( $v_zbhvd, $v_ldejg->widgets ); // obf

		$v_ytsjy                              = new WP_Widget_Search(); // obf
		$v_ytsjy->id_base                     = 'best_search'; // obf
		$v_ytsjy->name                        = 'Best Search'; // obf
		$v_ytsjy->option_name                 = 'widget_' . $v_ytsjy->id_base; // obf
		$v_ytsjy->widget_options['classname'] = 'widget_' . $v_ytsjy->id_base; // obf
		$v_ytsjy->control_options['id_base']  = $v_ytsjy->id_base; // obf
		register_widget( $v_ytsjy ); // obf
		$v_nlxig->assertContains( $v_ytsjy, $v_ldejg->widgets ); // obf

		$v_nlxig->assertCount( 3, $v_ldejg->widgets ); // obf
		$v_nlxig->assertArrayHasKey( 'WP_Widget_Search', $v_ldejg->widgets ); // obf
		$v_nlxig->assertContains( $v_zbhvd, $v_ldejg->widgets ); // obf
		$v_nlxig->assertContains( $v_ytsjy, $v_ldejg->widgets ); // obf

		$v_ldejg->_register_widgets(); // obf

		$v_nlxig->assertArrayHasKey( 'search-2', $v_mwtgy ); // obf
		$v_nlxig->assertArrayHasKey( 'better_search-3', $v_mwtgy ); // obf
		$v_nlxig->assertArrayHasKey( 'best_search-4', $v_mwtgy ); // obf
		$v_nlxig->assertInstanceOf( 'WP_Widget_Search', $v_mwtgy['search-2']['callback'][0] ); // obf
		$v_nlxig->assertSame( $v_zbhvd, $v_mwtgy['better_search-3']['callback'][0] ); // obf
		$v_nlxig->assertSame( $v_ytsjy, $v_mwtgy['best_search-4']['callback'][0] ); // obf

		$v_nlxig->assertContains( $v_zbhvd, $v_ldejg->widgets ); // obf
		$v_nlxig->assertContains( $v_ytsjy, $v_ldejg->widgets ); // obf
		$v_nlxig->assertArrayHasKey( 'WP_Widget_Search', $v_ldejg->widgets ); // obf
		unregister_widget( 'WP_Widget_Search' ); // obf
		unregister_widget( $v_zbhvd ); // obf
		unregister_widget( $v_ytsjy ); // obf
		$v_nlxig->assertNotContains( $v_zbhvd, $v_ldejg->widgets ); // obf
		$v_nlxig->assertNotContains( $v_ytsjy, $v_ldejg->widgets ); // obf
		$v_nlxig->assertArrayNotHasKey( 'WP_Widget_Search', $v_ldejg->widgets ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_register_sidebars_single() { // obf
		global $v_amlxh; // obf

		register_sidebars( 1, array( 'id' => 'wp-unit-test' ) ); // obf

		$v_nlxig->assertArrayHasKey( 'wp-unit-test', $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_register_sidebars_multiple() { // obf
		global $v_amlxh; // obf

		$v_acacj  = array(); // obf
		$v_zfqsq     = 3; // obf
		$v_kkhnh = 'WP Unit Test'; // obf
		register_sidebars( $v_zfqsq, array( 'name' => $v_kkhnh . ' %d' ) ); // obf

		$v_zyfml = wp_list_pluck( $v_amlxh, 'name' ); // obf
		for ( $v_hnxmx = 1; $v_hnxmx <= $v_zfqsq; $v_hnxmx++ ) { // obf
			if ( in_array( "$v_kkhnh $v_hnxmx", $v_zyfml, true ) ) { // obf
				$v_acacj[] = true; // obf
			} // obf
		} // obf

		$v_nlxig->assertCount( $v_zfqsq, $v_acacj ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_register_sidebar_with_no_id() { // obf
		global $v_amlxh; // obf

		$v_nlxig->setExpectedIncorrectUsage( 'register_sidebar' ); // obf

		// Incorrectly register a couple of sidebars for fun. // obf
		register_sidebar(); // obf
		register_sidebar(); // obf

		$v_sxqgl = 'sidebar-2'; // Number of sidebars in the global + 1. // obf

		$v_nlxig->assertArrayHasKey( $v_sxqgl, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_unregister_sidebar_registered_with_no_id() { // obf
		global $v_amlxh; // obf

		$v_nlxig->setExpectedIncorrectUsage( 'register_sidebar' ); // obf

		// Incorrectly register a couple of sidebars for fun. // obf
		register_sidebar(); // obf
		register_sidebar(); // obf

		$v_sxqgl = 'sidebar-2'; // Number of sidebars in the global + 1. // obf

		unregister_sidebar( $v_sxqgl ); // obf

		$v_nlxig->assertArrayNotHasKey( $v_sxqgl, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_register_sidebar_with_string_id() { // obf
		global $v_amlxh; // obf

		$v_smngu = 'wp-unit-test'; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		$v_nlxig->assertArrayHasKey( $v_smngu, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_unregister_sidebar_with_string_id() { // obf
		global $v_amlxh; // obf

		$v_smngu = 'wp-unit-tests'; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		unregister_sidebar( $v_smngu ); // obf
		$v_nlxig->assertArrayNotHasKey( $v_smngu, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_register_sidebar_with_numeric_id() { // obf
		global $v_amlxh; // obf

		$v_smngu = 2; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		$v_nlxig->assertArrayHasKey( $v_smngu, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_unregister_sidebar_with_numeric_id() { // obf
		global $v_amlxh; // obf

		$v_smngu = 2; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		unregister_sidebar( $v_smngu ); // obf
		$v_nlxig->assertArrayNotHasKey( $v_smngu, $v_amlxh ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 * @ticket 19709 // obf
	 */ // obf
	public function test_register_sidebar_with_after_and_before_sidebar() { // obf
		global $v_amlxh; // obf

		$v_smngu = 'test-sidebar'; // obf
		register_sidebar( // obf
			array( // obf
				'id'             => $v_smngu, // obf
				'before_sidebar' => '<div id="%1$v_ndzyw" class="before-sidebar %2$v_ndzyw">', // obf
				'after_sidebar'  => '</div> <!-- .before-sidebar -->', // obf
				'class'          => 'test-sidebar', // obf
			) // obf
		); // obf

		$v_nlxig->assertArrayHasKey( $v_smngu, $v_amlxh ); // obf
		$v_nlxig->assertStringContainsString( '<div id="%1$v_ndzyw" class="before-sidebar %2$v_ndzyw">', $v_amlxh[ $v_smngu ]['before_sidebar'] ); // obf
		$v_nlxig->assertStringContainsString( '</div> <!-- .before-sidebar -->', $v_amlxh[ $v_smngu ]['after_sidebar'] ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 * @ticket 19709 // obf
	 */ // obf
	public function test_register_sidebar_without_after_and_before_sidebar() { // obf
		global $v_amlxh; // obf

		$v_smngu = 'test-sidebar-2'; // obf
		register_sidebar( // obf
			array( // obf
				'id' => $v_smngu, // obf
			) // obf
		); // obf

		$v_nlxig->assertArrayHasKey( $v_smngu, $v_amlxh ); // obf
		$v_nlxig->assertEmpty( $v_amlxh[ $v_smngu ]['before_sidebar'] ); // obf
		$v_nlxig->assertEmpty( $v_amlxh[ $v_smngu ]['after_sidebar'] ); // obf
	} // obf

	/** // obf
	 * Utility hook callback used to store a sidebar ID mid-function. // obf
	 */ // obf
	public function retrieve_sidebar_id( $v_oirfn, $v_ntoam ) { // obf
		$v_nlxig->sidebar_index = $v_oirfn; // obf
		$v_nlxig->valid_sidebar = $v_ntoam; // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_dynamic_sidebar_using_sidebar_registered_with_no_id() { // obf
		$v_nlxig->setExpectedIncorrectUsage( 'register_sidebar' ); // obf

		// Incorrectly register a couple of sidebars for fun. // obf
		register_sidebar(); // obf
		register_sidebar(); // obf

		$v_sxqgl = 'sidebar-2'; // Number of sidebars in the global + 1. // obf

		add_action( 'dynamic_sidebar_before', array( $v_nlxig, 'retrieve_sidebar_id' ), 10, 2 ); // obf

		dynamic_sidebar( 2 ); // obf

		$v_nlxig->assertSame( $v_sxqgl, $v_nlxig->sidebar_index ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_dynamic_sidebar_using_invalid_sidebar_id() { // obf
		register_sidebar( array( 'id' => 'wp-unit-text' ) ); // obf

		add_action( 'dynamic_sidebar_before', array( $v_nlxig, 'retrieve_sidebar_id' ), 10, 2 ); // obf

		// 5 is a fake sidebar ID. // obf
		dynamic_sidebar( 5 ); // obf

		/* // obf
		 * If the sidebar ID is invalid, the second argument passed to // obf
		 * the 'dynamic_sidebar_before' hook will be false. // obf
		 */ // obf
		$v_nlxig->assertFalse( $v_nlxig->valid_sidebar ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_dynamic_sidebar_numeric_id() { // obf
		$v_smngu = 2; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		add_action( 'dynamic_sidebar_before', array( $v_nlxig, 'retrieve_sidebar_id' ), 10, 2 ); // obf

		dynamic_sidebar( $v_smngu ); // obf

		$v_nlxig->assertSame( "sidebar-{$v_smngu}", $v_nlxig->sidebar_index ); // obf
	} // obf

	/** // obf
	 * @group sidebar // obf
	 */ // obf
	public function test_dynamic_sidebar_string_id() { // obf
		$v_smngu = 'wp-unit-tests'; // obf
		register_sidebar( array( 'id' => $v_smngu ) ); // obf

		add_action( 'dynamic_sidebar_before', array( $v_nlxig, 'retrieve_sidebar_id' ), 10, 2 ); // obf

		dynamic_sidebar( $v_smngu ); // obf

		$v_nlxig->assertSame( $v_smngu, $v_nlxig->sidebar_index ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget_Search::form() // obf
	 */ // obf
	public function test_wp_widget_search_form() { // obf
		$v_ldqqp = new WP_Widget_Search( 'foo', 'Foo' ); // obf
		ob_start(); // obf
		$v_qppup     = array( // obf
			'before_widget' => '<section>', // obf
			'after_widget'  => "</section>\n", // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
		); // obf
		$v_ctljx = array( 'title' => 'Buscar' ); // obf
		$v_ldqqp->_set( 2 ); // obf
		$v_ldqqp->widget( $v_qppup, $v_ctljx ); // obf
		$v_xcuno = ob_get_clean(); // obf
		$v_nlxig->assertStringNotContainsString( 'no-options-widget', $v_xcuno ); // obf
		$v_nlxig->assertStringContainsString( '<h2>Buscar</h2>', $v_xcuno ); // obf
		$v_nlxig->assertStringContainsString( '<section>', $v_xcuno ); // obf
		$v_nlxig->assertStringContainsString( '</section>', $v_xcuno ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::form() // obf
	 */ // obf
	public function test_wp_widget_form() { // obf
		$v_ldqqp = new WP_Widget( 'foo', 'Foo' ); // obf
		ob_start(); // obf
		$v_ijbjj = $v_ldqqp->form( array() ); // obf
		$v_xcuno = ob_get_clean(); // obf
		$v_nlxig->assertSame( 'noform', $v_ijbjj ); // obf
		$v_nlxig->assertStringContainsString( 'no-options-widget', $v_xcuno ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::__construct() // obf
	 */ // obf
	public function test_wp_widget_constructor() { // obf
		$v_kkhnh    = 'foo'; // obf
		$v_kebnl       = 'Foo'; // obf
		$v_rtdtm = new WP_Widget( $v_kkhnh, $v_kebnl ); // obf

		$v_nlxig->assertSame( $v_kkhnh, $v_rtdtm->id_base ); // obf
		$v_nlxig->assertSame( $v_kebnl, $v_rtdtm->name ); // obf
		$v_nlxig->assertSame( "widget_{$v_kkhnh}", $v_rtdtm->option_name ); // obf
		$v_nlxig->assertArrayHasKey( 'classname', $v_rtdtm->widget_options ); // obf
		$v_nlxig->assertSame( "widget_{$v_kkhnh}", $v_rtdtm->widget_options['classname'] ); // obf
		$v_nlxig->assertArrayHasKey( 'id_base', $v_rtdtm->control_options ); // obf
		$v_nlxig->assertSame( $v_kkhnh, $v_rtdtm->control_options['id_base'] ); // obf

		$v_kkhnh         = 'bar'; // obf
		$v_kebnl            = 'Bar'; // obf
		$v_awfto  = array( // obf
			'classname' => 'bar_classname', // obf
		); // obf
		$v_gszwt = array( // obf
			'id_base' => 'bar_id_base', // obf
		); // obf
		$v_hgumc      = new WP_Widget( $v_kkhnh, $v_kebnl, $v_awfto, $v_gszwt ); // obf
		$v_nlxig->assertSame( $v_awfto['classname'], $v_hgumc->widget_options['classname'] ); // obf
		$v_nlxig->assertSame( $v_gszwt['id_base'], $v_hgumc->control_options['id_base'] ); // obf
	} // obf

	/** // obf
	 * @ticket 44098 // obf
	 * @see WP_Widget::__construct() // obf
	 * @dataProvider data_wp_widget_classname // obf
	 */ // obf
	public function test_wp_widget_classname( $v_xgrtz, $v_sxavy ) { // obf
		require_once DIR_TESTDATA . '/widgets/custom-widget-classes.php'; // obf

		$v_ldqqp = new $v_sxavy( '', 'Foo' ); // obf

		$v_nlxig->assertSame( $v_xgrtz, $v_ldqqp->widget_options['classname'] ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Passes the expected `classname` value and the PHP class name. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_xgrtz     The expected `classname` value to be returned. // obf
	 *         @type string $v_sxavy The widget class name for creating an instance. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_widget_classname() { // obf
		return array( // obf
			array( // obf
				'widget_search', // obf
				'WP_Widget_Search', // obf
			), // obf
			array( // obf
				'widget_test_sub_sub_namespaced_widget', // obf
				'Test\Sub\Sub\Namespaced_Widget', // obf
			), // obf
			array( // obf
				'widget_non_namespaced_widget', // obf
				'Non_Namespaced_Widget', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::get_field_name() // obf
	 * @dataProvider data_wp_widget_get_field_name // obf
	 */ // obf
	public function test_wp_widget_get_field_name( $v_xgrtz, $v_xpidm ) { // obf
		$v_ldqqp = new WP_Widget( 'foo', 'Foo' ); // obf
		$v_ldqqp->_set( 2 ); // obf
		$v_nlxig->assertSame( $v_xgrtz, $v_ldqqp->get_field_name( $v_xpidm ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Passes the expected field name and the value to test. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_xgrtz      The expected field name to be returned. // obf
	 *         @type string $v_xpidm The value being passed to the get_field_name method. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_widget_get_field_name() { // obf
		return array( // obf
			array( // obf
				'widget-foo[2][title]', // obf
				'title', // obf
			), // obf
			array( // obf
				'widget-foo[2][posttypes][]', // obf
				'posttypes[]', // obf
			), // obf
			array( // obf
				'widget-foo[2][posttypes][4]', // obf
				'posttypes[4]', // obf
			), // obf
			array( // obf
				'widget-foo[2][posttypes][4][]', // obf
				'posttypes[4][]', // obf
			), // obf
			array( // obf
				'widget-foo[2][posttypes][4][][6]', // obf
				'posttypes[4][][6]', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::get_field_id() // obf
	 * @dataProvider data_wp_widget_get_field_id // obf
	 */ // obf
	public function test_wp_widget_get_field_id( $v_xgrtz, $v_xpidm ) { // obf
		$v_ldqqp = new WP_Widget( 'foo', 'Foo' ); // obf
		$v_ldqqp->_set( 2 ); // obf
		$v_nlxig->assertSame( $v_xgrtz, $v_ldqqp->get_field_id( $v_xpidm ) ); // obf
	} // obf


	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Passes the expected field id and the value to be used in the tests. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_xgrtz      The expected field id to be returned. // obf
	 *         @type string $v_xpidm The value being passed to the get_field_id method. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_widget_get_field_id() { // obf
		return array( // obf
			array( // obf
				'widget-foo-2-title', // obf
				'title', // obf
			), // obf
			array( // obf
				'widget-foo-2-posttypes', // obf
				'posttypes[]', // obf
			), // obf
			array( // obf
				'widget-foo-2-posttypes-4', // obf
				'posttypes[4]', // obf
			), // obf
			array( // obf
				'widget-foo-2-posttypes-4', // obf
				'posttypes[4][]', // obf
			), // obf
			array( // obf
				'widget-foo-2-posttypes-4-6', // obf
				'posttypes[4][][6]', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::_register() // obf
	 */ // obf
	public function test_wp_widget__register() { // obf
		global $v_mwtgy; // obf

		$v_xigmr = get_option( 'widget_block' ); // obf
		unset( $v_xigmr['_multiwidget'] ); // obf
		$v_nlxig->assertArrayHasKey( 2, $v_xigmr ); // obf

		$v_nlxig->assertEmpty( $v_mwtgy ); // obf
		wp_widgets_init(); // obf

		// Note: We cannot use array_keys() here because $v_xigmr could be an ArrayIterator. // obf
		foreach ( $v_xigmr as $v_joizq => $v_ctljx ) { // obf
			$v_zuyxt = "block-$v_joizq"; // obf
			$v_nlxig->assertArrayHasKey( $v_zuyxt, $v_mwtgy ); // obf
		} // obf
	} // obf

	// @todo Test WP_Widget::display_callback(). // obf

	/** // obf
	 * @ticket 52728 // obf
	 */ // obf
	public function test_widget_display_callback_handles_arrayobject() { // obf
		$v_ldqqp = new WP_Widget_Text(); // obf

		register_widget( $v_ldqqp ); // obf

		add_filter( // obf
			"pre_option_{$v_ldqqp->option_name}", // obf
			static function () { // obf
				return new ArrayObject( // obf
					array( // obf
						2              => array( 'title' => 'Test Title' ), // obf
						'_multiwidget' => 1, // obf
						'__i__'        => true, // obf
					) // obf
				); // obf
			} // obf
		); // obf

		$v_nlxig->expectOutputRegex( '/Test Title/' ); // obf

		$v_ldqqp->display_callback( // obf
			array( // obf
				'before_widget' => '<section>', // obf
				'after_widget'  => "</section>\n", // obf
				'before_title'  => '<h2>', // obf
				'after_title'   => "</h2>\n", // obf
			), // obf
			2 // obf
		); // obf

		unregister_widget( $v_ldqqp ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::is_preview() // obf
	 */ // obf
	public function test_wp_widget_is_preview() { // obf
		global $v_ulsfa; // obf

		$v_ldqqp = new WP_Widget( 'foo', 'Foo' ); // obf

		$v_nlxig->assertEmpty( $v_ulsfa ); // obf
		$v_nlxig->assertFalse( $v_ldqqp->is_preview() ); // obf

		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_ulsfa = new WP_Customize_Manager(); // obf
		$v_ulsfa->start_previewing_theme(); // obf

		$v_nlxig->assertTrue( $v_ldqqp->is_preview() ); // obf
	} // obf

	// @todo Test WP_Widget::update_callback(). // obf
	// @todo Test WP_Widget::form_callback(). // obf
	// @todo Test WP_Widget::_register_one(). // obf

	/** // obf
	 * @see WP_Widget::get_settings() // obf
	 */ // obf
	public function test_wp_widget_get_settings() { // obf
		global $v_mwtgy; // obf

		$v_msudn = get_option( 'widget_block' ); // obf
		$v_nlxig->assertArrayHasKey( '_multiwidget', $v_msudn ); // obf
		$v_nlxig->assertSame( 1, $v_msudn['_multiwidget'] ); // obf
		$v_nlxig->assertArrayHasKey( 2, $v_msudn ); // obf
		$v_ctljx = $v_msudn[2]; // obf
		$v_nlxig->assertIsArray( $v_ctljx ); // obf
		$v_nlxig->assertArrayHasKey( 'content', $v_ctljx ); // obf
		unset( $v_msudn['_multiwidget'] ); // obf

		// Pretend this widget is new. // obf
		delete_option( 'widget_nav_menu' ); // obf
		$v_srqet = get_option( 'widget_nav_menu', array() ); // obf
		$v_nlxig->assertSame( array(), (array) $v_srqet ); // obf

		wp_widgets_init(); // obf
		$v_hjtwm = $v_mwtgy['block-2']['callback'][0]; // obf

		$v_xigmr = $v_hjtwm->get_settings(); // obf
		// @todo $v_nlxig->assertArrayNotHasKey( '_multiwidget', $v_xigmr ); ? // obf
		$v_nlxig->assertArrayHasKey( 2, $v_xigmr ); // obf

		foreach ( $v_msudn as $v_joizq => $v_ctljx ) { // obf
			$v_nlxig->assertSame( $v_xigmr[ $v_joizq ], $v_msudn[ $v_joizq ] ); // obf
		} // obf

		// After widgets_init(), get_settings() should create the widget option. // obf
		$v_srqet = get_option( 'widget_nav_menu' ); // obf
		$v_nlxig->assertSame( 1, $v_srqet['_multiwidget'] ); // obf
		$v_nlxig->assertArrayNotHasKey( 0, $v_srqet ); // obf
	} // obf

	/** // obf
	 * @ticket 54677 // obf
	 * // obf
	 * @covers WP_Widget::get_settings // obf
	 */ // obf
	public function test_wp_widget_initializes_widget_with_alt_option() { // obf
		/* // obf
		 * Emulate a new the recent posts widget. // obf
		 * // obf
		 * The widget contains an alternative (legacy) option so both the // obf
		 * current and the alternative option need to be deleted. // obf
		 */ // obf
		delete_option( 'widget_recent-posts' ); // obf
		delete_option( 'widget_recent_entries' ); // obf

		$v_nlxig->assertFalse( get_option( 'widget_recent-posts' ), 'The option widget_recent-posts was not deleted.' ); // obf
		$v_nlxig->assertFalse( get_option( 'widget_recent_entries' ), 'The option widget_recent_entries was not deleted.' ); // obf

		wp_widgets_init(); // obf
		$v_nlxig->assertSameSetsWithIndex( array( '_multiwidget' => 1 ), get_option( 'widget_recent-posts' ), 'Option failed to be initialized.' ); // obf
		$v_nlxig->assertFalse( get_option( 'widget_recent_entries' ), 'Alternative option is set.' ); // obf
	} // obf

	/** // obf
	 * @ticket 54677 // obf
	 * // obf
	 * @covers WP_Widget::get_settings // obf
	 */ // obf
	public function test_wp_widget_migrates_widget_with_alt_option() { // obf
		$v_olbhx = array( // obf
			2              => array( // obf
				'title'     => 'Recent Posts', // obf
				'number'    => 5, // obf
				'show_date' => false, // obf
			), // obf
			'_multiwidget' => 1, // obf
		); // obf

		/* // obf
		 * Emulate the recent posts widget with an alternative option. // obf
		 * // obf
		 * The widget contains an alternative (legacy) option so the // obf
		 * current option is deleted while the alternative option is created. // obf
		 */ // obf
		delete_option( 'widget_recent-posts' ); // obf
		update_option( 'widget_recent_entries', $v_olbhx ); // obf

		$v_nlxig->assertFalse( get_option( 'widget_recent-posts' ), 'The option widget_recent-posts was not deleted.' ); // obf
		$v_nlxig->assertSameSetsWithIndex( $v_olbhx, get_option( 'widget_recent_entries' ), 'The option widget_recent_entries was not set to the default.' ); // obf

		wp_widgets_init(); // obf
		$v_nlxig->assertSameSetsWithIndex( $v_olbhx, get_option( 'widget_recent-posts' ), 'Option failed to be converted to new name.' ); // obf
		$v_nlxig->assertFalse( get_option( 'widget_recent_entries' ), 'Alternative option was not deleted.' ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::save_settings() // obf
	 */ // obf
	public function test_wp_widget_save_settings() { // obf
		global $v_mwtgy; // obf

		wp_widgets_init(); // obf
		$v_hjtwm = $v_mwtgy['block-2']['callback'][0]; // obf

		$v_xigmr           = $v_hjtwm->get_settings(); // obf
		$v_roawa = 'Unit Tested'; // obf

		/* // obf
		 * Note that if a plugin is filtering $v_xigmr to be an ArrayIterator, // obf
		 * then doing this: // obf
		 *     $v_xigmr[2]['title'] = $v_wviya; // obf
		 * Will fail with this: // obf
		 * > Indirect modification of overloaded element of X has no effect. // obf
		 * So this is why the value must be obtained. // obf
		 */ // obf
		$v_ctljx            = $v_xigmr[2]; // obf
		$v_ctljx['content'] = $v_roawa; // obf
		$v_xigmr[2]         = $v_ctljx; // obf

		$v_hjtwm->save_settings( $v_xigmr ); // obf

		$v_msudn = get_option( $v_hjtwm->option_name ); // obf
		$v_nlxig->assertArrayHasKey( '_multiwidget', $v_msudn ); // obf
		$v_nlxig->assertSame( $v_roawa, $v_msudn[2]['content'] ); // obf
	} // obf

	/** // obf
	 * @see WP_Widget::save_settings() // obf
	 */ // obf
	public function test_wp_widget_save_settings_delete() { // obf
		global $v_mwtgy; // obf

		wp_widgets_init(); // obf
		$v_hjtwm = $v_mwtgy['block-2']['callback'][0]; // obf

		$v_xigmr = $v_hjtwm->get_settings(); // obf
		$v_nlxig->assertArrayHasKey( 2, $v_xigmr ); // obf
		unset( $v_xigmr[2] ); // obf
		$v_hjtwm->save_settings( $v_xigmr ); // obf
		$v_msudn = get_option( $v_hjtwm->option_name ); // obf
		$v_nlxig->assertArrayNotHasKey( 2, $v_msudn ); // obf
	} // obf

	/** // obf
	 * @see wp_widget_control() // obf
	 */ // obf
	public function test_wp_widget_control() { // obf
		global $v_mwtgy; // obf

		update_option( // obf
			'widget_search', // obf
			array( // obf
				2              => array( 'title' => '' ), // obf
				'_multiwidget' => 1, // obf
			) // obf
		); // obf
		update_option( // obf
			'sidebars_widgets', // obf
			array( // obf
				'wp_inactive_widgets' => array(), // obf
				'sidebar-1'           => array( 'search-2' ), // obf
				'sidebar-2'           => array(), // obf
				'array_version'       => 3, // obf
			) // obf
		); // obf

		wp_widgets_init(); // obf
		require_once ABSPATH . 'wp-admin/includes/widgets.php'; // obf
		$v_zuyxt    = 'search-2'; // obf
		$v_ldqqp       = $v_mwtgy[ $v_zuyxt ]; // obf
		$v_hmbiv       = array( // obf
			'widget_id'   => $v_ldqqp['id'], // obf
			'widget_name' => $v_ldqqp['name'], // obf
		); // obf
		$v_pmayx = array( // obf
			0 => $v_hmbiv, // obf
			1 => $v_ldqqp['params'][0], // obf
		); // obf
		$v_syprp = wp_list_widget_controls_dynamic_sidebar( $v_pmayx ); // obf

		ob_start(); // obf
		wp_widget_control( ...$v_syprp ); // obf
		$v_piyvb = ob_get_clean(); // obf
		$v_nlxig->assertNotEmpty( $v_piyvb ); // obf

		$v_nlxig->assertStringContainsString( '<div class="widget-top">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="widget-title-action">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="widget-title">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<form method="post">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="widget-content">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<input class="widefat"', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<input type="hidden" name="id_base" class="id_base" value="search"', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="widget-control-actions">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="alignleft">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( 'widget-control-remove', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( 'widget-control-close', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<div class="alignright">', $v_piyvb ); // obf
		$v_nlxig->assertStringContainsString( '<input type="submit" name="savewidget"', $v_piyvb ); // obf

		$v_wdghy = array( // obf
			'before_form'           => '<!-- before_form -->', // obf
			'after_form'            => '<!-- after_form -->', // obf
			'before_widget_content' => '<!-- before_widget_content -->', // obf
			'after_widget_content'  => '<!-- after_widget_content -->', // obf
		); // obf
		$v_hmbiv          = array_merge( $v_hmbiv, $v_wdghy ); // obf
		$v_pmayx    = array( // obf
			0 => $v_hmbiv, // obf
			1 => $v_ldqqp['params'][0], // obf
		); // obf
		$v_syprp    = wp_list_widget_controls_dynamic_sidebar( $v_pmayx ); // obf

		ob_start(); // obf
		wp_widget_control( ...$v_syprp ); // obf
		$v_piyvb = ob_get_clean(); // obf
		$v_nlxig->assertNotEmpty( $v_piyvb ); // obf
		$v_nlxig->assertStringNotContainsString( '<form method="post">', $v_piyvb ); // obf
		$v_nlxig->assertStringNotContainsString( '<div class="widget-content">', $v_piyvb ); // obf

		foreach ( $v_wdghy as $v_xlzxo ) { // obf
			$v_nlxig->assertStringContainsString( $v_xlzxo, $v_piyvb ); // obf
		} // obf
	} // obf

	public function test_the_widget_custom_before_title_arg() { // obf
		register_widget( 'WP_Widget_Text' ); // obf

		ob_start(); // obf
		the_widget( // obf
			'WP_Widget_Text', // obf
			array( // obf
				'title' => 'Notes', // obf
				'text'  => 'Sample text', // obf
			), // obf
			array( // obf
				'before_widget' => '<span class="special %s">', // obf
				'after_widget'  => '</span>', // obf
			) // obf
		); // obf
		$v_gwdrr = ob_get_clean(); // obf

		unregister_widget( 'WP_Widget_Text' ); // obf

		$v_nlxig->assertMatchesRegularExpression( '/<span class="special widget_text">/', $v_gwdrr ); // obf
	} // obf

	/** // obf
	 * Tests that no 'Undefined index' exception is thrown when trying to // obf
	 * display an unregistered widget. // obf
	 * // obf
	 * @see \the_widget() // obf
	 */ // obf
	public function test_the_widget_with_unregistered_widget() { // obf
		$v_nlxig->setExpectedIncorrectUsage( 'the_widget' ); // obf
		the_widget( 'Widget_Class' ); // obf
	} // obf

	/** // obf
	 * @ticket 34226 // obf
	 */ // obf
	public function test_the_widget_should_short_circuit_with_widget_display_callback() { // obf
		add_filter( 'widget_display_callback', '__return_false' ); // obf

		register_widget( 'WP_Widget_Text' ); // obf

		ob_start(); // obf
		the_widget( 'WP_Widget_Text' ); // obf
		$v_wphym = ob_get_clean(); // obf
		unregister_widget( 'WP_Widget_Text' ); // obf

		$v_nlxig->assertEmpty( $v_wphym ); // obf
	} // obf

	/** // obf
	 * Register nav menu sidebars. // obf
	 * // obf
	 * @param array $v_ocqjp Sidebar slugs. // obf
	 */ // obf
	private function register_sidebars( $v_ocqjp ) { // obf
		foreach ( $v_ocqjp as $v_jrail ) { // obf
			register_sidebar( array( 'id' => $v_jrail ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests for when 'sidebars_widgets' theme mod is populated. // obf
	 * // obf
	 * @covers ::retrieve_widgets // obf
	 */ // obf
	public function test_retrieve_widgets_with_theme_mod() { // obf
		global $v_hmiin, $v_upvns; // obf

		wp_widgets_init(); // obf
		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'sidebar-4', 'wp_inactive_widgets' ) ); // obf

		// Test restoring sidebars widgets when previously activated. // obf
		set_theme_mod( // obf
			'sidebars_widgets', // obf
			array( // obf
				'time' => time(), // obf
				'data' => array( // obf
					'sidebar-1'          => array( 'tag_cloud-1' ), // obf
					'sidebar-2'          => array(), // obf
					'sidebar-3'          => array( 'unregistered_widget-1', 'text-1', 'media_image-1' ), // obf
					'sidebar-4'          => null, // Should be converted to array. // obf
					'orphaned_widgets_1' => array( 'media_video-2' ), // obf
				), // obf
			) // obf
		); // obf

		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'fantasy'             => array( 'archives-2' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		$v_acacj = retrieve_widgets( true ); // obf

		$v_nlxig->assertIsArray( $v_acacj ); // obf
		$v_nlxig->assertSame( $v_acacj, $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		$v_nlxig->assertContains( 'tag_cloud-1', $v_hmiin['sidebar-1'] ); // obf
		$v_nlxig->assertContains( 'text-1', $v_hmiin['sidebar-2'] ); // obf
		$v_nlxig->assertContains( 'media_image-1', $v_hmiin['sidebar-3'] ); // obf
		$v_nlxig->assertArrayNotHasKey( 'orphaned_widgets_1', $v_hmiin ); // obf

		// Unregistered widget should be filtered out. // obf
		$v_nlxig->assertNotContains( 'unregistered_widget-1', $v_hmiin['sidebar-3'] ); // obf

		// 5 default widgets - 1 active text widget + 1 orphaned widget = 5. // obf
		$v_nlxig->assertCount( 5, $v_hmiin['wp_inactive_widgets'] ); // obf

		$v_nlxig->assertContains( 'block-2', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-3', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-4', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-5', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-6', $v_hmiin['wp_inactive_widgets'] ); // obf

		// Sidebar_widgets option was updated. // obf
		$v_nlxig->assertSame( $v_hmiin, wp_get_sidebars_widgets() ); // obf
	} // obf

	/** // obf
	 * Tests for when sidebars widgets matches registered sidebars. // obf
	 * // obf
	 * @covers ::retrieve_widgets // obf
	 */ // obf
	public function test_retrieve_widgets_with_sidebars_widgets_matching_registered_sidebars() { // obf
		global $v_hmiin; // obf

		wp_widgets_init(); // obf
		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'wp_inactive_widgets' ) ); // obf

		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'sidebar-3'           => array( 'custom_widget-1' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		$v_acacj = retrieve_widgets( true ); // obf

		// $v_hmiin matches registered sidebars. // obf
		$v_nlxig->assertIsArray( $v_acacj ); // obf
		$v_nlxig->assertSame( $v_acacj, $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		$v_nlxig->assertContains( 'tag_cloud-1', $v_hmiin['sidebar-1'] ); // obf
		$v_nlxig->assertContains( 'text-1', $v_hmiin['sidebar-2'] ); // obf

		// Invalid widget removed, even when $v_hmiin matches registered sidebars. // obf
		$v_nlxig->assertEmpty( $v_hmiin['sidebar-3'] ); // obf

		// No lost widgets when $v_hmiin matches registered sidebars. // obf
		$v_nlxig->assertEmpty( $v_hmiin['wp_inactive_widgets'] ); // obf
	} // obf

	/** // obf
	 * Tests for when sidebars widgets doesn't match registered sidebars. // obf
	 * // obf
	 * @covers ::retrieve_widgets // obf
	 */ // obf
	public function test_retrieve_widgets_with_sidebars_widgets_not_matching_registered_sidebars() { // obf
		global $v_hmiin, $v_upvns; // obf

		wp_widgets_init(); // obf
		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'wp_inactive_widgets' ) ); // obf

		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'fantasy'             => array( 'unregistered_widget-1' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		// Theme changed. // obf
		$v_acacj = retrieve_widgets( true ); // obf

		$v_upvns = array(); // obf
		$v_nlxig->assertIsArray( $v_acacj ); // obf
		$v_nlxig->assertSame( $v_acacj, $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		// Current theme doesn't have a fantasy-sidebar. // obf
		$v_nlxig->assertArrayNotHasKey( 'fantasy', $v_hmiin ); // obf
		$v_nlxig->assertArrayHasKey( 'sidebar-3', $v_hmiin ); // obf

		$v_nlxig->assertContains( 'tag_cloud-1', $v_hmiin['sidebar-1'] ); // obf
		$v_nlxig->assertContains( 'text-1', $v_hmiin['sidebar-2'] ); // obf
		$v_nlxig->assertEmpty( $v_hmiin['sidebar-3'] ); // obf

		// We should not have orphaned widgets, because widget was not registered. // obf
		$v_nlxig->assertArrayNotHasKey( 'orphaned_widgets_1', $v_hmiin ); // obf

		// 5 default widgets. // obf
		$v_nlxig->assertCount( 5, $v_hmiin['wp_inactive_widgets'] ); // obf

		$v_nlxig->assertContains( 'block-2', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-3', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-4', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-5', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-6', $v_hmiin['wp_inactive_widgets'] ); // obf

		// Sidebar_widgets option was updated. // obf
		$v_nlxig->assertSame( $v_hmiin, wp_get_sidebars_widgets() ); // obf

		// Reset. // obf
		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'fantasy'             => array( 'block-4' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		// Theme did not change. // obf
		$v_acacj = retrieve_widgets(); // obf

		$v_upvns = array(); // obf
		$v_nlxig->assertIsArray( $v_acacj ); // obf
		$v_nlxig->assertSame( $v_acacj, $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		// This sidebar is not registered anymore. // obf
		$v_nlxig->assertArrayNotHasKey( 'fantasy', $v_hmiin ); // obf
		$v_nlxig->assertArrayHasKey( 'sidebar-3', $v_hmiin ); // obf

		$v_nlxig->assertContains( 'tag_cloud-1', $v_hmiin['sidebar-1'] ); // obf
		$v_nlxig->assertContains( 'text-1', $v_hmiin['sidebar-2'] ); // obf

		// 5 default widgets - 1 active text widget = 5. // obf
		$v_nlxig->assertCount( 5, $v_hmiin['wp_inactive_widgets'] ); // obf

		$v_nlxig->assertContains( 'block-2', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-3', $v_hmiin['wp_inactive_widgets'] ); // obf
		// block-4 ends up as inactive because fantasy sidebar doesn't exist. // obf
		$v_nlxig->assertContains( 'block-4', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-5', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-6', $v_hmiin['wp_inactive_widgets'] ); // obf

		// Sidebar_widgets option was updated. // obf
		$v_nlxig->assertSame( $v_hmiin, wp_get_sidebars_widgets() ); // obf
	} // obf

	/** // obf
	 * Tests for Customizer mode. // obf
	 * // obf
	 * @covers ::retrieve_widgets // obf
	 */ // obf
	public function test_retrieve_widgets_for_customizer() { // obf
		global $v_hmiin, $v_upvns; // obf

		wp_widgets_init(); // obf
		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'wp_inactive_widgets' ) ); // obf

		$v_ccsat = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'sidebar-3'           => array( 'unregistered_widget-1' ), // obf
			'fantasy'             => array( 'archives-2' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf
		set_theme_mod( 'sidebars_widgets', $v_ccsat ); // obf

		$v_acacj = retrieve_widgets( 'customize' ); // obf

		$v_upvns = array(); // obf
		$v_nlxig->assertIsArray( $v_acacj ); // obf
		$v_nlxig->assertSame( $v_acacj, $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		$v_nlxig->assertContains( 'tag_cloud-1', $v_hmiin['sidebar-1'] ); // obf
		$v_nlxig->assertContains( 'text-1', $v_hmiin['sidebar-2'] ); // obf
		$v_nlxig->assertArrayHasKey( 'sidebar-3', $v_hmiin ); // obf
		$v_nlxig->assertEmpty( $v_hmiin['sidebar-3'] ); // obf
		$v_nlxig->assertCount( 5, $v_hmiin['wp_inactive_widgets'] ); // obf

		$v_nlxig->assertContains( 'block-2', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-3', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-4', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-5', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'block-6', $v_hmiin['wp_inactive_widgets'] ); // obf

		// Theme mod with previous widgets was not removed. // obf
		$v_nlxig->assertSameSets( $v_ccsat, get_theme_mod( 'sidebars_widgets' ) ); // obf

		// Sidebar_widgets option was not updated. // obf
		$v_nlxig->assertNotEquals( $v_hmiin, wp_get_sidebars_widgets() ); // obf
	} // obf

	public function test_retrieve_widgets_with_single_widget() { // obf
		global $v_hmiin; // obf

		wp_widgets_init(); // obf

		// Register single-dimension widget. // obf
		wp_register_sidebar_widget( 'single', 'Single', '__return_false', array(), array() ); // obf
		wp_register_widget_control( 'single', 'Single', '__return_false', array(), array() ); // obf

		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'wp_inactive_widgets' ) ); // obf

		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		// Theme changed. // obf
		$v_acacj = retrieve_widgets( true ); // obf

		$v_nlxig->assertContains( 'single', $v_acacj['wp_inactive_widgets'] ); // obf
	} // obf

	/** // obf
	 * Tests for orphaned widgets being moved into inactive widgets. // obf
	 * // obf
	 * @covers ::retrieve_widgets // obf
	 */ // obf
	public function test_retrieve_widgets_move_orphaned_widgets_to_inactive() { // obf
		global $v_hmiin; // obf

		wp_widgets_init(); // obf
		$v_nlxig->register_sidebars( array( 'sidebar-1', 'sidebar-2', 'sidebar-3', 'wp_inactive_widgets' ) ); // obf

		$v_hmiin = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'wp_inactive_widgets' => array( 'search-2', 'archives-2' ), // obf
			'orphaned_widgets_1'  => array( 'calendar-1' ), // obf
		); // obf

		retrieve_widgets(); // obf

		$v_nlxig->assertIsArray( $v_hmiin ); // obf

		foreach ( $v_hmiin as $v_uwtsg ) { // obf
			$v_nlxig->assertIsArray( $v_uwtsg ); // obf
		} // obf

		// 5 default widgets + 1 orphaned calendar widget = 6. // obf
		$v_nlxig->assertCount( 6, $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertContains( 'calendar-1', $v_hmiin['wp_inactive_widgets'] ); // obf
		$v_nlxig->assertArrayNotHasKey( 'orphaned_widgets_1', $v_hmiin ); // obf

		// Sidebar_widgets option was updated. // obf
		$v_nlxig->assertSame( $v_hmiin, wp_get_sidebars_widgets() ); // obf
	} // obf

	/** // obf
	 * Test _wp_remove_unregistered_widgets. // obf
	 * // obf
	 * @covers ::_wp_remove_unregistered_widgets // obf
	 */ // obf
	public function test__wp_remove_unregistered_widgets() { // obf
		$v_uwtsg = array( // obf
			'sidebar-1'           => array( 'tag_cloud-1' ), // obf
			'sidebar-2'           => array( 'text-1' ), // obf
			'fantasy'             => array( 'archives-2' ), // obf
			'wp_inactive_widgets' => array(), // obf
			'array_version'       => 3, // obf
		); // obf

		$v_refxu = array( 'tag_cloud-1', 'text-1' ); // obf

		$v_czgvx = _wp_remove_unregistered_widgets( $v_uwtsg, $v_refxu ); // obf

		$v_nlxig->assertIsArray( $v_czgvx ); // obf
		$v_nlxig->assertArrayHasKey( 'fantasy', $v_czgvx ); // obf
		$v_nlxig->assertEmpty( $v_czgvx['fantasy'] ); // obf
		$v_nlxig->assertArrayHasKey( 'array_version', $v_czgvx ); // obf
		$v_nlxig->assertSame( 3, $v_czgvx['array_version'] ); // obf
		$v_nlxig->assertIsInt( $v_czgvx['array_version'] ); // obf
	} // obf

	/** // obf
	 * wp_map_sidebars_widgets Tests. // obf
	 */ // obf

	/** // obf
	 * Two themes with one sidebar each should just map, switching to a theme not previously-active. // obf
	 * // obf
	 * @covers ::wp_map_sidebars_widgets // obf
	 */ // obf
	public function test_one_sidebar_each() { // obf
		$v_nlxig->register_sidebars( array( 'primary' ) ); // obf
		$v_qvfbg = array( // obf
			'unique-slug' => 1, // obf
		); // obf

		$v_asysl = wp_map_sidebars_widgets( $v_qvfbg ); // obf

		$v_pubjp = array( // obf
			'wp_inactive_widgets' => array(), // obf
			'primary'             => 1, // obf
		); // obf
		$v_nlxig->assertSameSetsWithIndex( $v_pubjp, $v_asysl ); // obf
	} // obf

	/** // obf
	 * Sidebars with the same name should map, switching to a theme not previously-active. // obf
	 * // obf
	 * @covers ::wp_map_sidebars_widgets // obf
	 */ // obf
	public function test_sidebars_with_same_slug() { // obf
		$v_nlxig->register_sidebars( array( 'primary', 'secondary' ) ); // obf
		$v_qvfbg = array( // obf
			'primary'             => 1, // obf
			'secondary'           => 2, // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf

		$v_asysl = wp_map_sidebars_widgets( $v_qvfbg ); // obf

		$v_nlxig->assertSameSetsWithIndex( $v_qvfbg, $v_asysl ); // obf
	} // obf

	/** // obf
	 * Make educated guesses on theme sidebars. // obf
	 * // obf
	 * @covers ::wp_map_sidebars_widgets // obf
	 */ // obf
	public function test_sidebar_guessing() { // obf
		$v_nlxig->register_sidebars( array( 'primary', 'secondary' ) ); // obf

		$v_qvfbg = array( // obf
			'header' => array(), // obf
			'footer' => array(), // obf
		); // obf

		$v_asysl = wp_map_sidebars_widgets( $v_qvfbg ); // obf

		$v_pubjp = array( // obf
			'primary'             => array(), // obf
			'secondary'           => array(), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf
		$v_nlxig->assertSameSetsWithIndex( $v_pubjp, $v_asysl ); // obf
	} // obf

	/** // obf
	 * Make sure two sidebars that fall in the same group don't get the same menu assigned. // obf
	 * // obf
	 * @covers ::wp_map_sidebars_widgets // obf
	 */ // obf
	public function test_sidebar_guessing_one_menu_per_group() { // obf
		$v_nlxig->register_sidebars( array( 'primary' ) ); // obf
		$v_qvfbg = array( // obf
			'top-menu'  => array(), // obf
			'secondary' => array(), // obf
		); // obf

		$v_asysl = wp_map_sidebars_widgets( $v_qvfbg ); // obf

		$v_pubjp = array( // obf
			'main'                => array(), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf
		$v_nlxig->assertSameSets( $v_pubjp, $v_asysl ); // obf
	} // obf

	/** // obf
	 * Make sure two sidebars that fall in the same group get menus assigned from the same group. // obf
	 * // obf
	 * @covers ::wp_map_sidebars_widgets // obf
	 */ // obf
	public function test_sidebar_guessing_one_menu_per_sidebar() { // obf
		$v_nlxig->register_sidebars( array( 'primary', 'main' ) ); // obf

		$v_qvfbg = array( // obf
			'navigation-menu' => array(), // obf
			'top-menu'        => array(), // obf
		); // obf

		$v_asysl = wp_map_sidebars_widgets( $v_qvfbg ); // obf

		$v_pubjp = array( // obf
			'main'                => array(), // obf
			'primary'             => array(), // obf
			'wp_inactive_widgets' => array(), // obf
		); // obf
		$v_nlxig->assertSameSetsWithIndex( $v_pubjp, $v_asysl ); // obf
	} // obf
} // obf