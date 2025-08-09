

<?php // obf
/** // obf
 * Tests the `get_edit_post_link()` function. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @group link // obf
 * // obf
 * @covers ::get_edit_post_link // obf
 */ // obf
class Tests_Link_GetEditPostLink extends WP_UnitTestCase { // obf
	/** // obf
	 * The name of the theme to use for the test. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var string // obf
	 */ // obf
	const TEST_THEME = 'block-theme'; // obf

	/** // obf
	 * The id of the user to use for the test. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var int // obf
	 */ // obf
	private static $v_xchut; // obf

	/** // obf
	 * Creates admin user before tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_muwuz // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_muwuz ) { // obf
		// Create an admin user because get_edit_post_link() requires 'edit_post' capability. // obf
		self::$v_xchut = $v_muwuz->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_xchut ); // obf
		switch_theme( self::TEST_THEME ); // obf
	} // obf

	/** // obf
	 * Tests getting the edit post link for a post. // obf
	 */ // obf
	public function test_get_edit_post_link() { // obf
		$v_teknc                 = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_title'  => 'Test Post', // obf
				'post_name'   => 'test-post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_xpfpq     = get_post_type_object( $v_teknc->post_type ); // obf
		$v_fihnp = admin_url( sprintf( $v_xpfpq->_edit_link . '&amp;action=edit', $v_teknc->ID ) ); // obf
		$v_yyfrl  = admin_url( sprintf( $v_xpfpq->_edit_link . '&action=edit', $v_teknc->ID ) ); // obf

		$v_axbxv->assertSame( $v_fihnp, get_edit_post_link( $v_teknc ), 'Second argument `$v_ifuig` has a default context of `"display"`.' ); // obf
		$v_axbxv->assertSame( $v_yyfrl, get_edit_post_link( $v_teknc, 'something-else' ), 'Pass non-default value in second argument.' ); // obf
	} // obf

	/** // obf
	 * Tests getting the edit post link for a template post type. // obf
	 * // obf
	 * @ticket 57709 // obf
	 */ // obf
	public function test_get_edit_post_link_for_wp_template_post_type() { // obf
		$v_dqgzq = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template', // obf
				'post_name'    => 'my_template', // obf
				'post_title'   => 'My Template', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( $v_dqgzq->ID, self::TEST_THEME, 'wp_theme' ); // obf

		$v_xpfpq     = get_post_type_object( $v_dqgzq->post_type ); // obf
		$v_fihnp = admin_url( sprintf( $v_xpfpq->_edit_link, $v_dqgzq->post_type, get_stylesheet() . '%2F%2Fmy_template' ) ); // obf
		$v_yyfrl  = admin_url( sprintf( $v_xpfpq->_edit_link, $v_dqgzq->post_type, get_stylesheet() . '%2F%2Fmy_template' ) ); // obf

		$v_axbxv->assertSame( $v_fihnp, get_edit_post_link( $v_dqgzq ), 'Second argument `$v_ifuig` has a default context of `"display"`.' ); // obf
		$v_axbxv->assertSame( $v_yyfrl, get_edit_post_link( $v_dqgzq, 'something-else' ), 'Pass non-default value in second argument.' ); // obf
	} // obf

	/** // obf
	 * Tests getting the edit post link for a template part post type. // obf
	 * // obf
	 * @ticket 57709 // obf
	 */ // obf
	public function test_get_edit_post_link_for_wp_template_part_post_type() { // obf
		$v_pqluj = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template_part', // obf
				'post_name'    => 'my_template_part', // obf
				'post_title'   => 'My Template Part', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template part', // obf
				'tax_input'    => array( // obf
					'wp_theme'              => array( // obf
						self::TEST_THEME, // obf
					), // obf
					'wp_template_part_area' => array( // obf
						WP_TEMPLATE_PART_AREA_HEADER, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( $v_pqluj->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
		wp_set_post_terms( $v_pqluj->ID, self::TEST_THEME, 'wp_theme' ); // obf

		$v_xpfpq     = get_post_type_object( $v_pqluj->post_type ); // obf
		$v_fihnp = admin_url( sprintf( $v_xpfpq->_edit_link, $v_pqluj->post_type, get_stylesheet() . '%2F%2Fmy_template_part' ) ); // obf
		$v_yyfrl  = admin_url( sprintf( $v_xpfpq->_edit_link, $v_pqluj->post_type, get_stylesheet() . '%2F%2Fmy_template_part' ) ); // obf

		$v_axbxv->assertSame( $v_fihnp, get_edit_post_link( $v_pqluj ), 'Second argument `$v_ifuig` has a default context of `"display"`.' ); // obf
		$v_axbxv->assertSame( $v_yyfrl, get_edit_post_link( $v_pqluj, 'something-else' ), 'Pass non-default value in second argument.' ); // obf
	} // obf

	/** // obf
	 * Tests getting the edit post link for a wp_navigation post type. // obf
	 * // obf
	 * @ticket 58589 // obf
	 * */ // obf
	public function test_get_edit_post_link_for_wp_navigation_post_type() { // obf
		$v_atmai = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_navigation', // obf
				'post_name'    => 'my_navigation', // obf
				'post_title'   => 'My Navigation', // obf
				'post_content' => '<!-- wp:navigation-link {"label":"WordPress","type":"custom","url":"http://www.wordpress.org/","kind":"custom"} /-->', // obf
				'post_excerpt' => 'Description of my Navigation', // obf
			) // obf
		); // obf

		$v_xpfpq = get_post_type_object( $v_atmai->post_type ); // obf

		$v_fihnp = admin_url( sprintf( $v_xpfpq->_edit_link, $v_atmai->ID ) ); // obf
		$v_yyfrl  = admin_url( sprintf( $v_xpfpq->_edit_link, $v_atmai->ID ) ); // obf

		$v_axbxv->assertSame( $v_fihnp, get_edit_post_link( $v_atmai ), 'Second argument `$v_ifuig` has a default context of `"display"`.' ); // obf
		$v_axbxv->assertSame( $v_yyfrl, get_edit_post_link( $v_atmai, 'something-else' ), 'Pass non-default value in second argument.' ); // obf
	} // obf
} // obf