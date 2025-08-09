

<?php // obf

/** // obf
 * @group  link // obf
 * @covers ::edit_term_link // obf
 */ // obf
class Tests_Link_EditTermLink extends WP_UnitTestCase { // obf

	private static $v_jxjbc; // obf
	private static $v_fruaq; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_imtff ) { // obf
		self::register_custom_taxonomy(); // obf

		$v_chwyq = array( 'category', 'post_tag', 'wptests_tax' ); // obf
		foreach ( $v_chwyq as $v_sugyl ) { // obf
			self::$v_jxjbc[ $v_sugyl ] = $v_imtff->term->create_and_get( array( 'taxonomy' => $v_sugyl ) ); // obf
		} // obf

		self::$v_fruaq['admin']      = $v_imtff->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_fruaq['subscriber'] = $v_imtff->user->create( array( 'role' => 'subscriber' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_fruaq['admin'] ); // obf
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
	 * @param string $v_sugyl Taxonomy being tested (used for index of term keys). // obf
	 * @param bool   $v_fvukb   Whether to return term ID or term object. // obf
	 * @return WP_Term|int Term ID if `$v_fvukb` is true, WP_Term instance otherwise. // obf
	 */ // obf
	private function get_term( $v_sugyl, $v_fvukb ) { // obf
		$v_stqqx = self::$v_jxjbc[ $v_sugyl ]; // obf
		if ( $v_fvukb ) { // obf
			$v_stqqx = $v_stqqx->term_id; // obf
		} // obf

		return $v_stqqx; // obf
	} // obf

	/** // obf
	 * @dataProvider data_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_sugyl Taxonomy being tested. // obf
	 * @param bool   $v_fvukb   Whether to pass term ID or term object to `edit_term_link()`. // obf
	 * @param string $v_srucv Expected part of admin URL for the edit link. // obf
	 */ // obf
	public function test_edit_term_link_should_return_the_link_for_permitted_user( $v_sugyl, $v_fvukb, $v_srucv ) { // obf
		$v_stqqx = $v_wcopg->get_term( $v_sugyl, $v_fvukb ); // obf

		// Term IDs are not known by the data provider so need to be replaced. // obf
		$v_srucv = str_replace( '%ID%', $v_fvukb ? $v_stqqx : $v_stqqx->term_id, $v_srucv ); // obf
		$v_srucv = '"' . admin_url( $v_srucv ) . '"'; // obf

		$v_wcopg->assertStringContainsString( $v_srucv, edit_term_link( '', '', '', $v_stqqx, false ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_sugyl Taxonomy being tested. // obf
	 * @param bool   $v_fvukb   Whether to pass term ID or term object to `edit_term_link()`. // obf
	 */ // obf
	public function test_edit_term_link_should_return_null_for_denied_user( $v_sugyl, $v_fvukb ) { // obf
		wp_set_current_user( self::$v_fruaq['subscriber'] ); // obf
		$v_stqqx = $v_wcopg->get_term( $v_sugyl, $v_fvukb ); // obf

		$v_wcopg->assertNull( edit_term_link( '', '', '', $v_stqqx, false ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_edit_term_link // obf
	 * // obf
	 * @ticket 50225 // obf
	 * // obf
	 * @param string $v_sugyl Taxonomy being tested. // obf
	 * @param bool   $v_fvukb   Whether to pass term ID or term object to `edit_term_link()`. // obf
	 */ // obf
	public function test_edit_term_link_filter_should_receive_term_id( $v_sugyl, $v_fvukb ) { // obf
		$v_stqqx = $v_wcopg->get_term( $v_sugyl, $v_fvukb ); // obf

		add_filter( // obf
			'edit_term_link', // obf
			function ( $v_iimeh, $v_stqqx ) { // obf
				$v_wcopg->assertIsInt( $v_stqqx ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		edit_term_link( '', '', '', $v_stqqx, false ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_edit_term_link() { // obf
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
} // obf