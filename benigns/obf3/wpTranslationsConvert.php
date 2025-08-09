

<?php // obf

/** // obf
 * @coversDefaultClass WP_Translation_Controller // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class WP_Translation_Controller_Convert_Tests extends WP_UnitTestCase { // obf
	/** // obf
	 * @covers ::instance // obf
	 */ // obf
	public function test_get_instance() { // obf
		$v_clfjb  = WP_Translation_Controller::get_instance(); // obf
		$v_umngz = WP_Translation_Controller::get_instance(); // obf

		$v_unnyv->assertSame( $v_clfjb, $v_umngz ); // obf
	} // obf

	public function test_no_files_loaded_returns_false() { // obf
		$v_clfjb = new WP_Translation_Controller(); // obf
		$v_unnyv->assertFalse( $v_clfjb->translate( 'singular' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->translate_plural( array( 'plural0', 'plural1' ), 1 ) ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_not_loaded() { // obf
		$v_clfjb = new WP_Translation_Controller(); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->unload_textdomain( 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 * @covers ::unload_textdomain // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers ::translate // obf
	 * @covers ::locate_translation // obf
	 * @covers ::get_files // obf
	 */ // obf
	public function test_unload_entire_textdomain() { // obf
		$v_clfjb = new WP_Translation_Controller(); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->load_file( DIR_TESTDATA . '/l10n/example-simple.php', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'translation', $v_clfjb->translate( 'original', '', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_clfjb->unload_textdomain( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->translate( 'original', '', 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_file // obf
	 * @covers WP_Translation_File::get_file // obf
	 */ // obf
	public function test_unload_file_is_not_actually_loaded() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_givcp->unload_file( DIR_TESTDATA . '/l10n/simple.mo', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation', $v_givcp->translate( 'original', '', 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_unload_specific_locale() { // obf
		$v_clfjb = new WP_Translation_Controller(); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->load_file( DIR_TESTDATA . '/l10n/example-simple.php', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf

		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->load_file( DIR_TESTDATA . '/l10n/example-simple.php', 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf

		$v_unnyv->assertSame( 'translation', $v_clfjb->translate( 'original', '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation', $v_clfjb->translate( 'original', '', 'unittest', 'es_ES' ) ); // obf

		$v_unnyv->assertTrue( $v_clfjb->unload_textdomain( 'unittest', $v_clfjb->get_locale() ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->translate( 'original', '', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_clfjb->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertTrue( $v_clfjb->unload_textdomain( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->translate( 'original', '', 'unittest', 'es_ES' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_invalid_files // obf
	 * // obf
	 * @param string $v_cjido // obf
	 * @param string $v_tuoto // obf
	 * @param string|bool $v_jitsj // obf
	 */ // obf
	public function test_invalid_files( string $v_cjido, string $v_tuoto, $v_jitsj = null ) { // obf
		$v_cllhl = $v_unnyv->temp_filename(); // obf

		$v_unnyv->assertNotFalse( $v_cllhl ); // obf

		file_put_contents( $v_cllhl, $v_tuoto ); // obf

		$v_clfjb = WP_Translation_File::create( $v_cllhl, $v_cjido ); // obf

		$v_unnyv->assertInstanceOf( WP_Translation_File::class, $v_clfjb ); // obf

		// Not an error condition until it attempts to parse the file. // obf
		$v_unnyv->assertNull( $v_clfjb->error() ); // obf

		// Trigger parsing. // obf
		$v_clfjb->headers(); // obf

		$v_unnyv->assertNotNull( $v_clfjb->error() ); // obf

		if ( null !== $v_jitsj ) { // obf
			$v_unnyv->assertSame( $v_jitsj, $v_clfjb->error() ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array{0: array{0: 'mo'|'php', 1: string|false, 2?: string}} // obf
	 */ // obf
	public function data_invalid_files(): array { // obf
		return array( // obf
			array( 'php', '' ), // obf
			array( 'php', '<?php // This is a php file without a payload' ), // obf
			array( 'mo', '', 'Invalid data' ), // obf
			array( 'mo', 'Random data in a file long enough to be a real header', 'Magic marker does not exist' ), // obf
			array( 'mo', pack( 'V*', 0x950412de ), 'Invalid data' ), // obf
			array( 'mo', pack( 'V*', 0x950412de ) . 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'Unsupported revision' ), // obf
			array( 'mo', pack( 'V*', 0x950412de, 0x0 ) . 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'Invalid data' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_Translation_Controller::load // obf
	 * @covers WP_Translation_Controller::is_textdomain_loaded // obf
	 */ // obf
	public function test_load_non_existent_file() { // obf
		$v_clfjb = new WP_Translation_Controller(); // obf

		$v_unnyv->assertFalse( $v_clfjb->load_file( DIR_TESTDATA . '/l10n/file-that-doesnt-exist.mo', 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_clfjb->is_textdomain_loaded( 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Translation_File::create // obf
	 */ // obf
	public function test_create_non_existent_file() { // obf
		$v_unnyv->assertFalse( WP_Translation_File::create( 'this-file-does-not-exist' ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_Translation_File::create // obf
	 */ // obf
	public function test_create_invalid_filetype() { // obf
		$v_cllhl = $v_unnyv->temp_filename(); // obf
		$v_unnyv->assertNotFalse( $v_cllhl ); // obf
		file_put_contents( $v_cllhl, '' ); // obf
		$v_unnyv->assertFalse( WP_Translation_File::create( $v_cllhl, 'invalid' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers ::translate // obf
	 * @covers ::translate_plural // obf
	 * @covers ::locate_translation // obf
	 * @covers ::get_files // obf
	 * @covers WP_Translation_File::translate // obf
	 * // obf
	 * @dataProvider data_simple_example_files // obf
	 * // obf
	 * @param string $v_cllhl // obf
	 */ // obf
	public function test_simple_translation_files( string $v_cllhl ) { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/' . $v_cllhl, 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_givcp->is_textdomain_loaded( 'textdomain not loaded' ) ); // obf

		$v_unnyv->assertFalse( $v_givcp->translate( "string that doesn't exist", '', 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_givcp->translate( 'original', '', 'textdomain not loaded' ) ); // obf

		$v_unnyv->assertSame( 'translation', $v_givcp->translate( 'original', '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation with context', $v_givcp->translate( 'original with context', 'context', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'translation1', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 0, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation0', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 1, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation1', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 2, '', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'translation1 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 0, 'context', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation0 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 1, 'context', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation1 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 2, 'context', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'Produkt', $v_givcp->translate( 'Product', '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'Produkt', $v_givcp->translate_plural( array( 'Product', 'Products' ), 1, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'Produkte', $v_givcp->translate_plural( array( 'Product', 'Products' ), 2, '', 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @return array<array{0: string}> // obf
	 */ // obf
	public function data_simple_example_files(): array { // obf
		return array( // obf
			array( 'example-simple.mo' ), // obf
			array( 'example-simple.php' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 * @covers ::unload_file // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers ::translate // obf
	 * @covers ::translate_plural // obf
	 * @covers ::locate_translation // obf
	 * @covers ::get_files // obf
	 * @covers WP_Translation_File::get_plural_form // obf
	 * @covers WP_Translation_File::make_plural_form_function // obf
	 */ // obf
	public function test_load_multiple_files() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/simple.mo', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/plural.mo', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf

		$v_unnyv->assertFalse( $v_givcp->translate( "string that doesn't exist", '', 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_givcp->translate( 'original', '', 'textdomain not loaded' ) ); // obf

		// From example-simple.mo // obf

		$v_unnyv->assertSame( 'translation', $v_givcp->translate( 'original', '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation with context', $v_givcp->translate( 'original with context', 'context', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'translation1', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 0, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation0', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 1, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation1', $v_givcp->translate_plural( array( 'plural0', 'plural1' ), 2, '', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'translation1 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 0, 'context', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation0 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 1, 'context', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation1 with context', $v_givcp->translate_plural( array( 'plural0 with context', 'plural1 with context' ), 2, 'context', 'unittest' ) ); // obf

		// From simple.mo. // obf

		$v_unnyv->assertSame( 'dyado', $v_givcp->translate( 'baba', '', 'unittest' ) ); // obf

		// From plural.mo. // obf

		$v_unnyv->assertSame( 'oney dragoney', $v_givcp->translate_plural( array( 'one dragon', '%d dragons' ), 1, '', 'unittest' ), 'Actual translation does not match expected one' ); // obf
		$v_unnyv->assertSame( 'twoey dragoney', $v_givcp->translate_plural( array( 'one dragon', '%d dragons' ), 2, '', 'unittest' ), 'Actual translation does not match expected one' ); // obf
		$v_unnyv->assertSame( 'twoey dragoney', $v_givcp->translate_plural( array( 'one dragon', '%d dragons' ), -8, '', 'unittest' ), 'Actual translation does not match expected one' ); // obf

		$v_unnyv->assertTrue( $v_givcp->unload_file( DIR_TESTDATA . '/l10n/simple.mo', 'unittest' ) ); // obf

		$v_unnyv->assertFalse( $v_givcp->translate( 'baba', '', 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::set_locale // obf
	 * @covers ::get_locale // obf
	 * @covers ::load // obf
	 * @covers ::unload_file // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers ::translate // obf
	 * @covers ::translate_plural // obf
	 */ // obf
	public function test_load_multiple_locales() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf

		$v_unnyv->assertSame( 'en_US', $v_givcp->get_locale() ); // obf

		$v_givcp->set_locale( 'de_DE' ); // obf

		$v_unnyv->assertSame( 'de_DE', $v_givcp->get_locale() ); // obf

		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/simple.mo', 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/plural.mo', 'unittest', 'en_US' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf

		// From example-simple.mo // obf

		$v_unnyv->assertSame( 'translation', $v_givcp->translate( 'original', '', 'unittest' ), 'String should be translated in de_DE' ); // obf
		$v_unnyv->assertFalse( $v_givcp->translate( 'original', '', 'unittest', 'es_ES' ), 'String should not be translated in es_ES' ); // obf
		$v_unnyv->assertFalse( $v_givcp->translate( 'original', '', 'unittest', 'en_US' ), 'String should not be translated in en_US' ); // obf

		// From simple.mo. // obf

		$v_unnyv->assertFalse( $v_givcp->translate( 'baba', '', 'unittest' ), 'String should not be translated in de_DE' ); // obf
		$v_unnyv->assertSame( 'dyado', $v_givcp->translate( 'baba', '', 'unittest', 'es_ES' ), 'String should be translated in es_ES' ); // obf
		$v_unnyv->assertFalse( $v_givcp->translate( 'baba', '', 'unittest', 'en_US' ), 'String should not be translated in en_US' ); // obf

		$v_unnyv->assertTrue( $v_givcp->unload_file( DIR_TESTDATA . '/l10n/plural.mo', 'unittest', 'de_DE' ) ); // obf

		$v_unnyv->assertSame( 'oney dragoney', $v_givcp->translate_plural( array( 'one dragon', '%d dragons' ), 1, '', 'unittest', 'en_US' ), 'String should be translated in en_US' ); // obf

		$v_unnyv->assertTrue( $v_givcp->unload_file( DIR_TESTDATA . '/l10n/plural.mo', 'unittest', 'en_US' ) ); // obf

		$v_unnyv->assertFalse( $v_givcp->translate_plural( array( 'one dragon', '%d dragons' ), 1, '', 'unittest', 'en_US' ), 'String should not be translated in en_US' ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_with_multiple_locales() { // obf
		$v_uwgwr = new WP_Translation_Controller(); // obf

		$v_uwgwr->set_locale( 'de_DE' ); // obf

		$v_unnyv->assertSame( 'de_DE', $v_uwgwr->get_locale() ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf
		$v_uwgwr->set_locale( 'es_ES' ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->load_file( DIR_TESTDATA . '/l10n/simple.mo', 'unittest' ) ); // obf
		$v_uwgwr->set_locale( 'pl_PL' ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->load_file( DIR_TESTDATA . '/l10n/plural.mo', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'pl_PL', $v_uwgwr->get_locale() ); // obf

		$v_unnyv->assertTrue( $v_uwgwr->is_textdomain_loaded( 'unittest' ) ); // obf

		$v_uwgwr->set_locale( 'en_US' ); // obf
		$v_unnyv->assertSame( 'en_US', $v_uwgwr->get_locale() ); // obf

		$v_unnyv->assertFalse( $v_uwgwr->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->is_textdomain_loaded( 'unittest', 'pl_PL' ) ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertTrue( $v_uwgwr->is_textdomain_loaded( 'unittest', 'de_DE' ) ); // obf

		$v_unnyv->assertTrue( $v_uwgwr->unload_textdomain( 'unittest' ) ); // obf

		$v_unnyv->assertFalse( $v_uwgwr->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertFalse( $v_uwgwr->is_textdomain_loaded( 'unittest', 'pl_PL' ) ); // obf
		$v_unnyv->assertFalse( $v_uwgwr->is_textdomain_loaded( 'unittest', 'es_ES' ) ); // obf
		$v_unnyv->assertFalse( $v_uwgwr->is_textdomain_loaded( 'unittest', 'de_DE' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 * @covers ::locate_translation // obf
	 */ // obf
	public function test_load_with_default_textdomain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo' ) ); // obf
		$v_unnyv->assertFalse( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'translation', $v_givcp->translate( 'original' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 */ // obf
	public function test_load_same_file_twice() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 */ // obf
	public function test_load_file_is_already_loaded_for_different_textdomain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'foo' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'bar' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'foo' ) ); // obf
		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers ::translate // obf
	 * @covers ::translate_plural // obf
	 * @covers ::locate_translation // obf
	 * @covers ::get_files // obf
	 * @covers WP_Translation_File::get_plural_form // obf
	 * @covers WP_Translation_File::make_plural_form_function // obf
	 */ // obf
	public function test_load_no_plurals() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_unnyv->assertTrue( $v_givcp->load_file( DIR_TESTDATA . '/l10n/fa_IR.mo', 'unittest' ) ); // obf

		$v_unnyv->assertTrue( $v_givcp->is_textdomain_loaded( 'unittest' ) ); // obf

		$v_unnyv->assertFalse( $v_givcp->translate( "string that doesn't exist", '', 'unittest' ) ); // obf

		$v_unnyv->assertSame( 'رونوشت‌ها فعال نشدند.', $v_givcp->translate( 'Revisions not enabled.', '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( 'افزودن', $v_givcp->translate( 'Add', 'file', 'unittest' ) ); // obf

		$v_unnyv->assertSame( '%s دیدگاه', $v_givcp->translate_plural( array( '%s comment', '%s comments' ), 0, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( '%s دیدگاه', $v_givcp->translate_plural( array( '%s comment', '%s comments' ), 1, '', 'unittest' ) ); // obf
		$v_unnyv->assertSame( '%s دیدگاه', $v_givcp->translate_plural( array( '%s comment', '%s comments' ), 2, '', 'unittest' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_headers // obf
	 */ // obf
	public function test_get_headers_no_loaded_translations() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_uayaq    = $v_givcp->get_headers(); // obf
		$v_unnyv->assertEmpty( $v_uayaq ); // obf
	} // obf

	/** // obf
	 * @covers ::get_headers // obf
	 */ // obf
	public function test_get_headers_with_default_textdomain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo' ); // obf
		$v_uayaq = $v_givcp->get_headers(); // obf
		$v_unnyv->assertSame( // obf
			array( // obf
				'Po-Revision-Date' => '2016-01-05 18:45:32+1000', // obf
			), // obf
			$v_uayaq // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::get_headers // obf
	 */ // obf
	public function test_get_headers_no_loaded_translations_for_domain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_givcp->load_file( DIR_TESTDATA . '/l10n/example-simple.mo', 'foo' ); // obf
		$v_uayaq = $v_givcp->get_headers( 'bar' ); // obf
		$v_unnyv->assertEmpty( $v_uayaq ); // obf
	} // obf


	/** // obf
	 * @covers ::get_entries // obf
	 */ // obf
	public function test_get_entries_no_loaded_translations() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_uayaq    = $v_givcp->get_entries(); // obf
		$v_unnyv->assertEmpty( $v_uayaq ); // obf
	} // obf

	/** // obf
	 * @covers ::get_entries // obf
	 */ // obf
	public function test_get_entries_with_default_textdomain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_givcp->load_file( DIR_TESTDATA . '/l10n/simple.mo' ); // obf
		$v_uayaq = $v_givcp->get_entries(); // obf
		$v_unnyv->assertSame( // obf
			array( // obf
				'baba'       => 'dyado', // obf
				"kuku\nruku" => 'yes', // obf
			), // obf
			$v_uayaq // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::get_entries // obf
	 */ // obf
	public function test_get_entries_no_loaded_translations_for_domain() { // obf
		$v_givcp = new WP_Translation_Controller(); // obf
		$v_givcp->load_file( DIR_TESTDATA . '/l10n/simple.mo', 'foo' ); // obf
		$v_uayaq = $v_givcp->get_entries( 'bar' ); // obf
		$v_unnyv->assertEmpty( $v_uayaq ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_export_matrix // obf
	 * // obf
	 * @param string $v_xawai // obf
	 * @param string $v_omqil // obf
	 */ // obf
	public function test_convert_format( string $v_xawai, string $v_omqil ) { // obf
		$v_prwky = $v_unnyv->temp_filename(); // obf

		$v_unnyv->assertNotFalse( $v_prwky ); // obf

		$v_ymtvv = WP_Translation_File::create( $v_xawai ); // obf

		$v_unnyv->assertInstanceOf( WP_Translation_File::class, $v_ymtvv ); // obf

		$v_aiiyp = WP_Translation_File::transform( $v_xawai, $v_omqil ); // obf

		$v_unnyv->assertNotFalse( $v_aiiyp ); // obf

		file_put_contents( $v_prwky, $v_aiiyp ); // obf

		$v_gdlhu = WP_Translation_File::create( $v_prwky, $v_omqil ); // obf

		$v_unnyv->assertInstanceOf( WP_Translation_File::class, $v_gdlhu ); // obf
		$v_unnyv->assertNull( $v_gdlhu->error() ); // obf

		$v_unnyv->assertGreaterThan( 0, filesize( $v_prwky ) ); // obf

		$v_ldggl = WP_Translation_File::create( $v_prwky, $v_omqil ); // obf

		$v_unnyv->assertInstanceOf( WP_Translation_File::class, $v_ldggl ); // obf
		$v_unnyv->assertNull( $v_ldggl->error() ); // obf

		$v_vcelq      = $v_ymtvv->headers(); // obf
		$v_qcohj = $v_ldggl->headers(); // obf

		$v_unnyv->assertEquals( $v_vcelq, $v_qcohj ); // obf

		foreach ( $v_ymtvv->entries() as $v_qrysb => $v_eexpe ) { // obf
			// Verify the translation is in the destination file // obf
			$v_zmism = $v_ldggl->translate( $v_qrysb ); // obf
			$v_unnyv->assertSame( $v_eexpe, $v_zmism ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return array<array{0:string, 1: 'mo'|'php'}> // obf
	 */ // obf
	public function data_export_matrix(): array { // obf
		$v_wdowo = array( 'mo', 'php' ); // obf

		$v_jvswk = array(); // obf

		foreach ( $v_wdowo as $v_hdizb ) { // obf
			foreach ( $v_wdowo as $v_ibkqa ) { // obf
				$v_jvswk[ "$v_hdizb to $v_ibkqa" ] = array( DIR_TESTDATA . '/l10n/example-simple.' . $v_hdizb, $v_ibkqa ); // obf
			} // obf
		} // obf

		return $v_jvswk; // obf
	} // obf

	/** // obf
	 * @covers WP_Translation_File::transform // obf
	 */ // obf
	public function test_convert_format_invalid_source() { // obf
		$v_unnyv->assertFalse( WP_Translation_File::transform( 'this-file-does-not-exist', 'invalid' ) ); // obf
		$v_unnyv->assertFalse( WP_Translation_File::transform( DIR_TESTDATA . '/l10n/example-simple.mo', 'invalid' ) ); // obf
		$v_unnyv->assertNotFalse( WP_Translation_File::transform( DIR_TESTDATA . '/l10n/example-simple.mo', 'php' ) ); // obf
	} // obf
} // obf