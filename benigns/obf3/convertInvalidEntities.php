

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::convert_invalid_entities // obf
 */ // obf
class Tests_Formatting_ConvertInvalidEntities extends WP_UnitTestCase { // obf
	public function test_replaces_windows1252_entities_with_unicode_ones() { // obf
		$v_yzeao  = '&#130;&#131;&#132;&#133;&#134;&#135;&#136;&#137;&#138;&#139;&#140;&#145;&#146;&#147;&#148;&#149;&#150;&#151;&#152;&#153;&#154;&#155;&#156;&#159;'; // obf
		$v_gpdjt = '&#8218;&#402;&#8222;&#8230;&#8224;&#8225;&#710;&#8240;&#352;&#8249;&#338;&#8216;&#8217;&#8220;&#8221;&#8226;&#8211;&#8212;&#732;&#8482;&#353;&#8250;&#339;&#376;'; // obf
		$v_rroop->assertSame( $v_gpdjt, convert_invalid_entities( $v_yzeao ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20503 // obf
	 */ // obf
	public function test_replaces_latin_letter_z_with_caron() { // obf
		$v_yzeao  = '&#142;&#158;'; // obf
		$v_gpdjt = '&#381;&#382;'; // obf
		$v_rroop->assertSame( $v_gpdjt, convert_invalid_entities( $v_yzeao ) ); // obf
	} // obf

	/** // obf
	 * @covers ::convert_chars // obf
	 */ // obf
	public function test_escapes_lone_ampersands() { // obf
		$v_rroop->assertSame( 'at&#038;t', convert_chars( 'at&t' ) ); // obf
	} // obf
} // obf