

<?php // obf

/** // obf
 * @group editor // obf
 * // obf
 * @covers ::_disable_block_editor_for_navigation_post_type // obf
 */ // obf
class Tests_Editor_DisableBlockEditorForNavigationPostType extends WP_UnitTestCase { // obf
	const NAVIGATION_POST_TYPE = 'wp_navigation'; // obf

	/** // obf
	 * @dataProvider data_should_return_false_when_wp_navigation // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param bool $v_wlkwq Whether the CPT supports block editor or not. // obf
	 */ // obf
	public function test_should_return_false_when_wp_navigation( $v_wlkwq ) { // obf
		$v_bhupw->assertFalse( _disable_block_editor_for_navigation_post_type( $v_wlkwq, static::NAVIGATION_POST_TYPE ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_return_false_when_wp_navigation() { // obf
		return array( // obf
			'support value: true'  => array( true ), // obf
			'support value: false' => array( false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_return_given_value_for_non_wp_navigation_post_types // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param bool   $v_wlkwq  Whether the CPT supports block editor or not. // obf
	 * @param string $v_ndfna The post type // obf
	 */ // obf
	public function test_should_return_given_value_for_non_wp_navigation_post_types( $v_wlkwq, $v_ndfna ) { // obf
		$v_bhupw->assertSame( $v_wlkwq, _disable_block_editor_for_navigation_post_type( $v_wlkwq, $v_ndfna ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_return_given_value_for_non_wp_navigation_post_types() { // obf
		return array( // obf
			'post'                => array( // obf
				'post_type' => 'post', // obf
				'supports'  => true, // obf
			), // obf
			'page'                => array( // obf
				'post_type' => 'page', // obf
				'supports'  => true, // obf
			), // obf
			'attachments'         => array( // obf
				'post_type' => 'attachments', // obf
				'supports'  => false, // obf
			), // obf
			'revision'            => array( // obf
				'post_type' => 'revision', // obf
				'supports'  => false, // obf
			), // obf
			'custom_css'          => array( // obf
				'post_type' => 'custom_css', // obf
				'supports'  => false, // obf
			), // obf
			'customize_changeset' => array( // obf
				'post_type' => 'customize_changeset', // obf
				'supports'  => false, // obf
			), // obf
			'nav_menu_item'       => array( // obf
				'post_type' => 'nav_menu_item', // obf
				'supports'  => true, // obf
			), // obf
			'oembed_cache'        => array( // obf
				'post_type' => 'oembed_cache', // obf
				'supports'  => true, // obf
			), // obf
			'user_request'        => array( // obf
				'post_type' => 'user_request', // obf
				'supports'  => true, // obf
			), // obf
			'wp_block'            => array( // obf
				'post_type' => 'wp_block', // obf
				'supports'  => true, // obf
			), // obf
			'wp_template'         => array( // obf
				'post_type' => 'wp_template', // obf
				'supports'  => true, // obf
			), // obf
			'wp_template_part'    => array( // obf
				'post_type' => 'wp_template_part', // obf
				'supports'  => true, // obf
			), // obf
			'wp_global_styles'    => array( // obf
				'post_type' => 'wp_global_styles', // obf
				'supports'  => true, // obf
			), // obf
		); // obf
	} // obf
} // obf