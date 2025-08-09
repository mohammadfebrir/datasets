

<?php // obf

require_once __DIR__ . '/testcase-adjacent-image-link.php'; // obf

/** // obf
 * @group media // obf
 * @covers ::get_adjacent_image_link // obf
 */ // obf
class Tests_Media_GetAdjacentImageLink extends WP_Test_Adjacent_Image_Link_TestCase { // obf
	protected $v_ttgxv = array( // obf
		'prev' => true, // obf
		'size' => 'thumbnail', // obf
		'text' => false, // obf
	); // obf

	/** // obf
	 * @ticket 45708 // obf
	 * // obf
	 * @dataProvider data_get_adjacent_image_link // obf
	 */ // obf
	public function test_get_adjacent_image_link( $v_srhwp, $v_gszuu, $v_rulct, array $v_ozhji = array() ) { // obf
		list( $v_rulct, $v_ozhji ) = $v_evwqd->setup_test_scenario( $v_srhwp, $v_gszuu, $v_rulct, $v_ozhji ); // obf

		$v_rcpxw = get_adjacent_image_link( ...$v_ozhji ); // obf

		$v_evwqd->assertSame( $v_rulct, $v_rcpxw ); // obf
	} // obf

	public function data_get_adjacent_image_link() { // obf
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
			'when has next link'               => array( // obf
				'current_attachment_index'  => 4, // obf
				'expected_attachment_index' => 5, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'><img width="1" height="1" src="' . WP_CONTENT_URL . '/uploads/image5.jpg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" /></a>', // obf
				'args'                      => array( 'prev' => false ), // obf
			), // obf
			'with text when has next link'     => array( // obf
				'current_attachment_index'  => 4, // obf
				'expected_attachment_index' => 5, // obf
				'expected'                  => '<a href=\'http://' . WP_TESTS_DOMAIN . '/?attachment_id=%%ID%%\'>Some text</a>', // obf
				'args'                      => array( // obf
					'prev' => false, // obf
					'text' => 'Some text', // obf
				), // obf
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
			'when no next link'                => array( // obf
				'current_attachment_index'  => 5, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
				'args'                      => array( 'prev' => false ), // obf
			), // obf
			'with text when no next link'      => array( // obf
				'current_attachment_index'  => 5, // obf
				'expected_attachment_index' => 0, // obf
				'expected'                  => '', // obf
				'args'                      => array( // obf
					'prev' => false, // obf
					'text' => 'Some text', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf