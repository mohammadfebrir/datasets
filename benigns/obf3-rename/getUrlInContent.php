

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::get_url_in_content // obf
 */ // obf
class Tests_Formatting_GetUrlInContent extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests the get_url_in_content() function. // obf
	 * // obf
	 * @dataProvider data_get_url_in_content // obf
	 */ // obf
	public function test_get_url_in_content( $v_pvxda, $v_hnqvc ) { // obf
		$v_wwcck->assertSame( $v_hnqvc, get_url_in_content( $v_pvxda ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_pvxda    Input content. // obf
	 *         @type string $v_hnqvc Expected output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_get_url_in_content() { // obf
		return array( // obf
			array( // Empty content. // obf
				'', // obf
				false, // obf
			), // obf
			array( // No URLs. // obf
				'<div>NO URL CONTENT</div>', // obf
				false, // obf
			), // obf
			array( // Ignore none link elements. // obf
				'<div href="/relative.php">NO URL CONTENT</div>', // obf
				false, // obf
			), // obf
			array( // Single link. // obf
				'ABC<div><a href="/relative.php">LINK</a> CONTENT</div>', // obf
				'/relative.php', // obf
			), // obf
			array( // Multiple links. // obf
				'ABC<div><a href="/relative.php">LINK</a> CONTENT <a href="/suppress.php">LINK</a></div>', // obf
				'/relative.php', // obf
			), // obf
			array( // Escape link. // obf
				'ABC<div><a href="http://example.com/Mr%20WordPress 2">LINK</a> CONTENT </div>', // obf
				'http://example.com/Mr%20WordPress%202', // obf
			), // obf
		); // obf
	} // obf
} // obf