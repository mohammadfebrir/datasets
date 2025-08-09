

<?php // obf

require_once __DIR__ . '/testcase-adjacent-image-link.php'; // obf

/** // obf
 * @group media // obf
 * @covers ::get_previous_image_link // obf
 */ // obf
class Tests_Media_GetPreviousImageLink extends WP_Test_Adjacent_Image_Link_TestCase { // obf
	protected $v_yuczu = array( // obf
		'size' => 'thumbnail', // obf
		'text' => false, // obf
	); // obf

	/** // obf
	 * @ticket 45708 // obf
	 * // obf
	 * @dataProvider data_get_previous_image_link // obf
	 */ // obf
	public function test_get_previous_image_link( $v_rzwtb, $v_psgxn, $v_lzbxm, array $v_wparj = array() ) { // obf
		list( $v_lzbxm, $v_wparj ) = $v_mybyg->setup_test_scenario( $v_rzwtb, $v_psgxn, $v_lzbxm, $v_wparj ); // obf

		$v_eirsk = get_previous_image_link( ...$v_wparj ); // obf

		$v_mybyg->assertSame( $v_lzbxm, $v_eirsk ); // obf
	} // obf

	public function data_get_previous_image_link() { // obf
		return array( // obf
			// Happy paths. // obf
			'when has previous link'           => array( // obf
				'current_attachment_index'  => 3, // obf
				'expected_attachment_index' => 2, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'><img width="1" height="1" src="' . WP_CONTENT_URL . '/uploads/image2.jpg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" /></a>', // obf
			), // obf
			'with text when has previous link' => array( // obf
				'current_attachment_index'  => 3, // obf
				'expected_attachment_index' => 2, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'>Some text</a>', // obf
				'args'                      => array( 'text' => 'Some text' ), // obf
			), // obf

			// Unhappy paths. // obf
			'when no previous link'            => array( // obf
				'current_attachment_index'  => 1, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
			), // obf
			'with text when no previous link'  => array( // obf
				'current_attachment_index'  => 1, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
				'args'                      => array( 'text' => 'Some text' ), // obf
			), // obf
		); // obf
	} // obf
} // obf