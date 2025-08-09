

<?php // obf
/** // obf
 * Tests for Block Bindings API "core/post-meta" source. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 6.5.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-bindings // obf
 */ // obf
class Tests_Block_Bindings_Post_Meta_Source extends WP_UnitTestCase { // obf
	protected static $v_nvyle; // obf
	protected static $v_pigvk; // obf

	/** // obf
	 * Modify the post content. // obf
	 * // obf
	 * @param string $v_lfprl The new content. // obf
	 */ // obf
	private function get_modified_post_content( $v_lfprl ) { // obf
		$v_utqtg['post']->post_content = $v_lfprl; // obf
		return apply_filters( 'the_content', $v_utqtg['post']->post_content ); // obf
	} // obf

	/** // obf
	 * Sets up shared fixtures. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_fwgvp ) { // obf
		self::$v_nvyle               = $v_fwgvp->post->create_and_get(); // obf
		self::$v_pigvk = isset( $v_utqtg['wp_meta_keys'] ) ? $v_utqtg['wp_meta_keys'] : array(); // obf
	} // obf

	/** // obf
	 * Tear down after class. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		$v_utqtg['wp_meta_keys'] = self::$v_pigvk; // obf
	} // obf

	/** // obf
	 * Set up before each test. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		// Needed because tear_down() will reset it between tests. // obf
		$v_utqtg['post'] = self::$v_nvyle; // obf
	} // obf

	/** // obf
	 * Tests that a block connected to a custom field renders its value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_custom_field_value_is_rendered() { // obf
		register_meta( // obf
			'post', // obf
			'tests_custom_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Custom field value', // obf
			) // obf
		); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_custom_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf
		$v_yoznv->assertSame( // obf
			'<p>Custom field value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the value of the custom field . ' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that an html attribute connected to a custom field renders its value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_html_attribute_connected_to_custom_field_value_is_rendered() { // obf
		register_meta( // obf
			'post', // obf
			'tests_url_custom_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'https://example.com/foo.png', // obf
			) // obf
		); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:image {"metadata":{"bindings":{"url":{"source":"core/post-meta","args":{"key":"tests_url_custom_field"}}}}} --><figure class="wp-block-image"><img alt=""/></figure><!-- /wp:image -->' ); // obf
		$v_yoznv->assertSame( // obf
			'<figure class="wp-block-image"><img decoding="async" src="https://example.com/foo.png" alt=""/></figure>', // obf
			$v_lfprl, // obf
			'The image src should point to the value of the custom field . ' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a blocks connected in a password protected post don't render the value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_custom_field_value_is_not_shown_in_password_protected_posts() { // obf
		register_meta( // obf
			'post', // obf
			'tests_custom_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Custom field value', // obf
			) // obf
		); // obf

		add_filter( 'post_password_required', '__return_true' ); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_custom_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		remove_filter( 'post_password_required', '__return_true' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value instead of the custom field value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a blocks connected in a post that is not publicly viewable don't render the value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_custom_field_value_is_not_shown_in_non_viewable_posts() { // obf
		register_meta( // obf
			'post', // obf
			'tests_custom_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Custom field value', // obf
			) // obf
		); // obf

		add_filter( 'is_post_status_viewable', '__return_false' ); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_custom_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		remove_filter( 'is_post_status_viewable', '__return_false' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value instead of the custom field value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block connected to a meta key that doesn't exist renders the fallback. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_binding_to_non_existing_meta_key() { // obf
		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_non_existing_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block connected without specifying the custom field renders the fallback. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_binding_without_key_renders_the_fallback() { // obf
		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta"}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block connected to a protected field doesn't show the value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_protected_field_value_is_not_shown() { // obf
		register_meta( // obf
			'post', // obf
			'_tests_protected_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Protected value', // obf
			) // obf
		); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_tests_protected_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value instead of the protected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block connected to a field not exposed in the REST API doesn't show the value. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_custom_field_not_exposed_in_rest_api_is_not_shown() { // obf
		register_meta( // obf
			'post', // obf
			'tests_show_in_rest_false_field', // obf
			array( // obf
				'show_in_rest' => false, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Protected value', // obf
			) // obf
		); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_show_in_rest_false_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Fallback value</p>', // obf
			$v_lfprl, // obf
			'The post content should show the fallback value instead of the protected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that meta key with unsafe HTML is sanitized. // obf
	 * // obf
	 * @ticket 60651 // obf
	 */ // obf
	public function test_custom_field_with_unsafe_html_is_sanitized() { // obf
		register_meta( // obf
			'post', // obf
			'tests_unsafe_html_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => '<script>alert("Unsafe HTML")</script>', // obf
			) // obf
		); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_unsafe_html_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		$v_yoznv->assertSame( // obf
			'<p>alert(&#8220;Unsafe HTML&#8221;)</p>', // obf
			$v_lfprl, // obf
			'The post content should not include the script tag.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that filter `block_bindings_source_value` is applied. // obf
	 * // obf
	 * @ticket 61181 // obf
	 */ // obf
	public function test_filter_block_bindings_source_value() { // obf
		register_meta( // obf
			'post', // obf
			'tests_filter_field', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Original value', // obf
			) // obf
		); // obf

		$v_qzzze = function ( $v_ctwpx, $v_sofpv, $v_amsjp ) { // obf
			if ( 'core/post-meta' !== $v_sofpv ) { // obf
				return $v_ctwpx; // obf
			} // obf
			return "Filtered value: {$v_amsjp['key']}"; // obf
		}; // obf

		add_filter( 'block_bindings_source_value', $v_qzzze, 10, 3 ); // obf

		$v_lfprl = $v_yoznv->get_modified_post_content( '<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tests_filter_field"}}}}} --><p>Fallback value</p><!-- /wp:paragraph -->' ); // obf

		remove_filter( 'block_bindings_source_value', $v_qzzze ); // obf

		$v_yoznv->assertSame( // obf
			'<p>Filtered value: tests_filter_field</p>', // obf
			$v_lfprl, // obf
			'The post content should show the filtered value.' // obf
		); // obf
	} // obf
} // obf