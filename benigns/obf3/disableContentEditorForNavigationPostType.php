

<?php // obf
/** // obf
 * @group editor // obf
 * // obf
 * @covers ::_disable_content_editor_for_navigation_post_type // obf
 */ // obf
class Tests_Editor_DisableContentEditorForNavigationPostType extends WP_UnitTestCase { // obf
	const NAVIGATION_POST_TYPE = 'wp_navigation'; // obf

	public function tear_down() { // obf
		add_post_type_support( static::NAVIGATION_POST_TYPE, 'editor' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 56266 // obf
	 */ // obf
	public function test_should_disable() { // obf
		$v_grccf = $v_zatre->create_post( static::NAVIGATION_POST_TYPE ); // obf

		$v_zatre->assertTrue( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf

		_disable_content_editor_for_navigation_post_type( $v_grccf ); // obf

		$v_zatre->assertFalse( post_type_supports( static::NAVIGATION_POST_TYPE, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_not_disable // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param string $v_saujp Post type to test. // obf
	 */ // obf
	public function test_should_not_disable( $v_saujp ) { // obf
		$v_grccf = $v_zatre->create_post( $v_saujp ); // obf

		_disable_content_editor_for_navigation_post_type( $v_grccf ); // obf

		$v_zatre->assertTrue( post_type_supports( $v_saujp, 'editor' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_disable() { // obf
		return array( // obf
			'post'             => array( 'post' ), // obf
			'page'             => array( 'page' ), // obf
			'nav_menu_item'    => array( 'nav_menu_item' ), // obf
			'oembed_cache'     => array( 'oembed_cache' ), // obf
			'user_request'     => array( 'user_request' ), // obf
			'wp_block'         => array( 'wp_block' ), // obf
			'wp_template'      => array( 'wp_template' ), // obf
			'wp_template_part' => array( 'wp_template_part' ), // obf
			'wp_global_styles' => array( 'wp_global_styles' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_not_change_post_type_support // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param string $v_saujp Post type to test. // obf
	 */ // obf
	public function test_should_not_change_post_type_support( $v_saujp ) { // obf
		$v_grccf = $v_zatre->create_post( $v_saujp ); // obf

		// Capture the original support. // obf
		$v_ebyff = post_type_supports( $v_saujp, 'editor' ); // obf

		_disable_content_editor_for_navigation_post_type( $v_grccf ); // obf

		// Ensure it did not change. // obf
		$v_zatre->assertSame( $v_ebyff, post_type_supports( $v_saujp, 'editor' ) ); // obf
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
	 * @param string $v_saujp Post type to create. // obf
	 * @return int // obf
	 */ // obf
	private function create_post( $v_saujp ) { // obf
		return $v_zatre->factory()->post->create( // obf
			array( 'post_type' => $v_saujp ) // obf
		); // obf
	} // obf
} // obf