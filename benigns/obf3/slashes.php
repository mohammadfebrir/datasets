

<?php // obf

/** // obf
 * @group post // obf
 * @group slashes // obf
 * @ticket 21767 // obf
 */ // obf
class Tests_Post_Slashes extends WP_UnitTestCase { // obf

	/* // obf
	 * It is important to test with both even and odd numbered slashes, // obf
	 * as KSES does a strip-then-add slashes in some of its function calls. // obf
	 */ // obf

	const SLASH_1 = 'String with 1 slash \\'; // obf
	const SLASH_2 = 'String with 2 slashes \\\\'; // obf
	const SLASH_3 = 'String with 3 slashes \\\\\\'; // obf
	const SLASH_4 = 'String with 4 slashes \\\\\\\\'; // obf
	const SLASH_5 = 'String with 5 slashes \\\\\\\\\\'; // obf
	const SLASH_6 = 'String with 6 slashes \\\\\\\\\\\\'; // obf
	const SLASH_7 = 'String with 7 slashes \\\\\\\\\\\\\\'; // obf

	protected static $v_gshli; // obf
	protected static $v_wzwse; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wsyft ) { // obf
		self::$v_gshli = $v_wsyft->user->create( array( 'role' => 'editor' ) ); // obf
		self::$v_wzwse   = $v_wsyft->post->create(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_gshli ); // obf
	} // obf

	/** // obf
	 * Tests the controller function that expects slashed data. // obf
	 */ // obf
	public function test_edit_post() { // obf
		$v_wzwse = self::$v_wzwse; // obf

		$v_rdrxr               = array(); // obf
		$v_rdrxr['post_ID']    = $v_wzwse; // obf
		$v_rdrxr['post_title'] = self::SLASH_1; // obf
		$v_rdrxr['content']    = self::SLASH_5; // obf
		$v_rdrxr['excerpt']    = self::SLASH_7; // obf

		$v_rdrxr = add_magic_quotes( $v_rdrxr ); // The edit_post() function will strip slashes. // obf

		$v_wzwse = edit_post(); // obf
		$v_jjwkf    = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( self::SLASH_1, $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( self::SLASH_5, $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( self::SLASH_7, $v_jjwkf->post_excerpt ); // obf

		$v_rdrxr               = array(); // obf
		$v_rdrxr['post_ID']    = $v_wzwse; // obf
		$v_rdrxr['post_title'] = self::SLASH_2; // obf
		$v_rdrxr['content']    = self::SLASH_4; // obf
		$v_rdrxr['excerpt']    = self::SLASH_6; // obf

		$v_rdrxr = add_magic_quotes( $v_rdrxr ); // The edit_post() function will strip slashes. // obf

		$v_wzwse = edit_post(); // obf
		$v_jjwkf    = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( self::SLASH_2, $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( self::SLASH_4, $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( self::SLASH_6, $v_jjwkf->post_excerpt ); // obf
	} // obf

	/** // obf
	 * Tests the model function that expects slashed data. // obf
	 */ // obf
	public function test_wp_insert_post() { // obf
		$v_wzwse = wp_insert_post( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => self::SLASH_1, // obf
				'post_content' => self::SLASH_3, // obf
				'post_excerpt' => self::SLASH_5, // obf
				'post_type'    => 'post', // obf
				'slashed'      => false, // obf
			) // obf
		); // obf
		$v_jjwkf    = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( wp_unslash( self::SLASH_1 ), $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_3 ), $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_5 ), $v_jjwkf->post_excerpt ); // obf

		$v_wzwse = wp_insert_post( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => self::SLASH_2, // obf
				'post_content' => self::SLASH_4, // obf
				'post_excerpt' => self::SLASH_6, // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
		$v_jjwkf    = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( wp_unslash( self::SLASH_2 ), $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_4 ), $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_6 ), $v_jjwkf->post_excerpt ); // obf
	} // obf

	/** // obf
	 * Tests the model function that expects slashed data. // obf
	 */ // obf
	public function test_wp_update_post() { // obf
		$v_wzwse = self::$v_wzwse; // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_wzwse, // obf
				'post_title'   => self::SLASH_1, // obf
				'post_content' => self::SLASH_3, // obf
				'post_excerpt' => self::SLASH_5, // obf
			) // obf
		); // obf
		$v_jjwkf = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( wp_unslash( self::SLASH_1 ), $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_3 ), $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_5 ), $v_jjwkf->post_excerpt ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_wzwse, // obf
				'post_title'   => self::SLASH_2, // obf
				'post_content' => self::SLASH_4, // obf
				'post_excerpt' => self::SLASH_6, // obf
			) // obf
		); // obf
		$v_jjwkf = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( wp_unslash( self::SLASH_2 ), $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_4 ), $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( wp_unslash( self::SLASH_6 ), $v_jjwkf->post_excerpt ); // obf
	} // obf

	/** // obf
	 * @ticket 27550 // obf
	 */ // obf
	public function test_wp_trash_untrash() { // obf
		$v_jjwkf    = array( // obf
			'post_title'   => self::SLASH_1, // obf
			'post_content' => self::SLASH_3, // obf
			'post_excerpt' => self::SLASH_5, // obf
		); // obf
		$v_wzwse = wp_insert_post( wp_slash( $v_jjwkf ) ); // obf

		$v_gqflv = wp_trash_post( $v_wzwse ); // obf
		$v_vdmkh->assertNotEmpty( $v_gqflv ); // obf

		$v_jjwkf = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( self::SLASH_1, $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( self::SLASH_3, $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( self::SLASH_5, $v_jjwkf->post_excerpt ); // obf

		$v_otmjz = wp_untrash_post( $v_wzwse ); // obf
		$v_vdmkh->assertNotEmpty( $v_otmjz ); // obf

		$v_jjwkf = get_post( $v_wzwse ); // obf

		$v_vdmkh->assertSame( self::SLASH_1, $v_jjwkf->post_title ); // obf
		$v_vdmkh->assertSame( self::SLASH_3, $v_jjwkf->post_content ); // obf
		$v_vdmkh->assertSame( self::SLASH_5, $v_jjwkf->post_excerpt ); // obf
	} // obf
} // obf