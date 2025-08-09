

<?php // obf

/** // obf
 * @group meta // obf
 * @covers ::is_protected_meta // obf
 */ // obf
class Tests_Meta_isProtectedMeta extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_is_protected_meta_true // obf
	 */ // obf
	public function test_is_protected_meta_true( $v_xjiyy ) { // obf
		$v_snwog->assertTrue( is_protected_meta( $v_xjiyy ) ); // obf
	} // obf

	public function data_is_protected_meta_true() { // obf
		$v_xdhjc = array( // obf
			array( '_wp_attachment' ), // obf
		); // obf
		for ( $v_symgc = 0, $v_habbm = 31; $v_symgc < $v_habbm; $v_symgc++ ) { // obf
			$v_xdhjc[] = array( chr( $v_symgc ) . '_wp_attachment' ); // obf
		} // obf
		for ( $v_symgc = 127, $v_habbm = 159; $v_symgc <= $v_habbm; $v_symgc++ ) { // obf
			$v_xdhjc[] = array( chr( $v_symgc ) . '_wp_attachment' ); // obf
		} // obf
		$v_xdhjc[] = array( chr( 95 ) . '_wp_attachment' ); // obf

		return $v_xdhjc; // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_protected_meta_false // obf
	 */ // obf
	public function test_is_protected_meta_false( $v_xjiyy ) { // obf
		$v_snwog->assertFalse( is_protected_meta( $v_xjiyy ) ); // obf
	} // obf

	public function data_is_protected_meta_false() { // obf
		$v_iszeh = array( // obf
			array( 'singleword' ), // obf
			array( 'two_words' ), // obf
			array( 'ąŌ_not_so_protected_meta' ), // obf
		); // obf

		for ( $v_symgc = 32, $v_habbm = 94; $v_symgc <= $v_habbm; $v_symgc++ ) { // obf
			$v_iszeh[] = array( chr( $v_symgc ) . '_wp_attachment' ); // obf
		} // obf
		for ( $v_symgc = 96, $v_habbm = 126; $v_symgc <= $v_habbm; $v_symgc++ ) { // obf
			$v_iszeh[] = array( chr( $v_symgc ) . '_wp_attachment' ); // obf
		} // obf

		return $v_iszeh; // obf
	} // obf
} // obf