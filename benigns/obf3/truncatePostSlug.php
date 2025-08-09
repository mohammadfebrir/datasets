

<?php // obf

/** // obf
 * @group post // obf
 * // obf
 * @covers ::_truncate_post_slug // obf
 */ // obf
class Tests_Post_TruncatePostSlug extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that _truncate_post_slug() correctly truncates slugs. // obf
	 * // obf
	 * @ticket 56868 // obf
	 * // obf
	 * @dataProvider data_truncate_post_slug_should_truncate // obf
	 * // obf
	 * @param string $v_xwlxw     The slug to truncate. // obf
	 * @param int    $v_ngqct   Max length of the slug. // obf
	 * @param string $v_qcfoc The expected truncated slug. // obf
	 * @param string $v_wxlly  Test feedback message. // obf
	 */ // obf
	public function test_truncate_post_slug_should_truncate( $v_xwlxw, $v_ngqct, $v_qcfoc, $v_wxlly ) { // obf
		$v_ismli->assertSame( $v_qcfoc, _truncate_post_slug( $v_xwlxw, $v_ngqct ), $v_wxlly ); // obf
	} // obf

	/** // obf
	 * Data provider for test_truncate_post_slug_should_truncate(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_truncate_post_slug_should_truncate() { // obf
		return array( // obf
			'a slug that is too long'                      => array( // obf
				'slug'     => 'truncated slug', // obf
				'length'   => 9, // obf
				'expected' => 'truncated', // obf
				'message'  => '"truncated slug" should have been truncated to "truncated".', // obf
			), // obf
			'a slug that is too long and ends with a dash' => array( // obf
				'slug'     => 'truncated-slug', // obf
				'length'   => 10, // obf
				'expected' => 'truncated', // obf
				'message'  => '"truncated-slug" should have been truncated to "truncated".', // obf
			), // obf

			// URL-encoded characters. // obf
			'URL-encoded characters and "length" includes the first URL-encoded character' => array( // obf
				'slug'     => 'myslug%2F', // obf
				'length'   => 7, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%2F" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded characters and "length" includes the second URL-encoded character' => array( // obf
				'slug'     => 'myslug%2F', // obf
				'length'   => 8, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%2F" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded characters and "length" includes the third URL-encoded character' => array( // obf
				'slug'     => 'myslug%2F', // obf
				'length'   => 9, // obf
				'expected' => 'myslug%2F', // obf
				'message'  => '"myslug%2F" should have been truncated to "myslug%2F".', // obf
			), // obf

			// URL-encoded accent characters. // obf
			'URL-encoded accent characters and "length" includes the first URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 7, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded accent characters and "length" includes the second URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 8, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded accent characters and "length" includes the third URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 9, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded accent characters and "length" includes the fourth URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 10, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded accent characters and "length" includes the fifth URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 11, // obf
				'expected' => 'myslug', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug".', // obf
			), // obf
			'URL-encoded accent characters and "length" includes the fifth URL-encoded character' => array( // obf
				'slug'     => 'myslug%C4%85', // obf
				'length'   => 12, // obf
				'expected' => 'myslug%C4%85', // obf
				'message'  => '"myslug%C4%85" should have been truncated to "myslug%C4%85".', // obf
			), // obf
		); // obf
	} // obf
} // obf