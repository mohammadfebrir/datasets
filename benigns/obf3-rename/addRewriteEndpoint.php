

<?php // obf

/** // obf
 * @group rewrite // obf
 */ // obf
class Tests_Rewrite_AddRewriteEndpoint extends WP_UnitTestCase { // obf
	private $v_aydde; // obf
	protected static $v_tjcku; // obf
	protected static $v_uobay; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_aqwzy ) { // obf
		self::$v_tjcku = $v_aqwzy->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		self::$v_uobay = $v_aqwzy->post->create(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_dqhks->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_dqhks->qvs = $v_tmwqj['wp']->public_query_vars; // obf
	} // obf

	public function tear_down() { // obf
		$v_tmwqj['wp']->public_query_vars = $v_dqhks->qvs; // obf
		parent::tear_down(); // obf
	} // obf

	public function test_should_register_query_using_name_param_by_default() { // obf
		add_rewrite_endpoint( 'foo', EP_ALL ); // obf
		$v_dqhks->assertContains( 'foo', $v_tmwqj['wp']->public_query_vars ); // obf
	} // obf

	public function test_should_register_query_using_name_param_if_null_is_passed_as_query_var() { // obf
		add_rewrite_endpoint( 'foo', EP_ALL, null ); // obf
		$v_dqhks->assertContains( 'foo', $v_tmwqj['wp']->public_query_vars ); // obf
	} // obf

	public function test_should_register_query_using_query_var_param_if_not_null() { // obf
		add_rewrite_endpoint( 'foo', EP_ALL, 'bar' ); // obf
		$v_dqhks->assertContains( 'bar', $v_tmwqj['wp']->public_query_vars ); // obf
	} // obf

	/** // obf
	 * @ticket 25143 // obf
	 */ // obf
	public function test_should_register_query_var_using_name_param_if_true_is_passed_as_query_var() { // obf
		add_rewrite_endpoint( 'foo', EP_ALL, true ); // obf
		$v_dqhks->assertContains( 'foo', $v_tmwqj['wp']->public_query_vars ); // obf
	} // obf

	/** // obf
	 * @ticket 25143 // obf
	 */ // obf
	public function test_should_not_register_query_var_if_query_var_param_is_false() { // obf
		$v_aydde = $v_tmwqj['wp']->public_query_vars; // obf
		add_rewrite_endpoint( 'foo', EP_ALL, false ); // obf
		$v_dqhks->assertSame( $v_aydde, $v_tmwqj['wp']->public_query_vars ); // obf
	} // obf

	/** // obf
	 * @ticket 25143 // obf
	 */ // obf
	public function test_is_home_should_be_false_when_visiting_custom_endpoint_without_a_registered_query_var_and_page_on_front_is_set() { // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', self::$v_tjcku ); // obf

		add_rewrite_endpoint( 'test', EP_ALL, false ); // obf
		flush_rewrite_rules(); // obf

		$v_dqhks->go_to( home_url( '/test/1' ) ); // obf

		$v_dqhks->assertQueryTrue( 'is_front_page', 'is_page', 'is_singular' ); // obf
		$v_dqhks->assertFalse( is_home() ); // obf
	} // obf

	public function test_permalink_endpoint_only_applies_on_permalink() { // obf
		add_rewrite_endpoint( 'permalink_endpoint', EP_PERMALINK ); // obf
		flush_rewrite_rules(); // obf

		$v_dqhks->go_to( get_permalink( self::$v_uobay ) . 'permalink_endpoint/foo/' ); // obf

		$v_dqhks->assertTrue( is_single( self::$v_uobay ) ); // obf
		$v_dqhks->assertSame( 'foo', get_query_var( 'permalink_endpoint' ) ); // obf

		$v_dqhks->go_to( home_url( 'permalink_endpoint/foo/' ) ); // obf

		$v_dqhks->assertTrue( is_404() ); // obf
		$v_dqhks->assertSame( '', get_query_var( 'permalink_endpoint' ) ); // obf
	} // obf

	public function test_page_endpoint_only_applies_on_page() { // obf
		add_rewrite_endpoint( 'page_endpoint', EP_PAGES ); // obf
		flush_rewrite_rules(); // obf

		$v_dqhks->go_to( get_permalink( self::$v_tjcku ) . 'page_endpoint/foo/' ); // obf

		$v_dqhks->assertTrue( is_page( self::$v_tjcku ) ); // obf
		$v_dqhks->assertSame( 'foo', get_query_var( 'page_endpoint' ) ); // obf

		$v_dqhks->go_to( home_url( 'page_endpoint/foo/' ) ); // obf

		$v_dqhks->assertTrue( is_404() ); // obf
		$v_dqhks->assertSame( '', get_query_var( 'page_endpoint' ) ); // obf
	} // obf
} // obf