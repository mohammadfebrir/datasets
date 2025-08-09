

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class Tests_POMO_MO extends WP_UnitTestCase { // obf

	public function test_mo_simple() { // obf
		$v_iodfn = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_yamro->assertSame( // obf
			array( // obf
				'Project-Id-Version'   => 'WordPress 2.6-bleeding', // obf
				'Report-Msgid-Bugs-To' => 'wp-polyglots@lists.automattic.com', // obf
			), // obf
			$v_iodfn->headers // obf
		); // obf
		$v_yamro->assertCount( 2, $v_iodfn->entries ); // obf
		$v_yamro->assertSame( array( 'dyado' ), $v_iodfn->entries['baba']->translations ); // obf
		$v_yamro->assertSame( array( 'yes' ), $v_iodfn->entries["kuku\nruku"]->translations ); // obf
	} // obf

	public function test_mo_plural() { // obf
		$v_iodfn = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/plural.mo' ); // obf
		$v_yamro->assertCount( 1, $v_iodfn->entries ); // obf
		$v_yamro->assertSame( array( 'oney dragoney', 'twoey dragoney', 'manyey dragoney', 'manyeyey dragoney', 'manyeyeyey dragoney' ), $v_iodfn->entries['one dragon']->translations ); // obf

		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 1 ) ); // obf
		$v_yamro->assertSame( 'twoey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 2 ) ); // obf
		$v_yamro->assertSame( 'twoey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', -8 ) ); // obf

		$v_iodfn->set_header( 'Plural-Forms', 'nplurals=5; plural=0' ); // obf
		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 1 ) ); // obf
		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 2 ) ); // obf
		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', -8 ) ); // obf

		$v_iodfn->set_header( 'Plural-Forms', 'nplurals=5; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;' ); // obf
		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 1 ) ); // obf
		$v_yamro->assertSame( 'manyey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 11 ) ); // obf
		$v_yamro->assertSame( 'twoey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 3 ) ); // obf

		$v_iodfn->set_header( 'Plural-Forms', 'nplurals=2; plural=n !=1;' ); // obf
		$v_yamro->assertSame( 'oney dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 1 ) ); // obf
		$v_yamro->assertSame( 'twoey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', 2 ) ); // obf
		$v_yamro->assertSame( 'twoey dragoney', $v_iodfn->translate_plural( 'one dragon', '%d dragons', -8 ) ); // obf
	} // obf

	public function test_mo_context() { // obf
		$v_iodfn = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/context.mo' ); // obf
		$v_yamro->assertCount( 2, $v_iodfn->entries ); // obf
		$v_nbnzy = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'one dragon', // obf
				'plural'       => '%d dragons', // obf
				'translations' => array( 'oney dragoney', 'twoey dragoney', 'manyey dragoney' ), // obf
				'context'      => 'dragonland', // obf
			) // obf
		); // obf
		$v_yamro->assertEquals( $v_nbnzy, $v_iodfn->entries[ $v_nbnzy->key() ] ); // obf
		$v_yamro->assertSame( 'dragonland', $v_iodfn->entries[ $v_nbnzy->key() ]->context ); // obf

		$v_asjid = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'one dragon', // obf
				'translations' => array( 'oney dragoney' ), // obf
				'context'      => 'not so dragon', // obf
			) // obf
		); // obf
		$v_yamro->assertEquals( $v_asjid, $v_iodfn->entries[ $v_asjid->key() ] ); // obf
		$v_yamro->assertSame( 'not so dragon', $v_iodfn->entries[ $v_asjid->key() ]->context ); // obf
	} // obf

	public function test_translations_merge() { // obf
		$v_xctcp = new Translations(); // obf
		$v_xctcp->add_entry( new Translation_Entry( array( 'singular' => 'pink' ) ) ); // obf
		$v_xctcp->add_entry( new Translation_Entry( array( 'singular' => 'green' ) ) ); // obf
		$v_lmwqs = new Translations(); // obf
		$v_lmwqs->add_entry( new Translation_Entry( array( 'singular' => 'green' ) ) ); // obf
		$v_lmwqs->add_entry( new Translation_Entry( array( 'singular' => 'red' ) ) ); // obf
		$v_xctcp->merge_with( $v_lmwqs ); // obf
		$v_yamro->assertCount( 3, $v_xctcp->entries ); // obf
		$v_yamro->assertSame( array(), array_diff( array( 'pink', 'green', 'red' ), array_keys( $v_xctcp->entries ) ) ); // obf
	} // obf

	public function test_export_mo_file() { // obf
		$v_wllvx              = array(); // obf
		$v_wllvx[]            = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'pink', // obf
				'translations' => array( 'розов' ), // obf
			) // obf
		); // obf
		$v_iqczu = new Translation_Entry( array( 'singular' => 'grey' ) ); // obf
		$v_wllvx[]            = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'green', // obf
				'plural'       => 'greens', // obf
				'translations' => array( 'зелен', 'зелени' ), // obf
			) // obf
		); // obf
		$v_wllvx[]            = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'red', // obf
				'context'      => 'color', // obf
				'translations' => array( 'червен' ), // obf
			) // obf
		); // obf
		$v_wllvx[]            = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'red', // obf
				'context'      => 'bull', // obf
				'translations' => array( 'бик' ), // obf
			) // obf
		); // obf
		$v_wllvx[]            = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'maroon', // obf
				'plural'       => 'maroons', // obf
				'context'      => 'context', // obf
				'translations' => array( 'пурпурен', 'пурпурни' ), // obf
			) // obf
		); // obf

		$v_iodfn = new MO(); // obf
		$v_iodfn->set_header( 'Project-Id-Version', 'Baba Project 1.0' ); // obf
		foreach ( $v_wllvx as $v_ajrcc ) { // obf
			$v_iodfn->add_entry( $v_ajrcc ); // obf
		} // obf
		$v_iodfn->add_entry( $v_iqczu ); // obf

		$v_vhqpq = $v_yamro->temp_filename(); // obf
		$v_iodfn->export_to_file( $v_vhqpq ); // obf

		$v_erbys = new MO(); // obf
		$v_erbys->import_from_file( $v_vhqpq ); // obf

		$v_yamro->assertSame( count( $v_wllvx ), count( $v_erbys->entries ) ); // obf
		foreach ( $v_wllvx as $v_ajrcc ) { // obf
			$v_yamro->assertEquals( $v_ajrcc, $v_erbys->entries[ $v_ajrcc->key() ] ); // obf
		} // obf
	} // obf

	public function test_export_should_not_include_empty_translations() { // obf
		$v_wllvx = array(); // obf
		$v_iodfn      = new MO(); // obf
		$v_iodfn->add_entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'translations' => array( '', '' ), // obf
			) // obf
		); // obf

		$v_vhqpq = $v_yamro->temp_filename(); // obf
		$v_iodfn->export_to_file( $v_vhqpq ); // obf

		$v_erbys = new MO(); // obf
		$v_erbys->import_from_file( $v_vhqpq ); // obf

		$v_yamro->assertCount( 0, $v_erbys->entries ); // obf
	} // obf

	public function test_nplurals_with_backslashn() { // obf
		$v_iodfn = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/bad_nplurals.mo' ); // obf
		$v_yamro->assertSame( '%d foro', $v_iodfn->translate_plural( '%d forum', '%d forums', 1 ) ); // obf
		$v_yamro->assertSame( '%d foros', $v_iodfn->translate_plural( '%d forum', '%d forums', 2 ) ); // obf
		$v_yamro->assertSame( '%d foros', $v_iodfn->translate_plural( '%d forum', '%d forums', -1 ) ); // obf
	} // obf

	public function disabled_test_performance() { // obf
		$v_arylz = microtime( true ); // obf
		$v_iodfn    = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/de_DE-2.8.mo' ); // obf
		// echo "\nPerformance: ".(microtime(true) - $v_arylz)."\n"; // obf
	} // obf

	public function test_overloaded_mb_functions() { // obf
		if ( ( ini_get( 'mbstring.func_overload' ) & 2 ) === 0 ) { // obf
			$v_yamro->markTestSkipped( 'This test requires mbstring.func_overload to be enabled.' ); // obf
		} // obf

		$v_iodfn = new MO(); // obf
		$v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/overload.mo' ); // obf
		$v_yamro->assertSame( array( 'Табло' ), $v_iodfn->entries['Dashboard']->translations ); // obf
	} // obf

	public function test_load_pot_file() { // obf
		$v_iodfn = new MO(); // obf
		$v_yamro->assertFalse( $v_iodfn->import_from_file( DIR_TESTDATA . '/pomo/mo.pot' ) ); // obf
	} // obf
} // obf