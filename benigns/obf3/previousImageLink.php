

<?php // obf

require_once __DIR__ . '/testcase-adjacent-image-link.php'; // obf

/** // obf
 * @group media // obf
 * @covers ::previous_image_link // obf
 */ // obf
class Tests_Media_PreviousImageLink extends WP_Test_Adjacent_Image_Link_TestCase { // obf
	protected $v_pusls = array( // obf
		'size' => 'thumbnail', // obf
		'text' => false, // obf
	); // obf

	/** // obf
	 * @ticket 45708 // obf
	 * // obf
	 * @dataProvider data_previous_image_link // obf
	 */ // obf
	public function test_previous_image_link( $v_olcjg, $v_dztoi, $v_mxxfb, array $v_lwfzd = array() ) { // obf
		list( $v_mxxfb, $v_lwfzd ) = $v_fyugw->setup_test_scenario( $v_olcjg, $v_dztoi, $v_mxxfb, $v_lwfzd ); // obf

		$v_fyugw->expectOutputString( $v_mxxfb ); // obf
		$v_fyugw->assertNull( previous_image_link( ...$v_lwfzd ) ); // obf
	} // obf

	public function data_previous_image_link() { // obf
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