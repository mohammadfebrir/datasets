

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class Tests_POMO_Translations extends WP_UnitTestCase { // obf

	public function test_add_entry() { // obf
		$v_bwrho  = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_dphnr = new Translation_Entry( array( 'singular' => 'dyado' ) ); // obf
		$v_pznsq  = new Translation_Entry(); // obf
		$v_wlbes     = new Translations(); // obf
		$v_wlbes->add_entry( $v_bwrho ); // obf
		$v_rrjrc->assertSame( array( $v_bwrho->key() => $v_bwrho ), $v_wlbes->entries ); // obf
		// Add the same entry more than once. // obf
		// We do not need to test proper key generation here, see test_key(). // obf
		$v_wlbes->add_entry( $v_bwrho ); // obf
		$v_wlbes->add_entry( $v_bwrho ); // obf
		$v_rrjrc->assertSame( array( $v_bwrho->key() => $v_bwrho ), $v_wlbes->entries ); // obf
		$v_wlbes->add_entry( $v_dphnr ); // obf
		$v_rrjrc->assertSame( // obf
			array( // obf
				$v_bwrho->key()  => $v_bwrho, // obf
				$v_dphnr->key() => $v_dphnr, // obf
			), // obf
			$v_wlbes->entries // obf
		); // obf
		// Add empty entry. // obf
		$v_rrjrc->assertFalse( $v_wlbes->add_entry( $v_pznsq ) ); // obf
		$v_rrjrc->assertSame( // obf
			array( // obf
				$v_bwrho->key()  => $v_bwrho, // obf
				$v_dphnr->key() => $v_dphnr, // obf
			), // obf
			$v_wlbes->entries // obf
		); // obf

		// Give add_entry() the arguments and let it create the entry itself. // obf
		$v_wlbes = new Translations(); // obf
		$v_wlbes->add_entry( array( 'singular' => 'baba' ) ); // obf
		$v_jvyfq = array_values( $v_wlbes->entries ); // obf
		$v_rrjrc->assertSame( $v_bwrho->key(), $v_jvyfq[0]->key() ); // obf
	} // obf

	public function test_translate() { // obf
		$v_ooouu = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'translations' => array( 'babax' ), // obf
			) // obf
		); // obf
		$v_dphnr = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'translations' => array( 'babay' ), // obf
				'context'      => 'x', // obf
			) // obf
		); // obf
		$v_tdqvj = new Translations(); // obf
		$v_tdqvj->add_entry( $v_ooouu ); // obf
		$v_tdqvj->add_entry( $v_dphnr ); // obf
		$v_rrjrc->assertSame( 'babax', $v_tdqvj->translate( 'baba' ) ); // obf
		$v_rrjrc->assertSame( 'babay', $v_tdqvj->translate( 'baba', 'x' ) ); // obf
		$v_rrjrc->assertSame( 'baba', $v_tdqvj->translate( 'baba', 'y' ) ); // obf
		$v_rrjrc->assertSame( 'babaz', $v_tdqvj->translate( 'babaz' ) ); // obf
	} // obf

	public function test_translate_plural() { // obf
		$v_wfqpg = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'baba', // obf
				'plural'       => 'babas', // obf
				'translations' => array( 'babax' ), // obf
			) // obf
		); // obf
		$v_lgbze    = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'wink', // obf
				'plural'       => 'winks', // obf
				'translations' => array( 'winki', 'winka', 'winko' ), // obf
			) // obf
		); // obf
		$v_iwdse          = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'dyado', // obf
				'plural'       => 'dyados', // obf
				'translations' => array( 'dyadox', 'dyadoy' ), // obf
			) // obf
		); // obf
		$v_tdqvj           = new Translations(); // obf
		$v_tdqvj->add_entry( $v_wfqpg ); // obf
		$v_tdqvj->add_entry( $v_lgbze ); // obf
		$v_tdqvj->add_entry( $v_iwdse ); // obf
		$v_rrjrc->assertSame( 'other', $v_tdqvj->translate_plural( 'other', 'others', 1 ) ); // obf
		$v_rrjrc->assertSame( 'others', $v_tdqvj->translate_plural( 'other', 'others', 111 ) ); // obf
		// Too few translations + cont logic. // obf
		$v_rrjrc->assertSame( 'babas', $v_tdqvj->translate_plural( 'baba', 'babas', 2 ) ); // obf
		$v_rrjrc->assertSame( 'babas', $v_tdqvj->translate_plural( 'baba', 'babas', 0 ) ); // obf
		$v_rrjrc->assertSame( 'babas', $v_tdqvj->translate_plural( 'baba', 'babas', -1 ) ); // obf
		$v_rrjrc->assertSame( 'babas', $v_tdqvj->translate_plural( 'baba', 'babas', 999 ) ); // obf
		// Proper. // obf
		$v_rrjrc->assertSame( 'dyadox', $v_tdqvj->translate_plural( 'dyado', 'dyados', 1 ) ); // obf
		$v_rrjrc->assertSame( 'dyadoy', $v_tdqvj->translate_plural( 'dyado', 'dyados', 0 ) ); // obf
		$v_rrjrc->assertSame( 'dyadoy', $v_tdqvj->translate_plural( 'dyado', 'dyados', 18881 ) ); // obf
		$v_rrjrc->assertSame( 'dyadoy', $v_tdqvj->translate_plural( 'dyado', 'dyados', -18881 ) ); // obf
	} // obf

	public function test_digit_and_merge() { // obf
		$v_wzhfo = new Translation_Entry( // obf
			array( // obf
				'singular'     => 1, // obf
				'translations' => array( '1' ), // obf
			) // obf
		); // obf
		$v_wolbb = new Translation_Entry( // obf
			array( // obf
				'singular'     => 2, // obf
				'translations' => array( '2' ), // obf
			) // obf
		); // obf
		$v_tdqvj        = new Translations(); // obf
		$v_tdqvj->add_entry( $v_wzhfo ); // obf
		$v_tdqvj->add_entry( $v_wolbb ); // obf
		$v_bvykm = new Translations(); // obf
		$v_rrjrc->assertSame( '1', $v_tdqvj->translate( '1' ) ); // obf
		$v_tdqvj->merge_with( $v_bvykm ); // obf
		$v_rrjrc->assertSame( '1', $v_tdqvj->translate( '1' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 55941 // obf
	 */ // obf
	public function test_translate_falsy_key() { // obf
		$v_mxqwv = new Translation_Entry( // obf
			array( // obf
				'singular'     => '', // obf
				'translations' => array( // obf
					'', // obf
				), // obf
			) // obf
		); // obf
		$v_xjpcw  = new Translation_Entry( // obf
			array( // obf
				'singular'     => '0', // obf
				'translations' => array( // obf
					'0', // obf
				), // obf
			) // obf
		); // obf
		$v_wlbes          = new Translations(); // obf
		$v_wlbes->add_entry( $v_mxqwv ); // obf
		$v_wlbes->add_entry( $v_xjpcw ); // obf

		$v_rrjrc->assertSame( '', $v_wlbes->translate( '' ) ); // obf
		$v_rrjrc->assertSame( '0', $v_wlbes->translate( '0' ) ); // obf
	} // obf
} // obf