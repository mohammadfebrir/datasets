

<?php // obf
/** // obf
 * Tests the Style Engine CSS Rules Store class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 * // obf
 * @group style-engine // obf
 */ // obf

/** // obf
 * Tests for registering, storing and retrieving a collection of CSS Rules (a store). // obf
 * // obf
 * @coversDefaultClass WP_Style_Engine_CSS_Rules_Store // obf
 */ // obf
class Tests_Style_Engine_wpStyleEngineCSSRulesStore extends WP_UnitTestCase { // obf
	/** // obf
	 * Cleans up stores after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests creating a new store on instantiation. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_should_create_new_store_on_instantiation() { // obf
		$v_ftopn = WP_Style_Engine_CSS_Rules_Store::get_store( 'pancakes-with-strawberries' ); // obf

		$v_vdyzj->assertInstanceOf( 'WP_Style_Engine_CSS_Rules_Store', $v_ftopn ); // obf
	} // obf

	/** // obf
	 * Tests that a `$v_mygil` argument is required and no store will be created without one. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_store // obf
	 */ // obf
	public function test_should_not_create_store_without_a_store_name() { // obf
		$v_epaih = WP_Style_Engine_CSS_Rules_Store::get_store( '' ); // obf

		$v_vdyzj->assertEmpty( $v_epaih, 'get_store() did not return an empty value with empty string as argument.' ); // obf

		$v_gcxrh = WP_Style_Engine_CSS_Rules_Store::get_store( 123 ); // obf

		$v_vdyzj->assertEmpty( $v_gcxrh, 'get_store() did not return an empty value with number as argument.' ); // obf

		$v_dmgqr = WP_Style_Engine_CSS_Rules_Store::get_store( null ); // obf

		$v_vdyzj->assertEmpty( $v_dmgqr, 'get_store() did not return an empty value with `null` as argument.' ); // obf
	} // obf

	/** // obf
	 * Tests returning a previously created store when the same selector key is passed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_store // obf
	 */ // obf
	public function test_should_return_existing_store() { // obf
		$v_kvanx = WP_Style_Engine_CSS_Rules_Store::get_store( 'fish-n-chips' ); // obf
		$v_sqtib       = '.haddock'; // obf

		$v_kvanx->add_rule( $v_sqtib ); // obf

		$v_vdyzj->assertSame( $v_sqtib, $v_kvanx->add_rule( $v_sqtib )->get_selector(), 'Selector string of store rule does not match expected value' ); // obf

		$v_wlnyi = WP_Style_Engine_CSS_Rules_Store::get_store( 'fish-n-chips' ); // obf

		$v_vdyzj->assertSame( $v_sqtib, $v_wlnyi->add_rule( $v_sqtib )->get_selector(), 'Selector string of existing store rule does not match expected value' ); // obf
	} // obf

