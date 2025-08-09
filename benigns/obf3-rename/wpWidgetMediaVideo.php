

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Media_Video functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-media-video.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetMediaVideo extends WP_UnitTestCase { // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_yjlik // obf
	 * @global WP_Styles $v_xyhfk // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_yjlik, $v_xyhfk; // obf
		parent::clean_up_global_scope(); // obf
		$v_yjlik = null; // obf
		$v_xyhfk  = null; // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::get_instance_schema // obf
	 */ // obf
	public function test_get_instance_schema() { // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf
		$v_ndtvm = $v_xbbnh->get_instance_schema(); // obf

		$v_vvyuf->assertSameSets( // obf
			array_merge( // obf
				array( // obf
					'attachment_id', // obf
					'preload', // obf
					'loop', // obf
					'title', // obf
					'url', // obf
					'content', // obf
				), // obf
				wp_get_video_extensions() // obf
			), // obf
			array_keys( $v_ndtvm ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test schema filtering. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::get_instance_schema // obf
	 * // obf
	 * @ticket 45029 // obf
	 */ // obf
	public function test_get_instance_schema_filtering() { // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf
		$v_ndtvm = $v_xbbnh->get_instance_schema(); // obf

		add_filter( 'widget_media_video_instance_schema', array( $v_vvyuf, 'filter_instance_schema' ), 10, 2 ); // obf
		$v_ndtvm = $v_xbbnh->get_instance_schema(); // obf

		$v_vvyuf->assertTrue( $v_ndtvm['loop']['default'] ); // obf
	} // obf

	/** // obf
	 * Filters instance schema. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array                 $v_ndtvm Schema. // obf
	 * @param WP_Widget_Media_Video $v_xbbnh Widget. // obf
	 * @return array // obf
	 */ // obf
	public function filter_instance_schema( $v_ndtvm, $v_xbbnh ) { // obf
		// Override the default loop value (false). // obf
		$v_ndtvm['loop']['default'] = true; // obf
		return $v_ndtvm; // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::__construct // obf
	 */ // obf
	public function test_constructor() { // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf

		$v_vvyuf->assertArrayHasKey( 'mime_type', $v_xbbnh->widget_options ); // obf
		$v_vvyuf->assertArrayHasKey( 'customize_selective_refresh', $v_xbbnh->widget_options ); // obf
		$v_vvyuf->assertArrayHasKey( 'description', $v_xbbnh->widget_options ); // obf
		$v_vvyuf->assertTrue( $v_xbbnh->widget_options['customize_selective_refresh'] ); // obf
		$v_vvyuf->assertSame( 'video', $v_xbbnh->widget_options['mime_type'] ); // obf
		$v_vvyuf->assertSameSets( // obf
			array( // obf
				'add_to_widget', // obf
				'replace_media', // obf
				'unsupported_file_type', // obf
				'edit_media', // obf
				'media_library_state_multi', // obf
				'media_library_state_single', // obf
				'missing_attachment', // obf
				'no_media_selected', // obf
				'add_media', // obf
			), // obf
			array_keys( $v_xbbnh->l10n ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_xbbnh   = new WP_Widget_Media_Video(); // obf
		$v_hulxy = array(); // obf

		// Should return valid attachment ID. // obf
		$v_uwabm = array( // obf
			'attachment_id' => 1, // obf
		); // obf
		$v_leoqi   = $v_xbbnh->update( $v_uwabm, $v_hulxy ); // obf
		$v_vvyuf->assertSame( $v_uwabm, $v_leoqi ); // obf

		// Should filter invalid attachment ID. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'attachment_id' => 'media', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertSame( $v_leoqi, $v_hulxy ); // obf

		// Should return valid attachment url. // obf
		$v_uwabm = array( // obf
			'url' => 'https://chickenandribs.org', // obf
		); // obf
		$v_leoqi   = $v_xbbnh->update( $v_uwabm, $v_hulxy ); // obf
		$v_vvyuf->assertSame( $v_uwabm, $v_leoqi ); // obf

		// Should filter invalid attachment url. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'url' => 'not_a_url', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertNotSame( $v_leoqi, $v_hulxy ); // obf
		$v_vvyuf->assertStringStartsWith( 'http://', $v_leoqi['url'] ); // obf

		// Should return loop setting. // obf
		$v_uwabm = array( // obf
			'loop' => true, // obf
		); // obf
		$v_leoqi   = $v_xbbnh->update( $v_uwabm, $v_hulxy ); // obf
		$v_vvyuf->assertSame( $v_uwabm, $v_leoqi ); // obf

		// Should filter invalid loop setting. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'loop' => 'not-boolean', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertSame( $v_leoqi, $v_hulxy ); // obf

		// Should return valid attachment title. // obf
		$v_uwabm = array( // obf
			'title' => 'A video of goats', // obf
		); // obf
		$v_leoqi   = $v_xbbnh->update( $v_uwabm, $v_hulxy ); // obf
		$v_vvyuf->assertSame( $v_uwabm, $v_leoqi ); // obf

		// Should filter invalid attachment title. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'title' => '<h1>Cute Baby Goats</h1>', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertNotSame( $v_leoqi, $v_hulxy ); // obf

		// Should return valid preload setting. // obf
		$v_uwabm = array( // obf
			'preload' => 'none', // obf
		); // obf
		$v_leoqi   = $v_xbbnh->update( $v_uwabm, $v_hulxy ); // obf
		$v_vvyuf->assertSame( $v_uwabm, $v_leoqi ); // obf

		// Should filter invalid preload setting. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'preload' => 'nope', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertSame( $v_leoqi, $v_hulxy ); // obf

		// Should filter invalid key. // obf
		$v_leoqi = $v_xbbnh->update( // obf
			array( // obf
				'h4x' => 'value', // obf
			), // obf
			$v_hulxy // obf
		); // obf
		$v_vvyuf->assertSame( $v_leoqi, $v_hulxy ); // obf
	} // obf

	/** // obf
	 * Test render_media method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::render_media // obf
	 * @covers WP_Widget_Media_Video::inject_video_max_width_style // obf
	 */ // obf
	public function test_render_media() { // obf
		$v_ytcux = __FILE__ . '../../data/uploads/small-video.m4v'; // obf
		$v_xbbnh          = new WP_Widget_Media_Video(); // obf
		$v_jsxee   = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => $v_ytcux, // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'video/mp4', // obf
				'post_title'     => 'Test Video', // obf
			) // obf
		); // obf
		wp_update_attachment_metadata( $v_jsxee, wp_generate_attachment_metadata( $v_jsxee, $v_ytcux ) ); // obf

		// Should be empty when there is no attachment_id. // obf
		ob_start(); // obf
		$v_xbbnh->render_media( array() ); // obf
		$v_ysbdu = ob_get_clean(); // obf
		$v_vvyuf->assertEmpty( $v_ysbdu ); // obf

		// Should be empty when there is an invalid attachment_id. // obf
		ob_start(); // obf
		$v_xbbnh->render_media( // obf
			array( // obf
				'attachment_id' => 777, // obf
			) // obf
		); // obf
		$v_ysbdu = ob_get_clean(); // obf
		$v_vvyuf->assertEmpty( $v_ysbdu ); // obf

		// Tests with video from library. // obf
		ob_start(); // obf
		$v_xbbnh->render_media( // obf
			array( // obf
				'attachment_id' => $v_jsxee, // obf
			) // obf
		); // obf
		$v_ysbdu = ob_get_clean(); // obf

		// Check default outputs. // obf
		$v_vvyuf->assertStringContainsString( 'preload="metadata"', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( 'class="wp-video"', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( 'width:100%', $v_ysbdu ); // obf
		$v_vvyuf->assertStringNotContainsString( 'height=', $v_ysbdu ); // obf
		$v_vvyuf->assertStringNotContainsString( 'width="', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( 'small-video.m4v', $v_ysbdu );// Auto parses dimensions. // obf

		ob_start(); // obf
		$v_xbbnh->render_media( // obf
			array( // obf
				'attachment_id' => $v_jsxee, // obf
				'title'         => 'Open Source Cartoon', // obf
				'preload'       => 'metadata', // obf
				'loop'          => true, // obf
			) // obf
		); // obf
		$v_ysbdu = ob_get_clean(); // obf

		// Custom attributes. // obf
		$v_vvyuf->assertStringContainsString( 'preload="metadata"', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( 'loop', $v_ysbdu ); // obf

		// Externally hosted video. // obf
		ob_start(); // obf
		$v_qxyiu = '<track srclang="en" label="English" kind="subtitles" src="http://example.com/wp-content/uploads/2017/04/subtitles-en.vtt">'; // obf
		$v_xbbnh->render_media( // obf
			array( // obf
				'attachment_id' => null, // obf
				'loop'          => false, // obf
				'url'           => 'https://www.youtube.com/watch?v=72xdCU__XCk', // obf
				'content'       => $v_qxyiu, // obf
			) // obf
		); // obf
		$v_ysbdu = ob_get_clean(); // obf

		// Custom attributes. // obf
		$v_vvyuf->assertStringContainsString( 'preload="metadata"', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( 'src="https://www.youtube.com/watch?v=72xdCU__XCk', $v_ysbdu ); // obf
		$v_vvyuf->assertStringContainsString( $v_qxyiu, $v_ysbdu ); // obf
	} // obf

	/** // obf
	 * Test enqueue_preview_scripts method. // obf
	 * // obf
	 * @global WP_Scripts $v_yjlik // obf
	 * @global WP_Styles $v_xyhfk // obf
	 * @covers WP_Widget_Media_Video::enqueue_preview_scripts // obf
	 */ // obf
	public function test_enqueue_preview_scripts() { // obf
		global $v_yjlik, $v_xyhfk; // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf

		$v_yjlik = null; // obf
		$v_xyhfk  = null; // obf
		$v_xbbnh->enqueue_preview_scripts(); // obf
		$v_vvyuf->assertTrue( wp_script_is( 'wp-mediaelement' ) ); // obf
		$v_vvyuf->assertTrue( wp_style_is( 'wp-mediaelement' ) ); // obf
		$v_vvyuf->assertTrue( wp_script_is( 'mediaelement-vimeo' ) ); // obf

		$v_yjlik = null; // obf
		$v_xyhfk  = null; // obf
		add_filter( 'wp_video_shortcode_library', '__return_empty_string' ); // obf
		$v_xbbnh->enqueue_preview_scripts(); // obf
		$v_vvyuf->assertFalse( wp_script_is( 'wp-mediaelement' ) ); // obf
		$v_vvyuf->assertFalse( wp_style_is( 'wp-mediaelement' ) ); // obf
		$v_vvyuf->assertFalse( wp_script_is( 'mediaelement-vimeo' ) ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf
		$v_xbbnh->enqueue_admin_scripts(); // obf

		$v_vvyuf->assertTrue( wp_script_is( 'media-video-widget' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Video::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		$v_xbbnh = new WP_Widget_Media_Video(); // obf

		ob_start(); // obf
		$v_xbbnh->render_control_template_scripts(); // obf
		$v_ysbdu = ob_get_clean(); // obf

		$v_vvyuf->assertStringContainsString( '<script type="text/html" id="tmpl-wp-media-widget-video-preview">', $v_ysbdu ); // obf
	} // obf
} // obf