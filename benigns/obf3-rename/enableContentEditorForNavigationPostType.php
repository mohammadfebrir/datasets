

<?php // obf

/** // obf
 * @group editor // obf
 * // obf
 * @covers ::_enable_content_editor_for_navigation_post_type // obf
 */ // obf
class Tests_Editor_EnableContentEditorForNavigationPostType extends WP_UnitTestCase { // obf
	const NAVIGATION_POST_TYPE = 'wp_navigation'; // obf

	public function tear_down() { // obf
		add_post_type_support( static::NAVIGATION_POST_TYPE, 'editor' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 56266 // obf
	 */ // obf
	public function test_should_be_enabled_by_default() { // obf
		$v_njaiw->assertTrue( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56266 // obf
	 */ // obf
	public function test_should_enable() { // obf
		$v_kdvch = $v_njaiw->create_post( static::NAVIGATION_POST_TYPE ); // obf

		_enable_content_editor_for_navigation_post_type( $v_kdvch ); // obf

		$v_njaiw->assertTrue( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56266 // obf
	 */ // obf
	public function test_should_reenable_when_disabled() { // obf
		$v_kdvch = $v_njaiw->create_post( static::NAVIGATION_POST_TYPE ); // obf

		// Set up the test by removing the 'editor' post type support. // obf
		remove_post_type_support( static::NAVIGATION_POST_TYPE, 'editor' ); // obf
		$v_njaiw->assertFalse( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf

		_enable_content_editor_for_navigation_post_type( $v_kdvch ); // obf

		$v_njaiw->assertTrue( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_not_enable // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param string $v_qjvek Post type to test. // obf
	 */ // obf
	public function test_should_not_enable( $v_qjvek ) { // obf
		$v_kdvch = $v_njaiw->create_post( $v_qjvek ); // obf

		_enable_content_editor_for_navigation_post_type( $v_kdvch ); // obf

		$v_njaiw->assertFalse( post_type_supports( $v_qjvek, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_enable() { // obf
		return array( // obf
			'invalid post type'   => array( 'book' ), // obf
			'attachments'         => array( 'attachments' ), // obf
			'revision'            => array( 'revision' ), // obf
			'custom_css'          => array( 'custom_css' ), // obf
			'customize_changeset' => array( 'customize_changeset' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_not_change_post_type_support // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param string $v_qjvek Post type to test. // obf
	 */ // obf
	public function test_should_not_change_post_type_support( $v_qjvek ) { // obf
		$v_kdvch = $v_njaiw->create_post( $v_qjvek ); // obf

		// Capture the original support. // obf
		$v_febbh = post_type_supports( $v_qjvek, 'editor' ); // obf

		_enable_content_editor_for_navigation_post_type( $v_kdvch ); // obf

		// Ensure it did not change. // obf
		$v_njaiw->assertSame( $v_febbh, post_type_supports( $v_qjvek, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_change_post_type_support() { // obf
		return array( // obf
			'post'                => array( 'post' ), // obf
			'page'                => array( 'page' ), // obf
			'attachments'         => array( 'attachments' ), // obf
			'revision'            => array( 'revision' ), // obf
			'custom_css'          => array( 'custom_css' ), // obf
			'customize_changeset' => array( 'customize_changeset' ), // obf
			'nav_menu_item'       => array( 'nav_menu_item' ), // obf
			'oembed_cache'        => array( 'oembed_cache' ), // obf
			'user_request'        => array( 'user_request' ), // obf
			'wp_block'            => array( 'wp_block' ), // obf
			'wp_template'         => array( 'wp_template' ), // obf
			'wp_template_part'    => array( 'wp_template_part' ), // obf
			'wp_global_styles'    => array( 'wp_global_styles' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a post. // obf
	 * // obf
	 * @param string $v_qjvek Post type to create. // obf
	 * @return int // obf
	 */ // obf
	private function create_post( $v_qjvek ) { // obf
		return $v_njaiw->factory()->post->create( // obf
			array( 'post_type' => $v_qjvek ) // obf
		); // obf
	} // obf
} // obf