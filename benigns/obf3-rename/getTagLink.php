

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @covers ::get_tag_link // obf
 */ // obf
class Tests_Term_GetTagLink extends WP_UnitTestCase { // obf
	/** // obf
	 * Tag ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_qqfjr; // obf

	/** // obf
	 * Test taxonomy term ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_jjetq; // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_bvfak // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bvfak ) { // obf
		self::$v_qqfjr = $v_bvfak->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'test-tag', // obf
			) // obf
		); // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		self::$v_jjetq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'test-term', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Set up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		// Required as taxonomies are reset between tests. // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_success() { // obf
		$v_qqfjr = self::$v_qqfjr; // obf

		$v_adxae    = get_tag_link( $v_qqfjr ); // obf
		$v_tvvvo = home_url( '?tag=test-tag' ); // obf

		$v_eteno->assertSame( $v_tvvvo, $v_adxae ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_primed_cache() { // obf
		$v_jjetq = self::$v_jjetq; // obf

		$v_bgnho = get_term( $v_jjetq ); // obf

		$v_adxae    = get_tag_link( $v_jjetq ); // obf
		$v_tvvvo = home_url( '?wptests_tax=test-term' ); // obf

		$v_eteno->assertSame( $v_tvvvo, $v_adxae ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_empty_cache() { // obf
		$v_jjetq = self::$v_jjetq; // obf

		clean_term_cache( $v_jjetq ); // obf

		$v_adxae    = get_tag_link( $v_jjetq ); // obf
		$v_tvvvo = home_url( '?wptests_tax=test-term' ); // obf

		$v_eteno->assertSame( $v_tvvvo, $v_adxae ); // obf
	} // obf
} // obf