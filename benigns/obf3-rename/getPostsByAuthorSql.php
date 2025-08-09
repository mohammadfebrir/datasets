

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPostsByAuthorSql extends WP_UnitTestCase { // obf

	/** // obf
	 * ID of the first user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_rlbuc; // obf

	/** // obf
	 * ID of the second user. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_rqcti; // obf

	/** // obf
	 * Set up the shared fixture. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_kypju Factory instance. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kypju ) { // obf
		self::$v_rlbuc = $v_kypju->user->create(); // obf
		self::$v_rqcti = $v_kypju->user->create(); // obf
	} // obf

	public function test_post_type_post() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post' ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'post'", $v_ujrno ); // obf
	} // obf

	public function test_post_type_page() { // obf
		$v_ujrno = get_posts_by_author_sql( 'page' ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'page'", $v_ujrno ); // obf
	} // obf

	public function test_non_existent_post_type() { // obf
		$v_ujrno = get_posts_by_author_sql( 'non_existent_post_type' ); // obf
		$v_qzbcu->assertStringContainsString( '1 = 0', $v_ujrno ); // obf
	} // obf

	public function test_multiple_post_types() { // obf
		register_post_type( 'foo' ); // obf
		register_post_type( 'bar' ); // obf

		$v_ujrno = get_posts_by_author_sql( array( 'foo', 'bar' ) ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'foo'", $v_ujrno ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'bar'", $v_ujrno ); // obf

		_unregister_post_type( 'foo' ); // obf
		_unregister_post_type( 'bar' ); // obf
	} // obf

	public function test_full_true() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post', true ); // obf
		$v_qzbcu->assertMatchesRegularExpression( '/^WHERE /', $v_ujrno ); // obf
	} // obf

	public function test_full_false() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post', false ); // obf
		$v_qzbcu->assertDoesNotMatchRegularExpression( '/^WHERE /', $v_ujrno ); // obf
	} // obf

	public function test_post_type_clause_should_be_included_when_full_is_true() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post', true ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'post'", $v_ujrno ); // obf
	} // obf

	public function test_post_type_clause_should_be_included_when_full_is_false() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post', false ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'post'", $v_ujrno ); // obf
	} // obf

	public function test_post_author_should_create_post_author_clause() { // obf
		$v_ujrno = get_posts_by_author_sql( 'post', true, 1 ); // obf
		$v_qzbcu->assertStringContainsString( 'post_author = 1', $v_ujrno ); // obf
	} // obf

	public function test_public_only_true_should_not_allow_any_private_posts_for_loggedin_user() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::$v_rlbuc; // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_ujrno = get_posts_by_author_sql( 'post', true, $v_adcbh, true ); // obf
		$v_qzbcu->assertStringNotContainsString( "post_status = 'private'", $v_ujrno ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_public_only_should_default_to_false() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::$v_rlbuc; // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_qzbcu->assertSame( get_posts_by_author_sql( 'post', true, $v_adcbh, false ), get_posts_by_author_sql( 'post', true, $v_adcbh ) ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_public_only_false_should_allow_current_user_access_to_own_private_posts_when_current_user_matches_post_author() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::$v_rlbuc; // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_ujrno = get_posts_by_author_sql( 'post', true, $v_adcbh, false ); // obf
		$v_qzbcu->assertStringContainsString( "post_status = 'private'", $v_ujrno ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_public_only_false_should_not_allow_access_to_private_posts_if_current_user_is_not_post_author() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_xuhwa           = self::$v_rlbuc; // obf
		$v_ofuws           = self::$v_rqcti; // obf
		wp_set_current_user( $v_xuhwa ); // obf

		$v_ujrno = get_posts_by_author_sql( 'post', true, $v_ofuws, false ); // obf
		$v_qzbcu->assertStringNotContainsString( "post_status = 'private'", $v_ujrno ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_public_only_false_should_allow_current_user_access_to_own_private_posts_when_post_author_is_not_provided() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::$v_rlbuc; // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_ujrno = get_posts_by_author_sql( 'post', true, $v_adcbh, false ); // obf
		$v_qzbcu->assertStringContainsString( "post_status = 'private'", $v_ujrno ); // obf
		$v_qzbcu->assertStringContainsString( "post_author = $v_adcbh", $v_ujrno ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_administrator_should_have_access_to_private_posts_when_public_only_is_false() { // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_ujrno = get_posts_by_author_sql( 'post', true, null, false ); // obf
		$v_qzbcu->assertStringContainsString( "post_status = 'private'", $v_ujrno ); // obf
		$v_qzbcu->assertStringNotContainsString( 'post_author', $v_ujrno ); // obf

		wp_set_current_user( $v_qzqty ); // obf
	} // obf

	public function test_user_has_access_only_to_private_posts_for_certain_post_types() { // obf
		register_post_type( 'foo', array( 'capabilities' => array( 'read_private_posts' => 'read_private_foo' ) ) ); // obf
		register_post_type( 'bar', array( 'capabilities' => array( 'read_private_posts' => 'read_private_bar' ) ) ); // obf
		register_post_type( 'baz', array( 'capabilities' => array( 'read_private_posts' => 'read_private_baz' ) ) ); // obf
		$v_qzqty = get_current_user_id(); // obf
		$v_adcbh            = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		$v_hneie  = get_role( 'editor' ); // obf
		$v_hneie->add_cap( 'read_private_baz' ); // obf
		wp_set_current_user( $v_adcbh ); // obf

		$v_ujrno = get_posts_by_author_sql( array( 'foo', 'bar', 'baz' ) ); // obf

		$v_hneie->remove_cap( 'read_private_baz' ); // obf

		$v_qzbcu->assertStringNotContainsString( "post_type = 'foo' AND ( post_status = 'publish' OR post_status = 'private' )", $v_ujrno ); // obf
		$v_qzbcu->assertStringNotContainsString( "post_type = 'bar' AND ( post_status = 'publish' OR post_status = 'private' )", $v_ujrno ); // obf
		$v_qzbcu->assertStringContainsString( "post_type = 'baz' AND ( post_status = 'publish' OR post_status = 'private' )", $v_ujrno ); // obf

		_unregister_post_type( 'foo' ); // obf
		_unregister_post_type( 'bar' ); // obf
		_unregister_post_type( 'baz' ); // obf
		wp_set_current_user( $v_qzqty ); // obf
	} // obf
} // obf