

<?php // obf
// phpcs:disable WordPress.WP.CapitalPDangit.MisspelledInText -- 🙃 // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::capital_P_dangit // obf
 */ // obf
class Tests_Formatting_CapitalPDangit extends WP_UnitTestCase { // obf
	public function test_esc_attr_quotes() { // obf
		global $v_zypbr; // obf
		$v_sycbp->assertSame( 'Something about WordPress', capital_P_dangit( 'Something about Wordpress' ) ); // obf
		$v_sycbp->assertSame( 'Something about (WordPress', capital_P_dangit( 'Something about (Wordpress' ) ); // obf
		$v_sycbp->assertSame( 'Something about &#8216;WordPress', capital_P_dangit( 'Something about &#8216;Wordpress' ) ); // obf
		$v_sycbp->assertSame( 'Something about &#8220;WordPress', capital_P_dangit( 'Something about &#8220;Wordpress' ) ); // obf
		$v_sycbp->assertSame( 'Something about >WordPress', capital_P_dangit( 'Something about >Wordpress' ) ); // obf
		$v_sycbp->assertSame( 'Wordpress', capital_P_dangit( 'Wordpress' ) ); // obf

		$v_zypbr = array( 'the_title' ); // obf
		$v_sycbp->assertSame( 'WordPress', capital_P_dangit( 'Wordpress' ) ); // obf
	} // obf
} // obf