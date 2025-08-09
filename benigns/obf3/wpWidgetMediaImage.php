

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Media_Image functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-media-image.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetMediaImage extends WP_UnitTestCase { // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_qkodo // obf
	 * @global WP_Styles $v_ztpsu // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_qkodo, $v_ztpsu; // obf
		parent::clean_up_global_scope(); // obf
		$v_qkodo = null; // obf
		$v_ztpsu  = null; // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::get_instance_schema // obf
	 */ // obf
	public function test_get_instance_schema() { // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf
		$v_lmnxw = $v_bipcl->get_instance_schema(); // obf

		$v_gqpwd->assertSameSets( // obf
			array( // obf
				'alt', // obf
				'attachment_id', // obf
				'caption', // obf
				'height', // obf
				'image_classes', // obf
				'image_title', // obf
				'link_classes', // obf
				'link_rel', // obf
				'link_target_blank', // obf
				'link_type', // obf
				'link_url', // obf
				'size', // obf
				'title', // obf
				'url', // obf
				'width', // obf
			), // obf
			array_keys( $v_lmnxw ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test schema filtering. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::get_instance_schema // obf
	 * // obf
	 * @ticket 45029 // obf
	 */ // obf
	public function test_get_instance_schema_filtering() { // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf
		$v_lmnxw = $v_bipcl->get_instance_schema(); // obf

		add_filter( 'widget_media_image_instance_schema', array( $v_gqpwd, 'filter_instance_schema' ), 10, 2 ); // obf
		$v_lmnxw = $v_bipcl->get_instance_schema(); // obf

		$v_gqpwd->assertSame( 'large', $v_lmnxw['size']['default'] ); // obf
	} // obf

	/** // obf
	 * Filters instance schema. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array                 $v_lmnxw Schema. // obf
	 * @param WP_Widget_Media_Image $v_bipcl Widget. // obf
	 * @return array // obf
	 */ // obf
	public function filter_instance_schema( $v_lmnxw, $v_bipcl ) { // obf
		// Override the default size value ('medium'). // obf
		$v_lmnxw['size']['default'] = 'large'; // obf
		return $v_lmnxw; // obf
	} // obf

	/** // obf
	 * Test constructor. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::__construct // obf
	 */ // obf
	public function test_constructor() { // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf

		$v_gqpwd->assertArrayHasKey( 'mime_type', $v_bipcl->widget_options ); // obf
		$v_gqpwd->assertArrayHasKey( 'customize_selective_refresh', $v_bipcl->widget_options ); // obf
		$v_gqpwd->assertArrayHasKey( 'description', $v_bipcl->widget_options ); // obf
		$v_gqpwd->assertTrue( $v_bipcl->widget_options['customize_selective_refresh'] ); // obf
		$v_gqpwd->assertSame( 'image', $v_bipcl->widget_options['mime_type'] ); // obf
		$v_gqpwd->assertSameSets( // obf
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
			array_keys( $v_bipcl->l10n ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_bipcl   = new WP_Widget_Media_Image(); // obf
		$v_ebhsx = array(); // obf

		// Should return valid attachment ID. // obf
		$v_wiltk = array( // obf
			'attachment_id' => 1, // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid attachment ID. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'attachment_id' => 'media', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid attachment url. // obf
		$v_wiltk = array( // obf
			'url' => 'https://example.org', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid attachment url. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'url' => 'not_a_url', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertNotSame( $v_gomds, $v_ebhsx ); // obf
		$v_gqpwd->assertStringStartsWith( 'http://', $v_gomds['url'] ); // obf

		// Should return valid attachment title. // obf
		$v_wiltk = array( // obf
			'title' => 'What a title', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid attachment title. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'title' => '<h1>W00t!</h1>', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertNotSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid image size. // obf
		$v_wiltk = array( // obf
			'size' => 'thumbnail', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image size. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'size' => 'big league', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid image width. // obf
		$v_wiltk = array( // obf
			'width' => 300, // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image width. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'width' => 'wide', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid image height. // obf
		$v_wiltk = array( // obf
			'height' => 200, // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image height. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'height' => 'high', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid image caption. // obf
		$v_wiltk = array( // obf
			'caption' => 'A caption with <a href="#">link</a>', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image caption. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'caption' => '"><i onload="alert(\'hello\')" />', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( // obf
			$v_gomds, // obf
			array( // obf
				'caption' => '"&gt;<i />', // obf
			) // obf
		); // obf

		// Should return valid alt text. // obf
		$v_wiltk = array( // obf
			'alt' => 'A water tower', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid alt text. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'alt' => '"><i onload="alert(\'hello\')" />', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( // obf
			$v_gomds, // obf
			array( // obf
				'alt' => '">', // obf
			) // obf
		); // obf

		// Should return valid link type. // obf
		$v_wiltk = array( // obf
			'link_type' => 'file', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid link type. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'link_type' => 'interesting', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid link url. // obf
		$v_wiltk = array( // obf
			'link_url' => 'https://example.org', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid link url. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'link_url' => 'not_a_url', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertNotSame( $v_gomds, $v_ebhsx ); // obf
		$v_gqpwd->assertStringStartsWith( 'http://', $v_gomds['link_url'] ); // obf

		// Should return valid image classes. // obf
		$v_wiltk = array( // obf
			'image_classes' => 'A water tower', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image classes. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'image_classes' => '"><i onload="alert(\'hello\')" />', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( // obf
			$v_gomds, // obf
			array( // obf
				'image_classes' => 'i onloadalerthello', // obf
			) // obf
		); // obf

		// Should return valid link classes. // obf
		$v_wiltk = array( // obf
			'link_classes' => 'A water tower', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid link classes. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'link_classes' => '"><i onload="alert(\'hello\')" />', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( // obf
			$v_gomds, // obf
			array( // obf
				'link_classes' => 'i onloadalerthello', // obf
			) // obf
		); // obf

		// Should return valid rel text. // obf
		$v_wiltk = array( // obf
			'link_rel' => 'previous', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid rel text. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'link_rel' => '"><i onload="alert(\'hello\')" />', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( // obf
			$v_gomds, // obf
			array( // obf
				'link_rel' => 'i onloadalerthello', // obf
			) // obf
		); // obf

		// Should return valid link target. // obf
		$v_wiltk = array( // obf
			'link_target_blank' => false, // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid  link target. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'link_target_blank' => 'top', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf

		// Should return valid image title. // obf
		$v_wiltk = array( // obf
			'image_title' => 'What a title', // obf
		); // obf
		$v_gomds   = $v_bipcl->update( $v_wiltk, $v_ebhsx ); // obf
		$v_gqpwd->assertSame( $v_wiltk, $v_gomds ); // obf

		// Should filter invalid image title. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'image_title' => '<h1>W00t!</h1>', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertNotSame( $v_gomds, $v_ebhsx ); // obf

		// Should filter invalid key. // obf
		$v_gomds = $v_bipcl->update( // obf
			array( // obf
				'imaginary_key' => 'value', // obf
			), // obf
			$v_ebhsx // obf
		); // obf
		$v_gqpwd->assertSame( $v_gomds, $v_ebhsx ); // obf
	} // obf

	/** // obf
	 * Test render_media method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::render_media // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_render_media() { // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf

		$v_wikua = get_temp_dir() . 'canola.jpg'; // obf
		copy( DIR_TESTDATA . '/images/canola.jpg', $v_wikua ); // obf
		$v_mwczk = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'           => $v_wikua, // obf
				'post_parent'    => 0, // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_title'     => 'Canola', // obf
			) // obf
		); // obf
		wp_update_attachment_metadata( $v_mwczk, wp_generate_attachment_metadata( $v_mwczk, $v_wikua ) ); // obf

		// Should be empty when there is no attachment_id. // obf
		ob_start(); // obf
		$v_bipcl->render_media( array() ); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertEmpty( $v_zfeue ); // obf

		// Should be empty when there is an invalid attachment_id. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => 666, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertEmpty( $v_zfeue ); // obf

		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		// No default title. // obf
		$v_gqpwd->assertStringNotContainsString( 'title="', $v_zfeue ); // obf
		// Default image classes. // obf
		$v_gqpwd->assertStringContainsString( 'class="image wp-image-' . $v_mwczk, $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'style="max-width: 100%; height: auto;"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'alt=""', $v_zfeue ); // obf

		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
				'image_title'   => 'Custom Title', // obf
				'image_classes' => 'custom-class', // obf
				'alt'           => 'A flower', // obf
				'size'          => 'custom', // obf
				'width'         => 100, // obf
				'height'        => 100, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		// Custom image title. // obf
		$v_gqpwd->assertStringContainsString( 'title="Custom Title"', $v_zfeue ); // obf
		// Custom image class. // obf
		$v_gqpwd->assertStringContainsString( 'class="image wp-image-' . $v_mwczk . ' custom-class', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'alt="A flower"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'width="100"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'height="100"', $v_zfeue ); // obf

		// Embedded images. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => null, // obf
				'caption'       => 'With caption', // obf
				'height'        => 100, // obf
				'link_type'     => 'file', // obf
				'url'           => 'http://example.org/url/to/image.jpg', // obf
				'width'         => 100, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		// Custom image class. // obf
		$v_gqpwd->assertStringContainsString( 'src="http://example.org/url/to/image.jpg"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'decoding="async"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'loading="lazy"', $v_zfeue ); // obf

		// Link settings. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
				'link_type'     => 'file', // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		$v_rntuk = '<a href="' . wp_get_attachment_url( $v_mwczk ) . '"'; // obf
		$v_gqpwd->assertStringContainsString( $v_rntuk, $v_zfeue ); // obf
		$v_gqpwd->assertTrue( (bool) preg_match( '#<a href.*?>#', $v_zfeue, $v_qzmjn ) ); // obf
		$v_gqpwd->assertStringNotContainsString( ' class="', $v_qzmjn[0] ); // obf
		$v_gqpwd->assertStringNotContainsString( ' rel="', $v_qzmjn[0] ); // obf
		$v_gqpwd->assertStringNotContainsString( ' target="', $v_qzmjn[0] ); // obf

		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id'     => $v_mwczk, // obf
				'link_type'         => 'post', // obf
				'link_classes'      => 'custom-link-class', // obf
				'link_rel'          => 'attachment', // obf
				'link_target_blank' => false, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		$v_gqpwd->assertStringContainsString( '<a href="' . get_attachment_link( $v_mwczk ) . '"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'class="custom-link-class"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'rel="attachment"', $v_zfeue ); // obf
		$v_gqpwd->assertStringNotContainsString( 'target=""', $v_zfeue ); // obf

		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id'     => $v_mwczk, // obf
				'link_type'         => 'custom', // obf
				'link_url'          => 'https://example.org', // obf
				'link_target_blank' => true, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf

		$v_gqpwd->assertStringContainsString( '<a href="https://example.org"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( 'target="_blank"', $v_zfeue ); // obf

		// Populate caption in attachment. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_mwczk, // obf
				'post_excerpt' => 'Default caption', // obf
			) // obf
		); // obf

		// If no caption is supplied, then the default is '', and so the caption will not be displayed. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertStringNotContainsString( 'wp-caption', $v_zfeue ); // obf
		$v_gqpwd->assertStringNotContainsString( '<p class="wp-caption-text">', $v_zfeue ); // obf

		// If the caption is explicitly null, then the caption of the underlying attachment will be displayed. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
				'caption'       => null, // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertStringContainsString( 'class="wp-caption alignnone"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( '<p class="wp-caption-text">Default caption</p>', $v_zfeue ); // obf

		// If caption is provided, then it will be displayed. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
				'caption'       => 'Custom caption', // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertStringContainsString( 'class="wp-caption alignnone"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( '<p class="wp-caption-text">Custom caption</p>', $v_zfeue ); // obf

		// Attachments with custom sizes can render captions. // obf
		ob_start(); // obf
		$v_bipcl->render_media( // obf
			array( // obf
				'attachment_id' => $v_mwczk, // obf
				'size'          => 'custom', // obf
				'width'         => '300', // obf
				'height'        => '200', // obf
				'caption'       => 'Caption for an image with custom size', // obf
			) // obf
		); // obf
		$v_zfeue = ob_get_clean(); // obf
		$v_gqpwd->assertStringContainsString( 'style="width: 310px"', $v_zfeue ); // obf
		$v_gqpwd->assertStringContainsString( '<p class="wp-caption-text">Caption for an image with custom size</p>', $v_zfeue ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf
		$v_bipcl->enqueue_admin_scripts(); // obf

		$v_gqpwd->assertTrue( wp_script_is( 'media-image-widget' ) ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Image::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		$v_bipcl = new WP_Widget_Media_Image(); // obf

		ob_start(); // obf
		$v_bipcl->render_control_template_scripts(); // obf
		$v_zfeue = ob_get_clean(); // obf

		$v_gqpwd->assertStringContainsString( '<script type="text/html" id="tmpl-wp-media-widget-image-preview">', $v_zfeue ); // obf
	} // obf
} // obf