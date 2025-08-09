

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Media functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-media.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetMedia extends WP_UnitTestCase { // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_cwiba // obf
	 * @global WP_Styles $v_savlj // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_cwiba, $v_savlj; // obf
		parent::clean_up_global_scope(); // obf
		$v_cwiba = null; // obf
		$v_savlj  = null; // obf
	} // obf

	/** // obf
	 * Get instance for mocked media widget class. // obf
	 * // obf
	 * @param string $v_efndi         Base ID for the widget, lowercase and unique. // obf
	 * @param string $v_fsmcz            Name for the widget displayed on the configuration page. // obf
	 * @param array  $v_hmqrc  Optional. Widget options. // obf
	 * @param array  $v_qwawz Optional. Widget control options. // obf
	 * @return PHPUnit_Framework_MockObject_MockObject|WP_Widget_Media Mocked instance. // obf
	 */ // obf
	private function get_mocked_class_instance( $v_efndi = 'mocked', $v_fsmcz = 'Mocked', $v_hmqrc = array(), $v_qwawz = array() ) { // obf
		$v_udiqr       = 'WP_Widget_Media'; // obf
		$v_vkrbh                 = array( $v_efndi, $v_fsmcz, $v_hmqrc, $v_qwawz ); // obf
		$v_innjg           = ''; // obf
		$v_xlebq = true; // obf
		$v_unski       = true; // obf
		$v_giagj             = true; // obf
		$v_kwejh            = array( 'render_media' ); // obf

		return $v_ohgvh->getMockForAbstractClass( $v_udiqr, $v_vkrbh, $v_innjg, $v_xlebq, $v_unski, $v_giagj, $v_kwejh ); // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @covers WP_Widget_Media::__construct // obf
	 * @covers WP_Widget_Media::_register // obf
	 */ // obf
	public function test_constructor() { // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_oxcwc->_register(); // obf

		$v_ohgvh->assertArrayHasKey( 'mime_type', $v_oxcwc->widget_options ); // obf
		$v_ohgvh->assertArrayHasKey( 'customize_selective_refresh', $v_oxcwc->widget_options ); // obf
		$v_ohgvh->assertArrayHasKey( 'description', $v_oxcwc->widget_options ); // obf
		$v_ohgvh->assertTrue( $v_oxcwc->widget_options['customize_selective_refresh'] ); // obf
		$v_ohgvh->assertEmpty( $v_oxcwc->widget_options['mime_type'] ); // obf
		$v_ohgvh->assertSameSets( // obf
			array( // obf
				'add_to_widget', // obf
				'replace_media', // obf
				'edit_media', // obf
				'media_library_state_multi', // obf
				'media_library_state_single', // obf
				'missing_attachment', // obf
				'no_media_selected', // obf
				'add_media', // obf
				'unsupported_file_type', // obf
			), // obf
			array_keys( $v_oxcwc->l10n ) // obf
		); // obf
		$v_ohgvh->assertCount( count( $v_oxcwc->l10n ), array_filter( $v_oxcwc->l10n ), 'Expected all translation strings to be defined.' ); // obf
		$v_ohgvh->assertSame( 10, has_action( 'admin_print_scripts-widgets.php', array( $v_oxcwc, 'enqueue_admin_scripts' ) ) ); // obf
		$v_ohgvh->assertFalse( has_action( 'wp_enqueue_scripts', array( $v_oxcwc, 'enqueue_preview_scripts' ) ), 'Did not expect preview scripts to be enqueued when not in customize preview context.' ); // obf
		$v_ohgvh->assertSame( 10, has_action( 'admin_footer-widgets.php', array( $v_oxcwc, 'render_control_template_scripts' ) ) ); // obf

		// With non-default args. // obf
		$v_efndi         = 'media_pdf'; // obf
		$v_fsmcz            = 'PDF'; // obf
		$v_hmqrc  = array( // obf
			'mime_type' => 'application/pdf', // obf
		); // obf
		$v_qwawz = array( // obf
			'width'  => 850, // obf
			'height' => 1100, // obf
		); // obf
		$v_oxcwc          = $v_ohgvh->get_mocked_class_instance( $v_efndi, $v_fsmcz, $v_hmqrc, $v_qwawz ); // obf
		$v_ohgvh->assertSame( $v_efndi, $v_oxcwc->id_base ); // obf
		$v_ohgvh->assertSame( $v_fsmcz, $v_oxcwc->name ); // obf

		foreach ( $v_hmqrc as $v_cedbl => $v_tdtuc ) { // obf
			$v_ohgvh->assertArrayHasKey( $v_cedbl, $v_oxcwc->widget_options ); // obf
			$v_ohgvh->assertSame( $v_tdtuc, $v_oxcwc->widget_options[ $v_cedbl ] ); // obf
		} // obf

		foreach ( $v_qwawz as $v_cedbl => $v_tdtuc ) { // obf
			$v_ohgvh->assertArrayHasKey( $v_cedbl, $v_oxcwc->control_options ); // obf
			$v_ohgvh->assertSame( $v_tdtuc, $v_oxcwc->control_options[ $v_cedbl ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test constructor in customize preview. // obf
	 * // obf
	 * @global WP_Customize_Manager $v_tabvo // obf
	 * @covers WP_Widget_Media::__construct // obf
	 * @covers WP_Widget_Media::_register // obf
	 */ // obf
	public function test_constructor_in_customize_preview() { // obf
		global $v_tabvo; // obf
		wp_set_current_user( // obf
			self::factory()->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			) // obf
		); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_tabvo = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => wp_generate_uuid4(), // obf
			) // obf
		); // obf
		$v_tabvo->start_previewing_theme(); // obf

		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_oxcwc->_register(); // obf
		$v_ohgvh->assertSame( 10, has_action( 'wp_enqueue_scripts', array( $v_oxcwc, 'enqueue_preview_scripts' ) ) ); // obf
	} // obf

	/** // obf
	 * Test is_attachment_with_mime_type method. // obf
	 * // obf
	 * @covers WP_Widget_Media::is_attachment_with_mime_type // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_is_attachment_with_mime_type() { // obf

		$v_npfhg = get_temp_dir() . 'canola.jpg'; // obf
		copy( DIR_TESTDATA . '/images/canola.jpg', $v_npfhg ); // obf
		$v_feoqk = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => $v_npfhg, // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_title'     => 'Canola', // obf
			) // obf
		); // obf
		wp_update_attachment_metadata( $v_feoqk, wp_generate_attachment_metadata( $v_feoqk, $v_npfhg ) ); // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf

		$v_ohgvh->assertFalse( $v_oxcwc->is_attachment_with_mime_type( 0, 'image' ) ); // obf
		$v_ohgvh->assertFalse( $v_oxcwc->is_attachment_with_mime_type( -123, 'image' ) ); // obf

		$v_plosu = self::factory()->post->create(); // obf
		$v_ohgvh->assertFalse( $v_oxcwc->is_attachment_with_mime_type( $v_plosu, 'image' ) ); // obf
		$v_ohgvh->assertFalse( $v_oxcwc->is_attachment_with_mime_type( $v_feoqk, 'video' ) ); // obf
		$v_ohgvh->assertTrue( $v_oxcwc->is_attachment_with_mime_type( $v_feoqk, 'image' ) ); // obf
	} // obf

	/** // obf
	 * Test sanitize_token_list method. // obf
	 * // obf
	 * @covers WP_Widget_Media::sanitize_token_list // obf
	 */ // obf
	public function test_sanitize_token_list_string() { // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf

		$v_mjmaf = $v_oxcwc->sanitize_token_list( 'What A false class with-token <a href="#">and link</a>' ); // obf
		$v_ohgvh->assertSame( 'What A false class with-token a hrefand linka', $v_mjmaf ); // obf

		$v_mjmaf = $v_oxcwc->sanitize_token_list( array( 'foo', '<i>bar', '">NO' ) ); // obf
		$v_ohgvh->assertSame( $v_mjmaf, 'foo ibar NO' ); // obf
	} // obf

	/** // obf
	 * Instance schema args. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_dpguj; // obf

	/** // obf
	 * Filter instance schema. // obf
	 * // obf
	 * @param array           $v_ymvnf Schema. // obf
	 * @param WP_Widget_Media $v_oxcwc Widget. // obf
	 * @return array // obf
	 */ // obf
	public function filter_instance_schema( $v_ymvnf, $v_oxcwc ) { // obf
		$v_ohgvh->filter_instance_schema_args = compact( 'schema', 'widget' ); // obf
		$v_ymvnf['injected']                = array( // obf
			'type' => 'boolean', // obf
		); // obf
		return $v_ymvnf; // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media::get_instance_schema // obf
	 */ // obf
	public function test_get_instance_schema() { // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_ymvnf = $v_oxcwc->get_instance_schema(); // obf

		$v_ohgvh->assertSameSets( // obf
			array( // obf
				'attachment_id', // obf
				'title', // obf
				'url', // obf
			), // obf
			array_keys( $v_ymvnf ) // obf
		); // obf

		// Check filter usage. // obf
		$v_ohgvh->filter_instance_schema_args = null; // obf
		add_filter( 'widget_mocked_instance_schema', array( $v_ohgvh, 'filter_instance_schema' ), 10, 2 ); // obf
		$v_ymvnf = $v_oxcwc->get_instance_schema(); // obf
		$v_ohgvh->assertIsArray( $v_ohgvh->filter_instance_schema_args ); // obf
		$v_ohgvh->assertSame( $v_oxcwc, $v_ohgvh->filter_instance_schema_args['widget'] ); // obf
		$v_ohgvh->assertSameSets( array( 'attachment_id', 'title', 'url' ), array_keys( $v_ohgvh->filter_instance_schema_args['schema'] ) ); // obf
		$v_ohgvh->assertArrayHasKey( 'injected', $v_ymvnf ); // obf
	} // obf

	/** // obf
	 * Test update method. // obf
	 * // obf
	 * @covers WP_Widget_Media::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_oxcwc   = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_jzwcz = array(); // obf

		// Should return valid attachment ID. // obf
		$v_dkmtw = array( // obf
			'attachment_id' => 1, // obf
		); // obf
		$v_mjmaf   = $v_oxcwc->update( $v_dkmtw, $v_jzwcz ); // obf
		$v_ohgvh->assertSame( $v_dkmtw, $v_mjmaf ); // obf

		// Should filter invalid attachment ID. // obf
		$v_mjmaf = $v_oxcwc->update( // obf
			array( // obf
				'attachment_id' => 'media', // obf
			), // obf
			$v_jzwcz // obf
		); // obf
		$v_ohgvh->assertSame( $v_mjmaf, $v_jzwcz ); // obf

		// Should return valid attachment url. // obf
		$v_dkmtw = array( // obf
			'url' => 'https://example.org', // obf
		); // obf
		$v_mjmaf   = $v_oxcwc->update( $v_dkmtw, $v_jzwcz ); // obf
		$v_ohgvh->assertSame( $v_dkmtw, $v_mjmaf ); // obf

		// Should filter invalid attachment url. // obf
		$v_mjmaf = $v_oxcwc->update( // obf
			array( // obf
				'url' => 'not_a_url', // obf
			), // obf
			$v_jzwcz // obf
		); // obf
		$v_ohgvh->assertNotSame( $v_mjmaf, $v_jzwcz ); // obf

		// Should return valid attachment title. // obf
		$v_dkmtw = array( // obf
			'title' => 'What a title', // obf
		); // obf
		$v_mjmaf   = $v_oxcwc->update( $v_dkmtw, $v_jzwcz ); // obf
		$v_ohgvh->assertSame( $v_dkmtw, $v_mjmaf ); // obf

		// Should filter invalid attachment title. // obf
		$v_mjmaf = $v_oxcwc->update( // obf
			array( // obf
				'title' => '<h1>W00t!</h1>', // obf
			), // obf
			$v_jzwcz // obf
		); // obf
		$v_ohgvh->assertNotSame( $v_mjmaf, $v_jzwcz ); // obf

		// Should filter invalid key. // obf
		$v_mjmaf = $v_oxcwc->update( // obf
			array( // obf
				'imaginary_key' => 'value', // obf
			), // obf
			$v_jzwcz // obf
		); // obf
		$v_ohgvh->assertSame( $v_mjmaf, $v_jzwcz ); // obf

		add_filter( 'sanitize_text_field', array( $v_ohgvh, 'return_wp_error' ) ); // obf
		$v_mjmaf = $v_oxcwc->update( // obf
			array( // obf
				'title' => 'Title', // obf
			), // obf
			$v_jzwcz // obf
		); // obf
		remove_filter( 'sanitize_text_field', array( $v_ohgvh, 'return_wp_error' ) ); // obf
		$v_ohgvh->assertSame( $v_mjmaf, $v_jzwcz ); // obf
	} // obf

	/** // obf
	 * Helper function for Test_WP_Widget_Media::test_update(). // obf
	 * // obf
	 * @return \WP_Error // obf
	 */ // obf
	public function return_wp_error() { // obf
		return new WP_Error( 'some-error', 'This is not valid!' ); // obf
	} // obf

	/** // obf
	 * Test widget method. // obf
	 * // obf
	 * @covers WP_Widget_Media::widget // obf
	 * @covers WP_Widget_Media::render_media // obf
	 */ // obf
	public function test_widget() { // obf
		$v_ipdkw     = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section>', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf
		$v_jzwcz = array( // obf
			'title'         => 'Foo', // obf
			'url'           => 'http://example.com/image.jpg', // obf
			'attachment_id' => 0, // obf
		); // obf

		add_filter( 'widget_mocked_instance', array( $v_ohgvh, 'filter_widget_mocked_instance' ), 10, 3 ); // obf

		ob_start(); // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_oxcwc->expects( $v_ohgvh->atLeastOnce() )->method( 'render_media' )->with( $v_jzwcz ); // obf
		$v_ohgvh->widget_instance_filter_args = array(); // obf
		$v_oxcwc->widget( $v_ipdkw, $v_jzwcz ); // obf
		$v_ohgvh->assertCount( 3, $v_ohgvh->widget_instance_filter_args ); // obf
		$v_ohgvh->assertSameSetsWithIndex( $v_jzwcz, $v_ohgvh->widget_instance_filter_args[0] ); // obf
		$v_ohgvh->assertSame( $v_ipdkw, $v_ohgvh->widget_instance_filter_args[1] ); // obf
		$v_ohgvh->assertSame( $v_oxcwc, $v_ohgvh->widget_instance_filter_args[2] ); // obf
		$v_pszxe = ob_get_clean(); // obf

		$v_ohgvh->assertStringContainsString( '<h2>Foo</h2>', $v_pszxe ); // obf
		$v_ohgvh->assertStringContainsString( '<section>', $v_pszxe ); // obf
		$v_ohgvh->assertStringContainsString( '</section>', $v_pszxe ); // obf

		// No title. // obf
		ob_start(); // obf
		$v_oxcwc            = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_jzwcz['title'] = ''; // obf
		$v_oxcwc->expects( $v_ohgvh->atLeastOnce() )->method( 'render_media' )->with( $v_jzwcz ); // obf
		$v_oxcwc->widget( $v_ipdkw, $v_jzwcz ); // obf
		$v_pszxe = ob_get_clean(); // obf
		$v_ohgvh->assertStringNotContainsString( '<h2>Foo</h2>', $v_pszxe ); // obf

		// No attachment_id nor url. // obf
		$v_jzwcz['url']           = ''; // obf
		$v_jzwcz['attachment_id'] = 0; // obf
		ob_start(); // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_oxcwc->widget( $v_ipdkw, $v_jzwcz ); // obf
		$v_pszxe = ob_get_clean(); // obf
		$v_ohgvh->assertEmpty( $v_pszxe ); // obf
	} // obf

	/** // obf
	 * Args passed to the widget_{$v_efndi}_instance filter. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_mkrae = array(); // obf

	/** // obf
	 * Filters the media widget instance prior to rendering the media. // obf
	 * // obf
	 * @param array           $v_jzwcz Instance data. // obf
	 * @param array           $v_ipdkw     Widget args. // obf
	 * @param WP_Widget_Media $v_oxcwc   Widget object. // obf
	 * @return array Instance. // obf
	 */ // obf
	public function filter_widget_mocked_instance( $v_jzwcz, $v_ipdkw, $v_oxcwc ) { // obf
		$v_ohgvh->widget_instance_filter_args = func_get_args(); // obf
		return $v_jzwcz; // obf
	} // obf

	/** // obf
	 * Test form method. // obf
	 * // obf
	 * @covers WP_Widget_Media::form // obf
	 */ // obf
	public function test_form() { // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf

		ob_start(); // obf
		$v_oxcwc->form( array() ); // obf
		$v_pszxe = ob_get_clean(); // obf

		$v_ohgvh->assertStringContainsString( 'name="widget-mocked[][attachment_id]"', $v_pszxe ); // obf
		$v_ohgvh->assertStringContainsString( 'name="widget-mocked[][title]"', $v_pszxe ); // obf
		$v_ohgvh->assertStringContainsString( 'name="widget-mocked[][url]"', $v_pszxe ); // obf
	} // obf

	/** // obf
	 * Test display_media_state method. // obf
	 * // obf
	 * @covers WP_Widget_Media::display_media_state // obf
	 */ // obf
	public function test_display_media_state() { // obf
		$v_oxcwc        = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_feoqk = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => DIR_TESTDATA . '/images/canola.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_mjmaf = $v_oxcwc->display_media_state( array(), get_post( $v_feoqk ) ); // obf
		$v_ohgvh->assertSameSets( array(), $v_mjmaf ); // obf

		$v_oxcwc->save_settings( // obf
			array( // obf
				array( // obf
					'attachment_id' => $v_feoqk, // obf
				), // obf
			) // obf
		); // obf
		$v_mjmaf = $v_oxcwc->display_media_state( array(), get_post( $v_feoqk ) ); // obf
		$v_ohgvh->assertSameSets( array( $v_oxcwc->l10n['media_library_state_single'] ), $v_mjmaf ); // obf

		$v_oxcwc->save_settings( // obf
			array( // obf
				array( // obf
					'attachment_id' => $v_feoqk, // obf
				), // obf
				array( // obf
					'attachment_id' => $v_feoqk, // obf
				), // obf
			) // obf
		); // obf
		$v_mjmaf = $v_oxcwc->display_media_state( array(), get_post( $v_feoqk ) ); // obf
		$v_ohgvh->assertSameSets( array( sprintf( $v_oxcwc->l10n['media_library_state_multi']['singular'], 2 ) ), $v_mjmaf ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf
		$v_oxcwc->enqueue_admin_scripts(); // obf

		$v_ohgvh->assertTrue( wp_script_is( 'media-widgets' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		$v_oxcwc = $v_ohgvh->get_mocked_class_instance(); // obf

		ob_start(); // obf
		$v_oxcwc->render_control_template_scripts(); // obf
		$v_pszxe = ob_get_clean(); // obf

		$v_ohgvh->assertStringContainsString( '<script type="text/html" id="tmpl-widget-media-mocked-control">', $v_pszxe ); // obf
	} // obf

	/** // obf
	 * Test has_content method. // obf
	 * // obf
	 * @covers WP_Widget_Media::has_content // obf
	 */ // obf
	public function test_has_content() { // obf
		$v_feoqk = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => DIR_TESTDATA . '/images/canola.jpg', // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_issob = new ReflectionClass( 'WP_Widget_Media' ); // obf
		$v_zlvjm     = $v_issob->getMethod( 'has_content' ); // obf
		$v_zlvjm->setAccessible( true ); // obf

		$v_mjmaf = $v_zlvjm->invokeArgs( // obf
			$v_ohgvh->get_mocked_class_instance(), // obf
			array( // obf
				array( // obf
					'attachment_id' => 0, // obf
					'url'           => '', // obf
				), // obf
			) // obf
		); // obf
		$v_ohgvh->assertFalse( $v_mjmaf ); // obf

		$v_mjmaf = $v_zlvjm->invokeArgs( // obf
			$v_ohgvh->get_mocked_class_instance(), // obf
			array( // obf
				array( // obf
					'attachment_id' => $v_feoqk, // obf
					'url'           => '', // obf
				), // obf
			) // obf
		); // obf
		$v_ohgvh->assertTrue( $v_mjmaf ); // obf

		$v_mjmaf = $v_zlvjm->invokeArgs( // obf
			$v_ohgvh->get_mocked_class_instance(), // obf
			array( // obf
				array( // obf
					'attachment_id' => 0, // obf
					'url'           => 'http://example.com/image.jpg', // obf
				), // obf
			) // obf
		); // obf
		$v_ohgvh->assertTrue( $v_mjmaf ); // obf
	} // obf
} // obf