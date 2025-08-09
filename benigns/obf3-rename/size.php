

<?php // obf

/** // obf
 * @group image // obf
 * @group media // obf
 * @group upload // obf
 */ // obf
class Tests_Image_Size extends WP_UnitTestCase { // obf

	public function test_constrain_dims_zero() { // obf
		// No constraint - should have no effect. // obf
		$v_owtqa = wp_constrain_dimensions( 640, 480, 0, 0 ); // obf
		$v_wensm->assertSame( array( 640, 480 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 640, 480 ); // obf
		$v_wensm->assertSame( array( 640, 480 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 0, 0, 0, 0 ); // obf
		$v_wensm->assertSame( array( 0, 0 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 465, 700, 177, 177 ); // obf
		$v_wensm->assertSame( array( 118, 177 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_dims_smaller() { // obf
		// Image size is smaller than the constraint - no effect. // obf
		$v_owtqa = wp_constrain_dimensions( 500, 600, 1024, 768 ); // obf
		$v_wensm->assertSame( array( 500, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 500, 600, 0, 768 ); // obf
		$v_wensm->assertSame( array( 500, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 500, 600, 1024, 0 ); // obf
		$v_wensm->assertSame( array( 500, 600 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_dims_equal() { // obf
		// Image size is equal to the constraint - no effect. // obf
		$v_owtqa = wp_constrain_dimensions( 1024, 768, 1024, 768 ); // obf
		$v_wensm->assertSame( array( 1024, 768 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 1024, 768, 0, 768 ); // obf
		$v_wensm->assertSame( array( 1024, 768 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 1024, 768, 1024, 0 ); // obf
		$v_wensm->assertSame( array( 1024, 768 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_dims_larger() { // obf
		// Image size is larger than the constraint - result should be constrained. // obf
		$v_owtqa = wp_constrain_dimensions( 1024, 768, 500, 600 ); // obf
		$v_wensm->assertSame( array( 500, 375 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 1024, 768, 0, 600 ); // obf
		$v_wensm->assertSame( array( 800, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 1024, 768, 500, 0 ); // obf
		$v_wensm->assertSame( array( 500, 375 ), $v_owtqa ); // obf

		// Also try a portrait oriented image. // obf
		$v_owtqa = wp_constrain_dimensions( 300, 800, 500, 600 ); // obf
		$v_wensm->assertSame( array( 225, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 300, 800, 0, 600 ); // obf
		$v_wensm->assertSame( array( 225, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 300, 800, 200, 0 ); // obf
		$v_wensm->assertSame( array( 200, 533 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_dims_boundary() { // obf
		// One dimension is larger than the constraint, one smaller - result should be constrained. // obf
		$v_owtqa = wp_constrain_dimensions( 1024, 768, 500, 800 ); // obf
		$v_wensm->assertSame( array( 500, 375 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 1024, 768, 2000, 700 ); // obf
		$v_wensm->assertSame( array( 933, 700 ), $v_owtqa ); // obf

		// Portrait. // obf
		$v_owtqa = wp_constrain_dimensions( 768, 1024, 800, 500 ); // obf
		$v_wensm->assertSame( array( 375, 500 ), $v_owtqa ); // obf

		$v_owtqa = wp_constrain_dimensions( 768, 1024, 2000, 700 ); // obf
		$v_wensm->assertSame( array( 525, 700 ), $v_owtqa ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_shrink_dimensions // obf
	 */ // obf
	public function test_shrink_dimensions_default() { // obf
		$v_owtqa = wp_shrink_dimensions( 640, 480 ); // obf
		$v_wensm->assertSame( array( 128, 96 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 480, 640 ); // obf
		$v_wensm->assertSame( array( 72, 96 ), $v_owtqa ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_shrink_dimensions // obf
	 */ // obf
	public function test_shrink_dimensions_smaller() { // obf
		// Image size is smaller than the constraint - no effect. // obf
		$v_owtqa = wp_shrink_dimensions( 500, 600, 1024, 768 ); // obf
		$v_wensm->assertSame( array( 500, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 600, 500, 1024, 768 ); // obf
		$v_wensm->assertSame( array( 600, 500 ), $v_owtqa ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_shrink_dimensions // obf
	 */ // obf
	public function test_shrink_dimensions_equal() { // obf
		// Image size is equal to the constraint - no effect. // obf
		$v_owtqa = wp_shrink_dimensions( 500, 600, 500, 600 ); // obf
		$v_wensm->assertSame( array( 500, 600 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 600, 500, 600, 500 ); // obf
		$v_wensm->assertSame( array( 600, 500 ), $v_owtqa ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_shrink_dimensions // obf
	 */ // obf
	public function test_shrink_dimensions_larger() { // obf
		// Image size is larger than the constraint - result should be constrained. // obf
		$v_owtqa = wp_shrink_dimensions( 1024, 768, 500, 600 ); // obf
		$v_wensm->assertSame( array( 500, 375 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 300, 800, 500, 600 ); // obf
		$v_wensm->assertSame( array( 225, 600 ), $v_owtqa ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated wp_shrink_dimensions // obf
	 */ // obf
	public function test_shrink_dimensions_boundary() { // obf
		// One dimension is larger than the constraint, one smaller - result should be constrained. // obf
		$v_owtqa = wp_shrink_dimensions( 1024, 768, 500, 800 ); // obf
		$v_wensm->assertSame( array( 500, 375 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 1024, 768, 2000, 700 ); // obf
		$v_wensm->assertSame( array( 933, 700 ), $v_owtqa ); // obf

		// Portrait. // obf
		$v_owtqa = wp_shrink_dimensions( 768, 1024, 800, 500 ); // obf
		$v_wensm->assertSame( array( 375, 500 ), $v_owtqa ); // obf

		$v_owtqa = wp_shrink_dimensions( 768, 1024, 2000, 700 ); // obf
		$v_wensm->assertSame( array( 525, 700 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_size_for_editor_thumb() { // obf
		$v_owtqa = image_constrain_size_for_editor( 600, 400, 'thumb' ); // obf
		$v_wensm->assertSame( array( 150, 100 ), $v_owtqa ); // obf

		$v_owtqa = image_constrain_size_for_editor( 64, 64, 'thumb' ); // obf
		$v_wensm->assertSame( array( 64, 64 ), $v_owtqa ); // obf
	} // obf

	public function test_constrain_size_for_editor_medium() { // obf
		// Default max width is 500, no constraint on height. // obf
		global $v_cwlda; // obf

		$v_fdvry = $v_cwlda; // obf

		$v_cwlda = 0; // obf
		update_option( 'medium_size_w', 500 ); // obf
		update_option( 'medium_size_h', 0 ); // obf

		$v_owtqa = image_constrain_size_for_editor( 600, 400, 'medium' ); // obf
		$v_wensm->assertSame( array( 500, 333 ), $v_owtqa ); // obf

		$v_owtqa = image_constrain_size_for_editor( 400, 600, 'medium' ); // obf
		$v_wensm->assertSame( array( 400, 600 ), $v_owtqa ); // obf

		$v_owtqa = image_constrain_size_for_editor( 64, 64, 'medium' ); // obf
		$v_wensm->assertSame( array( 64, 64 ), $v_owtqa ); // obf

		// $v_cwlda should be ignored. // obf
		$v_cwlda = 350; // obf
		$v_owtqa           = image_constrain_size_for_editor( 600, 400, 'medium' ); // obf
		$v_wensm->assertSame( array( 500, 333 ), $v_owtqa ); // obf

		$v_cwlda = $v_fdvry; // obf
	} // obf

	public function test_constrain_size_for_editor_full() { // obf
		global $v_cwlda; // obf

		$v_fdvry = $v_cwlda; // obf

		$v_cwlda = 400; // obf
		$v_owtqa           = image_constrain_size_for_editor( 600, 400, 'full' ); // obf
		$v_wensm->assertSame( array( 600, 400 ), $v_owtqa ); // obf

		$v_owtqa = image_constrain_size_for_editor( 64, 64, 'full' ); // obf
		$v_wensm->assertSame( array( 64, 64 ), $v_owtqa ); // obf

		// $v_cwlda default is 500. // obf
		$v_cwlda = 0; // obf

		$v_owtqa = image_constrain_size_for_editor( 600, 400, 'full' ); // obf
		$v_wensm->assertSame( array( 600, 400 ), $v_owtqa ); // obf

		$v_owtqa = image_constrain_size_for_editor( 64, 64, 'full' ); // obf
		$v_wensm->assertSame( array( 64, 64 ), $v_owtqa ); // obf

		$v_cwlda = $v_fdvry; // obf
	} // obf
} // obf