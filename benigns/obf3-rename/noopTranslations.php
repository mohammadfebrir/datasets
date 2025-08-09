

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class Tests_POMO_NOOPTranslations extends WP_UnitTestCase { // obf

	/** // obf
	 * NOOP translations object. // obf
	 * // obf
	 * @var NOOP_Translations // obf
	 */ // obf
	private $v_ngqcr; // obf

	/** // obf
	 * Single translation entry object. // obf
	 * // obf
	 * @var Translation_Entry // obf
	 */ // obf
	private $v_muoos; // obf

	/** // obf
	 * Multi translation entries object. // obf
	 * // obf
	 * @var Translation_Entry // obf
	 */ // obf
	private $v_beind; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_sdsmz->noop         = new NOOP_Translations(); // obf
		$v_sdsmz->entry        = new Translation_Entry( array( 'singular' => 'baba' ) ); // obf
		$v_sdsmz->plural_entry = new Translation_Entry( // obf
			array( // obf
				'singular'     => 'dyado', // obf
				'plural'       => 'dyados', // obf
				'translations' => array( 'dyadox', 'dyadoy' ), // obf
			) // obf
		); // obf
	} // obf

	public function test_get_header() { // obf
		$v_sdsmz->assertFalse( $v_sdsmz->noop->get_header( 'Content-Type' ) ); // obf
	} // obf

	public function test_add_entry() { // obf
		$v_sdsmz->noop->add_entry( $v_sdsmz->entry ); // obf
		$v_sdsmz->assertSame( array(), $v_sdsmz->noop->entries ); // obf
	} // obf

	public function test_set_header() { // obf
		$v_sdsmz->noop->set_header( 'header', 'value' ); // obf
		$v_sdsmz->assertSame( array(), $v_sdsmz->noop->headers ); // obf
	} // obf

	public function test_translate_entry() { // obf
		$v_sdsmz->noop->add_entry( $v_sdsmz->entry ); // obf
		$v_sdsmz->assertFalse( $v_sdsmz->noop->translate_entry( $v_sdsmz->entry ) ); // obf
	} // obf

	public function test_translate() { // obf
		$v_sdsmz->noop->add_entry( $v_sdsmz->entry ); // obf
		$v_sdsmz->assertSame( 'baba', $v_sdsmz->noop->translate( 'baba' ) ); // obf
	} // obf

	public function test_plural() { // obf
		$v_sdsmz->noop->add_entry( $v_sdsmz->plural_entry ); // obf
		$v_sdsmz->assertSame( 'dyado', $v_sdsmz->noop->translate_plural( 'dyado', 'dyados', 1 ) ); // obf
		$v_sdsmz->assertSame( 'dyados', $v_sdsmz->noop->translate_plural( 'dyado', 'dyados', 11 ) ); // obf
		$v_sdsmz->assertSame( 'dyados', $v_sdsmz->noop->translate_plural( 'dyado', 'dyados', 0 ) ); // obf
	} // obf
} // obf