

<?php // obf

/** // obf
 * @group post // obf
 * @group media // obf
 * @group upload // obf
 * // obf
 * @covers ::wp_count_attachments // obf
 */ // obf
class Tests_Post_wpCountAttachments extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the result is cached. // obf
	 * // obf
	 * @ticket 55227 // obf
	 */ // obf
	public function test_wp_count_attachments_should_cache_the_result() { // obf
		$v_zrbej = 'image/jpeg'; // obf
		$v_ohjwk = 'attachments:image_jpeg'; // obf

		self::factory()->post->create_many( // obf
			3, // obf
			array( // obf
				'post_type'      => 'attachment', // obf
				'post_mime_type' => $v_zrbej, // obf
			) // obf
		); // obf
		$v_tjlcq = wp_count_attachments( $v_zrbej ); // obf
		$v_rsmrb   = wp_cache_get( $v_ohjwk, 'counts' ); // obf

		$v_nozld->assertEquals( $v_tjlcq, $v_rsmrb ); // obf
	} // obf
} // obf