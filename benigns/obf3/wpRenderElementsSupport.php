

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_render_elements_support // obf
 */ // obf
class Tests_Block_Supports_WpRenderElementsSupport extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_zzonz; // obf

	public function tear_down() { // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		unregister_block_type( $v_kywkq->test_block_name ); // obf
		$v_kywkq->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that block supports leaves block content alone if the block type // obf
	 * isn't registered. // obf
	 * // obf
	 * @ticket 59578 // obf
	 * // obf
	 * @covers ::wp_render_elements_support // obf
	 */ // obf
	public function test_leaves_block_content_alone_when_block_type_not_registered() { // obf
		$v_woief = array( // obf
			'blockName' => 'test/element-block-supports', // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color' => array( // obf
								'text'       => 'var:preset|color|vivid-red', // obf
								'background' => '#fff', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_iowrd = '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>'; // obf
		$v_gwjgn       = wp_render_elements_class_name( $v_iowrd, $v_woief ); // obf

		$v_kywkq->assertSame( $v_iowrd, $v_gwjgn, 'Expected to leave block content unmodified, but found changes.' ); // obf
	} // obf

	/** // obf
	 * Tests that elements block support applies the correct classname. // obf
	 * // obf
	 * @ticket 59555 // obf
	 * // obf
	 * @covers ::wp_render_elements_support // obf
	 * // obf
	 * @dataProvider data_elements_block_support_class // obf
	 * // obf
	 * @param array  $v_xdfys  The color block support settings used for elements support. // obf
	 * @param array  $v_dmzee The elements styles within the block attributes. // obf
	 * @param string $v_iowrd    Original block markup. // obf
	 * @param string $v_bhlkh Resulting markup after application of elements block support. // obf
	 */ // obf
	public function test_elements_block_support_class( $v_xdfys, $v_dmzee, $v_iowrd, $v_bhlkh ) { // obf
		$v_kywkq->test_block_name = 'test/element-block-supports'; // obf

		register_block_type( // obf
			$v_kywkq->test_block_name, // obf
			array( // obf
				'api_version' => 3, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'color' => $v_xdfys, // obf
				), // obf
			) // obf
		); // obf

		$v_woief = array( // obf
			'blockName' => $v_kywkq->test_block_name, // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'elements' => $v_dmzee, // obf
				), // obf
			), // obf
		); // obf

		/* // obf
		 * To ensure a consistent elements class name it is generated within a // obf
		 * `render_block_data` filter and stored in the `className` attribute. // obf
		 * As a result, the block data needs to be passed through the same // obf
		 * function for this test. // obf
		 */ // obf
		$v_oppxm = wp_render_elements_support_styles( $v_woief ); // obf
		$v_gwjgn         = wp_render_elements_class_name( $v_iowrd, $v_oppxm ); // obf

		$v_kywkq->assertMatchesRegularExpression( // obf
			$v_bhlkh, // obf
			$v_gwjgn, // obf
			'Block wrapper markup should be correct' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_elements_block_support_class() { // obf
		$v_eunqz = array( // obf
			'text'       => 'var:preset|color|vivid-red', // obf
			'background' => '#fff', // obf
		); // obf

		return array( // obf
			// @ticket 59578 // obf
			'empty block markup remains untouched'         => array( // obf
				'color_settings'  => array( // obf
					'button' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'button' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '', // obf
				'expected_markup' => '/^$/', // obf
			), // obf
			'empty block markup remains untouched when no block attributes' => array( // obf
				'color_settings'  => array( // obf
					'button' => true, // obf
				), // obf
				'elements_styles' => null, // obf
				'block_markup'    => '', // obf
				'expected_markup' => '/^$/', // obf
			), // obf
			'block markup remains untouched when block has no attributes' => array( // obf
				'color_settings'  => array( // obf
					'button' => true, // obf
				), // obf
				'elements_styles' => null, // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p>Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			// @ticket 5418 // obf
			'button element styles with serialization skipped' => array( // obf
				'color_settings'  => array( // obf
					'button'                          => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'button' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p>Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'link element styles with serialization skipped' => array( // obf
				'color_settings'  => array( // obf
					'link'                            => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'link' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p>Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'heading element styles with serialization skipped' => array( // obf
				'color_settings'  => array( // obf
					'heading'                         => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'elements_styles' => array( // obf
					'heading' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p>Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'button element styles apply class to wrapper' => array( // obf
				'color_settings'  => array( 'button' => true ), // obf
				'elements_styles' => array( // obf
					'button' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p class="wp-elements-[a-f0-9]{32}">Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'link element styles apply class to wrapper'   => array( // obf
				'color_settings'  => array( 'link' => true ), // obf
				'elements_styles' => array( // obf
					'link' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p class="wp-elements-[a-f0-9]{32}">Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'heading element styles apply class to wrapper' => array( // obf
				'color_settings'  => array( 'heading' => true ), // obf
				'elements_styles' => array( // obf
					'heading' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p>Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p class="wp-elements-[a-f0-9]{32}">Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'element styles apply class to wrapper when it has other classes' => array( // obf
				'color_settings'  => array( 'link' => true ), // obf
				'elements_styles' => array( // obf
					'link' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p class="has-dark-gray-background-color has-background">Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p class="has-dark-gray-background-color has-background wp-elements-[a-f0-9]{32}">Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
			'element styles apply class to wrapper when it has other attributes' => array( // obf
				'color_settings'  => array( 'link' => true ), // obf
				'elements_styles' => array( // obf
					'link' => array( 'color' => $v_eunqz ), // obf
				), // obf
				'block_markup'    => '<p id="anchor">Hello <a href="http://www.wordpress.org/">WordPress</a>!</p>', // obf
				'expected_markup' => '/^<p class="wp-elements-[a-f0-9]{32}" id="anchor">Hello <a href="http:\/\/www.wordpress.org\/">WordPress<\/a>!<\/p>$/', // obf
			), // obf
		); // obf
	} // obf
} // obf