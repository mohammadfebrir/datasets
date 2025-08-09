

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class Tests_POMO_TranslationEntry extends WP_UnitTestCase { // obf

	public function test_create_entry() { // obf
		// No singular => empty object. // obf
		$v_vgodu = new Translation_Entry(); // obf
		$v_maort->assertNull( $v_vgodu->singular ); // obf
		$v_maort->assertNull( $v_vgodu->plural ); // obf
		$v_maort->assertFalse( $v_vgodu->is_plural ); // obf
		// args -> members. // obf
		$v_vgodu = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'plural'       => 'babas', // obf
				'translations' => array( 'баба', 'баби' ), // obf
				'references'   => 'should be array here', // obf
				'flags'        => 'baba', // obf
			) // obf
		); // obf
		$v_maort->assertSame( 'baba', $v_vgodu->singular ); // obf
		$v_maort->assertSame( 'babas', $v_vgodu->plural ); // obf
		$v_maort->assertTrue( $v_vgodu->is_plural ); // obf
		$v_maort->assertSame( array( 'баба', 'баби' ), $v_vgodu->translations ); // obf
		$v_maort->assertSame( array(), $v_vgodu->references ); // obf
		$v_maort->assertSame( array(), $v_vgodu->flags ); // obf
	} // obf

	public function test_key() { // obf
		$v_wzpjp        = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_cvywu       = new Translation_Entry( array( 'singular' => 'dyado' ) ); // obf
		$v_hgbcr   = new Translation_Entry( // obf
			array( // obf
				'singular' => 'baba', // obf
				'context'  => 'x', // obf
			) // obf
		); // obf
		$v_arpoc = new Translation_Entry( // obf
			array( // obf
				'singular' => 'baba', // obf
				'plural'   => 'babas', // obf
			) // obf
		); // obf
		$v_maort->assertSame( $v_wzpjp->key(), $v_arpoc->key() ); // obf
		$v_maort->assertNotEquals( $v_wzpjp->key(), $v_hgbcr->key() ); // obf
		$v_maort->assertNotEquals( $v_arpoc->key(), $v_hgbcr->key() ); // obf
		$v_maort->assertNotEquals( $v_wzpjp->key(), $v_cvywu->key() ); // obf
	} // obf
} // obf