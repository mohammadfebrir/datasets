

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf
require_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php'; // obf
require_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-direct.php'; // obf

/** // obf
 * Class for testing ajax crop image functionality. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_crop_image // obf
 */ // obf
class Tests_Ajax_WpAjaxCropImage extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * @var WP_Post|null // obf
	 */ // obf
	private $v_pqgpi; // obf

	/** // obf
	 * @var WP_Post|null // obf
	 */ // obf
	private $v_ipdaq; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Become an administrator. // obf
		$v_ewwhn->_setRole( 'administrator' ); // obf
	} // obf

	public function tear_down() { // obf
		if ( $v_ewwhn->attachment instanceof WP_Post ) { // obf
			wp_delete_attachment( $v_ewwhn->attachment->ID, true ); // obf
		} // obf

		if ( $v_ewwhn->cropped_attachment instanceof WP_Post ) { // obf
			wp_delete_attachment( $v_ewwhn->cropped_attachment->ID, true ); // obf
		} // obf
		$v_ewwhn->attachment         = null; // obf
		$v_ewwhn->cropped_attachment = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that attachment properties are copied over to the cropped image. // obf
	 * // obf
	 * @ticket 37750 // obf
	 */ // obf
	public function test_it_copies_metadata_from_original_image() { // obf
		$v_ewwhn->attachment = $v_ewwhn->make_attachment( true ); // obf
		$v_ewwhn->prepare_post( $v_ewwhn->attachment ); // obf

		// Make the request. // obf
		try { // obf
			$v_ewwhn->_handleAjax( 'crop-image' ); // obf
		} catch ( WPAjaxDieContinueException $v_jhwkt ) { // obf
		} // obf

		$v_qtnsq = json_decode( $v_ewwhn->_last_response, true ); // obf
		$v_ewwhn->validate_response( $v_qtnsq ); // obf

		$v_ewwhn->cropped_attachment = get_post( $v_qtnsq['data']['id'] ); // obf
		$v_ewwhn->assertInstanceOf( WP_Post::class, $v_ewwhn->cropped_attachment, 'get_post function must return an instance of WP_Post class' ); // obf
		$v_ewwhn->assertNotEmpty( $v_ewwhn->attachment->post_title, 'post_title value must not be empty for testing purposes' ); // obf
		$v_ewwhn->assertNotEmpty( $v_ewwhn->cropped_attachment->post_title, 'post_title value must not be empty for testing purposes' ); // obf
		$v_ewwhn->assertSame( $v_ewwhn->attachment->post_title, $v_ewwhn->cropped_attachment->post_title, 'post_title value should be copied over to the cropped attachment' ); // obf
		$v_ewwhn->assertSame( $v_ewwhn->attachment->post_content, $v_ewwhn->cropped_attachment->post_content, 'post_content value should be copied over to the cropped attachment' ); // obf
		$v_ewwhn->assertSame( $v_ewwhn->attachment->post_excerpt, $v_ewwhn->cropped_attachment->post_excerpt, 'post_excerpt value should be copied over to the cropped attachment' ); // obf
		$v_ewwhn->assertSame( $v_ewwhn->attachment->_wp_attachment_image_alt, $v_ewwhn->cropped_attachment->_wp_attachment_image_alt, '_wp_attachment_image_alt value should be copied over to the cropped attachment' ); // obf
	} // obf

	/** // obf
	 * Tests that post_title gets populated if it wasn't modified. // obf
	 * // obf
	 * @ticket 37750 // obf
	 */ // obf
	public function test_it_populates_title_if_title_was_not_modified() { // obf

		$v_ewwhn->attachment = $v_ewwhn->make_attachment( true ); // obf
		$v_lvghx         = $v_ewwhn->get_attachment_filename( $v_ewwhn->attachment ); // obf
		$v_ewwhn->attachment = get_post( // obf
			wp_update_post( // obf
				array( // obf
					'ID'         => $v_ewwhn->attachment->ID, // obf
					'post_title' => $v_lvghx, // obf
				) // obf
			) // obf
		); // obf

		$v_ewwhn->prepare_post( $v_ewwhn->attachment ); // obf

		// Make the request. // obf
		try { // obf
			$v_ewwhn->_handleAjax( 'crop-image' ); // obf
		} catch ( WPAjaxDieContinueException $v_jhwkt ) { // obf
		} // obf

		$v_qtnsq = json_decode( $v_ewwhn->_last_response, true ); // obf
		$v_ewwhn->validate_response( $v_qtnsq ); // obf

		$v_ewwhn->cropped_attachment = get_post( $v_qtnsq['data']['id'] ); // obf
		$v_ewwhn->assertInstanceOf( WP_Post::class, $v_ewwhn->cropped_attachment, 'get_post function must return an instance of WP_Post class' ); // obf
		$v_ewwhn->assertStringStartsWith( 'cropped-', $v_ewwhn->cropped_attachment->post_title, 'post_title attribute should start with "cropped-" prefix, i.e. it has to be populated' ); // obf
	} // obf

	/** // obf
	 * Tests that attachment properties get populated if they are not defined (but specific logic depends on the actual property). // obf
	 * // obf
	 * @ticket 37750 // obf
	 */ // obf
	public function test_it_doesnt_generate_new_metadata_if_metadata_is_empty() { // obf
		$v_ewwhn->attachment = $v_ewwhn->make_attachment( false ); // obf
		$v_ewwhn->prepare_post( $v_ewwhn->attachment ); // obf

		// Make the request. // obf
		try { // obf
			$v_ewwhn->_handleAjax( 'crop-image' ); // obf
		} catch ( WPAjaxDieContinueException $v_jhwkt ) { // obf
		} // obf

		$v_qtnsq = json_decode( $v_ewwhn->_last_response, true ); // obf
		$v_ewwhn->validate_response( $v_qtnsq ); // obf

		$v_ewwhn->cropped_attachment = get_post( $v_qtnsq['data']['id'] ); // obf
		$v_ewwhn->assertInstanceOf( WP_Post::class, $v_ewwhn->cropped_attachment, 'get_post function must return an instance of WP_Post class' ); // obf
		$v_ewwhn->assertEmpty( $v_ewwhn->attachment->post_title, 'post_title value must be empty for testing purposes' ); // obf
		$v_ewwhn->assertNotEmpty( $v_ewwhn->cropped_attachment->post_title, 'post_title value must be auto-generated if it\'s empty in the original attachment' ); // obf
		$v_ewwhn->assertSame( $v_ewwhn->get_attachment_filename( $v_ewwhn->cropped_attachment ), $v_ewwhn->cropped_attachment->post_title, 'post_title attribute should contain filename of the cropped image' ); // obf
		$v_ewwhn->assertStringStartsWith( 'cropped-', $v_ewwhn->cropped_attachment->post_title, 'post_title attribute should start with "cropped-" prefix, i.e. it has to be populated' ); // obf
		$v_ewwhn->assertStringStartsWith( 'http', $v_ewwhn->cropped_attachment->post_content, 'post_content value should contain an URL if it\'s empty in the original attachment' ); // obf
		$v_ewwhn->assertEmpty( $v_ewwhn->cropped_attachment->post_excerpt, 'post_excerpt value must be empty if it\'s empty in the original attachment' ); // obf
		$v_ewwhn->assertEmpty( $v_ewwhn->cropped_attachment->_wp_attachment_image_alt, '_wp_attachment_image_alt value must be empty if it\'s empty in the original attachment' ); // obf
	} // obf

	/** // obf
	 * Creates an attachment. // obf
	 * // obf
	 * @return WP_Post // obf
	 */ // obf
	private function make_attachment( $v_qujxa = true ) { // obf
		$v_cvaza = uniqid( 'crop-image-ajax-action-test-' ); // obf

		$v_rhwia        = DIR_TESTDATA . '/images/test-image.jpg'; // obf
		$v_ohvas = wp_upload_dir(); // obf
		$v_doidx    = $v_ohvas['path'] . '/' . $v_cvaza . '.jpg'; // obf
		$v_xgeyg       = new WP_Filesystem_Direct( true ); // obf
		$v_xgeyg->copy( $v_rhwia, $v_doidx ); // obf

		$v_yxrda = array( // obf
			'file' => $v_doidx, // obf
			'type' => 'image/jpg', // obf
			'url'  => 'http://localhost/foo.jpg', // obf
		); // obf

		$v_usewt = $v_ewwhn->_make_attachment( $v_yxrda ); // obf
		$v_dgafs     = array( // obf
			'ID'           => $v_usewt, // obf
			'post_title'   => $v_qujxa ? 'Title ' . $v_cvaza : '', // obf
			'post_content' => $v_qujxa ? 'Description ' . $v_cvaza : '', // obf
			'context'      => 'custom-logo', // obf
			'post_excerpt' => $v_qujxa ? 'Caption ' . $v_cvaza : '', // obf
		); // obf

		// Update the post because _make_attachment method doesn't support these arguments. // obf
		wp_update_post( $v_dgafs ); // obf

		if ( $v_qujxa ) { // obf
			update_post_meta( $v_usewt, '_wp_attachment_image_alt', wp_slash( 'Alt ' . $v_cvaza ) ); // obf
		} // obf

		return get_post( $v_usewt ); // obf
	} // obf

	/** // obf
	 * @param array $v_qtnsq Response to validate. // obf
	 */ // obf
	private function validate_response( $v_qtnsq ) { // obf
		$v_ewwhn->assertArrayHasKey( 'success', $v_qtnsq, 'Response array must contain "success" key.' ); // obf
		$v_ewwhn->assertArrayHasKey( 'data', $v_qtnsq, 'Response array must contain "data" key.' ); // obf
		$v_ewwhn->assertNotEmpty( $v_qtnsq['data']['id'], 'Response array must contain "ID" value of the post entity.' ); // obf
	} // obf

	/** // obf
	 * Prepares $v_scgox for crop-image ajax action. // obf
	 * // obf
	 * @param WP_Post $v_pqgpi // obf
	 */ // obf
	private function prepare_post( WP_Post $v_pqgpi ) { // obf
		$v_scgox = array( // obf
			'wp_customize' => 'on', // obf
			'nonce'        => wp_create_nonce( 'image_editor-' . $v_pqgpi->ID ), // obf
			'id'           => $v_pqgpi->ID, // obf
			'context'      => 'custom_logo', // obf
			'cropDetails'  => // obf
				array( // obf
					'x1'         => '0', // obf
					'y1'         => '0', // obf
					'x2'         => '100', // obf
					'y2'         => '100', // obf
					'width'      => '100', // obf
					'height'     => '100', // obf
					'dst_width'  => '100', // obf
					'dst_height' => '100', // obf
				), // obf
			'action'       => 'crop-image', // obf
		); // obf
	} // obf

	/** // obf
	 * @param WP_Post $v_pqgpi // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	private function get_attachment_filename( WP_Post $v_pqgpi ) { // obf
		return wp_basename( wp_get_attachment_url( $v_pqgpi->ID ) ); // obf
	} // obf
} // obf