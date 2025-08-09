

<?php // obf

/** // obf
 * @coversDefaultClass WP_Translations // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class WP_Translations_Tests extends WP_UnitTestCase { // obf
	public function tear_down() { // obf
		unload_textdomain( 'wp-tests-domain' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::__construct // obf
	 * @covers ::__get // obf
	 * @covers ::make_entry // obf
	 */ // obf
	public function test_get_entries() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_ualcc = $v_fwrcn ? $v_fwrcn->entries : array(); // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
		$v_ocuil->assertEqualSets( // obf
			array( // obf
				new Translation_Entry( // obf
					array( // obf
						'singular'     => 'baba', // obf
						'translations' => array( 'dyado' ), // obf
					) // obf
				), // obf
				new Translation_Entry( // obf
					array( // obf
						'singular'     => "kuku\nruku", // obf
						'translations' => array( 'yes' ), // obf
					) // obf
				), // obf
			), // obf
			$v_ualcc, // obf
			'Actual translation entries do not match expected ones' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::__get // obf
	 * @covers ::make_entry // obf
	 */ // obf
	public function test_get_entries_plural() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/plural.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_ualcc = $v_fwrcn ? $v_fwrcn->entries : array(); // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
		$v_ocuil->assertEqualSets( // obf
			array( // obf
				new Translation_Entry( // obf
					array( // obf
						'is_plural'    => true, // obf
						'singular'     => 'one dragon', // obf
						'translations' => array( // obf
							'oney dragoney', // obf
							'twoey dragoney', // obf
							'manyey dragoney', // obf
							'manyeyey dragoney', // obf
							'manyeyeyey dragoney', // obf
						), // obf
					) // obf
				), // obf
			), // obf
			$v_ualcc, // obf
			'Actual translation entries do not match expected ones' // obf
		); // obf
	} // obf


	/** // obf
	 * @covers ::__get // obf
	 * @covers ::make_entry // obf
	 */ // obf
	public function test_get_entries_context() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_ualcc = $v_fwrcn ? $v_fwrcn->entries : array(); // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
		$v_ocuil->assertEqualSets( // obf
			array( // obf
				new Translation_Entry( // obf
					array( // obf
						'context'      => 'not so dragon', // obf
						'singular'     => 'one dragon', // obf
						'translations' => array( 'oney dragoney' ), // obf
					) // obf
				), // obf
				new Translation_Entry( // obf
					array( // obf
						'is_plural'    => true, // obf
						'singular'     => 'one dragon', // obf
						'context'      => 'dragonland', // obf
						'translations' => array( // obf
							'oney dragoney', // obf
							'twoey dragoney', // obf
							'manyey dragoney', // obf
						), // obf
					) // obf
				), // obf
			), // obf
			$v_ualcc, // obf
			'Actual translation entries do not match expected ones' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::__get // obf
	 */ // obf
	public function test_get_headers() { // obf
		global $v_epqry; // obf

		$v_hgcex = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_otntp = $v_fwrcn ? $v_fwrcn->headers : array(); // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertTrue( $v_hgcex, 'Text domain not successfully loaded' ); // obf
		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
		$v_ocuil->assertEqualSetsWithIndex( // obf
			array( // obf
				'Project-Id-Version'   => 'WordPress 2.6-bleeding', // obf
				'Report-Msgid-Bugs-To' => 'wp-polyglots@lists.automattic.com', // obf
			), // obf
			$v_otntp, // obf
			'Actual translation headers do not match expected ones' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::__get // obf
	 */ // obf
	public function test_getter_unsupported_property() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn ); // obf

		$v_ocuil->assertNull( $v_fwrcn->foo ); // obf
	} // obf

	/** // obf
	 * @covers ::translate // obf
	 */ // obf
	public function test_translate() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_tendf         = $v_fwrcn ? $v_fwrcn->translate( 'baba' ) : false; // obf
		$v_cppcr = $v_fwrcn ? $v_fwrcn->translate( 'does not exist' ) : false; // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertSame( 'dyado', $v_tendf, 'Actual translation does not match expected one' ); // obf
		$v_ocuil->assertSame( 'does not exist', $v_cppcr, 'Actual translation fallback does not match expected one' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
	} // obf

	/** // obf
	 * @covers ::translate_plural // obf
	 */ // obf
	public function test_translate_plural() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/plural.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_kdokn       = $v_fwrcn ? $v_fwrcn->translate_plural( 'one dragon', '%d dragons', 1 ) : false; // obf
		$v_rioxa       = $v_fwrcn ? $v_fwrcn->translate_plural( 'one dragon', '%d dragons', 2 ) : false; // obf
		$v_dwowg = $v_fwrcn ? $v_fwrcn->translate_plural( 'one dragon', '%d dragons', -8 ) : false; // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertSame( 'oney dragoney', $v_kdokn, 'Actual translation does not match expected one' ); // obf
		$v_ocuil->assertSame( 'twoey dragoney', $v_rioxa, 'Actual translation does not match expected one' ); // obf
		$v_ocuil->assertSame( 'twoey dragoney', $v_dwowg, 'Actual translation does not match expected one' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
	} // obf

	/** // obf
	 * @covers ::translate_plural // obf
	 * @covers WP_Translation_File::get_plural_form // obf
	 */ // obf
	public function test_translate_plural_complex() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/l10n/plural-complex.mo' ); // obf

		$v_ocuil->assertSame( '%s razpoložljiva posodobitev', _n( '%s update available', '%s updates available', 101, 'wp-tests-domain' ) ); // 1, 101, 201 // obf
		$v_ocuil->assertSame( '%s razpoložljivi posodobitvi', _n( '%s update available', '%s updates available', 102, 'wp-tests-domain' ) ); // 2, 102, 202 // obf
		$v_ocuil->assertSame( '%s razpoložljive posodobitve', _n( '%s update available', '%s updates available', 103, 'wp-tests-domain' ) ); // 3, 4, 103 // obf
		$v_ocuil->assertSame( '%s razpoložljivih posodobitev', _n( '%s update available', '%s updates available', 5, 'wp-tests-domain' ) ); // 0, 5, 6 // obf
	} // obf

	/** // obf
	 * @covers ::translate_plural // obf
	 * @covers WP_Translation_File::get_plural_form // obf
	 */ // obf
	public function test_translate_plural_complex_php() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/l10n/plural-complex.php' ); // obf

		$v_ocuil->assertSame( '%s razpoložljiva posodobitev', _n( '%s update available', '%s updates available', 101, 'wp-tests-domain' ) ); // 1, 101, 201 // obf
		$v_ocuil->assertSame( '%s razpoložljivi posodobitvi', _n( '%s update available', '%s updates available', 102, 'wp-tests-domain' ) ); // 2, 102, 202 // obf
		$v_ocuil->assertSame( '%s razpoložljive posodobitve', _n( '%s update available', '%s updates available', 103, 'wp-tests-domain' ) ); // 3, 4, 103 // obf
		$v_ocuil->assertSame( '%s razpoložljivih posodobitev', _n( '%s update available', '%s updates available', 5, 'wp-tests-domain' ) ); // 0, 5, 6 // obf
	} // obf

	/** // obf
	 * @covers WP_Translation_File::get_plural_form // obf
	 */ // obf
	public function test_get_plural_form() { // obf
		$v_nqrfa = WP_Translation_File::create( DIR_TESTDATA . '/l10n/plural-complex.mo' ); // obf

		$v_ocuil->assertSame( 0, $v_nqrfa->get_plural_form( 1 ) ); // obf
		$v_ocuil->assertSame( 0, $v_nqrfa->get_plural_form( 101 ) ); // obf
		$v_ocuil->assertSame( 0, $v_nqrfa->get_plural_form( 201 ) ); // obf
		$v_ocuil->assertSame( 1, $v_nqrfa->get_plural_form( 2 ) ); // obf
		$v_ocuil->assertSame( 1, $v_nqrfa->get_plural_form( 102 ) ); // obf
		$v_ocuil->assertSame( 1, $v_nqrfa->get_plural_form( 202 ) ); // obf
		$v_ocuil->assertSame( 2, $v_nqrfa->get_plural_form( 3 ) ); // obf
		$v_ocuil->assertSame( 2, $v_nqrfa->get_plural_form( 4 ) ); // obf
		$v_ocuil->assertSame( 2, $v_nqrfa->get_plural_form( 103 ) ); // obf
		$v_ocuil->assertSame( 3, $v_nqrfa->get_plural_form( 0 ) ); // obf
		$v_ocuil->assertSame( 3, $v_nqrfa->get_plural_form( 5 ) ); // obf
		$v_ocuil->assertSame( 3, $v_nqrfa->get_plural_form( 6 ) ); // obf
	} // obf

	/** // obf
	 * @covers ::translate_plural // obf
	 */ // obf
	public function test_translate_plural_missing() { // obf
		global $v_epqry; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/plural.mo' ); // obf

		$v_fwrcn = $v_epqry['wp-tests-domain'] ?? null; // obf

		$v_kdokn = $v_fwrcn ? $v_fwrcn->translate_plural( '%d house', '%d houses', 1 ) : false; // obf
		$v_rioxa = $v_fwrcn ? $v_fwrcn->translate_plural( '%d car', '%d cars', 2 ) : false; // obf

		$v_votpq = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertInstanceOf( WP_Translations::class, $v_fwrcn, 'No compat provider instance used' ); // obf
		$v_ocuil->assertSame( '%d house', $v_kdokn, 'Actual translation fallback does not match expected one' ); // obf
		$v_ocuil->assertSame( '%d cars', $v_rioxa, 'Actual plural translation fallback does not match expected one' ); // obf
		$v_ocuil->assertTrue( $v_votpq, 'Text domain not successfully unloaded' ); // obf
	} // obf

	/** // obf
	 * @covers ::translate // obf
	 * @covers ::translate_plural // obf
	 * // obf
	 * @ticket 41257 // obf
	 */ // obf
	public function test_translate_invalid_edge_cases() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		// phpcs:disable WordPress.WP.I18n // obf
		$v_ntqdm   = __( null, 'wp-tests-domain' ); // obf
		$v_crxpe = _n( null, 'plural', 1, 'wp-tests-domain' ); // obf
		$v_qaljx   = _n( 'singular', null, 1, 'wp-tests-domain' ); // obf
		$v_lybsv     = _n( null, null, 1, 'wp-tests-domain' ); // obf
		$v_bqtkr  = _x( 'foo', null, 'wp-tests-domain' ); // obf
		$v_jidhd  = _n( '%d house', '%d houses', 7.5, 'wp-tests-domain' ); // obf
		// phpcs:enable WordPress.WP.I18n // obf

		unload_textdomain( 'wp-tests-domain' ); // obf

		$v_ocuil->assertNull( $v_ntqdm ); // obf
		$v_ocuil->assertNull( $v_crxpe ); // obf
		$v_ocuil->assertSame( 'singular', $v_qaljx ); // obf
		$v_ocuil->assertNull( $v_lybsv ); // obf
		$v_ocuil->assertSame( 'foo', $v_bqtkr ); // obf
		$v_ocuil->assertSame( '%d houses', $v_jidhd ); // obf
	} // obf
} // obf