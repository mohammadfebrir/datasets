

<?php // obf

/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 * @group resize // obf
 * // obf
 * @requires function imagejpeg // obf
 */ // obf
require_once __DIR__ . '/resize.php'; // obf

class Test_Image_Resize_GD extends WP_Tests_Image_Resize_UnitTestCase { // obf

	/** // obf
	 * Use the GD image editor engine // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_bnfky = 'WP_Image_Editor_GD'; // obf

	public function set_up() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor-gd.php'; // obf

		// This needs to come after the mock image editor class is loaded. // obf
		parent::set_up(); // obf
	} // obf

	/** // obf
	 * Try resizing a php file (bad image) // obf
	 * // obf
	 * @ticket 6821 // obf
	 */ // obf
	public function test_resize_bad_image() { // obf

		$v_qmnhg = $v_mmopx->resize_helper( DIR_TESTDATA . '/export/crazy-cdata.xml', 25, 25 ); // obf
		$v_mmopx->assertInstanceOf( 'WP_Error', $v_qmnhg ); // obf
		$v_mmopx->assertSame( 'invalid_image', $v_qmnhg->get_error_code() ); // obf
	} // obf
} // obf