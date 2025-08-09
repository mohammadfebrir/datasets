

<?php // obf
/** // obf
 * Tests for the links_add_target() function. // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::links_add_target // obf
 */ // obf
class Tests_Formatting_LinksAddTarget extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 26164 // obf
	 * // obf
	 * @dataProvider data_links_add_target // obf
	 */ // obf
	public function test_links_add_target( $v_qqvkq, $v_hanii, $v_vgmtn, $v_xtrur ) { // obf
		if ( is_null( $v_hanii ) ) { // obf
			$v_pwtfw->assertSame( $v_xtrur, links_add_target( $v_qqvkq ) ); // obf
		} elseif ( is_null( $v_vgmtn ) ) { // obf
			$v_pwtfw->assertSame( $v_xtrur, links_add_target( $v_qqvkq, $v_hanii ) ); // obf
		} else { // obf
			$v_pwtfw->assertSame( $v_xtrur, links_add_target( $v_qqvkq, $v_hanii, $v_vgmtn ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string     $v_qqvkq  String to search for links in. // obf
	 *         @type string     $v_hanii   The target to add to the links. // obf
	 *         @type array|null $v_vgmtn     An array of tags to apply to. // obf
	 *         @type string     $v_xtrur Expected output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_links_add_target() { // obf
		return array( // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> END TEXT', // obf
				null, // obf
				null, // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC" target="_blank">LINK</a> HERE </div> END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <A href="XYZ" src="ABC">LINK</A> HERE </div> END TEXT', // obf
				null, // obf
				null, // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <A href="XYZ" src="ABC" target="_blank">LINK</A> HERE </div> END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <a href="XYZ"  >LINK</a>END TEXT', // obf
				null, // obf
				null, // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC" target="_blank">LINK</a> HERE </div> <a href="XYZ"   target="_blank">LINK</a>END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span>END TEXT</span>', // obf
				'_top', // obf
				null, // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC" target="_top">LINK</a> HERE </div> <span>END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span>END TEXT</span>', // obf
				'_top', // obf
				array( 'span' ), // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="_top">END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span>END TEXT</span>', // obf
				'_top', // obf
				array( 'SPAN' ), // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="_top">END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="_top">END TEXT</span>', // obf
				'_top', // obf
				array( 'span', 'div' ), // obf
				'MY CONTENT <div target="_top"> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="_top">END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <div target=\'ABC\'> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="xyz">END TEXT</span>', // obf
				'_top', // obf
				array( 'span', 'div' ), // obf
				'MY CONTENT <div target="_top"> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="_top">END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span target="xyz" src="ABC">END TEXT</span>', // obf
				'_top', // obf
				array( 'span' ), // obf
				'MY CONTENT <div> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </div> <span src="ABC" target="_top">END TEXT</span>', // obf
			), // obf
			array( // obf
				'MY CONTENT <aside> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </aside> END TEXT', // obf
				null, // obf
				null, // obf
				'MY CONTENT <aside> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC" target="_blank">LINK</a> HERE </aside> END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <aside class="_blank"> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC">LINK</a> HERE </aside> END TEXT', // obf
				null, // obf
				null, // obf
				'MY CONTENT <aside class="_blank"> SOME ADDITIONAL TEXT <a href="XYZ" src="ABC" target="_blank">LINK</a> HERE </aside> END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <blockquote>SOME</blockquote> ADDITIONAL TEXT <b>LINK</b> HERE END TEXT', // obf
				'_blank', // obf
				array( 'b' ), // obf
				'MY CONTENT <blockquote>SOME</blockquote> ADDITIONAL TEXT <b target="_blank">LINK</b> HERE END TEXT', // obf
			), // obf
			array( // obf
				'MY CONTENT <blockquote target="_self">SOME</blockquote> ADDITIONAL TEXT <b>LINK</b> HERE END TEXT', // obf
				'_blank', // obf
				array( 'b' ), // obf
				'MY CONTENT <blockquote target="_self">SOME</blockquote> ADDITIONAL TEXT <b target="_blank">LINK</b> HERE END TEXT', // obf
			), // obf
		); // obf
	} // obf
} // obf