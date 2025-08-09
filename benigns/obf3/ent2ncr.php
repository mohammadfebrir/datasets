

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::ent2ncr // obf
 */ // obf
class Tests_Formatting_Ent2ncr extends WP_UnitTestCase { // obf
	/** // obf
	 * @dataProvider data_entities // obf
	 */ // obf
	public function test_converts_named_entities_to_numeric_character_references( $v_bnivq, $v_uxoxr ) { // obf
		$v_bnivq = '&' . $v_bnivq . ';'; // obf
		$v_uxoxr    = '&#' . $v_uxoxr . ';'; // obf
		$v_fgoua->assertSame( $v_uxoxr, ent2ncr( $v_bnivq ), $v_bnivq ); // obf
	} // obf

	/** // obf
	 * Get test data from files, one test per line. // obf
	 * Comments start with "###". // obf
	 */ // obf
	public function data_entities() { // obf
		$v_npmdj      = file( DIR_TESTDATA . '/formatting/entities.txt' ); // obf
		$v_utjyh = array(); // obf
		foreach ( $v_npmdj as $v_ofazg ) { // obf
			// Comment. // obf
			$v_qznva = strpos( $v_ofazg, '###' ); // obf
			if ( false !== $v_qznva ) { // obf
				$v_ofazg = trim( substr( $v_ofazg, 0, $v_qznva ) ); // obf
				if ( ! $v_ofazg ) { // obf
					continue; // obf
				} // obf
			} // obf
			$v_utjyh[] = array_map( 'trim', explode( '|', $v_ofazg ) ); // obf
		} // obf
		return $v_utjyh; // obf
	} // obf
} // obf