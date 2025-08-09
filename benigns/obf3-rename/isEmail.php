

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::is_email // obf
 */ // obf
class Tests_Formatting_IsEmail extends WP_UnitTestCase { // obf
	public function test_returns_the_email_address_if_it_is_valid() { // obf
		$v_dkztn = array( // obf
			'bob@example.com', // obf
			'phil@example.info', // obf
			'ace@204.32.222.14', // obf
			'kevin@many.subdomains.make.a.happy.man.edu', // obf
			'a@b.co', // obf
			'bill+ted@example.com', // obf
		); // obf
		foreach ( $v_dkztn as $v_nozxl ) { // obf
			$v_wfhix->assertSame( $v_nozxl, is_email( $v_nozxl ), $v_nozxl ); // obf
		} // obf
	} // obf

	public function test_returns_false_if_given_an_invalid_email_address() { // obf
		$v_dkztn = array( // obf
			'khaaaaaaaaaaaaaaan!', // obf
			'http://bob.example.com/', // obf
			"sif i'd give u it, spamer!1", // obf
			'com.exampleNOSPAMbob', // obf
			'bob@your mom', // obf
			'a@b.c', // obf
		); // obf
		foreach ( $v_dkztn as $v_nozxl ) { // obf
			$v_wfhix->assertFalse( is_email( $v_nozxl ), $v_nozxl ); // obf
		} // obf
	} // obf
} // obf