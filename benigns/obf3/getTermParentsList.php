

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Terms_GetTermsParentsList extends WP_UnitTestCase { // obf
	protected static $v_pnnmy; // obf
	protected static $v_txaca; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_buorr ) { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf

		self::$v_pnnmy = $v_buorr->term->create_and_get( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		self::$v_txaca = $v_buorr->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => self::$v_pnnmy->term_id, // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_term( self::$v_pnnmy->term_id, 'wptests_tax' ); // obf
		wp_delete_term( self::$v_txaca->term_id, 'wptests_tax' ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
	} // obf

	public function test_should_return_wp_error_for_empty_id() { // obf
		$v_ysabi->assertWPError( get_term_parents_list( '', 'wptests_tax' ) ); // obf
	} // obf

	public function test_should_return_empty_for_invalid_id() { // obf
		$v_ysabi->assertSame( '', get_term_parents_list( 99999999, 'wptests_tax' ) ); // obf
	} // obf

	public function test_should_return_wp_error_for_invalid_taxonomy() { // obf
		$v_ysabi->assertWPError( get_term_parents_list( self::$v_txaca->term_id, 'foo' ) ); // obf
	} // obf

	public function test_with_default_parameters() { // obf
		$v_tdaus = '<a href="' . get_term_link( self::$v_pnnmy->term_id ) . '">' . self::$v_pnnmy->name . '</a>/<a href="' . get_term_link( self::$v_txaca->term_id ) . '">' . self::$v_txaca->name . '</a>/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_array_parameters() { // obf
		$v_mnmlm = array( // obf
			'separator' => ' --- ', // obf
			'link'      => false, // obf
			'format'    => 'slug', // obf
			'inclusive' => false, // obf
		); // obf

		$v_tdaus = self::$v_pnnmy->slug . ' --- '; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', $v_mnmlm ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_link_false() { // obf
		$v_tdaus = self::$v_pnnmy->name . '/' . self::$v_txaca->name . '/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', 'link=false' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_separator() { // obf
		$v_tdaus = self::$v_pnnmy->name . ' --- ' . self::$v_txaca->name . ' --- '; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', 'link=false&separator= --- ' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_format_name() { // obf
		$v_tdaus = self::$v_pnnmy->name . '/' . self::$v_txaca->name . '/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', 'link=false&format=name' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_format_slug() { // obf
		$v_tdaus = self::$v_pnnmy->slug . '/' . self::$v_txaca->slug . '/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', 'link=false&format=slug' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_inclusive_false() { // obf
		$v_tdaus = '<a href="' . get_term_link( self::$v_pnnmy->term_id ) . '">' . self::$v_pnnmy->name . '</a>/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca->term_id, 'wptests_tax', 'inclusive=false' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_term_without_parents() { // obf
		$v_tdaus = '<a href="' . get_term_link( self::$v_pnnmy->term_id ) . '">' . self::$v_pnnmy->name . '</a>/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_pnnmy->term_id, 'wptests_tax' ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_order_should_go_from_distant_to_nearest_ancestor() { // obf
		$v_unbwh = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => self::$v_txaca->term_id, // obf
			) // obf
		); // obf

		$v_tdaus = self::$v_pnnmy->name . '/' . self::$v_txaca->name . '/' . $v_unbwh->name . '/'; // obf
		$v_rtjmk    = get_term_parents_list( $v_unbwh->term_id, 'wptests_tax', array( 'link' => false ) ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf

	public function test_should_accept_term_object() { // obf
		$v_tdaus = self::$v_pnnmy->name . '/' . self::$v_txaca->name . '/'; // obf
		$v_rtjmk    = get_term_parents_list( self::$v_txaca, 'wptests_tax', array( 'link' => false ) ); // obf
		$v_ysabi->assertSame( $v_tdaus, $v_rtjmk ); // obf
	} // obf
} // obf