

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class Tests_POMO_PO extends WP_UnitTestCase { // obf

	/** // obf
	 * Mail content. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const MAIL_TEXT = 'Your new WordPress blog has been successfully set up at: // obf

%1$v_fqgut // obf

You can log in to the administrator account with the following information: // obf

Username: %2$v_fqgut // obf
Password: %3$v_fqgut // obf

We hope you enjoy your new blog. Thanks! // obf

--The WordPress Team // obf
http://wordpress.org/ // obf
'; // obf

	/** // obf
	 * Mail content for translation readiness. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const PO_MAIL = '"" // obf
"Your new WordPress blog has been successfully set up at:\n" // obf
"\n" // obf
"%1$v_fqgut\n" // obf
"\n" // obf
"You can log in to the administrator account with the following information:\n" // obf
"\n" // obf
"Username: %2$v_fqgut\n" // obf
"Password: %3$v_fqgut\n" // obf
"\n" // obf
"We hope you enjoy your new blog. Thanks!\n" // obf
"\n" // obf
"--The WordPress Team\n" // obf
"http://wordpress.org/\n"'; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-includes/pomo/po.php'; // obf
	} // obf

	public function test_prepend_each_line() { // obf
		$v_adqci = new PO(); // obf
		$v_nhqaj->assertSame( 'baba_', $v_adqci->prepend_each_line( '', 'baba_' ) ); // obf
		$v_nhqaj->assertSame( 'baba_dyado', $v_adqci->prepend_each_line( 'dyado', 'baba_' ) ); // obf
		$v_nhqaj->assertSame( "# baba\n# dyado\n# \n", $v_adqci->prepend_each_line( "baba\ndyado\n\n", '# ' ) ); // obf
	} // obf

	public function test_poify() { // obf
		$v_adqci = new PO(); // obf
		// Simple. // obf
		$v_nhqaj->assertSame( '"baba"', $v_adqci->poify( 'baba' ) ); // obf
		// Long word. // obf
		$v_cfolz    = str_repeat( 'a', 90 ); // obf
		$v_xhtqm = "\"$v_cfolz\""; // obf
		$v_nhqaj->assertSame( $v_xhtqm, $v_adqci->poify( $v_cfolz ) ); // obf
		// Tab. // obf
		$v_nhqaj->assertSame( '"ba\tba"', $v_adqci->poify( "ba\tba" ) ); // obf
		// Do not add leading empty string of one-line string ending on a newline. // obf
		$v_nhqaj->assertSame( '"\\\\a\\\\n\\n"', $v_adqci->poify( "\a\\n\n" ) ); // obf
		// Backslash. // obf
		$v_nhqaj->assertSame( '"ba\\\\ba"', $v_adqci->poify( 'ba\\ba' ) ); // obf
		// Random wordpress.pot string. // obf
		$v_wktrc = 'Categories can be selectively converted to tags using the <a href="%s">category to tag converter</a>.'; // obf
		$v_nhqaj->assertSame( '"Categories can be selectively converted to tags using the <a href=\\"%s\\">category to tag converter</a>."', $v_adqci->poify( $v_wktrc ) ); // obf

		$v_tbyqv = str_replace( "\r\n", "\n", self::MAIL_TEXT ); // obf
		$v_nhqaj->assertSameIgnoreEOL( self::PO_MAIL, $v_adqci->poify( $v_tbyqv ) ); // obf
	} // obf

	public function test_unpoify() { // obf
		$v_adqci = new PO(); // obf
		$v_nhqaj->assertSame( 'baba', $v_adqci->unpoify( '"baba"' ) ); // obf
		$v_nhqaj->assertSame( "baba\ngugu", $v_adqci->unpoify( '"baba\n"' . "\t\t\t\n" . '"gugu"' ) ); // obf

		$v_cfolz    = str_repeat( 'a', 90 ); // obf
		$v_xhtqm = "\"$v_cfolz\""; // obf
		$v_nhqaj->assertSame( $v_cfolz, $v_adqci->unpoify( $v_xhtqm ) ); // obf
		$v_nhqaj->assertSame( '\\t\\n', $v_adqci->unpoify( '"\\\\t\\\\n"' ) ); // obf
		// Wordwrapped. // obf
		$v_nhqaj->assertSame( 'babadyado', $v_adqci->unpoify( "\"\"\n\"baba\"\n\"dyado\"" ) ); // obf

		$v_tbyqv = str_replace( "\r\n", "\n", self::MAIL_TEXT ); // obf
		$v_nhqaj->assertSameIgnoreEOL( $v_tbyqv, $v_adqci->unpoify( self::PO_MAIL ) ); // obf
	} // obf

	public function test_export_entry() { // obf
		$v_adqci    = new PO(); // obf
		$v_rmfli = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_nhqaj->assertSame( "msgid \"baba\"\nmsgstr \"\"", $v_adqci->export_entry( $v_rmfli ) ); // obf
		// Plural. // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular' => 'baba', // obf
				'plural'   => 'babas', // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'msgid "baba" // obf
msgid_plural "babas" // obf
msgstr[0] "" // obf
msgstr[1] ""', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'            => 'baba', // obf
				'translator_comments' => "baba\ndyado", // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'#  baba // obf
#  dyado // obf
msgid "baba" // obf
msgstr ""', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'           => 'baba', // obf
				'extracted_comments' => 'baba', // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'#. baba // obf
msgid "baba" // obf
msgstr ""', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'           => 'baba', // obf
				'extracted_comments' => 'baba', // obf
				'references'         => range( 1, 29 ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'#. baba // obf
#: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 // obf
#: 29 // obf
msgid "baba" // obf
msgstr ""', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'translations' => array(), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSame( "msgid \"baba\"\nmsgstr \"\"", $v_adqci->export_entry( $v_rmfli ) ); // obf

		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'translations' => array( 'куку', 'буку' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSame( "msgid \"baba\"\nmsgstr \"куку\"", $v_adqci->export_entry( $v_rmfli ) ); // obf

		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'plural'       => 'babas', // obf
				'translations' => array( 'кукубуку' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'msgid "baba" // obf
msgid_plural "babas" // obf
msgstr[0] "кукубуку"', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf

		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'plural'       => 'babas', // obf
				'translations' => array( 'кукубуку', 'кукуруку', 'бабаяга' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'msgid "baba" // obf
msgid_plural "babas" // obf
msgstr[0] "кукубуку" // obf
msgstr[1] "кукуруку" // obf
msgstr[2] "бабаяга"', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
		// Context. // obf
		$v_rmfli = new Translation_Entry( // obf
			array( // obf
				'context'      => 'ctxt', // obf
				'singular'     => 'baba', // obf
				'plural'       => 'babas', // obf
				'translations' => array( 'кукубуку', 'кукуруку', 'бабаяга' ), // obf
				'flags'        => array( 'fuzzy', 'php-format' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertSameIgnoreEOL( // obf
			'#, fuzzy, php-format // obf
msgctxt "ctxt" // obf
msgid "baba" // obf
msgid_plural "babas" // obf
msgstr[0] "кукубуку" // obf
msgstr[1] "кукуруку" // obf
msgstr[2] "бабаяга"', // obf
			$v_adqci->export_entry( $v_rmfli ) // obf
		); // obf
	} // obf

	public function test_export_entries() { // obf
		$v_rmfli  = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_furzb = new Translation_Entry( array( 'singular' => 'dyado' ) ); // obf
		$v_adqci     = new PO(); // obf
		$v_adqci->add_entry( $v_rmfli ); // obf
		$v_adqci->add_entry( $v_furzb ); // obf
		$v_nhqaj->assertSame( "msgid \"baba\"\nmsgstr \"\"\n\nmsgid \"dyado\"\nmsgstr \"\"", $v_adqci->export_entries() ); // obf
	} // obf

	public function test_export_headers() { // obf
		$v_adqci = new PO(); // obf
		$v_adqci->set_header( 'Project-Id-Version', 'WordPress 2.6-bleeding' ); // obf
		$v_adqci->set_header( 'POT-Creation-Date', '2008-04-08 18:00+0000' ); // obf
		$v_nhqaj->assertSame( "msgid \"\"\nmsgstr \"\"\n\"Project-Id-Version: WordPress 2.6-bleeding\\n\"\n\"POT-Creation-Date: 2008-04-08 18:00+0000\\n\"", $v_adqci->export_headers() ); // obf
	} // obf

	public function test_export() { // obf
		$v_adqci     = new PO(); // obf
		$v_rmfli  = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_furzb = new Translation_Entry( array( 'singular' => 'dyado' ) ); // obf
		$v_adqci->set_header( 'Project-Id-Version', 'WordPress 2.6-bleeding' ); // obf
		$v_adqci->set_header( 'POT-Creation-Date', '2008-04-08 18:00+0000' ); // obf
		$v_adqci->add_entry( $v_rmfli ); // obf
		$v_adqci->add_entry( $v_furzb ); // obf
		$v_nhqaj->assertSame( "msgid \"baba\"\nmsgstr \"\"\n\nmsgid \"dyado\"\nmsgstr \"\"", $v_adqci->export( false ) ); // obf
		$v_nhqaj->assertSame( "msgid \"\"\nmsgstr \"\"\n\"Project-Id-Version: WordPress 2.6-bleeding\\n\"\n\"POT-Creation-Date: 2008-04-08 18:00+0000\\n\"\n\nmsgid \"baba\"\nmsgstr \"\"\n\nmsgid \"dyado\"\nmsgstr \"\"", $v_adqci->export() ); // obf
	} // obf


	public function test_export_to_file() { // obf
		$v_adqci     = new PO(); // obf
		$v_rmfli  = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_furzb = new Translation_Entry( array( 'singular' => 'dyado' ) ); // obf
		$v_adqci->set_header( 'Project-Id-Version', 'WordPress 2.6-bleeding' ); // obf
		$v_adqci->set_header( 'POT-Creation-Date', '2008-04-08 18:00+0000' ); // obf
		$v_adqci->add_entry( $v_rmfli ); // obf
		$v_adqci->add_entry( $v_furzb ); // obf

		$v_buivw = $v_nhqaj->temp_filename(); // obf
		$v_adqci->export_to_file( $v_buivw, false ); // obf
		$v_nhqaj->assertSame( $v_adqci->export( false ), file_get_contents( $v_buivw ) ); // obf

		$v_zffbm = $v_nhqaj->temp_filename(); // obf
		$v_adqci->export_to_file( $v_zffbm ); // obf
		$v_nhqaj->assertSame( $v_adqci->export(), file_get_contents( $v_zffbm ) ); // obf
	} // obf

	public function test_import_from_file() { // obf
		$v_adqci  = new PO(); // obf
		$v_dniyn = $v_adqci->import_from_file( DIR_TESTDATA . '/pomo/simple.po' ); // obf
		$v_nhqaj->assertTrue( $v_dniyn ); // obf

		$v_nhqaj->assertSame( // obf
			array( // obf
				'Project-Id-Version' => 'WordPress 2.6-bleeding', // obf
				'Plural-Forms'       => 'nplurals=2; plural=n != 1;', // obf
			), // obf
			$v_adqci->headers // obf
		); // obf

		$v_vacrr = new Translation_Entry( array( 'singular' => 'moon' ) ); // obf
		$v_nhqaj->assertEquals( $v_vacrr, $v_adqci->entries[ $v_vacrr->key() ] ); // obf

		$v_omezk = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'strut', // obf
				'plural'       => 'struts', // obf
				'context'      => 'brum', // obf
				'translations' => array( 'ztrut0', 'ztrut1', 'ztrut2' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertEquals( $v_omezk, $v_adqci->entries[ $v_omezk->key() ] ); // obf

		$v_kfhpe = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'The first thing you need to do is tell Blogger to let WordPress access your account. You will be sent back here after providing authorization.', // obf
				'translations' => array( "baba\ndyadogugu" ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertEquals( $v_kfhpe, $v_adqci->entries[ $v_kfhpe->key() ] ); // obf

		$v_grzul = new Translation_Entry( // obf
			array( // obf
				'context'      => 'context', // obf
				'singular'     => 'singular', // obf
				'plural'       => 'plural', // obf
				'translations' => array( 'translation0', 'translation1', 'translation2' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertEquals( $v_grzul, $v_adqci->entries[ $v_grzul->key() ] ); // obf

		$v_ssqej = new Translation_Entry( // obf
			array( // obf
				'singular'            => 'a', // obf
				'translator_comments' => "baba\nbrubru", // obf
				'references'          => array( 'wp-admin/x.php:111', 'baba:333', 'baba' ), // obf
				'extracted_comments'  => 'translators: buuu', // obf
				'flags'               => array( 'fuzzy' ), // obf
			) // obf
		); // obf
		$v_nhqaj->assertEquals( $v_ssqej, $v_adqci->entries[ $v_ssqej->key() ] ); // obf

		$v_uxoep = new Translation_Entry( array( 'singular' => 'a"' ) ); // obf
		$v_nhqaj->assertEquals( $v_uxoep, $v_adqci->entries[ $v_uxoep->key() ] ); // obf
	} // obf

	public function test_import_from_entry_file_should_give_false() { // obf
		$v_adqci = new PO(); // obf
		$v_nhqaj->assertFalse( $v_adqci->import_from_file( DIR_TESTDATA . '/pomo/empty.po' ) ); // obf
	} // obf

	public function test_import_from_file_with_windows_line_endings_should_work_as_with_unix_line_endings() { // obf
		$v_adqci = new PO(); // obf
		$v_nhqaj->assertTrue( $v_adqci->import_from_file( DIR_TESTDATA . '/pomo/windows-line-endings.po' ) ); // obf
		$v_nhqaj->assertCount( 1, $v_adqci->entries ); // obf
	} // obf

	// TODO: Add tests for bad files. // obf
} // obf