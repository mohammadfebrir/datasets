

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_Media_Gallery functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-media-gallery.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetMediaGallery extends WP_UnitTestCase { // obf

	/** // obf
	 * Clean up global scope. // obf
	 * // obf
	 * @global WP_Scripts $v_uqgbh // obf
	 * @global WP_Styles $v_evmdp // obf
	 */ // obf
	public function clean_up_global_scope() { // obf
		global $v_uqgbh, $v_evmdp; // obf
		parent::clean_up_global_scope(); // obf
		$v_uqgbh = null; // obf
		$v_evmdp  = null; // obf
	} // obf

	/** // obf
	 * Test get_instance_schema method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Gallery::get_instance_schema // obf
	 */ // obf
	public function test_get_instance_schema() { // obf
		$v_iiexh = new WP_Widget_Media_Gallery(); // obf
		$v_jyoer = $v_iiexh->get_instance_schema(); // obf

		$v_qzkcf->assertSameSets( // obf
			array( // obf
				'title', // obf
				'ids', // obf
				'columns', // obf
				'size', // obf
				'link_type', // obf
				'orderby_random', // obf
			), // obf
			array_keys( $v_jyoer ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test update() method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Gallery::render_media // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_render_media() { // obf
		$v_iiexh = new WP_Widget_Media_Gallery(); // obf

		$v_shjgu = array(); // obf
		foreach ( array( 'canola.jpg', 'waffles.jpg' ) as $v_lwssk ) { // obf
			$v_sdgjw = get_temp_dir() . $v_lwssk; // obf
			copy( DIR_TESTDATA . '/images/canola.jpg', $v_sdgjw ); // obf
			$v_gvpdi = self::factory()->attachment->create_object( // obf
				array( // obf
					'file'           => $v_sdgjw, // obf
					'post_parent'    => 0, // obf
					'post_mime_type' => 'image/jpeg', // obf
					'post_title'     => 'Canola', // obf
				) // obf
			); // obf
			wp_update_attachment_metadata( $v_gvpdi, wp_generate_attachment_metadata( $v_gvpdi, $v_sdgjw ) ); // obf
			$v_shjgu[ $v_lwssk ] = $v_gvpdi; // obf
		} // obf

		$v_wdkpo            = wp_list_pluck( $v_iiexh->get_instance_schema(), 'default' ); // obf
		$v_wdkpo['size']    = 'thumbnail'; // obf
		$v_wdkpo['columns'] = 3; // obf
		$v_wdkpo['ids']     = array_values( $v_shjgu ); // obf
		ob_start(); // obf
		$v_iiexh->render_media( $v_wdkpo ); // obf
		$v_bpgye = ob_get_clean(); // obf

		$v_qzkcf->assertStringContainsString( 'gallery-columns-3', $v_bpgye ); // obf
		$v_qzkcf->assertStringContainsString( 'gallery-size-thumbnail', $v_bpgye ); // obf
		$v_qzkcf->assertStringContainsString( 'canola', $v_bpgye ); // obf
		$v_qzkcf->assertStringContainsString( 'waffles', $v_bpgye ); // obf
	} // obf

	/** // obf
	 * Test enqueue_admin_scripts() method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Gallery::enqueue_admin_scripts // obf
	 */ // obf
	public function test_enqueue_admin_scripts() { // obf
		set_current_screen( 'widgets.php' ); // obf
		$v_iiexh = new WP_Widget_Media_Gallery(); // obf

		$v_qzkcf->assertFalse( wp_script_is( 'media-gallery-widget' ) ); // obf

		$v_iiexh->enqueue_admin_scripts(); // obf

		$v_qzkcf->assertTrue( wp_script_is( 'media-gallery-widget' ) ); // obf

		$v_pxmpu = implode( '', wp_scripts()->registered['media-gallery-widget']->extra['after'] ); // obf
		$v_qzkcf->assertStringContainsString( 'wp.mediaWidgets.modelConstructors[ "media_gallery" ].prototype', $v_pxmpu ); // obf
	} // obf

	/** // obf
	 * Test update() method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Gallery::update // obf
	 */ // obf
	public function test_update() { // obf
		$v_iiexh   = new WP_Widget_Media_Gallery(); // obf
		$v_jyoer   = $v_iiexh->get_instance_schema(); // obf
		$v_wdkpo = wp_list_pluck( $v_jyoer, 'default' ); // obf

		// Field: title. // obf
		$v_wdkpo['title'] = 'Hello <b>World</b> '; // obf
		$v_wdkpo          = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( 'Hello World', $v_wdkpo['title'] ); // obf

		// Field: ids. // obf
		$v_wdkpo['ids'] = '1,2,3'; // obf
		$v_wdkpo        = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( array( 1, 2, 3 ), $v_wdkpo['ids'] ); // obf

		$v_wdkpo['ids'] = array( 1, 2, '3' ); // obf
		$v_wdkpo        = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( array( 1, 2, 3 ), $v_wdkpo['ids'] ); // obf

		$v_wdkpo['ids'] = array( 'too', 'bad' ); // obf
		$v_wdkpo        = $v_iiexh->update( $v_wdkpo, array( 'ids' => array( 2, 3 ) ) ); // obf
		$v_qzkcf->assertSame( array( 2, 3 ), $v_wdkpo['ids'] ); // obf

		// Field: columns. // obf
		$v_wdkpo['columns'] = 4; // obf
		$v_wdkpo            = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( 4, $v_wdkpo['columns'] ); // obf

		$v_wdkpo['columns'] = '2'; // obf
		$v_wdkpo            = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( 2, $v_wdkpo['columns'] ); // obf

		$v_wdkpo['columns'] = -1; // Under min of 1. // obf
		$v_wdkpo            = $v_iiexh->update( $v_wdkpo, array( 'columns' => 3 ) ); // obf
		$v_qzkcf->assertSame( 3, $v_wdkpo['columns'] ); // obf

		$v_wdkpo['columns'] = 10; // Over max of 9. // obf
		$v_wdkpo            = $v_iiexh->update( $v_wdkpo, array( 'columns' => 3 ) ); // obf
		$v_qzkcf->assertSame( 3, $v_wdkpo['columns'] ); // obf

		// Field: size. // obf
		$v_wdkpo['size'] = 'large'; // obf
		$v_wdkpo         = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( 'large', $v_wdkpo['size'] ); // obf

		$v_wdkpo['size'] = 'bad'; // obf
		$v_wdkpo         = $v_iiexh->update( $v_wdkpo, array( 'size' => 'thumbnail' ) ); // obf
		$v_qzkcf->assertSame( 'thumbnail', $v_wdkpo['size'] ); // obf

		// Field: link_type. // obf
		$v_wdkpo['link_type'] = 'none'; // obf
		$v_wdkpo              = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertSame( 'none', $v_wdkpo['link_type'] ); // obf

		$v_wdkpo['link_type'] = 'unknown'; // obf
		$v_wdkpo              = $v_iiexh->update( $v_wdkpo, array( 'link_type' => 'file' ) ); // obf
		$v_qzkcf->assertSame( 'file', $v_wdkpo['link_type'] ); // obf

		// Field: orderby_random. // obf
		$v_wdkpo['orderby_random'] = '1'; // obf
		$v_wdkpo                   = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertTrue( $v_wdkpo['orderby_random'] ); // obf

		$v_wdkpo['orderby_random'] = true; // obf
		$v_wdkpo                   = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertTrue( $v_wdkpo['orderby_random'] ); // obf

		$v_wdkpo['orderby_random'] = ''; // obf
		$v_wdkpo                   = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertFalse( $v_wdkpo['orderby_random'] ); // obf

		$v_wdkpo['orderby_random'] = false; // obf
		$v_wdkpo                   = $v_iiexh->update( $v_wdkpo, array() ); // obf
		$v_qzkcf->assertFalse( $v_wdkpo['orderby_random'] ); // obf
	} // obf

	/** // obf
	 * Test render_control_template_scripts() method. // obf
	 * // obf
	 * @covers WP_Widget_Media_Gallery::render_control_template_scripts // obf
	 */ // obf
	public function test_render_control_template_scripts() { // obf
		$v_iiexh = new WP_Widget_Media_Gallery(); // obf

		ob_start(); // obf
		$v_iiexh->render_control_template_scripts(); // obf
		$v_bpgye = ob_get_clean(); // obf

		$v_qzkcf->assertStringContainsString( '<script type="text/html" id="tmpl-wp-media-widget-gallery-preview">', $v_bpgye ); // obf
	} // obf
} // obf