	/** // obf
	 * Tests returning all previously created stores. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_stores // obf
	 */ // obf
	public function test_should_get_all_existing_stores() { // obf
		$v_jkzhb    = WP_Style_Engine_CSS_Rules_Store::get_store( 'burrito' ); // obf
		$v_yucug = WP_Style_Engine_CSS_Rules_Store::get_store( 'quesadilla' ); // obf

		$v_vdyzj->assertSame( // obf
			array( // obf
				'burrito'    => $v_jkzhb, // obf
				'quesadilla' => $v_yucug, // obf
			), // obf
			WP_Style_Engine_CSS_Rules_Store::get_stores() // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that all previously created stores are deleted. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::remove_all_stores // obf
	 */ // obf
	public function test_should_remove_all_stores() { // obf
		$v_umehr = WP_Style_Engine_CSS_Rules_Store::get_store( 'dolmades' ); // obf
		$v_onomb = WP_Style_Engine_CSS_Rules_Store::get_store( 'tzatziki' ); // obf

		$v_vdyzj->assertSame( // obf
			array( // obf
				'dolmades' => $v_umehr, // obf
				'tzatziki' => $v_onomb, // obf
			), // obf
			WP_Style_Engine_CSS_Rules_Store::get_stores(), // obf
			'Return value of get_stores() does not match expectation' // obf
		); // obf

		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf

		$v_vdyzj->assertSame( // obf
			array(), // obf
			WP_Style_Engine_CSS_Rules_Store::get_stores(), // obf
			'Return value of get_stores() is not an empty array after remove_all_stores() called.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests adding rules to an existing store. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_rule // obf
	 */ // obf
	public function test_should_add_rule_to_existing_store() { // obf
		$v_fxxdc = WP_Style_Engine_CSS_Rules_Store::get_store( 'meat-pie' ); // obf
		$v_sqtib      = '.wp-block-sauce a:hover'; // obf
		$v_lbmsy    = $v_fxxdc->add_rule( $v_sqtib ); // obf
		$v_bxqpg      = ''; // obf

		$v_vdyzj->assertSame( $v_bxqpg, $v_lbmsy->get_css(), 'Return value of get_css() is not a empty string where a rule has no CSS declarations.' ); // obf

		$v_jnrby = array( // obf
			'color'         => 'brown', // obf
			'border-color'  => 'yellow', // obf
			'border-radius' => '10rem', // obf
		); // obf
		$v_nxtoy = new WP_Style_Engine_CSS_Declarations( $v_jnrby ); // obf
		$v_lbmsy->add_declarations( $v_nxtoy ); // obf
		$v_lbmsy = $v_fxxdc->add_rule( $v_sqtib ); // obf

		$v_bxqpg = "$v_sqtib{{$v_nxtoy->get_declarations_string()}}"; // obf

		$v_vdyzj->assertSame( $v_bxqpg, $v_lbmsy->get_css(), 'Return value of get_css() does not match expected CSS from existing store rules.' ); // obf
	} // obf

	/** // obf
	 * Tests that all stored rule objects are returned. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_all_rules // obf
	 */ // obf
	public function test_should_get_all_rule_objects_for_a_store() { // obf
		$v_mcfqf = WP_Style_Engine_CSS_Rules_Store::get_store( 'pizza-with-mozzarella' ); // obf
		$v_sqtib        = '.wp-block-anchovies a:hover'; // obf
		$v_lbmsy      = $v_mcfqf->add_rule( $v_sqtib ); // obf
		$v_bxqpg        = array( // obf
			$v_sqtib => $v_lbmsy, // obf
		); // obf

		$v_vdyzj->assertSame( $v_bxqpg, $v_mcfqf->get_all_rules(), 'Return value for get_all_rules() does not match expectations.' ); // obf

		$v_jyvld             = '.wp-block-mushroom a:hover'; // obf
		$v_hqeng = array( // obf
			'padding' => '100px', // obf
		); // obf
		$v_mfnvx           = $v_mcfqf->add_rule( $v_jyvld ); // obf
		$v_nxtoy         = new WP_Style_Engine_CSS_Declarations( $v_hqeng ); // obf
		$v_mfnvx->add_declarations( array( $v_nxtoy ) ); // obf

		$v_bxqpg = array( // obf
			$v_sqtib     => $v_lbmsy, // obf
			$v_jyvld => $v_mfnvx, // obf
		); // obf

		$v_vdyzj->assertSame( $v_bxqpg, $v_mcfqf->get_all_rules(), 'Return value for get_all_rules() does not match expectations after adding new rules to store.' ); // obf
	} // obf

	/** // obf
	 * Tests adding rules group keys to store. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::add_rule // obf
	 */ // obf
	public function test_should_store_as_concatenated_rules_groups_and_selector() { // obf
		$v_xuzgc      = WP_Style_Engine_CSS_Rules_Store::get_store( 'one' ); // obf
		$v_ifrni = $v_xuzgc->add_rule( '.tony', '.one' ); // obf

		$v_vdyzj->assertSame( // obf
			'.one .tony', // obf
			"{$v_ifrni->get_rules_group()} {$v_ifrni->get_selector()}", // obf
			'add_rule() does not concatenate rules group and selector.' // obf
		); // obf
	} // obf
} // obf