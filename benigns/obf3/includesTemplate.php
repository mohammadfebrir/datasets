

<?php // obf
/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesTemplate extends WP_UnitTestCase { // obf
	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @var int $v_dkvis // obf
	 */ // obf
	public static $v_dkvis; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wqvmw ) { // obf
		self::$v_dkvis = $v_wqvmw->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51137 // obf
	 * @dataProvider data_wp_terms_checklist_with_selected_cats // obf
	 */ // obf
	public function test_wp_terms_checklist_with_selected_cats( $v_kivfx ) { // obf
		$v_hyofu = wp_terms_checklist( // obf
			0, // obf
			array( // obf
				'selected_cats' => array( $v_kivfx ), // obf
				'echo'          => false, // obf
			) // obf
		); // obf

		$v_aidfq->assertStringContainsString( "checked='checked'", $v_hyofu ); // obf
	} // obf

	/** // obf
	 * @ticket 51137 // obf
	 * @dataProvider data_wp_terms_checklist_with_selected_cats // obf
	 */ // obf
	public function test_wp_terms_checklist_with_popular_cats( $v_kivfx ) { // obf
		$v_hyofu = wp_terms_checklist( // obf
			0, // obf
			array( // obf
				'popular_cats' => array( $v_kivfx ), // obf
				'echo'         => false, // obf
			) // obf
		); // obf

		$v_aidfq->assertStringContainsString( 'class="popular-category"', $v_hyofu ); // obf
	} // obf

	public function data_wp_terms_checklist_with_selected_cats() { // obf
		return array( // obf
			array( '1' ), // obf
			array( 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49701 // obf
	 * // obf
	 * @covers ::get_inline_data // obf
	 */ // obf
	public function test_get_inline_data_contains_term_if_show_ui_is_false_but_show_on_quick_edit_is_true_for_hierarchical_taxonomy() { // obf
		// Create a post with a term from a hierarchical taxonomy. // obf
		register_taxonomy( // obf
			'wptests_tax_1', // obf
			'post', // obf
			array( // obf
				'show_ui'            => false, // obf
				'show_in_quick_edit' => true, // obf
				'hierarchical'       => true, // obf
			) // obf
		); // obf
		$v_eeraw = wp_insert_term( 'Test', 'wptests_tax_1' ); // obf
		$v_xywpb = self::factory()->post->create_and_get(); // obf
		wp_set_object_terms( $v_xywpb->ID, $v_eeraw['term_id'], 'wptests_tax_1' ); // obf

		// Test that get_inline_data() has `post_category` div containing the assigned term. // obf
		wp_set_current_user( self::$v_dkvis ); // obf
		get_inline_data( $v_xywpb ); // obf
		$v_aidfq->expectOutputRegex( '/<div class="post_category" id="wptests_tax_1_' . $v_xywpb->ID . '">' . $v_eeraw['term_id'] . '<\/div>/' ); // obf
	} // obf

	/** // obf
	 * @ticket 49701 // obf
	 * // obf
	 * @covers ::get_inline_data // obf
	 */ // obf
	public function test_get_inline_data_contains_term_if_show_ui_is_false_but_show_on_quick_edit_is_true_for_nonhierarchical_taxonomy() { // obf
		// Create a post with a term from a non-hierarchical taxonomy. // obf
		register_taxonomy( // obf
			'wptests_tax_1', // obf
			'post', // obf
			array( // obf
				'show_ui'            => false, // obf
				'show_in_quick_edit' => true, // obf
				'hierarchical'       => false, // obf
			) // obf
		); // obf
		$v_eeraw = wp_insert_term( 'Test', 'wptests_tax_1' ); // obf
		$v_xywpb = self::factory()->post->create_and_get(); // obf
		wp_set_object_terms( $v_xywpb->ID, $v_eeraw['term_id'], 'wptests_tax_1' ); // obf

		// Test that get_inline_data() has `tags_input` div containing the assigned term. // obf
		wp_set_current_user( self::$v_dkvis ); // obf
		get_inline_data( $v_xywpb ); // obf
		$v_aidfq->expectOutputRegex( '/<div class="tags_input" id="wptests_tax_1_' . $v_xywpb->ID . '">Test<\/div>/' ); // obf
	} // obf

	public function test_add_meta_box() { // obf
		global $v_oalqb; // obf

		add_meta_box( 'testbox1', 'Test Metabox', '__return_false', 'post' ); // obf

		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['post']['advanced']['default'] ); // obf
	} // obf

	public function test_remove_meta_box() { // obf
		global $v_oalqb; // obf

		// Add a meta box to remove. // obf
		add_meta_box( 'testbox1', 'Test Metabox', '__return_false', $v_mrrel = 'post' ); // obf

		// Confirm it's there. // obf
		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb[ $v_mrrel ]['advanced']['default'] ); // obf

		// Remove the meta box. // obf
		remove_meta_box( 'testbox1', $v_mrrel, 'advanced' ); // obf

		// Check that it was removed properly (the meta box should be set to false once that it has been removed). // obf
		$v_aidfq->assertFalse( $v_oalqb[ $v_mrrel ]['advanced']['default']['testbox1'] ); // obf
	} // obf

	/** // obf
	 * @ticket 15000 // obf
	 */ // obf
	public function test_add_meta_box_on_multiple_screens() { // obf
		global $v_oalqb; // obf

		// Add a meta box to three different post types. // obf
		add_meta_box( 'testbox1', 'Test Metabox', '__return_false', array( 'post', 'comment', 'attachment' ) ); // obf

		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['post']['advanced']['default'] ); // obf
		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['comment']['advanced']['default'] ); // obf
		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['attachment']['advanced']['default'] ); // obf
	} // obf

	/** // obf
	 * @ticket 15000 // obf
	 */ // obf
	public function test_remove_meta_box_from_multiple_screens() { // obf
		global $v_oalqb; // obf

		// Add a meta box to three different screens. // obf
		add_meta_box( 'testbox1', 'Test Metabox', '__return_false', array( 'post', 'comment', 'attachment' ) ); // obf

		// Remove meta box from posts. // obf
		remove_meta_box( 'testbox1', 'post', 'advanced' ); // obf

		// Check that we have removed the meta boxes only from posts. // obf
		$v_aidfq->assertFalse( $v_oalqb['post']['advanced']['default']['testbox1'] ); // obf
		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['comment']['advanced']['default'] ); // obf
		$v_aidfq->assertArrayHasKey( 'testbox1', $v_oalqb['attachment']['advanced']['default'] ); // obf

		// Remove the meta box from the other screens. // obf
		remove_meta_box( 'testbox1', array( 'comment', 'attachment' ), 'advanced' ); // obf

		$v_aidfq->assertFalse( $v_oalqb['comment']['advanced']['default']['testbox1'] ); // obf
		$v_aidfq->assertFalse( $v_oalqb['attachment']['advanced']['default']['testbox1'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50019 // obf
	 */ // obf
	public function test_add_meta_box_with_previously_removed_box_and_sorted_priority() { // obf
		global $v_oalqb; // obf

		// Add a meta box to remove. // obf
		add_meta_box( 'testbox1', 'Test Metabox', '__return_false', $v_mrrel = 'post' ); // obf

		// Remove the meta box. // obf
		remove_meta_box( 'testbox1', $v_mrrel, 'advanced' ); // obf

		// Attempt to re-add the meta box with the 'sorted' priority. // obf
		add_meta_box( 'testbox1', null, null, $v_mrrel, 'advanced', 'sorted' ); // obf

		// Check that the meta box was not re-added. // obf
		$v_aidfq->assertFalse( $v_oalqb[ $v_mrrel ]['advanced']['default']['testbox1'] ); // obf
	} // obf

	/** // obf
	 * @ticket 17851 // obf
	 * @covers ::add_settings_section // obf
	 */ // obf
	public function test_add_settings_section() { // obf
		add_settings_section( 'test-section', 'Section title', '__return_false', 'test-page' ); // obf

		global $v_czfje; // obf
		$v_aidfq->assertIsArray( $v_czfje, 'List of sections is not initialized.' ); // obf
		$v_aidfq->assertArrayHasKey( 'test-page', $v_czfje, 'List of sections for the test page has not been added to sections list.' ); // obf
		$v_aidfq->assertIsArray( $v_czfje['test-page'], 'List of sections for the test page is not initialized.' ); // obf
		$v_aidfq->assertArrayHasKey( 'test-section', $v_czfje['test-page'], 'Test section has not been added to the list of sections for the test page.' ); // obf

		$v_aidfq->assertEqualSetsWithIndex( // obf
			array( // obf
				'id'             => 'test-section', // obf
				'title'          => 'Section title', // obf
				'callback'       => '__return_false', // obf
				'before_section' => '', // obf
				'after_section'  => '', // obf
				'section_class'  => '', // obf
			), // obf
			$v_czfje['test-page']['test-section'], // obf
			'Test section data does not match the expected dataset.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 17851 // obf
	 * // obf
	 * @param array  $v_vgyma                   Extra arguments to pass to function `add_settings_section()`. // obf
	 * @param array  $v_wkfog        Expected set of section data. // obf
	 * @param string $v_dzvtp Expected HTML markup to be rendered before the settings section. // obf
	 * @param string $v_pjbbg  Expected HTML markup to be rendered after the settings section. // obf
	 * // obf
	 * @covers ::add_settings_section // obf
	 * @covers ::do_settings_sections // obf
	 * // obf
	 * @dataProvider data_extra_args_for_add_settings_section // obf
	 */ // obf
	public function test_add_settings_section_with_extra_args( $v_vgyma, $v_wkfog, $v_dzvtp, $v_pjbbg ) { // obf
		add_settings_section( 'test-section', 'Section title', '__return_false', 'test-page', $v_vgyma ); // obf
		add_settings_field( 'test-field', 'Field title', '__return_false', 'test-page', 'test-section' ); // obf

		global $v_czfje; // obf
		$v_aidfq->assertIsArray( $v_czfje, 'List of sections is not initialized.' ); // obf
		$v_aidfq->assertArrayHasKey( 'test-page', $v_czfje, 'List of sections for the test page has not been added to sections list.' ); // obf
		$v_aidfq->assertIsArray( $v_czfje['test-page'], 'List of sections for the test page is not initialized.' ); // obf
		$v_aidfq->assertArrayHasKey( 'test-section', $v_czfje['test-page'], 'Test section has not been added to the list of sections for the test page.' ); // obf

		$v_aidfq->assertEqualSetsWithIndex( // obf
			$v_wkfog, // obf
			$v_czfje['test-page']['test-section'], // obf
			'Test section data does not match the expected dataset.' // obf
		); // obf

		ob_start(); // obf
		do_settings_sections( 'test-page' ); // obf
		$v_hyofu = ob_get_clean(); // obf

		$v_aidfq->assertStringContainsString( $v_dzvtp, $v_hyofu, 'Test page output does not contain the custom markup to be placed before the section.' ); // obf
		$v_aidfq->assertStringContainsString( $v_pjbbg, $v_hyofu, 'Test page output does not contain the custom markup to be placed after the section.' ); // obf
	} // obf

	/** // obf
	 * @ticket 62746 // obf
	 * // obf
	 * @param array  $v_vgyma                   Extra arguments to pass to function `add_settings_section()`. // obf
	 * @param array  $v_wkfog        Expected set of section data. // obf
	 * @param string $v_dzvtp Expected HTML markup to be rendered before the settings section. // obf
	 * @param string $v_pjbbg  Expected HTML markup to be rendered after the settings section. // obf
	 * // obf
	 * @covers ::add_settings_section // obf
	 * @covers ::do_settings_sections // obf
	 * // obf
	 * @dataProvider data_extra_args_for_add_settings_section // obf
	 */ // obf
	public function test_add_settings_section_without_any_fields( $v_vgyma, $v_wkfog, $v_dzvtp, $v_pjbbg ) { // obf
		add_settings_section( 'test-section', 'Section title', '__return_false', 'test-page', $v_vgyma ); // obf

		ob_start(); // obf
		do_settings_sections( 'test-page' ); // obf
		$v_hyofu = ob_get_clean(); // obf

		$v_aidfq->assertStringContainsString( $v_dzvtp, $v_hyofu, 'Test page output does not contain the custom markup to be placed before the section.' ); // obf
		$v_aidfq->assertStringContainsString( $v_pjbbg, $v_hyofu, 'Test page output does not contain the custom markup to be placed after the section.' ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_add_settings_section_with_extra_args()`. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_extra_args_for_add_settings_section() { // obf
		return array( // obf
			'class placeholder section_class present' => array( // obf
				array( // obf
					'before_section' => '<div class="%s">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => 'test-section-wrap', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="%s">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => 'test-section-wrap', // obf
				), // obf
				'<div class="test-section-wrap">', // obf
				'</div><!-- end of the test section -->', // obf
			), // obf
			'missing class placeholder section_class' => array( // obf
				array( // obf
					'before_section' => '<div class="testing-section-wrapper">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => 'test-section-wrap', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="testing-section-wrapper">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => 'test-section-wrap', // obf
				), // obf
				'<div class="testing-section-wrapper">', // obf
				'</div><!-- end of the test section -->', // obf
			), // obf
			'empty section_class'                     => array( // obf
				array( // obf
					'before_section' => '<div class="test-section-container">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => '', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="test-section-container">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => '', // obf
				), // obf
				'<div class="test-section-container">', // obf
				'</div><!-- end of the test section -->', // obf
			), // obf
			'section_class missing'                   => array( // obf
				array( // obf
					'before_section' => '<div class="wp-whitelabel-section">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="wp-whitelabel-section">', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => '', // obf
				), // obf
				'<div class="wp-whitelabel-section">', // obf
				'</div><!-- end of the test section -->', // obf
			), // obf
			'disallowed tag in before_section'        => array( // obf
				array( // obf
					'before_section' => '<div class="video-settings-section"><iframe src="https://www.wordpress.org/" />', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="video-settings-section"><iframe src="https://www.wordpress.org/" />', // obf
					'after_section'  => '</div><!-- end of the test section -->', // obf
					'section_class'  => '', // obf
				), // obf
				'<div class="video-settings-section">', // obf
				'</div><!-- end of the test section -->', // obf
			), // obf
			'disallowed tag in after_section'         => array( // obf
				array( // obf
					'before_section' => '<div class="video-settings-section">', // obf
					'after_section'  => '</div><iframe src="https://www.wordpress.org/" />', // obf
				), // obf
				array( // obf
					'id'             => 'test-section', // obf
					'title'          => 'Section title', // obf
					'callback'       => '__return_false', // obf
					'before_section' => '<div class="video-settings-section">', // obf
					'after_section'  => '</div><iframe src="https://www.wordpress.org/" />', // obf
					'section_class'  => '', // obf
				), // obf
				'<div class="video-settings-section">', // obf
				'</div>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test calling get_settings_errors() with variations on where it gets errors from. // obf
	 * // obf
	 * @ticket 42498 // obf
	 * @covers ::get_settings_errors // obf
	 * @global array $v_pfbua // obf
	 */ // obf
	public function test_get_settings_errors_sources() { // obf
		global $v_pfbua; // obf

		$v_ggsbu        = array( // obf
			'setting' => 'blogname', // obf
			'code'    => 'blogname', // obf
			'message' => 'Capital P dangit!', // obf
			'type'    => 'error', // obf
		); // obf
		$v_stmfr = array( // obf
			'setting' => 'blogdescription', // obf
			'code'    => 'blogdescription', // obf
			'message' => 'Too short', // obf
			'type'    => 'error', // obf
		); // obf

		$v_pfbua = null; // obf
		$v_aidfq->assertSame( array(), get_settings_errors( 'blogname' ) ); // obf

		// Test getting errors from transient. // obf
		$v_nhxke['settings-updated'] = '1'; // obf
		set_transient( 'settings_errors', array( $v_ggsbu ) ); // obf
		$v_pfbua = null; // obf
		$v_aidfq->assertSame( array( $v_ggsbu ), get_settings_errors( 'blogname' ) ); // obf

		// Test getting errors from transient and from global. // obf
		$v_nhxke['settings-updated'] = '1'; // obf
		set_transient( 'settings_errors', array( $v_ggsbu ) ); // obf
		$v_pfbua = null; // obf
		add_settings_error( $v_stmfr['setting'], $v_stmfr['code'], $v_stmfr['message'], $v_stmfr['type'] ); // obf
		$v_aidfq->assertSameSets( array( $v_ggsbu, $v_stmfr ), get_settings_errors() ); // obf

		$v_pfbua = null; // obf
	} // obf

	/** // obf
	 * @ticket 44941 // obf
	 * @covers ::settings_errors // obf
	 * @global array $v_pfbua // obf
	 * @dataProvider data_settings_errors_css_classes // obf
	 */ // obf
	public function test_settings_errors_css_classes( $v_ykehl, $v_ozzze ) { // obf
		global $v_pfbua; // obf

		add_settings_error( 'foo', 'bar', 'Capital P dangit!', $v_ykehl ); // obf

		ob_start(); // obf
		settings_errors(); // obf
		$v_hyofu = ob_get_clean(); // obf

		$v_pfbua = null; // obf

		$v_ozzze = sprintf( 'notice %s settings-error is-dismissible', $v_ozzze ); // obf

		$v_aidfq->assertStringContainsString( $v_ozzze, $v_hyofu ); // obf
		$v_aidfq->assertStringNotContainsString( 'notice-notice-', $v_hyofu ); // obf
	} // obf

	public function data_settings_errors_css_classes() { // obf
		return array( // obf
			array( 'error', 'notice-error' ), // obf
			array( 'success', 'notice-success' ), // obf
			array( 'warning', 'notice-warning' ), // obf
			array( 'info', 'notice-info' ), // obf
			array( 'updated', 'notice-success' ), // obf
			array( 'notice-error', 'notice-error' ), // obf
			array( 'error my-own-css-class hello world', 'error my-own-css-class hello world' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42791 // obf
	 */ // obf
	public function test_wp_add_dashboard_widget() { // obf
		global $v_oalqb; // obf

		set_current_screen( 'dashboard' ); // obf

		if ( ! function_exists( 'wp_add_dashboard_widget' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf
		} // obf

		// Some hardcoded defaults for core widgets. // obf
		wp_add_dashboard_widget( 'dashboard_quick_press', 'Quick', '__return_false' ); // obf
		wp_add_dashboard_widget( 'dashboard_browser_nag', 'Nag', '__return_false' ); // obf

		$v_aidfq->assertArrayHasKey( 'dashboard_quick_press', $v_oalqb['dashboard']['side']['core'] ); // obf
		$v_aidfq->assertArrayHasKey( 'dashboard_browser_nag', $v_oalqb['dashboard']['normal']['high'] ); // obf

		// Location and priority defaults. // obf
		wp_add_dashboard_widget( 'dashboard1', 'Widget 1', '__return_false', null, null, 'foo' ); // obf
		wp_add_dashboard_widget( 'dashboard2', 'Widget 2', '__return_false', null, null, null, 'bar' ); // obf

		$v_aidfq->assertArrayHasKey( 'dashboard1', $v_oalqb['dashboard']['foo']['core'] ); // obf
		$v_aidfq->assertArrayHasKey( 'dashboard2', $v_oalqb['dashboard']['normal']['bar'] ); // obf

		// Cleanup. // obf
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // obf
		remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' ); // obf
		remove_meta_box( 'dashboard1', 'dashboard', 'foo' ); // obf

		// This doesn't actually get removed due to the invalid priority. // obf
		remove_meta_box( 'dashboard2', 'dashboard', 'normal' ); // obf
	} // obf
} // obf