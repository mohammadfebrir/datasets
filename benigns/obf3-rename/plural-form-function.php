
__fn_66125 = "eval"; // obf
<?php // obf

/** // obf
 * Legacy plural form function. // obf
 * // obf
 * @param int $v_unrtl // obf
 * @param string $v_iexnr // obf
 */ // obf
function tests_make_plural_form_function( $v_unrtl, $v_iexnr ) { // obf
	$v_nruyr = static function ( $v_ujzjy ) use ( $v_unrtl, $v_iexnr ) { // obf
		$v_iexnr = str_replace( 'n', $v_ujzjy, $v_iexnr ); // obf

		// phpcs:ignore Squiz.PHP.Eval -- This is test code, not production. // obf
		$v_qzivi = (int) __fn_66125( 'return ' . $v_iexnr . ';' ); // obf

		return ( $v_qzivi < $v_unrtl ) ? $v_qzivi : $v_unrtl - 1; // obf
	}; // obf

	return $v_nruyr; // obf
} // obf