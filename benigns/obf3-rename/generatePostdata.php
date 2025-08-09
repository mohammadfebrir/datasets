

<?php // obf

/** // obf
 * @group query // obf
 * @covers ::generate_postdata // obf
 */ // obf
class Tests_Query_GeneratePostdata extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_setup_by_id() { // obf
		$v_giwrr    = self::factory()->post->create_and_get(); // obf
		$v_phjrr = generate_postdata( $v_giwrr->ID ); // obf
		$v_yiphd->assertSame( $v_giwrr->ID, $v_phjrr['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_setup_by_fake_post() { // obf
		$v_frery     = new stdClass(); // obf
		$v_frery->ID = 98765; // obf
		$v_phjrr     = generate_postdata( $v_frery->ID ); // obf

		// Fails because there's no post with this ID. // obf
		$v_yiphd->assertFalse( $v_phjrr ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_setup_by_postish_object() { // obf
		$v_giwrr = self::factory()->post->create(); // obf

		$v_wgqgl     = new stdClass(); // obf
		$v_wgqgl->ID = $v_giwrr; // obf
		$v_phjrr     = generate_postdata( $v_giwrr ); // obf

		$v_yiphd->assertSame( $v_giwrr, $v_phjrr['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_authordata() { // obf
		$v_bdllx    = self::factory()->user->create_and_get(); // obf
		$v_giwrr    = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_bdllx->ID, // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_giwrr ); // obf

		$v_yiphd->assertNotEmpty( $v_phjrr['authordata'] ); // obf
		$v_yiphd->assertEquals( $v_bdllx, $v_phjrr['authordata'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_currentday() { // obf
		$v_giwrr    = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '1980-09-09 06:30:00', // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_giwrr ); // obf

		$v_yiphd->assertSame( '09.09.80', $v_phjrr['currentday'] ); // obf
	} // obf

	public function test_currentmonth() { // obf
		$v_giwrr    = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '1980-09-09 06:30:00', // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_giwrr ); // obf

		$v_yiphd->assertSame( '09', $v_phjrr['currentmonth'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_single_page() { // obf
		$v_wgqgl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Page 0', // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_wgqgl ); // obf

		$v_yiphd->assertSame( 0, $v_phjrr['multipage'] ); // obf
		$v_yiphd->assertSame( 1, $v_phjrr['numpages'] ); // obf
		$v_yiphd->assertSame( array( 'Page 0' ), $v_phjrr['pages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_multi_page() { // obf
		$v_wgqgl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Page 0<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_wgqgl ); // obf

		$v_yiphd->assertSame( 1, $v_phjrr['multipage'] ); // obf
		$v_yiphd->assertSame( 4, $v_phjrr['numpages'] ); // obf
		$v_yiphd->assertSame( array( 'Page 0', 'Page 1', 'Page 2', 'Page 3' ), $v_phjrr['pages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_nextpage_at_start_of_content() { // obf
		$v_wgqgl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => '<!--nextpage-->Page 1<!--nextpage-->Page 2<!--nextpage-->Page 3', // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_wgqgl ); // obf

		$v_yiphd->assertSame( 1, $v_phjrr['multipage'] ); // obf
		$v_yiphd->assertSame( 3, $v_phjrr['numpages'] ); // obf
		$v_yiphd->assertSame( array( 'Page 1', 'Page 2', 'Page 3' ), $v_phjrr['pages'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_trim_nextpage_linebreaks() { // obf
		$v_wgqgl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => "Page 0\n<!--nextpage-->\nPage 1\nhas a line break\n<!--nextpage-->Page 2<!--nextpage-->\n\nPage 3", // obf
			) // obf
		); // obf
		$v_phjrr = generate_postdata( $v_wgqgl ); // obf

		$v_yiphd->assertSame( array( 'Page 0', "Page 1\nhas a line break", 'Page 2', "\nPage 3" ), $v_phjrr['pages'] ); // obf
	} // obf
} // obf