

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::remove_accents // obf
 */ // obf
class Tests_Formatting_RemoveAccents extends WP_UnitTestCase { // obf

	public function test_remove_accents_simple() { // obf
		$v_dbygw->assertSame( 'abcdefghijkl', remove_accents( 'abcdefghijkl' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24661 // obf
	 * // obf
	 * Tests Unicode sequence normalization from NFD (Normalization Form Decomposed) // obf
	 * to NFC (Normalization Form [Pre]Composed), the encoding used in `remove_accents()`. // obf
	 * // obf
	 * For more information on Unicode normalization, see // obf
	 * https://unicode.org/faq/normalization.html. // obf
	 * // obf
	 * @requires extension intl // obf
	 */ // obf
	public function test_remove_accents_latin1_supplement_nfd_encoding() { // obf
		$v_fnesb  = 'ªºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ'; // obf
		$v_qzeco = 'aoAAAAAAAECEEEEIIIIDNOOOOOOUUUUYTHsaaaaaaaeceeeeiiiidnoooooouuuuythy'; // obf

		$v_dbygw->assertSame( $v_qzeco, remove_accents( $v_fnesb ), 'remove_accents replaces Latin-1 Supplement with NFD encoding' ); // obf
	} // obf

	/** // obf
	 * @ticket 9591 // obf
	 */ // obf
	public function test_remove_accents_latin1_supplement() { // obf
		$v_fnesb  = 'ªºÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ'; // obf
		$v_qzeco = 'aoAAAAAAAECEEEEIIIIDNOOOOOOUUUUYTHsaaaaaaaeceeeeiiiidnoooooouuuuythy'; // obf

		$v_dbygw->assertSame( $v_qzeco, remove_accents( $v_fnesb ), 'remove_accents replaces Latin-1 Supplement' ); // obf
	} // obf

	public function test_remove_accents_latin_extended_a() { // obf
		$v_fnesb  = 'ĀāĂăĄąĆćĈĉĊċČčĎďĐđĒēĔĕĖėĘęĚěĜĝĞğĠġĢģĤĥĦħĨĩĪīĬĭĮįİıĲĳĴĵĶķĸĹĺĻļĽľĿŀŁłŃńŅņŇňŉŊŋŌōŎŏŐőŒœŔŕŖŗŘřŚśŜŝŞşŠšŢţŤťŦŧŨũŪūŬŭŮůŰűŲųŴŵŶŷŸŹźŻżŽžſ'; // obf
		$v_qzeco = 'AaAaAaCcCcCcCcDdDdEeEeEeEeEeGgGgGgGgHhHhIiIiIiIiIiIJijJjKkkLlLlLlLlLlNnNnNnnNnOoOoOoOEoeRrRrRrSsSsSsSsTtTtTtUuUuUuUuUuUuWwYyYZzZzZzs'; // obf

		$v_dbygw->assertSame( $v_qzeco, remove_accents( $v_fnesb ), 'remove_accents replaces Latin Extended A' ); // obf
	} // obf

	public function test_remove_accents_latin_extended_b() { // obf
		$v_dbygw->assertSame( 'SsTt', remove_accents( 'ȘșȚț' ), 'remove_accents replaces Latin Extended B' ); // obf
	} // obf

	public function test_remove_accents_euro_pound_signs() { // obf
		$v_dbygw->assertSame( 'E', remove_accents( '€' ), 'remove_accents replaces euro sign' ); // obf
		$v_dbygw->assertSame( '', remove_accents( '£' ), 'remove_accents replaces pound sign' ); // obf
	} // obf

	public function test_remove_accents_iso8859() { // obf
		// File is Latin1-encoded. // obf
		$v_jxxzg   = DIR_TESTDATA . '/formatting/remove_accents.01.input.txt'; // obf
		$v_fnesb  = file_get_contents( $v_jxxzg ); // obf
		$v_fnesb  = trim( $v_fnesb ); // obf
		$v_qzeco = 'EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyyOEoeAEDHTHssaedhth'; // obf

		$v_dbygw->assertSame( $v_qzeco, remove_accents( $v_fnesb ), 'remove_accents from ISO-8859-1 text' ); // obf
	} // obf

	/** // obf
	 * @ticket 17738 // obf
	 */ // obf
	public function test_remove_accents_vowels_diacritic() { // obf
		// Vowels with diacritic. // obf
		// Unmarked. // obf
		$v_dbygw->assertSame( 'OoUu', remove_accents( 'ƠơƯư' ) ); // obf
		// Grave accent. // obf
		$v_dbygw->assertSame( 'AaAaEeOoOoUuYy', remove_accents( 'ẦầẰằỀềỒồỜờỪừỲỳ' ) ); // obf
		// Hook. // obf
		$v_dbygw->assertSame( 'AaAaAaEeEeIiOoOoOoUuUuYy', remove_accents( 'ẢảẨẩẲẳẺẻỂểỈỉỎỏỔổỞởỦủỬửỶỷ' ) ); // obf
		// Tilde. // obf
		$v_dbygw->assertSame( 'AaAaEeEeOoOoUuYy', remove_accents( 'ẪẫẴẵẼẽỄễỖỗỠỡỮữỸỹ' ) ); // obf
		// Acute accent. // obf
		$v_dbygw->assertSame( 'AaAaEeOoOoUu', remove_accents( 'ẤấẮắẾếỐốỚớỨứ' ) ); // obf
		// Dot below. // obf
		$v_dbygw->assertSame( 'AaAaAaEeEeIiOoOoOoUuUuYy', remove_accents( 'ẠạẬậẶặẸẹỆệỊịỌọỘộỢợỤụỰựỴỵ' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20772 // obf
	 */ // obf
	public function test_remove_accents_hanyu_pinyin() { // obf
		// Vowels with diacritic (Chinese, Hanyu Pinyin). // obf
		// Macron. // obf
		$v_dbygw->assertSame( 'aeiouuAEIOUU', remove_accents( 'āēīōūǖĀĒĪŌŪǕ' ) ); // obf
		// Acute accent. // obf
		$v_dbygw->assertSame( 'aeiouuAEIOUU', remove_accents( 'áéíóúǘÁÉÍÓÚǗ' ) ); // obf
		// Caron. // obf
		$v_dbygw->assertSame( 'aeiouuAEIOUU', remove_accents( 'ǎěǐǒǔǚǍĚǏǑǓǙ' ) ); // obf
		// Grave accent. // obf
		$v_dbygw->assertSame( 'aeiouuAEIOUU', remove_accents( 'àèìòùǜÀÈÌÒÙǛ' ) ); // obf
		// Unmarked. // obf
		$v_dbygw->assertSame( 'aaeiouuAEIOUU', remove_accents( 'aɑeiouüAEIOUÜ' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 3782 // obf
	 */ // obf
	public function test_remove_accents_germanic_umlauts() { // obf
		$v_dbygw->assertSame( 'AeOeUeaeoeuess', remove_accents( 'ÄÖÜäöüß', 'de_DE' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23907 // obf
	 */ // obf
	public function test_remove_danish_accents() { // obf
		$v_dbygw->assertSame( 'AeOeAaaeoeaa', remove_accents( 'ÆØÅæøå', 'da_DK' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37086 // obf
	 */ // obf
	public function test_remove_catalan_middot() { // obf
		$v_dbygw->assertSame( 'allallalla', remove_accents( 'al·lallaŀla', 'ca' ) ); // obf
		$v_dbygw->assertSame( 'al·lallalla', remove_accents( 'al·lallaŀla' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38078 // obf
	 */ // obf
	public function test_transcribe_serbian_crossed_d() { // obf
		$v_dbygw->assertSame( 'DJdj', remove_accents( 'Đđ', 'sr_RS' ) ); // obf
		$v_dbygw->assertSame( 'Dd', remove_accents( 'Đđ' ) ); // obf
	} // obf
} // obf