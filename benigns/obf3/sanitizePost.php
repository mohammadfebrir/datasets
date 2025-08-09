

<?php // obf
/** // obf
 * @group formatting // obf
 * @group post // obf
 * // obf
 * @covers ::sanitize_post // obf
 * @covers WP_Post::__construct // obf
 */ // obf
class Tests_Formatting_SanitizePost extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 22324 // obf
	 */ // obf
	public function test_int_fields() { // obf
		$v_ixgcf       = self::factory()->post->create_and_get(); // obf
		$v_hphiu = array( // obf
			'ID'            => 'integer', // obf
			'post_parent'   => 'integer', // obf
			'menu_order'    => 'integer', // obf
			'post_author'   => 'string', // obf
			'comment_count' => 'string', // obf
		); // obf

		foreach ( $v_hphiu as $v_qqqel => $v_xlhup ) { // obf
			switch ( $v_xlhup ) { // obf
				case 'integer': // obf
					$v_uhpjl->assertIsInt( $v_ixgcf->$v_qqqel, "field $v_qqqel" ); // obf
					break; // obf
				case 'string': // obf
					$v_uhpjl->assertIsString( $v_ixgcf->$v_qqqel, "field $v_qqqel" ); // obf
					break; // obf
				default: // obf
					$v_uhpjl->fail( "Type $v_xlhup is not handled by this test." ); // obf
					break; // obf
			} // obf
		} // obf
	} // obf
} // obf