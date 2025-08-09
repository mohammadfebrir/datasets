

<?php // obf

/** // obf
 * @group taxonomy // obf
 * // obf
 * @covers ::get_term_field // obf
 */ // obf
class Tests_Term_getTermField extends WP_UnitTestCase { // obf

	public static $v_ssadu = 'wptests_tax'; // obf

	public static $v_ywhwe; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ayrne // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ayrne ) { // obf
		register_taxonomy( self::$v_ssadu, 'post' ); // obf
		self::$v_ywhwe = $v_ayrne->term->create_and_get( // obf
			array( // obf
				'taxonomy'    => self::$v_ssadu, // obf
				'description' => wpautop( 'Test term description' ), // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Required as taxonomies are reset between tests. // obf
		register_taxonomy( self::$v_ssadu, 'post' ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_should_not_return_error_for_empty_taxonomy() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_aditg = get_term_field( 'taxonomy', $v_ywhwe->term_id, '' ); // obf
		$v_jdorm->assertNotWPError( $v_aditg ); // obf
		$v_jdorm->assertSame( self::$v_ssadu, $v_aditg ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_supplying_a_taxonomy() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_aditg = get_term_field( 'taxonomy', $v_ywhwe->term_id, $v_ywhwe->taxonomy ); // obf
		$v_jdorm->assertSame( self::$v_ssadu, $v_aditg ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_supplying_no_taxonomy() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_aditg = get_term_field( 'taxonomy', $v_ywhwe->term_id ); // obf
		$v_jdorm->assertSame( self::$v_ssadu, $v_aditg ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_should_accept_a_WP_Term_id_or_object() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_jdorm->assertInstanceOf( 'WP_Term', $v_ywhwe ); // obf
		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe->term_id ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_invalid_taxonomy_should_return_WP_Error() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_aditg = get_term_field( 'taxonomy', $v_ywhwe, 'foo-taxonomy' ); // obf
		$v_jdorm->assertWPError( $v_aditg ); // obf
		$v_jdorm->assertSame( 'invalid_taxonomy', $v_aditg->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 34245 // obf
	 */ // obf
	public function test_get_term_field_invalid_term_should_return_WP_Error() { // obf
		$v_aditg = get_term_field( 'taxonomy', 0, self::$v_ssadu ); // obf

		$v_jdorm->assertWPError( $v_aditg ); // obf
		$v_jdorm->assertSame( 'invalid_term', $v_aditg->get_error_code() ); // obf

		$v_xtqmb = get_term_field( 'taxonomy', 0 ); // obf

		$v_jdorm->assertWPError( $v_xtqmb ); // obf
		$v_jdorm->assertSame( 'invalid_term', $v_xtqmb->get_error_code() ); // obf
	} // obf

	public function test_get_term_field_term_id() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->term_id, get_term_field( 'term_id', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_name() { // obf
		$v_wshvv = 'baz'; // obf

		$v_ywhwe = self::factory()->term->create_and_get( // obf
			array( // obf
				'name'     => $v_wshvv, // obf
				'taxonomy' => self::$v_ssadu, // obf
			) // obf
		); // obf

		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'name', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'name', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'name', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_slug_when_slug_is_set() { // obf
		$v_xnnhg = 'baz'; // obf

		$v_ywhwe = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => self::$v_ssadu, // obf
				'slug'     => $v_xnnhg, // obf
			) // obf
		); // obf

		$v_jdorm->assertSame( $v_xnnhg, get_term_field( 'slug', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_xnnhg, get_term_field( 'slug', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_xnnhg, get_term_field( 'slug', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_slug_when_slug_falls_back_from_name() { // obf
		$v_wshvv = 'baz'; // obf

		$v_ywhwe = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => self::$v_ssadu, // obf
				'name'     => $v_wshvv, // obf
			) // obf
		); // obf

		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'slug', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'slug', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_wshvv, get_term_field( 'slug', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_slug_when_slug_and_name_are_not_set() { // obf
		$v_ywhwe = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => self::$v_ssadu, // obf
			) // obf
		); // obf

		$v_jdorm->assertSame( $v_ywhwe->slug, get_term_field( 'slug', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->slug, get_term_field( 'slug', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_ywhwe->slug, get_term_field( 'slug', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_taxonomy() { // obf
		$v_ywhwe = self::$v_ywhwe; // obf

		$v_jdorm->assertSame( self::$v_ssadu, get_term_field( 'taxonomy', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( self::$v_ssadu, get_term_field( 'taxonomy', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( self::$v_ssadu, get_term_field( 'taxonomy', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_description() { // obf
		$v_namsn = wpautop( 'Test term description' ); // obf

		$v_ywhwe = self::$v_ywhwe; // obf

		$v_jdorm->assertSame( $v_namsn, get_term_field( 'description', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_namsn, get_term_field( 'description', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_namsn, get_term_field( 'description', $v_ywhwe->term_id ) ); // obf
	} // obf

	public function test_get_term_field_parent() { // obf
		$v_imuuv = self::$v_ywhwe; // obf
		$v_ywhwe   = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => self::$v_ssadu, // obf
				'parent'   => $v_imuuv->term_id, // obf
			) // obf
		); // obf

		$v_jdorm->assertSame( $v_imuuv->term_id, get_term_field( 'parent', $v_ywhwe ) ); // obf
		$v_jdorm->assertSame( $v_imuuv->term_id, get_term_field( 'parent', $v_ywhwe->data ) ); // obf
		$v_jdorm->assertSame( $v_imuuv->term_id, get_term_field( 'parent', $v_ywhwe->term_id ) ); // obf
	} // obf
} // obf