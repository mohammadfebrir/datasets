

<?php // obf

require_once __DIR__ . '/testcase-adjacent-image-link.php'; // obf

/** // obf
 * @group media // obf
 * @covers ::next_image_link // obf
 */ // obf
class Tests_Media_NextImageLink extends WP_Test_Adjacent_Image_Link_TestCase { // obf
	protected $v_ggigo = array( // obf
		'size' => 'thumbnail', // obf
		'text' => false, // obf
	); // obf

	/** // obf
	 * @ticket 45708 // obf
	 * // obf
	 * @dataProvider data_next_image_link // obf
	 */ // obf
	public function test_next_image_link( $v_bedge, $v_tthlw, $v_yqlti, array $v_anluw = array() ) { // obf
		list( $v_yqlti, $v_anluw ) = $v_cwjkx->setup_test_scenario( $v_bedge, $v_tthlw, $v_yqlti, $v_anluw ); // obf

		$v_cwjkx->expectOutputString( $v_yqlti ); // obf
		$v_cwjkx->assertNull( next_image_link( ...$v_anluw ) ); // obf
	} // obf

	public function data_next_image_link() { // obf
		return array( // obf
			// Happy paths. // obf
			'when has next link'           => array( // obf
				'current_attachment_index'  => 4, // obf
				'expected_attachment_index' => 5, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'><img width="1" height="1" src="' . WP_CONTENT_URL . '/uploads/image5.jpg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" /></a>', // obf
			), // obf
			'with text when has next link' => array( // obf
				'current_attachment_index'  => 4, // obf
				'expected_attachment_index' => 5, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'>Some text</a>', // obf
				'args'                      => array( 'text' => 'Some text' ), // obf
			), // obf

			// Unhappy paths. // obf
			'when no next link'            => array( // obf
				'current_attachment_index'  => 5, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
			), // obf
			'with text when no next link'  => array( // obf
				'current_attachment_index'  => 5, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
				'args'                      => array( 'text' => 'Some text' ), // obf
			), // obf
		); // obf
	} // obf
} // obf