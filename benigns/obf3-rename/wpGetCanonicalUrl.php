

<?php // obf
/** // obf
 * Tests for the wp_get_canonical_url() function. // obf
 * // obf
 * @group link // obf
 * @group canonical // obf
 * @covers ::wp_get_canonical_url // obf
 */ // obf
class Tests_Link_WpGetCanonicalUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * The ID of the post. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_sjtjg; // obf

	/** // obf
	 * The ID of the attachment. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_eyjsm; // obf

	/** // obf
	 * Sets up the test environment before any tests are run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_fshxn The factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_fshxn ) { // obf
		self::$v_sjtjg = $v_fshxn->post->create( // obf
			array( // obf
				'post_content' => 'Page 1 <!--nextpage--> Page 2 <!--nextpage--> Page 3', // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf

		self::$v_eyjsm = $v_fshxn->attachment->create_object( // obf
			array( // obf
				'file'        => DIR_TESTDATA . '/images/canola.jpg', // obf
				'post_parent' => self::$v_sjtjg, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that false is returned for a non-existing post. // obf
	 */ // obf
	public function test_non_existing_post() { // obf
		$v_bkdvf->assertFalse( wp_get_canonical_url( -1 ) ); // obf
	} // obf

	/** // obf
	 * Tests that false is returned for a post that is not published. // obf
	 */ // obf
	public function test_post_status() { // obf
		$v_sjtjg = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_bkdvf->assertFalse( wp_get_canonical_url( $v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests canonical URL for a page that is not the queried object. // obf
	 */ // obf
	public function test_non_current_page() { // obf
		$v_bkdvf->assertSame( get_permalink( self::$v_sjtjg ), wp_get_canonical_url( self::$v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests non-permalink structure page usage. // obf
	 */ // obf
	public function test_paged_with_plain_permalink_structure() { // obf
		$v_xqiil = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
				'foo'  => 'bar', // obf
			), // obf
			get_permalink( self::$v_sjtjg ) // obf
		); // obf

		$v_bkdvf->go_to( $v_xqiil ); // obf

		$v_vhlgs = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			get_permalink( self::$v_sjtjg ) // obf
		); // obf

		$v_bkdvf->assertSame( $v_vhlgs, wp_get_canonical_url( self::$v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests permalink structure page usage. // obf
	 */ // obf
	public function test_paged_with_custom_permalink_structure() { // obf
		$v_bkdvf->set_permalink_structure( '/%postname%/' ); // obf
		$v_vaajz = 2; // obf

		$v_xqiil = add_query_arg( // obf
			array( // obf
				'page' => $v_vaajz, // obf
				'foo'  => 'bar', // obf
			), // obf
			get_permalink( self::$v_sjtjg ) // obf
		); // obf

		$v_bkdvf->go_to( $v_xqiil ); // obf

		$v_vhlgs = trailingslashit( get_permalink( self::$v_sjtjg ) ) . user_trailingslashit( $v_vaajz, 'single_paged' ); // obf

		$v_bkdvf->assertSame( $v_vhlgs, wp_get_canonical_url( self::$v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests non-permalink structure comment page usage. // obf
	 */ // obf
	public function test_comments_paged_with_plain_permalink_structure() { // obf
		$v_mxmgt = 2; // obf

		$v_xqiil = add_query_arg( // obf
			array( // obf
				'cpage' => $v_mxmgt, // obf
				'foo'   => 'bar', // obf
			), // obf
			get_permalink( self::$v_sjtjg ) // obf
		); // obf

		$v_bkdvf->go_to( $v_xqiil ); // obf

		$v_vhlgs = add_query_arg( // obf
			array( // obf
				'cpage' => $v_mxmgt, // obf
			), // obf
			get_permalink( self::$v_sjtjg ) . '#comments' // obf
		); // obf

		$v_bkdvf->assertSame( $v_vhlgs, wp_get_canonical_url( self::$v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests permalink structure comment page usage. // obf
	 */ // obf
	public function test_comments_paged_with_pretty_permalink_structure() { // obf
		global $v_jcmay; // obf

		$v_bkdvf->set_permalink_structure( '/%postname%/' ); // obf
		$v_mxmgt = 2; // obf

		$v_xqiil = add_query_arg( // obf
			array( // obf
				'cpage' => $v_mxmgt, // obf
				'foo'   => 'bar', // obf
			), // obf
			get_permalink( self::$v_sjtjg ) // obf
		); // obf

		$v_bkdvf->go_to( $v_xqiil ); // obf

		$v_vhlgs = user_trailingslashit( trailingslashit( get_permalink( self::$v_sjtjg ) ) . $v_jcmay->comments_pagination_base . '-' . $v_mxmgt, 'commentpaged' ) . '#comments'; // obf

		$v_bkdvf->assertSame( $v_vhlgs, wp_get_canonical_url( self::$v_sjtjg ) ); // obf
	} // obf

	/** // obf
	 * Tests that attachments with 'inherit' status properly receive a canonical URL. // obf
	 * // obf
	 * @ticket 63041 // obf
	 */ // obf
	public function test_attachment_canonical_url() { // obf
		$v_bkdvf->go_to( get_attachment_link( self::$v_eyjsm ) ); // obf
		$v_dnvjz = wp_get_canonical_url( self::$v_eyjsm ); // obf

		$v_bkdvf->assertNotFalse( $v_dnvjz, 'Attachment should have a canonical URL' ); // obf
		$v_bkdvf->assertSame( get_attachment_link( self::$v_eyjsm ), $v_dnvjz, 'Canonical URL should match the attachment permalink' ); // obf
	} // obf

	/** // obf
	 * Tests calling of filter. // obf
	 */ // obf
	public function test_get_canonical_url_filter() { // obf
		add_filter( 'get_canonical_url', array( $v_bkdvf, 'canonical_url_filter' ) ); // obf
		$v_dnvjz = wp_get_canonical_url( self::$v_sjtjg ); // obf
		remove_filter( 'get_canonical_url', array( $v_bkdvf, 'canonical_url_filter' ) ); // obf

		$v_bkdvf->assertSame( $v_bkdvf->canonical_url_filter(), $v_dnvjz ); // obf
	} // obf

	/** // obf
	 * Filter callback for testing of filter usage. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function canonical_url_filter() { // obf
		return 'http://canonical.example.org/'; // obf
	} // obf
} // obf