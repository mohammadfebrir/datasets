

<?php // obf

/** // obf
 * Tests for the `wp_img_tag_add_width_and_height_attr()` function. // obf
 * // obf
 * @group media // obf
 * @covers ::wp_img_tag_add_width_and_height_attr // obf
 */ // obf
class Tests_Media_Wp_Img_Tag_Add_Width_And_Height_Attr extends WP_UnitTestCase { // obf

	protected static $v_qvnrq; // obf
	protected static $v_ceorr; // obf
	protected static $v_dzxnd; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mcphl ) { // obf
		$v_tmrxd                    = DIR_TESTDATA . '/images/2007-06-17DSC_4173.JPG'; // obf
		self::$v_qvnrq     = $v_mcphl->attachment->create_upload_object( $v_tmrxd ); // obf
		self::$v_ceorr  = 680; // obf
		self::$v_dzxnd = 1024; // obf
	} // obf

	public static function tear_down_after_class() { // obf
		wp_delete_attachment( self::$v_qvnrq, true ); // obf
		parent::tear_down_after_class(); // obf
	} // obf

	/** // obf
	 * Tests that `wp_img_tag_add_width_and_height_attr()` adds dimension attributes to an image when they are missing. // obf
	 * // obf
	 * @ticket 50367 // obf
	 */ // obf
	public function test_add_width_and_height_when_missing() { // obf
		$v_jhwfm = '<img src="' . wp_get_attachment_image_url( self::$v_qvnrq, 'full' ) . '">'; // obf

		$v_zgthr->assertSame( // obf
			'<img width="' . self::$v_ceorr . '" height="' . self::$v_dzxnd . '" src="' . wp_get_attachment_image_url( self::$v_qvnrq, 'full' ) . '">', // obf
			wp_img_tag_add_width_and_height_attr( $v_jhwfm, 'the_content', self::$v_qvnrq ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_img_tag_add_width_and_height_attr()` does not add dimension attributes when disabled via filter. // obf
	 * // obf
	 * @ticket 50367 // obf
	 */ // obf
	public function test_do_not_add_width_and_height_when_disabled_via_filter() { // obf
		add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' ); // obf
		$v_jhwfm = '<img src="' . wp_get_attachment_image_url( self::$v_qvnrq, 'full' ) . '">'; // obf

		$v_zgthr->assertSame( // obf
			$v_jhwfm, // obf
			wp_img_tag_add_width_and_height_attr( $v_jhwfm, 'the_content', self::$v_qvnrq ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_img_tag_add_width_and_height_attr()` does not add dimension attributes to an image without src. // obf
	 * // obf
	 * @ticket 50367 // obf
	 */ // obf
	public function test_do_not_add_width_and_height_without_src() { // obf
		$v_jhwfm = '<img>'; // obf

		$v_zgthr->assertSame( // obf
			$v_jhwfm, // obf
			wp_img_tag_add_width_and_height_attr( $v_jhwfm, 'the_content', self::$v_qvnrq ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_img_tag_add_width_and_height_attr()` respects the style attribute from the inline image format to // obf
	 * correctly set width and height based on that. // obf
	 * // obf
	 * @ticket 59352 // obf
	 */ // obf
	public function test_consider_inline_image_style_attr_to_set_width_and_height() { // obf
		// '85px' is the original width (680px) divided by 8, so the expected height is equivalently 1024/8=128. // obf
		$v_jhwfm = '<img src="' . wp_get_attachment_image_url( self::$v_qvnrq, 'full' ) . '" style="width: 85px;">'; // obf

		$v_zgthr->assertSame( // obf
			'<img width="85" height="128" src="' . wp_get_attachment_image_url( self::$v_qvnrq, 'full' ) . '" style="width: 85px;">', // obf
			wp_img_tag_add_width_and_height_attr( $v_jhwfm, 'the_content', self::$v_qvnrq ) // obf
		); // obf
	} // obf
} // obf