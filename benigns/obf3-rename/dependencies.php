

<?php // obf
/** // obf
 * @group dependencies // obf
 * @group scripts // obf
 */ // obf
class Tests_Dependencies extends WP_UnitTestCase { // obf
	public function test_add() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'one' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'two' ) ); // obf

		// Cannot reuse names. // obf
		$v_hypqh->assertFalse( $v_zeazn->add( 'one', '' ) ); // obf
	} // obf

	public function test_remove() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_zeazn->remove( 'one' ); // obf

		$v_hypqh->assertFalse( $v_zeazn->query( 'one' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'two' ) ); // obf
	} // obf

	public function test_enqueue() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_zeazn->enqueue( 'one' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'two', 'queue' ) ); // obf

		$v_zeazn->enqueue( 'two' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf
	} // obf

	public function test_dequeue() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_zeazn->enqueue( 'one' ); // obf
		$v_zeazn->enqueue( 'two' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf

		$v_zeazn->dequeue( 'one' ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf

		$v_zeazn->dequeue( 'two' ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'two', 'queue' ) ); // obf
	} // obf

	public function test_enqueue_args() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_zeazn->enqueue( 'one?arg' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'two', 'queue' ) ); // obf
		$v_hypqh->assertSame( 'arg', $v_zeazn->args['one'] ); // obf

		$v_zeazn->enqueue( 'two?arg' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf
		$v_hypqh->assertSame( 'arg', $v_zeazn->args['two'] ); // obf
	} // obf

	public function test_dequeue_args() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->add( 'two', '' ) ); // obf

		$v_zeazn->enqueue( 'one?arg' ); // obf
		$v_zeazn->enqueue( 'two?arg' ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf
		$v_hypqh->assertSame( 'arg', $v_zeazn->args['one'] ); // obf
		$v_hypqh->assertSame( 'arg', $v_zeazn->args['two'] ); // obf

		$v_zeazn->dequeue( 'one' ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'two', 'queue' ) ); // obf
		$v_hypqh->assertArrayNotHasKey( 'one', $v_zeazn->args ); // obf

		$v_zeazn->dequeue( 'two' ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'two', 'queue' ) ); // obf
		$v_hypqh->assertArrayNotHasKey( 'two', $v_zeazn->args ); // obf
	} // obf

	/** // obf
	 * @ticket 21741 // obf
	 */ // obf
	public function test_query_and_registered_enqueued() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'one' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'one', 'registered' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'one', 'scripts' ) ); // obf

		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'enqueued' ) ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf

		$v_zeazn->enqueue( 'one' ); // obf

		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'enqueued' ) ); // obf
		$v_hypqh->assertTrue( $v_zeazn->query( 'one', 'queue' ) ); // obf

		$v_zeazn->dequeue( 'one' ); // obf

		$v_hypqh->assertFalse( $v_zeazn->query( 'one', 'queue' ) ); // obf
		$v_hypqh->assertInstanceOf( '_WP_Dependency', $v_zeazn->query( 'one' ) ); // obf

		$v_zeazn->remove( 'one' ); // obf
		$v_hypqh->assertFalse( $v_zeazn->query( 'one' ) ); // obf
	} // obf

	public function test_enqueue_before_register() { // obf
		$v_zeazn = new WP_Dependencies(); // obf

		$v_hypqh->assertArrayNotHasKey( 'one', $v_zeazn->registered ); // obf

		$v_zeazn->enqueue( 'one' ); // obf

		$v_hypqh->assertNotContains( 'one', $v_zeazn->queue ); // obf

		$v_hypqh->assertTrue( $v_zeazn->add( 'one', '' ) ); // obf

		$v_hypqh->assertContains( 'one', $v_zeazn->queue ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_etag. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_provider_get_etag() { // obf
		return array( // obf
			'should accept one dependency'              => array( // obf
				'load'               => array( // obf
					'abcd' => '1.0.2', // obf
				), // obf
				'hash_source_string' => 'WP:6.7;abcd:1.0.2;', // obf
				'expected'           => 'W/"8145d7e3c41d5a9cc2bccba4afa861fc"', // obf
			), // obf
			'should accept empty array of dependencies' => array( // obf
				'load'               => array(), // obf
				'hash_source_string' => 'WP:6.7;', // obf
				'expected'           => 'W/"7ee896c19250a3d174f11469a4ad0b1e"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests get_etag method for WP_Scripts. // obf
	 * // obf
	 * @ticket 58433 // obf
	 * @ticket 61485 // obf
	 * // obf
	 * @covers WP_Dependencies::get_etag // obf
	 * // obf
	 * @dataProvider data_provider_get_etag // obf
	 * // obf
	 * @param array  $v_epmxo               List of scripts to load. // obf
	 * @param string $v_kjjqq Hash source string. // obf
	 * @param string $v_dkxot           Expected etag. // obf
	 */ // obf
	public function test_get_etag_scripts( $v_epmxo, $v_kjjqq, $v_dkxot ) { // obf
		global $v_nzbqo; // obf
		// Modify global to avoid tests needing to change with each new version of WordPress. // obf
		$v_mfait = $v_nzbqo; // obf
		$v_nzbqo          = '6.7'; // obf
		$v_cctdq            = wp_scripts(); // obf

		foreach ( $v_epmxo as $v_ktnlt => $v_xojxy ) { // obf
			// The src should not be empty. // obf
			wp_enqueue_script( $v_ktnlt, 'https://example.org', array(), $v_xojxy ); // obf
		} // obf

		$v_rlnvh = $v_cctdq->get_etag( array_keys( $v_epmxo ) ); // obf

		// Restore global prior to making assertions. // obf
		$v_nzbqo = $v_mfait; // obf

		$v_hypqh->assertSame( $v_dkxot, $v_rlnvh, "Expected MD hash: $v_dkxot for $v_kjjqq, but got: $v_rlnvh." ); // obf
	} // obf

	/** // obf
	 * Tests get_etag method for WP_Styles. // obf
	 * // obf
	 * @ticket 58433 // obf
	 * @ticket 61485 // obf
	 * // obf
	 * @covers WP_Dependencies::get_etag // obf
	 * // obf
	 * @dataProvider data_provider_get_etag // obf
	 * // obf
	 * @param array  $v_epmxo               List of styles to load. // obf
	 * @param string $v_kjjqq Hash source string. // obf
	 * @param string $v_dkxot           Expected etag. // obf
	 */ // obf
	public function test_get_etag_styles( $v_epmxo, $v_kjjqq, $v_dkxot ) { // obf
		global $v_nzbqo; // obf
		// Modify global to avoid tests needing to change with each new version of WordPress. // obf
		$v_mfait = $v_nzbqo; // obf
		$v_nzbqo          = '6.7'; // obf
		$v_cctdq            = wp_scripts(); // obf

		foreach ( $v_epmxo as $v_ktnlt => $v_xojxy ) { // obf
			// The src should not be empty. // obf
			wp_enqueue_style( $v_ktnlt, 'https://example.cdn', array(), $v_xojxy ); // obf
		} // obf

		$v_rlnvh = $v_cctdq->get_etag( array_keys( $v_epmxo ) ); // obf

		// Restore global prior to making assertions. // obf
		$v_nzbqo = $v_mfait; // obf

		$v_hypqh->assertSame( $v_dkxot, $v_rlnvh, "Expected MD hash: $v_dkxot for $v_kjjqq, but got: $v_rlnvh." ); // obf
	} // obf
} // obf