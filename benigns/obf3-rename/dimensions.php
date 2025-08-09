

<?php // obf

/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 */ // obf
class Tests_Image_Dimensions extends WP_UnitTestCase { // obf
	public function test_400x400_no_crop() { // obf
		// Landscape: resize 640x480 to fit 400x400: 400x300. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 400, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 300, 640, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400x400: 300x400. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 400, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 300, 400, 480, 640 ), $v_sttfw ); // obf
	} // obf

	public function test_400x0_no_crop() { // obf
		// Landscape: resize 640x480 to fit 400w: 400x300. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 0, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 300, 640, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400w: 400x533. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 0, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 533, 480, 640 ), $v_sttfw ); // obf
	} // obf

	public function test_0x400_no_crop() { // obf
		// Landscape: resize 640x480 to fit 400h: 533x400. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 0, 400, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 533, 400, 640, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400h: 300x400. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 0, 400, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 300, 400, 480, 640 ), $v_sttfw ); // obf
	} // obf

	public function test_800x800_no_crop() { // obf
		// Landscape: resize 640x480 to fit 800x800. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 800, 800, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 800x800. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 800, 800, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf
	} // obf

	public function test_800x0_no_crop() { // obf
		// Landscape: resize 640x480 to fit 800w. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 800, 0, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 800w. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 800, 0, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf
	} // obf

	public function test_0x800_no_crop() { // obf
		// Landscape: resize 640x480 to fit 800h. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 0, 800, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 800h. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 0, 800, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf
	} // obf

	// Cropped versions. // obf

	public function test_400x400_crop() { // obf
		// Landscape: crop 640x480 to fit 400x400: 400x400 taken from a 480x480 crop at (80. 0). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 400, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 80, 0, 400, 400, 480, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400x400: 400x400 taken from a 480x480 crop at (0. 80). // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 400, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 80, 400, 400, 480, 480 ), $v_sttfw ); // obf
	} // obf

	public function test_400x0_crop() { // obf
		// Landscape: resize 640x480 to fit 400w: 400x300. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 0, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 300, 640, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400w: 400x533. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 0, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 533, 480, 640 ), $v_sttfw ); // obf
	} // obf

	public function test_0x400_crop() { // obf
		// Landscape: resize 640x480 to fit 400h: 533x400. // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 0, 400, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 533, 400, 640, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400h: 300x400. // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 0, 400, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 300, 400, 480, 640 ), $v_sttfw ); // obf
	} // obf

	public function test_400x500_crop() { // obf
		// Landscape: crop 640x480 to fit 400x500: 400x400 taken from a 480x480 crop at (80. 0). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 500, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 120, 0, 400, 480, 400, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400x400: 400x400 taken from a 480x480 crop at (0. 80). // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 500, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 20, 400, 500, 480, 600 ), $v_sttfw ); // obf
	} // obf

	public function test_640x480() { // obf
		// Crop 640x480 to fit 640x480 (no change). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 640, 480, true ); // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf

		// Resize 640x480 to fit 640x480 (no change). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 640, 480, false ); // obf
		$v_gkzzl->assertFalse( $v_sttfw ); // obf

		// Test with the filter override. // obf
		add_filter( 'wp_image_resize_identical_dimensions', '__return_true' ); // obf

		// Crop 640x480 to fit 640x480 (no change). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 640, 480, true ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 640, 480, 640, 480 ), $v_sttfw ); // obf

		// Resize 640x480 to fit 640x480 (no change). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 640, 480, false ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 640, 480, 640, 480 ), $v_sttfw ); // obf

		remove_filter( 'wp_image_resize_identical_dimensions', '__return_true' ); // obf
	} // obf

	/** // obf
	 * @ticket 19393 // obf
	 */ // obf
	public function test_crop_anchors() { // obf
		// Landscape: crop 640x480 to fit 400x500: 400x400 taken from a 480x480 crop. // obf
		// src_x = 0 (left), src_y = 0 (top). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 500, array( 'left', 'top' ) ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 480, 400, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400x400: 400x400 taken from a 480x480 crop. // obf
		// src_x = 0 (left), src_y = 0 (top). // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 500, array( 'left', 'top' ) ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 0, 400, 500, 480, 600 ), $v_sttfw ); // obf

		// Landscape: crop 640x480 to fit 400x500: 400x400 taken from a 480x480 crop. // obf
		// src_x = 240 (left), src_y = 0 (due to landscape crop). // obf
		$v_sttfw = image_resize_dimensions( 640, 480, 400, 500, array( 'right', 'bottom' ) ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 240, 0, 400, 480, 400, 480 ), $v_sttfw ); // obf

		// Portrait: resize 480x640 to fit 400x400: 400x400 taken from a 480x480 crop. // obf
		// src_x = 0 (due to portrait crop), src_y = 40 (bottom). // obf
		$v_sttfw = image_resize_dimensions( 480, 640, 400, 500, array( 'right', 'bottom' ) ); // obf
		// dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h. // obf
		$v_gkzzl->assertSame( array( 0, 0, 0, 40, 400, 500, 480, 600 ), $v_sttfw ); // obf
	} // obf
} // obf