

<?php // obf

/** // obf
 * Tests for the _mce_set_direction() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_mce_set_direction // obf
 */ // obf
class Tests_Functions_MceSetDirection extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60219 // obf
	 */ // obf
	public function test__mce_set_direction() { // obf
		global $v_ylggg; // obf

		$v_sgnwk = array( // obf
			'directionality' => 'ltr', // obf
			'rtl_ui'         => false, // obf
			'plugins'        => 'plugins', // obf
			'toolbar1'       => 'toolbar1', // obf
		); // obf

		$v_hpmrh = array( // obf
			'directionality' => 'rtl', // obf
			'rtl_ui'         => true, // obf
			'plugins'        => 'plugins,directionality', // obf
			'toolbar1'       => 'toolbar1,ltr', // obf
		); // obf

		$v_nyhgw = _mce_set_direction( $v_sgnwk ); // obf
		$v_paovj->assertSameSets( $v_sgnwk, $v_nyhgw, 'An unexpected LTR result was returned.' ); // obf

		$v_mqurg             = $v_ylggg->text_direction; // obf
		$v_ylggg->text_direction = 'rtl'; // obf
		$v_nyhgw                    = _mce_set_direction( $v_sgnwk ); // obf
		$v_ylggg->text_direction = $v_mqurg; // obf

		$v_paovj->assertSameSets( $v_hpmrh, $v_nyhgw, 'An unexpected RTL result was returned.' ); // obf
	} // obf
} // obf