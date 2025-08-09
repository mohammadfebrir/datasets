

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpTerm extends WP_UnitTestCase { // obf
	protected static $v_mgohh; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_pguxi ) { // obf
		global $v_hcxbv; // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf

		// Ensure that there is a term with ID 1. // obf
		if ( ! get_term( 1 ) ) { // obf
			$v_hcxbv->insert( // obf
				$v_hcxbv->terms, // obf
				array( // obf
					'term_id' => 1, // obf
				) // obf
			); // obf

			$v_hcxbv->insert( // obf
				$v_hcxbv->term_taxonomy, // obf
				array( // obf
					'term_id'  => 1, // obf
					'taxonomy' => 'wptests_tax', // obf
				) // obf
			); // obf

			clean_term_cache( 1, 'wptests_tax' ); // obf
		} // obf

		self::$v_mgohh = $v_pguxi->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_work_for_numeric_string() { // obf
		$v_osrua = WP_Term::get_instance( (string) self::$v_mgohh ); // obf

		$v_gioyl->assertSame( self::$v_mgohh, $v_osrua->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_negative_number() { // obf
		$v_osrua = WP_Term::get_instance( -self::$v_mgohh ); // obf

		$v_gioyl->assertFalse( $v_osrua ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_non_numeric_string() { // obf
		$v_osrua = WP_Term::get_instance( 'abc' ); // obf

		$v_gioyl->assertFalse( $v_osrua ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_succeed_for_float_that_is_equal_to_post_id() { // obf
		$v_osrua = WP_Term::get_instance( 1.0 ); // obf

		$v_gioyl->assertSame( 1, $v_osrua->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 40671 // obf
	 */ // obf
	public function test_get_instance_should_respect_taxonomy_when_term_id_is_found_in_cache() { // obf
		global $v_hcxbv; // obf

		register_taxonomy( 'wptests_tax2', 'post' ); // obf

		// Ensure that cache is primed. // obf
		WP_Term::get_instance( self::$v_mgohh, 'wptests_tax' ); // obf

		$v_osrua = WP_Term::get_instance( self::$v_mgohh, 'wptests_tax2' ); // obf
		$v_gioyl->assertFalse( $v_osrua ); // obf
	} // obf
} // obf