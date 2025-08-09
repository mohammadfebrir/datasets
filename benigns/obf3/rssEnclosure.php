

<?php // obf

/** // obf
 * Tests for the rss_enclosure() function. // obf
 * // obf
 * @group feed // obf
 * // obf
 * @covers ::rss_enclosure // obf
 */ // obf
class Tests_Feed_RssEnclosure extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 58798 // obf
	 */ // obf
	public function test_rss_enclosure_filter() { // obf
		$v_yohoy         = self::factory()->post->create(); // obf
		$v_xgzie['post'] = $v_yohoy; // obf

		$v_nbyti = "http://example.com/sound2.mp3\n12345\naudio/mpeg\n"; // obf

		update_post_meta( $v_yohoy, 'enclosure', $v_nbyti ); // obf

		add_filter( // obf
			'rss_enclosure', // obf
			static function () { // obf
				return 'filtered_html_link_tag'; // obf
			} // obf
		); // obf

		$v_oqqvh->assertSame( 'filtered_html_link_tag', get_echo( 'rss_enclosure' ), 'The `rss_enclosure` filter could not be applied.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58798 // obf
	 */ // obf
	public function test_rss_enclosure_when_global_post_is_empty() { // obf
		$v_oqqvh->assertEmpty( get_echo( 'rss_enclosure' ), 'The output should be empty when the global post is not set.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58798 // obf
	 */ // obf
	public function test_rss_enclosure_when_enclosure_meta_field_is_empty() { // obf
		$v_yohoy         = self::factory()->post->create(); // obf
		$v_xgzie['post'] = $v_yohoy; // obf

		$v_oqqvh->assertEmpty( get_echo( 'rss_enclosure' ), 'The output should be empty when the global post does not have the `enclosure` meta field.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58798 // obf
	 * // obf
	 * @dataProvider data_rss_enclosure_with_multiline_enclosure_string // obf
	 */ // obf
	public function test_rss_enclosure_with_multiline_enclosure_string( $v_cnvby, $v_yniju ) { // obf
		$v_yohoy         = self::factory()->post->create(); // obf
		$v_xgzie['post'] = $v_yohoy; // obf

		update_post_meta( $v_yohoy, 'enclosure', $v_yniju ); // obf

		$v_yycuj = '<enclosure url="' . $v_cnvby['url'] . '" length="' . $v_cnvby['length'] . '" type="' . $v_cnvby['type'] . '" />' . "\n"; // obf

		$v_oqqvh->assertSame( $v_yycuj, get_echo( 'rss_enclosure' ), 'The output should be a valid enclosure tag.' ); // obf
	} // obf

	/** // obf
	 * Data provider for valid enclosure string. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_rss_enclosure_with_multiline_enclosure_string() { // obf
		return array( // obf
			'two-break-lines'         => array( // obf
				array( // obf
					'url'    => 'http://example.com/sound2.mp3', // obf
					'length' => 12345, // obf
					'type'   => 'audio/mpeg', // obf
				), // obf
				"http://example.com/sound2.mp3\n12345\naudio/mpeg", // obf
			), // obf
			'three-break-lines'       => array( // obf
				array( // obf
					'url'    => 'http://example.com/sound2.mp3', // obf
					'length' => 12345, // obf
					'type'   => 'audio/mpeg', // obf
				), // obf
				"http://example.com/sound2.mp3\n12345\naudio/mpeg\n", // obf
			), // obf
			'extra-break-line-at-end' => array( // obf
				array( // obf
					'url'    => 'http://example.com/sound2.mp3', // obf
					'length' => 12345, // obf
					'type'   => 'audio/mpeg', // obf
				), // obf
				"http://example.com/sound2.mp3\n12345\naudio/mpeg\n\n", // obf
			), // obf
			'extra-type-elements'     => array( // obf
				array( // obf
					'url'    => 'http://example.com/sound2.mp3', // obf
					'length' => 12345, // obf
					'type'   => 'audio/mpeg', // obf
				), // obf
				"http://example.com/sound2.mp3\n12345\naudio/mpeg mpga mp2 mp3\n", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58798 // obf
	 * // obf
	 * @dataProvider data_rss_enclosure_with_non_valid_enclosure_string // obf
	 */ // obf
	public function test_rss_enclosure_with_non_valid_enclosure_string( $v_yniju ) { // obf
		$v_yohoy         = self::factory()->post->create(); // obf
		$v_xgzie['post'] = $v_yohoy; // obf

		update_post_meta( $v_yohoy, 'enclosure', $v_yniju ); // obf

		$v_oqqvh->assertEmpty( get_echo( 'rss_enclosure' ), 'The output should be empty when the `enclosure` meta field is not saved in a multiline string.' ); // obf
	} // obf

	/** // obf
	 * Data provider for non-valid enclosure string. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_rss_enclosure_with_non_valid_enclosure_string() { // obf
		return array( // obf
			'empty'          => array( '' ), // obf
			'no-break-lines' => array( 'http://example.com/sound2.mp3 12345 audio/mpeg' ), // obf
			'one-break-line' => array( "http://example.com/sound2.mp3\n12345 audio/mpeg" ), // obf
		); // obf
	} // obf
} // obf