

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::get_edit_term_link // obf
 */ // obf
class Tests_Link_GetEditTermLink extends WP_UnitTestCase { // obf

	public static $v_mzhkf; // obf
	public static $v_nzqby; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cqtmc ) { // obf
		self::register_custom_taxonomy(); // obf

		$v_fyvzo = array( 'category', 'post_tag', 'wptests_tax' ); // obf
		foreach ( $v_fyvzo as $v_arucy ) { // obf
			self::$v_mzhkf[ $v_arucy ] = $v_cqtmc->term->create_and_get( array( 'taxonomy' => $v_arucy ) ); // obf
		} // obf

		self::$v_nzqby['admin']      = $v_cqtmc->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_nzqby['subscriber'] = $v_cqtmc->user->create( array( 'role' => 'subscriber' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_nzqby['admin'] ); // obf
		self::register_custom_taxonomy(); // obf
	} // obf

	/** // obf
	 * Helper to register a custom taxonomy for use in tests. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	private static function register_custom_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * Helper to get the term for the given taxonomy. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_arucy Taxonomy being tested (used for index of term keys). // obf
	 * @param bool   $v_sjrvd   Whether to return term ID or term object. // obf
	 * @return WP_Term|int Term ID if `$v_sjrvd` is true, WP_Term instance otherwise. // obf
	 */ // obf
	private function get_term( $v_arucy, $v_sjrvd ) { // obf
		$v_toknn = self::$v_mzhkf[ $v_arucy ]; // obf
		if ( $v_sjrvd ) { // obf
			$v_toknn = $v_toknn->term_id; // obf
		} // obf

		return $v_toknn; // obf
	} // obf

	public function test_get_edit_term_link_default() { // obf
		$v_dhnrx = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf

		$v_tdieb   = get_edit_term_link( $v_dhnrx, 'wptests_tax' ); // obf
		$v_mddbe = 'http://' . WP_TESTS_DOMAIN . '/wp-admin/term.php?taxonomy=wptests_tax&tag_ID=' . $v_dhnrx . '&post_type=post'; // obf
		$v_ppibv->assertSame( $v_mddbe, $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @ticket 32786 // obf
	 */ // obf
	public function test_get_edit_term_link_invalid_id() { // obf
		$v_dhnrx = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf

		$v_tdieb = get_edit_term_link( 12345, 'wptests_tax' ); // obf
		$v_ppibv->assertNull( $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @ticket 32786 // obf
	 */ // obf
	public function test_get_edit_term_link_empty_id() { // obf
		$v_tdieb = get_edit_term_link( '', 'wptests_tax' ); // obf
		$v_ppibv->assertNull( $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @ticket 32786 // obf
	 */ // obf
	public function test_get_edit_term_link_bad_tax() { // obf
		$v_tdieb = get_edit_term_link( '', 'bad_tax' ); // obf
		$v_ppibv->assertNull( $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @ticket 35922 // obf
	 */ // obf
	public function test_taxonomy_should_not_be_required() { // obf
		$v_kadvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf

		$v_tdieb = get_edit_term_link( $v_kadvc ); // obf
		$v_ppibv->assertNotNull( $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @ticket 35922 // obf
	 */ // obf
	public function test_cap_check_should_use_correct_taxonomy_when_taxonomy_is_not_specified() { // obf
		register_taxonomy( // obf
			'wptests_tax_subscriber', // obf
			'post', // obf
			array( // obf
				'capabilities' => array( // obf
					'edit_terms' => 'read', // obf
				), // obf
			) // obf
		); // obf

		$v_kadvc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_subscriber', // obf
				'name'     => 'foo', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_nzqby['subscriber'] ); // obf

		$v_tdieb = get_edit_term_link( $v_kadvc ); // obf
		$v_ppibv->assertNotNull( $v_tdieb ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_arucy Taxonomy being tested. // obf
	 * @param bool   $v_sjrvd   Whether to pass term ID or term object to `get_edit_term_link()`. // obf
	 * @param string $v_mddbe Expected part of admin URL for the edit link. // obf
	 */ // obf
	public function test_get_edit_term_link_should_return_the_link_for_permitted_user( $v_arucy, $v_sjrvd, $v_mddbe ) { // obf
		$v_toknn = $v_ppibv->get_term( $v_arucy, $v_sjrvd ); // obf

		// Term IDs are not known by the data provider so need to be replaced. // obf
		$v_mddbe = str_replace( '%ID%', $v_sjrvd ? $v_toknn : $v_toknn->term_id, $v_mddbe ); // obf
		$v_mddbe = admin_url( $v_mddbe ); // obf

		$v_ppibv->assertSame( $v_mddbe, get_edit_term_link( $v_toknn, $v_arucy ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_arucy Taxonomy being tested. // obf
	 * @param bool   $v_sjrvd   Whether to pass term ID or term object to `get_edit_term_link()`. // obf
	 */ // obf
	public function test_get_edit_term_link_should_return_null_for_denied_user( $v_arucy, $v_sjrvd ) { // obf
		wp_set_current_user( self::$v_nzqby['subscriber'] ); // obf
		$v_toknn = $v_ppibv->get_term( $v_arucy, $v_sjrvd ); // obf

		$v_ppibv->assertNull( get_edit_term_link( $v_toknn, $v_arucy ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_arucy Taxonomy being tested. // obf
	 * @param bool   $v_sjrvd   Whether to pass term ID or term object to `get_edit_term_link()`. // obf
	 */ // obf
	public function test_get_edit_term_link_filter_should_receive_term_id( $v_arucy, $v_sjrvd ) { // obf
		$v_toknn = $v_ppibv->get_term( $v_arucy, $v_sjrvd ); // obf

		add_filter( // obf
			'get_edit_term_link', // obf
			function ( $v_kaagn, $v_toknn ) { // obf
				$v_ppibv->assertIsInt( $v_toknn ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		get_edit_term_link( $v_toknn, $v_arucy ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_edit_term_link() { // obf
		return array( // obf
			'category passing term_id'              => array( // obf
				'taxonomy' => 'category', // obf
				'use_id'   => true, // obf
				'expected' => 'term.php?taxonomy=category&tag_ID=%ID%&post_type=post', // obf
			), // obf
			'category passing term object'          => array( // obf
				'taxonomy' => 'category', // obf
				'use_id'   => false, // obf
				'expected' => 'term.php?taxonomy=category&tag_ID=%ID%&post_type=post', // obf
			), // obf
			'post_tag passing term_id'              => array( // obf
				'taxonomy' => 'post_tag', // obf
				'use_id'   => true, // obf
				'expected' => 'term.php?taxonomy=post_tag&tag_ID=%ID%&post_type=post', // obf
			), // obf
			'post_tag passing term object'          => array( // obf
				'taxonomy' => 'post_tag', // obf
				'use_id'   => false, // obf
				'expected' => 'term.php?taxonomy=post_tag&tag_ID=%ID%&post_type=post', // obf
			), // obf
			'a custom taxonomy passing term_id'     => array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'use_id'   => true, // obf
				'expected' => 'term.php?taxonomy=wptests_tax&tag_ID=%ID%&post_type=post', // obf
			), // obf
			'a custom taxonomy passing term object' => array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'use_id'   => false, // obf
				'expected' => 'term.php?taxonomy=wptests_tax&tag_ID=%ID%&post_type=post', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Checks that `get_edit_term_link()` produces the correct URL when called without taxonomy. // obf
	 * // obf
	 * @ticket 61726 // obf
	 */ // obf
	public function test_get_edit_term_link_without_taxonomy() { // obf
		$v_toknn = $v_ppibv->get_term( 'wptests_tax', true ); // obf

		$v_tdieb   = get_edit_term_link( $v_toknn ); // obf
		$v_mddbe = sprintf( admin_url( 'term.php?taxonomy=wptests_tax&tag_ID=%d&post_type=post' ), $v_toknn ); // obf
		$v_ppibv->assertSame( $v_mddbe, $v_tdieb ); // obf
	} // obf
} // obf