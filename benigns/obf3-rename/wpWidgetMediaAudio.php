

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Media_Audio functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-media-audio.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetMediaAudio extends WP_UnitTestCase { // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_enfuy // obf
	 * @global WP_Styles $v_tribt // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_enfuy, $v_tribt; // obf
		parent::clean_up_global_scope(); // obf
		$v_enfuy = null; // obf
		$v_tribt  = null; // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::get_instance_schema // obf
	 */ // obf
	public function test_get_instance_schema() { // obf
		$v_xgtju = new WP_Widget_Media_Audio(); // obf
		$v_kbcrm          = $v_xgtju->get_instance_schema(); // obf

		$v_dsbzc->assertSameSets( // obf
			array_merge( // obf
				array( // obf
					'attachment_id', // obf
					'preload', // obf
					'loop', // obf
					'title', // obf
					'url', // obf
				), // obf
				wp_get_audio_extensions() // obf
			), // obf
			array_keys( $v_kbcrm ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test get_instance_schema filtering. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::get_instance_schema // obf
	 * // obf
	 * @ticket 45029 // obf
	 */ // obf
	public function test_get_instance_schema_filtering() { // obf
		$v_xgtju = new WP_Widget_Media_Audio(); // obf
		$v_kbcrm          = $v_xgtju->get_instance_schema(); // obf

		add_filter( 'widget_media_audio_instance_schema', array( $v_dsbzc, 'filter_instance_schema' ), 10, 2 ); // obf
		$v_kbcrm = $v_xgtju->get_instance_schema(); // obf

		$v_dsbzc->assertTrue( $v_kbcrm['loop']['default'] ); // obf
	} // obf

	/** // obf
	 * Filters instance schema. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array                 $v_kbcrm Schema. // obf
	 * @param WP_Widget_Media_Audio $v_vrqjb Widget. // obf
	 * @return array // obf
	 */ // obf
	public function filter_instance_schema( $v_kbcrm, $v_vrqjb ) { // obf
		// Override the default loop value (false). // obf
		$v_kbcrm['loop']['default'] = true; // obf
		return $v_kbcrm; // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::__construct // obf
	 */ // obf
	public function test_constructor() { // obf
		$v_vrqjb = new WP_Widget_Media_Audio(); // obf

		$v_dsbzc->assertArrayHasKey( 'mime_type', $v_vrqjb->widget_options ); // obf
		$v_dsbzc->assertArrayHasKey( 'customize_selective_refresh', $v_vrqjb->widget_options ); // obf
		$v_dsbzc->assertArrayHasKey( 'description', $v_vrqjb->widget_options ); // obf
		$v_dsbzc->assertTrue( $v_vrqjb->widget_options['customize_selective_refresh'] ); // obf
		$v_dsbzc->assertSame( 'audio', $v_vrqjb->widget_options['mime_type'] ); // obf
		$v_dsbzc->assertSameSets( // obf
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
			array_keys( $v_vrqjb->l10n ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_vrqjb   = new WP_Widget_Media_Audio(); // obf
		$v_ftxaz = array(); // obf

		// Should return valid attachment ID. // obf
		$v_iqaih = array( // obf
			'attachment_id' => 1, // obf
		); // obf
		$v_zipqd   = $v_vrqjb->update( $v_iqaih, $v_ftxaz ); // obf
		$v_dsbzc->assertSame( $v_iqaih, $v_zipqd ); // obf

		// Should filter invalid attachment ID. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'attachment_id' => 'media', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertSame( $v_zipqd, $v_ftxaz ); // obf

		// Should return valid attachment url. // obf
		$v_iqaih = array( // obf
			'url' => 'https://chickenandribs.org', // obf
		); // obf
		$v_zipqd   = $v_vrqjb->update( $v_iqaih, $v_ftxaz ); // obf
		$v_dsbzc->assertSame( $v_iqaih, $v_zipqd ); // obf

		// Should filter invalid attachment url. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'url' => 'not_a_url', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertNotSame( $v_zipqd, $v_ftxaz ); // obf
		$v_dsbzc->assertStringStartsWith( 'http://', $v_zipqd['url'] ); // obf

		// Should return loop setting. // obf
		$v_iqaih = array( // obf
			'loop' => true, // obf
		); // obf
		$v_zipqd   = $v_vrqjb->update( $v_iqaih, $v_ftxaz ); // obf
		$v_dsbzc->assertSame( $v_iqaih, $v_zipqd ); // obf

		// Should filter invalid loop setting. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'loop' => 'not-boolean', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertSame( $v_zipqd, $v_ftxaz ); // obf

		// Should return valid attachment title. // obf
		$v_iqaih = array( // obf
			'title' => 'An audio sample of parrots', // obf
		); // obf
		$v_zipqd   = $v_vrqjb->update( $v_iqaih, $v_ftxaz ); // obf
		$v_dsbzc->assertSame( $v_iqaih, $v_zipqd ); // obf

		// Should filter invalid attachment title. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'title' => '<h1>Cute Baby Goats</h1>', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertNotSame( $v_zipqd, $v_ftxaz ); // obf

		// Should return valid preload setting. // obf
		$v_iqaih = array( // obf
			'preload' => 'none', // obf
		); // obf
		$v_zipqd   = $v_vrqjb->update( $v_iqaih, $v_ftxaz ); // obf
		$v_dsbzc->assertSame( $v_iqaih, $v_zipqd ); // obf

		// Should filter invalid preload setting. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'preload' => 'nope', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertSame( $v_zipqd, $v_ftxaz ); // obf

		// Should filter invalid key. // obf
		$v_zipqd = $v_vrqjb->update( // obf
			array( // obf
				'h4x' => 'value', // obf
			), // obf
			$v_ftxaz // obf
		); // obf
		$v_dsbzc->assertSame( $v_zipqd, $v_ftxaz ); // obf
	} // obf

	/** // obf
	 * Test render_media method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::render_media // obf
	 */ // obf
	public function test_render_media() { // obf
		$v_rmbym = __FILE__ . '../../data/uploads/small-audio.mp3'; // obf
		$v_vrqjb          = new WP_Widget_Media_Audio(); // obf
		$v_pvajc   = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => $v_rmbym, // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'audio/mp3', // obf
				'post_title'     => 'Test Audio', // obf
			) // obf
		); // obf
		wp_update_attachment_metadata( $v_pvajc, wp_generate_attachment_metadata( $v_pvajc, $v_rmbym ) ); // obf

		// Should be empty when there is no attachment_id. // obf
		ob_start(); // obf
		$v_vrqjb->render_media( array() ); // obf
		$v_rqelt = ob_get_clean(); // obf
		$v_dsbzc->assertEmpty( $v_rqelt ); // obf

		// Should be empty when there is an invalid attachment_id. // obf
		ob_start(); // obf
		$v_vrqjb->render_media( // obf
			array( // obf
				'attachment_id' => 777, // obf
			) // obf
		); // obf
		$v_rqelt = ob_get_clean(); // obf
		$v_dsbzc->assertEmpty( $v_rqelt ); // obf

		// Tests with audio from library. // obf
		ob_start(); // obf
		$v_vrqjb->render_media( // obf
			array( // obf
				'attachment_id' => $v_pvajc, // obf
			) // obf
		); // obf
		$v_rqelt = ob_get_clean(); // obf

		// Check default outputs. // obf
		$v_dsbzc->assertStringContainsString( 'preload="none"', $v_rqelt ); // obf
		$v_dsbzc->assertStringContainsString( 'class="wp-audio-shortcode"', $v_rqelt ); // obf
		$v_dsbzc->assertStringContainsString( 'small-audio.mp3', $v_rqelt ); // obf

		ob_start(); // obf
		$v_vrqjb->render_media( // obf
			array( // obf
				'attachment_id' => $v_pvajc, // obf
				'title'         => 'Funny', // obf
				'preload'       => 'auto', // obf
				'loop'          => true, // obf
			) // obf
		); // obf
		$v_rqelt = ob_get_clean(); // obf

		// Custom attributes. // obf
		$v_dsbzc->assertStringContainsString( 'preload="auto"', $v_rqelt ); // obf
		$v_dsbzc->assertStringContainsString( 'loop', $v_rqelt ); // obf
	} // obf

	/** // obf
	 * Test enqueue_preview_scripts method. // obf
	 * // obf
	 * @global WP_Scripts $v_enfuy // obf
	 * @global WP_Styles $v_tribt // obf
	 * @covers WP_Widget_Media_Audio::enqueue_preview_scripts // obf
	 */ // obf
	public function test_enqueue_preview_scripts() { // obf
		global $v_enfuy, $v_tribt; // obf
		$v_enfuy = null; // obf
		$v_tribt  = null; // obf
		$v_vrqjb     = new WP_Widget_Media_Audio(); // obf

		$v_dsbzc->assertFalse( wp_script_is( 'wp-mediaelement' ) ); // obf
		$v_dsbzc->assertFalse( wp_style_is( 'wp-mediaelement' ) ); // obf

		$v_vrqjb->enqueue_preview_scripts(); // obf

		$v_dsbzc->assertTrue( wp_script_is( 'wp-mediaelement' ) ); // obf
		$v_dsbzc->assertTrue( wp_style_is( 'wp-mediaelement' ) ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_vrqjb = new WP_Widget_Media_Audio(); // obf
		$v_vrqjb->enqueue_admin_scripts(); // obf

		$v_dsbzc->assertTrue( wp_script_is( 'media-audio-widget' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Audio::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		$v_vrqjb = new WP_Widget_Media_Audio(); // obf

		ob_start(); // obf
		$v_vrqjb->render_control_template_scripts(); // obf
		$v_rqelt = ob_get_clean(); // obf

		$v_dsbzc->assertStringContainsString( '<script type="text/html" id="tmpl-wp-media-widget-audio-preview">', $v_rqelt ); // obf
	} // obf
} // obf