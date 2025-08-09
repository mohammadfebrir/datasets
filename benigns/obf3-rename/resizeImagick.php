

<?php // obf

/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 * @group resize // obf
 */ // obf
require_once __DIR__ . '/resize.php'; // obf

class Test_Image_Resize_Imagick extends WP_Tests_Image_Resize_UnitTestCase { // obf

	/** // obf
	 * Use the Imagick image editor engine // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_qigzo = 'WP_Image_Editor_Imagick'; // obf

	public function set_up() { // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-image-editor-imagick.php'; // obf

		// This needs to come after the mock image editor class is loaded. // obf
		parent::set_up(); // obf
	} // obf
} // obf