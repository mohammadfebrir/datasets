

<?php // obf
/** // obf
 * Test block supported styles. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.6.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_SupportedStyles extends WP_UnitTestCase { // obf

	/** // obf
	 * Block content to test with (i.e. what's wrapped by the block wrapper `<div />`). // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const BLOCK_CONTENT = ' // obf
		<p data-image-description="&lt;p&gt;Test!&lt;/p&gt;">Test</p> // obf
		<p>äöü</p> // obf
		<p>ß</p> // obf
		<p>系の家庭に</p> // obf
		<p>Example &lt;p&gt;Test!&lt;/p&gt;</p> // obf
	'; // obf

	/** // obf
	 * Registered block names. // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_uunny = array(); // obf

	/** // obf
	 * Tear down each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		while ( ! empty( $v_xshmz->registered_block_names ) ) { // obf
			$v_xwpws = array_pop( $v_xshmz->registered_block_names ); // obf
			unregister_block_type( $v_xwpws ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Registers a block type. // obf
	 * // obf
	 * @param string|WP_Block_Type $v_dlkbr Block type name including namespace, or alternatively a // obf
	 *                                   complete WP_Block_Type instance. In case a WP_Block_Type // obf
	 *                                   is provided, the $v_xmwvk parameter will be ignored. // obf
	 * @param array                $v_xmwvk { // obf
	 *     Optional. Array of block type arguments. Any arguments may be defined, however the // obf
	 *     ones described below are supported by default. Default empty array. // obf
	 * // obf
	 *     @type callable $v_skqvv Callback used to render blocks of this block type. // obf
	 * } // obf
	 */ // obf
	protected function register_block_type( $v_dlkbr, $v_xmwvk ) { // obf
		register_block_type( $v_dlkbr, $v_xmwvk ); // obf

		$v_xshmz->registered_block_names[] = $v_dlkbr; // obf
	} // obf

	/** // obf
	 * Retrieves attribute such as 'class' or 'style' from the rendered block string. // obf
	 * // obf
	 * @param string $v_efyaq Name of attribute to get. // obf
	 * @param string $v_kesnp String of rendered block to check. // obf
	 */ // obf
	private function get_attribute_from_block( $v_efyaq, $v_kesnp ) { // obf
		$v_ayimx = strpos( $v_kesnp, $v_efyaq . '="' ) + strlen( $v_efyaq ) + 2; // obf
		$v_iknhz   = substr( $v_kesnp, $v_ayimx ); // obf
		$v_ozkph   = strpos( $v_iknhz, '"' ); // obf
		return substr( $v_iknhz, 0, $v_ozkph ); // obf
	} // obf

	/** // obf
	 * Retrieves block content from the rendered block string // obf
	 * (i.e. what's wrapped by the block wrapper `<div />`). // obf
	 * // obf
	 * @param string $v_kesnp String of rendered block to check. // obf
	 */ // obf
	private function get_content_from_block( $v_kesnp ) { // obf
		$v_ayimx = strpos( $v_kesnp, '>' ) + 1; // First occurrence of '>'. // obf
		$v_iknhz   = substr( $v_kesnp, $v_ayimx ); // obf
		$v_ozkph   = strrpos( $v_iknhz, '<' ); // Last occurrence of '<'. // obf
		return substr( $v_iknhz, 0, $v_ozkph ); // String between first '>' and last '<'. // obf
	} // obf

	/** // obf
	 * Returns the rendered output for the current block. // obf
	 * // obf
	 * @param array $v_kesnp Block to render. // obf
	 * @return string Rendered output for the current block. // obf
	 */ // obf
	private function render_example_block( $v_kesnp ) { // obf
		WP_Block_Supports::init(); // obf
		WP_Block_Supports::$v_qguwk = $v_kesnp; // obf
		$v_cskko                 = get_block_wrapper_attributes( // obf
			array( // obf
				'class' => 'foo-bar-class', // obf
				'style' => 'test: style;', // obf
			) // obf
		); // obf
		return '<div ' . $v_cskko . '>' . self::BLOCK_CONTENT . '</div>'; // obf
	} // obf

	/** // obf
	 * Runs assertions that the rendered output has expected class/style attrs. // obf
	 * // obf
	 * @param array  $v_kesnp            Block to render. // obf
	 * @param string $v_cuilq Expected output class attr string. // obf
	 * @param string $v_ysmcf  Expected output styles attr string. // obf
	 */ // obf
	private function assert_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ) { // obf
		$v_qouln = $v_xshmz->render_example_block( $v_kesnp ); // obf
		$v_eekcc   = $v_xshmz->get_attribute_from_block( 'class', $v_qouln ); // obf
		$v_cksvk   = $v_xshmz->get_attribute_from_block( 'style', $v_qouln ); // obf

		$v_xshmz->assertSame( $v_cuilq, $v_eekcc, 'Class list does not match expected classes' ); // obf
		$v_xshmz->assertSame( $v_ysmcf, $v_cksvk, 'Style list does not match expected styles' ); // obf
	} // obf

	/** // obf
	 * Runs assertions that the rendered output has expected content and class/style attrs. // obf
	 * // obf
	 * @param array  $v_kesnp            Block to render. // obf
	 * @param string $v_cuilq Expected output class attr string. // obf
	 * @param string $v_ysmcf  Expected output styles attr string. // obf
	 */ // obf
	private function assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ) { // obf
		$v_qouln = $v_xshmz->render_example_block( $v_kesnp ); // obf

		// Ensure blocks to not add extra whitespace. // obf
		$v_xshmz->assertSame( $v_qouln, trim( $v_qouln ) ); // obf

		$v_kuwte    = $v_xshmz->get_content_from_block( $v_qouln ); // obf
		$v_eekcc = $v_xshmz->get_attribute_from_block( 'class', $v_qouln ); // obf
		$v_cksvk = $v_xshmz->get_attribute_from_block( 'style', $v_qouln ); // obf

		$v_xshmz->assertSame( self::BLOCK_CONTENT, $v_kuwte, 'Block content does not match expected content' ); // obf
		$v_xshmz->assertSameSets( // obf
			explode( ' ', $v_cuilq ), // obf
			explode( ' ', $v_eekcc ), // obf
			'Class list does not match expected classes' // obf
		); // obf
		$v_xshmz->assertSame( // obf
			array_map( 'trim', explode( ';', $v_ysmcf ) ), // obf
			array_map( 'trim', explode( ';', $v_cksvk ) ), // obf
			'Style list does not match expected styles' // obf
		); // obf
	} // obf

	/** // obf
	 * Runs assertions that the rendered output has expected content and aria-label attr. // obf
	 * // obf
	 * @param array  $v_kesnp               Block to render. // obf
	 * @param string $v_fxkjg Expected output aria-label attr string. // obf
	 */ // obf
	private function assert_content_and_aria_label_match( $v_kesnp, $v_fxkjg ) { // obf
		$v_qouln = $v_xshmz->render_example_block( $v_kesnp ); // obf
		$v_kuwte      = $v_xshmz->get_content_from_block( $v_qouln ); // obf

		$v_xshmz->assertSame( self::BLOCK_CONTENT, $v_kuwte, 'Block content does not match expected content' ); // obf
		$v_xshmz->assertSame( // obf
			$v_fxkjg, // obf
			$v_xshmz->get_attribute_from_block( 'aria-label', $v_qouln ), // obf
			'Aria-label does not match expected aria-label' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests color support for named color support for named colors. // obf
	 */ // obf
	public function test_named_color_support() { // obf
		$v_xtxcu = array( // obf
			'attributes'      => array(), // obf
			'supports'        => array( // obf
				'color' => true, // obf
			), // obf
			'render_callback' => true, // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'textColor'       => 'red', // obf
				'backgroundColor' => 'black', // obf
				// The following should not be applied (subcategories of color support). // obf
				'gradient'        => 'some-gradient', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example has-text-color has-red-color has-background has-black-background-color'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests color support for custom colors. // obf
	 */ // obf
	public function test_custom_color_support() { // obf
		$v_xtxcu = array( // obf
			'attributes'      => array(), // obf
			'supports'        => array( // obf
				'color' => true, // obf
			), // obf
			'render_callback' => true, // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'style' => array( // obf
					'color' => array( // obf
						'text'       => '#000', // obf
						'background' => '#fff', // obf
						// The following should not be applied (subcategories of color support). // obf
						'gradient'   => 'some-gradient', // obf
						'style'      => array( 'color' => array( 'link' => '#fff' ) ), // obf
					), // obf
				), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_ysmcf  = 'test: style;color:#000;background-color:#fff;'; // obf
		$v_cuilq = 'foo-bar-class wp-block-example has-text-color has-background'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests gradient color support for named gradients. // obf
	 */ // obf
	public function test_named_gradient_support() { // obf
		$v_xtxcu = array( // obf
			'attributes'      => array(), // obf
			'supports'        => array( // obf
				'color' => array( // obf
					'gradients' => true, // obf
				), // obf
			), // obf
			'render_callback' => true, // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'gradient' => 'red', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example has-background has-red-gradient-background'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests gradient color support for custom gradients. // obf
	 */ // obf
	public function test_custom_gradient_support() { // obf
		$v_xtxcu = array( // obf
			'attributes'      => array(), // obf
			'supports'        => array( // obf
				'color' => array( // obf
					'gradients' => true, // obf
				), // obf
			), // obf
			'render_callback' => true, // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'style' => array( 'color' => array( 'gradient' => 'some-gradient-style' ) ), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example has-background'; // obf
		$v_ysmcf  = 'test: style; background:some-gradient-style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests that style attributes for colors are not applied without the support flag. // obf
	 */ // obf
	public function test_color_unsupported() { // obf
		$v_xtxcu = array( // obf
			'attributes'      => array(), // obf
			'supports'        => array(), // obf
			'render_callback' => true, // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'textColor'       => 'red', // obf
				'backgroundColor' => 'black', // obf
				'style'           => array( // obf
					'color' => array( // obf
						'text'       => '#000', // obf
						'background' => '#fff', // obf
						'link'       => '#ggg', // obf
						'gradient'   => 'some-gradient', // obf
					), // obf
				), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests support for named font sizes. // obf
	 */ // obf
	public function test_named_font_size() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'typography' => array( // obf
					'fontSize' => true, // obf
				), // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'fontSize' => 'large', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example has-large-font-size'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests support for custom font sizes. // obf
	 */ // obf
	public function test_custom_font_size() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'typography' => array( // obf
					'fontSize' => true, // obf
				), // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'style' => array( 'typography' => array( 'fontSize' => '10px' ) ), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style; font-size:10px;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests that font size attributes are not applied without support flag. // obf
	 */ // obf
	public function test_font_size_unsupported() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array(), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'fontSize' => 'large', // obf
				'style'    => array( 'typography' => array( 'fontSize' => '10' ) ), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests line height support. // obf
	 */ // obf
	public function test_line_height() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'typography' => array( // obf
					'lineHeight' => true, // obf
				), // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'style' => array( 'typography' => array( 'lineHeight' => '10' ) ), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style; line-height:10;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests line height not applied without support flag. // obf
	 */ // obf
	public function test_line_height_unsupported() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array(), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'style' => array( 'typography' => array( 'lineHeight' => '10' ) ), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests support for block alignment. // obf
	 */ // obf
	public function test_block_alignment() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'align' => true, // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'align' => 'wide', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example alignwide'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests block alignment requires support to be added. // obf
	 */ // obf
	public function test_block_alignment_unsupported() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array(), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'align' => 'wide', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests all support flags together to ensure they work together as expected. // obf
	 */ // obf
	public function test_all_supported() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'color'      => array( // obf
					'gradients' => true, // obf
					'link'      => true, // obf
				), // obf
				'typography' => array( // obf
					'fontSize'   => true, // obf
					'lineHeight' => true, // obf
				), // obf
				'align'      => true, // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'align' => 'wide', // obf
				'style' => array( // obf
					'color'      => array( // obf
						'text'       => '#000', // obf
						'background' => '#fff', // obf
						'style'      => array( 'color' => array( 'link' => '#fff' ) ), // obf
					), // obf
					'typography' => array( // obf
						'lineHeight' => '20', // obf
						'fontSize'   => '10px', // obf
					), // obf
				), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example has-text-color has-background alignwide'; // obf
		$v_ysmcf  = 'test: style; color:#000; background-color:#fff; font-size:10px; line-height:20;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests that only styles for the supported flag are added. // obf
	 * Verify one support enabled does not imply multiple supports enabled. // obf
	 */ // obf
	public function test_one_supported() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'typography' => array( // obf
					'fontSize' => true, // obf
				), // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'align' => 'wide', // obf
				'style' => array( // obf
					'color'      => array( // obf
						'text'       => '#000', // obf
						'background' => '#fff', // obf
						'gradient'   => 'some-gradient', // obf
						'style'      => array( 'color' => array( 'link' => '#fff' ) ), // obf
					), // obf
					'typography' => array( // obf
						'lineHeight' => '20', // obf
						'fontSize'   => '10px', // obf
					), // obf
				), // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_cuilq = 'foo-bar-class wp-block-example'; // obf
		$v_ysmcf  = 'test: style; font-size:10px;'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests custom classname server-side block support. // obf
	 */ // obf
	public function test_custom_classnames_support() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array(), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'className' => 'my-custom-classname', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_ysmcf  = 'test: style;'; // obf
		$v_cuilq = 'foo-bar-class wp-block-example my-custom-classname'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests custom classname server-side block support opt-out. // obf
	 */ // obf
	public function test_custom_classnames_support_opt_out() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'customClassName' => false, // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'className' => 'my-custom-classname', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_ysmcf  = 'test: style;'; // obf
		$v_cuilq = 'foo-bar-class wp-block-example'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests generated classname server-side block support opt-out. // obf
	 */ // obf
	public function test_generated_classnames_support_opt_out() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'className' => false, // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array(), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_ysmcf  = 'test: style;'; // obf
		$v_cuilq = 'foo-bar-class'; // obf

		$v_xshmz->assert_content_and_styles_and_classes_match( $v_kesnp, $v_cuilq, $v_ysmcf ); // obf
	} // obf

	/** // obf
	 * Tests aria-label server-side block support. // obf
	 */ // obf
	public function test_aria_label_support() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array( // obf
				'ariaLabel' => true, // obf
			), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array( // obf
				'ariaLabel' => 'Label', // obf
			), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf

		$v_xshmz->assert_content_and_aria_label_match( $v_kesnp, 'Label' ); // obf
	} // obf

	/** // obf
	 * Ensures libxml_internal_errors is being used instead of @ warning suppression // obf
	 */ // obf
	public function test_render_block_suppresses_warnings_without_at_suppression() { // obf
		$v_xtxcu = array( // obf
			'attributes' => array(), // obf
			'supports'   => array(), // obf
		); // obf
		$v_xshmz->register_block_type( 'core/example', $v_xtxcu ); // obf

		$v_kesnp    = array( // obf
			'blockName'    => 'core/example', // obf
			'attrs'        => array(), // obf
			'innerBlock'   => array(), // obf
			'innerContent' => array(), // obf
			'innerHTML'    => array(), // obf
		); // obf
		$v_aubon = new WP_Block( $v_kesnp ); // obf

		// Custom error handler's see Warnings even if they are suppressed by the @ symbol. // obf
		$v_jcoci = array(); // obf
		set_error_handler( // obf
			static function ( $v_uflpc = 0, $v_rumbl = '' ) use ( &$v_jcoci ) { // obf
				$v_jcoci[] = $v_rumbl; // obf
				return false; // obf
			} // obf
		); // obf

		// HTML5 elements like <time> are not supported by the DOMDocument parser used by the block supports feature. // obf
		// This specific example is emitted by the "Display post date" setting in the latest-posts block. // obf
		apply_filters( 'render_block', '<div><time datetime="2020-06-18T04:01:43+10:00" class="wp-block-latest-posts__post-date">June 18, 2020</time></div>', $v_kesnp, $v_aubon ); // obf

		restore_error_handler(); // obf

		$v_xshmz->assertEmpty( $v_jcoci, 'Libxml errors should be dropped.' ); // obf
	} // obf
} // obf