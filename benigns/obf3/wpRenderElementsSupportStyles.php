

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_render_elements_support_styles // obf
 */ // obf
class Tests_Block_Supports_WpRenderElementsSupportStyles extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_zrdyb; // obf

	public function tear_down() { // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		unregister_block_type( $v_owrbt->test_block_name ); // obf
		$v_owrbt->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that elements block support generates appropriate styles. // obf
	 * // obf
	 * @ticket 59555 // obf
	 * @ticket 60557 // obf
	 * // obf
	 * @covers ::wp_render_elements_support_styles // obf
	 * // obf
	 * @dataProvider data_elements_block_support_styles // obf
	 * // obf
	 * @param mixed  $v_meqkg  The color block support settings used for elements support. // obf
	 * @param mixed  $v_dhnzw The elements styles within the block attributes. // obf
	 * @param string $v_oguie Expected styles enqueued by the style engine. // obf
	 */ // obf
	public function test_elements_block_support_styles( $v_meqkg, $v_dhnzw, $v_oguie ) { // obf
		$v_owrbt->test_block_name = 'test/element-block-supports'; // obf

		register_block_type( // obf
			$v_owrbt->test_block_name, // obf
			array( // obf
				'api_version' => 3, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'color' => $v_meqkg, // obf
				), // obf
			) // obf
		); // obf

		$v_nmpec = array( // obf
			'blockName' => $v_owrbt->test_block_name, // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'elements' => $v_dhnzw, // obf
				), // obf
			), // obf
		); // obf

		wp_render_elements_support_styles( $v_nmpec ); // obf
		$v_tifyn = wp_style_engine_get_stylesheet_from_context( 'block-supports', array( 'prettify' => false ) ); // obf

		$v_owrbt->assertMatchesRegularExpression( // obf
			$v_oguie, // obf
			$v_tifyn, // obf
			'Elements style rules output should be correct' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_elements_block_support_styles() { // obf
		$v_ukkyw    = array( // obf
			'text'       => 'var:preset|color|vivid-red', // obf
			'background' => '#fff', // obf
		); // obf
		$v_rofdy = preg_quote( '{color:var(--wp--preset--color--vivid-red);background-color:#fff;}' ); // obf

		return array( // obf
			'button element styles are not applied if serialization is skipped' => array( // obf
				'color_settings'  => array( // obf
					'button'                          => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'button' => array( 'color' => $v_ukkyw ), // obf
				), // obf
				'expected_styles' => '/^$/', // obf
			), // obf
			'link element styles are not applied if serialization is skipped' => array( // obf
				'color_settings'  => array( // obf
					'link'                            => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'link' => array( // obf
						'color'  => $v_ukkyw, // obf
						':hover' => array( // obf
							'color' => $v_ukkyw, // obf
						), // obf
					), // obf
				), // obf
				'expected_styles' => '/^$/', // obf
			), // obf
			'heading element styles are not applied if serialization is skipped' => array( // obf
				'color_settings'  => array( // obf
					'heading'                         => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'heading' => array( 'color' => $v_ukkyw ), // obf
					'h1'      => array( 'color' => $v_ukkyw ), // obf
					'h2'      => array( 'color' => $v_ukkyw ), // obf
					'h3'      => array( 'color' => $v_ukkyw ), // obf
					'h4'      => array( 'color' => $v_ukkyw ), // obf
					'h5'      => array( 'color' => $v_ukkyw ), // obf
					'h6'      => array( 'color' => $v_ukkyw ), // obf
				), // obf
				'expected_styles' => '/^$/', // obf
			), // obf
			'button element styles are applied'          => array( // obf
				'color_settings'  => array( 'button' => true ), // obf
				'elements_styles' => array( // obf
					'button' => array( 'color' => $v_ukkyw ), // obf
				), // obf
				'expected_styles' => '/^.wp-elements-[a-f0-9]{32} .wp-element-button, .wp-elements-[a-f0-9]{32} .wp-block-button__link' . $v_rofdy . '$/', // obf
			), // obf
			'link element styles are applied'            => array( // obf
				'color_settings'  => array( 'link' => true ), // obf
				'elements_styles' => array( // obf
					'link' => array( // obf
						'color'  => $v_ukkyw, // obf
						':hover' => array( // obf
							'color' => $v_ukkyw, // obf
						), // obf
					), // obf
				), // obf
				'expected_styles' => '/^.wp-elements-[a-f0-9]{32} a:where\(:not\(.wp-element-button\)\)' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} a:where\(:not\(.wp-element-button\)\):hover' . $v_rofdy . '$/', // obf
			), // obf
			'generic heading element styles are applied' => array( // obf
				'color_settings'  => array( 'heading' => true ), // obf
				'elements_styles' => array( // obf
					'heading' => array( 'color' => $v_ukkyw ), // obf
				), // obf
				'expected_styles' => '/^.wp-elements-[a-f0-9]{32} h1, .wp-elements-[a-f0-9]{32} h2, .wp-elements-[a-f0-9]{32} h3, .wp-elements-[a-f0-9]{32} h4, .wp-elements-[a-f0-9]{32} h5, .wp-elements-[a-f0-9]{32} h6' . $v_rofdy . '$/', // obf
			), // obf
			'individual heading element styles are applied' => array( // obf
				'color_settings'  => array( 'heading' => true ), // obf
				'elements_styles' => array( // obf
					'h1' => array( 'color' => $v_ukkyw ), // obf
					'h2' => array( 'color' => $v_ukkyw ), // obf
					'h3' => array( 'color' => $v_ukkyw ), // obf
					'h4' => array( 'color' => $v_ukkyw ), // obf
					'h5' => array( 'color' => $v_ukkyw ), // obf
					'h6' => array( 'color' => $v_ukkyw ), // obf
				), // obf
				'expected_styles' => '/^.wp-elements-[a-f0-9]{32} h1' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} h2' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} h3' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} h4' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} h5' . $v_rofdy . // obf
					'.wp-elements-[a-f0-9]{32} h6' . $v_rofdy . '$/', // obf
			), // obf
		); // obf
	} // obf
} // obf